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
				 $this->form_validation->set_message('check_database', 'Invalid username or password');
				 return false;
		   }
	}
	
}
?>