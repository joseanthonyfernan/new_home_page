<?php include('../assets/header.php'); ?>

    <!-- Mission, Vision, and Core Values Page -->
    <section id="mission-vision-page" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10 text-center mb-4" style="margin-top: -50px;">
                    <img src="<?php echo $base_url; ?>assets/image/compressed_mccheader.png" class="header-image" alt="Header">
                </div>
                
                <!-- Top Container: Organization Chart -->
                <div class="col-lg-10 animate__animated" data-animation="fadeIn">
                    <div class="card shadow-none rounded-pill-custom mb-2 overflow-visible" style="min-height: 250px;">
                        <div class="p-5 text-center">
                            <h6 class="fw-bold text-uppercase ls-2 mb-0">Organization Chart</h6>
                            <!-- Content for Organization Chart can be added here -->
                            <div class="mt-4 text-muted small">
                                (Chart content will be displayed here)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="row g-4">
                        <!-- Left Container: Core Values & COPC -->
                        <div class="col-lg-6 animate__animated" data-animation="fadeInLeft">
                            <div class="card shadow-none h-100 rounded-pill-custom overflow-visible">
                                <!-- Horizontal Badge Ribbon -->
                                <div class="ribbon-badge">
                                    <i class="bi bi-shield-check-fill me-2"></i> CORE VALUES
                                </div>
                                <div class="p-5 text-center">
                                    <h6 class="fw-bold text-uppercase ls-2 mb-5">Core Values</h6>
                                    
                                    <div class="mb-5">
                                        <p class="fw-bold text-dark mb-2">INTEGRITAS</p>
                                        <p class="fw-bold text-dark mb-2">HONOR</p>
                                        <p class="fw-bold text-dark mb-2">SERVITIUM</p>
                                    </div>

                                    <div class="mt-auto mb-auto">
                                        <h6 class="fw-bold text-uppercase small text-muted mb-3">Certificate of Program Compliance (COPC)</h6>
                                        <div class="d-flex flex-wrap justify-content-center gap-2">
                                            <span class="badge bg-light text-dark border px-3 py-2">Excellence</span>
                                            <span class="badge bg-light text-dark border px-3 py-2">Integrity</span>
                                            <span class="badge bg-light text-dark border px-3 py-2">Innovation</span>
                                            <span class="badge bg-light text-dark border px-3 py-2">Service</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Container: Vision, Mission, Goals -->
                        <div class="col-lg-6 animate__animated" data-animation="fadeInRight">
                            <div class="card shadow-none h-100 rounded-pill-custom overflow-visible">
                                <!-- Horizontal Badge Ribbon -->
                                <div class="ribbon-badge">
                                    <i class="bi bi-bank2 me-2"></i> INSTITUTIONAL
                                </div>
                                <div class="p-5 text-center">
                                    <div class="mb-5">
                                        <h6 class="fw-bold text-uppercase ls-2 mb-3">Vision</h6>
                                        <p class="text-secondary small" style="text-align: justify;">
                                            The Madridejos Community College envisions a society comprised of fully competent 
                                            individuals with benevolent character, innovative, self-oriented, and highly
                                            empowered to meet and exceed challenges as proactive participants in shaping 
                                            our world’s future. Madridejos Community College

                                        </p>
                                    </div>

                                    <div class="mb-5">
                                        <h6 class="fw-bold text-uppercase ls-2 mb-3">Mission</h6>
                                        <p class="text-secondary small" style="text-align: justify;">
                                            Madridejos Community College is a safe, accessible, and affordable learning environment that aims to foster academic and career success through the development
    of critical thinking, creativity, informed research, and social responsibility.
    Our mission is to deliver academic programs that are timely, appropriate, and transformative in response to the demands of local, national, and international
    communities in a highly dynamic world.

                                        </p>
                                    </div>

                                    <div>
                                        <h6 class="fw-bold text-uppercase ls-2 mb-3">Goals</h6>
                                        <p class="text-secondary small" style="text-align: justify;">
                                            Develop globally competitive, value-laden professionals capable of making a positive social, environmental, and economic impact through research and community
    service.
    Learning Enhancement and Support. Foster student learning and support by leveraging student strengths and meeting their specific needs through targeted
    success pathways.
    Adaptive to change through innovation. Create an environment that encourages learners to be more innovative and resilient in order to adapt to today’s
    highly dynamic world.
    Well-grounded in research. Conduct extensive research based on facts and sound reasoning to expand the learner’s knowledge, promote effective learning,
    comprehend different concerns and trends, seek the truth, and identify opportunities that lie ahead.
    Inculcate moral values. Instill positive attitudes and high moral virtues towards daily activities in and outside the school campus.
    Social Responsibility. Ensure the relevance, alignment, and support of the community and businesses by providing outreach, bridge programs, and
    community-focused facilities.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .rounded-pill-custom {
            border-radius: 1px !important;
        }
        .header-image {
            height: 100px;
            width: 100%;
            max-width: 800px;
            object-fit: contain;
            display: inline-block;
            margin-bottom: 0;
            margin-top: 0;
            background: transparent !important;
        }

        /* Abstract Design for Cards */
        /* Abstract Design for Cards - Wave & Dots Style */
        .card {
            position: relative;
            background: #ffffff;
            transition: all 0.3s ease;
            z-index: 1;
            overflow: visible !important; /* Changed to allow ribbon protrusion */
            border: none; /* Removed stroke */
            margin-left: 10px; /* Space for ribbon protrusion */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        }

        /* Content z-index fix */
        .card > *:not(.ribbon-badge) {
            position: relative;
            z-index: 2;
        }

        /* User Provided Background Image Design */
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo $base_url; ?>assets/image/pngwing.com.png');
            background-size: cover;
            background-position: center;
            opacity: 0.15; /* Subtle background */
            z-index: 0;
            pointer-events: none;
        }

        .card::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top right, rgba(220, 53, 69, 0.05), transparent);
            z-index: 0;
            pointer-events: none;
        }

        /* Horizontal Badge Ribbon Styling (Matching reference image) */
        .ribbon-badge {
            position: absolute;
            top: 30px;
            left: -12px;
            background: linear-gradient(135deg, #ffb74d 0%, #ffa726 100%); /* Premium Orange Gradient */
            color: #ffffff;
            padding: 8px 18px 8px 22px;
            font-weight: 700;
            font-size: 0.7rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 0 6px 6px 0;
            box-shadow: 4px 4px 15px rgba(0,0,0,0.15);
            z-index: 10;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .ribbon-badge::before {
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            width: 0;
            height: 0;
            border-top: 12px solid #e65100; /* Darker fold color */
            border-left: 12px solid transparent;
        }

        .ribbon-badge i {
            font-size: 0.9rem;
            opacity: 0.9;
        }


    </style>
<?php include('../assets/footer.php'); ?>
