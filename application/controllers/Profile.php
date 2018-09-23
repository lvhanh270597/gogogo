<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('user_model');
		$this->load->helper('layout');
	}

//page for each user
	public function user($id){
		$this->load->helper('image');
		//get customer info
		$data['user'] = $this->user->get_by_id($id);
		//redirect to the main page if a customer does not exist
		if(empty($data['user'])) redirect(base_url());
		//get a customer's image
		$data['user']['image'] = user_image($data['user']);		
		//load a view
		$this->load->template('user_profile',$data);
	}	

//page for editing a customer's profile
	public function edit_profile(){

		$this->load->helper(['form','image']);
		
		$message = "";
		//profile editing
		if($customer_id = $this->input->post('username')){
			echo $customer_id;
			//try to edit a customer's profile
			$success = $this->user_model->edit($customer_id) ? true : false;
						
			//set a message about success or failure
			$message = $success ? "Your profile has been successfully edited." : "Sorry, but something went wrong and we couldn't edit your profile. Try it later.";
			
					
		}				
		
		$customer_id = $this->session->userdata('username');		
		//load a view
		$data = $this->user_model->get_by_id($customer_id);
		
		$data['message'] = $message;

		display('profile', $data, true);
	}

//page with all messages
	public function messages(){

		$this->load->helper(['image']);
		$this->load->model(['address','chat']);
		//set a customer's profile image
		$data['image'] = profile_image();
		//get inbox
		$data['inbox_units'] = $this->chat->get_inbox();
		//check if a user has some new messages
		$data['unseen_chats'] = $this->chat->has_new_messages();
		//display information about users who sent messages to a logged in user
		if(!empty($data['inbox_units'])){
			$data['chat_id'] = $data['inbox_units'][0]['chat_id'];
			$data['user_image'] = user_image($data['inbox_units'][0]);
			//2nd parameter is true because we need to load all messages
			$data['messages'] = json_decode($this->_get_messages($data['chat_id'],true));
		} 
		//load a view
		$this->load->profile_template('messages',$data);
	}
//sent a new message
	function ajax_add_message(){

		$this->load->model('chat');
		//get a user's id
		$to_user = $this->input->post('to_user');
		//2nd parameter is true for XSS cleaning
		$content = $this->input->post('message_content',true);
		//get an id of a logged in user
		$my_id = $this->session->customer_id;
		//sent a new message and display it
		$this->db->select('chat_id')
		->where(['from_user'=>$my_id, 'to_user'=>$to_user])
		->or_where('(from_user = '.$this->db->escape($to_user).' AND to_user = '.$this->db->escape($my_id).')');
		$chat_id = $this->db->get('messages',0,1)->row()->chat_id;

		$this->chat->add_message($to_user,$content);
		echo $this->_get_messages($chat_id);
	}

//check if there are new messages
	function ajax_get_messages(){

		$chat_id = $this->input->post('chat_id');
		$load_all = $this->input->post('all');

		echo $this->_get_messages($chat_id,$load_all);
	}

	function _get_messages($chat_id,$all_messages = false){

		$this->load->model(['chat','address']);
		//first load all messages and then only new ones
		$last_message_id = $all_messages == 'true' ? 0 : (int)$this->session->userdata('last_message_id_'.$chat_id);
		//load messages
		$messages_data = $this->chat->get_messages($chat_id,$last_message_id);
		//display messages if there are any
		if(count($messages_data['messages']) > 0){
			//find id of a last message
			$last_message_id = $messages_data['messages'][count($messages_data['messages']) - 1]->id;
			//message was seen
			$this->db->set('seen',1)->where('chat_id',$chat_id)->where('to_user',$this->session->customer_id)->update('messages');
			//save an id of the last seen message in session
			$this->session->set_userdata('last_message_id_'.$chat_id,$last_message_id);

			return json_encode($messages_data);
		}
	}

	//check if a new message arrived
	public function ajax_check_inbox(){
		echo $this->_check_inbox();
	}

	function _check_inbox(){
		$this->load->model('chat');
		$unseen_chats = $this->chat->has_new_messages();
		return json_encode($unseen_chats);
	}
}