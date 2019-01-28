<?php
class User_m extends CI_Model{

	public function __construct(){
		parent::__construct();
	}//end __construct function

	public function register_user($enc_password){
		$data=array(
			'u_username'	=>$this->input->post('u_username'),
			'u_email'		=>$this->input->post('u_email'),
			'u_password'	=>$enc_password			
			);
		return $this->db->insert('user',$data);
	}//end register_user function

	public function login_user_db($email,$password){
		$this->db->where('u_email',$email);
		$this->db->where('u_password',$password);
		$user_query=$this->db->get('user');
		
		if($user_query->num_rows()==1):
			return $user_query->row(0);
		else:
			return false;
		endif;

	}//end register_user_db function

	public function check_email_exists_db($email){
		$query=$this->db->get_where('user',array('u_email'=>$email));
		if(empty($query->row_array())){
			return true;
		}
		else{
			return false;
		}

	}

	public function view_users_db($u_id=FALSE)
	{
		if($u_id===FALSE)
		{
			$this->db->order_by('u_id','ASC');
			$user_query=$this->db->get('user');
		
		if($user_query->result()):
			return $user_query->result_array();
		else:
			return false;
		endif;
	}
	$user=array('u_id'=>$u_id); 
		$user_query=$this->db->get_where('user',$user);
		return $user_query->row_array();

	}//end register_user_db function

	public function update_user_db(){
		$data=array(
			'u_username'=>$this->input->post('u_username'),
			'u_password'=>$this->input->post('s_password'),
			'u_email'=>$this->input->post('u_email'),
			'u_privilage'=>$this->input->post('u_privilage')
			);
		$this->db->where('u_id',$this->input->post('u_id'));
		return $this->db->update('user',$data);

	}//end update_service function

	public function delete_user_db($u_id){
		$this->db->where('u_id',$u_id);
		$this->db->delete('user');
		return true;
	}//end insert_services function
}//end User_m class
?>