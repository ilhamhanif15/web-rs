<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="<?php echo base_url().'assets/AdminLTE-2.4.5/' ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<center><h2>Selamat Anda Berhasil Mendaftar, Lanjut Ke Tahap Pembayaran</h2></center>
			<div class="col-md-offset-2 col-md-8">
				<p style="text-align: justify;">
					Selamat, anda berhasil mendaftar seminar hisfarsijabar dengan <b style="font-size: 20px">Nomor Urut <?php echo $id ?>.</b>
					<hr/>
					<b>Langkah Pertama</b> (Transfer Biaya Pendaftaran):<br/>
					Silahkan lanjutkan dengan membayar biaya pendaftaran sebesar,<br/>
					<p style="font-size: 24px;font-weight: bold;text-align: center;">Rp. <?php echo $harga ?></p>
					<p style="font-weight: bold;text-align: center;">(<?php echo $terbilang ?> Rupiah)</p>
					<b>Lakukan pembayaran beserta nomor unik yang tertera diatas.</b>
					Pembayaran dapat dilakukan dengan cara transfer ke rekening berikut ini:<br/>
					<p style="font-size: 20px;font-weight: bold;text-align: center;">Bank Mandiri: 1300014069366 (A.n hisfarsi jabar)</p><hr/>
					<b>Langkah Kedua</b> (Melakukan Upload Bukti Pembayaran):<br/>
					<b>Foto struk/bukti pembayaran tersebut, lalu upload di Halaman <a href="<?php echo base_url().'verifikasi/'.$id ?>" target="_blank">Pembayaran</a>.</b><br/>
					<br/>
					Setelah melakukan upload bukti pembayaran, anda tinggal menunggu konfirmasi dari panitia hisfarsi jabar<br/>
					yang dapat dilihat di halaman <a href="<?php echo base_url().'list' ?>" target="_blank">List Pendaftar</a>.
					<hr/>
					Kontak kami di admin@hisfarsijabar.com atau telepon 08281345251363 (Admin) jika sekiranya terdapat kekeliruan.
					<br/>
					<br/>
					Terima Kasih<br/>
					Send at [<?php echo date("Y-m-d h:i:s")?>]
				</p>
			</div>
		</div>
	</div>
</body>
</html>