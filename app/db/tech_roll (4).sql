-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 08:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_roll`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` tinyint(4) DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deleveries`
--

CREATE TABLE `deleveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `total_due` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deleveries`
--

INSERT INTO `deleveries` (`id`, `employee_id`, `customer_id`, `qty`, `total_price`, `total_due`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 5, '100', '100', 0, '2023-09-09 00:48:01', '2023-09-14 04:38:44'),
(2, 6, 4, 4, '80', '80', 0, '2023-09-09 00:48:19', '2023-09-14 04:46:59'),
(3, 3, 7, 20, '400', '400', 0, '2023-09-09 00:48:35', '2023-09-13 04:56:22'),
(4, 6, 2, 9, '180', '180', 0, '2023-09-09 02:00:36', '2023-09-14 04:38:48'),
(5, 6, 7, 15, '300', '300', 0, '2023-09-09 02:01:14', '2023-09-13 04:58:01'),
(6, 5, 4, 5, '100', '100', 0, '2023-09-09 04:55:18', '2023-09-14 04:47:01'),
(7, 6, 4, 5, '100', '100', 0, '2023-09-09 04:55:56', '2023-09-14 04:47:02'),
(8, 6, 4, 9, '180', '180', 0, '2023-09-09 04:56:48', '2023-09-10 05:30:30'),
(10, 5, 7, 4, '80', '80', 0, '2023-09-09 23:36:48', '2023-09-13 04:58:40'),
(11, 11, 10, 12, '240', '240', 1, '2023-09-14 16:33:42', '2023-09-15 05:21:50'),
(12, 11, 9, 5, '100', '100', 1, '2023-09-14 16:34:45', '2023-09-15 05:22:01'),
(13, 11, 10, 9, '180', '180', 1, '2023-09-14 16:35:05', '2023-09-15 05:22:11'),
(14, 11, 8, 17, '340', '340', 1, '2023-09-14 16:36:25', '2023-09-14 16:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `employe_type` int(11) DEFAULT NULL,
  `fixed_salary` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `phone`, `employe_type`, `fixed_salary`, `created_at`, `updated_at`) VALUES
(1, 'Shadin Shekh', 'Manik Nagar', '4234234324', NULL, NULL, '2023-09-08 07:23:20', '2023-09-08 07:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_08_27_071602_create_items_table', 1),
(5, '2023_08_27_091411_create_rolls_table', 1),
(6, '2023_08_28_043813_create_c_r_m_s_table', 1),
(7, '2023_08_28_084525_create_work_histories_table', 1),
(8, '2023_09_03_112414_create_payment_histories_table', 1),
(9, '2023_09_04_051446_create_attendances_table', 1),
(10, '2023_09_05_055537_create_employees_table', 1),
(11, '2023_09_05_095300_create_product_stocks_table', 1),
(12, '2023_09_05_112247_create_sells_table', 1),
(13, '2023_09_09_044708_create_deleveries_table', 2),
(14, '2023_09_09_064554_create_deleveries_table', 3),
(15, '2023_09_10_072448_create_return_products_table', 4),
(16, '2023_09_10_103601_create_paid_histories_table', 5),
(17, '2023_09_10_104003_create_return_product_histories_table', 6),
(18, '2023_09_10_104523_create_return_product_paid_histories_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `paid_histories`
--

CREATE TABLE `paid_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paid_amount` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paid_histories`
--

