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
    <div class="col-md-12">  <div class="pb-5">
    <div class="card shadow-sm border-0">
      <div class="card-body text-start p-5">
        
        <h1 class="h2 mb-4 text-center text-dark">TCPA and CAN-SPAM Compliance Statement</h1>
        <p class="text-center text-muted">Effective Date: <strong>May 10, 2025</strong></p>

        <p>At <strong>EasyHomeService.com</strong>, we are committed to protecting your privacy and ensuring full compliance with the <strong>Telephone Consumer Protection Act (TCPA)</strong> as applicable in the United States.</p>

        <hr>

        <h4 class="mt-4">What Is the TCPA?</h4>
        <p>The <strong>Telephone Consumer Protection Act (TCPA)</strong> is a federal law that regulates telephone solicitations and the use of automated telephone equipment, including text messages and prerecorded voice messages. It is designed to protect consumers from unwanted communications.</p>

        <h4 class="mt-4">How We Comply</h4>
        <p>By submitting your information on this website, you expressly consent to receiving marketing and service-related calls, texts, and emails from <strong>EasyHomeService.com</strong> and its partners at the phone number and email address provided, including through the use of automated dialing systems, prerecorded messages, or artificial voice technologies.</p>
        <p><strong>This consent is not a condition of any purchase or service.</strong></p>

        <h4 class="mt-4">Your Rights</h4>
        <p>You may opt out of receiving communications at any time by following the opt-out instructions in the message or by contacting us directly. You may also revoke your consent by calling us or sending a written request.</p>

        <hr>

        <h2 class="mt-5">CAN-SPAM Act Compliance Statement</h2>
        <p>At <strong>EasyHomeService.com</strong>, we are committed to complying with the <strong>Controlling the Assault of Non-Solicited Pornography and Marketing (CAN-SPAM) Act of 2003</strong>. This U.S. federal law sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to opt out of receiving further emails, and outlines penalties for violations.</p>

        <h4 class="mt-4">Our Compliance Commitments</h4>

        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item"><strong>Honest and Accurate Headers:</strong> All emails sent from EasyHomeService.com will contain accurate and non-deceptive header information.</li>
          <li class="list-group-item"><strong>Clear Identification:</strong> Our messages will clearly identify the email as an advertisement or solicitation when applicable.</li>
          <li class="list-group-item"><strong>Valid Physical Address:</strong> Each email will include the physical postal address of EasyHomeService.com or our authorized marketing service provider.</li>
          <li class="list-group-item"><strong>Opt-Out Mechanism:</strong> Every marketing or promotional email will include a clear and easy-to-use unsubscribe link. Users may opt out at any time, and we will honor unsubscribe requests promptly — within 10 business days as required by law.</li>
          <li class="list-group-item"><strong>Third-Party Email Marketing:</strong> If any third-party service providers send emails on behalf of EasyHomeService.com, they are also required to comply with all provisions of the CAN-SPAM Act.</li>
          <li class="list-group-item"><strong>No Harvesting or Buying Email Lists:</strong> We do not use harvested or purchased email lists for marketing purposes.</li>
        </ul>

        <h4 class="mt-4">How to Unsubscribe</h4>
        <p>If you receive a commercial email from us and wish to stop receiving future communications, you may:</p>
        <ul>
          <li>Click the “Unsubscribe” <a href="https://easyhomeservice.com/unsub/6yrsbmvumpg7jwp78zzbw63qzx2evyrcxs487ijztn0rsuegq" target="_blank">link</a> at the bottom of the email</li>
          <li>Contact us directly at: <a href="mailto:support@easyhomeservice.com">support@easyhomeservice.com</a></li>
        </ul>
        <p>We respect your privacy and your right to control the emails you receive.</p>

        <hr>

        <h4 class="mt-4">Contact Us</h4>
        <address>
          <strong>EasyHomeService.com</strong><br>
          Email: <a href="mailto:support@easyhomeservice.com">support@easyhomeservice.com</a><br>
          Address: 1309 Coffeen Avenue Ste 1200, Sheridan, WY 82801.
        </address>

      </div>
    </div>
  </div></div>
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