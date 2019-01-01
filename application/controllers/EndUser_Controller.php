<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EndUser_Controller extends CI_Controller {
	public $harga = 1250000;

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
					$dataInput2 = [
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
				if(!$this->model_registrasi->insert($dataInput2)){
					$this->session->set_flashdata('erro_msg','Terjadi Kesalahan Saat Mendaftar, cek koneksi internet lalu Ulangi kembali');
					return redirect('daftar') or exit();
				}
			}
		}
		$this->sendEmail($dataInput,$insertedId);
		return redirect('daftarBerhasil/'.$insertedId);
	}

	public function daftarBerhasil($id){
		$data['content'] = 'daftarBerhasil';
		$data['scriptPage'] = 'daftarBerhasil';
		$dataCondition = ['id' => $id];
		$pendaftar = $this->model_registrasi->get($dataCondition);
		$pendaftar = $pendaftar->result();
		$pd = $pendaftar[0];
		if($pd->jenisBayar == -1){
			$dataCondition2 = ['jenisBayar' => $id];
			$listPdSponsor = $this->model_registrasi->get($dataCondition2);
			$jumOrg = $listPdSponsor->num_rows() + 1;
		}else{
			$jumOrg = 1;
		}
		$hargana = ($this->harga*$jumOrg)+$id;
		$harga = number_format($hargana);
		$data['harga'] = str_replace(',', '.', $harga).',00';
		$data['terbilang'] = ucwords($this->additional->convertNum($hargana));
		$data['id'] = $id;
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

	/*--------------VERIFIKASI-----------------------*/
	public function verifikasi($id=NULL)
	{
		$data['content'] = 'verifikasi';
		$data['scriptPage'] = 'verifikasi';
		$data['idReg'] = $id;
		$this->load->view('layout_user/master',$data);
	}

	public function apiCekUser($noUrut)
	{
		$dataCondition = [
			'id' =>$noUrut
		];
		$res = $this->model_registrasi->get($dataCondition);
		if($res->num_rows() != 0){
			$res = $res->result();
			$data['name'] = $res[0]->nama;
			$data['adr'] = $res[0]->alamat;
			if($res[0]->jenisBayar == 0){
				$data['jenis'] = 'Personal';
			}else{
				$data['jenis'] = 'Sponsor';
			}
			if($res[0]->bukti == NULL){
				$data['bukti'] = False;
			}else{
				$data['bukti'] = True;
			}
			$ret = json_encode($data);
		}
		else{
			$ret = '{"id":"NotFound"}';
		}
		echo $ret;
	}

	public function uploadBukti()
	{
		$cek = $this->additional->cekInputPost([
			'noUrut',
		]);
		
		if (!$cek['status']){
			$this->session->set_flashdata('error_msg','
				<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Terdapat Kesalahan saat melakukan upload, silahkan ulangi kembali.
				</div>
			');
			return redirect('verifikasi') or exit();
		}

		$id = $this->input->post('noUrut');
		$path = $_FILES['bukti']['name'];
		$newName = "Bukti_".$id.".".pathinfo($path, PATHINFO_EXTENSION); 
		$config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5120;
        $config['overwrite']			= TRUE;
        $config['file_name']			= $newName;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('bukti'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_msg','
					<div class="alert alert-danger" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Error:</span>
					  Terdapat Kesalahan saat melakukan upload, silahkan ulangi kembali.
					</div>
				');
				return redirect('verifikasi') or exit();
        }
        else
        {
        		$this->setUploadDB($newName,$id);
                $data = array('upload_data' => $this->upload->data());
                 $this->session->set_flashdata('success_msg','
					<div class="alert alert-success" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Success:</span>
					  Berhasil Melakukan Verifikasi Pembayaran
					</div>
				');
				return redirect('verifikasi') or exit();
        }
	}

	public function setUploadDB($newName,$id)
	{
		$dataSet = [
			'bukti' => $newName
		];
		$dataCondition = [
			'id'=>$id
		];
		if(!$this->model_registrasi->update($dataCondition,$dataSet)){
			$this->session->set_flashdata('error_msg','
				<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Terdapat Kesalahan saat melakukan upload, silahkan ulangi kembali.
				</div>
			');
			return redirect('verifikasi') or exit();
		}
		
		$dataGet = $this->model_registrasi->get(['id' => $id]);
		$dataGet = $dataGet->result();
		if($dataGet[0]->jenisBayar == -1){ //If Sponsor
			$dataPendaftar = $this->model_registrasi->get(['jenisBayar' => $id]);
			foreach ($dataPendaftar->result() as $c) {
				if($c->bukti == NULL){
					$dataSet = [
						'bukti' => $newName
					];
					$dataCondition = [
						'id'=>$c->id
					];
					if(!$this->model_registrasi->update($dataCondition,$dataSet)){
						$this->session->set_flashdata('error_msg','
							<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Error:</span>
							  Terdapat Kesalahan saat melakukan upload, silahkan ulangi kembali.
							</div>
						');
						return redirect('verifikasi') or exit();
					}
				}
			}
		}
	}

	/*------------END OF VERIFIKASI-----------------*/
	public function materi()
	{
		$data['content'] = 'materi';
		$this->load->view('layout_user/master',$data);
	}

	public function sendEmail($data,$id)
    {
    	//Load email library
		$this->load->library('email');

		//SMTP & mail configuration
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'panitiahisfarsijabar@gmail.com',
		    'smtp_pass' => 'hisfarsijabar2017',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		//Email content
		if($data['jenisBayar'] == -1){
			$dataCondition2 = ['jenisBayar' => $id];
			$listPdSponsor = $this->model_registrasi->get($dataCondition2);
			$jumOrg = $listPdSponsor->num_rows() + 1;
		}else{
			$jumOrg = 1;
		}
		$hargana = ($this->harga*$jumOrg)+$id;
		$harga = number_format($hargana);
		$data['harga'] = str_replace(',', '.', $harga).',00';
		$data['terbilang'] = ucwords($this->additional->convertNum($hargana));
		$data['id'] = $id;

		$htmlContent = $this->load->view('cetak/templateEmail',$data,true);

		$this->email->to($data['email']);
		$this->email->from('panitiahisfarsijabar@gmail.com','Hisfarsi Jabar');
		$this->email->subject('[HISFARSIJABAR] Cara Pembayaran');
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();
    }

}
