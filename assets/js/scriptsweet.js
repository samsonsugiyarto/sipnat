const flashData = $('.flash-data').data('flashdata');

const mhs = 'Mahasiswa';

if (flashData) {
	Swal.fire({
		title: 'Data ' + mhs,
		text: 'Berhasil ' + flashData,
		type: 'success'

	});
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + mhs + " akan dihapus!",
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
