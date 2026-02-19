<?php
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/new_home_page/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos Community College</title>
    <meta name="description"
        content="Madridejos Community College is a state-of-the-art college portal for students, faculty, and administration.">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Top Banner -->
    <div class="top-banner bg-dark text-white py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex gap-4 small">
                        <span><i class="bi bi-geo-alt-fill text-danger me-1"></i>Crossing Bunakan, Madridejos Cebu</span>
                        <span><i class="bi bi-telephone-fill text-danger me-1"></i> +63 032 411 8593</span>
                        <span><i class="bi bi-envelope-fill text-danger me-1"></i>misoffice@mcclawis.edu.ph</span>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <div class="d-flex justify-content-end gap-3 small">
                        <a href="#" class="text-white text-decoration-none hover-red"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white text-decoration-none hover-red"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white text-decoration-none hover-red"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm" aria-label="Main Navigation">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $base_url; ?>index.php" aria-label="Madridejos Community College Home">
                <img src="<?php echo $base_url; ?>assets/image/mcc2.png" alt="MCC Logo" height="50" class="me-2">
                <div class="d-flex flex-column lh-1">
                    <span class="fw-bold fs-4 text-danger">Madridejos</span>
                    <span class="text-danger small fw-bold">Community College</span>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>updates/">News & Updates</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>courses/">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>instructors/">Instructors</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>campus_life/">Campus Life</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about/">About the College</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>mission_vision/">Mission, Vision & Core Values</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>features/">Features</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>contact/">Contact Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>campus_life/">Campus Map</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="<?php echo $base_url; ?>index.php" class="btn btn-primary px-4 rounded-pill shadow-sm" role="button">Enroll Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
