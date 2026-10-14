<?php include ('step-header-copy.php'); ?>
<link rel="stylesheet" href="css/new-forms.css">

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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

const steps = {

service:{
question:"What type of HVAC service do you need?",
type:"radio",
options:[
{label:"Installation",value:"Installation",next:"system"},
{label:"Repair",value:"Repair",next:"system"},
{label:"Replacement",value:"Replacement",next:"system"}
]
},

system:{
question:"What System Do You Need Help With?",
type:"radio",
options:[
{label:"Heating Systems",value:"Heating",next:"timeframe"},
{label:"Cooling",value:"Cooling",next:"timeframe"},
{label:"Indoor Air Quality",value:"Air",next:"timeframe"},
{label:"Water Heating",value:"Water",next:"timeframe"},
{label:"Service",value:"Service",next:"timeframe"}
]
},

timeframe:{
question:"How Urgent Is Your Request?",
type:"radio",
options:[
{label:"Emergency (24–48 hours)",value:"Emergency",next:"authorisation"},
{label:"Within 1 week",value:"Week",next:"authorisation"},
{label:"Flexible",value:"Flexible",next:"authorisation"}
]
},

authorisation:{
question:"Property Authorisation Status",
type:"radio",
options:[
{label:"I Am the Homeowner",value:"Homeowner",next:"address"},
{label:"Authorised to Approve Work",value:"Authorised",next:"address"},
{label:"I Need Approval",value:"Approval",next:"address"}
]
},

address:{
question:"Where Is the Service Needed?",
type:"input",
html:`
<input type="text" id="address" name="address" class="text-card" placeholder="Street Address">
<input type="text" id="city" name="city" class="text-card" placeholder="City">
<input type="text" id="state" name="state" class="text-card" placeholder="State">
<input type="text" id="zipcode" name="zipcode" class="text-card" placeholder="Zip Code">
`,
next:"contact"
},

contact:{
question:"Who Should Receive the Project Details?",
type:"input",
html:`
<input type="text" id="fname" name="fname" class="text-card" placeholder="First Name">
<input type="text" id="lname" name="lname" class="text-card" placeholder="Last Name">

<input type="email" id="email" name="email" class="text-card" placeholder="Email Address">

<div id="email-error" class="error-msg"></div>
`,
next:"phone"
},

phone:{
question:"Enter your phone number to get verbal quotes",
type:"input",
html:`
<input type="text" id="phone" name="phone" class="text-card" placeholder="Phone Number">

<div id="phone-error"></div>

<div class="term-check">
<input type="checkbox" id="phoneterms">
<label for="phoneterms">
I agree to the Privacy Policy and Terms and Conditions
</label>
</div>
`,
next:"loader"
},

loader:{
question:"Processing your request",
type:"loader"
}

};



let current="service";
let history=[];

renderStep(current);



function renderStep(id){

const step=steps[id];

$("#question-title").text(step.question);

let html="";


if(step.type==="radio"){

html+=`<div class="options-scroll options">`;

step.options.forEach(opt=>{

html+=`

<div class="radio-card">

<label class="custom-radio">

<input type="radio" name="${id}" value="${opt.value}" data-next="${opt.next}">

<span class="radio-mark"></span>

<span class="radio-text">${opt.label}</span>

</label>

</div>

`;

});

html+=`</div>`;

}


if(step.type==="input"){
html=step.html;
}


if(step.type==="loader"){

html=`
<div class="loader-box text-center">

<p>Processing your request...</p>

<div class="spinner-border"></div>

</div>
`;

setTimeout(function(){

window.location.href="result.php";

},3000);

}



$("#question-options").html(html);

}



$(".next-btn-global").click(function(){

let step=steps[current];

let next=null;



if(step.type==="radio"){

let checked=$(`input[name="${current}"]:checked`);

if(!checked.length){

alert("Please select an option");

return;

}

next=checked.data("next");

}



if(step.type==="input"){

let valid=true;

$("#question-options input[type=text], #question-options input[type=email]").each(function(){

if($(this).val().trim()===""){

valid=false;

}

});

if(!valid){

alert("Please fill all fields");

return;

}

next=step.next;

}



if(next){

history.push(current);

current=next;

renderStep(current);

$('html,body').animate({scrollTop:0},200);

}

});



