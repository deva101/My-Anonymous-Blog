<?php
/**
* 
*/
class db_search extends CI_Model{
	
	function __construct(){
		parent::__construct();

	}

	function get_results($search_term='default'){
		// Use the Active Record class for safer queries.
	        // $this->db->select('*');
	        // $this->db->from('post_data');
	        // $this->db->like('title',$search_term);


        // Execute the query.
        	//$query = $this->db->get();

		$sql = "SELECT * FROM `valid_users`, `post_data` WHERE  post_data.status = 'Active' AND valid_users.userid = post_data.userid AND post_data.title LIKE '".$search_term."'";
		$query=$this->db->query($sql);

        // Return the results.
        if ($query->num_rows()>0){
			foreach ($query->result() as $value) {
					$data[]=$value;}
		
		return $data;
		}

		
		



	}





}