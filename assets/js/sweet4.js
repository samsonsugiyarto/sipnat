const flashDataKomen = $('.flashdatakomen').data('flashdatakomen');
const kom = 'Komentar';

if (flashDataKomen) {
	Swal.fire({
		title: 'Data ' + kom,
		text: 'Berhasil ' + flashDataKomen,
		type: 'success'

	});
}



$('.tombol-hapuskomen').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + kom + " akan dihapus!",
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

$('.tombol-konfir').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Konfirmasi ?',
		type: 'question',
		showCancelButton: true,
		focusConfirm: false,
		confirmButtonText: '<i class="fa fa-check"></i> Post!',
		confirmButtonColor: '#dfb600',
		confirmButtonAriaLabel: 'Thumbs up, Post!',
		cancelButtonText: '<i class="fa fa-times"></i> Cancel',
		cancelButtonColor: '#c50000',
		cancelButtonAriaLabel: 'fa-times'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
