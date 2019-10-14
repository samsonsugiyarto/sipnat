const flashDatajur = $('.juru').data('juru');
const jur = 'Jurusan';

if (flashDatajur) {
	Swal.fire({
		title: 'Data ' + jur,
		text: 'Berhasil ' + flashDatajur,
		type: 'success'

	});
}

// tombol-hapus
$('.tombol-hapusjur').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + jur + " akan dihapus!",
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


const flashDataDosen = $('.flashdatadosen').data('flashdatadosen');
const dos = 'Dosen';

if (flashDataDosen) {
	Swal.fire({
		title: 'Data ' + dos,
		text: 'Berhasil ' + flashDataDosen,
		type: 'success'

	});
}

// tombol-hapus
$('.tombol-hapusdosen').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + dos + " akan dihapus!",
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

const flashDataPimpinan = $('.flashdatapimpinan').data('flashdatapimpinan');
const pimp = 'Pimpinan';

if (flashDataPimpinan) {
	Swal.fire({
		title: 'Data ' + pimp,
		text: 'Berhasil ' + flashDataPimpinan,
		type: 'success'

	});
}

// tombol-hapus
$('.tombol-hapuspimpinan').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data " + pimp + " akan dihapus!",
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
