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
-- Table structure for table `fuel`
--

DROP TABLE IF EXISTS `fuel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urban` float NOT NULL,
  `extra_urban` float NOT NULL,
  `combined` float NOT NULL,
  `emission` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuel`
--

LOCK TABLES `fuel` WRITE;
/*!40000 ALTER TABLE `fuel` DISABLE KEYS */;
INSERT INTO `fuel` VALUES (1,2,200,200,'2,5-2,6'),(2,8.6,12.3,10.2,'172-176'),(3,5.1,7.1,5.9,'164–159'),(4,8.9,16.5,13,'164–159'),(5,29.9,10,10,'10'),(6,29.9,10,10,'10'),(7,29.9,10,10,'10'),(8,3.8,5.4,4.4,'164–159'),(9,10,10,10,'10123'),(10,4.3,6,4.9,'164–159'),(11,4.4,6,4.9,'164–159'),(12,10,10,10,'123132'),(13,4.5,6.8,5.3,'164–159'),(14,4.6,10.1,7.6,'164–159'),(15,5.2,10.6,7.3,'164–159'),(16,5,5.7,7.1,'164–159'),(17,5.2,6.4,5.6,'164–159'),(18,4.5,6.6,5.3,'164–159'),(19,10,10,10,'10123'),(20,5.1,7.1,5.8,'164–159'),(21,6.5,9.4,7.7,'164–159'),(22,5.1,6.1,5.5,'164–159'),(23,7.4,9.6,13.4,'164–159'),(24,7.3,13.5,9.5,'164–159'),(25,6.7,12,9.2,'172-176'),(26,20,20,20,'20123'),(27,12,12,12,'12131'),(28,20,20,20,'20121'),(29,12,12,12,'21131'),(30,7.2,9,12.8,'164–159'),(31,7.3,13.6,9.4,'164–159'),(32,4.8,6.8,5.7,'164–159'),(33,20,20,20,'12313'),(34,8.4,16.7,11.4,'164–159'),(38,10,10,10,'10asd'),(42,5.6,8.2,6.6,'170-120');
/*!40000 ALTER TABLE `fuel` ENABLE KEYS */;
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
