<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Patient_m extends CI_Model{

	/*public function __construct(){
		parent::__construct();
	}*///end __construct function
	public function bills()
	{
		echo 'hello bills';
	}
	public function book_appt_db($patient_data)
	{
		


		
/*$data=array(
			'p_name' =>'ali',
			'p_email' =>'ali@gmail.com',
			'p_phone' =>'777777777',
			'p_address' =>"Sana'a",
			'p_gender' =>TRUE
			);*/
		return $this->db->insert('patient',$patient_data);

	}//end insert_patient function
}//end Patient_m class 
?>