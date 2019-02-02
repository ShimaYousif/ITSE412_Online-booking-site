-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2019 at 09:22 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(30) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `email`, `telephone`, `city`, `country`) VALUES
(100, 'Renata Hotel', 'renata@gmail.com', 2147483647, 'Istanbul', 'Turkey'),
(101, 'Pike Hotel', 'Pike Hotel@gmail.com', 9012345, ' Istanbul', 'Turkey '),
(200, 'Hilton Hotel', 'hilton@gmail.com', 60123456, 'Beirut', 'Lebanon'),
(300, 'Steigenberger Liberation Hotel', 'steigenberger@gmail.com', 20121173, 'Cairo', 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking`
--

CREATE TABLE IF NOT EXISTS `hotel_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_room` (`id_room`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Essam', 'ee@gmail.com', 'hytry', 'gjrehglrhgjsgkrehjgbkjrjkgdsgkghskjgdsjkgb'),
(2, 'jklj', 'ema,n,nmil', 'bmbn,m', 'k.gjkfdjjglfdkjlkjfdnhklrnhklre'),
(3, 'jklj', 'ema,n,nmil', 'bmbn,m', 'k.gjkfdjjglfdkjlkjfdnhklrnhklre'),
(7, 'mfd.', 'dfsgs', 'gfdhfd', 'bghtyjy'),
(8, 'mfd.', 'dfsgs', 'gfdhfd', 'bghtyjy'),
(9, 'mfd.', 'dfsgs', 'gfdhfd', 'bghtyjy'),
(10, 'malak', 'malaktecom@gmail .com', 'hallo', 'very good website'),
(11, 'malak', 'malaktecom@gmail .com', 'hallo', 'very good website'),
(12, 'sara', 'saramohamed', 'vdv', 'zvnsdjhvsj,v'),
(13, 'muna', 'fdsfs', 'dvss', 'dfsgsdgsgsd'),
(14, 'hesham', 'hesham@gmail.com', 'nvdkgje', 'nsdkghelskges'),
(15, 'shima', 'shima@gmail.com', 'jg;dg;a', 'gfedeghekh.dgzjg'),
(16, 'mm', 'ghvh@fh', 'h,b,jghgh', 'vnbcbfdrtryykhj');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id_room` int(20) NOT NULL,
  `id_hotel` int(20) NOT NULL,
  `adults` int(20) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `bed_type` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id_room`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `id_hotel`, `adults`, `categorie`, `bed_type`, `price`, `flag`) VALUES
(10, 200, 2, 'Single', '1 double bed', 345, 0),
(20, 300, 2, 'suite', '1 double bed', 445, 0),
(1001, 100, 3, 'Single', '1 double bed', 320, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `password`, `type`, `telephone`, `email`, `country`) VALUES
(1, 'malak', '1234', 'admin', '091-1282559', 'malak@gmail.com', 'tripoli'),
(2, 'shima', '5678', 'admin', '092-1234567', 'shima@gmail.com', 'tripoli');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
