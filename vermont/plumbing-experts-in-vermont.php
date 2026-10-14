<?php include'../header.php' ?>	
<link rel="stylesheet" href="/css/plumbing-style.css">

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Connect With Trusted Plumbing & Heating Experts in Vermont</h1>
            
            <p class="inner__banner__text">
Easy Home Service helps homeowners connect with reliable plumbing experts in Vermont. Homeowners submit one request and get matched with technicians familiar with the State’s cold climate, older farmhouses, and seasonal property maintenance needs.
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
    <h2 class="common_heading">Residential Plumbing Services We Help You Find in Vermont</h2>

    <p class="common_text">
Lots of houses in Vermont were constructed a long time ago and are equipped with a mixture of copper, PEX, and older steel piping. When exposed to extreme temperature variations, these systems frequently expand and contract, thereby increasing the chances of leaks and pressure problems.

Easy Home Service links homeowners to technicians offering a full range of plumbing and heating services in countryside towns and city neighborhoods. From frozen pipes to failing boilers and water heater replacement, we help homeowners find timely assistance that protects both comfort and property. The services are frequently requested in areas like South Burlington, Essex Junction, and St. Albans, where both modern homes and older properties exist side-by-side.
    </p>

    <?php include '../gallery.php';?>    
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
      <p class="common_text">
From classic plumbing systems to modern efficiency upgrades, explore our blogs to learn more about plumbing solutions that support Vermont homes.
      </p>
    </div>

    <?php include '../blog-slider.php';?>
   
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