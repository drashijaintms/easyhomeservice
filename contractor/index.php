<?php
// Handle form submission directly on this page to avoid Apache rewrite/405 errors on external endpoints
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['ehs_quote_submit']) || isset($_POST['name']))) {
    require_once __DIR__ . '/process-booking.php';
    exit;
}
?>
<?php include '../header.php';?>
<!-- Unique Stylesheet for Contractor Page -->
<link rel="stylesheet" href="css/contractor.css">

<!-- Unique Stylesheet for Contractor Page -->
<link rel="stylesheet" href="css/contractor.css">

<!-- HERO SECTION START -->
<section class="ehs-contractor-hero">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Content Column -->
            <div class="col-lg-7 col-md-12">
                <div class="ehs-hero-content">
                    <h1 class="ehs-hero-title">
                        Connect With<br>
                        Homeowners Ready<br>
                        <span class="ehs-highlight-green">to Start Their Projects</span>
                    </h1>

                    <p class="ehs-hero-desc">
                        Easy Home Service helps contractors connect with homeowners actively searching for roofing, remodeling, HVAC, solar, plumbing, and other home services across the U.S.
                    </p>

                    <a href="#get-leads" class="ehs-hero-btn">
                        Start Getting Exclusive Leads
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <!-- Feature checkmarks -->
                    <ul class="ehs-hero-features">
                        <li class="ehs-feature-item">
                            <img src="images/check-mark.png" alt="Check" class="ehs-hero-check-img">
                            <span>Exclusive Leads</span>
                        </li>
                        <li class="ehs-feature-item">
                            <img src="images/check-mark.png" alt="Check" class="ehs-hero-check-img">
                            <span>Real Homeowners</span>
                        </li>
                        <li class="ehs-feature-item">
                            <img src="images/check-mark.png" alt="Check" class="ehs-hero-check-img">
                            <span>Nationwide Coverage</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Floating Project Card Column -->
            <div class="col-lg-5 col-md-12">
                <div class="ehs-floating-card-wrapper">
                    <div class="ehs-project-card" id="ehsHeroProjectCard">
                        <!-- Top Icon & Info -->
                        <div class="ehs-card-header">
                            <div class="ehs-card-icon" id="ehsHeroCardIcon">
                                <i class="bi bi-house-door-fill"></i>
                            </div>
                            <div class="ehs-card-meta">
                                <span class="ehs-card-tag">New Project Request</span>
                                <h3 class="ehs-card-title" id="ehsHeroCardTitle">Roofing</h3>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="ehs-card-location">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span id="ehsHeroCardLocation">Dallas, TX</span>
                        </div>

                        <!-- Status Badge -->
                        <div class="ehs-card-badge">
                            <img src="images/check-mark.png" alt="Check" class="ehs-card-check-img">
                            <span>Ready to Start</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- HERO SECTION END -->

<!-- STATS / METRICS BANNER START -->
<section class="ehs-contractor-stats">
    <div class="container">
        <div class="ehs-stats-grid">
            
            <!-- Stat 1: 10,000+ Homeowners -->
            <div class="ehs-stat-box">
                <div class="ehs-stat-value" data-target="10000" data-format="comma" data-suffix="+">0</div>
                <div class="ehs-stat-label">Homeowners Connected</div>
            </div>

            <!-- Stat 2: 500+ Contractor Partners -->
            <div class="ehs-stat-box">
                <div class="ehs-stat-value" data-target="500" data-format="standard" data-suffix="+">0</div>
                <div class="ehs-stat-label">Contractor Partners</div>
            </div>

            <!-- Stat 3: Nationwide Lead Coverage -->
            <div class="ehs-stat-box">
                <div class="ehs-stat-icon ehs-stat-pulse-icon">
                    <img src="images/nationwide-lead-coverage.png" alt="Nationwide Lead Coverage">
                </div>
                <div class="ehs-stat-label">Nationwide Lead Coverage</div>
            </div>

            <!-- Stat 4: Fast Lead Delivery -->
            <div class="ehs-stat-box">
                <div class="ehs-stat-icon ehs-stat-pulse-icon">
                    <img src="images/fast-lead-delivery.png" alt="Fast Lead Delivery">
                </div>
                <div class="ehs-stat-label">Fast Lead Delivery</div>
            </div>

        </div>
    </div>
</section>
<!-- STATS / METRICS BANNER END -->

<!-- SECTION 2: TRUSTED BY CONTRACTORS ACROSS USA START -->
<section class="ehs-contractor-coverage">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left: Content & Badges Card -->
            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                <div class="ehs-coverage-content">
                    <h2 class="ehs-coverage-title">
                        Trusted by Service Provider<br>
                        Across the <span class="ehs-highlight-green">United States</span>
                    </h2>

                    <p class="ehs-coverage-desc">
                        We help home service professionals grow with high-intent homeowner leads built around real service needs. Connect with homeowners actively looking for local contractors, generate more qualified opportunities, book more estimates, and support consistent business growth. 
                    </p>

                    <a href="#get-quote" class="ehs-btn-quote">Get A Quote</a>

                    <!-- 4 Feature Badges Card -->
                    <div class="ehs-features-card">
                        
                        <!-- Feature 1: Verified Leads -->
                        <div class="ehs-feature-box">
                            <div class="ehs-feature-icon-circle">
                                <img src="images/sec2-icon1.png" alt="Verified Leads" class="ehs-feature-icon-img">
                            </div>
                            <h4 class="ehs-feature-box-title">Verified<br>Leads</h4>
                        </div>

                        <!-- Feature 2: Performance Driven -->
                        <div class="ehs-feature-box">
                            <div class="ehs-feature-icon-circle">
                                <img src="images/sec2-icon2.png" alt="Performance Driven" class="ehs-feature-icon-img">
                            </div>
                            <h4 class="ehs-feature-box-title">Performance<br>Driven</h4>
                        </div>

                        <!-- Feature 3: Contractor Focused -->
                        <div class="ehs-feature-box">
                            <div class="ehs-feature-icon-circle">
                                <img src="images/sec2-icon3.png" alt="Contractor Focused" class="ehs-feature-icon-img">
                            </div>
                            <h4 class="ehs-feature-box-title">Contractor<br>Focused</h4>
                        </div>

                        <!-- Feature 4: Dedicated Support -->
                        <div class="ehs-feature-box">
                            <div class="ehs-feature-icon-circle">
                                <img src="images/sec2-icon4.png" alt="Dedicated Support" class="ehs-feature-icon-img">
                            </div>
                            <h4 class="ehs-feature-box-title">Dedicated<br>Support</h4>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right: Get Quote Form -->
            <div class="col-lg-6 col-md-12" id="get-quote">
                <div class="ehs-quote-form-card">
                    <!-- Top Badge -->
                    <div class="ehs-form-badge-wrap text-center mb-3">
                        <div class="ehs-form-badge">
                            <span class="ehs-form-badge-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </span>
                            <span class="ehs-form-badge-text">Book a Call</span>
                        </div>
                    </div>

                    <form action="" method="POST" class="ehs-quote-form" id="ehsQuoteForm">
                        <input type="hidden" name="ehs_quote_submit" value="1">
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-sm-6 col-12">
                                <label class="ehs-form-label" for="quoteName">Full Name</label>
                                <input type="text" id="quoteName" name="name" class="form-control ehs-form-input" placeholder="Enter your name" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-sm-6 col-12">
                                <label class="ehs-form-label" for="quotePhone">Phone Number</label>
                                <input type="tel" id="quotePhone" name="phone" class="form-control ehs-form-input" placeholder="(555) 123-4567" required>
                            </div>

                            <!-- Business Email -->
                            <div class="col-sm-6 col-12">
                                <label class="ehs-form-label" for="quoteEmail">Business Email</label>
                                <input type="email" id="quoteEmail" name="email" class="form-control ehs-form-input" placeholder="you@company.com" required>
                            </div>

                            <!-- Company Name -->
                            <div class="col-sm-6 col-12">
                                <label class="ehs-form-label" for="quoteCompany">Company Name</label>
                                <input type="text" id="quoteCompany" name="company" class="form-control ehs-form-input" placeholder="Enter company name" required>
                            </div>

                            <!-- Zip Code -->
                            <div class="col-sm-6 col-12">
                                <label class="ehs-form-label" for="quoteZip">Zip Code</label>
                                <input type="text" id="quoteZip" name="zip" class="form-control ehs-form-input" placeholder="12345" required maxlength="5" pattern="[0-9]{5}" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);" title="Please enter a valid 5-digit US Zip Code">
                            </div>

                            <!-- Service Area / State -->
                            <div class="col-sm-6 col-12">
                                <label class="ehs-form-label" for="quoteState">Service Area / State</label>
                                <select id="quoteState" name="state" class="form-select ehs-form-select" required>
                                    <option value="" selected disabled>Select state</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>

                            <!-- Lead Type Interested In -->
                            <div class="col-12">
                                <label class="ehs-form-label" for="quoteLeadType">Lead Type Interested In</label>
                                  <select id="quoteLeadType" name="lead_type" class="form-select ehs-form-select" required>
                                    <option value="" selected disabled>Select lead type</option>
                                    <option value="Web Leads">Web Leads</option>
                                    <option value="Inbound Calls">Inbound Calls</option>
                                    <option value="Appointments">Appointments</option>
                                    <option value="All Leads & Calls">All of the above</option>
                                </select>
                            </div>

                            <!-- Authorization & Consent Checkbox -->
                            <div class="col-12">
                                <div class="form-check d-flex align-items-start gap-2 mt-1">
                                    <input class="form-check-input ehs-tcpa-checkbox" type="checkbox" id="ehsQuoteTcpa" name="consent" value="Yes" checked required>
                                    <label class="form-check-label ehs-tcpa-label" for="ehsQuoteTcpa">
                                        By clicking &ldquo;Agree and Submit&rdquo;, I confirm that I am authorized to submit this information on behalf of my business. I agree to the <a href="privacy-policy.php" target="_blank">Privacy Policy</a> and <a href="terms-and-conditions.php" target="_blank">Terms & Conditions</a> and consent to receive communications from Easy Home Service regarding contractor partnership opportunities, lead programs, services, account setup, and related business inquiries by phone, email, or text message. Message and data rates may apply. Consent to receive marketing communications is not a condition of entering into a partnership.
                                    </label>
                                </div>
                            </div>

                            <!-- Submission Error Alert (Hidden by default) -->
                            <div id="ehsFormAlert" class="col-12 d-none">
                                <div class="alert alert-danger py-2 px-3 mb-0" style="font-size: 0.88rem;" id="ehsFormAlertMessage"></div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn ehs-btn-quote-submit w-100" id="quoteSubmitBtn">Book a Call Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- SECTION 2: TRUSTED BY CONTRACTORS ACROSS USA END -->

