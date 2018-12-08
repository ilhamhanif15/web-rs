<div class="container">
	<div class="row">
	  	<div class="col-md-6 col-md-offset-3 col-sm-12">
	  		<h1 style="border-bottom-style: solid;">Daftar</h1>
	  		<form action="<?php echo base_url().'proses_daftar' ?>">
			 	<div class="form-group">
					<label for="">Jenis Pembayaran</label>
					<div class="">
					<select class="form-control" name="role" required="">
						<option>Personal</option>
						<option>Sponsor</option>
					</select>
					</div>
		      	</div>
				<div class="form-group">
					<label for="">Nama Lengkap dan Gelar</label>
					<input type="text" class="form-control" id="" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="">Institusi</label>
					<input type="email" class="form-control" id="" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="">Nomor Handphone</label>
					<input type="email" class="form-control" id="" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" id="" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<input type="email" class="form-control" id="" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="">Kota</label>
					<input type="email" class="form-control" id="" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="">Kode Pos</label>
					<input type="email" class="form-control" id="" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Kelas Sesi <a class="far fa-question-circle" href="#"></a></label>
					<select class="form-control" id="exampleFormControlSelect1">
					  <option>Sesi 1</option>
					  <option>Sesi 2</option>
					  <option>Sesi 3</option>
					  <option>Sesi 4</option>
					  <option>Sesi 5</option>
					</select>
				</div>
			  	<button class="btn btn-primary" style="width: 100%">DAFTAR</button>
			</form>
	  	</div>
	</div>
</div>