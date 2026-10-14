<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upgrade Your Windows — Free Quotes & Rebates | EasyHomeService</title>
  <meta name="description" content="U.S. homeowners: check rebates & get free window replacement quotes. Licensed installers, lifetime warranties.">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    :root {
      --primary-orange: #ff6b00;
      --primary-dark: #e65c00;
      --dark-bg: #0f1724;
      --light-bg: #f8f9fa;
      --border-radius: 12px;
    }

    body {
      font-family: 'Inter', sans-serif;
      color: #1f2937;
      overflow-x: hidden;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--primary-orange), var(--primary-dark));
      border: none;
      padding: 14px 32px;
      font-weight: 700;
      border-radius: var(--border-radius);
      box-shadow: 0 8px 24px rgba(255, 107, 0, 0.25);
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 32px rgba(255, 107, 0, 0.35);
      background: linear-gradient(135deg, var(--primary-dark), var(--primary-orange));
    }

    .btn-outline-dark {
      border: 2px solid #e5e7eb;
      padding: 12px 28px;
      font-weight: 600;
      border-radius: var(--border-radius);
      transition: all 0.3s ease;
    }

    .btn-outline-dark:hover {
      background: #f9fafb;
      border-color: #d1d5db;
      transform: translateY(-2px);
    }

    .top-bar {
      background: linear-gradient(135deg, #111827, #1f2937);
      color: white;
      padding: 12px 0;
      font-weight: 700;
      font-size: 14px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .hero-section {
      background: linear-gradient(180deg, #f0f9ff 0%, #ffffff 100%);
      padding: 60px 0 80px;
    }

    .hero-card {
      background: white;
      border-radius: var(--border-radius);
      box-shadow: 0 10px 40px rgba(0,0,0,0.06);
      padding: 40px;
      height: 100%;
    }

    .kicker {
      display: inline-block;
      background: linear-gradient(135deg, #dbeafe, #eff6ff);
      color: #1e40af;
      padding: 8px 16px;
      border-radius: 50px;
      font-weight: 700;
      font-size: 13px;
      margin-bottom: 16px;
    }

    .hero-title {
      font-size: 2.5rem;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 20px;
      letter-spacing: -0.5px;
    }

    .lead-text {
      color: #6b7280;
      font-size: 1.1rem;
      margin-bottom: 28px;
    }

    .hero-image {
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0,0,0,0.15);
      height: 100%;
      min-height: 400px;
    }

    .hero-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .feature-card {
      background: white;
      border-radius: var(--border-radius);
      padding: 28px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      transition: all 0.3s ease;
      height: 100%;
      border: 1px solid #f3f4f6;
    }

    .feature-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    }

    .feature-icon {
      font-size: 3rem;
      margin-bottom: 16px;
    }

    .badge-custom {
      background: white;
      padding: 10px 16px;
      border-radius: 50px;
      border: 1px solid #e5e7eb;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      font-weight: 600;
      font-size: 14px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .steps-section {
      background: white;
      border-radius: var(--border-radius);
      padding: 40px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    }

    .step-card {
      background: linear-gradient(135deg, #f9fafb, #ffffff);
      border-radius: var(--border-radius);
      padding: 24px;
      height: 100%;
      border: 2px solid #f3f4f6;
      transition: all 0.3s ease;
    }

    .step-card:hover {
      border-color: var(--primary-orange);
      transform: translateY(-4px);
      box-shadow: 0 8px 24px rgba(255, 107, 0, 0.12);
    }

    .step-number {
      width: 36px;
      height: 36px;
      background: linear-gradient(135deg, var(--primary-orange), var(--primary-dark));
      color: white;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      margin-bottom: 12px;
    }

    .review-card {
      background: white;
      border-radius: var(--border-radius);
      padding: 28px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      height: 100%;
      border-left: 4px solid var(--primary-orange);
      transition: all 0.3s ease;
    }

    .review-card:hover {
      box-shadow: 0 8px 32px rgba(0,0,0,0.12);
      transform: translateY(-4px);
    }

    .stars {
      color: #fbbf24;
      font-size: 1.2rem;
      margin-bottom: 12px;
    }

    .comparison-table {
      background: white;
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    }

    .table {
      margin-bottom: 0;
    }

    .table thead {
      background: linear-gradient(135deg, #111827, #1f2937);
      color: white;
    }

    .table thead th {
      padding: 18px;
      font-weight: 700;
      border: none;
    }

    .table tbody td {
      padding: 16px 18px;
      vertical-align: middle;
    }

    .table tbody tr {
      transition: all 0.2s ease;
    }

    .table tbody tr:hover {
      background: #f9fafb;
    }

    .final-cta-section {
      background: linear-gradient(135deg, #f0f9ff, #ffffff);
      border-radius: var(--border-radius);
      padding: 48px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.08);
    }

    .sticky-bottom-cta {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 1050;
      width: calc(100% - 40px);
      max-width: 1140px;
    }

    .sticky-inner {
      background: linear-gradient(135deg, #111827, #1f2937);
      color: white;
      border-radius: var(--border-radius);
      padding: 18px 28px;
      box-shadow: 0 12px 48px rgba(0,0,0,0.3);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
    }

    .sticky-inner .btn-primary {
      white-space: nowrap;
      box-shadow: 0 4px 16px rgba(255, 107, 0, 0.4);
    }

    .modal-content {
      border-radius: var(--border-radius);
      border: none;
      box-shadow: 0 24px 80px rgba(0,0,0,0.3);
    }

    .modal-header {
      border-bottom: 2px solid #f3f4f6;
      padding: 24px 32px;
    }

    .modal-body {
      padding: 32px;
    }

    .offer-highlight {
      background: linear-gradient(135deg, #fff7ed, #ffedd5);
      border: 2px solid #fed7aa;
      border-radius: var(--border-radius);
      padding: 20px;
      margin: 20px 0;
      text-align: center;
    }

    .offer-text {
      font-size: 1.5rem;
      font-weight: 800;
      color: #1f2937;
      margin: 0;
    }

    .offer-text .highlight {
      color: var(--primary-orange);
    }

    footer {
      background: #f9fafb;
      padding: 48px 0 32px;
      margin-top: 80px;
      border-top: 1px solid #e5e7eb;
    }

    .section-spacing {
      padding: 60px 0;
    }

    @media (max-width: 991px) {
      .hero-title {
        font-size: 2rem;
      }

      .hero-section {
        padding: 40px 0 60px;
      }

      .sticky-inner {
        flex-direction: column;
        text-align: center;
      }

      .final-cta-section {
        padding: 32px 24px;
        text-align: center;
      }
    }

    @media (max-width: 767px) {
      .hero-title {
        font-size: 1.75rem;
      }

      .hero-card {
        padding: 28px;
      }

      .steps-section {
        padding: 28px 20px;
      }

      body {
        padding-bottom: 140px;
      }
    }

    .animate-fade-in {
      animation: fadeIn 0.6s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="top-bar">
    <div class="container">
      <i class="bi bi-rocket-takeoff"></i> Limited Time: Get Your Free Window Replacement Quote Today — exclusive rebates available this month!
    </div>
  </div>

  <section class="hero-section">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-7">
          <div class="hero-card animate-fade-in">
            <span class="kicker">Homeowner Special</span>
            <h1 class="hero-title">Upgrade Your Home With Energy-Efficient Windows — Save Big on Bills</h1>
            <p class="lead-text">Licensed installers • Lifetime warranty • Free, no-obligation quotes. Many homeowners qualify for utility rebates and limited-time discounts.</p>

            <div class="d-flex flex-wrap gap-3 mb-4">
              <a href="https://qualitywindowsdirect.com/rbam40.aspx?utm_source=easyhomeservice&utm_medium=prelander&utm_campaign=windows#" class="btn btn-primary btn-lg cta-link">
                Get A Quote & Check Rebates <i class="bi bi-arrow-right"></i>
              </a>
              <a href="#how-it-works" class="btn btn-outline-dark btn-lg">
                How It Works
              </a>
            </div>

            <div class="d-flex flex-wrap gap-3 mb-4 text-muted small">
              <div><strong>Fast</strong> — Estimate in under 60 seconds</div>
              <div>•</div>
              <div><strong>No obligation</strong> — Compare local pros</div>
              <div>•</div>
              <div><strong>Trusted</strong> installers nationwide</div>
            </div>

            <div class="row g-3 mt-4">
              <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                  <div class="feature-icon">💰</div>
                  <h5 class="fw-bold mb-2">Lower Energy Bills</h5>
                  <p class="text-muted small mb-0">Modern windows reduce drafts and lower heating/cooling costs.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                  <div class="feature-icon">🏠</div>
                  <h5 class="fw-bold mb-2">Instant Curb Appeal</h5>
                  <p class="text-muted small mb-0">Stylish frames and glass update your home's look instantly.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                  <div class="feature-icon">🎁</div>
                  <h5 class="fw-bold mb-2">Rebates & Incentives</h5>
                  <p class="text-muted small mb-0">Many homeowners qualify for utility or government rebates.</p>
                </div>
              </div>
            </div>

            <div class="d-flex flex-wrap gap-3 mt-4">
              <span class="badge-custom"><i class="bi bi-star-fill text-warning"></i> 4.8/5 Avg Rating</span>
              <span class="badge-custom"><i class="bi bi-shield-check text-success"></i> Lifetime Warranty</span>
              <span class="badge-custom"><i class="bi bi-check-circle text-primary"></i> Licensed Installers</span>
              <span class="badge-custom"><i class="bi bi-globe-americas text-info"></i> Made in USA</span>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="hero-image animate-fade-in">
            <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1400&q=80" alt="Modern windows installed in a bright living room" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="how-it-works" class="py-5">
    <div class="container">
      <div class="steps-section">
        <h2 class="text-center fw-bold mb-4">How It Works — 4 Simple Steps</h2>
        <div class="row g-4 mt-3">
          <div class="col-lg-3 col-md-6">
            <div class="step-card">
              <div class="step-number">1</div>
              <h5 class="fw-bold mb-2">Quick Details</h5>
              <p class="text-muted small mb-0">Tell us about your home in 60 seconds.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="step-card">
              <div class="step-number">2</div>
              <h5 class="fw-bold mb-2">Local Matches</h5>
              <p class="text-muted small mb-0">Get matched with top installers in your area.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="step-card">
              <div class="step-number">3</div>
              <h5 class="fw-bold mb-2">Free Quotes</h5>
              <p class="text-muted small mb-0">Compare multiple no-obligation quotes.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="step-card">
              <div class="step-number">4</div>
              <h5 class="fw-bold mb-2">Professional Install</h5>
              <p class="text-muted small mb-0">Fast, clean installation with warranty.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-spacing bg-light">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Real Homeowner Reviews</h2>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="review-card">
            <div class="stars">★★★★★</div>
            <p class="mb-3">"Our energy bill dropped by $80 in the first month. Installation was clean and fast."</p>
            <p class="fw-bold mb-0 text-muted">— Karen L., Austin, TX</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="review-card">
            <div class="stars">★★★★★</div>
            <p class="mb-3">"Received 3 quotes and saved over $2,200. Highly recommend their installers."</p>
            <p class="fw-bold mb-0 text-muted">— Mike R., Chicago, IL</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="review-card">
            <div class="stars">★★★★★</div>
            <p class="mb-3">"Qualified for a utility rebate — the team handled everything. My home looks brand new."</p>
            <p class="fw-bold mb-0 text-muted">— Jennifer W., Tampa, FL</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-spacing">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Quick Comparison</h2>
      <div class="comparison-table">
        <table class="table">
          <thead>
            <tr>
              <th>Feature</th>
              <th>Old Windows</th>
              <th>New Energy-Efficient Windows</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Energy Efficiency</strong></td>
              <td><i class="bi bi-x-circle text-danger"></i> Poor</td>
              <td><i class="bi bi-check-circle text-success"></i> Up to 40% Savings</td>
            </tr>
            <tr>
              <td><strong>Noise Reduction</strong></td>
              <td><i class="bi bi-x-circle text-danger"></i> Minimal</td>
              <td><i class="bi bi-check-circle text-success"></i> Double-pane & insulated</td>
            </tr>
            <tr>
              <td><strong>UV Protection</strong></td>
              <td><i class="bi bi-x-circle text-danger"></i> None</td>
              <td><i class="bi bi-check-circle text-success"></i> Blocks harmful UV rays</td>
            </tr>
            <tr>
              <td><strong>Home Value</strong></td>
              <td><i class="bi bi-x-circle text-danger"></i> Stagnant</td>
              <td><i class="bi bi-check-circle text-success"></i> Boosts curb appeal & resale</td>
            </tr>
            <tr>
              <td><strong>Warranty</strong></td>
              <td><i class="bi bi-x-circle text-danger"></i> Often none</td>
              <td><i class="bi bi-check-circle text-success"></i> Lifetime materials warranty</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="alert alert-info mt-4" role="alert">
        <i class="bi bi-megaphone"></i> <strong>Tip:</strong> Many utility & government rebates expire yearly — check now to maximize savings.
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="final-cta-section">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-3">See If You Qualify for Rebates & Free Quotes</h2>
            <p class="text-muted mb-0">Quick eligibility check — no obligation. Most homeowners complete it in under 60 seconds.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="https://qualitywindowsdirect.com/rbam40.aspx?utm_source=easyhomeservice&utm_medium=prelander&utm_campaign=windows#" class="btn btn-primary btn-lg cta-link">
              Get My Free Quote <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="text-center text-muted">
        <p class="mb-3">EasyHomeService is an independent affiliate partner connecting U.S. homeowners with certified window replacement specialists. Offers vary by location and availability. By clicking you will be redirected to our partner site for your quote.</p>
        <p class="mb-0">
          <a href="#" class="text-decoration-none text-muted fw-semibold">Privacy Policy</a> ·
          <a href="#" class="text-decoration-none text-muted fw-semibold">Terms & Conditions</a>
        </p>
      </div>
    </div>
  </footer>

  <div class="sticky-bottom-cta">
    <div class="sticky-inner">
      <div class="flex-grow-1">
        <div class="fw-bold mb-1">Limited spots — claim your rebate</div>
        <small class="text-white-50">Quick check • Free quotes • No obligation</small>
      </div>
      <a href="https://qualitywindowsdirect.com/rbam40.aspx?utm_source=easyhomeservice&utm_medium=prelander&utm_campaign=windows#" class="btn btn-primary cta-link">
        Get My Free Quote <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </div>

  <div class="modal fade" id="exitModal" tabindex="-1" aria-labelledby="exitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title fw-bold" id="exitModalLabel">Wait — Special Offer Before You Go!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="offer-highlight">
            <p class="offer-text">
              Buy One, Get One <span class="highlight">40% OFF</span><br>
              <span class="highlight">Plus, $200 Off</span> Your Entire Purchase!
            </p>
          </div>
          <p class="text-center mb-4">Limited-time bonus — claim this exclusive online-only offer when you check your free quote now.</p>

          <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="https://qualitywindowsdirect.com/rbam40.aspx?utm_source=easyhomeservice&utm_medium=prelander&utm_campaign=windows#" class="btn btn-primary btn-lg cta-link" data-bs-dismiss="modal">
              Claim This Offer & Get A Quote <i class="bi bi-arrow-right"></i>
            </a>
            <button type="button" class="btn btn-outline-dark btn-lg" data-bs-dismiss="modal">
              No thanks — continue
            </button>
          </div>

          <div class="form-check mt-4 text-center">
            <input class="form-check-input" type="checkbox" id="dontShowAgain">
            <label class="form-check-label text-muted small" for="dontShowAgain">
              Don't show this again for 7 days
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    const AFF_URL = 'https://qualitywindowsdirect.com/rbam40.aspx?utm_source=easyhomeservice&utm_medium=prelander&utm_campaign=windows#';

    document.querySelectorAll('.cta-link').forEach(link => {
      link.addEventListener('click', function(e) {
        console.log('CTA clicked:', new Date().toISOString());
      });
    });

    const STORAGE_KEY = 'ehs_exit_popup_dismissed';
    const DISMISS_DAYS = 7;

    function setDismissed() {
      const until = Date.now() + DISMISS_DAYS * 24 * 60 * 60 * 1000;
      localStorage.setItem(STORAGE_KEY, String(until));
    }

    function isDismissed() {
      const v = localStorage.getItem(STORAGE_KEY);
      if (!v) return false;
      return Date.now() < Number(v);
    }

    let exitIntentShown = false;
    const exitModal = new bootstrap.Modal(document.getElementById('exitModal'));

    function showExitIntent() {
      if (!exitIntentShown && !isDismissed()) {
        exitIntentShown = true;
        exitModal.show();
      }
    }

    document.addEventListener('mouseout', function(e) {
      if (e.clientY <= 0 && !exitIntentShown) {
        showExitIntent();
      }
    });

    document.addEventListener('visibilitychange', function() {
      if (document.visibilityState === 'hidden' && !exitIntentShown) {
        showExitIntent();
      }
    });

    document.getElementById('exitModal').addEventListener('hidden.bs.modal', function() {
      if (document.getElementById('dontShowAgain').checked) {
        setDismissed();
      }
    });

    let idleTimer;
    function startIdleTimer() {
      clearTimeout(idleTimer);
      idleTimer = setTimeout(function() {
        showExitIntent();
      }, 12000);
    }

    ['mousemove', 'touchstart', 'scroll', 'keydown'].forEach(evt => {
      document.addEventListener(evt, startIdleTimer, { passive: true });
    });
    startIdleTimer();

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    console.log('EasyHomeService Bootstrap 5.3 landing page loaded');
  </script>

</body>
</html>