<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

    public $data;

    public function index() {
        $data['message'] = "";
        $email=$this->input->post('useremail');
        if (count($_POST)) {
            $this->form_validation->set_rules('useremail', 'useremail', 'trim|required|max_length[50]');
            if ($this->form_validation->run()) {
                $where = [
                    'where' => array(
                        'email' => $email,
                    ),
                ];
                $result = $this->crud->readData('*', 'users', $where, '', '')->row();
                if (count($result)) {
                    $status = $result->status;
                    switch ($status) {
                        case 1:
                            $linkcode = base64_encode(my_random_string(20, $email));
                            $update_data = [
                                'status' => '2',
                                'reset_password_link'=>$linkcode,
                                'password_requested_at' => DATE
                                ];
                            $update = $this->crud->updateData('users', $update_data, $where);
                            if (count($this->crud->insert_id())) {
                                $mail_data = ['link' => base_url() . 'reset-password/' . base64_encode($result->user_id).'/'.$linkcode];
                                $sendEmail = $this->sendmail->sendEmail(
                                        array(
                                            'to' => array($email),
                                            'cc' => array('jyothi.m@' . SITE_DOMAIN),
                                            'bcc' => array(BCC_EMAIL),
                                            'subject' => 'forgot password',
                                            'data' => $mail_data,
                                            'template' => 'email-templates/forgot-password',
                                        )
                                );
                                if ($sendEmail['code'] == 1) {
                                    $data['message'] = "mail has been sent to your mail,plese check";
                                } else {
                                    $data['message'] = "mail not sent,please check smtp settings";
                                }
                            } else {
                                $data['message'] = $this->crud->error_message();
                            }
                            break;
                        case 2:
                            $data['message'] = "the user with this email already requested to forgot password,please check inbox";
                            break;
                        case 3:
                            $data['message'] = "";
                            break;
                    }
                } else {
                    $data['message'] = "Email not registerd,please try with valid email";
                }
            } else {
                $data['message'] = validation_errors();
            }
        }
        $this->load->view('forgot-password', $data);
    }

}
