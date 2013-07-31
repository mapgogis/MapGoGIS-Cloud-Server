-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2013 at 02:30 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobileServer`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `credate` datetime NOT NULL,
  `projectid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `facility_id` (`projectid`),
  KEY `createdate` (`credate`),
  KEY `note` (`note`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `note`, `credate`, `projectid`, `file`) VALUES
(19, '', '2013-06-04 11:33:36', 'Data_20130227_145845', 'IMG20130227145949.jpg'),
(20, '', '2013-06-04 11:33:39', 'Data_20130227_145845', 'IMG20130227145936.jpg'),
(21, '', '2013-06-04 11:33:42', 'Data_20130227_150648', 'IMG20130227150813.jpg'),
(22, '', '2013-06-04 11:33:46', 'Data_20130227_150648', 'IMG20130227150800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `express` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `x` decimal(20,10) DEFAULT NULL,
  `y` decimal(20,10) DEFAULT NULL,
  `credate` datetime DEFAULT NULL,
  `cremonth` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `projectid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;




-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `credate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `acount` (`account`,`pwd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
