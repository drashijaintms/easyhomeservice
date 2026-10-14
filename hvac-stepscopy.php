<?php include ('step-header-copy.php');?>
<link rel="stylesheet" href="/css/new-forms.css">
<!----Question-Section---->
<div class="quiz-sec">
  <div class="container-fluid">
    <div class="contnt-sec">
      <form id="myform" method="post" class="service-form">
        
        <!--Step 1-->
        <div class="question_box step step1">
          <!-- HEADING (NO SCROLL) -->
          <div class="heading-area">
            <p class="step-hdng1">What Type of Service Do You Need?</p>
            <p class="step-hdng2">This will help us match you with the contractor specialised in that service.</p>
          </div>
          <!-- ONLY THIS AREA SCROLLS -->
          <div class="options-scroll options">
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="service" value="Installation">
                <span class="radio-mark"></span>
                <span class="radio-text">Installation</span>
              </label>
            </div>
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="service" value="Repair">
                <span class="radio-mark"></span>
                <span class="radio-text">Repair</span>
              </label>
            </div>
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="service" value="Replacement">
                <span class="radio-mark"></span>
                <span class="radio-text">Replacement</span>
              </label>
            </div>
          </div>
        </div>
        
<div class="question_box step step2" style="display:none;">
          <div class="heading-area">
            <p class="step-hdng1">What System Do You Need Help With?</p>
            <p class="step-hdng2">Select the system or service you need assistance with. This helps us match you with qualified HVAC professionals in your area.</p>
          </div>

    <div class="options-scroll">
        <div class="options" id="step2-options">
            <!-- Dynamic content here -->
        </div>
    </div>
</div>

<div class="question_box step step3" style="display:none;">
    <div class="heading-area">
        <p class="step-hdng1">Select Specific Issue</p>
        
    </div>

    <div class="options-scroll">
        <div class="options" id="step3-options">
            <!-- Dynamic content here -->
        </div>
    </div>
</div>

        
        <!--timeframe-->
        <div class="question_box step" style="display:none;">
                      <div class="heading-area">
          <p class="step-hdng1">How Urgent Is Your Request?</p>
          <p class="step-hdng2">Let us know your timeline so we can prioritize your request.</p>
          </div>
                    <!-- ONLY THIS AREA SCROLLS -->
          <div class="options-scroll options">
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="timeframe" value="Emergency (24–48 hours)">
                <span class="radio-mark"></span>
                <span class="radio-text">Emergency (24–48 hours)</span>
              </label>
            </div>
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="timeframe" value="Within 1 week">
                <span class="radio-mark"></span>
                <span class="radio-text">Within 1 week</span>
              </label>
            </div>
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="timeframe" value="Time is Flexible">
                <span class="radio-mark"></span>
                <span class="radio-text">Time is Flexible</span>
              </label>
            </div>
          </div>
        </div>
        
                <!--timeframe-->
        <div class="question_box step" style="display:none;">
                      <div class="heading-area">
          <p class="step-hdng1">Property Authorisation Status</p>
          <p class="step-hdng2">We just need to confirm that work can be approved at this property. This helps avoid delays during scheduling.</p>
          </div>
                    <!-- ONLY THIS AREA SCROLLS -->
          <div class="options-scroll options">
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="homeOwner" value="I Am the Homeowner">
                <span class="radio-mark"></span>
                <span class="radio-text">I Am the Homeowner</span>
              </label>
            </div>
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="homeOwner" value="I Am Authorised to Approve Work">
                <span class="radio-mark"></span>
                <span class="radio-text">I Am Authorised to Approve Work</span>
              </label>
            </div>
            <div class="radio-card">
              <label class="custom-radio">
                <input type="radio" name="homeOwner" value="I Need Approval">
                <span class="radio-mark"></span>
                <span class="radio-text">I Need Approval</span>
              </label>
            </div>
          </div>
        </div>
        
        

        <!--address-->
        <div class="question_box step" style="display:none;">
                      <div class="heading-area">
          <p class="step-hdng1">Where Is the Service Needed? </p>
          <p class="step-hdng2">Enter the service location.</p>
          </div>
          <div class="options-scroll options">
              <input type="text" name="address" id="address" class="text-card" placeholder="Enter Street Address">
              <input type="text" name="city" id="city" class="text-card" placeholder="Enter City">
              <input type="text" name="state" id="state" class="text-card" placeholder="Enter State">
              <input type="text" name="zip" id="zip" class="text-card" placeholder="Enter zipcode">

          </div>
        </div>
        <!--Firstname and lastname-->
        <div class="question_box step" style="display:none;">
            <div class="heading-area">
          <p class="step-hdng1">Who Should Receive the Project Details? </p>
          <p class="step-hdng2">Provide your contact information so local professionals can reach you with quotes and scheduling options. </p>
          </div>
          <div class="options-scroll options">
              <input type="text" name="fname" id="fname" class="text-card" placeholder="First Name">
              <input type="text" name="lname" id="lname" class="text-card" placeholder="Last Name">
              <input type="email" name="email" id="email" class="text-card" placeholder="Email">
            
            </div>
          </div>
        <!--phone number-->
        <div class="question_box step" style="display:none;">
                        <div class="heading-area">
