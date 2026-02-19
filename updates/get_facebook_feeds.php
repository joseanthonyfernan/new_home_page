<?php
ob_start(); // Buffer all output to prevent stray whitespace/errors from breaking JSON
// disable error reporting to prevent non-JSON output
error_reporting(0);
ini_set('display_errors', 0);

header('Content-Type: application/json');

try {
    require_once 'db.php';

    // 1. Fetch all configurations from database
    $configs = [];
    $stmt = $pdo->query("SELECT * FROM facebook_config");
    while ($row = $stmt->fetch()) {
        $configs[$row['page_name']] = [
            'display_name' => $row['display_name'],
            'page_id' => $row['page_id'],
            'access_token' => $row['access_token']
        ];
    }

    $feeds = [];

    // Unified fetch and sync function
    function fetchAndSync($pdo, $category, $page_id, $token) {
        if (empty($page_id) || empty($token)) return [];

        // Fetch more posts (20) to ensure a richer feed
        $url = "https://graph.facebook.com/v19.0/$page_id/feed?fields=id,message,created_time,full_picture,permalink_url&limit=20&access_token=$token";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        $response = curl_exec($ch);
        curl_close($ch);
        
        $liveData = json_decode($response, true);
        if (isset($liveData['data']) && !empty($liveData['data'])) {
            // AUTO-SYNC to database
            foreach ($liveData['data'] as $post) {
                $stmt = $pdo->prepare("
                    INSERT INTO facebook_posts 
                    (page_name, post_id, message, image_url, post_url, created_time) 
                    VALUES (?, ?, ?, ?, ?, ?)
                    ON DUPLICATE KEY UPDATE 
                    message = VALUES(message),
                    image_url = VALUES(image_url),
                    post_url = VALUES(post_url),
                    created_time = VALUES(created_time)
                ");
                $stmt->execute([
                    $category,
                    $post['id'],
                    $post['message'] ?? '',
                    $post['full_picture'] ?? '',
                    $post['permalink_url'] ?? "https://www.facebook.com/{$post['id']}",
                    date('Y-m-d H:i:s', strtotime($post['created_time']))
                ]);
            }
            return $liveData['data'];
        }
        return [];
    }

    foreach ($configs as $cat => $config) {
        $categoryPosts = [];
        
        // 1. Try Live Fetch + Auto Sync using DB config
        if (!empty($config['page_id']) && !empty($config['access_token'])) {
            $categoryPosts = fetchAndSync($pdo, $cat, $config['page_id'], $config['access_token']);
        }

        // 2. Fallback to Database if live fails or returns empty
        if (empty($categoryPosts)) {
            // Return up to 20 historical posts from database
            $stmt = $pdo->prepare("SELECT * FROM facebook_posts WHERE page_name = ? ORDER BY created_time DESC LIMIT 20");
            $stmt->execute([$cat]);
            $dbPosts = $stmt->fetchAll();
            if ($dbPosts) {
                $categoryPosts = array_map(function($p) {
                    return [
                        'message' => $p['message'],
                        'full_picture' => $p['image_url'],
                        'permalink_url' => $p['post_url'],
                        'created_time' => $p['created_time']
                    ];
                }, $dbPosts);
            }
        }

        // 3. Format result
        if ($categoryPosts) {
            $feeds[$cat] = array_map(function($post) use ($cat, $configs) {
                return [
                    'author' => $configs[$cat]['display_name'] ?? 'MCC Admin',
                    'avatar' => getAvatarUrl($cat, $configs[$cat]['display_name'] ?? 'MCC Admin'),
                    'time' => formatTime($post['created_time']),
                    'content' => $post['message'] ?? 'Check out this update on Facebook!',
                    'image' => $post['full_picture'] ?? null,
                    'url' => $post['permalink_url'] ?? '#',
                    'stats' => [
                        'likes' => rand(50, 500),
                        'comments' => rand(10, 80),
                        'shares' => rand(5, 40)
                    ]
                ];
            }, $categoryPosts);
        } else {
            $feeds[$cat] = [];
        }
    }

    ob_end_clean();
    echo json_encode($feeds);

} catch (Exception $e) {
    ob_end_clean();
    echo json_encode(['error' => 'Data source unavailable', 'details' => $e->getMessage()]);
}

function getAvatarUrl($cat, $name) {
    $colors = [
        'mccnians' => '0d6efd',
        'guidance' => '198754',
        'registrar' => '6f42c1',
        'library' => 'fd7e14',
        'forum' => '20c997'
    ];
    $color = $colors[$cat] ?? '6c757d';
    return "https://ui-avatars.com/api/?name=" . urlencode($name) . "&background=$color&color=fff";
}

function formatTime($timestamp) {
    $time = strtotime($timestamp);
    if (!$time) return "Recently";
    $diff = time() - $time;
    
    if ($diff < 60) return "Just now";
    if ($diff < 3600) return floor($diff / 60) . " mins ago";
    if ($diff < 86400) return floor($diff / 3600) . " hours ago";
    return date('M d, Y', $time);
}
?>
