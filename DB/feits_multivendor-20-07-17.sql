-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 11:33 AM
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
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `advertisement_option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlighted_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `advertisement_option`, `text`, `highlighted_text`, `button_text`, `image`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'banner_portrait_top', 'THID RAMADANFEATURE ADAVRTISEMENT/PROMOTIONAL STUFFS', '70% OFF', 'Shop Now', 'public/upload/advertisement/BDxyZDt0yqEACA25YcTU.png', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-13 10:07:00'),
(2, 'promotion_offer_first', 'MORE TREADING PRODUCT SHOWCASING', '100% OFF', 'Shop Now', 'public/upload/advertisement/F2jLaDgEJkon1h1Fm6F1.jpg', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-13 09:57:08'),
(3, 'promotion_offer_second', 'MORE TREADING PRODUCT SHOWCASING', NULL, 'Shop Now', 'public/upload/advertisement/lrXhFIsKIEZSb5Qd7gkK.jpg', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-13 10:05:15'),
(4, 'promotion_offer_third', 'MORE TREADING PRODUCT SHOWCASING', NULL, 'Shop Now', 'public/upload/advertisement/HhFMwBKOHF1aZDLXE4ij.jpg', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-13 10:06:05'),
(5, 'banner_portrait_bottom', 'THID RAMADANFEATURE ADAVRTISEMENT/PROMOTIONAL STUFFS', '70% OFF', 'Shop Now', 'public/upload/advertisement/l4Eq9qCytMOVIDIZ8q84.png', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-13 10:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `auto_email_message`
--

CREATE TABLE `auto_email_message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `state_id` bigint(20) NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `user_id`, `name`, `email`, `contact_no`, `country_id`, `state_id`, `post_code`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 5, 'customer', 'customer@email.com', '18879113801', 2, 3, '72211', '988 Green Clarendon Avenue', NULL, NULL, '2020-07-15 08:08:37', '2020-07-15 08:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `description`, `image`, `slug`, `meta_tag`, `meta_description`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Geoffrey Warren', 'Quam reprehenderit t', 'public/upload/brand/6kjzKE6x5S2CF6nmfrps.jfif', 'geoffrey-warren-57', 'Provident laborum l', 'Laudantium qui iure', 1, NULL, 1, 1, '2020-06-28 10:24:36', '2020-06-28 10:24:36'),
(2, 'Adele Head', 'Itaque dolore ut con', 'public/upload/brand/DvZK9ipDayWTrAJjtKgb.jpg', 'adele-head-69', 'Dolore ad voluptas d', 'Deserunt amet do qu', 1, NULL, 1, 1, '2020-06-28 10:25:04', '2020-06-28 10:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_category` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 = top category, 0 = Non top category',
  `meta_tag` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `description`, `image`, `slug`, `top_category`, `meta_tag`, `meta_description`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 'Shirt', 'Quae natus consequat', 'public/upload/category/kKqqlMhiy5dcQmjhPNwK.png', 'claire-shaffer-67', 0, 'Erich Molina', NULL, 1, NULL, 1, 1, '2020-05-12 00:46:31', '2020-07-12 00:30:00'),
