-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Okt 2019 pada 07.31
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipnat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemilihan`
--

CREATE TABLE `data_pemilihan` (
  `id_pemilihan` int(11) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pemilihan`
--

INSERT INTO `data_pemilihan` (`id_pemilihan`, `tipe`, `id_pemilih`, `name`, `id_kandidat`, `waktu`) VALUES
(27, 'Mahasiswa', 201601007, 'Foustino Asprila Gunantara', 1, '28-10-2019 21:54:25'),
(28, 'Dosen', 1997, 'Oskar Adi', 1, '28-10-2019 21:55:02'),
(29, 'Pimpinan', 1234, 'Romanus Adi', 3, '28-10-2019 21:55:42'),
(30, 'Mahasiswa', 201601053, 'Nabilla Nur Fadillah', 2, '29-10-2019 12:50:22'),
(31, 'Mahasiswa', 201601039, 'Yulieus Adi Pranoto', 3, '30-10-2019 22:39:37'),
(32, 'Mahasiswa', 201601044, 'Ridho Ramadhani', 1, '30-10-2019 22:45:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` int(15) NOT NULL,
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

INSERT INTO `dosen` (`nidn`, `name`, `password`, `jk`, `mengajar`, `email`, `hp`, `is_active`, `image`, `role_id`) VALUES
(1997, 'Oskar Adi', '$2y$10$JhEx.a4Mei2U9j747UTOKenFVXqGoHfLOedYO61dasEhqWXYDeFwO', 'L', 'pemrograman web 12', 'oskar@oskar.oskar', '9223', 1, '15623962323521.jpg', 4),
(7890, 'Yoshita Lianawati', '$2y$10$yy/P.zfJZ1dsiDoiepVVyuqnqRHgIz8UL.0ZL/l5/yJtkvzEdeVJq', 'P', 'Basis Data I', 'yoshita@gmail.com', '0987654', 1, '1556763143665.jpg', 4),
(9087, 'Dhany Faizal', '$2y$10$pU04d4t6uEWmGH6AeDojk.WzGdxIayk8LOJfpP1/57OBKkawR34su', 'L', 'Jaringan Komputer', 'dhany@gmail.com', '98654', 1, 'default.jpg', 4),
(34343, 'Diandra Chika', '$2y$10$WAbdlOVNXpVvqvQmhiFlcu/vFSvoCWIUc.DC1RkJcw1mx8Vpqidae', 'P', 'Matematika', 'chika@gmail.com', '09876', 1, '1559932673046.jpg', 4),
(112233, 'Mutiara Chandrasari', '$2y$10$Ce02WUXW8LZg41XnG4SWk.uxpkMfAZsi/DNtInTcl.XhoaBCXAnxO', 'L', 'Pemrogramman C++', 'mutiara123@gmail.com', '089223465344', 1, 'Screenshot_(171).png', 4),
(11221133, 'Moko Sunyoto', '$2y$10$pSjTxud.mdwxSDNE8tgSWuCA5HwT4p23n4myECq3BNJhSJ69a4RMi', 'L', 'Pemrogramman C++', 'moko@gmail.com', '2147483647', 0, '1562396232352.jpg', 4),
(11223344, 'Adi Prabowo', '$2y$10$lt78hVutH7U7EYXXw772tugA9cw3epDNbEMbzvVv/A6yG5ZVhpp16', 'L', 'Statistika Dasar', 'adi@gmail.com', '2147483647', 1, 'default.jpg', 4);

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
(10, 'D3 Komputerisasi Akuntansi'),
(12, 'a');

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
  `uraian` varchar(500) NOT NULL,
  `jumlah_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`no_kandidat`, `nama`, `wakil`, `jk_ketua`, `jk_wakil`, `email_ketua`, `email_wakil`, `hp_ketua`, `hp_wakil`, `visi`, `misi`, `foto_ketua`, `foto_wakil`, `uraian`, `jumlah_suara`) VALUES
(1, 'Feni Lestari', 'Agnes Shita', 'P', 'P', 'feni@gmail.com', 'shita@gmail.com', '87653', '98767', 'Menjadikan kampus yang sejahtera', '1. Mengadakan kegiatan baksos <br>\r\n2. Mengadakan inisiasi', 'Creative-Tail-People-women_svg3.png', 'Creative-Tail-People-women_svg.png', 'Halo, perkenalkan kami dari calon kandidat nomor 1 supaya teman-teman dapat memilih kami sebagai ketua dan wakil ketua pada periode saat ini, jangan lupa pilih nomor 1...', 3),
(2, 'Hanit Jatmika', 'Ratna eva', 'L', 'P', 'hanit@gmail.com', 'eva123@gmail.com', '2147483647', '2147483647', 'Menjadikan kampus yang humanis', '1. ikut serta kegiatan kampus <br>\r\n2. mengadakan baksos', '800px-Creative-Tail-People-superman_svg.png', 'Creative-Tail-People-women_svg1.png', 'jangan lupa pilih kami no 2!!!', 1),
(3, 'Axel Haryanto', 'Vebi', 'L', 'P', 'axel@gmail.com', 'vebi123@gmail.com', '2147483647', '2147483647', 'Menjadikan kampus yang unggul', '1. Mengadakan Bukber <br>\r\n2. Mengadakan upacara 17 Agustus', '800px-Creative-Tail-People-police-man_svg.png', 'Creative-Tail-People-women_svg2.png', 'jangan lupa pilih no 3', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `uraian` varchar(500) NOT NULL,
  `image` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `waktu`, `uraian`, `image`, `role_id`) VALUES
(67, 'Samson Sugiyarto', '21-10-2019 16:29:43', 'aku dia mereka kita dulu sekarang', 'DSC_2565a1.jpg', 1),
(71, 'Samson Sugiyarto', '21-10-2019 21:45:03', 'cek komentar bla bla bla', 'DSC_2565a1.jpg', 1),
(72, 'Samson Sugiyarto', '21-10-2019 21:46:17', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, quo eius. Modi consequatur nobis tempora excepturi! Nesciunt quaerat molestias, facere, at alias pariatur iste ut repellat fuga, nostrum facilis cum.\r\n    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, quo eius. Modi consequatur nobis tempora excepturi! Nesciunt quaerat molestias, facere, at alias pariatur iste ut repellat fuga, nostrum facilis cum.\r\n    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vi', 'DSC_2565a1.jpg', 1),
(74, 'Samson Sugiyarto', '21-10-2019 22:18:59', 'tes 1 2 3', 'IMG-20191004-WA00261.jpg', 1),
(75, 'Samson Sugiyarto', '21-10-2019 22:23:22', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, quo eius. Modi consequatur nobis tempora excepturi! Nesciunt quaerat molestias, facere, at alias pariatur iste ut repellat fuga, nostrum facilis cum.', 'IMG-20191004-WA00261.jpg', 1),
(76, 'Samson Sugiyarto', '22-10-2019 10:27:05', 'coba... :)', 'IMG-20191004-WA00261.jpg', 1),
(77, 'Rudi Priyanto', '24-10-2019 12:38:28', 'uu', '1554741068135.jpg', 5),
(78, 'Oskar Adi', '24-10-2019 13:11:01', 'saya oskar', '1552496971664.jpg', 4),
(79, 'Romanus Adi', '24-10-2019 20:35:27', 'pimpinan romanus', '1560320819083.jpg', 3),
(80, 'Dila Fadillah', '28-10-2019 22:04:28', 'coba ah', 'DSC_2565a.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfir_komentar`
--

CREATE TABLE `konfir_komentar` (
  `id_konfir` int(12) NOT NULL,
  `id_komentar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfir_komentar`
--

INSERT INTO `konfir_komentar` (`id_konfir`, `id_komentar`) VALUES
(18, 67),
(22, 71),
(23, 72),
(24, 74),
(25, 76),
(26, 77),
(27, 78),
(28, 79),
(29, 80);

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
(2323, 'dcdec', 'L', 'cdc@dede.vv', '123', '15524969716643.jpg', '$2y$10$z9EhOz.CS/KMl6u1xmv2bOJrDyQoQxymKJtKKV0ID/KJrA/ET.0qW', 5, 1, 2),
(201501003, 'Peni Pambudi', 'L', 'peni@gmail.com', '082113234455', '', '$2y$10$xCm68KnaNuPK8OZG3me8wO1kaszTmoX53TcI9ZZjNF7mYwgFuyIR6', 5, 1, 8),
(201501054, 'Rudi Priyanto', 'L', 'rudi@rudi.com', '081222178545', '1554741068135.jpg', '$2y$10$PN9z4.1m83EY0oRg/7xjauuFM90qWrz.vAByCPuw1v5I/UaKkBrB.', 5, 1, 2),
(201601007, 'Foustino Asprila Gunantara', 'L', 'fousas@gmail.com', '085333322151', 'default.jpg', '$2y$10$Ksd37r.kiw/Z/DzSsz1cqeywmJ6apbHP.UN6JGRc5rjkOPFg7UJnS', 5, 1, 2),
(201601020, 'Theofilus Geon Tjeme', 'L', 'geon123@gmail.com', '081231234451', '1562350746250.jpg', '$2y$10$oD.snA3Dk5wHeTXmuUczBe17Y89D7smfHCvlu7XHQCn.V.gz8mXDO', 5, 1, 2),
(201601021, 'Marcello Dani Hansen', 'L', 'hansen123@gmail.com', '085555123123', 'default.jpg', '$2y$10$LXpn36MpNrIt3TzHivmeI.BDIAoqWua2lj8.ttnvAAeU79xSnyRBu', 5, 0, 10),
(201601036, 'Fefiana', 'P', 'fefiana@gmail.com', '081232123455', 'default.jpg', '$2y$10$EviIor0agd50NSu6.iNc5ej1Gbr7pmI83Yh2tgm.BlJQWeSfMiTti', 5, 1, 2),
(201601038, 'Reno Fahmi', 'L', 'reno@gmail.com', '081223234566', 'default.jpg', '$2y$10$4fVFbZcaL5vI688YBc7iMuDQT91SW8LsAeD1a2xE/iRV/F1lcaivW', 5, 1, 8),
(201601039, 'Yulieus Adi Pranoto', 'L', 'yuliusadi19@gmail.com', '081218990103', 'default.jpg', '$2y$10$artiCrTo1sLRSZNMmXakcOBgyZBZcv6cbqhCqCm.CUlW5hCPI7Psu', 5, 1, 2),
(201601044, 'Ridho Ramadhani', 'L', 'ridho123@gmail.com', '081232267583', 'default.jpg', '$2y$10$bMRfDXqIA1jBb0UeY11ahOnsq4DNINebc17zdmtDSbh.yVjW6eQZq', 5, 1, 2),
(201601045, 'Lala Wati', 'P', 'lala123@gmail.com', '081232212345', '1559932732837.jpg', '$2y$10$5PW.e81iugLs.VuzoBZyHOcn8QO3htnHLpUlJAQuZzNnmUNT//xIi', 5, 1, 3),
(201601046, 'Merli Amelia Anggraeni', 'P', 'merli123@gmail.com', '081234523412', 'default.jpg', '$2y$10$juW1jYi2XAzcxXrOet757OMbWv.FUlWItstqvImn6gSqnN8P/mJgS', 5, 1, 10),
(201601051, 'Nabilla NF', 'P', 'nurfadillahnabilla@gmail.com', '0895634687760', '1560567398155.jpg', '$2y$10$y9IxvrRuKryjxigbLEiuLOGsPYXOmvBDghH1gaMt4fdp6XX4CRoUe', 5, 1, 2),
(201601053, 'Nabilla Nur Fadillah', 'P', 'nabilla1123@gmail.com', '0812345612', 'Creative-Tail-People-women_svg.png', '$2y$10$Ctm5i5QNcFAWXYgGuU0io.Coy3S17kZKhxdTi1gnk1Nn8rnGAX2Gy', 5, 1, 8),
(201601056, 'Budi Anduk', 'L', 'budi345@gmail.com', '081223165123', '1557317977923.jpg', '$2y$10$Lrw/lpFrnc.l5BrvvRQ9Ye9bCidIzY/1g1qaLjl.oqqzwOfx2i0EW', 5, 1, 2),
(201601062, 'Dudi Santosa', 'L', 'dudi@gmail.com', '081223234322', 'default.jpg', '$2y$10$SVZnG5r72pc6Nnrm8zY72OPOxZDCJOxMmnWtwH.PtsVEdypFy0I4y', 5, 1, 8),
(201601080, 'Florentina', 'P', 'florentinawua97@gmail.com', '081234567123', '15524969716642.jpg', '$2y$10$tPcRHm9MjYVPwmEKUpbRq.elb4gbTsC0oeIE8RsBkgtggbgC6RXRK', 5, 1, 3),
(201701001, 'Hanit Jatmika', 'L', 'hanit123@gmail.com', '081212265444', 'default.jpg', '$2y$10$ql89G/U7K/f9kzJUBchQl.IWCqklxTWKJg3VGUyXb2AmcmFAMRTAW', 5, 0, 2),
(201701030, 'Axel Haryanto', 'L', 'axel123@gmail.com', '081212156678', 'default.jpg', '$2y$10$F0E.BDL1Qd6DRe4BYyLTC.J9/mz97WpNiJk.5me2MVNP.mq6E9zVe', 5, 0, 3),
(201801033, 'Doni Saputra', 'L', 'doni@gmail.com', '081223456789', 'default.jpg', '$2y$10$N6Lhy/F7hammwo9tMnrEeOtCmtihv.dSLKFf4nl8mGSNChn1cueYa', 5, 1, 8),
(201801092, 'Nani Setya', 'L', 'nani@gmail.com', '083345672234', 'default.jpg', '$2y$10$r62EYuDbfgePBO82QgmG0O9AndTWgOT2Ztdy2nJN1brR3.E1VwJAa', 5, 1, 10);

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
(1234, 'Romanus Adi', '$2y$10$dWAzldNE7uV9IsQ3SfKb2uNzlf.0cIP/4HXH9b6ZDrQAK7gxvPXVS', 'L', 'Ketua STIKOM', 'romanus@romanus.com', '812345', 1, '1560320819083.jpg', 3),
(654321, 'Antonius Ary Setyawan', '$2y$10$uiQdkodsA5XCNEU7n05PRepEtGINlEDcG9WKYLgSJVcG1UiEfFui.', 'L', 'PUKET III', 'ary@gmail.com', '876555', 1, '1557978185058.jpg', 3),
(12763541, 'Ir. GH Sumartono', '$2y$10$BTYkC87nnoIEQtgnAX4SxOIKnpoKJYXk9GzPVYZEnkK.VLfA18.QW', 'L', 'PUKET I', 'Gh123@gmail.com', '081236573843', 1, 'default.jpg', 3),
(87212345, 'Dhany Faizal', '$2y$10$U/nBecdWMtQaaba7cesf1uNSRp.YcB4CTuNr.eiPEJycgtrJR/r4e', 'L', 'PUKET II', 'Dhany123@gmail.com', '089667845234', 1, '1562350751927.jpg', 3);

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
(3, '2016/2017', 2, 'Kevin', 'Agnes', 'Menjadikan kampus yang humanis', 'naa nana nanananan nanan nnana', '800px-Creative-Tail-People-superman_svg.png', '1556787851893.jpg'),
(4, '2017/2018', 3, 'Feni Lestari', 'Agnes Shita', 'Menjadikan kampus yang unggul', 'tatata nana baba', 'default.jpg', 'default.jpg'),
(5, '2016/2017', 3, 'Samson', 'Hanit', 'Menjadikan kampus yang unggul', '1. membuat blablabla <br>\r\n1. membuat blablabla<br>\r\n1. membuat blablabla', 'IMG-20191004-WA00261.jpg', '800px-Creative-Tail-People-superman_svg1.png');

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
(3, 'Samson Sugiyarto', 'L', 'gitosamson123@gmail.com', '089213248384', 'IMG-20191004-WA00261.jpg', '$2y$10$y4bmK5JiJbIOYQ5ze0n4cei/QdNTnxIPcy8gsAc/9misiwt9W2keC', 1, 1, 1560654857),
(4, 'Dila Fadillah', 'P', 'dila123@gmail.com', '089221238474', 'DSC_2565a.jpg', '$2y$10$dJfXzvLbBJU/aoJhY0oIlOC3rHvbSkvIow5i2I.zmR8hXX//YxaHm', 2, 1, 1560655500),
(21, 'Samson Sugiyarto', 'L', 'samsonsugiyarto123@gmail.com', '081575224630', '15574428665641.jpg', '$2y$10$hopfz/tuCVi5hV17nqOA5OejSIogOSjxwjDR4uyWFCM7SQx4P7RnG', 2, 1, 1561087895);

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
(26, 4, 2),
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
(43, 1, 9),
(46, 1, 13);

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
(19, 1, 'VOTE List', 'admin/votelist', 'fas fa-fw fa-users', 1);

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
-- Indexes for table `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  ADD PRIMARY KEY (`id_pemilihan`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`) USING BTREE;

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`no_kandidat`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfir_komentar`
--
ALTER TABLE `konfir_komentar`
  ADD PRIMARY KEY (`id_konfir`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`) USING BTREE,
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  MODIFY `id_pemilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `konfir_komentar`
--
ALTER TABLE `konfir_komentar`
  MODIFY `id_konfir` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_token`
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
