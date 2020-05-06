-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cadastro
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.6-MariaDB

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
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` text DEFAULT NULL,
  `carga` int(10) unsigned DEFAULT NULL,
  `totaulas` int(10) unsigned DEFAULT NULL,
  `ano` year(4) DEFAULT 2020,
  PRIMARY KEY (`idcurso`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'HTML5','Curso de HTML5',40,42,2017),(2,'CSS3','Curso de CSS3',30,27,2018),(3,'PHP7','Curso de PHP7',34,116,2019),(4,'JAVA','Curso de JAVA',40,76,2020),(6,'PHPMyAdmin','Curso de PHPMyAdmin',60,70,2014),(7,'JavaScript','Curso básico de JavaScript',45,78,2018),(8,'Yoga','Curso avançado de Yoga',40,56,2019),(9,'DreamWiver','Curso básico de DreamWiver',20,32,2013),(10,'Python','Curso Avançado de Python',60,89,2020),(11,'YouTuber','Curso básico para Youtubers',10,22,2016),(12,'Word','Curso Completo de Word',50,75,2014),(13,'LibreOffice','Curso Completo sobre LibreOffice',50,100,2012),(14,'KungFu','Curso Avançado de KungFu',70,80,2021),(15,'POO','Curso de Programação Orientada a Objetos',60,35,2016),(16,'Excel','Curso completo de Excel',40,30,2017),(17,'Responsividade','Curso de Responsividade',30,15,2018),(18,'C++','Curso de C++ com Orientação a Objetos',40,25,2017),(19,'C#','Curso de C#',30,12,2017),(20,'Android','Curso de Desenvolvimento de Aplicativos para Android',60,30,2018),(21,'Ruby','Curso de Ruby',35,18,2017),(22,'PowerPoint','Curso completo de PowerPoint',30,12,2018),(23,'Swift','Curso de Desenvolvimento de Aplicativos para iOS',60,30,2019),(24,'Hardware','Curso de Montagem e Manutenção de PCs',30,12,2017),(25,'Redes','Curso de Redes para Iniciantes',40,15,2016),(26,'Segurança','Curso de Segurança',15,8,2018),(27,'Modelagem de Dados','Curso de Modelagem de Dados',30,12,2020),(28,'HTML4','Curso Básico de HTML, versão 4.0',20,9,2010),(29,'PHP7 MASTER','Curso de PHP Avançado, versão 7.0',40,20,2020),(30,'PHP4','Curso de PHP, versão 4.0',30,11,2010);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gafanhoto_assiste_curso`
--

