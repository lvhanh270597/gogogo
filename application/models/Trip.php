<?php
require_once('Quickaccess.php');
class Trip extends Quickaccess
{

	public $username;
	public $first_name;
	public $last_name;
	private $password;
	public $gender;
	public $birthdate; 
	public $image;
	public $bio;
	protected $primary = 'id_boss';
	protected $db_table = 'trips';
	protected $editable_fields = ['_from','_to','note', 'timestart'];

	public function __construct()
	{
		parent::__construct();		
	}
	public function check(){
		$map = array(
			'_from' => 'Bạn chưa chọn vị trí bắt đầu',
			'_to' => 'Bạn chưa chọn vị trí kết thúc',			
			'note' => 'Hãy nói cho người đi chung biết bạn sẽ đợi họ bao nhiêu phút',
			'timestart' => 'Bạn sẽ đi lúc mấy giờ?'
		);
		foreach ($this->editable_fields as $field){
			if ($this->input->post($field) == null){
				return $map[$field];
			}
		}
		//------------------------ check more
		$from = $this->input->post('_from');
		$to = $this->input->post('_to');
		if ($from == $to){
			return 'Điểm đi và điểm đến không thể trùng nhau';
		}
		if ($from != 'KTX B' && $to != 'KTX B'){
			return 'Điểm đi hoặc điểm đến phải là KTX B';
		}
		//------------------------
		return null;
	}

	public function get_trip_from_boss($boss_id){
		$query = $this->db->get_where($this->db_table, array('id_boss' => $boss_id));
		$query = $query->result_array();
		if ($query == null) return null;
		return $query[0];
	}
}