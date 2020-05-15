-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 03:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psychocare`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_mapping`
--

CREATE TABLE `chat_mapping` (
  `id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `psikiater_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_mapping`
--

INSERT INTO `chat_mapping` (`id`, `pasien_id`, `psikiater_id`, `created_at`, `updated_at`) VALUES
(2, 2, 3, '2020-05-13 02:59:50', '2020-05-13 02:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_17_104228_create_role_table', 1),
(4, '2020_04_17_104510_create_user_table', 1),
(5, '2020_05_05_113445_create_psikiater_table', 1),
(6, '2020_05_07_142526_create_websockets_statistics_entries_table', 1),
(7, '2020_05_12_152556_create_chat_mapping_table', 1),
(8, '2020_05_13_044824_create_pesan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `room_chat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `pesan`, `from`, `to`, `is_read`, `room_chat`, `created_at`, `updated_at`) VALUES
(1, 'hallo', 2, 3, 0, 2, '2020-05-13 03:01:19', '2020-05-13 03:01:19'),
(2, 'haii donita', 2, 3, 0, 2, '2020-05-13 03:01:43', '2020-05-13 03:01:43'),
(3, 'haii donn', 2, 3, 0, 2, '2020-05-13 03:19:07', '2020-05-13 03:19:07'),
(4, 'hallo beni', 3, 2, 0, 2, '2020-05-13 03:25:32', '2020-05-13 03:25:32'),
(5, 'hallo donita', 3, 2, 0, 2, '2020-05-13 04:39:06', '2020-05-13 04:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `psikiater`
--

CREATE TABLE `psikiater` (
  `id` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psikiater`
--

INSERT INTO `psikiater` (`id`, `tarif`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 250000, 3, '2020-05-13 02:58:09', '2020-05-13 02:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Pasien', NULL, NULL),
(3, 'Psikiater', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `telepon`, `foto`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'beathris', 'beathris', 'beathris@gmail.com', 'admin123', '085123456788', 'assets/photo/admin/IMG_20190328_000042.jpg', 1, NULL, NULL),
(2, 'Beni', 'beni', 'beni@gmail.com', 'admin123', '085123456788', 'assets/photo/pasien/IMG_20191010_124734.jpg', 2, NULL, NULL),
(3, 'Donita', 'donita', 'donita@gmail.com', 'admin123', '085932275405', 'assets/photo/psikiater/IMG_20190306_123846.jpg', 3, '2020-05-13 02:58:09', '2020-05-13 02:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_mapping`
--
ALTER TABLE `chat_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_mapping_pasien_id_foreign` (`pasien_id`),
  ADD KEY `chat_mapping_psikiater_id_foreign` (`psikiater_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_from_foreign` (`from`),
  ADD KEY `pesan_to_foreign` (`to`),
  ADD KEY `pesan_room_chat_foreign` (`room_chat`);

--
-- Indexes for table `psikiater`
--
ALTER TABLE `psikiater`
  ADD PRIMARY KEY (`id`),
  ADD KEY `psikiater_user_id_foreign` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_role_id_foreign` (`role_id`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_mapping`
--
ALTER TABLE `chat_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `psikiater`
--
ALTER TABLE `psikiater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_mapping`
--
ALTER TABLE `chat_mapping`
  ADD CONSTRAINT `chat_mapping_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `chat_mapping_psikiater_id_foreign` FOREIGN KEY (`psikiater_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_from_foreign` FOREIGN KEY (`from`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pesan_room_chat_foreign` FOREIGN KEY (`room_chat`) REFERENCES `chat_mapping` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesan_to_foreign` FOREIGN KEY (`to`) REFERENCES `user` (`id`);

--
-- Constraints for table `psikiater`
--
ALTER TABLE `psikiater`
  ADD CONSTRAINT `psikiater_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
