<div class="container">
	<div class="row">
		<div class="col-md-12">
	  		<h1 style="border-bottom-style: solid;">Materi</h1>
					<table id="table-data" class="table table-striped table-bordered" style="width:100%">
						 <thead>
						     <tr>
						         <th>No</th>
						         <th>Materi</th>
						         <th>Pemateri</th>
						         <th><center>Download Materi</center></th>
						         
						     </tr>
						 </thead>
						 <tbody>

			    	<?php
			    		for ($i=0; $i < 50; $i++) { 
			    	?>
			        <tr>
			            <td><?php echo $i ?></td>
			            <td><?php echo 'Materi '.$i ?></td>
			            <td><?php echo 'Pemateri '.$i ?></td>
			            <td>
			            	<center>
			            	<a href="#">
                				<i class="glyphicon glyphicon-download-alt" style="font-size:20px;color:#3c87c7"></i>
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

		</div>