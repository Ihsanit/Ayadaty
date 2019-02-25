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
		try
		{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;

		$this->form_validation->set_rules('d_name','اسم الطبيب','trim|required');
		$this->form_validation->set_rules('d_email','البريد الالكتروني','trim|required|valid_email|callback_check_email_exists');
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
			$doctor_img=$this->upload_profile();
			$data=array(
			'd_name'				=>$this->security->xss_clean($this->input->post('d_name')),
			'd_email'				=>$this->security->xss_clean($this->input->post('d_email')),
			'd_phone'				=>preg_replace("/[^0-9]/","",$this->security->xss_clean($this->input->post('d_phone'))),
			'd_gender'				=>$this->security->xss_clean($this->input->post('d_gender')),
			'd_birth_date'			=>$this->security->xss_clean($this->input->post('d_birth_date')),
			'd_nationality'			=>$this->security->xss_clean($this->input->post('nationality')),
			'd_country_address'		=>$this->security->xss_clean($this->input->post('d_country_address')),
			'd_city_address'		=>$this->security->xss_clean($this->input->post('city')),	
			'd_street_address'		=>$this->security->xss_clean($this->input->post('d_street_address')),	
			'd_facebook_link'		=>$this->security->xss_clean($this->input->post('d_facebook_link')),
			'd_twitter_link'		=>$this->security->xss_clean($this->input->post('d_twitter_link')),
			'd_personal_img'		=>$doctor_img,
			'd_specialty_id'		=>$this->security->xss_clean($this->input->post('d_speciality')),	
			'd_password'			=>$this->security->xss_clean(md5($this->input->post('d_password')))	
			);
			$this->docotr_obj->insert_doctor($data);
			$this->session->set_flashdata('doctor_registered','تمت اضافة بيانات الطبيب الشخصية بنجاح');
			redirect('doctor_c/register_doctor');
			//die('Continue');
		}//end if
	}//end try
	catch(Exception $err)
    {
        log_message("error", $err->getMessage());
        return show_error($err->getMessage());
    }//end catch


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

	public function upload_profile()
	{
		if(isset($_FILES['d_img']['name']))
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
				return $doctor_img;
			}
			else
			{
				$data=array('upload_data'	=>	$this->upload->data());
				/*-------------------resize image------------------------*/
				/*$config=array(
					'image_library'=>'gd2',
					'source_image'=>'./assets/images/doctors/personal/'.$data['file_name'],
					'create_thumb'=>FALSE,
					'maintain_ratio'=>FALSE,
					'quality'=>'60%',
					'width'=>200,
					'height'=>200,
					'new_image'=>'./assets/images/doctors/personal/'.$data['file_name']
					);
				$this->load->library('image_lib',$config);
				$this->image_lib->resize();
*/
				$doctor_img=$_FILES['d_img']['name'];
				return $doctor_img;
			}//end if
		}

	}//end method upload_profile()
}
?>