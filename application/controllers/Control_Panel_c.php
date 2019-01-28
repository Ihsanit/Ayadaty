<?php
class Control_Panel_c extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}//end __construct function
	public function show_general($page_title,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view('control_panel/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function
	public function index(){
		if(!$this->session->userdata('logged_in')):
			redirect('user_c/login');
		endif;		
		$data['page_name']='Control Panel of Admin';
		//$this->show_general('Control Panel of Admin','admin_nav',$data);
		//$this->load->view('templates/header');
		//$this->load->view('control_panel/sidebar',$data);
		//$this->load->view('templates/footer');

		$this->load->view('admin_panel/admin_header');
		$this->load->view('admin_panel/admin_sidebar');
		$this->load->view('admin_panel/admin_content');
		$this->load->view('admin_panel/admin_footer');

	}

	
}