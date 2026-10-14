<?php include('step-header.php') ?>

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
                        <input type="text" class="inp-fld" placeholder="Enter Zip Code" id="Property_Zip" pattern="[0-9]{5}" required="" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Property_Zip" inputmode="numeric" value="<?php echo $_GET['zip']; ?>">
                    </div>
                    <div class="error-msg" id="Property_Zip-error"></div>
                    
                    <div class="clearall"></div>
                    <div class="btn_box">
                        <a href="javascript:void(0)" class="common_btn next-btn">Next<img src="../images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                        <p class="btn_text inner_btn_text"><img src="../images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
                    </div>
                </div>

            </div>
            

            <!--Window_Task-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Select the service you are looking for.</p>
                <p class="step-hdng2">Offer key insights to enhance our understanding of your project.</p>
                <div class="option-box">
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Window_Task" value="New Window - Single">
                        <div class="desc-opt">
                        	<p>New Window - Single<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Window_Task" value="New Windows - 2">
                        <div class="desc-opt"> 
                            <p>New Windows - 2<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label> 
                    
                                 <label class="option-col option-col2  ">
                        <input type="radio" name="Window_Task" value="New Windows - 3-5">
                        <div class="desc-opt">
                        	<p>New Windows - 3-5<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Window_Task" value="New Windows - 6-9">
                        <div class="desc-opt"> 
                            <p>New Windows - 6-9<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label> 
                    
                    
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Window_Task" value="New Windows - 10+">
                        <div class="desc-opt"> 
                            <p>New Windows - 10+<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label> 
                    
                
                    
                </div>
                 <input type="button" class="next-btn" hidden>
            </div>
            
            <!--Property_Owner-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Are you the property owner?</p>
                <p class="step-hdng2">Offer key insights to enhance our understanding of your project.</p>
                <div class="option-box">
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Property_Owner" value="Yes">
                        <div class="desc-opt">
                        	<p>Yes<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Property_Owner" value="No">
                        <div class="desc-opt"> 
                            <p>No<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label> 
                </div>
                 <input type="button" class="next-btn" hidden>
            </div>


            <!--Best_Time_To_Call-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">What will be the best time to call you?</p>
                <p class="step-hdng2">Offer key insights to enhance our understanding of your project.</p>
                <div class="option-box">
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Best_Time_To_Call" value="Morning">
                        <div class="desc-opt">
                        	<p>Morning<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>    
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Best_Time_To_Call" value="Afternoon">
                        <div class="desc-opt"> 
                            <p>Afternoon<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Best_Time_To_Call" value="Evening">
                        <div class="desc-opt"> 
                            <p>Evening<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label> 
                    <label class="option-col option-col2  ">
                        <input type="radio" name="Best_Time_To_Call" value="Anytime">
                        <div class="desc-opt"> 
                            <p>Anytime<img src="../images/step-tick.png" class="icon-img" width="18" height="18" alt="icon"></p>
                        </div>
                    </label> 
                </div>
                 <input type="button" class="next-btn" hidden>
            </div>


            <!--Timing-->
             <div class="question_box step" style="display:none;">
                <p class="step-hdng1">When you are planning to <br> do the project?</p>
                <p class="step-hdng2">This will help us find contractors available in your time frame.</p>
                <div class="option-box">
            <label class="option-col option-col2">
              <select class="desc-opt-select" id="Timing" name="Timing">
                <option value="" selected="" disabled=""> Select any one </option>
                <option value="Immediately">Immediately</option>
                <option value="Flexible">Flexible</option>
                <option value="Within One week">Within One week</option>
                <option value="One to Two Weeks">One to Two Weeks</option>
                <option value="More Than Two Weeks">More Than Two Weeks</option>
                <option value="Not Sure">Not Sure</option>
              </select>
            </label>
            <div class="error-msg" id="Roof_Material-error"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
            </div>

            <!--Comments-->
            <div class="question_box step" style="display:none;">
               <p class="step-hdng1">Describe your project</p>
                <p class="step-hdng2">This will help us understand your needs better.</p>
                <div class="info-bx">
                    <div class="frmElemts">
                        
                        
                        <textarea id="Comments" name="Comments" rows="3" cols="50" class="inp-fld" placeholder="Describe your project within 250 characters"></textarea>

                    </div>
                    <div class="error-msg" id="Comments-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
                        <a href="javascript:void(0)" class="common_btn next-btn">Next<img src="../images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                        <p class="btn_text inner_btn_text"><img src="../images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
                    </div>
                </div>
                </div>
            
            
            
            
            <!--address-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Where will this project <br>take place?</p>
                <p class="step-hdng2">Your address ensures we find contractors conveniently located for you.</p>
                <div class="info-bx">
                    <div class="frmElemts">
      <label class="option-col option-col2">
        <select class="desc-opt-select" id="Property_State" name="Property_State">
          <option value="" selected disabled>Select any one</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="MA">Massachusetts</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VA">Virginia</option>
          <option value="VT">Vermont</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
      </label>
    </div>
                    <div class="frmElemts">
                        <input type="text" name="Property_City" id="Property_City" class="inp-fld" placeholder="Enter Property_City">
                    </div>
                    <div class="frmElemts">
                        <input type="text" name="Property_Address" id="Property_Address" class="inp-fld" placeholder="Enter Property Address">
                    </div>                    
                    <div class="error-msg" id="address-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
                        <a href="javascript:void(0)" class="common_btn next-btn">Next<img src="../images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                        <p class="btn_text inner_btn_text"><img src="../images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
                    </div>
                </div>
            </div>
            
            
            
            
            <!--firstName and lastName-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Mention your first <br> and last name</p>
                <p class="step-hdng2">Your free quotes will be made out to our name, <br class="hide-mob">to help with insurance.</p>
                <div class="info-bx">
                    <div class="frmElemts">
                        <input type="text" name="firstName" id="firstName" class="inp-fld" placeholder="First Name">
                    </div>
                     <div class="error-msg" id="firstName-error"></div>
                    <div class="frmElemts">
                        <input type="text" name="lastName" id="lastName" class="inp-fld" placeholder="Last Name">
                    </div>
                     <div class="error-msg" id="lastName-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
                        <a href="javascript:void(0)" class="common_btn next-btn">Next<img src="../images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
                        <p class="btn_text inner_btn_text"><img src="../images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
                    </div>
                </div>
            </div>
            
            
        <!--email address and secondary_phone-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Enter your email and phone number for better <br class="hide-mob">communication </p>
          <p class="step-hdng2">We never spam or share your email.</p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="email" name="Email" id="Email" class="inp-fld" placeholder="Email">
            </div>
            <div class="error-msg" id="Email-error"></div>
            <div class="frmElemts">
                        <input type="text" name="Secondary_phone" id="Secondary_phone" class="inp-fld" placeholder="Enter Secondary_phone Number" pattern="[0-9]{5}" required="" maxlength="18" oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric">
                    </div>
            <div class="error-msg" id="Secondary_phone-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
            
            
            
            <!--phone number-->
            <div class="question_box step" style="display:none;">
                <p class="step-hdng1">Enter your phone number <br class="hide-mob"> to get verbal quotes</p>
                <p class="step-hdng2">Let us know where the certified contractors can call you.</p>
                <div class="info-bx">
                    <div class="frmElemts">
                        <input type="text" name="phone" id="phone" class="inp-fld" placeholder="Enter Phone Number" pattern="[0-9]{5}" required="" maxlength="18" oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric">
                    </div>
                      <div class="error-msg" id="phone-error"></div>
                    <div class="term-check">
                    	<input type="checkbox" name="terms" id="phoneterms"><label for="phoneterms">By clicking "Agree and Submit", I agree to the <a href="javascript:void(0);" onclick="openNewWindow('privacy-policy.php','modal');">Privacy Policy</a> and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions</a>. I also consent to receive marketing communications through email and other texts or calls from EasyHomeService.com and/or its marketing partners about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of <a href="javascript:void(0);" onclick="openNewWindow('marketing-partners.php','modal');">marketing partners</a>.</label>
                    </div>
                    <div class="error-msg" id="consent-error"></div>
                    <div class="clearall"></div>
                    <div class="btn_box">
                        <a href="javascript:void(0)" class="common_btn next-btn submit" type="submit">Submit</a>
                        <p class="btn_text inner_btn_text"><img src="../images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.</p>
                    </div>
                    <input type="button" class="next-btn2" hidden>
                </div>
            </div>


            <div class="question_box" style="display:none;">
                
                <div class="loader_box">
                    <img src="../images/loader.gif" class="loader-img" width="282" height="28" alt="loader">
                    <ul class="loader_list">
                        <li>
                            <h3 class="load1" style="display:none;">Submitting your responses</h3>
                            <p class="load2" style="display:none;"><img src="../images/check.png" width="34" height="34" alt="check">Submitted</p>
                        </li>
                        <li>
                            <h3 class="load3" style="display:none;">Reviewing your responses</h3>
                            <p class="load4" style="display:none;"><img src="../images/check.png" width="34" height="34" alt="check">Reviewed </p>
                        </li>
                        <li>
                            <h3 class="load5" style="display:none;">Looking for certified contractors in your area </h3>
                            <p class="load6" style="display:none;"><img src="../images/check.png" width="34" height="34" alt="check">Window contractors found </p>
                        </li>
                    </ul>
                    
                </div>
                
            </div>




