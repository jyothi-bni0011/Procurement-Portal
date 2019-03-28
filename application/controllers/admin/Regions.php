<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regions extends CI_Controller {

    public function index() {
        $data['msg_class'] = $data['msg'] = "";
        $data['regions_list'] = $this->crud->readdata('*', 'regions', array('status' => 1))->result_array();
//        print_r($data['regions_list']);exit;
        $this->load->view('Admin/regions', $data);
    }

    public function create() {
        $session_data = $this->session->userdata();
        $data['msg_class'] = $data['msg'] = "";
        if (count($_POST)) {
            $this->form_validation->set_rules('region_name', 'region_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_name', 'owner_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_email', 'owner_email', 'trim|required|max_length[50]');

            if ($this->form_validation->run()) {
                $email = $this->input->post('owner_email');
                $where = [
                    'where' => array(
                        'region_owner_email' => $email,
                    ),
                ];
                $result = $this->crud->readData('*', 'regions', $where, '', '')->row();
                if (count($result)) {
                    $data['msg_class'] = "alert alert-danger";
                    $data['msg'] = "Owner Email alredy exists,please try with other valid email";
                    $this->session->set_flashdata('message', $data['msg']);
                } else {
                    $rand_code = "REG_" . strtoupper(my_random_string(4, $this->input->post('username')));
                    $insert_data = [
                        'region_code' => $rand_code,
                        'region_name' => $this->input->post('region_name'),
                        'region_owner' => $this->input->post('owner_name'),
                        'region_owner_email' => $this->input->post('owner_email'),
                        'created_at' => DATE,
                        'status' => 1,
                    ];
                    $insert = $this->crud->createData('regions', $insert_data);
                    if (count($this->crud->insert_id())) {
                        $data['msg_class'] = "alert alert-success";
                        $data['msg'] = "region added succesfully";
                        $this->session->set_flashdata('message', $data['msg']);
                        redirect(base_url() . 'admin/Regions');
                    } else {
                        $data['message'] = $this->crud->error_message();
                    }
                }
            } else {
                $data['message'] = validation_errors();
                $this->session->set_flashdata('message', validation_errors());
            }
        }
        $this->load->view('Admin/create-region', $data);
    }

    public function edit() {
        $data['msg_class'] = $data['msg'] = "";
        $region_id = base64_decode($this->uri->segment(4));
        $data['regions_row'] = $this->crud->readdata('*', 'regions', array('region_id' => $region_id, 'status' => 1))->result_array();
        if (count($_POST)) {
            $this->form_validation->set_rules('region_name', 'region_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_name', 'owner_name', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('owner_email', 'owner_email', 'trim|required|max_length[50]');

            if ($this->form_validation->run()) {
                $email = $this->input->post('owner_email');
                $where = [
                    'where_not_in' => array(
                        'region_owner_email' => $data['regions_row'][0]['region_owner_email'],
                        'region_name' => $data['regions_row'][0]['region_name'],
                    ),
                    'where' => array(
                        'region_owner_email' => $email,
                    ),
                    'or_where' => array(
                        'region_name' => $this->input->post('region_name'),
                    )
                ];
                $result = $this->crud->readData('*', 'regions', $where, '', '')->row();
//                echo $this->db->last_query();exit;
                if (count($result)) {
                    $data['msg_class'] = "alert alert-danger";
                    $data['msg'] = "Deatails alredy exists,please try with differant email id or region name";
                    $this->session->set_flashdata('message', $data['msg']);
                } else {
                    $update_data = [
                        'region_name' => $this->input->post('region_name'),
                        'region_owner' => $this->input->post('owner_name'),
                        'region_owner_email' => $this->input->post('owner_email'),
                        'updated_at' => DATE,
                        'status' => 1,
                    ];
                    $insert = $this->crud->updatedata('regions', $update_data, array('region_id' => $region_id));
                    if (count($this->crud->insert_id())) {
                        $data['msg_class'] = "alert alert-success";
                        $data['msg'] = "region updated succesfully";
                        $this->session->set_flashdata('message', $data['msg']);
                        redirect(base_url() . 'admin/Regions');
                    } else {
                        $data['message'] = $this->crud->error_message();
                    }
                }
            } else {
                $data['message'] = validation_errors();
                $this->session->set_flashdata('message', validation_errors());
            }
        }
        $this->load->view('Admin/edit-region', $data);
    }

    public function delete() {
        $data['msg_class'] = $data['msg'] = "";
        $region_id = base64_decode($this->uri->segment(4));
        echo $region_id;exit;
        $delete = $this->crud->deleteData('regions', array('region_id' => $region_id, 'status' => 1));
//        echo $this->db->last_query();exit;
        if (count($this->crud->insert_id())) {
            $data['msg_class'] = "alert alert-success";
            $data['msg'] = "Region deleted succesfully";
            $this->session->set_flashdata('message', $data['msg']);
            redirect(base_url() . 'admin/Regions');
        } else {
            $data['message'] = $this->crud->error_message();
        }
        $this->load->view('Admin/Regions', $data);
    }

}
