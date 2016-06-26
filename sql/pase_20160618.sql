/*
SQLyog Community v12.15 (64 bit)
MySQL - 5.5.49 : Database - admin_tugruero
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`admin_tugruero` /*!40100 DEFAULT CHARACTER SET utf8 */;

/*Table structure for table `pase_20160618` */

DROP TABLE IF EXISTS `pase_20160618`;

CREATE TABLE `pase_20160618` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_users` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `second_name` varchar(45) DEFAULT NULL,
  `first_last_name` varchar(45) NOT NULL,
  `second_last_name` varchar(45) DEFAULT NULL,
  `nationality` varchar(1) NOT NULL,
  `document` varchar(45) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `phone1` varchar(45) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `certificado_file` varchar(100) NOT NULL,
  `document_file` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pase_20160618` */

insert  into `pase_20160618`(`id`,`id_users`,`first_name`,`second_name`,`first_last_name`,`second_last_name`,`nationality`,`document`,`birthdate`,`gender`,`phone`,`phone1`,`image`,`certificado_file`,`document_file`,`date_created`,`date_updated`) values 
(584,591,'MIGUEL','','HERRERA','','V','V-17960866','0000-00-00','M','4127230418','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(585,592,'MARCELO','','ARENALES','','V','V-126309755','0000-00-00','M','4147215222','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(586,593,'SAUL','','SEPULVEDA','','V','V-14046570','0000-00-00','M','4166156628','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(587,594,'DANIEL','','SANDIS','','V','V-11077085','0000-00-00','M','4245552768','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(588,595,'JEAN','','AVILA','','V','V-16923468','0000-00-00','M','4129961201','4141010815','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(589,596,'JHIN','','GARCIA','','V','V-112633656','0000-00-00','M','4247073024','2763960276','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(590,597,'GERMAN','','GUZMAN','','V','V-11163866','0000-00-00','M','4140898568','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(591,598,'MARCO','','CONTRERAS','','V','V-241511304','0000-00-00','M','4167960613','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(592,599,'MANUEL','','ZOLLO','','V','V-17276293','0000-00-00','M','4145418660','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(593,600,'ANDRES','','CAMERON','','V','V-208597996','0000-00-00','M','4149665423','04146847603','','','','2016-06-18 18:38:48','2016-06-18 18:38:48'),
(594,601,'DAVID','','ANTICA','','V','V-178602833','0000-00-00','M','4145346581','','','','','2016-06-18 18:38:48','2016-06-18 18:38:48');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
