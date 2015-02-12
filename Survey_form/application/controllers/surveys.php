<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surveys extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Survey_form');
	}

	public function process_form()
	{
	 	if($this->session->userdata('count')==null)
	 	{
	 		$this->session->set_userdata('count',1);
	 		$result = $this->session->userdata('count');
	 		$POST['count'] = $result;
	 	}
	 	else
	 	{
	 		$temp = $this->session->userdata('count');
	 		$temp += 1;
	 		$this->session->set_userdata('count',$temp);
	 		$view_data['count'] = $result;
	 	}
	 		$view_data = $this->session->post();
	 		$this->load->view('survey_result', $view_data);
	 	
	}
}