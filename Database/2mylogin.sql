-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2016 at 03:26 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2mylogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `ques1` varchar(255) DEFAULT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `ques2` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `ques1`, `ans1`, `ques2`, `ans2`) VALUES
('RajatRana', 'rajat13541', 'What is you Father Name?', 'Ravi', 'What is your childhood nick name?', 'Jayant'),
('blood', 'bloodnit', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_db`
--

CREATE TABLE IF NOT EXISTS `student_db` (
  `roll_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `cur_year` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood_grp` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_db`
--

INSERT INTO `student_db` (`roll_no`, `name`, `branch`, `cur_year`, `gender`, `blood_grp`, `mobile`) VALUES
(13501, 'Davis Deep', 'civ', 'third', 'm', 'O pos', 379437534),
(13502, 'Puneet', 'cse', 'third', 'm', 'B pos', 29327493);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
