<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**********************************
*	Signup controller
*	This handles authentication
*	for Simer v2.0
*	@author bourgeois247
* 	Copyright (c) 2014
*/

class Signup extends MY_Controller 
{	

	public function __construct()
	{
		parent::__construct();		
	}
	
	public function index()
	{}

	public function signup_user_ajax(){

		//Validate user input
		$this->view  = false;

		if($this->input->post('ajax') == '1') {
			$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

			$this->form_validation->set_message('required', 'Please fill in the field');

			if($this->form_validation->run()) {

				$this->output->set_content_type('application/json')->set_output(json_encode(['message'=>'Success', 'status'=>'1']));
			} else {
				
				$errors = ['firstname'=>form_error('firstname'), 'lastname'=>form_error('lastname'), 'password'=>form_error('password'), 'email'=>form_error('email')];
				$this->output->set_content_type('application/json')->set_output(json_encode(['message'=>$errors, 'status'=>'0']));
			}
		}
	}
}
 
