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
	  	<div class="col-md-6 col-md-offset-3 col-sm-12">
	  		<?php echo $this->session->flashdata('error_msg') ?>
	  		<h1 style="border-bottom-style: solid;">Daftar</h1>
	  		<form action="<?php echo base_url().'proses_daftar' ?>" method="post">
			 	<div class="form-group form-group-lg">
					<label for="">Jenis Pembayaran</label>
					<div class="">
					<select class="form-control" name="jenis" id="jenisPembayaran" required="">
						<option value="0">Personal</option>
						<option value="-1">Sponsor</option>
					</select>
					</div>
		      	</div>
				<div class="form-group">
					<label for="">Nama Lengkap dan Gelar</label>
					<input type="text" class="form-control" placeholder="Nama Lengkap dan Gelar" name="nama" required="">
				</div>
				<div class="form-group">
					<label for="">Institusi</label>
					<input type="text" class="form-control" placeholder="Institusi" name="institusi" required="">
				</div>
				<div class="form-group">
					<label for="">Nomor Handphone</label>
					<input type="text" class="form-control" placeholder="Nomor Handphone" name="noHP" required="">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email" required="">
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<input type="text" class="form-control" placeholder="Alamat" name="alamat" required="">
				</div>
				<div class="form-group">
					<label for="">Kota</label>
					<input type="text" class="form-control" placeholder="Kota" name="kota" required="">
				</div>
				<div class="form-group">
					<label for="">Kode Pos</label>
					<input type="text" class="form-control" placeholder="Kode Pos" name="kodePos" required="">
				</div>
				<div id="tambahOrg">
					<input type="hidden" name="idxTambah" id="idxTambah" value="0">
				</div>
				<button type="button" class="btn btn-success btn-tambahOrg">
					<i class="fa fa-plus"></i> TAMBAH ORANG
				</button>
			  	<button type="submit" class="btn btn-primary" id="btnSubmit" style="width: 100%">DAFTAR</button>
			</form>
	  	</div>
	</div>
</div>