</form>




			<div class="revw-bx">
                <img src="../images/cust_review_img1.jpg" class="review_img" width="68" height="68" alt="iamge">
                <img src="../images/star.png" class="star" width="300" height="60" alt="star">
                <p class="revw-txt1">Maecenas nec odio et ante tincidunt tempus.</p>
                <p class="revw-txt2">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulp utate cursus amet mauris. Morbi accumsan ipsum velit tellus.</p>
                <p class="revw-txt3"><span>Jennifer N.</span> Verified Subscriber</p>
            </div>
        </div>
	</div>
</div>


<!----Promise-Section----->
<!--<div class="promise_sec">-->
<!--	<div class="container">-->
<!--    	<p class="promise_sec_hd">We Partner With The Best Window Companies</p>-->
<!--    	<ul class="promise_list">-->
<!--        	<li><img src="../images/promise_logo1.png" class="promise_logo1" width="300" height="101" alt="logo1"></li>-->
<!--            <li><img src="../images/promise_logo2.png" class="promise_logo2" width="300" height="82" alt="logo1"></li>-->
<!--            <li><img src="../images/promise_logo3.png" class="promise_logo3" width="300" height="113" alt="logo1"></li>-->
<!--            <li><img src="../images/promise_logo4.png" class="promise_logo4" width="300" height="100" alt="logo1"></li>-->
<!--            <li><img src="../images/promise_logo5.png" class="promise_logo5" width="300" height="90" alt="logo1"></li>-->
<!--            <li><img src="../images/promise_logo6.png" class="promise_logo6" width="300" height="131" alt="logo1"></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

