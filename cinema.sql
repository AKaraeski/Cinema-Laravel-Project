-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 04:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `name`, `address`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Galaxy', 'Luxor - Train Station', '1.png', NULL, NULL),
(2, 'Gawhara', 'Luxor - luxor Temple', '4.png', NULL, NULL),
(3, 'Metro', 'Luxor - Karnak Temple', '2.png', NULL, NULL),
(4, 'Arkan', 'Luxor - Train Station', '5.jpg', NULL, NULL),
(5, 'plaza', 'Luxor - Train Station', '3.png', NULL, NULL),
(6, 'Luxorito', 'Luxor - Train Station', '6.jpg', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_081631_create_movies_table', 1),
(6, '2023_05_24_090924_create_suggestions_table', 2),
(7, '2023_05_24_091600_create_suggestions_table', 3),
(8, '2023_05_24_192045_create_cinemas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `director` varchar(50) DEFAULT NULL,
  `rate` double NOT NULL,
  `language` varchar(55) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `poster` varchar(100) DEFAULT NULL,
  `translate` varchar(100) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `director`, `rate`, `language`, `kind`, `category`, `time`, `banner`, `poster`, `translate`, `trailer`, `created_at`, `updated_at`) VALUES
(1, 'Avatar', 'keanu Rieves', 7.6, 'UNITED-STATE', 'fantasy', 'PG-13\r\n', '3h 20m\r\n', '1_Avatar.jpg', 'avatar.jpg', 'Arabic', 'Avatar_ The Way of Water _ Official Trailer.mp4', NULL, NULL),
(2, 'john wick chapter 4', 'keanu Rieves', 8.4, 'UNITED-STATE', 'action', 'PG-13\r\n', '3h\r\n', '2_john wick.jpg', 'john_wick_chapter_4.jpg', 'Arabic', 'John Wick_ Chapter 4 (2023) Final Trailer – Keanu Reeves, Donnie Yen, Bill Skarsgård.mp4', NULL, NULL),
(3, 'The Dark Knight', 'keanu Rieves', 9.1, 'UNITED-STATE', 'action', 'PG-13\r\n', '3h\r\n', '3_the dark knight.jpg', 'dark_knight_ver3.jpg', 'Arabic', 'The Dark Knight _ Official Trailer _ Warner Bros. Middle East.mp4', NULL, NULL),
(4, 'The Amazing Spider-Man 2', 'keanu Rieves', 7.2, 'UNITED-STATE', 'action/Drama', 'PG-13\r\n', '2h\r\n', '5_The Amazing Spider-Man 2.jpg', 'amazing_spiderman_2.jpg', 'Arabic', 'THE AMAZING SPIDER-MAN 2 - Official Trailer (HD).mp4', NULL, NULL),
(5, 'Thor Ragnarok', 'keanu Rieves', 7.3, 'UNITED-STATE', 'action', 'PG-13\r\n', '1h 45m\r\n', '6_Thor Ragnarok.png', 'thor_ragnarok_ver2.jpg', 'Arabic', 'Thor_ Ragnarok Teaser Trailer [HD].mp4', NULL, NULL),
(6, 'The Dark Knight Rises', 'keanu Rieves', 8.2, 'UNITED-STATE', 'action', 'PG-13\r\n', '2h 30m\r\n', '8_the-dark-knight-rises.png', 'dark_knight_rises.jpg', 'Arabic', 'The Dark Knight Rises Official Movie Trailer Christian Bale, Batman Movie (2012) HD.mp4', NULL, NULL),
(7, 'The Fabelmans', 'keanu Rieves', 8, 'UNITED-STATE', 'drama', '+18\r\n', '1h 50m\r\n', '9_The Fabelmans.jpg', 'fabelmans.jpg', 'Arabic', 'The Fabelmans _ Official Trailer 2 [HD].mp4', NULL, NULL);

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
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(64) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
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
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
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
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
