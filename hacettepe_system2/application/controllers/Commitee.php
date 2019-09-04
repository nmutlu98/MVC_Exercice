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
			var_dump($this->session->userdata('user_kod'));
			echo "You are not authorized to see this page";
		}
}
	public function ask_for_permission($slug){
		$commitee = $this->commitee_model->get_commitee_by_slug($slug)->row_array();
		$permissions = $this->user_model->get_user_permissions($this->session->userdata('user_kod'));
		$page_data['commitees'] = $this->commitee_model->get_commitees()->result_array();
		$page_data['message'] = "";
		if(in_array($commitee['id'], $permissions)){
			$page_data['message'] = "Bu komiteye erişim izniniz zaten var.";
		} else{
			$data['user'] = $this->session->userdata('user_kod');
			$data['commitee_id'] = $commitee['id'];
			if($this->commitee_model->add_pending_permissions($data)){
				$page_data['message'] = "İsteğiniz alınmıştır. Adminlerin onaylaması için bekleyin.";
			} else{
				$page_data['message'] = "Bir sorun oluştu tekrar deneyin.";
			}
		}
		$this->load->view('main_screen/main_screen',$page_data);

	}
	public function update_commitee($slug){
		$com = $this->commitee_model->get_commitee_by_slug($slug)->row_array();
		$page_data['commitee'] = $com;
		$this->load->view('admin_main/update',$page_data);
	}
	public function save_commitee($id){
		$data['commitee_name'] = htmlspecialchars($this->input->post('name'));
		$data['commitee_subject'] = htmlspecialchars($this->input->post('subject'));
		$data['commitee_courses'] = array();
		$say = 0;
		foreach (explode(",",htmlspecialchars($this->input->post('courses'))) as $course) {
			if(!empty($course)){
				if(!$this->course_model->is_course_name($course)){
					$this->course_model->add_course($course);
				}
				$data['commitee_courses'][$say] = $this->course_model->get_course_by_name($course)->row_array()['id'];
				$say++;
			} 
			
		}
		
		$data['commitee_courses'] = implode(",",$data['commitee_courses']);
		$page_data['message'] = "";
		$res = $this->course_model->update_course($id,$data);
		$page_data = array();
		$page_data['commitee'] = $this->commitee_model->get_commitee_by_id($id)->row_array();
		if($res){
			$page_data['message'] = "İşlem tamamlandı.";
		} else{
			$page_data['message'] = "İşlem Başarısız";
		
		}
			$this->load->view('admin_main/update',$page_data);
	}
	public function delete_document($id){
		
	}

}
?>
