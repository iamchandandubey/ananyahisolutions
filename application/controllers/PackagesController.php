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
            
			// Validation passed, process form (send email or save to DB)
			date_default_timezone_set('Asia/Kolkata');

			// --- Insert into DB ---
			$data = [
				'customer_name' => $this->input->post('name',TRUE),
				'email_id' => $this->input->post('email',TRUE),
				'phone_no' => $this->input->post('phone',TRUE),
				'traffic_platform' => $this->input->post('platform',TRUE),
				'services' => $this->input->post('services',TRUE),
				'created_at' =>date('d-m-Y h:i A'),
				'created_by'=> "website"
			];

			//Insert into DB
			// Load model
    		$this->load->model('Package_Model');
			$insert_id = $this->Package_Model->insert_lead($data);
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
    $all_packages = [
		'social-media-marketing-package-hyderabad' => [
            "Free Social Media Audit",
            "Brand Health Check Across All Platforms",
            "Competitor & Market Research ",
            "ROI Funnel Strategy",
            "Attractive Creative Content Calendar Creation",
            "Number of Postings (15 to 18 posts per month)",
            "Trending-Based Creative Posts",
            "Festival & National Day Posts(creative posters for special occasions)",
            "Google Review Posting/ Video Review",
            "Description, Hashtag Research & Optimization",
            "Community Building",
            "Analytics, Performance Monitoring & Reporting",
            "AI-Powered  Creative",
            "Profile Optimization",
            "Ad Manager (Setup)",
            "Meta Business Suite(Setup)",
            "Business Manager(Setup)",
            "Paid Ad Campaigns(Setup & Management of FB/IG Ads Campaigns)",
            "Audience Targeting",
            "Remarketing",
            "Pixel Setup",
			"Ad Budget Management(Daily/weekly Budget Allocation & Ad Optimization)",
			"Ads A/B Testing(Testing Different Creatives, Copies, CTA)",
			"Conversion & ROI Tracking",
			"Ad Creative Design(Images, Videos, Carousel Ads)",
			"Audience Research(Demographics, Interests & Behavior Insights)",
			"Campaign Objectives",
			"Ad Placement(Optimize Auto/Manual Placements Across Mobile/ Tablet and Computer)"
        ],
		'google-ads-package-hyderabad' => [
            "Campaign Setup for Search Ads",
            "Keyword Research",
            "Ad Copywriting (Up to 5 ad variations)",
            "Location Targeting Setup",
            "Ad Extensions Setup (Call, Location, Sitelink)",
            "Conversion Tracking Setup",
            "Weekly Performance Report & Bid Adjustments",
            "Daily Ads Optmization",
            "Budget Optimization Guidancen",
            "Click & Conversion Analysis",
            "Monthly Report & Recommendations",
            "Advanced Negative Keywords Optimizations",
            "A/B Testing for Ads & Landing Pages Analysis",
            "Competitor Ads Analysis",
            "Remarketing Setup (Visitors Retargeting)",
            "Dedicated Google Ads Manager",
            "Shopping Ads (for eCommerce)",
            "Conversion Rate Optimization Suggestions"
        ],
        'seo-package-hyderabad' => [
            "Up to 10 Target Keywords",
            "Comprehensive SEO Audit & Competitor Analysis",
            "Website On-Page Optimization",
            "Meta Tags (Title, Description, Alt Tags)",
            "URL Structure Optimization",
            "Image Optimization & Compression",
            "Google My Business Setup / Optimization",
            "Basic Schema Markup",
            "XML Sitemap & Robots.txt Setup",
            "Local SEO (Google Maps Ranking)",
            "Monthly Ranking Report",
            "Blog Posting",
            "High-Quality Backlink Building (5–10 Links/Month)",
            "Monthly Performance Report",
            "Technical SEO Fixes (Speed, Mobile, Canonicals)",
            "Local + Regional SEO Targeting",
            "Guest Posting on Authority Websites",
            "Dedicated SEO Expert Support"
            
        ],
		'static-website-package-hyderabad' => [
            "Free Domain for 1 Year",
            "Free SSL Certificate for 1 Year",
            "Free Web Hosting for 1 Year",
            "Up to 6 Pages (Extra per page cost not included)",
            "1 Week Free Support after deployment",
            "Mobile-Friendly/Responsive Design",
            "Google Page Speed Optimized (Loads fast even on weak networks)",
            "Google Map, WhatsApp & Social Media Integration (Stay connected easily)",
            "Unlimited Copyright-Free Stock Images",
            "Copyright-Free Unique Website Content",
            "SEO Optimized Code (Semantic Tags & Meta Tags)",
            "Secure & Error-Free Coding",
            "Unique Website UI / User Interactive UI/UX",
            "Effective Call-To-Actions & Easy Navigation",
            "Brand Typography & Color Code",
            "Website User Interactive UI/UX Testing",
            "Complete Deployment",
            "Browser Compatibility Testing",
            "Less Scroll for Better User Experience",
            "1 Contact Form for capturing your business leads",
            "Minified CSS/JS"
        ],
        'dynamic-website-package-hyderabad' => [
            "Free Domain for 1 Year",
            "Free SSL Certificate for 1 Year",
            "Free Web Hosting for 1 Year",
            "Up to 6 Pages (Extra per page cost not included)",
            "1 Week Free Support after deployment",
            "Mobile-Friendly/Responsive Design",
            "Google Page Speed Optimized",
            "Google Map, WhatsApp & Social Media Integration",
            "Unlimited Copyright-Free Stock Images",
            "Copyright-Free Unique Website Content",
            "SEO Optimized Code",
            "Secure & Error-Free Coding",
            "Unique Website UI / User Interactive UI/UX",
            "Effective Call-To-Actions & Easy Navigation",
            "Brand Typography & Color Code",
            "Website User Interactive UI/UX Testing",
            "Complete Deployment",
            "Browser Compatibility Testing",
            "Less Scroll for Better User Experience",
            "1 Contact Form for capturing your business leads",
            "Minified CSS/JS",
            "Unlimited Dynamic Web Pages",
            "Dynamic Content Rendering",
            "Admin Authentication & Authorization",
            "Error-Free, Well-Commented Code"
        ],
        'ecommerce-website-package-hyderabad' => [
            "Free Domain for 1 Year",
            "Free SSL Certificate for 1 Year",
            "Free Web Hosting for 1 Year",
            "Up to 6 Pages (Extra per page cost not included)",
            "1 Week Free Support after deployment",
            "Mobile-Friendly/Responsive Design",
            "Google Page Speed Optimized",
            "Google Map, WhatsApp & Social Media Integration",
            "Unlimited Copyright-Free Stock Images",
            "Copyright-Free Unique Website Content",
            "SEO Optimized Code",
            "Secure & Error-Free Coding",
            "Unique Website UI / User Interactive UI/UX",
            "Effective Call-To-Actions & Easy Navigation",
            "Brand Typography & Color Code",
            "Website User Interactive UI/UX Testing",
            "Complete Deployment",
            "Browser Compatibility Testing",
            "1 Contact Form for capturing your business leads",
            "Minified CSS/JS",
            "Add & Manage Products",
            "Shopping Cart & Checkout System",
            "Customer Login / Signup",
            "Admin Dashboard for Store Management"
        ],
        'basic-package' => [ // fallback package
            "No package included!!"
        ]
    ];

    // Ensure package_features is always an array
    $data['package_features'] = $all_packages[$slug] ?? $all_packages['basic-package'];

    $data['service_name'] = $this->input->get('service_name') ?? 'Our Service';
    $data['customer_name'] = $this->input->get('customer_name') ?? 'Valued Customer';

    $this->load->view('front/inc/header', $header_data);
    $this->load->view('front/packages/thank_you_view', $data);
    $this->load->view('front/inc/footer');
}

}
