<?php include ('step-header.php');?>

<!----Question-Section---->
<div class="quiz-sec">	
	<div class="container">
        <div class="contnt-sec">
            
            <form id="myform" method="post">
            <!--Zip code-->
            <div class="question_box step1 step" style="display:;">
               <p class="step-hdng1">Enter your zip code</p>
                <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob">contractors in your area. </p>
                <div class="info-bx">
                    <div class="frmElemts">
                        <input type="text" class="inp-fld" placeholder="Enter Zip Code" id="zipcode" pattern="[0-9]{5}" required="" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="zipcode" inputmode="numeric" value="<?php echo $_GET['zip']; ?>">
                    </div>
                      <div class="error-msg" id="zipcode-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
                        <a href="javascript:void(0)" class="common_btn next-btn">Next<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                        <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
                    </div>
                </div>

            </div>
            
            
            
            <!-- Walls -->
            <div class="question_box step" style="display:none;"> 
                <p class="step-hdng1">Does your bathroom remodel require removing or adding any walls?</p>
                <p class="step-hdng2">Offer key insights to enhance our understanding of your project.</p>
                <div class="option-box">
                    <label class="option-col option-col2">
                        <input type="radio" name="removeWalls" value="YES">
                        <div class="desc-opt">
                        	<p>Yes<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2">
                        <input type="radio" name="removeWalls" value="NO">
                        <div class="desc-opt"> 
                            <p>No<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label>
                </div>
                <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
            </div>
            
            
            <!-- timeframe -->
             <div class="question_box step" style="display:none;">
                <p class="step-hdng1">When you are planning to <br> do the project?</p>
                <p class="step-hdng2">This will help us find contractors available in your time frame.</p>
                <div class="option-box">
                    <label class="option-col option-col2">
                        <input type="radio" name="timeframe" value="Timing is Flexible">
                        <div class="desc-opt">
                        	<p>Timing is Flexible<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label>
                    
                    <label class="option-col option-col2">
                        <input type="radio" name="timeframe" value="Within 1 week">
                        <div class="desc-opt">
                        	<p>Within 1 week<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label>
                    
                    <label class="option-col option-col2">
                        <input type="radio" name="timeframe" value="1 - 2 Weeks">
                        <div class="desc-opt">
                        	<p>1 - 2 Weeks<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label>
                    
                    <label class="option-col option-col2">
                        <input type="radio" name="timeframe" value="More than 2 Week">
                        <div class="desc-opt">
                        	<p>More than 2 Week<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label>
                    
                </div>
               <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
            </div>
            
            <!-- Homeowner? -->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Are you the Home Owner?</p>
                <p class="step-hdng2">Some contractors require the owner’s approval for work.</p>

                <div class="option-box">
                    <label class="option-col option-col2">
                        <input type="radio" name="homeowner" value="YES">
                        <div class="desc-opt">
                            <p>Yes <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label>

                    <label class="option-col option-col2">
                        <input type="radio" name="homeowner" value="NO">
                        <div class="desc-opt">
                            <p>No <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label>
                </div>

                <div class="error-msg" id="homeowner-error"></div>
                <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
            </div>

            
            <!-- service type -->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Which bathroom service do you need?</p>
                <p class="step-hdng2">Pick the option that best matches your project.</p>

                <div class="option-box">
                    <label class="option-col option-col2">
                        <input type="radio" name="service" value="SHOWER">
                        <div class="desc-opt">
                            <p>Shower <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label>

                    <label class="option-col option-col2">
                        <input type="radio" name="service" value="CABINET">
                        <div class="desc-opt">
                            <p>Cabinet <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label>

                    <label class="option-col option-col2">
                        <input type="radio" name="service" value="Other">
                        <div class="desc-opt">
                            <p>Other <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label>
                </div>

                <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
            </div>

            <!-- NEW: subservice (dynamic) -->
            <div class="question_box step" id="subservice-step" style="display:none;">
                <p class="step-hdng1">Great — tell us a bit more</p>
                <p class="step-hdng2">Pick the option that matches your project.</p>

                <div class="option-box" id="subservice-options">
                    <!-- injected by JS -->
                </div>

                <div class="error-msg" id="subservice-error"></div>
                <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
            </div>

            <!-- description -->
            <div class="question_box step" style="display:none;">
               <p class="step-hdng1">Describe your project</p>
               <p class="step-hdng2">This will help us understand your needs better.</p>
               <div class="info-bx">
                   <div class="frmElemts">
                       <textarea id="description" name="description" rows="3" cols="50" class="inp-fld" placeholder="Describe your project within 250 characters"></textarea>
                   </div>
                   <div class="error-msg" id="description-error"></div>
                   <div class="clearall"></div>
                   <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
               </div>
            </div>
            
            <!-- address -->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Where will this project <br>take place?</p>
                <p class="step-hdng2">Your address ensures we find contractors conveniently located for you.</p>
                <div class="info-bx">
                    <div class="frmElemts">
                        <input type="text" name="address" id="address" class="inp-fld" placeholder="Enter Street Address">
                    </div>
                    <div class="frmElemts">
                        <input type="text" name="city" id="city" class="inp-fld" placeholder="Enter City">
                    </div>
                    <div class="frmElemts">
                        <input type="text" name="state" id="state" class="inp-fld" placeholder="Enter State">
                    </div>
                    <div class="error-msg" id="address-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
                </div>
            </div>
            
            <!-- name -->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Mention your first <br>and last name</p>
                <p class="step-hdng2">Your free quotes will be made out to our name, <br class="hide-mob">to help with insurance.</p>
                <div class="info-bx">
                    <div class="frmElemts">
                        <input type="text" name="fname" id="fname" class="inp-fld" placeholder="First Name">
                    </div>
                    <div class="error-msg" id="fname-error"></div>
                    <div class="frmElemts">
                        <input type="text" name="lname" id="lname" class="inp-fld" placeholder="Last Name">
                    </div>
                    <div class="error-msg" id="lname-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
                </div>
            </div>
            
            <!-- email -->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Enter your email for better <br class="hide-mob">communication</p>
                <p class="step-hdng2">We never spam or share your email.</p>
                <div class="info-bx">
                    <div class="frmElemts">
                        <input type="email" name="email" id="email" class="inp-fld" placeholder="Email">
                    </div>
                    <div class="error-msg" id="email-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
                </div>
            </div>
            
            <!-- phone -->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Enter your phone number <br class="hide-mob">to get verbal quotes</p>
                <p class="step-hdng2">Let us know where the certified contractors can call you.</p>
                <div class="info-bx">
                    <div class="frmElemts">
                        <input type="text" name="phone" id="phone" class="inp-fld" placeholder="Enter Phone Number" pattern="[0-9]{5}" required="" maxlength="18" oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric">
                    </div>
                      <div class="error-msg" id="phone-error"></div>
