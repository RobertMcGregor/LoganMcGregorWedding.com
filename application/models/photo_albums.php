<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_albums extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get ($limit = 0) {
		
		$query = "SELECT *,
						 CONCAT('thumb__',url) AS 'thumb',
						 url AS 'image'
				  FROM wedding_album ";

		if($limit != 0){
			$query .= " LIMIT ".$limit;
		}
		
		$pictures = $this->db->query($query)->result_array();

		return $pictures;
	}
	
}

?>
