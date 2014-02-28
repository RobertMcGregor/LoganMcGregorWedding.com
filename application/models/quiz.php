<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get ($limit,$type='quiz') {
		
		if(!$limit){
		
		$query = "SELECT *,
										 b.id AS 'qid'
								FROM wedding_quiz_questions AS a
								JOIN wedding_quiz_answers AS b ON a.id = b.wedding_quiz_questions_id 
								WHERE quiz_type = '".$type."' ";
		}else{
			
		$query = "SELECT *,
										 b.id AS 'qid'
								FROM wedding_quiz_questions AS a
								JOIN wedding_quiz_answers AS b ON a.id = b.wedding_quiz_questions_id 
								WHERE quiz_type = '".$type."' 
								LIMIT ".$limit;
		
		}
		
		$quiz = $this->db->query($query)->result_array();

		return $quiz;
	}

	function process ($wedding_quiz_questions_id,$answer_result) {
		
		//$this->load->database();

		$data = array(
	           'wedding_quiz_questions_id'=>$wedding_quiz_questions_id,
	           'wedding_quiz_answers_id'=>$answer_result
	          );
		
		$this->db->insert('wedding_quiz_results',$data);
		/*
		$query = "INSERT INTO wedding_quiz_results 
											SET wedding_quiz_questions_id = ".$wedding_quiz_questions_id.",
													quiz_result = '".$quiz_result."' ";
		
		$success = $this->db->query($query)->result_array();
		*/
	}
	
	function results($wedding_quiz_questions_id){
	
		$query = "SELECT *,
										 COUNT(c.wedding_quiz_answers_id) AS number_of_responses
								FROM wedding_quiz_questions AS a
								JOIN wedding_quiz_answers AS b ON a.id = b.wedding_quiz_questions_id
					 LEFT JOIN wedding_quiz_results AS c ON  c.wedding_quiz_answers_id = b.id
							 WHERE a.id = ".$wedding_quiz_questions_id."
						GROUP BY b.id ";
		
		$results = $this->db->query($query)->result_array();
		
		
		/*
		 //you can do cool stuff here!
		$total_responses = 0;
		foreach($results AS $result){
			$total_responses = $result['number_of_responses'];
		}
		
		$avg_
		
		$result['total_responses'] = $total_responses;
		*/
	
		return $results;
	
	}
	
	
	
}

?>
