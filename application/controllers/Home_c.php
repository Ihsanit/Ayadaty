<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Home Page Controller--------------------- */

class Home_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Doctor_m','doctor_obj');
	}//end function __construct()

	/**-------------------index function--------------------------*/
	public function index($page='home')
	{
		if(!file_exists(APPPATH.'/views/'.$page.'.php')):
			show_404();
		endif;
		$specialty_data['specialties']=$this->doctor_obj->get_specialties();
		$this->load->view('template/header',$specialty_data);
		$this->load->view($page);
		$this->load->view('template/footer');

	}//end function index($page='home')
}
?>