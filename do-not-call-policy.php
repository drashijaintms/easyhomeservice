<?php include'header.php' ?>	
<style>
p{
font-family:Lato;
}

.select-color
{
color:#55636F;
}
.policy-container {

    margin: 12px auto;
    padding: 20px;
    /*background-color: #e6f0fb;*/
    border-radius: 8px;
    /*box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);*/
    font-family:Lato;
}
ul.policy-list li {
    font-family:Lato;
    list-style: outside;
    list-style-position: outside;
    list-style-image: initial;
    list-style-type: initial;
}
.policy-content {
  text-align: left;
  padding: 4px;
  border-radius: 8px;
}

.policy-title {
    font-family:Lato;
  font-size: 29px;
  color: #333333;
  margin-bottom: 20px;
}

.policy-subtitle {
    font-size: 15px;
    font-weight: 400;
    font-family:lato;
    margin-top: 30px;
    margin-bottom: 10px;
}

.policy-intro,
.policy-text {
  font-size: 16px;
  line-height: 1.6;
  color: #666666;
  margin-bottom: 20px;
}

.policy-list,
.policy-sub-list {
    
  list-style: lower-roman!important;
  padding-left: 20px;
  margin-bottom: 20px;
}

.policy-list li,
.policy-sub-list li {
  margin-bottom: 10px;
}

.policy-sub-list {
  list-style: circle;
}
</style>
<div class="container">
  <div class="row heading heading--empty">
    <div class="col-md-8">
    </div>
  </div>

  <div class="row text-center select-color policy-container">
    <div class="col-md-12">
      <div kjb-settings-id="sections_1664211457_settings_text" class="policy-content">
        <h1 class="policy-title">Do Not Call Policy</h1>
        <p class="policy-intro">At <strong>Easy Home Service, LLC</strong> (“Company”), we are committed to maintaining high standards in our business practices. Our goal is to respect the privacy of those who do not wish to be contacted. This policy applies to all marketing and solicitation efforts conducted by the Company and its affiliates, employees, and agents:</p>

        <p class="policy-subtitle"><strong>TELEPHONE CONSUMER PROTECTION ACT SUMMARY</strong></p>
        <p class="policy-text">The Telephone Consumer Protection Act (TCPA) and related FCC regulations protect consumers from unwanted telemarketing. Telemarketing involves calls or messages encouraging the purchase of goods or services. The TCPA includes rules that telemarketers must follow, such as:</p>

        <ul class="policy-list">
          <li>Maintaining a Do Not Call (DNC) policy.</li>
          <li>Making calls or sending messages only between 8:00 a.m. and 9:00 p.m. (local time of the recipient).</li>
          <li>Not contacting numbers on the National Do Not Call List or the Company’s internal DNC list.</li>
          <li>Identifying the caller’s name, location, and company.</li>
          <li>Providing a copy of the DNC policy upon request.</li>
        </ul>

        <p class="policy-text">Consumers can add their phone numbers to the National Do Not Call Registry to reduce telemarketing calls by calling 888-382-1222 or visiting <a href="http://www.donotcall.gov">www.donotcall.gov</a>.</p>

        <p class="policy-subtitle"><strong>EASY HOME SERVICE'S DO NOT CALL POLICY</strong></p>
        <p class="policy-text">Consumers can request by phone or in writing to be placed on our internal DNC list, even if they are customers. Such requests will be honored, and the number will be added to our list within seven (7) business days, although it may take up to fourteen (14) days to be removed from all lists. The request remains valid for at least five (5) years, but consumers must inform us of any changes in their phone numbers to continue to be on our DNC list. Additional guidelines include:</p>

        <ul class="policy-list">
          <li>Telemarketing calls and texts will not be made before 8:00 a.m. or after 9:00 p.m. local time.</li>
          <li>Callers must provide their name, the Company’s phone number, and state the purpose of the call.</li>
          <li>No calls or texts will be made to numbers on the internal DNC list, state DNC registries, or the National Do Not Call Registry unless:</li>
          <ul class="policy-sub-list mt-3">
            <li>There has been an established business relationship within the past 18 months.</li>
            <li>The recipient gave express permission within the past 3 months.</li>
            <li>The caller has a personal relationship with the recipient.</li>
          </ul>
        </ul>

        <p class="policy-text">Employees and agents must forward any DNC requests to the administrator responsible for maintaining the DNC list and log the request details. All employees involved in telemarketing are trained on this policy and must review it annually.</p>

        <p class="policy-text">Third-party companies may occasionally perform telemarketing on our behalf. We provide them with up-to-date copies of our DNC list.</p>

        <p class="policy-text">At <strong>Easy Home Service, LLC,</strong> we respect customer privacy and continuously review our DNC policy to stay compliant with TCPA regulations. If you believe you were contacted in violation of our policy or any laws, please contact us at <a href="mailto:info@easyhomeservice.com">info@easyhomeservice.com</a>.</p>

        <p class="policy-subtitle"><strong>REQUEST FOR DO NOT CALL POLICY</strong></p>
        <p class="policy-text">Our "Do Not Call Policy" is available on our website at <a class="ehs-hvac-internal-link" href="https://easyhomeservice.com">easyhomeservice.com</a>. Anyone requesting a copy of our "Do Not Call Policy" is entitled to receive it.</p>
        <p class="policy-subtitle"><strong>Note:</strong></p>
        <p class="policy-text">By submitting your information, you consent to be contacted via phone, SMS, or email for service-related communication. If you wish to opt out of phone calls or messages, you may do so by contacting us directly.</p>
      </div>
    </div>
  </div>
</div>

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