<?php
class Service_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_services() {
        $query = $this->db->get('services');
        return $query->result();
    }
}