<?php include'promise.php' ?>


<!---------Footer--------->
<?php include'footer-test.php' ?>


<!--SOCIAL_POP-->


<section class="custom-social-proof">
    <div class="custom-notification">
        <div class="custom-notification-container">
            <div class="custom-notification-image-wrapper">
                <img class="avatar" src="https://easyhomeservice.com/images/dave.jpg" width="93" height="93" alt="img">
            </div>
            <div class="custom-notification-content-wrapper">
                <p class="custom-notification-content">
                    <span id="notify-customer">Dave</span> <strong class="us">from</strong> <span id="notify-state">Orlando, Florida
</span><br>Got a quote for window service.</p>
                <p class="time-very"><span class="time" id="notify-time">23 minutes ago</span> <span class="verified-pop"><img src="https://easyhomeservice.com/images/t-chk.png">Verified</span></p>
            </div>
        </div>
    </div>
</section>

<!--------Script---------->
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/social-proof.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">

function showBack() {
    if ($('.step1').is(':visible')) {
        $('.btn-back').hide();
    } else {
        $('.btn-back').show();
    }
}


$(document).ready(function () {
    showBack();

    $('.next-btn2').click(function (e) {
        var item = $(this);

        setTimeout(function () {
            $(item).closest('.question_box').hide();
            $(item).closest('.question_box').next('.question_box').show();
            showBack(); // Call the function to update back button visibility
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
                // window.location.href = 'thank-you.php';
            }, 1300);
        }, 3500);
    });

    $('.btn-back').click(function () {
        var currentStep = $('.question_box:visible');
        var prevStep = currentStep.prev('.question_box');

        if (prevStep.length) {
            currentStep.hide();
            prevStep.show();
            showBack(); // Update back button visibility
        }
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
        url: "https://easyhomeservice.com/send-window-copy1.php", // Specify the URL of your PHP file
        data: formData, // Pass the serialized form data
        success: function (response) {
            // Handle the response from the server
            // alert("Form submitted successfully!");
            //console.log(response); // Log the entire response
            console.log("Form Data Sent:", formData);
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
            // For example, for the first step (Property_Zip):
            if (step === 0) {
                var Property_Zip = $("#Property_Zip").val();
                if (!/^\d{5}$/.test(Property_Zip)) {
                    $("#Property_Zip-error").text("Enter ZIP code.");
                    isValid = false;
                }
            }

            // Example for Step 2 (Radio Buttons):
            if (step === 1) {
                
            }


            if (step === 2) {
          
            }

            if(step === 3)
            {
                
            }
             if(step === 4)
            {
        var option = $("#Timing").val();
        if (!option) {
            $("#Timing-error").text("Please choose an option.");
            isValid = false;
        }
    }

            if (step === 5) {
                var Comments = $("#Comments").val();
                
                if (!Comments) {
                    $("#Comments-error").text("This Comments is required");
                    isValid = false;
                }
            }


 if (step === 6) {
    var Property_State = $("#Property_State").val(),
        Property_City = $("#Property_City").val(),
        Property_Address = $("#Property_Address").val();

    if (!Property_State && !Property_City && !Property_Address) {
        $("#address-error").text("Please enter your state, Property_City, and street address.");
        isValid = false;
    } else if (!Property_State) {
        $("#address-error").text("Please select your state.");
        isValid = false;
    } else if (!Property_City) {
        $("#address-error").text("Please enter your Property_City.");
        isValid = false;
    } else if (!Property_Address) {
        $("#address-error").text("Please enter your street address.");
        isValid = false;
    } 
    else {
        $("#address-error").text("");
    }
}




if (step === 7) {
var firstName = $("#firstName").val();
var lastName = $("#lastName").val();

if (!firstName) {
    $("#firstName-error").text("Please enter your name.");
    isValid = false;
} else {
    $("#name-error").text(""); // Clear the error message
}

if (!lastName) {
    $("#lastName-error").text("Please enter your last name.");
    isValid = false;
} else {
    $("#lastName-error").text(""); // Clear the error message
}
}



if (step === 8) {
        var Email = $("#Email").val();
        
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (!Email) {
            $("#Email-error").text("Please enter your email address.");
            isValid = false;
        } else if (!emailPattern.test(Email)) {
            $("#Email-error").text("Please enter a valid email address.");
            isValid = false;
        }
        
         var Secondary_phone = $("#Secondary_phone").val();
    // var Secondary_phonePattern = /^\(\d{3}\)\s?\d{3}-\d{4}$/;
       var Secondary_phonePattern = /^\(\d{3}\)\s?\d{3}-\d{4}$/;

        if (!Secondary_phone) {
            $("#Secondary_phone-error").text("Please provide a Secondary_phone number.");
            isValid = false;
        } else if (!Secondary_phonePattern.test(Secondary_phone)) {
            $("#Secondary_phone-error").text("Please enter a valid Secondary_phone number.");
            isValid = false;
        }
    }

            // Example for Step 6 (Additional Information):
if (step === 9)  {
         var phone = $("#phone").val();
    // var phonePattern = /^\(\d{3}\)\s?\d{3}-\d{4}$/;
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
            $("#consent-error").text("");
            if (phonePattern.test(phone) && consentCheckbox.is(":checked")) {
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
$(function () {
  // Format phone number on any input/paste
  $('#phone').on('input', function () {
    let digits = $(this).val().replace(/\D/g, ''); // keep only numbers
    digits = digits.slice(0, 10); // max 10 digits

    // Build formatted value
    let formatted = '';
    if (digits.length > 0) {
      formatted += '(' + digits.slice(0, 3);
    }
    if (digits.length >= 4) {
      formatted += ') ' + digits.slice(3, 6);
    }
    if (digits.length >= 7) {
      formatted += '-' + digits.slice(6, 10);
    }

    // Set formatted value in input
    $(this).val(formatted);

    // Store raw digits separately for submission/validation
    $(this).data('raw', digits);

    // Keep caret at end
    const pos = formatted.length;
    this.setSelectionRange(pos, pos);
  });
});

$(function () {
  // Format Secondary_phone number on any input/paste
  $('#Secondary_phone').on('input', function () {
    let digits = $(this).val().replace(/\D/g, ''); // keep only numbers
    digits = digits.slice(0, 10); // max 10 digits

    // Build formatted value
    let formatted = '';
    if (digits.length > 0) {
      formatted += '(' + digits.slice(0, 3);
    }
    if (digits.length >= 4) {
      formatted += ') ' + digits.slice(3, 6);
    }
    if (digits.length >= 7) {
      formatted += '-' + digits.slice(6, 10);
    }

    // Set formatted value in input
    $(this).val(formatted);

    // Store raw digits separately for submission/validation
    $(this).data('raw', digits);

    // Keep caret at end
    const pos = formatted.length;
    this.setSelectionRange(pos, pos);
  });
});
</script>


</body>
</html>