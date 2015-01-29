CREATE DATABASE  IF NOT EXISTS `bd_etrans` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci */;
USE `bd_etrans`;
-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bd_etrans
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `etr_clients`
--

DROP TABLE IF EXISTS `etr_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_clients` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `rfc` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `businessname` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8_swedish_ci NOT NULL,
  `name_client` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `is_inactive` char(1) COLLATE utf8_swedish_ci DEFAULT '0',
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_clients`
--

LOCK TABLES `etr_clients` WRITE;
/*!40000 ALTER TABLE `etr_clients` DISABLE KEYS */;
INSERT INTO `etr_clients` VALUES (1,'Bosque de Duraznos 65','ETR010203PPT','ETRANS SA DE CV','0102030405','etrans@portoprint.com','ETRANS','0'),(2,'Bosque de duraznos 2','EST040506FB8','ESTAFETA SA DE CV','0102030405','info@estafeta.com','ESTAFETA','0'),(4,'Bosque de Duraznos 43','ABCD122334FB8','GRUPO DANONE SA DE CV','123456789','info@danone.com.mx','DANONE','0');
/*!40000 ALTER TABLE `etr_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_product`
--

DROP TABLE IF EXISTS `etr_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_product` (
  `idproduct` bigint(15) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `idclient` int(11) NOT NULL,
  `code` bigint(15) NOT NULL,
  `item` bigint(15) DEFAULT NULL,
  `idcategory` int(11) NOT NULL,
  `description` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `presentation` varchar(45) COLLATE utf8_swedish_ci DEFAULT 'ya no',
  `image` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `pu` decimal(6,2) NOT NULL,
  `pxc` smallint(5) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `heigth` decimal(6,2) DEFAULT '0.00',
  `depth` decimal(6,2) DEFAULT '0.00',
  `width` decimal(6,2) DEFAULT '0.00',
  `weight` decimal(6,2) DEFAULT '0.00',
  `stowmax` decimal(6,2) DEFAULT '0.00',
  `heigthpallet` decimal(6,2) DEFAULT '0.00',
  `weightpallet` decimal(6,2) DEFAULT '0.00',
  `is_inactive` char(1) COLLATE utf8_swedish_ci DEFAULT '0',
  `created_by` varchar(10) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`idproduct`),
  KEY `fk_etr_product_1_idx` (`idcategory`),
  KEY `fk_etr_product_2_idx` (`idclient`),
  CONSTRAINT `fk_etr_product_1` FOREIGN KEY (`idcategory`) REFERENCES `etr_product_category` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etr_product_2` FOREIGN KEY (`idclient`) REFERENCES `etr_clients` (`idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_product`
--

LOCK TABLES `etr_product` WRITE;
/*!40000 ALTER TABLE `etr_product` DISABLE KEYS */;
INSERT INTO `etr_product` VALUES (000000000000002,'2015-01-29 16:22:53',4,758104000340,NULL,2,'Botella de Agua Sport 750ml','ya no',NULL,7.50,10,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint');
/*!40000 ALTER TABLE `etr_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_product_category`
--

DROP TABLE IF EXISTS `etr_product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_product_category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `description` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_product_category`
--

LOCK TABLES `etr_product_category` WRITE;
/*!40000 ALTER TABLE `etr_product_category` DISABLE KEYS */;
INSERT INTO `etr_product_category` VALUES (1,'Alimentos',''),(2,'Bebidas no Alcoholicas',''),(3,'Bebidas Alcoholicas y Tabaco','');
/*!40000 ALTER TABLE `etr_product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_store`
--

DROP TABLE IF EXISTS `etr_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_store` (
  `idstore` int(11) NOT NULL AUTO_INCREMENT,
  `namestore` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `hrsbday` tinyint(2) DEFAULT NULL,
  `inihrsbday` tinyint(2) DEFAULT NULL,
  `finhrsbday` tinyint(2) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `idtypestore` tinyint(2) DEFAULT NULL,
  `idcomplex` tinyint(4) DEFAULT NULL,
  `address` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `colony` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cp` mediumint(6) DEFAULT NULL,
  `idcountry` int(11) DEFAULT NULL,
  `idstate` int(11) DEFAULT NULL,
  `idcity` int(11) DEFAULT NULL,
  `dimensions` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`idstore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_store`
--

LOCK TABLES `etr_store` WRITE;
/*!40000 ALTER TABLE `etr_store` DISABLE KEYS */;
/*!40000 ALTER TABLE `etr_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_store_complex`
--

DROP TABLE IF EXISTS `etr_store_complex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_store_complex` (
  `idcomplex` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `name_short` char(5) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `iduser` varchar(10) COLLATE ucs2_unicode_ci NOT NULL,
  `is_active` char(1) COLLATE ucs2_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`idcomplex`),
  KEY `fk_etr_store_complex_1_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_store_complex`
--

LOCK TABLES `etr_store_complex` WRITE;
/*!40000 ALTER TABLE `etr_store_complex` DISABLE KEYS */;
INSERT INTO `etr_store_complex` VALUES (1,'TOLUCA','TLC01','2015-01-15 00:00:00','portoprint','1'),(3,'PPT TAMAULIPAS','TML01','2015-01-23 11:02:11','portoprint','1'),(4,'Monterrey01','Mty01','2015-01-29 11:45:46','jacob','1');
/*!40000 ALTER TABLE `etr_store_complex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_store_typestore`
--

DROP TABLE IF EXISTS `etr_store_typestore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_store_typestore` (
  `idtypestore` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_swedish_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`idtypestore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_store_typestore`
--

LOCK TABLES `etr_store_typestore` WRITE;
/*!40000 ALTER TABLE `etr_store_typestore` DISABLE KEYS */;
/*!40000 ALTER TABLE `etr_store_typestore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_user`
--

DROP TABLE IF EXISTS `etr_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` char(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idusertype` int(11) NOT NULL,
  `idprofile` int(11) NOT NULL,
  `active` char(1) COLLATE utf8_spanish_ci DEFAULT '1',
  `iduser_detail` int(11) NOT NULL,
  `flag_resetpwd` varchar(45) COLLATE utf8_spanish_ci DEFAULT '0',
  `resetpwd` varchar(45) COLLATE utf8_spanish_ci DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_user`
--

LOCK TABLES `etr_user` WRITE;
/*!40000 ALTER TABLE `etr_user` DISABLE KEYS */;
INSERT INTO `etr_user` VALUES (1,1,'portoprint','73fd06a46eecdcf350e5e00b11486656','porto','print','ncastellanos@portoprint.mx',1,1,'1',0,'0','0'),(2,1,'jacob','926bae7127cfdaa9e99fecd9f02c6e8a','jacobo','salinas','jsalinas@portoprint.mx',1,1,'1',0,'0','0');
/*!40000 ALTER TABLE `etr_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-29 17:28:53
