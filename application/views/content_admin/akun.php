<style type="text/css">
  .textError {
    text-align: center;
    background-color: #dd4b39;
    color: white;
  }
  .textErrorPass {
    text-align: center;
    background-color: #dd4b39;
    color: white;
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
              <h3 class="box-title">Data Akun Admin</h3>
            </div>
            <button class="btn btn-primary" id="addBtn" type="button" style="margin-left: 10px;"><i class="glyphicon glyphicon-plus"></i> Tambah Akun</button>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">Pilihan</th>
                  <th style="text-align: center;">No.</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Email</th>
                  <th style="text-align: center;">Username</th>
              </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 0;
                    foreach($rest->result() as $c)  {
                      $i++;
                  ?>

                  <tr style="text-align: center;">
                     <td>
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-primary dropdown-toggle btn-sm" style="padding-bottom: 4px;padding-top: 4px;padding-left: 8px;padding-right: 8px;border-radius: 5px;" data-toggle="dropdown">
                            <span class="fa fa-caret-down fa-lg"></span>
                          </button>
                            <ul class="dropdown-menu" style="border-color: #b9b9b9;">
                              <li><a href="#" class="btnEdit" data-nama='<?php echo $c->nama ?>' data-id="<?php echo $c->id ?>" data-uname="<?php echo $c->username ?>" data-email="<?php echo $c->email ?>" style="color: #00a65a;"><i class="fa fa-pencil-square-o"></i> UBAH DATA</a></li>
                              <li><a href="#" class="btnEditPass" data-id="<?php echo $c->id ?>" ><i class="fa fa-lock"></i> UBAH PASSWORD</a></li>
                            </ul>
                        </div>
                     </td>
                     <td><?php echo $i ?></td>
                     <td><?php echo $c->nama ?></td>
                     <td><?php echo $c->email ?></td>
                     <td><?php echo $c->username ?></td>
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

    <div class="modal fade" id="editAkunModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h3 class='box-title' style="margin-bottom: 10px;"><strong>Edit Data Akun</strong></h3>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/editAkun' ?>">
              <input type="hidden" class="idModal" value="" placeholder="Nama" name="id" required="" >
              <div class="box-body">

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="namaModal" value="" placeholder="Nama" name="nama" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="unameModal" value="" placeholder="Username" name="username" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="emailModal" value="" placeholder="Email" name="email" required="" >
                  </div>
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="editPassModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h3 class='box-title' style="margin-bottom: 10px;"><strong>Edit Data Akun</strong></h3>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/editAkunPass' ?>">
              <input type="hidden" class="idModal" value="" placeholder="Nama" name="id" required="" >
              <div class="box-body">
                <p class="textErrorPass" style="display: none;"></p>
                <div class="form-group passBar">
                  <label for="" class="col-sm-3 control-label">Password Baru</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="pass1Modal" value="" placeholder="Password" name="password" required="" >
                  </div>
                </div>

                <div class="form-group passBar">
                  <label for="" class="col-sm-3 control-label">Ketik Ulang Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="pass2Modal" value="" placeholder="Ketik Ulang Password" name="repassword" required="" >
                  </div>
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" id="btnSimpanPass" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addAkunModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h3 class='box-title' style="margin-bottom: 10px;"><strong>Tambah Akun</strong></h3>
            <form class="form-horizontal" id="addForm" method="post" action="<?php echo base_url().'admin/tambahAkun' ?>">
              <div class="box-body">
                <p class="textError" style="display: none;"></p>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="addNama" value="" placeholder="Nama" name="nama" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="addEmail" value="" placeholder="Email" name="email" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="addUsername" value="" placeholder="Username" name="username" required="" >
                  </div>
                </div>

                <div class="form-group passForm">
                  <label for="" class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="addPass" value="" placeholder="Password" name="password" required="" >
                  </div>
                </div>

                <div class="form-group passForm">
                  <label for="" class="col-sm-3 control-label">Ketik Ulang Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="addPass2" value="" placeholder="Ketik ulang Password" name="password2" required="" >
                  </div>
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right" style="width: 100%;">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>