<!-- SECTION 3: QUALITY LEADS BUILT FOR BETTER RESULTS START -->
<section class="ehs-contractor-quality-banner" id="quality-leads">
    <div class="ehs-quality-sticky-viewport">
        <div class="container">
            <div class="ehs-quality-content text-center">
                
                <!-- Section Header (Always 100% visible) -->
                <div class="ehs-quality-header-wrap">
                    <h2 class="ehs-quality-title">
                        Quality Leads Built for <span class="ehs-highlight-green">Better Results</span>
                    </h2>
                    <p class="ehs-quality-desc">
                        We understand that contractors need more than just traffic they need real opportunities. That's why we focus on delivering homeowner leads with stronger intent and better project potential.
                    </p>
                </div>
                
                <!-- Stacking Cards Stage -->
                <div class="ehs-quality-cards-stage">
                    
                    <!-- Card 1: High Demand Homeowners -->
                    <div class="ehs-quality-card-item" data-index="0">
                        <div class="ehs-quality-card ehs-card-bg-1">
                            <div class="ehs-quality-card-icon">
                                <img src="images/quality-leads/icon1.png" alt="High-Intent Homeowners" class="ehs-quality-card-icon-img">
                            </div>
                            <h3 class="ehs-quality-card-title">High-Intent Homeowners</h3>
                            <p class="ehs-quality-card-sub">
                                Connect with genuine homeowners actively searching for home improvement and repair services - not just clicks, impressions, or low-intent traffic. 
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: Targeted Campaigns -->
                    <div class="ehs-quality-card-item" data-index="1">
                        <div class="ehs-quality-card ehs-card-bg-2">
                            <div class="ehs-quality-card-icon">
                                <img src="images/quality-leads/icon2.png" alt="Targeted Campaigns" class="ehs-quality-card-icon-img">
                            </div>
                            <h3 class="ehs-quality-card-title">Targeted Campaigns</h3>
                            <p class="ehs-quality-card-sub">
                                Run focused campaigns across high-demand home service categories, including Roofing, Windows, Pest Control, Plumbing, HVAC, and more.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: Location Based -->
                    <div class="ehs-quality-card-item" data-index="2">
                        <div class="ehs-quality-card ehs-card-bg-3">
                            <div class="ehs-quality-card-icon">
                                <img src="images/quality-leads/icon3.png" alt="Location Based" class="ehs-quality-card-icon-img">
                            </div>
                            <h3 class="ehs-quality-card-title">Location Based</h3>
                            <p class="ehs-quality-card-sub">
                                Reach homeowners in the ZIP codes and service areas that matter most to your business. Our location-based targeting helps you focus on markets where you actively operate, connect with more relevant prospects.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4: Quality Filtering -->
                    <div class="ehs-quality-card-item" data-index="3">
                        <div class="ehs-quality-card ehs-card-bg-4">
                            <div class="ehs-quality-card-icon">
                                <img src="images/quality-leads/icon4.png" alt="Quality Filtering" class="ehs-quality-card-icon-img">
                            </div>
                            <h3 class="ehs-quality-card-title">Quality Filtering</h3>
                            <p class="ehs-quality-card-sub">
                                Every campaign is carefully filtered based on location, service requirements, homeowner intent, and your specific campaign criteria.
                            </p>
                        </div>
                    </div>

                    <!-- Card 5: Performance Focused -->
                    <div class="ehs-quality-card-item" data-index="4">
                        <div class="ehs-quality-card ehs-card-bg-5">
                            <div class="ehs-quality-card-icon">
                                <img src="images/quality-leads/icon5.png" alt="Performance Focused" class="ehs-quality-card-icon-img">
                            </div>
                            <h3 class="ehs-quality-card-title">Performance Focused</h3>
                            <p class="ehs-quality-card-sub">
                                Our campaigns are continuously optimized to improve lead quality, conversion potential, and overall campaign performance.
                            </p>
                        </div>
                    </div>

                    <!-- Card 6: Fast Delivery -->
                    <div class="ehs-quality-card-item" data-index="5">
                        <div class="ehs-quality-card ehs-card-bg-6">
                            <div class="ehs-quality-card-icon">
                                <img src="images/quality-leads/icon6.png" alt="Fast Delivery" class="ehs-quality-card-icon-img">
                            </div>
                            <h3 class="ehs-quality-card-title">Fast Delivery</h3>
                            <p class="ehs-quality-card-sub">
                                Qualified leads are delivered in real time, giving your team the opportunity to connect with homeowners while their interest is still high.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- CTA Button (Always visible) -->
                <div class="ehs-quality-btn-wrap">
                    <a href="#partner" class="ehs-quality-btn">
                        <span>Become a Partner</span>
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- SECTION 3: QUALITY LEADS BUILT FOR BETTER RESULTS END -->

