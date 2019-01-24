<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//the heplers(url,form) loaded in autoload file instead here loaded		
		$this->load->library(array('form_validation'));
		$this->load->model('user_m');
	}//end __construct function

	public function show_general_views($page)
	{
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('user_views/'.$page);
		$this->load->view('template/footer');
	}//end show_general_views() method

	public function signup()
	{	
		//-------------------------rules-------------------------
		$this->form_validation->set_rules('u_username','Username','required|min_length[1]|max_length[20]|is_unique[user.u_username]');
		$this->form_validation->set_rules('u_email','Email','required|valid_email|is_unique[user.u_email]');
		$this->form_validation->set_rules('u_password','Password','required');
		$this->form_validation->set_rules('u_cpassword','Confirm Password','required|matches[u_password]');
		if($this->form_validation->run()===FALSE)
		{
			$this->show_general_views('signup_v');
		}
		else
		{
			$enc_password=md5($this->input->post('u_password'));
			$this->user_m->signup_db($enc_password);
			$this->session->set_flashdata('user_signedup','You are signedup successfully and can login');
			redirect('home_c/index');
			die('Continue');
		}//end if check
		
	}//end index function

	public function login()
	{
		$this->form_validation->set_rules('u_email','Email','required|valid_email');
		$this->form_validation->set_rules('u_password','Password','required');
		if($this->form_validation->run()===FALSE)
		{
			$this->show_general_views('login_v');
		}
		else
		{
			$enc_password=md5($this->input->post('u_password'));
			$this->session->set_flashdata('user_loggedin','You are loginned successfully');
			redirect('home_c/index');
			die('Continue');
		}//end if check

	}//end login function


}//end Home_c class
?>