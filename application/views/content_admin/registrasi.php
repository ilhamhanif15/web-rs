  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN
        <small>Registrasi</small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Pendaftar Hisfarsijabar 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
			        <tr>
			            <th>No.Urut</th>
			            <th>Nama</th>
			            <th>Institusi</th>
			            <th>No.Handphone</th>
			            <th>Email</th>
			            <th>Alamat</th>
			            <th>Kota</th>
			            <th>Kode Pos</th>
			            <th>Jenis Pembayaran</th>
			            <th>Aksi</th>
			        </tr>
			    </thead>
			    <tbody>

			    	<?php
			    		for ($i=0; $i < 300; $i++) { 
			    	?>
			        <tr>
			            <td><?php echo $i ?></td>
			            <td><?php echo 'Nama '.$i ?></td>
			            <td><?php echo 'Institusi '.$i ?></td>
			            <td><?php echo 'NoHp '.$i ?></td>
			            <td><?php echo 'Email '.$i ?></td>
			            <td><?php echo 'Alamat '.$i ?></td>
			            <td><?php echo 'Kota '.$i ?></td>
			            <td><?php echo 'KodePos '.$i ?></td>
			            <td><?php echo 'JenisPembayaran'.$i ?></td>
			            <td>
			            	<a href="#">
                				<i class="glyphicon glyphicon-eye-open" style="font-size:18px;color: black"></i>
                			</a> 
                			&nbsp
			            	<a href="<?php echo base_url().'editpendaftar'?>">
                				<i class="glyphicon glyphicon-edit" style="font-size:18px;color: black"></i>
                			</a> 
			            </td>
			        </tr>
			        <?php } ?>

			    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>