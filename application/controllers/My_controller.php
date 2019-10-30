<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('my_model'));
	}

	public function index() {
		echo time();
		echo '<br/>';
		echo date('d-m Y F/D-Y h:i:s', 1572333365);
	}

	public function form(){
		$num1 = $this->input->post('angka1');
		$op = $this->input->post('operasi');
		$num2 = $this->input->post('angka2');
		$data['model'] = $this->my_model->kalkulator($num1, $op, $num2);
		$this->load->view('form', $data);
	}
}
?>