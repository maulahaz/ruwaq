<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// Halaman login
	function index(){
		$data['mytitle'] = "Login";
		$data['flash'] = $this->session->flashdata('login');
		$this->load->view('frontend/login', $data);
	}

	function register(){

		$submit = $this->input->post('submit', TRUE);
		// $email = $this->input->post('email', TRUE);
		// $username = $this->input->post('username', TRUE);

		if($submit == "Cancel"){ redirect(base_url()); }

		if($submit == "Submit"){
			//--Validasi:
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_account.Email]');
			$this->form_validation->set_rules('username', 'User Name / ID', 'required|is_unique[tbl_account.Usr_id]');
			$this->form_validation->set_rules('userpass', 'Password', 'required|trim|min_length[3]');

			$this->form_validation->set_message('valid_email', '{field} Format masih salah.');
			$this->form_validation->set_message('is_unique', '{field} Account sudah dipakai.');

			if($this->form_validation->run() == TRUE){
				$postedData['Usr_id'] = $this->input->post('username', TRUE);
				$postedData['Name'] = $this->input->post('username', TRUE);
				$postedData['Usr_pwd'] = sha1($this->input->post('userpass', TRUE));
				$postedData['Email'] = $this->input->post('email', TRUE);
				$postedData['Position'] = "user";
				$postedData['Usr_level'] = 1;
				$postedData['Usr_status'] = 1;
				$postedData['Created_at'] = time();

				$this->load->model('User_mdl');
				$this->User_mdl->_insert($postedData);
				$flash_msg = "Registrasi Sukses, Silahkan Login";
				$value= '<div class="alert alert-success text-center" style="margin-top:10px; font-weight: bold; color: red;" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('login', $value);
				redirect('login');
			}
		}

		$data['mytitle'] = "Registrasi Account";
		$data['flash'] = $this->session->flashdata('login');
		$this->load->view('frontend/register', $data);
	}

	function auth(){
		$this->form_validation->set_rules('userid', 'Email or User ID', 'required',
			array(	'required'		=> '%s masih kosong'));
		$this->form_validation->set_rules('userpass', 'Password', 'required',
			array(	'required'		=> '%s masih kosong'));	

		if($this->form_validation->run()){
			$userid = $this->input->post('userid');
			$userpass = $this->input->post('userpass');

			$this->load->model('User_mdl');
			$cekLogin = $this->User_mdl->login_2condition($userid, $userpass);
	        // $sqlx = $this->db->last_query();
	        // echo $sqlx;die();
			if($cekLogin){
				$userID = $cekLogin->Usr_id;
				$userName = $cekLogin->Name;
				$userLevel = $cekLogin->Usr_level;
				$userPost = $cekLogin->Position;
				$userPhoto = $cekLogin->Photo;				
				
				// Create session
				$this->session->set_userdata('ses_UserID', $userID);
				$this->session->set_userdata('ses_Name', $userName);
				$this->session->set_userdata('ses_Level', $userLevel);
				$this->session->set_userdata('ses_Post', $userPost);
				$this->session->set_userdata('ses_Photo', $userPhoto);
				$this->session->set_userdata('isLoggedin', TRUE);
				// $this->session->set_userdata('isAdmin', TRUE);

				//--Klo login setelah put things on cart/basket, akan di redirect ke cart lagi:
				$this->_attempt_cart_divert($userID);

				//--Klo login normal, langsung masuk ke halamanku: 
				redirect(base_url('halamanku'),'refresh');
			} else{
				// Jika TIDAK ada userdata maka redirect ke login
				$flash_msg = "User ID / Password salah";
				$value= '<div class="alert alert-warning text-center" style="margin-top:20px; font-weight: bold;color: red;" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('login', $value);
				// Redirect ke halaman login
				redirect(base_url('login'),'refresh');
			}				
		}
		else{
			$data['flash'] = $this->session->flashdata('login');
			$this->load->view('frontend/login', $data);
		}

	}

	public function submit_login(){
		// $post = $this->input->post();
		// echo "<pre>";
		// print_r ($post);
		// echo "</pre>";
		// die();

		// validasi
		$this->form_validation->set_rules('username', 'User Name', 'required',
			array(	'required'		=> '%s masih kosong'));
		$this->form_validation->set_rules('userpass', 'Password', 'required',
			array(	'required'		=> '%s masih kosong'));

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$userpass = $this->input->post('userpass');

			// prosess ke lib Simple_login
			$this->simple_login->login($username, $userpass);
		}
		else{
			$data['flash'] = $this->session->flashdata('login');
			$this->load->view('frontend/login', $data);
		}
	}

	public function logout(){
		// prosess ke lib Simple_login bag Logout
			$this->simple_login->logout();
	}

	function _attempt_cart_divert($userID){
		$this->load->model('Basket_mdl');
		$customer_session_id = $this->session->session_id;
		
		//-Check, ada/nggak Shopper_id=0 (blom login) tapi punya Session_id (udh naro blanjaan):
		$query = $this->Basket_mdl->getRecord(array('Shopper_uid' => 0, 'Session_id' => $customer_session_id), 'uid');

		$num_rows = $query->num_rows();
		//-Klo ada, update yg tadinya Shopper_id=0 --> Shopper_id=Loggedin_id
		if($num_rows > 0){
			$mysql_query = "UPDATE tbl_basket SET Shopper_uid = '$userID' WHERE Session_id = '$customer_session_id'";
			$this->Basket_mdl->_custom_query($mysql_query);
			//-Di balikin ke cart
			redirect('cart');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */