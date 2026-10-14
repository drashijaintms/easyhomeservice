<!-- Include jQuery (if not already added) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
/* “?” pill */
.help-q {
    display: inline-block;
    width: 14px;
    height: 14px;
    line-height: 17px;
    text-align: center;
    font-weight: 500;
    font-size: 11px;
    border-radius: 50%;
    margin-left: 6px;
    cursor: help;
    color: #fff;
    background: #919691;
    position: relative;
    user-select: none;
}
/* image popover */
.help-q .img-pop {
  position:absolute; left:50%; top:150%;
  transform:translateX(-50%) scale(.92);
  opacity:0; pointer-events:none;
  background:#fff; border:1px solid #e5e7eb; border-radius:6px;
  box-shadow:0 10px 25px rgba(0,0,0,.12);
  padding:6px; z-index:9999; transition:transform .18s ease, opacity .18s ease;
}
.help-q .img-pop img { display:block; max-width:260px; height:auto; border-radius:4px; }
/* show on hover/focus */
.help-q:hover .img-pop,
.help-q:focus .img-pop,
.help-q.help-open .img-pop {
  opacity:1; transform:translateX(-50%) scale(1);
}
/* little caret */
.help-q .img-pop:after{
  content:""; position:absolute; top:-6px; left:50%; transform:translateX(-50%);
  border:6px solid transparent; border-bottom-color:#e5e7eb;
}
</style>


<style>

  .term-check{ display:none; }
  .submit{ display:none; }


  input#phone { width: 60%; }
  input#otp-code { width: 60%; }

  #send-otp, #verify-otp { display:inline-block; margin-left:12px; }
  #send-otp.disabled, #verify-otp.disabled { pointer-events:none; opacity:.6; }
  #otp-inline { margin-top:10px; }

.error-msg {
    color: red;
    white-space: pre-line;
    margin-left: 15px;
    font-size: 14px;
}

.success-msg { color: green; white-space: pre-line;font-size:13px; }

  .submit[disabled],
  .submit.disabled {
    pointer-events: none;
    opacity: .6;
    cursor: not-allowed;
  }

#resend-otp {
    margin-left: 8px;
    color: #000073;
}</style>

<script>
// ===== CONFIG =====
const VERIFY_API      = '/verify-api2.php';
const VERIFY_BRAND    = 'EasyHomeService';
const CLIENT_OTP_TTL  = 600;      // 60 seconds (matches backend TTL)
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
      'aria-label': 'Resend Code'
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
      
      // Hide Terms UI until phone is verified
$('.term-check').hide().attr('aria-hidden','true');
$('.submit').hide().attr('aria-hidden','true');


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
      $('.step-hdng1').text('Please enter CODE to verify your account');
      $('.step-hdng2').text('Verification code has been sent to ' + maskLast4Only(phoneE164));
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
            setMsg($('#phone-error'), 'Could not send code. Please try again.', 'error');
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
            setMsg($('#phone-error'), 'Could not send code. Please try again.', 'error');
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
setMsgHTML(
  $('#phone-error'),
  '<strong>Final step:</strong> Check the terms box below, then click Submit.' +
  ' <span class="help-q" tabindex="0" aria-label="Why is this required?">?</span>',
  'success'
);

