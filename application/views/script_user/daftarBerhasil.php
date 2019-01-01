<script type="text/javascript" src="<?php echo base_url().'assets/js/html2canvas.js' ?>"></script>
<script type="text/javascript">
	function saveAsPict(){
		/*html2canvas(document.querySelector("#contentData")).then(canvas => {
		    document.body.appendChild(canvas)
		});*/
		/*$('#btnSimpanEmail').hide();*/
		$('#btnSaveAsPict').hide();
		$('#btnKonfirmasi').hide();
		/*$('#btnKonfirmasi').text('Halaman Web untuk Konfirmasi, http:/localhost/web-rs/verifikasi/1');*/
		html2canvas(document.querySelector("#contentData")).then(canvas => {
	        /*$('#btnSimpanEmail').show();*/
			$('#btnSaveAsPict').show();
			$('#btnKonfirmasi').show();
			/*$('#btnKonfirmasi').html('Ke Tahap Konfirmasi <i class="glyphicon glyphicon-menu-right pull-right"></i>');*/
	        var a = document.createElement('a');
	        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
	        a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
	        a.download = 'Cara_Pembayaran.jpg';
	        a.hidden = true;
	        document.body.appendChild(a);
	        a.click();
	    });
	}
</script>