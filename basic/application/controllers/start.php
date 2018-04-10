<?php
/**
* Index file
*/
class start extends CI_Controller{

function index(){
	$data = array(
		'value' => 'no',
		'msg' => 'null'
	);
	$this->load->view('index',$data);
	}


//From view->menu.php
function validate_user(){
	//echo "In Validate_user";
	$this->load->model('database_login');

	$bool=$this->database_login->signin();
	$role=$this->database_login->getRole($this->input->post('signinuser'));
	

	if($bool){
		$data = array(
			'client_name'=>$this->input->post('signinuser'),
			'is_logged_in'=>true,
			'userid'=>$this->database_login->getUserId($this->input->post('signinuser')),
			'role'=>$role
			);
		$this->session->set_userdata($data);
		
		if($role=='admin'){
			redirect('admin/index');
		}else{
		redirect('success_work/success');}
	}else{
		//echo "galat hai login";
		$data=array('msg'=>'either username or password is wrong',
					'value' => 'null'
			);
		// redirect('start');
		$this->load->view('index',$data);
	}
}



function validate_register(){
	//echo "In Validate_register";

	$u=$this->input->post('username');
	$e=$this->input->post('email');
	$p=$this->input->post('password');
	$p2=$this->input->post('password2');

	//name,user msg,validation rule
	$this->load->library('form_validation');

	$this->form_validation->set_rules('username','Name','trim');
	$this->form_validation->set_rules('email','Email','trim|valid_email');
	$this->form_validation->set_rules('password','Password','trim|min_length[4]');
	$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

	//echo "Username:$u<br>Email:$e<br>Password:$p";
	if ($this->form_validation->run()==FALSE) {//echo "Fail";
		$data = array('value' => 'yes',
						'msg' =>'null');
		$this->load->view('index',$data);
	}else{//echo "Pass";
	$data=array(
			'username'=>$u,
			'email'=>$e,
			'password'=>md5($p)
			);
	//print_r($data);
	$this->load->model('database_register');
	$this->database_register->Add($data);

	success_registration();
	//redirect('success_registration');

	}

}

function success_registration(){
	$this->load->view('success_registration');
}


//Blog-all articles
function blog(){
	$this->load->model('database_blog');
	$result['data']=$this->database_blog->blogs();

	$this->load->view('blog',$result);

}

//Blog-read 1 article fully
function readfullarticle(){
	$this->load->model('database_blog');
	$id=$this->uri->segment(3);

	$result['data']=$this->database_blog->Postbyid($id);

	$this->load->view('readfullarticle',$result);

}

//Blog-all Posts by a user
	function postbyuser(){
		$this->load->model('database_blog');
		$userid=$this->uri->segment(3);

		$data['data'] =$this->database_blog->userPosts($userid);

		$this->load->view('postbyuser',$data);



	}

//About US
function aboutus(){
	$this->load->view('aboutus');
}

//Contact US
function contactus(){
	$this->load->view('contactus');
}




function search(){
	$search_term = $this->input->post('search');

	$this->load->model('db_search');
	$data['data'] = $this->db_search->get_results($search_term);

	$this->load->view('search_result',$data);

}


}

?>
