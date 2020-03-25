-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 03:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `countdown`
--

CREATE TABLE `countdown` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`id`, `date`, `time`, `status`) VALUES
(1, '2020-03-24', '23:12:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pemilihan`
--

CREATE TABLE `data_pemilihan` (
  `id_pemilihan` int(11) NOT NULL,
  `id_pemilih` varchar(20) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pemilihan`
--

INSERT INTO `data_pemilihan` (`id_pemilihan`, `id_pemilih`, `id_kandidat`, `waktu`) VALUES
(4, '201701009', 3, '1575251626'),
(5, '201803008', 1, '1575252097'),
(6, '201702009', 1, '1575252153'),
(7, '201901001', 2, '1575252380'),
(8, '201901018', 2, '1575252388'),
(9, '201702003', 1, '1575252426'),
(10, '201803019', 1, '1575252481'),
(11, '201901025', 2, '1575252489'),
(12, '201702010', 2, '1575252515'),
(13, '201702002', 1, '1575252567'),
(14, '201904005', 2, '1575252629'),
(15, '201802018', 3, '1575252671'),
(16, '201803017', 3, '1575252674'),
(17, '201803011', 1, '1575252854'),
(18, '201801031', 1, '1575253098'),
(19, '201801028', 3, '1575253240'),
(20, '201903010', 2, '1575253264'),
(21, '201801041', 1, '1575253268'),
(22, '201803009', 3, '1575253357'),
(23, '201803003', 3, '1575253411'),
(24, '201801032', 2, '1575253475'),
(25, '201803018', 3, '1575253511'),
(26, '201803020', 2, '1575253545'),
(27, '201901009', 1, '1575253546'),
(28, '201801038', 2, '1575253560'),
(29, '201803002', 3, '1575253576'),
(30, '201801022', 3, '1575253595'),
(31, '201801043', 1, '1575253662'),
(32, '201803014', 3, '1575253827'),
(33, '201801019', 1, '1575253873'),
(34, '201701058', 1, '1575253963'),
(35, '201701057', 1, '1575253963'),
(36, '201702001', 1, '1575254019'),
(37, '201701079', 1, '1575254037'),
(38, '201803001', 3, '1575254144'),
(39, '201701035', 1, '1575254166'),
(40, '201701056', 1, '1575254171'),
(41, '201701034', 1, '1575254235'),
(42, '201701055', 1, '1575254266'),
(43, '201701046', 1, '1575254337'),
(44, '201803015', 3, '1575254371'),
(45, '201601040', 1, '1575254386'),
(46, '201701036', 1, '1575254446'),
(47, '201901007', 2, '1575254548'),
(48, '201601053', 2, '1575254612'),
(49, '201901011', 2, '1575254634'),
(50, '201601028', 1, '1575254637'),
(51, '201601041', 2, '1575254674'),
(52, '201703004', 1, '1575254728'),
(53, '201701005', 1, '1575254905'),
(54, '201901013', 2, '1575254933'),
(55, '201702005', 1, '1575254987'),
(56, '201901024', 2, '1575255058'),
(57, '201601019', 1, '1575255151'),
(58, '201701083', 3, '1575255231'),
(59, '201703005', 1, '1575255239'),
(60, '622128103', 2, '1575255613'),
(61, '618088901', 3, '1575255867'),
(62, '201601039', 2, '1575255956'),
(63, '604047704', 2, '1575256112'),
(64, '201912008', 1, '1575256494'),
(65, '201912004', 1, '1575256736'),
(66, '201912009', 1, '1575256817'),
(67, '201912003', 1, '1575256930'),
(68, '201803006', 3, '1575256943'),
(69, '201901003', 3, '1575257112'),
(70, '201901023', 1, '1575257161'),
(71, '201901037', 3, '1575257188'),
(72, '201901039', 3, '1575257217'),
(73, '201901004', 1, '1575257220'),
(74, '201901020', 3, '1575257255'),
(75, '201901038', 1, '1575257276'),
(76, '201901008', 1, '1575257277'),
(77, '201912010', 1, '1575257302'),
(78, '201701030', 1, '1575257585'),
(79, '201801030', 3, '1575258219'),
(80, '201801021', 3, '1575258229'),
(81, '201801069', 3, '1575258302'),
(82, '201801025', 3, '1575258351'),
(83, '628078403', 3, '1575258514'),
(84, '201701049', 1, '1575258515'),
(85, '201701041', 1, '1575258617'),
(86, '201801023', 2, '1575258874'),
(87, '201501040', 2, '1575259067'),
(88, '201604010', 1, '1575259081'),
(89, '201601006', 1, '1575259100'),
(90, '201501093', 1, '1575259131'),
(91, '201601022', 2, '1575259245'),
(92, '201601021', 1, '1575259272'),
(93, '201601009', 3, '1575259286'),
(94, '201601027', 1, '1575259405'),
(95, '201604003', 2, '1575259426'),
(96, '201603009', 2, '1575259431'),
(97, '201601025', 1, '1575259485'),
(98, '201604002', 1, '1575259511'),
(99, '201703007', 1, '1575259594'),
(100, '201803012', 1, '1575259605'),
(101, '201501074', 2, '1575259764'),
(102, '201501080', 2, '1575259797'),
(103, '201804016', 1, '1575259923'),
(104, '201801060', 1, '1575259991'),
(105, '201802010', 3, '1575260082'),
(106, '201802011', 3, '1575260128'),
(107, '201802016', 3, '1575260158'),
(108, '201802012', 3, '1575260198'),
(109, '201802019', 3, '1575260234'),
(110, '201802006', 3, '1575260285'),
(111, '201802008', 3, '1575260349'),
(112, '201802007', 3, '1575260377'),
(113, '201802014', 3, '1575260434'),
(114, '201804021', 3, '1575260442'),
(115, '201802001', 3, '1575260450'),
(116, '201802002', 3, '1575260500'),
(117, '201804014', 1, '1575260645'),
(118, '201704007', 3, '1575260647'),
(119, '201601014', 1, '1575260647'),
(120, '201802004', 3, '1575260669'),
(121, '201601008', 1, '1575260674'),
(122, '201904010', 1, '1575260978'),
(123, '201601044', 1, '1575261281'),
(124, '201801048', 1, '1575261300'),
(125, '201701008', 1, '1575261348'),
(126, '201802015', 3, '1575261429'),
(127, '201903009', 2, '1575261440'),
(128, '201903004', 1, '1575261448'),
(129, '201903012', 1, '1575261546'),
(130, '201901006', 3, '1575261692'),
(131, '201903001', 2, '1575261694'),
(132, '201901027', 3, '1575261733'),
(133, '201904009', 2, '1575261740'),
(134, '201901036', 3, '1575261774'),
(135, '201901010', 2, '1575261790'),
(136, '201903006', 2, '1575261816'),
(137, '201901028', 2, '1575261827'),
(138, '201903008', 3, '1575261836'),
(139, '201904007', 2, '1575261872'),
(140, '201904003', 2, '1575261888'),
(141, '201501045', 1, '1575261928'),
(142, '201901002', 1, '1575262074'),
(143, '201803007', 3, '1575262200'),
(144, '201801066', 1, '1575262391'),
(145, '201801046', 1, '1575262468'),
(146, '201801044', 1, '1575262479'),
(147, '201902009', 1, '1575262531'),
(148, '201801051', 3, '1575262540'),
(149, '201902007', 2, '1575262566'),
(150, '602048104', 1, '1575262683'),
(151, '201701002', 3, '1575262972'),
(152, '201901012', 1, '1575263039'),
(153, '201701017', 1, '1575263056'),
(154, '201902002', 2, '1575263060'),
(155, '201601003', 1, '1575263071'),
(156, '201902011', 2, '1575263162'),
(157, '201903011', 1, '1575263253'),
(158, '201601035', 1, '1575263318'),
(159, '201903007', 2, '1575263346'),
(160, '201903014', 1, '1575263382'),
(161, '201902003', 1, '1575263515'),
(162, '201902008', 3, '1575263664'),
(163, '201912006', 2, '1575263695'),
(164, '201601023', 2, '1575264108'),
(165, '201902001', 1, '1575264520'),
(166, '201402019', 1, '1575264528'),
(167, '201603006', 3, '1575264582'),
(168, '201603004', 1, '1575264717'),
(169, '201601029', 1, '1575264903'),
(170, '201601084', 1, '1575264999'),
(171, '201501101', 2, '1575265345'),
(172, '201501068', 1, '1575265399'),
(173, '201501087', 1, '1575265414'),
(174, '201601036', 1, '1575265508'),
(175, '201601045', 2, '1575265578'),
(176, '201604001', 1, '1575265671'),
(177, '201604014', 2, '1575265735'),
(178, '201704003', 1, '1575265745'),
(179, '201604012', 2, '1575265760'),
(180, '201801033', 1, '1575265794'),
(181, '201601047', 1, '1575265901'),
(182, '201801058', 3, '1575266316'),
(183, '201801054', 2, '1575266324'),
(184, '201701015', 1, '1575266480'),
(185, '201701024', 1, '1575266585'),
(186, '201701023', 3, '1575266909'),
(187, '201702008', 3, '1575266916'),
(192, '201802003', 1, '1575267370'),
(195, '618109301', 1, '1575268548'),
(196, '621126101', 3, '1575268753'),
(197, '201912100', 2, '1575268915'),
(198, '623127905', 1, '1575268948'),
(199, '620097601', 1, '1575269483'),
(200, '610018101', 1, '1575269589'),
(201, '201602009', 2, '1575269919'),
(202, '201602013', 3, '1575269953'),
(203, '201701016', 1, '1575270018'),
(204, '201701011', 1, '1575270087'),
(205, '201601034', 1, '1575270170'),
(206, '201701027', 3, '1575270269'),
(207, '201701010', 1, '1575270306'),
(208, '610017403', 1, '1575270636'),
(209, '9906008621', 1, '1575272095'),
(210, '201701028', 1, '1575272305'),
(211, '624038601', 1, '1575272402'),
(212, '201801057', 3, '1575272730'),
(213, '201801055', 1, '1575272734'),
(214, '201801063', 3, '1575272796'),
(215, '201701026', 1, '1575272846'),
(216, '201701006', 2, '1575272996'),
(217, '201601046', 1, '1575273228');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nik` varchar(20) NOT NULL,
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
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nik`, `name`, `password`, `jk`, `mengajar`, `email`, `hp`, `is_active`, `image`, `role_id`) VALUES
('2012132', 'F. Aribroto, M.Pd', '$2y$10$yVYwfMiYAReYlM4d0wwbVOvG1rDCdGUalJoKjlfVRyCywms9fZMEi', 'L', '-', 'aribroto@gmail.com', '08xxxxxxxxxx', 0, 'default.jpg', 4),
('201912001', 'Drs. Titus S., M.Pd.', '$2y$10$goAf/XId/WJbUuTr/mrCa.drjSKcybrSoEpp4L2pqzQR1JTZET7Xu', 'L', 'Bahasa Indonesia', 'titus@stikomyos.ac.id', '08xxxxxxxxxx', 1, 'default.jpg', 4),
('201912002', 'Nyoto Soeharmoko, S.Kom.', '$2y$10$br/kw03yLG1JYpSJJ4VTc.xU3veHmGRDlCIVy98hACzuapVRftrf.', 'L', 'Algoritma dan Pemrograman', 'moko@stikomyos.ac.id', '08xxxxxxxxxx', 1, 'default.jpg', 4),
('201912003', 'Yosita Lianawati,S.Kom', '$2y$10$AWFFjHrNoRZeOAeQiihx9eM6Y5YzxmxHPPdp9/didl61l8/qAXC/K', 'P', 'Basis Data', 'yosita@stikomyos.ac.id', '08xxxxxxxxxx', 1, 'default.jpg', 4),
('201912004', 'Rosalina Yani,S.Kom', '$2y$10$gIMrWfZ6eKZz.M2x11GAD.KK4lb6ntznn/JFHXazuK.DZrQ2DPyc6', 'P', 'Basis Data', 'rosalinayani@stikomyos.ac.id', '08xxxxxxxxxx', 1, 'default.jpg', 4),
('201912005', 'Muhammad Fuad Azhar Bakhtiar, S.Pd', '$2y$10$NeXW/hw9ZqX6Pim8wQFmMOu8Q2QkV/u2R1EwDjfcpab1w4Ry.nKXa', 'L', '-', 'muhammadfuad@gmail.com', '08xxxxxxxxxx', 0, 'default.jpg', 4),
('201912006', 'Drs.Cris Sumadi', '$2y$10$3MbJx8KFvRx7tmAryCo/5ee7vqetMiUn1cnlW50ILKJ3T3d7ONdVG', 'L', '-', 'crissumadi@stikomyos.ac.id', '08xxxxxxxxxx', 1, 'default.jpg', 4),
('201912008', 'REMIGIUS OKTAVIANUS M MOSA', '$2y$10$815PL1x6XOr1gJffmBqnpuGxtnTH0XCR7SSZzfFEDI/gJohKkxc7O', 'L', 'P', 'p@gmail.com', '0976', 1, 'default.jpg', 4),
('201912009', 'RADEN SATRIO NIKODEMUS', '$2y$10$yPxHa2VBco8xIC7SL.AppeWtZjSHM4cjLYYjBuyaHqAk7mQIkx5m2', 'L', 'k', 'k@gmail.com', '90', 1, 'default.jpg', 4),
('201912010', 'HERU MARSONO', '$2y$10$jFq7dE/dpjrghWAt.LteGO7BKm2jAPtDccaLEs9hTyRj5kcvXEDsm', 'L', 'K', 'H@gmail.com', '09', 1, 'default.jpg', 4),
('201912012', 'Agatha Christiani', '$2y$10$DbPXaDH5Py3BpuQIYvVHOuphEQcPnhTKZEnJh5H3XetebW5HxM7Ti', 'P', 'bendahara', 'agatha@gmail.com', '089xxxxxxxxx', 0, 'default.jpg', 4),
('201912100', 'BHUTYARTI KRISTITAMI N', '$2y$10$8wX4M7LGUYVOXYMPMIBAoupuon5HilAXPC8PtqXJLH.lFreLfDW7S', 'P', '-', 'kakristi@gmail.com', '08xxxxxxxxxxxx', 1, 'default.jpg', 4),
('601097802', 'AGUS SUPARNO', '$2y$10$yrq05yBvAopJP.vcj4HPNeXZ/kvOSgRFOmZcSvJtoAcV5zIZOIv.m', 'L', 'pemrograman II', 'agus123@gmail.com', '123', 0, 'default.jpg', 4),
('602048104', 'CAROLINA ETY WIDJAYANTI', '$2y$10$1ajX0axjmVxO7eKG0ztqdOeIb2g/JYXZ3JU/LosT8aBSO1WiSUZTW', 'P', 'pengantar akuntansi', 'carolina@gmail.com', '123', 1, 'default.jpg', 4),
('604047704', 'PUTU SAMUEL PRIHATMAJAYA', '$2y$10$TnHzvqJeZj0dDdONmV1DaeAe4zXApC98huTljL4FkTt9UBxfxOk0i', 'L', 'ecomerce', 'putu@gmail.com', '1234', 1, 'default.jpg', 4),
('607027401', 'FERRA SETIATI DHARMADJI', '$2y$10$GkFr5nYIJlW9YeK9LbhAAOUnCGLiSspi8zVyxxQMrPRMeIrb51y9e', 'L', '-', 'ferra@gmail.com', '1234', 0, 'default.jpg', 4),
('608016901', 'ENDANG SETYAWATI', '$2y$10$17Z5cx/5.ND4idIeqhcT9u6aV42rwZLt3ggjBEalXJlkxQlRDRCzS', 'P', 'analasis dan perancangan SI', 'endangb17@gmail.com', '123', 0, 'default.jpg', 4),
('609119001', 'OLIVYA NIKE NOMAN', '$2y$10$7WqcizOfpQfRpffKyRmQwe0R2q1CK7PM22eIviQTgwE.MXRauy3a.', 'P', '-', 'olyvia@gmail.com', '12345', 0, 'default.jpg', 4),
('610017403', 'RIA MANURUNG', '$2y$10$qjclBTO7eJsSbqNFbAmxhuTtvEAvIwLNzKKmhXSja3.4i9JolxMvG', 'P', 'akuntansi biaya', 'ria@gmail.com', '12345', 1, 'default.jpg', 4),
('610018101', 'OSKAR IKA ADI NUGROHO', '$2y$10$3cvDYmH8UaXgiSSan5by9.FcPYHhzVyNMdlmmbyBJ9E5M.Vf2i3y6', 'L', 'algoritma struktur data', 'oskar@gmail.com', '12345', 1, 'default.jpg', 4),
('610045701', 'LYNAWATI', '$2y$10$C/BxrGjfpXzV6dt6P/m3yOy48NB4yj/JQaz/n6LwHoPmc8GLPaYE.', 'P', 'akuntansi', 'lynawati@gmail.com', '12345', 0, 'default.jpg', 4),
('610108302', 'ANITA EKAWATI', '$2y$10$XtpkCdO6vK5dsA8KaNmJF.Cd7dt3LJRArPcVpnyWbtCOSP9cc4IGK', 'L', 'prak. akuntansi', 'anita@gmail.com', '123', 0, 'default.jpg', 4),
('612096902', 'Priyatno, M.Kom', '$2y$10$bwB.af4oQ31fkWutQyJrd.mIP4jE.T1qnir/vO9l/vJE81iU2SVkW', 'L', '-', 'priyanto@gmail.com', '08xxxxxxxxxxx', 0, 'default.jpg', 4),
('616068501', 'CANDRA PUSPITA', '$2y$10$bulLpK1H5DhwW69s7Drx4.kXZyEXxkpDepNFYK2zU.RV6i0en6v3S', 'L', '-', 'candra@gmail.com', '1234', 0, 'default.jpg', 4),
('618027102', 'A. KRISTIADJI RAHARDJO', '$2y$10$JFq6E06xvRXvBP2Dh1btd.IE/g1CVc1HCc9hHr1ZHjXcEMgpILxXu', 'L', 'ilmu kealaman dasar', 'kristiadji@gmail.com', '123', 0, 'default.jpg', 4),
('618088901', 'DIWAHANA MUTIARA CANDRASARI', '$2y$10$F1xL7H41M3Y/u.pWGaPEcOEKGgonQXvXhAtwdGyWf5vchnmtckB7W', 'P', 'algoritma struktur data', 'candra123@gmail.com', '123', 1, 'default.jpg', 4),
('618109301', 'DIANDRA CHIKA FRANSISCA', '$2y$10$dIYzMvcql/NbHpfgwvXPYuTNUA/z35KdZG0r7ztv2XbUkRPgW5kyO', 'P', 'matematika', 'diandra@gmail.com', '123', 1, 'default.jpg', 4),
('621126101', 'SUYUDI', '$2y$10$Yql0TQMpZAqGCLew/PSgwuvXlHac1L/IJ7k4H2bYdicGkm8CWidiy', 'L', 'Sistem Informasi Manajemen', 'suyudi@gmail.com', '12345', 1, 'default.jpg', 4),
('622128103', 'DAVID KRISTIAN PAATH', '$2y$10$nbkXJRtF1/KeUTd2txhXp.4.60eqVyHQ5ROlj28pZRjyrB2AOPVQS', 'L', 'nirmana', 'david@gmail.com', '123', 1, 'default.jpg', 4),
('623127905', 'NATALIA IRA KARTIKA', '$2y$10$l95.nreIvKXzCn5k1DoptuY2Hkb6skv3lgfbqJyZ7WkakF7xIqc1K', 'P', 'DKV', 'Natalia@gmail.com', '123', 1, 'default.jpg', 4),
('624089101', 'SAFAR DWI KURNIAWAN', '$2y$10$sDDxxfM1dHiwBpa9rY2KRuNvIrTJZFRMsrVDhaaGsqqJA9mri2gnO', 'L', 'sistem operasi', 'safar@gmail.com', '12345', 0, 'default.jpg', 4),
('628078403', 'ADHI WIBOWO', '$2y$10$Befsm6u8GgRjL5yZg9rDnujSZOvVBo1YL6agEZXxz95iGJVma/a3y', 'L', 'keamanan SI', 'adhi@gmail.com', '1234', 1, 'default.jpg', 4),
('9906003539', 'Mayasari Sasmita, M.Kom', '$2y$10$dOhGpGGNb0J/QbYeKY1Bheu0Qc0g6zAIzbUqFf7k91FdTAINBcMp6', 'P', 'Matematika Diskrit', 'mayasasmita@stikomyos.ac.id', '08xxxxxxxxxx', 0, 'default.jpg', 4),
('9906003690', 'Yosef Murya KA.,ST.,M.Kom', '$2y$10$aEuo/E9ER.9T1oo1e.8IvOFs48q3aQkuj90eQ8vYtaeWQO71DMq6W', 'L', '-', 'yosef@gmail.com', '08xxxxxxxxxx', 0, 'default.jpg', 4),
('9906004280', 'Drs. Y. Sukata, MM', '$2y$10$MeJdWevA7KtMmNqxk.Zu/OarjCaV50bTVKCkuRYGDbzW0yRvxVv.C', 'L', 'Bahasa Inggris', 'sukata@gmail.com', '08xxxxxxxxxx', 1, 'default.jpg', 4),
('9906008621', 'AGUS ARIYANTO', '$2y$10$.aLYxFs4HJIe1CkaYOu3EO9vGzMexZdFGUUoQKrIgk65abli9IX5u', 'L', 'Analisis Proses Bisnis', 'Agusa@gmail.com', '123', 1, 'default.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(50) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(2, 'S1 Teknik Multimedia dan Jaringan'),
(3, 'S1 Sistem Informasi'),
(8, 'S1 Teknik Informatika'),
(10, 'D3 Komputerisasi Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `kampanye`
--

CREATE TABLE `kampanye` (
  `id` int(11) NOT NULL,
  `no_kandidat` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampanye`
--

INSERT INTO `kampanye` (`id`, `no_kandidat`, `file_name`, `created`, `modified`) VALUES
(119, 2, 'IMG_5937.JPG', '2019-11-21 23:08:47', '2019-11-21 23:08:47'),
(163, 1, 'IMG_5954.JPG', '2019-11-23 12:02:21', '2019-11-23 12:02:21'),
(167, 3, 'IMG_6309.JPG', '2019-11-29 23:27:56', '2019-11-29 23:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `kampanyevideo`
--

CREATE TABLE `kampanyevideo` (
  `id` int(11) NOT NULL,
  `no_kandidat` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampanyevideo`
--

INSERT INTO `kampanyevideo` (`id`, `no_kandidat`, `file_name`, `created`, `modified`) VALUES
(1, 2, 'Vebi.mp4', '', ''),
(2, 3, '3.mp4', '', ''),
(3, 1, '1.mp4', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
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
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`no_kandidat`, `nama`, `wakil`, `jk_ketua`, `jk_wakil`, `email_ketua`, `email_wakil`, `hp_ketua`, `hp_wakil`, `visi`, `misi`, `foto_ketua`, `foto_wakil`, `uraian`, `jumlah_suara`) VALUES
(1, 'Randimazco Michael Philip', 'Wahyu Eka Mulatsari', 'L', 'P', 'randi@gmail.com', 'wahyu@gmail.com', '08xxxxxxxxxx', '08xxxxxxxxxx', 'Sebagai organisasi mahasiswa yang profesional dalam membangun dan mengayomi serta dapat melaksanakan fungsinya sebagai aspiratif guna membentuk mahasiswa STIKOM Yos Sudarso yang aktif, kritis dan kreatif.', 'Pembuatan dan pengesahan ad/art senat mahasiswa.</br></br>\r\nMenciptakan pengurus senat yang disiplin, bertanggung jawab, kekeluargaan dan tanggap serta sebagai sumber informasi yang terpercaya bagi mahasiswa baik dibidang akademik maupun non-akdemik.</br></br>\r\nMemberikan pelayanan terdepan, teroptimal dan menerima, menampung serta menyampaikan aspirasi mahasiswa STIKOM. </br></br>\r\nMelaksanakan program kerja yang bermanfaat sesuai kebutuhan mahasiswa. </br></br>\r\nMenyatukan antara angkatan untuk menjalin silaturahmi dan menjalin keakraban antara mahasiswa. </br></br>\r\nMengaktifkan kembali HIMAJUR yang sudah terbentuk. </br></br>', '2_11.png', '1_1.png', 'Seorang pemimpin harus siap menjadi langit yang dipandang semua orang dan menjadi bumi yang siap diinjak orang.', 104),
(2, 'Vebi', 'Nur Aliandi Irawan', 'P', 'L', 'veby@gmail.com', 'nur@gmail.com', '08xxxxxxxxxx', '08xxxxxxxxxx', 'Mewujudkan SENAT Mahasiswa STIKOM Yos Sudarso sebagai organisasi mahasiswa yang Profesional dalam membangun dan menampung aspirasi mahasiswa serta dapat menjadikan mahasiswa STIKOM Yos Sudaso menjadi mahasiswa yang berperan aktif dalam kegiatan akademik maupun non akademik', 'Menjalin hubungan yang baik antar sesama anggota Senat serta Mahasiswa - mahasiswa lain. </br></br>\r\nMenerima, menampung dan melaksanakan aspirasi mahasiswa STIKOM Yos Sudarso. </br></br>\r\nTurut mengembangkan kampus melalui Program Kerja yang telah dibentuk. </br></br>\r\nMembantu mengembangkan Potensi dan Kreativitas mahasiswa melalui kegiatan UKM. </br></br>\r\nMembentuk Himpunan Mahasiswa Jurusan sebagai wadah untuk mempererat rasa kekeluargaan atar mahasiswa perjurusan', '2_1.png', '2_2.png', 'Pemimpin tidak hanya memimpin tapi harus terlebih dahulu mau dipimpin, pergerakan timbul bukan karena pemimpin bersuara, tetapi pemimpin bersuara karena ada pergerakan.', 47),
(3, 'Laras Anisa Hidayah', 'Nur Khalid', 'P', 'L', 'laras@gmail.com', 'khalid@gmail.com', '08xxxxxxxxxx', '08xxxxxxxxxx', 'Mewujudkan Senat Mahasiswa sebagai organisasi kemahasiswaan yang bersatu, aspiratif, profesional dalam membangun dan mengayomi guna membentuk generasi muda yang berkarakter serta unggul dalam pengembangan dan kemajuan kampus.', 'Mempererat hubungan dengan pembimbing, UKM dan komunitas serta seluruh mahasiswa. </br></br>\r\nMenyerap, menghimpun dan menindaklanjuti aspirasi mahasiswa secara berkala. </br></br>\r\nMelaksanakan dan mengembangkan program kegiatan yang telah dibuat dan bermanfaat sesuai kebutuhan mahasiswa. </br></br>\r\nMengarahkan mahasiswa STIKOM Yos Sudarso untuk lebih aktif dalam kegiatan akademik dan non akademik. </br></br>\r\nMengkoordinasikan, mengkomunikasikan dan mengsinkronasikan  aktifitas kegiatan UKM (unit kegiatan mahasiswa) dan UKK (unit kegiatan rohani) kearah semangat kompetisi yang sehat dan prestasi.', '3_3.png', '3_1.png', '...', 57);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
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

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `user_id`, `nama`, `waktu`, `uraian`, `image`, `role_id`) VALUES
(165, '201601041', 'SAMSON SUGIYARTO', '1575254901', 'Selamat dan semoga sukses pemilu hari ini sampai akhir pemilihan nanti.', 'samson1024.png', 5),
(166, '201702005', 'CHELSEA BENEDICT ALFONSO', '1575255433', 'mungkin lebih baik, abis memilih terlihat grafik paslon yang sudah terpilih dan presentasenya. dan untuk sebelum memulai masa pemilu. diadakan sejenis matrikuliasi tentang pemilu ini \r\nsebelum waktu pelaksaan pemilu, dikelas dan mahasiswa bisa mendaftar sendiri, mengisi biodata supaya tidak panitia sendiri tidak mengetahui password dari setiap mahasiswa yang akan memilih, untuk mengurai tindakan kecurangan.', 'default.jpg', 5),
(167, '201901004', 'ZEFANYA YANIKA N', '1575257312', 'manttabbbbbb', 'default.jpg', 5),
(168, '201901003', 'VICTOR ALEXANDER', '1575257449', 'untuk yang terpilih jangan lupa party...., yang mantab\":)', 'default.jpg', 5),
(169, '201901038', 'EVITA MARTHA R', '1575257562', 'jangan lupa partyy broo\r\n\r\n\r\n\r\n#philipmoris', 'default.jpg', 5),
(170, '201901023', 'BRIAN APRILIANO T', '1575257856', 'Saya berharap banyak jam kosong disemseter selanjutnya!!! \r\n\r\n\r\n#dukungphilipsmoris\r\n#nobriannoparty', 'default.jpg', 5),
(171, '201601006', 'KEVIN RYAN SUJONO', '1575259187', 'Mengapa Kandidat No.3 tidak punya Penjelasan moto menjadi kandidat ketua dan wakil ketua?', 'default.jpg', 5),
(172, '201601029', 'FOUSTINO ASPRILLA GUNANTARA', '1575264928', 'semoga sukses!!!', 'default.jpg', 5),
(173, '201601053', 'NABILLA NUR FADILLAH', '1575268542', 'Tinggal 2 jam lagi, yang belum nyoblos , ayooo gunakan hak suara kalian', 'crop_image.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `konfir_komentar`
--

CREATE TABLE `konfir_komentar` (
  `id_konfir` int(12) NOT NULL,
  `id_komentar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfir_komentar`
--

INSERT INTO `konfir_komentar` (`id_konfir`, `id_komentar`) VALUES
(72, 165),
(73, 166),
(74, 167),
(75, 168),
(76, 169),
(77, 170),
(78, 171),
(79, 172),
(80, 173);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
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
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `name`, `jk`, `email`, `hp`, `image`, `password`, `role_id`, `is_active`, `kode_jurusan`) VALUES
(201301035, 'WIWIK SUNDARI', 'P', 'wiwiks@gmail.com', '081205xxxxxxx', 'default.jpg', '$2y$10$a.UMIHv3pQowlQLj1ElcRecy9L6wOcyQKo.Ljv70IDPG3j2wHJDp.', 5, 0, 3),
(201401001, 'MICHAEL STEVIE HANTORO', 'L', 'michaels@gmail.com', '091288xxxxxx', 'default.jpg', '$2y$10$GgQtB/sQsKXS4bOsawerCOZmR/l6NdnhNYltPowP8opEaSBt2hqiO', 5, 0, 3),
(201401003, 'ANGGIT AMBARTI LARAS', 'P', 'anggita@gmail.com', '087599xxxxxx', 'default.jpg', '$2y$10$TbHiApb2tS.L41sE2TZsj.nMvztnPFiNpf88t82WoMvPDpu9mtBpG', 5, 0, 3),
(201401005, 'EKO SURYANTO CONDRO B', 'L', 'ekosuryanto@gmail.com', '089133xxxxxx', 'default.jpg', '$2y$10$ApyKqnTj8ixu8h/Qm7aTee4479/Of43jpe..8Z3O14Eg1PA8m3PD6', 5, 0, 3),
(201401009, 'SABATINO WHILY CANDRA', 'L', 'sabatino@gmail.com', '087797xxxxxx', 'default.jpg', '$2y$10$edoW1ZjLoOKCkq5KjWUYLugDAyY1RSH9ckcfdoluGVZbMFEVp72Zm', 5, 0, 3),
(201401010, 'BINTANG SATRIA', 'L', 'bintang@gmail.com', '081299xxxxxx', 'default.jpg', '$2y$10$Muqn5kMhfa1CDQgdWT2WMOZzj8ENvVXGYZR.Cj0oxOVqCMHgkWRF.', 5, 0, 3),
(201401016, 'DITA AYUNINGTIYAS SUKMASARI', 'P', 'dita@gmail.com', '081200xxxxxx', 'default.jpg', '$2y$10$.ZsO.kRzow4TXqqCOoVBz.c7IeJlDZvg9l.Bx39fi1ZJr7B3JTPmy', 5, 0, 3),
(201401018, 'SEPTI LENA LENI', 'P', 'septi@gmail.com', '089188xxxxxx', 'default.jpg', '$2y$10$nlNPsvKdMjW3hS2v8Iv6DeROn5EMmHQCRsgs3/iDuGdbzbKwOKdMu', 5, 0, 3),
(201401019, 'BOBY HERMAWAN', 'L', 'boby@gmail.com', '089922xxxxxx', 'default.jpg', '$2y$10$FOxHz6jSIblPVjUUadOTeu9bCPDhGL2KB2JZjPl.6b7nk4v8525Te', 5, 0, 3),
(201401020, 'WIDYA WIJAYA PUTRI', 'P', 'widyawi@gmail.com', '089989xxxxxx', 'default.jpg', '$2y$10$tlVS316P728KVkqwI6CqFeGD/ddulL12p0p2PFNyfAoZo.nKu9Uci', 5, 0, 3),
(201402019, 'T VALENTINA MANURUNG', 'P', 'tvalentina@gmail.com', '089176xxxxxx', 'default.jpg', '$2y$10$n6X14369YuYToUACxBg4gOPJ07yIY0r7jGeIk0SwyKPSErh96cnJG', 5, 1, 3),
(201501001, 'VALENTINO RAHMANTYADI PRAYOGA', 'L', 'valentino@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$Or1wImtmTgKh3KGBdYKWtOxOEbvdwAqUojg4GbWHQC.PD0/IUffW6', 5, 0, 3),
(201501002, 'RAKA WIDHI ANTORO', 'L', 'raka@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$0Wm7AwcGqSwKaJjrbwkGwODEY21pklOKH.4g2itfQScxxFbRb8RPW', 5, 0, 3),
(201501003, 'THOMAS KRISTIAN JERIKO', 'L', 'thomas@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$IuQPKVzeZ1bdKbLMLySFyOetz4b1DSk387czxmRETHQv5dtHuME/.', 5, 0, 3),
(201501004, 'DION YODI PRIYONO', 'L', 'dionyd@gmail.com', '087512xxxxxx', 'default.jpg', '$2y$10$P00absT0POIqIiExBroe6uyAmzK5xR.6NqpYaapk/.RmGdWdkyUvi', 5, 0, 3),
(201501005, 'ANTONIUS RONNY LIEJAYA', 'L', 'antonius@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$3Zww/2Ddx6jDg5dQ0wnCheTc.1BLDv1Rz9ncMSyaIYv5yxdCOh35u', 5, 0, 3),
(201501006, 'ALVIANOV HARYANTO', 'L', 'alvianov@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$/iuLizFyzFm9qG/kasN0o.GnSDGR.g1PhjJ35yVIUXKGu3V7AgNBm', 5, 0, 3),
(201501013, 'NARIYAH SUNDARYANTI', 'P', 'nariyah@gmail.com', '089355xxxxxx', 'default.jpg', '$2y$10$eL1NxxnphPay8sCd6yYZ8OkBhwe4dmCRF9DoBb9uxt5fNGnDCblvy', 5, 0, 3),
(201501014, 'SUHERTINAH', 'P', 'suhertinah@gmail.com', '09823xxxxxx', 'default.jpg', '$2y$10$RRjlQ2KV1jpPbkg9b2peRu0D.BCMsbO4wpZxY4zeVt37MWW5G8sQ6', 5, 0, 3),
(201501015, 'YOHANES AGUS FAJAR EKO HARTONO', 'L', 'yohanes@gmail.com', '089721xxxxxx', 'default.jpg', '$2y$10$2lbqrhWOkn7ixFZmVYYkrO8gwl1gUKi1V65ueyEzRPShlAr0QF1eq', 5, 0, 3),
(201501016, 'KELVIN JAY SAPUTRA', 'L', 'kelvinjay@gmail.com', '089765xxxxxx', 'default.jpg', '$2y$10$1rFFc9zRcMCgy9dFDUrNY./dXhf43sDUNNPGNZkzYapuL1NFq237S', 5, 0, 3),
(201501017, 'HAPPY SUGIARTO CANDRA', 'L', 'happys@gmail.com', '089712xxxxxx', 'default.jpg', '$2y$10$cPFOXZsfnlb8VENqID74lOPuf1in4QV3BiiIaUXgdwr6cjlXVG7G6', 5, 0, 3),
(201501018, 'LEONY BRILYANTINE', 'P', 'leony@gmail.com', '089643xxxxxx', 'default.jpg', '$2y$10$jJ7EATXmzkELVa7UJ7rfWucJYBKVAPXd5PkpIoXO9GyW34PcLKqlC', 5, 0, 3),
(201501019, 'TIFANI', 'P', 'tifani19@gmail.com', '086790xxxxxx', 'default.jpg', '$2y$10$Ga99WPHc/4QFSzyRoIPE.u7FmU5wkInZxNIVtWUUOoxKqbgALobSe', 5, 0, 3),
(201501020, 'ANDREAS DEVANO', 'L', 'andreas@gmail.com', '087645xxxxxx', 'default.jpg', '$2y$10$fDyYpTGleebck.Ki0q60uuehcwby6kj.IET8XCNl7YPXDQ0X1tA5m', 5, 0, 3),
(201501022, 'ADE KRISTIAN', 'P', 'adek@gmail.com', '089912xxxxxx', 'default.jpg', '$2y$10$mM1PMQWXOmZuw/LzSFX60eMaiOP0cIATIjXvJi0AXr.B8wwXWZL26', 5, 0, 3),
(201501023, 'DIMAS TRI WALUYO', 'P', 'dimastri@gmail.com', '089923xxxxxx', 'default.jpg', '$2y$10$w3JxsDNu.Nnu/15guHA9wuFX0ieYf7V/3vBOv.r0zK/9IYgDEforW', 5, 0, 3),
(201501025, 'AGUSTINA WIDYANINGSIH', 'P', 'agustinawid@gmail.com', '087733xxxxxx', 'default.jpg', '$2y$10$eF/XYeK/6qwuXt.fgtCQ6uQRgwFkZJ48zxskKvJ/9.cIU8q8lNApW', 5, 0, 3),
(201501026, 'CHRISTINA AGUSTIN', 'P', 'christinaa@gmail.com', '086699xxxxxx', 'default.jpg', '$2y$10$oY6jwrlNlsGoCvb9lVZOMOxlxzmB5SxvRaRaOli97gcj2ID17x.Lm', 5, 0, 3),
(201501027, 'AGRISTIAN DWI PUTRA', 'L', 'agristian@gmail.com', '085512xxxx', 'default.jpg', '$2y$10$O5cP4C0ONPBzLFSkiQo3KeikDRzHxCJCS36cqcGK04xE78HW3jW3W', 5, 0, 3),
(201501031, 'HENDRA KURNIAWAN BUDIMAN', 'L', 'hendrakurni@gmail.com', '092311xxxxxx', 'default.jpg', '$2y$10$7mxZZj03qrXm7seYHlrpWe1doECrLQjJ4M2VYIriPkZDDTaw/tfSm', 5, 0, 3),
(201501032, 'NADYA MEYLIANA', 'P', 'nadyamey@gmail.com', '097822xxxxxx', 'default.jpg', '$2y$10$TZZGsnByzXqUTxWmsujfcOqetFI8x7IzPkB6XHgeHTcoyqlNoNHhe', 5, 0, 3),
(201501033, 'INTANIA MEILIN CAHYANI', 'P', 'intania@gmail.com', '092832xxxxxx', 'default.jpg', '$2y$10$8CsZLGXhao2N98Cen31FCuA6RWdVAhLYOtu8rTX3waFjxEJmowsn6', 5, 0, 3),
(201501035, 'ELITA FELICIA HARTONO', 'P', 'elita@gmail.com', '083311xxxxxx', 'default.jpg', '$2y$10$EnfVVWDbvv1n/ySTnxmhze5TC31w89um.DDMq1FJr5Eyyj6GtfVqG', 5, 0, 3),
(201501036, 'DENIS YOGA VIANDA', 'L', 'denis@gmail.com', '032133xxxxxx', 'default.jpg', '$2y$10$x9mH6i9lssgesAMMHNpl.O6ZIsQ9e0jbedqPl3teBQ0Esn.etDYQi', 5, 0, 3),
(201501039, 'ROBERTUS ANDYANTO', 'L', 'robertus@gmail.com', '072311xxxxxx', 'default.jpg', '$2y$10$rSJ.vOhGfhbw2mollQ2TUut5027hXPURlAFP78FZlFzHq1KQfc.vO', 5, 0, 3),
(201501040, 'GREGORIUS ADHITYA WIKUSANTOSA', 'L', 'gregorius@gmail.com', '054321xxxxxx', 'default.jpg', '$2y$10$vTsFgrAeQ1Jifdg5YgRQj.zLeAbamg.t41x1wRQBgAD5ODCyvXt2u', 5, 1, 3),
(201501041, 'YOHANES EDWIN WIJAYA', 'L', 'yohanesed@gmail.com', '032543xxxxxx', 'default.jpg', '$2y$10$3f2dFY/fgXchta3Nn.rR9eRwTXLpBFJBhDEe0IVfhYZmP2e7zex56', 5, 0, 3),
(201501042, 'DWI YULIANTI', 'P', 'dwiyu@gmail.com', '054888xxxxxx', 'default.jpg', '$2y$10$6Qybv4mRlCwYfIy3LjycoOnS7JSTu5Cqkt4HR3Zm/0zURv5j2k04C', 5, 0, 3),
(201501045, 'ANGGI ANGGRAINI', 'P', 'anggiaa@gmail.com', '043211xxxxxx', 'default.jpg', '$2y$10$Ch8l8i.k17H4pcRfKTmwZupKBIsGeABjlUF4f.RuiiYttQ7w/x5Wm', 5, 1, 3),
(201501046, 'DEVINA PERMATASARI', 'P', 'devina@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$3z3XfdqJ4lciXOIJRP.rTeUHl2PQ8BlSF92MRxDmDT1UwVZh6gRee', 5, 0, 3),
(201501047, 'AGUNG SETIADI', 'L', 'piglet@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$lTFRL3DcXYabTUhN262Zseup2xghOMmXmtip5hNN0PlZ7yR33C942', 5, 0, 3),
(201501048, 'RIZKI AGUNG YULIAN', 'L', 'rizkiag@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$X5OdNYa12rErUiyaL/lX/uNU1bxPZ4SG4zN7CAOQjFzkfRcPNUHkC', 5, 0, 3),
(201501049, 'AZAN FIRMANSYAH', 'L', 'azan@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$hBHs1E4mn1gVODbNUy4RHuXKNrPRWLZgfNrW1ok9vypOehxBbOBxW', 5, 0, 3),
(201501050, 'CHATARINA CEMPAKA ANGGIH H.', 'P', 'chatarina@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$ZM59LXXRoZZN1Ttym7McPe3Abjjxds0Nc/Gj4HnJQ9d60Tg70FSy.', 5, 0, 3),
(201501051, 'KOKO NOVIANTO', 'L', 'koko@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$STogJe4XzfRqRSiILBTyYun7gwZeRF7rTDLV4QAVmwkr2LVI7PtpS', 5, 0, 3),
(201501052, 'ERNI MARIANA', 'P', 'ernimar@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$0NbS001MGNVe9Xk24Q5kYu77RCEInPQCsVCwDhhKxVusk39CLXM8O', 5, 0, 3),
(201501053, 'ADE SETYA BUDI', 'L', 'adesetya@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$hZ1A7KDX/yKDMAfFj2hiruq1cFYgLVS0QG9wYEIdqS9PvjEcibbJG', 5, 0, 3),
(201501054, 'FREDERICA MICHELLA YULIANA LORES', 'P', 'frederica@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$BEGgtD9x6k7Wc36y/G.RBOzGyPaKdQFkAyHGx.zrYo8b6uuEQXI6i', 5, 0, 3),
(201501055, 'YUNIA EVELIN HALIM', 'P', 'yunia@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$DYfUe2hW86RVWnvbk8WkKOXThn1PTU3x273uHsaVsoZyZiiy8tVV.', 5, 0, 3),
(201501056, 'WIDYA TRI MULYANI', 'P', 'widyatri@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$SW9vyjuTIhvZwuipXBQiiOCkm/dv4T6yqSXeP1Q8AqHmE4MmS7yvK', 5, 0, 3),
(201501058, 'ROBERTO MARTINS SURYA SUSENO', 'L', 'robertmar@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$emqStuZYrf6daIuK4w9AHOVN9aQrtq3ZTevuw40PYoL9lWJOD5y1q', 5, 0, 3),
(201501059, 'NIKEN NURLAILI LATIFAH', 'P', 'niken@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$zfTjaWjm0mvH6Ftc8KKe4efqxLfj0spboRt0s9d9L5oFWW/wSVlOG', 5, 0, 3),
(201501060, 'SPANICA PAMFILIA LINRI', 'P', 'spanica@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$x3x7iVlheH.As0pToUNjcuaeQdoBHQE9WfQwZaXy7CN0obkW2N4IG', 5, 0, 3),
(201501067, 'BENEDICTUS KUSUMA MAHARDHIKA', 'L', 'benedictusk@gmail.com', '021872xxxxxx', 'default.jpg', '$2y$10$bGkiBacu9s0e3hP908Ceg.B7KEhjPbMb7/EsbS9hU3hLAfzAblw7u', 5, 0, 3),
(201501068, 'ALOISIUS JULIANTO WOROTIKAN', 'L', 'aloisiusjul@gmail.com', '082981xxxxxx', 'default.jpg', '$2y$10$b98uYWY6A28Tc3KrjJXlJudZkfqAARX86RGCF1Sy4ELLHjJmVl9uK', 5, 1, 3),
(201501069, 'SELI WARDANI', 'P', 'seliwarda@gmail.com', '076511xxxxxx', 'default.jpg', '$2y$10$DmMF5UvzkCCh1cCD9RZ9S.n1roPqZVm5vRmAfn0ldfrTcw4g4setO', 5, 0, 3),
(201501070, 'RISKA ERNA WULANDARI', 'P', 'riskaerna@gmail.com', '096655xxxxxx', 'default.jpg', '$2y$10$xXype6sL3ACbPQqQPJe0yujXTdhrxeIAn32EYttkKK3TVpd9khEDm', 5, 0, 3),
(201501072, 'SYUKUR JAYA MENDROFA', 'L', 'syukurjm@gmail.com', '098278xxxxxx', 'default.jpg', '$2y$10$rqBrxY7j13nb5oBsz77tPuyEJ26wGh0mfYuf5nuV8NTYuEXAEJvv.', 5, 0, 2),
(201501073, 'DAVID DWI PRASETYO', 'L', 'daviddwi@gmail.com', '032443xxxxxx', 'default.jpg', '$2y$10$OI8LkFKyjcSoiedsNsOFsu2RvWgsgvRGMo2wLzGlV.3hdOnOicjiG', 5, 0, 3),
(201501074, 'SYARIFIN AN ALWI', 'L', 'syarifinalwi@gmail.com', '042177xxxxxx', 'default.jpg', '$2y$10$y3AxSd.p2IlC9cXv3bWKUe/hX36CeaET1RZiprluo4jHd4lxN0Qz2', 5, 1, 2),
(201501075, 'NONA MARIA CELINE WUWUNGAN', 'P', 'nonamaria@gmail.com', '089941', 'default.jpg', '$2y$10$fyp5jo0CQOOkRJc7aQsos.Ico1ASY4dNBu7JTqfBA8KRHoW85bbAy', 5, 0, 3),
(201501078, 'FALENTINA SIDABUTAR', 'P', 'falentina@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$19njlcMmN3.Y7S81SJbUde/9/RA5/qoABitQcMupINois.njAFE4C', 5, 0, 3),
(201501079, 'STEFANUS BAGUS PRADANA BUDI D.', 'L', 'stevanusbagus@gmail.com', '021133xxxxxx', 'default.jpg', '$2y$10$4N5MWgYhs1gaI6EklBLCt..RMDvpXQyrpPfEc7CUs3dfIQO6eMygu', 5, 0, 3),
(201501080, 'YOHANA DINA PUSPITA', 'P', 'yahanadina@gmail.com', '039911xxxxxx', 'default.jpg', '$2y$10$1ygRpOYU.MFk7glqPFFTN.EAG1LPPXRdnhGngK172LBgrxWl9.cxO', 5, 1, 3),
(201501081, 'NABILA BELINDA', 'P', 'nabilabelinda@gmail.com', '012391xxxxxx', 'default.jpg', '$2y$10$yQ0uD4lpxjsYJPXzv.RtUe3jZATGMb9lF.2p9FD0x.GmutWuFVnym', 5, 0, 3),
(201501084, 'FRANSISKA BERTRIK KRISTIANI', 'P', 'fransiskabt@gmail.com', '092121xxxxxx', 'default.jpg', '$2y$10$FqNwWlWDzWoY9ErxHP3Oj.OaQZ1I59fof8QDRBEU/AvcUOVeu24vq', 5, 0, 3),
(201501085, 'ALAN RAHADIAN DHARMASAPUTRA', 'L', 'alanrahardi@gmail.com', '023666', 'default.jpg', '$2y$10$LZgRnC9LWXmQj6btr5X6s.UpufmBDGFpOHikGAwdXTCr1chWPOduW', 5, 0, 3),
(201501087, 'YOSEF TRIO PRABOWO', 'L', 'yoseftri@gmail.com', '083653xxxxxx', 'default.jpg', '$2y$10$WS8SxDe3iaKJD7thDsxf2umG/7ZdtO1ChS66RfJZDSmc8fAqpSZSK', 5, 1, 3),
(201501088, 'AMELIA ALVITA SUKIYANTO PUTRI', 'P', 'ameliaalvi@gmail.com', '054711xxxxxx', 'default.jpg', '$2y$10$4H2B5ksh2ID7L8BujrENI.leZPQNNhlfzvDo/UBvB7hM8GyqH8X5q', 5, 0, 3),
(201501091, 'PETER DARMAWAN SUGIARTA', 'L', 'peterdar@gmail.com', '087211xxxxx', 'default.jpg', '$2y$10$dvmYl1LAoGuL2IvwDvIwyeJ0setLD19Y8pV1BgmSffM8ao7mJBwdm', 5, 0, 2),
(201501092, 'ELYS SUSILOWATI', 'P', 'elyssu@gmail.com', '032989xxxxxx', 'default.jpg', '$2y$10$KFjdh/OGIW7T9HD.kNW2Yu/E03uyvWR0FwYH5QsoFuLcZie4aPAiC', 5, 0, 3),
(201501093, 'STEVANUS AJI NUGROHO', 'L', 'stevanusaji@gmail.com', '049922xxxxxx', 'default.jpg', '$2y$10$IB3dyVaJyySaYIdjD5uOKubCaEx1dcTmpxNNwdXscIgv5674Z5lYK', 5, 1, 3),
(201501094, 'RAHMAN DARMAWAN', 'L', 'rahmandar@gmail.com', '043212xxxxxx', 'default.jpg', '$2y$10$CrDUNgyj8N4ERiNguVE.Q.cI6YSgS8yRR..CKAPcIHbvycKfTbnQm', 5, 0, 3),
(201501096, 'RIA YULIANI', 'P', 'riayuliani@gmail.com', '087712xxxxxx', 'default.jpg', '$2y$10$kraB4/fimm4Luy6Ie21XROZAA2pJKxJshYIXQNa9KXihj9XnHLlVS', 5, 0, 3),
(201501097, 'MARIA LIDYA NOVITASARI', 'P', 'marialidya@gmail.com', '089722xxxxxx', 'default.jpg', '$2y$10$dXIGHmcac1Yssj4lKEpUXe5jh.r0QgoPVdDgb7gLSik3Pi0dlso0G', 5, 0, 3),
(201501098, 'MESYLVIA FEBRIANA', 'P', 'mesylvia@gmail.com', '089956xxxxxx', 'default.jpg', '$2y$10$K58kkR2l1mHPRBLVxqlgK.BlBZ6d6xDRbO/t6i97ULsmpAaAT4cNm', 5, 0, 3),
(201501100, 'REGI FEBRIAN RAMADHAN', 'L', 'regi@gmail.com', '087798xxxxxx', 'default.jpg', '$2y$10$cWcIabwFmgwA646ftwrqAu5jpxRQ862cMKnMBWwTOVPjgeW4F3FS6', 5, 0, 3),
(201501101, 'NICOLAUS WIDI NUGROHO', 'P', 'nicolaus@gmail.com', '089777xxxxxx', 'default.jpg', '$2y$10$zr5ZH9VlehRO6TuH1dhYIOalG2O47jcdYxnSIE8Udf082vgEvuWL6', 5, 1, 3),
(201501102, 'REGINA CAELI SARAGIH', 'P', 'reginasaa@gmail.com', '089211xxxxxx', 'default.jpg', '$2y$10$xCf/hK1TYmehMDdcbh4c6edKYZI8Lg.ixBTZoYfhbhz7NxGTa8neK', 5, 0, 3),
(201501104, 'ALIM ARIFAN', 'L', 'alim@gmail.com', '089311xxxxxx', 'default.jpg', '$2y$10$hjr6k8meUceNUJn7/.1eXu.mBMwk/JWOd343yPRpLerYV2wEZrM2C', 5, 0, 3),
(201501105, 'BAGAS ILYAS WIDYANTO', 'L', 'bagasil@gmail.com', '089499xxxxxx', 'default.jpg', '$2y$10$3Wy0CoYPp2pQOAkUJmVhM.mKk06q7zbSSB5GtGCA7LNN8I1mLze9y', 5, 0, 3),
(201501106, 'ALEXANDER IVAN BUNYAMIN', 'L', 'alexanderi@gmail.com', '089911xxxxxx', 'default.jpg', '$2y$10$SUYd2YWIqLFed6RDd4QD/evKcjdMqVJOqaOKoRwA1PDDxiswtKip2', 5, 0, 3),
(201501121, 'YONATAN ADI PRAYITNO', 'L', 'yonatan@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$6LiuBLIJyMiKaQJCY8TUJ.eg9zWOvPXk5zWH7AQEuNRNfvRNMN.Fy', 5, 0, 3),
(201501125, 'DEBBIE YUNITA SARI', 'P', 'debbie@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$W1ukRRzkJMnnjQJhU7vTOeYm/qzqiY5EFztyS8GbVcZCCsqB2MRz.', 5, 0, 3),
(201501126, 'ALFIN WIBOWO', 'L', 'alfin@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$huzwU9mV8qxt1/XnrKhho.KnWgbInIbXwqa1Ubvs28qa5TDCC0nte', 5, 0, 3),
(201501128, 'AUGUSTINUS BRAMASTA', 'L', 'augustinus@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$UalLWWQnejZXp2g7P2ZEIudiUUodum/zwOY94d9VyxlIt6pR7Y6Si', 5, 0, 3),
(201501138, 'PURWONO', 'P', 'purwono@gmail.com', '053812xxxxxx', 'default.jpg', '$2y$10$UMiVhTFnl1JFpPBEVfiKLefc1kE3y9YKmA7dxXh7jBQT8XgOhxa9G', 5, 0, 3),
(201601001, 'MARIA BRIGITTA AGUSTINA S. LUD', 'P', 'maria@gmail.com', '089xxxxxxx', 'default.jpg', '$2y$10$cg.38/tsALiAJ.iK7rPAbuwcV1x67UEaEOV127QigFjBNyg5O3GNm', 5, 0, 3),
(201601003, 'DEWI FORTUNA', 'P', 'dewi@gmail.com', '0810xxxxxxxx', 'default.jpg', '$2y$10$U3CGALsD1G82pa541qYxkux4AJkBSBW0TdgYiw6nUfVuKirk9BEQa', 5, 1, 3),
(201601006, 'KEVIN RYAN SUJONO', 'L', 'kevin@gmail.com', '098xxxxxxxx', 'default.jpg', '$2y$10$s3ohKSZ0EVAs6QF31/7hN.0SXpUtPt3YfCUUU1AcTVEUh0aRCKYqe', 5, 1, 3),
(201601008, 'KHARISMA REZA BAHANA', 'L', 'bahana@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$X.Yzl2OkBmMuRiEhikgaH.U0.dUH7c0kGIdsfmCwotuHBRFQz7Q/G', 5, 1, 3),
(201601009, 'JERI AFANDI SETIAWAN', 'L', 'zopenk@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$oUptKc7zsfeMnN9hDlGy/OCZW01Zdk.Wvs1l8TE7LY3GjzGen3ZWC', 5, 1, 3),
(201601012, 'STEFANUS DWIKO VINSA ADITYA', 'L', 'fanus@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$okl7gick7ghekBIW5se.ZezBQ8nHn57/z83W/eoJoURcNejsSteRS', 5, 0, 3),
(201601013, 'DIONISIUS RANGGA ANANTO', 'L', 'rangga@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$nSmLEfD9sS1DDd6pGxUrLeodC.X0c2kPaxt9RrCCYrW4jVdGdMw0S', 5, 0, 3),
(201601014, 'KHALIMAH', 'P', 'khalimah@gmail.com', '083xxxxx', 'default.jpg', '$2y$10$.lbMB/4OhsnKFPnQYpVwCe7QYrEtCKPYW7Z9OEw6jdxX31l7AAy2C', 5, 1, 3),
(201601017, 'NANDA ALDI SETIADI', 'L', 'nanda@gmail.com', '08xxxxxxxxx', 'default.jpg', '$2y$10$Gpe03wcXE/FOMfVqaR6mK.UBTKQJ4iMztNbIuOgEtgHTKXNX6LW7O', 5, 0, 3),
(201601018, 'YOSEPH BUDI SANTOSA', 'L', 'yoseph@gmail.com', '098192394848', 'default.jpg', '$2y$10$50XDKDaGUUU1GU0YfKfZ5OXCXXKVXRSz2ehNRtyKUvtL22ZHFWq3O', 5, 0, 3),
(201601019, 'RHOSITA INA KHADIJA', 'P', 'rhosita@gmail.com', '0871934984', 'default.jpg', '$2y$10$T.F.IymB.CNNecpNTgpEGuwO6771bVWAIqvoj0mc2vYiRIx/IJdBC', 5, 1, 3),
(201601020, 'EFREM ERI PRIYO WIDAGDO', 'L', 'edo@gmail.com', '089148257', 'default.jpg', '$2y$10$dIL5jy6ggnJ/ZXFP1l/jaeB7GQxnbJeGnZhqZ2iBmQrsF22hXdKyy', 5, 0, 3),
(201601021, 'ROBERTO BASAR SIMANUNGKALIT', 'L', 'roberto@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$nXsxunByJ8nBw8ox/Uv9LuGp4an4/KRcFBlT9C0.JOipgtubz57d2', 5, 1, 3),
(201601022, 'THEOFILUS ARYANTO TJEME', 'L', 'geon@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$rnrf9ZerzXuCV7GHYpB2/O/64b3oynG3LYLdA5kDzt4WaAPbZa4Ye', 5, 1, 3),
(201601023, 'PRISKA CANDRA SANUBARI', 'L', 'candraa@gmail.com', '081xxxx', 'default.jpg', '$2y$10$XP0Wzi/2gnDcfDyAzFrc/uogpUOFl0m9pQ4EZE1tMYPb4Bt.Rlbsu', 5, 1, 3),
(201601025, 'STEFANUS DIAN SANJAYA', 'L', 'diansanjay@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$0PAxvZcxc8/a9M/eJEM/GOmhU7/jzBMaORCyWc1DtHBlDb4SMHDEm', 5, 1, 3),
(201601027, 'STEFANNY BUDIMAN', 'P', 'stefannybud@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$rHKwk6MX7PcgqWEZ7XLYVeH.sjwYIV.Rflf/fOh3NbY/IUWPihOzG', 5, 1, 3),
(201601028, 'FENI LESTARI', 'P', 'bhocil79@gmail.com', '0895618466722', 'default.jpg', '$2y$10$m4GNHcxqSOwWYuznnQkU2OW8S9dqgQ6OSaF5zJ31DMkI7pFicgIfm', 5, 1, 3),
(201601029, 'FOUSTINO ASPRILLA GUNANTARA', 'L', 'fouss@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$GbZQ22sNJYE7YetwuCRHfOcYLn6K3AadVm/QiV2qrnb7GY.fWkbmy', 5, 1, 3),
(201601034, 'YEHESKIEL BAYU KRISTIAN', 'L', 'bayyu@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$zeTSakQun66MOPGBg1v9/.zs5AQexAppwyesOFich317a/j6oiuvW', 5, 1, 3),
(201601035, 'MARCELLO DANI HANSEN SETIABUDI', 'L', 'marcellohansens.mhs@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$f2ciOkFRK1GeUqvvNNufOuVmzQsmFBTeoTosozPmCtjD8CLmpjaCK', 5, 1, 3),
(201601036, 'DELIA ABADIAH', 'L', 'deliaa@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$WKsCZAZeJaW37uy5VBiTfuDqoRjeNbeOgIsUqQKA6bmiXcR/zXPGS', 5, 1, 3),
(201601037, 'STEVEN SUGIARTO', 'L', 'acongg@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$O96A9.wmvDKHAFzbuR0Ew.2l.F3KG3MKS6OFniJOQcm43587cMane', 5, 0, 3),
(201601038, 'HELLEN BELINDA GUNTORO', 'P', 'hellen@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$RoLvMLxJqZSnj28fVvT/8.ayOtEXgGVIppXi222sS4w6sdBNqKBES', 5, 0, 3),
(201601039, 'YULIEUS ADI PRANOTO', 'L', 'iyus@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$JSPj2x3eUCJ.5alEbcN7U.zNflIduHf1Q.N1uhPsczWBirHYxv6C.', 5, 1, 3),
(201601040, 'ASRI ADITYA WIJAYA', 'P', 'anna@gmail.com', '081xxxx', 'default.jpg', '$2y$10$TxOgrLaiUsLv/xxej8/FaOb9Pxxoa5Eb9obdGlNZ2A.9R6G6kUu5.', 5, 1, 3),
(201601041, 'SAMSON SUGIYARTO', 'L', 'samsonsugiyarto123@gmail.com', '081575224630', 'samson1024.png', '$2y$10$uE18stDsE09K378X/qCv3eA3BIGvgWEB2aEv2fHhVHq9Wfp/q5KRa', 5, 1, 3),
(201601043, 'MARCELINUS DION A.M', 'L', 'dion@gmail.com', '087xxxxx', 'default.jpg', '$2y$10$eBdzvRP6eyC5QgByjGFEXOJRN/0c6IBe8/odC6Fn/vJQTrWm6Ccna', 5, 0, 3),
(201601044, 'MUHAMMAD GUNTUR RESTU ANANDRA', 'L', 'muhammad@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$eg79Ay6h05165fr8EmGZzewv.cfGcuCwAeEq.LIIO6a3GnYe5xZi6', 5, 1, 3),
(201601045, 'MONICA LUSI MEGA LESTARI', 'P', 'monica@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$BO8BqEsgcoETb0am8Tozq.1VOp7Ff4Zp.Nao4SgNJHJIAAwOi5foy', 5, 1, 3),
(201601046, 'MERLI AMELIA ANGGRAENI', 'P', 'merli@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$AHBscPOmSDvX0a0Q87qHHO7zbzKe7gDfogQDEf6EtcesfTRUKJUJa', 5, 1, 3),
(201601047, 'KAISAR BAGUS SAMPURNA', 'L', 'kaisar@gmai.com', '081xxxxxxxx', 'default.jpg', '$2y$10$HENzXz2Je0NIrfUgxewj5.WWuWQhHLLtGQMdtZeTlTMSosJlPKobO', 5, 1, 3),
(201601048, 'RIDHO RAMADHAN SHIRAIZ', 'L', 'ridho@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$7J3QhNMMKisDrKHuveL2H.3vQwCSEFTe3QoKwtu5aKTbNra3ExF6e', 5, 0, 3),
(201601049, 'MAY ANDOW DARMAWAN SURYO', 'L', 'andow@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$c/eB8.aPXTNYMYUQ7Xtj0eGv3cu5dyFOASFSwnWzej95AFaFwKFwu', 5, 0, 3),
(201601052, 'SITI ALISTHIA LARASAKTI', 'P', 'sitialisthia@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$QSrohxfVkfaCfTrS.yJNYOZWzMHqIBpfDdlhux0HKvqLKffdNDEf2', 5, 0, 3),
(201601053, 'NABILLA NUR FADILLAH', 'P', 'nabilla@gmail.com', '087xxxxxxx', 'crop_image.jpg', '$2y$10$WSOZ.H7kP0KuJrnLYF.qPetfBHm54/utXFjPQqILrak14vEQjxFae', 5, 1, 3),
(201601056, 'IMAM SUBEKTI', 'L', 'imamsube@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$w.Hr7sejpCcZPVuqAgBIm.bGYWfqeupno6p5w2dCUIVDdjBq23oli', 5, 0, 3),
(201601057, 'CHASBULAH', 'L', 'chasbulah@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$/pqT4rea0fk1hz9DHyfFvOtNVReUCXtz1We7VBUWAlqYzWMWA4LcK', 5, 0, 3),
(201601058, 'MANSYURSYAH LATIEF', 'L', 'mansyur@gmail.com', '081xxxxxxxx', 'default.jpg', '$2y$10$2MLnIZJ/rFj0FkiXJ30T/.m84mbUUrlYa71kFABCxhxi9c4fkXIeK', 5, 0, 3),
(201601067, 'TRI STIYO FAMUJI', 'L', 'tris@gmail.com', '08347265', 'default.jpg', '$2y$10$slgYexULE/Mjy2ZmQ9ijF.xYsFaKMks8p3PIZOmrWLD8.hGcZjluu', 5, 0, 3),
(201601076, 'YUDI SETIA', 'L', 'yudi@gmail.com', '089258376', 'default.jpg', '$2y$10$2EnMKJuUbSAvlWmh8yCwn.UzDrIUaNn2HlPHTAx084zWRGOO8gZ0m', 5, 0, 3),
(201601079, 'RIZQI KHAIRUNNISA', 'L', 'rizqykha@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$XfZLVNKDCCTYJ94NADw0k.vtKZCHe7805H.2loG2Z2YlCPPPZtWde', 5, 0, 3),
(201601081, 'MENGGI SETIAWAN', 'L', 'menggi@gmail.com', '098192394848', 'default.jpg', '$2y$10$vSfFCBs5.zM5zyM.pCRS9uvgZFqGUxkF2Xw.9nYSavzC.JketKxxW', 5, 0, 3),
(201601084, 'FLORENTINA WUA', 'P', 'wua@gmail.com', '081xxxx', 'default.jpg', '$2y$10$6KBEtSTxvn5N5NN0KwIrqOucW2LV1HXE3k4nxYLZ/.z4X00WDyZ1O', 5, 1, 3),
(201601086, 'RIALVINDRA YUDHATAMA PUTRA', 'L', 'rialvindra@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$zyiJy1uYSTYkyPocJh7LTOACqa4wXecI0Tb.9OKzdZ9/lO2mimpFy', 5, 0, 3),
(201601088, 'EKANTI WAHYU RIYANA', 'P', 'ekanti@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$E7i2lyN7xIc89rDvvF0MSuYmZAmPHpHo9XFpPhuqTWeGqslQX6mOC', 5, 0, 3),
(201601089, 'ANDI SATRIO DWIJAYANTO', 'L', 'andisat@gmail.com', '085xxxxx', 'default.jpg', '$2y$10$x/wJIar/dQwQy5/su7qDXe59/Cs2T3ZrYqMJTTQzHhETXFaIo7zFm', 5, 0, 3),
(201602001, 'SHINTYA NATALIA SUGIANTO', 'P', 'shintay@gmail.com', '0989xxxxxx', 'default.jpg', '$2y$10$yBOWAK/JLQ7.7ucYWHQ8oOqsBlxSFC.DoLLg2cmas3Sh2O0N8xGAO', 5, 0, 10),
(201602002, 'MEISI PUJI RAHAYU', 'P', 'meisi@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$iqREDXrz6mJCJLFzzuZcGe6yytPCovrDJ1YxJ7zCL4m1MComOn1ni', 5, 0, 10),
(201602003, 'YOLANDA ALFALANI', 'P', 'yolanda@gmail.com', '0888xxxxx', 'default.jpg', '$2y$10$NCV9n2srVmTeAMfFQF7OUe3m6hxUluxKWJWD/.QRaEMGG9BTyQkHy', 5, 0, 10),
(201602004, 'FRANSISKA MARYANTI', 'P', 'siska@gmail.com', '0866xxxx', 'default.jpg', '$2y$10$ZHXbG9kNZ8j2mkofrNr6juJ5m4FzuweF5p2EZFmh/xnkk2Ub3yB5a', 5, 0, 10),
(201602005, 'THERESIA TRIANTI', 'P', 'there@gmail.com', '085xxxxxx', 'default.jpg', '$2y$10$7BDnIfEhvgVXWv.w7Z.0o.uVNsjvAbt.M1.O/tZweV1GZ1CphtXMq', 5, 0, 10),
(201602006, 'EUGENE CHANDRA SANTOSO', 'P', 'eugene@gmail.com', '081xxxx', 'default.jpg', '$2y$10$y2Xf./bpULoC/b11k07g/OG/cgkXKWaVYYsBybEo0VzDqoYULH18q', 5, 0, 10),
(201602008, 'FEBRIANA KRISNAWATI', 'P', 'febri@gmail.com', '084xxxxxxxx', 'default.jpg', '$2y$10$tU4eO3TdkkkCqsV82ccRFevbIvmt6DGODtd1tW36J75dU7Ek4Q8Ii', 5, 0, 10),
(201602009, 'KIKI', 'P', 'kiki@gmail.com', '081xxxx', 'default.jpg', '$2y$10$I5l0j/SPmUl9BWGB0WDnZu1oUl3a.VBE27/Iz8iZfJEupOwt3YTQi', 5, 1, 10),
(201602010, 'SAFARUNI WANTI SUSETIANI', 'P', 'safa@gmial.com', '0822xxxxxx', 'default.jpg', '$2y$10$sYTHrSW.xmQB/dpVTYz4x.Ne3fYwkIU9GVJ4Hu8aDK1mm7S20kDua', 5, 0, 10),
(201602011, 'YUDHA. W', 'L', 'yudha@gmail.com', '08xxxxxxxx', 'default.jpg', '$2y$10$m0d70S5l8gb3uVg8sWBqc.A16s5YM4zwUVOiFuDUt5ELlq80eDrg.', 5, 0, 10),
(201602013, 'DUHITA LAYLA ELGI NUR BASIT', 'P', 'duhita@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$1DV24UYtk7FDvXAjFIjBxOwN25NZlx3x2f/FC3Oksd7msvQZn8UfG', 5, 1, 10),
(201602014, 'SARASWATI AYU AGUSTIN', 'P', 'saras@gmail.com', '082', 'default.jpg', '$2y$10$tLiFdwqeMjHs5dHLjpOuPekn/gaZKSpeAZsacxkhxF8qmlK6ukTve', 5, 0, 10),
(201603001, 'KRISTIYANTO OGGIE IBRAHIM', 'L', 'oggie@gmail.com', '081xxxx', 'default.jpg', '$2y$10$fhvl9UDPtGocd1TZfblEW.X1R3pWW.UMEkkUkxQpksPnuueuip7bW', 5, 0, 8),
(201603002, 'DAVID SETIAWAN', 'L', 'davidset@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$4J6XTxLmc8CTrJCxjvhVbOEsUH/ZSdYrZ6THPdhFMbl4pWNdY/KZi', 5, 0, 8),
(201603004, 'MEI FIE HARYANTI', 'P', 'meifie@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$y7x1gRttKCwbnEJw1ZioR.wwbQg3X9FOrwcwhVM28R7OQeVDkudci', 5, 1, 8),
(201603005, 'ALBERT SAPUTRA', 'L', 'albertsap@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$.P/WHiRsWbUh4uODpk9l0uSXU9TvW.mOJdRqdqJuH90YLSKMqh2AW', 5, 0, 8),
(201603006, 'KUSUMA INDAH LESTARI', 'P', 'khusuma@gmail.com', '081xxxx', 'default.jpg', '$2y$10$7h8jj0p2DeOUP3SRCVVIDujfAe3jCTfnXMoDnreoHqNUfIjokscda', 5, 1, 3),
(201603007, 'AKHILES FRISTA SUGIANTO', 'L', 'akhilesfrista@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$43ToIOXHUJs0kJCxm/cOC./VSFEO00b88DCtQ1fHmNS7h5astnp1O', 5, 0, 3),
(201603009, 'ALFEUS FRIXSEN ELIEL', 'L', 'alfeus@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$IZmH2S2Bqr6ilYKzBvmgl.mtXsG7es28cV5YsdJk7y0307wdR6WBm', 5, 1, 8),
(201603010, 'SATRIO BAGUS WICAKSONO', 'L', 'satrio@gmail.com', '0821xxxxxx', 'default.jpg', '$2y$10$WNacZioygm9FLFUiauipie8zIdOKh.4l2.chRV34xaO2SSVcO7q4y', 5, 0, 8),
(201603011, 'NUR ANISA FITRIANA ROSADI', 'P', 'nissa@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$H90INiddwyayyuocqbNTSOyStmFblb3hDsIMTmB8ttbmsR6swnDBm', 5, 0, 8),
(201603013, 'REDEMPTUS IMMANUEL OKTARIO ROM', 'L', 'riorioo@gmail.com', '087xxxxxxxx', 'default.jpg', '$2y$10$bb/kM3YYFcOpKJrMPjUw3uliwiNKHljR8/3Ro9rjMfHQSJDJcC3Bi', 5, 0, 8),
(201604001, 'EVELYNE KRISTIANI KOMALA', 'P', 'eve@gmail.com', '091828xxx', 'default.jpg', '$2y$10$Xh/oSda6iyVyf0.f0zf0IOWmXex2JZKmb3eeSMBIdG1WqHqMiwOF6', 5, 1, 2),
(201604002, 'STANLEY CHRISTY HARIES', 'P', 'stanley@gmail.com', '08xxxxxxx', 'default.jpg', '$2y$10$r/QEJpN5yzb2nNaMUEjGnOnPaynaIUAH1jE80H/nm2rCPl5zXVyO.', 5, 1, 2),
(201604003, 'HERDHINI PUTRI', 'P', 'dhini@gmail.com', '08xxxxxx', 'default.jpg', '$2y$10$c6.OS.9PWcVlT81d3C0Wg.G.qYwc90J6lM9BImpqFyz7vsJqHR/qO', 5, 1, 2),
(201604007, 'KAROLINA DIKE WEA', 'P', 'karolina@gmail.com', '087xxxxxxx', 'default.jpg', '$2y$10$GD9d6M4.4PTrB2.uJ7RK8.5DBu7yHDjwdDMPgcI5PE.cbcW0aVHDW', 5, 0, 2),
(201604010, 'MARIA PASKALIA LINDA PRATAMA', 'P', 'mariapaskalia@fmail.com', '081xxxxxx', 'default.jpg', '$2y$10$yZKCwm25UYqVaaaQeWo3Ce8TSjNXoh2CEG3K5gJ/mROxafDnxvGdG', 5, 1, 2),
(201604011, 'THEODORA KARINA PRASETIO', 'P', 'theodoras@gmail.com', '08xxxxxxxxx', 'default.jpg', '$2y$10$5io92g8p0Uqg9mM2HSbnWeca2/Bw8pLn1B64osC8r9ZOEFZgniIym', 5, 0, 2),
(201604012, 'RIZKY YULIANA', 'P', 'jule@gmail.com', '089xxxxx', 'default.jpg', '$2y$10$HB9I9uv.rHUhbxE2pEVnL.zJdTJqp3DQ59GiqY04y.dw6XPS3eTum', 5, 1, 2),
(201604014, 'ANISA CIKAL KIRANA', 'P', 'cikalciki@gmail.com', '0857xxxxxx', 'default.jpg', '$2y$10$1xX1c9E39adT5zr.r1V.nu9bon0.LbPea..B5kxa6hIP1eoCZ1P6O', 5, 1, 2),
(201701002, 'HENGKY WIJAYA', 'L', 'hengky@gmail.com', '123', 'default.jpg', '$2y$10$rgSw.JdWCtiM2XmqmKKacOD8vd4B1DmUdeBBSnzcMJ.XgoH9SDj2S', 5, 1, 3),
(201701004, 'YEHEZKIEL NICOLAS SETIAWAN', 'L', 'nico@gmail.com', '12', 'default.jpg', '$2y$10$/jYALS3BNRrNTqrpEAWo2uTAg1rPPjuFxDK0JGvCVFIahwc1sIo96', 5, 0, 3),
(201701005, 'AXEL HARYANTO', 'L', 'axel@gmail.com', '123', 'default.jpg', '$2y$10$/0JEomhoRnpeln0ZJUwPdu5Gs7Qu8LwvndwHWNMsbQr1nkbE4FbKG', 5, 1, 3),
(201701006, 'TANSAH PRAYOGA', 'L', 'tansah@gmail.com', '123', 'default.jpg', '$2y$10$7w1rMjcIhwbMVYOlqWVicuskgHBlMZho7mt.Oa81FlFG0T.P0K/HO', 5, 1, 3),
(201701007, 'JOHAN KRISTANTO', 'L', 'johan@gmail.com', '12', 'default.jpg', '$2y$10$3F.lwM7JT8OwkWwbZHPu0.ri8R2KLLzDkjZQERbbHMYbYQyZwanUO', 5, 0, 3),
(201701008, 'ANGELA MARICI', 'P', 'MERSI@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$Xgo6zQmpDHuSj4hxhdw6sulaBhK2Rt7nRunVlbOg7ilERWmFPl.8K', 5, 1, 3),
(201701009, 'NIKOLAS SETIAWAN SUGIARTO', 'L', 'niko@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$xDOneWO3aDOvXFOkUuW7PuwZUHnKXma6Lp8xHqP8JKE1Ki.MWha..', 5, 1, 3),
(201701010, 'AGUSTINA ELISABETH SIAHAAN', 'P', 'elis@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$74dLf3.5rQR2tMkV0dbvO.mVrYr17oJc/3.RMTYWawFecfPmPs17e', 5, 1, 3),
(201701011, 'MICHAEL OKI HARTANTO', 'L', 'oki@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$S3JEjSQEpY2EgQ0Frezf5.ff572XnkuuBk222P0KfqWwN2yntbZva', 5, 1, 3),
(201701012, 'MI\'ROJ HIDAYAT', 'L', 'dayat@gmail.com', '081xxxxxxxxxxxx', 'default.jpg', '$2y$10$9CyMRc2K0Cft1aeh3BESOeV34GX5BD2njt2r4DbE32X289ubO/ZAm', 5, 0, 3),
(201701013, 'KEVIN VALECIANO SETYAWAN', 'L', 'kevinval@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$K41JR68ogq6UbSQf2TzMqu.TDIF.wQtrMQvmiJYBn6Q1IMEAD5.Z2', 5, 0, 2),
(201701014, 'RICKY ARDIANTO HALIM', 'L', 'ricky@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$UPxW6zQHlBTZ3cuII1Zd8eTWZSsdHh8t0g8k5lPKtnUKSgf0l6XkK', 5, 0, 3),
(201701015, 'HILARIUS BAYU FEBRIANTO', 'L', 'pepi@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$2CYaG0ND.ouvsofTdyGbAupOvuaxbddERYoV0kJkCv0Ng2uz.D5m2', 5, 1, 3),
(201701016, 'VINCENTIUS ARDI PRADANA', 'L', 'vincen@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$J6wVt.RwRjYPqGFt9JXQSueVymywb4v.2g4pn6Rv71Kmi0a7fKLSy', 5, 1, 3),
(201701017, 'FIRDA AYU NIRMALA', 'P', 'firda@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$o.HjPC/yhskTrfOwd4740eIkEDY9Ex8/EGl88PoKBit/DZU/BtQny', 5, 1, 3),
(201701018, 'TABITA CLARISA EVANA', 'P', 'bita@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$DVt.nEfMLFwJS02fTpbnneGoQVPqUy4SVtJvWfjRfMhw.vFnE6xDK', 5, 1, 3),
(201701019, 'DENI SUSANTO', 'L', 'deni@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$UTBk9KDsyyevv02F3LFM.O5JhP6YdiiUpSNTDArFUQE7rGDvK3gMW', 5, 0, 3),
(201701021, 'STEVEN RAY', 'L', 'rey@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$T5sTtVH6LATlVyUQevtOdewFsN9zDI9ovfJWt.KhZj8I6QNzaoUP6', 5, 0, 3),
(201701023, 'MATIAS PURWOKO FAJAR ASMORO', 'L', 'woko@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$qNJXmZF0QekmDs80EHxM4.CRsOr.PacbtlQwNnFeHKqYw.v7etCV6', 5, 1, 3),
(201701024, 'ALVIN SUJONO', 'L', 'jono@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$AmNGNRvtoZCw03uUI1pB7ePpZUGjAKmEpyH7QFmRIRvQ309yCY03a', 5, 1, 3),
(201701026, 'DANI ALFIDA KUSUMA', 'L', 'dani@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$Kx1RHe/inDyxJXVMdqtnnOgUwfUIBIYIoQgS7YpvnVfK8JU2nZ3t.', 5, 1, 3),
(201701027, 'CLARA ADELIA FRANSISKA', 'P', 'clara@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$vJuJiJrR40K4wGrslz9OFe39f8Rvmi6F6ae6yEuNzivdyxgyDT2Uq', 5, 1, 3),
(201701028, 'HALEPY KUSUMAWARDANI', 'P', 'halepy@gmail.com', '081xxxxxxxxxxxx', 'default.jpg', '$2y$10$weHJIVV5e8w6RK2IV4O18eofD4T6FCMnhNVpnRRYyivW2p2lxSyM2', 5, 1, 3),
(201701029, 'ROIHAN FIRDAUS AZIAN', 'L', 'roy@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$lvBvK.EKkZrnuMHs0RaT1ujkTibr/0AlLbsZSK4mHxcQIceRgJ4ki', 5, 0, 3),
(201701030, 'WAHYU EKA MULATSARI', 'P', 'mulat@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$dbxG8KlTO152FeypgO/70.pTxpWhrntNBaJyGYmFDicprWvdVbV0y', 5, 1, 3),
(201701031, 'BILQIST HOERUN NUR AISAH', 'P', 'bilqist@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$BpiA9pjeaUv3HYMboNGkjOpt/5Ip9XlSRmW.6jfkL02Oxr4EKBnaW', 5, 0, 3),
(201701032, 'ANDIKA ABRI RAMA', 'L', 'andika@gmail.com', '089xxxxxxxx', 'default.jpg', '$2y$10$BQme2JpW5irSJr35bF0m8uOXYxtnEMTcMhtGvzO4.A53AEZzzpWLW', 5, 0, 3),
(201701033, 'HAYUN IQBAL FIRMANSYAH', 'L', 'hayun@gmail.com', '089xxxxxxxx', 'default.jpg', '$2y$10$nCz7DVGOCknwtUziw6M8XuJS2zQYb4NOZL6/W6FvwSJ54/L7jMYUu', 5, 0, 3),
(201701034, 'AGNES SRI MULIANI', 'P', 'agnessri@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$2YwNaj6ovJPBUuwZde89vOtCB5jzAXpwJbqsD0Ze67eqagFOHoxS.', 5, 1, 3),
(201701035, 'ZEFFANYA SYAHRIL', 'L', 'zefa@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$5oV/.cz9Fdx3Haf5SDW5.uAjA.l.tRHS23/qzKGh.g16Cm21Tk.c6', 5, 1, 3),
(201701036, 'DIAS AYU SAVITRI', 'P', 'dias@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$WaY7pAMypfsvDAEd7fwIgOzJw8Fl4P2/0.QaIHU8HO77vSFvd4BSK', 5, 1, 3),
(201701037, 'RIZAL HENDRIYANTO', 'L', 'rizal@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$DISxYfWo/cfce4v1Upk3duMVCyS7WCwh5WQd4Mq/svXS/dIzicf0u', 5, 0, 3),
(201701039, 'AGNES WULAN ALVERINA', 'P', 'agneswulan@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$p40fTNRJX5.wPGQq4qEAGeNZSD5p8idrRHFHXpqvEvVMZ148HRGmi', 5, 0, 3),
(201701041, 'YEHUDA DAMEDALASTA', 'L', 'yehuda@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$R69Q2ltrAla98Zv0xUX5Lu41mT.P4yg4WuTgHQHGH80Ffj4jCnZ5q', 5, 1, 3),
(201701042, 'JULIANTO ADI WIBOWO', 'L', 'jul@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$Zpg5GKeyjwVk.31ho4h9X.jCS0QJegxDiDeXc7B7LLkwC9cI0lsn2', 5, 0, 3),
(201701043, 'SANDY PUTRA PRATAMA', 'L', 'sandy@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$pmH6/zfbezOUnZW5x9RLbOxbISpgfp07h4XrDAJGA6plIaj.qnTom', 5, 0, 3),
(201701044, 'ALENTA BIO SANDRA', 'P', 'alen@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$k/5IMwxPejuiqO3tAfTs2OwdWMCJQkdxNNYpA730x79j8nYlThr3m', 5, 0, 3),
(201701046, 'STEFANI CHRISTANTI', 'P', 'stef@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$3/MM5XghwNx7dS4BM/m3Oe3Yvyx2wejeyo96fWqBaz978GP2mF2ku', 5, 1, 3),
(201701048, 'VINCENT KURNIAWAN HENG', 'L', 'vincent@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$OO.OR7YJfAMNNnBMKG.peuFGdEOUTXh62FTNf.EiWJm/d9hbpeFe.', 5, 0, 3),
(201701049, 'LUKAS SETIAWAN HUTABARAT', 'L', 'lukashut@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$b2sh7NEEDGei4fEl7dHS5uvKx2gbINoT.I/BjHPRnd/kyAI8PallS', 5, 1, 2),
(201701052, 'NANDA SATRIA PUTRA', 'L', 'nandaaa@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$DZiQMl7nAORGr2fR7EL6Rer51SAhmeeE7JaTcaKNlsKTCdTQ22RNq', 5, 0, 2),
(201701053, 'VIRGIAWAN SAPUTRA', 'L', 'wawan@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$LUE2vP5fx0VQq5PTCBnBYO3stCD7k9eVQFRQBlIvYpa3a5s1h319m', 5, 0, 3),
(201701055, 'EVELINE YUNITA', 'P', 'evel@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$JyO5WQFbifLHWY.Yy2N8fOyVQ.hu6JPX1X91V33McHdvzFYHh.mEu', 5, 1, 3),
(201701056, 'RIVALDO AVILA CANTONA', 'L', 'ival@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$LS0L.X9wDND7j/iwHB12be2pHFWxsJ7AhZYLpxT6Q/pinsI3Njlpm', 5, 1, 3),
(201701057, 'LATIFAH IRIYANI', 'P', 'ifah@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$kgVXvMiASyPsjthGRBd2RuVr1idwEgpMxsvxdYvGJzQ3lHX9oICNq', 5, 1, 3),
(201701058, 'FIA ANNISA', 'P', 'fia@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$O7FttQsWLJc/ZxMhxkagzeP1L9XPVlfupSOmTqliwON2rfCMUk9V2', 5, 1, 3),
(201701076, 'HERYUNITA LESTARI', 'P', 'her@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$00QwzDblBIRG6g9CX9AMhu4APPDcOu7RK7dvpBMJfqv8/yujdcKRG', 5, 0, 3),
(201701077, 'FELIX SINGGIH PURNOMO', 'L', 'felix@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$cDkvegr8t48r3llvb6LQqus3YYLhecHmeOKWfNBDy4e4XpkF2kXeG', 5, 0, 3),
(201701078, 'ZEFANYA VEDY KRISTIANUGRAH', 'L', 'zeffanya@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$ME0roDMJuXLDr7AHHYmq2.Fv7kiFnwsaQ041oyYKIvgHT43kvLRLu', 5, 0, 3),
(201701079, 'UMI SALAMAH', 'P', 'umi@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$RBHZ1EPBZKCMgEuTSrk2YOngt3HH5l6NgkQay5RZpz9lBJIiKLdrG', 5, 1, 3),
(201701083, 'EVA RATNA PALUPI', 'P', 'eva@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$IEWg4xWK8TG1qZPfhKz1M.NV6Oa623LPwZYqylaZrN.KeFk54.GAy', 5, 1, 3),
(201702001, 'AGNES SHITA PRATIWI', 'P', 'agnes@gmail.com', '123', 'default.jpg', '$2y$10$TYrRr97ePZWLh8x9xuenROFU7RlbjfnCROvuj2KmC3ppdV5GiINcW', 5, 1, 10),
(201702002, 'ANSELMA BULAN AYU MAHARTYA', 'P', 'ansel@gmail.com', '089xxxxxxxx', 'default.jpg', '$2y$10$8354Ag44SMoEjtEqlBbUQeG33JjgMIGRHehixphyqSiQlCxz/W.LG', 5, 1, 10),
(201702003, 'FRANCISCA NOVENTA SR', 'P', 'venta@gmail.com', '087xxxxxxxxxxxxx', 'default.jpg', '$2y$10$0NheqXuVN4Lqqvsu7Wt9x.rs/nGCz7M7Lgh.KMsw/SQZmlQkJTrm.', 5, 1, 10),
(201702005, 'CHELSEA BENEDICT ALFONSO', 'L', 'chelsea@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$kp6Bq0HUwzR.RqTqsooZre1nIVkAqMEtxZjEQ7JOZ56z60I2TEplq', 5, 1, 10),
(201702006, 'ADITYA PRAYOGA', 'L', 'aditya@gmail.com', '081xxxxxxxxxxxx', 'default.jpg', '$2y$10$tZdgPg97tKD/1cJ99gLj..OZBKDiII0qE8qI83a7YRQmnQ3Lwlh/S', 5, 0, 10),
(201702008, 'YULLIA ARGI WILUJENG', 'P', 'yulia@gmail.com', '123', 'default.jpg', '$2y$10$Nmm.la27VZNsrj5eWyeteuLb4KafhX1ZKZDZDaDNKviUT28gMml2m', 5, 1, 10),
(201702009, 'MUHAMMAD QORI ALMAKI', 'L', 'kontak.qori@gmail.com', '087748763095', 'default.jpg', '$2y$10$L4zg5or4V/j6QrMdc0YlkO0m6Q2w3DVVxvqUbK4.w3c0Im5ffXMZu', 5, 1, 10),
(201702010, 'LINTANG MAHARANI', 'P', 'lintang@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$BQsNlqBMBtwd2hamlqIWUOVKl4ht0dIj5Qgy6Hpxe56Ar7n2D3AzC', 5, 1, 2),
(201702011, 'DWI KRISNANDO', 'L', 'dwi@gmail.com', '123', 'default.jpg', '$2y$10$DzMaUFO75.hZ0kShJs9hYu830z.UHBCw0T9YdcexvHT/7BZ5t9NUe', 5, 1, 10),
(201703003, 'LEONARDUS AUDI WIBIANTO', 'L', 'leo@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$.eYPXZv6CKSARehoz4edk.gG6Gc.AXkQJE72F1krh/PCqwh1SU3pi', 5, 0, 8),
(201703004, 'V. HANITYO HERMAWAN JATMIKA', 'L', 'hanit@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$8W2s0oQIuXi/xtpviSZPfOBoOLDRjboEpy0TX.m5vjpG1Phf.aC9a', 5, 1, 8),
(201703005, 'SELINA ANINDITA OKTIVA DEPUTRI', 'P', 'selina@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$dKqVYAAOmi.w0fJLh3qI8uFq581y9WXgBEkopMdeXnEt795wU5KQq', 5, 1, 8),
(201703007, 'GRACELIA', 'P', 'GRACELIAgrace@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$3Q.UXdsyiQlmv9k840QCue.Jv.kEpe2pQ1rBvHiltSYPy5St0FSMK', 5, 1, 2),
(201704001, 'BANITO ARIFIN FIRMAN', 'L', 'arifin@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$F8xzwf3xcOTwlDyoRHfWquWInw/WryGEZiVRspamRwslHekrlNOc.', 5, 0, 2),
(201704002, 'CYNTHIA JAY NATASHA', 'P', 'cintya@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$HZOT/S56IpLJ2qNgX7dy4.dO45zRq5QrPEMZQY3OItrkmDK4wVoQa', 5, 0, 2),
(201704003, 'MUHAMMAD SYAIFUL ANWAR ROSYADA', 'L', 'osa@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$kawJD87mIo4CqCpPKPX9S.dpT0zfkcJSc7QQgo5SKS/UnHagYAutm', 5, 1, 2),
(201704004, 'OLIVIA INTAN KRISTINA', 'P', 'oliv@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$GvKFnma2o27AWw4rEVq5Xe9wUOg2QitYg8SruGs9lLWhfJe/LnaSu', 5, 0, 2),
(201704005, 'APIT SETIADI', 'L', 'api@gmail.com', '089xxxxxxxx', 'default.jpg', '$2y$10$9.mBTnMotdxq48ASIWJUJOEGBKbObIeQ36afMV1dzU4FDR1KZGqPy', 5, 0, 2),
(201704006, 'IAN ANTHONY RUBIJANTO', 'L', 'ian@gmail.com', '123', 'default.jpg', '$2y$10$jHLSCg8zRKafRXTo.8c2JuxMwADxUb/N4U7jf/IcW0V0WP7i/xLeq', 5, 0, 2),
(201704007, 'ARMADIAN AJI PANGESTU', 'L', 'arman@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$uvcfXEcZVjealkekdzhk5O.VF4XvvV6p2oh.3l6ro1CDHWWkecxXu', 5, 1, 2),
(201704008, 'BAYU DWI SETIYONO', 'L', 'bayu@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$uZBWD.2XvYIgp3pkjVMGl.KA6hVOMWxJUemtx4hIaGPzAFDp.MRLq', 5, 0, 2),
(201704009, 'BENEDICTA ELYSIA GINA ASTRELLA', 'P', 'elsy@gmail.com', '089xxxxxxxx', 'default.jpg', '$2y$10$oxal15POcdJW78crsF.fL.UKMaYM4ZRt5fFUwKWP/UF27pAT51BJ6', 5, 0, 2),
(201704010, 'INDRI DEBI SAPUTRI', 'P', 'indri@gmail.com', '081xxxxxxxxxxx', 'default.jpg', '$2y$10$dPHQWKwxVbR5gtCzqYMcL.INhTD.cT55/zU2GMYwsACFsmBnrAZpu', 5, 0, 2),
(201704014, 'AKBAR RASYIDIN', 'L', 'akbar@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$4MQwyR9lDGhjpieKMxag4eu3elva6m4qRb/FV2ZXl.VUV5Wp24DEO', 5, 0, 2),
(201801003, 'SAHAL FIKRI HAIKAL', 'L', 'sahal@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$4R4SNQxm3Up5PJcIZTES/.K2iTDtRbW17H0XxSqqlDlsdW1Yisrm2', 5, 0, 3),
(201801006, 'NEDY KUSWORO', 'L', 'nedy@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$/5lxM.B2dM.kC5k7ICjNvuuhAE3bcdSpugzPutMKJB3cKK0GmrXcK', 5, 0, 3),
(201801007, 'MARIA ELFRIDA KOA', 'P', 'maria13@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$aMIG9hNVMHeJ3qAzJk5qRu8pcxWOgPgcDOScT7TzSocOG/hB4cUQm', 5, 0, 3),
(201801009, 'ANGELINA NGGUWA', 'P', 'angel@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$5BGOGg8E..VQsvFTounJH.X731r0Zwvtc8/pmNEnj91GSJ9KaZ3FW', 5, 0, 3),
(201801010, 'ROLI FEBRI RUMAHURU', 'P', 'roli@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$PMnrtPXib8D84WSMmis46.36XoO5bwJsgyLdFrbu6PqBJdSZOC5de', 5, 0, 3),
(201801011, 'NOVA SABRIYAN', 'L', 'nova@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$VZLUZTHnvn45rSrEohCVle1isCzP8UbiPFV88saS6643B9LnfoMNS', 5, 0, 3),
(201801012, 'FATIKA SARI MURNING TIAS', 'P', 'fatika@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$nM04VWhn6VMkRLsQ.E7rsOA8cXjZbkgW2BvQhkWS.MV6B6kCtuWgO', 5, 0, 3),
(201801013, 'ADINDA DWI SUBASTIA NINGSIH', 'P', 'adinda@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$7JmoiSNvRXRrosfQCOGJ8ewLhmmOkb9/evRzUfHC8J8UvLmxD6L82', 5, 0, 3),
(201801014, 'HAIDAR ZHAFIR SAPUTRA', 'L', 'haidar@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$XMCUxS5tGHf0d1HNW9BvzOBZsoELepFNYW9k9MFQm0D5H5cRBZ67W', 5, 0, 3),
(201801018, 'KURNIA INDAH WILANSARI', 'P', 'kurnia@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$z4kMu67J6hAI0sze2Q10Ae8X7w9NO7xRPfnoSvbQFEv2PFBHjzwKS', 5, 0, 10),
(201801019, 'NOPIANTI', 'P', 'nopi@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$NzHqKI/nIvcW6PZ8coFL2ub35ITJKNcYjdbjF7W.Q3/TsTJVmzX3y', 5, 1, 3),
(201801020, 'PUTUT PUJAGIRI RAMADHAN', 'L', 'putut@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$Aez/4dHXVISSboOfpr5.TO3jI5W.pVgHP/eNSdc5F40OzJT/Hg4O2', 5, 0, 3),
(201801021, 'NOVELITA CRISTIANA', 'P', 'novel@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$3wo6YH11prtOF2C7GJosOuG.j1J7.sjtTd8Lqo88iWsIjgdHIMYSi', 5, 1, 3),
(201801022, 'GRACELA VELANY CHRISTIANTO', 'P', 'gracela@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$S7k86xgTFwC.RlfR8md2bOrLFb/SR1IDDyakh38MAaFH21LPKhoQC', 5, 1, 3),
(201801023, 'JODIE SWIPLI PUTRA FRIEMA', 'L', 'jodie@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$cykK6JcO0JBK4f6mJ65LbetNSYkjxHwENYFHsiAvo2wxB/VqcwUVa', 5, 1, 3),
(201801024, 'ALVIN ANDREAS ANDI', 'L', 'alvin@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$KcI9Fbybl8J0WF6ZaOR/cejCaJ0KzMNTSyqN44GkuEf71Y7l0hmbm', 5, 0, 3),
(201801025, 'CHRISTOPHER DARREN SANJAYA', 'L', 'christopher@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$xkxug5bq22Qf9iAuYGYyxuaMRj8L8IWzPOYXuV7i7R47/7LVcCOGS', 5, 1, 2),
(201801027, 'ENRICO YUWONO', 'L', 'enrico@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$CRd.LBw9CMUDiJd/fC1kY.4mIaNIvi..25IAmFzXefZVdMdOPtq9m', 5, 1, 3),
(201801028, 'MARCELINA INDAH DEWI PANGESTIKA', 'P', 'marcelina@gmail.com', '089685015594', 'default.jpg', '$2y$10$URTnq6IM5r/.6yK.l4myCOxA8vCn63mSvoYWpdGPxEw9toYy4/t2m', 5, 1, 3),
(201801029, 'MEYKE HOLYSIANA', 'P', 'meyke@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$fp0gXMVeXqF6jqw1ICFHz.2keKoopoVLXRlFl7zvq5YQJoTjsxzcy', 5, 0, 3),
(201801030, 'RAHMA VINI KINANTI', 'P', 'rahma@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$XHg2USTy2BSGZHGOJVXQ0u2k2OvvjXSwCO8/cMhrOkYe..UrvAmFG', 5, 1, 3),
(201801031, 'KATARINA RAMBU KARERI TOGA', 'P', 'katarina@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$Rh0LZS8e4VUwT3Z1CfHhRu1LRST76IqF/74tyN/n7tCxhVc1MXWIy', 5, 1, 3),
(201801032, 'PAULUS PATI KATODA', 'L', 'paul@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$6DQYXAPv4FeYLcbfQwLtTu21UWYFNWLguLBunAHxcadrnyubIWPma', 5, 1, 3),
(201801033, 'ANASTASIA YULIA ALEXANDRA', 'P', 'anas@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$XRsiYAUTYzi1FfY/0cWb7eIkEb7RmxrcOpTw7HXbqGU/AX4kWaAvG', 5, 1, 3),
(201801034, 'ERIC BUNTORO', 'L', 'eric@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$fcfksPNYCPbpL4D7s/tZDe9m/skhLAT/RBBfQgS/zK3Bv9Jt8.94K', 5, 0, 3),
(201801035, 'STEVAN BUDIONO', 'L', 'stevan@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$A0nHp4VeXNpkZUWCBqnx6.a3n4YGxy6cidOErcuFiaW23.rQYYpHC', 5, 0, 3),
(201801036, 'RIZKY YANU AJI', 'L', 'rizky@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$/B9txS2PstGNY8CmR/iU..DrZX.bt4w4vmadGebk5ZTqK39gJqs3W', 5, 0, 3),
(201801037, 'YOSEP FAJAR WIJAYA', 'L', 'yosep1@gmai.lcom', '085xxxxxxxxx', 'default.jpg', '$2y$10$A5XyFoZy3/7Fw/aHd1h15u7/WKgziI5.0Dp4VGrMrWuH6Qyv4Qsn6', 5, 0, 2),
(201801038, 'KIMBERLY THIOFIANY', 'P', 'kimberly@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$rjH9U3YDKtZE9UjXeedG.u8QckAz4d0j1sAh.NsYd2mcj5dfeEV3y', 5, 1, 3),
(201801039, 'BERNARD HERNANDO SETIODONO', 'L', 'bernard@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$sdHzvD2VtWtF9VuebDh6puctdAoTGUIdeCSwY9.bnZu/nDRwnpr6a', 5, 0, 3),
(201801040, 'DEVANO PUTRA PRADANA', 'L', 'devano@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$ym652OKLmOK5pYNeseLxp.mWZMFYaySM64/xQn5ygkWtqZM/ylr/i', 5, 0, 3),
(201801041, 'MARIA IRENSIANA K. LANGODAY', 'P', 'maria11@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$qOmaxvVuNgSHYcvvNIcWyuYcUPV2iFmsGik/x9kFJQbcCztQkvZ0a', 5, 1, 3),
(201801042, 'ALVIN YOHAN  WANERIN', 'L', 'alvin1@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$C76vPWi7PnVYJPZOJGUzb.W3tj0R1xGXTSkfbezW161aENKH8YU9a', 5, 0, 2),
(201801043, 'AGATA FEBRI NANDA SIHALOHO', 'P', 'agata@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$s6qeksdAdW6nAiRnBQ7l2.rJvTYsiJsNFPCh4EOCYB2LZx0eDZduG', 5, 1, 3),
(201801044, 'YUSTINA', 'P', 'yustina@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$Us8Z97fDLffbms42ZGAL6u43U6OAk7pnwqWHXhrS52FOHSO4JRAra', 5, 1, 3),
(201801046, 'STEFANI JESICA DALA', 'P', 'stefani@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$zDcLX.i5X22hne3wYvddK.EPUr0d1MrVODN4QGo5y3DT04rf6VCQy', 5, 1, 3),
(201801047, 'MUHAMAD SALIS GUNAWAN', 'L', 'muh@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$5ECaU.iuy/OcgkEQi9IjOuYNMbLZNmvnzHOkk7bqQecO.hZaK4VhK', 5, 0, 3),
(201801048, 'RAIMUNDUS RIMONDO', 'L', 'rai@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$1x92fQrASgGTg1UN/dIHLOQsNjohVuuDL.fDlpSDGHMSnwJeKmBSy', 5, 1, 3),
(201801049, 'YULITA KEWA LANGODAY', 'P', 'yuli@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$pnpyDF2TPXcHpDpzClkMcOtYrSeGPVxsvokWMf1jJ1jr4z1fBOSAe', 5, 0, 3),
(201801050, 'KEVEN KRISNA WIJAYA', 'L', 'keven@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$ygP0276RaTzo2fze0f9EsuXwU8gYzPNnY8RyYl3pEIPmr8MXTCZ7m', 5, 0, 3),
(201801051, 'BRILIAN AMALSHA KATIGO', 'L', 'bri@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$Ww204oZfQg0Q6tjc1OhEAedauyFwXVTsBP8a0ZHvV6hoXC2eJSQ6m', 5, 1, 3),
(201801052, 'ISNAENI HIDAYANTI', 'P', 'isnaeni@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$FywCLY8lH65eqFGHDMbPE.bNN/CGY5jCt4uLb4Vbqh3NRips/KOW2', 5, 0, 3),
(201801053, 'ABDUSSATTAR ZAHROWI', 'L', 'abdul@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$qGgXqXZK4HO64FGOBZyj.erFOuYhK4u991g/4kAY5U4iFc/npbUTm', 5, 0, 3),
(201801054, 'SIPRIANUS KONDO', 'L', 'sipri@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$EStcyzYN8IWE4FsWDV0F3Ocptsbjob.cs7ioHMgmOUe6AFtHkmR6m', 5, 1, 3),
(201801055, 'PETRUS KRISOLOGUS SURYA K', 'L', 'petrus@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$4d0.7Pbh/jSWJlBtfkdHZuVYY8Paf5w5B9z4OkzuEnpbnoqBMvMje', 5, 1, 3),
(201801056, 'MITA NUR OCTAVIA', 'P', 'mita@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$jvsAh/HI9bardThXij0J5O5jXa0yYKXDG9MlI.sdVtm433Vd0LC7G', 5, 0, 3),
(201801057, 'GRAHITO SATRIO PAMUNGKAS', 'L', 'grahito@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$VUS9RONeuGneq1u4DWtn..hFi3VrLDrvT4Z/bcAH07NgS0RFAkCRy', 5, 1, 3),
(201801058, 'HAERUL NAZAR', 'L', 'haerul@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$81GZ/MVa8dyG1NuxsCt72.MQCU8ehYbuQseFv6OI0x2w/hTwnM1Ai', 5, 1, 3),
(201801059, 'MEI SERLI MARSELIANA', 'P', 'mei@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$IswokKIV19fiEAQieOaAyuban7PpZtv0oISmAoSQ94K6HUqdGgXRa', 5, 0, 3),
(201801060, 'LUCIA GUNTUR WIJAYANTI', 'P', 'lucia@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$RVIuv8As0Ks2XZ.McV0umupPqmDYxsySnEzcGElhSLl1rrGC0kfQq', 5, 1, 2),
(201801061, 'MARIA STELLA', 'P', 'maria12@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$0ZQTIs5BgTsEHjWMJE2X.uW.HEVUDF5cWdqITESO6qGC3hsuS9aaG', 5, 0, 2),
(201801062, 'SYAHDU CHANTIKA LEONITA', 'P', 'syahdu@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$yCS8Cb/G1XVziEC1Ts5pSu2H8PNB.MeselIT7Ddl5tPoeAzABi6Ry', 5, 0, 3),
(201801063, 'RYAN TRI KURNIAWAN', 'L', 'ryan@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$4LQ4riypt6dPvNaPDi1OBeiY6S.kUib7KU6AlvOxp8UJHKPbTjEKe', 5, 1, 3),
(201801064, 'CAROLINE', 'P', 'caroline@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$tHKKbocBLCPVoCckG.TYAuXppq6EUdZlAem3kzzLFycCuU9tmNklC', 5, 0, 3),
(201801065, 'KRISTINA MARIA KESE BALAWALA', 'P', 'kristina@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$iocKCQkvUaqd5sM2gU8BKOUgvPugh.VLyst9ku9pRNy/rYSgKWqnS', 5, 0, 3),
(201801066, 'VINA VELIANA', 'P', 'vina@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$tXCH25/Nv4TzxZQ6cqgdqeTaaW0CdAzAxhUdE/K.6RU56bdHZsPPq', 5, 1, 3),
(201801067, 'SATRIA BINTANG PRIADI', 'L', 'satria@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$YqO8WUWj3iYyxCYFDhUSSeuDHXT0nxXksPluQLvhHxYgNwlohv7Qy', 5, 0, 3),
(201801069, 'PETER GIRI RAHARJO', 'L', 'peter@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$CboWNCjXTUiSv9Q16yPKh.1PBOna.8oIZXOXFksXOUp0.5.OlUVxi', 5, 1, 3),
(201802001, 'GABRIELA CHRISTINA FITRIANI', 'P', 'gabrielachristina@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$Bi2/6o2fn/hmr08dU559Iuu.Z0sCPkdtFW64KTPDQ/VMU8rYx7x7S', 5, 1, 2),
(201802002, 'LARAS ANISA HIDAYAH', 'P', 'larasanisa@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$aHJFet/fB8Ax89rCMEpAJuOgtCCbqj0G/S1N.nrvGyVON5RRQOSrm', 5, 1, 2),
(201802003, 'YOANES NICKO SETIAWAN', 'L', 'yoanes@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$qYJpPUMUAezDPaMj770NdOItgRC4SeAIV1D1ERgRPr3uSrjYYZx.C', 5, 1, 2),
(201802004, 'ELMA CATHARINE PUTRI MENGGANA', 'L', 'elmacatarina@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$WoL75NNKf/1VZzep8HQyFeaKfY8qpfGt3UfaEXMZt8dWCaccUR.BO', 5, 1, 2),
(201802006, 'FENI OKTAVIANI', 'P', 'fenioktaviani@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$zjytyGz48VbZSJ0e/7M4IeuHhBgPYMtfEDqsfzfMZj0lmWtG3nb1K', 5, 1, 2),
(201802007, 'AJENG DAMAYANTI', 'P', 'ajeng@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$bqp1vFyMiU46AiM8r/6VvOuz4ORCe6z/IISi0mWw0735Yr1NgqGiW', 5, 1, 10),
(201802008, 'VIA NATAL LENA TURNIP', 'P', 'via@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$D.YInCeKZZGY9TWLLvUMluiFfCrZ9.L.N9b0Xi4Sr/5T3SQjCQT5O', 5, 1, 10),
(201802010, 'HENDRA ARY PRABOWO', 'L', 'hendra@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$M1FwTpeiVo8RakFd3Bmztehp2HRORCWHrDzEGkaFF4ypzIBpLt1h2', 5, 1, 10);
INSERT INTO `mahasiswa` (`nim`, `name`, `jk`, `email`, `hp`, `image`, `password`, `role_id`, `is_active`, `kode_jurusan`) VALUES
(201802011, 'ATELARIC LESLY PURNOMO', 'L', 'ate@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$LDsGD2T0FnORh5dcs7yCNexO7w1eI5Kar4VHKilRoyIaMK6FY6Vx6', 5, 1, 10),
(201802012, 'ENNE NUR FAOZHI', 'P', 'enne@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$drrJtluYkHBKY5uq/DYT3ensHgRrjycWVrf.F6BzSnZYAwWIpwFEW', 5, 1, 10),
(201802013, 'WIBERMAN JAYA ZEBUA', 'L', 'wiber@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$THitdQkIl6W5/79YaWqj4.6OCsdk2vtKy/BUmrjGrNsGzrFkSnCCS', 5, 0, 10),
(201802014, 'MEGA TRI PRASTIWI', 'P', 'mega@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$kEnzUa0q1EITHpKp1E.lsuYa7469TuRfismCSHNJZq50djD9LzKIG', 5, 1, 10),
(201802015, 'NUR WIDA MAHARANI', 'P', 'nur1@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$Iwu8nvzB4.WxWrU7YkuiL.Xa8/ewFLXszE87n2gk4xdUhUPJL6D3a', 5, 1, 2),
(201802016, 'FRANSISKA ANGGUN PRATIWI', 'P', 'fransiska@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$HxAYZhCOR4d9OVxdCix6ruFn/4buDqyyqwSuE2dSuntxbdTUw8pi2', 5, 1, 10),
(201802017, 'ANASTASIA', 'P', 'anastasia@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$hDyLmVjD5Oj3hSS8oBODPuwRAb.bpYZK4yR67QzDvvgTHiPX521mm', 5, 0, 10),
(201802018, 'EMAS KEMERDEKAAN AGOES SOEPRAPTO', 'L', 'emas@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$cYAiySE3wffDfyKNdxyRQ.st9xyC68HjbsxCwnOwcpvXNCxVonhgy', 5, 1, 10),
(201802019, 'FITRIANI', 'P', 'fitri@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$xx83DfscajgnA.oGNehJ/ux2nMcNdiDR//5/W/QxvrBrsmqC9yVN6', 5, 1, 10),
(201803001, 'JOACHIM FISCHER LAGA URAN', 'L', 'joyuran69@gmail.com', '08981956566', 'default.jpg', '$2y$10$Q2SxHjZ3Ah812/nPAf9q6OoI/u644K8QLomO5X0o/8nBHumFt8UDG', 5, 1, 8),
(201803002, 'LUKAS HIMAWAN SEPTO SUBRATA', 'L', 'lukas@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$9.rPin7gt.s6geR9nTbhyuRVyI9HzbTkPNLwFHwHG0xguDiNj5akq', 5, 1, 8),
(201803003, 'LUCAS RYAN SUGITO', 'L', 'lucas@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$lOjCcIVOLPodTzHSlfxNt.dwLuxRdlWArbukRaQE5xaoMyWFIMPIq', 5, 1, 8),
(201803006, 'MOHAMMAD SYOFYAN BRATA', 'L', 'mohammad@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$ftZ6xlTc2pbP47PdLv2Me.p3ySUNkleaIUAvQqVndxyqZk4rS4kuC', 5, 1, 8),
(201803007, 'RANDIMAZCO MICHAEL PHILLIPH MP', 'L', 'randimazco@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$W42xx4zfL7lp8nVjLYQUJ.TcoNR0VGuDph92lNv8saSqq2wOpsGsC', 5, 1, 8),
(201803008, 'NUR KHAFID', 'L', 'nur@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$e/dTs5pnwZGSVHbwUSr/tOKW4rE5FkaLmskqo9P6TAOVgYdy8FrYq', 5, 1, 8),
(201803009, 'EVAN CHRISTIANUS HARSONO', 'L', 'evan@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$xVgm383ypItkX5wknSSekO/hGjKa1P0hW4nSeSply1M/kKfczeduS', 5, 1, 8),
(201803010, 'ARDYAN ARYA HAYUWASKITA', 'L', 'ardyan@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$7fePEEp1/O8Y4MnQ8EDRN.kKO/UBuAicmSTQ130kvsbQP1YZEy5hC', 5, 1, 8),
(201803011, 'ADRIANUS ANTON BALAWALA', 'L', 'adrianus@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$SMJRq5KOl0jSTFHAQunLgOpAQmR863/YFKRb5HhoJQYqx4GRfDuw.', 5, 1, 8),
(201803012, 'BENI  GUNAWAN', 'L', 'beni@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$lYYbLPyYJz.n3m5E1SI49uFYfwYuLTUJv6zQSXH10PqMzA8JpC3HG', 5, 1, 8),
(201803013, 'TARSISIUS  PURWADI', 'L', 'tar@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$4lOSKweSM6HUaczsIUp0P.5DdlcfK2HXZABH5Gl.aSYnA.iUgmM2y', 5, 0, 8),
(201803014, 'LAURENSIUS GABRIEL', 'L', 'laurensius@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$tey6o..XBFrJ/fU3p/MB8unYEcCtfpDL1nlhAEN7mDqiNiMJsXr56', 5, 1, 8),
(201803015, 'HERO IMANUEL WICAKSONO', 'L', 'hero@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$zIwd1Mr849Si53Kz18O.COK48q8LflYqGwDcLEcCJZpVbc8ceYP/u', 5, 1, 8),
(201803016, 'MUHAMAD KHOIRUN NAIM', 'L', 'muhamad@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$CeQkd1jXSYhW6WSPUXaHDusMBt.5h50Hw4WB5VVieCfjmbnd7wj2K', 5, 0, 8),
(201803017, 'VINSENSIUS LEVIN SETYA ABISHA', 'L', 'vinsen@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$t01VaM3i/w6p4nLu4eORTuEWE8Xwa1B.Gf6popo.PcYKqXvoZTAGW', 5, 1, 8),
(201803018, 'EKA SOPIANI', 'P', 'eka@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$mtUwzywSuUOL0174PQWrKeNCaB30uMOOxCNIQKMbR7Li27mh2tDXW', 5, 1, 8),
(201803019, 'AKHILES SHYANTICA WISNUMURTI', 'L', 'akhiles@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$bnMM59AatbfqM0YxJENFYuXqOkD6jb/9YtjZYYSOjKrQ.sNilJacu', 5, 1, 8),
(201803020, 'VEBI', 'P', 'vebi@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$sc1255UvVs7zp/LpFPT9Q.murtcbdcOO0ZLYF8pfqys35z4nvIGfu', 5, 1, 8),
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
(201804015, 'YUDANTO RIZKIHARTO WIBOWO', 'L', 'yudanto@gmail.com', '0822xxxxxxxx', 'default.jpg', '$2y$10$ZSUHQdDszX9dBNICV9FaGe7myiBhtT7YkOM/IZo6PY84vJzGWjd7u', 5, 0, 2),
(201804016, 'MAULANA ASERA', 'L', 'maul@gmail.com', '0812xxxxxxxx', 'default.jpg', '$2y$10$ysGISx8Pyoh2BVyd546zlukQxo9q7EGoJZZV1y.XotC5CSF1rSo5m', 5, 1, 2),
(201804018, 'DANIEL MADA TUHEDA', 'L', 'danil@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$diLhG28iP3kg4z.3T.B5..ziGVXYW2Hpt/9EqARHbYYFaKk7830Oy', 5, 0, 2),
(201804021, 'GRACE NOVENTINA', 'P', 'grace@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$.ymwt1QHElvmNgHzebzp3OsSkqF.OjKC4gl3TQG2mEQGvdq6WGvt6', 5, 1, 2),
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
(201901014, 'HENDRA PUTRA P', 'L', 'hendra014@gmail.com', '086xxxxxxxxx', 'default.jpg', '$2y$10$1B/2uLv4kPML4h3TbBu3BOemFijKfsE1VViEPMTNT/p8DYEok0Q36', 5, 0, 3),
(201901015, 'ARIN SETIANI S.P', 'P', 'arin015@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$YCXKFGTinYuBT2Bv5qBN.eyxmO8GTjoVRLuc3/QDNA0vWtR0Kv.Lq', 5, 0, 3),
(201901016, 'DEVI ANINDYA PRADANI', 'P', 'devi016@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$ehn8MqLF/6ST/sl.DA9dJuDnfn3IN/zodALy9sVIZUTzND5Nc/du.', 5, 0, 3),
(201901017, 'DION CHRISTIAN YOESTANTO', 'L', 'dion017@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$9CNz6jnwqaBCnGVq7SLjSeuB8Vqi6tZryzDstCubHZXZSWGRw2iZy', 5, 0, 3),
(201901018, 'MATHIAS B BOLIONA', 'L', 'mathias018@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$c6bv74K1ZCtRDPgQ2wMRV.okN.Hc4yZ88ZivM1WqaOnuxvO.gyxXW', 5, 1, 3),
(201901019, 'AGUNG PRASETIO', 'L', 'agung019@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$YZ4tZGycTGP0SVC3PeRlBudzwrN/x06mUyMdr8eNJrPa0fyqC3gD2', 5, 1, 3),
(201901020, 'JULIUS FLANDY S', 'L', 'julius020@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$g5mZOKa8lnJUsRsKf5BH8OjfnECdlYW3iuH6MDbQZ3F.HbcAAUXPm', 5, 1, 3),
(201901021, 'IVAN WIDYA ISWARA', 'L', 'ivan021@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$1Mq7ADSWWycHiTEY8D55SOuoqO0zYj/Q5cCo6mnfQJc9wBNQ.IJs2', 5, 0, 3),
(201901022, 'NADIA VIONITA', 'P', 'nadia022@gmail.com', '097xxxxxxxxx', 'default.jpg', '$2y$10$ET/GjDFT57YLUv/LvsPA.O.IdJVwuNyczpjg0MrH7yk7M3EpOVm/S', 5, 0, 3),
(201901023, 'BRIAN APRILIANO T', 'L', 'brian023@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$nOEcoxG.y1LBFWhuhtuU3uYiMbV98ccEBp7J1lJhRdPfxd8iSGKk.', 5, 1, 3),
(201901024, 'ARIO PAMUNGKAS SUSILO PUTRA', 'L', 'ario024@gmail.com', '089xxxxxxxxxx', 'default.jpg', '$2y$10$gwYpf7Te.61ymLiLHPg3ZuYdal1QslcD5zzgNcAZO9erZ53iYebzW', 5, 1, 3),
(201901025, 'SERGIUS PANGGAH DHARMALA', 'L', 'sergius025@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$MsiguVckjFN7072r9QFJQe5jhSo88EzJuhF1dlPXBYZIU.QJtWcxK', 5, 1, 3),
(201901026, 'VLADO JUAN REJOZ PRAYUNDA', 'L', 'vlado026@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$K/S0bb4ZSvnmyLZc5GZ8oOVzu59vYv37QpTR.gvcUyJYMf.99.ay.', 5, 1, 3),
(201901027, 'RIFKI ALFIYANTO', 'L', 'rifki027@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$OM1IGh28TC7NkkMuHFmzuun1tbti/HLvyEjNPBmQAwM8JsVxOYa42', 5, 1, 3),
(201901028, 'JESICA ANASTASIA SURYANI', 'P', 'jesica028@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$.Bml2ZUogdjVG0uaclx83OnM/V3dja4YnRDVffuJsxWGXxGQkaJeO', 5, 1, 3),
(201901029, 'YANUR MUH RIZKI', 'L', 'yanur029@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$eJpm13988jCuLVuwjo30EOq8ACs.Sx6vc3QSMfvAwUJaXtg0DTavy', 5, 0, 3),
(201901030, 'DEWI RAKHMA M', 'P', 'dewi030@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$WOhvKbzOrlJz0tkqI5wybu1wpKe2Cpxk/NEWQiQh8OxjAF5Gg1jYK', 5, 0, 3),
(201901031, 'MOHAMMAD AL WARITS', 'L', 'mohammad031@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$Zqgz8oaHnkRaOw/2b5TA3OZZ.6GgDYUFH9c4outTFtZppc9Ci0pJa', 5, 0, 3),
(201901032, 'HANIN MEGA SAPUTRA', 'L', 'hanin032@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$vel8cnnXctErFmE960od3ewMOZi6o3M/2StAcaOKMCiiZBOUcxjj2', 5, 0, 3),
(201901033, 'PEBRI SIMON LEKSONO', 'L', 'pebri033@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$KA/vd9QDhgKeVqQaF3dOyuB83QTWXJ9wx/pL9u9V/ze2ecNkrAWYG', 5, 0, 3),
(201901034, 'THOMAS MOMO', 'L', 'thomas034@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$.WzdRvGZCBOKcAev/oXUrek.1ioY7XDFHkeeteFMYlWYNj5azaHMq', 5, 0, 3),
(201901035, 'IAN KURNIAWAN', 'L', 'ian035@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$REJ7BVLH3oXFnwxgQpRb.OP1oqNmUISVVTqOdRsYOrqwbcCpjzRN2', 5, 0, 3),
(201901036, 'OKTAVIANUS ADITIYA RIOPRADANA', 'L', 'oktavianus036@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$nyb1/u864QY52ePnUfdgzOrGiGmZBahUP5ipduqyfIE2cSYnWf0Hy', 5, 1, 3),
(201901037, 'FRANCESCO ADIMAS W', 'L', 'francesco037@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$/JCCKBwpmdti7Ty2TyPucOH90KSDOvV2qLobHoOWcO5e2ooDYgIe6', 5, 1, 3),
(201901038, 'EVITA MARTHA R', 'P', 'evita038@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$dt5VLY4q8JBuC4VzKWEknOLQI.wuiwLV7lzFTf00NJu2F4gQ4ufHi', 5, 1, 3),
(201901039, 'PAVEL MARCELIANO', 'L', 'pavel039@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$eBA39jRkTejkrb5y/wEEeO5UghTBr.AyBsLwwENSECZoDETUszAqu', 5, 1, 3),
(201901040, 'ALBERTUS INDRA HARTONO', 'L', 'albertus040@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$jWvacZl5R31F6g3Pd3pefeHgtqRHInTCDxTRl6xWlL/9adO8IFHXa', 5, 0, 3),
(201902001, 'NUR ALIANDI IRAWAN', 'L', 'nur001@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$dqGBVgk2gZy85vDsftDP/OXRfoLyv5H.raVm/oEVniXCW2WFhbQ56', 5, 1, 10),
(201902002, 'MELSI SUKENSI', 'P', 'melsi002@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$gaRnMc0JqadRpaFRVZbN3ORNsgL/ZFPgSBnfs5pSMioAJmY3DsS7y', 5, 1, 10),
(201902003, 'DUHARIZA GHANAFI', 'P', 'duhariza003@gmail.com', '082xxxxxxxxx', 'default.jpg', '$2y$10$82Lio4EMHNmtvzm9pFiMUO5Ekosm7Xfrlrx5KTBoDLVJarDbETa1e', 5, 1, 10),
(201902005, 'DEWI LASMINI', 'P', 'dewi005@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$FHIwpGIh.b.mZVbcelrJOePKavQtXnfCAQkQKlDiOXldHxUurPlEK', 5, 0, 10),
(201902007, 'SUSI YULIANA', 'P', 'susi007@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$MRvXOe6CuHzzKBz2S8mI9OCGTg/dpmDdnw7cafdpCj4QosbRbp5ia', 5, 1, 10),
(201902008, 'INAYAH NUR HANIFAH', 'P', 'inayah008@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$6T/goGeBkJl/oG4rcuFTLOduIMml0mOefCEWdxcByZAorZhSrBRNK', 5, 1, 10),
(201902009, 'ANGELI NAOMI SINABANG', 'P', 'angeli009@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$xo.iClD6tcXNC1PhpsiDl.AtXZokumx73ugpBpakiK4Wv.91Qj/ZW', 5, 1, 10),
(201902010, 'ABDULAH ELFAN AL FATAH', 'L', 'abdulah010@gmail.com', '56785442', 'default.jpg', '$2y$10$Vn/3a8MMkL61zkC/sAddUOmOrlOHutzc4mjN7ggq.FWrItUqkc54y', 5, 0, 10),
(201902011, 'NOVI DWI KURNIA RAHAYU', 'P', 'novi011@gmail.com', '081778976567', 'default.jpg', '$2y$10$Pl3HVIbKn0Xs01pE4p3cDunL7BoEZt4aO4Gy6MxuS0N.Z/XG2PbMu', 5, 1, 10),
(201903001, 'ANDREAS NOVARIO HARMANTO', 'L', 'andreas001@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$1imSi0I04ABvgXJ4wME4uuJqx96VcjjqVKg2/qKxlv7XILn3fJHN.', 5, 1, 8),
(201903002, 'LISIA EKA PUTRI', 'P', 'lisia002@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$M.Bre82.VpjCDrbbYmsvwecvPp1we3Vsra0EYCnI9eHl11nLphgW6', 5, 0, 8),
(201903003, 'JOSAPHAT LEJAR RIWANTO', 'L', 'joshapat003@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$ZgSHX9oR8uR4LJahaypn8OB9wO2tZ6hvYMtGOyd0z.CZtLp54vHSK', 5, 0, 8),
(201903004, 'VINSENSIUS ALVIANTO', 'L', 'vinsensius004@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$tOhgdbLRX.HCHBhYrJiCe.oMFn7SJDjEcPzPZceGLEx3NNDS0aSpW', 5, 1, 8),
(201903005, 'ELSI DESLIAWATI', 'P', 'elsi005@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$OLPVm/V0T1tWR.cNxY5Rx.TvqpsbICuNyxAtibihvIGf8x59eya3m', 5, 0, 8),
(201903006, 'VALLEN CHANDRA PRADITYA', 'L', 'vallen006@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$t8KcVSqKBto0c1FzazdiFurrRfK68XkBjgpsCftGSylfe9vkVUeZa', 5, 1, 8),
(201903007, 'ELISABETH MEYLANI', 'P', 'elisabeth007@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$2qcNTwi2CbwJnqdDAlFZgeN3umdRK5xOEAf.aF9GEk9nxEEK6BgPy', 5, 1, 8),
(201903008, 'MELIYANA PRISKA YUNITA', 'P', 'meliyana008@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$4CAAuMoVag8HMdgFHQfUvuqxmBHhWC9U1Pxu/siU7hpZxnnxowZCS', 5, 1, 8),
(201903009, 'GREGORIUS VARIAN S', 'L', 'gregorius009@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$qFzACS6mmjYKmqQVzAf/Ru9.KARez6cjA/gBOhj5.gAgFE5kQYEpK', 5, 1, 8),
(201903010, 'FRANSISKA DELSIANA', 'P', 'fransiska010@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$uF7XJMWqqgpPBRHuSKN2Vu2z.Szufo5ywlsS.0sUnowl1dcSgfffq', 5, 1, 8),
(201903011, 'ROMASI SIMBOLON', 'P', 'romasi011@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$ARrPAdYA8xj6TddDoNfDKOUgRyzqdspEbIvJ1LTImc04LIz3aF6tS', 5, 1, 8),
(201903012, 'RIFQI YOGA SIS PRATAMA', 'L', 'rifqi012@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$QjmncbZxQA9u4aExbBDD3eNpRj/hRlC.7QnLJHww3SB4o.nOhgaJW', 5, 1, 8),
(201903013, 'SETIAWAN', 'L', 'setiawan013@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$m.d5BpPcppSrAax0wqTVoutM6X.93jpRJdmkRrkuqN6lq8beNNqSu', 5, 0, 8),
(201903014, 'VALENTINA HARYANTI', 'P', 'valentina014@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$//46q2OukbFBIaj.HYEiX.9EUYUKSdegkCiOYsfQE6ZfoCmbZFMV.', 5, 1, 8),
(201904001, 'R. ANDIKA DWI OKTAVIANUS', 'L', 'randika001@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$kODbKztdjPqcWioB3k7vhu71jU4dE8wMyKTlpbq0oVnYWyplLw.Cu', 5, 0, 2),
(201904002, 'NATANAEL DOMI RANTUS ONDA', 'L', 'natanael002@gmail.com', '083xxxxxxxxx', 'default.jpg', '$2y$10$iybWIjCrsAFDIDjv7aTQX..rIVJp2oWu26F3NzZS6o0JSd9JM6.B6', 5, 0, 2),
(201904003, 'HENRYKUS SATRIO', 'L', 'henrykus003@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$94ZqheLpX5xiAZV9oRgxGOE4KwAUOhTHwCHumjfyzvkCW938Ucz22', 5, 1, 2),
(201904004, 'HENRY ALFREDA', 'L', 'henry004@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$j9a0i6F15RcveUHJF9YWIunE7n.tDblUzw06Bhe/kAWp1PxvAkFWy', 5, 0, 2),
(201904005, 'JOSHUA JOSIE PRAYOGA', 'L', 'joshua005@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$4oLBdNgIsvNV22cAmBBK6eIp5kHg7unOxMfsfySRrKpwh6Y0vNfYO', 5, 1, 2),
(201904007, 'HANUM RENGGANING T', 'L', 'hanum007@gmail.com', '081xxxxxxxxx', 'default.jpg', '$2y$10$0X2dTEYI7uR9nEahnc9SxuwzMbh2h8jetD62MbxkxGnR4bNXXP9Pi', 5, 1, 2),
(201904008, 'SELLY FEBRI SAPUTRI', 'P', 'selly008@gmail.com', '085xxxxxxxxx', 'default.jpg', '$2y$10$trBPZYFsNLEuhClxr8mtQe.V1Y1qLFpcgsOapXgJf/dVySo/4EmEu', 5, 0, 2),
(201904009, 'HANA SETYAWAN', 'L', 'hana009@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$gyUODyCYZo/P6ouAdy0xLOQlM24uQwMrZlk.KIF/lim/H.mDpRtjO', 5, 1, 2),
(201904010, 'GILBERT SUHENDRA', 'L', 'gilbert010@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$YEpSb6Xlq/PuzU3/YtKQ5.qyAHsoCndGN01kkmR2SZ16iRSkwVptG', 5, 1, 2),
(201904011, 'MELISIA NOVIYANTI', 'P', 'melisia011@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$wUzuXXi6GTomH9MnK8IKJuEofx2izyFkTDzTDlaVf227lwD9mU.BO', 5, 1, 2),
(201904012, 'MARIA STELLA', 'P', 'maria012@gmail.com', '087xxxxxxxxx', 'default.jpg', '$2y$10$TI.YZdLLH2vN0xRgda4OyOf1t/1SrVFKSD8VM7mf8lCMhE47wREY.', 5, 0, 2),
(201904013, 'MEI SERLI MARSELIANA', 'P', 'mei013@gmail.com', '089xxxxxxxxx', 'default.jpg', '$2y$10$h5RxvftgzNr2d4bpIOvzvOPmzI9JXLZo/UvfU5IR4jWhql0rzDKVu', 5, 0, 2),
(2010501065, 'ANDRE ADHIGUNA ROSADI', 'L', 'andreadhi@gmail.com', '062111xxxxxx', 'default.jpg', '$2y$10$hvO16CHhLbp4MzDxKHqsVOeRhrWxqO3wFDtFkvLy3fLfXn3E5w2La', 5, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
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
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`nidn`, `name`, `password`, `jk`, `jabatan`, `email`, `hp`, `is_active`, `image`, `role_id`) VALUES
(12035903, 'Ir. GH.Sumartono, MS,MSi', '$2y$10$do5l6Oa/1TVCyAn3rdI6DO3nW1Cz2CoaAnnSDEMGE338adMaClQHa', 'L', 'Puket II', 'stikomyos@stikomyos.com', '08xxxxxxxxxx', 1, 'default.jpg', 3),
(28027204, 'Romanus Edy Prabowo., S.Si., M.Sc., Ph.D', '$2y$10$OFRrrhY8gpn5dTZgkxl/TufnIIdMDdTa7pKKYuyJLUuvC7b3MV94C', 'L', 'Ketua', 'romanusedy@stikomyos.com', '08xxxxxxxxxxx', 1, 'default.jpg', 3),
(620097601, 'Antonius Ary Setyawan, MA', '$2y$10$DhWgx50UfTQtfAbjNcxgUefxAmy2RnDCEDIvv.i0HrBPM5ftqtNMm', 'L', 'Puket III', 'arysetpr@stikomyos.com', '08xxxxxxxxxx', 1, 'default.jpg', 3),
(624038601, 'Dhany Faizal Racma,M.Kom', '$2y$10$Eavm//yVQIFlhAur3GRa4.TNDd7bSXJyDufeDzUxRYKyqfQqKF8le', 'L', 'Puket I', 'dhany.faizal@stikomyos.ac.id', '08156978910', 1, 'IMG_20180409_142453_531.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
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
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `th_jabatan`, `no_kandidat`, `ketua`, `wakil`, `visi`, `misi`, `fotoketua`, `fotowakil`) VALUES
(3, '2018/2019', 2, 'Kevin Ryan Sujono', 'Agnes Wulan Alverina', 'Membangun Senat Mahasiswa STIKOM Yos Sudarso yang humanis, professional, unggul, serta aktif dalam mengembangkan kampus yang berlandaskan cinta kasih', 'Menjadikan SEMA sebagai sarana aspiratif mahasiswa yang kritis guna membentuk generasi muda yang unggul dan kontributif. </br></br>\r\nMembuat kegiatan yang bersifat internal guna mempererat hubungan seluruh warga STIKOM Yos Sudarso. <br></br>', 'kevin.JPG', 'agnes.JPG'),
(4, '2019/2020', 3, 'Feni Lestari', 'Agnes Shita P.', 'Terwujudnya Senat Mahasiswa yang profesional<br> dan humanis yang dapat mengayomi aspirasi mahasiswa untuk membentuk generasi yang unggul', 'Memaksimalkan fungsi Senat </br></br>\r\nMenampung aspirasi mahasiswa dari semua golongan tanpa membeda bedakan </br></br>\r\nMenjalankan program kerja yang dibutuhkan mahasiswa </br></br>\r\nMenjadikan senat sebagai sumber informasi terpercaya bagi  mahasiswa', 'feni.JPG', 'shita.JPG'),
(5, '2017/2018', 3, 'Richard Alexander FL', 'Kevin Ryan Sujono', 'Terciptanya peran Senat Mahasiswa STIKOM Yos Sudarso Purwokerto yang aspiratif, komunikatif, dan berintegritas serta dapat menjadi fasilitator kegiatan – kegiatan guna memaksimalkan potensi dan kreativitas mahasiswa yang profesional dan humanis.', 'Menerima , Menghimpun dan menindaklanjuti aspirasi – aspirasi mahasiswa serta warga STIKOM YOS SUDARSO PURWOKERTO secara berkala. </br></br>\r\nMenyelenggarakan kegiatan yang bersifat internal guna merekatkan hubungan rasa kebersamaan.</br></br>', 'pria.png', 'kevin1.JPG'),
(6, '2015/2016', 1, 'Ella Laela Sari', 'Bhutyarti Kristitami N', 'Menjadikan Senat Mahasiswa yang berintegritas sebagai wahana dan sarana pengembangan diri Mahasiswa STIKOM Yos Sudarso <br> untuk menuju ke arah perluasan wawasan dalam berorganisasi dan peningkatan kemampuan kecerdasan mahasiswa', 'Merumuskan dan menetapkan AD/ART Senat Mahasiswa </br></br>\r\nPembenahan kegiatan di bidang Unit Kegiaan Mahasiwa ( UKM ) dan Komunitas </br></br>\r\nMelakukan study banding dengan senat dari kampus lain </br></br>', 'wanit.png', 'wanit1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `jk`, `email`, `hp`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Samson Sugiyarto', 'L', 'gitosamson123@gmail.com', '089213248384', 'samson1024.png', '$2y$10$jJrLC19f6yI7Fd1p0LA3PugxTM0rE9XxJbNSk7LfMkPNwNS8pZzUu', 1, 1, 1560654857),
(21, 'Samson', 'L', 'samsonsugiyarto123@gmail.com', '081575224630', 'IMG-20191005-WA0002.jpg', '$2y$10$r3dY2qs.ZBHVeHq5loS0lOCE3VDj3SzrMAljLe1F0SzUOFAB4sYh.', 2, 1, 1561087895),
(22, 'Feni Lestari', 'P', 'Feni123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$oN77xgXd3GLi8x2A6jjm0.MnEqoziD7XLkU7zCaa3zok6LSPnC7oa', 2, 1, 1574581251),
(23, 'Mulat', 'P', 'wahyueka123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$ZN9GOgQGhcn1M70QleQwFurHqL61IDn6gfaC/U5ahcqDzy35CubrW', 2, 1, 1574581578),
(24, 'Niko', 'L', 'niko123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$yTMJ3IACaXCgrJ4CLA/Byu59tPBXuCtbdgSCIAUbvuHNo/l7Nu73G', 2, 1, 1574581802),
(25, 'Agnes sita', 'P', 'sita123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$FOq1EY1YzLW142ydxF33Huaj9jEnyMHuX.Auy73F7CZ3ur9mfji9q', 2, 1, 1574581875),
(26, 'Rositha', 'L', 'rositha123@gmail.com', '08xxxxxxxxxx', 'default.jpg', '$2y$10$3qOKX2O.nq4HI5qaR8H3.eKv1EN2PZIoRmb9nKl7agp3tyYy4JEZi', 2, 1, 1574581937);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_access_menu`
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
(25, 5, 10),
(28, 4, 10),
(29, 1, 7),
(31, 2, 6),
(32, 2, 13),
(33, 3, 2),
(35, 3, 10),
(39, 2, 1),
(40, 1, 15),
(46, 1, 13),
(47, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `urutan_menu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_menu`
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
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin '),
(3, 'Pimpinan'),
(4, 'Dosen'),
(5, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
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
(20, 1, 'Statistik', 'Admin/statistik', 'fas fa-fw fa-chart-bar', 1),
(21, 1, 'Countdown Timer', 'admin/countdown', 'fas fa-fw fa-clock', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
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
-- Indexes for table `countdown`
--
ALTER TABLE `countdown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  ADD PRIMARY KEY (`id_pemilihan`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nik`) USING BTREE;

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kampanye`
--
ALTER TABLE `kampanye`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kampanyevideo`
--
ALTER TABLE `kampanyevideo`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `countdown`
--
ALTER TABLE `countdown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  MODIFY `id_pemilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kampanye`
--
ALTER TABLE `kampanye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `kampanyevideo`
--
ALTER TABLE `kampanyevideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `konfir_komentar`
--
ALTER TABLE `konfir_komentar`
  MODIFY `id_konfir` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
