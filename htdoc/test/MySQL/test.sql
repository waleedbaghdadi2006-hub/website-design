-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2026 at 06:49 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `user_id`, `product_id`, `order_date`) VALUES
(4, 4, 1, '2026-04-22 08:03:09'),
(5, 4, 2, '2026-04-22 08:20:27'),
(6, 4, 1, '2026-04-22 08:22:07'),
(7, 4, 1, '2026-04-22 09:17:46'),
(8, 4, 1, '2026-04-22 09:19:11'),
(9, 4, 3, '2026-04-22 09:24:12'),
(10, 4, 3, '2026-04-22 09:45:28'),
(11, 4, 3, '2026-04-22 09:45:38'),
(12, 4, 3, '2026-04-22 09:46:05'),
(13, 4, 3, '2026-04-22 09:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `flavors` int(11) DEFAULT 0,
  `quantity` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT 0.0,
  `reviews` int(11) DEFAULT 0,
  `bestseller` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `flavors`, `quantity`, `category`, `rating`, `reviews`, `bestseller`, `created_at`) VALUES
(1, 'Whey Protein', 'High-quality protein for muscle growth', 29.99, 'Athletestack_Women_2024x2024_shop-wVywdtg2_8962e88f-2d92-4ec6-9b8b-d6d62113ee80.jpg', 5, 18, 'protein', 4.5, 120, 1, '2026-04-16 13:49:52'),
(2, 'Creatine Monohydrate', 'Boost strength and performance', 19.99, 'Athletestack_Men_2024x2024_shop_1-z-ZiEbBu_bb4e3c6a-d2e4-4f8b-a9bc-cee333cce047.jpg', 1, 2, 'creatine', 4.7, 89, 1, '2026-04-16 13:49:52'),
(3, 'Multivitamin', 'Daily essential vitamins', 14.99, 'Ashwa__120Caps_2024x2024_shop-ZiGfqmvZ_617765a7-6ae0-4a08-8e92-cc92773b2760.jpg', 3, 7, 'vitamin', 4.3, 45, 0, '2026-04-16 13:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `role`, `created_at`) VALUES
(1, '', 'waleed.baghdadi@gmail.com', '1', NULL, 'admin', '2026-04-16 12:42:51'),
(2, '', 'shahdsa6@gamil.com', '123123', NULL, 'admin', '2026-04-16 12:45:42'),
(3, '', 'user@gmail.com', '123', NULL, 'user', '2026-04-16 12:52:34'),
(4, 'hadi', 'hadi@gmail.com', '123123', '09307755886', 'user', '2026-04-16 15:33:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
