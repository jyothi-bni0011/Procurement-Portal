<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

    public function index() {
        $data['message'] = "";
        $email=$this->input->post('useremail');
        if (count($_POST)) {
            $this->form_validation->set_rules('useremail', 'useremail', 'trim|required|max_length[50]');
            if ($this->form_validation->run()) {
                $where = [
                    'where' => array(
                        'email' => $email,
                        'status' => 1,
                    ),
                ];
                $result = $this->crud->readData('*', 'users', $where, '', '')->row();
                if (count($result)) {

                    $update_data = [
                        'status' => '2'
                    ];
                    $update = $this->crud->updateData('users', $update_data, $where);
                    if (count($this->crud->insert_id())) {
                        $mail_data=['user_details' => 'hai'];
                        $sendEmail = $this->sendmail->sendEmail(
                                array(
                                    'to' => array($email),
                                    'cc' => array('jyothi.m@' . SITE_DOMAIN),
                                    'bcc' => array(BCC_EMAIL),
                                    'subject' => 'forgot password',
                                    'data' => $mail_data,
                                    'template' => 'email-templates/forgot_password',
                                )
                        );
                    } else {
                        $data['message'] = $this->crud->error_message();
                    }
                } else {
                    $data['message'] = "Email not registerd,please try with valid email";
                }
//                echo $this->db->last_query();
            } else {
                $data['message'] = validation_errors();
            }
        }
        $this->load->view('forgot-password',$data);
    }

}
