<?php include'header2.php' ?>	

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">

<style>
      

      .color-blue
{
    color:#14147e;
}
        /* Window Gallery Section */
        .gallery-section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #14147e;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-title span {
            color: #04d36f;
        }

        .section-subtitle {
            text-align: center;
            color: #546e7a;
            font-size: 1.1rem;
            margin-bottom: 50px;
        }

        /* Window Card with Overlay */
        .window-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            height: 280px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .window-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .window-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

      .window-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgb(0 0 0 / 64%), transparent);
    padding: 28px 15px 10px 15px;
    transition: background 0.3s 
ease;
}

        .window-card:hover .window-overlay {
            background: linear-gradient(to top, rgb(0 0 0), transparent);
        }

        .window-name {
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
            margin: 0;
        }

        /* Quote Form */
        .quote-form-card {
            background: white;
            border-radius: 13px 19px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            padding: 20px;
            position: sticky;
            transition: transform 0.3s ease;
        }

        .quote-form-card:hover {
            transform: translateY(-4px);
        }

.form-header {
    margin-bottom: 18px;
    display: inline-flex
;
    justify-content: center;
    align-items: center;
    gap: 11px;
    background: aliceblue;
    padding: 12px 20px;
    border-radius: 8px;
}

       .form-icon {
    width: 34px;
    height: 34px;
    background: linear-gradient(135deg, #04d36f 0%, #04d36f 100%);
    border-radius: 50%;
    display: flex
;
    align-items: center;
    justify-content: center;
    text-transform:uppercase;
    /* margin: 0 auto 15px; */
}

        .form-icon svg {
            width: 19px;
            height: 19px;
            color: white;
        }

     .form-header h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #14147e;
    margin-bottom: 0;
}

        .form-header p {
            color: #78909c;
            font-size: 0.9rem;
        }

        .form-label {
            font-weight: 600;
            color: #37474f;
            margin-bottom: 8px!important;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-label svg {
            width: 16px;
            height: 16px;
            color: #04d36f;
        }

        .form-control,
        .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #04d36f;
            box-shadow: 0 0 0 0.25rem rgba(16, 185, 129, 0.15);
            outline: none;
        }

        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #dc3545;
            animation: shake 0.4s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-4px); }
            20%, 40%, 60%, 80% { transform: translateX(4px); }
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 4px;
        }

        .form-check-input {
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #bdbdbd;
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: #04d36f;
            border-color: #04d36f;
        }

        .form-check-label {
            cursor: pointer;
            color: #78909c;
            font-size: 0.80rem;
            margin-left: 8px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #04d36f 0%, #04d36f 100%);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            padding: 14px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #04d36f 0%, #04d36f 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(16, 185, 129, 0.3);
        }

        .security-note {
            text-align: center;
            color: #78909c;
            font-size: 0.85rem;
            margin-top: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .security-note svg {
            width: 16px;
            height: 16px;
            color: #04d36f;
        }

        /* Benefits Section */
        .benefits-section {
            background: #f5f5f5;
            padding: 60px 0;
        }

        .benefit-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
        }

        .benefit-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            background: rgba(16, 185, 129, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .benefit-icon svg {
            width: 32px;
            height: 32px;
            color: #04d36f;
        }

        .benefit-card h5 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #14147e;
            margin-bottom: 15px;
        }

        .benefit-card p {
            color: #78909c;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 1.8rem;
            }

            .window-card {
                height: 220px;
            }

            .quote-form-card {
                position: relative;
                top: 0;
                margin-top: 30px;
            }

            .section-title {
                font-size: 1.6rem;
            }
        }
    </style>
