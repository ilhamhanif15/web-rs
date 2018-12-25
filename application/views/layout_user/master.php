<!doctype html>
<html lang="en">
  <?php $this->load->view('layout_user/header.php') ?>
	<body>		
		<div class="ubea-loader"></div>
		<div id="page">
			<?php $this->load->view('layout_user/navbar') ?>
			<!-- END OF NAVBAR -->
		    <?php $this->load->view('content_user/'.$content) ?>
			<?php $this->load->view('layout_user/footer.php') ?>
		    <?php $this->load->view('layout_user/script.php') ?>
		</div>
  	</body>
</html>