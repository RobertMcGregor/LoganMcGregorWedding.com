<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photos extends MY_Controller {

	public function index()
	{

		$this->_load_css(array(CSS."photos.css"));
		/*
		$this->load->library('image_CRUD');				
		
		
		$image_crud = new image_CRUD();
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_1')->set_image_path('assets/uploads');
		
		//$output = $image_crud->render();

		
		$this->_render("photos/view_photos","example"));
		*/

	    $image_crud = new image_CRUD();
		 
	    $image_crud->set_table('example_2');
		 
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_ordering_field('priority')
		->set_image_path('assets/uploads');

		$output = $image_crud->render();

		$this->_example_output($output);

	}	 
	

}

