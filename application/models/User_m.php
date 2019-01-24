<?php
class User_m extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}//end __construct function

	public function signup_db($enc_password){
		$data=array(
			'u_username'	=>$this->input->post('u_username'),
			'u_email'		=>$this->input->post('u_email'),
			'u_password'	=>$enc_password			
			);
		return $this->db->insert('user',$data);
	}//end signup_db function

	public function login_db($email,$password){
		$this->db->where('u_email',$email);
		$this->db->where('u_password',$password);
		$user_query=$this->db->get('user');
		
		if($user_query->num_rows()==1):
			return $user_query->row(0)->u_id;
		else:
			return false;
		endif;

	}//end login_db function
}//end User_m class
?>