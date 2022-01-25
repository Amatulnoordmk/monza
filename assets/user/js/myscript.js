const flashData = $('.flash-data').data('flashdata');

if(flashData) {
	Swal({
		title: 'Pendaftaran',
		text: 'Berhasil Dilakukan' + flashData,
		type: 'success'
	});
}
