-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 02:26 PM
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
-- Cơ sở dữ liệu: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) UNIQUE NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `detail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`,`detail`) VALUES
(1, 'Laptop Acer Aspire 3 A315', 11990000, './images/bs1.jpg', 'details/details01.php'),
(2, 'Laptop Asus Vivobook A415', 17490000, './images/bs2.jpg','details/details03.php'),
(3, 'Laptop Gaming Acer Nitro ', 21990000, './images/bs3.jpg','details/details02.php'),
(4, 'Laptop Gaming Asus ROG ', 24990000, './images/bs4.jpg','details/details05.php'),
(5, 'Laptop ASUS TUF Gaming ', 20490000, './images/bs5.jpg','details/details04.php'),
(6, 'Laptop MSI Modern 15 A10M', 18490000, './images/bs6.jpg',''),
(7, 'Laptop Gaming MSI Bravo ', 20790000, './images/bs7.jpg',''),
(8, 'Laptop Dell XPS 13 9310', 29990000, './images/bs8.jpg',''),
(9, 'Laptop ASUS TUF Gaming', 20490000, './images/gm1.jpg',''),
(10, 'Laptop Gaming Acer Nitro ', 21390000, './images/gm2.jpg',''),
(11, 'Laptop Gaming MSI Bravo', 20790000, './images/gm3.jpg',''),
(12, 'Laptop Gaming Acer Nitro ', 21990000, './images/gm4.jpg',''),
(13, 'Laptop Gaming MSI Katana', 24390000, './images/gm5.jpg',''),
(14, 'Laptop Gaming Asus ROG', 24990000, './images/gm6.jpg',''),
(15, 'Laptop Gaming Lenovo', 34990000, './images/gm7.jpg',''),
(16, 'Laptop Dell XPS 13 9310', 29990000, './images/gm8.jpg',''),
(17, 'Laptop Acer Aspire 3 502X', 13790000, './images/ul1.jpg',''),
(18, 'Laptop MSI Modern 15', 18490000, './images/ul2.jpg',''),
(19, 'Laptop Asus Vivobook M5', 18790000, './images/ul3.jpg',''),
(20, 'Laptop Acer Aspire 5 540F', 18290000, './images/ul4.jpg',''),
(21, 'Laptop MSI Modern 14 668V', 22490000, './images/ul5.jpg',''),
(22, 'Laptop HP Envy 13', 28990000, './images/ul6.jpg',''),
(23, 'Laptop Dell XPS 13 9310', 29990000, './images/ul7.jpg',''),
(24, 'Laptop Lenovo Legion 5', 34990000, './images/ul8.jpg','');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
