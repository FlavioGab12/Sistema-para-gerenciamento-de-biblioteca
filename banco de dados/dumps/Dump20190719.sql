CREATE DATABASE  IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `biblioteca`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: biblioteca
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `cadastro_livro`
--

DROP TABLE IF EXISTS `cadastro_livro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro_livro` (
  `id_titulo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `editora` varchar(100) DEFAULT NULL,
  `ano` varchar(20) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_titulo`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_livro`
--

LOCK TABLES `cadastro_livro` WRITE;
/*!40000 ALTER TABLE `cadastro_livro` DISABLE KEYS */;
INSERT INTO `cadastro_livro` VALUES (7,'Harry Potter','J. K. Rowling','Bloomsbury Publishing','1999-07-08','Fantasia'),(6,'InvocaÃ§Ã£o do mal','Gary Dauberman','DiÃ¡rio Macabro','2019-05-30','Terror'),(5,'Adulterio','Paulo Coelho','Sextante','2012-11-11','FicÃ§Ã£o'),(8,'Querido John','Nicholas Sparks','Warner Books','2007-10-07','Suspense'),(9,'O milagre','Nicholas Sparks','Agir','2005-01-01','Romance'),(10,'Gueixa','Arhur Golden','Arqueiro','2005-02-24','FicÃ§Ã£o histÃ³rica'),(11,'It A Coisa','Stephen King','Viking Press','1986-09-15','Terror'),(12,'A Menina que Rouba Livros','Markus Zusak','Picador/Pan Macmillan','2005-09-01','Drama');
/*!40000 ALTER TABLE `cadastro_livro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editora`
--

DROP TABLE IF EXISTS `editora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editora` (
  `id_editora` int(11) NOT NULL AUTO_INCREMENT,
  `editora` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `cnpj` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_editora`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editora`
--

LOCK TABLES `editora` WRITE;
/*!40000 ALTER TABLE `editora` DISABLE KEYS */;
INSERT INTO `editora` VALUES (3,'Saraiva','SÃ£o Paulo','2812382','saraiva@gmail.com'),(5,'Uni Duni','Belo Horizonte','33094272','uniDunieditora@gmail.com');
/*!40000 ALTER TABLE `editora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emprestimo`
--

DROP TABLE IF EXISTS `emprestimo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emprestimo` (
  `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `livro` varchar(200) DEFAULT NULL,
  `aluno` varchar(200) DEFAULT NULL,
  `dataEM` date DEFAULT NULL,
  `dataDEV` date DEFAULT NULL,
  PRIMARY KEY (`id_emprestimo`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emprestimo`
--

LOCK TABLES `emprestimo` WRITE;
/*!40000 ALTER TABLE `emprestimo` DISABLE KEYS */;
INSERT INTO `emprestimo` VALUES (21,'Gueixa','Bruna ','2019-07-18','2019-08-02'),(22,'A Menina que Rouba Livros','Ana Beatriz','2019-07-18','2019-07-30'),(6,'InvocaÃ§Ã£o do mal','FlÃ¡vio gabriel','2019-07-18','2019-07-24');
/*!40000 ALTER TABLE `emprestimo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero`
--

DROP TABLE IF EXISTS `genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` VALUES (1,'ficÃ§Ã£o Policial'),(5,'Animacao'),(4,'ComÃ©dia'),(6,'Fantasia');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inc_funcionario`
--

DROP TABLE IF EXISTS `inc_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inc_funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `data` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inc_funcionario`
--

LOCK TABLES `inc_funcionario` WRITE;
/*!40000 ALTER TABLE `inc_funcionario` DISABLE KEYS */;
INSERT INTO `inc_funcionario` VALUES (13,'FlÃ¡vio','3233','flavio@gmail','21/11/2000','Analista senior','32323','1232312','Ludgero','21','','Conjunto Taquaril','MG'),(19,'JosÃ©','10209008989','flavio','2001-12-12','Porteiro','3134848997','345095876','Cruzeiro','28','1234','Taquaril','MG');
/*!40000 ALTER TABLE `inc_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incluir_aluno`
--

DROP TABLE IF EXISTS `incluir_aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incluir_aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `aluno` varchar(200) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `data` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incluir_aluno`
--

LOCK TABLES `incluir_aluno` WRITE;
/*!40000 ALTER TABLE `incluir_aluno` DISABLE KEYS */;
INSERT INTO `incluir_aluno` VALUES (1,'FlÃ¡vio gabriel','15089234698','flavio@gmail.com','2000-11-21','31982816752','30290650','Ludgero','64','Conjunto Taquaril','MG'),(3,'Bruna ','281278485953','bruna@gmail.com','2000-04-22','3182345490','30290630','Aeroporto','117','Conjunto Taquaril','MG'),(11,'Ana Beatriz','12007908979','anabeatriz21@gmail.com','2000-02-13','31999920648','30560069','Floresta','11','Taquaril','MG');
/*!40000 ALTER TABLE `incluir_aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'flavio','1234');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-19 14:58:12
