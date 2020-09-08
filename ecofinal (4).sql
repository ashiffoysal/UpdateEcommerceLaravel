-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 09:23 AM
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
-- Database: `ecofinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `about_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_text`, `image`, `is_deleted`, `about_status`, `created_at`, `updated_at`) VALUES
(1, '<p>lorem</p>', '__1581743191.jpg', 0, 1, NULL, '2020-02-14 23:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` int(11) NOT NULL DEFAULT 1,
  `google` int(11) NOT NULL DEFAULT 1,
  `smtp` int(11) NOT NULL DEFAULT 1,
  `cashondelevery` int(11) NOT NULL DEFAULT 1,
  `paypal` int(11) NOT NULL DEFAULT 1,
  `stripe` int(11) NOT NULL DEFAULT 1,
  `ssl_commercez` int(11) NOT NULL DEFAULT 1,
  `sms` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `facebook`, `google`, `smtp`, `cashondelevery`, `paypal`, `stripe`, `ssl_commercez`, `sms`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1, 1, 1, 1, 1, 1, NULL, '2020-03-08 06:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `add_to_carts`
--

CREATE TABLE `add_to_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  `ecommerce_setup` int(11) DEFAULT NULL,
  `reports` int(11) DEFAULT NULL,
  `pending_order` int(11) DEFAULT NULL,
  `process_order` int(11) DEFAULT NULL,
  `on_delevery` int(11) DEFAULT NULL,
  `reject_order` int(11) DEFAULT NULL,
  `messaging` int(11) DEFAULT NULL,
  `frontend_setup` int(11) DEFAULT NULL,
  `flash_deal` int(11) DEFAULT NULL,
  `courier_setting` int(11) DEFAULT NULL,
  `settings` int(11) DEFAULT NULL,
  `blog` int(11) DEFAULT NULL,
  `customer` int(11) DEFAULT NULL,
  `trash` int(11) DEFAULT NULL,
  `is_superadmin` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `avatar`, `address`, `email_verified_at`, `password`, `type`, `category`, `user`, `extra`, `product`, `ecommerce_setup`, `reports`, `pending_order`, `process_order`, `on_delevery`, `reject_order`, `messaging`, `frontend_setup`, `flash_deal`, `courier_setting`, `settings`, `blog`, `customer`, `trash`, `is_superadmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohidul Islam Sohel', '01961363544', 'admin@gmail.com', 'public/adminpanel/avatar/5df9bf3d68ca2.jpg', 'Dhaka mirpur 1', NULL, '$2y$10$4dVRpdfoVgHNJffr35dQ8ekGW/PFEcELEL5Q6.9v8lxvpHUflngxO', 'SUPER ADMIN', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'mMFYmay8IxvkaiXAIw5tz2XTEMDOuXSr9E5RhpPfWihv6yOm6FdPRcdVKhIC', NULL, '2019-12-18 00:39:48'),