<!-- SECTION 4: EVERY PROJECT STARTS WITH A HOMEOWNER LOOKING FOR HELP START -->
<section class="ehs-contractor-journey">
    <div class="ehs-journey-decor-ring"></div>
    <div class="container">
        
        <!-- Top Intro Row: Title + Visual -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0 text-start">
                <h2 class="ehs-journey-title">
                    Every Project Starts With<br>
                    <span class="ehs-highlight-green">A Homeowner Looking For Help</span>
                </h2>
                <p class="ehs-journey-desc">
                    From the first search to the final connection, we help homeowners find the right solution and help your business get the opportunity to earn their trust.
                </p>
            </div>
            
            <div class="col-lg-5 col-md-12">
                <div class="ehs-journey-visual-wrapper">
                    <!-- Floating Speech Bubble -->
                    <div class="ehs-speech-bubble" id="ehsJourneySpeechBubble">
                        <div class="ehs-speech-bubble-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <div class="ehs-speech-bubble-text">
                            I need help with
                            <span>my roof repair</span>
                        </div>
                        <span id="ehsPointerTip" class="ehs-pointer-tip-anchor"></span>
                    </div>

                    <!-- Person Image on Sofa -->
                    <img src="images/step-person.png" alt="Homeowner looking for home service help" class="ehs-journey-person-img img-fluid">
                </div>
            </div>
        </div>

        <!-- Connecting Line from Speech Bubble to Step 04 Circle -->
        <svg class="ehs-speech-to-step-connector" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <defs>
                <filter id="ehsGlowDot" x="-100%" y="-100%" width="300%" height="300%">
                    <feGaussianBlur stdDeviation="3.5" result="blur" />
                    <feMerge>
                        <feMergeNode in="blur" />
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>
                <radialGradient id="ehsDotHalo" cx="50%" cy="50%" r="50%">
                    <stop offset="0%" stop-color="#86efac" stop-opacity="0.85" />
                    <stop offset="60%" stop-color="#bbf7d0" stop-opacity="0.3" />
                    <stop offset="100%" stop-color="#86efac" stop-opacity="0" />
                </radialGradient>
            </defs>
            <!-- Background subtle glow trail -->
            <path id="ehsConnectorPathGlow" d="" fill="none" />
            <!-- Main light dashed line -->
            <path id="ehsConnectorPath" d="" fill="none" />
            
            <!-- 5 Glowing Green Nodes Along Diagonal Curved Path -->
            <g id="ehsNodeStart" class="ehs-connector-node">
                <circle id="ehsHaloStart" cx="-100" cy="-100" r="9" fill="url(#ehsDotHalo)" opacity="0.75"/>
                <circle id="ehsDotStart" cx="-100" cy="-100" r="3.8" fill="#86efac" filter="url(#ehsGlowDot)"/>
            </g>
            <g id="ehsNode1" class="ehs-connector-node">
                <circle id="ehsHalo1" cx="-100" cy="-100" r="9" fill="url(#ehsDotHalo)" opacity="0.75"/>
                <circle id="ehsDot1" cx="-100" cy="-100" r="3.8" fill="#86efac" filter="url(#ehsGlowDot)"/>
            </g>
            <g id="ehsNode2" class="ehs-connector-node">
                <circle id="ehsHalo2" cx="-100" cy="-100" r="9" fill="url(#ehsDotHalo)" opacity="0.75"/>
                <circle id="ehsDot2" cx="-100" cy="-100" r="3.8" fill="#86efac" filter="url(#ehsGlowDot)"/>
            </g>
            <g id="ehsNode3" class="ehs-connector-node">
                <circle id="ehsHalo3" cx="-100" cy="-100" r="9" fill="url(#ehsDotHalo)" opacity="0.75"/>
                <circle id="ehsDot3" cx="-100" cy="-100" r="3.8" fill="#86efac" filter="url(#ehsGlowDot)"/>
            </g>
            <g id="ehsNodeEnd" class="ehs-connector-node">
                <circle id="ehsHaloEnd" cx="-100" cy="-100" r="9" fill="url(#ehsDotHalo)" opacity="0.75"/>
                <circle id="ehsDotEnd" cx="-100" cy="-100" r="3.8" fill="#86efac" filter="url(#ehsGlowDot)"/>
            </g>
        </svg>

        <!-- Middle 5-Step Process Flow with Center Hub -->
        <div class="ehs-steps-flow">
            
            <!-- Step 01: Homeowner Notices A Need -->
            <div class="ehs-step-card">
                <div class="ehs-step-img-wrapper">
                    <span class="ehs-step-num">01</span>
                    <img src="images/step-1.png" alt="Homeowner Notices A Need" class="ehs-step-img">
                </div>
                <h4 class="ehs-step-title">Homeowner<br>Notices A Need</h4>
                <p class="ehs-step-desc">A repair, upgrade, or improvement is needed.</p>
            </div>

            <!-- Step 02: Searches For Solutions -->
            <div class="ehs-step-card">
                <div class="ehs-step-img-wrapper">
                    <span class="ehs-step-num">02</span>
                    <img src="images/step-2.png" alt="Searches For Solutions" class="ehs-step-img">
                </div>
                <h4 class="ehs-step-title">Searches For<br>Solutions</h4>
                <p class="ehs-step-desc">They research options and compare trusted professionals online.</p>
            </div>

            <!-- Step 03: Requests Information -->
            <div class="ehs-step-card">
                <div class="ehs-step-img-wrapper">
                    <span class="ehs-step-num">03</span>
                    <img src="images/step-3.png" alt="Requests Information" class="ehs-step-img">
                </div>
                <h4 class="ehs-step-title">Requests<br>Information</h4>
                <p class="ehs-step-desc">They submit project details to get matched with qualified pros.</p>
            </div>

            <!-- Center Hub: Easy Home Service Verification -->
            <div class="ehs-center-hub-card">
                <div class="ehs-hub-logo-circle">
                    <div class="ehs-hub-inner-circle">
                        <img src="https://easyhomeservice.com/images/easyhomeservice.svg" alt="Easy Home Service" class="ehs-hub-logo-img">
                    </div>
                </div>
                <div class="ehs-hub-checklist-box">
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Verifies Information</li>
                        <li><i class="fa-solid fa-check"></i> Matches by Location</li>
                        <li><i class="fa-solid fa-check"></i> Connects with Pros</li>
                        <li><i class="fa-solid fa-check"></i> Quality Opportunities</li>
                    </ul>
                </div>
            </div>

            <!-- Step 04: Connects With A Professional -->
            <div class="ehs-step-card" id="ehsStep04Card">
                <div class="ehs-step-img-wrapper">
                    <span class="ehs-step-num">04</span>
                    <img src="images/step-4.png" alt="Connects With A Professional" class="ehs-step-img">
                </div>
                <h4 class="ehs-step-title">Connects With<br>A Professional</h4>
                <p class="ehs-step-desc">We introduce them to a qualified service provider.</p>
            </div>

            <!-- Step 05: Projects Gets Completed -->
            <div class="ehs-step-card">
                <div class="ehs-step-img-wrapper">
                    <span class="ehs-step-num">05</span>
                    <img src="images/step-5.png" alt="Projects Gets Completed" class="ehs-step-img">
                </div>
                <h4 class="ehs-step-title">Projects Gets<br>Completed</h4>
                <p class="ehs-step-desc">The homeowner gets the help they need and their project is complete.</p>
            </div>

        </div>

        <!-- Bottom Highlight Opportunity Box -->
        <div class="ehs-opportunity-box">
            
            <!-- Lead Callout with Calendar Icon -->
            <div class="ehs-opportunity-lead">
                <div class="ehs-opportunity-lead-icon">
                    <img src="images/step-icon-1.png" alt="Schedule Icon" class="ehs-opp-icon-img">
                </div>
                <h4 class="ehs-opportunity-lead-text">
                    Your Next Opportunity Starts Long Before the Estimate Appointment.
                </h4>
            </div>

            <!-- 3 Opportunity Benefits -->
            <div class="ehs-opportunity-features">
                
                <!-- Benefit 1 -->
                <div class="ehs-opp-item">
                    <div class="ehs-opp-icon-circle">
                        <img src="images/step-icon-2.png" alt="High Intent Homeowners" class="ehs-opp-icon-img">
                    </div>
                    <div class="ehs-opp-text">
                        <h5>High Intent Homeowners</h5>
                        <p>Connect with people actively looking for your services.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="ehs-opp-item">
                    <div class="ehs-opp-icon-circle">
                        <img src="images/step-icon-3.png" alt="Qualified Opportunities" class="ehs-opp-icon-img">
                    </div>
                    <div class="ehs-opp-text">
                        <h5>Qualified Opportunities</h5>
                        <p>Receive opportunities that match your services and areas.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="ehs-opp-item">
                    <div class="ehs-opp-icon-circle">
                        <img src="images/step-icon-4.png" alt="Grow Your Business" class="ehs-opp-icon-img">
                    </div>
                    <div class="ehs-opp-text">
                        <h5>Grow Your Business</h5>
                        <p>Build relationships. Earn trust. Win more projects.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- SECTION 4: EVERY PROJECT STARTS WITH A HOMEOWNER LOOKING FOR HELP END -->

