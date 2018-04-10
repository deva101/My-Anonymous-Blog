<?php
/**
* Admin Panel
*/
class admin extends CI_Controller{	
	function __construct(){
		parent::__construct();
		
		$this->load->model('database_admin');
		$this->load->library('form_validation');
		$this->is_log_in();
	}
function is_log_in(){
	//$val=$this->session->userdata('is_logged_in');

	if ( !$this->session->userdata('is_logged_in')) {
		$b=base_url(); 
		echo "Unauthorise user <a href=\"$b\">Click Here</a> to try again ";
		die();
	}
}

// Admin Panel
	function index(){
		$this->load->view('admin');
	}

//See all users in db
	function users(){
		$users['data']=$this->database_admin->users();

		$this->load->view('admin_users',$users);		
	}

// Delete user from database
	function delete_user(){
		$userid=$this->uri->segment(3);
		
		$this->database_admin->delete_user($userid);
		redirect('admin/users');
	}


//Routing to Change password pg
function changepwd(){
	$this->load->view('changepassword_admin');
}


//validate new password
function checkpassword(){
	$old=$this->input->post('old');
	$new1=$this->input->post('new1');
	$new2=$this->input->post('new2');
	$userid=$this->session->userdata('userid');
	
	$bool=$this->database_admin->checkoldpass($old);
	$this->form_validation->set_rules('new1','Password','trim|min_length[4]');
	$this->form_validation->set_rules('new2', 'Confirm Password', 'matches[new1]');

	if ($bool) {
		//Correct old Password
		if ($this->form_validation->run()==FALSE){//Form validation failed
			$data=array(
			'validation'=>'Validation'
			);
			$this->load->view('changepassword_admin',$data	);			
		}else{
			$this->database_admin->changepassword($new1);
			redirect('admin/index');		
		}
		

	}else{
		//Incorrect Old Password
		$data=array(
			'msg'=>'Incorrect Old Password'
			);

		$this->load->view('changepassword_admin',$data);
	}

	
}


//routing to posts pg
function posts(){
	$result['data']=$this->database_admin->blogs();

	$this->load->view("posts_admin",$result);
}


//routin to change status
function status(){
	$postid=array(
		'data' => $this->uri->segment(3)
	);
	$this->load->view('changestatus_admin',$postid);
}

//changestatus from db
function changestatus(){
	$status=$this->input->post('status');
	$postid=array(
		'data' => $this->uri->segment(3)
	);

	$this->database_admin->changestatus($status,$postid['data']);
	redirect('admin/posts');
}


//logout
function logout(){

	$this->session->sess_destroy();
	redirect('start');
}

}