<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuizController extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
		$this->title = 'Ruwaq Sibawiyah - Ruwais Arabic Club';
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

		$userLevel = _getUserInfo('ses_Level');

		$dtQuiz = $this->Commons_mdl->getData('tbl_quiz', ['type' => 'Essay'], null);

		$data['dtQuiz'] = $dtQuiz;
		$data['title'] = $this->title;
		$data['page_title'] = 'Quiz List';
		$data['isi'] = 'quiz/v_index';
		$data['jsFile'] = 'quiz/js_quiz';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function create()
	{
		// _isAdmin();
		$this->_checkUserPrevilege();

		$dtQuestions = $this->Commons_mdl->getData('tbl_question', ['type' => 'Essay', 'is_active' => 1], 'id DESC');

		$data['dtQuestions'] = $dtQuestions;
		$data['title'] = $this->title;
		$data['page_title'] = 'Buat Quiz';
		$data['isi'] = 'quiz/v_form_quiz';
		$data['jsFile'] = 'quiz/js_quiz';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function edit($id)
	{
		// _isAdmin();
		$this->_checkUserPrevilege();

		$dtEdit = $this->Commons_mdl->getData('tbl_quiz', ['id' => $id], null);
		// $this->_checkSQL($dtEdit);
		$dtQuestions = $this->Commons_mdl->getData('tbl_question', ['type' => 'Essay', 'is_active' => 1], 'id DESC');

		$data['dtEdit'] = $dtEdit->row_array();
		$data['dtQuestions'] = $dtQuestions;
		$data['title'] = $this->title;
		$data['page_title'] = 'Edit Quiz';
		$data['isi'] = 'quiz/v_form_quiz';
		$data['jsFile'] = 'quiz/js_quiz';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function destroy($id)
	{
		_isAdmin();
		// $this->_checkUserPrevilege();

		$dtQuery = $this->Commons_mdl->getData('tbl_quiz', ['id' => $id], null);
		if($dtQuery->num_rows() > 0){
			$this->Commons_mdl->delete('tbl_quiz', ['id' => $id]);
			echo "Sukses";
		}else{
			echo "Data not available";
		}
	}

	function store()
	{
		// _isAdmin();
		$this->_checkUserPrevilege();
		// $this->_testPost();

		$userID = _getUserInfo('ses_UserID');//'user003';//_get_user_id();
		
		$postedData['title'] = $this->input->post('title');
		$postedData['type'] = 'Essay';
		$postedData['start_at'] = convertDate($this->input->post('start_at'), 'mysql');
		$postedData['due_at'] = convertDate($this->input->post('due_at'), 'mysql');
		$postedData['level'] = $this->input->post('level');
		$postedData['questions'] = $this->input->post('questions');
		$postedData['token'] = generate_random_string(5);
        $postedData['timer'] = $this->input->post('timer');
        $postedData['correct_pts'] = 1;
        $postedData['wrong_pts'] = 0;
        $postedData['created_by'] = $userID;
        $postedData['created_at'] = date('Y-m-d H:i:s');
        // $this->_checkSQL($postedData);

        $this->Commons_mdl->insert('tbl_quiz', $postedData);
        $msg = '<div class="alert alert-success" role="alert">Success, New data created.</div>';
        $this->session->set_flashdata('flashMsg', $msg);
        redirect('arabic/dashboard', 'refresh');
	}

	function akses($quizID)
	{
		_isLoggedin();

        $dtQuiz = $this->Commons_mdl->getData('tbl_quiz', ['id' => $quizID], null)->row_array();
        // $this->_checkSQL($dtQuiz);
		$data['dtQuiz'] = $dtQuiz;
		$data['title'] = $this->title;
		$data['page_title'] = 'Akses Quiz';
		$data['isi'] = 'quiz/v_token';
		// $data['jsFile'] = 'quiz/js_quiz';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function _checkQuizToken($qid, $token)
	{
		$dtQuiz = $this->Commons_mdl->getData('tbl_quiz', ['id' => $qid,'token' => $token], null);
		if($dtQuiz->num_rows() < 1){
			$msg = '<div class="alert alert-warning" role="alert">Token salah.</div>';
	        $this->session->set_flashdata('flashMsg', $msg);
	        redirect('arabic/dashboard', 'refresh');
		}
	}

	function _checkQuizDone($token, $userID)
	{
		$dtQuery = $this->Commons_mdl->getData('tbl_quiz_post', ['token' => $token, 'created_by' => $userID], null);
		if($dtQuery->num_rows() > 0){
			$msg = '<div class="alert alert-warning" role="alert">Anda sudah mengerjakan quiz yang sama.</div>';
	        $this->session->set_flashdata('flashMsg', $msg);
	        redirect('arabic/dashboard', 'refresh');
		}
	}

	function do()
	{
		_isLoggedin();

		$userID = _getUserInfo('ses_UserID');
		$token = $this->input->post('token');
		$qid = $this->input->post('qid');
		$btnSubmit = $this->input->post('btn_submit');

		$this->_checkQuizToken($qid, $token);
		$this->_checkQuizDone($token, $userID);

        $dtQID = $this->Commons_mdl->getData('tbl_quiz', ['token' => $token], null)->row_array();

		$sql = '
            SELECT * 
            FROM tbl_question 
            WHERE id IN ('.$dtQID['questions'].')
            ORDER BY RAND()
        ';

        $dtSoal = $this->Commons_mdl->customQuery($sql);
        // echo $this->Commons_mdl->lastQuery();die();
        // $this->_checkSQL($dtSoal->result());

        if($btnSubmit == "Cancel"){ redirect(base_url()); }
        if($btnSubmit == 'Submit'){
        	// $this->_testPost();
        }

        $data['token'] = $token;
        $data['dtSoal'] = $dtSoal;
        $data['title'] = $this->title;
		$data['page_title'] = 'Soal Essay';
		$data['isi'] = 'quiz/v_do';
		// $data['jsFile'] = 'quiz/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function doXXXX($token)
	{
		_isLoggedin();

		$userID = _getUserInfo('ses_UserID');
		// $token = $this->input->post('token');
		$btnSubmit = $this->input->post('btn_submit');

        $dtQID = $this->Commons_mdl->getData('tbl_quiz', ['token' => $token], null)->row_array();

		$sql = '
            SELECT * 
            FROM tbl_question 
            WHERE id IN ('.$dtQID['questions'].')
            ORDER BY RAND()
        ';

        $dtSoal = $this->Commons_mdl->customQuery($sql);
        echo $this->Commons_mdl->lastQuery();die();
        // $this->_checkSQL($dtSoal->result());

        if($btnSubmit == "Cancel"){ redirect(base_url()); }
        if($btnSubmit == 'Submit'){
        	// $this->_testPost();
        }

        $data['token'] = $token;
        $data['dtSoal'] = $dtSoal;
        $data['title'] = $this->title;
		$data['page_title'] = 'Soal Essay';
		$data['isi'] = 'quiz/v_do';
		// $data['jsFile'] = 'quiz/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function view($quizPostID)
	{
		_isLoggedin();

		$sql = '
			SELECT *, q.points as quest_points, qpd.points as answered_points, qpm.created_by as done_by
			FROM tbl_quiz_post qpm
			INNER JOIN tbl_quiz_post_detail qpd ON qpm.id = qpd.quiz_post_id
			INNER JOIN tbl_question q ON q.id = qpd.question_id
			WHERE qpm.id = '.$quizPostID.'
		';

        $dtQuery = $this->Commons_mdl->customQuery($sql);

        if($dtQuery->num_rows() < 1){
			$msg = '<div class="alert alert-warning" role="alert">Quiz ID tidak dikenal.</div>';
	        $this->session->set_flashdata('flashMsg', $msg);
	        redirect('arabic/dashboard', 'refresh');
		}

        // echo $this->Commons_mdl->lastQuery();die();
        // $this->_checkSQL($dtSoal->result());

		$data['dtQuery'] = $dtQuery;
		$data['notes'] = $dtQuery->row()->notes;
        // $data['token'] = $token;
        $data['title'] = $this->title;
		$data['page_title'] = 'Quiz view';
		$data['isi'] = 'quiz/v_view';
		// $data['jsFile'] = 'quiz/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function redo($token)
	{
		redirect('webpages/undercon');
	}

	// function submit($token)
	function submit()
	{
		_isLoggedin();
		// $this->_testPost();

		$userID = _getUserInfo('ses_UserID');
		$qid = $this->input->post('qid');
        $answered = $this->input->post('answer_qid');
		
		// $postedData['token'] = $token;
		$postedData['token'] = $this->input->post('token');
        $postedData['created_by'] = $userID;
        $postedData['created_at'] = date('Y-m-d H:i:s');
        $postedData['attempt'] = 1;
        $postedData['mark'] = 0;
        // $this->_checkSQL($postedData);

        $this->Commons_mdl->insert('tbl_quiz_post', $postedData);
        $insertedID = $this->Commons_mdl->getInsertID();

        for ($i=0; $i < count($qid); $i++) { 
            $dtDetail['quiz_post_id'] = $insertedID;
            $dtDetail['question_id'] = $qid[$i];
            $dtDetail['answered'] = $answered[$i];
            $this->Commons_mdl->insert('tbl_quiz_post_detail', $dtDetail);
        }
        // echo "Sukses";
        $msg = '<div class="alert alert-success" role="alert">Selamat, Anda sudah mengerjakan Quiz. Silahkan tunggu untuk mendapatkan hasil evaluasinya.</div>';
        $this->session->set_flashdata('flashMsg', $msg);
        redirect('arabic/dashboard', 'refresh');
	}

	function check($quizPostID)
	{
		_isLoggedin();
		// $this->_checkUserPrevilege();

		$userID = 'user003';//_getUserInfo('ses_UserID');
		$token = 'Token123';
		$btnSubmit = $this->input->post('btn_submit');

		$sqlXXXXX = '
			SELECT *
			FROM tbl_quiz_post qpm
			INNER JOIN tbl_quiz_post_detail qpd ON qpm.id = qpd.quiz_post_id
			INNER JOIN tbl_question q ON q.id = qpd.question_id
			WHERE qpm.token = "'.$token.'" AND qpm.created_by = "'.$userID.'"
		';

		$sql = '
			SELECT *, q.points as quest_points, qpd.points as answered_points, qpm.created_by as done_by
			FROM tbl_quiz_post qpm
			INNER JOIN tbl_quiz_post_detail qpd ON qpm.id = qpd.quiz_post_id
			INNER JOIN tbl_question q ON q.id = qpd.question_id
			WHERE qpm.id = '.$quizPostID.'
		';

        $dtQuery = $this->Commons_mdl->customQuery($sql);
        // $this->_checkSQL($dtQuery->result_array());

        $data['token'] = $quizPostID;
        $data['done_by'] = $dtQuery->row()->done_by;
        $data['dtQuery'] = $dtQuery;
        $data['title'] = $this->title;
		$data['page_title'] = 'Quiz Check';
		$data['isi'] = 'quiz/v_check';
		// $data['jsFile'] = 'quiz/js_index';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function submit_check($quizPostID)
	{
		// _isLoggedin();
		// $this->_testPost();
		$this->_checkUserPrevilege();

		$qzCheckBy = _getUserInfo('ses_UserID');//'teacher003';//_get_user_id();
		$qzDoneBy = $this->input->post('done_by');
		$qid = $this->input->post('qid');
        $max_points = $this->input->post('total_points');
        $points = $this->input->post('points_qid');
        $correction = $this->input->post('correction_qid');
		
		// $postedData['token'] = $quizPostID;
        $postedData['checked_by'] = $qzCheckBy;
        $postedData['checked_at'] = date('Y-m-d H:i:s');
        $postedData['mark'] = round(array_sum($points) / $max_points * 100, 2);
        // $this->_checkSQL($postedData);

        $this->Commons_mdl->update('tbl_quiz_post', ['id' => $quizPostID], $postedData);

        for ($i=0; $i < count($qid); $i++) { 
            $dtDetail['points'] = $points[$i];
            $dtDetail['correct_answer'] = $correction[$i];
            $this->Commons_mdl->update('tbl_quiz_post_detail', ['quiz_post_id' => $quizPostID, 'question_id' => $qid[$i]], $dtDetail);
        }

        $msg = '<div class="alert alert-success" role="alert">Berhasil, Quiz sudah di review.</div>';
        $this->session->set_flashdata('flashMsg', $msg);
        redirect('arabic/dashboard', 'refresh');
	}
}