<style>
.banner_window-new {
    background: linear-gradient(to right, rgb(233 239 253 / 86%), rgb(255 255 255 / 0%)), url(../images/window-image-7.jpg) right no-repeat;
    background-position: right;
}
.f-ul li{
    list-style:decimal;
}
    .win-cls {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.win-cls-1{
    width:100%;
    height:100%;
    object-fit: cover;
}
/* Zoom effect */
    .win-cls, .win-cls-1 {
      width: 100%;
      border-radius: 10px;
      cursor: pointer;
      transition: transform 0.4s ease;
    }

    .win-cls:hover, .win-cls-1:hover {
      transform: scale(1.08);
    }
    @media only screen and (max-width: 767px) {
    .inner__banner--roof {
        padding: 20px 0;
        position: relative;
        background: #e6f1fa !important;
    }
.banner_window-new .inner__banner__text{
    width:100%;
}
        
    }
.banner_window-new .inner__banner__text{
    width:85%;
}

.inner__banner,
.banner_window-new {
  position: relative;
  z-index: 1;
}

.section_2,
.gallery-section,
.quote-form-card {
  position: relative;
  z-index: 2;
}

</style>





<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_window-new" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="images/window-mobile.png" class="inner_banner_mob showMob" width="600" height="400" alt="Window Experts, best home replacement windows, best affordable windows">
<h1 class="banner_heading">Work With the Best <br> Window Experts Near You</h1>            
            <p class="inner__banner__text">Upgrade your view with window experts who bring style, savings, and reliability to your doorstep. Discover the best home replacement windows from trusted local pros  quick, clean, and built to last. </p>
            <div class="banner_quote_box inner__banner__quote-box">
                                    <div class="error-message"></div>

                <div class="banner_quote_box_inner">
                    <form id="myForm" action="window-steps.php" method="get">
                        <div class="form_fild">
                         <input type="tel" required type="tel" id="input_field_zip" class="input_field_zip input_field" placeholder="Your ZIP Code" pattern="[0-9]{5}" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" name="zip">

                            <button type="submit" class="quote_btn">Get A Quote</button>
                        </div>
                    </form>

                </div>                
                <div class="form_note_text"><img src="images/lock.png" alt="lock" width="50" height="67"> <p>Your information is 100% secure & confidential.</p></div>
            </div>
        </div>
    </div>
</div>


<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Turn Your Dream Window into Reality with Trusted Local Window Experts</h2>
    <p class="common_text">Connect with trusted local window experts for energy-efficient windows, custom solutions, and affordable home upgrades - all in one place.</p>
  </div>
  <div class="container">
  <section class="gallery-section">
        <div class="container">

            <div class="row pt-5">
                <!-- Window Gallery -->
                <div class="col-lg-8">
                    <div class="row g-4">
                        <!-- Window 1 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-car/win-1.jpeg" alt="Bay & Bow Window">
                                <div class="window-overlay">
                                    <p class="window-name">Bay & Bow Window</p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 2 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-car/win-7.jpg" alt="Casement Window">
                                <div class="window-overlay">
                                    <p class="window-name">Casement Window</p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 3 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-car/win-2.jpg" alt="Double-Hung Window">
                                <div class="window-overlay">
                                    <p class="window-name">Double-Hung Window</p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 4 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-car/win-6.jpg" alt="Sliding Window">
                                <div class="window-overlay">
                                    <p class="window-name">Sliding Window</p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 5 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-car/win-3.jpg" alt="Picture Window">
                                <div class="window-overlay">
                                    <p class="window-name">Picture Window</p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 6 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-car/win-4.jpeg" alt="uPVC Window">
                                <div class="window-overlay">
                                    <p class="window-name">Aluminium Window</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quote Form -->
<div class="col-lg-4">
  <div class="quote-form-card">
    <div class="form-header">
      
 <div class="form-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
      </div> <div>     <h4>

Get A Quote</h4>
      </div>
    </div>

    <form id="quoteForm" method="post" action="window-steps">
      <div class="row g-3">
        <!-- Full Name -->
        <div class="col-12 col-md-6">
          <div class="mb-1">
            <label for="name" class="form-label">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              Full Name
            </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required="">
            <div class="invalid-feedback"></div>
          </div>
        </div>

        <!-- Phone Number -->
        <div class="col-12 col-md-6">
          <div class="mb-1">
            <label for="phoneNumber" class="form-label">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
              Phone Number
            </label>
            <input type="tel" class="form-control" id="phoneNumber" name="phone" placeholder="(555) 123-4567" required="">
            <div class="invalid-feedback"></div>
          </div>
        </div>

        <!-- Email -->
        <div class="col-12 col-md-6">
          <div class="mb-1">
            <label for="email" class="form-label">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              Email Address
            </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="">
            <div class="invalid-feedback"></div>
          </div>
        </div>

        <!-- Zip Code -->
        <div class="col-12 col-md-6">
          <div class="mb-1">
            <label for="zipcode" class="form-label">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              Zip Code
            </label>
            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="12345" maxlength="5" required="">
            <div class="invalid-feedback"></div>
          </div>
        </div>

        <!-- Window Type -->
        <div class="col-12 col-md-12">
          <div class="mb-3">
            <label for="windowType" class="form-label">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
              </svg>
              Window Type
            </label>
            <select class="form-select" id="windowType" name="windowType" required="">
              <option value="">Select window type</option>
              <option value="Bay &amp; Bow Window">Bay &amp; Bow Window</option>
              <option value="Casement Window">Casement Window</option>
              <option value="Double-Hung Window">Double-Hung Window</option>
              <option value="Sliding Window">Sliding Window</option>
              <option value="Picture Window">Picture Window</option>
              <option value="Aluminium Window">Aluminium Window</option>
            </select>
            <div class="invalid-feedback"></div>
          </div>
        </div>

        <!-- Consent -->
        <div class="col-12 col-md-12 mt-2">
          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="consent" name="consent" required="">
              <label class="form-check-label text-left" for="consent">
                I agree that EasyHomeService may contact me by phone, text, or email using the
                number(s) I provide. I understand this is not required to purchase services.
              </label>
              <div class="invalid-feedback"></div>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="col-12">
          <button type="submit" class="btn-submit w-100">Get Quote Now</button>
        </div>

        <!-- Security Note -->
        <div class="col-12">
          <div class="security-note mt-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
            Your information is 100% secure &amp; confidential
          </div>
        </div>
      </div>
    <input type="hidden" name="xxTrustedFormCertUrl" value="https://cert.trustedform.com/48d2776df4a883f001d70a8d94d9ab5a54b595b4" id="xxTrustedFormCertUrl_1"><input type="hidden" name="xxTrustedFormToken" value="https://cert.trustedform.com/48d2776df4a883f001d70a8d94d9ab5a54b595b4" id="xxTrustedFormToken_1"><input type="hidden" name="xxTrustedFormPingUrl" value="https://ping.trustedform.com/0.O9XvbdGRZuuS3pc544vPJOtsF9Tc7OIluC8fjltNADcAJ1k3SQtG6GKbRJBw8h5X2JY_Ijw.LaYxzlzyTQZ6IrwZTjgqGQ.XNSt0djQij3DERQJUgjWjg" id="xxTrustedFormPingUrl_1"></form>
  </div>
</div>
</div>
        </div>
    </section>  </div>
</div>


<!--section_2-->
<?php include 'how-works.php';?>

 <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<div class="inner__section-1">
	<div class="container">
    	<h2 class="common_heading inner_common_head">Professional Window Installation That Saves You More</h2>
        <img src="images/inr-s1-img1-window.jpg" class="inr-s1-img1" width="497" height="522" alt="local window replacement companies, window repair, home window repair and replacement near me, best residential windows">
        <div class="inner__section-1__right">
        	<p class="common_text">Finding the right window replacement expert can be overwhelming. That’s where we make it simple. We connect you with verified local window replacement companies offering energy-efficient window installation and custom window solutions for homes. From reducing utility bills to improving your home’s curb appeal, our trusted partners provide solutions that add comfort, style, and long-term value. </p>
            <p class="common_text">If you're updating one window, or renovating your entire house or looking for specialized designs to increase lighting and airflow, our professionals are here to offer luxury, style and value for money.</p>
            <p class="common_text common_text_heading">Why Do Homeowners Choose Our Service?</p>
            <ul class="inner_sec1__point">
            	<li> Trusted Local Window Experts. </li>
                <li> Energy-Efficient & Custom Window Solutions. </li>
                <li> Cost-Effective & Transparent Options. </li>
                <li> Hassle-Free Matching & Fast Connections. </li>
                <li> Reliable Quality & Best Results. </li>
                <li> Boost Home Comfort & Value. </li>
            </ul>
            
            <div class="clearall"></div>
            <div class="btn_box mt-2">
            	<p class="btn_top_text">Just Takes 2 Minutes</p>
                <a onclick="window.location.href='window-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
            </div>
        </div>
    </div>
</div>






<!--inner__section-2-->
<div class="roofing_section_2">
	<div class="container">
    	<h3 class="common_heading inner_common_head">Expert Insights: Benefits of Energy-Efficient Window Installation and Home Upgrades</h3>
        <p class="common_text">Experience heightened energy efficiency, enhanced aesthetics, and increased property value with our comprehensive window installation, repair, and upgrade services.<br class="showDesk">Upgrade windows for enhanced aesthetics and energy efficiency, reducing heating and cooling costs.</p>
        
        <div class="roofing_sec2_row ">
        	<div class="roofing_sec2_row_box">
            	<img src="images/investment.png" alt="Home window installation contractors">
                <span>Invest in Your Home with Energy-Efficient Windows</span>
                <p class="common_text">Professional window contractors deliver energy-efficient windows that enhance comfort, aesthetics, and overall property value.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/home.png" alt="Best rated window replacements">
                <span>Safe, Cozy, and Energy-Efficient Windows for Your Home</span>
                <p class="common_text">Return to comfort and warmth with custom window solutions from verified window contractors near you.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/increase.png" alt="Add Value and Appeal to Your Investment!">
                <span>Add Value and Appeal to Your Investment</span>
                <p class="common_text">Enhance the desirability and financial worth of your property by investing in energy-efficient windows that bring both lasting value & irresistible charm.</p>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='window-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
        </div>
    </div>
</div>








<?php include'testimonials.php' ?>





<div class="roofing_section_2 blog-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
     
      
      <h3 class="common_heading inner_common_head">        Everything You Need to Know About Window Replacement
</h3>
      <p class="common_text">From classic designs to modern efficiency - explore our blogs to find the best window solutions for your home.</p>
      
      
      
      
 
    </div>

    <div class="row g-4">
      <!-- Blog Card 1 -->
      <div class="col-md-6 col-lg-4">
        <a
          href="https://easyhomeservice.com/blog/historical-windows-a-look-at-architectural-styles-across-america"
          class="text-decoration-none text-dark"
        >
          <div class="card blog-card h-100 shadow-sm border-0">
            <img
              src="images/window-blog/historical-windows-a-look-at-architectural-styles-across-america.jpg"
              class="card-img-top"
              alt="Historical Windows"
            />
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-2">
                Historical Windows - A Look at Architectural Styles Across America
              </h5>
              <p class="card-text text-muted">
                Windows are key elements of architectural design, reflecting America’s history.
                Discover how cultural influences and technology shaped window design across centuries.
              </p>
              <span class="fw-semibold">Read More →</span>
            </div>
          </div>
        </a>
      </div>

      <!-- Blog Card 2 -->
      <div class="col-md-6 col-lg-4">
        <a
          href="https://easyhomeservice.com/blog/best-window-replacement-in-maryland"
          class="text-decoration-none text-dark"
        >
          <div class="card blog-card h-100 shadow-sm border-0">
            <img
              src="images/window-blog/best-window-replacement.png"
              class="card-img-top"
              alt="Best Window Replacement in Maryland"
            />
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-2">
            Are you searching for the best window replacement in Maryland?
              </h5>
              <p class="card-text text-muted">
                Upgrading windows boosts efficiency, comfort, and value. Learn how to find the
                perfect replacement for your Maryland home and when it’s time to make the switch.
              </p>
              <span class="fw-semibold">Read More →</span>
            </div>
          </div>
        </a>
      </div>

      <!-- Blog Card 3 -->
      <div class="col-md-6 col-lg-4">
        <a
          href="https://easyhomeservice.com/blog/storm-proof-your-home-why-storm-windows-maryland-are-a-game-changer"
          class="text-decoration-none text-dark"
        >
          <div class="card blog-card h-100 shadow-sm border-0">
            <img
              src="images/window-blog/storm-proof-your-home.jpg"
              class="card-img-top"
              alt="Storm Proof Your Home"
            />
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-2">
                Storm Proof Your Home: Why Storm Windows Are a Game Changer
              </h5>
              <p class="card-text text-muted">
                Maryland’s weather can be tough - but storm windows can protect your home while improving
                energy efficiency. Here’s why they’re worth the investment.
              </p>
              <span class="fw-semibold">Read More →</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Custom CSS -->
<style>
.blog-section .card {
  transition: all 0.3s ease;
  border-radius: 12px;
  padding:8px;
}

.blog-section .card-img-top {
    border-radius:8px;
    border:1px solid #04d36f;
  height: 220px;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.blog-section .card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.blog-section .card:hover .card-img-top {
  transform: scale(1.05);
}

.blog-section .card-title {
  color: #1d3557;
}

.blog-section .card-text {
  font-size: 0.95rem;
  line-height: 1.6;
}
</style>

<div class="section_4">
    <?php include 'service.php';?>
    
</div> 
<style>
.sticky-img {
  position: sticky;
  top: 130px;/* distance from top when scrolling */
  margin-top: 25px;
}
.faq-p {
    font-size: 28px;
    font-weight: 700;
    color: #14147e;
    margin-top:1rem;
}

.faq-container {
    max-width: 1272px;
}
</style>
<!--section_6-->
<div class="section_6">
  <div class="container">
    <p class="common_heading inner_common_head">Frequently <br class="showMob">Asked Questions</p>

    <div class="row">
      <!-- FAQ area -->
      <div class="col-lg-12">
        <div class="faq-container" style="overflow:hidden;">
          <div class="row">
            <!-- LEFT COLUMN: 6 FAQs -->
            <div class="col-md-6">
              <div class="up-slide-dwn">
                <div class="accordion acdn-heading" id="hd-one">What types of window services do you provide?</div>
                <div class="acdn-content" style="height: 149px; padding-top: 20px; margin-top: 0px; padding-bottom: 15px; margin-bottom: 0px; display: none;">
                  <p class="acdn-para">We connect you with trusted window experts from local window replacement companies. Whether you need window repair, replacement, installation or a full upgrade, our network of professionals has you covered.</p>
                </div>
              </div>

              <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What if my window breaks suddenly? Do you connect me with emergency services?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">Yes, many of our providers offer emergency window repair and replacement. Just let us know it’s urgent when filling out the form.</p>
                </div>
              </div><div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How do I book a window service with Easy Home Service?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">It’s simple! Just fill out our quick form, and we’ll connect you with the local window replacement companies who are trusted and experienced.</p>
                </div>
              </div><div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How long does a typical window replacement project usually take to complete?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">On average, replacing a single window can take 1–2 hours. A full-home project with the best residential windows usually takes 1–3 days, depending on the number of windows and project complexity.</p>
                </div>
              </div>

              <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What’s the average cost of window replacement?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">Costs vary depending on window type, size, material, and labor. Our window experts will provide an upfront estimate, helping you find the best affordable windows within your budget.</p>
                </div>
              </div>

              

              <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Do your professionals offer warranties?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">Yes. Most service provider in our network provide warranties on both materials and labor, ensuring your investment in the best residential windows is protected. Always confirm the warranty details with your assigned professional.</p>
                </div>
              </div>

              
            </div>

            <!-- RIGHT COLUMN: 6 FAQs -->
            <div class="col-md-6">
              <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What types of home services do you offer?</div>
                <div class="acdn-content" style="display:none;">
                  <div class="acdn-para">
                    We cover a wide range of affordable home services providers, including:
                    <ul class="f-ul">
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/bathtub">Bathtub</a> – Bathroom Remodeling &amp; Upgrades</li>
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/cabinet">Cabinet</a> – Custom Cabinets &amp; Storage Solutions</li>
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/carpentry">Carpentry</a> – Carpentry &amp; Woodwork Services</li>
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/glassrepair">Glass Repair</a> – Glass Replacement &amp; Window Repair</li>
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/plumbing">Plumbing</a> – Plumbing Installation &amp; Repairs</li>
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/roofing">Roof</a> – Roofing Installation &amp; Maintenance</li>
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/painting">Paint</a> – Interior &amp; Exterior Painting</li>
                      <li><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/electrical">Electric</a> – Electrical Repair &amp; Installation</li>
                    </ul>
                  </div>
                </div>
              </div><div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How long will it take before someone contacts me after I fill out the form?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">Usually, you’ll start hearing from local window replacement companies the same day or within 24 hours.</p>
                </div>
              </div>

              

              <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Can I customize the colour and style of my new windows?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">Absolutely. Most providers offer a wide selection of frames, finishes, and styles so you can get the best windows to match your home’s look and budget.</p>
                </div>
              </div>

              <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What’s the difference between single-pane, double-pane, and triple-pane windows?</div>
                <div class="acdn-content" style="display:none;">
                  <div class="acdn-para">
                    <ul>
                      <li>Single-pane: Basic, less energy-efficient.</li>
                      <li>Double-pane: Two layers of glass with insulation in between; a great choice for the best affordable windows.</li>
                      <li>Triple-pane: Best insulation and noise reduction, often used in premium residential windows.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Do I have to pay anything to use Easy Home Service?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">No, our service is free for homeowners. You only pay the Window Experts you choose for the actual installation or repair.</p>
                </div>
              </div><div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How soon can a provider start the job?</div>
                <div class="acdn-content" style="display:none;">
                  <p class="acdn-para">Timelines vary depending on the provider’s schedule and your project size. Once you’re matched with a window expert, you can confirm a convenient timeline directly with them.</p>
                </div>
              </div>

              
            </div>
            <!-- /RIGHT COLUMN -->
          </div>
        </div>
      </div>

      <!-- Sticky image column (unchanged) -->
    </div>

    <div class="clearall"></div>

    <div class="btn_box">
      <p class="btn_top_text">Just Takes 2 Minutes</p>
      <a onclick="window.location.href='window-steps?clickid=&amp;source='" class="common_btn">Get A Quote Now<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
      </a>
      <p class="btn_text inner_btn_text">
        <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">
        Your information is 100% secure &amp; confidential.
      </p>
    </div>
  </div>
</div>
<?php include'promise.php' ?>

<?php include'footer-design.php' ?>

  <!-- Carousel Init Script -->
  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        responsive:{
          0:{ items:1 },
          600:{ items:1 },
          1000:{ items:3 }
        }
      });
    });
  </script>

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bookmarkscroll.js"></script>
<script type="text/javascript" src="js/slick.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('.mob-mnu-ic').click(function(e) {
		$('.mobilemenu').slideToggle();
		$('.dl-trigger').toggleClass('dl-active');
	});
	
	$('.menuOpen').click(function(e) {
		$(this).next('.dropdown-mobile').slideToggle();
		$(this).toggleClass('mnutog');
	});
	
	$('.customer_review_row').slick({
		dots: false,
		arrows: true,
		speed: 300,
		slidesToShow:4,
		slidesToScroll: 1,
		centerMode: true,
		variableWidth: true,
		responsive: [
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				centerMode: true,
				variableWidth: true,
			}
		}
		]
	});
	
	$(".acdn-heading").click(function() {
		
		var questionDiv = $(this);
		var answerDiv   = $(this).next('.acdn-content');
		var idx = $('.acdn-content').index(answerDiv);
		
		$('.acdn-content').each(function(index, ansDiv) {
            if(index != idx && $(ansDiv).is(':visible')) {
				$(ansDiv).slideUp(500, function() {
					$(ansDiv).prev('.acdn-heading').removeClass('accordion-open');
				});
			}
        });
					
		if (answerDiv.is(':visible')) {
			answerDiv.stop().slideUp(500, function() {
				questionDiv.removeClass('accordion-open');
			});
		} else {
		  questionDiv.addClass('accordion-open');
		  answerDiv.stop().slideDown(500);
		}

	});
	
});
</script>

