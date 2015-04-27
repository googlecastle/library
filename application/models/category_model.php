<?php 

/**
* 
*/
class Category_model extends CI_Model
{
	
	function getcategory()
	{
		$this->db->where('c_dewey',$this->uri>segment(3));
		$result=$this->db->get('category');
		return $result->result();
	}
}