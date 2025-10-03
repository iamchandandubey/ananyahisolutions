<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesController extends CI_Controller {

	//Website Design
	public function website_design()
    {
        // Hero Area
        $data['heading'] = "Website Design Company in Hyderabad";
        $data['para'] = "Ananya Hi Solutions is your trusted partner for <strong>affordable, SEO-friendly & mobile-optimized website design in Hyderabad</strong>. We create websites that not only look stunning but also bring you more <strong>traffic, leads & sales</strong>.";
        $data['trust_para'] = "✅ 100+ Websites Delivered in Hyderabad | ⭐ Rated 5/5 by Local Businesses";

        // Page Area
        $data['sub_heading'] = "Website Development Agency in Hyderabad for Startups & Brands";
        $data['sub_para'] = "Get <strong>SEO-friendly static, dynamic, and e-commerce websites</strong> that drive <strong>traffic, leads & sales</strong>. Trusted by startups & brands in Hyderabad.";

        // Dynamic Services Array
        $data['services'] = [
            [
                'title' => 'Static Website',
                'description' => 'Perfect for startups & small businesses, fast loading & SEO ready.',
                'icon' => 'bi-file-code',
                'link' => 'static-website'
            ],
            [
                'title' => 'Dynamic Website',
                'description' => 'Custom CMS solutions for blogs, portfolios & corporate websites.',
                'icon' => 'bi-layout-text-sidebar-reverse',
                'link' => 'dynamic-website'
            ],
            [
                'title' => 'E-commerce Website',
                'description' => 'Full-featured online stores with payment gateways & analytics.',
                'icon' => 'bi-cart3',
                'link' => 'ecommerce-website'
            ]
        ];


        //SEO
		$header_data['meta_title'] = "Website DEsign";
		$header_data['meta_description'] = "Web Development ";
		$header_data['canonical_url'] = current_url();

		// Open Graph
        $header_data['og_and_twitter_title'] = $header_data['meta_title'];
        $header_data['og_and_twitter_description'] = $header_data['meta_description'];
        $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
        $header_data['og_and_twitter_image_alt'] = "test alt text";
        $header_data['og_and_twitter_url'] = current_url();
		
		//ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
        $header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema
		$header_data['schema_price'] = "₹9,999 - ₹2,50,000";


		$this->load->view('front/inc/header',$header_data);
        $this->load->view('front/services/service_view', $data);
        $this->load->view('front/inc/footer');
    }

	
	// Digital Marketing
	public function digital_marketing()
	{
		// Hero Area
		$data['heading'] = "Digital Marketing Services in Hyderabad";
		$data['para'] = "Boost your business with <strong>SEO, social media marketing, PPC, email marketing & content strategies</strong> from Ananya Hi Solutions. We help startups & brands increase traffic, leads & sales.";
		$data['trust_para'] = "✅ Trusted by 100+ local businesses in Hyderabad | ⭐ Rated 5/5 for digital marketing results";

		// Page Area
		$data['sub_heading'] = "Comprehensive Digital Marketing Solutions for Startups & Brands";
		$data['sub_para'] = "Get <strong>SEO-friendly campaigns, social media strategies, paid ads & analytics-driven marketing</strong> that drive growth. We help you attract more traffic, generate leads & convert sales.";

		// Dynamic Digital Marketing Services Array
		$data['services'] = [
			[
				'title' => 'Search Engine Optimization (SEO)',
				'description' => 'Optimize your website to rank higher on Google and attract organic traffic.',
				'icon' => 'bi-search',
				'link' => 'seo-services'
			],
			[
				'title' => 'Social Media Marketing (SMM)',
				'description' => 'Grow your brand on platforms like Facebook, Instagram, LinkedIn, and more.',
				'icon' => 'bi-facebook',
				'link' => 'social-media-marketing'
			],
			[
				'title' => 'Pay-Per-Click Advertising (PPC)',
				'description' => 'Targeted campaigns on Google Ads and social media to get instant leads.',
				'icon' => 'bi-currency-dollar',
				'link' => 'ppc-services'
			],
			[
				'title' => 'Content Marketing',
				'description' => 'Create SEO-friendly content that engages your audience and builds authority.',
				'icon' => 'bi-pencil-square',
				'link' => 'content-marketing'
			],
			[
				'title' => 'Email Marketing',
				'description' => 'Reach your customers directly with high-converting email campaigns.',
				'icon' => 'bi-envelope-fill',
				'link' => 'email-marketing'
			]
		];

	//SEO
		$header_data['meta_title'] = "Digital Marekting";
		$header_data['meta_description'] = "Digital Marekting services ";
		$header_data['canonical_url'] = current_url();

		// Open Graph
        $header_data['og_and_twitter_title'] = $header_data['meta_title'];
        $header_data['og_and_twitter_description'] = $header_data['meta_description'];
        $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
        $header_data['og_and_twitter_image_alt'] = "test alt text";
        $header_data['og_and_twitter_url'] = current_url();
		
		//ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
        $header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema
		$header_data['schema_price'] = "₹9,999 - ₹2,50,000";


		$this->load->view('front/inc/header',$header_data);
		$this->load->view('front/services/service_view', $data); // Use same dynamic view
		$this->load->view('front/inc/footer');
	}


	// Mobile App Development
public function mobile_app()
{
    // Hero Area
    $data['heading'] = "Mobile App Development Company in Hyderabad";
    $data['para'] = "Build high-performance <strong>iOS & Android apps</strong> that are user-friendly, SEO-optimized, and drive engagement. Ananya Hi Solutions helps startups & brands grow with custom mobile solutions.";
    $data['trust_para'] = "✅ 50+ Apps Delivered | ⭐ Rated 5/5 by clients for mobile app solutions";

    // Page Area
    $data['sub_heading'] = "Custom Mobile App Solutions for Startups & Brands";
    $data['sub_para'] = "Get <strong>SEO-friendly, high-converting mobile apps</strong> for Android & iOS platforms. We specialize in responsive, fast, and engaging apps that generate leads and sales.";

    // Dynamic Mobile App Services Array
    $data['services'] = [
        [
            'title' => 'iOS App Development',
            'description' => 'Create responsive and engaging iOS apps that perform flawlessly on iPhones & iPads.',
            'icon' => 'bi-apple',
            'link' => 'ios-app-development'
        ],
        [
            'title' => 'Android App Development',
            'description' => 'Build high-quality Android apps optimized for performance and user experience.',
            'icon' => 'bi-android2',
            'link' => 'android-app-development'
        ],
        [
            'title' => 'Cross-Platform Apps',
            'description' => 'Develop apps that run on both iOS and Android using frameworks like Flutter & React Native.',
            'icon' => 'bi-phone',
            'link' => 'cross-platform-apps'
        ],
        [
            'title' => 'App UI/UX Design',
            'description' => 'Design intuitive and attractive app interfaces that enhance user engagement.',
            'icon' => 'bi-palette',
            'link' => 'app-ui-ux-design'
        ],
        [
            'title' => 'App Maintenance & Support',
            'description' => 'Ongoing updates, bug fixes, and support to keep your app performing optimally.',
            'icon' => 'bi-tools',
            'link' => 'app-maintenance-support'
        ]
    ];

    //SEO
    $header_data['meta_title'] = "Mobile Application";
    $header_data['meta_description'] = "Mobile App";
    $header_data['canonical_url'] = current_url();

    // Open Graph
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
    $header_data['og_and_twitter_image_alt'] = "test alt text";
    $header_data['og_and_twitter_url'] = current_url();
    
    //ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema
    $header_data['schema_price'] = "₹9,999 - ₹2,50,000";


    $this->load->view('front/inc/header',$header_data);
    $this->load->view('front/services/service_view', $data); // Reuse the same dynamic view
    $this->load->view('front/inc/footer');
}

// E-commerce Website Development
public function ecommerce_website()
{
    // Hero Area
    $data['heading'] = "E-commerce Website Development in Hyderabad";
    $data['para'] = "Launch a <strong>high-converting e-commerce store</strong> with secure payment gateways, responsive design, and SEO-friendly structure. We create both <strong>single-vendor and multi-vendor stores</strong> that help businesses boost sales online.";
    $data['trust_para'] = "✅ 100+ E-commerce Stores Delivered | ⭐ Rated 5/5 for reliability and performance";

    // Page Area
    $data['sub_heading'] = "Custom E-commerce Solutions for Single & Multi Vendor Stores";
    $data['sub_para'] = "Get <strong>SEO-friendly, mobile-optimized e-commerce websites</strong> with shopping carts, vendor dashboards, and analytics. Trusted by startups & brands in Hyderabad for online growth.";

    // Dynamic E-commerce Services Array (3 main services)
    $data['services'] = [
        [
            'title' => 'Single Vendor Store',
            'description' => 'A fully customizable WooCommerce or Shopify store for a single vendor with SEO optimization to drive traffic and sales.',
            'icon' => 'bi-cart-check',
            'link' => 'single-vendor-store'
        ],
        [
            'title' => 'Multi Vendor Marketplace',
            'description' => 'Enterprise-level multi-vendor marketplace optimized for SEO, performance, and seamless vendor management.',
            'icon' => 'bi-grid-1x2',
            'link' => 'multi-vendor-marketplace'
        ],
        [
            'title' => 'Custom Multi Vendor Marketplace',
            'description' => 'Tailor-made marketplace with vendor dashboards, analytics, and advanced features for maximum conversions.',
            'icon' => 'bi-bag-check',
            'link' => 'custom-multi-vendor'
        ]
    ];

   //SEO
		$header_data['meta_title'] = "ecommerce";
		$header_data['meta_description'] = "ecommerce Software Development ";
		$header_data['canonical_url'] = current_url();

		// Open Graph
        $header_data['og_and_twitter_title'] = $header_data['meta_title'];
        $header_data['og_and_twitter_description'] = $header_data['meta_description'];
        $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
        $header_data['og_and_twitter_image_alt'] = "test alt text";
        $header_data['og_and_twitter_url'] = current_url();
		
		//ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
        $header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema
		$header_data['schema_price'] = "₹9,999 - ₹2,50,000";


	$this->load->view('front/inc/header',$header_data);
    $this->load->view('front/services/service_view', $data);
    $this->load->view('front/inc/footer');
}

public function video_production()
{
    // Hero Area
    $data['heading'] = "Video Production Services in Hyderabad";
    $data['para'] = "Create <strong>high-quality, engaging, and SEO-optimized videos</strong> that connect with your audience and boost brand visibility. We provide end-to-end video production services for businesses, brands, and creators.";
    $data['trust_para'] = "✅ 200+ Videos Delivered | 🎬 Trusted by Startups, Corporates & Creators";

    // Page Area
    $data['sub_heading'] = "Professional Video Production Solutions";
    $data['sub_para'] = "From <strong>corporate films</strong> to <strong>social media content</strong>, we craft videos that tell stories, engage customers, and drive conversions. Our video team ensures top-quality visuals, editing, and marketing impact.";

    // Dynamic Video Production Services Array
    $data['services'] = [
        [
            'title' => 'Corporate Video Production',
            'description' => 'Professional corporate films to showcase your brand, culture, and success stories.',
            'icon' => 'bi-building',
            'link' => 'corporate-video-production'
        ],
        [
            'title' => 'Promotional Marketing Videos',
            'description' => 'Attractive marketing videos to promote your products, services, and offers.',
            'icon' => 'bi-bullseye',
            'link' => 'promotional-marketing-videos'
        ],
        [
            'title' => 'Event Coverage & Highlights',
            'description' => 'Full event coverage with cinematic highlights and engaging edits.',
            'icon' => 'bi-camera-reels',
            'link' => 'event-coverage-videos'
        ],
        [
            'title' => 'Product Explainer Videos',
            'description' => 'Simple and creative videos to explain your products and boost conversions.',
            'icon' => 'bi-box',
            'link' => 'product-explainer-videos'
        ],
        [
            'title' => 'Social Media Video Content',
            'description' => 'Short-form video content optimized for Instagram, Facebook & YouTube.',
            'icon' => 'bi-instagram',
            'link' => 'social-media-video-content'
        ],
        [
            'title' => 'Music Video Production',
            'description' => 'Creative music videos with cinematic visuals and high-end editing.',
            'icon' => 'bi-music-note-beamed',
            'link' => 'music-video-production'
        ],
        [
            'title' => 'Short Films & Web Series Production',
            'description' => 'End-to-end production for short films and web series with professional crews.',
            'icon' => 'bi-film',
            'link' => 'short-films-web-series'
        ],
        [
            'title' => 'Animation & Motion Graphics',
            'description' => '2D/3D animation and motion graphics videos for branding and storytelling.',
            'icon' => 'bi-palette',
            'link' => 'animation-motion-graphics'
        ],
        [
            'title' => 'Video Editing & Post-Production',
            'description' => 'High-quality video editing, VFX, and post-production services.',
            'icon' => 'bi-scissors',
            'link' => 'video-editing-post-production'
        ]
    ];

   //SEO
		$header_data['meta_title'] = "Video Production";
		$header_data['meta_description'] = "Contact Software Development ";
		$header_data['canonical_url'] = current_url();

		// Open Graph
        $header_data['og_and_twitter_title'] = $header_data['meta_title'];
        $header_data['og_and_twitter_description'] = $header_data['meta_description'];
        $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
        $header_data['og_and_twitter_image_alt'] = "test alt text";
        $header_data['og_and_twitter_url'] = current_url();
		
		//ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
        $header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema
		$header_data['schema_price'] = "₹9,999 - ₹2,50,000";


		$this->load->view('front/inc/header',$header_data);
    $this->load->view('front/services/service_view', $data); // Reuse same dynamic view
    $this->load->view('front/inc/footer');
}

public function software_development()
{
    // Hero Area
    $data['heading'] = "Custom Software Development Company in Hyderabad";
    $data['para'] = "Get <strong>scalable, secure, and SEO-optimized software solutions</strong> tailored for your business needs. Ananya Hi Solutions specializes in <strong>CRM, Billing, College & Learning Management Software</strong> that help you streamline operations and drive growth.";
    $data['trust_para'] = "✅ 50+ Custom Software Projects Delivered | ⭐ Rated 5/5 by Businesses & Institutions";

    // Page Area
    $data['sub_heading'] = "Software Development Services for Businesses & Institutions";
    $data['sub_para'] = "We build <strong>custom software solutions</strong> designed to automate workflows, increase productivity, and improve customer experience. From CRM to LMS, our expert team delivers high-performance applications.";

    // Dynamic Software Services Array
    $data['services'] = [
        [
            'title' => 'CRM Software Development',
            'description' => 'Custom CRM solutions to manage leads, sales, and customer relationships effectively.',
            'icon' => 'bi-people',
            'link' => 'crm-software-development'
        ],
        [
            'title' => 'Billing Software Development',
            'description' => 'Smart billing & invoicing software with GST-ready features and real-time reporting.',
            'icon' => 'bi-receipt',
            'link' => 'billing-software-development'
        ],
        [
            'title' => 'College Management Software',
            'description' => 'Comprehensive college ERP with student management, attendance, fees & exam modules.',
            'icon' => 'bi-mortarboard',
            'link' => 'college-management-software'
        ],
        [
            'title' => 'Learning Management Software (LMS)',
            'description' => 'Feature-rich LMS platforms for e-learning, course tracking, and student engagement.',
            'icon' => 'bi-book',
            'link' => 'learning-management-software'
        ]
    ];

   //SEO
		$header_data['meta_title'] = "Software Deelopment";
		$header_data['meta_description'] = "Contact Software Development ";
		$header_data['canonical_url'] = current_url();

		// Open Graph
        $header_data['og_and_twitter_title'] = $header_data['meta_title'];
        $header_data['og_and_twitter_description'] = $header_data['meta_description'];
        $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
        $header_data['og_and_twitter_image_alt'] = "test alt text";
        $header_data['og_and_twitter_url'] = current_url();
		
		//ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
        $header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema
		$header_data['schema_price'] = "₹9,999 - ₹2,50,000";


		$this->load->view('front/inc/header',$header_data);
    $this->load->view('front/services/service_view', $data); // Reuse dynamic view
    $this->load->view('front/inc/footer');
}






	
}