<p class="step-hdng1">Enter your phone number <br class="hide-mob"> to get verbal quotes </p>
          <p class="step-hdng2">Let us know where the certified contractors can call you.</p>
          </div>
          
          <div class="options-scroll options">
              <div>
                 <input type="text" name="phone" id="phone" class="text-card" placeholder="Enter Phone Number" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric">
                 <a id="send-otp" class="send-otp quiz-btn-group" href="javascript:void(0)">Verify</a>
            <div class="error-msg" id="phone-error"></div> 
              </div>
              <div class="d-flex justify-content-center align-items-center flex-column">
                  <div class="term-check">
              <input type="checkbox" name="terms" id="phoneterms">
              <label for="phoneterms">By clicking "Agree and Submit", I agree to the <a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">Privacy Policy</a> and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions</a>. I also consent to receive marketing communications through email and other texts or calls from EasyHomeService.com and/or its marketing partners about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of <a href="javascript:void(0);" onclick="openNewWindow('marketing-partners.php','modal');">marketing partners</a>. </label>
            </div>
            <div class="term-check">
              <input type="checkbox" name="terms" id="phoneterms2">
              <label for="phoneterms">I agree to receive service and account text messages (appointments, updates, Verification Code) from Easy Home Service.</label>
            </div>
            <p class="con-p">By entering your number, you agree to receive texts from Easy Home Service. Msg frequency varies. Msg & data rates may apply. Reply STOP to opt out, HELP for help.</p>
              </div>
            
            <div class="clearall"></div>
            <input type="button" class="next-btn2" hidden>
          </div>
        </div>
        <div class="question_box" style="display:none;">
          <div class="loader_box">
            <img src="images/loader.gif" class="loader-img" width="282" height="28" alt="loader">
            <ul class="loader_list">
              <li>
                <h3 class="load1" style="display:none;">Submitting your responses</h3>
                <p class="load2" style="display:none;">
                  <img src="images/check.png" width="34" height="34" alt="check">Submitted
                </p>
              </li>
              <li>
                <h3 class="load3" style="display:none;">Reviewing your responses</h3>
                <p class="load4" style="display:none;">
                  <img src="images/check.png" width="34" height="34" alt="check">Reviewed
                </p>
              </li>
              <li>
                <h3 class="load5" style="display:none;">Looking for certified contractors in your area </h3>
                <p class="load6" style="display:none;">
                  <img src="images/check.png" width="34" height="34" alt="check">HVAC contractors found
                </p>
              </li>
            </ul>
          </div>
        </div>


      </form>

      <div class="quiz-footer">
        <div class="container-fluid text-center">
<div class="row">
    <div class="form-width">

        <div class="step-description" style="display:none;">
            <div class="desc-box">
                <span class="desc-icon">✨</span>
                <textarea name="quick_description" placeholder="Tell us in your own words..."></textarea>
            </div>
        </div>

        <div class="quiz-btn-group">
            <a href="javascript:void(0)" class="prev-btn">Back</a>
            <a href="javascript:void(0)" class="next-btn-global">Next</a>
        </div>

        <p class="security-text">
            <img src="images/lock.png" class="btn_lock"> Your information is 100% secure & confidential.
        </p>

    </div>
