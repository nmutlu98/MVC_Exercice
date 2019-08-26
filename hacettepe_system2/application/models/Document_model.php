<?php
class Document_model extends CI_Model{
	public function get_document_by_id($id){
		return $this->db->get_where('documents',array('id'=>$id));
	}
}

?>