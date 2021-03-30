<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller 
{
	private $title;

	function __construct()
	{
		parent ::__construct();
		$this->load->model('Commons_mdl');
		$this->title = 'Ruwaq Sibawiyah - Ruwais Arabic Club';
	}

	function index()
	{
		_isLoggedin();
		$this->_afterSignin();
	}

	function signin()
	{
		if(_getUserInfo('isLoggedin')){
			redirect('arabic');
		}

		$data['title'] = $this->title;
		$data['page_title'] = 'Ruwaq Sibawiyah';
		$data['sub_title'] = 'Ruwais Arabic Club';
		$data['flash'] = $this->session->flashdata('flashMsg');
		$this->load->view('templates/adminlte/v_signin', $data, FALSE);
	}

	function submit_login()
	{
		// $this->_testPost();
		// Process the form
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('userpass','Password','required');

		if($this->form_validation->run() == TRUE){
			$username = $this->input->post('username', TRUE);
			$userpass = $this->input->post('userpass', TRUE);

			$whereCondition = "(Usr_id = '$username' OR Email = '$username') AND Usr_pwd = sha1('$userpass') AND Usr_status = 1";
			// $cekLogin = $this->Commons_mdl->getData('tbl_account', ['Usr_id' => $username, 'Usr_pwd' => sha1($userpass)], null)->row();
			$cekLogin = $this->Commons_mdl->getData('tbl_account', $whereCondition, null)->row();
			// checkSQL($cekLogin);
			// checkPost();

			if(!empty($cekLogin)){
				$userID = $cekLogin->Usr_id;
				$userName = $cekLogin->Name;
				$userLevel = $cekLogin->Usr_level;
				$userPost = $cekLogin->Position;
				$userPhoto = $cekLogin->Photo;			
				// $roleID = $cekLogin->Role_id;

				// Create session
				$this->session->set_userdata('ses_UserID', $userID);
				$this->session->set_userdata('ses_Name', $userName);
				$this->session->set_userdata('ses_Level', $userLevel);
				$this->session->set_userdata('ses_Post', $userPost);
				$this->session->set_userdata('ses_Photo', $userPhoto);
				$this->session->set_userdata('isLoggedin', TRUE);

				// if($roleID == "admin"){
				if($userLevel == 5){
					$this->session->set_userdata('isAdmin', TRUE);
				}

				$this->_afterSignin();

			} else{

				$msg = '<div class="alert alert-warning" role="alert">Wrong Username / Password / Not activated</div>';
        		$this->session->set_flashdata('flashMsg', $msg);
				// redirect(base_url('auth/login'),'refresh');
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else{

			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function _afterSignin()
	{
		redirect('arabic');
	}
	
	function signup()
	{
		// redirect('pages/undercon');

		if(_getUserInfo('isLoggedin')){
			redirect('arabic');
		}

		$data['title'] = $this->title;
		$data['page_title'] = 'Ruwaq Sibawiyah';
		$data['sub_title'] = 'Ruwais Arabic Club';
		$data['flash'] = $this->session->flashdata('flashMsg');
		$this->load->view('templates/adminlte/v_signup', $data, FALSE);
	}

	function submit_signup()
	{
		// checkPost();

		//--Validasi:
		$this->form_validation->set_rules('fullname', 'Fullname', 'required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_account.Email]');
		$this->form_validation->set_rules('username', 'User Name / ID', 'required|is_unique[tbl_account.Usr_id]');
		$this->form_validation->set_rules('userpass', 'Password', 'required|trim|min_length[5]|matches[userpass2]');
		$this->form_validation->set_rules('userpass2', 'Confirm Password', 'required');

		$this->form_validation->set_message('valid_email', 'Wrong {field} format.');
		$this->form_validation->set_message('is_unique', 'Same {field} id has been registered. Please use another.');

		if($this->form_validation->run() == TRUE){
			$postedData['Usr_id'] = $this->input->post('username', TRUE);
			$postedData['Name'] = $this->input->post('fullname', TRUE);
			$postedData['Usr_pwd'] = sha1($this->input->post('userpass', TRUE));
			$postedData['Email'] = $this->input->post('email', TRUE);
			$postedData['Position'] = "user";
			$postedData['Usr_level'] = "1";
			// 0=>Not Active (to be activate by Authorize Usr) | 1=>Active
			$postedData['Usr_status'] = 0;
			$postedData['Created_at'] = time();

			$this->Commons_mdl->insert('tbl_account', $postedData);
			$msg = '<div class="alert alert-success" role="alert">Registration completed, Please Login after account activated by Admin.</div>';
    		$this->session->set_flashdata('flashMsg', $msg);
			redirect(base_url('auth/login'),'refresh');
			// redirect($_SERVER['HTTP_REFERER']);
		}
		else{

			$msg= '<div class="alert alert-warning" role="alert"><strong>ERROR !!!,</strong>'.validation_errors().'</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function forgot()
	{
		redirect('webpages/undercon');
		
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

	function signout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function forbidden()
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

}
