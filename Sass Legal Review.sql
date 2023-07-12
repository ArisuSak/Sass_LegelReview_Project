-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 06, 2023 at 03:55 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `front_end_legal`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_subject` varchar(255) DEFAULT NULL,
  `contact_message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact_read` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `created_at`, `updated_at`, `contact_read`) VALUES
(2, 'sovannsak', 'youseemesak@gmail.com', 'test', 'qq', '2023-06-28 05:18:54', '2023-07-06 01:24:27', 1),
(3, 'sovannsak', 'youseemesak@gmail.com', 'test', 'qq', '2023-06-28 05:19:12', '2023-07-06 04:50:21', 1),
(4, 'sovannsak', 'youseemesak@gmail.com', 'test', 'kkk', '2023-06-28 05:20:52', '2023-06-28 05:20:52', 0),
(5, 'sovannsak', 'youseemesak@gmail.com', 'test', 'ww', '2023-06-28 05:22:32', '2023-06-28 05:22:32', 0),
(6, 'sovannsak', 'youseemesak@gmail.com', 'test', 'work pls', '2023-06-28 05:22:46', '2023-06-28 05:22:46', 0),
(7, 'sovannsak', 'youseemesak@gmail.com', 'test', 'work pls', '2023-06-28 05:23:17', '2023-06-28 05:23:17', 0),
(8, 'sovannsak', 'youseemesak@gmail.com', 'test', 'work pls', '2023-06-28 05:23:34', '2023-06-28 05:23:34', 0),
(9, 'sovannsak', 'youseemesak@gmail.com', 'wwwwww', 'www', '2023-06-28 05:23:45', '2023-06-28 05:23:45', 0),
(10, 'sovannsak', 'youseemesak@gmail.com', 'wwwwww', 'www', '2023-06-28 05:24:02', '2023-06-28 05:24:02', 0),
(11, 'sovannsak', 'youseemesak@gmail.com', 'test', 'qq', '2023-06-28 05:24:08', '2023-06-28 05:24:08', 0),
(12, 'sovannsak', 'youseemesak@gmail.com', 'test', '1213', '2023-06-28 05:27:36', '2023-06-28 05:27:36', 0),
(13, 'sovannsak', 'youseemesak@gmail.com', 'test', '1213', '2023-06-28 05:28:11', '2023-06-28 05:28:11', 0),
(14, 'sovannsak', 'youseemesak@gmail.com', 'test', '1213', '2023-06-28 05:29:10', '2023-06-28 05:29:10', 0),
(15, 'sovannsak', 'youseemesak@gmail.com', 'test', 'qqq', '2023-06-28 05:31:47', '2023-06-28 05:31:47', 0),
(16, 'sovannsak', 'youseemesak@gmail.com', 'test', '12e31', '2023-06-28 05:33:41', '2023-06-28 05:33:41', 0),
(17, 'sovannsak', 'youseemesak@gmail.com', 'test', 'jjj', '2023-06-28 05:35:11', '2023-06-28 05:35:11', 0),
(18, 'sovannsak', 'youseemesak@gmail.com', 'test', 'ww', '2023-06-28 05:36:23', '2023-06-28 05:36:23', 0),
(19, 'sovannsak', 'youseemesak@gmail.com', 'wwwwww', 'this work?', '2023-06-28 05:36:37', '2023-06-28 05:36:37', 0),
(20, 'sovannsak', 'youseemesak@gmail.com', 'test', 'home', '2023-06-28 05:37:48', '2023-07-06 01:24:34', 0),
(21, 'sovannsak', 'youseemesak@gmail.com', 'test', 'sss', '2023-06-28 05:38:54', '2023-07-03 09:20:47', 1),
(24, 'sovannsak', 'youseemesak@gmail.com', 'test', 'qq', '2023-07-06 04:27:38', '2023-07-06 04:27:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firms`
--

