<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MateriController extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
		$this->title = 'Ruwaq Sibawiyah - Ruwais Arabic Club'; // Ruwaq - Ruwais Arabic Club
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
		// redirect('webpages/undercon');
		_isLoggedin();

		$userID = _getUserInfo('ses_UserID');

		$dtQry = $this->Commons_mdl->getData('tbl_materi', null, 'uid DESC');
		// checkSQL($dtQry->result());
		$data['dtQry'] = $dtQry;
        $data['title'] = $this->title;
        $data['page_title'] = 'List Materi';
        $data['flash'] = $this->session->flashdata('flashMsg');
		$data['isi'] = 'materi/v_index';
		$data['jsFile'] = 'materi/js_materi';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function create()
	{
		$this->_checkUserPrevilege();

		$data['title'] = $this->title;
		$data['page_title'] = "Tambah Materi Bahasa Arab";

        $data['flash'] = $this->session->flashdata('flashMsg');
		$data['isi'] = 'materi/v_form_tambah';
		$data['jsFile'] = 'materi/js_tambah';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function _tambahValidation($updateID = null)
	{
		if($updateID == NULL){
			$this->form_validation->set_rules('judul','Judul Artikel','required|max_length[255]|is_unique[tbl_materi.Title]');	
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

	        $this->Commons_mdl->insert('tbl_materi', $postedData);
            $msg = '<div class="alert alert-success" role="alert">New data created</div>';
            $this->session->set_flashdata('flashMsg', $msg);
            redirect('materi', 'refresh');	
		}
		else{
			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			redirect('materi/tambah', 'refresh');
			// redirect($_SERVER['HTTP_REFERER']);			
		}

	}

	function view($titleSlug)
	{
		//-- Libraries:
		$this->load->model('Commons_mdl');

		$dtArtikel = $this->Commons_mdl->getData('tbl_materi', ['URL' => $titleSlug], null)->row();

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