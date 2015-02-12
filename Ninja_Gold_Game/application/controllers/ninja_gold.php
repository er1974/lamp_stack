<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ninja_gold extends CI_Controller 
{
	public function index()
	{
		if($this->session->userdata('gold')==NULL)
		{
			$this->session->set_userdata('gold',0);
		}	
		if($this->session->userdata('activity_logger')==NULL)
		{
			$message = array();
			$this->session->set_userdata('activity_logger',$message);	
		}

		$this->load->view('ninja_view');
	}

	public function farm()
	{
		$goldchang = rand(5,10);
		$this->sesion->set_userdata('gold',($this->session->userdata('gold')+$goldchang))
		$temp = $this->session->userdata('gold');
		array_unshift($tem, "<p class='gain'>Earned ".$goldchang." gold from the farm!(".date('Y/j/d/ h:i a')."</p>");
		$this->session->set_userdata('activity_logger',$temp);
		redirect('/ninja_gold/index');
	}

	public function house()
	{
		$goldchang = rand(5,10);
		$this->sesion->set_userdata('gold',($this->session->userdata('gold')+$goldchang))
		$temp = $this->session->userdata('gold');
		array_unshift($tem, "<p class='gain'>Earned ".$goldchang." gold from the farm!(".date('Y/j/d/ h:i a')."</p>");
		$this->session->set_userdata('activity_logger',$temp);
		redirect('/ninja_gold/index');
	}

	public function cave()
	{
		$goldchang = rand(2,5);
		$this->sesion->set_userdata('gold',($this->session->userdata('gold')+$goldchang))
		$temp = $this->session->userdata('gold');
		array_unshift($tem, "<p class='gain'>Earned ".$goldchang." gold from the farm!(".date('Y/j/d/ h:i a')."</p>");
		$this->session->set_userdata('activity_logger',$temp);
		redirect('/ninja_gold/index');
	}

	public function casino()
	{
		$goldchang = rand(-50,50);
		$this->sesion->set_userdata('gold',($this->session->userdata('gold')+$goldchang));

		if($goldchang > 0)
		{
			$temp = $this->session->userdata('gold');
			array_unshift($tem, "<p class='gain'>Earned ".$goldchang." gold from the farm!(".date('Y/j/d/ h:i a')."</p>");
			$this->session->set_userdata('activity_logger',$temp);
		}
		elseif($goldchang == 0)
		{
			$temp = $this->session->userdata('gold');
			array_unshift($tem, "<p class='gain'>Earned ".$goldchang." gold from the farm!(".date('Y/j/d/ h:i a')."</p>");
			$this->session->set_userdata('activity_logger',$temp);
		} 
		else
		{
			$temp = $this->session->userdata('gold');
			array_unshift($tem, "<p class='lost'>Earned ".$goldchang." gold from the farm!(".date('Y/j/d/ h:i a')."</p>");
			$this->session->set_userdata('activity_logger',$temp);
		}



		// $temp = $this->session->userdata('gold');
		// array_unshift($tem, "<p class='gain'>Earned ".$goldchang." gold from the farm!(".date('Y/j/d/ h:i a')."</p>");
		// $this->session->set_userdata('activity_logger',$temp);
		// redirect('/ninja_gold/index');
		}
	}

}


	// 	$bldg = $this->input->post('building');
	// 	if($bldg=='farm'){
	// 		$rand = rand(10,20);

	// 	}elseif($bldg == 'cave'){
	// 		$rand = rand(5,10);
		
	// 	}elseif($bldg == 'house'){
	// 		$rand = rand(2,5);
	// 	}
	// 	elseif($bldg == 'casion'){
	// 		$odds = rand(1,10);

	// 		if($odds > 3){
	// 			$rand = rand(-50,0);
	// 			$message = '<p class = "red"> You Searched the casion and lost';
	// 		}else
	// 			{
	// 			$rand = rand(0,50);
	// 			$message = '<p class = "gold"> You Searched the casion and won';
	// 			}
	// 	}

	// 		$temp = $this->session->userdata('gold');
	// 		$temp += $rand;
	// 		$this->session->set_userdata('gold',$temp);
	// 		$dispaly['gold'] = $this->session->userdata('gold');
	// 		$messages =$this->session->userdata('messages');
	// 		$t = time();
	// 		$data = date("F js Y g:i a",$t);

	// 		if($bldg == 'casino'){
	// 			$message .= $rand . 'gold. - '.$date.'</p>';
	// 		}
	// 		else
	// 		{
	// 			$message = '<p class ="green">You searched the' . $bldg.'and found '. $rand . 'gold .-'. $date.'</p>';
	// 		}

	// 		$messages[] = $message;
	// 		$this->session->userdata('messages',$messages);
	// 		$dispaly['messages'] = $this->session->userdata('messages');
	// 		$this->page();
	// }
			
// 			public function page()
// 			{
// 				redirect('');
// 			}

// 			public function reset(){
// 				$this->session->session_destroy();
// 				redirect('');
// 			}

// }

