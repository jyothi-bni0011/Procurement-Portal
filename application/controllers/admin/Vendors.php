<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller {

    public function index() {
//        print_r($this->session->userdata());exit;
        $this->load->view('Admin/vendors');
    }

    public function create() {
        $this->load->view('Admin/create-vendors');
    }

}
