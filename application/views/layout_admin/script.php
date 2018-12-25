<!-- jQuery 3 -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!-- Morris.js charts -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

 <script>
  $(function () {
    $('#table1').DataTable();
  });

  var counterPull = 0;

/*  function searchMenu() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("mySearch");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myMenu");
      li = ul.getElementsByClassName("menuList");
      lyn = ul.getElementsByClassName('pullMenu')[0];
      lynOpen = ul.getElementsByClassName('treeview')[0];
      cekOpen = lynOpen.classList.contains('menu-open');
      treeLyn = ul.getElementsByClassName('treeLyn')[0];

      li2 = ul.getElementsByClassName("menuList2");
      if (counterPull == 0) {
        lyn = ul.getElementsByClassName('lynMenu')[0];
        lyn.style.display = 'block';
        counterPull = 1;
      }
      var cekS = true;
      
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByClassName("menuName")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";    
          } else {
              li[i].style.display = "none";
          }
      }

      for (i = 0; i < li2.length; i++) {
          a2 = li2[i].getElementsByClassName("menuName2")[0];
          if (a2.innerHTML.toUpperCase().indexOf(filter) > -1) {
              if(!cekOpen){
                lyn.click();
                cekOpen = true;
              }
              li2[i].style.display = "";
              treeLyn.style.display = "";    
          } else {
              li2[i].style.display = "none";
          }
      }

  }*/
</script>

  <?php 
    if(isset($scriptPage)){
      $this->load->view('script_admin/'.$scriptPage);
    }
  ?>