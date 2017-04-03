<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_user');
		if (!$this->session->userdata('isLogin')) {
			redirect('welcome');
		}
		$this->load->model('m_admin');

	}

	public function index()
	{
		$userid = $this->session->userdata('user_id');
		$data['userData'] = $this->m_admin->getUser($userid);
		$data['jlhGambar'] = $this->m_admin->countItem('1');
		$data['jlhVideo'] = $this->m_admin->countItem('2');
		$data['content']	= 'admin/dashboard';
		$data['judul']		= 'Dashboard';
		$this->load->view('admin/content',$data);
	}

	public function gambar()
	{
		$data['content']	= 'admin/gambar';
		$data['judul']		= 'Gambar';
		$data['item']       = $this->m_admin->getallPost('1');
		$this->load->view('admin/content',$data);
	}

	public function video()
	{
		$data['content']	= 'admin/video';
		$data['judul']		= 'Video';
		$data['item']       = $this->m_admin->getallPost('2');
		$this->load->view('admin/content',$data);
	}

	public function hapusGambar($id)
	{
		$delete = $this->m_admin->delete($id);
		if ($delete) {
			redirect("admin/gambar");
		}
	}

	public function hapusVideo($id,$nama_file)
	{
		$delete = $this->m_admin->delete($id,$nama_file);
		if ($delete) {
			redirect("admin/video");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome','refresh');
	}
}