<?php 
/**
* 
*/
class Login extends CI_Controller
{
	
	 function index()
	{

		$this->load->view('login');
	}

	function validate()
	{

		$this->load->model('login_model');
		$query = $this->login_model->validate();
			$content['main_content']="home";
		if ($query) {

			$data['main_content'] = 'home';
			$this->load->view('template/content',$data);
			
		}else
		{
			$this->load->view('login');
		}
	}
}