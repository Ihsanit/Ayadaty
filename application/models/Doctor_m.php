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
	public function get_doctor($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			
		}

		$doctor=array('d_email'=>$doctor_choosen); 
		$this->db->join('specialty','specialty.specialty_id=doctor.d_specialty_id');
		$query=$this->db->get_where('doctor',$doctor);
		return $query->row_array();
	}
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
	public function get_specialties()
	{
		$query= $this->db->get('specialty');
		return $query->result_array();
	}//end function get_specialties
	
}
?>