// 👇 show the terms only after verification
    $('.term-check').stop(true, true).slideDown(200).attr('aria-hidden','false');
    
        $('.submit').stop(true, true).slideDown(200).attr('aria-hidden','false');
    
    $('#phoneterms').focus(); // optional
    
    
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
              setMsg($('#otp-error'), 'Incorrect code. Please enter the latest code we sent.', 'error');
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
  const PREFIX = "+1 ";

  // Ensure prefix on focus
  $('#phone').on('focus', function () {
    if (!$(this).val()) $(this).val(PREFIX);
  });

  // Keep caret out of the prefix and prevent deleting it
  $('#phone').on('keydown', function (e) {
    const start = this.selectionStart || 0;
    const forbiddenBackspace = (e.key === 'Backspace' && start <= PREFIX.length);
    const forbiddenDelete = (e.key === 'Delete' && start < PREFIX.length);
    if (forbiddenBackspace || forbiddenDelete) {
      e.preventDefault();
    }
  });

  // Also keep caret from landing inside the prefix via mouse/touch
  $('#phone').on('click keyup', function () {
    if ((this.selectionStart || 0) < PREFIX.length) {
      this.setSelectionRange(PREFIX.length, PREFIX.length);
    }
  });

  // Format phone number on any input/paste
  $('#phone').on('input', function () {
    const raw = $(this).val();

    // Always start with "+1 "
    let digits = raw.replace(/\D/g, '');
    if (digits.startsWith('1')) digits = digits.slice(1); // we add +1 ourselves

    digits = digits.slice(0, 10); // max 10 digits after +1

    // Build formatted value for display
    let formatted = PREFIX;
    if (digits.length > 0) {
      formatted += '(' + digits.slice(0, 3);
    }
    if (digits.length >= 4) {
      formatted += ') ' + digits.slice(3, 6);
    }
    if (digits.length >= 7) {
      formatted += '-' + digits.slice(6, 10);
    }

    // If no digits, show just the prefix
    if (digits.length === 0) formatted = PREFIX;

    // Set the formatted value in the input field
    $(this).val(formatted);

    // Store raw digits for later use (for validation and submission)
    $(this).data('raw', digits);

    // Set caret to the end of the formatted phone number
    const pos = formatted.length;
    this.setSelectionRange(pos, pos);
  });

  // Clean up on blur: if only prefix, clear it
  $('#phone').on('blur', function () {
    if ($(this).val() === PREFIX) $(this).val('');
  });
});

</script>





<!------------------------->


<!--plus 1-->


<script>

$(document).ready(function() {
  // Skip script if current URL is the specific page
  if (window.location.href === "https://easyhomeservice.com/roofing") {
    return;
  }

  $('.common_btn').each(function() {
    // Skip if the button is inside #myform
    if ($(this).closest('#myform').length === 0) {
      $(this).contents().filter(function() {
        return this.nodeType === 3 && $.trim(this.nodeValue).length > 0;
      }).first().replaceWith('Get A Quote Now');
    }
  });
});



</script>
<script>
$(document).ready(function () {
    // Get the current URL path
    var path = window.location.pathname;

    // Extract the last part of the URL (e.g., "roofing" from "/roofing")
    var pageName = path.split('/').filter(Boolean).pop();

    // Capitalize the first letter
    var formattedName = pageName.charAt(0).toUpperCase() + pageName.slice(1);

    // Update the span text
    $(".steps-qtd").text(formattedName);
});

</script>


<!-- Load jQuery (Put in <head> or before </body>) -->
<!-- Load jQuery 3.6 (Ensure this is included in <head> or before </body>) -->
<script>
$(document).ready(function () {
    $("body *").contents().each(function () {
        if (this.nodeType === 3) {
            this.nodeValue = this.nodeValue.replace(/\bContractors\b/g, "Service Provider")
                                           .replace(/\bcontractors\b/g, "service provider");
        }
    });
});

</script>
<script>
    $(document).ready(function () {
        // Get the current URL path, remove leading/trailing slashes
        let path = window.location.pathname.toLowerCase().replace(/^\/|\/$/g, ""); 

        console.log("🔹 Extracted Path: ", path); // Debugging log

        // Define URL path to phone number mapping
        const phoneNumbers = {
            "window": "+18335516680",
            "solar": "+18337192289",
            "roofing": "+18337153290",
            "kitchen": "+18337169369",
            "homewarranty": "+18337196164",
            "door": "+16074249939",
            "bathroom": "+18337083179",
            "flooring": "+17733776875",
            "hvac": "+18338010863",
            "gutter": "+18335200040",
            "plumbing": "+13216033297"
        };

        // Default phone number if no match is found
        // let defaultNumber = "+13074161843";
        let defaultNumber = "+18333809800";

        // Get the correct phone number from the object
        let phoneNumber = phoneNumbers[path] || defaultNumber;

        console.log("✅ Phone Number to Set: ", phoneNumber); // Debugging log

        // Update the phone number dynamically
        let phoneElement = $("#header_call");

        if (phoneElement.length > 0) {
            phoneElement.attr("href", "tel:" + phoneNumber).text(phoneNumber);
        } else {
            console.error("❌ Phone number element #header_call not found!");
        }
    });
