<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * 
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 * 
	 **/
	
	public function __construct () {
		parent::__construct();
	}
	
	
	public function index()
	{
		
		$this->_load_css(array(CSS."home.css"));

		$this->load->model("quiz");
		$data['quiz'] = $this->quiz->get(16);
		
		$data['poll'] = $this->quiz->get(16,'poll');
		
		//die(print_r($this->data['quiz']));
		if(isset($_GET['name'])){
			$data['name'] = $_GET['name'];
		}
		
		$this->_render("home/home",$data);
		//$this->load->view('home',$data);
		
	}
	
	public function skeleton() {
		$this->_render();
	}
	
	public function process_quiz_answer(){

		$this->load->model("quiz");
		$this->quiz->process($_POST['wedding_quiz_questions_id'],$_POST['answer_result']);


		$data['results'] = $_POST;		
		$this->output->set_content_type('json')->set_output(json_encode($data['results']));
		
	}

	public function quiz_answer(){
		
		$this->load->model("quiz");    
		//$data = $_GET;
		$data['quiz_results'] = $this->quiz->results($_GET['wedding_quiz_questions_id']);

		

    $this->load->view('home/quiz_answer',$data);

	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
