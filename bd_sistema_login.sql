CREATE DATABASE  IF NOT EXISTS `bd_sistema_login` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bd_sistema_login`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_sistema_login
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Daniel Oliveira','danielsapup3@gmail.com','sapup3','$2y$10$QH1BI9X1tgbSw7nGmINgJuidBGUCbjiGrccXeVfP01q2Cq6eKS2pa'),(2,'Yusuke Urameshi','yusuke@yuyu.com','urameshi','$2y$10$YbUI5/4HxyN05QAqs9KtiuLa4y6uPHkXTPMQjUuxFV0Gj.OIMtQEm'),(3,'Kazuma Kuwabara','Kuwabara@yuyu.com','Kazuma','$2y$10$SB46ckjqy4Kloohog07NfOpBCUkcyIp2zKMFAvYrxG0DRC3ZD99jG'),(4,'Hiei','Hiei@yuyu.com','Hiei','$2y$10$pdSMqnCAZ0HxsSk1jg6jGOggwBXqQELckmvWR8I1Pu3RYQ5JPPWse'),(5,'Kurama Youko','Kurama@yuyu.com','Kurama','$2y$10$iR5/dBypGyp7SRfn6qJUdu02qDK5Xg9pxyHVy955i6nDJwvZC.FUu'),(6,'Botan','Botan@yuyu.com','Botan','$2y$10$XwSlJQ4P5CSifD5Qp.tAoORb5JFHTmQgg4TAKK73Nx43jSio/s3s.'),(7,'Genkai','Genkai@yuyu.com','Mestra Genkai','$2y$10$vPH5OAWkxQUGjsGl/LvnYuVJO2jWUSRZds/PjU8eNFu4MGWmtYPEO'),(8,'Keiko Yukimura','Keiko@yuyu.com','Keiko Yukimura','$2y$10$RrcxKDOPAC6EQbOd2i/78ODtSNv1HWdMGACRRqm.rebvu9WU.w9IC'),(9,'Shinobu Sensui','Sensui@yuyu.com','Shinobu Sensui','$2y$10$CDmflcVD8IH1xsS6LtTK5.37wzMLdK5Lix1ZyGgT1WWChDtR.u0v.'),(10,'Raizen','Raizen@yuyu.com','Raizen','$2y$10$naejYDsiChK8tjegSbHk1ux0tFIjmPNOiwDrwLJkPnHwZwuiFzC9i');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bd_sistema_login'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-15 15:11:54
