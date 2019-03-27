<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function do_reset() {
        $data['user_id'] = $this->uri->segment(2);
        $data['reset_code'] = $this->uri->segment(3);
        $data['message'] = "";
        if (count($_POST)) {
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');
            $this->form_validation->set_rules('password', 'password', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|max_length[50]');
            if ($this->form_validation->run()) {
                if ($password != $confirm_password) {
                    $data['message'] = "new password & confirm passowrd should be same";
                } else {
                    $where = [
                        'where' => array(
                            'user_id' => base64_decode($data['user_id']),
                            'reset_password_link' =>$data['reset_code'],
                            'status' => 2,
                        ),
                    ];
                    $result = $this->crud->readData('*', 'users', $where, '', '')->row();
                    if (count($result)) {
                        $update_data=[
                            'password' =>md5($password),
                            'status' => 1,
                            'reset_password_link' =>'',
                            'password_requested_at'=>'',
                            'updated_at'=>DATE,
                        ];
                        $update=$this->crud->updateData('users',$update_data,array('user_id'=>base64_decode($data['user_id'])));
                        if (count($this->crud->insert_id())) {
                             $data['message'] = "password updated succesfully";
                             redirect(base_url('login'));
                        }
                        else{
                            $data['message'] = $this->crud->error_message();
                        }
                    } else {
                        print_r($this->db->last_query());
                        $data['message'] = "reset password link seems to be not valid,try again";
                    }
                }
            } else {
                $data['message'] = validation_errors();
            }
        }
        $this->load->view('reset-password', $data);

    }

}
