$('.pilihkon').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Ingin memilih Kandidat ini?",
		type: 'question',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Pilih!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