$(".prev-btn").click(function(){

if(history.length){

current=history.pop();

renderStep(current);

}

});


</script><script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
class="text-card"
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


<script>
if(step.type==="input"){

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

    // ✅ EMAIL STEP VALIDATION
    if(current === "contact"){
        if(!isEmailValid){
            alert("Please enter a valid email before continuing");
            return;
        }
    }

    next = step.next;
}
</script>





<script>
// ===== CONFIG =====
const VERIFY_API      = '/verify-api.php';
const VERIFY_BRAND    = 'EasyHomeService';
const CLIENT_OTP_TTL  = 60;      // 60 seconds (matches backend TTL)
const RESEND_GRACE_MS = 3000;    // show "Resend" 3s after 00:00 to avoid cooldown race

// ===== Helpers =====
function e164ify(raw){
  let s = (raw || '').replace(/[^\d+]/g,'');
  if (!s) return '';
  if (s.startsWith('+')) return s;          // already E.164 (e.g. +1..., +91...)
  if (/^\d{10}$/.test(s)) return '+1' + s;  // US default for plain 10 digits
  return '+' + s;                           // last resort
}

// mask to ********1234 (last 4 only, no country code shown)
function maskLast4Only(ph){
  const digits = (ph || '').replace(/\D/g,'');
  const last4 = digits.slice(-4);
  return '********' + last4;
}

function setBtnState($btn, isBusy){
  if (isBusy){ $btn.addClass('disabled').attr('aria-busy','true'); }
  else { $btn.removeClass('disabled').removeAttr('aria-busy'); }
}

function setMsg($el, text, type){ // type: 'success' | 'error' | ''
  $el.removeClass('success-msg error-msg');
  if (type === 'success') $el.addClass('success-msg');
  if (type === 'error')   $el.addClass('error-msg');
  $el.text(text || '');
}

// HTML variant (needed to keep the inline Resend link)
function setMsgHTML($el, html, type){
  $el.removeClass('success-msg error-msg');
  if (type === 'success') $el.addClass('success-msg');
  if (type === 'error')   $el.addClass('error-msg');
  $el.html(html || '');
}

function setSubmitEnabled(enabled){
  const $submit = $('.submit').first();
  if (!$submit.length) return;
  if (enabled){
    $submit.removeAttr('disabled').removeClass('disabled').removeAttr('aria-disabled');
  } else {
    $submit.attr('disabled','disabled').addClass('disabled').attr('aria-disabled','true');
  }
}

// ===== Terms gating helpers =====
function isOtpVerified(){
  return ($('#otp-verified').val() === '1') || (window.__otpVerified === true);
}

// Ensure (and return) the inline Resend span inside #phone-error
function ensureResendSpan() {
  let $pe = $('#phone-error');
  if (!$pe.length) {
    $pe = $('<div/>', { id: 'phone-error', class: 'success-msg' }).insertAfter('#phone');
  }
  let $resend = $('#resend-otp');
  if (!$resend.length) {
    $resend = $('<span/>', {
      id: 'resend-otp',
      text: 'Resend',
      style: 'display:none; cursor:pointer; text-decoration:underline; margin-left:6px;',
      role: 'button',
      tabindex: 0,
      'aria-label': 'Resend OTP'
    }).appendTo($pe);
  }
  return $resend;
}

// Create (and return) an error line under the terms checkbox
function ensureTermsError(){
  let $te = $('#terms-error');
  if (!$te.length){
    $te = $('<div/>', { id: 'terms-error', class: 'error-msg', role: 'alert' })
      .insertAfter('#phoneterms');
  }
  return $te;
}

// Enable/disable submit based on BOTH OTP + Terms
function recomputeSubmitEnabled(){
  const enabled = isOtpVerified() && $('#phoneterms').is(':checked');
  setSubmitEnabled(enabled);
  if (enabled){
    ensureTermsError().text('');
  }
}

