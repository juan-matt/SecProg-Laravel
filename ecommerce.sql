-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2022 at 03:39 PM
-- Server version: 10.3.32-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_on_carts`
--

CREATE TABLE `action_on_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idOnProducts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idOnCart` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_input_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `action_on_carts`
--

INSERT INTO `action_on_carts` (`id`, `action`, `user_id`, `idOnProducts`, `idOnCart`, `name`, `user_input_quantity`, `created_at`, `updated_at`) VALUES
(1, 'delete', '2', '1', '6', 'tshirtnono', '68', '2022-01-07 00:22:42', '2022-01-07 00:22:42'),
(2, 'delete', '2', '1', '2', 'tshirt', '1', '2022-01-07 00:23:50', '2022-01-07 00:23:50'),
(3, 'delete', '3', '1', '3', 'tshirtnono', '69', '2022-01-09 02:49:21', '2022-01-09 02:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `action_on_products`
--

CREATE TABLE `action_on_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idOnProducts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `action_on_products`
--

INSERT INTO `action_on_products` (`id`, `action`, `idOnProducts`, `old_name`, `old_price`, `old_description`, `old_quantity`, `old_image`, `created_at`, `updated_at`) VALUES
(1, 'delete', '3', 'shoe', '30000', 'a shoe', '30', '24-12-21 01:15:38-preview.jpg', '2021-12-29 20:38:44', '2021-12-29 20:38:44'),
(2, 'delete', '2', 'shirt', '20000', 'a shirt', '20', '24-12-21 01:04:39-jpg', '2021-12-29 20:49:31', '2021-12-29 20:49:31'),
(3, 'edit', '1', 'tshirt', '10000', 'this is a tshirt', '10', '1640350857-jpg', '2021-12-30 14:10:47', '2021-12-30 14:10:47'),
(4, 'edit', '1', 'tshirt', '10000', 'this is a tshirt', '10', '1640350857-jpg', '2021-12-30 14:27:39', '2021-12-30 14:27:39'),
(5, 'edit', '1', 'tshirt', '10000', 'this is a tshirt', '10', '1640350857-jpg', '2021-12-30 14:33:24', '2021-12-30 14:33:24'),
(6, 'edit', '1', 'tshirt', '10000', 'this is a tshirt', '10', '1640350857-jpg', '2021-12-30 14:33:49', '2021-12-30 14:33:49'),
(7, 'edit', '1', 'tshirtzzz', '10000', 'this is a tshirt', '10', '1640350857-jpg', '2021-12-30 14:35:07', '2021-12-30 14:35:07'),
(8, 'edit', '10', 'pulpen', '1000', 'sebuah pulpen', '3', '29-12-21 01:59:06-[ feature-image.jpg ]', '2021-12-30 14:36:38', '2021-12-30 14:36:38'),
(9, 'edit', '10', 'pulpenyes', '1000', 'sebuah pulpen', '3', '29-12-21 01:59:06-[ feature-image.jpg ]', '2021-12-30 14:38:07', '2021-12-30 14:38:07'),
(10, 'edit', '10', 'pulpenyes', '1000', 'sebuah pulpen', '3', '29-12-21 01:59:06-[ feature-image.jpg ]', '2021-12-30 14:38:25', '2021-12-30 14:38:25'),
(11, 'edit', '10', 'pulpenyes', '1000', 'sebuah pulpen', '3', '29-12-21 01:59:06-[ feature-image.jpg ]', '2021-12-30 14:38:44', '2021-12-30 14:38:44'),
(12, 'edit', '10', 'pulpenyes', '1000', 'sebuah pulpen', '3', '29-12-21 01:59:06-[ feature-image.jpg ]', '2021-12-30 14:39:06', '2021-12-30 14:39:06'),
(13, 'delete', '9', 'fdafdsfasd', '10', 'sadhfbskajdhfb', '1', '24-12-21 01:54:52-[ preview.jpg ]', '2021-12-30 14:39:27', '2021-12-30 14:39:27'),
(14, 'edit', '1', 'tshirtzzz', '10000', 'this is a tshirt', '10', '1640350857-jpg', '2021-12-30 14:46:22', '2021-12-30 14:46:22'),
(15, 'edit', '1', 'tshirtnono', '421', 'this is a tshirtnono original', '69', '1640350857-jpg', '2021-12-30 14:46:58', '2021-12-30 14:46:58'),
(16, 'delete', '8', 'dfasdf', '845', 'djskag', '90', '24-12-21 01:41:46-[ preview.jpg ]', '2022-01-09 02:46:59', '2022-01-09 02:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `idOnProducts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `idOnProducts`, `name`, `price`, `description`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(4, 3, '4', 'yes', '40000', 'a yes', NULL, '24-12-21 01:16:46-[ preview.jpg ]', '2022-01-04 14:18:44', '2022-01-04 14:18:44'),
(14, 2, '1', 'tshirtnono', '421', 'this is a tshirtnono original', '1', '30-12-21 08:46:58- [ product_01.jpg ]', '2022-01-09 02:43:59', '2022-01-09 02:43:59');

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
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_15_203436_create_sessions_table', 1),
(7, '2021_12_24_120033_create_products_table', 2),
(9, '2021_12_29_092735_create_action_on_products_table', 3),
(11, '2022_01_04_065200_create_carts_table', 4),
(13, '2022_01_06_154740_create_action_on_carts_table', 5),
(14, '2022_01_06_191940_create_transactions_table', 6);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, 'tshirtnono', '421', 'this is a tshirtnono original', '69', '30-12-21 08:46:58- [ product_01.jpg ]', '2021-12-24 19:00:57', '2021-12-24 19:00:57'),
(3, 'shoe', '30000', 'a shoe', '30', '24-12-21 01:15:38-preview.jpg', '2021-12-24 19:15:38', '2021-12-24 19:15:38'),
(4, 'yes', '40000', 'a yes', '40', '24-12-21 01:16:46-[ preview.jpg ]', '2021-12-24 19:16:46', '2021-12-24 19:16:46'),
(5, 'tshirt', '50000', 'a t', '50', '24-12-21 01:24:57-[ preview.jpg ]', '2021-12-24 19:24:57', '2021-12-24 19:24:57'),
(6, 'adsf', '60000', 'asdf', '60', '24-12-21 01:40:06-[ preview.jpg ]', '2021-12-24 19:40:06', '2021-12-24 19:40:06'),
(7, 'sdfa', '70', 'jadsnj', '70', '24-12-21 01:40:48-[ preview.jpg ]', '2021-12-24 19:40:48', '2021-12-24 19:40:48'),
(10, 'pulpenyes', '1000', 'sebuah pulpen', '3', '29-12-21 01:59:06-[ feature-image.jpg ]', '2021-12-29 19:59:06', '2021-12-29 19:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('11b4s1i7qNNNsxvEZpJsKp5ZVGtACgXqV68c4Inp', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTNiNmo5VzFMS0ozTW9hTEhvc09aVmhyNDdlUzB5eVZHT3RYaHR5RiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9fQ==', 1641675626);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_change` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `name`, `phone`, `address`, `product_name`, `product_quantity`, `product_price`, `product_image`, `status`, `status_change`, `created_at`, `updated_at`) VALUES
(5, '2', 'ucok', '0812', 'a street', 'tshirtnono', '2', '421', '30-12-21 08:46:58- [ product_01.jpg ]', 'Sent', 'Pending', '2022-01-07 02:38:01', '2022-01-07 02:38:01'),
(6, '2', 'ucok', '0812', 'a street', 'tshirtnono', '69', '421', '30-12-21 08:46:58- [ product_01.jpg ]', 'Sent', '08-01-22 07:55:19', '2022-01-07 02:38:01', '2022-01-09 01:55:19'),
(7, '2', 'ucok', '0812', 'a street', 'shoe', '30', '30000', '24-12-21 01:15:38-preview.jpg', 'Pending', 'Pending', '2022-01-07 02:38:01', '2022-01-07 02:38:01'),
(8, '2', 'ucok', '0812', 'a street', 'sdfa', '9', '70', '24-12-21 01:40:48-[ preview.jpg ]', 'Pending', 'Pending', '2022-01-07 02:38:01', '2022-01-07 02:38:01'),
(9, '2', 'ucok', '0812', 'a street', 'tshirtnono', '1', '421', '30-12-21 08:46:58- [ product_01.jpg ]', 'Pending', 'Pending', '2022-01-07 02:39:56', '2022-01-07 02:39:56'),
(10, '2', 'ucok', '0812', 'a street', 'pulpenyes', '3', '1000', '29-12-21 01:59:06-[ feature-image.jpg ]', 'Pending', 'Pending', '2022-01-08 23:22:00', '2022-01-08 23:22:00'),
(11, '2', 'ucok', '0812', 'a street', 'shoe', '30', '30000', '24-12-21 01:15:38-preview.jpg', 'Pending', 'Pending', '2022-01-08 23:22:00', '2022-01-08 23:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_privilege` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_privilege`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', '1', NULL, NULL, NULL, '$2y$10$5R70xJoggTUXo61k/76BaewYt7L/WYaQF03psrGSJIGlyoZqdAc5q', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ucok', 'ucok@gmail.com', '0', '0812', 'a street', NULL, '$2y$10$NdTGkt6fKCl3YfTDLTpgXumhpLu/EB9uPljNxlL45xXjyDsr2hFBW', NULL, NULL, NULL, NULL, NULL, '2021-12-18 18:06:58', '2021-12-18 18:06:58'),
(3, 'ucok2', 'ucok2@gmail.com', '0', '021862151', 'b street', NULL, '$2y$10$56ztRm8NKjM05vgxq.Ehf.vVlNGZjOrDq4KPBVkKlYsKFMTpXuz7O', NULL, NULL, NULL, NULL, NULL, '2021-12-24 00:06:59', '2021-12-24 00:06:59'),
(4, 'ucok3', 'ucok3@gmail.com', '0', '081276492835', 'c street', NULL, '$2y$10$hGdUu/G.X5Q5R8FhKCbuR.dZEa.NDPGFQ05n/ibwWNhCZ4al58p8K', NULL, NULL, NULL, NULL, NULL, '2022-01-03 13:12:58', '2022-01-03 13:12:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_on_carts`
--
ALTER TABLE `action_on_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `action_on_products`
--
ALTER TABLE `action_on_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `action_on_carts`
--
ALTER TABLE `action_on_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `action_on_products`
--
ALTER TABLE `action_on_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
