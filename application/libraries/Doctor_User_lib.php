<?php
class Doctor_User_lib
{
	protected $ci;
	public function __construct()
	{
		$this->ci=& get_instance();
		$this->ci->load->database();
		$this->ci->load->library('session');
		$this->ci->load->model('User_m','user_obj');
		$this->ci->load->model('Doctor_m','doctor_obj');
	}//end __construct

	public function create_session($email,$password,$is_doctor)
	{
		$user_record=$this->ci->user_obj->login_user_db($email,$password);
		if($user_record):
			//create a session
			$user_data=array(
			'u_id'=>$user_record->u_id,
			'u_username'=>$user_record->u_username,
			'u_email'=>$email,
			'u_password'=>$user_record->u_password,
			'logged_in'=>true,
			'is_doctor'=>$is_doctor
			);					
			$this->ci->session->set_userdata($user_data);
			return true;
		endif;
		return false;
	}#end create_session()

	public function destroy_session()
	{
		//unset session of user 
		$this->ci->session->unset_userdata('u_id');
		$this->ci->session->unset_userdata('u_username');
		$this->ci->session->unset_userdata('u_email');
		$this->ci->session->unset_userdata('u_password');
		$this->ci->session->unset_userdata('logged_in');
		$this->ci->session->unset_userdata('is_doctor');
	}#end destroy_session()

	public function get_doctor($email)
	{		
		$data['doctor']=$this->ci->doctor_obj->get_doctor($email);
		if(empty($data['doctor'])):
			return false;
		else:
			return true;
		endif;

	}#end get_doctor() function

}//end Doctor_lib class
?>