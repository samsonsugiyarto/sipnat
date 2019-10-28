const flashpilih = $('.flash-pilih').data('flashpilih');


if (flashpilih) {
	Swal.fire({
		title: 'Berhasil',
		text: 'Anda Sudah ' + flashpilih,
		type: 'success'

	});
}
