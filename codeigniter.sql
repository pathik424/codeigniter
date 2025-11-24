-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 03:56 PM
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
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `pat_dog_food_product`
--

CREATE TABLE `pat_dog_food_product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_is_active` tinyint(4) NOT NULL DEFAULT 1,
  `product_stock` int(11) NOT NULL DEFAULT 0,
  `product_slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pat_dog_food_product`
--

INSERT INTO `pat_dog_food_product` (`id`, `user_id`, `product_name`, `product_price`, `product_image`, `product_description`, `product_is_active`, `product_stock`, `product_slug`, `created_at`, `updated_at`) VALUES
(1, 11, 'Alika Brennan', 231.00, '1744608914_b5a10cba1dcca7dfc7ff.png', 'Omnis reprehenderit ', 1, 15, 'alika-brennan', '2025-04-14 05:35:14', '2025-04-14 13:43:18'),
(3, 11, 'Food 1', 100.00, '1744637754_508eed7eb92994b3118b.png', 'Food 1', 1, 1, 'food-1', '2025-04-14 13:35:54', '2025-04-14 13:35:54'),
(4, 11, 'Food 2', 200.00, '1744637773_8d57ad200f0d81e7df7b.png', 'Food 2', 1, 2, 'food-2', '2025-04-14 13:36:13', '2025-04-14 13:36:13'),
(5, 11, 'Food 3', 300.00, '1744637796_16df84542481b1a2131b.png', 'Food 3', 1, 3, 'food-3', '2025-04-14 13:36:36', '2025-04-14 13:36:36'),
(6, 11, 'Food 4', 400.00, '1744637820_92c172a661495eb81778.png', 'Food 4', 1, 4, 'food-4', '2025-04-14 13:37:00', '2025-04-14 13:37:00'),
(7, 11, 'Food 5', 500.00, '1744637848_27c1a9cc7e19d051c97d.jpg', 'Food 5', 1, 5, 'food-5', '2025-04-14 13:37:28', '2025-04-14 13:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `pat_migrations`
--

CREATE TABLE `pat_migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pat_migrations`
--

INSERT INTO `pat_migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-04-05-074854', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1743840145, 1),
(2, '2025-04-13-095633', 'App\\Database\\Migrations\\PatProducts', 'default', 'App', 1744538473, 2),
(3, '2025-04-14-051700', 'App\\Database\\Migrations\\DropPatPatProductsTable', 'default', 'App', 1744607845, 3),
(4, '2025-04-14-052055', 'App\\Database\\Migrations\\CreateDogFoodProductTable', 'default', 'App', 1744608179, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pat_users`
--

CREATE TABLE `pat_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pat_users`
--

INSERT INTO `pat_users` (`id`, `name`, `username`, `email`, `password`, `user_role`, `created_at`, `updated_at`) VALUES
(2, 'Naomi Cote', 'fadecybe', 'hasifere@mailinator.com', '$2y$10$fVCicMMSPEDdjl7Wkljb9e3RMF046Zb0MJFxfueHMNlYY077rUoSS', 0, '2025-04-05 08:42:52', '2025-04-05 08:42:52'),
(3, 'BCD', 'nirav2323', 'admin123@gmail.com', '$2y$10$UR8w30rSGM9hGlsgHpMTTO0teTM5kja63O.fGwS3GzBz.fiFdG.ea', 0, '2025-04-05 08:51:06', '2025-04-05 08:51:06'),
(4, 'Nicole Randallsss', 'nikaj', 'dev_test42@yopmail.com', '$2y$10$TTIMFSnwa6aJUcNCq12VOOhlNhVYZrzLnVDRg1Y0kplgkq3QnTA8i', 0, '2025-04-05 08:53:42', '2025-04-05 08:53:42'),
(5, 'ABC', 'nikaj123', 'texo@mailinator.com', '$2y$10$BUFIfui5FEByKkgUl2pWku1SrfpfMDNfh1k3h54xdO.FUma33EIyy', 0, '2025-04-05 09:43:22', '2025-04-05 09:43:22'),
(6, 'bdebhbhb', 'cnjnjcnj', 'cnncjn@gmail.com', '$2y$10$FjEV1kbsC.8YJhhUQH.FYuKNotQU/a1RYBU6JUiil76XjMPiABrCu', 0, '2025-04-05 10:23:39', '2025-04-05 10:23:39'),
(7, 'Tarik Grant', 'xowaqo', 'mopo@mailinator.com', '$2y$10$23HtmTdM6P5Zb5W0HgxrBuVZYkam56uoBLZE40Vxwzj4CUBSzPSNe', 0, '2025-04-06 05:48:51', '2025-04-06 05:48:51'),
(8, 'Nirav Patel', 'nirav1342', 'niravp@gmail.com', '7000cabe063ef754dd161146d5acc3a1', 0, '2025-04-06 07:31:47', '2025-04-06 07:31:47'),
(9, 'yash', 'yash159', 'yp159@gmail.com', '$2y$10$DmIopFyplwfgfQDoDVAEtOBMjF5KqKVdqiivjYJTT3m1K8OryNPKW', 0, '2025-04-06 07:34:58', '2025-04-06 07:34:58'),
(10, 'Hema Patel', 'hema424', 'hema424@gmail.com', '$2y$10$/vx..8NRYU7sTT4aqv6EtOkB.6fHFkquV4tGdOrC46F9uQyTOmcya', 0, '2025-04-06 07:46:58', '2025-04-06 07:46:58'),
(11, 'Pathik Patel', 'pathik424', 'p4pathik424@gmail.com', '$2y$10$3Fekz26yfSzesHiMucs9.OToJaE5ssa9M2Efaqlq5fcJU9z7Tyeei', 1, '2025-04-13 08:06:55', '2025-04-13 08:06:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pat_dog_food_product`
--
ALTER TABLE `pat_dog_food_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pat_migrations`
--
ALTER TABLE `pat_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pat_users`
--
ALTER TABLE `pat_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pat_dog_food_product`
--
ALTER TABLE `pat_dog_food_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pat_migrations`
--
ALTER TABLE `pat_migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pat_users`
--
ALTER TABLE `pat_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
