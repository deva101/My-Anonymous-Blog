<?php
/**
*
*/
class database_admin extends CI_Model{
	function __construct()	{
		parent::__construct();
	}

//See all users in db
	function users(){
		$q=$this->db->get('valid_users');

		if ($q->num_rows() >0) {
			foreach ($q->result() as $value) {
				$data[]=$value;
			}
		}
		return $data;
	}


//Delete user from db
	function delete_user($userid){
		$this->db->where('userid',$userid);
		$this->db->delete('valid_users');
	}


//checkoldpass
	function checkoldpass($old){
		$userid=$this->session->userdata('userid');

		$this->db->where('password',md5($old));
		$this->db->where('userid',$userid);
		$q=$this->db->get('valid_users');

		if ($q->num_rows() == 1) {
			return true;
		}
			return false;
	}

//change password
	function changepassword($new){
		$userid=$this->session->userdata('userid');

		$this->db->query("UPDATE valid_users SET password='".md5($new) ."' WHERE userid=$userid");

	}


//All the blogs in the database
	function blogs(){
		$sql = "SELECT * FROM `valid_users`, `post_data` WHERE valid_users.userid = post_data.userid ";
		$q=$this->db->query($sql);

		if ($q->num_rows()>0){
			foreach ($q->result() as $value) {
					$data[]=$value;}
		}

		return $data;

	}


//change status of post 
	function changestatus($new,$postid){
		// $userid=$this->session->userdata('userid');
		
		// foreach ($postid as $value) {
			$this->db->query("UPDATE post_data SET status='$new' WHERE postid=$postid ");
		// }

	}


}
