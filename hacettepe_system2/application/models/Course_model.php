<?php 
class Course_model extends CI_Model{
	public function get_course_name_by_id($id){
		return $this->db->get_where('courses',array('id'=>$id))->row_array()['course_name'];
	}
	public function get_course_by_id($id){
		return $this->db->get_where('courses',array('id'=>$id));
	}

}
?>