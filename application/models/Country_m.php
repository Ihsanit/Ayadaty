<?php
class Country_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}//end __construct function
	public function get_countries()
	{
		$query= $this->db->get('country');
		return $query->result_array();
	}//end function get_countries
	public function get_cities()
	{
		$query= $this->db->get('city');
		return $query->result_array();
	}//end function get_countries
}//end class