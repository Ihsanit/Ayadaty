<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Home Page Controller--------------------- */
/**
*  
*/
class Doctor_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}//end _construct function

	public function register_doctor($page='register_doctor_v')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('doctor_views/'.$page);
		$this->load->view('template/footer');

	}//end function index($page='home')
	public function show_doctors($page='doctors_v')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('doctor_views/'.$page);
		$this->load->view('template/footer');

	}//end function index($page='home')

	public function show_doctor_detail($page='doctor_detail')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('doctor_views/'.$page);
		$this->load->view('template/footer');

	}//end function index($page='home')
}
?>