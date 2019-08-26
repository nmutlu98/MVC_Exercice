<?php
class Admin extends CI_Controller{
	function __construct() {
	        parent::__construct();
	        $this->load->model("user_model");
	    }
	public function index(){
		$page_data['title'] = "Admin Login";
		$this->load->view("admin_login/admin_login",$page_data);
	}
	public function validate_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$user = $this->user_model->get_user($username,$password)->row_array();
		if(!empty($user) && $user['is_admin']){
			$page_data['title'] = "Admin";
			$this->load->view('admin_main/main_screen',$page_data);
		} else{
			echo "You are not authorized to see this page";
		}
	}
}
?>
