<?php
class User_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}//end __construct function
	public function insert_user($data)
	{
		return $this->db->insert('user',$data);
	}
	public function update_user($id, $data)
	{
		$this->db->where('u_id',$id);
		$this->db->update('user',$data);
	}
	
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
	public function check_email_exists_db($email)
	{
		$query=$this->db->get_where('user',array('u_email'=>$email));
		if(empty($query->row_array()))
		{
			return true;
		}
		else{
			return false;
		}//end if
	}//end check_email_exists_db($email) function
	public function check_email_exists_login_db($email)
	{
		$query=$this->db->get_where('user',array('u_email'=>$email));
		if(!empty($query->row_array()))
		{
			return true;
		}
		else{
			return false;
		}//end if
	}//end check_email_exists_db($email) function

	public function check_password_exists_login_db($password)
	{
		$query=$this->db->get_where('user',array('u_password'=>$password));
		if(!empty($query->row_array()))
		{
			return true;
		}
		else{
			return false;
		}//end if
	}//end check_email_exists_db($email) function

}//end User_m class
	?>