<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php 
$base_url= 'https://easyhomeservice.com/';
?>
<!-- Fire conversion only on final submit -->
<script>
document.querySelector(".pm_button.submit").addEventListener("click", function () {
  gtag_report_conversion();
});
</script>

<!--<noscript>-->
<!--<a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a>-->
<!--</noscript>-->
<!--  Clickcease.com tracking-->

<script src="https://cdn.brevo.com/js/sdk-loader.js" async></script>
<script>
    // Version: 2.0
    window.Brevo = window.Brevo || [];
    Brevo.push([
        "init",
        {
        client_key: "atffrgohsatbzh4tgdfpfio8",
        // Optional: Add other initialization options, see documentation
        }
    ]);
</script>


<!-- Include jQuery (if not already added) -->

<!--steps script only-->

<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (preg_match('/-steps$/', $path)) {
?>

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



<?php
}
?>

<!--/steps sctip only-->




<!------------------------->




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

    // Get the current URL path
    let path = window.location.pathname.toLowerCase().replace(/^\/|\/$/g, ""); 

    console.log("🔹 Extracted Path: ", path);

    // Define keyword to phone number mapping
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
        "gutter": "+18333788997", // duplicate removed (last one kept)
        "plumbing": "+13216033297",
        "shower": "+18333785763",
        "cabinet": "+18333803988"
    };

    let defaultNumber = "+18333809800";

    let phoneNumber = defaultNumber;

    // ✅ NEW LOGIC — match keyword inside URL
    $.each(phoneNumbers, function(keyword, number){
        if(path.includes(keyword)){
            phoneNumber = number;
            return false; // stop loop once matched
        }
    });

    console.log("✅ Phone Number to Set: ", phoneNumber);

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





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
$(document).ready(function() {

    var form = $('#myform, .leadForm');

    if (form.length) {

        var hiddenFieldsDiv = $('<div id="hiddenfields"></div>');

        hiddenFieldsDiv.append('<input type="hidden" name="ipAddress" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">');

        var currentURL = window.location.href.split('?')[0];
        var modifiedURL = currentURL.replace("-f", "");

        hiddenFieldsDiv.append('<input type="hidden" name="formURL" value="' + modifiedURL + '">');

        hiddenFieldsDiv.append('<input type="hidden" name="source" value="<?php echo $_GET['source']; ?>">');

        hiddenFieldsDiv.append('<input type="hidden" name="xxTrustedFormCertUrl">');

        hiddenFieldsDiv.append('<input id="leadid_token" name="universal_leadid" type="hidden">');

        hiddenFieldsDiv.append('<input type="hidden" name="xxCertUrl">');

        hiddenFieldsDiv.append('<input type="hidden" name="clickid" value="<?php echo $_GET['clickid']; ?>">');

        hiddenFieldsDiv.append('<input type="hidden" name="tcpaConsent" value="YES">');

        hiddenFieldsDiv.append('<input type="hidden" name="tcpaConsentLanguage" value="Agree and Submit, I agree to the Privacy Policy and Terms and Conditions. I also consent to receive marketing communications through email and other texts or calls from EasyHomeServe and/or its marketing partners about residential solar power and panels by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry. Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of EasyHomeServe and/or its marketing partners">');

        hiddenFieldsDiv.append('<input type="hidden" name="eventid" value="<?php echo $_GET['eventid']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="fbc" value="<?php echo $_GET['fbc']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="fbp" value="<?php echo $_GET['fbp']; ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="gclid" value="<?php echo $_GET['gclid']; ?>">');

        var externalRef = sessionStorage.getItem('external_referrer') || '';

        hiddenFieldsDiv.append('<input type="hidden" name="http_referrer" value="' + externalRef + '">');

        var phoneInput = form.find('#zipcode, .zipcode');

        if (phoneInput.length) {
            phoneInput.after(hiddenFieldsDiv);
        }

    }
});
</script>
    
