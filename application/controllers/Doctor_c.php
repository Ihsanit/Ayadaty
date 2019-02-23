<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**-------------------Home Page Controller--------------------- */
/**
*  
*/
class Doctor_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Doctor_m','docotr_obj');
		$this->load->library('form_validation');
		$this->load->helper(array('form','url','html'));

	}//end _construct function

	public function register_doctor($page='register_doctor_v')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;

		$this->form_validation->set_rules('d_name','اسم الطبيب','trim|required');
		$this->form_validation->set_rules('d_email','البريد الالكتروني','trim|required|callback_check_email_exists');
		/*$this->form_validation->set_rules('h_email','البريد الالكتروني','required|callback_check_email_exists');*/
		$this->form_validation->set_rules('d_phone','رقم التلفون','trim|required');
		$this->form_validation->set_rules('d_gender','نوع الطبيب','trim|required');
		$this->form_validation->set_rules('d_birth_date','تاريخ ميلاد الطبيب','trim|required');
		$this->form_validation->set_rules('nationality','جنسية الطبيب','trim|required');
		$this->form_validation->set_rules('d_country_address','عنوان دولة الطبيب','required');
		$this->form_validation->set_rules('city','عنوان مدينة الطبيب','trim|required');
		$this->form_validation->set_rules('d_street_address','عنوان شارع الطبيب','trim|required');
		$this->form_validation->set_rules('d_speciality','تخصص الطبيب','trim|required');
		$this->form_validation->set_rules('d_password','كلمة المرور','trim|required');
		$this->form_validation->set_rules('d_password_c','تأكيد كلمة المرور','trim|matches[d_password]|required');

		if($this->form_validation->run()===FALSE)
		{
			
			$this->load->view('template/header');
			$this->load->view('doctor_views/'.$page);
			$this->load->view('template/footer');
		}
		else
		{
			//------------------upload image of doctor  -------------------
			$config=array(
				'upload_path'=>'./assets/images/doctors/personal/',
				'allowed_types'=>'jpeg|jpg|png|gif',
				'max_size'=>2048,
				'max_width'=>500,
				'max_height'=>500,
				'remove_spaces'=>TRUE,
				);
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('d_img'))
			{
				$errors=array(
					'error'	=>	$this->upload->display_errors()
					);
				$doctor_img='noimg.png';
			}
			else
			{
				$data=array('upload_data'	=>	$this->upload->data());
				$doctor_img=$_FILES['d_img']['name'];
			}//end if
			$data=array(
			'd_name'				=>$this->input->post('d_name'),
			'd_email'				=>$this->input->post('d_email'),
			'd_phone'				=>$this->input->post('d_phone'),
			'd_gender'				=>$this->input->post('d_gender'),
			'd_birth_date'			=>$this->input->post('d_birth_date'),
			'd_nationality'			=>$this->input->post('nationality'),
			'd_country_address'		=>$this->input->post('d_country_address'),
			'd_city_address'		=>$this->input->post('city'),	
			'd_street_address'		=>$this->input->post('d_street_address'),	
			'd_facebook_link'		=>$this->input->post('d_facebook_link'),
			'd_twitter_link'		=>$this->input->post('d_twitter_link'),
			'd_personal_img'		=>$doctor_img,
			'd_specialty_id'		=>$this->input->post('d_speciality'),					
			);
			$this->docotr_obj->insert_doctor($data);
			$this->session->set_flashdata('doctor_registered','تمت اضافة بيانات الطبيب الشخصية بنجاح');
			redirect('doctor_c/register_doctor');
			//die('Continue');
		}


	}//end function index($page='home')
	public function show_doctors($page='doctors_v')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('doctor_views/'.$page);
		$this->load->view('template/footer');

	}//end function index($page='home')

	public function show_doctor_detail($page='doctor_detail')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;
		
		$this->load->view('template/header');
		$this->load->view('doctor_views/'.$page);
		$this->load->view('template/footer');

	}//end function index($page='home')
	/*----------------------check methods----------------------*/
	public function check_email_exists($email)
	{
		$query=$this->form_validation->set_message('check_email_exists','الايميل الحالي مستخدم،يرجى ادخال ايميل اخر.');
		if($this->docotr_obj->check_email_exists_db($email))
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