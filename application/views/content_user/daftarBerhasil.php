<style type="text/css">
	.btn-tambahOrg {
		background-color: #5385ff;
		border-color: #5385ff;
		color: white;
		width: 100%;
		margin-bottom: 35px;
	}

	.btn-hapusOrg{
		padding-left: 12px;
		padding-right: 12px;
		padding-top: 6px;
		padding-bottom: 6px;
	}
</style>
<div class="container">
	<div class="row">
	  	<div class="col-md-10 col-md-offset-1 col-sm-12">
	  		<h1 style="border-bottom-style: solid;">Daftar Berhasil</h1>
	  		<div class="alert alert-info text-center" style="margin-top: 10px" id="contentData">
          		<h3> NOTIFIKASI</h3> 
          		<hr />
	            <i class="glyphicon glyphicon-warning-sign" style="font-size: 50px"></i>
	          	<p style="font-size: 20px;">
		         Anda telah berhasil melakukan pendaftaran<br/>
		         Silahkan lanjutkan dengan membayar biaya pendaftaran sebesar<br/>
		         <strong style="font-size: 25px;">Rp. <?php echo $harga ?></strong><br/>
		         <strong>Lakukan Pembayaran beserta nomor uniknya<br/>seperti yang tertera diatas ke rekening berikut:</strong><br/>
		         BNI: 13513513516 (Solji)<br/>
		         BCA: 26246262461 (Suwaldi WikWIk)<br/>
		         <button class="btn btn-primary" style="width: 100%;" id="btnSimpanEmail"><i class="glyphicon glyphicon-envelope "></i> Simpan lewat email</button>
		         <button class="btn btn-success" style="width: 100%;" id="btnSaveAsPict" onclick="saveAsPict()"> Simpan Sebagai Gambar</button>
		         <hr/>
		         Jika sudah melakukan pembayaran, bisa melanjutkan ke tahap konfirmasi untuk meng-upload bukti pembayaran<br/>
		         <a href="<?php echo base_url().'verifikasi'?>">
		         <button class="btn btn-success" id="btnKonfirmasi" style="width: 100%;">Ke Tahap Konfirmasi <i class="glyphicon glyphicon-menu-right pull-right"></i></button></a>
	        	</p>
		        <hr />
	        </div>
	  	</div>
	</div>
</div>