<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nav extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function get () {
		
		$nav = $this->db->query("
			SELECT id,href,img,text
			FROM wedding_nav_items
			WHERE active=1
			ORDER BY `order` ASC
			")->result_array();

/*
		for ($i=0; $i<count($nav); $i++)
		{
			if ($nav[$i]['submenu_img']) {
				$nav[$i]['submenu'] = $this->db->query("
					SELECT	submenu_img AS img,
							submenu_alt AS alt,
							submenu_intro AS intro
					FROM nav_items WHERE id=".$nav[$i]['id'])->row_array();
					
				$nav[$i]['submenu']['items'] = $this->db->query("
					SELECT href,img,title,text
					FROM nav_submenu_items WHERE active=1 AND parent={$nav[$i]['id']}
					ORDER by `order` ASC")->result_array();
			}
		}
	*/	
		return $nav;
	}
	
}

?>
