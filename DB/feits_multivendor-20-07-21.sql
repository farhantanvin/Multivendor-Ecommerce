-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 08:12 AM
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
(1, 'banner_portrait_top', 'THID RAMADANFEATURE ADAVRTISEMENT/PROMOTIONAL STUFFS', '70% OFF', 'Shop Now', 'public/upload/advertisement/Ta4Xa6RnJpNXwm5KtM0g.png', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-20 23:18:10'),
(2, 'promotion_offer_first', 'MORE TREADING PRODUCT SHOWCASING', '100% OFF', 'Shop Now', 'public/upload/advertisement/qn1XQbegUZoojfPUFeDm.jpg', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-20 23:02:46'),
(3, 'promotion_offer_second', 'MORE TREADING PRODUCT SHOWCASING', NULL, 'Shop Now', 'public/upload/advertisement/H8PEzYLhfm5aAAKL2JYI.jpg', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-20 23:03:28'),
(4, 'promotion_offer_third', 'MORE TREADING PRODUCT SHOWCASING', NULL, 'Shop Now', 'public/upload/advertisement/ILujKzfl93ODXwCBPxtX.jpg', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-20 23:03:39'),
(5, 'banner_portrait_bottom', 'THID RAMADANFEATURE ADAVRTISEMENT/PROMOTIONAL STUFFS', '70% OFF', 'Shop Now', 'public/upload/advertisement/4pcXUO4yjrHpAtB7Dxov.png', 'www.facebook.com', 1, NULL, NULL, '2020-07-12 00:21:47', '2020-07-20 23:18:46');

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
(1, 5, 'customer', 'customer@email.com', '18879113801', 2, 3, '72211', '988 Green Clarendon Avenue', NULL, NULL, '2020-07-15 08:08:37', '2020-07-15 08:08:37'),
(2, 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsum n', 1, 1, 'Voluptate in Nam dui', 'Sed maiores sed ea a', 9, 9, '2020-07-19 09:17:56', '2020-07-19 09:17:56'),
(3, 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', 2, 3, '1230', 'dhaka', 10, 10, '2020-07-19 09:26:56', '2020-07-19 09:26:56');

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
(1, 'Geoffrey Warren', 'Quam reprehenderit t', 'public/upload/brand/jj9j3oZKLEkkVjFAJLgF.png', 'geoffrey-warren-57', 'Provident laborum l', NULL, 1, NULL, 1, 1, '2020-06-28 10:24:36', '2020-07-20 23:14:15'),
(2, 'Adele Head', 'Itaque dolore ut con', 'public/upload/brand/phnjKHNIxy9lJs3QZjVX.png', 'adele-head-69', 'Dolore ad voluptas d', NULL, 1, NULL, 1, 1, '2020-06-28 10:25:04', '2020-07-20 23:14:27'),
(3, 'xiaomi', 'xiaomi', 'public/upload/brand/GAGO4TGQMxNGC6hM16Fu.png', 'xiaomi-56', 'xiaomi', 'vxiaomi', 1, NULL, 1, 1, '2020-07-20 23:15:09', '2020-07-20 23:15:09'),
(4, 'philips', 'philips', 'public/upload/brand/yRifttcaD7CHOptLAbY2.png', 'philips-70', 'philips', 'philips', 1, NULL, 1, 1, '2020-07-20 23:15:35', '2020-07-20 23:15:35');

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
(1, 0, 'Shirt', 'Quae natus consequat', 'public/upload/category/WQIoISBSTtpFwfYcS6P8.jpg', 'claire-shaffer-67', 1, 'Erich Molina', NULL, 1, NULL, 1, 1, '2020-05-12 00:46:31', '2020-07-20 23:11:00'),
(2, 1, 'Men\'shirt', 'Illum iusto molliti', 'public/upload/category/H8mFfFUwFPrmq7vcF5BN.jpg', 'nero-ewing-67', 0, 'Ciaran Becker', NULL, 1, NULL, 1, 1, '2020-05-12 01:41:01', '2020-07-17 08:33:26'),
(3, 1, 'Women\'s Shirt', 'Et architecto minus', 'public/upload/category/MuyCiG6TvUO9EsueGk4j.jpg', 'channing-sosa-93', 1, NULL, NULL, 1, NULL, 1, 1, '2020-06-28 08:32:07', '2020-07-20 23:11:56'),
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
(2, 'Mail Trap', 'null', 'smtp.mailtrap.io', '2525', 'null', 'eb05fa7594ba5b', 'a38a678603a363', 'from@example.com', 'Multivendor', 1, 1, 1, '2020-06-21 23:11:04', '2020-07-20 03:36:35');

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
(1, 'Nice To Buy', 'public/upload/home-page-banner/bDuCLa7M6cam0PPKywAm.png', 'nice-to-buy-17', 1, NULL, 1, 1, NULL, '2020-07-12 00:26:06', '2020-07-20 22:34:32'),
(2, 'Nothing to say', 'public/upload/home-page-banner/SACVPDtek0KNoFQ81xlv.png', 'nothing-to-say-72', 1, NULL, 1, 1, NULL, '2020-07-12 00:27:47', '2020-07-20 22:49:17'),
(3, 'Malaysia', 'public/upload/home-page-banner/6zpF9oTyRCoZbsRRrB9g.png', 'malaysia-11', 1, NULL, 1, 1, NULL, '2020-07-12 00:28:34', '2020-07-20 22:39:29');

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
(198, '2020_07_16_101136_add_column_to_users_table', 34),
(199, '2020_07_15_091026_add_rating_review_image_vendor_i_d_to_product_riviews_table', 35),
(200, '2020_07_16_053724_add_reply_id_to_product_comments_table', 35),
(201, '2020_07_17_170936_add_column_varient_name_to_order_details_table', 36),
(202, '2020_07_17_174328_create_wish_lists_table', 37),
(203, '2020_07_18_044729_add_column_affiliate_code_to_users_table', 38),
(204, '2020_07_18_145459_create_offer_sells_table', 39),
(205, '2020_07_18_172942_create_offers_table', 39),
(206, '2020_07_19_173725_add_payment_status_column_to_orders_table', 40),
(208, '2020_07_20_042738_create_payment_responces_table', 41);

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
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_name` text COLLATE utf8mb4_unicode_ci,
  `start_date` text COLLATE utf8mb4_unicode_ci,
  `end_date` text COLLATE utf8mb4_unicode_ci,
  `offer_amount` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer_name`, `start_date`, `end_date`, `offer_amount`, `created_by`, `updated_by`, `deleted_by`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Big Offer', '07/01/2020', '07/04/2020', 10, 1, 1, NULL, 1, NULL, '2020-07-20 03:51:53', '2020-07-20 03:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `offer_sells`
--

CREATE TABLE `offer_sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_sells`
--

INSERT INTO `offer_sells` (`id`, `offer_id`, `product_id`, `created_by`, `updated_by`, `deleted_by`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 200712000000001, 1, 1, NULL, 1, NULL, '2020-07-20 03:52:11', '2020-07-20 03:52:11'),
(2, 1, 200712000000001, 1, 1, NULL, 1, NULL, '2020-07-20 03:52:18', '2020-07-20 03:52:18'),
(3, 1, 200714000000001, 1, 1, NULL, 1, NULL, '2020-07-20 03:52:26', '2020-07-20 03:52:26'),
(4, 1, 200717000000001, 1, 1, NULL, 1, NULL, '2020-07-20 03:52:33', '2020-07-20 03:52:33');

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
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `orders` (`id`, `order_number`, `customer_id`, `shipping_method`, `payment_method`, `payment_status`, `order_date`, `order_status`, `currency`, `currency_value`, `order_shipping`, `order_tax`, `order_tracking_number`, `delivery_charge`, `discount`, `subtotal`, `total`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
('200716000000039', '200716000000039', 5, 4, 3, NULL, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 147.00, '200716000000039', 20.00, 0.00, 700.00, 867.00, 5, 5, '2020-07-16 00:50:04', '2020-07-16 00:50:04'),
('200716000000040', '200716000000040', 5, 4, 4, NULL, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 189.00, '200716000000040', 30.00, 0.00, 900.00, 1119.00, 5, 5, '2020-07-16 00:51:31', '2020-07-16 00:51:31'),
('200716000000041', '200716000000041', 5, 4, 3, NULL, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 42.00, '200716000000041', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-16 00:52:41', '2020-07-16 00:52:41'),
('200716000000042', '200716000000042', 5, 4, 3, NULL, '2020-07-15 18:00:00', 3, NULL, NULL, NULL, 63.00, '200716000000042', 10.00, 0.00, 300.00, 373.00, 5, 5, '2020-07-16 00:53:44', '2020-07-16 00:53:44'),
('200717000000001', '200717000000001', 5, 3, 3, NULL, '2020-07-16 18:00:00', 3, NULL, NULL, NULL, 139.02, '200717000000001', 84.00, 0.00, 662.00, 885.02, 5, 5, '2020-07-17 11:22:06', '2020-07-17 11:22:06'),
('200718000000001', '200718000000001', 5, 2, 3, NULL, '2020-07-17 18:00:00', 3, NULL, NULL, NULL, 4.20, '200718000000001', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-17 19:51:06', '2020-07-17 19:51:06'),
('200718000000002', '200718000000002', 5, 2, 2, NULL, '2020-07-17 18:00:00', 3, NULL, NULL, NULL, 84.00, '200718000000002', 50.00, 0.00, 400.00, 534.00, 5, 5, '2020-07-18 00:54:18', '2020-07-18 00:54:18'),
('200719000000001', '200719000000001', 5, 4, 1, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 73.50, '200719000000001', 35.00, 0.00, 350.00, 458.50, 5, 5, '2020-07-19 08:46:05', '2020-07-19 08:46:05'),
('200719000000002', '200719000000002', 9, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 25.20, '200719000000002', 2.00, 0.00, 120.00, 147.20, 9, 9, '2020-07-19 09:21:48', '2020-07-19 09:21:48'),
('200719000000003', '200719000000003', 9, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 25.20, '200719000000003', 2.00, 0.00, 120.00, 147.20, 9, 9, '2020-07-19 09:22:24', '2020-07-19 09:22:24'),
('200719000000004', '200719000000004', 9, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 25.20, '200719000000004', 2.00, 0.00, 120.00, 147.20, 9, 9, '2020-07-19 09:22:44', '2020-07-19 09:22:44'),
('200719000000005', '200719000000005', 9, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 25.20, '200719000000005', 2.00, 0.00, 120.00, 147.20, 9, 9, '2020-07-19 09:23:00', '2020-07-19 09:23:00'),
('200719000000006', '200719000000006', 9, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 25.20, '200719000000006', 2.00, 0.00, 120.00, 147.20, 9, 9, '2020-07-19 09:23:21', '2020-07-19 09:23:21'),
('200719000000007', '200719000000007', 10, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 25.20, '200719000000007', 2.00, 0.00, 120.00, 147.20, 10, 10, '2020-07-19 09:27:09', '2020-07-19 09:27:09'),
('200719000000008', '200719000000008', 9, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 25.20, '200719000000008', 2.00, 0.00, 120.00, 147.20, 9, 9, '2020-07-19 09:29:13', '2020-07-19 09:29:13'),
('200719000000009', '200719000000009', 10, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000009', 0.00, 0.00, 200.00, 242.00, 10, 10, '2020-07-19 09:36:43', '2020-07-19 09:36:43'),
('200719000000010', '200719000000010', 10, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 88.20, '200719000000010', 12.00, 0.00, 420.00, 520.20, 10, 10, '2020-07-19 09:55:06', '2020-07-19 09:55:06'),
('200719000000011', '200719000000011', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 2.31, '200719000000011', 10.00, 0.00, 11.00, 23.31, 5, 5, '2020-07-19 10:28:51', '2020-07-19 10:28:51'),
('200719000000012', '200719000000012', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 21.00, '200719000000012', 0.00, 0.00, 100.00, 121.00, 5, 5, '2020-07-19 10:31:00', '2020-07-19 10:31:00'),
('200719000000013', '200719000000013', 5, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 21.00, '200719000000013', 0.00, 0.00, 100.00, 121.00, 5, 5, '2020-07-19 11:00:00', '2020-07-19 11:00:00'),
('200719000000014', '200719000000014', 5, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000014', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 11:00:12', '2020-07-19 11:00:12'),
('200719000000015', '200719000000015', 5, 2, 1, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000015', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 11:00:30', '2020-07-19 11:00:30'),
('200719000000016', '200719000000016', 5, 2, 1, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000016', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 11:01:18', '2020-07-19 11:01:18'),
('200719000000017', '200719000000017', 5, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000017', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 11:01:34', '2020-07-19 11:01:34'),
('200719000000018', '200719000000018', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 4.20, '200719000000018', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-19 11:40:45', '2020-07-19 11:40:45'),
('200719000000019', '200719000000019', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000019', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 11:43:57', '2020-07-19 11:43:57'),
('200719000000020', '200719000000020', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 21.00, '200719000000020', 0.00, 0.00, 100.00, 121.00, 5, 5, '2020-07-19 11:44:51', '2020-07-19 11:44:51'),
('200719000000021', '200719000000021', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 4.20, '200719000000021', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-19 11:46:41', '2020-07-19 11:46:41'),
('200719000000022', '200719000000022', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 4.20, '200719000000022', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-19 11:47:42', '2020-07-19 11:47:42'),
('200719000000023', '200719000000023', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000023', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 11:49:09', '2020-07-19 11:49:09'),
('200719000000024', '200719000000024', 5, 2, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 21.00, '200719000000024', 0.00, 0.00, 100.00, 121.00, 5, 5, '2020-07-19 11:53:12', '2020-07-19 11:53:12'),
('200719000000025', '200719000000025', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000025', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 11:55:59', '2020-07-19 11:55:59'),
('200719000000026', '200719000000026', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000026', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 11:57:35', '2020-07-19 11:57:35'),
('200719000000027', '200719000000027', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000027', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 11:59:51', '2020-07-19 11:59:51'),
('200719000000028', '200719000000028', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 0.00, '200719000000028', 0.00, 0.00, 0.00, 0.00, 5, 5, '2020-07-19 12:01:22', '2020-07-19 12:01:22'),
('200719000000029', '200719000000029', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000029', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:06:15', '2020-07-19 12:06:15'),
('200719000000030', '200719000000030', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000030', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:07:33', '2020-07-19 12:07:33'),
('200719000000031', '200719000000031', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000031', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:16:40', '2020-07-19 12:16:40'),
('200719000000032', '200719000000032', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000032', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:23:29', '2020-07-19 12:23:29'),
('200719000000033', '200719000000033', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000033', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:26:43', '2020-07-19 12:26:43'),
('200719000000034', '200719000000034', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000034', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:27:51', '2020-07-19 12:27:51'),
('200719000000035', '200719000000035', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000035', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:28:44', '2020-07-19 12:28:44'),
('200719000000036', '200719000000036', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000036', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:29:10', '2020-07-19 12:29:10'),
('200719000000037', '200719000000037', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000037', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:31:10', '2020-07-19 12:31:10'),
('200719000000038', '200719000000038', 5, 3, 5, '200719000000038', '2020-07-19 18:50:14', 3, NULL, NULL, NULL, 42.00, '200719000000038', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:45:49', '2020-07-19 12:50:14'),
('200719000000039', '200719000000039', 5, 3, 5, 'VALIDATED', '2020-07-19 18:55:07', 3, NULL, NULL, NULL, 42.00, '200719000000039', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:53:12', '2020-07-19 12:55:07'),
('200719000000040', '200719000000040', 5, 1, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000040', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 12:56:33', '2020-07-19 12:56:33'),
('200719000000041', '200719000000041', 5, 1, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000041', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 13:13:09', '2020-07-19 13:13:09'),
('200719000000042', '200719000000042', 5, 1, 5, 'system error: (unable to process transaction request)', '2020-07-19 19:15:40', 3, NULL, NULL, NULL, 42.00, '200719000000042', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 13:13:33', '2020-07-19 13:15:40'),
('200719000000043', '200719000000043', 5, 3, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000043', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 13:18:08', '2020-07-19 13:18:08'),
('200719000000044', '200719000000044', 5, 4, 5, NULL, '2020-07-18 18:00:00', 3, NULL, NULL, NULL, 42.00, '200719000000044', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-19 13:19:34', '2020-07-19 13:19:34'),
('200719000000045', '200719000000045', 5, 4, 5, 'Cancelled by User', '2020-07-19 19:21:25', 3, NULL, NULL, NULL, 4.20, '200719000000045', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-19 13:21:09', '2020-07-19 13:21:25'),
('200720000000001', '200720000000001', 5, 4, 5, NULL, '2020-07-19 18:00:00', 3, NULL, NULL, NULL, 46.20, '200720000000001', 12.00, 0.00, 220.00, 278.20, 5, 5, '2020-07-19 22:25:06', '2020-07-19 22:25:06'),
('200720000000002', '200720000000002', 5, 4, 5, 'success', '2020-07-20 04:53:34', 3, NULL, NULL, NULL, 4.20, '200720000000002', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-19 22:42:46', '2020-07-19 22:53:34'),
('200720000000003', '200720000000003', 5, 2, 5, 'failed', '2020-07-20 05:02:04', 3, NULL, NULL, NULL, 21.00, '200720000000003', 0.00, 0.00, 100.00, 121.00, 5, 5, '2020-07-19 23:01:54', '2020-07-19 23:02:04'),
('200720000000004', '200720000000004', 5, 3, 2, NULL, '2020-07-19 18:00:00', 3, NULL, NULL, NULL, 4.20, '200720000000004', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-20 00:36:37', '2020-07-20 00:36:37'),
('200720000000005', '200720000000005', 5, 3, 2, NULL, '2020-07-19 18:00:00', 3, NULL, NULL, NULL, 42.00, '200720000000005', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-20 00:38:03', '2020-07-20 00:38:03'),
('200720000000006', '200720000000006', 5, 2, 2, NULL, '2020-07-19 18:00:00', 3, NULL, NULL, NULL, 21.00, '200720000000006', 0.00, 0.00, 100.00, 121.00, 5, 5, '2020-07-20 00:45:37', '2020-07-20 00:45:37'),
('200720000000007', '200720000000007', 5, 1, 2, NULL, '2020-07-19 18:00:00', 3, NULL, NULL, NULL, 4.20, '200720000000007', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-20 00:47:03', '2020-07-20 00:47:03'),
('200720000000008', '200720000000008', 5, 1, 2, NULL, '2020-07-19 18:00:00', 3, NULL, NULL, NULL, 42.00, '200720000000008', 10.00, 0.00, 200.00, 252.00, 5, 5, '2020-07-20 00:52:27', '2020-07-20 00:52:27'),
('200720000000009', '200720000000009', 5, 2, 2, 'success', '2020-07-20 07:59:42', 3, NULL, NULL, NULL, 4.20, '200720000000009', 2.00, 0.00, 20.00, 26.20, 5, 5, '2020-07-20 00:55:38', '2020-07-20 01:59:42'),
('200720000000010', '200720000000010', 5, 2, 2, 'success', '2020-07-20 08:03:54', 3, NULL, NULL, NULL, 29.40, '200720000000010', 4.00, 0.00, 140.00, 173.40, 5, 5, '2020-07-20 02:03:21', '2020-07-20 02:03:54'),
('200720000000011', '200720000000011', 5, 2, 2, 'success', '2020-07-20 08:07:34', 3, NULL, NULL, NULL, 101.01, '200720000000011', 37.00, 0.00, 481.00, 619.01, 5, 5, '2020-07-20 02:07:09', '2020-07-20 02:07:34'),
('200720000000012', '200720000000012', 5, 3, 5, 'success', '2020-07-20 11:52:50', 3, NULL, NULL, NULL, 109.20, '200720000000012', 22.00, 0.00, 520.00, 651.20, 5, 5, '2020-07-20 05:52:36', '2020-07-20 05:52:50');

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
('200716000000036', '200716000000042', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-16 00:53:44', '2020-07-16 00:53:44'),
('200717000000001', '200717000000001', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-17 11:22:07', '2020-07-17 11:22:07'),
('200718000000001', '200718000000001', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-17 19:51:06', '2020-07-17 19:51:06'),
('200718000000002', '200718000000002', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-18 00:54:18', '2020-07-18 00:54:18'),
('200719000000001', '200719000000001', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 08:46:05', '2020-07-19 08:46:05'),
('200719000000002', '200719000000002', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', 1, 1, 'Sed maiores sed ea a', 'Voluptate in Nam dui', 9, 9, '2020-07-19 09:21:48', '2020-07-19 09:21:48'),
('200719000000003', '200719000000003', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', 1, 1, 'Sed maiores sed ea a', 'Voluptate in Nam dui', 9, 9, '2020-07-19 09:22:24', '2020-07-19 09:22:24'),
('200719000000004', '200719000000004', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', 1, 1, 'Sed maiores sed ea a', 'Voluptate in Nam dui', 9, 9, '2020-07-19 09:22:44', '2020-07-19 09:22:44'),
('200719000000005', '200719000000005', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', 1, 1, 'Sed maiores sed ea a', 'Voluptate in Nam dui', 9, 9, '2020-07-19 09:23:01', '2020-07-19 09:23:01'),
('200719000000006', '200719000000006', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', 1, 1, 'Sed maiores sed ea a', 'Voluptate in Nam dui', 9, 9, '2020-07-19 09:23:22', '2020-07-19 09:23:22'),
('200719000000007', '200719000000007', 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', 3, 2, 'dhaka', '1230', 10, 10, '2020-07-19 09:27:10', '2020-07-19 09:27:10'),
('200719000000008', '200719000000008', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', 1, 1, 'Sed maiores sed ea a', 'Voluptate in Nam dui', 9, 9, '2020-07-19 09:29:14', '2020-07-19 09:29:14'),
('200719000000009', '200719000000009', 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', 3, 2, 'dhaka', '1230', 10, 10, '2020-07-19 09:36:44', '2020-07-19 09:36:44'),
('200719000000010', '200719000000010', 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', 3, 2, 'dhaka', '1230', 10, 10, '2020-07-19 09:55:07', '2020-07-19 09:55:07'),
('200719000000011', '200719000000011', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 10:28:51', '2020-07-19 10:28:51'),
('200719000000012', '200719000000012', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 10:31:00', '2020-07-19 10:31:00'),
('200719000000013', '200719000000013', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:00:00', '2020-07-19 11:00:00'),
('200719000000014', '200719000000014', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:00:12', '2020-07-19 11:00:12'),
('200719000000015', '200719000000015', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:00:31', '2020-07-19 11:00:31'),
('200719000000016', '200719000000016', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:01:19', '2020-07-19 11:01:19'),
('200719000000017', '200719000000017', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:01:34', '2020-07-19 11:01:34'),
('200719000000018', '200719000000018', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:40:45', '2020-07-19 11:40:45'),
('200719000000019', '200719000000019', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:43:57', '2020-07-19 11:43:57'),
('200719000000020', '200719000000020', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:44:51', '2020-07-19 11:44:51'),
('200719000000021', '200719000000021', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:46:41', '2020-07-19 11:46:41'),
('200719000000022', '200719000000022', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:47:43', '2020-07-19 11:47:43'),
('200719000000023', '200719000000023', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:49:10', '2020-07-19 11:49:10'),
('200719000000024', '200719000000024', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:53:12', '2020-07-19 11:53:12'),
('200719000000025', '200719000000025', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:55:59', '2020-07-19 11:55:59'),
('200719000000026', '200719000000026', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:57:36', '2020-07-19 11:57:36'),
('200719000000027', '200719000000027', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 11:59:51', '2020-07-19 11:59:51'),
('200719000000028', '200719000000028', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:01:22', '2020-07-19 12:01:22'),
('200719000000029', '200719000000029', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:06:15', '2020-07-19 12:06:15'),
('200719000000030', '200719000000030', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:07:33', '2020-07-19 12:07:33'),
('200719000000031', '200719000000031', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:16:40', '2020-07-19 12:16:40'),
('200719000000032', '200719000000032', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:23:29', '2020-07-19 12:23:29'),
('200719000000033', '200719000000033', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:26:44', '2020-07-19 12:26:44'),
('200719000000034', '200719000000034', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:27:51', '2020-07-19 12:27:51'),
('200719000000035', '200719000000035', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:28:44', '2020-07-19 12:28:44'),
('200719000000036', '200719000000036', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:29:10', '2020-07-19 12:29:10'),
('200719000000037', '200719000000037', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:31:10', '2020-07-19 12:31:10'),
('200719000000038', '200719000000038', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:45:50', '2020-07-19 12:45:50'),
('200719000000039', '200719000000039', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:53:12', '2020-07-19 12:53:12'),
('200719000000040', '200719000000040', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 12:56:34', '2020-07-19 12:56:34'),
('200719000000041', '200719000000041', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 13:13:09', '2020-07-19 13:13:09'),
('200719000000042', '200719000000042', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 13:13:33', '2020-07-19 13:13:33'),
('200719000000043', '200719000000043', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 13:18:09', '2020-07-19 13:18:09'),
('200719000000044', '200719000000044', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 13:19:34', '2020-07-19 13:19:34'),
('200719000000045', '200719000000045', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 13:21:09', '2020-07-19 13:21:09'),
('200720000000001', '200720000000001', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 22:25:07', '2020-07-19 22:25:07'),
('200720000000002', '200720000000002', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 22:42:46', '2020-07-19 22:42:46'),
('200720000000003', '200720000000003', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-19 23:01:54', '2020-07-19 23:01:54'),
('200720000000004', '200720000000004', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 00:36:37', '2020-07-20 00:36:37'),
('200720000000005', '200720000000005', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 00:38:03', '2020-07-20 00:38:03'),
('200720000000006', '200720000000006', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 00:45:37', '2020-07-20 00:45:37'),
('200720000000007', '200720000000007', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 00:47:04', '2020-07-20 00:47:04'),
('200720000000008', '200720000000008', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 00:52:27', '2020-07-20 00:52:27'),
('200720000000009', '200720000000009', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 00:55:39', '2020-07-20 00:55:39'),
('200720000000010', '200720000000010', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 02:03:22', '2020-07-20 02:03:22'),
('200720000000011', '200720000000011', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 02:07:10', '2020-07-20 02:07:10'),
('200720000000012', '200720000000012', 5, 'customer', 'customer@email.com', '18879113801', 3, 2, '988 Green Clarendon Avenue', '72211', 5, 5, '2020-07-20 05:52:37', '2020-07-20 05:52:37');

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
  `product_varient_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_varient_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `order_details` (`id`, `order_id`, `order_number`, `vendor_id`, `product_id`, `product_varient_id`, `product_varient_name`, `quantity`, `price`, `regular_price`, `delivery_charge`, `vat`, `discount`, `total`, `order_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
('200716000000036', '200716000000023', '200716000000023', 0, '200712000000002', '2147483647', NULL, 1, 100.00, 0.00, 0.00, 17.85, 15.00, 102.85, 1, 5, 5, '2020-07-15 22:31:12', '2020-07-15 22:31:12'),
('200716000000048', '200716000000029', '200716000000029', 0, '200712000000002', '2147483647', NULL, 1, 100.00, 0.00, 0.00, 17.85, 15.00, 102.85, 1, 5, 5, '2020-07-15 22:39:16', '2020-07-15 22:39:16'),
('200716000000061', '200716000000039', '200716000000039', 0, '200712000000002', '2147483647', NULL, 3, 100.00, 0.00, 0.00, 21.00, 0.00, 363.00, 4, 5, 1, '2020-07-16 00:50:04', '2020-07-20 05:41:26'),
('200716000000062', '200716000000039', '200716000000039', 4, '200712000000001', '2147483647', NULL, 2, 200.00, 210.00, 20.00, 42.00, 0.00, 484.00, 4, 5, 1, '2020-07-16 00:50:05', '2020-07-20 05:41:47'),
('200716000000063', '200716000000040', '200716000000040', 0, '200712000000002', '2147483647', NULL, 3, 100.00, 0.00, 0.00, 21.00, 0.00, 363.00, 3, 5, 5, '2020-07-16 00:51:31', '2020-07-16 00:51:31'),
('200716000000064', '200716000000040', '200716000000040', 4, '200712000000001', '2147483647', NULL, 3, 200.00, 210.00, 30.00, 42.00, 0.00, 726.00, 3, 5, 5, '2020-07-16 00:51:31', '2020-07-16 00:51:31'),
('200716000000065', '200716000000041', '200716000000041', 4, '200712000000001', '2147483647', NULL, 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-16 00:52:41', '2020-07-16 00:52:41'),
('200716000000066', '200716000000042', '200716000000042', 0, '200712000000002', '2147483647', NULL, 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 1, 5, 5, '2020-07-16 00:53:44', '2020-07-16 11:03:01'),
('200716000000067', '200716000000042', '200716000000042', 4, '200712000000001', '2147483647', NULL, 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 2, 5, 5, '2020-07-16 00:53:44', '2020-07-16 11:03:07'),
('200717000000001', '200717000000001', '200717000000001', 0, '200717000000002', '200717000000003', '|Medium', 2, 150.00, 200.00, 50.00, 31.50, 0.00, 363.00, 5, 5, 1, '2020-07-17 11:22:06', '2020-07-17 11:42:03'),
('200717000000002', '200717000000001', '200717000000001', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-17 11:22:06', '2020-07-17 11:22:06'),
('200717000000003', '200717000000001', '200717000000001', 4, '200717000000001', '200717000000001', '', 2, 20.00, 0.00, 4.00, 4.20, 0.00, 48.40, 3, 5, 5, '2020-07-17 11:22:07', '2020-07-17 11:22:07'),
('200717000000004', '200717000000001', '200717000000001', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-17 11:22:07', '2020-07-17 11:22:07'),
('200717000000005', '200717000000001', '200717000000001', 0, '200714000000001', '200714000000002', '|green', 2, 11.00, 0.00, 20.00, 2.31, 0.00, 26.62, 3, 5, 5, '2020-07-17 11:22:07', '2020-07-17 11:22:07'),
('200718000000001', '200718000000001', '200718000000001', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-17 19:51:06', '2020-07-17 19:51:06'),
('200718000000002', '200718000000002', '200718000000002', 0, '200717000000002', '200717000000003', '|Medium', 2, 150.00, 200.00, 50.00, 31.50, 0.00, 363.00, 3, 5, 5, '2020-07-18 00:54:18', '2020-07-18 00:54:18'),
('200718000000003', '200718000000002', '200718000000002', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 5, 5, 1, '2020-07-18 00:54:18', '2020-07-20 05:42:32'),
('200719000000001', '200719000000001', '200719000000001', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 08:46:05', '2020-07-19 08:46:05'),
('200719000000002', '200719000000001', '200719000000001', 0, '200717000000002', '200717000000003', '|Medium', 1, 150.00, 200.00, 25.00, 31.50, 0.00, 181.50, 3, 5, 5, '2020-07-19 08:46:05', '2020-07-19 08:46:05'),
('200719000000003', '200719000000002', '200719000000002', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 9, 9, '2020-07-19 09:21:48', '2020-07-19 09:21:48'),
('200719000000004', '200719000000002', '200719000000002', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 9, 9, '2020-07-19 09:21:48', '2020-07-19 09:21:48'),
('200719000000005', '200719000000003', '200719000000003', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 9, 9, '2020-07-19 09:22:24', '2020-07-19 09:22:24'),
('200719000000006', '200719000000003', '200719000000003', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 9, 9, '2020-07-19 09:22:24', '2020-07-19 09:22:24'),
('200719000000007', '200719000000004', '200719000000004', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 9, 9, '2020-07-19 09:22:44', '2020-07-19 09:22:44'),
('200719000000008', '200719000000004', '200719000000004', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 9, 9, '2020-07-19 09:22:44', '2020-07-19 09:22:44'),
('200719000000009', '200719000000005', '200719000000005', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 9, 9, '2020-07-19 09:23:01', '2020-07-19 09:23:01'),
('200719000000010', '200719000000005', '200719000000005', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 9, 9, '2020-07-19 09:23:01', '2020-07-19 09:23:01'),
('200719000000011', '200719000000006', '200719000000006', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 9, 9, '2020-07-19 09:23:21', '2020-07-19 09:23:21'),
('200719000000012', '200719000000006', '200719000000006', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 9, 9, '2020-07-19 09:23:21', '2020-07-19 09:23:21'),
('200719000000013', '200719000000007', '200719000000007', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 10, 10, '2020-07-19 09:27:09', '2020-07-19 09:27:09'),
('200719000000014', '200719000000007', '200719000000007', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 10, 10, '2020-07-19 09:27:10', '2020-07-19 09:27:10'),
('200719000000015', '200719000000008', '200719000000008', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 9, 9, '2020-07-19 09:29:13', '2020-07-19 09:29:13'),
('200719000000016', '200719000000008', '200719000000008', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 9, 9, '2020-07-19 09:29:13', '2020-07-19 09:29:13'),
('200719000000017', '200719000000009', '200719000000009', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 2, 100.00, 0.00, 0.00, 21.00, 0.00, 242.00, 3, 10, 10, '2020-07-19 09:36:43', '2020-07-19 09:36:43'),
('200719000000018', '200719000000010', '200719000000010', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 2, 100.00, 0.00, 0.00, 21.00, 0.00, 242.00, 3, 10, 10, '2020-07-19 09:55:07', '2020-07-19 09:55:07'),
('200719000000019', '200719000000010', '200719000000010', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 10, 10, '2020-07-19 09:55:07', '2020-07-19 09:55:07'),
('200719000000020', '200719000000010', '200719000000010', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 10, 10, '2020-07-19 09:55:07', '2020-07-19 09:55:07'),
('200719000000021', '200719000000011', '200719000000011', 0, '200714000000001', '200714000000002', '|green', 1, 11.00, 0.00, 10.00, 2.31, 0.00, 13.31, 3, 5, 5, '2020-07-19 10:28:51', '2020-07-19 10:28:51'),
('200719000000022', '200719000000012', '200719000000012', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-19 10:31:00', '2020-07-19 10:31:00'),
('200719000000023', '200719000000013', '200719000000013', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-19 11:00:00', '2020-07-19 11:00:00'),
('200719000000024', '200719000000018', '200719000000018', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-19 11:40:45', '2020-07-19 11:40:45'),
('200719000000025', '200719000000020', '200719000000020', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-19 11:44:51', '2020-07-19 11:44:51'),
('200719000000026', '200719000000021', '200719000000021', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-19 11:46:41', '2020-07-19 11:46:41'),
('200719000000027', '200719000000022', '200719000000022', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-19 11:47:42', '2020-07-19 11:47:42'),
('200719000000028', '200719000000024', '200719000000024', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-19 11:53:12', '2020-07-19 11:53:12'),
('200719000000029', '200719000000025', '200719000000025', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 11:55:59', '2020-07-19 11:55:59'),
('200719000000030', '200719000000026', '200719000000026', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 11:57:35', '2020-07-19 11:57:35'),
('200719000000031', '200719000000029', '200719000000029', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:06:15', '2020-07-19 12:06:15'),
('200719000000032', '200719000000030', '200719000000030', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:07:33', '2020-07-19 12:07:33'),
('200719000000033', '200719000000031', '200719000000031', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:16:40', '2020-07-19 12:16:40'),
('200719000000034', '200719000000032', '200719000000032', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:23:29', '2020-07-19 12:23:29'),
('200719000000035', '200719000000033', '200719000000033', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:26:43', '2020-07-19 12:26:43'),
('200719000000036', '200719000000034', '200719000000034', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:27:51', '2020-07-19 12:27:51'),
('200719000000037', '200719000000035', '200719000000035', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:28:44', '2020-07-19 12:28:44'),
('200719000000038', '200719000000036', '200719000000036', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:29:10', '2020-07-19 12:29:10'),
('200719000000039', '200719000000037', '200719000000037', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:31:10', '2020-07-19 12:31:10'),
('200719000000040', '200719000000038', '200719000000038', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:45:49', '2020-07-19 12:45:49'),
('200719000000041', '200719000000039', '200719000000039', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:53:12', '2020-07-19 12:53:12'),
('200719000000042', '200719000000040', '200719000000040', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 12:56:34', '2020-07-19 12:56:34'),
('200719000000043', '200719000000041', '200719000000041', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 13:13:09', '2020-07-19 13:13:09'),
('200719000000044', '200719000000042', '200719000000042', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 13:13:33', '2020-07-19 13:13:33'),
('200719000000045', '200719000000043', '200719000000043', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 13:18:08', '2020-07-19 13:18:08'),
('200719000000046', '200719000000044', '200719000000044', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 13:19:34', '2020-07-19 13:19:34'),
('200719000000047', '200719000000045', '200719000000045', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-19 13:21:09', '2020-07-19 13:21:09'),
('200720000000001', '200720000000001', '200720000000001', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-19 22:25:07', '2020-07-19 22:25:07'),
('200720000000002', '200720000000001', '200720000000001', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-19 22:25:07', '2020-07-19 22:25:07'),
('200720000000003', '200720000000002', '200720000000002', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-19 22:42:46', '2020-07-19 22:42:46'),
('200720000000004', '200720000000003', '200720000000003', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-19 23:01:54', '2020-07-19 23:01:54'),
('200720000000005', '200720000000004', '200720000000004', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-20 00:36:37', '2020-07-20 00:36:37'),
('200720000000006', '200720000000005', '200720000000005', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-20 00:38:03', '2020-07-20 00:38:03'),
('200720000000007', '200720000000006', '200720000000006', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-20 00:45:37', '2020-07-20 00:45:37'),
('200720000000008', '200720000000007', '200720000000007', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-20 00:47:03', '2020-07-20 00:47:03'),
('200720000000009', '200720000000008', '200720000000008', 4, '200712000000001', '200712000000001', '|s|green', 1, 200.00, 210.00, 10.00, 42.00, 0.00, 242.00, 3, 5, 5, '2020-07-20 00:52:27', '2020-07-20 00:52:27'),
('200720000000010', '200720000000009', '200720000000009', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-20 00:55:38', '2020-07-20 00:55:38'),
('200720000000011', '200720000000010', '200720000000010', 4, '200717000000001', '200717000000001', '', 2, 20.00, 0.00, 4.00, 4.20, 0.00, 48.40, 3, 5, 5, '2020-07-20 02:03:22', '2020-07-20 02:03:22'),
('200720000000012', '200720000000010', '200720000000010', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-20 02:03:22', '2020-07-20 02:03:22'),
('200720000000013', '200720000000011', '200720000000011', 0, '200717000000002', '200717000000004', '|Big', 1, 150.00, 200.00, 25.00, 31.50, 0.00, 181.50, 3, 5, 5, '2020-07-20 02:07:09', '2020-07-20 02:07:09'),
('200720000000014', '200720000000011', '200720000000011', 0, '200714000000001', '200714000000002', '|green', 1, 11.00, 0.00, 10.00, 2.31, 0.00, 13.31, 3, 5, 5, '2020-07-20 02:07:09', '2020-07-20 02:07:09'),
('200720000000015', '200720000000011', '200720000000011', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 3, 100.00, 0.00, 0.00, 21.00, 0.00, 363.00, 3, 5, 5, '2020-07-20 02:07:09', '2020-07-20 02:07:09'),
('200720000000016', '200720000000011', '200720000000011', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-20 02:07:09', '2020-07-20 02:07:09'),
('200720000000017', '200720000000012', '200720000000012', 4, '200712000000001', '200712000000001', '|s|green', 2, 200.00, 210.00, 20.00, 42.00, 0.00, 484.00, 3, 5, 5, '2020-07-20 05:52:36', '2020-07-20 05:52:36'),
('200720000000018', '200720000000012', '200720000000012', 0, '200712000000002', '200712000000002', '|size: x |Color: red', 1, 100.00, 0.00, 0.00, 21.00, 0.00, 121.00, 3, 5, 5, '2020-07-20 05:52:36', '2020-07-20 05:52:36'),
('200720000000019', '200720000000012', '200720000000012', 4, '200717000000001', '200717000000001', '', 1, 20.00, 0.00, 2.00, 4.20, 0.00, 24.20, 3, 5, 5, '2020-07-20 05:52:36', '2020-07-20 05:52:36');

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
('200716000000037', '200716000000042', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-16 00:53:44', '2020-07-16 00:53:44'),
('200717000000001', '200717000000001', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-17 11:22:07', '2020-07-17 11:22:07'),
('200718000000001', '200718000000001', 5, 'customer', 'customer@email.com', '18879113801', NULL, 5, 3, 'New Dilli', '12300', 5, 5, '2020-07-17 19:51:06', '2020-07-17 19:51:06'),
('200718000000002', '200718000000002', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-18 00:54:18', '2020-07-18 00:54:18'),
('200719000000001', '200719000000001', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 08:46:05', '2020-07-19 08:46:05'),
('200719000000002', '200719000000002', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', NULL, 1, 1, 'Corporis optio elig', 'Veniam et assumenda', 9, 9, '2020-07-19 09:21:48', '2020-07-19 09:21:48'),
('200719000000003', '200719000000003', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', NULL, 1, 1, 'Corporis optio elig', 'Veniam et assumenda', 9, 9, '2020-07-19 09:22:24', '2020-07-19 09:22:24'),
('200719000000004', '200719000000004', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', NULL, 1, 1, 'Corporis optio elig', 'Veniam et assumenda', 9, 9, '2020-07-19 09:22:44', '2020-07-19 09:22:44'),
('200719000000005', '200719000000005', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', NULL, 1, 1, 'Corporis optio elig', 'Veniam et assumenda', 9, 9, '2020-07-19 09:23:01', '2020-07-19 09:23:01'),
('200719000000006', '200719000000006', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', NULL, 1, 1, 'Corporis optio elig', 'Veniam et assumenda', 9, 9, '2020-07-19 09:23:22', '2020-07-19 09:23:22'),
('200719000000007', '200719000000007', 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', NULL, 3, 2, 'dhaka', '1230', 10, 10, '2020-07-19 09:27:10', '2020-07-19 09:27:10'),
('200719000000008', '200719000000008', 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', NULL, 1, 1, 'Corporis optio elig', 'Veniam et assumenda', 9, 9, '2020-07-19 09:29:13', '2020-07-19 09:29:13'),
('200719000000009', '200719000000009', 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', NULL, 3, 2, 'dhaka', '1230', 10, 10, '2020-07-19 09:36:43', '2020-07-19 09:36:43'),
('200719000000010', '200719000000010', 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', NULL, 3, 2, 'dhaka', '1230', 10, 10, '2020-07-19 09:55:07', '2020-07-19 09:55:07'),
('200719000000011', '200719000000011', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 10:28:51', '2020-07-19 10:28:51'),
('200719000000012', '200719000000012', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 10:31:00', '2020-07-19 10:31:00'),
('200719000000013', '200719000000013', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:00:00', '2020-07-19 11:00:00'),
('200719000000014', '200719000000014', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:00:12', '2020-07-19 11:00:12'),
('200719000000015', '200719000000015', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:00:30', '2020-07-19 11:00:30'),
('200719000000016', '200719000000016', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:01:18', '2020-07-19 11:01:18'),
('200719000000017', '200719000000017', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:01:34', '2020-07-19 11:01:34'),
('200719000000018', '200719000000018', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:40:45', '2020-07-19 11:40:45'),
('200719000000019', '200719000000019', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:43:57', '2020-07-19 11:43:57'),
('200719000000020', '200719000000020', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:44:51', '2020-07-19 11:44:51'),
('200719000000021', '200719000000021', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:46:41', '2020-07-19 11:46:41'),
('200719000000022', '200719000000022', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:47:43', '2020-07-19 11:47:43'),
('200719000000023', '200719000000023', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:49:09', '2020-07-19 11:49:09'),
('200719000000024', '200719000000024', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:53:12', '2020-07-19 11:53:12'),
('200719000000025', '200719000000025', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:55:59', '2020-07-19 11:55:59'),
('200719000000026', '200719000000026', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:57:36', '2020-07-19 11:57:36'),
('200719000000027', '200719000000027', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 11:59:51', '2020-07-19 11:59:51'),
('200719000000028', '200719000000028', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:01:22', '2020-07-19 12:01:22'),
('200719000000029', '200719000000029', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:06:15', '2020-07-19 12:06:15'),
('200719000000030', '200719000000030', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:07:33', '2020-07-19 12:07:33'),
('200719000000031', '200719000000031', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:16:40', '2020-07-19 12:16:40'),
('200719000000032', '200719000000032', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:23:29', '2020-07-19 12:23:29'),
('200719000000033', '200719000000033', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:26:44', '2020-07-19 12:26:44'),
('200719000000034', '200719000000034', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:27:51', '2020-07-19 12:27:51'),
('200719000000035', '200719000000035', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:28:44', '2020-07-19 12:28:44'),
('200719000000036', '200719000000036', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:29:10', '2020-07-19 12:29:10'),
('200719000000037', '200719000000037', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:31:10', '2020-07-19 12:31:10'),
('200719000000038', '200719000000038', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:45:49', '2020-07-19 12:45:49'),
('200719000000039', '200719000000039', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:53:12', '2020-07-19 12:53:12'),
('200719000000040', '200719000000040', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 12:56:34', '2020-07-19 12:56:34'),
('200719000000041', '200719000000041', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 13:13:09', '2020-07-19 13:13:09'),
('200719000000042', '200719000000042', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 13:13:33', '2020-07-19 13:13:33'),
('200719000000043', '200719000000043', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 13:18:09', '2020-07-19 13:18:09'),
('200719000000044', '200719000000044', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 13:19:34', '2020-07-19 13:19:34'),
('200719000000045', '200719000000045', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 13:21:09', '2020-07-19 13:21:09'),
('200720000000001', '200720000000001', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 22:25:07', '2020-07-19 22:25:07'),
('200720000000002', '200720000000002', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 22:42:46', '2020-07-19 22:42:46'),
('200720000000003', '200720000000003', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-19 23:01:54', '2020-07-19 23:01:54'),
('200720000000004', '200720000000004', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 00:36:37', '2020-07-20 00:36:37'),
('200720000000005', '200720000000005', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 00:38:03', '2020-07-20 00:38:03'),
('200720000000006', '200720000000006', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 00:45:37', '2020-07-20 00:45:37'),
('200720000000007', '200720000000007', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 00:47:03', '2020-07-20 00:47:03'),
('200720000000008', '200720000000008', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 00:52:27', '2020-07-20 00:52:27'),
('200720000000009', '200720000000009', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 00:55:39', '2020-07-20 00:55:39'),
('200720000000010', '200720000000010', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 02:03:22', '2020-07-20 02:03:22'),
('200720000000011', '200720000000011', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 02:07:09', '2020-07-20 02:07:09'),
('200720000000012', '200720000000012', 5, 'customer', 'customer@email.com', '18879113801', NULL, 1, 1, 'New Dilli', '12300', 5, 5, '2020-07-20 05:52:37', '2020-07-20 05:52:37');

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
(1, 'PayPal', 'Ac1QE0ltcD77m3xcwc9fFeKMpxT6H41MP7A6R4xFcfuFVCCc4vGv3-0iwIeP4QVJtVRD3Cf34qfV2w9B', 'EF9qAIqttNpLiklHGTvbGMskM-wWXpfmEJ0LwIbm40yZ1XrmNqUIloMFtyNTE6-AwuFV4fflgwwBCqwI', 'Veniam asperiores q', 0, 'mucaxil@mailinator.com', NULL, 'Est reprehenderit c', 'Qui rerum omnis eum', 62.00, 0, 1, 1, 1, NULL, '2020-05-11 05:03:10', '2020-07-17 11:28:22'),
(2, 'Stripe', 'pk_test_51H5yU5CVv453cpl0cZwJMLPrmFkrqdvuDxyAZJztvsXvwhh4vfXgDxNkvdgEPvEv2pWJO7EQYvSDbF4u0DsTGjA000S3BLHyqI', 'sk_test_51H5yU5CVv453cpl0mNY6jydYOygAcRvz4tc8xDFyowILArgFDdsa0CAWIr4ez04FCQmayCiCwsOSihp8xQeFRU2V00GTBwYTVe', 'Nulla consectetur e', 0, 'sycy@mailinator.com', NULL, 'Officia consequatur', 'Ad nisi esse rerum e', 17.00, 0, 1, 1, 1, NULL, '2020-05-12 00:22:54', '2020-07-17 14:01:22'),
(3, 'Angelica Barnes', 'Rem qui nihil minima', 'Eum cumque non beata', 'Et labore facilis te', 1, 'boxew@mailinator.net', NULL, 'Itaque ipsam dolore', 'Ut iusto velit id e', 12.00, 0, 1, 1, 1, '2020-07-18 00:54:38', '2020-05-12 01:37:21', '2020-07-18 00:54:38'),
(4, 'Todd Bates', 'Dolorum omnis nostru', 'Quia voluptatem qui', 'Non debitis maiores', 0, 'devaqupol@mailinator.com', NULL, 'Qui ex voluptatibus', 'Eius quis ut qui ut', 49.00, 1, 1, 1, 1, '2020-07-18 00:54:33', '2020-05-12 01:37:53', '2020-07-18 00:54:33'),
(5, 'SSLCOMMERZ', 'feits5f14674f38fa1', 'feits5f14674f38fa1@ssl', 'Duis sed autem minim', 1, 'wupa@mailinator.com', NULL, 'In voluptates vel qu', 'Vitae proident duci', 84.00, 1, 1, 1, 1, NULL, '2020-05-12 01:40:23', '2020-07-17 14:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `payment_responces`
--

CREATE TABLE `payment_responces` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tran_date` datetime DEFAULT NULL,
  `tran_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `store_amount` decimal(10,2) DEFAULT NULL,
  `currency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_tran_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_issuer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_issuer_country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_issuer_country_code` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_type` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_amount` decimal(10,2) DEFAULT NULL,
  `currency_rate` decimal(10,2) DEFAULT NULL,
  `base_fair` decimal(10,2) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_responces`
--

INSERT INTO `payment_responces` (`id`, `order_id`, `status`, `tran_date`, `tran_id`, `val_id`, `amount`, `store_amount`, `currency`, `bank_tran_id`, `card_type`, `card_no`, `card_issuer`, `card_brand`, `card_issuer_country`, `card_issuer_country_code`, `currency_type`, `currency_amount`, `currency_rate`, `base_fair`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
('200720000000001', '200720000000002', 'VALID', '2020-07-20 10:36:27', '200720000000002', NULL, '2179.45', '2124.96', 'BDT', '2007201045190pqC84fnr8ug5Lu', 'BKASH-BKash', NULL, 'BKash Mobile Banking', 'MOBILEBANKING', 'Bangladesh', 'BD', 'USD', '26.20', '83.19', '0.00', 5, 5, NULL, '2020-07-19 23:00:50', '2020-07-19 23:00:50'),
('200720000000002', '200720000000003', 'FAILED', '2020-07-20 10:53:45', '200720000000003', NULL, '10065.39', NULL, 'BDT', '200720105350vSuq705cgvaJAw8', NULL, NULL, 'BKash Mobile Banking', 'MOBILEBANKING', 'Bangladesh', 'BD', 'USD', '121.00', '83.19', '0.00', 5, 5, NULL, '2020-07-19 23:02:04', '2020-07-19 23:02:04'),
('200720000000003', '200720000000009', 'succeeded', '1970-01-01 12:00:00', 'card_1H6tuSITgM5eKqb2pbg6bTZb', NULL, '26.20', '26.20', 'usd', 'ch_1H6tuUITgM5eKqb2xCLDViXL', NULL, NULL, NULL, NULL, NULL, NULL, 'usd', NULL, NULL, NULL, 5, 5, NULL, '2020-07-20 01:59:42', '2020-07-20 01:59:42'),
('200720000000004', '200720000000009', 'succeeded', '1970-01-01 12:00:00', 'card_1H6tvOITgM5eKqb2D8kCPYEN', NULL, '26.20', '26.20', 'usd', 'ch_1H6tvQITgM5eKqb2nvGgUUQS', NULL, NULL, NULL, NULL, NULL, NULL, 'usd', NULL, NULL, NULL, 5, 5, NULL, '2020-07-20 02:00:40', '2020-07-20 02:00:40'),
('200720000000005', '200720000000010', 'succeeded', '1970-01-01 12:00:00', 'card_1H6tyWITgM5eKqb22GpVR4IR', NULL, '173.40', '173.40', 'usd', 'ch_1H6tyYITgM5eKqb2q4SN4lTp', NULL, NULL, NULL, NULL, NULL, NULL, 'usd', NULL, NULL, NULL, 5, 5, NULL, '2020-07-20 02:03:54', '2020-07-20 02:03:54'),
('200720000000006', '200720000000011', 'succeeded', '1970-01-01 12:00:00', 'card_1H6u23ITgM5eKqb2Se6xkl8W', NULL, '619.01', '619.01', 'usd', 'ch_1H6u26ITgM5eKqb2RWe9dysV', 'card', NULL, 'visa', 'visa', 'US', 'US', 'usd', NULL, NULL, NULL, 5, 5, NULL, '2020-07-20 02:07:34', '2020-07-20 02:07:34'),
('200720000000007', '200720000000012', 'VALID', '2020-07-20 17:44:27', '200720000000012', NULL, '54170.07', '52815.82', 'BDT', '200720174433vezNwTNWr3e11OW', 'BKASH-BKash', NULL, 'BKash Mobile Banking', 'MOBILEBANKING', 'Bangladesh', 'BD', 'USD', '651.20', '83.19', '0.00', 5, 5, NULL, '2020-07-20 05:52:50', '2020-07-20 05:52:50');

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
('200712000000001', 'product 1', 'new', 'product-1-3250', 6, 1, 0, NULL, 210, 200, NULL, 10, 'public/upload/product_feature_image/MfWLCd3kvkbKnT2x1c0T.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 2, 4, 'Nothing to say Nothing to sayNothing to sayNothing to say', '<p>Nothing to say</p>', '<p>Nothing to say</p>', NULL, NULL, NULL, 10.00, NULL, NULL, 1, NULL, NULL, '<p>Nothing to say</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 4, 1, '2020-07-12 12:11:55', '2020-07-20 23:30:33', NULL, NULL, NULL),
('200712000000002', 'Product 2', 'new', 'product-2-9697', 199, NULL, 0, NULL, NULL, 100, NULL, 5, 'public/upload/product_feature_image/njQ7quhJj4K79FWng5Wf.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, 'Nothing to sayNothing to sayNothing to sayNothing to say', '<p>Nothing to say</p>', '<p>Nothing to say</p>', NULL, NULL, NULL, 12.00, NULL, NULL, 1, 1, NULL, '<p>Nothing to say</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, '2020-07-12 12:13:03', '2020-07-20 23:30:20', NULL, NULL, NULL),
('200714000000001', 'product 3', 'new', 'product-3-2886', 30, NULL, 1, NULL, NULL, 20, NULL, 0, 'public/upload/product_feature_image/ZfaSt2BLHsIn2cgXLdPT.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 'Hello to here Hello to hereHello to here', '<p>Main description for product</p>', '<p>Main description for product</p>', NULL, NULL, NULL, 10.00, NULL, NULL, 1, NULL, NULL, '<p>Main description for product</p>', NULL, NULL, NULL, NULL, NULL, 10.00, 1, NULL, 1, 1, '2020-07-13 23:54:28', '2020-07-20 23:30:03', NULL, NULL, NULL),
('200717000000001', 'product4', 'new', 'product3-1885', 20, 1, 0, NULL, NULL, 20, NULL, 5, 'public/upload/product_feature_image/4V4ttuRUwkTagEpRuEE1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, 2, 4, 'nothing nothingnothingnothingnothingnothingnothing', '<p>notjiin f</p>', NULL, NULL, NULL, NULL, 2.00, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 4, 1, '2020-07-16 23:32:42', '2020-07-20 23:29:46', NULL, NULL, NULL),
('200717000000002', 'product5', 'new', 'product5-3989', 35, 1, 1, NULL, 200, 150, NULL, 10, 'public/upload/product_feature_image/jsNDQ3bQsKRSqgJV1Ljh.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 1, NULL, 'nothing at all. nothing at allnothing at allnothing at all', '<p>Nice Cars Collection</p>', NULL, NULL, NULL, NULL, 25.00, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20.00, 1, NULL, 1, 1, '2020-07-17 10:36:43', '2020-07-20 23:28:58', NULL, NULL, NULL),
('200721000000001', 'Product 7', 'used', 'product-7-8981', 20, NULL, 0, NULL, NULL, 200, NULL, 0, 'public/upload/product_feature_image/hJMWShPr46TqokF5Lsj7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 4, NULL, 'I do not know anything about this I am just testing.', '<p style=\"text-align: justify;\">I do not know anything about this I am just testing. I do not know anything about this I am just testing. I do not know anything about this I am just testing. I do not know anything about this I am just testing.I do not know anything about this I am just testing. I do not know anything about this I am just testing.I do not know anything about this I am just testing. I do not know anything about this I am just testing.I do not know anything about this I am just testing. I do not know anything about this I am just testing.I do not know anything about this I am just testing. I do not know anything about this I am just testing.I do not know anything about this I am just testing. I do not know anything about this I am just testing.I do not know anything about this I am just testing. I do not know anything about this I am just testing.</p>', NULL, NULL, NULL, NULL, 10.00, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, '2020-07-20 23:42:54', '2020-07-20 23:42:54', NULL, NULL, NULL),
('200721000000002', 'Product 6', 'new', 'product-6-5921', 1000, NULL, 0, NULL, NULL, 200, NULL, 0, 'public/upload/product_feature_image/R3FAri8mjsscJlJTMxIP.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 3, NULL, 'I do not know anything about this I am just testing. I do not know anything about this I am just testing.', '<p>I do not know anything about this I am just testing. I do not know anything about this I am just testing.I do not know anything about this I am just testing. I do not know anything about this I am just testing.</p>', NULL, NULL, NULL, NULL, 5.00, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, '2020-07-20 23:45:54', '2020-07-20 23:45:54', NULL, NULL, NULL);

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
  `reply_for_id` bigint(20) DEFAULT NULL,
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
('200717000000001', '200717000000001', 'public/upload/product_gallery/Cga2ROfI2mh1a9nxCyrZ.jpg', 4, 4, '2020-07-16 23:32:42', '2020-07-20 23:35:21', '2020-07-20 23:35:21'),
('200717000000002', '200717000000001', 'public/upload/product_gallery/YiLMLRVJb8VVhsej01d6.jpg', 4, 4, '2020-07-16 23:32:42', '2020-07-20 23:35:18', '2020-07-20 23:35:18'),
('200717000000003', '200717000000001', 'public/upload/product_gallery/sofxz3Rr6fzHWTtR5saM.jpg', 4, 4, '2020-07-16 23:32:42', '2020-07-20 23:35:14', '2020-07-20 23:35:14'),
('200717000000004', '200717000000002', 'public/upload/product_gallery/Z7jNi2uRVnxn2DQ34RLD.jpg', 1, 1, '2020-07-17 10:36:43', '2020-07-17 10:36:43', NULL),
('200717000000005', '200717000000002', 'public/upload/product_gallery/q5GXm7mRrzpJIOKb7yPi.jpg', 1, 1, '2020-07-17 10:36:44', '2020-07-17 10:36:44', NULL),
('200717000000006', '200717000000002', 'public/upload/product_gallery/xwbO6ujRGWjfaJOYTG5n.jpg', 1, 1, '2020-07-17 10:36:44', '2020-07-17 10:36:44', NULL),
('200721000000001', '200717000000001', 'public/upload/product_gallery/wQsVNoBMEkaFg9GEx3v9.jpg', 1, 1, '2020-07-20 23:37:18', '2020-07-20 23:38:21', '2020-07-20 23:38:21'),
('200721000000002', '200717000000001', 'public/upload/product_gallery/CpIvJXrv64sVFXt7Dksb.jpg', 1, 1, '2020-07-20 23:37:41', '2020-07-20 23:37:48', '2020-07-20 23:37:48'),
('200721000000003', '200717000000001', 'public/upload/product_gallery/yQoRhnkh1RMDkmDenxj4.jpg', 1, 1, '2020-07-20 23:37:41', '2020-07-20 23:37:41', NULL),
('200721000000004', '200717000000001', 'public/upload/product_gallery/8y2wzqV33GHH3ltwd8wf.jpg', 1, 1, '2020-07-20 23:37:41', '2020-07-20 23:37:41', NULL),
('200721000000005', '200717000000001', 'public/upload/product_gallery/b9o3523U0Gc2UKH6DTkV.jpg', 1, 1, '2020-07-20 23:37:41', '2020-07-20 23:37:41', NULL),
('200721000000006', '200717000000001', 'public/upload/product_gallery/p7JeULARlfAKMnspoHld.jpg', 1, 1, '2020-07-20 23:38:34', '2020-07-20 23:38:34', NULL),
('200721000000007', '200721000000001', 'public/upload/product_gallery/RUNt1IoMtRYCc9IOCeJ0.png', 1, 1, '2020-07-20 23:42:54', '2020-07-20 23:42:54', NULL),
('200721000000008', '200721000000001', 'public/upload/product_gallery/1jB8o8YTsCTiwqUqUD05.jpg', 1, 1, '2020-07-20 23:42:55', '2020-07-20 23:42:55', NULL),
('200721000000009', '200721000000001', 'public/upload/product_gallery/QOP2SHGs3x64Dgq5RU7Y.jpg', 1, 1, '2020-07-20 23:42:55', '2020-07-20 23:42:55', NULL),
('200721000000010', '200721000000002', 'public/upload/product_gallery/T88Knoe0e6VfMmW7FGi3.jpg', 1, 1, '2020-07-20 23:45:54', '2020-07-20 23:45:54', NULL),
('200721000000011', '200721000000002', 'public/upload/product_gallery/2Sd4hbaPdLFJqsr5VIVG.jpg', 1, 1, '2020-07-20 23:45:55', '2020-07-20 23:45:55', NULL),
('200721000000012', '200721000000002', 'public/upload/product_gallery/HFD5ImkPLcgkymOD7Q2V.jpg', 1, 1, '2020-07-20 23:45:55', '2020-07-20 23:45:55', NULL);

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
  `review_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `user_id`, `review`, `review_image`, `rating`, `status`, `approved_by`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 200712000000002, 5, 'Valo product', '', 5, 1, NULL, 5, 1, '2020-07-17 09:14:38', '2020-07-17 09:57:34', NULL);

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
('200712000000001', '200712000000001', NULL, '6.00', '200.00', 4, 1, NULL, '2020-07-12 12:11:55', '2020-07-20 23:30:33'),
('200712000000002', '200712000000002', NULL, '199.00', '100.00', 1, 1, NULL, '2020-07-12 12:13:03', '2020-07-20 23:30:20'),
('200714000000001', '200714000000001', 'red', '10.00', '101.00', 1, 1, NULL, '2020-07-13 23:54:28', '2020-07-13 23:54:28'),
('200714000000002', '200714000000001', 'green', '10.00', '11.00', 1, 1, NULL, '2020-07-13 23:54:28', '2020-07-13 23:54:28'),
('200714000000003', '200714000000001', 'yellow', '10.00', '12.00', 1, 1, NULL, '2020-07-13 23:54:28', '2020-07-13 23:54:28'),
('200717000000001', '200717000000001', NULL, '20.00', '20.00', 4, 1, NULL, '2020-07-16 23:32:42', '2020-07-20 23:29:46'),
('200717000000002', '200717000000002', 'Small', '10.00', '10.00', 1, 1, NULL, '2020-07-17 10:36:43', '2020-07-17 10:36:43'),
('200717000000003', '200717000000002', 'Medium', '10.00', '15.00', 1, 1, NULL, '2020-07-17 10:36:43', '2020-07-17 11:42:03'),
('200717000000004', '200717000000002', 'Big', '15.00', '20.00', 1, 1, NULL, '2020-07-17 10:36:43', '2020-07-17 10:36:43'),
('200721000000001', '200721000000001', NULL, '20.00', '200.00', 1, 1, NULL, '2020-07-20 23:42:54', '2020-07-20 23:42:54'),
('200721000000002', '200721000000002', NULL, '1000.00', '200.00', 1, 1, NULL, '2020-07-20 23:45:54', '2020-07-20 23:45:54');

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
(1, 5, 'customer', 'customer@email.com', '18879113801', 1, 1, '12300', 'New Dilli', NULL, 5, '2020-07-15 08:08:37', '2020-07-17 20:44:37'),
(2, 9, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsum n', 1, 1, 'Veniam et assumenda', 'Corporis optio elig', 9, 9, '2020-07-19 09:17:56', '2020-07-19 09:17:56'),
(3, 10, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', 2, 3, '1230', 'dhaka', 10, 10, '2020-07-19 09:26:56', '2020-07-19 09:26:56');

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
  `affiliate_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `affiliate_code`, `user_type`, `name`, `email`, `contact_no`, `email_verified_at`, `password`, `remember_token`, `lastLoginTime`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`, `role_id`, `vendor_rating`) VALUES
(1, NULL, 1, '	\r\nadmin', 'admin@email.com', NULL, NULL, '$2y$10$m4ZSPJRaz3C7chseDTpqCub3ZeN4Pn4IRfXFiifnbYN21hkP.4hbm', 'cbCptZSKrDgyD2S3DSurJw8Gb5b90mMh5ZmVjGfmXYsCa25EBvcZMT6Wwd0O', '2020-07-21 06:09:47', 1, NULL, NULL, 1, NULL, '2020-07-21 00:09:47', 0, NULL),
(4, NULL, 2, 'vendor', 'vendor@email.com', NULL, NULL, '$2y$10$ypLSmgdsc1Bgt3grKhX2husj9ci0.z8YAO1SCatFAbY43JF/6DrxC', NULL, '2020-07-19 14:28:11', 1, NULL, NULL, NULL, '2020-07-12 10:36:36', '2020-07-19 08:28:11', 0, NULL),
(5, '874569', 4, 'customer', 'customer@email.com', '18879113801', NULL, '$2y$10$Bvq75J2rqyQXxsLdXCF/Tu0rDamam13/L8If6vga3FX9xUlddChMm', NULL, NULL, 1, NULL, NULL, 5, '2020-07-15 08:08:37', '2020-07-17 21:33:48', 0, NULL),
(7, NULL, 4, 'Riley Lara', 'customer2@email.com', '188791138201', NULL, '$2y$10$5q1gfKJeyWRPYzOYesb34ONjH8S3NaJ36Pa5Ouc/mvRGwRXVNa77e', NULL, NULL, 1, NULL, NULL, NULL, '2020-07-16 04:16:24', '2020-07-16 04:16:24', 0, NULL),
(8, '2308a7bef73fd5b147b90c4cb7d7cd9d', 4, 'customer3', 'customer3@email.com', NULL, NULL, '$2y$10$j5eKR6C5ZIvurTPDxiSKoOatj3ow7upD/SDD0As1uMFRBiNUfo6Ai', NULL, NULL, 1, NULL, NULL, NULL, '2020-07-17 23:06:54', '2020-07-17 23:06:54', 0, NULL),
(9, '652dc2096a623194b807c6b68dc9aa01', 4, 'Isadora Meadows', 'zozyvyk@mailinator.net', 'Voluptatem Ipsu', NULL, '$2y$10$Au5SP4eONC5ZrTfQB1ze7u6hoLYqRcW7SXNW41qsMBRADmoom8StW', NULL, NULL, 1, NULL, NULL, NULL, '2020-07-19 09:17:56', '2020-07-19 09:17:56', 0, NULL),
(10, 'b40e0e085655502a57df029fdea373ab', 4, 'miraj', 'mirajkhandaker@gmail.com', '01682234164', NULL, '$2y$10$kDToIRbbNjc8cyL/36O65e/lq/3XdEj0XwgUZ3lPkBIuA5SDpreL6', NULL, NULL, 1, NULL, NULL, NULL, '2020-07-19 09:26:56', '2020-07-19 09:26:56', 0, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_sells`
--
ALTER TABLE `offer_sells`
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
-- Indexes for table `payment_responces`
--
ALTER TABLE `payment_responces`
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
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

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
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_sells`
--
ALTER TABLE `offer_sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
