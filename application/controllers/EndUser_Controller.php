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

	public function list()
	{
		/*Ada Tabel*/
		$data['content'] = 'list';
		$this->load->view('layout_user/master',$data);
	}

}
