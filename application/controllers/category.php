<?php 

/**
* 
*/
class Category extends CI_Controller
{
	
	function index()
	{
		$data['main_content'] = 'category';
		$this->load->view('template/content',$data);
	}
}