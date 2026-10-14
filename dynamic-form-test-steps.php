<?php include ('step-header-copy.php'); ?>
<link rel="stylesheet" href="/css/new-forms.css">

<div class="quiz-sec">
<div class="container-fluid">
<div class="contnt-sec">

<form id="myform" class="service-form">

<div class="question_box step">

<div class="heading-area">
<p class="step-hdng1" id="question-title"></p>
</div>

<div class="options-scroll options" id="question-options"></div>

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
<img src="images/lock.png" class="btn_lock">
Your information is 100% secure & confidential.
</p>

</div>
</div>
</div>
</div>

</div>
</div>
</div>
<script>
    const quizQuestions = [

{
id:"service",
question:"What type of HVAC service do you need?",
type:"radio",
options:[
{label:"Installation", value:"Installation", next:"installation_system"},
{label:"Repair", value:"Repair", next:"repair_system"},
{label:"Replacement", value:"Replacement", next:"replacement_system"}
]
},

{
id:"installation_system",
question:"What System Do You Need Help With?",
type:"radio",
options:[
{label:"Heating Systems", value:"Heating Systems", next:"installation_heating"},
{label:"Cooling", value:"Cooling", next:"installation_cooling"},
{label:"Indoor Air Quality", value:"Indoor Air Quality", next:"installation_air"},
{label:"Water Heating", value:"Water Heating", next:"installation_water"},
{label:"Service", value:"Service", next:"installation_service"}
]
},

{
id:"installation_heating",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Furnace", value:"Furnace"},
{label:"Boiler & Radiator Systems", value:"Boiler & Radiator Systems"},
{label:"Central Heating Systems", value:"Central Heating Systems"},
{label:"Wall Heaters", value:"Wall Heaters"},
{label:"Heat Pump", value:"Heat Pump"},
{label:"Thermostats & Heating Controls", value:"Thermostats & Heating Controls"},
{label:"Smart Thermostat", value:"Smart Thermostat"}
]
},

{
id:"installation_cooling",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Central AC", value:"Central AC"},
{label:"Ductless Mini-Split Systems", value:"Ductless Mini-Split Systems"},
{label:"Outdoor Mist Cooling Systems", value:"Outdoor Mist Cooling Systems"},
{label:"Swamp Cooler", value:"Swamp Cooler"}
]
},

{
id:"installation_air",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Whole-Home Humidifier", value:"Whole-Home Humidifier"},
{label:"Whole-Home Dehumidifier", value:"Whole-Home Dehumidifier"},
{label:"Whole-Home Air Purifier", value:"Whole-Home Air Purifier"},
{label:"UV Air Purification Systems", value:"UV Air Purification Systems"},
{label:"Ductwork", value:"Ductwork"},
{label:"Vents & Airflow Issues", value:"Vents & Airflow Issues"},
{label:"Air Quality Testing", value:"Air Quality Testing"}
]
},

{
id:"installation_water",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Water Heater", value:"Water Heater"},
{label:"Tankless Water Heater Services", value:"Tankless Water Heater Services"}
]
},

{
id:"installation_service",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Emergency HVAC Service", value:"Emergency HVAC Service"},
{label:"HVAC Inspection", value:"HVAC Inspection"}
]
},

{
id:"repair_system",
question:"What System Do You Need Help With?",
type:"radio",
options:[
{label:"Heating", value:"Heating", next:"repair_heating"},
{label:"Cooling", value:"Cooling", next:"repair_cooling"},
{label:"Duct & Airflow", value:"Duct & Airflow", next:"repair_duct"},
{label:"Water Heating", value:"Water Heating", next:"repair_water"},
{label:"Indoor Air Quality", value:"Indoor Air Quality", next:"repair_air"},
{label:"Service", value:"Service", next:"repair_service"}
]
},

{
id:"repair_heating",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Furnace", value:"Furnace"},
{label:"Boiler & Radiator Systems", value:"Boiler & Radiator Systems"},
{label:"Central Heating Systems", value:"Central Heating Systems"},
{label:"Wall Heaters", value:"Wall Heaters"},
{label:"Heat Pump", value:"Heat Pump"},
{label:"Thermostats & Heating Controls", value:"Thermostats & Heating Controls"},
{label:"Smart Thermostat", value:"Smart Thermostat"}
]
},

{
id:"repair_cooling",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Central AC", value:"Central AC"},
{label:"Outdoor Mist Cooling Systems", value:"Outdoor Mist Cooling Systems"},
{label:"Ductless Mini-Split Systems", value:"Ductless Mini-Split Systems"},
{label:"Swamp Cooler", value:"Swamp Cooler"}
]
},

