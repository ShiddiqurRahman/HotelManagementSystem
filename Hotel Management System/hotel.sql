-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 01:00 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `roomtypes` varchar(100) NOT NULL,
  `roomnum` int(100) NOT NULL,
  `numnight` int(40) NOT NULL,
  `adult` int(40) NOT NULL,
  `child` int(40) NOT NULL,
  `title` varchar(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `checkin`, `checkout`, `roomtypes`, `roomnum`, `numnight`, `adult`, `child`, `title`, `name`, `address`, `contact`) VALUES
(19, '2016-05-18', '2016-05-24', 'option2', 1, 1, 1, 1, 'Mr.', 'as', 'ssxsa', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `title`, `details`) VALUES
(1, 'Boishakhi Hawa', '1.3 day, 2 night\r\n2.welcome drink\r\n3.buffer lunch'),
(2, 'New Year', '1.3 day, 2 night\r\n2.welcome drink\r\n3.buffer lunch'),
(3, 'Pohela Boishakh', '1.5 Night , 2 Days\r\n2.Dinner\r\n3.Pool Party');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `title`, `name`, `email`, `password`, `address`, `contact`) VALUES
(1, 'Mr.', 'Shiddiqur Rahman', 'sumonqb@gmail.com', '1234', 'kurigram', '01737936862'),
(2, 'admin', 'admin', 'admin@gmail.com', '3214', 'Dhaka', '01673554569');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
