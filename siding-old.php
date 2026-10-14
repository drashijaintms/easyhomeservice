
<?php include'header.php' ?>	

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_siding" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="images/siding_bnr_mob.jpg" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Find Top Rated <br class="hideMob">Siding Contractors <br class="hideMob">In Your Area, Fast</h1>
            
            <p class="inner__banner__text">We help you find certified top rated siding contractors in your <br class="showDesk">area, so you can compare quotes & get the best deal. </p>
            <div class="banner_quote_box inner__banner__quote-box">
<div class="error-message"></div>

                <div class="banner_quote_box_inner">
                    <form id="myForm" action="siding-steps.php" method="get">
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
<!--    	<p class="promise_sec_hd">We Partner With The Best Siding Companies</p>-->
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
    	<p class="common_heading inner_common_head">We Help You Save On All<br> Your Siding Installation</p>
        <p class="common_text">Enhance the curb appeal, durability, and energy efficiency of your home with our expert siding services. We specialize in delivering high-quality, tailored solutions that protect and beautify your property. Trust us to provide seamless and budget-friendly services, ensuring your home's exterior stands the test of time with style and resilience.</p>
        <img src="images/inr-s1-img1-siding.jpg" alt="inr-s1 img1" class="inr-s1-img1" width="497" height="522">
        <div class="inner__section-1__right">
        	<p class="common_text"><strong>Transform Your Home: Tailored Siding Solutions for Beauty and Durability!</strong></p>
            <p class="common_text">Renew your home with our expert siding services, offering tailored solutions to meet your specific needs. Our commitment to excellence guarantees a budget-friendly transformation, providing you with a stunning and resilient exterior that complements your lifestyle.</p>
            <p class="common_text">Trust us to improve the durability and longevity of your siding while maintaining affordability.</p>
            
            <ul class="inner_sec1__point">
            	<li>Tailored Siding Solutions.</li>
                <li>Budget-Friendly Transformations.</li>
                <li>Expert Siding Services.</li>
                <li>Beauty and Durability Combined.</li>
            </ul>
            
            <div class="clearall"></div>
            <div class="btn_box">
            	<p class="btn_top_text">Just Takes 2 Minutes</p>
                <a onclick="window.location.href='siding-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
            </div>
        </div>
    </div>
</div>

<!--inner__section-2-->
<div class="roofing_section_2">
	<div class="container">
    	<p class="common_heading inner_common_head">Benefits of Siding<br>Installation, Repair & Upgrade</p>
        <p class="common_text">Siding services not only enhance the aesthetic appeal of your home but also contribute to its protection, energy efficiency, and overall longevity.<br class="showDesk">Collectively, these services contribute to the safety, durability, and aesthetics of your building's siding.</p>
        
        <div class="roofing_sec2_row">
        	<div class="roofing_sec2_row_box solar_sec2_row_box">
            	<img src="images/home.png" alt="icon">
                <span>Protect Your Home from the Elements</span>
                <p class="common_text">Quality siding acts as a shield, protecting your home from harsh weather conditions, moisture, and pests. Our siding solutions ensure durability and resilience against the elements.</p>
            </div>
            
            <div class="roofing_sec2_row_box solar_sec2_row_box">
            	<img src="images/energyefficiency.png" alt="icon">
                <span>Enhance Energy Efficiency</span>
                <p class="common_text">Well-installed siding contributes to improved insulation, increasing the energy efficiency of your home. Enjoy a comfortable interior while reducing energy bills with our expert siding services.</p>
            </div>
            
            <div class="roofing_sec2_row_box solar_sec2_row_box">
            	<img src="images/elevate.png" alt="icon">
                <span>Elevate Curb Appeal Excellence</span>
                <p class="common_text">Transform the look of your home with stylish siding options that complement your architectural style. Our siding services enhance curb appeal, making a lasting impression on visitors and passersby.</p>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='siding-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
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
<!--                <p class="step_head">Locate Best Siding Pros</p>-->
<!--                <p class="common_text">Proin gravida velit auctor aliquet lorem quis bibendum auctor, nisi elit consequat ipsum</p>-->
<!--                <img src="images/step_img1.jpg" class="step_img" width="183" height="207" alt="img">-->
<!--            </div>-->
            
<!--            <div class="s2_step_col s2bg2">-->
<!--            	<p class="step_num">02</p>-->
<!--                <p class="step_head">Budget Siding Project</p>-->
<!--                <p class="common_text">Proin gravida velit auctor aliquet lorem quis bibendum auctor, nisi elit consequat ipsum</p>-->
<!--                <img src="images/step_img2.jpg" class="step_img" width="183" height="206" alt="img">-->
<!--            </div>-->
            
<!--            <div class="s2_step_col s2bg3">-->
<!--            	<p class="step_num">03</p>-->
<!--                <p class="step_head">Get Free Siding Quotes</p>-->
<!--                <p class="common_text">Proin gravida velit auctor aliquet lorem quis bibendum auctor, nisi elit consequat ipsum</p>-->
<!--                <img src="images/step_img3.jpg" class="step_img" width="183" height="206" alt="img">-->
<!--            </div>-->
<!--        </div>-->
        
            
<!--        <div class="clearall"></div>-->
<!--        <div class="btn_box">-->
<!--            <p class="btn_top_text">Just Takes 2 Minutes</p>-->
<!--            <a onclick="window.location.href='siding-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>-->
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
                <div class="accordion acdn-heading accordion-open" id="hd-one">What types of siding services do you offer?</div>
                <div class="acdn-content">
                	<p class="acdn-para">We offer a comprehensive range of siding services, including installation, repair, replacement, and maintenance. Our services are tailored to meet the specific needs of your home.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How do I choose the right siding for my home?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Our experts will conduct a detailed assessment of your home's architecture, environmental factors, and your aesthetic preferences during a consultation to recommend the most suitable siding option for your property.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Are your siding installations covered by any warranties?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Yes, we stand behind the quality of our work, and our siding installations are often covered by warranties to ensure your satisfaction and confidence in the durability of our solutions.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How long does a typical siding installation or repair take, and what is the process?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">The duration varies based on the scope of the project. During the consultation, we will provide a detailed timeline and walk you through the entire process, ensuring transparency and communication throughout.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What materials do you offer for siding installations?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">We offer a variety of siding materials, including vinyl, fiber cement, wood, and metal. Our team will help you choose the most suitable and aesthetically pleasing option for your home's needs.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Is regular siding maintenance necessary?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">While siding requires minimal maintenance, occasional cleaning and inspections are recommended to ensure its longevity and appearance. Our team can provide guidelines on proper care.</p>
                </div>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='siding-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
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