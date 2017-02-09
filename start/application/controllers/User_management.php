<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Management extends CI_Controller {
	 function __construct() {
		parent::__construct();
		$this->load->model('applicant_model','',TRUE);
		$this->load->model('user_management_model','',TRUE);
	 }	
	 
	public function index()
	{
		if($this->session->userdata('logged_in')){
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['email'];
			 $data['name'] = $session_data['name'];
			 
			 $data['applicantList'] = $this->applicant_model->getApplicants(0);
			 $data['userList'] = $this->user_management_model->getUsers();
			 $this->load->view('user_management_view', $data);
		}else {
			redirect('login', 'refresh');
		}
	}
	
	function updateUsers(){
		 $this->user_management_model->updateUsers($_POST);
	}
	
	function updateUserAccess(){
		 $this->user_management_model->updateUserAccess($_POST);
	}
}
