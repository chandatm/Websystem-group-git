--
-- Database: `WSDI_jselectronic`
--
CREATE DATABASE IF NOT EXISTS `WSDI_jselectronic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `WSDI_jselectronic`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `Contact`;
CREATE TABLE IF NOT EXISTS `Contact` (
                                     `Id` int(11) NOT NULL AUTO_INCREMENT,
                                     `Fname` varchar(55) NOT NULL,
                                     `Lname` varchar(55) NOT NULL,
                                     `Email` varchar(55) NOT NULL,
                                     `Description` varchar(255) NOT NULL,
                                     PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact`
--
INSERT INTO `contact` (`Id`, `Fname`, `Lname`, `Email`, `Description`) VALUES
(1, 'Daniel', 'Stewart', 'cbardaniel@gmail.com', 'Why Pree ');

-- --------------------------------------------------------


--
-- Table structure for table `Vendor`
--
DROP TABLE IF EXISTS `Vendor`;
CREATE TABLE IF NOT EXISTS `Vendor` (
                                        `Id` INT NOT NULL AUTO_INCREMENT,
                                        `Company_name` VARCHAR(50) NOT NULL,
                                        `Email` VARCHAR(20) NOT NULL,
                                        `Password` VARCHAR(50) NOT NULL,
                                        PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Table structure for table `Products`
--
DROP TABLE IF EXISTS `Products`;
CREATE TABLE IF NOT EXISTS `Products` (
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--
INSERT INTO `products` (`ProductId`, `Name`, `Code`, `Manufacturer`, `ManufacturerDate`, `Type`, `Description`, `CostPrice`, `SalesPrice`, `Quantity`, `Image`) VALUES
(1, 'Refrigerator', 'C123', 'Blackpoint', '2018-01-24', 'Electronics', 'New', 34.12, 4500.25, 6, 'Refrigerator'),
(2, 'Refrigerator', 'C123', 'Blackpoint', '2018-01-24', 'Electronics', 'New', 34.12, 4500.25, 6, 'Refrigerator'),
(3, 'Refrigerator', 'C123', 'Blackpoint', '2018-01-24', 'Electronics', 'New', 34.12, 4500.25, 6, ''),
(4, 'Refrigerator', 'C123', 'Blackpoint', '2018-01-24', 'Electronics', 'New', 34.12, 4500.25, 6, 'uploads/'),
(5, 'Stove', 'C123', 'Blackpoint', '2019-02-01', 'Appliance', 'New', 2000.95, 4500.25, 6, 'Stove'),
(6, 'Stove', 'C123', 'Blackpoint', '2018-03-31', 'Appliance', 'New', 4200, 7500, 6, 'Stove'),
(7, 'Stove', 'C123', 'Blackpoint', '2016-12-29', 'Appliance', 'New', 122.95, 7500, 6, 'Stove'),
(8, 'Refrigerator', 'C321', 'Blackpoint', '2018-02-01', 'Appliance', 'New', 2000.95, 4500.25, 6, 'Refrigerator'),
(9, 'Stove', 'C123', 'Blackpoint', '2019-03-01', 'Appliance', 'New', 2000.95, 4500.25, 6, 'uploads/Big-ROG-logo-1920-x-1080.jpg');
COMMIT;
