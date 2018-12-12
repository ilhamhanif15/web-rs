<script type="text/javascript">
	uploadPembayaran = $('.uploadPembayaran');
	dataPendaftar = $('.dataPendaftar');
	inputNoUrut = $('#inputNoUrut');
	namaCek = $('#namaCek');
	alamatCek = $('#alamatCek');
	jpCek = $('#jpCek');
	detailCek = $('.detailCek');
	notFound = $('.notFound');

	uploadPembayaran.hide();
	dataPendaftar.hide();

	$('#btnCek').click(function(){
		uploadPembayaran.hide();
		dataPendaftar.hide();
		here = $(this);
		here.prop("disabled",true);
		here.html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Mohon Tunggu Sebentar');
		var noUrut = inputNoUrut.val();
		$.get('<?php echo base_url().'api/cekUser/' ?>'+noUrut, function(response) {
			var data = JSON.parse(response);
			console.log(data);
			here.html('Cek Nomor');
			here.removeAttr('disabled');
			dataPendaftar.show();
			if(data.id != 'NotFound'){
				namaCek.text(data.nama);
				alamatCek.text(data.alamat);
				jpCek.text(data.jenisBayar);
				detailCek.show();
				notFound.hide();
				uploadPembayaran.show();
			}else{
				detailCek.hide();
				notFound.show();
				uploadPembayaran.hide();
			}
		});
	});
</script>