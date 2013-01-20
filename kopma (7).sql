-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2013 at 06:00 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kopma`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `nia` int(11) NOT NULL,
  `no_ktp` varchar(25) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat_lengkap` varchar(250) DEFAULT NULL,
  `kode_pos` char(5) DEFAULT NULL,
  `provinsi` varchar(25) DEFAULT NULL,
  `kabupaten` varchar(25) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `no_npwp` varchar(50) DEFAULT NULL,
  `telp` char(12) DEFAULT NULL,
  `hp` char(12) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `warga_negara` varchar(25) DEFAULT NULL,
  `hobi` text,
  `status` enum('aktif','nonaktif') NOT NULL,
  `jenis_anggota` enum('biasa','khusus') NOT NULL,
  `id_perkawinan` int(11) NOT NULL,
  `id_pendidikan` int(11) DEFAULT NULL,
  `tanggal_masuk` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nia`),
  KEY `FK_id_perkawinan_anggota` (`id_perkawinan`),
  KEY `FK_pendidikan` (`id_pendidikan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nia`, `no_ktp`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat_lengkap`, `kode_pos`, `provinsi`, `kabupaten`, `kota`, `no_npwp`, `telp`, `hp`, `email`, `jenis_kelamin`, `warga_negara`, `hobi`, `status`, `jenis_anggota`, `id_perkawinan`, `id_pendidikan`, `tanggal_masuk`) VALUES
(3401, '1487294812425', 'yudha wirawan sakti', 'yogyakarta', '2013-05-28', 'gancahan V RT  ', '55564', 'DIY', 'Sleman', 'Yogyakarta', NULL, '0275788723', '087778726322', 'yudha_28mei@gmail.com', 'laki-laki', 'Indonesia', 'Nonton Bola tentunya', 'aktif', 'biasa', 1, 7, '2013-01-13 17:18:55'),
(11161, '', 'Cakka Pandu Himadewa', 'Tangerang', '1993-06-18', 'Jakal KM 4,5 Yk', '', 'DIY', '', 'Yogyakarta', '', '0', '085780379516', 'panducakra@gmail.com', 'laki-laki', 'Indonesia', 'Membaca\n', 'aktif', 'biasa', 1, 4, '2012-06-21 17:00:00'),
(11162, '', 'Elly Cahyawati', 'Yogyakarta', '1993-01-14', 'Wirogunan Mg Ii/682 Yk', '', 'DIY', '', 'Yogyakarta', '', '0', '087839260712', 'elly_cahya@yahoo.com', 'perempuan', 'Indonesia', 'Membaca', 'aktif', 'biasa', 1, 4, '2012-06-21 17:00:00'),
(11163, '', 'Adi Supriyono', 'Boyolali', '1993-03-19', 'janti TR 04/02  CTT Depok, Sleman', '55564', 'DIY', 'Sleman', 'Yogyakarta', '', '0', '083877440780', 'adisupriyono@rocketmail.c', 'laki-laki', 'Indonesia', 'Olahraga', 'aktif', 'biasa', 1, 4, '2013-01-16 17:00:00'),
(11164, '', 'Muhammad FajriI Saptaji', 'Sleman', '1995-09-11', 'Perum Margorejo Asri Tempel Sleman', '55564', 'DIY', 'Sleman', 'Yogyakarta', '', '0', '087838303183', 'fajrisaptaji@gmail.com', 'laki-laki', 'Indonesia', 'Membaca\n', 'aktif', 'biasa', 1, 4, '2013-01-16 17:00:00'),
(11165, '', 'Ali Fian Joni Nuryanto', 'Banyumas', '1993-07-22', 'Pogung Kidul RT 06/46', '55564', 'DIY', 'Bantul', 'Yogyakarta', '', '0', '085693139139', 'jinirikudo@gmail.vom', 'laki-laki', 'Indonesia', 'BLOGGING\n', 'aktif', 'biasa', 1, 4, '2013-01-16 17:00:00'),
(11166, '', 'Ayu Yulfiana', 'Tegal', '1989-07-12', 'Jakal KM 5,2 Yk', '55564', 'DIY', 'Sleman', 'Yogyakarta', '', '0', '087839109758', 'ayuyulfiana@yahoo.com', 'perempuan', 'Indonesia', 'Membaca\n', 'aktif', 'biasa', 1, 4, '2012-08-05 17:00:00'),
(11167, '', 'Raesita Eryanasari', 'Boyolali', '1991-07-13', 'SDA', '55564', 'DIY', 'Sleman', 'Yogyakarta', '', '0', '081946468886', 'raezh_poenya@yahoo.co.id', 'perempuan', 'Indonesia', 'Membaca , Travelling', 'aktif', 'biasa', 1, 4, '2011-10-07 17:00:00'),
(11168, '', 'Iyan Hanafi Van Tony', 'Sleman', '1993-08-14', 'Ngaglik Rt 2/48 Ch Sleman Sleman Yk', '55564', 'DIY', 'Sleman', 'Yogyakarta', '', '0', '081904007743', 'iysn.hsnsfi@yahoo.com', 'laki-laki', 'Indonesia', 'Travelling', 'aktif', 'biasa', 1, 4, '2012-06-21 17:00:00'),
(11169, '', 'Shella Ayu Soraya', 'Surakarta', '1993-06-25', 'C.Simanjuntak Terban', '', '', '', 'Yogyakarta', '', '0', '085747510649', 'cowon_revolution@yahoo.co', 'laki-laki', 'Indonesia', 'Membaca\n', 'aktif', 'biasa', 1, 4, '2012-11-07 17:00:00'),
(11170, '', 'Sri Hartati', 'Temanggung', '1994-01-23', 'Karang Malang Blok C5/99', '', 'DIY', '', 'Yogyakarta', '', '0', '08562593995', 'Titagea@Rocketmail.Com', 'perempuan', 'Indonesia', 'Fotografi', 'aktif', 'biasa', 1, 4, '2012-06-21 17:00:00'),
(11171, '', 'Ahmad Wahyu Ilahi', 'Serang', '1993-08-07', 'Sendowo Blok C No 72', '', 'DIY', '', 'Yogyakarta', '', '0', '08988631933', 'wahyuapofokin@gmail.com', 'laki-laki', 'Indonesia', 'Bersepeda,Jogging Main Komputer\n', 'aktif', 'biasa', 1, 4, '2012-06-21 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE IF NOT EXISTS `angsuran` (
  `id_angsuran` int(11) NOT NULL AUTO_INCREMENT,
  `id_pinjaman` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_angsuran`),
  KEY `FK_angsuran` (`id_pinjaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `id_pinjaman`, `tanggal`, `value`) VALUES
