<?php
$pagenm = 'index';
include 'header.php';
?>
 <link rel="stylesheet" href="css/index-css.css">
<div class="banner" id="top_form">
  <div class="container">
    <div class="banner_left">
      <p class="bnr_rev_text">
        <img src="images/star.webp" class="bnr_star" width="300" height="60" alt="star"> Helped 22,400 Customers Find Top Contractors <img src="images/bnr_rev_people.png" class="bnr_rev_people hideMob" width="300" height="80" alt="reviews">
      </p>
      <h1 class="banner_heading">Connecting Homeowners <br> with Trusted Home <br> Improvement Experts </h1>
      <div class="banner_quote_box">
        <div class="banner_quote_box_inner">
          <p class="showMob frmHeading-m">Get A Quote Now</p> <?php $query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';?> <form method="get" id="quoteForm" action="">
            <div class="form_field">
              <select name="service" id="serviceSelect" required class="input_field">
                <option value="" disabled selected>I need help with</option>
                <option value="roofing-steps">Roofing</option>
                <option value="window-steps">Windows</option>
                <option value="solar-steps">Solar</option>
                <option value="hvac-steps">HVAC</option>
                <option value="bathroom-steps">Bathroom</option>
                <option value="kitchen-steps">Kitchen</option>
                <option value="gutter-steps">Gutter</option>
                <option value="siding-steps">Siding</option>
                <option value="walktub-steps">Walk-In Tubs</option>
                <option value="handyman-steps">Handyman</option>
                <option value="homewarranty-steps">Home Warranty</option>
                <option value="allservices">All Services</option>
              </select>
             <input name="zip"  type="text" required pattern="[0-9]{5}" maxlength="5" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);" class="input_field input_field_zip" placeholder="Enter ZIP Code">
              <button type="submit" class="quote_btn">Get A Quote</button>
            </div>
          </form>
          <script>
            document.getElementById('quoteForm').addEventListener('submit', function() {
              const service = document.getElementById('serviceSelect').value;
              if (!service) return;
              this.action = '/' + service;
            });
          </script>
        </div>
        <div class="form_note_text">
          <img src="images/lock.png" alt="lock" width="50" height="67">
          <p>Your information is 100% secure &amp; confidential.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--section_1-->
<div class="section_1">
  <div class="container">
    <p class="s1_text font-weight-bold">
      <i class="bi bi-tools"></i> Services We Provide
    </p>
    <p>No matter the size of the Job, our pros are up for it. We cover a broad range of services tailored to your home's unique needs.</p>
    <div class="s1_help_box">
      <div class="s1_help_box_col">
        <a href="/roofing" class="hlp_img_box">
          <img src="images/s1_help_icon1.webp" width="200" height="200" alt="Roofing">
          <p>Roofing</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/window" class="hlp_img_box">
          <img src="images/s1_help_icon2.webp" width="200" height="200" alt="Windows">
          <p>Windows</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/solar" class="hlp_img_box">
          <img src="images/s1_help_icon3.webp" width="200" height="200" alt="Solar">
          <p>Solar</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/hvac" class="hlp_img_box">
          <img src="images/s1_help_icon4.webp" width="200" height="200" alt="HVAC">
          <p>HVAC</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/bathroom" class="hlp_img_box">
          <img src="images/s1_help_icon5.webp" width="200" height="200" alt="Bathroom">
          <p>Bathroom</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/handyman" class="hlp_img_box">
          <img src="images/iconhandyman.svg" width="200" height="200" alt="Handyman">
          <p>Handyman</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/homewarranty" class="hlp_img_box">
          <img src="https://easyhomeservice.com/images/iconhomewarranty.svg" width="200" height="200" alt="Home Warranty">
          <p>Home Warranty</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/kitchen" class="hlp_img_box">
          <img src="images/s1_help_icon6.webp" width="200" height="200" alt="Kitchen">
          <p>Kitchen</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/gutter" class="hlp_img_box">
          <img src="images/s1_help_icon7.webp" width="200" height="200" alt="Gutter">
          <p>Gutter</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/walktub" class="hlp_img_box">
          <img src="images/s1_help_icon10.webp" width="200" height="200" alt="Walk-In Tubs">
          <p>Walk-In Tubs</p>
        </a>
      </div>
      <div class="s1_help_box_col">
        <a href="/allservices" class="hlp_img_box">
          <img src="images/viewallicon.svg" width="200" height="200" alt="View More">
          <p>And Much More</p>
        </a>
      </div>
    </div>
    <div class="clearall"></div>
    <div class="btn_box">
      <a href="/allservices" class="common_btn-copy"> Get A Quote Now <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
      </a>
      <p class="btn_text">We Just Make it easier.</p>
    </div>
  </div>
