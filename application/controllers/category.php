<?php 

/**
* 
*/
class Category extends CI_Controller
{
	
	function go()
	{

		$this->load->model('category_model');
		$data['main_content'] = 'category';
		$data['rocord']=$this->category_model->getcategory();
		$this->load->view('template/content',$data);

	}
}