-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2019 at 04:59 PM
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
-- Database: `storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `storage_unit` tinyint(4) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item`, `category`, `price`, `quantity`, `storage_unit`) VALUES
(1, 'T shirt for kids, size 124', 'clothes', '6.50', 21, 2),
(2, 'sardina can 125 gr, Delamaris', 'food', '1.25', 45, 1),
(3, 'basket ball Spalding leather', 'sports equipment', '45.75', 10, 3),
(4, 'hiking shoes Alpina, size 44', 'sport shoes', '192.00', 10, 3),
(6, 'hiking shoes Alpina, size 42', 'sport shoes', '192.00', 10, 3),
(8, 'hiking shoes Alpina, size 43', 'sport shoes', '192.00', 10, 3),
(10, 'hiking shoes Alpina, size 45', 'sport shoes', '192.00', 8, 3),
(12, 'hiking shoes Alpina, size 41', 'sport shoes', '192.00', 5, 3),
(17, 'hiking shoes Dolomite, size 44', 'sport shoes', '234.41', 10, 3),
(18, 'hiking shoes Dolomite, size 43', 'sport shoes', '234.41', 10, 3),
(19, 'Jeans pants Levi\'s', 'clothes', '123.00', 21, 2),
(20, 'Tuna can 160g RioMare', 'food', '2.65', 90, 1),
(21, 'noodles italian 400g', 'food', '0.80', 500, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
