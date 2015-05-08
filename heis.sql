-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2015 at 05:37 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heis`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `FieldID` int(2) NOT NULL AUTO_INCREMENT,
  `FieldName` varchar(15) NOT NULL,
  `Price` int(6) NOT NULL,
  PRIMARY KEY (`FieldID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`FieldID`, `FieldName`, `Price`) VALUES
(1, 'Semen', 65000),
(2, 'Vinyl', 85000),
(3, 'Sintetis', 85000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `UserID` varchar(25) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Pass` varchar(25) NOT NULL,
  `Role` varchar(15) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`UserID`, `Phone`, `Pass`, `Role`) VALUES
('alfandiog', '0816671799', 'Alfandiog123', 'Admin'),
('owner', '0816670518', 'Owner123', 'Super Admin'),
('peralta', '085311462257', 'Peralta123', 'Member'),
('pungky', '08121506868', 'Pungky123', 'Member'),
('sukroooo', '0816677789', 'Sukroooo123', 'Admin'),
('widuri', '08121510366', 'Widuri123', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `OrderID` int(3) NOT NULL AUTO_INCREMENT,
  `OrderDate` date NOT NULL,
  `OrderTime` time NOT NULL,
  `PlayDate` date NOT NULL,
  `PlayStart` int(2) NOT NULL,
  `PlayEnd` int(2) NOT NULL,
  `Field` varchar(15) NOT NULL,
  `User_ID` varchar(25) NOT NULL,
  `Charge` int(6) NOT NULL,
  `Stats` int(1) NOT NULL,
  PRIMARY KEY (`OrderID`),
  UNIQUE KEY `OrderID` (`OrderID`),
  KEY `TransaksiFK` (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`OrderID`, `OrderDate`, `OrderTime`, `PlayDate`, `PlayStart`, `PlayEnd`, `Field`, `User_ID`, `Charge`, `Stats`) VALUES
(1, '2015-05-21', '06:00:00', '2015-05-25', 10, 11, 'Vinyl', 'peralta', 85000, 1),
(2, '2015-05-21', '08:00:00', '2015-05-25', 13, 15, 'Semen', 'pungky', 170000, 0),
(3, '2015-05-22', '15:21:12', '2015-05-25', 20, 22, 'Sintetis', 'widuri', 170000, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `TransaksiFK` FOREIGN KEY (`User_ID`) REFERENCES `pengguna` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