</div>

        </div>
      </div>
      <div class="revw-bx">
        <img src="images/cust_review_img1.jpg" class="review_img" width="68" height="68" alt="iamge">
        <img src="images/star.png" class="star" width="300" height="60" alt="star">
        <p class="revw-txt1">Maecenas nec odio et ante tincidunt tempus.</p>
        <p class="revw-txt2">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulp utate cursus amet mauris. Morbi accumsan ipsum velit tellus.</p>
        <p class="revw-txt3">
          <span>Jennifer N.</span> Verified Subscriber
        </p>
      </div>
    </div>
  </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
const quizData = {

    Installation: {
        "Heating Systems": [
            "Furnace",
            "Boiler & Radiator Systems",
            "Central Heating Systems",
            "Wall Heaters",
            "Heat Pump",
            "Thermostats & Heating Controls",
            "Smart Thermostat"
        ],
        "Cooling": [
            "Central AC",
            "Ductless Mini-Split Systems",
            "Outdoor Mist Cooling Systems",
            "Swamp Cooler"
        ],
        "Indoor Air Quality": [
            "Whole-Home Humidifier",
"Whole-Home Dehumidifier",
"Whole-Home Air Purifier",
"UV Air Purification Systems",
"Ductwork",
"Vents & Airflow Issues",
"Air Quality Testing"
        ],
        "Water Heating": [
            "Water Heater",
            "Tankless Water Heater Services"
        ],
        "Service": [
            "Emergency HVAC Service",
            "HVAC Inspection"
        ]
    },

    Repair: {
        "Heating": [
            "Furnace",
"Boiler & Radiator Systems",
"Central Heating Systems",
"Wall Heaters",
"Heat Pump",
"Thermostats & Heating Controls",
"Smart Thermostat",

        ],
        "Cooling": [
            "Central AC",
"Outdoor Mist Cooling Systems",
"Ductless Mini-Split Systems",
"Swamp Cooler" 
        ],
        "Duct & Airflow": [
            "Ductwork",
            "Vents & Airflow Issues"
        ],
        "Water Heating": [
            "Water Heater",
            "Tankless Water Heater Services"
        ],
        "Service": [
            "Emergency HVAC Service (24/7)",
            "HVAC Inspection",
            "Air Quality Testing",
            "Duct Cleaning"
        ],
        "Indoor Air Quality":[
            "Whole-Home Humidifier",
            "Whole-Home Dehumidifier",
            "Whole-Home Air Purifier",
            "UV Air Purification Systems",
            ],
    },

    Replacement: {
        "Major Equipment": [
            "Furnace",
"Boiler & Radiator Systems",
"Heat Pump",
"Central AC",
"Ductless Mini-Split Systems",
"Water Heater",
"Tankless Water Heater Services",
        ],
        "Heating": [
            "Thermostats & Heating Controls",
            "Smart Thermostat"
        ],
        "Duct & Airflow": [
            "Ductwork",
            "Vents & Airflow Issues"
        ],
        "Indoor Air Quality": [
           "Whole-Home Humidifier",
"Whole-Home Dehumidifier",
"Whole-Home Air Purifier",
"UV Air Purification Systems",
        ],
        "Cooling":[
            "Outdoor Mist Cooling Systems"
            ],
        "Service ":[
            "Emergency HVAC Service"
            ],
    }

};
</script>
<script>
$(document).ready(function () {

    /* STEP 1 CHANGE */
    $(document).on("change", "input[name='service']", function () {

        let selectedService = $(this).val();

        generateStep2(selectedService);

        // Clear Step 3
        $("#step3-options").html("");
        $("input[name='system_type']").prop("checked", false);
    });


    /* STEP 2 CHANGE */
    $(document).on("change", "input[name='system_type']", function () {

        let service = $("input[name='service']:checked").val();
        let systemType = $(this).val();

        generateStep3(service, systemType);
    });


    /* GENERATE STEP 2 */
    function generateStep2(service) {

        let container = $("#step2-options");
        container.html("");

        if (!quizData[service]) return;

        Object.keys(quizData[service]).forEach(function (system) {

            container.append(`
                <div class="radio-card">
                    <label class="custom-radio">
                        <input type="radio" name="system_type" value="${system}">
                        <span class="radio-mark"></span>
                        <span class="radio-text">${system}</span>
                    </label>
                </div>
            `);

        });
    }


    /* GENERATE STEP 3 */
    function generateStep3(service, system) {

        let container = $("#step3-options");
        container.html("");

        if (!quizData[service][system]) return;

        quizData[service][system].forEach(function (issue) {

            container.append(`
                <div class="radio-card">
                    <label class="custom-radio">
                        <input type="radio" name="specific_issue" value="${issue}">
                        <span class="radio-mark"></span>
                        <span class="radio-text">${issue}</span>
                    </label>
                </div>
            `);

        });
    }

});
</script>

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
</span><br> Got a quote for HVAC service.</p>
                <p class="time-very"><span class="time" id="notify-time">23 minutes ago</span> <span class="verified-pop"><img src="images/t-chk.png">Verified</span></p>
            </div>
        </div>
    </div>
