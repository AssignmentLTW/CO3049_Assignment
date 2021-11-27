-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 02:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptopgaming`
--

CREATE TABLE `laptopgaming` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptopgaming`
--

INSERT INTO `laptopgaming` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Laptop ASUS TUF Gaming', 20490000, './images/gm1.jpg'),
(2, 'Laptop Gaming Acer Nitro ', 21390000, './images/gm2.jpg'),
(3, 'Laptop Gaming MSI Bravo', 20790000, './images/gm3.jpg'),
(4, 'Laptop Gaming Acer Nitro ', 21990000, './images/gm4.jpg'),
(5, 'Laptop Gaming MSI Katana', 24390000, './images/gm5.jpg'),
(6, 'Laptop Gaming Asus ROG', 24990000, './images/gm6.jpg'),
(7, 'Laptop Gaming Lenovo', 34990000, './images/gm7.jpg'),
(8, 'Laptop Dell XPS 13 9310', 29990000, './images/gm8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptopultra`
--

CREATE TABLE `laptopultra` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptopultra`
--

INSERT INTO `laptopultra` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Laptop Acer Aspire 3 502X', 13790000, './images/ul1.jpg'),
(2, 'Laptop MSI Modern 15', 18490000, './images/ul2.jpg'),
(3, 'Laptop Asus Vivobook M5', 18790000, './images/ul3.jpg'),
(4, 'Laptop Acer Aspire 5 540F', 18290000, './images/ul4.jpg'),
(5, 'Laptop MSI Modern 14 668V', 22490000, './images/ul5.jpg'),
(6, 'Laptop HP Envy 13', 28990000, './images/ul6.jpg'),
(7, 'Laptop Dell XPS 13 9310', 29990000, './images/ul7.jpg'),
(8, 'Laptop Lenovo Legion 5', 34990000, './images/ul8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Laptop Acer Aspire 3 A315', 11990000, './images/bs1.jpg'),
(2, 'Laptop Asus Vivobook A415', 17490000, './images/bs2.jpg'),
(3, 'Laptop Gaming Acer Nitro ', 21990000, './images/bs3.jpg'),
(4, 'Laptop Gaming Asus ROG St', 24990000, './images/bs4.jpg'),
(5, 'Laptop ASUS TUF Gaming F1', 20490000, './images/bs5.jpg'),
(6, 'Laptop MSI Modern 15 A10M', 18490000, './images/bs6.jpg'),
(7, 'Laptop Gaming MSI Bravo 1', 20790000, './images/bs7.jpg'),
(8, 'Laptop Dell XPS 13 9310', 29990000, './images/bs8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptopgaming`
--
ALTER TABLE `laptopgaming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptopultra`
--
ALTER TABLE `laptopultra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptopgaming`
--
ALTER TABLE `laptopgaming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laptopultra`
--
ALTER TABLE `laptopultra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
