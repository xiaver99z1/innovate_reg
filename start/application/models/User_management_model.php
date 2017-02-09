<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Management_Model extends CI_Model{

    public function getUsers(){
		$query = $this->db->query("SELECT `id`, `name`, `email`, `password`, `remember_token`, `user_blocked`, IF(user_blocked = '0','Blocked','Active') as user_blocked_text, `created_at`,DATE_FORMAT(`updated_at`,'%M %d, %Y %h:%i %p') as updated_at FROM `users`");
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return NULL;
		}
    }
	
	function updateUsers(){
		$name = $this->input->post('name');
		$pk = $this->input->post('pk');
		$value = $this->input->post('value');
		if($name == "password"){
			$query = $this->db->query("UPDATE `users` SET ".$name."='".md5($value)."', updated_at = NOW() WHERE id=".$pk."");
			echo json_encode("edit_password");
		}else{
			$query = $this->db->query("UPDATE `users` SET ".$name."='".$value."', updated_at = NOW() WHERE id=".$pk."");
			echo json_encode($query);
		}
	}
	
	
	function updateUserAccess(){
		$arrstorageid = $this->input->post('arrstorageid');
		$option1Storage = $this->input->post('option1Storage');
		foreach($arrstorageid as $elem){
			$result = $this->db->query('UPDATE `users` SET `user_blocked`="'.$option1Storage.'" WHERE id = '.$elem.'');
			if($result){
				echo json_encode(true);
			}
		}
	}
}

?>