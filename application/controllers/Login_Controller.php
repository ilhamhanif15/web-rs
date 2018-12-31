<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		if($this->session->userdata('id') != NULL)
        {
        	redirect('admin/dashboard');
        }else{
			$this->load->view('content_admin/login');
        }
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->additional->cekInputPost(['username','password']);
		
		if (!$cek['status']){
			return redirect('admin/login') or exit();
		}

		$data = [
			'username' => $username,
			'password' => $this->additional->encryptIt($password),
		];
		$res = $this->model_user->get($data);
		if($res->num_rows() != 0){
			$res = $res->result();
			$data2 = [
				'id' => $res[0]->id,
				'nama' => $res[0]->nama
			];
			$user = array_merge($data,$data2);
			$this->session->set_userdata($user);
			$id = $this->additional->encryptSess($this->session->userdata('id'),'id');
			$this->session->set_userdata('id',$id);

			redirect('admin/dashboard');
		}else{
			$this->session->set_flashdata('username',$username);
			$this->session->set_flashdata('password',$password);
			$this->session->set_flashdata('error_msg_login','Username Atau Password Salah');
			return redirect('admin/login') or exit();
		}
	}

	public function logout(){
		session_destroy();
		redirect('admin/login');
	}
}