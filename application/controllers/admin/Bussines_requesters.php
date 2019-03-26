<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bussines_requesters extends CI_Controller {

    public function index() {
//        print_r($this->session->userdata());exit;
        $this->load->view('Admin/business-requesters');
    }

}
