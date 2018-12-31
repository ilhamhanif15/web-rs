<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/bootstrap/dist/css/bootstrap.min.css"> 	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/pdf.css">
	<style>
		body {
		    font-family: 'Times New Roman';
		    font-size: 12pt !important;
		    color: white;
	    }

		.table-border {
			border-collapse: collapse;
		}
		.table-border th {
			text-align: center;
		}
		.table-border, .table-border th, .table-border td{
			border: 1px solid black;
		}
		body {
				/*background: url('<?php //echo base_url().'assets/photo/' ?>bg-pdf.jpg') no-repeat center fixed;*/
			}
		/*@if($data->domisiliPaud || $data->domisiliYayasan)
			body {
				background: url('/photos/bg-pdf.jpg') no-repeat center center fixed;
			}
		@endif*/
		.backg {
			background: url('<?php echo base_url().'assets/images/img3.jpeg' ?>') no-repeat center fixed;
		}

		.rotateObj h2 {
		    position:absolute;
		    float:left;
		    background:gray;
		    width:50px;
		    height:100%;
		    border-radius:5px;
		    -moz-border-radius:5px;
		}

		.rotateObj h2 span{
		    width:150px; /* same as height of .rotateObj */
		    -webkit-transform-origin:84px 70px;
		    display:inline-block;
		    -webkit-transform:rotate(-90deg);
		    text-align:center;
		}
	</style>
</head>
<body>
	
	<div class="container" style="padding: 0px;">
	    <div class="row" style="padding: 0px;">
	        <div class="col-xs-3" style="background-color: #89becc;height: 100%">
	            <table rotate="-90" style="border-collapse: separate;padding-right: 20px;padding-left: 20px;">
	            	<tr>
	            		<td style="padding-top: -43px;text-align: center;font-weight: bold;font-size: 20px;">KWITANSI</td>
	            	</tr>
	            	<br/>
	            	<br/>
	            	<tr>
	            		<td style="text-align: center;font-size: 18px;font-style: italic;">
	            			Seminar "Pelayanan Kefarmasian Terhadap Pasien Gangguan Sistem Saraf"
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>
	            			HASAHH<br/>
	            			JLANNAL<br/>
	            			Jln. asdsda
	            		</td>
	            	</tr>
	            </table>
	        </div>
	        <div class="col-xs-7 backg" style="width: 65%;height: 100%">
	        	<br/>
	        	No. <?php echo $pd->id ?>
	        	<br/><br/><br/><br/>
	        	<table class="tbl-content">
		        	<tr>
		        		<td style="padding-right: 10px;">Telah Terima Dari </td>
		        		<td style="padding-right: 10px;">:</td>
		        		<td> <?php echo $pd->nama ?></td>
		        	</tr>
		        	<br/><br/>
		        	<tr>
		        		<td style="padding-right: 10px;">Uang Sejumlah </td>
		        		<td style="padding-right: 10px;">:</td>
		        		<td> <?php echo $terbilang ?> Rupiah</td>
		        	</tr>
		        	<br/><br/>
		        	<tr>
		        		<td style="padding-right: 10px;">Untuk Pembayaran </td>
		        		<td style="padding-right: 10px;">:</td>
		        		<td> Seminar "Pelayanan Kefarmasian Terhadap Pasien Gangguan Sistem Saraf"</td>
		        	</tr>
	        	</table>
				<div class="ttd" style="text-align: center;">
					<b>Bandung, <?php echo date('d F Y') ?></b>
					<p style="padding-top: 70px;font-size: 12pt !important;">Mitty Mauliana, S.Si., Apt.</p>
				</div>
				<div>
					Jumlah Rp. <?php echo $harga ?>
				</div>
	        </div>
	    </div>
	 </div>


	<!-- END KONTEN -->
</section>
</body>
</html>

