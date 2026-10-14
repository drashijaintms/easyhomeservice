<meta name="robots" content="noindex,nofollow" /> 
<?php include'header.php' ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>
  :root {
    --blue-color: #000073;
    --green-color: #04d36f;
    --white-color: #ffffff;
    --black-color:#000000;
    
    
    /* Typography */
    --heading-color: #0f172a;
    --text-color: #64748b;
    --h1-size: 55px;
    --h2-size: 42px;
    --h3-size: 28px;
    --h4-size: 24px;
    --h5-size: 20px;
    --p-size: 16px;
    --heading-weight: 700;
    --subheading-weight: 600;
    --paragraph-weight: 400;
  }

  /* ==================================
   GLOBAL TYPOGRAPHY
================================== */
  h2 {
    font-size: var(--h2-size);
    font-weight: var(--heading-weight);
    color: var(--heading-color);
    line-height: 1.2;
    margin-bottom: 20px;
  }

  h3 {
    font-size: var(--h3-size);
    font-weight: var(--heading-weight);
    color: var(--heading-color);
    line-height: 1.3;
  }

  h4 {
    font-size: var(--h4-size);
    font-weight: var(--subheading-weight);
    color: var(--heading-color);
    line-height: 1.3;
  }

  h5 {
    font-size: var(--h5-size);
    font-weight: var(--subheading-weight);
    color: var(--heading-color);
    line-height: 1.4;
  }

  p {
    font-size: var(--p-size);
    font-weight: var(--paragraph-weight);
    color: var(--text-color);
    line-height: 1.8;
  }

  /* Common Section Heading */
  .section-heading {
    font-size: 42px;
    font-weight: 700;
    color: var(--heading-color);
    line-height: 1.2;
    margin-bottom: 20px;
  }

  /* Common Card Heading */
  .card-heading {
    font-size: 20px;
    font-weight: 600;
    color: var(--heading-color);
  }

  /* Common Card Text */
  .card-text {
    font-size: 16px;
    color: var(--text-color);
    line-height: 1.8;
  }

  .hero-section {
    background: #f7f8fa;
    text-align: left;
  }

  .hero-title {
    font-size: 55px;
    font-weight: 800;
    line-height: 1.1;
    color: var(--blue-color);
  }

  .hero-title span {
    color: var(--green-color);
  }

  .hero-text {
    font-size: 18px;
    color: #5e6673;
    line-height: 1.8;
  }

  .hero-btn {
    padding: 12px 12px;
    border-radius: 10px;
    font-weight: 600;
    background: var(--blue-color);
    color: white;
    text-decoration: none;
  }

  .hero-features {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    font-size: 15px;
    font-weight: 600;
  }

  .hero-features i {
    color: var(--green-color);
    margin-right: 6px;
  }

  .hero-right {
    min-height: 600px;
  }

  .hero-img {
    max-width: 100%;
  }

  .contractor-img {
    max-height: 650px;
    position: relative;
    z-index: 2;
  }

  /* Floating Cards */
  .lead-card {
    position: absolute;
    left: 20px;
    top: 60px;
    width: 270px;
    border-radius: 20px;
    z-index: 3;
  }

  .lead-item {
    padding: 12px 0;
    border-bottom: 1px solid #eee;
  }

  .lead-item strong {
    display: block;
    font-size: 14px;
  }

  .lead-item small {
    color: #888;
  }

  .stat-card {
    position: absolute;
    background: #fff;
    border-radius: 18px;
    padding: 20px;
    min-width: 220px;
    z-index: 3;
  }

  .stat-card h3 {
    font-weight: 800;
    margin: 10px 0;
  }

  .stat-card-1 {
    right: 0;
    top: 20px;
  }

  .stat-card-2 {
    right: 0;
    top: 190px;
  }

  .stat-card-3 {
    right: 0;
    bottom: 60px;
  }

  /* Bottom Stats */
  .stats-bar {
    background: #031d3f;
    padding: 35px 0;
  }

  .stat-box {
    color: #fff;
  }

  .stat-box i {
    color: #8bd72d;
    font-size: 42px;
    margin-bottom: 15px;
  }

  .stat-box h3 {
    font-size: 32px;
    font-weight: 700;
  }

  .stat-box p {
    margin: 0;
    color: #cdd6e2;
  }

  @media(max-width:991px) {
    .hero-title {
      font-size: 42px;
    }

    .hero-right {
      min-height: auto;
    }

    .lead-card,
    .stat-card {
      position: relative;
      left: auto;
      right: auto;
      top: auto;
      bottom: auto;
      margin-bottom: 20px;
      width: 100%;
    }

    .contractor-img {
      max-height: 450px;
    }
  }

 .about-badge {
    display: inline-block;
    background: #c6d92f;
    color: #111;
    padding: 8px 25px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1px;
  }

  .about-description {
    background: #f3f4f6;
    padding: 20px;
    border-radius: 12px;
    color: #666;
    line-height: 1.9;
  }

  .chart-card {
    position: absolute;
    top: 25px;
    left: -40px;
    background: #fff;
    padding: 10px;
    border-radius: 15px;
    max-width: 180px;
  }

  .experience-card {
    position: absolute;
    left: -20px;
    bottom: -20px;
    background: #c6d92f;
    width: 220px;
    padding: 30px;
    border-radius: 20px;
  }

  .experience-card h2 {
    font-size: 64px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #111;
  }

  .experience-card p {
    margin: 0;
    font-weight: 600;
  }

  .feature-box {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .feature-icon {
    width: 72px;
    height: 72px;
    background: var(--green-color);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .feature-icon i {
    font-size: 28px;
    color: var(--white-color);
  }

  .feature-box h5 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 5px;
  }

  .feature-box p {
    margin: 0;
    font-size: 20px;
  }

  .check-item {
    font-size: 18px;
    color: #222;
  }

  .check-item i {
    color: #1c3b2d;
    margin-right: 10px;
  }

  .about-btn {
    background: #123f35;
    color: #fff;
    padding: 16px 35px;
    border-radius: 50px;
    font-weight: 600;
  }

  .about-btn:hover {
    background: #0d3128;
    color: #fff;
  }

  .avatar-group {
    display: flex;
  }

  .avatar-group img {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    border: 3px solid #fff;
    margin-left: -12px;
  }

  .avatar-group img:first-child {
    margin-left: 0;
  }

  .trust-img {
    max-width: 100%;
    border-radius: 10px;
  }

  @media (max-width: 991px) {
    .about-title {
      font-size: 40px;
    }

    .experience-card {
      width: 180px;
      padding: 20px;
    }

    .experience-card h2 {
      font-size: 50px;
    }

    .chart-card {
      left: 10px;
      top: 10px;
    }
  }

  .how-it-works {
    background: #f7f7f7;
  }

  .section-badge {
    display: inline-block;
    background: var(--green-color);
    color: #111;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 10px 24px;
    border-radius: 50px;
  }

  .section-title {
    font-size: 40px;
    font-weight: 700;
    line-height: 1.2;
    color: #071b0f;
  }

  .step-box h3 {
    font-size: 20px;
    font-weight: 700;
    color: #111;
    margin: 35px 0 15px;
  }

  .step-circle {
    width: 130px;
    height: 130px;
    background: var(--green-color);
    border-radius: 50%;
    margin: auto;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .step-circle.dark {
    background: var(--blue-color);
  }

  .step-circle i {
    font-size: 40px;
    color: var(--white-color);
  }

  .step-circle.dark i {
    color: var(--white-color);
  }

  .step-number {
    position: absolute;
    right: -20px;
    bottom: 10px;
    width: 58px;
    height: 58px;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    font-weight: 700;
    color: #27453d;
  }

  .step-line {
    position: absolute;
    top: 70px;
    right: -42%;
    width: 70%;
    border-top: 2px dashed #ddd;
  }

  .step-line::after {
    content: "\f061";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    right: -8px;
    top: -13px;
    color: #ddd;
  }

  @media (max-width: 991px) {
    .section-title {
      font-size: 40px;
    }

    .step-box h3 {
      font-size: 28px;
    }

    .step-circle {
      width: 130px;
      height: 130px;
    }

    .step-circle i {
      font-size: 42px;
    }
  }

  @media (max-width: 767px) {
    .section-title {
      font-size: 32px;
    }
  }
</style>
<section class="hero-section pt-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-7">
        <h1 class="hero-title mt-3"> Connect With <span>Homeowners</span> Ready to Start Their Projects </h1>
        <p class="hero-text mt-4"> Easy Home Service helps contractors connect with homeowners actively searching for roofing, remodeling, HVAC, solar, plumbing, and other home services across the U.S. </p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#" class="hero-btn"> Start Getting Exclusive Leads </a>
          <a href="#" class="btn btn-outline-success hero-btn"> Check Lead Availability </a>
        </div>
        <div class="hero-features mt-5">
          <div>
            <i class="fas fa-check-circle"></i> Exclusive Leads
          </div>
          <div>
            <i class="fas fa-check-circle"></i> Real Homeowners
          </div>
          <div>
            <i class="fas fa-check-circle"></i> No Long-Term Contracts
          </div>
          <div>
            <i class="fas fa-check-circle"></i> Nationwide Coverage
          </div>
        </div>
      </div>
      <!-- Right Content -->
      <div class="col-lg-5 mt-5 mt-lg-0">
        <img src="images-contractor/hero.png" class="hero-img">
      </div>
    </div>
  </div>
</section>
<!-- Stats Bar -->
<section class="stats-bar">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <i class="fas fa-users"></i>
          <h3>10,000+</h3>
          <p>Homeowners Connected</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <i class="fas fa-handshake"></i>
          <h3>500+</h3>
          <p>Contractor Partners</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-box">
          <i class="fas fa-map-marked-alt"></i>
          <h3>Nationwide</h3>
          <p>Lead Coverage</p>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="stat-box">
          <i class="fas fa-bolt"></i>
          <h3>Fast</h3>
          <p>Lead Delivery</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5 about-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Left Side -->
      <div class="col-lg-6">
        <img src="images-contractor/trust-contractor.jpg" class="trust-img" alt="About">
      </div>
      <!-- Right Side -->
      <div class="col-lg-6">
        <!-- Heading -->
        <h2 class="section-heading mt-3 mb-4"> Trusted by Contractors Across the United States </h2>
        <!-- Description -->
        <div class="about-description mb-4"> We help home service professionals grow faster with high-quality homeowner leads designed to generate real business opportunities. </div>
        <!-- Features -->
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-cube"></i>
              </div>
              <div>
                <h5>Verified Leads</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-project-diagram"></i>
              </div>
              <div>
                <h5>Contractor Focused</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-cube"></i>
              </div>
              <div>
                <h5>Dedicated Support</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-project-diagram"></i>
              </div>
              <div>
                <h5>Performance Driven</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="how-it-works py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="text-center mb-5">
      <h2 class="section-heading mt-3"> How Easy Home Service Works? </h2>
    </div>
    <div class="row justify-content-center g-5">
      <!-- Step 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="step-box text-center position-relative">
          <div class="step-circle">
            <i class="fas fa-users"></i>
            <div class="step-number"> 01 </div>
          </div>
          <h3>Apply to Become a Contractor Partner</h3>
          <p> Tell us about your business, services, and preferred service areas so we can understand your goals. </p>
          <div class="step-line d-none d-lg-block"></div>
        </div>
      </div>
      <!-- Step 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="step-box text-center position-relative">
          <div class="step-circle dark">
            <i class="fas fa-cogs"></i>
            <div class="step-number"> 02 </div>
          </div>
          <h3>Receive Initial Lead Opportunities</h3>
          <p> Get started with homeowner opportunities in your target market and see how Easy Home Service can help grow your business. </p>
          <div class="step-line d-none d-lg-block"></div>
        </div>
      </div>
      <!-- Step 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="step-box text-center">
          <div class="step-circle">
            <i class="fas fa-laptop-code"></i>
            <div class="step-number"> 03 </div>
          </div>
          <h3>Connect With Homeowners & Win More Jobs</h3>
          <p> Respond quickly to homeowner requests, schedule estimates, and turn local opportunities into booked projects. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="why-choose-us">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-heading">Why Contractors Choose Us</h2>
      <p class="section-subtitle"> Connect with homeowners actively looking for services and grow your business with high-quality leads. </p>
    </div>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-regular fa-star"></i>
          </div>
          <div class="content-box">
            <h5>Exclusive Leads</h5>
            <p> Receive leads matched directly to your business without competing against multiple contractors. </p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-solid fa-user-check"></i>
          </div>
          <div class="content-box">
            <h5>Better Lead Quality</h5>
            <p> We focus on connecting you with homeowners actively looking for estimates and services. </p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <div class="content-box">
            <h5>Grow Your Revenue</h5>
            <p> Generate more appointments, estimates, and completed jobs with consistent lead opportunities. </p>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="content-box">
            <h5>Flexible Service Areas</h5>
            <p> Choose the cities, ZIP codes, or regions you want to target. </p>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-solid fa-bolt"></i>
          </div>
          <div class="content-box">
            <h5>Fast Lead Delivery</h5>
            <p> Get notified quickly so you can contact homeowners while the project interest is high. </p>
          </div>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-solid fa-headset"></i>
          </div>
          <div class="content-box">
            <h5>Dedicated Support</h5>
            <p> Our team is here to help optimize your campaigns and improve performance. </p>
          </div>
        </div>
      </div>
      <!-- Card 7 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-solid fa-globe"></i>
          </div>
          <div class="content-box">
            <h5>Nationwide Coverage</h5>
            <p> Access opportunities across major cities and growing markets throughout the United States. </p>
          </div>
        </div>
      </div>
      <!-- Card 8 -->
      <div class="col-lg-3">
        <div class="feature-card">
          <div class="icon-box">
            <i class="fa-solid fa-bullseye"></i>
          </div>
          <div class="content-box">
            <h5>Service Area Targeting</h5>
            <p> Control where you want to receive homeowner opportunities. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .why-choose-us {
    padding: 80px 0;
  }

  .section-subtitle {
    color: #64748b;
    max-width: 700px;
    margin: auto;
  }

  .feature-card {
    background: #fff;
    border: 1px solid #e8edf4;
    border-radius: 20px;
    padding: 15px;
    display: flex;
    align-items: flex-start;
    gap: 5px;
    height: 100%;
    transition: all .3s ease;
  }

  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  }

  .icon-box {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .icon-box i {
    font-size: 30px;
    color: var(--green-color);
  }

  @media(max-width:767px) {
    .feature-card {
      flex-direction: column;
      text-align: center;
      align-items: center;
    }

    .section-title {
      font-size: 32px;
    }
  }
</style>
<style>
  .services-section {
    padding: 80px 0;
  }

  .services-box {
    background: #fff;
    border-radius: 20px;
    padding: 35px 30px 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, .08);
    overflow: hidden;
  }

  .service-item {
    position: relative;
    text-align: center;
    padding: 0 20px;
  }

  .service-item::after {
    content: "";
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 1px;
    height: 120px;
    background: #d9d9d9;
  }

  .col-lg-2:last-child .service-item::after {
    display: none;
  }

  .service-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #edf9f1;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow:
      0 8px 20px rgba(0, 0, 0, .10),
      inset 0 0 0 1px rgba(0, 0, 0, .03);
  }

  .service-icon i {
    font-size: 25px;
    color: #20c55e;
  }

  .explore-area {
    margin-top: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 25px;
  }

  .explore-area .line {
    flex: 1;
    height: 2px;
    background: #22c55e;
  }

  .explore-btn {
    color: #22c55e;
    font-size: 28px;
    font-weight: 700;
    text-decoration: none;
    white-space: nowrap;
  }

  .explore-btn:hover {
    color: #16a34a;
  }

  @media(max-width:991px) {
    .service-item {
      margin-bottom: 35px;
    }

    .service-item::after {
      display: none;
    }

    .service-icon {
      width: 80px;
      height: 80px;
    }

    .service-icon i {
      font-size: 30px;
    }

    .service-item h5 {
      font-size: 18px;
    }

    .explore-btn {
      font-size: 22px;
    }
  }
