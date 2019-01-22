<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}//end __construct function

	public function index()
	{
		$this->load->view('template_views/header');
		$this->load->view('template_views/footer');
	}//end index function


}//end Home_c class
?>