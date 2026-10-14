<?php
$published = $dates['published'];
$modified  = $dates['modified'];
return [

    'heating-services' => [
        'meta' => [
            'title'       => 'Heating Services | Repair, Installation & Maintenance',
            'description' => 'Get reliable Heating Services. Easy Home Service connects you with trusted local professionals for furnace repair, installation, boiler service & heat pump maintenance.',
            'image'       => 'https://easyhomeservice.com/images/banner-heating-services.jpg',
            'image_alt'   => 'Trusted Heating Services for Your Home'
        ],

        'schema' => <<<SCHEMA
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/hvac/heating-services#webpage",
      "url": "https://easyhomeservice.com/hvac/heating-services",
      "name": "Heating Services | Repair, Installation & Maintenance",
      "description": "Get reliable Heating Services. Easy Home Service connects you with trusted local professionals for furnace repair, installation, boiler service & heat pump maintenance.",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/#website"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/hvac/heating-services#breadcrumb"
      },
      "mainEntity": {
        "@id": "https://easyhomeservice.com/hvac/heating-services#service"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/hvac/heating-services#service",
      "name": "Heating Services",
      "serviceType": "Residential Heating Services",
      "description": "Heating services for residential properties, including heating repair, furnace repair and installation, boiler repair and installation, heat pump heating services, heating system maintenance, radiator repair and replacement, and thermostat installation and repair.",
      "url": "https://easyhomeservice.com/hvac/heating-services",
      "provider": {
        "@id": "https://easyhomeservice.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Heating Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Heating Repair Services"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Heating Installation Services"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Heating Maintenance Services"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Furnace Repair & Installation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Boiler Repair & Installation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Heat Pump Heating Services"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Radiator Repair and Replacement"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Thermostat Installation & Repair"
            }
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/hvac/heating-services#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://easyhomeservice.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "HVAC",
          "item": "https://easyhomeservice.com/hvac"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Heating Services",
          "item": "https://easyhomeservice.com/hvac/heating-services"
        }
      ]
    },
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com/#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com/",
      "telephone": "+1-833-380-9800",
      "email": "service@easyhomeservice.com",
      "description": "Easy Home Service is a free service that helps homeowners connect with local home service providers.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1309 Coffeen Avenue Ste 1200",
        "addressLocality": "Sheridan",
        "addressRegion": "WY",
        "postalCode": "82801",
        "addressCountry": "US"
      }
    }
  ]
}
</script>


SCHEMA
    ],
    
    'air-conditioning' => [
        'meta' => [
            'title'       => 'Air Conditioning Services | AC Repair, Installation & Maintenance',
            'description' => 'Get reliable Air Conditioning Services near you. Easy Home Service connects you with trusted local professionals for AC repair, installation, and maintenance',
            'image'       => 'https://easyhomeservice.com/images/hvac_bnr_mob.webp',
            'image_alt'   => 'HVAC technician arriving to perform residential air conditioning service'
        ],

        'schema' => <<<SCHEMA
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/hvac/air-conditioning#webpage",
      "url": "https://easyhomeservice.com/hvac/air-conditioning",
      "name": "Air Conditioning Services | AC Repair, Installation & Maintenance",
      "description": "Get reliable Air Conditioning Services near you. Easy Home Service connects you with trusted local professionals for AC repair, installation, and maintenance.",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/#website"
      },
      "about": {
        "@id": "https://easyhomeservice.com/hvac/air-conditioning#service"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/hvac/air-conditioning#breadcrumb"
      }
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/hvac/air-conditioning#service",
      "name": "Air Conditioning Services",
      "serviceType": "Residential Air Conditioning Services",
      "description": "Easy Home Service helps homeowners connect with local HVAC professionals for residential air conditioning repair, installation, maintenance, and replacement services.",
      "provider": {
        "@type": "Organization",
        "@id": "https://easyhomeservice.com/#organization",
        "name": "Easy Home Service",
        "url": "https://easyhomeservice.com/"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://easyhomeservice.com/hvac/air-conditioning"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/hvac/air-conditioning#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://easyhomeservice.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "HVAC",
          "item": "https://easyhomeservice.com/hvac"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Air Conditioning",
          "item": "https://easyhomeservice.com/hvac/air-conditioning"
        }
      ]
    }
  ]
}
</script>

SCHEMA
    ],
    
    
        'ventilation' => [
        'meta' => [
            'title'       => 'Ventilation Services for Homes | Installation, Repair & Maintenance',
            'description' => 'Find residential ventilation services for installation, repair, maintenance, ductwork, ERV, HRV and exhaust fans. Connect with local ventilation professionals.',
            'image'       => 'https://easyhomeservice.com/images/hvac_bnr_mob.webp',
            'image_alt'   => 'HVAC technician arriving to perform residential ventilation service'
        ],

        'schema' => <<<SCHEMA
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://easyhomeservice.com/#organization",
      "name": "Easy Home Service",
      "url": "https://easyhomeservice.com/"
    },
    {
      "@type": "WebSite",
      "@id": "https://easyhomeservice.com/#website",
      "url": "https://easyhomeservice.com/",
      "name": "Easy Home Service",
      "publisher": {
        "@id": "https://easyhomeservice.com/#organization"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/hvac/ventilation#webpage",
      "url": "https://easyhomeservice.com/hvac/ventilation",
      "name": "Ventilation Services for Homes | Installation, Repair & Maintenance",
      "description": "Find residential ventilation services for installation, repair, maintenance, ductwork, ERV, HRV and exhaust fans. Connect with local ventilation professionals.",
      "isPartOf": {
        "@id": "https://easyhomeservice.com/#website"
      },
      "publisher": {
        "@id": "https://easyhomeservice.com/#organization"
      },
      "breadcrumb": {
        "@id": "https://easyhomeservice.com/hvac/ventilation#breadcrumb"
      },
      "mainEntity": {
        "@id": "https://easyhomeservice.com/hvac/ventilation#service"
      }
    },
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/hvac/ventilation#service",
      "name": "Residential Ventilation Services",
      "serviceType": "Residential Ventilation Services",
      "description": "Residential ventilation services including ventilation installation, repair, maintenance, ductwork, exhaust fan solutions, ERV systems and HRV systems.",
      "url": "https://easyhomeservice.com/hvac/ventilation",
      "category": "HVAC Ventilation",
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "provider": {
        "@id": "https://easyhomeservice.com/#organization"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/hvac/ventilation#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://easyhomeservice.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "HVAC",
          "item": "https://easyhomeservice.com/hvac"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Ventilation Services",
          "item": "https://easyhomeservice.com/hvac/ventilation"
        }
      ]
    }
  ]
}
</script>
SCHEMA
    ],



   
];
