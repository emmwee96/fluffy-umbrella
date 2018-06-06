<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->page_data = array();
    }

    public function index() {
        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/client/all");
        $this->load->view("admin/footer");
    }

}