</div>
<!--section_2--> <?php include 'how-works.php';?> <div class="section_3">
  <div class="container">
    <div class="s3_box">
      <div class="s3_box_inner">
        <p class="s3_text">
          <i class="bi bi-megaphone"></i> Introducing
        </p>
        <h2 class="common_heading white">Easy Home Service: <br>Your Gateway to Trusted Home Solutions </h2>
        <img src="images/home-3.webp" class="showMob s3_box_img" width="600" height="400" alt="Easy Home Service" loading="eager" fetchpriority="high">
        <p class="common_text white">In the home improvement industry, homeowners often feel frustrated. They face high prices, unreliable contractors, and a long search for the right professionals. We know this because we have been there for many years.</p>
        <p class="common_text white">After years of navigating a broken system, we realized there was a better way. After all, why should homeowners have to battle to find trusted home improvement experts?</p>
        <p class="common_text white">Quality service shouldn't come with an inflated price tag and hidden fees. That's why we created Easy Home Service. We want to make home projects easy and stress-free. Our service is affordable and reliable.</p>
        <p class="common_text white">Welcome to Easy Home Service. Finding a local home improvement specialist is finally easy.</p>
        <div class="clearall"></div>
        <div class="btn_box">
          <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
          </a>
          <p class="btn_text white">We Just Make it easier.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--section_4-->
<div class="section_4">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-12">
        <h2 class="common_heading">Top-Rated Home Improvement Experts Near You <br class="hideMob"> Quality You Can Trust! </h2>
      </div>
    </div>
    <div class="row pt-5 py-4 d-flex justify-content-center">
      <div class="col-lg-6 pp text-left">
        <p class="common_text">Finding <span class="fw-500">construction home remodeling experts near you</span> shouldn’t be that much stressful or expensive. At <span class="fw-500"> Easy Home Service</span>, we make it easy for homeowners. We connect you with trusted general contractors and top home remodeling experts near you. They provide high-quality services that you deserve, all without high costs. </p>
        <p class="common_text">If you are planning a <a href="https://easyhomeservice.com/blog/the-art-of-sustainable-kitchen-design-balancing-style-and-environmental-impact" target="_blank">kitchen remodel</a>, <a href="https://easyhomeservice.com/bathroom" target="_blank">bathroom renovation</a>, <a href=""> Window Replacement</a>, or a <a href="https://easyhomeservice.com/blog/2025-Home-Improvement-Trends-Upgrades-for-a-Stylish-Home" target="_blank">full home upgrade</a>, our platform can help. We connect you with trusted home improvement experts near you. Many customers <span class="fw-500">highly recommend </span> them.</p>
        <p class="common_text">They offer <span class="fw-500">quality work</span> and clear pricing-all in just a few clicks. No more guesswork or stress-just <span class="fw-500">seamless, affordable home improvements</span> backed by skilled professionals. </p>
        <p class="common_text">Start your project today and experience a <span class="fw-500">better way to remodel your home!</span>
        </p>
      </div>
      <div class="col-lg-6">
        <div class="gradient-cards row d-flex justify-content-center ">
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('roofing')">
              <div class="container-card">
                <img src="images/s1_help_icon1.webp" class="mw-55" alt="Roofing">
                <p class="card-title">Roofing</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('window')">
              <div class="container-card">
                <img src="images/s1_help_icon2.webp" class="mw-55" alt="Windows">
                <p class="card-title">Windows</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('solar')">
              <div class="container-card">
                <img src="images/s1_help_icon3.webp" class="mw-55" alt="Solar">
                <p class="card-title">Solar</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('hvac')">
              <div class="container-card">
                <img src="images/s1_help_icon4.webp" class="mw-55" alt="hvac">
                <p class="card-title">HVAC</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('bathroom')">
              <div class="container-card">
                <img src="images/s1_help_icon5.webp" class="mw-55" alt="bathroom">
                <p class="card-title">Bathroom</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('handyman')">
              <div class="container-card">
                <img src="images/iconhandyman.svg" class="mw-55" alt="handyman">
                <p class="card-title">Handyman</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('homewarranty')">
              <div class="container-card">
                <img src="images/iconhomewarranty.svg" class="mw-55" alt="Home Warranty">
                <p class="card-title">Home Warranty</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('kitchen')">
              <div class="container-card">
                <img src="images/s1_help_icon6.webp" class="mw-55" alt="Kitchen">
                <p class="card-title">Kitchen</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('gutter')">
              <div class="container-card">
                <img src="images/s1_help_icon7.webp" class="mw-55" alt="Gutter">
                <p class="card-title">Gutter</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 my-3 w-20">
            <div class="card brd-none" onclick="redirectToCategory('walktub')">
              <div class="container-card">
                <img src="images/s1_help_icon10.webp" class="mw-55" alt="Walk-In Tubs">
                <p class="card-title">Walk-In Tubs</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearall"></div>
    <div class="btn_box">
      <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote Now <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
      </a>
      <p class="btn_text">We Just Make it easier.</p>
    </div>
  </div>
