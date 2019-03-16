<?php
class Doctor_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}#end __construct function

	public function insert_doctor($data)
	{
		 return $this->db->insert('doctor',$data);
	}#end function insert_doctor()

	public function update_doctor($id,$data)
	{
		$this->db->where('d_id',$id);
		return $this->db->update('doctor',$data);
	}#end function update_doctor()

	public function insert_qualification($data)
	{
		 return $this->db->insert('qualification',$data);
	}#end function insert_qualification()

	public function update_qualification($id,$data)
	{
		$this->db->where('q_id',$id);
		return $this->db->update('qualification',$data);
	}#end function update_qualification()

	public function insert_experience($data)
	{
		 return $this->db->insert('experience',$data);
	}#end function insert_experience()

	public function update_experience($id,$data)
	{
		$this->db->where('e_id',$id);
		return $this->db->update('experience',$data);
	}#end function update_experience()

	public function insert_clinic($data)
	{
		 return $this->db->insert('clinic',$data);
	}#end function insert_clinic()

	public function update_clinic($id,$data)
	{
		$this->db->where('c_id',$id);
		return $this->db->update('clinic',$data);
	}#end function update_clinic()

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
		}#end if

		$doctor=array('d_email'=>$doctor_choosen); 
		$this->db->join('specialty','specialty.specialty_id=doctor.d_specialty_id');
		$query=$this->db->get_where('doctor',$doctor);
		return $query->row_array();
	}#end function get_doctor()

	public function get_qualifications($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			
		}#end if
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
	}#end function get_qualification()

	public function get_experiences($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			
		}#end if
		$this->db->select('*');
		$this->db->where('d_email',$doctor_choosen);
		$this->db->from('doctor');
		$this->db->join('experience','experience.e_d_id=doctor.d_id');
		$this->db->order_by('e_id','ASC');
		$query=$this->db->get();
		//echo $query->num_rows();			
		return $query->result_array();	

	}#end function get_experiences()

	public function get_clinics($doctor_choosen=FALSE)
	{
		if($doctor_choosen===FALSE)
		{
			
		}#end if
		$this->db->select('*');
		$this->db->where('d_email',$doctor_choosen);
		$this->db->from('doctor');
		$this->db->join('clinic','clinic.c_d_id=doctor.d_id');
		$this->db->join('city','city.city_id=clinic.c_city_address');
		$this->db->join('day','day.day_id=clinic.c_day_start');
		$this->db->join('period','period.period_id=clinic.c_period_start');

		$this->db->order_by('c_id','ASC');
		$query=$this->db->get();			
		return $query->result_array();	

	}#end function get_clinics()

	public function get_specialties()
	{
		$query= $this->db->get('specialty');
		return $query->result_array();
	}#end function get_specialties()

	public function get_universities()
	{
		$query= $this->db->get('university');
		return $query->result_array();
	}#end function get_universities()

	public function get_qualification_types()
	{
		$query= $this->db->get('qualification_type');
		return $query->result_array();
	}#end function get_qualification_types()

	public function get_education_specialties()
	{
		$query= $this->db->get('education_specialty');
		return $query->result_array();
	}#end function get_education_specialties()

	public function get_days()
	{
		$query= $this->db->get('day');
		return $query->result_array();
	}#end function get_days()

	public function get_periods()
	{
		$query= $this->db->get('period');
		return $query->result_array();
	}#end function get_periods()

	public function check_email_exists_db($email)
	{
		$query=$this->db->get_where('doctor',array('d_email'=>$email));
		if(empty($query->row_array()))
		{
			return true;
		}
		else{
			return false;
		}#end if
	}#end function check_email_exists_db($email)
	public function count_all()
	{
		$this->db->select('*');
		$this->db->from('doctor');
		$this->db->order_by('d_id','ASC');
		$this->db->join('specialty','specialty.specialty_id=doctor.d_specialty_id');
		$this->db->join('city','city.city_id=doctor.d_city_address');
		$query=$this->db->get();			
		return $query->num_rows();

	}#end function count_all()

	public function fetch_detail($limit,$start)
	{
		$output='';
		$this->db->select('*');
		$this->db->from('doctor');
		$this->db->order_by('d_id','ASC');
		$this->db->limit($limit,$start);
		$this->db->join('specialty','specialty.specialty_id=doctor.d_specialty_id');
		$this->db->join('city','city.city_id=doctor.d_city_address');
		$query=$this->db->get();
		return $query->result();
		/*foreach ($query->result() as $doctor):					
			$output.='
			<div class="col-lg-3 col-md-6">
	         <div class="card" style="border-radius:unset;">
	            <div class="card-img-top text-center" style="background-color: rgba(204, 204, 204, 0.3);">
	                <a href="echo base_url("doctordetail");?>">
	                    <img class="doctor-img" src="<?php echo base_url();?>assets/images/doctors/personal/'.$doctor->d_personal_img.'alt="Card image cap" >
	                </a>
	            </div>
	            
	            <div class="card-body">
	               <div class="clinic-icon">
	                     <i class="fas fa-user-md fa-md"></i> 
	                     <span class="text-muted">د.'.$doctor->d_name.'</span>
	                </div>
	                <div class="clinic-icon">
	                    <a href="#">
	                        <i class="fas fa-stethoscope fa-md"></i> 
	                        <span class="text-muted" style="color:#13bfb1 !important;">'.$doctor->specialty_name.'</span>
	                    </a>
	                </div>
	                <div class="clinic-icon" >
	                    <a href="<?php echo base_url("hospitaldetail");?>" >
	                         <i class="fas fa-hospital fa-md"></i> 
	                         <span class="text-muted" style="color:#13bfb1 !important;">مستشفى الوسام</span>
	                    </a>
	                </div>
	                <div class="clinic-icon">
	                     <i class="fas fa-map-marker-alt fa-md"></i> 
	                     <span class="text-muted">'.$doctor->city_name.'</span>
	                </div>
	                <h6 class="card-title pb-3">
	                    <span class="float-right d-inline-flex share">
	                        <a href="#" class="float-right d-inline-flex share" style="text-decoration:none;">
	                            <i class="far fa-star fas-1x"></i>
	                            <i class="far fa-star fas"></i>
	                            <i class="far fa-star fas"></i>
	                            <i class="far fa-star fas"></i>                            
	                            <i class="far fa-star fas"></i>
	                        </a>
	                    </span>
	                </h6>               

	                <br/>
	                <a href="<?php echo base_url("doctordetail");?>" class="btn btn-sm btn-info float-right btn-more doctor-btn"><i style="color:#fff;" class="fas fa-angle-double-left"></i> التفاصيل</a>
	               
	               <a href="#" class="btn btn-sm btn-info float-left btn-more doctor-btn"><i style="color:#fff;" class="fas fa-angle-double-left"></i> حجز موعد</a>
	            </div>
	         </div>
	</div>';
	endforeach;*/
	//return $output;

	}#end function fetch_detail()



	private $table = "doctor";

	public function all($limit = 0)
	{
		
		$this->db->limit($limit);
		$this->db->offset($this->uri->segment(3));
		return $this->db->get($this->table);
	}

	public function count()
	{
		return $this->db->count_all_results($this->table);		
	}
}#end class Doctor_m
?>