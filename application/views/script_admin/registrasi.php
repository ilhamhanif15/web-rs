<script type="text/javascript">

	$('.pop').on('click', function(e) {
		e.preventDefault();
		var urlGambar = $(this)[0].firstElementChild.dataset.img;
		$('.imagepreview').attr('src', urlGambar);
		$('#imagemodal').modal('show');
	});

	function openImg(link){
		$('.imagepreview').attr('src', link);
		$('#imagemodal').modal('show');
	}

	var noUrut = $('#noUrut');
	var namaRegistrasi = $('#namaRegistrasi');
	var institusi = $('#institusi');
	var noHP = $('#noHP');
	var email = $('#email');
	var alamat = $('#alamat');
	var kota = $('#kota');
	var kodePos = $('#kodePos');
	var jenisBayar = $('#jenisBayar');
	var bukti= $('#bukti');
	var linkBukti = "<?php echo base_url().'assets/uploads/' ?>";

	$('.btnLihat').on('click', function(e) {
		e.preventDefault();
		var detail = $(this).data('detail');
		noUrut.text(detail.id);
		namaRegistrasi.text(detail.nama);
		institusi.text(detail.institusi);
		noHP.text(detail.noHP);
		email.text(detail.email);
		alamat.text(detail.alamat);
		kota.text(detail.kota);
		kodePos.text(detail.kodepos);
		if(detail.jenisBayar == 0) {
			jenisBayar.text('Personal');
		}else{
			jenisBayar.text('Sponsor');
		}
		if(detail.bukti == null){
			bukti.text('Tidak Ada');
		}else{
			bukti.text('');
			txt = `
				<a style="cursor: pointer;" onclick="openImg('`+linkBukti+detail.bukti+`')" aria-hidden="true" class="pop">
                  <i class="fas fa-file-image" data-img="`+linkBukti+detail.bukti+`" style="font-size: 40px;"></i>
                </a>
			`;
			bukti.append(txt);
		}
		$('#viewModal').modal('show');   
	});	

	$('.linkStatusVerif').click(function (e){
		e.preventDefault();
		var elm = $(this);
		var value = elm.data('value');
		var id = elm.data('id');
		$.get('<?php echo base_url().'api/registrasi/statusPembayaran/' ?>'+id+'/'+value, function(response) {
			var data = JSON.parse(response);
			$('#msg_statusVerif').html(data.msg);
			$('#msg_statusVerif').fadeIn();
			setTimeout(function(){ $('#msg_statusVerif').fadeOut() }, 2000);
			if(data.success == 1){
				var txt;
				if(value == -1){
					txt = '<span class="label label-danger" style="font-size: inherit;">Ditolak</span>';
				}else if(value == 0){
					txt = '<span class="label label-warning" style="font-size: inherit;">Ditunda</span>';
				}else{
					txt = '<span class="label label-success" style="font-size: inherit;">Diterima</span>';
				}
				if ($('.SV'+id).length){
					$('.SV'+id).html(txt);
				}else{
					$('#SVD'+id).html(txt);
				}
			}
		});
	});
</script>