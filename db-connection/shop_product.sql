-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 10:22 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `typeID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `type`, `title`, `description`, `image`, `size`, `price`, `shipping`, `quantity`) VALUES
(6, 'Salat', 'Gemischter salat', '\'\'/>', 'images2glasses.jpg', '', '8', '0', 0),
(7, 'Salat', 'Griechisch Salat  mit Ei', '\'\'\'/>\'/>', 'images2glasses.jpg', 'big', '8', '0', 0),
(8, 'Salat', 'Tomatensalat mit   \r\nZwiebeln,Knoblauch \r\nund Peperoncini ', '--------------------', '', 'big', '5', '0', 0),
(9, 'Pizza', 'Wunsch Pizza', '--------------------', '', '50cm', '30', '0', 0),
(10, 'Pasta', 'Ragu alla bolognese', '(Hackfleisch vom Rind)', '', 'big', '17', '0', 0),
(11, 'Pasta', 'Spaghetti al pomodoro', '', '', 'big', '17', '0', 0),
(12, 'Pasta', 'Lasagne', '(hackfleisch vom Rind)', '', 'big', '17', '0', 0),
(13, 'Desert', 'Tiramisu', '', '', 'for 1', '5', '0', 0),
(14, 'Desert', 'Panna cotta', '', '', 'for 1', '5', '0', 0),
(15, 'Desert', 'Mascarpone Dessert', '', '', 'for 1', '5', '0', 0),
(16, 'soft drink', 'Coca Cola', '', '', '0.3', '2', '0', 0),
(17, 'soft drink', 'Coca Cola Light', '', '', '0.3', '2', '0', 0),
(18, 'soft drink', 'Fanta', '', '', '0.3', '2', '0', 0),
(19, 'soft drink', 'Sprite', '', '', '0.3', '2', '0', 0),
(20, 'soft drink', 'Mineralwasser\"San Pellegrino\"', '', '', '0.5', '0', '0', 0),
(21, 'Pizza small', 'Pizza Prosciutto', 'Tomatensauce, Mozzarella, Schinken, Oregano', '', '30cm', '15', '0', 0),
(22, 'Pizza', 'Pizza Prosciutto', '', '', '40cm', '20', '0', 0),
(23, 'Pizza small', 'Pizza Cacciatore', 'Tomatensauce, Mozzarella, Schinken, Pilze, Oregano', '', '30cm', '18', '0', 0),
(24, 'Pizza', 'Pizza Cacciatore', '', '', '40cm', '25', '0', 0),
(26, 'Pizza small', 'Pizza Hawaii', 'Tomatensauce, Mozzarella, Schinken, Ananas, Oregano', '', '30cm', '15', '0', 0),
(27, 'Pizza', 'Pizza Hawaii', '', '', '40cm', '20', '0', 0),
(28, 'Pizza small', 'Pizza Funghi', 'Tomatensauce, Mozzarella, Pilze, Oregano', '', '30cm', '17', '0', 0),
(29, 'Pizza', 'Pizza Funghi', '', '', '40cm', '22', '0', 0),
(35, '', '', '', '', '', '0', '0', 0),
(37, '', '', '', '', '', '0', '0', 0),
(38, '%', 'gfds', 'sgs', 'images2glasses.jpg', 'sg', '0', '0', 0),
(39, '%', 'f', 'f', 'images2glasses.jpg', 't', '0', '0', 0),
(43, 'Salat', 'Griechisch Salat  mit Ei', '\'\'\'/>\'/>', 'images2glasses.jpg', 'big', '8', '0', 0),
(44, 'Salat', 'Griechisch Salat  mit Ei', '\'\'\'/>\'/>', 'images2glasses.jpg', 'big', '8', '0', 0),
(46, '%', '', '', 'images2glasses.jpg', '', '0', '0', 0),
(47, 'Pizza', 'Girl', 'hahaha', 'imagesgirl.jpg', '3', '1', '0', 0),
(48, 'Pizza small', 'gf', '\'gf\'/>', 'images2glasses.jpg', 'fg', '8', '0', 0),
(49, '%', '', '', 'images2glasses.jpg', '', '0', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
