<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_Model extends CI_Model{
	
	function login($email, $password){
		
	   $this -> db -> select('id,name,email, password');
	   $this -> db -> from('users');
	   $this -> db -> where('email', $email);
	   $this -> db -> where('password', MD5($password));
	   $this -> db -> limit(1);
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1){
			return $query->result();
	   }else{
			return false;
	   }
	}
	
	function checkUserPrivilegde($email, $password){
	   $this -> db -> select('id,name,email, password');
	   $this -> db -> from('users');
	   $this -> db -> where('email', $email);
	   $this -> db -> where('password', MD5($password));
	   $this -> db -> where('user_blocked', '1');
	   $this -> db -> limit(1);
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1){
			return $query->result();
	   }else{
			return false;
	   }
	}
   
}
?>