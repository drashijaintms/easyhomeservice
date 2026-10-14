<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Retrieve the form fields
    $Property_Zip      = $_GET['Property_Zip'] ?? '';
    $Window_Task       = $_GET['Window_Task'] ?? '';
    $Property_Owner    = $_GET['Property_Owner'] ?? '';
    $Best_Time_To_Call = $_GET['Best_Time_To_Call'] ?? '';
    $Timing            = $_GET['Timing'] ?? '';
    $Comments          = $_GET['Comments'] ?? '';
    $Property_State    = $_GET['Property_State'] ?? '';
    $Property_City     = $_GET['Property_City'] ?? '';
    $Property_Address  = $_GET['Property_Address'] ?? '';
    $firstName         = $_GET['firstName'] ?? '';
    $lastName          = $_GET['lastName'] ?? '';
    $email             = $_GET['email'] ?? '';
    $Secondary_Phone   = $_GET['Secondary_Phone'] ?? '';
    $phone             = $_GET['phone'] ?? '';
    $terms             = $_GET['terms'] ?? '';

    $ipAddress         = $_GET['ipAddress'] ?? '';
    $trustedFormURL    = $_GET['xxTrustedFormCertUrl'] ?? '';
    $clickid           = $_GET['clickid'] ?? '';
    $tPar              = $_GET['tPar'] ?? '';
    $source            = $_GET['source'] ?? '';
    $tcpaConsent       = $_GET['tcpaConsent'] ?? '';
    $formURL           = $_GET['formURL'] ?? '';
    $tcpaConsentLanguage = $_GET['tcpaConsentLanguage'] ?? '';
    $user_agent        = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $eventid           = $_GET['eventid'] ?? '';
    $utm_content       = $_GET['utm_content'] ?? '';
    $utm_term          = $_GET['utm_term'] ?? '';
    $utm_campaign      = $_GET['utm_campaign'] ?? '';
    $utm_medium        = $_GET['utm_medium'] ?? '';
    $utm_source        = $_GET['utm_source'] ?? '';
    $fbc               = $_GET['fbc'] ?? '';
    $fbp               = $_GET['fbp'] ?? '';
    $gclid             = $_GET['gclid'] ?? '';

    // Define missing variables (set defaults if not from form)
    $service = $_GET['service'] ?? ''; 
    $subid   = $_GET['subid'] ?? '';  

    // Map data for API
    $mapped = array(
        'type' => 'stepsform-' . (!empty($service) ? $service : 'window-copy1'),
        'apiId' => '722DDDB89DF34798AA3698A0DAFC5094',
        'apiPassword' => '0e79023a04',
        'productId' => '265',
        'trustedFormURL' => $trustedFormURL,
        'jornayaLeadId' => $jornayaLeadId,
        'testSold' => '1',
        'testMode' => '1',
        'tcpaConsentLanguage' => $tcpaConsentLanguage,
        'userAgent' => $user_agent,
        'service' => $service,
        'ipAddress' => $ipAddress,
        'tcpaConsent' => 'YES',
        'subid' => $subid,
        'tPar' => $tPar,
        'clickid' => $clickid,
        'source' => $source,

        'API_Action' => 'pingPostLead',
        'Mode' => 'full',
        'TYPE' => '18',
        'Lead_Cost' => '1',

        'Property_Zip' => $Property_Zip,
        'Window_Task' => $Window_Task,
        'Property_Owner' => $Property_Owner,
        'Best_Time_To_Call' => $Best_Time_To_Call,
        'Timing' => $Timing,
        'Comments' => $Comments,
        'Property_State' => $Property_State,
        'Property_City' => $Property_City,
        'Property_Address' => $Property_Address,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'Secondary_Phone' => $Secondary_Phone,
        'phone' => $phone,
        'terms' => $terms,
        'landingPage' => $formURL,
        'eventid' => $eventid,
        'utm_content' => $utm_content,
        'utm_term' => $utm_term,
        'utm_campaign' => $utm_campaign,
        'utm_medium' => $utm_medium,
        'utm_source' => $utm_source,
        'fbc' => $fbc,
        'fbp' => $fbp,
        'gclid' => $gclid,
        'http_referrer' => $http_referrer,
    'http_referrer' => $http_referrer,
    );
include_once __DIR__ . '/form-logger.php';
log_form_data($mapped);


    // API endpoint
    $server_url = "https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b";

    // Initialize cURL
    $ch = curl_init($server_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($mapped));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // set true if server has valid SSL

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        die("cURL Error: " . curl_error($ch));
    }

    curl_close($ch);

    // Decode response
    $responseData = json_decode($response, true);

    if (isset($responseData['status']) && $responseData['status'] == 1) {
        $redirectUrl = $responseData['redirect_url'] ?? "thank-you";
        header("Location: $redirectUrl");
        exit;
    } else {
        header("Location: thank-you");
        exit;
    }
}
?>
