-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2024 at 06:34 PM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darrenli_laravel.darren-lindsay.netmatters-scs.co.uk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Sony', 'info@sony.com', 'logos/aJthKZyq6sWocYhjfdTT3c3tkf9JkvhSvNSl30vc.png', 'sony.com', '2024-04-20 23:10:33', '2024-04-30 18:29:52'),
(2, 'Google', 'support@gmail.com', 'logos/nr93qPOgZs192I8ySBw7Gakea9YGW3muCTKmBsv5.jpg', 'google.com', '2024-04-20 23:10:33', '2024-04-30 15:29:35'),
(3, 'Apple', 'info@apple.com', 'logos/iTR44Z6vqrmjvFGo9CzNUW1XVtEGeTMzQEWuLRkn.webp', 'apple.com', '2024-04-20 23:10:33', '2024-04-30 15:22:06'),
(4, 'Microsoft', 'support@microsoft.com', 'logos/R6XAAU2VjGZNxXW0KPtX1kH8rlehPiYyV0GyYLcr.jpg', 'microsoft.com', '2024-04-20 23:10:33', '2024-04-30 18:27:25'),
(5, 'Samsung', 'info@samsung.com', 'logos/f4FuVTIYN5BcEDkDdJKwWXDsfgY7PqLWDkLJsbVK.jpg', 'samsung.com', '2024-04-20 23:10:33', '2024-04-30 15:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `company_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Verdie', 'Steuber', 1, 'alysha.dooley@example.com', '925.796.1444', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(2, 'Lupe', 'Swaniawski', 1, 'chanelle.gulgowski@example.org', '304-398-2232', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(3, 'Evelyn', 'Dietrich', 1, 'vcrooks@example.net', '+1 (484) 507-2013', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(4, 'Linnie', 'Steuber', 1, 'rempel.pete@example.org', '+1-281-544-8237', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(5, 'Arjun', 'Koss', 1, 'coy.crist@example.org', '+1.831.360.0121', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(6, 'Dena', 'Doyle', 1, 'juvenal.strosin@example.net', '1-405-748-8887', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(7, 'Israel', 'Baumbach', 1, 'tyreek.corkery@example.net', '+1.320.243.9827', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(8, 'Karelle', 'Mohr', 1, 'green.juliet@example.org', '+12707592645', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(9, 'Leopold', 'Kemmer', 1, 'estella71@example.org', '862.708.5611', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(10, 'Jermain', 'Gleichner', 1, 'hamill.raegan@example.net', '+14459236901', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(11, 'Ephraim', 'Gutmann', 2, 'vwehner@example.com', '1-334-265-8431', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(12, 'Kathleen', 'Runolfsson', 2, 'trevion96@example.com', '986-831-5716', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(13, 'Andre', 'Pagac', 2, 'ymedhurst@example.org', '+1-678-576-1302', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(14, 'Madie', 'Dibbert', 2, 'vjohnson@example.net', '743.507.1423', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(15, 'Chaz', 'Harvey', 2, 'jenkins.myah@example.com', '267-440-1521', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(16, 'Chesley', 'Kuhic', 2, 'stanton.lucie@example.org', '1-586-643-7831', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(17, 'Colin', 'Powlowski', 2, 'christelle.predovic@example.com', '(352) 337-1625', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(18, 'Clay', 'Casper', 2, 'hauck.elyssa@example.net', '1-630-267-3432', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(19, 'Donald', 'Denesik', 2, 'wiza.kole@example.com', '+1 (518) 790-6468', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(20, 'Davonte', 'Gutmann', 2, 'taufderhar@example.com', '+1-972-722-8566', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(21, 'Rachel', 'Parker', 3, 'rice.alexanne@example.com', '351.725.0674', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(22, 'Dasia', 'Cartwright', 3, 'boyle.araceli@example.org', '323-871-0915', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(23, 'Wilbert', 'Moore', 3, 'gracie.rohan@example.com', '1-864-436-5464', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(24, 'Agustina', 'Veum', 3, 'sean20@example.org', '314.322.7109', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(25, 'Greg', 'Ankunding', 3, 'malachi21@example.net', '667.933.2470', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(26, 'Brooke', 'Borer', 3, 'breynolds@example.com', '(380) 889-1093', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(27, 'Marlin', 'Schmeler', 3, 'vschneider@example.org', '534-505-7302', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(28, 'Catherine', 'Yost', 3, 'wunsch.verna@example.com', '+17408711714', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(29, 'Ellsworth', 'White', 3, 'jana.bergstrom@example.org', '351-775-4788', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(30, 'Lila', 'Smith', 3, 'stiedemann.edmund@example.org', '845-915-5727', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(31, 'Weston', 'Yost', 4, 'ronaldo75@example.org', '1-831-294-8496', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(32, 'Sallie', 'Klocko', 4, 'alessandra.mcclure@example.org', '240.903.8059', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(33, 'Precious', 'Schroeder', 4, 'ernie.blanda@example.com', '662-865-1520', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(34, 'Mazie', 'Kessler', 4, 'bo.haley@example.com', '+1 (763) 587-2710', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(35, 'Micheal', 'Goodwin', 4, 'tpollich@example.com', '423.538.6439', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(36, 'Waldo', 'Weissnat', 4, 'amacejkovic@example.org', '+1-283-390-8972', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(37, 'Carter', 'Jakubowski', 4, 'oconner.jeffry@example.org', '610.814.8365', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(38, 'Belle', 'Yost', 4, 'auer.braulio@example.org', '+1 (423) 831-6779', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(39, 'Francis', 'Borer', 4, 'xgutmann@example.net', '657.994.4469', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(40, 'Hayley', 'Kutch', 4, 'whammes@example.com', '630.696.6706', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(41, 'Ali', 'Johns', 5, 'romaguera.juliana@example.net', '+1.445.825.1286', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(42, 'Cecilia', 'Prosacco', 5, 'qprohaska@example.com', '564-742-1919', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(43, 'Ena', 'Schowalter', 5, 'jena89@example.net', '+19706026121', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(44, 'Korbin', 'Satterfield', 5, 'dstokes@example.net', '(423) 273-8434', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(45, 'Reyna', 'Weber', 5, 'reichel.rene@example.org', '1-650-594-2069', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(46, 'Rudy', 'Herzog', 5, 'cormier.natalie@example.net', '+1 (623) 203-0764', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(47, 'Karlie', 'Leannon', 5, 'lesley.will@example.net', '1-605-335-9709', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(48, 'Dax', 'Rippin', 5, 'lonny.ratke@example.net', '+18089483510', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(49, 'Arnoldo', 'Feil', 5, 'lind.clark@example.org', '+15869421548', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(50, 'Hobart', 'Daniel', 5, 'lawrence87@example.com', '364.557.6026', '2024-04-20 23:10:33', '2024-04-20 23:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_19_150824_create_companies_table', 1),
(5, '2024_04_19_150830_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@admin.com', '2024-04-20 23:10:33', '$2y$12$aEqviFsEFJNan3HP7iyf4.HpeT1By5CPEreCypIToTmRgo4h5i3.W', 'Wab0Vlu5alhwY9L65RqX5zHfkHVZO44dQoPfA5p5N5VJwbjx2OKNgaTLzXoB', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(2, 'user', 'Mrs. Paula Jast', 'beier.sven@example.org', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'WZ8epvGdDg', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(3, 'user', 'Christopher Block', 'nrogahn@example.net', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', '75OxnyNgNd', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(4, 'user', 'Miss Meagan Rohan MD', 'rowena98@example.org', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'j8V0kOAAEm', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(5, 'user', 'Madyson Olson MD', 'ulises.mertz@example.net', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'YuocnhZ8YS', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(6, 'user', 'Christa Hegmann', 'kassandra31@example.net', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'M5ST7IBK3M', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(7, 'user', 'Shaylee Greenholt', 'tfarrell@example.com', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'F3uMic38Iv', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(8, 'user', 'Mack Kunde V', 'casper.shanahan@example.com', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'KdMPdxCob5', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(9, 'user', 'Bennett Hane', 'leffertz@example.org', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'R8UGI8m4gg', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(10, 'user', 'Gennaro Bartell', 'rkunde@example.net', '2024-04-20 23:10:33', '$2y$12$NDiPt0wdWf20Zcv5xMuEu.R.9ExP3gDpO3frYak55WTM1LEk4.VEC', 'Ft9lHvNPhd', '2024-04-20 23:10:33', '2024-04-20 23:10:33'),
(12, 'user', 'Test User', 'test@example.com', NULL, '$2y$12$AOjijiwgzdgkxGd2cQywS.DTbHh0Uowrp8lJLbtQkCDSEgbrLak/m', NULL, '2024-04-29 09:52:21', '2024-04-30 15:39:32');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_company_id_foreign` (`company_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
