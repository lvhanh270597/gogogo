<?php
require_once('Quickaccess.php');
class Admin_model extends Quickaccess
{
	public $name;
	private $password;
	protected $primary = 'username';
	protected $db_table = 'admins';
	protected $editable_fields = ['username','password'];	
	
	public function check($username, $password){
		$query = $this->db->get_where($this->db_table, array(
			'username' => $username,
			'password' => $password
		));
		if ($query->num_rows() == 0){
			return false;
		}
		return true;
	}
}
?>