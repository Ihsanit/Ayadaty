<?php
class Nothing_library{
	public function __construct($params){
		$this->CI =& get_instance();
		echo $params['name'];
		echo $params['speciality'];
	}
	public function welcome(){
		echo 'welcome to nothing page';
	}

	 protected $CI;

        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        

        public function foo()
        {
                $this->CI->load->helper('url');
                redirect();
        }

        public function bar()
        {
                echo $this->CI->config->item('base_url');
        }

}
?>