</style>
<section class="services-section">
  <div class="container">
    <div class="services-box">
      <div class="row g-0 align-items-center">
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-home"></i>
            </div>
            <h5>Roofing</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-fan"></i>
            </div>
            <h5>HVAC</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-solar-panel"></i>
            </div>
            <h5>Solar</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-utensils"></i>
            </div>
            <h5>Kitchen</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-bath"></i>
            </div>
            <h5>Bathroom</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-door-open"></i>
            </div>
            <h5>Windows</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-door-open"></i>
            </div>
            <h5>Doors</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-faucet"></i>
            </div>
            <h5>Plumbing</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h5>Electrical</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-layer-group"></i>
            </div>
            <h5>Flooring</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-border-all"></i>
            </div>
            <h5>Siding</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-house-flood-water"></i>
            </div>
            <h5>Water Damage</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-building"></i>
            </div>
            <h5>Foundation</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-cloud-rain"></i>
            </div>
            <h5>Gutters</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-people-roof"></i>
            </div>
            <h5>Deck</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-people-roof"></i>
            </div>
            <h5>Patio</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-paint-roller"></i>
            </div>
            <h5>Painting</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="service-item">
            <div class="service-icon">
              <i class="fas fa-tree"></i>
            </div>
            <h5>Landscaping</h5>
          </div>
        </div>
      </div>
      <!-- Explore More -->
      <div class="explore-area">
        <div class="line"></div>
        <a href="#" class="explore-btn"> Explore More <i class="fas fa-arrow-right ms-2"></i>
        </a>
        <div class="line"></div>
      </div>
    </div>
  </div>
