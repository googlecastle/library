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



}