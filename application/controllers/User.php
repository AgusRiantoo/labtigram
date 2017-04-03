<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_user');
		if (!$this->session->userdata('isLogin')) {
			redirect('welcome');
		}

	}

	public function index()
	{
		$userid = $this->session->userdata('user_id');
		$data['user'] = $this->m_user->getUser($userid)->row();

		$data['post'] = $this->m_user->getAllPost($userid)->result();

		$this->load->view('user/header',$data);
		$this->load->view('user/home',$data);
		$this->load->view('user/footer');
	}

	public function profile()
	{
		$userid = $this->session->userdata('user_id');
		$data['user'] = $this->m_user->getUser($userid)->row();

		$data['post'] = $this->m_user->getUserPost($userid)->result();

		$this->load->view('user/header',$data);
		$this->load->view('user/profile',$data);
		$this->load->view('user/footer');
	}

	public function about()
	{
		$userid = $this->session->userdata('user_id');
		$data['user'] = $this->m_user->getUser($userid)->row();

		$this->load->view('user/header',$data);
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}

	public function upload()
	{
		$userid = $this->session->userdata('user_id');
		$data['user'] = $this->m_user->getUser($userid)->row();
		$this->load->view('user/header',$data);
		$this->load->view('user/upload');
		$this->load->view('user/footer');
	}

	public function posting()
	{
		$userid = $this->session->userdata('user_id');

		$kategori = $this->input->post('kategori');
		$caption = $this->input->post('caption');

		$config['upload_path'] = './upload/';
		$config['encrypt_name'] = true;
		
		if ($kategori == 1) {
	        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
	        $config['max_size'] = 5000;
	    }else{
	        $config['allowed_types'] = 'MP4|mp4';
	        $config['max_size'] = 20000;
		}

		$this->load->library('upload', $config);

		if($this->upload->do_upload('input_file')) {
			$upload = $this->upload->data();
			$file = $upload['file_name'];
			$data = array(
				'user_id'	=> $userid,
				'file'		=> $file,
				'caption' 	=> $caption,
				'kategori'	=> $kategori,
			);

			$req = $this->m_user->createPost($data);
			echo "<script>alert('Berhasil menambahkan postingan');</script>";
			redirect('user');

		}else{
			echo "<script>alert('Gagal menambahkan postingan');history.go(-1)</script>";
		}

		

	}
}
