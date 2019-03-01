<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Hospitals Page Controller--------------------- */

class Hospital_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hospital_m');
		$this->load->model('Doctor_m','doctor_obj');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}//end _construct function

	public function register_hospital($page='register_hospital_v')
	{
		if(!file_exists(APPPATH.'/views/hospital_views/'.$page.'.php')):
			show_404();
		endif;

		$this->form_validation->set_rules('h_name','اسم المستشفى','required');
		$this->form_validation->set_rules('h_email','البريد الالكتروني','required');
		/*$this->form_validation->set_rules('h_email','البريد الالكتروني','required|callback_check_email_exists');*/
		$this->form_validation->set_rules('h_phone','رقم التلفون','required');
		$this->form_validation->set_rules('h_country_address','عنوان دولة المستشفى','required');
		$this->form_validation->set_rules('h_city_address','عنوان مدينة المستشفى','required');
		$this->form_validation->set_rules('h_street_address','عنوان شارع المستشفى','required');
		$this->form_validation->set_rules('h_detail','خلفية عن المستشفى','required');
		/*$this->form_validation->set_rules('h_img','صورة للمستشفى','required');
		$this->form_validation->set_rules('h_license_img','صورة ترخيص المستشفى','required');*/
		$specialty_data['specialties']=$this->doctor_obj->get_specialties();
		if($this->form_validation->run()===FALSE)
		{
			$this->load->view('template/header',$specialty_data);
			$this->load->view('hospital_views/'.$page);
			$this->load->view('template/footer');
		}
		else
		{
			//------------------upload image of hosptial & license -------------------
		/*	$config=array(
				'upload_path'=>'./assets/images/hospitals/',
				'allowed_types'=>'jpeg|jpg|png|gif',
				'max_size'=>2048,
				'max_width'=>500,
				'max_height'=>500,
				'remove_spaces'=>TRUE,
				);*/
				
/*
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('h_img'))
			{
				$errors=array(
					'error'	=>	$this->upload->display_errors()
					);
				$hospital_img='noimg.png';
			}
			else
			{
				$data=array('upload_data'	=>	$this->upload->data());
				$hospital_img=$_FILES['h_img']['name'];

			}*/
			$this->hospital_m->insert_hospital();
			//$this->session->set_flashdata('hospital_registered','تمت اضافة بيانات المستشفى بنجاح');
			//redirect('hospital_c/show_hospitals');
			die('Continue');
		}//end if check

	}//end function register_hospital($page='register_hospital_v')


	public function show_hospitals($page='hospitals_v')
	{
		if(!file_exists(APPPATH.'/views/hospital_views/'.$page.'.php')):
			show_404();
		endif;
		$specialty_data['specialties']=$this->doctor_obj->get_specialties();
		$this->load->view('template/header',$specialty_data);
		$this->load->view('hospital_views/'.$page);
		$this->load->view('template/footer');

	}//end function show_hospitals($page='hospitals_v')

	public function show_hospital_detail($page='hospital_detail')
	{
		if(!file_exists(APPPATH.'/views/hospital_views/'.$page.'.php')):
			show_404();
		endif;
		$specialty_data['specialties']=$this->doctor_obj->get_specialties();
		$this->load->view('template/header',$specialty_data);
		$this->load->view('hospital_views/'.$page);
		$this->load->view('template/footer');

	}//end function show_hospital_detail($page='hosptial_detail')

	/*----------------------check methods----------------------*/
	public function check_email_exists($email)
	{
		$query=$this->form_validation->set_message('check_email_exists','الايميل الحالي مستخدم،يرجى ادخال ايميل اخر.');
		if($this->hospital_m->check_email_exists_db($email))
		{
			return true;
		}
		else
		{
			return false;
		}//end if

	}//end check_email_exists function

}
?>