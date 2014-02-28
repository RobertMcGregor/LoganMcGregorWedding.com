<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rsvp_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function check ($first_name='',$last_name='') {
		
		if($first_name && $last_name){
		
		$query = "SELECT *
								FROM guest_list
							 WHERE first_name = '".$first_name."'
								 AND last_name = '".$last_name."' ";

		}
		
		if($results = $this->db->query($query)->result_array()){
			return $results[0];
		}else{
			return false;
		}

	}

	function update ($guest_list) {
		
		if($guest_list['guest_list_id']){
			$query = "UPDATE guest_list
									 SET attending = ".$guest_list['attending'].", 
											 children_attending = ".$guest_list['children_attending'].",
											 food_needs = '".htmlspecialchars($guest_list['food_needs'])."',
											 comments = '".htmlspecialchars($guest_list['comments'])."'
								 WHERE id = ".$guest_list['guest_list_id']." ";

			$this->db->query($query);
						
			return true;
				
		}else{
			return false;
		}
		
	}
	
}?>
