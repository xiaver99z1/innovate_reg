<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant extends CI_Controller {
	 function __construct() {
        parent::__construct();
		$this->load->model('applicant_model','',TRUE);
		$this->load->model('user_management_model','',TRUE);
	 }	

	public function index(){
		if($this->session->userdata('logged_in')){
			
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['email'];
			 $data['name'] = $session_data['name'];
			 $restore = $this->input->get('restore');
			 if(isset($restore) == 1){
				 $data['applicantList'] = $this->applicant_model->getApplicants(1);
				  $data['restore'] = 1;
			 }else{
				 $data['applicantList'] = $this->applicant_model->getApplicants(0);
				 $data['restore'] = 0;
			 }
			 
			 $data['userList'] = $this->user_management_model->getUsers();
			 $this->load->view('applicant_view', $data);
		}else {
			redirect('login', 'refresh');
		}
	}
	
	function updateApplicant(){
		 $this->applicant_model->updateApplicant($_POST);
	}
	
	function updateApplicantStatus(){
		 $this->applicant_model->updateApplicantStatus($_POST);
	}
}
