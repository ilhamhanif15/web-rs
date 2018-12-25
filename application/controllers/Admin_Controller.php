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
		$data['scriptPage'] = 'registrasi';
		$res = $this->model_registrasi->get();
		$data['rest'] = $res;
		$this->load->view('layout_admin/master',$data);
	}

	public function apiStatusVerif($id,$value)
	{
		$dataSet = [
			'statusVerif' => $value
		];
		$dataCondition = [
			'id'=>$id
		];
		if(!$this->model_registrasi->update($dataCondition,$dataSet)){
			$success = 0;
			$msg = '
				<div class="alert-danger-custom">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					 Terjadi Kesalahan saat merubah status pembayaran pada nomor urut ke-'.$id.', Silahkan Ulangi Kembali.          
				</div>
			';
		}else{
			$success = 1;
			$msg = '
				<div class="alert-success-custom">
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					 Berhasil Merubah Status Pembayaran          
				</div>
			';
		}
		$data['msg'] = $msg;
		$data['success'] = $success;
		echo json_encode($data);
	}

	public function editPendaftar($id)
	{
		$data['content'] = 'editPendaftar';
		$data['scriptPage'] = 'editPendaftar';
		$dataCondition = ['id' => $id];
		$pendaftar = $this->model_registrasi->get($dataCondition);
		$pendaftar = $pendaftar->result();
		$data['pendaftar'] = $pendaftar[0];
		$this->load->view('layout_admin/master',$data);
	}

	public function editPendaftarSimpan($id)
	{
		$jenis = $this->input->post('jenis');
		$nama = $this->input->post('nama');
		$institusi = $this->input->post('institusi');
		$noHP = $this->input->post('noHP');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$kodePos = $this->input->post('kodePos');
		$cek = $this->additional->cekInputPost([
			'nama',
			'alamat',
			'kota',
			'kodePos',
			'jenis',
			'noHP',
			'email',
			'institusi'
		]);
		
		if (!$cek['status']){
			$this->session->set_flashdata('error_msg','
				<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Terjadi Kesalahan Saat Melakukan Update, Silahkan Ulangi Kembali
				</div>
			');
			return redirect('editpendaftar/'.$id) or exit();
		}

		$dataCondition = ['id'=>$id];
		$dataSet = [
			'nama' => $nama,
			'alamat' => $alamat,
			'kota' => $kota,
			'kodepos' => $kodePos,
			'jenisBayar' => $insertedId,
			'noHP' => $noHP,
			'email' => $email,
			'institusi' => $institusi
		];
		if(!$this->model_registrasi->update($dataCondition,$dataSet)){
			$success = 0;
			$msg = '
				<div class="alert alert-danger alert-dismissible" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					Terjadi Kesalahan Saat Melakukan Update, Silahkan Ulangi Kembali
				</div>
			';
		}else{
			$success = 1;
			$msg = '
				<div class="alert alert-success alert-dismissible" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					<span class="sr-only">Success:</span>
					Berhasil Mengupdate data
				</div>
			';
		}
		$this->session->set_flashdata('msg_notif',$msg);
		return redirect('registrasi') or exit();
	}

	public function apiHapusBukti($id)
	{
		$dataCondition = ['id'=>$id];
		$dataSet = ['bukti'=>NULL];
		if(!$this->model_registrasi->update($dataCondition,$dataSet)){
			$success = 0;
			$msg = '
				<div class="alert alert-danger alert-dismissible" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					Terjadi Kesalahan Saat Menghapus Bukti, Silahkan Ulangi Kembali
				</div>
			';
		}else{
			$success = 1;
			$msg = '
				<div class="alert alert-success alert-dismissible" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					<span class="sr-only">Success:</span>
					Berhasil Menghapus Bukti
				</div>
			';
		}
		$data['msg'] = $msg;
		$data['success'] = $success;
		echo json_encode($data);
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

	public function akun()
	{
		$data['content'] = 'akun';
		$data['scriptPage'] = 'akun';
		$users = $this->model_user->get();
		$data['rest'] = $users;
		$this->load->view('layout_admin/master',$data);
	}

}