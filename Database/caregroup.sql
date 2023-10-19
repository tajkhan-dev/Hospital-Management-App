-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2023 at 05:24 PM
-- Server version: 10.10.2-MariaDB
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
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `deptid` int(11) NOT NULL,
  `deptname` varchar(255) NOT NULL,
  `deptdesc` varchar(255) NOT NULL,
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
  `docid` int(11) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `deptid` int(11) NOT NULL,
  `appid` varchar(255) DEFAULT NULL,
  `days` varchar(255) DEFAULT NULL,
  `docpic` varchar(255) DEFAULT 'images//team/default-doc-pic.jpg',
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `email`, `phone`, `address`) VALUES
(1, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'dsafdsfsafdas'),
(2, 'Hassaan Ahmed', 'n6b7whjgfk@email.edu.pl', 123, 'sadaddsa'),
(3, 'Hassaan Ahmed', 'n6b7whjgfk@email.edu.pl', 123, 'sadaddsa'),
(4, 'Hassaan Ahmed', 'n6b7whjgfk@email.edu.pl', 123, 'sadaddsa'),
(5, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'asdsadasd'),
(6, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'asdsadasd'),
(7, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'adffsdffs'),
(8, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'adffsdffs'),
(9, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'asdasdasd'),
(10, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'asdasdasd'),
(11, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'adfds'),
(12, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'adfds'),
(13, 'Hassaan Ahmed', 'hassutechap@gmai.com', 123, 'sadasd'),
(14, 'Hassaan Ahmedasdasdsa', 'asdasdasdaad@asdasd', 32324, 'sadadasd'),
(15, 'Hassaan Khan', 'hass@co', 1233323, 'asddsaasd'),
(16, 'Hassuusss', 'hassukhn4ss4@gmail.com', 23432, 'asdsdad'),
(17, 'Hassaan Ahmedsadsad', 'n6b7whjasdsdagfk@email.edu.pl', 324324, 'adsdsa'),
(18, 'Hassaan Ahmsedsadsad', 'n6b7whjasdsdsagfk@email.edu.pl', 324324, 'adsdsa'),
(19, 'Hassssaans', 'hassutessschap@gmai.com', 123123, 'sadsads'),
(20, 'Hassssdaans', 'hassutesdsschap@gmai.com', 123123, 'sadsads'),
(21, 'Hasssuusss', 'hassukhn4sss4@gmail.com', 23432, 'asdsdad'),
(22, 'Hassssaduusss', 'hassuasdkhn4sss4@gmail.com', 23432, 'asdsdad'),
(23, 'Hassaan Ahmedfdf', 'hassdfdsfsutechap@gmai.com', 43435, 'asdasdas'),
(24, 'Hassasan Ahmedfdf', 'hassdfdsfssutechap@gmai.com', 43435, 'asdasdas'),
(25, 'Hassasans Ahsasmed', 'hassutscasd3hsap@gmai.com', 123, 'asdasd'),
(26, 'Hassaan asdsadAhmed', 'hassutecasdsadhap@gmai.com', 324234, 'asdads'),
(27, 'Hassaan f', 'hassutechap@gmai.cosssssssssssssm', 2131313, 'sadadsadasdasd'),
(28, 'asasaSA', 'hassutechASasaSasASasAAAap@gmai.com', 123, 'sadadsds'),
(29, 'Hassaan', 'hassu@co', 439875, 'dafhbdsaf7623hkbzc');

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
