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

/*Table structure for table `pase_20160629` */

DROP TABLE IF EXISTS `pase_20160629`;

CREATE TABLE `pase_20160629` (
  `uno` varchar(50) DEFAULT NULL,
  `tres` varchar(50) DEFAULT NULL,
  `cuatro` varchar(50) DEFAULT NULL,
  `cinco` varchar(50) DEFAULT NULL,
  `seis` varchar(50) DEFAULT NULL,
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

/*Data for the table `pase_20160629` */

insert  into `pase_20160629`(`uno`,`tres`,`cuatro`,`cinco`,`seis`,`id`,`id_users`,`first_name`,`second_name`,`first_last_name`,`second_last_name`,`nationality`,`document`,`birthdate`,`gender`,`phone`,`phone1`,`image`,`certificado_file`,`document_file`,`date_created`,`date_updated`) values 
('4128139321','JONATHAN','CONTRERAS','J-299300616',NULL,641,626,'JONATHAN',NULL,'CONTRERAS',NULL,'V','J-299300616',NULL,'M','4128139321','4128139321','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4148098379','JESUS','CARAVALLO','J-400807638',NULL,642,620,'JESUS',NULL,'CARAVALLO',NULL,'V','J-400807638',NULL,'M','4148098379','4148098379','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4120337997','ALBERT','GUERREO','J-403845042',NULL,643,624,'ALBERT',NULL,'GUERREO',NULL,'V','J-403845042',NULL,'M','4120337997','4120337997','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4242071516','ROICIRYS','HERNADEZ','J-405317809',NULL,644,627,'ROICIRYS',NULL,'HERNADEZ',NULL,'V','J-405317809',NULL,'M','4242071516','4242071516','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4148833394','AUGUSTO','GONZALES','J-405934620',NULL,645,625,'AUGUSTO',NULL,'GONZALES',NULL,'V','J-405934620',NULL,'M','4148833394','4148833394','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4145290629','MOISES','MALVACIA','V-12019003',NULL,646,618,'MOISES',NULL,'MALVACIA',NULL,'V','V-12019003',NULL,'M','4145290629','4145290629','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4145724596','FRANKLIN','ROSARIO','V-13591974',NULL,647,623,'FRANKLIN',NULL,'ROSARIO',NULL,'V','V-13591974',NULL,'M','4145724596','4145724596','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4146386295','MARCELINO','GUDIÑO','V-15589528',NULL,648,621,'MARCELINO',NULL,'GUDIÑO',NULL,'V','V-15589528',NULL,'M','4146386295','4146386295','','','','2016-06-30 06:05:49','2016-06-30 06:05:49'),
('4146110173','ALEJANDRO','MOLERO','V-18396187',NULL,649,619,'ALEJANDRO',NULL,'MOLERO',NULL,'V','V-18396187',NULL,'M','4146110173','4146110173','','','','2016-06-30 06:05:49','2016-06-30 06:05:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
