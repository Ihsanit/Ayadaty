<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------User Controller--------------------- */

class User_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_m','user_obj');
		$this->load->model('Doctor_m','doctor_obj');
		$this->load->library(array('form_validation','Doctor_User_lib'));
		$this->load->helper(array('form','url','html'));
		
	}#end _construct function

	public function signup($page='signup')
	{
		try
		{
			if(!file_exists(APPPATH.'/views/'.$page.'.php')):
				show_404();
			endif;
			$this->form_validation->set_rules('u_username','Username','trim|required');
			$this->form_validation->set_rules('u_email','Email','trim|required|callback_check_email_exists');
			$this->form_validation->set_rules('u_password','Password','trim|required');
			$this->form_validation->set_rules('u_cpassword','Confirm Password','trim|required|matches[u_password]');
			
			if($this->form_validation->run()===FALSE)
			{
			
				$this->load->view('template/header');
				$this->load->view($page);
				$this->load->view('template/footer');
			}
			else
			{
				$u_email=$this->security->xss_clean($this->input->post('u_email'));
				$enc_password=$this->security->xss_clean($this->input->post('u_password'));
				$data=array(
							'u_username'	=>$this->security->xss_clean($this->input->post('u_username')),
							'u_email'		=>$u_email,
							'u_password'	=>$enc_password			
							);
				$u_data=$this->user_obj->insert_user($data);
				if($u_data):
					$this->session->set_flashdata('user_registered','سجلت حساب بنحاح');
					//get user id 
					$is_doctor=$this->doctor_user_lib->get_doctor($u_email);
					$is_session_created=$this->doctor_user_lib->create_session($u_email,$enc_password,$is_doctor);
					if($is_session_created):
						redirect('doctor_c/show_doctors');
					endif;
				else:
					redirect('user_c/signup');
				endif;
				//die('Continue');
			}//end if check
		}//end try
		catch(Exception $err)
	    {
	        log_message("error", $err->getMessage());
	        return show_error($err->getMessage());
	    }//end catch

	}//end function signup($page='signup')
	

	public function login($page='login')
	{

		if(!file_exists(APPPATH.'/views/'.$page.'.php')):
			show_404();
		endif;
		$this->form_validation->set_rules('u_email','البريد الالكتروني','trim|required|valid_email|callback_check_email_exists_login');
		$this->form_validation->set_rules('u_password','كلمة المرور','trim|required|callback_check_password_exists_login');
		if($this->form_validation->run()===FALSE)
		{
			$this->load->view('template/header');
			$this->load->view($page);
			$this->load->view('template/footer');
		}
		else
		{
			$u_email=$this->security->xss_clean($this->input->post('u_email'));
			$u_password=$this->security->xss_clean($this->input->post('u_password'));
			//get user id 
			$is_doctor=$this->doctor_user_lib->get_doctor($u_email);
			$is_session_created=$this->doctor_user_lib->create_session($u_email,$u_password,$is_doctor);
			if($is_session_created):				
				$this->session->set_flashdata('user_loggedin','تم تسجيل دخول ينجاح يمكنك اكمال او تعديل بياناتك');
				redirect('doctor_c/register_doctor');
			else:
				$this->session->set_flashdata('login_failed','Login is invalid');
				redirect('user_c/login');
			endif;//end if check if user is found in database

		}//end if

	}//end function index($page='home')
	public function logout()
	{
		$this->doctor_user_lib->destroy_session();
		//set a message
		$this->session->set_flashdata('user_loggedout','تم تسجلي الخروج');
		redirect('user_c/login');
	}//end logout function

	public function check_email_exists_login($email)
	{
		$query=$this->form_validation->set_message('check_email_exists_login','البريد الالكتروني او كلمة المرور ليس صحيح.');
		if($this->user_obj->check_email_exists_login_db($email))
		{
			return true;
		}
		else
		{
			return false;
		}//end if

	}//end check_email_exists function
	public function check_password_exists_login($password)
	{
		$query=$this->form_validation->set_message('check_password_exists_login','البريد الالكتروني او كلمة المرور ليس صحيح.');
		if($this->user_obj->check_password_exists_login_db($password))
		{
			return true;
		}
		else
		{
			return false;
		}//end if

	}//end check_email_exists function
	public function check_email_exists($email)
	{
		$query=$this->form_validation->set_message('check_email_exists','الايميل الحالي مستخدم،يرجى ادخال ايميل اخر.');
		if($this->user_obj->check_email_exists_db($email))
		{
			return true;
		}
		else
		{
			return false;
		}//end if

	}//end check_email_exists function

	
	
	
}//end User_c class