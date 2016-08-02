/*
SQLyog Community v12.15 (64 bit)
MySQL - 5.5.49-0ubuntu0.14.04.1 : Database - admin_tugruero
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`admin_tugruero` /*!40100 DEFAULT CHARACTER SET utf8 */;

/*Table structure for table `Estados` */

DROP TABLE IF EXISTS `Estados`;

CREATE TABLE `Estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

/*Data for the table `Estados` */

insert  into `Estados`(`id_estado`,`name`,`status`) values 
(1,'Amazonas',1),
(2,'Anzoátegui',1),
(3,'Apure',1),
(4,'Aragua',1),
(5,'Barinas',1),
(6,'Bolivar',1),
(7,'Carabobo',1),
(8,'Cojedes',1),
(9,'Delta Amacuro',1),
(10,'Dependencias Federales',1),
(11,'Distrito Capital',1),
(12,'Falcón',1),
(13,'Guárico',1),
(14,'Lara',1),
(15,'Mérida',1),
(16,'Miranda',1),
(17,'Monagas',1),
(18,'Nueva Esparta',1),
(19,'Poruguesa',1),
(20,'Sucre',1),
(21,'Táchira',1),
(22,'Trujillo',1),
(23,'Vargas',1),
(24,'Yaracuy',1),
(25,'Zulia',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
