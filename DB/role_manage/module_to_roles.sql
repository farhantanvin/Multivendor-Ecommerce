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
-- Table structure for table `module_to_roles`
--

CREATE TABLE `module_to_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_to_roles`
--

INSERT INTO `module_to_roles` (`id`, `module_id`, `role_id`, `activity_id`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(81, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(82, 1, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(83, 1, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(84, 1, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(85, 2, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(86, 2, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(87, 2, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(88, 2, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(89, 3, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(90, 3, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(91, 3, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(92, 3, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(93, 4, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(94, 4, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(95, 4, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(96, 4, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(97, 5, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(98, 5, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(99, 5, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(100, 5, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(101, 6, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(102, 6, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(103, 6, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(104, 6, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(105, 6, 2, 5, 1, NULL, NULL, NULL, NULL, NULL),
(106, 6, 2, 6, 1, NULL, NULL, NULL, NULL, NULL),
(107, 7, 2, 1, 1, NULL, NULL, NULL, NULL, NULL),
(108, 7, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(109, 7, 2, 3, 1, NULL, NULL, NULL, NULL, NULL),
(110, 7, 2, 4, 1, NULL, NULL, NULL, NULL, NULL),
(176, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(177, 1, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(178, 1, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(179, 1, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(180, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(181, 2, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(182, 2, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(183, 2, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(184, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(185, 3, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(186, 3, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(187, 3, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(188, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(189, 4, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(190, 4, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(191, 4, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(192, 5, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(193, 5, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(194, 5, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(195, 5, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(196, 6, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(197, 6, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(198, 6, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(199, 6, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(200, 7, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(201, 7, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(202, 7, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(203, 7, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(204, 8, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(205, 8, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(206, 8, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(207, 8, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(208, 8, 1, 8, 1, NULL, NULL, NULL, NULL, NULL),
(209, 9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(210, 9, 1, 2, 1, NULL, NULL, NULL, NULL, NULL),
(211, 9, 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(212, 9, 1, 4, 1, NULL, NULL, NULL, NULL, NULL),
(213, 9, 1, 8, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module_to_roles`
--
ALTER TABLE `module_to_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module_to_roles`
--
ALTER TABLE `module_to_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
