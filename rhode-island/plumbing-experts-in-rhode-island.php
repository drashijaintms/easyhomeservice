<?php include'../header.php' ?>	
<link rel="stylesheet" href="/css/plumbing-style.css">

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Connect With Trusted Plumbing Experts in Rhode Island</h1>
            
            <p class="inner__banner__text">
Easy Home Service helps residents connect with a reliable plumber in Rhode Island without the stress of calling multiple contractors. Instead of guessing which listing is trustworthy, homeowners can quickly get connected with experienced professionals familiar with local plumbing systems.
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
    <h2 class="common_heading">Expert Residential Plumbing Services We Help You Find in Rhode Island</h2>

    <p class="common_text">
Plumbing problems in Rhode Island homes often start quietly. A musty basement smell after a shower of rain, water pressure going down in the shower, or a slow kitchen drain are signs that something is not quite right. Since many homes in the state have their plumbing through the basement or crawlspace, leaks may go unnoticed for weeks.
Easy Home Service connects homeowners with trusted plumbing companies in Rhode Island, handling both small repairs and complete system upgrades. Our platform focuses on helping homeowners who want to fix a small plumbing problem before it leads to water damage, mold growth, or costly restoration work.
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