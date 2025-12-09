<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    private $table = 'login_tbls';

    public function Check_User($email) {
        return $this->db->where('email_id', $email)->get($this->table)->row_array();
    }


     // Fetch all users - One time work for MySQL plain enter password to encrypted form
    public function Get_All_Users() {
        return $this->db->get($this->table)->result();
    }

    // Update user password
    public function Update_Password($user_id, $hashed_password) {
        $this->db->where('id', $user_id);
        return $this->db->update($this->table, ['password' => $hashed_password]);
    }



    
}
