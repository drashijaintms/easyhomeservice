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


            <!--Size of home-->
            <div class="question_box step" style="display:none;"> 
                <p class="step-hdng1">Select the service type.</p>
                <p class="step-hdng2">Offer key insights to enhance our understanding of your project.</p>
                <div class="option-box">
                    <label class="option-col option-col2">
                        <input type="radio" name="serviceType" value="Surface Water Management">
                        <div class="desc-opt">
                        	<p>Surface Water Management<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="serviceType" value="Basement Flooding">
                        <div class="desc-opt"> 
                            <p>Basement Flooding<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label>
                    <label class="option-col option-col2">
                        <input type="radio" name="serviceType" value="General Drainage Problems">
                        <div class="desc-opt">
                        	<p>General Drainage Problems<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="serviceType" value="Not sure">
                        <div class="desc-opt"> 
                            <p>Not sure<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
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
            
            
            
            
             <div class="question_box step" style="display:none;"> 
                <p class="step-hdng1">What kind of location is this?</p>
                <p class="step-hdng2">This will help us with information about the building's construction.</p>
                <div class="option-box">
                    <label class="option-col option-col2">
                        <input type="radio" value="BUSINESS" name="commercialLocation">
                        <div class="desc-opt">
                        	<p>BUSINESS<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" value="HOME" name="commercialLocation">
                        <div class="desc-opt"> 
                            <p>HOME<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
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
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!--timeframe-->
             <div class="question_box step" style="display:none;">
                <p class="step-hdng1">When you are planning to <br> do the project?</p>
                <p class="step-hdng2">This will help us find contractors available in your time frame.</p>
                <div class="option-box">
                    <label class="option-col option-col2  ">
                        <input type="radio" name="timeframe" value="Timing is Flexible">
                        <div class="desc-opt">
                        	<p>Timing is Flexible<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label>
                    
                    <label class="option-col option-col2  ">
                        <input type="radio" name="timeframe" value="Within 1 week">
                        <div class="desc-opt">
                        	<p>Within 1 week<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label>
                    
                    <label class="option-col option-col2  ">
                        <input type="radio" name="timeframe" value="1 - 2 Weeks">
                        <div class="desc-opt">
                        	<p>1 - 2 Weeks<img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label>
                    
                    <label class="option-col option-col2  ">
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

    <!-- keep this so your radio auto-advance script can find it -->
    <div class="btn_box">
<div class="pm_button-container">
  <button class="pm_button pm_button-back btn-back">Back</button>
  <button class="pm_button pm_button-next next-btn">Next</button>
</div>
<p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
</div>
</div>
            <!--description-->
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
            
            
            
            
            <!--address-->
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
            
            
            
            
            <!--Firstname and lastname-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Mention your first <br>
and last name</p>
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
            
            
            
            <!--email address-->
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
            
            
            
            
            <!--phone number-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Enter your phone number <br class="hide-mob">
to get verbal quotes</p>
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
                            <p class="load6" style="display:none;"><img src="images/check.png" width="34" height="34" alt="check">Drainage contractors found </p>
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
<!--<div class="promise_sec">-->
<!--	<div class="container">-->
<!--    	<p class="promise_sec_hd">We Partner With The Best Bathroom Companies</p>-->
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
</span><br>Got a quote for drainage service.</p>
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

	//move();
// 	$('.next-btn').click(function(e) {		
// 		var item = $(this);	
// 		setTimeout(function(){
// 			$(item).closest('.question_box').hide();
// 			$(item).closest('.question_box').next('.question_box').show();
// 			showBack();
// 		}, 300);
// 		$('body,html').animate({scrollTop: 0}, 800);
		
//     });
	
	
// 	$('.btn-back').click(function(e) {		
// 		var block = $('.question_box:visible');	
// 		setTimeout(function(){
// 			block.hide();
// 			block.prev('.question_box').show();
// 			showBack();	
// 		}, 300);
// 		$('body,html').animate({scrollTop: 0}, 800);
		
