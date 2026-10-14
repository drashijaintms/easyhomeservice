<?php include'header.php' ?>	

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_handyman" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="images/mobilebannerhandy.webp" class="inner_banner_mob showMob" width="600" height="400" alt="handyman experts, affordable handyman services, handyman helper">
    		<h1 class="banner_heading">Find & Hire
 <br class="hideMob">the Best Handyman
 <br class="hideMob">Experts in No Time!</h1>
            
            <p class="inner__banner__text">We help you find certified top rated Handyman service providers in your <br class="showDesk">area, so you can compare quotes & get the best deal. </p>
            <div class="banner_quote_box inner__banner__quote-box">
                <div class="error-message"></div>

                <div class="banner_quote_box_inner">
                    <form id="myForm" action="handyman-steps.php" method="get">
                        <div class="form_fild">
                            <input required type="tel" id="input_field_zip" class="input_field input_field_zip" placeholder="Your ZIP Code" pattern="[0-9]{5}" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" name="zip">
                            <button type="submit" class="quote_btn">Get A Quote</button>
                        </div>
                    </form>
                </div>
                
                <div class="form_note_text"><img src="images/lock.png" alt="lock" width="50" height="67"> <p>Your information is 100% secure & confidential.</p></div>
            </div>
        </div>
    </div>
</div>

<!--promise-->
<!--<div class="promise_sec">-->
<!--	<div class="container">-->
<!--    	<p class="promise_sec_hd">We Partner With The Best Handyman Companies</p>-->
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



<!--Inner Section_1-->
<div class="inner__section-1">
	<div class="container">
    	<h2 class="common_heading inner_common_head">We Help You Save On All<br> Your Handyman Projects</h2>
        <p class="common_text">Enhance your comfort and energy efficiency with our skilled handyman services. Rely on us for cost-effective solutions to address your painting, plumbing, or maintainence needs. We guarantee a smooth, budget-friendly transition to a well-regulated environment in your home or business without compromising on quality with our handyman services.</p>
        <img src="images/handymanside.jpg" alt="top rated handyman services, handyman experts, home maintenance service plans" class="inr-s1-img1" width="497" height="522">
        <div class="inner__section-1__right">
        	<p class="common_text"><strong>Elevate your comfort with our personalized handyman solutions!</strong></p>
            <p class="common_text">Enhance your comfort with our skilled handyman services, offering customized solutions to meet your specific needs. Our seamless approach guarantees a cost-effective transition to improved conditions without compromising quality.</p>
            <p class="common_text">Count on us to enhance the durability and lifespan of your home systems with our handyman expertise, all while keeping it cost-effective.</p>

  
           <ul class="inner_sec1__point">
    <li>Customized Handyman Solutions.</li>
    <li>Cost-Effective Comfort.</li>
    <li>Skilled Handyman Services.</li>
    <li>Premium Atmosphere.</li>
</ul>
            
            <div class="clearall"></div>
            <div class="btn_box">
            	<p class="btn_top_text">Just Takes 2 Minutes</p>
                <a onclick="window.location.href='handyman-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
            </div>
        </div>
    </div>
</div>

<!--inner__section-2-->
<div class="roofing_section_2">
	<div class="container">
    	<h3 class="common_heading inner_common_head">Benefits of Handyman<br>Installation, Repair & Upgrade</h3>
        <p class="common_text">Handyman services, including installation, repair, and upgrades, not only enhance indoor comfort but also contribute to energy savings and improve the overall efficiency of your home or business environment.</p>
        
        <div class="roofing_sec2_row">
        	<div class="roofing_sec2_row_box">
            	<img src="images/investment.png" alt="handyman solutions">
                <span>Safeguard Your Investment</span>
                <p class="common_text">Investing in professional handyman services safeguards your property, ensuring longevity, resilience, and added value. Trust us to preserve and enhance your investment with quality installations, repairs, and upgrades tailored to your unique needs.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/temp.png" alt="Repairs Cut Bills, Qualify for Rebates.">
                <span>Repairs Cut Bills, Qualify for Rebates.</span>
                <p class="common_text">Timely handyman services not only extend the lifespan of your home but also offer energy efficiency benefits.Furthermore, these repairs often qualify for valuable rebates, making them a smart and cost-effective investment.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/increase.png" alt="Increase Home Value: Remodel or Sell.">
                <span>Increase Home Value: Remodel or Sell.</span>
                <p class="common_text">Remodeling with handyman services adds value to your home, making it a smart investment for future sales. Strategic upgrades improve both the living experience and market appeal, ensuring a competitive edge in real estate.</p>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='handyman-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
        </div>
    </div>
</div>

<!--roofing_section_3-->
<!--<div class="section_2 roofing_section_3">-->
<!--	<div class="container">-->
<!--    	<p class="common_heading inner_common_head">How It Works<br>In Just 3 Simple Steps</p>-->
<!--        <p class="common_text">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. <br class="hideMob">Duissed odio sit amet nibh vulputate cursus a sit amet mauris.</p>-->
        
