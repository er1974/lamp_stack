<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surveys extends CI_Controller 
{
	public function index()
	{
		$this->load->view('survey_form');
	}

	public function process_form()
	{
	 	if($this->session->userdata('count') == NULL)
	 	{
	 		$this->session->set_userdata('count',1);
	 		$result = $this->session->userdata('count');
	 		$view_data['count'] = $result;
	 	}
	 	else
	 	{
	 		$view_count = $this->session->userdata('count');
	 		$view_count += 1;

	 		$this->session->set_userdata('count', $view_count);

	 		$view_data['count'] = $this->session->userdata('count');;
	 	}

	 	$view_data = $this->session->post();

 		// $view_data['name'] 	   = $this->session->post('name');
 		// $view_data['location'] = $this->input->post("location");
 		// $view_data['language'] = $this->input->post("language");
 		// $view_data['comment'] = $this->input->post("comment");

 		$this->load->view('survey_result', $view_data);
	}
}