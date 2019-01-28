<?php
class Doctor_c extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session','upload'));
		//$this->load->helper(array('form','url'));
		$this->load->model('Doctor_m');
	}//end __construct function
	
	public function show_general($page_title,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view('doctor_pages/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function
	public function dispaly_doctors($doctor_chosen=NULL){
		$data['page_name']='Our Team';		
		$data['doctor']=$this->Doctor_m->get_doctors($doctor_chosen);
		//if(empty($data['doctor'])){
			//show_404();
		//}//end if
		$this->show_general('Our Team','doctors',$data);
	
	}//end display_doctors function

	public function display_doctor_detls(){
		$data['page_name']='Doctor details';
		$this->show_general('Doctor details','doctor_details',$data);
	}//end display_doctor_detls function
	public function create_doctor(){
		//$data['page_name']='Create Doctor';
		//$this->show_general('Create Doctor','create_doctor',$data);
		//---------------check user login-------------------------
		if(!$this->session->userdata('logged_in')):
			redirect('user_c/login');
		endif;
		//---------------------------check validation fields---------------------
		$this->form_validation->set_rules('d_name',"Doctor's Name",'required');
		$this->form_validation->set_rules('d_email',"Doctor's Email",'required');
		$this->form_validation->set_rules('d_address',"Doctor's Address",'required');
		$this->form_validation->set_rules('d_phone',"Doctor's Phone",'required');
		$this->form_validation->set_rules('d_gender',"Doctor's Gender",'required');
		$this->form_validation->set_rules('d_qualifier',"Doctor's Qualifier",'required');
		$this->form_validation->set_rules('d_employ_date',"Doctor's Emplyed date",'required');
		$this->form_validation->set_rules('d_speciality_id',"Doctor's Speciality",'required');
		$this->form_validation->set_rules('d_salary',"Doctor's Salary",'required');
/*		$this->form_validation->set_rules('d_certificate',"Doctor's Certificate",'required');
*/
		//------------------------check result of validation-------------------------
		if($this->form_validation->run()===FALSE){
			$data['page_name']='Create Doctor';
			$this->show_general('Create Doctor','create_doctor',$data);
		}
		else{
				/*if (isset($_FILES['d_personal_img']) && $_FILES['d_personal_img']['name'] != ''){*/
   					 $personal_img = $this->do_uploaded($_FILES['d_personal_img'],'d_personal_img');
   					 if($personal_img==='no_file.png'){
   					 		echo 'errors no file loaded';
   					 }
					//}//end outer

					//if (isset($_FILES['d_certificate']) && $_FILES['d_certificate']['name'] != ''){
   					 $certificate_file = $this->do_uploaded($_FILES['d_certificate'],'d_certificate');
   					 if($certificate_file==='no_file.png'){
   					 		echo 'errors no file loaded';
   					 }
					//}//end outer



			 /*$countfiles = count($_FILES['d_personal_img']['name']);
			 echo  $countfiles;
			 $countfiles = count($_FILES['d_certificate']['name']);
			 echo  $countfiles;*/
			//------------------upload personal image of doctor -------------------			
				/*$config=array(
				'upload_path'=>'./assets/images/doctors/personal/',
				'allowed_types'=>'jpeg|jpg|png|gif'*/
				/*'max_size'=>2048,
				'max_width'=>500,
				'max_height'=>500,
				'remove_spaces'=>TRUE,*/
				/*'encrypt_name'	=>TRUE*/
				/*);	*/		
			
			/*$this->load->library('upload',$config);			
			if(!$this->upload->do_upload('d_personal_img')){
				$errors=array(
					'error'	=>	$this->upload->display_errors()
					);
				$personal_img='no_perosnal_img.png';*/
				/*echo $personal_img;*/
			/*}
			else{
				$data=array('upload_data'	=>	$this->upload->data());
				$personal_img=$_FILES['d_personal_img']['name'];
			}*///end innner if else uploading
		

			//------------------upload certificate file of doctor -------------------
		
			/*$config=array(
				'upload_path'=>'./assets/images/doctors/certificate/',
				'allowed_types'=>'jpeg|jpg|png|gif|pdf'*/
				/*'max_size'=>2048,
				'max_width'=>500,
				'max_height'=>500,
				'remove_spaces'=>TRUE,*/
				/*'encrypt_name'	=>TRUE*/
			/*	);
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('d_certificate')){
				$errors=array(
					'error'	=>	$this->upload->display_errors()
					);
				$certificate_file='no_certificate_file.png';*/
				/*echo $certificate_file;*/
			/*}
			else{
				$data=array('upload_data'	=>	$this->upload->data());
				$certificate_file=$_FILES['d_certificate']['name'];
			}*///end innner if else uploading
	
			$this->Doctor_m->insert_doctor($personal_img,$certificate_file);
			die('continue');
			//redirect('doctor_c/dispaly_doctors');
			
		}//end outer else if



	}//end create_doctor function
	public function do_uploaded($filename,$name){
		$config['upload_path']='./assets/images/doctors/certificate/';
		$config['allowed_types']='gif|jpg|png|doc|pdf';
		$config['max_size'] = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload($name)) {
			$error = array('error' => $this->upload->display_errors());
			echo var_dump($error );
			$new_file='no_file.png';
			return $new_file;
		// $this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			echo var_dump($error );
			$new_file=$_FILES[$filename]['name'];
			return $new_file;
		//$this->load->view('upload_success', $data);
		}
	}//end do_uploads function
}//end Doctor_c class
	?>