<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	function index()
	{
		$data['main_content'] = 'home';
		$this->load->view('template/content',$data);
	}
	
}