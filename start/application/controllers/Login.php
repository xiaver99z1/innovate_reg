<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct() {
        parent::__construct();
		
        // Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('login_model','',TRUE);
		$this->load->helper('security');
	}	
	 
	public function index(){
		// REGISTER
		
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
			 if ($this->form_validation->run() == FALSE){
				  if($this->session->userdata('logged_in')) {
					redirect('home', 'refresh');
				 }else{
					 $this->load->view('login_view');
				 }
                 
             }else{
				redirect('home', 'refresh');
             }
		
	}
	
	function check_database($password){
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('email');
		$result = $this->login_model->login($username, $password);
			if($result){
				$resultcheckUserPrivilegde = $this->login_model->checkUserPrivilegde($username, $password);
				if($resultcheckUserPrivilegde){
					$sess_array = array();
					 foreach($result as $row) {
						   $sess_array = array(
							 'id' => $row->id,
							 'email' => $row->email,
							 'name' => $row->name
						   );
						   $this->session->set_userdata('logged_in', $sess_array);
					 }
					return TRUE;
				}else{
					 $this->form_validation->set_message('check_database', '<b>Your account is not activate</b>,<br> please call the system administrator to get access.');
					return false;
				}
			 
		   }else{
				 $this->form_validation->set_message('check_database', '<b>Invalid Credentials.</b>');
				 return false;
		   }
	}
	
}
?>