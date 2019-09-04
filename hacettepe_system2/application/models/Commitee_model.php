<?php
class Commitee_model extends CI_Model{
	public function get_commitees(){
		return $this->db->get('commitees');
	}
	public function get_commitee_by_slug($slug){
		return $this->db->get_where('commitees',array('commitee_slug'=>$slug));
	}
	public function get_commitee_by_id($id){
		return $this->db->get_where('commitees',array('id'=>$id));
	}
	public function add_commitee($data){
		return $this->db->insert('commitees',$data);
	}
	public function is_course($com_id,$course_id){
		$com = explode(",",$this->get_commitee_by_id($com_id)->row_array()['commitee_courses']);
		if(in_array($course_id, $com)){
			return 1;
		} else{
			return $this->add_course($com_id,$course_id);
		}
	}
	public function add_course($com_id,$course_id){
		$com = $this->get_commitee_by_id($com_id)->row_array()['commitee_courses'];
		$com.=",".$course_id;
		$this->db->where(array('id'=>$com_id));
		$this->db->set('commitee_courses',$com);
		return $this->db->update('commitees');
	}
	public function get_pending_permissions(){
		return $this->db->get_where('pending_permissions', array('status' => 0 ));
	}
	public function add_pending_permissions($data){
		$permissions = $this->get_pending_permissions()->result_array();
		foreach ($permissions as $per) {
			if($per['user']==$data['user'] && $per['commitee_id']==$data['commitee_id']){
				return 1;
			}
		}
		return $this->db->insert('pending_permissions',$data);
	}
}

?>
