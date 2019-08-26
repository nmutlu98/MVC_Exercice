<?php 
class Login extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("commitee_model");
    }

	public function validate_user(){
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		$data = array();
		$data['username'] = $username;
		$data['password'] = $password;
		if(count($this->login_model->get_user_by_username($data)->result_array())){
			$page_data['title'] = "Komiteler";
			$page_data['commitees'] = $this->commitee_model->get_commitees()->result_array();
			$this->session->set_userdata('user_kod', $this->login_model->get_user_by_username($data)->row_array()['id']);
			$this->load->view("main_screen/main_screen",$page_data);
		}else{
			echo "Your access is forbidden";
		}
	}
	
}

?>