-- MySQL dump 10.13  Distrib 5.1.49, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: empleos
-- ------------------------------------------------------
-- Server version	5.1.49-3

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
-- Table structure for table `curriculum`
--

DROP TABLE IF EXISTS `curriculum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curriculum` (
  `id_curriculum` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` varchar(100) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `dui` varchar(20) DEFAULT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `direccion2` varchar(250) DEFAULT NULL,
  `estado_civil` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `mensaje_personal` varchar(250) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `estudios_basicos` varchar(100) DEFAULT NULL,
  `bachillerato` varchar(100) DEFAULT NULL,
  `est_superiores` varchar(100) DEFAULT NULL,
  `exp_laboral` varchar(100) DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `ref_personal` varchar(100) DEFAULT NULL,
  `prof_ref` varchar(100) DEFAULT NULL,
  `tel_ref` varchar(100) DEFAULT NULL,
  `mail_ref` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_curriculum`),
  KEY `id_curriculum` (`id_curriculum`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curriculum`
--

LOCK TABLES `curriculum` WRITE;
/*!40000 ALTER TABLE `curriculum` DISABLE KEYS */;
/*!40000 ALTER TABLE `curriculum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id_empresa` varchar(11) NOT NULL DEFAULT '',
  `nombre` varchar(200) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `persona_contacto` varchar(200) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `departamento` varchar(500) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `usrnivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`),
  UNIQUE KEY `id_empresa_2` (`id_empresa`),
  UNIQUE KEY `id_empresa_3` (`id_empresa`),
  KEY `id_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `leido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mensaje`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plazas`
--

DROP TABLE IF EXISTS `plazas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plazas` (
  `id_empleo` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` varchar(11) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `salario` varchar(100) DEFAULT NULL,
  `nomb_empleo` varchar(100) NOT NULL,
  `requisitos_empleo` varchar(500) DEFAULT NULL,
  `tipo_contrato` varchar(200) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `Edad_rango` varchar(15) DEFAULT NULL,
  `vehiculo` varchar(50) DEFAULT NULL,
  `depto_plaza` varchar(50) DEFAULT NULL,
  `Categoria` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_empleo`),
  KEY `id_empleo` (`id_empleo`),
  KEY `id_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plazas`
--

LOCK TABLES `plazas` WRITE;
/*!40000 ALTER TABLE `plazas` DISABLE KEYS */;
/*!40000 ALTER TABLE `plazas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitudes` (
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) DEFAULT NULL,
  `id_empleo` int(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes`
--

LOCK TABLES `solicitudes` WRITE;
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'empleos'
--
/*!50003 DROP PROCEDURE IF EXISTS `eliminarUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `eliminarUsuario`(in id_usuario int)
BEGIN

delete from mensajes where id_user = id_usuario;
delete from solicitudes where id_user = id_usuario;

set @usuario = 'select username from usuario where id_user=id_usuario';

delete from curriculum where username = @usuario; 
delete from usuario where id_user = id_usuario; 

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-09-10 14:26:32
