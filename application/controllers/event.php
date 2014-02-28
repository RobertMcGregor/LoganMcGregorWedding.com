<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends MY_Controller {

	public function index()
	{

		$this->_load_css(array(CSS."event.css"));
				
		$this->_render("event/view_event");
	}	 
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
