<?php include'../header.php' ?>
<link rel="stylesheet" href="/css/hvac-style.css">
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_hvac" id="top_form">
  <div class="container">
    <div class="inner__banner__left">
      <img src="/images/hvac_bnr_mob.webp" class="inner_banner_mob showMob" width="600" height="400" alt="hvac services experts, hvac services, commercial hvac repair near me">
      <h1 class="banner_heading">Connect with HVAC Services in Vermont </h1>
      <p class="inner__banner__text">Looking for reliable, energy-efficient HVAC services in Vermont? Easy Home Service connects you with trusted local experts for heating repair, AC services, installation, and maintenance-keeping your home warm, safe, and comfortable through long winters, heavy snow, and seasonal moisture year-round.</p>
      <div class="banner_quote_box inner__banner__quote-box">
        <div class="error-message"></div>
        <div class="banner_quote_box_inner">
          <form id="myForm" action="/hvac-steps.php" method="get">
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
    <h2 class="common_heading">Expert Residential HVAC Services in Vermont: We Help You Find</h2>
    <p class="common_text">From emergency furnace repairs to complete HVAC system upgrades, Easy Home Service connects Vermont homeowners with experienced HVAC professionals across the state. Our services are designed for Vermont’s cold climate, rural properties, and energy-efficiency requirements.</p> 
    <?php include '../gallery.php';?>
  </div>
</div>
<?php include '../section-include/tabcontent/tab-section.php';?>  
<?php include '../how-works.php';?>
<?php include '../section-include/inner-section/inner-section.php';?>
<?php include '../section-include/blog-section/blog-slider.php'; ?>
<?php include '../section-include/benefits/benefits.php'; ?>

<?php include'../testimonials.php' ?>
<?php include '../section-include/cities/cities-section.php'; ?> 
<div class="section_4"> <?php include '../service.php';?> </div> 
<?php include '../section-include/faq/faq.php';?>
<!--promise--> <?php include'../promise.php' ?>
<?php include'../footer.php' ?> 
<?php include '../scripts/hvac.php';?> 
</body>
</html>