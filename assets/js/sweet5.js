const flashriwayat = $('.flashriwayat').data('flashriwayat');
const yat = 'Riwayat';

if (flashriwayat) {
	Swal.fire({
		title: 'Data ' + yat,
		text: 'Berhasil ' + flashriwayat,
		type: 'success'

	});
}



$('.tombol-hapusriwayat').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + yat + " akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
