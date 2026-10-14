<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
   //Common fields
   
    $email = $_GET['email'] ?? '';
    $phone = $_GET['phone'] ?? '';
    $zipcode = $_GET['zipcode'] ?? '';
    $homeowner = $_GET['authorisation'] ?? '';
    $description = trim($_GET['description'] ?? '') ?: "Seeking for service";
    $firstName = $_GET['fname'] ?? '';
    $lastName = $_GET['lname'] ?? '';
    $streetAddress = $_GET['address'] ?? '';
    $city = $_GET['city'] ?? '';
    $state = $_GET['state'] ?? '';
    $ipAddress = $_GET['ipAddress'] ?? '';
    $subid = $_GET['subid'] ?? '';
    $timeframe = $_GET['timeframe'] ?? '';
    $trustedFormURL = $_GET['xxTrustedFormCertUrl'] ?? '';
    $jornayaLeadId = $_GET['universal_leadid'] ?? '';
    $clickid = $_GET['clickid'] ?? '';
    $tPar = $_GET['tPar'] ?? '';
    $source = $_GET['source'] ?? '';
    $tcpaConsent = $_GET['tcpaConsent'] ?? 'YES';
    $formURL = $_GET['formURL'] ?? '';
    $tcpaConsentLanguage=$_GET['tcpaConsentLanguage'] ?? '';
    $user_agent =  $_SERVER['HTTP_USER_AGENT'] ?? '';
    $eventid = $_GET['eventid'] ?? '';
    $utm_content = $_GET['utm_content'] ?? '';
    $utm_term = $_GET['utm_term'] ?? '';
    $utm_campaign = $_GET['utm_campaign'] ?? '';
    $utm_medium = $_GET['utm_medium'] ?? '';
    $utm_source = $_GET['utm_source'] ?? '';
    $fbc = $_GET['fbc'] ?? '';
    $fbp = $_GET['fbp'] ?? '';
    $gclid = $_GET['gclid'] ?? '';
    $http_referrer = $_GET['http_referrer'] ?? '';    
   
  

$category = $_GET['category'] ?? 'hvac';

$service = $_GET['service'] ?? '';
$serviceType = '';
$sub_serviceType = '';

// ===== HVAC =====
if ($category === 'hvac') {

    $serviceType =
        $_GET['sub_service_install'] ??
        $_GET['sub_service_repair'] ??
        $_GET['sub_service_replacement'] ??
        '';

    $sub_serviceType =
        $_GET['system_heating_systems'] ??
        $_GET['system_cooling'] ??
        $_GET['system_indoor_air_quality'] ??
        $_GET['system_water_heating'] ??
        $_GET['system_install_service'] ??
        $_GET['system_repair_heating'] ??
        $_GET['system_repair_cooling'] ??
        $_GET['system_repair_duct_airflow'] ??
        $_GET['system_repair_water_heating'] ??
        $_GET['system_repair_service'] ??
        $_GET['system_repair_air_quality'] ??
        $_GET['system_replacement_major'] ??
        $_GET['system_replacement_heating'] ??
        $_GET['system_replacement_duct'] ??
        $_GET['system_replacement_air_quality'] ??
        $_GET['system_replacement_cooling'] ??
        $_GET['system_replacement_service'] ??
        '';
}

// ===== SOLAR =====
else if ($category === 'solar') {

    $serviceType = $_GET['sub_service'] ?? '';
    $sub_serviceType = $_GET['electricity_bill'] ?? '';
}

// ===== ROOFING =====
else if ($category === 'roofing') {

    // Step 1 → What does your roof need
    $service = $_GET['service'] ?? '';

    // Step 2 → Roofing material
    $serviceType = $_GET['sub_service'] ?? '';

    // Not needed for roofing
    $sub_serviceType = '';
}

// ===== WINDOW =====
else if ($category === 'window') {

    $serviceType = $_GET['sub_service'] ?? '';
}

// ===== FLOORING =====
else if ($category === 'flooring') {

    $serviceType = $_GET['sub_service'] ?? '';
    $sub_serviceType = $_GET['material_status'] ?? '';
}

// ===== KITCHEN =====
else if ($category === 'kitchen') {

    $serviceType = $_GET['specialized_type'] ?? '';
    $sub_serviceType = $_GET['structure_status'] ?? '';
}

// ===== BATHROOM =====
else if ($category === 'bathroom') {

    $serviceType = isset($_GET['sub_service_bath_fixtures_replacement'])
        ? implode(",", $_GET['sub_service_bath_fixtures_replacement'])
        : '';

    $sub_serviceType = $_GET['sub_service_surfaces_and_finishes'] ?? '';
}

// ===== PAINTING =====
else if ($category === 'painting') {

    if (!empty($_GET['sub_service_interior_painting'])) {
        $serviceType = implode(",", $_GET['sub_service_interior_painting']);
    } else if (!empty($_GET['sub_service_exterior_painting'])) {
        $serviceType = implode(",", $_GET['sub_service_exterior_painting']);
    } else if (!empty($_GET['sub_service_cabinet_and_trim_painting'])) {
        $serviceType = implode(",", $_GET['sub_service_cabinet_and_trim_painting']);
    } else if (!empty($_GET['sub_service_protective_coatings_and_surface_preparation'])) {
        $serviceType = implode(",", $_GET['sub_service_protective_coatings_and_surface_preparation']);
    } else if (!empty($_GET['sub_service_specialty_and_decorative_finishes'])) {
        $serviceType = implode(",", $_GET['sub_service_specialty_and_decorative_finishes']);
    } else if (!empty($_GET['sub_service_ceiling_and_textured_services'])) {
        $serviceType = implode(",", $_GET['sub_service_ceiling_and_textured_services']);
    }
}

// ===== WATER DAMAGE =====
else if ($category === 'waterdamage') {

    $serviceType = isset($_GET['service']) 
        ? (is_array($_GET['service']) ? implode(",", $_GET['service']) : $_GET['service']) 
        : '';

    $sub_serviceType = isset($_GET['sub_service']) 
        ? (is_array($_GET['sub_service']) ? implode(",", $_GET['sub_service']) : $_GET['sub_service']) 
        : '';
}
   


$mapped = array(
        'type' => 'stepsform-' . ($category ?: 'hvac'),
        'category' => $category,
        'service' => $service,
        'serviceType' => $serviceType,
        'sub_serviceType' => $sub_serviceType,
        'trustedFormURL' => $trustedFormURL,
        'jornayaLeadId' => $jornayaLeadId,
        'tcpaConsent' => $tcpaConsent,
        'tcpaConsentLanguage' => $tcpaConsentLanguage,
        'userAgent' => $user_agent,
        'ipAddress' => $ipAddress,
        'homeowner' => $homeowner,
        'ownHome' => $homeowner,
        'description' => $description,
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
        'city' => $city,
        'state' => $state,
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

$server_url = "https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b";

$ch = curl_init($server_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($mapped));
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 120);
curl_setopt($ch, CURLOPT_HEADER, 1);

$response = curl_exec($ch);
curl_close($ch);

list($headers, $responseBody) = explode("\r\n\r\n", $response, 2);
$responseData = json_decode($responseBody, true);

if (isset($responseData['status']) && $responseData['status'] === 1) {
    $redirectUrl = $responseData['redirect_url'];
    foreach ($mapped as $key => $value) {
        echo "$key: $value<br>";
    }
    exit;
} else {
    header("Location: thank-you");
    echo $response;
    exit;
}
}
?>
