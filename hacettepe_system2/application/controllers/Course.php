<?php
class Course extends CI_Controller{
	function __construct() {
	        parent::__construct();
	        $this->load->model("commitee_model");
	        $this->load->model("user_model");
	        $this->load->model("course_model");
	        $this->load->model("document_model");
	    }
	public function course_page($committe,$id){
		$course = $this->course_model->get_course_by_id($id)->row_array();
		$documents = explode(",",$course['course_documents']);
		$committe_documents = array();
		$say = 0;
		foreach ($documents as $doc) {
			$doc = str_replace("(", " ", $doc);
			$doc = str_replace(")", " ", $doc);
			$doc = trim($doc);
			$doc = explode('/', $doc);
			if($id==$doc[1]){
				$committe_documents[$say] = $this->document_model->get_document_by_id($doc[0])->row_array();
				$say++;
			}
		}
		$page_data['documents'] = $committe_documents;
		$page_data['title'] = $course['course_name'];
		$page_data['commitee'] = $committe;
		$page_data['commitee_name'] = $this->commitee_model->get_commitee_by_id($committe)->row_array()['commitee_name'];
		$this->load->view("document/document_page",$page_data);
	}
}
?>