<?php
/**
* Checking if signed in user exist
*/
class database_login extends CI_Model{

function signin()	{
	$this->db->where('username',$this->input->post('signinuser'));
	$this->db->where('password',md5($this->input->post('signinpassword')));

	$q=$this->db->get('valid_users');
	if ($q->num_rows()==1) {
		return true;
	}else{
		return false;
	}

}

function getUserId($u){
	// $q=$this->db->query("SELECT userid FROM valid_users WHERE username='$u' ");

	// if ($q->num_rows()>0) {
	// 	$userid=$q->result();
	// }
	// var_dump($userid);
	// return $userid;
	$this->db->select('userid');
    $this->db->from('valid_users');
    $this->db->where('username',$u);

	return ($this->db->get()->row()->userid);
}

function getRole($user){
	$q = $this->db->query("SELECT role FROM valid_users WHERE username = '$user' ");

	if ($q->num_rows() > 0) {
		return $q->row()->role;
	}
	
	return "user";
	// $this->db->select('role');
	// $this->db->from('valid_users');
	// $this->db->where('username',$username);

	// return ($this->db->get()->row()->role);

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

		$this->db->query("UPDATE valid_users SET password=md5($new) WHERE userid=$userid");	

	}


}
