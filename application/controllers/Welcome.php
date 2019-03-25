<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * @author		Sivajyothi Maradapu
     * @copyright	Copyright (c) 2019 Sivajyothi (https://github.com)
     * @package		FaqZul/CodeIgniter-CRUD-Model
     * @subpackage	Models
     * @version		3.1.0
     */
    public $page = '';

    public function index() {
        $this->load->view('welcome_message');
    }

    /* database operations start
     * @author sivajyothi maradapu
     * @created on 13/03/2019 
     * @modified on 14/03/2019
     * @modified by sivajyothi maradapu        
     */

    public function add() {
        $data = array(
            'admin_email' => 'jyothi@gmail.com',
            'admin_name' => 'jyothi'
        );
        $a = $this->crud->createData('admin_tbl', $data, TRUE);
        if ($a['message'] === '') {
            // Success inserting data.
            $profile = array(
                'item_id' => $a['insert_id'], // it's the same $this->crud->insert_id().
                'cart_session_id' => 'jyothi@gmail.com'
            );
            $this->crud->createData('cart_tbl', $profile); // Without callback.
            $id = $this->crud->insert_id();    // Without callback, You can also get insert_id as well.
            exit;
            redirect("profile?id=$id");
        } else {
            // Fail inserting data.
            echo var_dump($a);
        }
    }

    /* Example for insert batch */

    public function insert_batch() {
        $datas = array();
        for ($i = 0; $i < 2; $i++) {
            $data["admin_email"] = "jyothi$i@gmail.com";
            $data["admin_name"] = "jyothi$i";
            array_push($datas, $data);
        }
        $a = $this->crud->createData('admin_tbl', $datas);
        /* For get insert_id in every data, please use method insert_ids() */
        echo var_dump($this->crud->insert_ids());
    }

    public function lists($page = 0) {
        $a = $this->crud->readData('*', 'admin_tbl')->result();
        // This method returns the query result as an array of objects, or an empty array on failure. Typically you’ll use this in a foreach loop.
        // Executes: SELECT * FROM users

        $where = array('admin_name' => 'FaqZul');
        $b = $this->crud->readData('*', 'admin_tbl', $where)->row();
        // This method returns a single result row. If your query has more than one row, it returns only the first row. The result is returned as an object.
        // Executes: SELECT * FROM users WHERE username = 'FaqZul'
        $join = array('cart_tbl' => 'cart_tbl.item_id = admin_tbl.admin_id');
        //Default JOIN (escape FALSE) array('table' => 'condition')
        //LEFT JOIN (escape FALSE) array('left' => array('table' => 'condition'))
        $where = array('or_like' => array('admin_name' => 'jyoth'), 'where' => array('admin_email' => 'jyothi1@gmail.com'));
        $c = $this->crud->readData('*', 'admin_tbl', $where, '', '', 'admin_tbl.admin_id DESC', array(10, $page * 10))->result_array();
        print_r($c);
        exit;

        // This method returns the query result as a pure array, or an empty array when no result is produced. Typically you’ll use this in a foreach loop.
        // Executes: SELECT * FROM users JOIN user_profiles ON users.id = user_profiles.user_id WHERE username != 'FaqZul' ORDER BY users.id DESC LIMIT 10
    }

    public function search($q = '') {
        /* You can use more specific LIKE queries. */
        $like = array(array('like' => array('user_name' => $q)), 'or_like' => array('user_email' => $q));
        /* Or You can use it. */
        $like = array('or_like' => array('user_name' => $q, 'user_email' => $q));
        // Executes: WHERE user_name LIKE '%$q%' OR user_email LIKE '%$q%'
        $a = $this->crud->readData('*', 'users', $like)->result_array();
        echo json_encode($a);
    }

    public function edit($id = 0) {
        $data = array('link' => 'https://github.com/FaqZul/CodeIgniter-CRUD-Model');
        echo ($this->crud->updateData('user_profiles', $data, array('user_id' => $id))) ? 'Success updating data.' : $this->crud->error_message();
    }

    public function delete($id = 0) {
        if ($this->crud->deleteData('users', array('id' => $id))) {
            // Success deleting data.
            $this->crud->deleteData('user_profiles', array('user_id' => $id));
        } else {
            // Fail deleting data.
            echo var_dump($this->crud->error());
        }
    }

    /* database operations end */
    /* sendmail operations start
     * @author sivajyothi maradapu
     * @created on 14/03/2019 
     * @modified on 14/03/2019
     * @modified by sivajyothi maradapu        
     */

    public function sendmail() {
        $email = 'jyothi.m@bluenettech.com';
        $sendEmail = $this->sendmail->sendEmail(
                array(
                    'to' => array($email),
                    'cc' => array('jyothi.m@' . SITE_DOMAIN),
                    'bcc' => array(BCC_EMAIL),
                    'subject' => 'Test - mail',
                    'data' => array('user_details' => 'hai'),
                    'template' => 'welcome_message',
                )
        );
        print_r($sendEmail);
    }

    /* import excel to db start
     * @author sivajyothi maradapu
     * @created on 20/03/2019 
     * @modified on 20/03/2019
     * @modified by sivajyothi maradapu        
     */

    public function import_excel() {
        $this->load->library('Spreadsheet_Excel_Reader');
        $excel = new Spreadsheet_Excel_Reader();

       $excel->read('uploads/excel/sample.xls'); // set the excel file name here   
		$data['data_excell']=$excel->sheets[0]['cells'];
        print_r($data['data_excell']);
    }

    

}
