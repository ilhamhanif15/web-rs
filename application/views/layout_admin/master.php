<!DOCTYPE html>
<html>

<?php $this->load->view('layout_admin/header') ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('layout_admin/navbar') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout_admin/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view('content_admin/'.$content) ?>
  <!-- /.content-wrapper -->
  <?php $this->load->view('layout_admin/footer') ?>

</div>
<!-- ./wrapper -->
<?php $this->load->view('layout_admin/script') ?>
</body>
</html>
