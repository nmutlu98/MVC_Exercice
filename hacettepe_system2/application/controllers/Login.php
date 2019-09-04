<?php 
class Login extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("user_model");
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
	public function log_out(){
		$this->session->sess_destroy();
		$this->load->view('login/login');
	}
	public function register(){
		$this->load->view('login/register');
	}
	public function register_user(){
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		$first_name = htmlspecialchars($this->input->post('first_name'));
		$last_name = htmlspecialchars($this->input->post('last_name'));
		$email = htmlspecialchars($this->input->post('email'));
		$page_data['message'] = "";
		if($this->login_model->validate_username($username)){
			$page_data['message'] = "Kaydınız tamamlandı.";
			$data['user_name'] = $username;
			$data['password'] = $password;
			$data['first_name'] = $first_name;
			$data['last_name'] = $last_name;
			$data['email'] = $email;
			$res = $this->user_model->register_user($data);
			if($res)
				$this->load->view('login/login',$page_data);
		} else{
			$page_data['message'] = "Bu kullanıcı adı zaten kullanılmaktadır.";
			$this->load->view('login/register',$page_data);
		}
	}
	
}

?>