<!-- SECTION 5: HOME SERVICES WE GENERATE LEADS FOR START -->
<section class="ehs-contractor-services">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left: Content & 12 Services Grid -->
            <div class="col-lg-7 col-md-12">
                <div class="ehs-services-content">
                    <h2 class="ehs-services-title">
                        Home Services We Generate<br>
                        <span class="ehs-highlight-green">Leads For</span>
                    </h2>

                    <div class="ehs-services-grid">
                        
                        <!-- Row 1 -->
                        <!-- 1. Roofing -->
                        <a href="#leads-roofing" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/roofing.png" alt="Roofing" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Roofing</span>
                        </a>

                        <!-- 2. Flooring -->
                        <a href="#leads-flooring" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/flooring.png" alt="Flooring" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Flooring</span>
                        </a>

                        <!-- Row 2 -->
                        <!-- 3. HVAC -->
                        <a href="#leads-hvac" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/hvac.png" alt="HVAC" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">HVAC</span>
                        </a>

                        <!-- 4. Handyman -->
                        <a href="#leads-handyman" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/plumbing.png" alt="Handyman" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Handyman</span>
                        </a>

                        <!-- Row 3 -->
                        <!-- 5. Solar Installation -->
                        <a href="#leads-solar" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/solar.png" alt="Solar Installation" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Solar Installation</span>
                        </a>

                        <!-- 6. Siding -->
                        <a href="#leads-siding" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/siding.png" alt="Siding" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Siding</span>
                        </a>

                        <!-- Row 4 -->
                        <!-- 7. Kitchen Remodeling -->
                        <a href="#leads-kitchen" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/kitchen.png" alt="Kitchen Remodeling" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Kitchen Remodeling</span>
                        </a>

                        <!-- 8. Windows & Doors -->
                        <a href="#leads-windows" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/windows.png" alt="Windows & Doors" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Windows & Doors</span>
                        </a>

                        <!-- Row 5 -->
                        <!-- 9. Bathroom Remodeling -->
                        <a href="#leads-bathroom" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/bathtub.png" alt="Bathroom Remodeling" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Bathroom Remodeling</span>
                        </a>

                        <!-- 10. Home Security -->
                        <a href="#leads-security" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/foundation.png" alt="Home Security" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Home Security</span>
                        </a>

                        <!-- Row 6 -->
                        <!-- 11. Appliance Repair -->
                        <a href="#leads-appliance" class="ehs-service-pill">
                            <div class="ehs-service-icon-box">
                                <img src="images/services/bathtub.png" alt="Appliance Repair" class="ehs-service-icon-img">
                            </div>
                            <span class="ehs-service-name">Appliance Repair</span>
                        </a>

                        <!-- 12. View More -->
                        <a href="#get-quote" class="ehs-service-pill ehs-service-pill-more">
                            <div class="ehs-service-icon-box">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2b4c7e" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                            <span class="ehs-service-name">View More</span>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Right: Suburban House Photo (Handled by CSS background) -->
            <div class="col-lg-5 d-none d-lg-block"></div>

        </div>
    </div>
</section>
<!-- SECTION 5: HOME SERVICES WE GENERATE LEADS FOR END -->

<!-- SECTION 6: TOP-PERFORMING VERTICALS START -->
<section class="ehs-contractor-top-verticals">
    <div class="container">
        <h3 class="ehs-top-verticals-title">The Top-Performing Verticals Where We Generating The High Volume</h3>
        
        <div class="ehs-top-verticals-list">
            
            <!-- 1. Roofing -->
            <a href="#leads-roofing" class="ehs-vertical-card">
                <div class="ehs-vertical-icon">
                    <img src="images/services/roofing.png" alt="Roofing" class="ehs-vertical-icon-img">
                </div>
                <span class="ehs-vertical-text">Roofing</span>
            </a>

            <!-- 2. HVAC -->
            <a href="#leads-hvac" class="ehs-vertical-card">
                <div class="ehs-vertical-icon">
                    <img src="images/services/hvac.png" alt="HVAC" class="ehs-vertical-icon-img">
                </div>
                <span class="ehs-vertical-text">HVAC</span>
            </a>

            <!-- 3. Plumbing -->
            <a href="#leads-plumbing" class="ehs-vertical-card">
                <div class="ehs-vertical-icon">
                    <img src="images/services/plumbing.png" alt="Plumbing" class="ehs-vertical-icon-img">
                </div>
                <span class="ehs-vertical-text">Plumbing</span>
            </a>

            <!-- 4. Gutters -->
            <a href="#leads-gutters" class="ehs-vertical-card">
                <div class="ehs-vertical-icon">
                    <img src="images/services/gutter.png" alt="Gutters" class="ehs-vertical-icon-img">
                </div>
                <span class="ehs-vertical-text">Gutters</span>
            </a>

            <!-- 5. Bathroom -->
            <a href="#leads-bathroom" class="ehs-vertical-card">
                <div class="ehs-vertical-icon">
                    <img src="images/services/bathtub.png" alt="Bathroom" class="ehs-vertical-icon-img">
                </div>
                <span class="ehs-vertical-text">Bathroom</span>
            </a>

            <!-- 6. Water Damage -->
            <a href="#leads-waterdamage" class="ehs-vertical-card">
                <div class="ehs-vertical-icon">
                    <img src="images/services/waterdamage.png" alt="Water Damage" class="ehs-vertical-icon-img">
                </div>
                <span class="ehs-vertical-text">Water Damage</span>
            </a>

            <!-- 7. Pest control -->
            <a href="#leads-pestcontrol" class="ehs-vertical-card">
                <div class="ehs-vertical-icon">
                    <img src="images/services/pest-control.png" alt="Pest control" class="ehs-vertical-icon-img">
                </div>
                <span class="ehs-vertical-text">Pest control</span>
            </a>

        </div>
    </div>
</section>
<!-- SECTION 6: TOP-PERFORMING VERTICALS END -->

