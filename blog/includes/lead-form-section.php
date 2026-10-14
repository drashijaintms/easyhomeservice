<!-- ===== REUSABLE SECTION 4: LEAD FORM CARD ===== -->

<div class="section4-card">

    <div class="section4-header">
        <span class="section4-header-icon">
            <i class="far fa-edit"></i>
        </span>

        <h2 class="section4-title">
            Need Help With Your Next Home Project?
        </h2>
    </div>


    <!-- Success / Error Message -->
    <div
        id="sec4-form-alert"
        style="
            display:none;
            padding:14px 20px;
            border-radius:8px;
            margin-bottom:20px;
            text-align:center;
            font-weight:600;
        ">
    </div>


    <form
        method="POST"
        id="section4-lead-form"
        novalidate
    >

        <!-- Hidden fields -->
        <input
            type="hidden"
            id="sec4-firstname"
            name="firstName"
        >

        <input
            type="hidden"
            id="sec4-lastname"
            name="lastName"
        >

        <input
            type="hidden"
            name="form_name"
            value="blogform"
        >

        <input
            type="hidden"
            name="source"
            value="blogform"
        >

        <input
            type="hidden"
            name="formType"
            value="blogform"
        >


        <!-- Honeypot field -->
        <!-- Normal users should never fill this -->
        <div
            style="
                position:absolute;
                left:-9999px;
                top:-9999px;
                width:1px;
                height:1px;
                overflow:hidden;
            "
            aria-hidden="true"
        >
            <label for="sec4-website">
                Website
            </label>

            <input
                type="text"
                id="sec4-website"
                name="website"
                value=""
                tabindex="-1"
                autocomplete="off"
            >
        </div>


        <div class="section4-form-grid">


            <!-- Full Name -->
            <div class="section4-field-group">

                <label for="sec4-name">
                    Full Name
                </label>

                <input
                    type="text"
                    id="sec4-name"
                    name="fullName"
                    placeholder="Enter your name"
                    maxlength="100"
                    autocomplete="name"
                    required
                >

                <span
                    class="sec4-error-text"
                    id="err-sec4-name">
                </span>

            </div>


            <!-- Phone -->
            <div class="section4-field-group">

                <label for="sec4-phone">
                    Phone Number
                </label>

                <input
                    type="tel"
                    id="sec4-phone"
                    name="phoneNumber"
                    placeholder="Enter 10-digit number"
                    maxlength="10"
                    autocomplete="tel"
                    inputmode="numeric"
                    required
                >

                <span
                    class="sec4-error-text"
                    id="err-sec4-phone">
                </span>

            </div>


            <!-- Email -->
            <div class="section4-field-group">

                <label for="sec4-email">
                    Email Address
                </label>

                <input
                    type="email"
                    id="sec4-email"
                    name="email"
                    placeholder="Enter your email"
                    maxlength="254"
                    autocomplete="email"
                    required
                >

                <span
                    class="sec4-error-text"
                    id="err-sec4-email">
                </span>

            </div>


            <!-- Address -->
            <div class="section4-field-group">

                <label for="sec4-address">
                    Address
                </label>

                <input
                    type="text"
                    id="sec4-address"
                    name="address"
                    placeholder="Enter your address"
                    maxlength="250"
                    autocomplete="street-address"
                >

                <span
                    class="sec4-error-text"
                    id="err-sec4-address">
                </span>

            </div>


            <!-- ZIP -->
            <div class="section4-field-group">

                <label for="sec4-zip">
                    Zip Code
                </label>

                <input
                    type="text"
                    id="sec4-zip"
                    name="zipcode"
                    placeholder="12345"
                    maxlength="5"
                    inputmode="numeric"
                    autocomplete="postal-code"
                    required
                >

                <span
                    class="sec4-error-text"
                    id="err-sec4-zip">
                </span>

            </div>


            <!-- Service -->
            <div class="section4-field-group">

                <label for="sec4-service">
                    Services
                </label>

                <div class="section4-select-wrap">

                    <select
                        id="sec4-service"
                        name="service"
                        required
                    >

                        <option
                            value=""
                            disabled
                            selected
                        >
                            Select any one
                        </option>

                        <option value="roofing">
                            Roofing
                        </option>

                        <option value="windows">
                            Windows
                        </option>

                        <option value="hvac">
                            HVAC
                        </option>

                        <option value="plumbing">
                            Plumbing
                        </option>

                        <option value="bathroom">
                            Bathroom
                        </option>

                        <option value="solar">
                            Solar
                        </option>

                        <option value="gutter">
                            Gutter
                        </option>

                        <option value="homewarranty">
                            Home Warranty
                        </option>

                        <option value="homesecurity">
                            Home Security
                        </option>

                        <option value="pestcontrol">
                            Pest Control
                        </option>

                        <option value="waterdamage">
                            Water Damage
                        </option>

                    </select>

                    <i class="fas fa-chevron-down"></i>

                </div>

                <span
                    class="sec4-error-text"
                    id="err-sec4-service">
                </span>

            </div>

        </div>


        <!-- Consent -->
        <div class="section4-disclaimer-row">

            <input
                type="checkbox"
                id="sec4-consent"
                name="consent"
                value="1"
                required
                checked
            >

            <p class="section4-disclaimer-text">

                By clicking "Agree and Submit", I agree to the
                <a
                    href="https://easyhomeservice.com/privacypolicy"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Privacy Policy
                </a>,
                <a
                    href="https://easyhomeservice.com/tcpa"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    TCPA
                </a>
                and
                <a
                    href="https://easyhomeservice.com/terms"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Terms and Conditions
                </a>.

                I also consent to receive marketing communications
                through email and other texts or calls from
                easyhomeservice.com and/or its
                <a
                    href="https://easyhomeservice.com/marketingpartners"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    marketing partners
                </a>
                about Home Service by any means or technology,
                including an automatic dialing system, to the phone
                number I have previously provided, even if that number
                is on a national or state Do-Not-Call registry.
                Carrier and data rates may apply.

                I understand that my consent to such calls and text
                messages is not required to purchase products from or
                use the services of
                <a
                    href="https://easyhomeservice.com/marketingpartners"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    marketing partners
                </a>.

            </p>

        </div>


        <span
            class="sec4-error-text"
            id="err-sec4-consent"
            style="margin-top:8px;"
        >
        </span>


        <!-- Submit -->
        <div class="section4-btn-wrap">

            <button
                type="submit"
                class="section4-submit-btn"
                id="sec4-submit-btn"
            >
                Get Quote Now
            </button>

        </div>

    </form>

