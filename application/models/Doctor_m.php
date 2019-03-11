<?php
class Doctor_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}//end __construct function

	public function insert_doctor($data)
	{
		 return $this->db->insert('doctor',$data);
	}//end register_hospital_db function

	public function update_doctor($id,$data)
	{
		$this->db->where('d_id',$id);
		return $this->db->update('doctor',$data);
	}
	public function insert_qualification($data)
	{
		 return $this->db->insert('qualification',$data);
	}//end insert_qualification function
	public function insert_experience($data)
	{
		 return $this->db->insert('experience',$data);
	}//end insert_experience function
	public function insert_clinic($data)
	{
		 return $this->db->insert('clinic',$data);
	}//end insert_experience function
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
	public function get_qualifications($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			
		}

		$doctor=array('d_email'=>$doctor_choosen); 
		$query_doctor=$this->db->get_where('doctor',$doctor);
		$query_doctor1=$query_doctor->row_array();
		$d_id=$query_doctor1['d_id'];

		//$this->db->join('doctor','doctor.d_id=qualification.q_d_id');
		$this->db->join('qualification_type','qualification_type.q_t_id=qualification.q_q_t_id');
		$query=$this->db->get_where('qualification',array('q_d_id'=>$d_id));
		return $query->result_array();

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
	public function get_universities()
	{
		$query= $this->db->get('university');
		return $query->result_array();
	}//end function get_universities
	public function get_qualification_types()
	{
		$query= $this->db->get('qualification_type');
		return $query->result_array();
	}//end function get_qualification_types
	public function get_education_specialties()
	{
		$query= $this->db->get('education_specialty');
		return $query->result_array();
	}//end function get_education_specialties
	public function get_days()
	{
		$query= $this->db->get('day');
		return $query->result_array();
	}//end function get_specialties
	public function get_periods()
	{
		$query= $this->db->get('period');
		return $query->result_array();
	}//end function get_specialties
	
}
?>