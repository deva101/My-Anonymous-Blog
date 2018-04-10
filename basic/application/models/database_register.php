<?php
/**
* Checking if signed in user exist
*/
class database_register extends CI_Model{
function register()	{
	$this->db->where('username',$this->input->post('signinuser'));
	$this->db->where('password',md5($this->input->post('signinpassword')));

	$q=$this->db->get('valid_users');
	
	if ($q->num_rows()==1) {
		return true;
	}else{
		return false;
	}		
	
	}

function Add($data){
	$this->db->insert('valid_users',$data);

}



}
