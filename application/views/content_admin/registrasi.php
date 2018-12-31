<style type="text/css">
  .divider-menu{
    margin-top: 3px;margin-bottom: 3px;border-width: 2px;border-color: #b9b9b9;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN
        <small>Registrasi</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php echo $this->session->flashdata('msg_notif') ?>
      <div class="row">
        <div id="msg_statusVerif" style="display: none;"></div>
        <!--Daftar User-->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pendaftar Seminar Hisfarsijabar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">Pilihan</th>
                  <th style="text-align: center;">No.Urut</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Institusi</th>
                  <th style="text-align: center;">No.HP</th>
                  <th style="text-align: center;">Email</th>
                  <th style="text-align: center;">Jenis Pembayaran</th>
                  <th style="text-align: center;">Cetak Kwitansi</th>
                  <th style="text-align: center;">Bukti</th>
                  <th style="text-align: center;">Status</th>
              </tr>
                </thead>
                <tbody>
                  <?php
                    /*for ($i=0; $i < 300; $i++) { */
                    foreach($rest->result() as $c)  {
                  ?>

                  <tr style="text-align: center;">
                     <td>
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-primary dropdown-toggle btn-sm" style="padding-bottom: 4px;padding-top: 4px;padding-left: 8px;padding-right: 8px;border-radius: 5px;" data-toggle="dropdown">
                            <span class="fa fa-caret-down fa-lg"></span>
                          </button>
                            <ul class="dropdown-menu" style="border-color: #b9b9b9;">
                              <li><a href="#" class="linkStatusVerif" style="color: #00a65a;" data-value="1" data-id="<?php echo $c->id ?>"><span class="glyphicon glyphicon-ok"></span> DITERIMA</a></li>
                              <li><a href="#" class="linkStatusVerif" style="color: #f39c12;" data-value="0" data-id="<?php echo $c->id ?>"><span class="glyphicon glyphicon-exclamation-sign"></span> DITUNDA</a></li>
                              <li><a href="#" class="linkStatusVerif" style="color: #dd4b39;" data-value="-1" data-id="<?php echo $c->id ?>"><span class="glyphicon glyphicon-remove"></span> DITOLAK</a></li>
                              <hr class="divider-menu" />
                              <li><a href="<?php echo base_url().'editpendaftar/'.$c->id ?>" style="color: #00a65a;"><i class="fa fa-pencil-square-o"></i> UBAH</a></li>
                              <li><a href="#" class="btnLihat" data-id="<?php echo $c->id ?>" style="color: #337ab7" data-detail='<?php echo json_encode($c) ?>'><i class="fa fa-eye"></i> LIHAT DETAIL</a></li>
                            </ul>
                        </div>
                     </td>
                     <td><?php echo $c->id ?></td>
                     <td><?php echo $c->nama ?></td>
                     <td><?php echo $c->institusi ?></td>
                     <td><?php echo $c->noHP ?></td>
                     <td><?php echo $c->email ?></td>
                     <td><?php
                            $styleCetak = NULL; 
                            $idDaftar = $c->id;
                           if ($c->jenisBayar == 0) {
                              echo 'Personal';
                           }else if($c->jenisBayar == -1){
                              echo 'Sponsor';
                           }else{
                              echo 'Sponsor dari No. '.$c->jenisBayar;
                              $styleCetak = 'display: none;';
                              $idDaftar = $c->jenisBayar;
                           } 
                          ?>  
                     </td>
                     <td>
                      <a style="<?php echo $styleCetak ?>" href="<?php echo base_url().'admin/cetakKwitansi/'.$c->id ?>" target='_blank'>
                       <button class="btn btn-primary btnCetak"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                      </a>
                     </td>
                     <td>
                        <?php 
                        if($c->bukti != NULL){
                        ?>
                        <a href="#" class="pop">
                          <i class="fas fa-file-image" data-img="<?php echo base_url().'assets/uploads/'.$c->bukti ?>" style="font-size: 40px;"></i>
                        </a>
                      <?php } else{ ?>
                        -
                      <?php } ?>
                    </td>
                     <td class="SV<?php echo $idDaftar ?>" id="SVD<?php echo $c->id ?>">
                          <?php 
                           if ($c->statusVerif == 0) {
                              echo '<span class="label label-warning" style="font-size: inherit;">Ditunda</span>';
                           }else if ($c->statusVerif == 1){
                              echo '<span class="label label-success" style="font-size: inherit;">Diterima</span>';
                           }else{
                              echo '<span class="label label-danger" style="font-size: inherit;">Ditolak</span>';
                           }
                          ?>                        
                     </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">              
          <div class="modal-body">
            <h3 class='box-title' style="margin-bottom: 10px;"><strong>Data Peserta Hisfarsijabar</strong></h3>
                <table class="table">
                    <tr style="border-top: green;border-top-style: solid;">
                      <th>No. Urut Pendaftaran</th>
                      <td id="noUrut"></td>
                    </tr>
                    <tr>
                      <th>Nama</th>
                      <td id="namaRegistrasi"></td>
                    </tr>
                    <tr>
                      <th>Institusi</th>
                      <td id="institusi"></td>
                    </tr>
                    <tr>
                      <th>No.Handphone</th>
                      <td id="noHP"></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td id="email"></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td id="alamat"></td>
                    </tr>
                    <tr>
                      <th>Kota</th>
                      <td id="kota"></td>
                    </tr>
                    <tr>
                      <th>Kode Pos</th>
                      <td id="kodePos"></td>
                    </tr>
                    <tr>
                      <th>Jenis Pembayaran</th>
                      <td id="jenisBayar"></td>
                    </tr>
                    <tr>
                      <th>Bukti Pembayaran</th>
                      <td id="bukti"></td>
                    </tr>
                </table>
              <a href="<?php echo base_url().'editpendaftar'?>" class="btn btn-success"><span class="fa fa-edit"></span> Ubah</a>
          </div>
        </div>
      </div>
    </div>

<!--     <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">              
          <div class="modal-body">
            <h3 class='box-title' style="margin-bottom: 10px;"><strong>Data Peserta Hisfarsijabar</strong></h3>

          </div>
        </div>
      </div>
    </div> -->
    <!-- /.content -->
  </div>