</section>
<style>
  .quality-work-section {
    padding: 90px 0;
    background: #f8f8f8;
    overflow: hidden;
  }

  .quality-work-title {
    font-size: 48px;
    font-weight: 700;
    color: #3b3b3b;
    margin-bottom: 15px;
  }

  .quality-work-desc {
    max-width: 650px;
    margin: 0 auto;
    color: #6c757d;
    line-height: 1.8;
  }

  .quality-image-wrap {
    position: relative;
    min-height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .quality-main-image {
    width: 350px;
    height: 350px;
    border-radius: 50%;
    object-fit: cover;
    position: relative;
    z-index: 2;
  }

  .quality-circle-lg {
    position: absolute;
    width: 240px;
    height: 240px;
    border-radius: 50%;
    background: linear-gradient(135deg, #22d9f5, #10e9a0);
    left: 20px;
    bottom: 0;
    box-shadow: 0 0 40px rgba(34, 217, 245, .35);
  }

  .quality-circle-md {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #22d9f5, #10e9a0);
    left: 90px;
    top: 70px;
  }

  .quality-circle-sm {
    position: absolute;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: linear-gradient(135deg, #22d9f5, #10e9a0);
    left: 185px;
    top: 20px;
  }

  .whychoose-box {
    background: #eef4f8;
    border-radius: 12px;
    padding: 45px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
  }

  .whychoose-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .whychoose-list li {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 22px;
  }

  .whychoose-list li:last-child {
    margin-bottom: 0;
  }

  .whychoose-list i {
    color: #14d7e4;
    font-size: 22px;
    line-height: 1;
    margin-top: 3px;
  }

  .whychoose-list span {
    color: #444;
    font-size: 18px;
    line-height: 1.6;
  }

  @media (max-width:991px) {
    .quality-work-section {
      padding: 70px 0;
    }

    .quality-work-title {
      font-size: 36px;
    }

    .quality-main-image {
      width: 300px;
      height: 300px;
    }

    .quality-circle-lg {
      width: 180px;
      height: 180px;
    }

    .whychoose-box {
      margin-top: 40px;
      padding: 35px;
    }

    .whychoose-title {
      font-size: 30px;
    }
  }

  @media (max-width:575px) {
    .quality-work-title {
      font-size: 30px;
    }

    .quality-main-image {
      width: 260px;
      height: 260px;
    }

    .quality-circle-lg {
      width: 140px;
      height: 140px;
      left: 10px;
    }

    .quality-circle-md {
      width: 60px;
      height: 60px;
      left: 50px;
    }

    .quality-circle-sm {
      width: 35px;
      height: 35px;
      left: 120px;
    }

    .whychoose-box {
      padding: 25px;
    }

    .whychoose-list span {
      font-size: 16px;
    }
  }
</style>
<section class="quality-work-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="quality-work-title"> Quality Leads Built for Better Results </h2>
      <p class="quality-work-desc"> We understand that contractors need more than just traffic — they need real opportunities. That’s why we focus on delivering homeowner leads with stronger intent and better project potential. </p>
    </div>
    <div class="row align-items-center">
      <!-- Left Side Image -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="images/technician.jpg" alt="Technician" class="quality-main-image">
      </div>
      <!-- Right Side Content -->
      <div class="col-lg-6">
        <div class="whychoose-box">
          <h3>Features</h3>
          <ul class="whychoose-list">
            <li>
              <i class="bi bi-check2-square"></i>
              <span>Real Homeowner Inquiries</span>
            </li>
            <li>
              <i class="bi bi-credit-card"></i>
              <span>Service Area Matching</span>
            </li>
            <li>
              <i class="bi bi-shield-check"></i>
              <span>ZIP Code Targeting</span>
            </li>
            <li>
              <i class="bi bi-hand-thumbs-up"></i>
              <span>Fast Lead Notifications</span>
            </li>
            <li>
              <i class="bi bi-cash-stack"></i>
              <span>Spam Protection Measures</span>
            </li>
            <li>
              <i class="bi bi-cash-stack"></i>
              <span>Home Improvement Focused Campaigns</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* =========================
   FAQ SECTION
========================= */
  div#faqAccordion {
    display: block;
    padding: 0px;
  }

  .accordion {
    background: none;
  }

  .faq-section {
    padding: 100px 0;
    overflow: hidden;
  }

  .faq-image-wrap {
    position: relative;
  }

  .faq-image {
    width: 100%;
    border-radius: 30px;
    overflow: hidden;
  }

  .faq-image img {
    width: 100%;
    height: 700px;
    object-fit: cover;
    display: block;
  }

  .green-line {
    position: absolute;
    left: -25px;
    top: 100px;
    width: 6px;
    height: 250px;
    background: #bfd42d;
    border-radius: 50px;
  }

  /* FAQ CARD */
  .faq-content {
    background: #fff;
    padding: 30px;
    border-radius: 35px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, .05);
    position: relative;
    z-index: 10;
    /* overlap image */
    margin-left: -50px;
  }

  .faq-tag {
    display: inline-block;
    background: #bfd42d;
    color: #000;
    font-size: 14px;
    font-weight: 600;
    padding: 8px 30px;
    border-radius: 50px;
    margin-bottom: 25px;
  }

  .faq-desc {
    color: #666;
    line-height: 1.8;
    margin-bottom: 35px;
  }

  /* =========================
   ACCORDION
========================= */
  .custom-faq {
    border: 1px solid #e8e8e8 !important;
    border-radius: 12px !important;
    overflow: hidden;
    margin-bottom: 15px;
  }

  .custom-faq .accordion-button {
    background: #fff;
    box-shadow: none !important;
    padding: 18px;
    display: flex;
    align-items: center;
  }

  .custom-faq .accordion-button:not(.collapsed) {
    background: #fff;
    color: #000;
  }

  .custom-faq .accordion-button::after {
    margin-left: auto;
  }

  .faq-number {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 8px;
    background: #dfe8a8;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: #000;
    margin-right: 15px;
  }

  .faq-title {
    flex: 1;
    text-align: left;
    font-weight: 600;
    color: #222;
  }

  .accordion-body {
    padding: 0 25px 25px 75px;
    color: #666;
    line-height: 1.4;
    font-size: 15px;
    font-weight: 400;
  }

  .accordion-button:focus {
    box-shadow: none;
  }

  h2.accordion-header {
    margin-bottom: 0px;
  }

  /* =========================
   RESPONSIVE
========================= */
  @media(max-width:991px) {
    .faq-content {
      margin-left: 0;
      margin-top: -60px;
      padding: 35px;
    }

    .faq-content h2 {
      font-size: 38px;
    }

    .faq-image img {
      height: auto;
    }

    .green-line {
      display: none;
    }
  }
</style>
<section class="faq-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- IMAGE COLUMN -->
      <div class="col-lg-6">
        <div class="faq-image-wrap">
          <span class="green-line"></span>
          <div class="faq-image">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200" alt="Team">
          </div>
        </div>
      </div>
      <!-- FAQ COLUMN -->
      <div class="col-lg-6 faq-content">
        <h2 class="section-heading">Frequently Asked Question</h2>
        <div class="accordion" id="faqAccordion">
          <!-- FAQ 1 -->
          <div class="accordion-item custom-faq">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                <span class="faq-number active">01</span>
                <span class="faq-title"> Are the leads exclusive? </span>
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body"> We offer lead programs designed to provide better quality and stronger contractor opportunities. </div>
            </div>
          </div>
          <!-- FAQ 2 -->
          <div class="accordion-item custom-faq">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                <span class="faq-number">02</span>
                <span class="faq-title"> What services do you support? </span>
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body"> We support a wide range of home improvement and contractor industries. </div>
            </div>
          </div>
          <!-- FAQ 3 -->
          <div class="accordion-item custom-faq">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                <span class="faq-number">03</span>
                <span class="faq-title"> Can I choose my service area? </span>
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body"> Yes, contractors can target specific cities, states, and ZIP codes. </div>
            </div>
          </div>
          <!-- FAQ 4 -->
          <div class="accordion-item custom-faq">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                <span class="faq-number">04</span>
                <span class="faq-title"> How quickly are leads delivered? </span>
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body"> Lead delivery timing may vary based on campaign settings and availability. </div>
            </div>
          </div>
          <!-- FAQ 5 -->
          <div class="accordion-item custom-faq">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                <span class="faq-number">05</span>
                <span class="faq-title"> Is there a long-term contract? </span>
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body"> We offer flexible partnership opportunities depending on the program. </div>
            </div>
          </div>
          <!-- FAQ 6 -->
          <div class="accordion-item custom-faq">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                <span class="faq-number">06</span>
                <span class="faq-title"> Do you work nationwide? </span>
              </button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body"> Yes, we support contractors across multiple U.S. markets. </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .blog-section {
    padding: 80px 0;
  }

  .blog-heading {
    margin-bottom: 50px;
  }

  .blog-card {
    position: relative;
    padding-bottom: 20px;
  }

  .blog-img {
    overflow: hidden;
    border-radius: 10px;
  }

  .blog-img img {
    width: 100%;
    height: 330px;
    object-fit: cover;
    transition: all .4s ease;
  }

  .blog-card:hover .blog-img img {
    transform: scale(1.05);
  }

  .blog-content {
    background: #fff;
    width: 85%;
    margin: -95px auto 0;
    position: relative;
    z-index: 2;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
  }

  .blog-meta {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 15px;
    font-size: 15px;
    color: #555;
  }

  .blog-meta i {
    color: #163b2b;
    margin-right: 6px;
  }

  .blog-title a {
    color: #102414;
    text-decoration: none;
  }

  .blog-title a:hover {
    color: #1c5c43;
  }

  .blog-readmore {
    text-decoration: none;
    color: #102414;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 10px;
  }

  .blog-readmore i {
    width: 22px;
    height: 22px;
    background: #163b2b;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10px;
  }

  .blog-carousel .owl-nav {
    margin-top: 40px;
    text-align: center;
  }

  .blog-carousel .owl-nav button.owl-prev,
  .blog-carousel .owl-nav button.owl-next {
    width: 45px;
    height: 45px;
    border-radius: 50% !important;
    background: #163b2b !important;
    color: #fff !important;
    font-size: 24px !important;
    margin: 0 6px;
  }

  .blog-carousel .owl-nav button:hover {
    background: #0d251b !important;
  }

  .blog-carousel .owl-dots {
    margin-top: 20px;
  }

  .blog-carousel .owl-dot.active span {
    background: #163b2b !important;
  }
