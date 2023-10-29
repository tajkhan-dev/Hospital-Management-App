-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2023 at 12:23 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caregroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `appid` int NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `docid` int NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appid`, `patient_name`, `message`, `date`, `docid`) VALUES
(1, 'john', 'i have some cardiovascular problems', '10/01/2000', 110),
(4, 'sss', '', '', 0),
(5, 'john', '', '', 0),
(6, 'john', '', '', 0),
(8, 'kk', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blogid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `blogtitle` varchar(255) NOT NULL,
  `blogpic` varchar(255) NOT NULL,
  `blogdesc` varchar(255) NOT NULL,
  `blogurl` varchar(255) NOT NULL,
  PRIMARY KEY (`blogid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogid`, `blogtitle`, `blogpic`, `blogdesc`, `blogurl`) VALUES
('01', 'dummy title', 'dummy url', 'owais.png', 'dummy description');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `deptid` int NOT NULL,
  `deptname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deptdesc` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptid`, `deptname`, `deptdesc`) VALUES
(10, 'Cardiology', 'Medical department specializing in heart-related conditions and treatments.'),
(20, 'Dental Care', 'Medical department focused on oral health and dental treatments'),
(30, 'neurology', '\r\nMedical department specializing in the diagnosis and treatment of neurological disorders and conditions'),
(40, 'pulmology', 'Medical department dedicated to the diagnosis and treatment of respiratory and lung-related disorders');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `docid` int NOT NULL,
  `docname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deptid` int NOT NULL,
  `appid` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `days` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `docpic` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'images//team/default-doc-pic.jpg',
  KEY `deptid` (`deptid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`docid`, `docname`, `deptid`, `appid`, `days`, `docpic`) VALUES
(110, 'Usman Nazeer', 10, '8921', 'Mon to Fri', 'images/team/4.jpg'),
(111, 'Areeba Ali', 30, '9834', 'Mon to Fri', 'images/team/2.jpg'),
(112, 'Kamran Hasan', 40, '6541', 'Mon to Wed', 'images/team/3.jpg'),
(113, 'Asma Nawaz', 20, '9956', 'Sat to Sun', 'images/team/default-doc-pic.jpg'),
(114, 'Burhan Kareem', 20, '9945', 'Tue to Fri', 'images//team/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `email`, `phone`, `address`) VALUES
(1, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'dsafdsfsafdas'),
(30, 'taj', 'tajkhan.dev@gmail.com', 2147483647, 'sdf');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`deptid`) REFERENCES `departments` (`deptid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
