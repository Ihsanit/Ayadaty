<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*This controller of home page functions 
*/
class Home_c extends CI_CONTROLLER{
	public function __construct(){
		parent::__construct();
	}//end __construct function
	public function show_page($page ='home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['page_name']=ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer');
		
		
	}//end index 


}//end Home_c class
?>