<script type="text/javascript">

$(document).scroll(function() {
		
	if ($(this).scrollTop() > 40){
		$('.top-fix-bar').addClass('fixed-nav');
	}else{
		$('.top-fix-bar').removeClass('fixed-nav');
	}
	
	if ($(this).scrollTop() > 10){
	   $('.mobilemenu').addClass('mobimenu-top');
	}else{
	   $('.mobilemenu').removeClass('mobimenu-top');
	}

});

//MODAL POPUP JS
$(document).on('click', '#app_common_modal_close', function() {
	$('#app_common_modal').remove();
});	
function openNewWindow(page_url, type, window_name, width, height, top, left, features) {
    if (!type) {
        type = 'popup';
    }
    if (!width) {
        width = 480;
    }
    if (!height) {
        height = 480;
    }
    if (!top) {
        top = 50;
    }
    if (!left) {
        left = 50;
    }
    if (!features) {
        features = 'resizable,scrollbars';
    }

    if (type == 'popup') {
        var settings = 'height=' + height + ',';
        settings += 'width=' + width + ',';
        settings += 'top=' + top + ',';
        settings += 'left=' + left + ',';
        settings += features;

        win = window.open(page_url, window_name, settings);
        win.window.focus();
    } else if (type == 'modal') {
        var html = '';
        html += '<div id="app_common_modal">';
        html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><iframe src="' + page_url + '" frameborder="0"></iframe></div>';
        html += '</div>';

        if (!$('#app_common_modal').length) {

            $('body').append(html);
        }
        $('#app_common_modal').fadeIn();
    }

}
</script>
<script>
document.querySelectorAll('.js-input').forEach(function(el) {
  el.addEventListener('change', function() {
    if (el.value && el.value !== "") {
      el.classList.add('not-empty');
    } else {
      el.classList.remove('not-empty');
    }
  });
});
</script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



</body>
</html>
