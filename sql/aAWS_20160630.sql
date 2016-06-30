/*
SQLyog Community v12.2.0 (32 bit)
MySQL - 5.5.49-0ubuntu0.14.04.1 : Database - TuGruero
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`TuGruero` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `TuGruero`;

/*Table structure for table `Baremo` */

DROP TABLE IF EXISTS `Baremo`;

CREATE TABLE `Baremo` (
  `Enganche` int(8) NOT NULL,
  `Peso1` decimal(3,2) DEFAULT NULL,
  `Peso2` decimal(3,2) DEFAULT NULL,
  `Peso3` decimal(3,2) DEFAULT NULL,
  `Peso4` decimal(3,2) DEFAULT NULL,
  `Cambio1` decimal(3,2) DEFAULT NULL,
  `Cambio2` decimal(3,2) DEFAULT NULL,
  `Cambio3` decimal(3,2) DEFAULT NULL,
  `Cambio4` decimal(3,2) DEFAULT NULL,
  `Caja` decimal(3,2) DEFAULT NULL,
  `Atasco` decimal(3,2) DEFAULT NULL,
  `Sotano` decimal(3,2) DEFAULT NULL,
  `Encunetado` decimal(3,2) DEFAULT NULL,
  `KM` int(5) DEFAULT NULL,
  `Diurno` decimal(3,2) DEFAULT NULL,
  `Nocturno` decimal(3,2) DEFAULT NULL,
  `ExtraNocturno` decimal(3,2) DEFAULT NULL,
  `FinSemana` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`Enganche`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Baremo` */

insert  into `Baremo`(`Enganche`,`Peso1`,`Peso2`,`Peso3`,`Peso4`,`Cambio1`,`Cambio2`,`Cambio3`,`Cambio4`,`Caja`,`Atasco`,`Sotano`,`Encunetado`,`KM`,`Diurno`,`Nocturno`,`ExtraNocturno`,`FinSemana`) values 
(6000,'1.00','1.20','1.70','2.00','0.60','0.80','1.00','1.20','0.60','0.30','0.90','0.60',150,'1.00','1.20','1.30','1.25');

/*Table structure for table `Gruas` */

DROP TABLE IF EXISTS `Gruas`;

CREATE TABLE `Gruas` (
  `idGrua` int(11) NOT NULL,
  `Disponible` varchar(20) DEFAULT 'NO',
  `Latitud` varchar(20) DEFAULT NULL,
  `Longitud` varchar(25) DEFAULT NULL,
  `LastUpdate` datetime DEFAULT NULL,
  `Token` varchar(300) DEFAULT NULL,
  `DeviceID` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idGrua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Gruas` */

insert  into `Gruas`(`idGrua`,`Disponible`,`Latitud`,`Longitud`,`LastUpdate`,`Token`,`DeviceID`) values 
(1,'NO','','',NULL,NULL,''),
(2,'NO','','','2016-06-01 09:55:25','',''),
(3,'NO','','','0000-00-00 00:00:00','',''),
(4,'NO','','','0000-00-00 00:00:00','',''),
(5,'NO','','','0000-00-00 00:00:00','',''),
(6,'NO','','','0000-00-00 00:00:00','',''),
(7,'NO','','','0000-00-00 00:00:00','',''),
(8,'NO','','','0000-00-00 00:00:00','',''),
(9,'NO','','','0000-00-00 00:00:00','',''),
(10,'NO','10.49403349','-66.83189567','2016-06-27 18:13:31','dYg2WeK9sNc:APA91bHzxnj3IIRrm9t3zRPguPyziB9CPTuj2Dtcvh_TK8j-R2bJ2jZSGHfA4Lz2MxJi1pJcvlHfRY-nKxXJvVR9ozFjsmy_VPMrMx9VWsJQ63kVbin2piLrTcQNheaMw6GVIwtAxnKP',''),
(11,'NO','','','0000-00-00 00:00:00','',''),
(12,'NO','','','0000-00-00 00:00:00','',''),
(13,'SI','8.3472507512499','-62.646800254508','2016-06-12 16:55:39','f1-M9IsYCwM:APA91bHoriuiKKOhUnJpwZNrk38VcLrXOL7aFBLcqXBL9fTFR5myl19e0vHLSZnaffBnZAGDfvCdo3MH_bETG6TFNPZcKFtAlX-krv_QJamYWYnV3_7YvB1BOuzNHPTKEUPcMGfwQ77J','db990003ca70689d'),
(14,'NO','','','0000-00-00 00:00:00','',''),
(15,'NO','10.394401666667','-66.889401666667','2016-06-25 22:19:44','ekk-aAWa5ik:APA91bH2vqCyhfbDFlQqU1CVvGdYl7ParGqM3NpIsYTwLqiWJLF0E4SkV1jYVb9iwuEj30ar1rJjwini5-w6O2jOdgE9EGSJ5A2lx6NKr4YOfUj2qxdxRNDl9nCdKNvP4TbdbEFuGuC6','e482af27d9eca367'),
(16,'NO','','','0000-00-00 00:00:00','',''),
(17,'NO','','','0000-00-00 00:00:00','',''),
(18,'NO','','','0000-00-00 00:00:00','',''),
(19,'NO','','','0000-00-00 00:00:00','',''),
(20,'NO','','','0000-00-00 00:00:00','',''),
(21,'NO','','','0000-00-00 00:00:00','',''),
(22,'NO','','','0000-00-00 00:00:00','',''),
(23,'NO','10.4702691','-66.6012212','2016-06-13 17:15:47','ee4aVPuwhGk:APA91bGWs4VIo69Waf5D2YVAjW8Tj2O5FsmcpXx6cPXojtbdhw5uhB7hGegx17jmtU7Ok2-sbFduMZBy1pqTVidS9JrTq90TfKWCza5ux7xk8eNhJgTFsvMW2QCDu5VV4MuqFdxrptlq',''),
(24,'NO','','','0000-00-00 00:00:00','',''),
(25,'NO','10.4937808','-66.8320832','2016-06-25 12:37:25','fNoh6hpr0jE:APA91bHRDJnWzneD845qvljLK_dJ3RW3rB9FFRkCDLNHSySXKoKq3VaUAUsymclGUOvPr4ir0MQLKKcUe3QVgCCp-LVmhWo5sL-bqTin2cc9tUFsqAUrDkCVN8uwADYlKMhBFwoRgzXb',''),
(26,'NO','','','0000-00-00 00:00:00','',''),
(27,'NO','','','0000-00-00 00:00:00','',''),
(28,'NO','','','0000-00-00 00:00:00','',''),
(29,'NO','7.8321016666667','-72.254078333333','2016-06-13 23:41:42','dCUcKRuhxGo:APA91bHLwvtAwHEYDVZ3PlwLkZnicUH_Yhe1BNqyMG4pXsUpJRyJlo1zYvUkmFP568iYIsb4F_U5mQhVWSFu7DvFJ6VLMNSNMVRU-pdEQWS-d-L6sdi8LgTPdwl6iTEkILbkLw3fSDqb','a362b749eca7dc2b'),
(30,'NO','10.37008664','-66.98340023','2016-06-09 14:25:41','fQnWXoMLTZY:APA91bHNqZ_-ZfC_4fFbQcVZRBMxtulTwnadEA1hr3z_Vp_-7eiTVE58RER50Y-VeyxzvSY-Qr61ThUecHSULqF5T2-N0MOrEcpzllHEx03z-Vhol108p6BoQriFdWS5Xa9l2-VRXw6S','c91ef403c74e75f2'),
(31,'NO','','','0000-00-00 00:00:00','',''),
(32,'NO','','','0000-00-00 00:00:00','',''),
(33,'NO','','','0000-00-00 00:00:00','',''),
(34,'NO','10.013955','-69.307063333333','2016-06-30 08:00:05','dbN9sZnXSZQ:APA91bELlu3PQ8el9-R22BlZVgYFg4nKhvkZUvONIBPy3YnV49c7SGApTCEZCejahc-mMprgZseitror0Z0NElZvxdBeQDhDl6v4Q1S7QUe2xLJEfPvOd-Wfkbimza9gfKqNKGpSBl3o','83d8da2ec41ee24e'),
(35,'SI','10.0315415','-69.2801089','2016-06-28 11:23:25','eCUUj1xz2eM:APA91bHyYkC3kCQnOcb5iXwx1XX2eA9lfXoCc1KNai0NiZ-vQ2p5VgpldEfBpcl3wVrgaT5spaSPGta-7kvIeOQtKcImNoV9mY_9T921RAbcy675DfFBsJyYP4-Y2ErQZ34kBOecMA9P','e7b0f91ce6599883'),
(36,'NO','','','0000-00-00 00:00:00','',''),
(37,'NO','','','0000-00-00 00:00:00','',''),
(38,'NO','','','0000-00-00 00:00:00','',''),
(39,'NO','','','0000-00-00 00:00:00','',''),
(40,'NO','','','0000-00-00 00:00:00','',''),
(41,'NO','','','0000-00-00 00:00:00','',''),
(42,'NO','','','0000-00-00 00:00:00','',''),
(43,'NO','','','0000-00-00 00:00:00','',''),
(44,'NO','','','0000-00-00 00:00:00','',''),
(45,'NO','','','0000-00-00 00:00:00','',''),
(46,'NO','','','0000-00-00 00:00:00','',''),
(47,'NO','9.2924066666667','-69.437728333333','2016-06-08 19:43:11','e8Hhggmdhpo:APA91bH1d3bwRwxeJUgWAQEgQezG5jANlI6cK7j-ZiHejcg5VTVTekj1WMEzAuky-52DRALGSvMjd5rHiUpgc4gmjCrgOkg-XwNehmSlbsDCwogHuduizkJUH0PAjY_yuZSwc4N1lxpJ',''),
(48,'NO','','','0000-00-00 00:00:00','',''),
(49,'NO','','','0000-00-00 00:00:00','',''),
(50,'NO','','','0000-00-00 00:00:00','',''),
(51,'NO','9.315935','-70.6171143','2016-06-05 22:28:01','dIZS5pyU20M:APA91bFAtTQ5di2Ggy1fU8a7-dm0BwJlTCpX3ut8am8FIlBsUBN3V6jbGrhKe9Odb5VoMCGzoM6Fl_xQ7xILZykhU-6QM6evwRzvcuoN-uKp6-_ZL_sfSrz8BZKMcCoHALx2rUDdBU4j',''),
(52,'NO','10.4977485','-66.8879602','2016-06-03 12:53:48','dQNOHREVma0:APA91bHbhxD-ay2fCFrKLpHTT04Pa9J7F85NxdpTg6ik3wc4gpBbzmZ5hVgqZv9yT1lx-IUj7lpExPAAUdH6S0TWe4ec24OtbmZPbvGWD8T8aTiRG4KTeNb6G-eF1H21G8n4NrQIGaHC',''),
(53,'NO','','','0000-00-00 00:00:00','',''),
(54,'NO','','','0000-00-00 00:00:00','',''),
(55,'NO','','','0000-00-00 00:00:00','',''),
(56,'NO','','','0000-00-00 00:00:00','',''),
(57,'NO','','','0000-00-00 00:00:00','',''),
(58,'NO','','','0000-00-00 00:00:00','',''),
(59,'NO','','','0000-00-00 00:00:00','',''),
(60,'NO','','','0000-00-00 00:00:00','',''),
(61,'NO','','','0000-00-00 00:00:00','',''),
(62,'NO','','','0000-00-00 00:00:00','',''),
(63,'NO','','','0000-00-00 00:00:00','',''),
(64,'NO','','','0000-00-00 00:00:00','',''),
(65,'NO','','','0000-00-00 00:00:00','',''),
(66,'NO','','','0000-00-00 00:00:00','',''),
(67,'NO','','','2016-06-26 17:23:54','',''),
(68,'NO','','','0000-00-00 00:00:00','',''),
(69,'NO','','','0000-00-00 00:00:00','',''),
(70,'NO','','','0000-00-00 00:00:00','',''),
(71,'NO','','','0000-00-00 00:00:00','',''),
(72,'NO','','','0000-00-00 00:00:00','',''),
(73,'NO','9.5338915','-69.2179778','2016-06-05 21:18:00','e2NgMj1SCkY:APA91bGSUJfqW9sKPGmBhZHEGzmYDVat-zSKabZUKyXEgtJ0xbvBmn0cAzJIeQwITKrB6LqI3kG9_vPSA_PKqHy23otxGFEYhis7ahwXm_4RLqVqAtQPRO1XSpLKCpqqdAG7m8X9ene3',''),
(74,'NO','','','0000-00-00 00:00:00','',''),
(75,'NO','','','0000-00-00 00:00:00','',''),
(76,'NO','','','0000-00-00 00:00:00','',''),
(77,'NO','','','0000-00-00 00:00:00','',''),
(78,'NO','','','0000-00-00 00:00:00','',''),
(79,'NO','','','0000-00-00 00:00:00','',''),
(80,'NO','','','0000-00-00 00:00:00','',''),
(81,'NO','10.0502577','-69.3677562','2016-06-20 13:23:23','ekhKzIXtslM:APA91bHGneEq2iWUamQXV3iuiXkNr2XfLSgydxVH8NXabrXRKW9o3HXIehN-qRRi_HF1nX5_v4wUQtXtfBTKulooVyENlVWQKyfx7Z8OwGP-KragAZ8Lb8L0wg04pC2h8ghsUEThhCgq',''),
(82,'NO','','','0000-00-00 00:00:00','',''),
(83,'NO','10.067038333333','-70.919436666667','2016-06-05 08:33:30','eOVwg423g5k:APA91bGDYYjHz9PzVrmiDYI2PypFrJnbzPB61CiPcOZpUPqYR5hE5TU_FsWDc9JdKHHDRlhh4y3R5dDXt5rKQm0BIgyxZdv0iKj2hZXb7Zq1ScxZ78_9AAquTxOZrEtGuh5twpNUzuBk',''),
(84,'NO','10.53288762','-71.68029357','2016-06-19 14:47:46','dQZnBJpQml8:APA91bFVlAfVA613bEFSgREiO49j_9tb8xfPUFXzaKVb2cDx6trumocECbYHdsHovdCYTHdWXWlHrvEEeCxBnI0YW2SZnzOyoLIDUpGtFMRpxp8jMQr7chp8Zyn96MZtb5j5Rpp5geRi',''),
(85,'NO','','','0000-00-00 00:00:00','',''),
(86,'NO','','','0000-00-00 00:00:00','',''),
(87,'NO','','','0000-00-00 00:00:00','',''),
(88,'NO','','','0000-00-00 00:00:00','',''),
(89,'SI','8.9001228','-64.2505094','2016-06-14 13:03:38','dUQGYHffmlQ:APA91bF3pT170L2p_2_ymUSDEB5OtgNkm9ALI1wXkgYSBi7tHQ_faFYcbH5x1zoMYUxTNJ0atVNp4d95i3DBVdDoBCpVlROHIwVft7chwfzHpbyfJDfnu8huaqIXPnkwnK1bVDt9CY79','725d7ea37fa30b92'),
(90,'NO','','','0000-00-00 00:00:00','',''),
(91,'NO','','','2016-06-08 20:05:34','fnQLF2zhDc0:APA91bGcGBjALgs1Qmvy9Cyc4ek0mGu1OdXBdZ3UXqhdoIc0MOyHcrCJqMIhDGf0lM4ZtZ5-OmXZmjRyOnQ6OhiD1NPk4uz2Z3Dju3eERBLxCYi-Gq4u5B8Ua5-4KKG22JPtq9kVHjBU',''),
(92,'NO','','','0000-00-00 00:00:00','',''),
(93,'NO','','','0000-00-00 00:00:00','',''),
(94,'NO','','','0000-00-00 00:00:00','',''),
(95,'NO','','','0000-00-00 00:00:00','',''),
(96,'NO','10.496038573306','-66.887244089386','2016-06-12 15:44:36','dFXALKSBW6Y:APA91bHw-xYZJh6e9scYtUGnLVvyZRo3ItBx9XC50oQlIIfuHSDr5BcLphxPZcTm32rbHinwMA2k80HWh4W5THJ1Dhib4fMBfxCGY0qntDgfVCCi4ft3oAnlWDmuhcbNn8qQeKuMDn72','22d59124bb06f814'),
(97,'NO','','','0000-00-00 00:00:00','',''),
(98,'NO','','','0000-00-00 00:00:00','',''),
(99,'NO','','','0000-00-00 00:00:00','',''),
(100,'NO','','','2016-06-02 14:37:03','e9kiywj7_44:APA91bGMikjdAvGpz4byswUb1iefkHLUFAw64SGII8GXBC_9aym557QpGpFmhh49DNxHUAqhLSxoG0wU5f3Vab5AtwasaRjsF51bWTALZleOs79XuUNT1FdNWKE2inGSQA6ZfCsWJON5',''),
(101,'NO','','','0000-00-00 00:00:00','',''),
(102,'NO','','','0000-00-00 00:00:00','',''),
(103,'NO','','','0000-00-00 00:00:00','',''),
(104,'NO','','','0000-00-00 00:00:00','',''),
(105,'NO','','','0000-00-00 00:00:00','',''),
(106,'NO','','','0000-00-00 00:00:00','',''),
(107,'NO','','','0000-00-00 00:00:00','',''),
(108,'NO','','','0000-00-00 00:00:00','',''),
(109,'NO','','','0000-00-00 00:00:00','',''),
(110,'NO','','','0000-00-00 00:00:00','',''),
(111,'SI','7.8182273','-71.1859478','2016-06-25 23:40:32','dfwTegjOwAo:APA91bHhdFThX4cphjsgSit1Pdanh9lOVA61DBZ_GbtTCytcw0apjuUhr69I_mp5x8ZWWXpikaBss1CPgOsMqzz7M1g5wx6TZdrk_Zk38OpomeguYMa6cY1D7la5BE0tFJF5u1_X25B4','7570635a6109add1'),
(112,'SI','8.6105916666667','-70.274628333333','2016-06-29 23:25:48','dmMbY0Pk5HE:APA91bFtlMVaB_DPqTgmT1qnDR1pbiZqeZIX7f6HLmwZYm_ankWTaHx47qxP5hKluP5-zN4lhHNECCaWhcH6nlmMao8gL6iVcj-eVnPkKj9Z39d5Anx0s07PSOvMBGLgVLrfls-9aBwC','1e34d4ef605dae1e'),
(113,'NO','','','0000-00-00 00:00:00','',''),
(114,'NO','','','0000-00-00 00:00:00','',''),
(115,'NO','','','0000-00-00 00:00:00','',''),
(116,'NO','','','0000-00-00 00:00:00','',''),
(117,'NO','','','0000-00-00 00:00:00','',''),
(118,'NO','','','0000-00-00 00:00:00','',''),
(119,'NO','','','0000-00-00 00:00:00','',''),
(120,'NO','','','0000-00-00 00:00:00','',''),
(121,'NO','','','0000-00-00 00:00:00','',''),
(122,'NO','','','0000-00-00 00:00:00','',''),
(123,'NO','','','0000-00-00 00:00:00','',''),
(124,'NO','','','0000-00-00 00:00:00','',''),
(125,'NO','10.1584516','-67.9976648','2016-06-18 08:02:39','deUlw7cl1vc:APA91bEs4emxYAf7dM0WJIayrARfa4SzIRvMWKEPzAWO9VJBvV13ZYbvaSqzHqF9TvHl3odv1LkTsTX2Dl4Vtm7V5spXWkneQRZKBJN3H2SpuFa3QI68R9mabikwQlexd97YDlaSAt6e',''),
(126,'NO','','','0000-00-00 00:00:00','',''),
(127,'NO','','','0000-00-00 00:00:00','',''),
(128,'NO','','','0000-00-00 00:00:00','',''),
(129,'NO','10.271722882606','-67.981226575426','2016-06-06 18:14:57','eozgZX8pQeU:APA91bEaFhQgzsI3d4Ee-3FgE7L58VaWGGlA1FD-XkjSisgEQ_cG4Mhyd_9pLri48ac43SZdvhIkU62o915eRnm4Tl5TGVgcyWiZa4Avj7aCtyEKARML73_4nK7XGI_R3WHpsBccsEpx','eb131fa15dba14ea'),
(130,'NO','','','0000-00-00 00:00:00','',''),
(131,'NO','10.2267701','-67.9622411','2016-06-26 00:48:36','c_T5RsMmtFQ:APA91bEylLPhnmQs26Sepgh0NzFBn-ZmUOyLb232dFelCRwzrZAWY-tseEYAxylWtgRY_HNI5hHkgDrQVfirc31JD0tSgb9nkkUUAen9_84ZrSkJW5JIrr9Dbzhe-L7TchZzZwPXROs2',''),
(132,'NO','','','0000-00-00 00:00:00','',''),
(133,'NO','','','0000-00-00 00:00:00','',''),
(134,'NO','','','0000-00-00 00:00:00','',''),
(135,'NO','','','0000-00-00 00:00:00','',''),
(136,'NO','','','0000-00-00 00:00:00','',''),
(137,'NO','','','0000-00-00 00:00:00','',''),
(138,'NO','','','0000-00-00 00:00:00','',''),
(139,'NO','','','0000-00-00 00:00:00','',''),
(140,'NO','','','0000-00-00 00:00:00','',''),
(141,'NO','','','0000-00-00 00:00:00','',''),
(142,'NO','','','0000-00-00 00:00:00','',''),
(143,'NO','','','0000-00-00 00:00:00','',''),
(144,'NO','','','0000-00-00 00:00:00','',''),
(145,'NO','','','0000-00-00 00:00:00','',''),
(146,'NO','','','0000-00-00 00:00:00','',''),
(147,'NO','','','0000-00-00 00:00:00','',''),
(148,'NO','','','0000-00-00 00:00:00','',''),
(149,'NO','','','2016-06-02 07:43:59','eHM8aYVFOuc:APA91bFHfVye528CmIc5eM3yqPR7wYTLtf99_nfTgaSOjTKbpEbjUD4EyVUcTAsC8QBEB-CCdU408nqcPPR4KY3eBmmnNI_552-y_yJ4bkgayk-MqSSperdvP1ntrCOcpvcaBFrtHufP',''),
(150,'NO','10.28075267','-67.92657115','2016-06-04 15:35:59','ec3rMoEovDU:APA91bHtcZ85QfS8j5F_v-PhkkzeZVt22ArIO_YF7F6eqFNVi7jhxCndu3I3us2HjM14uD9UT5ercRwb9_9PyG2dJw_TPoaqYbUP51x-7eBoPAmCEY9aiuRYB5CQq3_erq455i7URQBk',''),
(151,'NO','','','0000-00-00 00:00:00','',''),
(152,'NO','','','0000-00-00 00:00:00','',''),
(153,'NO','10.230018364815','-68.011598978265','2016-06-02 22:20:53','ftZkHtXvvtg:APA91bENCaqiF8tT5QTb0b7KCVBPL3GkVnZkGut2DxKjhFC6O7tQGL4b5-5_uZD4Eu3vYwKw4yUGpCwftdKB6bMEj802j_E2dO5hXNuQP4xJPXstsvmWlTfjWFaXeuziok_HDdq62n2M',''),
(154,'NO','','','0000-00-00 00:00:00','',''),
(155,'NO','','','0000-00-00 00:00:00','',''),
(156,'SI','11.020215','-68.632605','2016-06-28 10:00:46','dXRKaJUYKE8:APA91bED2oI4WLtAr-qrOCgGoyIKGKGyEtThBApECovpAS2gOIEMspytUG46wSDKBOBDjUm-GAeSaUu94VLbeZF96vA-VCWENcklqCKCZeBeIntH7167vHJAhafc1QblqimPiYgg8xyq','a56ad4279258fa40'),
(157,'NO','','','0000-00-00 00:00:00','',''),
(158,'NO','','','0000-00-00 00:00:00','',''),
(159,'NO','','','0000-00-00 00:00:00','',''),
(160,'NO','','','0000-00-00 00:00:00','',''),
(161,'NO','','','0000-00-00 00:00:00','',''),
(162,'NO','','','0000-00-00 00:00:00','',''),
(163,'NO','10.257653','-68.0201285','2016-06-02 13:14:48','dz79PZz0aBk:APA91bFQMo1jzyiYxhAAPnUCRR1bDFT1sHftZtxUaBZT2_TTHvJ1uJj3c-1rUfwY3DWXZ6Iw0992uPOrK6PWqwtKHftRd-5BlR5jDBAF8w78hxQX5UnV9mGsDbwYxd3fJPZU4cx1krE4',''),
(164,'NO','','','0000-00-00 00:00:00','',''),
(165,'NO','','','2016-06-12 18:43:32','fJQ7hUvN8Wo:APA91bGrYpfpejnDqMQhSvQfL5zbxStfDXRxEoWIHJVnhW6yrtgJR5ClNfpZC8WhyUDxKfyVYz2fysJrCqGH_TT9vRQe5T6aZU8OyvFrULZnpuG6n4zhrj-V7kWyTauEzUEqe5ltMjBX','224c32d3a73d8b9'),
(166,'NO','','','0000-00-00 00:00:00','',''),
(167,'SI','10.18847','-67.947303333333','2016-06-29 11:25:57','c2das6yo7Vo:APA91bEo88dLxQHFJSXVIoXELsz4nxOo_965ouBlXykDcaQLOfoKv_QjfUJFy27DdTjgRSPYhbLfbMB_ArYs3MBIGK5SZvKcrGwcUbEtiF0SG7KG8WjlBcNPQaKbv9yLH6p7XGjBdTq4','6ba2d377b7b3e606'),
(168,'NO','','','0000-00-00 00:00:00','',''),
(169,'NO','','','0000-00-00 00:00:00','',''),
(170,'NO','','','0000-00-00 00:00:00','',''),
(171,'NO','','','2016-06-24 13:38:45','dIFWS7c2_m8:APA91bH8a9HIYouERsY6nmFvEg26kacqGtaTN1AQTfqBTl5nr1rJPmJCotlNcswuISjvnBD1CMWIvc-XNT2tNjbMgC98syGJDe9KWuJr7X92gI4yjNKYcXzCmABrBC4sWF5JA96UTiPu','32df27d7aae9c8a2'),
(172,'NO','','','0000-00-00 00:00:00','',''),
(173,'NO','','','0000-00-00 00:00:00','',''),
(174,'NO','','','0000-00-00 00:00:00','',''),
(175,'NO','','','0000-00-00 00:00:00','',''),
(176,'NO','','','0000-00-00 00:00:00','',''),
(177,'NO','','','0000-00-00 00:00:00','',''),
(178,'NO','','','0000-00-00 00:00:00','',''),
(179,'NO','','','0000-00-00 00:00:00','',''),
(180,'NO','','','0000-00-00 00:00:00','',''),
(181,'NO','','','0000-00-00 00:00:00','',''),
(182,'NO','','','0000-00-00 00:00:00','',''),
(183,'NO','','','0000-00-00 00:00:00','',''),
(184,'SI','','','2016-06-02 14:04:31','',''),
(185,'NO','','','0000-00-00 00:00:00','',''),
(186,'NO','','','0000-00-00 00:00:00','',''),
(187,'NO','','','0000-00-00 00:00:00','',''),
(188,'NO','','','0000-00-00 00:00:00','',''),
(189,'NO','','','0000-00-00 00:00:00','',''),
(190,'NO','','','0000-00-00 00:00:00','',''),
(191,'NO','','','0000-00-00 00:00:00','',''),
(192,'NO','','','0000-00-00 00:00:00','',''),
(193,'NO','','','0000-00-00 00:00:00','',''),
(194,'NO','','','0000-00-00 00:00:00','',''),
(195,'NO','','','0000-00-00 00:00:00','',''),
(196,'NO','','','0000-00-00 00:00:00','',''),
(197,'NO','','','0000-00-00 00:00:00','',''),
(198,'NO','10.464745','-66.821988333333','2016-06-19 12:29:26','eXGRx4YoQ80:APA91bF_g2rNtMtZQZOVNQAdY-F6bhm5dm4NEeJ6LS057RT7mGVGPknnRoOS0b3YyrowSYMbCYzYZSXlSOORyAzOr3EPXUb_TVcaE13DVbgcYWeIWdlyINsmn3Qa6bqz_0JhipUcqoZ3','3806146aa4e680e3'),
(199,'NO','','','0000-00-00 00:00:00','',''),
(200,'NO','','','0000-00-00 00:00:00','',''),
(201,'NO','10.475162','-67.0195027','2016-06-16 14:33:31','e4ws-eTW5dY:APA91bGviQwcSwEpEJ6RDUYro3TlZFs5bLM-1hVG2hZWZ7fFc-4PGzUgqizwiIhUQ1Xlm_SeWzuNZd7bhInjYSOuGu7-GMU-hTpStUzRGGcMgF263n10phEiaSPR9w93xJtC7gyRc5QU',''),
(202,'NO','','','0000-00-00 00:00:00','',''),
(203,'NO','10.4544442','-66.9175697','2016-06-08 18:10:25','cFN4WDDklhg:APA91bGqB0lAIAp1EpmzlDRCFnjgSABS8tKmVlK2JKMKlXNLwHKaf00rl773lFnF5pzD1MCWWmkWoQq2Ubkk6FBxaJrzTPNYx7suA3eNV35W4kZ-bldVAaTzT96ffrSjQGjTBWZbKNys','3d9f6458825a7ea5'),
(204,'NO','10.480947','-66.944184','2016-06-16 15:29:26','cfoabQt88HI:APA91bEy4IDIeBfH55lNgho7NBGivR-TA3aSAx5kliRha6qfAgWW8m63n2KNj632-dtAEy18MuDrWZVSAKSBYDGjHVu_n3-iq_RPX1aDbjxdLvOqt_a6TtwuBpdgZ5cq32SqJ8KU7hE5',''),
(205,'NO','','','0000-00-00 00:00:00','',''),
(206,'NO','','',NULL,NULL,''),
(207,'NO','','','0000-00-00 00:00:00','',''),
(208,'SI','','','2016-06-27 18:16:12','floow4FIx-o:APA91bFMW2ebWvBMXFviX23O0q8exISTeQpnz_GAXRdKRlzGGhUyj61jbHeWBhExPuEEqQU4brmvyhewCVU1PzFm78zL5sWJwHoYIHYefNYK2ALRmRYFe3CfdezV6rgxMC-pWOMVvIcn','af9d4b379a2b0ecc'),
(209,'NO','','','0000-00-00 00:00:00','',''),
(210,'NO','','','0000-00-00 00:00:00','',''),
(211,'NO','','','0000-00-00 00:00:00','',''),
(212,'NO','','','0000-00-00 00:00:00','',''),
(213,'NO','','','0000-00-00 00:00:00','',''),
(214,'NO','','','0000-00-00 00:00:00','',''),
(215,'NO','','','0000-00-00 00:00:00','',''),
(216,'NO','','','0000-00-00 00:00:00','',''),
(217,'NO','','','0000-00-00 00:00:00','',''),
(218,'NO','','','0000-00-00 00:00:00','',''),
(219,'NO','','','0000-00-00 00:00:00','',''),
(220,'NO','','','0000-00-00 00:00:00','',''),
(221,'NO','','','0000-00-00 00:00:00','',''),
(222,'NO','','','0000-00-00 00:00:00','',''),
(223,'NO','','','0000-00-00 00:00:00','',''),
(224,'NO','','','0000-00-00 00:00:00','',''),
(225,'NO','','','0000-00-00 00:00:00','',''),
(226,'NO','','','0000-00-00 00:00:00','',''),
(227,'SI','11.424686666667','-69.653956666667','2016-06-13 12:46:16','dWujG612YP8:APA91bE2GDTjvwzMAlIYX8VeRCCN8DXE_N4cv2Ex9lqvmI_zq_Uc35qYKbh1tySRXYnIF_trhbIx3YqCQ_NKmai_8XtgjM5pJS5ufQots23tlKz7NgH-wbdggVAtCeclurVO7h0M0AVk','3808b2e70c30cb66'),
(228,'SI','10.975207433708','-68.553051903149','2016-06-03 10:10:08','f3D5AE5wz4s:APA91bGLO3cfeZgA059zaeEZDQgWdYqWmy4QHEzpwb9CNEdIlQU8req1yMJ_X6sYGsnrJECJF-a1dMd8mZZxLmnyqGuVO2tO1WsXyUr7RUpvlY53Rh7wvvbI3QKjpgXKizhe2nIYQVN9','a1361f7a74c3499f'),
(229,'NO','','','0000-00-00 00:00:00','',''),
(230,'NO','','','0000-00-00 00:00:00','',''),
(231,'SI','11.020488333333','-68.632903333333','2016-06-22 15:10:37','ddayp8D3Ok4:APA91bEjMeaMyV4FvhhHmH5WeLgzyhaVI4gUdXBinnml2YeJQK0k526xN11jsyv3x1bXvQ4jxbHmZAvC3RvPwTWMt0HoNawRShz4YO-jeeXiV1d9q-M8Oha7s-7iGdmb4XVUbR2QNyuK','13cf39c33da4ba1d'),
(232,'NO','','','0000-00-00 00:00:00','',''),
(233,'NO','','','0000-00-00 00:00:00','',''),
(234,'NO','','','0000-00-00 00:00:00','',''),
(235,'NO','','','0000-00-00 00:00:00','',''),
(236,'NO','','','0000-00-00 00:00:00','',''),
(237,'NO','','','0000-00-00 00:00:00','',''),
(238,'NO','','','0000-00-00 00:00:00','',''),
(239,'NO','','','0000-00-00 00:00:00','',''),
(240,'NO','','','0000-00-00 00:00:00','',''),
(241,'NO','','','0000-00-00 00:00:00','',''),
(242,'NO','10.037938639644','-69.238110308931','2016-06-02 22:46:54','fboGIB1uJfU:APA91bEktJzqnslF2S8wUT7StNylaj4Pxw8x1aLcGiOukqFsF-Wo1GqTnpM66CvToDvEttJbc_XgcoXIeuOpGMPHUDZE6ALIr4OoZ_elYKOpS4deftXVle44G1LgvsCnxxk739DnR3F6',''),
(243,'NO','','','0000-00-00 00:00:00','',''),
(244,'NO','10.0291735','-69.4548045','2016-06-22 07:32:08','f0saEx2IMu4:APA91bFk6LM9PP0hueY3QnaB44ZG4CRttr-J86HD5n8Xf2LN-PgB_RbWnJcTDiDg_iHk6Idz0Vft3BUD2MncV5W09i76RrPzHBCc7N5skwdE0zkq80Uqi_g4nNAtVyLZq2B_pYhyt-pz','18b2db9543b10e90'),
(245,'NO','','','0000-00-00 00:00:00','',''),
(246,'NO','','','0000-00-00 00:00:00','',''),
(247,'NO','','','0000-00-00 00:00:00','',''),
(248,'NO','10.0772824','-69.355254','2016-06-12 11:07:41','cWuccx5nbGg:APA91bFHLHhVjJ7jAFwWAg_RVCVh4Oc3O78RjyiTGaI-YZqi9OWKZhzlEhDnb54EkbP_J6ZmovJdGYKajHCjP-OY63naeYjpVrymlrAL56YbtYlJQJtohG2C8ot56Fe7-xNOqgYGz-_F','5d248f10b354f509'),
(249,'NO','10.033541824749','-69.263330126286','2016-06-13 12:18:17','da4T8iPJszo:APA91bGIs2XqfLziZmd3i2m4nwUnUzJLkvb_Z5HKvR-TVm6CE7-H9rIE86IYHGakfHFgI-KQPftGr1EeQwkV7jkRkb3z-dB5XgneccHWizNx-LmxrUwE1IeJg82h5HQDr-2G031arIhK',''),
(250,'NO','','','0000-00-00 00:00:00','',''),
(251,'NO','','','0000-00-00 00:00:00','',''),
(252,'SI','10.236233370379','-67.564092809334','2016-06-24 07:29:10','cYPFTlN13vs:APA91bFCz3xCFmVFcuEDp8mCjA1OLz_Hh6rnugXNzGomkP8RYdrHDLmXbYnVSjandbsA8tqakFFkap_lkJKih4UpLbJlXtSagAYNyJvG0zuOK4Z-_JxMXNOIxfuSYgm05V286bEBzARB','f8e15afa5012817d'),
(253,'NO','','','0000-00-00 00:00:00','',''),
(254,'NO','','','2016-06-03 16:21:19','dEJqHhMCjKU:APA91bFjIqJ60d0D883zfSInqWViv2oGMtB2XzGQZhcqx0LffyQuydxJcetimpHZU1XRh1voei9hwE2VdCfBgVNHWmPrXwBwcooTh53BgqQ6ZHorVZHXq2VMRwgmRWFMCN2yMR0dPQcj','d7b28f98b0898612'),
(255,'NO','','','0000-00-00 00:00:00','',''),
(256,'NO','','','0000-00-00 00:00:00','',''),
(257,'NO','10.0908627','-69.315962','2016-06-22 22:29:45','ehgG4iak_p0:APA91bH6k9mVfMheSB2fh48zhxlbPwBO1X4i33JTi4f92hb8U3yITfBBw_UE2otlREDVStdldKoiCOivFnHEbIwx5vubgjJokdzspmJGS0xY1QSk8dm0pNu6Wvkn-eFrvaMqtZp7Xgph',''),
(258,'NO','','','0000-00-00 00:00:00','',''),
(259,'NO','','','0000-00-00 00:00:00','',''),
(260,'NO','','','0000-00-00 00:00:00','',''),
(261,'NO','','','0000-00-00 00:00:00','',''),
(262,'NO','','','0000-00-00 00:00:00','',''),
(263,'NO','','','0000-00-00 00:00:00','',''),
(264,'NO','','','0000-00-00 00:00:00','',''),
(265,'NO','','','0000-00-00 00:00:00','',''),
(266,'NO','','','0000-00-00 00:00:00','',''),
(267,'NO','','','0000-00-00 00:00:00','',''),
(268,'NO','','','0000-00-00 00:00:00','',''),
(269,'NO','','','0000-00-00 00:00:00','',''),
(270,'NO','','','0000-00-00 00:00:00','',''),
(271,'NO','10.05149114','-69.34396548','2016-06-11 16:14:57','c0-h_WQEiqo:APA91bFJmJgf4d1rsJkuGSld6Lgs2_CiuPU4CwQ5kD66P2cI5u-QWemtksLDSEHgEvBJj47k8UiFC-afUCBzxqkBoDS3h1W3IAFoXgLqXT4MePqT7pkYHnLMCFaMo6vIGi-NIr_MeqSu','31eb6bc11fe9164f'),
(272,'SI','10.0291114','-69.3882267','2016-06-15 16:18:46','f-MMbWcG76o:APA91bG6T_XBOEbWdyMTg_Xyb6cp-JiTuRv-lFhlVb2I2mhwzYJejmuNqzeSozsc65XUiNZ27Pw-zLFI09A6o-ZLCPcQG4anDOGVtK-IZ8zFTqMWak7BZWSwIgsGPhvXuaVOBYkplgpY','bb27a7eb3798a82c'),
(273,'NO','10.04713','-69.399508333333','2016-06-09 18:37:42','eZvMczF73kA:APA91bH08EjSR0k9gq__eeghUx8S7LG7czOk33g4-Y150T8V9VBC9xoTsJLahpV2Q5lI2uBUbGWaznIu66JF4QCT5x96tVjEhVVCerQatcjpQYYEW0EEQE3w7mRQsl7_YWsQ8xVIOw7G','392365f857156c26'),
(274,'NO','','','0000-00-00 00:00:00','',''),
(275,'NO','','','0000-00-00 00:00:00','',''),
(276,'SI','10.028724909414','-69.388288939424','2016-06-11 12:49:33','dEunUD9qmCA:APA91bFbnRkhZLrpHW0E2abqUJFv7pYDm_T7MeknylkYuMBle-nLJjqqIfkht03M5rEPGN85UJMQ4VVs88yD0v7lzXF0aRmJOWM9-aCWqQsIkH4GWNLUy_mSLZzjUGzgh89FyxsHraXL','44dc4ddba396509c'),
(277,'NO','','','0000-00-00 00:00:00','',''),
(278,'NO','','','0000-00-00 00:00:00','',''),
(279,'NO','10.048947751068','-69.361983733826','2016-06-15 10:12:37','eFsWM1XcGJ8:APA91bHO5UeYWAgLtUdRP7kuxIBWmhdVhrxRDbVh8vSKBMwGoEtazDGXa-yjcAylgQ7eoMPPcUUFbNEqBeGuET6c6m-CeGSYlFkVkl8PdmdlOR9BCeuoZXconEYMJKNZ2Lt6aVvASwDJ',''),
(280,'SI','','','2016-06-10 17:17:26','fIxgyEdCFT0:APA91bEI9w1RXdzVMMsYP9hk_vkS64e3mfXRVeW73POLn2qJOsIKPTFxepKC1JOuvPUhe7CaPip7kUuKYaGZJjov-X8TftD-rvArFgOHoU67pPDgUwW1rTKuXokNMvU8myDD7ch7h4Bd','eb13b71da82ad53b'),
(281,'NO','10.4838559','-66.9645382','2016-06-08 21:05:33','d37XCAk9BVo:APA91bFPiWlu0Eo8dcae1RM-WTzNdaC1ev8C741IWnoPBCIwqbxHvN17UbiVX0p00E5SKJFcHJZjlrMt1EWwc-i2f0n3sZgzt9PIp9uSPoK9HzibOQ73kpfEn-74FgGfDX_yooRbhY96',''),
(282,'NO','','','0000-00-00 00:00:00','',''),
(283,'NO','','','0000-00-00 00:00:00','',''),
(284,'NO','','','0000-00-00 00:00:00','',''),
(285,'NO','','','0000-00-00 00:00:00','',''),
(286,'SI','8.913885','-71.318398333333','2016-06-29 18:07:24','fEzCrUeBXeo:APA91bHIUb3SOsHDdLCwoTFqlLhnrxFjxOSnteype5YE3iOmyFS3FQWzEsP66ek73xTNgWdykYL5D6pLwQt7qOg2XWJmRJMigRMyE7GRPq3b2rcpzOkdN_qTCRpBt2c8tG4zxYrcmvd2','213e4cc2df01436d'),
(287,'NO','','','0000-00-00 00:00:00','',''),
(288,'NO','','','0000-00-00 00:00:00','',''),
(289,'NO','','','0000-00-00 00:00:00','',''),
(290,'NO','','','0000-00-00 00:00:00','',''),
(291,'NO','','','0000-00-00 00:00:00','',''),
(292,'NO','','','0000-00-00 00:00:00','',''),
(293,'NO','','','0000-00-00 00:00:00','',''),
(294,'NO','','','0000-00-00 00:00:00','',''),
(295,'NO','8.61030789','-71.65188189','2016-06-03 10:56:15','dkAtcKJtBk4:APA91bGGUOViYQXFtIhe7IsldbAwrQvPEwTwLonAm5wlkpvfMefboSbDOgu2SPHCzZVOQ5UKA76AxWZ35KhEI4SUcgninu-fj3LeiCFx5MUiPuBpfinFC6QSws7mqha-eH9IT4OZIDJb',''),
(296,'NO','','','0000-00-00 00:00:00','',''),
(297,'NO','9.5443883333333','-70.631696666667','2016-06-28 07:03:38','fBCh8KTwBf4:APA91bFKRgMaodYrEZpXvCHlY21HGqDg-9WZtlWeCRcGVXqel4Y6KiST3078VJ0PniPTPWzVxNTX5AmwOHs0tK4kQ--oBzkIYJHoeNDNEThluftYbT2E_1XKutwuNIoNK7B0oGDdgAyM','4593ff0130dca21d'),
(298,'NO','','','0000-00-00 00:00:00','',''),
(299,'NO','','','0000-00-00 00:00:00','',''),
(300,'NO','','','0000-00-00 00:00:00','',''),
(301,'NO','','','0000-00-00 00:00:00','',''),
(302,'NO','','','0000-00-00 00:00:00','',''),
(303,'SI','8.630475','-71.1466','2016-06-28 20:29:56','fV2Y_lJfbjs:APA91bHyiGnnpiAxDhGe7IPPiNs6mc9S-ke5mxGYVi2t73RTgsVAZl7-HweGWU1AnIArwx3S8YP7XUVbr8n9PAtPIIdaTvNSVHhS-gWaVeisSGfTJtRvlvw44TKIUeot5nkVtq4wvw8L','9737dc6c6298d076'),
(304,'NO','','','0000-00-00 00:00:00','',''),
(305,'NO','','','0000-00-00 00:00:00','',''),
(306,'NO','','','0000-00-00 00:00:00','',''),
(307,'NO','','','0000-00-00 00:00:00','',''),
(308,'NO','9.1449012704985','-71.099880604932','2016-06-21 04:20:59','dkH2bupqXBc:APA91bF-B8wTmIMZ5KP5wT1wRcx_477EPvPjiDm1OOvIfUT8MYyqGXp_eWVQ9enl13sy1nWq3d6BZivrPDsYkiTuFnyHXdBe5cSd8hn5OgIiwidNM64ZHM4DO4zRr5LBeFDD_goh-ybD',''),
(309,'NO','8.7157983333333','-71.441466666667','2016-06-14 08:00:31','f6pNAfXvEaE:APA91bGqdXiSDdlYVPMMyN9HUubaeO4S81igz0XDubvmDWnRGqA0u0nnLyQy7GI9zhJ2ujQc0QvGgwEeHF-YTl9AlqJbt8agxW7jPx_zNdsQq425UJqJr6Xeo81nhtfSMAfcNu663t2q',''),
(310,'NO','','','0000-00-00 00:00:00','',''),
(311,'NO','','','0000-00-00 00:00:00','',''),
(312,'NO','','','0000-00-00 00:00:00','',''),
(313,'NO','','','0000-00-00 00:00:00','',''),
(314,'SI','8.5561905','-71.2344629','2016-06-29 21:58:23','en3VlKCoyZw:APA91bF8TLHG-C09bxDABeUo1srXkdtlCgFyE-fUFJBRcqWBu_oKdu89dijE6Hs0pgRPNfTXiVZ-EuUFiYcltA2zIdJp8DyqcF0n2tOdIIjsQKM7rcgyTGd80VKvNTgFJNpwM9xOiTzy','b5f6b7dd79bce07d'),
(315,'NO','','','0000-00-00 00:00:00','',''),
(316,'SI','8.61490139','-71.13817223','2016-06-22 07:49:03','fcKoZ7pvsg4:APA91bGjHqcQ9JuxZXeOmM6e8xkMnc1nHF1b_TD8IDBvZjL-a3DmAlPm_UoGOWsAvp5sSyyJEh4aHKOEUqJP6AAyF2QJfnip_KaPEV4kWDYIOTFTf4-xZ0UPpmXeNVoiV2r95nEo3e5y','306871eb55421fe1'),
(317,'NO','','','0000-00-00 00:00:00','',''),
(318,'NO','','','0000-00-00 00:00:00','',''),
(319,'NO','10.486925','-66.9324692','2016-06-25 12:18:49','crcPhUEmJ3U:APA91bEh2OUmjHY1GJAIzIFadPYu16g3z5ucZajF1juCFazdT7u6nRGuXU5fZh7qDZTcoLbsCaZLruLal7xViO8CPOw8jartlncKUSISe3e3cfhtbyEMApelGPZncPJVguiRpsVpDJDG',''),
(320,'NO','','','0000-00-00 00:00:00','',''),
(321,'NO','','','0000-00-00 00:00:00','',''),
(322,'NO','10.4600851','-66.5499264','2016-06-25 21:03:25','ebYs0FWfzmE:APA91bG9YRThJOfELEp_xiT9cb4f2Mg-MG_uOAyH--Srq_j8f7PqCgY2zfJC4ag-kNUOqFH_7fgTamOWwcaP45k1zsmmEoDxYuanTMpN0o2EB7cBL9Vn_G9prqxdiqW-_mXBSTQW9M1i','413f3e4bc3592ebc'),
(323,'NO','','','0000-00-00 00:00:00','',''),
(324,'NO','','','0000-00-00 00:00:00','',''),
(325,'NO','','','0000-00-00 00:00:00','',''),
(326,'NO','','','0000-00-00 00:00:00','',''),
(327,'NO','','','0000-00-00 00:00:00','',''),
(328,'NO','','','0000-00-00 00:00:00','',''),
(329,'NO','','','0000-00-00 00:00:00','',''),
(330,'NO','','','2016-06-02 11:44:08','ehaFuiPVnbw:APA91bHEw_gtKszu9TgpCcNPTDQcrjv7U1DKauqjrvkI8Co7JquUIo6pL0Pr_VfRU_tI4gEEj3QGXSExKlVKNeo-ozaSOqhbjRdEeTTOeV8NlHsNunpYYbT-ZaGc62Nnx7CfGRkXl3-L',''),
(331,'NO','','','0000-00-00 00:00:00','',''),
(332,'NO','','','0000-00-00 00:00:00','',''),
(333,'NO','10.4924391','-66.8350746','2016-06-23 15:59:20','carlRQ9aesY:APA91bGXNl_HCThOXCEjxafuhO6uGEMSN0-DDg-ZZcwNqrQ3CGPo3nEhgoITdg7QW4iCSUctVDp49wrX7UleHK6JR8aoU6MdcosTXhpSokPrAr9oD4FN2kliBZxH4J57QXYi7usWvzfT',''),
(334,'NO','','','0000-00-00 00:00:00','',''),
(335,'NO','','','0000-00-00 00:00:00','',''),
(336,'NO','','','0000-00-00 00:00:00','',''),
(337,'NO','','','0000-00-00 00:00:00','',''),
(338,'NO','','','0000-00-00 00:00:00','',''),
(339,'SI','10.21101771','-66.13297888','2016-06-11 08:33:29','fB1sL9vFeDw:APA91bEwluAgX9a6M4NpnzYxXXfq4ZYzr8Op8SseF0tTaGVlIdK72aGf00qSgHHHb_BkQIpzoWb56AdXH2Zfw8YUDfNpJv8HucrqY5TpUE1ZJxRDTRC0gKhgDZ9rCBap1FjXwguLYuTr','6d327857856d58cd'),
(340,'NO','','','0000-00-00 00:00:00','',''),
(341,'NO','','','0000-00-00 00:00:00','',''),
(342,'NO','','','0000-00-00 00:00:00','',''),
(343,'NO','','','0000-00-00 00:00:00','',''),
(344,'NO','10.4521382','-66.4848484','2016-06-01 20:18:04','ev0omGqWH6s:APA91bGKinY7FvY3IA-6S2G4phRDZ7EkLYw39nPqjdpP6oPi8nV81HgLcBosijMEybqEiHXPjmR7PzkYVEInCRNF6d-DikRwrbCXS3LR7mi17pqpMOh0iohNaYKmQsLxCLt5sXOa2Apv','3710c3b164707216'),
(345,'NO','','','0000-00-00 00:00:00','',''),
(346,'NO','','','0000-00-00 00:00:00','',''),
(347,'NO','','','0000-00-00 00:00:00','',''),
(348,'NO','','','0000-00-00 00:00:00','',''),
(349,'NO','','','0000-00-00 00:00:00','',''),
(350,'NO','','','0000-00-00 00:00:00','',''),
(351,'NO','','','0000-00-00 00:00:00','',''),
(352,'NO','','','0000-00-00 00:00:00','',''),
(353,'SI','10.397906666667','-66.964743333333','2016-06-15 12:40:34','eZ6FEoIcT2c:APA91bFI98Ok7Etai9-HOoku91Db9bZYv4fPw6_ftoAOavOa9QwqGjWF2Vs_LD3GYgU4FSxFd4LBtf3IeJsKB4Nbx0YgrpyWoAFPond8Cm2gvmucpOCSRV6e6q0bZZ1hsB65eqO0o7W1','af080b2cca8d3373'),
(354,'NO','','','0000-00-00 00:00:00','',''),
(355,'SI','10.4730031','-66.6817152','2016-06-02 08:11:03','dTbXBE7mviA:APA91bHJdoZNa-v_6xVp1luv8UWKi6ncy5lB2pJsKztD8byxRv6Uw3cTyAAqqKQUuAz-qRfl28I3I6yblbo40ykQE5da37UXZQ2qSdwklRfH09cRdVgcy00bOXi25gr-L6O7IgATciu6','ba70701c0e4a834c'),
(356,'SI','10.4742812','-66.6338329','2016-06-29 13:13:34','dalUla6joCc:APA91bGEVbM3-HGc24ZflU8_2zHq4UcnKiOMWONekInWdlLoz2sOCn8pBcWsYHP02Y8GRgNcCNy11i1OXoQaQlnLeN7TJZHBTRgDmwIjjc9Wl32Gsa1M2OK8uj5yUS9vmL4NqLD4XR8W','bc6679c6efe25d1a'),
(357,'NO','','','0000-00-00 00:00:00','',''),
(358,'NO','10.5137115','-66.9424294','2016-06-08 17:43:03','du-P0h-bqgs:APA91bESp5QWvJ6pl6ro53SiPTJnh4DQ6Iq123Sjv4Qt5hhPYnsAkm5ZotaYd_JktCMh9F-m7kqG-t33QTEdO13NFnLgfIEbijD14IzzqiNeDzk3PFF04CTwzMoQeHelrW39dgATwm1W',''),
(359,'NO','','','0000-00-00 00:00:00','',''),
(360,'NO','','','0000-00-00 00:00:00','',''),
(361,'NO','','','0000-00-00 00:00:00','',''),
(362,'NO','','','0000-00-00 00:00:00','',''),
(363,'NO','','','0000-00-00 00:00:00','',''),
(364,'NO','','','0000-00-00 00:00:00','',''),
(365,'NO','','','0000-00-00 00:00:00','',''),
(366,'NO','','','0000-00-00 00:00:00','',''),
(367,'NO','','','0000-00-00 00:00:00','',''),
(368,'NO','','','0000-00-00 00:00:00','',''),
(369,'NO','','','0000-00-00 00:00:00','',''),
(370,'NO','9.7681566666667','-63.205605','2016-06-09 09:43:48','fh4zJbBUjNY:APA91bF_Hm01CQEAwdVRyndRPPQO82CcoKj0KkGUmES9e6_F856taFKaAkSqmc5iNG1e6V0qU0_2aFRfW3RIJxGak1cCQ3lBHNHt2PHk3XS0mAR76Uk4hEqYMQyUe0ppI6s_Qfa_AKk0',''),
(371,'NO','','','0000-00-00 00:00:00','',''),
(372,'NO','','','0000-00-00 00:00:00','',''),
(373,'NO','','','0000-00-00 00:00:00','',''),
(374,'NO','','','0000-00-00 00:00:00','',''),
(375,'NO','','','0000-00-00 00:00:00','',''),
(376,'NO','','','0000-00-00 00:00:00','',''),
(377,'NO','','','0000-00-00 00:00:00','',''),
(378,'NO','','','0000-00-00 00:00:00','',''),
(379,'NO','','','0000-00-00 00:00:00','',''),
(380,'NO','','','0000-00-00 00:00:00','',''),
(381,'NO','','','0000-00-00 00:00:00','',''),
(382,'NO','','','0000-00-00 00:00:00','',''),
(383,'NO','','','0000-00-00 00:00:00','',''),
(384,'NO','','','0000-00-00 00:00:00','',''),
(385,'SI','10.9586188','-63.8668472','2016-06-22 08:04:21','f1b3-PIfOl4:APA91bEJQhZJF6qWRaXyAhKDmo17dgHMaZ4A9yIrW1Hk2_Ugb1w6oS0SXmUpWHf3KAETYpz3POrmYq0RO9-DTy16jB-vYkxT6bKEje-EH2fA57zet9JcUv24pSTmXUp9gyuugWGvUAB3','1e2e333e1b48fdd'),
(386,'NO','','','2016-06-03 10:09:12','',''),
(387,'NO','9.5303212','-69.2346228','2016-06-13 19:47:32','cvNcaOZlipQ:APA91bH8PTe7HtiIjEQrEUaNfNpmN2w4FPgVxJqtNr6c1HoyHLSOjl6C3aM9_kE9YST8FTWe40KGV7idPROV7aa7fdcUwwYq2P2t68ryzEFtUOpjp8nsX7OuxD4JGVHy9lPanu6HYCTD',''),
(388,'NO','','','0000-00-00 00:00:00','',''),
(389,'NO','','','0000-00-00 00:00:00','',''),
(390,'NO','','','0000-00-00 00:00:00','',''),
(391,'NO','','','0000-00-00 00:00:00','',''),
(392,'NO','','','0000-00-00 00:00:00','',''),
(393,'NO','','','0000-00-00 00:00:00','',''),
(394,'NO','','','0000-00-00 00:00:00','',''),
(395,'NO','','','0000-00-00 00:00:00','',''),
(396,'NO','','','0000-00-00 00:00:00','',''),
(397,'NO','','','0000-00-00 00:00:00','',''),
(398,'NO','','','0000-00-00 00:00:00','',''),
(399,'NO','','','0000-00-00 00:00:00','',''),
(400,'NO','','','0000-00-00 00:00:00','',''),
(401,'NO','','','0000-00-00 00:00:00','',''),
(402,'NO','','','2016-06-02 14:27:36','eoCNzHnFZQc:APA91bFtKU3aF-EMQqri17ZMnajwkEQPP7-3IWz8zTeZDy-LMrkQGWnhDG9TPKEh5a9Bx5B6ATN6vzX3dDsIz3LeE3vJosXQwwY2RdIydFa8zvnPHC2ZEQh3Bcn9LI9nk3vhy1VdVWYK',''),
(403,'NO','','','0000-00-00 00:00:00','',''),
(404,'NO','','','0000-00-00 00:00:00','',''),
(405,'NO','','','0000-00-00 00:00:00','',''),
(406,'NO','','','0000-00-00 00:00:00','',''),
(407,'NO','7.7502839','-72.2309173','2016-06-25 18:45:45','eqX2JaPJHEo:APA91bFHEjO6rSR3oyBiWvELvga8EeCllmLBYNoPFAH-nHlm6e-sZAPfXtos6oenziwhscy_XUXuJEe4p6JSEwzjfQeZ3kFzj7RXTSMvhIQN7pP3s7nnyG5OSNy0nM_TUGXDpcdfh8L-','e78ffe4c50967b89'),
(408,'NO','','','0000-00-00 00:00:00','',''),
(409,'NO','','','0000-00-00 00:00:00','',''),
(410,'NO','','','0000-00-00 00:00:00','',''),
(411,'NO','','','0000-00-00 00:00:00','',''),
(412,'NO','','','2016-06-02 20:39:03','ftsgFhGOfBY:APA91bF0wfKzmqEcpamGioAF3bdciaklJPMT44Upsie_HrSoVqknY9b3O3AKmXvYe5hT2McihEjAAXzSY2kmsMyhRj8ySpubFIGjGB39TdrT0gx83FTi0ev0JCsskXCYCzui2vjFJYtN',''),
(413,'NO','','','0000-00-00 00:00:00','',''),
(414,'NO','','','0000-00-00 00:00:00','',''),
(415,'NO','','','0000-00-00 00:00:00','',''),
(416,'NO','','','0000-00-00 00:00:00','',''),
(417,'NO','','','0000-00-00 00:00:00','',''),
(418,'NO','','','0000-00-00 00:00:00','',''),
(419,'NO','','','0000-00-00 00:00:00','',''),
(420,'NO','','','0000-00-00 00:00:00','',''),
(421,'NO','','','0000-00-00 00:00:00','',''),
(422,'NO','','','0000-00-00 00:00:00','',''),
(423,'NO','','','0000-00-00 00:00:00','',''),
(424,'NO','10.1046626','-69.1675033','2016-06-04 20:02:57','dAVatF_Zuz8:APA91bFIiRp70Iu1GGa_x8hskJztEKvAI3lqNp_axIge7MlvrHHI6QHTwjKH_AeC37kRquvjfVQXFDtSKokyly3fUedKuoaYLrKVNVNTg05t4CugB9c_p_dunyXTJNUnbSc_GCGwA1hW',''),
(425,'SI','10.2246928','-67.9616891','2016-06-28 19:09:48','c2HT5-FTSjQ:APA91bEnXKEhxcRSDYy0DFialcirrpC336kn_Af5Wo2DUB8Q0tU5aBFbwWy0Dcf8UL21wok5axhv0nJ7cMcMCxm6on2gF_RlPi8LEM9gofzLzPztchjAYlwxPc4n0tpTe4yZVyb7_g7Y','325400b13c3d67fb'),
(426,'NO','','','0000-00-00 00:00:00','',''),
(427,'NO','','','0000-00-00 00:00:00','',''),
(428,'NO','','','0000-00-00 00:00:00','',''),
(429,'NO','','','0000-00-00 00:00:00','',''),
(430,'NO','','','0000-00-00 00:00:00','',''),
(431,'NO','','','0000-00-00 00:00:00','',''),
(432,'NO','','','2016-06-08 12:41:38','',''),
(433,'NO','','','0000-00-00 00:00:00','',''),
(434,'NO','','','0000-00-00 00:00:00','',''),
(435,'NO','','','0000-00-00 00:00:00','',''),
(436,'NO','','','0000-00-00 00:00:00','',''),
(437,'NO','','','0000-00-00 00:00:00','',''),
(438,'NO','','','0000-00-00 00:00:00','',''),
(439,'NO','','','0000-00-00 00:00:00','',''),
(440,'NO','10.6404436','-71.6544523','2016-06-03 12:41:16','dqhfMhsjHLk:APA91bFQjZdSnWq6MevG67VFlDASYwfp5yycygfflWPh5sVW4TVh9ByFZ6-PDf5L6ukB05SDBEWlhMNa-3nULmgcf-7Ilzd10r-kMGioEgi36sRO44UAw4ORjBx9NyyxujFLueOb2FSE',''),
(441,'SI','10.719878333333','-71.63053','2016-06-27 07:29:04','ffdMK2i6Hvg:APA91bEFARFUozVAT9petq-st5tFqe_mcZ7Pfr_dlyc2qhvhmcOv7I1YboB25Erryp2hWuMtc4lmjuS2cnIPINoNg-qy0UsUaccAZTsdQGMkGTCNaJxCPMDgiDoPKu3amSkn3ZkevMnt','540abc7160f082f0'),
(442,'NO','10.696431666667','-71.65986','2016-06-05 19:19:35','fnNtSseyKbw:APA91bG75egcgmcNgjxuMrDT9MRvCfhI1xwBuhYS1qHYUbbPHdBR0BqFzARRE409ChYy4ifbgEwx5DSVXWPlw9WQ5cfSmkYo2pGgtoubqUJPAkx1d3iksA2nlnvqBYQkdJe1laLW-6-b',''),
(443,'NO','','','0000-00-00 00:00:00','',''),
(444,'NO','','','0000-00-00 00:00:00','',''),
(445,'NO','','','0000-00-00 00:00:00','',''),
(446,'NO','','','0000-00-00 00:00:00','',''),
(447,'NO','','','0000-00-00 00:00:00','',''),
(448,'SI','10.64234311','-71.68630177','2016-06-27 11:56:39','cIp6r48vRBQ:APA91bEGh_inWB77BmCcjMGzonAG7X0kBD6kBovaJ4s18-2OVEX7f_9qxhfx0_9xDC04YKVzMOiqyAEnpliIJSwyP39Hw9SNg1eDzDf_k4mgSNc0dL1IP9vSRgWd3r-tCBeCf8UCeHqJ','968f2f97513edb95'),
(449,'NO','','','0000-00-00 00:00:00','',''),
(450,'SI','10.681743333333','-71.66993','2016-06-30 06:50:37','fKAXAkyuYKo:APA91bGq3nXvPAKeYF_Z5bh8RCglWCOk47jQGIWhVooqXNhf8QWYB4OIlo8Qy82rOVjFVaNnTkp-4LYJfHoAu7leM9-gi1UvwMkdZxZNXkdYyKliawX698uKzWM4OVKp5EYHLsrHMtus','dd01c82876f9fb46'),
(451,'NO','','','0000-00-00 00:00:00','',''),
(452,'SI','10.633061666667','-71.6471','2016-06-05 16:25:21','crwcbq3YfIA:APA91bEeCxmf40qH3KS6OHs-IH6D8gn9PuWpbu2qPdQziJqVrbxsOGiSfsHgTNk_nf8ftvuECf0w_GwacdXlOetgKd3IEOWHnPbXUVIZwsOAorOQs_zLqnC0iYxT1RIjVpiTqynCDrBI','a66ddcdb8313474'),
(453,'NO','10.6182728','-71.6379091','2016-06-08 11:55:32','ehKlLE1mkmE:APA91bENLmEFxUPhALpo1PSc-JkC-t0S8ujq1jjFw-TDKlxmugKvSLJ3YFnPZVUVwzqscmq8Kd24oWkpUoSm2a5bgzoRlIyBtqnwgcn1jwGIxH60IhcO6Txkok2rqol4HRSSiLbrQLc8','d9f94274b6edaea8'),
(454,'NO','','','0000-00-00 00:00:00','',''),
(455,'NO','','','0000-00-00 00:00:00','',''),
(456,'NO','','','0000-00-00 00:00:00','',''),
(457,'NO','','','0000-00-00 00:00:00','',''),
(458,'NO','','','2016-06-01 11:13:29','',''),
(459,'NO','','','0000-00-00 00:00:00','',''),
(460,'NO','','','0000-00-00 00:00:00','',''),
(461,'NO','7.8368816666667','-72.254835','2016-06-12 12:07:15','c67x-OY8CoI:APA91bHctghLkX26oShn6wurutZG0yYX6ZsJhZu-a_3cVNEhmzWUlzbKwthJt_tG8-Kb0-o5r1D9hsuHP7XvBFoVlKhJ1W278cH1m3BgYKIbbUg4GN7fGECoKDkxW9RsjhabxsT1DJF1',''),
(462,'NO','','','0000-00-00 00:00:00','',''),
(463,'NO','10.059411666667','-69.334703333333','2016-06-29 23:17:55','djrDN2HWNws:APA91bFL73QZhg8BLxAmLyt0KfVTxbc3S9D7Rn0PSGAa0tfr2mWjM93yILxtkCYiCzTmWJOQhQneO5JCEXqfBi_QKAEpDm-pT7CALLcGOpraDUQx7GsZeLM9PX9VcwexJXQua_dsc5RO',''),
(464,'SI','10.333106666667','-66.87923','2016-06-25 19:39:52','eiNDAVnYreQ:APA91bGUe-s7p5vPqeOzMJwPED7CCs0Xt3n11PyoahPY61QFQQauSl2dnoLDwl7CrmYJdcqx9Zu9zhM1EXLXkXn1k5JVUmxUh_hgIgZ1URfnARr065uzvJ1aaD3aEWLyxiiCzGLV9ifJ','aac8d091a15688df'),
(465,'NO','','','2016-06-05 18:21:22',NULL,''),
(466,'NO','','','0000-00-00 00:00:00','',''),
(467,'NO','','','0000-00-00 00:00:00','',''),
(468,'NO','10.531775','-66.11271','2016-06-18 16:24:30','fdv86rguJMQ:APA91bHqUUprvKMcO4Zns-3_NSKp6Buj8zbwhB4hA0ybKPX4bJOStRu2afnwCTbd5BA7PclKuVANik6SQrnB9xDv5xOpn4Bv2jf6JllIcQVFe_gvGJCj_kEYxg2l_qkZpB3Sw_oGaMyo','48479e28fa69701d'),
(469,'NO','','','0000-00-00 00:00:00','',''),
(470,'NO','','','0000-00-00 00:00:00','',''),
(471,'NO','','','2016-06-01 11:00:18','',''),
(472,'NO','','','0000-00-00 00:00:00','',''),
(473,'NO','','','0000-00-00 00:00:00','',''),
(474,'NO','','','0000-00-00 00:00:00','',''),
(475,'NO','','','2016-06-01 11:06:19','',''),
(476,'NO','','','0000-00-00 00:00:00','',''),
(477,'NO','','','2016-06-01 11:10:00','',''),
(478,'NO','','','0000-00-00 00:00:00','',''),
(479,'NO','','','0000-00-00 00:00:00','',''),
(480,'NO','','','0000-00-00 00:00:00','',''),
(481,'NO','','','0000-00-00 00:00:00','',''),
(482,'SI','10.15285875','-64.67025219','2016-06-14 21:46:25','fZO-5gQ4kqg:APA91bER_IprJvhHTa7VlbIzilXUYqZbN_LWbOGg6_1k5AydGpL7JAPlTQL4R4YKon8TQWbdO9MXdLUndUWLiSOT9Ow0uErMYF0mUgb5fBuslMqySWRtrf7Gqaai6Kbk_ngT8TuPAwFq','84ede390f5b0dbfc'),
(483,'NO','','','0000-00-00 00:00:00','',''),
(484,'NO','','','0000-00-00 00:00:00','',''),
(485,'NO','','','0000-00-00 00:00:00','',''),
(486,'NO','','','0000-00-00 00:00:00','',''),
(487,'NO','','','0000-00-00 00:00:00','',''),
(488,'NO','','','0000-00-00 00:00:00','',''),
(489,'NO','','','0000-00-00 00:00:00','',''),
(490,'NO','','','0000-00-00 00:00:00','',''),
(491,'NO','','','0000-00-00 00:00:00','',''),
(492,'NO','','','0000-00-00 00:00:00','',''),
(493,'NO','','','0000-00-00 00:00:00','',''),
(494,'NO','','','0000-00-00 00:00:00','',''),
(495,'NO','','','0000-00-00 00:00:00','',''),
(496,'NO','','','0000-00-00 00:00:00','',''),
(497,'NO','','','0000-00-00 00:00:00','',''),
(498,'NO','','','0000-00-00 00:00:00','',''),
(499,'NO','','','0000-00-00 00:00:00','',''),
(500,'NO','','','0000-00-00 00:00:00','',''),
(501,'SI','10.6788718','-71.6175023','2016-06-03 13:51:35','e22zrWToGsk:APA91bFcAJcpB7KAdaNgg9ph3CyjmHva_1P8E4Am5McMk7hSYSIZb9_zhN7yUD3wPl80fOk_bRLhoYMu20IRT_3cCZ7MAEu5NXsCCc07fcdoIoSKyqY3NPXoBkfnt74lU5m9cxomefEg','a9373de78db43ac2'),
(502,'NO','','','0000-00-00 00:00:00','',''),
(503,'NO','10.7008449','-71.68346382','2016-06-17 09:56:56','dNoRzWtuIwo:APA91bEdsgVM0tu8rSF172ZY-PZ7y4Zvpd07yZJLGFE5MoRgZkXl5AOnnvfJGfRPvnqXRJFFz9OiO8QK7FIS2riC6pN5s9Ogbz1kaWZbGmbg6O37NHj9ALisgrazFKT89vbZnzrlUkBx','d2db2462079ed5da'),
(504,'NO','','','0000-00-00 00:00:00','',''),
(505,'NO','','','0000-00-00 00:00:00','',''),
(506,'NO','','','0000-00-00 00:00:00','',''),
(507,'NO','','','0000-00-00 00:00:00','',''),
(508,'NO','','','0000-00-00 00:00:00','',''),
(509,'SI','10.0539511','-69.3524424','2016-06-25 12:08:51','c5vIXNng_Qo:APA91bEkz1un2WZLCojg9HE0OXSzflskG1Vg90jI4VoUX9-NDQ4xvMNRzLFgzm8wilkUbMwmwl_ktJ7fXnodODUSaZYvguSW1IdZTEOaC2-WBI57jgRCSmcxMY6T5fpmIUXV0lfHCzyC','dd2d27c7583f7bf5'),
(510,'NO','8.62916173','-70.24348929','2016-06-17 16:31:56','dj2IfKTRIIY:APA91bGU61adw7Ytcmm-6tYLmc9Fq_JVMGu5ZKXClLKYe8wEUL8oq4K_eoGYUbjTvAkoVrZ8zoz-Nd32fm3iA7MI1Tt6LFPo6kx8cR3CrVWlRMMfwIgQWMRwhZyI4dmoRdiPi4VVg8S4',''),
(511,'NO','','','0000-00-00 00:00:00','',''),
(512,'NO','','','0000-00-00 00:00:00','',''),
(513,'SI','10.368565','-66.948423333333','2016-06-29 06:31:45','e51EJV-rvTY:APA91bEt0oSHeTSQstchNvETH8CIuIcbi_IAB6mWySot4RgfGWJds3h7DHmYlDQMB6vb2zpeinsXaH5h87d9KAdDzq-hojYKQW520ATw132w24ek8fiMpLTOPRER2kHkOpEINzevls_t','a127e24abafaed05'),
(514,'SI','9.975955','-65.112143333333','2016-06-25 18:14:04','eEt1BmKfxVY:APA91bGJ0kkPw0ZML3YLUSl1FWqw5I4ZZcIJs-ztfbh04E-qNrvgObMF4QJlMjh7mYIxoo-jU608cju6uxlfgW4k_v05-pX8juKzsYoQJtYnsOA7X5H3DCT6t0O0ZvCqNFP75-pP5Y-D','7d13b7a83fc2f6c9'),
(515,'NO','','','0000-00-00 00:00:00','',''),
(516,'NO','','','0000-00-00 00:00:00','',''),
(517,'NO','','','0000-00-00 00:00:00','',''),
(518,'NO','8.09335291','-63.54756665','2016-06-03 11:23:58','d7GWDmwonVk:APA91bFkH_wx1OYLBLGpSF_63iUSYFfmRHaQHrMGuHARb0pONhbxJMUz-qUG3EcLtFf6pfdR2m-DMCVdk9cLh8U6ukagYQhIxrFj2OjvGbrmrPfBdn-REgTIp_UbXgCBkHQXZaHDeiH8','5cd8c2e6ed6df971'),
(519,'NO','','','0000-00-00 00:00:00','',''),
(520,'NO','','','0000-00-00 00:00:00','',''),
(521,'NO','','','0000-00-00 00:00:00','',''),
(522,'NO','','','0000-00-00 00:00:00','',''),
(523,'SI','10.4874252','-66.8169172','2016-06-28 21:39:44','dsKseC2OTeU:APA91bGBgEzmW0aSllSUFmC7yUgH9SUI7gqYxS0vhQz4rFU12j8x4J6f7NWmr2DuW6zFlcQy80Mh0CVGjeE9b4awTcaH8Ny22yQTghDoPNuieJabWZK1Zvn0ZyoUkk4pshLcDg3_N9mx','bec6d038f99e4f8e'),
(527,'NO','','',NULL,NULL,NULL),
(528,'NO','10.47039894','-66.60140258','2016-06-13 17:30:38','ee4aVPuwhGk:APA91bGWs4VIo69Waf5D2YVAjW8Tj2O5FsmcpXx6cPXojtbdhw5uhB7hGegx17jmtU7Ok2-sbFduMZBy1pqTVidS9JrTq90TfKWCza5ux7xk8eNhJgTFsvMW2QCDu5VV4MuqFdxrptlq',''),
(529,'NO','10.48777977','-66.94475991','2016-06-18 18:06:26','dDBTPlYV2Pk:APA91bG4A-UYhkkH0uxvoyAkw6cji_0yxgsATlizMphyFJ-Sd9BUm6NXi36UzBYKcgVRbSOY7MiZtqfhmiBLG2ZFxWDD_fcix-J1JFjLU8jOHgXl6NYT2p9enImXZfgiwCLWbodEIkIr',''),
(530,'NO','10.4656218','-66.8700246','2016-06-05 18:22:05','dd_GiOeU1_c:APA91bHnKPzsytFmaFMMFBmXoqQYy974cQ6szcSXTcXqzIitiWAxXbPwpZWccrsO53FLD66SQUU3kMlA2ehsRKJtaeYsuQZetPES7IsKe-cdfcWez5HZGjAYbNXxLcW4gCBetzrrbX0J','709780abe4f42bca'),
(531,'SI','10.4731244','-66.9548709','2016-06-23 11:54:17','fAD_uEzi7zY:APA91bFj6SOG6nuo4_RccwZs8G4W67lgIkT4V7abOSfuNvvNVTSmtM3s2MB-4VG9m-DqFFw6E5Z8Uq5DcfeHtkPMLBGP3Ua8rPGh-AHkFFr5juTzlWb_Lre4fmg6G5a9xyuzZSuS7cMP','c421ccc61352e64f'),
(532,'NO','','',NULL,NULL,NULL),
(533,'NO','','',NULL,NULL,NULL),
(534,'NO','','',NULL,NULL,NULL),
(536,'NO','','',NULL,NULL,NULL),
(537,'SI','10.2499532','-63.9201241','2016-06-29 13:16:21','eDmO-_9OFGw:APA91bG-MXYRtN7lJ-iBQpcbHNGiC6nxg3h2uAM1zrYyCmOJuD2Gb6dS_Tmc-LOeX7ND2LRjPxxJK686yoBBADs52YU-svliOnotHOheF9arWvHPDCuUCeJ-fCNTLtD-ylB8rc4o5XYn','797f74372b79bb35'),
(538,'NO','','',NULL,NULL,NULL),
(539,'NO','','',NULL,NULL,NULL),
(540,'NO','','',NULL,NULL,NULL),
(541,'NO','','',NULL,NULL,NULL),
(542,'NO','','',NULL,NULL,NULL),
(543,'NO','','',NULL,NULL,NULL),
(544,'SI','10.19991436','-67.46885532','2016-06-24 16:09:12','e9kiywj7_44:APA91bGMikjdAvGpz4byswUb1iefkHLUFAw64SGII8GXBC_9aym557QpGpFmhh49DNxHUAqhLSxoG0wU5f3Vab5AtwasaRjsF51bWTALZleOs79XuUNT1FdNWKE2inGSQA6ZfCsWJON5','7708443f1508e2d7'),
(545,'NO','','',NULL,NULL,NULL),
(546,'SI','10.2699768','-67.9522509','2016-06-10 13:33:41','cxH0yhe28sg:APA91bFofZeex7PCM1yVNwZ2LRfmvBr7unsHqKsE29iNFqi9bCtOArMOOuVWKoC__2BMoaXxi0BvrJNIShAdr9nyqyzmJOIQTHExauVDS4KyjUeW9h37jqRigzWbwx7QxXqffKe3m5R9','d2412c07abe8f10e'),
(547,'NO','','',NULL,NULL,NULL),
(548,'SI','7.859275','-72.178765','2016-06-29 20:35:52','dBMHetXU5Gs:APA91bGR0MD6RbHS3cGVMwTVIpM-YC9V4I2L6SdpQzjfoLqDLAKzup2w1tizFnA9uXi2waLQyspoS-kxdt0GQFffC3no97fXBoiMuODMgfRzTNIsmoRhwjIjGotnlSAcexmlSbOGathK','48eb9f9a961f6b45'),
(549,'NO','','',NULL,NULL,NULL),
(550,'NO','10.5002701','-66.8436567','2016-06-16 17:11:49','crpYore65Zc:APA91bFAr04KRAdPZn9WUumKCdCioxD1boTX27v-HwBjlpLFK2m87gc7lCcydREcWp1ZXrunxnDh5_LU-s-uoaYuDOKLNDyYlQuZP2UMVm3o7rkHu13h1gZf1A6hiD2Lo17Mj-6UR8vN','3fa0eaf21ae3c4c3'),
(551,'NO','','',NULL,NULL,NULL),
(552,'NO','','',NULL,NULL,NULL),
(553,'NO','','',NULL,NULL,NULL),
(554,'NO','','',NULL,NULL,NULL),
(555,'NO','','',NULL,NULL,NULL),
(556,'NO','10.640465','-71.654416666667','2016-06-14 09:49:36','dqhfMhsjHLk:APA91bFQjZdSnWq6MevG67VFlDASYwfp5yycygfflWPh5sVW4TVh9ByFZ6-PDf5L6ukB05SDBEWlhMNa-3nULmgcf-7Ilzd10r-kMGioEgi36sRO44UAw4ORjBx9NyyxujFLueOb2FSE',''),
(557,'NO','','',NULL,NULL,NULL),
(558,'NO','','',NULL,NULL,NULL),
(559,'NO','','','2016-06-03 22:35:50','fj31CynYwBM:APA91bGh_M3jpoBGN6ibG4p7XgtdS0bQEFHFepDFXBjoSw5u2NucOtKTLwC0Oehag3OCFXCL0h7envtfKHMDSwh7kuveqzCKsAin57P0Y-dRKZn-Qw0-xQM_k6mg1IrEsZRiHBvm-axT',''),
(560,'NO','','',NULL,NULL,NULL),
(561,'NO','','',NULL,NULL,NULL),
(562,'NO','10.4937979','-66.8322854','2016-06-13 16:46:33','fNoh6hpr0jE:APA91bHRDJnWzneD845qvljLK_dJ3RW3rB9FFRkCDLNHSySXKoKq3VaUAUsymclGUOvPr4ir0MQLKKcUe3QVgCCp-LVmhWo5sL-bqTin2cc9tUFsqAUrDkCVN8uwADYlKMhBFwoRgzXb',''),
(563,'NO','10.696326666667','-71.659931666667','2016-06-27 11:57:33','fnNtSseyKbw:APA91bG75egcgmcNgjxuMrDT9MRvCfhI1xwBuhYS1qHYUbbPHdBR0BqFzARRE409ChYy4ifbgEwx5DSVXWPlw9WQ5cfSmkYo2pGgtoubqUJPAkx1d3iksA2nlnvqBYQkdJe1laLW-6-b','722f5693316b430d'),
(564,'NO','','',NULL,NULL,NULL),
(565,'NO','','',NULL,NULL,NULL),
(566,'NO','','',NULL,NULL,NULL),
(567,'NO','8.6319825','-71.0733264','2016-06-27 21:21:56','et8S0ejjWXM:APA91bG9A2dJzonIQ73XaXtob-ywy1M5ssIeMko5Do2oT_oVG4Skfeb5ik8FxOpAD-qNOwK8r4mcpqZ1TYi_pbHsN7qFw9bHH0mX4LNqlI9Pio2pFUWOCZqnKUvkCyoLI32gzAFFi5O9','87d46a92e84cae1d'),
(568,'SI','8.6280788','-71.1435637','2016-06-29 10:50:34','fgkQJp4jOEE:APA91bF1VUzirom_8WkAGBQqE4N7GSBn-Lyedjke_FuCrthJ-tDMHfo8-c72qb78wx8ndoVluaJHsmGZ8jQ_gFRyzVjlua5l7K6IJxvN82Uku7ZWRbWS3qs_P2CawCT1SoUZhOQ6FWBQ','4b5762624cc74321'),
(569,'NO','','',NULL,NULL,NULL),
(570,'NO','','','0000-00-00 00:00:00','',''),
(571,'NO','','','2016-06-27 14:26:29','fCzNUUFgrY8:APA91bHoiuIE7xPEvaehnttnwJYWZ5CtqHRKsNQbzsNI44Lu79IMDz3ac-dLoyfoUiZsn81Pv4cIShb9KBIXjj1VUSqIPVoXvohnQBYutU11vH67Uh3mqwKhA_L15yXN0MMx-eLZjNCU',''),
(572,'NO','','','0000-00-00 00:00:00','',''),
(573,'NO','8.5732642','-71.1658387','2016-06-15 20:54:29','eNGv-HFkB3E:APA91bH1yzLzANBhW4dP5FFjxYPMadqrSBJwZwDrVe-FJ1RmmPAzI8MsFoOfQojI9KGToxuxBoZ_JGJG7sOhIX9qoMjhT1jCDV4dnJXsyPbaVcStyjHqgtcWKUNiVDmeH7qqKtQqdbAZ','b7bb8ede699d8b0c'),
(574,'SI','10.048556886511','-69.112161009465','2016-06-25 14:14:00','dpxOj-mXnEA:APA91bFZyZ1Qqc6jdh-reX1FxikzBQsay0sB1n-1VahDgEiGL37fls11bVdeBgsoCQG_UtzdOZYoiP3wmbY8qQ8A_7dhODZLynt-nLnaXa8DH5VIzSIUY9gdIO1FVErpXcnWOosN-lA_','c2a6a5ee3062c570'),
(575,'NO','','','0000-00-00 00:00:00','',''),
(576,'NO','','','0000-00-00 00:00:00','',''),
(577,'NO','8.6309133333333','-71.614515','2016-06-13 16:30:53','eqS4-tzz2BI:APA91bEskAG4HgTrxYWlNp8WDtKuHCruiApaTWrn8Q7Sk9Yqo2uwYT8X2L55QK0TYpPGTrZnInxwhi5LBT_xG8GkmlK1rH3jObxmwR0GA4L0u3dawEAhRpQCA-TjE461TP5KOnk6HvUQ','f8ecc7a0f28b55c1'),
(578,'NO','','','2016-06-09 19:24:27','','dff48d4635680232'),
(585,'NO','','','2016-06-11 13:03:48','dFgBcEosIX8:APA91bHN3AvfZuMxWuskgHxEuGm5mUd-E7trJMzvjAeFR1UFHsoVeIXAgZxSRk3RJK1_WHY8E1zYyL21OfHzGRR_CCduNKEJxNRB6NPBrlsv8UxwUceT6kwLbJdDjawfLMbmWWRd5Rnr',''),
(586,'NO','10.49395919','-66.8317403','2016-06-27 17:18:22','dYg2WeK9sNc:APA91bHzxnj3IIRrm9t3zRPguPyziB9CPTuj2Dtcvh_TK8j-R2bJ2jZSGHfA4Lz2MxJi1pJcvlHfRY-nKxXJvVR9ozFjsmy_VPMrMx9VWsJQ63kVbin2piLrTcQNheaMw6GVIwtAxnKP',''),
(589,'NO','10.5210008','-66.9327907','2016-06-15 14:58:44','fiO2I7uKkOA:APA91bEK0guMZT9FPCdpDD4veUw7KncpPupzdP8sLgdmR40pc1MLanzjLwFKORiK5RKESA_zgT8mUE9A7HHgwLAkkxs62C04JY8RHMY_E2CnHwxi7VNlcCyYqJgszLmlj1M7Bg8acCKn',''),
(591,'NO','10.6009842','-67.0344145','2016-06-21 14:25:01','citBRSE64DM:APA91bGJNgLOAmMFEWSqQZJ9tuFsd4JuoWloeMrRNDYAYxqpLd_P9TGnscyx9VNEaVeJVjKL2Z2nSUjMfE3Bqz46dF1c9kO8vSOqSCL0JmyfewrT1L47kDK9E0DEgrPs8cjXk7EHDIpb','19cf4ad8b9a1290d'),
(592,'NO','','','0000-00-00 00:00:00','',''),
(593,'NO','10.52105312','-66.94781975','2016-06-26 17:49:03','dl9YSyPeCBE:APA91bH6N1XgUIbLwP45aB2hnJ9BZBMwF9XJQkknauP3sFZ5EIifV5bD-0S1V1ndjsEMHKWhnWiJFoCL5f1zR2yCoXASp6dUTx1dB51gWIvJIUGtHmzdfpi_qAav6rnGT2lm-yXk-Lzv','145562eebcf3ff7a'),
(594,'SI','9.53913669','-69.20978133','2016-06-21 10:46:21','f_lJwyUCThs:APA91bHY3PuJV-xOK4FshN7yRi0H6f_TUuKo8kpnt3QMH7uLMf50CYdEQLnuXsFagUg5TnJCPjX06WCTQ0YQm60eQicfd-2FgHHSMtDLz8WhWluiDzNQEyFXtPTLnfFDeaRsU-WsApzc','78f9e7353c0ba7ef'),
(595,'NO','10.37856768','-66.97990485','2016-06-29 20:42:21','dGcRse0790s:APA91bExEQM8tz5kSC1p7HaIIfjdeGbSTqCO1mz3-8xIdibg8KhugsZ833-psju0De5pAQIfms5wpH30H1js5fysENh3L2KoNRHbd1us1fWl-mohLnmBQzCWXnUc85X2T280-RsEIjmF','3fad6d7e55332619'),
(596,'SI','7.85933297','-72.17902134','2016-06-27 08:58:46','f9H1dAX9r8M:APA91bEPXagA4XQJIgipdx2WPwFTkkad23iJbGEjH--JDIpmw9pGTqBls7cpSIStsAaWFq5kIT39c6ds2kmzzg7s9kEmncJnapwtyuwV5JAFMHjsbbqrE52ZfOj9Sx2-_tp8dXal1S5b','8031181f66ed0a2c'),
(597,'NO','','','0000-00-00 00:00:00','',''),
(598,'NO','','','0000-00-00 00:00:00','',''),
(599,'SI','9.559175','-69.207166666667','2016-06-28 16:07:08','d2857vQQ7kc:APA91bECyAJZXcPveigQeL7cUHSgMHzh5fDDdm_LUE9k5C2--xW2i6w87j8aIX3WqLJmdm2JOh48YAJJE9lPJ3K2Q6uof7Nv16CixJmgSaBlKFzvTY0TGglkNM1yf8rzXXyCOmNup0Qi','736a0d055869136f'),
(600,'NO','9.9516814','-71.11564654','2016-06-25 20:11:01','cAjeLiGULkg:APA91bFSTB8lfu1H7o8kYxMnAvi21l6yBfcji6X4oyfXrYdQQ4Tdf7_535T82LQDy3bQadLBTn4N2ebfnxj--ZZDxeEjnBHvrZEBXAxRUJm1W09mZcSiVbzMVf96H73K62FtbwocN8Qn',''),
(601,'NO','10.058527895109','-69.36389598575','2016-06-28 13:01:30','fkWlcDDvRZ4:APA91bHj0JaQb4FWKLv-fR91-kwLQDNjD3SmAKXbfYCCk4SkChAcdxl8TZ-jlmQA_8cg9G8lqXuKqmdCIvXAnJUymp3gRL4PGl3PDho65hGvFxLxNSspsjlHHd6Yk60DE-H-s2EqBfMU','e985e4090dbbb99e'),
(606,'NO','','',NULL,NULL,NULL),
(607,'NO','','',NULL,NULL,NULL),
(608,'NO','','',NULL,NULL,NULL),
(609,'NO','','',NULL,NULL,NULL),
(610,'NO','9.95208446','-71.11572496','2016-06-29 15:21:33','cAjeLiGULkg:APA91bFSTB8lfu1H7o8kYxMnAvi21l6yBfcji6X4oyfXrYdQQ4Tdf7_535T82LQDy3bQadLBTn4N2ebfnxj--ZZDxeEjnBHvrZEBXAxRUJm1W09mZcSiVbzMVf96H73K62FtbwocN8Qn','2b15438b36aed534'),
(613,'SI','9.9517173482859','-71.115757705255','2016-06-26 11:38:12','dC8hU0FgL3o:APA91bHpKfWRi1ZVfSvDwWQEUnbNTWUiG8ZXBAxjj26fZZm--03f0KeY5Yw70_80qLfwIU9izypBGufOzVrHM-Kh6RP-x9DbXSv8c8hFiQkr5lVXgQaxDoAhrucrsvE8OSz3CBVfKq_T','aefeef740de24e90'),
(614,'NO','','',NULL,NULL,NULL),
(615,'NO','','',NULL,NULL,NULL),
(617,'SI','10.4937818','-66.8318817','2016-06-29 17:08:24','dd_GiOeU1_c:APA91bHnKPzsytFmaFMMFBmXoqQYy974cQ6szcSXTcXqzIitiWAxXbPwpZWccrsO53FLD66SQUU3kMlA2ehsRKJtaeYsuQZetPES7IsKe-cdfcWez5HZGjAYbNXxLcW4gCBetzrrbX0J','1c50f7a383e31df0'),
(618,'NO',NULL,NULL,NULL,NULL,NULL),
(619,'NO',NULL,NULL,NULL,NULL,NULL),
(620,'NO',NULL,NULL,NULL,NULL,NULL),
(621,'NO',NULL,NULL,NULL,NULL,NULL),
(623,'NO',NULL,NULL,NULL,NULL,NULL),
(624,'NO',NULL,NULL,NULL,NULL,NULL),
(625,'NO',NULL,NULL,NULL,NULL,NULL),
(626,'NO',NULL,NULL,NULL,NULL,NULL),
(627,'NO',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `Gruas_old` */

DROP TABLE IF EXISTS `Gruas_old`;

CREATE TABLE `Gruas_old` (
  `idGrua` int(11) NOT NULL,
  `Disponible` varchar(20) DEFAULT 'NO',
  `Latitud` varchar(20) DEFAULT NULL,
  `Longitud` varchar(25) DEFAULT NULL,
  `LastUpdate` datetime DEFAULT NULL,
  `Token` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idGrua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Gruas_old` */

insert  into `Gruas_old`(`idGrua`,`Disponible`,`Latitud`,`Longitud`,`LastUpdate`,`Token`) values 
(0,'','10.475','-66.855','2016-05-06 18:07:44',''),
(1,'NO','10.4918086','-66.8795271','2016-05-13 09:58:06','dK6lGPG6yRI:APA91bHr797_UhT7TvgIDeZF-BEkeTpA8QMNRDXRC8oMFZDbPOIDqrHUBsXP6I3G5i9YxEKBZsvbfCtCVcif3dAazhqUtLwbT1H_tI3FjygtRrKNU3SlXXOCGpd3r9Idt5AVSgzaOjNa'),
(2,'NO','10.48211902','-66.74582308','2016-05-14 13:15:15','cu87HMdP0b0:APA91bF6hoEntzLaIpk0pLeIN2Ipjzg14hz3lw3gKkH47EgDJc0pAuLvqGBa-_D8bVsnUUU-wWpH3oHRMnvMOtIZYRvca79d_vUcFevsFiW4zPgcbRH1g51csrE0G8f4o9sR5LCBomdt'),
(3,'NO','10.4917629','-66.8794882','2016-02-26 14:43:47','e4i6L3xjFOc:APA91bG9JUkgeR9HRY4REZOxEsvb0unnAFRBONWkYhd72RobzMWyuUpvcYNcV9a4uEPtiXf_rLJ6D9PbBQ8XbannFUJQuksc9pTX_ovDHyf-1RZp3v1SYdRTF3tblaeN5oZZJemlDOyc'),
(4,'NO','10.49449547','-66.85759355','2016-03-02 15:09:15','eg96ltkKZkA:APA91bGxlScwH0UrATWS5JeZWs2-QRHsVY1cN43NRHKl7lEn_KOsP64nNY75JcEiVrvct9GqtKVNuFUMMcrywj2lpoCtvfCnJefz5qxtfJfuYf3JC8t9VzDkf8EX8ueyvvTH5IArv1nJ'),
(5,'NO','10.45881387','-66.91278811','2016-03-08 10:52:54','dmUuLDoJAY8:APA91bFUk8h3D8Pgyc6R3000mp-E9vxpFP7M__GGRw9NhFyGmvxpY1dljjUcEy4iYfBJHvHrBCo4hWRpficKSDAi4-qn2Tomfb2nZaEuwSDmYVehjiF5A2bPsqAtNTeQaPenU9ZKHX6x'),
(6,'NO',NULL,NULL,NULL,NULL),
(7,'NO',NULL,NULL,NULL,NULL),
(8,'NO',NULL,NULL,'2016-03-25 17:01:11','fqVhRIt74AQ:APA91bE9ZD7IU8Mm1esG_mXL8VUzQrUxdvVzQdqR1V5dWez1gVGqAw_b2KLzNJFrOKngadZlXtXLDAPFW13aSnSQBBXiLXehig3iD2w3KUXa2scLNdo3hDZwTI_SuLZc49Awb_08AEAp'),
(9,'NO',NULL,NULL,NULL,NULL),
(10,'NO','10.458935','-66.91287','2016-03-08 10:12:01','fFgI0LwTBqU:APA91bG8rfs3hVyD8eUshAfeoK-pFSnbiREjgpnqCsuhhQzPevjdcVqG-VwcCWUMGRU4X0E5znDaqHamYrCLfJ-pozks8hWloWfCwCgw_NGWtpGtnVaxHJ3Ec-JSZp01-eq1HXR_kRRX'),
(11,'NO',NULL,NULL,NULL,NULL),
(12,'NO','10.458771141183','-66.913047051122','2016-03-08 09:30:29','cj3ltY6EnYo:APA91bG8TC6UjoFtxJUxh0wfk-P58p-kqE5FKEuhVSgjA1NcAYQDghe3Hfve-tabOkVUrQj6d4EEpk2l4x944vHaM00SUdvnzYMY01fQH-4ZBIrEqxY1bzOkSryO9fD1eM0YDPqumyKY'),
(13,'NO','10.45879154','-66.91301344','2016-03-09 09:36:06','fIOdqInl8lc:APA91bGQZwcnjfvakUxHJ2bN4daGxtWYYL87OZ_noxygrHuIUDw1aXO0QIjegOrhHZ800tYs5kw841IgUnu-PVWCn8SBYUMbDbOoOTUEflGZVa6KgvLEF0zB8PQQt8mlbxqz8gtOU5mY'),
(14,'NO',NULL,NULL,'2016-03-08 09:49:11','dLuDTh87sdc:APA91bE-nG3BxBwKfZGEEFNf6j4XZz8wV7ZcTDLroK3GNgnoeqHZPbulhZhO4bKdwapsjTywebWIN8MDFnNNutvvTTroMJS9Ko_PPSzHXAUqlEPj7Vp7Zf61s0WIToVwjX6r40xXqUzY'),
(15,'NO',NULL,NULL,NULL,NULL),
(16,'NO',NULL,NULL,NULL,NULL),
(17,'NO',NULL,NULL,NULL,NULL),
(18,'NO',NULL,NULL,NULL,NULL),
(19,'NO',NULL,NULL,'2016-03-05 21:40:22','eB-PbSUNLQ4:APA91bFXOZhEljqb2xJGLW8NAdkGRm3Pr2xTT4OmmMp8em7EWO61oEOTTkb0uep-A7HIich0qdxntlSNUSnv252JSJqa3cPWEusk4fPEooInCwlGyNzZDiPpTeDS_eriLH5WNx0QJnw4'),
(20,'NO',NULL,NULL,NULL,NULL),
(21,'NO',NULL,NULL,NULL,NULL),
(22,'NO','10.4574771','-66.9180916','2016-03-08 10:42:02','ew4Xm54kne4:APA91bF4o697NwcTvPx2DluYKONbvGIis-vnE08x7K1d4eTxGSlzbcirFecu3Zq-wF3nhruQjU5ghE0tS-TDCyEHUYh5hPdd1gqlZ2wrxTetNdU6vpFWXSZ4X9dXqqagB24CY-0r27KJ'),
(23,'NO',NULL,NULL,NULL,NULL),
(24,'NO',NULL,NULL,NULL,NULL),
(25,'NO',NULL,NULL,NULL,NULL),
(26,'NO','10.4178605','-66.9526683','2016-03-08 09:50:07','eOM5D2Toe4Y:APA91bFX4-GoCVO9oIEZW1EP5BASqn9Jg_x5Gt8eh4B9Ny1rpk96tqKDEo6Gq4c0gublBYtbgsf9SwHC7gxzQGqXe-TKbASQW9HD2nMWHplhiypWdXw3YMwfx1xVJfTtRMOYNNo6c9iG'),
(27,'NO','10.45874087','-66.91298526','2016-03-08 09:47:10','cNbZr37bIFM:APA91bE--_trnn6N3RSNNeTf-CScw7ROwhM1jK6ovUj5MAYXnKHkl5ZKt-NorHa-WodCeC55L0Fwd391GDAUMDAHUj3w02xoSDBWb_oVmEqGbq2KMSsGhdrViPcK6BEIq5t2niqTGrjh'),
(28,'NO',NULL,NULL,NULL,NULL),
(29,'NO',NULL,NULL,NULL,NULL),
(30,'NO',NULL,NULL,'2016-03-05 21:41:19','eB-PbSUNLQ4:APA91bFXOZhEljqb2xJGLW8NAdkGRm3Pr2xTT4OmmMp8em7EWO61oEOTTkb0uep-A7HIich0qdxntlSNUSnv252JSJqa3cPWEusk4fPEooInCwlGyNzZDiPpTeDS_eriLH5WNx0QJnw4'),
(31,'NO',NULL,NULL,'2016-03-08 08:35:27',NULL),
(32,'NO',NULL,NULL,NULL,NULL),
(33,'NO',NULL,NULL,NULL,NULL),
(34,'NO',NULL,NULL,NULL,NULL),
(35,'NO',NULL,NULL,NULL,NULL),
(36,'NO',NULL,NULL,NULL,NULL),
(37,'NO','10.45883107','-66.91293955','2016-03-08 10:53:30','fM4RlEk24Ms:APA91bFQhz6RLVxe7F29vedUT0OXbxnn9SEijuFla7R4dZgNbdFHGQYLL-iVNXhcmt7OKHVFo7aSfs-YROwZ3mw0usCEXfN6JeMS8XotfsIuQkFPdTQ-jokrtUGZr1ezYr3UWJc6sc3Y'),
(38,'NO',NULL,NULL,NULL,NULL),
(39,'NO','10.4586724','-66.9163975','2016-03-08 08:18:58','eOM5D2Toe4Y:APA91bFX4-GoCVO9oIEZW1EP5BASqn9Jg_x5Gt8eh4B9Ny1rpk96tqKDEo6Gq4c0gublBYtbgsf9SwHC7gxzQGqXe-TKbASQW9HD2nMWHplhiypWdXw3YMwfx1xVJfTtRMOYNNo6c9iG'),
(40,'NO',NULL,NULL,'2016-03-05 21:42:07','eB-PbSUNLQ4:APA91bFXOZhEljqb2xJGLW8NAdkGRm3Pr2xTT4OmmMp8em7EWO61oEOTTkb0uep-A7HIich0qdxntlSNUSnv252JSJqa3cPWEusk4fPEooInCwlGyNzZDiPpTeDS_eriLH5WNx0QJnw4'),
(41,'NO','10.458702727035','-66.913035370015','2016-03-08 09:01:55','fwTpkoL_Fpw:APA91bHck53HNc1lzsjrnwmh6qp-9LpKiRBEqGSk4_fGecJ--FI2AYRcHCR66iJBgo2__CCuXf8fRwXjDSvfnwISx4o4qYZZ0m6p5RNR4cK7EGWMVfVuX9tD5k8SLuD-x5Vj46BxdHTT'),
(42,'NO','10.45895','-66.912901666667','2016-03-08 10:38:43','cNV1GKJTIz8:APA91bEme4H0E_Mzqw7jvgbCclaYRKlmJ3xA7sL6jOpjY31HpdEESrWPwwx-m6JymV0dF53Lon2Vx28mxGn-0p21PMgste9uua52mMsPD98dH09jQvN5FBhUiNEDLvett-q322K4oF1T'),
(43,'NO',NULL,NULL,'2016-04-03 18:33:52','dx_mvp8g8hI:APA91bG1vJkuXtWqpIDEQo2XbPWib3rhHDvNS2W8Y8_F3G2TbEgJKqqMubwERVxFz_nynx_9pYwi-cg0ZxmjQ0AGpRCvaKVPxpSiBRKkppnrQr160B-_emjz0Truyp2kDJU4b0Y0L-v3'),
(44,'NO','10.5158886','-66.8949966','2016-03-19 13:30:45','eKCSMkdIXu4:APA91bGWrCGRTQxqRZkH5dHa3J12dKDLTjs9WU5B0pwuXK-3O4rcl3FNjc0Xey3ra55ypIvEMzcdiXbFKVFoQ9eCJAtN2NTw0LMYkkYCGYjyhLdt1XFn2IjcnqpW4tqcYcnlnjX_1_GB'),
(45,'NO','10.215615589416','-67.999850471592','2016-03-19 13:39:15','ciTFfBvGshs:APA91bExsnmT-SP0-JCcov_5RCgIbZlbH6elKyS9nMJiN8npJGngMiRDoES-eGvIxzOxmATdyeMIBq10tbKcSDZY03rOaqfCg9sfBlHdpCcJ170-4Hes7TqH3-75XomooRFKaOL6I0oC'),
(46,'NO','10.515864','-66.8950063','2016-03-19 13:29:45','e-iLzNrfhSE:APA91bFSXbEDcWWcjaX4OjlkX4Q3QyOcaxrOkGZy2RmESRRz2VnqRwsuDleSPl90wbtkslJVKt46lyLOFeWAyaAl5MOeV45fJ6pC0FN9QDq83coDYszMSn3ZbJ5bG0F3otWF7w-QG_Mr'),
(47,'NO','10.4969416','-66.8722543','2016-03-19 13:50:03','f1uo-G1KAWE:APA91bG73xZVwJjo4jzrKHBWnk0LD6Y3g5es2uW8YB2kdWszggq5zpKMOdBZ9_DhnKXRWO1Ym9blQgBMRMuizp_9BvYH4-TMF_fv5C4MHBbMPKJQyFHM09BNOA4X8zqqHXeIFLzvsG0a'),
(48,'NO',NULL,NULL,NULL,NULL),
(49,'NO','10.51584458','-66.89488791','2016-03-19 13:22:11','dxA5wVqliLw:APA91bHO2xCNNIxOsHSDaozUQiL0Heiap5c3_nI1H22Pblz4KtAelc2aG8RG6RQXhu0pEKUFr1OWcTF0g05sCt38MUOgK7mynoc7uH6wqfs1F5dl12Mz8GartkEQWrpZzd9tLHgW5OkU'),
(50,'NO','10.48188512','-66.89390101','2016-03-19 13:44:42','f5NW70idyoc:APA91bG70ulBJ2SWrGbafXcHJRtnsCXjFoOgY9I-79PiAk9tjjodVFkXfnA1TXgMjLha2pvPTKO8yHTf_zhVFO8gpdQC1trbw61VSr76JAz6rLHslj5m1s34Q-T7_PXAOmWu7tjoBnC3'),
(51,'NO','10.51600576','-66.89513826','2016-03-19 17:04:58','cUoRlI49W8Y:APA91bFCZTHeRM4GpjLKkusSHBZ1NX0FmYP0BnIvuJ7ZQaT3w9Mv8pNZD0aao4ckhqXoDZjwo2k2ReJSs5xzUl84VpHIaIxDNpCHQoU4fDNjhD6ilNb2oWAzmA330lF2b4Y5EWdx_M1O'),
(52,'NO',NULL,NULL,NULL,NULL),
(53,'NO',NULL,NULL,NULL,NULL),
(54,'NO','10.5168938','-66.9282172','2016-05-01 19:23:45','dTvxOxx_Oyc:APA91bFqcugruzuicFNj3vHsO5fRSnjUp5nuHmCMyHgN7dtsRausTQ_M3yeyWBtm1psjWogjOI3PiLIPRYALOG1LTKElMy2NEXLyGsi0MjoUQW_owy97gziMzQ30P11ooV67np0SCfdk');

/*Table structure for table `Grueros` */

DROP TABLE IF EXISTS `Grueros`;

CREATE TABLE `Grueros` (
  `idGrua` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Placa` varchar(15) DEFAULT 'AAABBB',
  `Modelo` varchar(20) DEFAULT 'Gancho',
  `Color` varchar(25) DEFAULT 'Blanca',
  `Celular` varchar(15) DEFAULT '04140000000',
  `Cedula` varchar(20) DEFAULT NULL,
  `Clave` varchar(20) DEFAULT '1234',
  `Condicion` varchar(10) DEFAULT 'Activo',
  `NumServicios` int(11) DEFAULT '0',
  `TotalTrato` int(11) DEFAULT '0',
  `TotalPresencia` int(11) DEFAULT '0',
  `TotalVehiculo` int(11) DEFAULT '0',
  `Rating` int(11) DEFAULT '0',
  PRIMARY KEY (`idGrua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Grueros` */

insert  into `Grueros`(`idGrua`,`Nombre`,`Apellido`,`Placa`,`Modelo`,`Color`,`Celular`,`Cedula`,`Clave`,`Condicion`,`NumServicios`,`TotalTrato`,`TotalPresencia`,`TotalVehiculo`,`Rating`) values 
(1,'JESUS','SILVA','AAABBB','Plataforma criolla','BLANCO','4262090590','V-165323080','1234','Activo',0,0,0,0,0),
(2,'DEIBY','ESCALONA','AAABBB','Gancho','AZUL','4241548145','V-171199170','1234','Activo',0,0,0,0,0),
(3,'GUSTAVO','RIVAS','AAABBB','Gancho','AZUL','4142343185','V-10694705','1234','Activo',0,0,0,0,0),
(4,'KERWIS','ALVAREZ','AAABBB','Gancho','AZUL','4145190422','V-122431050','1234','Activo',0,0,0,0,0),
(5,'ANDRES','ALFONSO','AAABBB','Gancho','AZUL','4243105810','V-166907540','1234','Activo',0,0,0,0,0),
(6,'YOHANY','CONTRERAS','AAABBB','Gancho','AZUL','4247785063','V-168060668','1234','Activo',0,0,0,0,0),
(7,'ANTONIO','HERNANDEZ','AAABBB','Gancho','AZUL','4141140242','V-10695288','1234','Activo',0,0,0,0,0),
(8,'PIETRO','GARGARO','AAABBB','Gancho','AZUL','4142938134','J-405103302','1234','Activo',0,0,0,0,0),
(9,'DIONICIO','GARCIA','AAABBB','Gancho','AZUL','4143507107','J-296419639','1234','Activo',0,0,0,0,0),
(10,'OSCAR','RIVERO','AAABBB','Gancho','AZUL','4143799528','V-119480120','1234','Activo',0,0,0,0,0),
(11,'IVAN','PALACIOS','AAABBB','Gancho','AZUL','4143290314','V-69341841','1234','Activo',0,0,0,0,0),
(12,'JHOANDER','PARRA','AAABBB','Gancho','AZUL','4141296441','V-18109503','1234','Activo',0,0,0,0,0),
(13,'FREDY','SALAS','AAABBB','Gancho','AZUL','4166027164','V-10710757','1234','Activo',0,0,0,0,0),
(14,'ANIBAL','MARTINEZ','AAABBB','Gancho','AZUL','4169222083','V-46752674','1234','Activo',0,0,0,0,0),
(15,'JERSON','HERRERA','AAABBB','Gancho','AZUL','4242725395','V-23223154','1234','Activo',0,0,0,0,0),
(16,'RONALD','VELASQUEZ','AAABBB','Gancho','AZUL','4245608280','V-20238088','1234','Activo',0,0,0,0,0),
(17,'JUAN CARLOS','MANZANILLA','AAABBB','Gancho','AZUL','4245874653','V-146005949','1234','Activo',0,0,0,0,0),
(18,'FRANCISCO','NAVAS','AAABBB','Gancho','AZUL','4246250735','V-17309984','1234','Activo',0,0,0,0,0),
(19,'JOSSNEY','GONZALEZ','AAABBB','Gancho','AZUL','4247229199','V-17987600','1234','Activo',0,0,0,0,0),
(20,'OCTAVIO','RODRIGUEZ','AAABBB','Gancho','AZUL','4264536852','V-187855469','1234','Activo',0,0,0,0,0),
(21,'LUIS','QUINTANA','AAABBB','Gancho','AZUL','4267422621','V-152714684','1234','Activo',0,0,0,0,0),
(22,'OSWALDO','MORENO','AAABBB','Gancho','AZUL','4268279985','V-92340119','1234','Activo',0,0,0,0,0),
(23,'EVEREST','COLMENARES','AAABBB','Gancho','AZUL','4143360976','V-126844650','vale2903','Activo',0,0,0,0,0),
(24,'LUIS','OLIVARES','AAABBB','Gancho','AZUL','4143250418','J-403799652','1234','Activo',0,0,0,0,0),
(25,'ORDONEL','RODRIGUEZ','AAABBB','Gancho','AZUL','4142574463','J-311767576','1234','Activo',0,0,0,0,0),
(26,'DANILO','LARA','AAABBB','Gancho','AZUL','4128918791','V-107036454','1234','Activo',0,0,0,0,0),
(27,'FRANKLIN','VASQUEZ','AAABBB','Gancho','AZUL','4140731293','V-198256303','1234','Activo',0,0,0,0,0),
(28,'JACSON','ABREU','AAABBB','Gancho','AZUL','4142089644','V-14606805','1234','Activo',0,0,0,0,0),
(29,'LUIS','GARCIA','AAABBB','Gancho','AZUL','4142178029','V-18393583','1234','Activo',0,0,0,0,0),
(30,'MIGUEL','VILLARROEL','AAABBB','Gancho','AZUL','4142868201','V-127494475','1234','Activo',0,0,0,0,0),
(31,'NEHOMAR','SEBLEC','AAABBB','Gancho','AZUL','4143035455','V-13308578','1234','Activo',0,0,0,0,0),
(32,'TRINO','CISNERO','AAABBB','Gancho','AZUL','4143982234','V-61184062','1234','Activo',0,0,0,0,0),
(33,'NESTOR','LAYA','AAABBB','Gancho','AZUL','4144207880','V-162454540','1234','Activo',0,0,0,0,0),
(34,'WILSON','PEREZ','AAABBB','Gancho','AZUL','4145170480','V-14749252','1234','Activo',0,0,0,0,0),
(35,'FERNANDO','MENDOZA','AAABBB','Gancho','AZUL','4145262115','J-311815368','1234','Activo',0,0,0,0,0),
(36,'ARVIN','PEREZ','AAABBB','Gancho','AZUL','4145594508','V-18104490','1234','Activo',0,0,0,0,0),
(37,'HECTOR','DIAZ','AAABBB','Gancho','AZUL','4147580197','V-109026235','1234','Activo',0,0,0,0,0),
(38,'JEAN CARLOS','GUTIERREZ','AAABBB','Gancho','AZUL','4149536360','V-205393125','1234','Activo',0,0,0,0,0),
(39,'DOMINGO','TINEO','AAABBB','Gancho','AZUL','4164955162','V-138480344','1234','Activo',0,0,0,0,0),
(40,'JONATHAN','RODRIGUEZ','AAABBB','Gancho','AZUL','4241070255','V-19508618','1234','Activo',0,0,0,0,0),
(41,'ADRIAN','ALBARRAN','AAABBB','Gancho','AZUL','4248181474','V-15756766','1234','Activo',0,0,0,0,0),
(42,'ANGEL','GARCIA','AAABBB','Gancho','AZUL','4262089910','J-309503707','1234','Activo',0,0,0,0,0),
(43,'RAFAEL','TORREALBA','AAABBB','Gancho','AZUL','4264558223','V-85887242','1234','Activo',0,0,0,0,0),
(44,'LISMARDO','LOPEZ','AAABBB','Gancho','AZUL','4141096926','V-14407739','1234','Activo',0,0,0,0,0),
(45,'DARWIN','BERAJANO','AAABBB','Gancho','AZUL','4142403423','V-12054544','1234','Activo',0,0,0,0,0),
(46,'RAFAEL','SEIJAS','AAABBB','Gancho','AZUL','4142854767','V-69657180','1234','Activo',0,0,0,0,0),
(47,'LUIS','PITA','AAABBB','Gancho','AZUL','4145606054','V-820551608','1234','Activo',0,0,0,0,0),
(48,'TAOUFIK','SUKKAR','AAABBB','Gancho','AZUL','4148303626','V-23897335','1234','Activo',0,0,0,0,0),
(49,'MANUEL','PIETROGRANDRE','AAABBB','Gancho','AZUL','4245416699','V-221081303','1234','Activo',0,0,0,0,0),
(50,'JESUS','AREVALO','AAABBB','Gancho','AZUL','4121452095','V-194103987','1234','Activo',0,0,0,0,0),
(51,'JOSE RAMON','PAREDES','AAABBB','Gancho','AZUL','4121742187','J-316803457','31680345','Activo',0,0,0,0,0),
(52,'RICHARD','PEÑARANDA','AAABBB','Gancho','AZUL','4122628543','V-79555122','1234','Activo',0,0,0,0,0),
(53,'JUAN','MACHADO','AAABBB','Gancho','AZUL','4129656162','V-251207255','1234','Activo',0,0,0,0,0),
(54,'IVAN','SOTO','AAABBB','Gancho','AZUL','4141070683','J-404769420','1234','Activo',0,0,0,0,0),
(55,'EBERTO','RENDON','AAABBB','Gancho','AZUL','4141624929','V-13790051','1234','Activo',0,0,0,0,0),
(56,'ROIDMAN','BLANCO','AAABBB','Gancho','AZUL','4141967210','V-153732392','1234','Activo',0,0,0,0,0),
(57,'MIGUEL','VIELMA','AAABBB','Gancho','AZUL','4142926286','V-144445275','1234','Activo',0,0,0,0,0),
(58,'MANUEL','TOVAR','AAABBB','Gancho','AZUL','4143911747','V-19684236','1234','Activo',0,0,0,0,0),
(59,'NELSON','ALVAREZ','AAABBB','Gancho','AZUL','4144170128','V-115264547','1234','Activo',0,0,0,0,0),
(60,'ALIRIO','RIVAS','AAABBB','Gancho','AZUL','4144292595','J-297507922','1234','Activo',0,0,0,0,0),
(61,'JOSE','CARTAYA','AAABBB','Gancho','AZUL','4144827650','V-13663979','1234','Activo',0,0,0,0,0),
(62,'LEONYD','VILLALOBOS','AAABBB','Gancho','AZUL','4146344930','J-402086784','1234','Activo',0,0,0,0,0),
(63,'JOSE','YANEZ','AAABBB','Gancho','AZUL','4146570448','V-11292369','1234','Activo',0,0,0,0,0),
(64,'JOSE','AVENDAÑO','AAABBB','Gancho','AZUL','4147122580','V-10155966','1234','Activo',0,0,0,0,0),
(65,'ANTONIO','AGUILERA','AAABBB','Gancho','AZUL','4148941206','V-14510667','1234','Activo',0,0,0,0,0),
(66,'PAUL','OLMOS','AAABBB','Gancho','AZUL','4166367589','V-162661708','1234','Activo',0,0,0,0,0),
(67,'CESAR LEONARDO','MARTINEZ','AAABBB','Gancho','AZUL','4146820979','V-114777958','1234','Activo',0,0,0,0,0),
(68,'ANIBAL','MARCANO','AAABBB','Gancho','AZUL','4249227716','J-298854146','1234','Activo',0,0,0,0,0),
(69,'JUSTIN','FARIAS','AAABBB','Gancho','AZUL','4249018833','V-136234532','1234','Activo',0,0,0,0,0),
(70,'RAFAEL','CASTILLO','AAABBB','Gancho','AZUL','4249103563','J-314978845','1234','Activo',0,0,0,0,0),
(71,'MOISES','FERRER','AAABBB','Gancho','AZUL','4120956972','J-407186272','1234','Activo',0,0,0,0,0),
(72,'LEWIS','HERNANDEZ','AAABBB','Gancho','AZUL','4265863830','V-97377290','1234','Activo',0,0,0,0,0),
(73,'DANY','INFANTE','AAABBB','Gancho','AZUL','4125211867','V-12708635','1234','Activo',0,0,0,0,0),
(74,'DOUGLAS','PIÑANGO','AAABBB','Gancho','AZUL','4140568955','V-132285329','1234','Activo',0,0,0,0,0),
(75,'HEBERT','MEDINA','AAABBB','Gancho','AZUL','4264700237','V-144988104','1234','Activo',0,0,0,0,0),
(76,'DANIEL','COLMENARES','AAABBB','Gancho','AZUL','4247535207','V-17466172','1234','Activo',0,0,0,0,0),
(77,'TONNY','PEREZ','AAABBB','Gancho','AZUL','4140366725','V-108155783','1234','Activo',0,0,0,0,0),
(78,'YOSMER','ESTRADA','AAABBB','Gancho','AZUL','4164734196','V-24882320','1234','Activo',0,0,0,0,0),
(79,'LUIS','DURAN','AAABBB','Gancho','AZUL','4128901273','V-136018252','1234','Activo',0,0,0,0,0),
(80,'WILLIAM','HERNANDEZ','AAABBB','Gancho','AZUL','4141616526','V-79960795','1234','Activo',0,0,0,0,0),
(81,'CARLOS','PARADA','AAABBB','Gancho','AZUL','4264522002','J-405865202','BARBARA','Activo',0,0,0,0,0),
(82,'JONNY','GALLO','AAABBB','Gancho','AZUL','4245332917','J-403136203','1234','Activo',0,0,0,0,0),
(83,'JAIRO','REYES','AAABBB','Gancho','AZUL','4246192286','J-404329455','1234','Activo',0,0,0,0,0),
(84,'GERALDO','DELGADO','AAABBB','Gancho','AZUL','4246815631','V-104470781','1234','Activo',0,0,0,0,0),
(85,'ERWIN','GIL','AAABBB','Gancho','AZUL','4143461144','V-16493671','1234','Activo',0,0,0,0,0),
(86,'CARLOS','OTERO','AAABBB','Gancho','AZUL','4248544775','V-20075521','1234','Activo',0,0,0,0,0),
(87,'LUIS','LOPEZ','AAABBB','Gancho','AZUL','4248629399','V-14468514','1234','Activo',0,0,0,0,0),
(88,'JULIO','JIMENEZ','AAABBB','Gancho','AZUL','4148166125','J-293919924','1234','Activo',0,0,0,0,0),
(89,'ARGENIS','GONZALEZ','AAABBB','Gancho','AZUL','4248486470','J-308480061','1234','Activo',0,0,0,0,0),
(90,'GLETO','GALINDEZ','AAABBB','Gancho','AZUL','4148062396','J-402614543','1234','Activo',0,0,0,0,0),
(91,'EUGENIO G','AMARO G','AAABBB','Gancho','AZUL','4148158330','V-25773083','1234','Activo',0,0,0,0,0),
(92,'CARLOS','QUIJADA','AAABBB','Gancho','AZUL','4248918963','V-17590127','1234','Activo',0,0,0,0,0),
(93,'CRISTOBAL','TERAN','AAABBB','Gancho','AZUL','4164122191','V-55291920','1234','Activo',0,0,0,0,0),
(94,'JOHAN','PEREIRA','AAABBB','Gancho','AZUL','4144474578','J-404469621','1234','Activo',0,0,0,0,0),
(95,'ANGEL','PALMA','AAABBB','Gancho','AZUL','4145432257','V-17799215','1234','Activo',0,0,0,0,0),
(96,'GIOVANNI','NUÑEZ','AAABBB','Gancho','AZUL','4241197399','J-404930043','1234','Activo',0,0,0,0,0),
(97,'FRANCISCO','NAVARRO','AAABBB','Gancho','AZUL','4243323343','J-405314354','1234','Activo',0,0,0,0,0),
(98,'LUIS','LAROCHE','AAABBB','Gancho','AZUL','4144916119','J-293809185','1234','Activo',0,0,0,0,0),
(99,'RODOLFO','HERNANDEZ','AAABBB','Gancho','AZUL','4163461281','V-9411604','1234','Activo',0,0,0,0,0),
(100,'FELIX','FARIÑA','AAABBB','Gancho','AZUL','4149350297','V-16692533','1234','Activo',0,0,0,0,0),
(101,'JUAN','BLANCO','AAABBB','Gancho','AZUL','4127542210','V-13201864','1234','Activo',0,0,0,0,0),
(102,'FREDDY','ARTIGAS','AAABBB','Gancho','AZUL','4143444071','V-102794504','1234','Activo',0,0,0,0,0),
(103,'JUAN','ARMAS','AAABBB','Gancho','AZUL','4141440182','V-163457209','1234','Activo',0,0,0,0,0),
(104,'EVENCIO','ARMAS','AAABBB','Gancho','AZUL','4145798902','V-86895796','1234','Activo',0,0,0,0,0),
(105,'MIGUEL','GARCIA','AAABBB','Gancho','AZUL','4144551505','V-11495242','1234','Activo',0,0,0,0,0),
(106,'WILLIAM','SANTIAGO','AAABBB','Gancho','AZUL','4245696342','V-143419017','1234','Activo',0,0,0,0,0),
(107,'JEAN CARLOS','SALAZAR','AAABBB','Gancho','AZUL','4149734116','V-167915333','1234','Activo',0,0,0,0,0),
(108,'ANGELO','RAMIREZ','AAABBB','Gancho','AZUL','4149997551','V-144346978','1234','Activo',0,0,0,0,0),
(109,'DANI','PRATO','AAABBB','Gancho','AZUL','4267787864','V-15121831','1234','Activo',0,0,0,0,0),
(110,'EVANDRO','MOLINA','AAABBB','Gancho','AZUL','4245064104','V-161269421','1234','Activo',0,0,0,0,0),
(111,'RAFAEL','FRIAS','AAABBB','Gancho','AZUL','4247722317','V-177258683','eliana08','Activo',0,0,0,0,0),
(112,'WILMAR','CORREA','AAABBB','Gancho','AZUL','4245076293','V-111862865','11186286','Activo',0,0,0,0,0),
(113,'VICTOR','CHACON','AAABBB','Gancho','AZUL','4145667571','V-151217229','1234','Activo',0,0,0,0,0),
(114,'MANUEL','BLANCO','AAABBB','Gancho','AZUL','4145462758','V-177672293','1234','Activo',0,0,0,0,0),
(115,'ROMULO','BASTIDAS','AAABBB','Gancho','AZUL','4145728720','V-141717070','1234','Activo',0,0,0,0,0),
(116,'VICTOR','VARGAS','AAABBB','Gancho','AZUL','4249495078','V-12644476','1234','Activo',0,0,0,0,0),
(117,'FRAN','MARCHAN','AAABBB','Gancho','AZUL','4140989120','V-152777457','1234','Activo',0,0,0,0,0),
(118,'DOMINGO','DIMARCO','AAABBB','Gancho','AZUL','4148533395','V-8892505','1234','Activo',0,0,0,0,0),
(119,'GABRIEL','CONDE','AAABBB','Gancho','AZUL','4148767417','V-115198714','1234','Activo',0,0,0,0,0),
(120,'GABRIEL','CONDE','AAABBB','Gancho','AZUL','4249167881','V-115198714','1234','Activo',0,0,0,0,0),
(121,'DOUGLAS','OSTOS','AAABBB','Gancho','AZUL','4143405667','V-12474976','1234','Activo',0,0,0,0,0),
(122,'RAMON','ARANGUREN','AAABBB','Gancho','AZUL','4143593106','V-9444935','1234','Activo',0,0,0,0,0),
(123,'ALEXANDER','VARGAS','AAABBB','Gancho','AZUL','4144709892','V-21455994','1234','Activo',0,0,0,0,0),
(124,'JOSE','ZAMORA','AAABBB','Gancho','AZUL','4244989362','V-13116158','1234','Activo',0,0,0,0,0),
(125,'JOSÉ','ZAMORA','AAABBB','Gancho','AZUL','4124932655','V-135486066','1234','Activo',0,0,0,0,0),
(126,'ABRAHAM','ZAMORA','AAABBB','Gancho','AZUL','4244095163','V-88411338','1234','Activo',0,0,0,0,0),
(127,'WILLIAM','VALDIVEZ','AAABBB','Gancho','AZUL','4244989746','V-5384538','1234','Activo',0,0,0,0,0),
(128,'JAVIER','HERNANDEZ','AAABBB','Gancho','AZUL','4242988833','V-143583313','1234','Activo',0,0,0,0,0),
(129,'DAVID','URBINA','AAABBB','Gancho','AZUL','4244286984','V-18130314','028702','Activo',0,0,0,0,0),
(130,'FERNANDO','SUAREZ','AAABBB','Gancho','AZUL','4143498859','V-7102444','1234','Activo',0,0,0,0,0),
(131,'JORGE','SILVA','AAABBB','Gancho','AZUL','4244003422','V-17448450','JORSIL','Activo',0,0,0,0,0),
(132,'DANIEL','SILVA','AAABBB','Gancho','AZUL','4125011995','V-144640566','1234','Activo',0,0,0,0,0),
(133,'DANNY','SEIJAS','AAABBB','Gancho','AZUL','4140447799','V-162431010','1234','Activo',0,0,0,0,0),
(134,'TONY','RODRIGUEZ','AAABBB','Gancho','AZUL','4145937629','V-107978387','1234','Activo',0,0,0,0,0),
(135,'JESUS','RINCÓN','AAABBB','Gancho','AZUL','4144203809','V-71141965','1234','Activo',0,0,0,0,0),
(136,'RAMON','PEREZ','AAABBB','Gancho','AZUL','4121439215','J-297772952','1234','Activo',0,0,0,0,0),
(137,'NIMROOD','PEREZ','AAABBB','Gancho','AZUL','4145939304','V-71378051','1234','Activo',0,0,0,0,0),
(138,'RUBEN','PARRA','AAABBB','Gancho','AZUL','4169424666','J-402540450','1234','Activo',0,0,0,0,0),
(139,'ELVIS','MORALES','AAABBB','Gancho','AZUL','4246957387','V-16243064','1234','Activo',0,0,0,0,0),
(140,'JOSE','MORALES','AAABBB','Gancho','AZUL','4125121232','V-12393706','1234','Activo',0,0,0,0,0),
(141,'MAXIMILIANO','MIRANDA','AAABBB','Gancho','AZUL','4144130472','V-114893729','1234','Activo',0,0,0,0,0),
(142,'DERBIN','MEZA','AAABBB','Gancho','AZUL','4148829880','J-293587077','1234','Activo',0,0,0,0,0),
(143,'LUIS','MATA','AAABBB','Gancho','AZUL','4140402516','V-15596375','1234','Activo',0,0,0,0,0),
(144,'SANTOS','MARTINEZ','AAABBB','Gancho','AZUL','4144274805','V-71291916','1234','Activo',0,0,0,0,0),
(145,'HECTOR','IRUMBA','AAABBB','Gancho','AZUL','4141431911','V-139621898','13962189','Activo',0,0,0,0,0),
(146,'ANDERSON','HERRERA','AAABBB','Gancho','AZUL','4141379874','V-148697643','1234','Activo',0,0,0,0,0),
(147,'EFRAIN','HERNANDEZ','AAABBB','Gancho','AZUL','4244412134','J-298335262','1234','Activo',0,0,0,0,0),
(148,'LUIS','HERNANDEZ','AAABBB','Gancho','AZUL','4128962877','V-120318779','1234','Activo',0,0,0,0,0),
(149,'ROBERTO','GUILLEN','AAABBB','Gancho','AZUL','4244744610','V-18660260','1234','Activo',0,0,0,0,0),
(150,'CONRAD','GONZALEZ','AAABBB','Gancho','AZUL','4244402701','V-129249842','052202','Activo',0,0,0,0,0),
(151,'JOSE','GARCIA','AAABBB','Gancho','AZUL','4128447915','V-186861244','1234','Activo',0,0,0,0,0),
(152,'OSMAN','GARCIA','AAABBB','Gancho','AZUL','4145842171','V-17892346','1234','Activo',0,0,0,0,0),
(153,'EDISON','FLORES','AAABBB','Gancho','AZUL','4144149576','V-7144984','1234','Activo',0,0,0,0,0),
(154,'LUIS','FERNANDEZ','AAABBB','Gancho','AZUL','4121359807','V-15915267','1234','Activo',0,0,0,0,0),
(155,'EMILIO','ESCALANTE','AAABBB','Gancho','AZUL','4149428988','V-195247338','1234','Activo',0,0,0,0,0),
(156,'ALVIN','NAVEDA','AAABBB','Gancho','AZUL','4120422133','J-405780100','JM2211','Activo',0,0,0,0,0),
(157,'JONATHAN','DIAZ','AAABBB','Gancho','AZUL','4124669217','V-144178897','1234','Activo',0,0,0,0,0),
(158,'CARLOS','CONTRERAS','AAABBB','Gancho','AZUL','4244263777','V-245714048','1234','Activo',0,0,0,0,0),
(159,'JOSÉ','CONTRERAS','AAABBB','Gancho','AZUL','4244339130','V-23064907','1234','Activo',0,0,0,0,0),
(160,'FRANCISCO','OVIEDO','AAABBB','Gancho','AZUL','4144362722','V-11347344','1234','Activo',0,0,0,0,0),
(161,'RAFAEL','CEBALLOS','AAABBB','Gancho','AZUL','4144191725','V-12318253','1234','Activo',0,0,0,0,0),
(162,'CARLOS','CARREYO','AAABBB','Gancho','AZUL','4244346222','V-17903674','1234','Activo',0,0,0,0,0),
(163,'ALEXANDER','AVILA','AAABBB','Gancho','AZUL','4244954715','J-404936157','20513088','Activo',0,0,0,0,0),
(164,'JORGE','ARRAEZ','AAABBB','Gancho','AZUL','4141424244','V-74357829','1234','Activo',0,0,0,0,0),
(165,'WIDERMIS','ARGUELLO','AAABBB','Gancho','AZUL','4127772056','V-22003441','1234','Activo',0,0,0,0,0),
(166,'CARLOS','AREVALO','AAABBB','Gancho','AZUL','4124075092','V-18627399','1234','Activo',0,0,0,0,0),
(167,'RICARDO','AREAS','00GDAS','Plataforma criolla','Blanco','4145973434','J-296883890','1234','Activo',0,0,0,0,0),
(168,'JIMMY','AGUILAR','AAABBB','Gancho','AZUL','4143420999','V-119873092','1234','Activo',0,0,0,0,0),
(169,'LIEMBER','ACOSTA','AAABBB','Gancho','AZUL','4244528532','J-298479442','1234','Activo',0,0,0,0,0),
(170,'RUBEN','PURO','AAABBB','Gancho','AZUL','4127795599','V-123826155','1234','Activo',0,0,0,0,0),
(171,'JOSE','ZAMORA','AAABBB','Gancho','AZUL','4145918414','V-161546387','942999','Activo',0,0,0,0,0),
(172,'ARGENIS','SEIJAS','AAABBB','Gancho','AZUL','4244684329','V-187467264','1234','Activo',0,0,0,0,0),
(173,'GREGORY','TARAZONA','AAABBB','Gancho','AZUL','4124080838','V-18347244','1234','Activo',0,0,0,0,0),
(174,'OSCAR','LOPEZ','AAABBB','Gancho','AZUL','4244092699','J-297189866','1234','Activo',0,0,0,0,0),
(175,'JESUS','SUAREZ','AAABBB','Gancho','AZUL','4247308006','V-195025408','1234','Activo',0,0,0,0,0),
(176,'XAVIER','HENRIQUEZ','AAABBB','Gancho','AZUL','4245789286','J-403136203','1234','Activo',0,0,0,0,0),
(177,'JOSE','RIVERO','AAABBB','Gancho','AZUL','4145958570','V-141122785','1234','Activo',0,0,0,0,0),
(178,'MELVIN','CAMPOS','AAABBB','Gancho','AZUL','4244554792','V-9413227','1234','Activo',0,0,0,0,0),
(179,'EDUARDO','AVILA','AAABBB','Gancho','AZUL','4124021470','V-16423934','1234','Activo',0,0,0,0,0),
(180,'HECTOR','ACOSTA','AAABBB','Gancho','AZUL','4145957718','V-13441715','1234','Activo',0,0,0,0,0),
(181,'JESUS','HERNANDEZ','AAABBB','Gancho','AZUL','4120897047','V-157902292','1234','Activo',0,0,0,0,0),
(182,'MIGUEL','ZOLLO','AAABBB','Gancho','AZUL','4142761757','V-108195378','1234','Activo',0,0,0,0,0),
(183,'ANGEL','VIELMA','AAABBB','Gancho','AZUL','4241101259','V-166816838','1234','Activo',0,0,0,0,0),
(184,'YAN','TORRES','AAABBB','Gancho','AZUL','4141375346','V-127839811','1234','Activo',0,0,0,0,0),
(185,'RAFAEL','SOTO','AAABBB','Gancho','AZUL','4141257398','V-141664278','1234','Activo',0,0,0,0,0),
(186,'EDGAR','SILVA','AAABBB','Gancho','AZUL','4265111415','V-175886890','1234','Activo',0,0,0,0,0),
(187,'CESAR','RODRIGUEZ','AAABBB','Gancho','AZUL','4143080366','J-305161941','1234','Activo',0,0,0,0,0),
(188,'CARLOS','RAMOS','AAABBB','Gancho','AZUL','4263054553','V-179746855','1234','Activo',0,0,0,0,0),
(189,'DUOGLAS','OSORIO','AAABBB','Gancho','AZUL','4149201105','J-405114223','1234','Activo',0,0,0,0,0),
(190,'REISNEL','OLIVEROS','AAABBB','Gancho','AZUL','4242301970','V-166836960','1234','Activo',0,0,0,0,0),
(191,'DANNY','IBARRA','AAABBB','Gancho','AZUL','4141630878','V-144071880','1234','Activo',0,0,0,0,0),
(192,'YORGENIS OSWALDO','GONZALEZ','AAABBB','Gancho','AZUL','4241530799','V-18357945','1234','Activo',0,0,0,0,0),
(193,'ANDERSON','GARCIA','AAABBB','Gancho','AZUL','4142561599','V-200518540','1234','Activo',0,0,0,0,0),
(194,'WELBYS','GARCIA','AAABBB','Gancho','AZUL','4143397611','V-136973858','1234','Activo',0,0,0,0,0),
(195,'GABRIEL','CONDE','AAABBB','Gancho','AZUL','4143166297','J-296606617','1234','Activo',0,0,0,0,0),
(196,'RAMÓN','BRICEÑO','AAABBB','Gancho','AZUL','4142854569','J-315873974','coqueta','Activo',0,0,0,0,0),
(197,'OSMARLIN','GUTIERREZ','AAABBB','Gancho','AZUL','4148458047','V-99692452','1234','Activo',0,0,0,0,0),
(198,'JUAN FRANCISCO','RASSE','AAABBB','Gancho','AZUL','4143328987','V-153430841','jfr-1982','Activo',0,0,0,0,0),
(199,'FHANCER ENRIQUE','PEREZ','AAABBB','Gancho','AZUL','4141735530','V-123755150','1234','Activo',0,0,0,0,0),
(200,'ABRAHAM','CABRERA','AAABBB','Gancho','AZUL','4243398447','V-166828917','1234','Activo',0,0,0,0,0),
(201,'FERNANDO','BRICEÑO','AAABBB','Gancho','AZUL','4241152945','V-13951495','1234','Activo',0,0,0,0,0),
(202,'JOSE','URBINA','AAABBB','Gancho','AZUL','4143377129','V-6292454','1234','Activo',0,0,0,0,0),
(203,'MERVIN','PARRA','AAABBB','Gancho','AZUL','4169019199','J-402492537','1234','Activo',0,0,0,0,0),
(204,'MARCOS','NUÑEZ','A10AI6H','Plataforma hidráulic','BLANCO','4142570064','J-295056079','PACO1940','Activo',0,0,0,0,0),
(205,'JESUS','MONTILLA','AAABBB','Gancho','AZUL','4143151927','J-298133147','1234','Activo',0,0,0,0,0),
(206,'REINALDO','MENDEZ','A89AU7B','Plataforma criolla','BLANCO Y NARANJA','4129210262','J-317385799','1234','Activo',0,0,0,0,0),
(207,'FILIBERTO','LOPEZ','AAABBB','Gancho','AZUL','4242107850','V-10489616','1234','Activo',0,0,0,0,0),
(208,'ANGEL','HERRERA','AAABBB','Gancho','AZUL','4265199753','V-128349088','1234','Activo',0,0,0,0,0),
(209,'MIGUEL','GUTIERREZ','AAABBB','Gancho','AZUL','4123362522','V-178153281','1234','Activo',0,0,0,0,0),
(210,'JOSE','GUERRERO','AAABBB','Gancho','AZUL','4244466326','V-16744123','1234','Activo',0,0,0,0,0),
(211,'ANTONIO','GONZALEZ','AAABBB','Gancho','AZUL','4141283181','V-136867390','1234','Activo',0,0,0,0,0),
(212,'DIEGO','GOMEZ','AAABBB','Gancho','AZUL','4141064693','J-405706503','1234','Activo',0,0,0,0,0),
(213,'CRISTIAN','FERNANDEZ','AAABBB','Gancho','AZUL','4140149054','V-160048731','1234','Activo',0,0,0,0,0),
(214,'JOSE','FIGARELA','AAABBB','Gancho','AZUL','4165387628','J-307878630','1234','Activo',0,0,0,0,0),
(215,'ANTONIO','FERNANDEZ','AAABBB','Gancho','AZUL','4164286525','V-180384541','1234','Activo',0,0,0,0,0),
(216,'LUIS','ESTANGA','AAABBB','Gancho','AZUL','4243119933','V-403031886','1234','Activo',0,0,0,0,0),
(217,'HARRISON','CUEVAS','AAABBB','Gancho','AZUL','4141739022','V-12711500','1234','Activo',0,0,0,0,0),
(218,'LUPO','CALDERON','AAABBB','Gancho','AZUL','4142393481','J-404040730','1234','Activo',0,0,0,0,0),
(219,'JORGE','RODRIGUEZ','AAABBB','Gancho','AZUL','4142649255','V-17123023','1234','Activo',0,0,0,0,0),
(220,'MANUEL','RODRIGUEZ','AAABBB','Gancho','AZUL','4242722363','V-6844399','1234','Activo',0,0,0,0,0),
(221,'EDGANDER','ROMANO','AAABBB','Gancho','AZUL','4146842942','V-127336357','1234','Activo',0,0,0,0,0),
(222,'RONALD','RODRIGUEZ','AAABBB','Gancho','AZUL','4146991087','V-19323573','1234','Activo',0,0,0,0,0),
(223,'SEBASTIAN','HERNANDEZ','AAABBB','Gancho','AZUL','4146969138','J-307905719','1234','Activo',0,0,0,0,0),
(224,'LUIS','GUANIPA','AAABBB','Gancho','AZUL','4244740291','V-201448154','1234','Activo',0,0,0,0,0),
(225,'DENNIS','FERNANDEZ','AAABBB','Gancho','AZUL','4146844405','V-60090110','1234','Activo',0,0,0,0,0),
(226,'JEAN','ESPINOZA','AAABBB','Gancho','AZUL','4123797464','V-19672830','1234','Activo',0,0,0,0,0),
(227,'HECTOR','BRAVO','AAABBB','Gancho','AZUL','4146832507','V-139027155','454545','Activo',0,0,0,0,0),
(228,'ORZON','MENDEZ','AAABBB','Gancho','AZUL','4127435801','V-179236180','1234','Activo',0,0,0,0,0),
(229,'ALEXNDER','FIRIT','AAABBB','Gancho','AZUL','4267387688','J-299526568','1234','Activo',0,0,0,0,0),
(230,'GUSTAVO','SARMIENTO','AAABBB','Gancho','AZUL','4126512472','J-402536747','1234','Activo',0,0,0,0,0),
(231,'JOSE','NAVERA','AAABBB','Gancho','AZUL','4128916905','J-405780100','AN1607','Activo',0,0,0,0,0),
(232,'FRANK','MANZINI','AAABBB','Gancho','AZUL','4127127923','J-293940109','1234','Activo',0,0,0,0,0),
(233,'REYKAR','FERNANDEZ','AAABBB','Gancho','AZUL','4124053188','J-406183946','1234','Activo',0,0,0,0,0),
(234,'MIGUEL','BRAVO','AAABBB','Gancho','AZUL','4128645088','V-95199875','1234','Activo',0,0,0,0,0),
(235,'EDWIN','BAUTE','AAABBB','Gancho','AZUL','4149895146','V-155459839','1234','Activo',0,0,0,0,0),
(236,'MIGUEL','PERALTA','AAABBB','Gancho','AZUL','4145520705','V-125355419','1234','Activo',0,0,0,0,0),
(237,'JOSE','RODRIGUEZ','AAABBB','Gancho','AZUL','4245304180','V-19432916','1234','Activo',0,0,0,0,0),
(238,'NAPOLEON','CARRASCO','AAABBB','Gancho','AZUL','4145228181','V-74268699','1234','Activo',0,0,0,0,0),
(239,'ANTONY','PEREZ','AAABBB','Gancho','AZUL','4247697810','V-189219969','1234','Activo',0,0,0,0,0),
(240,'ORLANDO','PEREZ','AAABBB','Gancho','AZUL','4245213740','V-157765716','1234','Activo',0,0,0,0,0),
(241,'DANIEL','ORFELI','AAABBB','Gancho','AZUL','4160581007','V-154484821','1234','Activo',0,0,0,0,0),
(242,'OSCAR DONATO','MELIDEO','AAABBB','Gancho','AZUL','4245090747','V-167956757','1234','Activo',0,0,0,0,0),
(243,'ALDEMARO','CASAMAYOR','AAABBB','Gancho','AZUL','4245324693','J-402470843','1234','Activo',0,0,0,0,0),
(244,'JOHAN','ABRAHAN','AAABBB','Gancho','AZUL','4245267553','V-182618442','1234','Activo',0,0,0,0,0),
(245,'RUBEN','TORRES','AAABBB','Gancho','AZUL','4245251507','V-164049333','1234','Activo',0,0,0,0,0),
(246,'ABDIEL','TORREALBA','AAABBB','Gancho','AZUL','4120524017','V-85887242','1234','Activo',0,0,0,0,0),
(247,'JAIRO','TORREALBA','AAABBB','Gancho','AZUL','4165015045','V-11314948','1234','Activo',0,0,0,0,0),
(248,'JOSÉ','SUAREZ','AAABBB','Gancho','AZUL','4145117224','V-165844579','1234','Activo',0,0,0,0,0),
(249,'MIGUEL','SOTO','AAABBB','Gancho','AZUL','4145667110','J-406074454','1234','Activo',0,0,0,0,0),
(250,'MANAURE','SILVA','AAABBB','Gancho','AZUL','4145584772','V-19726925','1234','Activo',0,0,0,0,0),
(251,'YHITZANDER','SEQUERA','AAABBB','Gancho','AZUL','4168533664','V-139905403','1234','Inactivo',0,0,0,0,0),
(252,'PANFILO','SANABRIA','AAABBB','Gancho','AZUL','4245991713','V-19901068','1234','Activo',0,0,0,0,0),
(253,'JONATHAN','ROSALES','AAABBB','Gancho','AZUL','4245578547','V-184221345','1234','Activo',0,0,0,0,0),
(254,'IVAN','ARRAEZ','AAABBB','Gancho','AZUL','4263567129','V-17506214','1234','Activo',0,0,0,0,0),
(255,'DENNIS','RODRIGUEZ','AAABBB','Gancho','AZUL','4166518532','V-103181239','1234','Activo',0,0,0,0,0),
(256,'JOSE','PEROZA','AAABBB','Gancho','AZUL','4145356766','V-16898855','1234','Activo',0,0,0,0,0),
(257,'NOÉ','PEREZ','AAABBB','Gancho','AZUL','4145674609','V-167506646','1234','Activo',0,0,0,0,0),
(258,'DAVID','PEREZ','AAABBB','Gancho','AZUL','4144067657','V-255416380','1234','Activo',0,0,0,0,0),
(259,'ALFREDO','NAVAS','AAABBB','Gancho','AZUL','4145738159','J-407265580','1234','Activo',0,0,0,0,0),
(260,'JOSE','MOLLEJA','AAABBB','Gancho','AZUL','4245616581','V-168042767','1234','Activo',0,0,0,0,0),
(261,'LUIS','MERINO','AAABBB','Gancho','AZUL','4145095502','V-118798062','1234','Activo',0,0,0,0,0),
(262,'OSWALDO JOSE','MARTINEZ','AAABBB','Gancho','AZUL','4267590039','V-189223443','1234','Activo',0,0,0,0,0),
(263,'JOAN','MANUEL','AAABBB','Gancho','AZUL','4163540669','J-405519720','1234','Activo',0,0,0,0,0),
(264,'ALBERTO','LOPEZ','AAABBB','Gancho','AZUL','4245776684','V-195905602','1234','Activo',0,0,0,0,0),
(265,'WILMER','LEÓN','AAABBB','Gancho','AZUL','4245163642','V-136441392','1234','Activo',0,0,0,0,0),
(266,'LUIS','GONZALEZ','AAABBB','Gancho','AZUL','4145151994','V-15817277','1234','Activo',0,0,0,0,0),
(267,'LUIS','GONZALEZ','AAABBB','Gancho','AZUL','4245384442','V-20500294','1234','Activo',0,0,0,0,0),
(268,'GIBSON','GARCIA','AAABBB','Gancho','AZUL','4145090868','J-407588680','1234','Activo',0,0,0,0,0),
(269,'JOSE','FERNANDEZ','AAABBB','Gancho','AZUL','4145229962','J-401384331','1234','Activo',0,0,0,0,0),
(270,'JOSICH','ENSINOZA','AAABBB','Gancho','AZUL','4149734120','V-16089098','1234','Activo',0,0,0,0,0),
(271,'CARLOS','CORDERO','a94bw5a','Plataforma criolla','amarilla','4145303257','V-19106169','170989','Activo',0,0,0,0,0),
(272,'ELISAUL','ARRIECHE','AAABBB','Gancho','AZUL','4145015002','V-9614853','1234','Activo',0,0,0,0,0),
(273,'ENDERSON','ARRIECHE','AAABBB','Gancho','AZUL','4245533906','V-19106412','1234','Activo',0,0,0,0,0),
(274,'KERWIS','ALVAREZ','AAABBB','Gancho','AZUL','4145720543','V-122431050','1234','Activo',0,0,0,0,0),
(275,'VICTOR','AGUILAR','AAABBB','Gancho','AZUL','4245306172','V-172273552','1234','Activo',0,0,0,0,0),
(276,'ELISANDRO','ARRIECHE','AAABBB','Gancho','AZUL','4140579586','V-16277442','1234','Activo',0,0,0,0,0),
(277,'FREDDY','MENDOZA','AAABBB','Gancho','AZUL','4145069448','V-198835095','1234','Activo',0,0,0,0,0),
(278,'HERMES','GIL','AAABBB','Gancho','AZUL','4145202990','V-132668791','1234','Activo',0,0,0,0,0),
(279,'DARWIN','MOLINA','AAABBB','Gancho','AZUL','4149539152','V-147496245','1234','Activo',0,0,0,0,0),
(280,'SAMUEL','MEDINA','AAABBB','Gancho','AZUL','4166565318','J-401491529','1234','Activo',0,0,0,0,0),
(281,'JESUS','RUIZ','AAABBB','Gancho','AZUL','4149543202','V-11308010','1234','Activo',0,0,0,0,0),
(282,'LEONEL','ZERPA','AAABBB','Gancho','AZUL','4143741985','J-316521338','1234','Activo',0,0,0,0,0),
(283,'JUAN CARLOS','ZAMBRANO','AAABBB','Gancho','AZUL','4147448814','J-404100172','1234','Activo',0,0,0,0,0),
(284,'OLI','VIELMA','AAABBB','Gancho','AZUL','4147450040','J-316521338','1234','Activo',0,0,0,0,0),
(285,'HENRY','VIELMA','AAABBB','Gancho','AZUL','4265739429','J-403646708','1234','Activo',0,0,0,0,0),
(286,'LANDER','SALSEDO','A02A01O','Plataforma criolla','BLANCO','4265127211','V-144383849','1234','Activo',0,0,0,0,0),
(287,'LEONARDO','RONDON','AAABBB','Gancho','AZUL','4247741348','V-8086180','1234','Activo',0,0,0,0,0),
(288,'LUIS','RIVAS','AAABBB','Gancho','AZUL','4160101066','V-226574316','1234','Activo',0,0,0,0,0),
(289,'JONDY','RIVAS','AAABBB','Gancho','AZUL','4247171782','V-90317012','1234','Activo',0,0,0,0,0),
(290,'LEONARDO','RIVAS','AAABBB','Gancho','AZUL','4264263200','V-145883705','1234','Activo',0,0,0,0,0),
(291,'JOSE','PARRA','AAABBB','Gancho','AZUL','4147121580','V-123550303','1234','Activo',0,0,0,0,0),
(292,'JUAN','PARRA','AAABBB','Gancho','AZUL','4129799032','V-123462790','1234','Activo',0,0,0,0,0),
(293,'RAFAEL','PARRA','AAABBB','Gancho','AZUL','4149798262','V-15594482','1234','Activo',0,0,0,0,0),
(294,'NIXON','OSUNA','AAABBB','Gancho','AZUL','4147129516','V-16741681','1234','Activo',0,0,0,0,0),
(295,'MAURICIO','MOLINA','AAABBB','Gancho','AZUL','4143750128','V-142879405','1234','Activo',0,0,0,0,0),
(296,'RICHARD','MENDEZ','AAABBB','Gancho','AZUL','4247207550','V-106915055','1234','Activo',0,0,0,0,0),
(297,'JOSE LUIS','MANTILLA','AAABBB','Gancho','AZUL','4144293602','V-91032535','1234','Activo',0,0,0,0,0),
(298,'OSWALDO','LINARES','AAABBB','Gancho','AZUL','4165754476','V-8036926','1234','Activo',0,0,0,0,0),
(299,'DAVID','GUILLEN','AAABBB','Gancho','AZUL','4147482181','V-150323343','1234','Activo',0,0,0,0,0),
(300,'JAIME','GUERERE','AAABBB','Gancho','AZUL','4147304813','V-130645107','1234','Activo',0,0,0,0,0),
(301,'JAVIER','GARCIA','AAABBB','Gancho','AZUL','4248682330','V-16742818','1234','Activo',0,0,0,0,0),
(302,'RENE','ESPINOZA','AAABBB','Gancho','AZUL','4168770072','V-166559311','1234','Activo',0,0,0,0,0),
(303,'JOSE','DUGARTE','AAABBB','Gancho','AZUL','4269750902','V-127796102','1234','Activo',0,0,0,0,0),
(304,'LEONEL','DIAZ','AAABBB','Gancho','AZUL','4160774854','V-119527003','1234','Activo',0,0,0,0,0),
(305,'NIXON','DEVIA','AAABBB','Gancho','AZUL','4247117713','V-130982359','1234','Activo',0,0,0,0,0),
(306,'OREIMA','BRACHO','AAABBB','Gancho','AZUL','4166742282','J-403646708','1234','Activo',0,0,0,0,0),
(307,'EVEN','ALVAREZ','AAABBB','Gancho','AZUL','4247100206','V-156212535','1234','Activo',0,0,0,0,0),
(308,'GERARDO','ALMEIDA','AAABBB','Gancho','AZUL','4247238351','V-16680944','1234','Activo',0,0,0,0,0),
(309,'JONATHAN','ALMEIDA','AAABBB','Gancho','AZUL','4164722471','V-22989387','1234','Activo',0,0,0,0,0),
(310,'PEDRO','ALBARRAN','AAABBB','Gancho','AZUL','4247067888','V-80018769','1234','Activo',0,0,0,0,0),
(311,'HECTOR','AVELLANO','AAABBB','Gancho','AZUL','4141817375','J-298877162','1234','Activo',0,0,0,0,0),
(312,'LENIN','ZERPA','AAABBB','Gancho','AZUL','4147446144','V-80318207','1234','Activo',0,0,0,0,0),
(313,'YORMAN','RIVAS','AAABBB','Gancho','AZUL','4166729296','J-407054945','1234','Activo',0,0,0,0,0),
(314,'ELIBE','QUINTERO','A00A73E','Plataforma criolla','BLANCO','4166749955','V-80006337','elide633','Activo',0,0,0,0,0),
(315,'JAIRO','RIVAS','AAABBB','Gancho','AZUL','4247005063','V-9460217','1234','Activo',0,0,0,0,0),
(316,'LUIS','NATERA','AAABBB','Gancho','AZUL','4147550915','V-16597643','1234','Activo',0,0,0,0,0),
(317,'JORMAN','RIVAS','AAABBB','Gancho','AZUL','4141777722','J-407054945','1234','Activo',0,0,0,0,0),
(318,'FERNANDO','ZERPA','AAABBB','Gancho','AZUL','4168248524','V-10528846','1234','Activo',0,0,0,0,0),
(319,'DENNYS','YUNCOZA','AAABBB','Gancho','AZUL','4143780956','J-317398548','4611376','Activo',0,0,0,0,0),
(320,'SIMON','TETLOSKI','AAABBB','Gancho','AZUL','4141057929','V-125630126','1234','Activo',0,0,0,0,0),
(321,'RAUL','SEGOVIA','AAABBB','Gancho','AZUL','4241293885','V-144380521','1234','Activo',0,0,0,0,0),
(322,'JOSÉ','SAVEDRA','AAABBB','Gancho','AZUL','4263198562','J-405432420','1234','Activo',0,0,0,0,0),
(323,'ENGLIS','MATA','AAABBB','Gancho','AZUL','4143368726','V-131236804','1234','Activo',0,0,0,0,0),
(324,'FRANK','PERNIAS','AAABBB','Gancho','AZUL','4143159366','V-148923198','1234','Activo',0,0,0,0,0),
(325,'GABRIEL','PEREZ','AAABBB','Gancho','AZUL','4125619795','V-19378370','1234','Activo',0,0,0,0,0),
(326,'ARMANDO','PERDOMO','AAABBB','Gancho','AZUL','4125483512','V-117367947','1234','Activo',0,0,0,0,0),
(327,'WILLIAM','CARRANZA','AAABBB','Gancho','AZUL','4143172222','V-86758055','1234','Activo',0,0,0,0,0),
(328,'KEYVIN','MORA','AAABBB','Gancho','AZUL','4163114177','V-146881021','1234','Activo',0,0,0,0,0),
(329,'JORGE','MELENDEZ','AAABBB','Gancho','AZUL','4142987599','V-86847317','1234','Activo',0,0,0,0,0),
(330,'RICARDO','MEJIA','AAABBB','Gancho','AZUL','4125431242','V-6504487','160467','Activo',0,0,0,0,0),
(331,'JESUS','MARTINEZ','AAABBB','Gancho','AZUL','4242551536','V-87554348','1234','Activo',0,0,0,0,0),
(332,'WILLIAM','MARTINEZ','AAABBB','Gancho','AZUL','4142581729','V-155893679','1234','Activo',0,0,0,0,0),
(333,'RONALD','MACHADO','AAABBB','Gancho','AZUL','4141731124','J-405603410','1234','Activo',0,0,0,0,0),
(334,'JOSE','LUCENA','AAABBB','Gancho','AZUL','4242156669','V-12832272','1234','Activo',0,0,0,0,0),
(335,'CLEMENTE','LOPEZ','AAABBB','Gancho','AZUL','4141721089','V-6994603','1234','Activo',0,0,0,0,0),
(336,'EDUAR','LAINO','AAABBB','Gancho','AZUL','4142845519','V-191545024','1234','Activo',0,0,0,0,0),
(337,'JONATAN','HIDALGO','AAABBB','Gancho','AZUL','4166841110','J-295883820','1234','Activo',0,0,0,0,0),
(338,'JUAN','HERNANDEZ','AAABBB','Gancho','AZUL','4265585303','J-299546445','1234','Activo',0,0,0,0,0),
(339,'JOALVER','HERNANDEZ','AAABBB','Gancho','AZUL','4142561612','V-144808416','1234','Activo',0,0,0,0,0),
(340,'NESTOR','GUILLEN','AAABBB','Gancho','AZUL','4142719886','V-105318274','1234','Activo',0,0,0,0,0),
(341,'PAULO','GOMEZ','AAABBB','Gancho','AZUL','4142985149','J-317060415','1234','Activo',0,0,0,0,0),
(342,'OMAR','GIMON','AAABBB','Gancho','AZUL','4241968121','J-401303285','1234','Activo',0,0,0,0,0),
(343,'JORGE','GARCIA','AAABBB','Gancho','AZUL','4143659090','J-406560294','1234','Activo',0,0,0,0,0),
(344,'WILBERTO','FLORES','AAABBB','Gancho','AZUL','4169304441','V-138458780','1234','Activo',0,0,0,0,0),
(345,'JEAN CARLOS','FIGUEROA','AAABBB','Gancho','AZUL','4149166757','V-132476388','1234','Activo',0,0,0,0,0),
(346,'JUAN','FERNANDEZ','AAABBB','Gancho','AZUL','4149176370','V-6519079','1234','Activo',0,0,0,0,0),
(347,'ISAAC','FERNANDEZ','AAABBB','Gancho','AZUL','4143236557','J-314677764','1234','Activo',0,0,0,0,0),
(348,'IVAN','FERNANDEZ','AAABBB','Gancho','AZUL','4143178804','J-297527869','1234','Activo',0,0,0,0,0),
(349,'RAMON','FARIAS','AAABBB','Gancho','AZUL','4245010381','J-401647588','1234','Activo',0,0,0,0,0),
(350,'CARLOS','DOMINGO','AAABBB','Gancho','AZUL','4143197755','J-296764611','1234','Activo',0,0,0,0,0),
(351,'FERMIN','DIAZ','AAABBB','Gancho','AZUL','4141117772','J-296695091','1234','Activo',0,0,0,0,0),
(352,'JUAN','DEFFIT','AAABBB','Gancho','AZUL','4241927117','V-100927175','1234','Activo',0,0,0,0,0),
(353,'LUIS','DA SILVA','AAABBB','Gancho','AZUL','4149289320','V-169243952','1234','Activo',0,0,0,0,0),
(354,'JOSE','SEQUERA','AAABBB','Gancho','AZUL','4241827400','V-17651617','1234','Activo',0,0,0,0,0),
(355,'JUNIOR','CASTILLO','AAABBB','Gancho','AZUL','4241911926','V-19200916','1234','Activo',0,0,0,0,0),
(356,'KELVIN','CASTILLO','AAABBB','Gancho','AZUL','4141266908','V-24088465','1234','Activo',0,0,0,0,0),
(357,'JUAN','BOYER','AAABBB','Gancho','AZUL','4241283428','J-298321865','1234','Activo',0,0,0,0,0),
(358,'JUVENCIO','BARRIOS','AAABBB','Gancho','AZUL','4166158436','V-15150151','1234','Activo',0,0,0,0,0),
(359,'EDGAR','BARRETO','AAABBB','Gancho','AZUL','4242193577','V-68444213','1234','Activo',0,0,0,0,0),
(360,'ROBIN','ALVAREZ','AAABBB','Gancho','AZUL','4241630705','V-63220252','1234','Activo',0,0,0,0,0),
(361,'FELIX','ALVARADO','AAABBB','Gancho','AZUL','4143661089','J-301657152','1234','Activo',0,0,0,0,0),
(362,'JOSE','FERNANDEZ','AAABBB','Gancho','AZUL','4168358580','V-22046668','1234','Activo',0,0,0,0,0),
(363,'ENGLIS','MATA','AAABBB','Gancho','AZUL','4143368727','V-131236804','1234','Activo',0,0,0,0,0),
(364,'FERNAN','FIGUERA','AAABBB','Gancho','AZUL','4141354681','V-120644153','1234','Activo',0,0,0,0,0),
(365,'ERNESTO','GONZALEZ','AAABBB','Gancho','AZUL','4241901331','V-11561395','1234','Activo',0,0,0,0,0),
(366,'JESÚS','MACHADO','AAABBB','Gancho','AZUL','4242812323','V-223516838','1234','Activo',0,0,0,0,0),
(367,'JOSE','HERNANDEZ','AAABBB','Gancho','AZUL','4242371077','V-140605669','1234','Activo',0,0,0,0,0),
(368,'ALVARO','CARRASCAL','AAABBB','Gancho','AZUL','4144666007','V-117390272','1234','Activo',0,0,0,0,0),
(369,'ENZO','SALAMANCA','AAABBB','Gancho','AZUL','4148921841','V-15813782','1234','Activo',0,0,0,0,0),
(370,'MIGUEL','RONDON','AAABBB','Gancho','AZUL','4140219262','V-18556247','1234','Activo',0,0,0,0,0),
(371,'JESÚS','PIPPE','AAABBB','Gancho','AZUL','4121175318','V-175576254','1234','Activo',0,0,0,0,0),
(372,'JESUS','MEDINA','AAABBB','Gancho','AZUL','4162978007','J-315163527','1234','Activo',0,0,0,0,0),
(373,'VERUSKA','HIRARRAZA','AAABBB','Gancho','AZUL','4141988729','J-400065844','1234','Activo',0,0,0,0,0),
(374,'FRANCISCO','GROSO','AAABBB','Gancho','AZUL','4126975587','J-295870779','1234','Activo',0,0,0,0,0),
(375,'CRISTIAN','GONZALEZ','AAABBB','Gancho','AZUL','4249684455','V-182745061','1234','Activo',0,0,0,0,0),
(376,'JUAN','FARIÑAS','AAABBB','Gancho','AZUL','4147652368','V-86515012','1234','Activo',0,0,0,0,0),
(377,'JORGE','CHACON','AAABBB','Gancho','AZUL','4147656659','J-402137729','1234','Activo',0,0,0,0,0),
(378,'CARLOS','CAÑA','AAABBB','Gancho','AZUL','4247367040','J-407269542','1234','Activo',0,0,0,0,0),
(379,'TEUDYS','PENOTH','AAABBB','Gancho','AZUL','4123531856','V-174193025','1234','Activo',0,0,0,0,0),
(380,'CARLOS','RODRIGUEZ','AAABBB','Gancho','AZUL','4125309410','V-163372793','1234','Activo',0,0,0,0,0),
(381,'JORGE','MARCANO','AAABBB','Gancho','AZUL','4162909868','V-165458156','1234','Activo',0,0,0,0,0),
(382,'MOISES','FERRER','AAABBB','Gancho','AZUL','4248360072','J-407186272','1234','Activo',0,0,0,0,0),
(383,'CRISTOFER','SALAZAR','AAABBB','Gancho','AZUL','4267372673','V-181149180','1234','Activo',0,0,0,0,0),
(384,'EDMUNDO','VILLARROEL','AAABBB','Gancho','AZUL','4143957318','J-295939906','1234','Activo',0,0,0,0,0),
(385,'EDWIN','MARCANO','AAABBB','Gancho','AZUL','4248729224','J-310877629','1234','Activo',0,0,0,0,0),
(386,'JOSE','MARTINEZ','AAABBB','Gancho','AZUL','4248101901','V-163376837','1234','Activo',0,0,0,0,0),
(387,'EMILIO','ROJAS','AAABBB','Gancho','AZUL','4245139142','J-95669561','1234','Activo',0,0,0,0,0),
(388,'VICENTE','LOVERA','AAABBB','Gancho','AZUL','4141198832','J-402511728','1234','Activo',0,0,0,0,0),
(389,'GREGORIO','SIVIRA','AAABBB','Gancho','AZUL','4145618301','V-10638194','1234','Activo',0,0,0,0,0),
(390,'ENDYS','CASTRO','AAABBB','Gancho','AZUL','4246647720','J-407614029','1234','Activo',0,0,0,0,0),
(391,'DANIEL','PERALES','AAABBB','Gancho','AZUL','4145214367','V-167953006','1234','Activo',0,0,0,0,0),
(392,'NELSON','GUERRERO','AAABBB','Gancho','AZUL','4142548852','V-64516236','1234','Activo',0,0,0,0,0),
(393,'JESUS','GONZALEZ','AAABBB','Gancho','AZUL','4128580220','J-315955490','1234','Activo',0,0,0,0,0),
(394,'EDGAR','ZAMBRANO','AAABBB','Gancho','AZUL','4247197800','V-56859256','1234','Activo',0,0,0,0,0),
(395,'GABRIEL','VIVAS','AAABBB','Gancho','AZUL','4147068737','V-15988990','1234','Activo',0,0,0,0,0),
(396,'DENIS','VILCHEZ','AAABBB','Gancho','AZUL','4247622119','V-12631511','1234','Activo',0,0,0,0,0),
(397,'JESUS','VELAZCO','AAABBB','Gancho','AZUL','4147136258','V-211798832','1234','Activo',0,0,0,0,0),
(398,'HENRRY','ROMERO','AAABBB','Gancho','AZUL','4147028017','V-122349507','1234','Activo',0,0,0,0,0),
(399,'LUIS','RODRIGUEZ','AAABBB','Gancho','AZUL','4247233374','V-133043523','1234','Activo',0,0,0,0,0),
(400,'LUIS','PICADA','AAABBB','Gancho','AZUL','4247301485','V-161239646','1234','Activo',0,0,0,0,0),
(401,'JESSICA','OCHOA','AAABBB','Gancho','AZUL','4247793802','V-101733315','1234','Activo',0,0,0,0,0),
(402,'JAVIER','NIÑO','AAABBB','Gancho','AZUL','4247255445','V-165407020','1234','Activo',0,0,0,0,0),
(403,'JOSE','MORENO','AAABBB','Gancho','AZUL','4149702667','V-161259752','1234','Activo',0,0,0,0,0),
(404,'LUIS','MARCIANI','AAABBB','Gancho','AZUL','4147021813','V-101724138','1234','Activo',0,0,0,0,0),
(405,'MIGUEL','MALDONADO','AAABBB','Gancho','AZUL','4141791070','V-20999408','1234','Activo',0,0,0,0,0),
(406,'HEBER','LEAL','AAABBB','Gancho','AZUL','4247542332','V-12814562','1234','Activo',0,0,0,0,0),
(407,'TONY','GUERRERO','AAABBB','Gancho','AZUL','4147080766','V-11498286','1234','Activo',0,0,0,0,0),
(408,'JOSE','GONZALEZ','AAABBB','Gancho','AZUL','4247030044','V-92387239','1234','Activo',0,0,0,0,0),
(409,'ANTONIO','COLMENARES','AAABBB','Gancho','AZUL','4149774654','V-178128554','1234','Activo',0,0,0,0,0),
(410,'JOSE GRE','CARRERO','AAABBB','Gancho','AZUL','4247157392','V-63172487','1234','Activo',0,0,0,0,0),
(411,'ANGEL','CARDENAS','AAABBB','Gancho','AZUL','4164702652','V-16410121','1234','Activo',0,0,0,0,0),
(412,'GERARDO','BARRETO','AAABBB','Gancho','AZUL','4263286798','V-149413070','1234','Activo',0,0,0,0,0),
(413,'ENDER','BARAJAS','AAABBB','Gancho','AZUL','4141774262','J-295575165','1234','Activo',0,0,0,0,0),
(414,'SERGIO','BALDUZ','AAABBB','Gancho','AZUL','4147084876','V-101451778','1234','Activo',0,0,0,0,0),
(415,'NICOLAS','BALAN','AAABBB','Gancho','AZUL','4166764492','V-175030944','1234','Activo',0,0,0,0,0),
(416,'JESUS','AVENDAÑO','AAABBB','Gancho','AZUL','4247131569','V-101559668','1234','Activo',0,0,0,0,0),
(417,'JOSE','ATUCHA','AAABBB','Gancho','AZUL','4147064516','V-101532093','1234','Activo',0,0,0,0,0),
(418,'ROSMEL','ARAUJO','AAABBB','Gancho','AZUL','4147055111','V-12970435','1234','Activo',0,0,0,0,0),
(419,'GERARDO','CARRERO','AAABBB','Gancho','AZUL','4147044054','V-129704353','1234','Activo',0,0,0,0,0),
(420,'LISANDRO','VALERA','AAABBB','Gancho','AZUL','4147024064','V-102646203','1234','Activo',0,0,0,0,0),
(421,'ALBERTO','SILVA','AAABBB','Gancho','AZUL','4144178052','J-406161519','1234','Activo',0,0,0,0,0),
(422,'VICTOR','VARELLA','AAABBB','Gancho','AZUL','4168117005','V-167241871','1234','Activo',0,0,0,0,0),
(423,'WILLIAM','ROA','AAABBB','Gancho','AZUL','4141197409','V-11973051','1234','Activo',0,0,0,0,0),
(424,'JOHAN','GUADARAMA','AAABBB','Gancho','AZUL','4245443203','V-17920780','1234','Activo',0,0,0,0,0),
(425,'ANDER','BAUSTE','A00A54L','Plataforma criolla','azul y gris','4143584594','V-178444790','1234','Activo',0,0,0,0,0),
(426,'LENNY','AGÜERO','AAABBB','Gancho','AZUL','4145146400','V-14210216','1234','Activo',0,0,0,0,0),
(427,'JUAN','AGÜERO','AAABBB','Gancho','AZUL','4245704769','V-14607191','1234','Activo',0,0,0,0,0),
(428,'ROQUE','SEGUNDO','AAABBB','Gancho','AZUL','4149600685','J-297126422','1234','Activo',0,0,0,0,0),
(429,'CIRO','SALAZAR','AAABBB','Gancho','AZUL','4146015890','J-403837465','1234','Activo',0,0,0,0,0),
(430,'LUIS','ROLDAN','AAABBB','Gancho','AZUL','4146215697','V-6832884','1234','Activo',0,0,0,0,0),
(431,'LUIS','ROLDA','AAABBB','Gancho','AZUL','4149605051','V-161491957','1234','Activo',0,0,0,0,0),
(432,'WILLIAM','REYES','AAABBB','Gancho','AZUL','4146692100','J-296083231','1234','Activo',0,0,0,0,0),
(433,'JEAN CARLOS','RAMIREZ','AAABBB','Gancho','AZUL','4140642931','V-15720018','1234','Activo',0,0,0,0,0),
(434,'ALEXANDER','PEROZO','AAABBB','Gancho','AZUL','4246085064','V-16837189','1234','Activo',0,0,0,0,0),
(435,'JHON','PEREIRA','AAABBB','Gancho','AZUL','4140674475','V-16186594','1234','Activo',0,0,0,0,0),
(436,'EFRAIN','PEÑALOZA','AAABBB','Gancho','AZUL','4141671341','J-404975993','1234','Activo',0,0,0,0,0),
(437,'IVAN','NUÑEZ','AAABBB','Gancho','AZUL','4146793373','J-296503605','1234','Activo',0,0,0,0,0),
(438,'HANDY','MORALES','AAABBB','Gancho','AZUL','4146491088','V-17088027','1234','Activo',0,0,0,0,0),
(439,'JOSE','MENDEZ','AAABBB','Gancho','AZUL','4146410552','J-314926365','1234','Activo',0,0,0,0,0),
(440,'UNALDO','MARTINEZ','AAABBB','Gancho','AZUL','4246311561','V-133019341','1234','Activo',0,0,0,0,0),
(441,'RICARDO','MARTINEZ','AAABBB','Gancho','AZUL','4143612049','J-316358151','1234','Activo',0,0,0,0,0),
(442,'NELSON','MARTINEZ','AAABBB','Gancho','AZUL','4265178488','J-406758280','TRANSPOR','Activo',0,0,0,0,0),
(443,'SIR JOSE','LUNA','AAABBB','Gancho','AZUL','4125492162','V-161210478','1234','Activo',0,0,0,0,0),
(444,'ALEXANDER','LOPEZ','AAABBB','Gancho','AZUL','4143619503','V-7620622','1234','Activo',0,0,0,0,0),
(445,'JORGE','HENRY','AAABBB','Gancho','AZUL','4246207684','V-222500261','1234','Activo',0,0,0,0,0),
(446,'DILMER','DOMADOR','AAABBB','Gancho','AZUL','4246952273','V-17684805','1234','Activo',0,0,0,0,0),
(447,'JOHAN','CORONA','AAABBB','Gancho','AZUL','4143630069','J-403936633','1234','Activo',0,0,0,0,0),
(448,'KELVIS','CHACON','AAABBB','Gancho','AZUL','4246209611','V-167831750','1234','Activo',0,0,0,0,0),
(449,'ARISTOTELES','CHACIN','AAABBB','Gancho','AZUL','4149614154','J-296099120','1234','Activo',0,0,0,0,0),
(450,'ENDRY','CASERES','AAABBB','Gancho','AZUL','4143670909','J-400652227','1234','Activo',0,0,0,0,0),
(451,'JUAN','CASANOVA','AAABBB','Gancho','AZUL','4165036225','V-142366300','1234','Activo',0,0,0,0,0),
(452,'MERVIN','BRACHO','AAABBB','Gancho','AZUL','4246536573','V-142791710','ZULIA79','Activo',0,0,0,0,0),
(453,'ANMEL','BOSCAN','AAABBB','Gancho','AZUL','4246217339','V-19007041','1234','Activo',0,0,0,0,0),
(454,'EDUARDO','BALLESTERO','AAABBB','Gancho','AZUL','4146665646','V-17096155','1234','Activo',0,0,0,0,0),
(455,'CESAR','BAEZ','AAABBB','Gancho','AZUL','4143646917','J-406503100','1234','Activo',0,0,0,0,0),
(456,'RAFAEL','ANDRADE','AAABBB','Gancho','AZUL','4167792443','J-406191124','1234','Activo',0,0,0,0,0),
(457,'BETSY','REDONDO','AAABBB','Gancho','AZUL','4242757099','J-401139760','1234','Activo',0,0,0,0,0),
(458,'TONY','PULGAR','AAABBB','Gancho','AZUL','4241628120','V-168912028','1234','Activo',0,0,0,0,0),
(459,'WILSON','GAMBOA','AAABBB','Gancho','AZUL','4264714017','V-143780135','1234','Activo',0,0,0,0,0),
(460,'BORIS','TUÑON','AAABBB','Gancho','AZUL','4143779580','J-407442287','1234','Activo',0,0,0,0,0),
(461,'JONATAN','OCHOA','AAABBB','Gancho','AZUL','4247354794','V-201207025','Ale.8787','Activo',0,0,0,0,0),
(462,'DANILO','LARA','AAABBB','Gancho','AZUL','4128918791','V-10703645','1234','Activo',0,0,0,0,0),
(463,'JOSE','ORTIZ','AAABBB','Gancho','AZUL','4245275681','J-311860061','1234','Activo',0,0,0,0,0),
(464,'MAICOL','HERRERA','A02A48A','Gancho con Wheel Lif','blanco','4242742335','V-20605675','1234','Activo',0,0,0,0,0),
(465,'PEDRO','VICENS','A00A06A','Plataforma criolla','blanco','4129548160','J-401178634','1234','Activo',0,0,0,0,0),
(466,'JOSE LUIS','GIL','AAABBB','Gancho','AZUL','4142523287','V-65066862','1234','Activo',0,0,0,0,0),
(467,'ALEXANDER','RAMIREZ','AAABBB','Gancho','AZUL','4169301695','J-401745440','1234','Activo',0,0,0,0,0),
(468,'ENCRIS','MORA','AAABBB','Gancho','AZUL','4242192350','V-236115182','1234','Activo',0,0,0,0,0),
(469,'ANDRES','BETOLINI','AAABBB','Gancho','AZUL','4122870681','J-406045580','1234','Activo',0,0,0,0,0),
(470,'CALIXTO','RIVAS','AAABBB','Gancho','AZUL','4143309670','V-162884952','1234','Activo',0,0,0,0,0),
(471,'JONATHAN','MORILLO','AAABBB','Gancho','AZUL','4142752186','V-128325588','1234','Activo',0,0,0,0,0),
(472,'WITTMAN','RONDON','AAABBB','Gancho','AZUL','4141739720','V-141962554','1234','Activo',0,0,0,0,0),
(473,'EVER JESUS','RONDON','AAABBB','Gancho','AZUL','4165186472','V-14196254','1234','Activo',0,0,0,0,0),
(474,'GERMAN','SORONDO','AAABBB','Gancho','AZUL','4142775954','J-309057219','1234','Activo',0,0,0,0,0),
(475,'LUIS','RAMIREZ','AAABBB','Gancho','AZUL','4147725893','J-403416664','1234','Activo',0,0,0,0,0),
(476,'LUIS','RAMIREZ','AAABBB','Gancho','AZUL','4147725895','V-206103686','1234','Activo',0,0,0,0,0),
(477,'MIGUELON','RONDON','AAABBB','Gancho','AZUL','4142130724','J-313787744','1234','Activo',0,0,0,0,0),
(478,'CESAR','GUIÑON','AAABBB','Gancho','AZUL','4148236194','V-8871641','1234','Activo',0,0,0,0,0),
(479,'DENYS','RODRIGUEZ','AAABBB','Gancho','AZUL','4140861712','V-17956519','1234','Activo',0,0,0,0,0),
(480,'WALDO','GUARIMATA','AAABBB','Gancho','AZUL','4248486576','V-8263824','1234','Activo',0,0,0,0,0),
(481,'MARIO','LUNA','AAABBB','Gancho','AZUL','4248555605','V-10290638','1234','Activo',0,0,0,0,0),
(482,'ERICO','LUNA','AAABBB','Gancho','AZUL','4248190450','V-20359600','1234','Activo',0,0,0,0,0),
(483,'RAMON','RONDON','AAABBB','Gancho','AZUL','4248113916','V-15874831','1234','Activo',0,0,0,0,0),
(484,'JUAN','BAPTISTA','AAABBB','Gancho','AZUL','4248297734','J-405097540','1234','Activo',0,0,0,0,0),
(485,'JOSE','ZAPATA','AAABBB','Gancho','AZUL','4148022753','V-5491343','1234','Activo',0,0,0,0,0),
(486,'JOSE','CASTRO','AAABBB','Gancho','AZUL','4248424942','V-6353270','1234','Activo',0,0,0,0,0),
(487,'JAVIER','MARGUE','AAABBB','Gancho','AZUL','4148162617','J-405880797','1234','Activo',0,0,0,0,0),
(488,'DOMENICO','BARLAFANTE','AAABBB','Gancho','AZUL','4148107692','V-803354564','1234','Activo',0,0,0,0,0),
(489,'RONALD','PARAQUEIMO','AAABBB','Gancho','AZUL','4147895854','V-137660276','1234','Activo',0,0,0,0,0),
(490,'VICENTE','MUJICA','AAABBB','Gancho','AZUL','4248767298','V-122899264','1234','Activo',0,0,0,0,0),
(491,'SALVADOR','VEGAS','AAABBB','Gancho','AZUL','4163841063','V-34427654','1234','Activo',0,0,0,0,0),
(492,'PEDRO','MATA','AAABBB','Gancho','AZUL','4148156144','J-404237879','1234','Activo',0,0,0,0,0),
(493,'FRANCISCO','OTERO','AAABBB','Gancho','AZUL','4264738429','V-173447929','1234','Activo',0,0,0,0,0),
(494,'CARLOS','MARTINEZ','AAABBB','Gancho','AZUL','4160339355','V-82514283','1234','Activo',0,0,0,0,0),
(495,'OMAR JESUS','LOZADA','AAABBB','Gancho','AZUL','4248137811','V-5863658','1234','Activo',0,0,0,0,0),
(496,'FRANKLIN','MEDINA','AAABBB','Gancho','AZUL','4249261436','V-117655527','1234','Activo',0,0,0,0,0),
(497,'MIGUEL','MARQUEZ','AAABBB','Gancho','AZUL','4141995011','V-82632544','1234','Activo',0,0,0,0,0),
(498,'','','AAABBB','Gancho','AZUL','2869713573','J-315952505','1234','Activo',0,0,0,0,0),
(499,'ENGELBERTH','GUTIERREZ','AAABBB','Gancho','AZUL','04141284106','J-315969645','hotrod','Activo',0,0,0,0,0),
(500,'OSCAR','GUTIERREZ','AAABBB','Gancho','AZUL','04241150296','J-315969645','1234','Activo',0,0,0,0,0),
(501,'RAFAEL','CANACHE','AAABBB','Gancho','AZUL','4146408533','V-20610368','1234','Activo',0,0,0,0,0),
(502,'EDWARD','CHACON','AAABBB','Gancho','AZUL','4242452203','V-200974979','1234','Activo',0,0,0,0,0),
(503,'OWIN','LINARES','AAABBB','Gancho','AZUL','4146282933','V-13575135','1234','Activo',0,0,0,0,0),
(504,'ALFONSO','ROSENDO','AAABBB','Gancho','AZUL','4143556462','V-200152103','1234','Activo',0,0,0,0,0),
(505,'WILLIAM','RAMIREZ','AAABBB','Gancho','AZUL','4246505248','V-78190929','1234','Activo',0,0,0,0,0),
(506,'CESAR','DIAZ','AAABBB','Gancho','AZUL','4143018766','J-298903457','1234','Activo',0,0,0,0,0),
(507,'VLADIMIR','VILLALOBOS','AAABBB','Gancho','AZUL','4146025841','V-104083855','1234','Activo',0,0,0,0,0),
(508,'JOHN','CORTEZ','AAABBB','Gancho','AZUL','4241536448','V-159283271','1234','Activo',0,0,0,0,0),
(509,'GUEDEZ','JONAS','AAABBB','Gancho','AZUL','4245241802','V-195725582','1234','Activo',0,0,0,0,0),
(510,'ZENON','ROMERO','AAABBB','Gancho','AZUL','4145670846','V-101549034','1234','Activo',0,0,0,0,0),
(511,'JUNIOR','RODRIGUEZ','AAABBB','Gancho','AZUL','4145245646','V-122426471','1234','Activo',0,0,0,0,0),
(512,'JORGE','FARIAS','AAABBB','Gancho','AZUL','4249740320','V-235017160','1234','Activo',0,0,0,0,0),
(513,'YOVANI','SIERRA','AAABBB','Gancho','AZUL','4242048477','V-177420987','1234','Activo',0,0,0,0,0),
(514,'CARLOS','DELGADO','AAABBB','Gancho','AZUL','4125694521','V-161460857','1234','Activo',0,0,0,0,0),
(515,'JOSE','MUJICA','AAABBB','Gancho','AZUL','4120354282','V-6662595','1234','Activo',0,0,0,0,0),
(516,'FRANCISCO','ARAQUE','AAABBB','Gancho','AZUL','4247134560','V-17239815','29121984','Activo',0,0,0,0,0),
(517,'EDWIN','MORA','AAABBB','Gancho','AZUL','4247585577','J-407244361','1234','Activo',0,0,0,0,0),
(518,'RICHARD','FREIRES','AAABBB','Gancho','AZUL','4148589530','V-13156301','1234','Activo',0,0,0,0,0),
(519,'LEVIS','PEREZ','AAABBB','Gancho','AZUL','4163895347','V-10570828','1234','Activo',0,0,0,0,0),
(520,'MIGUEL','PAEZ','AAABBB','Gancho','AZUL','4160939798','V-19130208','1234','Activo',0,0,0,0,0),
(521,'MIRKO','SAMPAOLI','AAABBB','Gancho','AZUL','4244325716','V-21214415','1234','Activo',0,0,0,0,0),
(522,'MICHELLE','SAMPAOLI','AAABBB','Gancho','AZUL','4244416850','V-11351254','1234','Activo',0,0,0,0,0),
(523,'KENWIS','ESTRADA','AAABBB','Gancho','AZUL','4242668705','V-18822612','1234','Activo',0,0,0,0,0),
(527,'David Jesus','Guillen Rangel','','Gancho','Blanca','','V-15032334','','Inactivo',0,0,0,0,0),
(528,'EVEREST Yumare','Colmenares Orozco','A02A01A','Plataforma criolla','AZUL','04143360976','V-12684465','vale2903','Activo',0,0,0,0,0),
(529,'Oscar Ramón ','Gutierrez Torres','A00a25i','Plataforma hidráulic','Blanco ','04241150296','V-7920106','932*oscar','Activo',0,0,0,0,0),
(530,'PEDRO ANTONIO','VICENS GAMBOA','A00A06A','Plataforma criolla','blanco','04129548165','V-10666870','1234','Activo',0,0,0,0,0),
(531,'Engelberth Oscar ','Gutierrez ','A00a26i','Wheel Lift','Blanco','04129326332','V-19227678','fabian*932','Activo',0,0,0,0,0),
(532,'anibal aquiles','marcano lopez','349ACR','Gancho','Blanca','04249227716','V-11144314','DINGO2014','Inactivo',0,0,0,0,0),
(533,'Johan Jose','Guadarrama Colmenares','A03A16K','Plataforma criolla','Azul con negro','04245443203','V-17920780','081','Activo',0,0,0,0,0),
(534,'HECTOR E','BRAVO ROMERO','04LYAA','Plataforma criolla','BLACO','04146832507','V-13902715','4545','Activo',0,0,0,0,0),
(536,'yhitzander segundo','sequera yanez','A67DE8K','Gancho','Blanca','04168533664','V-13990540','1234','Inactivo',0,0,0,0,0),
(537,'Hemberth  Antonio',' Medina  Coraspe','A17CY3G','Plataforma criolla','blanco','04264700237','V-14498810','14498810','Activo',0,0,0,0,0),
(538,'eduwin javier','mora montes','A03A55V','Gancho','Blanca','04247585577','V-15517350','sincha71','Inactivo',0,0,0,0,0),
(539,'LUIS ALBERTO','RAMIREZ DURAN','A33AL5N','Plataforma criolla','BLANCO','04148567633','V-11447003','1234','Activo',0,0,0,0,0),
(540,'Edicson  enrique','Flores Rizalez','04r-nab','Plataforma hidráulic','azul marino','04144149576','V-7144984','jolines1','Activo',0,0,0,0,0),
(541,'Ernesto  giovanni','González  huerta','A00A86V','Gancho con Wheel Lif','rojo y blanco','04168082082','V-11561395','1234','Activo',0,0,0,0,0),
(542,'Salvador ','Vegas ','A23A06F','Plataforma criolla','BLANCO','0416 384106','V-3442765','','Activo',0,0,0,0,0),
(543,'alberto Jose ','Lopez  Marquez ','A50ae8t','Plataforma criolla','Azul','04245776684','V-19590560','alberto ','Activo',0,0,0,0,0),
(544,'Felix Jesus','Fariña Alvarado','a01a44o','Plataforma criolla','blanco','04149350297','V-16692533','16692zz','Activo',0,0,0,0,0),
(545,'LUIS ANGEL','BASABE BELLAIS','A76AE9A','Plataforma criolla','BLANCO','04143799632','V-15942602','1234','Activo',0,0,0,0,0),
(546,'Reykar Oswaldo','Rodriguez Sanchez','A50CO7G','Plataforma criolla','AZUL','04124053188','V-16521460','dutty14','Activo',0,0,0,0,0),
(547,'even eduardo','alvarez castillo','a00a15l','Plataforma criolla','blanco','04247100206','V-15621253','1234','Activo',0,0,0,0,0),
(548,'Jose Orlando','Avendaño  Rosales','A01A45S','Gancho normal','Rojo','04147122580','V-10155966','10155966','Activo',0,0,0,0,0),
(549,'Jesus Argenis ','Contreras Avendaño','A01A46S','Plataforma criolla','Rojo','04247131569','V-23542301','23542301','Activo',0,0,0,0,0),
(550,'frank ricardo','pernia irazabal','02D00G','Plataforma criolla','Azul','04143159366','V-14892319','1234','Activo',0,0,0,0,0),
(551,'Ricardo Jose','Mejia Castro','A02A34M','Plataforma criolla','Blanco','04125431242','V-6504487','','Activo',0,0,0,0,0),
(552,'Jose Miguel','Naveda Granje','A08CA2A','Plataforma criolla','BLANCO','04128916905','V-27630840','JM2211','Activo',0,0,0,0,0),
(553,'OSCAR DONATO','MELIDEO AGUILAR','A19AF2P','Gancho con Wheel Lif','BLANCO','04245090747','V-16795675','1234','Activo',0,0,0,0,0),
(554,'RAFAEL ANTONIO','ANDRADE DIAZ','A74AS4E','Plataforma criolla','Verde ','04167792443','V-17857690','17857690','Activo',0,0,0,0,0),
(555,'mervin alexader','bracho moreno','A00A42F','Plataforma criolla','blanco','04246536573','V-14279171','zulia79','Activo',0,0,0,0,0),
(556,'UNALDO JOSE','MAETINEZ ZAMBRANO','A00A46F','Plataforma criolla','Blanca','04246311561','V-13301934','unaldo35','Activo',0,0,0,0,0),
(557,'Enderson  Dario','Arrieche Gil','A00A67A','Plataforma criolla','Blanco y rojo','04245533906','V-19106412','1234','Activo',0,0,0,0,0),
(558,'Luis  fernando','merino briceño','A00A02U','Plataforma criolla','azul','04145095502','V-11879806','1234','Activo',0,0,0,0,0),
(559,'CESAR  ','DIAZ ','A00A38G','Plataforma criolla','BLANCO','04143018766','V-10182692','Dimay1','Activo',0,0,0,0,0),
(560,'englis rafael','mata rojas','A02A20M','Plataforma criolla','blanco','04143368726','V-13123680','8379','Activo',0,0,0,0,0),
(561,'Antonio Jose','Parica ','82TOAE','Plataforma criolla','BLANCO','04142153573','V-14431404','Dimay3','Activo',0,0,0,0,0),
(562,'WILMER ORLANDO','HUNG LOMBANO','A00A16E','Plataforma hidráulic','blanco','04142325229','V-15377463','wilmer','Activo',0,0,0,0,0),
(563,'NELSON JESUS','MARTINEZ MARQUEZ','A26AR2U','Plataforma criolla','BLANCO','04265178488','V-16560897','8080NELS','Activo',0,0,0,0,0),
(564,'Yorman Eduardo','Rivas Guedez','A83AB20','Plataforma criolla','Blanco','04141777722','V-17129041','rivas...','Activo',0,0,0,0,0),
(565,'Angel  Javier','Herrera Sierra','A24DD0G','Plataforma criolla','Blanco','04265199753','V-12834908','128349081102','Activo',0,0,0,0,0),
(566,'ANDRES ','BERTELLONI RODRIGUEZ','04BSAL','Plataforma criolla','BLANCA','02124188304','V-17514290','1234','Activo',0,0,0,0,0),
(567,'JONATHAN JOSE','RAMIREZ VILLARREAL','A87AD1V','Plataforma hidráulic','BLANCO','04262060165','V-16444030','1644jon','Activo',0,0,0,0,0),
(568,'FRANKLIN ALEXANDER','RIVERO UZCATEGUI','A00A99E','Plataforma hidráulic','BLANCO','04160891244','V-21367502','2136frank','Activo',0,0,0,0,0),
(569,'ERASMO ','GUTIERREZ PEREIRA','A88BG0D','Plataforma hidráulic','BLANCO','04266706279','V-11952041','1195era','Activo',0,0,0,0,0),
(570,'Carlos','Germani','AAABBB','Gancho','Blanco','4145128625','V-116674501','1234','Activo',0,0,0,0,0),
(571,'Juan','Panto','AAABBB','Gancho','Blanco','4142131304','J-6504830','1234','Activo',0,0,0,0,0),
(572,'Johan','Pirela','AAABBB','Gancho','Blanco','4140372108','J-403473641','1234','Activo',0,0,0,0,0),
(573,'Giovanni','Saavedra','AAABBB','Gancho','Blanco','4265735821','V-114634146','1234','Activo',0,0,0,0,0),
(574,'Orlando','Torre','AAABBB','Gancho','Blanco','4145071175','V-177554002','mikai53.','Activo',0,0,0,0,0),
(575,'Harrison','Justo','AAABBB','Gancho','Blanco','4243134084','V-177176326','1234','Activo',0,0,0,0,0),
(576,'Luis','Salazar','AAABBB','Gancho','Blanco','4165820430','J-400489679','1234','Activo',0,0,0,0,0),
(577,'Miguel','Guillen','AAABBB','Gancho','Blanco','4247266571','J-313976261','1234','Activo',0,0,0,0,0),
(578,'Moises','Donaires','AAABBB','Gancho','Blanco','4241850188','J-401282814','1234','Activo',0,0,0,0,0),
(585,'OSCAR  DARIO','JIMENEZ LUJANO','A05AW5G','Plataforma criolla','ROJO','04145464267','V-22314537','22314537','Activo',0,0,0,0,0),
(586,'CARLOS','ECHEVERRIA','AAABBB','Plataforma criolla','BLANCO','','V-20704086','1234','Activo',0,0,0,0,0),
(589,'Oscar ','Perez ','A00A44I','Plataforma criolla','BLANCO','04141263619','V-11584093','Guaro','Activo',0,0,0,0,0),
(591,'MIGUEL','HERRERA','AAABBB','Plataforma criolla','Blanco','4127230418','V-17960866','1234','Activo',0,0,0,0,0),
(592,'MARCELO','ARENALES','AAABBB','Plataforma criolla','Blanco','4147215222','V-126309755','3563449','Activo',0,0,0,0,0),
(593,'SAUL','SEPULVEDA','AAABBB','Plataforma criolla','Blanco','4166156628','V-14046570','1234','Activo',0,0,0,0,0),
(594,'DANIEL','SANDIS','AAABBB','Plataforma criolla','Blanco','4245552768','V-11077085','1234','Activo',0,0,0,0,0),
(595,'JEAN','AVILA','AAABBB','Plataforma criolla','Blanco','4129961201','V-16923468','1234','Activo',0,0,0,0,0),
(596,'JHIN','GARCIA','AAABBB','Plataforma criolla','Blanco','4247073024','V-112633656','1234','Activo',0,0,0,0,0),
(597,'GERMAN','GUZMAN','AAABBB','Plataforma criolla','Blanco','4140898568','V-11163866','1234','Activo',0,0,0,0,0),
(598,'MARCO','CONTRERAS','AAABBB','Plataforma criolla','Blanco','4167960613','V-241511304','1234','Activo',0,0,0,0,0),
(599,'MANUEL','ZOLLO','AAABBB','Plataforma criolla','Blanco','4145418660','V-17276293','1234','Activo',0,0,0,0,0),
(600,'ANDRES','CAMERON','AAABBB','Plataforma criolla','Blanco','4149665423','V-208597996','andrea14','Activo',0,0,0,0,0),
(601,'DAVID','ANTICA','AAABBB','Plataforma criolla','Blanco','4145346581','V-178602833','1234','Activo',0,0,0,0,0),
(606,'ALEJANDRO JOSE','CONTRERAS ','A00A07S','Plataforma hidráulic','BLANCO','04247461011','V-16983295','1234','Activo',0,0,0,0,0),
(607,'FREDDY ','UZCATEGUI ','A03A13S','Gancho con Wheel Lif','BLANCO','04241613823','V-11200507','3563449','Activo',0,0,0,0,0),
(608,'Lewis Jose','Hernandez Patiño','A06BV2M','Plataforma criolla','AZUL','04265863830','V-9737729','','Activo',0,0,0,0,0),
(609,'ronald rafael','machado hernandez','A79DJ3J','Plataforma criolla','azul','04141731124','V-17060670','17060670','Activo',0,0,0,0,0),
(610,'Andres Antonio','Cameron Gutiérrez','A14bn5s','Plataforma criolla','Beige','04149665423','V-20859799','andrea14','Activo',0,0,0,0,0),
(613,'Lino Antonio','Cameron Gutiérrez','A01A12L','Gancho para carga pe','Amarillo','04146847603','V-26387942','andrea14','Activo',0,0,0,0,0),
(614,'MARCOS ','DE ANDRADE ','230386','Gancho','Blanca','04268141850','V-18020590','230386','Inactivo',0,0,0,0,0),
(615,'Jhin  Carlyn ','Garcia  Contreras ','A62BI2G','Gancho con Wheel Lif','ROJO Y NEGRO','04247073024','V-12633656','1234','Activo',0,0,0,0,0),
(617,'Jose Alejandro','Garcia Rodriguez','88TTCC55','Plataforma hidráulic','Verde','04248889999','V-25123456','123456','Activo',0,0,0,0,0),
(618,'MOISES','MALVACIA','AAABBB','Plataforma criolla','BLANCO','4145290629','V-12019003','1234','Activo',0,0,0,0,0),
(619,'ALEJANDRO','MOLERO','AAABBB','Plataforma criolla','BLANCO','4146110173','V-18396187','1234','Activo',0,0,0,0,0),
(620,'JESUS','CARAVALLO','AAABBB','Plataforma criolla','BLANCO','4148098379','J-400807638','1234','Activo',0,0,0,0,0),
(621,'MARCELINO','GUDIÑO','AAABBB','Plataforma criolla','BLANCO','4146386295','V-15589528','1234','Activo',0,0,0,0,0),
(623,'FRANKLIN','ROSARIO','AAABBB','Plataforma criolla','BLANCO','4145724596','V-13591974','1234','Activo',0,0,0,0,0),
(624,'ALBERT','GUERREO','AAABBB','Plataforma criolla','BLANCO','4120337997','J-403845042','1234','Activo',0,0,0,0,0),
(625,'AUGUSTO','GONZALES','AAABBB','Plataforma criolla','BLANCO','4148833394','J-405934620','1234','Activo',0,0,0,0,0),
(626,'JONATHAN','CONTRERAS','AAABBB','Plataforma criolla','BLANCO','4128139321','J-299300616','1234','Activo',0,0,0,0,0),
(627,'ROICIRYS','HERNADEZ','AAABBB','Plataforma criolla','BLANCO','4242071516','J-405317809','1234','Activo',0,0,0,0,0);

/*Table structure for table `Grueros_old` */

DROP TABLE IF EXISTS `Grueros_old`;

CREATE TABLE `Grueros_old` (
  `idGrua` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Placa` varchar(15) DEFAULT 'AAABBB',
  `Modelo` varchar(20) DEFAULT 'Gancho',
  `Color` varchar(25) DEFAULT 'Blanca',
  `Celular` varchar(15) DEFAULT '04140000000',
  `Cedula` varchar(20) DEFAULT NULL,
  `Clave` varchar(20) DEFAULT '1234',
  `Condicion` varchar(10) DEFAULT 'Activo',
  `NumServicios` int(11) DEFAULT '0',
  `TotalTrato` int(11) DEFAULT '0',
  `TotalPresencia` int(11) DEFAULT '0',
  `TotalVehiculo` int(11) DEFAULT '0',
  `Rating` int(11) DEFAULT '0',
  PRIMARY KEY (`idGrua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Grueros_old` */

insert  into `Grueros_old`(`idGrua`,`Nombre`,`Apellido`,`Placa`,`Modelo`,`Color`,`Celular`,`Cedula`,`Clave`,`Condicion`,`NumServicios`,`TotalTrato`,`TotalPresencia`,`TotalVehiculo`,`Rating`) values 
(0,'Gleem Miralles','Miralles','BA3B3Q','Gancho','Negra','04122110050','V-15178849','1234','Activo',0,0,0,0,0),
(1,'Armando Rojas','Rojas','ALX900','Plataforma','Azul','04122110050','V-15178849','1234','Activo',0,0,0,0,0),
(2,'Carlos Echeverría','Echeverría','AF6B7N4','Plataforma','Blanca','04249631308','V-123456','1234','Activo',0,0,0,0,0),
(3,'Everest Comelnares','Comelnares','AAA000','Plataforma','Blanca','04148572157','V-111222','1234','Activo',0,0,0,0,0),
(4,'Alejandro Echeverría','Echeverría','AN4F1X1','Gancho','Roja','04148572157','V-1234567','1234','Activo',0,0,0,0,0),
(5,'Everest Colmenares','Colmenares','AAA000','Gancho','Blanca','04143360976','V-12684465','1234','Activo',0,0,0,0,0),
(6,'Juan Panto','Panto','AAA000','Gancho','Blanca','04164016045','V-6504830','1234','Activo',0,0,0,0,0),
(7,'Englis Mata','Mata','AAA000','Gancho','Blanca','04143368726','V-13123680','1234','Activo',0,0,0,0,0),
(8,'Deiby Escalona','Escalona','AAA000','Gancho','Blanca','04241548145','V-17119917','1234','Activo',0,0,0,0,0),
(9,'Javier Salazar','Salazar','AAA000','Gancho','Blanca','04126052481','V-16820448','1234','Activo',0,0,0,0,0),
(10,'Luis  Da Silva',NULL,'AAA000','Gancho','Blanca','04149286320','V-16924395','1234','Activo',0,0,0,0,0),
(11,'Manuel Tovar',NULL,'AAA000','Gancho','Blanca','04143911747','V-19684236','1234','Activo',0,0,0,0,0),
(12,'Ivan Fernandez',NULL,'AAA000','Gancho','Blanca','04143178804','V-13894407','1234','Activo',0,0,0,0,0),
(13,'Luis Olivares',NULL,'AAA000','Gancho','Blanca','04143250418','V-14154956','1234','Activo',0,0,0,0,0),
(14,'Cesar Rodriguez',NULL,'AAA000','Gancho','Blanca','04143080366','V-6930123','1234','Activo',0,0,0,0,0),
(15,'Marcos Cuellos',NULL,'AAA000','Gancho','Blanca','04143047630','V-14728320','1234','Activo',0,0,0,0,0),
(16,'Jonathan Hidalgo',NULL,'AAA000','Gancho','Blanca','04166841110','V-11312430','1234','Activo',0,0,0,0,0),
(17,'Felix Jose Alvarado',NULL,'AAA000','Gancho','Blanca','04143661089','V-6202196','1234','Activo',0,0,0,0,0),
(18,'Osmarlin Gutierrez',NULL,'AAA000','Gancho','Blanca','04148458047','V-9969245','1234','Activo',0,0,0,0,0),
(19,'David Vargas',NULL,'AAA000','Gancho','Blanca','04127258482','V-6108219','1234','Activo',0,0,0,0,0),
(20,'Ronald  Machado',NULL,'AAA000','Gancho','Blanca','04141731124','V-17060670','1234','Activo',0,0,0,0,0),
(21,'Jorge Rodrigues',NULL,'AAA000','Gancho','Blanca','04142649255','V-17023123','1234','Activo',0,0,0,0,0),
(22,'GUSTAVO RUVAS',NULL,'AAA000','Gancho','Blanca','04142343185','V-10694705','1234','Activo',0,0,0,0,0),
(23,'FERNANDO ZERPA',NULL,'AAA000','Gancho','Blanca','04168248524','V-10528846','1234','Activo',0,0,0,0,0),
(24,'ERNESTO GONZALEZ',NULL,'AAA000','Gancho','Blanca','04168082082','V-11561395','1234','Activo',0,0,0,0,0),
(25,'GUILLERMO RIVERA',NULL,'AAA000','Gancho','Blanca','04262164722','V-24367556','1234','Activo',0,0,0,0,0),
(26,'JAISON FONSECA',NULL,'AAA000','Gancho','Blanca','04141741430','V-11941803','1234','Activo',0,0,0,0,0),
(27,'RAUL SEGOVIA',NULL,'AAA000','Gancho','Blanca','04241293885','V-14438052','1234','Activo',0,0,0,0,0),
(28,'EDGARDO GOMEZ',NULL,'AAA000','Gancho','Blanca','04241675053','V-12111830','1234','Activo',0,0,0,0,0),
(29,'RUBEN GARCIA',NULL,'AAA000','Gancho','Blanca','04248712455','V-19933889','1234','Activo',0,0,0,0,0),
(30,'JEAN TORRES',NULL,'AAA000','Gancho','Blanca','04141375346','V-12783981','1234','Activo',0,0,0,0,0),
(31,'JESUS MONTILLA',NULL,'AAA000','Gancho','Blanca','04143151927','V-12455544','1234','Activo',0,0,0,0,0),
(32,'FERMIN MARTINEZ',NULL,'AAA000','Gancho','Blanca','04142254553','V-18711081','1234','Activo',0,0,0,0,0),
(33,'CESAR DIAZ',NULL,'AAA000','Gancho','Blanca','04143018766','V-10182692','1234','Activo',0,0,0,0,0),
(34,'MILBERMILBER LEON',NULL,'AAA000','Gancho','Blanca','04142817357','V-12783309','1234','Activo',0,0,0,0,0),
(35,'NEHOMAR FEBLES',NULL,'AAA000','Gancho','Blanca','04143035455','V-13308578','1234','Activo',0,0,0,0,0),
(36,'JOSE RAMON ARAGORT',NULL,'AAA000','Gancho','Blanca','04241977226','V-18555278','1234','Activo',0,0,0,0,0),
(37,'ALIRIO DIAZ',NULL,'AAA000','Gancho','Blanca','04141117772','V-10245870','1234','Activo',0,0,0,0,0),
(38,'JOSE CARLOS PRIETO',NULL,'AAA000','Gancho','Blanca','04241813269','V-21016218','1234','Activo',0,0,0,0,0),
(39,'CARLOS  PRIETO',NULL,'AAA000','Gancho','Blanca','04143197755','V-6210976','1234','Activo',0,0,0,0,0),
(40,'RAFAEL RANGEL',NULL,'AAA000','Gancho','Blanca','04142506222','V-10091221','1234','Activo',0,0,0,0,0),
(41,'IVAN PALACIOS',NULL,'AAA000','Gancho','Blanca','04143290314','V-6934184','1234','Activo',0,0,0,0,0),
(42,'WILLIAM MARTINEZ',NULL,'AAA000','Gancho','Blanca','04142581729','V-15589367','1234','Activo',0,0,0,0,0),
(43,'Vladimir Rojas',NULL,'AAABBB','Gancho','Blanca','04140000000','V-21310537','1234','Activo',0,0,0,0,0),
(44,'Rafael  Suárez',NULL,'AAABBB','Gancho','Blanca','04140000000','V-24400322','1234','Activo',0,0,0,0,0),
(45,'Maria  Bernal',NULL,'AAABBB','Gancho','Blanca','04140000000','V-17448692','1234','Activo',0,0,0,0,0),
(46,'Samuel  Gomez',NULL,'AAABBB','Gancho','Blanca','04140000000','V-21290588','1234','Activo',0,0,0,0,0),
(47,'Neydi  Duarte',NULL,'AAABBB','Gancho','Blanca','04140000000','V-20026745','1234','Activo',0,0,0,0,0),
(48,'Cristian  Martínez',NULL,'AAABBB','Gancho','Blanca','04140000000','V-20674445','1234','Activo',0,0,0,0,0),
(49,'Daniela Figueira',NULL,'AAABBB','Gancho','Blanca','04140000000','V-25258085','1234','Activo',0,0,0,0,0),
(50,'Miguel Rodríguez',NULL,'AAABBB','Gancho','Blanca','04140000000','V-23691142','1234','Activo',0,0,0,0,0),
(51,'Adolfo De Lima',NULL,'AAABBB','Gancho','Blanca','04140000000','V-21291287','1234','Activo',0,0,0,0,0),
(52,'Elias Martinez',NULL,'AAABBB','Gancho','Blanca','04140000000','V-21115492','1234','Activo',0,0,0,0,0),
(53,'Nisol Castillo',NULL,'AAABBB','Gancho','Blanca','04140000000','V-19379323','1234','Activo',0,0,0,0,0),
(54,'Marcos Arlindo','De Andrade Carrera','AC137SK','Gancho','Blanca','04268141850','V-18020594','1234','Activo',0,0,0,0,0);

/*Table structure for table `Logs` */

DROP TABLE IF EXISTS `Logs`;

CREATE TABLE `Logs` (
  `idLogs` int(11) NOT NULL AUTO_INCREMENT,
  `Log` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idLogs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Logs` */

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
  `DireccionEDO` varchar(30) DEFAULT NULL,
  `Vencimiento` datetime DEFAULT NULL,
  PRIMARY KEY (`idPoliza`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `Polizas` */

insert  into `Polizas`(`idPoliza`,`Placa`,`Cedula`,`Nombre`,`Apellido`,`Marca`,`Modelo`,`Tipo`,`Color`,`Año`,`Seguro`,`DireccionEDO`,`Vencimiento`) values 
(1,'AAA001','V-1234567','Apple','Tester','iOS','iPhone','Carro','Plata','2016','MAPFRE Seguros','Distrito Capital','2016-12-31 00:00:00'),
(2,'ABX90V','V-15178849','Gleem','Miralles','Chevrolet','Blazer','Camioneta','Vinotinto','2000','Seguros Banesco','Distrito Capital','2016-11-30 00:00:00'),
(3,'AAA000','J-123456','Chofer','pickup','Ford','PickUp','Pickup','Blanco','1990','Vitalicia',NULL,'2016-12-30 00:00:00'),
(4,'BBB000','J-654321','Chofer','Camion','Ford','350','Camion','Azul','1987','Previsora',NULL,'2015-12-30 00:00:00'),
(5,'AC814GM','V-20704089','Alejandro','Echeverría','Chevrolet','Aveo','Carro','Plata','2010','Seguros Banesco','Miranda','2017-04-30 00:00:00'),
(6,'AAABBB','J-123456','Empresa','Coca Cola','Ford','F - 350','Camion','Rojo','1990','Banesco',NULL,'2016-12-31 00:00:00'),
(7,'ABO27M','V-19499682','Carlos','Rodríguez','Toyota','Corolla','Carro','Plateado','2002','Mercantil',NULL,'2016-12-31 00:00:00'),
(8,'AAABBB','V-21759297','Fabiana','Arreaza','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(9,'AAABBB','V-22538439','Luis','Remiro','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(10,'AAABBB','V-16895413','Sofia','Acuña','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(11,'AAABBB','V-20364249','Rodolfo ','Scannone','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(12,'AAABBB','V-18899284','Pedro','Rojas','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(13,'AAABBB','V-20546524','Oriana','Correa','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(14,'AAABBB','V-19883911','Fernando','Vargas','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(15,'AAABBB','V-21442332','Daniella','Ramos','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(16,'AAABBB','V-16632171','Mildred ','Gudiño','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(17,'AAABBB','V-20634627','Victor','Alvino','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(18,'AAABBB','V-19761401','Oskatherine','Lanza','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00'),
(19,'AAABBB','v-19379323','Nilson','Castillo','Honda','Civic','Carro','Negro','2016','Banesco',NULL,'2016-12-31 00:00:00');

/*Table structure for table `Servicios` */

DROP TABLE IF EXISTS `Servicios`;

CREATE TABLE `Servicios` (
  `idSolicitud` int(11) NOT NULL,
  `idGrua` varchar(10) DEFAULT NULL,
  `idPoliza` varchar(10) DEFAULT NULL,
  `TimeInicio` datetime DEFAULT NULL,
  `TimeFin` datetime DEFAULT NULL,
  `EstatusCliente` varchar(20) DEFAULT 'Activo',
  `EstatusGrua` varchar(20) DEFAULT 'Activo',
  `Motivo` varchar(500) DEFAULT NULL,
  `TratoCordial` int(11) DEFAULT '0',
  `Presencia` int(11) DEFAULT '0',
  `TratoVehiculo` int(11) DEFAULT '0',
  `Puntual` varchar(5) DEFAULT '0',
  `Observacion` varchar(200) DEFAULT 'Ninguna',
  PRIMARY KEY (`idSolicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Servicios` */

insert  into `Servicios`(`idSolicitud`,`idGrua`,`idPoliza`,`TimeInicio`,`TimeFin`,`EstatusCliente`,`EstatusGrua`,`Motivo`,`TratoCordial`,`Presencia`,`TratoVehiculo`,`Puntual`,`Observacion`) values 
(3,'586','5','2016-06-14 09:19:37','2016-06-14 09:21:56','Completado','Completado',NULL,5,5,5,'Si',''),
(4,'588','5','2016-06-16 11:19:41','2016-06-16 11:20:49','Completado','Completado',NULL,5,5,5,'Si',''),
(9,'588','5','2016-06-23 11:51:04','2016-06-23 11:54:30','Activo','Abandonado','GRUERO: Problemas con la grúa',0,0,0,'0','Ninguna'),
(11,'586','5','2016-06-26 15:06:18','2016-06-26 15:06:59','Activo','Abandonado','GRUERO: Problemas con la grúa',0,0,0,'0','Ninguna'),
(13,'586','5','2016-06-26 15:10:49','2016-06-26 15:12:19','Cancelado','Abandonado','CLIENTE: canceló en Abandonado',0,0,0,'0','Ninguna'),
(28,'586','5','2016-06-26 15:36:44','2016-06-26 15:37:29','Cancelado','Abandonado','CLIENTE: canceló en Abandonado',0,0,0,'0','Ninguna'),
(35,'586','5','2016-06-26 15:47:25','2016-06-26 15:48:08','Cancelado','Activo','CLIENTE: canceló en Activo',0,0,0,'0','Ninguna'),
(38,'586','5','2016-06-26 15:53:48','2016-06-26 15:56:15','Cancelado','Abandonado','CLIENTE: canceló en Abandonado',0,0,0,'0','Ninguna'),
(45,'586','5','2016-06-26 16:05:22','2016-06-26 16:05:37','Cancelado','Activo','CLIENTE: canceló en Activo',0,0,0,'0','Ninguna'),
(52,'586','5','2016-06-26 16:17:09','2016-06-26 16:17:33','Cancelado','Activo','CLIENTE: canceló en Activo',0,0,0,'0','Ninguna'),
(54,'586','5','2016-06-26 16:21:37','2016-06-26 16:23:58','Completado','Completado',NULL,5,5,5,'Si',''),
(57,'586','5','2016-06-26 16:55:11','2016-06-26 16:55:27','Cancelado','Activo','CLIENTE: canceló en Activo',0,0,0,'0','Ninguna'),
(61,'586','5','2016-06-26 17:05:47','2016-06-26 17:16:25','Cancelado','Abandonado','CLIENTE: canceló en Abandonado',0,0,0,'0','Ninguna'),
(63,'586','5','2016-06-26 17:20:57','2016-06-26 17:31:48','Cancelado','Activo','CLIENTE: canceló en Activo',0,0,0,'0','Ninguna'),
(71,'586','5','2016-06-27 16:54:19','2016-06-27 16:54:34','Cancelado','Activo','CLIENTE: canceló en Activo',0,0,0,'0','Ninguna'),
(72,'586','5','2016-06-27 16:55:20','2016-06-27 16:58:08','Completado','Completado',NULL,5,5,5,'Si','Excelente'),
(73,'586','5','2016-06-27 17:04:51','2016-06-27 17:09:50','Completado','Completado',NULL,5,5,5,'Si','Excelente servicio'),
(74,'586','5','2016-06-27 17:11:37','2016-06-27 17:17:56','Completado','Completado',NULL,5,5,5,'Si','Excelente servicio'),
(78,'10','5','2016-06-27 17:23:18','2016-06-27 17:24:15','Cancelado','Activo','CLIENTE: canceló en Activo',0,0,0,'0','Ninguna'),
(79,'10','5','2016-06-27 17:24:56','2016-06-27 18:12:59','Completado','Completado',NULL,5,5,5,'Si','Excelente servicio'),
(80,'616','5','2016-06-27 18:16:25','2016-06-27 18:17:19','Completado','Completado',NULL,5,5,5,'Si','Muy buen servicio'),
(81,'617','5','2016-06-28 11:49:11','2016-06-28 11:50:25','Completado','Completado',NULL,5,5,5,'Si','Muy buen servicio');

/*Table structure for table `Servicios_copy` */

DROP TABLE IF EXISTS `Servicios_copy`;

CREATE TABLE `Servicios_copy` (
  `idSolicitud` int(11) NOT NULL,
  `idGrua` varchar(10) DEFAULT NULL,
  `idPoliza` varchar(10) DEFAULT NULL,
  `TimeInicio` datetime DEFAULT NULL,
  `TimeFin` datetime DEFAULT NULL,
  `EstatusCliente` varchar(20) DEFAULT 'Activo',
  `EstatusGrua` varchar(20) DEFAULT 'Activo',
  `Motivo` varchar(500) DEFAULT NULL,
  `TratoCordial` int(11) DEFAULT '0',
  `Presencia` int(11) DEFAULT '0',
  `TratoVehiculo` int(11) DEFAULT '0',
  `Puntual` varchar(5) DEFAULT '0',
  `Observacion` varchar(200) DEFAULT 'Ninguna',
  PRIMARY KEY (`idSolicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Servicios_copy` */

/*Table structure for table `Solicitudes` */

DROP TABLE IF EXISTS `Solicitudes`;

CREATE TABLE `Solicitudes` (
  `idSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `idPoliza` int(11) DEFAULT NULL,
  `latOrigen` varchar(15) DEFAULT NULL,
  `lngOrigen` varchar(15) DEFAULT NULL,
  `latDestino` varchar(15) DEFAULT NULL,
  `lngDestino` varchar(15) DEFAULT NULL,
  `EstadoOrigen` varchar(30) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Distancia` int(6) DEFAULT '0',
  `Monto` varchar(10) DEFAULT '0',
  `CellContacto` varchar(20) DEFAULT NULL,
  `InfoAdicional` varchar(200) DEFAULT NULL,
  `QueOcurre` varchar(25) DEFAULT NULL,
  `Neumaticos` varchar(4) DEFAULT NULL,
  `Situacion` varchar(45) DEFAULT NULL,
  `TimeOpen` datetime DEFAULT NULL,
  `Estatus` varchar(20) DEFAULT 'Localizando',
  `NumGruas` int(11) DEFAULT '0',
  PRIMARY KEY (`idSolicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

/*Data for the table `Solicitudes` */

insert  into `Solicitudes`(`idSolicitud`,`idPoliza`,`latOrigen`,`lngOrigen`,`latDestino`,`lngDestino`,`EstadoOrigen`,`Direccion`,`Distancia`,`Monto`,`CellContacto`,`InfoAdicional`,`QueOcurre`,`Neumaticos`,`Situacion`,`TimeOpen`,`Estatus`,`NumGruas`) values 
(1,5,'10.494600923256','-66.83236341534','10.489828042494','-66.86262862858','Miranda','Distrito capital, Ccs, Las mercedes',4,'10200','04148572157','Apurat','Neumático espichado','1000','Calle plana','2016-06-12 16:40:34','Cancelado',1),
(2,5,'10.494407247207','-66.83083914974','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',6,'11700','04249631308','Cancha','Neumático espichado','0101','Atascado en barro o arena','2016-06-14 09:18:27','Cancelado',1),
(3,5,'10.494407247207','-66.83083914974','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',6,'11700','04249631308','Cancha','Neumático espichado','0101','Atascado en barro o arena','2016-06-14 09:19:20','Asignado',2),
(4,5,'10.493530089708','-66.83131349652','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',6,'11700','04249631308','Cancha','Neumático espichado','0101','Atascado en barro o arena','2016-06-16 11:19:35','Asignado',2),
(5,5,'10.493802512036','-66.83191991886','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',6,'10500','04249631308','Cancha','Neumático espichado','0100','Atascado en barro o arena','2016-06-16 12:51:58','Cancelado',2),
(6,5,'10.412270884504','-66.88279496447','10.475649152645','-66.86155574498','Miranda','Distrito capital, Ccs, Las mercedes',10,'11100','04148572157','','Neumático espichado','0100','Calle plana','2016-06-17 09:16:16','Cancelado',5),
(7,5,'8.3011851066694','-62.73219362955','10.4567051','-66.8165411','Bolívar','Distrito capital, Ccs, Cafetal',661,'105150','04249631308','Cancha','Falla de encendido','0000','Calle inclinada','2016-06-19 16:46:27','Cancelado',1),
(8,5,'10.453339508256','-66.87524879809','10.476643513388','-66.82210246781','Dto. Capital','Distrito capital, Ccs, La california',8,'10800','04148572157','\n','Neumático espichado','1000','Calle plana','2016-06-20 18:20:30','Cancelado',1),
(9,5,'10.409266089549','-66.87993975351','10.467102298797','-66.82232375239','Miranda','Amazonas, Ccs, Las mercedes',12,'11400','04148572157','','Neumático espichado','0100','Calle plana','2016-06-23 11:49:58','Asignado',6),
(10,5,'10.480162977019','-66.85419051130','10.452510815179','-66.88212258302','Dto. Capital','Distrito capital, Ccs, Prados del este',6,'11700','04249631308','Al lado del mcdonald\n','Neumático espichado','0101','Calle plana','2016-06-25 17:55:20','Desierto',0),
(11,5,'10.449148388068','-66.87228862194','10.467568150891','-66.83551405507','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04249631308','Sentido hacia el CC Plaza Las Americas\n','Neumático espichado','1000','Calle inclinada','2016-06-26 15:05:05','Asignado',1),
(12,5,'10.449148388068','-66.87228862194','10.467568150891','-66.83551405507','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04249631308','Sentido hacia el CC Plaza Las Americas\n','Neumático espichado','1000','Calle inclinada','2016-06-26 15:07:42','Cancelado',1),
(13,5,'10.449148388068','-66.87228862194','10.467568150891','-66.83551405507','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04249631308','Cerca del CC Terras Plaza\n','Neumático espichado','1000','Calle inclinada','2016-06-26 15:09:34','Asignado',1),
(14,5,'10.449148388068','-66.87228862194','10.467568150891','-66.83551405507','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04249631308','Cerca del CC Terras Plaza\n','Neumático espichado','1000','Calle inclinada','2016-06-26 15:12:37','Cancelado',1),
(15,5,'10.449148388068','-66.87228862194','10.467568150891','-66.83551405507','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04249631308','Cerca del CC Terras Plaza\n','Neumático espichado','1000','Calle inclinada','2016-06-26 15:13:07','Cancelado',1),
(16,5,'10.449148388068','-66.87228862194','10.467568150891','-66.83551405507','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04249631308','Cerca del CC Terras Plaza\n','Neumático espichado','1000','Calle inclinada','2016-06-26 15:13:25','Cancelado',2),
(17,5,'10.449148388068','-66.87228862194','10.467568150891','-66.83551405507','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04249631308','Cerca del CC Terras Plaza\n','Neumático espichado','1000','Calle inclinada','2016-06-26 15:14:14','Cancelado',2),
(18,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:16:08','Cancelado',2),
(19,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:16:21','Cancelado',2),
(20,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:29:10','Cancelado',2),
(21,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:30:02','Cancelado',2),
(22,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:30:28','Cancelado',2),
(23,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:31:18','Cancelado',2),
(24,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:32:36','Cancelado',2),
(25,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:33:02','Cancelado',2),
(26,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:34:27','Cancelado',2),
(27,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:34:43','Cancelado',2),
(28,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:35:08','Asignado',2),
(29,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:37:33','Cancelado',2),
(30,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:37:50','Cancelado',2),
(31,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:40:07','Cancelado',2),
(32,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:40:45','Cancelado',2),
(33,5,'10.447708361748','-66.87173382549','10.464529653717','-66.83255289632','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 15:43:38','Cancelado',2),
(34,5,'10.447889108263','-66.87201565400','10.464234242682','-66.83169458944','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza\n','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 15:45:05','Cancelado',2),
(35,5,'10.447889108263','-66.87201565400','10.464234242682','-66.83169458944','Dto. Capital','Miranda, Ccs, Cafetal',6,'10500','04148572157','Estoy cerca del CC Terras Plaza\n','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 15:45:42','Asignado',2),
(36,5,'10.453955604756','-66.87123643594','10.469636','-66.8286476','Dto. Capital','Miranda, Ccs, Cafetal',6,'6900','04118572157','Estoy cerca del CC Terras Plaza','Falla de encendido','0000','Atascado en barro o arena','2016-06-26 15:49:33','Cancelado',2),
(37,5,'10.453955604756','-66.87123643594','10.469636','-66.8286476','Dto. Capital','Miranda, Ccs, Cafetal',6,'6900','04118572157','Estoy cerca del CC Terras Plaza','Falla de encendido','0000','Atascado en barro o arena','2016-06-26 15:49:56','Cancelado',2),
(38,5,'10.453955604756','-66.87123643594','10.469636','-66.8286476','Dto. Capital','Miranda, Ccs, Cafetal',6,'6900','04118572157','Estoy cerca del Centro Italo','Falla de encendido','0000','Atascado en barro o arena','2016-06-26 15:52:09','Asignado',2),
(39,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 15:57:31','Cancelado',1),
(40,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 15:58:10','Cancelado',1),
(41,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 15:58:50','Cancelado',1),
(42,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 15:59:02','Cancelado',1),
(43,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 16:03:00','Cancelado',1),
(44,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 16:03:48','Cancelado',1),
(45,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 16:05:15','Asignado',1),
(46,5,'10.45232810782','-66.86819753871','10.4567051','-66.8165411','Miranda','Distrito capital, Ccs, Cafetal',7,'7050','04118572157','Estoy cerca del Centro Italo Venezolano','Falla de encendido','0000','Calle inclinada','2016-06-26 16:05:50','Cancelado',1),
(47,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:09:10','Cancelado',1),
(48,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:10:20','Cancelado',1),
(49,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:10:45','Cancelado',1),
(50,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:11:49','Cancelado',1),
(51,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:14:41','Cancelado',2),
(52,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:15:28','Asignado',2),
(53,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:18:50','Cancelado',2),
(54,5,'10.452574296234','-66.86701762851','10.466808529389','-66.83289621908','Miranda','Miranda, Caracas, Cafetal',5,'10350','04148572157','Calle Carupano','Neumático espichado','1000','Atascado en barro o arena','2016-06-26 16:19:54','Asignado',2),
(55,5,'10.452616686747','-66.86782325790','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Calle Carupano','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 16:50:23','Cancelado',1),
(56,5,'10.452616686747','-66.86782325790','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Calle Carupano','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 16:50:39','Cancelado',1),
(57,5,'10.452616686747','-66.86782325790','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Calle Carupano','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 16:55:04','Asignado',1),
(58,5,'10.452616686747','-66.86782325790','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Calle Carupano','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 16:57:09','Cancelado',1),
(59,5,'10.452616686747','-66.86782325790','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Calle Carupano','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 16:59:35','Cancelado',1),
(60,5,'10.452616686747','-66.86782325790','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Calle Carupano','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 17:01:23','Cancelado',1),
(61,5,'10.452616686747','-66.86782325790','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Estoy cerca del Centro Italo Venezolano','Neumático espichado','0100','Atascado en barro o arena','2016-06-26 17:03:47','Asignado',1),
(62,5,'10.452666946498','-66.86761079719','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Estoy cerca del Centro Italo Venezolano','Neumático espichado','0001','Calle inclinada','2016-06-26 17:17:55','Cancelado',1),
(63,5,'10.452666946498','-66.86761079719','10.469636','-66.8286476','Miranda','Miranda, Caracas, Cafetal',6,'10500','04148572157','Estoy cerca del Centro Italo Venezolano','Neumático espichado','0001','Calle inclinada','2016-06-26 17:19:01','Asignado',1),
(64,5,'10.4656496','-66.8702151','10.4510337','-66.8886028','Distrito Capital','Distrito Capital, caracas, prados del este',3,'11250','04148572157','Cancha','Neumático espichado','0101','Calle plana','2016-06-26 17:48:36','Cancelado',1),
(65,5,'10.465522','-66.8702955','10.487122120527','-66.87549855980','Distrito Capital','Distrito Capital, caracas, bello monte',3,'6450','04148572157','','Otra falla','0000','Calle inclinada','2016-06-26 17:55:44','Cancelado',2),
(66,5,'10.466042013793','-66.86987286190','10.486911128057','-66.87558439049','Distrito Capital','Distrito Capital, caracas, bello monte',3,'11250','04148572157','Santa Fe al lado del cc Santa fe','Neumático espichado','1100','Calle plana','2016-06-26 18:09:06','Cancelado',2),
(67,5,'10.466117879337','-66.86904816631','10.486868929546','-66.87536981377','Distrito Capital','Distrito Capital, caracas, bello monte',3,'11850','04148572157','Estoy cerca del cc Santa fe','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-26 18:18:15','Cancelado',2),
(68,5,'10.465894289418','-66.86960959086','10.486826731029','-66.87532689842','Distrito Capital','Distrito Capital, caracas, bello monte',3,'11850','04148572157','Estoy cerca del cc Santa fe','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-26 18:26:14','Cancelado',2),
(69,5,'10.465869963106','-66.87032225143','10.486868929546','-66.87524106773','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04248572157','Estoy cerca del cc Santa fe','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 16:51:58','Cancelado',1),
(70,5,'10.465869963106','-66.87032225143','10.486868929546','-66.87524106773','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04248572157','Estoy cerca del cc Santa fe','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 16:53:47','Cancelado',1),
(71,5,'10.465869963106','-66.87032225143','10.486868929546','-66.87524106773','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04248572157','Estoy cerca del cc Santa fe','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 16:54:00','Asignado',1),
(72,5,'10.465869963106','-66.87032225143','10.486868929546','-66.87524106773','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04248572157','Estoy cerca del cc Santa fe','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 16:54:45','Asignado',1),
(73,5,'10.466007138473','-66.87024188409','10.487058822801','-66.87541272911','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 17:04:36','Asignado',1),
(74,5,'10.465719492246','-66.87033087576','10.48701662431','-66.87524106773','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 17:11:22','Asignado',1),
(75,5,'10.465754842027','-66.87035029353','10.48726981517','-66.87575605186','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 17:20:14','Cancelado',3),
(76,5,'10.465754842027','-66.87035029353','10.48726981517','-66.87575605186','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 17:20:50','Cancelado',1),
(77,5,'10.465754842027','-66.87035029353','10.48726981517','-66.87575605186','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 17:22:48','Cancelado',1),
(78,5,'10.465754842027','-66.87035029353','10.48726981517','-66.87575605186','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 17:23:03','Asignado',1),
(79,5,'10.465754842027','-66.87035029353','10.48726981517','-66.87575605186','Distrito Capital','Miranda, caracas, bello monte',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-27 17:24:41','Asignado',1),
(80,5,'10.480315384176','-66.84272778209','10.408345392695','-66.87777373376','Miranda','Miranda, caracas, usb',12,'12600','04148572157','Voy a la universidad Simón bolivar','Neumático espichado','1100','Calle inclinada','2016-06-27 18:16:05','Asignado',2),
(81,5,'10.479595593312','-66.84094835297','10.494500699804','-66.85462558686','Miranda','Miranda, caracas, chacao',3,'11850','04148572157','','Falla de encendido','0000','Estacionamiento techado o sótano','2016-06-28 11:49:03','Asignado',2);

/*Table structure for table `Solicitudes_copy` */

DROP TABLE IF EXISTS `Solicitudes_copy`;

CREATE TABLE `Solicitudes_copy` (
  `idSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `idPoliza` int(11) DEFAULT NULL,
  `latOrigen` varchar(15) DEFAULT NULL,
  `lngOrigen` varchar(15) DEFAULT NULL,
  `latDestino` varchar(15) DEFAULT NULL,
  `lngDestino` varchar(15) DEFAULT NULL,
  `EstadoOrigen` varchar(30) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Distancia` int(6) DEFAULT '0',
  `Monto` varchar(10) DEFAULT '0',
  `CellContacto` varchar(20) DEFAULT NULL,
  `InfoAdicional` varchar(200) DEFAULT NULL,
  `QueOcurre` varchar(25) DEFAULT NULL,
  `Neumaticos` varchar(4) DEFAULT NULL,
  `Situacion` varchar(45) DEFAULT NULL,
  `TimeOpen` datetime DEFAULT NULL,
  `Estatus` varchar(20) DEFAULT 'Localizando',
  `NumGruas` int(11) DEFAULT '0',
  PRIMARY KEY (`idSolicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Solicitudes_copy` */

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

/*Table structure for table `table1` */

DROP TABLE IF EXISTS `table1`;

CREATE TABLE `table1` (
  `id` int(11) DEFAULT NULL,
  `data1` text,
  `data2` text,
  `data3` text,
  `data4` text,
  `data5` text,
  `clave` varchar(300) DEFAULT NULL,
  `placa` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `table1` */

insert  into `table1`(`id`,`data1`,`data2`,`data3`,`data4`,`data5`,`clave`,`placa`) values 
(1,'4262090590','JESUS ','SILVA','D','V-165323080','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(2,'4241548145','DEIBY','ESCALONA','D','V-171199170','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(3,'4142343185','GUSTAVO','RIVAS','D','V-10694705','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(4,'4145190422','KERWIS','ALVAREZ','D','V-122431050','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(5,'4243105810','ANDRES','ALFONSO','D','V-166907540','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(6,'4247785063','YOHANY','CONTRERAS','D','V-168060668','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(7,'4141140242','ANTONIO','HERNANDEZ','D','V-10695288','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(8,'4142938134','PIETRO','GARGARO','D','J-405103302','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(9,'4143507107','DIONICIO','GARCIA','D','J-296419639','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(10,'4143799528','OSCAR','RIVERO','D','V-119480120','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(11,'4143290314','IVAN','PALACIOS','D','V-69341841','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(12,'4141296441','JHOANDER','PARRA','D','V-18109503','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(13,'4166027164','FREDY','SALAS','D','V-10710757','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(14,'4169222083','ANIBAL','MARTINEZ','D','V-46752674','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(15,'4242725395','JERSON ','HERRERA','D','V-23223154','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(16,'4245608280','RONALD','VELASQUEZ','D','V-20238088','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(17,'4245874653','JUAN CARLOS','MANZANILLA ','D','V-146005949','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(18,'4246250735','FRANCISCO','NAVAS','D','V-17309984','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(19,'4247229199','JOSSNEY','GONZALEZ','D','V-17987600','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(20,'4264536852','OCTAVIO','RODRIGUEZ','D','V-187855469','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(21,'4267422621','LUIS','QUINTANA','D','V-152714684','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(22,'4268279985','OSWALDO','MORENO','D','V-92340119','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(23,'4143360976','EVEREST','COLMENARES','D','V-126844650','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(24,'4143250418','LUIS','OLIVARES','D','J-403799652','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(25,'4142574463','ORDONEL','RODRIGUEZ','D','J-311767576','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(26,'4128918791','DANILO','LARA','D','V-107036454','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(27,'4140731293','FRANKLIN ','VASQUEZ','D','V-198256303','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(28,'4142089644','JACSON','ABREU','D','V-14606805','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(29,'4142178029','LUIS','GARCIA','D','V-18393583','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(30,'4142868201','MIGUEL','VILLARROEL','D','V-127494475','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(31,'4143035455','NEHOMAR','SEBLEC','D','V-13308578','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(32,'4143982234','TRINO','CISNERO','D','V-61184062','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(33,'4144207880','NESTOR','LAYA','D','V-162454540','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(34,'4145170480','WILSON','PEREZ','D','V-14749252','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(35,'4145262115','FERNANDO ','MENDOZA','D','J-311815368','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(36,'4145594508','ARVIN','PEREZ','D','V-18104490','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(37,'4147580197','HECTOR','DIAZ','D','V-109026235','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(38,'4149536360','JEAN CARLOS','GUTIERREZ','D','V-205393125','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(39,'4164955162','DOMINGO ','TINEO','D','V-138480344','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(40,'4241070255','JONATHAN','RODRIGUEZ','D','V-19508618','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(41,'4248181474','ADRIAN','ALBARRAN','D','V-15756766','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(42,'4262089910','ANGEL','GARCIA','D','J-309503707','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(43,'4264558223','RAFAEL ','TORREALBA','D','V-85887242','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(44,'4141096926','LISMARDO ','LOPEZ','D','V-14407739','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(45,'4142403423','DARWIN','BERAJANO ','D','V-12054544','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(46,'4142854767','RAFAEL ','SEIJAS','D','V-69657180','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(47,'4145606054','LUIS ','PITA','D','V-820551608','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(48,'4148303626','TAOUFIK','SUKKAR','D','V-23897335','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(49,'4245416699','MANUEL ','PIETROGRANDRE','D','V-221081303','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(50,'4121452095','JESUS','AREVALO','D','V-194103987','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(51,'4121742187','JOSE RAMON','PAREDES','D','J-316803457','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(52,'4122628543','RICHARD','PEÑARANDA','D','V-79555122','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(53,'4129656162','JUAN','MACHADO','D','V-251207255','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(54,'4141070683','IVAN','SOTO','D','J-404769420','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(55,'4141624929','EBERTO','RENDON','D','V-13790051','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(56,'4141967210','ROIDMAN','BLANCO','D','V-153732392','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(57,'4142926286','MIGUEL ','VIELMA','D','V-144445275','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(58,'4143911747','MANUEL ','TOVAR','D','V-19684236','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(59,'4144170128','NELSON','ALVAREZ','D','V-115264547','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(60,'4144292595','ALIRIO','RIVAS','D','J-297507922','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(61,'4144827650','JOSE','CARTAYA','D','V-13663979','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(62,'4146344930','LEONYD','VILLALOBOS','D','J-402086784','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(63,'4146570448','JOSE','YANEZ','D','V-11292369','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(64,'4147122580','JOSE','AVENDAÑO','D','V-10155966','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(65,'4148941206','ANTONIO ','AGUILERA','D','V-14510667','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(66,'4166367589','PAUL','OLMOS','D','V-162661708','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(67,'4146820979','CESAR LEONARDO ','MARTINEZ','D','V-114777958','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(68,'4249227716','ANIBAL','MARCANO','D','J-298854146','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(69,'4249018833','JUSTIN','FARIAS','D','V-136234532','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(70,'4249103563','RAFAEL ','CASTILLO','D','J-314978845','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(71,'4120956972','MOISES','FERRER ','D','J-407186272','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(72,'4265863830','LEWIS','HERNANDEZ','D','V-97377290','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(73,'4125211867','DANY','INFANTE','D','V-12708635','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(74,'4140568955','DOUGLAS','PIÑANGO','D','V-132285329','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(75,'4264700237','HEBERT','MEDINA','D','V-144988104','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(76,'4247535207','DANIEL ','COLMENARES','D','V-17466172','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(77,'4140366725','TONNY','PEREZ','D','V-108155783','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(78,'4164734196','YOSMER','ESTRADA','D','V-24882320','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(79,'4128901273','LUIS','DURAN','D','V-136018252','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(80,'4141616526','WILLIAM','HERNANDEZ','D','V-79960795','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(81,'4264522002','CARLOS','PARADA','D','J-405865202','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(82,'4245332917','JONNY ','GALLO','D','J-403136203','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(83,'4246192286','JAIRO','REYES','D','J-404329455','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(84,'4246815631','GERALDO','DELGADO','D','V-104470781','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(85,'4143461144','ERWIN','GIL','D','V-16493671','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(86,'4248544775','CARLOS','OTERO','D','V-20075521','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(87,'4248629399','LUIS','LOPEZ','D','V-14468514','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(88,'4148166125','JULIO','JIMENEZ','D','J-293919924','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(89,'4248486470','ARGENIS','GONZALEZ','D','J-308480061','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(90,'4148062396','GLETO','GALINDEZ','D','J-402614543','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(91,'4148158330','EUGENIO G','AMARO G','D','V-25773083','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(92,'4248918963','CARLOS','QUIJADA','D','V-17590127','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(93,'4164122191','CRISTOBAL','TERAN','D','V-55291920','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(94,'4144474578','JOHAN','PEREIRA','D','J-404469621','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(95,'4145432257','ANGEL','PALMA','D','V-17799215','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(96,'4241197399','GIOVANNI','NUÑEZ','D','J-404930043','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(97,'4243323343','FRANCISCO','NAVARRO','D','J-405314354','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(98,'4144916119','LUIS','LAROCHE','D','J-293809185','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(99,'4163461281','RODOLFO','HERNANDEZ','D','V-9411604','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(100,'4149350297','FELIX','FARIÑA','D','V-16692533','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(101,'4127542210','JUAN','BLANCO','D','V-13201864','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(102,'4143444071','FREDDY','ARTIGAS','D','V-102794504','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(103,'4141440182','JUAN ','ARMAS','D','V-163457209','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(104,'4145798902','EVENCIO','ARMAS','D','V-86895796','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(105,'4144551505','MIGUEL ','GARCIA','D','V-11495242','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(106,'4245696342','WILLIAM','SANTIAGO','D','V-143419017','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(107,'4149734116','JEAN CARLOS','SALAZAR','D','V-167915333','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(108,'4149997551','ANGELO','RAMIREZ','D','V-144346978','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(109,'4267787864','DANI','PRATO','D','V-15121831','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(110,'4245064104','EVANDRO','MOLINA','D','V-161269421','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(111,'4247722317','RAFAEL','FRIAS','D','V-177258683','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(112,'4245076293','WILMAR','CORREA','D','V-111862865','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(113,'4145667571','VICTOR','CHACON','D','V-151217229','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(114,'4145462758','MANUEL ','BLANCO','D','V-177672293','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(115,'4145728720','ROMULO','BASTIDAS','D','V-141717070','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(116,'4249495078','VICTOR','VARGAS','D','V-12644476','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(117,'4140989120','FRAN','MARCHAN','D','V-152777457','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(118,'4148533395','DOMINGO','DIMARCO','D','V-8892505','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(119,'4148767417','GABRIEL','CONDE','D','V-115198714','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(120,'4249167881','GABRIEL','CONDE','D','V-115198714','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(121,'4143405667','DOUGLAS','OSTOS','D','V-12474976','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(122,'4143593106','RAMON','ARANGUREN','D','V-9444935','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(123,'4144709892','ALEXANDER','VARGAS','D','V-21455994','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(124,'4244989362','JOSE','ZAMORA','D','V-13116158','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(125,'4124932655','JOSÉ','ZAMORA','D','V-135486066','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(126,'4244095163','ABRAHAM','ZAMORA','D','V-88411338','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(127,'4244989746','WILLIAM','VALDIVEZ','D','V-5384538','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(128,'4242988833','JAVIER','HERNANDEZ','D','V-143583313','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(129,'4244286984','DAVID ','URBINA','D','V-18130314','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(130,'4143498859','FERNANDO','SUAREZ','D','V-7102444','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(131,'4244003422','JORGE','SILVA','D','V-17448450','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(132,'4125011995','DANIEL','SILVA','D','V-144640566','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(133,'4140447799','DANNY','SEIJAS','D','V-162431010','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(134,'4145937629','TONY ','RODRIGUEZ','D','V-107978387','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(135,'4144203809','JESUS','RINCÓN','D','V-71141965','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(136,'4121439215','RAMON','PEREZ','D','J-297772952','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(137,'4145939304','NIMROOD','PEREZ','D','V-71378051','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(138,'4169424666','RUBEN','PARRA','D','J-402540450','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(139,'4246957387','ELVIS','MORALES','D','V-16243064','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(140,'4125121232','JOSE','MORALES','D','V-12393706','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(141,'4144130472','MAXIMILIANO ','MIRANDA','D','V-114893729','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(142,'4148829880','DERBIN','MEZA','D','J-293587077','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(143,'4140402516','LUIS','MATA','D','V-15596375','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(144,'4144274805','SANTOS','MARTINEZ','D','V-71291916','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(145,'4141431911','HECTOR','IRUMBA','D','V-139621898','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(146,'4141379874','ANDERSON','HERRERA','D','V-148697643','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(147,'4244412134','EFRAIN ','HERNANDEZ','D','J-298335262','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(148,'4128962877','LUIS','HERNANDEZ','D','V-120318779','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(149,'4244744610','ROBERTO','GUILLEN','D','V-18660260','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(150,'4244402701','CONRAD','GONZALEZ','D','V-129249842','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(151,'4128447915','JOSE','GARCIA','D','V-186861244','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(152,'4145842171','OSMAN','GARCIA','D','V-17892346','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(153,'4144149576','EDISON','FLORES','D','V-7144984','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(154,'4121359807','LUIS','FERNANDEZ','D','V-15915267','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(155,'4149428988','EMILIO','ESCALANTE','D','V-195247338','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(156,'4120422133','ALVIN','NAVEDA','D','J-405780100','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(157,'4124669217','JONATHAN','DIAZ','D','V-144178897','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(158,'4244263777','CARLOS ','CONTRERAS','D','V-245714048','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(159,'4244339130','JOSÉ','CONTRERAS','D','V23064907','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(160,'4144362722','FRANCISCO','OVIEDO','D','V-11347344','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(161,'4144191725','RAFAEL','CEBALLOS','D','V-12318253','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(162,'4244346222','CARLOS ','CARREYO','D','V-17903674','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(163,'4244954715','ALEXANDER','AVILA','D','J-404936157','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(164,'4141424244','JORGE','ARRAEZ','D','V-74357829','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(165,'4127772056','WIDERMIS','ARGUELLO','D','V-22003441','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(166,'4124075092','CARLOS','AREVALO','D','V-18627399','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(167,'4145973434','RICARDO ','AREAS','D','J-296883890','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(168,'4143420999','JIMMY','AGUILAR','D','V-119873092','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(169,'4244528532','LIEMBER','ACOSTA','D','J-298479442','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(170,'4127795599','RUBEN ','PURO','D','V-123826155','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(171,'4145918414','JOSE','ZAMORA','D','V-161546387','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(172,'4244684329','ARGENIS','SEIJAS','D','V-187467264','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(173,'4124080838','GREGORY','TARAZONA','D','V-18347244','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(174,'4244092699','OSCAR ','LOPEZ','D','J-297189866','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(175,'4247308006','JESUS','SUAREZ','D','V-195025408','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(176,'4245789286','XAVIER','HENRIQUEZ','D','J-403136203','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(177,'4145958570','JOSE','RIVERO','D','V-141122785','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(178,'4244554792','MELVIN','CAMPOS','D','V-9413227','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(179,'4124021470','EDUARDO','AVILA','D','V-16423934','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(180,'4145957718','HECTOR','ACOSTA','D','V-13441715','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(181,'4120897047','JESUS ','HERNANDEZ','D','V-157902292','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(182,'4142761757','MIGUEL ','ZOLLO','D','V-108195378','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(183,'4241101259','ANGEL','VIELMA','D','V-166816838','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(184,'4141375346','YAN','TORRES','D','V-127839811','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(185,'4141257398','RAFAEL','SOTO','D','V-141664278','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(186,'4265111415','EDGAR','SILVA','D','V-175886890','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(187,'4143080366','CESAR','RODRIGUEZ','D','J-305161941','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(188,'4263054553','CARLOS','RAMOS','D','V-179746855','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(189,'4149201105','DUOGLAS ','OSORIO','D','J-405114223','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(190,'4242301970','REISNEL','OLIVEROS','D','V-166836960','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(191,'4141630878','DANNY','IBARRA','D','V-144071880','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(192,'4241530799','YORGENIS OSWALDO','GONZALEZ','D','V-18357945','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(193,'4142561599','ANDERSON','GARCIA','D','V-200518540','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(194,'4143397611','WELBYS','GARCIA','D','V-136973858','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(195,'4143166297','GABRIEL ','CONDE','D','J-296606617','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(196,'4142854569','RAMÓN','BRICEÑO','D','J-315873974','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(197,'4148458047','OSMARLIN','GUTIERREZ','D','V-99692452','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(198,'4143328987','JUAN FRANCISCO ','RASSE','D','V-153430841','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(199,'4141735530','FHANCER ENRIQUE ','PEREZ','D','V-123755150','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(200,'4243398447','ABRAHAM','CABRERA','D','V-166828917','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(201,'4241152945','FERNANDO','BRICEÑO','D','V-13951495','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(202,'4143377129','JOSE','URBINA','D','V-6292454','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(203,'4169019199','MERVIN','PARRA','D','J-402492537','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(204,'4142570064','MARCOS ','NUÑEZ','D','J-295056079','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(205,'4143151927','JESUS ','MONTILLA','D','J-298133147','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(206,'4129210262','REINALDO ','MENDEZ','D','J-317385799','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(207,'4242107850','FILIBERTO','LOPEZ','D','V-10489616','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(208,'4265199753','ANGEL','HERRERA','D','V-128349088','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(209,'4123362522','MIGUEL','GUTIERREZ','D','V-178153281','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(210,'4244466326','JOSE','GUERRERO','D','V16744123','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(211,'4141283181','ANTONIO','GONZALEZ','D','V-136867390','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(212,'4141064693','DIEGO','GOMEZ','D','J-405706503','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(213,'4140149054','CRISTIAN ','FERNANDEZ','D','V-160048731','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(214,'4165387628','JOSE','FIGARELA','D','J-307878630','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(215,'4164286525','ANTONIO','FERNANDEZ','D','V-180384541','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(216,'4243119933','LUIS','ESTANGA','D','V-403031886','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(217,'4141739022','HARRISON','CUEVAS','D','V-12711500','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(218,'4142393481','LUPO','CALDERON','D','J-404040730','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(219,'4142649255','JORGE','RODRIGUEZ','D','V-17123023','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(220,'4242722363','MANUEL','RODRIGUEZ','D','V-6844399','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(221,'4146842942','EDGANDER ','ROMANO','D','V-127336357','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(222,'4146991087','RONALD','RODRIGUEZ','D','V-19323573','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(223,'4146969138','SEBASTIAN','HERNANDEZ','D','J-307905719','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(224,'4244740291','LUIS','GUANIPA','D','V-201448154','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(225,'4146844405','DENNIS','FERNANDEZ','D','V-60090110','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(226,'4123797464','JEAN','ESPINOZA','D','V-19672830','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(227,'4146832507','HECTOR','BRAVO','D','V-139027155','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(228,'4127435801','ORZON ','MENDEZ','D','V-179236180','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(229,'4267387688','ALEXNDER','FIRIT','D','J-299526568','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(230,'4126512472','GUSTAVO','SARMIENTO ','D','J-402536747','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(231,'4128916905','JOSE','NAVERA','D','J-405780100','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(232,'4127127923','FRANK','MANZINI','D','J-293940109','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(233,'4124053188','REYKAR','FERNANDEZ','D','J-406183946','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(234,'4128645088','MIGUEL','BRAVO','D','V-95199875','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(235,'4149895146','EDWIN','BAUTE','D','V-155459839','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(236,'4145520705','MIGUEL','PERALTA','D','V-125355419','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(237,'4245304180','JOSE','RODRIGUEZ','D','V-19432916','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(238,'4145228181','NAPOLEON','CARRASCO','D','V-74268699','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(239,'4247697810','ANTONY','PEREZ','D','V-189219969','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(240,'4245213740','ORLANDO','PEREZ','D','V-157765716','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(241,'4160581007','DANIEL','ORFELI','D','V-154484821','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(242,'4245090747','OSCAR DONATO','MELIDEO','D','V-167956757','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(243,'4245324693','ALDEMARO','CASAMAYOR','D','J-402470843','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(244,'4245267553','JOHAN','ABRAHAN','D','V-182618442','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(245,'4245251507','RUBEN','TORRES','D','V-164049333','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(246,'4120524017','ABDIEL','TORREALBA','D','V-85887242','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(247,'4165015045','JAIRO ','TORREALBA','D','V-11314948','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(248,'4145117224','JOSÉ','SUAREZ','D','V-165844579','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(249,'4145667110','MIGUEL ','SOTO','D','J-406074454','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(250,'4145584772','MANAURE','SILVA','D','V-19726925','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(251,'4168533664','YHITZANDER','SEQUERA','D','V-139905403','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(252,'4245991713','PANFILO','SANABRIA','D','V-19901068','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(253,'4245578547','JONATHAN','ROSALES','D','V-184221345','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(254,'4263567129','IVAN ','ARRAEZ','D','V-17506214','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(255,'4166518532','DENNIS','RODRIGUEZ','D','V-103181239','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(256,'4145356766','JOSE','PEROZA','D','V-16898855','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(257,'4145674609','NOÉ','PEREZ','D','V-167506646','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(258,'4144067657','DAVID ','PEREZ','D','V-255416380','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(259,'4145738159','ALFREDO','NAVAS','D','J-407265580','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(260,'4245616581','JOSE','MOLLEJA','D','V-168042767','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(261,'4145095502','LUIS','MERINO','D','V-118798062','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(262,'4267590039','OSWALDO JOSE','MARTINEZ','D','V-189223443','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(263,'4163540669','JOAN','MANUEL','D','J-405519720','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(264,'4245776684','ALBERTO ','LOPEZ','D','V-195905602','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(265,'4245163642','WILMER','LEÓN','D','V-136441392','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(266,'4145151994','LUIS ','GONZALEZ','D','V-15817277','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(267,'4245384442','LUIS ','GONZALEZ','D','V-20500294','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(268,'4145090868','GIBSON','GARCIA','D','J-407588680','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(269,'4145229962','JOSE','FERNANDEZ','D','J-401384331','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(270,'4149734120','JOSICH','ENSINOZA','D','V-16089098','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(271,'4145303257','CARLOS','CORDERO','D','V-19106169','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(272,'4145015002','ELISAUL','ARRIECHE','D','V-9614853','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(273,'4245533906','ENDERSON','ARRIECHE','D','V-19106412','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(274,'4145720543','KERWIS','ALVAREZ','D','V-122431050','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(275,'4245306172','VICTOR','AGUILAR','D','V-172273552','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(276,'4140579586','ELISANDRO','ARRIECHE','D','V-16277442','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(277,'4145069448','FREDDY','MENDOZA','D','V-198835095','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(278,'4145202990','HERMES','GIL','D','V-132668791','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(279,'4149539152','DARWIN','MOLINA','D','V-147496245','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(280,'4166565318','SAMUEL ','MEDINA','D','J-401491529','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(281,'4149543202','JESUS','RUIZ','D','V-11308010','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(282,'4143741985','LEONEL','ZERPA','D','J-316521338','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(283,'4147448814','JUAN CARLOS','ZAMBRANO','D ','J-404100172','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(284,'4147450040','OLI','VIELMA','D','J-316521338','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(285,'4265739429','HENRY','VIELMA','D','J-403646708','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(286,'4265127211','LANDER','SALSEDO','D','V-144383849','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(287,'4247741348','LEONARDO','RONDON','D','V-8086180','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(288,'4160101066','LUIS','RIVAS','D','V-226574316','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(289,'4247171782','JONDY','RIVAS','D','V-90317012','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(290,'4264263200','LEONARDO','RIVAS','D','V-145883705','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(291,'4147121580','JOSE ','PARRA','D','V-123550303','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(292,'4129799032','JUAN','PARRA','D','V-123462790','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(293,'4149798262','RAFAEL','PARRA','D','V-15594482','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(294,'4147129516','NIXON','OSUNA','D','V-16741681','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(295,'4143750128','MAURICIO','MOLINA','D','V-142879405','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(296,'4247207550','RICHARD ','MENDEZ','D','V-106915055','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(297,'4144293602','JOSE LUIS','MANTILLA','D','V-91032535','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(298,'4165754476','OSWALDO','LINARES','D','V-8036926','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(299,'4147482181','DAVID ','GUILLEN','D','V-150323343','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(300,'4147304813','JAIME ','GUERERE','D','V-130645107','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(301,'4248682330','JAVIER','GARCIA','D','V-16742818','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(302,'4168770072','RENE','ESPINOZA','D','V-166559311','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(303,'4269750902','JOSE','DUGARTE','D','V-127796102','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(304,'4160774854','LEONEL','DIAZ','D','V-119527003','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(305,'4247117713','NIXON','DEVIA','D','V-130982359','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(306,'4166742282','OREIMA','BRACHO','D','J-403646708','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(307,'4247100206','EVEN','ALVAREZ','D','V-156212535','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(308,'4247238351','GERARDO','ALMEIDA','D','V-16680944','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(309,'4164722471','JONATHAN','ALMEIDA','D','V-22989387','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(310,'4247067888','PEDRO','ALBARRAN','D','V-80018769','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(311,'4141817375','HECTOR','AVELLANO','D','J-298877162','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(312,'4147446144','LENIN ','ZERPA','D','V-80318207','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(313,'4166729296','YORMAN','RIVAS','D','J-407054945','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(314,'4166749955','ELIBE','QUINTERO','D','V-80006337','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(315,'4247005063','JAIRO','RIVAS','D','V-9460217','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(316,'4147550915','LUIS','NATERA ','D','V-16597643','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(317,'4141777722','JORMAN','RIVAS','D','J-407054945','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(318,'4168248524','FERNANDO','ZERPA','D','V-10528846','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(319,'4143780956','DENNYS','YUNCOZA','D','J-317398548','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(320,'4141057929','SIMON','TETLOSKI','D','V-125630126','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(321,'4241293885','RAUL','SEGOVIA','D','V-144380521','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(322,'4263198562','JOSÉ','SAVEDRA','D','J-405432420','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(323,'4143368726','ENGLIS','MATA','D','V-131236804','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(324,'4143159366','FRANK','PERNIAS','D','V-148923198','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(325,'4125619795','GABRIEL','PEREZ','D','V-19378370','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(326,'4125483512','ARMANDO','PERDOMO','D','V-117367947','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(327,'4143172222','WILLIAM','CARRANZA','D','V-86758055','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(328,'4163114177','KEYVIN','MORA','D','V-146881021','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(329,'4142987599','JORGE','MELENDEZ','D','V-86847317','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(330,'4125431242','RICARDO','MEJIA','D','V-6504487','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(331,'4242551536','JESUS ','MARTINEZ','D','V-87554348','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(332,'4142581729','WILLIAM','MARTINEZ','D','V-155893679','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(333,'4141731124','RONALD','MACHADO','D','J-405603410','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(334,'4242156669','JOSE','LUCENA','D','V12832272','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(335,'4141721089','CLEMENTE ','LOPEZ','D','V-6994603','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(336,'4142845519','EDUAR','LAINO','D','V-191545024','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(337,'4166841110','JONATAN ','HIDALGO','D','J-295883820','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(338,'4265585303','JUAN','HERNANDEZ','D','J-299546445','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(339,'4142561612','JOALVER','HERNANDEZ','D','V-144808416','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(340,'4142719886','NESTOR','GUILLEN','D','V-105318274','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(341,'4142985149','PAULO','GOMEZ','D','J-317060415','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(342,'4241968121','OMAR','GIMON','D','J-401303285','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(343,'4143659090','JORGE','GARCIA','D','J-406560294','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(344,'4169304441','WILBERTO ','FLORES','D','V-138458780','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(345,'4149166757','JEAN CARLOS','FIGUEROA','D','V-132476388','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(346,'4149176370','JUAN','FERNANDEZ','D','V-6519079','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(347,'4143236557','ISAAC','FERNANDEZ','D','J-314677764','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(348,'4143178804','IVAN','FERNANDEZ','D','J-297527869','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(349,'4245010381','RAMON','FARIAS','D','J-401647588','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(350,'4143197755','CARLOS','DOMINGO','D','J-296764611','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(351,'4141117772','FERMIN','DIAZ','D','J-296695091','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(352,'4241927117','JUAN','DEFFIT','D','V-100927175','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(353,'4149289320','LUIS ','DA SILVA','D','V-169243952','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(354,'4241827400','JOSE','SEQUERA','D','V-17651617','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(355,'4241911926','JUNIOR','CASTILLO','D','V-19200916','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(356,'4141266908','KELVIN','CASTILLO','D','V-24088465','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(357,'4241283428','JUAN','BOYER','D','J-298321865','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(358,'4166158436','JUVENCIO','BARRIOS','D','V-15150151','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(359,'4242193577','EDGAR','BARRETO','D','V-68444213','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(360,'4241630705','ROBIN','ALVAREZ','D','V-63220252','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(361,'4143661089','FELIX','ALVARADO','D','J-301657152','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(362,'4168358580','JOSE','FERNANDEZ','D','V-22046668','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(363,'4143368727','ENGLIS','MATA','D','V-131236804','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(364,'4141354681','FERNAN','FIGUERA','D','V-120644153','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(365,'4241901331','ERNESTO ','GONZALEZ','D','V-11561395','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(366,'4242812323','JESÚS','MACHADO','D','V-223516838','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(367,'4242371077','JOSE','HERNANDEZ','D','V-140605669','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(368,'4144666007','ALVARO','CARRASCAL','D','V-117390272','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(369,'4148921841','ENZO','SALAMANCA','D','V-15813782','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(370,'4140219262','MIGUEL','RONDON','D','V-18556247','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(371,'4121175318','JESÚS','PIPPE','D','V-175576254','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(372,'4162978007','JESUS','MEDINA','D','J-315163527','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(373,'4141988729','VERUSKA','HIRARRAZA','D','J-400065844','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(374,'4126975587','FRANCISCO','GROSO','D','J-295870779','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(375,'4249684455','CRISTIAN ','GONZALEZ','D','V-182745061','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(376,'4147652368','JUAN','FARIÑAS','D','V-86515012','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(377,'4147656659','JORGE','CHACON','D','J-402137729','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(378,'4247367040','CARLOS ','CAÑA','D','J-407269542','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(379,'4123531856','TEUDYS','PENOTH','D','V-174193025','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(380,'4125309410','CARLOS ','RODRIGUEZ','D','V-163372793','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(381,'4162909868','JORGE','MARCANO','D','V-165458156','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(382,'4248360072','MOISES','FERRER','D','J-407186272','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(383,'4267372673','CRISTOFER','SALAZAR','D','V-181149180','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(384,'4143957318','EDMUNDO','VILLARROEL','D','J-295939906','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(385,'4248729224','EDWIN','MARCANO','D','J-310877629','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(386,'4248101901','JOSE','MARTINEZ','D','V-163376837','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(387,'4245139142','EMILIO','ROJAS','D','J-95669561','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(388,'4141198832','VICENTE','LOVERA','D','J-402511728','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(389,'4145618301','GREGORIO','SIVIRA','D','V-10638194','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(390,'4246647720','ENDYS','CASTRO','D','J-407614029','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(391,'4145214367','DANIEL','PERALES','D','V-167953006','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(392,'4142548852','NELSON','GUERRERO','D','V-64516236','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(393,'4128580220','JESUS','GONZALEZ','D','J-315955490','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(394,'4247197800','EDGAR','ZAMBRANO','D','V-56859256','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(395,'4147068737','GABRIEL','VIVAS','D','V-15988990','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(396,'4247622119','DENIS','VILCHEZ','D','V-12631511','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(397,'4147136258','JESUS','VELAZCO','D','V-211798832','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(398,'4147028017','HENRRY','ROMERO','D','V-122349507','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(399,'4247233374','LUIS ','RODRIGUEZ','D','V-133043523','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(400,'4247301485','LUIS','PICADA','D','V-161239646','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(401,'4247793802','JESSICA','OCHOA','D','V-101733315','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(402,'4247255445','JAVIER ','NIÑO','D','V-165407020','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(403,'4149702667','JOSE','MORENO','D','V-161259752','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(404,'4147021813','LUIS','MARCIANI','D','V-101724138','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(405,'4141791070','MIGUEL','MALDONADO','D','V-20999408','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(406,'4247542332','HEBER','LEAL','D','V-12814562','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(407,'4147080766','TONY','GUERRERO','D','V11498286','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(408,'4247030044','JOSE','GONZALEZ','D','V-92387239','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(409,'4149774654','ANTONIO','COLMENARES','D','V-178128554','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(410,'4247157392','JOSE GRE','CARRERO','D','V-63172487','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(411,'4164702652','ANGEL','CARDENAS','D','V-16410121','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(412,'4263286798','GERARDO','BARRETO','D','V-149413070','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(413,'4141774262','ENDER','BARAJAS','D','J-295575165','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(414,'4147084876','SERGIO','BALDUZ','D','V-101451778','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(415,'4166764492','NICOLAS','BALAN','D','V-175030944','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(416,'4247131569','JESUS','AVENDAÑO','D','V-101559668','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(417,'4147064516','JOSE','ATUCHA','D','V-101532093','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(418,'4147055111','ROSMEL','ARAUJO','D','V-12970435','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(419,'4147044054','GERARDO',' CARRERO','D','V-129704353','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(420,'4147024064','LISANDRO','VALERA','D','V-102646203','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(421,'4144178052','ALBERTO','SILVA','D','J-406161519','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(422,'4168117005','VICTOR ','VARELLA','D','V-167241871','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(423,'4141197409','WILLIAM','ROA','D','V-11973051','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(424,'4245443203','JOHAN','GUADARAMA','D','V-17920780','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(425,'4143584594','ANDER','BAUSTE','D','V-178444790','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(426,'4145146400','LENNY','AGÜERO','D','V-14210216','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(427,'4245704769','JUAN','AGÜERO','D','V-14607191','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(428,'4149600685','ROQUE','SEGUNDO','D','J-297126422','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(429,'4146015890','CIRO','SALAZAR','D','J-403837465','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(430,'4146215697','LUIS','ROLDAN','D','V-6832884','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(431,'4149605051','LUIS','ROLDA','D','V-161491957','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(432,'4146692100','WILLIAM','REYES','D','J-296083231','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(433,'4140642931','JEAN CARLOS','RAMIREZ','D','V-15720018','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(434,'4246085064','ALEXANDER','PEROZO','D','V-16837189','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(435,'4140674475','JHON','PEREIRA','D','V-16186594','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(436,'4141671341','EFRAIN','PEÑALOZA','D','J-404975993','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(437,'4146793373','IVAN','NUÑEZ','D','J-296503605','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(438,'4146491088','HANDY','MORALES','D','V-17088027','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(439,'4146410552','JOSE','MENDEZ','D','J-314926365','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(440,'4246311561','UNALDO','MARTINEZ','D','V-133019341','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(441,'4143612049','RICARDO','MARTINEZ','D','J-316358151','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(442,'4265178488','NELSON','MARTINEZ','D','J-406758280','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(443,'4125492162','SIR JOSE','LUNA','D','V-161210478','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(444,'4143619503','ALEXANDER','LOPEZ','D','V-7620622','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(445,'4246207684','JORGE','HENRY','D','V-222500261','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(446,'4246952273','DILMER','DOMADOR','D','V-17684805','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(447,'4143630069','JOHAN','CORONA','D','J-403936633','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(448,'4246209611','KELVIS','CHACON','D','V-167831750','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(449,'4149614154','ARISTOTELES','CHACIN','D','J-296099120','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(450,'4143670909','ENDRY','CASERES','D','J-400652227','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(451,'4165036225','JUAN','CASANOVA','D','V-142366300','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(452,'4246536573','MERVIN','BRACHO','D','V-142791710','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(453,'4246217339','ANMEL','BOSCAN','D','V-19007041','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(454,'4146665646','EDUARDO','BALLESTERO','D','V-17096155','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(455,'4143646917','CESAR','BAEZ','D','J-406503100','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(456,'4167792443','RAFAEL','ANDRADE','D','J-406191124','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(457,'4242757099','BETSY','REDONDO','D','J-401139760','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(458,'4241628120','TONY','PULGAR','D','V-168912028','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(459,'4264714017','WILSON ','GAMBOA','D','V-143780135','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(460,'4143779580','BORIS ','TUÑON','D','J-407442287','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(461,'4247354794','JONATAN ','OCHOA','D','V-201207025','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(462,'4128918791','DANILO','LARA','D','V-10703645','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(463,'4245275681','JOSE','ORTIZ','D','J-311860061','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(464,'4242742335','MAICOL ','HERRERA','D','V-20605675','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(465,'4129548160','PEDRO','VICENS','D','J-401178634','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(466,'4142523287','JOSE LUIS','GIL','D','V-65066862','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(467,'4169301695','ALEXANDER','RAMIREZ','D','J-401745440','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(468,'4242192350','ENCRIS','MORA','D','V-236115182','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(469,'4122870681','ANDRES ','BETOLINI','D','J-406045580','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(470,'4143309670','CALIXTO ','RIVAS','D','V-162884952','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(471,'4142752186','JONATHAN ','MORILLO','D','V-128325588','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(472,'4141739720','WITTMAN','RONDON','D','V-141962554','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(473,'4165186472','EVER JESUS','RONDON','D','V-14196254','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(474,'4142775954','GERMAN','SORONDO','D','J-309057219','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(475,'4147725893','LUIS','RAMIREZ','D','J-403416664','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(476,'4147725895','LUIS','RAMIREZ','D','V-206103686','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(477,'4142130724','MIGUELON','RONDON','D','J-313787744','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(478,'4148236194','CESAR','GUIÑON','D','V-8871641','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(479,'4140861712','DENYS','RODRIGUEZ','D','V-17956519','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(480,'4248486576','WALDO','GUARIMATA','D','V-8263824','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(481,'4248555605','MARIO','LUNA ','D','V-10290638','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(482,'4248190450','ERICO','LUNA','D','V-20359600','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(483,'4248113916','RAMON','RONDON','D','V-15874831','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(484,'4248297734','JUAN','BAPTISTA','D','J-405097540','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(485,'4148022753','JOSE','ZAPATA','D','V-5491343','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(486,'4248424942','JOSE','CASTRO','D','V-6353270','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(487,'4148162617','JAVIER ','MARGUE','D','J-405880797','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(488,'4148107692','DOMENICO','BARLAFANTE','D','V-803354564','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(489,'4147895854','RONALD','PARAQUEIMO','D','V-137660276','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(490,'4248767298','VICENTE','MUJICA','D','V-122899264','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(491,'4163841063','SALVADOR','VEGAS','D','V-34427654','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(492,'4148156144','PEDRO','MATA','D','J-404237879','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(493,'4264738429','FRANCISCO','OTERO','D','V-173447929','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(494,'4160339355','CARLOS','MARTINEZ','D','V-82514283','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(495,'4248137811','OMAR JESUS','LOZADA','D','V-5863658','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(496,'4249261436','FRANKLIN','MEDINA','D','V-117655527','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(497,'4141995011','MIGUEL','MARQUEZ','D','V-82632544','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(498,'2869713573','','','D','J-315952505','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(499,'04141284106','ENGELBERTH','GUTIERREZ','D','J-315969645','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(500,'04241150296','OSCAR','GUTIERREZ','D','J-315969645','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(501,'4146408533','RAFAEL','CANACHE','D','V-20610368','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(502,'4242452203','EDWARD','CHACON','D','V-200974979','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(503,'4146282933','OWIN','LINARES','D','V-13575135','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(504,'4143556462','ALFONSO','ROSENDO','D','V-200152103','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(505,'4246505248','WILLIAM','RAMIREZ','D','V-78190929','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(506,'4143018766','CESAR','DIAZ','D','J-298903457','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(507,'4146025841','VLADIMIR','VILLALOBOS','D','V-104083855','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(508,'4241536448','JOHN','CORTEZ','D','V-159283271','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(509,'4245241802','GUEDEZ','JONAS','D','V-195725582','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(510,'4145670846','ZENON','ROMERO','D','V-101549034','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(511,'4145245646','JUNIOR','RODRIGUEZ','D','V-122426471','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(512,'4249740320','JORGE','FARIAS','D','V-235017160','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(513,'4242048477','YOVANI','SIERRA','D','V-177420987','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(514,'4125694521','CARLOS','DELGADO','D','V-161460857','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(515,'4120354282','JOSE','MUJICA','D','V-6662595','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(516,'4247134560','FRANCISCO ','ARAQUE','D','V-17239815','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(517,'4247585577','EDWIN','MORA','D','J-407244361','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(518,'4148589530','RICHARD','FREIRES','D','V-13156301','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(519,'4163895347','LEVIS','PEREZ','D','V-10570828','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(520,'4160939798','MIGUEL','PAEZ','D','V-19130208','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(521,'4244325716','MIRKO','SAMPAOLI','D','V-21214415','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(522,'4244416850','MICHELLE','SAMPAOLI','D','V-11351254','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB'),
(523,'4242668705','KENWIS','ESTRADA','D','V-18822612','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','AAABBB');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