CREATE TABLE `firms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firm_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firm_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firm_phonenumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firm_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firm_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firm_information` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `firm_active` tinyint(1) NOT NULL DEFAULT '1',
  `firm_file_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firm_file_public_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `firms`
--

INSERT INTO `firms` (`id`, `created_at`, `updated_at`, `firm_name`, `firm_email`, `firm_phonenumber`, `firm_address`, `firm_file`, `firm_information`, `user_id`, `firm_active`, `firm_file_url`, `firm_file_public_id`) VALUES
(1, '2023-06-15 07:13:38', '2023-07-03 09:36:24', 'Habana Firm Company', 'abc@gmail.com', '028184871', 'phnompenh,Cambodia', 'Sovannsak Yours - Pratical Class Report.pdf', 'our company', NULL, 1, NULL, NULL),
(2, '2023-06-15 20:48:17', '2023-07-06 01:24:21', 'Habana Firm Company', 'abc@gmail.com', '12', 'phnompenh,Cambodia', 'Sovannsak Yours - Pratical Class Report.pdf', '123213', NULL, 0, NULL, NULL),
(3, '2023-06-15 20:49:14', '2023-06-15 20:49:14', 'Habana Firm Company', 'abc@gmail.com', '12', 'phnompenh,Cambodia', 'Sovannsak Yours - Pratical Class Report.pdf', '123213', NULL, 1, NULL, NULL),
(4, '2023-06-15 20:49:48', '2023-06-15 20:49:48', 'Habana Firm Company', 'abc@gmail.com', '12', 'phnompenh,Cambodia', 'Sovannsak Yours - Pratical Class Report.pdf', '123213', NULL, 1, NULL, NULL),
(6, '2023-06-15 21:37:20', '2023-06-15 21:37:20', 'Habana Firm Company', 'abc@gmail.com', '12', 'phnompenh,Cambodia', 'Sovannsak Yours - Pratical Class Report.pdf', '2131', NULL, 1, NULL, NULL),
(7, '2023-06-15 21:38:08', '2023-06-15 21:38:08', 'Habana Firm Company', 'abc@gmail.com', '12', 'phnompenh,Cambodia', 'Sovannsak Yours - Pratical Class Report.pdf', '2131', NULL, 1, NULL, NULL),
(8, '2023-06-15 21:39:03', '2023-06-15 21:39:03', 'Habana Firm Company', 'abc@gmail.com', '12', 'phnompenh,Cambodia', 'Sovannsak Yours - Pratical Class Report.pdf', '2131', NULL, 1, NULL, NULL),
(10, '2023-06-19 20:42:46', '2023-06-19 20:42:46', 'Habana Firm Company', 'abc@gmail.com', '123', '1313', 'Staff Management (2).pdf', '1313', NULL, 1, NULL, NULL),
(11, '2023-06-19 20:48:29', '2023-06-19 20:48:29', 'sak', 'abc@gmail.com', '123', 'phnompenh,Cambodia', 'Staff Management (2).pdf', '12312', NULL, 1, NULL, NULL),
(12, '2023-06-19 20:48:50', '2023-06-19 20:48:50', 'Habana Firm Company', 'abc@gmail.com', '123', 'phnompenh,Cambodia', 'Staff Management (2).pdf', '2131', NULL, 1, NULL, NULL),
(13, '2023-06-19 20:51:14', '2023-06-19 20:51:14', 'Habana Firm Company', 'abc@gmail.com', '123', 'phnompenh,Cambodia', 'Staff Management (2).pdf', 'eqee', NULL, 1, NULL, NULL),
(14, '2023-06-19 20:55:04', '2023-06-19 20:55:04', 'Habana Firm Company', 'abc@gmail.com', '123', 'phnompenh,Cambodia', 'Staff Management (2).pdf', '1234rf', NULL, 1, NULL, NULL),
(15, '2023-06-19 20:58:02', '2023-06-19 20:58:02', 'sak', 'abc@gmail.com', '12', 'phnompenh,Cambodia', 'Staff Management (2).pdf', '321', NULL, 1, NULL, NULL),
(16, '2023-06-20 11:04:31', '2023-06-20 11:04:31', 'sak', 'abc@gmail.com', '123', 'phnompenh,Cambodia', '1 day left(1).png', 'ewqewqeqe', NULL, 1, NULL, NULL),
(17, '2023-06-20 11:04:47', '2023-06-20 11:04:47', 'Habana Firm Company', 'abc@gmail.com', '123', 'phnompenh,Cambodia', '1 day left(1).png', 'qewqeqeq', NULL, 1, NULL, NULL),
(18, '2023-06-20 11:06:34', '2023-06-20 11:06:34', 'Habana Firm Company', 'abc@gmail.com', '123', 'phnompenh,Cambodia', '1 day left(1).png', 'dadwnww', NULL, 1, NULL, NULL),
(19, '2023-06-20 11:07:45', '2023-06-20 11:07:45', 'Habana Firm Company', 'abc@gmail.com', '123', 'phnompenh,Cambodia', 'PHP-Laravel-Lab-05-Middlware-API.pdf', 'dwd', NULL, 1, NULL, NULL),
(20, '2023-06-20 11:10:18', '2023-06-20 11:10:18', 'Habana Firm Company', 'abc@gmail.com', '1234', '132', '1 day left(1).png', '131232', NULL, 1, NULL, NULL),
(21, '2023-06-20 11:21:11', '2023-06-20 11:21:11', 'Habana Firm Company', 'abc@gmail.com', '1234', 'jwejrwejhuiweijgoewjkfewnf', '1 day left(1).png', 'jjj', NULL, 1, NULL, NULL),
(22, '2023-06-20 11:25:26', '2023-06-20 11:25:26', 'Habana Firm Company', 'abc@gmail.com', '123', 'jwejrwejhuiweijgoewjkfewnf', '1 day left(1).png', 'eee', NULL, 1, NULL, NULL),
(23, '2023-06-20 11:43:05', '2023-06-20 11:43:05', 'Habana Firm Company', 'abc@gmail.com', '1234', 'jwejrwejhuiweijgoewjkfewnf', '1 day left(1).png', '131', NULL, 1, NULL, NULL),
(31, '2023-07-02 07:43:51', '2023-07-03 09:04:09', 'Habana Firm Company', 'abc@gmail.com', '123', 'phnompenh,Cambodia', 'DSC04878.ARW', 'sss', 31, 1, NULL, NULL),
(32, '2023-07-04 07:15:14', '2023-07-04 07:15:14', 'Habana Firm Company', 'abc@gmail.com', '12424', 'phnompenh,Cambodia', '7. Prioritazation.pdf', '2131', 36, 1, NULL, NULL),
(33, '2023-07-06 04:44:43', '2023-07-06 04:44:43', 'firm', 'firm@gmail.com', '123344', 'phnompenh', 'DSC04878 (1).JPG', 'newfirm', 41, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lawyer_firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_phonenumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_information` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `created_at`, `updated_at`, `lawyer_firstname`, `lawyer_lastname`, `lawyer_phonenumber`, `lawyer_email`, `lawyer_address`, `lawyer_file`, `lawyer_information`) VALUES
(1, '2023-06-15 07:14:09', '2023-06-15 07:14:09', 'sak', 'yours', '0123141', 'adnn@fmai.mc', 'dadadd,wdqw,d', 'Sovannsak Yours - Pratical Class Report.pdf', '12313'),
(2, '2023-06-16 19:36:07', '2023-06-16 19:36:07', 'sak', 'yours', '00123141 41', 'yousersersjfj@gmail.com', 'dadadd,wdqw,d', 'Staff Management (2).pdf', 'sdfd');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2023_06_12_083551_create_firms_table', 1),
(38, '2023_06_13_091434_create_lawyers_table', 1),
(39, '2023_06_14_145916_laratrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('syours@paragoniu.edu.kh', '$2y$10$hsXQQQGmGCr0BALuJWbRwe7K7VyoPlIPdUweCFRO6XbyV/xpI1dvy', '2023-06-15 08:05:48'),
('youseemesak2003@gmail.com', '$2y$10$lqo6eH8aAK8rvh5CJX9M3uttpKxzTSbo22JarPp.c4UO3WoGpblpC', '2023-07-02 09:35:48'),
('vansoywangdu@gmail.com', '$2y$10$ZuuZzSLFLrK5.TfflwcTU.ndDCh3ZLdn4KXNBQD2kpeDhVtAEYCRi', '2023-07-03 09:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(2, 'users-read', 'Read Users', 'Read Users', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(3, 'users-update', 'Update Users', 'Update Users', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2023-07-02 07:15:00', '2023-07-02 07:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(9, 3),
(10, 3),
(9, 4),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 43, 'registration-token', '4a8b1a58ef87e496e94caa248fea6f5423a7121d1bd482539691c26048407de4', '[\"*\"]', NULL, '2023-07-06 04:59:38', '2023-07-06 04:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `firm_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `firm_id`, `rating`, `comment`, `created_at`, `updated_at`, `user_id`) VALUES
(1, NULL, 4, NULL, '2023-06-22 07:53:37', '2023-06-22 07:53:37', NULL),
(2, NULL, 5, NULL, '2023-06-22 07:57:57', '2023-06-22 07:57:57', NULL),
(3, NULL, 3, 'ww', '2023-06-22 08:08:08', '2023-06-22 08:08:08', NULL),
(5, 1, 5, '5 star', '2023-06-22 08:34:53', '2023-06-22 08:34:53', NULL),
(6, 1, 5, 'ff', '2023-06-22 08:46:07', '2023-06-22 08:46:07', NULL),
(8, 2, 4, 'service amm', '2023-06-22 08:51:29', '2023-06-22 08:51:29', NULL),
(9, 2, 3, 'dd', '2023-06-22 08:51:55', '2023-06-22 08:51:55', NULL),
(10, 2, 4, 'www', '2023-06-22 08:53:21', '2023-06-22 08:53:21', NULL),
(16, 7, 5, 'the best', '2023-07-02 07:44:11', '2023-07-02 07:44:11', 31),
(17, 32, 5, 'best service', '2023-07-05 07:31:51', '2023-07-05 07:31:51', 36),
(18, 32, 5, 'great service ever', '2023-07-05 07:32:20', '2023-07-05 07:32:20', 36),
(19, 32, 3, 'good but not great enough', '2023-07-05 07:35:16', '2023-07-05 07:35:16', 36),
(20, NULL, NULL, NULL, '2023-07-06 04:27:49', '2023-07-06 04:27:49', NULL),
(21, 1, 5, 'good', '2023-07-06 04:40:21', '2023-07-06 04:40:21', 40),
(22, NULL, NULL, NULL, '2023-07-06 05:01:43', '2023-07-06 05:01:43', NULL),
(23, NULL, NULL, NULL, '2023-07-06 05:01:53', '2023-07-06 05:01:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(2, 'super_admin', 'Super Admin', 'Super Admin', '2023-07-02 07:15:00', '2023-07-02 07:15:00'),
(3, 'firm_provider', 'Firm Provider', 'Firm Provider', '2023-07-02 07:15:01', '2023-07-02 07:15:01'),
(4, 'user', 'User', 'User', '2023-07-02 07:15:01', '2023-07-02 07:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 29, 'App\\Models\\User'),
(1, 32, 'App\\Models\\User'),
(1, 42, 'App\\Models\\User'),
(1, 43, 'App\\Models\\User'),
(2, 30, 'App\\Models\\User'),
(3, 31, 'App\\Models\\User'),
(3, 36, 'App\\Models\\User'),
(3, 37, 'App\\Models\\User'),
(3, 38, 'App\\Models\\User'),
(3, 39, 'App\\Models\\User'),
(3, 41, 'App\\Models\\User'),
(4, 33, 'App\\Models\\User'),
(4, 34, 'App\\Models\\User'),
(4, 35, 'App\\Models\\User'),
(4, 40, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_detail` text,
  `firm_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_detail`, `firm_id`, `created_at`, `updated_at`) VALUES
(12, 'test service', 'The Practice Group Aviation is responsible for, inter alia, the preparation, reviewing and execution of aircraft operating lease agreements (Wet and Dry Lease),......', 15, '2023-06-22 10:25:00', '2023-06-22 10:25:00'),
(13, '15', '15', 15, '2023-06-22 10:25:18', '2023-06-22 10:25:18'),
(17, '17', '17', NULL, '2023-06-22 11:24:24', '2023-06-22 11:24:24'),
(18, '17', '17', NULL, '2023-06-22 11:24:35', '2023-06-22 11:24:35'),
(19, '17', '17', NULL, '2023-06-22 11:25:04', '2023-06-22 11:25:04'),
(20, '17', '17', NULL, '2023-06-22 11:28:56', '2023-06-22 11:28:56'),
(26, 'test service', 'The Practice Group Aviation is responsible for, inter alia, the preparation, reviewing and execution of aircraft operating lease agreements (Wet and Dry Lease),......', 17, '2023-06-22 11:51:12', '2023-06-22 11:51:12'),
(28, 'test service', 'The Practice Group Aviation is responsible for, inter alia, the preparation, reviewing and execution of aircraft operating lease agreements (Wet and Dry Lease),......', 17, '2023-06-22 11:54:40', '2023-06-22 11:54:40'),
(29, 'test service', 'The Practice Group Aviation is responsible for, inter alia, the preparation, reviewing and execution of aircraft operating lease agreements (Wet and Dry Lease),......', 17, '2023-06-22 11:54:44', '2023-06-22 11:54:44'),
(39, 'test service', 'The Practice Group Aviation is responsible for, inter alia, the preparation, reviewing and execution of aircraft operating lease agreements (Wet and Dry Lease),......', 31, '2023-07-02 07:43:57', '2023-07-02 07:43:57'),
(40, 'test service', 'test', 32, '2023-07-04 07:15:47', '2023-07-05 07:34:47'),
(41, 'test service', 'hi', 32, '2023-07-05 07:34:07', '2023-07-05 07:34:07'),
(42, 'technology', 'we provide the best technology service ever', 32, '2023-07-05 07:34:34', '2023-07-05 07:34:34'),
(43, 'test service_19', 'hfa', 8, '2023-07-06 04:27:21', '2023-07-06 04:27:21'),
(44, 'test service_19', 'hi', 1, '2023-07-06 04:27:44', '2023-07-06 04:27:44'),
(45, 'good', 'good', 33, '2023-07-06 04:45:07', '2023-07-06 04:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `has_submitted_form` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `has_submitted_form`, `active`) VALUES
(29, 'Sovannsak Yours', 'syours@paragoniu.edu.kh', NULL, '$2y$10$avWHyoePrSG/dm8pSF/DdO.7/XthaW/BHFI23wayPHvFA2nne4.5u', NULL, '2023-07-02 07:18:29', '2023-07-02 07:18:29', 0, 1),
(30, 'Sovannsak Yours', 'youseemesak2003@gmail.com', NULL, '$2y$10$ywVA2tNR8l5gzriDxaQ1lu3ou5Y8V4ZGsz1fCWL1Oh2a/zfjFyuly', NULL, '2023-07-02 07:25:07', '2023-07-02 07:25:07', 0, 1),
(31, 'Sovannsak Yours', 'z@gmail.com', NULL, '$2y$10$OuKLwq1ZYJReLig4WgQxquZHG5n8F2Dtyoh1ISxHrRiP1hf4inFiO', NULL, '2023-07-02 07:43:36', '2023-07-02 07:43:51', 1, 1),
(32, 'Sovannsak Yours', 'abc@gmail.com', NULL, '$2y$10$lbv0ZOZ98R2j51h6nmsmbuBrn.Ee/132I.uC6AxspV96Ji3XHHRHe', NULL, '2023-07-02 08:35:30', '2023-07-06 04:18:57', 0, 0),
(33, 'Sovannsak Yours', '123@gmail.com', NULL, '$2y$10$Sy8IScCi5crwHHNG4FqxQuYJx1QqsQdOTU4E0qWzT7TJBbcA5JJoO', NULL, '2023-07-03 09:08:09', '2023-07-05 20:50:10', 0, 1),
(34, 'Sovannsak Yours', 'vansoywangdu@gmail.com', NULL, '$2y$10$hWRAV/K7OIELxrocIx7dP.oKUYBmYTZtwAmyex9D6SWV35bceZEte', NULL, '2023-07-03 09:55:16', '2023-07-05 20:50:13', 0, 0),
(35, 'Sovannsak Yours', 'vannsoywangdu@gmail.com', NULL, '$2y$10$ggDhMoHKRCkJmqxaCAEZ/.7ztazU46fAse5rCbqEjFdq0zH6HVISW', 'B5gUdOPn4VwhUleQ26tbMlTesq9XZaJlGDw46CFAJcECtWMeGzOnhF983dki', '2023-07-03 09:57:24', '2023-07-05 20:50:12', 0, 1),
(36, 'Sovannsak Yours', 'qwe@gmail.com', NULL, '$2y$10$C5a4rnDQhZFBbSa4Zfmu/u3awT6L2/hC9d9Ns/XMscOqYSCxx.Ry.', NULL, '2023-07-04 07:14:30', '2023-07-05 08:15:30', 1, 0),
(37, 'Sovannsak Yours', 'tt@gmail.com', NULL, '$2y$10$X1FNMc6mjCNRcyVmZROBFu4SWl1Ca/bF0xOEKrkidi9UGXUx7iNIG', NULL, '2023-07-05 03:56:25', '2023-07-05 03:56:25', 0, 1),
(38, 'sak', 'guhh@paragoniu.edu.kh', NULL, '$2y$10$Xrwzz4FPF1PkFXKls5pW/uYEX9WQ39edRNdWZ5upiEMdrR5G/6CHq', NULL, '2023-07-06 00:18:06', '2023-07-06 00:18:06', 0, 1),
(39, 'Sak Spring MVC', 'sakkcanva@gmail.com', NULL, '$2y$10$Uwbts6LWzWnLj5OADS29MeN8c4UIWhQtPKR6nM9SIVo7eX9A94eT2', NULL, '2023-07-06 04:16:12', '2023-07-06 04:16:12', 0, 1),
(40, 'pana', 'panha@gmail.xom', NULL, '$2y$10$/XxVNVrlZZnvK7Sd9XHYauYbcwy9QelPcEbhUoxNxbb6Ksbix6W2q', NULL, '2023-07-06 04:39:21', '2023-07-06 04:39:21', 0, 1),
(41, 'firm', 'firm@gmail.com', NULL, '$2y$10$LmBuAiyvuNS2Pn3d.jZaU.0BpoLU56eXgNr0derJB5POcnJa6OTru', NULL, '2023-07-06 04:43:50', '2023-07-06 04:44:43', 1, 1),
(42, 'sak', 'long@gmail.com', NULL, '$2y$10$XMEruPYF25m3U5YiafiVJ.H1IVWWZDhK.gPpRjEuWLnqid67z9lR6', NULL, '2023-07-06 04:51:26', '2023-07-06 04:51:26', 0, 1),
(43, 'Sopheaknita chea', 'dhhas@gmail.com', NULL, '$2y$10$Q7Poz5FZMvxrshbWs7k3vOR3/SCp6YQbv/tnRcZ1fGtwVxYouZW/q', NULL, '2023-07-06 04:59:38', '2023-07-06 04:59:38', 0, 1);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `firms`
--
ALTER TABLE `firms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_firms_users` (`user_id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firm_id` (`firm_id`),
  ADD KEY `fk_ratings_user` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firm_id` (`firm_id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firms`
--
ALTER TABLE `firms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `firms`
--
ALTER TABLE `firms`
  ADD CONSTRAINT `fk_firms_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `fk_ratings_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`firm_id`) REFERENCES `firms` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`firm_id`) REFERENCES `firms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
