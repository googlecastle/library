<?php 

/**
* 
*/
class Book_model extends CI_Model
{
	
	function dewey()
	{
		$result=$this->db->get('dewey');
		return $result->result();

	}

	function getcategory($data)
	{
		$this->db->where('c_dewey',$data);
		$query =$this->db->get('category');

		if ($query->num_rows() >0) {
			
			return $query->num_rows();
		}

return $query->num_rows();
	}

}