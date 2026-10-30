<?php include'../header.php' ?>
<link rel="stylesheet" href="/css/plumbing-style.css">
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
  <div class="container">
    <div class="inner__banner__left">
      <img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
      <h1 class="banner_heading">Connect with Trusted Plumbing Experts in Wyoming</h1>
      <p class="inner__banner__text">Find plumbing experts in Wyoming with Easy Home Service and get support for your residential plumbing issues. From single-family homes in Sheridan and Cheyenne to rural properties across northern and central Wyoming, we help homeowners connect with experts who know local plumbing systems as well as the unique challenges associated with severe weather. If you are searching for a plumber or need emergency plumbing services, Easy Home Service helps you reach local plumbing experts who can respond quickly and help protect your home from water damage and system failures. </p>
      <div class="banner_quote_box inner__banner__quote-box">
        <div class="error-message"></div>
        <div class="banner_quote_box_inner">
          <form id="myForm" action="/plumbing-steps.php" method="get">
            <div class="form_fild">
              <input required type="tel" id="input_field_zip" class="input_field input_field_zip" placeholder="Your ZIP Code" pattern="[0-9]{5}" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" name="zip">
              <button type="submit" class="quote_btn">Get Quote Now</button>
            </div>
          </form>
        </div>
        <div class="form_note_text">
          <img src="/images/lock.png" alt="lock" width="50" height="67">
          <p>Your information is 100% secure & confidential.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Expert Residential Plumbing Services We Help You Find in Wyoming</h2>
    <p class="common_text">Easy Home Service helps homeowners find reliable residential plumbing support across Wyoming, covering both routine repairs and urgent emergency plumbing 24/7 situations that require immediate attention. Our platform supports homeowners in urban towns, smaller communities, and rural regions throughout the state.</p> 
    <?php include '../gallery.php';?>
  </div>
</div> 
<?php include '../how-works.php';?> 
<?php include '../section-include/emergency-services/emergency-services.php'; ?> 
<?php include '../section-include/cta/plumbing.php';?> 
<?php include '../section-include/tabcontent/tab-section.php';?> 
<?php include '../section-include/inner-section/inner-section.php';?> 
<?php include '../section-include/blog-section/blog-slider.php'; ?> 
<?php include '../section-include/benefits/benefits.php'; ?> 
<?php include'../testimonials.php' ?> 
<?php include '../section-include/cities/cities-section.php'; ?> 
<?php include '../state-cities.php';?> 
<?php include '../section-include/faq/faq.php';?> 
<?php include'../footer.php' ?> 
<?php include '../scripts/common-scripts.php';?> 
</body>
</html>