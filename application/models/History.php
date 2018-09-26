<?php
require_once('Quickaccess.php');
class History extends Quickaccess
{

	public $username;
	public $first_name;
	public $last_name;
	private $password;
	public $gender;
	public $birthdate; 
	public $image;
	public $bio;
	protected $primary = 'id';
	protected $db_table = 'history';
	protected $editable_fields = ['id_boss','id_guess'];

	public function __construct()
	{
		parent::__construct();		
	}	
	public function get_by_trip($tripid){
		$query = $this->db->get_where($this->db_table, array('id_boss' => $tripid));		
		if ($query->num_rows() == 0) return null;		
		return $query->result_array()[0];
	}

	public function get_matched_from_guess($guess){
		$query = $this->db->get_where($this->db_table, array('id_guess' => $guess));
		if ($query->num_rows() == 0) return null;
		return $query->result_array()[0];
	}
}