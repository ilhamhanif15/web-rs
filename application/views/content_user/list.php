<style type="text/css">
	.table > tbody > tr > td{
		text-align: center;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 style="border-bottom-style: solid;">List Pendaftar</h1>
	  		<div class="alert alert-info">
			  <strong>Info!</strong> Indicates a neutral informative change or action.
			</div>
			<form action="#" method="post">
			<table id="table-data" class="table table-striped table-bordered" style="width: 100%">
			    <thead>
			        <tr>
			            <th>No.Urut</th>
			            <th>Nama</th>
			            <th>Institusi</th>
			            <th>Jenis Pembayaran</th>
			            <th>Aksi</th>
			        </tr>
			    </thead>
			    <tbody>

			    	<?php
			    		/*for ($i=0; $i < 350; $i++) {*/
			    		foreach($rest->result() as $c)  {
			    	?>
			        <tr>
			            <td><?php echo $c->id ?></td>
			            <td><?php echo $c->nama ?></td>
			            <td><?php echo $c->institusi ?></td>
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
			            	if($c->statusVerif == 1){
			            	?>
			            	Sudah Diterima
                			<?php 
                			} else { 
                			?>
				            	<center>
					            	<a href="<?php echo base_url().'verifikasi/'.$c->id?>">
		                				<button type="button" class="btn btn-info">
		         							 Pembayaran
		        						</button>
		                			</a>
	                			</center>
                			<?php	
                			}
                			?>
                		</td>
			        </tr>
			        <?php } ?>

			    </tbody>
			</table>
		</form>
		</div>
	</div>
</div>