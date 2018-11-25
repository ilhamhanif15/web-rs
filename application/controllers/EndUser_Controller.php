<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EndUser_Controller extends CI_Controller {

	public function index()
	{
		$data['content'] = 'homepage';
		$this->load->view('master',$data);
	}
	
	public function daftar()
	{
		$data['content'] = 'daftar';
		$this->load->view('master',$data);
	}

	public function daftarSukses()
	{
		$data['content'] = 'daftarSukses';
		$this->load->view('master',$data);
	}

	public function cekStatusDaftar()
	{
		$data['content'] = 'cekStatusDaftar';
		$this->load->view('master',$data);
	}

	public function tableProcess()
	{	 
		
	}
}
