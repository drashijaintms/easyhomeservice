<?php include'header.php' ?>	

<!-- Choices.js (enhanced select) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<style>
.float-left{ float:left; }
.btn-check:active+.btn-outline-secondary:focus, .btn-check:checked+.btn-outline-secondary:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus, .btn-outline-secondary:active:focus { box-shadow: none; }
.btn-outline-secondary:hover { color: white; background-color: #000073!important; border-color: #6c757d; }
.btn-check:focus+.btn-outline-secondary, .btn-outline-secondary:focus { box-shadow: none; }
.btn-check:active+.btn-outline-secondary, .btn-check:checked+.btn-outline-secondary, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show, .btn-outline-secondary:active { color: #fff; background-color: #000073; border-color: #000073; }

:root{ --accent:#04d36f; --cta1:#ff7a18; --cta2:#ff512f; --card-br:#e6e6e6; }
.quote-card{ max-width:520px; border:1px solid var(--card-br); border-radius:12px; box-shadow:0 16px 35px rgba(0,0,0,.08); background:#fff; }
.lt-offer{ color:var(--accent); font-weight:700; letter-spacing:.08em; font-size:.9rem; text-transform:uppercase; display:inline-flex; align-items:center; gap:.75rem; }
.lt-offer::before,.lt-offer::after{ content:""; display:inline-block; width:40px; border-top:3px solid var(--accent); opacity:.9; }
.headline{ line-height:1; font-weight:800; letter-spacing:-.5px; }
.headline small{ display:block; font-weight:800; font-size:.95rem; letter-spacing:.06em; color:#6c757d; }
.headline .strong{ font-size:clamp(2.25rem,6vw,3.25rem); display:block; color:#1c1c1c; }
.headline .sub{ font-weight:700; color:#4b4b4b; margin-top:.15rem; }
.form-control{ background:#f7f7f8; border-color:#e6e6e6; }
.form-control:focus{ border-color:var(--accent); box-shadow:0 0 0 .2rem rgba(39,179,167,.15); background:#fff; }
.btn-pill .btn{ border-radius:999px; padding:.55rem 1rem; border-color:#e6e6e6; background:#fff; }
.btn-pill .btn.active, .btn-pill .btn:has(input:checked){ border-color:var(--accent); box-shadow:0 0 0 .15rem rgba(39,179,167,.15) inset; }
.btn-cta{ background-image:linear-gradient(180deg,#04d36f,#04d36f); color:#fff; border:0; padding:.95rem 1.25rem; font-weight:800; letter-spacing:.04em; text-transform:uppercase; border-radius:.5rem; }
.btn-cta:hover{ filter:brightness(1.05); color:#fff; }
.fineprint{ font-size:.8rem; color:#6c757d; line-height:1.35; text-align:justify; }

/* Select styling */
.form-label{ margin-bottom:.35rem; }
.select-lg-wrap{ position:relative; text-align:left; }
.select-lg-wrap .form-select{ background-image:none; padding-right:3rem; }
.select-lg-wrap::after{
  content:""; position:absolute; right:1rem; top:50%; transform:translateY(-50%);
  width:14px; height:14px; background:no-repeat center/14px 14px url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='none' stroke='%2327b3a7' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24'%3e%3cpolyline points='6 9 12 15 18 9'/%3e%3c/svg%3e");
  pointer-events:none; opacity:.75;
}
.select-lg-wrap:focus-within::after{ opacity:1; }
.form-select.form-select-lg{ background:#f7f7f8; border-color:#e6e6e6; border-radius:.5rem; padding-top:.75rem; padding-bottom:.75rem; min-height:56px; font-size:1rem; }
.form-select.form-select-lg:focus{ border-color:var(--accent,#04d36f); box-shadow:0 0 0 .2rem rgba(39,179,167,.15); background:#fff; }
.form-select option[disabled]{ color:#6c757d; }
.select-lg-wrap:has(.choices)::after, .select-lg-wrap.choices-initialized::after{ display:none!important; }
.choices[data-type*="select-one"] .choices__inner{ background:#f7f7f8; border:1px solid #e6e6e6; border-radius:.5rem;padding:.6rem .9rem; }
.is-focused .choices__inner, .is-open .choices__inner{ border-color:var(--accent,#04d36f); box-shadow:0 0 0 .2rem rgba(39,179,167,.15); background:#fff; }
.choices__list--dropdown{ border-color:#e6e6e6; }
.choices__placeholder{ color:#6c757d; opacity:1; }
.bg-blue{background:#000073;}

@media screen and (max-width:768px){
.banner_shower {
    background: inherit;
}
}</style>
  
  
<!--Inner Banner-->
<div class="inner__banner banner_shower" id="top_form">
  <div class="container">
    <div class="inner__banner__right">
      <img src="images/heroSHOWER.jpg" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
      <div class="quote-card p-4 p-md-5">
        <div class="text-center mb-3"><span class="lt-offer">Get A Quotes</span></div>


<script>
document.addEventListener("DOMContentLoaded", function () {
  function firstByName(name){
    const els = document.getElementsByName(name);
    return els && els.length ? els[0] : null;
  }
  function getValByName(name){
    const el = firstByName(name);
    return el ? (el.value || "") : "";
  }
  function setValByName(name, value){
    const el = firstByName(name);
    if (el) el.value = value || "";
  }

  function syncTrustedForm(){
    const certUrl =
      getValByName("xxTrustedFormCertUrl") ||
      getValByName("xxCertUrl") ||
      "";
    if (certUrl) {
      setValByName("trustedFormURL", certUrl);
    }
  }

  // Run on load
  syncTrustedForm();

  // Run again right before submit (in case TF script injects late)
  const form = document.getElementById("myform") || document.forms[0];
  if (form) {
    form.addEventListener("submit", syncTrustedForm, true);
  }
});
</script>


   <!-- Form -->
        <form id="myform" class="needs-validation" novalidate>
          <div class="row g-3">
            <!-- First / Last Name -->
            <div class="col-md-6">
              <label class="visually-hidden" for="firstName">First Name</label>
              <input id="firstName" name="firstName" class="form-control form-control-md" type="text" placeholder="First Name*" required>
              <div class="invalid-feedback">Please enter your first name.</div>
            </div>

            <div class="col-md-6">
              <label class="visually-hidden" for="lastName">Last Name</label>
              <input id="lastName" name="lastName" class="form-control form-control-md" type="text" placeholder="Last Name*" required>
              <div class="invalid-feedback">Please enter your last name.</div>
            </div>

            <div class="col-md-6">
              <label class="visually-hidden" for="email">Email</label>
              <input id="email" name="email" class="form-control form-control-md" type="email" placeholder="Email*" required>
              <div class="invalid-feedback">Enter a valid email.</div>
            </div>

            <div class="col-md-6">
              <label class="visually-hidden" for="phoneNumber">Phone</label>
              <input id="phoneNumber" name="phoneNumber" class="form-control form-control-md" type="tel" inputmode="tel" placeholder="Phone*" required>
              <div class="invalid-feedback">Please enter your phone number.</div>
            </div>

            <div class="col-md-6">
              <label class="visually-hidden" for="address">Address</label>
              <input id="address" name="streetAddress" class="form-control form-control-md" type="text" placeholder="Address*">
            </div>
            
            <!-- City / State -->
<div class="col-md-6">
  <label class="visually-hidden" for="city">City</label>
  <input id="city" name="city" class="form-control form-control-md" type="text" placeholder="City*">
</div>

<div class="col-md-6">
  <label class="visually-hidden" for="state">State</label>
  <input id="state" name="state" class="form-control form-control-md" type="text" placeholder="State* (e.g., CA)" maxlength="40">
</div>

            <div class="col-md-6">
              <label class="visually-hidden" for="zipcode">Zip Code</label>
              <input id="zipcode" name="zip" class="form-control form-control-md" type="text" inputmode="numeric" pattern="[0-9]{5}" maxlength="5" placeholder="Zip Code*" required>
              
              <input type="hidden" name="apiId" value="722DDDB89DF34798AA3698A0DAFC5094">
              <input type="hidden" name="apiPassword" value="0e79023a04">
              <input type="hidden" name="productId" value="265">
              <input type="hidden" name="landingPage" value="https://easyhomeservice.com/shower">
              <input type="hidden" name="userAgent" value="<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>">

              <input type="hidden" name="userAgent" value="<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>">
              <input type="hidden" name="trustedFormURL" value="">



              <div class="invalid-feedback">Enter a valid 5-digit ZIP.</div>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <label for="projectType" class="mb-3 float-left form-label fw-semibold">Project Type*</label>
                </div>
                <div class="col-12">
                  <div class="select-lg-wrap">
                    <select id="projectType" name="service" class="form-select form-select-lg" required>
                      <option value="" selected disabled>Select project type</option>
                      <option value="TUB_TO_WALKIN_SHOWER">Tub to walk-in shower</option>
                      <option value="SHOWER_TO_WALKIN_SHOWER">Shower to walk-in shower</option>
                      <option value="OTHER">Other</option>
                    </select>
                  </div>
                  <div class="invalid-feedback">Please choose a project type.</div>
                </div>
              </div>
            </div>

<!-- Description -->
<div class="col-12">
  <label class="visually-hidden" for="description">Project Description*</label>
  <textarea id="description" name="description" class="form-control form-control-md" rows="2" placeholder="Briefly describe your project*" required></textarea>
</div>



            <!-- Project Type (Select) -->

            <!-- Hidden fields that will be populated before serialize -->
            <input type="hidden" id="fullName" name="fullName" value="">
            <!-- phone_display removed -->

            <!-- CTA -->
            <div class="col-12">
              <button type="submit" class="btn btn-cta w-100">Get a Free Quote</button>
            </div>

            <!-- Fine print -->
            <div class="col-12">
<p class="fineprint mb-0" id="fineprint">
  By clicking "Get A Quote", I agree to the 
  <a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">Privacy Policy</a> 
  and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions</a>. 
  I also consent to receive marketing communications through email and other texts or calls from 
  EasyHomeService.com and/or its marketing partners about Home Service by any means or technology, 
  including an automatic dialing system, to the phone number I have previously provided, even if 
  that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. 
  I understand that my consent to such calls and text messages is not required to purchase products 
  from or use the services of 
  <a href="javascript:void(0);" onclick="openNewWindow('marketing-partners.php','modal');">marketing partners</a>
</p>



<script>
(function() {
  const p = document.getElementById('fineprint');
  if (!p) return;
  const clamp = document.createElement('span');
  clamp.style.display = 'inline-block';
  while (p.firstChild) clamp.appendChild(p.firstChild);
  p.appendChild(clamp);

  const toggle = document.createElement('span');
  toggle.textContent = ' Read more...';
  toggle.style.cursor = 'pointer';
  toggle.style.color = '#000073';
  toggle.setAttribute('data-read-toggle', '1');
  p.appendChild(toggle);

  function getLineHeight(el) {
    const cs = getComputedStyle(el);
    let lh = parseFloat(cs.lineHeight);
    if (isNaN(lh)) {
      const probe = document.createElement('span');
      probe.textContent = 'A';
      probe.style.visibility = 'hidden';
      el.appendChild(probe);
      lh = probe.getBoundingClientRect().height || 16;
      el.removeChild(probe);
    }
    return lh;
  }

  function collapseIfNeeded() {
    const maxH = getLineHeight(p) * 3;
    if (clamp.getBoundingClientRect().height <= maxH) {
      clamp.style.maxHeight = '';
      clamp.style.overflow = '';
      toggle.style.display = 'none';
      return;
    }
    toggle.style.display = '';
    clamp.style.maxHeight = maxH + 'px';
    clamp.style.overflow = 'hidden';
    toggle.textContent = ' Read more...';
  }

  collapseIfNeeded();

  p.addEventListener('click', function(e) {
    if (e.target !== toggle) return;
    if (toggle.textContent.trim() === 'Read more...') {
      clamp.style.maxHeight = '';
      clamp.style.overflow = '';
      toggle.textContent = ' Read less';
    } else {
      collapseIfNeeded();
    }
  });

  let tid;
  window.addEventListener('resize', () => {
    clearTimeout(tid);
    tid = setTimeout(collapseIfNeeded, 150);
  });
})();
</script>
            </div>
          </div>
        </form>

        <!-- THANK YOU SCREEN (hidden by default) -->
        <div id="thankYouMessage" style="display:none; text-align:center; padding:2rem 1rem;">
          <h2 style="color:#04d36f; font-weight:800; margin-bottom:.5rem;">Thank You!</h2>
          <p class="mb-3">Your request has been received. We’ll be in touch soon.</p>
          <a href="https://easyhomeservice.com/allservices" class="btn text-white bg-blue">Explore More Services <i class="bi bi-arrow-right"></i></a>
        </div>

<script>
// Map "your form keys" ➜ "sending (API) keys"
const SEND_KEY_MAP = {
  // --- IDs / compliance
  "xxTrustedFormCertUrl": "trustedFormURL",
  "xxCertUrl":            "trustedFormURL",   // allow either source to fill the same target

  // --- visitor / context
  "formURL":              "landingPage"       // map formURL to landingPage (your API target)
  // add more mappings here as needed...
};

// Utility: make a new object with remapped keys.
// Options:
//  - keepOriginal (default false): also retain the original source keys
//  - dropEmpty (default true): remove keys with empty values
function remapKeys(src, map = SEND_KEY_MAP, { keepOriginal = false, dropEmpty = true } = {}) {
  const out = {};
  const isEmpty = (v) => v === undefined || v === null || (typeof v === "string" && v.trim() === "");

  Object.keys(src || {}).forEach((k) => {
    const v = src[k];
    if (dropEmpty && isEmpty(v)) return;

    const target = map[k] || k; // pass-through if not mapped
    out[target] = v;

    if (keepOriginal && target !== k) {
      out[k] = v;
    }
  });

  // --- Guarantees that use the SAME target keys you mapped to ---

  // Ensure trustedFormURL exists if any known source keys were present
  const TF_TARGET = "trustedFormURL";
  if (!out[TF_TARGET]) {
    if (!isEmpty(src?.xxTrustedFormCertUrl)) out[TF_TARGET] = src.xxTrustedFormCertUrl;
    else if (!isEmpty(src?.xxCertUrl))       out[TF_TARGET] = src.xxCertUrl;
  }

  // Ensure landingPage is set from either landingPage or formURL in the source
  // (useful if the map didn’t fire because the key was absent)
  if (isEmpty(out.landingPage)) {
    if (!isEmpty(src?.landingPage)) out.landingPage = src.landingPage;
    else if (!isEmpty(src?.formURL)) out.landingPage = src.formURL;
  }

  return out;
}
</script>



<!-- Form logic -->
<script>
(function () {
  "use strict";
  const sanitizeText = (v) => (v || "").replace(/<[^>]*>?/gm, "").replace(/\s+/g, " ").trim();
  const onlyDigits   = (v) => (v || "").replace(/\D+/g, "");
  const isValidEmail = (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
  const isValidZip   = (v) => /^\d{5}$/.test(v);
  const isValidPhone = (v) => onlyDigits(v).length === 10;
  const formatPhone  = (digits) => {
    const d = onlyDigits(digits).slice(0, 10);
    const p1 = d.slice(0,3), p2 = d.slice(3,6), p3 = d.slice(6,10);
    if (d.length > 6) return `(${p1}) ${p2}-${p3}`;
    if (d.length > 3) return `(${p1}) ${p2}`;
    if (d.length > 0) return `(${p1}`;
    return "";
  };

  document.addEventListener("DOMContentLoaded", function() {
    // Choices.js
    (function initChoices(){
      const selWrap = document.querySelector(".select-lg-wrap");
      const sel = document.getElementById("projectType");
      if (sel && window.Choices) {
        const ch = new Choices(sel, {searchEnabled:false, allowHTML:false, placeholder:true, placeholderValue:"Select project type", itemSelectText:"", shouldSort:false});
        selWrap && selWrap.classList.add("choices-initialized");
        window.__projectTypeChoices = ch;
      }
    })();

    // Phone mask
    (function initPhoneMask(){
      const phone = document.getElementById("phoneNumber");
      if (!phone) return;
      phone.addEventListener("input", function() {
        const start = phone.selectionStart || 0;
        const before = phone.value;
        const digitsBeforeCursor = onlyDigits(before.slice(0, start)).length;
        const formatted = formatPhone(before);
        phone.value = formatted;
        let i = 0, digitsSeen = 0, pos = 0;
        while (i < formatted.length && digitsSeen < digitsBeforeCursor) {
          if (/\d/.test(formatted[i])) digitsSeen++;
          i++; pos = i;
        }
        phone.setSelectionRange(pos, pos);
      });
      phone.addEventListener("blur", function() {
        phone.setCustomValidity((phone.value && !isValidPhone(phone.value)) ? "Please enter a 10-digit phone number." : "");
      });
    })();

    const form = document.getElementById("myform");
    if (!form) return;

    // Status node next to CTA
    const status = document.createElement("div");
    status.id = "formStatus";
    status.style.marginTop = ".5rem";
    status.style.fontSize = ".95rem";
    form.querySelector(".btn-cta")?.closest(".col-12")?.appendChild(status);

    form.addEventListener("submit", function(ev) {
      ev.preventDefault(); ev.stopPropagation();

      const firstNameEl = document.getElementById("firstName");
const lastNameEl  = document.getElementById("lastName");
const emailEl     = document.getElementById("email");
const phoneEl     = document.getElementById("phoneNumber");
const addrEl      = document.getElementById("address");
const cityEl      = document.getElementById("city");
const stateEl     = document.getElementById("state");
const descEl      = document.getElementById("description");
const zipEl       = document.getElementById("zipcode");
const projectEl   = document.getElementById("projectType");
const submitBtn   = form.querySelector(".btn-cta");


      // Clean & reflect
      const firstName = sanitizeText(firstNameEl.value);
      const lastName  = sanitizeText(lastNameEl.value);
      const email     = sanitizeText(emailEl.value).toLowerCase();
      const phoneMask = formatPhone(phoneEl.value);
      const address   = sanitizeText(addrEl.value);
      const zipcode   = onlyDigits(zipEl.value).slice(0,5);
      const project   = sanitizeText(projectEl.value);
      const city       = sanitizeText(cityEl.value);
const state      = sanitizeText(stateEl.value);
const desc       = sanitizeText(descEl.value);


 firstNameEl.value = firstName;
lastNameEl.value  = lastName;
emailEl.value     = email;
phoneEl.value     = phoneMask;
addrEl.value      = address;
zipEl.value       = zipcode;
projectEl.value   = project;

cityEl.value      = city;
stateEl.value     = state;
descEl.value      = desc;


      // Validate
      let valid = true;
      if (!firstName){ firstNameEl.setCustomValidity("Please enter your first name."); firstNameEl.reportValidity(); valid=false; } else firstNameEl.setCustomValidity("");
      if (!lastName) { lastNameEl.setCustomValidity("Please enter your last name.");  lastNameEl.reportValidity();  valid=false; } else lastNameEl.setCustomValidity("");
      if (!isValidEmail(email)) { emailEl.setCustomValidity("Enter a valid email."); emailEl.reportValidity(); valid=false; } else emailEl.setCustomValidity("");
      if (!isValidPhone(phoneMask)) { phoneEl.setCustomValidity("Please enter a 10-digit phone number."); phoneEl.reportValidity(); valid=false; } else phoneEl.setCustomValidity("");
      if (!isValidZip(zipcode)) { zipEl.setCustomValidity("Enter a valid 5-digit ZIP."); zipEl.reportValidity(); valid=false; } else zipEl.setCustomValidity("");
      if (!project) { projectEl.setCustomValidity("Please choose a project type."); projectEl.reportValidity(); valid=false; } else projectEl.setCustomValidity("");
      if (!valid) return;

      // Computed fields (so they serialize too)
      document.getElementById("fullName").value = [firstName, lastName].filter(Boolean).join(" ");

      if (!window.jQuery) {
        console.error("jQuery not loaded.");
        status.style.color = "#d43c3c";
        status.textContent = "Technical issue: jQuery not loaded.";
        return;
      }

      // Serialize original fields
      const formArr  = $("#myform").serializeArray();
      const extraArr = $("#hiddenfields :input[name]").serializeArray(); // if exists

      // Merge (prefer form keys)
      const seen   = new Set(formArr.map(i => i.name));
      const merged = formArr.concat(extraArr.filter(i => !seen.has(i.name)));

      // Build object from merged
   // Build object from merged
const dataObj = merged.reduce((o, i) => (o[i.name] = i.value, o), {});

// Make sure we keep the original field (masked for UI)…
const digitsOnly = onlyDigits(document.getElementById("phoneNumber").value);

// Add a numeric version for backend compatibility
dataObj.phone_1 = digitsOnly;     // PHP postFields picks phone_1 first
dataObj.phoneNumber = digitsOnly; // also keep this key since PHP looks for it too

// Map other names PHP expects
dataObj.zipcode     = zipcode;
dataObj.serviceType = project;

// Remove only truly unwanted extras
delete dataObj.phone_display;
delete dataObj.otp_verified;
delete dataObj.phone_e164;
delete dataObj.phone; // legacy key you’re not using
// IMPORTANT: do NOT delete dataObj.phoneNumber anymore


      // Build querystring preview (masked) for logs
      const mask = (k, v) => {
        if (/(email)/i.test(k)) return v.replace(/(^.).*(@.*$)/, "$1***$2");
        if (/(phone|zip|ip|gclid|fb[cp]|leadid|token)/i.test(k)) return "***";
        return v;
      };
      const preview = Object.keys(dataObj).reduce((o,k)=> (o[k]=mask(k,dataObj[k]), o), {});
      const requestURL = "https://call.toppermarketing.com/store_entry.php?Key=67cf8963-b9d1-45bb-a580-b7b52937ee87&category=shower";

      // UI state
   // UI state
status.style.color = "#4b4b4b";
status.textContent = "Submitting...";
if (submitBtn) submitBtn.disabled = true;

// Show thank-you immediately
function showThanks() {
  form.style.display = "none";
  document.getElementById("thankYouMessage").style.display = "block";
  status.textContent = "";
  try {
    window.__projectTypeChoices?.clearStore();
    window.__projectTypeChoices?.setChoiceByValue("");
  } catch(e){}
}
showThanks(); // ⬅ Add this here




      // jQuery AJAX (GET) — no cache-buster (_ param) because cache=true
$.ajax({
  url: requestURL,                 // keep same endpoint
  method: "POST",                  // ⟵ switched to POST
  data: dataObj,                   // form-urlencoded body (default)
  dataType: "text",
  timeout: 20000,
  // cache is ignored for POST; remove to be clear
  success: function (data, textStatus, jqXHR) {
    console.groupCollapsed("[Form] OK");
    console.info("HTTP:", jqXHR.status, textStatus);
    console.debug("Response headers:", jqXHR.getAllResponseHeaders());
    console.debug("Response body:", data);
    console.groupEnd();

    function showThanks() {
      form.style.display = "none";
      document.getElementById("thankYouMessage").style.display = "block";
      status.textContent = "";
      try {
        window.__projectTypeChoices?.clearStore();
        window.__projectTypeChoices?.setChoiceByValue("");
      } catch(e){}
    }
    showThanks();
  },

  error: function (jqXHR, textStatus, errorThrown) {
    console.groupCollapsed("[Form] FAILED (forced success)");
    console.error("textStatus:", textStatus);
    console.error("errorThrown:", errorThrown);
    console.error("HTTP:", jqXHR.status, jqXHR.statusText);
    console.info("Response headers:", jqXHR.getAllResponseHeaders());
    console.error("Response body:", jqXHR.responseText || "(empty)");
    console.groupEnd();

    function showThanks() {
      form.style.display = "none";
      document.getElementById("thankYouMessage").style.display = "block";
      status.textContent = "";
      try {
        window.__projectTypeChoices?.clearStore();
        window.__projectTypeChoices?.setChoiceByValue("");
      } catch(e){}
    }
    showThanks();
  },

  complete: function () {
    if (submitBtn) submitBtn.disabled = false;
  }
});
    });

    // Optional global listeners
    window.addEventListener("error", (e) => {
      console.groupCollapsed("[Global] Window error");
      console.error(e.message, "at", (e.filename||"") + ":" + (e.lineno||0) + ":" + (e.colno||0));
      console.debug("Error object:", e.error);
      console.groupEnd();
    });
    window.addEventListener("unhandledrejection", (e) => {
      console.groupCollapsed("[Global] Unhandled Promise Rejection");
      console.error("Reason:", e.reason);
      console.groupEnd();
    });
  });
})();
</script>

      </div>
    </div>
  </div>
</div>

<!--Inner Section_1-->
<div class="inner__section-1">
  <div class="container">
    <p class="common_heading inner_common_head">We Help You Save On All<br> Your Shower Work</p>
    <p class="common_text">Count on our budget-friendly shower solutions for personalized bathroom upgrades. Whether a simple shower or comprehensive enclosure, our cost-effective services prioritize quality within your budget.<br class="showDesk">Trust us for reliable and affordable Shower services, ensuring an elegant, functional addition without compromising quality, and adding significant value within your budget.</p>
    <img src="images/walk-in-shower.png" alt="inr-s1 img1" class="inr-s1-img1" width="497" height="522">
    <div class="inner__section-1__right">
      <p class="common_text"><strong>Elevate Your Bathroom Aesthetics: Tailored Shower Installations!</strong></p>
      <p class="common_text">Choose our custom Shower solutions that effortlessly combine functionality with elegance. Elevate your bathroom with our reliable services, ensuring enhanced aesthetics, efficient use of space, and a stylish addition to your home or business.</p>
      <p class="common_text">Trust us to elevate your property with our Shower services, delivering meticulous attention to detail and enhanced reliability for your bathroom aesthetics.</p>

      <ul class="inner_sec1__point">
        <li>Tub to walk in Shower</li>
        <li>Shower to walk in Shower</li>
        <li>Customized Shower Solutions</li>
        <li>Cost-Effective Services for Efficient Showers</li>
        <li>Expert Craftsmanship for Your Shower</li>
        <li>Elevate Bathrooms with Premium Installations</li>
      </ul>

      <div class="clearall"></div>
      <div class="btn_box">
        <p class="btn_top_text">Just Takes 2 Minutes</p>
        <a href="javascript:bookmarkscroll.scrollTo('top_form')" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
        <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
      </div>
    </div>
  </div>
</div>

<!--inner__section-2-->
<div class="roofing_section_2">
  <div class="container">
    <p class="common_heading inner_common_head">Benefits of Shower<br>Installation, Repair & Maintenance</p>
    <p class="common_text">Elevate your bathroom with our Shower services, covering routine installations to transformative upgrades. Our expert solutions enhance functionality and aesthetics, resulting in improved and visually appealing shower enclosures. <br class="showDesk">Trust us to transform your bathing experience with meticulous designs that elevate storage capacity and durability.</p>
    
    <div class="roofing_sec2_row">
      <div class="roofing_sec2_row_box">
        <img src="images/elevate.png" alt="icon">
        <span>Elevate Your Shower Experience</span>
        <p class="common_text">Opt for our Shower installation service to enhance the functionality and aesthetics of your bathroom, providing a reliable and stylish solution for your shower enclosure needs.</p>
      </div>
      
      <div class="roofing_sec2_row_box">
        <img src="images/lasting.png" alt="icon">
        <span>Lasting Quality with Expert Installation</span>
        <p class="common_text">Our Shower techniques are meticulously designed for enduring excellence, ensuring a secure, visually appealing, and lasting addition to your bathroom.</p>
      </div>
      
      <div class="roofing_sec2_row_box">
        <img src="images/upgrade.png" alt="icon">
        <span>Upgrade Bathrooms with Modern Shower.</span>
        <p class="common_text">Strategic Shower installations not only improve the functionality of your bathroom but also contribute to a modern and sophisticated appeal, enhancing the overall value of your living space.</p>
      </div>
    </div>
    
    <div class="clearall"></div>
    <div class="btn_box">
      <p class="btn_top_text">Just Takes 2 Minutes</p>
      <a href="javascript:bookmarkscroll.scrollTo('top_form')" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
      <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
    </div>
  </div>
</div>

<?php include'how-it-works.php' ?>
<?php include'testimonials.php' ?>

<!--section_6-->
<div class="section_6">
  <div class="container">
    <p class="common_heading inner_common_head">Frequently <br class="showMob">Asked Questions</p>
    
    <div class="faq-container" style="overflow:hidden;">
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-open" id="hd-one">What types of Showers do you offer?</div>
        <div class="acdn-content">
          <p class="acdn-para">We offer a variety of Showers, including sliding, hinged, and frameless options. Our range caters to different preferences and bathroom styles.</p>
        </div>
      </div>
      
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-close">Can Showers be customized to fit specific bathroom sizes?</div>
        <div class="acdn-content" style="display:none;">
          <p class="acdn-para">Yes, our Showers can be customized to fit specific dimensions. Our team assesses your bathroom space and provides tailored solutions for a perfect fit.</p>
        </div>
      </div>
      
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-close">Do you provide different Shower thickness options for the doors?</div>
        <div class="acdn-content" style="display:none;">
          <p class="acdn-para">Absolutely. We offer various Shower thickness options, allowing you to choose based on your preferences for durability, aesthetics, and budget.</p>
        </div>
      </div>
      
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-close">How long does it take to install a Shower?</div>
        <div class="acdn-content" style="display:none;">
          <p class="acdn-para">The installation timeline varies depending on the type of door and the complexity of the project. Generally, our team strives to complete installations efficiently while ensuring quality workmanship.</p>
        </div>
      </div>
      
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-close">Are your Showers easy to clean and maintain?</div>
        <div class="acdn-content" style="display:none;">
          <p class="acdn-para">Yes, our Showers are designed for easy maintenance. We can recommend specific cleaning solutions and treatments to keep the Shower looking pristine.</p>
        </div>
      </div>
      
      <div class="up-slide-dwn">
        <div class="accordion acdn-heading accordion-close">Can Showers be installed in small bathrooms?</div>
        <div class="acdn-content" style="display:none;">
          <p class="acdn-para">Yes, we offer space-efficient solutions for small bathrooms. Our team can recommend the appropriate type and design of Shower to maximize functionality in limited spaces.</p>
        </div>
      </div>
    </div>
    
    <div class="clearall"></div>
    <div class="btn_box">
      <p class="btn_top_text">Just Takes 2 Minutes</p>
      <a href="javascript:bookmarkscroll.scrollTo('top_form')" class="common_btn">Get A Quote<img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
      <p class="btn_text inner_btn_text"><img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.</p>
    </div>
  </div>
</div>

<!--promise-->
<?php include'promise.php' ?>
<?php include'footer.php' ?>

<!-- Existing JS -->
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
      { breakpoint: 767, settings: { slidesToShow: 1, slidesToScroll: 1, arrows: true, dots: false, centerMode: true, variableWidth: true } }
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
      answerDiv.stop().slideUp(500, function() { questionDiv.removeClass('accordion-open'); });
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

</body>
</html>
