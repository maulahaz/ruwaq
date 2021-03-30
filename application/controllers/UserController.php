<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
		$this->title = 'Ruwaq Sibawiyah - Ruwais Arabic Club'; // Ruwaq - Ruwais Arabic Club
	}

	function index()
	{
		redirect('webpages/manage');
	}

	function profile()
	{
		_isLoggedin();

		$userID = _getUserInfo('ses_UserID');

		$dtEdit = $this->Commons_mdl->getData('tbl_account', ['Usr_id' => $userID], null)->row_array();
		// checkSQL($dtEdit);

		$data['dtEdit'] = $dtEdit;
		$data['title'] = $this->title;
		$data['flash'] = $this->session->flashdata('flashMsg');
        $data['page_title'] = 'Profile';
		$data['isi'] = 'user/v_profile';
		// $data['jsFile'] = 'user/js_user';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function update($id)
	{
		// echo "string ".$id;
		_isLoggedin();

		$userID = _getUserInfo('ses_UserID');

		$this->_updateValidation();
		if($this->form_validation->run() == TRUE){
			$updateData['Name'] = $this->input->post('fullname', true);
			$updateData['Nickname'] = $this->input->post('nick_name', true);
			$updateData['Phone1'] = $this->input->post('phone', true);
			$updateData['Email'] = $this->input->post('email', true);
			$updateData['Address_grp'] = $this->input->post('address_group', true);
			$updateData['Address'] = $this->input->post('address', true);

			// if($_FILES["gambar"]["error"] != 4){
			// 	//--DELETE OLD IMAGE Klo ada di DB
			// 	if(! empty($dtDiri['Photo'])){
			// 		// Delete the image first before uploading new image
			// 		// $this->_delete_img($updateID);
			// 		$this->_deleteImage($userID);
			// 	}

			// 	//--UPLOAD NEW IMAGE:
			// 	$newName = time().'-'.$_FILES["gambar"]['name'];
	  //       	$imgFile = $this->_uploadFile('gambar', $newName);
			// 	if($imgFile){
			// 		// echo "Upload image ok";
			// 		$updateData['Photo'] = $imgFile;
			// 		$this->_generateThumbnail($imgFile);
			// 	}else{
			// 		// $uploadErr = array('error' => $this->upload->display_errors('<p class="alert alert-danger">','</p>'));
			// 		// $this->session->set_flashdata('img_err', $uploadErr);					
			// 		$data['errorUpload'] = array('error' => $this->upload->display_errors('<p class="alert alert-danger">','</p>'));
   //                  redirect($_SERVER['HTTP_REFERER']);
			// 	}
			// }

			// $this->Commons_mdl->update('tbl_account', ['Usr_id' => $userID], $updateData);
			$this->Commons_mdl->update('tbl_account', ['uid' => $id], $updateData);
            $msg = '<div class="alert alert-success" role="alert">Data has been updated.</div>';
            $this->session->set_flashdata('flashMsg', $msg);
            redirect('user/profile', 'refresh');
		}
		else{
			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			// redirect('arabic/dashboard', 'refresh');
			redirect($_SERVER['HTTP_REFERER']);	
		}

	}

	function changepass()
	{
		_isLoggedin();

		$data['title'] = $this->title;
		$data['flash'] = $this->session->flashdata('flashMsg');
        $data['page_title'] = 'Change Password';
		$data['isi'] = 'user/v_changepass';
		// $data['jsFile'] = 'user/js_user';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function submit_changepass()
	{
		// checkPost();
		_isLoggedin();

		$userID = _getUserInfo('ses_UserID');
		$currentPassword = $this->input->post('current_pwd', TRUE);
		$newPassword = $this->input->post('new_pwd', TRUE);

		$this->form_validation->set_rules('current_pwd','Current Password','required|trim');
		$this->form_validation->set_rules('new_pwd','New Password','required|min_length[3]|matches[confirm_pwd]');
		$this->form_validation->set_rules('confirm_pwd','Confirm New Password','required|min_length[3]|matches[new_pwd]');

		if($this->form_validation->run() == TRUE){
			$dtQry = $this->Commons_mdl->getData('tbl_account', ['Usr_id'=>$userID], NULL)->row();

			if(sha1($currentPassword) != $dtQry->Usr_pwd){
				$msg = '<div class="alert alert-warning" role="alert">Wrong Current Password</div>';
        		$this->session->set_flashdata('flashMsg', $msg);
				redirect($_SERVER['HTTP_REFERER']);
			} elseif ($currentPassword == $newPassword) {
				$msg = '<div class="alert alert-warning" role="alert">New Password can not be same with Current Password</div>';
        		$this->session->set_flashdata('flashMsg', $msg);
				redirect($_SERVER['HTTP_REFERER']);
			} else{
				// Password ok
				$postedData['Usr_pwd'] = sha1($newPassword);
				$this->Commons_mdl->update('tbl_account', ['Usr_id'=>$userID], $postedData);
				$msg = '<div class="alert alert-success" role="alert">Change Password success</div>';
        		$this->session->set_flashdata('flashMsg', $msg);
				redirect('user/profile');
			}
		}
		else{
			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			redirect($_SERVER['HTTP_REFERER']);
		}

	}

	function manage()
	{
		_isAdmin();

		$dtQry = $this->Commons_mdl->getData('tbl_account', null, null);

		$data['dtQry'] = $dtQry;
		$data['title'] = $this->title;
		$data['flash'] = $this->session->flashdata('flashMsg');
        $data['page_title'] = 'Manage User';
		$data['isi'] = 'user/v_manage';
		$data['jsFile'] = 'user/js_manage';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function edit_user($id)
	{
		_isAdmin();

		$submit = $this->input->post('btn_submit', true);

		$dtEdit = $this->Commons_mdl->getData('tbl_account', ['uid' => $id], null);

		if($submit == 'Submit') { $this->_submitEdit($id); }

		$data['dtEdit'] = $dtEdit->row_array();
		$data['title'] = $this->title;
		$data['flash'] = $this->session->flashdata('flashMsg');
        $data['page_title'] = 'Edit User';
		$data['isi'] = 'user/v_form_edit';
		// $data['jsFile'] = 'user/js_edit';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function _submitEdit($id)
	{
		// checkPost();
		$this->form_validation->set_rules('position','Position','required');
		$this->form_validation->set_rules('level','Level','required');
		$this->form_validation->set_rules('status','Status','required');

		if($this->form_validation->run() == TRUE){
			$updateData['Position'] = $this->input->post('position', true);
			$updateData['Usr_level'] = $this->input->post('level', true);
			$updateData['Usr_status'] = $this->input->post('status', true);

			$this->Commons_mdl->update('tbl_account', ['uid' => $id], $updateData);
            $msg = '<div class="alert alert-success" role="alert">Data has been updated.</div>';
            $this->session->set_flashdata('flashMsg', $msg);
            redirect('user/manage', 'refresh');
		}
		else{
			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			redirect($_SERVER['HTTP_REFERER']);	
		}
	}

	function delete_user()
	{
		redirect('webpages/undercon','refresh');
	}

	function activate_user($id)
	{
		redirect('webpages/undercon','refresh');
		_isAdmin();

		$dtEdit = $this->Commons_mdl->getData('tbl_account', ['uid' => $id], null);

		$data['dtEdit'] = $dtEdit;
		$data['title'] = $this->title;
		$data['flash'] = $this->session->flashdata('flashMsg');
        $data['page_title'] = 'Activate User';
		$data['isi'] = 'user/v_form_activation';
		// $data['jsFile'] = 'user/js_activation';	
		$this->load->view('templates/adminlte/v_general', $data, FALSE);
	}

	function _updateValidation($updateID = NULL)
	{
		// if($updateID == NULL){
			// $this->form_validation->set_rules('judul','Judul Artikel','required|max_length[255]|is_unique[tbl_artikel.Title]');	
			//--Klo Insert data, Gambar ga boleh kosong:
			// $this->form_validation->set_rules('gambar','Gambar','callback_file_required');
		// }else{
			// $this->form_validation->set_rules('judul','Judul Artikel','required|max_length[255]');
		// }
		$this->form_validation->set_rules('fullname','Fullname','required');
		$this->form_validation->set_rules('nick_name','Nickname','min_length[3]|max_length[15]');
		$this->form_validation->set_rules('phone','Phone','numeric');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('address_group','Address Group','required');
		$this->form_validation->set_rules('address','Address','required');
	}

	function _uploadFile($inputFileName, $newName = FALSE)
    {
        // echo $inputFileName;die();
        $storeLocation = './uploads/';

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
        $storeLocation = './uploads/';
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

    function _deleteImage($id)
	{
		// echo "string".$id;die();
		if(empty($id)){
			redirect('webpages/not_allowed');
		}

		//-Ngambil data dri db User
		$data = $this->Commons_mdl->getData('tbl_account',['Usr_id' => $id],null)->row();
		$imgName = $data->Photo;

		$filePath = './uploads/'.$imgName;
		$thumbPath = './uploads/thumb_'.$imgName;
		// echo $filePath;die();
		if(file_exists($filePath)){ unlink($filePath); }		
		if(file_exists($thumbPath)){ unlink($thumbPath); }		
	}

}