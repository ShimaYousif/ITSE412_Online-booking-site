-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2019 at 05:15 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `password`, `telephone`, `email`, `country`) VALUES
(1, 'malak', '1234', '091-1282559', 'malak@gmail.com', 'Libya'),
(2, 'shima', '5678', '092-1234567', 'shima@gmail.com', 'Libya'),
(3, 'admin', '123456', '094-9876541', 'admin@gmail.com', 'Libya');

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE IF NOT EXISTS `archives` (
  `hotel_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`hotel_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`hotel_name`, `email`, `telephone`, `city`, `country`) VALUES
('AAAAA', 'DFDSGDG', 123456, 'FDDGDGD', 'GGRG'),
('BBBB', 'TTJFTJJ', 98765, 'BGHHT', 'DHTDHT'),
('booking', 'booking@gmail.com', 9056897, 'istunbul', 'Turkey'),
('DDDDD', 'GHGG', 753951, 'FHHGCH', 'BHDH'),
('gfdhgfj', 'hdgdt', 12345, 'jgfkjgldf', 'Turkey'),
('Hilton Hotel', 'hilton@gmail.com', 60123456, 'Beirut', 'Lebanon'),
('The Rooms Boutique Hotel', ' rooms boutique@gmail.com', 123456, 'Beirut', 'Lebanon');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(225) NOT NULL,
  `customer_email` varchar(225) NOT NULL,
  `customer_tele` varchar(225) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(102, 'Point Ankara Hotel', 'Point Ankara@gmail.com', 236974118, 'Ankara', 'Turkey'),
(103, 'White Garden Hotel', 'White Garden Hotel@gmail.com', 1298763254, 'Antalya', 'Turkey'),
(104, 'Spektr Boutique Hotel & Spa', 'Spektr Boutique Hotel & Spa@gmail.com', 1598746325, 'Bodrum', 'Turkey'),
(200, 'Hilton Hotel', 'hilton@gmail.com', 60123456, 'Beirut', 'Lebanon'),
(201, 'Rooms Boutique Hotel', 'Rooms Boutique Hotel@gmail.com', 125987634, 'Jounieh', 'Lebanon '),
(202, 'Ehden Hotel', 'Ehden Hotel@gmail.com', 1236987, 'Ehden', 'Lebanon '),
(203, 'WH Hotel', 'WH Hotel@gmail.com', 12396485, 'Beirut', 'Lebanon'),
(204, 'Byblos sur Mer Hotel', 'Byblos sur Mer Hotel@gmail.com', 12569756, 'Byblos', 'Lebanon'),
(300, 'Steigenberger Liberation Hotel', 'steigenberger@gmail.com', 20121173, 'Cairo', 'Egypt'),
(301, 'Gloria Hotel', 'Gloria Hotel@gmail.com', 2698746, 'Cairo', 'Egypt'),
(302, 'Steigenberger Alcazar Hotel', 'Steigenberger Alcazar Hotel@gmail.com', 129874563, 'Sharm el-Sheikh', 'Egypt'),
(303, 'Rixos Premium Seagate Hotel', 'Rixos Premium Seagate Hotel@gmail.com', 45987632, 'Sharm Al Sheikh', 'Egypt '),
(304, 'Plaza Hotel', 'Plaza Hotel@gmail.com', 12369854, 'Alexandria', 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking`
--

CREATE TABLE IF NOT EXISTS `hotel_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_room` (`id_room`),
  KEY `id_user` (`id_customer`)
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
  `Name` varchar(225) NOT NULL,
  `adults` int(20) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `facilities` varchar(225) NOT NULL,
  `bed_type` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `img` varchar(225) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id_room`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `id_hotel`, `Name`, `adults`, `categorie`, `facilities`, `bed_type`, `price`, `img`, `flag`) VALUES
