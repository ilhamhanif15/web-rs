<script type="text/javascript">
	uploadPembayaran = $('.uploadPembayaran');
	dataPendaftar = $('.dataPendaftar');
	inputNoUrut = $('#inputNoUrut');
	namaCek = $('#namaCek');
	alamatCek = $('#alamatCek');
	jpCek = $('#jpCek');
	detailCek = $('.detailCek');
	notFound = $('.notFound');
	sudahUpload = $('.sudahUpload');

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
					if(data.bukti){
						detailCek.hide();
						sudahUpload.show();
						notFound.hide();
						uploadPembayaran.hide();
					}else{
						namaCek.text(data.name);
						alamatCek.text(data.adr);
						jpCek.text(data.jenis);
						$('#noUrut').val(noUrut);
						detailCek.show();
						notFound.hide();
						sudahUpload.hide();
						uploadPembayaran.show();
					}
				}else{
					detailCek.hide();
					sudahUpload.hide();
					notFound.show();
					uploadPembayaran.hide();
				}
			});
		}else{
			inputNoUrut.focus();
		}
	});

	<?php if($idReg != NULL){ ?>
		inputNoUrut.val(<?php echo $idReg ?>);
		$('#btnCek').click();
	<?php } ?>

</script>