<?php include'header.php' ?>

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_bathroom" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="images/bath_bnr_mob.jpg" class="inner_banner_mob showMob" width="600" height="400" alt="bathroom remodeling experts,affordable bathroom renovations">
    		<h1 class="banner_heading">Find & Hire
 <br class="hideMob">The Best Bathroom
 <br class="hideMob">Experts in No Time!</h1>
            
            <p class="inner__banner__text">We help you find top rated bathroom service providers in your <br class="showDesk">area, so you can compare quotes & get the best deal. </p>
            <div class="banner_quote_box inner__banner__quote-box">
                                                    <div class="error-message"></div>

                <div class="banner_quote_box_inner">
                    <form id="myForm" action="bathroom-steps.php" method="get">
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



<!--Inner Section_1-->
<div class="inner__section-1">
	<div class="container">
    	<h2 class="common_heading inner_common_head">We Help You Save On All<br> Your Bathroom Installation</h2>
        <p class="common_text">Your bathroom should be well-designed, feel effortless, comfortable and tailored to how you live. Easy Home Service helps homeowners in the USA to connect with bathroom renovation experts who specialize in repair services, complete remodeling and bathroom installation services. Whether you are planning a modern refresh, upgrading fixtures or exploring custom bathroom designs, we make it easier to find bathroom experts who focus on thoughtful layouts and smooth project execution. </p>
        <img src="images/inr-s1-img1-bath.jpg" alt="best bathroom remodeling, bathroom installers,  bathroom repair services " class="inr-s1-img1" width="497" height="522">
        <div class="inner__section-1__right">
        	<p class="common_text"><strong>Revitalize Your Retreat: Tailored Bathroom Services for Your Home!</strong></p>
            <p class="common_text">Indulge in the ultimate bathroom experience with our expert home services, offering tailored solutions to meet your unique preferences. Our commitment to excellence guarantees a budget-friendly transformation, bringing beauty and functionality to one of the most essential spaces in your home.</p>
            <p class="common_text">Rely on us to elevate the durability and longevity of your bathroom, all while maintaining affordability and value.</p>
            
            
            
            
            
            <ul class="inner_sec1__point">
            	<li>Tailored Bathroom Services.</li>
                <li>Budget-Friendly Transformations.</li>
                <li>Expert Home Services.</li>
                <li>Luxury for Your Bathroom Retreat.</li>
            </ul>
            
            <div class="clearall"></div>
            <div class="btn_box">
            	<p class="btn_top_text">Just Takes 2 Minutes</p>
                <a onclick="window.location.href='bathroom-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
            </div>
        </div>
    </div>
</div>

<!--inner__section-2-->
<div class="roofing_section_2">
	<div class="container">
    	<h3 class="common_heading inner_common_head">Benefits of Bathroom<br>Installation, Repair & Upgrade</h3>
        <p class="common_text">Bathroom home services encompass a range of offerings, from renovations to routine maintenance, all contributing to the overall comfort, aesthetics, and functionality of your bathroom. <br class="showDesk">Collectively, these services contribute to the safety, durability, and aesthetics of your bathroom space.</p>
        
        <div class="roofing_sec2_row">
        	<div class="roofing_sec2_row_box">
            	<img src="images/investment.png" alt="Bathroom Installation Services">
                <span>Invest in Your Well-Being</span>
                <p class="common_text">Investing in your bathroom is an investment in your well-being. A thoughtfully designed and well-maintained space enhances your daily routines and provides a retreat for relaxation and rejuvenation.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/repair.png" alt="Efficient Repairs for Long-Term Satisfaction">
                <span>Efficient Repairs for Long-Term Satisfaction</span>
                <p class="common_text">Efficient repairs not only restore the functionality of your bathroom but also contribute to the long-term satisfaction of your investment, ensuring a space that continues to meet your needs.</p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="images/increase.png" alt="Increase Home Value with Strategic Upgrades">
                <span>Increase Home Value with Strategic Upgrades</span>
                <p class="common_text">Strategic bathroom upgrades can significantly enhance the market value of your home, offering both modern aesthetics and improved functionality for potential buyers or long-term enjoyment.</p>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='bathroom-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
        </div>
    </div>
</div>




<?php include'how-it-works.php' ?>

<div class="roofing_section_2 blog-section pb-5 pt-0 bg-light">
  <div class="container">
    <div class="text-center">
           <h3 class="common_heading inner_common_head">Everything You Need to Know About bathroom Replacement</h3>
           <p class="common_text">From classic designs to modern efficiency - explore our blogs to find the best bathroom solutions for your home.</p>
    </div>
        <?php include 'blog-slider.php';?>
  </div>
</div>
<?php include'testimonials.php' ?>


<!--section_6-->
<div class="section_6">
	<div class="container">
    	<p class="common_heading inner_common_head">Frequently <br class="showMob">Asked Questions</p>
        
        <div class="faq-container" style="overflow:hidden;">
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-open" id="hd-one">What types of bathroom home services do you offer?</div>
                <div class="acdn-content">
                	<p class="acdn-para">We provide a comprehensive range of bathroom home services, including renovations, installations, repairs, and routine maintenance, tailored to meet the specific needs of your space.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How do I choose the right services for my bathroom?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Our experts will conduct a detailed assessment of your bathroom, considering your preferences, budget, and any specific requirements, to recommend the most suitable services for your unique needs.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Are your bathroom home services covered by any warranties or guarantees?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Yes, we stand behind the quality of our work and offer warranties or guarantees on applicable services, providing you with confidence in the longevity and durability of our solutions.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">How long does a typical bathroom service take, and what is the process?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">The duration varies based on the type of service required. During the consultation, we will provide a detailed timeline and guide you through the entire process, ensuring transparency and communication throughout.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">What types of materials and fixtures do you offer for bathroom upgrades?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">We offer a variety of high-quality materials and fixtures for bathroom upgrades, including but not limited to tiles, vanities, faucets, and lighting. Our team will help you choose options that align with your style and preferences.</p>
                </div>
            </div>
            
            <div class="up-slide-dwn">
                <div class="accordion acdn-heading accordion-close">Is regular maintenance necessary for my bathroom?</div>
                <div class="acdn-content" style="display:none;">
                	<p class="acdn-para">Regular maintenance is recommended to ensure the longevity and cleanliness of your bathroom. We provide guidelines on proper care, and our team can assist with scheduled maintenance visits when needed.</p>
                </div>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='bathroom-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
            <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
        </div>
    </div>
</div>
<!--promise-->
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