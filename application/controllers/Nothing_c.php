<?php 
class Nothing_c extends CI_Controller{
	public function process(){
		$this->load->library('javascript');

		$this->load->helper(array('form' , 'url'));
		$this->load->library('form_validation');
		   $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
		if(!$this->form_validation->run()===FALSE)
		{
			$this->load->view('pages/nothing');
		}
		else
		{
			die('successful');
		}
		
	}
	public function get_nothings(){


    $this->load->library('table');

$data = array(
        array('Name', 'Color', 'Size'),
        array('Fred', 'Blue', 'Small'),
        array('Mary', 'Red', 'Large'),
        array('John', 'Green', 'Medium')
);

echo $this->table->generate($data);
		

$config['base_url'] = 'http://example.com/index.php/test/page/';
$config['total_rows'] = 200;
$config['per_page'] = 20;
$this->load->library('pagination',$config);
//$this->pagination->initialize($config);

echo $this->pagination->create_links();

		$this->benchmark->mark('start_point');
		$CI=& get_instance();
		$this->load->helper('nothing_helper');
		$msg=display_nothing();
		echo $msg;
		$this->benchmark->mark('end_point');
		echo br(3);
		echo $this->benchmark->elapsed_time('start_point','end_point');

		$this->benchmark->mark('code_begin');

		$CI->load->model('Nothing_m','nothing_obj');//you can name the object of model as you want 
		$data['nothings']=$this->nothing_obj->get_last_ten_services();
		$CI->load->view('nothing',$data);


		$params= array('name' =>'Rabab' ,'speciality'=>'CS' );
		$this->load->library('Nothing_library',$params);
		$this->nothing_library->welcome();
		echo br(3);
		echo $this->benchmark->elapsed_time('start_point','code_begin');
		echo $this->benchmark->memory_usage();
echo br(3);

		$this->output->enable_profiler(TRUE);

		$sections = array('queries' => FALSE);
		$this->output->set_profiler_sections($sections);
		$this->benchmark->mark('code_finish');
		
		


	}

}

?>