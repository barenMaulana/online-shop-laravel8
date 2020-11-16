-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2020 at 11:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportline`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_11_15_003708_create_products_table', 2),
(6, '2020_11_15_021050_add_roles_to_users_table', 2),
(7, '2020_11_15_022644_create_products_table', 3),
(8, '2020_11_15_230824_create_transactions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_description`, `product_qty`, `product_image`, `created_at`, `updated_at`) VALUES
(13, 'sepatu 1', 200000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 12, 'product/zZY6PoxNi44BlbLtLwe1ki9aM4mKYRvOvgf0Q5RI.jpeg', '2020-11-16 15:18:15', '2020-11-16 15:18:15'),
(14, 'sepatu 2', 50000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 2, 'product/jd1BqSzUj8ZWW66NfVzx3vjZrIVepXseTZIFY02P.jpeg', '2020-11-16 15:18:37', '2020-11-16 15:18:37'),
(15, 'sepatu 3', 4100000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 4, 'product/BJl3iJkou37CCXy1PEWXVcE2j1XiKY1rF0bN086C.jpeg', '2020-11-16 15:18:59', '2020-11-16 15:18:59'),
(16, 'sepatu 4', 1000000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 4, 'product/K07QXwHTcTysThOeYjEJcqjXsNbffS9UX8l0G9SE.jpeg', '2020-11-16 15:19:26', '2020-11-16 15:19:26'),
(17, 'sepatu 5', 140000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 2, 'product/CfC0C3fNTvo3sjIKdwOSOiG3DMZAfbpV88IBYfEs.jpeg', '2020-11-16 15:19:52', '2020-11-16 15:19:52'),
(18, 'sepatu 6', 600000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 2, 'product/6lAYroxumee1t9UdcRikr33OLfH2jrrE4lkDHHZS.jpeg', '2020-11-16 15:20:22', '2020-11-16 15:20:22'),
(19, 'sepatu 7', 900000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 4, 'product/aRYi8qa7osKga7sp6F4ramu06HQx4dhtmeEZ5A2z.jpeg', '2020-11-16 15:20:49', '2020-11-16 15:20:49'),
(20, 'ssepatu 8', 300000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 3, 'product/tORkFeyOMLY0BY4M7ZLIpSRT6vZoAU7zwLJ9yMmG.jpeg', '2020-11-16 15:21:10', '2020-11-16 15:21:10'),
(21, 'sepatu 9', 5000000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 5, 'product/0yTM9LMBJQvdsCRoKM37oqJrWygNnSqdEepMtuMe.jpeg', '2020-11-16 15:21:30', '2020-11-16 15:21:30'),
(22, 'sepatu 10', 41000000, 'A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.', 2, 'product/3ppqWYXHwJNenWiYZ52vaUqZVjXKyZlD67iBdmNK.jpeg', '2020-11-16 15:21:50', '2020-11-16 15:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `product_name`, `product_price`, `created_at`, `updated_at`) VALUES
(2, 4, 'product 3', '50000', NULL, NULL),
(6, 4, 'dummy', '123213', NULL, NULL),
(7, 3, 'sepatu 7', '900000', NULL, NULL),
(8, 3, 'ssepatu 8', '300000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(3, 'didi mardiansyah', 'didi@gmail.com', NULL, '$2y$10$h00xtkRkuP6nRdodUXVczu4ES5fW9B5IV8XALsPflFyXjEiWeVDRS', NULL, NULL, NULL, '2020-11-15 15:52:49', '2020-11-15 15:52:49', 'USER'),
(4, 'kudil', 'kudil@gmail.com', NULL, '$2y$10$ji5QFqH6FV6KNOpGzZJ8QOZRPBEpoZ7m6i6yYuJ.MVYOBvseYR73C', NULL, NULL, NULL, '2020-11-15 16:41:19', '2020-11-15 16:41:19', 'USER'),
(5, 'admin', 'admin@gmail.com', NULL, '$2y$10$qcrz6xvs.UxGS15yKwUe3eBYWCgGNmLz/.3u0jI0dX85J8rwminTa', NULL, NULL, NULL, '2020-11-16 15:24:37', '2020-11-16 15:24:37', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
