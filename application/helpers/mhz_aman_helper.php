<?php

function _getUserInfo($param = null){
	$ci =& get_instance();
	if($param == null){
		return $ci->session->userdata();
	}else{
		return $ci->session->userdata($param);
	}
}

function _isLoggedin(){
	$ci =& get_instance();
	$isLoggedin = $ci->session->userdata('isLoggedin');
	if($isLoggedin == FALSE){
		redirect('auth/login');
		// redirect('login');
		// redirect('auths/signin');
	}
}

function _isAdmin(){
	$ci =& get_instance();
	$isAdmin = $ci->session->userdata('isAdmin');//die($isAdmin);
	if($isAdmin == FALSE){
	// if($isAdmin != "admin"){
		redirect('webpages/not_allowed');
		// redirect('auths/forbidden');
	}
}

//--Loggedin status: True or False
function loggedin_tf(){
	$ci =& get_instance();
	$isLoggedin = $ci->session->userdata('isLoggedin');
	if($isLoggedin){ 
		return TRUE;
	}else{
		return FALSE;
	}
}

//--Admin status: True or False
function Admin_tf(){
	$ci =& get_instance();
	$isAdmin = $ci->session->userdata('ses_Level');
	if($isAdmin == 'Admin'){
		return TRUE;
	}else{
		return FALSE;
	}
}

function _encrypt_str($str){
	$ci =& get_instance();
	$ci->load->library('encryption');
	$encrypted_str =  $ci->encryption->encrypt($str);
	return $encrypted_str;
}

function _decrypt_str($str){
	$ci =& get_instance();
	$ci->load->library('encryption');
	$decrypted_str =  $ci->encryption->decrypt($str);
	return $decrypted_str;
}

function _isAjax(){
    $ci =& get_instance();
    if(!$ci->input->is_ajax_request()){
        redirect('webpages/not_allowed');
    }
}