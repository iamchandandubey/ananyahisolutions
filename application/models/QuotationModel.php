<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuotationModel extends CI_Model {


    public function Get_All_Quotations($table_name) {
        // Return an array of objects
        return $this->db->order_by('id', 'DESC')->get($table_name)->result();
    }

    public function Get_Package_Price($slug, $plan) {
        $this->db->select('package_price, package_full_details');
        $this->db->from('package_list_tbls');
        $this->db->where('package_parent_slug', $slug);
        $this->db->where('package_type_slug', $plan);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row(); // return as object
        } else {
            return false;
        }
    }


    public function Specific_Quotation_Clients($table_name,$id) {
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row(); // return as object
        } else {
            return false;
        }
    }

    // public function Specific_Quotation_Clients($table_name,$id) {
    //     $this->db->select('*');
    //     $this->db->from($table_name);
    //     $this->db->where('quotation_id', $id);
    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->row(); // return as object
    //     } else {
    //         return false;
    //     }
    // }

     // ✅ Fetch specific quotation item info
    // public function Specific_Quotation_Info($table_name, $id) {
    //     $this->db->select('*');
    //     $this->db->from($table_name);
    //     $this->db->where('quotation_id', $id);
    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->row();
    //     } else {
    //         return false;
    //     }
    // }


    // public function Get_Package_Details($package_slug, $package_plan) {
    //     $this->db->select('*');
    //     $this->db->from('package_list_tbls');
    //     $this->db->where('package_parent_slug', $package_slug);
    //     $this->db->where('package_type_slug', $package_plan);
    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->row();
    //     } else {
    //         return false;
    //     }
    // }

    public function Get_All_Packages_For_Quotation($quotation_id) {
    $this->db->select('uq.*, p.package_parent_slug, p.package_type_slug, p.package_price, p.package_full_details, m.heading');
    $this->db->from('users_quotations_items_tbls uq');
    $this->db->join('package_list_tbls p', 'uq.package_slug = p.package_parent_slug AND uq.package_plan = p.package_type_slug', 'left');
    $this->db->join('package_tbls m', 'p.package_parent_slug = m.slug', 'left');
    $this->db->where('uq.quotation_id', $quotation_id);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->result(); // return all packages
    } else {
        return [];
    }
}



    
}
