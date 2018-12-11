<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN	
        <small>Edit Pendaftar</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Edit Data Peserta Hisfarsijabar</h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
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
				<a href="">
			  		<button type="submit" class="btn btn-primary" id="btnSubmit" style="width: 45%">Update Data</button>
			  	</a>
			  	&nbsp
			  	<a href="<?php echo base_url().'registrasi'?>">
			  		<button type="submit" class="btn btn-danger" id="btnSubmit" style="width: 45%">Kembali</button>
			    </a>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
    </section>
    <!-- /.content -->
  </div>