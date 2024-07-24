-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2021 at 06:57 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `custid` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ccno` varchar(12) NOT NULL,
  `address` longtext NOT NULL,
  `Name` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`custid`, `password`, `ccno`, `address`, `Name`, `phno`) VALUES
('drex1999', 'hema', '123456789123', 'sddeuywetbrucwbrybcuibuywbcieiybriucawyrynywiyiouytbviuobytoiyivw8', 'Dhanush', '9113551125'),
('hema2k', 'hema', '123456789123', 'dhanush place', 'Hema', '9980524747'),
('suma1', 'dhanush', '123456789123', 'dfhwufhihi', 'Suma', '9882562356'),
('Venkat', 'nanji', '458912364789', '#009, slv golden nest, jnanabharathi 2nd stage', 'Venkataramu D S', '6360343543');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(6) NOT NULL AUTO_INCREMENT,
  `details` longtext NOT NULL,
  `amount` int(6) NOT NULL,
  `time` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'no',
  `dtime` datetime DEFAULT NULL,
  `custid` varchar(200) NOT NULL,
  PRIMARY KEY (`orderid`),
  KEY `custid` (`custid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `details`, `amount`, `time`, `status`, `dtime`, `custid`) VALUES
(1, 'Prodcuts Bought: <br>Papaya:3<br>', 113, '2021-01-15 17:08:29', 'yes', '2021-01-15 17:48:35', 'drex1999'),
(2, 'Prodcuts Bought: <br>Musk Melon:5<br>', 313, '2021-01-15 17:51:21', 'yes', '2021-01-15 17:51:26', 'drex1999'),
(3, 'Prodcuts Bought: <br>Minute Maid :5<br>', 181, '2021-01-15 17:56:15', 'yes', '2021-01-15 18:01:42', 'drex1999'),
(4, 'Prodcuts Bought: <br>Strawberry Milkshake:3<br>', 154, '2021-01-15 18:05:55', 'yes', '2021-01-15 18:07:31', 'hema2k'),
(5, 'Prodcuts Bought: <br>Mangosteen:3<br>Bell Pepper Red:5<br>', 1777, '2021-01-15 18:07:10', 'yes', '2021-01-16 19:01:57', 'suma1'),
(6, 'Prodcuts Bought: <br>Horlicks:3<br>Onion:5<br>Strawberry Milkshake:2<br>Tomato:4<br>', 1268, '2021-01-15 18:10:46', 'yes', '2021-01-16 19:02:03', 'hema2k'),
(7, 'Prodcuts Bought: <br>Mangosteen:4<br>Kiwi:9<br>3Roses Tea:2<br>', 3320, '2021-01-15 18:11:34', 'no', NULL, 'drex1999'),
(8, 'Prodcuts Bought: <br>Strawberry:3<br>Curd:1<br>', 339, '2021-01-16 19:01:31', 'no', NULL, 'drex1999');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `stockid` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `offer` int(2) NOT NULL,
  `price` int(4) NOT NULL,
  `nos` int(4) NOT NULL,
  `pop` int(1) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`stockid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockid`, `name`, `type`, `offer`, `price`, `nos`, `pop`, `image`) VALUES
(1, 'Tomato', 'vegetable', 2, 60, 104, 1, 'tomato.jpg'),
(2, 'Bell Pepper Red', 'vegetable', 10, 110, 192, 0, 'redcap.jpg'),
(3, 'Onion', 'vegetable', 5, 85, 243, 1, 'onion.jpg'),
(4, 'Cauliflower', 'vegetable', 0, 30, 200, 0, 'cauli.jpg'),
(5, 'Potato', 'vegetable', 5, 25, 160, 0, 'potato.jpg'),
(6, 'Milk', 'dairy', 10, 37, 176, 0, 'milk.jpeg'),
(7, 'Tetley Green Tea 100g', 'beverage', 10, 240, 99, 1, 'tetley (1).jpg'),
(8, 'Taj Tea Powder', 'beverage', 5, 125, 120, 0, 'taj (1).jpg'),
(9, 'Strawberry', 'fruit', 0, 80, 206, 1, 'strawberry.jpg'),
(10, 'Papaya', 'fruit', 30, 20, 597, 0, 'papaya.jpg'),
(11, 'Paneer', 'dairy', 20, 100, 240, 0, 'paneer.jpg'),
(12, 'Nestle Coffee 100g', 'beverage', 10, 350, 89, 1, 'nes.jpg'),
(13, 'Musk Melon', 'fruit', 50, 50, 95, 0, 'musk.jpg'),
(14, 'Minute Maid ', 'beverage', 0, 25, 495, 0, 'minmade.jpg'),
(15, 'Strawberry Milkshake', 'dairy', 10, 33, 195, 0, 'milkshake.jpg'),
(16, 'Butterscotch Milkshake', 'dairy', 5, 42, 69, 0, 'milkshake1.jpg'),
(17, 'Milk Powder', 'dairy', 0, 55, 77, 0, 'milkpowder.jpg'),
(18, 'Mangosteen', 'fruit', 20, 365, 51, 1, 'mangosteen.jpg'),
(19, 'Kiwi', 'fruit', 10, 150, 56, 1, 'kiwi.jpg'),
(20, 'Horlicks', 'beverage', 5, 143, 12, 0, 'horlicks.jpg'),
(21, 'Grapes', 'fruit', 0, 26, 200, 0, 'grapes.jpg'),
(23, 'Curd', 'dairy', 10, 35, 199, 0, 'curd.jpg'),
(24, 'Butter', 'dairy', 15, 62, 35, 1, 'butter.jpeg'),
(25, 'Cheese', 'dairy', 20, 82, 170, 0, 'cheese.jpg'),
(26, 'Apple Juice', 'beverage', 5, 179, 19, 0, 'applejuice.jpg'),
(27, 'Almond Milk', 'dairy', 10, 300, 25, 0, 'almondmilk.jpg'),
(28, '3Roses Tea', 'beverage', 10, 152, 199, 1, '3roses.jpg'),
(29, 'Salmon', 'meat', 5, 650, 500, 1, 'salmon.jpg'),
(30, 'Chicken Leg', 'meat', 10, 160, 250, 1, 'leg.jpg'),
(31, 'Chicken Breast', 'meat', 0, 110, 260, 0, 'chicken_breast.jpg'),
(32, 'Beef', 'meat', 20, 749, 260, 0, 'beef.jpg'),
(33, 'Lamb', 'meat', 5, 500, 300, 0, 'lambchops.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_!` FOREIGN KEY (`custid`) REFERENCES `accounts` (`custid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
