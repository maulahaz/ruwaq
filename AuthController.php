<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller 
{

	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
	}

	public function index()
	{
		_isLoggedin();
		$this->_afterSignin();
	}

	public function signup()
	{
		redirect('pages/undercon');
		$submit = $this->input->post('submit', TRUE);
		// $email = $this->input->post('email', TRUE);
		// $username = $this->input->post('username', TRUE);

		// if($submit == "Cancel"){ redirect(base_url()); }

		if($submit == "Signup"){
			// echo "string";die();
			//--Validasi:
			$this->form_validation->set_rules('fullname', 'Fullname', 'required|min_length[5]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_member.Email]');
			$this->form_validation->set_rules('username', 'User Name / ID', 'required|is_unique[tbl_member.Usr_id]');
			$this->form_validation->set_rules('userpass', 'Password', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('userpass2', 'Repeat Password', 'matches[userpass]');

			$this->form_validation->set_message('valid_email', 'Wrong {field} format.');
			$this->form_validation->set_message('is_unique', 'Same {field} id has been registered. Please use another.');

			if($this->form_validation->run() == TRUE){
				$postedData['Usr_id'] = $this->input->post('username', TRUE);
				$postedData['Name'] = $this->input->post('fullname', TRUE);
				$postedData['Usr_pwd'] = sha1($this->input->post('userpass', TRUE));
				$postedData['Email'] = $this->input->post('email', TRUE);
				$postedData['Role_id'] = "member";
				$postedData['isActive'] = 1;
				$postedData['Status_data'] = 'active';
				// $postedData['Updated_dtm'] = time();

				$this->load->model('Members_mdl');
				$this->Members_mdl->_insert($postedData);
				$flash_msg = "Registration completed, Please Login";
				$value= '<div class="alert alert-success text-center" style="margin-top:10px; font-weight: bold; color: red;" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('signin', $value);
				redirect('auths/signin');
			}
		}

		$data['title'] = "Resister - Taxibook";
		$data['page_title'] = "Account Resister";
		$data['flash'] = $this->session->flashdata('signin');
		$this->load->view('templates/v_signup', $data, FALSE);
	}

	public function signin()
	{
		if(_getUserInfo('isLoggedin')){
			redirect('arabic');
		}

		$data['page_title'] = 'Belajar Bahasa Arab';
		$data['flash'] = $this->session->flashdata('flashMsg');
		$this->load->view('templates/adminlte/v_signin', $data, FALSE);
	}

	public function signin_exe()
	{
		// $this->_testPost();
		// Process the form
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('userpass','Password','required');

		if($this->form_validation->run() == TRUE){
			$username = $this->input->post('username', TRUE);
			$userpass = $this->input->post('userpass', TRUE);

			$cekLogin = $this->Commons_mdl->getData('tbl_account', ['Usr_id' => $username, 'Usr_pwd' => sha1($userpass)], null)->row();
			// print_r($cekLogin);die();

			if($cekLogin){
				$userID = $cekLogin->Usr_id;
				$userName = $cekLogin->Name;
				$roleID = $cekLogin->Role_id;			
				
				// Create session
				$this->session->set_userdata('ses_UserID', $userID);
				$this->session->set_userdata('ses_Name', $userName);
				$this->session->set_userdata('ses_Role_id', $roleID);
				$this->session->set_userdata('isLoggedin', TRUE);
				if($roleID == "admin"){
					$this->session->set_userdata('isAdmin', TRUE);
				}

				$this->_afterSignin();

			} else{

				$msg = '<div class="alert alert-warning" role="alert">Wrong Username / Password</div>';
        $this->session->set_flashdata('flashMsg', $msg);
				// redirect(base_url('auth/login'),'refresh');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	protected function _afterSignin()
	{
		redirect('arabic');
	}

	function xxchangesha1($pass)
	{
		echo sha1($pass);
	}

	function forgot()
	{
		if(_getUserInfo('isLoggedin')){
			redirect('pages/dashboard');
		}

		$this->load->model('Commons_mdl');

		$submit = $this->input->post('submit', TRUE);

		if($submit == "Submit")
		{
			$this->form_validation->set_rules('email','Email','required|valid_email');

			$this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');

			if($this->form_validation->run() == TRUE)
			{
				$email = $this->input->post('email', TRUE);
				$userData = $this->Commons_mdl->getData('tbl_users',['Email'=>$email])->row();
				// echo ($userData) ? 'return true' : 'return false';die();
				if($userData)
				{
					$newPassword = generate_random_string(10);
					$gotoSignin = base_url('auths/signin');
					$userID = $userData->Usr_id;
					$gotoChangePass = base_url('users/changepass');
					$postData['Usr_pwd'] = sha1($newPassword);

					$this->Commons_mdl->update('tbl_users',['Email'=>$email], $postData);

					$msgContent	= '<html><body>';
					$msgContent	.= '<h3 class="form-header">Your Account Resetted Successfully</h3>';
					$msgContent	.= '<p>Here is your account data:</p>';
					$msgContent	.= 'User ID : <strong>'.$userID.'</strong>';
					$msgContent	.= '<br>New Password : <strong>'.$newPassword.'</strong>';
					$msgContent	.= '<br><br>Please <strong>Signin</strong> with your new password through this <a href="'.$gotoSignin.'" target="_blank")>link</a>';
					$msgContent	.= '<br>Then after signin, you can <strong>Change your new password</strong> through this <a href="'.$gotoChangePass.'" target="_blank")>link</a>';
					$msgContent	.= '</body></html>';
					// echo $msgContent;
					// exit();
					$isSent = $this->_sendEmail($email, $msgContent);
					if($isSent){
						$msg= '<p class="alert alert-success" role="alert">Resetted password has been sent to your email address.</p>';
						$this->session->set_flashdata('flashMsg', $msg);
						// redirect('auths/signin','refresh');
					}else{
						$msg= '<p class="alert alert-warning" role="alert">Error during sending email. Please contact Administrator.</p>';
						// $this->session->set_flashdata('flashMsg', $msg);
						
					}
					redirect('auths/signin','refresh');
				}
				else
				{
					$msg= '<p class="alert alert-warning" role="alert">Email is not registered in the system</p>';
					$this->session->set_flashdata('flashMsg', $msg);
					redirect('auths/forgot','refresh');
				}
			}
			//IF VALIDATION IS ERROR:
			else{
				$this->session->set_flashdata('flashMsg', validation_errors());
			}

		}

		$data['title'] = "Forgot Password - ".getProfile('Web_name');
		$data['headline'] = "Forget password";
		$data['flashMsg'] = $this->session->flashdata('flashMsg');
		$this->load->view('templates/v_forgot', $data, FALSE);
	}

	function forgot_bak()
	{
		redirect('pages/undercon');
		$this->load->model('Users_mdl');
		$submit = $this->input->post('submit', TRUE);

		if($submit == "Submit"){
			//--Testing---
			// $email = $this->input->post('email', TRUE);
			// $phone = $this->input->post('phone', TRUE);
			// $birthDate = $this->input->post('birth_date', TRUE);
			// $birthDate_conv = date("Y-m-d",strtotime($birthDate));
			// echo $email."-".$phone."-".$birthDate_conv;
			// echo "<br>";
			// $checkForgot = $this->Users_mdl->checkForgot($email, $phone, $birthDate_conv);
			// echo $this->db->last_query();
			// echo "<br>";
			// echo "<pre>";
			// print_r ($checkForgot);
			// echo "</pre>";
			// die();
			//--eof

			// Process the form
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('phone','Phone','required');
			$this->form_validation->set_rules('birth_date','Birth Date','required');
			//
			$this->form_validation->set_message('required', '{field} Must be fill.');
			$this->form_validation->set_message('valid_email', 'Wrong {field} format.');
			//
			if($this->form_validation->run() == TRUE){
				$email = $this->input->post('email', TRUE);
				$phone = $this->input->post('phone', TRUE);
				$birthDate = $this->input->post('birth_date', TRUE);
				$birthDate_conv = date("Y-m-d", strtotime($birthDate));

				//--Method for Preventing form resubmit
				// $frm_timestamp = $this->input->post('frm_timestamp', TRUE);
				// $this->session->set_userdata('ses_frm_timestamp', $frm_timestamp);
				// $ses_frm_timestamp_db = $this->session->all_userdata();
				// $ses_frm_timestamp_x = $ses_frm_timestamp_db['ses_frm_timestamp'];
				// if($frm_timestamp == $ses_frm_timestamp_x){
				// 	echo "not same yaah".'<br>';
				// 	return;
				// }
				
				//-Validasi data forgot
				$checkForgot = $this->Users_mdl->checkForgot($email, $phone, $birthDate_conv);

				if($checkForgot){
					$getUserData = $this->Users_mdl->get_where_custom('Email', $email)->row();
					$userID = $getUserData->Usr_id;
					$newPassword = generate_random_string(10);
					$gotoSignin = base_url('auths/signin');
					$gotoChangePass = base_url('profile/changepass');
					//--Test
					// echo "<pre>";
					// print_r ($getUserData);
					// echo "</pre>";
					// echo $userID."--".$newPassword."--".sha1($newPassword);die();
					//--eof
					$postedData['Usr_pwd'] = sha1($newPassword);
					// $postedData['Email'] = $email;
					// $postedData['isActive'] = '1';
					// $postedData['Message_code'] = '';
					// $postedData['Updated_by'] = $email;
					// $postedData['Updated_dtm'] = time();
					$whereArray = array('Email' => $email);
					$this->Users_mdl->_update_where($whereArray, $postedData);	
					
					$outputHTML	= '<html><body>';
					$outputHTML	.= '<h3 class="form-header">Your Account Resetted Successfully</h3>';
					$outputHTML	.= '<p>Here is your account data:</p>';
					$outputHTML	.= 'User ID : <strong>'.$userID.'</strong>';
					$outputHTML	.= '<br>New Password : <strong>'.$newPassword.'</strong>';
					$outputHTML	.= '<br><br>Please <strong>Signin</strong> with your new password through this <a href="'.$gotoSignin.'" target="_blank")>link</a>';
					$outputHTML	.= '<br>Then <strong>Change your new password</strong> through this <a href="'.$gotoChangePass.'" target="_blank")>link</a>';
					$outputHTML	.= '</body></html>';
					echo $outputHTML;
					return;

					// $resettedDataAccount['user_id'] = $userID;
					// $resettedDataAccount['new_password'] = $newPassword;

					// redirect(base_url('auths/resettedaccount/'.$resettedDataAccount));
					// $resettedDataAccount['title'] = "Forgot - Taxibook";
					// $resettedDataAccount['page_title'] = "Forgot Password";
					// $this->load->view('templates/v_forgot', $resettedDataAccount, FALSE);

				} else{

					$flash_msg = "Wrong Data Verification";
					$value= '<p style="color: red;">'.$flash_msg.'</p>';
					$this->session->set_flashdata('verify', $value);

					redirect(base_url('auths/forgot'),'refresh');
				}
			}
		}

		$data['title'] = "Forgot - Taxibook";
		$data['page_title'] = "Forgot Password";
		$data['flash'] = $this->session->flashdata('verify');
		$this->load->view('templates/v_forgot', $data, FALSE);
	}	

	function resettedaccount($data)
	{
		redirect('pages/undercon');
		$userID = $data['user_id'];
		$newPassword = $data['new_password'];

		// $data['title'] = "Reseted Account - Taxibook";
		// $data['page_title'] = "Reset Password";
		$outputHTML	= '<html><body>';
		$outputHTML	.= '<h3 class="form-header">Reset Your Account</h3>';
		$outputHTML	.= '<p>Here is your account :</p>';
		$outputHTML	.= 'User ID : '.$userID;
		$outputHTML	.= '<br>New Password : '.$newPassword;
		$outputHTML	.= '<br><br><p>Please change your new password through this <a href="'.$gotoChangePass.'" target="_blank")>Link</a></p>';
		$outputHTML	.= '</body></html>';
		echo $outputHTML;
	}

	public function signout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function forbidden()
	{
		$appName = 'ORCApark';
		$data['appName'] = $appName;
		$data['title'] = 'Forbidden - '.$appName;
		$this->load->view('templates/v_forbidden', $data, FALSE);	
	}

	function _sendEmail($toEmail, $msg)
	{
		$this->load->library('email');
		// $this->load->config('email_orca');
		$config = array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'mail.orcapark.com',
		  'smtp_port' => 465,
		  'smtp_crypto' => 'ssl',
		  'smtp_user' => 'tickets@orcapark.com',
		  'smtp_pass' => 'Moon-2005',
		  'mailtype' => 'html',
		  // 'charset'   => 'utf-8',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
		  //'smtp_timeout' => '4', //in seconds
		);

		$this->email->initialize($config); //<== Not req if Config file kept separate place
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$this->email->from('tickets@orcapark.com', 'ORCA Entertainment'); 
        $this->email->to($toEmail);
        $this->email->subject('RESET PASSWORD'); 
        // $this->email->attach($filename);
        // $this->email->attach($filename, "inline");
        $this->email->message($msg);

        //Send mail 
        if($this->email->send()){
        	return true;
        } else{
        	show_error($this->email->print_debugger());
        	return false; 
        }
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

}
