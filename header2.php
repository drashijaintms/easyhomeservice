<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">

    <meta name="p:domain_verify" content="984568b9c38cd50505d5f9c4fb7be743"/>
<link rel="icon" type="image/png" href="https://easyhomeservice.com/images/favicon.png">

<link rel="icon" href="https://easyhomeservice.com/images/favicon.ico" sizes="any">




<?php $base_url = '/'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/slick.css">
<link rel="preload" href="/css/DMSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/css/DMSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/css/DMSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/css/DMSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&family=Lato:wght@400;700&family=Montserrat:wght@400;700&family=Raleway:wght@400;700&family=Poppins:wght@400;700&family=Merriweather:wght@400;700&family=Playfair+Display:wght@400;700&family=Source+Sans+Pro:wght@400;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">




<?php
function get_canonical_url() {
    // Get the current protocol
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
    // Get the current host
    $host = $_SERVER['HTTP_HOST'];
    
    // Get the current request URI
    $request_uri = $_SERVER['REQUEST_URI'];
    
    // Construct the full URL
    $current_url = $protocol . $host . $request_uri;
    
    // Modify the URL if necessary (remove tracking parameters, etc.)
    $parsed_url = parse_url($current_url);
    $canonical_url = $protocol . $host . $parsed_url['path']; // Remove query parameters if needed
    
    // Return the canonical URL
    return htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8');
}

// Usage
echo '<link rel="canonical" href="' . get_canonical_url() . '">';
?>


<?php include 'seo/seo-hvac.php';?>
<?php include 'seo/seo-plumbing.php';?>


<?php
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    ?>
    
    
    <title>Home Improvement Experts & Remodeling experts Near You | Easy Home Service</title>
<meta name="description" content="Easy Home Service Connects with Home improvement experts for affordable home remodeling, repairs & renovation. Trusted general contractors & local specialists near you.">
<meta name="keywords" content="Home improvement experts, Home maintenance, Easy Home, general contractor home improvement, construction home remodeling, affordable home repair, Remodeling experts Near You, Affordable home renovation services, Local home improvement specialist, Affordable home services, general contractor, home remodel">
  
    <meta property="og:title" content="Home Improvement Experts & Remodeling experts Near You | Easy Home Service">
    <meta property="og:description" content="Easy Home Service Connects with Home improvement experts for affordable home remodeling, repairs & renovation. Trusted general contractors & local specialists near you.
">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home Improvement Experts & Remodeling experts Near You | Easy Home Service">
    <meta name="twitter:description" content="Easy Home Service Connects with Home improvement experts for affordable home remodeling, repairs & renovation. Trusted general contractors & local specialists near you.
">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
  
  <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
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
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+13074161843",
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
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+13074161843",
          "contactType": "customer support",
          "areaServed": "US"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/easyhomeservicee/",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts",
        "https://www.pinterest.com/easyhomeservicee/"
      ],
      "location": {
        "@id": "https://easyhomeservice.com#place"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/banner_prod.png",
      "url": "https://easyhomeservice.com/images/banner_prod.png",
      "caption": "Easy Home Improvement Services",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com#webpage",
      "url": "https://easyhomeservice.com",
      "name": "Home Improvement Experts & Remodeling Services Near You | Easy Home Service",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-08-20T12:00:00+00:00",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/banner_prod.png"
      },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@id": "https://easyhomeservice.com#breadcrumb"
      }
    },
    {
      "@type": "Article",
      "headline": "Home Improvement Experts & Remodeling Services Near You | Easy Home Service",
      "keywords": "home improvement, remodeling, affordable home repair, home renovation services",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-08-21T12:00:00+00:00",
      "author": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "description": "Easy Home Service connects you with trusted home improvement experts for affordable remodeling, repairs, and renovation. Get matched with top local contractors near you.",
      "name": "Home Improvement Experts & Remodeling Services Near You | Easy Home Service",
      "@id": "https://easyhomeservice.com#richSnippet",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#webpage"
      },
      "image": {
        "@id": "https://easyhomeservice.com/images/banner_prod.png"
      },
      "inLanguage": "en-US",
      "mainEntityOfPage": {
        "@id": "https://easyhomeservice.com#webpage"
      },
      "wordCount": 1800
    }
  ]
}
</script>
 
    
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Easy home service",
  "url": "https://easyhomeservice.com/",
  "logo": "https://easyhomeservice.com/images/easyhomeservice.svg",
  "sameAs": [
    "https://www.facebook.com/profile.php?id=61565981943953&sk=about",
    "https://www.instagram.com/easy_home_service?igsh=MjkwZmxpdHd1cm9m",
    "https://www.linkedin.com/company/easy-home-service-llc"
  ]
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Easy home Service",
  "url": "https://easyhomeservice.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://easyhomeservice.com/allservices{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Roofing Contractors",
    "item": "https://easyhomeservice.com/roofing"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Window Contractors",
    "item": "https://easyhomeservice.com/window"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Solar Contractors",
    "item": "https://easyhomeservice.com/solar"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "HVAC Contractors",
    "item": "https://easyhomeservice.com/hvac"  
  },{
    "@type": "ListItem", 
    "position": 5, 
    "name": "Bathroom Contractors",
    "item": "https://easyhomeservice.com/bathroom"  
  },{
    "@type": "ListItem", 
    "position": 6, 
    "name": "Kitchen Contractors",
    "item": "https://easyhomeservice.com/kitchen"  
  },{
    "@type": "ListItem", 
    "position": 7, 
    "name": "Gutter Contractors",
    "item": "https://easyhomeservice.com/gutter"  
  },{
    "@type": "ListItem", 
    "position": 8, 
    "name": "Walk-In Tub Contractors",
    "item": "https://easyhomeservice.com/walktub"  
  },{
    "@type": "ListItem", 
    "position": 9, 
    "name": "Handyman Contractors",
    "item": "https://easyhomeservice.com/handyman"  
  },{
    "@type": "ListItem", 
    "position": 10, 
    "name": "Warranty Service",
    "item": "https://easyhomeservice.com/homewarranty"  
  }]
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What types of home improvement services do you offer?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We offer a wide range of services, including but not limited to kitchen and bathroom renovations, flooring installation, roofing, solar panel installation, and more."
    }
  },{
    "@type": "Question",
    "name": "How do I get started with a home improvement project?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To get started, simply contact us for a consultation. We'll discuss your needs, budget, and timeline to create a customized plan for your project."
    }
  },{
    "@type": "Question",
    "name": "Are your contractors licensed and insured?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, all our contractors are licensed and insured to ensure the highest quality of work and protection for both parties involved."
    }
  },{
    "@type": "Question",
    "name": "What is the estimated timeline for a typical home improvement project?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The timeline varies depending on the scope of the project. We'll provide a detailed schedule during the consultation phase, outlining each step of the process."
    }
  }]
}
</script>
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'roofing.php') {
    ?>
    <title>Roofing Experts in USA | Residential Roof Repair & Installation</title>
    <meta name="description" content="From roof leak fix to complete roof installation & upgrade we help homeowners find affordable roofing near them. Start your roofing project with confidence now.">
    <!--<meta name="keywords" content="affordable roofing near me, best roofers near you, residential roofing repairs, Roofing Experts, emergency roof repairs near me, expert roofing services">-->
    
    
    
        <meta property="og:title" content="Affordable Roofing Experts | Best Roofers Near You">
    <meta property="og:description" content="Get best Roofing Experts services today! Affordable roof repairs, emergency fixes, and residential solutions by top-rated pros near you. Fast, reliable support.">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/roofing">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Affordable Roofing Experts | Best Roofers Near You">
    <meta name="twitter:description" content="Get best Roofing Experts services today! Affordable roof repairs, emergency fixes, and residential solutions by top-rated pros near you. Fast, reliable support.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
 
    
      <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18337153290",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+18337153290",
        "contactType": "customer support",
        "areaServed": "US"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/roofing#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/roofing",
            "name": "Roofing Services"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/roofing#webpage",
      "url": "https://easyhomeservice.com/roofing",
      "name": "Roofing Services in USA | Residential Roof Repair & Installation",
      "description": "Trusted roofing experts for fast, affordable residential roofing repairs. Find the best roofers near you for leaks, inspections, replacements and complete roof installation services across the USA.",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/roofing#breadcrumb"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/roofing#service",
      "name": "Residential Roofing Repair & Installation Services",
      "serviceType": "Roof Repair, Roof Replacement & Roof Installation",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Easy Home Service helps homeowners connect with trusted roofing experts across the USA for residential roofing repairs, emergency roof fixes, inspections, replacements and complete roof installation services. We support affordable roofing solutions designed to protect your home and increase long-term value.",
      "url": "https://easyhomeservice.com/roofing",
      "potentialAction": {
        "@type": "RequestQuote",
        "name": "Request a Roofing Quote",
        "target": "https://easyhomeservice.com/roofing#get-quote"
      }
    }
  ]
}
</script>

    <?php
}
if (basename($_SERVER['PHP_SELF']) == 'service-location.php') {
    ?>
    <title>Find Easy Home Service Locations Near You | Trusted Local Experts</title>
    <meta name="description" content="Discover Easy Home Service locations across the U.S. Fast, reliable plumbing, electrical, roofing & more — available in your city. Book trusted pros today!">

    
    
        <meta property="og:title" content="Affordable Roofing Experts | Best Roofers Near You">
    <meta property="og:description" content="Get best Roofing Experts services today! Affordable roof repairs, emergency fixes, and residential solutions by top-rated pros near you. Fast, reliable support.">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/service-location">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Affordable Roofing Experts | Best Roofers Near You">
    <meta name="twitter:description" content="Get best Roofing Experts services today! Affordable roof repairs, emergency fixes, and residential solutions by top-rated pros near you. Fast, reliable support.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
    <?php
}
if (basename($_SERVER['PHP_SELF']) == 'testimonial.php') {
    ?>
    <title>Customer Testimonials | Why Homeowners Trust Easy Home Service</title>
    <meta name="description" content="Read real reviews from satisfied customers. See why homeowners choose Easy Home Service for reliable repairs, expert technicians, and exceptional care.">

    
    
        <meta property="og:title" content="Affordable Roofing Experts | Best Roofers Near You">
    <meta property="og:description" content="Get best Roofing Experts services today! Affordable roof repairs, emergency fixes, and residential solutions by top-rated pros near you. Fast, reliable support.">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/testimonial">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Affordable Roofing Experts | Best Roofers Near You">
    <meta name="twitter:description" content="Get best Roofing Experts services today! Affordable roof repairs, emergency fixes, and residential solutions by top-rated pros near you. Fast, reliable support.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
 
   <?php
}

