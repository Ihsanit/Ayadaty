<?php
class Doctor_m extends CI_Model{

	public function __construct(){
		parent::__construct();

	}//end __construct function

	public function get_doctors($doctor_chosen=FALSE){
		if($doctor_chosen===FALSE){
			$this->db->order_by('d_id','DESC');
			//$this->db->join('specialty','specialty.specialty_id=doctor.specialty_id');
			$query=$this->db->get('doctor');
			return $query->result_array();
		}//end if
		
		$doctor=array('d_id'=>$doctor_chosen); 
		$query=$this->db->get_where('doctor',$doctor);
		return $query->row_array();
	}//end get_doctors function

	public function insert_doctor($personal_img,$certificate_file){
		$data=array(
			'd_name'			=>$this->input->post('d_name'),
			'd_email'			=>$this->input->post('d_email'),
			'd_phone'			=>$this->input->post('d_phone'),
			'd_address'			=>$this->input->post('d_address'),
			'd_gender'			=>$this->input->post('d_gender'),
			'd_personal_img'	=>$personal_img,
			'd_salary'			=>$this->input->post('d_salary'),
			'd_employ_date'		=>$this->input->post('d_employ_date'),
			'd_qualifier'		=>$this->input->post('d_qualifier'),
			'd_experience'		=>$this->input->post('d_experience'),
			'd_certificate'		=>$certificate_file,
			'd_note'			=>$this->input->post('d_note'),
			'd_specialty_id'	=>1
			);
		return $this->db->insert('doctor',$data);

	}//end insert_services function
}//end Patient_m class 