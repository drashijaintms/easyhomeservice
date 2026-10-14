<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
include "dbconnect.php";
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Get the permalink from the URL parameters
$permalink = $_GET['permalink'] ?? '';

// Check if there is a query string in the request URI
if (isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], '?') !== false) {
    // Extract the query string part from the request URI
    $query_string = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
    
    // Append the query string to the permalink
    $permalink .= '?' . $query_string;
}

// Escape the permalink for use in the SQL query
$permalink = mysqli_real_escape_string($conn, $permalink);

// Perform query
$query = "SELECT * FROM tblposts WHERE slug = '$permalink'";
$result = mysqli_query($conn, $query);

// Check for query execution success
if (!$result) {
    die("Error in query: " . mysqli_error($conn));
}

// Fetch result
$row = mysqli_fetch_assoc($result);

// Meta tags and structured data
if ($row) {
    echo '<title>' . htmlentities($row['metatitle']) . '</title>' . PHP_EOL;
    echo "<meta name='description' content='" . htmlentities($row['metadescription']) . "'>" . PHP_EOL;
}
?>
    <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
<?php
if ($row) {
   echo "<link rel='canonical' href='https://easyhomeservice.com/blog/" . htmlentities($row['slug']) . "'>" . PHP_EOL;
    
    echo "<meta property='og:url' content='https://easyhomeservice.com/blog/" . htmlentities($row['slug']) . "'>" . PHP_EOL;
    echo "<meta property='og:type' content='article'>" . PHP_EOL;

    echo '<meta name="author" content="' . htmlentities($row['author'], ENT_QUOTES, 'UTF-8') . '">' . PHP_EOL;

    echo "<meta property='og:title' content='" . htmlentities($row['metatitle']) . "'>" . PHP_EOL;
    echo "<meta property='og:image' content='https://easyhomeservice.com/blog/admin/postimages/" . $row['PostImage'] . "'>" . PHP_EOL;
    echo "<meta property='og:image:secure_url' content='https://easyhomeservice.com/blog/admin/postimages/" . $row['PostImage'] . "'>" . PHP_EOL;
    echo "<meta name='og:description' content='" . htmlentities($row['metadescription']) . "'>" . PHP_EOL;
echo '<link rel="alternate" hreflang="en-US" href="https://easyhomeservice.com/blog/' . htmlentities($row['slug'], ENT_QUOTES, 'UTF-8') . '">' . PHP_EOL;
    // echo "<meta name='keywords' content='" . htmlentities($row['keywords']) . "'>" . PHP_EOL;
    


}

// Free result set
mysqli_free_result($result);
?>


<?php
$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($current_path === '/blog/' || $current_path === '/blog') :
?>

<script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com/#place",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "USA"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com/#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18333809800",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "USA"
      },
      "logo": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com/#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+18333809800",
          "contactType": "customer support",
          "areaServed": "US"
        }
      ],
      "location": {
        "@id": "https://easyhomeservice.com/#place"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com/#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com/#organization"
      },
      "inLanguage": "en-US"
    }
  ]
}
</script> 

<?php endif; ?>

