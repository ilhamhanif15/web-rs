<script type="text/javascript">

	var delay = 0;
	var offset = 150;

	document.addEventListener('invalid', function(e){
	   $(e.target).addClass("invalid");
	   $('html, body').animate({scrollTop: $($(".invalid")[0]).offset().top - offset }, delay);
	}, true);
	document.addEventListener('change', function(e){
	   $(e.target).removeClass("invalid")
	}, true);

	var idxGlobal = 0;
	var jenisPembayaran = $('#jenisPembayaran');
	var btnTambahOrg = $('.btn-tambahOrg');
	var elTambahOrg = $('#tambahOrg');
	var idxTambah = $('#idxTambah');

	if(jenisPembayaran.val() == 0){
		btnTambahOrg.hide();
		elTambahOrg.hide();
	}else{
		btnTambahOrg.show();
		elTambahOrg.show();
	}

	jenisPembayaran.on('change', function() {
	  el = $(this);
	  if(el.val() == 0){
	  	btnTambahOrg.hide();
	  	elTambahOrg.hide();
	  }else{
	  	btnTambahOrg.show();
	  	elTambahOrg.show();
	  }
	});

	$('.btn-tambahOrg').click(function(){
		idxGlobal++;
		var text = getTemplateForm(idxGlobal);
		elTambahOrg.append(text);
		idxTambah.val(idxGlobal);
	});

	function deleteOrang(el){
		if(confirm("Anda Yakin Ingin Menghapusnya ?")){
			var idxDeleted = $(el).data('idx');
			$('.org'+idxDeleted).remove();
			/*if(idxDeleted != idxGlobal){
				for (var i = idxDeleted+1; i <= idxGlobal; i++) {
					changeIdx(i,i-1,el);
				}
			}*/
			/*idxGlobal--;*/
		}
	}

	/*function changeIdx(idx,newIdx,el){
		var org = $(el.parentNode);
		org.addClass('org'+newIdx);
		org.removeClass('org'+idx);

		$(el).data('idx',newIdx);

		$(el.nextElementSibling).text('Orang Tambahan Ke-'+newIdx);

		console.log(org.find("input[name='nama"+idx+"']"));
		org.find("input[name='nama"+idx+"']").attr('name','nama'+newIdx);
		org.find("input[name='institusi"+idx+"']").attr('name','institusi'+newIdx);
		org.find("input[name='noHP"+idx+"']").attr('name','noHP'+newIdx);
		org.find("input[name='email"+idx+"']").attr('name','email'+newIdx);
		org.find("input[name='alamat"+idx+"']").attr('name','alamat'+newIdx);
		org.find("input[name='kota"+idx+"']").attr('name','kota'+newIdx);
		org.find("input[name='kodePos"+idx+"']").attr('name','kodePos'+newIdx);
	}*/

	function getTemplateForm(idx){
		var html = `
			<div class="org`+idx+`">
				<hr/>
				<button type="button" class="btn btn-danger btn-hapusOrg pull-right" onclick="deleteOrang(this)" data-idx="`+idx+`" >Hapus Orang</button>
				<h4 style="margin-bottom: 40px;">Orang Tambahan</h4>
				<div class="form-group">
					<label for="">Nama Lengkap dan Gelar</label>
					<input type="text" class="form-control" placeholder="Nama Lengkap dan Gelar" name="nama`+idx+`" required="">
				</div>
				<div class="form-group">
					<label for="">Institusi</label>
					<input type="text" class="form-control" placeholder="Institusi" name="institusi`+idx+`" required="">
				</div>
				<div class="form-group">
					<label for="">Nomor Handphone</label>
					<input type="text" class="form-control" placeholder="Nomor Handphone" name="noHP`+idx+`" required="">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email`+idx+`" required="">
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<input type="text" class="form-control" placeholder="Alamat" name="alamat`+idx+`" required="">
				</div>
				<div class="form-group">
					<label for="">Kota</label>
					<input type="text" class="form-control" placeholder="Kota" name="kota`+idx+`" required="">
				</div>
				<div class="form-group">
					<label for="">Kode Pos</label>
					<input type="text" class="form-control" placeholder="Kode Pos" name="kodePos`+idx+`" required="">
				</div>
			</div>
		`;
		return html;
	}
</script>