//     });
	
	
	$('.next-btn2').click(function(e) {		
		var item = $(this);	
		setTimeout(function(){
			
			$(item).closest('.question_box').hide();
			$(item).closest('.question_box').next('.question_box').show();
			
		}, 300);
	
		setTimeout(function () {
			$('.load1').show();
		}, 500);
		
		setTimeout(function () {
			$('.load2').show();
		}, 1000);
		
		setTimeout(function () {
			$('.load3').show();
		}, 2000);
		
		setTimeout(function () {
			$('.load4').show();
		}, 2500);
		
		setTimeout(function () {
			$('.load5').show();
		}, 3000);
		
		setTimeout(function () {
			$('.load6').show();
			setTimeout(function () {
			window.location.href = getThankYouUrl();
			}, 1300);
	
		}, 3500);
	
	});
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
    $(document).ready(function () {
        // Initially hide all steps except the first one
        $(".step").slice(1).hide();

        var currentStep = 0;
        var steps = $(".step");
        // Next button click event
        $(".next-btn").click(function () {
            if (validateStep(currentStep)) {
                steps.eq(currentStep).hide();
                showBack();
                currentStep++;
                steps.eq(currentStep).show();
            }
        });

    $(".btn-back").click(function () {
                steps.eq(currentStep).hide();
                currentStep--;
                steps.eq(currentStep).show();
            });
            
            
// Form submission (you can add your own logic here)
$(".submit").click(function () {
if (validateStep(currentStep)) {
    // Get form data
    var formData = $("#myform").serialize();

    //Send the data to window-data.php using AJAX
         $.ajax({
        type: "GET", // Change to POST method
        url: "https://easyhomeservice.com/send-drainage.php", // Specify the URL of your PHP file
        data: formData, // Pass the serialized form data
        success: function (response) {
            // Handle the response from the server
            // alert("Form submitted successfully!");
            //console.log(response); // Log the entire response
            console.log(formData);
            // You can do more here if needed

            // Assuming you want to redirect after successful submission
            // window.location = "https://easyhomeserve.com/thank-you.php";
        },
        error: function (error) {
            // Handle errors, if any
            console.log("Error:", error);
        }
    });
}
});


        // Function to validate a step
        function validateStep(step) {
            var isValid = true;

            // Reset error messages
            $(".error-msg").text("");

            // Add your validation logic for each step here
            // For example, for the first step (zipcode):
            if (step === 0) {
                var zipcode = $("#zipcode").val();
                if (!/^\d{5}$/.test(zipcode)) {
                    $("#zipcode-error").text("Enter ZIP code.");
                    isValid = false;
                }
            }

            // Example for Step 2 (Radio Buttons):
            if (step === 1) {
                
            }


            if (step === 2) {
          
            }
            if (step === 3) {
          
            }
  if (step === 4) {

    }
            if (step === 5) {
                $("#description-error").text("");
            }


            if (step === 6) {

var address = $("#address").val();
var city = $("#city").val(); 
var state = $("#state").val(); 

if (!city) {
    $("#address-error").text("Please enter your city.");
    isValid = false;
}

else if (!state) {
    $("#address-error").text("Please enter your state.");
    isValid = false;
} 

if (!address) {
    $("#address-error").text("Please enter your address.");
    isValid = false;
}
}









if (step === 7) {
var firstname = $("#fname").val();
var lastName = $("#lname").val();

if (!firstname) {
    $("#fname-error").text("Please enter your name.");
    isValid = false;
} else {
    $("#name-error").text(""); // Clear the error message
}

if (!lastName) {
    $("#lname-error").text("Please enter your last name.");
    isValid = false;
} else {
    $("#lname-error").text(""); // Clear the error message
}
}



            // Example for Step 5 (Email Address):
            if (step === 8) {
var email = $("#email").val();


// Regular expression for validating email format.
var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

if (!email) {
    $("#email-error").text("Please enter your email address.");
    isValid = false;
} else if (!emailPattern.test(email)) {
    $("#email-error").text("Please enter a valid email address.");
    isValid = false;
}
}


            // Example for Step 6 (Additional Information):
if (step === 9) {
    var phone = $("#phone").val();

    // Regular expression for validating a phone number with optional hyphens or spaces
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
    } else {
        $("#consent-error").text(""); // Clear the error message if checkbox is checked

        // Check if both phone is not null and consentCheckbox is checked
        if (phonePattern.test(phone) && consentCheckbox.is(":checked")) {
            // Trigger the click event on the button with class "next-btn2"
            $(".next-btn2").trigger("click");
        }
    }
}






return isValid;
}
    
    });
</script>


<script>
    $(document).ready(function() {
        // Attach a click event listener to radio buttons without the "no-click-trigger" class
        $('input[type="radio"]:not(.no-click-trigger)').on('change', function() {
            // Find the closest "Next" button to the clicked radio button within the same step
            var $nextButton = $(this).closest('.step').find('input[type="button"]').first();
            
            // Trigger a click event on the found "Next" button
            $nextButton.click();
        });
    });
    </script>


<script>
//     $(".submit").click(function () {
//     // Assuming you have a form with id="yourFormId"
//     var formData = $("#myform").serialize(); // Serialize the form data

//     // Send the data to window-data.php using AJAX
//     $.ajax({
//         type: "POST", // Change to POST method
//         url: "https://easyhomeservice.com/send-bathroom.php", // Specify the URL of your PHP file
//         data: formData, // Pass the serialized form data
//         success: function (response) {
//             // Handle the response from the server
//             // alert("Form submitted successfully!");
//             console.log(response); // Log the entire response
//             console.log(formData);
//             // You can do more here if needed

//             // Assuming you want to redirect after successful submission
//             // window.location = "https://easyhomeserve.com/thank-you.php";
//         },
//         error: function (error) {
//             // Handle errors, if any
//             console.log("Error:", error);
//         }
//     });
// });

</script>
</body>
</html>