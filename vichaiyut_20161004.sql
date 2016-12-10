-- MySQL dump 10.13  Distrib 5.6.25, for Win32 (x86)
--
-- Host: localhost    Database: vichaiyut
-- ------------------------------------------------------
-- Server version	5.6.25

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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `about` text,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_create` int(11) NOT NULL,
  `img_path` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'<p>Vichaiyut Hospital was established on June 9, 1969 which the land and funding supported by Mr. Somporn Punyagupta and named as &ldquo;Vichaiyut Clinic&rdquo; for giving the honor to the landowner &ldquo;Lt. Gen. Phra Vichaiyut Dechakanee&rdquo;.&nbsp; The hospital was jointly founded by</p>\r\n\r\n<p>1. Dr. Sermsakdi&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phenjati</p>\r\n\r\n<p>2. Dr. Boonket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laovanich</p>\r\n\r\n<p>3. Dr. Asawin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thepakam</p>\r\n\r\n<p>4. Dr. Sompone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punyagupta</p>\r\n\r\n<p>5. Dr. Pradit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chareonthaitawee</p>\r\n\r\n<p>6. Dr. Chaowalit &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Preeyasombat</p>\r\n\r\n<p>7. Dr. Thamrongrat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Keokarn</p>\r\n\r\n<p>8. Mr. Rangsi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rattanaprakarn</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;At the early period after establishment, the hospital had 5 examination rooms, 1 operating room, 1 delivery room, &nbsp;1 nursing room and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10 inpatient beds.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 1979: &nbsp;Built the second building and increased the inpatient beds to 60 beds while as changing the hospital name to &ldquo;Vichaiyut Hospital&rdquo;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 1989: Built the third building and increased the inpatient beds to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;54 beds.&nbsp; The hospital could serve the inpatients for 114 beds in total.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1996: Built &ldquo;Vichaiyut Hospital North Building&rdquo; and increased the number of inpatient beds to 350 beds.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 2004: Built &ldquo;Vichaiyut Hospital Medical Center&rdquo; , aiming to serve the patients with the speciality;&nbsp; 75 OPD&nbsp; rooms, 454 inpatient beds and the conference room capable for &nbsp;1,000 people.</p>','2016-09-01 01:37:00','2016-09-26 08:37:18',1,NULL);
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinic`
--

DROP TABLE IF EXISTS `clinic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinic` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `path_img` text NOT NULL,
  `clinic` int(11) NOT NULL,
  `specialty` text,
  `language_spoken` text,
  `medical_school` text,
  `residencies` text,
  `fellowship` text,
  `certificate` text,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_create` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinic`
--

