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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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





<!------------------------->

















    




    









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
    
    var externalRef = sessionStorage.getItem('external_referrer') || '';
hiddenFieldsDiv.append(
    '<input type="hidden" name="http_referrer" value="' + externalRef + '">'
);

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
    


<!--<script type="text/javascript" src="/js/jquery-3.6.0.min.js" defer></script>-->
<script type="text/javascript" src="/js/bookmarkscroll.js" defer></script>
<script type="text/javascript" src="/js/slick.js" defer></script>