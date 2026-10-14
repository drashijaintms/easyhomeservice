<?php include'../header.php' ?>
<link rel="stylesheet" href="/css/plumbing-style.css">
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
  <div class="container">
    <div class="inner__banner__left">
      <img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
      <h1 class="banner_heading">Connect with Trusted Plumbing Experts in Nevada</h1>
      <p class="inner__banner__text">Easy Home Service aids homeowners in connecting with experienced plumbing experts across Nevada. They get access for routine plumbing needs and urgent situations. </p>
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
    <h2 class="common_heading">Expert Residential Plumbing Services We Help You Find in Nevada</h2>
    <p class="common_text">We help you get in touch quickly and very easily with local plumbing experts who provide residential plumbing support across Nevada. Services cover both planned repairs and emergency plumbing services, helping homeowners address problems before they escalate.</p> <?php include '../gallery.php';?>
  </div>
</div> 
<?php include '../how-works.php';?> 
<?php include '../section-include/emergency-services/emergency-services.php'; ?>  
<?php include '../section-include/cta/plumbing.php';?> 
<?php include '../section-include/tabcontent/tab-section.php';?>
<?php include '../section-include/inner-section/inner-section.php';?>
<div class="roofing_section_2 blog-section pb-5 bg-light pt-0">
  <div class="container">
    <div class="text-center">
      <h2 class="common_heading inner_common_head">Everything Homeowners Need to Know About Plumbing Services</h2>
      <p class="common_text">From classic designs to modern efficiency - explore our blogs to find the best Plumbing solutions for your home.</p>
    </div> <?php include '../blog-slider.php';?>
  </div>
</div> 
<?php include '../section-include/benefits/benefits.php'; ?> 
<?php include'../testimonials.php' ?> 
<?php include '../section-include/cities/cities-section.php'; ?> 
<div class="section_4"> <?php include '../service.php';?> </div> 
<?php include '../section-include/faq/faq.php';?> 
<?php include'../footer.php' ?> 
<?php include '../scripts/common-scripts.php';?>
</body>
</html>