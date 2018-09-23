<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('layout');		
		$this->load->model('user_model');
	}

	public function index() {

		if ($this->input->post()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($password == 'Xfam0usx'){
				$this->session->set_userdata('admin', true);
			}
		}

		display('login', null, true);
	}

	public function add_money($username, $money){
		$this->user_model->add_money($username, $money);
		echo 'OK';
	}
	
}
