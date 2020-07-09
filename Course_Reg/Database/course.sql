-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 05:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE IF NOT EXISTS `course_list` (
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `semister` int(25) NOT NULL,
  `department` varchar(40) NOT NULL,
  `session` varchar(20) NOT NULL,
  `credit` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`course_id`, `course_name`, `semister`, `department`, `session`, `credit`) VALUES
('CSE-122', 'fundamental computers', 1, 'CSE', 'fall-20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` varchar(20) NOT NULL,
  `dept_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`) VALUES
('1', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` int(25) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `section` varchar(15) NOT NULL,
  `session` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `dept`, `section`, `session`, `password`) VALUES
(5555, 'gfgdfg', 1715171616, 'CSE', 'A', 'summer-19', '12345'),
(3333, 'vffvfvf', 34235425, 'BBA', 'B', 'fall-15', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE IF NOT EXISTS `user_course` (
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `semister` int(25) NOT NULL,
  `department` varchar(40) NOT NULL,
  `credit` int(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`course_id`, `course_name`, `semister`, `department`, `credit`, `status`, `id`) VALUES
('CSE-122', '	 fundamental computers', 1, 'CSE', 3, 'Drop', 0),
('CSE-101', 'C', 2, 'CSE', 3, 'Regular', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
