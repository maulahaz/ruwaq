<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_settings extends CI_Controller {	
	function __construct(){
		parent ::__construct();

	}

	function index(){
			
	}

	function setting(){
		$data['page_title'] = "System Setting";
		$data['page_name'] = "system_setting";
		$this->load->view('backend/system', $data, FALSE);

	}

}