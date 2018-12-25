<script type="text/javascript">

	$('.pop').on('click', function(e) {
		e.preventDefault();
		var urlGambar = $(this)[0].firstElementChild.dataset.img;
		$('.imagepreview').attr('src', urlGambar);
		$('#imagemodal').modal('show');
	});

	var formBukti = $('#formBukti');
	var notif = $('#msg_notif');

	$('#btnHapusBukti').click(function(e){
		e.preventDefault();
		var dis = $(this);
		var conf = confirm('Anda yakin ingin menghapus bukti ?');
		if(conf){
			$.get('<?php echo base_url().'api/deleteBukti/'.$pendaftar->id ?>',function(response){
				var data = JSON.parse(response);
				notif.html(data.msg);
				notif.fadeIn('slow');
				formBukti.html('<p class="form-control">Tidak Ada</p>');
			});
		}
	});
</script>