{
id:"repair_duct",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Ductwork", value:"Ductwork"},
{label:"Vents & Airflow Issues", value:"Vents & Airflow Issues"}
]
},

{
id:"repair_water",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Water Heater", value:"Water Heater"},
{label:"Tankless Water Heater Services", value:"Tankless Water Heater Services"}
]
},

{
id:"repair_air",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Whole-Home Humidifier", value:"Whole-Home Humidifier"},
{label:"Whole-Home Dehumidifier", value:"Whole-Home Dehumidifier"},
{label:"Whole-Home Air Purifier", value:"Whole-Home Air Purifier"},
{label:"UV Air Purification Systems", value:"UV Air Purification Systems"}
]
},

{
id:"repair_service",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Emergency HVAC Service (24/7)", value:"Emergency HVAC Service (24/7)"},
{label:"HVAC Inspection", value:"HVAC Inspection"},
{label:"Air Quality Testing", value:"Air Quality Testing"},
{label:"Duct Cleaning", value:"Duct Cleaning"}
]
},

{
id:"replacement_system",
question:"What System Do You Need Help With?",
type:"radio",
options:[
{label:"Major Equipment", value:"Major Equipment", next:"replacement_equipment"},
{label:"Heating", value:"Heating", next:"replacement_heating"},
{label:"Cooling", value:"Cooling", next:"replacement_cooling"},
{label:"Duct & Airflow", value:"Duct & Airflow", next:"replacement_duct"},
{label:"Indoor Air Quality", value:"Indoor Air Quality", next:"replacement_air"},
{label:"Service", value:"Service", next:"replacement_service"}
]
},

{
id:"replacement_equipment",
question:"Select Specific Issue",
type:"radio",
options:[
{label:"Furnace", value:"Furnace"},
{label:"Boiler & Radiator Systems", value:"Boiler & Radiator Systems"},
{label:"Heat Pump", value:"Heat Pump"},
{label:"Central AC", value:"Central AC"},
{label:"Ductless Mini-Split Systems", value:"Ductless Mini-Split Systems"},
{label:"Water Heater", value:"Water Heater"},
{label:"Tankless Water Heater Services", value:"Tankless Water Heater Services"}
]
}

];
const commonSteps = [

{
id:"timeframe",
question:"How Urgent Is Your Request?",
type:"radio",
options:[
{label:"Emergency (24–48 hours)", value:"Emergency (24–48 hours)", next:"authorisation"},
{label:"Within 1 week", value:"Within 1 week", next:"authorisation"},
{label:"Time is Flexible", value:"Time is Flexible", next:"authorisation"}
]
},

{
id:"authorisation",
question:"Property Authorisation Status",
type:"radio",
options:[
{label:"I Am the Homeowner", value:"I Am the Homeowner", next:"address"},
{label:"I Am Authorised to Approve Work", value:"I Am Authorised to Approve Work", next:"address"},
{label:"I Need Approval", value:"I Need Approval", next:"address"}
]
},

{
id:"address",
question:"Where Is the Service Needed?",
type:"input_group",
fields:[
{label:"Street Address", name:"address", type:"text", placeholder:"Enter Street Address"},
{label:"City", name:"city", type:"text", placeholder:"Enter City"},
{label:"State", name:"state", type:"text", placeholder:"Enter State"},
{label:"Zip Code", name:"zip", type:"text", placeholder:"Enter zipcode"}
],
next:"contact"
},

{
id:"contact",
question:"Who Should Receive the Project Details?",
type:"input_group",
fields:[
{label:"First Name", name:"fname", type:"text", placeholder:"First Name"},
{label:"Last Name", name:"lname", type:"text", placeholder:"Last Name"},
{label:"Email", name:"email", type:"email", placeholder:"Email"}
],
next:"phone"
},

{
id:"phone",
question:"Enter your phone number to get verbal quotes",
type:"phone",
fields:[
{label:"Phone Number", name:"phone", type:"text", placeholder:"Enter Phone Number"}
],

checkbox:[
{
label:'By clicking "Agree and Submit", I agree to the Privacy Policy and Terms and Conditions. I also consent to receive marketing communications through email and other texts or calls from EasyHomeService.com and/or its marketing partners.',
name:"terms_marketing",
required:true
},
{
label:"I agree to receive service and account text messages (appointments, updates, Verification Code) from Easy Home Service.",
name:"terms_service",
required:true
}
],

next:"loader"
},

{
id:"loader",
question:"Processing your request",
type:"loader"
}

];
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