DROP TABLE IF EXISTS `gafanhoto_assiste_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gafanhoto_assiste_curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `idgafanhoto` int(11) DEFAULT NULL,
  `idcurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idgafanhoto` (`idgafanhoto`),
  KEY `idcurso` (`idcurso`),
  CONSTRAINT `gafanhoto_assiste_curso_ibfk_1` FOREIGN KEY (`idgafanhoto`) REFERENCES `gafanhotos` (`id`),
  CONSTRAINT `gafanhoto_assiste_curso_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `cursos` (`idcurso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gafanhoto_assiste_curso`
--

LOCK TABLES `gafanhoto_assiste_curso` WRITE;
/*!40000 ALTER TABLE `gafanhoto_assiste_curso` DISABLE KEYS */;
INSERT INTO `gafanhoto_assiste_curso` VALUES (1,'2014-02-01',1,2),(2,'2015-12-22',3,6),(3,'2017-12-09',22,12),(4,'2020-05-06',1,19);
/*!40000 ALTER TABLE `gafanhoto_assiste_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gafanhotos`
--

DROP TABLE IF EXISTS `gafanhotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gafanhotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `prof` varchar(20) NOT NULL DEFAULT ' ',
  `nascimento` date DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `nacionalidade` varchar(20) DEFAULT 'Brasil',
  `cursopreferido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cursopreferido` (`cursopreferido`),
  CONSTRAINT `gafanhotos_ibfk_1` FOREIGN KEY (`cursopreferido`) REFERENCES `cursos` (`idcurso`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gafanhotos`
--

LOCK TABLES `gafanhotos` WRITE;
/*!40000 ALTER TABLE `gafanhotos` DISABLE KEYS */;
INSERT INTO `gafanhotos` VALUES (1,'Godofredo','Dentista','1984-01-02','M',78.50,1.83,'Brasil',6),(2,'Maria','Doméstica','1987-06-30','F',66.50,1.66,'Portugal',6),(3,'Creuza','Secretária','1990-08-20','F',66.50,1.57,'Brasil',7),(4,'Adalgiza','Faxineira','1990-11-26','F',83.20,1.68,'Irlanda',2),(5,'Antônieta','Pregadora','1990-10-26','F',69.89,1.73,'Brasil',3),(6,'Adonis','Construtor','1984-04-07','M',85.00,1.77,'Alemanha',21),(7,'Romario','Jogador de Futebol','1998-09-12','M',89.70,2.05,'Romênia',22),(8,'Wesley','Analista de Dados','1999-02-08','M',62.00,1.77,'Brasil',20),(9,'Aline','Secretária','1997-02-22','F',62.40,1.63,'Brasil',29),(10,'André','Minerador','1976-09-22','F',69.40,1.68,'Brasil',12),(11,'Emerson','Médico','1991-12-01','M',98.32,1.88,'Canadá',11),(12,'Gisele Palmer','Cientista','1981-07-09','F',64.40,1.70,'Brasil',10),(13,'Antônio Lobato','Contador','1990-09-05','M',121.00,1.99,'Brasil',8),(14,'Andreia','Gestora','1987-06-29','F',63.76,1.59,'Brasil',14),(15,'Leonardo','Escritor','1999-12-09','M',109.87,1.89,'Brasil',13),(16,'Victor Menezes','Jogador de Basquete','1986-11-18','M',101.14,1.98,'Brasil',15),(17,'Melissa','Esteticista','1998-10-27','F',60.70,1.58,'França',17),(18,'Janaína','Estudante','2000-03-11','F',59.10,1.65,'Brasil',18),(19,'José','Professor de Musica','1996-05-02','M',76.30,1.75,'Brasil',19),(20,'Felipe','Encanador','1986-12-31','M',89.90,1.99,'Brasil',20),(21,'Fernando','Minerador de Bitcoin','1979-08-12','M',89.10,1.79,'Argentina',21),(22,'Talita Nascimento','Farmacêutico','1999-12-30','F',55.20,1.65,'Portugal',22),(23,'Emerson Gabriel','Programador','1920-12-30','M',50.20,1.65,'Moçambique',23),(24,'Lucas Damasceno','Auxiliar Administrat','1930-11-02','M',63.20,1.75,'Irlanda',24),(25,'Leila Martins','Farmacêutico','1975-04-22','F',99.00,2.15,'Brasil',25),(26,'Letícia Neves','Programador','1999-12-03','F',87.00,2.00,'Brasil',26),(27,'Janaína Couto','Auxiliar Administrat','1987-11-12','F',75.40,1.66,'EUA',27),(28,'Carlisson Rosa','Professor','2010-08-01','M',78.22,1.98,'Brasil',28),(29,'Jackson Telles','Programador','1999-01-23','M',55.75,1.33,'Portugal',29),(30,'Danilo Araujo','Dentista','1975-12-10','M',99.21,1.87,'EUA',30),(31,'Karine Ribeiro','Empreendedor','1988-10-01','F',42.10,1.65,'Brasil',30),(32,'Roberto Luiz Debarba','Ator','2007-01-09','M',77.44,1.56,'Brasil',29),(33,'Jarismar Andrade','Dentista','2000-06-23','F',63.70,1.33,'Brasil',28),(34,'Janaina Oliveira','Professor','1955-03-12','F',52.90,1.76,'Canadá',27),(35,'Márcio Mello','Programador','2011-11-20','M',54.11,1.55,'EUA',26),(36,'Robson Rodolpho','Auxiliar Administrat','2000-08-08','M',110.10,1.76,'Brasil',25),(37,'Daniele Moledo','Empreendedor','2006-08-11','F',101.30,1.99,'Brasil',24),(38,'Neto Sophiate','Ator','1996-05-17','M',59.28,1.65,'Portugal',23),(39,'Neriton Dias','Auxiliar Administrat','2009-10-30','M',48.99,1.29,'Brasil',22),(40,'André Schmidt','Programador','1993-07-26','M',55.37,1.22,'Angola',21),(41,'Isaias Buscarino','Dentista','2001-01-07','M',99.90,1.55,'Moçambique',20),(42,'Rafael Guimma','Empreendedor','1968-04-11','M',88.88,1.54,'Brasil',19),(43,'Ana Carolina Hernandes','Ator','1970-10-11','F',65.40,2.08,'EUA',18),(44,'Luiz Paulo','Professor','1984-11-01','M',75.12,1.38,'Portugal',17),(45,'Bruna Teles','Programador','1980-11-07','F',55.10,1.86,'Brasil',16),(46,'Diogo Padilha','Auxiliar Administrat','2000-03-03','M',54.34,1.88,'Angola',15),(47,'Bruno Miltersteiner','Dentista','1986-02-19','M',77.45,1.65,'Alemanha',14),(48,'Elaine Nunes','Programador','1998-08-15','F',35.90,2.00,'Canadá',13),(49,'Silvio Ricardo','Programador','2012-03-12','M',65.99,1.23,'EUA',12),(50,'Denilson Barbosa da Silva','Empreendedor','2000-01-08','M',97.30,2.00,'Brasil',11),(51,'Jucinei Teixeira','Professor','1977-11-22','F',44.80,1.76,'Portugal',10),(52,'Bruna Santos','Auxiliar Administrat','1991-12-01','F',76.30,1.45,'Canadá',9),(53,'André Vitebo','Médico','1970-07-01','M',44.11,1.55,'Brasil',8),(54,'Andre Santini','Programador','1991-08-15','M',66.00,1.76,'Itália',7),(55,'Ruan Valente','Programador','1998-03-19','M',101.90,1.76,'Canadá',6),(56,'Nailton Mauricio','Médico','1992-04-25','M',86.01,1.43,'EUA',1),(57,'Rita Pontes','Professor','1999-09-02','F',54.10,1.35,'Angola',4),(58,'Carlos Camargo','Programador','2005-02-22','M',124.65,1.33,'Brasil',3),(59,'Philppe Oliveira','Auxiliar Administrat','2000-05-23','M',105.10,2.19,'Brasil',2),(60,'Dayana Dias','Professor','1993-05-30','F',88.30,1.66,'Angola',1),(61,'Silvana Albuquerque','Programador','1999-05-22','F',56.00,1.50,'Brasil',17);
/*!40000 ALTER TABLE `gafanhotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cadastro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-06 10:21:08
