<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_Model extends CI_Model {

    protected $table = 'package_leads';

    public function __construct() {
        parent::__construct();
    }

    // Insert package lead
    public function insert_lead($data) {
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            // return inserted ID
            return $this->db->insert_id(); 
        }
        return false;
    }
}
