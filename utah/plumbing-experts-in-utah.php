<?php include'../header.php' ?>	
<link rel="stylesheet" href="/css/plumbing-style.css">

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Connect With Trusted Experts in Utah</h1>
            
            <p class="inner__banner__text">
Easy Home Service helps homeowners connect with dependable plumbing in Salt Lake City and surrounding Utah communities. Instead of searching through multiple listings for a plumbing company near me, homeowners can submit one request and get matched with experienced local technicians familiar.
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
    <h2 class="common_heading">Residential Plumbing Services We Help You Find in Utah</h2>

    <p class="common_text">
Utah homes have a unique plumbing challenge: mineral-heavy water. Hard water gradually builds scale inside pipes, fixtures, and water heaters. Many homeowners first notice it as reduced water pressure or chalky residue on faucets, but inside pipes, it restricts flow and damages appliances.
Easy Home Service helps homeowners find trustworthy professionals who provide complete plumbing services in Utah, whether it is for regular repairs or system upgrades. The mentioned services are commonly requested across West Jordan, Sandy, and growing neighborhoods near Lehi and Draper, where rapid development is combined with the varying soil conditions.
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
From classic plumbing systems to modern efficiency upgrades, explore our blogs to learn more about plumbing solutions that support Utah homes.
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