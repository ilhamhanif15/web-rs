<!-- jQuery -->
<!-- <script src="<?php //echo base_url() ?>assets/js/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/jquery/dist/jquery.min.js"></script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="<?php echo base_url() ?>assets/js/jquery.countTo.js"></script>
<!-- Flexslider -->
<script src="<?php echo base_url() ?>assets/js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
	$('#table-data').DataTable({
		responsive: true
	});

	<?php if($content == 'homepage'){ ?>
		$('.nav-link').click(function(e){
			if($(this).data('nav-section')){
				e.preventDefault();
				var current = $(this).data('nav-section');
				var dataNav = $(document).find("[data-section='" + current + "']");
				if($('.navbar-toggle').css('display') != 'none'){
					$('.navbar-toggle').click();
				}
				$([document.documentElement, document.body]).animate({
			        scrollTop: dataNav.offset().top
			    }, 1000);
			}
		});
		var cur = '<?php echo $navSection ?>';
		var dataNav = $(document).find("[data-section='" + cur + "']");
		if(dataNav.length != 0){
			if($('.navbar-toggle').css('display') != 'none'){
				$('.navbar-toggle').click();
			}
			$([document.documentElement, document.body]).animate({
		        scrollTop: dataNav.offset().top
		    }, 1000);
		}
	<?php } ?>
</script>
<?php 
	if(isset($scriptPage)){
		$this->load->view('script_user/'.$scriptPage);
	}
?>