<!-- SECTION 7: THE U.S. HOME IMPROVEMENT MARKET CONTINUES TO GROW START -->
<section class="ehs-contractor-market-growth">
    <div class="ehs-market-rings"></div>
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left: Market Growth Content -->
            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                <div class="ehs-market-left-content">
                    <h2 class="ehs-market-title">
                        The U.S. Home Improvement<br>
                        Market <span class="ehs-highlight-green">Continues to Grow</span>
                    </h2>

                    <div class="ehs-market-desc-list">
                        <p>
                            Homeowners across the United States are investing more in remodeling, repairs, upgrades, and energy-efficient home improvements than ever before.
                        </p>
                        <p>
                            From roofing and HVAC to kitchen remodeling, solar, plumbing, and exterior upgrades, demand for trusted contractors continues to rise in local markets nationwide.
                        </p>
                        <p>
                            Easy Home Service helps contractors connect with homeowners actively searching for reliable home service professionals in their area.
                        </p>
                    </div>

                    <a href="#explore-opportunities" class="ehs-market-btn">
                        Explore Contractor Opportunities
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right: USA Green Vector Map & 3 Stat Box -->
            <div class="col-lg-6 col-md-12">
                <div class="ehs-market-right-content">
                    
                    <!-- Green USA State Map Graphic with Growth Path -->
                    <div class="ehs-market-map-graphic">
                        <img src="images/mapgif.gif" alt="US Home Improvement Market Map" class="ehs-market-map-img">
                    </div>

                    <!-- 3 Stats Metric Card -->
                    <div class="ehs-market-stats-card">
                        
                        <!-- Stat 1 -->
                        <div class="ehs-market-stat-item">
                            <div class="ehs-market-stat-num" data-target="7.2" data-decimals="1" data-suffix="%">0.0%</div>
                            <p class="ehs-market-stat-label">Annual Market<br>Growth</p>
                        </div>

                        <!-- Stat 2 -->
                        <div class="ehs-market-stat-item">
                            <div class="ehs-market-stat-num" data-target="78" data-decimals="0" data-suffix="%">0%</div>
                            <p class="ehs-market-stat-label">Homeowners Plan<br>Projects</p>
                        </div>

                        <!-- Stat 3 -->
                        <div class="ehs-market-stat-item">
                            <div class="ehs-market-stat-num" data-target="4.8" data-decimals="1" data-suffix="x">0.0x</div>
                            <p class="ehs-market-stat-label">Higher Demand for<br>Home Services</p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- SECTION 7: THE U.S. HOME IMPROVEMENT MARKET CONTINUES TO GROW END -->

<!-- SECTION 8: WHAT MAKES OUR LEADS BETTER START -->
<section class="ehs-contractor-better-leads">
    <div class="container">
        
        <!-- Section Heading -->
        <h2 class="ehs-better-leads-title text-center">
            What Makes Our <span class="ehs-highlight-green">Leads Better</span>
        </h2>

        <!-- Centered Timeline Grid -->
        <div class="ehs-better-leads-timeline-wrap">
            <div class="ehs-better-leads-timeline">
                
                <!-- Central Spine -->
                <div class="ehs-timeline-spine"></div>

                <!-- Row 1 -->
                <div class="ehs-timeline-row">
                    <!-- Left Item -->
                    <div class="ehs-timeline-col ehs-col-left">
                        <div class="ehs-lead-pill">
                            <span>Homeowner requests backed by genuine project intent</span>
                        </div>
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 1.png" alt="Genuine Project Intent" class="ehs-lead-icon-img">
                        </div>
                    </div>

                    <!-- Center Node Dot -->
                    <div class="ehs-timeline-node"></div>

                    <!-- Right Item -->
                    <div class="ehs-timeline-col ehs-col-right">
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 5.png" alt="Built for Service Providers" class="ehs-lead-icon-img">
                        </div>
                        <div class="ehs-lead-pill">
                            <span>Home improvement campaigns built specifically for service providers</span>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="ehs-timeline-row">
                    <!-- Left Item -->
                    <div class="ehs-timeline-col ehs-col-left">
                        <div class="ehs-lead-pill">
                            <span>Location-based lead matching aligned with your service area</span>
                        </div>
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 2.png" alt="Location-based Lead Matching" class="ehs-lead-icon-img">
                        </div>
                    </div>

                    <!-- Center Node Dot -->
                    <div class="ehs-timeline-node"></div>

                    <!-- Right Item -->
                    <div class="ehs-timeline-col ehs-col-right">
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 6.png" alt="Quality Filtering" class="ehs-lead-icon-img">
                        </div>
                        <div class="ehs-lead-pill">
                            <span>Quality filtering supported by spam protection measures</span>
                        </div>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="ehs-timeline-row">
                    <!-- Left Item -->
                    <div class="ehs-timeline-col ehs-col-left">
                        <div class="ehs-lead-pill">
                            <span>Performance-focused lead generation strategies</span>
                        </div>
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 3.png" alt="Performance-focused Strategies" class="ehs-lead-icon-img">
                        </div>
                    </div>

                    <!-- Center Node Dot -->
                    <div class="ehs-timeline-node"></div>

                    <!-- Right Item -->
                    <div class="ehs-timeline-col ehs-col-right">
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 7.png" alt="Faster Lead Delivery" class="ehs-lead-icon-img">
                        </div>
                        <div class="ehs-lead-pill">
                            <span>Faster lead delivery to support quicker customer responses</span>
                        </div>
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="ehs-timeline-row">
                    <!-- Left Item -->
                    <div class="ehs-timeline-col ehs-col-left">
                        <div class="ehs-lead-pill">
                            <span>Opportunities tailored to your services and target market</span>
                        </div>
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 4.png" alt="Tailored Opportunities" class="ehs-lead-icon-img">
                        </div>
                    </div>

                    <!-- Center Node Dot -->
                    <div class="ehs-timeline-node"></div>

                    <!-- Right Item -->
                    <div class="ehs-timeline-col ehs-col-right">
                        <div class="ehs-lead-icon-box">
                            <img src="images/leads-better-1/icon 8.png" alt="Book More Jobs" class="ehs-lead-icon-img">
                        </div>
                        <div class="ehs-lead-pill">
                            <span>Designed to help service providers book more local jobs</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- SECTION 8: WHAT MAKES OUR LEADS BETTER END -->



<!-- SECTION 10: OUR LATEST BLOG POSTS START -->
<section class="ehs-contractor-blogs">
    <div class="ehs-blog-decor-ring"></div>
    <div class="container">
        
        <!-- Blog Section Header -->
        <div class="ehs-blog-header-row">
            <div class="ehs-blog-header-left">
                <h2 class="ehs-blog-title">
                    Our Latest Blog <span class="ehs-highlight-green">Posts</span>
                </h2>
                <p class="ehs-blog-subtitle">Contractor Growth & Marketing Resources</p>
            </div>
        </div>

        <!-- 3 Equal Blog Cards Row Matching Design -->
        <div class="row g-4">
            
            <!-- Blog Card 1 -->
            <div class="col-lg-4 col-md-6">
                <a href="#blog-1" class="ehs-blog-card">
                    <div class="ehs-blog-img-box">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=600&q=80" alt="How Contractors Can Generate More Local Leads">
                    </div>
                    <span class="ehs-blog-date">18-05-2026</span>
                    <h3 class="ehs-blog-card-title">How Contractors Can Generate More Local Leads</h3>
                    <p class="ehs-blog-card-excerpt">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                    </p>
                </a>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-lg-4 col-md-6">
                <a href="#blog-2" class="ehs-blog-card">
                    <div class="ehs-blog-img-box">
                        <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?auto=format&fit=crop&w=600&q=80" alt="Best Strategies for Growing a Roofing Business">
                    </div>
                    <span class="ehs-blog-date">18-05-2026</span>
                    <h3 class="ehs-blog-card-title">Best Strategies for Growing a Roofing Business</h3>
                    <p class="ehs-blog-card-excerpt">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                    </p>
                </a>
            </div>

            <!-- Blog Card 3 -->
            <div class="col-lg-4 col-md-6">
                <a href="#blog-3" class="ehs-blog-card">
                    <div class="ehs-blog-img-box">
                        <img src="https://images.unsplash.com/photo-1505798577917-a65157d3320a?auto=format&fit=crop&w=600&q=80" alt="Best Strategies for Growing a Roofing Business">
                    </div>
                    <span class="ehs-blog-date">18-05-2026</span>
                    <h3 class="ehs-blog-card-title">Best Strategies for Growing a Roofing Business</h3>
                    <p class="ehs-blog-card-excerpt">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                    </p>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- SECTION 10: OUR LATEST BLOG POSTS END -->

