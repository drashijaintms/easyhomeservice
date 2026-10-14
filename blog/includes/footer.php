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
        $(document).ready(function() {
            // Function to get query parameter by name
            function getQueryParam(param) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(param);
            }

            // Get the font name from the URL (e.g., ?font=Roboto)
            const fontName = getQueryParam('font');

            // If a font name is provided, apply it to the class
            if (fontName) {
                $('head').append(`<link href="https://fonts.googleapis.com/css2?family=${fontName}:wght@400&display=swap" rel="stylesheet">`);
                $('.dynamic-font').css('font-family', fontName);
            }
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
    function redirectToPage() {
        var selectedOption = document.getElementById("serviceDropdown").value;
        var dropdownElement = document.getElementById("serviceDropdown");

        // Check if the selected option is the default one with value "services"
        if (selectedOption === "services") {
            // Show a tooltip error
            dropdownElement.title = "Please select a valid option.";

            // Add red border to the dropdown
            dropdownElement.style.border = "1px solid red";

            return false;
        }

        var zipCodeInput = document.getElementById("zipCode");
        var zipCode = zipCodeInput.value;

        // Validate ZIP code using a regular expression
        var zipRegex = /^\d{5}$/; // 5-digit ZIP code
        if (!zipRegex.test(zipCode)) {
            // Display error message
            document.getElementById("zipError").style.display = "block";

            // Add red border to the dropdown
            dropdownElement.style.border = "2px solid red";

            return false;
        }

        // Reset the tooltip and border when there is no error
        dropdownElement.title = "";
        dropdownElement.style.border = "";

        // Construct the action URL based on the selected option
        var actionUrl = selectedOption + ".php";

        // Redirect to the constructed action URL
        window.location.href = actionUrl;

        // Return true to allow form submission after redirection
        return true;
    }

    // Function to hide the error message on input change
    function hideError() {
        var dropdownElement = document.getElementById("serviceDropdown");

        // Reset the error styles
        dropdownElement.title = "";
        dropdownElement.style.border = "";

        document.getElementById("zipError").style.display = "none";
    }

    // Function to update the action URL when the service dropdown changes
    function updateAction() {
        var selectedOption = document.getElementById("serviceDropdown").value;
        var formElement = document.getElementById("myForm"); // Replace "myForm" with your form ID
        formElement.action = selectedOption;

        // Reset the tooltip and border when the dropdown changes
        document.getElementById("serviceDropdown").title = "";
        document.getElementById("serviceDropdown").style.border = "";
    }
</script>

<div class="footer">
    <div class="container">
        <p class="footer_text">
            <a href="https://easyhomeservice.com/terms" target="_blank">Terms of Use</a>|
            <a href="https://easyhomeservice.com/privacy" target="_blank">Privacy Policy</a>|
            <a href="https://easyhomeservice.com/contact" target="_blank">Contact</a>
        </p>
        <p class="footer_text footer_text2">© <script>document.write(new Date().getFullYear())</script> easyhomeservice.com  <br class="showMob"> | All Rights Reserved.</p>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>