<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	public function cek($username, $password){
		$array = array('username' => $username, 'password' => $password);
		$this->db->where($array);	
		$query = $this->db->get('users');

		return $query;
	}

}
?>