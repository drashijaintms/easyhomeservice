<meta name="robots" content="nofollow,noindex">
<?php include'header.php' ?>	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
  /*position: relative;*/
  z-index: 2;
}

</style>
<style>
.w-80{
    width:80%!important;
}
    .lispan{
        font-weight:400;
    }
    .points li {
    text-align: left;
    /* border: 1px solid #0000ff40; */
    padding: 10px;
    margin-bottom: 10px;
    font-size: 17px;
    font-weight: 500;
    box-shadow: 2px 2px 4px 0px #0000004f;
    border-radius: 6px;
}
.ulclas {
    padding-left: 3rem;
}

.ulclas li {

    padding-left: 0px!important;
    background: none!important;
    list-style-type: disc;
}
p.new-text {
    /* margin-top: 18px; */
    font-size: 18px;
    text-align: left;
}
.section_8 {
    float: left;
    width: 100%;
    padding: 60px 0 50px;
    background: #eff6ff;
}
.new-ul{
    text-align:left;
}
.new-ul i {
    font-size: 24px;
    color: #04d36f;
    }
    ul.new-ul li {
    font-size: 17px;
    font-weight: 600;
    list-style-type:disc;
}
.ulclas i{
    color: #14147e;
    font-size: 24px;
}
.inner__banner--roof-1 {
    background: url("images/roofing-02.jpg") center top no-repeat #e8f0fb;
    padding: 80px 0 110px;
}

@media only screen and (max-width: 768px) {
  .inner__banner--roof-1 {
    padding: 20px 0;
    position: relative;
    background: #e6f1fa;
  }
  .roof-mob-side {
    content: url("images/roofing-side-mob.jpg");
    width: auto; /* Adjust as needed */
    height: auto; /* Adjust as needed */
  }
  .new-ul{
      padding-left: 0px;
  }
  .w-80{
    width:100%!important;
}
}

.new-img{
    border-radius:10px;
}
.ulclas li::marker {
  color: #14147e; /* Change to your desired color */
}

</style>


<!--Inner Banner-->
<div class="inner__banner inner__banner--roof-1" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="images/roofing-header-mob.png" class="inner_banner_mob showMob" width="600" height="400" alt="Roofing Experts, emergency roof repairs near me">
    		<h1 class="banner_heading">Work With <br class="hideMob">The Best Roofing <br class="hideMob">Experts Near You</h1>
            
            <p class="inner__banner__text w-80">From minor leaks to full roof replacements, we match homeowners with top- rated residential roofing experts near you. </p>
            <div class="banner_quote_box inner__banner__quote-box">
                                    <div class="error-message"></div>

                <div class="banner_quote_box_inner">
                    <form id="myForm" action="roofing-steps.php" method="get">
                        <div class="form_fild">
                         <input type="tel" required type="tel" id="input_field_zip" class="input_field_zip input_field" placeholder="Your ZIP Code" pattern="[0-9]{5}" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" name="zip">

                            <button type="submit" class="quote_btn">Get Quote</button>
                        </div>
                    </form>

                </div>
                
                <div class="form_note_text">


<img src="images/lock.png" alt="lock" width="50" height="67"> <p>Your information is 100% secure & confidential.</p></div>
            </div>
        </div>
    </div>
</div>

<!--promise-->
<!--<div class="promise_sec">-->
<!--	<div class="container">-->
<!--    	<p class="promise_sec_hd">We Partner With The Best Roofing Companies</p>-->
<!--    	<ul class="promise_list">-->
<!--        	<li><img src="images/promise_logo1.png" class="promise_logo1" width="300" height="101" alt="logo1"></li>-->
<!--            <li><img src="images/promise_logo2.png" class="promise_logo2" width="300" height="82" alt="logo1"></li>-->
<!--            <li><img src="images/promise_logo3.png" class="promise_logo3" width="300" height="113" alt="logo1"></li>-->
<!--            <li><img src="images/promise_logo4.png" class="promise_logo4" width="300" height="100" alt="logo1"></li>-->
<!--            <li><img src="images/promise_logo5.png" class="promise_logo5" width="300" height="90" alt="logo1"></li>-->
<!--            <li><img src="images/promise_logo6.png" class="promise_logo6" width="300" height="131" alt="logo1"></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->




