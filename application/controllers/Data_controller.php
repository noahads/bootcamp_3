<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_controller extends CI_Controller {

    function __construct() {
		parent::__construct();
		$this->load->model(array('db_model'));
	}

    public function add_data() {
        $data['result'] = $this->db_model->insert_data();
        $this->load->view('add_data');
    }

}
?>