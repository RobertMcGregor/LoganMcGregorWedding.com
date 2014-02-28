<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resume extends CI_Controller {

	/**
	 * 
	 * 	Controller file for all things resume related
	 * 
	 * 
	 */
	public function index()
	{
		$this->load->database();
		
		$data['messages'] = $this->db->query("SELECT message FROM messages");		
		
		$data['messages'] = $data['messages']->result_array($data['messages']);
		//die('fsdafhsdfasd');
		$this->load->view('resume/view_resume',$data);
	}	 
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
