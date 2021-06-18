-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 04:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_api_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `square_footage` decimal(8,2) NOT NULL,
  `rooms_num` decimal(8,2) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `city`, `street`, `square_footage`, `rooms_num`, `parking`, `created_at`, `updated_at`, `user_id`) VALUES
(8, 'Bajina Basta', 'Kneza Milana Obrenovica 44', '70.00', '2.00', 1, '2021-04-09 10:43:37', '2021-04-09 15:29:53', 0),
(9, 'Beograd', 'Dusana Radovica 20', '59.00', '2.00', 2, '2021-04-09 13:10:08', '2021-04-09 15:30:44', 0),
(13, 'Uzice', 'Heroja Dejovica', '65.00', '2.00', 1, '2021-04-09 15:31:07', '2021-04-09 15:31:07', 1),
(14, 'Beograd', 'Dusana Radovica 20/A', '60.00', '2.00', 1, '2021-04-09 15:33:28', '2021-04-09 15:33:39', 4),
(15, 'Beograd', 'Dusana Radovica 20', '60.00', '2.00', 1, '2021-04-09 16:15:52', '2021-04-09 16:15:52', 6),
(17, 'Beograd', 'Dusana Radovica 20', '60.00', '2.00', 1, '2021-05-13 11:14:21', '2021-05-13 11:14:21', 7);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_08_121948_create_apartments_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(6, '2021_04_09_152130_update_apartments_table', 4),
(7, '2021_04_09_154723_rename_column_name', 5);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'myapptoken', 'ff9325e9a92ee4d22b0c2164db540204556e09db16680ab8f4d14686ffd15517', '[\"*\"]', NULL, '2021-04-08 12:31:48', '2021-04-08 12:31:48'),
(3, 'App\\Models\\User', 4, 'myapptoken', 'bcd2b89ce78a381b2657501ab8d047118c8a679f0f4b7b80beb7ff59711f764f', '[\"*\"]', NULL, '2021-04-08 12:42:16', '2021-04-08 12:42:16'),
(4, 'App\\Models\\User', 4, 'myapptoken', '62d59c3ab8a747cf968defb42c16dffc841d1a85238b8f5bc5b558014059b495', '[\"*\"]', NULL, '2021-04-08 12:59:37', '2021-04-08 12:59:37'),
(5, 'App\\Models\\User', 4, 'myapptoken', '77279e1383644b96f92b437fc7d205388c19430af420cfa5b6fd7f23f67d2316', '[\"*\"]', '2021-04-08 13:02:04', '2021-04-08 13:01:06', '2021-04-08 13:02:04');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ivana', 'ivana@email.com', NULL, '$2y$10$M7maHZvaLVvKJ/Qb83vNM.4WxwT0spTNiI1TR9y29/50XKqJDuTDe', NULL, '2021-04-06 12:58:18', '2021-04-06 12:58:18'),
(2, 'Ika', 'ika@email.com', NULL, '$2y$10$9tNmbeJSmfB7rzedTexncOOVPd5mRwqyxkHBrfeOxzS95EuBtOJ62', NULL, '2021-04-08 12:31:48', '2021-04-08 12:31:48'),
(3, 'Mile', 'mile@email.com', NULL, '$2y$10$TlYn5Na7ofVbOxh3cmDN5OqKVxO7DQc7xpYeoJNemmuVnNCK1xbZa', NULL, '2021-04-08 12:33:12', '2021-04-08 12:33:12'),
(4, 'Gordana', 'goca@email.com', NULL, '$2y$10$w1dXrF48pbCZpJa21Q9dPOL72NatRb1YkAqn5D3foHguAV3PemXKm', NULL, '2021-04-08 12:42:16', '2021-04-08 12:42:16'),
(5, 'CrbzA4IYKm', 'DP8vVT8xTa@gmail.com', NULL, '$2y$10$4Pelu.2P34L8c1Qmx1iY7uOnj7lLYmcjOmkWj0ma01ULikl5pQMQa', NULL, NULL, NULL),
(6, 'zaovljanac', 'zaovine@gmail.com', NULL, '$2y$10$BfXv/rdaaH56v34EXahGIeOzSZWmtStaPrXLydT4g9x18Kohi4UMK', NULL, '2021-04-09 15:51:32', '2021-04-09 15:51:32'),
(7, 'Ivana', 'ivana@gmail.com', NULL, '$2y$10$B/KQ0b4oePPLTSqr..4xwetLkxzutUH6rYbxXhFyitSAal.gnZ8Oq', NULL, '2021-05-12 11:09:14', '2021-05-12 11:09:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apartments_user_id_index` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
