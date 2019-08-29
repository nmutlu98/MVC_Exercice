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
	public function make_authorized($arr){
		$user = $this->db->get_where('users',array('first_name'=>strtolower($arr['first_name']),'last_name'=>strtolower($arr['last_name'])));
		$data = array();
		$data['is_admin'] = 1;
		if(count($user->result_array())==1){
			$id = $user->row_array()['id'];
			$this->db->where(array('id'=>$id));
			$res = $this->db->update('users',$data);
			return $res;
		} else if(count($user->result_array())==0){
			$this->db->insert('users',array('first_name'=>$arr['first_name'],'last_name'=>$arr['last_name'],'is_admin'=>1));
			return 1;
		}
	}
	public function initialize_permissions($user_id){
		$user_info = $this->db->get_where('users',array('id'=>$user_id))->row_array();
		$st_com = $user_info['start_membership'];
		$end_com = $user_info['end_membership'];
		$permissions = "";
		if(empty($end_com)){
			$id = $this->db->order_by('id','desc')->limit(1)->get('commitees')->row_array()['id'];
			for($i = $st_com; $i<=$id; $i++){
				$permissions.=$i.",";
			}
		} else{
			for($i = $st_com; $i<=$end_com; $i++){
				$permissions.=$i.",";
			}
		}
		$data['permissions'] = substr($permissions,0,strlen($permissions)-1);
		$this->db->where(array('id'=>$user_id));
		$this->db->update('users',$data);
	}
	public function get_user_by_name($first_name,$second_name){
		return $this->db->get_where('users',array('first_name'=>$first_name,'last_name'=>$second_name));
	}
	public function save_user($data){
		$user = get_user_by_name($data['first_name'],$data['last_name'])->result_array();
		if(empty($user)){
			return $this->db->insert('users',$data);
		} else{
			
		}
	}
}


?>
