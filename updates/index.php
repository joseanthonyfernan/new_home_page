<?php include('../assets/header.php'); ?>

    <!-- Social Media Updates Section -->
    <section class="social-updates-section py-5">
        <div class="container-fluid px-lg-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Updates from Social Media</h2>
                <div class="mt-3">
                    <a href="facebook_sync.php" class="btn btn-outline-primary btn-sm rounded-pill px-4">
                        <i class="bi bi-arrow-clockwise me-1"></i> Sync Latest Updates
                    </a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                require_once 'db.php';
                try {
                    $stmt = $pdo->query("SELECT * FROM facebook_config ORDER BY id ASC");
                    $colors = ['primary', 'success', 'info', 'warning', 'danger'];
                    $i = 0;
                    while ($row = $stmt->fetch()) {
                        $color = $colors[$i % count($colors)];
                        ?>
                        <!-- Column: <?php echo htmlspecialchars($row['display_name']); ?> -->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="social-col-header">
                                <h4 class="social-title"><span class="live-pulse"></span> <?php echo htmlspecialchars($row['display_name']); ?></h4>
                                <div class="social-underline"></div>
                            </div>
                            <div class="social-card">
                                <div class="fb-feed-container" id="<?php echo htmlspecialchars($row['page_name']); ?>-feed">
                                    <div class="text-center p-4">
                                        <div class="spinner-border text-<?php echo $color; ?> spinner-border-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                } catch (PDOException $e) {
                    echo "<div class='alert alert-danger'>Error loading updates: " . $e->getMessage() . "</div>";
                }
                ?>
            </div>
            <div class="text-center mt-5">
                <a href="https://www.facebook.com/groups/250995015059471" target="_blank" class="btn btn-primary px-5 rounded-pill shadow-lg">
                    <i class="bi bi-facebook me-2"></i> Join MCCnians Group
                </a>
            </div>
        </div>
    </section>

<?php include('../assets/footer.php'); ?>
