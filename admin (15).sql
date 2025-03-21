-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2023 at 12:26 PM
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
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

DROP TABLE IF EXISTS `bookdetails`;
CREATE TABLE IF NOT EXISTS `bookdetails` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `destination` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `adults` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `children` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `total` decimal(10,2) GENERATED ALWAYS AS (((`price` * `adults`) + ((`price` * `children`) / 2))) VIRTUAL NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `email`, `destination`, `adults`, `children`, `price`) VALUES
(21, 'aa@gmail.com', 'Shaniwarwada', '1', '2', 1000),
(36, 's1@gmail.com', 'lal Mahal', '1', '2', 250),
(58, 'sumit@gmai.com', 'Shaniwarwada', '1', '2', 250),
(60, 'aa@gmail.com', 'PuneTour', '', '', 20000),
(62, 'aa@gmail.com', 'MumbaiTour', '', '', 20000),
(63, 'aa@gmail.com', 'DelhiTour', '', '', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Frist_name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Last_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Message` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `Frist_name`, `Last_Name`, `Email`, `Message`) VALUES
(5, 'pranav', 'malwatkar', 'pranav@gmail.com', 'hey,This is pranav'),
(14, 'Aaryan', 'Ojha', 'hello1@gmail.com', 'Hello Admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Address` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `City` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `State` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Zip` int DEFAULT NULL,
  `Card_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Card_Number` int DEFAULT NULL,
  `Expmonth` int DEFAULT NULL,
  `Expyear` int DEFAULT NULL,
  `Cvv` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Full_Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Card_Name`, `Card_Number`, `Expmonth`, `Expyear`, `Cvv`) VALUES
(1, 'aa', 'aa@gmail.com', 'aa', 'aa', 'aa', 123, 'aa', 121, 1, 1, 1),
(2, 'pranav', 'p@gmailcom', 'hi', 'nanded', 'maharstra', 431602, 'pranav', 1112, 0, 5, 602);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Password` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `question1` varchar(66) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `question2` varchar(66) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `IsAdmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`,`UserName`,`Password`,`Email`,`IsAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserName`, `Email`, `Password`, `question1`, `question2`, `IsAdmin`) VALUES
(26, 'Arryan', 'Arryan.o118', 'Arryan', 'Indira', 'Neeti', 1),
(1, 'admin', 'admin@gmail.com', 'admin', 'indira', 'admin', 1),
(22, 'Pranav', 'pranavmalwatkar142@gmail.', 'Pranav@55', 'Indira', 'Anita', 1),
(25, 'sumit', 'sumit@gmai.com', 'sumit', 's', 's', 0),
(27, 'pranav', 'p@gmail.com', 'p', 'pr', 'pr', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
