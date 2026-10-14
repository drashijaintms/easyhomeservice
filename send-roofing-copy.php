<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Retrieve the form fields using the GET method
    $Property_Zip = $_GET['Property_Zip'];
    $Roof_Material = $_GET['Roof_Material'];
    $roofingPlan = $_GET['roofingPlan'];
    $Roof_Task_Type = $_GET['Roof_Task_Type'];
    $Best_Time_To_Call = $_GET['Best_Time_To_Call'];
    $Property_Owner = $_GET['Property_Owner'];
    $Comments = $_GET['Comments'];
    $Property_State = $_GET['Property_State'];
    $Property_City = $_GET['Property_City'];
    $Property_Address = $_GET['Property_Address'];
    $First_Name = $_GET['First_Name'];
    $Last_Name = $_GET['Last_Name'];
    $Email = $_GET['Email'];
    $Secondary_phone = $_GET['Secondary_phone'];
    $phone = $_GET['phone'];
    $terms = $_GET['terms'];
    $ipAddress = $_GET['ipAddress'];
    $subid = $_GET['subid'];
    $trustedFormURL = $_GET['xxTrustedFormCertUrl'];
    $jornayaLeadId = $_GET['universal_leadid'];
    $clickid = $_GET['clickid'];
    $tPar = $_GET['tPar'];
    $source = $_GET['source'];
    $tcpaConsent = $_GET['tcpaConsent'];
    $formURL = $_GET['formURL'];
    $tcpaConsentLanguage = $_GET['tcpaConsentLanguage'];
    $user_agent =  $_SERVER['HTTP_USER_AGENT'];
    $eventid = $_GET['eventid'];
    $utm_content = $_GET['utm_content'];
    $utm_term = $_GET['utm_term'];
    $utm_campaign = $_GET['utm_campaign'];
    $utm_medium = $_GET['utm_medium'];
    $utm_source = $_GET['utm_source'];
    $fbc = $_GET['fbc'];
    $fbp = $_GET['fbp'];
    $gclid = $_GET['gclid'];
$http_referrer = $_GET['http_referrer'];

$mapped = array(
        'type' => 'stepsform-' . (!empty($service) ? $service : 'roofing'),
        'apiId' => '722DDDB89DF34798AA3698A0DAFC5094',
        'apiPassword' => '0e79023a04',
        'productId' => '265',
        'trustedFormURL' => $trustedFormURL,
        'jornayaLeadId' => $jornayaLeadId,
        // 'testSold' => '1',
        // 'testMode' => '1',
        'tcpaConsentLanguage' => $tcpaConsentLanguage,
        'userAgent' => $user_agent,
        'ipAddress' => $ipAddress,
        'tcpaConsent' => 'YES',
        'subid' => $subid,
        'tPar' => $tPar,
        'clickid' => $clickid,
        'source' => $source,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'streetAddress' => $streetAddress,
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
);
include_once __DIR__ . '/form-logger.php';
log_form_data($mapped);


    // Set the server URL to send the POST request
    // $server_url = "https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b";
     $server_url = "https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b";


    // Initialize cURL session
    $ch = curl_init($server_url);

    // Configure cURL options
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($mapped));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    curl_setopt($ch, CURLOPT_HEADER, 1); // Set the header option before the request

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    // if (curl_errno($ch)) {
    //     // Handle the error
    //     echo "cURL Error: " . curl_error($ch);
    // }

    // Close the cURL session
    curl_close($ch);

    // Separate the headers and response body
    list($headers, $responseBody) = explode("\r\n\r\n", $response, 2);

    // Decode the JSON response from the response body
    $responseData = json_decode($responseBody, true);

    // Check if the status is 1 (indicating success)
    if (isset($responseData['status']) && $responseData['status'] === 1) {
        // Redirect to the specified URL
        $redirectUrl = $responseData['redirect_url'];
            //   echo $response;
               
 foreach ($mapped as $key => $value) {
     echo "$key: $value<br>";
 }


// You can also handle the failure here

      // header("Location: $redirectUrl");
        exit;
    } 
    else {
             //   header("Location: thank-you");

        echo $response; // You can also handle the failure here
        exit;
    }
}
?>