(2, 1, 'Men\'shirt', 'Illum iusto molliti', 'public/upload/category/KHDqYGt7aIStWPCjaDBg.png', 'nero-ewing-67', 0, 'Ciaran Becker', NULL, 1, NULL, 1, 1, '2020-05-12 01:41:01', '2020-07-12 00:30:16'),
(3, 1, 'Women\'s Shirt', 'Et architecto minus', 'public/upload/category/ZOHiIJiSkaFDjpXwuNd9.png', 'channing-sosa-93', 0, NULL, NULL, 1, NULL, 1, 1, '2020-06-28 08:32:07', '2020-07-12 00:30:32'),
(4, 0, 'Accessories', 'hello', 'public/upload/category/Tv5zFZk8m8YOUMyjLIub.jpg', 'test-1-72', 0, NULL, NULL, 1, NULL, 1, 1, '2020-06-28 08:32:47', '2020-07-12 00:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `vendor_id`, `country_name`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 'United State', 1, NULL, 1, 1, '2020-07-15 00:59:11', '2020-07-15 00:59:11'),
(2, NULL, 'Bangladesh', 1, NULL, 1, 1, '2020-07-15 00:59:26', '2020-07-15 00:59:26'),
(3, NULL, 'India', 1, NULL, 1, 1, '2020-07-15 00:59:37', '2020-07-15 00:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_to_orders`
--

CREATE TABLE `coupon_to_orders` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_id` bigint(20) NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon_to_orders`
--

INSERT INTO `coupon_to_orders` (`id`, `discount_id`, `coupon_code`, `order_id`, `user_id`, `discount`, `created_at`, `updated_at`) VALUES
('200716000000009', 1, 'Coupon1', '200716000000005', 5, 210.00, '2020-07-15 21:45:58', '2020-07-15 21:45:58'),
('200716000000010', 1, 'Coupon1', '200716000000006', 5, 210.00, '2020-07-15 21:46:51', '2020-07-15 21:46:51'),
('200716000000011', 2, 'Coupon2', '200716000000006', 5, 105.00, '2020-07-15 21:46:52', '2020-07-15 21:46:52'),
('200716000000012', 1, 'Coupon1', '200716000000007', 5, 210.00, '2020-07-15 21:48:25', '2020-07-15 21:48:25'),
('200716000000013', 2, 'Coupon2', '200716000000007', 5, 105.00, '2020-07-15 21:48:25', '2020-07-15 21:48:25'),
('200716000000014', 1, 'Coupon1', '200716000000008', 5, 210.00, '2020-07-15 21:49:22', '2020-07-15 21:49:22'),
('200716000000015', 2, 'Coupon2', '200716000000008', 5, 105.00, '2020-07-15 21:49:22', '2020-07-15 21:49:22'),
('200716000000016', 1, 'Coupon1', '200716000000009', 5, 210.00, '2020-07-15 21:52:45', '2020-07-15 21:52:45'),
('200716000000017', 2, 'Coupon2', '200716000000009', 5, 105.00, '2020-07-15 21:52:45', '2020-07-15 21:52:45'),
('200716000000018', 1, 'Coupon1', '200716000000010', 5, 210.00, '2020-07-15 21:53:20', '2020-07-15 21:53:20'),
('200716000000019', 2, 'Coupon2', '200716000000010', 5, 105.00, '2020-07-15 21:53:20', '2020-07-15 21:53:20'),
('200716000000020', 1, 'Coupon1', '200716000000011', 5, 210.00, '2020-07-15 21:55:33', '2020-07-15 21:55:33'),
('200716000000021', 2, 'Coupon2', '200716000000011', 5, 105.00, '2020-07-15 21:55:33', '2020-07-15 21:55:33'),
('200716000000022', 1, 'Coupon1', '200716000000012', 5, 210.00, '2020-07-15 21:56:03', '2020-07-15 21:56:03'),
('200716000000023', 2, 'Coupon2', '200716000000012', 5, 105.00, '2020-07-15 21:56:03', '2020-07-15 21:56:03'),
('200716000000024', 1, 'Coupon1', '200716000000013', 5, 210.00, '2020-07-15 21:56:11', '2020-07-15 21:56:11'),
('200716000000025', 2, 'Coupon2', '200716000000013', 5, 105.00, '2020-07-15 21:56:11', '2020-07-15 21:56:11'),
('200716000000026', 1, 'Coupon1', '200716000000014', 5, 210.00, '2020-07-15 21:56:40', '2020-07-15 21:56:40'),
('200716000000027', 2, 'Coupon2', '200716000000014', 5, 105.00, '2020-07-15 21:56:40', '2020-07-15 21:56:40'),
('200716000000028', 1, 'Coupon1', '200716000000015', 5, 210.00, '2020-07-15 21:56:56', '2020-07-15 21:56:56'),
('200716000000029', 2, 'Coupon2', '200716000000015', 5, 105.00, '2020-07-15 21:56:56', '2020-07-15 21:56:56'),
('200716000000030', 1, 'Coupon1', '200716000000016', 5, 210.00, '2020-07-15 21:57:43', '2020-07-15 21:57:43'),
('200716000000031', 2, 'Coupon2', '200716000000016', 5, 105.00, '2020-07-15 21:57:43', '2020-07-15 21:57:43'),
('200716000000032', 1, 'Coupon1', '200716000000017', 5, 210.00, '2020-07-15 21:58:50', '2020-07-15 21:58:50'),
('200716000000033', 2, 'Coupon2', '200716000000017', 5, 105.00, '2020-07-15 21:58:50', '2020-07-15 21:58:50'),
('200716000000034', 1, 'Coupon1', '200716000000018', 5, 210.00, '2020-07-15 22:00:26', '2020-07-15 22:00:26'),
('200716000000035', 2, 'Coupon2', '200716000000018', 5, 105.00, '2020-07-15 22:00:26', '2020-07-15 22:00:26'),
('200716000000036', 1, 'Coupon1', '200716000000019', 5, 210.00, '2020-07-15 22:27:13', '2020-07-15 22:27:13'),
('200716000000037', 2, 'Coupon2', '200716000000019', 5, 105.00, '2020-07-15 22:27:13', '2020-07-15 22:27:13'),
('200716000000038', 1, 'Coupon1', '200716000000020', 5, 210.00, '2020-07-15 22:28:07', '2020-07-15 22:28:07'),
('200716000000039', 2, 'Coupon2', '200716000000020', 5, 105.00, '2020-07-15 22:28:07', '2020-07-15 22:28:07'),
('200716000000040', 1, 'Coupon1', '200716000000021', 5, 210.00, '2020-07-15 22:28:22', '2020-07-15 22:28:22'),
('200716000000041', 2, 'Coupon2', '200716000000021', 5, 105.00, '2020-07-15 22:28:22', '2020-07-15 22:28:22'),
('200716000000042', 1, 'Coupon1', '200716000000022', 5, 210.00, '2020-07-15 22:29:59', '2020-07-15 22:29:59'),
('200716000000043', 2, 'Coupon2', '200716000000022', 5, 105.00, '2020-07-15 22:29:59', '2020-07-15 22:29:59'),
('200716000000044', 1, 'Coupon1', '200716000000023', 5, 210.00, '2020-07-15 22:31:12', '2020-07-15 22:31:12'),
('200716000000045', 2, 'Coupon2', '200716000000023', 5, 105.00, '2020-07-15 22:31:13', '2020-07-15 22:31:13'),
('200716000000046', 1, 'Coupon1', '200716000000024', 5, 210.00, '2020-07-15 22:32:33', '2020-07-15 22:32:33'),
('200716000000047', 2, 'Coupon2', '200716000000024', 5, 105.00, '2020-07-15 22:32:33', '2020-07-15 22:32:33'),
('200716000000048', 1, 'Coupon1', '200716000000025', 5, 210.00, '2020-07-15 22:34:40', '2020-07-15 22:34:40'),
('200716000000049', 2, 'Coupon2', '200716000000025', 5, 105.00, '2020-07-15 22:34:40', '2020-07-15 22:34:40'),
('200716000000050', 1, 'Coupon1', '200716000000026', 5, 210.00, '2020-07-15 22:35:18', '2020-07-15 22:35:18'),
('200716000000051', 2, 'Coupon2', '200716000000026', 5, 105.00, '2020-07-15 22:35:18', '2020-07-15 22:35:18'),
('200716000000052', 1, 'Coupon1', '200716000000027', 5, 210.00, '2020-07-15 22:37:35', '2020-07-15 22:37:35'),
('200716000000053', 2, 'Coupon2', '200716000000027', 5, 105.00, '2020-07-15 22:37:35', '2020-07-15 22:37:35'),
('200716000000054', 1, 'Coupon1', '200716000000028', 5, 210.00, '2020-07-15 22:39:00', '2020-07-15 22:39:00'),
('200716000000055', 2, 'Coupon2', '200716000000028', 5, 105.00, '2020-07-15 22:39:00', '2020-07-15 22:39:00'),
('200716000000056', 1, 'Coupon1', '200716000000029', 5, 210.00, '2020-07-15 22:39:16', '2020-07-15 22:39:16'),
('200716000000057', 2, 'Coupon2', '200716000000029', 5, 105.00, '2020-07-15 22:39:16', '2020-07-15 22:39:16'),
('200716000000058', 1, 'Coupon1', '200716000000030', 5, 210.00, '2020-07-15 22:40:06', '2020-07-15 22:40:06'),
('200716000000059', 2, 'Coupon2', '200716000000030', 5, 105.00, '2020-07-15 22:40:06', '2020-07-15 22:40:06'),
('200716000000060', 1, 'Coupon1', '200716000000031', 5, 210.00, '2020-07-15 22:41:05', '2020-07-15 22:41:05'),
('200716000000061', 2, 'Coupon2', '200716000000031', 5, 105.00, '2020-07-15 22:41:05', '2020-07-15 22:41:05'),
('200716000000062', 1, 'Coupon1', '200716000000032', 5, 210.00, '2020-07-15 22:42:12', '2020-07-15 22:42:12'),
('200716000000063', 2, 'Coupon2', '200716000000032', 5, 105.00, '2020-07-15 22:42:12', '2020-07-15 22:42:12'),
('200716000000064', 1, 'Coupon1', '200716000000033', 5, 210.00, '2020-07-15 22:49:38', '2020-07-15 22:49:38'),
('200716000000065', 2, 'Coupon2', '200716000000033', 5, 105.00, '2020-07-15 22:49:38', '2020-07-15 22:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `multiplication_of_doller` double(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=Inactive,1=active',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `multiplication_of_doller`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BDT', '৳', 84.85, 0, 1, 1, '2020-05-12 06:06:57', '2020-05-12 05:55:37', '2020-05-12 06:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `discount_by` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Admin, 2 = Vendor',
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `validity_times` int(11) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `expired_date` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `vendor_id`, `discount_by`, `name`, `description`, `coupon_type`, `amount`, `validity_times`, `start_date`, `expired_date`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Coupon1', 'Nothing at all', 'all_user', 10.00, 2, '2020-07-14 01:35:00', '2020-07-18 21:35:00', 1, NULL, 1, 1, '2020-07-15 09:40:27', '2020-07-15 09:40:27'),
(2, NULL, 1, 'Coupon2', 'fasdfsafsa', 'specific_user', 5.00, 1, '2020-07-15 01:50:00', '2020-07-16 22:05:00', 1, NULL, 1, 1, '2020-07-15 10:07:27', '2020-07-15 10:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `discount_to_users`
--

CREATE TABLE `discount_to_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coupon_used` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 = Used, 0 = Not Used',
  `coupon_used_times` tinyint(4) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_to_users`
--

INSERT INTO `discount_to_users` (`id`, `discount_id`, `user_id`, `coupon_used`, `coupon_used_times`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 0, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_configurations`
--

CREATE TABLE `email_configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `configuration_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_engine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_host` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_port` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encryption` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=Inactive,1=active',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_configurations`
--

INSERT INTO `email_configurations` (`id`, `configuration_name`, `mail_engine`, `mail_host`, `mail_port`, `encryption`, `username`, `password`, `from_email`, `from_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Preston Horne', 'Dolore est consectet', 'Porro ut culpa velit', '2525', 'Dolorem omnis vel ve', 'sexolunot', 'Saepe exercitation a', 'kitiwymiho@mailinator.net', 'Brenda Meyers', 1, 1, 1, '2020-06-21 23:11:04', '2020-06-22 00:21:46');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourite_seller`
--

CREATE TABLE `favourite_seller` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `seller_id` bigint(20) DEFAULT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_banners`
--

CREATE TABLE `home_page_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_banners`
--

INSERT INTO `home_page_banners` (`id`, `title`, `image`, `slug`, `status`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Nice To Buy', 'public/upload/home-page-banner/ginqxiYf6RTbd4T2BtTP.png', 'nice-to-buy-17', 1, NULL, 1, 1, NULL, '2020-07-12 00:26:06', '2020-07-12 00:26:06'),
(2, 'Nothing to say', 'public/upload/home-page-banner/6fWaU8t7EjdrqTZmt2am.png', 'nothing-to-say-72', 1, NULL, 1, 1, NULL, '2020-07-12 00:27:47', '2020-07-12 00:27:47'),
(3, 'Malaysia', 'public/upload/home-page-banner/nHFtZCY5nxAaMiJHQOAK.png', 'malaysia-11', 1, NULL, 1, 1, NULL, '2020-07-12 00:28:34', '2020-07-12 00:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `home_setups`
--

CREATE TABLE `home_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_setups`
--

INSERT INTO `home_setups` (`id`, `option_name`, `option_value`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'selected_category', '1', 1, 1, 1, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2020_05_11_061154_create_payment_gateways_table', 3),
(6, '2020_05_04_064013_create_categories_table', 4),
(7, '2020_05_10_054727_create_brands_table', 4),
(8, '2020_05_11_081530_create_pages_table', 4),
(9, '2020_05_12_111651_create_currencies_table', 5),
(38, '2020_05_12_031859_create_product_reviews_table', 6),
(39, '2020_05_12_032839_create_vendor_reviews_table', 6),
(40, '2020_05_12_033412_create_favourite_seller_table', 6),
(41, '2020_05_12_033613_create_product_gallery_table', 6),
(42, '2020_05_12_033812_create_product_color_table', 6),
(43, '2020_05_12_033928_create_product_size_table', 6),
(44, '2020_05_12_034026_create_product_tag_table', 6),
(45, '2020_05_12_034115_create_product_meta_table', 6),
(46, '2020_05_12_034222_create_product_related_table', 6),
(47, '2020_05_12_034406_create_products_table', 6),
(48, '2020_05_12_042626_create_product_comment_table', 6),
(49, '2020_05_12_042928_create_auto_email_message_table', 6),
(50, '2020_05_12_100649_create_product_seo_table', 6),
(51, '2020_05_13_070658_create_email_configurations_table', 6),
(52, '2020_05_01_223034_create_order_shipping_addresses_table', 7),
(53, '2020_05_09_195022_create_discounts_table', 7),
(54, '2020_05_09_195203_create_discount_to_users_table', 7),
(55, '2020_05_12_195532_add_role_id_to_users_table', 7),
(56, '2020_05_13_074725_create_navigations_table', 7),
(57, '2020_05_13_135208_create_shipping_options', 7),
(58, '2020_05_13_183055_create_shop_settings_table', 7),
(59, '2020_05_14_132526_create_vendor_pages_table', 7),
(60, '2020_05_14_185337_create_translation_languages_table', 7),
(61, '2020_05_14_185522_create_countries_table', 7),
(62, '2020_05_14_185538_create_states_table', 7),
(63, '2020_05_14_185554_create_cities_table', 7),
(64, '2020_05_17_043541_create_home_page_banners_table', 7),
(65, '2020_05_18_183419_add_vendor_rating_to_users_table', 7),
(66, '2020_05_18_184024_create_store_reviews_table', 7),
(67, '2020_05_18_200453_create_orders_table', 7),
(68, '2020_05_18_200541_create_order_details_table', 7),
(81, '2020_05_13_032112_add_column_to_product', 8),
(82, '2020_05_13_032743_add_column_to_product_color', 9),
(83, '2020_05_13_032912_add_column_to_product_comments', 10),
(84, '2020_05_13_033145_add_column_to_product_gallery', 11),
(85, '2020_05_13_033250_add_column_to_product_meta', 12),
(86, '2020_05_13_033541_add_column_to_product_related', 13),
(87, '2020_05_13_033714_add_column_to_product_reviews', 14),
(88, '2020_05_13_033833_add_column_to_product_seo', 15),
(89, '2020_05_13_033928_add_column_to_product_size', 16),
(113, '2020_05_13_034020_add_column_to_product_tag', 17),
(114, '2020_06_10_092936_create_social_links_table', 17),
(115, '2020_06_10_093130_create_site_settings_table', 17),
(116, '2020_06_22_051244_create_user_types_table', 17),
(117, '2020_06_22_062403_add_column_user_type_to_user_table', 17),
(138, '2020_06_16_105105_create_advertisements_table', 18),
(139, '2020_06_17_090241_add_url_to_advertisements_table', 18),
(140, '2020_06_24_050459_add_footer_position_to_navigations_table', 18),
(141, '2020_07_01_162709_modify_add_column_to_products_table', 18),
(142, '2020_07_02_041816_modify_product_gallery_table', 18),
(143, '2020_07_02_055926_create_product_varients_table', 18),
(144, '2020_07_04_053705_create_social_login_accesses_table', 18),
(145, '2020_07_05_042555_add_column_affiliate_commission_to_products_table', 18),
(146, '2020_07_05_070149_modify_imae_column_to_product_gallery_table', 18),
(147, '2020_07_07_084111_create_home_setups_table', 19),
(151, '2020_07_12_141511_create_vendor_subscription_plans_table', 20),
(152, '2020_07_12_160943_add_column_soft_delete_to_vendor_subscription_plans_table', 21),
(153, '2020_07_12_173316_create_vendor_subscriptions_table', 22),
(154, '2020_07_12_103408_add_top_categories_categories_table', 23),
(155, '2020_07_13_101552_add_advertisement_option_to_advertisements', 23),
(156, '2020_07_15_133516_create_billing_addresses_table', 24),
(157, '2020_07_15_134518_create_shipping_addresses_table', 24),
(158, '2020_07_15_135129_add_column_contact_no_to_users_table', 25),
(160, '2020_07_15_155652_create_coupon_to_orders_table', 26),
(161, '2020_07_16_011259_modify_column_of_order_shipping_addresses_table', 27),
(162, '2020_07_16_011727_create_order_billing_addresses_table', 28),
(163, '2020_07_16_012451_change_column_to_orders_table', 29),
(164, '2020_07_16_013747_change_column_to_order_details_table', 30),
(165, '2020_07_16_015948_change_column_id_to_coupon_to_orders_table', 31),
(166, '2020_07_16_034152_add_column_to_order_details_table', 32),
(190, '2020_01_17_040304_create_activities_table', 33),
(191, '2020_01_17_040924_create_modules_table', 33),
(192, '2020_01_17_041254_create_module_to_activities_table', 33),
(193, '2020_01_17_041749_create_module_to_roles_table', 33),
(194, '2020_01_17_041946_create_module_to_users_table', 33),
(195, '2020_01_17_042141_create_roles_table', 33),
(196, '2020_01_18_111739_add_created_by_to_roles', 33),
(197, '2020_07_16_092647_add_status_column_to_user_table', 33),
(198, '2020_07_16_101136_add_column_to_users_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module_to_activities`
--

CREATE TABLE `module_to_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module_to_roles`
--

CREATE TABLE `module_to_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module_to_users`
--

CREATE TABLE `module_to_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `footer_position` int(11) DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` int(11) NOT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `type`, `position`, `footer_position`, `url`, `serial`, `meta_tag`, `meta_description`, `created_by`, `updated_by`, `deleted_by`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 1, 1, NULL, 'about-us-84', 1, NULL, NULL, 1, 1, NULL, 1, NULL, '2020-07-12 00:33:37', '2020-07-12 00:33:37'),
(2, 'Privacy Policy', 1, 1, NULL, 'privacy-policy-50', 2, NULL, NULL, 1, 1, NULL, 1, NULL, '2020-07-12 00:33:58', '2020-07-12 00:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=cancel,2=on hold,3=pending,4=processing,5=complete',
  `currency` int(11) DEFAULT NULL,
  `currency_value` double DEFAULT NULL,
  `order_shipping` double DEFAULT NULL,
  `order_tax` double(8,2) NOT NULL,
  `order_tracking_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_charge` double(10,2) DEFAULT NULL,
  `discount` double(10,2) DEFAULT NULL,
  `subtotal` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `customer_id`, `shipping_method`, `payment_method`, `order_date`, `order_status`, `currency`, `currency_value`, `order_shipping`, `order_tax`, `order_tracking_number`, `delivery_charge`, `discount`, `subtotal`, `total`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
('200716000000039', '200716000000039', 5, 4, 3, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 147.00, '200716000000039', 20.00, 0.00, 700.00, 867.00, 5, 5, '2020-07-16 00:50:04', '2020-07-16 00:50:04'),
('200716000000040', '200716000000040', 5, 4, 4, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 189.00, '200716000000040', 30.00, 0.00, 900.00, 1119.00, 5, 5, '2020-07-16 00:51:31', '2020-07-16 00:51:31'),
('200716000000041', '200716000000041', 5, 4, 3, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 42.00, '200716000000041', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-16 00:52:41', '2020-07-16 00:52:41'),
('200716000000042', '200716000000042', 5, 4, 3, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 63.00, '200716000000042', 10.00, 0.00, 300.00, 373.00, 5, 5, '2020-07-16 00:53:44', '2020-07-16 00:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_billing_addresses`
--

CREATE TABLE `order_billing_addresses` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint(20) NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_billing_addresses`
--

INSERT INTO `order_billing_addresses` (`id`, `order_id`, `customer_id`, `name`, `email`, `contact_no`, `state_id`, `country_id`, `address`, `customer_postal_code`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
('200716000000001', '200716000000007', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:48:25', '2020-07-15 21:48:25'),
('200716000000002', '200716000000008', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:49:22', '2020-07-15 21:49:22'),
('200716000000003', '200716000000009', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:52:46', '2020-07-15 21:52:46'),
('200716000000004', '200716000000010', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:53:20', '2020-07-15 21:53:20'),
('200716000000005', '200716000000011', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:55:33', '2020-07-15 21:55:33'),
('200716000000006', '200716000000012', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:56:03', '2020-07-15 21:56:03'),
('200716000000007', '200716000000013', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:56:12', '2020-07-15 21:56:12'),
('200716000000008', '200716000000014', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:56:41', '2020-07-15 21:56:41'),
('200716000000009', '200716000000015', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:56:56', '2020-07-15 21:56:56'),
('200716000000010', '200716000000016', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:57:44', '2020-07-15 21:57:44'),
('200716000000011', '200716000000017', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 21:58:50', '2020-07-15 21:58:50'),
('200716000000012', '200716000000018', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:00:26', '2020-07-15 22:00:26'),
('200716000000013', '200716000000019', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:27:13', '2020-07-15 22:27:13'),
('200716000000014', '200716000000020', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:28:08', '2020-07-15 22:28:08'),
('200716000000015', '200716000000021', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:28:22', '2020-07-15 22:28:22'),
('200716000000016', '200716000000022', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:30:00', '2020-07-15 22:30:00'),
('200716000000017', '200716000000023', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:31:13', '2020-07-15 22:31:13'),
('200716000000018', '200716000000024', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:32:33', '2020-07-15 22:32:33'),
('200716000000019', '200716000000025', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:34:41', '2020-07-15 22:34:41'),
('200716000000020', '200716000000026', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:35:18', '2020-07-15 22:35:18'),
('200716000000021', '200716000000027', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:37:35', '2020-07-15 22:37:35'),
('200716000000022', '200716000000028', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:39:00', '2020-07-15 22:39:00'),
('200716000000023', '200716000000029', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:39:16', '2020-07-15 22:39:16'),
('200716000000024', '200716000000030', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:40:07', '2020-07-15 22:40:07'),
('200716000000025', '200716000000031', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:41:05', '2020-07-15 22:41:05'),
('200716000000026', '200716000000032', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:42:12', '2020-07-15 22:42:12'),
('200716000000027', '200716000000033', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:49:38', '2020-07-15 22:49:38'),
('200716000000028', '200716000000034', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:50:07', '2020-07-15 22:50:07'),
('200716000000029', '200716000000035', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 22:56:44', '2020-07-15 22:56:44'),
('200716000000030', '200716000000036', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 23:07:35', '2020-07-15 23:07:35'),
('200716000000031', '200716000000037', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-15 23:16:22', '2020-07-15 23:16:22'),
('200716000000032', '200716000000038', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-16 00:05:19', '2020-07-16 00:05:19'),
('200716000000033', '200716000000039', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-16 00:50:05', '2020-07-16 00:50:05'),
('200716000000034', '200716000000040', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-16 00:51:32', '2020-07-16 00:51:32'),
('200716000000035', '200716000000041', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-16 00:52:41', '2020-07-16 00:52:41'),
('200716000000036', '200716000000042', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-16 00:53:44', '2020-07-16 00:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` bigint(20) NOT NULL,
  `product_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_varient_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `regular_price` double(10,2) NOT NULL,
  `delivery_charge` double(10,2) NOT NULL,
  `vat` double(10,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=cancel,2=on hold,3=pending,4=processing,5=complete',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `order_number`, `vendor_id`, `product_id`, `product_varient_id`, `quantity`, `price`, `regular_price`, `delivery_charge`, `vat`, `discount`, `total`, `order_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
('200716000000036', '200716000000023', '200716000000023', 0, '200712000000002', 2147483647, 1, 100.00, 0.00, 0.00, 17.85, 15.00, 102.85, 1, 5, 5, '2020-07-15 22:31:12', '2020-07-15 22:31:12'),
('200716000000048', '200716000000029', '200716000000029', 0, '200712000000002', 2147483647, 1, 100.00, 0.00, 0.00, 17.85, 15.00, 102.85, 1, 5, 5, '2020-07-15 22:39:16', '2020-07-15 22:39:16'),
('200716000000061', '200716000000039', '200716000000039', 0, '200712000000002', 2147483647, 3, 100.00, 0.00, 0.00, 21.00, 0.00, 363.00, 3, 5, 5, '2020-07-16 00:50:04', '2020-07-16 00:50:04'),
('200716000000062', '200716000000039', '200716000000039', 4, '200712000000001', 2147483647, 2, 200.00, 210.00, 20.00, 42.00, 0.00, 484.00, 3, 5, 5, '2020-07-16 00:50:05', '2020-07-16 00:50:05'),
('200716000000063', '200716000000040', '200716000000040', 0, '200712000000002', 2147483647, 3, 100.00, 0.00, 0.00, 21.00, 0.00, 363.00, 3, 5, 5, '2020-07-16 00:51:31', '2020-07-16 00:51:31'),
('200716000000064', '200716000000040', '200716000000040', 4, '200712000000001', 2147483647, 3, 200.00, 210.00, 30.00, 42.00, 0.00, 726.00, 3, 5, 5, '2020-07-16 00:51:31', '2020-07-16 00:51:31'),
('200716000000065', '200716000000041', '200716000000041', 4, '200712000000001', 2147483647, 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-16 00:52:41', '2020-07-16 00:52:41'),
('200716000000066', '200716000000042', '200716000000042', 0, '200712000000002', 2147483647, 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 1, 5, 5, '2020-07-16 00:53:44', '2020-07-16 11:03:01'),
('200716000000067', '200716000000042', '200716000000042', 4, '200712000000001', 2147483647, 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 2, 5, 5, '2020-07-16 00:53:44', '2020-07-16 11:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_shipping_addresses`
--

CREATE TABLE `order_shipping_addresses` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `state_id` bigint(20) NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_postal_code` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_shipping_addresses`
--

INSERT INTO `order_shipping_addresses` (`id`, `order_id`, `customer_id`, `name`, `email`, `contact_no`, `city_id`, `state_id`, `country_id`, `address`, `customer_postal_code`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
('200716000000001', '200716000000006', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:46:52', '2020-07-15 21:46:52'),
('200716000000002', '200716000000007', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:48:25', '2020-07-15 21:48:25'),
('200716000000003', '200716000000008', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:49:22', '2020-07-15 21:49:22'),
('200716000000004', '200716000000009', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:52:45', '2020-07-15 21:52:45'),
('200716000000005', '200716000000010', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:53:20', '2020-07-15 21:53:20'),
('200716000000006', '200716000000011', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:55:33', '2020-07-15 21:55:33'),
('200716000000007', '200716000000012', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:56:03', '2020-07-15 21:56:03'),
('200716000000008', '200716000000013', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:56:11', '2020-07-15 21:56:11'),
('200716000000009', '200716000000014', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:56:41', '2020-07-15 21:56:41'),
('200716000000010', '200716000000015', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:56:56', '2020-07-15 21:56:56'),
('200716000000011', '200716000000016', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:57:44', '2020-07-15 21:57:44'),
('200716000000012', '200716000000017', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 21:58:50', '2020-07-15 21:58:50'),
('200716000000013', '200716000000018', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:00:26', '2020-07-15 22:00:26'),
('200716000000014', '200716000000019', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:27:13', '2020-07-15 22:27:13'),
('200716000000015', '200716000000020', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:28:08', '2020-07-15 22:28:08'),
('200716000000016', '200716000000021', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:28:22', '2020-07-15 22:28:22'),
('200716000000017', '200716000000022', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:29:59', '2020-07-15 22:29:59'),
('200716000000018', '200716000000023', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:31:13', '2020-07-15 22:31:13'),
('200716000000019', '200716000000024', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:32:33', '2020-07-15 22:32:33'),
('200716000000020', '200716000000025', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:34:41', '2020-07-15 22:34:41'),
('200716000000021', '200716000000026', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:35:18', '2020-07-15 22:35:18'),
('200716000000022', '200716000000027', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:37:35', '2020-07-15 22:37:35'),
('200716000000023', '200716000000028', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:39:00', '2020-07-15 22:39:00'),
('200716000000024', '200716000000029', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:39:16', '2020-07-15 22:39:16'),
('200716000000025', '200716000000030', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:40:07', '2020-07-15 22:40:07'),
('200716000000026', '200716000000031', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:41:05', '2020-07-15 22:41:05'),
('200716000000027', '200716000000032', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:42:12', '2020-07-15 22:42:12'),
('200716000000028', '200716000000033', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:49:38', '2020-07-15 22:49:38'),
('200716000000029', '200716000000034', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:50:07', '2020-07-15 22:50:07'),
('200716000000030', '200716000000035', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 22:56:44', '2020-07-15 22:56:44'),
('200716000000031', '200716000000036', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 23:07:35', '2020-07-15 23:07:35'),
('200716000000032', '200716000000037', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-15 23:16:22', '2020-07-15 23:16:22'),
('200716000000033', '200716000000038', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-16 00:05:19', '2020-07-16 00:05:19'),
('200716000000034', '200716000000039', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-16 00:50:05', '2020-07-16 00:50:05'),
('200716000000035', '200716000000040', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-16 00:51:31', '2020-07-16 00:51:31'),
('200716000000036', '200716000000041', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-16 00:52:41', '2020-07-16 00:52:41'),
('200716000000037', '200716000000042', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-16 00:53:44', '2020-07-16 00:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `description`, `created_by`, `updated_by`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us-84', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 1, 1, 1, NULL, '2020-07-12 00:32:19', '2020-07-12 00:32:19'),
(2, 'Privacy Policy', 'privacy-policy-50', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 1, 1, 1, NULL, '2020-07-12 00:33:10', '2020-07-12 00:33:10');

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
(1, 'Chantale Sawyer', 'Qui eum ut distincti', 'Alias ratione laboru', 'Veniam asperiores q', 0, 'mucaxil@mailinator.com', NULL, 'Est reprehenderit c', 'Qui rerum omnis eum', 62.00, 0, 1, 1, 1, NULL, '2020-05-11 05:03:10', '2020-05-12 00:03:57'),
(2, 'Harper Pratt', 'Ipsa veniam illum', 'Recusandae Qui et u', 'Nulla consectetur e', 0, 'sycy@mailinator.com', NULL, 'Officia consequatur', 'Ad nisi esse rerum e', 17.00, 0, 0, 1, 1, NULL, '2020-05-12 00:22:54', '2020-05-12 00:22:54'),
(3, 'Angelica Barnes', 'Rem qui nihil minima', 'Eum cumque non beata', 'Et labore facilis te', 1, 'boxew@mailinator.net', NULL, 'Itaque ipsam dolore', 'Ut iusto velit id e', 12.00, 0, 1, 1, 1, NULL, '2020-05-12 01:37:21', '2020-05-12 01:37:21'),
(4, 'Todd Bates', 'Dolorum omnis nostru', 'Quia voluptatem qui', 'Non debitis maiores', 0, 'devaqupol@mailinator.com', NULL, 'Qui ex voluptatibus', 'Eius quis ut qui ut', 49.00, 1, 1, 1, 1, NULL, '2020-05-12 01:37:53', '2020-05-12 01:37:53'),
(5, 'Constance Wilkinson', 'Exercitationem delen', 'A voluptatem offici', 'Duis sed autem minim', 1, 'wupa@mailinator.com', NULL, 'In voluptates vel qu', 'Vitae proident duci', 84.00, 1, 0, 1, 1, NULL, '2020-05-12 01:40:23', '2020-05-12 01:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_condition` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(95) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `stock_available` tinyint(1) DEFAULT '1' COMMENT '0=always available,1=check stock',
  `variable_product` tinyint(1) DEFAULT NULL COMMENT '0=not variable,1=variable',
  `available_stock` int(11) DEFAULT NULL,
  `regular_price` double DEFAULT NULL,
  `sell_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `vat` double DEFAULT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci,
  `product_unit` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_offer` tinyint(1) DEFAULT NULL,
  `product_offer_reason` text COLLATE utf8mb4_unicode_ci,
  `product_best_sale` tinyint(1) DEFAULT NULL,
  `product_best_sale_reason` text COLLATE utf8mb4_unicode_ci,
  `currency_id` int(11) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `subcategory_id` bigint(20) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `specification` mediumtext COLLATE utf8mb4_unicode_ci,
  `facebook_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_charge` double(8,2) DEFAULT NULL,
  `review_allowed` tinyint(1) DEFAULT NULL,
  `comment_allowed` tinyint(1) DEFAULT NULL,
  `set_as_featured` tinyint(1) DEFAULT NULL,
  `free_shipping` tinyint(1) DEFAULT NULL,
  `weight` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy` mediumtext COLLATE utf8mb4_unicode_ci,
  `allowed_estimated_shipping_time` tinyint(1) DEFAULT NULL,
  `sku` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tex_rate` double(8,2) DEFAULT NULL,
  `model_number` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_order_quantity` int(11) DEFAULT NULL,
  `affiliate_commision` double(5,2) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `meta_key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_condition`, `slug`, `quantity`, `stock_available`, `variable_product`, `available_stock`, `regular_price`, `sell_price`, `discount`, `vat`, `product_image`, `product_unit`, `product_type`, `product_offer`, `product_offer_reason`, `product_best_sale`, `product_best_sale_reason`, `currency_id`, `category_id`, `subcategory_id`, `brand_id`, `vendor_id`, `short_description`, `description`, `specification`, `facebook_link`, `youtube_link`, `product_code`, `delivery_charge`, `review_allowed`, `comment_allowed`, `set_as_featured`, `free_shipping`, `weight`, `policy`, `allowed_estimated_shipping_time`, `sku`, `tex_rate`, `model_number`, `max_order_quantity`, `affiliate_commision`, `status`, `approved_by`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `meta_key`, `meta_description`) VALUES
('200712000000001', 'product 1', 'new', 'product-1-3250', 10, 1, NULL, NULL, 210, 200, NULL, 10, 'public/upload/product_feature_image/VFFe8gXIiehgASkKuU2B.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 2, 4, 'Nothing to say Nothing to sayNothing to sayNothing to say', '<p>Nothing to say</p>', '<p>Nothing to say</p>', NULL, NULL, NULL, 10.00, NULL, NULL, 1, 0, NULL, '<p>Nothing to say</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 4, 1, '2020-07-12 12:11:55', '2020-07-14 22:55:19', NULL, NULL, NULL),
('200712000000002', 'Product 2', 'new', 'product-2-9697', 200, NULL, NULL, NULL, NULL, 100, NULL, 5, 'public/upload/product_feature_image/XeS7HfSSD6raQkWOgygY.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, 'Nothing to sayNothing to sayNothing to sayNothing to say', '<p>Nothing to say</p>', '<p>Nothing to say</p>', NULL, NULL, NULL, 12.00, NULL, NULL, 1, 1, NULL, '<p>Nothing to say</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, '2020-07-12 12:13:03', '2020-07-14 22:54:50', NULL, NULL, NULL),
('200714000000001', 'product 3', 'new', 'product-3-2886', 30, NULL, 1, NULL, NULL, 20, NULL, 0, 'public/upload/product_feature_image/j4b83XXDYKwN8IZR9Uic.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 'Hello to here Hello to hereHello to here', '<p>Main description for product</p>', '<p>Main description for product</p>', NULL, NULL, NULL, 10.00, NULL, NULL, 1, 0, NULL, '<p>Main description for product</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, '2020-07-13 23:54:28', '2020-07-14 22:54:15', NULL, NULL, NULL),
('200717000000001', 'product3', 'new', 'product3-1885', 20, 1, 0, NULL, NULL, 20, NULL, 5, 'public/upload/product_feature_image/n8an97Zq1UoRCNf41z9n.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, 2, 4, 'nothing nothingnothingnothingnothingnothingnothing', '<p>notjiin f</p>', NULL, NULL, NULL, NULL, 2.00, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 4, 4, '2020-07-16 23:32:42', '2020-07-16 23:32:42', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
('200705000000001', '200705000000001', 'public/upload/product_gallery/', 1, 1, '2020-07-05 01:05:17', '2020-07-05 01:05:17', NULL),
('200705000000002', '200705000000001', 'public/upload/product_gallery/', 1, 1, '2020-07-05 01:05:17', '2020-07-05 01:05:17', NULL),
('200705000000003', '200705000000001', 'public/upload/product_gallery/', 1, 1, '2020-07-05 01:05:17', '2020-07-05 01:05:17', NULL),
('200705000000004', '200705000000001', 'public/upload/product_gallery/', 1, 1, '2020-07-05 01:05:17', '2020-07-05 01:05:17', NULL),
('200705000000005', '200705000000002', 'public/upload/product_gallery/', 1, 1, '2020-07-05 05:20:23', '2020-07-05 05:20:23', NULL),
('200705000000006', '200705000000002', 'public/upload/product_gallery/', 1, 1, '2020-07-05 05:20:23', '2020-07-05 05:20:23', NULL),
('200705000000007', '200705000000002', 'public/upload/product_gallery/', 1, 1, '2020-07-05 05:20:23', '2020-07-05 05:20:23', NULL),
('200705000000008', '200705000000002', 'public/upload/product_gallery/', 1, 1, '2020-07-05 05:20:23', '2020-07-05 10:29:26', '2020-07-05 10:29:26'),
('200705000000009', '200705000000002', 'public/upload/product_gallery/', 1, 1, '2020-07-05 11:03:37', '2020-07-05 11:03:37', NULL),
('200705000000010', '200705000000002', 'public/upload/product_gallery/', 1, 1, '2020-07-05 11:03:37', '2020-07-05 11:03:37', NULL),
('200705000000011', '200705000000002', 'public/upload/product_gallery/', 1, 1, '2020-07-05 11:03:38', '2020-07-05 11:03:38', NULL),
('200712000000001', '200712000000001', 'public/upload/product_gallery/7orGepXVnzJh3KXuBSHG.jpg', 4, 4, '2020-07-12 12:11:55', '2020-07-12 12:11:55', NULL),
('200712000000002', '200712000000001', 'public/upload/product_gallery/bEPgdAtXynb1IW9ny4qx.jpg', 4, 4, '2020-07-12 12:11:55', '2020-07-12 12:11:55', NULL),
('200712000000003', '200712000000002', 'public/upload/product_gallery/K6r3P4FMGxuPWJN7Qnqh.jpeg', 1, 1, '2020-07-12 12:13:03', '2020-07-12 12:13:03', NULL),
('200712000000004', '200712000000002', 'public/upload/product_gallery/iV8pVXbPOMLiX4vKZYKA.jpg', 1, 1, '2020-07-12 12:13:03', '2020-07-12 12:13:03', NULL),
('200712000000005', '200712000000002', 'public/upload/product_gallery/TKiHDtUr8Nsj2cLzhXLk.jpg', 1, 1, '2020-07-12 12:13:03', '2020-07-12 12:13:03', NULL),
('200714000000001', '200714000000001', 'public/upload/product_gallery/AhtWCwpwL7oGsCxDTu1Y.jpg', 1, 1, '2020-07-13 23:54:28', '2020-07-13 23:54:28', NULL),
('200714000000002', '200714000000001', 'public/upload/product_gallery/78zpUbZExAvyDEoAs6HW.jpg', 1, 1, '2020-07-13 23:54:28', '2020-07-13 23:54:28', NULL),
('200714000000003', '200714000000001', 'public/upload/product_gallery/YoIi7rpkiJKx1Qdwo7WQ.jpg', 1, 1, '2020-07-13 23:54:29', '2020-07-13 23:54:29', NULL),
('200714000000004', '200714000000001', 'public/upload/product_gallery/PtAkz3ke3Y3aLw6ttE7x.png', 1, 1, '2020-07-13 23:54:29', '2020-07-13 23:54:29', NULL),
('200717000000001', '200717000000001', 'public/upload/product_gallery/Cga2ROfI2mh1a9nxCyrZ.jpg', 4, 4, '2020-07-16 23:32:42', '2020-07-16 23:32:42', NULL),
('200717000000002', '200717000000001', 'public/upload/product_gallery/YiLMLRVJb8VVhsej01d6.jpg', 4, 4, '2020-07-16 23:32:42', '2020-07-16 23:32:42', NULL),
('200717000000003', '200717000000001', 'public/upload/product_gallery/sofxz3Rr6fzHWTtR5saM.jpg', 4, 4, '2020-07-16 23:32:42', '2020-07-16 23:32:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_meta`
--

CREATE TABLE `product_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `meta_key` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_related`
--

CREATE TABLE `product_related` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_product_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `review` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_seo`
--

CREATE TABLE `product_seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `meta_key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `size` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `tag` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_varients`
--

CREATE TABLE `product_varients` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_varient` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` decimal(10,2) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_varients`
--

INSERT INTO `product_varients` (`id`, `product_id`, `product_varient`, `product_quantity`, `product_price`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
('200712000000001', '200712000000001', 's|green', '10.00', '200.00', 4, 1, NULL, '2020-07-12 12:11:55', '2020-07-14 22:55:19'),
('200712000000002', '200712000000002', 'size: x |Color: red', '200.00', '100.00', 1, 1, NULL, '2020-07-12 12:13:03', '2020-07-14 22:54:50'),
('200714000000001', '200714000000001', 'red', '10.00', '101.00', 1, 1, NULL, '2020-07-13 23:54:28', '2020-07-13 23:54:28'),
('200714000000002', '200714000000001', 'green', '10.00', '11.00', 1, 1, NULL, '2020-07-13 23:54:28', '2020-07-13 23:54:28'),
('200714000000003', '200714000000001', 'yellow', '10.00', '12.00', 1, 1, NULL, '2020-07-13 23:54:28', '2020-07-13 23:54:28'),
('200717000000001', '200717000000001', NULL, '20.00', '20.00', 4, 4, NULL, '2020-07-16 23:32:42', '2020-07-16 23:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `state_id` bigint(20) NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `user_id`, `name`, `email`, `contact_no`, `country_id`, `state_id`, `post_code`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 5, 'customer', 'customer@email.com', '18879113801', 3, 5, '12300', 'New Dilli', NULL, NULL, '2020-07-15 08:08:37', '2020-07-15 09:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_options`
--

CREATE TABLE `shipping_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `added_by` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Admin, 2 = Vendor',
  `method_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_options`
--

INSERT INTO `shipping_options` (`id`, `vendor_id`, `added_by`, `method_name`, `charge`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Pathao Currier', 10.00, 1, NULL, 1, 1, '2020-06-02 19:04:15', '2020-07-15 10:43:43'),
(2, NULL, 1, 'S.A Paribahon', 1.00, 1, NULL, 1, 1, '2020-07-15 10:44:42', '2020-07-15 10:44:42'),
(3, NULL, 1, 'Sundorban Curier Service', 2.00, 1, NULL, 1, 1, '2020-07-15 10:44:51', '2020-07-15 10:44:51'),
(4, NULL, 1, 'National Mail System', 2.00, 1, NULL, 1, 1, '2020-07-15 10:45:10', '2020-07-15 10:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `shop_settings`
--

CREATE TABLE `shop_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `logo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_settings`
--

INSERT INTO `shop_settings` (`id`, `vendor_id`, `logo`, `banner`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 4, 'public/upload/shop-logo/cjk2S8q8Dl7aJf1U9BZb.jpg', 'public/upload/shop-logo/UGnugevZRUYxrNGYrHi2.jpg', 1, NULL, 4, 4, '2020-07-16 22:38:58', '2020-07-16 22:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `icon`, `logo`, `name`, `slogan`, `phone_number`, `email`, `address`, `copyright`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'public/upload/site-setting\'/FP0V9RuTyKH8aeCyIv94.png', 'public/upload/site-setting/ccIndY544ICWxsp3Ijyb.png', 'Riley Lara', NULL, '12345678990', 'multivendor@email.com', '752 East Oak Street', 'Feits', 0, 1, NULL, '2020-07-12 00:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb_link` text COLLATE utf8mb4_unicode_ci,
  `twetter_link` text COLLATE utf8mb4_unicode_ci,
  `instagram_link` text COLLATE utf8mb4_unicode_ci,
  `pintarest_link` text COLLATE utf8mb4_unicode_ci,
  `linkedin_link` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_login_accesses`
--

CREATE TABLE `social_login_accesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `vendor_id`, `country_id`, `state_name`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'New York', 1, NULL, 1, 1, '2020-07-15 01:00:08', '2020-07-15 01:00:08'),
(2, NULL, 1, 'Ohio', 1, NULL, 1, 1, '2020-07-15 01:00:24', '2020-07-15 01:00:24'),
(3, NULL, 2, 'Dhaka', 1, NULL, 1, 1, '2020-07-15 01:00:36', '2020-07-15 01:00:36'),
(4, NULL, 2, 'Munshiganj', 1, NULL, 1, 1, '2020-07-15 01:00:50', '2020-07-15 01:00:50'),
(5, NULL, 3, 'Dilli', 1, NULL, 1, 1, '2020-07-15 01:01:21', '2020-07-15 01:01:21'),
(6, NULL, 3, 'Rajasthan', 1, NULL, 1, 1, '2020-07-15 01:01:34', '2020-07-15 01:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `store_reviews`
--

CREATE TABLE `store_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '3' COMMENT '1 = Approved, 2 = Rejected, 3 = Pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translation_languages`
--

CREATE TABLE `translation_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `language_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1=admin,2=vendor,3=affiliate_marketer,4=customer',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastLoginTime` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `vendor_rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `contact_no`, `email_verified_at`, `password`, `remember_token`, `lastLoginTime`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`, `role_id`, `vendor_rating`) VALUES
(1, 1, '	\r\nadmin', 'admin@email.com', NULL, NULL, '$2y$10$m4ZSPJRaz3C7chseDTpqCub3ZeN4Pn4IRfXFiifnbYN21hkP.4hbm', 'ApXSjwv7xFWKdUNxJwCWcNl161D5GUMdogvFzRBlwBbDXlVUnhrnlSEviGjb', '2020-07-17 04:14:45', 1, NULL, NULL, NULL, NULL, '2020-07-16 22:14:45', 0, NULL),
(4, 2, 'vendor', 'vendor@email.com', NULL, NULL, '$2y$10$ypLSmgdsc1Bgt3grKhX2husj9ci0.z8YAO1SCatFAbY43JF/6DrxC', NULL, NULL, 1, NULL, NULL, NULL, '2020-07-12 10:36:36', '2020-07-12 11:58:02', 0, NULL),
(5, 4, 'customer', 'customer@email.com', '18879113801', NULL, '$2y$10$9ZdEq.Hn7c0RMgA3fu7HZusn8NPhtK8ATbDxTWCUQX4//Tf1DmISe', NULL, NULL, 1, NULL, NULL, NULL, '2020-07-15 08:08:37', '2020-07-15 08:08:37', 0, NULL),
(7, 4, 'Riley Lara', 'customer2@email.com', '18879113801', NULL, '$2y$10$5q1gfKJeyWRPYzOYesb34ONjH8S3NaJ36Pa5Ouc/mvRGwRXVNa77e', NULL, NULL, 1, NULL, NULL, NULL, '2020-07-16 04:16:24', '2020-07-16 04:16:24', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `user_type_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-06-22 00:34:34', '2020-06-22 00:34:34'),
(2, 'vendor', '2020-06-22 00:34:34', '2020-06-22 00:34:34'),
(3, 'affiliate_marketer', '2020-06-22 00:34:34', '2020-06-22 00:34:34'),
(4, 'customer', '2020-06-22 00:34:34', '2020-06-22 00:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_pages`
--

CREATE TABLE `vendor_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `page_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl_no` int(11) NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reviews`
--

CREATE TABLE `vendor_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `review` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_subscriptions`
--

CREATE TABLE `vendor_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `vendor_subscription_plan_id` bigint(20) NOT NULL,
  `expaire_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_subscriptions`
--

INSERT INTO `vendor_subscriptions` (`id`, `user_id`, `vendor_subscription_plan_id`, `expaire_date`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 4, 1, '2020-08-11', 1, 4, 4, '2020-07-12 11:58:02', '2020-07-12 11:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_subscription_plans`
--

CREATE TABLE `vendor_subscription_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `product_limitation` int(11) DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_subscription_plans`
--

INSERT INTO `vendor_subscription_plans` (`id`, `title`, `price`, `duration`, `product_limitation`, `description`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Free', 0.00, 30, 10, 'Free plan for testing', 1, NULL, 1, 1, '2020-07-12 09:38:29', '2020-07-12 09:38:29'),
(2, 'Basic', 10.00, 30, 30, 'Basic Plan', 1, NULL, 1, 1, '2020-07-12 09:39:07', '2020-07-12 09:39:07'),
(3, 'Standard', 20.00, 60, 40, 'Standard Plan', 1, NULL, 1, 1, '2020-07-12 09:39:42', '2020-07-12 10:15:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_email_message`
--
ALTER TABLE `auto_email_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_to_orders`
--
ALTER TABLE `coupon_to_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_to_users`
--
ALTER TABLE `discount_to_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_configurations`
--
ALTER TABLE `email_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite_seller`
--
ALTER TABLE `favourite_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_banners`
--
ALTER TABLE `home_page_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_setups`
--
ALTER TABLE `home_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_to_activities`
--
ALTER TABLE `module_to_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_to_roles`
--
ALTER TABLE `module_to_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_to_users`
--
ALTER TABLE `module_to_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_billing_addresses`
--
ALTER TABLE `order_billing_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_shipping_addresses`
--
ALTER TABLE `order_shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_title_unique` (`title`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_meta`
--
ALTER TABLE `product_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_related`
--
ALTER TABLE `product_related`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_seo`
--
ALTER TABLE `product_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_varients`
--
ALTER TABLE `product_varients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_options`
--
ALTER TABLE `shipping_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_settings`
--
ALTER TABLE `shop_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_login_accesses`
--
ALTER TABLE `social_login_accesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_reviews`
--
ALTER TABLE `store_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translation_languages`
--
ALTER TABLE `translation_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_pages`
--
ALTER TABLE `vendor_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_subscriptions`
--
ALTER TABLE `vendor_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_subscription_plans`
--
ALTER TABLE `vendor_subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auto_email_message`
--
ALTER TABLE `auto_email_message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount_to_users`
--
ALTER TABLE `discount_to_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_configurations`
--
ALTER TABLE `email_configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite_seller`
--
ALTER TABLE `favourite_seller`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_page_banners`
--
ALTER TABLE `home_page_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_setups`
--
ALTER TABLE `home_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module_to_activities`
--
ALTER TABLE `module_to_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module_to_roles`
--
ALTER TABLE `module_to_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module_to_users`
--
ALTER TABLE `module_to_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_meta`
--
ALTER TABLE `product_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_related`
--
ALTER TABLE `product_related`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_seo`
--
ALTER TABLE `product_seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_options`
--
ALTER TABLE `shipping_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop_settings`
--
ALTER TABLE `shop_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_login_accesses`
--
ALTER TABLE `social_login_accesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `store_reviews`
--
ALTER TABLE `store_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translation_languages`
--
ALTER TABLE `translation_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor_pages`
--
ALTER TABLE `vendor_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_subscriptions`
--
ALTER TABLE `vendor_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_subscription_plans`
--
ALTER TABLE `vendor_subscription_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
