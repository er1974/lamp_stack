<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gold extends CI_Controller 
{
	public function gold_count()
	{
		if($this->session->userdata('gold')==NULL)
		{
			$this->session->set_userdata('gold',0);
			$messages = array();
			$this->session->set_userdata('messages');
		}
			return $this;
	}

	public function farm()
	{
			$rand = rand(10,20);
			$temp = $this->session->userdata('gold');
			$temp += $rand;
			$this->session->set_userdata('gold',$temp);
			$t = time();
			$date = date("F js Y g:i a", $t);
			$message = 'You searched the farm and found '.$rand .' gold. - ' .$date;
			$messages[] = $message;
			$this->session->set_userdata('messages',$message);
			$display['messages'] =$this->session->userdata('messages');
			$this->load->view('ninja_gold',$display);

	}

}






