</script>



<script>
$(document).ready(function () {
    // Get the current URL
    let currentURL = window.location.href;

    // Check if the URL contains "source=FB"
    if (currentURL.includes("source=FB")) {
        // Store a flag in localStorage to remember the visit
        localStorage.setItem("cameFromFB", "true");
    }

    // If the user came from source=FB, apply changes
    if (localStorage.getItem("cameFromFB") === "true") {
        // Hide the "Services" dropdown instantly
        $(".dropdown").css("display", "none");

        // Update the href of the Easy Home Service link instantly
        $("a[href='https://easyhomeservice.com']").attr("href", "https://easyhomeservice.com/window");

        // Ensure "Get A Quote" button redirects to the new URL
        $(".header-btn.form-open").off("click").on("click", function (event) {
            event.preventDefault(); // Prevent any default behavior
            window.location.href = "https://easyhomeservice.com/window"; // Redirect to new URL
        });

        // If the button has an inline onclick attribute, remove it to prevent conflicts
        $(".header-btn.form-open").removeAttr("onclick");
    }
});
</script>



<script>
    function redirectToCategory(category) {
        // Get current URL parameters
        const params = new URLSearchParams(window.location.search);

        // List of parameters to extract from the current URL and pass to the new URL
        const parameterList = [
            'clickid', 'source', 'eventid', 'utm_content', 'utm_term', 
            'utm_campaign', 'utm_medium', 'utm_source', 'fbc', 'fbp', 'gclid'
        ];

        // Create a new URLSearchParams object to hold the parameters to pass
        const newParams = new URLSearchParams();

        // Loop through the list of parameters and append them to newParams if they exist in the URL
        parameterList.forEach(param => {
            const value = params.get(param); // Get the value of the parameter from the current URL
            if (value) {
                newParams.set(param, value); // Only append the parameter if it has a value
            }
        });

        // Construct the new URL with the selected category
        let newUrl = category;

        // If there are parameters, append them to the URL
        if (newParams.toString()) {
            newUrl += '?' + newParams.toString(); // Append parameters only if they exist
        }

        // Redirect to the new URL
        window.location.href = newUrl; // Perform the redirect
    }
</script>


    

<script>
    window.addEventListener('load', function() {
        // Function to get URL parameter by name
        function getUrlParameter(name) {
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(window.location.href);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        // Check if the URL contains a "zip" parameter with some value
        var zipValue = getUrlParameter('zip');
        if (zipValue) {
            // Get the input element by its id
            var zipcodeInput = document.getElementById('zipcode');

            // Find the nearest button element relative to the input element
            var closestButton = zipcodeInput.closest('a');

            // If a closest button is found, simulate a click event on it
            if (closestButton) {
                closestButton.click();
            }
        }
    });
</script>



<script>
        document.addEventListener('DOMContentLoaded', function() {
            var links = document.querySelectorAll('a');
            links.forEach(function(link) {
                link.addEventListener('mouseover', function(event) {
                    event.preventDefault();
                });
            });
        });
    </script>
    


<script>
    // Execute the code when the DOM content is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Append after the input with id "input_field_zip"
        var inputFieldZip = document.getElementById("input_field_zip");
        appendHiddenInputAfter(inputFieldZip, "clickid", "<?php echo $_GET['clickid']; ?>");
        appendHiddenInputAfter(inputFieldZip, "source", "<?php echo $_GET['source']; ?>");

        // Append additional hidden fields
        appendHiddenInputAfter(inputFieldZip, "eventid", "<?php echo $_GET['eventid']; ?>");
        appendHiddenInputAfter(inputFieldZip, "utm_content", "<?php echo $_GET['utm_content']; ?>");
        appendHiddenInputAfter(inputFieldZip, "utm_term", "<?php echo $_GET['utm_term']; ?>");
        appendHiddenInputAfter(inputFieldZip, "utm_campaign", "<?php echo $_GET['utm_campaign']; ?>");
        appendHiddenInputAfter(inputFieldZip, "utm_medium", "<?php echo $_GET['utm_medium']; ?>");
        appendHiddenInputAfter(inputFieldZip, "utm_source", "<?php echo $_GET['utm_source']; ?>");
        appendHiddenInputAfter(inputFieldZip, "fbc", "<?php echo $_GET['fbc']; ?>");
        appendHiddenInputAfter(inputFieldZip, "fbp", "<?php echo $_GET['fbp']; ?>");
        appendHiddenInputAfter(inputFieldZip, "gclid", "<?php echo $_GET['gclid']; ?>");
    });

    function appendHiddenInputAfter(element, name, value) {
        var hiddenInput = document.createElement("input");
        hiddenInput.setAttribute("type", "hidden");
        hiddenInput.setAttribute("name", name);
        hiddenInput.setAttribute("value", value);

        // Insert the new hidden input field after the specified element
        element.parentNode.insertBefore(hiddenInput, element.nextSibling);
    }
