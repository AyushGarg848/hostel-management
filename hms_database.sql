-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: hms_database
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1
--
-- Table structure for table `Hostel`
--
DROP TABLE IF EXISTS `Hostel`;

CREATE TABLE `Hostel` (
  `Hostel_id` int(10) NOT NULL AUTO_INCREMENT,
  `Hostel_name` varchar(255) NOT NULL,
  `No_of_rooms` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Hostel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
--
-- Dumping data for table `Hostel`
--
LOCK TABLES `Hostel` WRITE;
/*!40000 ALTER TABLE `Hostel` DISABLE KEYS */;
INSERT INTO `Hostel` VALUES (1,'NIEBH_A','5'),(2,'NIEBH_B','5'),(3,'Yeshvika','5'),(4,'Yuvika','5');
/*!40000 ALTER TABLE `Hostel` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `Message`
--
DROP TABLE IF EXISTS `Message`;

CREATE TABLE `Message` (
  `msg_id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(255) DEFAULT NULL,
  `hostel_id` int(10) DEFAULT NULL,
  `subject_h` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `msg_date` varchar(255) DEFAULT NULL,
  `msg_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`msg_id`),
  KEY `hostel_id` (`hostel_id`),
  CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `Hostel` (`Hostel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
--
-- Table structure for table `Room`
--
DROP TABLE IF EXISTS `Room`;

CREATE TABLE `Room` (
  `Room_id` int(10) NOT NULL AUTO_INCREMENT,
  `Hostel_id` int(10) NOT NULL,
  `Room_No` int(10) NOT NULL,
  `Allocated` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`Room_id`),
  KEY `Hostel_id` (`Hostel_id`),
  CONSTRAINT `Room_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `Hostel` (`Hostel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `Room`
--
LOCK TABLES `Room` WRITE;
/*!40000 ALTER TABLE `Room` DISABLE KEYS */;
INSERT INTO `Room` VALUES (1,1,101,0),(6,2,201,0),(11,3,301,0),(16,4,401,0);
/*!40000 ALTER TABLE `Room` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `Student`
--
DROP TABLE IF EXISTS `Student`;

CREATE TABLE `Student` (
  `Student_id` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Year_of_study` varchar(255) NOT NULL,
  `Pwd` longtext NOT NULL,
  `Hostel_id` int(10) DEFAULT NULL,
  `Room_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`Student_id`),
  KEY `Hostel_id` (`Hostel_id`),
  KEY `Room_id` (`Room_id`),
  CONSTRAINT `Student_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `Hostel` (`Hostel_id`),
  CONSTRAINT `Student_ibfk_2` FOREIGN KEY (`Room_id`) REFERENCES `Room` (`Room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Table structure for table `Application`
--
DROP TABLE IF EXISTS `Application`;

CREATE TABLE `Application` (
  `Application_id` int(100) NOT NULL AUTO_INCREMENT,
  `Student_id` varchar(255) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Application_status` tinyint(1) DEFAULT NULL,
  `Room_No` int(10) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Application_id`),
  KEY `Student_id` (`Student_id`),
  KEY `Hostel_id` (`Hostel_id`),
  CONSTRAINT `Application_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `Student` (`Student_id`),
  CONSTRAINT `Application_ibfk_2` FOREIGN KEY (`Hostel_id`) REFERENCES `Hostel` (`Hostel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dump completed on 2018-10-15 14:14:14