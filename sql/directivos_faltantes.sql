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

/*Table structure for table `pase` */

DROP TABLE IF EXISTS `pase`;

CREATE TABLE `pase` (
  `id_user` int(11) NOT NULL DEFAULT '0',
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `mail` varchar(45) NOT NULL,
  `mail_alternative` varchar(45) DEFAULT NULL,
  `uno` text,
  `dos` text,
  `tres` text,
  `cuatro` text,
  `cinco` text,
  `seis` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pase` */

insert  into `pase`(`id_user`,`login`,`password`,`status`,`date_created`,`date_updated`,`mail`,`mail_alternative`,`uno`,`dos`,`tres`,`cuatro`,`cinco`,`seis`) values 
(570,'V-116674501','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4145128625','','Carlos','Germani','D','V-116674501'),
(571,'J-6504830','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4142131304','4164016045','Juan','Panto','D','J-6504830'),
(572,'J-403473641','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4140372108','2617653423','Johan','Pirela','D','J-403473641'),
(573,'V-114634146','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4265735821','4147452792','Giovanni','Saavedra','D','V-114634146'),
(574,'V-177554002','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4145071175','','Orlando','Torre','D','V-177554002'),
(575,'V-177176326','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4243134084','4124098548','Harrison','Justo','D','V-177176326'),
(576,'J-400489679','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4165820430','','Luis','Salazar','D','J-400489679'),
(577,'J-313976261','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4247266571','4265122421','Miguel','Guillen','D','J-313976261'),
(578,'J-401282814','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4',1,'2016-06-10 02:57:15','2016-06-10 02:57:15','mail_prueba@tugruero.com','mail_prueba@tugruero.com','4241850188','4265122421','Moises','Donaires','D','J-401282814');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
