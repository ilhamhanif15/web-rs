<script type="text/javascript">
	
	var namaModal = $('#namaModal');
	var idModal = $('.idModal');
	$('.btnEdit').click(function() {
		dis = $(this);
		nama = dis.data('nama');
		id = dis.data('id');
		uname = dis.data('uname');
		email = dis.data('email');
		namaModal.val(nama);
		idModal.val(id);
		$('#unameModal').val(uname);
		$('#emailModal').val(email);
		$('#editAkunModal').modal('show'); 
	});

	$('.btnEditPass').click(function() {
		dis = $(this);
		id = dis.data('id');
		idModal.val(id);
		$('#editPassModal').modal('show'); 
	});

	var pass1 = $('#pass1Modal');
	var pass2 = $('#pass2Modal');
	var passBar = $('.passBar');
	var textErrorPass = $('.textErrorPass');
	$('#btnSimpanPass').click(function() {
		if(pass1.val() != pass2.val()){
			textErrorPass.text('Password Tidak Sama');
			textErrorPass.fadeIn('slow');
			passBar.addClass('has-error');
			return false;
		}else{
			return true;
		}
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
			return false;
		}
		return true;
	});

</script>