(1, 7, '2013-01-14', 500000),
(2, 7, '2013-01-19', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_simpanan`
--

CREATE TABLE IF NOT EXISTS `jenis_simpanan` (
  `id_jenis_simpanan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_simpanan` varchar(25) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_simpanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jenis_simpanan`
--

INSERT INTO `jenis_simpanan` (`id_jenis_simpanan`, `jenis_simpanan`, `value`) VALUES
(1, 'simpanan pokok', 10000),
(2, 'simpanan wajib', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `status_pendidikan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `status_pendidikan`) VALUES
(1, 'Tidak/Belum Sekolah'),
(2, 'SD/Sederajat'),
(3, 'SMP/Sederajat'),
(4, 'SMA/Sederajat'),
(5, 'Diploma I/II'),
(6, 'Diploma III'),
(7, 'Strata I'),
(8, 'Strata II'),
(9, 'Strata III');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT,
  `nia` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pinjaman`),
  KEY `FK_nia_pinjaman` (`nia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `nia`, `tanggal`, `value`) VALUES
(7, 3401, '2013-01-14', 2000000),
(9, 11164, '2013-01-19', 4500000),
(10, 11163, '2013-01-19', 1500000),
(11, 11165, '2013-01-19', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE IF NOT EXISTS `simpanan` (
  `id_simpanan` int(11) NOT NULL AUTO_INCREMENT,
  `nia` int(11) DEFAULT NULL,
  `id_jenis_simpanan` int(11) NOT NULL,
  `bulan` char(2) DEFAULT NULL,
  `tahun` char(2) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_simpanan`),
  KEY `FK_nia_simpanan` (`nia`),
  KEY `FK_id_jenis_simpanan` (`id_jenis_simpanan`),
  KEY `FK_id_user_simpanan` (`tahun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `nia`, `id_jenis_simpanan`, `bulan`, `tahun`, `tanggal`) VALUES
(9, 3401, 2, '02', '13', '2013-01-14 02:47:13'),
(10, 3401, 2, '03', '13', '2013-01-14 02:47:13'),
(11, 3401, 2, '12', '13', '2013-01-14 05:30:10'),
(12, 3401, 1, '01', '13', '2013-01-14 07:06:22'),
(13, 3401, 2, '01', '13', '2013-01-14 13:39:54'),
(14, 3401, 2, '02', '13', '2013-01-14 13:39:54'),
(15, 11163, 1, '03', '13', '2013-01-18 08:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `status_perkawinan`
--

CREATE TABLE IF NOT EXISTS `status_perkawinan` (
  `id_perkawinan` int(11) NOT NULL AUTO_INCREMENT,
  `status_perkawinan` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_perkawinan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`id_perkawinan`, `status_perkawinan`) VALUES
(1, 'belum kawin'),
(2, 'kawin'),
(3, 'janda'),
(4, 'duda');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` char(12) DEFAULT NULL,
  `status` enum('admin','petugas') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `no_hp`, `status`) VALUES
(1, 'yudha', 'c63bd52776dbe04a7c37d9240a2fecc7fb80e91a', 'yudha wirawan sakti', '981041814747', 'admin'),
(8, 'Aluna', '57806bf62db7f36fbef8becfd7a5dedf0149d016', 'Aluna Sagita Gutawa', '085643932009', 'petugas'),
(9, 'Tora', 'b6cc601e1ff015775bbb0726ed6bb85a63475726', 'Tora Sudiro Cuk', '098736172903', 'admin'),
(10, 'andre', 'df211ccdd94a63e0bcb9e6ae427a249484a49d60', 'andre basa', '09876535277', 'admin'),
(11, 'Hinata', '59889052764d0a2a61058a977164bf02bef3d2d8', 'Hinata Matsuyama', '09876535209', 'petugas');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vanggota`
--
CREATE TABLE IF NOT EXISTS `vanggota` (
`nia` int(11)
,`no_ktp` varchar(25)
,`nama` varchar(100)
,`tempat_lahir` varchar(50)
,`tgl_lahir` date
,`alamat_lengkap` varchar(250)
,`kode_pos` char(5)
,`provinsi` varchar(25)
,`kabupaten` varchar(25)
,`kota` varchar(25)
,`no_npwp` varchar(50)
,`telp` char(12)
,`hp` char(12)
,`email` varchar(25)
,`jenis_kelamin` enum('laki-laki','perempuan')
,`warga_negara` varchar(25)
,`hobi` text
,`status` enum('aktif','nonaktif')
,`jenis_anggota` enum('biasa','khusus')
,`status_perkawinan` varchar(25)
,`status_pendidikan` varchar(25)
,`tanggal_masuk` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vangsuran`
--
CREATE TABLE IF NOT EXISTS `vangsuran` (
`id_angsuran` int(11)
,`id_pinjaman` int(11)
,`nia` int(11)
,`nama` varchar(100)
,`angsuran` int(11)
,`pinjaman` int(11)
,`total` decimal(33,0)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vpinjaman`
--
CREATE TABLE IF NOT EXISTS `vpinjaman` (
`id_pinjaman` int(11)
,`nia` int(11)
,`nama` varchar(100)
,`tanggal` date
,`value` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vsimpanan`
--
CREATE TABLE IF NOT EXISTS `vsimpanan` (
`id_simpanan` int(11)
,`nia` int(11)
,`bulan` char(2)
,`tahun` char(2)
,`nama` varchar(100)
,`jenis_simpanan` varchar(25)
,`tanggal` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vsimpanan_pokok`
--
CREATE TABLE IF NOT EXISTS `vsimpanan_pokok` (
`id_jenis_simpanan` int(11)
,`jenis_simpanan` varchar(25)
,`value` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vsimpanan_wajib`
--
CREATE TABLE IF NOT EXISTS `vsimpanan_wajib` (
`id_jenis_simpanan` int(11)
,`jenis_simpanan` varchar(25)
,`value` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `vanggota`
--
DROP TABLE IF EXISTS `vanggota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vanggota` AS (select `a`.`nia` AS `nia`,`a`.`no_ktp` AS `no_ktp`,`a`.`nama` AS `nama`,`a`.`tempat_lahir` AS `tempat_lahir`,`a`.`tgl_lahir` AS `tgl_lahir`,`a`.`alamat_lengkap` AS `alamat_lengkap`,`a`.`kode_pos` AS `kode_pos`,`a`.`provinsi` AS `provinsi`,`a`.`kabupaten` AS `kabupaten`,`a`.`kota` AS `kota`,`a`.`no_npwp` AS `no_npwp`,`a`.`telp` AS `telp`,`a`.`hp` AS `hp`,`a`.`email` AS `email`,`a`.`jenis_kelamin` AS `jenis_kelamin`,`a`.`warga_negara` AS `warga_negara`,`a`.`hobi` AS `hobi`,`a`.`status` AS `status`,`a`.`jenis_anggota` AS `jenis_anggota`,`b`.`status_perkawinan` AS `status_perkawinan`,`c`.`status_pendidikan` AS `status_pendidikan`,`a`.`tanggal_masuk` AS `tanggal_masuk` from ((`anggota` `a` join `status_perkawinan` `b`) join `pendidikan` `c`) where ((`b`.`id_perkawinan` = `a`.`id_perkawinan`) and (`c`.`id_pendidikan` = `a`.`id_pendidikan`)));

-- --------------------------------------------------------

--
-- Structure for view `vangsuran`
--
DROP TABLE IF EXISTS `vangsuran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vangsuran` AS (select `a`.`id_angsuran` AS `id_angsuran`,`b`.`id_pinjaman` AS `id_pinjaman`,`c`.`nia` AS `nia`,`c`.`nama` AS `nama`,`a`.`value` AS `angsuran`,`b`.`value` AS `pinjaman`,sum((`b`.`value` - `a`.`value`)) AS `total`,`a`.`tanggal` AS `tanggal` from ((`angsuran` `a` join `pinjaman` `b`) join `anggota` `c`) where ((`a`.`id_pinjaman` = `b`.`id_pinjaman`) and (`c`.`nia` = `b`.`nia`)));

-- --------------------------------------------------------

--
-- Structure for view `vpinjaman`
--
DROP TABLE IF EXISTS `vpinjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vpinjaman` AS (select `a`.`id_pinjaman` AS `id_pinjaman`,`a`.`nia` AS `nia`,`b`.`nama` AS `nama`,`a`.`tanggal` AS `tanggal`,`a`.`value` AS `value` from (`pinjaman` `a` join `anggota` `b`) where (`a`.`nia` = `b`.`nia`));

-- --------------------------------------------------------

--
-- Structure for view `vsimpanan`
--
DROP TABLE IF EXISTS `vsimpanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vsimpanan` AS (select `a`.`id_simpanan` AS `id_simpanan`,`a`.`nia` AS `nia`,`a`.`bulan` AS `bulan`,`a`.`tahun` AS `tahun`,`b`.`nama` AS `nama`,`c`.`jenis_simpanan` AS `jenis_simpanan`,`a`.`tanggal` AS `tanggal` from ((`simpanan` `a` join `anggota` `b`) join `jenis_simpanan` `c`) where ((`a`.`nia` = `b`.`nia`) and (`a`.`id_jenis_simpanan` = `c`.`id_jenis_simpanan`)));

-- --------------------------------------------------------

--
-- Structure for view `vsimpanan_pokok`
--
DROP TABLE IF EXISTS `vsimpanan_pokok`;

CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vsimpanan_pokok` AS (select `jenis_simpanan`.`id_jenis_simpanan` AS `id_jenis_simpanan`,`jenis_simpanan`.`jenis_simpanan` AS `jenis_simpanan`,`jenis_simpanan`.`value` AS `value` from `jenis_simpanan` where (`jenis_simpanan`.`id_jenis_simpanan` = 1));

-- --------------------------------------------------------

--
-- Structure for view `vsimpanan_wajib`
--
DROP TABLE IF EXISTS `vsimpanan_wajib`;

CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vsimpanan_wajib` AS (select `jenis_simpanan`.`id_jenis_simpanan` AS `id_jenis_simpanan`,`jenis_simpanan`.`jenis_simpanan` AS `jenis_simpanan`,`jenis_simpanan`.`value` AS `value` from `jenis_simpanan` where (`jenis_simpanan`.`id_jenis_simpanan` = 2));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `FK_id_perkawinan_anggota` FOREIGN KEY (`id_perkawinan`) REFERENCES `status_perkawinan` (`id_perkawinan`),
  ADD CONSTRAINT `FK_pendidikan` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`) ON DELETE NO ACTION;

--
-- Constraints for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `FK_angsuran` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `FK_nia_pinjaman` FOREIGN KEY (`nia`) REFERENCES `anggota` (`nia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `FK_id_jenis_simpanan` FOREIGN KEY (`id_jenis_simpanan`) REFERENCES `jenis_simpanan` (`id_jenis_simpanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_nia_simpanan` FOREIGN KEY (`nia`) REFERENCES `anggota` (`nia`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
