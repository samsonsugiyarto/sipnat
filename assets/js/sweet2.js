const flashDataKandidat = $('.flashkandidat').data('flashkandidat');
const kand = 'Kandidat';

if (flashDataKandidat) {
	Swal.fire({
		title: 'Data ' + kand,
		text: 'Berhasil ' + flashDataKandidat,
		type: 'success'

	});
}

// tombol-hapus
$('.tombol-hapuskandidat').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + kand + " akan dihapus!",
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
