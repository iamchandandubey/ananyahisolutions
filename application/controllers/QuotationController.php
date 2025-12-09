<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuotationController extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model(['MasterModel','QuotationModel']);
    }



	public function All_Quotations() {
        // Check login & permission
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
            $data['title'] = "All Customer Quotations";

            // Fetch all quotations
            $table_name = "quotations_tbls";
            $data['quotations'] = $this->MasterModel->Get_All_Packages($table_name);

            // Load views
            $this->load->view('back/inc/header_view', $data);
            $this->load->view('back/quotation/quotation_view', $data);
            $this->load->view('back/inc/footer_view');
        } else {
            $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
        }
    }



    public function Create_Quotations() {
        if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
            $data['title'] = "Customer Quotation";

            // Get all packages for dropdown
            $select_table_columns = "heading, slug";
            $table_name = "package_tbls";
            $order_by_field_name = "heading";
            $order_by = "ASC";

            $data['packages'] = $this->MasterModel->Get_All_Packages_Names($table_name, $select_table_columns, $order_by_field_name, $order_by);

            $this->load->view('back/inc/header_view', $data);
            $this->load->view('back/quotation/add_quotation_view', $data);
            $this->load->view('back/inc/footer_view');
        } else {
            $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
            redirect('owner-login');
        }
    }


// AJAX: Get package price
    public function Get_Package_Price() {
        if ($this->input->is_ajax_request()) {
            $slug = $this->input->post('package_slug');
            $plan = $this->input->post('package_plan');

            if ($slug && $plan) {
                $package = $this->QuotationModel->Get_Package_Price($slug, $plan);
                if($package){
                    echo json_encode([
                        'status' => 'success',
                        'price' => $package->package_price,
                        'csrf_hash' => $this->security->get_csrf_hash()
                    ]);
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Price not found',
                        'csrf_hash' => $this->security->get_csrf_hash()
                    ]);
                }
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid parameters',
                    'csrf_hash' => $this->security->get_csrf_hash()
                ]);
            }
        } else {
            show_404();
        }
    }

    // Save quotation
    public function Save_Quotation(){
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


        $data = [
            'customer_name' => $this->input->post('customer_name'),
            'business_name' => $this->input->post('company_name'),
            'mobile_number'=> $this->input->post('mobile_number'),
            'business_address' => $this->input->post('full_address'),
            'created_by' => $added_by,
            'created_date' => $formattedDate,
            'grand_total'  => $this->input->post('grand_total')
        ];

        // Insert client info
        $this->db->insert('quotations_tbls', $data);
        $quotation_id = $this->db->insert_id();

        // Insert packages
        $package_names = $this->input->post('package_name');
        $package_plans = $this->input->post('package_plan');
        $package_prices = $this->input->post('package_price');

        if($quotation_id && !empty($package_names)){
            foreach($package_names as $k => $pkg){
                $this->db->insert('users_quotations_items_tbls', [
                    'quotation_id' => $quotation_id,
                    'package_slug' => $pkg,
                    'package_plan' => $package_plans[$k],
                    'created_by' => $added_by,
                    'added_date' => $formattedDate, 
                    'package_price'=> $package_prices[$k]
                ]);
            }
        }

        $this->session->set_flashdata('success', 'Quotation saved successfully!');
        redirect('create-quotation'); // replace with your form route
    }


    // Show Specific Quotation
public function Show_Quotation_Informations() {
    if ($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes') {
        $data['title'] = "Customer Quotation";

        $quotation_id = $this->uri->segment(2);

        // Fetch client info
        $data['client_info'] = $this->QuotationModel->Specific_Quotation_Clients('quotations_tbls', $quotation_id);

        // Fetch all packages related to this quotation
        $data['packages'] = $this->QuotationModel->Get_All_Packages_For_Quotation($quotation_id);

        // Debug (for testing)
        // echo "<pre>";
        // print_r($data['packages']);
        // echo "</pre>";
        // exit; 

        $this->load->view('back/inc/header_view', $data);
        $this->load->view('back/quotation/quotation_information_view', $data);
        $this->load->view('back/inc/footer_view');
    } else {
        $this->session->set_flashdata('error', '❌ You do not have permission to access the dashboard.');
        redirect('owner-login');
    }
}


 public function Delete_Quotations(){
      
        // Check login & permission
        if($this->session->userdata('logged_in') && $this->session->userdata('login_permission') == 'yes'){
            $table_name = "quotations_tbls";

            if($this->MasterModel->Delete_Package( $table_name,$this->uri->segment(2))){
                $this->session->set_flashdata('success','✅ Quotation deleted successfully!');

            } else {
                $this->session->set_flashdata('error','❌ Failed to delete Quotation');
            }
            redirect('business-quotations');

            } else {
                $this->session->set_flashdata('error','❌ You do not have permission.');
                redirect('owner-login');
            }
    }









   




	





}
