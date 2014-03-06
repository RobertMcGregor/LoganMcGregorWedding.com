<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photos extends MY_Controller {

	function __construct()
	{

		parent::__construct();

		$this->load->library('image_CRUD');
	}

	public function index()
	{

		$this->_load_css(array(CSS."photos.css"));

		if($_GET['IMAGE_CRUD'] == 'edit'){
			$image_crud = new image_CRUD();
		
			$image_crud->set_primary_key_field('id');
			$image_crud->set_url_field('url');
			$image_crud->set_title_field('title');
			$image_crud->set_table('wedding_album')
			->set_ordering_field('priority')
			->set_image_path('albums');
				
			$output = $image_crud->render();
		
			$this->load->view('photos/view_photos.php',$output);	

		}else{

			$this->load->model("photos");
			$data['photos'] = $this->photos->get();

			$this->_render(photos,$data);

		}
	}	 
	

}