LOCK TABLES `clinic` WRITE;
/*!40000 ALTER TABLE `clinic` DISABLE KEYS */;
INSERT INTO `clinic` VALUES (1,'Dr. Nichaya Chunhamaneewat','upload/09/nichaya.jpg',1,'Family Medicine','Thai, English','Faculty of Medicine, Chiang Mai University','BMA Medical College and Vajira Hospital','Family Medicine','Graduate Diploma in Clinical Medical Sciences (Family Medicine)','2016-09-26 16:55:39','2016-09-26 09:55:39',0),(2,'Dr. Thongchan Nilkhate','upload/09/thongchan.jpg',1,'Cardiology','Thai','Faculty of Medicine Siriraj Hospital, Mahidol University','Ramathibodi Hospital','Cardiology, Ramathibodi Hospital','- Internal Medicine\r\n- Cardiology','2016-09-26 17:03:16','2016-09-26 10:03:16',0),(3,'Dr. Bunjerd Poomsai','upload/09/bunjurd.jpg',1,'Internal Medicine','Thai, English','Pramongkutklao College of Medicine, Mahidol University','Internal Medicine, Pramongkutklao Hospital','Internal Medicine, Pramongkutklao Hospital','Thai Board of Internal Medicine','2016-09-26 17:08:38','2016-09-26 10:08:38',0),(4,'Dr. Arunsri Kitwattana','upload/09/arunsri.jpg',1,'Internal Medicine','Thai, English','Faculty of Medicine, Prince of Songkhla University','Internal Medicine, King Chulalongkorn Memorial Hospital','Internal Medicine, King Chulalongkorn Memorial Hospital','- Internal Medicine\r\n- Certificate of Basic Occupational Medicine','2016-09-26 17:09:29','2016-09-26 10:09:29',0),(5,'Dr. Chanin Peerabool','upload/09/chanin.jpg',1,'Cardiology','Thai, English','Faculty of Medicine, Chulalongkorn University','Srinagarind Hospital, Khon Kaen University','Cardiology, Chulalongkorn University','- Diploma of the Thai Board of Internal Medicine\r\n- Diploma of the Thai Board of Cardiovascular Medicine','2016-09-26 17:10:16','2016-09-26 10:10:16',0),(6,'Dr. Suwanee Jidpugdeebodin','upload/09/suwanee.jpg',1,'Infectious Disease','Thai, English','Faculty of Medicine Siriraj Hospital, Mahidol University','Songklanagarind Hospital','Infectious Disease','- Certificate of Post Doctoral Training inÂ Internal Medicine\r\n- Thai Board of Internal Medicine','2016-09-26 17:11:21','2016-09-26 10:11:21',0),(7,'Dr. Weerapong Sateanpanich','upload/09/weerapong.jpg',1,'Internal Medicine','Thai','Faculty of Medicine, Chulalongkorn University','Faculty of Medicine, Chiang Mai University','Internal Medicine, Faculty of Medicine, Chiang Mai University','Thai Board of Internal Medicine','2016-09-26 17:12:40','2016-09-26 10:12:40',0),(8,'Dr. Pannawadee Uppathamnarakron','upload/09/pannawadee.jpg',1,'Infectious Disease','Thai, English','Faculty of Medicine, Chulalongkorn University','Internal Medicine, King Chulalongkorn Memorial Hospital','- Infectious Disease, King Chulalongkorn Memorial Hospital\r\n- Ambulatory Medicine, King Chulalongkorn Memorial Hospital','- Internal Medicine\r\n- Infectious Disease\r\n- Ambulatory Medicine','2016-09-26 17:13:24','2016-09-26 10:13:24',0),(9,'Dr. Yaowaluk Chuapai','upload/09/yaowaluk.jpg',1,'Cardiology','Thai, English','Faculty of Medicine Ramathibodi Hospital, Mahidol University','Ramathibodi Hospital','Cardiology, Ramathibodi Hospital','- Internal Medicine\r\n- Cardiology','2016-09-26 17:14:08','2016-09-26 10:14:08',0),(10,'Dr. Suwit Chunhamaneewat','upload/09/suwit.jpg',1,'Infectious Disease','Thai','Faculty of Medicine Siriraj Hospital, Mahidol University','Department of Medical Services, Ministry of Public Health','Infectious Disease','- Bachelor of Science Program in Medical Sciences, Mahidol University\r\n- Higher Graduate Diploma in Clinical Medical Sciences, Mahidol University\r\n- Thai Board of General PracticeÂ \r\n- Thai Board of Family MedicineÂ Â ','2016-09-26 17:14:46','2016-09-26 10:14:46',0),(11,'Dr. Supannika Charoen','upload/09/supannika.jpg',1,'Endocrinology','Thai, English','Faculty of Medicine, Srinakharinwirot University','Vachira Hospital','Endocrinology, King Chulalongkorn Memorial Hospital','- Internal Medicine\r\n- Endocrinology','2016-09-26 17:15:30','2016-09-26 10:15:30',0);
/*!40000 ALTER TABLE `clinic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinic_category`
--

DROP TABLE IF EXISTS `clinic_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinic_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `detail` text,
  `open_hours` text,
  `venue` text,
  `appointment` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinic_category`
--

LOCK TABLES `clinic_category` WRITE;
/*!40000 ALTER TABLE `clinic_category` DISABLE KEYS */;
INSERT INTO `clinic_category` VALUES (1,'Health Care and Medical Clinic','Vichaiyut Health Care and Medical Clinic offer various types of unique check-up packages and Internal Medicine treatment service to suit a wide range of patient requirements. We also have the specialists in Cardiovascular system, Infectious Disease, Endocrine system diseases and Diabetes.','Monday â€“ Friday 7.00 am. â€“ 8.00 pm.\r\nSaturday â€“ Sunday 7.00 am. â€“ 5.00 pm.','Health Care and Medical Clinic, 10th Floor, Vichaiyut Hospital Medical Center','Appointment Center tel. (+66) 2-265-7555','2016-09-11 23:29:34','2016-09-26 08:50:52'),(2,'Dental Clinic',NULL,NULL,NULL,'','2016-09-11 23:29:34','2016-09-11 16:29:34');
/*!40000 ALTER TABLE `clinic_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_information`
--

DROP TABLE IF EXISTS `contact_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_information` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(500) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_information`
--

LOCK TABLES `contact_information` WRITE;
/*!40000 ALTER TABLE `contact_information` DISABLE KEYS */;
INSERT INTO `contact_information` VALUES (1,'53 Setsiri Road, Phayathai, Bangkok 10400, THAILAND','(+66) 2-265-7777, (+66) 2-618-6200-20','(+66) 2-265-7888, (+66) 2-265-7788','info@vichaiyut.com','www.vichaiyut.com','www.facebook.com/vichaiyutpage','','','2016-09-24 00:47:01','2016-09-26 10:46:01');
/*!40000 ALTER TABLE `contact_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hilight`
--

DROP TABLE IF EXISTS `hilight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hilight` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `path_img` text NOT NULL,
  `link` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publish_date` datetime NOT NULL,
  `user_create` int(11) NOT NULL,
  `isOnOff` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hilight`
--

LOCK TABLES `hilight` WRITE;
/*!40000 ALTER TABLE `hilight` DISABLE KEYS */;
INSERT INTO `hilight` VALUES (1,'upload/09/slide_doctorteam.jpg','#','2016-09-26 17:35:58','2016-09-26 10:35:59','2016-09-26 17:00:49',1,1),(2,'upload/09/sslide_vichaiyut_building.jpg','#','2016-09-26 17:36:45','2016-09-26 10:37:01','2016-09-26 17:00:39',1,1),(3,'upload/09/campaign.jpg','#','2016-09-26 17:36:59','2016-09-26 10:37:02','2016-09-26 17:00:56',1,1);
/*!40000 ALTER TABLE `hilight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_care`
--

DROP TABLE IF EXISTS `home_care`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_care` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `home_care` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_care`
--

LOCK TABLES `home_care` WRITE;
/*!40000 ALTER TABLE `home_care` DISABLE KEYS */;
INSERT INTO `home_care` VALUES (1,'<p>Vichaiyut Home Care is the home medical service for patients by sending the medical professionals to provide services at the patient&rsquo;s home e.g., Blood Drawing, Injection, Urinary catheterization and Physical Therapy. These should be supportive for your other hospital care. The nurse will constantly coordinate and report to your physician-in-charge. Our existing patients can directly apply for the service while the new ones have to see our physician for evaluation before registering.</p>\r\n\r\n<ul>\r\n	<li>Opening Hours: Everyday 7.00 am. - 3.00 pm.</li>\r\n	<li>Make an Appointment: Tel (+66) 2-265-7777</li>\r\n</ul>\r\n','2016-09-23 00:33:15','2016-09-22 19:10:43');
/*!40000 ALTER TABLE `home_care` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homepage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `about_us` text NOT NULL,
  `about_img_path` text NOT NULL,
  `vision_img_path` text NOT NULL,
  `management_img_path` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homepage`
--

LOCK TABLES `homepage` WRITE;
/*!40000 ALTER TABLE `homepage` DISABLE KEYS */;
INSERT INTO `homepage` VALUES (1,'Vichaiyut Hospital was established on June 9, 1969 with the land and funding supported by Mr. Somporn Punyagupta and was named as â€œVichaiyut Clinicâ€ honoring the landowner â€œLt. Gen. Phra Vichaiyut Dechakaneeâ€.','upload/09/vichaiyut_hospital.jpg','upload/09/mission.jpg','upload/09/teamdoctor.jpg','2016-09-25 02:37:50','2016-09-24 20:14:07');
/*!40000 ALTER TABLE `homepage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `management_team`
--

DROP TABLE IF EXISTS `management_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `management_team` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `position` varchar(500) DEFAULT NULL,
  `education` text,
  `experiences` text,
  `award` text,
  `path_img` text,
  `is_doctor` tinyint(1) NOT NULL,
  `specialty` text NOT NULL,
  `language_spoken` text NOT NULL,
  `medical_school` text NOT NULL,
  `residencies` text NOT NULL,
  `fellowship` text NOT NULL,
  `certificate` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `management_team`
--

LOCK TABLES `management_team` WRITE;
/*!40000 ALTER TABLE `management_team` DISABLE KEYS */;
INSERT INTO `management_team` VALUES (1,'Mr. Paron Israsena Na Ayudhaya','Chairman','- Master of Science (Mechanical Engineering), Massachusetts Institute of Technology, U.S.A.\r\n- Bachelor of Engineering (Mechanical Engineering), Chulalongkorn University\r\n- Bachelor of Engineering (Electrical Engineering), Second Class Honor, Chulalongkorn University','- Chairman of Vichaiyut Hospital \r\n- Chairman of the National Economics and Social Development Board\r\n- Member of the National Science&Technology Development Board\r\n- Chairman of the Board of Thaicom Public  Company Limited\r\n- Honorary President of Magnolia quality Development Corporation\r\n- Honorary President of the Federation of Thai Industrie\r\n- Member of Private Sector Collective Action Coalition Against Corruption Council (CAC)\r\n- Presedent of suksaphattana foundationa and president of Lighthouse  Project\r\n- Vice president of Thaicom Foundation\r\n- Member of State Enterprise Board  Selection Committee \r\n- Chairman of Shinawatra University Council\r\n- Committee of Institute for Management Education for Thailand Foundation (IMET)\r\n- Chairman of Mitr Technical Consultant Co.,Ltd\r\n-  Committee of Park Nai Lart Co.,Ltd\r\n-  Consultant of Thailand Quality Award\r\n- President of Darunsikkhalai School for Innovative Learning of KMUTT\r\n- Member of Thailand Railway Technology Development Institute Project Subcommittee\r\n- Member of National Competitiveness Development Committee\r\n- Honorary Member of Sasin Graduate Institute of Business Administration of Chulalongkorn University\r\n- Consultant of Management System Certification Institute (Thailand)\r\n- Honorary Council Member of Council of Chiang Mai Rajabhat University\r\n- Consultant of Eye Bank of Thailand Committee\r\n- Member of Thai Red Cross','- Knight and Dame Grand Commander (Second Class, higher grade) of the Most IllustriousÂ Order of Chula Chom Klao\r\n- Knight and Dame Grand Cordon (Special Class) of the Most ExaltedÂ Order of the White Elephant\r\n- Commanders in the Order of the Crown\r\n- Knight and Dame Grand Cordon (Special Class) of the Most NobleÂ Order of the Crown of Thailand\r\n- Knight and Dame Commander (Second Class, lower grade) of the Most IllustriousÂ Order of Chula Chom Klao\r\n- Knight and Dame Grand Cross (First Class) of the Most ExaltedÂ Order of the White Elephant\r\n- Grand Companion (Third Class, higher grade) of the Most IllustriousÂ Order of Chula Chom Klao\r\n- Knight and Dame Grand Cross (First Class) of the Most NobleÂ Order of the Crown of Thailand\r\n- Commander (Third Class) of the Most Admirable Order of the Direkgunabhorn.\r\n- Senator\r\n- Member of National Legislative Assembly of Thailand','upload/10/paron.jpg',0,'','','','','','','2016-10-01 16:00:09','2016-10-01 09:55:57'),(2,'Dr. Prapote Clongsusuek','Managing Director and President','','','','upload/10/prapote.jpg',1,'Otolaryngology','Thai, English','Faculty of Medicine, Chiang Mai University','- Ramathibodi Hospital\r\n- Wayne State University, U.S.A.','- Ramathibodi Hospital\r\n- Wayne State University, U.S.A.','- Thai Board of Otolaryngology\r\n- Diplomate, American Board of Otolaryngology','2016-10-01 16:02:26','2016-10-01 09:16:17'),(3,'Tanpuying Tasniya Punyagupta','Executive Director','- Bachelor in Arts, Chulalongkorn University\r\n- Ph.D., Master of Science in Elementary Education, University of Wisconsin, U.S.A.','- Assistant Librarian at USIS, Liason Officer to Fullbright Foundation\r\n- Head of English Department, Faculty of Humanities, Kasetsart University\r\n- Principal of Chitralada School','- International Study Grant from AAUW\r\n- Royal Decorations of the Chula Chomklao and the Crown of Thailand\r\n- Honorary Degrees : Honorary Doctorate from Chulalongkorn University\r\n- Angela Award from Mater Dei School\r\n- Outstanding Teacher\'s Award from Dr.Tiam Chokewattana Foundation','upload/10/tusanee.jpg',0,'','','','','','','2016-10-01 16:18:58','2016-10-01 09:18:58'),(4,'Lt. Gen. Clinical Professor, Dr. Naronk Rodwarna','Executive Director','','- Dean for Academic Affairs, Phramongkutklao College of Medicine, Mahidol University\r\n- Clinical Professor of Surgery, Phramongkutklao College of Medicine, Mahidol University\r\n- Deputy Surgeon General and Senior Consultant and Expert of Royal Thai Army\r\n- Hospital Director and Surgeon-In-Chief, Vichaiyut Hospital\r\n- President of The Association of Military Surgeons of Thailand Under the Royal Patronage of His Majesty the King\r\n- President of The Society of Thoracic Surgeons of Thailand\r\n- Governor, American College of Surgeons, Thailand Chapter \r\n- President, Royal College of Surgeons of Thailand\r\n- President of Association of Thoracic and Cardovascular Surgeons of Asia','- Honorary Royal Guard Regiment, Chula Chomklao Cadet Academy, Royal Thai Army\r\n- Outstanding Teacher\'s Award from Phramongkutklao College of Medicine, Mahidol University\r\n- Outstanding Medical Doctor\'s Award for Ethics from Medical Council of Thailand\r\n- Outstanding Military Medical Doctor\'s Award for Academic and Researches from Medical Armsforce of Thailand','upload/10/naronk.jpg',2,'- General Surgery\r\n- Cardio-Thoracic Surgery','Thai, English','Faculty of Medicine, Chulalongkorn University','- General Surgery, St. Luke\'s Hospital and Medical Center, Cleveland, Ohio,Â U.S.A.\r\n- Thoracic Surgery, School of Medicine, Case Western ReserveÂ University, Cleveland, Ohio,U.S.A.','- Royal College of Surgeons of Thailand (FRCST.)\r\n- International College of Surgeons (FICS.)\r\n- American College of Surgeons (FACS.)\r\n- American College of Chest-Physicians (FCCP.)','- Thai Board of Thoracic Surgery\r\n- Thai Board of Critical Care Medicine\r\n- Diplomate, American Board of Surgery\r\n- Diplomate, American Board of Thoracic Surgery','2016-10-01 16:29:11','2016-10-01 09:29:11'),(5,'Dr. Chamnan Bhu-eiam','Executive Director','- Faculty of Medicine, Chulalongkorn University\r\n- Leadership Program, Office of The Civil Service Commission\r\n- Leadership Program, Ministry of Public Health\r\n- Attend the seminar in Hospital and Public Health Management in U.S.A., Europe, Australia and Asia (Scholarship from Ministry of Public Health, JICA Scholarship from Japanese Government and USAID Scholarship from U.S.A. Government)','- Executive Director, Vichaiyut Hospital\r\n- Advisor of the Ministry of Public Health\r\n- Head of Inspector of the Ministry of Public Health\r\n- Advisor to the Deputy Minister, Ministry of Public Health\r\n- Advisor to the Permanent Secretary, Ministry of Public Health','- Knight and Dame Grand Cordon (Special Class) of the Most ExaltedÂ Order of the White Elephant\r\n- Knight and Dame Grand Cordon (Special Class) of the Most NobleÂ Order of the Crown of Thailand\r\n- Honour Outstanding Hospital Director (Affiliated with Ministry of Public Health of Thailand)\r\n- Honour Outstanding Public Health Officer in Service Management','upload/10/chamnan.jpg',0,'','','','','','','2016-10-01 17:04:06','2016-10-01 10:04:06'),(6,'Dr. Kamthorn Phaosawasdi','Executive Director and Director of Vichaiyut Hospital','','','','upload/10/kamthorn.jpg',1,'Gastroenterology','Thai, English','Faculty of Medicine Ramathibodi Hospital, Mahidol University','Internal Medicine, Thomas Jefferson University Hospital, U.S.A.','Gastroenterology, Temple University Hospital,Â  U.S.A.','- Diplomate, American Board of Internal Medicine \r\n- Diplomate, American Board of Gastroenterology\r\n- Advanced Achievement in Internal Medicine','2016-10-01 17:05:06','2016-10-01 10:05:06'),(7,'Dr. Phaiboon Jittivanich','Executive Director','','','','upload/10/phaiboon.jpg',1,'Obstetrics andÂ Gynecology','Thai, English','Faculty of Medicine Ramathibodi Hospital, Mahidol University','Obstetrics and Gynecology, Albany Medical College, Albany, New York,U.S.A.','Gynecology (Infertility and Gynecologic Endocrinology), Peter Bent Brigham Hospital, Harvard Medical School, Boston, Massachusetts,U.S.A.','- Diplomate, American Board of Obstetrics and Gynecology\r\n- Master of Management, SASIN Graduate Institute of Business Administration, Chulalongkorn University','2016-10-01 17:07:02','2016-10-01 10:07:02'),(8,'Dr.  Phrot Thongvanit','Executive Director','','','','upload/10/phrot.jpg',1,'Anaesthesiology','Thai, English','Faculty of Medicine Siriraj Hospital, Mahidol University','Department of Anaesthesia, Siriraj Hospital','- Southend General Hospital, United of Kingdom\r\n- HammersmithÂ  Hospital Postgraduated Medical School, United of Kingdom','- Certificate of competing in Anaesthesiology, The Royal College of  Anaesthesiology of Thailand\r\n- Diploma in Anaesthetics of the RoyalÂ College of Physicians andÂ  Surgeons ofÂ England\r\n- Fellow of the Royal College of Anaesthetists of England','2016-10-01 17:07:46','2016-10-01 10:07:46'),(9,'Dr.  Surawut Prichanond','Executive Director','','','','upload/10/surawut.jpg',1,'- Internal Medicine\r\n- Rheumatology','Thai, English','Faculty of Medicine Ramathibodi Hospital, Mahidol University','Saint Joseph Hospital, U.S.A. (Affiliated with Loyola University, U.S.A.)','- Arthritis and Metaholic Diseases, University of Chicago, U.S.A.\r\n- Rheumatology, University of Illinois, U.S.A.','- Thai Board of Internal Medicine\r\n- Thai Board of Rheumatology\r\n- Diplomate, American Board of Internal Medicine\r\n- Diplomate, American Board of Rheumatology','2016-10-01 17:08:38','2016-10-01 10:08:38'),(10,'Dr.  Vichian Kanchanapoomi','Executive Director and Director of Vichaiyut Hospital Medical Center','','','','upload/10/vichian.jpg',1,'Orthopaedic Surgery','Thai, English','Faculty of Medicine Siriraj Hospital, Mahidol University','- Orthopaedic Surgery, Faculty of Medicine Siriraj Hospital, Mahidol University\r\n- Orthopaedic Surgery, Maimomides & Coney Island Hospital Medical Center, New York, U.S.A.','Orthopaedic Surgery','Diplomate, American Board of Orthopaedic Surgery','2016-10-01 17:09:13','2016-10-01 10:09:13'),(11,'Mr. Rangsi Ratanaprakarn','Executive Director','- Master of Science (Structural Engineering), University of Illinois, U.S.A.\r\n- Bachelor of Engineering, Chulalongkorn University','- Executive Director, Vichaiyut Hospital\r\n- President of Charintr Mining Co.,Ltd\r\n- President of Thai Engineering Consultant Co.,Ltd','- President of The Consulting Engineers Association of Thailand\r\n- Member of Engineering Institute of Thailand\r\n- Member of The Consulting Engineers Association of Thailand','upload/10/rangsi.jpg',0,'','','','','','','2016-10-01 17:09:42','2016-10-01 10:09:42'),(12,'Mrs. Watana Limnararat','Executive Vice President','- Master of Business Administration, Sasin Graduate Institute of Business Administration of Chulalongkorn University\r\n- Bachelor of Business Administration (Major Finance and Banking), Ramkhamhaeng University\r\n- Certificate of Director Certification Program (DCP134) University, Thai Institute of Director (IOD)\r\n- Certificate of Capital Market Academy (CMA9) University','- Executive Vice President, Vichaiyut Hospital\r\n- Director / Head of Business Advisory Services and Head of Market Groups, KPMG Phoomchai Business Advisory Ltd.\r\n- Executive Director, Arthur Anderson Business Advisory Co., Ltd.\r\n- Senior Vice President, Business Development Depart, Phatra Thanakit Finance and Security Co., Ltd.\r\n- First Vice President, Manufactory and Service Lending Department, Kasikornthai Bank','- Director and Treasury of Rakkaew Foundation\r\n- Judge of Student in Free Enterprise (SIFE), National and World Cup\r\n- Lecturer of Thai Institute of Banking and Finance Association\r\n- Director of Credit Executive Club, Association of Finance Companies\r\n- Director of the Credit Executive Club, The Thai Bankers Association\r\n- Certificate of Executive Top Performance, Kasikornbank Public Company Limited\r\n- Master Degree Program (Kasikornthai Bank Scholarship)\r\n- International Banking and Documentary Credit Program in the United Kingdom (Kasikornthai Bank Scholarship)','upload/10/watana.jpg',0,'','','','','','','2016-10-01 17:10:12','2016-10-01 10:10:12');
/*!40000 ALTER TABLE `management_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package_promotion`
--

DROP TABLE IF EXISTS `package_promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package_promotion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `path_img` text NOT NULL,
  `term` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package_promotion`
--

LOCK TABLES `package_promotion` WRITE;
/*!40000 ALTER TABLE `package_promotion` DISABLE KEYS */;
INSERT INTO `package_promotion` VALUES (1,'upload/09/package_eng.png','<ol>\r\n	<li>This package prices are valid until 31 December 2016.</li>\r\n	<li>Reserves the right to purchase this program for the patients coming from Sweden, Norway, Denmark, Finland and Iceland only.</li>\r\n	<li>Patients are requested to present the passport at the registration before beginning the program.</li>\r\n	<li>This program is available only at Health Care and Medical Clinic, 10th floor, Vichaiyut Hospital Medical Center.</li>\r\n	<li>Do not eat or drink anything, except drinking water, at least 6-8 hours prior to check up.</li>\r\n	<li>Do not eat or drink anything, except drinking water, at least 6-8 hours prior to check up.</li>\r\n	<li>There is no discount of any kind of promotions may be applied to package prices.</li>\r\n	<li>There is no health insurance or others may be applied to package prices. Patients are required for pre-payment before beginning the program.</li>\r\n	<li>All prices are subject to change without prior notice.</li>\r\n	<li>Prices are inclusive doctor and OPD&#39;s fee (participating doctors only)</li>\r\n	<li>Please check terms and other conditions at Point of Services</li>\r\n</ol>\r\n\r\n<p>For more information &amp; Book Now: info@vichaiyut.com&nbsp;</p>','2016-09-14 01:34:48','2016-09-26 08:42:39');
/*!40000 ALTER TABLE `package_promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_room`
--

DROP TABLE IF EXISTS `patient_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_room` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_room`
--

LOCK TABLES `patient_room` WRITE;
/*!40000 ALTER TABLE `patient_room` DISABLE KEYS */;
INSERT INTO `patient_room` VALUES (1,'Private room','2016-09-26 15:54:39','2016-09-26 08:54:39'),(2,'Deluxe room(VIP)','2016-09-26 15:55:58','2016-09-26 08:55:58'),(3,'Suite room (Executive Suite/President Suite/Vichaiyut Suite)','2016-09-26 15:58:09','2016-09-26 08:58:09'),(4,'Pediatric Ward (VIP)','2016-09-26 15:58:43','2016-09-26 08:58:43'),(5,'ICU room','2016-09-26 15:58:53','2016-09-26 08:58:53');
/*!40000 ALTER TABLE `patient_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_room_gallery`
--

DROP TABLE IF EXISTS `patient_room_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_room_gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `patient_ID` int(11) NOT NULL,
  `path_img` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_room_gallery`
--

LOCK TABLES `patient_room_gallery` WRITE;
/*!40000 ALTER TABLE `patient_room_gallery` DISABLE KEYS */;
INSERT INTO `patient_room_gallery` VALUES (1,1,'upload/09/medical_center_private2.jpg','2016-09-26 15:54:39','2016-09-26 08:54:39'),(2,1,'upload/09/north_building_private1.jpg','2016-09-26 15:54:39','2016-09-26 08:54:39'),(3,1,'upload/09/north_building_private2.jpg','2016-09-26 15:54:39','2016-09-26 08:54:39'),(4,1,'upload/09/north_building_private3.jpg','2016-09-26 15:54:39','2016-09-26 08:54:39'),(5,1,'upload/09/north_building_vip1.jpg','2016-09-26 15:54:39','2016-09-26 08:54:39'),(6,2,'upload/09/medical_center_vip1.jpg','2016-09-26 15:55:58','2016-09-26 08:55:58'),(7,2,'upload/09/medical_center_vip2.jpg','2016-09-26 15:55:58','2016-09-26 08:55:58'),(8,2,'upload/09/medical_center_vip3.jpg','2016-09-26 15:55:58','2016-09-26 08:55:58'),(9,2,'upload/09/north_building_vip1.jpg','2016-09-26 15:55:58','2016-09-26 08:55:58'),(10,2,'upload/09/north_building_vip2.jpg','2016-09-26 15:55:58','2016-09-26 08:55:58'),(11,2,'upload/09/north_building_vip3.jpg','2016-09-26 15:55:58','2016-09-26 08:55:58'),(12,3,'upload/09/executive_suite1.jpg','2016-09-26 15:58:09','2016-09-26 08:58:09'),(13,3,'upload/09/executive_suite2.jpg','2016-09-26 15:58:09','2016-09-26 08:58:09'),(14,3,'upload/09/executive_suite3.jpg','2016-09-26 15:58:09','2016-09-26 08:58:09'),(15,3,'upload/09/presidential_suite1.jpg','2016-09-26 15:58:10','2016-09-26 08:58:10'),(16,3,'upload/09/presidential_suite2.jpg','2016-09-26 15:58:10','2016-09-26 08:58:10'),(17,3,'upload/09/presidential_suite3.jpg','2016-09-26 15:58:10','2016-09-26 08:58:10'),(18,3,'upload/09/vichaiyut_suite1.jpg','2016-09-26 15:58:10','2016-09-26 08:58:10'),(19,3,'upload/09/vichaiyut_suite3.jpg','2016-09-26 15:58:10','2016-09-26 08:58:10'),(20,3,'upload/09/vichaiyut_suite4.jpg','2016-09-26 15:58:10','2016-09-26 08:58:10'),(21,4,'upload/09/pediatricward1.jpg','2016-09-26 15:58:43','2016-09-26 08:58:43'),(22,4,'upload/09/pediatricward2.jpg','2016-09-26 15:58:43','2016-09-26 08:58:43'),(23,4,'upload/09/pediatricward3.jpg','2016-09-26 15:58:43','2016-09-26 08:58:43');
/*!40000 ALTER TABLE `patient_room_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurant_and_shop`
--

DROP TABLE IF EXISTS `restaurant_and_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant_and_shop` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant` text NOT NULL,
  `shop` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant_and_shop`
--

LOCK TABLES `restaurant_and_shop` WRITE;
/*!40000 ALTER TABLE `restaurant_and_shop` DISABLE KEYS */;
INSERT INTO `restaurant_and_shop` VALUES (1,'<ul>\r\n	<li><strong>Au Bon Pain</strong>: Fresh coffee and patisseries<br />\r\n	Location: 1st and 10th Floor, Vichaiyut Hospital Medical Center</li>\r\n	<li><strong>Hom Nil</strong>: Food and Beverage with cafeteria<br />\r\n	Location: 4th Floor, Vichaiyut Hospital North Building</li>\r\n	<li><strong>Magarite Coffee Shop</strong>: Food, snack and beverage and souvenirs for patient,&nbsp;<br />\r\n	Location : 1st floor, Vichaiyut Hospital North Building</li>\r\n</ul>\r\n','<ul>\r\n	<li><span style=\"font-size:22px\"><strong>Family Mart&nbsp;</strong></span><br />\r\n	Location : 13th Floor, Vichaiyut Hospital Medical Center</li>\r\n	<li><span style=\"font-size:22px\"><strong>For Eyes eyewear shop</strong>&nbsp;</span><br />\r\n	Location : 2nd Floor, Vichaiyut Hospital North Building&nbsp;<br />\r\n	11th Floor, Vichaiyut Hospital Medical Center</li>\r\n	<li><strong><span style=\"font-size:22px\">Bookstore</span>&nbsp;</strong><br />\r\n	Location : 3rd Floor, Vichaiyut Hospital North Building&nbsp;<br />\r\n	11th Floor, Vichaiyut Hospital Medical Center</li>\r\n	<li><span style=\"font-size:22px\"><strong>Circlife shop&nbsp;</strong></span><br />\r\n	Medical supplies, medical equipment and medical electronics&nbsp;<br />\r\n	Location : 2nd Floor, Vichaiyut Hospital North Building</li>\r\n</ul>\r\n','2016-09-23 01:26:02','2016-09-22 19:11:32');
/*!40000 ALTER TABLE `restaurant_and_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','$2y$10$JAJ5BxXTpT/P.Ma9ysJoK.x2tjORG1kaCliUjYxXD/OLY07/B40Re','admin@vichaiyut.com','2016-08-30 01:01:15','2016-10-03 09:51:10');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vision`
--

DROP TABLE IF EXISTS `vision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vision` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `vision` text,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_create` int(11) NOT NULL,
  `img_path` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vision`
--

LOCK TABLES `vision` WRITE;
/*!40000 ALTER TABLE `vision` DISABLE KEYS */;
INSERT INTO `vision` VALUES (1,'<p>Vichaiyut hospital continuously adheres to the high standard and quality treatment from professionals.&nbsp; Annually, we arrange the medical conferences for the physicians and nurses so, we are granted by the Medical Council of Thailand and Thailand Nursing Council as private hospital offering the activities for continuous education among medical personnel nationwide.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With a commitment to provide the quality based on international standard, we have more than 200 physicians and 1,717 hospital staffs to serve the patients&rsquo; requirement thoroughly. Keeping on the basis of morality and professional ethics, Vivhaiyut hospital was granted to use the royal Garuda as the hospital&rsquo;s emblem on May 24, 2004 and we are the first private hospital acquiring this royal grace.</p>','2016-09-01 01:57:56','2016-09-22 19:09:16',1,NULL);
/*!40000 ALTER TABLE `vision` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-04  2:06:17
