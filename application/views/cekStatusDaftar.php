<div class="container" style="margin-top: 30px;">
	  <div class="row">
	  	<div class="col-md-12 col-sm-12">
	  		<h1 style="border-bottom-style: solid;">Cek Status Daftar</h1>
	  		<div class="alert alert-dark" role="alert">
			  <h4 class="alert-heading">Petunjuk</h4>
			  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
			  <!-- <hr>
			  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
			</div>
			<table id="table-data" class="table table-striped table-bordered table-light" style="width:100%">
			    <thead>
			        <tr>
			            <th>ID</th>
			            <th>Nama</th>
			            <th>Email</th>
			            <th>Status</th>
			        </tr>
			    </thead>
			    <tbody>

			    	<?php
			    		for ($i=0; $i < 350; $i++) { 
			    	?>
			        <tr>
			            <td><?php echo $i ?></td>
			            <td><?php echo 'Nama '.$i ?></td>
			            <td><?php echo 'Email '.$i ?></td>
			            <td>Status</td>
			        </tr>
			        <?php } ?>

			    </tbody>
			</table>
	  	</div>
	  </div>
	</div>