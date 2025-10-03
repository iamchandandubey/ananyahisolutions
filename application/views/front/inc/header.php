<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Title & Meta -->
    <title><?= $meta_title; ?></title>
    <meta name="description" content="<?= $meta_description; ?>">

    <meta name="robots" content="index, follow">
    <meta name="author" content="Ananya Hi Solutions">
    <meta name="copyright" content="Ananya Hi Solutions">

     <!-- Canonical & Hreflang -->
    <link rel="canonical" href="<?= $canonical_url ?>">
    
    <!-- Language -->
    <meta http-equiv="Content-Language" content="en">
    <meta name="language" content="English">
  
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/front/images/logo/ananya-favicon.ico') ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/front/images/logo/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/front/images/logo/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/front/images/logo/favicon-16x16.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/front/images/logo/ananya-favicon.ico') ?>" type="image/x-icon">
    <!-- End Favicon -->
    
    <meta name="theme-color" content="#0d6efd">
    
   
    <!-- Preload -->
    <link rel="preload" href="<?= base_url('assets/front/css/myStyle.css') ?>" as="style">
    <!-- <link rel="preload" href="https://yourwebsite.com/assets/images/digital-marketing.jpg" as="image"> -->

    <!-- Open Graph / Social Tags -->
    <meta property="og:title" content="<?= $og_and_twitter_title; ?>">
    <meta property="og:description" content="<?= $og_and_twitter_description; ?>">
    <meta property="og:image" content="<?= $og_and_twitter_image; ?>">
    <meta property="og:image:alt" content="<?= $og_and_twitter_image_alt; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="<?= $og_and_twitter_url; ?>">

    <meta property="og:type" content="<?= $og_type; ?>">
    <meta property="og:site_name" content="Ananya Hi Solutions">
    <meta property="og:locale" content="en_IN">
    <meta property="og:updated_time" content="<?= $og_updated_time; ?>">
    <meta property="og:determiner" content="the">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $og_and_twitter_title; ?>">
    <meta name="twitter:description" content="<?= $og_and_twitter_description; ?>">
    <meta name="twitter:image" content="<?= $og_and_twitter_image; ?>">
    <meta name="twitter:image:alt" content="<?= $og_and_twitter_image_alt; ?>">

    <meta name="twitter:site" content="@ananya_hi">
    <meta name="twitter:creator" content="@ananya_hi">
    

    <!-- Local SEO / Geo Tags -->
    <meta name="geo.region" content="IN-TG">
    <meta name="geo.placename" content="Hyderabad">
    <meta name="geo.position" content="17.4350069;78.4612303">
    <meta name="ICBM" content="17.4350069,78.4612303">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Ananya Hi Solutions",
    "image": "<?= base_url('assets/front/images/ahs-logo.png') ?>",
    "logo": "<?= base_url('assets/front/images/ahs-logo.png') ?>",
    "@id": "<?= $canonical_url ?>",
    "url": "<?= $canonical_url ?>",
    "telephone": "+917673935353",
    "email": "info@ananyahisolutions.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Flat 501, 5th Floor, BDR Towers, Road No. 2, Methodist Colon",
        "addressLocality": "Hyderabad",
        "addressRegion": "Telangana",
        "postalCode": "500016",
        "addressCountry": "IN"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "17.4350069",
        "longitude": "78.4612303"
    },
    "sameAs": [
        "https://www.facebook.com/AnanyaHiSolutions/",
        "https://www.instagram.com/ananyahisolutions/",
        "https://www.linkedin.com/company/ananya-hi-solutions"
    ],
    "priceRange": "<?= $schema_price; ?>",
    "openingHours": "Mo,Tu,We,Th,Fr 10:00-18:00",
    "areaServed": {
        "@type": "City",
        "name": "Hyderabad"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Services",
        "itemListElement": [
        {
            "@type": "OfferCatalog",
            "name": "Website Development",
            "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                "@type": "Service",
                "name": "Static Website Development",
                "url": "<?= base_url('website-design') ?>",
                "aggregateRating": {"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"25"}
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                "@type": "Service",
                "name": "Dynamic Website Development",
                "url": "<?= base_url('website-design') ?>",
                "aggregateRating": {"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"18"}
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                "@type": "Service",
                "name": "Ecommerce Website Development",
                "url": "<?= base_url('website-design') ?>",
                "aggregateRating": {"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"22"}
                }
            }
            ]
        },
        {
            "@type": "OfferCatalog",
            "name": "Digital Marketing",
            "itemListElement": [
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"SEO","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"30"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"SMM","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"22"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"PPC","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"20"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Content Marketing","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"18"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Email Marketing","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"15"}}}
            ]
        },
        {
            "@type": "OfferCatalog",
            "name": "Mobile Application Development",
            "itemListElement": [
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"iOS App Development","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"15"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Android App Development","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"14"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Cross-Platform Apps","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"12"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"App UI/UX Design","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"10"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"App Maintenance & Support","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"8"}}}
            ]
        },
        {
            "@type": "OfferCatalog",
            "name": "Ecommerce Development",
            "itemListElement": [
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Single Vendor Store","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"10"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Multi Vendor Marketplace","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"8"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Custom Multi Vendor Marketplace","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"6"}}}
            ]
        },
        {
            "@type": "OfferCatalog",
            "name": "Video Production",
            "itemListElement": [
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Corporate Video Production","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"12"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Promotional Marketing Videos","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"10"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Event Coverage & Highlights","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.6","reviewCount":"8"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Product Explainer Videos","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"9"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Social Media Video Content","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"7"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Music Video Production","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"5"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Short Films & Web Series Production","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"6"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Animation & Motion Graphics","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"8"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Video Editing & Post-Production","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"9"}}}
            ]
        },
        {
            "@type": "OfferCatalog",
            "name": "Software Development",
            "itemListElement": [
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"CRM Software Development","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"10"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Billing Software Development","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"8"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"College Management Software","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.7","reviewCount":"7"}}},
            {"@type":"Offer","itemOffered":{"@type":"Service","name":"Learning Management Software (LMS)","url":"<?= base_url('website-design') ?>","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"6"}}}
            ]
        }
        ]
    }
    }
    </script>


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url('assets/front/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/front/css/myStyle.css') ?>" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>

<?php
    //Top Header
    $this->load->view('front/inc/top_header');
    // Navigation Bar
    $this->load->view('front/inc/navigation');
?>