<?php include('includes/consent.php');?>
                    <div class="error-msg" id="consent-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn submit" type="submit">Submit</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
                    <input type="button" class="next-btn2" hidden>
                </div>
            </div>


            <div class="question_box" style="display:none;">
                <div class="loader_box">
                    <img src="images/loader.gif" class="loader-img" width="282" height="28" alt="loader">
                    <ul class="loader_list">
                        <li>
                            <h3 class="load1" style="display:none;">Submitting your responses</h3>
                            <p class="load2" style="display:none;"><img src="images/check.png" width="34" height="34" alt="check">Submitted</p>
                        </li>
                        <li>
                            <h3 class="load3" style="display:none;">Reviewing your responses</h3>
                            <p class="load4" style="display:none;"><img src="images/check.png" width="34" height="34" alt="check">Reviewed </p>
                        </li>
                        <li>
                            <h3 class="load5" style="display:none;">Looking for certified contractors in your area </h3>
                            <p class="load6" style="display:none;"><img src="images/check.png" width="34" height="34" alt="check">Bathroom contractors found </p>
                        </li>
                    </ul>
                </div>
            </div>

			<div class="revw-bx">
                <img src="images/cust_review_img1.jpg" class="review_img" width="68" height="68" alt="iamge">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="revw-txt1">Maecenas nec odio et ante tincidunt tempus.</p>
                <p class="revw-txt2">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulp utate cursus amet mauris. Morbi accumsan ipsum velit tellus.</p>
                <p class="revw-txt3"><span>Jennifer N.</span> Verified Subscriber</p>
            </div>
            
            </form>
            
        </div>
	</div>
</div>


<!----Promise-Section----->
<?php include'promise.php' ?>
<!---------Footer--------->
<?php include'footer.php' ?>


