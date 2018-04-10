<?php
/**
*
*/
class database_blog extends CI_Model{
	function __construct(){
		parent::__construct();
	}

//All the blogs in the database
	function blogs(){
		$sql = "SELECT * FROM `valid_users`, `post_data` WHERE  post_data.status = 'Active' AND valid_users.userid = post_data.userid ";
		$q=$this->db->query($sql);

		if ($q->num_rows()>0){
			foreach ($q->result() as $value) {
					$data[]=$value;}
		}

		return $data;

	}

//single post by clicking Read More
	function Postbyid($id){
		$sql = "SELECT * FROM `valid_users`, `post_data` WHERE valid_users.userid = post_data.userid AND post_data.status = 'Active' AND post_data.postid =".$id;
		$q=$this->db->query($sql);

	if ($q->num_rows()>0) {
		foreach ($q->result() as $value){
			$data[]=$value;
		}
	}

	return $data;
}


//All Posts by a particular user
function userPosts($userid){
		$sql = "SELECT * FROM `valid_users`, `post_data` WHERE  valid_users.userid = post_data.userid AND post_data.status = 'Active' AND identity='Show' AND post_data.userid=".$userid;
		$q=$this->db->query($sql);

		if ($q->num_rows()>0) {
			foreach ($q->result() as $value) {
				$data[]=$value;
			}
		}

		return $data;

	}

}