<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Turn Your Dream Roofing into Reality with Trusted Local Roofing Experts</h2>
    <p class="common_text">Connect with trusted local roofing experts for energy-efficient roofing, custom solutions, and affordable home upgrades - all in one place.</p>
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
                                <img src="images/win-roof/roofing-asphalt.jpg" alt="Bay & Bow Window">
                                <div class="window-overlay">
                                    <p class="window-name">Roofing Asphalt</p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 5 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-roof/tile-roofing-01.jpg" alt="Picture Window">
                                <div class="window-overlay">
                                    <p class="window-name">Roofing Tile </p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 3 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-roof/roofing-metal.jpg" alt="Double-Hung Window">
                                <div class="window-overlay">
                                    <p class="window-name">Roofing Metal</p>
                                </div>
                            </div>
                        </div>

                        <!-- Window 4 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-roof/roofing-natural-slate.png" alt="Sliding Window">
                                <div class="window-overlay">
                                    <p class="window-name">Roofing Natural Slate</p>
                                </div>
                            </div>
                        </div>
                        <!-- Window 2 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-roof/roofing-cedar-shake.jpg" alt="Casement Window">
                                <div class="window-overlay">
                                    <p class="window-name">Roofing Cedar Shake</p>
                                </div>
                            </div>
                        </div>


                        <!-- Window 6 -->
                        <div class="col-md-4">
                            <div class="window-card">
                                <img src="images/win-roof/flat-roofing.jpg" alt="uPVC Window">
                                <div class="window-overlay">
                                    <p class="window-name">Flat Roofing</p>
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

Get Quote</h4>
      </div>
    </div>

    <form id="quoteForm" method="post" action="roofing-steps">
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
              Roofing Type
            </label>
            <select class="form-select" id="roofingservicetype" name="service" required="">
    <option value="" selected="" disabled=""> Select any one </option>  
    <option value="ROOF COATING SEALANT">ROOF COATING SEALANT</option>
    <option value="ROOFING ASPHALT">ROOFING ASPHALT</option>
    <option value="ROOFING CEDAR SHAKE">ROOFING CEDAR SHAKE</option>
    <option value="ROOFING METAL">ROOFING METAL</option>
    <option value="ROOFING NATURAL SLATE">ROOFING NATURAL SLATE</option>
    <option value="ROOFING TAR TORCHDOWN">ROOFING TAR TORCHDOWN</option>
    <option value="ROOFING TILE">ROOFING TILE</option>
    <option value="ROOFING FLAT FOAM SINGLE PLY">ROOFING FLAT / FOAM / SINGLE PLY</option>
    <option value="WOOD SHAKE OR COMPOSITE">WOOD SHAKE OR COMPOSITE</option>
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

