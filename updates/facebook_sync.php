<?php
require_once 'db.php';

// Set header for browser viewing
header('Content-Type: text/html; charset=utf-8');
echo "<style>body { font-family: sans-serif; line-height: 1.6; background: #f4f4f9; padding: 20px; } 
      .sync-card { background: white; padding: 15px; margin-bottom: 10px; border-radius: 8px; border-left: 5px solid #ccc; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
      .success { border-left-color: #28a745; }
      .error { border-left-color: #dc3545; }
      .skip { border-left-color: #ffc107; }
      h2 { color: #333; }</style>";

// Prevent script timeout for long sync sessions
set_time_limit(0);

echo "<h2>🔄 Facebook Feed Synchronization</h2>";

// ==========================================================
// CONFIGURATION - LOADED FROM DATABASE
// ==========================================================
try {
    $stmt = $pdo->query("SELECT * FROM facebook_config");
    $page_configs = [];
    while ($row = $stmt->fetch()) {
        $page_configs[$row['page_name']] = [
            'name' => $row['display_name'],
            'page_id' => $row['page_id'],
            'access_token' => $row['access_token']
        ];
    }
} catch (PDOException $e) {
    die("<div class='sync-card error'>❌ Error loading configuration: " . $e->getMessage() . "</div>");
}

/**
 * Main function to perform comprehensive "Full Sync"
 */
function fetchAndStorePosts($pdo, $category, $config) {
    $page_id = trim($config['page_id']);
    $token = $config['access_token'];
    $name = $config['name'];

    if (empty($page_id) || empty($token)) {
        echo "<div class='sync-card skip'>🟡 <strong>Skipping $name:</strong> Missing configuration.</div>";
        return;
    }

    echo "<div class='sync-card'>";
    echo "🔵 <strong>Deep Syncing $name...</strong> (ID: $page_id)<br>";

    $next_url = "https://graph.facebook.com/v19.0/$page_id/feed?fields=id,message,created_time,full_picture,permalink_url&limit=50&access_token=$token";
    $total_processed = 0;
    $pages_fetched = 0;
    $max_pages = 20; // Fetch up to 20 pages (approx 1,000 posts) for a full history catch-up

    while ($next_url && $pages_fetched < $max_pages) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $next_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Debug: save first page response
        if ($pages_fetched == 0) {
            file_put_contents("debug_full_response_{$category}.json", $response);
        }

        if ($response === false || $httpCode !== 200) {
            $error = json_decode($response, true);
            $msg = $error['error']['message'] ?? 'Connection failed';
            echo "<span style='color:#dc3545'>❌ Error on page " . ($pages_fetched + 1) . ": $msg</span><br>";
            break;
        }

        $data = json_decode($response, true);
        if (!isset($data['data']) || empty($data['data'])) {
            break;
        }

        foreach ($data['data'] as $post) {
            savePost($pdo, $category, $post['id'], $post['message'] ?? '', $post['full_picture'] ?? '', $post['permalink_url'] ?? "https://www.facebook.com/{$post['id']}", $post['created_time']);
            $total_processed++;
        }

        $pages_fetched++;
        $next_url = $data['paging']['next'] ?? null;
    }

    if ($total_processed > 0) {
        echo "<span style='color:#28a745'>✅ Success: $total_processed posts synced across $pages_fetched pages of history.</span>";
    } else {
        echo "<div style='margin-top:10px; padding:10px; background:#fff3cd; border:1px solid #ffeeba; border-radius:4px;'>";
        echo "<span style='color:#856404'>⚠️ <strong>No posts found.</strong></span><br>";
        echo "<small style='color:#6c757d'>Possible reasons:<br>";
        echo "• The Page ID might be for a <strong>Personal Profile</strong> (not supported by API).<br>";
        echo "• The Access Token lacks <strong>pages_read_user_content</strong> permissions.<br>";
        echo "• The Page is <strong>Unpublished</strong> or has Age/Country restictions.<br>";
        echo "• Check if your Page ID is correct: <a href='https://lookup-id.com/' target='_blank'>Find ID here</a></small>";
        echo "</div>";
    }
    echo "</div>";
}

    /**
     * Helper to save/update a post
     */
    function savePost($pdo, $category, $id, $message, $image, $url, $time) {
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
            $id,
            $message,
            $image,
            $url,
            date('Y-m-d H:i:s', strtotime($time))
        ]);
    }

// Run the sync for all pages
foreach ($page_configs as $category => $config) {
    fetchAndStorePosts($pdo, $category, $config);
}

echo "<br><a href='index.php' style='display:inline-block; padding:10px 20px; background:#0d6efd; color:white; text-decoration:none; border-radius:5px;'>Return to News Page</a>";
?>

