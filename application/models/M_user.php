<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

	public function getUser($id){
		$this->db->where('id',$id);	
		$query = $this->db->get('users');

		return $query;
	}

	public function getAllPost($user_id){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->order_by('tgl_post', 'DESC');
		$this->db->join('users','users.id = post.user_id');
		$query = $this->db->get();
		return $query;
	}

	public function getUserPost($id){
		$this->db->where('user_id',$id);
		$query = $this->db->get('post');

		return $query;
	}

	public function createPost($data){
		$query = $this->db->insert('post',$data);

		return $query;
	}
}
?>