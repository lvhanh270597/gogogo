<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('startsWith'))
{		
    function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

}

if ( ! function_exists('endsWith')){
    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }
        return (substr($haystack, -$length) === $needle);
    }
}

if ( ! function_exists('hasSpace')){
    function hasSpace($str){
        if ($str == trim($str) && strpos($str, ' ') !== false) {
            return true;
        }
        return false;
    }   
}

if ( ! function_exists('hasSpecialCharacter')) {
    function hasSpecialCharacter($string){        
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=+¬-]/', $string))
        {
            return true;
        }
        return false;
    }
}

if ( ! function_exists('checkUsername') ){
    function checkUsername($username) {
        $username = trim($username);
        if (empty($username)) {
            return "username was left blank.";
        }elseif (strlen($username) < 4) {
            return "username was too short";
        }elseif (strlen($username) > 26) {
            return "username was too long";
        }elseif (!preg_match('~^[a-z]{2}~i', $username)) {
            return "username must start with two letters";
        }elseif (preg_match('~[^a-z0-9_.]+~i', $username)) {
            return "username contains invalid characters.";
        }elseif (substr_count($username, ".") > 1) {
            return "username may only contain one or less periods.";
        }elseif (substr_count($username, "_") > 1) {
            return "username may only contain one or less underscores.";
        }
        return true;
    } 
}

if ( ! function_exists('checkFacebook')) {
    function checkFacebook($facebook){
        $regrex = '/(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?/';
        if (!preg_match($regrex, $facebook)) {
            return false;
        }
        else{
            return true;
        }
    }
}