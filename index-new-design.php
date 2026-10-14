<?php

include_once 'header.php';
?>
<link rel="stylesheet" href="css/index-new-design.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <main>

        <!-- =========================================================================
             SECTION 1: HERO SECTION (Exact Screenshot Match)
             ========================================================================= -->
        <section class="eh-hero-section">
            <div class="container eh-hero-content">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        
                        <!-- 1. Top Social Proof Rating Line -->
                        <div class="eh-hero-top-rating">
                            <img src="images/new-index-page/star.webp" alt="5 Stars" class="eh-hero-stars" height="14" width="70">
                            <span class="eh-hero-rating-text">Helped 25,800+ Customers Find Top Service Provider</span>
                            <img src="images/new-index-page/bnr_rev_people.png" alt="Customers" class="eh-hero-people-img" height="28" width="130">
                        </div>

                        <!-- 2. Main Hero Headline -->
                        <h1 class="eh-hero-main-title">
                            Connecting Homeowners with Trusted Home Improvement Experts
                        </h1>

                        <!-- 3. Search / Quote Widget Bar -->
                        <div class="banner_quote_box mt-0">
                            <div class="banner_quote_box_inner">
                                <p class="showMob frmHeading-m">Get A Quote Now</p>
                                <?php $query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : ''; ?>
                                <form method="get" id="quoteForm" action="">
                                    <div class="form_field">
                                        <select name="service" id="serviceSelect" required class="input_field">
                                            <option value="" disabled selected>I need help with</option>
                                            <option value="roofing-steps">Roofing</option>
                                            <option value="window-steps">Windows</option>
                                            <option value="solar-steps">Solar</option>
                                            <option value="hvac-steps">HVAC</option>
                                            <option value="bathroom-steps">Bathroom</option>
                                            <option value="kitchen-steps">Kitchen</option>
                                            <option value="gutter-steps">Gutter</option>
                                            <option value="siding-steps">Siding</option>
                                            <option value="walktub-steps">Walk-In Tubs</option>
                                            <option value="handyman-steps">Handyman</option>
                                            <option value="homewarranty-steps">Home Warranty</option>
                                            <option value="allservices">All Services</option>
                                        </select>
                                        <input name="zip" type="text" required pattern="[0-9]{5}" maxlength="5" class="input_field input_field_zip" placeholder="Enter ZIP Code">
                                        <button type="submit" class="quote_btn">Get A Quote</button>
                                    </div>
                                </form>
                                <script>
                                    document.getElementById('quoteForm').addEventListener('submit', function() {
                                        const service = document.getElementById('serviceSelect').value;
                                        if (!service) return;
                                        this.action = '/' + service;
                                    });
                                </script>
                            </div>
                            <div class="form_note_text">
                                
                                <p><i class="fas fa-lock"></i> Your information is 100% secure &amp; confidential.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 4. Bottom Stats Strip (Centered & Counter Animated) -->
            <div class="eh-hero-stats-strip" id="stats">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-11 col-xl-10">
                            <div class="row g-0 align-items-center">
                                <div class="col-6 col-sm-3 eh-stat-col">
                                    <div class="eh-stat-number eh-counter" data-target="50">0</div>
                                    <div class="eh-stat-label">States</div>
                                </div>
                                <div class="col-6 col-sm-3 eh-stat-col">
                                    <div class="eh-stat-number eh-counter" data-target="100" data-suffix="+">0+</div>
                                    <div class="eh-stat-label">Home Services</div>
                                </div>
                                <div class="col-6 col-sm-3 eh-stat-col">
                                    <div class="eh-stat-number eh-counter" data-target="25000" data-suffix="+" data-comma="true">0+</div>
                                    <div class="eh-stat-label">Homeowners Connected</div>
                                </div>
                                <div class="col-6 col-sm-3 eh-stat-col">
                                    <div class="eh-stat-number eh-counter" data-target="5000" data-suffix="+" data-comma="true">0+</div>
                                    <div class="eh-stat-label">Contractor Partners</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             SECTION 2: "Services We Provide" (Exact Screenshot Match)
             ========================================================================= -->
        <section class="eh-services-provide-section" id="services">
            <div class="container">
                
                <!-- Section Header with Glow Circle -->
                <div class="eh-services-header">
                    <div class="eh-title-wrap">
                        <img src="images/new-index-page/head-back-circle.png" class="eh-head-glow" alt="">
                        <h2 class="eh-services-title">Services We Provide</h2>
                    </div>
                    <p class="eh-services-subtitle">
                        Explore a wide range of home improvement services to help you tackle minor repairs to major remodeling with confidence.
                    </p>
                </div>

                <!-- 14 Services Grid (7 Columns x 2 Rows on Desktop) -->
                <div class="eh-services-grid-wrapper">
                    <!-- 1. Roofing -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/roofing.png" alt="Roofing" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Roofing</h4>
                    </a>

                    <!-- 2. Windows -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/windows.png" alt="Windows" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Windows</h4>
                    </a>

                    <!-- 3. Solar -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/solar.png" alt="Solar" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Solar</h4>
                    </a>

                    <!-- 4. HVAC -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/hvac.png" alt="HVAC" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">HVAC</h4>
                    </a>

                    <!-- 5. Bathroom -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/bathroom.png" alt="Bathroom" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Bathroom</h4>
                    </a>

                    <!-- 6. Handyman -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/handyman.png" alt="Handyman" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Handyman</h4>
                    </a>

                    <!-- 7. Electrical -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/electrical.png" alt="Electrical" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Electrical</h4>
                    </a>

                    <!-- 8. Flooring -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/flooring.png" alt="Flooring" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Flooring</h4>
                    </a>

                    <!-- 9. Kitchen -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/kitchen.png" alt="Kitchen" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Kitchen</h4>
                    </a>

                    <!-- 10. Gutter -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/gutter.png" alt="Gutter" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Gutter</h4>
                    </a>

                    <!-- 11. Plumbing -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/plumbing.png" alt="Plumbing" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Plumbing</h4>
                    </a>

                    <!-- 12. Painting -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/painting.png" alt="Painting" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Painting</h4>
                    </a>

                    <!-- 13. Walls -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/walls.png" alt="Walls" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">Walls</h4>
                    </a>

                    <!-- 14. And More -->
                    <a href="javascript:void(0);" class="eh-service-box">
                        <div class="eh-service-box-icon">
                            <img src="images/new-index-page/Icons/and-more.png" alt="And More" class="eh-service-icon-img">
                        </div>
                        <h4 class="eh-service-box-title">And More</h4>
                    </a>
                </div>

                <!-- Bottom CTA -->
                <div class="eh-services-cta-wrap">
                    <a href="#hero-search" class="btn eh-services-quote-btn">Get A Quote Now</a>
                    <div class="eh-services-subtext">We Just Make It easier.</div>
                </div>

            </div>
        </section>

        <!-- =========================================================================
             SECTION 5: "Why Do Homeowners Keep Coming Back?" (Exact Screenshot Match)
             ========================================================================= -->
        <section class="eh-why-back-section" id="why-us">
            <div class="container">
                
                <!-- Section 5 Header with Glow Circle -->
                <div class="eh-why-back-header">
                    <div class="eh-title-wrap">
                        <img src="images/new-index-page/head-back-circle.png" class="eh-head-glow" alt="">
                        <h2 class="eh-why-back-title">
                            Why Do Homeowners Keep Coming Back?
                        </h2>
                    </div>
                </div>

                <!-- 6 Feature Cards (3x2 Grid - Compact Centered Wrapper) -->
                <div class="eh-why-cards-container">
                    <div class="row g-3 justify-content-center">
                        
                        <!-- 1. Save Time Searching -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="eh-feature-card">
                                <div class="eh-feature-icon-wrap">
                                    <img src="images/new-index-page/Icons/why-save-time.png" alt="Save Time Searching" class="eh-feature-icon-img">
                                </div>
                                <div class="eh-feature-content">
                                    <h4 class="eh-feature-title">Save Time Searching</h4>
                                    <div class="eh-feature-desc-wrap">
                                        <p class="eh-feature-desc">
                                            Do away with the endless online research and begin your project with just one simple request.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Local Contractor Connections -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="eh-feature-card">
                                <div class="eh-feature-icon-wrap">
                                    <img src="images/new-index-page/Icons/why-contractor.png" alt="Local Contractor Connections" class="eh-feature-icon-img" onerror="this.outerHTML='<i class=\'fa-solid fa-helmet-safety\' style=\'font-size:24px;color:#34b35e;\'></i>'">
                                </div>
                                <div class="eh-feature-content">
                                    <h4 class="eh-feature-title">Local Contractor Connections</h4>
                                    <div class="eh-feature-desc-wrap">
                                        <p class="eh-feature-desc">
                                            We'll connect you with local contractors to provide the home services you require.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Nationwide Coverage -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="eh-feature-card">
                                <div class="eh-feature-icon-wrap">
                                    <img src="images/new-index-page/Icons/why-nationwide.png" alt="Nationwide Coverage" class="eh-feature-icon-img" onerror="this.outerHTML='<i class=\'fa-solid fa-map-location-dot\' style=\'font-size:24px;color:#34b35e;\'></i>'">
                                </div>
                                <div class="eh-feature-content">
                                    <h4 class="eh-feature-title">Nationwide Coverage</h4>
                                    <div class="eh-feature-desc-wrap">
                                        <p class="eh-feature-desc">
                                            In helping homeowners find local contractors in communities across the United States.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Wide Range of Home Services -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="eh-feature-card">
                                <div class="eh-feature-icon-wrap">
                                    <img src="images/new-index-page/Icons/why-wide-range.png" alt="Wide Range of Home Services" class="eh-feature-icon-img">
                                </div>
                                <div class="eh-feature-content">
                                    <h4 class="eh-feature-title">Wide Range of Home Services</h4>
                                    <div class="eh-feature-desc-wrap">
                                        <p class="eh-feature-desc">
                                            From home repairs and renovations to HVAC, roofing, windows, solar, and more all in one location.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Solutions for Every Project -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="eh-feature-card">
                                <div class="eh-feature-icon-wrap">
                                    <img src="images/new-index-page/Icons/why-solutions.png" alt="Solutions for Every Project" class="eh-feature-icon-img">
                                </div>
                                <div class="eh-feature-content">
                                    <h4 class="eh-feature-title">Solutions for Every Project</h4>
                                    <div class="eh-feature-desc-wrap">
                                        <p class="eh-feature-desc">
                                            It's a simple repair or a full home improvement; each project starts with the most appropriate connection.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 6. Convenient Online Process -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="eh-feature-card">
                                <div class="eh-feature-icon-wrap">
                                    <img src="images/new-index-page/Icons/why-convenient.png" alt="Convenient Online Process" class="eh-feature-icon-img">
                                </div>
                                <div class="eh-feature-content">
                                    <h4 class="eh-feature-title">Convenient Online Process</h4>
                                    <div class="eh-feature-desc-wrap">
                                        <p class="eh-feature-desc">
                                            Send your project in a matter of minutes, at any time it works for you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bottom CTA Button -->
                <div class="eh-why-back-cta-wrap">
                    <a href="#hero-search" class="eh-why-back-btn">
                        Get A Quote
                    </a>
                </div>

            </div>
        </section>

        <!-- =========================================================================
             SECTION 3: "Your Home Deserves the Right Home Service Solutions" (Exact Match)
             ========================================================================= -->
        <section class="eh-intro-section" id="about">
            <div class="container">
                
                <!-- Section 3 Header with Glow Circle -->
                <div class="eh-intro-header">
                    <div class="eh-title-wrap">
                        <img src="images/new-index-page/head-back-circle.png" class="eh-head-glow" alt="">
                        <h2 class="eh-intro-title">
                            Your Home Deserves the Right Home<br>Service Solutions
                        </h2>
                    </div>
                </div>

                <!-- 2-Column Content Row -->
                <div class="row align-items-stretch g-4 g-lg-5">
                    
                    <!-- Left: Contractor Image (Strictly equals Right Column Height) -->
                    <div class="col-lg-6">
                        <div class="eh-intro-img-wrap">
                            <img src="images/new-index-page/contractor.png" alt="Friendly Contractor with Homeowner" class="eh-intro-img">
                        </div>
                    </div>

                    <!-- Right: Narrative Content & CTA -->
                    <div class="col-lg-6 eh-intro-content">
                        <span class="eh-intro-badge">INTRODUCING</span>
                        
                        <p class="eh-intro-text">
                            From home repairs that aren't expected to planned remodelling, finding the perfect contractor can be a daunting task. The process of searching through numerous websites, making countless phone calls, and then deciding which to trust can take up valuable time.
                        </p>
                        
                        <p class="eh-intro-text">
                            With Easy Home Service, we simplify the process. When you require home repairs, replacing, remodelling, or installation, we can connect you to local contractors to provide a broad variety of home services with just one request.
                        </p>
                        
                        <p class="eh-intro-text">
                            If you're replacing your roof, updating your windows, renovating your bathroom or kitchen, installing a new HVAC system, or working on your next home improvement project, locating the right home maintenance solutions begins here.
                        </p>

                        <p class="eh-intro-text mb-4">
                            Spend less time looking and more time making your home more beautiful with Easy Home Service.
                        </p>
                        
                        <a href="#services" class="eh-intro-btn">Get A Quote</a>
                    </div>

                </div>

            </div>
        </section>

        <!-- =========================================================================
             SECTION 4: "Top-Rated Home Improvement Experts Near You" (Exact Screenshot Match)
             ========================================================================= -->
        <section class="eh-remodel-section" id="experts">
               <div class="container">
        
        <!-- Section 4 Header with Glow Circle -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="eh-remodel-header">
                    <div class="eh-title-wrap">
                        <img src="images/new-index-page/head-back-circle.png" class="eh-head-glow" alt="">
                        <h2 class="eh-remodel-title">
                            Top-Rated Home Improvement Experts Near You<br>Quality You Can Trust!
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- 1. Center White Content Box -->
        <div class="eh-remodel-box">
            <p class="eh-remodel-p">
                Finding construction home remodeling experts near you shouldn't be that much stressful or expensive. At Easy Home Service, we make it easy for homeowners. We connect you with trusted general service provider and top home remodeling experts near you. They provide high-quality services that you deserve, all without high costs.
            </p>
            <p class="eh-remodel-p">
                If you are planning a kitchen remodel, bathroom renovation, Window Replacement, or a full home upgrade, our platform can help. We connect you with trusted home improvement experts near you. Many customers highly recommend them.
            </p>
            <p class="eh-remodel-p mb-0">
                They offer quality work and clear pricing-all in just a few clicks. No more guesswork or stress-just seamless, affordable home improvements backed by skilled professionals.
            </p>
        </div>
        <!-- 2. Subheading OUTSIDE and BELOW the White Box -->
        <h3 class="eh-remodel-subtitle">
            Start your project today and experience a better way<br>to remodel your home!
        </h3>

                <!-- 8 Service Cards Grid Below Card -->
                <div class="eh-remodel-services-grid">
                    
                    <!-- 1. Roofing -->
                    <a href="https://easyhomeservice.com/roofing" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/roofing.png" alt="Roofing"></div>
                        <h4 class="card-title-text">Roofing</h4>
                    </a>

                    <!-- 2. Windows -->
                    <a href="https://easyhomeservice.com/window" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/windows.png" alt="Windows"></div>
                        <h4 class="card-title-text">Windows</h4>
                    </a>

                    <!-- 3. Solar -->
                    <a href="https://easyhomeservice.com/solar" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/solar.png" alt="Solar"></div>
                        <h4 class="card-title-text">Solar</h4>
                    </a>

                    <!-- 4. HVAC -->
                    <a href="https://easyhomeservice.com/hvac" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/hvac.png" alt="HVAC"></div>
                        <h4 class="card-title-text">HVAC</h4>
                    </a>

                    <!-- 5. Bathroom -->
                    <a href="https://easyhomeservice.com/bathroom" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/bathroom.png" alt="Bathroom"></div>
                        <h4 class="card-title-text">Bathroom</h4>
                    </a>

                    <!-- 6. Handyman -->
                    <a href="https://easyhomeservice.com/handyman" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/handyman.png" alt="Handyman"></div>
                        <h4 class="card-title-text">Handyman</h4>
                    </a>

                    <!-- 7. Electrical -->
                    <a href="https://easyhomeservice.com/electrical" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/electrical.png" alt="Electrical"></div>
                        <h4 class="card-title-text">Electrical</h4>
                    </a>

                    <!-- 8. Kitchen -->
                    <a href="https://easyhomeservice.com/kitchen" class="eh-remodel-badge-card">
                        <div class="card-icon"><img src="images/new-index-page/Icons/kitchen.png" alt="Kitchen"></div>
                        <h4 class="card-title-text">Kitchen</h4>
                    </a>

                </div>

                <!-- Bottom CTA Button -->
                <div class="eh-remodel-cta-wrap">
                    <a href="#hero-search" class="eh-remodel-quote-btn">
                        Get A Quote
                    </a>
                </div>

            </div>
        </section>



        <!-- =========================================================================
             SECTION 6: "Because EveryHome Deserves the Right Care" (Exact Screenshot Match)
             ========================================================================= -->
        <section class="eh-care-section" id="care">
            <div class="container eh-care-container">
                
                <!-- Section 6 Header with Glow Circle -->
                <div class="eh-care-header">
                    <div class="eh-title-wrap">
                        <img src="images/new-index-page/head-back-circle.png" class="eh-head-glow" alt="">
                        <h2 class="eh-care-title">
                            Because EveryHome Deserves the<br>Right Care
                        </h2>
                    </div>
                </div>

                <!-- 2-Column Content Row -->
                <div class="row align-items-center g-4 g-lg-5">
                    
                    <!-- Left: Narrative Text & CTA Button -->
                    <div class="col-12 col-lg-5">
                        <div class="eh-care-text-col">
                            <p class="eh-care-p">
                                Your home is among your largest investments, and each project requires the appropriate attention. If you're planning a remodel or replacing outdated fixtures Or tackling unexpected repairs, finding reliable home services shouldn't seem overwhelming.
                            </p>

                            <p class="eh-care-p">
                                Easy Home Service helps homeowners find solutions for home maintenance projects of any size by connecting them to local contractors. From simple home repairs to major home improvements, beginning the process has never been easier.
                            </p>

                            <div class="eh-care-cta-wrap mt-4">
                                <a href="#hero-search" class="eh-care-quote-btn">
                                    Get A Quote
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right: House Image with Feature Badges Arch -->
                    <div class="col-12 col-lg-7">
                        <div class="eh-care-img-wrap text-center">
                            <img src="images/new-index-page/esh-care.png" alt="Because EveryHome Deserves the Right Care" class="img-fluid eh-care-house-img">
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- =========================================================================
             SECTION: "How It Works In Just 3 Simple Steps" (Exact Screenshot Match)
             ========================================================================= -->
        <?php include 'how-works-1.php';?>
      <!-- Bottom CTA Banner: Ready to Grow Your Contracting Business? -->
        <section class="my-5">
            <div class="container">
                     <div class="row d-flex justify-content-center">
                         <div class="col-lg-10">
                             <div class="ehs-grow-banner-card">
                <div class="row align-items-center">
                    
                    <!-- Left: Heading & Description -->
                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                        <h3 class="ehs-grow-banner-title">Ready to Get Your Home Project Started?</h3>
                        <p class="ehs-grow-banner-desc">
                            Tell us what you need, and Easy Home Service will connect you with trusted local professionals ready to help.
                        </p>
                    </div>

                    <!-- Right: Buttons, Chart Icon & Tagline -->
                    <div class="col-lg-6 col-md-12">
                        <div class="ehs-grow-actions-top">
                            
                            <!-- Button 1 -->
                            <a href="#become-a-partner" class="ehs-btn-grow-partner">
                               Get a Quote
                                <i class="bi bi-arrow-right"></i>
                            </a>

                            <!-- Button 2 -->
                            <a href="#speak-with-team" class="ehs-btn-grow-speak">
                                Find a Local Pro
                                <i class="bi bi-arrow-right"></i>
                            </a>

                            <!-- Chart Icon -->
                            <div class="ehs-grow-chart-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>

                        </div>

                        <div class="ehs-grow-divider"></div>

                        <p class="ehs-grow-tagline">
                            Trusted pros. Fast local matches. An easier way to get it done.
                        </p>
                    </div>

                </div>
            </div> 
                         </div>
                     </div>                  
            
            </div>

        </section>
        
                <!-- =========================================================================
             SECTION 7: "Why We're Different?" (Exact Screenshot Match)
             ========================================================================= -->
        <section class="eh-comparison-section" id="comparison">
            <div class="container">
                
                <!-- Section 7 Header with Glow Circle -->
                <div class="eh-comparison-header">
                    <div class="eh-title-wrap">
                        <img src="images/new-index-page/head-back-circle.png" class="eh-head-glow" alt="">
                        <h2 class="eh-comparison-title">
                            Why We're Different?
                        </h2>
                    </div>
                </div>

                <!-- Comparison Table Wrap -->
                <div class="eh-comparison-table-wrap">
                    
                    <!-- Table Header -->
                    <div class="eh-comp-head-row">
                        <div class="eh-comp-head-left">
                            The Traditional Way
                        </div>
                        <div class="eh-comp-head-right">
                            The Easy Home Service Way
                        </div>
                    </div>

                    <!-- Row 1 -->
                    <div class="eh-comp-row">
                        <div class="eh-comp-cell-left">
                            <span>Multiple searches</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>One starting point</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="eh-comp-row eh-comp-tint">
                        <div class="eh-comp-cell-left">
                            <span>Endless browsing</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>Simple online request</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="eh-comp-row">
                        <div class="eh-comp-cell-left">
                            <span>Confusing process</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>Clear, streamlined experience</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="eh-comp-row eh-comp-tint">
                        <div class="eh-comp-cell-left">
                            <span>Hours spent researching</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>Faster project initiation</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="eh-comp-row">
                        <div class="eh-comp-cell-left">
                            <span>Different sites for different services</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>Wide range of home services in one place</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                    <!-- Row 6 -->
                    <div class="eh-comp-row eh-comp-tint">
                        <div class="eh-comp-cell-left">
                            <span>Repeating project information</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>Tell us once and get started</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                    <!-- Row 7 -->
                    <div class="eh-comp-row">
                        <div class="eh-comp-cell-left">
                            <span>Uncertain next steps</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>Guided project journey</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                    <!-- Row 8 -->
                    <div class="eh-comp-row eh-comp-tint">
                        <div class="eh-comp-cell-left">
                            <span>More effort, less clarity</span>
                            <i class="fa-solid fa-xmark eh-comp-icon-cross"></i>
                        </div>
                        <div class="eh-comp-cell-right">
                            <span>Less searching, more improving</span>
                            <i class="fa-solid fa-check eh-comp-icon-check"></i>
                        </div>
                    </div>

                </div>

            </div>
        </section>
             
    <!-- ==========================================================================
         SECTION 2: TESTIMONIAL
         ========================================================================== -->
    <section class="ehs-contractor-testimonials-cta">
        <div class="container">
            
            <!-- Section Title -->
            <h2 class="ehs-testimonial-title">Trusted by Home Service Professionals</h2>

            <!-- Testimonials Carousel Container -->
            <div class="ehs-testimonials-wrapper">
                
                <!-- Left Arrow -->
                <button class="ehs-test-nav-btn ehs-test-prev me-2 me-md-3" aria-label="Previous Testimonial">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <!-- Testimonials Viewport & Slider Track -->
                <div class="ehs-testimonials-viewport">
                    <div class="ehs-testimonials-track">
                        
                        <!-- Slide 1 -->
                        <div class="ehs-test-slide active">
                            <div class="ehs-test-card-container">
                                <div class="ehs-test-header-bar">
                                    <div class="ehs-test-avatar-outer">
                                        <div class="ehs-test-avatar-glow">
                                            <img src="images/new-index-page/testimonials/michael-r.png" alt="Michael R." class="ehs-test-avatar-photo">
                                        </div>
                                    </div>
                                    <div class="ehs-test-stars-badge">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="ehs-test-content-inner">
                                    <p class="ehs-test-quote-text">
                                        Finding someone to repair our AC was so much easier than I expected. Easy Home Service connected us with a local professional quickly, and the whole process was simple.
                                    </p>
                                    <div class="ehs-test-bottom-row">
                                        <div class="ehs-test-meta">
                                            <h4 class="ehs-test-meta-name">Michael R.,</h4>
                                            <p class="ehs-test-meta-role">HVAC Service, Texas</p>
                                        </div>
                                        <div class="ehs-test-quotes-mark">
                                            <img src="images/new-index-page/quote-mark.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="ehs-test-slide">
                            <div class="ehs-test-card-container">
                                <div class="ehs-test-header-bar">
                                    <div class="ehs-test-avatar-outer">
                                        <div class="ehs-test-avatar-glow">
                                            <img src="images/new-index-page/testimonials/jennifer-m.png" alt="David K." class="ehs-test-avatar-photo">
                                        </div>
                                    </div>
                                    <div class="ehs-test-stars-badge">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="ehs-test-content-inner">
                                    <p class="ehs-test-quote-text">
                                        I needed a plumber for an urgent issue and didn’t know where to start. Easy Home Service helped me find a professional in my area without all the usual hassle.
                                    </p>
                                    <div class="ehs-test-bottom-row">
                                        <div class="ehs-test-meta">
                                            <h4 class="ehs-test-meta-name">Jennifer M.,</h4>
                                            <p class="ehs-test-meta-role">Plumbing Service, Florida</p>
                                        </div>
                                        <div class="ehs-test-quotes-mark">
                                            <img src="images/new-index-page/quote-mark.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="ehs-test-slide">
                            <div class="ehs-test-card-container">
                                <div class="ehs-test-header-bar">
                                    <div class="ehs-test-avatar-outer">
                                        <div class="ehs-test-avatar-glow">
                                            <img src="images/new-index-page/testimonials/robert-t.png" alt="Sarah T." class="ehs-test-avatar-photo">
                                        </div>
                                    </div>
                                    <div class="ehs-test-stars-badge">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="ehs-test-content-inner">
                                    <p class="ehs-test-quote-text">
                                        We were looking for help with our roof and wanted someone local and reliable. The process was quick, straightforward, and saved us a lot of time.
                                    </p>
                                    <div class="ehs-test-bottom-row">
                                        <div class="ehs-test-meta">
                                            <h4 class="ehs-test-meta-name">Robert T.,</h4>
                                            <p class="ehs-test-meta-role">Roofing Service, Arizona</p>
                                        </div>
                                        <div class="ehs-test-quotes-mark">
                                            <img src="images/new-index-page/quote-mark.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="ehs-test-slide">
                            <div class="ehs-test-card-container">
                                <div class="ehs-test-header-bar">
                                    <div class="ehs-test-avatar-outer">
                                        <div class="ehs-test-avatar-glow">
                                            <img src="images/new-index-page/testimonials/amanda-l.png" alt="James L." class="ehs-test-avatar-photo">
                                        </div>
                                    </div>
                                    <div class="ehs-test-stars-badge">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="ehs-test-content-inner">
                                    <p class="ehs-test-quote-text">
                                        Easy Home Service made it much easier to get started on our bathroom project. I liked being able to share what we needed and get connected with professionals in our area.
                                    </p>
                                    <div class="ehs-test-bottom-row">
                                        <div class="ehs-test-meta">
                                            <h4 class="ehs-test-meta-name">Amanda L.,</h4>
                                            <p class="ehs-test-meta-role">Bathroom Remodeling, California</p>
                                        </div>
                                        <div class="ehs-test-quotes-mark">
                                            <img src="images/new-index-page/quote-mark.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="ehs-test-slide">
                            <div class="ehs-test-card-container">
                                <div class="ehs-test-header-bar">
                                    <div class="ehs-test-avatar-outer">
                                        <div class="ehs-test-avatar-glow">
                                            <img src="images/new-index-page/testimonials/daniel-w.png" alt="Robert M." class="ehs-test-avatar-photo">
                                        </div>
                                    </div>
                                    <div class="ehs-test-stars-badge">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="ehs-test-content-inner">
                                    <p class="ehs-test-quote-text">
                                        The process was simple from start to finish. I entered my information, explained what I needed, and was connected with a local service professional.
                                    </p>
                                    <div class="ehs-test-bottom-row">
                                        <div class="ehs-test-meta">
                                            <h4 class="ehs-test-meta-name">Daniel W.,</h4>
                                            <p class="ehs-test-meta-role">Home Improvement, Georgia</p>
                                        </div>
                                        <div class="ehs-test-quotes-mark">
                                            <img src="images/new-index-page/quote-mark.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                                <!-- Slide 6-->
                        <div class="ehs-test-slide">
                            <div class="ehs-test-card-container">
                                <div class="ehs-test-header-bar">
                                    <div class="ehs-test-avatar-outer">
                                        <div class="ehs-test-avatar-glow">
                                            <img src="images/new-index-page/testimonials/david-k.png" alt="Robert M." class="ehs-test-avatar-photo">
                                        </div>
                                    </div>
                                    <div class="ehs-test-stars-badge">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="ehs-test-content-inner">
                                    <p class="ehs-test-quote-text">
                                        Easy Home Service made finding an HVAC professional much easier. I was quickly connected with a local provider who understood what I needed and helped me get the job moving.
                                    </p>
                                    <div class="ehs-test-bottom-row">
                                        <div class="ehs-test-meta">
                                            <h4 class="ehs-test-meta-name">David K.,</h4>
                                            <p class="ehs-test-meta-role">HVAC Service, Florida </p>
                                        </div>
                                        <div class="ehs-test-quotes-mark">
                                            <img src="images/new-index-page/quote-mark.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Arrow -->
                <button class="ehs-test-nav-btn ehs-test-next ms-2 ms-md-3" aria-label="Next Testimonial">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>

        </div>
    </section>
    
    
    <!-- ==========================================================================
         SECTION 3: STATES WE SERVE
         ========================================================================== -->