<?php
if ($row) {
    $postSlug   = htmlentities($row['slug']);
    $postTitle  = htmlentities($row['PostTitle']);
    $postImage  = "https://easyhomeservice.com/blog/admin/postimages/" . $row['PostImage'];
    $postUrl    = "https://easyhomeservice.com/blog/" . $postSlug;
    $postDate   = htmlentities($row['PostingDate']);
    $metaTitle  = htmlentities($row['metatitle']);
    $metaDesc   = htmlentities($row['metadescription']);
    $keywords   = htmlentities($row['keywords']);
    $author = htmlentities($row['author']);
    $wordCount  = 1800; // optional: compute if you want
    $modifiedDate = date('c');

    // === Prepare and decode post HTML (handles stored escaped HTML like &lt;div&gt;)
    $rawHtml = $row['PostDetails'] ?? '';
    $decodedHtml = html_entity_decode($rawHtml, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $decodedHtml = stripslashes($decodedHtml); // in case slashes were added

    // === Parse FAQs (if any)
    // === Parse FAQs (if any)
$faqItems = [];
if (stripos($decodedHtml, 'accordion') !== false) {
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $decodedHtml);
    libxml_clear_errors();
    $xpath = new DOMXPath($dom);

    $items = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' accordion-item ')]");

    $faqCount = 1;
    foreach ($items as $item) {
        // QUESTION = button.accordion-header
        $button = $xpath->query(".//button[contains(concat(' ', normalize-space(@class),' '),' accordion-header ')]", $item)->item(0);
        $questionText = '';
        if ($button) {
            foreach ($button->childNodes as $cn) {
                if ($cn->nodeType === XML_TEXT_NODE) {
                    $questionText .= ' ' . $cn->nodeValue;
                }
            }
            $questionText = trim($questionText);
            $questionText = preg_replace('/^[\s\+\-\–\—]+/u', '', $questionText); // strip +/– symbols
        }

        // ANSWER = accordion-body <p>
        $answerNode = $xpath->query(".//div[contains(concat(' ', normalize-space(@class),' '),' accordion-body ')]//p", $item)->item(0);
        $answerText = $answerNode ? trim($answerNode->textContent) : '';

        if ($questionText !== '' && $answerText !== '') {
            $faqItems[] = [
                "@type" => "Question",
                "url"   => $postUrl . "#faq" . $faqCount,
                "name"  => $questionText,   // ✅ question text
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text"  => $answerText   // ✅ answer text
                ]
            ];
            $faqCount++;
        }
    }
}

    // === Build the @graph (WebPage becomes FAQPage when we have FAQs)
    $webpageType = $faqItems ? ["WebPage", "FAQPage"] : "WebPage";

    $webpage = [
        "@type" => $webpageType,
        "@id"   => $postUrl . "#webpage",
        "url"   => $postUrl,
        "name"  => $metaTitle ?: ($postTitle . " | Easy Home Service"),
        "datePublished" => date('c', strtotime($postDate)),
        "dateModified"  => $modifiedDate,
        "isPartOf" => ["@id" => "https://easyhomeservice.com/#website"],
        "primaryImageOfPage" => ["@id" => $postImage],
        "inLanguage" => "en-US",
        "breadcrumb" => ["@id" => $postUrl . "#breadcrumb"]
    ];

    if ($faqItems) {
        // attach the FAQ questions as mainEntity of the page
        $webpage['mainEntity'] = $faqItems;
    }

    $graph = [
        [
            "@type" => "ImageObject",
            "@id"   => $postImage,
            "url"   => $postImage,
            "width" => "1200",
            "height"=> "628",
            "caption" => $postTitle . " - Easy Home Service",
            "inLanguage" => "en-US"
        ],
        [
            "@type" => "BreadcrumbList",
            "@id"   => $postUrl . "#breadcrumb",
            "itemListElement" => [
                ["@type" => "ListItem", "position" => 1, "item" => ["@id" => "https://easyhomeservice.com", "name" => "Home"]],
                ["@type" => "ListItem", "position" => 2, "item" => ["@id" => "https://easyhomeservice.com/blog/", "name" => "Blog"]],
                ["@type" => "ListItem", "position" => 3, "item" => ["@id" => $postUrl, "name" => $postTitle]]
            ]
        ],
        $webpage,
        [
            "@type" => "Person",
            "@id"   => $postUrl . "#author",
            "name"  => "$author",
            "image" => [
                "@type" => "ImageObject",
                "url"   => "https://easyhomeservice.com/images/easyhomeservice.svg",
                "caption" => "Easy Home Service Team",
                "inLanguage" => "en-US"
            ],
            "worksFor" => ["@id" => "https://easyhomeservice.com/#organization"]
        ],
        [
            "@type" => "BlogPosting",
            "headline" => $postTitle,
            "keywords" =>  $keywords,
            "datePublished" => date('c', strtotime($postDate)),
            "dateModified"  => $modifiedDate,
            "author" => ["@id" => $postUrl . "#author"],
            "publisher" => ["@id" => "https://easyhomeservice.com/#organization"],
            "description" => $metaDesc,
            "name" => $postTitle,
            "@id" => $postUrl . "#richSnippet",
            "isPartOf" => ["@id" => $postUrl . "#webpage"],
            "image" => ["@id" => $postImage],
            "inLanguage" => "en-US",
            "mainEntityOfPage" => ["@id" => $postUrl . "#webpage"],
            "wordCount" => $wordCount
        ]
    ];

    // Output the combined schema
    echo '<script type="application/ld+json" class="rank-math-schema">' . PHP_EOL;
    echo json_encode([
        "@context" => "https://schema.org",
        "@graph"   => $graph
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo PHP_EOL . '</script>' . PHP_EOL;
}
?>


<link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/blogstyle.css" />
    <link rel="stylesheet" href="assets/css/wordpresscss.css" />


    <link href="https://fonts.cdnfonts.com/css/georgia" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <link rel="icon" type="image/icon" href="https://easyhomeservice.com/images/favicon.svg">
    <!--mainheader-->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/style.css">-->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/slick.css">-->
    <!--<link rel="preload" href="css/DMSans-Regular.woff2" as="font" type="font/woff2" crossorigin>-->
    <!--<link rel="preload" href="css/DMSans-Medium.woff2" as="font" type="font/woff2" crossorigin>-->
    <!--<link rel="preload" href="css/DMSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>-->
    <!--<link rel="preload" href="css/DMSans-Bold.woff2" as="font" type="font/woff2" crossorigin>-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
<!--/mainheader-->




<style>
   @media (min-width: 601px) and (max-width: 1440px) {
 ul.topMenu {
    float: left;
    margin: 0 0 0 38px;
}
}

.topMenu > li > a {
    transition: transform 0.3s ease;
    display: inline-block; /* required for transform effect */
}

.topMenu > li > a:hover {
    transform: scale(1.07);
    color: #ff7300; /* optional color change */
}
.header_call, .header-btn {
    transition: transform 0.3s ease;
    display: inline-block;
}

.header_call:hover,
.header-btn:hover {
    transform: scale(1.07);   /* Zoom hover effect */
}
.header_call span:hover {
    transform: scale(1.07);
}
.header-btn:hover {
    transform: scale(1.07);
}
</style>

<?php
$noIndexPages = [
    '/tcpa',
    '/ccpa',
    '/blog/kitchen',
    '/blog/solar',
    '/blog/homewarranty',
    '/blog/hvac',
    '/blog/bathroom'
];

$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (in_array($currentPath, $noIndexPages)) {
    echo '<meta name="robots" content="noindex, nofollow">';
}
?>
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
fbq('init', '1291850916354943');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1291850916354943&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
 
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
 
 
<!--SmartNews Ads Pixel Code -->
<script type="text/javascript">
 
!function(){if(window.SmartnewsAds=window.SmartnewsAds||{},!window.SmartnewsAds.p){var e=window.SmartnewsAds.p=function(){e.callMethod?e.callMethod.apply(e,arguments):e.queue.push(arguments)};e.push=e,e.version="1.0.1",e.queue=[];var n=document.createElement("script");n.async=!0,n.src="https://cdn.smartnews-ads.com/i/pixel.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(n,s)}}();
 
SmartnewsAds.p("b2ee0d94767ca5dea30f39fb", "PageView");
</script>
 
 
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://i.smartnews-ads.com/p?id=b2ee0d94767ca5dea30f39fb&e=PageView" />
</noscript>
</head>

<body>
    



    <?php include 'dbconnect.php'; ?> 