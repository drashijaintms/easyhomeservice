<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
<meta name="theme-color" content="#0d6efd">
<meta name="author" content="Easy Home Service">
<meta name="p:domain_verify" content="984568b9c38cd50505d5f9c4fb7be743"/>
<link rel="icon" type="image/png" href="/images/favicon.png">
<link rel="icon" href="/images/favicon.ico" sizes="any">
<?php 
if (!empty($_SERVER['DOCUMENT_ROOT']) && file_exists($_SERVER['DOCUMENT_ROOT'].'/includes/assets.php')) {
    include $_SERVER['DOCUMENT_ROOT'].'/includes/assets.php'; 
} elseif (file_exists(__DIR__.'/includes/assets.php')) {
    include __DIR__.'/includes/assets.php';
}

if (!function_exists('asset')) {
    function asset($path) {
        return '/' . ltrim($path, '/');
    }
}

$base_url = 'https://easyhomeservice.com/';

if (!empty($_SERVER['DOCUMENT_ROOT']) && file_exists($_SERVER['DOCUMENT_ROOT'].'/includes/schema-dates.php')) {
    include $_SERVER['DOCUMENT_ROOT'].'/includes/schema-dates.php';
} elseif (file_exists(__DIR__.'/includes/schema-dates.php')) {
    include __DIR__.'/includes/schema-dates.php';
}

if (!function_exists('getSchemaDates')) {
    function getSchemaDates() {
        return [
            'datePublished' => date('Y-m-d'),
            'dateModified' => date('Y-m-d')
        ];
    }
}
$dates = getSchemaDates();
?>
<?php 
if (file_exists(__DIR__.'/seo/seo-render.php')) {
    include __DIR__.'/seo/seo-render.php';
}
?>
<?php
function get_hreflang_url() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443))
        ? "https://"
        : "http://";
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $current_url = $protocol . $host . $request_uri;
    $parsed_url = parse_url($current_url);
    $hreflang_url = $protocol . $host . ($parsed_url['path'] ?? ''); 
    return htmlspecialchars($hreflang_url, ENT_QUOTES, 'UTF-8');
}
echo '<link rel="alternate" hreflang="en-us" href="' . get_hreflang_url() . '" />' . PHP_EOL;
echo '<link rel="alternate" hreflang="x-default" href="' . get_hreflang_url() . '" />';
?>
<?php 
if (file_exists(__DIR__.'/page-speed/image-loading.php')) {
    include __DIR__.'/page-speed/image-loading.php';
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://ajax.googleapis.com" crossorigin> 
<link rel="preconnect" href="https://b-js.ringba.com" crossorigin>
<link rel="preload" href="/css/DMSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/css/DMSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/css/DMSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/css/DMSans-Bold.woff2" as="font" type="font/woff2" crossorigin>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= asset('css/style.css') ?>">
<link rel="stylesheet" href="<?= asset('css/responsive.css') ?>">
<link rel="stylesheet" href="<?= asset('css/slick.css') ?>">
<link rel="stylesheet" href="<?= asset('css/header-style.css') ?>">
<link rel="stylesheet" href="<?= asset('css/bootstrap-icons.min.css') ?>">
<link rel="stylesheet" href="<?= asset('css/font-awesome/6.5.1/css/all.min.css') ?>">

<link
  rel="preload"
  as="style"
  href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
  onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">
</noscript>
<?php
 if (basename($_SERVER['PHP_SELF']) == 'gutter-test.php') {
    ?>
  <script>var continuallySettings = { appID: "687y3n6k8rk5" };</script>
<script src="https://cdn-app.continual.ly/js/embed/continually-embed.latest.min.js" defer></script>
<?php
}
?>
<script src=//b-js.ringba.com/CA4aef2061048d4c4384dc9d84a81139b0 async></script>
<script src="https://www.googletagmanager.com/gtag/js?id=AW-16938917400" async></script>

<?php
$allowed_origins = [
    "http://m.easyhomeservice.com",
    "https://m.easyhomeservice.com",
    "http://easyhomeservice.com",
    "https://easyhomeservice.com"
];

if (isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
}

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}
?>
<meta name="facebook-domain-verification" content="n0ngp510wimmdv7f640t04chcxod99" />

<!-- Ringba -->
<?php 
if (file_exists(__DIR__.'/page-speed/ringba.php')) {
    include __DIR__.'/page-speed/ringba.php';
}
?>
<script src="<?= asset('scripts/header-scripts.js') ?>" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


 <!--SmartNews Ads Pixel Code -->
<script type="text/javascript">

!function(){if(window.SmartnewsAds=window.SmartnewsAds||{},!window.SmartnewsAds.p){var e=window.SmartnewsAds.p=function(){e.callMethod?e.callMethod.apply(e,arguments):e.queue.push(arguments)};e.push=e,e.version="1.0.1",e.queue=[];var n=document.createElement("script");n.async=!0,n.src="https://cdn.smartnews-ads.com/i/pixel.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(n,s)}}();

SmartnewsAds.p("b2ee0d94767ca5dea30f39fb", "PageView");
</script>


<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://i.smartnews-ads.com/p?id=b2ee0d94767ca5dea30f39fb&e=PageView" />
</noscript>

 
 
 
  <!--Nextdoor Pixel Code -->
  
<script type='text/javascript'>
    !function(e,n){var t,p;e.ndp||((t=e.ndp=function(){
    t.handleRequest?t.handleRequest.apply(t,arguments):t.queue.push(arguments)
    }).queue=[],t.v=1,(p=n.createElement(e="script")).async=!0,
    p.src="https://ads.nextdoor.com/public/pixel/ndp.js?id=69d67c66-8fb9-475d-a2d6-476714ef73de",
    (n=n.getElementsByTagName(e)[0]).parentNode.insertBefore(p,n))
    }(window,document);
 
    ndp('init','69d67c66-8fb9-475d-a2d6-476714ef73de', {});
    ndp('track','PAGE_VIEW');
</script>
<noscript>
<img height="1" width="1" style="display:none"
       src="https://flask.nextdoor.com/pixel?pid=69d67c66-8fb9-475d-a2d6-476714ef73de&ev=PAGE_VIEW&noscript=1"/>
</noscript>
 <!--End Nextdoor Pixel Code -->



<!-- Meta Pixel Code -->
<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window, document,'script',

'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1266576422056767');

fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=1266576422056767&ev=PageView&noscript=1"

/></noscript>
<!-- End Meta Pixel Code -->
 


 
 
    </head>
<body>
    
     
<!-- SmartNews Ads Event Code --> 
<script>

SmartnewsAds.p("b2ee0d94767ca5dea30f39fb", "SubmitForm"); 
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://i.smartnews-ads.com/p?id=b2ee0d94767ca5dea30f39fb&e=SubmitForm" />
</noscript>



<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4FX6N8M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- Taboola Pixel Code --> <script type='text/javascript'>   window._tfa = window._tfa || [];   window._tfa.push({notify: 'event', name: 'page_view', id: 2068041});   !function (t, f, a, x) {          if (!document.getElementById(x)) {             t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);          }   }(document.createElement('script'),   document.getElementsByTagName('script')[0],   '//cdn.taboola.com/libtrc/unip/2068041/tfa.js',   'tb_tfa_script'); </script> <!-- End of Taboola Pixel Code -->
 

<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
?>