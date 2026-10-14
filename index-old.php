<?php
$pagenm = 'index';
?>

<?php include'header.php' ?>	

<!--Banner-->
<div class="banner" id="top_form">
	<div class="container">
    	<div class="banner_left">
        	<p class="bnr_rev_text">
            <img src="images/star.png" class="bnr_star" width="300" height="60" alt="star">
            Helped 22,400 Customers Find Top Contractors<img src="images/bnr_rev_people.png" class="bnr_rev_people hideMob" width="300" height="78" alt="reviews"></p>
            
            <h1 class="banner_heading">Find, Compare, Upgrade-<br>Home Improvement <br> Made Simple!</h1>
            <div class="hideMob">
           		<img src="images/banner_prod.png" class="banner_prod" width="403" height="533" alt="Home Improvement">
            </div>
            <div class="banner_quote_box">
            	<div class="banner_quote_box_inner">
                	<p class="showMob frmHeading-m">Get A Quote</p>
                	<form id="myForm" method="get" onsubmit="return redirectToPage()">
    <div class="form_field">
<select id="serviceDropdown" required class="input_field" onchange="updateAction()">

            <option  value="services" disabled selected>I need help with</option>
            <option value="roofing-steps">Roofing</option>
            <option value="window-steps">Windows</option>
            
            
            <option value="solar-steps">Solar</option>
            <option value="hvac-steps">HVAC</option>
            
            <option value="bathroom-steps">Bathroom</option>
            <option value="kitchen-steps">Kitchen</option>
            
            <option value="gutter-steps">Gutter</option>
            <option value="siding-steps">Siding</option>
            
            <option value="walktub-steps">Walk In Tubs</option>
            <option value="handyman-steps">Handyman</option>
            <option value="homewarranty-steps">Home Warranty</option>
            <option value="allservices">All Services</option>
            
            
    
            
            
            <!-- Add other options as needed -->
        </select>
        <input name="zip" type="text" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); hideError();"
  id="zipCode" class="input_field input_field_zip" placeholder="Your project’s ZIP Code" title="Please enter a valid 5-digit ZIP code" pattern="[0-9]{5}"  maxlength="5" inputmode="numeric"> 
<input type="hidden" name="clickid" value="<?php echo $_GET['clickid'];?>">
<input type="hidden" name="source" value="<?php echo $_GET['source'];?>">
<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'];?>">
<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'];?>">
<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'];?>">
<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'];?>">
<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'];?>">
<input type="hidden" name="fbc" value="<?php echo $_GET['fbc'];?>">
<input type="hidden" name="fbp" value="<?php echo $_GET['fbp'];?>">
<input type="hidden" name="gclid" value="<?php echo $_GET['gclid'];?>">
<input type="hidden" name="eventid" value="<?php echo $_GET['eventid'];?>">

        <button type="submit" onclick="redirectToPage()" class="quote_btn">Get A Quote</button>
    </div>
</form>
                </div>
                
                <div class="form_note_text">
                            <!--<div id="zipError" style="color: red; display: none;">Please enter a valid 5-digit ZIP code</div>-->
                            
                            <img src="images/lock.png" alt="lock" width="50" height="67"> <p>Your information is 100% secure &amp; confidential.</p></div>
            </div>	
            <img src="images/banner_prod.png" class="banner_prod showMob" width="403" height="533" alt="Home Improvement">
        </div>
    </div>
</div>

