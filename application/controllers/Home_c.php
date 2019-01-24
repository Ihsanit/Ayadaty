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
<<<<<<< HEAD
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('home');
		$this->load->view('template/footer');
=======
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
>>>>>>> 2716a867aae99b003d2a40f8149f08f5749765ea
	}//end index function


}//end Home_c class
?>