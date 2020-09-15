-- MySQL dump 10.13  Distrib 5.7.29-32, for Linux (x86_64)
--
-- Host: localhost    Database: f0424952_register
-- ------------------------------------------------------
-- Server version	5.7.29-32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!50717 SELECT COUNT(*) INTO @rocksdb_has_p_s_session_variables FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'performance_schema' AND TABLE_NAME = 'session_variables' */;
/*!50717 SET @rocksdb_get_is_supported = IF (@rocksdb_has_p_s_session_variables, 'SELECT COUNT(*) INTO @rocksdb_is_supported FROM performance_schema.session_variables WHERE VARIABLE_NAME=\'rocksdb_bulk_load\'', 'SELECT 0') */;
/*!50717 PREPARE s FROM @rocksdb_get_is_supported */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;
/*!50717 SET @rocksdb_enable_bulk_load = IF (@rocksdb_is_supported, 'SET SESSION rocksdb_bulk_load = 1', 'SET @rocksdb_dummy_bulk_load = 0') */;
/*!50717 PREPARE s FROM @rocksdb_enable_bulk_load */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;

--
-- Table structure for table `advanced`
--

DROP TABLE IF EXISTS `advanced`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advanced` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advanced`
--

LOCK TABLES `advanced` WRITE;
/*!40000 ALTER TABLE `advanced` DISABLE KEYS */;
INSERT INTO `advanced` (`id`, `id_user`) VALUES (1,1);
/*!40000 ALTER TABLE `advanced` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beginner`
--

DROP TABLE IF EXISTS `beginner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beginner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beginner`
--

LOCK TABLES `beginner` WRITE;
/*!40000 ALTER TABLE `beginner` DISABLE KEYS */;
INSERT INTO `beginner` (`id`, `id_user`) VALUES (2,2),(3,1);
/*!40000 ALTER TABLE `beginner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_Login_uindex` (`Login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intermediate`
--

DROP TABLE IF EXISTS `intermediate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intermediate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intermediate`
--

LOCK TABLES `intermediate` WRITE;
/*!40000 ALTER TABLE `intermediate` DISABLE KEYS */;
INSERT INTO `intermediate` (`id`, `id_user`) VALUES (1,1);
/*!40000 ALTER TABLE `intermediate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programme`
--

DROP TABLE IF EXISTS `programme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programme` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` tinyint(1) unsigned DEFAULT NULL,
  `t1` int(11) unsigned DEFAULT NULL,
  `t2` int(11) unsigned DEFAULT NULL,
  `t3` int(11) unsigned DEFAULT NULL,
  `t4` int(11) unsigned DEFAULT NULL,
  `t5` int(11) unsigned DEFAULT NULL,
  `t6` int(11) unsigned DEFAULT NULL,
  `t7` int(11) unsigned DEFAULT NULL,
  `t8` int(11) unsigned DEFAULT NULL,
  `t9` int(11) unsigned DEFAULT NULL,
  `t10` int(11) unsigned DEFAULT NULL,
  `t11` int(11) unsigned DEFAULT NULL,
  `t12` int(11) unsigned DEFAULT NULL,
  `t13` int(11) unsigned DEFAULT NULL,
  `t14` int(11) unsigned DEFAULT NULL,
  `t15` int(11) unsigned DEFAULT NULL,
  `t16` int(11) unsigned DEFAULT NULL,
  `t17` int(11) unsigned DEFAULT NULL,
  `t18` int(11) unsigned DEFAULT NULL,
  `t19` int(11) unsigned DEFAULT NULL,
  `t20` int(11) unsigned DEFAULT NULL,
  `t21` int(11) unsigned DEFAULT NULL,
  `t22` int(11) unsigned DEFAULT NULL,
  `t23` int(11) unsigned DEFAULT NULL,
  `t24` int(11) unsigned DEFAULT NULL,
  `t25` int(11) unsigned DEFAULT NULL,
  `t26` int(11) unsigned DEFAULT NULL,
  `t27` int(11) unsigned DEFAULT NULL,
  `t28` int(11) unsigned DEFAULT NULL,
  `t29` int(11) unsigned DEFAULT NULL,
  `t30` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programme`
--

LOCK TABLES `programme` WRITE;
/*!40000 ALTER TABLE `programme` DISABLE KEYS */;
INSERT INTO `programme` (`id`, `id_user`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `t11`, `t12`, `t13`, `t14`, `t15`, `t16`, `t17`, `t18`, `t19`, `t20`, `t21`, `t22`, `t23`, `t24`, `t25`, `t26`, `t27`, `t28`, `t29`, `t30`) VALUES (3,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `programme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idStudent` int(11) NOT NULL,
  `TypeWork` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Thing` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Rating` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `rating_students_id_fk` (`idStudent`),
  CONSTRAINT `rating_students_id_fk` FOREIGN KEY (`idStudent`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_value` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` (`id`, `title_value`, `content`) VALUES (1,'главная','http://f0424952.xsph.ru/html/main.php'),(2,'справочник','http://f0424952.xsph.ru/html/grammar.php'),(3,'тесты','http://f0424952.xsph.ru/html/tests_for_unauthorized.php'),(4,'статьи','http://f0424952.xsph.ru/html/articles.php'),(5,'источники','http://f0424952.xsph.ru/html/references.php'),(6,'материалы','http://f0424952.xsph.ru/html/main.php'),(7,'изучение','http://f0424952.xsph.ru/html/main.php'),(8,'индивидуальное','http://f0424952.xsph.ru/html/main.php'),(9,'обучение','http://f0424952.xsph.ru/html/main.php'),(10,'онлайн','http://f0424952.xsph.ru/html/main.php'),(11,'поддержка','http://f0424952.xsph.ru/html/main.php'),(12,' чат-бот','http://f0424952.xsph.ru/html/main.php'),(13,'быстрое','http://f0424952.xsph.ru/html/main.php'),(14,'развитие','http://f0424952.xsph.ru/html/main.php'),(15,'программа ','http://f0424952.xsph.ru/html/main.php'),(16,'начните','http://f0424952.xsph.ru/html/main.php'),(17,'учить','http://f0424952.xsph.ru/html/main.php'),(18,'английский','http://f0424952.xsph.ru/html/main.php'),(19,'самостоятельно','http://f0424952.xsph.ru/html/main.php'),(20,'прямо','http://f0424952.xsph.ru/html/main.php'),(21,'сейчас','http://f0424952.xsph.ru/html/main.php'),(22,'уроки','http://f0424952.xsph.ru/html/main.php'),(23,'адаптируются','http://f0424952.xsph.ru/html/main.php'),(24,'стиль','http://f0424952.xsph.ru/html/main.php'),(25,'занятий','http://f0424952.xsph.ru/html/main.php'),(26,'упражнения','http://f0424952.xsph.ru/html/main.php'),(27,'разработаны','http://f0424952.xsph.ru/html/main.php'),(28,'максимально','http://f0424952.xsph.ru/html/main.php'),(29,'эффективного','http://f0424952.xsph.ru/html/main.php'),(30,'пополнения ','http://f0424952.xsph.ru/html/main.php'),(31,'словарного','http://f0424952.xsph.ru/html/main.php'),(32,'запаса.','http://f0424952.xsph.ru/html/main.php'),(33,'умный','http://f0424952.xsph.ru/html/main.php'),(34,'поможет','http://f0424952.xsph.ru/html/main.php'),(35,'каждому','http://f0424952.xsph.ru/html/main.php'),(36,'освоиться','http://f0424952.xsph.ru/html/main.php'),(37,'нашем','http://f0424952.xsph.ru/html/main.php'),(38,'сайте','http://f0424952.xsph.ru/html/main.php'),(39,'обучения','http://f0424952.xsph.ru/html/main.php'),(40,'помогает','http://f0424952.xsph.ru/html/main.php'),(41,'быстро ','http://f0424952.xsph.ru/html/main.php'),(42,'совершенствовать','http://f0424952.xsph.ru/html/main.php'),(43,'знания','http://f0424952.xsph.ru/html/main.php'),(44,'языка','http://f0424952.xsph.ru/html/main.php'),(45,'пропускать','http://f0424952.xsph.ru/html/main.php'),(46,'оформи','http://f0424952.xsph.ru/html/main.php'),(47,'бесплатную','http://f0424952.xsph.ru/html/main.php'),(48,'рассылку','http://f0424952.xsph.ru/html/main.php'),(49,'english','http://f0424952.xsph.ru/html/main.php'),(50,'club','http://f0424952.xsph.ru/html/main.php'),(51,'подпишись','http://f0424952.xsph.ru/html/main.php'),(52,'новые','http://f0424952.xsph.ru/html/main.php'),(53,'дополнительные','http://f0424952.xsph.ru/html/main.php'),(54,'подборка','http://f0424952.xsph.ru/html/main.php'),(55,'статей','http://f0424952.xsph.ru/html/main.php'),(56,'книг','http://f0424952.xsph.ru/html/main.php'),(57,'различным','http://f0424952.xsph.ru/html/main.php'),(58,'темам','http://f0424952.xsph.ru/html/main.php'),(59,'аудио','http://f0424952.xsph.ru/html/main.php'),(60,'видео','http://f0424952.xsph.ru/html/main.php'),(61,'разобраться','http://f0424952.xsph.ru/html/main.php'),(62,'теорией','http://f0424952.xsph.ru/html/main.php'),(63,'грамматики','http://f0424952.xsph.ru/html/main.php'),(64,'каждый','http://f0424952.xsph.ru/html/main.php'),(65,'сочетание','http://f0424952.xsph.ru/html/main.php'),(66,'теоретической','http://f0424952.xsph.ru/html/main.php'),(67,'части','http://f0424952.xsph.ru/html/main.php'),(68,'практических','http://f0424952.xsph.ru/html/main.php'),(69,'заданий','http://f0424952.xsph.ru/html/main.php'),(70,'научиться','http://f0424952.xsph.ru/html/main.php'),(71,'применять','http://f0424952.xsph.ru/html/main.php'),(72,'правил','http://f0424952.xsph.ru/html/main.php'),(73,'практике','http://f0424952.xsph.ru/html/main.php'),(74,'ознакомившись','http://f0424952.xsph.ru/html/main.php'),(75,'необходимо','http://f0424952.xsph.ru/html/main.php'),(76,'выполнить','http://f0424952.xsph.ru/html/main.php'),(77,'упражнения','http://f0424952.xsph.ru/html/main.php'),(78,'возможность','http://f0424952.xsph.ru/html/main.php'),(79,'комплексного','http://f0424952.xsph.ru/html/main.php'),(80,'дополнение','http://f0424952.xsph.ru/html/main.php'),(81,'прилагаются','http://f0424952.xsph.ru/html/main.php'),(82,'основные','http://f0424952.xsph.ru/html/main.php'),(83,'сведения','http://f0424952.xsph.ru/html/main.php'),(84,'частях','http://f0424952.xsph.ru/html/main.php'),(85,'речи','http://f0424952.xsph.ru/html/main.php'),(86,'артиклях','http://f0424952.xsph.ru/html/main.php'),(87,'глагольных','http://f0424952.xsph.ru/html/main.php'),(88,'временах','http://f0424952.xsph.ru/html/main.php'),(89,'структуре','http://f0424952.xsph.ru/html/main.php'),(90,'предложения','http://f0424952.xsph.ru/html/main.php'),(91,'выбирать','http://f0424952.xsph.ru/html/main.php'),(92,'уровень','http://f0424952.xsph.ru/html/main.php'),(93,'пройденным','http://f0424952.xsph.ru/html/main.php'),(94,'темам','http://f0424952.xsph.ru/html/main.php'),(95,'выполняйте','http://f0424952.xsph.ru/html/main.php'),(96,'изученным','http://f0424952.xsph.ru/html/main.php'),(97,'зарегистрированных','http://f0424952.xsph.ru/html/main.php'),(98,'пользователей','http://f0424952.xsph.ru/html/main.php'),(99,'читайте','http://f0424952.xsph.ru/html/main.php'),(100,'направлениям','http://f0424952.xsph.ru/html/main.php'),(101,'сохранять','http://f0424952.xsph.ru/html/main.php'),(102,'скачивать','http://f0424952.xsph.ru/html/main.php'),(103,'pdf','http://f0424952.xsph.ru/html/main.php'),(104,'имеется','http://f0424952.xsph.ru/html/main.php'),(105,'перевод','http://f0424952.xsph.ru/html/main.php'),(106,'каждой','http://f0424952.xsph.ru/html/main.php'),(107,'частичный','http://f0424952.xsph.ru/html/main.php'),(108,'слов','http://f0424952.xsph.ru/html/main.php'),(109,'полный','http://f0424952.xsph.ru/html/main.php'),(110,'неизвестных','http://f0424952.xsph.ru/html/main.php'),(111,'copyright','http://f0424952.xsph.ru/html/main.php'),(112,'версию','http://f0424952.xsph.ru/html/grammar.php'),(113,'зарегистрированные','http://f0424952.xsph.ru/html/grammar.php'),(114,'глагол','http://f0424952.xsph.ru/html/grammar.php'),(115,'времена','http://f0424952.xsph.ru/html/grammar.php'),(116,'наклонение','http://f0424952.xsph.ru/html/grammar.php'),(117,'неличные','http://f0424952.xsph.ru/html/grammar.php'),(118,'формы','http://f0424952.xsph.ru/html/grammar.php'),(119,'неправильных','http://f0424952.xsph.ru/html/grammar.php'),(120,'правильный','http://f0424952.xsph.ru/html/grammar.php'),(121,'вспомогательный','http://f0424952.xsph.ru/html/grammar.php'),(122,'активный','http://f0424952.xsph.ru/html/grammar.php'),(123,'пассивный','http://f0424952.xsph.ru/html/grammar.php'),(124,'настоящее','http://f0424952.xsph.ru/html/grammar.php'),(125,'сколько','http://f0424952.xsph.ru/html/grammar.php'),(126,'present','http://f0424952.xsph.ru/html/grammar.php'),(127,'simple','http://f0424952.xsph.ru/html/grammar.php'),(128,'future','http://f0424952.xsph.ru/html/grammar.php'),(129,'perfect','http://f0424952.xsph.ru/html/grammar.php'),(130,'continuous','http://f0424952.xsph.ru/html/grammar.php'),(131,'прошедшее','http://f0424952.xsph.ru/html/grammar.php'),(132,'будущее','http://f0424952.xsph.ru/html/grammar.php'),(133,'past','http://f0424952.xsph.ru/html/grammar.php'),(134,'повелительное','http://f0424952.xsph.ru/html/grammar.php'),(135,'сослагательное','http://f0424952.xsph.ru/html/grammar.php'),(136,'инфинитив','http://f0424952.xsph.ru/html/grammar.php'),(137,'оборот','http://f0424952.xsph.ru/html/grammar.php'),(138,'герундий','http://f0424952.xsph.ru/html/grammar.php'),(139,'причастие','http://f0424952.xsph.ru/html/grammar.php'),(140,'причастный','http://f0424952.xsph.ru/html/grammar.php'),(141,'исчисляемые','http://f0424952.xsph.ru/html/grammar.php'),(142,'неисчесляемые','http://f0424952.xsph.ru/html/grammar.php'),(143,'число','http://f0424952.xsph.ru/html/grammar.php'),(144,'множественное','http://f0424952.xsph.ru/html/grammar.php'),(145,'падежи','http://f0424952.xsph.ru/html/grammar.php'),(146,'образование','http://f0424952.xsph.ru/html/grammar.php'),(147,'суффиксы','http://f0424952.xsph.ru/html/grammar.php'),(148,'род','http://f0424952.xsph.ru/html/grammar.php'),(149,'имена','http://f0424952.xsph.ru/html/grammar.php'),(150,'существительное','http://f0424952.xsph.ru/html/grammar.php'),(151,'артикль','http://f0424952.xsph.ru/html/grammar.php'),(152,'неопределенный ','http://f0424952.xsph.ru/html/grammar.php'),(153,'нулевой','http://f0424952.xsph.ru/html/grammar.php'),(154,'степень','http://f0424952.xsph.ru/html/grammar.php'),(155,'прилагательное','http://f0424952.xsph.ru/html/grammar.php'),(156,'порядок','http://f0424952.xsph.ru/html/grammar.php'),(157,'числительные','http://f0424952.xsph.ru/html/grammar.php'),(158,'количественные','http://f0424952.xsph.ru/html/grammar.php'),(159,'порядковые','http://f0424952.xsph.ru/html/grammar.php'),(160,'местоимения','http://f0424952.xsph.ru/html/grammar.php'),(161,'личные','http://f0424952.xsph.ru/html/grammar.php'),(162,'притяжательные','http://f0424952.xsph.ru/html/grammar.php'),(163,'возвратные','http://f0424952.xsph.ru/html/grammar.php'),(164,'указательные','http://f0424952.xsph.ru/html/grammar.php'),(165,'вопросительные','http://f0424952.xsph.ru/html/grammar.php'),(166,'относительные','http://f0424952.xsph.ru/html/grammar.php'),(167,'неопределенные','http://f0424952.xsph.ru/html/grammar.php'),(168,'наречия','http://f0424952.xsph.ru/html/grammar.php'),(169,'образование','http://f0424952.xsph.ru/html/grammar.php'),(170,'предлог','http://f0424952.xsph.ru/html/grammar.php'),(171,'употребление','http://f0424952.xsph.ru/html/grammar.php'),(172,'союз','http://f0424952.xsph.ru/html/grammar.php'),(173,'сочинительные','http://f0424952.xsph.ru/html/grammar.php'),(174,'подчинительные','http://f0424952.xsph.ru/html/grammar.php'),(175,'предложение','http://f0424952.xsph.ru/html/grammar.php'),(176,'типы','http://f0424952.xsph.ru/html/grammar.php'),(177,'порядок','http://f0424952.xsph.ru/html/grammar.php'),(178,'построение предложений','http://f0424952.xsph.ru/html/grammar.php'),(179,'прямо сейчас','http://f0424952.xsph.ru/html/main.php'),(180,'выложены наиболее популярные слова','http://f0424952.xsph.ru/html/vocabulary.php'),(181,'словарный запас','http://f0424952.xsph.ru/html/vocabulary.php'),(183,'использованы','http://f0424952.xsph.ru/html/references.php'),(184,'следующие','http://f0424952.xsph.ru/html/references.php'),(185,'английского языка','http://f0424952.xsph.ru/html/main.php'),(186,'начните учить','http://f0424952.xsph.ru/html/main.php'),(187,'преимущества изучения','http://f0424952.xsph.ru/html/main.php'),(188,'индивидуальное обучение','http://f0424952.xsph.ru/html/main.php'),(189,'онлайн поддержка ','http://f0424952.xsph.ru/html/main.php'),(190,'умный чат-бот','http://f0424952.xsph.ru/html/main.php'),(191,'быстрое развитие','http://f0424952.xsph.ru/html/main.php'),(192,'программа обучения','http://f0424952.xsph.ru/html/main.php'),(193,'программа обучения','http://f0424952.xsph.ru/html/main.php'),(194,'бесплатную рассылку','http://f0424952.xsph.ru/html/main.php'),(195,'english club','http://f0424952.xsph.ru/html/main.php'),(196,'подборка статей и книг','http://f0424952.xsph.ru/html/main.php'),(197,'аудио и видео материалы','http://f0424952.xsph.ru/html/main.php'),(198,'цели курса','http://f0424952.xsph.ru/html/main.php'),(199,'возможность комплексного изучения ','http://f0424952.xsph.ru/html/main.php'),(200,'теоретические знания','http://f0424952.xsph.ru/html/main.php'),(201,'упражнения урока','http://f0424952.xsph.ru/html/main.php'),(202,'основные сведения','http://f0424952.xsph.ru/html/main.php'),(203,'выполняйте тесты','http://f0424952.xsph.ru/html/main.php'),(204,'читайте книги','http://f0424952.xsph.ru/html/main.php'),(205,'скачивать книги','http://f0424952.xsph.ru/html/main.php'),(206,'английский язык для начинающих','http://f0424952.xsph.ru/html/articles.php'),(207,'жизненные реалии','http://f0424952.xsph.ru/html/articles.php');
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `LastName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Patronymic` varchar(50) CHARACTER SET utf8 NOT NULL,
  `StudyGroup` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DateOfBirth` datetime NOT NULL,
  `SeriesPassport` char(4) CHARACTER SET utf8 NOT NULL,
  `NumberPassport` char(6) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Phone` char(12) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_Email_uindex` (`Email`),
  UNIQUE KEY `students_NumberPassport_uindex` (`NumberPassport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` (`id`, `email`) VALUES (1,'aleksey_7300@mail.ru');
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (1,'patron73','aleksey_7300@mail.ru','$2y$10$fiwAlTHTf4BYIzckS512HeaKmJqLswg.GcinbArRtXNk.wd7L/ydu'),(2,'raptor_56','prizrac73@yandex.ru','$2y$10$zXF/1YBsqPK1kPp1/cfp8eJCFLKifTh.LSMP1ijISakZJYtFYXJXG'),(3,'N.O.DJ','N.O.DJ@yandex.ru','$2y$10$n6fSLtyM7Zytynea3n0/NOuWiE/JIXBLve.W9n91PI3EoSKRtm4Jq'),(4,'glad54','silantiev.leha@mail.ru','$2y$10$MmzFrYRW2D3uWHSxrYr.AOorT9fR9BRfYYrz4zL2mGRmxA/HzynQK');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'f0424952_register'
--
/*!50112 SET @disable_bulk_load = IF (@is_rocksdb_supported, 'SET SESSION rocksdb_bulk_load = @old_rocksdb_bulk_load', 'SET @dummy_rocksdb_bulk_load = 0') */;
/*!50112 PREPARE s FROM @disable_bulk_load */;
/*!50112 EXECUTE s */;
/*!50112 DEALLOCATE PREPARE s */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-15 14:50:29