<!--section_1-->
<div class="section_1">
	<div class="container">
    	<p class="s1_text font-weight-bold">Our Range of Remodeling & Renovation Services</p>
    	<p class="clrwhite"> At Easy Home Service, we offer a broad range of services tailored to your home's unique needs.</p>
        
        <div class="s1_help_box">
        	<div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('roofing')">
            	<a><img src="images/s1_help_icon1.png" width="200" height="200" alt="Roofing"><p>Roofing</p></a></div>
            </div>
            
            <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('window')"><a><img src="images/s1_help_icon2.png" width="200" height="200" alt="Windows"><p >Windows</p></a></div>
            </div>
            
            <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('solar')"><a><img src="images/s1_help_icon3.png" width="200" height="200" alt="Solar"><p>Solar</p></a></div>
            </div>
            
            <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('hvac')"><a><img src="images/s1_help_icon4.png" width="200" height="200" alt="HVAC"><p>HVAC</p></a></div>
            </div>
            
            <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('bathroom')"><a><img src="images/s1_help_icon5.png" width="200" height="200" alt="Bathroom"><p>Bathroom</p></a></div>
            </div>
                    <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('handyman')"><a><img src="images/iconhandyman.svg" width="200" height="200" alt="Handyman"><p>Handyman</p></a></div>
            </div>
            
            <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('homewarranty')"><a><img src="https://easyhomeservice.com/images/iconhomewarranty.svg"  width="200" height="200" alt="Hme Warranty"><p>Home Warranty</p></a></div>
            </div>
            <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('kitchen')"><a><img src="images/s1_help_icon6.png"  width="200" height="200" alt="Kitchen"><p>Kitchen</p></a></div>
            </div>
            
            <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="redirectToCategory('gutter')"><a><img src="images/s1_help_icon7.png" width="200" height="200" alt="Gutter"><p>Gutter</p></a></div>
            </div>
            

            
            <!--<div class="s1_help_box_col">-->
            <!--	<div class="hlp_img_box" onclick="window.location.href='siding?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon9.png" width="200" height="200" alt="icon"><p>Siding</p></a></div>-->
            <!--</div>-->
            
            <div class="s1_help_box_col ">
            	<div class="hlp_img_box" onclick="redirectToCategory('walktub')"><a><img src="images/s1_help_icon10.png" width="200" height="200" alt="Walk in tubes"><p>Walk-In Tubs</p></a></div>
            </div>
            
            
               <div class="s1_help_box_col ">
            	<div class="hlp_img_box" onclick="redirectToCategory('allservices')"><a><img src="images/viewallicon.svg" width="200" height="200" alt="View More"><p>View More</p></a></div>
            </div>
    
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
        	<a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text white">Rapid service. Quick Response!</p>
        </div>
    </div>
</div>

<!--promise-->
<!--<div class="promise_sec">-->
<!--	<div class="container">-->
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





<!--section_2-->
<div class="section_2">
	<div class="container">
    	<div class="s2_right">
        	<h2 class="common_heading">How It Works<br>In Just 3 Simple Steps</h2>
           <img src="images/beforeafter1.webp" class="s2_img" width="555" height="504" alt="Home Maintenance Services">
            <ul class="s2_step_list">
                <li>
                	<div class="s2_point"><div></div></div>
                    <div class="step_text">Step 1</div>
                    <span>Tell us about your home improvement needs.</span>
                    <p class="common_text">Whether it's upgrading a kitchen, refinishing floors, or enhancing outdoor spaces.</p>
                </li>
                
                <li>
                	<div class="s2_point"><div></div></div>
                    <div class="step_text">Step 2</div>
                    <span>Let certified local vendors compete for your business</span>
                    <p class="common_text">By providing competitive quotes and personalized solutions.</p>
                </li>
                
                <li>
                	<div class="s2_point"><div></div></div>
                    <div class="step_text">Step 3</div>
                    <span>Save big on seamless home improvement</span>
                    <p class="common_text">Turning your vision into reality without exceeding your budget.</p>
                </li>
            </ul>
            
            <div class="clearall"></div>
            <div class="btn_box">
                <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                <p class="btn_text">Rapid service. Quick Response!</p>
            </div>
        </div>
    </div>
</div>

<!--section_3-->
<div class="section_3">
	<div class="container">
    	<div class="s3_box">
        	<div class="s3_box_inner">
            	<p class="s3_text">Introducing</p>
                <h3 class="common_heading white">The Easiest Solution<br>To Compare Your <br class="showMob">Home Improvement</h3>
                
                <img src="images/s3_box_img.jpg" class="showMob s3_box_img" width="600" height="400" alt="Easy Home Service">
                
                <p class="common_text white">Discover the easiest solution for comparing your home improvement options. Our user-friendly platform streamlines the process, allowing you to effortlessly evaluate and choose the best solutions tailored to your needs.</p>
                <p class="common_text white">Simplify your decision-making and embark on your home improvement journey with confidence.</p>
                
                <div class="clearall"></div>
                <div class="btn_box">
                    <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                    <p class="btn_text white">Rapid service. Quick Response!</p>
                </div>	
            </div>
        </div>
    </div>
</div>

