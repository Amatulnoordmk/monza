const swal = $('.swal').data('swal');
if(swal) {
	Swal.fire({
		title: 'Berhasil' + swal,
		text: '',
		icon: 'success'
	})
}
