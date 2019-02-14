<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Hospitals Page Controller--------------------- */
/**
*  
*/
class Hospital_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}//end _construct function

	public function register_hospital($page='register_hospital_v')
	{
		if(!file_exists(APPPATH.'/views/hospital_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('hospital_views/'.$page);
		$this->load->view('template/footer');

	}//end function register_hospital($page='register_hospital_v')
	public function show_hospitals($page='hospitals_v')
	{
		if(!file_exists(APPPATH.'/views/hospital_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('hospital_views/'.$page);
		$this->load->view('template/footer');

	}//end function show_hospitals($page='hospitals_v')

	public function show_hospital_detail($page='hospital_detail')
	{
		if(!file_exists(APPPATH.'/views/hospital_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('hospital_views/'.$page);
		$this->load->view('template/footer');

	}//end function show_hospital_detail($page='hosptial_detail')
}
?>