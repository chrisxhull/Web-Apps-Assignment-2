-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2016 at 01:02 PM
-- Server version: 5.0.95
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `WAL06105212`
--

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE IF NOT EXISTS `Events` (
  `ID` int(11) NOT NULL auto_increment,
  `Username` varchar(35) NOT NULL,
  `Review` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`ID`, `Username`, `Review`) VALUES
(12, 'chrisxhull', 'This is a review to edit');

-- --------------------------------------------------------

--
-- Table structure for table `Webapps`
--

CREATE TABLE IF NOT EXISTS `Webapps` (
  `id` int(11) NOT NULL auto_increment,
  `Firstname` varchar(35) NOT NULL,
  `Surname` varchar(35) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Pword` varchar(32) NOT NULL,
  `Venue` varchar(35) default NULL,
  `Addressline1` varchar(50) NOT NULL,
  `Addressline2` varchar(50) default NULL,
  `City` varchar(100) NOT NULL,
  `Country` char(2) NOT NULL,
  `Postcode` varchar(9) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phonenumber` varchar(20) default NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Webapps`
--

INSERT INTO `Webapps` (`id`, `Firstname`, `Surname`, `Username`, `Pword`, `Venue`, `Addressline1`, `Addressline2`, `City`, `Country`, `Postcode`, `Email`, `Phonenumber`) VALUES
(1, 'kjhjkhjkhj', 'khjkhjk', 'khjkhjk', 'hjkhjkhjk', 'hjkhj', 'khjkhj', 'khjkh', 'hjkhjk', 'jk', 'hjkhjk', 'hjkhjkhj', 'jkhjkhjk'),
(2, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'safasf', 'asfasa', 'asdasd', 'asd', 'asdas', 'aaassd', 'sddgvsbvx', 'aasadas', 'sa', 'asdasdas', 'asdasdas', 'asdasdasdas'),
(48, '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'Chris', 'Wallace', 'chrisxhull', 'Password1', 'new', 'asdflkjsdlkfjsd', 'klasjdfklsdafjsdlk', 'aslkfjsdlkfjs', 'as', 'hufdnsd', 'chriswallace38@googlemail.com', '04843543465'),
(50, '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY  (`ID`);

--
-- Indexes for table `Webapps`
--
ALTER TABLE `Webapps`
  ADD PRIMARY KEY  (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Webapps`
--
ALTER TABLE `Webapps`
AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