if (basename($_SERVER['PHP_SELF']) == 'window.php') {
    ?>
    <title>Window Repair & Replacement Near You in USA | Window Experts</title>
    <meta name="description" content="From window repairs to full replacements, find local window experts who deliver durable, well-fitted residential window solutions for homes. Get Quote now.">
    <!--<meta name="keywords" content="Window Experts, best home replacement windows, best affordable windows, local window replacement companies, window repair home window repair and replacement near me, best residential windows">-->
        <meta property="og:title" content="Window Repair & Replacement Near You in USA | Window Experts">
    <meta property="og:description" content="From window repairs to full replacements, find local window experts who deliver durable, well-fitted residential window solutions for homes. Get Quote now.">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/window">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Window Repair & Replacement Near You in USA | Window Experts">
    <meta name="twitter:description" content="From window repairs to full replacements, find local window experts who deliver durable, well-fitted residential window solutions for homes. Get Quote now.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
    
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
fbq('init', '1147034926810999', {
  em: 'email@email.com',   // Values will be hashed automatically by the pixel using SHA-256
  ph: '1234567890',
  ...
});fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1765993704178169&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18335516680",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+18335516680",
        "contactType": "customer support",
        "areaServed": "US"
      },
      "logo": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg"
      },
      "location": {
        "@id": "https://easyhomeservice.com#place"
      },
      "sameAs": [
        "https://www.facebook.com/easyhomeservicee",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/window#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/window",
            "name": "Window Services"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/window#webpage",
      "url": "https://easyhomeservice.com/window",
      "name": "Window Installation & Replacement Services",
      "description": "Connect with experienced window professionals for residential window installation, replacement, and repair services across the United States.",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/window#breadcrumb"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com/images/window-banner.jpg",
        "url": "https://easyhomeservice.com/images/window-banner.jpg"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/window#service",
      "name": "Residential Window Installation & Replacement Services",
      "serviceType": "Window Installation, Window Replacement & Window Repair Services",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Easy Home Service helps homeowners connect with trusted window professionals for window installation, replacement, upgrades, and repairs for residential properties across the USA.",
      "url": "https://easyhomeservice.com/window",
      "image": "https://easyhomeservice.com/images/window-banner.jpg",
      "potentialAction": {
        "@type": "QuoteAction",
        "name": "Get Window Service Quote",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://easyhomeservice.com/window#get-quote",
          "actionPlatform": [
            "http://schema.org/DesktopWebPlatform",
            "http://schema.org/MobileWebPlatform"
          ]
        }
      }
    }
  ]
}
</script>


    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'solar.php') {
    ?>
        <title>Solar Panel Repair & Maintenance | Solar Experts in USA</title>
    <meta name="description" content="Planning solar installation or need panel repairs? Connect with solar experts for residential solar solutions designed for long-term performance. Get Quote.">
    <!--<meta name="keywords" content="Solar Expert, commercial solar installers, best solar installers near me, solar panel repair, solar installation, quotation solar service near me">-->
        <meta property="og:title" content="Solar Panel Repair & Maintenance | Solar Experts in USA">
    <meta property="og:description" content="Planning solar installation or need panel repairs? Connect with solar experts for residential solar solutions designed for long-term performance. Get Quote.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/solar">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Solar Panel Repair & Maintenance | Solar Experts in USA">
    <meta name="twitter:description" content="Planning solar installation or need panel repairs? Connect with solar experts for residential solar solutions designed for long-term performance. Get Quote.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
    
        <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18337192289",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      },
      "logo": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+18337192289",
        "contactType": "customer support",
        "areaServed": "US"
      },
      "location": {
        "@id": "https://easyhomeservice.com#place"
      },
      "sameAs": [
        "https://www.facebook.com/easyhomeservice",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/inr-s1-img1-solar.jpg",
      "url": "https://easyhomeservice.com/images/inr-s1-img1-solar.jpg",
      "width": 1200,
      "height": 628,
      "caption": "Solar Installation and Repair Experts",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/solar#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/solar/",
            "name": "Solar Services"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/solar#webpage",
      "url": "https://easyhomeservice.com/solar/",
      "name": "Solar Installation, Repair & Maintenance Services in the USA",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/inr-s1-img1-solar.jpg"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/solar#breadcrumb"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/solar#service",
      "name": "Solar Installation, Repair and Maintenance Services",
      "serviceType": "Solar Panel Installation, Repair & Maintenance",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Easy Home Service connects homeowners and businesses across the USA with trusted solar professionals for installation, repair, maintenance, and system upgrades.",
      "url": "https://easyhomeservice.com/solar/",
      "image": "https://easyhomeservice.com/images/inr-s1-img1-solar.jpg",
      "potentialAction": {
        "@type": "RequestQuote",
        "name": "Request a Solar Quote",
        "target": "https://easyhomeservice.com/solar#get-quote"
      }
    }
  ]
}
</script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'hvac.php') {
    ?>
       <title>Residential HVAC Services in the USA | 24*7 HVAC Experts</title>
    <meta name="description" content="From HVAC repairs to full system installations, find AC & emergency heating and cooling service providers who keep your home comfortable in every season.">
    <!--<meta name="keywords" content="hvac services expert, hvac services commercial, Residential HVAC Services Experts, Residential HVAC Services">-->

        <meta property="og:title" content="Residential HVAC Services in the USA | 24*7 HVAC Experts">
    <meta property="og:description" content="From HVAC repairs to full system installations, find AC & emergency heating and cooling service providers who keep your home comfortable in every season.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/hvac">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Residential HVAC Services in the USA | 24*7 HVAC Experts">
    <meta name="twitter:description" content="From HVAC repairs to full system installations, find AC & emergency heating and cooling service providers who keep your home comfortable in every season.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
<script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
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
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18338010863",
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
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+18338010863",
          "contactType": "customer support",
          "areaServed": "US"
        }
      ],
      "location": {
        "@id": "https://easyhomeservice.com#place"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/inr-s1-img1-hvac.jpg",
      "url": "https://easyhomeservice.com/images/inr-s1-img1-hvac.jpg",
      "width": "1200",
      "height": "628",
      "caption": "HVAC Experts by Easy Home Service",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/hvac#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/hvac",
            "name": "HVAC"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/hvac#webpage",
      "url": "https://easyhomeservice.com/hvac",
      "name": "Residential HVAC Services in the USA | 24*7 HVAC Experts",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-08-21T12:00:00+00:00",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/hvac-side-mob.jpg"
      },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/hvac#breadcrumb"
      }
    },
    {
      "@type": "Person",
      "@id": "https://easyhomeservice.com/hvac#author",
      "name": "Easy Home Service Editorial Team",
      "image": {
        "@type": "ImageObject",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service Team",
        "inLanguage": "en-US"
      },
      "worksFor": {
        "@id": "https://easyhomeservice.com#organization"
      }
    }
  ]
}
</script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'bathroom.php') {
    ?>
       <title>Professional Bathroom Remodeling Experts Across United States</title>
    <meta name="description" content="Revamp your bathroom with renovation, repair & installation services built around your space. Find custom bathroom designs with minimal disruption today.">
    <!--<meta name="keywords" content="bathroom remodeling experts, bathroom installers, affordable bathroom renovations, bathroom repair services, Bathroom Installation Services">-->
        <meta property="og:title" content="Professional Bathroom Remodeling Experts Across United States">
    <meta property="og:description" content="Revamp your bathroom with renovation, repair & installation services built around your space. Find custom bathroom designs with minimal disruption today.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/bathroom">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Professional Bathroom Remodeling Experts Across United States">
    <meta name="twitter:description" content="Revamp your bathroom with renovation, repair & installation services built around your space. Find custom bathroom designs with minimal disruption today.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
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
        "addressCountry": "US"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com/#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18337083179",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      },
      "logo": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com/#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+18337083179",
        "contactType": "customer support",
        "areaServed": "US"
      },
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
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/inr-s1-img1-bath.jpg",
      "url": "https://easyhomeservice.com/images/inr-s1-img1-bath.jpg",
      "width": 1200,
      "height": 628,
      "caption": "Bathroom Remodeling by Easy Home Service",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/bathroom#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/bathroom",
            "name": "Bathroom Remodeling"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/bathroom#webpage",
      "url": "https://easyhomeservice.com/bathroom",
      "name": "Bathroom Remodeling & Renovation Services in the USA",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/inr-s1-img1-bath.jpg"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/bathroom#breadcrumb"
      },
      "inLanguage": "en-US"
    }
  ]
}
</script>


    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'kitchen.php') {
    ?>
   <title>Best Kitchen Expert Services | Remodeling & Upgrade across USA</title>
    <meta name="description" content="Planning a kitchen refresh or repair? Find kitchen remodeling experts for smart, functional designs & reliable renovation solutions across the USA. Get in touch.">
    <!--<meta name="keywords" content="kitchen experts, kitchen remodeling experts, Kitchen repair services, small kitchen renovation cost, kitchen repair specialists, kitchen remodeling service, kitchen remodel service">-->
    <meta property="og:title" content="Best Kitchen Expert Services | Remodeling & Upgrade across USA">
    <meta property="og:description" content="Planning a kitchen refresh or repair? Find kitchen remodeling experts for smart, functional designs & reliable renovation solutions across the USA. Get in touch.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/kitchen">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Best Kitchen Expert Services | Remodeling & Upgrade across USA">
    <meta name="twitter:description" content="Planning a kitchen refresh or repair? Find kitchen remodeling experts for smart, functional designs & reliable renovation solutions across the USA. Get in touch.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
<script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/kitchen#service",
      "name": "Kitchen Remodeling & Renovation Services",
      "serviceType": "Kitchen Remodeling, Kitchen Renovation & Kitchen Repair Services",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Easy Home Service connects homeowners with trusted kitchen remodeling professionals for complete kitchen renovations, cabinet upgrades, countertop installation, and modern kitchen transformations.",
      "url": "https://easyhomeservice.com/kitchen",
      "image": "https://easyhomeservice.com/images/inr-s1-img1-kitchen.jpg",
      "potentialAction": {
        "@type": "QuoteAction",
        "name": "Get Kitchen Remodeling Quote",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://easyhomeservice.com/kitchen#get-quote",
          "actionPlatform": [
            "http://schema.org/DesktopWebPlatform",
            "http://schema.org/MobileWebPlatform"
          ]
        }
      }
    }
  ]
}
</script>

    <?php
}



 if (basename($_SERVER['PHP_SELF']) == 'gutter-test.php') {
    ?>
  <script>var continuallySettings = { appID: "687y3n6k8rk5" };</script>

<script src="https://cdn-app.continual.ly/js/embed/continually-embed.latest.min.js"></script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'gutter.php') {
    ?>
    <title>Best Gutter Experts Near You | Repair & Replacement Services</title>
    <meta name="description" content="Get trusted local Gutter repair, replacement, and installation services. Affordable Best Gutter Experts Near You ready to protect your home. Free estimates available!">
    <!--<meta name="keywords" content="Gutter experts, gutter repair and replacement, local gutter repair, gutter repair services, gutter services, gutter repair and installation, gutter replacement companies.">-->
    <meta property="og:title" content="Best Gutter Experts Near You | Repair & Replacement Services">
    <meta property="og:description" content="Get trusted local Gutter repair, replacement, and installation services. Affordable Best Gutter Experts Near You ready to protect your home. Free estimates available!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/gutter">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Best Gutter Experts Near You | Repair & Replacement Services">
    <meta name="twitter:description" content="Get trusted local Gutter repair, replacement, and installation services. Affordable Best Gutter Experts Near You ready to protect your home. Free estimates available!">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
    <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
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
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+13074161843",
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
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+13074161843",
          "contactType": "customer support",
          "areaServed": "US"
        }
      ],
      "location": {
        "@id": "https://easyhomeservice.com#place"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/inr-s1-img1-gutter.jpg",
      "url": "https://easyhomeservice.com/images/inr-s1-img1-gutter.jpg",
      "width": "1200",
      "height": "628",
      "caption": "Gutter Services by Easy Home Service",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/gutter#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/gutter",
            "name": "Gutter"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/gutter#webpage",
      "url": "https://easyhomeservice.com/gutter",
      "name": "Gutter Services | Cleaning, Repair & Installation | Easy Home Service",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-08-21T12:00:00+00:00",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/inr-s1-img1-gutter.jpg"
      },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/gutter#breadcrumb"
      }
    },
    {
      "@type": "Person",
      "@id": "https://easyhomeservice.com/gutter#author",
      "name": "Easy Home Service Editorial Team",
      "image": {
        "@type": "ImageObject",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service Team",
        "inLanguage": "en-US"
      },
      "worksFor": {
        "@id": "https://easyhomeservice.com#organization"
      }
    },
    {
      "@type": "Article",
      "headline": "Best Gutter Experts Near You | Repair & Replacement Services",
      "keywords": "Gutter experts, gutter repair and replacement, local gutter repair, gutter repair services, gutter services, gutter repair and installation, gutter replacement companies.",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-08-21T12:00:00+00:00",
      "author": {
        "@id": "https://easyhomeservice.com/gutter#author"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "description": "Get trusted local Gutter repair, replacement, and installation services. Affordable Best Gutter Experts Near You ready to protect your home. Free estimates available!",
      "name": "Gutter Services | Cleaning, Repair & Installation | Easy Home Service",
      "@id": "https://easyhomeservice.com/gutter#richSnippet",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/gutter#webpage"
      },
      "image": {
        "@id": "http://easyhomeservice.com/images/inr-s1-img1-gutter.jpg"
      },
      "inLanguage": "en-US",
      "mainEntityOfPage": {
        "@id": "https://easyhomeservice.com/gutter#webpage"
      },
      "wordCount": 1600
    }
  ]
}
</script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'walktub.php') {
    ?>
        <title>Walk In Tub Installation & Repair in USA | Walk Tub Experts</title>
    <meta name="description" content="Transform your bathroom with bath-tub & shower solutions designed for comfort & safety. Find trusted walk-in tub experts across the nation. Get a quote today.">
    <!--<meta name="keywords" content="Affordable walk in bathtubs, walk in tub installation, cost of walk in tub top, walk in tubs, bathtub repairs near me, bath repair specialist">-->
    <meta property="og:title" content="Walk In Tub Installation & Repair in USA | Walk Tub Experts">
    <meta property="og:description" content="Transform your bathroom with bath-tub & shower solutions designed for comfort & safety. Find trusted walk-in tub experts across the nation. Get a quote today.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/walktub">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Walk In Tub Installation & Repair in USA | Walk Tub Experts">
    <meta name="twitter:description" content="Transform your bathroom with bath-tub & shower solutions designed for comfort & safety. Find trusted walk-in tub experts across the nation. Get a quote today.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
     <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HomeAndConstructionBusiness",
      "@id": "https://easyhomeservice.com/walktub#business",
      "name": "Easy Home Service – Walk-In Tub Services",
      "url": "https://easyhomeservice.com/walktub",
      "telephone": "+18333809800",
      "priceRange": "$$",
      "description": "Easy Home Service connects homeowners with walk-in tub installation and repair experts offering safe, senior-friendly bathtub solutions across the USA.",
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+18333809800",
        "contactType": "walk-in tub service support",
        "areaServed": "US",
        "availableLanguage": "English"
      }
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/walktub#service",
      "serviceType": "Walk-In Tub Installation & Repair",
      "provider": {
        "@id": "https://easyhomeservice.com/walktub#business"
      },
      "description": "Professional walk-in tub installation, bathtub replacement, walk-in tub and shower combinations, and repair services designed for safety, comfort, and accessibility.",
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "availableChannel": {
        "@type": "ServiceChannel",
        "servicePhone": {
          "@type": "ContactPoint",
          "telephone": "+18333809800",
          "contactType": "customer support"
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/walktub#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://easyhomeservice.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Walk-In Tubs",
          "item": "https://easyhomeservice.com/walktub"
        }
      ]
    }
  ]
}
</script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'handyman.php') {
    ?>
    <title>Handyman Experts | Affordable & Top-Rated Home Services</title>
    <meta name="description" content="Get affordable handyman experts near you and home maintenance plans from Reliable help for top-rated affordable handyman services, repairs, installations">
    <!--<meta name="keywords" content="Top Rated Handyman Contractors,  handyman solutions, handyman contractor near me, general contractor handyman near me">-->
    <meta property="og:title" content="Handyman Experts | Affordable & Top-Rated Home Services">
    <meta property="og:description" content="Get affordable handyman experts near you and home maintenance plans from Reliable help for top-rated affordable handyman services, repairs, installations">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/handyman">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Handyman Experts | Affordable & Top-Rated Home Services">
    <meta name="twitter:description" content="Get affordable handyman experts near you and home maintenance plans from Reliable help for top-rated affordable handyman services, repairs, installations">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">
  <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com#organization",
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
        "addressCountry": "US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+18333809800",
        "contactType": "customer support",
        "areaServed": "US"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/handyman#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/handyman",
            "name": "Handyman Services"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/handyman#webpage",
      "url": "https://easyhomeservice.com/handyman",
      "name": "Handyman Services | Reliable Home Repairs & Maintenance",
      "description": "Connect with trusted handyman professionals for home repairs, installations, maintenance, and small improvement projects across the USA.",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/handyman#breadcrumb"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com/images/handymanside.jpg",
        "url": "https://easyhomeservice.com/images/handymanside.jpg",
        "width": 1200,
        "height": 628
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/handyman#service",
      "name": "Handyman Repair & Maintenance Services",
      "serviceType": "General Handyman Services, Home Repairs, Installations & Maintenance",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Easy Home Service helps homeowners across the USA connect with experienced handyman professionals for reliable home repairs, maintenance, installations, and improvement services.",
      "url": "https://easyhomeservice.com/handyman",
      "potentialAction": {
        "@type": "QuoteAction",
        "name": "Get Handyman Help",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://easyhomeservice.com/handyman#get-quote",
          "actionPlatform": [
            "http://schema.org/DesktopWebPlatform",
            "http://schema.org/MobileWebPlatform"
          ]
        }
      }
    }
  ]
}
</script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'homewarranty.php') {
    ?>
       <title>Affordable Home Warranty experts Services | Best Appliance Protection</title>
    <meta name="description" content="Find affordable Home Warranty experts and appliance warranty services near you.commercial and residential warranty companies offering complete care and protection plans.">
    <meta name="keywords" content="home warranty inspection, commercial warranty companies, best home appliances, warranty best appliance warranty, total protect home warranty, Affordable home warranty near me, Home Warranty Service In Your Area, complete care home warranty">
    <meta property="og:title" content="Affordable Home Warranty experts Services | Best Appliance Protection">
    <meta property="og:description" content="Find affordable Home Warranty experts and appliance warranty services near you.commercial and residential warranty companies offering complete care and protection plans.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyhomeservice.com/homewarranty">
    <meta property="og:image" content="https://easyhomeservice.com/images/how-it-works-1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Affordable Home Warranty experts Services | Best Appliance Protection">
    <meta name="twitter:description" content="Find affordable Home Warranty experts and appliance warranty services near you.commercial and residential warranty companies offering complete care and protection plans.">
    <meta name="twitter:image" content="https://easyhomeservice.com/images/banner_prod.png">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">    
    
      <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
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
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+13074161843",
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
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+13074161843",
          "contactType": "customer support",
          "areaServed": "US"
        }
      ],
      "location": {
        "@id": "https://easyhomeservice.com#place"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/sideHOMEWARRANTY.webp",
      "url": "https://easyhomeservice.com/images/sideHOMEWARRANTY.webp",
      "width": "1200",
      "height": "628",
      "caption": "Home Warranty by Easy Home Service",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/homewarranty#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/homewarranty",
            "name": "Home Warranty"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/homewarranty#webpage",
      "url": "https://easyhomeservice.com/homewarranty",
      "name": "Home Warranty Plans | Affordable Coverage & Protection | Easy Home Service",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-08-21T12:00:00+00:00",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/sideHOMEWARRANTY.webp"
      },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/homewarranty#breadcrumb"
      }
    },
    {
      "@type": "Person",
      "@id": "https://easyhomeservice.com/homewarranty#author",
      "name": "Easy Home Service Editorial Team",
      "image": {
        "@type": "ImageObject",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service Team",
        "inLanguage": "en-US"
      },
      "worksFor": {
        "@id": "https://easyhomeservice.com#organization"
      }
    },
    {
      "@type": "Article",
      "headline": "Affordable Home Warranty experts Services | Best Appliance Protection",
      "keywords": "home warranty inspection, commercial warranty companies, best home appliances, warranty best appliance warranty, total protect home warranty, Affordable home warranty near me, Home Warranty Service In Your Area, complete care home warranty",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-08-21T12:00:00+00:00",
      "author": {
        "@id": "https://easyhomeservice.com/homewarranty#author"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "description": "Find affordable Home Warranty experts and appliance warranty services near you.commercial and residential warranty companies offering complete care and protection plans.",
      "name": "Home Warranty Plans | Affordable Coverage & Protection | Easy Home Service",
      "@id": "https://easyhomeservice.com/homewarranty#richSnippet",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/homewarranty#webpage"
      },
      "image": {
        "@id": "https://easyhomeservice.com/images/sideHOMEWARRANTY.webp"
      },
      "inLanguage": "en-US",
      "mainEntityOfPage": {
        "@id": "https://easyhomeservice.com/homewarranty#webpage"
      },
      "wordCount": 1600
    }
  ]
}
</script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'about.php') {
    ?>
    <title>About Us - Your Trusted Home Improvement Experts</title>
    <meta name="description" content="Learn about our passion for transforming homes through expert installation, repair, and upgrades. We create spaces that reflect your vision and enhance your lifestyle.">
    <meta name="keywords" content="home improvement experts, home services near me, installation and repair, upgrade services, about home improvement">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'contact.php') {
    ?>
    <title>Contact Us | Home Improvement Services - Installation, Repair, and Upgrades</title>
    <meta name="description" content="Contact us for expert home improvement services. Our team is ready to assist you with your installation, repair, and upgrade needs. Reach out today for a free consultation.">
    <meta name="keywords" content="contact home improvement services, installation, repair, upgrade, get in touch, home services contact">
    
    <?php
}
if (basename($_SERVER['PHP_SELF']) == 'door.php') {
    ?>
    <title>Door Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Get expert door installation and repair services for homes and businesses. Interior, exterior, sliding, glass, and security doors.">
    <meta name="keywords" content="door installation, door repair, security doors, sliding doors, home doors, replace a sliding glass door">
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'flooring.php') {
    ?>
    <title>Residential Flooring Repair Services for Modern Homes in USA</title>
    <meta name="title" content="Residential Flooring Repair Services for Modern Homes in USA">
    <meta name="description" content="Connect with trusted flooring experts for repairs & installations. Get the right flooring solution for your space, style & budget. Call +17733776875 now.">
    <!--<meta name="keywords" content="Residential flooring Experts, floor experts, best flooring companies near me, most affordable flooring, flooring in modern homes">-->
   <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+17733776875",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+17733776875",
        "contactType": "customer support",
        "areaServed": "US"
      },
      "logo": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg"
      },
      "sameAs": [
        "https://www.facebook.com/easyhomeservicee",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/flooring#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/flooring",
            "name": "Flooring Services"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/flooring#webpage",
      "url": "https://easyhomeservice.com/flooring",
      "name": "Residential Flooring Installation & Repair Services",
      "description": "Connect with trusted flooring professionals for residential flooring installation, repair, and upgrades including hardwood, laminate, vinyl, tile, carpet, and stone flooring across the USA.",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/flooring#breadcrumb"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "@id": "https://easyhomeservice.com/images/flooring_bnr_mob.jpg",
        "url": "https://easyhomeservice.com/images/flooring_bnr_mob.jpg"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/flooring#service",
      "name": "Residential Flooring Installation & Repair Services",
      "serviceType": "Hardwood, Laminate, Vinyl, Tile, Carpet & Stone Flooring Services",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Easy Home Service helps homeowners across the USA connect with experienced flooring professionals for residential flooring installation, repair, replacement, and upgrades across multiple flooring types.",
      "url": "https://easyhomeservice.com/flooring",
      "image": [
        "https://easyhomeservice.com/images/win-floor/hardwood-flooring.jpg",
        "https://easyhomeservice.com/images/win-floor/liminate-flooring.jpg",
        "https://easyhomeservice.com/images/win-floor/Vinyl%20Flooring.png",
        "https://easyhomeservice.com/images/win-floor/carpet-flooring.jpg",
        "https://easyhomeservice.com/images/win-floor/tile-flooring.jpg",
        "https://easyhomeservice.com/images/win-floor/stone-flooring.jpg"
      ],
      "potentialAction": {
        "@type": "QuoteAction",
        "name": "Get Flooring Quote",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://easyhomeservice.com/flooring#get-quote",
          "actionPlatform": [
            "http://schema.org/DesktopWebPlatform",
            "http://schema.org/MobileWebPlatform"
          ]
        }
      }
    }
  ]
}
</script>

    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'homesecurity.php') {
    ?>
    <title>Home Security Solutions | Easy Home Service</title>
    <meta name="description" content="Secure your home with expert home security services. alliance home security, Cameras, alarms, smart locks, and surveillance systems.">
    <meta name="keywords" content="home security, security cameras, alarm systems, smart locks, surveillance, alliance home security">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'painting.php') {
    ?>
    <title>Interior & Exterior Painting Services | Easy Home Service</title>
    <meta name="description" content="Get professional Painting Services for Montana spray paint for homes & businesses. Interior & exterior painting for walls, ceilings & more.">
    <meta name="keywords" content="painting services, house painting, interior painting, exterior painting, wall painting, vallejo paints, montana spray paint">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'plumbing.php') {
    ?>
    <title>Plumbing Services Experts | Repairs & Installations</title>
    <meta name="description" content="Get Residential Plumbingl Services Experts, including repairs, installations, leak detection, pipe replacement, and fixture upgrades.">
    <!--<meta name="keywords" content="expert plumbing services, residential plumbing experts, local kitchen plumbing experts, plumbing repair expert, Emergency Plumbing Services bathroom plumbing services, Kitchen Plumbing Services, Residential Plumbing">-->
    <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
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
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18337192289",
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
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+13074161843",
          "contactType": "customer support",
          "areaServed": "US",
          "availableLanguage": ["en"]
        }
      ],
      "location": {
        "@id": "https://easyhomeservice.com#place"
      },
      "sameAs": [
        "https://www.facebook.com/easyhomeservicee/",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/win-plumb/plumbing-1.1.jpg",
      "url": "https://easyhomeservice.com/images/win-plumb/plumbing-1.1.jpg",
      "width": "1200",
      "height": "628",
      "caption": "Water Heater Repair & Installation | Plumbing Services Experts",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/plumbing#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/plumbing",
            "name": "Plumbing"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/plumbing#webpage",
      "url": "https://easyhomeservice.com/plumbing",
      "name": "Residential Plumbing Services Experts | Repairs & Installations",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-12-10T12:00:00+00:00",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/win-plumb/plumbing-1.1.jpg"
      },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/plumbing#breadcrumb"
      }
    },
    {
      "@type": "Person",
      "@id": "https://easyhomeservice.com/plumbing#author",
      "name": "Easy Home Service Editorial Team",
      "image": {
        "@type": "ImageObject",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service Team",
        "inLanguage": "en-US"
      },
      "worksFor": {
        "@id": "https://easyhomeservice.com#organization"
      }
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/plumbing#service",
      "serviceType": "Residential Plumbing Services",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": [
        "New York, NY","Los Angeles, CA","Chicago, IL","Houston, TX","Phoenix, AZ",
        "Philadelphia, PA","San Antonio, TX","San Diego, CA","Dallas, TX","San Jose, CA",
        "Austin, TX","Jacksonville, FL","Fort Worth, TX","Columbus, OH","Charlotte, NC",
        "San Francisco, CA","Indianapolis, IN","Seattle, WA","Denver, CO","Washington, DC",
        "Boston, MA","El Paso, TX","Nashville, TN","Detroit, MI","Oklahoma City, OK",
        "Portland, OR","Las Vegas, NV","Memphis, TN","Louisville, KY","Baltimore, MD",
        "Milwaukee, WI","Albuquerque, NM","Tucson, AZ","Fresno, CA","Mesa, AZ",
        "Sacramento, CA","Atlanta, GA","Kansas City, MO","Colorado Springs, CO","Miami, FL",
        "Raleigh, NC","Omaha, NE","Long Beach, CA","Virginia Beach, VA","Oakland, CA",
        "Minneapolis, MN","Tulsa, OK","Arlington, TX","New Orleans, LA","Wichita, KS",
        "Tampa, FL","Cleveland, OH","Bakersfield, CA","Aurora, CO","Anaheim, CA",
        "Honolulu, HI","Santa Ana, CA","Riverside, CA","Corpus Christi, TX","Lexington, KY",
        "Henderson, NV","Stockton, CA","Saint Paul, MN","Cincinnati, OH","St. Louis, MO",
        "Pittsburgh, PA","Greensboro, NC","Lincoln, NE","Anchorage, AK","Plano, TX",
        "Orlando, FL","Irvine, CA","Newark, NJ","Toledo, OH","Durham, NC",
        "Chula Vista, CA","Fort Wayne, IN","Jersey City, NJ","St. Petersburg, FL","Laredo, TX",
        "Madison, WI","Chandler, AZ","Buffalo, NY","Lubbock, TX","Scottsdale, AZ",
        "Reno, NV","Glendale, AZ","Gilbert, AZ","Winston-Salem, NC","North Las Vegas, NV",
        "Norfolk, VA","Chesapeake, VA","Fremont, CA","Garland, TX","Irving, TX",
        "Hialeah, FL","Richmond, VA","Boise, ID","Spokane, WA","Baton Rouge, LA",
        "Tacoma, WA","San Bernardino, CA","Modesto, CA","Fontana, CA","Des Moines, IA",
        "Fayetteville, NC","Akron, OH","Shreveport, LA","Yonkers, NY","Huntington Beach, CA",
        "Montgomery, AL","Little Rock, AR","Amarillo, TX","Mobile, AL","Salt Lake City, UT",
        "Grand Rapids, MI","Overland Park, KS","Tallahassee, FL","Huntsville, AL","Knoxville, TN",
        "Augusta, GA","Providence, RI","New Haven, CT","Pasadena, CA","Miramar, FL"
      ],
      "description": "Expert plumbing services including repairs, installations, leak detection, pipe replacement, water heater repair, bathroom plumbing, kitchen plumbing, and emergency plumbing services.",
      "url": "https://easyhomeservice.com/plumbing",
      "image": {
        "@id": "https://easyhomeservice.com/images/win-plumb/plumbing-1.1.jpg"
      },
      "potentialAction": {
        "@type": "QuoteAction",
        "target": "https://easyhomeservice.com/plumbing#get-quote",
        "name": "Get A Plumbing Quote"
      }
    },
    {
      "@type": "Article",
      "@id": "https://easyhomeservice.com/plumbing#richSnippet",
      "headline": "Residential Plumbing Services Experts | Repairs & Installations",
      "keywords": "expert plumbing services, residential plumbing experts, local kitchen plumbing experts, plumbing repair expert, Emergency Plumbing Services, bathroom plumbing services, Kitchen Plumbing Services, Residential Plumbing",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-12-10T12:00:00+00:00",
      "author": {
        "@id": "https://easyhomeservice.com/plumbing#author"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "description": "Get professional plumbing services including repairs, leak detection, fixture upgrades, pipe replacement, kitchen plumbing, bathroom plumbing, and emergency plumbing services.",
      "name": "Residential Plumbing Services Experts | Repairs & Installations",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/plumbing#webpage"
      },
      "image": {
        "@id": "https://easyhomeservice.com/images/win-plumb/plumbing-1.1.jpg"
      },
      "mainEntityOfPage": {
        "@id": "https://easyhomeservice.com/plumbing#webpage"
      },
      "inLanguage": "en-US",
      "wordCount": 1500
    }
  ]
}
</script>
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'atticwholehousefan.php') {
    ?>
    <title>Attic & Whole House Fan Installation | Easy Home Service</title>
    <meta name="description" content="Improve air circulation and reduce energy costs with the best whole house attic fan installation. Enjoy energy-efficient cooling and better indoor air quality.">
    <meta name="keywords" content="attic fan installation, whole house fan, ventilation, home cooling, attic ventilation, best whole house attic fan">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'countertops.php') {
    ?>
    <title>Countertop Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Find expert countertop fabricators near me for top-quality installation & repair. We specialize in granite, quartz, marble & laminate countertops.">
    <meta name="keywords" content="countertop installation, kitchen countertops, granite countertops, quartz countertops, bathroom countertops, countertop fabricators near me">
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'drywallsheetrock.php') {
    ?>
    <title>Drywall & Sheetrock Installation | Easy Home Service</title>
    <meta name="description" content="Expert drywall and sheetrock installation, repair, and finishing for smooth, durable walls. Specializing in paperless sheetrock for a stronger, mold-resistant finish.">
    <meta name="keywords" content="drywall installation, sheetrock repair, wall finishing, drywall patching, home renovation, paperless sheetrock drywall">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'furniture.php') {
    ?>
    <title>Custom Furniture, Repair & Assembly Services | Easy Home Service</title>
    <meta name="description" content="Find expert furniture repair near me for professional assembly and custom furniture solutions. Quality craftsmanship for home and office furniture restoration.">
    <meta name="keywords" content="furniture assembly, custom furniture, home furniture, office furniture, furniture repair, furniture repair near me">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'insulation.php') {
    ?>
    <title>Home Insulation Services | Easy Home Service</title>
    <meta name="description" content="Improve energy efficiency with professional Mobile home insulation services. Spray foam, fiberglass, and attic insulation.">
    <meta name="keywords" content="home insulation, attic insulation, spray foam insulation, fiberglass insulation, energy efficiency, insulated skirting for mobile home">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'mirrorinstall.php') {
    ?>
    <title>Mirror Installation & Replacement | Easy Home Service</title>
    <meta name="description" content="Professional mirror installation and replacement services for bathrooms, walls, gym mirror and custom mirrors.">
    <meta name="keywords" content="mirror installation, custom mirrors, bathroom mirrors, wall mirrors, mirror replacement, gym mirror installation near me">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'stonepolish.php') {
    ?>
    <title>Stone Polishing & Restoration | Easy Home Service</title>
    <meta name="description" content="Restore the shine and durability of your stone surfaces with expert polished stone services. Enhance the beauty and longevity of your floors, countertops, and more!">
    <meta name="keywords" content="stone polishing, marble restoration, granite polishing, floor polishing, stone repair, polished stone">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'wallpaper.php') {
    ?>
    <title>Wallpaper Installation & Removal | Easy Home Service</title>
    <meta name="description" content="Get professional wallpaper installation & removal in Chicago, NYC, Austin, San Diego & Denver. Wide range of styles & patterns to transform your space!">
    <meta name="keywords" content="wallpaper installation, wallpaper removal, wall decor, home wallpaper, custom wallpaper, wallpaper installation chicago, wallpaper installation nyc, wallpaper installation austin, wallpaper installation denver">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'concrete.php') {
    ?>
    <title>Concrete Installation & Repair | Easy Home Service</title>
    <meta name="description" content="High-quality concrete installation and repair services for driveways, patios, and foundations.">
    <meta name="keywords" content="concrete services, concrete repair, driveway installation, patio concrete, foundation concrete, concrete patio installers">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'drainage.php') {
    ?>
    <title>Drainage Solutions & Installation | Easy Home Service</title>
    <meta name="description" content="Expert drainage cleaning services near you! We specialize in professional drainage system installation and repair to prevent water damage. Call now!">
    <meta name="keywords" content="drainage services, water drainage, yard drainage, drainage installation, waterproofing, drainage cleaning services near you">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'fencing.php') {
    ?>
    <title>Fencing Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Secure your property with expert fencing installation and repair. Wood, vinyl, metal, plastic, aluminum and more.">
    <meta name="keywords" content="fencing installation, fence repair, wood fence, vinyl fence, metal fencing, plastic fence installer, aluminum fence installers">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'foundation.php') {
    ?>
    <title>Foundation Repair & Installation | Easy Home Service</title>
    <meta name="description" content="Expert foundation repair and installation services. Strengthen and protect your home's structure.">
    <meta name="keywords" content="foundation repair, home foundation, concrete foundation, structural repair">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'garage.php') {
    ?>
    <title>Garage Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Professional garage door installation, repair, and maintenance services for residential and commercial.">
    <meta name="keywords" content="garage door repair, garage installation, garage maintenance, automatic garage doors, commercial garage door installation">
    
   
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'landsurveyor.php') {
    ?>
    <title>Professional Land Surveying Services | Easy Home Service</title>
    <meta name="description" content="Accurate land surveying services for residential and commercial properties. Boundary and site surveys.">
    <meta name="keywords" content="land surveying, property survey, boundary survey, site survey, construction survey">
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'masonary.php') {
    ?>
    <title>Expert Masonry Services, Repair & Complete | Easy Home Service</title>
    <meta name="description" content="High-quality masonry services for Repair & Complete, including brickwork, stonework, and concrete construction for homes and businesses.">
    <meta name="keywords" content="masonry services, brickwork, stonework, concrete masonry, home construction">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'bathtub.php') {
    ?>
    <title>Bathtub Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Get expert bathtub installation and repair services. Upgrade your bathroom with high-quality tubs and fixtures.">
    <meta name="keywords" content="bathtub installation, bathtub repair, bathroom remodeling, tub replacement">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'cabinet.php') {
    ?>
    <title>Custom Cabinets & Installation | Easy Home Service</title>
    <meta name="description" content="High-quality custom cabinet design, installation, and repair for kitchens, bathrooms, and storage spaces.">
    <meta name="keywords" content="custom cabinets, kitchen cabinets, cabinet installation, cabinet repair">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'carpentry.php') {
    ?>
    <title>Professional Carpentry Services | Easy Home Service</title>
    <meta name="description" content="Expert carpentry services for custom woodwork, trim, furniture, and home renovations.">
    <meta name="keywords" content="carpentry services, custom woodwork, home renovation, trim installation">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'glassrepair.php') {
    ?>
    <title>Glass Repair & Replacement | Easy Home Service</title>
    <meta name="description" content="Professional glass repair and replacement services for windows, doors, mirrors, and more.">
    <meta name="keywords" content="glass repair, window glass replacement, mirror repair, door glass repair">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'handymanappliance.php') {
    ?>
    <title>Handyman & Appliance Repair | Easy Home Service</title>
    <meta name="description" content="Reliable handyman and appliance repair services. Fix household appliances quickly and efficiently.">
    <meta name="keywords" content="handyman services, appliance repair, home repairs, small fixes">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'architects.php') {
    ?>
    <title>Professional Architects & Design | Easy Home Service</title>
    <meta name="description" content="Hire experienced architects for home and commercial building designs. Custom and modern plans available.">
    <meta name="keywords" content="architects, home design, building design, architectural services">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'architecturalplandesign.php') {
    ?>
    <title>Custom Architectural Plan Design | Easy Home Service</title>
    <meta name="description" content="Get expert architectural planning and design services for your new home or renovation project.">
    <meta name="keywords" content="architectural planning, home blueprints, house design, building plans">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'customhomes.php') {
    ?>
    <title>Custom Home Building Services | Easy Home Service</title>
    <meta name="description" content="Design and build your dream home with expert custom home construction and remodeling services.">
    <meta name="keywords" content="custom homes, home construction, house builders, home design">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'decoratorsanddesigners.php') {
    ?>
    <title>Interior Decorating & Design | Easy Home Service</title>
    <meta name="description" content="Professional interior decorators and designers to transform your home into a stylish space.">
    <meta name="keywords" content="interior design, home decorators, home styling, professional designers">
    
    <?php
}

