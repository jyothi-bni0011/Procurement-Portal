<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bussines_requesters extends CI_Controller {

    public function index() {
        $data['users_list'] = $this->crud->readdata('*', 'users', array('status' => 1))->result_array();
        $this->load->view('Admin/business-requesters',$data);
    }

    public function create() {
        $session_data = $this->session->userdata();
        $data['message'] = "";
        if (count($_POST)) {
            $this->form_validation->set_rules('username', 'username', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('email', 'useremail', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('job_title', 'job title', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('functional_area', 'functional area', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('region', 'region', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('site', 'site', 'trim|required|max_length[50]');
            if ($this->form_validation->run()) {
                $email = $this->input->post('email');
                $where = [
                    'where' => array(
                        'email' => $email,
                    ),
                ];
                $result = $this->crud->readData('*', 'users', $where, '', '')->row();
                if (count($result)) {
                    $data['message'] = "Email alredy exists,please try with other valid email";
                } else {
                    $rand_pwd= my_random_string(6);
                    $insert_data = [
                        'user_code' => "BR_" . my_random_string(4, $this->input->post('username')),
                        'role_id' => 2,
                        'user_name' => $this->input->post('username'),
                        'email' => $email,
                        'region_id' => $this->input->post('region'),
                        'site_id' => $this->input->post('site'),
                        'job_title_id' => $this->input->post('job_title'),
                        'functional_area_id' => $this->input->post('functional_area'),
                        'password' => md5($rand_pwd),
                        'created_at' => DATE,
                        'status' => 1,
                    ];
                    $insert = $this->crud->createData('users', $insert_data);
                    if (count($this->crud->insert_id())) {
                        $mail_data = [
                            'link' => base_url() . 'login',
                            'creater_name' => $session_data['username'],
                            'creater_role' => "ADMIN",
                            'user_name' => $this->input->post('username'),
                            'password'=>$rand_pwd,
                        ];
                        $sendEmail = $this->sendmail->sendEmail(
                                array(
                                    'to' => array($email),
                                    'cc' => array('jyothi.m@' . SITE_DOMAIN),
                                    'bcc' => array(BCC_EMAIL),
                                    'subject' => 'BUSSINESS REQUESTER CREATION',
                                    'data' => $mail_data,
                                    'template' => 'email-templates/create-user',
                                )
                        );
                        if ($sendEmail['code'] == 1) {
                            $data['message'] = "Bussiness requester added succesfully & mail sent succefully to him";
                        } else {
                            $data['message'] = "mail not sent,please check smtp settings";
                        }
                        
                    } else {
                        $data['message'] = $this->crud->error_message();
                    }
                }
            } else {
                $data['message'] = validation_errors();
//                $this->session->set_flashdata('error_message',validation_errors());
            }
        }
        $this->load->view('Admin/create-business-requesters',$data);
    }

}
