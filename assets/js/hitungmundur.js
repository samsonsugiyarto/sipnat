const tanggalTujuan = new Date('dec 02, 2019 16:00:00 ').getTime();

const hitungMundur = setInterval(function () {

	const sekarang = new Date().getTime();
	const selisih = tanggalTujuan - sekarang;


	const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));

	const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));

	const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));

	const detik = Math.floor(selisih % (1000 * 60) / 1000);

	var txtj = " jam ";
	var tjam = txtj.fontsize(2);
	var txtm = " menit ";
	var tmenit = txtm.fontsize(2);
	var txtd = " detik ";
	var tdetik = txtd.fontsize(2);

	const teks = document.getElementById('teks');
	teks.innerHTML = jam + tjam + menit + tmenit + detik + tdetik;

	if (selisih < 0) {
		clearInterval(hitungMundur);
		teks.innerHTML = 'Waktu Anda HABIS!';

	}


}, 1000);
