-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2014 at 05:21 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sally_clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_ID` int(255) NOT NULL AUTO_INCREMENT,
  `customer_first_name` varchar(255) NOT NULL,
  `customer_last_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_balance` double NOT NULL,
  PRIMARY KEY (`customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_ID`, `customer_first_name`, `customer_last_name`, `customer_email`, `customer_balance`) VALUES
(1, 'ssdafas', 'sadfasdf', 'asdfa', 0),
(2, 'TheBoss', 'IamLegends', 'Dan@dangotgame.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_ID` int(255) NOT NULL AUTO_INCREMENT,
  `product_Type` int(255) NOT NULL,
  `product_Name` varchar(255) NOT NULL,
  `product_Desc` varchar(255) NOT NULL,
  `product_Price` double NOT NULL,
  `product_ninstock` int(255) NOT NULL DEFAULT '100',
  PRIMARY KEY (`product_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_ID`, `product_Type`, `product_Name`, `product_Desc`, `product_Price`, `product_ninstock`) VALUES
(1, 4, 'Swag Jacket', 'dgdg', 16.5, 100),
(2, 11, 'Arm Band', 'Looks black and furry and shit', 12.49, 100);

-- --------------------------------------------------------

--
-- Table structure for table `stock_types`
--

CREATE TABLE IF NOT EXISTS `stock_types` (
  `sTypeID` int(255) NOT NULL AUTO_INCREMENT,
  `sTypeName` varchar(255) NOT NULL,
  PRIMARY KEY (`sTypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `stock_types`
--

INSERT INTO `stock_types` (`sTypeID`, `sTypeName`) VALUES
(1, 'Jeans'),
(2, 'Slacks'),
(3, 'Pants'),
(4, 'Dresses'),
(5, 'Underwear'),
(6, 'Socks'),
(7, 'Blouses'),
(8, 'Shirts'),
(9, 'Tee-Shirts'),
(10, 'Tops'),
(11, 'Accessories'),
(12, 'Skirts'),
(13, 'Shorts'),
(14, 'Nightwear'),
(15, 'Suits'),
(16, 'Ties');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
