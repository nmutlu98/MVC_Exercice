<?php 
class Course_model extends CI_Model{
	public function get_course_name_by_id($id){
		return $this->db->get_where('courses',array('id'=>$id))->row_array()['course_name'];
	}
	public function get_course_by_id($id){
		return $this->db->get_where('courses',array('id'=>$id));
	}
	public function get_courses_string_by_id($array){
		$str = "";
		foreach ($array as $name) {
			if($this->is_course_name(strtolower($name))){
				$str.=$this->db->get_where('courses',array('course_name'=>$name))->row_array()['id'].",";
			} else{
				$this->add_course($name);
				$str.=$this->db->get_where('courses',array('course_name'=>$name))->row_array()['id'].",";
			}
		}
		return substr($str, 0,strlen($str)-1);
	}
	public function is_course_name($str){
		$sql = $this->db->query('SELECT * from courses')->result_array();
		foreach ($sql as $el) {
			if(!strcmp($el['course_name'],$str)){
				return 1;
			}
		}
		return 0;
	}
	public function get_courses(){
		return $this->db->get('courses');
	}
	public function add_course($course_name){
		$data['course_name'] = strtolower($course_name);
		$this->db->insert('courses',$data);
	}
	public function get_course_by_name($str){
		return $this->db->get_where('courses',array('course_name'=>strtolower($str)));
	}
	public function get_course_documents($course_id){
		return $this->db->get_where('courses',array('id'=>$course_id));
	}
	public function add_document($arr,$course_id){
		//$arr[0] => commitee id $arr[1] =>document id
		$str = "(".$arr[0]."/".$arr[1].")";
		$data['course_documents'] = $this->get_course_documents($course_id)->row_array()['course_documents'].",".$str;
		$this->db->where(array('id'=>$course_id));
		$this->db->update('courses',$data);
	}
	public function update_course($id,$data){
		return $this->db->where(array('id'=>$id))->update('commitees',$data);
	}

}
?>
