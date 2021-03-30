<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArabicController extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
		$this->title = 'Ruwaq Sibawiyah - Ruwais Arabic Club'; // Ruwaq - Ruwais Arabic Club
	}

	function index()
	{
		redirect(base_url('arabic/dashboard'));
	}

	function _checkUserPrevilege()
	{
		$privilege = array("Administrator", "Teacher");
		$position = _getUserInfo('ses_Post');
		if (!in_array($position, $privilege)) {
			redirect('webpages/not_allowed');
		};
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
	            ORDER BY qz.id DESC, qz.created_at DESC
	        ';
        }else{
	        $sql = '
	        	SELECT *, qz.id as quiz_id, qp.id as quiz_post_id
	            FROM tbl_quiz qz
	            JOIN tbl_quiz_post qp ON qp.token = qz.token 
	            WHERE qp.created_by = "'.$userID.'"
	            ORDER BY qz.id DESC, qz.created_at DESC
	        ';
        }

        $dtResult = $this->Commons_mdl->customQuery($sql);
        // checkSQL($dtResult->result());

        $data['title'] = $this->title;
        $data['page_title'] = 'Belajar Bahasa Arab';
        $data['flash'] = $this->session->flashdata('flashMsg');
		$data['boxTitle1'] = 'List Materi';
		$data['boxTitle2'] = 'List Quiz';
		$data['boxTitle3'] = 'Hasil Quiz';
		$data['dtMateri'] = $dtMateri;
		$data['dtQuiz'] = $dtQuiz;
		$data['dtResult'] = $dtResult;
		$data['isi'] = 'arabic/v_dashboard-2';
		$data['jsFile'] = 'arabic/js_dashboard';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}	

	function create()
	{
		// echo "Create Materi";die();
		// _isLoggedin(); 
		$this->_checkUserPrevilege();

		//-- Variables:
		$userID = _getUserInfo('ses_UserID');
		// $updateID = $this->uri->segment(4);
		$submit = $this->input->post('submit', TRUE);

		//
		// if((!empty($updateID)) && ($submit != 'Submit')){
		// 	$data = $this->_getEditData($updateID);
		// }		

		if($submit == "Cancel"){ redirect('halamanku/artikel'); }

		if($submit == "Save")
		{
			// proces the form.
			//- Validation input first
			$this->_tambahValidation($updateID);
			// if ((!isset($_FILES['gambar'])) || $_FILES['gambar']['size'] == 0) {
	  //           $this->form_validation->set_rules('gambar','Gambar Artikel','required');
	  //       }

			if($this->form_validation->run() == TRUE){

				$postedData['Date_posted'] = time();
				$postedData['Author'] = $this->input->post('author', TRUE);
				$page_title = $this->input->post('judul_artikel', TRUE);
				$postedData['Title'] = $page_title;
				$postedData['Category'] = $this->input->post('kategori', TRUE);
				$postedData['Headline'] = $this->input->post('tagline', TRUE);
				$postedData['Keyword'] = 'keyword';//$this->input->post('keyword', TRUE);
				$postedData['URL'] = url_title(strtolower($page_title));
				$postedData['Content'] = $this->input->post('isi_artikel', TRUE);
				$postedData['Status'] = $this->input->post('status', TRUE);
				$postedData['Created_by'] = $userID;
				$postedData['Created_at'] = date("Y-m-d H:i:s");

				//--Tambah----------------------
				if(empty($updateID)){
			        if($_FILES['gambar']['name'] != ""){
			        	$newName = time().'-'.$_FILES["gambar"]['name'];
			        	$imgFile = $this->_uploadFile('gambar', $newName);
	                    if($imgFile){
	                        // echo "Upload image ok";die();
	                        $postedData['Picture'] = $imgFile;
	                        $this->_generateThumbnail($imgFile);

	                        $this->Commons_mdl->insert('tbl_artikel',$postedData);
	                        $msg = '<div class="alert alert-success" role="alert">New data created</div>';
	                        $this->session->set_flashdata('item', $msg);
	                        redirect('halamanku/artikel', 'refresh');

	                    }else{
	                        // echo "Upload image not ok";die();
	                        $data['errorUpload'] = array('error' => $this->upload->display_errors('<p class="alert alert-danger">','</p>'));
	                        // redirect($_SERVER['HTTP_REFERER']);
	                    }
			        }
				}
				//--Edit / Update------------------------
				else{
					if($_FILES['gambar']['name'] != ""){
						//--Upload the NEW Image:
						$newName = time().'-'.$_FILES["gambar"]['name'];
			        	$imgFile = $this->_uploadFile('gambar', $newName);
	                    if($imgFile){
	                        // echo "Upload image ok";die();
	                        $postedData['Picture'] = $imgFile;
	                        $this->_generateThumbnail($imgFile);
	                    }else{
	                        // echo "Upload image not ok";die();
	                        $data['errorUpload'] = array('error' => $this->upload->display_errors('<p class="alert alert-danger">','</p>'));
	                        // redirect($_SERVER['HTTP_REFERER']);
	                    }
	                    
			        }

			        //--Delete the OLD Image before uploading new image:
					$this->_delete_img($updateID);
					// die();
			        //--Update DB with or without updating Image:
			        $this->Commons_mdl->update('tbl_artikel', ['uid' => $updateID], $postedData); 
                    $msg = '<div class="alert alert-success" role="alert">Data has been updated</div>';
                    $this->session->set_flashdata('item', $msg);
                    redirect('halamanku/artikel', 'refresh');
				}
	
			}
		}

		// $data['updateID'] = $updateID;
		$data['title'] = $this->title;
		// $data['page_title'] = "Ruwaq - Ruwais Arabic Club";
		$data['page_title'] = "Tambah Materi Bahasa Arab";

		// if(empty($updateID)){
		// 	$data['pageTitle'] = "Tambah Materi Bahasa Arab";
		// }else{
		// 	$data['pageTitle'] = "Edit Materi Bahasa Arab";
		// }
		//
        $data['flash'] = $this->session->flashdata('flashMsg');
		// $data['isi'] = 'arabic/v_tambah_artikel';
		$data['isi'] = 'arabic/v_form_tambah';
		$data['jsFile'] = 'arabic/js_tambah';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function _tambahValidation($updateID = null)
	{
		if($updateID == NULL){
			$this->form_validation->set_rules('judul','Judul Artikel','required|max_length[255]|is_unique[tbl_artikel.Title]');	
			//--Klo Insert data, Gambar ga boleh kosong:
			$this->form_validation->set_rules('gambar','Gambar','callback_file_required');
		}else{
			$this->form_validation->set_rules('judul','Judul Artikel','required|max_length[255]');
		}
		
		$this->form_validation->set_rules('tagline','Tagline/Intro','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		$this->form_validation->set_rules('pageContent','Isi Artikel','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('author','Author','required');
	}

	function store()
	{
		// checkPost();
		$userID = _getUserInfo('ses_UserID');

		$this->_tambahValidation();

		if($this->form_validation->run() == TRUE){
			$postedData['Date_posted'] = time();
			$postedData['Author'] = $this->input->post('author', TRUE);
			$judul = $this->input->post('judul', TRUE);
			$postedData['Title'] = $judul;
			$postedData['Category'] = $this->input->post('kategori', TRUE);
			$postedData['Headline'] = $this->input->post('tagline', TRUE);	
			$postedData['Keyword'] = 'keyword';//$this->input->post('keyword', TRUE);
			$postedData['URL'] = url_title(strtolower($judul));
			$postedData['Content'] = $this->input->post('pageContent', TRUE);
			$postedData['Status'] = $this->input->post('status', TRUE);
			$postedData['Created_by'] = $userID;
			$postedData['Created_at'] = date("Y-m-d H:i:s");

			//--Tambah----------------------
		   if($_FILES['gambar']['name'] != ""){
	        	$newName = time().'-'.$_FILES["gambar"]['name'];
	        	$imgFile = $this->_uploadFile('gambar', $newName);
                if($imgFile){
                    // echo "Upload image ok";die();
                    $postedData['Picture'] = $imgFile;
                    $this->_generateThumbnail($imgFile);

                }else{
                    // echo "Upload image not ok";die();
                    $data['errorUpload'] = array('error' => $this->upload->display_errors('<p class="alert alert-danger">','</p>'));
                    redirect($_SERVER['HTTP_REFERER']);
                }
	        }

	        $this->Commons_mdl->insert('tbl_artikel', $postedData);
            $msg = '<div class="alert alert-success" role="alert">New data created</div>';
            $this->session->set_flashdata('flashMsg', $msg);
            redirect('arabic/dashboard', 'refresh');	
		}
		else{
			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			// redirect('arabic/dashboard', 'refresh');
			redirect($_SERVER['HTTP_REFERER']);			
		}

	}

	function view($titleSlug)
	{
		//-- Libraries:
		$this->load->model('Commons_mdl');

		$dtArtikel = $this->Commons_mdl->getData('tbl_artikel', ['URL' => $titleSlug], null)->row();

		if($dtArtikel != ''){ 
			$artikelID = $dtArtikel->uid; 			
		}else{ 
			$artikelID = NULL; 
		};
		
		$data['title'] = $this->title;
		$data['dtArtikel'] = $dtArtikel;//$qry;
		$data['page_title'] = 'Belajar Bahasa Arab';
	    $data['isi'] = 'arabic/v_view';
	    // $data['jsFile'] = 'arabic/js_view';
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function _uploadFile($inputFileName, $newName = FALSE)
    {
        // echo $inputFileName;die();
        $storeLocation = './uploads/materi/';

        //SET CONFIGURATION
        $config['upload_path']          = $storeLocation;//'./uploads/slider/';//
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '2400';
        $config['max_width']            = '3000';
        $config['max_height']           = '3000';
        // $config['overwrite']         = FALSE;
        // $config['encrypt_name'] 		= TRUE;
        $config['file_name']        	= $newName;

        //LOAD CONFIG TO LIBRARY
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        // UPLOADING
        if ($this->upload->do_upload($inputFileName)){
            // echo "Process OK";die();
            $uploadFile = $this->upload->data();
            $file_toDB = $uploadFile['file_name'];
            return $file_toDB;
        }else{
            return false;
        }
    }

	function _generateThumbnail($inputFileName)
    // function _generateThumbnail($inputFileName, $storeLocation = NULL)
    {
        $storeLocation = './uploads/materi/';
        //create thumbnail
        $config['image_library'] = 'gd2';
        $config['source_image'] = $storeLocation.$inputFileName;
        $config['new_image'] = $storeLocation.'thumb_'.$inputFileName;
        // $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 200; //- Ukuran ideal Thumbnail 200x200
        $config['height']       = 200; //- Ukuran ideal Thumbnail 200x200
        $config['thumb_marker'] = '';//without tambahan '_thumb'
        

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();             
    }

	function _getEditData($updateID)
	{
		$qry = $this->Commons_mdl->getData('tbl_artikel', ['uid' => $updateID], null);
		foreach ($qry->result() as $row) {
			$data['judul_artikel'] = $row->Title;
			$data['kategori'] = $row->Category;
			$data['tagline'] = $row->Headline;
			$data['isi_artikel'] = $row->Content;
			$data['author'] = $row->Author;
			$data['status'] = $row->Status;
			$data['gambar'] = $row->Picture;
			// $data['date_posted'] = $row->Date_posted;
			// $data['keyword'] = $row->Keyword;
			// $data['Created_by'] = $row->Created_by;
			// $data['Created_at'] = $row->Created_at;
			// $data['Updated_by'] = $row->Updated_by;
			// $data['Updated_at'] = $row->Updated_at;
		}
		if(!isset($data)){
			$data = "";
		}
		return $data;
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

    function file_required()
	{
		$this->form_validation->set_message('file_required', 'Gambar tidak boleh kosong');
	    if (empty($_FILES['gambar']['name']) || $_FILES['gambar']['size'] == 0) {
            return false;
        }else{
            return true;
        }
	}

}