<!-- SECTION 11: TESTIMONIALS & READY TO GROW CTA START -->
<section class="ehs-contractor-testimonials-cta">

    <div class="container">
        
        <!-- Section Title -->
        <h2 class="ehs-testimonial-title">Trusted by Home Service Professionals </h2>

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
                    <div class="ehs-test-slide">
                        <div class="ehs-test-card-container">
                            <div class="ehs-test-header-bar">
                                <div class="ehs-test-avatar-outer">
                                    <div class="ehs-test-avatar-glow">
                                        <img src="images/testimonials/jessica-l.png" alt="Jessica L." class="ehs-test-avatar-photo">
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
                                    The lead quality has been impressive. We’re receiving inquiries from homeowners who are genuinely looking for roofing services, which has helped our team book more appointments.
                                </p>
                                <div class="ehs-test-bottom-row">
                                    <div class="ehs-test-meta">
                                        <h4 class="ehs-test-meta-name">Jessica L.,</h4>
                                        <p class="ehs-test-meta-role">Roofing Contractor, Texas</p>
                                    </div>
                                    <div class="ehs-test-quotes-mark">
                                        <svg viewBox="0 0 48 38" width="46" height="36" fill="#38b763">
                                            <path d="M0 21.6C0 9.6 7.2 2.4 19.2 0l2.4 4.8C14.4 7.2 12 12 12 16.8h7.2V36H0V21.6zm26.4 0C26.4 9.6 33.6 2.4 45.6 0l2.4 4.8C40.8 7.2 38.4 12 38.4 16.8H45.6V36H26.4V21.6z"/>
                                        </svg>
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
                                        <img src="images/testimonials/chris-d.png" alt="Chris D." class="ehs-test-avatar-photo">
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
                                    Easy Home Service has helped us reach homeowners in the areas we actually serve. The leads are relevant, and the quick delivery makes it easier for our team to follow up.
                                </p>
                                <div class="ehs-test-bottom-row">
                                    <div class="ehs-test-meta">
                                        <h4 class="ehs-test-meta-name">Chris D.,</h4>
                                        <p class="ehs-test-meta-role">HVAC Contractor, Florida</p>
                                    </div>
                                    <div class="ehs-test-quotes-mark">
                                        <svg viewBox="0 0 48 38" width="46" height="36" fill="#38b763">
                                            <path d="M0 21.6C0 9.6 7.2 2.4 19.2 0l2.4 4.8C14.4 7.2 12 12 12 16.8h7.2V36H0V21.6zm26.4 0C26.4 9.6 33.6 2.4 45.6 0l2.4 4.8C40.8 7.2 38.4 12 38.4 16.8H45.6V36H26.4V21.6z"/>
                                        </svg>
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
                                        <img src="images/testimonials/emily-c.png" alt="Emily C." class="ehs-test-avatar-photo">
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
                                   We like the consistency and quality of the opportunities we receive. The leads are matched to our service area, which saves our sales team a lot of time.
                                </p>
                                <div class="ehs-test-bottom-row">
                                    <div class="ehs-test-meta">
                                        <h4 class="ehs-test-meta-name">Emily C.,</h4>
                                        <p class="ehs-test-meta-role">Plumbing Contractor, California</p>
                                    </div>
                                    <div class="ehs-test-quotes-mark">
                                        <svg viewBox="0 0 48 38" width="46" height="36" fill="#38b763">
                                            <path d="M0 21.6C0 9.6 7.2 2.4 19.2 0l2.4 4.8C14.4 7.2 12 12 12 16.8h7.2V36H0V21.6zm26.4 0C26.4 9.6 33.6 2.4 45.6 0l2.4 4.8C40.8 7.2 38.4 12 38.4 16.8H45.6V36H26.4V21.6z"/>
                                        </svg>
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
                                        <img src="images/testimonials/ryan-t.png" alt="Ryan T." class="ehs-test-avatar-photo">
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
                                    The biggest difference for us is lead intent. We’re connecting with homeowners who are actively looking for help instead of just browsing online.
                                </p>
                                <div class="ehs-test-bottom-row">
                                    <div class="ehs-test-meta">
                                        <h4 class="ehs-test-meta-name">Ryan T.,</h4>
                                        <p class="ehs-test-meta-role">Home Improvement Contractor, Arizona</p>
                                    </div>
                                    <div class="ehs-test-quotes-mark">
                                        <svg viewBox="0 0 48 38" width="46" height="36" fill="#38b763">
                                            <path d="M0 21.6C0 9.6 7.2 2.4 19.2 0l2.4 4.8C14.4 7.2 12 12 12 16.8h7.2V36H0V21.6zm26.4 0C26.4 9.6 33.6 2.4 45.6 0l2.4 4.8C40.8 7.2 38.4 12 38.4 16.8H45.6V36H26.4V21.6z"/>
                                        </svg>
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
                                        <img src="images/testimonials/alex-p.png" alt="Alex P." class="ehs-test-avatar-photo">
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
                                    The location-based targeting has been a big advantage for our business. We can focus on the ZIP codes and markets where our team is ready to take on new projects.
                                </p>
                                <div class="ehs-test-bottom-row">
                                    <div class="ehs-test-meta">
                                        <h4 class="ehs-test-meta-name">Alex P.,</h4>
                                        <p class="ehs-test-meta-role">Roofing Contractor, North Carolina</p>
                                    </div>
                                    <div class="ehs-test-quotes-mark">
                                        <svg viewBox="0 0 48 38" width="46" height="36" fill="#38b763">
                                            <path d="M0 21.6C0 9.6 7.2 2.4 19.2 0l2.4 4.8C14.4 7.2 12 12 12 16.8h7.2V36H0V21.6zm26.4 0C26.4 9.6 33.6 2.4 45.6 0l2.4 4.8C40.8 7.2 38.4 12 38.4 16.8H45.6V36H26.4V21.6z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="ehs-test-slide">
                        <div class="ehs-test-card-container">
                            <div class="ehs-test-header-bar">
                                <div class="ehs-test-avatar-outer">
                                    <div class="ehs-test-avatar-glow">
                                        <img src="images/testimonials/kevin-s.png" alt="Kevin S." class="ehs-test-avatar-photo">
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
                                    We’ve been able to keep our sales team supplied with new homeowner opportunities. The lead delivery is fast, and the process is straightforward.
                                </p>
                                <div class="ehs-test-bottom-row">
                                    <div class="ehs-test-meta">
                                        <h4 class="ehs-test-meta-name">Kevin S.,</h4>
                                        <p class="ehs-test-meta-role">HVAC Specialist, Georgia</p>
                                    </div>
                                    <div class="ehs-test-quotes-mark">
                                        <svg viewBox="0 0 48 38" width="46" height="36" fill="#38b763">
                                            <path d="M0 21.6C0 9.6 7.2 2.4 19.2 0l2.4 4.8C14.4 7.2 12 12 12 16.8h7.2V36H0V21.6zm26.4 0C26.4 9.6 33.6 2.4 45.6 0l2.4 4.8C40.8 7.2 38.4 12 38.4 16.8H45.6V36H26.4V21.6z"/>
                                        </svg>
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

        <!-- Bottom CTA Banner: Ready to Grow Your Contracting Business? -->
        <div class="ehs-grow-banner-card">
            <div class="row align-items-center">
                
                <!-- Left: Heading & Description -->
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 text-start">
                    <h3 class="ehs-grow-banner-title">Ready to Grow Your<br>Contracting Business?</h3>
                    <p class="ehs-grow-banner-desc">
                        Partner with <span>Easy Home Service</span> and connect with homeowners actively searching for trusted local contractors.
                    </p>
                </div>

                <!-- Right: Buttons, Chart Icon & Tagline -->
                <div class="col-lg-6 col-md-12">
                    <div class="ehs-grow-actions-top">
                        
                        <!-- Button 1 -->
                        <a href="#become-a-partner" class="ehs-btn-grow-partner">
                            Become a Contractor Partner
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <!-- Button 2 -->
                        <a href="#speak-with-team" class="ehs-btn-grow-speak">
                            Speak With Our Team
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <!-- Chart Icon -->
                        <div class="ehs-grow-chart-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>

                    </div>

                    <div class="ehs-grow-divider"></div>

                    <p class="ehs-grow-tagline">
                        More leads. More estimates. More opportunities to grow.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- SECTION 11: TESTIMONIALS & READY TO GROW CTA END -->

