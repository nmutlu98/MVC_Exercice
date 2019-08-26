<?php
	class Commitee extends CI_Controller{
		function __construct() {
	        parent::__construct();
	        $this->load->model("commitee_model");
	        $this->load->model("user_model");
	        $this->load->model("course_model");
	    }
	public function commitee_page($commitee_slug){
		$permissions = $this->user_model->get_user_permissions($this->session->userdata('user_kod'));
		$commitee = $this->commitee_model->get_commitee_by_slug($commitee_slug)->row_array();
		$page_data['title'] = $commitee['commitee_name'];
		$page_data['commitee'] = $commitee['commitee_name'];
		$page_data['courses'] = array();
		$page_data['commitee_id'] = $commitee['id'];
		$course_ids = explode(",", $commitee['commitee_courses']);
		foreach($course_ids as $id){
			$page_data['courses'][] = array($this->course_model->get_course_name_by_id($id),$id);
		}
		if(in_array($commitee['id'], $permissions)||$this->user_model->is_authorized($this->session->userdata('user_kod'))){
			$this->load->view("committee/course_page",$page_data);
		} else{
			echo "You are not authorized to see this page";
		}
}

}
?>