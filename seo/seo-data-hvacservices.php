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

      'ductwork' => [
        'meta' => [
            'title'       => 'HVAC Ductwork Services for Repair and Installation',
            'description' => 'Need HVAC ductwork services? Connect with local professionals for duct repair, installation, replacement, sealing, and insulation to improve home airflow.',
            'image'       => 'https://easyhomeservice.com/images/hvac_bnr_mob.webp',
            'image_alt'   => 'HVAC technician arriving to perform residential ductwork service'
        ],

        'schema' => <<<SCHEMA
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://easyhomeservice.com/hvac/ductwork#service",
      "name": "Ductwork Repair & Installation Services",
      "serviceType": "HVAC Ductwork Services",
      "description": "For ductwork replacement, insulation, sealing, and repair, compare local HVAC professionals. Get a free quotation right now by telling us what you're experiencing.",
      "url": "https://easyhomeservice.com/hvac/ductwork",
      "provider": {
        "@type": "Organization",
        "name": "Easy Home Service",
        "url": "https://easyhomeservice.com/"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://easyhomeservice.com/hvac/ductwork#webpage",
      "url": "https://easyhomeservice.com/hvac/ductwork",
      "name": "Ductwork Repair & Installation Services | Easy Home Service",
      "headline": "HVAC Ductwork Services for Better Home Comfort",
      "description": "For ductwork replacement, insulation, sealing, and repair, compare local HVAC professionals. Get a free quotation right now by telling us what you're experiencing.",
      "isPartOf": {
        "@type": "WebSite",
        "name": "Easy Home Service",
        "url": "https://easyhomeservice.com/"
      },
      "mainEntity": {
        "@id": "https://easyhomeservice.com/hvac/ductwork#service"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://easyhomeservice.com/hvac/ductwork#breadcrumb",
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
          "item": "https://easyhomeservice.com/hvac/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Ductwork",
          "item": "https://easyhomeservice.com/hvac/ductwork"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://easyhomeservice.com/hvac/ductwork#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is HVAC ductwork?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HVAC ductwork is the network of ducts that distributes heated and cooled air from your HVAC system to different areas of your home."
          }
        },
        {
          "@type": "Question",
          "name": "When does HVAC ductwork need repair?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ductwork may need repair when you notice weak airflow, uneven temperatures, unusual noises, visible damage, or higher-than-normal energy bills."
          }
        },
        {
          "@type": "Question",
          "name": "How often should HVAC ductwork be replaced?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ductwork does not have a fixed replacement schedule. Its condition, age, material, insulation, and installation quality determine when replacement may be necessary."
          }
        },
        {
          "@type": "Question",
          "name": "Can leaking ducts increase energy costs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Leaking ducts can allow conditioned air to escape, making your HVAC system work harder and potentially increasing energy consumption."
          }
        },
        {
          "@type": "Question",
          "name": "What is duct sealing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Duct sealing involves closing leaks and gaps around duct joints and connections to help prevent conditioned air from escaping."
          }
        },
        {
          "@type": "Question",
          "name": "Should I repair or replace my ductwork?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Minor leaks or isolated damage may be repaired, while severely damaged, deteriorated, or poorly designed ductwork may require replacement."
          }
        },
        {
          "@type": "Question",
          "name": "Can new ductwork improve airflow?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Properly sized and installed ductwork can help improve air distribution and address certain airflow problems throughout your home."
          }
        },
        {
          "@type": "Question",
          "name": "Does HVAC ductwork need insulation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Duct insulation can help reduce heat transfer, particularly when ducts run through unconditioned spaces such as attics, crawl spaces, or garages."
          }
        }
      ]
    }
  ]
}
</script>

SCHEMA
    ],

            'indoor-air-quality-services' => [
        'meta' => [
            'title'       => 'Indoor Air Quality Services for a Healthier, More Comfortable Home',
            'description' => 'Find indoor air quality services for testing, air purification, filtration, duct cleaning, and humidity control. Connect with local HVAC professionals for your home.',
            'image'       => 'https://easyhomeservice.com/images/hvac_bnr_mob.webp',
            'image_alt'   => 'Indoor air quality services for residential HVAC systems'
        ],

        'schema' => <<<SCHEMA

SCHEMA
    ],



   
];
