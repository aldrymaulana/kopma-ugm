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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nota_simpanan` */

insert  into `nota_simpanan`(`id_nota`,`nia`,`tanggal`,`username`) values (1,11161,'2013-01-28 21:01:18','yudha');

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

insert  into `pinjaman`(`id_pinjaman`,`nia`,`tanggal`,`value`,`sisa`,`username`) values (1,11163,'2013-01-23 10:25:32',2000000,1450000,'diego')