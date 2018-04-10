<?php
/**
* Works after login
*/
class success_work extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('database_login');$this->load->model('database_post');
	$this->load->library('form_validation');
	$this->is_log_in();

} 

function is_log_in(){
	//$val=$this->session->userdata('is_logged_in');

	if ( !$this->session->userdata('is_logged_in')) {$b=base_url(); 
		echo "Unauthorise user <a href=\"$b\">Click Here</a> to try again ";
		die();
	}
}

//Successful Login
function success(){
	$this->load->view('success');
}

//Failed Login
function fail(){
	$this->load->view('fail');
}

function logout(){
	$this->session->sess_destroy();
	redirect('start');

}


//For Posting an Article
function post(){
	
	$this->database_post->post();

	$this->load->view('pending');
}


//Routing to Change password pg
function changepwd(){
	$this->load->view('changepassword');
}


//validate new password
function checkpassword(){
	$old=$this->input->post('old');
	$new1=$this->input->post('new1');
	$new2=$this->input->post('new2');
	$userid=$this->session->userdata('userid');
	
	$bool=$this->database_login->checkoldpass($old);
	$this->form_validation->set_rules('new1','Password','trim|min_length[4]');
	$this->form_validation->set_rules('new2', 'Confirm Password', 'matches[new1]');

	if ($bool) {
		//Correct old Password
		if ($this->form_validation->run()==FALSE){//Form validation failed
			$data=array(
			'validation'=>'Validation'
			);
			$this->load->view('changepassword',$data );			
		}else{
			$this->database_login->changepassword($new1);
			redirect('success_work/success');
		}
		

	}else{
		//Incorrect Old Password
		$data=array(
			'msg'=>'Incorrect Old Password'
			);

		$this->load->view('changepassword',$data);
	}

	
}



}
?>