</div>


<style>

/* Error message */

.sec4-error-text {
    color: #e74c3c;
    font-size: 0.78rem;
    margin-top: 5px;
    display: none;
    font-weight: 500;
}


/* Invalid fields */

.section4-field-group input.sec4-invalid,
.section4-field-group select.sec4-invalid {
    border-color: #e74c3c !important;
}


/* Disabled button */

.section4-submit-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

</style>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const form =
        document.getElementById('section4-lead-form');

    if (!form) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | Elements
    |--------------------------------------------------------------------------
    */

    const nameInput =
        document.getElementById('sec4-name');

    const phoneInput =
        document.getElementById('sec4-phone');

    const emailInput =
        document.getElementById('sec4-email');

    const addressInput =
        document.getElementById('sec4-address');

    const zipInput =
        document.getElementById('sec4-zip');

    const serviceSelect =
        document.getElementById('sec4-service');

    const consentCheck =
        document.getElementById('sec4-consent');

    const honeypotInput =
        document.getElementById('sec4-website');

    const alertBox =
        document.getElementById('sec4-form-alert');

    const submitBtn =
        document.getElementById('sec4-submit-btn');

    const firstNameInput =
        document.getElementById('sec4-firstname');

    const lastNameInput =
        document.getElementById('sec4-lastname');


    /*
    |--------------------------------------------------------------------------
    | Update First / Last Name
    |--------------------------------------------------------------------------
    */

    function updateNameFields() {

        const fullName =
            nameInput
                ? nameInput.value.trim()
                : '';

        const nameParts =
            fullName.split(/\s+/);

        const firstName =
            nameParts[0] || '';

        const lastName =
            nameParts.length > 1
                ? nameParts.slice(1).join(' ')
                : '';


        if (firstNameInput) {

            firstNameInput.value =
                firstName;
        }


        if (lastNameInput) {

            lastNameInput.value =
                lastName;
        }


        return {
            fullName: fullName,
            firstName: firstName,
            lastName: lastName
        };
    }


    /*
    |--------------------------------------------------------------------------
    | Name Input
    |--------------------------------------------------------------------------
    */

    if (nameInput) {

        nameInput.addEventListener(
            'input',
            updateNameFields
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Error Functions
    |--------------------------------------------------------------------------
    */

    function showError(
        input,
        errorId,
        message
    ) {

        if (input) {

            input.classList.add(
                'sec4-invalid'
            );
        }


        const errorElement =
            document.getElementById(errorId);


        if (errorElement) {

            errorElement.innerText =
                message;

            errorElement.style.display =
                'block';
        }
    }


    function clearError(
        input,
        errorId
    ) {

        if (input) {

            input.classList.remove(
                'sec4-invalid'
            );
        }


        const errorElement =
            document.getElementById(errorId);


        if (errorElement) {

            errorElement.innerText =
                '';

            errorElement.style.display =
                'none';
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Clear All Errors
    |--------------------------------------------------------------------------
    */

    function clearAllErrors() {

        clearError(
            nameInput,
            'err-sec4-name'
        );

        clearError(
            phoneInput,
            'err-sec4-phone'
        );

        clearError(
            emailInput,
            'err-sec4-email'
        );

        clearError(
            addressInput,
            'err-sec4-address'
        );

        clearError(
            zipInput,
            'err-sec4-zip'
        );

        clearError(
            serviceSelect,
            'err-sec4-service'
        );

        clearError(
            consentCheck,
            'err-sec4-consent'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Show Alert
    |--------------------------------------------------------------------------
    */

    function showAlert(
        message,
        type
    ) {

        if (!alertBox) {
            return;
        }


        alertBox.style.display =
            'block';


        if (type === 'success') {

            alertBox.style.background =
                '#e8f7ee';

            alertBox.style.color =
                '#1b7e3b';

            alertBox.style.border =
                '1px solid #45B96A';

        } else {

            alertBox.style.background =
                '#fdecec';

            alertBox.style.color =
                '#c0392b';

            alertBox.style.border =
                '1px solid #e74c3c';
        }


        alertBox.innerText =
            message;


        alertBox.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }


    /*
    |--------------------------------------------------------------------------
    | Hide Alert
    |--------------------------------------------------------------------------
    */

    function hideAlert() {

        if (!alertBox) {
            return;
        }

        alertBox.style.display =
            'none';

        alertBox.innerText =
            '';
    }


    /*
    |--------------------------------------------------------------------------
    | Submit Form
    |--------------------------------------------------------------------------
    */

    form.addEventListener(
        'submit',
        function (e) {

            e.preventDefault();


            clearAllErrors();

            hideAlert();


            /*
            |--------------------------------------------------------------------------
            | Basic Frontend Validation
            |--------------------------------------------------------------------------
            */

            let hasEmptyField =
                false;


            /*
            | Full Name
            */

            if (
                !nameInput ||
                !nameInput.value.trim()
            ) {

                showError(
                    nameInput,
                    'err-sec4-name',
                    'Please enter your full name'
                );

                hasEmptyField =
                    true;
            }


            /*
            | Phone
            */

            if (
                !phoneInput ||
                !phoneInput.value.trim()
            ) {

                showError(
                    phoneInput,
                    'err-sec4-phone',
                    'Please enter your phone number'
                );

                hasEmptyField =
                    true;
            }


            /*
            | Email
            */

            if (
                !emailInput ||
                !emailInput.value.trim()
            ) {

                showError(
                    emailInput,
                    'err-sec4-email',
                    'Please enter your email address'
                );

                hasEmptyField =
                    true;
            }


            /*
            | ZIP
            */

            if (
                !zipInput ||
                !zipInput.value.trim()
            ) {

                showError(
                    zipInput,
                    'err-sec4-zip',
                    'Please enter your ZIP code'
                );

                hasEmptyField =
                    true;
            }


            /*
            | Service
            */

            if (
                !serviceSelect ||
                !serviceSelect.value
            ) {

                showError(
                    serviceSelect,
                    'err-sec4-service',
                    'Please select a service'
                );

                hasEmptyField =
                    true;
            }


            /*
            | Consent
            */

            if (
                !consentCheck ||
                !consentCheck.checked
            ) {

                showError(
                    null,
                    'err-sec4-consent',
                    'You must agree to the terms to proceed'
                );

                hasEmptyField =
                    true;
            }


            /*
            |--------------------------------------------------------------------------
            | Stop If Empty
            |--------------------------------------------------------------------------
            */

            if (hasEmptyField) {
                return;
            }


            /*
            |--------------------------------------------------------------------------
            | Honeypot
            |--------------------------------------------------------------------------
            */

            if (
                honeypotInput &&
                honeypotInput.value.trim() !== ''
            ) {

                return;
            }


            /*
            |--------------------------------------------------------------------------
            | Update First / Last Name
            |--------------------------------------------------------------------------
            */

            updateNameFields();


            /*
            |--------------------------------------------------------------------------
            | Disable Submit Button
            |--------------------------------------------------------------------------
            */

            if (submitBtn) {

                submitBtn.disabled =
                    true;

                submitBtn.innerText =
                    'Submitting...';
            }


            /*
            |--------------------------------------------------------------------------
            | FormData
            |--------------------------------------------------------------------------
            */

            const payload =
                new FormData(form);


            /*
            |--------------------------------------------------------------------------
            | Send To OUR PHP
            |--------------------------------------------------------------------------
            |
            | Feedxo URL and API key are NOT exposed here.
            |
            */

            fetch(
                '/blog/includes/send-lead.php',
                {
                    method: 'POST',
                    body: payload
                }
            )

            /*
            |--------------------------------------------------------------------------
            | Read JSON Even When HTTP Status Is 400 / 502
            |--------------------------------------------------------------------------
            */

            .then(function (response) {

                return response.text()
                    .then(function (text) {

                        let data;

                        try {

                            data =
                                JSON.parse(text);

                        } catch (error) {

                            console.error(
                                'Invalid server response:',
                                text
                            );

                            data = {
                                success: false,
                                message:
                                    'Server returned an invalid response.'
                            };
                        }


                        return {
                            ok: response.ok,
                            status: response.status,
                            data: data
                        };

                    });

            })


            /*
            |--------------------------------------------------------------------------
            | Handle Response
            |--------------------------------------------------------------------------
            */

            .then(function (result) {

                const data =
                    result.data;


                console.log(
                    'Lead response:',
                    result
                );


                /*
                |--------------------------------------------------------------------------
                | SUCCESS
                |--------------------------------------------------------------------------
                */

                if (
                    result.ok &&
                    data.success
                ) {

                    showAlert(
                        data.message ||
                        'Thank you! Your quote request has been submitted successfully.',
                        'success'
                    );


                    /*
                    | Reset form
                    */

                    form.reset();


                    /*
                    | Reset hidden name fields
                    */

                    if (firstNameInput) {

                        firstNameInput.value =
                            '';
                    }


                    if (lastNameInput) {

                        lastNameInput.value =
                            '';
                    }


                    /*
                    | Keep consent checked
                    */

                    if (consentCheck) {

                        consentCheck.checked =
                            true;
                    }

                }


                /*
                |--------------------------------------------------------------------------
                | ERROR FROM PHP
                |--------------------------------------------------------------------------
                */

                else {

                    console.error(
                        'PHP response:',
                        data
                    );


                    showAlert(
                        data.message ||
                        'Unable to submit your request. Please try again.',
                        'error'
                    );
                }


                /*
                | Enable button
                */

                if (submitBtn) {

                    submitBtn.disabled =
                        false;

                    submitBtn.innerText =
                        'Get Quote Now';
                }

            })


            /*
            |--------------------------------------------------------------------------
            | Network Error
            |--------------------------------------------------------------------------
            */

            .catch(function (error) {

                console.error(
                    'Form submission error:',
                    error
                );


                showAlert(
                    'Unable to connect to the server. Please try again.',
                    'error'
                );


                if (submitBtn) {

                    submitBtn.disabled =
                        false;

                    submitBtn.innerText =
                        'Get Quote Now';
                }

            });

        }
    );

});

</script>