<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $data['message'] = "";
        if (count($_POST)) {
            $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('role', 'User Role', 'trim|required|numeric');
            if ($this->form_validation->run()) {
                $where = [
                    'where' => array(
                        'password' => md5($this->input->post('password')),
                        'role_id' => $this->input->post('role'),
                        'status' => 1,
                        'user_name' => $this->input->post('username'),
                    ),
                    'or_where' => array(
                        'email' => $this->input->post('username')
                    ),
                ];
                $result = $this->crud->readData('*', 'users', $where, '', '')->row();
                if (count($result)) {
                    $session_data = array(
                        'user_id' => $result->user_id,
                        'username' => $result->user_name,
                        'full_name' => sprintf('%s %s %s', $result->first_name, $result->middle_name, $result->last_name),
                        'email_id' => $result->email,
                        'status' => $result->status,
                        'role_id' => $result->role_id,
                        'login_time' => date('Y-m-d H:i:s')
                    );
                    $this->session->set_userdata($session_data);
                    $log_data = ['user_id' => $result->user_id,
                        'history' => 'login',
                        'ip_address' => $_SERVER['REMOTE_ADDR'],
                        'time_zone' => date_default_timezone_get(),
                    ];
                    $insert_log = $this->crud->createData('user_logs', $log_data);
                    if (count($this->crud->insert_id())) {
                        switch ($result->role_id) {
                            case 1:
                                redirect(base_url('admin/dashboard'));
                                break;
                            case 2:
                                redirect(base_url('admin/dashboard'));
                                break;
                            case 3:
                                redirect(base_url('admin/dashboard'));
                                break;
                        }
                    } else {
                        $data['message'] = "something went wrong";
                    }
                } else {
                    $data['message'] = "Invalid credentials,please try again";
                }
//                echo $this->db->last_query();
            } else {
                $data['message'] = validation_errors();
            }
        }

        $this->load->view('login', $data);
    }
   public function logout(){
       $this->session->sess_destroy('userdata');
       redirect(base_url().'login');
   }

}