</style>
<section class="blog-section">
  <div class="container">
    <div class="blog-heading text-center">
      <h2 class="section-heading">Latest Blog Articles</h2>
      <p>Stay informed with expert insights and helpful business tips.</p>
    </div>
    <div class="owl-carousel blog-carousel">
      <!-- Card 1 -->
      <div class="blog-card">
        <div class="blog-img">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800" alt="">
        </div>
        <div class="blog-content">
          <div class="blog-meta">
            <span>
              <i class="far fa-user-circle"></i> Robert .Q </span>
            <span>
              <i class="far fa-comment"></i> Comments (03) </span>
          </div>
          <h3 class="blog-title">
            <a href="#">How Scale Your Business Without Losing Quality</a>
          </h3>
          <a href="#" class="blog-readmore"> Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="blog-card">
        <div class="blog-img">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800" alt="">
        </div>
        <div class="blog-content">
          <div class="blog-meta">
            <span>
              <i class="far fa-user-circle"></i> Beckhum .H </span>
            <span>
              <i class="far fa-comment"></i> Comments (03) </span>
          </div>
          <h3 class="blog-title">
            <a href="#">The Entrepreneur Guide To Work-Life Balance</a>
          </h3>
          <a href="#" class="blog-readmore"> Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="blog-card">
        <div class="blog-img">
          <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800" alt="">
        </div>
        <div class="blog-content">
          <div class="blog-meta">
            <span>
              <i class="far fa-user-circle"></i> Devoid .H </span>
            <span>
              <i class="far fa-comment"></i> Comments (03) </span>
          </div>
          <h3 class="blog-title">
            <a href="#">Complete Guide Business Insurance Perfect</a>
          </h3>
          <a href="#" class="blog-readmore"> Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="blog-card">
        <div class="blog-img">
          <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?w=800" alt="">
        </div>
        <div class="blog-content">
          <div class="blog-meta">
            <span>
              <i class="far fa-user-circle"></i> John .D </span>
            <span>
              <i class="far fa-comment"></i> Comments (05) </span>
          </div>
          <h3 class="blog-title">
            <a href="#">Top Strategies To Grow Your Contracting Business</a>
          </h3>
          <a href="#" class="blog-readmore"> Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="blog-card">
        <div class="blog-img">
          <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800" alt="">
        </div>
        <div class="blog-content">
          <div class="blog-meta">
            <span>
              <i class="far fa-user-circle"></i> Sarah .M </span>
            <span>
              <i class="far fa-comment"></i> Comments (06) </span>
          </div>
          <h3 class="blog-title">
            <a href="#">Best Marketing Techniques For Small Businesses</a>
          </h3>
          <a href="#" class="blog-readmore"> Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $('.blog-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 800,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });
</script>
<section class="testimonial-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Image -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="testimonial-image">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=1200" class="img-fluid" alt="">
        </div>
      </div>
      <!-- Right Content -->
      <div class="col-lg-6">
        <div class="d-flex justify-content-between align-items-start mb-4">
          <div>
            <h2 class="testimonial-title mt-4"> What Our Customers <br>
              <strong>Say</strong> About Us
            </h2>
          </div>
          <div class="testimonial-arrows">
            <button class="arrow-btn" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev"> ❮ </button>
            <button class="arrow-btn" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next"> ❯ </button>
          </div>
        </div>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="carousel-item active">
              <div class="testimonial-content">
                <p class="testimonial-text"> Ascend the mountain not to plant your flag, but to embrace the challenge, savour the journey, and marvel at the view. Climb to experience the world, not for the world to notice you. </p>
                <div class="testimonial-footer">
                  <div class="author-box">
                    <h4> Dianne Russell <span>/</span>
                    </h4>
                    <p>Junior Manager</p>
                  </div>
                  <div class="rating-card">
                    <div class="star-icon">★</div>
                    <div>
                      <div class="rating-stars"> ★★★★★ </div>
                      <div class="rating-text"> 4.3 score, 47 reviews </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item 2 -->
            <div class="carousel-item">
              <div class="testimonial-content">
                <p class="testimonial-text"> Working with this company was a fantastic experience. The team was professional, responsive and exceeded expectations. </p>
                <div class="testimonial-footer">
                  <div class="author-box">
                    <h4> Robert J. Hare <span>/</span>
                    </h4>
                    <p>Business Owner</p>
                  </div>
                  <div class="rating-card">
                    <div class="star-icon">★</div>
                    <div>
                      <div class="rating-stars"> ★★★★★ </div>
                      <div class="rating-text"> 4.8 score, 96 reviews </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item 3 -->
            <div class="carousel-item">
              <div class="testimonial-content">
                <p class="testimonial-text"> Amazing customer service and excellent communication throughout the project. Highly recommended. </p>
                <div class="testimonial-footer">
                  <div class="author-box">
                    <h4> Michael Brown <span>/</span>
                    </h4>
                    <p>CEO & Founder</p>
                  </div>
                  <div class="rating-card">
                    <div class="star-icon">★</div>
                    <div>
                      <div class="rating-stars"> ★★★★★ </div>
                      <div class="rating-text"> 5.0 score, 128 reviews </div>
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
<style>
  .testimonial-section {
    background: #f7f7f7;
    position: relative;
  }

  .testimonial-section:before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(#ececec 1px, transparent 1px),
      linear-gradient(90deg, #ececec 1px, transparent 1px);
    background-size: 80px 80px;
    opacity: .5;
  }

  .testimonial-section .container {
    position: relative;
    z-index: 2;
  }

  .testimonial-image img {
    width: 100%;
    height: 560px;
    object-fit: cover;
    border-radius: 30px;
  }

  .testimonial-badge {
    background: #c6d92d;
    padding: 10px 25px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
  }

  .testimonial-title {
    font-size: 56px;
    font-weight: 700;
    color: #03210e;
    line-height: 1.15;
  }

  .testimonial-title strong {
    font-weight: 800;
  }

  .testimonial-arrows {
    display: flex;
    gap: 10px;
  }

  .arrow-btn {
    width: 58px;
    height: 58px;
    border: none;
    border-radius: 50%;
    background: #184f40;
    color: #fff;
    font-size: 24px;
  }

  .testimonial-text {
    font-size: 20px;
    line-height: 2;
    color: #666;
    border-bottom: 1px solid #ddd;
    padding-bottom: 30px;
    min-height: 220px;
  }

  .testimonial-footer {
    margin-top: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
  }

  .author-box {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .author-box h4 {
    margin: 0;
    color: #224b40;
    font-size: 34px;
    font-weight: 700;
  }

  .author-box h4 span {
    margin-left: 5px;
  }

  .author-box p {
    margin: 0;
    color: #666;
  }

  .rating-card {
    background: #3f6c61;
    color: #fff;
    border-radius: 12px;
    padding: 18px 25px;
    display: flex;
    align-items: center;
    gap: 18px;
  }

  .star-icon {
    color: #00d084;
    font-size: 55px;
    line-height: 1;
  }

  .rating-stars {
    color: #00d084;
    font-size: 24px;
    letter-spacing: 2px;
  }

  .rating-text {
    font-size: 14px;
  }

  .carousel-item {
    transition: transform .8s ease-in-out;
  }

  @media(max-width:991px) {
    .testimonial-title {
      font-size: 38px;
    }

    .testimonial-image img {
      height: 350px;
    }

    .testimonial-text {
      min-height: auto;
      font-size: 18px;
    }

    .author-box h4 {
      font-size: 24px;
    }

    .testimonial-footer {
      flex-direction: column;
      align-items: flex-start;
    }
  }
</style>
<section class="trusted-services py-4">
  <div class="container">
    <div class="service-marquee-box">
      <!-- Left Title -->
      <div class="marquee-title">
        <h4>Browse Our <br>Services ↗ </h4>
      </div>
      <!-- Right Marquee -->
      <div class="marquee-wrapper">
        <div class="marquee-track" id="marqueeTrack">
          <a href="#" class="service-item">
            <div class="icon-circle">
              <i class="fas fa-home"></i>
            </div>
            <h6>Roofing</h6>
          </a>
          <a href="#" class="service-item">
            <div class="icon-circle">
              <i class="fas fa-fan"></i>
            </div>
            <h6>HVAC</h6>
          </a>
          <a href="#" class="service-item">
            <div class="icon-circle">
              <i class="fas fa-solar-panel"></i>
            </div>
            <h6>Solar</h6>
          </a>
          <a href="#" class="service-item">
            <div class="icon-circle">
              <i class="fas fa-faucet"></i>
            </div>
            <h6>Plumbing</h6>
          </a>
          <a href="#" class="service-item">
            <div class="icon-circle">
              <i class="fas fa-bolt"></i>
            </div>
            <h6>Electrical</h6>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .service-marquee-box {
    display: flex;
    align-items: center;
    background: #fff;
    border: 1px solid #e4dff7;
    border-radius: 25px;
    overflow: hidden;
    padding: 20px 0;
  }

  .marquee-title {
    min-width: 220px;
    padding: 0 35px;
    border-right: 1px solid #ddd;
  }

  .marquee-title h4 {
    font-size: 28px;
    font-weight: 700;
    line-height: 1.5;
    margin: 0;
  }

  .marquee-wrapper {
    overflow: hidden;
    width: 100%;
    position: relative;
  }

  .marquee-track {
    display: flex;
    align-items: center;
    gap: 40px;
    width: max-content;
    animation: marquee 25s linear infinite;
  }

  @keyframes marquee {
    from {
      transform: translateX(0);
    }

    to {
      transform: translateX(-50%);
    }
  }

  .service-item {
    text-decoration: none;
    color: #000;
    text-align: center;
    min-width: 140px;
  }

  .icon-circle {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background: #eef8f1;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
  }

  .icon-circle i {
    color: #22c55e;
    font-size: 38px;
  }
</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('marqueeTrack');
    // Clone automatically
    track.innerHTML += track.innerHTML;
  });
</script>
<!-- CTA SECTION START -->
<section class="cta-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-11 text-center">
        <div class="cta-content">
          <h2 class="cta-title"> QUESTIONS? </h2>
          <p class="cta-description"> Give us a call to schedule your Free Estimate. We also offer special discounts for <br> Military members, Nurses &amp; Teachers. </p>
          <a href="tel:9178199624" class="cta-phone"> (917) 819-9624 </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CTA SECTION END -->
<style>
  /* ==========================
   CTA SECTION
========================== */
  .cta-section {
    position: relative;
    background: url('images-contractor/cta-background.jpg') center center/cover no-repeat;
    min-height: 515px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .cta-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
  }

  .cta-content {
    position: relative;
    z-index: 2;
  }

  .cta-title {
    font-size: 90px;
    font-weight: 300;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 40px;
    line-height: 1;
  }

  .cta-description {
    color: #fff;
    font-size: 26px;
    line-height: 1.8;
    font-weight: 300;
    max-width: 1100px;
    margin: 0 auto 50px;
  }

  .cta-phone {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 280px;
    height: 80px;
    border: 2px solid rgba(255, 255, 255, 0.8);
    border-radius: 8px;
    color: #fff;
    text-decoration: none;
    font-size: 28px;
    font-weight: 300;
    transition: all .3s ease;
  }

  .cta-phone:hover {
    background: #fff;
    color: #000;
  }

  @media (max-width: 991px) {
    .cta-section {
      min-height: 500px;
      padding: 80px 0;
    }

    .cta-title {
      font-size: 65px;
    }

    .cta-description {
      font-size: 22px;
    }

    .cta-phone {
      min-width: 240px;
      height: 70px;
      font-size: 24px;
    }
  }

  @media (max-width: 767px) {
    .cta-title {
      font-size: 42px;
    }

    .cta-description {
      font-size: 18px;
      line-height: 1.7;
    }

    .cta-phone {
      min-width: 220px;
      height: 60px;
      font-size: 20px;
    }
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> <?php include'footer.php' ?>