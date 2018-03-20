-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 09:00 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data3`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `user` text NOT NULL,
  `pattern` text NOT NULL,
  `shoetype` text NOT NULL,
  `combination` varchar(5) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`user`, `pattern`, `shoetype`, `combination`, `amount`, `path`) VALUES
('parth', 'gc', 'lt', 'c2', '2000', '/img/gcltc2.jpg'),
('shyam', 'brc', 'ht', 'c1', '2000', '/img/brchtc1.jpg'),
('jeel', 'bc', 'ht', 'c2', '1800', '/img/bchtc2.jpg'),
('harsh', 'brc', 'lt', 'c1', '2200', '/img/brcltc1.jpg'),
('shyam', 'brc', 'ht', 'c2', '1800', '/img/brchtc2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `add1` text NOT NULL,
  `add2` text NOT NULL,
  `add3` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `add1`, `add2`, `add3`, `email`, `contact`) VALUES
('shyam', 'shyam', 'virar', 'maharashtra', 'india', 'shyam@uc.com', 2147483647),
('parth', 'parth', 'kandivali', 'mumbai', 'india', 'parth@uc.com', 2147483647),
('jeel', 'jeel', 'malad', 'mumbai', 'india', 'jeel@arj.com', 2147483647),
('harsh', 'harsh', 'dahisar', 'mumbai', 'india', 'hsp@uc.com', 2147483647);
