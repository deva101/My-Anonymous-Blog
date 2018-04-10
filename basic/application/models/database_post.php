<?php
/**
* adding post ot database
*/
class database_post extends CI_Model{
	function post(){
		$title=$this->input->post('title');
		$msg=$this->input->post('msg');
		$today=date('Y-m-d');


		if ($this->input->post('anonymous')=='Y') {
			$identity='Hidden';
		}else{
			$identity='Show';
		}
		//str_replace('&nbsp;', '', $msg);str_replace('<br>', '', $msg),

		$data= array(
			'userid'=>$this->session->userdata('userid'),//from session
			'date'=>$today,
			'title'=>$title,
			'message'=>$msg,
			'identity'=>$identity,
			'status'=>'Pending'
			);

		$this->db->insert('post_data',$data);

	}


}
