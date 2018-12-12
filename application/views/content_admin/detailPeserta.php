<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
   <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title' style="margin-bottom: 10px;"><strong>Data Peserta Hisfarsijabar</strong></h3>
                <table class="table">
                 <?php
                    /*for ($i=0; $i < 300; $i++) { */
                    foreach($rest->result() as $c)  {
                    $id = $c->id;
                  ?>
                    <tr style="border-top: green;border-top-style: solid;">
                      <th>No. Urut Pendaftaran</th>
                      <td><?php echo $c->id ?></td>
                    </tr>
		                <tr>
		                	<th>Nama</th>
		                	<td><?php echo $c->nama ?></td>
		                </tr>
		                <tr>
		                	<th>Institusi</th>
		                	<td><?php echo $c->institusi ?></td>
		                </tr>
		                <tr>
		                	<th>No.Handphone</th>
		                	<td><?php echo $c->noHP ?></td>
		                </tr>
		                <tr>
                      <th>Email</th>
                      <td><?php echo $c->email ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td><?php echo $c->alamat ?></td>
                    </tr>
                    <tr>
                      <th>Kota</th>
                      <td><?php echo $c->kota ?></td>
                    </tr>
                    <tr>
                      <th>Kode Pos</th>
                      <td><?php echo $c->kodepos ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Pembayaran</th>
                      <td>
                        <?php 
                           if ($c->jenisBayar == 0) {
                             echo 'Personal';
                           }else{
                             echo 'Sponsor';
                           } 
                          ?> 
                      </td>
                    </tr>
                    <?php } ?>
		          </table>
              <a href="<?php echo base_url().'editpendaftar'?>" class="btn btn-success"><span class="fa fa-edit"></span> Ubah</a>
              <a href="<?php echo base_url().'registrasi'?>" class="btn btn-danger pull-right"><span class="fa fa-reply"></span> Kembali</a>
             </div><!-- /.box-body -->
            </div><!-- /.box -->
           </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

</div>

<script type="text/javascript">
	//Date picker
    $('.datepicker').datepicker({
      autoclose: true
    })
</script>