<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apis extends CI_Controller 
{
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
	}

	function index()
	{
        // $this->load->view('tickets/manage');
        redirect('auths/forbidden');
	}

	function quiz_list()
	{
		// die('test');
		
		$response = array('isSuccess' => false, 'msg' => array(),'data' => array(), 'isOK'=>0);

		$dataQry = $this->Commons_mdl->getData('tbl_quiz', null, null);
		if($dataQry->num_rows() > 0){
			$response['isSuccess'] = true;
			$response['msg'] = 'Data avaiable';
			$response['data'] = $dataQry->result();
		}else{
			$response['isSuccess'] = false;
			$response['msg'] = 'Data not avaiable';
		}

		// echo json_encode($response);
		echo json_encode($dataQry->result());
	}
}
