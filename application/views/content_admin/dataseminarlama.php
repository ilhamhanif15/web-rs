<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN
        <small>Data Seminar Lama</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--Daftar User-->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Data Lama Peserta Seminar Hisfarsijabar</h3>
            </div>
            <div class="box-footer">
                    <a href="<?php echo base_url().'tambahpeserta'?>">
                      <button class="btn btn-info"><i class="fa fa-user-plus"></i> Tambah</button>
                    </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">No.</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Institusi</th>
                  <th style="text-align: center;">No.HP</th>
                  <th style="text-align: center;">Email</th>
                  <th style="text-align: center;">Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    for ($i=0; $i < 300; $i++) { 
                    /*foreach($rest->result() as $c)  { */
                  ?>

                  <tr style="text-align: center;">
                     <td><?php echo $i ?></td>
                     <td><?php echo 'Nama '.$i ?></td>
                     <td><?php echo 'Institusi '.$i ?></td>
                     <td><?php echo 'NoHp '.$i ?></td>
                     <td><?php echo 'Email '.$i ?></td>
                     <td>
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-primary dropdown-toggle btn-sm" style="padding-bottom: 4px;padding-top: 4px;padding-left: 8px;padding-right: 8px;border-radius: 5px;" data-toggle="dropdown">
                            <span class="fa fa-caret-down fa-lg"></span>
                          </button>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url().'editdatalama'?>"><i class="fa fa-pencil-square-o"></i> Edit</a></li>
                              <li><a href="#"><i class="fa fa-eye"></i> View</a></li>
                            </ul>
                        </div>
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