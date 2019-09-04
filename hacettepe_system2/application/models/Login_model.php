<?php

class Login_model extends CI_Model{
	public function get_user_by_username($data){
		return $this->db->get_where('users',array('user_name'=>$data['username'],'password'=>$data['password']));
		
	}
	public function validate_username($username){

		$usernames = $this->db->get('users')->result_array();
		$names = array();
		foreach ($usernames as $usernam) {
			if($username==$usernam['user_name']){
				return 0;
			} 
		}
		return 1;
	}
}

?>