<!-- SECTION 12: STATES WE SERVE START -->
<section class="ehs-contractor-states-served">
    <div class="container">
        <h2 class="ehs-states-title">States We Serve</h2>
        <p class="ehs-states-desc">
            Wherever you are, we are closer than you think
        </p>

        <!-- States Grid with Map Background using Bootstrap Row & Col -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10">
                <div class="ehs-states-wrapper">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
                        <!-- Column 1: Alabama - Georgia -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Alabama</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Alaska</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Arizona</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Arkansas</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">California</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Colorado</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Connecticut</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Delaware</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Florida</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Georgia</span>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2: Hawaii - Maryland -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Hawaii</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Idaho</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Illinois</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Indiana</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Iowa</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Kansas</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Kentucky</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Louisiana</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Maine</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Maryland</span>
                                </div>
                            </div>
                        </div>

                        <!-- Column 3: Massachusetts - New Jersey -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Massachusetts</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Michigan</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Minnesota</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Mississippi</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Missouri</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Montana</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Nebraska</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Nevada</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">New Hampshire</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">New Jersey</span>
                                </div>
                            </div>
                        </div>

                        <!-- Column 4: New Mexico - South Carolina -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">New Mexico</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">New York</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">North Carolina</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">North Dakota</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Ohio</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Oklahoma</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Oregon</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Pennsylvania</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Rhode Island</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">South Carolina</span>
                                </div>
                            </div>
                        </div>

                        <!-- Column 5: South Dakota - Wyoming -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">South Dakota</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Tennessee</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Texas</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Utah</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Vermont</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Virginia</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Washington</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">West Virginia</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Wisconsin</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Wyoming</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION 12: STATES WE SERVE END -->

