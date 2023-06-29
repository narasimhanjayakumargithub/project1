-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2019 at 05:10 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `email_chat_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_keywords`
--

CREATE TABLE `admin_keywords` (
  `id` varchar(25) NOT NULL,
  `keywords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_keywords`
--

INSERT INTO `admin_keywords` (`id`, `keywords`) VALUES
('2', 'bomb'),
('3', 'terrorist attack'),
('4', 'bomb blast'),
('5', 'muder'),
('6', 'tik tik');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `logindate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `mac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `contact`, `email`, `address`, `password`, `image`, `rdate`, `logindate`, `status`, `dob`, `latitude`, `longitude`, `ip`, `mac`) VALUES
(1, 'arun', '7339333830', 'arunextazee@gmail.com', 'kovilpatty', '123', 'Penguins.jpg', '', 'logdate', '0', '121212', '10.8478464', '78.6907136', '192.168.0.9', '00-50-56-C0-00-08'),
(2, 'thayuba ', '987654329', 'thayuba@gmail.com', 'trichy', '1234', 'Koala.jpg', '', 'logdate', '2', '03-03-98', '10.8478464', '78.6907136', '192.168.0.9', '00-50-56-C0-00-08');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(25) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `report` varchar(25) NOT NULL,
  `cdate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `sender`, `receiver`, `subject`, `message`, `status`, `report`, `cdate`) VALUES
(1, 'thayuba@gmail.com', 'arunextazee@gmail.com', 'test', 'project get ', '0', '0', 'September 28, 2019, 4:56 '),
(2, 'thayuba@gmail.com', 'arunextazee@gmail.com', 'fggg', 'tik tik', '2', '0', 'September 28, 2019, 4:59 ');
