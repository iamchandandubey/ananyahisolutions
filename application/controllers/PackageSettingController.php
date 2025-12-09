<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackageSettingController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('MasterModel');
    }

    public function Show_Package()
	{
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            $this->load->library('pagination');
            
            $data['title'] = "Package";
            $table_name = "package_tbls";
            
            $data['packages'] = $this->MasterModel->Get_All_Packages($table_name);

            $this->load->view('back/inc/header_view',$data);
		    $this->load->view('back/packages/package_view',$data);
		    $this->load->view('back/inc/footer_view');
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
		
	}

    public function Add_Packages()
	{
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            
            $data['title'] = "Add New Package";
            $this->load->view('back/inc/header_view',$data);
		    $this->load->view('back/packages/add_package_view');
		    $this->load->view('back/inc/footer_view');
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
		
	}

	

	public function Validate_Package(){
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){

            // ✅ Check if form is submitted via button
        if ($this->input->post('submit_btn')) {
             $this->load->library('form_validation');
            // --- Validation Rules ---
            $this->form_validation->set_rules('package_heading', 'Package Name', 'required|trim');
            $this->form_validation->set_rules('Sub_heading', 'Sub Heading', 'required|trim');
            $this->form_validation->set_rules('vissible_list', 'Visible Package List', 'required|trim');
            $this->form_validation->set_rules('blue_list', 'Blur Package List', 'required|trim');
            $this->form_validation->set_rules('placement', 'Package Placement', 'required');
            // $this->form_validation->set_rules('slug', 'Slug URL', 'required|trim|alpha');
           $this->form_validation->set_rules('slug','Slug URL','required|trim|is_unique[package_tbls.slug]|regex_match[/^[a-zA-Z-]+$/]',[
                'regex_match' => 'The %s field may only contain letters and dashes (no spaces).',
                'is_unique'   => 'The %s you entered already exists. Please use a different one.'
             ]);

            if ($this->form_validation->run() == FALSE) {
                // Validation failed — show same view again
                $this->session->set_flashdata('error', '⚠️ Please fill all required fields correctly.');
                $this->Add_Packages();
            } else {
                // --- Handle textareas (convert line breaks to array) ---
                $visible_points = array_filter(array_map('trim', explode("\n", $this->input->post('vissible_list', TRUE))));
                $blur_points    = array_filter(array_map('trim', explode("\n", $this->input->post('blue_list', TRUE))));

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
                $added_by = $this->session->userdata('user_name');

                // --- Prepare Data ---
                $data = [
                    'heading' => $this->input->post('package_heading', TRUE),
                    'sub_heading'     => $this->input->post('Sub_heading', TRUE),
                    'vissible_package_list'   => json_encode($visible_points),
                    'blur_package_list'       => json_encode($blur_points),
                    'package_placement'       => $this->input->post('placement', TRUE),
                    'slug'            => strtolower(trim($this->input->post('slug', TRUE))),
                    'added_by'      => $added_by,
                    'added_date'      => $formattedDate
                ];

                // --- Insert into Database ---
                $table_name = "package_tbls";

                if ($this->MasterModel->Insert_Package( $table_name, $data)) {
                    $this->session->set_flashdata('success', '✅ Package added successfully!');
                } else {
                    $this->session->set_flashdata('error', '❌ Something went wrong while saving your data.');
                }

                redirect('add-business-package');
            }

        } else {
            // 🚫 If user directly visits URL (no button click)
            $this->session->set_flashdata('error', '⚠️ Invalid request! Please use the form to submit your data.');
            redirect('add-business-package');
        }
            
           
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
	}

    public function Delete_Package(){
      
        // Check login & permission
        if($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            $table_name = "package_tbls";

            if($this->MasterModel->Delete_Package( $table_name,$this->uri->segment(2))){
                $this->session->set_flashdata('success','✅ Package deleted successfully!');

            } else {
                $this->session->set_flashdata('error','❌ Failed to delete package!');
            }
            redirect('business-packages');

            } else {
                $this->session->set_flashdata('error','❌ You do not have permission.');
                redirect('owner-login');
            }
    }


    // Package List
    public function Show_Package_List()
	{
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            $this->load->library('pagination');
            
            $data['title'] = "All Package List";
            $table_name = "package_list_tbls";
            
            $data['packages'] = $this->MasterModel->Get_All_Packages($table_name);

            $this->load->view('back/inc/header_view',$data);
		    $this->load->view('back/packages/package_list_view',$data);
		    $this->load->view('back/inc/footer_view');
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
		
	}


    public function Add_Package_List()
	{
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            
            //Get - All Packages name & slug from Database
             // Get all packages (heading & slug)
             $select_table_columns = "heading, slug";
             $table_name = "package_tbls";

             $order_by_field_name = "heading";
             $order_by = "ASC";

            $data['packages'] = $this->MasterModel->Get_All_Packages_Names($table_name,$select_table_columns,$order_by_field_name,$order_by);
            //End - 
            $data['title'] = "Add New Package";
            $this->load->view('back/inc/header_view',$data);
		    $this->load->view('back/packages/add_package_list_view',$data);
		    $this->load->view('back/inc/footer_view');
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
		
	}


    public function Validate_Package_Plan(){
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){

            // ✅ Check if form is submitted via button
        if ($this->input->post('submit_btn')) {
             $this->load->library('form_validation');
            // --- Validation Rules ---
            $this->form_validation->set_rules('package_name', 'Package Name', 'required|trim');
            $this->form_validation->set_rules('package_plan', 'Package Plan', 'required|trim');
            $this->form_validation->set_rules('package_price', 'Package Price', 'required|trim|numeric|greater_than[0]');
            $this->form_validation->set_rules('full_package_plan', 'Full Package Plan', 'required|trim');
            

            if ($this->form_validation->run() == FALSE) {
                // Validation failed — show same view again
                $this->session->set_flashdata('error', '⚠️ Please fill all required fields correctly.');
                $this->Add_Package_List();
            } else {
               
                $full_package_plan = array_filter(array_map('trim', explode("\n", $this->input->post('full_package_plan', TRUE))));

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

                $added_by = $this->session->userdata('user_name');

                
                // --- Prepare Data ---
                $data = [
                    'package_parent_slug' => $this->input->post('package_name', TRUE),
                    'package_price'     => $this->input->post('package_price', TRUE),
                    'package_type_slug'     => $this->input->post('package_plan', TRUE),
                    'package_full_details'   => json_encode($full_package_plan),
                    'added_by'      => $added_by,
                    'added_date'      => $formattedDate
                ];

                // --- Insert into Database ---
                $table_name = "package_list_tbls";

                if ($this->MasterModel->Insert_Package( $table_name, $data)) {
                    $this->session->set_flashdata('success', '✅ Package plan added successfully!');
                } else {
                    $this->session->set_flashdata('error', '❌ Something went wrong while saving your data.');
                }

                redirect('add-package-list');
               
            }

        } else {
            // 🚫 If user directly visits URL (no button click)
            $this->session->set_flashdata('error', '⚠️ Invalid request! Please use the form to submit your data.');
            redirect('add-package-list');
        }
            
           
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
	}
    // End Package List


    // Package Inquiry
    public function Package_Inquiries()
	{
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            
            $data['title'] = "Package Inquiries";
            $table_name = "package_leads";
            $data['packages'] = $this->MasterModel->Get_All_Packages($table_name);
           

            $this->load->view('back/inc/header_view',$data);
		    $this->load->view('back/packages/package_inquiries_view',$data);
		    $this->load->view('back/inc/footer_view');
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
		
	}

     public function Delete_Package_Inquiry(){
      
        // Check login & permission
        if($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            $table_name = "package_leads";

            if($this->MasterModel->Delete_Package( $table_name,$this->uri->segment(2))){
                $this->session->set_flashdata('success','✅ Package inquiry deleted successfully!');

            } else {
                $this->session->set_flashdata('error','❌ Failed to delete package inquiry!');
            }
            redirect('package-inquiries');

            } else {
                $this->session->set_flashdata('error','❌ You do not have permission.');
                redirect('owner-login');
            }
    }

      // End Package Inquiry







}
