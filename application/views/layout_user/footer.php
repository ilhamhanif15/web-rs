<footer id="ubea-footer" role="contentinfo">
	<div class="ubea-container">
		
		<div class="row copyright">
			<div class="col-md-12">
				<p class="pull-left">
					<small class="block">&copy; 2019 All Rights Reserved.</small> 
				</p>
				<p class="pull-right">
					<ul class="ubea-social-icons pull-right">
						<li><a href="#"><i class="icon-facebook" style="color: black"></i></a></li>
						<li><a href="#"><i class="icon-instagram" style="color: black"></i></a></li>
						<li><a href="#"><i class="icon-email" style="color: black"></i></a></li>
						<li><a href="#"><i class="icon-linkedin" style="color: black"></i></a></li>
						<li><a href="#"><i class="icon-twitter" style="color: black"></i></a></li>
					</ul>
				</p>
			</div>
		</div>

	</div>
</footer>

<?php 
	if($content == 'homepage'){ 
		$bottom = '92px';
	}else{
		$bottom = '20px';
	}
?>
<div class="gototop js-top" style="bottom: <?php echo $bottom ?>;right: 14px;">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>