if (basename($_SERVER['PHP_SELF']) == 'homemediatv.php') {
    ?>
    <title>Home Media & TV Installation | Easy Home Service</title>
    <meta name="description" content="Professional home media setup, TV wall mounting, and sound system installation services.">
    <meta name="keywords" content="home media setup, TV installation, sound system installation, home entertainment">
    
    <?php
}
 elseif (basename($_SERVER['PHP_SELF']) == 'roomadditions.php') {
    ?>
    <title>Room Additions & Home Expansion | Easy Home Service</title>
    <meta name="description" content="Expand your living space with custom room additions and home expansion projects.">
    <meta name="keywords" content="room additions, home expansion, house extensions, add-on rooms">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'cleaning.php') {
    ?>
    <title>Home & Office Cleaning Services | Easy Home Service</title>
    <meta name="description" content="Professional cleaning services for homes and offices, including deep cleaning and sanitization.">
    <meta name="keywords" content="cleaning services, home cleaning, office cleaning, deep cleaning">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'dryrot.php') {
    ?>
    <title>Dry Rot Repair & Prevention | Easy Home Service</title>
    <meta name="description" content="Expert dry rot inspection, repair, and prevention services for homes and buildings.">
    <meta name="keywords" content="dry rot repair, wood rot removal, home maintenance, dry rot prevention">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'homeinspection.php') {
    ?>
    <title>Home Inspection Services | Easy Home Service</title>
    <meta name="description" content="Get a professional home inspection to assess structural integrity, safety, and potential issues before buying or selling.">
    <meta name="keywords" content="home inspection, house inspection, property inspection, real estate inspection">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'junkremoval.php') {
    ?>
    <title>Junk Removal & Hauling | Easy Home Service</title>
    <meta name="description" content="Fast and affordable junk removal services for homes and businesses. Clear out clutter today!">
    <meta name="keywords" content="junk removal, waste disposal, trash hauling, debris removal">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'locksmith.php') {
    ?>
    <title>Professional Locksmith Services | Easy Home Service</title>
    <meta name="description" content="Get expert locksmith services for home, car, and business security, including lock installation and emergency lockouts.">
    <meta name="keywords" content="locksmith, lock installation, emergency locksmith, key duplication">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'rental.php') {
    ?>
    <title>Rental Equipment & Tools | Easy Home Service</title>
    <meta name="description" content="Rent tools and equipment for construction, home improvement, and landscaping projects.">
    <meta name="keywords" content="rental equipment, tool rental, construction rental, home improvement rental">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'showerglassinstalldoor.php') {
    ?>
    <title>Shower Glass Installation & Doors | Easy Home Service</title>
    <meta name="description" content="Upgrade your bathroom with custom shower glass installation and high-quality shower doors.">
    <meta name="keywords" content="shower glass installation, glass shower doors, frameless shower doors">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'christmaslights.php') {
    ?>
    <title>Christmas Lights Installation | Easy Home Service</title>
    <meta name="description" content="Professional Christmas light installation for homes and businesses. Make your holidays shine!">
    <meta name="keywords" content="Christmas lights installation, holiday lighting, festive decorations">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'smallprojects.php') {
    ?>
    <title>Small Home Projects & Repairs | Easy Home Service</title>
    <meta name="description" content="Affordable solutions for small home improvement projects and minor repairs.">
    <meta name="keywords" content="small home projects, home repairs, minor fixes, handyman services">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'tile.php') {
    ?>
    <title>Tile Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Professional tile installation and repair services for floors, walls, bathrooms, and kitchens.">
    <meta name="keywords" content="tile installation, tile repair, floor tiles, kitchen tiles">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'wall.php') {
    ?>
    <title>Wall Construction & Repair | Easy Home Service</title>
    <meta name="description" content="Expert wall construction, repair, and remodeling services for interior and exterior walls.">
    <meta name="keywords" content="wall construction, wall repair, drywall services, home renovation">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'awnings.php') {
    ?>
    <title>Awning Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Enhance your outdoor space with professional awning installation and repair services.">
    <meta name="keywords" content="awning installation, retractable awnings, patio covers">
    
   
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'deck.php') {
    ?>
    <title>Deck Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Enhance your outdoor living space with professional deck installation and maintenance services.">
    <meta name="keywords" content="deck installation, patio decks, wooden decks, deck repair">
    

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'landscaping.php') {
    ?>
    <title>Landscaping & Garden Design | Easy Home Service</title>
    <meta name="description" content="Transform your outdoor space with expert landscaping, garden design, and lawn maintenance.">
    <meta name="keywords" content="landscaping, garden design, lawn care, landscape maintenance">
    

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'outdoorplayequipment.php') {
    ?>
    <title>Outdoor Play Equipment Installation | Easy Home Service</title>
    <meta name="description" content="Install high-quality outdoor play equipment for safe and fun backyard activities.">
    <meta name="keywords" content="outdoor play equipment, backyard playground, playset installation">

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'patiocovers.php') {
    ?>
    <title>Patio Covers & Shade Solutions | Easy Home Service</title>
    <meta name="description" content="Upgrade your patio with stylish covers, pergolas, and shade solutions for all seasons.">
    <meta name="keywords" content="patio covers, pergolas, outdoor shade, deck covers">

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'pool.php') {
    ?>
    <title>Pool Installation & Maintenance | Easy Home Service</title>
    <meta name="description" content="Get professional pool installation, maintenance, and cleaning services for your home.">
    <meta name="keywords" content="pool installation, pool maintenance, swimming pool services">
    

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'powerwashing.php') {
    ?>
    <title>Power Washing & Pressure Cleaning | Easy Home Service</title>
    <meta name="description" content="Restore your homeâ€™s exterior with professional power washing and pressure cleaning services.">
    <meta name="keywords" content="power washing, pressure cleaning, exterior cleaning, driveway cleaning">
    

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'sheds.php') {
    ?>
    <title>Shed Installation & Storage Solutions | Easy Home Service</title>
    <meta name="description" content="Get a professionally installed shed for extra storage, workspace, or backyard organization.">
    <meta name="keywords" content="shed installation, backyard sheds, storage solutions, shed builders">
    

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'sunroom.php') {
    ?>
    <title>Sunroom Design & Installation | Easy Home Service</title>
    <meta name="description" content="Add a beautiful sunroom to your home with expert design and installation services.">
    <meta name="keywords" content="sunroom installation, sunroom design, home additions, conservatory">
    

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'tree.php') {
    ?>
    <title>Tree Removal & Trimming | Easy Home Service</title>
    <meta name="description" content="Keep your trees healthy with professional tree trimming, pruning, and removal services.">
    <meta name="keywords" content="tree services, tree removal, tree trimming, tree pruning">
    

    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'basement.php') {
    ?>
    <title>Basement Remodeling & Finishing | Easy Home Service</title>
    <meta name="description" content="Transform your basement into a functional space with expert finishing and remodeling.">
    <meta name="keywords" content="basement finishing, basement remodeling, basement renovation">
    

    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'materials.php') {
    ?>
    <title>Home Improvement Materials | Easy Home Service</title>
    <meta name="description" content="Find quality building materials and home improvement supplies for your next project.">
    <meta name="keywords" content="building materials, home improvement supplies, construction materials">
    

    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'skylight.php') {
    ?>
    <title>Skylight Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Brighten your home with professional skylight installation and repair services.">
    <meta name="keywords" content="skylight installation, roof windows, skylight repair">
    

    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'stairlift.php') {
    ?>
    <title>Stair Lift Installation | Easy Home Service</title>
    <meta name="description" content="Improve mobility with professional stair lift installation for homes and businesses.">
    <meta name="keywords" content="stair lift installation, mobility solutions, home accessibility">
    
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'tennis.php') {
    ?>
    <title>Tennis Court Construction | Easy Home Service</title>
    <meta name="description" content="Build or resurface your tennis court with expert installation and maintenance services.">
    <meta name="keywords" content="tennis court construction, sports courts, tennis court repair">
    

    <?php
}

