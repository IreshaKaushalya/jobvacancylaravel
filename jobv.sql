-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 06:18 PM
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
-- Database: `jobv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0b5ed025495008a307f6b06dd1e4cce2', 'i:1;', 1722358059),
('0b5ed025495008a307f6b06dd1e4cce2:timer', 'i:1722358059;', 1722358059),
('71dd6ec7923c8a1697b013143805b73f', 'i:1;', 1721846460),
('71dd6ec7923c8a1697b013143805b73f:timer', 'i:1721846460;', 1721846460),
('c1dfd96eea8cc2b62785275bca38ac261256e278', 'i:1;', 1721834985),
('c1dfd96eea8cc2b62785275bca38ac261256e278:timer', 'i:1721834985;', 1721834985),
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1722270791),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1722270791;', 1722270791);

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
-- Table structure for table `companyphotos`
--

CREATE TABLE `companyphotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companyphotos`
--

INSERT INTO `companyphotos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1721898945.png', '2024-07-25 03:45:45', '2024-07-25 03:45:45'),
(2, '1721900855.png_1686812423552', '2024-07-25 04:17:35', '2024-07-25 04:17:35'),
(3, '1721900866.jpg', '2024-07-25 04:17:46', '2024-07-25 04:17:46'),
(4, '1721900873.jpg', '2024-07-25 04:17:53', '2024-07-25 04:17:53'),
(5, '1721900881.jpg', '2024-07-25 04:18:01', '2024-07-25 04:18:01'),
(6, '1721900894.jpg', '2024-07-25 04:18:14', '2024-07-25 04:18:14'),
(7, '1721900927.webp', '2024-07-25 04:18:47', '2024-07-25 04:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(7, 'iresha kaushalya', 'ireshakaushalya99@gmail.com', 'gfvb', 'fhgbbn', '2024-07-25 13:50:02', '2024-07-25 13:50:02'),
(8, 'iresha kaushalya', 'ireshakaushalya99@gmail.com', 'njob', 'nj i', '2024-07-27 13:58:10', '2024-07-27 13:58:10'),
(9, 'iresha kaushalya', 'ireshakaushalya99@gmail.com', 'dfg', 'sasas', '2024-07-27 13:58:30', '2024-07-27 13:58:30'),
(10, 'iresha kaushalya', 'ireshakaushalya99@gmail.com', 'ehuvth', 'by34w', '2024-07-29 10:39:52', '2024-07-29 10:39:52'),
(11, 'jhgjhg', 'hqwhh@gamail.com', 'fhhgh1456', '789454354144154', '2024-07-29 10:41:16', '2024-07-29 10:41:16');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `jobtype` varchar(255) DEFAULT NULL,
  `open` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `jobtype`, `open`, `end`, `phone`, `email`, `qualification`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Lkcareers', 'BA', '2024-07-24', '2024-08-24', '0707001110', 'lkcareers@gmail.com', NULL, '1721817319.jpg', '2024-07-23 02:55:02', '2024-07-24 05:05:19'),
(3, 'Phyxle', 'IT', '2024-07-16', '2024-09-07', '0762535186', 'phyxle@gmail.com', 'Bachelor\'s degree in Graphic Design, Interaction Design, Human-Computer Interaction, or related field\r\n\r\nUX/UI Design  \r\n 1st Floor, No 15, Station', '1721723291.jpg', '2024-07-23 02:58:11', '2024-07-23 02:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job_role` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincod` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `upload` varchar(255) DEFAULT NULL,
  `status` varbinary(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `first_name`, `last_name`, `email`, `job_role`, `address`, `city`, `pincod`, `date`, `upload`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'kasauni', 'kaushalya', 'ireshakaushalya99@gmail.com', NULL, 'dambulla rodad ,kandy', 'dambulla', '2100', '2022-10-24', NULL, 0x417070726f766564, NULL, '2024-07-24 00:51:00', '2024-07-24 03:58:52'),
(3, 'iresha', 'chandrarthna', 'ireshakaushalya99@gmail.com', 'Phyxle', 'dambulla rodad ,kandy', 'dambulla', '8100', '2022-10-24', NULL, 0x417070726f766564, NULL, '2024-07-24 00:58:41', '2024-07-24 03:58:57'),
(4, 'asery', 'ngd', 'sett99@gmail.com', NULL, 'dambulla  ,kandy', 'math', '210045455558', NULL, NULL, 0x496e2050726f6772657373, NULL, '2024-07-24 13:44:05', '2024-07-24 13:44:05'),
(5, 'asery', 'ngd', 'sett99@gmail.com', NULL, 'dambulla  ,kandy', 'math', '210045455558', NULL, NULL, 0x496e2050726f6772657373, NULL, '2024-07-24 13:44:50', '2024-07-24 13:44:50'),
(6, 'sadte', 'n dcsnbh', 'hgu99@gmail.com', 'Lkcareers', 'jhjgh', 'ghtg', '10', NULL, NULL, 0x496e2050726f6772657373, NULL, '2024-07-24 13:47:27', '2024-07-24 13:47:27'),
(7, 'sandu', 'kaushalya', 'sandu99@gmail.com', 'Lkcareers', 'kekirawa', 'anuradhapura', '3100', NULL, NULL, 0x496e2050726f6772657373, NULL, '2024-07-24 13:52:25', '2024-07-24 13:52:25'),
(8, 'moda', 'geni mage', 'modi@iresha.com', 'Lkcareers', 'dambulla rodad ,kandy', 'dambulla', '2100', '2022-10-24', '1721849891.pdf', 0x496e2050726f6772657373, NULL, '2024-07-24 14:08:11', '2024-07-24 14:08:11'),
(9, 'iresha', 'kasuni', 'ireshakaushalya99@gmail.com', 'Phyxle', 'dambulla rodad ,kandy', 'dambulla', '210025', '2022-10-24', '1721908921.pdf', 0x496e2050726f6772657373, NULL, '2024-07-25 06:32:01', '2024-07-25 06:32:01');

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
(4, '2024_07_22_093229_add_two_factor_columns_to_users_table', 1),
(5, '2024_07_22_093249_create_personal_access_tokens_table', 1),
(6, '2024_07_23_072136_create_jobs_table', 2),
(7, '2024_07_24_043856_create_job_applications_table', 3),
(8, '2024_07_24_162000_create_notifications_table', 4),
(9, '2024_07_25_084608_create_companyphotos_table', 5),
(10, '2024_07_25_113858_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('c7888DLE40SGKiG6Mtu3ObUTA8lLfwq8IrVcPpuH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUG55T0Q0NnBtczZaNEZKcHg0c0tmcm9yNlB0cmdrYmo3ZW9yUWZPdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiR4R2NOYS5xb1VDelgzZnVYeS9vUjFPdkxyMEtXR2JkVUttWnBweXVaVXBEdTNhQTJHUnIwQyI7fQ==', 1722357969),
('JS2dwUHEpGt0rpxRPUhwVWu61wsBCJdQ2HXpPcEI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWFUR0FCdWNTamhlZ1lJZFJ0R0thNnU5Zm9ld0hTMUZLeGoyUUN5RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722410658),
('QmYHYUUHouLJzlNHm2FNiGcb2v5IARbqiQH7H1uF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkFPUEhzTUV5TVVPSU00bXV0S05xb1dBREpvRUZQQ3lLZUc5cUhDZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1722358055);

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
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0762535186', 'dambulla', '0', '2024-07-24 15:32:41', '$2y$12$xGcNa.qoUCzX3fuXy/oR1OvLr0KWGbdUKmZppyuZUpDu3aA2GRr0C', NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-22 04:30:02', '2024-07-22 04:30:02'),
(2, 'admin', 'admin@gmail.com', '0664317171', 'colombo', '1', '2024-07-24 15:33:56', '$2y$12$5Xu4SyOr0OfPJFZZ9xY9eubmpRnE.Rn5a/fpCzR3RmC6GK3FVu5p2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-22 04:30:34', '2024-07-22 04:30:34'),
(6, 'iresha kaushalya', 'ireshakaushalya99@gmail.com', '0664317171', 'dambulla rodad', '0', '2024-07-24 09:58:45', '$2y$12$AYtjUwSrfbeNZ5VVYqlG0eTAqIxLhggVrIQe9oO7D6WatIOdwnm5i', NULL, NULL, NULL, 'bSZIQjmy5fp6zZm50wLHt6nx4x5YvFYqdowDvRHrshWBS65l3cTKsT9sa98u', NULL, NULL, '2024-07-24 09:56:45', '2024-07-24 10:10:54');

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
-- Indexes for table `companyphotos`
--
ALTER TABLE `companyphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `companyphotos`
--
ALTER TABLE `companyphotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
