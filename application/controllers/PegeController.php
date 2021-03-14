<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegeController extends CI_Controller {
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
		// echo "EssayController : Index";
		// _isAdmin();
		$this->_checkUserPrevilege();

		$dtSoal = $this->Commons_mdl->getData('tbl_question', ['type <>' => 'Essay'], 'id DESC');

		$data['dtSoal'] = $dtSoal;
		$data['flash'] = $this->session->flashdata('flashMsg');
		$data['page_title'] = 'List Soal Pilihan Ganda';
		$data['isi'] = 'pege/v_index';
		$data['jsFile'] = 'pege/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}	

	function create()
	{
		// _isAdmin();
		$this->_checkUserPrevilege();

		$data['flash'] = $this->session->flashdata('flashMsg');
		$data['page_title'] = 'Tambah Soal PG';
		$data['isi'] = 'pege/v_form_pege'; 
		// $data['isi'] = 'pege/v_form_question'; 
		$data['jsFile'] = 'pege/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function store()
	{
		// _isAdmin();
		$this->_checkUserPrevilege();
		// $this->_testPost();

		$userID = _getUserInfo('ses_UserID');//'user003';//_get_user_id();

		$this->_formValidation();
		if($this->form_validation->run() == TRUE){
			$postedData['type'] = $this->input->post('type');
			$postedData['level'] = $this->input->post('level');
			$postedData['question'] = $this->input->post('question');
	        $postedData['answer'] = $this->input->post('answer');
	        $postedData['points'] = $this->input->post('points');
	        $postedData['is_active'] = $this->input->post('is_active');
	        $postedData['created_by'] = $userID;
	        $postedData['created_at'] = date('Y-m-d H:i:s');
	        // $this->_checkSQL($postedData);

	        // DATA ANSWERS:
            $answerOpts = $this->input->post('answer_opt');
            $postedDataAnswer['Opt_title'] = $this->input->post('answer_opt');
            $isCorrect = $this->input->post('correct_answer');
            // $this->_checkSQL($answerOpts);

            // Insert ke tbl_question:
	        $this->Commons_mdl->insert('tbl_question', $postedData);
	        $insertedID = $this->Commons_mdl->getInsertID();

	        // Insert ke tbl_answer (utk pilihan2nya):
	        $myd = [];
	        for ($i=0; $i < count($answerOpts); $i++) { 
	            $dtAnswer['question_id'] = $insertedID;
	            $dtAnswer['opt_number'] = $i + 1; 
	            $dtAnswer['opt_text'] = $answerOpts[$i];
	            $dtAnswer['is_correct'] = $isCorrect[$i];
	            $this->Commons_mdl->insert('tbl_answer', $dtAnswer);
	            // $myd[] = $dtAnswer;
	        }
	        // $this->_checkSQL($myd);

	        $msg = '<div class="alert alert-success" role="alert">Success, New data created.</div>';
	        $this->session->set_flashdata('flashMsg', $msg);
	        redirect('arabic/dashboard', 'refresh');
		}else{
			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			// redirect('arabic/dashboard', 'refresh');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function _formValidation($updateID = NULL)
	{
		// if($updateID == NULL){
		// 	$this->form_validation->set_rules('judul_artikel','Judul Artikel','required|max_length[255]|is_unique[tbl_artikel.Title]');	
		// 	//--Klo Insert data, Gambar ga boleh kosong:
		// 	$this->form_validation->set_rules('gambar','Gambar','callback_file_required');
		// }else{
		// 	$this->form_validation->set_rules('judul_artikel','Judul Artikel','required|max_length[255]');
		// }
		
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('level','Level','required');
		$this->form_validation->set_rules('question','Question','required');
		$this->form_validation->set_rules('answer','Answer','required');
		$this->form_validation->set_rules('points','Points','required');
		$this->form_validation->set_rules('is_active','Is it Active','required');
		//Options:
		$this->form_validation->set_rules('answer_opt[]','Pilihan belum diisi','required');
		$this->form_validation->set_rules('correct_answer[]','Pilihan yang benar belum diisi','required');
	}

	function _checkQuestion($token)
	{
		$dtQuiz = $this->Commons_mdl->getData('tbl_quiz', ['token' => $token], null);
		if($dtQuiz->num_rows() < 1){
			$msg = '<div class="alert alert-warning" role="alert">Token salah.</div>';
	        $this->session->set_flashdata('flashMsg', $msg);
	        redirect('arabic/dashboard', 'refresh');
		}
	}

	function edit($id = NULL)
	{
		// _isAdmin();
		$this->_checkUserPrevilege();

		$dtEdit = $this->Commons_mdl->getData('tbl_question', ['id' => $id], null);
		// $this->_checkSQL($dtEdit);
		if($dtEdit->num_rows() < 1){
			$msg = '<div class="alert alert-warning" role="alert">Not registered Question ID</div>';
	        $this->session->set_flashdata('flashMsg', $msg);
	        redirect('arabic/pege', 'refresh');
		}

		$dtEditAnswer = $this->Commons_mdl->getData('tbl_answer', ['question_id' => $id], null);

		$data['dtEdit'] = $dtEdit->row_array();
		$data['dtEditAnswer'] = $dtEditAnswer;
		$data['flash'] = $this->session->flashdata('flashMsg');
		$data['page_title'] = 'Edit Soal PG';
		$data['isi'] = 'pege/v_form_pege';
		$data['jsFile'] = 'pege/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function update($id)
	{
		// echo "PegeController : Update ".$id;
		// _isAdmin();
		$this->_checkUserPrevilege();
		// $this->_testPost();

		$userID = _getUserInfo('ses_UserID');//'user003';//_get_user_id();

		$this->_formValidation();
		if($this->form_validation->run() == TRUE){
			$postedData['type'] = $this->input->post('type');
			$postedData['level'] = $this->input->post('level');
			$postedData['question'] = $this->input->post('question');
	        $postedData['answer'] = $this->input->post('answer');
	        $postedData['points'] = $this->input->post('points');
	        $postedData['is_active'] = $this->input->post('is_active');
	        $postedData['updated_by'] = $userID;
	        $postedData['updated_at'] = date('Y-m-d H:i:s');
	        // $this->_checkSQL($postedData);

	        // DATA ANSWERS:
            $answerOpts = $this->input->post('answer_opt');
            $postedDataAnswer['Opt_title'] = $this->input->post('answer_opt');
            $isCorrect = $this->input->post('correct_answer');
            // $this->_checkSQL($answerOpts);

            // Update ke tbl_question:
	        $this->Commons_mdl->update('tbl_question', ['id' => $id], $postedData);

	        // Update ke tbl_answer (utk pilihan2nya):
	        // DELETE dulu OLD DATA ANSWERS:
            $this->Commons_mdl->delete('tbl_answer', ['question_id' => $id]);
            // INSERT New updated data:
	        // $myd = [];
	        for ($i=0; $i < count($answerOpts); $i++) { 
	            $dtAnswer['question_id'] = $id;
	            $dtAnswer['opt_number'] = $i + 1; 
	            $dtAnswer['opt_text'] = $answerOpts[$i];
	            $dtAnswer['is_correct'] = $isCorrect[$i];
	            $this->Commons_mdl->insert('tbl_answer', $dtAnswer);
	            // $myd[] = $dtAnswer;
	        }
	        // $this->_checkSQL($myd);

	        $msg = '<div class="alert alert-success" role="alert">Success, Data udated.</div>';
	        $this->session->set_flashdata('flashMsg', $msg);
	        redirect('arabic/dashboard', 'refresh');
		}else{
			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			// redirect('arabic/dashboard', 'refresh');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function delete($id)
	{
		echo "PegeController : Delete ".$id;
	}

	function _checkSQL($variable)
	{
		echo "<pre>";
		print_r ($variable);
		echo "</pre>";
		die();
	}
}