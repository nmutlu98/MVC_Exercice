<?php
class Home extends CI_Controller{
	
	function index(){
		$page_data['title'] = "Giriş";
		$this->load->view('login/login',$page_data);
	}
}
?>