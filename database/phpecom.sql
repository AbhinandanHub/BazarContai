-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2024 at 02:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(99, 41, 61, 1, '2024-12-26 13:15:45'),
(100, 41, 53, 1, '2024-12-26 13:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(3, 'Mobiles', 'mobiles', 'All kinds of mobiles', 0, 1, '1732945922.jpg', 'Mobiles', 'All kinds of mobiles', 'All kinds of mobiles', '2024-11-22 03:22:30'),
(7, 'Headphones', 'headphones', 'footware footware', 0, 1, '1732946030.jpg', 'headphones headphones', 'headphones headphones', 'headphones headphones', '2024-11-25 02:47:13'),
(10, 'Fashion', 'fashion', 'Best Looking dress dress dress dress dress dress dress dress dress dress dress dress ', 0, 1, '1735031487.jpg', 'Best Looking dress', 'Best Looking dress', 'Best Looking dress', '2024-11-28 07:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(16, 'aharmacoder7664', 41, 'v', 'a13@gmail.com', 'v', 'v', 0, 40000, 'a', '', 1, NULL, '2024-12-22 10:30:14'),
(17, 'aharmacoder4237', 41, 'd', 'a01@gmail.com', 'd', 'd', 0, 3000, 'a', '', 0, NULL, '2024-12-22 10:35:25'),
(18, 'aharmacoder2968', 41, 'hg', 'a01@gmail.com', 'g', 'g', 0, 3000, 'COD', '', 0, NULL, '2024-12-22 10:36:32'),
(19, 'aharmacoder6593', 41, 'sdsd', 'a13@gmail.com', 'sd', 'sd', 0, 119997, 'c', '', 0, NULL, '2024-12-22 10:52:01'),
(20, 'aharmacoder8983', 41, 'sdsd', 'a13@gmail.com', 'sd', 'sd', 0, 119997, 'COD', '', 0, NULL, '2024-12-22 10:53:05'),
(21, 'aharmacoder4008', 41, 'sdsd', 'a13@gmail.com', 'sd', 'sd', 0, 119997, 'COD', '', 0, NULL, '2024-12-22 10:54:22'),
(22, 'aharmacoder7064', 41, 'm', 'a1@gmail.com', 'm', 'm', 0, 79998, 'c', '', 0, NULL, '2024-12-22 10:56:02'),
(23, 'aharmacoder831034567891', 41, 'Abhinandan', 'abhi@gmail.com', '1234567891', 'sdcd', 721427, 50996, 'COD', '', 0, NULL, '2024-12-22 15:07:34'),
(24, 'aharmacoder8573m ', 41, 'Yoyas sen', 'abhinandan@gmail.com', 'jnm ', 'jm', 0, 1999, 'COD', '', 0, NULL, '2024-12-22 15:08:47'),
(25, 'aharmacoder297534', 41, 'Gita', 'abhi123@gmail.com', '1234', 'dsdsc', 721427, 498992, 'COD', '', 0, NULL, '2024-12-22 15:13:45'),
(26, 'contaibazar85794234', 41, 'Gita', 'abhi123@gmail.com', '234234', '3wer', 721427, 200000, 'COD', '', 0, NULL, '2024-12-22 15:15:10'),
(27, 'contaibazar222554789630', 43, 'Yoyas sen', 'abhi@gmail.com', '1254789630', 'contai', 721427, 200000, 'COD', '', 0, NULL, '2024-12-24 09:50:33'),
(28, 'contaibazar1313', 41, 'kgybh', 'abhi123@gmail.com', '12', 'gy', 0, 23896, 'Paid by Paypal', '', 0, NULL, '2024-12-26 08:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(5, 4, 54, 1, 10000, '2024-12-22 07:42:03'),
(6, 4, 60, 5, 1999, '2024-12-22 07:42:03'),
(7, 5, 54, 1, 10000, '2024-12-22 07:46:06'),
(8, 5, 60, 5, 1999, '2024-12-22 07:46:06'),
(9, 6, 61, 1, 40000, '2024-12-22 08:26:26'),
(10, 7, 62, 1, 3000, '2024-12-22 09:13:30'),
(11, 8, 56, 1, 899, '2024-12-22 09:16:21'),
(12, 9, 58, 1, 799, '2024-12-22 09:18:31'),
(13, 10, 53, 1, 23000, '2024-12-22 09:27:02'),
(14, 11, 62, 1, 3000, '2024-12-22 09:50:04'),
(15, 13, 62, 1, 3000, '2024-12-22 10:18:01'),
(16, 14, 57, 1, 6999, '2024-12-22 10:25:46'),
(17, 15, 61, 1, 40000, '2024-12-22 10:28:47'),
(18, 16, 61, 1, 40000, '2024-12-22 10:30:14'),
(19, 17, 62, 1, 3000, '2024-12-22 10:35:25'),
(20, 18, 62, 1, 3000, '2024-12-22 10:36:32'),
(21, 19, 6, 3, 39999, '2024-12-22 10:52:01'),
(22, 20, 6, 3, 39999, '2024-12-22 10:53:05'),
(23, 21, 6, 3, 39999, '2024-12-22 10:54:22'),
(24, 22, 6, 2, 39999, '2024-12-22 10:56:02'),
(25, 23, 60, 4, 1999, '2024-12-22 15:07:34'),
(26, 23, 61, 1, 40000, '2024-12-22 15:07:34'),
(27, 23, 62, 1, 3000, '2024-12-22 15:07:34'),
(28, 24, 60, 1, 1999, '2024-12-22 15:08:47'),
(29, 25, 52, 8, 23999, '2024-12-22 15:13:45'),
(30, 25, 53, 9, 23000, '2024-12-22 15:13:45'),
(31, 25, 54, 10, 10000, '2024-12-22 15:13:45'),
(32, 26, 61, 5, 40000, '2024-12-22 15:15:10'),
(33, 27, 61, 5, 40000, '2024-12-24 09:50:33'),
(34, 28, 59, 1, 8999, '2024-12-26 08:21:08'),
(35, 28, 56, 1, 899, '2024-12-26 08:21:08'),
(36, 28, 57, 2, 6999, '2024-12-26 08:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(6, 3, 'iphone 16', 'iphone-16', '   Best Phone Ever iphone 16   ', 'Which flagship stands tall in 2024? Dive into this ultimate comparison of design, display, performance, cameras, battery life, and innovative features to decide your next upgrade. Perfect for Apple loyalists, Samsung fans, and tech enthusiasts alike!', 50000, 39999, '1732946833.jpg', 5, 0, 1, 'Best Phone Ever iphone 16  ', '   Best Phone Ever iphone 16    ', '   Best Phone Ever iphone 16    ', '2024-11-27 07:00:03'),
(52, 3, 'Samsung M11', 'samsung-m11', 'Best Seller samsung-m11 samsung-m11', 'The Samsung Galaxy M11 is a budget-friendly smartphone designed for everyday convenience and entertainment. It features a 6.4-inch HD+ Infinity-O display, providing an immersive viewing experience for streaming, gaming, or browsing. Powered by a Qualcomm Snapdragon 450 processor and paired with up to 4GB of RAM, the M11 ensures smooth performance for multitasking and app usage.', 25000, 23999, '1732947034.jpg', -7, 0, 1, 'Best Seller samsung-m11 samsung-m11', 'Best Seller samsung-m11 samsung-m11', 'Best Seller samsung-m11 samsung-m11', '2024-11-30 06:10:34'),
(53, 3, 'Vivo V20 Pro', 'vivi-v-20-pro', 'vivi-v-20-pro', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 26000, 23000, '1732947485.jpg', 1, 0, 1, 'vivi-v-20-pro', 'vivi-v-20-pro', 'vivi-v-20-pro', '2024-11-30 06:18:05'),
(54, 3, 'samsung', 'samsung', 'samsung', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 20000, 10000, '1732947613.jpg', -8, 0, 1, 'samsung', 'samsung', 'samsung', '2024-11-30 06:20:13'),
(55, 7, 'Boult', 'boult', 'boult', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 2030, 2000, '1732947730.jpg', 10, 0, 1, 'boult', 'boult', 'boult', '2024-11-30 06:22:10'),
(56, 7, 'Boult Hadephone', 'boult-hadephone', 'boult-hadephone', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 1000, 899, '1732947813.jpg', 1, 0, 1, 'boult-hadephone', 'boult-hadephone', 'boult-hadephone', '2024-11-30 06:23:33'),
(57, 7, 'Samsung Hadephone', 'samsung-headphone', 'samsung-headphone', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 8999, 6999, '1732947926.jpg', 18, 0, 1, 'samsung-headphone', 'samsung-headphone', 'samsung-headphone', '2024-11-30 06:25:26'),
(58, 7, 'Realmi Headphone', 'realmi-headphones', 'realmi-headphones', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 900, 799, '1732948016.jpg', 3, 0, 1, 'realmi-headphones', 'realmi-headphones', 'realmi-headphones', '2024-11-30 06:26:56'),
(59, 10, 'Gaming Mouse', 'gaming-mouse', 'gaming-mouse', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 10000, 8999, '1732948106.jpg', 29, 0, 1, 'gaming-mouse', 'gaming-mouse', 'gaming-mouse', '2024-11-30 06:28:26'),
(60, 10, 'Think pad Gaming', 'think-pad gaming', 'think-pad gaming', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 2000, 1999, '1732948181.jpg', 15, 0, 1, 'think-pad gaming', 'think-pad gaming', 'think-pad gaming', '2024-11-30 06:29:41'),
(61, 10, 'Laptop Gaming', 'laptop-gaming', 'laptop-gaming', 'The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.', 50000, 40000, '1732948287.jpg', -9, 0, 1, 'laptop-gaming', 'laptop-gaming', 'laptop-gaming', '2024-11-30 06:31:27'),
(62, 10, 'kids Gaming', 'kids-gaming', '  kids-gaming  ', '  The Vivo V20 Pro combines style and power in one elegant package. Featuring a 6.44-inch AMOLED display with vibrant Full HD+ resolution, it delivers stunning visuals for everything from streaming to gaming. Powered by the Qualcomm Snapdragon 765G processor, this phone ensures smooth multitasking and reliable 5G connectivity.  ', 4000, 3000, '1732948363.jpg', 2, 0, 1, 'kids-gaming', '  kids-gaming  ', '  kids-gaming  ', '2024-11-30 06:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `role_as`, `created_at`) VALUES
(40, 'SIR', '1254789630', 'sir@gmail.com', '102', 0, '2024-11-30 09:10:23'),
(41, 'MATT', '1254789630', 'matt@gmail.com', '102', 0, '2024-11-30 09:24:12'),
(42, 'Yoyas sen', '1254789630', 'abhi123@gmail.com', '102', 0, '2024-12-20 01:56:06'),
(43, 'Abhinandan Jana', '9339024568', 'abhi@gmail.com', '102', 1, '2024-12-24 09:44:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
