-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2024 at 12:58 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `email`, `destination`, `adults`, `children`, `price`) VALUES
(69, 'Pranav142@gmail.com', 'Shaniwarwada', '1', '2', 250),
(70, 'Pranav142@gmail.com', 'PuneTour', '', '', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `First_name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Last_name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `UserComments` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `First_name`, `Last_name`, `Email`, `UserComments`) VALUES
(5, 'Pranav', 'Malwatkar', 'pranav@gmail.com', 'Hi,This is first website.');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Full_Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Card_Name`, `Card_Number`, `Expmonth`, `Expyear`, `Cvv`) VALUES
(4, 'Pranav Raju Malwatkar', 'Pranav142@gmail.com', 'Wakad', 'Pune', 'Maharashtra', 410990, 'Pranav Raju Malwatkar', 2147483647, 5, 2023, 111),
(5, 'Pranav Raju Malwatkar', 'pranavmalwatkar142@gmail.com', 'Wakad', 'Pune', 'Maharashtra', 410990, 'sdf', 2147483647, 5, 2222, 123);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Password` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `question1` varchar(66) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `question2` varchar(66) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `IsAdmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`,`UserName`,`Password`,`Email`,`IsAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserName`, `Email`, `Password`, `question1`, `question2`, `IsAdmin`) VALUES
(44, 'Pranav', 'Pranav142@gmail.com', '$2y$10$vwqa2LNLkTRt441mcsr2G.Rh56CxPnifqltFtYRz0hQWOv.cyomEO', 'Indira', 'Anita', 0),
(46, 'admin', 'Admin123@gmail.com', '$2y$10$XdHhtkp7v0ACQ4lhp.MwxuKbrdnWXBEdID6WNAFalomznrP5W15Ba', 'admin', 'admin', 1),
(45, 'Aaryan', 'Aaryan123@gmail.com', '$2y$10$KhEaLtRXYSx7kz3czwbewOMJo.4.Q8OXtPGJ/g/ZVZ.mhXFDuXNX6', 'Indira', 'Nita', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
