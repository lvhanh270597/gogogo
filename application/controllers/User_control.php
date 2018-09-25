<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('layout');		
		$this->load->model('user_model');
		$this->load->model('admin_model');
	}

	public function index() {		
		if (!$this->session->userdata('admin_logged')){
			redirect('admin/login');
		}		
		$users = $this->user_model->get_all2();
		$data = array(
			'users' => $users
		);
		display('user_control', $data, true);
	}

	public function set_zero_money($username){
		$this->user_model->set_attr($username, 'balance', 0);
		redirect('user_control');
	}

	public function remove_user($username){
		$this->user_model->delete($username);
		redirect('user_control');
	}

	public function add_money($username, $money){
		$this->user_model->add_money($username, $money);
		echo 'OK';
	}
	
}
