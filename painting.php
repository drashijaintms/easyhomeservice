<?php include'header.php' ?>	
<link rel="stylesheet" href="css/painting-style.css">

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_painting" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="images/painting-mob-banner.webp" class="inner_banner_mob showMob" width="600" height="400" alt="Residential painting experts near me in the USA">
    		<h1 class="banner_heading">Connect with Trusted Painting Experts Near You</h1>
            
            <p class="inner__banner__text">We help homeowners find experienced, affordable, trusted painting experts in your area, delivering quality interior and exterior painting that enhances and protects your home with long-lasting, professional results.</p>
            <div class="banner_quote_box inner__banner__quote-box">
                                                    <div class="error-message"></div>

                <div class="banner_quote_box_inner">
                    <form id="myForm" action="painting-steps.php" method="get">
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

<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Upgrade Your Home’s Exterior with Trusted Residential Painting Experts in the United States</h2>
    <p class="common_text">Find local residential painting professionals delivering quality interior and exterior services that enhance protection, style, and long-term value. Whether you are planning a full renovation, selling your home, or just updating a room, our network of home painting experts delivers long-lasting results. They are known for using modern techniques and premium materials suited for U.S. homes and climate conditions.</p>
             <?php include 'gallery.php';?>      
  </div>
 
</div>

<div class="roofing_section_2">
    <div class="container">
        <div class="text-center">
            <h2 class="common_heading inner_common_head">
                Proactive Surface Protection & Protective Coatings
            </h2>

            <p class="common_text">
Beyond traditional residential painting, <strong><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com">Easy Home Service</a></strong> connects homeowners with trusted local professionals specializing in protective coatings and advanced surface finishes. These solutions help extend the life of your home’s surfaces, improve durability, and protect against moisture, heavy wear, and harsh weather conditions.
            </p>

            <div class="row people team-boxed pt-5">

                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <div class="icon-circle">
                            <img src="/images/painting/concrete-and-epoxy-floor-coatings.png" alt="Concrete & Epoxy Floor Coatings">
                        </div>
                        <h3 class="name">Concrete & Epoxy Floor Coatings</h3>
                        <p class="description">
Durable, high-performance coatings for garages, patios, basements, and driveways that resist stains, cracks, and heavy traffic while delivering a clean, 
finished look.

                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <div class="icon-circle">
                            <img src="/images/painting/waterproofing-services.png" alt="Waterproofing Services">
                        </div>
                        <h3 class="name">Waterproofing Services</h3>
                        <p class="description">
Professional waterproof coatings that help prevent moisture intrusion, exterior 
<strong><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/wall">wall damage</a></strong>, and long-term structural issues. It is used and widely applied by exterior painting experts.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <div class="icon-circle">
                            <img src="/images/painting/caulking-and-sealant-application.png" alt="Caulking & Sealant Application">
                        </div>
                        <h3 class="name">Caulking & Sealant Application</h3>
                        <p class="description">
A good seal around your <strong><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/window">windows</a></strong>, <strong><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/siding">siding</a></strong>, and <strong><a class="ehs-hvac-internal-link" href="https://easyhomeservice.com/door">doors</a></strong> saves you money on heating and cooling, but it will also help prevent water leaks. It is recommended by both interior paint experts and outdoor painting professionals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include 'how-works.php';?>


<?php include 'section-include/inner-section/inner-section.php';?>

<?php include 'section-include/benefits/benefits.php'; ?>


<?php include'testimonials.php' ?>

<?php include 'state-cities.php';?> 
<?php include 'section-include/faq/faq.php';?>




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