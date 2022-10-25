-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2022 at 10:27 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_title` varchar(200) NOT NULL,
  `event_id` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `venue` varchar(191) NOT NULL,
  `descript` varchar(450) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_title`, `event_id`, `event_date`, `venue`, `descript`) VALUES
('Data Science Meeting ', 'M000004', '2022-12-15', 'MEIRU\'s offices: llw chsu', 'All departments will be required to participate and give updates'),
('Meeting on NADA', 'M000006', '2022-10-28', 'Online; Zoom ', 'Discussion about the external NADA implementation'),
('Big Data analytics  training ', 'M000007', '2022-10-29', 'online: zoom  ', 'EU consortium for Data Mining and Big Data management edit'),
('Career talk at Mzuzu Government Secondary School ', 'M000008', '2022-10-31', 'Mzuzu Government Secondary School Campus', 'Motivating younger generation to embrace Software Engineering career'),
('Women Empowerment in TECH', 'M000009', '2022-11-05', 'sunbird: Lilongwe', 'Empowering  and supporting women in TECH industry in Malawi , Africa'),
('AI Training ', 'M0000013', '2022-10-29', 'Online; Zoom ', 'Center for AI in Data driven applications ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
