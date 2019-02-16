<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Home Page Controller--------------------- */
/**
*  
*/
class User_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}//end _construct function

	public function signup($page='signup')
	{
		if(!file_exists(APPPATH.'/views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view($page);
		$this->load->view('template/footer');

	}//end function signup($page='signup')

	public function login($page='login')
	{
		if(!file_exists(APPPATH.'/views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view($page);
		$this->load->view('template/footer');

	}//end function index($page='home')
}//end User_c class