<!--        <div class="s2_step_box">-->
<!--        	<div class="s2_step_col s2bg1">-->
<!--            	<p class="step_num">01</p>-->
<!--                <p class="step_head">Connect With HVAC Pros</p>-->
<!--                <p class="common_text">Proin gravida velit auctor aliquet lorem quis bibendum auctor, nisi elit consequat ipsum</p>-->
<!--                <img src="images/step_img1.jpg" class="step_img" width="183" height="207" alt="img">-->
<!--            </div>-->
            
<!--            <div class="s2_step_col s2bg2">-->
<!--            	<p class="step_num">02</p>-->
<!--                <p class="step_head">Predict Your HVAC Budget</p>-->
<!--                <p class="common_text">Proin gravida velit auctor aliquet lorem quis bibendum auctor, nisi elit consequat ipsum</p>-->
<!--                <img src="images/step_img2.jpg" class="step_img" width="183" height="206" alt="img">-->
<!--            </div>-->
            
<!--            <div class="s2_step_col s2bg3">-->
<!--            	<p class="step_num">03</p>-->
<!--                <p class="step_head">Request HVAC Quotes</p>-->
<!--                <p class="common_text">Proin gravida velit auctor aliquet lorem quis bibendum auctor, nisi elit consequat ipsum</p>-->
<!--                <img src="images/step_img3.jpg" class="step_img" width="183" height="206" alt="img">-->
<!--            </div>-->
<!--        </div>-->
        
            
<!--        <div class="clearall"></div>-->
<!--        <div class="btn_box">-->
<!--            <p class="btn_top_text">Just Takes 2 Minutes</p>-->
<!--            <a onclick="window.location.href='handyman-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>-->
<!--            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php include'how-it-works.php' ?>



<!--section_5-->
<!--<div class="section_5">-->
<!--	<div class="container">-->
<!--    	<div class="s5_left">-->
<!--        	<p class="common_heading inner_common_head">What Our Customers <br class="showMob">Are Saying...</p>-->
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
                
<!--                <p class="common_text">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulputate cursus amet mauris. Morbi accumsan ipsum velit tellus tincidunt auctor.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img1.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Jennifer N.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#deffef;">Kitchen</p>-->
                
<!--                <p class="common_text">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulputate cursus amet mauris. Morbi accumsan ipsum velit tellus tincidunt auctor.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img2.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Jennifer N.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#fff5de;">Roofing</p>-->
                
<!--                <p class="common_text">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulputate cursus amet mauris. Morbi accumsan ipsum velit tellus tincidunt auctor.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img3.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Linda T.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#ffdede;">Walk-In Tub</p>-->
                
<!--                <p class="common_text">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulputate cursus amet mauris. Morbi accumsan ipsum velit tellus tincidunt auctor.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img4.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Alex John.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="customer_review_col">-->
<!--            <div class="cust_rev_col_inner">-->
<!--                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">-->
<!--                <img src="images/star.png" class="star" width="300" height="60" alt="star">-->
<!--                <p class="review_topic" style="background:#fff5de;">Roofing</p>-->
                
<!--                <p class="common_text">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulputate cursus amet mauris. Morbi accumsan ipsum velit tellus tincidunt auctor.</p>-->
                
<!--                <p class="customer_name"><img src="images/cust_review_img5.jpg" class="cust_review_img" width="68" height="68" alt="img"><span>Linda T.</span> Verified Subscriber</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php include'testimonials.php' ?>


<!--section_6-->
<div class="section_6">
	<div class="container">
    	<p class="common_heading inner_common_head">Frequently <br class="showMob">Asked Questions</p>
        
        <div class="faq-container" style="overflow:hidden;">
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-open" id="hd-one">What services do your handyman provide?</div>
                <div class="acdn-content">
                	<p class="acdn-para">Our handyman offer a wide range of services, including but not limited to home repairs, installations, maintenance, painting, and general household maintenance.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How do I request handyman services?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">You can easily request our handyman services by contacting us through phone, email, or our online platform. We'll guide you through the process and schedule a convenient time for the service.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Are your handymen licensed and insured?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Yes, all our handymen are licensed professionals, and we ensure they are fully insured. This provides you with peace of mind and protection in case of any unforeseen incidents.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What areas do you serve?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">We provide handyman services in Electrical,Plumbing,Painting,etc. Check with us to confirm if your location is within our coverage.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How much do your handyman services cost?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">The cost of our handyman services varies based on the type of work and the time required. We provide transparent pricing, and our team will discuss the estimate with you before starting any job.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Can I get a quote before booking the service?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Yes, we offer free quotes for our handyman services. Simply provide details about the work you need, and we'll give you an estimate.</p>
                </div>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='handyman-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
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
</body>
</html>