<!-- <nav class="ubea-nav" role="navigation">
	<div class="ubea-container">
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<div id="ubea-logo"><a href="<?php echo base_url().'homepage' ?>">HisfarSijabar<em>.</em></a></div>
			</div>
			<div class="col-xs-10 text-right menu-1">
				<ul>
					<li>
						<a href="<?php echo base_url().'homepage' ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo base_url().'daftar' ?> ">Daftar</a>
					</li>
					<li>
						<a href="<?php echo base_url().'list' ?>">List Pendaftar</a>
					</li>
                    <li>
                    	<a href="<?php echo base_url().'verifikasi'?>">Verifikasi Daftar</a>
                    </li>
                    <li>
						<a href="<?php echo base_url().'homepage' ?>" data-nav-section="Dokumentasi">Dokumentasi</a>
					</li>
					<li>
						<a href="<?php echo base_url().'homepage' ?>" data-nav-section="InfoHotel">Info Hotel</a>
					</li>
					<li>
						<a href="<?php echo base_url().'materi' ?>">Materi</a>
					</li>
				</ul>
			</div>
		</div>
		
	</div>
</nav> -->
<style type="text/css">
	.nav li:hover {
		color: #FF5126;
	}
	.custom-activate {
	  background-color: #ff9b4a;
	}
	.custom-activate > a{
		color: white !important;
	}
	.nav > li > a{
		color: black;
	}

	.nav > li:hover{
		background-color: #ff9b4a;
	}

	.nav-link:hover{
		color: white !important;
	}
</style>
<nav class="navbar navbar-default navbar-fixed-top" style="box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.15);background-color: #fff">
  <div class="container-fluid" style="margin-top: 15px;margin-bottom: 15px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url().'homepage' ?>"><div id="ubea-logo" style="color: black;font-weight: bold;font-size: larger;">HISFARSIJABAR<span style="color: #FF5126">.</span></div></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<?php 
      		$dataAct = [
      			'homepage' => '',
      			'daftar' => '',
      			'list' => '',
      			'verifikasi' => '',
      			'materi' => ''
      		];
      		$dataAct[$content] = 'custom-activate';
      	?>
        <li class="<?php echo $dataAct['homepage'] ?>">
			<a class="nav-link" href="<?php echo base_url().'homepage' ?>" >Home</a>
		</li>
		<li class="<?php echo $dataAct['daftar'] ?>">
			<a class="nav-link" href="<?php echo base_url().'daftar' ?> ">Daftar</a>
		</li>
		<li class="<?php echo $dataAct['list'] ?>">
			<a class="nav-link" href="<?php echo base_url().'list' ?>">List Pendaftar</a>
		</li>
        <li class="<?php echo $dataAct['verifikasi'] ?>">
        	<a class="nav-link" href="<?php echo base_url().'verifikasi'?>">Pembayaran</a>
        </li>
        <li class="<?php echo $dataAct['materi'] ?>">
			<a class="nav-link" href="<?php echo base_url().'materi' ?>">Materi</a>
		</li>
        <?php
        	if($content == 'homepage'){
        		$linkNavDok = "#";
        		$linkNavHotel = '#';
        	}else{
        		$linkNavDok = 'homepage/Dokumentasi';
        		$linkNavHotel = 'homepage/InfoHotel';
        	}
        ?>
        <li>
			<a class="nav-link" href="<?php echo base_url().$linkNavDok ?>" data-nav-section="Dokumentasi">Dokumentasi</a>
		</li>
		<li>
			<a class="nav-link" href="<?php echo base_url().$linkNavHotel ?>" data-nav-section="InfoHotel">Info Hotel</a>
		</li>
      </ul>
    </div>
  </div>
</nav> 