(4, 'Asif Foysal', '73270844027777', 'asif@gmail.com', '__1582090855.jpg', 'Dhaka View', NULL, '$2y$10$ezjl/RexACwnIDo./rwUiu2T.nUtrwh9ie/1KKNtqzLRv7HSoJicK', 'Editor', 1, NULL, 1, NULL, 1, NULL, 1, 1, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, 1, NULL, 0, NULL, '2020-02-18 23:40:55', '2020-02-18 23:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ban_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottom_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `ban_link`, `ban_image`, `bottom_image`, `ban_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(28, '#', 'th_1583296935.webp', 'bottom_image_1583296935.jpg', 1, 0, '2020-03-03 22:42:15', '2020-03-03 22:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_name` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `replyhost` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `brand_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(15, 'Addidas', 'brand_1582371978.jpg', 1, 0, '2020-02-22 05:46:18', '2020-02-22 05:46:18'),
(16, 'Lotto', 'brand_1582371994.png', 1, 0, '2020-02-22 05:46:34', '2020-02-22 05:46:34'),
(18, 'Nike', 'brand_1582372113.png', 1, 0, '2020-02-22 05:48:33', '2020-02-22 05:48:34'),
(19, 'Bata', 'brand_1582372119.png', 1, 0, '2020-02-22 05:48:39', '2020-02-22 05:48:39'),
(20, 'lofar', 'brand_1582372126.png', 1, 0, '2020-02-22 05:48:46', '2020-02-22 05:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `cart_storage`
--

CREATE TABLE `cart_storage` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `purchase_key` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `cate_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_image`, `cate_icon`, `cate_tag`, `cate_slug`, `section_id`, `cate_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(63, 'Men new', 'pic__1582091967.jpg', 'icon_1582091967.png', 'helo new', 'asif-new', 1, '0', 0, '2020-02-18 23:59:27', '2020-02-23 04:04:18'),
(64, 'Women neww', 'pic__1582105151.jpg', 'icon_1582105151.png', 'helo new', 'women-neww', 5, '0', 0, '2020-02-19 03:39:11', '2020-02-23 04:04:20'),
(65, 'Men', 'pic__1582374005.jpg', 'icon_1582364798.png', 'helo new', 'ttttty', 3, '1', 0, '2020-02-22 03:46:38', '2020-02-22 06:20:05'),
(66, 'Bages', 'pic__1582374044.jpg', 'icon_1582374044.png', 'fghgfh', 'bages', 5, '1', 0, '2020-02-22 06:20:44', '2020-02-22 06:20:44'),
(67, 'Watch', 'pic__1582374077.jpg', 'icon_1582374077.png', 'helo new all, new news', 'watch', 5, '1', 0, '2020-02-22 06:21:17', '2020-02-22 06:21:17'),
(68, 'Fashion & Accessoriesfdgfdgfdg', 'pic__1583235180.jpg', 'icon_1583235180.png', 'dfgdfgdfg', 'fdhgfdhghdfjhf', 2, '1', 0, '2020-03-03 05:33:00', '2020-03-03 05:33:00'),
(69, 'Travel & Vacation', 'pic__1583235338.jpg', 'icon_1583235338.jpg', NULL, 'fdhgfdhghdfjhf', 4, '1', 0, '2020-03-03 05:35:38', '2020-03-03 05:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `category_banners`
--

CREATE TABLE `category_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `siteban_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_banners`
--

INSERT INTO `category_banners` (`id`, `category_id`, `section`, `siteban_id`, `created_at`, `updated_at`) VALUES
(95, 40, 3, 83, '2020-02-09 01:06:34', NULL),
(98, 38, 4, 86, '2020-02-10 23:06:04', NULL),
(100, 36, 2, 88, '2020-02-10 23:15:44', NULL),
(105, 40, 2, 84, '2020-02-10 23:20:58', NULL),
(106, 36, 2, 84, '2020-02-10 23:20:58', NULL),
(107, 40, 4, 85, '2020-02-10 23:21:07', NULL),
(108, 36, 4, 85, '2020-02-10 23:21:07', NULL),
(109, 38, 2, 87, '2020-02-10 23:26:28', NULL),
(110, 36, 2, 87, '2020-02-10 23:26:28', NULL),
(111, 53, 2, 103, '2020-02-14 23:19:46', NULL),
(112, 42, 2, 103, '2020-02-14 23:19:46', NULL),
(113, 41, 2, 103, '2020-02-14 23:19:46', NULL),
(114, 40, 2, 103, '2020-02-14 23:19:46', NULL),
(115, 39, 2, 103, '2020-02-14 23:19:46', NULL),
(116, 38, 2, 103, '2020-02-14 23:19:46', NULL),
(117, 36, 2, 103, '2020-02-14 23:19:46', NULL),
(125, 53, 3, 104, '2020-02-15 23:53:12', NULL),
(126, 42, 3, 104, '2020-02-15 23:53:12', NULL),
(127, 41, 3, 104, '2020-02-15 23:53:12', NULL),
(128, 40, 3, 104, '2020-02-15 23:53:12', NULL),
(129, 39, 3, 104, '2020-02-15 23:53:12', NULL),
(130, 38, 3, 104, '2020-02-15 23:53:12', NULL),
(131, 36, 3, 104, '2020-02-15 23:53:12', NULL),
(132, 38, 11, 107, '2020-02-15 23:53:42', NULL),
(133, 36, 11, 107, '2020-02-15 23:53:42', NULL),
(134, 53, 11, 108, '2020-02-15 23:55:51', NULL),
(135, 38, 11, 108, '2020-02-15 23:55:51', NULL),
(136, 36, 11, 108, '2020-02-15 23:55:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `color_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(10, 'green', '#800040', 1, 0, NULL, NULL),
(11, 'blue', '#00ffff', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `compare_products`
--

CREATE TABLE `compare_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitor_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `is_replied` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `visitor_name`, `visitor_email`, `phone`, `subject`, `visitor_message`, `status`, `is_deleted`, `is_seen`, `is_replied`, `created_at`, `updated_at`) VALUES
(11, 'Nadim', 'iek@gmail.com', NULL, NULL, 'asdfasdf', 1, 1, 1, 1, NULL, '2020-02-18 03:47:29'),
(12, 'Nadim', 'iek@gmail.com', NULL, NULL, 'sadfsadf', 1, 1, 1, 1, NULL, '2020-02-18 03:47:29'),
(13, 'Nadim', 'iek@gmail.com', NULL, NULL, 'sadfsadf', 1, 1, 1, 1, NULL, '2020-02-18 03:47:29'),
(14, 'Nadim', 'iek@gmail.com', NULL, NULL, 'sadfsadf', 1, 1, 1, 1, NULL, '2020-02-18 03:47:29'),
(15, 'Nadim', 'iek@gmail.com', NULL, NULL, 'fsdfad sdfsafasdf', 1, 1, 1, 1, '2020-01-18 04:55:10', '2020-02-18 03:47:29'),
(16, 'Nadim', 'iek@gmail.com', NULL, 'sadfas sdafasdf dasf', 'sdafasdf sadfsadf sadfs', 1, 1, 1, 1, '2020-01-18 05:34:29', '2020-01-19 05:25:15'),
(19, 'Nadim', 'iek@gmail.com', NULL, 'sadfas sdafasdf dasf', 'sadfsa asdfas f', 1, 1, 1, 1, '2020-01-19 05:14:07', '2020-02-18 03:47:29'),
(20, 'Nadim', 'iek@gmail.com', '1231231234', 'sadfas sdafasdf dasf', 'sadfasdf sadfasdf', 1, 1, 1, 0, '2020-01-19 05:15:22', '2020-02-18 03:47:29'),
(21, 'Nadim', 'sdafs@gmail.com', '12345678954', 'sadfas sdafasdf dasf', 'sadf asdfa sadf fwa', 1, 1, 1, 0, '2020-01-19 05:56:49', '2020-02-18 03:47:29'),
(22, 'Asif', 'ashiffoysal@gmail.com', '7327084402', 'sdf', 'sdfdsfdsfdsfds', 1, 1, 1, 0, '2020-02-10 04:28:44', '2020-02-18 03:47:29'),
(23, 'Foysal', 'ashiffoysal@gmail.com', '7327084402', 'sdf', 'fgfgfd', 1, 1, 1, 0, '2020-02-10 04:30:14', '2020-02-18 03:47:18'),
(24, '17777', 'ashiffoysal@gmail.com', '732705555', 'sdf5555', 'fdhgfhgfhhfghgfhf', 1, 1, 1, 0, '2020-02-10 04:32:19', '2020-02-18 03:47:18'),
(25, 'asif', 'ashiffoysal@gmail.com', '7327084402', 'sdf', 'sfdfdf', 1, 1, 1, 0, '2020-02-18 06:58:46', '2020-02-18 06:59:13'),
(26, 'HostFilix', 'sales@hostfilix.com', '01781806505', 'werqewq', 'eqweqw', 1, 0, 0, 0, '2020-03-07 04:36:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contract_images`
--

CREATE TABLE `contract_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contract_images`
--

INSERT INTO `contract_images` (`id`, `contract_id`, `image`, `created_at`, `updated_at`) VALUES
(16, 11, '5e22d8c1462ac.jpg', NULL, NULL),
(17, 11, '5e22d8c15596e.jpg', NULL, NULL),
(18, 11, '5e22d8c15c99d.jpg', NULL, NULL),
(19, 12, '5e22d984d0059.jpg', NULL, NULL),
(20, 13, '5e22d984e359d.jpg', NULL, NULL),
(21, 14, '5e22da8babdba.jpg', NULL, NULL),
(22, 15, '5e22e40ee2515.jpg', NULL, NULL),
(23, 26, '5e63792bab40d.jpg', NULL, NULL),
(24, 26, '5e63792be380a.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phonecode` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(18, 'BD', 'Bangladesh', '880');

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courier_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `courier_name`, `created_at`, `updated_at`) VALUES
(1, 'Sundarbon', NULL, NULL),
(2, 'SA Poribohon', NULL, NULL),
(3, 'Continantal', NULL, NULL),
(4, 'DHL', NULL, NULL),
(5, 'Fidex', NULL, NULL),
(6, 'Mala', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cupons`
--

CREATE TABLE `cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cupon_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_shopping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` double NOT NULL,
  `discount_type` int(11) NOT NULL,
  `cupon_start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cupons`
--

INSERT INTO `cupons` (`id`, `cupon_type`, `cupon_code`, `minimum_shopping`, `product_id`, `discount`, `discount_type`, `cupon_start_date`, `cupon_end_date`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(17, '1', 'qan', '100', '[\"1\"]', 100, 1, '2020-03-09', '2020-03-13', 1, 0, '2020-03-08 05:51:30', '2020-03-08 05:51:30'),
(18, '1', 'hhhh', '20', '[\"1\"]', 20, 2, '2020-03-10', '2020-03-20', 1, 0, '2020-03-08 05:52:08', '2020-03-08 05:52:08'),
(19, '1', 'pp', '100', '[\"1\"]', 100, 2, '2020-03-01', '2020-03-13', 1, 0, '2020-03-08 06:51:45', '2020-03-08 06:51:45'),
(20, '1', 'aa', '100', '[\"1\"]', 200, 1, '2020-03-03', '2020-03-18', 1, 0, '2020-03-08 06:52:08', '2020-03-08 06:52:08'),
(21, '2', 'pro', NULL, '[\"1\",\"174\",\"172\"]', 10, 2, '2020-03-09', '2020-03-26', 1, 0, '2020-03-09 03:00:04', '2020-03-09 03:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `delevery_amounts`
--

CREATE TABLE `delevery_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `insidedhaka` int(11) NOT NULL,
  `outsidedhaka` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delevery_amounts`
--

INSERT INTO `delevery_amounts` (`id`, `insidedhaka`, `outsidedhaka`, `created_at`, `updated_at`) VALUES
(1, 200, 500, NULL, '2020-02-26 03:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL, 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', NULL, NULL, 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', NULL, NULL, 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', NULL, NULL, 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', NULL, NULL, 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', NULL, NULL, 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', NULL, NULL, 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL, 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL, 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL, 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', NULL, NULL, 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`, `url`, `country_id`) VALUES
(1, 'Chattagram', 'চট্টগ্রাম', 'www.chittagongdiv.gov.bd', 18),
(2, 'Rajshahi', 'রাজশাহী', 'www.rajshahidiv.gov.bd', 18),
(3, 'Khulna', 'খুলনা', 'www.khulnadiv.gov.bd', 18),
(4, 'Barisal', 'বরিশাল', 'www.barisaldiv.gov.bd', 18),
(5, 'Sylhet', 'সিলেট', 'www.sylhetdiv.gov.bd', 18),
(6, 'Dhaka', 'ঢাকা', 'www.dhakadiv.gov.bd', 18),
(7, 'Rangpur', 'রংপুর', 'www.rangpurdiv.gov.bd', 18),
(8, 'Mymensingh', 'ময়মনসিংহ', 'www.mymensinghdiv.gov.bd', 18);

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

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'database', 'default', '{\"displayName\":\"App\\\\Mail\\\\WelcomeSubscribeMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:32:\\\"App\\\\Mail\\\\WelcomeSubscribeMessage\\\":23:{s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"ashiffoysal0@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 'InvalidArgumentException: View [admin.ecommerce.send_mail.mail_template.subscriber_welcome_mail] not found. in D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php:137\nStack trace:\n#0 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths(\'admin.ecommerce...\', Array)\n#1 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Factory.php(131): Illuminate\\View\\FileViewFinder->find(\'admin.ecommerce...\')\n#2 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(355): Illuminate\\View\\Factory->make(\'admin.ecommerce...\', Array)\n#3 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(328): Illuminate\\Mail\\Mailer->renderView(\'admin.ecommerce...\', Array)\n#4 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(246): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'admin.ecommerce...\', NULL, NULL, Array)\n#5 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(159): Illuminate\\Mail\\Mailer->send(\'admin.ecommerce...\', Array, Object(Closure))\n#6 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(160): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#8 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\SendQueuedMailable.php(52): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#9 [internal function]: Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\Mailer))\n#10 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(32): call_user_func_array(Array, Array)\n#11 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(36): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#12 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(90): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#13 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(34): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#14 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(590): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#15 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)\n#16 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(130): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#17 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(105): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#18 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#19 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(83): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#20 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(130): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#21 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(105): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#22 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(85): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#23 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(59): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#24 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(88): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#25 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(354): Illuminate\\Queue\\Jobs\\Job->fire()\n#26 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(300): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#27 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(134): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#28 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(112): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#29 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(96): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#30 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()\n#31 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(32): call_user_func_array(Array, Array)\n#32 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(36): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#33 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(90): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#34 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(34): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#35 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(590): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#36 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(201): Illuminate\\Container\\Container->call(Array)\n#37 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\symfony\\console\\Command\\Command.php(255): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#38 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(188): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\symfony\\console\\Application.php(1011): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\symfony\\console\\Application.php(272): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\symfony\\console\\Application.php(148): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 D:\\xampp\\htdocs\\eco1\\echo9\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(131): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 D:\\xampp\\htdocs\\eco1\\echo9\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 {main}', '2020-02-05 03:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_ques` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_ans` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `faq_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_ques`, `faq_ans`, `is_deleted`, `faq_status`, `created_at`, `updated_at`) VALUES
(13, 'hfgh', 'ffghfgh', 0, 1, NULL, NULL),
(14, 'fghgfhgfhgf', 'hfghfgh', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals`
--

CREATE TABLE `flash_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flash_deals`
--

INSERT INTO `flash_deals` (`id`, `title`, `start_date`, `end_date`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(20, '\\/', '2020-02-22', '2020-03-31', 0, 1, '2020-02-22 06:32:44', '2020-03-07 05:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deal_details`
--

CREATE TABLE `flash_deal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flash_deal_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `discount` bigint(20) NOT NULL,
  `discount_type` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `change_status_for_update` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flash_deal_details`
--

INSERT INTO `flash_deal_details` (`id`, `flash_deal_id`, `product_id`, `discount`, `discount_type`, `is_deleted`, `status`, `change_status_for_update`, `created_at`, `updated_at`) VALUES
(389, 17, 147, 10, 1, 0, 1, 0, NULL, NULL),
(414, 20, 165, 10, 2, 0, 1, 0, NULL, '2020-03-07 05:55:10'),
(415, 20, 166, 10, 2, 0, 1, 0, NULL, '2020-03-07 05:55:10'),
(416, 20, 167, 110, 1, 0, 1, 0, NULL, '2020-03-07 05:55:10'),
(417, 20, 172, 10, 2, 0, 1, 0, NULL, '2020-03-07 05:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `footer_options`
--

CREATE TABLE `footer_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_options`
--

INSERT INTO `footer_options` (`id`, `footer_text`, `address`, `phone`, `email`, `copyright`, `payment_image`, `created_at`, `updated_at`) VALUES
(11, 'new', '100 S Manhattan St,', '+888125698744', 'DurbarIt@gmail.com', 'They key is to have every key', '11.jpg', '2020-01-18 18:00:00', '2020-02-19 00:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `gateway`
--

CREATE TABLE `gateway` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateway`
--

INSERT INTO `gateway` (`id`, `name`, `client_id`, `secret_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'paypal', 'dgdfgfdgdf', 'fdgdfgfdg', 0, NULL, '2020-02-17 00:44:04'),
(2, 'stype', 'asif', 'kjklkghhgf', 1, NULL, '2020-02-16 23:20:42'),
(3, 'ssl', 'gfdgd', 'sdfd', 0, NULL, '2020-02-16 23:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(55, 'default', '{\"displayName\":\"App\\\\Mail\\\\PaymentSuccessMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:27:\\\"App\\\\Mail\\\\PaymentSuccessMail\\\":24:{s:10:\\\"orderPlace\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:14:\\\"App\\\\OrderPlace\\\";s:2:\\\"id\\\";i:238;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:25:\\\"ashiffoysal8818@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1582967020, 1582967020),
(56, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:25;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:21:\\\"zamanovi160@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583833465, 1583833465),
(57, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:25;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:21:\\\"zamanovi160@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583833467, 1583833467),
(58, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:25;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:21:\\\"zamanovi160@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583833468, 1583833468),
(59, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:25;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:21:\\\"zamanovi160@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583833535, 1583833535),
(60, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"ermhroy7@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583919014, 1583919014),
(61, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"ermhroy7@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583919018, 1583919018),
(62, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"ermhroy7@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583919021, 1583919021),
(63, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"ermhroy7@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583919023, 1583919023),
(64, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"ermhroy7@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583921874, 1583921874),
(65, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"ermhroy7@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583921878, 1583921878),
(66, 'default', '{\"displayName\":\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:41:\\\"App\\\\Mail\\\\SendForgetPasswordVerifyCodeMail\\\":26:{s:4:\\\"Info\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:9:\\\"frontLogo\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:8:\\\"App\\\\Logo\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"siteSettings\\\";O:8:\\\"stdClass\\\":5:{s:12:\\\"company_name\\\";s:12:\\\"DurbarItTest\\\";s:7:\\\"address\\\";s:14:\\\"Dhaka mirpur 1\\\";s:8:\\\"facebook\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:9:\\\"instagram\\\";s:24:\\\"https:\\/\\/www.facebook.com\\\";s:7:\\\"twitter\\\";s:23:\\\"https:\\/\\/www.twitter.com\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"ermhroy7@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1583921880, 1583921880);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `front_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preloader` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `front_logo`, `favicon`, `admin_logo`, `background`, `preloader`, `created_at`, `updated_at`) VALUES
(1, 'public/adminpanel/logos/1659238853301511.png', 'public/adminpanel/logos/favicon.png', 'public/adminpanel/logos/1653506802311058.png', 'public/adminpanel/logos/1653506750394371.jpg', 'public/adminpanel/logos/1653507818657835.gif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mail_drafts`
--

CREATE TABLE `mail_drafts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reply_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `reply_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_drafts`
--

INSERT INTO `mail_drafts` (`id`, `reply_email`, `reply_name`, `contract_id`, `reply_subject`, `reply_content`, `created_at`, `updated_at`) VALUES
(10, 'iek@gmail.com', 'Nadim', 20, 'asdfsa fd edited sdfadf sdfsdf', '<p>&nbsp;sasdafasd sadfsa adfsfdf Edited</p>', '2020-01-19 05:31:51', '2020-01-19 05:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `mesurements`
--

CREATE TABLE `mesurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mesurements`
--

INSERT INTO `mesurements` (`id`, `m_name`, `m_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 'Kilogram', 1, 0, '2019-12-28 00:06:15', '2019-12-28 00:07:50'),
(5, 'poundfd', 1, 0, '2020-02-14 22:32:43', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_17_043058_create_admins_table', 1),
(5, '2019_12_18_073041_create_seo_table', 2),
(6, '2019_12_18_094449_create_sitesetting_table', 3),
(7, '2019_12_18_101228_create_logos_table', 4),
(8, '2019_12_21_062155_create_gateway_table', 5),
(9, '2019_12_22_063447_create_categories_table', 6),
(10, '2019_12_23_042229_create_sub_categories_table', 7),
(11, '2019_12_23_073037_create_re_sub_categories_table', 8),
(12, '2019_12_23_101603_create_colors_table', 9),
(13, '2019_12_23_113719_create_brands_table', 10),
(14, '2019_12_24_120621_create_mesurements_table', 11),
(15, '2019_12_28_092506_create_products_table', 12),
(16, '2019_12_29_052728_create_product_images_table', 13),
(17, '2019_12_30_103935_create_product_licenses_table', 14),
(18, '2020_01_11_090041_create_cupons_table', 15),
(23, '2020_01_13_053446_create_frontend_selectors_table', 16),
(28, '2020_01_13_062453_create_frontend_css_js_table', 17),
(29, '2020_01_13_062549_create_fronten_headers_table', 17),
(30, '2020_01_13_062604_create_fronten_footers_table', 17),
(31, '2020_01_14_062445_create_theme_selectors_table', 17),
(32, '2020_01_19_113726_create_about_us_table', 18),
(33, '2020_01_19_114340_create_banners_table', 19),
(34, '2020_01_19_062150_create_add_to_carts_table', 20),
(35, '2020_01_21_043818_create_wishlists_table', 20),
(36, '2020_01_21_111429_create_compare_products_table', 21),
(37, '2020_01_27_055815_create_site_banners_table', 22),
(38, '2020_01_22_052013_create_checkouts_table', 23),
(39, '2020_01_25_050843_create_user_addresses_table', 24),
(40, '2020_01_25_091317_create_shipping_addresses_table', 24),
(41, '2020_01_29_044214_create_site_banners_table', 25),
(42, '2020_01_29_093224_create_category_banners_table', 26),
(43, '2020_02_10_084223_create_theme_colors_table', 27),
(44, '2020_02_10_111354_create_product_storages_table', 28),
(45, '2020_02_11_062935_create_warranties_table', 28),
(46, '2020_02_11_082427_create_supports_table', 29),
(47, '2020_02_12_044320_create_product_reviews_table', 30),
(48, '2020_02_17_052226_create_social_media_logins_table', 31),
(49, '2020_02_17_115750_create_activations_table', 32),
(50, '2020_02_17_113243_create_sms_models_table', 33),
(51, '2020_02_23_045640_create_mobile_sliders_table', 33),
(52, '2020_02_23_064407_create_mobile_banners_table', 34),
(53, '2020_02_26_084107_create_delevery_amounts_table', 35),
(54, '2020_03_04_060143_create_blogs_table', 36),
(55, '2020_03_04_092340_create_blog_comments_table', 37);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_banners`
--

CREATE TABLE `mobile_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` int(11) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_banners`
--

INSERT INTO `mobile_banners` (`id`, `section`, `link`, `img`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, '#', 'amni__1582449404.jpg', 0, 1, '2020-02-23 03:16:44', '2020-02-23 03:16:44'),
(4, 1, '#', 'amni__1582449421.png', 0, 1, '2020-02-23 03:17:01', '2020-02-23 03:17:01'),
(5, 1, '#', 'amni__1582449432.png', 0, 1, '2020-02-23 03:17:12', '2020-02-23 03:17:12'),
(6, 2, '#', 'amni__1582449895.jpg', 0, 1, '2020-02-23 03:24:55', '2020-02-23 03:24:55'),
(7, 2, '#', 'amni__1582449902.png', 0, 1, '2020-02-23 03:25:02', '2020-02-23 03:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_sliders`
--

CREATE TABLE `mobile_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottom_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_sliders`
--

INSERT INTO `mobile_sliders` (`id`, `slider_link`, `slider_img`, `bottom_image`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(10, '#', 'th_1582439527.jpg', 'th_1582439527.png', 0, 1, '2020-02-23 00:32:07', '2020-02-23 00:32:07'),
(11, '#', 'th_1582439540.jpg', 'th_1582439540.jpg', 1, 1, '2020-02-23 00:32:20', '2020-02-23 00:32:39'),
(12, '#', 'th_1582439552.png', 'th_1582439552.jpg', 0, 1, '2020-02-23 00:32:32', '2020-02-23 00:32:32'),
(13, '#', 'th_1582439694.jpg', 'th_1582439694.jpg', 1, 1, '2020-02-23 00:34:54', '2020-02-23 00:35:03'),
(14, '#', 'th_1582439719.jpg', 'th_1582439719.png', 0, 1, '2020-02-23 00:35:19', '2020-02-23 00:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `order_places`
--

CREATE TABLE `order_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method_id` bigint(20) DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_paid` int(11) NOT NULL DEFAULT 0,
  `status` int(11) DEFAULT 0,
  `payment_secure_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delevary` int(11) NOT NULL DEFAULT 1,
  `payment_status` int(11) NOT NULL DEFAULT 1,
  `cupon_value` int(11) DEFAULT NULL,
  `cupon_type` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_places`
--

INSERT INTO `order_places` (`id`, `shipping_id`, `payment_method_id`, `payment_type`, `comment`, `order_id`, `user_id`, `cart_id`, `total_price`, `total_quantity`, `is_paid`, `status`, `payment_secure_id`, `delevary`, `payment_status`, `cupon_value`, `cupon_type`, `is_deleted`, `created_at`, `updated_at`) VALUES
(311, '1', NULL, 1, 'xcv', '47703', '14', '281', '20400', '2', 0, 0, '4a274477925a2549b5872a8322dea91e', 1, 1, 100, 1, 0, '2020-03-09 05:23:33', NULL),
(312, '1', NULL, 2, 'dfgfdgdf', '62583', '14', '283', '16500', '2', 0, 0, '5af2ae04578d516677e4395ecdc2e447', 1, 1, 20, 2, 0, '2020-03-09 05:39:21', NULL),
(313, '1', NULL, 2, 'fdsfdsf', '23009', '14', '285', '500', '2', 0, 0, '87b40a685b8d392c78eb59778f0ff2b5', 1, 1, 100, 2, 0, '2020-03-09 05:40:44', NULL),
(314, '1', NULL, 2, 'sgfdg', '58889', '14', '287', '17412', '4', 0, 0, 'fcbabd58ad0685ba4d3b78222319fbae', 1, 1, 20, 2, 0, '2020-03-09 05:42:33', NULL),
(315, '1', NULL, 2, 'asfdsf', '76693', '14', '289', '30400', '3', 0, 0, '1354dc1bdf3233dbed6e6b04f983e2c4', 1, 1, 100, 1, 0, '2020-03-09 05:44:02', NULL),
(316, '2', NULL, 2, 'sdfsfsf', '12346', '14', '291', '1200', '2', 0, 0, 'a3590023df66ac92ae35e3316026d17d', 1, 1, 0, 0, 0, '2020-03-09 05:51:47', NULL),
(317, '1', NULL, 2, 'gfdgdg', '86143', '14', '292', '1540', '2', 0, 0, '8e5fd832e6e4365e321991b480d3aaba', 1, 1, 100, 1, 0, '2020-03-09 05:52:50', NULL),
(318, '2', NULL, 2, 'dddg', '15199', '14', '294', '18200', '2', 0, 0, '21928eda50b8057eb6708e3c4d52faed', 1, 1, 0, 0, 0, '2020-03-09 05:59:33', NULL),
(319, '1', NULL, 2, 'dsfsdfdsf', '93140', '14', '295', '1300', '2', 0, 0, '1c581e915eeee5fe691020627db0c8ce', 1, 1, 20, 2, 0, '2020-03-09 06:00:26', NULL),
(320, '2', NULL, 2, 'gdfgdfgdfgdf', '94364', '14', '297', '18100', '2', 0, 0, '34cca4d1625d4c1a28a22e96a0ca95fd', 1, 1, 100, 1, 0, '2020-03-09 06:01:28', NULL),
(321, '1', NULL, 2, 'gdfsgdgfdg', '91134', '14', '299', '18400', '2', 0, 0, 'ac8b88ad3cc06145955b77d903102dfb', 1, 1, 100, 1, 0, '2020-03-09 06:04:21', NULL),
(322, '1', NULL, 2, 'fdgfdg', '39441', '14', '301', '14900', '2', 0, 0, 'b6dec570bf4ae60b985b8ae59d4e8b40', 1, 1, 20, 2, 0, '2020-03-09 06:05:02', NULL),
(323, '1', NULL, 2, 'sdfdsfdsfds', '85623', '14', '303', '18500', '2', 0, 0, 'f010928a1171f6db37a15545ffe97816', 1, 1, 20, 2, 0, '2020-03-09 06:05:47', NULL),
(324, '1', NULL, 2, 'gdfgd', '92788', '14', '304', '20400', '2', 0, 0, '731abd9a65ebb12f6501e052375f53c0', 1, 1, 100, 1, 0, '2020-03-09 06:06:33', NULL),
(325, '2', NULL, 2, 'dafdsfa', '66255', '14', '306', '16100', '5', 0, 0, '7c480323029bc52851b061a91341e79a', 1, 1, 20, 2, 0, '2020-03-09 06:38:21', NULL),
(326, '3', NULL, 2, 'fdsfs', '18802', '14', '308', '18400', '2', 0, 0, 'ba29c0a9d05316b187201c304b20120d', 1, 1, 100, 1, 0, '2020-03-09 06:39:37', NULL),
(327, '1', NULL, 2, 'terwtewt', '28102', '14', '310', '500', '2', 0, 0, 'f6a81a05f0dc6797d195dfb9aad909bb', 1, 1, 100, 2, 0, '2020-03-09 06:41:20', NULL),
(328, '1', NULL, 1, NULL, '6122', '25', '312', '80500', '8', 0, 0, '8aa2c95dc0a6833d2d0cb944555739cc', 1, 1, 0, 0, 0, '2020-03-10 05:21:19', NULL),
(329, '1', NULL, 1, NULL, '31749', '25', '313', '10500', '1', 0, 0, '4295cd213a56a1c6ec066caf5dd08f16', 1, 1, 0, 0, 0, '2020-03-10 05:36:25', NULL),
(330, '1', NULL, 1, NULL, '89729', '26', '314', '10500', '1', 0, 0, 'f66593bc6d066b607434d8f02cc332b0', 1, 1, 0, 0, 0, '2020-03-10 05:50:46', NULL),
(331, '1', NULL, 1, NULL, '27376', '26', '315', '10500', '1', 0, 0, '7361bffc2bfd9efcbf652e56f5f9d23c', 1, 1, 0, 0, 0, '2020-03-10 05:55:36', NULL),
(332, '1', NULL, 2, NULL, '49334', '26', '316', '5390', '1', 0, 0, '97e8a8937a6aa2984d1ad02a6ec7bff4', 1, 1, 0, 0, 0, '2020-03-10 05:56:27', NULL),
(333, '1', NULL, 1, NULL, '8947', '26', '317', '5390', '1', 0, 0, 'd0f82e1046ccbd597c7f2a7bfba9e7dd', 1, 1, 0, 0, 0, '2020-03-10 05:57:00', NULL),
(334, '1', NULL, 1, NULL, '57108', '26', '318', '10500', '1', 0, 0, 'b759b1649138a906c4ec2b2516ae5084', 1, 1, 0, 0, 0, '2020-03-10 06:00:42', NULL),
(335, '1', NULL, 1, NULL, '88331', '26', '319', '10500', '1', 0, 0, 'e18d5758834a95b3e91a6fc5390bb20e', 1, 1, 0, 0, 0, '2020-03-10 06:01:36', NULL),
(336, '1', NULL, 1, NULL, '3572', '26', '320', '10500', '1', 0, 0, '842424a1d0595b76ec4fa03c46e8d755', 1, 1, 0, 0, 0, '2020-03-10 06:14:14', NULL),
(337, '1', NULL, 1, NULL, '8340', '26', '321', '90500', '9', 0, 0, '773464bf4840efa9604421f8ecf90c9a', 1, 1, 0, 0, 0, '2020-03-10 06:15:39', NULL),
(338, '1', NULL, 1, NULL, '3893', '26', '322', '10500', '1', 0, 0, 'e8d66338fab3727e34a9179ed8804f64', 1, 1, 0, 0, 0, '2020-03-10 06:18:22', NULL),
(339, '1', NULL, 1, NULL, '3417', '26', '323', '130500', '13', 0, 0, '471c50ad1a156d7256eddfd747d77931', 1, 1, 0, 0, 0, '2020-03-10 06:22:13', NULL),
(340, '1', NULL, 1, NULL, '22279', '26', '324', '5390', '1', 0, 0, '503440008c1a25ad5ad968c1458533bc', 1, 1, 0, 0, 0, '2020-03-10 06:53:40', NULL),
(341, '1', NULL, 1, NULL, '78357', '26', '325', '5390', '1', 0, 0, '2fb73614bc29317710e1c9936f9acc3b', 1, 1, 0, 0, 0, '2020-03-10 06:54:55', NULL),
(342, '1', NULL, 1, NULL, '274', '26', '326', '60500', '6', 0, 0, 'd947bf06a885db0d477d707121934ff8', 1, 1, 0, 0, 0, '2020-03-10 07:17:54', NULL),
(343, '1', NULL, 1, NULL, '25066', '26', '327', '40500', '4', 0, 0, 'fa7fb9f1120429eafb496a431f96bc17', 1, 1, 0, 0, 0, '2020-03-10 07:20:00', NULL),
(344, '1', NULL, 1, NULL, '89564', '26', '328', '5390', '1', 0, 0, '2031a97047be7afe29f2939fbf7adf71', 1, 1, 0, 0, 0, '2020-03-10 07:21:12', NULL),
(345, '1', NULL, 1, NULL, '24415', '26', '329', '10500', '1', 0, 0, '648e9e6a126696bd6f0eaf62b2b222b0', 1, 1, 0, 0, 0, '2020-03-10 07:23:02', NULL),
(346, '1', NULL, 1, NULL, '16744', '26', '330', '9500', '1', 0, 0, '21b9a07cb47f707a02489fd5e3b882bd', 1, 1, 0, 0, 0, '2020-03-10 07:23:54', NULL),
(347, '1', NULL, 1, NULL, '91755', '26', '331', '5390', '1', 0, 0, '9bc7ab30f2460b68fd7a2effc4339438', 1, 1, 0, 0, 0, '2020-03-10 07:24:45', NULL),
(348, '1', NULL, 1, NULL, '58410', '26', '332', '72500', '8', 0, 0, 'c89d5d432acdda300f7253c5477190bf', 1, 1, 0, 0, 0, '2020-03-10 07:26:46', NULL),
(349, '1', NULL, 1, NULL, '30503', '26', '333', '10500', '1', 0, 0, 'b899aa15c56fee62bcea0903b59b18fe', 1, 1, 0, 0, 0, '2020-03-10 07:27:54', NULL),
(350, '1', NULL, 2, 'fdgdsgfd', '28869', '14', '334', '20400', '2', 0, 0, '1164caada87d881437173e9a15f78aa5', 1, 1, 100, 1, 0, '2020-03-10 22:35:21', NULL),
(351, '1', NULL, 2, NULL, '51378', '14', '336', '1700', '3', 0, 0, '542fc94a9de4c6a445290d7455baec31', 1, 1, 20, 2, 0, '2020-03-10 22:37:10', NULL),
(352, '1', 2, 2, NULL, '79150', '34', '338', '1000', '1', 1, 1, '4630a3bcd9c2640bb309f85375a3251d', 1, 1, 0, 0, 0, '2020-03-11 01:21:13', '2020-03-11 07:21:40'),
(353, '1', 2, 2, NULL, '42250', '34', '339', '10500', '1', 1, 1, '303d09a481bce164f789fd69627aaf49', 1, 1, 0, 0, 0, '2020-03-11 01:23:15', '2020-03-11 07:24:34'),
(354, '1', 2, 2, NULL, '75473', '34', '340', '5390', '1', 1, 1, '055181f808209178c075749d273bee8a', 1, 1, 0, 0, 0, '2020-03-11 01:28:55', '2020-03-11 07:29:14'),
(355, '1', 2, 2, NULL, '72341', '34', '341', '10500', '1', 1, 1, '9450e3a7d5d7ca30a03c887c841c675f', 1, 1, 0, 0, 0, '2020-03-11 01:32:39', '2020-03-11 07:32:57'),
(356, '1', 2, 2, NULL, '1145', '34', '342', '50500', '5', 1, 1, NULL, 1, 1, 0, 0, 0, '2020-03-11 01:34:30', '2020-03-11 07:34:52'),
(357, '1', 4, 2, NULL, '39224', '34', '343', '5390', '1', 1, 1, NULL, 1, 1, 0, 0, 0, '2020-03-11 01:40:49', '2020-03-11 08:51:02'),
(358, '1', NULL, 2, NULL, '19298', '34', '344', '9500', '1', 0, 0, '2c0676e88b88ce25cf400559e7f012a0', 1, 1, 0, 0, 0, '2020-03-11 02:52:10', NULL),
(359, '1', 2, 2, NULL, '43198', '34', '345', '9500', '1', 1, 1, 'a94589cf43e8ec17e83570b720109b94', 1, 1, 0, 0, 0, '2020-03-11 02:55:25', '2020-03-11 08:55:49'),
(360, '1', 2, 2, NULL, '99079', '34', '346', '1000', '1', 1, 1, NULL, 1, 1, 0, 0, 0, '2020-03-11 02:57:32', '2020-03-11 08:57:54'),
(361, '1', 4, 2, NULL, '91947', '34', '347', '9500', '1', 1, 1, NULL, 1, 1, 0, 0, 0, '2020-03-11 02:59:16', '2020-03-11 08:59:35'),
(362, '1', 2, 2, NULL, '32912', '34', '348', '10500', '1', 1, 1, NULL, 1, 1, 0, 0, 0, '2020-03-11 03:34:23', '2020-03-11 09:34:53'),
(363, '1', NULL, 2, NULL, '76643', '34', '349', '1000', '1', 0, 0, '5192a7fcc1feaf3b1583e155b643d206', 1, 1, 0, 0, 0, '2020-03-11 03:41:31', NULL),
(364, '1', 2, 2, NULL, '87898', '34', '350', '1000', '1', 1, 1, NULL, 1, 1, 0, 0, 0, '2020-03-11 03:43:37', '2020-03-11 09:44:06'),
(365, '1', 4, 2, NULL, '77632', '34', '351', '1000', '1', 1, 1, NULL, 1, 1, 0, 0, 0, '2020-03-11 04:04:17', '2020-03-11 10:04:30'),
(366, '1', NULL, 2, NULL, '2182', '34', '352', '10500', '1', 0, 0, 'd51b416788b6ee70eb0c381c06efc9f1', 1, 1, 0, 0, 0, '2020-03-11 04:09:09', NULL),
(367, NULL, NULL, 2, NULL, '86974', '14', '353', '9500', '1', 0, 0, '9caa31a695b51f75228e1add054fc175', 1, 1, 0, 0, 0, '2020-03-21 00:00:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_storages`
--

CREATE TABLE `order_storages` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `purchase_key` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_storages`
--

INSERT INTO `order_storages` (`id`, `cart_data`, `created_at`, `updated_at`, `purchase_key`, `order_id`) VALUES
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-11 05:56:59', '2020-03-20 23:59:32', 93, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-11 06:00:54', '2020-03-20 23:59:32', 94, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-11 06:05:17', '2020-03-20 23:59:32', 95, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-16 00:52:31', '2020-03-20 23:59:32', 96, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-16 03:50:16', '2020-03-20 23:59:32', 97, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-16 22:08:47', '2020-03-20 23:59:32', 98, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 06:25:42', '2020-03-20 23:59:32', 99, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 06:27:50', '2020-03-20 23:59:32', 100, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-02-18 06:29:17', '2020-03-09 06:37:11', 101, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 06:41:24', '2020-03-20 23:59:32', 102, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 22:33:35', '2020-03-20 23:59:32', 103, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 22:38:48', '2020-03-20 23:59:32', 104, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 22:45:30', '2020-03-20 23:59:32', 105, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 22:46:20', '2020-03-20 23:59:32', 106, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-18 22:51:54', '2020-03-20 23:59:32', 107, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-19 00:01:59', '2020-03-20 23:59:32', 108, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-19 02:38:05', '2020-03-20 23:59:32', 109, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 06:35:18', '2020-03-20 23:59:32', 110, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 06:36:56', '2020-03-20 23:59:32', 111, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 06:37:47', '2020-03-20 23:59:32', 112, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 06:41:15', '2020-03-20 23:59:32', 113, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 22:49:53', '2020-03-20 23:59:32', 114, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 22:53:50', '2020-03-20 23:59:32', 115, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 22:55:46', '2020-03-20 23:59:32', 116, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 23:17:43', '2020-03-20 23:59:32', 117, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 23:19:49', '2020-03-20 23:59:32', 118, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 23:29:44', '2020-03-20 23:59:32', 119, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-25 23:32:15', '2020-03-20 23:59:32', 120, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 00:03:31', '2020-03-20 23:59:32', 121, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 00:06:01', '2020-03-20 23:59:32', 122, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 00:20:26', '2020-03-20 23:59:32', 123, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 00:42:44', '2020-03-20 23:59:32', 124, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 00:51:21', '2020-03-20 23:59:32', 125, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 04:12:20', '2020-03-20 23:59:32', 126, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 04:57:56', '2020-03-20 23:59:32', 127, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-26 04:58:12', '2020-03-20 23:59:32', 128, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-29 02:29:54', '2020-03-20 23:59:32', 129, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-29 02:41:40', '2020-03-20 23:59:32', 130, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-29 03:02:16', '2020-03-20 23:59:32', 131, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-29 06:29:59', '2020-03-20 23:59:32', 132, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-29 06:30:40', '2020-03-20 23:59:32', 133, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-01 06:30:53', '2020-03-20 23:59:32', 134, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-01 06:32:15', '2020-03-20 23:59:32', 135, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-01 06:35:22', '2020-03-09 06:37:11', 136, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-01 06:37:32', '2020-03-20 23:59:32', 137, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-03 05:55:32', '2020-03-20 23:59:32', 138, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 01:01:33', '2020-03-20 23:59:32', 139, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-07 01:12:25', '2020-03-09 06:37:11', 140, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 03:30:53', '2020-03-20 23:59:32', 141, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-07 03:32:42', '2020-03-09 06:37:11', 142, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 03:35:20', '2020-03-20 23:59:32', 143, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-07 03:35:36', '2020-03-09 06:37:11', 144, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 03:47:34', '2020-03-20 23:59:32', 145, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-07 03:47:47', '2020-03-09 06:37:11', 146, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 03:49:25', '2020-03-20 23:59:32', 147, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-07 03:49:46', '2020-03-09 06:37:11', 148, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 04:11:32', '2020-03-20 23:59:32', 149, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-07 04:11:52', '2020-03-09 06:37:11', 150, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 04:13:23', '2020-03-20 23:59:32', 151, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 05:08:17', '2020-03-20 23:59:32', 152, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-07 22:50:43', '2020-03-20 23:59:32', 153, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-07 23:35:03', '2020-03-09 06:37:11', 154, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 03:05:05', '2020-03-20 23:59:32', 155, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 03:06:07', '2020-03-20 23:59:32', 156, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 03:14:57', '2020-03-20 23:59:32', 157, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 03:23:28', '2020-03-20 23:59:32', 158, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 03:37:19', '2020-03-20 23:59:32', 159, NULL);
INSERT INTO `order_storages` (`id`, `cart_data`, `created_at`, `updated_at`, `purchase_key`, `order_id`) VALUES
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 04:23:04', '2020-03-20 23:59:32', 160, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 04:25:17', '2020-03-09 06:37:11', 161, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 04:43:44', '2020-03-20 23:59:32', 162, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 04:44:03', '2020-03-09 06:37:11', 163, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 04:49:30', '2020-03-20 23:59:32', 164, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 04:50:17', '2020-03-09 06:37:11', 165, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 04:54:42', '2020-03-09 06:37:11', 166, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 05:12:34', '2020-03-20 23:59:32', 167, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:13:33', '2020-03-09 06:37:11', 168, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 05:17:49', '2020-03-20 23:59:32', 169, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:18:27', '2020-03-09 06:37:11', 170, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:20:14', '2020-03-09 06:37:11', 171, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:21:43', '2020-03-09 06:37:11', 172, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 05:34:22', '2020-03-20 23:59:32', 173, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:34:31', '2020-03-09 06:37:11', 174, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:38:56', '2020-03-09 06:37:11', 175, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:39:51', '2020-03-09 06:37:11', 176, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:40:14', '2020-03-09 06:37:11', 177, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:43:17', '2020-03-09 06:37:11', 178, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:43:41', '2020-03-09 06:37:11', 179, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:48:14', '2020-03-09 06:37:11', 180, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:49:35', '2020-03-09 06:37:11', 181, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:50:00', '2020-03-09 06:37:11', 182, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:53:35', '2020-03-09 06:37:11', 183, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:54:04', '2020-03-09 06:37:11', 184, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 05:55:05', '2020-03-20 23:59:32', 185, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:55:59', '2020-03-09 06:37:11', 186, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 05:56:40', '2020-03-20 23:59:32', 187, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:57:00', '2020-03-09 06:37:11', 188, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 05:57:58', '2020-03-20 23:59:32', 189, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 05:58:23', '2020-03-09 06:37:11', 190, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 05:59:04', '2020-03-20 23:59:32', 191, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 06:02:48', '2020-03-09 06:37:11', 192, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 06:03:27', '2020-03-20 23:59:32', 193, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 06:03:38', '2020-03-09 06:37:11', 194, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 06:17:46', '2020-03-20 23:59:32', 195, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 06:25:40', '2020-03-20 23:59:32', 196, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 06:52:41', '2020-03-09 06:37:11', 197, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 06:53:26', '2020-03-20 23:59:32', 198, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 06:53:43', '2020-03-09 06:37:11', 199, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 06:54:58', '2020-03-09 06:37:11', 200, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 06:56:40', '2020-03-20 23:59:32', 201, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 06:56:51', '2020-03-09 06:37:11', 202, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 22:15:25', '2020-03-20 23:59:32', 203, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 22:16:30', '2020-03-09 06:37:11', 204, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 22:29:02', '2020-03-20 23:59:32', 205, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 22:29:32', '2020-03-09 06:37:11', 206, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 22:34:11', '2020-03-09 06:37:11', 207, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 22:36:11', '2020-03-09 06:37:11', 208, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 22:39:52', '2020-03-20 23:59:32', 209, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-08 22:40:10', '2020-03-09 06:37:11', 210, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-08 22:42:48', '2020-03-20 23:59:32', 211, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 00:08:28', '2020-03-09 06:37:11', 212, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 00:46:24', '2020-03-20 23:59:32', 213, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 00:53:26', '2020-03-20 23:59:32', 214, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 00:54:40', '2020-03-09 06:37:11', 215, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:01:07', '2020-03-20 23:59:32', 216, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:01:25', '2020-03-09 06:37:11', 217, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:13:23', '2020-03-20 23:59:32', 218, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:13:37', '2020-03-09 06:37:11', 219, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:14:35', '2020-03-20 23:59:32', 220, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:17:06', '2020-03-09 06:37:11', 221, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:17:52', '2020-03-20 23:59:32', 222, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:20:19', '2020-03-09 06:37:11', 223, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:31:21', '2020-03-20 23:59:32', 224, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:31:48', '2020-03-09 06:37:11', 225, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:33:55', '2020-03-20 23:59:32', 226, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:41:05', '2020-03-09 06:37:11', 227, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:43:34', '2020-03-20 23:59:32', 228, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:44:51', '2020-03-09 06:37:11', 229, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 01:49:43', '2020-03-20 23:59:32', 230, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 01:50:01', '2020-03-09 06:37:11', 231, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 02:55:00', '2020-03-20 23:59:32', 232, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 02:55:47', '2020-03-09 06:37:11', 233, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:00:21', '2020-03-20 23:59:32', 234, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:04:07', '2020-03-20 23:59:32', 235, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:04:39', '2020-03-09 06:37:11', 236, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:05:20', '2020-03-20 23:59:32', 237, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:05:33', '2020-03-09 06:37:11', 238, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:06:05', '2020-03-20 23:59:32', 239, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:07:10', '2020-03-09 06:37:11', 240, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:08:03', '2020-03-20 23:59:32', 241, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:15:33', '2020-03-09 06:37:11', 242, NULL);
INSERT INTO `order_storages` (`id`, `cart_data`, `created_at`, `updated_at`, `purchase_key`, `order_id`) VALUES
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:16:59', '2020-03-20 23:59:32', 243, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:25:14', '2020-03-09 06:37:11', 244, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:25:51', '2020-03-20 23:59:32', 245, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:38:26', '2020-03-09 06:37:11', 246, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:38:58', '2020-03-20 23:59:32', 247, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:39:14', '2020-03-09 06:37:11', 248, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:40:41', '2020-03-20 23:59:32', 249, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:43:37', '2020-03-09 06:37:11', 250, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:45:09', '2020-03-20 23:59:32', 251, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:45:54', '2020-03-09 06:37:11', 252, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:47:14', '2020-03-20 23:59:32', 253, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:48:11', '2020-03-09 06:37:11', 254, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:50:06', '2020-03-20 23:59:32', 255, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:50:14', '2020-03-09 06:37:11', 256, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:51:56', '2020-03-20 23:59:32', 257, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:52:16', '2020-03-09 06:37:11', 258, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:53:37', '2020-03-20 23:59:32', 259, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:56:19', '2020-03-09 06:37:11', 260, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 03:58:40', '2020-03-20 23:59:32', 261, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 03:59:06', '2020-03-09 06:37:11', 262, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 04:00:33', '2020-03-20 23:59:32', 263, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 04:01:15', '2020-03-09 06:37:11', 264, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 04:02:20', '2020-03-20 23:59:32', 265, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 04:02:53', '2020-03-09 06:37:11', 266, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 04:10:40', '2020-03-20 23:59:32', 267, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 04:13:30', '2020-03-09 06:37:11', 268, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 04:49:28', '2020-03-09 06:37:11', 269, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:05:57', '2020-03-09 06:37:11', 270, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:07:29', '2020-03-20 23:59:32', 271, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:08:26', '2020-03-09 06:37:11', 272, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:09:44', '2020-03-20 23:59:32', 273, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:09:57', '2020-03-09 06:37:11', 274, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:15:42', '2020-03-20 23:59:32', 275, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:16:40', '2020-03-09 06:37:11', 276, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:18:09', '2020-03-20 23:59:32', 277, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:18:46', '2020-03-09 06:37:11', 278, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:20:14', '2020-03-20 23:59:32', 279, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:20:25', '2020-03-09 06:37:11', 280, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:23:01', '2020-03-20 23:59:32', 281, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:23:10', '2020-03-09 06:37:11', 282, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:38:11', '2020-03-20 23:59:32', 283, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:38:24', '2020-03-09 06:37:11', 284, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:39:41', '2020-03-20 23:59:32', 285, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:40:02', '2020-03-09 06:37:11', 286, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:41:59', '2020-03-20 23:59:32', 287, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:42:26', '2020-03-09 06:37:11', 288, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:43:08', '2020-03-20 23:59:32', 289, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:43:47', '2020-03-09 06:37:11', 290, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:48:32', '2020-03-20 23:59:32', 291, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:52:02', '2020-03-20 23:59:32', 292, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 05:52:32', '2020-03-09 06:37:11', 293, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:53:31', '2020-03-20 23:59:32', 294, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 05:59:46', '2020-03-20 23:59:32', 295, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:00:03', '2020-03-09 06:37:11', 296, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:00:50', '2020-03-20 23:59:32', 297, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:01:19', '2020-03-09 06:37:11', 298, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:02:28', '2020-03-20 23:59:32', 299, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:04:11', '2020-03-09 06:37:11', 300, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:04:42', '2020-03-20 23:59:32', 301, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:04:50', '2020-03-09 06:37:11', 302, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:05:17', '2020-03-20 23:59:32', 303, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:06:05', '2020-03-20 23:59:32', 304, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:06:25', '2020-03-09 06:37:11', 305, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:07:45', '2020-03-20 23:59:32', 306, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:07:56', '2020-03-09 06:37:11', 307, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:38:48', '2020-03-20 23:59:32', 308, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";d:-100;s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:39:27', '2020-03-09 06:39:27', 309, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-09 06:40:46', '2020-03-20 23:59:32', 310, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:5:\"-100%\";s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-03-09 06:41:15', '2020-03-09 06:41:15', 311, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 05:11:15', '2020-03-20 23:59:32', 312, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 05:36:09', '2020-03-20 23:59:32', 313, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 05:50:01', '2020-03-20 23:59:32', 314, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 05:55:26', '2020-03-20 23:59:32', 315, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 05:56:16', '2020-03-20 23:59:32', 316, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 05:56:54', '2020-03-20 23:59:32', 317, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:00:23', '2020-03-20 23:59:32', 318, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:01:26', '2020-03-20 23:59:32', 319, NULL);
INSERT INTO `order_storages` (`id`, `cart_data`, `created_at`, `updated_at`, `purchase_key`, `order_id`) VALUES
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:14:05', '2020-03-20 23:59:32', 320, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:15:15', '2020-03-20 23:59:32', 321, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:18:11', '2020-03-20 23:59:32', 322, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:21:50', '2020-03-20 23:59:32', 323, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:53:32', '2020-03-20 23:59:32', 324, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 06:54:51', '2020-03-20 23:59:32', 325, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:17:48', '2020-03-20 23:59:32', 326, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:19:53', '2020-03-20 23:59:32', 327, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:21:05', '2020-03-20 23:59:32', 328, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:22:55', '2020-03-20 23:59:32', 329, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:23:49', '2020-03-20 23:59:32', 330, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:24:40', '2020-03-20 23:59:32', 331, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:26:31', '2020-03-20 23:59:32', 332, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 07:27:48', '2020-03-20 23:59:32', 333, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 22:34:06', '2020-03-20 23:59:32', 334, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";d:-100;s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-03-10 22:35:01', '2020-03-10 22:35:01', 335, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-10 22:35:38', '2020-03-20 23:59:32', 336, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:4:\"-20%\";s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-03-10 22:36:18', '2020-03-10 22:36:18', 337, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 01:14:12', '2020-03-20 23:59:32', 338, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 01:23:00', '2020-03-20 23:59:32', 339, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 01:28:47', '2020-03-20 23:59:32', 340, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 01:32:32', '2020-03-20 23:59:32', 341, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 01:34:20', '2020-03-20 23:59:32', 342, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 01:39:47', '2020-03-20 23:59:32', 343, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 02:52:00', '2020-03-20 23:59:32', 344, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 02:55:16', '2020-03-20 23:59:32', 345, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 02:57:22', '2020-03-20 23:59:32', 346, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 02:59:09', '2020-03-20 23:59:32', 347, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 03:34:00', '2020-03-20 23:59:32', 348, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 03:41:24', '2020-03-20 23:59:32', 349, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 03:43:29', '2020-03-20 23:59:32', 350, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 04:04:09', '2020-03-20 23:59:32', 351, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 04:06:09', '2020-03-20 23:59:32', 352, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:165;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:165;s:4:\"name\";s:11:\"Qayum Hasan\";s:5:\"price\";i:9000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:4:{s:10:\"flashdeals\";i:10;s:13:\"thumbnail_img\";s:17:\"th_1582370782.jpg\";s:10:\"product_id\";i:165;s:3:\"sku\";s:6:\"ghjghj\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-03-11 04:15:44', '2020-03-20 23:59:32', 353, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_details`, `page_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(6, 'fghfhd', NULL, 1, 1, '2020-03-04 03:11:53', '2020-03-04 03:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$vewRBtV9mR5A3IKOWze1zOyM7KUc.jrer2GGvbA5wzFlBr74w/6ze', '2019-12-17 01:04:10'),
('admin@gmail.com', '$2y$10$vewRBtV9mR5A3IKOWze1zOyM7KUc.jrer2GGvbA5wzFlBr74w/6ze', '2019-12-17 01:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_place_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_zip_check` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pass',
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_four_digits` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_amount` bigint(20) DEFAULT 0,
  `transition_id` bigint(20) DEFAULT NULL,
  `trans_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_amount` bigint(20) DEFAULT NULL,
  `card_issuer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_issuer_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_issuer_country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_trans_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `card_id`, `val_id`, `order_place_id`, `address_zip`, `address_zip_check`, `card_brand`, `expire_month`, `expire_year`, `last_four_digits`, `provider_name`, `country`, `funding`, `card_holder_name`, `pay_amount`, `transition_id`, `trans_date`, `currency_type`, `store_amount`, `card_issuer`, `date`, `card_issuer_country`, `card_issuer_country_code`, `card_type`, `bank_trans_id`, `time`, `created_at`, `updated_at`) VALUES
(1, 'card_1G7gAeEAwJbEmn4fWkJLMZo1', NULL, 50, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'harrison', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'card_1G7i9UEAwJbEmn4fve9Nw38p', NULL, 51, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'harrison', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'card_1G7wk9EAwJbEmn4faavzTmkC', NULL, 52, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'harrison', 0, NULL, NULL, NULL, NULL, NULL, '03/02/2020', NULL, NULL, NULL, NULL, '10:41:05', NULL, NULL),
(4, NULL, '2002031638271PWsMcbq3yAWv3r', 72, NULL, 'pass', 'VISA', NULL, NULL, '434977******9753', 'SSL-COMMERZ', NULL, NULL, NULL, 800, NULL, NULL, 'BDT', 780, 'EASTERN BANK, LTD.', NULL, 'Bangladesh', 'BD', 'VISA-City Bank', '200203163827iaqGbBMHBWNrOEA', NULL, NULL, NULL),
(5, NULL, '2002031641460Z5orI5UKW8s55i', 73, NULL, 'pass', 'VISA', NULL, NULL, '455445XXXXXX4326', 'SSL-COMMERZ', NULL, NULL, NULL, 800, NULL, NULL, 'BDT', 780, 'STANDARD CHARTERED BANK', NULL, 'Bangladesh', 'BD', 'VISA-City Bank', '200203164145Av4ZTdIrWDExlr6', NULL, NULL, NULL),
(6, NULL, '200203172112IDAecx96kRUvJWk', 75, NULL, 'pass', 'VISA', NULL, NULL, '421481XXXXXX4177', 'SSL-COMMERZ', NULL, NULL, NULL, 1000, 90203, NULL, 'BDT', 975, 'STANDARD CHARTERED BANK', NULL, 'Bangladesh', 'BD', 'VISA-City Bank', '200203172112PEC1C6586O1dTdF', NULL, NULL, NULL),
(7, NULL, '2002031727150mY9PPkjAc8szMx', 77, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 800, 27555, NULL, 'BDT', 780, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031727150hIs8O6vceCiPMi', NULL, NULL, NULL),
(8, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(9, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(10, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(11, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(12, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(13, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(14, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(15, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(16, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(17, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(18, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(19, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(20, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(21, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(22, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(23, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(24, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(25, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(26, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(27, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(28, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(29, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(30, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(31, NULL, '2002031737251atLatdl41Bxyn8', 79, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 70425, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '2002031737250571mAN4NWnqa8b', NULL, NULL, NULL),
(32, NULL, '200203175741C7rC8sXUmLMr2gK', 80, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9985, 53341, NULL, 'BDT', 9735, 'BKash Mobile Banking', NULL, 'Bangladesh', 'BD', 'BKASH-BKash', '200203175741onEtWkgRDO40P2A', NULL, NULL, NULL),
(33, NULL, '2002031759162SB5MDFUKipy7TZ', 81, NULL, 'pass', 'VISA', NULL, NULL, '418117XXXXXX6675', 'SSL-COMMERZ', NULL, NULL, NULL, 20000, 51356, NULL, 'BDT', 19500, 'TRUST BANK, LTD.', NULL, 'Bangladesh', 'BD', 'MASTER-City Bank', '200203175916m9vHDBzZLh5JOKZ', NULL, NULL, NULL),
(34, 'card_1G9rpZEAwJbEmn4fYwni3LnU', NULL, 55, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'asif', 1000, NULL, NULL, 'usd', NULL, NULL, '08/02/2020', NULL, NULL, NULL, NULL, '05:50:38', NULL, NULL),
(35, 'card_1GLOsoEAwJbEmn4fijPW7amh', NULL, 352, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 100000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '01:21:40', NULL, NULL),
(36, 'card_1GLOvdEAwJbEmn4fTzcU2kWN', NULL, 353, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 1050000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '01:24:34', NULL, NULL),
(37, 'card_1GLP09EAwJbEmn4fl965UXC2', NULL, 354, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 539000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '01:29:14', NULL, NULL),
(38, 'card_1GLP3kEAwJbEmn4faCgOM5VT', NULL, 355, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 1050000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '01:32:57', NULL, NULL),
(39, 'card_1GLP5XEAwJbEmn4fqiknVbIu', NULL, 356, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 5050000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '01:34:48', NULL, NULL),
(40, NULL, '20031113371907rq8gYLRAvaMiC', 357, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 5390, 39224, NULL, 'BDT', 5255, 'BKash Mobile Banking', '11/03/2020', 'Bangladesh', 'BD', 'BKASH-BKash', '2003111337191CFSyC9bPahUXTQ', '01:41:07', NULL, NULL),
(41, NULL, '20031113371907rq8gYLRAvaMiC', 357, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 5390, 39224, NULL, 'BDT', 5255, 'BKash Mobile Banking', '11/03/2020', 'Bangladesh', 'BD', 'BKASH-BKash', '2003111337191CFSyC9bPahUXTQ', '02:51:02', NULL, NULL),
(42, 'card_1GLQLvEAwJbEmn4fkzqYRa7H', NULL, 359, '24242', 'pass', 'Visa', '4', '2042', '4242', 'Stripe', 'US', 'credit', 'Harrison', 950000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '02:55:49', NULL, NULL),
(43, 'card_1GLQNsEAwJbEmn4f7r4Wc05v', NULL, 360, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 100000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '02:57:49', NULL, NULL),
(44, NULL, '200311145546GSCzRRPRlOPFECu', 361, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 9500, 91947, NULL, 'BDT', 9263, 'BKash Mobile Banking', '11/03/2020', 'Bangladesh', 'BD', 'BKASH-BKash', '2003111455461roW0Genpdc11iC', '02:59:35', NULL, NULL),
(45, 'card_1GLQxhEAwJbEmn4fiWB83Z9b', NULL, 362, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 1050000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '03:34:50', NULL, NULL),
(46, 'card_1GLR6aEAwJbEmn4frdeimdYC', NULL, 364, '42424', 'pass', 'Visa', '4', '2024', '4242', 'Stripe', 'US', 'credit', 'Harrison', 100000, NULL, NULL, 'usd', NULL, NULL, '11/03/2020', NULL, NULL, NULL, NULL, '03:44:02', NULL, NULL),
(47, NULL, '2003111600418SC1nIqcNNvJaEC', 365, NULL, 'pass', 'MOBILEBANKING', NULL, NULL, NULL, 'SSL-COMMERZ', NULL, NULL, NULL, 1000, 77632, NULL, 'BDT', 975, 'BKash Mobile Banking', '11/03/2020', 'Bangladesh', 'BD', 'BKASH-BKash', '200311160041eKwByYbHUb06Typ', '04:04:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_id` int(11) DEFAULT NULL,
  `resubcate_id` int(11) DEFAULT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colors` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variations` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choice_options` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_product_condition` int(11) DEFAULT NULL,
  `product_condition` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `allow_product_measurement` int(11) DEFAULT NULL,
  `product_measurement` int(11) DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_and_return_policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `today_deal` int(11) NOT NULL DEFAULT 0,
  `select_upload_type` int(11) DEFAULT NULL,
  `upload_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_sale` int(11) DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `product_name`, `product_sku`, `product_qty`, `cate_id`, `subcate_id`, `resubcate_id`, `product_price`, `colors`, `variations`, `choice_options`, `allow_product_condition`, `product_condition`, `brand`, `allow_product_measurement`, `product_measurement`, `product_description`, `buy_and_return_policy`, `shipping_time`, `meta_tag`, `meta_description`, `photos`, `thumbnail_img`, `today_deal`, `select_upload_type`, `upload_file`, `upload_link`, `affiliate_link`, `license_type`, `license_key`, `license_quantity`, `license_duration`, `number_of_sale`, `is_deleted`, `slug`, `video`, `status`, `created_at`, `updated_at`) VALUES
(149, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 65, 22, 17, '10000', '[\"#800040\",\"#00ffff\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"batlietreu-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"10000\",\"sku\":\"batlietreu-green-m\",\"qty\":\"10\"},\"green-k\":{\"price\":\"10000\",\"sku\":\"batlietreu-green-k\",\"qty\":\"10\"},\"blue-l\":{\"price\":\"10000\",\"sku\":\"batlietreu-blue-l\",\"qty\":\"10\"},\"blue-m\":{\"price\":\"10000\",\"sku\":\"batlietreu-blue-m\",\"qty\":\"10\"},\"blue-k\":{\"price\":\"10000\",\"sku\":\"batlietreu-blue-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\",\"k\"]}]', 1, 1, NULL, 1, 4, '<p>gfdgfdgdfg</p>', '<p>dfgdfgdfg</p>', '6787', 'ddfhdfhh', 'fjsdfh hsdbgh', '[\"5e4ccf4f9ee1b.jpg\"]', 'th_1582092111.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VaVEeY3zx5g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2020-02-19 00:01:52', '2020-03-08 00:16:51'),
(150, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 10, 63, NULL, NULL, '10000', '[\"#800040\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"batlietreu-green-l\",\"qty\":\"10\"},\"green-k\":{\"price\":\"10000\",\"sku\":\"batlietreu-green-k\",\"qty\":\"10\"},\"green-mj\":{\"price\":\"10000\",\"sku\":\"batlietreu-green-mj\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"k\",\"mj\"]}]', 1, 1, 10, 1, 4, '<p>hfghfgh</p>', '<p>fghgfhgf</p>', '5', 'fghgf', 'fjsdfh hsdbgh', '[\"5e4cee6d268bd.jpg\"]', 'th_1582100077.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/C4lNdjgYoi8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2020-02-19 01:04:28', '2020-02-19 02:57:07'),
(151, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1000, 63, 21, 16, '10000', '[\"#800040\"]', NULL, '[]', 1, 2, 10, 1, 5, '<p>hfghgfhfgh</p>', '<p>fghfghgf</p>', '2', 'fghgf', 'fjsdfh hsdbghgf', '[\"5e4cf150aa94b.png\"]', 'th_1582100816.png', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'hgfh', 1, '2020-02-19 02:26:57', '2020-03-11 03:34:00'),
(152, 1, 'gjghj', 'ghjghj', 100, 63, 0, 0, '10000', '[]', NULL, '[]', NULL, 1, NULL, NULL, 4, '<p>jghghj</p>', '<p>ghjhgj</p>', NULL, NULL, NULL, '[\"5e4cf82795d62.png\"]', 'th_1582102567.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, 0, 'gjghj', NULL, 1, '2020-02-19 02:56:08', '2020-03-09 04:10:40'),
(153, 1, 'bcvb', 'cvb', 10, 0, 0, 0, '10000', '[]', NULL, '[]', NULL, 1, NULL, NULL, 4, '<p>cvbvcb</p>', '<p>cvbcv</p>', NULL, NULL, NULL, NULL, 'th_1582103601.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'bcvb', NULL, 1, '2020-02-19 03:13:21', '2020-02-19 03:13:21'),
(154, 1, 'gjghj', 'ghjghj', 100, 63, 21, 16, '10000', '[\"#800040\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-k\":{\"price\":\"10000\",\"sku\":\"-green-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"k\"]}]', 1, 1, NULL, 1, 4, '<p>gfdffdg</p>', '<p>dfgdfgdfg</p>', '6787', 'fdgf', 'tytyutyu', '[\"5e4cfea2904bb.jpg\"]', 'th_1582104226.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 62, 0, 'gjghj', 'fdgdfgdfg', 1, '2020-02-19 03:23:46', '2020-03-11 04:06:09'),
(156, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', '632122222222', 1000, 63, 21, 16, '10000', '[\"#800040\",\"#00ffff\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"blue-l\":{\"price\":\"10000\",\"sku\":\"-blue-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 2, 10, 1, 4, '<p>fgfgfhgfh</p>', '<p>ghgfhgfh</p>', '5', 'fhgfh', 'fjsdfh hsdbgh', '[\"5e4d02775d28e.jpg\"]', 'th_1582105207.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 98, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'jgfj', 1, '2020-02-19 03:40:07', '2020-03-11 04:16:24'),
(157, 1, 'gjghj', 'ghjghj', 100, 64, 0, 0, '10000', '[\"#00ffff\"]', NULL, '[]', 1, 2, 10, 1, 4, '<p>dfgdfgfdg</p>', '<p>dfgdfg</p>', '6787', 'dfgfdg', 'fjsdfh hsdbghdfg', '[\"5e4d02a553459.jpg\"]', 'th_1582105253.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'gjghj', 'dfg', 1, '2020-02-19 03:40:53', '2020-02-19 03:40:53'),
(158, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 63, 21, 16, '10000', '[\"#800040\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-mk\":{\"price\":\"10000\",\"sku\":\"-green-mk\",\"qty\":\"10\"},\"green-j\":{\"price\":\"10000\",\"sku\":\"-green-j\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"mk\",\"j\"]}]', 1, 2, 10, 1, 4, '<p>sdfdsfdsfdsfrtterte&nbsp;sdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrtterte</p>', '<p>sdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrttertesdfdsfdsfdsfrtterte</p>', '5', 'dgdg', 'fjsdfh hsdbgh', '[\"5e50f8b9816d6.png\"]', 'th_1582364857.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'fddfghfd', 1, '2020-02-22 03:47:38', '2020-03-11 04:15:44'),
(159, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 50, 65, 0, 0, '10000', '[\"#800040\",\"#00ffff\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"blue-l\":{\"price\":\"10000\",\"sku\":\"-blue-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', NULL, 1, NULL, NULL, 4, '<p>gtfdgdfgdfg</p>', '<p>dfgdfg</p>', '5', 'dfgdfg', 'tytyutyu', '[\"5e50f944b8db7.jpg\",\"5e50f944cb15b.jpg\"]', 'th_1582364996.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', '#', 1, '2020-02-22 03:49:57', '2020-02-22 03:49:57'),
(160, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 50, 65, 21, 16, '10000', '[]', NULL, '[]', NULL, 1, NULL, NULL, 4, '<p>gdfgfdgdfg</p>', '<p>dfgdfgdf</p>', '5', 'dfgfdg', 'd', '[\"5e50f966bebfb.jpg\"]', 'th_1582365030.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', '#', 1, '2020-02-22 03:50:30', '2020-03-03 02:37:11'),
(161, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 10, 65, 0, 0, '10000', '[]', NULL, '[]', NULL, 1, NULL, NULL, 4, '<p>fgdffdgf</p>', '<p>dfhgfh</p>', '5', 'fgh', 'fghgf', '[\"5e50f985115a1.jpg\"]', 'th_1582365061.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'gfhgfh', 1, '2020-02-22 03:51:01', '2020-02-22 03:51:01'),
(162, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 561000, 65, 21, 16, '10000', '[]', NULL, '[]', NULL, 1, NULL, NULL, 4, '<p>ffdfdsfgfsgg</p>', '<p>gfsdfsdfsdfgg</p>', '2', 'gdf', 'gdfg', '[\"5e50f9a7b38eb.jpg\"]', 'th_1582365095.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'dfgdfg', 1, '2020-02-22 03:51:35', '2020-02-22 05:25:25'),
(163, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1000, 65, 21, 16, '10000', '[]', NULL, '[]', NULL, 1, NULL, NULL, 4, '<p>gdfgdfgdfgfd</p>', '<p>dfgdfgdf</p>', '5', 'dfgdfg', 'fjsdfh hsdbgh', '[\"5e50fb38efafc.jpg\",\"5e50fb390bc0e.jpg\"]', 'th_1582365497.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'fdgdfg', 1, '2020-02-22 03:58:17', '2020-02-22 05:25:17'),
(164, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 500, 65, 0, 0, '10000', '[\"#800040\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', NULL, 1, 10, NULL, 4, '<p>sddssdf</p>', '<p>gfsdsd</p>', '5', '20', 'fjsdfh hsdbgh', '[\"5e510d7d48844.jpg\"]', 'th_1582370173.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'sdfsdfs', 1, '2020-02-22 05:16:13', '2020-03-07 23:05:49'),
(165, 2, 'Qayum Hasan', 'ghjghj', 20, 65, 21, 16, '10000', '[]', NULL, '[]', 1, 1, NULL, 1, 4, '<p>fsdfds</p>', '<p>dsfdf</p>', '5', 'sdfdf', 'fjsdfh hsdbgh', '[\"5e510fde69372.jpg\"]', 'th_1582370782.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 297, 0, 'asif', '#', 1, '2020-02-22 05:26:22', '2020-03-20 23:59:32'),
(166, 2, 'asif', 'pant003', 20, 65, 21, 16, '10000', '[]', NULL, '[]', 1, 1, NULL, 1, 4, '<p>ffghgfh</p>', '<p>fghgfh</p>', '5', 'fgh', 'tytyutyu', '[\"5e510fffa4ccf.jpg\"]', 'th_1582370815.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 312, 0, 'asif', 'fghfghg', 1, '2020-02-22 05:26:55', '2020-03-10 07:26:32'),
(167, 1, 'asif', 'pant003gf', 206456, 65, 21, 16, '5000', '[\"#800040\",\"#00ffff\"]', '{\"green-l\":{\"price\":\"5000\",\"sku\":\"a-green-l\",\"qty\":\"10\"},\"blue-l\":{\"price\":\"5000\",\"sku\":\"a-blue-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 1, NULL, 1, 4, '<p>gffgdfg</p>', '<p>dfgfdgdfg</p>', '5', 'dfgfd', 'fjsdfh hsdbgh', '[\"5e51102f992e4.jpg\"]', 'th_1582370863.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 170, 0, 'asif', 'dfgdfg', 1, '2020-02-22 05:27:43', '2020-03-11 01:39:47'),
(168, 2, 'QAN', 'ghjghj', 10, 66, 0, 0, '10000', '[\"#800040\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-mk\":{\"price\":\"10000\",\"sku\":\"-green-mk\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"mk\"]}]', 1, 2, 15, 1, 4, '<p>dfghdfgf</p>', '<p>dfgdfgdf</p>', '5', 'dfg', 'fjsdfh hsdbgh', '[\"5e5258ca750ce.jpg\"]', 'th_1582454986.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 0, 'asif', 'dfgdf', 1, '2020-02-23 04:49:46', '2020-03-09 05:41:59'),
(169, 2, 'gjghj', 'ghjghj', 10, 66, 0, 0, '10000', '[\"#800040\",\"#00ffff\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"10000\",\"sku\":\"-green-m\",\"qty\":\"10\"},\"green-k\":{\"price\":\"10000\",\"sku\":\"-green-k\",\"qty\":\"10\"},\"blue-l\":{\"price\":\"10000\",\"sku\":\"-blue-l\",\"qty\":\"10\"},\"blue-m\":{\"price\":\"10000\",\"sku\":\"-blue-m\",\"qty\":\"10\"},\"blue-k\":{\"price\":\"10000\",\"sku\":\"-blue-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\",\"k\"]}]', 1, 2, 15, 1, 4, '<p>fsdfdsfsd</p>', '<p>sdfdsf</p>', '5', 'sdfs', 'fjsdfh hsdbgh', '[\"5e52593507059.jpg\"]', 'th_1582455093.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, 'gjghj', 'sdfsf', 1, '2020-02-23 04:51:33', '2020-03-08 00:52:32'),
(170, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 10, 66, 0, 0, '60000', '[\"#800040\"]', '{\"green-l\":{\"price\":\"60000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"60000\",\"sku\":\"-green-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 2, 15, 1, 5, '<p>gfdgd</p>', '<p>dfgdfg</p>', '7', 'dfgfdg', 'mmmm', '[\"5e525960ab7d1.jpg\"]', 'th_1582455136.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'dfg', 1, '2020-02-23 04:52:17', '2020-03-08 00:52:36'),
(171, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', '100', 10, 65, 22, 17, '10000', '[\"#800040\"]', NULL, '[]', 1, 1, 15, 1, 4, '<p>sdfsdfdsdsfsdfsdfsdfsd</p>', '<p>dsfsdfdf</p>', '6787', 'sdf', 'tytyutyu', '[\"5e5264deb8c34.jpg\",\"5e526b84b5cee.jpg\",\"5e526b84c553e.jpg\"]', 'th_1582458079.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 48, 0, 'but-also-the-leap-into-electronic-typesetting-remaining-essentially-unchanged', 'sdfsdf', 1, '2020-02-23 05:41:19', '2020-03-09 05:43:09'),
(172, 1, 'variation', '1333', 10, 65, 22, 17, '10000', '[\"#800040\",\"#00ffff\"]', '{\"green-l-hp\":{\"price\":\"50000\",\"sku\":\"-green-l-hp\",\"qty\":\"76\"},\"green-k-hp\":{\"price\":\"870000\",\"sku\":\"-green-k-hp\",\"qty\":\"167\"},\"green-m-hp\":{\"price\":\"340000\",\"sku\":\"-green-m-hp\",\"qty\":\"7\"},\"blue-l-hp\":{\"price\":\"98000\",\"sku\":\"-blue-l-hp\",\"qty\":\"78\"},\"blue-k-hp\":{\"price\":\"46000\",\"sku\":\"-blue-k-hp\",\"qty\":\"78\"},\"blue-m-hp\":{\"price\":\"76000\",\"sku\":\"-blue-m-hp\",\"qty\":\"178\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"k\",\"m\"]},{\"name\":\"choice_1\",\"title\":\"brand\",\"options\":[\"hp\"]}]', 1, 2, 15, 1, 4, '<p>ytryrtyy</p>', '<p>rtyrtytrytr</p>', '5', 'ty', 'fjsdfh hsdbgh', '[\"5e5352e8e031b.jpg\"]', 'th_1582519017.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 72, 0, 'variation', 'tyty', 1, '2020-02-23 22:36:57', '2020-03-10 07:26:36'),
(173, 3, 'samsung new', 'polo-1233333', 10, 67, NULL, NULL, '1000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, '<p>fsdfsdfdsf</p>', '<p>sdfdsf</p>', '4', 'dfsd', 'entertainment', '[\"5e5e17af4062f.jpg\"]', 'th_1583224751.jpg', 0, 2, NULL, '#', NULL, 'gdfgdfgdg', NULL, NULL, NULL, 30, 0, 'samsung-new', 'fsdf', 1, '2020-03-03 02:39:11', '2020-03-09 06:40:46'),
(174, 1, 'samsung new', 'polo-1233333', 100, 67, NULL, NULL, '500', '[\"#800040\",\"#00ffff\"]', NULL, '[]', 1, 2, 15, 1, 4, '<p>dsfdsfsd</p>', '<p>sdfdsfsdfds</p>', '4', 'dfds', 'entertainment', '[\"5e5e1921789a3.jpg\"]', 'th_1583225121.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 88, 0, 'samsung-new', 'sdfd', 1, '2020-03-03 02:45:21', '2020-03-11 03:43:29'),
(175, 1, 'Qayum Hasan', 'polo-1233333', 12, 69, NULL, NULL, '500', '[\"#800040\",\"#00ffff\"]', '{\"green-x-dfdsf\":{\"price\":\"550\",\"sku\":\"-green-x-dfdsf\",\"qty\":\"10\"},\"green-lm-dfdsf\":{\"price\":\"5030\",\"sku\":\"-green-lm-dfdsf\",\"qty\":\"10\"},\"green-n-dfdsf\":{\"price\":\"570\",\"sku\":\"-green-n-dfdsf\",\"qty\":\"10\"},\"green-l-dfdsf\":{\"price\":\"5350\",\"sku\":\"-green-l-dfdsf\",\"qty\":\"10\"},\"blue-x-dfdsf\":{\"price\":\"500\",\"sku\":\"-blue-x-dfdsf\",\"qty\":\"10\"},\"blue-lm-dfdsf\":{\"price\":\"500\",\"sku\":\"-blue-lm-dfdsf\",\"qty\":\"10\"},\"blue-n-dfdsf\":{\"price\":\"500\",\"sku\":\"-blue-n-dfdsf\",\"qty\":\"10\"},\"blue-l-dfdsf\":{\"price\":\"500\",\"sku\":\"-blue-l-dfdsf\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"x\",\"lm\",\"n\",\"l\"]},{\"name\":\"choice_1\",\"title\":\"model\",\"options\":[\"dfdsf\"]}]', NULL, 1, 15, NULL, 4, '<p>sfadf</p>', '<p>sdffadsafda</p>', '4', 'fdaf', 'entertainment', '[\"5e660dd50549a.jpg\",\"5e660dd51376c.jpg\"]', 'th_1583746517.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 92, 0, 'Qayum-Hasan', 'safsaf', 1, '2020-03-09 03:35:17', '2020-03-11 04:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_licenses`
--

CREATE TABLE `product_licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `license_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_quantity` int(11) DEFAULT NULL,
  `license_duration` int(11) DEFAULT NULL,
  `license_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_licenses`
--

INSERT INTO `product_licenses` (`id`, `product_id`, `license_key`, `license_quantity`, `license_duration`, `license_price`, `created_at`, `updated_at`) VALUES
(1, 29, 'foysal', NULL, 10, NULL, '2019-12-30 06:04:41', NULL),
(2, 29, 'aasif', NULL, 20, NULL, '2019-12-30 06:04:41', NULL),
(3, 29, 'new', NULL, 15, NULL, '2019-12-30 06:04:41', NULL),
(4, 30, 'shisir', 60, 10, NULL, '2019-12-30 06:06:48', NULL),
(5, 30, 'abir', 50, 50, NULL, '2019-12-30 06:06:48', NULL),
(7, 60, 'new', 13, 13, NULL, '2020-01-08 03:19:30', NULL),
(8, 61, 'ro', 107, 12, NULL, '2020-01-08 23:37:06', '2020-01-08 23:37:06'),
(9, 61, 'llllaaa', 12, 23, NULL, '2020-01-08 03:22:50', NULL),
(42, 61, 'asif', 8989, 666, NULL, '2020-01-09 00:13:30', '2020-01-09 00:13:30'),
(43, 61, 'asif', 78, 96, NULL, '2020-01-09 00:08:02', '2020-01-09 00:08:02'),
(151, 65, 'new', 1010, 1212, NULL, '2020-01-09 02:13:49', NULL),
(152, 65, 'asif fo', 585, 464, NULL, '2020-01-09 02:13:49', NULL),
(166, 66, 'new', 101010, 101010, NULL, '2020-01-10 22:23:34', NULL),
(167, 66, 'asif fo', 10, 1569, NULL, '2020-01-10 22:23:34', NULL),
(171, 67, 'new', 10, 15, NULL, '2020-01-11 05:44:54', NULL),
(172, 67, 'asif fo', 152, 10, NULL, '2020-01-11 05:44:54', NULL),
(173, 67, 'asif follll', 10, 10, NULL, '2020-01-11 05:44:54', NULL),
(174, 67, 'jjjj', 15, 25, NULL, '2020-01-11 05:44:54', NULL),
(206, 126, 'asif fo', 10, 10, NULL, '2020-02-09 00:16:24', NULL),
(207, 126, 'asif fo', 50, 11000, NULL, '2020-02-09 00:16:24', NULL),
(208, 126, 'asif fo', 555, 151515, NULL, '2020-02-09 00:16:24', NULL),
(212, 130, 'asif fo', 10, 12, NULL, '2020-02-09 00:18:12', NULL),
(213, 130, 'asif', 12, 55, NULL, '2020-02-09 00:18:12', NULL),
(214, 129, 'kkkknhn', 11, 10, NULL, '2020-02-09 00:19:22', NULL),
(215, 129, 'asif fojjj', 555, 14, NULL, '2020-02-09 00:19:22', NULL),
(216, 129, 'asif', 555, 9, NULL, '2020-02-09 00:19:22', NULL),
(217, 146, 'new', 1000, 200, NULL, '2020-02-18 02:25:03', NULL),
(218, 146, 'asif', 200, 200, NULL, '2020-02-18 02:25:03', NULL),
(219, 146, 'asif fo', 60, 30, NULL, '2020-02-18 02:25:03', NULL),
(220, 173, 'sdfsdf', 20, 20, NULL, '2020-03-03 02:39:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `name`, `description`, `review`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Asif Foysal', 'gggffdgfd', 4, 133, NULL, NULL),
(2, 'shohel', 'fdgfdg', 3, 133, NULL, NULL),
(3, 'shahajan', 'hjhgjghj', 5, 133, NULL, NULL),
(4, 'Foysalfhjfgf', 'fgjfghj', 2, 132, NULL, NULL),
(5, 'fghgfh', 'fghgfh', 4, 100, NULL, NULL),
(6, 'Asif Foysal', 'fgdfgfg', 5, 121, NULL, NULL),
(7, 'Foysal', 'tgrgtr', 4, 136, NULL, NULL),
(8, 'Asif Foysal', 'mjju', 3, 137, NULL, NULL),
(9, 'Foysal', 'dffas', 5, 144, NULL, NULL),
(10, 'shohel', 'dfgg', 4, 144, NULL, NULL),
(11, 'ghfgh', 'gfhgfh', 4, 149, NULL, NULL),
(12, 'Asif Foysal', 'gfgf', 5, 165, NULL, NULL),
(13, 'Foysal', 'fg', 2, 165, NULL, NULL),
(14, 'fdgf', 'gf', 5, 172, NULL, NULL),
(15, 'gdfgfd', 'dfgdfg', 5, 172, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_storages`
--

CREATE TABLE `product_storages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_amount` bigint(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_storages`
--

INSERT INTO `product_storages` (`id`, `product_details`, `order_id`, `user_id`, `shipping_amount`, `created_at`, `updated_at`) VALUES
(136, '[{\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":10}]', '91134', '14', 500, '2020-03-09 06:04:21', NULL),
(137, '[{\"name\":\"asif\",\"price\":9000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":10},{\"name\":\"asif\",\"price\":9000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":10}]', '39441', '14', 500, '2020-03-09 06:05:02', NULL),
(138, '[{\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":10}]', '85623', '14', 500, '2020-03-09 06:05:47', NULL),
(139, '[{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0}]', '92788', '14', 500, '2020-03-09 06:06:33', NULL),
(140, '[{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"-blue-n-dfdsf\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"-blue-n-dfdsf\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":166,\"name\":\"asif\",\"price\":9000,\"quantity\":2,\"sku\":\"pant003\",\"flashdeals\":10,\"flashdealtype\":2}]', '66255', '14', 500, '2020-03-09 06:38:21', NULL),
(141, '[{\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":10}]', '18802', '14', 500, '2020-03-09 06:39:37', NULL),
(142, '[{\"id\":173,\"name\":\"samsung new\",\"price\":1000,\"quantity\":2,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":0}]', '28102', '14', 500, '2020-03-09 06:41:20', NULL),
(143, '[{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0}]', '85586', '25', NULL, '2020-03-10 05:15:25', NULL),
(144, '[{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0}]', '6122', '25', 500, '2020-03-10 05:15:51', NULL),
(145, '[{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0}]', '6122', '25', 500, '2020-03-10 05:21:19', NULL),
(146, '[{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0}]', '31749', '25', 500, '2020-03-10 05:36:25', NULL),
(147, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '89729', '26', 500, '2020-03-10 05:50:46', NULL),
(148, '[{\"id\":158,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0}]', '27376', '26', 500, '2020-03-10 05:55:36', NULL),
(149, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '49334', '26', 500, '2020-03-10 05:56:27', NULL),
(150, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '8947', '26', 500, '2020-03-10 05:57:00', NULL),
(151, '[{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0}]', '57108', '26', 500, '2020-03-10 06:00:42', NULL),
(152, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '88331', '26', 500, '2020-03-10 06:01:36', NULL),
(153, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '3572', '26', 500, '2020-03-10 06:14:14', NULL),
(154, '[{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":2,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":158,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":158,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":2,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0}]', '8340', '26', 500, '2020-03-10 06:15:39', NULL),
(155, '[{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0}]', '3893', '26', 500, '2020-03-10 06:18:22', NULL),
(156, '[{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":2,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":3,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":158,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":3,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":158,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":158,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":158,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":3,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0}]', '3417', '26', 500, '2020-03-10 06:22:13', NULL),
(157, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '22279', '26', 500, '2020-03-10 06:53:40', NULL),
(158, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '78357', '26', 500, '2020-03-10 06:54:55', NULL),
(159, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":2,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '274', '26', 500, '2020-03-10 07:17:54', NULL),
(160, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '25066', '26', 500, '2020-03-10 07:20:00', NULL),
(161, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '89564', '26', 500, '2020-03-10 07:21:12', NULL),
(162, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '24415', '26', 500, '2020-03-10 07:23:02', NULL),
(163, '[{\"id\":165,\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":10,\"flashdealtype\":2}]', '16744', '26', 500, '2020-03-10 07:23:54', NULL),
(164, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '91755', '26', 500, '2020-03-10 07:24:45', NULL),
(165, '[{\"id\":166,\"name\":\"asif\",\"price\":9000,\"quantity\":4,\"sku\":\"pant003\",\"flashdeals\":10,\"flashdealtype\":2},{\"id\":172,\"name\":\"variation\",\"price\":9000,\"quantity\":2,\"sku\":\"1333\",\"flashdeals\":10,\"flashdealtype\":2},{\"id\":172,\"name\":\"variation\",\"price\":9000,\"quantity\":1,\"sku\":\"1333\",\"flashdeals\":10,\"flashdealtype\":2},{\"id\":172,\"name\":\"variation\",\"price\":9000,\"quantity\":1,\"sku\":\"1333\",\"flashdeals\":10,\"flashdealtype\":2}]', '58410', '26', 500, '2020-03-10 07:26:46', NULL),
(166, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '30503', '26', 500, '2020-03-10 07:27:54', NULL),
(167, '[{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0}]', '28869', '14', 500, '2020-03-10 22:35:21', NULL),
(168, '[{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null},{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null},{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null}]', '51378', '14', 500, '2020-03-10 22:37:10', NULL),
(169, '[{\"id\":174,\"name\":\"samsung new\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null}]', '79150', '34', 500, '2020-03-11 01:21:13', NULL),
(170, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '42250', '34', 500, '2020-03-11 01:23:15', NULL),
(171, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '75473', '34', 500, '2020-03-11 01:28:55', NULL),
(172, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '72341', '34', 500, '2020-03-11 01:32:39', NULL),
(173, '[{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":2,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0},{\"id\":156,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"632122222222\",\"flashdeals\":0,\"flashdealtype\":0}]', '1145', '34', 500, '2020-03-11 01:34:30', NULL),
(174, '[{\"id\":167,\"name\":\"asif\",\"price\":4890,\"quantity\":1,\"sku\":\"pant003gf\",\"flashdeals\":110,\"flashdealtype\":1}]', '39224', '34', 500, '2020-03-11 01:40:49', NULL),
(175, '[{\"id\":165,\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":10,\"flashdealtype\":null}]', '19298', '34', 500, '2020-03-11 02:52:10', NULL),
(176, '[{\"id\":165,\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":10,\"flashdealtype\":null}]', '43198', '34', 500, '2020-03-11 02:55:25', NULL),
(177, '[{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null}]', '99079', '34', 500, '2020-03-11 02:57:32', NULL),
(178, '[{\"id\":165,\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":10,\"flashdealtype\":null}]', '91947', '34', 500, '2020-03-11 02:59:16', NULL),
(179, '[{\"id\":151,\"name\":\"but also the leap into electronic typesetting, remaining essentially unchanged\",\"price\":10000,\"quantity\":1,\"sku\":\"pant003\",\"flashdeals\":0,\"flashdealtype\":0}]', '32912', '34', 500, '2020-03-11 03:34:23', NULL),
(180, '[{\"id\":174,\"name\":\"samsung new\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null}]', '76643', '34', 500, '2020-03-11 03:41:31', NULL),
(181, '[{\"id\":174,\"name\":\"samsung new\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null}]', '87898', '34', 500, '2020-03-11 03:43:37', NULL),
(182, '[{\"id\":175,\"name\":\"Qayum Hasan\",\"price\":500,\"quantity\":1,\"sku\":\"polo-1233333\",\"flashdeals\":0,\"flashdealtype\":null}]', '77632', '34', 500, '2020-03-11 04:04:17', NULL),
(183, '[{\"id\":154,\"name\":\"gjghj\",\"price\":10000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":0,\"flashdealtype\":0}]', '2182', '34', 500, '2020-03-11 04:09:09', NULL),
(184, '[{\"id\":165,\"name\":\"Qayum Hasan\",\"price\":9000,\"quantity\":1,\"sku\":\"ghjghj\",\"flashdeals\":10,\"flashdealtype\":null}]', '86974', '14', 500, '2020-03-21 00:00:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `re_sub_categories`
--

CREATE TABLE `re_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resubcate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resubcate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resubcate_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_id` int(11) DEFAULT NULL,
  `resubcate_status` int(11) NOT NULL DEFAULT 1,
  `resubcate_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `re_sub_categories`
--

INSERT INTO `re_sub_categories` (`id`, `resubcate_name`, `resubcate_slug`, `resubcate_tag`, `cate_id`, `subcate_id`, `resubcate_status`, `resubcate_icon`, `is_deleted`, `created_at`, `updated_at`) VALUES
(16, 'Md asif Foysal', 'new-new', 'nbmnbm', 63, 21, 1, 'category__1582100779.jpg', 0, '2020-02-19 02:26:19', '2020-02-19 02:26:19'),
(17, 'asif', 'asif', 'mm', 65, 22, 1, '__1582452829.png', 0, '2020-02-23 04:13:49', '2020-02-23 04:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing_verification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `meta_author`, `meta_description`, `meta_key`, `google_verification`, `bing_verification`, `google_analytic`, `alexa_analytic`, `created_at`, `updated_at`) VALUES
(1, 'DurbarIT | All Kind Solution Of IT', 'DurbarIT', 'DurbarIT | All Kind Solution Of IT', 'software company , webdesign , web development', '<meta name=\"google-site-verification\" content=\"dasdasd\" />', '<meta name=\"Bing-site-verification\" content=\"asdasd\" />', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_user_id` int(11) NOT NULL,
  `shipping_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_post_office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_country_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_division_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_district_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_upazila_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `shipping_user_id`, `shipping_name`, `shipping_phone`, `shipping_address`, `shipping_post_office`, `shipping_postcode`, `shipping_country_id`, `shipping_division_id`, `shipping_district_id`, `shipping_upazila_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 12, '', '', '0', 'sdafdsafdsa', 'dsfafdsf', '18', '6', '41', '319', '42984', '2020-01-26 04:09:41', NULL),
(2, 12, '', '', '0', 'fdsafdsaf', 'fdsafdsaff', '18', '6', '41', '319', '42984', '2020-01-26 04:12:14', NULL),
(3, 12, '', '', '0', 'gdfgfdg', 'gfdgfd', '18', '6', '41', '319', '76738', '2020-01-26 04:15:36', NULL),
(4, 12, '', '', '0', 'dsafdsafdsaf', 'sdafdsf', '18', '6', '41', '319', '11074', '2020-01-26 04:24:47', NULL),
(5, 12, '', '', '0', 'dsafdsf', 'fdsafdsaf', '18', '3', '27', '214', '63772', '2020-01-26 04:25:52', NULL),
(6, 12, '', '', 'dsfdsf', 'dsafdsf', 'fsdafdsaf', '18', '6', '41', '319', '77933', '2020-01-26 22:33:16', NULL),
(7, 12, '', '', 'dsfdsf', 'dsafdsf', 'fsdafdsaf', '18', '6', '41', '319', '77933', '2020-01-26 22:34:45', NULL),
(8, 12, '', '', 'tretre', 'trewt', 'retret', '18', '2', '13', '117', '12685', '2020-02-01 23:58:58', NULL),
(9, 12, '', '', 'tretre', 'trewt', 'retret', '18', '2', '13', '117', '12685', '2020-02-02 00:00:20', NULL),
(10, 14, 'HostFilix', '01781806505', 'Mirpur 1, Dhaka', 'gdfgfdg', '1216', '18', '2', '12', '104', '97181', '2020-03-09 00:50:10', NULL),
(11, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '49122', '2020-03-09 01:03:33', NULL),
(12, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '49122', '2020-03-09 01:06:48', NULL),
(13, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '15113', '2020-03-09 01:21:09', NULL),
(14, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '40704', '2020-03-09 01:33:11', NULL),
(15, 14, 'HostFilix', '01781806505', 'Mukto Bangla Shopping Complex, Office No. 207, 9th Floor', 'dgdfgfd', 'dfgfd', '18', '1', '1', '15', '87093', '2020-03-09 01:42:00', NULL),
(16, 14, 'HostFilix', '01781806505', 'Mukto Bangla Shopping Complex, Office No. 207, 9th Floor', 'gdfgfdg', '1216', '18', '1', '1', '15', '48013', '2020-03-09 01:49:22', NULL),
(17, 14, 'HostFilix', '01781806505', 'Mukto Bangla Shopping Complex, Office No. 207, 9th Floor', 'gdfgfdg', '1216', '18', '1', '1', '15', '29819', '2020-03-09 01:52:12', NULL),
(18, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '86504', '2020-03-09 03:07:42', NULL),
(19, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '74730', '2020-03-09 03:38:41', NULL),
(20, 14, 'HostFilix', '01781806505', 'Mukto Bangla Shopping Complex, Office No. 207, 9th Floor', 'gdfgfdg', '1216', '18', '1', '1', '15', '41412', '2020-03-09 03:44:11', NULL),
(21, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '93215', '2020-03-09 03:46:03', NULL),
(22, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '48253', '2020-03-09 03:49:07', NULL),
(23, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '10866', '2020-03-09 03:52:55', NULL),
(24, 14, 'HostFilix', '01781806505', 'Mukto Bangla Shopping Complex, Office No. 207, 9th Floor', 'gdfgfdg', '1216', '18', '1', '1', '15', '54673', '2020-03-09 03:57:26', NULL),
(25, 14, 'HostFilix', '01781806505', 'Mirpur 1, Dhaka', 'gdfgfdg', '1216', '18', '1', '1', '15', '43990', '2020-03-09 03:59:16', NULL),
(26, 14, 'HostFilix', '01781806505', 'Mukto Bangla Shopping Complex, Office No. 207, 9th Floor', 'gdfgfdg', '1216', '18', '1', '1', '15', '69798', '2020-03-09 04:01:31', NULL),
(27, 14, 'HostFilix', '01781806505', 'Mirpur 1, Dhaka', 'gdfgfdg', '1216', '18', '1', '1', '15', '57178', '2020-03-09 05:10:29', NULL),
(28, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '31290', '2020-03-09 05:17:12', NULL),
(29, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '3007', '2020-03-09 05:19:39', NULL),
(30, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '1711', '2020-03-09 05:21:03', NULL),
(31, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '47703', '2020-03-09 05:23:33', NULL),
(32, 14, 'Iftykhar', '01878833666', 'Mirpur 1, Dhaka', 'gdfgfdg', '1216', '18', '1', '1', '15', '62583', '2020-03-09 05:39:21', NULL),
(33, 14, 'HostFilix', '01781806505', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', 'gdfgfdg', '1216', '18', '1', '1', '15', '66255', '2020-03-09 06:38:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `company_name`, `phone_one`, `phone_two`, `email_one`, `email_two`, `address`, `facebook`, `instagram`, `twitter`, `linkedin`, `google`, `feed`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'DurbarItTest', '01961363544', '019613635343', 'sohidulislam@gmail.com', 'sohidulislam@gmail.com', 'Dhaka mirpur 1', 'https://www.facebook.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.google.com', 'https://www.feed.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_banners`
--

CREATE TABLE `site_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` int(11) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_models`
--

CREATE TABLE `sms_models` (
  `id` int(11) NOT NULL,
  `sms_url` varchar(191) NOT NULL,
  `sms_username` varchar(191) NOT NULL,
  `sms_password` varchar(191) NOT NULL,
  `sms_type` int(11) NOT NULL,
  `sms_masking` varchar(191) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms_models`
--

INSERT INTO `sms_models` (`id`, `sms_url`, `sms_username`, `sms_password`, `sms_type`, `sms_masking`, `created_at`, `updated_at`) VALUES
(1, 'http://gosms.xyz/api/v1/sendSms', 'durbar2020', '12345678', 4, 'non-masking', '2020-02-17', '2020-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `mailgun_domain` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailgun_secret` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailgun_endpoint` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailgun_status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `driver`, `host`, `port`, `from_address`, `from_name`, `encryption`, `username`, `password`, `status`, `mailgun_domain`, `mailgun_secret`, `mailgun_endpoint`, `mailgun_status`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'smtp.mailtrap.io', 'smtp', 'durbarit@gmail.com', 'DurbarMail', 'tls', '3caf684790c0b4', '69628e626d4842', 0, 'durbarit.com', '786b2642c49a1f9ef4296a26cb02053b-e470a504-af64068e', 'api.mailgun.net', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_media_logins`
--

CREATE TABLE `social_media_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media_logins`
--

INSERT INTO `social_media_logins` (`id`, `name`, `client_id`, `secret_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'dgdfgf', '12121', 1, NULL, '2020-02-17 00:46:08'),
(2, 'google', 'dfdfdf', '12124545', 1, NULL, '2020-02-17 00:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(2, 'dev.qayumhasan@gmail.com', 0, 1, NULL, NULL),
(3, 'ashiffoysal8818@gmail.com', 0, 1, NULL, NULL),
(23, 'ermhroy7@gmail.com', 0, 1, NULL, NULL),
(24, 'ermhroywerwer7@gmail.come', 0, 1, NULL, NULL),
(25, 'ermhroy7@gmai', 0, 1, NULL, NULL),
(26, 'ermhrodasdasdasdy7@gmail.com', 0, 1, NULL, NULL),
(27, 'ermhroyewwew7@gmail.com', 0, 1, NULL, NULL),
(28, 'ashiffoysal0@gmail.com', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcate_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcate_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcate_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `subcate_name`, `subcate_slug`, `cate_id`, `subcate_image`, `subcate_icon`, `subcate_tag`, `subcate_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(21, 'new', 'nnnn', 63, 'subcategory__1582100756.jpg', '__1582100756.png', 'mmm', 1, 0, '2020-02-19 02:25:56', '2020-02-19 02:25:56'),
(22, 'sub1', 'sub1', 65, 'subactegory_1582452294.jpg', '__1582452294.png', 'new', 1, 0, '2020-02-23 04:04:54', '2020-02-23 04:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `heading_text`, `details`, `icon`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(6, 'Support', 'dfgtdhgdgdfhgdfgfdj', 'fas fa-pencil', 1, 1, '2020-02-26 00:57:31', '2020-03-03 22:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `termsandcondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `termsandcondition`, `created_at`, `updated_at`) VALUES
(1, '<p>s simply dummy text of the printing and typesetting industry. Lorremaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, '2020-01-13 01:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `theme_colors`
--

CREATE TABLE `theme_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hover_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_colors`
--

INSERT INTO `theme_colors` (`id`, `color_code`, `hover_code`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(11, '#ff0080', '#ff8040', 0, 0, '2020-03-03 05:07:11', '2020-03-08 06:28:53'),
(12, '#000000', '#000000', 0, 0, '2020-03-03 05:07:18', '2020-03-08 06:28:53'),
(13, '#000000', '#400000', 0, 0, '2020-03-03 05:35:00', '2020-03-08 06:28:53'),
(14, '#008040', '#000040', 0, 0, '2020-03-03 05:42:12', '2020-03-08 06:28:53'),
(15, '#8080ff', '#ff0000', 1, 0, '2020-03-03 06:14:12', '2020-03-08 06:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `theme_selectors`
--

CREATE TABLE `theme_selectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `css_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `js_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_selectors`
--

INSERT INTO `theme_selectors` (`id`, `css_name`, `js_name`, `header_name`, `footer_name`, `theme_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'frontend.include.css.home1', 'frontend.include.js.home1', 'frontend.include.header.home1', 'frontend.include.footer.footer1', 'frontend.home.home1', 1, '2020-01-13 18:00:00', '2020-02-29 02:28:47'),
(2, 'frontend.include.css.home2', 'frontend.include.js.home2', 'frontend.include.header.home2', 'frontend.include.footer.footer2', 'frontend.home.home2', 0, NULL, '2020-02-29 02:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `is_courier_added` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`, `is_courier_added`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 0),
(2, 1, 'Barura', 'বরুড়া', 0),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 0),
(4, 1, 'Chandina', 'চান্দিনা', 0),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 0),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 0),
(7, 1, 'Homna', 'হোমনা', 0),
(8, 1, 'Laksam', 'লাকসাম', 0),
(9, 1, 'Muradnagar', 'মুরাদনগর', 0),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 0),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 0),
(12, 1, 'Meghna', 'মেঘনা', 0),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 0),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 0),
(15, 1, 'Titas', 'তিতাস', 0),
(16, 1, 'Burichang', 'বুড়িচং', 0),
(17, 1, 'Lalmai', 'লালমাই', 0),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 0),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 0),
(20, 2, 'Sonagazi', 'সোনাগাজী', 0),
(21, 2, 'Fulgazi', 'ফুলগাজী', 0),
(22, 2, 'Parshuram', 'পরশুরাম', 0),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 0),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 0),
(25, 3, 'Kasba', 'কসবা', 0),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 0),
(27, 3, 'Sarail', 'সরাইল', 0),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 0),
(29, 3, 'Akhaura', 'আখাউড়া', 0),
(30, 3, 'Nabinagar', 'নবীনগর', 0),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 0),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 0),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 0),
(34, 4, 'Kaptai', 'কাপ্তাই', 0),
(35, 4, 'Kawkhali', 'কাউখালী', 0),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 0),
(37, 4, 'Barkal', 'বরকল', 0),
(38, 4, 'Langadu', 'লংগদু', 0),
(39, 4, 'Rajasthali', 'রাজস্থলী', 0),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 0),
(41, 4, 'Juraichari', 'জুরাছড়ি', 0),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 0),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 0),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 0),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 0),
(46, 5, 'Hatia', 'হাতিয়া', 0),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 0),
(48, 5, 'Kabirhat', 'কবিরহাট', 0),
(49, 5, 'Senbug', 'সেনবাগ', 0),
(50, 5, 'Chatkhil', 'চাটখিল', 0),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 0),
(52, 6, 'Haimchar', 'হাইমচর', 0),
(53, 6, 'Kachua', 'কচুয়া', 0),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 0),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 0),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 0),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 0),
(58, 6, 'Matlab North', 'মতলব উত্তর', 0),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 0),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 0),
(61, 7, 'Kamalnagar', 'কমলনগর', 0),
(62, 7, 'Raipur', 'রায়পুর', 0),
(63, 7, 'Ramgati', 'রামগতি', 0),
(64, 7, 'Ramganj', 'রামগঞ্জ', 0),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 0),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 0),
(67, 8, 'Mirsharai', 'মীরসরাই', 0),
(68, 8, 'Patiya', 'পটিয়া', 0),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 0),
(70, 8, 'Banshkhali', 'বাঁশখালী', 0),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 0),
(72, 8, 'Anwara', 'আনোয়ারা', 0),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 0),
(74, 8, 'Satkania', 'সাতকানিয়া', 0),
(75, 8, 'Lohagara', 'লোহাগাড়া', 0),
(76, 8, 'Hathazari', 'হাটহাজারী', 0),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 0),
(78, 8, 'Raozan', 'রাউজান', 0),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 0),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 0),
(81, 9, 'Chakaria', 'চকরিয়া', 0),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 0),
(83, 9, 'Ukhiya', 'উখিয়া', 0),
(84, 9, 'Moheshkhali', 'মহেশখালী', 0),
(85, 9, 'Pekua', 'পেকুয়া', 0),
(86, 9, 'Ramu', 'রামু', 0),
(87, 9, 'Teknaf', 'টেকনাফ', 0),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 0),
(89, 10, 'Dighinala', 'দিঘীনালা', 0),
(90, 10, 'Panchari', 'পানছড়ি', 0),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 0),
(92, 10, 'Mohalchari', 'মহালছড়ি', 0),
(93, 10, 'Manikchari', 'মানিকছড়ি', 0),
(94, 10, 'Ramgarh', 'রামগড়', 0),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 0),
(96, 10, 'Guimara', 'গুইমারা', 0),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 0),
(98, 11, 'Alikadam', 'আলীকদম', 0),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 0),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 0),
(101, 11, 'Lama', 'লামা', 0),
(102, 11, 'Ruma', 'রুমা', 0),
(103, 11, 'Thanchi', 'থানচি', 0),
(104, 12, 'Belkuchi', 'বেলকুচি', 0),
(105, 12, 'Chauhali', 'চৌহালি', 0),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 0),
(107, 12, 'Kazipur', 'কাজীপুর', 0),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 0),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 0),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 0),
(111, 12, 'Tarash', 'তাড়াশ', 0),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 0),
(113, 13, 'Sujanagar', 'সুজানগর', 0),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 0),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 0),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 0),
(117, 13, 'Bera', 'বেড়া', 0),
(118, 13, 'Atghoria', 'আটঘরিয়া', 0),
(119, 13, 'Chatmohar', 'চাটমোহর', 0),
(120, 13, 'Santhia', 'সাঁথিয়া', 0),
(121, 13, 'Faridpur', 'ফরিদপুর', 0),
(122, 14, 'Kahaloo', 'কাহালু', 0),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 0),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 0),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 0),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 0),
(127, 14, 'Adamdighi', 'আদমদিঘি', 0),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 0),
(129, 14, 'Sonatala', 'সোনাতলা', 0),
(130, 14, 'Dhunot', 'ধুনট', 0),
(131, 14, 'Gabtali', 'গাবতলী', 0),
(132, 14, 'Sherpur', 'শেরপুর', 0),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 0),
(134, 15, 'Paba', 'পবা', 0),
(135, 15, 'Durgapur', 'দুর্গাপুর', 0),
(136, 15, 'Mohonpur', 'মোহনপুর', 0),
(137, 15, 'Charghat', 'চারঘাট', 0),
(138, 15, 'Puthia', 'পুঠিয়া', 0),
(139, 15, 'Bagha', 'বাঘা', 0),
(140, 15, 'Godagari', 'গোদাগাড়ী', 0),
(141, 15, 'Tanore', 'তানোর', 0),
(142, 15, 'Bagmara', 'বাগমারা', 0),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 0),
(144, 16, 'Singra', 'সিংড়া', 0),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 0),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 0),
(147, 16, 'Lalpur', 'লালপুর', 0),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 0),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 0),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 0),
(151, 17, 'Kalai', 'কালাই', 0),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 0),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 0),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 0),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 0),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 0),
(157, 18, 'Nachol', 'নাচোল', 0),
(158, 18, 'Bholahat', 'ভোলাহাট', 0),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 0),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 0),
(161, 19, 'Badalgachi', 'বদলগাছী', 0),
(162, 19, 'Patnitala', 'পত্নিতলা', 0),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 0),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 0),
(165, 19, 'Manda', 'মান্দা', 0),
(166, 19, 'Atrai', 'আত্রাই', 0),
(167, 19, 'Raninagar', 'রাণীনগর', 0),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 0),
(169, 19, 'Porsha', 'পোরশা', 0),
(170, 19, 'Sapahar', 'সাপাহার', 0),
(171, 20, 'Manirampur', 'মণিরামপুর', 0),
(172, 20, 'Abhaynagar', 'অভয়নগর', 0),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 0),
(174, 20, 'Chougachha', 'চৌগাছা', 0),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 0),
(176, 20, 'Keshabpur', 'কেশবপুর', 0),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 0),
(178, 20, 'Sharsha', 'শার্শা', 0),
(179, 21, 'Assasuni', 'আশাশুনি', 0),
(180, 21, 'Debhata', 'দেবহাটা', 0),
(181, 21, 'Kalaroa', 'কলারোয়া', 0),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 0),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 0),
(184, 21, 'Tala', 'তালা', 0),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 0),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 0),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 0),
(188, 22, 'Gangni', 'গাংনী', 0),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 0),
(190, 23, 'Lohagara', 'লোহাগড়া', 0),
(191, 23, 'Kalia', 'কালিয়া', 0),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 0),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 0),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 0),
(195, 24, 'Jibannagar', 'জীবননগর', 0),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 0),
(197, 25, 'Kumarkhali', 'কুমারখালী', 0),
(198, 25, 'Khoksa', 'খোকসা', 0),
(199, 25, 'Mirpur', 'মিরপুর', 0),
(200, 25, 'Daulatpur', 'দৌলতপুর', 0),
(201, 25, 'Bheramara', 'ভেড়ামারা', 0),
(202, 26, 'Shalikha', 'শালিখা', 0),
(203, 26, 'Sreepur', 'শ্রীপুর', 0),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 0),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 0),
(206, 27, 'Paikgasa', 'পাইকগাছা', 0),
(207, 27, 'Fultola', 'ফুলতলা', 0),
(208, 27, 'Digholia', 'দিঘলিয়া', 0),
(209, 27, 'Rupsha', 'রূপসা', 0),
(210, 27, 'Terokhada', 'তেরখাদা', 0),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 0),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 0),
(213, 27, 'Dakop', 'দাকোপ', 0),
(214, 27, 'Koyra', 'কয়রা', 0),
(215, 28, 'Fakirhat', 'ফকিরহাট', 0),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 0),
(217, 28, 'Mollahat', 'মোল্লাহাট', 0),
(218, 28, 'Sarankhola', 'শরণখোলা', 0),
(219, 28, 'Rampal', 'রামপাল', 0),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 0),
(221, 28, 'Kachua', 'কচুয়া', 0),
(222, 28, 'Mongla', 'মোংলা', 0),
(223, 28, 'Chitalmari', 'চিতলমারী', 0),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 0),
(225, 29, 'Shailkupa', 'শৈলকুপা', 0),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 0),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 0),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 0),
(229, 29, 'Moheshpur', 'মহেশপুর', 0),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 0),
(231, 30, 'Kathalia', 'কাঠালিয়া', 0),
(232, 30, 'Nalchity', 'নলছিটি', 0),
(233, 30, 'Rajapur', 'রাজাপুর', 0),
(234, 31, 'Bauphal', 'বাউফল', 0),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 0),
(236, 31, 'Dumki', 'দুমকি', 0),
(237, 31, 'Dashmina', 'দশমিনা', 0),
(238, 31, 'Kalapara', 'কলাপাড়া', 0),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 0),
(240, 31, 'Galachipa', 'গলাচিপা', 0),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 0),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 0),
(243, 32, 'Nazirpur', 'নাজিরপুর', 0),
(244, 32, 'Kawkhali', 'কাউখালী', 0),
(245, 32, 'Zianagar', 'জিয়ানগর', 0),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 0),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 0),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 0),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 0),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 0),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 0),
(252, 33, 'Wazirpur', 'উজিরপুর', 0),
(253, 33, 'Banaripara', 'বানারীপাড়া', 0),
(254, 33, 'Gournadi', 'গৌরনদী', 0),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 0),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 0),
(257, 33, 'Muladi', 'মুলাদী', 0),
(258, 33, 'Hizla', 'হিজলা', 0),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 0),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 0),
(261, 34, 'Charfesson', 'চরফ্যাশন', 0),
(262, 34, 'Doulatkhan', 'দৌলতখান', 0),
(263, 34, 'Monpura', 'মনপুরা', 0),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 0),
(265, 34, 'Lalmohan', 'লালমোহন', 0),
(266, 35, 'Amtali', 'আমতলী', 0),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 0),
(268, 35, 'Betagi', 'বেতাগী', 0),
(269, 35, 'Bamna', 'বামনা', 0),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 0),
(271, 35, 'Taltali', 'তালতলি', 0),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 0),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 0),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 0),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 0),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 0),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 0),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 0),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 0),
(280, 36, 'Kanaighat', 'কানাইঘাট', 0),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 0),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 0),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 0),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 0),
(285, 37, 'Barlekha', 'বড়লেখা', 0),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 0),
(287, 37, 'Kulaura', 'কুলাউড়া', 0),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 0),
(289, 37, 'Rajnagar', 'রাজনগর', 0),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 0),
(291, 37, 'Juri', 'জুড়ী', 0),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 0),
(293, 38, 'Bahubal', 'বাহুবল', 0),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 0),
(295, 38, 'Baniachong', 'বানিয়াচং', 0),
(296, 38, 'Lakhai', 'লাখাই', 0),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 0),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 0),
(299, 38, 'Madhabpur', 'মাধবপুর', 0),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 0),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 0),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 0),
(303, 39, 'Chhatak', 'ছাতক', 0),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 0),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 0),
(306, 39, 'Tahirpur', 'তাহিরপুর', 0),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 0),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 0),
(309, 39, 'Shalla', 'শাল্লা', 0),
(310, 39, 'Derai', 'দিরাই', 0),
(311, 40, 'Belabo', 'বেলাবো', 0),
(312, 40, 'Monohardi', 'মনোহরদী', 0),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', 0),
(314, 40, 'Palash', 'পলাশ', 0),
(315, 40, 'Raipura', 'রায়পুরা', 0),
(316, 40, 'Shibpur', 'শিবপুর', 0),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', 0),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', 0),
(319, 41, 'Kapasia', 'কাপাসিয়া', 1),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', 0),
(321, 41, 'Sreepur', 'শ্রীপুর', 0),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 0),
(323, 42, 'Naria', 'নড়িয়া', 0),
(324, 42, 'Zajira', 'জাজিরা', 0),
(325, 42, 'Gosairhat', 'গোসাইরহাট', 0),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', 0),
(327, 42, 'Damudya', 'ডামুড্যা', 0),
(328, 43, 'Araihazar', 'আড়াইহাজার', 0),
(329, 43, 'Bandar', 'বন্দর', 0),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 0),
(331, 43, 'Rupganj', 'রূপগঞ্জ', 0),
(332, 43, 'Sonargaon', 'সোনারগাঁ', 0),
(333, 44, 'Basail', 'বাসাইল', 0),
(334, 44, 'Bhuapur', 'ভুয়াপুর', 0),
(335, 44, 'Delduar', 'দেলদুয়ার', 0),
(336, 44, 'Ghatail', 'ঘাটাইল', 0),
(337, 44, 'Gopalpur', 'গোপালপুর', 0),
(338, 44, 'Madhupur', 'মধুপুর', 0),
(339, 44, 'Mirzapur', 'মির্জাপুর', 0),
(340, 44, 'Nagarpur', 'নাগরপুর', 0),
(341, 44, 'Sakhipur', 'সখিপুর', 0),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', 0),
(343, 44, 'Kalihati', 'কালিহাতী', 0),
(344, 44, 'Dhanbari', 'ধনবাড়ী', 0),
(345, 45, 'Itna', 'ইটনা', 0),
(346, 45, 'Katiadi', 'কটিয়াদী', 0),
(347, 45, 'Bhairab', 'ভৈরব', 0),
(348, 45, 'Tarail', 'তাড়াইল', 0),
(349, 45, 'Hossainpur', 'হোসেনপুর', 0),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', 0),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', 0),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 0),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', 0),
(354, 45, 'Bajitpur', 'বাজিতপুর', 0),
(355, 45, 'Austagram', 'অষ্টগ্রাম', 0),
(356, 45, 'Mithamoin', 'মিঠামইন', 0),
(357, 45, 'Nikli', 'নিকলী', 0),
(358, 46, 'Harirampur', 'হরিরামপুর', 0),
(359, 46, 'Saturia', 'সাটুরিয়া', 0),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 0),
(361, 46, 'Gior', 'ঘিওর', 0),
(362, 46, 'Shibaloy', 'শিবালয়', 0),
(363, 46, 'Doulatpur', 'দৌলতপুর', 0),
(364, 46, 'Singiar', 'সিংগাইর', 0),
(365, 47, 'Savar', 'সাভার', 0),
(366, 47, 'Dhamrai', 'ধামরাই', 0),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', 0),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', 0),
(369, 47, 'Dohar', 'দোহার', 0),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 0),
(371, 48, 'Sreenagar', 'শ্রীনগর', 0),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', 0),
(373, 48, 'Louhajanj', 'লৌহজং', 0),
(374, 48, 'Gajaria', 'গজারিয়া', 0),
(375, 48, 'Tongibari', 'টংগীবাড়ি', 0),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', 0),
(377, 49, 'Goalanda', 'গোয়ালন্দ', 0),
(378, 49, 'Pangsa', 'পাংশা', 0),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', 0),
(380, 49, 'Kalukhali', 'কালুখালী', 0),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', 0),
(382, 50, 'Shibchar', 'শিবচর', 0),
(383, 50, 'Kalkini', 'কালকিনি', 0),
(384, 50, 'Rajoir', 'রাজৈর', 0),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 0),
(386, 51, 'Kashiani', 'কাশিয়ানী', 0),
(387, 51, 'Tungipara', 'টুংগীপাড়া', 0),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', 0),
(389, 51, 'Muksudpur', 'মুকসুদপুর', 0),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', 0),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', 0),
(392, 52, 'Boalmari', 'বোয়ালমারী', 0),
(393, 52, 'Sadarpur', 'সদরপুর', 0),
(394, 52, 'Nagarkanda', 'নগরকান্দা', 0),
(395, 52, 'Bhanga', 'ভাঙ্গা', 0),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', 0),
(397, 52, 'Madhukhali', 'মধুখালী', 0),
(398, 52, 'Saltha', 'সালথা', 0),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 0),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', 0),
(401, 53, 'Boda', 'বোদা', 0),
(402, 53, 'Atwari', 'আটোয়ারী', 0),
(403, 53, 'Tetulia', 'তেতুলিয়া', 0),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', 0),
(405, 54, 'Birganj', 'বীরগঞ্জ', 0),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', 0),
(407, 54, 'Birampur', 'বিরামপুর', 0),
(408, 54, 'Parbatipur', 'পার্বতীপুর', 0),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', 0),
(410, 54, 'Kaharol', 'কাহারোল', 0),
(411, 54, 'Fulbari', 'ফুলবাড়ী', 0),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', 0),
(413, 54, 'Hakimpur', 'হাকিমপুর', 0),
(414, 54, 'Khansama', 'খানসামা', 0),
(415, 54, 'Birol', 'বিরল', 0),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', 0),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 0),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', 0),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', 0),
(420, 55, 'Patgram', 'পাটগ্রাম', 0),
(421, 55, 'Aditmari', 'আদিতমারী', 0),
(422, 56, 'Syedpur', 'সৈয়দপুর', 0),
(423, 56, 'Domar', 'ডোমার', 0),
(424, 56, 'Dimla', 'ডিমলা', 0),
(425, 56, 'Jaldhaka', 'জলঢাকা', 0),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', 0),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', 0),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', 0),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 0),
(430, 57, 'Palashbari', 'পলাশবাড়ী', 0),
(431, 57, 'Saghata', 'সাঘাটা', 0),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', 0),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', 0),
(434, 57, 'Phulchari', 'ফুলছড়ি', 0),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 0),
(436, 58, 'Pirganj', 'পীরগঞ্জ', 0),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', 0),
(438, 58, 'Haripur', 'হরিপুর', 0),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', 0),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', 0),
(441, 59, 'Gangachara', 'গংগাচড়া', 0),
(442, 59, 'Taragonj', 'তারাগঞ্জ', 0),
(443, 59, 'Badargonj', 'বদরগঞ্জ', 0),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', 0),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', 0),
(446, 59, 'Kaunia', 'কাউনিয়া', 0),
(447, 59, 'Pirgacha', 'পীরগাছা', 0),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 0),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', 0),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', 0),
(451, 60, 'Phulbari', 'ফুলবাড়ী', 0),
(452, 60, 'Rajarhat', 'রাজারহাট', 0),
(453, 60, 'Ulipur', 'উলিপুর', 0),
(454, 60, 'Chilmari', 'চিলমারী', 0),
(455, 60, 'Rowmari', 'রৌমারী', 0),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', 0),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', 0),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', 0),
(459, 61, 'Sreebordi', 'শ্রীবরদী', 0),
(460, 61, 'Nokla', 'নকলা', 0),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', 0),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', 0),
(463, 62, 'Trishal', 'ত্রিশাল', 0),
(464, 62, 'Bhaluka', 'ভালুকা', 0),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', 0),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 0),
(467, 62, 'Dhobaura', 'ধোবাউড়া', 0),
(468, 62, 'Phulpur', 'ফুলপুর', 0),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', 0),
(470, 62, 'Gouripur', 'গৌরীপুর', 0),
(471, 62, 'Gafargaon', 'গফরগাঁও', 0),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', 0),
(473, 62, 'Nandail', 'নান্দাইল', 0),
(474, 62, 'Tarakanda', 'তারাকান্দা', 0),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', 0),
(476, 63, 'Melandah', 'মেলান্দহ', 0),
(477, 63, 'Islampur', 'ইসলামপুর', 0),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', 0),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', 0),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', 0),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', 0),
(482, 64, 'Barhatta', 'বারহাট্টা', 0),
(483, 64, 'Durgapur', 'দুর্গাপুর', 0),
(484, 64, 'Kendua', 'কেন্দুয়া', 0),
(485, 64, 'Atpara', 'আটপাড়া', 0),
(486, 64, 'Madan', 'মদন', 0),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', 0),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', 0),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', 0),
(490, 64, 'Purbadhala', 'পূর্বধলা', 0),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upazila_couriers`
--

CREATE TABLE `upazila_couriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upazila_id` bigint(20) UNSIGNED NOT NULL,
  `courier_id` bigint(20) UNSIGNED NOT NULL,
  `fee` bigint(20) NOT NULL,
  `is_cash_on_delivery` tinyint(1) NOT NULL DEFAULT 0,
  `prepare_to_delete` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upazila_couriers`
