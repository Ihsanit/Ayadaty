<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Patient_c extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('patient_m');
		$this->load->library('form_validation');
		$this->load->helper(array('url','form','html'));

		
	}//end __construct function

	public function show_general_views($page)
	{
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('patient_views/'.$page);
		$this->load->view('template/footer');
	}//end show_general_views() method
	public function book_appointment()
	{

		$this->form_validation->set_rules('p_name','Name','required');
		$this->form_validation->set_rules('p_email','Email','required');
		$this->form_validation->set_rules('p_phone','Phone Number','required');
		$this->form_validation->set_rules('appt_date','Appointment Date','required');

		if($this->form_validation->run()===FALSE)
		{
			$this->show_general_views('book_appointment_v');
		}
		else
		{	
			$patient_data=array(
			'p_name' =>$this->input->post('p_name'),
			'p_email' =>$this->input->post('p_email'),
			'p_phone' =>$this->input->post('p_phone'),
			'p_address' =>"Sana'a",
			'p_gender' =>TRUE			
			);			
			$query=$this->patient_m->book_appt_db($patient_data);
			if($query)
			{
				echo 'your booking successfully';?>
				<script>alert('you are booking successfully');</script>
				<?php redirect('home_c/index');
			}			
			else
			{ 
				redirect('patient_c/book_appointment');
				die('Continue');
			}
		}//end if check
	}//end book appointment function
}//end Patient_c class
?>