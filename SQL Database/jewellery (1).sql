-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 12:11 PM
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
-- Database: `jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutus_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description1` varchar(600) NOT NULL,
  `description2` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutus_id`, `title`, `description1`, `description2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Unveiling the Story of Jewellery', 'Jewellery.com is an exciting new way to buy Fashion and Silver Jewellery and Accessories Online.  While the idea of buying jewellery online is not new, Jewellery.com provides a intuitive interface and detailed description to help you search and order the perfect jewellery to match your needs for all occasions. Jewellery.com will delight you with its wide collection of Indian and Western, Fashion and Silver Jewellery and gratify you with its excellent customer service.', 'Our vision is to offer our customers the most exclusive and beautiful collection of jewellery and gratify them from our exceptional service and quality.  To be able to add up little more to the natural beauty !!', '2024-10-07 23:52:12', '2024-10-08 00:13:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogindetails`
--

CREATE TABLE `adminlogindetails` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlogindetails`
--

INSERT INTO `adminlogindetails` (`admin_id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Kesha', 'keshapatel2302@gmail.com', '$2y$12$9ZOqnmRkcEZCjcJBPg8mU.JqWa.ltUekVNr2cmEhswOUKbJ9QSt06', '2024-10-09 04:18:01', '2024-10-09 04:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sharodiya', 'The Puja Collection for festivals', '1728291654img.jpg', '2024-10-07 03:30:54', '2024-10-07 03:32:15', NULL),
(2, 'Navratri', 'We have Navratri Special collection', '1728363826img.jpeg', '2024-10-07 23:33:46', '2024-10-07 23:34:27', NULL),
(3, 'Bridal', 'Special Bridal Collection', '1728364145img.jpeg', '2024-10-07 23:39:05', '2024-10-07 23:39:05', NULL),
(4, 'Party', 'Party Contemporary Tones', '1728364210img.jpg', '2024-10-07 23:40:10', '2024-10-07 23:40:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Diwali Special', 'We have Diwali Special Jewellery Collection', '2024-10-08 03:33:22', '2024-10-08 03:33:45', NULL),
(2, 'Navratri Special', 'We have Navratri Special Collection', '2024-10-08 03:34:12', '2024-10-08 03:34:12', NULL),
(3, 'Bridal Special', 'We have Bridal Special Collection', '2024-10-08 03:34:47', '2024-10-08 03:34:47', NULL),
(4, 'Party Special', 'We have Party Collection', '2024-10-08 03:36:06', '2024-10-08 03:39:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkoutdetails`
--

CREATE TABLE `checkoutdetails` (
  `checkout_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkoutdetails`
--

INSERT INTO `checkoutdetails` (`checkout_id`, `customer_id`, `order_id`, `name`, `email`, `address`, `state`, `city`, `pincode`, `contact`, `payment_id`, `total_cost`, `created_at`, `updated_at`) VALUES
(1, 1, 'order_366817', 'Kesha Patel', 'keshapatel2302@gmail.com', '10 Raj park\r\nAksharfarm road', 'Gujarat', 'Vadodara', 388001, 987654321, 'pay_P7IACLiAedYKpR', 2000, '2024-10-10 04:22:11', '2024-10-10 04:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactus_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact1` bigint(20) NOT NULL,
  `contact2` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactus_id`, `email`, `contact1`, `contact2`, `created_at`, `updated_at`) VALUES
(1, 'xyz1234@gmail.com', 1234567890, 987654321, '2024-10-08 02:32:40', '2024-10-08 02:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `fullname`, `email`, `password`, `address`, `state`, `city`, `pincode`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Kesha Patel', 'keshapatel6542@gmail.com', '$2y$12$p4jarXrUhUZsAtd4t.1fweCTzSUA/58S4mobRUGSYmPJdrQszhmCO', '10 Raj park', 'Gujarat', 'Vadodara', 388001, 987654321, '2024-10-10 03:34:40', '2024-10-10 03:34:40');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_07_060624_create_customers_table', 2),
(5, '2024_10_07_060637_create_category_table', 2),
(6, '2024_10_07_060643_create_subcategory_table', 2),
(7, '2024_10_07_060652_create_products_table', 2),
(8, '2024_10_07_060931_create_orders_table', 2),
(9, '2024_10_07_060957_create_aboutus_table', 2),
(10, '2024_10_07_061006_create_banner_table', 2),
(11, '2024_10_07_075934_add_delet_at_to_category_table', 3),
(12, '2024_10_07_080030_add_delet_at_to_subcategory_table', 4),
(13, '2024_10_07_080201_add_deleted_at_to_products_table', 4),
(14, '2024_10_07_080248_add_deleted_at_to_aboutus_table', 4),
(15, '2024_10_07_080316_add_deleted_at_to_banner_table', 4),
(16, '2024_10_07_080530_add_deleted_at_to_aboutus_table', 5),
(17, '2024_10_07_092353_create_contactus_table', 6),
(18, '2024_10_09_074422_create_adminlogindetails_table', 7),
(19, '2024_10_09_094927_create_feedback_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_ids` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `customer_id`, `product_ids`, `product_name`, `quantity`, `price`, `total_cost`, `created_at`, `updated_at`) VALUES
(1, 'order_367098', 1, '2', 'Choker', '2', '1000', 2000, '2024-10-10 04:04:55', '2024-10-10 04:04:55'),
(2, 'order_101650', 1, '2', 'Choker', '2', '1000', 2000, '2024-10-10 04:06:55', '2024-10-10 04:06:55'),
(3, 'order_713941', 1, '2', 'Choker', '2', '1000', 2000, '2024-10-10 04:13:36', '2024-10-10 04:13:36'),
(4, 'order_942246', 1, '2', 'Choker', '2', '1000', 2000, '2024-10-10 04:20:52', '2024-10-10 04:20:52'),
(5, 'order_366817', 1, '2', 'Choker', '2', '1000', 2000, '2024-10-10 04:22:11', '2024-10-10 04:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `subcategory_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 3, 'Kadas', 'Authentic design', 2000, '1728452075img.jpeg', '2024-10-09 00:04:35', '2024-10-09 00:17:34', NULL),
(2, 3, 1, 'Choker', 'Diamond Choker', 1000, '1728453714img.jpeg', '2024-10-09 00:20:58', '2024-10-09 00:31:54', NULL),
(3, 4, 1, 'Diamond Neckles', 'This is a special party neckles', 2000, '1728533498img.jpeg', '2024-10-09 22:41:38', '2024-10-09 22:41:38', NULL),
(4, 2, 1, 'Diamond Choker', 'This is diamond choker', 1000, '1728533547img.jpg', '2024-10-09 22:42:27', '2024-10-09 22:42:27', NULL),
(5, 2, 2, 'Pink Jumkas', 'This pink Jumkas with Diamond', 1500, '1728533621img.jpg', '2024-10-09 22:43:41', '2024-10-09 22:43:41', NULL),
(6, 3, 7, 'Diamond Ring', 'This is Diamond ring', 1200, '1728533703img.jpeg', '2024-10-09 22:45:03', '2024-10-09 22:45:03', NULL),
(7, 1, 1, 'Gold Neckles', 'Full neck cover neckles', 2000, '1728534766img.jpg', '2024-10-09 23:02:46', '2024-10-09 23:02:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tyQX4i8BYLdl55Nkkz1J12kRLUKl3groit6z8y5q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR1hzaFNRS1dBQXU3RFhGbjJYbjVvdmFWSHRUN0xUNjRidVdMcmRsZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjE6e2k6MTthOjU6e3M6MTA6InByb2R1Y3RfaWQiO2k6MTtzOjU6ImltYWdlIjtzOjE4OiIxNzI4NDUyMDc1aW1nLmpwZWciO3M6NDoibmFtZSI7czo1OiJLYWRhcyI7czo1OiJwcmljZSI7aToyMDAwO3M6ODoicXVhbnRpdHkiO047fX19', 1728548530),
('ud8ANM81LHrbmoAJYbHhNozfVjerZfWBU1o2gSq1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidWxDRERpQnhLQVpYSzN4M2JBWG0zZkxBeTFtN3Y1RkdqaW9SNHZHZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxMToiY3VzdG9tZXJfaWQiO2k6MTt9', 1728554922);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Necklaces', '2024-10-08 05:42:48', '2024-10-08 05:42:48', NULL),
(2, 1, 'Earrings', '2024-10-08 05:45:30', '2024-10-08 05:45:30', NULL),
(3, 1, 'Bangles', '2024-10-08 05:45:47', '2024-10-08 05:45:47', NULL),
(4, 2, 'Earrings', '2024-10-08 05:46:05', '2024-10-08 05:46:05', NULL),
(5, 2, 'Bangles', '2024-10-08 05:46:20', '2024-10-08 05:52:39', NULL),
(6, 2, 'Necklaces', '2024-10-08 23:14:04', '2024-10-08 23:17:28', NULL),
(7, 3, 'Ring', '2024-10-09 22:44:21', '2024-10-09 22:44:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Indexes for table `adminlogindetails`
--
ALTER TABLE `adminlogindetails`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `checkoutdetails`
--
ALTER TABLE `checkoutdetails`
  ADD PRIMARY KEY (`checkout_id`),
  ADD KEY `checkoutdetails_customer_id_foreign` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `subcategory_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlogindetails`
--
ALTER TABLE `adminlogindetails`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkoutdetails`
--
ALTER TABLE `checkoutdetails`
  MODIFY `checkout_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkoutdetails`
--
ALTER TABLE `checkoutdetails`
  ADD CONSTRAINT `checkoutdetails_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `checkoutdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
