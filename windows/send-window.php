<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Retrieve the form fields using the GET method
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $zipcode = $_GET['zipcode'];
    $description = trim($_GET['description'] ?? '') ?: "Seeking for service";
    $firstName = $_GET['fname'];
    $lastName = $_GET['lname'];
    $streetAddress = $_GET['address'];
    $ipAddress = $_GET['ipAddress'];
    $subid = $_GET['subid'];
    $timeframe = $_GET['timeframe'];
    $trustedFormURL = $_GET['xxTrustedFormCertUrl'];
    $clickid = $_GET['clickid'];
    $tPar = $_GET['tPar'];
    $source = $_GET['source'];
    $tcpaConsent = $_GET['tcpaConsent'];
    $formURL = $_GET['formURL'];
   $service=$_GET['service'];
   $tcpaConsentLanguage=$_GET['tcpaConsentLanguage'];
   $user_agent =  $_SERVER['HTTP_USER_AGENT'];
   
   
   
    $windowsProjectScope = $_GET['windowsProjectScope'];
    $numberOfWindows = $_GET['numberOfWindows'];
    $windowMaterial = $_GET['windowMaterial'];
    
    
    
    
    // Combine all data into a single array
    
        // New parameters
        $city = $_GET['city'];
        $state = $_GET['state'];
        $eventid = $_GET['eventid'];
        $utm_content = $_GET['utm_content'];
        $utm_term = $_GET['utm_term'];
        $utm_campaign = $_GET['utm_campaign'];
        $utm_medium = $_GET['utm_medium'];
        $utm_source = $_GET['utm_source'];
        $fbc = $_GET['fbc'];
        $fbp = $_GET['fbp'];
        $gclid = $_GET['gclid'];

$mapped = array(
        'apiId' => '722DDDB89DF34798AA3698A0DAFC5094',
        'apiPassword' => '0e79023a04',
        'productId' => '265',
        'trustedFormURL' => $trustedFormURL,
        // 'testSold' => '1',
        // 'testMode' => '1',
        'tcpaConsentLanguage' => $tcpaConsentLanguage,
        'userAgent' => $user_agent,
        
        
        'service'=>$service,
        
        
      'ipAddress' => $ipAddress,
                'ownHome' => $homeowner,
        'description' => $description,
        'tcpaConsent' => 'YES',
        'subid' => $subid,
        'timeframe' => $timeframe,
      'tPar' => $tPar,
    'clickid' => $clickid,
    'source' => $source,
        'email' => $email,
        'phoneNumber' => $phone,
        'zipcode' => $zipcode,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'streetAddress' => $streetAddress,
    'landingPage' => $formURL,
        
        
        
        'windowsProjectScope' => $windowsProjectScope,
        'numberOfWindows' => $numberOfWindows,
        'windowMaterial' => $windowMaterial,
    
        'city' => $city,
        'state' => $state,
        'eventid' => $eventid,
        'utm_content' => $utm_content,
        'utm_term' => $utm_term,
        'utm_campaign' => $utm_campaign,
        'utm_medium' => $utm_medium,
        'utm_source' => $utm_source,
        'fbc' => $fbc,
        'fbp' => $fbp,
        'gclid' => $gclid,
);

    // Set the server URL to send the POST request
    $server_url = "https://leads-inst139-client.phonexa.com/fullpost/";

    // Initialize cURL session
    $ch = curl_init($server_url);

    // Configure cURL options
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($mapped));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Decode the JSON response
    curl_close($ch);

    // Separate the headers and response body
    list($headers, $responseBody) = explode("\r\n\r\n", $response, 2);

    // Decode the JSON response from the response body
    $responseData = json_decode($responseBody, true);

    // Check if the status is 1 (indicating success)
    if (isset($responseData['status']) && $responseData['status'] === 1) {
        // Redirect to the specified URL
        $redirectUrl = $responseData['redirect_url'];
//                echo $response; // You can also handle the failure here
foreach ($mapped as $key => $value) {
    echo "$key: $value<br>";
}
     //header("Location: $redirectUrl");
   // echo $response;
        exit;
    } 
    else {
                // header("Location: thank-you");
                

        echo $response; // You can also handle the failure here
        exit;
    }
}

// SECOND POST REQUEST TO VELLKO MEDIA
$vellko_url = "https://vellkomedia.waypointsoftware.io/capture.php?xAuthentication=62fd0ac1a9e7072e5d0db2a8de686676";

// Initialize second cURL session
$ch2 = curl_init($vellko_url);

// Use the same $mapped array, or modify if their API expects different keys
curl_setopt($ch2, CURLOPT_POST, true);
curl_setopt($ch2, CURLOPT_POSTFIELDS, http_build_query($mapped));
curl_setopt($ch2, CURLOPT_HTTPHEADER, array("Expect:"));
curl_setopt($ch2, CURLOPT_FAILONERROR, 1);
curl_setopt($ch2, CURLOPT_HEADER, 1);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch2, CURLOPT_TIMEOUT, 120);
curl_setopt($ch2, CURLINFO_HEADER_OUT, true);
curl_setopt($ch2, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

// Execute the second request
$response2 = curl_exec($ch2);
curl_close($ch2);

// Optional: handle or log $response2 if needed


?>