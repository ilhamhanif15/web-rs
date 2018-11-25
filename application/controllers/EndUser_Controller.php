<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EndUser_Controller extends CI_Controller {

	public function index()
	{
		$data['content'] = 'homepage';
		$this->load->view('layout_user/master',$data);
	}
	
	public function daftar()
	{
		$data['content'] = 'daftar';
		$this->load->view('layout_user/master',$data);
	}

	public function daftarSukses()
	{
		$data['content'] = 'daftarSukses';
		$this->load->view('layout_user/master',$data);
	}

	public function cekStatusDaftar()
	{
		/*Ada Tabel*/
		$data['content'] = 'cekStatusDaftar';
		$this->load->view('layout_user/master',$data);
	}

}
