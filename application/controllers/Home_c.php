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
		$this->load->view('template/header');
		$this->load->view('template/footer');
	}//end index function


}//end Home_c class
?>