elseif (basename($_SERVER['PHP_SELF']) == 'excavation.php') {
    ?>
    <title>Excavation & Land Clearing | Easy Home Service</title>
    <meta name="description" content="Professional excavation services for construction, landscaping, and site preparation.">
    <meta name="keywords" content="excavation, land clearing, site preparation, digging services">
    

    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'framing.php') {
    ?>
    <title>House Framing & Woodwork | Easy Home Service</title>
    <meta name="description" content="Get expert framing services for new homes, renovations, and structural enhancements.">
    <meta name="keywords" content="house framing, framing construction, wood framing, structural framing">
    

    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'remodeling.php') {
    ?>
    <title>Home Remodeling & Renovation | Easy Home Service</title>
    <meta name="description" content="Upgrade your home with expert remodeling and renovation services tailored to your needs.">
    <meta name="keywords" content="home remodeling, house renovation, remodeling services, interior redesign">
    
   
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'stonemasonary.php') {
    ?>
    <title>Stone Masonry & Hardscaping | Easy Home Service</title>
    <meta name="description" content="Get high-quality stone masonary services for walls, patios, fireplaces, and landscaping.">
    <meta name="keywords" content="stone masonary, hardscaping, stone installation, masonry contractors">
   
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'appraiserrealestate.php') {
    ?>
    <title>Real Estate Appraisal Services | Easy Home Service</title>
    <meta name="description" content="Get an accurate property appraisal for buying, selling, or refinancing real estate.">
    <meta name="keywords" content="real estate appraisal, home valuation, property appraisal">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'brickstonefireplace.php') {
    ?>
    <title>Brick & Stone Fireplace Installation | Easy Home Service</title>
    <meta name="description" content="Enhance your home with custom brick and stone fireplaces for warmth and style.">
    <meta name="keywords" content="stone fireplaces, brick fireplaces, custom fireplaces, fireplace installation">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'brickwork.php') {
    ?>
    <title>Brickwork & Masonry Services | Easy Home Service</title>
    <meta name="description" content="Professional brickwork, masonry, and stone installation for homes and commercial buildings.">
    <meta name="keywords" content="brickwork, masonry services, stone installation, brick repair">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'demolition.php') {
    ?>
    <title>Demolition & Site Clearing | Easy Home Service</title>
    <meta name="description" content="Safe and efficient demolition services for residential and commercial properties.">
    <meta name="keywords" content="demolition services, building demolition, site clearing, home demolition">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'electrical.php') {
    ?>
    <title>Electrical Services Expert | Repairs & Installations</title>
    <meta name="description" content="Get Residential Electrical Services Expert including wiring, lighting, panel upgrades, and troubleshooting. Certified electricians delivering safe.">
    <meta name="keywords" content="Electrical Experts, electrical services expert, electricity expert, residential electrical services, Emergency Electrical Services">
    <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
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
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18337192289",
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
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+13074161843",
          "contactType": "customer support",
          "areaServed": "US",
          "availableLanguage": ["en"]
        }
      ],
      "location": {
        "@id": "https://easyhomeservice.com#place"
      },
      "sameAs": [
        "https://www.facebook.com/easyhomeservicee/",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/win-electrical/electrical-5.jpg",
      "url": "https://easyhomeservice.com/images/win-electrical/electrical-5.jpg",
      "width": "1200",
      "height": "628",
      "caption": "Residential Electrical Services Expert",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/electrical#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/electrical",
            "name": "Electrical"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/electrical#webpage",
      "url": "https://easyhomeservice.com/electrical",
      "name": "Residential Electrical Services Expert | Repairs & Installations",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-12-10T12:00:00+00:00",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/win-electrical/electrical-5.jpg"
      },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/electrical#breadcrumb"
      }
    },
    {
      "@type": "Person",
      "@id": "https://easyhomeservice.com/electrical#author",
      "name": "Easy Home Service Editorial Team",
      "image": {
        "@type": "ImageObject",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service Team",
        "inLanguage": "en-US"
      },
      "worksFor": {
        "@id": "https://easyhomeservice.com#organization"
      }
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/electrical#service",
      "serviceType": "Residential Electrical Services",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": [
        "New York, NY","Los Angeles, CA","Chicago, IL","Houston, TX","Phoenix, AZ",
        "Philadelphia, PA","San Antonio, TX","San Diego, CA","Dallas, TX","San Jose, CA",
        "Austin, TX","Jacksonville, FL","Fort Worth, TX","Columbus, OH","Charlotte, NC",
        "San Francisco, CA","Indianapolis, IN","Seattle, WA","Denver, CO","Washington, DC",
        "Boston, MA","El Paso, TX","Nashville, TN","Detroit, MI","Oklahoma City, OK",
        "Portland, OR","Las Vegas, NV","Memphis, TN","Louisville, KY","Baltimore, MD",
        "Milwaukee, WI","Albuquerque, NM","Tucson, AZ","Fresno, CA","Mesa, AZ",
        "Sacramento, CA","Atlanta, GA","Kansas City, MO","Colorado Springs, CO","Miami, FL",
        "Raleigh, NC","Omaha, NE","Long Beach, CA","Virginia Beach, VA","Oakland, CA",
        "Minneapolis, MN","Tulsa, OK","Arlington, TX","New Orleans, LA","Wichita, KS",
        "Tampa, FL","Cleveland, OH","Bakersfield, CA","Aurora, CO","Anaheim, CA",
        "Honolulu, HI","Santa Ana, CA","Riverside, CA","Corpus Christi, TX","Lexington, KY",
        "Henderson, NV","Stockton, CA","Saint Paul, MN","Cincinnati, OH","St. Louis, MO",
        "Pittsburgh, PA","Greensboro, NC","Lincoln, NE","Anchorage, AK","Plano, TX",
        "Orlando, FL","Irvine, CA","Newark, NJ","Toledo, OH","Durham, NC",
        "Chula Vista, CA","Fort Wayne, IN","Jersey City, NJ","St. Petersburg, FL","Laredo, TX",
        "Madison, WI","Chandler, AZ","Buffalo, NY","Lubbock, TX","Scottsdale, AZ",
        "Reno, NV","Glendale, AZ","Gilbert, AZ","Winston-Salem, NC","North Las Vegas, NV",
        "Norfolk, VA","Chesapeake, VA","Fremont, CA","Garland, TX","Irving, TX",
        "Hialeah, FL","Richmond, VA","Boise, ID","Spokane, WA","Baton Rouge, LA",
        "Tacoma, WA","San Bernardino, CA","Modesto, CA","Fontana, CA","Des Moines, IA",
        "Fayetteville, NC","Akron, OH","Shreveport, LA","Yonkers, NY","Huntington Beach, CA",
        "Montgomery, AL","Little Rock, AR","Amarillo, TX","Mobile, AL","Salt Lake City, UT",
        "Grand Rapids, MI","Overland Park, KS","Tallahassee, FL","Huntsville, AL","Knoxville, TN",
        "Augusta, GA","Providence, RI","New Haven, CT","Pasadena, CA","Miramar, FL"
      ],
      "description": "professional residential electrical experts offering wiring, lighting installation, panel upgrades, electrical repairs, and emergency electrical services.",
      "url": "https://easyhomeservice.com/electrical",
      "image": "https://easyhomeservice.com/images/win-electrical/electrical-5.jpg",
      "potentialAction": {
        "@type": "RequestQuote",
        "target": "https://easyhomeservice.com/electrical#get-quote",
        "name": "Get A Electrical Quote"
      }
    },
    {
      "@type": "Article",
      "@id": "https://easyhomeservice.com/electrical#richSnippet",
      "headline": "Residential Electrical Services Expert | Repairs & Installations",
      "keywords": "Electrical Experts, electrical services expert, electricity expert, residential electrical services, Emergency Electrical Services",
      "datePublished": "2023-06-29T19:29:37+00:00",
      "dateModified": "2025-12-04T12:00:00+00:00",
      "author": {
        "@id": "https://easyhomeservice.com/electrical#author"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "description": "Get expert electrical services including wiring, lighting, repairs, panel upgrades, and emergency electrical support by professional electricians.",
      "name": "Residential Electrical Services Expert | Repairs & Installations",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/electrical#webpage"
      },
      "image": {
        "@id": "https://easyhomeservice.com/images/win-electrical/electrical-5.jpg"
      },
      "mainEntityOfPage": {
        "@id": "https://easyhomeservice.com/electrical#webpage"
      },
      "inLanguage": "en-US",
      "wordCount": 1000
    }
  ]
}
</script>
    
    
    
    
    
        <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'engineer.php') {
    ?>
    <title>Structural & Civil Engineering | Easy Home Service</title>
    <meta name="description" content="Get expert structural and civil engineering services for construction and renovation projects.">
    <meta name="keywords" content="engineering services, structural engineering, civil engineering, building planning">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'homeenergyaudit.php') {
    ?>
    <title>Home Energy Audit & Efficiency | Easy Home Service</title>
    <meta name="description" content="Reduce energy bills with a professional home energy audit. Identify energy-saving opportunities.">
    <meta name="keywords" content="home energy audit, energy efficiency, reduce energy bills">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'mold.php') {
    ?>
    <title>Mold Inspection & Removal | Easy Home Service</title>
    <meta name="description" content="Professional mold inspection, removal, and remediation services for a healthier home.">
    <meta name="keywords" content="mold removal, mold inspection, home mold, black mold cleanup">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'pest-control.php') {
    ?>
    <title>Residential Pest Control Experts | Safe & Effective Solutions</title>
    <meta name="description" content="Safe and effective pest control solutions for homes and businesses.">
    <meta name="keywords" content="pest control, extermination, home pest services, rodent control">
    <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://easyhomeservice.com#place",
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
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "email": "service@easyhomeservice.com",
      "telephone": "+18337192289",
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
        "@id": "https://easyhomeservice.com#logo",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "contentUrl": "https://easyhomeservice.com/images/easyhomeservice.svg",
        "caption": "Easy Home Service",
        "inLanguage": "en-US"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+13074161843",
          "contactType": "customer support",
          "areaServed": "US",
          "availableLanguage": ["en"]
        }
      ],
      "location": {
        "@id": "https://easyhomeservice.com#place"
      },
      "sameAs": [
        "https://www.facebook.com/easyhomeservicee/",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com#website",
      "url": "https://easyhomeservice.com",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "ImageObject",
      "@id": "https://easyhomeservice.com/images/win-pest/Bugs%20or%20Insects.jpg",
      "url": "https://easyhomeservice.com/images/win-pest/Bugs%20or%20Insects.jpg",
      "width": "1200",
      "height": "628",
      "caption": "Bugs or Insects Residential Pest Control Experts",
      "inLanguage": "en-US"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/pest-control#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://easyhomeservice.com",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://easyhomeservice.com/pest-control",
            "name": "Pest Control Services"
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/pest-control#webpage",
      "url": "https://easyhomeservice.com/pest-control",
      "name": "Residential Pest Control Experts | Safe & Effective Solutions",
      "isPartOf": {
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@id": "https://easyhomeservice.com/images/win-pest/Bugs%20or%20Insects.jpg"
      },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/pest-control#breadcrumb"
      }
    },
    {
      "@type": "Person",
      "@id": "https://easyhomeservice.com/pest-control#author",
      "name": "Easy Home Service Editorial Team",
      "worksFor": {
        "@id": "https://easyhomeservice.com#organization"
      }
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/pest-control#service",
      "serviceType": "Residential Pest Control Services",
      "provider": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Residential pest control services including ant control, termite treatment, rodent removal, mosquito control, one-time pest treatments, and long-term pest prevention solutions.",
      "url": "https://easyhomeservice.com/pest-control",
      "image": {
        "@id": "https://easyhomeservice.com/images/win-pest/Bugs%20or%20Insects.jpg"
      },
      "potentialAction": {
        "@type": "QuoteAction",
        "target": "https://easyhomeservice.com/pest-control#get-quote",
        "name": "Get Free Pest Control Quote"
      }
    },
    {
      "@type": "Article",
      "@id": "https://easyhomeservice.com/pest-control#richSnippet",
      "headline": "Residential Pest Control Experts | Safe & Effective Solutions",
      "keywords": "Residential Pest Control Experts Services, local experts for ant pest control, one time pest treatment, mosquito control expert, expert exterminators",
      "author": {
        "@id": "https://easyhomeservice.com/pest-control#author"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "description": "Get expert residential pest control services to eliminate ants, termites, rodents, mosquitoes, and insects with safe, effective, and long-lasting home solutions.",
      "name": "Residential Pest Control Experts | Safe & Effective Solutions",
      "mainEntityOfPage": {
        "@id": "https://easyhomeservice.com/pest-control#webpage"
      },
      "image": {
        "@id": "https://easyhomeservice.com/images/win-pest/Bugs%20or%20Insects.jpg"
      },
      "inLanguage": "en-US",
      "wordCount": 1500
    }
  ]
}
</script>
    
    
    
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'portabletoilets.php') {
    ?>
    <title>Portable Toilet Rentals | Easy Home Service</title>
    <meta name="description" content="Rent high-quality portable toilets for events, construction sites, and outdoor gatherings.">
    <meta name="keywords" content="portable toilets, event toilets, restroom rental, porta-potty rental">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'securitycameras.php') {
    ?>
    <title>Security Camera Installation | Easy Home Service</title>
    <meta name="description" content="Protect your property with expert security camera installation services.">
    <meta name="keywords" content="security cameras, surveillance installation, home security">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'septic.php') {
    ?>
    <title>Septic Tank Installation & Maintenance | Easy Home Service</title>
    <meta name="description" content="Expert septic system installation, maintenance, and repair services for residential and commercial properties.">
    <meta name="keywords" content="septic system, septic tank installation, septic tank maintenance">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'sewerwatermain.php') {
    ?>
    <title>Sewer & Water Main Repair | Easy Home Service</title>
    <meta name="description" content="Professional sewer and water main repair, replacement, and maintenance services.">
    <meta name="keywords" content="sewer repair, water main repair, sewer line replacement">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'toxicmaterial.php') {
    ?>
    <title>Toxic Material Cleanup | Easy Home Service</title>
    <meta name="description" content="Professional toxic material cleanup services, including hazardous waste disposal and asbestos removal.">
    <meta name="keywords" content="toxic material removal, hazardous waste disposal, asbestos cleanup">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'waterheater.php') {
    ?>
    <title>Water Heater Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Reliable water heater installation and repair services for tank and tankless systems.">
    <meta name="keywords" content="water heater repair, tankless water heater, hot water installation">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'waterpestdamage.php') {
    ?>
    <title>Water & Pest Damage Restoration | Easy Home Service</title>
    <meta name="description" content="Restore your home from water and pest damage with expert repair services.">
    <meta name="keywords" content="water damage repair, pest damage restoration, flood damage cleanup">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'waterdamage.php') {
    ?>
    <title>Water Damage Restoration | Easy Home Service</title>
    <meta name="description" content="Restore your home from water damage with expert repair services.">
    <meta name="keywords" content="water damage repair, damage restoration, flood damage cleanup">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'wellpumps.php') {
    ?>
    <title>Well Pump Installation & Repair | Easy Home Service</title>
    <meta name="description" content="Professional well pump installation and repair for a consistent and clean water supply.">
    <meta name="keywords" content="well pumps, water well pump, well pump installation">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'allservices.php') {
    ?>
    <title>All Home Services | Easy Home Service</title>
    <meta name="description" content="Explore a comprehensive list of home improvement services, from repairs to renovations.">
    <meta name="keywords" content="home services, repair, renovation, home improvement, handyman services">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'ccpa.php') {
    ?>
    <title>California Consumer Privacy Act (CCPA) | Easy Home Service</title>
    <meta name="description" content="Learn how we protect your data under the California Consumer Privacy Act (CCPA).">
    <meta name="keywords" content="CCPA, data privacy, consumer rights, California privacy law">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'do-not-call-policy.php') {
    ?>
    <title>Do Not Call Policy | Easy Home Service</title>
    <meta name="description" content="Review our Do Not Call policy and learn how to opt out of marketing calls.">
    <meta name="keywords" content="do not call, telemarketing, opt-out policy, call privacy">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'privacy-policy.php') {
    ?>
    <title>Privacy Policy | Easy Home Service</title>
    <meta name="description" content="Read our privacy policy to understand how we collect, use, and protect your data.">
    <meta name="keywords" content="privacy policy, data protection, user privacy, information security">
    <?php }
    elseif (basename($_SERVER['PHP_SELF']) == 'privacy.php') {
    ?>
    <title>Privacy Policy | Easy Home Service</title>
    <meta name="description" content="Read Easy Home Service’ Privacy Policy and understand how we collect, use and protect your personal information when you use our services & website.">
    <meta name="keywords" content="privacy policy, data protection, user privacy, information security">
       <?php }
    elseif (basename($_SERVER['PHP_SELF']) == 'tcpa.php') {
    ?>
    <title>TCPA & CAN-SPAM Compliance | Easy Home Service</title>
    <meta name="description" content="Our TCPA & CAN-SPAM Policy outlines our compliance with United States federal communication laws, including consent & messaging practices.">
    <meta name="keywords" content="privacy policy, data protection, user privacy, information security">
    
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'siding.php') {
    ?>
    <title>Trusted Siding Experts Near You | Siding Repair & Replacement Services</title>
    <meta name="description" content="Connect with trusted local siding experts for repair and replacement services. Upgrade your home’s exterior with durable, stylish siding solutions at the best price.">
    <meta name="keywords" content="residential siding experts, vinyl siding installation, fiber cement siding, wood siding repair, metal siding experts, home siding services, exterior siding contractors, Easy Home Service siding">
    <!-- Open Graph / Facebook -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Trusted Siding Experts Near You | Siding Repair & Replacement Services" />
<meta property="og:description" content="Find trusted local siding professionals for repair and replacement. Enhance your home’s exterior with durable, stylish siding at competitive prices." />
<meta property="og:url" content="https://easyhomeservice.com/siding" />
<meta property="og:site_name" content="Easy Home Service" />

<meta property="og:image" content="https://easyhomeservice.com/images/siding_bnr_mob.jpg" />
<meta property="og:image:secure_url" content="https://easyhomeservice.com/images/siding_bnr_mob.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="Trusted Siding Experts Near You" />
<meta property="og:image:type" content="image/jpeg" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Trusted Siding Experts Near You | Siding Repair & Replacement Services" />
<meta name="twitter:description" content="Connect with expert siding contractors for vinyl, fiber cement, wood, and metal siding repair and replacement services." />
<meta name="twitter:image" content="https://easyhomeservice.com/images/siding_bnr_mob.jpg" />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://easyhomeservice.com/images/easyhomeservice.svg"
      },
      "telephone": "+1-833-380-9800",
      "email": "service@easyhomeservice.com",
      "sameAs": [
        "https://www.facebook.com/easyhomeservicee/",
        "https://www.linkedin.com/company/easy-home-service-llc/",
        "https://www.instagram.com/easy_home__service/",
        "https://x.com/EasyHomeExperts"
      ]
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://easyhomeservice.com/siding#localbusiness",
      "name": "Easy Home Service – Siding Experts",
      "url": "https://easyhomeservice.com/siding",
      "image": "https://easyhomeservice.com/images/siding_bnr_mob.jpg",
      "description": "Easy Home Service connects homeowners with trusted siding experts for siding repair and replacement services, including vinyl, fiber cement, wood, and metal siding.",
      "telephone": "+1-833-380-9800",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "providerOf": {
        "@id": "https://easyhomeservice.com/siding#service"
      }
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/siding#service",
      "name": "Residential Siding Repair & Replacement Services",
      "serviceType": "Siding Installation, Repair & Replacement",
      "provider": {
        "@id": "https://easyhomeservice.com/siding#localbusiness"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional residential siding services including vinyl siding installation, fiber cement siding, wood siding repair, metal siding solutions, and complete exterior siding replacement.",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "url": "https://easyhomeservice.com/siding"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/siding#webpage",
      "url": "https://easyhomeservice.com/siding",
      "name": "Trusted Siding Experts Near You | Siding Repair & Replacement Services",
      "description": "Connect with trusted local siding experts for repair and replacement services. Upgrade your home’s exterior with durable, stylish siding solutions at the best price.",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://easyhomeservice.com#website"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "https://easyhomeservice.com/images/siding_bnr_mob.jpg"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Article",
      "@id": "https://easyhomeservice.com/siding#article",
      "headline": "Trusted Siding Experts Near You",
      "keywords": [
        "residential siding experts",
        "vinyl siding installation",
        "fiber cement siding",
        "wood siding repair",
        "metal siding experts",
        "home siding services",
        "exterior siding contractors",
        "Easy Home Service siding"
      ],
      "description": "Easy Home Service helps homeowners connect with professional siding contractors offering reliable siding repair and replacement services nationwide.",
      "author": {
        "@type": "Organization",
        "name": "Easy Home Service Editorial Team"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com#organization"
      },
      "mainEntityOfPage": {
        "@id": "https://easyhomeservice.com/siding#webpage"
      },
      "image": "https://easyhomeservice.com/images/siding_bnr_mob.jpg",
      "inLanguage": "en-US",
      "wordCount": 1200
    }
  ]
}
</script>

    
    
    
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'terms.php') {
    ?>
    <title>Terms & Conditions | Easy Home Service</title>
    <meta name="description" content="Review the terms and conditions for using our website and services.">
    <meta name="keywords" content="terms of service, user agreement, website policies, service terms">
    <?php
} elseif (basename($_SERVER['PHP_SELF']) == 'weldcutmetalstructure.php') {
    ?>
    <title>Welding & Metal Structure Services | Easy Home Service</title>
    <meta name="description" content="Get high-quality welding and metal structure fabrication services for residential and commercial projects.">
    <meta name="keywords" content="welding, metal structure, metal fabrication, custom welding services">
    <?php
}
elseif (basename($_SERVER['PHP_SELF']) == 'wiringlowvoltage.php') {
    ?>
    <title>Low Voltage Wiring Installation | Easy Home Service</title>
    <meta name="description" content="Get expert low voltage wiring for smart homes, security systems, and 
communication networks.">
    <meta name="keywords" content="low voltage wiring, smart home wiring, security wiring">
    <?php
}
?>

