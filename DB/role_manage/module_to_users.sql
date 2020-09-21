-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 07:12 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `module_to_users`
--

CREATE TABLE `module_to_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_to_users`
--

INSERT INTO `module_to_users` (`id`, `module_id`, `user_id`, `activity_id`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(130, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(132, 1, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(134, 1, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(136, 1, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(138, 2, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(140, 2, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(142, 2, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(144, 2, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(146, 3, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(148, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(150, 3, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(152, 3, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(154, 4, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(156, 4, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(158, 4, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(160, 4, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(162, 5, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(164, 5, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(166, 5, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(168, 5, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(170, 6, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(172, 6, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(174, 6, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(176, 6, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(178, 7, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(180, 7, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(182, 7, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(184, 7, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(215, 4, 5, 1, 1, NULL, NULL, NULL, NULL, NULL),
(281, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(282, 1, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(283, 1, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(284, 1, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(285, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(286, 2, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(287, 2, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(288, 2, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(289, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(290, 3, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(291, 3, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(292, 3, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(293, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(294, 4, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(295, 4, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(296, 4, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(297, 5, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(298, 5, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(299, 5, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(300, 5, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(301, 6, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(302, 6, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(303, 6, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(304, 6, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(305, 7, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(306, 7, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(307, 7, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(308, 7, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(309, 8, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(310, 8, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(311, 8, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(312, 8, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(313, 8, 1, 8, 1, NULL, NULL, NULL, NULL, NULL),
(314, 9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(315, 9, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(316, 9, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(317, 9, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(318, 9, 1, 8, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module_to_users`
--
ALTER TABLE `module_to_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module_to_users`
--
ALTER TABLE `module_to_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
