<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trip_control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('layout');		
		$this->load->model('trip');
		$this->load->model('admin_model');
	}

	public function index() {
		
		if (!$this->session->userdata('admin_logged')){
			redirect('admin/login');
		}
		
		$trips = $this->trip->get_all2();
		$data = array(
			'trips' => $trips
		);
		display('trip_control', $data, true);
	}

	public function remove_trip($id){
		$this->trip->delete($id);
		redirect('trip_control');
	}
}
