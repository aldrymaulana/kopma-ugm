/*
SQLyog Ultimate v8.71 
MySQL - 5.5.16 : Database - kopma
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kopma` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kopma`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
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
  KEY `FK_pendidikan` (`id_pendidikan`),
  CONSTRAINT `FK_id_perkawinan_anggota` FOREIGN KEY (`id_perkawinan`) REFERENCES `status_perkawinan` (`id_perkawinan`),
  CONSTRAINT `FK_pendidikan` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`nia`,`no_ktp`,`nama`,`tempat_lahir`,`tgl_lahir`,`alamat_lengkap`,`kode_pos`,`provinsi`,`kabupaten`,`kota`,`no_npwp`,`telp`,`hp`,`email`,`jenis_kelamin`,`warga_negara`,`hobi`,`status`,`jenis_anggota`,`id_perkawinan`,`id_pendidikan`,`tanggal_masuk`) values (11161,'','Cakka Pandu Himadewa','Tangerang','1993-06-18','Jakal KM 4,5 Yk','','DIY','','Yogyakarta','','0','085780379516','panducakra@gmail.com','laki-laki','Indonesia','Membaca','aktif','biasa',1,4,'2012-06-21 17:00:00'),(11162,'','Elly Cahyawati','Yogyakarta','1993-01-14','Wirogunan Mg Ii/682 Yk','','DIY','','Yogyakarta','','0','087839260712','elly_cahya@yahoo.com','perempuan','Indonesia','Membaca','aktif','biasa',1,4,'2012-06-21 17:00:00'),(11163,'','Adi Supriyono','Boyolali','1993-03-19','janti TR 04/02  CTT Depok, Sleman','55564','DIY','Sleman','Yogyakarta','','0','083877440780','adisupriyono@rocketmail.c','laki-laki','Indonesia','Olahraga','aktif','biasa',1,4,'2013-01-16 17:00:00'),(11164,'','Muhammad FajriI Saptaji','Sleman','1995-09-11','Perum Margorejo Asri Tempel Sleman','55564','DIY','Sleman','Yogyakarta','','0','087838303183','fajrisaptaji@gmail.com','laki-laki','Indonesia','Membaca\n','aktif','biasa',1,4,'2013-01-16 17:00:00'),(11165,'','Ali Fian Joni Nuryanto','Banyumas','1993-07-22','Pogung Kidul RT 06/46','55564','DIY','Bantul','Yogyakarta','','0','085693139139','jinirikudo@gmail.vom','laki-laki','Indonesia','BLOGGING\n','aktif','biasa',1,4,'2013-01-16 17:00:00'),(11166,'','Ayu Yulfiana','Tegal','1989-07-12','Jakal KM 5,2 Yk','55564','DIY','Sleman','Yogyakarta','','0','087839109758','ayuyulfiana@yahoo.com','perempuan','Indonesia','Membaca\n','aktif','biasa',1,4,'2012-08-05 17:00:00'),(11167,'','Raesita Eryanasari','Boyolali','1991-07-13','SDA','55564','DIY','Sleman','Yogyakarta','','0','081946468886','raezh_poenya@yahoo.co.id','perempuan','Indonesia','Membaca , Travelling','aktif','biasa',1,4,'2011-10-07 17:00:00'),(11168,'','Iyan Hanafi Van Tony','Sleman','1993-08-14','Ngaglik Rt 2/48 Ch Sleman Sleman Yk','55564','DIY','Sleman','Yogyakarta','','0','081904007743','iysn.hsnsfi@yahoo.com','laki-laki','Indonesia','Travelling','aktif','biasa',1,4,'2012-06-21 17:00:00'),(11169,'','Shella Ayu Soraya','Surakarta','1993-06-25','C.Simanjuntak Terban','','','','Yogyakarta','','0','085747510649','cowon_revolution@yahoo.co','laki-laki','Indonesia','Membaca\n','aktif','biasa',1,4,'2012-11-07 17:00:00'),(11170,'','Sri Hartati','Temanggung','1994-01-23','Karang Malang Blok C5/99','','DIY','','Yogyakarta','','0','08562593995','Titagea@Rocketmail.Com','perempuan','Indonesia','Fotografi','aktif','biasa',1,4,'2012-06-21 17:00:00');

/*Table structure for table `angsuran` */

DROP TABLE IF EXISTS `angsuran`;

