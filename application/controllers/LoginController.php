<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        
		// Load the model and helpers
        $this->load->model('LoginModel');
    }

	public function index()
	{
		$this->load->view('auth/login_view');
	}

	public function Validate_Login() {
		// Load helpers & libraries
		$this->load->library('form_validation');

		// Check if form is submitted
		if ($this->input->post('sign_in')) {

			// Add validation rules
			$this->form_validation->set_rules('user_eamil', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('user_pass', 'Password', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('auth/login_view');
			} else {
				$email = $this->input->post('user_eamil', TRUE);
                $password = $this->input->post('user_pass', TRUE);
				
				// Check user in DB
                $user = $this->LoginModel->Check_User($email);

				if (!empty($user) && password_verify($password, $user['password'])) {
                    // Set session and redirect
                    $this->session->set_userdata([
                        'user_id' => $user['id'],
						'user_name' => $user['user_name'],
                        'login_permission' => $user['permission'],
                        'login_type' => $user['login_type'],
                        'logged_in' => TRUE
                    ]);
                    redirect('business-dashboard');
                } else {
                  	$this->session->set_flashdata('error', '❌ Invalid Email or Password!');
					redirect('owner-login'); 
                }
				
			}
			
		} else {
			// Form not submitted — show Access Denied
			$data['error'] = "⚠️ Access Denied! Please log in through the proper form.";
			$this->load->view('auth/login_view', $data);
		}
	}

	public function Log_Out(){
		$this->session->set_flashdata('success', '✅ You have logged out successfully.');
		$this->session->unset_userdata(['user_id', 'user_name', 'login_permission', 'login_type']);
    	redirect('owner-login'); 
	}



	//Suppose in MySQL i entered plain text password while creating login table but i am checking enc pass while login
	// Hash all existing MySQL plain text passwords to encrypted form 
    public function Hash_Existing_Passwords() {
        $users = $this->LoginModel->Get_All_Users();

        foreach($users as $user) {
            // Skip if already hashed (check length or $2y$ prefix)
            if (strlen($user->password) !== 60 || substr($user->password, 0, 4) !== '$2y$') {
                $hashed = password_hash($user->password, PASSWORD_DEFAULT);
                $this->LoginModel->Update_Password($user->id, $hashed);
            }
        }

        echo "✅ All passwords have been securely hashed!";
    }

}
