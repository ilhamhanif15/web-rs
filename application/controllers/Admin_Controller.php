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
		$res = $this->model_registrasi->get();
		$data['rest'] = $res;
		$this->load->view('layout_admin/master',$data);
	}

	public function editPendaftar()
	{
		$data['content'] = 'editPendaftar';
		$this->load->view('layout_admin/master',$data);
	}

	public function detailPeserta()
	{
		$data['content'] = 'detailPeserta';
		$res = $this->model_registrasi->get();
		$data['rest'] = $res;
		$this->load->view('layout_admin/master',$data);
	}

	public function dataseminarlama()
	{
		$data['content'] = 'dataseminarlama';
		$this->load->view('layout_admin/master',$data);
	}

	public function tambahPeserta()
	{
		$data['content'] = 'tambahpeserta';
		$this->load->view('layout_admin/master',$data);
	}

	public function editdatalama()
	{
		$data['content'] = 'editdatalama';
		$this->load->view('layout_admin/master',$data);
	}

}