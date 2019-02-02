<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Home Page Controller--------------------- */

class Home_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}//end function __construct()

	/**-------------------index function--------------------------*/
	public function index($page='home')
	{
		if(!file_exists(APPPATH.'/views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view($page);
		$this->load->view('template/footer');

	}//end function index($page='home')
}
?>