<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('trip');
        $this->load->model('matched');
        $this->load->helper('layout');
        
    }

	public function index()
	{
        $map = array(
            'ĐH Nông Lâm' => 'https://www.iblue.vn/uploads/news/2016_03/logo-vecter-ai-dai-hoc-nong-lam.jpg',                        
            'ĐH Nhân Văn' => 'http://hcmussh.edu.vn/Resources/Images/HomePage/Logo%20USSH%20_Camrial.jpg',     
            'ĐH Công Nghệ Thông Tin' => 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Ho_Chi_Minh_City_University_of_Information_Technology.JPG',       
        );
        $data = array(
            'all' => $this->trip->get_all2(),
            'map_image' => $map
        );                
        display('home', $data);
    }
    
    public function login(){                
        if ($this->session->userdata('user_logged')) {
            redirect('home');
        }
        if ($this->input->post()){   
            $username = $this->input->post('username');
            $password = $this->input->post('password');                       
            $this->user_model->validate($username, $password);
        }
        display('login', null, true);
    } 

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

    public function register(){                   
        if ($this->input->post()){                                    
            //log in a customer and redirect to the main page if registration is successful
            if($this->user_model->add()){	
                $this->user_model->user_log_in($this->input->post('username'));
                redirect(base_url());
            }   
        }
        //load a view
        display('register', null, true);
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
                $this->trip->add();     
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
                $trip = $this->trip->get_by_id($match['trip_id']);
                $data = array(
                    'trip' => $trip
                );     
                redirect('detail/'.$match['trip_id']);        
            }
        }
        $data = array(
            'trip' => $trip
        );
        display('edit_trip', $data, true);           
    }

    public function remove_trip(){
        if ($this->input->post('btn')){            
            $trip = $this->trip->get_trip_from_boss($this->session->userdata('username'));        
            $this->trip->delete($trip['id']);
            redirect(base_url());
        }
    }

    public function detail($id){
        $data['trip'] = $this->trip->get_by_id($id);
        $data['success'] = '';
        $data['error'] = '';
        if ($this->input->post()){       
            $trip = $data['trip'];                                                 
            $boss = $this->user_model->get_by_id($trip['id_boss']);
            if ($boss['balance'] >= 0){
                $guess = $this->user_model->get_by_id($this->session->userdata('username'));
                if ($guess['balance'] >= 2){
                    $this->user_model->add_money($guess['username'], -2);
                    $this->user_model->add_money($boss['username'], +1.5);

                    $item = array(
                        'id_boss' => $boss['username'],
                        'id_guess' => $guess['username'],
                        'trip_id' => $id
                    );
                    $this->matched->add_into($item);    

                    $trip = $data['trip'];
                    $trip['_empty'] = true;
                    $this->trip->update($trip['id'], $trip);
                    $data['success'] = '<div class="alert alert-success"> <strong> Thành công!!! </strong> Hãy đến đó đúng giờ nhé! </div>';
                } else{
                    $data['error'] = '<div class="alert alert-danger"> <strong> Thất bại!!! </strong> Số tiền của bạn không đủ. </div>';
                }            
            } 
            else{                
                $this->user_model->add_money($boss['username'], +1.5);

                $item = array(
                    'id_boss' => $boss['username'],
                    'id_guess' => $this->session->userdata('username'),
                    'trip_id' => $id
                );
                $this->matched->add_into($item);    

                $trip = $data['trip'];
                $trip['_empty'] = true;
                $this->trip->update($trip['id'], $trip);
                $data['success'] = '<div class="alert alert-success"> <strong> Thành công!!! </strong> Hãy đến đó đúng giờ nhé! </div>';                
            }                        
        }
        
        display('detail', $data, true);
    }

    public function user($username){
        $user_info = $this->user_model->get_by_id($username);
        unset($user_info['password']);
        unset($user_info['balance']);
        display('user_detail', $user_info, true);
    }

    public function become_a_shiper(){
        $this->load->model('shipper');
        if ($this->input->post()){            
            $this->shipper->add_into(
                array(
                    'fb_address'    => $this->input->post('fb_address'),
                    'user_id'       => $this->session->userdata('username')
                )
            );
            echo 'OK';
        }        
        $this->load->view('public/become_shipper');
    }

//page with information about a product
    public function product($id){
        $this->load->model(array('product', 'imageProduct'));
        $product = $this->product->get_by_id($id);
        $images = $this->imageProduct->getImagesFromProductId($id); 
        $data['product'] = $product;
        $data['images'] = $images;                    
        $this->load->product_template('show_product');
    }

    public function provider($provider_id){
        $this->load->model(array('providers', 'product'));             
        $instance = $this->providers->get_by_id($provider_id);
        print_r($instance);          
        $products = $this->product->get_from_provider($provider_id);
        print_r($products);
    }    

}