<!--Inner Section_1-->
<div class="inner__section-1">
	<div class="container">
    	<h2 class="common_heading inner_common_head"> Residential Roofing Repairs Done Right <br> Backed by the Best Roofing Experts </h2>
        <img src="images/Affordable Roofing Experts Best Roofers Near You.png" class="inr-s1-img1  roof-mob-side" width="497" height="522" alt="Affordable Roofing Experts Best Roofers Near You">
        <div class="inner__section-1__right">
        	<!--<p class="common_text"><strong>Affordable Excellence: Savings on All Your Roofing Needs!</strong></p>-->
        	
        	<p class="common_text_own">Your roof is your home's first defense - don’t trust it to just anyone.</p>
        	 

            <p class="common_text_own">Our best roofing experts specialize in residential roofing repairs that go beyond patchwork fixes. Whether it's a minor drip or major storm damage, we match you with local pros who solve problems permanently, not temporarily. All handled by certified roofing experts with regional experience.</p>
            <p class="common_text_own"><strong>Here’s what they can do for your home:</strong></p>
            
            <ul class="inner_sec1__point">
            	<li>Emergency Roof Leak Fixes- <span class="lispan">Available 24/7 in select locations.</span></li>
                <li>Asphalt Shingle Replacement- <span class="lispan">Available in multiple colors and grades for all budgets.</span></li>
                <li>Storm & Hail Damage Repair- <span class="lispan">  Pro Tip: Even light hail can void your roof warranty - get it checked</span></li>
                <li>Gutter & Flashing Repair Services- <span class="lispan">Seamless gutter upgrades available for long-term peace of mind.</span></li>
                <li>Skylight Sealing and Leak Repair-  <span class="lispan"> We work with all major skylight brands and custom sizes.</span></li>
                <li>Full Roof Installation & Upgrades-
                </li>
                <ul class="ulclas">
                <div class="row pl-0">
                    <div class="col-lg-12">
       
                        <li class="mt-1"><span class="lispan"> Tailored material suggestions for your location</span></li>
                   </div>
                    <div class="col-lg-12">

                        <li class="mt-1"><span class="lispan"> Upfront estimates</span></li>
                    </div>
                    <div class="col-lg-12">
                         <li class="mt-1"><span class="lispan"> Complete tear-off and install</span></li>
                         
                    </div>
                    <div class="col-lg-12">
                        <li class="mt-1"><span class="lispan"> Clean site handover</span></li>
                    
                    </div>
                    
                </div>
                 </ul>
            </ul>
            
            <div class="clearall"></div>
            <div class="btn_box mt-3">
            	<p class="btn_top_text">Just Takes 2 Minutes</p>
                <a onclick="window.location.href='roofing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Talk to a Roofing Expert<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
            </div>
        </div>
    </div>
</div>


<?php include 'how-works.php';?>

<!--section_2-->
<div class="section_8">
	<div class="container">
	    <h2 class="common_heading mb-5">Why Regular Roofing Inspections <br> Save You Money</h2>  
	    <div class="row d-flex justify-content-center align-items-center">
	        <div class="col-lg-6">
	      <img src="images/roofing-img-1.jpg" class="mw-100 new-img">
	      
	    </div>
	    <div class="col-lg-6">
	          <p class="new-text">Waiting for visible leaks is like waiting for your ceiling to send an invoice. Most roof issues start quietly - and by the time you notice them, you’re already spending more than you should.</p>
	    
	    <p class="new-text">Our best roofing experts recommend at least one inspection per year, especially if:</p>
	   
	   <ul class="new-ul">
	       <li> Your roof is older than 10 years.</li>
	       <li> You’ve recently experienced a storm or strong wind.</li>
	       <li> You see small signs like stains on ceilings or cracked shingles.</li>
	   </ul>
	   <p class="new-text">Early inspections = smaller repairs, less damage, and longer roof life.</p>

 <p class="new-text">Need help fast? Search for affordable roofing near me and we’ll match you with a local expert today.</p>
	    <div class="clearall"></div>
            <div class="btn_box mt-3">
            	<p class="btn_top_text">Just Takes 2 Minutes</p>
                <a onclick="window.location.href='roofing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get a  Roof Inspection <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
            </div>
	    
	    </div>
	    </div>
	    
	    
	     </div>
</div>




<!--<div class="section-3">-->
<!--   <div class="container">-->
<!--    	<h3 class="common_heading inner_common_head">Why Regular Roofing Inspections  <br>Save You Money</h3>-->
<!--        <p class="common_text">Waiting for visible leaks is like waiting for your ceiling to send an invoice. Most roof issues start quietly - and by the time you notice them, you’re already spending more than you should.</p>-->
        
<!--        <div class="row">-->
<!--            <div class="col-lg-6">-->
<!--                <p class="common_text_own">-->
<!-- Our best roofing experts recommend at least one inspection per year, especially if:</p> -->
 
<!-- <ul class="points">-->
<!--     <li>Your roof is older than 10 years</li>-->
<!--     <li>You’ve recently experienced a storm or strong wind</li>-->
<!--     <li>You see small signs like stains on ceilings or cracked shingles</li>-->
<!-- </ul>-->
 
 
<!--            </div>-->
<!--            <div class="col-lg-6">-->
                