(function($){
  $(function(){

    // Inject UI (once)
    if (!$('#phone-error').length) {
      $('<div/>', { id: 'phone-error', class: 'success-msg' }).insertAfter('#phone');
    }
    // Guarantee the inline Resend span exists (hidden until 00:00)
    ensureResendSpan();

    if (!$('#send-otp').length) {
      $('<a/>', { id: 'send-otp', class: 'send-otp common_btn', href: 'javascript:void(0)', text: 'Verify' })
        .insertAfter('#phone');
    }

if (!$('#otp-inline').length) {
  const $box = $('<div/>', { id: 'otp-inline', style: 'display:none;' });

  const $otp = $('<input/>', {
    type: 'text', id: 'otp-code', class: 'inp-fld',
    placeholder: 'Enter Code', maxlength: 6,
    inputmode: 'numeric', autocomplete: 'one-time-code'
  });

  const $btn = $('<a/>', {
    id: 'verify-otp', class: 'send-otp common_btn',
    href: 'javascript:void(0)', text: 'Verify Code'
  });

  const $err = $('<div/>', { id: 'otp-error', class: 'error-msg' });

  $box.append($otp).append($btn).append($err);
  $box.insertAfter('#send-otp');

  // 👇 Now add the helper note *after* #otp-inline div
  $('<span/>', {
    class: 'phone-survey',
    text: 'Phone number is solely used for secure verification and appointment.'
  }).insertAfter($box);
}
    if (!$('#otp-verified').length){
      $('<input/>', { type: 'hidden', id: 'otp-verified', name: 'otp_verified', value: '0' }).appendTo('#myform');
    }
    if (!$('#phone-e164').length){
      $('<input/>', { type: 'hidden', id: 'phone-e164', name: 'phone_e164', value: '' }).appendTo('#myform');
    }

    // Local state
    let requestStarted = false;
    let countdownTimer = null;
    let lastPhoneE164  = '';

    // disable submit until verified + terms checked
    setSubmitEnabled(false);
    // also set up terms error container
    ensureTermsError();
    // initial recompute in case terms is already checked for some reason
    recomputeSubmitEnabled();

    // React to terms checkbox changes
    $(document).on('change', '#phoneterms', function(){
      if ($(this).is(':checked')){
        ensureTermsError().text('');
      }
      recomputeSubmitEnabled();
    });

    // Format countdown MM:SS
    function fmtMMSS(totalSeconds){
      const s = Math.max(0, totalSeconds|0);
      const mm = String(Math.floor(s / 60)).padStart(2,'0');
      const ss = String(s % 60).padStart(2,'0');
      return `${mm}:${ss}`;
    }

    // Update heading texts when OTP is sent (or resent)
    function updateHeadingsForOtp(phoneE164){
      $('.step-hdng1').text('Please enter OTP to verify your account');
      $('.step-hdng2').text('A One-Time Password has been sent to ' + maskLast4Only(phoneE164));
    }

    // Only show: "Valid for MM:SS Sec " and keep the inline Resend span (hidden until 00:00)
    function updateSentMessage(secondsLeft){
      const msg = `Valid for ${fmtMMSS(secondsLeft)} `;
      const $pe = $('#phone-error');
      setMsgHTML($pe, msg, 'success');
      // Always (re)append the span inline so it stays on the same line
      ensureResendSpan().appendTo($pe);
    }

    function clearCountdown(){
      if (countdownTimer){ clearInterval(countdownTimer); countdownTimer = null; }
    }

    function startCountdown(phoneE164){
      clearCountdown();
      let remaining = CLIENT_OTP_TTL;
      updateHeadingsForOtp(phoneE164);
      updateSentMessage(remaining);

      // Hide "Resend" until timer ends
      ensureResendSpan().hide();

      countdownTimer = setInterval(function(){
        remaining--;
        if (remaining >= 0){
          updateSentMessage(remaining);
        }
        if (remaining <= 0){
          clearCountdown();
          // Show "Resend" after a small grace to avoid backend cooldown race
          setTimeout(() => { ensureResendSpan().show(); }, RESEND_GRACE_MS);
        }
      }, 1000);
    }

    function ajaxStart(phoneE164){
      // hide resend while we try again
      ensureResendSpan().hide();
      setMsg($('#otp-error'), '', '');
      $.ajax({
        type: 'POST',
        url: VERIFY_API,
        data: { action: 'start', phone: phoneE164, brand: VERIFY_BRAND },
        success: function(res){
          if (res && res.ok){
            requestStarted = true;
            $('#otp-code').val(''); // clear any old code
            startCountdown(phoneE164);
            $('#phone, #send-otp').hide();
            $('#otp-inline').show();
            setSubmitEnabled(false);
            $('#otp-code').focus();
          } else {
            console.error('OTP start error:', res);
            setMsg($('#phone-error'), 'Could not send OTP. Please try again.', 'error');
            ensureResendSpan().show(); // allow retry
          }
        },
        error: function(xhr, status, err){
          console.error('Network error while starting verification:', {xhr, status, err});
          setMsg($('#phone-error'), 'Something went wrong. Please try again.', 'error');
          ensureResendSpan().show();
        }
      });
    }

    // RESEND OTP: cancel the old request, then start a fresh one
    function triggerResend(){
      if (!lastPhoneE164){
        // fallback: if we somehow lost it, show phone inputs again
        $('#phone, #send-otp').show();
        $('#otp-inline').hide();
        return;
      }
      $('#otp-code').val('');            // clear old code immediately
      setMsg($('#otp-error'), '', '');   // clear any prior error/info
      // 1) Try cancel first (session holds request_id on server)
      $.ajax({
        type: 'POST',
        url: VERIFY_API,
        data: { action: 'cancel', phone: lastPhoneE164 },
        complete: function(){
          // success or failure, still attempt a fresh start after a short pause
          setTimeout(() => ajaxStart(lastPhoneE164), 500);
        }
      });
    }

    // SEND OTP (first time)
    $(document).on('click', '#send-otp', function(){
      const $btn = $(this);
      const raw  = $('#phone').val();
      const ph   = e164ify(raw);

      setMsg($('#phone-error'), '', '');
      setMsg($('#otp-error'), '', '');
      ensureResendSpan().hide();

      if (!ph || ph.replace(/\D/g,'').length < 10){
        setMsg($('#phone-error'), 'Please enter a valid phone number.', 'error');
        ensureResendSpan().hide(); // no resend until phone valid
        return;
      }

      $('#phone-e164').val(ph);
      lastPhoneE164 = ph;
      setBtnState($btn, true);

      $.ajax({
        type: 'POST',
        url: VERIFY_API,
        data: { action: 'start', phone: ph, brand: VERIFY_BRAND },
        success: function(res){
          if (res && res.ok){
            requestStarted = true;
            $('#otp-code').val(''); // clear box on first send too
            startCountdown(ph);
            $('#phone, #send-otp').hide();
            $('#otp-inline').show();
            setSubmitEnabled(false);
            $('#otp-code').focus();
          } else {
            console.error('OTP start error (first send):', res);
            setMsg($('#phone-error'), 'Could not send OTP. Please try again.', 'error');
            ensureResendSpan().show();
          }
        },
        error: function(xhr, status, err){
          console.error('Network error while starting verification (first send):', {xhr, status, err});
          setMsg($('#phone-error'), 'Something went wrong. Please try again.', 'error');
          ensureResendSpan().show();
        },
        complete: function(){ setBtnState($btn, false); }
      });
    });

    $(document).on('click', '#resend-otp', triggerResend);
    // keyboard accessibility for the span-as-button
    $(document).on('keydown', '#resend-otp', function(ev){
      if (ev.key === 'Enter' || ev.key === ' ') {
        ev.preventDefault();
        triggerResend();
      }
    });

    // VERIFY OTP
    $(document).on('click', '#verify-otp', function(){
      const $btn = $(this);
      const code = ($('#otp-code').val() || '').trim();

      setMsg($('#otp-error'), '', '');
      if (!requestStarted){
        setMsg($('#otp-error'), 'Please send OTP first.', 'error');
        return;
      }
      if (!/^\d{4,8}$/.test(code)){
        setMsg($('#otp-error'), 'Please enter the OTP code.', 'error');
        return;
      }

      setBtnState($btn, true);

      $.ajax({
        type: 'POST',
        url: VERIFY_API,
        data: { action: 'check', code: code },
        success: function(res){
          if (res && res.ok){
            $('#otp-verified').val('1');
            setMsg($('#otp-error'), '', '');
            setMsg($('#phone-error'), '✅ Phone verified.', 'success');

            $('#otp-code, #verify-otp').hide();
            $('<img>', {
              src: 'https://easyhomeservice.com/images/yes.png',
              alt: 'Success',
              id: 'otp-success-img',
              css: {
                display: 'inline',
                marginBottom: '10px',
                opacity: 0,
                transform: 'scale(0)',
                transition: 'all 0.4s ease-in-out'
              }
            }).insertBefore('#phone-error');
            setTimeout(function () {
              $('#otp-success-img').css({ opacity: 1, transform: 'scale(1)' });
            }, 100);

            clearCountdown();
            ensureResendSpan().hide();
            window.__otpVerified = true;

            // Enable submit ONLY if terms are checked too
            recomputeSubmitEnabled();

            // Optional: tweak headings on success
            $('.step-hdng1').text('Your phone number is verified');
            $('.step-hdng2').text('You can submit the form');
          } else {
            console.error('OTP verify failed:', res);
            $('#otp-verified').val('0');
            if (res && (res.status === '16' || res.code === 'code_mismatch')) {
              setMsg($('#otp-error'), 'Incorrect code. Please enter the latest OTP we sent.', 'error');
            } else {
              setMsg($('#otp-error'), 'Verification failed. Please check the code and try again.', 'error');
            }
            setSubmitEnabled(false);
          }
        },
        error: function(xhr, status, err){
          console.error('Network error while verifying:', {xhr, status, err});
          setMsg($('#otp-error'), 'Something went wrong. Please try again.', 'error');
          setSubmitEnabled(false);
        },
        complete: function(){ setBtnState($btn, false); }
      });
    });

    // Gate the main submit behind TERMS + verification
    const $submit = $('.submit').first();
    const originalHandlers = ($submit.length && $._data($submit[0], 'events') && $._data($submit[0], 'events').click)
      ? [...$._data($submit[0], 'events').click] : [];
    if ($submit.length){ $submit.off('click'); }

    $submit.on('click', function(e){
      // REQUIRE: terms checkbox must be checked
      if (!$('#phoneterms').is(':checked')){
        e.preventDefault();
        e.stopImmediatePropagation();
        ensureTermsError().text('Please agree to the terms to continue.');
        $('#phoneterms').focus();
        setSubmitEnabled(false);
        return;
      }

      // Then require OTP verified
      const isVerified = ($('#otp-verified').val() === '1') || (window.__otpVerified === true);
      if (!isVerified){
        e.preventDefault();
        e.stopImmediatePropagation();
        if (!requestStarted){
          $('#send-otp').trigger('click');
          setMsg($('#phone-error'), 'Please verify the OTP we just sent.', 'error');
          ensureResendSpan().hide();
        } else {
          setMsg($('#otp-error'), 'Please verify the OTP to continue.', 'error');
          $('#otp-code').focus();
        }
        setSubmitEnabled(false);
        return;
      }

      if (typeof validateStep === 'function'){
        const LAST_STEP_INDEX = 10;
        if (!validateStep(LAST_STEP_INDEX)) return;
      }
      const evt = jQuery.Event('click');
      originalHandlers.forEach(h => h.handler.call(this, evt));
      if ($('.next-btn2').length) { $('.next-btn2').trigger('click'); }
    });

    // Enter key on OTP field triggers verify
    $(document).on('keypress', '#otp-code', function(ev){
      if (ev.which === 13){ $('#verify-otp').trigger('click'); }
    });

  });
})(jQuery);
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
</script>

