/*
SQLyog Community v12.2.1 (64 bit)
MySQL - 5.6.17 : Database - frbcomfr_tugruero
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`frbcomfr_tugruero` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `frbcomfr_tugruero`;

/*Table structure for table `apps` */

DROP TABLE IF EXISTS `apps`;

CREATE TABLE `apps` (
  `id_app` int(11) NOT NULL AUTO_INCREMENT,
  `name_app` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_app`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `apps` */

insert  into `apps`(`id_app`,`name_app`,`status`,`date_created`,`date_updated`) values 
(1,'PAGINA_WEB',1,'2016-03-21 22:30:41','2016-03-21 22:30:43'),
(2,'GRUEROS',1,'2016-03-21 22:30:59','2016-03-21 22:31:01'),
(3,'ADMINISTRADOR',1,'2016-03-21 22:31:11','2016-03-21 22:31:13'),
(4,'MASTERS',1,'2016-05-03 21:54:47','2016-05-03 21:54:49');

/*Table structure for table `bank` */

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `bank` */

insert  into `bank`(`id`,`name`) values 
(1,'BANESCO'),
(2,'BBVA Provincial'),
(3,'Banco de Venezuela'),
(4,'Banco Mercantil');

/*Table structure for table `caroussel` */

DROP TABLE IF EXISTS `caroussel`;

CREATE TABLE `caroussel` (
  `id_caroussel` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_caroussel`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `caroussel` */

insert  into `caroussel`(`id_caroussel`,`name`,`status`) values 
(1,'myCarousel',1);

/*Table structure for table `caroussel_details` */

DROP TABLE IF EXISTS `caroussel_details`;

CREATE TABLE `caroussel_details` (
  `id_cardet` int(11) NOT NULL AUTO_INCREMENT,
  `id_caroussel` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `data_target` varchar(100) DEFAULT NULL,
  `orders` int(1) DEFAULT NULL,
  `data_slide_to` int(11) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cardet`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `caroussel_details` */

insert  into `caroussel_details`(`id_cardet`,`id_caroussel`,`image`,`status`,`alt`,`data_target`,`orders`,`data_slide_to`,`class`) values 
(1,1,'caroussel1.png',1,'Uno','#myCarousel',1,0,'active'),
(2,1,'caroussel2.png',1,'Dos','#myCarousel',2,1,NULL),
(3,1,'caroussel3.png',1,'Tres','#myCarousel',3,2,NULL);

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsible_name` varchar(500) NOT NULL,
  `responsible_cedula` varchar(45) NOT NULL,
  `num_cuenta` varchar(45) NOT NULL,
  `rif` varchar(45) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `razon_social` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `tipo_cuenta` varchar(15) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `zone_work` varchar(45) NOT NULL,
  `club_gruas` varchar(1) NOT NULL,
  `num_socio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `company` */

insert  into `company`(`id`,`responsible_name`,`responsible_cedula`,`num_cuenta`,`rif`,`id_bank`,`razon_social`,`status`,`date_created`,`date_updated`,`company_name`,`tipo_cuenta`,`location`,`zone_work`,`club_gruas`,`num_socio`) values 
(1,'Marcos DE ANDRADE','V-18020594','01340000000000000000','18020594-9',1,'marcos',1,'2016-05-13 20:28:21','2016-05-13 14:00:49','GRUAS MARCOS DE ANDRADE CA','Personal','CARACAS','Distrito Capital','1','');

/*Table structure for table `company_files` */

DROP TABLE IF EXISTS `company_files`;

CREATE TABLE `company_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_file` varchar(45) NOT NULL,
  `validate` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `id_company` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `company_files` */

insert  into `company_files`(`id`,`name_file`,`validate`,`status`,`id_company`,`date_created`,`date_updated`) values 
(1,'18020594-9-1.jpg',1,1,1,'2016-05-13 20:28:23','2016-05-13 14:00:49'),
(2,'18020594-9-2.jpg',1,1,1,'2016-05-13 20:28:23','2016-05-13 14:00:49'),
(3,'18020594-9-3.jpg',1,1,1,'2016-05-13 20:28:23','2016-05-13 14:00:49'),
(4,'18020594-9-4.jpg',1,1,1,'2016-05-13 20:28:23','2016-05-13 14:00:49');

/*Table structure for table `company_validation_ve` */

DROP TABLE IF EXISTS `company_validation_ve`;

CREATE TABLE `company_validation_ve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(45) NOT NULL,
  `rif` varchar(45) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT 'cuando es estatus 1 significa que esta pendiente por validar el usuario',
  `validate` int(11) NOT NULL DEFAULT '0' COMMENT 'cuando esta en 1 significa que la empresa ya esta registrada.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `company_validation_ve` */

insert  into `company_validation_ve`(`id`,`razon_social`,`rif`,`status`,`validate`) values 
(1,'marcos','18020594-9',1,1);

/*Table structure for table `contents_html` */

DROP TABLE IF EXISTS `contents_html`;

CREATE TABLE `contents_html` (
  `id_content` int(11) NOT NULL AUTO_INCREMENT,
  `html` text NOT NULL,
  `div_id` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `page` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `language` varchar(5) NOT NULL DEFAULT 'es',
  `id_app` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `orders` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `contents_html` */

insert  into `contents_html`(`id_content`,`html`,`div_id`,`section`,`page`,`status`,`language`,`id_app`,`name`,`orders`,`title`,`date_created`,`date_updated`) values 
(1,'Somos Soluciones Tugruero, C.A. una empresa 100% venezolana de base tecnológica dedicada a la prestación de servicios de auxilia vial a través de distintas herramientas innovadoras de comunicación, entre todos los usuarios de nuestra plataforma que requieran de auxilio vial y los proveedores de grúas disponibles y más cercanos a ellos.','about','about','page.php',1,'es',1,'QUIENES_SOMOS',1,'¿Quiénes somos?','2016-04-02 12:21:55','2016-04-02 12:37:44'),
(2,'Ofrecemos tranquilidad a los accidentados en la vía entregándoles el mejor servicio de auxilio vial por medio de nuestra excelente plataforma de comunicación, teniendo como principal objetivo construir una empresa sustentable donde todos queramos ir a trabajar para ayudar a los demás.\r\n','about','about','page.php',1,'es',1,'NUESTRA_MISION',2,'Nuestra misión','2016-04-02 12:21:57','2016-04-02 12:22:12'),
(3,'Ser la plataforma tecnológica número uno a nivel mundial en auxilio vial, teniendo la red de grueros más amplia, trabajando con el 100% de las compañías de seguro existentes y la mayor cantidad de personas no aseguradas del mercado','about','about','page.php',1,'es',1,'DONDE_VAMOS',3,'Hacia donde vamos','2016-04-02 12:21:59','2016-04-02 12:22:12'),
(4,'Somos Soluciones Tugruero, C.A. una empresa 100% venezolana de base tecnológica dedicada a la prestación de servicios de auxilia vial a través de distintas herramientas innovadoras de comunicación, entre todos los usuarios de nuestra plataforma que requieran de auxilio vial y los proveedores de grúas disponibles y más cercanos a ellos. ','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',1,'Nuestros Objetivos','2016-04-02 12:22:01','2016-04-02 12:22:12'),
(5,'Construir una empresa sustentable donde todos queramos ir a trabajar para ayudar a los demás.','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',1,'','2016-04-02 12:22:03','2016-04-02 12:22:12'),
(6,'Tener afiliados a nuestra plataforma al 100% de los grueros que operan en Venezuela, para que brinden el mejor servicio de auxilio vial a los usuarios suscritos en la misma.','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',2,'','2016-04-02 12:22:08','2016-04-02 12:22:12'),
(7,'Contribuir notablemente a la mejora de la industria y el servicio de auxilio vial en Venezuela y el mundo.','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',3,'','2016-04-02 12:22:10','2016-04-02 12:22:12'),
(8,'Mejorar los tiempos de respuesta de parte de los grueros para con los accidentados en la vía, teniendo un tiempo promedio de respuesta y rescate de 20 - 30 minutos.','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',4,'','2016-04-02 12:22:12','2016-04-02 12:22:12'),
(9,'Mejorar notablemente el servicio de auxilio vial ofrecido por todas las compañías de seguros en Venezuela a sus clientes asegurados.','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',5,'','2016-04-02 12:22:12','2016-04-02 12:22:12'),
(10,'Colaborar con la creación de la red/comunidad de grueros más grande de Venezuela y América Latina, con la cual se realizarán constantemente convenciones donde se discutirán los problemas diarios de la profesión y sus posibles soluciones, donde se darán a conocer los últimos avances de la industria y se ajustará regularmente las tarifas de las carreras/remolques/auxilios de acuerdo a la situación económica-política y social de cada país donde nos encontremos operando.','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',6,'','2016-04-02 12:22:12','2016-04-02 12:22:12'),
(11,'Crear la fundación “Grueros de las Américas” donde constantemente se recaudarán fondos entre todos los pertenecientes a dicha red/comunidad, para así realizar obras benéficas en todos los países donde la empresa se encuentre presente.','objectives','objectives','page.php',1,'es',1,'OBJETIVOS',7,'','2016-04-02 12:22:12','2016-04-02 12:22:12'),
(12,'<p class=\"text-justify\">Ofrecemos servicios de comunicación para el auxilio vial a través de nuestra aplicación móvil llamada TU/GRUERO®. La cual se puede conseguir y descargar gratuitamente en las tiendas de aplicación móvil más reconocidas a nivel mundial: Play Store y App Store.</p>\r\n<p class=\"text-justify\">Presentamos TU/GRUERO®, la primera aplicación móvil del mundo que ofrece el servicio de E-hailing (solicitud de servicios de transporte con teléfonos inteligentes) para grúas o remolcadoras de vehículos accidentados. TU/GRUERO® es pionera en el ámbito tecnológico para los servicios ofrecidos por las compañías de seguros ya que actualmente el 100% de estas ofrece el servicio de auxilio a través del tradicional Call Center de su operadora de asistencia en viajes, el cual resulta tedioso y poco eficiente debido a la triangulación existente entre: Accidentado - Operadora de asistencia en viaje - Gruero.</p>\r\n<p class=\"text-justify\">TU/GRUERO® garantiza por primera vez un servicio de auxilio vial de verdadera rapidez, seguridad y tranquilidad tanto para los accidentados como para los grueros gracias a su novedoso sistema de geolocalización, el cual permite ubicar a los grueros más cercanos (de manera directa y sin intermediarios) en el mapa y seguirlos en tiempo real vía GPS hasta que éste y el accidentado se encuentren en el sitio de la avería.</p>\r\n','work','work','page.php',1,'es',1,'QUE_HACEMOS',1,'¿Qué hacemos?','2016-04-02 12:22:12','2016-04-02 12:22:12'),
(13,'<p class=\"text-justify\">Actualmente le ofrecemos nuestros servicios de comunicación para el auxilio vial a las compañías de seguros venezolanas suscritas a TU/GRUERO®, para que sus clientes asegurados puedan comunicarse directamente con los proveedores de grúas afiliados a nuestra plataforma cuando éstos (clientes asegurados) se encuentren en la necesidad de solicitar servicios de auxilio vial.</p>\r\n<p class=\"text-justify\">¡Comuníquese con su corredor de seguros para poder optar por la póliza de asistencia en viajes que incluya disfrutar de los servicios de TU/GRUERO®!</p>\r\n','portfolio','portfolio','page.php',1,'es',1,'COMO_FUNCIONAMOS',1,'¿Cómo funcionamos?','2016-04-02 12:22:12','2016-04-02 12:22:12'),
(14,'','','','',1,'es',0,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL);

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `phone_code` varchar(10) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `countries` */

/*Table structure for table `countries_states` */

DROP TABLE IF EXISTS `countries_states`;

CREATE TABLE `countries_states` (
  `id_countrie` int(11) NOT NULL,
  `id_state` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_countrie`),
  KEY `id_state` (`id_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `countries_states` */

/*Table structure for table `countries_zones` */

DROP TABLE IF EXISTS `countries_zones`;

CREATE TABLE `countries_zones` (
  `id_zone` int(11) NOT NULL AUTO_INCREMENT,
  `id_countrie` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_zone`,`id_countrie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `countries_zones` */

/*Table structure for table `countries_zones_states` */

DROP TABLE IF EXISTS `countries_zones_states`;

CREATE TABLE `countries_zones_states` (
  `id_countrie` int(11) NOT NULL,
  `id_state` int(11) NOT NULL,
  `id_zone` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_countrie`,`id_state`,`id_zone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `countries_zones_states` */

/*Table structure for table `hoist` */

DROP TABLE IF EXISTS `hoist`;

CREATE TABLE `hoist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_hoist` varchar(50) DEFAULT NULL,
  `engine_serial` varchar(45) NOT NULL,
  `body_serial` varchar(45) NOT NULL,
  `registration_plate` varchar(45) NOT NULL,
  `year_vehicle` varchar(45) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `make` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `hoist` */

insert  into `hoist`(`id`,`type_hoist`,`engine_serial`,`body_serial`,`registration_plate`,`year_vehicle`,`color`,`make`,`model`,`status`,`date_created`,`date_updated`) values 
(1,'Gancho','11111111111','0000000000000','ac137sk1','2006','blanco','ford','f350',1,'2016-05-05 22:23:35','2016-05-06 13:56:09'),
(2,'Plataforma','00000000000','0000000000000','000000','2006','00000000000','ford','ka',1,'2016-05-06 10:13:35','2016-05-06 10:13:35');

/*Table structure for table `hoist_company` */

DROP TABLE IF EXISTS `hoist_company`;

CREATE TABLE `hoist_company` (
  `id_hoist_company` int(11) NOT NULL AUTO_INCREMENT,
  `id_hoist` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id_hoist_company`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hoist_company` */

insert  into `hoist_company`(`id_hoist_company`,`id_hoist`,`id_company`) values 
(1,1,4),
(2,2,4);

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`id_menu`,`id_menuref`,`name`,`name2`,`url`,`url2`,`status`,`image`,`date_added`,`date_updated`,`id_app`,`orders`,`menu_image`) values 
(1,0,'Inicio',NULL,'#header',NULL,1,NULL,'2016-03-21 22:30:22','2016-03-21 22:30:16',1,1,0),
(2,0,'Nuestro trabajo',NULL,'#work',NULL,1,NULL,'2016-03-21 22:32:20','2016-03-21 22:32:24',1,2,0),
(3,0,'¿Quienes somos?',NULL,'#about',NULL,1,NULL,'2016-03-21 22:33:00','2016-03-21 22:33:03',1,3,0),
(4,0,'Video',NULL,'#video',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:40',1,4,0),
(5,0,'Administrador web',NULL,'#prueba',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,1,0),
(6,5,'Contenido de secciones',NULL,'/adm/about/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,1,0),
(7,5,'Nuestros Objetivos',NULL,'#Menu',NULL,0,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,2,0),
(8,0,'Manejo de Aplicaciones',NULL,'#prueba',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,1,0),
(9,8,'Usuarios',NULL,'/adm/users/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,1,0),
(10,0,'Testimonios',NULL,'#testimonials',NULL,1,NULL,'2016-03-28 21:50:42','2016-03-28 21:50:44',1,5,0),
(11,0,'Contáctanos',NULL,'#contact',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:40',1,7,0),
(12,5,'Contáctenos',NULL,'/adm/messages/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,3,0),
(13,5,'¿Como funcionamos?',NULL,'#menu',NULL,0,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,4,0),
(14,16,'Grúas','Agregar','/ap/hoist/index.php','/ap/hoist/index.php?action=new',1,'gruas.png','0000-00-00 00:00:00','0000-00-00 00:00:00',4,1,1),
(15,8,'Compañias',NULL,'/adm/company/index.php',NULL,1,NULL,'2016-03-21 22:33:38','2016-03-21 22:33:38',3,2,0),
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
(29,24,'Datos personales','','/ap/users_data/index.php?action=edit','/ap/users_data/index.php?action=edit',1,'','2016-05-03 21:57:41','2016-05-03 21:57:43',2,1,0);

/*Table structure for table `menu_page` */

DROP TABLE IF EXISTS `menu_page`;

CREATE TABLE `menu_page` (
  `id_menu` int(11) NOT NULL,
  `id_page` int(11) NOT NULL,
  `id_app` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_menu`,`id_page`,`id_app`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `menu_page` */

insert  into `menu_page`(`id_menu`,`id_page`,`id_app`,`status`,`date_added`,`date_updated`) values 
(1,1,1,1,'2016-03-21 22:35:25','2016-03-21 22:35:27'),
(2,1,1,1,'2016-03-21 22:35:36','0000-00-00 00:00:00'),
(3,1,1,1,'2016-03-21 22:35:45','2016-03-21 22:35:48'),
(4,1,1,1,'2016-03-21 22:35:56','2016-03-21 22:35:58');

/*Table structure for table `menu_page_perms` */

DROP TABLE IF EXISTS `menu_page_perms`;

CREATE TABLE `menu_page_perms` (
  `id_menu` int(11) NOT NULL,
  `id_page` int(11) NOT NULL,
  `id_perm` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_menu`,`id_page`,`id_perm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `menu_page_perms` */

/*Table structure for table `menu_perms` */

DROP TABLE IF EXISTS `menu_perms`;

CREATE TABLE `menu_perms` (
  `id_menu` int(11) NOT NULL,
  `id_perms` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_menu`,`id_perms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `menu_perms` */

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) DEFAULT '1',
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `message` */

insert  into `message`(`id_message`,`names`,`email`,`phone`,`message`,`status`,`date_created`,`date_updated`) values 
(7,'Marcos de andrade','deandrademarcos@hotmail.com','gdfgdfgdfg','aaaaaaaaaaa',1,'0000-00-00 00:00:00','2016-04-02 12:14:24'),
(8,'Marcos de andrade','deandrademarcos@hotmail.com','04142695880','9999999999999999999',1,'2016-03-25 08:50:55','2016-03-25 08:50:55'),
(9,'Marcos de andrade','deandrademarcos@hotmail.com','04142695880','9999999999999999999',1,'2016-03-25 08:51:15','2016-03-25 08:51:15'),
(10,'Marcos de andrade','deandrademarcos@hotmail.com','04142695880','9999999999999999999',1,'2016-03-25 08:51:21','2016-03-25 08:51:21'),
(11,'Marcos de andrade','deandrademarcos@hotmail.com','04142695880','asdasdasdasdasdasdasds',1,'2016-03-25 08:53:07','2016-03-25 08:53:07'),
(12,'marcos de andrade','deandrademarcos@hotmail.com','04142695880','mensaje',1,'2016-03-25 09:21:49','2016-03-25 09:21:49'),
(13,'asdasdas','deandrademarcos@gmail.com','5454545','dlfjsldkfjlsdfjlsdkfjlskdf',1,'2016-03-28 11:16:14','2016-03-28 11:16:14'),
(14,'ssssssssssss','ddddd@h.net','54654654','',1,'2016-04-29 22:18:09','2016-04-29 22:18:09');

/*Table structure for table `modals` */

DROP TABLE IF EXISTS `modals`;

CREATE TABLE `modals` (
  `id_modal` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'image1.jpg',
  `status` int(1) NOT NULL,
  `created_at` date NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT 'De Interés',
  PRIMARY KEY (`id_modal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `modals` */

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id_new` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT 'Título',
  PRIMARY KEY (`id_new`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `news` */

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_app` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `pages` */

insert  into `pages`(`id_page`,`id_app`,`name`,`status`,`date_added`,`date_updated`) values 
(1,1,'index.php',1,'2016-03-21 22:35:08','2016-03-21 22:35:11');

/*Table structure for table `panels` */

DROP TABLE IF EXISTS `panels`;

CREATE TABLE `panels` (
  `id_panel` int(11) NOT NULL AUTO_INCREMENT,
  `name_panel` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `title_panel` varchar(100) CHARACTER SET latin1 NOT NULL,
  `read_more` int(1) NOT NULL,
  `link_read_more` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `class` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `icon_title` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `panel_head_class` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `panel_body_class` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `panel_foot_class` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `read_more_button_class` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `read_more_text` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `language` varchar(5) NOT NULL DEFAULT 'es',
  PRIMARY KEY (`id_panel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `panels` */

/*Table structure for table `perms` */

DROP TABLE IF EXISTS `perms`;

CREATE TABLE `perms` (
  `id_perm` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_perm`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `perms` */

insert  into `perms`(`id_perm`,`name`,`status`) values 
(2,'ADMINISTRADOR',1),
(3,'GRUERO_MASTER',1),
(4,'GRUERO_OPERADOR',1),
(5,'ADMINISTRADOR_OPERADOR',1);

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `status` */

insert  into `status`(`id_status`,`name`,`date_created`,`date_updated`) values 
(0,'Desactivado','2016-04-03 15:00:02','2016-04-03 15:00:04'),
(1,'Activo','2016-04-03 15:00:02','2016-04-03 15:00:04');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `mail` varchar(45) NOT NULL,
  `mail_alternative` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id_user`,`login`,`password`,`status`,`date_created`,`date_updated`,`mail`,`mail_alternative`) values 
(1,'M-V18020594','18bfddf1020067bbd33fad652bc8f1a59b2427ff8c7ebfd62bbfef6c2dddff49',1,'2016-05-13 20:28:21','2016-05-13 22:28:29','deandrademarcos@gmail.com','deandrademarcos@gmail.com'),
(2,'O-V18020595','18bfddf1020067bbd33fad652bc8f1a59b2427ff8c7ebfd62bbfef6c2dddff49',1,'2016-05-13 20:53:12','2016-05-13 20:53:12','deandrademarcos@gmail1.com',NULL),
(3,'O-V19122015','18bfddf1020067bbd33fad652bc8f1a59b2427ff8c7ebfd62bbfef6c2dddff49',1,'2016-05-13 20:56:34','2016-05-13 20:56:34','DEAN@H.COM',NULL);

/*Table structure for table `users_company` */

DROP TABLE IF EXISTS `users_company`;

CREATE TABLE `users_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users_company` */

insert  into `users_company`(`id`,`id_user`,`id_company`,`status`,`date_created`,`date_updated`) values 
(1,1,1,1,'2016-05-13 20:28:21','2016-05-13 14:00:49'),
(2,2,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(3,3,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `users_data` */

DROP TABLE IF EXISTS `users_data`;

CREATE TABLE `users_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users_data` */

insert  into `users_data`(`id`,`id_users`,`first_name`,`second_name`,`first_last_name`,`second_last_name`,`nationality`,`document`,`birthdate`,`gender`,`phone`,`phone1`,`image`,`certificado_file`,`document_file`,`date_created`,`date_updated`) values 
(1,1,'Marcos','ARLINDO','DE ANDRADE','CARRERAsss','V','18020594',NULL,'M','04268141850','04268141850','M-V18020594.jpg','','','2016-05-13 20:28:21','2016-05-13 14:28:25'),
(2,2,'marcos','arlndo','De andrade','carrera','V','18020595',NULL,'M','04268141850','','O-V18020595.jpg','O-V18020595-certificado.jpg','O-V18020595-cedula.jpg','2016-05-13 20:53:12','2016-05-13 16:14:19'),
(3,3,'MMMMMM','MMMMMM','MMMMMMM','MMMMMMMMMM','V','19122015',NULL,'M','123456789100000000000',NULL,'','O-V19122015-certificado.jpg','O-V19122015-cedula.jpg','2016-05-13 20:56:34','2016-05-13 20:56:34');

/*Table structure for table `users_hoist_company` */

DROP TABLE IF EXISTS `users_hoist_company`;

CREATE TABLE `users_hoist_company` (
  `id_user_hoist_company` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_hoist` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id_user_hoist_company`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users_hoist_company` */

insert  into `users_hoist_company`(`id_user_hoist_company`,`id_user`,`id_company`,`id_hoist`,`status`,`date_created`,`date_updated`) values 
(1,2,1,1,1,'2016-05-13 14:23:13','2016-05-13 14:23:13'),
(2,3,1,2,1,'2016-05-13 14:26:35','2016-05-13 14:26:35');

/*Table structure for table `users_perms` */

DROP TABLE IF EXISTS `users_perms`;

CREATE TABLE `users_perms` (
  `id_user` int(11) NOT NULL,
  `id_perms` int(11) NOT NULL,
  `status` int(11) DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`,`id_perms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `users_perms` */

insert  into `users_perms`(`id_user`,`id_perms`,`status`,`date_created`,`date_updated`) values 
(1,3,1,'2016-05-13 20:28:23','2016-05-13 14:00:49'),
(2,4,0,NULL,NULL),
(3,4,0,NULL,NULL);

/*Table structure for table `users_token` */

DROP TABLE IF EXISTS `users_token`;

CREATE TABLE `users_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company_validation` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `time_expire` datetime NOT NULL,
  `validate` bigint(20) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `mail_alternative` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users_token` */

insert  into `users_token`(`id`,`id_company_validation`,`token`,`time_expire`,`validate`,`mail`,`mail_alternative`,`date_created`,`date_updated`) values 
(1,1,'bWFyY29zVi0xODAyMDU5NC05ZGVhbmRyYWRlbWFyY29zQGdtYWlsLmNvbTEzLTA1LTE2IDA4OjIzOjI3','2016-05-13 21:23:27',1,'deandrademarcos@gmail.com','deandrademarcos@gmail.com','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
