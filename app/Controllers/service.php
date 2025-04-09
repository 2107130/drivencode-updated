<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Load the services page view
        $this->load->view('services_view');
    }
}