<!-- SECTION 13: CITIES WE SERVE START -->
<section class="ehs-contractor-cities-served">
    <div class="container">
        <h2 class="ehs-cities-title">We work in 500+ Cities</h2>
        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10">
                <div class="ehs-cities-card">
                    <div class="row row-cols-2 row-cols-md-4 g-4 ehs-cities-grid">
                        <!-- Column 1 -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">New York</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Los Angeles</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Chicago</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Houston</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Phoenix</span>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2 -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Philadelphia</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">San Antonio</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">San Diego</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Dallas</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Fort Worth</span>
                                </div>
                            </div>
                        </div>

                        <!-- Column 3 -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Jacksonville</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Austin</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">San Jose</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Charlotte</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Columbus</span>
                                </div>
                            </div>
                        </div>

                        <!-- Column 4 -->
                        <div class="col">
                            <div class="ehs-states-col">
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Indianapolis</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">San Francisco</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Seattle</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Denver</span>
                                </div>
                                <div class="ehs-state-item">
                                    <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                    <span class="ehs-state-name">Nashville</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION 13: CITIES WE SERVE END -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Autoplay background videos
    var nodeVideos = document.querySelectorAll('.ehs-node-video');
    nodeVideos.forEach(function(vid) {
        vid.muted = true;
        vid.play().catch(function(err) {
            // Autoplay fallback
        });
    });

    // Testimonials Carousel: Infinite Continuous Forward Loop (No reverse swap)
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
        if (viewport) {
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
        }

        // Start infinite continuous loop
        startAutoPlay();
    })();

    // Pinned Stacking Cards on Scroll for "Quality Leads Built for Better Results"
    (function() {
        var section = document.getElementById('quality-leads');
        if (!section) return;
        var cards = section.querySelectorAll('.ehs-quality-card-item');
        if (!cards.length) return;

        var numCards = cards.length;

        function handlePinnedScroll() {
            var rect = section.getBoundingClientRect();
            var totalScroll = section.offsetHeight - window.innerHeight;
            if (totalScroll <= 0) return;

            // Current scroll progress through the section (0 to 1)
            var currentScroll = -rect.top;
            var progress = Math.min(Math.max(currentScroll / totalScroll, 0), 1);

            cards.forEach(function(card, idx) {
                if (idx === 0) {
                    // Base card stays in place, subtle scale & slight dim as other cards arrive
                    var baseScale = 1 - (progress * 0.08);
                    var baseBrightness = 1 - (progress * 0.35);
                    card.style.transform = 'translateY(0px) scale(' + baseScale + ')';
                    card.style.filter = 'brightness(' + baseBrightness + ')';
                    card.style.zIndex = 1;
                    card.style.opacity = 1;
                    return;
                }

                // Card idx arrives in its allotted scroll segment
                var startP = (idx - 1) / (numCards - 1);
                var endP = idx / (numCards - 1);

                if (progress < startP) {
                    // Not yet entered: positioned below the stage
                    card.style.transform = 'translateY(120%) scale(1)';
                    card.style.opacity = '0';
                    card.style.zIndex = idx + 1;
                } else if (progress >= startP && progress <= endP) {
                    // Currently animating up into view
                    var stepProgress = (progress - startP) / (endP - startP);
                    var translateY = (1 - stepProgress) * 115; // 115% down to 0%
                    var opacity = Math.min(1, stepProgress * 2.5);
                    card.style.transform = 'translateY(' + translateY + '%) scale(1)';
                    card.style.opacity = opacity;
                    card.style.filter = 'brightness(1)';
                    card.style.zIndex = idx + 1;
                } else {
                    // Fully stacked: rests at translateY(0) and scales slightly as later cards stack on top
                    var remainingProgress = (progress - endP) / (1 - endP + 0.0001);
                    var subScale = 1 - (remainingProgress * 0.06);
                    var subBright = 1 - (remainingProgress * 0.25);
                    card.style.transform = 'translateY(0px) scale(' + subScale + ')';
                    card.style.opacity = '1';
                    card.style.filter = 'brightness(' + subBright + ')';
                    card.style.zIndex = idx + 1;
                }
            });
        }

        window.addEventListener('scroll', handlePinnedScroll, { passive: true });
        window.addEventListener('resize', handlePinnedScroll, { passive: true });
        handlePinnedScroll();
    })();

    // Generic Animated Number Counters on scroll (Top Stats & Market Stats)
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
                var format = elem.getAttribute('data-format') || '';
                var duration = 1800;
                var startTime = null;

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var easeOut = 1 - Math.pow(1 - progress, 3);
                    var current = target * easeOut;

                    var formattedVal;
                    if (decimals > 0) {
                        formattedVal = current.toFixed(decimals);
                    } else {
                        var intVal = Math.round(current);
                        formattedVal = (format === 'comma') ? intVal.toLocaleString() : intVal;
                    }

                    elem.textContent = prefix + formattedVal + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        var finalVal;
                        if (format === 'comma') {
                            finalVal = Math.round(target).toLocaleString();
                        } else if (decimals > 0) {
                            finalVal = target.toFixed(decimals);
                        } else {
                            finalVal = target;
                        }
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

        // Initialize for Top Hero Stats Banner (10,000+, 500+)
        setupCounterSection('.ehs-contractor-stats', '.ehs-stat-value');

        // Initialize for Market Growth 3 Stats Box (7.2%, 78%, 4.8x)
        setupCounterSection('.ehs-market-stats-card', '.ehs-market-stat-num');
    })();

    // Hero Floating Card 3-Second Rotating Content
    (function() {
        var card = document.getElementById('ehsHeroProjectCard');
        if (!card) return;

        var iconEl = document.getElementById('ehsHeroCardIcon');
        var titleEl = document.getElementById('ehsHeroCardTitle');
        var locEl = document.getElementById('ehsHeroCardLocation');

        var projectData = [
            { service: 'Roofing', location: 'Dallas, TX', iconHtml: '<i class="bi bi-house-door-fill"></i>' },
            { service: 'HVAC', location: 'Phoenix, AZ', iconHtml: '<i class="fa-solid fa-fan"></i>' },
            { service: 'Window', location: 'Denver, CO', iconHtml: '<i class="fa-solid fa-table-cells-large"></i>' },
            { service: 'Pest Control', location: 'Miami, FL', iconHtml: '<i class="fa-solid fa-shield-virus"></i>' },
            { service: 'Flooring', location: 'Seattle, WA', iconHtml: '<i class="fa-solid fa-layer-group"></i>' },
            { service: 'Plumbing', location: 'Boston, MA', iconHtml: '<i class="fa-solid fa-faucet-drip"></i>' }
        ];

        var currentIndex = 0;

        setInterval(function() {
            currentIndex = (currentIndex + 1) % projectData.length;
            var nextItem = projectData[currentIndex];

            card.classList.add('is-updating');

            setTimeout(function() {
                if (iconEl) iconEl.innerHTML = nextItem.iconHtml;
                if (titleEl) titleEl.textContent = nextItem.service;
                if (locEl) locEl.textContent = nextItem.location;

                card.classList.remove('is-updating');
            }, 250);
        }, 3000);
    })();

    // Speech Bubble to Step 04 Connecting Line Dynamic Calculation
    (function() {
        var bubble = document.getElementById('ehsJourneySpeechBubble');
        var step04 = document.getElementById('ehsStep04Card');
        var path = document.getElementById('ehsConnectorPath');
        var pathGlow = document.getElementById('ehsConnectorPathGlow');
        if (!bubble || !step04 || !path) return;

        var dotStart = document.getElementById('ehsDotStart');
        var haloStart = document.getElementById('ehsHaloStart');
        var dot1 = document.getElementById('ehsDot1');
        var halo1 = document.getElementById('ehsHalo1');
        var dot2 = document.getElementById('ehsDot2');
        var halo2 = document.getElementById('ehsHalo2');
        var dot3 = document.getElementById('ehsDot3');
        var halo3 = document.getElementById('ehsHalo3');
        var dotEnd = document.getElementById('ehsDotEnd');
        var haloEnd = document.getElementById('ehsHaloEnd');

        function setNodePos(dot, halo, x, y) {
            if (dot) {
                dot.setAttribute('cx', x.toFixed(1));
                dot.setAttribute('cy', y.toFixed(1));
            }
            if (halo) {
                halo.setAttribute('cx', x.toFixed(1));
                halo.setAttribute('cy', y.toFixed(1));
            }
        }

        function updateConnector() {
            if (window.innerWidth < 992) return;
            var container = bubble.closest('.container');
            if (!container) return;
            var cRect = container.getBoundingClientRect();
            var bRect = bubble.getBoundingClientRect();
            var imgWrap = step04.querySelector('.ehs-step-img-wrapper') || step04;
            var sRect = imgWrap.getBoundingClientRect();

            var tip = document.getElementById('ehsPointerTip');
            var startX, startY;
            if (tip) {
                var tRect = tip.getBoundingClientRect();
                startX = tRect.left - cRect.left;
                startY = tRect.top - cRect.top;
            } else {
                startX = (bRect.left + bRect.width * 0.45 + 8) - cRect.left;
                startY = (bRect.bottom + 3.2) - cRect.top;
            }

            // Top center of Step 04 circle
            var endX = (sRect.left + sRect.width / 2) - cRect.left;
            var endY = sRect.top - cRect.top;

            var dx = endX - startX;
            var dy = endY - startY;

            // Pronounced S-wave curve matching reference image
            var isLeft = dx <= 0;
            var waveAmp = Math.max(Math.abs(dx) * 0.9, 130);

            var cp1X = startX + (isLeft ? 45 : -45);
            var cp1Y = startY + dy * 0.28;
            var cp2X = endX + (isLeft ? -waveAmp : waveAmp);
            var cp2Y = endY - dy * 0.38;

            var d = 'M ' + startX.toFixed(1) + ' ' + startY.toFixed(1) + 
                    ' C ' + cp1X.toFixed(1) + ' ' + cp1Y.toFixed(1) + 
                    ', ' + cp2X.toFixed(1) + ' ' + cp2Y.toFixed(1) + 
                    ', ' + endX.toFixed(1) + ' ' + endY.toFixed(1);

            path.setAttribute('d', d);
            if (pathGlow) {
                pathGlow.setAttribute('d', d);
            }

            // Lock all 5 glowing nodes precisely on the path curve
            try {
                var totalLen = path.getTotalLength();
                if (totalLen > 0) {
                    var p0 = path.getPointAtLength(0);
                    var p1 = path.getPointAtLength(totalLen * 0.25);
                    var p2 = path.getPointAtLength(totalLen * 0.50);
                    var p3 = path.getPointAtLength(totalLen * 0.75);
                    var p4 = path.getPointAtLength(totalLen);

                    setNodePos(dotStart, haloStart, p0.x, p0.y);
                    setNodePos(dot1, halo1, p1.x, p1.y);
                    setNodePos(dot2, halo2, p2.x, p2.y);
                    setNodePos(dot3, halo3, p3.x, p3.y);
                    setNodePos(dotEnd, haloEnd, p4.x, p4.y);
                }
            } catch (e) {
                setNodePos(dotStart, haloStart, startX, startY);
                setNodePos(dotEnd, haloEnd, endX, endY);
            }
        }

        window.addEventListener('load', updateConnector);
        window.addEventListener('resize', updateConnector);
        setTimeout(updateConnector, 100);
        setTimeout(updateConnector, 400);
        setTimeout(updateConnector, 1000);
    })();

    // Book a Call Form: Validation, Duplicate Prevention, Server Save, and Calendly Redirect
    (function() {
        var form = document.getElementById('ehsQuoteForm');
        var submitBtn = document.getElementById('quoteSubmitBtn');
        var alertBox = document.getElementById('ehsFormAlert');
        var alertMsg = document.getElementById('ehsFormAlertMessage');
        if (!form || !submitBtn) return;

        var isSubmitting = false;

        function showAlert(msg) {
            if (alertBox && alertMsg) {
                alertMsg.textContent = msg;
                alertBox.classList.remove('d-none');
            } else {
                alert(msg);
            }
        }

        function hideAlert() {
            if (alertBox) {
                alertBox.classList.add('d-none');
            }
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Prevent duplicate clicks while submitting
            if (isSubmitting) {
                return false;
            }

            // HTML5 validation check
            if (!form.checkValidity()) {
                form.reportValidity();
                return false;
            }

            hideAlert();
            isSubmitting = true;

            // Disable button and show busy cursor/visual lock
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.75';
            submitBtn.style.cursor = 'not-allowed';

            var formData = new FormData(form);
            formData.append('is_ajax', '1');
            formData.append('ehs_quote_submit', '1');

            var actionUrl = form.getAttribute('action');
            var postUrl = (actionUrl && actionUrl.trim() !== '') ? actionUrl : (window.location.href.split('#')[0]);

            fetch(postUrl, {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                return response.json().catch(function() {
                    throw new Error('Server returned an unexpected response format. Please try again.');
                }).then(function(data) {
                    if (!response.ok || !data.success) {
                        throw new Error(data.message || 'Unable to save your information. Please check your details and try again.');
                    }
                    return data;
                });
            })
            .then(function(data) {
                // Only redirect to Calendly after successful data storage
                if (data.redirect_url) {
                    window.location.href = data.redirect_url;
                } else {
                    window.location.href = 'https://calendly.com/rishabhmishra-easyhomeservice/30min';
                }
            })
            .catch(function(err) {
                // If saving fails: do NOT redirect, show clear error message, re-enable button
                showAlert(err.message || 'An error occurred while saving your request. Please try again.');
                isSubmitting = false;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '';
                submitBtn.style.cursor = '';
            });
        });
    })();
});
</script>

<?php include '../footer.php';?>