<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	public function index()
	{
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){

			$data['title'] = "Dashboard";
			$this->load->view('back/inc/header_view',$data);
			$this->load->view('back/dashboard/dashboard_view');
			$this->load->view('back/inc/footer_view');
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
		
	}
}
