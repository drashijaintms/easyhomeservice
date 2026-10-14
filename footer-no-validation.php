<!-- Include jQuery (if not already added) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
  input#phone { width: 60%; }
  input#otp-code { width: 60%; }

  #send-otp, #verify-otp { display:inline-block; margin-left:12px; }
  #send-otp.disabled, #verify-otp.disabled { pointer-events:none; opacity:.6; }
  #otp-inline { margin-top:10px; }

  .error-msg { color: red; white-space: pre-line; }
  .success-msg { color: green; white-space: pre-line; }

  .submit[disabled],
  .submit.disabled {
    pointer-events: none;
    opacity: .6;
    cursor: not-allowed;
  }

#resend-otp {
    margin-left: 8px;
    color: #000073;
}

.frmElemts {

    display: ruby!important;
}
</style>



<!------------------------->

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
            "plumbing": "+13216033297",
            "gutter": "+18333788997"
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
        
        
          <p style="
    font-size: 11px;
"> Easyhomeservice.com is a free service to assist homeowners in connecting with local service providers. All service provider/providers are independent and easy home service does not warrant or guarantee any work performed. It is the responsibility of the homeowner to verify that the hired contractor furnishes the necessary license and insurance required for the work being performed. All persons depicted in a photo or video are actors or models and not service provider listed on easyhomeservice.com.
 </p>

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

            hiddenFieldsDiv.append('<input id="leadid_token" name="universal_leadid" type="hidden">');
            

            
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