<?php include 'state-cities.php';?>
        <!-- ==========================================================================
         
       <!-- ==========================================================================
     SECTION 5: OUR LATEST BLOG POSTS
     ========================================================================== -->
    <section class="ehs-contractor-blogs">
        <div class="ehs-blog-decor-ring"></div>
        <div class="container">
            
            <!-- Blog Section Header Matching Screenshot -->
            <div class="ehs-blog-header-row">
                <div class="ehs-blog-header-left">
                    <h2 class="ehs-blog-title">
                        Our Latest Blog <span class="ehs-highlight-green">Posts</span>
                    </h2>
                    <p class="ehs-blog-subtitle">Homeowner Resources</p>
                </div>
                <div class="ehs-blog-header-right">
                    <a href="https://easyhomeservice.com/blog/" class="ehs-blog-view-more">View More <i class="fa-solid fa-arrow-right"></i></a>
                    <div class="ehs-blog-nav-buttons">
                        <button class="ehs-blog-nav-btn ehs-blog-prev" aria-label="Previous Blog" type="button">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button class="ehs-blog-nav-btn ehs-blog-next" aria-label="Next Blog" type="button">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Blog Carousel Container (Displays 3 at a time: 1-2-3 -> 2-3-4 -> 3-4-1 -> 4-1-2) -->
            <div class="ehs-blog-carousel-wrapper">
                <div class="ehs-blog-viewport">
                    <div class="ehs-blog-track">
                        
                        <!-- Blog Card 1 -->
                        <div class="ehs-blog-slide" data-slide="1">
                            <a href="https://easyhomeservice.com/blog/how-to-plan-a-home-renovation" class="ehs-blog-card">
                                <div class="ehs-blog-img-box">
                                    <img src="https://easyhomeservice.com/blog/admin/postimages/How to Plan a Home Renovation-4024.jpg" alt="Homeowner meeting with a contractor to review a home renovation plan">
                                </div>
                                <span class="ehs-blog-date">July 22, 2026</span>
                                <h3 class="ehs-blog-card-title">Home Renovation Planning: Budget, Timeline & Checklist (2026)</h3>
                                <p class="ehs-blog-card-excerpt">
                                    You've probably already picked the countertop color. Maybe you've saved dozens of kitchen ideas to Pinterest or watched the same home renovation episode more than once just for the before-and-after reveal.
                                </p>
                            </a>
                        </div>

                        <!-- Blog Card 2 -->
                        <div class="ehs-blog-slide" data-slide="2">
                            <a href="https://easyhomeservice.com/blog/2025-Home-Improvement-Trends-Upgrades-for-a-Stylish-Home" class="ehs-blog-card">
                                <div class="ehs-blog-img-box">
                                    <img src="https://easyhomeservice.com/blog/admin/postimages/2af40e40bff599a0b585b5ee7c5c416a.png" alt="2026 home improvement trends">
                                </div>
                                <span class="ehs-blog-date">February 03, 2025</span>
                                <h3 class="ehs-blog-card-title">2026 Home Improvement Trends: Upgrades for a  Stylish Home</h3>
                                <p class="ehs-blog-card-excerpt">
                                    Discover the top home improvement trends for 2026! Explore the latest in home renovation and remodeling, from smart tech to sustainable designs.
                                </p>
                            </a>
                        </div>

                        <!-- Blog Card 3 -->
                        <div class="ehs-blog-slide" data-slide="3">
                            <a href="https://easyhomeservice.com/blog/how-to-find-home-service-professionals" class="ehs-blog-card">
                                <div class="ehs-blog-img-box">
                                    <img src="https://easyhomeservice.com/blog/admin/postimages/ebb2ffbc40b1b542f1a259a20894d7e3.png" alt="Home service professionals helping a homeowner with home repairs">
                                </div>
                                <span class="ehs-blog-date">September 29, 2026</span>
                                <h3 class="ehs-blog-card-title">How to Find Reliable Home Service Professionals: A Homeowner's Practical Guide</h3>
                                <p class="ehs-blog-card-excerpt">
                                    Finding someone to work on your home is easy. Finding the right home service professional for the job is where things get complicated. A search for "roof repair near me" or "HVAC"...
                                </p>
                            </a>
                        </div>

                        <!-- Blog Card 4 -->
                        <div class="ehs-blog-slide" data-slide="4">
                            <a href="https://easyhomeservice.com/blog/home-inspection-report-repairs-home-services" class="ehs-blog-card">
                                <div class="ehs-blog-img-box">
                                    <img src="https://easyhomeservice.com/blog/admin/postimages/af663e9ac340cf561816db278e6b6dd2.jpg" alt="Home inspection report showing repairs, replacements, installation, and maintenance needs for a home">
                                </div>
                                <span class="ehs-blog-date">August 10, 2026</span>
                                <h3 class="ehs-blog-card-title">Home Inspection Report: Repairs and Home Services You May Need</h3>
                                <p class="ehs-blog-card-excerpt">
                                    Your home inspection report flagged repairs. Get a clear plan for what needs repair, replacement, or maintenance, and find trusted local pros.
                                </p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- =========================================================================
             SECTION 8: "Frequently Asked Question" (Exact Screenshot Match)
             ========================================================================= -->
        <section class="eh-faq-section" id="faq">
            <div class="container">
                
                <!-- Section 8 Header with Glow Circle -->
                <div class="eh-faq-header">
                    <div class="eh-title-wrap">
                        <img src="images/new-index-page/head-back-circle.png" class="eh-head-glow" alt="">
                        <h2 class="eh-faq-title">
                            Frequently Asked Question
                        </h2>
                    </div>
                </div>

                <!-- FAQ Accordion List -->
                <div class="eh-faq-accordion-wrap">
                    
                    <!-- 1. Question 1 (Open by default matching screenshot) -->
                    <div class="eh-faq-item active">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>How much does a bathroom remodel cost in the U.S.?</span>
                            <span class="eh-faq-icon"><i class="fa-regular fa-circle-xmark"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                Most projects range between $6,000 and $15,000, depending on the size, materials, and labor. If you are planning a big or luxury remodel, it may cost more.
                            </p>
                        </div>
                    </div>

                    <!-- 2. Question 2 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>What services do bathroom remodeling professionals provide?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                Bathroom remodeling professionals provide full design, tub-to-shower conversions, vanity installation, plumbing, tile work, lighting, flooring, and complete custom renovation.
                            </p>
                        </div>
                    </div>

                    <!-- 3. Question 3 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>How long does a bathroom renovation take?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                A standard bathroom renovation typically takes 1 to 3 weeks depending on the scope of work, while 1-day remodels are available for targeted shower or tub replacements.
                            </p>
                        </div>
                    </div>

                    <!-- 4. Question 4 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>Are permits required for bathroom renovations?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                Permits are often required if you are modifying electrical wiring, plumbing lines, or structural walls. Our licensed contractors handle all required municipal permits.
                            </p>
                        </div>
                    </div>

                    <!-- 5. Question 5 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>How can I make a small bathroom feel larger?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                Using frameless glass shower doors, light-colored large-format tiles, recessed lighting, floating vanities, and large mirrors can dramatically open up a small space.
                            </p>
                        </div>
                    </div>

                    <!-- 6. Question 6 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>When should I repair instead of remodel?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                Minor cosmetic fixes or small leaks can often be repaired quickly. If your fixtures are outdated, leaky, inefficient, or no longer functional, a remodel adds lasting value.
                            </p>
                        </div>
                    </div>

                    <!-- 7. Question 7 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>What other home services do you offer besides bathroom remodeling?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                We offer roofing, replacement windows, solar panels, HVAC heating & cooling, gutters, home warranties, handyman, plumbing, electrical, and general remodeling services.
                            </p>
                        </div>
                    </div>

                    <!-- 8. Question 8 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>In which states do you provide bathroom remodeling services?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                We provide nationwide coverage across all 50 states through our network of verified, licensed, and certified local home improvement contractor partners.
                            </p>
                        </div>
                    </div>

                    <!-- 9. Question 9 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>Are your materials mold- and mildew-resistant?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                Yes, our certified partner contractors use non-porous, antimicrobial acrylics, composite wall surrounds, and mold-resistant sealants designed for lasting durability.
                            </p>
                        </div>
                    </div>

                    <!-- 10. Question 10 -->
                    <div class="eh-faq-item">
                        <button type="button" class="eh-faq-button" onclick="toggleFaq(this)">
                            <span>What factors should I consider when planning a bathroom remodel?</span>
                            <span class="eh-faq-icon"><i class="fa-solid fa-circle-plus"></i></span>
                        </button>
                        <div class="eh-faq-body">
                            <p>
                                Key factors include your total budget, project timeline, preferred layout and storage needs, moisture ventilation, energy efficiency, and high-quality materials.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    
