-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2013 at 12:57 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kfum`
--

-- --------------------------------------------------------

--
-- Table structure for table `beboer`
--

CREATE TABLE IF NOT EXISTS `beboer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `navn` varchar(32) NOT NULL,
  `gang` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `beboer`
--

INSERT INTO `beboer` (`ID`, `navn`, `gang`) VALUES
(1, 'Bjarke Carstens', 1),
(2, 'Signe', 1),
(3, 'Bjarke', 2),
(4, 'Martha', 2),
(5, 'Irina', 2),
(6, 'Niels', 2),
(7, 'Alexandra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `beboerID` int(11) NOT NULL,
  `opgaveID` int(11) NOT NULL,
  `dato` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=172 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `beboerID`, `opgaveID`, `dato`) VALUES
(1, 1, 5, '2013-03-11'),
(2, 2, 6, '2013-03-11'),
(3, 3, 7, '2013-03-11'),
(170, 1, 1, '2013-03-11'),
(171, 2, 2, '2013-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `opgaver`
--

CREATE TABLE IF NOT EXISTS `opgaver` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `opgave` varchar(32) NOT NULL,
  `gang` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `opgaver`
--

INSERT INTO `opgaver` (`ID`, `opgave`, `gang`) VALUES
(1, 'Kitchen 1', 1),
(2, 'Toilet 1', 1),
(3, 'Kitchen 2', 2),
(4, 'Toilet 2', 2),
(5, 'Coridor', 0),
(6, 'Basementroom', 0),
(7, 'Cooking', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
