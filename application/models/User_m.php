<?php
class User_m extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}//end __construct function

	public function signup_db($enc_password){
		$data=array(
			'u_username'	=>$this->input->post('u_username'),
			'u_email'		=>$this->input->post('u_email'),
			'u_password'	=>$enc_password			
			);
		return $this->db->insert('user',$data);
	}//end signup_db function

	public function login_db($email,$password){
		$this->db->where('u_email',$email);
		$this->db->where('u_password',$password);
		$user_query=$this->db->get('user');
		
		if($user_query->num_rows()==1):
			return $user_query->row(0)->u_id;
		else:
			return false;
		endif;

	}//end login_db function

	public function training()
	{
		/*$query=$this->db->query('SELECT * FROM user');*/
		/*foreach ($query->result() as $row) {
			echo $row->u_username;
			echo br(1);
			echo $row->u_email;
			echo br(1);
			echo $row->u_password;
			echo br(1);
			echo br(2);


		}*/
		/*foreach ($query->result_array() as $row) {
			echo $row['u_username'];
			echo br(1);
			echo $row['u_email'];
			echo br(1);
			echo $row['u_password'];
			echo br(1);
			echo br(2);


		}*/
		/*$query=$this->db->query('SELECT * FROM user LIMIT 1');*/
		/*$row=$query->row();

		echo($row->u_email);*/
		/*$row=$query->row_array();

		echo($row['u_email']);*/

		/*$username='   Enas';
		$username=trim($username);
		$password='123';
		$email='enas@gmail.com';
		$sql="INSERT INTO user(u_username,u_password,u_email) VALUES('{$username}','{$password}','{$email}')";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		echo $this->db->insert_id();

		echo $this->db->last_query();*/
		/*echo $this->db->count_all('user');
		echo $this->db->platform();
		echo $this->db->version();*/

		/*$data= array('u_username' =>'Rania' ,'u_password'=>'rania','u_email'=>'rania@gmail.com' );
		$sql=$this->db->insert_string('user',$data);
		$query =$this->db->query($sql);
		echo $query;*/

		/*$data= array('u_username' =>'Rania' ,'u_password'=>'123','u_email'=>'rania@gmail.com' );
		$where="u_username='Rania' AND u_email='rania@gmail.com'";
		$sql=$this->db->update_string('user',$data,$where);
		echo $sql;
		$query =$this->db->query($sql);
		echo $query;*/


		/*$query = $this->db->query('SELECT `u_username` FROM `user`');
		$query->data_seek(9); // Skip the first 5 rows
		$row = $query->unbuffered_row();
		echo $row->u_username;*/
		/*
		$this->db->where('u_id <',19);
		$query=$this->db->get('user');


		foreach ($query->result() as $row) {
			echo $row->u_username;
			echo br(1);
			echo $row->u_email;
			echo br(1);
			echo $row->u_password;
			
			echo br(2);


		}*/
		/*$this->db->select('*');
		$this->db->from('service');
		$this->db->join('employee','employee.emp_id=service.s_emp_id');
		$query=$this->db->get();
		foreach ($query->result() as $row) {
			echo $row->u_username;
			echo br(1);
			echo $row->u_email;
			echo br(1);
			echo $row->u_password;
			
			echo br(2);


		}*/
	/*	$data=array(
			 array(
			 	'u_username' => 'Ali',
			 	'u_password'=>'ali',
			 	'u_email'=>'ali@gmail.com'
			  ),
			 array(
			 	'u_username' => 'Ammar',
			 	'u_password'=>'ammar',
			 	'u_email'=>'ammar@gmail.com'
			  )
			);
		$query=$this->db->insert_batch('user',$data);
		echo $this->db->affected_rows();*/

		/*$this->db->delete('user', array('u_id' => 20));
		echo $this->db->affected_rows();*/

		/*$this->db->trans_start();
		$this->db->where('u_id',20);
		$query=$this->db->update('user',array('u_username' => 'Nada'));

		$username='  Ahmed111';
		$username=trim($username);
		$password='123';
		$email='ahmed1@gmail.com';
		$sql="INSERT INTO user(u_username,u_password,u_email) VALUES('{$username}','{$password}','{$email}')";
		$this->db->query($sql);
echo $this->db->affected_rows();
$this->db->trans_complete();*/

/*
	$this->db->trans_begin();

	$sql="INSERT INTO user(u_username,u_password,u_email) VALUES('Mohammed','123','mohammed@gmail.com')";
	$this->db->query($sql);
	$sql="INSERT INTO user(u_username,u_password,u_email) VALUES('Manar','12352','manar@gmail.com')";
	$this->db->query($sql);
	$sql="INSERT INTO user(u_username,u_password,u_email) VALUES('Ibrahim','144423','ibrahim@gmail.com')";
	$this->db->query($sql);
	

	if ($this->db->trans_status() === FALSE)
	{
	        $this->db->trans_rollback();
	        echo 'rollback';
	}
	else
	{
	        $this->db->trans_commit();
	        echo 'commit';
	}*/

	$tables = $this->db->list_tables();

	foreach ($tables as $table)
	{
	        echo $table;
	        echo br(1);
	}

	$fields = $this->db->list_fields('user');

	foreach ($fields as $field)
	{
	        echo $field;
	        echo br(1);
	}
	$fields = $this->db->field_data('user');

foreach ($fields as $field)
{
        echo $field->name;
        echo br(1);
        echo $field->type;
        echo br(1);
        echo $field->max_length;
        echo br(1);
        echo $field->primary_key;
        echo br(1);
        echo br(1);
}

	}
}//end User_m class
?>