INSERT INTO `paid_histories` (`id`, `paid_amount`, `customer_id`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, '400', '4', '6', '2023-09-10 05:07:28', NULL),
(2, '50', '4', '6', '2023-09-10 05:33:30', NULL),
(3, '100', '4', '6', '2023-09-10 05:35:20', NULL),
(4, '40', '7', '6', '2023-09-10 22:40:59', NULL),
(5, '200', '4', '6', '2023-09-11 03:07:59', NULL),
(6, '70', '4', '6', '2023-09-12 07:06:57', NULL),
(7, '10', '7', '6', '2023-09-13 04:48:32', NULL),
(8, '20', '7', '6', '2023-09-13 04:48:42', NULL),
(9, '90', '7', '6', '2023-09-13 04:50:46', NULL),
(10, '40', '7', '6', '2023-09-13 05:00:24', NULL),
(11, '300', '2', '6', '2023-09-14 04:39:09', NULL),
(12, '200', '4', '6', '2023-09-14 04:47:25', NULL),
(13, '10', '4', '6', '2023-09-14 06:30:26', NULL),
(14, '280', '8', '11', '2023-09-14 16:53:13', NULL),
(15, '100', '9', '11', '2023-09-15 05:24:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return_products`
--

CREATE TABLE `return_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivered_product` varchar(255) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `return_product` varchar(255) DEFAULT NULL,
  `paid_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_products`
--

INSERT INTO `return_products` (`id`, `delivered_product`, `customer_id`, `return_product`, `paid_amount`, `created_at`, `updated_at`) VALUES
(1, '10', 2, '4', '200', NULL, NULL),
(2, '10', 2, '4', '200', NULL, NULL),
(3, '20', 4, '3', '400', NULL, NULL),
(4, NULL, 2, '5', NULL, NULL, NULL),
(5, NULL, 2, '5', NULL, NULL, NULL),
(6, NULL, 2, NULL, '50', NULL, NULL),
(7, NULL, 2, NULL, '434', NULL, NULL),
(8, NULL, 2, NULL, '34343', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `return_product_histories`
--

CREATE TABLE `return_product_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `return_product` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_product_histories`
--

INSERT INTO `return_product_histories` (`id`, `return_product`, `customer_id`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, '4', '4', '6', '2023-09-10 05:32:55', NULL),
(2, '5', '4', '6', '2023-09-10 05:33:51', NULL),
(3, '5', '4', '6', '2023-09-10 05:35:20', NULL),
(4, '10', '7', '6', '2023-09-10 22:40:59', NULL),
(5, '30', '4', '6', '2023-09-11 03:07:59', NULL),
(6, '6', '4', '6', '2023-09-12 07:06:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `return_product_paid_histories`
--

CREATE TABLE `return_product_paid_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `delivered_product` varchar(255) DEFAULT NULL,
  `return_product` varchar(255) DEFAULT NULL,
  `paid_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_product_paid_histories`
--

INSERT INTO `return_product_paid_histories` (`id`, `customer_id`, `employee_id`, `delivered_product`, `return_product`, `paid_amount`, `created_at`, `updated_at`) VALUES
(1, '4', '6', NULL, '5', '100', '2023-09-10 05:35:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

CREATE TABLE `rolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','employee','user') NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `role`, `password`, `quantity`, `amount`, `paid`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, NULL, NULL, 'admin', '$2y$10$gEOYuZp/qeW04dELtdE0LuHt3psDjrTZQaYnv/O202gmM7XneaJlu', NULL, NULL, NULL, NULL, '2023-09-08 03:48:23', '2023-09-08 03:48:23'),
(2, 'User', 'user@user.com', NULL, NULL, NULL, 'user', '$2y$10$Bwf.B/4pLs2WthWGM3orQOQKd7kvh/1wHU56S/DTpRoAljnwluBEC', '-3406', '480', '300', NULL, '2023-09-08 03:48:23', '2023-09-14 04:39:09'),
(3, 'Employee', 'employee@employee.com', NULL, NULL, NULL, 'employee', '$2y$10$ikWI/MZO4fvdUV/937202ew.3g8WpSSvo9gwNskfzn8hmSDN34yuG', NULL, NULL, NULL, NULL, '2023-09-08 03:48:23', '2023-09-08 03:48:23'),
(4, 'Parvaz', 'parvazreza00@gmail.com', NULL, NULL, NULL, 'user', '$2y$10$mwF2bRuSLpZsBd9fln4U7uuDkDqGLjO1jO4Gy0khQk32gT5sISoyi', '-36', '780', '640', NULL, '2023-09-08 04:02:55', '2023-09-14 06:30:26'),
(5, 'Shadin Shekh', 'sadin@gmial.com', '4234234324', 'Manik Nagar', NULL, 'employee', '$2y$10$TDmozKEljXkD83mjHAQWduW6PMnsOsTEcRoewxNNgsVLqbsi62HRq', NULL, NULL, NULL, NULL, '2023-09-08 08:00:13', NULL),
(6, 'Neon Roy', 'neonroy@gmail.com', '01754777888', 'badda,dhaka', NULL, 'employee', '$2y$10$MAYeEH8E/qAxktnNPeYHZOv98R615NYS7ZHziffchw4PtytOICqZ6', NULL, NULL, NULL, NULL, '2023-09-08 22:26:16', NULL),
(7, 'Nayem', 'nayem@gmail.com', '53454354', 'sdsadsads', NULL, 'user', '$2y$10$f.6.O.AG89w0NfuMo7pnguyshXrNFpg5lNuLU2PqcP8aiC0s7SZ92', '29', '780', '200', NULL, '2023-09-08 22:41:26', '2023-09-13 05:00:24'),
(8, 'a1', 'a1@gmail.com', NULL, NULL, NULL, 'user', '$2y$10$kXRdtYTHbH/ZX8/8EX2RHuENjR4840.rwf56LNWXzXClNr8bUWpVa', '17', '340', '280', NULL, '2023-09-09 16:24:14', '2023-09-14 16:53:13'),
(9, 'b1', 'b1@gmail.com', NULL, NULL, NULL, 'user', '$2y$10$9xTm4UNmdMChP.F0KWyXVOe7vx84mst5jcsPYmWKrQQcNNTEM00Sa', '0', NULL, '100', NULL, '2023-09-14 16:26:41', '2023-09-15 05:24:44'),
(10, 'c1', 'c1@gmail.com', NULL, NULL, NULL, 'user', '$2y$10$4X7aIShnx9y2MBm2I7nMweZY94vDv.Bk3quDfEkQGtdk8rf66CplK', NULL, NULL, NULL, NULL, '2023-09-14 16:27:57', '2023-09-09 16:27:57'),
(11, 'abc', 'abc@gmail.com', '845857484', 'Dhaka', NULL, 'employee', '$2y$10$BwhToRcW73lhISlm0hBQkeTo6/NKl59UuuwMPl4j5DRmPmbN0/nee', NULL, NULL, NULL, NULL, '2023-09-14 16:31:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleveries`
--
ALTER TABLE `deleveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `paid_histories`
--
ALTER TABLE `paid_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `return_products`
--
ALTER TABLE `return_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_product_histories`
--
ALTER TABLE `return_product_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_product_paid_histories`
--
ALTER TABLE `return_product_paid_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rolls`
--
ALTER TABLE `rolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deleveries`
--
ALTER TABLE `deleveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `paid_histories`
--
ALTER TABLE `paid_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `return_products`
--
ALTER TABLE `return_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `return_product_histories`
--
ALTER TABLE `return_product_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `return_product_paid_histories`
--
ALTER TABLE `return_product_paid_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rolls`
--
ALTER TABLE `rolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