</script>

<script>
$(document).ready(function () {
    
    $(document).on('click', '.next-btn, .btn-back', function() {
        if ($('.step1').is(':visible'))
            $('.btn-back').hide();
        else
            $('.btn-back').show();
    });

});
</script>


<div class="footer ">
    <div class="container">
        <p class="footer_text text-center">
        <a href="<?php echo $base_url; ?>terms">Terms of Use</a>|
        <a href="<?php echo $base_url; ?>privacy-policy">Privacy Policy</a>|
        <a href="<?php echo $base_url; ?>do-not-call-policy">DNC Policy</a>|
        <a href="<?php echo $base_url; ?>ccpa">CCPA</a>|
        <!--<a href="<?php echo $base_url; ?>service-location">Service Locations</a>|-->
        <a href="<?php echo $base_url; ?>contact">Contact</a>
        </p>
        
        <!--<p class="footer_text">-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('terms','modal');">Terms of Use</a>|-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('privacy','modal');">Privacy Policy</a>|-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('contact','modal');">Contact</a>-->
        <!--</p>-->
        
        
         

        <p class="footer_text footer_text2 text-center">&copy; <script>document.write(new Date().getFullYear())</script> Easy Home Service. <br class="showMob"/>All Rights Reserved.</p>
<p class="footer_text f mb-0">
  <a href="https://www.facebook.com/profile.php?id=61565981943953&amp;sk=about" class="px-2" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-facebook"></i>
  </a>
  <a href="https://www.linkedin.com/company/easy-home-service-llc" class="px-2" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-linkedin"></i>
  </a>
  <a href="https://www.instagram.com/easy_home__service/" class="px-2" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-instagram"></i>
  </a>
    <a href="https://x.com/Easy_Home_" class="px-2" aria-label="Twitter" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-twitter-x"></i>
  </a>

   <a href="https://www.youtube.com/@EasyHomeService-US" class="px-2" aria-label="Youtube" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-youtube"></i>
  </a> 
  
   <a href="https://www.pinterest.com/easyhomeservicee/" class="px-2" aria-label="Youtube" target="_blank" rel="noopener noreferrer">
   <i class="bi bi-pinterest"></i>
  </a> 
</p>
       
    </div>
</div>

