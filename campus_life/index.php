<?php include('../assets/header.php'); ?>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5 animate__animated" data-animation="fadeIn">
                <h6 class="text-accent-red fw-bold text-uppercase ls-2">Canvas of Campus Life</h6>
                <h2 class="display-5 fw-bold">Our Modern Facilities</h2>
                <div class="divider mx-auto mt-3"
                    style="width: 80px; height: 4px; background: var(--primary-red); border-radius: 2px;">
                </div>
            </div>
            <div class="row g-4 mt-4">
                <!-- Item 1 -->
                <div class="col-md-4 animate__animated" data-animation="fadeInUp">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1541339903292-b998e329c833?auto=format&fit=crop&q=80&w=800" alt="Modern Campus Library" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">Facility</span>
                            <h5 class="fw-bold">Central Library</h5>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="col-md-4 animate__animated" data-animation="fadeInUp">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=800" alt="Tech Lab" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">Academics</span>
                            <h5 class="fw-bold">Advanced IT Labs</h5>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="col-md-4 animate__animated" data-animation="fadeInUp">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1523050335397-514a1563b774?auto=format&fit=crop&q=80&w=800" alt="Campus Grounds" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">Environment</span>
                            <h5 class="fw-bold">Green Campus</h5>
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="col-md-4 animate__animated" data-animation="fadeInUp">
                    <div class="portfolio-item">
                        <img src="" alt="Project 4" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">Branding</span>
                            <h5 class="fw-bold">Brand Identity</h5>
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="col-md-4 animate__animated" data-animation="fadeInUp">
                    <div class="portfolio-item">
                        <img src="" alt="Project 5" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">Web App</span>
                            <h5 class="fw-bold">Project Manager</h5>
                        </div>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="col-md-4 animate__animated" data-animation="fadeInUp">
                    <div class="portfolio-item">
                        <img src="" alt="Project 6" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <span class="portfolio-tag">Creative</span>
                            <h5 class="fw-bold">Artist Portfolio</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Campus Exploration Map -->
    <section id="interactive-map" class="py-5 bg-light overflow-hidden">
        <div class="container py-5">
            <div class="text-center mb-5 animate__animated" data-animation="fadeIn">
                <h6 class="text-accent-red fw-bold text-uppercase ls-2">Digital Tour</h6>
                <h2 class="display-5 fw-bold text-dark">Explore Our Campus</h2>
                <div class="divider mx-auto mt-3"
                    style="width: 80px; height: 4px; background: var(--primary-red); border-radius: 2px;">
                </div>
            </div>

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="row g-0">
                    <!-- Map Sidebar / Toggle -->
                    <div class="col-lg-4 bg-light border-end animate__animated" data-animation="fadeInLeft">
                        <div class="p-4">
                            <h5 class="fw-bold mb-4 text-dark"><i class="bi bi-geo-fill me-2 text-danger"></i>Map Zones</h5>
                            <div class="nav flex-column nav-pills" id="map-tabs" role="tablist">
                                <button class="nav-link map-zone-link active" id="residence-tab" data-bs-toggle="pill" data-bs-target="#residence" type="button" role="tab">
                                    <span class="zone-icon"><i class="bi bi-houses"></i></span>
                                    <div class="text-start">
                                        <h6 class="mb-0 fw-bold">Residence Halls</h6>
                                        <small class="opacity-75 text-muted">Living Spaces</small>
                                    </div>
                                </button>
                                <button class="nav-link map-zone-link" id="library-tab" data-bs-toggle="pill" data-bs-target="#library" type="button" role="tab">
                                    <span class="zone-icon"><i class="bi bi-book"></i></span>
                                    <div class="text-start">
                                        <h6 class="mb-0 fw-bold">MCC Learning Resource Center</h6>
                                        <small class="opacity-75 text-muted">Knowledge Center</small>
                                    </div>
                                </button>
                                <button class="nav-link map-zone-link" id="cafeteria-tab" data-bs-toggle="pill" data-bs-target="#cafeteria" type="button" role="tab">
                                    <span class="zone-icon"><i class="bi bi-cup-hot"></i></span>
                                    <div class="text-start">
                                        <h6 class="mb-0 fw-bold">Student Cafeteria</h6>
                                        <small class="opacity-75 text-muted">Dining & Social</small>
                                    </div>
                                </button>
                                <button class="nav-link map-zone-link" id="sports-tab" data-bs-toggle="pill" data-bs-target="#sports" type="button" role="tab">
                                    <span class="zone-icon"><i class="bi bi-trophy"></i></span>
                                    <div class="text-start">
                                        <h6 class="mb-0 fw-bold">Sports Complex</h6>
                                        <small class="opacity-75 text-muted">Athletics</small>
                                    </div>
                                </button>
                                <button class="nav-link map-zone-link" id="labs-tab" data-bs-toggle="pill" data-bs-target="#labs" type="button" role="tab">
                                    <span class="zone-icon"><i class="bi bi-cpu"></i></span>
                                    <div class="text-start">
                                        <h6 class="mb-0 fw-bold">Computer Labs</h6>
                                        <small class="opacity-75 text-muted">Technological</small>
                                    </div>
                                </button>
                                <button class="nav-link map-zone-link" id="halls-tab" data-bs-toggle="pill" data-bs-target="#halls" type="button" role="tab">
                                    <span class="zone-icon"><i class="bi bi-flask"></i></span>
                                    <div class="text-start">
                                        <h6 class="mb-0 fw-bold">Science Labs</h6>
                                        <small class="opacity-75 text-muted">Research & Development</small>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Map Detail View -->
                    <div class="col-lg-8 bg-white animate__animated" data-animation="fadeInRight">
                        <div class="tab-content h-100" id="map-tabContent">
                            <!-- Residence Halls -->
                            <div class="tab-pane fade show active h-100" id="residence" role="tabpanel">
                                <div class="zone-detail-content h-100">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-6 position-relative">
                                            <img src="https://images.unsplash.com/photo-1555854817-2b2260126da4?auto=format&fit=crop&q=80&w=800" class="zone-img" alt="Residence">
                                            <div class="zone-tag bg-primary text-white">LIVE</div>
                                        </div>
                                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                                            <h3 class="fw-bold mb-3">Residence Halls</h3>
                                            <p class="text-secondary mb-4">Our modern residence halls provide a comfortable and safe environment for students. Featuring high-speed internet, dedicated study lounges, and social common areas.</p>
                                            <div class="zone-info text-dark">
                                                <div class="mb-3 d-flex align-items-center"><i class="bi bi-clock text-danger me-3 fs-5"></i><span><strong>Hours:</strong> 24/7 Access</span></div>
                                                <div class="d-flex align-items-center"><i class="bi bi-person-check text-danger me-3 fs-5"></i><span><strong>Capacity:</strong> 500+ Students</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Library -->
                            <div class="tab-pane fade h-100" id="library" role="tabpanel">
                                <div class="zone-detail-content h-100">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-6 position-relative">
                                            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&q=80&w=800" class="zone-img" alt="Library">
                                            <div class="zone-tag bg-success text-white">STUDY</div>
                                        </div>
                                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                                            <h3 class="fw-bold mb-3">MCC Learning Resource Center</h3>
                                            <p class="text-secondary mb-4">The heart of academic exploration. Access thousands of physical books, digital journals, and private group study rooms equipped with interactive boards.</p>
                                            <div class="zone-info text-dark">
                                                <div class="mb-3 d-flex align-items-center"><i class="bi bi-clock text-danger me-3 fs-5"></i><span><strong>Hours:</strong> 7:30 AM - 9:00 PM</span></div>
                                                <div class="d-flex align-items-center"><i class="bi bi-wifi text-danger me-3 fs-5"></i><span><strong>High-Speed VPN Access</strong></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cafeteria -->
                            <div class="tab-pane fade h-100" id="cafeteria" role="tabpanel">
                                <div class="zone-detail-content h-100">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-6 position-relative">
                                            <img src="https://images.unsplash.com/photo-1567529684892-0f73dfcbd944?auto=format&fit=crop&q=80&w=800" class="zone-img" alt="Cafeteria">
                                            <div class="zone-tag bg-warning text-dark">FOOD</div>
                                        </div>
                                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                                            <h3 class="fw-bold mb-3">Student Cafeteria</h3>
                                            <p class="text-secondary mb-4">A social hub offering diverse, nutritious, and affordable meals. From healthy salads to local delicacies, there's a taste for everyone.</p>
                                            <div class="zone-info text-dark">
                                                <div class="mb-3 d-flex align-items-center"><i class="bi bi-clock text-danger me-3 fs-5"></i><span><strong>Hours:</strong> 6:00 AM - 7:00 PM</span></div>
                                                <div class="d-flex align-items-center"><i class="bi bi-lightning-fill text-danger me-3 fs-5"></i><span><strong>Healthy Meals Only</strong></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sports Complex -->
                            <div class="tab-pane fade h-100" id="sports" role="tabpanel">
                                <div class="zone-detail-content h-100">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-6 position-relative">
                                            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&q=80&w=800" class="zone-img" alt="Sports">
                                            <div class="zone-tag bg-info text-white">PLAY</div>
                                        </div>
                                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                                            <h3 class="fw-bold mb-3">Sports Complex</h3>
                                            <p class="text-secondary mb-4">State-of-the-art facilities for athletics, fitness, and team sports. Our complex hosts inter-college tournaments and wellness programs.</p>
                                            <div class="zone-info text-dark">
                                                <div class="mb-3 d-flex align-items-center"><i class="bi bi-clock text-danger me-3 fs-5"></i><span><strong>Hours:</strong> 5:00 AM - 10:00 PM</span></div>
                                                <div class="d-flex align-items-center"><i class="bi bi-heart-pulse text-danger me-3 fs-5"></i><span><strong>Full Athletics Center</strong></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Labs -->
                            <div class="tab-pane fade h-100" id="labs" role="tabpanel">
                                <div class="zone-detail-content h-100">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-6 position-relative">
                                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=800" class="zone-img" alt="Labs">
                                            <div class="zone-tag bg-dark text-white">TECH</div>
                                        </div>
                                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                                            <h3 class="fw-bold mb-3">Computer Labs</h3>
                                            <p class="text-secondary mb-4">Advanced technological hubs equipped with high-performance workstations, dedicated servers, and specialized software for coding and research.</p>
                                            <div class="zone-info text-dark">
                                                <div class="mb-3 d-flex align-items-center"><i class="bi bi-clock text-danger me-3 fs-5"></i><span><strong>Hours:</strong> 8:00 AM - 5:00 PM</span></div>
                                                <div class="d-flex align-items-center"><i class="bi bi-cpu text-danger me-3 fs-5"></i><span><strong>Technological Research Lab</strong></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Science Labs -->
                            <div class="tab-pane fade h-100" id="halls" role="tabpanel">
                                <div class="zone-detail-content h-100">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-6 position-relative">
                                            <img src="https://images.unsplash.com/photo-1532187863486-abf9d3a4461a?auto=format&fit=crop&q=80&w=800" class="zone-img" alt="Halls">
                                            <div class="zone-tag bg-secondary text-white">RESEARCH</div>
                                        </div>
                                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                                            <h3 class="fw-bold mb-3">Science Labs</h3>
                                            <p class="text-secondary mb-4">Highly specialized facilities for research and development. Featuring modern equipment for chemistry, biology, and experimental sciences.</p>
                                            <div class="zone-info text-dark">
                                                <div class="mb-3 d-flex align-items-center"><i class="bi bi-clock text-danger me-3 fs-5"></i><span><strong>Hours:</strong> 8:00 AM - 5:00 PM</span></div>
                                                <div class="d-flex align-items-center"><i class="bi bi-flask text-danger me-3 fs-5"></i><span><strong>Capacity:</strong> Professional Lab Equipment</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
    </section>

    <!-- Map Section Styles -->
    <style>
        #interactive-map { background-color: #f7f9fc !important; }
        .map-sidebar { border: 1px solid #edf2f7; }
        .map-zone-link {
            border: none !important;
            display: flex !important;
            align-items: center;
            gap: 15px;
            padding: 16px 20px !important;
            border-radius: 12px !important;
            color: #475569 !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            margin-bottom: 8px;
            background: transparent !important;
            border-left: 3px solid transparent !important;
        }

        .map-zone-link:hover {
            background: #fff !important;
            color: var(--primary-red) !important;
            transform: translateX(5px);
        }

        .map-zone-link.active {
            background: #fff !important;
            color: var(--primary-red) !important;
            border-left: 3px solid var(--primary-red) !important;
            font-weight: 700;
        }

        .zone-icon {
            width: 44px;
            height: 44px;
            background: #f1f5f9;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }

        .active .zone-icon {
            background: var(--soft-red) !important;
            color: var(--primary-red) !important;
        }

        .zone-detail-content {
            min-height: 500px;
        }

        .zone-img {
            width: 100%;
            height: 100%;
            min-height: 500px;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .zone-detail-card:hover .zone-img { transform: scale(1.05); }

        .zone-tag {
            position: absolute;
            top: 25px;
            right: 25px;
            padding: 7px 18px;
            border-radius: 30px;
            font-weight: 800;
            font-size: 0.75rem;
            letter-spacing: 1.5px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            z-index: 5;
        }

        .zone-info i { width: 24px; font-size: 1.1rem; }

        @media (max-width: 991px) {
            .map-sidebar { margin-bottom: 30px; }
            .zone-detail-card { min-height: auto; flex-direction: column; }
            .zone-img { height: 300px; }
        }
    </style>

    <!-- Campus Map Section -->
    <section id="campus-map" class="py-5 bg-white">
        <div class="container pb-5">
            <div class="text-center mb-5 animate__animated" data-animation="fadeIn">
                <h6 class="text-primary fw-bold text-uppercase ls-2">Location & Map</h6>
                <h2 class="display-5 fw-bold">Find Us on the Map</h2>
                <div class="divider mx-auto mt-3"
                    style="width: 80px; height: 4px; background: var(--primary-red); border-radius: 2px;">
                </div>
            </div>

            <div class="row">
                <div class="col-12 animate__animated" data-animation="fadeInUp">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="ratio ratio-21x9" style="min-height: 450px;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.3683!2d123.7314!3d11.2712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a8ff06c9e830e3%3A0xb3388ced747f7d1b!2sMadridejos%20Community%20College!5e0!3m2!1sen!2sph!4v1708252000000!5m2!1sen!2sph" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <div class="card-body bg-light p-4">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <h5 class="fw-bold mb-1 text-primary">Madridejos Community College</h5>
                                    <p class="text-secondary mb-0"><i class="bi bi-geo-alt-fill text-danger me-2"></i>Brgy. Bunakan, Madridejos, Cebu, Philippines 6053</p>
                                </div>
                                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                    <a href="https://maps.app.goo.gl/pM7UuN1CshmE7kF3A" target="_blank" class="btn btn-primary rounded-pill px-4 shadow-sm hvr-grow">
                                        <i class="bi bi-directions-fill me-2"></i>Get Directions
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('../assets/footer.php'); ?>
