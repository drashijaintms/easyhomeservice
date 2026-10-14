<?php

// Get the current request path
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestPath = trim($requestPath, '/');

// Remove .php if present
$requestPath = preg_replace('/\.php$/', '', $requestPath);

// Homepage fix
if ($requestPath === '') {
    $pageSlug = 'home';
} else {
    // Get the last part as the page slug
    $pageSlug = basename($requestPath);
}

// Collect SEO files
$seoFiles = glob(__DIR__ . '/seo-data-*.php');
$seoData = [];

if (!empty($seoFiles)) {
    foreach ($seoFiles as $file) {

        $data = include $file;

        if (!is_array($data)) {
            continue;
        }

        if (isset($data[$pageSlug]) && is_array($data[$pageSlug])) {
            $seoData = $data[$pageSlug];
            break;
        }
    }
}

/* --------------------------------------------------
   NEVER STOP PAGE IF SEO DATA MISSING
-------------------------------------------------- */

$meta   = $seoData['meta'] ?? [];
$schema = $seoData['schema'] ?? '';

/* --------------------------------------------------
   BUILD CANONICAL URL
-------------------------------------------------- */

function canonical_from_pageslug($slug, $requestPath)
{
    $host = $_SERVER['HTTP_HOST'];
    $base = "https://$host";

    // Homepage
    if ($slug === 'home') {
        return $base . '/';
    }

    // Detect service-in-state pattern
    if (preg_match('/^([a-z-]+)-(services|experts)-in-([a-z-]+)$/', $slug, $m)) {

        $service = $m[1];
        $type    = $m[2];
        $state   = $m[3];

        if ($type === 'services') {
            $page = "{$service}-services-in-$state";
        } else {
            $page = "{$service}-experts-in-$state";
        }

        // Always include state folder
        return "$base/$state/$page";
    }

    /*
     * Preserve the complete URL path.
     *
     * Example:
     * /hvac/ventilation
     * becomes:
     * https://easyhomeservice.com/hvac/ventilation
     */
    return $base . '/' . trim($requestPath, '/');
}

$canonicalUrl = canonical_from_pageslug($pageSlug, $requestPath);
/* --------------------------------------------------
   DYNAMIC SCHEMA FOR PLUMBING EXPERT PAGES ONLY
-------------------------------------------------- */

