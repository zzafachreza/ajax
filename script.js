$(document).ready(function(){

	$("#loading-image").show();
	var data = "data.php";

	$('#data-mahasiswa').load(data);
		
	$("#loading-image").fadeOut(1000);	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama").html('');
		$("#error_jenis_kelamin").html('');
		$("#error_telepon").html('');
		$("#error_alamat").html('');
		
		var dataform = $("#form-tambah").serialize();
		var divIdHtml = $("#div_id").html();
		$.ajax({
			url: "input.php",
			type: "post",
			data: dataform,
			beforeSend: function() {
              $("#loading-image").show();
           },	
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_nama").html(hasil.error.nama);
					$("#error_jenis_kelamin").html(hasil.error.jenis_kelamin);
					$("#error_telepon").html(hasil.error.telepon);
					$("#error_alamat").html(hasil.error.alamat);
				} else {
					$('#modal-tambah').modal('hide');
					$("#nama").val('');
					$("#jenis_kelamin").val('');
					$("#telepon").val('');
					$("#alamat").val('');
					$('#data-mahasiswa').load(data);
				}
				$("#loading-image").fadeOut(1000);
			}
		});
	});
	
	$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama").html('');
		$("#error_jenis_kelamin").html('');
		$("#error_telepon").html('');
		$("#error_alamat").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "update.php",
			type: "post",
			data: dataform,
			beforeSend: function() {
              $("#loading-image").show();
           },
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_nama").html(hasil.error.edit_nama);
					$("#error_edit_jenis_kelamin").html(hasil.error.edit_jenis_kelamin);
					$("#error_edit_telepon").html(hasil.error.edit_telepon);
					$("#error_edit_alamat").html(hasil.error.edit_alamat);
				} else {
					$('#modal-edit').modal('hide');
					$("#nama").val('');
					$("#jenis_kelamin").val('');
					$("#telepon").val('');
					$("#alamat").val('');
					$('#data-mahasiswa').load(data);
				}
				$("#loading-image").fadeOut(1000);
			}
		});
	});
	
	
	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#loading-image").show();
				$('#data-mahasiswa').load(data);			
				$("#loading-image").fadeOut(1000);
			}   
		);
	});


	refreshTable();


});

	function refreshTable(){
        $('#data-mahasiswa').load('data.php', function(){
           setTimeout(refreshTable, 1000);
        });
    }