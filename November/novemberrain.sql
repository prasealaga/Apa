-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2018 at 02:27 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `novemberrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `custid` char(10) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `wilayah` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `contact`, `city`, `wilayah`) VALUES
('C001', 'Prase', 'Magelang', 'Wilayah 1'),
('C002', 'Alaga', 'Jakarta', 'Wilayah 1'),
('C003', 'Cavalera', 'Bekasi', 'Wilayah 2'),
('C004', 'Bedjo', 'Karanganyar', 'Wilayah 1'),
('C005', 'Rino', 'Pekalongan', 'Wilayah 2'),
('C006', 'Setiyo', 'Bogor', 'Wilayah 2'),
('C007', 'Ahmad', 'Tangerang', 'Wilayah 1'),
('C008', 'Ragil', 'Aceh', 'Wilayah 1'),
('C009', 'Ican', 'Medan', 'Wilayah 1'),
('C010', 'Muhammad', 'Yogyakarta', 'Wilayah 3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
