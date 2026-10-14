<!-- Include jQuery (if not already added) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
// Function to get a cookie by name
function getCookie(name) {
    const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    return match ? decodeURIComponent(match[2]) : '';
}

// Add hidden fields based on cookie values
document.addEventListener('DOMContentLoaded', function() {
    const inputFieldZip = document.getElementById("input_field_zip");
    const paramNames = [
        "clickid", "source", "eventid", "utm_content", "utm_term",
        "utm_campaign", "utm_medium", "utm_source", "fbc", "fbp", "gclid"
    ];

    paramNames.forEach(function(name) {
        const value = getCookie(name);
        if (value) {
            appendHiddenInputAfter(inputFieldZip, name, value);
        }
    });
});

function appendHiddenInputAfter(element, name, value) {
    const hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("name", name);
    hiddenInput.setAttribute("value", value);
    element.parentNode.insertBefore(hiddenInput, element.nextSibling);
}
</script>

<script>
// Save URL parameters to cookies
(function() {
    const query = window.location.search.substring(1);
    if (!query) return;

    const pairs = query.split('&');
    for (let i = 0; i < pairs.length; i++) {
        const [key, value] = pairs[i].split('=');
        if (key && value) {
            const expires = new Date(Date.now() + 7 * 24 * 60 * 60 * 1000).toUTCString();
            document.cookie = `${decodeURIComponent(key)}=${decodeURIComponent(value)}; expires=${expires}; path=/`;
        }
    }
})();
</script>


<div class="footer ">
    <div class="container">
        <p class="footer_text text-center">
        <a href="terms">Terms of Use</a>|
        <a href="privacy-policy">Privacy Policy</a>|
        <a href="do-not-call-policy">DNC Policy</a>|
        <a href="ccpa">CCPA</a>|
        <a href="service-location">Service Locations</a>|
        <a href="contact">Contact</a>
        </p>
        
        <!--<p class="footer_text">-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('terms','modal');">Terms of Use</a>|-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('privacy','modal');">Privacy Policy</a>|-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('contact','modal');">Contact</a>-->
        <!--</p>-->
        
        
        
        <p class="footer_text footer_text2 text-center">&copy; <script>document.write(new Date().getFullYear())</script> Easy Home Service. <br class="showMob"/>All Rights Reserved.</p>
       
    </div>
</div>



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
    
            hiddenFieldsDiv.append('<input type="hidden" name="source" id="source" value="<?php echo $_GET['source']; ?>">');
    
            hiddenFieldsDiv.append('<input type="hidden" name="xxTrustedFormCertUrl">');
            hiddenFieldsDiv.append('<input type="hidden" name="xxCertUrl">');
    
            hiddenFieldsDiv.append('<input type="hidden" id="clickid" name="clickid" value="<?php echo $_GET['clickid']; ?>">');
    
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