<!--            </div>-->
<!--        </div>-->
        
       


<!--        <ul>-->
<!--            <li>-->
                
<!--            </li>-->
<!--        </ul>-->
        
        
<!--    </div> -->
    
    
<!--</div>-->




<!--inner__section-2-->
<div class="roofing_section_2">
	<div class="container">
    	<h3 class="common_heading inner_common_head">Benefits of Roofing <br>Installation, Repair & Upgrade</h3>
        <p class="common_text">Roofing installation by the best roofing experts protects your home’s structure and prevents weather damage, while timely roofing repairs avoid costly issues. Upgrades from the best roofers improve energy efficiency, curb appeal, and property value.</p>
        
        <div class="roofing_sec2_row">
        	<div class="roofing_sec2_row_box">
            	<img src="images/investment.png" alt="best roofers near you">
                <span>To Protect Your Investment.</span>
                <p class="common_text">The best roofing experts stop leaks, mold, and hidden structural damage before they start - keeping your home and family safe from weather-related surprises.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/temp.png" alt="roof repair">
                <span>Repairs Cut Bills, Qualify for Rebates.</span>
                <p class="common_text">Smart homeowners search for affordable housing because timely residential roofing repairs cost far less than full replacements. Catch it early, fix it fast, save big.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/increase.png" alt="Increase Home Value: Remodel or Sell">
                <span>Increase Home Value: Remodel or Sell.</span>
                <p class="common_text">A professionally upgraded roof improves insulation, lowers utility bills, and increases resale value - especially when installed by the best roofers near you who know your region’s climate. </p>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='roofing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Fix My Leak Now<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
        </div>
    </div>
</div>










<?php include'testimonials.php' ?>


<div class="roofing_section_2 blog-section py-5 bg-light">
  <div class="container">

    <div class="text-center mb-5">
      <h3 class="common_heading inner_common_head">
        Everything You Need to Know About Roofing Replacement
      </h3>
      <p class="common_text">
        From classic designs to modern efficiency - explore our blogs to find the best Roofing solutions for your home.
      </p>
    </div>
    
    
    <div class="row d-flex justify-content-center">
        <div class="col-lg-11 col-10 pt-5">
               <!-- Swiper -->
    <div class="swiper blogSwiper">
      <div class="swiper-wrapper">

        <!-- Blog 1 -->
        <div class="swiper-slide">
          <a href="https://easyhomeservice.com/blog/residential-black-metal-roofing" class="text-decoration-none text-dark">
            <div class="card blog-card h-100 shadow-sm border-0">
              <img src="https://easyhomeservice.com/blog/admin/postimages/Residential%20Black%20Metal%20Roofing-8347.jpg" class="card-img-top mb-3" alt="Roofing">
              <div class="card-body blog-card-body">
                <h5 class="card-title fw-semibold mb-2">
                  Trending Residential Black Metal Roofing Options for 2026
                </h5>
                <p class="card-text">
                  Do you want to replace your home's roof? Metal roofing isn't just for industrial structures today.
                </p>
                <span class="bx">Read More →</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Blog 2 -->
        <div class="swiper-slide">
          <a href="https://easyhomeservice.com/blog/the-ultimate-guide-to-know-when-you-call-a-roofing-expert" class="text-decoration-none text-dark">
            <div class="card blog-card h-100 shadow-sm border-0">
              <img src="https://easyhomeservice.com/blog/admin/postimages/20adb42c06fb1e8d539c4f8ae455cb4b.jpg" class="card-img-top mb-3" alt="Roofing">
              <div class="card-body blog-card-body">
                <h5 class="card-title fw-semibold mb-2">
                  The Ultimate Guide to Know When You Call a Roofing Expert
                </h5>
                <p class="card-text">
                  Roofing reflects architectural history shaped by technology and cultural influences.
                </p>
                <span class="bx">Read More →</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Blog 3 -->
        <div class="swiper-slide">
          <a href="https://easyhomeservice.com/blog/residential-black-metal-roofing" class="text-decoration-none text-dark">
            <div class="card blog-card h-100 shadow-sm border-0">
              <img src="https://easyhomeservice.com/blog/admin/postimages/Residential%20Black%20Metal%20Roofing-8347.jpg" class="card-img-top mb-3" alt="Roofing">
              <div class="card-body blog-card-body">
                <h5 class="card-title fw-semibold mb-2">
                  Modern Roofing Trends Homeowners Love
                </h5>
                <p class="card-text">
                  Explore durable, stylish roofing designs that blend beauty and performance.
                </p>
                <span class="bx">Read More →</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Blog 4 -->
        <div class="swiper-slide">
          <a href="https://easyhomeservice.com/blog/the-ultimate-guide-to-know-when-you-call-a-roofing-expert" class="text-decoration-none text-dark">
            <div class="card blog-card h-100 shadow-sm border-0">
              <img src="https://easyhomeservice.com/blog/admin/postimages/20adb42c06fb1e8d539c4f8ae455cb4b.jpg" class="card-img-top mb-3" alt="Roofing">
              <div class="card-body blog-card-body">
                <h5 class="card-title fw-semibold mb-2">
                  Signs It’s Time to Replace Your Roof
                </h5>
                <p class="card-text">
                  Learn when repairs aren’t enough and replacement becomes necessary.
                </p>
                <span class="bx">Read More →</span>
              </div>
            </div>
          </a>
        </div>

      </div>


    </div> 
    
      <!-- Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
        </div>
    </div>

  </div>
