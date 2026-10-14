<?php include'header.php'?>	

<style type="text/css">
.error {
    color: #d93025;
    font-size: 12px;
    display: none;
    margin-top: 4px;
}

.input.error-field {
    border-color: #d93025;
}

::placeholder{
    color:white;
}
	body{
		font-size:16px; 
		line-height:28px; 
		color:#000; 
		font-family:Tahoma, Geneva, sans-serif;
		text-align:center;
		}
	h1{ font-size:28px; margin:20px 0;text-align:left;}
	p{ margin:0 0 0; text-align:left; font-size:15px; line-height:22px; letter-spacing:0.5px;}
	p a{ color:#0563c1;}
	h3{ margin:20px 0; text-align:left; font-size:20px; line-height:24px;}
	h2{text-align:left;}	
	h3 a{ color:#0563c1;}
	h4{ text-align:left; font-size:17px;}
	h5{ text-align:left; font-size:14px; line-height:14px; letter-spacing:0.3px; font-weight:600; margin:15px 0 0 0;}

	#wrapper{
		overflow:auto;
		max-height:370px;
		-webkit-overflow-scrolling:touch;
		overflow-x:hidden;
		padding:5px 5px;
	   }
	   
	   .containerx {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 2rem;
  background-color: #fafafa;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
	   
	   .form {
	       z-index:0;
  width: 100%;
  max-width: 1020px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.contact-form {
  background-color: #04d36f;
  position: relative;
}

.circle {
  border-radius: 50%;
  background: linear-gradient(135deg, transparent 20%, #3effa2);
  position: absolute;
}

.circle.one {
  width: 130px;
  height: 130px;
  top: 130px;
  right: -40px;
}

.circle.two {
  width: 80px;
  height: 80px;
  top: 10px;
  right: 30px;
}

.contact-form:before {
  content: "";
  position: absolute;
  width: 26px;
  height: 26px;
  background-color: #04d36f;
  transform: rotate(45deg);
  top: 50px;
  left: -13px;
}

form {
  padding: 2.3rem 2.2rem;
  overflow: hidden;
  position: relative;
}

.title {
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
  margin-bottom: 0.7rem;
}

.input-container {
  position: relative;
  margin: 1rem 0;
}

.input {
  width: 100%;
  outline: none;
  border: 2px solid #fafafa;
  background: none;
  padding: 0.5rem 1.0rem;
  color: #fff;
  font-weight: 500;
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  border-radius: 5px;
  transition: 0.3s;
}

textarea.input {
  padding: 0.8rem 1.2rem;
  min-height: 150px;
  border-radius: 5px;
  resize: none;
  overflow-y: auto;
}

.input-container label {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
  padding: 0 0.4rem;
  color: #fafafa;
  font-size: 0.9rem;
  font-weight: 400;
  pointer-events: none;
  transition: 0.5s;
  z-index:100;
}

.input-container.textarea label {
  top: 1rem;
  transform: translateY(0);
}

.btn {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: #1abc9c;
  line-height: 1;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin: 0;
  width: 100%;
}

.btn:hover {
  background-color: transparent;
  color: #fff;
}

.input-container span {
  position: absolute;
  top: 0;
  left: 25px;
  transform: translateY(-50%);
  font-size: 0.8rem;
  padding: 0 0.4rem;
  color: transparent;
  pointer-events: none;
}

.input-container span:before,
.input-container span:after {
  content: "";
  position: absolute;
  width: 10%;
  opacity: 0;
  transition: 0.3s;
  height: 5px;
  background-color: #04d36f;
  top: 50%;
  transform: translateY(-50%);
}

.input-container span:before {
  left: 50%;
}

.input-container span:after {
  right: 50%;
}

.input-container.focus label {
  top: 0;
  transform: translateY(-50%);
  left: 25px;
  font-size: 0.8rem;
}

.input-container.focus span:before,
.input-container.focus span:after {
  width: 50%;
  opacity: 1;
}

.contact-info-1 {
  padding: 2.3rem 2.2rem;
  position: relative;
}

.contact-info-1 .title {
  color: #14147e;
}

.text {
  color: #333;
  margin: 1.5rem 0 2rem 0;
}

.information {
  display: flex;
  color: #555;
  margin: 0.7rem 0;
  align-items: center;
  font-size: 0.95rem;
}

.information i {
  color: #14147e;
}

.icon {
  width: 28px;
  margin-right: 0.7rem;
}

.social-media {
  padding: 2rem 0 0 0;
}

.social-media p {
  color: #333;
}

.social-icons {
  display: flex;
  margin-top: 0.5rem;
}

.social-icons a {
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: linear-gradient(45deg, #1abc9c, #149279);
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 0.5rem;
  transition: 0.3s;
}

.social-icons a:hover {
  transform: scale(1.05);
}

.contact-info-1:before {
  content: "";
  position: absolute;
  width: 110px;
  height: 100px;
  border: 22px solid #04d36f;
  border-radius: 50%;
  bottom: -77px;
  right: 50px;
  opacity: 0.3;
}

.big-circle {
    position: absolute;
    width: 450px;
    height: 450px;
    border-radius: 50%;
    background: linear-gradient(to bottom, #04d36f, #04d36f);
    bottom: 61%;
    right: 50%;
    transform: translate(-40%, 38%);
}

.big-circle:after {
  content: "";
  position: absolute;
  width: 360px;
  height: 360px;
  background-color: #fafafa;
  border-radius: 50%;
  top: calc(50% - 180px);
  left: calc(50% - 180px);
}

.square {
  position: absolute;
  height: 400px;
  top: 50%;
  left: 50%;
  transform: translate(181%, 11%);
  opacity: 0.2;
}

@media (max-width: 850px) {
  .form {
    grid-template-columns: 1fr;
  }

  .contact-info-1:before {
    bottom: initial;
    top: -75px;
    right: 65px;
    transform: scale(0.95);
  }

  .contact-form:before {
    top: -13px;
    left: initial;
    right: 70px;
  }

  .square {
    transform: translate(140%, 43%);
    height: 350px;
  }

  .big-circle {
    bottom: 75%;
    transform: scale(0.9) translate(-40%, 30%);
    right: 50%;
  }

  .text {
    margin: 1rem 0 1.5rem 0;
  }

  .social-media {
    padding: 1.5rem 0 0 0;
  }
}

@media (max-width: 480px) {
  .containerx {
    padding: 1.5rem;
  }

  .contact-info-1:before {
    display: none;
  }

  .square,
  .big-circle {
    display: none;
  }

  form,
  .contact-info-1 {
   padding: 0.6rem 1rem;
  }

  .text,
  .information,
  .social-media p {
    font-size: 0.8rem;
  }

  .title {
    font-size: 1.15rem;
  }

  .social-icons a {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .icon {
    width: 23px;
  }

  .input {
    padding: 0.45rem 1.2rem;
  }

  .btn {
    padding: 0.45rem 1.2rem;
  }
}


</style>

    <!--Blog Banner CSS-->
<div class="blog_banner about_banner">
	<div class="container">
    	<div class="banner_left">
    		<h1 class="banner_heading">Contact Us</h1>
        	<p class="inner__banner__text">Thank you for choosing our home improvement service! We’re here to help transform your house into a space that reflects your vision and lifestyle. Let’s work together to create a beautiful, functional, and comfortable home for you.</p>
        </div>
    </div>
</div>

<!--    <div id="wrapper">-->
<!--        <h3>CUSTOMER CARE</h3> -->
<!--        <h5></h5>-->
<!--        <p></p>-->
        
<!--        <h5>SEND US A MESSAGE:</h5>-->
<!--        <p></p>-->
        
<!--      	<h5>Address:</h3>-->
<!--        <p></p>-->
<!--        <h5>Phone:</h3>-->
<!--        <p>-->


<!--</p>-->
<!--	</div>-->
	
	
	    <div class="containerx">
      <span class="big-circle"></span>
      <!--<img src="img/shape.png" class="square" alt="Contact Us for Home Improvement Services" />-->
      <div class="form">
        <div class="contact-info-1">
          <h3 class="title">WE ARE HERE FOR YOU!</h3>
          <p class="text">
            Empowering you with support and solutions.
          </p>

          <div class="info">
            <div class="information">
              <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp

              <p>1309 Coffeen Avenue Ste 1200, Sheridan, WY 82801.</p>
            </div>
            <div class="information">
              <i class="fas fa-envelope"></i> &nbsp &nbsp
              <p>service@easyhomeservice.com</p>
            </div>
            <div class="information">
              <i class="fas fa-phone"></i>&nbsp&nbsp
              <p>+18333809800</p>
            </div>
          </div>

          <!--<div class="social-media">-->
          <!--  <p>Connect with us :</p>-->
          <!--  <div class="social-icons">-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-facebook-f"></i>-->
          <!--    </a>-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-twitter"></i>-->
          <!--    </a>-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-instagram"></i>-->
          <!--    </a>-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-linkedin-in"></i>-->
          <!--    </a>-->
          <!--  </div>-->
          <!--</div>-->
        </div>

<div class="contact-form">
    <span class="circle one"></span>
    <span class="circle two"></span>


<form id="myform" method="post" action="javascript:void(0);" novalidate>

    <div class="row">

        <!-- First Name -->
        <div class="col-md-6">
            <div class="input-container">
                <input type="text"
                       name="firstName"
                       class="input"
                       placeholder="Enter Your First Name"
                       required
                       minlength="2"
                       maxlength="50"
                       pattern="[A-Za-z\s\.]+"
                       title="Only letters allowed">
                <small class="error"></small>
            </div>
        </div>
<input type="text" name="website" style="position:absolute; left:-9999px;">
        <!-- Last Name -->
        <div class="col-md-6">
            <div class="input-container">
                <input type="text"
                       name="lastName"
                       class="input"
                       placeholder="Enter Your Last Name"
                       required
                       minlength="1"
                       maxlength="50"
                       pattern="[A-Za-z\s\.]+"
                       title="Only letters allowed">
                <small class="error"></small>
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <div class="input-container">
                <input type="email"
                       name="email"
                       class="input"
                       placeholder="Enter Your Email"
                       required
                       maxlength="150">
                <small class="error"></small>
            </div>
        </div>

        <!-- ZIP Code -->
        <div class="col-md-6">
            <div class="input-container">
                <input type="text"
                       name="zipcode"
                       id="zipcode"
                       class="input"
                       placeholder="Enter Zip Code"
                       inputmode="numeric"
                       maxlength="5"
                       pattern="\d{5}"
                       title="Enter a valid 5-digit US ZIP code"
                       required>
                <small class="error"></small>
            </div>
        </div>

        <!-- Phone -->
        <div class="col-md-6">
            <div class="input-container">
                <input type="tel"
                       name="phoneNumber"
                       class="input"
                       placeholder="Enter Phone Number"
                       required
                       inputmode="numeric"
                       maxlength="14"
                       pattern="\(\d{3}\)\s\d{3}-\d{4}"
                       title="Enter a valid US phone number">
                <small class="error"></small>
            </div>
        </div>

        <div class="col-md-6"></div>

        <!-- Message -->
        <div class="col-12">
            <div class="input-container textarea">
                <textarea name="message"
                          class="input"
                          placeholder="Enter Your Message"
                          required
                          minlength="5"
                          maxlength="1000"
                          rows="4"></textarea>
                <small class="error"></small>
            </div>
        </div>

        <input type="hidden" name="type" value="contactform">
        <input type="hidden" name="service" value="homeservice">
        <input type="hidden"
               name="landing_page"
               value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '', ENT_QUOTES); ?>">
        <input type="hidden"
               name="landingPage"
               value="<?php echo htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? ''), ENT_QUOTES); ?>">

        <div class="col-12">
            <button type="submit" class="btn w-100">Submit</button>
        </div>

    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
$(function () {

    /* ===============================
       ZIP CODE → 5 DIGITS ONLY
    =============================== */
    $('#zipcode').on('input', function () {
        this.value = this.value.replace(/\D/g, '').slice(0, 5);
    });

    /* ===============================
       PHONE → (XXX) XXX-XXXX FORMAT
    =============================== */
    $('input[name="phoneNumber"]').on('input', function () {

        let digits = this.value.replace(/\D/g, '').slice(0, 10);
        let formatted = '';

        if (digits.length > 0) {
            formatted = '(' + digits.slice(0, 3);
        }
        if (digits.length >= 4) {
            formatted += ') ' + digits.slice(3, 6);
        }
        if (digits.length >= 7) {
            formatted += '-' + digits.slice(6, 10);
        }

        this.value = formatted;
    });

    /* ===============================
       FORM SUBMIT
    =============================== */
    $('#myform').on('submit', function (e) {
        e.preventDefault();

        if (!this.checkValidity()) {
            this.reportValidity();
            return;
        }

        const $form = $(this);
        const $btn  = $form.find('button[type="submit"]');

        let raw = {};
        $form.find('[name]').each(function () {
            raw[this.name] = $(this).val();
        });

        // ✅ Send clean phone number (digits only)
        raw.phoneNumber = raw.phoneNumber.replace(/\D/g, '');

        // Defensive validation
        if (!/^\d{10}$/.test(raw.phoneNumber)) {
            alert('Please enter a valid 10-digit US phone number');
            return;
        }

        if (!/^\d{5}$/.test(raw.zipcode)) {
            alert('Please enter a valid 5-digit US ZIP code');
            return;
        }

const payload = {
    /* =========================
       CORE LEAD FIELDS
    ========================= */
    type:        raw.type || 'contactform',
    service:     raw.service || 'homeservice',
    firstName:   raw.firstName || '',
    lastName:    raw.lastName || '',
    email:       raw.email || '',
    phoneNumber: raw.phoneNumber || '',
    message:     raw.message || '',
    zipcode:     raw.zipcode || '',

    /* =========================
       PAGE / SOURCE INFO
    ========================= */
    ipAddress:   raw.ipAddress || '',
    landingPage: raw.landingPage || raw.formURL || raw.landing_page || window.location.href,
    source:      raw.source || '',
    clickid:     raw.clickid || '',

    /* =========================
       TRUSTEDFORM / JORNAYA
    ========================= */

    /* =========================
       TCPA
    ========================= */

    /* =========================
       UTM / ANALYTICS
    ========================= */
    eventid:        raw.eventid || '',
    utm_content:    raw.utm_content || '',
    utm_term:       raw.utm_term || '',
    utm_campaign:   raw.utm_campaign || '',
    utm_medium:     raw.utm_medium || '',
    utm_source:     raw.utm_source || '',
    fbc:            raw.fbc || '',
    fbp:            raw.fbp || '',
    gclid:          raw.gclid || '',
    http_referrer:  raw.http_referrer || ''

    /* =========================
       OPTIONAL / EXTRA
    ========================= */

};


        console.log('🚀 Payload:', payload);

        const encodedPayload = $.param(payload);

        $btn.prop('disabled', true).text('Sending...');

$.ajax({
    url: 'https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b',
    type: 'POST',
    data: encodedPayload,
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    dataType: 'text', // safer

    success: function (res) {

        console.log("RESPONSE:", res);

        // ✅ always redirect
        window.location.href = '/thank-you';

    },

    error: function (xhr) {

        console.log("ERROR:", xhr.responseText);

        // ✅ even on error → redirect
        window.location.href = '/thank-you';

    }
});    });

});
</script>





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

