<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackagesController extends CI_Controller {

	public function our_packages()
	{
		//SEO
		$header_data['meta_title'] = "Package";
		$header_data['meta_description'] = "Package  list ";
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
		$this->load->view('front/packages/packages_view');
		$this->load->view('front/inc/footer');
	}


	public function package_details()
	{
		//SEO
		$header_data['meta_title'] = "Package Info details";
		$header_data['meta_description'] = "Package  details";
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

		//******************Find Package services****************************
		$slug = $this->uri->segment(2);
		
		//Initialize variable
        $package_name = "";

		// Switch-case to map slug to readable package name
        switch ($slug) {
            case 'social-media-marketing-package-hyderabad':
                $package_name = "Social Media Marketing";
                break;

            case 'google-ads-package-hyderabad':
                $package_name = "Google Ads / PPC";
                break;

            case 'seo-package-hyderabad':
                $package_name = "Search Engine Optimization (SEO)";
                break;

            case 'static-website-package-hyderabad':
                $package_name = "Starter Static Website";
                break;

            case 'dynamic-website-package-hyderabad':
                $package_name = "Dynamic Website";
                break;

            case 'ecommerce-website-package-hyderabad':
                $package_name = "E-Commerce Store";
                break;

            default:
                $package_name = "Website Package"; // fallback
                break;
		}

		 // Pass the package name to your view
        $data['package_name'] = $package_name;
        $data['package_slug'] = $slug;

		$this->load->view('front/inc/header',$header_data);
		$this->load->view('front/packages/package_full_info_view',$data);
		$this->load->view('front/inc/footer');
	}

	public function validate_package(){
		 // Load form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|numeric|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('platform', 'Referral Source', 'required');
        $this->form_validation->set_rules('services', 'Services', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');

		if ($this->form_validation->run() == FALSE) {
			//SEO
			$header_data['meta_title'] = "Package Info";
			$header_data['meta_description'] = "Package  details";
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

			// Validation failed, reload form with errors
			$data['package_name'] = $this->input->post('services');
			$data['package_slug'] = $this->input->post('slug');

			$this->load->view('front/inc/header',$header_data);
			$this->load->view('front/packages/package_full_info_view',$data);
			$this->load->view('front/inc/footer');
			// $this->load->view('front/package_full_details', $data);
		} else {
            
			//Start Date
                date_default_timezone_set('Asia/Kolkata');

                $day = date('j'); 
                $month = date('M'); 
                $year = date('Y');

                function addOrdinalSuffix($num) {
                    if (!in_array(($num % 100), [11, 12, 13])) {
                        switch ($num % 10) {
                            case 1:  return $num.'st';
                            case 2:  return $num.'nd';
                            case 3:  return $num.'rd';
                        }
                    }
                    return $num.'th';
                }
                $formattedDate = addOrdinalSuffix($day) . ' ' . $month . ', ' . $year;
                //End Date

			// --- Insert into DB ---
			$data = [
				'customer_name' => $this->input->post('name',TRUE),
				'email_id' => $this->input->post('email',TRUE),
				'phone_no' => $this->input->post('phone',TRUE),
				'traffic_platform' => $this->input->post('platform',TRUE),
				'services' => $this->input->post('services',TRUE),
				'created_at' =>$formattedDate,
				'created_by'=> "website"
			];

			//Insert into DB
            $table_name = "package_leads";

		
    		$this->load->model('MasterModel');
			$insert_id = $this->MasterModel->Insert_Package($table_name,$data);
			if($insert_id){
				//Sending package specific url to show specific package info in thank you page.
				$slug = $this->input->post('slug');
				redirect('thank-you?slug='.urlencode($slug).'&service_name='.urlencode($this->input->post('services')).'&customer_name='.urlencode($this->input->post('name')));
			}else{
				echo "Database error. Please try again.";
				// $this->session->set_flashdata('error', 'Database error. Please try again.');
			}
		   
        }
	}

	public function thank_you(){
        // SEO
        $header_data['meta_title'] = "Thank You";
        $header_data['meta_description'] = "Thank you list";
        $header_data['canonical_url'] = current_url();

        // Open Graph
        $header_data['og_and_twitter_title'] = $header_data['meta_title'];
        $header_data['og_and_twitter_description'] = $header_data['meta_description'];
        $header_data['og_and_twitter_image'] = base_url('assets/front/images/software-development.jpg');
        $header_data['og_and_twitter_image_alt'] = "test alt text";
        $header_data['og_and_twitter_url'] = current_url();
        $header_data['og_type'] = "website";
        $header_data['og_updated_time'] = date('c');

        // Schema
        $header_data['schema_price'] = "₹9,999 - ₹2,50,000";

        // Get slug from URL
        $slug = $this->input->get('slug');

        // Define features for packages
       // Define ALL PACKAGES with subplans
        $all_packages = [
            'social-media-marketing-package-hyderabad' => [
                'Basic' => [
                'price' => '₹9,999',
                   'features' => [
                        "Facebook & Instagram Platform",
                        "Social Media Audit for All Platforms",
                        "Basic 8 to 12 Creative Design Per Month",
                        "1 Revision per Post",
                        "2 to 4 Reels Per Month",
                        "Monthly Performance Report",
                        "Trending-Based Creative Posts",
                        "Festival & National Day Posts(creative posters for special occasions)",
                        "Description, Hashtag Research & Optimization",
                        "AI-Powered  Creative",
                        "Profile Optimization",
                        "Ad Manager (Setup)",
                        "Paid Ad Campaigns(Setup & Manage FB/IG Ads Campaigns)",
                        "Audience Targeting",
                        "Ad Budget Management(Daily/weekly Budget Allocation & Ad Optimization)",
                        "Audience Research(Demographics, Interests & Behavior Insights)",
                        "Best ROI",
                        "Campaign Objectives"
                    ]
                ],
                'Standard' => [
                    'price' => '₹14,999',
                    'features' => [
                        "Facebook, Instagram & Google My Business Platform",
                        "Social Media Audit for All Platforms",
                        "Standard 15 to 20 Creative Design Per Month",
                        "2 Revision per Post",
                        "6 to 8 Reels Per Month",
                        "Standard Content Calendar Creation",
                        "Monthly Performance Report",
                        "Trending-Based Creative Posts",
                        "Festival & National Day Posts(creative posters for special occasions)",
                        "Description, Hashtag Research & Optimization",
                        "AI-Powered  Creative",
                        "Profile Optimization",
                        "Meta Business Suite(Setup)",
                        "Ad Manager (Setup)",
                        "Paid Ad Campaigns(Setup & Manage FB/IG Ads Campaigns)",
                        "Audience Targeting",
                        "Ad Budget Management(Daily/weekly Budget Allocation & Ad Optimization)",
                        "Audience Research(Demographics, Interests & Behavior Insights)",
                        "Best ROI",
                        "Campaign Objectives"  
                    ]
                ],
                'Premium' => [
                    'price' => '₹19,999',
                    'features' => [
                       "Facebook, Instagram, Google My Business, LinkedIn, Twitter(X)",
                        "Social Media Audit for All Platforms",
                        "Premium 25 to 30 Creative Design Per Month",
                        "3 Revision per Post",
                        "12 to 15 Reels Per Month",
                        "Premium Content Calendar Creation",
                        "Weekly Performance Report",
                        "Trending-Based Creative Posts",
                        "Festival & National Day Posts(creative posters for special occasions)",
                        "Description, Hashtag Research & Optimization",
                        "AI-Powered  Creative",
                        "Profile Optimization",
                        "Meta Business Suite(Setup)",
                        "Ad Manager (Setup)",
                        "Paid Ad Campaigns(Setup & Manage FB/IG Ads Campaigns)",
                        "Audience Targeting",
                        "Ad Budget Management(Daily/weekly Budget Allocation & Ad Optimization)",
                        "Audience Research(Demographics, Interests & Behavior Insights)",
                        "ROI Funnel Strategy",
                        "Campaign Objectives",
                        "Brand Health Check Across All Platforms",
                        "Competitor & Market Research",
                        "Google Review Posting/ Video Review",
                        "Community Building",
                        "Analytics, Performance Monitoring & Reporting",                       
                        "Business Manager(Setup)",
                        "Remarketing",
                        "Pixel Setup",                   
			            "Ads A/B Testing(Testing Different Creatives, Copies, CTA)",
                        "Conversion & ROI Tracking",
                        "Ad Creative Design(Images, Videos, Carousel Ads)",
                        "Strategy & Planning",
                        "High Conversion",
                        "Ad Placement(Optimize Auto/Manual Placements Across Mobile/ Tablet and Computer)",
                        "Dedicated Marketing Manager"
                    ]
                ],
            ],
            'google-ads-package-hyderabad' => [
                'Basic' => [
                    'price' => '₹7,999',
                   'features' => [
                        "Campaign Setup for Search Ads",
                        "Daily Ads Optimization",
                        "Budget Optimization Guidance",
                        "Basic Keyword Research (8–10 keywords)",
                        "Ad Copywriting (Up to 3 Ad Variations)",
                        "Location Targeting Setup",
                        "Ad Extensions Setup (Call, Location, Sitelink)",
                        "Conversion Tracking Setup",
                        "Weekly Performance Report",
                        "Budget Optimization Guidance",
                        "Click & Conversion Analysis",
                        "Monthly Report & Insights"
                    ]
                ],
                'Standard' => [
                    'price' => '₹14,999',
                    'features' => [
                        "Everything in Basic",
                        "Campaign Setup for Search & Display Ads",
                        "Advanced Keyword Research (15–20 keywords)",
                        "Ad Copywriting (Up to 5 Ad Variations)",
                        "Location & Device Targeting Setup",
                        "Ad Extensions Setup (Call, Location, Sitelink, Callout)",
                        "Conversion Tracking Setup",
                        "Daily Ads Optimization & Bid Adjustments",
                        "A/B Testing for Ads & Landing Pages",
                        "Competitor Ads Analysis",
                        "Advanced Negative Keywords Optimization",
                        "Monthly Performance Report & ROI Insights",
                        "Dedicated Google Ads Manager"
                    ]
                ],
                'Premium' => [
                    'price' => '₹24,999',
                    'features' => [
                        "Everything in Standard",
                        "Campaign Setup for Search, Display & Shopping Ads",
                        "Comprehensive Keyword Research (50+ keywords)",
                        "Ad Copywriting & Creative Banner Design",
                        "Audience Segmentation & Demographic Targeting",
                        "A/B Testing for Ads, Landing Pages & CTAs",
                        "CRO Suggestions",
                        "Remarketing Setup (Visitors Retargeting)",
                        "Conversion Rate Optimization Suggestions",
                        "Advanced Negative Keywords Optimization",
                        "Pixel & Conversion Tracking Setup",
                        "Daily Ads Optimization & Bid Management",
                        "Competitor & Market Analysis",
                        "Weekly Performance Reports & Recommendations",
                        "ROI Funnel Strategy & Scaling Consultation",
                        "Shopping Ads (for eCommerce)",
                        "YouTube Video Ads Setup (Optional)",
                        "Dedicated Senior Google Ads Specialist",
                        "High Conversion Strategy & Planning"
                    ]
                ],
            ],
            'seo-package-hyderabad' => [
                'Basic' => [
                    'price' => '₹9,999',
                    'features' => [
                        "Website SEO Audit & Report",
                        "Basic Keyword Research (10–15 Keywords)",
                        "On-Page Optimization (Meta Tags, Titles, Descriptions)",
                        "Technical SEO Setup (Robots.txt, Sitemap, Canonical Tags)",
                        "Google Search Console & Analytics Setup",
                        "Mobile & Page Speed Optimization",
                        "Image Optimization (Alt Tags & Compression)",
                        "Internal Linking Optimization",
                        "Local SEO Setup (Google My Business Optimization)",
                        "Monthly Ranking Performance Report",
                        "Basic Backlink Suggestions",
                        "Competitor Keyword Overview",
                        "Best ROI-Focused SEO Strategy"
                    ]
                ],
                'Standard' => [
                    'price' => '₹14,999',
                    'features' => [
                        "Everything in Basic",
                        "Advanced Keyword Research (20–30 Keywords)",
                        "Comprehensive On-Page SEO (Schema, Structured Data, OG Tags)",
                        "Technical SEO Audit & Fixes",
                        "Off-Page SEO",
                        "High-Quality Backlink Building (10–15 Links/Month)",
                        "Local SEO Optimization",
                        "Google My Business Optimization & Posting (4 Posts/Month)",
                        "Content Optimization for Existing Pages",
                        "Landing Page SEO Recommendations",
                        "Monthly Keyword Ranking Report",
                        "Competitor SEO Analysis & Strategy",
                        "Image, Video & Blog SEO Optimization",
                        "Dedicated SEO Account Manager",
                        "Best ROI-Focused SEO Strategy"
                    ]
                ],
                'Premium' => [
                    'price' => '₹22,999',
                    'features' => [
                        "Everything in Standard",
                        "Advanced Keyword Research (40+ Keywords)",
                        "Content Strategy & Blog Writing (Up to 4 Blogs/Month)",
                        "Authority Backlink Building (30+ High-DA Links/Month)",
                        "Guest Posting & Outreach Campaigns",
                        "Advanced Technical SEO (Core Web Vitals, Crawl Budget Optimization)",
                        "Local SEO Domination for Hyderabad (Citations, Reviews, NAP Consistency)",
                        "Competitor Gap Analysis & Content Clusters",
                        "Conversion Rate Optimization (CRO) Suggestions",
                        "Schema Markup Implementation (FAQ, Product, Review, Local)",
                        "Monthly Detailed SEO Reports & Growth Insights",
                        "E-commerce / Service Page SEO Optimization",
                        "Brand Visibility & Reputation Management",
                        "Dedicated Senior SEO Expert & Strategy Consultation",
                        "High Conversion SEO Strategy & Continuous Monitoring",
                        "Best ROI-Focused SEO Campaign"
                    ]
                ],
            ],
            'static-website-package-hyderabad' => [
                'Basic' => [
                    'price' => '₹3,999',
                    'features' => [
                        "Single Page Website (Scrolling Layout)",
                        "Modern Mobile-Friendly Design",
                        "Eye-Catching Hero Banner with CTA Button",
                        "Business Info, Services, Gallery & Contact Section",
                        "WhatsApp & Call Button Integration",
                        "Free Contact Form Setup (Email or WhatsApp Lead)",
                        "Social Media Links Integration",
                        "Basic SEO Setup (Meta Title, Description, Keywords)",
                        "Google Map Embed for Location",
                        "Delivery Within 3 Working Days",
                        "1 Free Revision",
                        "Perfect for Startups, Freelancers & Local Businesses",
                        "Mobile-Friendly/Responsive Design",
                        "Effective Call-To-Actions & Easy Navigation",
                        "Brand Typography & Color Code",
                        "Complete Deployment"
                    ]
                ],
                'Standard' => [
                    'price' => '₹7,999',
                    'features' => [
                        "Everything in Basic",
                        "Free Hosting & SSL for 1 Year",
                        "Up to 5 Pages, Extra Per Page Cost not Included (Home, About, Services, Gallery, Contact)",
                        "Custom Brand-Based Design & Color Theme",
                        "Optimized Image & Banner Design",
                        "Basic On-Page SEO Optimization",
                        "Google Analytics & Search Console Integration",
                        "Faster Loading (Speed Optimization)",
                        "Lead Capture Form with Email Alerts",
                        "1 Month Free Maintenance Support",
                        "Delivery Within 5–7 Working Days",
                        "Great for Local Businesses & Agencies"
                    ]
                ],
                'Premium' => [
                    'price' => '₹9,999',
                    'features' => [
                        "Everything in Standard",
                        "Up to 8 Static Website Pages(Extra Per Page Cost not Included)",
                        "Advanced UI/UX Design with Animation & Motion Effects",
                        "SEO-Optimized Structure for Higher Google Ranking",
                        "Content Writing Support (Up to 800 Words)",
                        "Interactive Elements (Counters, Sliders, Reviews, etc.)",
                        "Call-to-Action Strategy for More Leads",
                        "Google Business Profile Setup Assistance",
                        "Priority Support with Faster Delivery",
                        "Delivery Within 10–15 Working Days",
                        "Google Page Speed Optimized (Loads Fast Even on Week Networks)",
                        "Unlimited Copyright-Free Stock Images",
                        "Copyright-Free Unique Website Content",
                        "SEO Optimized Code (Semantic Tags & Meta Tags)",
                        "Secure & Error-Free Coding",
                        "Unique User Interactive UI/UX",
                        " UI/UX Testing",
                        "Browser Compatibility Testing",
                        "Less Scroll for Better User Experience",
                        "Minified CSS/JS",
                        "Perfect for Professionals & Established Businesses"
                    ]
                ],
            ],
            'dynamic-website-package-hyderabad' => [
                'Basic' => [
                    'price' => '₹14,999',
                    'features' => [
                        "Dynamic 4–5 Page Website with Admin Panel",
                        "Free SSL Certificate for 1 Year",
                        "Free Web Hosting for 1 Year",
                        "Effective Call-To-Actions & Easy Navigation",
                        "User-Friendly Admin Dashboard (Add/Edit/Delete Content)",
                        "Mobile-Friendly / Responsive Design",
                        "Google PageSpeed Optimized",
                        "Google Map, WhatsApp & Social Media Integration",
                        "SEO Optimized Code (Meta Title, Description, Keywords)",
                        "Copyright-Free Stock Images",
                        "Contact Form for Capturing Business Leads",
                        "Secure & Error-Free Coding",
                        "Fast Loading Speed Optimization",
                        "1 Week Free Support After Deployment",
                        "Delivery Within 10–15 Working Days",
                        "Complete Deployment",
                        "Perfect for Local Businesses & Startups"
                    ]
                ],
                'Standard' => [
                    'price' => '₹24,999',
                    'features' => [
                        "Everything in Basic",
                        "Up to 10 Dynamic Pages (Extra Page Cost ₹800/Page)",
                        "Advanced Admin Panel with User Management",
                        "Unlimited Dynamic Web Pages (CMS Ready)",
                        "Dynamic Content Rendering (Real-Time Updates)",
                        "Brand Typography & Color Code Customization",
                        "Google Analytics & Search Console Integration",
                        "Effective Call-To-Actions & Lead Conversion Layouts",
                        "Content Optimization for Better Search Ranking",
                        "Browser Compatibility Testing (All Devices)",
                        "Minified CSS/JS for Faster Performance",
                        "Database Integration with Error-Free Validation",
                        "Secure Admin Authentication & Authorization",
                        "2 Weeks Free Support After Deployment",
                        "Ideal for Growing Businesses & Agencies"
                    ]
                ],
                'Premium' => [
                    'price' => '₹34,999',
                    'features' => [
                        "Everything in Standard",
                        "Custom UI/UX Design with Interactive Animations",
                        "Dynamic Modules (Blogs, Services, Testimonials, Gallery, etc.)",
                        "Admin Dashboard with Full CRUD Functionality",
                        "Role-Based Admin Access (Multiple User Levels)",
                        "SEO-Friendly URL Structure & Schema Markup",
                        "Unlimited Dynamic Content & Media Uploads",
                        "Comprehensive Security (Form Validation, CSRF, XSS Protection)",
                        "Website UI/UX Testing for Better User Experience",
                        "Less Scroll, Better Engagement Layout",
                        "Conversion-Focused Call-To-Action Strategy",
                        "Copyright-Free Unique Website Content",
                        "Analytics & Performance Monitoring Dashboard",
                        "1 Month Free Maintenance & Technical Support",
                        "Unique UI/UX",
                        "Faster Delivery (Within 15–20 Working Days)",
                        "Dynamic Content Rendering",
                        "Error-Free, Well-Commented Code",
                        "Best for Professional & Corporate Websites"
                    ]
                ],
            ],
            'ecommerce-website-package-hyderabad' => [
                'Basic' => [
                    'price' => '₹29,999',
                    'features' => [
                        "Dynamic eCommerce Website with 5–10 Products",
                        "Wordpress Technology",
                        "Free SSL Certificate for 1 Year",
                        "Free Web Hosting for 1 Year",
                        "Copyright-Free Unique Website Content & Stock Images",
                        "Unique & User Interactive UI/UX",
                        "Effective Call-To-Actions & Easy Navigation",
                        "Mobile-Friendly / Responsive Design",
                        "Google Page Speed Optimized",
                        "Shopping Cart & Checkout System",
                        "Customer Login / Signup",
                        "Admin Dashboard for Basic Store Management",
                        "1 Contact Form for Capturing Leads",
                        "Social Media & WhatsApp Integration",
                        "SEO Optimized Code for Homepage & Product Pages",
                        "Secure & Error-Free Coding",
                        "Browser Compatibility Testing",
                        "1 Week Free Support After Deployment",
                        "Delivery Within 15–20 Working Days",
                        "Complete Deployment",
                        "Perfect for Small Businesses & Startups"
                    ]
                ],
                'Standard' => [
                    'price' => '₹42,999',
                    'features' => [
                        "Everything in Basic",
                        "Up to 50 Products",
                        "Framework Technology",
                        "Advanced Admin Dashboard (Add/Edit/Delete Products, Categories)",
                        "Payment Gateway Integration (Razorpay, PayPal, etc.)",
                        "Order & Customer Management System",
                        "Discount Coupons & Promo Code Setup",
                        "Product Filters & Search Functionality",
                        "Google Analytics & Search Console Integration",
                        "SEO Optimized Product & Category Pages",
                        "Brand Typography & Color Customization",
                        "Unlimited Stock Images for Products",
                        "Lead Capture Forms for Marketing",
                        "2 Weeks Free Support After Deployment",
                        "Delivery Within 20–30 Working Days",
                        "Ideal for Growing Online Stores & Local Businesses"
                    ]
                ],
                'Premium' => [
                    'price' => '₹3,21,999',
                    'features' => [
                        "Everything in Standard",
                        "Unlimited Products & Categories",
                        "React JS & NextJS",
                        "Advanced UI/UX Design with Animations",
                        "Multiple Payment & Shipping Options",
                        "Delivery Order Confirmation",
                        "Customer Wishlist & Reviews Integration",
                        "Advanced Product Filters & Sorting",
                        "Dynamic Offers",
                        "Inventory & Stock Management Automation",
                        "Email/SMS Notifications for Orders",
                        "Analytics Dashboard for Sales & Revenue",
                        "Conversion-Oriented Landing Pages for Products",
                        "Advanced SEO (On-Page + Schema Markup)",
                        "Security & Backup Setup",
                        "UI/UX Testing",
                        "1 Month Free Maintenance & Support",
                        "Shopping Cart & Checkout System",
                        "Customer, Delivery Boy & Owner Login / Signup",
                        "Minified CSS/JS",
                        "Perfect for Professional Businesses & Growing eCommerce Stores"
                    ]
                ],
            ],
            'basic-package' => [
                'Basic' => [
                    'price' => '₹0',
                    'features' => ["No package included!!"]
                ]
            ]
        ];


        // Get current service packages
        $data['packages'] = $all_packages[$slug] ?? $all_packages['basic-package'];
        $data['service_name'] = $this->input->get('service_name') ?? 'Our Service';
        $data['customer_name'] = $this->input->get('customer_name') ?? 'Valued Customer';

        $this->load->view('front/inc/header', $header_data);
        $this->load->view('front/packages/thank_you_view', $data);
        $this->load->view('front/inc/footer');
    }

}
