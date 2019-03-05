<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|Doctor controller		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
class Doctor_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Doctor_m','doctor_obj');
		$this->load->model('User_m','user_obj');
		$this->load->model('Country_m','country_obj');
		$this->load->library('form_validation');
		$this->load->helper(array('form','url','html'));		
	}#end _construct function
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|register_doctor() function to register perosnal data of doctor		
|-------------------------------------------------------------------------------------------------------------------------------------
*/	
	public function register_doctor($page='register_doctor_v')
	{
		try
		{
			if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
				show_404();
			endif;

			$data['specialties']=$this->doctor_obj->get_specialties();
			$data['countries']=$this->country_obj->get_countries();
			$data['cities']=$this->country_obj->get_cities();
			/*
			|=========================================================================================================
			|#call check_validation_inputs() function to validate input fields of doctor personal dataform		
			|=========================================================================================================
			*/			
			$this->check_validation_inputs();	

			if($this->form_validation->run()===FALSE):			
				
				$this->load->view('template/header',$data);
				$this->load->view('doctor_views/'.$page,$data);
				$this->load->view('template/footer');

			else:

				$phone=$this->security->xss_clean($this->input->post('d_mobile'));
				$name=$this->security->xss_clean($this->input->post('d_name'));
				$email=$this->security->xss_clean($this->input->post('d_email'));
				$password=$this->security->xss_clean($this->input->post('d_password'));
				/*
				|=========================================================================================================
				|#call upload_profile() function to process file of doctor profile		
				|=========================================================================================================
				*/	
				$doctor_img=$this->upload_profile();
				/*
				|=========================================================================================================
				|#call full_doctor_data() function to full an array has sturcture of doctor table with form input fields data 		
				|=========================================================================================================
				*/
				$data=$this->full_doctor_data($phone,$name,$email,$password,$doctor_img);
				/*
				|=========================================================================================================
				|#send doctor's data to doctor model => insert_doctor() function 
				|=========================================================================================================
				*/
				$d_data=$this->doctor_obj->insert_doctor($data);
				/*
				|=========================================================================================================
				|#send user's data to user model => insert_user() function 
				|=========================================================================================================
				*/
				$userdata=array(
				'u_username'				=>$name,			
				'u_password'				=>$password,
				'u_email'					=>$email
				);				
				$u_data=$this->user_obj->insert_user($userdata);
				/*
				|=========================================================================================================
				|# Sure of inserting data in successful manner, show a feedback for user with 'Data are saved successful'
				|=========================================================================================================
				*/
				if($d_data && $u_data):
					$this->session->set_flashdata('doctor_registered','تمت اضافة بيانات الطبيب الشخصية بنجاح فيكمكن تسجيل دخول تكلميل بقية بيانتك' );			
					redirect('user_c/login');
				endif;#end if insert successful 
			endif;#end if run successfully
		}#end try

		catch(Exception $err)
	    {
	        log_message("error", $err->getMessage());
	        return show_error($err->getMessage());
	    }#end catch

	}#end function register_doctor()
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|show_doctors() function to show data of doctors		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	public function show_doctors($page='doctors_v')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;

		$data['specialties']=$this->doctor_obj->get_specialties();
		$this->load->view('template/header',$data);
		$this->load->view('doctor_views/'.$page);
		$this->load->view('template/footer');

	}//end function index($page='home')
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|show_doctor_detail() function to show detail doctor data		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	public function show_doctor_detail($page='doctor_detail')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;

		$specialty_data['specialties']=$this->doctor_obj->get_specialties();
		$this->load->view('template/header',$specialty_data);
		$this->load->view('doctor_views/'.$page);
		$this->load->view('template/footer');

	}//end function index($page='home')
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|edit_doctor() function to edit view registered doctordata  		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	public function edit_doctor($page='edit_doctor_v')
	{
		if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
			show_404();
		endif;
		if($this->session->userdata('logged_in')):
			$doctor_chosen=$this->session->userdata('u_email');
			$data['doctor']=$this->doctor_obj->get_doctor($doctor_chosen);
		endif;
		if(empty($data['doctor'])):
			show_404();
		endif;

		$data['specialties']=$this->doctor_obj->get_specialties();
		$data['countries']=$this->country_obj->get_countries();
		$data['cities']=$this->country_obj->get_cities();

		$this->load->view('template/header',$data);
		$this->load->view('doctor_views/edit_doctor_v',$data);
		$this->load->view('template/footer');

	}#end function edit_doctor()
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|update_doctor() function to update registered doctor data  		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	
	public function update_doctor($page='edit_doctor_v')
	{
		try
		{
			if(!file_exists(APPPATH.'/views/doctor_views/'.$page.'.php')):
				show_404();
			endif;

			$data['specialties']=$this->doctor_obj->get_specialties();		
			$data['countries']=$this->country_obj->get_countries();
			$data['cities']=$this->country_obj->get_cities();

			$logged_email=$this->session->userdata('u_email');
			$doctor=$this->doctor_obj->get_doctor($logged_email);
			/*
			|=========================================================================================================
			|#insure user upload new image or no		
			|=========================================================================================================
			*/	
			$doctor_img;
			if($_FILES['d_img']['name']!=""):
				$doctor_img=$this->upload_profile();
			else:
				$doctor_img=$this->input->post('old_d_img');
			endif;			

			$this->check_validation_inputs();
			
			if($this->form_validation->run()===FALSE):
				
				$this->load->view('template/header',$data);
				$this->load->view('doctor_views/'.$page,$data);
				$this->load->view('template/footer');			
			else:
			
				$phone;
				if($this->input->post('d_mobile')!=""):
					$phone=$this->security->xss_clean($this->input->post('d_mobile'));
				else:
					$phone=$this->security->xss_clean($this->input->post('old_d_mobile'));
				endif;
				//$phone=$this->security->xss_clean($this->input->post('d_mobile'));
				$name=$this->security->xss_clean($this->input->post('d_name'));
				$email=$this->security->xss_clean($this->input->post('d_email'));
				$password=$this->security->xss_clean($this->input->post('d_password'));
				$id=$this->security->xss_clean($this->input->post('d_id'));

				$data=$this->full_doctor_data($phone,$name,$email,$password,$doctor_img);
				/*
				|=========================================================================================================
				|#send doctor's data to doctor model => update_doctor() function 
				|=========================================================================================================
				*/
				$d_data=$this->doctor_obj->update_doctor($id,$data);

				$userdata=array(
				'u_username'				=>$name,			
				'u_password'				=>$password,
				'u_email'					=>$email
				);
				
				/*
				|=========================================================================================================
				|#send user's data to user model => update_user() function 
				|=========================================================================================================
				*/				
				$u_data=$this->user_obj->update_user($this->session->userdata('u_id'),$userdata);
				if($d_data && $u_data):
					$this->session->set_flashdata('doctor_edited','تم تعديل بياناتك الشخصية بنجاح' );
					redirect(base_url('editdoctor'));
				endif;#end if sure update successfully?>
				<?php 
			endif;#end if run successfully 
		}#end try
		catch(Exception $err)
	    {
	        log_message("error", $err->getMessage());
	        return show_error($err->getMessage());
	    }#end catch			
		
	}#end function update_doctor()

