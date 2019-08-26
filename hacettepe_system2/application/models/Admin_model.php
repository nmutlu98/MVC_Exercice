<?php
class Admin_model extends CI_Model{
	function __construct() {
	        parent::__construct();
	        $this->load->model("user_model");
	    }
	public function get_user($username,$pass){
		
	}
}
?>
