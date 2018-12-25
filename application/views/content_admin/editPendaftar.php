<style type="text/css">
  select {
    cursor: pointer;
  }
  .subText {
    font-size: small;
    color: grey;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN
        <small>Edit</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div id="msg_notif" style="display: none;"></div>
      <?php echo $this->session->flashdata('error_msg') ?>
      <div class="row">
        <div class="col-md-12 col-md-offset-0 ">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Peserta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?php echo base_url().'editPendaftarSimpan/'.$pendaftar->id ?>">
              <div class="box-body">
              	<div class="form-group">
            	     <label class="col-sm-5 control-label">Jenis Pembayaran</label>
              	   <div class="col-sm-3">
              	     <select class="form-control" name="jenis" required>
                      <?php 
                        if($pendaftar->jenisBayar == 0){
                          $selPers = 'selected=""';
                          $selSpon = '';
                        }else{
                          $selPers = '';
                          $selSpon = 'selected=""';
                        }
                      ?>
              	       <option <?php echo $selPers ?> >Personal</option>
              	       <option <?php echo $selSpon ?> >Sponsor</option>
              	     </select>
              	   </div>
              	</div>
                <div class="form-group">
                  <label for="" class="col-sm-5 control-label">Nama Lengkap dan Gelar</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" value="<?php echo $pendaftar->nama ?>" placeholder="Nama Lengkap dan Gelar" name="nama" required="" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-5 control-label">Institusi</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" value="<?php echo $pendaftar->institusi ?>" placeholder="Institusi" name="institusi" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-5 control-label">Nomor Handphone</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" value="<?php echo $pendaftar->noHP ?>" placeholder="Nomor Handphone" name="noHP" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-5 control-label">Email</label>
                  <div class="col-sm-3">
                    <input type="email" class="form-control" value="<?php echo $pendaftar->email ?>" placeholder="Email" name="email" required="">
                  </div>
                </div>
           			 <div class="form-group">
           			   <label for="" class="col-sm-5 control-label">Alamat</label>
           			   <div class="col-sm-3">
           			   		<input type="text" class="form-control" value="<?php echo $pendaftar->alamat ?>" placeholder="Alamat" name="alamat" required="">
           			   </div>
           			 </div>
           			 <div class="form-group">
           			   <label for="" class="col-sm-5 control-label">Kota</label>
           			   <div class="col-sm-3">
           			   		<input type="text" class="form-control" value="<?php echo $pendaftar->kota ?>" placeholder="Kota" name="kota" required="">
           			   </div>
           			 </div>
                <div class="form-group">
                  <label for="" class="col-sm-5 control-label">Kode Pos</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" value="<?php echo $pendaftar->kodepos ?>" placeholder="Kode Pos" name="kodePos" required="">
                  </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-5 control-label">Status Pembayaran</label>
                   <div class="col-sm-3">
                     <select class="form-control" name="role" required="">
                      <?php 
                        $ditunda = '';
                        $diterima = '';
                        $ditolak = '';
                        if($pendaftar->statusVerif == 0){
                          $ditunda = 'selected=""';
                        }else if($pendaftar->statusVerif == 1){
                          $diterima = 'selected=""';
                        }else{
                          $ditolak = 'selected=""';
                        }
                      ?>
                       <option <?php echo $diterima ?> >Diterima</option>
                       <option <?php echo $ditunda ?> >Ditunda</option>
                       <option <?php echo $ditolak ?> >Ditolak</option>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-5 control-label">
                    Bukti
                    <p class="subText">*Klik icon <i class="fas fa-file-image"></i> untuk melihat bukti</p>
                  </label>
                  <div class="col-sm-3" id="formBukti">
                    <?php
                      $subtxt = 'hidden=""';
                      if($pendaftar->bukti != NULL){
                        $subtxt = '';
                    ?>
                    <button class="btn btn-danger pull-right" id="btnHapusBukti" type="button">Hapus Bukti</button>
                    <a href="#" class="pop">
                      <i class="fas fa-file-image" data-img="<?php echo base_url().'assets/uploads/'.$pendaftar->bukti ?>" style="font-size: 40px;"></i>
                    </a>
                    <?php 
                      } else {
                    ?>
                    <p class="form-control">Tidak Ada</p>
                    <?php 
                      } 
                    ?>
                  </div>
                </div>
              <!-- /.box-body -->
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="imagemodal" tabindex="-1" style="z-index: 9999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">              
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img src="" class="imagepreview" style="width: 100%;" >
          </div>
        </div>
      </div>
    </div>

</div>
