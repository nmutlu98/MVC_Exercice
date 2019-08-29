<?php
class Operation extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('commitee_model');
		$this->load->model('document_model');
		$this->load->model('user_model');
	}
	public function add_commitee(){
			$this->load->view('admin_main/add_commitee');
	}
	public function add_course(){
			$this->load->view('admin_main/add_course');
	}
	public function add_document(){
			$this->load->view('admin_main/add_document');
	}
	public function add_authorized_person(){
			$this->load->view('admin_main/add_authorized_person');
	}
	public function give_permissions(){
			$this->load->view('admin_main/give_permissions');
	}
	public function save_commitee(){
		$this->user_model->initialize_permissions(1);
		$name = $this->input->post('name');
		$subject = $this->input->post('subject');
		$courses = explode(",",$this->input->post('courses'));
		$data['commitee_name'] = htmlspecialchars($name);
		$data['commitee_subject'] = htmlspecialchars($subject);
		$str = $this->course_model->get_courses_string_by_id($courses);
		$data['commitee_courses'] = $str;
		$data['commitee_slug'] = slugify($name);
		$res = $this->commitee_model->add_commitee($data);
		if($res){
			$this->load->view('admin_main/add_commitee'); ?>
			<script type="text/javascript">
				alert("İşlem Başarılı");
			</script>
		<?php 
		 } else{ 
		 	$this->load->view('admin_main/add_commitee');
		 ?>
			<script type="text/javascript">
				alert("İşlem Başarısz");
			</script>
	<?php	 }
	}
	public function save_document(){
		$config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $res = $this->upload->do_upload('document');
		$data['document_name'] = htmlspecialchars($this->input->post('document_name'));
		$data['commitee'] = htmlspecialchars($this->input->post('commitee_number'));
		$data['course'] = $this->course_model->get_course_by_name(htmlspecialchars($this->input->post('course')))->row_array()['id'];
	
		if (!$this->upload->do_upload('document')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data['document_link'] = base_url()."uploads/".$this->upload->data()['file_name'];
        }	
        $res = $this->document_model->add_document($data);
        $r = $this->course_model->add_document(array($data['commitee'],$this->document_model->get_document_id($data['document_name'])),$data['course']);
		if($res && empty($error['error'])){
			$this->load->view('admin_main/add_document'); ?>
			<script type="text/javascript">
				alert("İşlem Başarılı");
			</script>

		<?php 
		 } else{ 
		 	$this->load->view('admin_main/add_document');
		 ?>
			<script type="text/javascript">
				alert("İşlem Başarısız");
			</script>
	<?php	 }
	}
	public function save_authorized_person(){
		$this->user_model->initialize_permissions(2);
		$data['first_name'] = htmlspecialchars($this->input->post('first_name'));
		$data['last_name'] = htmlspecialchars($this->input->post('last_name'));
		$data['username'] = $this->input->post('user_name');
		$res = $this->user_model->make_authorized($data);
		if($res){
			$this->load->view('admin_main/add_authorized_person'); ?>
			<script type="text/javascript">
				alert("İşlem Başarılı");
			</script>

	<?php	} else{ 
				$this->load->view('admin_main/add_authorized_person'); ?>
			<script type="text/javascript">
				alert("İşlem Başarısız");
			</script>
	<?php	}
	}
	public function save_permissions(){
		if($this->input->post('button')=="add_member"){
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['start_membership'] = $this->input->post('no');
			$this->user_model->save_user($data);
		} else if($this->input->post('button')=="delete_member"){
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['end_membership'] = $this->input->post('no');
			$this->user_model->delete_user($data);
		} else if($this->input->post('button')=="add_member_list"){

		} else{

		}
	}


}
?>