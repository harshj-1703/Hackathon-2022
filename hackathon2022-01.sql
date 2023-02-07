-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2023 at 03:15 AM
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
-- Database: `hackathon2022-01`
--

-- --------------------------------------------------------

--
-- Table structure for table `labours`
--

DROP TABLE IF EXISTS `labours`;
CREATE TABLE IF NOT EXISTS `labours` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `heartbeat` varchar(100) NOT NULL,
  `temprature` varchar(250) NOT NULL DEFAULT '0.00',
  `humidity` varchar(250) NOT NULL DEFAULT '0.00',
  `gas` varchar(250) NOT NULL DEFAULT '0.00',
  `height` varchar(250) NOT NULL DEFAULT '0.00',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labours`
--

INSERT INTO `labours` (`id`, `name`, `work`, `heartbeat`, `temprature`, `humidity`, `gas`, `height`, `status`) VALUES
(1, 'krunal trivedi', 'mine machines installs', '75', '0.00', '0.00', '0.00', '10000', 1),
(2, 'Harsh', 'mine cables connections', '70', '0.00', '0.00', '0.00', '0.00', 1),
(16, 'prayag-1', 'dbfjdbvfhv', '50', '0.00', '0.00', '0.00', '0.00', 1),
(17, 'prayag-1', 'gjhgyrty', '70', '0.00', '0.00', '0.00', '0.00', 1),
(18, 'prayag-2', 'dbfjdbvfhv', '50', '0.00', '0.00', '0.00', '0.00', 1),
(19, 'prayag-3', 'dbfjdbvfhv', '50', '0.00', '0.00', '0.00', '0.00', 1),
(20, 'prayag-4', 'dbfjdbvfhv', '50', '0.00', '0.00', '0.00', '0.00', 1),
(21, 'krunal-1', 'ddngn', '45', '450.00', '450.00', '450.00', '0.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nodesconnection`
--

DROP TABLE IF EXISTS `nodesconnection`;
CREATE TABLE IF NOT EXISTS `nodesconnection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labourId` int(11) NOT NULL,
  `connectedId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nodesconnection`
--

INSERT INTO `nodesconnection` (`id`, `labourId`, `connectedId`, `status`) VALUES
(1, 1, 2, 0),
(2, 2, 16, 1),
(3, 1, 17, 1),
(4, 1, 18, 1),
(5, 2, 19, 1),
(6, 1, 20, 1),
(7, 1, 21, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