<script>
$(function () {
  const mapboxToken = 'pk.eyJ1IjoicHJha2FzaHZlbGxrbyIsImEiOiJjbWdxZTRsYnowMTkzMmxxcWJkOGM0dzQyIn0.PGn5ZGq5BAqFDMdpNnVWbw';
  let timer = null;
  let freeze = false;

  // Create suggestions list
  let $list = $('#suggestions');
  if (!$list.length) $list = $('<ul>', { id: 'suggestions' }).appendTo('body').hide();

  function placeList() {
    const $i = $('#address');
    if (!$i.length) return;
    const o = $i.offset();
    $list.css({
      top: o.top + $i.outerHeight(),
      left: o.left,
      width: $i.outerWidth(),
      position: 'absolute',
      zIndex: 9999
    });
  }

  $(window).on('resize', placeList);
  $('#address').on('focus', placeList);

  // 🔍 Fetch Mapbox suggestions (debounced)
  $('#address').on('input', function () {
    if (freeze) return;
    clearTimeout(timer);

    const q = $(this).val().trim();
    if (q.length < 3) { $list.hide(); return; }

timer = setTimeout(() => {
  // Always append a fallback “, USA” if query is too short or numeric
  const searchText = /^[0-9]+$/.test(q) ? `${q}, USA` : q;

$.getJSON(`https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(searchText)}.json`, {
  access_token: mapboxToken,
  autocomplete: true,
  country: 'us',
  language: 'en',
  types: 'address,place,locality,neighborhood,postcode',
  proximity: '-98.5795,39.8283', // center of USA for better results
  limit: 8
})

  .done(res => {
    const items = res?.features ?? [];
    if (!items.length) { $list.hide(); return; }

    const html = items.map(f => {
      const ctx = f.context || [];
      const city = ctx.find(c => c.id.startsWith('place'))?.text || '';
      const st   = ctx.find(c => c.id.startsWith('region'))?.short_code?.split('-')[1] || '';
      const zip  = ctx.find(c => c.id.startsWith('postcode'))?.text || '';
      const lat  = f.center?.[1] ?? '';
      const lon  = f.center?.[0] ?? '';

      const main = `${f.address ? f.address + ' ' : ''}${f.text || ''}`.trim();
      const subParts = [city, st, zip].filter(Boolean);
      const sub = subParts.join(', ');

      return `
        <li data-city="${city}" data-state="${st}" data-zip="${zip}" data-lat="${lat}" data-lon="${lon}">
          <div class="suggest-item">
            <i class="bi bi-geo-alt-fill icon"></i>
            <div class="text-wrap">
              <div class="main-text">${main}</div>
              <div class="sub-text">${sub}</div>
            </div>
          </div>
        </li>`;
    }).join('');

    $list.html(html).show();
    placeList();
  })
  .fail(() => {
    console.warn('Mapbox API request failed');
    $list.hide();
  });
}, 300);
  });

  // 🖱️ Handle suggestion click
  $(document).on('pointerdown', '#suggestions li', function (e) {
    e.preventDefault();
    e.stopPropagation();

    const $item = $(this);
    const addr  = String($item.find('.main-text').text() || '').trim();
    const city  = String($item.data('city')  || '').trim();
    const state = String($item.data('state') || '').trim();
    const zip   = String($item.data('zip')   || '').trim();
    const lat   = String($item.data('lat')   || '');
    const lon   = String($item.data('lon')   || '');

    $('#address').val(addr);
    if ($('#city').length) $('#city').val(city);
    if ($('#state').length) $('#state').val(state);
    if (zip && $('#zipcode').length && !$('#zipcode').val()) $('#zipcode').val(zip);
    if ($('#latitude').length) $('#latitude').val(lat);
    if ($('#longitude').length) $('#longitude').val(lon);

    $list.hide();
  });

  // Hide suggestions when clicking outside
  $(document).on('click', function (e) {
    if (!$(e.target).closest('#address, #suggestions').length) {
      $list.hide();
    }
  });

  // ESC key hides list
  $('#address').on('keydown', function (e) {
    if (e.key === 'Escape') $list.hide();
  });
});
</script>