CREATE TABLE `angsuran` (
  `id_angsuran` int(11) NOT NULL AUTO_INCREMENT,
  `id_pinjaman` int(11) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `value` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_angsuran`),
  KEY `FK_angsuran` (`id_pinjaman`),
  CONSTRAINT `FK_angsuran` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `angsuran` */

insert  into `angsuran`(`id_angsuran`,`id_pinjaman`,`tanggal`,`value`,`username`) values (1,1,'2013-01-23 11:02:17',50000,'yudha'),(2,1,'2013-01-23 12:33:08',50000,'yudha'),(3,1,'2013-01-23 13:03:58',500000,'yudha'),(4,2,'2013-01-23 13:43:34',50000,'diego'),(5,2,'2013-01-23 13:44:06',250000,'yudha');

/*Table structure for table `jenis_simpanan` */

DROP TABLE IF EXISTS `jenis_simpanan`;

CREATE TABLE `jenis_simpanan` (
  `id_jenis_simpanan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_simpanan` varchar(25) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_simpanan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_simpanan` */

insert  into `jenis_simpanan`(`id_jenis_simpanan`,`jenis_simpanan`,`value`) values (1,'simpanan pokok',10000),(2,'simpanan wajib',3500);

/*Table structure for table `nota_simpanan` */

DROP TABLE IF EXISTS `nota_simpanan`;

CREATE TABLE `nota_simpanan` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `nia` int(11) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `anggota_nota_simpanan` (`nia`),
  KEY `user_nota_simpanan` (`username`),
  CONSTRAINT `user_nota_simpanan` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON UPDATE CASCADE,
  CONSTRAINT `anggota_nota_simpanan` FOREIGN KEY (`nia`) REFERENCES `anggota` (`nia`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `nota_simpanan` */

insert  into `nota_simpanan`(`id_nota`,`nia`,`tanggal`,`username`) values (1,11161,'2013-01-28 21:01:18','yudha'),(2,11162,'2013-01-28 22:25:52','yudha'),(3,11161,'2013-01-28 22:25:58','yudha');

/*Table structure for table `pendidikan` */

DROP TABLE IF EXISTS `pendidikan`;

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `status_pendidikan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan` */

insert  into `pendidikan`(`id_pendidikan`,`status_pendidikan`) values (1,'Tidak/Belum Sekolah'),(2,'SD/Sederajat'),(3,'SMP/Sederajat'),(4,'SMA/Sederajat'),(5,'Diploma I/II'),(6,'Diploma III'),(7,'Strata I'),(8,'Strata II'),(9,'Strata III');

/*Table structure for table `pinjaman` */

DROP TABLE IF EXISTS `pinjaman`;

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT,
  `nia` int(11) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `value` int(11) DEFAULT NULL,
  `sisa` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pinjaman`),
  KEY `FK_nia_pinjaman` (`nia`),
  CONSTRAINT `FK_nia_pinjaman` FOREIGN KEY (`nia`) REFERENCES `anggota` (`nia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `pinjaman` */

insert  into `pinjaman`(`id_pinjaman`,`nia`,`tanggal`,`value`,`sisa`,`username`) values (1,11163,'2013-01-23 10:25:32',2000000,1450000,'diego'),(2,11164,'2013-01-23 10:25:47',1000000,750000,'diego'),(3,11165,'2013-01-23 10:26:02',2000000,2000000,'diego'),(4,11166,'2013-01-23 10:26:24',3000000,3000000,'diego'),(5,11168,'2013-01-23 10:26:44',2500000,2500000,'diego');

/*Table structure for table `simpanan` */

DROP TABLE IF EXISTS `simpanan`;

CREATE TABLE `simpanan` (
  `id_simpanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_nota` int(11) DEFAULT NULL,
  `id_jenis_simpanan` int(11) NOT NULL,
  `bulan` char(2) DEFAULT NULL,
  `tahun` char(4) DEFAULT NULL,
  PRIMARY KEY (`id_simpanan`),
  KEY `FK_id_jenis_simpanan` (`id_jenis_simpanan`),
  KEY `FK_id_user_simpanan` (`tahun`),
  KEY `nota_simpanan` (`id_nota`),
  CONSTRAINT `nota_simpanan` FOREIGN KEY (`id_nota`) REFERENCES `nota_simpanan` (`id_nota`) ON UPDATE CASCADE,
  CONSTRAINT `FK_id_jenis_simpanan` FOREIGN KEY (`id_jenis_simpanan`) REFERENCES `jenis_simpanan` (`id_jenis_simpanan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `simpanan` */

insert  into `simpanan`(`id_simpanan`,`id_nota`,`id_jenis_simpanan`,`bulan`,`tahun`) values (1,1,2,'01','2013'),(2,1,2,'02','2013'),(3,2,1,NULL,'2013'),(4,3,1,NULL,'2013');

/*Table structure for table `status_perkawinan` */

DROP TABLE IF EXISTS `status_perkawinan`;

CREATE TABLE `status_perkawinan` (
  `id_perkawinan` int(11) NOT NULL AUTO_INCREMENT,
  `status_perkawinan` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_perkawinan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `status_perkawinan` */

insert  into `status_perkawinan`(`id_perkawinan`,`status_perkawinan`) values (1,'belum kawin'),(2,'kawin'),(3,'janda'),(4,'duda');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` char(12) DEFAULT NULL,
  `status` enum('admin','petugas') DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `usr` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama`,`no_hp`,`status`) values (1,'yudha','c63bd52776dbe04a7c37d9240a2fecc7fb80e91a','yudha wirawan sakti','981041814747','admin'),(8,'Aluna','11c7a9d4c53eef0caf1b5eb4281cd37a1f358ef3','Aluna Sagita Gutawa','085643932009','petugas'),(9,'Tora','b6cc601e1ff015775bbb0726ed6bb85a63475726','Tora Sudiro Cuk','098736172903','admin'),(10,'andre','df211ccdd94a63e0bcb9e6ae427a249484a49d60','andre basa','09876535277','admin'),(11,'Hinata','59889052764d0a2a61058a977164bf02bef3d2d8','Hinata Matsuyama','09876535209','petugas'),(12,'diego','df211ccdd94a63e0bcb9e6ae427a249484a49d60','Diego Milito','081672839901','petugas');

/*Table structure for table `vanggota` */

DROP TABLE IF EXISTS `vanggota`;

/*!50001 DROP VIEW IF EXISTS `vanggota` */;
/*!50001 DROP TABLE IF EXISTS `vanggota` */;

/*!50001 CREATE TABLE  `vanggota`(
 `nia` int(11) ,
 `no_ktp` varchar(25) ,
 `nama` varchar(100) ,
 `tempat_lahir` varchar(50) ,
 `tgl_lahir` date ,
 `alamat_lengkap` varchar(250) ,
 `kode_pos` char(5) ,
 `provinsi` varchar(25) ,
 `kabupaten` varchar(25) ,
 `kota` varchar(25) ,
 `no_npwp` varchar(50) ,
 `telp` char(12) ,
 `hp` char(12) ,
 `email` varchar(25) ,
 `jenis_kelamin` enum('laki-laki','perempuan') ,
 `warga_negara` varchar(25) ,
 `hobi` text ,
 `status` enum('aktif','nonaktif') ,
 `jenis_anggota` enum('biasa','khusus') ,
 `id_perkawinan` int(11) ,
 `status_perkawinan` varchar(25) ,
 `id_pendidikan` int(11) ,
 `status_pendidikan` varchar(25) ,
 `tanggal_masuk` timestamp 
)*/;

/*Table structure for table `vangsuran` */

DROP TABLE IF EXISTS `vangsuran`;

/*!50001 DROP VIEW IF EXISTS `vangsuran` */;
/*!50001 DROP TABLE IF EXISTS `vangsuran` */;

/*!50001 CREATE TABLE  `vangsuran`(
 `id_angsuran` int(11) ,
 `id_pinjaman` int(11) ,
 `nia` int(11) ,
 `nama` varchar(100) ,
 `pokok` int(11) ,
 `mengansur` int(11) ,
 `username` varchar(50) ,
 `tanggal` timestamp 
)*/;

/*Table structure for table `vnota` */

DROP TABLE IF EXISTS `vnota`;

/*!50001 DROP VIEW IF EXISTS `vnota` */;
/*!50001 DROP TABLE IF EXISTS `vnota` */;

/*!50001 CREATE TABLE  `vnota`(
 `id_nota` int(11) ,
 `nia` int(11) ,
 `nama` varchar(100) ,
 `id_simpanan` int(11) ,
 `id_jenis_simpanan` int(11) ,
 `jenis_simpanan` varchar(25) ,
 `VALUE` int(11) ,
 `bulan` char(2) ,
 `tahun` char(4) ,
 `tanggal` timestamp ,
 `username` varchar(50) 
)*/;

/*Table structure for table `vpinjaman` */

DROP TABLE IF EXISTS `vpinjaman`;

/*!50001 DROP VIEW IF EXISTS `vpinjaman` */;
/*!50001 DROP TABLE IF EXISTS `vpinjaman` */;

/*!50001 CREATE TABLE  `vpinjaman`(
 `id_pinjaman` int(11) ,
 `nia` int(11) ,
 `nama` varchar(100) ,
 `tanggal` timestamp ,
 `value` int(11) ,
 `sisa` int(11) 
)*/;

/*Table structure for table `vsaldo` */

DROP TABLE IF EXISTS `vsaldo`;

/*!50001 DROP VIEW IF EXISTS `vsaldo` */;
/*!50001 DROP TABLE IF EXISTS `vsaldo` */;

/*!50001 CREATE TABLE  `vsaldo`(
 `id_simpanan` int(11) ,
 `nia` int(11) ,
 `nama` varchar(100) ,
 `saldo` decimal(32,0) 
)*/;

/*Table structure for table `vsimpanan` */

DROP TABLE IF EXISTS `vsimpanan`;

/*!50001 DROP VIEW IF EXISTS `vsimpanan` */;
/*!50001 DROP TABLE IF EXISTS `vsimpanan` */;

/*!50001 CREATE TABLE  `vsimpanan`(
 `id_simpanan` int(11) ,
 `nia` int(11) ,
 `nama` varchar(100) ,
 `jenis_simpanan` varchar(25) ,
 `bulan` char(2) ,
 `tahun` char(4) 
)*/;

/*Table structure for table `vsimpanan_pokok` */

DROP TABLE IF EXISTS `vsimpanan_pokok`;

/*!50001 DROP VIEW IF EXISTS `vsimpanan_pokok` */;
/*!50001 DROP TABLE IF EXISTS `vsimpanan_pokok` */;

/*!50001 CREATE TABLE  `vsimpanan_pokok`(
 `id_jenis_simpanan` int(11) ,
 `jenis_simpanan` varchar(25) ,
 `value` int(11) 
)*/;

/*Table structure for table `vsimpanan_wajib` */

DROP TABLE IF EXISTS `vsimpanan_wajib`;

/*!50001 DROP VIEW IF EXISTS `vsimpanan_wajib` */;
/*!50001 DROP TABLE IF EXISTS `vsimpanan_wajib` */;

/*!50001 CREATE TABLE  `vsimpanan_wajib`(
 `id_jenis_simpanan` int(11) ,
 `jenis_simpanan` varchar(25) ,
 `value` int(11) 
)*/;

/*View structure for view vanggota */

/*!50001 DROP TABLE IF EXISTS `vanggota` */;
/*!50001 DROP VIEW IF EXISTS `vanggota` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vanggota` AS (select `a`.`nia` AS `nia`,`a`.`no_ktp` AS `no_ktp`,`a`.`nama` AS `nama`,`a`.`tempat_lahir` AS `tempat_lahir`,`a`.`tgl_lahir` AS `tgl_lahir`,`a`.`alamat_lengkap` AS `alamat_lengkap`,`a`.`kode_pos` AS `kode_pos`,`a`.`provinsi` AS `provinsi`,`a`.`kabupaten` AS `kabupaten`,`a`.`kota` AS `kota`,`a`.`no_npwp` AS `no_npwp`,`a`.`telp` AS `telp`,`a`.`hp` AS `hp`,`a`.`email` AS `email`,`a`.`jenis_kelamin` AS `jenis_kelamin`,`a`.`warga_negara` AS `warga_negara`,`a`.`hobi` AS `hobi`,`a`.`status` AS `status`,`a`.`jenis_anggota` AS `jenis_anggota`,`b`.`id_perkawinan` AS `id_perkawinan`,`b`.`status_perkawinan` AS `status_perkawinan`,`c`.`id_pendidikan` AS `id_pendidikan`,`c`.`status_pendidikan` AS `status_pendidikan`,`a`.`tanggal_masuk` AS `tanggal_masuk` from ((`anggota` `a` join `status_perkawinan` `b`) join `pendidikan` `c`) where ((`b`.`id_perkawinan` = `a`.`id_perkawinan`) and (`c`.`id_pendidikan` = `a`.`id_pendidikan`))) */;

/*View structure for view vangsuran */

/*!50001 DROP TABLE IF EXISTS `vangsuran` */;
/*!50001 DROP VIEW IF EXISTS `vangsuran` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vangsuran` AS (select `a`.`id_angsuran` AS `id_angsuran`,`a`.`id_pinjaman` AS `id_pinjaman`,`b`.`nia` AS `nia`,`c`.`nama` AS `nama`,`b`.`value` AS `pokok`,`a`.`value` AS `mengansur`,`a`.`username` AS `username`,`a`.`tanggal` AS `tanggal` from ((`angsuran` `a` join `pinjaman` `b` on((`a`.`id_pinjaman` = `b`.`id_pinjaman`))) join `anggota` `c` on((`b`.`nia` = `c`.`nia`)))) */;

/*View structure for view vnota */

/*!50001 DROP TABLE IF EXISTS `vnota` */;
/*!50001 DROP VIEW IF EXISTS `vnota` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vnota` AS (select `a`.`id_nota` AS `id_nota`,`a`.`nia` AS `nia`,`c`.`nama` AS `nama`,`b`.`id_simpanan` AS `id_simpanan`,`b`.`id_jenis_simpanan` AS `id_jenis_simpanan`,`e`.`jenis_simpanan` AS `jenis_simpanan`,`e`.`value` AS `VALUE`,`b`.`bulan` AS `bulan`,`b`.`tahun` AS `tahun`,`a`.`tanggal` AS `tanggal`,`a`.`username` AS `username` from ((((`nota_simpanan` `a` join `simpanan` `b` on((`a`.`id_nota` = `b`.`id_nota`))) join `anggota` `c` on((`a`.`nia` = `c`.`nia`))) join `user` `d` on((`a`.`username` = `d`.`username`))) join `jenis_simpanan` `e` on((`b`.`id_jenis_simpanan` = `e`.`id_jenis_simpanan`)))) */;

/*View structure for view vpinjaman */

/*!50001 DROP TABLE IF EXISTS `vpinjaman` */;
/*!50001 DROP VIEW IF EXISTS `vpinjaman` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vpinjaman` AS (select `a`.`id_pinjaman` AS `id_pinjaman`,`a`.`nia` AS `nia`,`b`.`nama` AS `nama`,`a`.`tanggal` AS `tanggal`,`a`.`value` AS `value`,`a`.`sisa` AS `sisa` from (`pinjaman` `a` join `anggota` `b`) where (`a`.`nia` = `b`.`nia`)) */;

/*View structure for view vsaldo */

/*!50001 DROP TABLE IF EXISTS `vsaldo` */;
/*!50001 DROP VIEW IF EXISTS `vsaldo` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vsaldo` AS (select `a`.`id_simpanan` AS `id_simpanan`,`c`.`nia` AS `nia`,`d`.`nama` AS `nama`,sum(`b`.`value`) AS `saldo` from (((`simpanan` `a` join `jenis_simpanan` `b` on((`a`.`id_jenis_simpanan` = `b`.`id_jenis_simpanan`))) join `nota_simpanan` `c` on((`a`.`id_nota` = `c`.`id_nota`))) join `anggota` `d` on((`d`.`nia` = `c`.`nia`))) group by `c`.`nia`) */;

/*View structure for view vsimpanan */

/*!50001 DROP TABLE IF EXISTS `vsimpanan` */;
/*!50001 DROP VIEW IF EXISTS `vsimpanan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vsimpanan` AS (select `a`.`id_simpanan` AS `id_simpanan`,`d`.`nia` AS `nia`,`d`.`nama` AS `nama`,`c`.`jenis_simpanan` AS `jenis_simpanan`,`a`.`bulan` AS `bulan`,`a`.`tahun` AS `tahun` from (((`simpanan` `a` join `nota_simpanan` `b` on((`a`.`id_nota` = `b`.`id_nota`))) join `jenis_simpanan` `c` on((`a`.`id_simpanan` = `c`.`id_jenis_simpanan`))) join `anggota` `d` on((`b`.`nia` = `d`.`nia`)))) */;

/*View structure for view vsimpanan_pokok */

/*!50001 DROP TABLE IF EXISTS `vsimpanan_pokok` */;
/*!50001 DROP VIEW IF EXISTS `vsimpanan_pokok` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vsimpanan_pokok` AS (select `jenis_simpanan`.`id_jenis_simpanan` AS `id_jenis_simpanan`,`jenis_simpanan`.`jenis_simpanan` AS `jenis_simpanan`,`jenis_simpanan`.`value` AS `value` from `jenis_simpanan` where (`jenis_simpanan`.`id_jenis_simpanan` = 1)) */;

/*View structure for view vsimpanan_wajib */

/*!50001 DROP TABLE IF EXISTS `vsimpanan_wajib` */;
/*!50001 DROP VIEW IF EXISTS `vsimpanan_wajib` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`kopma`@`localhost` SQL SECURITY DEFINER VIEW `vsimpanan_wajib` AS (select `jenis_simpanan`.`id_jenis_simpanan` AS `id_jenis_simpanan`,`jenis_simpanan`.`jenis_simpanan` AS `jenis_simpanan`,`jenis_simpanan`.`value` AS `value` from `jenis_simpanan` where (`jenis_simpanan`.`id_jenis_simpanan` = 2)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
