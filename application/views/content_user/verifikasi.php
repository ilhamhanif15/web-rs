<style type="text/css">
	.glyphicon-refresh-animate {
	    -animation: spin .7s infinite linear;
	    -webkit-animation: spin2 .7s infinite linear;
	}

	@-webkit-keyframes spin2 {
	    from { -webkit-transform: rotate(0deg);}
	    to { -webkit-transform: rotate(360deg);}
	}

	@keyframes spin {
	    from { transform: scale(1) rotate(0deg);}
	    to { transform: scale(1) rotate(360deg);}
	}

	.detailCek , td{
		padding-right: 10px;
	}

	.dataPendaftar{
		margin-top: 10px;
		margin-bottom: 10px;
		color: black;
		border-bottom-style: solid;
	}
</style>
<div class="container">
	  <div class="row">
	  	<?php echo $this->session->flashdata('error_msg') ?>
	  	<?php echo $this->session->flashdata('success_msg') ?>
	  	<div class="col-md-4 col-sm-4 col-xs-12" >

		    <div class="alert alert-info text-center" style="margin-top: 10px">
				<h3>TATA CARA UPLOAD BUKTI PEMBAYARAN</h3> 
				<hr />
				<i class="glyphicon glyphicon-warning-sign" style="font-size: 50px"></i>
				<p>
					<ol style="text-align: left;">
						<li>Masukkan Nomor Pendaftaran di kolom <b>"Nomor Pendaftaran"</b>. <a href="<?php echo base_url().'list' ?>"><u>Lupa Nomor Pendaftaran ? Klik Disini</u></a></li>
						<li>Klik Tombol <b>"Cek Nomor"</b></li>
						<li>Lalu akan muncul kolom <b>"Data Pendaftar"</b>, jika belum melakukan pembayaran (via transfer), klik link <b>"Tata Cara Pembayaran"</b> pada kolom tersebut</li>
						<li>Klik <b>"Browse"</b> untuk memilih bukti pembayaran dalam bentuk <b>gambar/foto</b></li>
						<li>Klik <b>"Upload"</b></li>
					</ol>
				</p>
		    </div>

		    <!-- <div class="alert alert-info text-center" style="margin-top: 10px">
				<h3>NOTIFIKASI</h3> 
				<hr />
				<i class="glyphicon glyphicon-warning-sign" style="font-size: 50px"></i>
				<p>
					Jika Anda Lupa Dengan Nomor Pendaftaran Anda Silakan Klik Tombol Dibawah ini.
				</p>
				<hr />
				<a href="<?php echo base_url().'list' ?>" class="btn btn-info">Lupa Nomor Pendaftaran</a> 
		    </div> -->

		</div>
	  	<div class="col-md-6 offset-md-3 col-sm-12">
	  		<h1 style="border-bottom-style: solid;">Upload Bukti Pembayaran</h1>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Nomor Pendaftaran</label>
			    <input type="text" class="form-control" id="inputNoUrut" placeholder="Masukkan Nomor Pendaftaran">
			  </div>
			  <button type="button" class="btn btn-primary" id="btnCek">
			  	Cek Nomor
			  </button>
		  	<form action="<?php echo base_url().'verifikasiUpload' ?>" method="post" enctype="multipart/form-data">
			  <div class="dataPendaftar">
			  	<h4 style="border-bottom-style: solid;margin-bottom: 5px;">Data Pendaftar</h4>
			  	<input type="hidden" name="noUrut" value="" id="noUrut">
			  	<table class="detailCek">
			  		<tr>
				  		<td>NAMA </td>
				  		<td>:</td>
				  		<td id="namaCek"></td>
				  	</tr>
				  	<tr>
				  		<td>ALAMAT</td>
				  		<td>:</td>
				  		<td id="alamatCek"></td>
				  	</tr>
				  	<tr>
				  		<td>JENIS PEMBAYARAN</td>
				  		<td>:</td>
				  		<td id="jpCek"></td>
				  	</tr>
				  	<tr>
				  		<td><a href="#" id="linkTataBayar"><u>Tata Cara Pembayaran</u></a></td>
				  	</tr>
			  	</table>
			  	<div class="notFound">
			  		<center>Data Tidak Ditemukan/Tidak ada</center>
			  	</div>
			  	<div class="sudahUpload">
			  		<center>
			  			Anda Sudah Melakukan Upload Bukti<br/>
			  			Hubungi kontak berikut ini jika ingin melakukan upload ulang<br/>
			  			0812-8782-5105 (Admin)
			  		</center>
			  	</div>
			  </div>
			  <div class="form-group uploadPembayaran">
			    <label for="exampleFormControlInput1">Upload Bukti Pembayaran (Format Gambar)</label>
			    <input type="file" name="bukti" required="">
			  </div>
			  <button class="btn btn-success uploadPembayaran" type="submit">Upload</button>
			</form>
	  	</div>
	  </div>
	</div>

	