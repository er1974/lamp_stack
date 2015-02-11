<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timedisplay extends CI_Controller 
{
	public function index()
	{
		$date = array('date' => date('M j, Y'),'time' => date('g:i A'));
		$this->load->view('timedisplay.php', $date);
	}



}