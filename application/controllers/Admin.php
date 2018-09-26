<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		redirect('user_control');
	}

	public function login(){
		if ($username = $this->input->post('username')){
			$password = $this->input->post('password');
			if ($this->admin_model->check($username, $password)){
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('admin_logged', true);
				redirect('admin') ;
			}
		}
		display('admin_login', null, true);
	}

	public function create($username, $password){
		if (!$this->session->userdata('admin_logged')) {
			redirect('admin/login');
		}
		$this->admin_model->add_into(array(
			'username' => $username,
			'password' => $password
		));
		echo 'OK';
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	} 	

	public function prices(){
		$address = array(
            'ĐH Nông Lâm' => 3,                        
            'ĐH Nhân Văn' => 3,     
            'ĐH Công Nghệ Thông Tin' => 4,       
            'ĐH Khoa Học Tự Nhiên' => 3,
            'ĐH Quốc Tế' => 2,
            'ĐH Bách Khoa' => 3,
            'ĐH Kinh Tế - Luật' => 5,
		);  
		$data = array('prices' => $address);
		display('prices', $data, true);
	}

	public function verify_code($code){
		$username
	}

}
