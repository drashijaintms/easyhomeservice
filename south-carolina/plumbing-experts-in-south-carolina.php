<?php include'../header.php' ?>	
<link rel="stylesheet" href="/css/plumbing-style.css">

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Connect With Trusted Plumbing Experts in South Carolina</h1>
            
            <p class="inner__banner__text">Plumbing problems in South Carolina often differ. Coastal moisture, older pipe materials, and heavy seasonal water use can all affect how plumbing systems perform. Easy Home Service helps homeowners across the state to connect with plumbing experts who understand these conditions and know how to address them correctly.
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
                
                <div class="form_note_text"><img src="/images/lock.png" alt="lock" width="50" height="67"> <p>Your information is 100% secure & confidential.</p></div>
            </div>
        </div>
    </div>
</div>

<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Residential Plumbing Services in South Carolina: We Help You Find the Right Help</h2>
    <p class="common_text">Searching for a plumber in South Carolina often means sorting through dozens of options without knowing who truly understands your issue. Easy Home Service makes it easy for homeowners to get in touch with plumbing professionals who are dedicated to residential plumbing systems and provide practical, long-term solutions.
From everyday plumbing repairs to urgent plumbing service needs, we support homeowners across SC who go the extra mile, explaining the problems understandably and ensuring safety is the top priority.
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