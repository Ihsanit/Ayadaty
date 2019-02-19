<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Home Page Controller--------------------- */
/**
*  
*/
class Admin_User_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}//end _construct function

	public function index()
	{
		/*if(!file_exists(APPPATH.'/views/admin_panel_views/'.$page.'.php')):
			show_404();
		endif;*/
		
		$this->load->view('admin_panel_views/general_views/admin_header');
		$this->load->view('admin_panel_views/general_views/admin_sidebar');
		/*$this->load->view('admin_panel_views/general_views/admin_content');*/
		$this->load->view('admin_panel_views/user_views/users_data');
		$this->load->view('admin_panel_views/general_views/admin_footer');

/*		$this->load->view('admin_panel_views/general_views/admin_general');
*/
	}//end function index
}//end Admin_User_c class