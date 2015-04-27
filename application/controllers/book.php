<?php 

/**
* 
*/
class Book extends CI_Controller
{
	
	function index()
	{
		$data['main_content'] = 'book';
		$this->load->model('book_model');
		if ($query=$this->book_model->dewey()) {
			$data['record'] = $query;
		}
		
		
		$this->load->view('template/content',$data);

	}
}