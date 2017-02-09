<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	 function __construct() {
        parent::__construct();
		 // Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('register_model');
		$this->load->helper('security');
		}	
	 
	public function index()
	{
		// REGISTER
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required|xss_clean|alpha_numeric_spaces');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|xss_clean|min_length[6]|max_length[25]|matches[password]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[users.email]');
			 if ($this->form_validation->run() == FALSE){
                 $this->load->view('register_view');
             }else{
				 $result = $this->register_model->register($_POST);
				 $this->session->set_flashdata('msg', '<p style="color:green;font-weight:bold">Thanks for joining. Login Now.</p>',300);
				 redirect('login');
             }
		
		}else{
			$this->load->view('register_view');
		}
	
		
	}
	
}
?>