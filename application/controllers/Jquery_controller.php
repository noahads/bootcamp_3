<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery_controller extends CI_Controller {

    function __construct() {
		parent::__construct();
		$this->load->model(array('jquery_model'));
	}

    public function index() {
        $this->load->view('jquery_view');
    }

    public function post_ajax() {
        $num1 = $this->input->post('num1');
        $num2 = $this->input->post('num2');
        $opt = $this->input->post('opt');

        $data['resultabc'] = $this->jquery_model->cal($num1, $num2, $opt);
        $this->load->view('load_ajax', $data);
    }

    public function database_view() {
        $this->load->view('db_view');
    }

    public function search() {
        $input_search = $this->input->post('src');

        /*$login = $this->session->userdata('usr');
        $segment = $this->uri->segment(4);
        $get = $_GET['parameter'];*/

        $gender = 1;
        $religion = '';

        $data['result'] = $this->jquery_model->search_database($input_search, $gender, $religion);

        $this->load->view('table', $data);
    }

    public function get_detail() {
        $pid = $this->input->post('pid');
        $result = $this->jquery_model->get_detail($pid);
        echo json_encode($result);
    }

}
?>