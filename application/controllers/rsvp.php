<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rsvp extends MY_Controller {

	public function index()
	{

		if($_GET['email']){
			$data['email'] = $_GET['email'];
		}

		if($_GET['first_name']){
			$data['first_name'] = $_GET['first_name'];
		}

		if($_GET['last_name']){
			$data['last_name'] = $_GET['last_name'];
		}

		$this->_load_css(array(CSS."rsvp.css"));
				
		$this->_render("rsvp/view_rsvp",$data);
	}	 
	
	/*
	 * Where add form is rsvp from
	 */
	public function rsvp_form(){
		$this->_render("rsvp/rsvp_form",$data);
	}

	/*
	 * this is the thank you function
	 */
	public function thank_you(){
		$this->_render("rsvp/thank_you",$data);
	}

	/*
	 * Checks to see if user was invited. If so the user is allowed to proceed if not display a message
	 */
	public function check_guest(){
		session_start();
		
		$this->load->model("rsvp_model");    
		
		$guest_info = $this->rsvp_model->check($_POST['first_name'],$_POST['last_name']);
		
		// I used the suffix guest_list becuase of the primary key being "id" 
		$_SESSION['guest_list_id'] = $guest_info['id'];
		$_SESSION['guest_list_party_id'] = $guest_info['party_id'];
		
		$_SESSION['guest_list_childrens_names'] = $guest_info['childrens_names'];
		
		$this->output->set_content_type('json')->set_output(json_encode($data['results']));
		
	}
	
	public function add_guest(){
		session_start();
		
		$this->load->model("rsvp_model");
		
		$guest_info = $_POST;
		
		if(!$guest_info['guest_list_id']){ die('uh oh.'); }
		
		if(!isset($guest_info['attending'])){ $guest_info['attending'] = 0; }
		
		if(!isset($guest_info['food_needs'])){ $guest_info['food_needs'] = ''; }
		
		if(!isset($guest_info['comments'])){ $guest_info['comments'] = ''; }
		
		$data['results']['message'] = $this->rsvp_model->update($guest_info);
		
		$this->output->set_content_type('json')->set_output(json_encode($data['results']));
		
	}

}

