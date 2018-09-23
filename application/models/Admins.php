<?php
require_once('Quickaccess.php');
class Admins extends Quickaccess
{
	public $name;
	private $password;
	protected $primary = 'username';
	protected $db_table = 'admins';
	protected $editable_fields = ['username','password'];	
	
	public function validate($username, $password){                         
		$query = $this->db->get($this->db_table);
		foreach ($query->result() as $admin)
		{
			$login_info = $admin->username;
			if($login_info === $username){
				if(password_verify($password, $admin->password)){										
					$this->admin_log_in($admin->username);					
				} else{
					$this->session->set_flashdata(["login_message" => "Username/Password combination is incorrect"]);
				}
			} else {
				$this->session->set_flashdata(["login_message" => "Username/Password combination is incorrect"]);
			}
		}
	}
	public function admin_log_in($username)
	{
		if ($username)
		{
			$this->session->set_userdata('admin_logged',true);			
			$this->session->set_userdata('username',$username);
			$redirect = $this->session->redirect != null ? $this->session->redirect : base_url('admin');
			redirect($redirect);
		}
	}
}
?>