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
-- Database: `cart_system_pet1`
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
(1, 'Beagle Male', 25000, '46.jpg', '4001', ''),
(2, 'Cocker Spaniel Male', 10000, '47.jpg', '4002', ''),
(3, 'Dachshund Male', 10000, '48.jpg', '4003', ''),
(4, 'German Shepherd Male', 185000, '49.jpg', '4004', ''),
(5, 'German Shepherd Female', 30000, '50.jpg', '4005', ''),
(6, 'Golden Retreiver Female', 16000, '51.jpg', '4006', ''),
(7, 'Golden Retriever Male', 22000, '52.jpg', '4007', ''),
(8, 'Golden Retriever Male Pair', 24000, '53.jpg', '4008', ''),
(9, 'Labrador Female', 15000, '55.jpg', '4010', ''),
(10, 'Labrador Male', 18000, '56.jpg', '4011', ''),
(11, 'Labrador Male', 15000, '57.jpg', '4012', ''),
(12, 'Pug Male', 18000, '58.jpg', '4013', ''),
(13, 'Rottweiler Male', 20000, '59.jpg', '4014', ''),
(14, 'Rottweiler Pair', 20000, '60.jpg', '4015', ''),
(15, 'Golden Retriever Pair', 38000, '54.jpg', '4009', '');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
