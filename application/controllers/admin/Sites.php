<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

    public function index() {
        $data['msg_class'] = $data['msg'] = "";
        $join = array('left'=>array('regions' => 'regions.region_id = sites.region_id'));
        $data['site_list'] = $this->crud->readdata('sites.*,regions.region_name', 'sites', array('sites.status' => 1),$join)->result_array();
//                echo $this->db->last_query();exit;

//        print_r($data['site_list']);exit;
        $this->load->view('Admin/sites', $data);
    }

    public function create() {
        $session_data = $this->session->userdata();
        $data['msg_class'] = $data['msg'] = "";
        $data['region_list'] = $this->crud->readdata('*', 'regions', array('status' => 1))->result_array();
        if (count($_POST)) {
            $this->form_validation->set_rules('site_name', 'site_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_name', 'owner_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_email', 'owner_email', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('region', 'region', 'trim|required|max_length[50]');

            if ($this->form_validation->run()) {
                $email = $this->input->post('owner_email');
                $where = [
                    'where' => array(
                        'site_owner_email' => $email,
                    ),
                ];
                $result = $this->crud->readData('*', 'sites', $where, '', '')->row();
                if (count($result)) {
                    $data['msg_class'] = "alert alert-danger";
                    $data['msg'] = "Owner Email alredy exists,please try with other valid email";
                    $this->session->set_flashdata('message', $data['msg']);
                } else {
                    $rand_code = "SITE_" . strtoupper(my_random_string(4, $this->input->post('username')));
                    $insert_data = [
                        'site_code' => $rand_code,
                        'site_name' => $this->input->post('site_name'),
                        'site_owner' => $this->input->post('owner_name'),
                        'site_owner_email' => $this->input->post('owner_email'),
                        'region_id' => $this->input->post('region'),
                        'created_at' => DATE,
                        'status' => 1,
                    ];
                    $insert = $this->crud->createData('sites', $insert_data);
                    if (count($this->crud->insert_id())) {
                        $data['msg_class'] = "alert alert-success";
                        $data['msg'] = "site added succesfully";
                        $this->session->set_flashdata('message', $data['msg']);
                        redirect(base_url() . 'admin/sites');
                    } else {
                        $data['message'] = $this->crud->error_message();
                    }
                }
            } else {
                $data['message'] = validation_errors();
                $this->session->set_flashdata('message', validation_errors());
            }
        }
        $this->load->view('Admin/create-site', $data);
    }

    public function edit() {
        $data['msg_class'] = $data['msg'] = "";
        $site_id = base64_decode($this->uri->segment(4));
        $data['region_list'] = $this->crud->readdata('*', 'regions', array('status' => 1))->result_array();
        $data['sites_row'] = $this->crud->readdata('*', 'sites', array('site_id' => $site_id, 'status' => 1))->result_array();
        if (count($_POST)) {
            $this->form_validation->set_rules('site_name', 'site_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_name', 'owner_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_email', 'owner_email', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('region', 'region', 'trim|required|max_length[50]');

            if ($this->form_validation->run()) {
                $email = $this->input->post('owner_email');
                $where = [
                    'where_not_in' => array(
                        'site_owner_email' => $data['sites_row'][0]['site_owner_email'],
                        'site_name' => $data['sites_row'][0]['site_name'],
                    ),
                    'where' => array(
                        'site_owner_email' => $email,
                    ),
                    'or_where' => array(
                        'site_name' => $this->input->post('site_name'),
                    )
                ];
                $result = $this->crud->readData('*', 'sites', $where, '', '')->row();
//                echo $this->db->last_query();exit;
                if (count($result)) {
                    $data['msg_class'] = "alert alert-danger";
                    $data['msg'] = "Deatails alredy exists,please try with differant email id or site name";
                    $this->session->set_flashdata('message', $data['msg']);
                } else {
                    $update_data = [
                        'site_name' => $this->input->post('site_name'),
                        'site_owner' => $this->input->post('owner_name'),
                        'site_owner_email' => $this->input->post('owner_email'),
                        'updated_at' => DATE,
                        'status' => 1,
                    ];
                    $insert = $this->crud->updatedata('sites', $update_data, array('site_id' => $site_id));
                    if (count($this->crud->insert_id())) {
                        $data['msg_class'] = "alert alert-success";
                        $data['msg'] = "site updated succesfully";
                        $this->session->set_flashdata('message', $data['msg']);
                        redirect(base_url() . 'admin/sites');
                    } else {
                        $data['message'] = $this->crud->error_message();
                    }
                }
            } else {
                $data['message'] = validation_errors();
                $this->session->set_flashdata('message', validation_errors());
            }
        }
        $this->load->view('Admin/edit-site', $data);
    }

    public function delete() {
        $data['msg_class'] = $data['msg'] = "";
        $site_id = base64_decode($this->uri->segment(4));
        $delete = $this->crud->deleteData('sites', array('site_id' => $site_id, 'status' => 1));
//        echo $this->db->last_query();exit;
        if (count($this->crud->insert_id())) {
            $data['msg_class'] = "alert alert-success";
            $data['msg'] = "Site deleted succesfully";
            $this->session->set_flashdata('message', $data['msg']);
            redirect(base_url() . 'admin/sites');
        } else {
            $data['message'] = $this->crud->error_message();
        }
        $this->load->view('Admin/sites', $data);
    }

}
