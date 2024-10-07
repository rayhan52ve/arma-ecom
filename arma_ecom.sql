-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 08:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arma_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, '1709531782.jpg', '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare.</p><p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer adipiscing hendrerit augue Cras tellus In pulvinar lectus</p><p><br>&nbsp;</p><p>&nbsp;</p><ul><li>Pellentesque sit amet augue eu orci cursus fermentum vestibulum in dolor.</li><li>Maecenas fringilla orci ultrices nulla consectetur, id suscipit erat vulputate.</li><li>Nullam efficitur velit ut interdum pellentesque.</li></ul>', '2024-03-04 05:56:22', '2024-03-04 05:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `added_times`
--

CREATE TABLE `added_times` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `added_service_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_charge_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `title`, `sub_title`, `created_at`, `updated_at`) VALUES
(6, '1709118442.jpg', 'Your Personal Assistant', 'One-stop solution for your services. Order any service, anytime.', '2024-02-27 05:58:45', '2024-02-28 11:07:22'),
(7, '1709096557.jpg', 'Your Personal Assistant', 'One-stop solution for your services. Order any service, anytime.', '2024-02-27 05:59:56', '2024-02-28 05:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 21, '2024-02-06 04:56:41', '2024-02-06 04:56:41'),
(2, 17, '2024-02-06 06:19:27', '2024-02-06 06:19:27'),
(3, 20, '2024-02-27 04:53:57', '2024-02-27 04:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `chat_details`
--

CREATE TABLE `chat_details` (
  `id` bigint UNSIGNED NOT NULL,
  `chat_id` bigint UNSIGNED NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `reply` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_details`
--