<!-- ==========================================================================
     HOME IMPROVEMENT CTA BANNER
     ========================================================================== -->
<section class="ehs-home-cta-section">
    <div class="container">
        <div class="ehs-home-cta-content">
            <h2 class="ehs-home-cta-title">
                READY TO START YOUR HOME IMPROVEMENT PROJECT?
            </h2>
            <p class="ehs-home-cta-subtitle">
                Connect with trusted home service professionals today.
            </p>
            <div class="ehs-home-cta-buttons">
                <a href="#quoteForm" class="ehs-btn-cta-green">
                    Get Started Today <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>





      






    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
    function handleQuoteSubmit(e) {
        e.preventDefault();
        const service = document.getElementById('serviceChoice').value;
        const zip = document.getElementById('zipCodeInput').value;
        if (service && zip) {
            window.location.href = 'https://easyhomeservice.com/' + service + '-steps?zip=' + encodeURIComponent(zip);
        }
    }

    function toggleFaq(btn) {
        const item = btn.closest('.eh-faq-item');
        const isActive = item.classList.contains('active');
        
        // Close all other items
        document.querySelectorAll('.eh-faq-item').forEach(el => {
            el.classList.remove('active');
            const icon = el.querySelector('.eh-faq-icon');
            if (icon) {
                icon.innerHTML = '<i class="fa-solid fa-circle-plus"></i>';
            }
        });

        // Toggle clicked item
        if (!isActive) {
            item.classList.add('active');
            const icon = item.querySelector('.eh-faq-icon');
            if (icon) {
                icon.innerHTML = '<i class="fa-regular fa-circle-xmark"></i>';
            }
        }
    }

    // =========================================================================
    // Animated Number Counter Logic
    // =========================================================================
    function startCounters() {
        const counters = document.querySelectorAll('.eh-counter');
        const speed = 1800; // Total duration in ms

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const suffix = counter.getAttribute('data-suffix') || '';
            const useComma = counter.getAttribute('data-comma') === 'true';
            const startTime = performance.now();

            function updateCounter(currentTime) {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / speed, 1);
                
                // Ease out expo formula for smooth landing
                const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                const currentVal = Math.floor(easeProgress * target);

                let formatted = currentVal;
                if (useComma) {
                    formatted = currentVal.toLocaleString('en-US');
                }

                counter.innerText = formatted + suffix;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    let finalFormatted = target;
                    if (useComma) {
                        finalFormatted = target.toLocaleString('en-US');
                    }
                    counter.innerText = finalFormatted + suffix;
                }
            }

            requestAnimationFrame(updateCounter);
        });
    }

    // Trigger counter when scrolled into view
    document.addEventListener('DOMContentLoaded', () => {
        const statsSection = document.getElementById('stats');
        if (statsSection && 'IntersectionObserver' in window) {
            let triggered = false;
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !triggered) {
                        triggered = true;
                        startCounters();
                        observer.unobserve(statsSection);
                    }
                });
            }, { threshold: 0.2 });

            observer.observe(statsSection);
        } else {
            startCounters();
        }
    });
    </script>
        <!-- Scripts for Metric Counters & Testimonial Carousel -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // 1. Testimonials Carousel: Infinite Continuous Forward Loop
        (function() {
            var track = document.querySelector('.ehs-testimonials-track');
            var viewport = document.querySelector('.ehs-testimonials-viewport');
            var prevBtn = document.querySelector('.ehs-test-prev');
            var nextBtn = document.querySelector('.ehs-test-next');
            if (!track || !viewport) return;

            var isAnimating = false;
            var autoPlayTimer = null;
            var intervalTime = 3500; // 3.5 seconds

            function getStep() {
                var firstSlide = track.querySelector('.ehs-test-slide');
                if (!firstSlide) return 0;
                var slideWidth = firstSlide.getBoundingClientRect().width;
                var gap = 24; // gap between slides
                return slideWidth + gap;
            }

            function slideNext() {
                if (isAnimating) return;
                isAnimating = true;

                var step = getStep();
                track.style.transition = 'transform 0.65s cubic-bezier(0.25, 1, 0.5, 1)';
                track.style.transform = 'translateX(-' + step + 'px)';

                var onTransitionEnd = function() {
                    track.removeEventListener('transitionend', onTransitionEnd);
                    track.style.transition = 'none';
                    track.appendChild(track.firstElementChild);
                    track.style.transform = 'translateX(0)';
                    void track.offsetHeight; // Force reflow
                    isAnimating = false;
                };

                track.addEventListener('transitionend', onTransitionEnd, { once: true });
            }

            function slidePrev() {
                if (isAnimating) return;
                isAnimating = true;

                var step = getStep();
                track.style.transition = 'none';
                track.insertBefore(track.lastElementChild, track.firstElementChild);
                track.style.transform = 'translateX(-' + step + 'px)';
                void track.offsetHeight; // Force reflow

                track.style.transition = 'transform 0.65s cubic-bezier(0.25, 1, 0.5, 1)';
                track.style.transform = 'translateX(0)';

                var onTransitionEnd = function() {
                    track.removeEventListener('transitionend', onTransitionEnd);
                    isAnimating = false;
                };

                track.addEventListener('transitionend', onTransitionEnd, { once: true });
            }

            function startAutoPlay() {
                stopAutoPlay();
                autoPlayTimer = setInterval(slideNext, intervalTime);
            }

            function stopAutoPlay() {
                if (autoPlayTimer) {
                    clearInterval(autoPlayTimer);
                    autoPlayTimer = null;
                }
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    slideNext();
                    startAutoPlay();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    slidePrev();
                    startAutoPlay();
                });
            }

            // Pause auto-sliding on hover
            viewport.addEventListener('mouseenter', stopAutoPlay);
            viewport.addEventListener('mouseleave', startAutoPlay);

            // Touch swipe support for mobile/tablet
            var touchStartX = 0;
            viewport.addEventListener('touchstart', function(e) {
                touchStartX = e.touches[0].clientX;
                stopAutoPlay();
            }, { passive: true });

            viewport.addEventListener('touchend', function(e) {
                var touchEndX = e.changedTouches[0].clientX;
                var diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 40) {
                    if (diff > 0) {
                        slideNext();
                    } else {
                        slidePrev();
                    }
                }
                startAutoPlay();
            }, { passive: true });

            // Start infinite continuous loop
            startAutoPlay();
        })();

        // 2. Animated Number Counters on Scroll (Market Stats)
        (function() {
            function setupCounterSection(containerSelector, elementSelector) {
                var container = document.querySelector(containerSelector);
                if (!container) return;
                var statElements = container.querySelectorAll(elementSelector + '[data-target]');
                if (!statElements.length) return;

                var animated = false;

                function animateValue(elem) {
                    var target = parseFloat(elem.getAttribute('data-target'));
                    var decimals = parseInt(elem.getAttribute('data-decimals') || '0', 10);
                    var suffix = elem.getAttribute('data-suffix') || '';
                    var prefix = elem.getAttribute('data-prefix') || '';
                    var duration = 1800;
                    var startTime = null;

                    function step(timestamp) {
                        if (!startTime) startTime = timestamp;
                        var progress = Math.min((timestamp - startTime) / duration, 1);
                        var easeOut = 1 - Math.pow(1 - progress, 3);
                        var current = target * easeOut;

                        var formattedVal = (decimals > 0) ? current.toFixed(decimals) : Math.round(current);
                        elem.textContent = prefix + formattedVal + suffix;

                        if (progress < 1) {
                            requestAnimationFrame(step);
                        } else {
                            var finalVal = (decimals > 0) ? target.toFixed(decimals) : target;
                            elem.textContent = prefix + finalVal + suffix;
                        }
                    }

                    requestAnimationFrame(step);
                }

                if ('IntersectionObserver' in window) {
                    var observer = new IntersectionObserver(function(entries) {
                        entries.forEach(function(entry) {
                            if (entry.isIntersecting && !animated) {
                                animated = true;
                                statElements.forEach(function(el) {
                                    animateValue(el);
                                });
                                observer.disconnect();
                            }
                        });
                    }, { threshold: 0.2 });

                    observer.observe(container);
                } else {
                    statElements.forEach(function(el) {
                        animateValue(el);
                    });
                }
            }

            // Initialize for Market Growth 3 Stats Box (7.2%, 78%, 4.8x)
            setupCounterSection('.ehs-market-stats-card', '.ehs-market-stat-num');
        })();

    });
    </script>
