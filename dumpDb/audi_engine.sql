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
-- Table structure for table `engine`
--

DROP TABLE IF EXISTS `engine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `engine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `num_cylinders` int(11) NOT NULL,
  `displacment` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `rmp` int(11) NOT NULL,
  `torque` int(11) NOT NULL,
  `compression` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engine`
--

LOCK TABLES `engine` WRITE;
/*!40000 ALTER TABLE `engine` DISABLE KEYS */;
INSERT INTO `engine` VALUES (1,'1.0 TFSI',3,999,100,3,3500,16,'The 1.0 TFSI, the first ever three-cylinder gasoline engine in the history of the Audi brand, has a combined fuel consumption of just 4.2 liters per 100 kilometers (56.0 US mpg), which equates to 97 grams CO2 per kilometer (156.1 g/mi). The three-cylinder diesel, the 1.4 TDI with 66 kW (90 hp), attains an NEDC fuel consumption figure of 3.6 liters of fuel per 100 kilometers (65.3 US mpg) and emits 94 grams CO2 per kilometer (151.3 g/mi). And the 1.4 TFSI COD features as a highlight the cylinder on demand system (COD), which enables temporary cylinder shut-off when the engine is operating at partial load.'),(2,'1.4 TFSI',4,1395,140,3500,250,16,'Powertrain\r\nSeven engines are available for selection – five TFSIs and two TDIs. The 1.0 TFSI, the first ever three-cylinder gasoline engine in the history of the Audi brand, has a combined fuel consumption of just 4.2 liters per 100 kilometers (56.0 US mpg), which equates to 97 grams CO2 per kilometer (156.1 g/mi). The three-cylinder diesel, the 1.4 TDI with 66 kW (90 hp), attains an NEDC fuel consumption figure of 3.6 liters of fuel per 100 kilometers (65.3 US mpg) and emits 94 grams CO2 per kilometer (151.3 g/mi). And the 1.4 TFSI COD features as a highlight the cylinder on demand system (COD), which enables temporary cylinder shut-off when the engine is operating at partial load.'),(3,'1.6 TDI',4,1395,140,6000,250,16,'\r\nAudi customers will be informed in the coming weeks and months about how their cars will be retrofitted. The cars affected are Audi models with 1.6?liter or 2.0?liter TDI diesel engines of the type EA 189 and certified according to the European emission standard EU5. These cars continue to be roadworthy and technically safe without any restrictions.\r\n\r\nThe 1.6-liter and 2.0?liter TDI engines certified according to the new EU6 emission standard are not affected. The same applies to V6 and V8 TDI engines, irrespective of whether they are certified according to EU5 or EU6. \r\n'),(4,'1.8 TFSI',4,1798,180,320,320,16,'TDI engines ranging in output from 140 kW (190 hp) comprise the engine . The 1.8 TDI ultra S tronic with 140 kW (190 hp) are the most efficient variants, with combined fuel consumption figures of 4.5 – 4.2 liters per 100 kilometers (52.3 – 56.0 US mpg) and emissions of 119 – 109 grams CO2 per kilometer (191.5 – 175.4 g/mi). '),(5,'2.0 TDI',4,1489,150,6000,250,16,'The 2.0 TDI ultra S tronic with 110 kW (150 hp) and 140 kW (190 hp) are the most efficient variants, with combined fuel consumption figures of 4.5 – 4.2 liters per 100 kilometers (52.3 – 56.0 US mpg) and emissions of 119 – 109 grams CO2 per kilometer (191.5 – 175.4 g/mi).'),(6,'2.0 TFSI',4,1984,190,4200,320,16,'The 2.0 TFSI ultra with 140 kW (190 hp) utilizes a new combustion method. It makes the car especially efficient and allows a CO2 level of 109 grams per kilometer (175.4 g/mi) and a fuel consumption level of 4.8 liters per 100 kilometers (49.0 US mpg).'),(7,'2.5 TFSI',123,123,123,123,123,123,'The new 2.5 TFSI outputs 294 kW (400 hp) – 33 hp more than its predecessor. That makes it the most powerful five-cylinder engine on the world market. Its 480 Nm (354.0 lb-ft) of torque is available at engine speeds between 1,700 and 5,850 revolutions per minute for outstanding tractive power. The compact RS model sprints from 0 to 100 km/h (62.1 mph) in just 4.1 seconds. It can attain a maximum speed of 250 km/h (155.3 mph); on request Audi will increase the electronically limited top speed to 280 km/h (174.0 mph).'),(8,'3.0 TDI',6,2000,200,6000,580,16,'The 3.0 TDI ultra boasts a combined fuel consumption of just 4.8 – 4.7 liters per 100 kilometers (49.0 – 50.0 US mpg) on average – a CO2 equivalent of 126 – 122 grams per kilometer (202.8 – 196.3 g/mi).'),(9,'3.0 TFSI',6,3330,333,6000,580,16,'New solutions in networking and assistance systems round out its features. Audi is transferring many technologies from the full-size class into the mid-size class.The powerful core of the two new S models from Audi is a newly designed 3.0 TFSI engine. The direct gasoline injection engine with turbocharging has an output of 260 kW (354 hp) and produces a hefty torque of 500 Nm (368.8 lb-ft) from 1,370 to 4,500 rpm. In terms of power and torque it surpasses the previous model, while its weight and fuel consumption are considerably lower.'),(10,'4.0 TFSI',8,3993,412,5700,570,16,'4.0 TFSI engine with 445 kW (605 hp) and – thanks to the overboost feature – up to 750 Nm (553.2 lb-ft) of torque push acceleration to the super sports car level.'),(11,'4.2 TDI',13,132,12,213,123,231,'The TFSI and the two TDI engines that are available in the Audi A8 exhibit impressive power, smooth running and efficiency. With the 4.0 TFSI, the cylinder on demand (COD) system deactivates four cylinders when under partial load. The 4.2 TDI engine delivers a mighty 850 Nm (626.9 lb-ft) of torque to the crankshaft.'),(19,'5.2 FSI',10,5204,540,8250,540,16,'V-shaped 10-cylinder gasoline engine with a combined injection of fuel into the intake manifold and direct injection into the combustion chamber');
/*!40000 ALTER TABLE `engine` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-23 18:15:18