--

INSERT INTO `upazila_couriers` (`id`, `upazila_id`, `courier_id`, `fee`, `is_cash_on_delivery`, `prepare_to_delete`, `created_at`, `updated_at`) VALUES
(136, 18, 1, 100, 1, 0, NULL, NULL),
(137, 18, 2, 100, 1, 0, NULL, NULL),
(138, 18, 3, 100, 1, 0, NULL, NULL),
(139, 18, 5, 100, 1, 0, NULL, NULL),
(145, 15, 1, 200, 1, 0, NULL, NULL),
(146, 15, 2, 200, 1, 0, NULL, NULL),
(147, 15, 3, 200, 1, 0, NULL, NULL),
(148, 15, 4, 200, 1, 0, NULL, NULL),
(149, 15, 5, 1000, 1, 0, NULL, NULL),
(158, 319, 2, 200, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_code` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `ip_address`, `avatar`, `company`, `email_verified_at`, `status`, `password`, `verification_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Asif', '7327084402', 'ashiffoysal8818@gmail.com', '::1', NULL, NULL, '2020-02-16 00:07:20', 1, '$2y$10$q2SPh945KVm0z6jQNGZ/Q.E0c8KJudxnSygx1R3ecauPlDmxPWYaa', NULL, NULL, '2020-02-16 00:06:45', '2020-02-16 00:07:20'),
(15, 'new', '01783038818', 'ashiffoysal0@gmail.com', '::1', NULL, NULL, NULL, 1, '$2y$10$5L0CjQ/0t8Tb0U05UWgCwOqeX1YDNxJR37w86SDZ6wWjfCsrVEWYO', 978746, '1Z75x938sZ90Tci7O04BA2EgS793yjdculhDQwsYqHDVWUi5CYauhmTdFbE9', '2020-02-24 23:45:50', '2020-02-24 23:45:50'),
(25, 'Ovi', '01822568412', 'zamanovi160@gmail.com', '::1', NULL, NULL, NULL, 1, '$2y$10$kCvCPFCWLWpMnRESJA9L7O72WWybD2m7CBSUuQhHekaTM2JcSaPDe', NULL, '2W92dkooRU4LPRT4FNo9NSNHJslk6rwPE1CWNc1OWstTH7UnJUXROwPp4z8B', '2020-03-10 03:06:25', '2020-03-10 04:06:49'),
(33, 'root', '01740214587', 'e@gmail.com', '::1', NULL, NULL, NULL, 0, '$2y$10$wF7.D1CWpeGILsNtRZ88yO9s4gsDEyEKKXVIDJaV2sQDTHqqEM9ly', 296643, '8fd046f9f8f50ab2903fa9fd6c845134', '2020-03-10 23:46:47', '2020-03-10 23:46:47'),
(34, 'Harrison', '01854284712', 'ermhroy7@gmail.com', '::1', NULL, NULL, NULL, 1, '$2y$10$IKb49XWlXLx/m7Rl1uVwqup9Y8vWED4pQfELGakDAvhJ30lZLDJFW', 621111, '15b8cca2cd9d4786ff36a1fef63dd9e0', '2020-03-11 01:15:49', '2020-03-11 04:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_post_office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_country_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_division_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_district_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_upazila_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `user_address`, `user_post_office`, `user_postcode`, `user_country_id`, `user_division_id`, `user_district_id`, `user_upazila_id`, `is_shipping_address`, `created_at`, `updated_at`) VALUES
(230, '25', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 05:15:51', NULL),
(231, '25', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 05:20:25', NULL),
(232, '25', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 05:21:19', NULL),
(233, '25', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 05:36:25', NULL),
(253, '26', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 07:21:12', NULL),
(254, '26', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 07:23:02', NULL),
(255, '26', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 07:23:54', NULL),
(256, '26', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 07:24:45', NULL),
(257, '26', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 07:26:46', NULL),
(258, '26', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-10 07:27:54', NULL),
(275, '34', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-11 03:43:37', NULL),
(276, '34', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-11 04:04:17', NULL),
(277, '34', 'Mirpur 1, Dhaka', '+8801781806505', '1216', '18', '1', '1', '15', '1', '2020-03-11 04:09:09', NULL),
(278, '14', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', '+8801781806505', '1216', '18', '1', '1', '5', '1', '2020-03-20 23:59:50', NULL),
(279, '14', 'Muktobangla Shopping Complex, 9th Floor, Room No. 207, Mirpur 1, Dhaka, Bangladesh', '+8801781806505', '1216', '18', '1', '1', '5', '1', '2020-03-21 00:00:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_used_cupons`
--

CREATE TABLE `user_used_cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_used_cupons`
--

INSERT INTO `user_used_cupons` (`id`, `user_ip`, `cupon_id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(168, '14', '17', '28869', 1, '2020-03-10 22:35:01', '2020-03-10 22:35:21'),
(169, '14', '18', '51378', 1, '2020-03-10 22:36:18', '2020-03-10 22:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `verification_options`
--

CREATE TABLE `verification_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verify_with` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verification_options`
--

INSERT INTO `verification_options` (`id`, `verify_with`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '2020-02-29 06:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `warranties`
--

CREATE TABLE `warranties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `w_ques` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_ans` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`id`, `w_ques`, `w_ans`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(5, 'What products are warranted?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laboru', 0, 1, '2020-02-11 02:10:34', '2020-02-18 04:03:23'),
(6, 'Where to go for', 'Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '2020-02-11 02:10:47', '2020-02-18 04:03:23'),
(7, 'I can exchange or return an item?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1, 1, '2020-02-11 02:11:02', '2020-02-18 04:03:23'),
(8, 'In some cases, the warranty is not provided?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '2020-02-11 02:11:15', '2020-02-18 04:03:23'),
(9, 'What are you doing?', 'fdgdfgfggdfgfdgg', 1, 0, '2020-03-03 22:12:34', NULL),
(10, 'njgfjf', 'fjfjfgj', 1, 0, '2020-03-03 22:16:04', NULL),
(11, 'mvmnmbn', 'mbnmbnm', 1, 0, '2020-03-03 22:16:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(101, 120, 11, NULL, '2020-02-11 05:43:57', NULL),
(102, 129, 11, NULL, '2020-02-11 05:46:45', NULL),
(103, 127, 11, NULL, '2020-02-11 05:46:48', NULL),
(104, 94, 11, NULL, '2020-02-11 05:46:52', NULL),
(105, 100, 11, NULL, '2020-02-11 05:46:55', NULL),
(106, 119, 11, NULL, '2020-02-11 05:46:59', NULL),
(107, 121, 11, NULL, '2020-02-11 05:47:09', NULL),
(108, 131, 11, NULL, '2020-02-11 05:47:33', NULL),
(109, 91, 11, NULL, '2020-02-11 05:47:41', NULL),
(110, 89, 11, NULL, '2020-02-11 05:47:47', NULL),
(111, 132, 11, NULL, '2020-02-11 05:49:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_to_carts`
--
ALTER TABLE `add_to_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_storage`
--
ALTER TABLE `cart_storage`
  ADD PRIMARY KEY (`purchase_key`),
  ADD KEY `cart_storage_id_index` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_banners`
--
ALTER TABLE `category_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_products`
--
ALTER TABLE `compare_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_images`
--
ALTER TABLE `contract_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contract_images_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delevery_amounts`
--
ALTER TABLE `delevery_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals`
--
ALTER TABLE `flash_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deal_details`
--
ALTER TABLE `flash_deal_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flash_deal_details_flash_deal_id_foreign` (`flash_deal_id`),
  ADD KEY `flash_deal_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `footer_options`
--
ALTER TABLE `footer_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gateway`
--
ALTER TABLE `gateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_drafts`
--
ALTER TABLE `mail_drafts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mail_drafts_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `mesurements`
--
ALTER TABLE `mesurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_banners`
--
ALTER TABLE `mobile_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_sliders`
--
ALTER TABLE `mobile_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_places`
--
ALTER TABLE `order_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_storages`
--
ALTER TABLE `order_storages`
  ADD PRIMARY KEY (`purchase_key`),
  ADD KEY `order_storages_id_index` (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_details_order_place_id_foreign` (`order_place_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_licenses`
--
ALTER TABLE `product_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_storages`
--
ALTER TABLE `product_storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `re_sub_categories`
--
ALTER TABLE `re_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_banners`
--
ALTER TABLE `site_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_models`
--
ALTER TABLE `sms_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_logins`
--
ALTER TABLE `social_media_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_colors`
--
ALTER TABLE `theme_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_selectors`
--
ALTER TABLE `theme_selectors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `theme_selectors_css_name_unique` (`css_name`),
  ADD UNIQUE KEY `theme_selectors_js_name_unique` (`js_name`),
  ADD UNIQUE KEY `theme_selectors_header_name_unique` (`header_name`),
  ADD UNIQUE KEY `theme_selectors_footer_name_unique` (`footer_name`),
  ADD UNIQUE KEY `theme_selectors_theme_name_unique` (`theme_name`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `upazila_couriers`
--
ALTER TABLE `upazila_couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_used_cupons`
--
ALTER TABLE `user_used_cupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `verification_options`
--
ALTER TABLE `verification_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_to_carts`
--
ALTER TABLE `add_to_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cart_storage`
--
ALTER TABLE `cart_storage`
  MODIFY `purchase_key` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `category_banners`
--
ALTER TABLE `category_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `compare_products`
--
ALTER TABLE `compare_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contract_images`
--
ALTER TABLE `contract_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `delevery_amounts`
--
ALTER TABLE `delevery_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `flash_deal_details`
--
ALTER TABLE `flash_deal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=418;

--
-- AUTO_INCREMENT for table `footer_options`
--
ALTER TABLE `footer_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gateway`
--
ALTER TABLE `gateway`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mail_drafts`
--
ALTER TABLE `mail_drafts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mesurements`
--
ALTER TABLE `mesurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `mobile_banners`
--
ALTER TABLE `mobile_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobile_sliders`
--
ALTER TABLE `mobile_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_places`
--
ALTER TABLE `order_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;

--
-- AUTO_INCREMENT for table `order_storages`
--
ALTER TABLE `order_storages`
  MODIFY `purchase_key` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `product_licenses`
--
ALTER TABLE `product_licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_storages`
--
ALTER TABLE `product_storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `re_sub_categories`
--
ALTER TABLE `re_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_banners`
--
ALTER TABLE `site_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `sms_models`
--
ALTER TABLE `sms_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media_logins`
--
ALTER TABLE `social_media_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theme_colors`
--
ALTER TABLE `theme_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `theme_selectors`
--
ALTER TABLE `theme_selectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `upazila_couriers`
--
ALTER TABLE `upazila_couriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `user_used_cupons`
--
ALTER TABLE `user_used_cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `verification_options`
--
ALTER TABLE `verification_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contract_images`
--
ALTER TABLE `contract_images`
  ADD CONSTRAINT `contract_images_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `upazilas_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
