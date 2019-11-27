-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Nov 2019 pada 09.22
-- Versi server: 10.2.29-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5929052_senma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemilihan`
--

CREATE TABLE `data_pemilihan` (
  `id_pemilihan` int(11) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nik` int(15) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `mengajar` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `is_active` int(1) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nik`, `name`, `password`, `jk`, `mengajar`, `email`, `hp`, `is_active`, `image`, `role_id`) VALUES
(601097802, 'AGUS SUPARNO', '$2y$10$yrq05yBvAopJP.vcj4HPNeXZ/kvOSgRFOmZcSvJtoAcV5zIZOIv.m', 'L', 'pemrograman II', 'agus123@gmail.com', '123', 0, 'default.jpg', 4),
(602048104, 'CAROLINA ETY WIDJAYANTI', '$2y$10$UXt7QrA03eFMngSKhbURF.AayUpQWX9dtc1SL0UZ0XmNwk.IT6OPi', 'P', 'pengantar akuntansi', 'carolina@gmail.com', '123', 0, 'default.jpg', 4),
(604047704, 'PUTU SAMUEL PRIHATMAJAYA', '$2y$10$umQk.KLh35wpMMPvN32sYe68d0Vu8xJ.hoa.F95.337WAEvvM6g5S', 'L', 'ecomerce', 'putu@gmail.com', '1234', 0, 'default.jpg', 4),
(607027401, 'FERRA SETIATI DHARMADJI', '$2y$10$GkFr5nYIJlW9YeK9LbhAAOUnCGLiSspi8zVyxxQMrPRMeIrb51y9e', 'L', '-', 'ferra@gmail.com', '1234', 0, 'default.jpg', 4),
(608016901, 'ENDANG SETYAWATI', '$2y$10$17Z5cx/5.ND4idIeqhcT9u6aV42rwZLt3ggjBEalXJlkxQlRDRCzS', 'P', 'analasis dan perancangan SI', 'endangb17@gmail.com', '123', 0, 'default.jpg', 4),
(609119001, 'OLIVYA NIKE NOMAN', '$2y$10$7WqcizOfpQfRpffKyRmQwe0R2q1CK7PM22eIviQTgwE.MXRauy3a.', 'P', '-', 'olyvia@gmail.com', '12345', 0, 'default.jpg', 4),
(610017403, 'RIA MANURUNG', '$2y$10$/3DdgYai3I1b32tBABtXmuvoMpkl6FMydLYO9Y8e/Em6AQSQtIEj6', 'L', 'akuntansi biaya', 'ria@gmail.com', '12345', 0, 'default.jpg', 4),
(610018101, 'OSKAR IKA ADI NUGROHO', '$2y$10$raYJ3a6wZpI.hmCqE0oM8uqT3WqurXA.t4FbFtflcUekVrSXpVJiy', 'L', 'algoritma struktur data', 'oskar@gmail.com', '12345', 0, 'default.jpg', 4),
(610045701, 'LYNAWATI', '$2y$10$C/BxrGjfpXzV6dt6P/m3yOy48NB4yj/JQaz/n6LwHoPmc8GLPaYE.', 'P', 'akuntansi', 'lynawati@gmail.com', '12345', 0, 'default.jpg', 4),
(610108302, 'ANITA EKAWATI', '$2y$10$XtpkCdO6vK5dsA8KaNmJF.Cd7dt3LJRArPcVpnyWbtCOSP9cc4IGK', 'L', 'prak. akuntansi', 'anita@gmail.com', '123', 0, 'default.jpg', 4),
(616068501, 'CANDRA PUSPITA', '$2y$10$bulLpK1H5DhwW69s7Drx4.kXZyEXxkpDepNFYK2zU.RV6i0en6v3S', 'L', '-', 'candra@gmail.com', '1234', 0, 'default.jpg', 4),
(618027102, 'A. KRISTIADJI RAHARDJO', '$2y$10$JFq6E06xvRXvBP2Dh1btd.IE/g1CVc1HCc9hHr1ZHjXcEMgpILxXu', 'L', 'ilmu kealaman dasar', 'kristiadji@gmail.com', '123', 0, 'default.jpg', 4),
(618088901, 'DIWAHANA MUTIARA CANDRASARI', '$2y$10$JVgMXPdJjohEgUk1OqswgupTsMzO3VZl05NVb4Y1DQlce6cIgXUd6', 'P', 'algoritma struktur data', 'candra123@gmail.com', '123', 0, 'default.jpg', 4),
(618109301, 'DIANDRA CHIKA FRANSISCA', '$2y$10$GQe.nhAyUmxSbUcovKbj1.Isydu7iiWtHdB7bpNrEMQXp4jwA3UVS', 'P', 'matematika', 'diandra@gmail.com', '123', 0, 'default.jpg', 4),
(620097601, 'ANTONIUS ARY SETYAWAN', '$2y$10$LlYgr7R8DZd9P.Em/jEmF.Bv90tNayqSOwMpNwvgsgXvsttYOAVP6', 'L', 'kominter', 'aryset@gmail.com', '123', 0, 'default.jpg', 4),
(621126101, 'SUYUDI', '$2y$10$00T.Ycj1gA3bTYLsMdSwwOh8GIi.s7ANZ3iiihhZiAnSayWPvFcNG', 'L', 'Sistem Informasi Manajemen', 'suyudi@gmail.com', '12345', 0, 'default.jpg', 4),
(622128103, 'DAVID KRISTIAN PAATH', '$2y$10$Vdjz20AgW.tQi/jEGMXTeOo4m/qcB8OBPM7D3C/x9uMrVPrRJyOqa', 'L', 'nirmana', 'david@gmail.com', '123', 0, 'default.jpg', 4),
(623127905, 'NATALIA IRA KARTIKA', '$2y$10$s0D/c3KlULUqgj/KuoOyv.DPa0/XZsZ/bcdmlW/O/fZhW315RHA/i', 'P', 'DKV', 'Natalia@gmail.com', '123', 0, 'default.jpg', 4),
(624038601, 'DHANY FAIZAL RACMA', '$2y$10$6VR3YgZdhE/cI7lwSZmdzu1ApcVmbZzAW2VCCgG8O.wL3cyJ/hOlG', 'L', 'jaringan komputer', 'dhany@gmail.com', '123', 0, 'default.jpg', 4),
(624089101, 'SAFAR DWI KURNIAWAN', '$2y$10$sDDxxfM1dHiwBpa9rY2KRuNvIrTJZFRMsrVDhaaGsqqJA9mri2gnO', 'L', 'sistem operasi', 'safar@gmail.com', '12345', 0, 'default.jpg', 4),
(628078403, 'ADHI WIBOWO', '$2y$10$aIjE3Hnvrm5xYb6uUh2p7OII9dhwcSdTeCwNFW1E8F3UhEwm/jxpm', 'L', 'keamanan SI', 'adhi@gmail.com', '1234', 0, 'default.jpg', 4),
(2147483647, 'AGUS ARIYANTO', '$2y$10$NrVZ8hA41lNsppgSQmDq6OC490Q11QFKw1U6gZbvf5sxSx.rG65ly', 'L', 'analisis proses bisnis', 'agus@gmail.com', '123', 0, 'default.jpg', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(50) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(2, 'S1 Teknik Multimedia dan Jaringan'),
(3, 'S1 Sistem Informasi'),
(8, 'S1 Teknik Informatika'),
(10, 'D3 Komputerisasi Akuntansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampanye`
--

