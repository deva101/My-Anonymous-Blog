<?php
/**
* 
*/
class user_authentication extends CI_Controller{	
	function __construct(){
		parent::__construct();

		//load fb page
		$this->load->library('facebook');

		//load user model
		$this->load->model('user');
	}

	function index(){
		$userData=array();

		//check if user logged in
		if ($this->facebook->is_authenticated() ) {
			//get user fb profile details
			$userProfile=$this->facebok->request('get','/me?fields=id,first_name,last_name,email,gender,locale,picture');

			//preparing data for db insertion
			$userData['oauth_provider']='facebook';
			$userData['oauth_uid']=$userProfile('id');
			$userData['first_name']=$userProfile('first_name');
			$userData['last_name']=$userProfile('last_name');
			$userData['email']=$userProfile('email');
			$userData['gender']=$userProfile('gender');

			//isert or update data
			$userID=$this->user-checkUser($userData);

			//chk user data insert or update status
			if (!empty($userID)) {
				$data['userData']=$userData;
				$this->session->set_userdata('userData',$userData);
			}else{
				$data['userData']=array();
				}

			//get logout url
				$data['logoutUrl']=$this->facebook->logout_url();



			}else{
				$fbuser='';

				//get login url
				$data['authUrl']=$this->facebook->login_url();
			}

			//load login & profile view
			$this->load->view('user_authentication/index',$data);
		}

	


	function logout(){
		//remove local fb session
		$this->facebook->destroy_session();

		//remove user data from session
		$this->session->unset_userdata('userData');

		//redirect to login pg
		redirect('/user_authentication');

	}



}