<style>
.f i {
    font-size: 20px;
    color: #0000008c;
}
</style>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        // Find the form element with id="myform"
        var form = $('#myform');
    
        if (form.length) {
            // Create the hidden fields container
            var hiddenFieldsDiv = $('<div id="hiddenfields"></div>');
    
            // Add your hidden input elements using jQuery
            hiddenFieldsDiv.append('<input type="hidden" name="ipAddress" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">');
    
            var currentURL = window.location.href.split('?')[0];
    
            // Assuming currentURL is a string variable containing the URL with "-f"
            var modifiedURL = currentURL.replace("-f", "");
    
            // Appending the modified URL to the hidden field
            hiddenFieldsDiv.append('<input type="hidden" name="formURL" value="' + modifiedURL + '">');
    
            hiddenFieldsDiv.append('<input type="hidden" name="source" value="<?php echo $_GET['source']; ?>">');
    
            hiddenFieldsDiv.append('<input type="hidden" name="xxTrustedFormCertUrl">');
            hiddenFieldsDiv.append('<input type="hidden" name="xxCertUrl">');
    
            hiddenFieldsDiv.append('<input type="hidden" name="clickid" value="<?php echo $_GET['clickid']; ?>">');
    
            hiddenFieldsDiv.append('<input type="hidden" name="tcpaConsent" value="YES">');
    
            hiddenFieldsDiv.append('<input type="hidden" name="tcpaConsentLanguage" value="Agree and Submit, I agree to the Privacy Policy and Terms and Conditions. I also consent to receive marketing communications through email and other texts or calls from EasyHomeServe and/or its marketing partners about residential solar power and panels by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry. Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of EasyHomeServe and/or its marketing partners">');
    
            // Append additional hidden fields
            hiddenFieldsDiv.append('<input type="hidden" name="eventid" value="<?php echo $_GET['eventid']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="fbc" value="<?php echo $_GET['fbc']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="fbp" value="<?php echo $_GET['fbp']; ?>">');
            hiddenFieldsDiv.append('<input type="hidden" name="gclid" value="<?php echo $_GET['gclid']; ?>">');
    
            // Insert the container after the phone input field
            var phoneInput = form.find('#zipcode');
            if (phoneInput.length) {
                phoneInput.after(hiddenFieldsDiv);
            }
        }
    });
</script>

    
    
    <script type="text/javascript">
      // Your additional scripts or code here
    
      var additionalScript = document.createElement('script');
      additionalScript.type = 'text/javascript';
      additionalScript.textContent = `
        // Your existing script
        (function() {
          var tf = document.createElement('script');
          tf.type = 'text/javascript'; tf.async = true;
          tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
        })();
      `;
    
      document.body.appendChild(additionalScript);
    </script>
    
    <script type="text/javascript">
      // Your additional scripts or code here
    
      var additionalScript = document.createElement('script');
      additionalScript.type = 'text/javascript';
      additionalScript.textContent = `
        // Your existing script
        (function() {
          var tf = document.createElement('script');
          tf.type = 'text/javascript'; tf.async = true;
          tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
        })();
      `;
    
      document.body.appendChild(additionalScript);
    </script>
    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('myForm');
        var inputField = document.getElementById('input_field_zip');
        var errorMessageElement = document.querySelector('.error-message');

        form.addEventListener('submit', function (event) {
            // Validate ZIP code before submitting the form
            if (!validateZipCode(inputField.value)) {
                // Invalid ZIP code, prevent form submission
                event.preventDefault();
                // Show error message
                errorMessageElement.textContent = 'Invalid ZIP Code. Please enter a valid 5-digit ZIP Code.';
            }
        });

        inputField.addEventListener('input', function () {
            // Delay error message until at least 5 numbers are input
            if (this.value.length >= 5) {
                validateZipCode(this.value);
            } else {
                errorMessageElement.textContent = '';
            }
        });

        function validateZipCode(zipCode) {
            // Simple ZIP code validation (5 digits)
            var zipRegex = /^\d{5}$/;

            if (zipRegex.test(zipCode)) {
                // Valid ZIP code
                errorMessageElement.textContent = '';
                return true;
            } else {
                // Invalid ZIP code
                errorMessageElement.textContent = 'Invalid ZIP Code. Please enter a valid 5-digit ZIP Code.';
                return false;
            }
        }
    });
</script>

