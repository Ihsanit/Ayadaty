<?php
class Hospital_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}//end __construct function

	public function insert_hospital()
	{
		$data=array(
			'h_name'				=>$this->input->post('h_name'),
			'h_abbrev'				=>$this->input->post('h_abbrev'),
			'h_email'				=>$this->input->post('h_email'),
			'h_phone'				=>$this->input->post('h_phone'),
			'h_type'				=>$this->input->post('h_type'),
			'h_country_address'		=>$this->input->post('h_country_address'),
			'h_city_address'		=>$this->input->post('h_city_address'),	
			'h_street_address'		=>$this->input->post('h_street_address'),	
			'h_country_address'		=>$this->input->post('h_country_address'),
			'h_summary'				=>$this->input->post('h_summary'),	
			/*'h_img'					=>$hospital_img,
			'h_license_img'			=>$license_img	*/				
			);
		return $this->db->insert('hospital',$data);
	}//end register_hospital_db function

	public function check_email_exists_db($email)
	{
		$query=$this->db->get_where('hospital',array('h_email'=>$email));
		if(empty($query->row_array()))
		{
			return true;
		}
		else{
			return false;
		}//end if
	}//end check_email_exists_db($email) function
}//end Hospital_m class