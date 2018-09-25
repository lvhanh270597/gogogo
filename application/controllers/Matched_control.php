<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matched_control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('layout');		
		$this->load->model('matched');
		$this->load->model('admin_model');
	}

	public function index() {
		
		if (!$this->session->userdata('admin_logged')){
			redirect('admin/login');
		}
		
		$matches = $this->matched->get_all2();
		$data = array(
			'matches' => $matches
		);
		display('matched_control', $data, true);
	}

	public function remove_matched($id){
		$this->matched->delete($id);
		redirect('matched_control');
	}
}
