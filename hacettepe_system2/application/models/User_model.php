<?php 
class User_model extends CI_Model{
	public function get_user_permissions($id){
		return explode(",",$this->db->get_where('users',array('id'=>$id))->row_array()['permissions']);
	}
	public function is_authorized($id){
		$user = $this->db->get_where("users",array('id'=>$id))->row_array();
		return $user['is_admin']||$user['is_controller']||$user['is_question_solver'];
	}
	public function get_user($username,$pass){
		return $this->db->get_where('users',array('user_name'=>$username,'password'=>$pass));
	}
}


?>