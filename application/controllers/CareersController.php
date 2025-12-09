<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareersController extends CI_Controller {

	
	public function index(){
		//SEO
		$header_data['meta_title'] = "Careers at Ananya Hi Solutions | Join Our Growing Team";
		$header_data['meta_description'] = "Explore exciting career opportunities at Ananya Hi Solutions. We are hiring digital marketers, developers and designers. Apply now and build your career with us.";
		$header_data['canonical_url'] = current_url();

		//Open Graph (Facebook + LinkedIn)
		$header_data['og_and_twitter_title'] = $header_data['meta_title'];
		$header_data['og_and_twitter_description'] = $header_data['meta_description'];
		$header_data['og_and_twitter_image'] = base_url('assets/front/images/careers-banner.jpg');
		$header_data['og_and_twitter_image_alt'] = "Career Opportunities at Ananya Hi Solutions";
		$header_data['og_and_twitter_url'] = current_url();

		// type
		$header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema (optional salary range if job listing)
		$header_data['schema_salary'] = "₹15,000 - ₹90,000 per month";

		//Show All Jobs
        $table_name = "hiring_tbls";
		$this->load->model(['MasterModel']);
        $data['jobs'] = $this->MasterModel->Get_All_Packages($table_name);


		$this->load->view('front/inc/header',$header_data);
		$this->load->view('front/careers/careers_view',$data);
		$this->load->view('front/inc/footer');
	}

	public function job_details(){
		//SEO
		$header_data['meta_title'] = "Android Developer Job - Careers at Ananya Hi Solutions";
		$header_data['meta_description'] = "We are hiring Android Developer with 2-4 years experience in Jamshedpur. Apply now and build your career.";
		
		$header_data['canonical_url'] = current_url();

		//Open Graph (Facebook + LinkedIn)
		$header_data['og_and_twitter_title'] = $header_data['meta_title'];
		$header_data['og_and_twitter_description'] = $header_data['meta_description'];
		$header_data['og_and_twitter_image'] = base_url('assets/front/images/careers-banner.jpg');
		$header_data['og_and_twitter_image_alt'] = "Career Opportunities at Ananya Hi Solutions";
		$header_data['og_and_twitter_url'] = current_url();

		// type
		$header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema (optional salary range if job listing)
		$header_data['schema_salary'] = "₹15,000 - ₹90,000 per month";

		//Fetch Specific JOb
		$id = $this->uri->segment(2);
		$table_name = "hiring_tbls";

		$this->load->model(['MasterModel']);
		$data['hiring'] = $this->MasterModel->getDataById($table_name,$id);


		$this->load->view('front/inc/header',$header_data);
		$this->load->view('front/careers/job_details_view',$data);
		$this->load->view('front/inc/footer');
	}

	public function job_application(){
		//SEO
		$header_data['meta_title'] = "Android Developer Job - Careers at Ananya Hi Solutions";
		$header_data['meta_description'] = "We are hiring Android Developer with 2-4 years experience in Jamshedpur. Apply now and build your career.";
		
		$header_data['canonical_url'] = current_url();

		//Open Graph (Facebook + LinkedIn)
		$header_data['og_and_twitter_title'] = $header_data['meta_title'];
		$header_data['og_and_twitter_description'] = $header_data['meta_description'];
		$header_data['og_and_twitter_image'] = base_url('assets/front/images/careers-banner.jpg');
		$header_data['og_and_twitter_image_alt'] = "Career Opportunities at Ananya Hi Solutions";
		$header_data['og_and_twitter_url'] = current_url();

		// type
		$header_data['og_type'] = "website";
		$header_data['og_updated_time'] = date('c');

		// Schema (optional salary range if job listing)
		$header_data['schema_salary'] = "₹15,000 - ₹90,000 per month";

		

		$this->load->view('front/inc/header',$header_data);
		$this->load->view('front/careers/application_view');
		$this->load->view('front/inc/footer');
	}

	public function submit_application(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('job_title','Job Applied For','required|trim');
		$this->form_validation->set_rules('name','Full Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|valid_email|trim');
		$this->form_validation->set_rules('phone','Phone Number','required|trim');
		$this->form_validation->set_rules('address','Full Address','required|trim');
		$this->form_validation->set_rules('resume','Resume','callback_file_check');

		if($this->form_validation->run() == FALSE){
			$this->job_application();
		}else{

			// Upload
			$config['upload_path']   = './uploads/resumes/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size']      = 2048;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('resume')){
			$this->form_validation->set_message('file_check', strip_tags($this->upload->display_errors()));
				$this->job_application();
				return;
			}

			$uploadData = $this->upload->data();
			$resumePath = 'uploads/resumes/'.$uploadData['file_name'];

			$data = [
				'applied_for'   => $this->input->post('job_title'),
				'full_name'     => $this->input->post('name'),
				'email'         => $this->input->post('email'),
				'phone'         => $this->input->post('phone'),
				'full_address'  => $this->input->post('address'),
				'resume'        => $resumePath,
				'submited_on'   => date('Y-m-d H:i:s'),
			];



			// --- Insert into Database ---
			$table_name = "hiring_application_tbls";
			$this->load->model(['MasterModel']);

			if ($this->MasterModel->Insert_Package($table_name, $data)) {
				$this->session->set_flashdata('success', '✅ Thank you for applying. Our HR team will review your resume and contact you if your profile matches our requirements.');
			} else {
				$this->session->set_flashdata('error', '❌ Something went wrong while saving your data.');
			}

			redirect('job-application');
		}
	}

	public function file_check($str){
		if (empty($_FILES['resume']['name'])) {
			$this->form_validation->set_message('file_check', 'Please upload your resume');
			return FALSE;
		}

		$allowed_mime = ['application/pdf','application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

		if (!in_array($_FILES['resume']['type'], $allowed_mime)) {
			$this->form_validation->set_message('file_check', 'Only PDF, DOC, DOCX files are allowed');
			return FALSE;
		}

		if ($_FILES['resume']['size'] > 2048*1024) {
			$this->form_validation->set_message('file_check', 'Max file size allowed is 2MB');
			return FALSE;
		}

		return TRUE;
	}

	public function All_Jobs() {
        // Check login & permission
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
            
			$this->load->model(['MasterModel']);
			$data['title'] = "All Hiring Jobs";

            // Fetch all quotations
            $table_name = "hiring_tbls";
            $data['quotations'] = $this->MasterModel->Get_All_Packages($table_name);

            // Load views
            $this->load->view('back/inc/header_view', $data);
            $this->load->view('back/hiring/hiring_view', $data);
            $this->load->view('back/inc/footer_view');
        } else {
            $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
        }
    }

	public function new_hiring() {
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
            
			$data['title'] = "New Hiring";

            $this->load->view('back/inc/header_view', $data);
           $this->load->view('back/hiring/new_hiring_view');
            $this->load->view('back/inc/footer_view');
        } else {
            $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
        }
    }

	public function validate_hiring(){
		 // Check if user is logged in
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){

            // ✅ Check if form is submitted via button
        if ($this->input->post('submit_btn')) {
            $this->load->library('form_validation');
          
        // Validation Rules
				$this->form_validation->set_rules('job_title','Job Title','required|trim');
				$this->form_validation->set_rules('qualification','Qualification','required|trim');
				$this->form_validation->set_rules('experience','Experience','required|trim');
				$this->form_validation->set_rules('location','Location','required|trim');
				$this->form_validation->set_rules('job_description','Job Description','required|trim');

			if ($this->form_validation->run() == FALSE) {
				 // Validation failed — show same view again
                $this->session->set_flashdata('error', '⚠️ Please fill all required fields correctly.');
                $this->new_hiring();
			}else{
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


				// Prepare Data
				$data = [
					'job_title'       => $this->input->post('job_title'),
					'qualification'   => $this->input->post('qualification'),
					'experience'      => $this->input->post('experience'),
					'location'        => $this->input->post('location'),
					'job_description' => $this->input->post('job_description', FALSE), // allow HTML
					'posted_date'     => date('Y-m-d'),
					'posted_by'       => $this->session->userdata('user_name') // or user id
				];

                // --- Insert into Database ---
                $table_name = "hiring_tbls";
				$this->load->model(['MasterModel']);

                if ($this->MasterModel->Insert_Package( $table_name, $data)) {
                    $this->session->set_flashdata('success', '✅ Hiring Job added successfully!');
                } else {
                    $this->session->set_flashdata('error', '❌ Something went wrong while saving your data.');
                }

                redirect('new-hiring');
			}

           

        } else {
            // 🚫 If user directly visits URL (no button click)
            $this->session->set_flashdata('error', '⚠️ Invalid request! Please use the form to submit your data.');
            redirect('new-hiring');
        }
            
           
        }else{
			$this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
		}
	}

	public function show_hiring_info(){
		 if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
            
			$data['title'] = "Show Job Hiring Information";

			//Fetch Specific Data Here
			$id = $this->uri->segment(2);
			$table_name = "hiring_tbls";

			$this->load->model(['MasterModel']);
			$data['hiring'] = $this->MasterModel->getDataById($table_name,$id);


            $this->load->view('back/inc/header_view', $data);
           	$this->load->view('back/hiring/job_info_view',$data);
            $this->load->view('back/inc/footer_view');
        } else {
            $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
        }
	}

	public function validate_hiring_info(){
		 if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
            
			$data['title'] = "Show Job Hiring Information";

			//Fetch Specific Data Here
			echo $id = $this->input->post('id');
			$data = [
				'job_title'       => $this->input->post('job_title'),
				'qualification'   => $this->input->post('qualification'),
				'job_display'     => $this->input->post('job_display'),
				'job_status'      => $this->input->post('job_status'),
				'experience'      => $this->input->post('experience'),
				'location'        => $this->input->post('location'),
				'job_description' => $this->input->post('job_description'),
			];

			$this->load->model('MasterModel');
			$update = $this->MasterModel->updateData('hiring_tbls', $data, $id);

			if ($update) {
				$this->session->set_flashdata('success','Hiring data updated successfully! 🔥');
			} else {
				$this->session->set_flashdata('error','Something went wrong!');
			}

			redirect('show-hiring-info/'.$id);

			
			
        } else {
            $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
        }
	}

	public function Delete_Package(){
      
        // Check login & permission
        if($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
				$table_name = "hiring_tbls";
				$this->load->model('MasterModel');

				if($this->MasterModel->Delete_Package( $table_name,$this->uri->segment(2))){
					$this->session->set_flashdata('success','✅ Hiring job deleted successfully!');

				} else {
					$this->session->set_flashdata('error','❌ Failed to delete package!');
				}
				redirect('all-hirings');

            } else {
                $this->session->set_flashdata('error','❌ You do not have permission.');
                redirect('owner-login');
            }
    }

	public function all_applications() {
        // Check login & permission
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
            
			$this->load->model(['MasterModel']);
			$data['title'] = "All Applications";

            // Fetch all quotations
            $table_name = "hiring_application_tbls";
            $data['quotations'] = $this->MasterModel->Get_All_Packages($table_name);

            // Load views
            $this->load->view('back/inc/header_view', $data);
            $this->load->view('back/hiring/application_view', $data);
            $this->load->view('back/inc/footer_view');
        } else {
            $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
        }
    }

	public function Delete_Applications(){
      
        // Check login & permission
        if($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
				$table_name = "hiring_application_tbls";
				$this->load->model('MasterModel');

				if($this->MasterModel->Delete_Package( $table_name,$this->uri->segment(2))){
					$this->session->set_flashdata('success','✅ Hiring job application deleted successfully!');

				} else {
					$this->session->set_flashdata('error','❌ Failed to delete application.');
				}
				redirect('all-applications');

            } else {
                $this->session->set_flashdata('error','❌ You do not have permission.');
                redirect('owner-login');
            }
    }

	
















}
