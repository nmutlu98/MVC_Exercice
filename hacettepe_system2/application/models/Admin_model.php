<?php
class Admin_model extends CI_Model{
	function __construct() {
	        parent::__construct();
	        $this->load->model("user_model");
	        $this->load->model("commitee_model");
	    }
	public function confirm_request($id){
		$b = $this->user_model->add_permission($id);
		$a = $this->db->set('status',1)->where(array('id'=>$id))->update('pending_permissions');
		$page_data['permissions'] = array();
		$res = $this->commitee_model->get_pending_permissions()->result_array();
		$say = 0;
		foreach ($res as $r) {
		 	$user = $this->user_model->get_user_by_id($r['user'])->row_array();
		 	$commitee = $this->commitee_model->get_commitee_by_id($r['commitee_id'])->row_array();
		 	$page_data['permissions'][$say]['first_name'] = $user['first_name'];
		 	$page_data['permissions'][$say]['last_name'] = $user['last_name'];
		 	$page_data['permissions'][$say]['commitee_name'] = $commitee['commitee_name'];
		 	$page_data['permissions'][$say]['id'] = $r['id'];
		 	$say++;
		}
		if($a && $b){
			$page_data['message'] = "İşlem Tamamlandı";
		} else{
			$page_data['message'] = "Hata";
		}
		$this->load->view('admin_main/give_permissions',$page_data);
	}
	public function reject_request($id){
		$a = $this->db->set('status',-1)->where(array('id'=>$id))->update('pending_permissions');
		$page_data['permissions'] = array();
		$res = $this->commitee_model->get_pending_permissions()->result_array();
		$say = 0;
		foreach ($res as $r) {
		 	$user = $this->user_model->get_user_by_id($r['user'])->row_array();
		 	$commitee = $this->commitee_model->get_commitee_by_id($r['commitee_id'])->row_array();
		 	$page_data['permissions'][$say]['first_name'] = $user['first_name'];
		 	$page_data['permissions'][$say]['last_name'] = $user['last_name'];
		 	$page_data['permissions'][$say]['commitee_name'] = $commitee['commitee_name'];
		 	$page_data['permissions'][$say]['id'] = $r['id'];
		 	$say++;
		}
		if($a){
			$page_data['message'] = "İşlem Tamamlandı";
		} else{
			$page_data['message'] = "Hata";
		}
		$this->load->view('admin_main/give_permissions',$page_data);
	}

}
?>
