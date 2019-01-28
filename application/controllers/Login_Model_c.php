<?php
class Login_Model_c extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}//end __construct function
	public function show_general($page_title,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view('pages/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function
	public function login_model(){
		$data['page_name']='Login';
		$this->show_general('Login','model_login',$data);
	}
}