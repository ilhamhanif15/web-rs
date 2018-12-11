<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function index()
	{
		$data['content'] = 'dashboard';
		$this->load->view('layout_admin/master',$data);
	}

	public function registrasi()
	{
		$data['content'] = 'registrasi';
		$this->load->view('layout_admin/master',$data);
	}

	public function editPendaftar()
	{
		$data['content'] = 'editPendaftar';
		$this->load->view('layout_admin/master',$data);
	}


}