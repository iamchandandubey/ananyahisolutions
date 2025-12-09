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
                'link' => 'static-website-design-services-hyderabad'
            ],
            [
                'title' => 'Dynamic Website',
                'description' => 'Custom CMS solutions for blogs, portfolios & corporate websites.',
                'icon' => 'bi-layout-text-sidebar-reverse',
                'link' => 'dynamic-website-design-services-hyderabad'
            ],
            [
                'title' => 'E-commerce Website',
                'description' => 'Full-featured online stores with payment gateways & analytics.',
                'icon' => 'bi-cart3',
                'link' => 'ecommerce-website-developers-hyderabad'
            ]
        ];


        //SEO
		$header_data['meta_title'] = "Website Design";
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
				'link' => 'seo-service-provider-hyderabad'
			],
			[
				'title' => 'Social Media Marketing (SMM)',
				'description' => 'Grow your brand on platforms like Facebook, Instagram, LinkedIn, and more.',
				'icon' => 'bi-facebook',
				'link' => 'social-media-marketing-services-hyderabad'
			],
			[
				'title' => 'Pay-Per-Click Advertising (PPC)',
				'description' => 'Targeted campaigns on Google Ads and social media to get instant leads.',
				'icon' => 'bi-currency-dollar',
				'link' => 'google-ads-services-hyderabad'
			],
			[
				'title' => 'Content Marketing',
				'description' => 'Create SEO-friendly content that engages your audience and builds authority.',
				'icon' => 'bi-pencil-square',
				'link' => 'content-marketing-services-hyderabad'
			],
			[
				'title' => 'Email Marketing',
				'description' => 'Reach your customers directly with high-converting email campaigns.',
				'icon' => 'bi-envelope-fill',
				'link' => 'email-campaign-management-hyderabad'
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
                'link' => 'ios-app-development-company-hyderabad'
            ],
            [
                'title' => 'Android App Development',
                'description' => 'Build high-quality Android apps optimized for performance and user experience.',
                'icon' => 'bi-android2',
                'link' => 'android-app-development-company-hyderabad'
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
                'link' => 'single-vendor-website-development-hyderabad'
            ],
            [
                'title' => 'Multi Vendor Marketplace',
                'description' => 'Enterprise-level multi-vendor marketplace optimized for SEO, performance, and seamless vendor management.',
                'icon' => 'bi-grid-1x2',
                'link' => 'multi-vendor-website-development-company-hyderabad'
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
                'link' => 'corporate-video-shoot-hyderabad'
            ],
            [
                'title' => 'Promotional Marketing Videos',
                'description' => 'Attractive marketing videos to promote your products, services, and offers.',
                'icon' => 'bi-bullseye',
                'link' => 'promotional-marketing-videos-hyderabad'
            ],
            [
                'title' => 'Event Coverage & Highlights',
                'description' => 'Full event coverage with cinematic highlights and engaging edits.',
                'icon' => 'bi-camera-reels',
                'link' => 'event-coverage-videos-highlights-hyderabad'
            ],
            [
                'title' => 'Product Explainer Videos',
                'description' => 'Simple and creative videos to explain your products and boost conversions.',
                'icon' => 'bi-box',
                'link' => 'product-explainer-video-production-hyderabad'
            ],
            [
                'title' => 'Social Media Video Content',
                'description' => 'Short-form video content optimized for Instagram, Facebook & YouTube.',
                'icon' => 'bi-instagram',
                'link' => 'social-media-video-production-hyderabad'
            ],
            [
                'title' => 'Music Video Production',
                'description' => 'Creative music videos with cinematic visuals and high-end editing.',
                'icon' => 'bi-music-note-beamed',
                'link' => 'music-video-shoot-hyderabad'
            ],
            [
                'title' => 'Short Films & Web Series Production',
                'description' => 'End-to-end production for short films and web series with professional crews.',
                'icon' => 'bi-film',
                'link' => 'short-films-web-series-production-hyderabad'
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
                'link' => 'crm-software-development-hyderabad'
            ],
            [
                'title' => 'Billing Software Development',
                'description' => 'Smart billing & invoicing software with GST-ready features and real-time reporting.',
                'icon' => 'bi-receipt',
                'link' => 'billing-software-development-hyderabad'
            ],
            [
                'title' => 'College Management Software',
                'description' => 'Comprehensive college ERP with student management, attendance, fees & exam modules.',
                'icon' => 'bi-mortarboard',
                'link' => 'college-management-software-hyderabad'
            ],
            [
                'title' => 'Learning Management Software (LMS)',
                'description' => 'Feature-rich LMS platforms for e-learning, course tracking, and student engagement.',
                'icon' => 'bi-book',
                'link' => 'learning-management-software-hyderabad'
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


    // public function service_details()
    // {
    //     // Page Content
    //     $data['heading'] = "Static Website Design in Hyderabad";
    //     $data['heading_paragraph'] = "Get a professional, fast-loading, mobile-friendly website for your business starting at just ₹4,999!";

    //     $data['heading1'] = "Your Business Deserves a Stunning Website That Works 24/7";
    //     $data['paragraph1'] = " Stop losing customers because of an outdated or missing website! At <strong>Ananya Hi Solution</strong>, we build fast, responsive, and high-converting static websites that help you turn local visitors into real business leads — all at an affordable one-time cost.";

    //     $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'><div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
    //         <h5 class='mb-1'>Starter Static Website</h5>
    //         <p class='mb-0'>Perfect for Small Businesses</p>
    //     </div>
    //     <div class='package-body p-4'>
    //         <ul class='list-unstyled mb-4 feature-list'>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 6 Web Pages Website.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Web Hosting & SSL for 1 year.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>1 Week FREE Support After Deployment.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive Design.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Basic SEO Setup.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Browser Compatibility Testing.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Google Page Speed Optimized.</li>
    //         </ul>
    //         <div class='my-2 text-center'>
    //             <h6 class='fw-bold text-dark'>Want to know what’s inside our hidden plans?</h6>
    //             <a href='" . base_url("package-details/static-website-package-hyderabad") . "' class='btn btn-gradient'>
    //                 <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
    //             </a>
    //         </div>
    //     </div>
    //     </div>";

    //     $data['services_img'] = "assets/front/images/services/informative-website-design-hyderabad.jpg";
    //     $data['services_img_alt'] = "website design company hyderabad";


    //     $data['heading2'] = "Best Static Website Design Services in Hyderabad";
    //     $data['paragraph2'] = "<strong>Ananya Hi Solutions</strong> is a trusted <strong>static website design company in Hyderabad</strong> with over <strong>10+ years of experience</strong> in crafting modern, mobile-friendly, and SEO-optimized static websites. Our goal is simple — to help startups, small businesses, and growing brands build an online presence that drives results without breaking the bank.</p> <p>Whether you’re launching your first website or redesigning an existing one, our expert developers and designers ensure your site looks stunning, loads fast, and delivers measurable business growth.  <div class='bg-success text-light p-3 rounded mb-3'> <p class='mb-0'><i class='bi bi-lightning-charge  me-2'></i> <strong>Bonus:</strong> Get <strong>Free Hosting & SSL</strong> for 1 Year with every plan. </p></div>";

    //     $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Fast-loading, error-free websites</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO-ready structure with meta optimization</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> 100% mobile-responsive & cross-browser compatible</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> Affordable packages for startups & local businesses</li>";

    //     // End Page Content


    //     //SEO
    //     $header_data['meta_title'] = "Software Deelopment";
    //     $header_data['meta_description'] = "Contact Software Development ";
    //     $header_data['canonical_url'] = current_url();

    //     // Open Graph
    //     $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    //     $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    //     $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
    //     $header_data['og_and_twitter_image_alt'] = "test alt text";
    //     $header_data['og_and_twitter_url'] = current_url();
        
    //     //ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
    //     $header_data['og_type'] = "website";
    //     $header_data['og_updated_time'] = date('c');

    //     // Schema
    //     $header_data['schema_price'] = "₹9,999 - ₹2,50,000";


    //     $this->load->view('front/inc/header',$header_data);
    //     $this->load->view('front/services/service_details_view',$data); // Reuse dynamic view
    //     $this->load->view('front/inc/footer');
    // }




    // Start - Full Services Page Methods 

    public function Static_Website()
    {
        // Page Content
        $data['heading'] = "Static Website Design Services in Hyderabad";
        $data['heading_paragraph'] = "Get a professional, fast-loading, mobile-friendly website for your business starting at just ₹3,999!";

        $data['heading1'] = "Why Ananya Hi Solutions is The Best Static Website Design Company in Hyderabad?";
        $data['paragraph1'] = "At Ananya Hi Solutions, we combine creativity, performance, and technology to deliver the best static website design services in Hyderabad. Our team focuses on crafting visually appealing, fast-loading, and SEO-friendly websites that help your business stand out online. With a strong track record of satisfied clients, modern design practices, and affordable pricing, we ensure your website not only looks great but also drives real business results.";

        $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'><div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Starter Static Website</h5>
            <p class='mb-0'>Perfect for Small Businesses</p>
        </div>
        <div class='package-body p-4'>
            <ul class='list-unstyled mb-4 feature-list'>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 6 Web Pages Website.</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Web Hosting & SSL for 1 year.</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>1 Week FREE Support After Deployment.</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive Design.</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Basic SEO Setup.</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Browser Compatibility Testing.</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Google Page Speed Optimized.</li>
            </ul>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Want to know what’s inside our hidden plans?</h6>
                <a href='" . base_url("package-details/static-website-package-hyderabad") . "' class='btn btn-gradient'>
                    <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
                </a>
            </div>
        </div>
        </div>";

        $data['services_img'] = "assets/front/images/services/informative-website-design-hyderabad.jpg";
        $data['services_img_alt'] = "website design company hyderabad";


        $data['heading2'] = "Industries We Serve with Static Website Design";
        $data['paragraph2'] = "At Ananya Hi Solutions, we provide custom static website design services in Hyderabad for a wide range of industries. From small businesses, startups, and corporates to educational institutions, healthcare, retail, and hospitality, our websites are tailored to reflect each industry’s unique identity. By combining modern design, fast performance, and SEO-friendly structure, we help businesses across sectors establish a strong online presence that engages visitors and drives results.";

        $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Fast-loading, error-free websites</li>
                    <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO-ready structure with meta optimization</li>
                    <li><i class='bi bi-check-circle-fill text-success me-2'></i> 100% mobile-responsive & cross-browser compatible</li>
                    <li><i class='bi bi-check-circle-fill text-success me-2'></i> Affordable packages for startups & local businesses</li>";

        // End Page Content


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
        $this->load->view('front/services/service_details_view',$data); // Reuse dynamic view
        $this->load->view('front/inc/footer');
    }

    public function Dynamic_Website(){
        // Page Content
        $data['heading'] = "Dynamic Website Design Services in Hyderabad";
        $data['heading_paragraph'] = "Build a powerful, feature-rich, and responsive dynamic website starting at just ₹14,999! Perfect for businesses that want control, flexibility, and scalability.";

        $data['heading1'] = "Why Choose Ananya Hi Solutions for Dynamic Website Design in Hyderabad?";
        $data['paragraph1'] = "At Ananya Hi Solutions, we specialize in creating custom dynamic websites that are secure, scalable, and easy to manage. Whether you need a CMS-based website, eCommerce platform, or a database-driven web portal, our team ensures every project is built for performance and long-term success. With user-friendly admin panels, SEO-friendly architecture, and mobile responsiveness, we help your business stay ahead in the digital space.";

        $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'>
            <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
                <h5 class='mb-1'>Starter Dynamic Website</h5>
                <p class='mb-0'>Ideal for Growing Businesses</p>
            </div>
        <div class='package-body p-4'>
            <ul class='list-unstyled mb-4 feature-list'>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 10 Dynamic Pages with CMS.</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Admin Panel to Manage Content.</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Web Hosting & SSL for 1 year.</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>SEO-Friendly URL Structure.</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Database Integration (MySQL).</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive & Secure Coding.</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>1 Month Free Technical Support.</li>
            </ul>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Want to explore advanced plans?</h6>
                <a href='" . base_url("package-details/dynamic-website-package-hyderabad") . "' class='btn btn-gradient'>
                    <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
                </a>
            </div>
        </div>
        </div>";

        $data['services_img'] = "assets/front/images/services/dynamic-website-development-services-hyderabad.jpg";
        $data['services_img_alt'] = "dynamic website design company hyderabad";

        $data['heading2'] = "Industries We Serve with Dynamic Website Design";
        $data['paragraph2'] = "We provide dynamic website development services in Hyderabad for startups, SMEs, corporates, and enterprises across industries — including education, healthcare, eCommerce, real estate, logistics, and hospitality. Our dynamic websites are built for performance, functionality, and future scalability — giving you full control over content and user experience.";

        $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Easy-to-manage CMS-based websites</li>
            <li><i class='bi bi-check-circle-fill text-success me-2'></i> Database-driven functionality</li>
            <li><i class='bi bi-check-circle-fill text-success me-2'></i> Secure admin panel for content updates</li>
            <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO-friendly and mobile-optimized design</li>
            <li><i class='bi bi-check-circle-fill text-success me-2'></i> Fast loading and scalable architecture</li>";

        // SEO
        $header_data['meta_title'] = "Dynamic Website Design Services in Hyderabad | Ananya Hi Solutions";
        $header_data['meta_description'] = "Get a powerful, scalable, and SEO-friendly dynamic website in Hyderabad. We build CMS-based and custom websites with admin panel, hosting, and full support.";
        $header_data['canonical_url'] = current_url();

        // Open Graph / Twitter
        $header_data['og_and_twitter_title'] = $header_data['meta_title'];
        $header_data['og_and_twitter_description'] = $header_data['meta_description'];
        $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/dynamic-website-design-hyderabad.jpg');
        $header_data['og_and_twitter_image_alt'] = "dynamic website design company hyderabad";
        $header_data['og_and_twitter_url'] = current_url();

        // OG Type
        $header_data['og_type'] = "website";
        $header_data['og_updated_time'] = date('c');

        // Schema
        $header_data['schema_price'] = "₹9,999 - ₹2,50,000";

        // Load Views
        $this->load->view('front/inc/header', $header_data);
        $this->load->view('front/services/service_details_view', $data); // same view
        $this->load->view('front/inc/footer');
    }



    public function ECommerce_Website_Development(){
            // Page Content
            $data['heading'] = "E-Commerce Website Development Services in Hyderabad";
            $data['heading_paragraph'] = "Start selling online with a powerful, user-friendly, and secure eCommerce website starting at just ₹29,999! We create customized eCommerce solutions to help you grow your business digitally.";

            $data['heading1'] = "Why Choose Ananya Hi Solutions for E-Commerce Website Development in Hyderabad?";
            $data['paragraph1'] = "At Ananya Hi Solutions, we specialize in building result-driven eCommerce websites that deliver sales, performance, and great user experience. From startups to large retail brands, we help businesses build robust online stores powered by CMS or custom frameworks. Our team focuses on secure payment integration, mobile responsiveness, product management, and SEO optimization to ensure your store performs flawlessly.";

            $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'>
                <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
                    <h5 class='mb-1'>Starter E-Commerce Website</h5>
                    <p class='mb-0'>Perfect for Small & Medium Businesses</p>
                </div>
                <div class='package-body p-4'>
                    <ul class='list-unstyled mb-4 feature-list'>
                        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 50 Products with Admin Panel.</li>
                        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Payment Gateway Integration (Razorpay / PayU).</li>
                        <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Domain, Hosting & SSL for 1 Year.</li>
                        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Product Search & Filter Options.</li>
                        <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Order Management System.</li>
                        <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive, SEO & Speed Optimized.</li>
                        <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>1 Month Free Technical Support.</li>
                    </ul>
                    <div class='my-2 text-center'>
                        <h6 class='fw-bold text-dark'>Want to explore advanced plans?</h6>
                        <a href='" . base_url("package-details/ecommerce-website-development-hyderabad") . "' class='btn btn-gradient'>
                            <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
                        </a>
                    </div>
                </div>
            </div>";

            $data['services_img'] = "assets/front/images/services/ecommerce-web-developer.jpg";
            $data['services_img_alt'] = "ecommerce website development company hyderabad";

            $data['heading2'] = "Industries We Serve with E-Commerce Development";
            $data['paragraph2'] = "We develop high-performing eCommerce websites for industries like fashion, electronics, groceries, furniture, health & beauty, jewelry, and more. Every online store we build is scalable, SEO-ready, and conversion-optimized to help businesses generate more revenue online.";

            $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Custom online store with product management</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i> Secure payment gateway integration</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i> Easy-to-use admin dashboard</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO, speed & mobile optimized</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i> Scalable architecture with analytics integration</li>";

            // SEO Meta
            $header_data['meta_title'] = "E-Commerce Website Development Services in Hyderabad | Ananya Hi Solutions";
            $header_data['meta_description'] = "Launch your online store with Ananya Hi Solutions – Hyderabad’s top eCommerce website development company. Custom design, admin panel, hosting & full support included.";
            $header_data['canonical_url'] = current_url();

            // Open Graph / Twitter
            $header_data['og_and_twitter_title'] = $header_data['meta_title'];
            $header_data['og_and_twitter_description'] = $header_data['meta_description'];
            $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/ecommerce-development-services-hyderabad.jpg');
            $header_data['og_and_twitter_image_alt'] = "ecommerce website design company hyderabad";
            $header_data['og_and_twitter_url'] = current_url();

            // OG Type
            $header_data['og_type'] = "website";
            $header_data['og_updated_time'] = date('c');

            // Schema
            $header_data['schema_price'] = "₹24,999 - ₹5,00,000";

            // Load Views
            $this->load->view('front/inc/header', $header_data);
            $this->load->view('front/services/service_details_view', $data);
            $this->load->view('front/inc/footer');
    }


   public function SEO_Serices() {
    // Page Content
    $data['heading'] = "SEO Services in Hyderabad | Improve Your Google Rankings";
    $data['heading_paragraph'] = "Boost your website’s visibility and attract more organic traffic with our proven SEO strategies. We help your business rank higher on Google and generate qualified leads consistently.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for SEO Services in Hyderabad?";
    $data['paragraph1'] = "At Ananya Hi Solutions, we provide data-driven SEO services tailored to your business goals. Our SEO experts in Hyderabad specialize in on-page, off-page, local, and technical SEO to deliver measurable results. We help your business increase visibility, improve search rankings, and achieve long-term growth.";

    $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Professional SEO Services</h5>
            <p class='mb-0'>Designed for Business Growth & Visibility</p>
        </div>
        <div class='package-body p-4'>
            <ul class='list-unstyled mb-4 feature-list'>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Comprehensive Website SEO Audit</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Keyword Research & Competitor Analysis</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>On-page & Technical Optimization</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Local SEO & Google Business Optimization</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>High-quality Backlink Strategy</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Monthly Performance Reporting</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Continuous Monitoring & Improvement</li>
            </ul>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Want to explore our full SEO strategy?</h6>
                <a href='" . base_url("package-details/seo-services-hyderabad") . "' class='btn btn-gradient'>
                    <i class='bi bi-unlock-fill me-2'></i>Discover More
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/seo-services-hyderabad.jpg";
    $data['services_img_alt'] = "seo company in hyderabad";

    $data['heading2'] = "Comprehensive SEO Services We Offer";
    $data['paragraph2'] = "Our SEO services in Hyderabad cover everything your website needs to perform and rank well on Google. From technical SEO and content strategy to link building and analytics — we deliver holistic solutions that strengthen your online presence.";

    $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> On-page & Off-page SEO optimization</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Local SEO for Google Maps & regional targeting</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Keyword research & content strategy</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Monthly reports & transparent tracking</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Long-term organic traffic growth</li>";

    // SEO Meta
    $header_data['meta_title'] = "SEO Services in Hyderabad | Ananya Hi Solutions - Best SEO Company";
    $header_data['meta_description'] = "Looking for the best SEO company in Hyderabad? Ananya Hi Solutions offers expert SEO services that improve Google rankings, drive traffic, and grow your business.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/seo-services-company-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "best seo services in hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (price optional — remove if you don’t want it indexed)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


   public function Social_Media_Agency() {
    // Page Content
    $data['heading'] = "Social Media Marketing Agency in Hyderabad | Grow Your Brand Online";
    $data['heading_paragraph'] = "Boost your online presence with creative and result-driven social media marketing. We help your business connect with the right audience and build a powerful brand presence across all major platforms.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions as Your Social Media Marketing Agency in Hyderabad?";
    $data['paragraph1'] = "At Ananya Hi Solutions, we create data-driven and engaging social media campaigns that deliver real results. Whether you're looking to build brand awareness, generate leads, or increase sales — our social media experts help you achieve your business goals through creative visuals, targeted ads, and performance analytics. We handle everything from content creation to audience growth and paid campaigns.";

    $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Professional Social Media Marketing</h5>
            <p class='mb-0'>Engage, Inspire, and Convert Your Audience</p>
        </div>
        <div class='package-body p-4'>
            <ul class='list-unstyled mb-4 feature-list'>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Creative Posts for Facebook, Instagram & LinkedIn</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Monthly Content Strategy & Calendar</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Ad Campaign Setup & Management</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Audience Targeting & Growth Strategy</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Competitor & Trend Analysis</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Performance Report & Analytics</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Hashtag & Engagement Optimization</li>
            </ul>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Want to explore our full social media marketing plans?</h6>
                <a href='" . base_url("package-details/social-media-marketing-hyderabad") . "' class='btn btn-gradient'>
                    <i class='bi bi-unlock-fill me-2'></i>View Full Packages
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/social-media-marketing-services-hyderabad.jpg";
    $data['services_img_alt'] = "social media marketing agency hyderabad";

    $data['heading2'] = "Our Social Media Marketing Expertise";
    $data['paragraph2'] = "We manage end-to-end social media marketing campaigns for businesses across industries — including retail, education, hospitality, healthcare, real estate, and more. Our focus is on building brand trust, growing followers, and generating measurable engagement that converts.";

    $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Custom social media strategy for your brand</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Professional content creation & post design</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Paid ads management on Facebook & Instagram</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Monthly growth & engagement reporting</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Dedicated social media manager for your brand</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Social Media Marketing Agency in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Looking for the best social media marketing agency in Hyderabad? Ananya Hi Solutions helps you grow your brand with creative posts, ad campaigns, and engagement strategies.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/social-media-agency-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "social media marketing company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (optional, no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}



    public function Google_Ads_Agency() {
    // Page Content
    $data['heading'] = "Google Ads Agency in Hyderabad | PPC Management Services";
    $data['heading_paragraph'] = "Maximize your ROI with data-driven Google Ads campaigns. Our certified PPC experts help you generate quality leads and boost conversions through strategic ad management.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions as Your Google Ads Agency in Hyderabad?";
    $data['paragraph1'] = "At Ananya Hi Solutions, we manage Google Ads campaigns that deliver measurable results. From keyword research and audience targeting to ad copy creation and conversion tracking — we handle every step strategically. Our focus is on optimizing your ad spend and generating more qualified leads for your business.";

    $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Professional Google Ads Management</h5>
            <p class='mb-0'>Drive Instant Leads & Conversions</p>
        </div>
        <div class='package-body p-4'>
            <ul class='list-unstyled mb-4 feature-list'>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Keyword Research & Campaign Setup</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Search, Display & Remarketing Ads</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Landing Page & Conversion Optimization</li>
                <li><i class='bi bi-check-circle-fill text-success me-2'></i>Ad Copywriting & A/B Testing</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Daily Campaign Monitoring & Adjustments</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Monthly Performance Reporting</li>
                <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Expert Account Manager Support</li>
            </ul>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Want to see how we can scale your ad performance?</h6>
                <a href='" . base_url("package-details/google-ads-management-hyderabad") . "' class='btn btn-gradient'>
                    <i class='bi bi-unlock-fill me-2'></i>View Full Packages
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/google-ad-agency-hyderabad.jpg";
    $data['services_img_alt'] = "google ads agency hyderabad";

    $data['heading2'] = "Our Google Ads Management Expertise";
    $data['paragraph2'] = "We help businesses across Hyderabad generate consistent, high-quality leads with performance-driven Google Ads campaigns. Whether you want to promote your services, increase sales, or expand reach — our team creates campaigns that deliver results with measurable ROI.";

    $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Certified Google Ads experts</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> ROI-focused PPC strategy</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Smart keyword targeting & bidding</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Conversion tracking & performance reports</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i> Ongoing optimization & dedicated support</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Google Ads Agency in Hyderabad | PPC Management Company - Ananya Hi Solutions";
    $header_data['meta_description'] = "Boost your business with expert Google Ads management in Hyderabad. Ananya Hi Solutions helps you get more leads and maximize ROI with targeted PPC campaigns.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/google-ads-marketing-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "google ads management company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no visible price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}



   public function Content_Marketing_Services() {
    // Page Content
    $data['heading'] = "Content Marketing Services in Hyderabad | Boost Your Brand Visibility";
    $data['heading_paragraph'] = "Turn your content into a growth engine! At Ananya Hi Solutions, we create strategic, SEO-driven content that attracts, engages, and converts. Build authority, increase website traffic, and grow your brand presence with our content marketing services in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Content Marketing in Hyderabad?";
    $data['paragraph1'] = "We believe great content builds trust and drives measurable business growth. Our content marketing team in Hyderabad combines creativity with data-driven insights to deliver high-quality blogs, articles, videos, and social media content that resonates with your audience. From keyword research to storytelling and publishing — we handle it all to help you dominate search results and connect authentically with customers.";

    // SEO-friendly section replacing the package area
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Grow Your Brand with Strategic Content Marketing</h5>
            <p class='mb-0'>Engage, Educate, and Convert with Powerful Content</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Looking to strengthen your online presence and attract more qualified leads? 
                <strong>Ananya Hi Solutions</strong> offers comprehensive <strong>content marketing services in Hyderabad</strong> 
                that blend creativity with SEO expertise. We help your business stand out through engaging blog posts, 
                optimized web copy, and social media storytelling that builds trust and drives conversions.
            </p>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Let’s create content that makes your brand unforgettable!</h6>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-chat-dots-fill me-2'></i>Talk to Our Content Experts
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/content-marketing-services-hyderabad.jpg";
    $data['services_img_alt'] = "content marketing agency hyderabad";

    $data['heading2'] = "Our Content Marketing Expertise";
    $data['paragraph2'] = "We help brands tell stories that inspire action. Whether you’re launching a new website, promoting a product, or nurturing leads — our content strategies ensure that your message reaches the right audience, at the right time, through the right channels.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>SEO-driven content strategies for organic growth</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Audience-focused storytelling and brand positioning</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Consistent tone and messaging across platforms</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Enhanced brand authority through valuable content</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Data-backed insights for measurable performance</li>
    ";

    // SEO Meta Tags
    $header_data['meta_title'] = "Content Marketing Services in Hyderabad | SEO Content Strategy - Ananya Hi Solutions";
    $header_data['meta_description'] = "Boost your online presence with expert content marketing services in Hyderabad. We craft SEO-friendly blogs, web copy, and brand stories that drive engagement and conversions.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/content-marketing-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "content marketing company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}



    public function EMail_Campaign() {
    // Page Content
    $data['heading'] = "Email Marketing Services in Hyderabad | Drive Engagement & Conversions";
    $data['heading_paragraph'] = "Reach your audience directly and drive measurable results with expertly crafted email campaigns. At Ananya Hi Solutions, we create personalized, high-converting email marketing strategies to boost engagement, nurture leads, and increase sales for businesses in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Email Campaigns in Hyderabad?";
    $data['paragraph1'] = "Our email marketing specialists design campaigns that resonate with your audience. From audience segmentation, personalized content, and responsive design to A/B testing and performance analytics — we ensure every email delivers maximum impact. Whether you want to launch newsletters, product promotions, or lead nurturing sequences, we handle everything end-to-end to grow your business.";

    // SEO-friendly CTA section (instead of package)
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Boost Your Business with Targeted Email Campaigns</h5>
            <p class='mb-0'>Engage, Nurture, & Convert Your Subscribers</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Looking to increase engagement and drive sales through email marketing? 
                <strong>Ananya Hi Solutions</strong> offers professional <strong>email campaign services in Hyderabad</strong> 
                that combine creative content, responsive design, and data-driven strategies. 
                We help your brand communicate effectively with your audience and turn subscribers into loyal customers.
            </p>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Start sending impactful emails today!</h6>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-envelope-fill me-2'></i>Talk to Our Email Experts
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/email-marketing-services-hyderabad.jpg";
    $data['services_img_alt'] = "email marketing agency hyderabad";

    $data['heading2'] = "Our Email Marketing Expertise";
    $data['paragraph2'] = "We create targeted campaigns that nurture leads, improve customer retention, and increase ROI. Our team uses advanced segmentation, automation, and performance tracking to ensure every email reaches the right audience, with the right message, at the right time.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Personalized email campaigns for higher engagement</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive design for all devices</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Segmentation & automation for maximum efficiency</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Data-driven strategy & performance analytics</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Boost ROI and subscriber loyalty</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Email Marketing Services in Hyderabad | Campaign Management - Ananya Hi Solutions";
    $header_data['meta_description'] = "Grow your business with professional email marketing services in Hyderabad. Ananya Hi Solutions creates targeted, high-converting campaigns that engage subscribers and increase sales.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/email-marketing-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "email marketing company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}

  public function IOS_Apps() {
    // Page Content
    $data['heading'] = "iOS App Development Services in Hyderabad | Build High-Quality Apps";
    $data['heading_paragraph'] = "Transform your idea into a powerful iOS app with Ananya Hi Solutions. We develop feature-rich, scalable, and user-friendly iPhone and iPad applications that engage users, enhance business growth, and deliver a seamless mobile experience.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for iOS App Development in Hyderabad?";
    $data['paragraph1'] = "Our iOS app development team in Hyderabad combines technical expertise with creative design to build apps that stand out in the App Store. From concept to deployment, we follow a structured process including UI/UX design, app development, testing, and App Store submission. Whether you need a startup app, enterprise solution, or custom business app, we deliver high-quality iOS solutions that meet your goals.";

    // SEO-friendly CTA section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Professional iOS App Development</h5>
            <p class='mb-0'>From Idea to App Store Success</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Looking to launch a robust iOS application for iPhone or iPad? 
                <strong>Ananya Hi Solutions</strong> offers expert <strong>iOS app development services in Hyderabad</strong> 
                that focus on performance, usability, and scalability. We turn your ideas into apps that engage users and drive business growth.
            </p>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Start building your iOS app today!</h6>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-phone-fill me-2'></i>Talk to Our iOS Experts
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/ios-application-development-hyderabad.jpg";
    $data['services_img_alt'] = "ios app development company hyderabad";

    $data['heading2'] = "Our iOS App Development Expertise";
    $data['paragraph2'] = "We specialize in building native iOS apps that deliver smooth performance, intuitive design, and strong user engagement. Our team uses Swift and Objective-C, following best practices to ensure your app is secure, fast, and App Store-ready.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Custom iOS app design and development</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>User-friendly UI/UX for enhanced engagement</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>App Store deployment & submission support</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Integration with APIs and third-party services</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Ongoing maintenance and performance optimization</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "iOS App Development Services in Hyderabad | iPhone App Development - Ananya Hi Solutions";
    $header_data['meta_description'] = "Build high-quality iOS apps in Hyderabad with Ananya Hi Solutions. We provide professional iPhone and iPad app development services, UI/UX design, and App Store deployment.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/ios-app-development-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "ios app development company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


   public function Android_Apps() {
    // Page Content
    $data['heading'] = "Android App Development Services in Hyderabad | Build Powerful Mobile Apps";
    $data['heading_paragraph'] = "Transform your business ideas into high-performing Android apps with Ananya Hi Solutions. We develop custom, user-friendly, and scalable Android applications that engage users, enhance brand visibility, and deliver seamless mobile experiences.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Android App Development in Hyderabad?";
    $data['paragraph1'] = "Our Android app development team in Hyderabad combines technical expertise with creative design to build apps that stand out in the Google Play Store. From concept and UI/UX design to development, testing, and deployment, we ensure your Android app is fully optimized, secure, and performance-ready. Whether you need a startup app, enterprise solution, or custom business application, we deliver exceptional Android solutions that meet your business goals.";

    // SEO-friendly CTA section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Professional Android App Development</h5>
            <p class='mb-0'>From Concept to Google Play Success</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to launch a robust Android application for smartphones and tablets? 
                <strong>Ananya Hi Solutions</strong> offers expert <strong>Android app development services in Hyderabad</strong> 
                that focus on performance, scalability, and user engagement. We bring your ideas to life with apps that stand out and deliver results.
            </p>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Start building your Android app today!</h6>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-phone-fill me-2'></i>Talk to Our Android Experts
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/android-application-development-hyderabad.jpg";
    $data['services_img_alt'] = "android app development company hyderabad";

    $data['heading2'] = "Our Android App Development Expertise";
    $data['paragraph2'] = "We specialize in developing native Android applications with smooth performance, intuitive UI/UX, and strong user engagement. Our team uses Java and Kotlin, following industry best practices to deliver apps that are secure, fast, and Google Play-ready.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Custom Android app design and development</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>User-friendly UI/UX for enhanced engagement</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Google Play deployment & submission support</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Integration with APIs and third-party services</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Ongoing maintenance and performance optimization</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Android App Development Services in Hyderabad | Mobile App Development - Ananya Hi Solutions";
    $header_data['meta_description'] = "Develop high-quality Android apps in Hyderabad with Ananya Hi Solutions. We provide professional Android app development, UI/UX design, and Google Play deployment services.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/android-app-development-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "android app development company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


    // public function Cross_Platform()
    // {
    //     // Page Content
    //     $data['heading'] = "Content Marketing Expert in Hyderabad";
    //     $data['heading_paragraph'] = "Get a professional, fast-loading, mobile-friendly website for your business starting at just ₹4,999!";

    //     $data['heading1'] = "Your Business Deserves a Stunning Website That Works 24/7";
    //     $data['paragraph1'] = " Stop losing customers because of an outdated or missing website! At <strong>Ananya Hi Solution</strong>, we build fast, responsive, and high-converting static websites that help you turn local visitors into real business leads — all at an affordable one-time cost.";

    //     $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'><div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
    //         <h5 class='mb-1'>Starter Static Website</h5>
    //         <p class='mb-0'>Perfect for Small Businesses</p>
    //     </div>
    //     <div class='package-body p-4'>
    //         <ul class='list-unstyled mb-4 feature-list'>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 6 Web Pages Website.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Web Hosting & SSL for 1 year.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>1 Week FREE Support After Deployment.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive Design.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Basic SEO Setup.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Browser Compatibility Testing.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Google Page Speed Optimized.</li>
    //         </ul>
    //         <div class='my-2 text-center'>
    //             <h6 class='fw-bold text-dark'>Want to know what’s inside our hidden plans?</h6>
    //             <a href='" . base_url("package-details/static-website-package-hyderabad") . "' class='btn btn-gradient'>
    //                 <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
    //             </a>
    //         </div>
    //     </div>
    //     </div>";

    //     $data['services_img'] = "assets/front/images/services/informative-website-design-hyderabad.jpg";
    //     $data['services_img_alt'] = "website design company hyderabad";


    //     $data['heading2'] = "Best Static Website Design Services in Hyderabad";
    //     $data['paragraph2'] = "<strong>Ananya Hi Solutions</strong> is a trusted <strong>static website design company in Hyderabad</strong> with over <strong>10+ years of experience</strong> in crafting modern, mobile-friendly, and SEO-optimized static websites. Our goal is simple — to help startups, small businesses, and growing brands build an online presence that drives results without breaking the bank.</p> <p>Whether you’re launching your first website or redesigning an existing one, our expert developers and designers ensure your site looks stunning, loads fast, and delivers measurable business growth.  <div class='bg-success text-light p-3 rounded mb-3'> <p class='mb-0'><i class='bi bi-lightning-charge  me-2'></i> <strong>Bonus:</strong> Get <strong>Free Hosting & SSL</strong> for 1 Year with every plan. </p></div>";

    //     $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Fast-loading, error-free websites</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO-ready structure with meta optimization</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> 100% mobile-responsive & cross-browser compatible</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> Affordable packages for startups & local businesses</li>";

    //     // End Page Content


    //     //SEO
    //     $header_data['meta_title'] = "Software Deelopment";
    //     $header_data['meta_description'] = "Contact Software Development ";
    //     $header_data['canonical_url'] = current_url();

    //     // Open Graph
    //     $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    //     $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    //     $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
    //     $header_data['og_and_twitter_image_alt'] = "test alt text";
    //     $header_data['og_and_twitter_url'] = current_url();
        
    //     //ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
    //     $header_data['og_type'] = "website";
    //     $header_data['og_updated_time'] = date('c');

    //     // Schema
    //     $header_data['schema_price'] = "₹9,999 - ₹2,50,000";


    //     $this->load->view('front/inc/header',$header_data);
    //     $this->load->view('front/services/service_details_view',$data); // Reuse dynamic view
    //     $this->load->view('front/inc/footer');
    // }

    // public function UI_UX()
    // {
    //     // Page Content
    //     $data['heading'] = "Content Marketing Expert in Hyderabad";
    //     $data['heading_paragraph'] = "Get a professional, fast-loading, mobile-friendly website for your business starting at just ₹4,999!";

    //     $data['heading1'] = "Your Business Deserves a Stunning Website That Works 24/7";
    //     $data['paragraph1'] = " Stop losing customers because of an outdated or missing website! At <strong>Ananya Hi Solution</strong>, we build fast, responsive, and high-converting static websites that help you turn local visitors into real business leads — all at an affordable one-time cost.";

    //     $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'><div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
    //         <h5 class='mb-1'>Starter Static Website</h5>
    //         <p class='mb-0'>Perfect for Small Businesses</p>
    //     </div>
    //     <div class='package-body p-4'>
    //         <ul class='list-unstyled mb-4 feature-list'>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 6 Web Pages Website.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Web Hosting & SSL for 1 year.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>1 Week FREE Support After Deployment.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive Design.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Basic SEO Setup.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Browser Compatibility Testing.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Google Page Speed Optimized.</li>
    //         </ul>
    //         <div class='my-2 text-center'>
    //             <h6 class='fw-bold text-dark'>Want to know what’s inside our hidden plans?</h6>
    //             <a href='" . base_url("package-details/static-website-package-hyderabad") . "' class='btn btn-gradient'>
    //                 <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
    //             </a>
    //         </div>
    //     </div>
    //     </div>";

    //     $data['services_img'] = "assets/front/images/services/informative-website-design-hyderabad.jpg";
    //     $data['services_img_alt'] = "website design company hyderabad";


    //     $data['heading2'] = "Best Static Website Design Services in Hyderabad";
    //     $data['paragraph2'] = "<strong>Ananya Hi Solutions</strong> is a trusted <strong>static website design company in Hyderabad</strong> with over <strong>10+ years of experience</strong> in crafting modern, mobile-friendly, and SEO-optimized static websites. Our goal is simple — to help startups, small businesses, and growing brands build an online presence that drives results without breaking the bank.</p> <p>Whether you’re launching your first website or redesigning an existing one, our expert developers and designers ensure your site looks stunning, loads fast, and delivers measurable business growth.  <div class='bg-success text-light p-3 rounded mb-3'> <p class='mb-0'><i class='bi bi-lightning-charge  me-2'></i> <strong>Bonus:</strong> Get <strong>Free Hosting & SSL</strong> for 1 Year with every plan. </p></div>";

    //     $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Fast-loading, error-free websites</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO-ready structure with meta optimization</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> 100% mobile-responsive & cross-browser compatible</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> Affordable packages for startups & local businesses</li>";

    //     // End Page Content


    //     //SEO
    //     $header_data['meta_title'] = "Software Deelopment";
    //     $header_data['meta_description'] = "Contact Software Development ";
    //     $header_data['canonical_url'] = current_url();

    //     // Open Graph
    //     $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    //     $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    //     $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
    //     $header_data['og_and_twitter_image_alt'] = "test alt text";
    //     $header_data['og_and_twitter_url'] = current_url();
        
    //     //ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
    //     $header_data['og_type'] = "website";
    //     $header_data['og_updated_time'] = date('c');

    //     // Schema
    //     $header_data['schema_price'] = "₹9,999 - ₹2,50,000";


    //     $this->load->view('front/inc/header',$header_data);
    //     $this->load->view('front/services/service_details_view',$data); // Reuse dynamic view
    //     $this->load->view('front/inc/footer');
    // }

    // public function App_Maintenance()
    // {
    //     // Page Content
    //     $data['heading'] = "Content Marketing Expert in Hyderabad";
    //     $data['heading_paragraph'] = "Get a professional, fast-loading, mobile-friendly website for your business starting at just ₹4,999!";

    //     $data['heading1'] = "Your Business Deserves a Stunning Website That Works 24/7";
    //     $data['paragraph1'] = " Stop losing customers because of an outdated or missing website! At <strong>Ananya Hi Solution</strong>, we build fast, responsive, and high-converting static websites that help you turn local visitors into real business leads — all at an affordable one-time cost.";

    //     $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'><div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
    //         <h5 class='mb-1'>Starter Static Website</h5>
    //         <p class='mb-0'>Perfect for Small Businesses</p>
    //     </div>
    //     <div class='package-body p-4'>
    //         <ul class='list-unstyled mb-4 feature-list'>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 6 Web Pages Website.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Web Hosting & SSL for 1 year.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>1 Week FREE Support After Deployment.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive Design.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Basic SEO Setup.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Browser Compatibility Testing.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Google Page Speed Optimized.</li>
    //         </ul>
    //         <div class='my-2 text-center'>
    //             <h6 class='fw-bold text-dark'>Want to know what’s inside our hidden plans?</h6>
    //             <a href='" . base_url("package-details/static-website-package-hyderabad") . "' class='btn btn-gradient'>
    //                 <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
    //             </a>
    //         </div>
    //     </div>
    //     </div>";

    //     $data['services_img'] = "assets/front/images/services/informative-website-design-hyderabad.jpg";
    //     $data['services_img_alt'] = "website design company hyderabad";


    //     $data['heading2'] = "Best Static Website Design Services in Hyderabad";
    //     $data['paragraph2'] = "<strong>Ananya Hi Solutions</strong> is a trusted <strong>static website design company in Hyderabad</strong> with over <strong>10+ years of experience</strong> in crafting modern, mobile-friendly, and SEO-optimized static websites. Our goal is simple — to help startups, small businesses, and growing brands build an online presence that drives results without breaking the bank.</p> <p>Whether you’re launching your first website or redesigning an existing one, our expert developers and designers ensure your site looks stunning, loads fast, and delivers measurable business growth.  <div class='bg-success text-light p-3 rounded mb-3'> <p class='mb-0'><i class='bi bi-lightning-charge  me-2'></i> <strong>Bonus:</strong> Get <strong>Free Hosting & SSL</strong> for 1 Year with every plan. </p></div>";

    //     $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Fast-loading, error-free websites</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO-ready structure with meta optimization</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> 100% mobile-responsive & cross-browser compatible</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> Affordable packages for startups & local businesses</li>";

    //     // End Page Content


    //     //SEO
    //     $header_data['meta_title'] = "Software Deelopment";
    //     $header_data['meta_description'] = "Contact Software Development ";
    //     $header_data['canonical_url'] = current_url();

    //     // Open Graph
    //     $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    //     $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    //     $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
    //     $header_data['og_and_twitter_image_alt'] = "test alt text";
    //     $header_data['og_and_twitter_url'] = current_url();
        
    //     //ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
    //     $header_data['og_type'] = "website";
    //     $header_data['og_updated_time'] = date('c');

    //     // Schema
    //     $header_data['schema_price'] = "₹9,999 - ₹2,50,000";


    //     $this->load->view('front/inc/header',$header_data);
    //     $this->load->view('front/services/service_details_view',$data); // Reuse dynamic view
    //     $this->load->view('front/inc/footer');
    // }

   public function Single_Vendor() {
    // Page Content
    $data['heading'] = "Single Vendor eCommerce Development in Hyderabad | Build Your Online Store";
    $data['heading_paragraph'] = "Launch your own online store with a robust single vendor eCommerce platform. At Ananya Hi Solutions, we develop feature-rich, secure, and scalable eCommerce websites that help businesses sell products online and grow their digital presence in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Single Vendor eCommerce Development?";
    $data['paragraph1'] = "Our team in Hyderabad specializes in creating custom single vendor eCommerce platforms with user-friendly admin panels, seamless payment integration, and responsive design. From product catalog management to order processing and analytics, we provide end-to-end solutions that make selling online simple and efficient.";

    // SEO-friendly CTA section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Custom Single Vendor eCommerce Solutions</h5>
            <p class='mb-0'>Sell Products Online Easily & Efficiently</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Looking to launch a professional online store? 
                <strong>Ananya Hi Solutions</strong> offers expert <strong>single vendor eCommerce development in Hyderabad</strong> 
                that combines beautiful design, powerful features, and seamless functionality. 
                Grow your online business with a website that attracts customers and boosts sales.
            </p>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Start your online store today!</h6>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-cart-fill me-2'></i>Talk to Our eCommerce Experts
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/ecommerce-web-developer.jpg";
    $data['services_img_alt'] = "single vendor ecommerce development hyderabad";

    $data['heading2'] = "Our Single Vendor eCommerce Expertise";
    $data['paragraph2'] = "We provide end-to-end solutions for single vendor eCommerce stores including product listing, shopping cart, payment gateway integration, and analytics. Our platforms are mobile-responsive, SEO-friendly, and optimized for performance to ensure your customers have a smooth shopping experience.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Custom product catalog and inventory management</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Secure payment gateway integration</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Mobile-responsive and SEO-optimized design</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Order management and analytics dashboard</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Scalable architecture for future growth</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Single Vendor eCommerce Development in Hyderabad | Online Store Solutions - Ananya Hi Solutions";
    $header_data['meta_description'] = "Build a professional single vendor eCommerce store in Hyderabad with Ananya Hi Solutions. We create SEO-friendly, mobile-responsive, and secure online stores to boost your sales.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/single-vendor-ecommerce-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "single vendor ecommerce development hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}




   public function Multi_Vendor() {
    // Page Content
    $data['heading'] = "Multi Vendor Marketplace Development in Hyderabad | Expand Your Online Business";
    $data['heading_paragraph'] = "Build a scalable multi vendor marketplace with Ananya Hi Solutions. Enable multiple sellers to list products, manage orders, and reach customers through a powerful, secure, and SEO-friendly platform in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Multi Vendor Marketplace Development?";
    $data['paragraph1'] = "Our team in Hyderabad specializes in creating custom multi vendor eCommerce platforms that allow multiple sellers to operate seamlessly. From product management, order tracking, and vendor dashboards to secure payment processing and analytics, we deliver end-to-end solutions that empower your marketplace and maximize sales potential.";

    // SEO-friendly CTA section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>Professional Multi Vendor Marketplace Solutions</h5>
            <p class='mb-0'>Connect Multiple Sellers & Grow Your Online Platform</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to launch a robust multi vendor marketplace? 
                <strong>Ananya Hi Solutions</strong> provides expert <strong>multi vendor marketplace development services in Hyderabad</strong> 
                that combine intuitive design, powerful features, and seamless functionality. Enable multiple vendors to sell online and grow your platform efficiently.
            </p>
            <div class='my-2 text-center'>
                <h6 class='fw-bold text-dark'>Start your multi vendor platform today!</h6>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-shop-window me-2'></i>Talk to Our Marketplace Experts
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/ecommerce-web-developer.jpg";
    $data['services_img_alt'] = "multi vendor marketplace development hyderabad";

    $data['heading2'] = "Our Multi Vendor Marketplace Expertise";
    $data['paragraph2'] = "We provide end-to-end multi vendor solutions including vendor onboarding, product catalog management, order management, payment gateway integration, and analytics dashboards. Our marketplaces are mobile-responsive, SEO-friendly, and built for scalability to support business growth.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Vendor dashboard & management tools</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Product catalog and inventory management</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Secure payment gateway integration</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Mobile-responsive and SEO-optimized design</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Analytics & reporting for vendors and admin</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Multi Vendor Marketplace Development in Hyderabad | Online Platform Solutions - Ananya Hi Solutions";
    $header_data['meta_description'] = "Launch a scalable multi vendor marketplace in Hyderabad with Ananya Hi Solutions. Build SEO-friendly, mobile-responsive platforms that connect multiple sellers and grow your online business.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/multi-vendor-marketplace-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "multi vendor marketplace development hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}



    // public function Custom_Multi_Vendor()
    // {
    //     // Page Content
    //     $data['heading'] = "Custom Multi Marketing Expert in Hyderabad";
    //     $data['heading_paragraph'] = "Get a professional, fast-loading, mobile-friendly website for your business starting at just ₹4,999!";

    //     $data['heading1'] = "Your Business Deserves a Stunning Website That Works 24/7";
    //     $data['paragraph1'] = " Stop losing customers because of an outdated or missing website! At <strong>Ananya Hi Solution</strong>, we build fast, responsive, and high-converting static websites that help you turn local visitors into real business leads — all at an affordable one-time cost.";

    //     $data['package'] = "<div class='package-card h-100 shadow-sm position-relative'><div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
    //         <h5 class='mb-1'>Starter Static Website</h5>
    //         <p class='mb-0'>Perfect for Small Businesses</p>
    //     </div>
    //     <div class='package-body p-4'>
    //         <ul class='list-unstyled mb-4 feature-list'>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Up to 6 Web Pages Website.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>FREE Web Hosting & SSL for 1 year.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>1 Week FREE Support After Deployment.</li>
    //             <li><i class='bi bi-check-circle-fill text-success me-2'></i>Responsive Design.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Basic SEO Setup.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Browser Compatibility Testing.</li>
    //             <li class='blurred'><i class='bi bi-check-circle-fill text-success me-2'></i>Google Page Speed Optimized.</li>
    //         </ul>
    //         <div class='my-2 text-center'>
    //             <h6 class='fw-bold text-dark'>Want to know what’s inside our hidden plans?</h6>
    //             <a href='" . base_url("package-details/static-website-package-hyderabad") . "' class='btn btn-gradient'>
    //                 <i class='bi bi-unlock-fill me-2'></i>Unlock Full Packages
    //             </a>
    //         </div>
    //     </div>
    //     </div>";

    //     $data['services_img'] = "assets/front/images/services/informative-website-design-hyderabad.jpg";
    //     $data['services_img_alt'] = "website design company hyderabad";


    //     $data['heading2'] = "Best Static Website Design Services in Hyderabad";
    //     $data['paragraph2'] = "<strong>Ananya Hi Solutions</strong> is a trusted <strong>static website design company in Hyderabad</strong> with over <strong>10+ years of experience</strong> in crafting modern, mobile-friendly, and SEO-optimized static websites. Our goal is simple — to help startups, small businesses, and growing brands build an online presence that drives results without breaking the bank.</p> <p>Whether you’re launching your first website or redesigning an existing one, our expert developers and designers ensure your site looks stunning, loads fast, and delivers measurable business growth.  <div class='bg-success text-light p-3 rounded mb-3'> <p class='mb-0'><i class='bi bi-lightning-charge  me-2'></i> <strong>Bonus:</strong> Get <strong>Free Hosting & SSL</strong> for 1 Year with every plan. </p></div>";

    //     $data['benefits_items'] = "<li><i class='bi bi-check-circle-fill text-success me-2'></i> Fast-loading, error-free websites</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> SEO-ready structure with meta optimization</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> 100% mobile-responsive & cross-browser compatible</li>
    //                 <li><i class='bi bi-check-circle-fill text-success me-2'></i> Affordable packages for startups & local businesses</li>";

    //     // End Page Content


    //     //SEO
    //     $header_data['meta_title'] = "Software Deelopment";
    //     $header_data['meta_description'] = "Contact Software Development ";
    //     $header_data['canonical_url'] = current_url();

    //     // Open Graph
    //     $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    //     $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    //     $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
    //     $header_data['og_and_twitter_image_alt'] = "test alt text";
    //     $header_data['og_and_twitter_url'] = current_url();
        
    //     //ob type = Usually "website" for most pages. Use "article" only for blog posts/news.
    //     $header_data['og_type'] = "website";
    //     $header_data['og_updated_time'] = date('c');

    //     // Schema
    //     $header_data['schema_price'] = "₹9,999 - ₹2,50,000";


    //     $this->load->view('front/inc/header',$header_data);
    //     $this->load->view('front/services/service_details_view',$data); // Reuse dynamic view
    //     $this->load->view('front/inc/footer');
    // }

   public function Corporate_Video() {
    // Page Content
    $data['heading'] = "Corporate Video Production Services in Hyderabad | Showcase Your Brand";
    $data['heading_paragraph'] = "Tell your brand story with professionally crafted corporate videos. At Ananya Hi Solutions, we produce high-quality videos that engage your audience, enhance brand credibility, and drive business growth in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Corporate Video Production?";
    $data['paragraph1'] = "Our team in Hyderabad specializes in creating impactful corporate videos that communicate your brand message clearly and creatively. From concept development, scripting, and storyboarding to filming, editing, and post-production, we ensure your videos resonate with your target audience and leave a lasting impression.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>🎬 Elevate Your Brand with Professional Corporate Videos</h5>
            <p class='mb-0'>Create videos that engage your audience, boost visibility, and grow your business.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Discover how Ananya Hi Solutions in Hyderabad can help you produce corporate videos that showcase your brand, communicate your story, and connect with your audience effectively. Fill out the form to discuss your project and get personalized expert guidance.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-camera-video-fill me-2'></i>Start Your Corporate Video Project Today
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/video-production-services-hyderabad.jpg";
    $data['services_img_alt'] = "corporate video production company hyderabad";

    $data['heading2'] = "Our Corporate Video Expertise";
    $data['paragraph2'] = "We produce a wide range of corporate videos including promotional videos, product demos, explainer videos, training videos, and event coverage. Our videos are designed to engage audiences, improve brand awareness, and increase conversions, all optimized for web and social media platforms.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>High-quality video production from concept to final edit</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Engaging storytelling to communicate your brand effectively</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Professional filming, editing, and post-production</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for web, social media, and presentations</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Enhances brand credibility and audience engagement</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Corporate Video Production Services in Hyderabad | Brand Videos - Ananya Hi Solutions";
    $header_data['meta_description'] = "Create impactful corporate videos in Hyderabad with Ananya Hi Solutions. We produce promotional, training, and product demo videos to enhance brand visibility and engagement.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/corporate-video-production-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "corporate video production company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}




    public function Marketing_Video()
    {
         // Page Content
    $data['heading'] = "Promotional Marketing Video Services in Hyderabad | Boost Your Brand Awareness";
    $data['heading_paragraph'] = "Engage your audience and drive sales with high-impact promotional marketing videos. At Ananya Hi Solutions, we create videos that communicate your brand message effectively, inspire action, and increase conversions for businesses in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Promotional Marketing Videos?";
    $data['paragraph1'] = "Our team in Hyderabad specializes in producing promotional marketing videos that capture attention and communicate your brand story clearly. From creative concept development, scripting, and storyboarding to filming, animation, and post-production, we deliver videos designed to generate leads and grow your business online.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>🎯 Drive Engagement with Promotional Marketing Videos</h5>
            <p class='mb-0'>Create compelling videos that capture attention and boost conversions.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to promote your products or services effectively? 
                <strong>Ananya Hi Solutions</strong> offers expert <strong>promotional marketing video production in Hyderabad</strong> 
                that combines creativity, storytelling, and professional execution. Fill out the form to discuss your project and get a tailored solution for your brand.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-play-btn-fill me-2'></i>Start Your Promotional Video Project
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/video-production-services-hyderabad.jpg";
    $data['services_img_alt'] = "promotional marketing video production hyderabad";

    $data['heading2'] = "Our Promotional Marketing Video Expertise";
    $data['paragraph2'] = "We create promotional videos for product launches, service marketing, social media campaigns, and digital advertising. Our videos are crafted to be engaging, persuasive, and optimized for web and social media, helping your brand reach the right audience effectively.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Creative video concept and storyboard</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>High-quality filming, animation, and editing</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for web, social media, and campaigns</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Boosts brand awareness and engagement</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Drive leads and increase conversions effectively</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Promotional Marketing Video Production in Hyderabad | Brand Videos - Ananya Hi Solutions";
    $header_data['meta_description'] = "Create high-impact promotional marketing videos in Hyderabad with Ananya Hi Solutions. Boost brand visibility, engagement, and conversions with professional video production.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/promotional-marketing-videos-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "promotional marketing video production hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
    }

    public function Event_Coverage() {
    // Page Content
    $data['heading'] = "Event Coverage & Highlights Services in Hyderabad | Capture Every Moment";
    $data['heading_paragraph'] = "Make your events unforgettable with professional event coverage and highlight videos. At Ananya Hi Solutions, we capture every moment with precision and creativity, helping businesses, corporates, and organizations showcase their events effectively in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Event Coverage & Highlights?";
    $data['paragraph1'] = "Our Hyderabad-based team specializes in covering corporate events, conferences, product launches, workshops, and social gatherings. We provide full event coverage with cinematic highlight reels that tell your story, engage your audience, and create lasting impressions. From planning and filming to editing and post-production, we handle every detail professionally.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>🎥 Professional Event Coverage & Highlights</h5>
            <p class='mb-0'>Capture every detail and create engaging highlight videos for your events.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to make your events memorable? <strong>Ananya Hi Solutions</strong> offers expert 
                <strong>event coverage and highlight video production in Hyderabad</strong>. 
                From corporate events to product launches, we ensure every key moment is captured creatively and professionally. Fill out the form to discuss your project and get tailored solutions.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-camera-reels-fill me-2'></i>Book Your Event Coverage Today
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/video-production-services-hyderabad.jpg";
    $data['services_img_alt'] = "event coverage and highlight videos hyderabad";

    $data['heading2'] = "Our Event Coverage Expertise";
    $data['paragraph2'] = "We provide complete event coverage services including filming, live streaming, and creating highlight reels. Our videos are designed to engage viewers, promote your brand, and preserve the most important moments of your events. Optimized for social media and presentations, our videos help you reach your audience effectively.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Comprehensive event filming and coverage</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Professional highlight video creation</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Engaging storytelling for corporate and social events</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for social media and online promotion</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>High-quality production and post-production editing</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Event Coverage & Highlights Video Production in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Capture every moment of your events in Hyderabad with professional event coverage and highlight videos by Ananya Hi Solutions. Showcase your corporate events, launches, and gatherings with engaging videos.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/event-coverage-highlights-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "event coverage and highlight videos hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


    

    public function Product_Explainer() {
    // Page Content
    $data['heading'] = "Product Explainer Video Services in Hyderabad | Simplify & Promote Your Product";
    $data['heading_paragraph'] = "Showcase your products clearly and effectively with professional explainer videos. At Ananya Hi Solutions, we create engaging and informative videos that help your customers understand your product, improve conversions, and enhance brand visibility in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Product Explainer Videos?";
    $data['paragraph1'] = "Our Hyderabad-based team specializes in creating animated and live-action product explainer videos that communicate your product features and benefits clearly. From scriptwriting, storyboarding, animation, and filming to post-production, we deliver videos designed to engage your audience and drive results.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>📦 Create Engaging Product Explainer Videos</h5>
            <p class='mb-0'>Simplify your product story and boost customer understanding.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want your customers to understand your product instantly? 
                <strong>Ananya Hi Solutions</strong> provides expert <strong>product explainer video production services in Hyderabad</strong>. 
                We create compelling videos that showcase your product features, explain usage, and highlight benefits. Fill out the form to discuss your project and get a tailored solution.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-play-btn-fill me-2'></i>Start Your Explainer Video Project
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/video-production-services-hyderabad.jpg";
    $data['services_img_alt'] = "product explainer video production hyderabad";

    $data['heading2'] = "Our Product Explainer Video Expertise";
    $data['paragraph2'] = "We produce engaging animated and live-action explainer videos for websites, apps, and product launches. Our videos simplify complex concepts, highlight product benefits, and improve conversions. Optimized for web, social media, and presentations, they help your brand connect effectively with your audience.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Clear product explanation through animated or live-action videos</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Engaging storytelling to highlight key product benefits</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>High-quality filming, animation, and editing</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for web, social media, and presentations</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Increase conversions and customer understanding effectively</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Product Explainer Video Production in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Create engaging product explainer videos in Hyderabad with Ananya Hi Solutions. Highlight your product features, simplify concepts, and improve conversions with professional video production.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/product-explainer-videos-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "product explainer video production hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


    public function Social_Media_Video() {
    // Page Content
    $data['heading'] = "Social Media Video Production Services in Hyderabad | Boost Engagement & Reach";
    $data['heading_paragraph'] = "Capture attention on social platforms with professionally crafted social media videos. At Ananya Hi Solutions, we create videos optimized for Instagram, Facebook, YouTube, and other platforms to increase engagement, followers, and conversions.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Social Media Video Production?";
    $data['paragraph1'] = "Our team in Hyderabad specializes in creating social media videos that are short, engaging, and shareable. From promotional clips, reels, and ads to brand storytelling videos, we design content that resonates with your audience, enhances your brand presence, and drives measurable results.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>📱 Engage Your Audience with Social Media Videos</h5>
            <p class='mb-0'>Create videos that grab attention, go viral, and boost engagement.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to grow your social media presence? <strong>Ananya Hi Solutions</strong> offers expert 
                <strong>social media video production services in Hyderabad</strong>. 
                We craft compelling videos for Instagram, Facebook, YouTube, and LinkedIn that connect with your audience and elevate your brand. Fill out the form to discuss your project and get a custom strategy.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-play-btn-fill me-2'></i>Start Your Social Media Video Project
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/video-production-services-hyderabad.jpg";
    $data['services_img_alt'] = "social media video production company hyderabad";

    $data['heading2'] = "Our Social Media Video Expertise";
    $data['paragraph2'] = "We produce social media videos for brand promotion, ads, reels, stories, and influencer marketing. Our videos are designed to capture attention, drive engagement, and increase brand visibility across platforms. Optimized for vertical and horizontal formats, they help your brand reach and convert the right audience effectively.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Short, engaging, and shareable videos for social platforms</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Creative storytelling to enhance brand identity</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for Instagram, Facebook, YouTube, LinkedIn, and TikTok</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Professional editing, animations, and effects</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Increase engagement, followers, and conversions effectively</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Social Media Video Production in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Boost your brand presence with social media video production in Hyderabad. Create engaging videos for Instagram, Facebook, YouTube, and LinkedIn with Ananya Hi Solutions.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/social-media-video-production-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "social media video production company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


    public function Music_Video() {
    // Page Content
    $data['heading'] = "Music Video Production Services in Hyderabad | Create Captivating Visuals";
    $data['heading_paragraph'] = "Bring your music to life with professional music video production. At Ananya Hi Solutions, we create visually stunning music videos that resonate with your audience, amplify your brand, and increase engagement in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Music Video Production?";
    $data['paragraph1'] = "Our Hyderabad-based team specializes in producing high-quality music videos for artists, bands, and brands. From concept development, choreography, filming, and lighting to editing, visual effects, and color grading, we ensure your music video stands out and creates a lasting impact on your audience.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>🎵 Create Stunning Music Videos</h5>
            <p class='mb-0'>Bring your music to life with high-quality visuals and creative storytelling.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want your music to reach more fans and create a visual impact? 
                <strong>Ananya Hi Solutions</strong> provides expert <strong>music video production services in Hyderabad</strong>. 
                We handle everything from concept and choreography to filming and post-production. Fill out the form to discuss your project and get a tailor-made solution.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-play-btn-fill me-2'></i>Start Your Music Video Project
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/video-production-services-hyderabad.jpg";
    $data['services_img_alt'] = "music video production company hyderabad";

    $data['heading2'] = "Our Music Video Expertise";
    $data['paragraph2'] = "We produce music videos for solo artists, bands, and brands, combining storytelling, choreography, and cinematic visuals. Our videos are optimized for YouTube, Instagram, and other platforms to increase audience engagement and build your brand identity.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Cinematic music video production from concept to final edit</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Choreography, filming, lighting, and post-production</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Engaging storytelling and visual effects</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for YouTube, Instagram, and social media platforms</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Enhances brand identity and fan engagement</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Music Video Production Services in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Produce high-quality music videos in Hyderabad with Ananya Hi Solutions. Engage your audience with cinematic visuals, choreography, and storytelling for artists, bands, and brands.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/music-video-production-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "music video production company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


    public function Short_Films() {
    // Page Content
    $data['heading'] = "Short Film Video Production Services in Hyderabad | Tell Your Story Cinematically";
    $data['heading_paragraph'] = "Bring your creative vision to life with professional short film production. At Ananya Hi Solutions, we produce compelling short films that engage audiences, convey stories effectively, and showcase your talent or brand in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Short Film Production?";
    $data['paragraph1'] = "Our Hyderabad-based team specializes in producing high-quality short films for storytellers, artists, and brands. From scripting, storyboarding, and casting to filming, editing, and post-production, we ensure your film delivers maximum impact and resonates with your audience.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>🎬 Professional Short Film Production</h5>
            <p class='mb-0'>Transform your ideas into captivating short films.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to create a cinematic short film that captivates your audience? 
                <strong>Ananya Hi Solutions</strong> provides expert <strong>short film production services in Hyderabad</strong>. 
                We handle everything from concept development to final editing. Fill out the form to discuss your project and receive a customized production plan.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-film me-2'></i>Start Your Short Film Project
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/video-production-services-hyderabad.jpg";
    $data['services_img_alt'] = "short film video production company hyderabad";

    $data['heading2'] = "Our Short Film Production Expertise";
    $data['paragraph2'] = "We produce short films that are visually engaging and emotionally compelling. Our services include scripting, pre-production planning, filming, editing, color grading, and sound design. Optimized for festivals, social media, and online platforms, our short films help you tell your story effectively.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Cinematic short film production from concept to final cut</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Professional scripting, storyboarding, and casting</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>High-quality filming, editing, sound design, and color grading</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for festivals, social media, and online platforms</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Engage audiences with compelling storytelling and visuals</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Short Film Video Production in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Create high-quality short films in Hyderabad with Ananya Hi Solutions. Engage audiences with cinematic storytelling, professional filming, and post-production services for artists, storytellers, and brands.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/short-films-video-production-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "short film video production company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


    public function CRM_Software() {
    // Page Content
    $data['heading'] = "CRM Software Development Services in Hyderabad | Streamline Your Business";
    $data['heading_paragraph'] = "Manage your customer relationships efficiently with custom CRM software from Ananya Hi Solutions. Our solutions help businesses in Hyderabad automate sales, improve communication, and enhance customer satisfaction.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for CRM Software Development?";
    $data['paragraph1'] = "We specialize in developing custom CRM software tailored to your business needs. Our Hyderabad-based team creates scalable, secure, and user-friendly CRM solutions that streamline sales, marketing, and support processes. From lead management to analytics, our CRM systems empower your team to deliver better customer experiences.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>💻 Custom CRM Software Solutions</h5>
            <p class='mb-0'>Automate, manage, and grow your business efficiently.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to streamline your business processes and manage customer relationships effectively? 
                <strong>Ananya Hi Solutions</strong> provides expert <strong>CRM software development services in Hyderabad</strong>. 
                Our team delivers tailor-made solutions for sales automation, lead management, analytics, and reporting. Fill out the form to discuss your CRM project and get a custom solution.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-gear-fill me-2'></i>Get Your Custom CRM Solution
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/crm-software-development-services-hyderabad.jpg";
    $data['services_img_alt'] = "crm software development company hyderabad";

    $data['heading2'] = "Our CRM Software Expertise";
    $data['paragraph2'] = "We develop CRM solutions for businesses of all sizes, from startups to enterprises. Our CRM systems are designed for seamless lead management, sales tracking, marketing automation, and customer support. With real-time analytics and reporting, our software helps you make informed decisions and grow your business efficiently.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Custom CRM solutions tailored to your business processes</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Sales and lead management automation</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Real-time analytics and reporting</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Enhanced customer communication and satisfaction</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Secure, scalable, and user-friendly design</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "CRM Software Development in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Streamline your business with custom CRM software development in Hyderabad. Ananya Hi Solutions creates scalable, secure, and user-friendly CRM solutions for sales, marketing, and customer management.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/crm-software-development-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "crm software development company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


   public function Billing_Software() {
    // Page Content
    $data['heading'] = "Billing Software Development Services in Hyderabad | Automate Your Invoicing";
    $data['heading_paragraph'] = "Simplify your billing process and improve accuracy with custom billing software from Ananya Hi Solutions. Our solutions help businesses in Hyderabad automate invoicing, manage payments, and maintain records efficiently.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for Billing Software Development?";
    $data['paragraph1'] = "We specialize in creating secure and user-friendly billing software tailored to your business needs. Our Hyderabad-based team delivers software that streamlines invoice generation, payment tracking, tax calculation, and reporting, helping you save time and reduce errors.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>💻 Custom Billing Software Solutions</h5>
            <p class='mb-0'>Automate your invoicing and manage payments efficiently.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to streamline your billing and payment process? 
                <strong>Ananya Hi Solutions</strong> offers expert <strong>billing software development services in Hyderabad</strong>. 
                Our team delivers tailor-made solutions for invoicing, payment tracking, tax calculation, and reporting. Fill out the form to discuss your project and get a custom solution.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-file-earmark-text-fill me-2'></i>Get Your Custom Billing Software
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/billing-software-development-hyderabad.jpg";
    $data['services_img_alt'] = "billing software development company hyderabad";

    $data['heading2'] = "Our Billing Software Expertise";
    $data['paragraph2'] = "We develop billing software for businesses of all sizes. Our solutions include invoice creation, payment tracking, GST/tax integration, automated reminders, and reporting. Designed for accuracy and efficiency, our software helps you manage finances effectively and improve business operations.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Custom billing software tailored to your business processes</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Automated invoice generation and payment tracking</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Integrated tax/GST calculation and reporting</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Secure, scalable, and user-friendly interface</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Improved accuracy, efficiency, and financial management</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Billing Software Development in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Simplify your invoicing and payment process with custom billing software development in Hyderabad. Ananya Hi Solutions provides secure, efficient, and user-friendly billing software solutions.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/billing-software-development-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "billing software development company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


   public function College_Management() {
    // Page Content
    $data['heading'] = "College Management Software in Hyderabad | Streamline Academic Operations";
    $data['heading_paragraph'] = "Manage your college efficiently with custom College Management Software from Ananya Hi Solutions. Automate admissions, attendance, examinations, and reporting to ensure smooth academic operations in Hyderabad.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for College Management Software?";
    $data['paragraph1'] = "We specialize in developing comprehensive College Management Software tailored to the unique needs of educational institutions. Our Hyderabad-based team delivers scalable, secure, and user-friendly solutions for student management, faculty administration, fee management, and analytics.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>🎓 Custom College Management Software</h5>
            <p class='mb-0'>Automate academic and administrative processes efficiently.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to simplify college operations and improve efficiency? 
                <strong>Ananya Hi Solutions</strong> provides expert <strong>College Management Software services in Hyderabad</strong>. 
                We handle everything from admissions, attendance, examinations, fee management, to reporting. Fill out the form to discuss your project and get a tailor-made solution.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-mortarboard-fill me-2'></i>Get Your College Management Solution
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/college-management-software-hyderabad.jpg";
    $data['services_img_alt'] = "college management software company hyderabad";

    $data['heading2'] = "Our College Management Software Expertise";
    $data['paragraph2'] = "We develop College Management Software for streamlined operations including student registration, timetable management, attendance tracking, fee management, examination scheduling, and reporting. Our software ensures data accuracy, security, and efficiency for educational institutions.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Custom software tailored for academic and administrative processes</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Student, faculty, and attendance management</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Examination scheduling and automated result management</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Fee management, reporting, and analytics</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Secure, scalable, and user-friendly design for colleges</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "College Management Software in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Streamline college operations with custom College Management Software in Hyderabad. Ananya Hi Solutions provides solutions for admissions, attendance, exams, fee management, and reporting.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/college-management-software-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "college management software company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}


   public function Learning_Management() {
    // Page Content
    $data['heading'] = "Learning Management System (LMS) Software in Hyderabad | Streamline Online Education";
    $data['heading_paragraph'] = "Deliver engaging online courses and training programs with custom LMS software from Ananya Hi Solutions. Our solutions help educational institutions and corporate trainers in Hyderabad manage courses, learners, and assessments efficiently.";

    $data['heading1'] = "Why Choose Ananya Hi Solutions for LMS Software Development?";
    $data['paragraph1'] = "We specialize in developing custom Learning Management Systems that are scalable, secure, and user-friendly. Our Hyderabad-based team provides LMS solutions that include course creation, learner management, assessments, progress tracking, and reporting—enabling effective online education and training.";

    // SEO-friendly CTA / Card Section
    $data['package'] = "
    <div class='package-card h-100 shadow-sm position-relative'>
        <div class='package-header text-white text-center py-4 rounded-top' style='background-color:#1485cb'>
            <h5 class='mb-1'>📚 Custom Learning Management System</h5>
            <p class='mb-0'>Manage courses, learners, and assessments efficiently.</p>
        </div>
        <div class='package-body p-4'>
            <p class='text-dark mb-4'>
                Want to deliver engaging online courses and training programs? 
                <strong>Ananya Hi Solutions</strong> offers expert <strong>LMS software development services in Hyderabad</strong>. 
                We handle everything from course creation, learner management, assessments, to reporting. Fill out the form to discuss your project and get a tailor-made LMS solution.
            </p>
            <div class='my-2 text-center'>
                <a href='" . base_url("contact") . "' class='btn btn-gradient'>
                    <i class='bi bi-journal-bookmark-fill me-2'></i>Get Your Custom LMS Solution
                </a>
            </div>
        </div>
    </div>";

    $data['services_img'] = "assets/front/images/services/e-learning-software-development.jpg";
    $data['services_img_alt'] = "learning management system company hyderabad";

    $data['heading2'] = "Our LMS Software Expertise";
    $data['paragraph2'] = "We develop LMS software for educational institutions and corporate training programs. Our solutions include online course management, learner enrollment, assessments, progress tracking, certifications, and reporting. The LMS ensures an engaging and efficient learning experience.";

    $data['benefits_items'] = "
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Custom LMS software tailored to your learning requirements</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Course creation, learner management, and assessment tools</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Progress tracking, reporting, and certification management</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Secure, scalable, and user-friendly platform for learners and instructors</li>
        <li><i class='bi bi-check-circle-fill text-success me-2'></i>Optimized for e-learning, online training, and corporate programs</li>";

    // SEO Meta Tags
    $header_data['meta_title'] = "Learning Management System (LMS) Software in Hyderabad | Ananya Hi Solutions";
    $header_data['meta_description'] = "Develop custom LMS software in Hyderabad with Ananya Hi Solutions. Manage courses, learners, assessments, and reporting efficiently for educational institutions and corporate training programs.";
    $header_data['canonical_url'] = current_url();

    // Open Graph / Twitter
    $header_data['og_and_twitter_title'] = $header_data['meta_title'];
    $header_data['og_and_twitter_description'] = $header_data['meta_description'];
    $header_data['og_and_twitter_image'] = base_url('assets/front/images/services/learning-management-system-hyderabad.jpg');
    $header_data['og_and_twitter_image_alt'] = "learning management system company hyderabad";
    $header_data['og_and_twitter_url'] = current_url();

    // OG Type
    $header_data['og_type'] = "website";
    $header_data['og_updated_time'] = date('c');

    // Schema (no price)
    $header_data['schema_price'] = "";

    // Load Views
    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/services/service_details_view', $data);
    $this->load->view('front/inc/footer');
}







}
