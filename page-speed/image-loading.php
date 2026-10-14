<?php 
$base_url = "https://easyhomeservice.com/";
$current_url = $_SERVER['REQUEST_URI'];
?>

<!-- COMMON PRELOAD (LOAD ON ALL PAGES) -->
<link rel="preload" as="image" href="<?php echo $base_url; ?>images/how-it-works-3.webp" type="image/webp" fetchpriority="high">


<?php

// INDEX PAGE
if ($current_url == '/' || strpos($current_url, 'index') !== false) {

?>

<?php

// HVAC PAGES
} elseif (strpos($current_url, 'hvac') !== false) {

?>

    <!-- HVAC PAGE IMAGES -->
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/hvac-img-02.webp" type="image/webp" fetchpriority="high">
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/hvac_bnr_mob.webp" type="image/webp" fetchpriority="high">


<?php

// OTHER PAGES (OPTIONAL)
} elseif (strpos($current_url, 'plumbing') !== false) {

?>

    <!-- PLUMBING PAGE IMAGES -->
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/mobileplumbing.webp" type="image/webp" fetchpriority="high">
    
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/win-plumb/plumbing-1.1.webp" type="image/webp">
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/win-plumb/plumbing-2.webp" type="image/webp">
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/win-plumb/plumbing-3.webp" type="image/webp">
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/win-plumb/plumbing-4.webp" type="image/webp">
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/win-plumb/plumbing-5.webp" type="image/webp">
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/win-plumb/plumbing-6.webp" type="image/webp">

    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/states/plumbing/water-heater-repair-and-installation.webp" type="image/webp">    
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/states/plumbing/drain-cleaning-and-sewer-services.webp" type="image/webp">    
    <link rel="preload" as="image" href="<?php echo $base_url; ?>images/states/plumbing/plumbing-inspection-and-maintenance-services.webp" type="image/webp">    



<?php
}
else {
    

?>

    <!-- OTHER PAGE PRELOAD (OPTIONAL) -->
    <!-- Add here if needed -->

<?php } ?>
<?php

// Extract slug from URL
$slug = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Example: hvac-services-in-new-york
if (preg_match('/hvac-services-in-(.*)/', $slug, $matches)) {

    $state = $matches[1]; // new-york

    $dynamic_img = $base_url . "images/states/hvac/side-img-" . $state . ".webp";

?>
    <!-- Dynamic State HVAC Image Preload -->
    <link rel="preload" as="image" href="<?php echo $dynamic_img; ?>" type="image/webp" fetchpriority="high">

<?php } ?>
<?php

// Extract slug from URL
$slug = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Example: hvac-services-in-new-york
if (preg_match('/plumbing-experts-in-(.*)/', $slug, $matches)) {

    $state = $matches[1]; // new-york

    $dynamic_img = $base_url . "images/states/plumbing/side-img-" . $state . ".webp";

?>
    <!-- Dynamic State HVAC Image Preload -->
    <link rel="preload" as="image" href="<?php echo $dynamic_img; ?>" type="image/webp" fetchpriority="high">

<?php } ?>