</div>
<div class="section_4">
  <div class=" container">
    <p class="common_heading">Why Choose Us</p>
    <p class="common_text pb-4">Choose us for a hassle-free and expert-driven home improvement experience, delivering results that exceed expectations every time.</p>
    <div class="row d-flex justify-content-evenly">
      <div class="col-lg-3">
        <div class="custom-card">
          <div class="custom-card__block custom-card__block--main">
            <div class="custom-card__element custom-card__element--user-img">
              <i class="fas fa-user-check"></i>
            </div>
            <h3 class="custom-card__title">Verified Pros, No Guesswork</h3>
            <p class="custom-card__text"> Every expert on our platform is vetted, so you can hire with confidence. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="custom-card">
          <div class="custom-card__block custom-card__block--main">
            <div class="custom-card__element custom-card__element--user-img">
              <i class="fas fa-bolt"></i>
            </div>
            <h3 class="custom-card__title">Fast, Local Matches</h3>
            <p class="custom-card__text"> Tell us what you need - we’ll connect you with top-rated pros in your area, fast. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="custom-card">
          <div class="custom-card__block custom-card__block--main">
            <div class="custom-card__element custom-card__element--user-img">
              <i class="fas fa-star"></i>
            </div>
            <h3 class="custom-card__title">Real Reviews. Real Results.</h3>
            <p class="custom-card__text"> No fluff, just honest feedback from real customers, so you know what to expect. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-evenly">
      <div class="col-lg-3">
        <div class="custom-card">
          <div class="custom-card__block custom-card__block--main">
            <div class="custom-card__element custom-card__element--user-img">
              <i class="fas fa-eye-slash"></i>
            </div>
            <h3 class="custom-card__title">No Hidden Fees</h3>
            <p class="custom-card__text"> What you see is what you pay. No surprises. No shady upsells. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="custom-card">
          <div class="custom-card__block custom-card__block--main">
            <div class="custom-card__element custom-card__element--user-img">
              <i class="fas fa-layer-group"></i>
            </div>
            <h3 class="custom-card__title">All Services, One Platform</h3>
            <p class="custom-card__text"> From <a href="https://easyhomeservice.com/plumbing" class="link-new"> plumbing </a> to <a href="https://easyhomeservice.com/roofing" class="link-new">roofing</a>, we’ve got every job covered - all in one place. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="custom-card">
          <div class="custom-card__block custom-card__block--main">
            <div class="custom-card__element custom-card__element--user-img">
              <i class="fas fa-headset"></i>
            </div>
            <h3 class="custom-card__title">Support That Actually Supports</h3>
            <p class="custom-card__text"> Questions? Concerns? We’re here for you, with real people ready to help. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="clearall"></div>
    <div class="btn_box">
      <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote Now <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
      </a>
      <p class="btn_text">We Just Make it easier.</p>
    </div>
  </div>
</div>
<div class="section_4"> <?php include $_SERVER['DOCUMENT_ROOT'] . '/calculator/calculator.php'; ?> </div>
<div class="section_4"> <?php include 'service.php';?> </div>
<!--section_6-->
<div class="section_6">
  <div class="container">
    <p class="common_heading">Frequently <br class="showMob">Asked Questions </p>
    <div class="faq-container" style="overflow:hidden;">
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-open" id="hd-one">How does homeowner get a call?</div>
        <div class="acdn-content">
          <p class="acdn-para">The process is simple:</p>
          <ul class="lst-decimal">
            <li>Enter your zip code and select the type of service you need.</li>
            <li>Provide details about your project, including the timeline and location.</li>
            <li>Share your contact information for seamless communication.</li>
            <li>Get matched with the best service providers and choose the one that fits your needs.</li>
          </ul>
        </div>
      </div>
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-close">What types of home services do you offer?</div>
        <div class="acdn-content" style="display:none;">
          <p class="acdn-para">We cover a wide range of affordable home services with our network of home improvement experts, including:</p>
          <ul class="lst-disc">
            <li>
              <a href="https://easyhomeservice.com/plumbing" class="link-new">Plumbing</a> and <a href="https://easyhomeservice.com/electrical" class="link-new">electrical</a> easy home repair
            </li>
            <li>
              <a href="https://easyhomeservice.com/roofing" class="link-new">Roofing</a>, <a href="https://easyhomeservice.com/hvac" class="link-new">HVAC Maintenance </a>, <a href="https://easyhomeservice.com/flooring" class="link-new">Flooring</a> & <a href="https://easyhomeservice.com/window" class="link-new">Window Installation/Repair</a>
            </li>
            <li>Landscaping and <a href="https://easyhomeservice.com/pestcontrol" class="link-new">pest control</a>
            </li>
            <li>
              <a href="https://easyhomeservice.com/kitchen" class="link-new">Kitchen</a> and <a href="https://easyhomeservice.com/bathroom" class="link-new">Bathroom remodeling</a>
            </li>
            <li>General home improvements</li>
          </ul>
        </div>
      </div>
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-close">How much does it cost to use Easy Home Service?</div>
        <div class="acdn-content" style="display:none;">
          <p class="acdn-para">Easy Home Service is free for homeowners. The only payment made is to the service provider for the job they do, as negotiated and agreed upon.</p>
        </div>
      </div>
    </div>
    <div class="clearall"></div>
    <div class="btn_box">
      <a onclick="redirectToCategory('allservices')" class="common_btn-copy">Get A Quote Now <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
      </a>
      <p class="btn_text">We Just Make it easier.</p>
    </div>
  </div>
</div>

<?php include'footer.php' ?>
<!--<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>-->
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
            dropdownElement.style.border = "3px solid red";

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