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
-- Table structure for table `transmission`
--

DROP TABLE IF EXISTS `transmission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transmission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `level` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transmission`
--

LOCK TABLES `transmission` WRITE;
/*!40000 ALTER TABLE `transmission` DISABLE KEYS */;
INSERT INTO `transmission` VALUES (1,'1.0 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(2,'1.4 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(4,'1.8 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(5,'1.8 TFSI TipTronic',7,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'),(6,'2.0 TDI MultiTronic',6,'Multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'),(7,'2.0 TDI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(8,'2.0 TDI TipTronic',6,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'),(9,'2.0 TFSI S Tronic',6,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(10,'2.5 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(11,'3.0 TDI TipTronic',7,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'),(12,'3.0 TFSI S Tronic',5,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(13,'4.0 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'),(14,'4.2 TDI TipTronic',7,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'),(22,'5.2 FSI S Tronic ',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.');
/*!40000 ALTER TABLE `transmission` ENABLE KEYS */;
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