<!--SOCIAL_POP-->
<section class="custom-social-proof">
    <div class="custom-notification">
        <div class="custom-notification-container">
            <div class="custom-notification-image-wrapper">
                <img class="avatar" src="images/dave.jpg" width="93" height="93" alt="img">
            </div>
            <div class="custom-notification-content-wrapper">
                <p class="custom-notification-content">
                    <span id="notify-customer">Dave</span> <strong class="us">from</strong> <span id="notify-state">Orlando, Florida
</span><br>Got a quote for bathroom service.</p>
                <p class="time-very"><span class="time" id="notify-time">23 minutes ago</span> <span class="verified-pop"><img src="images/t-chk.png">Verified</span></p>
            </div>
        </div>
    </div>
</section>

<!--------Script---------->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/social-proof.js"></script>

<script type="text/javascript">
function showBack(){
	if ($('.step1').is(':visible')){
		$('.btn-back').hide();
	}else{
		$('.btn-back').show();
	}
}

$(document).ready(function(){
	showBack();

	$('.next-btn2').click(function(e) {		
		var item = $(this);	
		setTimeout(function(){
			$(item).closest('.question_box').hide();
			$(item).closest('.question_box').next('.question_box').show();
		}, 300);
	
		setTimeout(function () { $('.load1').show(); }, 500);
		setTimeout(function () { $('.load2').show(); }, 1000);
		setTimeout(function () { $('.load3').show(); }, 2000);
		setTimeout(function () { $('.load4').show(); }, 2500);
		setTimeout(function () { $('.load5').show(); }, 3000);
		setTimeout(function () {
			$('.load6').show();
			setTimeout(function () {
				window.location.href = getThankYouUrl();
			}, 1300);
		}, 3500);
	});
});

