/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.5.39 : Database - psb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`psb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `psb`;

/*Table structure for table `calon` */

DROP TABLE IF EXISTS `calon`;

CREATE TABLE `calon` (
  `no_pend` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nilai_ind` float(5,2) NOT NULL,
  `nilai_ing` float(5,2) NOT NULL,
  `nilai_mtk` float(5,2) NOT NULL,
  `nilai_ipa` float(5,2) NOT NULL,
  `prestasi` float(5,2) NOT NULL DEFAULT '0.00',
  `thn_ajar_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT '1',
  `tanggal` date DEFAULT NULL,
  `status` smallint(6) DEFAULT '0',
  `status_diterima` smallint(6) DEFAULT '0',
  PRIMARY KEY (`no_pend`),
  KEY `FK_calon` (`user_id`),
  KEY `FK_calon_th_ajar` (`thn_ajar_id`),
  CONSTRAINT `FK_calon` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_calon_th_ajar` FOREIGN KEY (`thn_ajar_id`) REFERENCES `thn_ajar` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16002 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=5 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `calon` */

insert  into `calon`(no_pend,nama,alamat,jenis_kelamin,tanggal_lahir,asal_sekolah,nilai_ind,nilai_ing,nilai_mtk,nilai_ipa,prestasi,thn_ajar_id,user_id,tanggal,status,status_diterima) values (16001,'Jihar Al Gifari','Jl.Celeban UH3\\543','Laki-Laki','1997-06-28','SMA 1 Ko',90.00,90.00,90.00,90.00,0.00,NULL,1,NULL,0,0);

/*Table structure for table `thn_ajar` */

DROP TABLE IF EXISTS `thn_ajar`;

CREATE TABLE `thn_ajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` char(10) NOT NULL,
  `tanggal_awal_pend` date NOT NULL,
  `tanggal_akhir_pend` date NOT NULL,
  `quota` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `thn_ajar` */

insert  into `thn_ajar`(id,tahun_ajaran,tanggal_awal_pend,tanggal_akhir_pend,quota) values (1,'2016','2016-01-01','2016-02-02',100);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `nama` varchar(15) NOT NULL COMMENT 'nama',
  `nama_lengkap` varchar(50) NOT NULL COMMENT 'nama lengkap',
  `password` varchar(40) NOT NULL COMMENT 'kunci',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT 'status',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(id,nama,nama_lengkap,password,status) values (1,'Jihar','Jihar Al Gifari','jihar12345',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
