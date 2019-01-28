<?php
class Patient_c extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Patient_m');
		$this->load->library('form_validation');
		$data['page_name']='Book Your Appointment';
	}//end __construct function
	public function show_general($page_title,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view('patient_pages/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function
	public function book_appointment(){
		$data['page_name']='Book Your Appointment';
		$this->form_validation->set_rules('p_name','Name','required');
		$this->form_validation->set_rules('p_email','Email','required');
		$this->form_validation->set_rules('p_phone','Phone Number','required');
		$this->form_validation->set_rules('appt_date','Appointment Date','required');

		if($this->form_validation->run()===FALSE){
			$this->show_general('Book Your Appointment','book_appointment',$data);
		}
		else{			
			$this->session->set_flashdata('user_booked_appt','You are booked appointment successfully');
			redirect('services_c/index');
			die('Continue');
		}//end if check
	}//end register function
	public function create_patient(){
	
		if(!$this->session->userdata('logged_in')):
			redirect('user_c/login');
		endif;
		//---------------------------check validation fields---------------------
		$this->form_validation->set_rules('d_name',"Doctor's Name",'required');
		$this->form_validation->set_rules('d_email',"Doctor's Email",'required');
		$this->form_validation->set_rules('d_address',"Doctor's Address",'required');
		$this->form_validation->set_rules('d_phone',"Doctor's Phone",'required');
		$this->form_validation->set_rules('d_gender',"Doctor's Gender",'required');
		$this->form_validation->set_rules('d_qualifier',"Doctor's Qualifier",'required');
		$this->form_validation->set_rules('d_employ_date',"Doctor's Emplyed date",'required');
		$this->form_validation->set_rules('d_speciality_id',"Doctor's Speciality",'required');
		$this->form_validation->set_rules('d_salary',"Doctor's Salary",'required');

		//------------------------check result of validation-------------------------
		if($this->form_validation->run()===FALSE){
			$data['page_name']='Create Patient';
			$this->show_general('Create Patient','create_patient',$data);
		}
		else{
			$this->Patient_m->insert_patient();
			die('continue');
		}

	}//end create_patient function

	 }//end Patient_c class