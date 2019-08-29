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
}

?>