/* MERGE ALL STEPS */

const allSteps = [...quizQuestions, ...commonSteps];

let allQuestions = {};
let currentQuestion = "service";
let historyStack = [];

allSteps.forEach(q => allQuestions[q.id] = q);


/* START */

renderQuestion(currentQuestion);


/* RENDER QUESTION */

function renderQuestion(id){

let q = allQuestions[id];

$("#question-title").text(q.question);

let html = "";


/* RADIO OPTIONS */

if(q.type === "radio"){

html += `<div class="options-scroll options">`;

q.options.forEach(opt=>{

let nextStep = opt.next ?? q.next ?? "timeframe";

html += `
<div class="radio-card">

<label class="custom-radio">

<input
type="radio"
name="${q.id}"
value="${opt.value}"
data-next="${nextStep}"
>

<span class="radio-mark"></span>
<span class="radio-text">${opt.label}</span>

</label>

</div>
`;

});

html += `</div>`;

}



/* INPUT GROUP (TEXT OPTIONS) */

if(q.type === "input_group"){

html += `<div class="options-scroll options">`;

q.fields.forEach(field=>{

html += `
<input
type="${field.type}"
name="${field.name}"
id="${field.name}"
class="text-card inp-fld"
placeholder="${field.placeholder}"
>
`;

});

html += `</div>`;

}



/* PHONE */

/* PHONE STEP */

if(q.type === "phone"){

html = `
<div class="options-scroll options">

<div>

<input 
type="text"
name="phone"
id="phone"
class="text-card"
placeholder="Enter Phone Number"
required
oninput="this.value = this.value.replace(/[^0-9]/g, '');"
inputmode="numeric"
>

<a id="send-otp" class="send-otp quiz-btn-group" href="javascript:void(0)">Verify</a>

<div class="error-msg" id="phone-error"></div>

</div>


<div class="d-flex justify-content-center align-items-center flex-column">

<div class="term-check">

<input type="checkbox" name="terms" id="phoneterms">

<label for="phoneterms">
By clicking "Agree and Submit", I agree to the 
<a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">Privacy Policy</a> 
and 
<a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions</a>. 
I also consent to receive marketing communications through email and other texts or calls from EasyHomeService.com and/or its marketing partners about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry. Carrier and data rates may apply. 
I understand that my consent to such calls and text messages is not required to purchase products from or use the services of 
<a href="javascript:void(0);" onclick="openNewWindow('marketing-partners.php','modal');">marketing partners</a>.
</label>

</div>


<div class="term-check">

<input type="checkbox" name="terms" id="phoneterms2">

<label for="phoneterms2">
I agree to receive service and account text messages 
(appointments, updates, Verification Code) from Easy Home Service.
</label>

</div>


<p class="con-p">
By entering your number, you agree to receive texts from Easy Home Service. 
Msg frequency varies. Msg & data rates may apply. 
Reply STOP to opt out, HELP for help.
</p>

</div>

<div class="clearall"></div>

<input type="button" class="next-btn2" hidden>

</div>
`;

}


/* LOADER */

if(q.type === "loader"){

html = `
<div class="loader-box text-center">

<p>Processing your request...</p>

<div class="spinner-border"></div>

</div>
`;

setTimeout(()=>{
window.location.href="result.php";
},3000);

}


$("#question-options").html(html);

}



/* NEXT BUTTON */

$(".next-btn-global").click(function(){

let q = allQuestions[currentQuestion];

let next = "";


/* RADIO VALIDATION */

if(q.type === "radio"){

let checked = $("input[name='"+q.id+"']:checked");

if(!checked.length){

alert("Please select an option");
return;

}

next = checked.data("next");

}


/* TEXT VALIDATION */

if(q.type === "input_group" || q.type === "phone"){

let valid = true;

$("#question-options input[type=text], #question-options input[type=email]").each(function(){

if($(this).val().trim() === ""){

valid = false;

}

});

if(!valid){

alert("Please fill all fields");
return;

}

next = q.next;

}


/* MOVE STEP */

if(next){

historyStack.push(currentQuestion);

currentQuestion = next;

renderQuestion(currentQuestion);

$('html, body').animate({scrollTop:0},200);

}

});



/* BACK BUTTON */

$(".prev-btn").click(function(){

if(historyStack.length){

currentQuestion = historyStack.pop();

renderQuestion(currentQuestion);

}

});

</script>
<?php include 'promise.php' ?>
<?php include 'footer.php' ?>



