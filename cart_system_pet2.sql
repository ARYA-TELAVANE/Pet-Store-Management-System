-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 01:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system_pet2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(65) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `description`) VALUES
(1, 'Persian Female', 25000, '61.jpg', '5001', ''),
(2, 'Persian Male', 10000, '62.jpg', '5002', ''),
(3, 'Persian Male', 10000, '63.jpg', '4003', ''),
(4, 'Mainecoon female', 18500, '64.jpg', '5004', ''),
(5, 'Mainecoon male', 30000, '65.jpg', '5005', ''),
(6, 'Mainecoon Female', 16000, '66.jpg', '5006', ''),
(7, 'agdoll Himalayan Female', 22000, '67.jpg', '5007', ''),
(8, 'Ragdoll Himalayan Male', 22000, '68.jpg', '5008', ''),
(9, 'Ragdoll Himalayan Female', 38000, '69.jpg', '5009', ''),
(10, 'Blue Eyes Male', 15000, '70.jpg', '5010', ''),
(11, 'Blue Eyes Male', 18000, '71.jpg', '5011', ''),
(12, 'Blue Eyes Male', 15000, '72.jpg', '5012', ''),
(13, 'Blue eyes Male', 18000, '73.jpg', '5013', ''),
(14, 'Blue Eyes Male', 20000, '74.jpg', '5014', ''),
(15, 'Blue Eyes Male', 20000, '75.jpg', '5015', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