if (preg_match('/^plumbing-experts-in-([a-z-]+)$/', $pageSlug, $matches)) {

    $state_slug = $matches[1]; // texas
    $state_name = ucwords(str_replace('-', ' ', $state_slug)); // Texas

    /* STATE CODE MAP */
    $state_codes = [
      "alabama"=>"AL","alaska"=>"AK","arizona"=>"AZ","arkansas"=>"AR","california"=>"CA",
      "colorado"=>"CO","connecticut"=>"CT","delaware"=>"DE","florida"=>"FL","georgia"=>"GA",
      "hawaii"=>"HI","idaho"=>"ID","illinois"=>"IL","indiana"=>"IN","iowa"=>"IA",
      "kansas"=>"KS","kentucky"=>"KY","louisiana"=>"LA","maine"=>"ME","maryland"=>"MD",
      "massachusetts"=>"MA","michigan"=>"MI","minnesota"=>"MN","mississippi"=>"MS",
      "missouri"=>"MO","montana"=>"MT","nebraska"=>"NE","nevada"=>"NV",
      "new-hampshire"=>"NH","new-jersey"=>"NJ","new-mexico"=>"NM","new-york"=>"NY",
      "north-carolina"=>"NC","north-dakota"=>"ND","ohio"=>"OH","oklahoma"=>"OK",
      "oregon"=>"OR","pennsylvania"=>"PA","rhode-island"=>"RI","south-carolina"=>"SC",
      "south-dakota"=>"SD","tennessee"=>"TN","texas"=>"TX","utah"=>"UT",
      "vermont"=>"VT","virginia"=>"VA","washington"=>"WA","west-virginia"=>"WV",
      "wisconsin"=>"WI","wyoming"=>"WY"
    ];

    $state_code = $state_codes[$state_slug] ?? "";

    $host = $_SERVER['HTTP_HOST'];
    $base = "https://$host";
    $url  = "$base/$state_slug/$pageSlug";

    $image = $meta['image'] ?? '';
    $title = $meta['title'] ?? '';
    $description = $meta['description'] ?? '';

    $schema_array = [
        "@context" => "https://schema.org",
        "@graph" => [

            [
                "@type" => "WebPage",
                "@id" => "$url/#webpage",
                "url" => $url,
                "name" => $title,
                "description" => $description,
                "inLanguage" => "en-US",
                "isPartOf" => [
                    "@id" => "$base/#website"
                ],
                "primaryImageOfPage" => [
                    "@type" => "ImageObject",
                    "@id" => $image,
                    "url" => $image
                ],
                "mainEntity" => [
                    "@id" => "$url/#service"
                ]
            ],

            [
                "@type" => ["LocalBusiness","Plumber"],
                "@id" => "$url/#localbusiness",
                "name" => "Easy Home Service - $state_name Plumbing Experts",
                "image" => $image,
                "url" => $url,
                "telephone" => "13216033297",
                "priceRange" => "$$",
                "areaServed" => [
                    "@type" => "AdministrativeArea",
                    "name" => $state_name
                ],
                "address" => [
                    "@type" => "PostalAddress",
                    "addressRegion" => $state_code,
                    "addressCountry" => "US"
                ],
                "parentOrganization" => [
                    "@id" => "$base/#organization"
                ]
            ],

            [
                "@type" => "Service",
                "@id" => "$url/#service",
                "name" => "Residential Plumbing Services in $state_name",
                "serviceType" => "Plumbing Services",
                "provider" => [
                    "@id" => "$url/#localbusiness"
                ],
                "areaServed" => [
                    "@type" => "AdministrativeArea",
                    "name" => $state_name
                ],

                "availableChannel" => [
                    "@type" => "ServiceChannel",
                    "serviceLocation" => [
                        "@type" => "AdministrativeArea",
                        "name" => $state_name
                    ]
                ],

                "description" => "Residential plumbing services in $state_name including emergency plumbing, drain cleaning, water heater repair and installation, leak detection, pipe repair and sewer line services.",

                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => "$state_name Plumbing Services",
                    "itemListElement" => [

                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "24/7 Emergency Plumbing Services"
                            ]
                        ],

                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Water Heater Repair & Installation"
                            ]
                        ],

                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Drain Cleaning & Clog Removal"
                            ]
                        ],

                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Leak Detection & Pipe Repair"
                            ]
                        ],

                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Sewer Line Inspection & Repair"
                            ]
                        ]

                    ]
                ]
            ],

            [
                "@type" => "BreadcrumbList",
                "@id" => "$url/#breadcrumb",
                "itemListElement" => [
                    [
                        "@type" => "ListItem",
                        "position" => 1,
                        "item" => [
                            "@id" => $base,
                            "name" => "Home"
                        ]
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 2,
                        "item" => [
                            "@id" => "$base/plumbing",
                            "name" => "Plumbing"
                        ]
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 3,
                        "item" => [
                            "@id" => $url,
                            "name" => "Plumbing Experts in $state_name"
                        ]
                    ]
                ]
            ]

        ]
    ];

    $schema = '<script type="application/ld+json">' .
        json_encode($schema_array, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) .
        '</script>';
}
/* --------------------------------------------------
   DYNAMIC META DESCRIPTION FALLBACK
-------------------------------------------------- */
function slugToText($slug){
    $slug = str_replace('-', ' ', $slug);
    return ucwords($slug);
}

if (empty($meta['description'])) {
    $readable = slugToText($pageSlug);
    $meta['description'] = "Find trusted $readable services near you. Compare local professionals and get a free quote today.";
}

/* optional fallback title */
if (empty($meta['title'])) {
    $meta['title'] = slugToText($pageSlug) . " | Easy Home Service";
}

?>

<!-- BASIC META -->
<title><?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?= htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8'); ?>">

<!-- CANONICAL -->
<link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

<!-- OPEN GRAPH -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?= htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:site_name" content="Easy Home Service">

<?php if (!empty($meta['image'])): ?>
<meta property="og:image" content="<?= htmlspecialchars($meta['image'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image:secure_url" content="<?= htmlspecialchars($meta['image'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="628">
<meta property="og:image:alt" content="<?= htmlspecialchars($meta['image_alt'] ?? $meta['title'], ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>

<!-- TWITTER -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8'); ?>">

<?php if (!empty($meta['image'])): ?>
<meta name="twitter:image" content="<?= htmlspecialchars($meta['image'], ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:site" content="@EasyHomeExperts">
<meta name="twitter:creator" content="@EasyHomeExperts">
<?php endif; ?>

<!-- SCHEMA -->
<?= $schema ?>

    </head>