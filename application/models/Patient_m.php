<?php
class Patient_m extends CI_Model{

	public function __construct(){
		parent::__construct();
	}//end __construct function
	public function insert_patient(){
		$data=array(
			'p_name' =>$this->post->input('p_name'),
			'p_email' =>$this->post->input('p_email'),
			'p_phone' =>$this->post->input('p_phone'),
			'p_address' =>$this->post->input('p_address'),
			'p_gender' =>$this->post->input('p_gender'),
			'p_birth_date' =>$this->post->input('p_birth_date'));
		$query=$this->db->insert('patient',$data);
		if($query)
			return true;
		else 
			return false;

	}//end insert_patient function
}//end Patient_m class 