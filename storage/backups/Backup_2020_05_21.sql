-- MySQL dump 10.13  Distrib 8.0.20, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.20-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `broad_categories`
--

DROP TABLE IF EXISTS `broad_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `broad_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `broad_categories`
--

LOCK TABLES `broad_categories` WRITE;
/*!40000 ALTER TABLE `broad_categories` DISABLE KEYS */;
INSERT INTO `broad_categories` VALUES (1,'Request for information','2020-05-21 16:52:45','2020-05-21 16:52:45'),(2,'Request for assistance','2020-05-21 16:52:45','2020-05-21 16:52:45'),(3,'Positive feedback','2020-05-21 16:52:45','2020-05-21 16:52:45'),(4,'Minor Complain','2020-05-21 16:52:45','2020-05-21 16:52:45'),(5,'Major Complain','2020-05-21 16:52:45','2020-05-21 16:52:45');
/*!40000 ALTER TABLE `broad_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complaints` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `caller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_no_received` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `received_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quarter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `broad_category_id` bigint unsigned NOT NULL,
  `specific_category_id` bigint unsigned NOT NULL,
  `person_who_shared_action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` bigint unsigned NOT NULL,
  `district_id` bigint unsigned NOT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `project_id` bigint unsigned DEFAULT NULL,
  `program_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `complaints_program_id_foreign` (`program_id`),
  KEY `complaints_project_id_foreign` (`project_id`),
  KEY `complaints_province_id_foreign` (`province_id`),
  KEY `complaints_district_id_foreign` (`district_id`),
  KEY `complaints_broad_category_id_foreign` (`broad_category_id`),
  KEY `complaints_specific_category_id_foreign` (`specific_category_id`),
  KEY `complaints_user_id_foreign` (`user_id`),
  CONSTRAINT `complaints_broad_category_id_foreign` FOREIGN KEY (`broad_category_id`) REFERENCES `broad_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `complaints_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  CONSTRAINT `complaints_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `complaints_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `complaints_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`),
  CONSTRAINT `complaints_specific_category_id_foreign` FOREIGN KEY (`specific_category_id`) REFERENCES `specific_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `complaints_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
INSERT INTO `complaints` VALUES (1,'Pat Renner','(372) 871-8497 x14104','Female','2019-11-04','Under Investigation','Second Quarter','Destiney Kshlerin',NULL,5,1,'Harry Haag','1990-06-30','Eum consectetur.',4,314,'Culpa.',29,27,20,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(2,'Mrs. Margaret Mayer PhD','509.446.9551 x4754','Female','2017-06-07','Registered','Fourth Quarter','Amber Mitchell',NULL,5,3,'Ms. Amalia Metz','1983-02-10','Dolores quidem.',32,193,'Molestiae.',17,26,30,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(3,'Prof. Nathanial Rogahn III','817.751.6441','Male','2019-04-12','Pending','Second Quarter','Prof. Era Moen DDS',NULL,4,5,'Clyde Flatley','1996-07-15','Impedit esse est.',2,202,'Quisquam.',23,17,30,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(4,'Roma Okuneva','931-217-1638 x0152','Female','2018-10-29','Registered','Second Quarter','Reynold Lebsack',NULL,4,3,'Ruthe Abernathy DDS','2000-06-03','Eum voluptas.',22,247,'Nam.',10,4,11,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(5,'Napoleon Schaefer MD','745.471.0073 x0494','Female','2017-12-03','Solved','First Quarter','Miss Josiane Hirthe',NULL,1,2,'Bertha Connelly','1995-04-19','Facilis.',15,158,'Dicta ut.',28,8,19,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(6,'Mr. Laverne Krajcik MD','(767) 478-7690 x8117','Female','2019-04-19','Registered','Fourth Quarter','Dr. Merle Harris Sr.',NULL,5,13,'Vivianne Jacobs','2013-01-27','Eveniet harum et.',29,396,'Occaecati.',24,17,16,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(7,'Frieda Rau IV','310.986.4749 x337','Male','2020-01-10','Pending','Second Quarter','Cortez Crist',NULL,2,4,'Demarco Marquardt','2002-05-04','Autem deserunt.',18,299,'Libero.',24,28,17,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(8,'Estevan Powlowski','+1.819.401.3013','Female','2018-11-27','Solved','Third Quarter','Mr. Salvador Green Sr.',NULL,2,9,'Priscilla Block','2004-01-06','Non hic commodi est.',16,277,'Nulla eos.',1,10,10,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(9,'Ernestine Balistreri','1-406-805-7943 x721','Female','2018-02-20','Pending','Second Quarter','Kelley Bailey',NULL,5,11,'Dallas Bednar','1975-01-16','Non eum quae sunt.',26,395,'Voluptate.',31,7,18,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(10,'Brendan Carroll','546-885-8833 x47210','Male','2019-06-10','Pending','Second Quarter','Elvie Kohler',NULL,1,10,'Mr. Jordan Purdy','2020-05-19','Error et facere.',14,195,'Fuga.',2,6,14,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(11,'Newton Dietrich','286.808.0747','Female','2017-07-06','Pending','First Quarter','Kory Bauch',NULL,4,4,'Mr. Louisa Waters','1985-11-06','Repudiandae.',23,205,'Enim.',6,19,24,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(12,'Mariam Halvorson','(424) 990-1782','Female','2020-01-31','Registered','Third Quarter','Miss Citlalli Morar',NULL,2,12,'Hulda Grimes Jr.','1979-11-12','Deserunt quos vel.',28,284,'Inventore.',3,4,2,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(13,'Linnie Botsford','1-530-486-7997 x86534','Female','2017-09-01','Pending','First Quarter','Darrion Pouros',NULL,2,9,'Karina Grimes','2015-05-16','Autem.',27,198,'Ut.',2,16,23,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(14,'Zakary Ondricka','(804) 484-1882 x342','Female','2018-01-31','Under Investigation','Second Quarter','Jordy Luettgen V',NULL,1,14,'Mariela Leuschke I','1993-05-03','Qui hic nemo esse.',22,172,'Odit ipsa.',13,15,22,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(15,'Osborne Prosacco','(282) 416-7535 x918','Female','2017-07-08','Solved','Fourth Quarter','Miss Yessenia McKenzie',NULL,2,14,'Tania Schamberger V','1998-09-10','Sed cupiditate et.',9,223,'Et quia.',4,30,14,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(16,'Wayne Stoltenberg I','568-617-7250','Male','2018-06-27','Under Investigation','First Quarter','Prof. Mia Muller',NULL,3,14,'Hobart Schoen','1979-09-19','Adipisci laboriosam.',12,70,'Et.',29,12,4,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(17,'Pearline Rau','+1-661-502-5939','Male','2019-12-05','Registered','First Quarter','Nellie Prohaska',NULL,1,7,'Bertrand Schowalter','2008-12-04','Est vel error qui.',14,18,'Et.',4,30,7,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(18,'Joanne Harber','620.306.3237 x1091','Female','2019-12-01','Solved','Second Quarter','Mr. Kacey Olson',NULL,3,6,'Sasha Sanford','1976-11-23','Consequatur facilis.',24,393,'Occaecati.',19,4,7,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(19,'Amina Reinger MD','+1-361-244-8054','Male','2020-03-10','Registered','First Quarter','Eve Schaefer I',NULL,4,5,'Doug Hintz','1973-10-18','Culpa veniam.',26,380,'Neque.',11,15,29,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(20,'Jackeline Waelchi','(637) 366-8327 x593','Male','2018-04-26','Solved','Fourth Quarter','Mrs. Katherine Conroy',NULL,3,5,'Dr. Rubye Schmidt DDS','2002-06-13','Quae assumenda.',7,295,'Rerum.',26,14,1,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(21,'Arnold Cassin','820.439.4626 x0738','Female','2017-05-06','Under Investigation','Fourth Quarter','Octavia Pfeffer II',NULL,4,11,'Ayden Orn DVM','2004-03-23','Et mollitia.',8,325,'Et quia.',13,19,22,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(22,'Mr. Virgil Schulist V','1-252-921-3097','Male','2016-09-21','Pending','Third Quarter','Ms. Sonya Christiansen IV',NULL,2,6,'Shyanne Buckridge','2010-11-26','Soluta incidunt.',31,361,'Et.',15,6,3,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(23,'Everette Hickle','(561) 244-2554 x19222','Male','2018-02-27','Solved','Third Quarter','Prof. Lilly Funk',NULL,1,5,'Torrance Spinka V','2002-07-31','Sequi vitae atque.',29,192,'Quibusdam.',17,11,27,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(24,'Prof. Esperanza Abbott','967.718.5798 x69777','Male','2016-11-22','Solved','Fourth Quarter','Everette Rowe',NULL,3,3,'Zora Dicki','1976-07-01','Non quis deleniti.',13,135,'Quia.',23,24,22,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(25,'Prof. Rafaela Howe','+1-969-354-4498','Female','2019-05-03','Pending','Fourth Quarter','Tierra Windler',NULL,3,6,'Cornelius Grimes','1985-06-14','Ipsum voluptas.',31,175,'Quas.',31,8,4,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(26,'Bobby Weber','+1-751-943-7845','Male','2017-08-13','Pending','Second Quarter','Ruby Krajcik',NULL,5,13,'Sage Prosacco','2001-09-19','Corporis autem.',27,114,'Ullam rem.',15,19,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(27,'Ms. Vada Aufderhar III','535.374.5157','Female','2018-10-07','Solved','Second Quarter','Devon Roberts',NULL,3,7,'Jaylin Torphy','1974-10-07','Nisi reiciendis est.',24,299,'Aut.',13,13,19,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(28,'Ottilie Zieme','(907) 672-0107','Female','2017-06-17','Pending','First Quarter','Mr. Herbert Bernier',NULL,5,4,'Coleman Beer','2010-08-09','Ratione et.',33,232,'Rerum.',3,9,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(29,'Mr. Mauricio Bayer V','+1 (810) 333-0419','Male','2016-08-02','Solved','Fourth Quarter','Jessyca Stoltenberg',NULL,3,10,'Jose Corwin','1975-05-30','Sed dolor molestiae.',11,308,'Velit ut.',15,19,26,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(30,'Amari Olson III','(485) 887-0509','Male','2016-07-25','Solved','Third Quarter','Dr. Rod Batz Sr.',NULL,4,6,'Magnolia Wiza III','1985-06-15','Dicta cum sapiente.',25,381,'Qui iure.',18,19,27,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(31,'Mrs. Mandy Schuster II','(606) 626-9037 x36071','Female','2019-11-17','Under Investigation','Third Quarter','Ocie Watsica',NULL,4,13,'Dangelo Lakin','2000-10-17','Perferendis quae.',25,239,'Omnis.',18,2,8,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(32,'Sophia Greenfelder','+1-704-720-9077','Male','2016-07-12','Registered','Third Quarter','Dr. Sofia Bechtelar III',NULL,2,10,'Adam Beier','1977-08-21','Expedita.',6,91,'Totam.',25,15,15,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(33,'Louisa Botsford','1-342-398-3162','Female','2018-01-14','Solved','Third Quarter','Jaime Collins',NULL,3,4,'Daphnee Cummings','2008-12-23','Velit commodi.',9,272,'Expedita.',25,10,9,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(34,'Maybell Hoppe','957.596.8208 x7047','Male','2018-11-08','Solved','Second Quarter','Gavin Schroeder IV',NULL,1,7,'Mr. Raphael Gerhold','2019-11-23','Ipsam unde atque.',25,158,'Facere.',4,12,30,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(35,'Mrs. Maryam Lebsack DVM','356-952-0948','Female','2019-09-25','Pending','Third Quarter','Lulu Kilback',NULL,4,11,'Dr. Jalon Johnston','1979-06-10','Sed magnam.',22,229,'Rerum.',4,28,27,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(36,'Serena Corkery','+15866254283','Male','2017-06-05','Solved','Fourth Quarter','Celia Bruen',NULL,5,11,'Prof. Elbert Grimes','1986-10-20','Sit et et.',3,152,'Aut sequi.',6,19,24,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(37,'Valerie Runolfsdottir','1-610-343-3196','Female','2017-04-02','Under Investigation','Second Quarter','Edward Wehner',NULL,1,6,'Shyanne Heidenreich','1980-09-01','Recusandae dolor.',13,63,'Quidem.',22,8,1,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(38,'Earlene Botsford','(282) 702-0753','Male','2019-04-06','Pending','Second Quarter','Mr. Dallas Hermiston',NULL,1,8,'Adonis Walsh','1978-03-25','Tempora totam.',4,351,'Odit sunt.',9,20,29,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(39,'Mr. Ephraim Kessler MD','505.655.5061','Male','2018-07-03','Pending','Second Quarter','Wilford Crist',NULL,2,1,'Jerrell D\'Amore','2012-04-26','Rem magnam et.',21,59,'Et.',17,20,23,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(40,'Dr. Emilia Dietrich IV','+1.447.325.0541','Female','2019-05-06','Under Investigation','Second Quarter','Prof. Shanie Schuster MD',NULL,3,12,'Prof. Robbie Schuster V','1995-08-15','Odio doloremque qui.',21,143,'Nulla eos.',29,14,8,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(41,'Kaleb Hills V','1-697-870-1301 x1014','Female','2018-10-02','Registered','First Quarter','Prof. Hilbert Bahringer',NULL,1,4,'Bennett Moen','2004-08-27','Et eligendi quia ut.',10,205,'Rerum.',21,10,8,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(42,'Laverna Fritsch','685-979-0137 x70087','Male','2016-09-15','Solved','Fourth Quarter','Alba Bradtke',NULL,4,3,'Aliza Kuhic','1970-04-17','Deserunt tenetur.',2,186,'Deleniti.',29,8,30,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(43,'Karina Lynch','298.676.1056 x886','Female','2016-12-14','Solved','First Quarter','Elian Shanahan PhD',NULL,2,10,'Queen Fadel','2014-11-04','Et exercitationem.',11,237,'Harum.',31,24,21,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(44,'Mckayla Muller','1-979-500-0277 x0481','Female','2018-12-28','Under Investigation','Second Quarter','Mrs. Charlotte Greenfelder',NULL,2,10,'Miss Precious Gutmann Jr.','1980-11-02','Nisi ab voluptates.',30,199,'Qui.',11,26,25,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(45,'Miss Otha Moen','893-892-3154 x7069','Female','2019-04-30','Under Investigation','Fourth Quarter','Evalyn Cruickshank',NULL,2,9,'Mrs. Eula Sanford','1993-01-30','Iure deserunt omnis.',5,64,'Et odio.',30,30,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(46,'Linnie Ernser','742.607.5296 x7467','Female','2017-07-06','Registered','First Quarter','Teresa Haley',NULL,5,8,'Eula Lind','1981-06-30','Quaerat quia.',28,110,'Cum.',8,4,27,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(47,'Joanne Boyle','715-205-9218','Female','2020-02-06','Registered','First Quarter','Jay Roob',NULL,2,4,'Ruthe Kris','1979-11-03','Nobis amet repellat.',11,302,'Similique.',20,3,1,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(48,'Katharina Stamm II','(201) 722-0366 x452','Male','2016-08-27','Registered','Third Quarter','Rudy Crona V',NULL,1,10,'Travon King','1976-05-10','Quibusdam et.',4,127,'Enim.',28,25,9,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(49,'Dessie Streich','662.305.7361 x858','Female','2020-03-30','Registered','Second Quarter','Miss Dina Bergstrom',NULL,4,6,'Prof. Stephen Orn','2017-12-25','Ipsa qui dolore.',17,123,'Sed ad.',21,24,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(50,'Helmer Smith','1-216-737-7770 x169','Male','2019-11-18','Under Investigation','First Quarter','Jovani Williamson',NULL,5,9,'Miss Frederique Wintheiser','2011-09-13','Sed quam aut.',32,330,'Minima.',11,8,14,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(51,'Briana Hahn','(961) 291-1924','Male','2017-05-12','Pending','Second Quarter','Andres Legros I',NULL,1,7,'Amya Robel','1988-10-04','Qui sint est.',13,336,'Eos earum.',29,8,20,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(52,'Lafayette Kuvalis','1-763-554-3656 x455','Male','2019-10-11','Pending','Second Quarter','Norene Williamson',NULL,2,1,'Prof. Elmo Hegmann III','1990-02-12','Quo sit aut quia.',22,299,'Explicabo.',14,5,24,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(53,'Llewellyn McDermott Jr.','(893) 571-3887 x2346','Male','2020-02-01','Under Investigation','Second Quarter','Orval Kris Jr.',NULL,4,6,'Avery Lowe','2007-11-16','Vel dicta veniam.',15,321,'A.',9,23,2,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(54,'Fritz Haley','1-669-324-1946 x106','Female','2016-12-09','Under Investigation','Second Quarter','Natalie Herman',NULL,5,10,'Omer Hayes','2009-10-02','Et velit nihil.',15,142,'Nostrum.',15,26,1,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(55,'Maximillian Nitzsche','481.599.6126 x50693','Female','2017-04-04','Under Investigation','First Quarter','Demetris Mante',NULL,5,12,'Addie Flatley','2003-09-13','Et iure molestiae.',22,44,'Optio ut.',18,23,18,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(56,'Dr. Rubye Walker PhD','494-363-4662','Female','2019-10-04','Pending','Fourth Quarter','Cordie Kreiger DDS',NULL,1,5,'Muriel Reinger','2019-07-20','Quis possimus.',21,294,'Eos.',21,27,24,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(57,'Garfield Reichel','(760) 469-9261','Female','2016-08-03','Pending','Fourth Quarter','Chanelle Kessler DVM',NULL,5,4,'Prof. Bill Maggio','1972-03-13','Tenetur molestiae.',31,357,'Vero.',26,18,10,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(58,'Ms. Kaitlyn Kirlin','334.982.5808 x50679','Male','2018-02-26','Solved','First Quarter','Lamar Jast',NULL,2,11,'Gustave Schmitt','2009-03-08','Optio eius et.',33,307,'Numquam.',25,24,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(59,'Gail Ankunding','1-790-842-3262','Male','2016-08-05','Pending','Third Quarter','Marcelina Welch MD',NULL,5,7,'Dr. Laron Schmidt II','1982-02-14','Soluta voluptatum.',33,245,'Atque.',8,5,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(60,'Lionel Kuhlman','(958) 589-5250 x41033','Female','2018-10-04','Under Investigation','Fourth Quarter','Dr. Rylan Krajcik DVM',NULL,1,10,'Rosendo Kris IV','1980-04-10','Ut sunt nostrum.',4,371,'Sunt quo.',17,11,28,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(61,'Ebba Heaney V','315-329-1454 x91099','Female','2019-12-25','Registered','Second Quarter','Stanford Buckridge',NULL,4,1,'Katheryn Adams','1977-01-04','Quibusdam aliquid.',7,303,'Rerum.',23,14,15,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(62,'Myrl Vandervort Sr.','318-717-5686','Female','2018-06-07','Solved','Fourth Quarter','Cade Streich',NULL,3,6,'Willa Botsford','1993-10-15','Consequatur nobis.',27,287,'Dolore.',15,1,25,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(63,'Mr. Arthur Mosciski MD','354-329-6657 x7324','Female','2019-06-05','Registered','Fourth Quarter','Juvenal Larson',NULL,4,3,'Zora Ritchie','1993-02-18','Ut reiciendis.',7,210,'Quisquam.',22,5,14,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(64,'Retta Hirthe','308-498-8386 x27556','Female','2017-01-23','Registered','Second Quarter','Demond Dooley',NULL,3,8,'Sam Medhurst','1970-12-15','A dolores mollitia.',4,358,'Enim.',3,25,10,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(65,'Lou Corwin','1-224-655-1875 x1548','Female','2017-10-04','Solved','Third Quarter','Shanel Conroy',NULL,2,10,'Friedrich Koelpin','1984-07-04','Quia accusantium.',17,364,'Nihil qui.',22,15,13,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(66,'Dr. Dorcas McKenzie','485.338.4914 x0534','Male','2019-05-30','Registered','Third Quarter','Dr. Alf Becker DVM',NULL,5,7,'Jevon Botsford','1972-04-30','Nisi sunt tempora.',27,148,'Alias.',9,29,26,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(67,'Jan Ebert','1-502-282-1598','Female','2016-12-17','Pending','First Quarter','Mrs. Claudine Glover',NULL,5,12,'Timothy Abbott','2003-11-10','Laboriosam.',15,361,'Non sed.',15,1,13,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(68,'Dolly Boyle','331.682.4604 x2972','Male','2016-05-23','Solved','First Quarter','Marianna Raynor',NULL,3,13,'Emory Little','1985-03-24','Occaecati ducimus.',1,377,'Omnis et.',19,27,6,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(69,'Keegan Cruickshank','+19982807895','Female','2017-07-08','Solved','First Quarter','Kaitlyn Keebler',NULL,2,6,'Miss Lois Kunze III','2017-11-20','Asperiores voluptas.',6,112,'Quisquam.',21,15,23,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(70,'Prof. Merl Kozey','474-234-4725','Male','2019-07-15','Solved','First Quarter','Tanya Dickinson',NULL,1,6,'Rosina Thiel','1982-11-03','Numquam nostrum.',14,158,'Tempora.',14,27,21,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(71,'Suzanne Green','495-579-8057 x96623','Male','2017-02-05','Pending','Second Quarter','Hans Hoppe Sr.',NULL,1,9,'Kyleigh Russel','1975-12-19','Error animi ea et.',1,19,'Nesciunt.',27,30,13,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(72,'Mrs. Ima Klocko','(274) 626-5413 x222','Male','2016-10-15','Pending','First Quarter','Mr. Randal Kris',NULL,3,7,'Mrs. Mariane Walsh DDS','2010-09-04','Cum maxime.',10,195,'Est.',5,18,8,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(73,'Elvis Price DDS','1-584-681-7614','Female','2020-04-15','Pending','Fourth Quarter','Jacinthe Feest',NULL,1,6,'Mrs. Raina Klein','1978-03-25','Aut explicabo non.',27,57,'Sed et.',13,14,19,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(74,'Herbert Windler','583-990-1187 x10615','Male','2016-11-30','Pending','Second Quarter','Keshawn Sporer',NULL,4,4,'Ms. Antonette Zemlak','1999-04-26','Perferendis eius.',25,351,'Eos sint.',1,8,16,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(75,'Benny Conroy','+1.887.235.3429','Female','2018-11-16','Solved','First Quarter','Augustus Streich',NULL,2,12,'Clark Moen','2019-09-13','Et ipsa quisquam et.',10,133,'Suscipit.',9,25,29,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(76,'Prof. Emmanuel Huel IV','1-942-379-8976 x26544','Male','2018-06-14','Under Investigation','Fourth Quarter','Daniella Cummerata',NULL,5,13,'Bobbie Lehner','1985-11-09','Inventore illum.',6,36,'Ipsam.',13,18,26,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(77,'Ms. Asa Schmeler','(641) 647-7379 x2898','Male','2016-06-30','Solved','Second Quarter','Dr. Kaela Crooks',NULL,4,13,'Mortimer Osinski','1984-09-14','Nisi repellat et.',8,212,'Autem.',25,14,24,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(78,'Mr. Desmond O\'Conner','475.776.0553 x1678','Male','2019-01-11','Solved','Second Quarter','Webster Gorczany MD',NULL,2,6,'Jovani Mitchell','2003-08-29','Illum corrupti est.',2,336,'Tenetur.',24,17,29,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(79,'Avery Brown','379-805-2693','Female','2016-12-08','Solved','Fourth Quarter','Dr. Hildegard Krajcik III',NULL,1,2,'Joannie Skiles','2019-10-26','Et placeat fugiat.',33,191,'Inventore.',3,27,6,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(80,'Prof. Manley Fisher II','1-916-208-9525 x425','Male','2018-09-02','Registered','Second Quarter','Henry Swift',NULL,2,9,'Cordelia Legros','2010-08-16','Facere quis sit.',34,149,'Quam amet.',11,10,14,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(81,'Virginia Grant IV','619-234-9856 x0608','Female','2018-12-01','Pending','First Quarter','Bernita Walker Sr.',NULL,2,4,'Cristina Dibbert','2007-12-21','Dolores alias.',29,277,'Ut non.',10,27,14,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(82,'Titus Schuppe','(708) 516-2731','Male','2020-02-23','Solved','First Quarter','Bennett Brekke',NULL,2,7,'Mrs. Zaria Ryan','1970-01-28','Ducimus delectus.',30,23,'Ipsam.',30,27,28,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(83,'Ms. Teresa Ebert IV','+13342766185','Female','2018-06-21','Under Investigation','First Quarter','Ms. Amara Fadel DDS',NULL,2,11,'Rita Pfeffer','2008-10-30','Est et facilis et.',25,14,'Vitae quo.',9,20,3,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(84,'Helena Roberts','+14407620803','Female','2017-11-17','Registered','Fourth Quarter','Marta Berge',NULL,1,8,'Prof. Mariam Bogisich','1999-10-10','Eos dolores.',33,305,'Amet.',1,3,3,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(85,'Ida Rice','567-381-2589 x11187','Male','2016-08-25','Pending','Third Quarter','Alberta Conn',NULL,4,13,'Brennon Abbott','1984-12-20','Laborum unde.',9,303,'Voluptas.',6,16,30,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(86,'Rosella Mueller','(295) 231-0975','Female','2018-06-14','Under Investigation','First Quarter','Darlene Torphy III',NULL,1,8,'Helene Becker','1972-08-01','Dolores repudiandae.',24,208,'Et.',14,26,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(87,'Susan Welch V','1-453-821-2268','Female','2016-12-28','Solved','Fourth Quarter','Enrico King',NULL,1,3,'Clark Adams','1971-12-30','Rerum facilis enim.',31,175,'At aut.',12,27,2,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(88,'Edmond Sanford IV','1-462-905-2750 x244','Female','2019-03-05','Registered','Third Quarter','Mr. Hugh Hansen II',NULL,5,10,'Scotty Oberbrunner','2000-12-24','Optio mollitia in.',15,10,'Numquam.',14,21,26,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(89,'Chance Feest','+1-419-868-6098','Female','2016-12-04','Solved','Fourth Quarter','Prof. Brannon Hartmann',NULL,1,14,'Eusebio Becker','2002-02-24','Id recusandae.',19,284,'Totam.',29,25,24,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(90,'Eli Wehner','243-785-2085 x4934','Male','2018-11-19','Under Investigation','Third Quarter','Zakary Abshire',NULL,1,11,'Dr. Shirley Murazik II','1995-01-29','Voluptatem sed.',5,338,'Non.',24,7,1,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(91,'Jaquelin Gottlieb','813-913-0157 x996','Male','2017-10-06','Pending','Fourth Quarter','Mozell Gleichner',NULL,2,2,'Prof. Kamryn Grady','1994-05-11','Enim aut et commodi.',2,236,'Alias.',24,23,11,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(92,'General Barton','+1-903-277-1157','Female','2019-11-25','Registered','Third Quarter','Ruthe McClure',NULL,2,12,'Zoe Bogan I','1977-01-02','Magnam temporibus.',26,115,'Dolorem.',18,30,26,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(93,'Albina Goyette','(504) 563-4058','Female','2019-07-07','Registered','Second Quarter','Shaylee Bogisich',NULL,3,13,'Ms. Diana Ortiz','2009-05-19','Tenetur est totam.',2,177,'Quia.',14,17,15,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(94,'Steve D\'Amore','+1-828-492-4888','Male','2019-11-23','Pending','First Quarter','Annabel Schiller',NULL,1,13,'Ernestine Mosciski','1983-08-26','Omnis natus.',14,117,'Quia.',24,12,26,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(95,'Harvey Altenwerth','1-979-544-0528','Female','2018-08-27','Registered','Second Quarter','Linda Anderson MD',NULL,3,11,'Mrs. Elinore Botsford','1994-05-30','Dolorum ad quis.',3,266,'Iure.',26,1,12,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(96,'Jaden Konopelski III','974.647.9248','Male','2017-10-04','Pending','First Quarter','Dr. Wilford Keebler IV',NULL,2,4,'Prof. Aaron Feeney II','2002-11-17','Quis distinctio.',29,249,'Mollitia.',10,30,30,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(97,'Javonte Little Jr.','(368) 368-3278 x42567','Female','2018-09-16','Solved','Fourth Quarter','Mrs. Aimee Cummerata MD',NULL,3,11,'Americo Torp','1974-05-04','Amet eveniet vel ea.',29,68,'Odit.',5,5,3,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(98,'Dr. Allen Schaefer Sr.','889.845.2665','Male','2018-04-20','Pending','Second Quarter','Nannie Blanda',NULL,2,14,'Dr. Sydnee Stark','2004-08-28','Ut quasi qui sed.',24,215,'Sed omnis.',3,20,15,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(99,'Filiberto Bauch','(471) 758-3517','Male','2019-07-31','Under Investigation','First Quarter','Brady Fadel DDS',NULL,2,13,'Karson Kozey','1996-09-13','Maiores nihil.',12,83,'A et unde.',17,2,25,'2020-05-21 16:52:47','2020-05-21 16:52:47'),(100,'Tressa Bashirian','(829) 231-0677 x159','Female','2016-12-19','Registered','Third Quarter','Mr. Garry Steuber IV',NULL,3,5,'Dr. Virgil Lesch','1976-05-15','Enim fuga quia est.',30,163,'Ut sunt.',9,24,23,'2020-05-21 16:52:47','2020-05-21 16:52:47');
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `districts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `districts_province_id_foreign` (`province_id`),
  CONSTRAINT `districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=399 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES (1,'TirinKOT',1,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(2,'Chora',1,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(3,'Khaz Oruzgan',1,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(4,'Dahr Aword',1,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(5,'Shahid Hasas',1,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(6,'Gizab',1,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(7,'Ab Kamari',2,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(8,'Jawand',2,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(9,'Ghormach',2,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(10,'Qadis',2,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(11,'Qala-I-Naw',2,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(12,'Bala Morghab',2,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(13,'Muqar',2,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(14,'Bamyan',3,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(15,'Kohmard',3,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(16,'Panjab',3,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(17,'Sayghan',3,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(18,'Shibar',3,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(19,'Waras',3,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(20,'Yakawlang',3,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(21,'Arghanj Khawa',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(22,'Argo',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(23,'Ishkashim',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(24,'Baharak',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(25,'Tagab',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(26,'Tishkan',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(27,'Jurm',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(28,'Khash',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(29,'Khawahan',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(30,'Daraym',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(31,'Maimay',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(32,'Nusay',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(33,'Raghistan',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(34,'Zebak',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(35,'Shighnan',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(36,'Shekay',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(37,'Shuhada',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(38,'Shahri Buzurg',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(39,'Fayzabad',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(40,'Kuran Wa Munjan',4,'2020-05-21 16:52:43','2020-05-21 16:52:43'),(41,'Kishim',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(42,'Kuf Ab',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(43,'Kohistan',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(44,'Wakhan',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(45,'Wurduj',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(46,'Yawan',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(47,'Yaftali Paeen',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(48,'Yamgan',4,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(49,'Andarab',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(50,'Baghlan Jadid',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(51,'Burka',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(52,'Puli Hisar',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(53,'Puli KHumri',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(54,'Tala Wa Barfak',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(55,'Jalka',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(56,'Hinjan',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(57,'Khost Wa Fereng',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(58,'Dushi',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(59,'Dahana i Ghuri',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(60,'Dih Salah',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(61,'Farang Wa Gharu',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(62,'Guzargahi Nor',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(63,'Nahrin',5,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(64,'Balkh',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(65,'Char Pulak',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(66,'Chahar kint',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(67,'Chamtal',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(68,'khulmi',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(69,'Dawlatabad',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(70,'Dihdadi',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(71,'Zari',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(72,'Shortepa',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(73,'Sholgara',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(74,'Kishindi',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(75,'Kaldar',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(76,'Marmul',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(77,'Mazar-e Sharif',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(78,'Guzargah-e Nor',6,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(79,'Bagram',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(80,'Jabal Saraj',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(81,'Charika',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(82,'Salang',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(83,'Surkhi Parsa',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(84,'Seyed Khil',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(85,'Shekh Ali',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(86,'Shinwari',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(87,'Ghorband',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(88,'Kohi Safi',7,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(89,'Ahmadabad',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(90,'Jaji',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(91,'Jani Khil',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(92,'Chawuk',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(93,'Chamkani',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(94,'Dand Wa Patan',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(95,'Zargan/Zardan',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(96,'Zurmat',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(97,'Seyed Karam',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(98,'Shawak',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(99,'Ali Khil',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(100,'Gardiz',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(101,'Lazha Ahmad Khel',8,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(102,'Urgun',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(103,'Omna',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(104,'Barmal',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(105,'Terwa',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(106,'Jani Khil',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(107,'Dila Wa Khoshamand',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(108,'Zarghun Shahr',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(109,'Ziruk',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(110,'Sar-e Hawza',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(111,'Sarubi',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(112,'Sharan',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(113,'Gomal',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(114,'Gayan',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(115,'Matahan',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(116,'Naka',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(117,'Waza Khwa',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(118,'Wor Mamay',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(119,'Yahya Khil',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(120,'Yosuf Khil',9,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(121,'Anaba',10,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(122,'Bazarak',10,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(123,'Paryan',10,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(124,'Khinji',10,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(125,'Darah',10,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(126,'Rokha',10,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(127,'Shotul',10,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(128,'Ishkamish',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(129,'Bangi',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(130,'Baharak',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(131,'Taluqan',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(132,'Chal',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(133,'Chah Ab',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(134,'Khwaja Baha Wudin',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(135,'Khwaja Ghar',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(136,'Darqad',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(137,'Dashti Qala',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(138,'Rustaq',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(139,'Farkhar',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(140,'Kalafgan',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(141,'Namak Ab',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(142,'Warsaj',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(143,'Hazar Samuj',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(144,'Yangi Qala',11,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(145,'Aqcha',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(146,'Khaniqa',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(147,'Khamyab',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(148,'Khwaja Do Koh',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(149,'Darzab',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(150,'Shibirghan',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(151,'Fayzabad',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(152,'Qarqin',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(153,'Qush Tepa',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(154,'Mardyan',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(155,'Mingajik',12,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(156,'Bak',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(157,'Tany',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(158,'Tery Zayi',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(159,'Haji Maidan',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(160,'Khust Matun',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(161,'Spera',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(162,'Shamal',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(163,'Sabri',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(164,'Qalandar',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(165,'Guroz',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(166,'Manduzi',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(167,'Musa Khil',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(168,'Nadir Shah Kot',13,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(169,'Ishtarlay',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(170,'Khadir',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(171,'Sang',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(172,'Takht',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(173,'Sharistan',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(174,'Kajran',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(175,'Gizab',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(176,'Miramor',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(177,'Nili',14,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(178,'Atghar',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(179,'Arghandab',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(180,'Tarang Wa Jaldak',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(181,'Daychopan',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(182,'Shah Joy',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(183,'Shamulzayi',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(184,'Shikay',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(185,'Qalat',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(186,'Kakar',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(187,'Mizan',15,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(188,'Balkhab',16,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(189,'Sar-e Pol',16,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(190,'Sangcharak',16,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(191,'Suzma Qala',16,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(192,'Sayyad',16,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(193,'Kohistanat',16,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(194,'Gusfandi',16,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(195,'Aybak',17,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(196,'Hazrat-i Sultan',17,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(197,'Khuram Wa Sarbagh',17,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(198,'Dara-I-Sufi Bala',17,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(199,'Dara-I-Sufi Payan',17,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(200,'Roye Do Ab',17,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(201,'Firuz Nakhchir',17,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(202,'Ab Band',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(203,'Ajristan',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(204,'Andar',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(205,'Bahram Shahid',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(206,'Jaghuri',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(207,'Khwaja Umari',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(208,'Dih Yak',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(209,'Rashidan',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(210,'Zana Khan',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(211,'Ghazni',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(212,'Qarabagh',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(213,'Giro',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(214,'Gilan',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(215,'Malistan',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(216,'Muqar',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(217,'Nawur',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(218,'Nawa',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(219,'Waghaz',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(220,'Wali Mohamd Shahid Khogyani',18,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(221,'Yasaband',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(222,'Tulak',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(223,'Taywara',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(224,'Dawlat Yar',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(225,'Du Layna',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(226,'Charsada',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(227,'Firuz Koh',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(228,'Saghar',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(229,'Shahrak',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(230,'Lal Wa Sarjangal',19,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(231,'Almar',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(232,'Andkhoy',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(233,'Bilcheragh',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(234,'Pashtun Kot',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(235,'Khani Chahar Bagh',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(236,'Dowlat Abad',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(237,'Khwaja Sabz Posht',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(238,'Shirin Tagab',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(239,'Qarghan',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(240,'Qaramqol',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(241,'Qaysar',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(242,'Kohistan',20,'2020-05-21 16:52:44','2020-05-21 16:52:44'),(243,'Gurziwan',20,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(244,'Maymana',20,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(245,'Anar Dara',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(246,'Bala Buluk',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(247,'Bakwa',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(248,'Pur Chaman',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(249,'Pusht Rod',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(250,'Khak Safid',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(251,'Shib Koh',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(252,'Farah',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(253,'Qala i Kah',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(254,'Gulistan',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(255,'Lash Wa Jawain',21,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(256,'Arghistan',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(257,'Arghandab',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(258,'Panjwaye',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(259,'Khakriz',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(260,'Daman',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(261,'Rigistan',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(262,'Zhari',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(263,'Spin Boldak',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(264,'Shah Wali Kot',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(265,'Shorabak',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(266,'Ghorak',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(267,'Ghandahar',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(268,'Miyan Nasheen',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(269,'Maiwand',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(270,'Nish',22,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(271,'Istalif',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(272,'Bagrami',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(273,'Paghman',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(274,'Chahar Asyab',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(275,'Khak Jabar',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(276,'Deh Sabz',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(277,'Sorubi',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(278,'Shakar Dara',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(279,'Farza',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(280,'Kabul',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(281,'Kalkan',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(282,'Guldara',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(283,'Mussani',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(284,'Mir Bacha Kot',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(285,'Gharabaq',23,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(286,'Alasay',24,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(287,'Tagab',24,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(288,'Hesa Awal Kohistan',24,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(289,'Hesa Duwum Kohistan',24,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(290,'Koh Band',24,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(291,'Mahmod Raghi',24,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(292,'Najrab',24,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(293,'Imam Sahib',25,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(294,'Chahar Dara',25,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(295,'Khanabad',25,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(296,'Dasht Archi',25,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(297,'Ali Abad',25,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(298,'Qala-I-Zal',25,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(299,'Konduz',25,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(300,'Asadabad',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(301,'Bar Kunar',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(302,'Khas Kunar',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(303,'Dangam',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(304,'Dar-I-Pech',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(305,'Chapa Dara',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(306,'Chawky',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(307,'Sirkanay',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(308,'Shaygal Wa Shiltan',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(309,'Ghazi Abad',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(310,'Marwara',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(311,'Nari',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(312,'Narang',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(313,'Norgul',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(314,'Wata Por',26,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(315,'Dawlat Shah',27,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(316,'Qarghayi',27,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(317,'Ayshang',27,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(318,'Alingar',27,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(319,'Mehtar Lam',27,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(320,'Arzarah',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(321,'Baraky',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(322,'Pol-I-Alam',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(323,'Charkh',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(324,'Kharwar',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(325,'Khoshi',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(326,'Mohammad Agha',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(327,'Barak',28,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(328,'Achin',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(329,'Bati Kot',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(330,'Behsod',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(331,'Pachir Wa Agam',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(332,'Jalal Abad',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(333,'Hesarak',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(334,'Chaparhar',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(335,'Khogyani',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(336,'Dur Baba',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(337,'Dar-I-Nor',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(338,'Dih Bala',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(339,'Rodat',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(340,'Sorkh Rod',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(341,'Shirzad',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(342,'Shinwar',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(343,'Kot',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(344,'Kuz Kunar',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(345,'Gushta',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(346,'Lal Por',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(347,'Muhmand Dara',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(348,'Nazyan',29,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(349,'Barg Matal',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(350,'Parun',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(351,'Dawab',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(352,'Kamdish',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(353,'Mandol',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(354,'Nurgram',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(355,'Wama',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(356,'Waygal',30,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(357,'Chakhansor',31,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(358,'Char Burjak',31,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(359,'Khash Rod',31,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(360,'Zaranj',31,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(361,'Kang',31,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(362,'Jalriz',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(363,'Jaghato',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(364,'Chak-i-Wardak',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(365,'Hisa-i-Awal Behsud',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(366,'Daymir',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(367,'Saydabad',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(368,'Markaz',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(369,'Behsud',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(370,'Nirkh',32,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(371,'Adraskan',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(372,'Injil',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(373,'Uba',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(374,'Pashtun Zarghon',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(375,'Chishti Sharif',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(376,'Zinda Jan',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(377,'Shindand',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(378,'Ghurian',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(379,'Farsi',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(380,'Karukh',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(381,'Kushk',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(382,'Khushki Kuhna',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(383,'Kuhsan',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(384,'Guzara',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(385,'Gulran',33,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(386,'Baghran',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(387,'Dishu',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(388,'Rig Khan Nishin',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(389,'Sangin',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(390,'Kajaki',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(391,'Garmsir',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(392,'Lashkargah',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(393,'Mussa Qala',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(394,'Nad Ali',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(395,'Nawa-i-Barikzayi',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(396,'Nawzad',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(397,'Nahr-i-Saraj',34,'2020-05-21 16:52:45','2020-05-21 16:52:45'),(398,'Washir',34,'2020-05-21 16:52:45','2020-05-21 16:52:45');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_02_04_060154_create_provinces_table',1),(5,'2020_02_04_060217_create_districts_table',1),(6,'2020_02_04_060258_create_specific_categories_table',1),(7,'2020_02_04_060312_create_broad_categories_table',1),(8,'2020_02_04_065801_create_programs_table',1),(9,'2020_02_04_065805_create_projects_table',1),(10,'2020_02_04_065812_create_complaints_table',1),(11,'2020_05_18_172600_create_permission_tables',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\User',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Create Complaint','web','2020-05-21 16:52:43','2020-05-21 16:52:43'),(2,'View Complaints','web','2020-05-21 16:52:43','2020-05-21 16:52:43'),(3,'Delete Complaint','web','2020-05-21 16:52:43','2020-05-21 16:52:43'),(4,'Edit Complaint','web','2020-05-21 16:52:43','2020-05-21 16:52:43');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES (1,'Qui.','1980-06-10','2005-11-08','2020-05-21 16:52:45','2020-05-21 16:52:45'),(2,'Et.','1975-12-30','1992-12-31','2020-05-21 16:52:45','2020-05-21 16:52:45'),(3,'Et.','1998-08-28','1998-06-18','2020-05-21 16:52:45','2020-05-21 16:52:45'),(4,'Vel.','1994-02-04','1972-04-11','2020-05-21 16:52:45','2020-05-21 16:52:45'),(5,'Quia.','1978-06-18','2006-11-01','2020-05-21 16:52:45','2020-05-21 16:52:45'),(6,'Enim.','1997-10-02','2004-07-18','2020-05-21 16:52:45','2020-05-21 16:52:45'),(7,'Id.','2008-04-04','1980-07-01','2020-05-21 16:52:45','2020-05-21 16:52:45'),(8,'Et.','1981-04-19','2005-09-26','2020-05-21 16:52:45','2020-05-21 16:52:45'),(9,'Et.','2015-03-28','2019-10-11','2020-05-21 16:52:45','2020-05-21 16:52:45'),(10,'Ut.','1972-04-29','1988-11-11','2020-05-21 16:52:45','2020-05-21 16:52:45'),(11,'Odio.','1980-02-21','2012-08-29','2020-05-21 16:52:45','2020-05-21 16:52:45'),(12,'Eius.','1987-06-14','1985-01-27','2020-05-21 16:52:45','2020-05-21 16:52:45'),(13,'Ea.','2016-06-22','1990-09-26','2020-05-21 16:52:45','2020-05-21 16:52:45'),(14,'Iste.','1983-08-25','1973-04-23','2020-05-21 16:52:45','2020-05-21 16:52:45'),(15,'Et.','1987-02-04','1978-02-03','2020-05-21 16:52:45','2020-05-21 16:52:45'),(16,'Nam.','1996-01-31','2005-08-08','2020-05-21 16:52:45','2020-05-21 16:52:45'),(17,'Ut.','1983-05-12','1983-09-01','2020-05-21 16:52:45','2020-05-21 16:52:45'),(18,'Sunt.','1991-03-01','1972-09-01','2020-05-21 16:52:45','2020-05-21 16:52:45'),(19,'Quia.','1998-05-13','1985-08-04','2020-05-21 16:52:45','2020-05-21 16:52:45'),(20,'Quia.','1993-04-04','1994-03-17','2020-05-21 16:52:45','2020-05-21 16:52:45'),(21,'Nisi.','1998-11-24','1991-11-07','2020-05-21 16:52:45','2020-05-21 16:52:45'),(22,'Sit.','1980-11-27','1980-02-03','2020-05-21 16:52:45','2020-05-21 16:52:45'),(23,'Aut.','1979-01-16','2012-10-17','2020-05-21 16:52:45','2020-05-21 16:52:45'),(24,'Et.','1988-06-30','2003-07-01','2020-05-21 16:52:45','2020-05-21 16:52:45'),(25,'Enim.','1978-11-30','1996-06-20','2020-05-21 16:52:45','2020-05-21 16:52:45'),(26,'Enim.','2003-06-01','1985-07-15','2020-05-21 16:52:45','2020-05-21 16:52:45'),(27,'Iure.','2004-02-05','2014-04-03','2020-05-21 16:52:45','2020-05-21 16:52:45'),(28,'Quo.','2005-03-08','2016-09-06','2020-05-21 16:52:45','2020-05-21 16:52:45'),(29,'Et.','2009-02-09','2001-07-26','2020-05-21 16:52:45','2020-05-21 16:52:45'),(30,'Quos.','2010-04-09','2011-05-23','2020-05-21 16:52:45','2020-05-21 16:52:45');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NGO_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `donors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direct_beneficiaries` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indirect_beneficiaries` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_budget_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `off_budget_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` bigint unsigned NOT NULL,
  `district_id` bigint unsigned NOT NULL,
  `project_manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_program_id_foreign` (`program_id`),
  KEY `projects_province_id_foreign` (`province_id`),
  KEY `projects_district_id_foreign` (`district_id`),
  CONSTRAINT `projects_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  CONSTRAINT `projects_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  CONSTRAINT `projects_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'I got up.','Ut.','Ab.','1974-09-13','2001-03-10','Autem eveniet.','Numquam delectus et qui id maxime.','Et.','Quam.','Ex.','Eum.','1063',7,9,'Prof. Leonel Witting MD',23,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(2,'.','Qui.','Nesciunt.','1989-12-22','2004-04-18','Qui est ut a.','Et quis et quas eum voluptatem ut quo.','Ad.','Aut.','Ut.','In.','1254',33,323,'Rosario Cummings',23,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(3,'.','Eum.','Ipsam.','1988-01-05','1993-05-04','A tempore.','Fuga velit ducimus est error vitae.','Vero.','Ea.','Quia.','Cum.','1714',8,115,'Dr. Noe Mitchell',9,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(4,'.','Et.','Ut.','1987-08-19','2002-07-29','Ex autem nulla.','Et et tenetur est ut.','Sint.','Ea.','Qui.','Et.','1955',32,223,'Joanie Strosin MD',14,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(5,'I\'ll set.','Enim.','Eaque.','2012-01-14','2002-10-22','Eum dolor vel.','Sunt veniam ut sit nisi magni.','Et.','Sunt.','Sed.','Et.','542',22,341,'Lucinda Crist',28,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(6,'Latin.','Et.','Vel quos.','1981-01-25','1972-05-24','Sed veniam ut.','Sint ipsum et excepturi dolore.','Quos.','At.','A.','Vel.','1572',21,383,'Genevieve Kovacek',26,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(7,'How she.','Qui.','Eius aut.','1985-05-30','2007-05-11','Molestiae.','Rerum vel ad distinctio cumque.','Qui.','Aut.','Sint.','Modi.','1187',19,123,'Rebeka Schimmel',16,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(8,'In a.','Quas.','Tempore.','1985-07-08','2014-04-22','Et ut.','Cum temporibus quo qui cumque.','Cum.','Sunt.','Qui.','Cum.','1218',28,34,'Leonel Orn',17,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(9,'She soon.','Eum.','Aut aut.','1979-12-17','1976-06-21','Veritatis.','Sed earum ad libero placeat.','Aut.','Est.','Eos.','Enim.','2255',8,185,'Matilde Tillman',4,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(10,'I don\'t.','Ut.','Quia.','1994-03-21','2017-10-15','Laborum.','Saepe eveniet qui dolores et harum.','Et.','Ut.','Quas.','Qui.','1938',27,287,'Jaylon Sauer',22,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(11,'She drew.','Odit.','Rerum.','2010-06-11','1989-04-10','Est quos.','Reprehenderit dolore nam est nam ipsam.','Et.','Illo.','Nemo.','Eos.','700',26,285,'Antonetta Grimes',17,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(12,'It means.','Esse.','Itaque.','1982-12-29','1979-12-24','Eligendi magni.','Atque sit itaque sapiente.','Et.','Sed.','Ut.','Id.','1453',19,18,'Hillard Roob',20,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(13,'Hatter.','Sit.','Unde.','2016-05-04','1978-01-11','Autem.','Facere cupiditate aut qui ut.','Est.','Quam.','Amet.','Qui.','111',5,327,'Dr. Pete Ankunding',26,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(14,'Tortoise.','Quia.','Sequi.','1988-11-18','2002-11-04','Qui sit.','Fuga labore at expedita.','Nam.','Nam.','In.','Et.','1078',20,79,'Dr. Emmett Ernser IV',3,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(15,'Duchess.','Aut.','Natus.','1984-05-26','1979-03-06','Quasi.','Sint et molestiae dolorem.','Qui.','Est.','Sit.','Nisi.','419',4,215,'Milton Hane II',10,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(16,'Mock.','Non.','Sed.','2008-09-26','1993-11-09','Ut ex.','Autem voluptatem explicabo eos fuga.','Non.','Quas.','A.','Qui.','411',5,325,'Ms. Lila Hahn II',18,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(17,'I.','Aut.','Eos.','1977-11-15','1986-11-14','Saepe ab sit.','Rerum nam amet voluptatum.','Ea.','Quae.','Et.','Sit.','1426',8,118,'Mabelle Daniel',7,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(18,'She was.','Odit.','Porro.','1972-02-04','2004-09-12','Et similique.','Labore dolores quia praesentium.','Est.','Quo.','Non.','Eos.','223',27,31,'Cleora Braun V',11,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(19,'Queen.','Nisi.','A animi.','1992-03-15','2004-12-16','Voluptatem.','Dolorum ad quia molestias quia.','Quo.','Sit.','Nemo.','Quia.','2188',22,322,'Mr. Archibald McKenzie',15,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(20,'The.','Est.','Non.','2016-10-01','1995-07-10','Ipsa iusto.','Vero quis natus doloremque dolor.','Est.','Et.','A.','Aut.','207',19,69,'Prof. Meghan Beahan IV',20,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(21,'Some of.','Quo.','Dolore.','1970-12-22','1997-07-01','Sit culpa.','Sed quibusdam est nisi.','Est.','Esse.','Id.','Cum.','966',14,363,'Prof. Vicenta Block MD',27,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(22,'I.','Ut.','Nihil qui.','2017-05-27','1974-06-23','Et unde.','Eum voluptatem sed sint adipisci.','Ea.','Non.','Est.','Quia.','263',9,166,'Ryann Hudson DDS',26,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(23,'And in.','Et.','Quidem.','1972-12-13','2004-04-29','Qui occaecati.','Autem quo veritatis totam sint.','Quae.','Odio.','Modi.','Quia.','1062',12,353,'Westley Wiza DDS',29,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(24,'As they.','Eum.','Assumenda.','2011-01-12','2011-01-18','Ipsum porro.','Molestiae quisquam quibusdam et non.','Nisi.','Ut.','Qui.','Aut.','1735',11,100,'Davonte Ruecker',9,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(25,'Cheshire.','Quia.','Quia cum.','2005-09-01','2020-04-02','Consequuntur.','Ipsa et sit qui non.','Est.','Esse.','Id.','Nam.','1352',25,373,'Miss Lessie Schmidt Sr.',8,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(26,'Rabbit.','Enim.','Dolorum.','1984-03-18','1970-12-09','Voluptates.','Iure facere odio repellendus voluptas.','Rem.','Fuga.','Nam.','Quam.','1577',16,346,'Eleazar Howe',14,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(27,'Duchess.','Nisi.','Aut.','1978-08-10','2013-08-04','Libero eveniet.','Et laudantium beatae et odit ea.','Quo.','Eum.','Ipsa.','Ea.','1175',9,177,'Dr. Malika Lang II',26,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(28,'I\'ve got.','Est.','Natus.','1976-07-01','1981-09-26','Neque qui quo.','Ea ut magni error voluptates.','Id.','Quo.','Eum.','Quos.','1719',8,6,'Elza Hauck',19,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(29,'.','Quia.','Vel.','1983-12-13','1980-12-15','Sunt delectus.','Et quasi error odit.','Qui.','Sed.','Nisi.','Qui.','730',9,390,'Mrs. Vicky Harvey',13,'2020-05-21 16:52:46','2020-05-21 16:52:46'),(30,'CHAPTER.','Ex.','Eos.','1986-07-26','2001-12-29','Earum sequi.','Modi dolorem nisi unde ducimus.','Sit.','Qui.','Eos.','Sit.','1929',6,84,'Anastasia Thiel',7,'2020-05-21 16:52:46','2020-05-21 16:52:46');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provinces` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (1,'Orozgan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(2,'Badqis','2020-05-21 16:52:43','2020-05-21 16:52:43'),(3,'Bamyan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(4,'Badakhshan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(5,'Baqlan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(6,'Balkh','2020-05-21 16:52:43','2020-05-21 16:52:43'),(7,'Parwan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(8,'Paktia','2020-05-21 16:52:43','2020-05-21 16:52:43'),(9,'Paktika','2020-05-21 16:52:43','2020-05-21 16:52:43'),(10,'Pnjshir','2020-05-21 16:52:43','2020-05-21 16:52:43'),(11,'Takhar','2020-05-21 16:52:43','2020-05-21 16:52:43'),(12,'Jawzjan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(13,'Khost','2020-05-21 16:52:43','2020-05-21 16:52:43'),(14,'Daikondy','2020-05-21 16:52:43','2020-05-21 16:52:43'),(15,'Zabol','2020-05-21 16:52:43','2020-05-21 16:52:43'),(16,'SarePole','2020-05-21 16:52:43','2020-05-21 16:52:43'),(17,'Samangan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(18,'ghazni','2020-05-21 16:52:43','2020-05-21 16:52:43'),(19,'ghore','2020-05-21 16:52:43','2020-05-21 16:52:43'),(20,'Faryab','2020-05-21 16:52:43','2020-05-21 16:52:43'),(21,'Farah','2020-05-21 16:52:43','2020-05-21 16:52:43'),(22,'Kandahar','2020-05-21 16:52:43','2020-05-21 16:52:43'),(23,'Kabul','2020-05-21 16:52:43','2020-05-21 16:52:43'),(24,'Kapisa','2020-05-21 16:52:43','2020-05-21 16:52:43'),(25,'Kunduz','2020-05-21 16:52:43','2020-05-21 16:52:43'),(26,'Kunar','2020-05-21 16:52:43','2020-05-21 16:52:43'),(27,'Laghman','2020-05-21 16:52:43','2020-05-21 16:52:43'),(28,'Logar','2020-05-21 16:52:43','2020-05-21 16:52:43'),(29,'Nangarhar','2020-05-21 16:52:43','2020-05-21 16:52:43'),(30,'Norestan','2020-05-21 16:52:43','2020-05-21 16:52:43'),(31,'Nimruz','2020-05-21 16:52:43','2020-05-21 16:52:43'),(32,'Wardak','2020-05-21 16:52:43','2020-05-21 16:52:43'),(33,'Herat','2020-05-21 16:52:43','2020-05-21 16:52:43'),(34,'Helmand','2020-05-21 16:52:43','2020-05-21 16:52:43');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(1,2),(2,2),(2,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2020-05-21 16:52:43','2020-05-21 16:52:43'),(2,'User','web','2020-05-21 16:52:43','2020-05-21 16:52:43'),(3,'Guest','web','2020-05-21 16:52:43','2020-05-21 16:52:43');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specific_categories`
--

DROP TABLE IF EXISTS `specific_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specific_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specific_categories`
--

LOCK TABLES `specific_categories` WRITE;
/*!40000 ALTER TABLE `specific_categories` DISABLE KEYS */;
INSERT INTO `specific_categories` VALUES (1,'Quantity of distributed items or cash','2020-05-21 16:52:45','2020-05-21 16:52:45'),(2,'Quality of distributed items','2020-05-21 16:52:45','2020-05-21 16:52:45'),(3,' Long waiting time at  distribution point','2020-05-21 16:52:45','2020-05-21 16:52:45'),(4,'Lack of information about programme','2020-05-21 16:52:45','2020-05-21 16:52:45'),(5,'Issues during targeting process (corruption, favoritism…)','2020-05-21 16:52:45','2020-05-21 16:52:45'),(6,'Distrust - between staff and beneficiary','2020-05-21 16:52:45','2020-05-21 16:52:45'),(7,'Disrespect & arrogance of Cordaid or partner staff','2020-05-21 16:52:45','2020-05-21 16:52:45'),(8,'Inaccessible assistance','2020-05-21 16:52:45','2020-05-21 16:52:45'),(9,'Broken promises','2020-05-21 16:52:45','2020-05-21 16:52:45'),(10,'Unaddressed grievances','2020-05-21 16:52:45','2020-05-21 16:52:45'),(11,'Abuse of power & inappropriate behavior of Cordaid or partner staff','2020-05-21 16:52:45','2020-05-21 16:52:45'),(12,'Allegation of financial fraud (by Cordaid or partner staff or others)','2020-05-21 16:52:45','2020-05-21 16:52:45'),(13,'Has cordaid beneficiary card but receive no assistance','2020-05-21 16:52:45','2020-05-21 16:52:45'),(14,'Other (please specify)','2020-05-21 16:52:45','2020-05-21 16:52:45');
/*!40000 ALTER TABLE `specific_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@email.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','SAZ3ab0Cy9','2020-05-21 16:52:43','2020-05-21 16:52:43'),(2,'Libby Moore','tomasa18@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','fKFZbOFBas','2020-05-21 16:52:43','2020-05-21 16:52:43'),(3,'Lavon Stanton','towne.arlie@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','bJwt9tWcUp','2020-05-21 16:52:43','2020-05-21 16:52:43'),(4,'Nikita Dietrich DDS','ihowe@example.org','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','iC6qlnWJLF','2020-05-21 16:52:43','2020-05-21 16:52:43'),(5,'Rhiannon Ondricka','leffler.lera@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','l3lP6AYvkJ','2020-05-21 16:52:43','2020-05-21 16:52:43'),(6,'Itzel Mayer','marilie.botsford@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','r2NcFI4H8Q','2020-05-21 16:52:43','2020-05-21 16:52:43'),(7,'Demarco Dach','weber.elmira@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Z6T7WVxumZ','2020-05-21 16:52:43','2020-05-21 16:52:43'),(8,'Eryn Schulist','hoeger.marques@example.org','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','j0vaTdUYz0','2020-05-21 16:52:43','2020-05-21 16:52:43'),(9,'Marcelina Mohr','abby61@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','j2mK4fmqkz','2020-05-21 16:52:43','2020-05-21 16:52:43'),(10,'Miss Trisha Mertz I','anderson64@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ZzilONrl5o','2020-05-21 16:52:43','2020-05-21 16:52:43'),(11,'Mckayla Rosenbaum','sophie.baumbach@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','c0HlkyOmQ7','2020-05-21 16:52:43','2020-05-21 16:52:43'),(12,'Maegan Pouros','jalen.mosciski@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','QiMKbu4lL7','2020-05-21 16:52:43','2020-05-21 16:52:43'),(13,'Brenda Heidenreich','isidro33@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','N6UYyWbhaQ','2020-05-21 16:52:43','2020-05-21 16:52:43'),(14,'Raymond Roob','dkovacek@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','EWZ6gzi22T','2020-05-21 16:52:43','2020-05-21 16:52:43'),(15,'Fidel McGlynn II','zschneider@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','19hDhALo9r','2020-05-21 16:52:43','2020-05-21 16:52:43'),(16,'Odessa Grant','trevor.wisoky@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','gMzz4Bu2tx','2020-05-21 16:52:43','2020-05-21 16:52:43'),(17,'Brayan Von MD','lockman.christina@example.org','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','V5m8qf3jVV','2020-05-21 16:52:43','2020-05-21 16:52:43'),(18,'Eunice Douglas','xhyatt@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','WSwyPb9S4n','2020-05-21 16:52:43','2020-05-21 16:52:43'),(19,'Elliott Luettgen','lemke.newell@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','H0InbPF0eC','2020-05-21 16:52:43','2020-05-21 16:52:43'),(20,'Carey Wuckert','jakayla29@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','yX25u3KmD1','2020-05-21 16:52:43','2020-05-21 16:52:43'),(21,'Ms. Eldridge Rippin','srowe@example.org','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','CqI9qBtMUO','2020-05-21 16:52:43','2020-05-21 16:52:43'),(22,'Dr. Dawson Quitzon DVM','raynor.torrey@example.org','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','qDFTvKKDwc','2020-05-21 16:52:43','2020-05-21 16:52:43'),(23,'Maida Williamson','celestino.flatley@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','pj5NkTswKK','2020-05-21 16:52:43','2020-05-21 16:52:43'),(24,'Vena Trantow','adella.lang@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','83exzJK2x9','2020-05-21 16:52:43','2020-05-21 16:52:43'),(25,'Kale Mayert DDS','tbosco@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','XuLx2ak8Xa','2020-05-21 16:52:43','2020-05-21 16:52:43'),(26,'Archibald Rath DDS','bdaugherty@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Btadr5w5hz','2020-05-21 16:52:43','2020-05-21 16:52:43'),(27,'Miss Ana Herman','margarett64@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','6W5PGfvZXh','2020-05-21 16:52:43','2020-05-21 16:52:43'),(28,'Johnathon Collier','kherman@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','xdeCn8MqSh','2020-05-21 16:52:43','2020-05-21 16:52:43'),(29,'Graham Sauer III','fparker@example.com','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','l4Tm6rPI1t','2020-05-21 16:52:43','2020-05-21 16:52:43'),(30,'Jayne Fadel','wdaugherty@example.net','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ZjzpA3jT9x','2020-05-21 16:52:43','2020-05-21 16:52:43'),(31,'Dr. Ezekiel Blick DVM','rico37@example.org','2020-05-21 16:52:43','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','kNruMNfLMl','2020-05-21 16:52:43','2020-05-21 16:52:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-22  2:03:29
