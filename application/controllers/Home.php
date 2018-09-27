<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $price;
    public $endSwith;
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('trip');
        $this->load->model('matched');
        $this->load->model('request');
        $this->load->model('history');
        $this->load->helper('layout');
        //-------------------------------------------
        $this->price = array();

        $address = array(
            'ĐH Nông Lâm' => 3,                        
            'ĐH Nhân Văn' => 3,     
            'ĐH Công Nghệ Thông Tin' => 4,       
            'ĐH Khoa Học Tự Nhiên' => 3,
            'ĐH Quốc Tế' => 2,
            'ĐH Bách Khoa' => 3,
            'ĐH Kinh Tế - Luật' => 5,
        );        

        foreach ($address as $key => $value){
            $this->price['KTX B'.$key] = $value;
            $this->price[$key.'KTX B'] = $value;
        }

        $this->endSwith = array(
            'ĐH Bách Khoa' => 'hcmut.edu.vn',
            'ĐH Công Nghệ Thông Tin' => 'gm.uit.edu.vn',
            'ĐH Nhân Văn' => 'hcmussh.edu.vn',
            'ĐH Kinh Tế - Luật' => 'st.uel.edu.vn',
            'ĐH Nông Lâm' => 'st.hcmuaf.edu.vn',
            'ĐH Quốc Tế' => 'mp.hcmiu.edu.vn',
            'ĐH Khoa Học Tự Nhiên' => 'student.hcmus.edu.vn'
        );
    }

	public function index()
	{        
        $map = array(
            'ĐH Nông Lâm' => 'https://www.iblue.vn/uploads/news/2016_03/logo-vecter-ai-dai-hoc-nong-lam.jpg',                        
            'ĐH Nhân Văn' => 'http://hcmussh.edu.vn/Resources/Images/HomePage/Logo%20USSH%20_Camrial.jpg',     
            'ĐH Công Nghệ Thông Tin' => 'https://banqlcs.uit.edu.vn/sites/banqlcs/files/uploads/uit2.jpg',       
            'ĐH Khoa Học Tự Nhiên' => 'https://image.giaoducthoidai.vn/Uploaded/vuongnt/2018-08-06/dh-kh--tu-nhien--tphcm-ACZC.jpg?width=500',
            'ĐH Quốc Tế' => 'https://image3.tienphong.vn/665x449/Uploaded/2018/hztsl/2014_07_20/dai_hoc_cong_nghe_gqgw.jpg',
            'ĐH Bách Khoa' => 'https://media.laodong.vn/Storage/NewsPortal/2018/8/5/623249/DH-BK-TPHCM.jpg?w=888&h=592&crop=auto&scale=both',
            'ĐH Kinh Tế - Luật' => 'https://www.uel.edu.vn/Resources/Images/SubDomain/HomePage/GioiThieu/toa%20nha%20UEL.JPG',
            'KTX A' => 'http://ktx.vnuhcm.edu.vn/upload/images/Hinh-san-pham/20130330_112802.jpg',
            'KTX B' => 'http://ktx.vnuhcm.edu.vn/upload/images/Hinh-san-pham/11.JPG'
        );
        $data = array(
            'all' => $this->trip->get_all2(),
            'map_image' => $map
        );                

        $my_trip = null;
        if ($this->session->userdata('user_logged')){
            $user = $this->session->userdata('username');
            $my_trip = $this->matched->get_matched_from_guess($user);
            if ($my_trip == null){
                $my_trip = $this->trip->get_by_id($user);                                               
            } else{
                $my_trip = $this->trip->get_by_id($my_trip['id_boss']);                                               
            }
        }        
        $data['my_trip'] = $my_trip;
        display('home', $data);
    }
    
    public function login(){                
        if ($this->session->userdata('user_logged')) {
            redirect('home');
        }
        $data = array('error' => null);
        if ($this->input->post()){   
            $username = $this->input->post('username');
            $password = $this->input->post('password'); 
                        
            $data['error'] = $this->user_model->validate($username, $password);            
        }
        if ($data['error']){
            $data['error'] = '<div class="alert alert-danger"> <strong> Lỗi! </strong>'.$data['error'].'!</div>';
        }
        else{
            $data['error'] = '';
        }
        display('login', $data, true);
    } 

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

    public function register(){   
        $data = array(
            'error' => ''
        );                
        if ($this->input->post()){                                    
            //log in a customer and redirect to the main page if registration is successful
            if ($data['error'] = $this->user_model->check()){
                $data['error'] = '<div class="alert alert-danger"> <strong> Lỗi! </strong>'.$data['error'].'!</div>';
            } else{
                $this->sendMail();
            }
        }
        //load a view
        display('register', $data, true);
    }

    public function add_a_trip(){       

        $trip = $this->trip->get_trip_from_boss($this->session->userdata('username'));
        if ($trip != null) {
            redirect('edit_trip');
        }


        $customer_id = $this->session->userdata('username');		
		//load a view
        $data = $this->user_model->get_by_id($customer_id);
        $data['error'] = '';
        $data['success'] = '';
        if ($this->input->post()){
            $test = $this->trip->check();
            if ($test == null){
                //add                
                $sql = array(
                    '_from' => $this->input->post('_from'),
                    '_to' => $this->input->post('_to'),			
                    'note' => $this->input->post('note'),
                    'timestart' => $this->input->post('timestart'),    
                    'id_boss' => $this->session->userdata('username')                
                );
                $sql['price'] = $this->price[$sql['_from'].$sql['_to']];

                $this->trip->add_into($sql);

                // update money

                //

                $data['success'] = '<div class="alert alert-success"> <strong> Thành công!!! </strong> Bạn có thể về Trang chủ để xem chuyến đi của mình! </div>';
            }
            else{
                $data['error'] = '<div class="alert alert-danger"> <strong> Lỗi! </strong>'.$test.'!</div>';
            }
        }       

        display('add_trip', $data, true);
    }

    public function edit_trip(){
        $trip = $this->trip->get_trip_from_boss($this->session->userdata('username'));        
        if ($trip == null){
            $match = $this->matched->get_matched_from_guess($this->session->userdata('username'));           
            if ($match == null){            
                redirect('add_a_trip');
            }
            else{
                $trip = $this->trip->get_by_id($match['id_boss']);                
                redirect('detail/'.$match['id_boss']);        
            }
        }

        $all_request = $this->request->get_all2();
        $data = array(
            'trip' => $trip,
            'requests' => $all_request,
            'boss' => $this->session->userdata('username')            
        );        
        display('edit_trip', $data, true);           
    }

    public function remove_trip(){
        if ($this->input->post('btn')){            
            $trip = $this->trip->get_trip_from_boss($this->session->userdata('username'));        
            $this->trip->delete($trip['id_boss']);

            // push to history from matched
            $boss = $this->session->userdata('username');
            $data = $this->matched->get_by_trip($boss);
            if ($data != null){
                $this->history->add_into($data);
            }
            // remove all matched and request
            $this->request->delete_all_request($boss);
            $this->matched->delete_all_from_boss($boss);
            redirect(base_url());
        }
    }

    public function detail($id){

        if (!$this->session->userdata('user_logged')) {
            redirect('login');
        }

        $data['trip'] = $this->trip->get_by_id($id);
        $data['success'] = '';
        $data['error'] = '';
        
        if ($this->input->post()){       
            $trip = $data['trip'];                                                 
            $boss = $this->user_model->get_by_id($trip['id_boss']);
            $guess = $this->user_model->get_by_id($this->session->userdata('username'));
            // check balance and push to request
            $check = $this->check_balance($trip, $boss);
            $data = array_merge($data, $check);
            if (!isset($check['error'])){                
                $this->push_to_request($guess['username'], $boss['username']);
            }            
            
        }
        $data['fee'] = 0.5;
        $all_request = $this->request->get_all2();
        $data['requests'] = $all_request;
        $data['boss'] = $id;        

        display('detail', $data, true);
    }

    function check_balance($trip, $boss){
        $fee = 0.5;
        $price = $trip['price'] + $fee;

        $data = array();
        $guess = $this->user_model->get_by_id($this->session->userdata('username'));    
        if ($boss['balance'] >= 0){                        
            if ($guess['balance'] >= $price){            
                $data['success'] = '<div class="alert alert-success"> <strong> Thành công!!! </strong> Bạn đã gửi yêu cầu đến <strong>'.$boss['username'].'</strong>! 
                Hãy đợi họ đồng ý nhé!
                </div>';
            } else{
                $data['error'] = '<div class="alert alert-danger"> <strong> Thất bại!!! </strong> Số tiền của bạn không đủ. </div>';                
            }            
        } 
        else{                                          
            $data['success'] = '<div class="alert alert-success"> <strong> Thành công!!! </strong> Bạn đã gửi yêu cầu đến <strong>'.$boss['username'].'</strong>! 
                Hãy đợi họ đồng ý nhé!
                </div>';
        }      
        return $data;
    }

    function transfer_money($guess, $boss, $price, $fee){
        $this->user_model->add_money($guess, -$price);
        $this->user_model->add_money($boss, $price - $fee);
        // transfer to my_account
    }

    // khi nhan vao Accept. No se vao Verify nay
    function accept($boss, $guess){
        $cur_user = $this->session->userdata('username');
        if ($cur_user != $boss){
            return ;
        }
        $trip = $this->trip->get_by_id($cur_user);
        if ($trip == null){
            return ;
        }

        $code = mt_rand(100000, 999999);
        
        $this->push_to_matched($boss, $guess, $code);
        
        $this->occupate_trip($trip);
        
        $this->delete_all_request($boss);

        $this->delete_all_request_guess($guess);

        redirect('edit_trip');
    }

    function verify($boss, $guess){
        $cur_user = $this->session->userdata('username');
        if ($cur_user != $boss){
            return ;
        }
        $trip = $this->trip->get_by_id($cur_user);
        if ($trip == null){
            return ;
        }

        $fee = 0.5;
        $price = $trip['price'] + $fee;

        $this->transfer_money($guess, $boss, $price, $fee);

        $this->push_to_matched($boss, $guess);

        $this->occupate_trip($trip);

        $this->delete_all_request($boss);

        $this->delete_all_request_guess($guess);

        redirect('edit_trip');
    }

    // xác nhận giao dịch 
    function verify_transaction(){
        $data = array(
            'error' => '',
            'success' => '' 
        );
        if ($this->input->post()){
            $code = $this->input->post('code');
            $data = $this->verify_code($code);
        }
        display('check_code', $data, true);
    }
    function verify_code($code){
		$username = $this->session->userdata('username');
        $match = $this->matched->get_matched_from_boss($username);
        $error = '';
        $success = '';
		if ($match == null){
            $error = 'Bạn chưa đi chuyến nào. Vậy nên chưa có mã nào cho bạn!';	
            $error = '<div class="alert alert-danger"> <strong> Lỗi! </strong>'.$error.'!</div>';		
		}
		else{
			if ($match['code'] == $code){
                $guess = $match['id_guess'];
                $boss = $match['id_boss'];
                $trip = $this->trip->get_trip_from_boss($this->session->userdata('username')); 
                $fee = 0.5;
                $price = $trip['price'] + $fee;
                
                $this->transfer_money($guess, $boss, $price, $fee);
                
                // xoa matched va dua vao lich su <=> remove trip                       
                $this->trip->delete($trip['id_boss']);
                // push to history from matched                
                $data = $this->matched->get_by_trip($boss);
                if ($data != null){
                    unset($trip['occup']);
                    unset($trip['id_boss']);
                    $data = array_merge($data, $trip);

                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('Y-m-d h:i:s', time());

                    $data['time'] = $date;
                    $this->history->add_into($data);
                }
                // remove all matched and request
                $this->request->delete_all_request($boss);
                $this->matched->delete_all_from_boss($boss);
                
                $success = 'Bạn nhận được số tiền là '. (($price - $fee) * 1000).'đ';
                $success = '<div class="alert alert-success"> <strong> Thành công! </strong>'.$success.'!</div>';
			}
        }
        $data['error'] = $error;
        $data['success'] = $success;
        return $data;
	}

    function delete_all_request($boss){
        $this->request->delete_all_request($boss);
    }

    function delete_all_request_guess($guess){
        $this->request->delete_all_request_guess($guess);
    }

    function push_to_matched($boss, $guess, $code){
        $item = array(
            'id_boss' => $boss,
            'id_guess' => $guess,
            'code' => $code
        );
        $this->matched->add_into($item);    
    }

    function occupate_trip($trip){
        $trip['occup'] = true;
        $this->trip->update($trip['id_boss'], $trip);
    }

    function push_to_request($guess, $boss){
        $data = array(
            'id_boss' => $boss,
            'id_guess' => $guess
        );
        $this->request->add_into($data);
    }

    function deny_requests($boss, $guess){
        $this->request->remove_requests($boss, $guess);

        redirect('edit_trip');
    }
 
    public function user($username){
        $user_info = $this->user_model->get_by_id($username);
        if ($user_info == null){
            return ;
        }
        unset($user_info['password']);
        unset($user_info['balance']);
        display('user_detail', $user_info, true);
    }

    public function users(){
        $users = $this->user_model->get_all2();
        $data = array(
            'users' => $users
        );
        display('all_users', $data, true);
    }

    public function matches(){
        $matches = $this->history->get_all2();
        $data = array(
            'matches' => $matches
        );
        display('all_matches', $data, true);
    }


    function sendMail()
	{
		$hash = md5( rand(0,1000) );
		$name = $this->input->post('username');
        $password = $this->input->post('password');		
        $mssv = $this->input->post('mssv');
        $university = $this->input->post('university');

        // check mssv                                        
        $email = $mssv.'@'.$this->endSwith[$university];
		$to      = $email; // Send email to our user
		$subject = 'Signup | Verification'; // Give the email a subject 
		$message = '
		
		Thanks for signing up!
		Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
		
		------------------------
		Username: '.$name.'
		Password: '.$password.'
		------------------------
		
		Please click this link to activate your account:
		http://localhost/easyhere/home/verify_mail/'.$name.'/'.$mssv.'/'.$hash.'
		
		'; // Our message above including the link
							
        $headers = 'From:noreply@easyhere.tk' . "\n"; // Set from headers
        
        // push to database
        $password = $this->input->post('password');
        $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 11]);		
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $password,
            'full_name' => $this->input->post('full_name'),
            'phone_num' => $this->input->post('phone_num'),
            'facebook' => $this->input->post('facebook'),
            'balance' => -100,
            'verify' => false,
            'mssv' => $this->input->post('mssv'),
            'university' => $this->input->post('university'),
            'hash' => $hash            
        );        
        
		//if (mail($to, $subject, $message, $headers)) {			
            $this->user_model->add_into($data);
            redirect('home/success_verify'); 
		//}
		//else{
		//	redirect('home/verify_fail');
		//}
    }	
    
    function success_verify(){
        display('verify', null, true);
    }

    function verify_fail(){
        display('verify_fail', null, true);
    }

    function verify_mail($username, $mssv, $hash){
        if ($this->user_model->check_verify($username)){
            redirect('login');
        }

        if ($this->user_model->verify($username, $mssv, $hash)){
            echo 'OK';
            $user = $this->user_model->get_by_id($username);
            $user['verify'] = true;
            $this->user_model->update($username, $user);
            redirect('login');
        }
        else{
            echo 'NO';
        }
    }
    
}