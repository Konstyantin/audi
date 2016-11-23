-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: audi
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `engine_id` int(11) NOT NULL,
  `transmission_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `body_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `fuel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model_id_idx` (`model_id`),
  KEY `engine_id_idx` (`engine_id`),
  KEY `transmission_id_idx` (`transmission_id`),
  KEY `body_id_idx` (`body_id`),
  KEY `fuel_id_idx` (`fuel_id`),
  KEY `performance_id_idx` (`performance_id`),
  CONSTRAINT `body_id` FOREIGN KEY (`body_id`) REFERENCES `body` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `engine_id` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fuel_id` FOREIGN KEY (`fuel_id`) REFERENCES `fuel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `model_id` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `performance_id` FOREIGN KEY (`performance_id`) REFERENCES `performance` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `transmission_id` FOREIGN KEY (`transmission_id`) REFERENCES `transmission` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (1,'A5',5,6,2000,4,1,1,2),(2,'A6_Allroad',4,5,35000,5,2,2,3),(3,'A8',10,13,80000,7,3,3,4),(4,'A1_Sportback',1,1,2000,1,4,4,8),(5,'A3',2,2,22000,2,5,6,10),(6,'A3_Saloo',5,7,25000,2,6,7,11),(7,'A4',2,2,20000,3,7,8,13),(8,'A4_Allroad',2,2,10000,3,8,9,14),(9,'A4_Avant',5,7,25000,3,9,10,15),(10,'A6',4,4,30000,5,10,11,16),(11,'A6_Avant',8,11,30000,5,11,12,17),(12,'A7',6,9,40000,6,12,13,18),(13,'Q3',2,2,30000,8,13,14,20),(14,'Q5',6,9,40000,9,14,15,21),(15,'Q7',9,11,50000,10,15,16,22),(16,'RS6',10,13,60000,5,16,17,23),(17,'RS7',10,13,50000,6,17,18,24),(18,'A8L',11,14,80000,7,18,24,30),(19,'S8',10,13,80000,7,19,25,31),(20,'TT',4,4,50000,11,20,26,32),(21,'R8',19,22,200000,12,198,28,34),(22,'A1',1,1,16000,1,206,36,42);
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-23 18:15:19
