<?php include('assets/header.php'); ?>


    <!-- Image Slideshow -->
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-overlay"></div>
                <img src="#" class="d-block w-100 carousel-img" alt="MCC Campus Building">
                <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                    <h2 class="display-4 fw-bold">Welcome to Madridejos Community College</h2>
                    <p class="lead">Excellence in education and community service at Madridejos Community College.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-overlay"></div>
                <img src="#" class="d-block w-100 carousel-img" alt="State of the art Library">
                <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                    <h2 class="display-4 fw-bold">Madridejos Community College Library</h2>
                    <p class="lead">A place where knowledge flourishes and curiosity ignites.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-overlay"></div>
                <img src="#" class="d-block w-100 carousel-img" alt="Student Life">
                <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                    <h2 class="display-4 fw-bold">Student Life</h2>
                    <p class="lead"> Engage in various activities that shape your holistic development. </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <h1 class="display-3 fw-bold mb-4">HON. ENGR.<br>
                        <span class="text-accent-red text-nowrap">ROMEO A. VILLACERAN</span><br>
                        <span class="chairman-title">Chairman of the Board of Trustees</span></h1>
                    <div class="chairman-message-container text-secondary mb-5" style="text-align: justify; line-height: 1.8;">
                        <p class="mb-4 fw-bold text-dark fs-5">Warm greetings to the entire academic community of Madridejos Community College!</p>
                        
                        <p class="mb-3">It is with great pride and deep appreciation that I extend my heartfelt message to our administrators, faculty members, staff, students, alumni, and valued partners. As Chairman of the Board of Trustees, I am honored to serve an institution that continues to uphold excellence, integrity, and a strong commitment to community development.</p>
                        
                        <p class="mb-3">Madridejos Community College stands as a beacon of opportunity and empowerment. Through quality education, innovative programs, and dedicated service, we remain steadfast in our mission to mold competent professionals, responsible citizens, and future leaders who will contribute meaningfully to society.</p>
                        
                        <p class="mb-3">The Board of Trustees remains fully committed to strengthening institutional growth, enhancing academic standards, improving facilities, and fostering partnerships that will open greater opportunities for our students. Together, we will continue building a college that responds to the evolving demands of education while remaining grounded in our core values.</p>
                        
                        <p class="mb-3">To our students, may you pursue your dreams with perseverance and integrity. To our faculty and staff, thank you for your unwavering dedication and passion. To our stakeholders and community partners, your continued support is vital to our shared success.</p>
                        
                        <p class="mb-3">Let us move forward with unity, excellence, and a shared vision for a brighter future for Madridejos Community College.</p>
                        
                        <p class="mb-4">May we continue to inspire, lead, and serve.</p>
                        
                    </div>
                    <div class="d-flex gap-3">
                        <a href="<?php echo $base_url; ?>features/" class="btn btn-primary btn-lg px-5 rounded-pill shadow-lg">Our Programs</a>
                        <a href="<?php echo $base_url; ?>campus_life/" class="btn btn-outline-dark btn-lg px-5 rounded-pill">Campus Tour</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <div class="hero-image-wrapper">
                        <div class="hero-blob"></div>
                        <img src="assets/image/compressed_mayor.png"
                            alt="Hon. Romeo A. Villaceran - Chairman of the Board of Trustees"
                            class="img-fluid rounded-4 shadow-lg float-img w-100" 
                            style="max-width: 500px;">       
                    </div>
                    <div class="mt-4 animate__animated animate__fadeInUp animate__delay-1s">
                        <span class="badge bg-accent-red px-4 py-2 fs-6 rounded-pill text-uppercase ls-2 shadow-sm">Municipal Mayor</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('assets/footer.php'); ?>
