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
      <div class="row">
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
                  <th style="text-align: center;">Alamat</th>
                  <th style="text-align: center;">Kota</th>
                  <th style="text-align: center;">Kode Pos</th>
                  <th style="text-align: center;">Jenis Pembayaran</th>
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
                            <ul class="dropdown-menu">
                              <li><a href="#"><span class="glyphicon glyphicon-ok"></span> ACCEPT</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span> PENDING</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-remove"></span> DECLINE</a></li>
                              <li><a href="<?php echo base_url().'editpendaftar' ?>"><i class="fa fa-pencil-square-o"></i> Edit</a></li>
                              <li><a href="<?php echo base_url().'detailPeserta' ?>"><i class="fa fa-eye"></i> View</a></li>
                            </ul>
                        </div>
                     </td>
                     <td><?php echo $c->id ?></td>
                     <td><?php echo $c->nama ?></td>
                     <td><?php echo $c->institusi ?></td>
                     <td><?php echo $c->noHP ?></td>
                     <td><?php echo $c->email ?></td>
                     <td><?php echo $c->alamat ?></td>
                     <td><?php echo $c->kota ?></td>
                     <td><?php echo $c->kodepos ?></td>
                     <td><?php 
                           if ($c->jenisBayar == 0) {
                             echo 'Personal';
                           }else{
                             echo 'Sponsor';
                           } 
                          ?>  
                     </td>
                     <td>
                          <?php 
                           if ($c->statusVerif == 0) {
                             echo 'Pending';
                           }else{
                             echo 'Accept';
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
    <!-- /.content -->
  </div>