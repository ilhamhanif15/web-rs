<!doctype html>
<html lang="en">
  <?php $this->load->view('header.php') ?>

  <body>
	<?php $this->load->view('navbar') ?>
	<!-- END OF NAVBAR -->
    <?php $this->load->view($content) ?>
	<?php $this->load->view('footer.php') ?>
    <?php $this->load->view('script.php')?>
  </body>
</html>