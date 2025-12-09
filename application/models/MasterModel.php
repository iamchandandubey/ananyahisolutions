<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterModel extends CI_Model {

    //Insert Data
    public function Insert_Package( $table_name, $data) {
        return $this->db->insert($table_name, $data);
    }
    
    //Show All Data
     public function Get_All_Packages($table_name) {
       return $this->db->order_by('id', 'DESC')->get($table_name);
    }

    //Show data by id for update form
    public function getDataById($table_name,$id){
        return $this->db->where('id', $id)->get($table_name)->row();
    }

    //Update Data
    public function updateData($table, $data, $id)
    {
        return $this->db->where('id', $id)->update($table, $data);
    }

    public function Delete_Package($table_name,$id){
        return $this->db->delete($table_name, ['id' => $id]);
    }

    // public function Get_All_Packages_Paginated($table_name, $limit, $start){
    //     $this->db->order_by('id', 'DESC');
    //     $query = $this->db->get($table_name, $limit, $start);
    //     return $query;
    // }


    //Get all specific table columns informations
    public function Get_All_Packages_Names($table_name,$select_table_columns,$order_by_field_name,$order_by){
        $this->db->order_by($order_by_field_name,$order_by);
        $this->db->select( $select_table_columns);
        $this->db->from($table_name); 
        $query = $this->db->get();
        return $query;
    }

   

}
