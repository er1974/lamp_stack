<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surveys extends CI_Controller 
{
	public function index()
	{
		$this->load->view('survey_form');
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
	 		$tem = $this->session->userdata('count');
	 		$tem += 1;
	 		$this->session->set_userdata('count',$temp);
	 		$result= $this->session->userdata('count');
	 		$POST['count'] = $result;
	 	}
	 	
	 	{
	 		$POST['name'] = $this->session->POST('name');
	 		$POST['location'] = $this->input->POST("location");
	 		$POST['language'] = $this->input->POST("language");
	 		$POST['csomment'] = $this->input->POST("comment");

	 		$this->load->view('survey_result', $POST);
	 	}
	}
}