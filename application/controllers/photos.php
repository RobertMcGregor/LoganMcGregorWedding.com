<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photos extends MY_Controller {

	public function index()
	{

		$this->_load_css(array(CSS."photos.css"));
				
		$this->_render("photos/view_photos");
	}	 
	

}

