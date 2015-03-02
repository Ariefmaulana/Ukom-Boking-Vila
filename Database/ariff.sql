-- MySQL dump 10.13  Distrib 5.6.21, for Win32 (x86)
--
-- Host: localhost    Database: boking
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2015_02_16_212812_create_table_regiss',1),('2015_02_16_212950_create_table_reservasi',1),('2015_02_17_040313_create_table_regiss',2),('2015_02_25_023656_create_table_reservasii',3),('2015_02_25_042046_create_table_reservasii',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regiss`
--

DROP TABLE IF EXISTS `regiss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regiss` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regiss`
--

LOCK TABLES `regiss` WRITE;
/*!40000 ALTER TABLE `regiss` DISABLE KEYS */;
/*!40000 ALTER TABLE `regiss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservasis`
--

DROP TABLE IF EXISTS `reservasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservasis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namavila` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noktp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notelepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namadepan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namabelakang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kotaasal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservasis`
--

LOCK TABLES `reservasis` WRITE;
/*!40000 ALTER TABLE `reservasis` DISABLE KEYS */;
INSERT INTO `reservasis` VALUES (1,'Villa Cempaka, Bali','2015-02-27','2015-02-28','342','23','hh','hh','h','hh','hhhhhhhhhh','2015-02-24 21:40:36','2015-02-24 21:40:36'),(2,'D\'Yellow Villas, Lombok','2015-02-19','2015-02-21','7','7','f','f','f','f','f','2015-02-24 21:41:04','2015-02-24 21:41:04'),(4,'Villa Kamboja, Bromo','2015-02-27','2015-02-28','0987','0987','RM@gmail.com','jakarta','r','j','jakarta','2015-02-24 23:48:58','2015-02-24 23:48:58'),(5,'Villa Cempaka, Bali','2015-02-26','2015-02-28','35','35','ariefvanvoelo@ymail.com','pulo','arif','maul','jaktim','2015-02-25 00:37:35','2015-02-25 00:37:35'),(6,'Villa Kayu Manis, Anyer','2015-02-26','2015-02-27','3121','089241412','ariefvanvoelo@ymail.com','pulo','arif','maulana','jakarta','2015-02-25 02:14:55','2015-02-25 02:14:55');
/*!40000 ALTER TABLE `reservasis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-27 13:07:05
