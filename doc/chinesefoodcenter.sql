-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2014 at 09:07 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chinesefoodcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `C_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment_rating`
--

CREATE TABLE IF NOT EXISTS `comment_rating` (
  `CR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Content` varchar(300) NOT NULL,
  `RatDetail` int(11) NOT NULL,
  `CommDate` date NOT NULL,
  `FC_ID` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  PRIMARY KEY (`CR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `food_center`
--

CREATE TABLE IF NOT EXISTS `food_center` (
  `FC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `Desc` varchar(100) NOT NULL,
  `Rating` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  PRIMARY KEY (`FC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `U_ID` int(2) NOT NULL AUTO_INCREMENT,
  `Account` varchar(20) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Role` varchar(30) NOT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_ID`, `Account`, `Password`, `Role`) VALUES
(1, 'Admin', 'Admin', 'Administration'),
(2, 'User', 'User', 'User');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