<script>
            // Blog Posts Carousel: Infinite Continuous Loop (1-2-3 -> 2-3-4 -> 3-4-1 -> 4-1-2)
        (function() {
            var track = document.querySelector('.ehs-blog-track');
            var viewport = document.querySelector('.ehs-blog-viewport');
            var prevBtn = document.querySelector('.ehs-blog-prev');
            var nextBtn = document.querySelector('.ehs-blog-next');
            if (!track || !viewport) return;

            var isAnimating = false;
            var autoPlayTimer = null;
            var intervalTime = 4000; // 4 seconds

            function getStep() {
                var firstSlide = track.querySelector('.ehs-blog-slide');
                if (!firstSlide) return 0;
                var slideWidth = firstSlide.getBoundingClientRect().width;
                var style = window.getComputedStyle(track);
                var gap = parseFloat(style.columnGap || style.gap) || 24;
                return slideWidth + gap;
            }

            function slideNext() {
                if (isAnimating) return;
                var firstSlide = track.querySelector('.ehs-blog-slide');
                if (!firstSlide) return;
                isAnimating = true;

                var step = getStep();
                track.style.transition = 'transform 0.55s cubic-bezier(0.25, 1, 0.5, 1)';
                track.style.transform = 'translateX(-' + step + 'px)';

                var onTransitionEnd = function() {
                    track.removeEventListener('transitionend', onTransitionEnd);
                    track.style.transition = 'none';
                    track.appendChild(track.firstElementChild);
                    track.style.transform = 'translateX(0)';
                    void track.offsetHeight; // Force reflow
                    isAnimating = false;
                };

                track.addEventListener('transitionend', onTransitionEnd, { once: true });
            }

            function slidePrev() {
                if (isAnimating) return;
                var lastSlide = track.querySelector('.ehs-blog-slide:last-child');
                if (!lastSlide) return;
                isAnimating = true;

                var step = getStep();
                track.style.transition = 'none';
                track.insertBefore(lastSlide, track.firstElementChild);
                track.style.transform = 'translateX(-' + step + 'px)';
                void track.offsetHeight; // Force reflow

                requestAnimationFrame(function() {
                    requestAnimationFrame(function() {
                        track.style.transition = 'transform 0.55s cubic-bezier(0.25, 1, 0.5, 1)';
                        track.style.transform = 'translateX(0)';

                        var onTransitionEnd = function() {
                            track.removeEventListener('transitionend', onTransitionEnd);
                            isAnimating = false;
                        };

                        track.addEventListener('transitionend', onTransitionEnd, { once: true });
                    });
                });
            }

            function startAutoPlay() {
                stopAutoPlay();
                autoPlayTimer = setInterval(slideNext, intervalTime);
            }

            function stopAutoPlay() {
                if (autoPlayTimer) {
                    clearInterval(autoPlayTimer);
                    autoPlayTimer = null;
                }
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    slideNext();
                    startAutoPlay();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    slidePrev();
                    startAutoPlay();
                });
            }

            // Pause on hover
            viewport.addEventListener('mouseenter', stopAutoPlay);
            viewport.addEventListener('mouseleave', startAutoPlay);

            // Touch swipe support for mobile/tablet
            var touchStartX = 0;
            var touchStartY = 0;
            viewport.addEventListener('touchstart', function(e) {
                touchStartX = e.touches[0].clientX;
                touchStartY = e.touches[0].clientY;
                stopAutoPlay();
            }, { passive: true });

            viewport.addEventListener('touchend', function(e) {
                var touchEndX = e.changedTouches[0].clientX;
                var touchEndY = e.changedTouches[0].clientY;
                var diffX = touchStartX - touchEndX;
                var diffY = touchStartY - touchEndY;
                if (Math.abs(diffX) > 40 && Math.abs(diffX) > Math.abs(diffY)) {
                    if (diffX > 0) {
                        slideNext();
                    } else {
                        slidePrev();
                    }
                }
                startAutoPlay();
            }, { passive: true });

            startAutoPlay();
        })();
</script>
    </main>

<?php
include_once 'footer.php';
?>
