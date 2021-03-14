<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionController extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
	}

	function _checkUserPrevilege()
	{
		$privilege = array("Administrator", "Teacher");
		$position = _getUserInfo('ses_Post');
		if (!in_array($position, $privilege)) {
			redirect('webpages/not_allowed');
		};
	}

	function index()
	{
		// echo "QuestionController : Index";
		// _isAdmin();
		$this->_checkUserPrevilege();

		$dtSoal = $this->Commons_mdl->getData('tbl_question', ['type' => 'Essay'], null);

		$data['dtSoal'] = $dtSoal;
		$data['page_title'] = 'List Soal';
		$data['isi'] = 'soal/v_index';
		$data['jsFile'] = 'soal/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function create()
	{
		// _isAdmin();
		$this->_checkUserPrevilege();

		$data['page_title'] = 'Tambah Soal';
		$data['isi'] = 'soal/v_form_question'; 
		$data['jsFile'] = 'soal/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}	

	function store()
	{
		// _isAdmin();
		$this->_checkUserPrevilege();
		// $this->_testPost();

		$userID = _getUserInfo('ses_UserID');//'user003';//_get_user_id();
		
		$postedData['type'] = $this->input->post('type');
		$postedData['level'] = $this->input->post('level');
		$postedData['question'] = $this->input->post('question');
        $postedData['answer'] = $this->input->post('answer');
        $postedData['points'] = $this->input->post('points');
        $postedData['is_active'] = $this->input->post('is_active');
        $postedData['created_by'] = $userID;
        $postedData['created_at'] = date('Y-m-d H:i:s');
        // $this->_checkSQL($postedData);

        $this->Commons_mdl->insert('tbl_question', $postedData);
        $msg = '<div class="alert alert-success" role="alert">Success, New data created.</div>';
        $this->session->set_flashdata('flashMsg', $msg);
        redirect('arabic/dashboard', 'refresh');
	}

	function edit($id)
	{
		// echo "QuestionController : Edit ".$id;
		$this->_checkUserPrevilege();

		$dtEdit = $this->Commons_mdl->getData('tbl_question', ['id' => $id], null);
		// $this->_checkSQL($dtEdit->row_array());

		$data['dtEdit'] = $dtEdit->row_array();
		$data['page_title'] = 'Edit Question';
		$data['isi'] = 'soal/v_form_question';
		$data['jsFile'] = 'soal/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function update($id)
	{
		echo "QuestionController : Update ".$id;
	}

	function delete($id)
	{
		echo "QuestionController : Delete ".$id;
	}

	function _testPost()
    {
        //--- TESTING:
        $p = $this->input->post();
        echo "<pre>";
        print_r ($p);
        echo "</pre>";
        die();        
    }

    function _checkSQL($variable)
	{
		echo "<pre>";
		print_r ($variable);
		echo "</pre>";
		die();
	}
	
}