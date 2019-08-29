<?php
class Document_model extends CI_Model{
	public function get_document_by_id($id){
		return $this->db->get_where('documents',array('id'=>$id));
	}
	public function add_document($data){
		return $this->db->insert('documents',$data);
	}
	public function get_document_id($doc_name){
		return $this->db->get_where('documents',array('document_name'=>$doc_name))->row_array()['id'];
	}
}

?>
