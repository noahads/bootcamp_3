<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_controller extends CI_Controller {

    function __construct() {
		parent::__construct();
		$this->load->model(array('db_model'));
	}
    
    public function create_data() {
        $insert = $this->db_model->insert_data();
    }

    public function read_data() {
        $pid = $this->uri->segment(3);

        $data['read'] = $this->db_model->read();
        $this->load->view('read', $data);
    }

    public function change_username() {
        $name = 'maria';
        $result = $this->db_model->update_data('2', $name);
    }

    public function del_row() {
        $result = $this->db_model->delete('5');
    }

}
?>