</section>

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
				window.location.href = 'result.php';
			}, 1300);
	
		}, 3500);
	
	});
});

</script>

<script>

$(document).ready(function () {

let currentStep = 0;
let steps = $(".step");

steps.hide();
steps.eq(currentStep).show();

updateButtons();

$(".next-btn-global").click(function(){

    if(!validateStep()){
        return false;
    }

    if(currentStep < steps.length - 1){

        steps.eq(currentStep).hide();
        currentStep++;
        steps.eq(currentStep).show();

        updateButtons();
        scrollTopSmooth();
    }

});

$(".prev-btn").click(function(){

    if(currentStep > 0){

        steps.eq(currentStep).hide();
        currentStep--;

        steps.eq(currentStep).show();

        updateButtons();
        scrollTopSmooth();
    }

});

function validateStep(){

    let step = $(".step:visible");
    let valid = true;

    let radios = step.find("input[type='radio']");

    if(radios.length){

        if(radios.filter(":checked").length === 0){

            valid = false;

            if(!step.find(".radio-error").length){

                step.find(".options-scroll").append(
                    '<div class="error-msg radio-error">Please select an option</div>'
                );

            }

        }else{

            step.find(".radio-error").remove();

        }

    }

    step.find("input[type='text'], input[type='email']").each(function(){

        if($(this).val().trim() === ""){

            valid = false;

            if(!$(this).next(".error-msg").length){

                $(this).after('<div class="error-msg">This field is required</div>');

            }

        }else{

            $(this).next(".error-msg").remove();

        }

    });

    if(step.find("#email").length){

        let email = $("#email").val();
        let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(email && !pattern.test(email)){

            valid = false;

            $("#email").next(".error-msg").remove();
            $("#email").after('<div class="error-msg">Enter valid email</div>');

        }

    }
    
    if(step.find("#phoneterms").length){

    if(!$("#phoneterms").is(":checked") || !$("#phoneterms2").is(":checked")){
        valid = false;

        if(!$("#terms-error").length){
            step.find(".options-scroll").append(
                '<div class="error-msg" id="terms-error">Please accept the terms to continue</div>'
            );
        }

    }else{
        $("#terms-error").remove();
    }

}

    return valid;

}

$(document).on("input change","input",function(){

    $(this).next(".error-msg").remove();
    $(".radio-error").remove();
    $("#phone-error").text("");

});

function updateButtons(){

    if(currentStep === 0){

        $(".prev-btn").css({
            "pointer-events":"none",
            "opacity":"0.5"
        });

    }else{

        $(".prev-btn").css({
            "pointer-events":"auto",
            "opacity":"1"
        });

    }

    if(currentStep === steps.length - 1){

        $(".next-btn-global").text("Submit");

    }else{

        $(".next-btn-global").html(
            'Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18">'
        );

    }

    if(currentStep === 0 || currentStep === 1){
        $(".step-description").show();
    }else{
        $(".step-description").hide();
    }

}

function scrollTopSmooth(){
    $('html, body').animate({scrollTop: 0}, 200);
}

});

</script>