<!-- Hotjar Tracking Code for EasyHomeService.com -->

<!-- Hotjar Tracking Code for https://easyhomeservice.com --> <script>     (function(h,o,t,j,a,r){         h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};         h._hjSettings={hjid:5091454,hjsv:6};         a=o.getElementsByTagName('head')[0];         r=o.createElement('script');r.async=1;         r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;         a.appendChild(r);     })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); </script>




<!-- End Meta Pixel Code -->
<!-- End Facebook Pixel Code -->


<!--Gutter-->

<script src=//b-js.ringba.com/CA4e3e27920a71499f95efeb19fe56ac3e async></script>
<!--/gutter-->


<script src=//b-js.ringba.com/CA4aef2061048d4c4384dc9d84a81139b0 async></script> 
    
    
  <!--Solar-->
  <script src=//b-js.ringba.com/CAd4af6d32446c49a3ae1347dd7e02fb97 async></script> 

<!--Roofing-->
 <script src=//b-js.ringba.com/CAd6ac5862e7ba4202a5c1487c37514e06 async></script> 


<!--Kitchen-->
 <script src=//b-js.ringba.com/CAcf79ff90c79d463aa6146a8e09b978b1 async></script> 

<!--Home Warranty-->
 <script src=//b-js.ringba.com/CA7fbbe249db254a1b91555ebada9ca55e async></script> 

