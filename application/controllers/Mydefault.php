<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydefault extends CI_Controller {	
	function __construct(){
		parent ::__construct();

	}

	function index(){	
		//Data dari DB untuk Websetting di homepage:
		$this->load->model('Websetting_mdl');
		$qryWebsetting = $this->Websetting_mdl->getData('tbl_configs', null);
		$data['webSetting'] = $qryWebsetting->row();

		//Data dari DB untuk menampilkan Galeri/Slider:
		// $this->load->model('Galeri_mdl');
		$data['qryGaleri'] = $this->db->get('tbl_sliders');

		//Data dari DB untuk menampilkan Artikel:
		$this->load->model('Artikel_mdl');
		$data['qryArtikel'] = $this->Artikel_mdl->getRecord(array('Status' => 'Published'), 6, 'uid DESC');
		// $lastq = $this->db->last_query();
		// $num = $data['qryArtikel']->num_rows();
		// echo $lastq;
		// echo $num;

		//Data dari DB untuk menampilkan Katalog Warung dan Dagangan:
		$this->load->model('Dagangan_mdl');
		$data['qryDagangan'] = $this->Dagangan_mdl->join_dagangan_warung(FALSE, 0, 0);
		// $myqry = $data['qryDagangan']->result();
		// echo "<pre>";
		// print_r ($myqry);
		// echo "</pre>";die();	

		//Data dari DB untuk menampilkan List Event:
		$this->load->model('Event_mdl');
		// $data['qryEvent'] = $this->Event_mdl->get('uid DESC');
		$data['qryEvent'] = $this->Event_mdl->getRecord(null, null, 'uid DESC');
		// if ($data['qryEvent']->num_rows() > 0) {
		// 	echo "string ok";
		// } else {
		// 	echo "string not ok";
		// }
		// die();
		// $myqry = $data['qryEvent']->result();
		// echo "<pre>";
		// print_r ($myqry);
		// echo "</pre>";die();			

		//Data dari DB untuk menampilkan List Telepon:
		$this->load->model('Phone_mdl');
		$data['qryPhoneView'] = $this->Phone_mdl->getRecord_limited(null, 4, 'Name DESC');

		$data['isi'] = 'frontend/homepage';
		// $this->load->view('frontend/template/wrapper', $data, FALSE);	
		$this->load->view('t_restomaster/wrapper', $data, FALSE);	
	}

	function randomMath(){
		$val1 = rand(0,9);
		$val2 = rand(0,9);
		$operator= '+';
		$questionIs = $val1 . $operator . $val2;	
		$result = $val1 + $val2;
		// echo $val1 . $operator . $val2 . '=' . $result;
	}


}