(110, 100, 'Deluxe Club Room with Kitchenette', 2, 'Single', 'Closet with hangers,_HD flat screen TV, Telephone', '1 double bed', 370, 'images/renata1_img.jpg', 0),
(111, 100, 'Superior Double Room With Sea View', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 double bed and 1 sofa bed', 280, 'images/renata2_img.jpg', 0),
(112, 100, 'Comfort Room with Terrace', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed and 1 sofa bed  ', 200, 'images/renata3_img.jpg', 0),
(113, 100, 'Deluxe Room with Terrace', 3, 'Single', ' Closet with hangers, HD flat-screen TV, Telephone', '1 sofa bed and 1 double bed', 250, 'images/renata4_img.jpg', 0),
(114, 100, 'Single Room', 1, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Single bed', 145, 'images/img_2.jpg', 0),
(115, 100, 'Family Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed', 375, 'images/renata5_img.jpg', 0),
(116, 100, 'Premier Room', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 double bed and 1 sofa bed', 250, 'images/renata6_img.jpg', 0),
(117, 100, 'Single Room', 1, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Single bed', 145, 'images/renata7_img.jpg', 0),
(118, 100, 'Family Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed', 375, 'images/renata8_img.jpg', 0),
(210, 200, 'Deluxe Club Room', 2, 'Single', ' Closet with hangers, HD flat-screen TV, Telephone', '1 double bed', 345, 'images/hi3_img.jpg', 0),
(211, 200, 'Superior Double Room', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 double bed and 1 sofa bed', 300, 'images/hi2_img.jpg', 0),
(212, 200, 'Deluxe Twin Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '2 single beds', 280, 'images/hi1_img.jpg', 0),
(213, 200, 'Deluxe Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 sofa bed and 1 double bed', 190, 'images/hi4_img.jpg', 0),
(214, 200, 'Twin Guest Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '2 Single bed', 170, 'images/hi6_img.jpg', 0),
(215, 200, 'Family Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed', 275, 'images/hi5_img.jpg', 0),
(216, 200, 'Premier Room', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 double bed and 1 sofa bed', 250, 'images/hi8_img.jpg', 0),
(217, 200, 'Family King Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed', 200, 'images/hi7_img.jpg', 0),
(218, 200, 'King Guest Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed', 375, 'images/hi9_img.jpg', 0),
(310, 300, 'Suite', 2, 'suite', 'Closet with hangers, HD flat-screen TV, Telephone', '1 double bed', 445, 'images/st3_img.jpg', 0),
(311, 300, 'Superior City View Room', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 double bed and 1 sofa bed', 300, 'images/st4_img.jpg', 0),
(312, 300, 'Junior Suite', 3, 'Suite', 'Closet with hangers, HD flat-screen TV, Telephone', ' 2 single beds', 330, 'images/st2_img.jpg', 0),
(313, 300, 'Deluxe Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 sofa bed and 1 double bed', 290, 'images/st1_img.jpg', 0),
(314, 300, 'Twin Guest Room', 2, 'Single', ' Closet with hangers, HD flat-screen TV, Telephone', '2 Single bed', 170, 'images/st5_img.jpg', 0),
(315, 300, 'Family Room', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed and 1 single bed', 275, 'images/st6_img.jpg', 0),
(316, 300, 'Superior Queen Pool View Room', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 double bed and 1 sofa bed', 350, 'images/st7_img.jpg', 0),
(317, 300, 'Deluxe Club Room with Kitchenette', 2, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed', 370, 'images/st8_img.jpg', 0),
(318, 300, 'Deluxe Side Nile View Room', 3, 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '1 Double bed and 1 sofa bed  ', 375, 'images/st9_img.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `telephone`, `email`, `country`) VALUES
(1, 'essam', '091-9586432', 'essam@gmail.com', 'Libya'),
(2, 'malak', '091-9583432', 'malak@gmail.com', 'Libya'),
(3, 'eman', '091-1596842', 'eman@gmail.com', 'Libya'),
(4, 'shima', '092-695987', 'shima@gmail.com', 'Libya'),
(5, 'sara', '091-9586432', 'sara@gmail.com', 'Egypt'),
(6, 'hesham', '091-9586432', 'hesham@gmail.com', 'Algeria'),
(7, 'maram', '091-787878', 'maram@gmail.com', 'Algeria'),
(8, 'amera', '092-1234567', 'amera@gmail.com', 'Lebanon'),
(9, 'ali', '092-9876541', 'ali@gmail.com', 'Lebanon'),
(10, 'zuam', '094-9517534', 'zuam@gmail.com', 'Tunisia'),
(11, 'hala', '091-9874562', 'hala@gmail.com', 'Egypt'),
(12, 'mohamed', '091-9874562', 'mohamed@gmail.com', 'Turkey'),
(13, 'muna', '091-9874562', 'muna@gmail.com', 'Turkey'),
(14, 'muhab', '091-9874562', 'muhab@gmail.com', 'Turkey');

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
