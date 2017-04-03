<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_admin extends CI_Model{

    public function getUser($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    public function countItem($kategori)
    {
        $this->db->where('kategori',$kategori);
        $this->db->from('post');
        $hitung = $this->db->count_all_results();
        return $hitung;
    }

    public function getAllPost($kategori){
        $this->db->select('post.id, post.file, post.caption, post.tgl_post,users.nama');
        $this->db->from('post');
        $this->db->join('users', 'users.id = post.user_id');
        $this->db->where('kategori',$kategori);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function delete($id,$nama_file){
        unlink("upload/$nama_file");
        $this->db->delete('post', array('id' => $id));
        return true;
    }
}