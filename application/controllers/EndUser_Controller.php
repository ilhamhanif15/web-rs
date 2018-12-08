<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EndUser_Controller extends CI_Controller {

	public function homepage($navSection = NULL)
	{
		$data['content'] = 'homepage';
		$data['navSection'] = $navSection;
		$this->load->view('layout_user/master',$data);
	}
	
	public function daftar()
	{
		$data['content'] = 'daftar';
		$this->load->view('layout_user/master',$data);
	}

	public function proses_daftar()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('nama');
		$email = $this->input->post('nama');
		$dataInput = [
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email
		];
		$this->model_daftar->insert($dataInput);
	}

	public function list()
	{
		/*Ada Tabel*/
		$data['content'] = 'list';
		/*$data['tittle'] = 'List';*/
		/*Proses ambil database*/
		$res = $this->model_listDaftar->get();
		$data['rest'] = $res;
		$this->load->view('layout_user/master',$data);
	}

	public function verifikasi()
	{
		$data['content'] = 'verifikasi';
		$this->load->view('layout_user/master',$data);
	}

	public function materi()
	{
		$data['content'] = 'materi';
		$this->load->view('layout_user/master',$data);
	}

}
