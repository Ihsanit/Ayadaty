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
	public function update_qualification($id,$data)
	{
		$this->db->where('q_id',$id);
		return $this->db->update('qualification',$data);
	}
	public function insert_experience($data)
	{
		 return $this->db->insert('experience',$data);
	}//end insert_experience function
	public function update_experience($id,$data)
	{
		$this->db->where('e_id',$id);
		return $this->db->update('experience',$data);
	}
	public function insert_clinic($data)
	{
		 return $this->db->insert('clinic',$data);
	}//end insert_experience function
	public function update_clinic($id,$data)
	{
		$this->db->where('c_id',$id);
		return $this->db->update('clinic',$data);
	}
	public function get_doctor($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			$this->db->select('*');
			$this->db->from('doctor');
			$this->db->order_by('d_id','ASC');
			$this->db->join('specialty','specialty.specialty_id=doctor.d_specialty_id');
			$this->db->join('city','city.city_id=doctor.d_city_address');
			$doctors=$this->db->get();			
			return $doctors->result_array();
			/*foreach ($doctors->result() as $row ) {
			echo $row->d_id."<br/>";
			echo $row->specialty_name;			
				}*/
			
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
		$this->db->select('*');
		$this->db->where('d_email',$doctor_choosen);
		$this->db->from('doctor');
		$this->db->join('qualification','qualification.q_d_id=doctor.d_id');
		$this->db->join('qualification_type','qualification_type.q_t_id=qualification.q_q_t_id');
		$this->db->join('education_specialty','education_specialty.e_s_id=qualification.q_e_s_id');
		$this->db->join('university','university.un_id=qualification.q_un_id');
		$this->db->order_by('q_id','ASC');
		$query=$this->db->get();
		//echo $query->num_rows();			
		return $query->result_array();	

	}
	public function get_experiences($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			
		}
		$this->db->select('*');
		$this->db->where('d_email',$doctor_choosen);
		$this->db->from('doctor');
		$this->db->join('experience','experience.e_d_id=doctor.d_id');
		$this->db->order_by('e_id','ASC');
		$query=$this->db->get();
		//echo $query->num_rows();			
		return $query->result_array();	

	}//end get_experiences
	public function get_clinics($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			
		}
		$this->db->select('*');
		$this->db->where('d_email',$doctor_choosen);
		$this->db->from('doctor');
		$this->db->join('clinic','clinic.c_d_id=doctor.d_id');
		$this->db->join('city','city.city_id=clinic.c_city_address');
		$this->db->join('day','day.day_id=clinic.c_day_start');
		$this->db->join('period','period.period_id=clinic.c_period_start');

		$this->db->order_by('c_id','ASC');
		$query=$this->db->get();
		//echo $query->num_rows();			
		return $query->result_array();	

	}#end function get_clinics()


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