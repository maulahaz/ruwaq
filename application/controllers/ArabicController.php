<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArabicController extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
	}

	function index()
	{
		redirect(base_url('arabic/dashboard'));
	}

	function dashboard()
	{
		_isLoggedin();

		$userID = _getUserInfo('ses_UserID');

		$dtMateri = $this->Commons_mdl->getData('tbl_artikel', ['Category' => 'Belajar'], 'uid DESC');
        $dtQuiz = $this->Commons_mdl->getData('tbl_quiz', null, 'id DESC');
        
        if(_getUserInfo('ses_Post') == 'Teacher')	{
	        $sql = '
	        	SELECT *, qz.id as quiz_id, qp.id as quiz_post_id
	            FROM tbl_quiz qz
	            JOIN tbl_quiz_post qp ON qp.token = qz.token 
	        ';
        }else{
	        $sql = '
	        	SELECT *, qz.id as quiz_id, qp.id as quiz_post_id
	            FROM tbl_quiz qz
	            JOIN tbl_quiz_post qp ON qp.token = qz.token 
	            WHERE qp.created_by = "'.$userID.'"
	        ';
        }

        $dtResult = $this->Commons_mdl->customQuery($sql);
        // echo $this->Commons_mdl->lastQuery();die();
        // $this->_checkSQL($dtResult->result_array());
        $data['page_title'] = 'Belajar Bahasa Arab';
        $data['flash'] = $this->session->flashdata('flashMsg');
		$data['boxTitle1'] = 'List Materi';
		$data['boxTitle2'] = 'List Quiz';
		$data['boxTitle3'] = 'Hasil Quiz';
		$data['dtMateri'] = $dtMateri;
		$data['dtQuiz'] = $dtQuiz;
		$data['dtResult'] = $dtResult;
		$data['isi'] = 'arabic/v_dashboard';
		$data['jsFile'] = 'arabic/js_dashboard';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}	

	function _quizForMe($userID)
    {
        $sqlQuiz = '
            SELECT * 
            FROM tbl_quiz 
            WHERE FIND_IN_SET("'.$userID.'", quiz_for)
        ';

        $dtQuizForMe = $this->commonsModel->_customQuery($sqlQuiz);
        // echo $this->commonsModel->_lastQuery();

        return $dtQuizForMe;     
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