<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**********************************
*	Login controller
*	This handles authentication
*	for Simer v2.0
*	@author bourgeois247
* 	Copyright (c) 2014
*/

class Login extends MY_Controller 
{	

	public function __construct()
	{
		parent::__construct();		
	}
	
	public function index()
	{}

	public function login_user_ajax(){

		//Validate user input
		$this->view  = false;

		if($this->input->post('ajax') == '1') {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

			$this->form_validation->set_message('required', 'Please fill in the field');

			if($this->form_validation->run()) {

				$this->output->set_content_type('application/json')->set_output(json_encode(['message'=>'Success', 'status'=>'1']));
			} else {
				
				$errors = ['username'=>form_error('username'), 'password'=>form_error('password')];
				$this->output->set_content_type('application/json')->set_output(json_encode(['message'=>$errors, 'status'=>'0']));
			}
		}
	}

	/**
	*	logout
	*	Log a user out
	*/
	public function logout()
	{	
		$this->session->sess_destroy();
		redirect('login');
	}
}
 