INSERT INTO `chat_details` (`id`, `chat_id`, `message`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 'fdgfdg grtdh  th jtshtyh htrtttj yj ytjytejh  rtuh tu  t h', NULL, '2024-02-06 04:56:41', '2024-02-06 04:56:41'),
(2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-02-06 04:58:19', '2024-02-06 04:58:19'),
(3, 1, 'hi', 'Hello 3', '2024-02-06 06:02:53', '2024-02-06 06:03:29'),
(4, 1, 'fhgfg', 'Hello 3', '2024-02-06 06:14:01', '2024-02-06 06:15:39'),
(5, 2, 'hello i am new customer', 'Hello 2', '2024-02-06 06:19:27', '2024-02-06 06:19:50'),
(6, 2, 'i need help', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-02-06 06:20:55', '2024-02-06 06:21:15'),
(7, 2, 'goodbuy', 'gg', '2024-02-06 06:22:10', '2024-02-06 06:47:30'),
(8, 1, 'hell', 'lk', '2024-02-06 06:23:36', '2024-02-06 06:48:38'),
(9, 1, 'last message', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-02-06 06:50:44', '2024-02-06 06:52:04'),
(10, 3, 'gfhgh', 'hello', '2024-02-27 04:53:57', '2024-03-03 06:11:13'),
(11, 1, 'nmlkjio oijpio ojok oijplk [jkl;\'', NULL, '2024-02-27 08:13:10', '2024-02-27 08:13:10'),
(12, 1, 'ghj', NULL, '2024-02-27 08:14:55', '2024-02-27 08:14:55'),
(13, 1, 'fdgfdg grtdh  th jtshtyh htrtttj yj ytjytejh  rtuh tu  t h', NULL, '2024-02-29 07:32:27', '2024-02-29 07:32:27'),
(14, 1, 'hi', 'hello 2', '2024-03-03 06:11:44', '2024-03-07 04:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `valid_till` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `product_id`, `name`, `code`, `price_type`, `price`, `start_date`, `valid_till`, `created_at`, `updated_at`) VALUES
(1, NULL, 'coupon1', 'x1', '%', '10', '2024-02-21', '2024-07-01', '2024-02-22 06:16:02', '2024-03-06 11:36:26'),
(2, NULL, 'Coupon 2', 'x2', '%', '20', '2024-02-28', '2024-02-29', '2024-02-22 06:16:31', '2024-02-24 07:59:31'),
(3, NULL, 'coupon 3', 'x3', '৳', '100', '2024-02-21', '2024-02-29', '2024-02-22 06:23:36', '2024-02-24 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `subject`, `message`, `copy`, `created_at`, `updated_at`) VALUES
(13, 'Sajid', 'customer@gmail.com', 'dgtsertg', 'fhfghgfh', '1', '2024-01-30 05:55:37', '2024-01-30 05:55:37'),
(14, 'Sajid', 'admin@admin.com', 'dgtsertg', 'thtghjthj', '1', '2024-01-30 05:58:14', '2024-01-30 05:58:14'),
(15, 'Sajid', 'customer@gmail.com', 'dgtsertg', 'gfg', NULL, '2024-01-30 06:07:19', '2024-01-30 06:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint UNSIGNED NOT NULL,
  `expense_type_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_amount_bangla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `comment_bangla` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_type_id`, `image`, `expense_amount`, `expense_amount_bangla`, `comment`, `comment_bangla`, `voucher`, `date`, `created_at`, `updated_at`) VALUES
(1, 3, '1707387285.jpg', '5001', NULL, 'notrer updated', NULL, 'fghetyert54 updated', '2024-02-07', '2024-02-08 09:50:59', '2024-02-08 11:27:58'),
(3, 1, NULL, '6000', NULL, 'notrer', NULL, 'fghetyert54', '2024-02-06', '2024-02-08 10:21:04', '2024-02-08 11:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `id` bigint UNSIGNED NOT NULL,
  `expense_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_type_bangla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_types`
--

INSERT INTO `expense_types` (`id`, `expense_type`, `expense_type_bangla`, `created_at`, `updated_at`) VALUES
(1, 'Electricity Bill', NULL, '2024-02-08 08:47:46', '2024-02-08 08:51:20'),
(3, 'Cleaner', NULL, '2024-02-08 08:53:25', '2024-02-08 08:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'd859b1b5-152f-487d-b8c6-0fd99f26c7e9', 'database', 'default', '{\"uuid\":\"d859b1b5-152f-487d-b8c6-0fd99f26c7e9\",\"displayName\":\"App\\\\Jobs\\\\StartCountdownJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\StartCountdownJob\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\StartCountdownJob\\\":13:{s:32:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000time\\\";s:1:\\\"8\\\";s:37:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000time_type\\\";s:4:\\\"Hour\\\";s:35:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000orderId\\\";s:1:\\\"4\\\";s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-01-30 14:37:50.023178\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:10:\\\"Asia\\/Dhaka\\\";}s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\StartCountdownJob has been attempted too many times or run too long. The job may have previously timed out. in C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:750\nStack trace:\n#0 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(504): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(418): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#2 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#6 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#12 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\laragon\\www\\eit_vata\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2024-01-30 08:40:56'),
(2, '3fe0aa89-6a04-4e23-b95f-78f125a08679', 'database', 'default', '{\"uuid\":\"3fe0aa89-6a04-4e23-b95f-78f125a08679\",\"displayName\":\"App\\\\Jobs\\\\StartCountdownJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\StartCountdownJob\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\StartCountdownJob\\\":13:{s:32:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000time\\\";s:1:\\\"8\\\";s:37:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000time_type\\\";s:4:\\\"Hour\\\";s:35:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000orderId\\\";s:1:\\\"4\\\";s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-01-30 15:08:40.406575\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:10:\\\"Asia\\/Dhaka\\\";}s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\StartCountdownJob has been attempted too many times or run too long. The job may have previously timed out. in C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:750\nStack trace:\n#0 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(504): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(418): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#2 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#6 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#12 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\laragon\\www\\eit_vata\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2024-01-30 09:50:10'),
(3, '57913103-c46d-4290-9e2e-3f55ec05cabc', 'database', 'default', '{\"uuid\":\"57913103-c46d-4290-9e2e-3f55ec05cabc\",\"displayName\":\"App\\\\Jobs\\\\StartCountdownJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\StartCountdownJob\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\StartCountdownJob\\\":13:{s:32:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000time\\\";s:2:\\\"98\\\";s:37:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000time_type\\\";s:6:\\\"Minute\\\";s:35:\\\"\\u0000App\\\\Jobs\\\\StartCountdownJob\\u0000orderId\\\";s:1:\\\"9\\\";s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-02-05 10:54:52.222964\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:10:\\\"Asia\\/Dhaka\\\";}s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\StartCountdownJob has been attempted too many times or run too long. The job may have previously timed out. in C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:750\nStack trace:\n#0 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(504): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(418): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#2 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#6 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#12 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\laragon\\www\\eit_vata\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\laragon\\www\\eit_vata\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\laragon\\www\\eit_vata\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2024-02-05 05:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_image1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `favicon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `site_name`, `logo_image`, `logo_image1`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'E-commerce', 'logo/logo_img1/202403051421logo.png', NULL, NULL, '2023-09-24 08:38:45', '2024-03-05 08:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
(18, '2023_09_10_104523_create_return_product_paid_histories_table', 6),
(19, '2023_06_04_101518_create_logos_table', 7),
(20, '2023_09_24_111238_create_teams_table', 7),
(21, '2023_09_24_114721_create_cutting_grounds_table', 8),
(22, '2023_09_24_130037_create_raw_rezas_table', 9),
(23, '2023_09_24_130511_create_load_mistris_table', 9),
(27, '2023_09_28_130418_create_expense_types_table', 10),
(29, '2024_01_21_155249_create_service_categories_table', 11),
(33, '2024_01_21_160327_create_services_table', 12),
(34, '2024_01_22_130118_create_admins_table', 12),
(36, '2024_01_25_103902_create_orders_table', 13),
(37, '2024_01_28_105629_create_banners_table', 14),
(38, '2024_01_28_135653_create_website_infos_table', 15),
(39, '2024_01_30_103556_create_emails_table', 16),
(40, '2024_01_30_114551_create_jobs_table', 17),
(41, '2024_01_31_111018_create_payrolls_table', 18),
(46, '2024_02_05_111200_create_payments_table', 19),
(48, '2024_02_05_123938_create_chats_table', 20),
(49, '2024_02_06_103640_create_chat_details_table', 20),
(50, '2024_02_07_101504_create_product_categories_table', 21),
(53, '2023_09_28_130937_create_expenses_table', 23),
(54, '2024_02_10_103341_create_added_times_table', 24),
(55, '2024_02_12_162535_create_product_sub_categories_table', 25),
(56, '2024_02_07_111705_create_products_table', 26),
(57, '2024_02_12_173554_create_product_galleries_table', 27),
(64, '2024_02_13_152950_create_coupons_table', 28),
(65, '2024_02_13_172501_create_offers_table', 28),
(72, '2024_02_25_102328_create_product_orders_table', 29),
(73, '2024_02_25_105639_create_product_order_details_table', 29),
(74, '2024_03_03_173354_create_about_us_table', 30),
(75, '2024_03_04_151351_create_user_details_table', 31),
(77, '2024_03_07_134523_create_reviews_table', 32);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `valid_till` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `product_id`, `name`, `offer`, `offer_type`, `start_date`, `valid_till`, `created_at`, `updated_at`) VALUES
(1, NULL, '21 february offer', '20', '%', '2024-02-14', '2024-05-29', '2024-02-15 04:49:08', '2024-03-06 11:34:36'),
(2, NULL, 'Ramadan Offer 2024', '100', '৳', '2024-03-20', '2024-04-03', '2024-02-15 04:51:12', '2024-02-15 04:51:12'),
(3, NULL, '2nd offer', '40', '৳', '2024-02-13', '2024-02-21', '2024-02-15 05:34:55', '2024-02-15 05:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED DEFAULT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `employee_id` int DEFAULT NULL,
  `status` tinyint DEFAULT NULL COMMENT '1=Pending,2=Running,3=Declined,4=Completed\r\n',
  `payment_status` int NOT NULL DEFAULT '0',
  `service_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `service_id`, `product_id`, `employee_id`, `status`, `payment_status`, `service_time`, `charge_type`, `created_at`, `updated_at`) VALUES
(73, 21, 6, NULL, 16, 4, 1, '2', 'Minute', '2024-03-03 06:03:38', '2024-03-03 06:17:21'),
(74, 21, 6, NULL, 22, 4, 1, '2', 'Minute', '2024-03-03 11:37:37', '2024-03-07 08:48:28'),
(75, 17, 6, NULL, 16, 4, 1, '2', 'Minute', '2024-03-03 11:40:08', '2024-03-07 10:39:45'),
(76, 21, 11, NULL, 22, 4, 1, '6', 'Minute', '2024-03-04 06:51:43', '2024-03-07 09:24:27'),
(77, 21, 11, NULL, 16, 4, 1, '11', 'Minute', '2024-03-04 06:52:02', '2024-03-07 10:17:39'),
(78, 21, 6, NULL, 22, 4, 0, '2', 'Minute', '2024-03-04 07:19:48', '2024-03-04 07:23:12'),
(79, 21, 6, NULL, NULL, 1, 0, '5', 'Minute', '2024-03-06 10:46:55', '2024-03-06 10:46:55'),
(80, 21, 6, NULL, NULL, 1, 0, '99', 'Minute', '2024-03-06 10:49:21', '2024-03-06 10:49:21'),
(81, 21, 6, NULL, NULL, 1, 0, '87', 'Minute', '2024-03-06 10:50:25', '2024-03-06 10:50:25'),
(83, 21, 6, NULL, NULL, 1, 0, '2', 'Minute', '2024-03-09 05:52:25', '2024-03-09 05:52:25'),
(84, 21, 6, NULL, NULL, 1, 0, '5', 'Minute', '2024-03-09 05:53:19', '2024-03-09 05:53:19'),
(85, 42, 10, NULL, NULL, 1, 0, '1', 'Hour', '2024-03-09 10:25:48', '2024-03-09 10:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 2, '400', '2024-02-05 05:13:46', '2024-02-05 05:13:46'),
(2, 5, '200', '2024-02-05 05:13:49', '2024-02-05 05:36:44'),
(3, 6, '10800', '2024-02-05 05:14:17', '2024-02-05 05:41:06'),
(4, 10, '200', '2024-02-10 05:35:20', '2024-02-10 05:35:20'),
(5, 73, '200', '2024-03-03 06:17:21', '2024-03-03 06:17:21'),
(6, 74, '200', '2024-03-07 08:48:28', '2024-03-07 08:48:28'),
(7, 76, '558', '2024-03-07 09:24:27', '2024-03-07 09:24:27'),
(8, 77, '1023', '2024-03-07 10:17:39', '2024-03-07 10:17:39'),
(9, 75, '200', '2024-03-07 10:39:45', '2024-03-07 10:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `payroll` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `order_id`, `user_id`, `payroll`, `status`, `created_at`, `updated_at`) VALUES
(12, 73, 16, '120', '1', '2024-03-07 04:56:58', '2024-03-07 04:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category_id` bigint UNSIGNED NOT NULL,
  `product_sub_category_id` bigint UNSIGNED NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `offer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `product_category_id`, `product_sub_category_id`, `price`, `discount_price`, `description`, `offer_id`, `created_at`, `updated_at`) VALUES
(35, '1709096986.jpeg', 'Asus Vivo book', 2, 3, '600', NULL, '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ol>', '3', '2024-02-13 08:40:54', '2024-02-28 10:00:04'),
(36, '1709096825.jpg', 'Product 1', 3, 1, '600', NULL, '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ol>', '2', '2024-02-13 09:32:20', '2024-02-28 09:59:54'),
(37, '1709096863.jpg', 'Bag', 3, 1, '600', '344', '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ol>', '1', '2024-02-14 09:39:03', '2024-03-06 11:34:18'),
(38, '1709024408.jpg', 'T-shirt', 3, 1, '600', '435', '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas up</li><li>&nbsp;</li></ol>', '1', '2024-02-27 09:00:08', '2024-03-06 11:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Electronics', '2024-02-07 04:47:36', '2024-02-07 04:47:36'),
(3, 'Clothings', '2024-02-07 04:47:55', '2024-02-07 04:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `photos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `photos`, `created_at`, `updated_at`) VALUES
(51, 38, '7371-1709024408.jpg', NULL, NULL),
(54, 35, '2853-1709107365.jpeg', NULL, NULL),
(55, 35, '2704-1709107365.webp', NULL, NULL),
(56, 36, '7124-1709107761.jpg', NULL, NULL),
(57, 36, '9229-1709107761.jpg', NULL, NULL),
(58, 36, '5159-1709107761.jpg', NULL, NULL),
(59, 38, '4592-1709107802.jpg', NULL, NULL),
(60, 38, '1416-1709107802.jpg', NULL, NULL),
(61, 38, '4282-1709107802.jpg', NULL, NULL),
(62, 37, '2224-1709107819.webp', NULL, NULL),
(63, 37, '5379-1709107819.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1=Pending',
  `subtotal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `user_id`, `status`, `subtotal`, `total`, `coupon_discount`, `created_at`, `updated_at`) VALUES
(1, 21, 4, '2160', '1944', '216', '2024-02-25 05:39:01', '2024-02-25 09:11:21'),
(2, 21, 4, '480', NULL, NULL, '2024-02-25 05:40:36', '2024-03-04 11:48:30'),
(3, 17, 4, '4320', '4220', '100', '2024-02-25 10:56:45', '2024-02-25 10:56:45'),
(4, 17, 1, '1200', NULL, NULL, '2024-02-25 11:00:10', '2024-02-25 11:00:10'),
(5, 21, 1, '4800', NULL, NULL, '2024-02-29 08:16:20', '2024-02-29 08:16:20'),
(6, 17, 1, '480', NULL, NULL, '2024-02-29 11:38:53', '2024-02-29 11:38:53'),
(7, 17, 1, '1200', NULL, NULL, '2024-02-29 11:40:21', '2024-02-29 11:40:21'),
(8, 17, 1, '1200', NULL, NULL, '2024-02-29 11:42:46', '2024-02-29 11:42:46'),
(9, 21, 1, '3000', NULL, NULL, '2024-03-05 04:28:37', '2024-03-05 04:28:37'),
(10, 42, 1, '1200', NULL, NULL, '2024-03-06 10:56:50', '2024-03-06 10:56:50'),
(11, 17, 1, '1080', NULL, NULL, '2024-03-09 06:29:14', '2024-03-09 06:29:14'),
(12, 17, 1, '1080', NULL, NULL, '2024-03-09 06:32:02', '2024-03-09 06:32:02'),
(13, 17, 1, '1080', NULL, NULL, '2024-03-09 06:34:52', '2024-03-09 06:34:52'),
(14, 17, 1, '1080', NULL, NULL, '2024-03-09 06:36:42', '2024-03-09 06:36:42'),
(15, 17, 1, '960', NULL, NULL, '2024-03-09 06:40:40', '2024-03-09 06:40:40'),
(16, 17, 1, '1080', NULL, NULL, '2024-03-09 06:43:23', '2024-03-09 06:43:23'),
(17, 17, 1, '1200', NULL, NULL, '2024-03-09 07:31:12', '2024-03-09 07:31:12'),
(18, 42, 1, '2400', '2160', '240', '2024-03-09 10:26:44', '2024-03-09 10:26:44'),
(19, 21, 1, '1560', '1404', '156', '2024-03-10 16:00:17', '2024-03-10 16:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_order_details`
--

CREATE TABLE `product_order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `product_order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_order_details`
--

INSERT INTO `product_order_details` (`id`, `product_order_id`, `product_id`, `price`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 37, '480', '2', '2024-02-25 05:39:01', '2024-02-25 05:39:01'),
(2, 1, 35, '600', '2', '2024-02-25 05:39:01', '2024-02-25 05:39:01'),
(3, 2, 37, '480', '1', '2024-02-25 05:40:36', '2024-02-25 05:40:36'),
(4, 3, 37, '480', '4', '2024-02-25 10:56:45', '2024-02-25 10:56:45'),
(5, 3, 35, '600', '3', '2024-02-25 10:56:45', '2024-02-25 10:56:45'),
(6, 3, 36, '600', '1', '2024-02-25 10:56:45', '2024-02-25 10:56:45'),
(7, 4, 35, '600', '2', '2024-02-25 11:00:10', '2024-02-25 11:00:10'),
(8, 5, 35, '600', '6', '2024-02-29 08:16:20', '2024-02-29 08:16:20'),
(9, 5, 36, '600', '2', '2024-02-29 08:16:20', '2024-02-29 08:16:20'),
(10, 6, 37, '480', '1', '2024-02-29 11:38:53', '2024-02-29 11:38:53'),
(11, 7, 35, '600', '2', '2024-02-29 11:40:21', '2024-02-29 11:40:21'),
(12, 8, 35, '600', '2', '2024-02-29 11:42:46', '2024-02-29 11:42:46'),
(13, 9, 35, '600', '3', '2024-03-05 04:28:37', '2024-03-05 04:28:37'),
(14, 9, 36, '600', '2', '2024-03-05 04:28:37', '2024-03-05 04:28:37'),
(15, 10, 36, '600', '2', '2024-03-06 10:56:50', '2024-03-06 10:56:50'),
(16, 11, 35, '600', '1', '2024-03-09 06:29:14', '2024-03-09 06:29:14'),
(17, 11, 37, '480', '1', '2024-03-09 06:29:14', '2024-03-09 06:29:14'),
(18, 12, 35, '600', '1', '2024-03-09 06:32:02', '2024-03-09 06:32:02'),
(19, 12, 38, '480', '1', '2024-03-09 06:32:02', '2024-03-09 06:32:02'),
(20, 13, 38, '480', '1', '2024-03-09 06:34:52', '2024-03-09 06:34:52'),
(21, 13, 36, '600', '1', '2024-03-09 06:34:52', '2024-03-09 06:34:52'),
(22, 14, 36, '600', '1', '2024-03-09 06:36:42', '2024-03-09 06:36:42'),
(23, 14, 38, '480', '1', '2024-03-09 06:36:42', '2024-03-09 06:36:42'),
(24, 15, 38, '480', '1', '2024-03-09 06:40:40', '2024-03-09 06:40:40'),
(25, 15, 37, '480', '1', '2024-03-09 06:40:40', '2024-03-09 06:40:40'),
(26, 16, 37, '480', '1', '2024-03-09 06:43:23', '2024-03-09 06:43:23'),
(27, 16, 36, '600', '1', '2024-03-09 06:43:23', '2024-03-09 06:43:23'),
(28, 17, 35, '600', '1', '2024-03-09 07:31:12', '2024-03-09 07:31:12'),
(29, 17, 36, '600', '1', '2024-03-09 07:31:12', '2024-03-09 07:31:12'),
(30, 18, 36, '600', '4', '2024-03-09 10:26:44', '2024-03-09 10:26:44'),
(31, 19, 37, '480', '1', '2024-03-10 16:00:17', '2024-03-10 16:00:17'),
(32, 19, 36, '600', '1', '2024-03-10 16:00:17', '2024-03-10 16:00:17'),
(33, 19, 38, '480', '1', '2024-03-10 16:00:17', '2024-03-10 16:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_categories`
--

CREATE TABLE `product_sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `product_category_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_categories`
--

INSERT INTO `product_sub_categories` (`id`, `product_category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, 'T-shirt', '2024-02-12 11:09:15', '2024-02-12 11:09:15'),
(3, 2, 'Laptop', '2024-02-12 11:25:12', '2024-02-12 11:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED DEFAULT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `msg` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rating` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `service_id`, `product_id`, `msg`, `rating`, `created_at`, `updated_at`) VALUES
(4, 17, 6, NULL, 'rgfhgfhj tyu ruy tyu teyu', NULL, '2024-03-07 10:39:51', '2024-03-07 10:39:51'),
(6, 21, 6, NULL, 'fghghhg', NULL, '2024-03-07 12:10:54', '2024-03-07 12:10:54'),
(7, 21, 6, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2024-03-07 12:11:04', '2024-03-07 12:11:04'),
(9, 21, 11, NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctusLorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus', NULL, '2024-03-09 04:38:23', '2024-03-09 04:38:23'),
(11, 21, NULL, 35, 'ghghjghj', NULL, '2024-03-09 05:41:08', '2024-03-09 05:41:08'),
(12, 21, NULL, 35, 'hgkhjk', NULL, '2024-03-09 05:41:31', '2024-03-09 05:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_category_id` bigint UNSIGNED NOT NULL,
  `service_charge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payroll` int DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `service_category_id`, `service_charge`, `charge_type`, `payroll`, `description`, `created_at`, `updated_at`) VALUES
(6, '1709097410.jpg', 'Service 3', 5, '100', 'Minute', NULL, '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ol>', '2024-01-23 05:59:11', '2024-02-28 09:40:00'),
(9, '1709097420.jpeg', 'service 2', 8, '3000', 'Day', NULL, NULL, '2024-01-23 06:40:41', '2024-02-28 05:17:00'),
(10, '1709097561.jpg', 'Home Clean Service', 8, '75', 'Hour', NULL, '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ol>', '2024-01-28 10:18:30', '2024-02-28 09:39:38'),
(11, '1709097747.jpg', 'Painting', 6, '93', 'Minute', NULL, '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ol>', '2024-01-28 10:19:13', '2024-02-28 09:39:28'),
(12, '1709098032.jpg', 'Gas Service', 8, '453425', 'Minute', NULL, '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>&nbsp;</li></ol>', '2024-02-06 10:51:47', '2024-02-28 09:39:14'),
(13, '1709097955.jpg', 'Electric Service', 8, '453425', 'Day', NULL, '<h2><strong>Augue Aliquam ornare</strong><br><strong>Praesent mattis commodo</strong></h2><p><br>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ol><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ol>', '2024-02-06 10:52:15', '2024-02-28 09:30:39'),
(20, '1709117277.jpg', 'Sajid', 5, '453425', 'Minute', NULL, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus</p><p><br>&nbsp;</p><ul><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li><li>Nullam turpis Cras dapibus orci rutrum</li><li>Etiam enim Suspendisse imperdiet cursus nisi Maecenas</li></ul>', '2024-02-28 09:50:07', '2024-02-28 10:47:57'),
(21, '1728331536.jpg', 'fsfsff', 5, '535', 'Minute', NULL, '<p>sggfg</p>', '2024-10-07 17:31:43', '2024-10-07 20:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `image`, `service_category`, `created_at`, `updated_at`) VALUES
(5, '1728325133.png', 'Servoce Category 1', '2024-01-21 11:41:41', '2024-10-07 18:18:53'),
(6, '1728325143.png', 'Servoce Category 2', '2024-01-21 11:41:45', '2024-10-07 18:19:03'),
(8, '1728325153.png', 'Servoce Category 3', '2024-01-21 11:42:09', '2024-10-07 18:19:13'),
(9, '1728325170.jpg', 'fgvgfg', '2024-10-07 17:31:16', '2024-10-07 18:19:30'),
(10, '1728325179.jpg', 'tyhjrhjythjh', '2024-10-07 17:47:53', '2024-10-07 18:19:39'),
(11, '1728325208.jpg', 'chvbnvbn', '2024-10-07 18:20:08', '2024-10-07 18:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','employee','user','customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `employee_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `role`, `employee_type`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Employee', 'employee@gmail.com', '55555555555', NULL, NULL, 'employee', 'In House', 1, '$2y$10$O.gN..SwdTGkO70DV9tu1.O0d92XYKeugsuWHrXYWNN3pPtPhlsGK', NULL, '2024-01-21 06:14:09', '2024-03-03 09:43:42'),
(17, 'newcustomer up', 'newcustomer@gmail.com', '888887777777', 'Houston', NULL, 'customer', NULL, 1, '$2y$10$iJbVmnvDQJVYRH.DHHK./OjQ93l7H5L22oW2HUCMjyLsuXgfw4fU2', NULL, '2024-01-22 04:21:26', '2024-03-09 06:32:02'),
(20, 'Admin', 'admin@gmail.com', '0111111151155', '3096 Cemetery Hollow Street, Houston, TX 77099', NULL, 'admin', NULL, 1, '$2y$10$xBCE8vLD1qyUwn7LgVaVgeA.iOUWUeF0ta28w8PiEH3aI8Coeun6G', NULL, '2024-01-22 10:44:48', '2024-03-06 09:48:14'),
(21, 'Customer', 'customer@gmail.com', '777776666666', 'Cemetery Hollow Street, Houston', NULL, 'customer', NULL, 1, '$2y$10$tZw0ZSFkUczCTmvUOGLEi.kQFCWzrn5Wxg4gi4NWsRdIc.NfCgepy', NULL, '2024-01-22 10:45:19', '2024-03-09 05:53:19'),
(22, 'Employee 2', 'employee2@gmail.com', '0111111111111', NULL, NULL, 'employee', 'In House', 1, '$2y$10$Va1gxWb6g60jynDhuOumz.0rdi3t6ejiZdHBgcTFNT9Omfzqg2yu6', NULL, '2024-01-31 04:45:47', '2024-03-06 09:48:26'),
(30, 'out Employee', 'custodfdfmer@gmail.com', '0111111111119', 'wegdg', NULL, 'employee', 'Out House', 1, '$2y$10$NkUFduY39bJYMUMji9.qu.O4CuuhVPzT.ZvKj5te/gzp4jK44Ipuu', NULL, '2024-03-03 10:06:38', '2024-03-03 11:21:40'),
(31, 'out house', 'dfgfhfghgh@gmail.com', '5345435', 'dsgsdfg', NULL, 'employee', NULL, 1, '$2y$10$dBCbnRWJOaAS.2xX0Wjofe51mspggaymfDJ3fqsUDgXLiotj2hNSG', NULL, '2024-03-03 10:07:51', '2024-03-03 11:02:06'),
(41, 'test employee', 'empdfsgsdfgfgloyee@gmail.com', '0111123411111', '3096 Cemetery Hollow Street, Houston, TX 77099', NULL, 'employee', 'In House', 1, '$2y$10$.BkanZtS1zBfjWM3yyzhMuPHibp4GHUgK9knZpuAdhLuZIuuUckRS', NULL, '2024-03-04 10:54:25', '2024-03-04 10:54:25'),
(42, 'customer 3 up', 'customer3@gmail.com', '67576576774', 'erser', NULL, 'customer', NULL, 1, '$2y$10$XF.xNRl2HnUSaPEHmbqJgOs.4DqH8AC0.MDjd6oZSdFZ.KL.CTKre', NULL, '2024-03-05 05:49:50', '2024-03-09 10:25:48'),
(44, 'tutyuj', 'ygujfj@gmail.com', NULL, NULL, NULL, 'customer', NULL, 1, '$2y$10$RFpKiHmHB0lfJOUAtZD4COB/3uJxkNlHTuqbA6WuLJ0I2Vmj3CLWG', NULL, '2024-03-05 06:13:53', '2024-03-05 06:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `image`, `designation`, `about`, `created_at`, `updated_at`) VALUES
(4, 41, '1709549763.jpg', NULL, NULL, '2024-03-04 10:54:25', '2024-03-04 10:56:03'),
(5, 44, '1709713972.jpg', NULL, NULL, '2024-03-05 09:57:12', '2024-03-06 08:32:52'),
(12, 20, '1709638517.webp', NULL, NULL, '2024-03-05 11:35:17', '2024-03-05 11:35:17'),
(13, 42, '1709718559.webp', NULL, NULL, '2024-03-06 08:33:02', '2024-03-06 09:49:19'),
(14, 22, '1709718069.webp', NULL, NULL, '2024-03-06 09:41:02', '2024-03-06 09:41:09'),
(15, 17, '1709718635.jpg', NULL, NULL, '2024-03-06 09:50:35', '2024-03-06 09:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `website_infos`
--

CREATE TABLE `website_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tweeter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_right` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_infos`
--

INSERT INTO `website_infos` (`id`, `address`, `phone`, `telephone`, `email`, `description`, `facebook`, `tweeter`, `google`, `linkedin`, `instagram`, `copy_right`, `created_at`, `updated_at`) VALUES
(1, '3096 Cemetery Hollow Street, Houston, TX 77099', '0111111111111', '(888) 123-4567', 'email@example.com', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse et justo. augue.', 'https://www.facebook.com/', NULL, NULL, NULL, NULL, 'Copyright © 2019 Arma By Codelayers | All rights reserved.', '2024-01-28 09:14:55', '2024-01-28 09:27:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `added_times`
--
ALTER TABLE `added_times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_times_order_id_foreign` (`order_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_user_id_foreign` (`user_id`);

--
-- Indexes for table `chat_details`
--
ALTER TABLE `chat_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_details_chat_id_foreign` (`chat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_service_id_foreign` (`service_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payrolls_order_id_foreign` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`),
  ADD KEY `products_product_sub_category_id_foreign` (`product_sub_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_order_details`
--
ALTER TABLE `product_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_order_details_product_order_id_foreign` (`product_order_id`),
  ADD KEY `product_order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_sub_categories_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_service_id_foreign` (`service_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_service_category_id_foreign` (`service_category_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `website_infos`
--
ALTER TABLE `website_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `added_times`
--
ALTER TABLE `added_times`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat_details`
--
ALTER TABLE `chat_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_order_details`
--
ALTER TABLE `product_order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `website_infos`
--
ALTER TABLE `website_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `added_times`
--
ALTER TABLE `added_times`
  ADD CONSTRAINT `added_times_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chat_details`
--
ALTER TABLE `chat_details`
  ADD CONSTRAINT `chat_details_chat_id_foreign` FOREIGN KEY (`chat_id`) REFERENCES `chats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD CONSTRAINT `payrolls_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_product_sub_category_id_foreign` FOREIGN KEY (`product_sub_category_id`) REFERENCES `product_sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD CONSTRAINT `product_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_order_details`
--
ALTER TABLE `product_order_details`
  ADD CONSTRAINT `product_order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_order_details_product_order_id_foreign` FOREIGN KEY (`product_order_id`) REFERENCES `product_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD CONSTRAINT `product_sub_categories_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
