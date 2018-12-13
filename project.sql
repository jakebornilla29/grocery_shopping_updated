-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 06:47 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `po_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `cart_total` varchar(100) NOT NULL,
  `bill_fname` varchar(100) NOT NULL,
  `bill_lname` varchar(100) NOT NULL,
  `bill_add` varchar(100) NOT NULL,
  `bill_city` varchar(100) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`po_id`, `u_id`, `cart_total`, `bill_fname`, `bill_lname`, `bill_add`, `bill_city`, `bill_email`, `bill_phone`, `status`, `date`) VALUES
(5, 3, '45', 'Jake', 'Bornilla', '123 abcd st ', 'Pasay City', 'jakebornilla29@gmail.com', '09159514787', 'delivered', '2018-12-12 13:52:31'),
(6, 3, '45', 'jake', 'bornilla', '123 abcd st ', 'Pasay City', 'jgbornilla@ymail.com', '09159514787', '', '2018-12-12 15:57:06'),
(7, 3, '20', 'jake', 'bornilla', '1123 wasd ', 'Manila ', 'jgbornilla@ymail.com', '09111111111', 'delivered', '2018-12-12 16:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_des` varchar(1000) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `file_ext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `product_name`, `product_category`, `product_price`, `product_des`, `file_name`, `file_path`, `file_ext`) VALUES
(3, 'Pumpkin', 'Vegetables', '20', 'This is a fresh pumpkin', '0972-squash-cornfield-pumpkin1.jpg', 'C:/xampp/htdocs/grocerie/uploads/', '.jpg'),
(4, 'Apple ', 'Fruits ', '10', 'This is a fresh apple.', 'apple.jpg', 'C:/xampp/htdocs/grocerie/uploads/', '.jpg'),
(5, 'Mango', 'Fruits ', '12', 'This is a fresh mango', 'mango.png', 'C:/xampp/htdocs/grocerie/uploads/', '.png'),
(6, 'Strawberry', 'Fruits ', '13', 'This is a fresh strawberry', 'strawberry.jpg', 'C:/xampp/htdocs/grocerie/uploads/', '.jpg'),
(7, 'Lettuce', 'Vegetables', '17', 'This is a fresh lettuce', 'lettuce.jpg', 'C:/xampp/htdocs/grocerie/uploads/', '.jpg'),
(8, 'Broccoli', 'Vegetables', '21', 'This is a fresh broccoli', 'broccoli.jpg', 'C:/xampp/htdocs/grocerie/uploads/', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `ph_id` int(11) NOT NULL,
  `oh` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_qty` varchar(100) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`ph_id`, `oh`, `p_name`, `p_price`, `p_qty`, `u_id`, `date`) VALUES
(1, 1, 'naysu', '12000', '1', 3, '2018-11-05 07:23:48'),
(2, 2, 'wew', '15000', '2', 4, '2018-11-06 05:13:10'),
(3, 3, 'wew', '12000', '4', 3, '2018-11-08 07:54:33'),
(4, 4, 'Apple', '25', '1', 3, '2018-11-28 11:21:12'),
(5, 5, 'Apple', '25', '1', 3, '2018-11-28 11:32:13'),
(6, 6, 'Apple', '25', '1', 3, '2018-12-12 15:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, '4454fa8fa7b66da907b8c1250d136a', 4, '2012-02-18'),
(2, 'f17b3eeabb033d6cf92f5fca315281', 4, '2012-02-18'),
(3, '388e650738d3ae41e733ba08277799', 4, '2012-02-18'),
(4, '5ef76f62b41c819593ec587fc5c078', 4, '2012-02-18'),
(5, '9e75fe0be96de6463406cbc000ca3e', 4, '2012-02-18'),
(6, 'ff9dd22b37cffdeeffeb7f3e2a705a', 4, '2012-02-18'),
(7, '197354ba4fbb6d61d0973a9dd88353', 4, '2012-02-18'),
(8, '6958a33e5088a6353e9d4bb8055eb0', 4, '2012-02-18'),
(9, 'ec26df71c18bd542f262c72d99e287', 4, '2012-02-18'),
(10, '8c5d4f0ec4a3179b0e49b8e5b31a4e', 4, '2012-03-18'),
(11, '8bc8b9ba5683c13d390328ca0abf85', 4, '2012-03-18'),
(12, 'c2e6570af33657b00f2ccc8a57b25c', 4, '2012-03-18'),
(13, 'b626d3d888401488313e501fba5148', 4, '2012-11-18'),
(14, 'ff27ec5f83f56a8775b455b55a99c7', 3, '2012-11-18'),
(15, '06723bd23f3d6c343931d9f2844705', 4, '2012-11-18'),
(16, '8d4e82798c57af7316c86acade89bb', 4, '2012-11-18'),
(17, '8634c1d82ee0479df026a46ac46d21', 4, '2012-11-18'),
(18, '933a0cbc0f987a7add5e18f9f6ac85', 3, '2012-11-18'),
(19, '6e54f3ae41f0341eca8858cd73445d', 0, '2012-11-18'),
(20, '0a877d00dacf9f601a5792b2199424', 4, '2012-11-18'),
(21, 'f5b1be08e8d9dfd5723a91191320dc', 4, '2012-11-18'),
(22, '745fb5251e63e868e76714a113afd5', 4, '2012-11-18'),
(23, '108b0d921999e6d1696a4641d15208', 4, '2012-11-18'),
(24, '6cf8329e78314acf19b0111fda0e93', 4, '2012-11-18'),
(25, 'e337504cfe6a16c8d1497dfd7a95e0', 4, '2012-12-18'),
(26, '6245e303ca9a443eec4c8cefec94c7', 4, '2012-12-18'),
(27, 'c0623ca8fc756e44546f204e01246b', 4, '2012-12-18'),
(28, '58c8915f80d61f8dd7a8898d5d5107', 3, '2012-12-18'),
(29, '06d0df1827638d717418f0d1e27949', 3, '2012-12-18'),
(30, 'f703ebc5f3d7cfc672189b31b8ee1d', 4, '2012-12-18'),
(31, '565c9b3892ec68abf7f5700407f516', 4, '2012-12-18'),
(32, '28858d6a88c5411c7687dca234b580', 4, '2012-12-18'),
(33, 'de8b9b5a3c737f55fe250c8c4a3019', 4, '2012-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fname`, `lname`, `username`, `email`, `password`, `status`) VALUES
(3, 'Jake', 'Bornilla', 'jake123', 'bornillajerichojake@ymail.com', '09159514787', ''),
(4, 'Jericho', 'Bornilla', 'jericho123', 'jgbornilla@ymail.com', '09569064136', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
