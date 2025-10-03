<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller {
	public function index()
	{
		//SEO
		$header_data['meta_title'] = "About us";
		$header_data['meta_description'] = "About Software Development ";
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
		$this->load->view('front/about/about_view');
		$this->load->view('front/inc/footer');
	}

	
}
