-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2020 at 10:44 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jselectronic`
--
CREATE DATABASE IF NOT EXISTS `jselectronic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jselectronic`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(55) NOT NULL,
  `Lname` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Fname`, `Lname`, `Email`, `Description`) VALUES
(1, 'Daniel', 'Stewart', 'cbardaniel@gmail.com', 'Why Pree ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Code` varchar(15) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `ManufacturerDate` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `CostPrice` float NOT NULL,
  `SalesPrice` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `Name`, `Code`, `Manufacturer`, `ManufacturerDate`, `Type`, `Description`, `CostPrice`, `SalesPrice`, `Quantity`, `Image`) VALUES
(12, 'Ipod Touch 6g', 'A001', 'Apple', '2019-03-06', 'Phones', 'Brand New', 2000.95, 4500.25, 6, 'uploads/ipod-touch-select-spacegray-2019_GEO_MX_FMT_WHH.png'),
(14, 'Apple Earpods', 'A003', 'Apple', '2019-02-08', 'Accessory', 'New', 100, 122.8, 6, 'uploads/Apple earpods wireless.jpg'),
(15, 'SanDisk Cruzer Glide CZ60 128GB', 'S002', 'SanDisk', '2019-02-08', 'USB', 'New', 15.25, 18.95, 6, 'uploads/sandisk128gb.jpg'),
(16, 'Playstation 4', 'P001', 'Sony', '2019-03-08', 'Consoles', 'New', 250, 279.99, 6, 'uploads/playstation-4-slim.png'),
(8, 'Iphone 10x', 'A002', 'Apple', '2018-03-05', 'Phones', 'New', 122.95, 4500.25, 6, 'uploads/Apple-iPhone-X-iPhone-10.jpg'),
(13, 'Samsung Galaxy Earbuds', 'S001', 'Samsung', '2017-12-07', 'Accessory', 'New', 100, 118.8, 6, 'uploads/galaxy earbuds.jpg'),
(10, 'Samsung A90', 'C321', 'Samsung', '2019-03-06', 'Phones', 'New', 122.95, 4500.25, 6, 'uploads/0011492_samsung-galaxy-a90.jpeg'),
(17, 'Xbox One S', 'X001', 'Microsoft', '2018-02-07', 'Consoles', 'New', 190.55, 210.95, 6, 'uploads/s-l1600Xbox-One-S-500GB-Console.jpg'),
(18, 'Nintendo Switch', 'N001', 'Nintendo', '2019-03-10', 'Games', 'New', 250, 289.99, 6, 'uploads/Nintendo_Switch.png'),
(19, 'Asus ROG Strix GL503VD', 'A004', 'Asus', '2019-03-08', 'Laptop', 'New', 1000, 1183.99, 6, 'uploads/AsusStrixGL503VD__1_.JPG'),
(21, 'Iphone 11', 'A004', 'Apple', '2020-04-07', 'Phones', 'New', 700, 749, 6, 'uploads/iphone 11.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
