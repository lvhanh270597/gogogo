<?php
require_once('Quickaccess.php');
class Matched extends Quickaccess
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
	protected $db_table = 'matched';
	protected $editable_fields = ['id_boss','id_guess'];

	public function __construct()
	{
		parent::__construct();		
	}	
	public function get_by_trip($tripid){
		$query = $this->db->get_where($this->db_table, array('trip_id' => $tripid));
		if ($query == null) return null;
		return $query->result_array()[0];
	}

	public function get_matched_from_guess($guess){
		$query = $this->db->get_where($this->db_table, array('id_guess' => $guess));
		if ($query == null) return null;
		return $query->result_array()[0];
	}
}