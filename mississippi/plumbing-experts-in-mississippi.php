<?php include'../header.php' ?>
<link rel="stylesheet" href="/css/plumbing-style.css">
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
  <div class="container">
    <div class="inner__banner__left">
      <img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
      <h1 class="banner_heading">Connect with Trusted Plumbing Experts in Mississippi</h1>
      <p class="inner__banner__text">Finding the right plumbing help can feel overwhelming. Easy Home Service aids homeowners across Mississippi to connect with plumbing experts who understand local homes, water systems, and everyday plumbing challenges.</p>
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
    <h2 class="common_heading">Expert Residential Plumbing Services: We Help You Find in Mississippi</h2>
    <p class="common_text">Easy Home Service connects homeowners with residential plumbing experts who can manage both the routine plumbing needs and more extensive repairs. The humid climate of Mississippi, the frequent rainfall, and soil conditions may put stress on drains, pipes, and septic systems.</p> <?php include '../gallery.php';?>
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
<div class="section_4"> <?php include '../service.php';?> </div> 
<?php include '../section-include/faq/faq.php';?> 
<?php include'../footer.php' ?> 
<?php include '../scripts/common-scripts.php';?> 
</body>
</html>