<!--Door-->
 <script src=//b-js.ringba.com/CAd2ea4986ec06444899e18cb6019162b2 async></script> 

<!--Bathroom-->
 <script src=//b-js.ringba.com/CA146a1dcbc14f43df85adcb0979263e21 async></script> 
 
 <!--HVAC-->
 <script src=//b-js.ringba.com/CA028411a2b9cc406eb855156651721d85 async></script> 
<!--Flooring-->
 <script src=//b-js.ringba.com/CA1f2d15dc242b47109564afd865cd58d4 async></script> 
<!--Plumbing-->
    <script src=//b-js.ringba.com/CA76879f01b333408cac48e032d713aa93 async></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!--<script type="text/javascript" src="https://dp.wookyes.com/track.js?rtkcmpid=67dbf7d641e1127f22ed9b87"></script>-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P4FX6N8M');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16938916629"></script> 
<script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'AW-16938916629'); </script>



<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-KSK56LK5TD"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-KSK56LK5TD'); </script>

<!-- TikTok Pixel Code Start --> <script> !function (w, d, t) {   w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for( var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[… Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script") ;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};   ttq.load('CUU8CEJC77U6K9SI3KQG');   ttq.page(); }(window, document, 'ttq'); </script> <!-- TikTok Pixel Code End -->


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


<!--  Clickcease.com tracking-->
<script type='text/javascript'>var script = document.createElement('script');
script.async = true; script.type = 'text/javascript';
var target = 'https://www.clickcease.com/monitor/stat.js';
script.src = target;var elem = document.head;elem.appendChild(script);
</script>




<!-- Event snippet for Submit lead form-otp verified conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<!--submit button click-->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-16938916629/BkeNCOySj7UbEJW2jY0_',
      'value': 1.0,
      'currency': 'USD',
      'event_callback': callback
  });
  return false;
}
</script>
<!--/submit button click-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16938917400"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'AW-16938917400');
</script>


