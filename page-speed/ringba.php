<?php
// Get current URL
$url = strtolower($_SERVER['REQUEST_URI']);

// Generate cache buster
$cacheBuster = '?v=' . time();

/* =========================
   RINGBA SERVICE SCRIPTS
   ========================= */

// Gutter
if (str_contains($url, 'gutter')) {
    echo '<script src="//b-js.ringba.com/CA4e3e27920a71499f95efeb19fe56ac3e'.$cacheBuster.'" defer async></script>';
}

// Solar
if (str_contains($url, 'solar')) {
    echo '<script src="//b-js.ringba.com/CAd4af6d32446c49a3ae1347dd7e02fb97'.$cacheBuster.'" defer async></script>';
}

// Roofing
if (str_contains($url, 'roofing')) {
    echo '<script src="//b-js.ringba.com/CAd6ac5862e7ba4202a5c1487c37514e06'.$cacheBuster.'" defer async></script>';
}

// Kitchen
if (str_contains($url, 'kitchen')) {
    echo '<script src="//b-js.ringba.com/CAcf79ff90c79d463aa6146a8e09b978b1'.$cacheBuster.'" defer async></script>';
}

// Home Warranty
if (str_contains($url, 'homewarranty') || str_contains($url, 'homewarranty')) {
    echo '<script src="//b-js.ringba.com/CA7fbbe249db254a1b91555ebada9ca55e'.$cacheBuster.'" defer async></script>';
}

// Door
if (str_contains($url, 'door')) {
    echo '<script src="//b-js.ringba.com/CAd2ea4986ec06444899e18cb6019162b2'.$cacheBuster.'" defer async></script>';
}

// Bathroom
if (str_contains($url, 'bathroom')) {
    echo '<script src="//b-js.ringba.com/CA146a1dcbc14f43df85adcb0979263e21'.$cacheBuster.'" defer async></script>';
}

// HVAC
if (str_contains($url, 'hvac')) {
    echo '<script src="//b-js.ringba.com/CA028411a2b9cc406eb855156651721d85'.$cacheBuster.'" defer async></script>';
}

// Flooring
if (str_contains($url, 'flooring')) {
    echo '<script src="//b-js.ringba.com/CA1f2d15dc242b47109564afd865cd58d4'.$cacheBuster.'" defer async></script>';
}

// Plumbing
if (str_contains($url, 'plumbing')) {
    echo '<script src="//b-js.ringba.com/CA76879f01b333408cac48e032d713aa93'.$cacheBuster.'" defer async></script>';
}
// Plumbing
if (str_contains($url, 'pest-control')) {
    echo '<script src="//b-js.ringba.com/CAac2505b719604cf6b1c612e791652b1c'.$cacheBuster.'" async></script>';
}



?>
