<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function banners () {
		$query = "SELECT * FROM banners
			WHERE active = 1
			LIMIT 4";
		
		$banners = $this->db->query($query)->result_array();
		
		return $banners;
	}
	
}