<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('display'))
{		
    function display($viewFile, $data = array(), $login = false)
    {
    	$ci =& get_instance();    	              
        if ($login){
            $ci->load->view('frontend/'.$viewFile, $data);
            return ;      
        }      
    	$ci->load->view('frontend/template/header', $data);	 
        $ci->load->view('frontend/css_diff/'.$viewFile);            
        $ci->load->view('frontend/template/header_m', $data);
    	$ci->load->view('frontend/'.$viewFile, $data);
    	$ci->load->view('frontend/template/footer', $data);  
        $ci->load->view('frontend/js_diff/'.$viewFile);            
        $ci->load->view('frontend/template/footer_m', $data);  
    }   
}