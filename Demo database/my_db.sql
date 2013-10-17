-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2013 at 03:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE IF NOT EXISTS `a` (
  `username` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `timing` int(11) NOT NULL,
  `cart` int(11) NOT NULL,
  `cleaning` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`username`, `quantity`, `water`, `timing`, `cart`, `cleaning`, `quality`) VALUES
(205112003, 8, 8, 8, 8, 8, 8),
(205112004, 8, 6, 6, 6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `b`
--

CREATE TABLE IF NOT EXISTS `b` (
  `username` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `timing` int(11) NOT NULL,
  `cart` int(11) NOT NULL,
  `cleaning` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b`
--

INSERT INTO `b` (`username`, `quantity`, `water`, `timing`, `cart`, `cleaning`, `quality`) VALUES
(205112005, 9, 8, 7, 6, 5, 6),
(205112006, 0, 9, 7, 6, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `m1`
--

CREATE TABLE IF NOT EXISTS `m1` (
  `username` int(9) NOT NULL,
  `quality` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `timing` int(11) NOT NULL,
  `cart` int(11) NOT NULL,
  `cleaning` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1`
--

INSERT INTO `m1` (`username`, `quality`, `quantity`, `water`, `timing`, `cart`, `cleaning`) VALUES
(205112034, 7, 3, 5, 3, 3, 4),
(205112038, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `m2`
--

CREATE TABLE IF NOT EXISTS `m2` (
  `username` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `timing` int(11) NOT NULL,
  `cart` int(11) NOT NULL,
  `cleaning` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2`
--

INSERT INTO `m2` (`username`, `quantity`, `water`, `timing`, `cart`, `cleaning`, `quality`) VALUES
(205112001, 4, 4, 4, 4, 4, 4),
(205112002, 8, 8, 8, 8, 8, 8),
(205112036, 9, 7, 3, 6, 8, 8),
(205112037, 6, 7, 3, 8, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `o`
--

CREATE TABLE IF NOT EXISTS `o` (
  `username` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `timing` int(11) NOT NULL,
  `cart` int(11) NOT NULL,
  `cleaning` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `o`
--

INSERT INTO `o` (`username`, `quantity`, `water`, `timing`, `cart`, `cleaning`, `quality`) VALUES
(205112007, 8, 8, 7, 6, 5, 7),
(205112008, 8, 9, 6, 7, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `username` int(9) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rollno` int(9) NOT NULL,
  `course` varchar(20) NOT NULL,
  `batch` varchar(4) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`username`, `password`, `name`, `rollno`, `course`, `batch`, `mobile`) VALUES
(205112001, '1', 'a', 2, 'm c a', '2015', '8903240352'),
(205112002, '2', '2', 2, 'm c a', '2015', '8903240352'),
(205112034, 'Nitt100', 'shiv ram parida', 205112034, 'm c a', '2015', '8903240352');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
