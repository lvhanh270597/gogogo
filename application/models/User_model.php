<?php
require_once('Quickaccess.php');
class User_model extends Quickaccess
{

	public $username;
	public $first_name;
	public $last_name;
	private $password;
	public $gender;
	public $birthdate; 
	public $image;
	public $bio;
	protected $primary = 'username';
	protected $db_table = 'users';
	protected $personal_info = ['full_name'];
	protected $editable_fields = ['username','full_name','password','facebook', 'phone_num'];

	public function __construct()
	{
		parent::__construct();		
	}
//get a customer's info with an address
	public function get_user_info($username){
		//get a customer's personal info
		if(($user = $this->get_by_id($username))){
			//get a customer's address if exists
			$address = $this->get_address($username);
			if(!empty($address)) $user = array_merge($user,$address);
			unset($user['password']);
			return $user;
		}
	}
//get a customer's address
	public function get_address($username){
		$query = $this->db->get_where('address',['user_id' => $username],1);
		if($query->num_rows() > 0){
			$result = $query->result()[0];
			$address_object = get_object_vars($result);
			return $address_object;
		} 
		return array('room' => '', 'building' => '', 'phone_num' => '');
	}

	//validate customer or admin login
	public function validate($username, $password){                         
		$query = $this->db->get($this->db_table);
		foreach ($query->result() as $user)
		{
			$login_info = $user->username;
			if($login_info === $username){
				if(password_verify($password, $user->password)){										
					$this->user_log_in($user->username);					
				} else{
					$this->session->set_flashdata(["login_message" => "Username/Password combination is incorrect"]);
				}
			} else {
				$this->session->set_flashdata(["login_message" => "Username/Password combination is incorrect"]);
			}
		}
	}
	public function user_log_in($username){
		if ($username){
			$this->session->set_userdata('user_logged',true);			
			$this->session->set_userdata('username',$username);						
			$customer = $this->user_model->get_by_id($username);
			foreach ($this->users->personal_info as $info_field) {
				$user[$info_field] = $customer[$info_field]; 
				$this->session->set_userdata($user);
			}			
			//set_cookie('locale',$customer['locale'],60*60*24*2);			
			$redirect = $this->session->redirect != null ? $this->session->redirect : base_url();
			redirect($redirect);
		}
	}

	public function set_attr($userid, $index, $value){
		$query = $this->get_by_id($userid);
		$query[$index] = $value;
		$this->db->where('username', $userid)->update('users', $query);
	}

	public function add_money($userid, $money){		
		$query = $this->get_by_id($userid);
		$query['balance'] += $money;
		$this->db->where('username', $userid)->update('users', $query);		
	}
	

	public function check(){
		$error = array(
			'username' => 'Bạn phải nhập Username',
			'full_name' => 'Bạn phải nhập Tên đầy đủ',
			'password' => 'Bạn phải nhập Mật khẩu',
			'facebook' => 'Bạn phải nhập Địa chỉ Facebook',
			'phone_num' => 'Bạn phải nhập Số điện thoại'
		);
		foreach ($this->editable_fields as $field){
			if ($this->input->post($field) == null){
				return $error[$field];
			}
		}
		$user = $this->get_by_id($this->input->post('username'));
		if ($user != null){
			return 'Tên '.$this->input->post('username').' đã tồn tại.';
		}
		return null;
	}
}