-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 10:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feits_multivendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sandbox` tinyint(1) DEFAULT NULL COMMENT '0=Inactive,1=active',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` double(10,2) DEFAULT NULL,
  `commission_type` tinyint(1) DEFAULT NULL COMMENT '0=Include,1=Exclude',
  `status` tinyint(1) NOT NULL COMMENT '0=Inactive,1=active',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `name`, `key_id`, `secret_token`, `info_text`, `sandbox`, `email`, `website`, `retail`, `publisher_key`, `commission`, `commission_type`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'PayPal', 'Ac1QE0ltcD77m3xcwc9fFeKMpxT6H41MP7A6R4xFcfuFVCCc4vGv3-0iwIeP4QVJtVRD3Cf34qfV2w9B', 'EF9qAIqttNpLiklHGTvbGMskM-wWXpfmEJ0LwIbm40yZ1XrmNqUIloMFtyNTE6-AwuFV4fflgwwBCqwI', 'Veniam asperiores q', 0, 'mucaxil@mailinator.com', NULL, 'Est reprehenderit c', 'Qui rerum omnis eum', 62.00, 0, 1, 1, 1, NULL, '2020-05-11 05:03:10', '2020-07-17 11:28:22'),
(2, 'Stripe', 'pk_test_51H5yU5CVv453cpl0cZwJMLPrmFkrqdvuDxyAZJztvsXvwhh4vfXgDxNkvdgEPvEv2pWJO7EQYvSDbF4u0DsTGjA000S3BLHyqI', 'sk_test_51H5yU5CVv453cpl0mNY6jydYOygAcRvz4tc8xDFyowILArgFDdsa0CAWIr4ez04FCQmayCiCwsOSihp8xQeFRU2V00GTBwYTVe', 'Nulla consectetur e', 0, 'sycy@mailinator.com', NULL, 'Officia consequatur', 'Ad nisi esse rerum e', 17.00, 0, 1, 1, 1, NULL, '2020-05-12 00:22:54', '2020-07-17 14:01:22'),
(3, 'Angelica Barnes', 'Rem qui nihil minima', 'Eum cumque non beata', 'Et labore facilis te', 1, 'boxew@mailinator.net', NULL, 'Itaque ipsam dolore', 'Ut iusto velit id e', 12.00, 0, 1, 1, 1, NULL, '2020-05-12 01:37:21', '2020-05-12 01:37:21'),
(4, 'Todd Bates', 'Dolorum omnis nostru', 'Quia voluptatem qui', 'Non debitis maiores', 0, 'devaqupol@mailinator.com', NULL, 'Qui ex voluptatibus', 'Eius quis ut qui ut', 49.00, 1, 1, 1, 1, NULL, '2020-05-12 01:37:53', '2020-05-12 01:37:53'),
(5, 'SSLCOMMERZ', 'lemon5eebbf0bd097e', 'lemon5eebbf0bd097e@ssl', 'Duis sed autem minim', 1, 'wupa@mailinator.com', NULL, 'In voluptates vel qu', 'Vitae proident duci', 84.00, 1, 1, 1, 1, NULL, '2020-05-12 01:40:23', '2020-07-17 14:03:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
