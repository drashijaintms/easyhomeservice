<?php include'../header.php' ?>	
<link rel="stylesheet" href="/css/plumbing-style.css">

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Connect with Trusted Plumbing Experts in Washington</h1>
            
            <p class="inner__banner__text">
Easy Home Service helps homeowners connect with experienced plumbing experts in Washington. Instead of spending hours comparing different plumbing companies, homeowners only have to make one request and then get matched with technicians who are experts in local plumbing systems.
            </p>

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
    <h2 class="common_heading">Residential Plumbing Services: We Help You Find in Washington</h2>

    <p class="common_text">
Washington homes range from historic craftsman houses in Seattle to modern developments in Redmond, Kent, and Vancouver, WA. Each type of property has different plumbing needs. Besides this, high moisture levels in the air lead to an increased risk of corrosion, pipe wear, and hidden leaks.
Easy Home Service connects homeowners with professionals providing full residential plumbing services. Whether it is a +late-night water leak or a planned upgrade of pipes, our purpose is to help homeowners get hold of trustworthy plumbing services quickly and safely. These services are suitable for single-family houses, townhomes, apartments, and rental properties across the state.
    </p>

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