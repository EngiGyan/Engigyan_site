-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2018 at 09:56 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engigyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(20000) NOT NULL,
  `details` varchar(20000) NOT NULL,
  `url` varchar(20000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `details`, `url`) VALUES
(1, 'JAVA', 'JAVA a top contender in the race of programming languages that a programmer should consider learning: Lots of job opportunities.', 'https://engigyan.000webhostapp.com/includes/cs/java.html'),
(2, 'Python: Complete Course\r\n', 'EngiGyan train you in Python like a professional. Start from the basic & grow to develop own application & games.', 'https://engigyan.000webhostapp.com/includes/cs/python.html'),
(3, 'A.I', '', ''),
(4, 'Web Developement', '', ''),
(5, 'ANSYS', '', ''),
(6, 'HyperWorks', '', ''),
(7, 'AutoCad', '', ''),
(8, 'Machine Learning', '', ''),
(9, 'CDF Analysis', '', ''),
(10, 'CATIA', '', ''),
(11, '3D MAX', '', ''),
(12, 'Running Suits', '', ''),
(13, 'MATLAB', '', ''),
(14, 'IOT', '', ''),
(15, 'PLC', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
