-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2023 at 11:08 AM
-- Server version: 8.0.31
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

DROP TABLE IF EXISTS `attendances`;
CREATE TABLE IF NOT EXISTS `attendances` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employe_id` tinyint DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deleveries`
--

DROP TABLE IF EXISTS `deleveries`;
CREATE TABLE IF NOT EXISTS `deleveries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `qty` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deleveries`
--

INSERT INTO `deleveries` (`id`, `employee_id`, `customer_id`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 5, 0, '2023-09-09 00:48:01', NULL),
(2, 6, 4, 4, 0, '2023-09-09 00:48:19', NULL),
(3, 3, 7, 20, 1, '2023-09-09 00:48:35', '2023-09-09 03:38:27'),
(4, 6, 2, 9, 0, '2023-09-09 02:00:36', NULL),
(5, 6, 7, 15, 1, '2023-09-09 02:01:14', '2023-09-09 03:53:51'),
(6, 5, 4, 5, 0, '2023-09-09 04:55:18', NULL),
(7, 6, 4, 5, 0, '2023-09-09 04:55:56', NULL),
(8, 6, 4, 9, 0, '2023-09-09 04:56:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employe_type` int DEFAULT NULL,
  `fixed_salary` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `phone`, `employe_type`, `fixed_salary`, `created_at`, `updated_at`) VALUES
(1, 'Shadin Shekh', 'Manik Nagar', '4234234324', NULL, NULL, '2023-09-08 07:23:20', '2023-09-08 07:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14, '2023_09_09_064554_create_deleveries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_histories`
--

DROP TABLE IF EXISTS `payment_histories`;
CREATE TABLE IF NOT EXISTS `payment_histories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `crm_id` tinyint DEFAULT NULL,
  `month_id` tinyint DEFAULT NULL,
  `paid_amount` int DEFAULT NULL,
  `total_payable` int DEFAULT NULL,
  `total_salary` int DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `attendance` int DEFAULT NULL,
  `attendance_amount` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

DROP TABLE IF EXISTS `product_stocks`;
CREATE TABLE IF NOT EXISTS `product_stocks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` tinyint DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `purchase_price` int DEFAULT NULL,
  `selling_price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

DROP TABLE IF EXISTS `rolls`;
CREATE TABLE IF NOT EXISTS `rolls` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

DROP TABLE IF EXISTS `sells`;
CREATE TABLE IF NOT EXISTS `sells` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','employee','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, NULL, NULL, 'admin', '$2y$10$gEOYuZp/qeW04dELtdE0LuHt3psDjrTZQaYnv/O202gmM7XneaJlu', NULL, '2023-09-08 03:48:23', '2023-09-08 03:48:23'),
(2, 'User', 'user@user.com', NULL, NULL, NULL, 'user', '$2y$10$Bwf.B/4pLs2WthWGM3orQOQKd7kvh/1wHU56S/DTpRoAljnwluBEC', NULL, '2023-09-08 03:48:23', '2023-09-08 03:48:23'),
(3, 'Employee', 'employee@employee.com', NULL, NULL, NULL, 'employee', '$2y$10$ikWI/MZO4fvdUV/937202ew.3g8WpSSvo9gwNskfzn8hmSDN34yuG', NULL, '2023-09-08 03:48:23', '2023-09-08 03:48:23'),
(4, 'Parvaz', 'parvazreza00@gmail.com', NULL, NULL, NULL, 'user', '$2y$10$mwF2bRuSLpZsBd9fln4U7uuDkDqGLjO1jO4Gy0khQk32gT5sISoyi', NULL, '2023-09-08 04:02:55', '2023-09-08 04:02:55'),
(5, 'Shadin Shekh', 'sadin@gmial.com', '4234234324', 'Manik Nagar', NULL, 'employee', '$2y$10$TDmozKEljXkD83mjHAQWduW6PMnsOsTEcRoewxNNgsVLqbsi62HRq', NULL, '2023-09-08 08:00:13', NULL),
(6, 'Neon Roy', 'neonroy@gmail.com', '01754777888', 'badda,dhaka', NULL, 'employee', '$2y$10$MAYeEH8E/qAxktnNPeYHZOv98R615NYS7ZHziffchw4PtytOICqZ6', NULL, '2023-09-08 22:26:16', NULL),
(7, 'Nayem', 'nayem@gmail.com', '53454354', 'sdsadsads', NULL, 'user', '$2y$10$f.6.O.AG89w0NfuMo7pnguyshXrNFpg5lNuLU2PqcP8aiC0s7SZ92', NULL, '2023-09-08 22:41:26', '2023-09-08 22:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `work_histories`
--

DROP TABLE IF EXISTS `work_histories`;
CREATE TABLE IF NOT EXISTS `work_histories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `crm_id` tinyint DEFAULT NULL,
  `item_id` tinyint DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