/*
|-------------------------------------------------------------------------------------------------------------------------------------
|check_email_exists($email) function to check found email in database		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	public function check_email_exists($email)
	{
		$query=$this->form_validation->set_message('check_email_exists','الايميل الحالي مستخدم،يرجى ادخال ايميل اخر.');
		if($this->doctor_obj->check_email_exists_db($email)):		
			return true;
		else:
			return false;
		endif;#end if

	}#end function check_email_exists() 

/*
|-------------------------------------------------------------------------------------------------------------------------------------
|check_validation_inputs() function to check validating of form input fields	
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	public function check_validation_inputs()
	{
		$this->form_validation->set_rules('d_name','اسم الطبيب','trim|required');
		if ($this->session->userdata('logged_in')):
			$this->form_validation->set_rules('d_email','البريد الالكتروني','trim|required|valid_email');
			$this->form_validation->set_rules('d_mobile','رقم التلفون','trim');
		else:
			$this->form_validation->set_rules('d_email','البريد الالكتروني','trim|required|valid_email|callback_check_email_exists');
			$this->form_validation->set_rules('d_mobile','رقم التلفون','trim|required');
		endif;		
		$this->form_validation->set_rules('d_gender','نوع الطبيب','trim|required');
		$this->form_validation->set_rules('d_birth_date','تاريخ ميلاد الطبيب','trim|required');
		$this->form_validation->set_rules('nationality','جنسية الطبيب','trim|required');
		$this->form_validation->set_rules('d_country_address','عنوان دولة الطبيب','required');
		$this->form_validation->set_rules('city','عنوان مدينة الطبيب','trim|required');
		$this->form_validation->set_rules('d_street_address','عنوان شارع الطبيب','trim|required');
		$this->form_validation->set_rules('d_speciality','تخصص الطبيب','trim|required');
		$this->form_validation->set_rules('d_password','كلمة المرور','trim|required');
		$this->form_validation->set_rules('d_password_c','تأكيد كلمة المرور','trim|matches[d_password]|required');
	}#end function check_validation_inputs()

/*
|-------------------------------------------------------------------------------------------------------------------------------------
|full_doctor_data() function to full an array has sturcture of doctor table with form input fields data 		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	public function full_doctor_data($phone,$name,$email,$password,$doctor_img)
	{
		$data=array(
			'd_name'				=>$name,
			'd_email'				=>$email,
			'd_phone'				=>$phone,
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
			'd_password'			=>$password	
			);		
		return $data;
	}#end function full_doctor_data()
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|upload_profile() function to upload image 		
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	public function upload_profile()
	{
		if(isset($_FILES['d_img']['name'])):		
			$config=array(
				'upload_path'=>'./assets/images/doctors/personal/',
				'allowed_types'=>'jpeg|jpg|png|gif',
				'max_size'=>2048,
				'max_width'=>500,
				'max_height'=>500,
				'remove_spaces'=>TRUE,
				);
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('d_img')):
				$errors=array(
					'error'	=>	$this->upload->display_errors()
					);
				$doctor_img='noimg.png';
				return $doctor_img;
			
			else:

				$data=array('upload_data'	=>	$this->upload->data());				
				$doctor_img=$_FILES['d_img']['name'];
				return $doctor_img;
			endif;#end if file successful uploaded
		endif;#end if file found

	}#end function upload_profile()

}#end Doctor_c class
?>