-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2015 at 03:26 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mng_boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE IF NOT EXISTS `authentication` (
  `id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `booking_id` varchar(10) NOT NULL,
  `room_no` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `voter_id` varchar(15) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE IF NOT EXISTS `payment_mode` (
  `Booking_id` varchar(10) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `Total_payment` decimal(10,0) NOT NULL,
  `Paid` decimal(10,0) NOT NULL,
  `Due` decimal(10,0) NOT NULL,
  `Payment_date` date NOT NULL,
  `Confiremation` varchar(5) NOT NULL,
  PRIMARY KEY (`Booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE IF NOT EXISTS `ques` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `queries` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `name`, `email`, `queries`) VALUES
(1, 'anand', 'subha@gmail.com', 'ndkjahkakjdh'),
(2, 'anand', 'anandkumar@gmail.com', 'jhkjhjfhkjds'),
(3, 'ghhgfghf', 'kmr@gmail.com', 'bkjhfhjkfa'),
(4, 'jkjh', 'hkjhk@jgsjg', 'jhkhk'),
(5, 'sumit', 'sumit71091@gmail.com', ''),
(6, 'subhadip layek', 'subha@gmail.com', 'hjkjdhkjfs'),
(7, 'anand kumar', 'anand@gmail.com', 'hello varsana'),
(8, 'shambhu', 'kumar', ''),
(9, 'shambhu', 'kumar', 'gjhgs');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_no` int(11) NOT NULL,
  `type_details` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `services` varchar(50) NOT NULL,
  `iname` varchar(20) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `type_details`, `type`, `rate`, `services`, `iname`) VALUES
(101, 'non ac economy', 'single', '400', 'attach bath hot water', 'demo.jpg'),
(106, 'ac economy', 'single', '600', 'attach bath hot water', 'demo.jpg'),
(111, 'ac delux', 'single', '800', 'room service,attach bat,hot water, tv', 'demo.jpg'),
(102, 'non ac economy', 'double', '600', 'attach bath hot water', 'demo.jpg'),
(107, 'ac economy', 'double', '800', 'attach bath hot water', 'demo.jpg'),
(112, 'ac delux', 'single', '800', 'room service,attach bat,hot water, tv', 'demo.jpg'),
(201, 'wedding hall', 'party', '10000', 'room service,attach bat,hot water, tv', 'demo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_availability`
--

CREATE TABLE IF NOT EXISTS `rooms_availability` (
  `room_no` int(11) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_availability`
--

INSERT INTO `rooms_availability` (`room_no`, `in_date`, `out_date`, `status`) VALUES
(101, '0000-00-00', '0000-00-00', 'booked'),
(106, '2015-04-22', '2015-04-24', 'available'),
(111, '0000-00-00', '0000-00-00', 'available'),
(102, '0000-00-00', '0000-00-00', 'available'),
(107, '0000-00-00', '0000-00-00', 'available'),
(112, '0000-00-00', '0000-00-00', 'available'),
(201, '0000-00-00', '0000-00-00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_booking`
--

CREATE TABLE IF NOT EXISTS `rooms_booking` (
  `date` date NOT NULL,
  `booking_id` varchar(10) NOT NULL,
  `room_no` varchar(20) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `no_of_person` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `per_day_rate` decimal(10,0) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `cancel` tinyint(1) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_booking`
--

INSERT INTO `rooms_booking` (`date`, `booking_id`, `room_no`, `customer_name`, `no_of_person`, `no_of_days`, `per_day_rate`, `total_amount`, `payment`, `cancel`) VALUES
('2015-04-22', 'vrsna1664', '101', 'shambhu kumar', 1, 3, '400', '1500', 'no', 1),
('2015-04-22', 'vrsna56665', '106', 'subha layek', 1, 3, '600', '2100', 'no', 0),
('2015-04-22', 'vrsna93643', '101', 'shambhu kumar', 1, 3, '400', '1500', 'no', 0),
('2015-04-22', 'vrsna25571', '', 'ghdsjah hghjgdsj', 0, 0, '0', '0', 'no', 0),
('2015-04-22', 'vrsna20191', '101', 'subha layek', 1, 2, '400', '800', 'no', 1),
('2015-04-22', 'vrsna59137', '', 'subha layek', 1, 2, '0', '200', 'no', 1),
('2015-04-22', 'vrsna30478', '106', 'subha layek', 1, 2, '600', '1400', 'no', 1),
('2015-04-22', 'vrsna20719', '101', 'subha layek', 1, 2, '400', '1000', 'no', 0),
('2015-04-22', 'vrsna666', '106', 'subha layek', 1, 2, '600', '1400', 'no', 1),
('2015-04-22', 'vrsna42578', '101', 'subha layek', 1, 2, '400', '1000', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwd` varchar(16) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `passwd`, `mobile`, `email`, `address`) VALUES
(1, 'sumit', 'kumar', 'sumit', '1234', '1234567890', 'sumit71091@gmail.com', 'nit jamshedpur 831013'),
(2, 'subha', 'layek', 'subha', '1234', '8235442043', 'subha@gmail.com', 'nit jsr'),
(4, 'Krishna', 'Mohan', 'kmr', '1111', '8900000000', 'kmr@gmail.com', 'rit co operative society , jamshedpur'),
(5, 'anand', 'pradhan', 'anand', '1234', '1234567890', 'anand@gmail.com', 'rit co operative society , jamshedpur'),
(6, 'shambhu', 'kumar', 'shambhu', '1234', '1234567890', 'shambhu@gmail.com', 'nit jsr'),
(7, 'shambhu', 'kumar', 'shambhu', '1234', '8507732846', 'shambhuk260@gmail.com', 'nit jsr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