<script>
$(document).ready(function(){

    function getSource(){
        var ref = document.referrer;
        if(!ref) return "direct";

        try{
            var domain = new URL(ref).hostname.replace("www.","");
            return domain.split('.')[0]; // google, facebook, etc
        }catch(e){
            return "direct";
        }
    }

    function getPageSlug(url){
        var path = new URL(url).pathname.split("/").filter(Boolean);
        return path.length ? path[path.length-1] : "home";
    }

    var source = getSource();

    var previousPage = document.referrer ? getPageSlug(document.referrer) : "home";

    var currentPage = getPageSlug(window.location.href);

    var refValue = source + "/" + previousPage + "/" + currentPage;

    $('#hiddenfields').append(
        '<input type="hidden" name="referrer" value="'+refValue+'">'
    );

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
 
<!--<script src="https://fb.thesolarhelp.com/uniclick.js?attribution=lastpaid&cookiedomain=easyhomeservice.com&cookieduration=90&defaultcampaignid=68a592306ea03d59a02b0765&regviewonce=false"></script>-->


<script>
jQuery(document).ready(function($) {
    $("#phone")
        .closest(".question_box.step")    // go up to the parent container
        .find(".step-hdng2")              // find the step-hdng2 inside it
        .text("Number is solely used for secure verification and appointment setup.") // change text
        .addClass("p16pp");               // add p16pp class
});
</script>

<!--Traking-->
<script>
(function () {
  // ---- CONFIG ----
  const FIELDS = [
    "source",
    "clickid",
    "eventid",
    "utm_content",
    "utm_term",
    "utm_campaign",
    "utm_medium",
    "utm_source",
    "fbc",
    "fbp",   // pair to fbc
    "gclid"
  ];
  const COOKIE_DAYS = 30;

  // If you need cross-subdomain sharing (e.g. www.easyhomeservice.com and app.easyhomeservice.com)
  // set this to your apex like ".easyhomeservice.com". Leave as null to let the browser decide.
  const COOKIE_DOMAIN = (function () {
    // Best effort: for typical .com domains, use apex; comment this line out if it causes issues.
    const host = location.hostname;
    const parts = host.split(".");
    if (parts.length >= 3) return "." + parts.slice(-2).join("."); // e.g. .easyhomeservice.com
    return null;
  })();

  // ---- STORAGE HELPERS ----
  function setCookie(name, value, days) {
    const d = new Date(Date.now() + days*24*60*60*1000);
    let cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) +
                 "; expires=" + d.toUTCString() +
                 "; path=/" + "; SameSite=Lax";
    if (COOKIE_DOMAIN) cookie += "; domain=" + COOKIE_DOMAIN;
    document.cookie = cookie;
  }
  function getCookie(name) {
    const key = encodeURIComponent(name) + "=";
    const parts = document.cookie ? document.cookie.split("; ") : [];
    for (const part of parts) {
      if (part.indexOf(key) === 0) return decodeURIComponent(part.substring(key.length));
    }
    return null;
  }
  function setStore(name, value) {
    try { localStorage.setItem(name, value); } catch (e) {}
    setCookie(name, value, COOKIE_DAYS);
  }
  function getStore(name) {
    try {
      const v = localStorage.getItem(name);
      if (v !== null && v !== "") return v;
    } catch (e) {}
    return getCookie(name);
  }

  // ---- CORE ----
  const params = new URLSearchParams(location.search);

  function normalize(v) {
    if (v == null) return v;
    // Convert '+' to space for some trackers, then decodeURIComponent-like behavior is already handled by URLSearchParams
    return String(v).trim();
  }

  function captureFromUrl() {
    let changed = false;
    FIELDS.forEach((key) => {
      const fromUrl = params.get(key);
      if (fromUrl !== null && fromUrl !== "") {
        const value = normalize(fromUrl);
        setStore(key, value);
        changed = true;
      }
    });
    return changed;
  }

  function fillHiddenInputs(root = document) {
    FIELDS.forEach((key) => {
      const value = params.get(key) || getStore(key);
      if (value == null || value === "") return;
      const input = root.querySelector('input[type="hidden"][name="' + key + '"]');
      if (input && !input.value) input.value = value;
    });
  }

  function onReady(fn) {
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", fn);
    } else {
      fn();
    }
  }

  // For SPAs or late-injected forms: watch for new nodes and try to fill once.
  let observedOnce = false;
  function startObserver() {
    if (observedOnce) return;
    observedOnce = true;
    const obs = new MutationObserver((muts) => {
      for (const m of muts) {
        for (const node of m.addedNodes) {
          if (!(node instanceof HTMLElement)) continue;
          // If any hidden input with our names shows up, try to fill
          if (node.querySelector && node.querySelector('input[type="hidden"]')) {
            fillHiddenInputs(node);
          }
        }
      }
    });
    obs.observe(document.documentElement, { childList: true, subtree: true });
  }

  // ---- RUN ----
  onReady(function () {
    captureFromUrl();   // Save anything present in the URL
    fillHiddenInputs(); // Populate fields on this page
    startObserver();    // Catch late-inserted forms
  });
})();
</script>

<!--Journaya-->
<script id="LeadiDscript" type="text/javascript">
   (function() {
   var s = document.createElement('script');
   s.id = 'LeadiDscript_campaign';
   s.type = 'text/javascript';
   s.async = true;
   s.src = '//create.lidstatic.com/campaign/1fb9c636-e8b8-9eaa-5ea0-61afe53bcbcd.js?snippet_version=2';
   var LeadiDscript = document.getElementById('LeadiDscript');
   LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
   })();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=E1CA2C53-E8DD-2D35-1ABF-E35EF0EB878A&lck=1fb9c636-e8b8-9eaa-5ea0-61afe53bcbcd&snippet_version=2' /></noscript>
<!--Journaya-->





<!--footer-->


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $base_url; ?>css/footer-style.css">

