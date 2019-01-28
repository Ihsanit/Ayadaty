<?php
function show_general($page_title,$root_directory,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view($root_directory.'/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function
?>