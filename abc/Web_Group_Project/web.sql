-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: web
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--
CREATE database web;
USE web;

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `AdminID` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('chinthakar','chinthaka','chinthaka@gmail.com','$2y$10$mlF/WcvFJO.ybl0uwSl6tOeDwXdT7V1b.KBq7v3UEHRDM4QfDjS7u','rohan',778547856),('Niweera','Nipuna','z','$2y$10$nBu8DpzMRlwiaezcOAg.lOEn9ubSmkPVWxneE3kkRuTykCOvXMFGW','Weerasekara',766419486),('Niweera2','Nipuna','a','$2y$10$dMVTJunsoRXY24NRvqT.6OVD3c70KeSM/F/EHIvfakT1WEw00iRYC','Weerasekara',766419486),('UCSC_Admin','UCSC','ucscadmin','$2y$10$5tMwBLLT46WowTUm9ToRs.NxKJ5gLDeEzs8nXSc6KAYmQsh14nNdS','Administrator',123456789);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `cityname` varchar(255) NOT NULL,
  PRIMARY KEY (`cityname`),
  UNIQUE KEY `cityname` (`cityname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES ('Anuradhapura'),('Colombo'),('Galle'),('Gampaha'),('Hambantota'),('Kalutara'),('Kandy'),('Kurunegala'),('Matara'),('Ratnapura');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custcontact`
--

DROP TABLE IF EXISTS `custcontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custcontact` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custcontact`
--

LOCK TABLES `custcontact` WRITE;
/*!40000 ALTER TABLE `custcontact` DISABLE KEYS */;
INSERT INTO `custcontact` VALUES (1,'W.M.D.N.L. Weerasekara','Test','This is a test message!								','w.nipuna@gmail.com'),(2,'Nipuna Weerasekara','Test2','This is a test part2!						','w.nipuna@gmail.com');
/*!40000 ALTER TABLE `custcontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `CuID` int(255) NOT NULL AUTO_INCREMENT,
  `CustID` varchar(255) NOT NULL,
  PRIMARY KEY (`CuID`),
  UNIQUE KEY `CustID` (`CustID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$Va.z7/ShqpeSb4.wqiak6.8l9JGuOXm9HwQYEqZoMLNXCw3Az9/VK',1,'Nipuna'),('Nisal','Bandara','nisaldbandara96@gmail.com',714765775,'$2y$10$BU4VJiVCUs47nWCkbQLRteOBtnlKmqL3L3tbyLk/OBoI75RGoYhTq',2,'ndb'),('pamo','madu','pamoda28@gmail.com',56257623,'$2y$10$BJRL31HVSTUXIo9ep0N96ObETSUodR4HDTWnvHrpMKECqNBC8qMNi',3,'pamoda'),('University of Colombo','School of Computing','ucsc',112581245,'$2y$10$149hp7BsSmzEL7fc5Nmtlep..OxM9hhSg7LvrA4m2mgdxPAP/6qqS',4,'UCSC User'),('Chamath','Srimal','srimal@gmail.com',765551474,'$2y$10$pHA..vB9k6yGV9JyPSDeeuRuMJWS8J0DXQeY16zUQ2K7MJ7J/.dYW',5,'Chamath12'),('thilini','rathnasuriya','thi@gmail.com',776061236,'$2y$10$dUvPbazyNAP6rizPdCYIrOnRjFzX72BYBVX07KDTP0odeZiPFDQ9y',6,'thilinir'),('Nipuna','Vithana','harindavithana@gmail.com',710896461,'$2y$10$7ASwE42hk.refAQ1QCQUpO9/Ugxm4p5Wr8X7pkPjtwR7EM5UN.VuG',7,'harindavithana'),('Sanduni','S.A','sanduniisa@gmail.com',713401880,'$2y$10$E4Oe0DMDz2FJjsN0L6dYPuAV62Q4YCXZDRxljgQGt.tHm4arVdydi',8,'sanduniisa'),('Asintha','Asiri','asiri@gmail.com',756657471,'$2y$10$Kh1PGkRnlWw14wwrvwvot.QU3PyJkJ6pxsWsLYYg0kX.VmpjDQD8m',9,'Asiri'),('Awantha','Wijenayake','awa@gmail.com',711234565,'$2y$10$CiNcBjLdclHUU.lHjen3yup2oymWgp22Spq5ZPMwB8EMH29bkKJe.',10,'Awantha'),('Yasiru','Gimhana','yasi@gmail.com',754658525,'$2y$10$VS0.8l4Wl1EMOqzjorxaLONs52yr6OnxXONuVe7uHJnnZM7QS52Iu',11,'Yasi'),('Ranmina','Jayasinghe','rana@gmail.com',785246545,'$2y$10$qwMbNfl1LHdzcvA/Y7Nen.sTAoW0L1kKcktf/hqAlLhY9.Rwk/pT2',12,'Rana');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerissue`
--

DROP TABLE IF EXISTS `customerissue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerissue` (
  `CustID` varchar(255) NOT NULL,
  `IssueID` varchar(255) NOT NULL,
  PRIMARY KEY (`CustID`,`IssueID`),
  KEY `custrel2` (`IssueID`),
  CONSTRAINT `custrel` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`),
  CONSTRAINT `custrel2` FOREIGN KEY (`IssueID`) REFERENCES `skill` (`SkID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerissue`
--

LOCK TABLES `customerissue` WRITE;
/*!40000 ALTER TABLE `customerissue` DISABLE KEYS */;
/*!40000 ALTER TABLE `customerissue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `SkID` varchar(255) NOT NULL,
  `SkillName` varchar(255) NOT NULL,
  PRIMARY KEY (`SkID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES ('Carp001','Wood works'),('Carp002','Door fixing'),('Carp003','Furniture repairing'),('Elec001','Wiring'),('Elec002','Rewiring'),('Elec003','Electrical fault repairing'),('Extr001','Indoor exterminating'),('Extr002','Outdoor exterminating'),('Extr003','Pest controlling'),('Ittc001','PC Troubleshooting'),('Ittc002','Virus Removing'),('Ittc003','Software upgrading'),('Mech001','Tinkering'),('Mech002','Vehicle fault repairing'),('Mech003','Tire changing'),('Mson001','Brick laying'),('Mson002','Constructions'),('Mson003','Building repairing '),('Plum001','Pipelining'),('Plum002','Pipefitting'),('Plum003','Pipe fault repairing'),('Pntr001','Wall painting'),('Pntr002','Indoor painting'),('Pntr003','Outdoor painting'),('Wldr001','Frame welding'),('Wldr002','Structure welding'),('Wldr003','Metal cutting'),('Wood001','Garden trimming'),('Wood002','Tree cutting'),('Wood003','Branches cutting');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skillcount`
--

DROP TABLE IF EXISTS `skillcount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skillcount` (
  `skid` varchar(255) CHARACTER SET latin1 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`skid`,`timestamp`),
  CONSTRAINT `skfk` FOREIGN KEY (`skid`) REFERENCES `skill` (`SkID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skillcount`
--

LOCK TABLES `skillcount` WRITE;
/*!40000 ALTER TABLE `skillcount` DISABLE KEYS */;
INSERT INTO `skillcount` VALUES ('Carp001','2018-07-03 09:28:34'),('Carp001','2018-07-12 21:04:45'),('Elec001','2018-07-01 16:23:47'),('Elec001','2018-07-01 16:24:08'),('Elec001','2018-07-04 09:24:45'),('Elec001','2018-07-04 09:28:21'),('Elec001','2018-07-06 02:50:38'),('Elec001','2018-07-10 08:56:30'),('Elec001','2018-07-13 10:51:08'),('Elec002','2018-07-01 17:14:36'),('Elec002','2018-07-10 16:23:14'),('Elec002','2018-07-12 21:02:06'),('Elec003','2018-07-01 17:13:27'),('Elec003','2018-07-13 03:16:39'),('Extr003','2018-07-20 15:41:57'),('Ittc001','2018-07-01 16:24:28'),('Ittc001','2018-07-12 17:51:22'),('Ittc001','2018-07-20 15:52:54'),('Ittc002','2018-07-20 15:49:29'),('Ittc002','2018-07-20 15:49:43'),('Ittc002','2018-07-20 15:50:03'),('Ittc002','2018-07-20 15:52:46'),('Ittc003','2018-07-20 15:53:04'),('Mech001','2018-07-01 16:25:03'),('Mech001','2018-07-06 02:50:53'),('Mson001','2018-07-03 09:29:25'),('Pntr003','2018-07-20 15:46:07'),('Wldr003','2018-07-20 15:40:32'),('Wood002','2018-07-13 10:51:30');
/*!40000 ALTER TABLE `skillcount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techcontact`
--

DROP TABLE IF EXISTS `techcontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techcontact` (
  `tid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techcontact`
--

LOCK TABLES `techcontact` WRITE;
/*!40000 ALTER TABLE `techcontact` DISABLE KEYS */;
INSERT INTO `techcontact` VALUES (1,'W.M.D.N.L. Weerasekara','w.nipuna@gmail.com','Test','This is a test message!								'),(2,'Nipuna Weerasekara','w.nipuna@gmail.com','test2','This is a test part 2!								');
/*!40000 ALTER TABLE `techcontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techcount`
--

DROP TABLE IF EXISTS `techcount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techcount` (
  `techid` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`techid`,`timestamp`),
  CONSTRAINT `tcidfk` FOREIGN KEY (`techid`) REFERENCES `techtype` (`typeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techcount`
--

LOCK TABLES `techcount` WRITE;
/*!40000 ALTER TABLE `techcount` DISABLE KEYS */;
INSERT INTO `techcount` VALUES ('Carp','2018-07-03 09:28:34'),('Carp','2018-07-12 21:04:45'),('Elec','2018-07-01 16:23:47'),('Elec','2018-07-01 16:24:08'),('Elec','2018-07-01 17:13:26'),('Elec','2018-07-01 17:14:35'),('Elec','2018-07-04 09:24:45'),('Elec','2018-07-04 09:28:21'),('Elec','2018-07-06 02:50:38'),('Elec','2018-07-10 08:56:30'),('Elec','2018-07-10 16:23:14'),('Elec','2018-07-12 21:02:06'),('Elec','2018-07-13 03:16:39'),('Elec','2018-07-13 10:51:08'),('Extr','2018-07-20 15:41:57'),('Ittc','2018-07-01 16:24:27'),('Ittc','2018-07-12 17:51:22'),('Ittc','2018-07-20 15:49:29'),('Ittc','2018-07-20 15:49:42'),('Ittc','2018-07-20 15:50:03'),('Ittc','2018-07-20 15:52:46'),('Ittc','2018-07-20 15:52:54'),('Ittc','2018-07-20 15:53:04'),('Mech','2018-07-01 16:25:02'),('Mech','2018-07-06 02:50:53'),('Mson','2018-07-03 09:29:25'),('Pntr','2018-07-20 15:46:07'),('Wldr','2018-07-20 15:40:32'),('Wood','2018-07-13 10:51:30');
/*!40000 ALTER TABLE `techcount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technician`
--

DROP TABLE IF EXISTS `technician`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `technician` (
  `TechID` varchar(255) CHARACTER SET latin1 NOT NULL,
  `FirstName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `LastName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `Password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Rate` decimal(65,0) NOT NULL,
  PRIMARY KEY (`TechID`) USING BTREE,
  KEY `cityfk` (`City`),
  KEY `ocpfk` (`Occupation`),
  CONSTRAINT `cityfk` FOREIGN KEY (`City`) REFERENCES `city` (`cityname`),
  CONSTRAINT `ocpfk` FOREIGN KEY (`Occupation`) REFERENCES `techtype` (`typename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technician`
--

LOCK TABLES `technician` WRITE;
/*!40000 ALTER TABLE `technician` DISABLE KEYS */;
INSERT INTO `technician` VALUES ('achitha','Achitha','Rohan','achitha@gmail.com',714562584,'$2y$10$J3I.4F.yv8APkebnaVd65.49BQOZVgeJWh0tUxlbIkfBelCIfk.hm','Mechanic','Hambantota',1000),('Ahamed10','Ahamed','Hameed','Ahamedhameed@gmail.com',786541237,'$2y$10$kGl4D4m5tIvRqMZzyZ6QOeEOZD.1ZsNPXJjyrbiKH0Dh/4LfzXxGG','Plumber','Kurunegala',1600),('Akilas','Akila','Senarath','akila@gmail.com',754129630,'$2y$10$9Z8i0dFFRNjzw2lfESlmQue74T.Gxkmj6xcKrcFXQPU1o9bXI40sq','Electrician','Gampaha',350),('Anurad','Anura','Dikwella','dikwellad@gmail.com',752653698,'$2y$10$qjfrOkYrIl0TBEe9hZWkSOMUzgBI4r9jUVz7ggh.2irbhGJQ/FrM6','Carpenter','Matara',1480),('anushkas','Anushka','Sunil','anushka@gmail.com',785648569,'$2y$10$JCIAPrw2gnIQjPwjByHzmO65kNybK9nz9K134fCycxYsWyUW1SV1e','Mechanic','Hambantota',1800),('Arjun12','Arjun','Weeraman','arjunweer12@gmail.com',758932456,'$2y$10$aQeakooFXUUsiNSpXyG1eeCdKVyK7xPKTMnn3aksDWSxaGCEC9s5.','Painter','Kalutara',2150),('asankap','Asanka','Piyumantha','asanka@gmail.com',712546852,'$2y$10$A4QGBsDJUysF9J96xHJZ4OIBTXbl5PVH0nRlIPW.uvJFfvfIpkITG','Mason','Ratnapura',1400),('AshrafM','Ashraf','Mohomad','ashrafmohomad@gmail.com',724895613,'$2y$10$vFqMxC9skU.gVTcKzUWshOmZR/9ixyDLr0wwOHcKLOtMM3IUdCT96','Exterminator','Kalutara',1300),('Asiri48','Asiri','Gamage','asiri48@gmail.com',789653256,'$2y$10$XOdpyvYqfj13x0f8anAxtOiUdHFiZkiAgrn0paKQfOvqRzZUiiUNy','Painter','Galle',1980),('Asoka5','Asoka','Ariyapala','Asoariyapala@gmail.com',758932456,'$2y$10$5ObE5S6tuYs3uAh/jBi4EuusLKZ.gYKBSC/P5YI9LcULlPcW/wjua','Plumber','Galle',1550),('Asokap','Asoka','Perera','asoka@gmail.com',754128963,'$2y$10$wGZ9/.K8J42CfEEra1iY7ux3/VaHu2df.YRj4VWMVHigqbdb6Zwea','Electrician','Kalutara',870),('Bhathiya5','Bhathiya','Ariyasinghe','ariyasingheb@gmail.com',714587269,'$2y$10$uTWS6knxYieRq1EJgCqF1ellB6RsY5oKCvsE/rajO1EnaotfC.Z1y','Carpenter','Galle',1450),('bimsarar','Bimsara','Ranabahu','bimsara@gmail.com',774569856,'$2y$10$rBxYfzCMtl59/xJ3msL/ru0vYNWCeH3W4r4sdXxajyorIDX5X0NgO','Mechanic','Galle',1100),('binarar','Binara','Rajapaksha','binara@gmail.com',775845621,'$2y$10$JiFAzyz6jcu4ZTWrVdIJcucqAAmIKRD1girnKx563YJ1fsa7fa.4y','Mechanic','Gampaha',1400),('Buddid','Buddi','Desilva','buddi@gmail.com',719634587,'$2y$10$0htL9LbzDvSFuV8L5E/6nODEoMoNmtWKv4/XZC9VOGFYHc8KFPe9q','Electrician','Kurunegala',675),('CathuraD','Chathura','Desilva','chathurad@gmail.com',784596212,'$2y$10$YOd4R/5Bt7Zhr852BxbpbOzmzEsn4OZVOvpbTd75hphDk.1cb.Wym','Electrician','Galle',1470),('Chamara79','Chamara','Haputhanthrige','Chamarahapu@gmail.com',786249256,'$2y$10$wpn3xTd6OP09/8mtgDpplOwvDKp.pd5EOH6Iu.QYq8UtzUvk1Uk6i','Painter','Gampaha',2000),('chandanal','Chandana','Lucas','chandana@gmail.com',758964586,'$2y$10$9HIntupnoqqgCaQ71lxBFOsniqUmFOUanEGbredBexyTDxd4j2YdW','Mason','Hambantota',780),('charithr','Charith','Rupasinghe','charith@gmail.com',785649875,'$2y$10$ydslsR4Raby.zk3ZS1Hmi.eBzW3XuX8jXZkJaZmrOP3EBaRLCblkK','Mason','Galle',800),('Chathura51','Chathura','Siripala','chathu51@gmail.com',723695478,'$2y$10$s4FP2r9SovulpIVc22LFR.clwDkcHrXceS.qF4qOy/aLNnxgonh.i','Plumber','Gampaha',1500),('damsanu_f','Damsanu','Fernando','damsanuf@gmail.com',714568952,'$2y$10$vbBtlHY7YiMFKVb7ONuQ7.x4tqOn8v9r/sBse1cWfeAoZqSgOcAbq','Mason','Anuradhapura',1200),('danstona','Danston','Abeyruwan','danston@gmail.com',714582654,'$2y$10$VxNT/nbFYkqplfgQaavsPO/H7PHbaGn7nbH6tUyfXF97V9q5FDnma','Mechanic','Kandy',850),('Dasun89','Dasun','Withanage','dasun89@gmail.com',773478561,'$2y$10$1gRq9swdyN6gMLtpAamKPe.glMGWUFYAae9BVeLAoAF.wDTEZUT/a','Welder','Kalutara',1800),('Deshanl','Deshan','Liyanage','deshan@gmail.com',778964523,'$2y$10$970w8EftmbK7whkn5oBVe.Y/xsdPNagB/wZF/xV.axJxpfgikknh6','IT Technician','Colombo',1750),('Dinukak','Dinuka','Kasun','dinuka@gmail.com',711234897,'$2y$10$NQsVRrixTFkBRZOycfirXewsf3quv9upZV/qpD8gjx/5PSF/JS1ou','IT Technician','Kurunegala',1350),('DinukaR','Dinuka','Rathnasooriya','Dinukarathne@gmail.com',773789654,'$2y$10$XLa2r9I5ESOy3r5sUc/RueCE4uLJ63C8kavPdpLsSUQIHR5sUE912','Exterminator','Kandy',1240),('Gayanr','Gayan','Rathnapala','gayan@gmail.com',718569423,'$2y$10$I3nU.Hs.iIJeRrfSYNi.5uHMcnokhUwbEz.DO/E8Fo7o3hbigeQgG','Electrician','Anuradhapura',1700),('Gayath','Gayath','Chandrasekara','gaythachandra@gmail.com',789638521,'$2y$10$MMXxPF/h6GIzC6wKVgocduOYZ9VlzquTmzP/JG197Td47llJcIV8.','Exterminator','Hambantota',1200),('GihanR','Gihan','Rathnayake','gihan1@gmail.com',762345698,'$2y$10$7bkjL54uR9j6q69v1TrZp.iqLoc0GpACsD2sbwwd1t4LxbvAmCVEu','Carpenter','Kalutara',1480),('gihant','Gihan','Thanushka','gihan@gmail.com',775869856,'$2y$10$L0X9dhGuZGec1Fu.vRKrBeEx3QUlGEjkK33MvYPcmtRv3ZHDccvsu','Mason','Kalutara',650),('HarithN','Harith','Nandasena','nandasenaharith@gmail.com',719282542,'$2y$10$O6CRj9xtd1C8yjJWS66zEOLMQ46ltd2Y//KgX2udkTcd.k.y8mh0O','Exterminator','Gampaha',1180),('Hemantha59','Hemantha','Munasinghe','hemantha59@gmail.com',773927421,'$2y$10$FGdTGsaKDbZbpqSsYmInk.8I6y9X3yInxDwbfm0jyIBWxqxeuyOwu','Wood Cutter','Ratnapura',1200),('Hetti456','Susantha','Hettiarachchi','susanhetti@gmail.com',715669928,'$2y$10$nLnzvb0FGbWtMWMRfk/82e1Zw5fqh1e3hgILHqV6tGCEnuKbjQNTG','Exterminator','Galle',1240),('Isurum','Isuru','Mapalagama','isurum@gmail.com',789634782,'$2y$10$jCD2.oEAEZA.zlfBwn9/iewr79K21Kq265C5YXybNUm6MlLvbzvbO','IT Technician','Kandy',1020),('Jayantha5','Jayantha','Chandrasiri','jayanthac@gmail.com',774986532,'$2y$10$tEu5MDjlf8pTadpI8Rq3D.RyQtAaHeVUGz9DZe.nF//wuukGlKlFq','Exterminator','Anuradhapura',1200),('John123','John','Peters','jhptr@gmail.com',766419456,'$2y$10$hWgNSNwd./A16zntt3ivce0REHuRHv.8DdV3ygGuaqjTFniAEFWRG','IT Technician','Colombo',2500),('Kalana79','Kalana','Perera','kalana79@gmail.com',777856341,'$2y$10$YXwbWrjAr8cRAamIlQhH.O9/ysivJQbneeSBP/MbUyV1EQV5ydTd.','Welder','Matara',2200),('Kalindu86','Kalindu','Wijesinghe','kalindu86@gmail.com',704576820,'$2y$10$JMeIAf9LojgACMsRYe5RV.vMglBml1/oWsFmvci6ZCTnkxfZz.Kpm','Wood Cutter','Gampaha',1100),('Kalum55','Kalum','Ranasinghe','kalum55@gmail.com',783497201,'$2y$10$PVErHkylOu6Kh8bYTWd4/.ZUXHhwoxTTwo1/OS1Y9x0XVLh4Ygu9O','Welder','Gampaha',2100),('Kamals','Kamal','Sooriyaarachchi','kamal@gmail.com',708527413,'$2y$10$ab1y.wPIYeWIS5Vg7P0Hrub9Wm/OpiLjnfp2zr6BkFSz4.z8ZSnza','Electrician','Matara',1800),('kasunk','Kasun','Kalhara','kasunk@gmail.com',758465124,'$2y$10$/g2yhEsPZ9ZnnbBFTl8g0OKN9McTbHuXT.J5a.v65coIcv/USyp5W','Mechanic','Kandy',700),('kasuns','Kasun','Sanjaya','kasun@gmail.com',785694562,'$2y$10$9fu/MQuE6RcQ59Tazvt7Pux7tha8FSlK95NVty7i.EAbdUKtEAAOC','Mason','Colombo',1100),('Kosala12','Kosala','Hewagamage','kosalahewa@gmail.com',716335695,'$2y$10$Yk/rdW4K152JA3X.d.Km9.7s2DZhvWCQBC6TE5GyCL38GIlr/hULe','Plumber','Matara',1450),('Kumara46','Kumara','Gajanayake','kumara46@gmail.com',753457207,'$2y$10$mwDf1.2O8GfkRkMrOsOGJOu3n/LPEJZhzwnHvql/FE8oXShx7RPfK','Welder','Kandy',2200),('kumarak','Kumara','Kawshalya','kumara@gmail.com',714562315,'$2y$10$gcHKeqy1xk3gYD95sBQOseI6tdnYxQNRby6lbaTG2TUEpckNAi4B2','Mechanic','Ratnapura',1250),('Kushana','Kushan','Abeweera','kushan@gmail.com',719634567,'$2y$10$uxJzgvwtQRZ1ypWMJA/d0.PdAL4Z.VrkU8A6NiXlZyQWR68xsFaGq','IT Technician','Matara',1802),('Kushantha48','Kushantha','Walisinghe','kushantha48@gmail.com',727845923,'$2y$10$CfM8uXu6GiVmBWwsqIPORu/IxF43WnN4OX2Exka/PCZXvRT0og2ny','Welder','Ratnapura',1300),('LahiruP','Lahiru','Perera','lahirup@gmail.com',716318478,'$2y$10$hVy5WFvi.D6zWCWThl6Utuo/CMimXcfZnULlo67Lp4h.KOQpK6Uxm','Mechanic','Colombo',800),('Lakshan84','Lakshan','Pathirana','lakshan84@gmail.com',725268792,'$2y$10$atKWTnVTPtxM04ecuyTgbesu8UZ/Waen98yOhkNf3nIvexbadt8Dm','Wood Cutter','Kandy',1600),('Laksman','Laksman','Almeida','philipal@gmil.com',71429856,'$2y$10$pEvhXziIU0.GZCSLI92ZUuzrLCK2lLo5FCvHak7ugtVPUMMgJnKVu','Painter','Matara',1900),('Lankar','Lanka','Rathnasooriya','lanka@gmail.com',718596412,'$2y$10$BFNqeKdyQ1kRqOaIjxre/.mtF3JUuVcgBbM5u.rBl8qPKCOfCCZb2','IT Technician','Kalutara',980),('Lasantha67','Lasantha','Hettiarachchi','lasantha67@gmail.com',728956290,'$2y$10$QI.n8q.5fW061aaeyAGXY.XNYeaM/v.A0NB.B6f7NQxTs2v.4x02K','Wood Cutter','Colombo',1400),('lochanaa','Lochana','Abewardana','lochana@gmail.com',758456985,'$2y$10$0MlAK5aGkf/AmjDMcUSwz.EOp.85lmQd8kTxKHbXq/gOR/OGZAAUu','Mechanic','Colombo',1600),('Malinda76','Malinda','Perera','malinda76@gmail.com',756789322,'$2y$10$PKt7D42daecisVqso0WucOCmDC/7eWqDwm0af4HsqGVXoRGTh81Ci','Wood Cutter','Kalutara',1800),('MalinduF','Malindu','Fernando','Fernando111@gmail.com',789631111,'$2y$10$RsPLv6KMW1k83Xq/vBPyIOTb2v6ny5kC1TOKZxeEesT0JGHhOWGjW','Exterminator','Matara',1200),('Malindup','Malindu','Perera','perera@gmail.com',714581263,'$2y$10$/O0SrEXav7Qep48o4YpuMuq5YDFdWbbVb7F8IJ2pKpjC253HHKDEK','Electrician','Colombo',1600),('Milinda4','Milinda','Bandara','milinda@gmail.com',714569826,'$2y$10$XCDzZG8DPdEar5s98OAJcu2yNsinN7FtdVA.xKEPnKXts.jjXhUw2','Painter','Kandy',1950),('namarathnaw','Namarathna','Waduge','namarathna@gmail.com',77856215,'$2y$10$SvXALZR0vSjCW7lrAgZ9pOjZpiUsdGUxR4jEEHVp4IVnC/lcOZKaC','Mechanic','Matara',1122),('Nihal','Nihal','Jayasumana','nj@gmail.com',766419485,'$2y$10$FjEhX.rlE8R10L8vljG3BeyHGSTxXAziiCgWEdeFLaMwMnUS/FA2.','Electrician','Hambantota',750),('Nimal12','Nimal','Karunarathne','nimal12@gmail.com',725678345,'$2y$10$g5jg1qbx1GV4XzQlU1lBk.E4GNKPZ/JQf9RNhS0tX4Y4xHsukJDb6','Welder','Colombo',2000),('Nisha78','Nishantha','De Silva','Nishadesilva@gmail.com',714569852,'$2y$10$stCrlNp6Fekm8M4CCLzE3u9BV1XUfkaTBISvTBJdAfLYp45gQtYja','Plumber','Hambantota',1550),('Nishantha34','Nishantha','Ranaweera','nishantha34@gmail.com',774562859,'$2y$10$AkWGNiS.8bgVTId/Ci32i.GDx.2K6cZU4O3/Tkvrn8nYCYj8KmP7e','Welder','Galle',1700),('Niweera','Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$eg.dbZlp0pnINjt6clIBLuE2DdE/vJYOWzfa3O7L0vjH5agP64DXG','Electrician','Kalutara',500),('Niweera222','Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$LlHB8QpGTfIF8XHPgcbx2Oum2xGhySmAu9KbymEE1a.vU4oie/f2C','Plumber','Galle',600),('NSilva','Nobert','Silva','nssilva@gmail.com',75641897,'$2y$10$LjiCjb3rrSn4YBem13.B5eZ0ehTC1xtWFQ6EiBZvYG4VRHY9lsDAq','Electrician','Kalutara',1000),('nuraja','Nuraj','Abeywardana','nuraj@gmail.com',78564789,'$2y$10$hictNvCNvW5aahuIHKa2Eu0nh7yW3Fa1L/y6e6zwWkLWmlM0iaq5W','Mason','Kurunegala',1300),('nuwanc','Nuwan','Chamuditha','nuwan@gmail.com',712536548,'$2y$10$nyHuCk8FSS0HZf4jZyW9PeOQfAZWvEEkQoxgcPrt4IisaytuVsaTG','Mason','Matara',1020),('Oshanl','Oshan','Liyanage','oshan@gmail.com',754126935,'$2y$10$G6qCik3NjsWCOVOnNbUUyeQ6EjPlrkG9pHU2eXWQYW4KtV5uAxWyS','IT Technician','Hambantota',850),('Pasindud','Pasindu','Desilva','pasindu@gmail.com',789634591,'$2y$10$4.WULpFqwtrNO9MnMD/TS.mne6lx/Qb3T34A5DmIz00oEZJAdUQzG','IT Technician','Anuradhapura',1680),('Pathum65','Pathum','Perera','pathum65@gmail.com',702265628,'$2y$10$eyAqspY7f5CBuBKxAvytQu7aqCWHHZraBrTsa18KlL1Zfj0t8MCXu','Welder','Anuradhapura',1500),('Pbandara','Priyantha','Bandaranayake','pbandara@gmail.com',713692479,'$2y$10$iQRuzZIBU3C56jG76fMmSuexWkVwIAGo/JLLhYYIlgoX8pOCqsqDC','Carpenter','Gampaha',1500),('Piyalg','Piyal','Gunarathne','piyalguna@gmail.com',714568269,'$2y$10$jaL9YnA2Nthc0u9Ki2Sgk.arjkkvXfmWwyPvlT3IsSQPK4CuNH3j6','Carpenter','Colombo',1450),('piyalr','Piyal','Ranawka','piyal@gmail.com',714562854,'$2y$10$/CF8vpo1vuDwxXCVfDp5NuXyct6cfeN/MKVrP2/f26BDX4LUkxOxK','Mechanic','Kurunegala',950),('Piyantha65','Piyantha','Dasanayaka','piyantha65@gmail.com',713456728,'$2y$10$GLGD11/sKnKQsP.Bfj5I1.FK9aMc1x10dG/rSMO/v9eCfXfHJF8kG','Welder','Hambantota',1400),('Ranil12','Ranil','Wickramarachchi','ranilrox@gmail.com',755556662,'$2y$10$hf1BoBVBPc9s8uj3KJsPo.WkHUC.CMd0cYD4IZOP.g57QBApmxj1C','Exterminator','Colombo',1250),('Rasika26','Rasika','Alwis','Alwisr@gmail.com',714785222,'$2y$10$RtpNo4H1q9N0V6jF8fNmP.yM5cJqzaBxy/4AoDPffN5.DjTDOrAJG','Carpenter','Kandy',1400),('Ruwan56','Ruwan','Gunawardane','ruwan56@gmail.com',726749301,'$2y$10$k/nmJkJNxVd3ZUaFWrBAMOgFL8MamgiIbidBThbBlUiKJ5J3/cY8a','Wood Cutter','Kurunegala',1300),('Saman22','Saman','Silva','w.nipuna@gmail.com',766419486,'$2y$10$UA1KUWZvVBC5x7ka5SYFnOUcHQqUVkRKXePGVyAl/BfTCWIm2snne','IT Technician','Kalutara',850),('Saman222','Saman','Kumara','skk@gmail.com',766419488,'$2y$10$bLbuyMeuic6vqXixqkyl6eSnDKwv.FI8YHoNtM8GFSHf4fi94osr.','Mason','Gampaha',2000),('Samank','Saman','Kulasngha','saman@gmail.com',774561230,'$2y$10$oouQM5fl2bUAI/LA1/DQQugIpavPhzjIK9lh7HBLzfP6A9l2WQQfu','Electrician','Kandy',300),('SamithaBan1','Samitha','Bandara','samithaban2@gmail.om',756975653,'$2y$10$8HhfOhErf.SbFDDulJOOuODkQQHIAQnP.ZlfzAG07yjQ1xNXN37Uq','Exterminator','Kurunegala',1170),('Sanjeewa21','Sanjeewa','Dissanayake','sanjeewad@gmail.com',715669945,'$2y$10$.6IqNFiBGePyqNXE0VJZdOA8HTW0orOIsh9XOCeJ241W0AfH4l2ey','Plumber','Kalutara',1600),('Santhush1','Santhush','Sridharan','SridaranS@gmail.com',724156398,'$2y$10$dBoHCeboOIGBrqpraMze4.97KknJcbRn30/t85dZhdj5h5lmZ3kE6','Plumber','Ratnapura',1550),('sanujaw','Sanuja','Weerakwtiya','sanuja@gmail.com',775236548,'$2y$10$BpMRTOrdWbt5VVSA4bYfYu48H9Xy5PKBKy0EBK.aGWDq.V/UJ9njG','Mechanic','Kalutara',850),('Shantha45','Shantha','Rathnapala','Shantha2gmail.com',716669828,'$2y$10$asaBDAA0a5YCZmvEwEgYYeIOQkxPGsR0IHQCb6PjEoDCFnEoFfv0e','Painter','Anuradhapura',2150),('Sharukh5','Sharukh','Musharadh','sharukm@gmail.com',725623456,'$2y$10$c.Cm1orc8BW7DVvrYiddU.TrPNlYmOiHQwf.91Ioiejcg8GBSHj0G','Carpenter','Kurunegala',1500),('Shifran45','Shifran','Mularidharan','muralidharan45@gmail.com',778523914,'$2y$10$/Korl0VI2Hn/juGM/X/9lO8xItqTl1n2vaVPXlokT6I3pqhnwCiei','Exterminator','Ratnapura',1180),('Sirilg','Siril','Gamage','siril@gmail.com',758964120,'$2y$10$hLXL/hzuxoH1rd5S22B7iuXHJYc.haLOJZXanPodfHBRZfgHhTvti','Electrician','Ratnapura',962),('Srimal','Srimal','Jayarathne','srimalj@gmail.com',716544565,'$2y$10$jv3r5Siu6hj/j6yU8uAkru3dkRe2ZhmoQ8ktFy/WGxkkZmS4V9jTG','IT Technician','Kalutara',1500),('Sunil25','Sunil','Wickramasinghe','sunil25@gmail.com',715669927,'$2y$10$QgcO350a7zTlEQwU1uGWse7KkHBzsPhOFIyP6OY67HLsTjykMQkLm','Plumber','Anuradhapura',1500),('Sunil49','Sunil','Amarasinghe','sunil49@gmail.com',782299673,'$2y$10$L8wm.WZpSxEpbsQdPN35Q.veiZsFieDyLKqHwg5mz5Co2uIPx3i7y','Wood Cutter','Hambantota',1700),('Sunimal5','Sunimal','Perera','sunimaperera2gmail.com',765892356,'$2y$10$R3rjC9crq7834SFG3Yoo..O9OAiaA/XehmJBWFWeToaD70n9vohJ.','Painter','Colombo',2000),('Sunimal56','Sunimal','Pieris','sunimalp@gmail.com',758466955,'$2y$10$0tn0OVlIGxTP0a0PHivzcuuV/vRXPR62i/wcGJUpRWtDx7y7zOdg2','Carpenter','Anuradhapura',1400),('supund','Supun','Dilshan','supun@gmail.com',776874567,'$2y$10$UOOq1MWKun6UjrolyXuck.olv3iiMUHGIYnmIZOSFa6rsmlKC7gUW','Mason','Kandy',789),('Suranga15','Suranga','Satharasinghe','suranga@gmail.com',714567256,'$2y$10$.zbvP5FBZmZyMnpPfkYJf.NBKoQRJ2WzY3mGyZHFrweN/dlpMmAwq','Plumber','Kandy',1460),('tharindud','Tharindu','Darshana','tharindud@gmail.com',771254785,'$2y$10$nWXQNNuzK8Eh8gafY78btOKXSR0d1I9VKakLFeTETTGeJKbjIhEd2','Mason','Anuradhapura',1000),('thidakshmag','Thidakshma','Gamage','thidakshma@gmail.com',714569845,'$2y$10$w9tiejttNIH2dAY9O0ktRezvWZWBzbSInArgnb7piK/deRaXVqS5y','Mason','Anuradhapura',900),('Thilinar','Thilina','Rathgama','thilina@gmail.com',784531268,'$2y$10$WnmLyyNzSL/hArXG.K0M0uwoGtfJI.u9LcolB874AEJUzE3UITtMC','IT Technician','Galle',890),('Thisara4','Thisara','Peramuna','Thisara4@hotmail.com',714532895,'$2y$10$Zf4bUwngi242RNowA/nEPOKzQvtQVF8w2tDbu0lS9xtWmpGw6VvuO','Painter','Hambantota',2100),('Uditha73','Uditha','Alwis','alwisud@gmail.com',715669978,'$2y$10$tHROyHOYpc1yDV73H57AO.M/jT8aeuA3dVSF3hPscu6cI/Pb6oyya','Painter','Ratnapura',2100),('Upul8','Upul','Senanayake','upulsena@gmail.com',754698625,'$2y$10$WYiXMXA9u6b58ccOXc5ZhOIjNGszfPzm8uDxK6bIvHJRgAwpec1Ku','Carpenter','Hambantota',1380),('Upulk','Upul','Kithsiri','upul@gmail.com',719541238,'$2y$10$xcfvAOte7RYU/6qmKcCIqeAjS6nprC/O84uJsEptKjrqFkRj1Omwe','IT Technician','Gampaha',1610),('Venurar','Venura','Rathnapala','venura@gmail.com',785964123,'$2y$10$VUyBz0V6alBlGdxwU/.sL.u5bILvvHfGESn4uFzqpQF2egHCuU/LO','IT Technician','Ratnapura',1870),('vihangat','Vihanga ','Thathsara','vihang@gmail.com',754869845,'$2y$10$4tBivhnW3OSoLGf95agMheYBKgmrGZYRxDZHHoAd0oCj5X9.AWCGi','Mechanic','Anuradhapura',1200),('Vimukthi88','Vimukthi','Wimalarathne','vimukthi88@gmail.com',724578444,'$2y$10$G0Pv0YwZRM5vE4XXkbgCIONatHx0OpRhwj1Mbbmy34iddTPNIWQ9i','Wood Cutter','Galle',1500),('Vishwa87','Vishwa','Rathnayake','vishwa87@gmail.com',717842391,'$2y$10$4/dN9EDO2oC53KdXWQcN5u9cBtaAz383m9TteP80a.0OIMm515336','Welder','Kurunegala',1900),('VishwaM','Vishwa','Manoharan','vishwamano@gmail.com',778965234,'$2y$10$G6aJyXJBdCYEugaSPMugNecOD1tbU2IkG6RC.SJCsIaBIMlZEIzwe','Carpenter','Ratnapura',1380),('Waruna69','Waruna','Dasanayaka','waruna69@gmail.com',715186739,'$2y$10$XYMbHuyNEUcc9mxneqQcNO3POP4TtKeiW9tuXZiR5hIx/lv2uVpeW','Wood Cutter','Matara',1900),('Wasnatha78','Wasantha','Jayasinghe','wasantha78@hotmail.com',778945765,'$2y$10$3jypuFSc2Vfdh6DNa1HIj.5PCEBT/oUcm1obZl5oOVrde4bFxki7i','Plumber','Colombo',1650),('Wimal49','Wimal','Kulasinghe','wimal49@gmail.com',774467294,'$2y$10$RINTcuMuMGwNiV45oHV5zO384mqZrQsSeW5Jb1dQ07lgMwxOM8cBC','Wood Cutter','Anuradhapura',2000),('Wimal8','Wimal','Wijethilake','wimal8@gmail.com',789654968,'$2y$10$V76YNxcxauHBqRjlvQegH.Q.BUZrEPVwiynCVreLtwgEeX/Ivw4Ae','Painter','Kurunegala',2150);
/*!40000 ALTER TABLE `technician` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techskill`
--

DROP TABLE IF EXISTS `techskill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techskill` (
  `TechID` varchar(255) NOT NULL,
  `SkID` varchar(255) NOT NULL,
  PRIMARY KEY (`TechID`,`SkID`),
  KEY `techrel` (`SkID`),
  CONSTRAINT `techrel` FOREIGN KEY (`SkID`) REFERENCES `skill` (`SkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `techrel2` FOREIGN KEY (`TechID`) REFERENCES `technician` (`TechID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techskill`
--

LOCK TABLES `techskill` WRITE;
/*!40000 ALTER TABLE `techskill` DISABLE KEYS */;
INSERT INTO `techskill` VALUES ('achitha','Mech001'),('achitha','Mech002'),('achitha','Mech003'),('Ahamed10','Plum001'),('Ahamed10','Plum002'),('Ahamed10','Plum003'),('Akilas','Elec001'),('Anurad','Carp001'),('Anurad','Carp002'),('Anurad','Carp003'),('anushkas','Mech001'),('anushkas','Mech002'),('anushkas','Mech003'),('Arjun12','Pntr001'),('Arjun12','Pntr002'),('Arjun12','Pntr003'),('asankap','Mson001'),('asankap','Mson002'),('asankap','Mson003'),('AshrafM','Extr001'),('AshrafM','Extr002'),('AshrafM','Extr003'),('Asiri48','Pntr001'),('Asiri48','Pntr002'),('Asiri48','Pntr003'),('Asoka5','Plum001'),('Asoka5','Plum002'),('Asoka5','Plum003'),('Asokap','Elec001'),('Asokap','Elec003'),('Bhathiya5','Carp001'),('Bhathiya5','Carp002'),('Bhathiya5','Carp003'),('bimsarar','Mech001'),('bimsarar','Mech002'),('bimsarar','Mech003'),('binarar','Mech001'),('binarar','Mech002'),('binarar','Mech003'),('Buddid','Elec001'),('Buddid','Elec003'),('CathuraD','Elec001'),('CathuraD','Elec002'),('CathuraD','Elec003'),('Chamara79','Pntr001'),('Chamara79','Pntr002'),('Chamara79','Pntr003'),('chandanal','Mson001'),('chandanal','Mson002'),('chandanal','Mson003'),('charithr','Mson001'),('charithr','Mson002'),('charithr','Mson003'),('Chathura51','Plum001'),('Chathura51','Plum002'),('Chathura51','Plum003'),('damsanu_f','Mson002'),('danstona','Mech001'),('danstona','Mech002'),('danstona','Mech003'),('Dasun89','Wldr001'),('Dasun89','Wldr002'),('Dasun89','Wldr003'),('Deshanl','Ittc001'),('Deshanl','Ittc002'),('Deshanl','Ittc003'),('Dinukak','Ittc001'),('Dinukak','Ittc002'),('Dinukak','Ittc003'),('DinukaR','Extr001'),('DinukaR','Extr002'),('DinukaR','Extr003'),('Gayanr','Elec001'),('Gayanr','Elec002'),('Gayanr','Elec003'),('Gayath','Extr001'),('Gayath','Extr002'),('Gayath','Extr003'),('GihanR','Carp001'),('GihanR','Carp002'),('GihanR','Carp003'),('gihant','Mson001'),('gihant','Mson002'),('gihant','Mson003'),('HarithN','Extr001'),('HarithN','Extr002'),('HarithN','Extr003'),('Hemantha59','Wood001'),('Hemantha59','Wood002'),('Hemantha59','Wood003'),('Hetti456','Extr001'),('Hetti456','Extr002'),('Hetti456','Extr003'),('Isurum','Ittc001'),('Isurum','Ittc002'),('Isurum','Ittc003'),('Jayantha5','Extr001'),('Jayantha5','Extr002'),('Jayantha5','Extr003'),('John123','Ittc001'),('John123','Ittc002'),('Kalana79','Wldr001'),('Kalana79','Wldr002'),('Kalana79','Wldr003'),('Kalindu86','Wood001'),('Kalindu86','Wood002'),('Kalindu86','Wood003'),('Kalum55','Wldr001'),('Kalum55','Wldr002'),('Kalum55','Wldr003'),('Kamals','Elec001'),('Kamals','Elec002'),('Kamals','Elec003'),('kasunk','Mech001'),('kasunk','Mech002'),('kasunk','Mech003'),('kasuns','Mson001'),('kasuns','Mson002'),('kasuns','Mson003'),('Kosala12','Plum001'),('Kosala12','Plum002'),('Kosala12','Plum003'),('Kumara46','Wldr001'),('Kumara46','Wldr002'),('Kumara46','Wldr003'),('kumarak','Mech001'),('kumarak','Mech002'),('kumarak','Mech003'),('Kushana','Ittc001'),('Kushana','Ittc002'),('Kushana','Ittc003'),('Kushantha48','Wldr001'),('Kushantha48','Wldr002'),('Kushantha48','Wldr003'),('LahiruP','Mech002'),('Lakshan84','Wood001'),('Lakshan84','Wood002'),('Lakshan84','Wood003'),('Laksman','Pntr001'),('Laksman','Pntr002'),('Lankar','Ittc001'),('Lankar','Ittc003'),('Lasantha67','Wood001'),('Lasantha67','Wood002'),('Lasantha67','Wood003'),('lochanaa','Mech001'),('lochanaa','Mech002'),('lochanaa','Mech003'),('Malinda76','Wood001'),('Malinda76','Wood002'),('Malinda76','Wood003'),('MalinduF','Extr001'),('MalinduF','Extr002'),('MalinduF','Extr003'),('Malindup','Elec001'),('Malindup','Elec003'),('Milinda4','Pntr001'),('Milinda4','Pntr002'),('Milinda4','Pntr003'),('namarathnaw','Mech001'),('namarathnaw','Mech002'),('namarathnaw','Mech003'),('Nihal','Elec001'),('Nimal12','Wldr001'),('Nimal12','Wldr002'),('Nimal12','Wldr003'),('Nisha78','Plum001'),('Nisha78','Plum002'),('Nisha78','Plum003'),('Nishantha34','Wldr001'),('Nishantha34','Wldr002'),('Nishantha34','Wldr003'),('Niweera','Elec001'),('Niweera','Elec002'),('Niweera222','Plum002'),('NSilva','Elec001'),('NSilva','Elec002'),('NSilva','Elec003'),('nuraja','Mson001'),('nuraja','Mson002'),('nuraja','Mson003'),('nuwanc','Mson001'),('nuwanc','Mson002'),('nuwanc','Mson003'),('Oshanl','Ittc002'),('Oshanl','Ittc003'),('Pasindud','Ittc001'),('Pasindud','Ittc002'),('Pasindud','Ittc003'),('Pathum65','Wldr001'),('Pathum65','Wldr002'),('Pathum65','Wldr003'),('Pbandara','Carp001'),('Pbandara','Carp002'),('Pbandara','Carp003'),('Piyalg','Carp001'),('Piyalg','Carp002'),('Piyalg','Carp003'),('piyalr','Mech001'),('piyalr','Mech002'),('piyalr','Mech003'),('Piyantha65','Wldr001'),('Piyantha65','Wldr002'),('Piyantha65','Wldr003'),('Ranil12','Extr001'),('Ranil12','Extr002'),('Ranil12','Extr003'),('Rasika26','Carp001'),('Rasika26','Carp002'),('Rasika26','Carp003'),('Ruwan56','Wood001'),('Ruwan56','Wood002'),('Ruwan56','Wood003'),('Saman22','Ittc001'),('Saman222','Mson001'),('Saman222','Mson002'),('Saman222','Mson003'),('Samank','Elec001'),('SamithaBan1','Extr001'),('SamithaBan1','Extr002'),('SamithaBan1','Extr003'),('Sanjeewa21','Plum001'),('Sanjeewa21','Plum002'),('Sanjeewa21','Plum003'),('Santhush1','Plum001'),('Santhush1','Plum002'),('Santhush1','Plum003'),('sanujaw','Mech001'),('sanujaw','Mech002'),('sanujaw','Mech003'),('Shantha45','Pntr001'),('Shantha45','Pntr002'),('Shantha45','Pntr003'),('Sharukh5','Carp001'),('Sharukh5','Carp002'),('Sharukh5','Carp003'),('Shifran45','Extr001'),('Shifran45','Extr002'),('Shifran45','Extr003'),('Sirilg','Elec001'),('Sirilg','Elec002'),('Srimal','Ittc002'),('Sunil25','Plum001'),('Sunil25','Plum002'),('Sunil25','Plum003'),('Sunil49','Wood001'),('Sunil49','Wood002'),('Sunil49','Wood003'),('Sunimal5','Pntr001'),('Sunimal5','Pntr002'),('Sunimal5','Pntr003'),('Sunimal56','Carp001'),('Sunimal56','Carp002'),('Sunimal56','Carp003'),('supund','Mson001'),('supund','Mson002'),('supund','Mson003'),('Suranga15','Plum001'),('Suranga15','Plum002'),('Suranga15','Plum003'),('tharindud','Mson001'),('thidakshmag','Mson003'),('Thilinar','Ittc001'),('Thilinar','Ittc002'),('Thisara4','Pntr001'),('Thisara4','Pntr002'),('Thisara4','Pntr003'),('Uditha73','Pntr001'),('Uditha73','Pntr002'),('Uditha73','Pntr003'),('Upul8','Carp001'),('Upul8','Carp002'),('Upul8','Carp003'),('Upulk','Ittc001'),('Upulk','Ittc002'),('Upulk','Ittc003'),('Venurar','Ittc001'),('Venurar','Ittc002'),('Venurar','Ittc003'),('vihangat','Mech001'),('vihangat','Mech002'),('vihangat','Mech003'),('Vimukthi88','Wood001'),('Vimukthi88','Wood002'),('Vimukthi88','Wood003'),('Vishwa87','Wldr001'),('Vishwa87','Wldr002'),('Vishwa87','Wldr003'),('VishwaM','Carp001'),('VishwaM','Carp002'),('VishwaM','Carp003'),('Waruna69','Wood001'),('Waruna69','Wood002'),('Waruna69','Wood003'),('Wasnatha78','Plum001'),('Wasnatha78','Plum002'),('Wasnatha78','Plum003'),('Wimal49','Wood001'),('Wimal49','Wood002'),('Wimal49','Wood003'),('Wimal8','Pntr001'),('Wimal8','Pntr002'),('Wimal8','Pntr003');
/*!40000 ALTER TABLE `techskill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techtype`
--

DROP TABLE IF EXISTS `techtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techtype` (
  `typeid` varchar(100) NOT NULL,
  `typename` varchar(255) NOT NULL,
  PRIMARY KEY (`typeid`),
  UNIQUE KEY `typename` (`typename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techtype`
--

LOCK TABLES `techtype` WRITE;
/*!40000 ALTER TABLE `techtype` DISABLE KEYS */;
INSERT INTO `techtype` VALUES ('Carp','Carpenter'),('Elec','Electrician'),('Extr','Exterminator'),('Ittc','IT Technician'),('Mson','Mason'),('Mech','Mechanic'),('Pntr','Painter'),('Plum','Plumber'),('Wldr','Welder'),('Wood','Wood Cutter');
/*!40000 ALTER TABLE `techtype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-20 21:25:46
