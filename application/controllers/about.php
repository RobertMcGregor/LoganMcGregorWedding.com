<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {

	public function index()
	{

		$this->_load_css(array(CSS."about.css"));
				
		$this->_render("about/view_about");
	}	 
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
