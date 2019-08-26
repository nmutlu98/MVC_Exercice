<?php

class Login_model extends CI_Model{
	public function get_user_by_username($data){
		return $this->db->get_where('users',array('user_name'=>$data['username'],'password'=>$data['password']));
		
	}
}

?>