<!--section_4-->
<div class="section_4">
	<div class="container">
    	<p class="common_heading">Why Choose Us</p>
        <p class="common_text">Choose us for a hassle-free and expert-driven home improvement experience, delivering results that exceed expectations every time.</p>
        
        <div class="s4_choose_box">
        	<div class="s4_choose_bx_col">
            	<img src="images/s4_icon1.png" width="95" height="95" alt="Quick Application">
                <span>Quick<br>Application</span>
                <p class="common_text">Swiftly complete your application with our quick and efficient process.</p>
            </div>
            
            <div class="s4_choose_bx_col">
            	<img src="images/s4_icon2.png" width="95" height="95" alt="Easy to Compare">
                <span>Easy To<br>Compare</span>
              	<p class="common_text">Effortlessly compare options with our user-friendly platform for a seamless experience.</p>
            </div>
            
            <div class="s4_choose_bx_col">
            	<img src="images/s4_icon3.png" width="95" height="95" alt="No Obligation Fast services">
                <span>No Obligation,<br>Fast Service</span>
                <p class="common_text">Experience rapid service for your needs—quick, efficient, and commitment-free.</p>
            </div>
            
            <div class="s4_choose_bx_col">
            	<img src="images/s4_icon4.png" width="95" height="95" alt="Quick quality services">
                <span>Quick, Quality<br>Service</span>
                <p class="common_text">Experience quick, quality service that meets your needs efficiently and effectively.</p>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text">Rapid service. Quick Response!</p>
        </div>
    </div>
</div>

<!--section_5-->
<!--<div class="section_5">-->
<!--	<div class="container">-->
<!--    	<div class="s5_left">-->
<!--        	<p class="common_heading">What Our Customers <br class="showMob">Are Saying...</p>-->
<!--            <p class="s5_text">Helped 22,400 Customers Find <br class="showMob">Top Contractors</p>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="clearall"></div>-->
<!--    <div class="customer_review_row">-->
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic">Bathroom</p>-->
                
<!--                <p class="common_text">Thrilled with our new bathroom! From design to installation, the team's attention to detail and style transformed our space into a sanctuary. Highly recommend their services for a seamless and satisfying experience.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img1.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Jennifer N.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#deffef;">Kitchen</p>-->
                
<!--                <p class="common_text">We're thrilled with our new bathroom! The team's attention to detail and style transformed our space into a sanctuary. Highly recommend their services for a seamless and satisfying experience.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img2.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Jennifer N.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#fff5de;">Roofing</p>-->
                
<!--                <p class="common_text">Absolutely delighted with the roofing transformation! The team's expertise, from planning to installation, turned our house into a secure and stylish haven. Highly recommend their roofing services for a seamless and gratifying experience.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img3.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Linda T.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#ffdede;">Walk-In Tub</p>-->
                
<!--                <p class="common_text">Thrilled with the seamless walk-in tub installation! The team's efficient expertise in creating an accessible yet stylish bathroom made a significant impact. Highly recommend for a practical and stylish solution.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img4.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Alex John.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#fff5de;">Roofing</p>-->
                