<!--disable next on radio-->
<script>
$(document).ready(function () {
    // Initially disable all Next buttons that follow radio questions
    $(".step").each(function () {
        // If this step contains radio buttons
        if ($(this).find('input[type="radio"]').length > 0) {
            $(this).find(".next-btn").prop("disabled", true).css({
                "opacity": "0.6",
                "cursor": "not-allowed"
            });
        }
    });

    // When any radio button is clicked, enable the Next button for that step
    $('input[type="radio"]').on('change', function () {
        var $step = $(this).closest(".step");
        $step.find(".next-btn").prop("disabled", false).css({
            "opacity": "1",
            "cursor": "pointer"
        });
    });
});
</script>

<!--/disable next on radio-->


<!--disable next for description-->

<script>
$(document).ready(function () {
    // Cache elements for performance
    var $description = $("#description");
    var $descStep = $description.closest(".step");
    var $nextBtn = $descStep.find(".next-btn");

    // Function to enable/disable the Next button
    function toggleNextButton() {
        var desc = $description.val().trim();
        if (desc === "" || desc.length > 250) {
            $nextBtn.prop("disabled", true).css({
                "opacity": "0.6",
                "cursor": "not-allowed"
            });
        } else {
            $nextBtn.prop("disabled", false).css({
                "opacity": "1",
                "cursor": "pointer"
            });
        }
    }

    // Initial state on page load
    toggleNextButton();

    // Update button state on every input
    $description.on("input", toggleNextButton);
});
</script>

