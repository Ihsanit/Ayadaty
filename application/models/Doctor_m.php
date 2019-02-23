<?php
class Doctor_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}//end __construct function

	public function insert_doctor($data)
	{
		 $this->db->insert('doctor',$data);
	}//end register_hospital_db function
	public function check_email_exists_db($email)
	{
		$query=$this->db->get_where('doctor',array('d_email'=>$email));
		if(empty($query->row_array()))
		{
			return true;
		}
		else{
			return false;
		}//end if
	}//end check_email_exists_db($email) function
}
?>