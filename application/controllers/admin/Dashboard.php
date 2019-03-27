<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
//        print_r($this->session->userdata());exit;
        $this->load->view('Admin/index');
    }
    

}
