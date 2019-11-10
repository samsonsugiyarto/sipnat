const flashPemilih = $('.flash-pemilih').data('flashpemilih');
const pilih = 'Pemilih';

if (flashPemilih) {
	Swal.fire({
		title: 'Semua Data ' + pilih,
		text: 'Berhasil ' + flashPemilih,
		type: 'success'

	});
}



$('.hapus-coblos').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Semua Data Pemilih akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Semua data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
