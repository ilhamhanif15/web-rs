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

	$('#btnCek').click(function(e){
		e.preventDefault();
		if(inputNoUrut.val() != ''){
			uploadPembayaran.hide();
			dataPendaftar.hide();
			here = $(this);
			here.prop("disabled",true);
			here.html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Mohon Tunggu Sebentar');
			var noUrut = inputNoUrut.val();
			dataPendaftar.show("slow");
			$.get('<?php echo base_url().'api/cekUser/' ?>'+noUrut, function(response) {
				var data = JSON.parse(response);
				here.html('Cek Nomor');
				here.removeAttr('disabled');
				if(data.id != 'NotFound'){
					namaCek.text(data.name);
					alamatCek.text(data.adr);
					jpCek.text(data.jenis);
					$('#noUrut').val(noUrut);
					detailCek.show();
					notFound.hide();
					uploadPembayaran.show();
				}else{
					detailCek.hide();
					notFound.show();
					uploadPembayaran.hide();
				}
			});
		}else{
			inputNoUrut.focus();
		}
	});
</script>