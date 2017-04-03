<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata("isLogin")) {
			redirect();
		}
		$this->load->view('user/header');
		$this->load->view('user/login');
		$this->load->view('user/footer');
	}

	public function cek_login(){
		$this->load->model('m_login');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->m_login->cek($username,$password)->row();
		if($cek){
			$this->session->set_userdata(array(
              'isLogin' => true,
              'user_id' => $cek->id
            ));

			if($cek->role == 1){
				redirect('admin');
			}else{
				redirect('user');
			}
		}else
		{
			echo "<script>alert('username tidak terdaftar');history.go(-1)</script>";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}

}
