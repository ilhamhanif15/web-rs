<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-12">
			<h1 style="border-bottom-style: solid;">List</h1>
	  		<div class="alert alert-info">
			  <strong>Info!</strong> Indicates a neutral informative change or action.
			</div>
			<table id="table-data" class="table table-striped table-bordered" style="width:100%">
			    <thead>
			        <tr>
			            <th>No.Urut</th>
			            <th>Nama</th>
			            <th>Alamat</th>
			            <th>Email</th>
			            <th>Status</th>
			            <th>Aksi</th>
			        </tr>
			    </thead>
			    <tbody>

			    	<?php
			    		for ($i=0; $i < 350; $i++) { 
			    	?>
			        <tr>
			            <td><?php echo $i ?></td>
			            <td><?php echo 'Nama '.$i ?></td>
			            <td><?php echo 'Alamat '.$i ?></td>
			            <td><?php echo 'Email '.$i ?></td>
			            <td>Status</td>
			            <td>
			            	<center>
			            	<a href="<?php echo base_url().'verifikasi'?>">
                				<button type="button" class="btn btn-success">
         							 <span class="glyphicon glyphicon-ok"></span> Verifikasi
        						</button>
                			</a>
                			</center>
                		</td>
			        </tr>
			        <?php } ?>

			    </tbody>
			</table>
		</div>
	</div>
</div>