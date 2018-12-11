<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EndUser_Controller extends CI_Controller {

	public function homepage($navSection = NULL)
	{
		$data['content'] = 'homepage';
		$data['navSection'] = $navSection;
		$this->load->view('layout_user/master',$data);
	}
	
	/*----------------DAFTAR-------------------*/
	public function daftar()
	{
		$data['content'] = 'daftar';
		$data['scriptPage'] = 'daftar';
		$this->output->cache(1);
		$this->load->view('layout_user/master',$data);
	}

	public function proses_daftar()
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
				  Terjadi Kesalahan Saat Mendaftar
				</div>
			');
			return redirect('daftar') or exit();
		}

		$dataInput = [
			'nama' => $nama,
			'alamat' => $alamat,
			'kota' => $kota,
			'kodepos' => $kodePos,
			'jenisBayar' => $jenis,
			'noHP' => $noHP,
			'email' => $email,
			'institusi' => $institusi
		];
		$insertedId = $this->model_registrasi->insert($dataInput);
		if($insertedId == NULL){
			$this->session->set_flashdata('error_msg','
				<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Terjadi Kesalahan Saat Mendaftar, Cek koneksi internet lalu ulangi kembali
				</div>
			');
			return redirect('daftar') or exit();
		}
		if($jenis == -1){ /*---Jika Sponsor---*/
			$idx = $this->input->post('idxTambah');
			for ($i=1; $i <= $idx; $i++) { 
				if($this->input->post('nama'.$i) != NULL){
					$nama = $this->input->post('nama'.$i);
					$institusi = $this->input->post('institusi'.$i);
					$noHP = $this->input->post('noHP'.$i);
					$email = $this->input->post('email'.$i);
					$alamat = $this->input->post('alamat'.$i);
					$kota = $this->input->post('kota'.$i);
					$kodePos = $this->input->post('kodePos'.$i);
					$dataInput = [
						'nama' => $nama,
						'alamat' => $alamat,
						'kota' => $kota,
						'kodepos' => $kodePos,
						'jenisBayar' => $insertedId,
						'noHP' => $noHP,
						'email' => $email,
						'institusi' => $institusi
					];
				}
				if(!$this->model_registrasi->insert($dataInput)){
					$this->session->set_flashdata('erro_msg','Terjadi Kesalahan Saat Mendaftar, cek koneksi internet lalu Ulangi kembali');
					/*delete data sebelumnya*/
					return redirect('daftar') or exit();
				}
			}
		}
		return redirect('daftarBerhasil/'.$insertedId);
	}

	public function daftarBerhasil($id){
		$data['content'] = 'daftarBerhasil';
		$data['scriptPage'] = 'daftarBerhasil';
		$harga = 20000+$id;
		$data['harga']=number_format($harga);
		$this->load->view('layout_user/master',$data);
	}

	/*-------------END OF DAFTAR-------------------*/

	public function list()
	{
		/*Ada Tabel*/
		$data['content'] = 'list';
		$data['tittle'] = 'List';
		/*Proses ambil database*/
		$res = $this->model_registrasi->get();
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
