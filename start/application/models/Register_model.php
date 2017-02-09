<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register_Model extends CI_Model{

    public function register(){
		
		//$hashToStoreInDb = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

		$data = array(
        'password' => MD5($this->input->post('password')),
        'name' => $this->input->post('fullname'),
        'email' => $this->input->post('email'));
		$this->db->insert('users', $data);
    }
}


/* $this->db->select($this->primaryKey);
        $this->db->from($this->tableName);
        $this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        
        if($prevCheck > 0){
            $prevResult = $prevQuery->row_array();
            $data['modified'] = date("Y-m-d H:i:s");
            $update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
            $userID = $prevResult['id'];
        }else{
            $data['created'] = date("Y-m-d H:i:s");
            $data['modified'] = date("Y-m-d H:i:s");
			$data[] = array("password" => $hashToStoreInDb);
            $insert = $this->db->insert($this->tableName,$data);
            $userID = $this->db->insert_id();
        }

        return $userID?$userID:FALSE;*/
		
?>