<!--                <p class="common_text">We're highly satisfied with the roofing services. The team's professionalism, attention to detail, and timely completion exceeded expectations. Our new roof enhances our home's aesthetics and provides peace of mind. Highly recommend their reliable work. Thanks for a job well done!</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img5.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Linda T.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<!--section_6-->
<div class="section_6">
	<div class="container">
    	<p class="common_heading">Frequently <br class="showMob">Asked Questions</p>
        
        <div class="faq-container" style="overflow:hidden;">
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-open" id="hd-one">What types of home improvement services do you offer?
</div>
                <div class="acdn-content">
                	<p class="acdn-para">We offer a wide range of services, including but not limited to kitchen and bathroom renovations, flooring installation, roofing, solar panel installation, and more.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How do I get started with a home improvement project?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">To get started, simply contact us for a consultation. We'll discuss your needs, budget, and timeline to create a customized plan for your project.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Are your contractors licensed and insured?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Yes, all our contractors are licensed and insured to ensure the highest quality of work and protection for both parties involved.</p>
                </div>
            </div>
            
            <!--<div class="up-slide-dwn">-->
            <!--    <div class="accordion acdn-heading accordion-close">Can you provide references or examples of past projects?</div>-->
            <!--    <div class="acdn-content" style="display:none;">-->
            <!--    	<p class="acdn-para">Absolutely! We can provide references and showcase our portfolio of past projects to give you a better understanding of our capabilities and the quality of our work.</p>-->
            <!--    </div>-->
            <!--</div>-->
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What is the estimated timeline for a typical home improvement project?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">The timeline varies depending on the scope of the project. We'll provide a detailed schedule during the consultation phase, outlining each step of the process.</p>
                </div>
            </div>
            
            <!--<div class="up-slide-dwn">-->
            <!--    <div class="accordion acdn-heading accordion-close">How do you handle project changes or unexpected issues?</div>-->
            <!--    <div class="acdn-content" style="display:none;">-->
            <!--    	<p class="acdn-para">We maintain open communication throughout the project, and any changes or unexpected issues will be discussed with you promptly. We work collaboratively to find the best solutions.</p>-->
            <!--    </div>-->
            <!--</div>-->
            
            
            <!--     <div class="up-slide-dwn">-->
            <!--    <div class="accordion acdn-heading accordion-close">Do you offer financing options for home improvement projects?</div>-->
            <!--    <div class="acdn-content" style="display:none;">-->
            <!--    	<p class="acdn-para">Yes, we offer flexible financing options to accommodate various budgets. Our goal is to make quality home improvement accessible to all.</p>-->
            <!--    </div>-->
            <!--</div>-->
            
            
            <!--     <div class="up-slide-dwn">-->
            <!--    <div class="accordion acdn-heading accordion-close">What sets your home improvement services apart from others?</div>-->
            <!--    <div class="acdn-content" style="display:none;">-->
            <!--    	<p class="acdn-para">Our commitment to quality, customer satisfaction, and attention to detail sets us apart. We prioritize open communication, transparency, and delivering results that exceed expectations.</p>-->
            <!--    </div>-->
            <!--</div>-->
            
            
            <!--      <div class="up-slide-dwn">-->
            <!--    <div class="accordion acdn-heading accordion-close">Is there a warranty on your home improvement work?</div>-->
            <!--    <div class="acdn-content" style="display:none;">-->
            <!--    	<p class="acdn-para">Yes, we offer warranties on our work to provide you with peace of mind and assurance in the durability and quality of the improvements made.</p>-->
            <!--    </div>-->
            <!--</div>-->
            
              
            <!--      <div class="up-slide-dwn">-->
            <!--    <div class="accordion acdn-heading accordion-close">How can I request a quote for a home improvement project?</div>-->
            <!--    <div class="acdn-content" style="display:none;">-->
            <!--    	<p class="acdn-para">You can easily request a quote by filling out our online form or contacting us directly. We'll respond promptly and schedule a consultation to discuss your project in detail.</p>-->
            <!--    </div>-->
            <!--</div>-->
            
            
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text">Rapid service. Quick Response!</p>
        </div>
    </div>
</div>
<?php include'promise.php' ?>
<?php include'footer.php' ?>


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

<script>
    function redirectToPage() {
        var selectedOption = document.getElementById("serviceDropdown").value;
        var dropdownElement = document.getElementById("serviceDropdown");

        // Check if the selected option is the default one with value "services"
        if (selectedOption === "services") {
            // Show a tooltip error
            dropdownElement.title = "Please select a valid option.";

            // Add red border to the dropdown
            dropdownElement.style.border = "1px solid red";

            return false;
        }

        var zipCodeInput = document.getElementById("zipCode");
        var zipCode = zipCodeInput.value;

        // Validate ZIP code using a regular expression
        var zipRegex = /^\d{5}$/; // 5-digit ZIP code
        if (!zipRegex.test(zipCode)) {
            // Display error message
            document.getElementById("zipError").style.display = "block";

            // Add red border to the dropdown
            dropdownElement.style.border = "2px solid red";

            return false;
        }

        // Reset the tooltip and border when there is no error
        dropdownElement.title = "";
        dropdownElement.style.border = "";

        // Construct the action URL based on the selected option
        var actionUrl = selectedOption + ".php";

        // Redirect to the constructed action URL
        window.location.href = actionUrl;

        // Return true to allow form submission after redirection
        return true;
    }

    // Function to hide the error message on input change
    function hideError() {
        var dropdownElement = document.getElementById("serviceDropdown");

        // Reset the error styles
        dropdownElement.title = "";
        dropdownElement.style.border = "";

        document.getElementById("zipError").style.display = "none";
    }

    // Function to update the action URL when the service dropdown changes
    function updateAction() {
        var selectedOption = document.getElementById("serviceDropdown").value;
        var formElement = document.getElementById("myForm"); // Replace "myForm" with your form ID
        formElement.action = selectedOption;

        // Reset the tooltip and border when the dropdown changes
        document.getElementById("serviceDropdown").title = "";
        document.getElementById("serviceDropdown").style.border = "";
    }
</script>


</body>
</html>