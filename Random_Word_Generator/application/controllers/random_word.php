<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class random_word extends CI_Controller 
{
	public function index()
	{
		if($this->session->userdata('count'))
		{
			$this->session->set_userdata('count',1);
		}
		$result['string'] = 'clik Button to Generate Random Word';
		$result['count'] =$this->session->userdata('count');
		$this->load->view('random_view',$result);
	}

	public function random()
	{
		$temp =$this->session->userdata('count');
		$temp += 1;
		$this->session->set_userdata('count',$temp);
		$result['count'] = $this->session->userdata('count');

		$char ='ABCDEFGHIJKLMNOPQRTSTUVWXYZ1234567890';
		$string = '';

		for($i=0;$i<14;$i++)
		{
			$string = $char[rand(0,strlen($char)-1)];
		}

		$this->session->set_userdata('random',$arung);
		$result['string'] = $this->session->userdata('random');

		$this->load->view('random_view',$result);
	}

}