<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lib extends CI_Model {
	
	var $libraries = array (
		"colorbox" => array (
			'lib' => "colorbox-1.3.17/colorbox/jquery.colorbox-min.js",
			'css' => "colorbox-1.3.17/example3/colorbox.css"
		),
		"jcarousellite" => array (
			'lib' => "jcarousellite-1.0.1.min.js"
		),
		"cycle" => array (
			'lib' => "jquery.cycle.all.js"
		),
		"fancybox" => array (
			'lib' => "fancybox/jquery.fancybox-1.3.4.pack.js",
			'css' => "fancybox/jquery.fancybox-1.3.4.css"
		),
		"slide" => array (
			'lib' => "slides.min.jquery.js"
		),
		"scrollto" => array (
			'lib' => "jquery.scrollTo-1.4.2-min.js"
		),
		"localscroll" => array (
			'lib' => "jquery.localscroll-1.2.7-min.js"
		),
		"form" => array (
			'lib' => "jquery.form.js"
		),
		"combobox" => array (
			'lib' => "jquery-combobox.0.4.1/jquery/js/jquery.combobox.js",
			'css' => "jquery-combobox.0.4.1/jquery/css/jquery.combobox/style.css"
		)

	);
	
	function __construct() {
		parent::__construct();
	}
	
	function get ($lib) {
		return $this->libraries[$lib];
	}
	
}

?>