<!-- Meta Pixel Code --> <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js '); fbq('init', '1147034926810999'); fbq('track', 'PageView'); fbq('track', 'Lead'); </script> <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1147034926810999&ev=PageView&noscript=1 " /></noscript> <!-- End Meta Pixel Code -->

<?php
function get_hreflang_url() {
    // Get the current protocol
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
        ? "https://"
        : "http://";

    // Get the current host
    $host = $_SERVER['HTTP_HOST'];

    // Get the current request URI
    $request_uri = $_SERVER['REQUEST_URI'];

    // Construct the full URL
    $current_url = $protocol . $host . $request_uri;

    // Modify the URL if necessary (remove tracking parameters, etc.)
    $parsed_url = parse_url($current_url);
    $hreflang_url = $protocol . $host . $parsed_url['path']; // Remove query parameters

    // Return the hreflang URL
    return htmlspecialchars($hreflang_url, ENT_QUOTES, 'UTF-8');
}

// Usage
echo '<link rel="alternate" hreflang="en-us" href="' . get_hreflang_url() . '" />' . PHP_EOL;
echo '<link rel="alternate" hreflang="x-default" href="' . get_hreflang_url() . '" />';
?>


<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "v05wiwvf5f");
</script>

<script>
(function () {
    // already captured
    if (sessionStorage.getItem('external_referrer')) return;

    var ref = document.referrer;
    if (!ref) return;

    var currentHost = location.hostname;

    try {
        var refHost = new URL(ref).hostname;

        // store ONLY if external
        if (refHost && refHost !== currentHost) {
            sessionStorage.setItem('external_referrer', ref);
        }
    } catch (e) {
        // ignore malformed referrer
    }
})();
</script>

    </head>
<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4FX6N8M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <!--top_strip-->
<div class="top_strip">
	<div class="container">
    	<p class="top_strip_text mb-0 text-center">Your Go-To for Complete Home Solutions and Trusted Excellence</p>
    </div>
</div>
<!--/*=====TOP BAR======*/-->
<div class="top-fix-bar">
    <div class="header">
        <div class="container">
            <a href="https://easyhomeservice.com" <?php if($pagenm == "index") {?> class="active" <?php } else { echo 'class=""'; } ?>><img src="<?php echo $base_url; ?>images/easyhomeservice.svg" class="logo" alt="Easy home service" height="47" width="126"></a>
          


<div class="header_right">      

                
                

  <style>
@keyframes ring {
  0% { transform: rotate(0); }
  15% { transform: rotate(15deg); }
  30% { transform: rotate(-10deg); }
  45% { transform: rotate(10deg); }
  60% { transform: rotate(-5deg); }
  75% { transform: rotate(5deg); }
  100% { transform: rotate(0); }
}
</style>
  <p class="header_call" style="animation: zoomInOut 2s ease-in-out infinite;"> <span style="animation: ring 1s infinite; display: inline-block;"><i class="fa fa-bell"></i></span> Need Help?<br/><a  id="header_call" href="">


</a></p>
            	<a href="javascript:void(0)" class="header-btn hide-mob form-open text-white" onclick="redirectGetQuote()">Get Quote Now</a>
            </div>
            <div class="showDesk">
                <ul class="topMenu showDesk">
                    	<li><a href="https://easyhomeservice.com" <?php if($pagenm == "https://easyhomeservice.com") {?> class="active" <?php } else { echo 'class=""'; } ?>>Home</a></li>
                    	
                    	
                	<li class="dropdown"><a href="#">Services <img src="<?php echo $base_url; ?>images/down-arrow.png" width="50" height="27" alt="ic" class="down-arrow"></a>
                    	<ul class="dropdown-menu">
                            <li><a class="passcid" href="<?php echo $base_url; ?>roofing"><span><img src="<?php echo $base_url; ?>images/roofing.svg" alt="affordable roofing near me"/></span><p class="mb-0">Roofing</p></a></li>
                            <li><a class="passcid" href="<?php echo $base_url; ?>window"><span><img src="<?php echo $base_url; ?>images/windows.svg" alt="Window Experts"/></span><p class="mb-0">Windows</p></a></li>
                            <li><a class="passcid" href="<?php echo $base_url; ?>solar"><span><img src="<?php echo $base_url; ?>images/solar.svg" alt="Solar Expert"/></span><p class="mb-0">Solar</p></a></li>
                            <li><a class="passcid" href="<?php echo $base_url; ?>hvac"><span><img src="<?php echo $base_url; ?>images/hvac.svg" alt="hvac experts"/></span><p class="mb-0">HVAC</p></a></li>
                            <li><a class="passcid" href="<?php echo $base_url; ?>bathroom"><span><img src="<?php echo $base_url; ?>images/bathroom.svg" alt="bathroom remodeling experts"/></span><p class="mb-0">Bathroom</p></a></li>
                            <li><a class="passcid" href="<?php echo $base_url; ?>kitchen"><span><img src="<?php echo $base_url; ?>images/kitchen.svg"alt="kitchen remodeling experts" /></span><p class="mb-0">Kitchen</p></a></li>
                            <li><a class="passcid" href="<?php echo $base_url; ?>gutter"><span><img src="<?php echo $base_url; ?>images/gutter.svg" alt="Gutter experts"/></span><p class="mb-0">Gutter</p></a></li>
                       
                            <li><a class="passcid" href="<?php echo $base_url; ?>walktub"><span><img src="<?php echo $base_url; ?>images/walk.svg" alt="affordable walk in bathtubs"/></span><p class="mb-0">Walk-In Tubs</p></a></li>
                            <li><a class="passcid" href="<?php echo $base_url; ?>handyman"><span><img src="<?php echo $base_url; ?>images/dropdownhandy.svg" alt="handy man experts usa"/></span><p class="mb-0">Handyman</p></a></li>
                            
                            <li><a class="passcid" href="<?php echo $base_url; ?>homewarranty"><span><img src="<?php echo $base_url; ?>images/Homewarranty.svg" alt="home warranty experts"/></span><p class="mb-0">Home Warranty</p></a></li>
                             <li><a class="passcid" href="<?php echo $base_url; ?>flooring"><span><img src="<?php echo $base_url; ?>images/nav-floor.svg" alt="Flooring experts"/></span><p class="mb-0">Flooring</p></a></li>
                             
                             <li><a class="passcid" href="<?php echo $base_url; ?>siding"><span><img src="<?php echo $base_url; ?>images/nav-siding.svg" alt="siding experts"/></span><p class="mb-0">Siding</p></a></li>


                            <li><a class="passcid" href="<?php echo $base_url; ?>allservices"><span><img src="<?php echo $base_url; ?>images/s1_plus_icon.png" class="plus_icon_serv"/></span><p style="padding-left:2px;" class="mb-0">View All</p></a></li>
                            
                               
                        </ul>
                    </li>
                    
                	<li><a href="<?php echo $base_url; ?>about" <?php if($pagenm == "about") {?> class="active" <?php } else { echo 'class=""'; } ?>>About</a></li>
                	
                
                    <!--<li><a href="testimonial" <?php if($pagenm == "testimonials") {?> class="active" <?php } else { echo 'class=""'; } ?>>Testimonials</a></li>-->
                    <li><a href="<?php echo $base_url; ?>blog" <?php if($pagenm == "faq") {?> class="active" <?php } else { echo 'class=""'; } ?>>Blog</a></li>
                    	<li><a href="<?php echo $base_url; ?>contact" <?php if($pagenm == "contact") {?> class="active" <?php } else { echo 'class=""'; } ?>>Contact</a></li>
                    	
<li class="dropdown loc_dropdown">
  <a href="#" class="loc_toggle">
    HVAC Locations <i class="bi bi-chevron-down"></i>
  </a>

  <div class="dropdown-menu loc_mega_menu">
    <div class="container-fluid loc_full_container">

      <!-- 🔍 TOP BAR -->
      <div class="loc_mega_top">
        <div class="loc_mega_title">Select Location</div>

        <div class="loc_search_wrap">
         <input type="text" id="locSearch" class="loc_search_input" placeholder="Search location">

        </div>
      </div>

      <!-- STATES -->
<!-- STATES -->
<div class="row loc_states">

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Alabama</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Alaska</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Arizona</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Arkansas</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> California</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Colorado</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Connecticut</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Delaware</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Florida</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Georgia</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Hawaii</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Idaho</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Illinois</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Indiana</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Iowa</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Kansas</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Kentucky</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Louisiana</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Maine</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Maryland</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Massachusetts</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Michigan</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Minnesota</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Mississippi</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Missouri</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Montana</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Nebraska</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Nevada</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> New Hampshire</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> New Jersey</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> New Mexico</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> New York</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> North Carolina</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> North Dakota</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Ohio</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Oklahoma</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Oregon</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Pennsylvania</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Rhode Island</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> South Carolina</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> South Dakota</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Tennessee</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Texas</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Utah</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Vermont</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Virginia</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Washington</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> West Virginia</a></div>

  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Wisconsin</a></div>
  <div class="col-lg-3 col-md-4 col-6 loc_state"><a href="#"><i class="bi bi-geo-alt"></i> Wyoming</a></div>

</div>
    </div>
  </div>
</li>
<style>

/* Top bar */
.loc_mega_top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 17px;
}

/* Optional title (left) */
.loc_mega_title {
  font-size: 20px;
  font-weight: 700;
  color: #111827;
}

/* Search wrapper (right) */
.loc_search_wrap {
  max-width: 320px;
  width: 100%;
}

/* Search input */
.loc_search_input {
  width: 100%;
  padding: 10px 14px;
  font-size: 14px;
  border-radius: 8px;
  border: 1px solid #d1d5db;
}

.loc_search_input:focus {
  outline: none;
  border-color: #0d6efd;
}

/* Mobile stack */
@media (max-width: 767px) {
  .loc_mega_top {
    flex-direction: column;
    align-items: stretch;
    gap: 14px;
  }

  .loc_mega_title {
    text-align: center;
  }

  .loc_search_wrap {
    max-width: 100%;
  }
}

/* Parent must be static */ 
.loc_dropdown {
  position: static !important;
}

/* Mega menu – full width WITHOUT overflow */
.loc_mega_menu {
  position: absolute !important;
  left: 0 !important;
  right: 0 !important;

  width: 100% !important;        /* ✅ FIX */
  max-width: 100% !important;    /* ✅ SAFETY */
  margin: 0 !important;
  padding: 32px 0 40px;
  overflow-y:scroll!important;
  border-bottom:20px solid white;

  display: none;
  transform: none !important;    /* stops bootstrap translate */
  border-radius: 0;
  border-top: 3px solid #04d36f;

  box-sizing: border-box;
}

/* Inner spacing */
.loc_full_container {
    padding-left: 26px;
    padding-right: 26px;
    padding-bottom: 26px;
}
/* Grid spacing */
.loc_states {
  row-gap: 20px;
}

/* State item */
.loc_state a {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 18px;
  font-weight: 600;
  color: #1f2937;
  text-decoration: none;
  white-space: nowrap;
}

/* Icon */
.loc_state a i {
  color: #22c55e;
  font-size: 20px;
}

/* Hover */
.loc_state a:hover {
  color: #0d6efd;
  transform: translateX(6px);
}



/* Mobile */
@media (max-width: 991px) {
  .loc_full_container {
    padding-left: 20px;
    padding-right: 20px;
  }

  .loc_state a {
    font-size: 16px;
  }
}

.loc_mega_menu {
  display: none;
}

.loc_mega_menu.loc_open {
  display: block !important;
}


