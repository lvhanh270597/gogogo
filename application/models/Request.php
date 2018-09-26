<?php
require_once('Quickaccess.php');
class Request extends Quickaccess
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
	protected $db_table = 'request';
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
		if ($query == null) return null;
		return $query->result_array()[0];
    }
    
    public function delete_all_request($boss){
        $this->db->delete($this->db_table, array('id_boss' => $boss));
	}
	
	public function delete_all_request_guess($guess){
		$this->db->delete($this->db_table, array('id_guess' => $guess));
	}

    public function remove_requests($boss, $guess){
        $this->db->delete($this->db_table, array(
            'id_boss' => $boss,
            'id_guess' => $guess
        ));
    }
}