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
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Inspection','<p>Dear car owner Audi!</p>\r\n<p>To reduce the time required to transfer your car for maintenance and service process optimization of the car, please fill out the form below form.<br /><br />Please note the list of documents required for ordering clothes-:</p>\r\n<p><strong>For individuals:</strong></p>\r\n<ul>\r\n<li>certificate of registration of the vehicle</li>\r\n<li>document identification or driver\'s license</li>\r\n<li>power of attorney to driving, if the car owner is not the customer</li>\r\n<li>power of attorney to carry out repair work (notarized) and passport, if order-attire signed on behalf of the owner is not the owner of the car</li>\r\n</ul>\r\n<p><strong>For legal entities:</strong></p>\r\n<ul>\r\n<li>certificate of registration of the vehicle</li>\r\n<li>power of attorney from the organization (on letterhead, signed by a certified manager and chief accountant, if required by law, and the seal of the organization)</li>\r\n<li>binding instrument identification (ie passport)</li>\r\n</ul>\r\n<p>In orders to carry out repairs to vehicles should be registered representative\'s authority to transfer vehicle maintenance and repair and make the results of these works, sign in order-attire to perform diagnostic and repair work, make and sign in sheets view, taking the car, order and on behalf of the owner to get spare parts and car accessories, and more.</p>\r\n<p>Thank you for understanding!</p>'),(2,'Test Drive','<p>Dear car owner Audi!</p>\r\n<p>To reduce the time required to transfer your car for maintenance and service process optimization of the car, please fill out the form below form.<br /><br />Please note the list of documents required for ordering clothes-:</p>\r\n<p><strong>For individuals:</strong></p>\r\n<ul>\r\n<li>certificate of registration of the vehicle</li>\r\n<li>document identification or driver\'s license</li>\r\n<li>power of attorney to driving, if the car owner is not the customer</li>\r\n<li>power of attorney to carry out repair work (notarized) and passport, if order-attire signed on behalf of the owner is not the owner of the car</li>\r\n</ul>\r\n<p><strong>For legal entities:</strong></p>\r\n<ul>\r\n<li>certificate of registration of the vehicle</li>\r\n<li>power of attorney from the organization (on letterhead, signed by a certified manager and chief accountant, if required by law, and the seal of the organization)</li>\r\n<li>binding instrument identification (ie passport)</li>\r\n</ul>\r\n<p>In orders to carry out repairs to vehicles should be registered representative\'s authority to transfer vehicle maintenance and repair and make the results of these works, sign in order-attire to perform diagnostic and repair work, make and sign in sheets view, taking the car, order and on behalf of the owner to get spare parts and car accessories, and more.</p>\r\n<p>Thank you for understanding!</p>'),(3,'Garantee','<p><span id=\"result_box\" class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\">Centralized traffic assistance program Audi pozvolyt You Receive services in Saving mobylnosty uniform kachestvennoho urovnja vsey on the territory of Ukraine.<br /></span></span></p>\r\n<p><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span id=\"result_box\" class=\"\" lang=\"en\"><span title=\"???????? ???????????? ?????????\r\n\r\n\">Main Benefits Programs<br /><br /></span><span title=\"???????? ?????????: ? ??????? 2 ??? ????? ??????? ?????????? ? ?????? ??? ??? ??????? ?????????? ???????? ??? ??????????? ???????????? ???????????? ?? ????? ???, ?? ?????? ?? ???????????? ? ?????????????? ?????????, ??????? ????? ?????????? ?? ??????.\r\n\r\n\">The programme: within 2 years after buying the car and every year at the conclusion of the Treaty with the passage of the maintenance in our service, you may not have to worry about unexpected situations that can arise on the road.<br /><br /></span><span title=\"???????? ??????: 0800 500 000 ??? ??????????? ? ??????? 2 ??? ????? ??????? ? +380 44 581 9996 ??? ??????????????? ???????????.\r\n\r\n\">Information service hours: the service offers support in the program. Phone service: 0800 500 000 for cars for 2 years after purchase and +380 44 581 9996 for post-warranty cars.<br /></span><span title=\"????? ???????????? ??????????? ?? ?????: ? ????????, ????? ??? ?????????? ?? ????? ?????????? ????????, ??? ????? ????????????? ??????????? ??????: ?? ???????? ??????? ?? ?????????? ??????????? ????? ?? ?????.\r\n\r\n\"><br /></span><span title=\"?????????????? ?????????: ???? ?????? ???????? ?? ????? ??????????, ? ??? ????? ????????? ????????? ??? ??????????????? ?????? ?????????? ? ????????? ????????? ????? Audi.\r\n\r\n&nbsp;\">The evacuation: if you cannot resolve the problem on the spot is impossible, you will be sent a tow truck to transport your car to the nearest Audi service center.<br /><br />&nbsp;</span><span title=\"?????????? ???????????: ?? ?????? ?????????? ??????????? ?????????? ????????? ????????????? ?????????? ?????? ?? ??????? ????????????? ????????????? ??????? ?????????? ????? ???????????: ?????? ????? ?????, ?????????? ? ?????????, ???????????? ????- ? ?/? ???????, ??????????? ??? ??????????? ?????? ??????????? ??? ??????????? ?????.\">Mobylnosty Saving: The case of absence Opportunity to quickly ustranyt neyspravnost prohrammoy assistance on the roads predusmotren? raznoobrazn?e Methods Saving your mobylnosty: payment services taxes, of accommodation in the inn, and the purchase avya- / Railway byletov, neobhodym?h for prodolzhenyya vasheho puteshestvyya Or return of Home.</span></span></span></span></p>\r\n<p><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span class=\"\" lang=\"en\"><span id=\"result_box\" class=\"\" lang=\"en\"><span class=\"\">Audi</span> Centre Kharkov Vostok raspolahaet sobstvenn?m podmenn?h park cars at a <span class=\"\">Time</span> Can repair <span class=\"\">Suggest</span> <span class=\"\">polnotsennuyu</span> replacement Vashem Audi.</span></span></span></span></p>\r\n<p><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span id=\"result_box\" class=\"\" lang=\"en\">Question of Provision podmennoho car reshaetsya individually in order in dependence from complexity of time and repair works, as well as availability svobodn?h podmenn?h cars in the park. In order to take advantage Avto dannoy usluhoy Or Get More podrobnuyu Neagh at the info, pozvonyte by phone +38 057 717 0000</span></span></span></span></span></p>\r\n<p style=\"text-align: left;\"><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span id=\"result_box\" class=\"\" lang=\"en\"><span class=\"\">Notwithstanding</span> Provision <span class=\"\">podmennoho</span> <span class=\"\">car</span> Audi Centre Kharkov Vostok Can you <span class=\"\">Suggest</span> Additional services in Saving <span class=\"\">mobylnosty</span>:</span></span></span></span></span></span></p>\r\n<ul>\r\n<li style=\"text-align: left;\"><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\">talk taxes</span></span></span></span></span></span></span></li>\r\n<li style=\"text-align: left;\"><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span id=\"result_box\" class=\"\" lang=\"en\">technical assistance.</span></span></span></span></span></span></span></li>\r\n<li style=\"text-align: left;\"><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span id=\"result_box\" class=\"\" lang=\"en\">Services wandered, recovery after car repair</span></span></span></span></span></span></span></span></li>\r\n<li style=\"text-align: left;\"><span class=\"\" lang=\"en\"><span title=\"???????????????? ????????? ?????? ?? ??????? Audi ???????? ??? ???????? ?????? ?? ?????????? ??????????? ??????? ????????????? ?????? ?? ???? ?????????? ???????.\r\n\r\n\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span class=\"\" lang=\"en\"><span id=\"result_box\" class=\"\" lang=\"en\">Provision rent a car</span></span></span></span></span></span></span></span></span></li>\r\n</ul>'),(4,'Insurance','<p>Adrian Flux offers specialist vehicle insurance to a wide range of vehicles, including all varieties of Audi. Audi are renowned for the quality of their product and produce a range of cars beloved by enthusiasts, which is why we have great rates for Audi owners, regardless of whether the car is a modified A3, a beefy Q7 or Audi\'s own supercar, the R8. Many insurance companies seem to unfairly penalise Audis, seeing them as high risk, or expensive to repair. At Adrian Flux, we know that Audi owners tend to be genuine enthusiasts, who appreciate good quality and impressive performance, so whether you are looking for Audi TT insurace RS4 insurance or you want to insure an Audi A2, we have a product that will suit your needs, and your wallet.</p>\r\n<p>Audi have always made quality and technology the defining features of their cars, and this \'vorsprung durch technik\' is what makes Audis so special. This is what scares many insurance companies, who worry about expensive replacement parts and accident rates. It is also what attracts enthusiasts to Audi cars, and, because we know that Audi owners love their cars and tend to take extra special care of them, we can offer low rates and big discounts - especially to drivers who can demonstrate their enthusiasm.</p>\r\n<ul>\r\n<li>Protected NCB available</li>\r\n<li>Driving of other cars cover available</li>\r\n<li>90 days European Green Card Cover</li>\r\n<li>Agreed value cover available for modified or classic Audi cars.</li>\r\n<li>Cover available for\r\n<ul>\r\n<li>Classic Audi insuarnce</li>\r\n<li>Audi TT insuarnce</li>\r\n<li>Audi R8 Insurance</li>\r\n<li>Audi RS4 Insurance, RS6 and RS2.</li>\r\n<li>Insurance for 4x4 &amp; Offroad vehicles, including Q5 &amp; Q7</li>\r\n<li>All Audi Quattro models</li>\r\n<li>All Audi A8 models including W12</li>\r\n<li>Everything else - A2, A3, A4, A5, A6, S3, S4, S5, S6, S8, 80, 90, 100, 200</li>\r\n<li>Modified Audi Insurance</li>\r\n<li>Left hand drive models are not a problem.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>Extra Discounts (depending on scheme) for:</p>\r\n<ul>\r\n<li>Limited Mileage</li>\r\n<li>Owners Club Members</li>\r\n<li>Security Precautions</li>\r\n<li>Classic Vehicles</li>\r\n<li>Experience of driving performance models (where appropriate)</li>\r\n<li>Special discounted schemes for Audis</li>\r\n</ul>\r\n<h3><strong>Save Money on Audi Insurance</strong></h3>\r\n<p>Because our staff are used to finding policies to suit unusual and even completely unique cars, they know which insurers offer the best policies and at prices to suit almost any budget. All seasoned insurance experts, they will calculate your premium individually, using their expert knowledge of the many insurance schemes on offer. When you call us you will be speaking to a knowledgeable enthusiast, based in the UK, rather than a computer rate from a foreign call centre, which doesn\'t know an RS4 from an S-Line. Along with our tailor made schemes we believe we offer the best quotation service a</p>');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
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