</style>
<script>
document.addEventListener('DOMContentLoaded', function () {

  /* 🔧 CHANGE SERVICE HERE ONLY */
  const serviceSlug = 'hvac-services-in';

  document.querySelectorAll('.loc_state a').forEach(function (link) {

    // Get visible state name
    const stateName = link.textContent.trim();

    // Convert to URL-safe slug
    const stateSlug = stateName
      .toLowerCase()
      .replace(/\s+/g, '-')        // spaces → hyphens
      .replace(/[^a-z-]/g, '');    // remove special chars

    // Build SEO-friendly URL
    const finalUrl = `/${stateSlug}/${serviceSlug}-${stateSlug}`;

    // ✅ SET href ATTRIBUTE
    link.setAttribute('href', finalUrl);
  });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const dropdown = document.querySelector('.loc_dropdown');
  const menu = document.querySelector('.loc_mega_menu');
  const searchInput = document.getElementById('locSearch');
  const states = document.querySelectorAll('.loc_state');

  if (!dropdown || !menu || !searchInput) return;

  /* OPEN MENU ON HOVER */
  dropdown.addEventListener('mouseenter', () => {
    menu.classList.add('loc_open');
  });

  dropdown.addEventListener('mouseleave', () => {
    menu.classList.remove('loc_open');
  });

  /* PREVENT MENU FROM CLOSING WHILE INTERACTING */
  menu.addEventListener('mouseenter', () => {
    menu.classList.add('loc_open');
  });

  menu.addEventListener('mouseleave', () => {
    menu.classList.remove('loc_open');
  });

  /* LIVE SEARCH */
  searchInput.addEventListener('input', function (e) {
    const value = e.target.value.toLowerCase().trim();

    states.forEach(state => {
      const text = state.textContent.toLowerCase();
      state.style.display = text.includes(value) ? '' : 'none';
    });
  });

  /* PREVENT LINK CLICK FROM CLOSING MENU IMMEDIATELY */
  menu.addEventListener('click', function (e) {
    e.stopPropagation();
  });
});
</script>




                </ul>
            </div>
            
            <div class="showTab showMob">
                <div class="mob-mnu-ic">
                    <button class="dl-trigger" id="mobMenuBtn">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </button>
                </div>
    
                <ul class="mobilemenu">
                	<li><a href="javascript:void(0)" class="menuOpen">Services</a>
                    	<div class="dropdown-mobile">                    	
                            <ul>
                                <li>
                                     <a href="roofing">
                                         <span><img src="<?php echo $base_url; ?>images/roofing.svg" alt="affordable roofing near me" /></span>
                                     <p class="mb-0">Roofing</p>
                                     </a>
                                </li>
                                <li>
    <a href="window">
        <span><img src="<?php echo $base_url; ?>images/windows.svg" alt="Window Experts"/></span>
        <p class="mb-0">Windows</p>
    </a>
</li>
<li>
    <a href="solar">
        <span><img src="<?php echo $base_url; ?>images/solar.svg" alt="Solar Expert"/></span>
        <p class="mb-0">Solar</p>
    </a>
</li>
<li>
    <a href="hvac">
        <span><img src="<?php echo $base_url; ?>images/hvac.svg" alt="hvac experts" /></span>
        <p class="mb-0">HVAC</p>
    </a>
</li>
<li>
    <a href="bathroom">
        <span><img src="<?php echo $base_url; ?>images/bathroom.svg" alt="bathroom remodeling experts" /></span>
        <p class="mb-0">Bathroom</p>
    </a>
</li>
<li>
    <a href="kitchen">
        <span><img src="<?php echo $base_url; ?>images/kitchen.svg" alt="kitchen remodeling experts" /></span>
        <p class="mb-0">Kitchen</p>
    </a>
</li>
<li>
    <a href="gutter">
        <span><img src="<?php echo $base_url; ?>images/gutter.svg" alt="Gutter experts" /></span>
        <p class="mb-0">Gutter</p>
    </a>
</li>
<li>
    <a href="walktub">
        <span><img src="<?php echo $base_url; ?>images/walk.svg" alt="affordable walk in bathtubs" /></span>
        <p class="mb-0">Walk-In Tubs</p>
    </a>
</li>
<li>
    <a href="handyman">
        <span><img src="<?php echo $base_url; ?>images/dropdownhandy.svg" alt="handy man experts usa"/></span>
        <p class="mb-0">Handyman</p>
    </a>
</li>
<li>
    <a href="homewarranty">
        <span><img src="<?php echo $base_url; ?>images/Homewarranty.svg" alt="home warranty experts" /></span>
        <p class="mb-0">Home Warranty</p>
    </a>
</li>
<li>
    <a href="flooring">
        <span><img src="<?php echo $base_url; ?>images/nav-floor.svg" alt="flooring experts" /></span>
        <p class="mb-0">Flooring</p>
    </a>
</li>
<li>
    <a href="siding">
        <span><img src="<?php echo $base_url; ?>images/nav-siding.svg" alt="siding experts" /></span>
        <p class="mb-0">Siding</p>
    </a>
</li>
<li>
    <a  href="allservices">
        <span><img src="<?php echo $base_url; ?>images/s1_plus_icon.png" class="plus_icon_serv" /></span>
        <p style="padding-left:2px;" class="mb-0">View All</p>
    </a>
</li>
                                
                                    <!--<li><a href="siding"><span><img src="images/siding.svg" /></span><p class="mb-0">Siding</p></a></li>-->
                            </ul>
                        </div>
                    </li>
                	<li><a href="javascript:void(0)" class="menuOpen">HVAC Locations</a>
                    	<div class="dropdown-mobile">     
                    	<input 
    type="text" 
    id="stateSearch" 
    placeholder="Search state..."
    class="state-search-input"
    onkeyup="filterStates()"
/>
<style>
.state-search-input {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}
ul#stateList {
    height: 250px;
    overflow-y: auto;
    padding: 0;
    display: grid;
    gap: 0;
}

#stateList {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    padding: 0;
    margin: 0;
}

#stateList li {
    list-style: none;
    text-align: center;
}

</style>

             



                           <ul id="stateList">
<li><a href="alabama"><p class="mb-0 loc_state_mob">Alabama</p></a></li>
<li><a href="alaska"><p class="mb-0 loc_state_mob">Alaska</p></a></li>
<li><a href="arizona"><p class="mb-0 loc_state_mob">Arizona</p></a></li>
<li><a href="arkansas"><p class="mb-0 loc_state_mob">Arkansas</p></a></li>
<li><a href="california"><p class="mb-0 loc_state_mob">California</p></a></li>
<li><a href="colorado"><p class="mb-0 loc_state_mob">Colorado</p></a></li>
<li><a href="connecticut"><p class="mb-0 loc_state_mob">Connecticut</p></a></li>
<li><a href="delaware"><p class="mb-0 loc_state_mob">Delaware</p></a></li>
<li><a href="florida"><p class="mb-0 loc_state_mob">Florida</p></a></li>
<li><a href="georgia"><p class="mb-0 loc_state_mob">Georgia</p></a></li>

<li><a href="hawaii"><p class="mb-0 loc_state_mob">Hawaii</p></a></li>
<li><a href="idaho"><p class="mb-0 loc_state_mob">Idaho</p></a></li>
<li><a href="illinois"><p class="mb-0 loc_state_mob">Illinois</p></a></li>
<li><a href="indiana"><p class="mb-0 loc_state_mob">Indiana</p></a></li>
<li><a href="iowa"><p class="mb-0 loc_state_mob">Iowa</p></a></li>
<li><a href="kansas"><p class="mb-0 loc_state_mob">Kansas</p></a></li>
<li><a href="kentucky"><p class="mb-0 loc_state_mob">Kentucky</p></a></li>
<li><a href="louisiana"><p class="mb-0 loc_state_mob">Louisiana</p></a></li>
<li><a href="maine"><p class="mb-0 loc_state_mob">Maine</p></a></li>
<li><a href="maryland"><p class="mb-0 loc_state_mob">Maryland</p></a></li>

<li><a href="massachusetts"><p class="mb-0 loc_state_mob">Massachusetts</p></a></li>
<li><a href="michigan"><p class="mb-0 loc_state_mob">Michigan</p></a></li>
<li><a href="minnesota"><p class="mb-0 loc_state_mob">Minnesota</p></a></li>
<li><a href="mississippi"><p class="mb-0 loc_state_mob">Mississippi</p></a></li>
<li><a href="missouri"><p class="mb-0 loc_state_mob">Missouri</p></a></li>
<li><a href="montana"><p class="mb-0 loc_state_mob">Montana</p></a></li>
<li><a href="nebraska"><p class="mb-0 loc_state_mob">Nebraska</p></a></li>
<li><a href="nevada"><p class="mb-0 loc_state_mob">Nevada</p></a></li>
<li><a href="new-hampshire"><p class="mb-0 loc_state_mob">New Hampshire</p></a></li>
<li><a href="new-jersey"><p class="mb-0 loc_state_mob">New Jersey</p></a></li>

<li><a href="new-mexico"><p class="mb-0 loc_state_mob">New Mexico</p></a></li>
<li><a href="new-york"><p class="mb-0 loc_state_mob">New York</p></a></li>
<li><a href="north-carolina"><p class="mb-0 loc_state_mob">North Carolina</p></a></li>
<li><a href="north-dakota"><p class="mb-0 loc_state_mob">North Dakota</p></a></li>
<li><a href="ohio"><p class="mb-0 loc_state_mob">Ohio</p></a></li>
<li><a href="oklahoma"><p class="mb-0 loc_state_mob">Oklahoma</p></a></li>
<li><a href="oregon"><p class="mb-0 loc_state_mob">Oregon</p></a></li>
<li><a href="pennsylvania"><p class="mb-0 loc_state_mob">Pennsylvania</p></a></li>
<li><a href="rhode-island"><p class="mb-0 loc_state_mob">Rhode Island</p></a></li>
<li><a href="south-carolina"><p class="mb-0 loc_state_mob">South Carolina</p></a></li>

<li><a href="south-dakota"><p class="mb-0 loc_state_mob">South Dakota</p></a></li>
<li><a href="tennessee"><p class="mb-0 loc_state_mob">Tennessee</p></a></li>
<li><a href="texas"><p class="mb-0 loc_state_mob">Texas</p></a></li>
<li><a href="utah"><p class="mb-0 loc_state_mob">Utah</p></a></li>
<li><a href="vermont"><p class="mb-0 loc_state_mob">Vermont</p></a></li>
<li><a href="virginia"><p class="mb-0 loc_state_mob">Virginia</p></a></li>
<li><a href="washington"><p class="mb-0 loc_state_mob">Washington</p></a></li>
<li><a href="west-virginia"><p class="mb-0 loc_state_mob">West Virginia</p></a></li>
<li><a href="wisconsin"><p class="mb-0 loc_state_mob">Wisconsin</p></a></li>
<li><a href="wyoming"><p class="mb-0 loc_state_mob">Wyoming</p></a></li>
</ul>
                        </div>
                    </li>
                    
                    
                    
                <script>
function filterStates() {
    const input = document.getElementById("stateSearch");
    const filter = input.value.toLowerCase();
    const ul = document.getElementById("stateList");
    const li = ul.getElementsByTagName("li");

    for (let i = 0; i < li.length; i++) {
        const text = li[i].innerText.toLowerCase();
        li[i].style.display = text.includes(filter) ? "" : "none";
    }
}
</script>
    
                    
                    	<li><a href="<?php echo $base_url; ?>about" <?php if($pagenm == "about") {?> class="active" <?php } else { echo 'class=""'; } ?>>About</a></li>
                	
               
                    <!--<li><a href="testimonial" <?php if($pagenm == "testimonials") {?> class="active" <?php } else { echo 'class=""'; } ?>>Testimonials</a></li>-->
                    <li><a href="<?php echo $base_url; ?>blog" <?php if($pagenm == "faq") {?> class="active" <?php } else { echo 'class=""'; } ?>>Blog</a></li>
                    
                     	<li><a href="<?php echo $base_url; ?>contact" <?php if($pagenm == "contact") {?> class="active" <?php } else { echo 'class=""'; } ?>>Contact</a></li>
                    
                    
                	<!--<li><a href="about">About</a></li>-->
                	<!--<li><a href="contact">Contact</a></li>-->
                	<!--<li><a href="blog">Blog</a></li>-->
                	<!--<li><a href="testimonials">Testimonials</a></li>-->
                	<!--<li><a href="review">Reviews</a></li>-->
                 <!--   <li><a href="blog">Blog</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>


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
@keyframes zoomInOut {
  0%   { transform: scale(1); }
  50%  { transform: scale(1.08); }
  100% { transform: scale(1); }
}
</style>
<script>
function redirectGetQuote() {

    const path = window.location.pathname
        .replace(/^\/|\/$/g, '')
        .toLowerCase();

    const query = window.location.search;

    // Home page
    if (!path) {
        window.location.href = "/allservices" + query;
        return;
    }

    const parts = path.split("/");

    let service = "";

    /*
      Valid URL patterns:
      /roofing
      /hvac
      /pest-control
      /state/hvac-services-in-state
    */

    if (parts.length === 1) {
        service = parts[0];
    } else {
        service = parts[1].split("-services")[0];
    }

    // 🚫 Block non-service pages
    const blocked = ["blog", "about", "contact", "privacy"];
    if (blocked.includes(service)) {
        window.location.href = "/allservices" + query;
        return;
    }

    // Final redirect
    window.location.href = "/" + service + "-steps" + query;
}
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {

  /* ==============================
     CONFIG – change service here
  ============================== */
  const serviceSlug = "hvac-services-in";

  /* ==============================
     HELPER: slugify
  ============================== */
  function slugify(text) {
    return text
      .toLowerCase()
      .trim()
      .replace(/\s+/g, "-");
  }

  /* ==============================
     CASE 1: <ul id="stateList">
  ============================== */
  document.querySelectorAll("#stateList li a").forEach(anchor => {
    const stateName = anchor.innerText.trim();
    if (!stateName) return;

    const stateSlug = slugify(stateName);
    anchor.href = `/${stateSlug}/${serviceSlug}-${stateSlug}`;
  });

  /* ==============================
     CASE 2: .loc_state mega menu
  ============================== */
  document.querySelectorAll(".loc_state a").forEach(anchor => {
    const stateName = anchor.innerText.replace(/^[^\w]+/, "").trim();
    if (!stateName) return;

    const stateSlug = slugify(stateName);
    anchor.href = `/${stateSlug}/${serviceSlug}-${stateSlug}`;
  });

  /* ==============================
     OPTIONAL: Search filter
  ============================== */
  const searchInput = document.getElementById("locSearch");
  if (searchInput) {
    searchInput.addEventListener("keyup", function () {
      const query = this.value.toLowerCase();

      document.querySelectorAll(".loc_state").forEach(state => {
        const name = state.innerText.toLowerCase();
        state.style.display = name.includes(query) ? "" : "none";
      });
    });
  }

});
</script>
