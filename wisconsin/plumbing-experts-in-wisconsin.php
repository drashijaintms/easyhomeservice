<?php include'../header.php' ?>	
<link rel="stylesheet" href="/css/plumbing-style.css">

<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_plumbing" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="/images/mobileplumbing.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Connect With Trusted Plumbing Experts in Wisconsin</h1>
            
            <p class="inner__banner__text">
Easy Home Service helps residents searching for plumbing services connect with experienced local plumbing professionals familiar with Wisconsin homes and weather conditions. Rather than spending hours calling different companies, the homeowners can send a request and receive a response from the professionals who are available near them.
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
    <h2 class="common_heading">Full Residential Plumbing Services Across Wisconsin</h2>

    <p class="common_text">
Because of mineral-heavy groundwater, plumbing systems in Wisconsin wear out faster than the national average. Fixtures clog with scale, water heaters accumulate sediment, and appliances lose efficiency over time.  Houses constructed decades ago in the vicinity of Beloit and Janesville might be equipped with old pipes that need repair or upgrades.
Homeowners regularly request services in Beloit, Janesville, Waukesha, Middleton, and Lake Geneva, where seasonal temperature swings are hard on plumbing systems.
Professionals assist with complete residential plumbing needs.

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
From classic plumbing systems to modern efficiency upgrades, explore our blogs to learn more about plumbing solutions that support wisconsin homes.
      </p>
    </div>

    <?php include '../blog-slider.php';?>
   
  </div>
</div>




<!--inner__section-2-->
<div class="roofing_section_2">
	<div class="container">
    	<h2 class="common_heading inner_common_head">Expert Insight: Why Timely Plumbing Repairs Matter</h2>
        
      <div class="roofing_sec2_row">
        	<div class="roofing_sec2_row_box">
            	<img src="/images/home.png" alt="icon">
                <h3>Prevent Structural Damage</h3>
                <p class="common_text">
Water spreads behind walls and flooring quickly. Even a small leak can weaken wood framing and drywall over time.
                </p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="/images/repair.png" alt="icon">
                <h3>Improve System Efficiency</h3>
                <p class="common_text">
Clearing buildup and repairing pipes restores pressure and helps appliances operate efficiently.
                </p>
            </div>
            
            <div class="roofing_sec2_row_box">
            	<img src="/images/increase.png" alt="icon">
                <h3>Maintain Healthy Indoor Air</h3>
                <p class="common_text">
Standing moisture and sewer gases can affect indoor air quality. Quick repairs help keep homes safer and cleaner.
                </p>
            </div>
        </div>
        
        <div class="clearall"></div>

        <div class="btn_box">
            <p class="btn_top_text">Just Takes 2 Minutes</p>
            <a onclick="window.location.href='/plumbing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">
                Get A Quote<img src="/images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
            </a>
            <p class="btn_text inner_btn_text">
                <img src="/images/lock.png" class="btn_lock" width="50" height="67" alt="icon">
                Your information is 100% secure & confidential.
            </p>
        </div>
    </div>
</div>


<?php include'../testimonials.php' ?>

<?php include '../section-include/cities/cities-section.php'; ?>

<div class="section_4">
    <?php include '../service.php';?>
    
</div>  

<?php include '../section-include/faq/faq.php';?>
<!--promise-->
<?php include'../promise.php' ?>
<?php include'../footer.php' ?>


<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/js/bookmarkscroll.js"></script>
<script type="text/javascript" src="/js/slick.js"></script>

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
/* ---------------- jQuery Tabs ---------------- */
$(document).ready(function () {
    $(".custom-tab-btn").click(function () {

        // remove active class from all
        $(".custom-tab-btn").removeClass("active");
        $(".tab-pane-custom").removeClass("active");

        // add active class to clicked tab
        $(this).addClass("active");

        // show matching content
        $($(this).data("tab")).addClass("active");
    });
});
</script>

</body>
</html>