</div>
<style>
.blog-section .card {
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  border-radius: 12px;
    text-align: left;
}

.blog-card-body {
  padding: 15px;
}

.blog-section .card-img-top { 
    border-top-left-radius: 8px; 
    border-top-right-radius: 8px; 
    object-fit: contain; 
    transition: transform 0.4s ease; 
    /*box-shadow:1px -2px 10px #b6acac */
    
}

.blog-section .card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.blog-section .card-title {
  color: #1d3557;
  font-size:1.15rem;
}

.blog-section .card-text {
  font-size: 0.95rem;
}
.bx {
  font-weight: 500;
  color: #04d36f;
  display: inline-block;
  font-size: 18px;
}

.swiper {
    padding: 5px 5px;
}

.swiper-button-next,
.swiper-button-prev {
  color: #04d36f;
      top: 65%;
}
.swiper-button-prev {
    left: -1%;
}
.swiper-button-next {
    right: -1%;
}

@media screen and (max-width:768px){
 .swiper-button-prev {
    left: 1%;
}
.swiper-button-next {
    right:1%;
}  
}
</style>

<?php include 'state-cities.php';?>  

<!--section_6-->
<div class="section_6">
	<div class="container">
    	<p class="common_heading inner_common_head">Frequently <br class="showMob">Asked Questions</p>
        
        <div class="py-3 container" style="overflow:hidden;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close" id="hd-one">What types of roofing services do you provide?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Easy Home Service connects you with local roofing contractors for <a href="https://easyhomeservice.com/blog/the-ultimate-guide-to-know-when-you-call-a-roofing-expert" class="link-new ehs-hvac-internal-link">roof repair</a>, replacement, inspection, leak detection, and maintenance. Whether you have shingles, metal, tile, or flat roofing, we’ll match you with trusted local experts to get the job done.</p>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Do you offer emergency roofing services?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Yes, if your roof leaks or suffers storm damage, we’ll help you connect immediately with emergency roofing contractors near you. Quick action prevents structural damage and costly repairs later.</p>
                </div>
            </div>
          
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How do I book a roofing service through Easy Home Service?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Booking is simple. Just fill out our roofing service request form on the website, describe your issue, and we’ll connect you with local roofing pros for estimates or inspections.</p>
                </div>
            </div>
 
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How long does a typical roof replacement take to complete?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Most roof replacements take 1–3 days depending on your roof’s size, material, and weather. Your roofing contractor will give you a clear timeline after a full inspection.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What is the average cost of roof replacement?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Roof replacement prices typically range between $5,000 and $12,000, depending on materials (asphalt, metal, or tile) and home size.</p>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What other home services can I book through Easy Home Service?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Besides roofing, you can also find professionals for <a href="https://easyhomeservice.com/plumbing" class="link-new ehs-hvac-internal-link">Plumbing</a>, <a href="https://easyhomeservice.com/hvac" class="link-new ehs-hvac-internal-link">HVAC</a>, <a href="https://easyhomeservice.com/handyman" class="link-new ehs-hvac-internal-link">Handyman</a>, <a href="https://easyhomeservice.com/electrical" class="link-new ehs-hvac-internal-link">Electrical work</a>, <a href="https://easyhomeservice.com/hvac" class="link-new ehs-hvac-internal-link">Pest Control</a>, <a href="https://easyhomeservice.com/window" class="link-new ehs-hvac-internal-link">Window</a>, <a href="https://easyhomeservice.com/gutter" class="link-new ehs-hvac-internal-link">Gutters</a>, <a href="https://easyhomeservice.com/bathroom" class="link-new ehs-hvac-internal-link">Bath</a>, <a href="https://easyhomeservice.com/solar" class="link-new ehs-hvac-internal-link">Solar</a> and more, all from one trusted platform.</p>
                </div>
            </div>
            
                </div>
                <div class="col-lg-6">
                    
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How soon will a roofing professional contact me after I submit my request?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">You’ll usually get a call or message from a roofing pro within minutes to a day after submitting your service form so you can get help fast.</p>
                </div>
            </div>
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Can I choose the roofing style, colour, and material?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Absolutely! Our contractors offer custom roofing options, including colour, texture, and design preferences from asphalt shingles to metal and clay tiles, so your new roof complements your home’s style.</p>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What’s the difference between asphalt shingles, metal roofs, and tile roofs?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">
                        <ul>
                            <li>Asphalt shingles: Cost-effective, durable, and easy to install.</li>
                            <li>Metal roofs: Energy-efficient and long-lasting, ideal for all climates.</li>
                            <li>Tile roofs: Elegant, fire-resistant, and perfect for hot regions.</li>
                        </ul>
                    </p>
                    <p>Your contractor will recommend the best roofing type based on your home and budget.</p>
                </div>
            </div>


            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Do I have to pay anything to use Easy Home Service?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">No- using Easy Home Service is 100% free for homeowners. We simply connect you to trusted roofing professionals in your area.</p>	
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How soon can roofing work begin after I approve the quote?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Most roofing pros can start your project within a few days, depending on weather conditions and material availability.</p>   	
                </div>
            </div>
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">In which areas do you provide roofing services?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para"><p>
  Easy Home Service connects homeowners with trusted roofing professionals across the United States, including major states like 
  Arizona, 
  <a href="https://easyhomeservice.com/california/roofin" target="_blank" rel="noopener">California</a>, 
  <a href="https://easyhomeservice.com/florida/roofing" target="_blank" rel="noopener">Florida</a>, 
  Maryland, 
  <a href="https://easyhomeservice.com/illinois/roofing" target="_blank" rel="noopener">Illinois</a>, 
  Ohio, 
  North Carolina, 
  <a href="https://easyhomeservice.com/texas/roofing" target="_blank" rel="noopener">Texas</a>,  
  <a href="https://easyhomeservice.com/pennsylvania/roofing" target="_blank" rel="noopener">Pennsylvania</a>
  and 
  <a href="https://easyhomeservice.com/new-york/roofing" target="_blank" rel="noopener">New York</a>. 
  We’re constantly expanding our network to cover more regions and suburbs near you.
</p></p>
                </div>
            </div>
                </div>
            </div>
            
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='roofing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
new Swiper(".blogSwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  speed: 800,

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
  },
});
</script>
<?php include'promise.php' ?>




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

<?php echo $_POST['clickid'];?>

<?php include'footer.php' ?>
</body>
</html>