<script>
   $(document).ready(function() {
    // Function to get the value of a URL parameter by name
    function getUrlParameter(name) {
        var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results === null ? null : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Function to trigger a click event
    function triggerNextButton() {
        // Find the first "Next" button in the '.step1' section
        var nextButton = $('.step1 .btn_box .common_btn.next-btn').first();
        if (nextButton.length > 0) {
            console.log("Next button found. Triggering click.");
            nextButton.trigger('click'); // Use trigger('click') for jQuery event binding
        } else {
            console.error('Next button not found within .step1');
        }
    }

    // Check if 'zip' parameter is present
    var zipValue = getUrlParameter('zip');

    if (zipValue) {
        console.log("Zip value found:", zipValue);

        // Wait for the page to fully load, then try to trigger the button click
        $(window).on('load', function() {
            setTimeout(triggerNextButton, 100); // Delay to ensure the button is fully rendered
        });
    } else {
        console.error('Zip code parameter is missing or empty in the URL.');
    }
});

</script>
    <script>
    // Function to get URL parameter by name
    function getURLParameter(name) {
        const params = new URLSearchParams(window.location.search);
        return params.get(name);
    }

    // Example: Retrieve URL parameters
    const clickid = getURLParameter('clickid');
    const publisherid = getURLParameter('publisherid');

    console.log('Click ID:', clickid);  // Output: test
    console.log('Publisher ID:', publisherid);  // Output: passed

    // Function to set a cookie
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = `${name}=${encodeURIComponent(value || "")}${expires}; path=/`;
    }

    // Set cookies for 'clickid' and 'publisherid' for 1 day if they exist in the URL
    if (clickid) setCookie('clickid', clickid, 1);
    if (publisherid) setCookie('publisherid', publisherid, 1);

    // Function to get a cookie by name
    function getCookie(name) {
        const nameEQ = `${name}=`;
        const cookiesArray = document.cookie.split(';');
        for (let i = 0; i < cookiesArray.length; i++) {
            let cookie = cookiesArray[i].trim();
            if (cookie.indexOf(nameEQ) === 0) {
                return decodeURIComponent(cookie.substring(nameEQ.length));
            }
        }
        return null;
    }

    // Example: Retrieve cookies
    const cookieClickid = getCookie('clickid');
    const cookiePublisherid = getCookie('publisherid');

    console.log('Cookie Click ID:', cookieClickid);
    console.log('Cookie Publisher ID:', cookiePublisherid);
</script>


<script>
    $(document).ready(function () {
        // Function to get URL parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Function to store parameter in localStorage if it exists
        function storeParam(paramName) {
            const paramValue = getQueryParam(paramName);
            if (paramValue) {
                localStorage.setItem(paramName, paramValue); // Store value in localStorage
            }
            return paramValue;
        }

        // Function to set input values and update localStorage
        function setInputValue(paramName, inputName) {
            let paramValue = storeParam(paramName); // Check URL and store in localStorage if available

            if (!paramValue) {
                // If not in URL, get it from localStorage
                paramValue = localStorage.getItem(paramName);
            }

            // Set the value of the hidden input field if it exists on the page
            const $inputElement = $(`input[name="${inputName}"]`);
            if ($inputElement.length && paramValue) {
                $inputElement.val(paramValue);
            }
        }

        // Handle 'clickid' parameter
        setInputValue('clickid', 'clickid');

        // Handle 'source' parameter
        setInputValue('source', 'source');
    });
</script>

<!--Traking-->
 
<script src="https://fb.thesolarhelp.com/uniclick.js?attribution=lastpaid&cookiedomain=easyhomeservice.com&cookieduration=90&defaultcampaignid=68a592306ea03d59a02b0765&regviewonce=false"></script>


<script>
jQuery(document).ready(function($) {
    $("#phone")
        .closest(".question_box.step")    // go up to the parent container
        .find(".step-hdng2")              // find the step-hdng2 inside it
        .text("Number is solely used for secure verification and appointment setup.") // change text
        .addClass("p16pp");               // add p16pp class
});
</script>

<script>
// ===== Image tooltip config =====
const HELP_IMG_URL = 'https://easyhomeservice.com/images/yesbtn.png'; // <-- change to your image
const HELP_IMG_ALT = 'You need to check the terms before submitting.';

// Wire up tooltip content on demand (works for future DOM too)
$(document).on('mouseenter focus', '.help-q', function(){
  const $q = $(this);
  if (!$q.find('.img-pop').length) {
    $q.append(
      `<span class="img-pop" role="tooltip">
         <img src="${HELP_IMG_URL}" alt="${HELP_IMG_ALT}">
       </span>`
    );
  }
});
// Tap/click toggle for mobile
$(document).on('click', '.help-q', function(e){
  e.preventDefault();
  $(this).toggleClass('help-open');
});
// Close on Esc
$(document).on('keydown', '.help-q', function(e){
  if (e.key === 'Escape') $(this).removeClass('help-open').blur();
});
</script>




<!--Traking-->