// MODAL POPUP JS
$(document).on('click', '#app_common_modal_close', function() {
	$('#app_common_modal').remove();
});	
function openNewWindow(page_url, type, window_name, width, height, top, left, features) {
    if (!type) { type = 'popup'; }
    if (!width) { width = 480; }
    if (!height) { height = 480; }
    if (!top) { top = 50; }
    if (!left) { left = 50; }
    if (!features) { features = 'resizable,scrollbars'; }

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
// =================== WIZARD LOGIC + VALIDATION ===================
$(document).ready(function () {
    // Hide all but first step
    $(".step").slice(1).hide();

    var currentStep = 0;
    var steps = $(".step");
    var subserviceRequired = false; // flag toggled by service selection

    // Helper to build radios
    function buildRadio(name, value, label) {
      return (
        '<label class="option-col option-col2">' +
          '<input type="radio" name="' + name + '" value="' + value + '">' +
          '<div class="desc-opt"><p>' + label + ' <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p></div>' +
        '</label>'
      );
    }

    // Service change => populate subservice slide
    $(document).on('change', 'input[name="service"]', function () {
      var service = $(this).val();
      var $box = $('#subservice-options');
      var $err = $('#subservice-error');
      $box.empty(); $err.text('');

      if (service === 'SHOWER') {
        // subserviceRequired = true;
        // $box.append(buildRadio('subservice', 'Tub to Shower', 'Tub to Shower'));
        // $box.append(buildRadio('subservice', 'Shower to Shower', 'Shower to Shower'));
        // $('#subservice-step .step-hdng1').text('For showers, what are you doing?');
        
                subserviceRequired = false; // "Other"


      } else if (service === 'CABINET') {
        subserviceRequired = true;
        $box.append(buildRadio('subservice', 'CABINET INSTALL', 'CABINET INSTALL'));
        $box.append(buildRadio('subservice', 'CABINET REFANCING', 'CABINET REFANCING'));
        $box.append(buildRadio('subservice', 'CABINET REFINISH', 'CABINET REFINISH'));
        $('#subservice-step .step-hdng1').text('For cabinets, what are you doing?');

      } else {
        subserviceRequired = false; // "Other"
      }
    });

    // Delegated auto-advance for all radios (works for injected subservice radios)
    $(document).on('change', 'input[type="radio"]:not(.no-click-trigger)', function () {
      var $nextButton = $(this).closest('.step').find('input[type="button"]').first();
      $nextButton.click();
    });

    // Next button click
    $(".next-btn").click(function () {
        if (validateStep(currentStep)) {
            steps.eq(currentStep).hide();
            showBack();
            currentStep++;

            // If we just left Service step (index 4) and subservice is NOT required, skip subservice (index 5)
            if (currentStep === 5 && !subserviceRequired) {
                currentStep++;
            }

            steps.eq(currentStep).show();
            $('body,html').animate({scrollTop: 0}, 300);
        }
    });

    // Back button (if you render one)
$(".btn-back").click(function () {
  steps.eq(currentStep).hide();
  currentStep--;

  // If we just landed on the Subservice index (5) but it's not required, skip back over it to Service (4)
  if (currentStep === 5 && !subserviceRequired) {
    currentStep--; // jump to Service step
  }

  steps.eq(currentStep).show();
  $('body,html').animate({scrollTop: 0}, 300);
});
            
    // Submit via AJAX
// In your submit handler
$(".submit").click(function () {
    if (validateStep(currentStep)) {
        // If service = CABINET, then replace service with selected subservice
        var serviceVal = $('input[name="service"]:checked').val();
        if (serviceVal === "CABINET") {
            var subVal = $('input[name="subservice"]:checked').val();
            if (subVal) {
                // overwrite service value with chosen subservice
                $('input[name="service"]:checked').val(subVal);
            }
        }

        var formData = $("#myform").serialize();

        $.ajax({
            type: "GET",
            url: "send-bathroom-feedxo.php",
            data: formData,
            success: function (response) {
                console.log(formData);
            },
            error: function (error) {
                console.log("Error:", error);
            }
        });
    }
});

    // Validation per step (indexes reflect the inserted subservice step)
    function validateStep(step) {
        var isValid = true;
        $(".error-msg").text("");

        // 0: Zip
        if (step === 0) {
            var zipcode = $("#zipcode").val();
            if (!/^\d{5}$/.test(zipcode)) {
                $("#zipcode-error").text("Enter ZIP code.");
                isValid = false;
            }
        }

        // 1: Walls (radio) – handled by auto-advance
        if (step === 1) {}

        // 2: Timeframe (radio)
        if (step === 2) {}

        // 3: Homeowner (radio)
        if (step === 3) {}

        // 4: Service (radio)
        if (step === 4) {}

        // 5: Subservice (radio) – only required for Shower/Cabinet
        if (step === 5 && subserviceRequired) {
            if (!$('input[name="subservice"]:checked').length) {
                $("#subservice-error").text("Please choose an option.");
                isValid = false;
            }
        }

        // 6: Description
        if (step === 6) {
            $("#description-error").text("");
        }

        // 7: Address
        if (step === 7) {
            var address = $("#address").val();
            var city = $("#city").val();
            var state = $("#state").val();
            if (!address) {
                $("#address-error").text("Please enter your address.");
                isValid = false;
            } else if (!city) {
                $("#address-error").text("Please enter your city.");
                isValid = false;
            } else if (!state) {
                $("#address-error").text("Please enter your state.");
                isValid = false;
            }
        }

        // 8: Name
        if (step === 8) {
            var firstname = $("#fname").val();
            var lastName = $("#lname").val();
            if (!firstname) {
                $("#fname-error").text("Please enter your name.");
                isValid = false;
            }
            if (!lastName) {
                $("#lname-error").text("Please enter your last name.");
                isValid = false;
            }
        }

        // 9: Email
        if (step === 9) {
            var email = $("#email").val();
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!email) {
                $("#email-error").text("Please enter your email address.");
                isValid = false;
            } else if (!emailPattern.test(email)) {
                $("#email-error").text("Please enter a valid email address.");
                isValid = false;
            }
        }

        // 10: Phone & Consent
        if (step === 10) {
            var phone = $("#phone").val();
            // digits-only to match your input filter
       var phonePattern = /^\(\d{3}\)\s?\d{3}-\d{4}$/;

            if (!phone) {
                $("#phone-error").text("Please provide a phone number.");
                isValid = false;
            } else if (!phonePattern.test(phone)) {
                $("#phone-error").text("Please enter a valid phone number.");
                isValid = false;
            }

            var consentCheckbox = $("#phoneterms");
            if (!consentCheckbox.is(":checked")) {
                $("#consent-error").text("Please give your consent.");
                isValid = false;
            } else if (phonePattern.test(phone)) {
                $(".next-btn2").trigger("click");
            }
        }

        return isValid;
    }
});
</script>

</body>
</html>
