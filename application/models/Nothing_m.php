<?php
class Nothing_m extends CI_Model{
	
	public function get_last_ten_services()
        {
                $query = $this->db->get('service', 3);
                return $query->result_array();
        }
}
?>