CREATE TABLE `kampanye` (
  `id` int(11) NOT NULL,
  `no_kandidat` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kampanye`
--

INSERT INTO `kampanye` (`id`, `no_kandidat`, `file_name`, `created`, `modified`) VALUES
(119, 2, 'IMG_5937.JPG', '2019-11-21 23:08:47', '2019-11-21 23:08:47'),
(163, 1, 'IMG_5954.JPG', '2019-11-23 12:02:21', '2019-11-23 12:02:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampanyevideo`
--

CREATE TABLE `kampanyevideo` (
  `id` int(11) NOT NULL,
  `no_kandidat` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `no_kandidat` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `wakil` varchar(128) NOT NULL,
  `jk_ketua` varchar(1) NOT NULL,
  `jk_wakil` varchar(1) NOT NULL,
  `email_ketua` varchar(128) NOT NULL,
  `email_wakil` varchar(128) NOT NULL,
  `hp_ketua` varchar(15) NOT NULL,
  `hp_wakil` varchar(15) NOT NULL,
  `visi` varchar(500) NOT NULL,
  `misi` varchar(1000) NOT NULL,
  `foto_ketua` varchar(128) NOT NULL,
  `foto_wakil` varchar(128) NOT NULL,
  `uraian` varchar(1000) NOT NULL,
  `jumlah_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`no_kandidat`, `nama`, `wakil`, `jk_ketua`, `jk_wakil`, `email_ketua`, `email_wakil`, `hp_ketua`, `hp_wakil`, `visi`, `misi`, `foto_ketua`, `foto_wakil`, `uraian`, `jumlah_suara`) VALUES
(1, 'Randimazco Michael Philip', 'Wahyu Eka Mulatsari', 'L', 'P', 'randi@gmail.com', 'wahyu@gmail.com', '08xxxxxxxxxx', '08xxxxxxxxxx', 'Sebagai organisasi mahasiswa yang profesional dalam membangun dan mengayomi serta dapat melaksanakan fungsinya sebagai aspiratif guna membentuk mahasiswa STIKOM Yos Sudarso yang aktif, kritis dan kreatif.', 'Pembuatan dan pengesahan ad/art senat mahasiswa.</br></br>\r\nMenciptakan pengurus senat yang disiplin, bertanggung jawab, kekeluargaan dan tanggap serta sebagai sumber informasi yang terpercaya bagi mahasiswa baik dibidang akademik maupun non-akdemik.</br></br>\r\nMemberikan pelayanan terdepan, teroptimal dan menerima, menampung serta menyampaikan aspirasi mahasiswa STIKOM. </br></br>\r\nMelaksanakan program kerja yang bermanfaat sesuai kebutuhan mahasiswa. </br></br>\r\nMenyatukan antara angkatan untuk menjalin silaturahmi dan menjalin keakraban antara mahasiswa. </br></br>\r\nMengaktifkan kembali HIMAJUR yang sudah terbentuk. </br></br>', 'default.jpg', 'default.jpg', 'Seorang pemimpin harus siap menjadi langit yang dipandang semua orang dan menjadi bumi yang siap diinjak orang.', 0),
(2, 'Vebi', 'Nur Aliandi Irawan', 'P', 'L', 'veby@gmail.com', 'nur@gmail.com', '08xxxxxxxxxx', '08xxxxxxxxxx', 'Mewujudkan SENAT Mahasiswa STIKOM Yos Sudarso sebagai organisasi mahasiswa yang Profesional dalam membangun dan menampung aspirasi mahasiswa serta dapat menjadikan mahasiswa STIKOM Yos Sudaso menjadi mahasiswa yang berperan aktif dalam kegiatan akademik maupun non akademik', 'Menjalin hubungan yang baik antar sesama anggota Senat serta Mahasiswa - mahasiswa lain. </br></br>\r\nMenerima, menampung dan melaksanakan aspirasi mahasiswa STIKOM Yos Sudarso. </br></br>\r\nTurut mengembangkan kampus melalui Program Kerja yang telah dibentuk. </br></br>\r\nMembantu mengembangkan Potensi dan Kreativitas mahasiswa melalui kegiatan UKM. </br></br>\r\nMembentuk Himpunan Mahasiswa Jurusan sebagai wadah untuk mempererat rasa kekeluargaan atar mahasiswa perjurusan', '2_1.png', '2_2.png', 'Pemimpin tidak hanya memimpin tapi harus terlebih dahulu mau dipimpin, pergerakan timbul bukan karena pemimpin bersuara, tetapi pemimpin bersuara karena ada pergerakan.', 0),
(3, 'Laras Anisa Hidayah', 'Nur Khalid', 'L', 'L', 'laras@gmail.com', 'khalid@gmail.com', '08xxxxxxxxxx', '08xxxxxxxxxx', 'Mewujudkan Senat Mahasiswa sebagai organisasi kemahasiswaan yang bersatu, aspiratif, profesional dalam membangun dan mengayomi guna membentuk generasi muda yang berkarakter serta unggul dalam pengembangan dan kemajuan kampus.', 'Mempererat hubungan dengan pembimbing, UKM dan komunitas serta seluruh mahasiswa. </br></br>\r\nMenyerap, menghimpun dan menindaklanjuti aspirasi mahasiswa secara berkala. </br></br>\r\nMelaksanakan dan mengembangkan program kegiatan yang telah dibuat dan bermanfaat sesuai kebutuhan mahasiswa. </br></br>\r\nMengarahkan mahasiswa STIKOM Yos Sudarso untuk lebih aktif dalam kegiatan akademik dan non akademik. </br></br>\r\nMengkoordinasikan, mengkomunikasikan dan mengsinkronasikan  aktifitas kegiatan UKM (unit kegiatan mahasiswa) dan UKK (unit kegiatan rohani) kearah semangat kompetisi yang sehat dan prestasi.', 'default.jpg', 'default.jpg', 'nomer 3', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(12) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `uraian` varchar(500) NOT NULL,
  `image` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfir_komentar`
--

CREATE TABLE `konfir_komentar` (
  `id_konfir` int(12) NOT NULL,
  `id_komentar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(15) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `email` varchar(128) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(15) NOT NULL,
  `is_active` int(1) NOT NULL,
  `kode_jurusan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `name`, `jk`, `email`, `hp`, `image`, `password`, `role_id`, `is_active`, `kode_jurusan`) VALUES
(201601001, 'MARIA BRIGITTA AGUSTINA S. LUD', 'P', 'maria@gmail.com', '089xxxxxxx', 'default.jpg', '$2y$10$cg.38/tsALiAJ.iK7rPAbuwcV1x67UEaEOV127QigFjBNyg5O3GNm', 5, 0, 3),
(201601003, 'DEWI FORTUNA', 'P', 'dewi@gmail.com', '0810xxxxxxxx', 'default.jpg', '$2y$10$U3CGALsD1G82pa541qYxkux4AJkBSBW0TdgYiw6nUfVuKirk9BEQa', 5, 0, 3),
(201601006, 'KEVIN RYAN SUJONO', 'L', 'kevin@gmail.com', '098xxxxxxxx', 'default.jpg', '$2y$10$s3ohKSZ0EVAs6QF31/7hN.0SXpUtPt3YfCUUU1AcTVEUh0aRCKYqe', 5, 0, 3),
(201601008, 'KHARISMA REZA BAHANA', 'L', 'bahana@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$X.Yzl2OkBmMuRiEhikgaH.U0.dUH7c0kGIdsfmCwotuHBRFQz7Q/G', 5, 0, 3),
(201601009, 'JERI AFANDI SETIAWAN', 'L', 'zopenk@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$oUptKc7zsfeMnN9hDlGy/OCZW01Zdk.Wvs1l8TE7LY3GjzGen3ZWC', 5, 0, 3),
(201601012, 'STEFANUS DWIKO VINSA ADITYA', 'L', 'fanus@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$okl7gick7ghekBIW5se.ZezBQ8nHn57/z83W/eoJoURcNejsSteRS', 5, 0, 3),
(201601013, 'DIONISIUS RANGGA ANANTO', 'L', 'rangga@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$nSmLEfD9sS1DDd6pGxUrLeodC.X0c2kPaxt9RrCCYrW4jVdGdMw0S', 5, 0, 3),
(201601014, 'KHALIMAH', 'P', 'khalimah@gmail.com', '083xxxxx', 'default.jpg', '$2y$10$.lbMB/4OhsnKFPnQYpVwCe7QYrEtCKPYW7Z9OEw6jdxX31l7AAy2C', 5, 0, 3),
(201601017, 'NANDA ALDI SETIADI', 'L', 'nanda@gmail.com', '08xxxxxxxxx', 'default.jpg', '$2y$10$Gpe03wcXE/FOMfVqaR6mK.UBTKQJ4iMztNbIuOgEtgHTKXNX6LW7O', 5, 0, 3),
(201601018, 'YOSEPH BUDI SANTOSA', 'L', 'yoseph@gmail.com', '098192394848', 'default.jpg', '$2y$10$50XDKDaGUUU1GU0YfKfZ5OXCXXKVXRSz2ehNRtyKUvtL22ZHFWq3O', 5, 0, 3),
(201601019, 'RHOSITA INA KHADIJA', 'P', 'rhosita@gmail.com', '0871934984', 'default.jpg', '$2y$10$T.F.IymB.CNNecpNTgpEGuwO6771bVWAIqvoj0mc2vYiRIx/IJdBC', 5, 1, 2),
(201601020, 'EFREM ERI PRIYO WIDAGDO', 'L', 'edo@gmail.com', '089148257', 'default.jpg', '$2y$10$dIL5jy6ggnJ/ZXFP1l/jaeB7GQxnbJeGnZhqZ2iBmQrsF22hXdKyy', 5, 0, 3),
(201601067, 'TRI STIYO FAMUJI', 'L', 'tris@gmail.com', '08347265', 'default.jpg', '$2y$10$slgYexULE/Mjy2ZmQ9ijF.xYsFaKMks8p3PIZOmrWLD8.hGcZjluu', 5, 0, 3),
(201601076, 'YUDI SETIA', 'L', 'yudi@gmail.com', '089258376', 'default.jpg', '$2y$10$2EnMKJuUbSAvlWmh8yCwn.UzDrIUaNn2HlPHTAx084zWRGOO8gZ0m', 5, 0, 3),
(201602001, 'SHINTYA NATALIA SUGIANTO', 'P', 'shintay@gmail.com', '0989xxxxxx', 'default.jpg', '$2y$10$yBOWAK/JLQ7.7ucYWHQ8oOqsBlxSFC.DoLLg2cmas3Sh2O0N8xGAO', 5, 1, 10),
(201602002, 'MEISI PUJI RAHAYU', 'P', 'meisi@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$iqREDXrz6mJCJLFzzuZcGe6yytPCovrDJ1YxJ7zCL4m1MComOn1ni', 5, 0, 10),
(201602003, 'YOLANDA ALFALANI', 'P', 'yolanda@gmail.com', '0888xxxxx', 'default.jpg', '$2y$10$NCV9n2srVmTeAMfFQF7OUe3m6hxUluxKWJWD/.QRaEMGG9BTyQkHy', 5, 0, 10),
(201602004, 'FRANSISKA MARYANTI', 'P', 'siska@gmail.com', '0866xxxx', 'default.jpg', '$2y$10$ZHXbG9kNZ8j2mkofrNr6juJ5m4FzuweF5p2EZFmh/xnkk2Ub3yB5a', 5, 0, 10),
(201602005, 'THERESIA TRIANTI', 'P', 'there@gmail.com', '085xxxxxx', 'default.jpg', '$2y$10$7BDnIfEhvgVXWv.w7Z.0o.uVNsjvAbt.M1.O/tZweV1GZ1CphtXMq', 5, 0, 10),
(201602006, 'EUGENE CHANDRA SANTOSO', 'P', 'eugene@gmail.com', '081xxxx', 'default.jpg', '$2y$10$y2Xf./bpULoC/b11k07g/OG/cgkXKWaVYYsBybEo0VzDqoYULH18q', 5, 0, 10),
(201602008, 'FEBRIANA KRISNAWATI', 'P', 'febri@gmail.com', '084xxxxxxxx', 'default.jpg', '$2y$10$tU4eO3TdkkkCqsV82ccRFevbIvmt6DGODtd1tW36J75dU7Ek4Q8Ii', 5, 0, 10),
(201602009, 'KIKI', 'P', 'kiki@gmail.com', '081xxxx', 'default.jpg', '$2y$10$I5l0j/SPmUl9BWGB0WDnZu1oUl3a.VBE27/Iz8iZfJEupOwt3YTQi', 5, 0, 10),
(201602010, 'SAFARUNI WANTI SUSETIANI', 'P', 'safa@gmial.com', '0822xxxxxx', 'default.jpg', '$2y$10$sYTHrSW.xmQB/dpVTYz4x.Ne3fYwkIU9GVJ4Hu8aDK1mm7S20kDua', 5, 0, 10),
(201602011, 'YUDHA. W', 'L', 'yudha@gmail.com', '08xxxxxxxx', 'default.jpg', '$2y$10$m0d70S5l8gb3uVg8sWBqc.A16s5YM4zwUVOiFuDUt5ELlq80eDrg.', 5, 0, 10),
(201602013, 'DUHITA LAYLA ELGI NUR BASIT', 'P', 'duhita@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$1DV24UYtk7FDvXAjFIjBxOwN25NZlx3x2f/FC3Oksd7msvQZn8UfG', 5, 0, 10),
(201602014, 'SARASWATI AYU AGUSTIN', 'P', 'saras@gmail.com', '082', 'default.jpg', '$2y$10$tLiFdwqeMjHs5dHLjpOuPekn/gaZKSpeAZsacxkhxF8qmlK6ukTve', 5, 0, 10),
(201702001, 'AGNES SHITA PRATIWI', 'P', 'agnes@gmail.com', '123', 'default.jpg', '$2y$10$TYrRr97ePZWLh8x9xuenROFU7RlbjfnCROvuj2KmC3ppdV5GiINcW', 5, 0, 10),
(201702002, 'ANSELMA BULAN AYU MAHARTYA', 'P', 'ansel@gmail.com', '089xxxxxxxx', 'default.jpg', '$2y$10$8354Ag44SMoEjtEqlBbUQeG33JjgMIGRHehixphyqSiQlCxz/W.LG', 5, 0, 10),
(201702003, 'FRANCISCA NOVENTA SR', 'P', 'venta@gmail.com', '087xxxxxxxxxxxxx', 'default.jpg', '$2y$10$0NheqXuVN4Lqqvsu7Wt9x.rs/nGCz7M7Lgh.KMsw/SQZmlQkJTrm.', 5, 0, 10),
(201702005, 'CHELSEA BENEDICT ALFONSO', 'L', 'chelsea@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$kp6Bq0HUwzR.RqTqsooZre1nIVkAqMEtxZjEQ7JOZ56z60I2TEplq', 5, 0, 10),
(201702006, 'ADITYA PRAYOGA', 'L', 'aditya@gmail.com', '081xxxxxxxxxxxx', 'default.jpg', '$2y$10$tZdgPg97tKD/1cJ99gLj..OZBKDiII0qE8qI83a7YRQmnQ3Lwlh/S', 5, 0, 10),
(201702008, 'YULLIA ARGI WILUJENG', 'P', 'yulia@gmail.com', '123', 'default.jpg', '$2y$10$Nmm.la27VZNsrj5eWyeteuLb4KafhX1ZKZDZDaDNKviUT28gMml2m', 5, 0, 10),
(201702009, 'MUHAMMAD QORI ALMAKI', 'L', 'qori@gmail.com', '123', 'default.jpg', '$2y$10$L4zg5or4V/j6QrMdc0YlkO0m6Q2w3DVVxvqUbK4.w3c0Im5ffXMZu', 5, 0, 10),
(201702010, 'LINTANG MAHARANI', 'P', 'lintang@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$BQsNlqBMBtwd2hamlqIWUOVKl4ht0dIj5Qgy6Hpxe56Ar7n2D3AzC', 5, 0, 2),
(201801018, 'KURNIA INDAH WILANSARI', 'P', 'kurnia@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$z4kMu67J6hAI0sze2Q10Ae8X7w9NO7xRPfnoSvbQFEv2PFBHjzwKS', 5, 0, 10),
(201801019, 'NOPIANTI', 'P', 'nopi@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$fbHQGnpgzEvUVVRrXaBXS.r0.ggTSqQvEnXRy/v9MGQ9c9DFVbeza', 5, 0, 3),
(201801020, 'PUTUT PUJAGIRI RAMADHAN', 'L', 'putut@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$Aez/4dHXVISSboOfpr5.TO3jI5W.pVgHP/eNSdc5F40OzJT/Hg4O2', 5, 0, 3),
(201801021, 'NOVELITA CRISTIANA', 'P', 'novel@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$3wo6YH11prtOF2C7GJosOuG.j1J7.sjtTd8Lqo88iWsIjgdHIMYSi', 5, 0, 3),
(201801022, 'GRACELA VELANY CHRISTIANTO', 'P', 'gracela@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$AO4.VftuStiDnehZQ2EyBOpYp1RzZO553nOZbVKCz/.k5v8nC1sXq', 5, 0, 3),
(201801023, 'JODIE SWIPLI PUTRA FRIEMA', 'L', 'jodie@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$cykK6JcO0JBK4f6mJ65LbetNSYkjxHwENYFHsiAvo2wxB/VqcwUVa', 5, 0, 3),
(201801024, 'ALVIN ANDREAS ANDI', 'L', 'alvin@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$KcI9Fbybl8J0WF6ZaOR/cejCaJ0KzMNTSyqN44GkuEf71Y7l0hmbm', 5, 0, 3),
(201801025, 'CHRISTOPHER DARREN SANJAYA', 'L', 'christopher@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$xkxug5bq22Qf9iAuYGYyxuaMRj8L8IWzPOYXuV7i7R47/7LVcCOGS', 5, 0, 2),
(201801027, 'ENRICO YUWONO', 'L', 'enrico@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$CRd.LBw9CMUDiJd/fC1kY.4mIaNIvi..25IAmFzXefZVdMdOPtq9m', 5, 0, 3),
(201801028, 'MARCELINA INDAH DEWI PANGESTIKA', 'P', 'marcelina@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$URTnq6IM5r/.6yK.l4myCOxA8vCn63mSvoYWpdGPxEw9toYy4/t2m', 5, 0, 3),
(201801029, 'MEYKE HOLYSIANA', 'P', 'meyke@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$fp0gXMVeXqF6jqw1ICFHz.2keKoopoVLXRlFl7zvq5YQJoTjsxzcy', 5, 0, 3),
(201801030, 'RAHMA VINI KINANTI', 'P', 'rahma@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$k3LVXPiHfWLDC.K4Wg9uPO2o12YlF4XGCP/uCJGi1Se7R6nCt21Zi', 5, 0, 3),
(201801031, 'KATARINA RAMBU KARERI TOGA', 'P', 'katarina@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$Rh0LZS8e4VUwT3Z1CfHhRu1LRST76IqF/74tyN/n7tCxhVc1MXWIy', 5, 1, 3),
(201801032, 'PAULUS PATI KATODA', 'L', 'paul@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$6DQYXAPv4FeYLcbfQwLtTu21UWYFNWLguLBunAHxcadrnyubIWPma', 5, 0, 3),
(201801033, 'ANASTASIA YULIA ALEXANDRA', 'P', 'anas@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$XRsiYAUTYzi1FfY/0cWb7eIkEb7RmxrcOpTw7HXbqGU/AX4kWaAvG', 5, 0, 3),
(201801034, 'ERIC BUNTORO', 'L', 'eric@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$fcfksPNYCPbpL4D7s/tZDe9m/skhLAT/RBBfQgS/zK3Bv9Jt8.94K', 5, 0, 3),
(201801035, 'STEVAN BUDIONO', 'L', 'stevan@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$A0nHp4VeXNpkZUWCBqnx6.a3n4YGxy6cidOErcuFiaW23.rQYYpHC', 5, 0, 3),
(201801036, 'RIZKY YANU AJI', 'L', 'rizky@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$/B9txS2PstGNY8CmR/iU..DrZX.bt4w4vmadGebk5ZTqK39gJqs3W', 5, 0, 3),
(201801037, 'YOSEP FAJAR WIJAYA', 'L', 'yosep1@gmai.lcom', '085xxxxxxxxx', 'default.jpg', '$2y$10$A5XyFoZy3/7Fw/aHd1h15u7/WKgziI5.0Dp4VGrMrWuH6Qyv4Qsn6', 5, 0, 2),
(201801038, 'KIMBERLY THIOFIANY', 'P', 'kimberly@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$rjH9U3YDKtZE9UjXeedG.u8QckAz4d0j1sAh.NsYd2mcj5dfeEV3y', 5, 0, 3),
(201801039, 'BERNARD HERNANDO SETIODONO', 'L', 'bernard@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$sdHzvD2VtWtF9VuebDh6puctdAoTGUIdeCSwY9.bnZu/nDRwnpr6a', 5, 0, 3),
(201801040, 'DEVANO PUTRA PRADANA', 'L', 'devano@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$ym652OKLmOK5pYNeseLxp.mWZMFYaySM64/xQn5ygkWtqZM/ylr/i', 5, 0, 3),
(201801041, 'MARIA IRENSIANA K. LANGODAY', 'P', 'maria11@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$qOmaxvVuNgSHYcvvNIcWyuYcUPV2iFmsGik/x9kFJQbcCztQkvZ0a', 5, 0, 3),
(201801042, 'ALVIN YOHAN  WANERIN', 'L', 'alvin1@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$C76vPWi7PnVYJPZOJGUzb.W3tj0R1xGXTSkfbezW161aENKH8YU9a', 5, 0, 2),
(201801043, 'AGATA FEBRI NANDA SIHALOHO', 'P', 'agata@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$s6qeksdAdW6nAiRnBQ7l2.rJvTYsiJsNFPCh4EOCYB2LZx0eDZduG', 5, 0, 3),
(201801044, 'YUSTINA', 'P', 'yustina@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$Us8Z97fDLffbms42ZGAL6u43U6OAk7pnwqWHXhrS52FOHSO4JRAra', 5, 0, 3),
(201801046, 'STEFANI JESICA DALA', 'P', 'stefani@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$zDcLX.i5X22hne3wYvddK.EPUr0d1MrVODN4QGo5y3DT04rf6VCQy', 5, 0, 3),
(201801047, 'MUHAMAD SALIS GUNAWAN', 'L', 'muh@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$5ECaU.iuy/OcgkEQi9IjOuYNMbLZNmvnzHOkk7bqQecO.hZaK4VhK', 5, 0, 3),
(201801048, 'RAIMUNDUS RIMONDO', 'L', 'rai@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$1x92fQrASgGTg1UN/dIHLOQsNjohVuuDL.fDlpSDGHMSnwJeKmBSy', 5, 0, 3),
(201801049, 'YULITA KEWA LANGODAY', 'P', 'yuli@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$pnpyDF2TPXcHpDpzClkMcOtYrSeGPVxsvokWMf1jJ1jr4z1fBOSAe', 5, 0, 3),
(201801050, 'KEVEN KRISNA WIJAYA', 'L', 'keven@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$ygP0276RaTzo2fze0f9EsuXwU8gYzPNnY8RyYl3pEIPmr8MXTCZ7m', 5, 0, 3),
(201801051, 'BRILIAN AMALSHA KATIGO', 'L', 'bri@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$Ww204oZfQg0Q6tjc1OhEAedauyFwXVTsBP8a0ZHvV6hoXC2eJSQ6m', 5, 0, 3),
(201801052, 'ISNAENI HIDAYANTI', 'P', 'isnaeni@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$FywCLY8lH65eqFGHDMbPE.bNN/CGY5jCt4uLb4Vbqh3NRips/KOW2', 5, 0, 3),
(201801053, 'ABDUSSATTAR ZAHROWI', 'L', 'abdul@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$qGgXqXZK4HO64FGOBZyj.erFOuYhK4u991g/4kAY5U4iFc/npbUTm', 5, 0, 3),
(201801054, 'SIPRIANUS KONDO', 'L', 'sipri@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$EStcyzYN8IWE4FsWDV0F3Ocptsbjob.cs7ioHMgmOUe6AFtHkmR6m', 5, 0, 3),
(201801055, 'PETRUS KRISOLOGUS SURYA K', 'L', 'petrus@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$4d0.7Pbh/jSWJlBtfkdHZuVYY8Paf5w5B9z4OkzuEnpbnoqBMvMje', 5, 0, 3),
(201801056, 'MITA NUR OCTAVIA', 'P', 'mita@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$jvsAh/HI9bardThXij0J5O5jXa0yYKXDG9MlI.sdVtm433Vd0LC7G', 5, 0, 3),
(201801057, 'GRAHITO SATRIO PAMUNGKAS', 'L', 'grahito@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$VUS9RONeuGneq1u4DWtn..hFi3VrLDrvT4Z/bcAH07NgS0RFAkCRy', 5, 0, 3),
(201801058, 'HAERUL NAZAR', 'L', 'haerul@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$81GZ/MVa8dyG1NuxsCt72.MQCU8ehYbuQseFv6OI0x2w/hTwnM1Ai', 5, 0, 3),
(201801059, 'MEI SERLI MARSELIANA', 'P', 'mei@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$IswokKIV19fiEAQieOaAyuban7PpZtv0oISmAoSQ94K6HUqdGgXRa', 5, 0, 3),
(201801060, 'LUCIA GUNTUR WIJAYANTI', 'P', 'lucia@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$RVIuv8As0Ks2XZ.McV0umupPqmDYxsySnEzcGElhSLl1rrGC0kfQq', 5, 0, 2),
(201801061, 'MARIA STELLA', 'P', 'maria12@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$0ZQTIs5BgTsEHjWMJE2X.uW.HEVUDF5cWdqITESO6qGC3hsuS9aaG', 5, 0, 2),
(201801062, 'SYAHDU CHANTIKA LEONITA', 'P', 'syahdu@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$yCS8Cb/G1XVziEC1Ts5pSu2H8PNB.MeselIT7Ddl5tPoeAzABi6Ry', 5, 0, 3),
(201801063, 'RYAN TRI KURNIAWAN', 'L', 'ryan@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$4LQ4riypt6dPvNaPDi1OBeiY6S.kUib7KU6AlvOxp8UJHKPbTjEKe', 5, 0, 3),
(201801064, 'CAROLINE', 'P', 'caroline@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$tHKKbocBLCPVoCckG.TYAuXppq6EUdZlAem3kzzLFycCuU9tmNklC', 5, 0, 3),
(201801065, 'KRISTINA MARIA KESE BALAWALA', 'P', 'kristina@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$iocKCQkvUaqd5sM2gU8BKOUgvPugh.VLyst9ku9pRNy/rYSgKWqnS', 5, 0, 3),
(201801066, 'VINA VELIANA', 'P', 'vina@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$tXCH25/Nv4TzxZQ6cqgdqeTaaW0CdAzAxhUdE/K.6RU56bdHZsPPq', 5, 0, 3),
(201801067, 'SATRIA BINTANG PRIADI', 'L', 'satria@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$YqO8WUWj3iYyxCYFDhUSSeuDHXT0nxXksPluQLvhHxYgNwlohv7Qy', 5, 0, 3),
(201801069, 'PETER GIRI RAHARJO', 'L', 'peter@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$CboWNCjXTUiSv9Q16yPKh.1PBOna.8oIZXOXFksXOUp0.5.OlUVxi', 5, 0, 3),
(201802001, 'GABRIELA CHRISTINA FITRIANI', 'P', 'gabrielachristina@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$Bi2/6o2fn/hmr08dU559Iuu.Z0sCPkdtFW64KTPDQ/VMU8rYx7x7S', 5, 0, 2),
(201802002, 'LARAS ANISA HIDAYAH', 'P', 'larasanisa@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$aHJFet/fB8Ax89rCMEpAJuOgtCCbqj0G/S1N.nrvGyVON5RRQOSrm', 5, 0, 2),
(201802003, 'YOANES NICKO SETIAWAN', 'L', 'yoanes@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$qYJpPUMUAezDPaMj770NdOItgRC4SeAIV1D1ERgRPr3uSrjYYZx.C', 5, 0, 2),
(201802004, 'ELMA CATHARINE PUTRI MENGGANA', 'L', 'elmacatarina@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$WoL75NNKf/1VZzep8HQyFeaKfY8qpfGt3UfaEXMZt8dWCaccUR.BO', 5, 0, 2),
(201802006, 'FENI OKTAVIANI', 'P', 'fenioktaviani@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$zjytyGz48VbZSJ0e/7M4IeuHhBgPYMtfEDqsfzfMZj0lmWtG3nb1K', 5, 0, 2),
(201802007, 'AJENG DAMAYANTI', 'P', 'ajeng@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$plga5Inen10RNho5kJsnDecXSHP1ueXEax9cp2rV1BdMZj9Y9tE46', 5, 0, 10),
(201802008, 'VIA NATAL LENA TURNIP', 'P', 'via@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$D.YInCeKZZGY9TWLLvUMluiFfCrZ9.L.N9b0Xi4Sr/5T3SQjCQT5O', 5, 0, 10),
(201802010, 'HENDRA ARY PRABOWO', 'L', 'hendra@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$M1FwTpeiVo8RakFd3Bmztehp2HRORCWHrDzEGkaFF4ypzIBpLt1h2', 5, 0, 10),
(201802018, 'EMAS KEMERDEKAAN AGOES SOEPRAPTO', 'L', 'emas@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$cYAiySE3wffDfyKNdxyRQ.st9xyC68HjbsxCwnOwcpvXNCxVonhgy', 5, 0, 10),
(201803016, 'MUHAMAD KHOIRUN NAIM', 'L', 'muhamad@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$CeQkd1jXSYhW6WSPUXaHDusMBt.5h50Hw4WB5VVieCfjmbnd7wj2K', 5, 0, 8),
(201803017, 'VINSENSIUS LEVIN SETYA ABISHA', 'L', 'vinsen@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$t01VaM3i/w6p4nLu4eORTuEWE8Xwa1B.Gf6popo.PcYKqXvoZTAGW', 5, 0, 8),
(201803018, 'EKA SOPIANI', 'P', 'eka@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$mtUwzywSuUOL0174PQWrKeNCaB30uMOOxCNIQKMbR7Li27mh2tDXW', 5, 0, 8),
(201803019, 'AKHILES SHYANTICA WISNUMURTI', 'L', 'akhiles@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$bnMM59AatbfqM0YxJENFYuXqOkD6jb/9YtjZYYSOjKrQ.sNilJacu', 5, 0, 8),
(201803020, 'VEBI', 'P', 'vebi@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$sc1255UvVs7zp/LpFPT9Q.murtcbdcOO0ZLYF8pfqys35z4nvIGfu', 5, 0, 8),
(201804001, 'INTAN PERMANA SARI', 'P', 'intan@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$O.GWcjIB1dvZxxIuvu5hMurGgxfu8Iv2ctJCj7PHzujqXWtgl3aCi', 5, 0, 2),
(201804002, 'GAMAS MEGANTORO WIJAYA', 'L', 'gamas@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$K3pOr0yHDEqdR2nKL/YJJuGA7j7PcDJD8Roy3qJqP1Az/JTYiUPcu', 5, 0, 2),
(201804003, 'STEVANUS FRANKY OKTAVIA', 'L', 'stevanus@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$89Cvc5ARs0RjJi.b3NgYs.RD6QCGHBBv5egUDJ8zrkv5p1sLH7KJi', 5, 0, 2),
(201804005, 'TAUFAN ADITYA', 'L', 'taufan@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$1SpeDpC5OEPUn6gT161SvevwoqqIpF8UHvhvRorZC1jlbwft4CFkS', 5, 0, 2),
(201804006, 'ARDA SEPTIANA SIANIPAR', 'P', 'arda@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$gw9.D.zJTR/e.rBDiNY1DeDUgsvvhx59dItHKYc0NPyZa9CdJTztC', 5, 0, 2),
(201804007, 'TIMOTIUS KUSNADI', 'L', 'timotius@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$mwBXd5cQ5Kr3I0vCOd/cYeWqc7trA1pTERvvpMtFwD6z7suBVjK22', 5, 0, 2),
(201804008, 'BRALLIAN RAJZANDRA SAPUTRA', 'L', 'brallian@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$2Cvlss.8j0ILpvtimccdLeY5FEK76mPREne0hlKtnGbISxuF6dn4W', 5, 0, 2),
(201804009, 'C. MEICI ARJON', 'P', 'meici@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$qdb.W2WGh9YkR5QDsuhLeOq9PDbaMTV2D1Fgdjw99ga1pdF6uRyhi', 5, 0, 2),
(201804010, 'DAVID BRYAN SUKARMAN', 'L', 'david@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$6Fc4powCwJXR81R.9UIHuucdSsz0lxo5wHnLE55gyzf.7a1wyvUXS', 5, 0, 2),
(201804011, 'FIDELIS ARDI WIDAYANTO', 'L', 'fidelis@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$6KtaRe1QuChf9n3zuzJfAumoELYOS/S7Jp/wZvRos40npI7thrGay', 5, 0, 2),
(201804012, 'GALIH PRANATA JATI', 'L', 'galih@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$PwWEiLOXEu2Am0UYwHZnOOeaTdaJ7VwBLEItJZj4eHH7DF8Hk6qP6', 5, 0, 2),
(201804013, 'MARELDA EVA PURNAMASARI', 'P', 'marelda@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$Q6DeiMOm/KeZglY3pK8W6OQO4dLHuNULmMeyy64JGNBgqlvm8YGaC', 5, 0, 2),
(201804014, 'ANGGRIDIAN MAHARGYANTO', 'L', 'anggrid@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$jKIZVFfQDh5HfgzLDR/ZSeFCLxe3nn6.xBTNb10PfxoxeAxLqdFZy', 5, 1, 2),
(201804015, 'YUDANTO RIZKIHARTO WIBOWO', 'L', 'yudanto@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$ZSUHQdDszX9dBNICV9FaGe7myiBhtT7YkOM/IZo6PY84vJzGWjd7u', 5, 1, 2),
(201804016, 'MAULANA ASERA', 'L', 'maul@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$ysGISx8Pyoh2BVyd546zlukQxo9q7EGoJZZV1y.XotC5CSF1rSo5m', 5, 0, 2),
(201804018, 'DANIEL MADA TUHEDA', 'L', 'danil@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$diLhG28iP3kg4z.3T.B5..ziGVXYW2Hpt/9EqARHbYYFaKk7830Oy', 5, 0, 2),
(201804021, 'GRACE NOVENTINA', 'P', 'grace@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$.ymwt1QHElvmNgHzebzp3OsSkqF.OjKC4gl3TQG2mEQGvdq6WGvt6', 5, 0, 2),
(201804022, 'REGINA ALYA RIANTO', 'P', 'regina@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$7oAMuSBRcFKObS/GFPQi4.7il33dW41A6tpvCBtBVWhX.iqCC0Xgm', 5, 0, 2),
(201901001, 'ADRIANUS ARDI', 'L', 'adrianus001@gmail.com', '084xxxxxxxxxx', 'default.jpg', '$2y$10$ml4X5o.K.KUPPm5JWpHVne7kmq8.dRBt5a5KNbs1Kgnxd78zerbKW', 5, 1, 3),
(201901002, 'IMELDA TIRTA WIDYANTI', 'P', 'imelda002@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$Sql9SeXev4oKZGIV84JZ7uIlHEvHEV81Vv4vL6YetE4PDWEyhUvtS', 5, 1, 3),
(201901003, 'VICTOR ALEXANDER', 'L', 'victor003@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$mq8UMvEh.Dycb.tbQGFPJ.yIemfR37pJA3GgohdILZO49AOPcnHfu', 5, 1, 3),
(201901004, 'ZEFANYA YANIKA N', 'P', 'zefanya004@gmail.com', '084xxxxxxxxxx', 'default.jpg', '$2y$10$FfrnXj9MGJYY2G/oK1r2N.qRT/KU472Z.go0pCIyRpeKvp7HPPnA2', 5, 1, 3),
(201901006, 'FEBRI YANTO BINTANG PRATAMA', 'L', 'febri006@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$phyOWvwY0mRAHxfrxfKIjeKrnEOv2SfJGj9cjTLEAIVVhoFunbmNm', 5, 1, 3),
(201901007, 'MEGA YUPITANA', 'P', 'mega007@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$xC5WKgUiSYEauRPhHZQNsetgxiaspbK6yk2WoDmu5d9TO7O69nzV6', 5, 1, 3),
(201901008, 'IVANA', 'P', 'ivana008@gmail.com', '086xxxxxxxxx', 'default.jpg', '$2y$10$iCEJzZRs1.iXP52..nm5muusovyMSkb13cZ/oaoP37Et2qoGO9m6q', 5, 1, 3),
(201901009, 'MARIA LUSIA BENGANG', 'P', 'maria009@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$QUKM3cFr2yqG6WaA/lMoxueGa1RsYzKicaNF/vJmWu81SzYDfZn7e', 5, 1, 3),
(201901010, 'CORNELLIA MEGA ARGATHA P', 'P', 'cornellia010@gmail.com', '086xxxxxxxxx', 'default.jpg', '$2y$10$TSMbkcFXCuGJmlF60YITVOjh33vExqlrybNDdh873MXA81sqq5MYq', 5, 1, 3),
(201901011, 'MEGA SETYANINGRUM', 'P', 'mega011@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$qQTsvgCrCNs.jiKeT50eWO9KSeUnImwaZxCWr0c8XnpT8DUvJvpqK', 5, 1, 3),
(201901012, 'SPANCLIHE LASEA LINRI', 'P', 'spanclihe012@gmail.com', '084xxxxxxxxxx', 'default.jpg', '$2y$10$7crXR5lrO7LghllHpx65meiea3q538WlaxZzIi9gbvFXf/WBcQuae', 5, 1, 3),
(201901013, 'SONI GUNAWAN', 'L', 'soni013@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$XPzFNKKpzRpMoXq91EfGq.UdQ6GazPt7YiDufSPn6aiE9j5U8Uh.W', 5, 1, 3),
(201901014, 'HENDRA PUTRA P', 'L', 'hendra014@gmail.com', '086xxxxxxxxx', 'default.jpg', '$2y$10$1B/2uLv4kPML4h3TbBu3BOemFijKfsE1VViEPMTNT/p8DYEok0Q36', 5, 1, 3),
(201901015, 'ARIN SETIANI S.P', 'P', 'arin015@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$YCXKFGTinYuBT2Bv5qBN.eyxmO8GTjoVRLuc3/QDNA0vWtR0Kv.Lq', 5, 1, 3),
(201901016, 'DEVI ANINDYA PRADANI', 'P', 'devi016@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$ehn8MqLF/6ST/sl.DA9dJuDnfn3IN/zodALy9sVIZUTzND5Nc/du.', 5, 1, 3),
(201901017, 'DION CHRISTIAN YOESTANTO', 'L', 'dion017@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$9CNz6jnwqaBCnGVq7SLjSeuB8Vqi6tZryzDstCubHZXZSWGRw2iZy', 5, 1, 3),
(201901018, 'MATHIAS B BOLIONA', 'L', 'mathias018@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$c6bv74K1ZCtRDPgQ2wMRV.okN.Hc4yZ88ZivM1WqaOnuxvO.gyxXW', 5, 1, 3),
(201901019, 'AGUNG PRASETIO', 'L', 'agung019@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$YZ4tZGycTGP0SVC3PeRlBudzwrN/x06mUyMdr8eNJrPa0fyqC3gD2', 5, 1, 3),
(201901020, 'JULIUS FLANDY S', 'L', 'julius020@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$g5mZOKa8lnJUsRsKf5BH8OjfnECdlYW3iuH6MDbQZ3F.HbcAAUXPm', 5, 1, 3),
(201901021, 'IVAN WIDYA ISWARA', 'L', 'ivan021@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$1Mq7ADSWWycHiTEY8D55SOuoqO0zYj/Q5cCo6mnfQJc9wBNQ.IJs2', 5, 1, 3),
(201901022, 'NADIA VIONITA', 'P', 'nadia022@gmail.com', '097xxxxxxxxx', 'default.jpg', '$2y$10$ET/GjDFT57YLUv/LvsPA.O.IdJVwuNyczpjg0MrH7yk7M3EpOVm/S', 5, 1, 3),
(201901023, 'BRIAN APRILIANO T', 'L', 'brian023@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$nOEcoxG.y1LBFWhuhtuU3uYiMbV98ccEBp7J1lJhRdPfxd8iSGKk.', 5, 1, 3),
(201901024, 'ARIO PAMUNGKAS SUSILO PUTRA', 'L', 'ario024@gmail.com', '089xxxxxxxxxx', 'default.jpg', '$2y$10$gwYpf7Te.61ymLiLHPg3ZuYdal1QslcD5zzgNcAZO9erZ53iYebzW', 5, 1, 3),
(201901025, 'SERGIUS PANGGAH DHARMALA', 'L', 'sergius025@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$MsiguVckjFN7072r9QFJQe5jhSo88EzJuhF1dlPXBYZIU.QJtWcxK', 5, 1, 3),
(201901026, 'VLADO JUAN REJOZ PRAYUNDA', 'L', 'vlado026@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$K/S0bb4ZSvnmyLZc5GZ8oOVzu59vYv37QpTR.gvcUyJYMf.99.ay.', 5, 1, 3),
(201901027, 'RIFKI ALFIYANTO', 'L', 'rifki027@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$OM1IGh28TC7NkkMuHFmzuun1tbti/HLvyEjNPBmQAwM8JsVxOYa42', 5, 1, 3),
(201901028, 'JESICA ANASTASIA SURYANI', 'P', 'jesica028@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$.Bml2ZUogdjVG0uaclx83OnM/V3dja4YnRDVffuJsxWGXxGQkaJeO', 5, 1, 3),
(201901029, 'YANUR MUH RIZKI', 'L', 'yanur029@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$eJpm13988jCuLVuwjo30EOq8ACs.Sx6vc3QSMfvAwUJaXtg0DTavy', 5, 1, 3),
(201901030, 'DEWI RAKHMA M', 'P', 'dewi030@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$WOhvKbzOrlJz0tkqI5wybu1wpKe2Cpxk/NEWQiQh8OxjAF5Gg1jYK', 5, 1, 3),
(201901031, 'MOHAMMAD AL WARITS', 'L', 'mohammad031@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$Zqgz8oaHnkRaOw/2b5TA3OZZ.6GgDYUFH9c4outTFtZppc9Ci0pJa', 5, 1, 3),
(201901032, 'HANIN MEGA SAPUTRA', 'L', 'hanin032@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$vel8cnnXctErFmE960od3ewMOZi6o3M/2StAcaOKMCiiZBOUcxjj2', 5, 1, 3),
(201901033, 'PEBRI SIMON LEKSONO', 'L', 'pebri033@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$KA/vd9QDhgKeVqQaF3dOyuB83QTWXJ9wx/pL9u9V/ze2ecNkrAWYG', 5, 1, 3),
(201901034, 'THOMAS MOMO', 'L', 'thomas034@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$.WzdRvGZCBOKcAev/oXUrek.1ioY7XDFHkeeteFMYlWYNj5azaHMq', 5, 1, 3),
(201901035, 'IAN KURNIAWAN', 'L', 'ian035@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$REJ7BVLH3oXFnwxgQpRb.OP1oqNmUISVVTqOdRsYOrqwbcCpjzRN2', 5, 1, 3),
(201901036, 'OKTAVIANUS ADITIYA RIOPRADANA', 'L', 'oktavianus036@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$U4LqQJH0.JCLOeAO.vVP4OI6AHIisPmMnCvq6OVfCRt.CJX0aUBba', 5, 1, 3),
(201901037, 'FRANCESCO ADIMAS W', 'L', 'francesco037@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$/JCCKBwpmdti7Ty2TyPucOH90KSDOvV2qLobHoOWcO5e2ooDYgIe6', 5, 1, 3),
(201901038, 'EVITA MARTHA R', 'P', 'evita038@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$dt5VLY4q8JBuC4VzKWEknOLQI.wuiwLV7lzFTf00NJu2F4gQ4ufHi', 5, 1, 3),
(201901039, 'PAVEL MARCELIANO', 'L', 'pavel039@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$eBA39jRkTejkrb5y/wEEeO5UghTBr.AyBsLwwENSECZoDETUszAqu', 5, 1, 3),
(201901040, 'ALBERTUS INDRA HARTONO', 'L', 'albertus040@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$jWvacZl5R31F6g3Pd3pefeHgtqRHInTCDxTRl6xWlL/9adO8IFHXa', 5, 1, 3),
(201902001, 'NUR ALIANDI IRAWAN', 'L', 'nur001@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$dqGBVgk2gZy85vDsftDP/OXRfoLyv5H.raVm/oEVniXCW2WFhbQ56', 5, 1, 10),
(201902002, 'MELSI SUKENSI', 'P', 'melsi002@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$Q6zVeboCGj6rH677xmYYY.Mg.1dx1dvq6ZvV31N0plIjPdXTspvv.', 5, 1, 10),
(201902003, 'DUHARIZA GHANAFI', 'P', 'duhariza003@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$3m8p0CC3AloEqKgK/mpy8ODHpl8QJZBD/rb82a2o8KPY1VvgLM2Sq', 5, 1, 10),
(201902005, 'DEWI LASMINI', 'P', 'dewi005@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$FHIwpGIh.b.mZVbcelrJOePKavQtXnfCAQkQKlDiOXldHxUurPlEK', 5, 1, 10),
(201902007, 'SUSI YULIANA', 'P', 'susi007@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$MRvXOe6CuHzzKBz2S8mI9OCGTg/dpmDdnw7cafdpCj4QosbRbp5ia', 5, 1, 10),
(201902008, 'INAYAH NUR HANIFAH', 'P', 'inayah008@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$6T/goGeBkJl/oG4rcuFTLOduIMml0mOefCEWdxcByZAorZhSrBRNK', 5, 1, 10),
(201902009, 'ANGELI NAOMI SINABANG', 'P', 'angeli009@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$xo.iClD6tcXNC1PhpsiDl.AtXZokumx73ugpBpakiK4Wv.91Qj/ZW', 5, 1, 10),
(201902010, 'ABDULAH ELFAN AL FATAH', 'L', 'abdulah010@gmail.com', '56785442', 'default.jpg', '$2y$10$Vn/3a8MMkL61zkC/sAddUOmOrlOHutzc4mjN7ggq.FWrItUqkc54y', 5, 1, 10),
(201902011, 'NOVI DWI KURNIA RAHAYU', 'P', 'novi011@gmail.com', '081778976567', 'default.jpg', '$2y$10$Hjed4oumcHfFIaEf7bsfa.B.Xdlm067Vigny0S0fS6sJtAb00SFHW', 5, 1, 10),
(201903001, 'ANDREAS NOVARIO HARMANTO', 'L', 'andreas001@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$1imSi0I04ABvgXJ4wME4uuJqx96VcjjqVKg2/qKxlv7XILn3fJHN.', 5, 1, 8),
(201903002, 'LISIA EKA PUTRI', 'P', 'lisia002@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$M.Bre82.VpjCDrbbYmsvwecvPp1we3Vsra0EYCnI9eHl11nLphgW6', 5, 1, 8),
(201903003, 'JOSAPHAT LEJAR RIWANTO', 'L', 'joshapat003@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$ZgSHX9oR8uR4LJahaypn8OB9wO2tZ6hvYMtGOyd0z.CZtLp54vHSK', 5, 1, 8),
(201903004, 'VINSENSIUS ALVIANTO', 'L', 'vinsensius004@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$tOhgdbLRX.HCHBhYrJiCe.oMFn7SJDjEcPzPZceGLEx3NNDS0aSpW', 5, 1, 8),
(201903005, 'ELSI DESLIAWATI', 'P', 'elsi005@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$OLPVm/V0T1tWR.cNxY5Rx.TvqpsbICuNyxAtibihvIGf8x59eya3m', 5, 1, 8),
(201903006, 'VALLEN CHANDRA PRADITYA', 'L', 'vallen006@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$t8KcVSqKBto0c1FzazdiFurrRfK68XkBjgpsCftGSylfe9vkVUeZa', 5, 1, 8),
(201903007, 'ELISABETH MEYLANI', 'P', 'elisabeth007@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$2qcNTwi2CbwJnqdDAlFZgeN3umdRK5xOEAf.aF9GEk9nxEEK6BgPy', 5, 1, 8),
(201903008, 'MELIYANA PRISKA YUNITA', 'P', 'meliyana008@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$4CAAuMoVag8HMdgFHQfUvuqxmBHhWC9U1Pxu/siU7hpZxnnxowZCS', 5, 1, 8),
(201903009, 'GREGORIUS VARIAN S', 'L', 'gregorius009@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$qFzACS6mmjYKmqQVzAf/Ru9.KARez6cjA/gBOhj5.gAgFE5kQYEpK', 5, 1, 8),
(201903010, 'FRANSISKA DELSIANA', 'P', 'fransiska010@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$uF7XJMWqqgpPBRHuSKN2Vu2z.Szufo5ywlsS.0sUnowl1dcSgfffq', 5, 1, 8),
(201903011, 'ROMASI SIMBOLON', 'P', 'romasi011@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$ARrPAdYA8xj6TddDoNfDKOUgRyzqdspEbIvJ1LTImc04LIz3aF6tS', 5, 1, 8),
(201903012, 'RIFQI YOGA SIS PRATAMA', 'L', 'rifqi012@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$QjmncbZxQA9u4aExbBDD3eNpRj/hRlC.7QnLJHww3SB4o.nOhgaJW', 5, 1, 8),
(201903013, 'SETIAWAN', 'L', 'setiawan013@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$m.d5BpPcppSrAax0wqTVoutM6X.93jpRJdmkRrkuqN6lq8beNNqSu', 5, 1, 8),
(201903014, 'VALENTINA HARYANTI', 'P', 'valentina014@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$//46q2OukbFBIaj.HYEiX.9EUYUKSdegkCiOYsfQE6ZfoCmbZFMV.', 5, 1, 8),
(201904001, 'R. ANDIKA DWI OKTAVIANUS', 'L', 'randika001@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$kODbKztdjPqcWioB3k7vhu71jU4dE8wMyKTlpbq0oVnYWyplLw.Cu', 5, 1, 2),
(201904002, 'NATANAEL DOMI RANTUS ONDA', 'L', 'natanael002@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$iybWIjCrsAFDIDjv7aTQX..rIVJp2oWu26F3NzZS6o0JSd9JM6.B6', 5, 1, 2),
(201904003, 'HENRYKUS SATRIO', 'L', 'henrykus003@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$94ZqheLpX5xiAZV9oRgxGOE4KwAUOhTHwCHumjfyzvkCW938Ucz22', 5, 1, 2),
(201904004, 'HENRY ALFREDA', 'L', 'henry004@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$j9a0i6F15RcveUHJF9YWIunE7n.tDblUzw06Bhe/kAWp1PxvAkFWy', 5, 1, 2),
(201904005, 'JOSHUA JOSIE PRAYOGA', 'L', 'joshua005@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$4oLBdNgIsvNV22cAmBBK6eIp5kHg7unOxMfsfySRrKpwh6Y0vNfYO', 5, 1, 2),
(201904007, 'HANUM RENGGANING T', 'L', 'hanum007@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$0X2dTEYI7uR9nEahnc9SxuwzMbh2h8jetD62MbxkxGnR4bNXXP9Pi', 5, 1, 2),
(201904008, 'SELLY FEBRI SAPUTRI', 'P', 'selly008@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$trBPZYFsNLEuhClxr8mtQe.V1Y1qLFpcgsOapXgJf/dVySo/4EmEu', 5, 1, 2),
(201904009, 'HANA SETYAWAN', 'L', 'hana009@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$gyUODyCYZo/P6ouAdy0xLOQlM24uQwMrZlk.KIF/lim/H.mDpRtjO', 5, 1, 2),
(201904010, 'GILBERT SUHENDRA', 'L', 'gilbert010@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$YEpSb6Xlq/PuzU3/YtKQ5.qyAHsoCndGN01kkmR2SZ16iRSkwVptG', 5, 1, 2),
(201904011, 'MELISIA NOVIYANTI', 'P', 'melisia011@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$wUzuXXi6GTomH9MnK8IKJuEofx2izyFkTDzTDlaVf227lwD9mU.BO', 5, 1, 2),
(201904012, 'MARIA STELLA', 'P', 'maria012@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$TI.YZdLLH2vN0xRgda4OyOf1t/1SrVFKSD8VM7mf8lCMhE47wREY.', 5, 1, 2),
(201904013, 'MEI SERLI MARSELIANA', 'P', 'mei013@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$h5RxvftgzNr2d4bpIOvzvOPmzI9JXLZo/UvfU5IR4jWhql0rzDKVu', 5, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `nidn` int(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `is_active` int(1) NOT NULL,
  `image` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`nidn`, `name`, `password`, `jk`, `jabatan`, `email`, `hp`, `is_active`, `image`, `role_id`) VALUES
(12035903, 'Ir. GH.Sumartono, MS,MSi', '$2y$10$8k5BANmDpiWcvaNx1psCIuEm05riu2Z63HHI/0molvgnik/SJ/Lda', 'L', 'Puket II', 'stikomyos@stikomyos.com', '08xxxxxxxxxx', 1, 'default.jpg', 3),
(28027204, 'Romanus Edy Prabowo., S.Si., M.Sc., Ph.D', '$2y$10$ZSTQRuP.7zMD/rx7hQsgROxiJNblHvkWuvSy/DR40IpMHcpDi4KAy', 'L', 'Ketua', 'romanusedy@stikomyos.com', '08xxxxxxxxxxx', 1, 'default.jpg', 3),
(620097601, 'Antonius Ary Setyawan, MA', '$2y$10$pwzf0pK2HX2H7F7Wgo.fFuTzSiwkjD929Tze2be2Q2T41dgFx4UY2', 'L', 'Puket III', 'arysetpr@stikomyos.com', '08xxxxxxxxxx', 1, 'default.jpg', 3),
(624038601, 'Dhany Faizal Racma,M.Kom', '$2y$10$3P5A0Wnw6gYciOrRTlBaM.vbimZAtFHFofw8XCtGfDMykKwVa/Kv2', 'L', 'Puket I', 'stikomyos@stikomyos.com', '08xxxxxxxxxx', 1, 'default.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(5) NOT NULL,
  `th_jabatan` varchar(20) NOT NULL,
  `no_kandidat` int(5) NOT NULL,
  `ketua` varchar(255) NOT NULL,
  `wakil` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `fotoketua` varchar(50) NOT NULL,
  `fotowakil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `th_jabatan`, `no_kandidat`, `ketua`, `wakil`, `visi`, `misi`, `fotoketua`, `fotowakil`) VALUES
(3, '2018/2019', 2, 'Kevin Ryan Sujono', 'Agnes Wulan Alverina', 'Membangun Senat Mahasiswa STIKOM Yos Sudarso yang humanis, professional, unggul, serta aktif dalam mengembangkan kampus yang berlandaskan cinta kasih', 'Menjadikan SEMA sebagai sarana aspiratif mahasiswa yang kritis guna membentuk generasi muda yang unggul dan kontributif. </br></br>\r\nMembuat kegiatan yang bersifat internal guna mempererat hubungan seluruh warga STIKOM Yos Sudarso. <br></br>', 'kevin.JPG', 'agnes.JPG'),
(4, '2019/2020', 3, 'Feni Lestari', 'Agnes Shita P.', 'Terwujudnya Senat Mahasiswa yang profesional<br> dan humanis yang dapat mengayomi aspirasi mahasiswa untuk membentuk generasi yang unggul', 'Memaksimalkan fungsi Senat </br></br>\r\nMenampung aspirasi mahasiswa dari semua golongan tanpa membeda bedakan </br></br>\r\nMenjalankan program kerja yang dibutuhkan mahasiswa </br></br>\r\nMenjadikan senat sebagai sumber informasi terpercaya bagi  mahasiswa', 'feni.JPG', 'shita.JPG'),
(5, '2017/2018', 3, 'Richard Alexander FL', 'Kevin Ryan Sujono', 'Terciptanya peran Senat Mahasiswa STIKOM Yos Sudarso Purwokerto yang aspiratif, komunikatif, dan berintegritas serta dapat menjadi fasilitator kegiatan – kegiatan guna memaksimalkan potensi dan kreativitas mahasiswa yang profesional dan humanis.', 'Menerima , Menghimpun dan menindaklanjuti aspirasi – aspirasi mahasiswa serta warga STIKOM YOS SUDARSO PURWOKERTO secara berkala. </br></br>\r\nMenyelenggarakan kegiatan yang bersifat internal guna merekatkan hubungan rasa kebersamaan.</br></br>', 'pria.png', 'kevin1.JPG'),
(6, '2015/2016', 1, 'Ella Laela Sari', 'Bhutyarti Kristitami N', 'Menjadikan Senat Mahasiswa yang berintegritas sebagai wahana dan sarana pengembangan diri Mahasiswa STIKOM Yos Sudarso <br> untuk menuju ke arah perluasan wawasan dalam berorganisasi dan peningkatan kemampuan kecerdasan mahasiswa', 'Merumuskan dan menetapkan AD/ART Senat Mahasiswa </br></br>\r\nPembenahan kegiatan di bidang Unit Kegiaan Mahasiwa ( UKM ) dan Komunitas </br></br>\r\nMelakukan study banding dengan senat dari kampus lain </br></br>', 'wanit.png', 'wanit1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `email` varchar(128) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `jk`, `email`, `hp`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Samson Sugiyarto', 'L', 'gitosamson123@gmail.com', '089213248384', 'IMG-20191004-WA00261.jpg', '$2y$10$jJrLC19f6yI7Fd1p0LA3PugxTM0rE9XxJbNSk7LfMkPNwNS8pZzUu', 1, 1, 1560654857),
(21, 'Samson', 'L', 'samsonsugiyarto123@gmail.com', '081575224630', 'IMG-20191005-WA0002.jpg', '$2y$10$r3dY2qs.ZBHVeHq5loS0lOCE3VDj3SzrMAljLe1F0SzUOFAB4sYh.', 2, 1, 1561087895),
(22, 'Feni Lestari', 'P', 'Feni123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$oN77xgXd3GLi8x2A6jjm0.MnEqoziD7XLkU7zCaa3zok6LSPnC7oa', 2, 1, 1574581251),
(23, 'Mulat', 'P', 'wahyueka123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$ZN9GOgQGhcn1M70QleQwFurHqL61IDn6gfaC/U5ahcqDzy35CubrW', 2, 1, 1574581578),
(24, 'Niko', 'L', 'niko123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$yTMJ3IACaXCgrJ4CLA/Byu59tPBXuCtbdgSCIAUbvuHNo/l7Nu73G', 2, 1, 1574581802),
(25, 'Agnes sita', 'P', 'sita123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$FOq1EY1YzLW142ydxF33Huaj9jEnyMHuX.Auy73F7CZ3ur9mfji9q', 2, 1, 1574581875),
(26, 'Rositha', 'L', 'rositha123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$3qOKX2O.nq4HI5qaR8H3.eKv1EN2PZIoRmb9nKl7agp3tyYy4JEZi', 2, 1, 1574581937);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(12, 1, 2),
(13, 2, 2),
(15, 1, 4),
(16, 1, 6),
(18, 1, 3),
(19, 1, 8),
(23, 5, 2),
(24, 5, 9),
(25, 5, 10),
(27, 4, 9),
(28, 4, 10),
(29, 1, 7),
(31, 2, 6),
(32, 2, 13),
(33, 3, 2),
(34, 3, 9),
(35, 3, 10),
(39, 2, 1),
(40, 1, 15),
(46, 1, 13),
(47, 4, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `urutan_menu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `urutan_menu`) VALUES
(1, 'Admin', 3),
(2, 'User', 5),
(3, 'Menu', 2),
(6, 'Operation', 6),
(7, 'Super Admin', 1),
(9, 'Coblos', 4),
(10, '(user) Komentar', 8),
(13, 'Riwayat', 9),
(15, 'Administrator', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin '),
(3, 'Pimpinan'),
(4, 'Dosen'),
(5, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 7, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 6, 'Jurusan', 'operation', 'fas fa-fw fa-graduation-cap', 1),
(10, 6, 'Mahasiswa', 'operation/mahasiswa', 'fas fa-fw fa-child', 1),
(11, 6, 'Dosen', 'operation/dosen', 'fas fa-fw fa-male', 1),
(12, 6, 'Pimpinan', 'operation/pimpinan', 'fas fa-fw fa-user-secret', 1),
(13, 6, 'Kandidat', 'operation/kandidat', 'fas fa-fw fa-users', 1),
(14, 6, 'Komentar', 'operation/komentar', 'fas fa-fw fa-comment', 1),
(15, 9, 'Tentukan Pilihanmu!', 'coblos', 'fas fa-fw fa-check-square', 1),
(16, 10, 'Komentar', 'user/komentar', 'fas fa-fw fa-comment', 1),
(17, 13, 'Riwayat', 'riwayat/riwayat', 'fas fa-fw fa-history', 1),
(18, 15, 'Admin', 'administrator', 'fas fa-fw fa-user', 1),
(19, 1, 'VOTE List', 'admin/votelist', 'fas fa-fw fa-users', 1),
(20, 1, 'Statistik', 'Admin/statistik', 'fas fa-fw fa-chart-bar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  ADD PRIMARY KEY (`id_pemilihan`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nik`) USING BTREE;

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `kampanye`
--
ALTER TABLE `kampanye`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kampanyevideo`
--
ALTER TABLE `kampanyevideo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`no_kandidat`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfir_komentar`
--
ALTER TABLE `konfir_komentar`
  ADD PRIMARY KEY (`id_konfir`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`) USING BTREE,
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`nidn`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  MODIFY `id_pemilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kampanye`
--
ALTER TABLE `kampanye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT untuk tabel `kampanyevideo`
--
ALTER TABLE `kampanyevideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT untuk tabel `konfir_komentar`
--
ALTER TABLE `konfir_komentar`
  MODIFY `id_konfir` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
