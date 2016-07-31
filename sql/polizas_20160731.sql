/*
SQLyog Community v12.2.1 (64 bit)
MySQL - 5.7.13-0ubuntu0.16.04.2 : Database - admin_tugruero
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`admin_tugruero` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `admin_tugruero`;

/*Table structure for table `Polizas` */

DROP TABLE IF EXISTS `Polizas`;

CREATE TABLE `Polizas` (
  `idPoliza` int(11) NOT NULL AUTO_INCREMENT,
  `Placa` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Cedula` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Nombre` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Apellido` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Marca` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Modelo` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Tipo` varchar(20) DEFAULT NULL,
  `Color` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Año` varchar(5) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `Seguro` varchar(20) DEFAULT NULL,
  `NumPoliza` varchar(100) DEFAULT NULL,
  `DireccionEDO` varchar(30) DEFAULT NULL,
  `Vencimiento` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `created_by` int(1) DEFAULT NULL,
  `updated_by` int(1) DEFAULT NULL,
  PRIMARY KEY (`idPoliza`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `Polizas` */

insert  into `Polizas`(`idPoliza`,`Placa`,`Cedula`,`Nombre`,`Apellido`,`Marca`,`Modelo`,`Tipo`,`Color`,`Año`,`Seguro`,`NumPoliza`,`DireccionEDO`,`Vencimiento`,`date_created`,`date_updated`,`created_by`,`updated_by`) values 
(1,'AAA001','V-1234567','Marcos','De Andrade','iOS','iPhone','Carro','Plata','2016','MAPFRE Seguros','123457','Distrito Capital','2016-12-31 00:00:00',NULL,'2016-07-31 15:19:17',NULL,NULL),
(2,'ABX90V','V-15178849','Gleem','Miralles','Chevrolet','Blazer','Camioneta','Vinotinto','2000','Seguros Banesco',NULL,'Distrito Capital','2016-11-30 00:00:00',NULL,NULL,NULL,NULL),
(3,'AAA000','J-123456','Chofer','pickup','Ford','PickUp','Pickup','Blanco','1990','Vitalicia',NULL,NULL,'2016-12-30 00:00:00',NULL,NULL,NULL,NULL),
(4,'BBB000','J-654321','Chofer','Camion','Ford','350','Camion','Azul','1987','Previsora',NULL,NULL,'2015-12-30 00:00:00',NULL,NULL,NULL,NULL),
(5,'AC814GM','V-20704089','Alejandro','Echeverría','Toyota','Corolla','Carro','Plata','2010','Seguros Banesco',NULL,'Miranda','2017-04-30 00:00:00',NULL,NULL,NULL,NULL),
(6,'AAABBB','J-123456','Empresa','Coca Cola','Ford','F - 350','Camion','Rojo','1990','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(7,'ABO27M','V-19499682','Carlos','Rodríguez','Toyota','Corolla','Carro','Plateado','2002','Mercantil',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(8,'AAABBB','V-21759297','Fabiana','Arreaza','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(9,'AAABBB','V-22538439','Luis','Remiro','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(10,'AAABBB','V-16895413','Sofia','Acuña','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(11,'AAABBB','V-20364249','Rodolfo ','Scannone','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(12,'AAABBB','V-18899284','Pedro','Rojas','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(13,'AAABBB','V-20546524','Oriana','Correa','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(14,'AAABBB','V-19883911','Fernando','Vargas','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(15,'AAABBB','V-21442332','Daniella','Ramos','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(16,'AAABBB','V-16632171','Mildred ','Gudiño','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(17,'AAABBB','V-20634627','Victor','Alvino','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(18,'AAABBB','V-19761401','Oskatherine','Lanza','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL),
(19,'AAABBB','v-19379323','Nilson','Castillo','Honda','Civic','Carro','Negro','2016','Banesco',NULL,NULL,'2016-12-31 00:00:00',NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
