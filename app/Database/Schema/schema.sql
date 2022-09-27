-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: upleads
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.22.04.1

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
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campaigns` (
  `id` varchar(64) NOT NULL,
  `name` text,
  `user_id` varchar(64) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `affiliateApproval` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns`
--

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;
INSERT INTO `campaigns` VALUES ('defe99e95242937bdd66aa46a856cbe5cd2cfc657928b49617c78ff77a5fbbe4','mlabelle','e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855','Inactive','Automatic');
/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('99r968d8bg2l3qniesfudscg67i4it82','127.0.0.1','2022-09-24 15:11:06',_binary '__ci_last_regenerate|i:1664032266;_ci_previous_url|s:31:\"http://upleads.local/auth/login\";'),('951vaiksm3fu1ssg9ggic7825r3b74jo','127.0.0.1','2022-09-24 15:16:17',_binary '__ci_last_regenerate|i:1664032577;_ci_previous_url|s:21:\"http://upleads.local/\";'),('rbjsfbv7m3ilimt6kht6am0ln8q5q6sp','127.0.0.1','2022-09-24 15:23:21',_binary '__ci_last_regenerate|i:1664033001;_ci_previous_url|s:21:\"http://upleads.local/\";'),('7db8jjgql4sd3l5jt71k43kulqcmvvp4','127.0.0.1','2022-09-24 15:28:32',_binary '__ci_last_regenerate|i:1664033312;_ci_previous_url|s:21:\"http://upleads.local/\";'),('58t92n2kelfifpb1o8kfb99npj872sgp','127.0.0.1','2022-09-24 15:34:15',_binary '__ci_last_regenerate|i:1664033655;_ci_previous_url|s:21:\"http://upleads.local/\";'),('4d4877jhk89qbltig130prlob8av3ttm','127.0.0.1','2022-09-24 15:44:52',_binary '__ci_last_regenerate|i:1664034292;_ci_previous_url|s:33:\"http://upleads.local/home/pricing\";'),('h0pnmienp6in89prhiafiqdol3ti2i8r','127.0.0.1','2022-09-24 15:48:41',_binary '__ci_last_regenerate|i:1664034292;_ci_previous_url|s:21:\"http://upleads.local/\";'),('b02q8vho2tpn6tt6gn8n2te1ptq7kua7','127.0.0.1','2022-09-24 19:34:59',_binary '__ci_last_regenerate|i:1664048099;_ci_previous_url|s:31:\"http://upleads.local/auth/login\";'),('cie8fkkl83uobmmi0c67ujraqbd5qvgl','127.0.0.1','2022-09-24 20:58:58',_binary '__ci_last_regenerate|i:1664053138;_ci_previous_url|s:21:\"http://upleads.local/\";'),('6oft52jn5g5g2a9hh3c4t3r2g2349o2m','127.0.0.1','2022-09-24 21:04:02',_binary '__ci_last_regenerate|i:1664053442;_ci_previous_url|s:34:\"http://upleads.local/auth/register\";'),('q5obnejc0am5pa5qa92jhsdho9qt5lb2','127.0.0.1','2022-09-24 21:09:15',_binary '__ci_last_regenerate|i:1664053755;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('8r1ui4kpaii34666k69745ijcepslqqo','127.0.0.1','2022-09-24 21:15:15',_binary '__ci_last_regenerate|i:1664054115;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('2udqkctvp8274nd16aq4jrejijvl6pui','127.0.0.1','2022-09-24 21:21:18',_binary '__ci_last_regenerate|i:1664054478;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('7sjrg31hs6rfijreapg2m36jsr2i7dfv','127.0.0.1','2022-09-24 21:27:18',_binary '__ci_last_regenerate|i:1664054838;_ci_previous_url|s:33:\"http://upleads.local/home/pricing\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('22t3ttg207apu7ksa7da33v3nmochmbp','127.0.0.1','2022-09-24 21:33:17',_binary '__ci_last_regenerate|i:1664055197;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('3ikr4cl855v7tm12q15sehhr9rgltmp4','127.0.0.1','2022-09-24 21:49:17',_binary '__ci_last_regenerate|i:1664056157;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('e7590slem775jgj9un76f4h178fqjfif','127.0.0.1','2022-09-24 21:55:40',_binary '__ci_last_regenerate|i:1664056540;_ci_previous_url|s:25:\"http://upleads.local/help\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('9risashvsorrfvtoaqdf24gag35ho735','127.0.0.1','2022-09-24 22:00:45',_binary '__ci_last_regenerate|i:1664056845;_ci_previous_url|s:25:\"http://upleads.local/help\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('d63kgfa2ocri671jfme4mnoum9nsk7c1','127.0.0.1','2022-09-24 22:21:12',_binary '__ci_last_regenerate|i:1664058072;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('ahf8nh7jcvpmg6e8spg9ku77uscbq9sc','127.0.0.1','2022-09-24 22:26:51',_binary '__ci_last_regenerate|i:1664058411;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('iq7u4gpnqe0cnpac5feu9dkovhab8c3p','127.0.0.1','2022-09-24 22:32:10',_binary '__ci_last_regenerate|i:1664058730;_ci_previous_url|s:25:\"http://upleads.local/help\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('n2r02bpl7e3ii5847tvjvl2qqj5qef53','127.0.0.1','2022-09-24 22:39:30',_binary '__ci_last_regenerate|i:1664059170;_ci_previous_url|s:33:\"http://upleads.local/home/pricing\";'),('if9kq4patkif8arj1ld0lsmjleqnveko','127.0.0.1','2022-09-24 22:51:45',_binary '__ci_last_regenerate|i:1664059905;_ci_previous_url|s:25:\"http://upleads.local/help\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('ejmeg2n0isn3au0knas1qligk942udrq','127.0.0.1','2022-09-24 22:57:23',_binary '__ci_last_regenerate|i:1664060243;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('q2jbeibmqo21c57v3kc7v5iulh7h8rd2','127.0.0.1','2022-09-24 22:58:51',_binary '__ci_last_regenerate|i:1664060243;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('0hf1rgmrte4trmuvk64g5njm7u06h7ag','127.0.0.1','2022-09-25 16:40:32',_binary '__ci_last_regenerate|i:1664124032;_ci_previous_url|s:33:\"http://upleads.local/home/pricing\";'),('9l4pqkq2fqek1a9gavp8o66jeiokbqvp','127.0.0.1','2022-09-25 16:52:21',_binary '__ci_last_regenerate|i:1664124741;_ci_previous_url|s:21:\"http://upleads.local/\";'),('l28vlgvht9spsjlpeffva0v7ccu4254k','127.0.0.1','2022-09-25 17:06:14',_binary '__ci_last_regenerate|i:1664125574;_ci_previous_url|s:25:\"http://upleads.local/help\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('9barillpumbe3nf61u5m3g6hk8o1siin','127.0.0.1','2022-09-25 17:13:25',_binary '__ci_last_regenerate|i:1664126005;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('q7lgor2bnt96gifq4b3tiq1j6kq1n423','127.0.0.1','2022-09-25 17:21:15',_binary '__ci_last_regenerate|i:1664126475;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('m3tn631bvt8koivvl1oc8er4scrna16d','127.0.0.1','2022-09-25 17:26:23',_binary '__ci_last_regenerate|i:1664126783;_ci_previous_url|s:44:\"http://upleads.local/merchants/campaigns/new\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('7a9tivond5audiksbic74cv2qg6aft83','127.0.0.1','2022-09-25 17:31:43',_binary '__ci_last_regenerate|i:1664127103;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('n1pf1q3mjjci9rootk70je7b5g7c6597','127.0.0.1','2022-09-25 17:37:17',_binary '__ci_last_regenerate|i:1664127437;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('ub4gsv5agqkijjguqmq1dc3h10qhc35g','127.0.0.1','2022-09-25 17:39:38',_binary '__ci_last_regenerate|i:1664127437;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('9704isnat78o9ah4mpoh6vptrf67aftu','127.0.0.1','2022-09-27 10:31:52',_binary '__ci_last_regenerate|i:1664274712;_ci_previous_url|s:21:\"http://upleads.local/\";'),('rupe0kb5ig67t74774b8v1m9i0nkr6k7','127.0.0.1','2022-09-27 10:37:10',_binary '__ci_last_regenerate|i:1664275030;_ci_previous_url|s:21:\"http://upleads.local/\";'),('n4q1va39jbn9r9sbckp2akgc3ck6c3m8','127.0.0.1','2022-09-27 10:48:25',_binary '__ci_last_regenerate|i:1664275705;_ci_previous_url|s:21:\"http://upleads.local/\";'),('nm1922e0r8bl138souggi1d17r23o2qg','127.0.0.1','2022-09-27 10:53:50',_binary '__ci_last_regenerate|i:1664276030;_ci_previous_url|s:33:\"http://upleads.local/home/pricing\";'),('jvifbkvqve6ntmqbjrea782kh92dni24','127.0.0.1','2022-09-27 11:04:09',_binary '__ci_last_regenerate|i:1664276649;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('sb4ermcb5hejknok9t0c1078l5pee69r','127.0.0.1','2022-09-27 11:10:34',_binary '__ci_last_regenerate|i:1664277034;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('4tari29cjuacn9nd3fkbkqssmpop0ueq','127.0.0.1','2022-09-27 11:16:34',_binary '__ci_last_regenerate|i:1664277394;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('iunlvjbor60f2oka4257m694i2qks35v','127.0.0.1','2022-09-27 11:22:35',_binary '__ci_last_regenerate|i:1664277755;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('8hrj01famdcbnb2qmfi5m1m1eq8c4hpv','127.0.0.1','2022-09-27 11:27:41',_binary '__ci_last_regenerate|i:1664278061;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('90qqeme5n903qfc57miaflu4a4v3ejkp','127.0.0.1','2022-09-27 11:32:49',_binary '__ci_last_regenerate|i:1664278369;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('sbviq7uoulqf5784ds1d3hf8c9fek63a','127.0.0.1','2022-09-27 11:39:55',_binary '__ci_last_regenerate|i:1664278795;_ci_previous_url|s:110:\"http://upleads.local/merchants/campaigns/edit/ddf692238e7db978caabfdb5940d9554a602cdf73b61078e344c0faa5b3c6223\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('69433ugsqg38l8sjpa2k6504h0pmpjp7','127.0.0.1','2022-09-27 11:44:57',_binary '__ci_last_regenerate|i:1664279097;_ci_previous_url|s:110:\"http://upleads.local/merchants/campaigns/edit/ddf692238e7db978caabfdb5940d9554a602cdf73b61078e344c0faa5b3c6223\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('q1g5dm91tuv109e8f4l9kpcf2pga3m6b','127.0.0.1','2022-09-27 11:50:16',_binary '__ci_last_regenerate|i:1664279416;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('lp7pv7jscjb6fhrq4i0do4p17u1iai9u','127.0.0.1','2022-09-27 11:55:19',_binary '__ci_last_regenerate|i:1664279719;_ci_previous_url|s:33:\"http://upleads.local/home/pricing\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('t6b3lvkp4uh1rjvqiq28fsasif1q93p7','127.0.0.1','2022-09-27 12:02:19',_binary '__ci_last_regenerate|i:1664280139;_ci_previous_url|s:40:\"http://upleads.local/merchants/campaigns\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('oqsgj1s4ha2eo7m63i64mhsjaodct50d','127.0.0.1','2022-09-27 12:07:40',_binary '__ci_last_regenerate|i:1664280460;_ci_previous_url|s:36:\"http://upleads.local/admin/users/new\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('boiid23h9vlcft7parm8pii6b80l23ls','127.0.0.1','2022-09-27 12:12:45',_binary '__ci_last_regenerate|i:1664280765;_ci_previous_url|s:102:\"http://upleads.local/admin/users/edit/2f36acccb20fcbcdb779b9d9c0d58e2a6579c7efb9ddac629a6ce4e802de5e40\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('sp392b98dp9ca9q30ngvgn8lp8178p0l','127.0.0.1','2022-09-27 12:26:24',_binary '__ci_last_regenerate|i:1664281584;_ci_previous_url|s:32:\"http://upleads.local/admin/users\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('t4ckht8h15pkqvc5rap96t2i2fnbrt0p','127.0.0.1','2022-09-27 12:31:31',_binary '__ci_last_regenerate|i:1664281891;_ci_previous_url|s:32:\"http://upleads.local/admin/users\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('7f1ck8uhqpd1lq2nbpsnojlp12jj8ovl','127.0.0.1','2022-09-27 12:38:38',_binary '__ci_last_regenerate|i:1664282318;_ci_previous_url|s:102:\"http://upleads.local/admin/users/edit/e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('plkekb43ott6she82fi2gr6mb355rtk7','127.0.0.1','2022-09-27 12:43:50',_binary '__ci_last_regenerate|i:1664282630;_ci_previous_url|s:102:\"http://upleads.local/admin/users/edit/849da1513223f86c3faeb46b441c8eeb7198dd69406ef0ee34e31da6ce253f22\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('i9e3h8mano661brkdl5kfv5rsml33abj','127.0.0.1','2022-09-27 12:49:17',_binary '__ci_last_regenerate|i:1664282957;_ci_previous_url|s:32:\"http://upleads.local/admin/users\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('uhqv5ha4pf6qu852k6vaadptpsghm03o','127.0.0.1','2022-09-27 12:54:18',_binary '__ci_last_regenerate|i:1664283258;_ci_previous_url|s:30:\"http://upleads.local/dashboard\";userId|s:64:\"e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855\";'),('j5g6pqfrj6dm0qihhni6i3frrndmmalj','127.0.0.1','2022-09-27 13:04:19',_binary '__ci_last_regenerate|i:1664283859;_ci_previous_url|s:31:\"http://upleads.local/auth/login\";userId|s:64:\"849da1513223f86c3faeb46b441c8eeb7198dd69406ef0ee34e31da6ce253f22\";'),('njo2hr3qtcrn91merqedii84spdirb1h','127.0.0.1','2022-09-27 13:10:03',_binary '__ci_last_regenerate|i:1664284203;_ci_previous_url|s:32:\"http://upleads.local/admin/users\";userId|s:64:\"849da1513223f86c3faeb46b441c8eeb7198dd69406ef0ee34e31da6ce253f22\";'),('nnocvd5csb2hru0dlko8o74voilq7ha0','127.0.0.1','2022-09-27 13:11:28',_binary '__ci_last_regenerate|i:1664284203;_ci_previous_url|s:32:\"http://upleads.local/admin/users\";userId|s:64:\"849da1513223f86c3faeb46b441c8eeb7198dd69406ef0ee34e31da6ce253f22\";');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` varchar(64) NOT NULL,
  `email` text,
  `passwordhash` text,
  `status` varchar(45) DEFAULT NULL,
  `name` varchar(512) DEFAULT NULL,
  `roles` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('2f36acccb20fcbcdb779b9d9c0d58e2a6579c7efb9ddac629a6ce4e802de5e40','john@doe.com','$2y$10$9TN94RIcK3/JY0T.6.FMquNTGA0oJZrTe3sJmsLDvukNaSe24SmYG','Active','John Doe','[\"Affiliate\"]'),('849da1513223f86c3faeb46b441c8eeb7198dd69406ef0ee34e31da6ce253f22','maxime.labelle@owasp.org','$2y$10$n9xVS2X.tIujyIYE.xT/levliE/8SOF8q9nLA2OdysAyqRa4Eq1Iq','Active','Cellulare Xpert','[\"Affiliate\"]'),('e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855','maxime.labelle@owasp.org','$2y$10$9ygbt1l7yrHj9KyYDaGJYu.kFGwTo/qwu9dqDL.Or4UxHVnHm..fe','Active','Maxime Labelle','[\"Admin\",\"Affiliate\"]');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_programs`
--

DROP TABLE IF EXISTS `users_programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_programs` (
  `id` varchar(64) NOT NULL,
  `user_id` varchar(64) DEFAULT NULL,
  `campaign_id` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_programs`
--

LOCK TABLES `users_programs` WRITE;
/*!40000 ALTER TABLE `users_programs` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_programs_links`
--

DROP TABLE IF EXISTS `users_programs_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_programs_links` (
  `id` varchar(64) NOT NULL,
  `users_programs_id` varchar(64) DEFAULT NULL,
  `affiliate_link_id` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_programs_links`
--

LOCK TABLES `users_programs_links` WRITE;
/*!40000 ALTER TABLE `users_programs_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_programs_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wallets` (
  `id` varchar(64) NOT NULL,
  `user_id` varchar(64) DEFAULT NULL,
  `balance` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallets`
--

LOCK TABLES `wallets` WRITE;
/*!40000 ALTER TABLE `wallets` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-27  9:12:24
