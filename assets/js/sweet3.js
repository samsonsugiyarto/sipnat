const flashDataAdmin = $('.flashdataadmin').data('flashdataadmin');
const adm = 'Admin';

if (flashDataAdmin) {
	Swal.fire({
		title: 'Data ' + adm,
		text: 'Berhasil ' + flashDataAdmin,
		type: 'success'

	});
}



$('.hapusadmin').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + adm + " akan dihapus!",
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
