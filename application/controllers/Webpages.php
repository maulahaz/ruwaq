<?php

class Webpages extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}

	function not_allowed(){
		$this->load->view('v_forbidden');
	}

	function undercon(){
		$this->load->view('v_undercon');
	}

	function not_allowed_bak1(){
		$data['isi'] = 'webpages/not_allowed';
		$this->load->view('t_restomaster/blank', $data, FALSE);
	}

	function undercon_bak1(){
		$data['isi'] = 'webpages/undercon';
		$this->load->view('t_restomaster/blank', $data, FALSE);
	}	

}