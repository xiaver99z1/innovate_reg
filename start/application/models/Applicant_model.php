<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applicant_Model extends CI_Model{

    public function getApplicants($restore){
		if($restore == 1){
			$query = $this->db->query("SELECT `applicant_id`, `lastname`, `firstname`, `middlename`, `phone`, `email`, `resume`, DATE_FORMAT(`date_created`,'%M %d, %Y %h:%i %p') as date_created, DATE_FORMAT(`date_updated`,'%M %d, %Y %h:%i %p') as date_updated,`applicant_delete`, IF(`applicant_delete`= '0','Active','Delete') as applicant_delete_text FROM `tbl_applicant` where applicant_delete = '1'");
		}else{
			$query = $this->db->query("SELECT `applicant_id`, `lastname`, `firstname`, `middlename`, `phone`, `email`, `resume`, DATE_FORMAT(`date_created`,'%M %d, %Y %h:%i %p') as date_created, DATE_FORMAT(`date_updated`,'%M %d, %Y %h:%i %p') as date_updated ,`applicant_delete`, IF(`applicant_delete`= '0','Active','Delete') as applicant_delete_text FROM `tbl_applicant` where applicant_delete = '0'");
		}
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return NULL;
		}
    }
	
	function updateApplicant(){
		$name = $this->input->post('name');
		$pk = $this->input->post('pk');
		$value = $this->input->post('value');
		$query = $this->db->query("UPDATE `tbl_applicant` SET ".$name."='".$value."', date_updated = NOW() WHERE applicant_id=".$pk."");
		
		echo json_encode($value);
	}
	
	function updateApplicantStatus(){
		$arrstorageid = $this->input->post('arrstorageid');
		$option1Storage = $this->input->post('option1Storage');
		foreach($arrstorageid as $elem){
			$result = $this->db->query('UPDATE `tbl_applicant` SET `applicant_delete`="'.$option1Storage.'" WHERE applicant_id = '.$elem.'');
			if($result){
				echo json_encode(true);
			}
		}
	}
}

?>