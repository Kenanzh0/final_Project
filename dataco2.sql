CREATE DATABASE  IF NOT EXISTS `dataco` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dataco`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dataco
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `df_jan_egypt`
--

DROP TABLE IF EXISTS `df_jan_egypt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `df_jan_egypt` (
  `date` text,
  `new_cases` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `df_jan_egypt`
--

LOCK TABLES `df_jan_egypt` WRITE;
/*!40000 ALTER TABLE `df_jan_egypt` DISABLE KEYS */;
INSERT INTO `df_jan_egypt` VALUES ('2021-01-01',0),('2021-01-02',0),('2021-01-03',9563),('2021-01-04',0),('2021-01-05',0),('2021-01-06',0),('2021-01-07',0),('2021-01-08',0),('2021-01-09',0),('2021-01-10',7921),('2021-01-11',0),('2021-01-12',0),('2021-01-13',0),('2021-01-14',0),('2021-01-15',0),('2021-01-16',0),('2021-01-17',6708),('2021-01-18',0),('2021-01-19',0),('2021-01-20',0),('2021-01-21',0),('2021-01-22',0),('2021-01-23',0),('2021-01-24',5636),('2021-01-25',0),('2021-01-26',0),('2021-01-27',0),('2021-01-28',0),('2021-01-29',0),('2021-01-30',0),('2021-01-31',4275);
/*!40000 ALTER TABLE `df_jan_egypt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `df_jun_syria`
--

DROP TABLE IF EXISTS `df_jun_syria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `df_jun_syria` (
  `date` text,
  `new_cases` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `df_jun_syria`
--

LOCK TABLES `df_jun_syria` WRITE;
/*!40000 ALTER TABLE `df_jun_syria` DISABLE KEYS */;
INSERT INTO `df_jun_syria` VALUES ('2020-06-01',0),('2020-06-02',0),('2020-06-03',0),('2020-06-04',0),('2020-06-05',0),('2020-06-06',0),('2020-06-07',3),('2020-06-08',0),('2020-06-09',0),('2020-06-10',0),('2020-06-11',0),('2020-06-12',0),('2020-06-13',0),('2020-06-14',45),('2020-06-15',0),('2020-06-16',0),('2020-06-17',0),('2020-06-18',0),('2020-06-19',0),('2020-06-20',0),('2020-06-21',28),('2020-06-22',0),('2020-06-23',0),('2020-06-24',0),('2020-06-25',0),('2020-06-26',0),('2020-06-27',0),('2020-06-28',58),('2020-06-29',0),('2020-06-30',0);
/*!40000 ALTER TABLE `df_jun_syria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_icu_hosp_patients_max`
--

DROP TABLE IF EXISTS `table_icu_hosp_patients_max`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_icu_hosp_patients_max` (
  `location` text,
  `total_cases` double DEFAULT NULL,
  `hosp_patients` double DEFAULT NULL,
  `icu_patients` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_icu_hosp_patients_max`
--

LOCK TABLES `table_icu_hosp_patients_max` WRITE;
/*!40000 ALTER TABLE `table_icu_hosp_patients_max` DISABLE KEYS */;
INSERT INTO `table_icu_hosp_patients_max` VALUES ('Australia',11679177,5571,424),('Austria',6080775,4689,709),('Belgium',4801652,7461,1474),('Bolivia',1108648,2433,235),('Bulgaria',1317573,10355,799),('Canada',4785876,11489,1313),('Cyprus',656904,301,57),('Czechia',4758954,9552,1896),('Denmark',3414007,1762,153),('Estonia',600527,707,70),('Finland',1429634,1089,83),('France',38588428,33466,7019),('Ireland',1725769,1610,92),('Italy',26718988,38507,4068),('Japan',33803572,44458,3034),('Lithuania',1321540,1771,161),('Luxembourg',380092,247,50),('Malaysia',5277985,14753,1593),('Netherlands',8635786,1918,769),('Portugal',5519969,6869,904),('Romania',3393902,20951,1902),('Serbia',2542831,9731,353),('Slovakia',1864631,3958,633),('Slovenia',1338819,1324,289),('South Africa',4002133,18034,2694),('South Korea',30498878,22810,1299),('Spain',13968644,27029,4894),('Sweden',2700639,2776,560),('Switzerland',4402475,3716,534),('United Kingdom',22247777,38745,4077);
/*!40000 ALTER TABLE `table_icu_hosp_patients_max` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-16 13:57:06
