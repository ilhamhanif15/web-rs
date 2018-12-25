<script type="text/javascript">
	
	var namaModal = $('#namaModal');
	$('#btnEdit').click(function() {
		dis = $(this);
		data = dis.data('nama');
		namaModal.val(data);
		$('#editAkunModal').modal('show'); 
	});

	$('#addBtn').click(function() {
		$('#addAkunModal').modal('show');
	});

	var addPass = $('#addPass');
	var addPass2 = $('#addPass2');
	var passForm = $('.passForm');
	var textError = $('.textError');
	$('#addForm').on('submit', function(){
		textError.fadeOut('slow');
		passForm.removeClass('has-error');
		if(addPass.val() != addPass2.val()){
			textError.text('Password Tidak Sama');
			textError.fadeIn('slow');
			passForm.addClass('has-error');
		}
		return false;
	});

</script>