<footer class="footer">
    <div class="floating-shapes">
        <div class="shape shape1"></div>
        <div class="shape shape2"></div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-lg-3 col-md-6 footer-section">
                <h5>Contact Details</h5>
                <ul class="contact-info">
                    <li>
                        <div class="icon-wrapper">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <span>1309 Coffeen Avenue Ste 1200, Sheridan, WY 82801.</span>
                    </li>
                    <li>
                        <div class="icon-wrapper">
                            <i class="fas fa-phone"></i>
                        </div>
                        <a href="tel:+18333809800">+1 (833) 380-9800</a>
                    </li>
                    <li>
                        <div class="icon-wrapper">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <a href="mailto:service@easyhomeservice.com">service@easyhomeservice.com</a>
                    </li>
                </ul>

                <!-- Social Links -->
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=61565981943953&sk=about" class="social-icon" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/easy-home-service-llc" class="social-icon" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/easy_home__service/" class="social-icon" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://x.com/Easy_Home_" class="social-icon" aria-label="Twitter" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/@EasyHomeService-US" class="social-icon" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.pinterest.com/easyhomeservicee/" class="social-icon" aria-label="Pinterest" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 footer-section col-6">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
            </div>

            <!-- Support Links -->
            <div class="col-lg-2 col-md-6 footer-section col-6">
                <h5>Support</h5>
                <ul class="footer-links">
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Use</a></li>
                    <li><a href="/tcpa">TCPA</a></li>
                    <li><a href="/ccpa">CCPA</a></li>
                    <li><a href="/do-not-call-policy">DNC Policy</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 footer-section col-6">
                <h5>Top Categories</h5>
                <ul class="footer-links mobile-four">
                    <li><a href="/window">Window</a></li>
                    <li><a href="/roofing">Roofing</a></li>
                    <li><a href="/solar">Solar</a></li>
                    <li><a href="/bathroom">Bathroom</a></li>
                    <li><a href="/hvac">HVAC</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6 footer-section">
                <h5>Newsletter</h5>
                <p class="footer-about">
                    Subscribe to our newsletter for expert guidance, new trends, latest blogs,
                    important updates, and essential safety knowledge.
                </p>

                <div class="footer-newsletter">
                    <form method="POST" id="newsletterForm">
                        <div class="newsletter-wrapper">
                            <input
                                type="email"
                                name="newsemail"
                                id="newsemail"
                                placeholder="Enter your email"
                                required
                            >
                            <button type="submit" class="newsletter-btn" aria-label="Subscribe">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div id="newsletterMsg"></div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-12">
                    <p>
                        Easyhomeservice.com is a free service to assist homeowners in connecting with local service providers.
                        All service provider/providers are independent and Easy Home Service does not warrant or guarantee any work performed.
                        It is the responsibility of the homeowner to verify that the hired contractor furnishes the necessary license
                        and insurance required for the work being performed. All persons depicted in a photo or video are actors or models
                        and not service provider listed on easyhomeservice.com.
                    </p>
                    <p class="copyright">
                        © <script>document.write(new Date().getFullYear())</script> Easy Home Service. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php include 'gallery-sec/home.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/sticky-cta.php'; ?>  

<script>
$(document).ready(function () {
    $("#newsletterForm").on("submit", function (e) {
        e.preventDefault();

        let email = $("#newsemail").val();
        let $btn = $(".newsletter-btn");
        let $msg = $("#newsletterMsg");

        $btn.addClass("loading");
        $msg.removeClass("success error").text("");

        $.ajax({
            url: "",
            type: "POST",
            data: { newsemail: email },
            success: function (data) {
                $btn.removeClass("loading");

                let response = (data || "").toString().toLowerCase();

                if (response.includes("success")) {
                    $msg
                        .addClass("success")
                        .text("Thank you for subscribing!");
                    $("#newsemail").val("");
                }
                else if (response.includes("db_error")) {
                    $msg
                        .addClass("error")
                        .text("Database connection error. Please try later.");
                }
                else if (response.includes("insert_error")) {
                    $msg
                        .addClass("error")
                        .text("Could not save your email. Please try again.");
                }
                else {
                    $msg
                        .addClass("error")
                        .text("Something went wrong. Try again!");
                }

                setTimeout(() => {
                    $msg.fadeOut(300, function() {
                        $(this).removeClass("success error").text("").show();
                    });
                }, 5000);
            },
            error: function () {
                $btn.removeClass("loading");
                $msg
                    .addClass("error")
                    .text("Server error! Please try later.");
            }
        });
    });
});
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsemail'])) {

    $servername = "localhost";
    $username = "easyhomeservi_contactform";
    $password = "easyhomeservi_contactform";
    $dbname = "easyhomeservi_contactform";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "db_error";
        exit;
    }

    $email = $conn->real_escape_string($_POST['newsemail']);

    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "insert_error";
    }

    $conn->close();
    exit;
}
?>
<!--<script type="text/javascript" src="/js/jquery-3.6.0.min.js" defer></script>-->
<!--<script type="text/javascript" src="/js/bookmarkscroll.js" defer></script>-->
<!--<script type="text/javascript" src="/js/slick.js" defer></script>-->


<script type="text/javascript" src="<?= asset('js/bookmarkscroll.js') ?>" defer></script>
<script type="text/javascript" src="<?= asset('js/slick.js') ?>" defer></script>
