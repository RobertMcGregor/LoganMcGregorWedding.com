<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	var $data;
	
	// Refer to "./application/core/MY_Controller.php" for
	// more information about using these classes
	
	public function __construct () {
		parent::__construct();
		$this->load->database();
		
		//nav load
		$this->load->model("common/nav");
		$this->data['nav'] = $this->nav->get();
			
		$this->data['template']['css'] = array();
		$this->data['template']['libraries'] = array();
		$this->data['template']['title'] = " Kristine and Robert's Wedding ";

		$this->load->library("user_agent");
		
	}
	
	public function _render ($views = array(), $data = NULL) {
		if ($data == NULL) $data = $this->data;
		if (!is_array($views)) $views = array($views);
		
		if(!isset($_GET['no_css'])){
			$this->load->view("layout/html_start", array()$data);
			$this->load->view("layout/header", array()$data);
			$this->load->view("layout/nav", array()$data);
		}
		
		foreach ($views as $view) {
			$this->load->view($view, array()$data);
		}
		
	  	$data['day']   = 25;     // Day of the countdown
		$data['month'] = 8;      // Month of the countdown
		$data['year'] = 2012;   // Year of the countdown
		$data['hour']  = 19;     // Hour of the day (east coast time)
		$data['event'] = "Kristine and Robert's wedding "; //event

		$calculation = ((mktime ($data['hour'],0,0,$data['month'],$data['day'],$data['year']) - time(void))/3600);
		$data['hours'] = (int)$calculation;
		$data['days']  = (int)($data['hours']/24);

		
		if(!isset($_GET['no_footer'])){
			$this->load->view("layout/footer", $data);
			$this->load->view("layout/html_end", $data);
		}
	}
	
	public function _load_css($css) {
		$css = (array)$css;
		foreach ($css as $c)
			$this->data['template']['css'][] = $c;
	}
	
	public function _load_lib($lib) {
		if (!$this->lib) $this->load->model("common/lib");
		
		$lib = (array)$lib;
		foreach ($lib as $l)
			$this->data['template']['libraries'][] = $this->lib->get($l);
	}
}

