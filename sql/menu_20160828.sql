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

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_menuref` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `name2` varchar(50) DEFAULT NULL,
  `url` varchar(200) NOT NULL,
  `url2` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `image` varchar(50) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `id_app` int(11) NOT NULL,
  `orders` int(11) DEFAULT NULL,
  `menu_image` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`id_menu`,`id_menuref`,`name`,`name2`,`url`,`url2`,`status`,`image`,`date_added`,`date_updated`,`id_app`,`orders`,`menu_image`) values 
(1,0,'Inicio',NULL,'#header',NULL,1,NULL,'2016-03-21 22:30:22','2016-03-21 22:30:16',1,1,0),
(2,0,'Nuestro trabajo',NULL,'#work',NULL,1,NULL,'2016-03-21 22:32:20','2016-03-21 22:32:24',1,2,0),
(3,0,'¿Quiénes somos?',NULL,'#about',NULL,1,NULL,'2016-03-21 22:33:00','2016-03-21 22:33:03',1,3,0),
(4,0,'Video',NULL,'#video',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:40',1,4,0),
(5,0,'Soporte técnico',NULL,'#prueba',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,4,0),
(6,5,'Contenido de secciones',NULL,'/adm/about/index.php',NULL,0,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,1,0),
(7,5,'Nuestros Objetivos',NULL,'#Menu',NULL,0,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,2,0),
(8,0,'Manejo de usuarios',NULL,'#prueba',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,2,0),
(9,8,'Operadores',NULL,'/adm/users/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,2,0),
(10,0,'Testimonios',NULL,'#testimonials',NULL,1,NULL,'2016-03-28 21:50:42','2016-03-28 21:50:44',1,5,0),
(11,0,'Contáctanos',NULL,'#contact',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:40',1,7,0),
(12,5,'Contáctenos',NULL,'/adm/messages/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,3,0),
(13,5,'¿Como funcionamos?',NULL,'#menu',NULL,0,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,4,0),
(14,16,'Grúas','Agregar','/ap/hoist/index.php','/ap/hoist/index.php?action=new',1,'gruas.png','0000-00-00 00:00:00','0000-00-00 00:00:00',4,1,1),
(15,8,'Masters',NULL,'/adm/company/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,1,0),
(16,0,'Admin. Grúas',NULL,'#menu',NULL,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',4,1,0),
(17,0,'Admin. Operador',NULL,'#menu',NULL,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',4,2,0),
(18,17,'Operadores','Agregar','/ap/users/index.php','/ap/users/index.php?action=new',1,'cardriver.png','0000-00-00 00:00:00','0000-00-00 00:00:00',4,2,1),
(19,0,'Usa TU/GRUERO®',NULL,'#use',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:40',1,6,0),
(20,0,'Servicios',NULL,'/ap/services_operator/index.php','',1,NULL,'2016-05-03 21:57:41','2016-05-03 21:57:43',2,1,0),
(21,20,'Servicios','Consultar','/ap/services_operator/index.php','/ap/services_operator/index.php',1,'servicios.png','2016-05-03 21:57:41','2016-05-03 21:57:43',2,1,1),
(22,17,'Servicios','Consultar','/ap/services_masters/index.php','/ap/services_masters/index.php',1,'servicios.png','0000-00-00 00:00:00','0000-00-00 00:00:00',4,3,1),
(23,8,'Servicios','Consultar','/adm/services_administrators/index.php','/adm/services_administrators/index.php',0,'ic11.png','0000-00-00 00:00:00','0000-00-00 00:00:00',3,3,1),
(24,0,'Perfil de usuario',NULL,'','',1,NULL,'2016-05-03 21:57:41','2016-05-03 21:57:43',2,4,0),
(25,24,'Modificación de clave','','/ap/account/index.php?action=change_pass_view','/ap/account/index.php?action=change_pass_view',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',2,2,0),
(26,0,'Perfil de usuario',NULL,'','',1,NULL,'2016-05-03 21:57:41','2016-05-03 21:57:43',4,4,0),
(27,26,'Modificación de clave','','/ap/account/index.php?action=change_pass_view','/ap/account/index.php?action=change_pass_view',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',4,2,0),
(28,26,'Datos personales','','/ap/users_data/index.php?action=edit','/ap/users_data/index.php?action=edit',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',4,1,0),
(29,24,'Datos personales','','/ap/users_data/index.php?action=edit','/ap/users_data/index.php?action=edit',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',2,1,0),
(30,0,'Perfil de usuario',NULL,'','',1,NULL,'2016-05-03 21:57:41','2016-05-03 21:57:43',3,3,0),
(31,30,'Modificación de clave','','/adm/account/index.php?action=change_pass_view','/adm/account/index.php?action=change_pass_view',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',3,2,0),
(32,30,'Datos personales','','/adm/users_data/index.php?action=edit','/adm/users_data/index.php?action=edit',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',3,1,0),
(33,0,'Solicitudes/Servicios',NULL,'','',1,NULL,'2016-05-03 21:57:41','2016-05-03 21:57:43',3,1,0),
(34,33,'Solicitudes/Servicios activos','','/adm/solicitud/index.php','',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',3,1,0),
(35,0,'Pólizas',NULL,'','',1,NULL,'2016-05-03 21:57:41','2016-05-03 21:57:43',3,5,0),
(36,35,'Lista de Pólizas ','','/adm/Polizas/index.php','',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',3,1,0),
(37,35,'Carga masiva de Pólizas ','','/adm/Polizas/index.php?action=poliza_masiva','',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',3,1,0),
(38,8,'Administradores/Operadores',NULL,'/adm/UsuariosInternos/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,4,0),
(39,33,'Servicios clientes','','/adm/ServiciosClientes/index.php?action=individual','',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',3,1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