<!--/disable next for description-->

<!--ipqs-->
<script>
$(document).ready(function() {
    let emailTimer; // debounce timer
    let lastCheckedEmail = ''; // last checked email
    let isEmailValid = false; // flag for validity

    const $email = $('#email');
    const $error = $('#email-error');
    const $nextBtn = $email.closest('.step').find('.next-btn'); // find Next button

    // Initially disable Next button
    disableNext();

    $email.on('input', function() {
        clearTimeout(emailTimer);

        const email = $(this).val().trim();
        $error.show().css({ color: '', opacity: 1 }).text('');
        isEmailValid = false;
        disableNext();

        // 🧹 If field is empty — clear everything
        if (email === '') {
            $error.text('');
            return;
        }

        // Only start checking when user has typed something resembling an email
        if (email.includes('@') && email.match(/\.[a-z]{2,}$/i)) {
            // Start debounce for API check
            emailTimer = setTimeout(() => {
                checkEmailValidity(email);
            }, 800);
        } else {
            // Don’t show “Rechecking…” yet for early typing (before valid email pattern)
            // Just quietly wait for them to type more
            return;
        }
    });

    function checkEmailValidity(email) {
        const simpleEmailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Only show checking message once we know it's a valid pattern
        if (!simpleEmailPattern.test(email)) {
            $error.text('Please enter a valid email format.');
            disableNext();
            return;
        }

        $error.text('Checking email validity...');
        lastCheckedEmail = email;

        $.ajax({
            url: 'https://easyhomeservice.com/check-email.php',
            type: 'GET',
            dataType: 'json',
            data: { email: email },
            success: function(response) {
    console.log(response);

    // ✅ Handle insufficient credits gracefully
    if (
        response &&
        response.success === false &&
        typeof response.message === 'string' &&
        response.message.includes('insufficient credits')
    ) {
        // Don’t show any error — just enable the Next button
        $error.text('').hide();
        isEmailValid = true;
        enableNext();
        return;
    }

    if (!response || response.success === false) {
        $error.css('color', 'red').text('Unable to verify email. Please try again.');
        disableNext();
        return;
    }

    if (
        response.valid === false ||
        response.disposable === true ||
        response.recent_abuse === true ||
        (response.spam_trap_score && response.spam_trap_score > 0.5)
    ) {
        $error.css('color', 'red').text('Please enter a valid, non-temporary email address.');
        disableNext();
    } else {
        $error.css('color', '#04d36f').text('✓ Email is Verified!');
        isEmailValid = true;
        enableNext();
        setTimeout(() => $error.fadeOut(500), 1500);
    }
},

            error: function() {
                $error.text('Network error while verifying email.');
                disableNext();
            }
        });
    }

    function disableNext() {
        $nextBtn.prop('disabled', true).css({
            opacity: '0.6',
            'pointer-events': 'none'
        });
    }

    function enableNext() {
        $nextBtn.prop('disabled', false).css({
            opacity: '1',
            'pointer-events': 'auto'
        });
    }
});
</script>

<!--ipqs-->
<!--form logs-->

<!--form logs-->



<?php include 'footer.php' ?>



