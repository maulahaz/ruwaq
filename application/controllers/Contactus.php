<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {	
	function __construct(){
		parent ::__construct();

	}

	function index(){	

		//Data dari DB untuk Websetting di homepage:
		$this->load->model('Websetting_mdl');
		$qryWebsetting = $this->Websetting_mdl->getData('tbl_configs', null);
		$data['webSetting'] = $qryWebsetting->row();

		//Data dari DB untuk menampilkan List Telepon:
		$this->load->model('Phone_mdl');
		$data['qryPhoneView'] = $this->Phone_mdl->getRecord_limited(null, 4, 'Name DESC');

	    $data['isi'] = 'frontend/contactus';
		// $this->load->view('frontend/template/wrapper', $data, FALSE);
		$this->load->view('t_restomaster/wrapper', $data, FALSE);
	}

}

