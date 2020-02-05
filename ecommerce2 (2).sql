-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 05:52 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce2`
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
(1, 'lorem', '1.jpg', 0, 1, NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `avatar`, `address`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohidul Islam Sohel', '01961363544', 'admin@gmail.com', 'public/adminpanel/avatar/5df9bf3d68ca2.jpg', 'Dhaka mirpur 1', NULL, '$2y$10$4dVRpdfoVgHNJffr35dQ8ekGW/PFEcELEL5Q6.9v8lxvpHUflngxO', NULL, '', NULL, '2019-12-18 00:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ban_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `ban_link`, `ban_image`, `ban_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(5, '@', 'ban__1579511074.png', 1, 0, '2020-01-20 03:04:34', '2020-01-20 03:04:34'),
(6, 'dgfd', 'ban__1579511081.png', 1, 0, '2020-01-20 03:04:41', '2020-01-20 03:04:41'),
(7, 'dgfd', 'ban__1579511088.png', 1, 0, '2020-01-20 03:04:48', '2020-01-20 03:04:48'),
(8, '@', 'ban__1579511098.jpg', 1, 0, '2020-01-20 03:04:58', '2020-01-20 03:04:58');

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
(10, 'Lotto0ooo', '__1577514728.png', 1, 0, '2019-12-23 23:11:11', '2019-12-28 03:20:14'),
(11, 'Nike yyy', '__1577514735.jpg', 1, 1, '2019-12-23 23:11:18', '2019-12-28 03:20:31'),
(12, 'Bata new', '__1577514743.jpg', 1, 1, '2019-12-28 00:30:41', '2019-12-28 03:20:25'),
(13, 'Addidas', 'brand_1577524607.jpg', 1, 1, '2019-12-28 03:16:47', '2019-12-28 03:20:19'),
(14, 'Nike', 'brand_1578460637.png', 1, 0, '2020-01-07 23:17:17', '2020-01-07 23:17:17');

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

--
-- Dumping data for table `cart_storage`
--

INSERT INTO `cart_storage` (`id`, `cart_data`, `created_at`, `updated_at`, `purchase_key`) VALUES
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:3:{i:104;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:104;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:5;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:2:{s:13:\"thumbnail_img\";s:17:\"th_1579424577.jpg\";s:10:\"product_id\";i:104;}}s:10:\"conditions\";a:0:{}}}i:97;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:97;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:3;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:2:{s:13:\"thumbnail_img\";s:17:\"th_1579322297.jpg\";s:10:\"product_id\";i:97;}}s:10:\"conditions\";a:0:{}}}i:7;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:7;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:5:{s:13:\"thumbnail_img\";s:17:\"th_1579157374.jpg\";s:6:\"colors\";s:7:\"#8000ff\";s:10:\"product_id\";i:90;s:9:\"variation\";s:9:\"variation\";s:4:\"size\";s:1:\"l\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-04 22:34:28', '2020-02-04 22:44:03', 108);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(36, 'Electronics', 'category__1578994524.jpg', '__1579000801.png', 'electronics', 'electronics', 5, '1', 0, '2020-01-14 03:35:24', '2020-01-24 22:56:04'),
(37, 'Fashion', 'category__1578994615.jpg', '__1579000809.jpg', 'new', 'fashion', 3, '1', 0, '2020-01-14 03:36:55', '2020-01-14 05:20:09'),
(38, 'Book Stationery', 'category__1578996358.jpg', '__1579000817.png', 'book', 'book-stationery', 2, '1', 0, '2020-01-14 04:05:58', '2020-01-14 05:20:17'),
(39, 'Sport & Entertainment', 'category__1578996394.jpg', '__1579000826.jpg', 'Sports', 'sport-entertainment', 1, '1', 0, '2020-01-14 04:06:34', '2020-01-14 05:20:26'),
(40, 'Women', 'category__1579078295.jpg', '__1579078295.png', 'new', 'women', 4, '1', 0, '2020-01-15 02:51:35', '2020-01-15 02:51:35'),
(41, 'Arrival', 'category__1579425617.jpg', '__1579425617.jpg', 'new', 'arrival', 5, '1', 0, '2020-01-19 03:20:17', '2020-01-19 03:20:17'),
(42, 'Babies & Toys', 'category__1579425662.jpg', '__1579425662.jpg', 'new', 'babies-toys', 5, '1', 0, '2020-01-19 03:21:02', '2020-01-19 03:21:02');

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
(66, 52, 1, 53, '2020-02-02 01:51:10', NULL),
(67, 41, 1, 53, '2020-02-02 01:51:10', NULL),
(68, 40, 1, 53, '2020-02-02 01:51:10', NULL),
(71, 41, 4, 55, '2020-02-04 01:07:25', NULL);

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
(5, 'marun', '#8000ff', 1, 0, NULL, '2019-12-24 22:09:48'),
(6, 'green', '#40db24', 1, 0, NULL, NULL),
(7, 'black', '#000040', 1, 1, NULL, '2019-12-28 03:15:51');

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

--
-- Dumping data for table `compare_products`
--

INSERT INTO `compare_products` (`id`, `ip_address`, `product_id`, `created_at`, `updated_at`) VALUES
(11, '::1', 105, NULL, NULL),
(12, '::1', 104, NULL, NULL),
(13, '::1', 103, NULL, NULL);

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
(11, 'Nadim', 'iek@gmail.com', NULL, NULL, 'asdfasdf', 1, 0, 1, 1, NULL, '2020-01-19 05:36:26'),
(12, 'Nadim', 'iek@gmail.com', NULL, NULL, 'sadfsadf', 1, 0, 1, 1, NULL, '2020-01-19 05:36:26'),
(13, 'Nadim', 'iek@gmail.com', NULL, NULL, 'sadfsadf', 1, 0, 1, 1, NULL, '2020-01-19 05:03:08'),
(14, 'Nadim', 'iek@gmail.com', NULL, NULL, 'sadfsadf', 1, 0, 1, 1, NULL, '2020-01-19 04:56:19'),
(15, 'Nadim', 'iek@gmail.com', NULL, NULL, 'fsdfad sdfsafasdf', 1, 0, 1, 1, '2020-01-18 04:55:10', '2020-01-19 05:19:44'),
(16, 'Nadim', 'iek@gmail.com', NULL, 'sadfas sdafasdf dasf', 'sdafasdf sadfsadf sadfs', 1, 1, 1, 1, '2020-01-18 05:34:29', '2020-01-19 05:25:15'),
(19, 'Nadim', 'iek@gmail.com', NULL, 'sadfas sdafasdf dasf', 'sadfsa asdfas f', 1, 0, 1, 1, '2020-01-19 05:14:07', '2020-01-19 06:04:15'),
(20, 'Nadim', 'iek@gmail.com', '1231231234', 'sadfas sdafasdf dasf', 'sadfasdf sadfasdf', 1, 0, 1, 0, '2020-01-19 05:15:22', '2020-01-19 05:56:20'),
(21, 'Nadim', 'sdafs@gmail.com', '12345678954', 'sadfas sdafasdf dasf', 'sadf asdfa sadf fwa', 1, 0, 1, 0, '2020-01-19 05:56:49', '2020-01-19 06:04:18');

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
(22, 15, '5e22e40ee2515.jpg', NULL, NULL);

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
(1, '2', '123456789', NULL, '[\"89\",\"90\",\"91\"]', 10, 1, '2020-01-11', '2020-01-21', 1, 1, '2020-01-11 05:52:52', '2020-01-11 05:52:52'),
(2, '1', 'qan', '10000', 'null', 8000, 2, '2020-01-11', '2020-01-23', 1, 1, '2020-01-11 05:52:39', '2020-01-11 05:52:39'),
(3, '2', 'bvbnbvn', NULL, '[\"67\",\"58\"]', 10, 2, '2020-01-11', '2020-01-29', 1, 0, '2020-01-11 22:14:41', '2020-01-11 22:14:41');

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
(10, 'what is the new problem?', 'nly five centuries, but also the leap into electronic typesetting, remaining essentially unch', 0, 1, NULL, '2020-01-18 05:27:23'),
(11, 'Etharums ser quidem rerum?', 'nly five centuries, but also the leap into electronic typesetting,asif', 0, 1, NULL, '2020-01-18 05:41:24'),
(12, 'what is the new ambition?', 'nly fiveessentially unch', 0, 1, NULL, '2020-01-18 05:41:16');

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
(5, '\\/new', '2020-01-19', '2020-01-23', 1, 1, '2020-01-18 23:30:33', '2020-01-19 23:13:12'),
(6, '\\/hh', '2020-01-20', '2020-01-31', 1, 0, '2020-01-18 23:31:09', '2020-01-19 23:13:14'),
(7, '\\/ww', '2020-01-19', '2020-01-24', 1, 0, '2020-01-18 23:32:58', '2020-01-19 23:13:16'),
(8, '\\/', '2020-01-20', '2020-01-22', 1, 0, '2020-01-19 00:09:39', '2020-01-19 23:13:18'),
(9, 'new', '2020-01-19', '2020-01-24', 1, 1, '2020-01-19 00:52:02', '2020-01-19 23:13:20'),
(10, '\\/mmm', '2020-01-20', '2020-01-25', 1, 1, '2020-01-19 01:04:12', '2020-01-19 23:13:21'),
(11, '\\/', '2020-01-20', '2020-01-25', 1, 1, '2020-01-19 03:29:48', '2020-01-19 23:13:23'),
(12, '\\/', '2020-01-20', '2020-01-25', 1, 1, '2020-01-19 23:13:49', '2020-01-21 07:05:03'),
(13, '\\/', '2020-01-20', '2020-01-24', 1, 1, '2020-01-20 03:13:27', '2020-01-21 07:05:02'),
(14, 'new', '2020-01-21', '2020-01-24', 0, 1, '2020-01-21 07:04:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flash_deal_details`
--

CREATE TABLE `flash_deal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flash_deal_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `discount` bigint(20) NOT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(380, 14, 89, 10, '1', 0, 1, 0, NULL, NULL),
(381, 14, 91, 20, '1', 0, 1, 0, NULL, NULL),
(382, 14, 92, 15, '1', 0, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_options`
--

CREATE TABLE `footer_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_options`
--

INSERT INTO `footer_options` (`id`, `footer_text`, `address`, `phone`, `email`, `copyright`, `payment_image`, `created_at`, `updated_at`) VALUES
(11, 'sffsdfdsfdsfdsfdsf', 'fdsfdsf', '12569874444444', 'sdffsdf@gmail.comtgerwtgfdgfdsg', 'fdsafdsafsagdsfgfdsgfdsgfdsg', '11.jpg', '2020-01-18 18:00:00', '2020-01-24 23:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `gateway`
--

CREATE TABLE `gateway` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `str_publish_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `str_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_client_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mol_publish_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mol_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twocheck_publish_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twocheck_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateway`
--

INSERT INTO `gateway` (`id`, `str_publish_key`, `str_secret_key`, `pay_client_id`, `pay_secret_key`, `mol_publish_key`, `mol_secret_key`, `twocheck_publish_key`, `twocheck_secret_key`, `created_at`, `updated_at`) VALUES
(1, 'pk_test_MIQvgqy5bnE19yPHSgpfjHFW00bg8cg785', 'sk_test_cSQHERxSPzqk4QQAeiQdhfXD00qjkqhfjx', 'AfGti37yWMZMmD0LQLAIj6iZyGZJA-W4zJU_NUytkqZvknmDvUyaZsWB7zkbY9ub0YRa3rdkzHmHApOv', 'EK0QIlwWrCWqQoRF6kRJDTBjqz8bOAme0ZmBPHpbZK5EidhH9AVYo4ZYM-acYsDwsollzByu29_qv95U', 'sk_test_cSQHERxSPzqk4QQAeiQdhfXD00qjkqhfjx', 'pk_test_MIQvgqy5bnE19yPHSgpfjHFW00bg8cg785', 'pk_test_MIQvgqy5bnE19yPHSgpfjHFW00bg8cg785', 'sk_test_cSQHERxSPzqk4QQAeiQdhfXD00qjkqhfjx', NULL, NULL);

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
(53, 'default', '{\"displayName\":\"App\\\\Mail\\\\WelcomeSubscribeMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":3:{s:8:\\\"mailable\\\";O:32:\\\"App\\\\Mail\\\\WelcomeSubscribeMessage\\\":23:{s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"ashiffoysal0@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;}\"}}', 0, NULL, 1579499850, 1579499850);

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
(1, 'public/adminpanel/logos/logo.png', 'public/adminpanel/logos/favicon.png', 'public/adminpanel/logos/1653506802311058.png', 'public/adminpanel/logos/1653506750394371.jpg', 'public/adminpanel/logos/1653507818657835.gif', NULL, NULL);

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
(4, 'Kilogram', 1, 0, '2019-12-28 00:06:15', '2019-12-28 00:07:50');

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
(37, '2020_01_22_052013_create_checkouts_table', 22),
(38, '2020_01_22_110728_create_user_used_cupons_table', 22),
(41, '2020_01_25_050843_create_user_addresses_table', 23),
(48, '2020_01_25_091317_create_shipping_addresses_table', 24),
(49, '2020_01_26_055203_create_cart_storage_table', 24),
(50, '2020_01_26_093516_create_order_storages_table', 24),
(53, '2020_01_26_095900_create_order_places_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `order_places`
--

CREATE TABLE `order_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_places`
--

INSERT INTO `order_places` (`id`, `shipping_id`, `payment_method_id`, `comment`, `order_id`, `user_id`, `cart_id`, `total_price`, `total_quantity`, `is_paid`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', '2', 'dsfdsfd', '44533', '12', '92', '22000', '3', '0', NULL, '2020-02-03 04:03:30', NULL),
(3, '1', '2', 'fghgfhgf', '1624', '12', '94', '30000', '3', '0', NULL, '2020-02-03 05:40:08', NULL),
(4, '1', '1', 'dsgfdsg', '58190', '12', '98', '530000', '8', '0', NULL, '2020-02-03 23:54:14', NULL),
(5, '1', '2', 'DSFDSF', '94610', '12', '99', '20000', '2', '0', NULL, '2020-02-04 01:48:54', NULL),
(6, '1', '2', 'afdsfdsafsda', '23410', '12', '106', '302000', '31', '0', NULL, '2020-02-04 22:34:01', NULL);

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
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:3:{i:104;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:104;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:5;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:2:{s:13:\"thumbnail_img\";s:17:\"th_1579424577.jpg\";s:10:\"product_id\";i:104;}}s:10:\"conditions\";a:0:{}}}i:97;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:97;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:3;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:2:{s:13:\"thumbnail_img\";s:17:\"th_1579322297.jpg\";s:10:\"product_id\";i:97;}}s:10:\"conditions\";a:0:{}}}i:7;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:7;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:5:{s:13:\"thumbnail_img\";s:17:\"th_1579157374.jpg\";s:6:\"colors\";s:7:\"#8000ff\";s:10:\"product_id\";i:90;s:9:\"variation\";s:9:\"variation\";s:4:\"size\";s:1:\"l\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-04 05:43:18', '2020-02-04 22:44:03', 106, NULL),
('::1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:16:\"Minimum_shopping\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:5:{s:4:\"name\";s:16:\"Minimum_shopping\";s:4:\"type\";s:6:\"coupon\";s:6:\"target\";s:5:\"total\";s:5:\"value\";d:-8000;s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-02-04 06:22:24', '2020-02-04 06:22:24', 107, NULL),
('::1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:3:{i:104;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:104;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:5;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:2:{s:13:\"thumbnail_img\";s:17:\"th_1579424577.jpg\";s:10:\"product_id\";i:104;}}s:10:\"conditions\";a:0:{}}}i:97;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:97;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:3;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:2:{s:13:\"thumbnail_img\";s:17:\"th_1579322297.jpg\";s:10:\"product_id\";i:97;}}s:10:\"conditions\";a:0:{}}}i:7;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:19:\"App\\DatabaseStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:7;s:4:\"name\";s:78:\"but also the leap into electronic typesetting, remaining essentially unchanged\";s:5:\"price\";d:10000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:5:{s:13:\"thumbnail_img\";s:17:\"th_1579157374.jpg\";s:6:\"colors\";s:7:\"#8000ff\";s:10:\"product_id\";i:90;s:9:\"variation\";s:9:\"variation\";s:4:\"size\";s:1:\"l\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-02-04 22:34:28', '2020-02-04 22:44:03', 108, NULL);

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
(4, 'asif', 'when an unknown printer took a galley of type and scrambled it to make', 1, 0, '2020-01-14 03:11:45', NULL);

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
  `allow_flash_deal` int(11) DEFAULT NULL,
  `flash_deal_start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_deal_end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_deal_type` int(11) DEFAULT NULL,
  `flash_deal_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_and_return_policy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `today_deal` int(11) NOT NULL DEFAULT 0,
  `select_upload_type` int(11) DEFAULT NULL,
  `upload_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `product_name`, `product_sku`, `product_qty`, `cate_id`, `subcate_id`, `resubcate_id`, `product_price`, `colors`, `variations`, `choice_options`, `allow_product_condition`, `product_condition`, `brand`, `allow_product_measurement`, `product_measurement`, `allow_flash_deal`, `flash_deal_start_date`, `flash_deal_end_date`, `flash_deal_type`, `flash_deal_price`, `product_description`, `buy_and_return_policy`, `shipping_time`, `meta_tag`, `meta_description`, `photos`, `thumbnail_img`, `today_deal`, `select_upload_type`, `upload_file`, `upload_link`, `affiliate_link`, `license_type`, `license_key`, `license_quantity`, `license_duration`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(89, 1, 'Anantara Dhigu Resort &Amp; Spa, Maldives Hair Spa', 'pant003', 1010, 40, 8, 6, '1000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"1000\",\"sku\":\"fn-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"1000\",\"sku\":\"fn-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-16', '2020-01-18', 2, '1000', '<p>ghghgfhgfh ghghghghgfghghgfhgfh ghghghghgfghghgfhgfh ghghghghgfghghgfhgfh ghghghghgf</p>', '<p>ghghgfhgfh ghghghghgfghghgfhgfh ghghghghgfghghgfhgfh ghghghghgfghghgfhgfh ghghghghgf</p>', '5', 'dfdf,gfg', 'mmmm', '[\"azjX36oUAPv0BZJARGhbJxozfS8QOlTatHD27gXD.jpeg\"]', 'th_1579157385.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-15 22:52:43', '2020-01-17 22:34:37'),
(90, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 40, 8, 6, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"p3-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"p3-marun-m\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"10000\",\"sku\":\"p3-marun-k\",\"qty\":\"10\"},\"green-l\":{\"price\":\"10000\",\"sku\":\"p3-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"10000\",\"sku\":\"p3-green-m\",\"qty\":\"10\"},\"green-k\":{\"price\":\"10000\",\"sku\":\"p3-green-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\",\"k\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-16', '2020-01-25', 2, '100', '<p>smdfdfjdfsdj sdnbkdksd sbdbfbsd sdbfsdjkfjksdff jksdfjkdsf&nbsp;</p>', '<p>smdfdfjdfsdj sdnbkdksd sbdbfbsd sdbfsdjkfjksdff jksdfjkdsf&nbsp;smdfdfjdfsdj sdnbkdksd sbdbfbsd sdbfsdjkfjksdff jksdfjkdsf&nbsp;smdfdfjdfsdj sdnbkdksd sbdbfbsd sdbfsdjkfjksdff jksdfjkdsf&nbsp;smdfdfjdfsdj sdnbkdksd sbdbfbsd sdbfsdjkfjksdff jksdfjkdsf&nbsp;</p>', '5', 'mmm,jjm', 'tytyutyu', '[\"4U1azL8fPXe4cf3C12QDt37I1sMI8jCM3F6Jvlcg.jpeg\"]', 'th_1579157374.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-15 22:57:38', '2020-01-17 23:23:47'),
(91, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'local4546', 1000, 40, 8, 6, '1000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-s\":{\"price\":\"1000\",\"sku\":\"batlietreu-marun-s\",\"qty\":\"10\"},\"marun-j\":{\"price\":\"1000\",\"sku\":\"batlietreu-marun-j\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"1000\",\"sku\":\"batlietreu-marun-k\",\"qty\":\"10\"},\"green-s\":{\"price\":\"1000\",\"sku\":\"batlietreu-green-s\",\"qty\":\"10\"},\"green-j\":{\"price\":\"1000\",\"sku\":\"batlietreu-green-j\",\"qty\":\"10\"},\"green-k\":{\"price\":\"1000\",\"sku\":\"batlietreu-green-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"s\",\"j\",\"k\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-16', '2020-01-25', 1, '11000', '<p>&nbsp;fddfggfgfdfddfggfgfdfddfggfgfdvfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfd</p>', '<p>&nbsp;fddfggfgfdfddfggfgfdfddfggfgfdvfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfdfddfggfgfd</p>', '6787', 'nnnn', 'tytyutyu', '[\"60bV3Sk3t4edUfnySpEYJtQ1txaoXk3RFDg56mT2.jpeg\"]', 'th_1579157365.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-15 22:58:50', '2020-01-17 23:24:00'),
(92, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1000, 36, 14, 10, '10000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"f-marun-l\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"10000\",\"sku\":\"f-marun-k\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"f-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"k\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-17', '2020-01-17', 2, '4500', '<p>mirpur 1&nbsp;mirpur 1mirpur 1mirpur 1mirpur 1</p>', '<p>mirpur 1mirpur 1mirpur 1mirpur 1mirpur 1mirpur 1mirpur 1mirpur 1mirpur 1</p>', '456', 'mm', 'fjsdfh hsdbgh', '[\"lL0oG1vy4vOugLEMgyxlr0jtxlJQgHc8d2DyAhSl.jpeg\"]', 'th_1579157355.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-15 23:01:59', '2020-01-17 23:24:22'),
(93, 1, 'bbut also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 36, 14, 10, '1000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"1000\",\"sku\":\"f-marun-l\",\"qty\":\"10\"},\"green-l\":{\"price\":\"1000\",\"sku\":\"f-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-16', '2020-01-10', 1, '4500', '<p>led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;</p>', '<p>led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;</p>', '5', 'mm', 'fjsdfh hsdbgh', '[\"KDcaZvzby7lX7TaqBTTkSuNK8czQ14OqfjPfvlyL.jpeg\"]', 'th_1579151082.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-15 23:04:42', '2020-01-17 23:23:40'),
(94, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 1000, 36, 14, 10, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"f-marun-l\",\"qty\":\"10\"},\"green-l\":{\"price\":\"10000\",\"sku\":\"f-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-16', '2020-01-24', 2, '4500', '<p>led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;</p>', '<p>led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&nbsp;</p>', '5', 'mm,kk', 'fjsdfh hsdbgh', '[\"hjKWQ8N5iwE0mRu5Xszc9W8SK0ZvNt4c9OGJPfwf.jpeg\"]', 'th_1579157343.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-15 23:06:07', '2020-01-17 23:23:28'),
(95, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 10, 39, 8, 6, '10000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"f-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"f-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-16', '2020-01-31', 1, '97', '<p>e a type specimen book. It has survived not only five centuries, but alse a type specimen book. It has survived not only five centuries, but alse a type specimen book. It has survived not only five centuries, but alse a type specimen book. It has survived not only five centuries, but als</p>', '<p>e a type specimen book. It has survived not only five centuries, but alse a type specimen book. It has survived not only five centuries, but alse a type specimen book. It has survived not only five centuries, but alse a type specimen book. It has survived not only five centuries, but als</p>', '5', 'mm,ddd', 'fjsdfh hsdbgh', '[\"Mj91QITP00R4dmfwFwvJquYRZkW0RnkSchziWkLV.jpeg\"]', 'th_1579157333.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-15 23:54:41', '2020-01-17 22:44:32'),
(96, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 151, 39, 8, 6, '1000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l-dell\":{\"price\":\"9000\",\"sku\":\"batlietreu-marun-l-dell\",\"qty\":\"10\"},\"marun-l-hp\":{\"price\":\"8800\",\"sku\":\"batlietreu-marun-l-hp\",\"qty\":\"10\"},\"marun-m-dell\":{\"price\":\"7600\",\"sku\":\"batlietreu-marun-m-dell\",\"qty\":\"10\"},\"marun-m-hp\":{\"price\":\"4500\",\"sku\":\"batlietreu-marun-m-hp\",\"qty\":\"10\"},\"marun-xx-dell\":{\"price\":\"4300\",\"sku\":\"batlietreu-marun-xx-dell\",\"qty\":\"10\"},\"marun-xx-hp\":{\"price\":\"8700\",\"sku\":\"batlietreu-marun-xx-hp\",\"qty\":\"10\"},\"green-l-dell\":{\"price\":\"5400\",\"sku\":\"batlietreu-green-l-dell\",\"qty\":\"10\"},\"green-l-hp\":{\"price\":\"3500\",\"sku\":\"batlietreu-green-l-hp\",\"qty\":\"10\"},\"green-m-dell\":{\"price\":\"43500\",\"sku\":\"batlietreu-green-m-dell\",\"qty\":\"10\"},\"green-m-hp\":{\"price\":\"4300\",\"sku\":\"batlietreu-green-m-hp\",\"qty\":\"10\"},\"green-xx-dell\":{\"price\":\"3000\",\"sku\":\"batlietreu-green-xx-dell\",\"qty\":\"10\"},\"green-xx-hp\":{\"price\":\"12000\",\"sku\":\"batlietreu-green-xx-hp\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\",\"xx\"]},{\"name\":\"choice_1\",\"title\":\"brand\",\"options\":[\"dell\",\"hp\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-16', '2020-01-18', 1, '4500', '<p>tytyyyy</p>', '<p>tyytytuu</p>', '5', 'mm', 'mmmm', '[\"HhWrDAX74Aw68F3aSJB5IPgpb8XEzo5qTjJ9yrmp.jpeg\"]', 'th_1579157310.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-16 00:12:12', '2020-01-18 03:18:59'),
(97, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 39, 0, 0, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-18', '2020-01-30', 2, '4500', '<p>fdfgfgfg</p>', '<p>gfgfgfg</p>', '5', 'mm', 'mmmm', '[\"M0loawxZ9SsCXrY3qxXOzYWhmfvbthNRlJXb0AoL.jpeg\"]', 'th_1579322297.jpg', 0, 2, NULL, '#$', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-17 22:38:17', '2020-01-17 22:38:17'),
(98, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 10, 39, 8, 6, '1000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-18', '2020-01-18', 2, '4500', '<p>but also the leap into electronic typesetting, remaining essentially unchangedbut also the leap into electronic typesetting, remaining essentially unchanged</p>', '<p>but also the leap into electronic typesetting, remaining essentially unchangedbut also the leap into electronic typesetting, remaining essentially unchanged</p>', '5', 'mmm,mm', 'mmmm', '[\"NnowqtAQWlj4mspPgIzXcOUVlCWPjM4RfZQ8Lxvv.jpeg\",\"I9tnO5dCvHvhTfA4d0lUJgs4vAwRfd0MlAex7P8s.jpeg\",\"NBzrhqp4xykKEHTj7MgDwKMufjYPpnWu2eZHeHVA.jpeg\"]', 'th_1579322376.jpg', 0, 2, NULL, '#$', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-17 22:39:36', '2020-01-18 01:52:29'),
(100, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 100, 36, 14, 10, '1000', '[\"#8000ff\"]', '{\"marun-s\":{\"price\":\"1000\",\"sku\":\"batlietreu-marun-s\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"1000\",\"sku\":\"batlietreu-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"s\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-18', '2020-01-23', 1, '4500', '<p>nly five centuries, but also the leap into <strong>electronic </strong>typesetting, remaining essentially unch</p>', '<p>nly five centuries, but also the leap into <strong>electronic</strong> typesetting, remaining essentially unch</p>', '5', 'mm', 'fjsdfh hsdbgh', '[\"L6bDS5iWEB7a7KjCkCqOoLxSXOzdUyJawwPr3FNO.jpeg\",\"VbrdFpB9MtQ1MgETnW3PRaMqkLCgAKtkSUE5090g.jpeg\"]', 'th_1579335080.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-18 02:11:20', '2020-01-18 02:22:17'),
(101, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1000, 36, 14, 10, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-18', '2020-01-30', 2, '4500', '<p>gghghgfghgfhgfhghghgh</p>', '<div style=\"page-break-after:always\"><span style=\"display:none\">&nbsp;</span></div>\r\n\r\n<p>fghgfhgfh</p>', '5', 'mm', 'mmmm', '[\"CZKuvxMyiA7Y0hTGiE97Haf33cbHjYaKLnBkdf4U.jpeg\"]', 'th_1579337223.jpg', 0, 2, NULL, '#$', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-18 02:47:03', '2020-01-18 02:47:03'),
(102, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 10000, 39, 0, 0, '100000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-18', '2020-01-28', 2, '4500', '<p>nly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unch</p>', '<p>nly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unchnly five centuries, but also the leap into electronic typesetting, remaining essentially unch</p>', '5', 'mmm', 'fjsdfh hsdbgh', '[\"QeK2qa5NCHWNId8JXVPBdmVWehupMs1czLPVBbDr.png\"]', 'th_1579337295.jpg', 0, 2, NULL, '#$', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-18 02:48:15', '2020-01-18 02:48:15'),
(103, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 39, 0, 0, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-19', '2020-01-21', 1, '100', '<p>;lorem ipsum&nbsp;;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum</p>', '<p>;lorem ipsum&nbsp;;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum&nbsp;;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum&nbsp;;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum&nbsp;;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum&nbsp;;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum&nbsp;;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum;lorem ipsum</p>', '5', 'mm', 'fjsdfh hsdbgh', '[\"DLlN3Y0I6gGM1nP2cUCsRAi6KZQwX27AY7J6pLQ2.jpeg\"]', 'th_1579424517.jpg', 0, 2, NULL, '#', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:01:58', '2020-01-19 03:01:58'),
(104, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'fghfgh', 100, 39, 0, 0, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-19', '2020-01-28', 2, '4500', '<p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p>', '<p>mloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p>', '5', 'mmm', 'fjsdfh hsdbgh', '[\"F2BnoAO62SKGu42q5w56Ax8v2YNvmy8kT5vLwHlN.jpeg\"]', 'th_1579424577.jpg', 0, 2, NULL, '#$', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:02:57', '2020-01-19 03:02:57'),
(105, 2, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 151, 39, 0, 0, '1000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-19', '2020-01-29', 2, '4500', '<p>lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;</p>', '<p>lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;lorem&nbsp;</p>', '5', 'mj', 'fjsdfh hsdbgh', '[\"gLrPvX3sujK4pclI59uUfYD3ma3TdbGQdlBPkWBK.jpeg\"]', 'th_1579424634.jpg', 0, 2, NULL, '#$', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:03:54', '2020-01-19 03:03:54'),
(106, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 38, 0, 0, '10000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"90000\",\"sku\":\"-marun-k\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"80000\",\"sku\":\"-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"k\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-23', 2, '1000', '<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>\r\n\r\n<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '5', 'mm', 'fjsdfh hsdbgh', '[\"aQnjhySGXNg4al6dEpUMcl1rWARoRS9CNFX4L1CI.jpeg\"]', 'th_1579424733.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:05:33', '2020-01-19 03:05:33'),
(107, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 5225, 38, 0, 0, '250000', '[\"#40db24\"]', '{\"green-l\":{\"price\":\"250000\",\"sku\":\"-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-21', 1, '4500', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '5', 'mjmjmh', 'mmmm', '[\"hwiujiyFDyiQDu0i2lWLTgODHpLDKogwix4rU75q.jpeg\"]', 'th_1579424779.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:06:19', '2020-01-19 03:06:19'),
(108, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 5225, 38, 0, 0, '250000', '[\"#40db24\"]', '{\"green-l\":{\"price\":\"250000\",\"sku\":\"-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-21', 1, '4500', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '5', 'mjmjmh', 'mmmm', '[\"qglwC5qIUwOHeA6LRRJTxZ2iyBPPv7lkVNROpOTu.jpeg\"]', 'th_1579424779.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:06:19', '2020-01-19 03:06:19'),
(109, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 52, 38, 8, 6, '1000', '[\"#40db24\"]', '{\"green-l\":{\"price\":\"1000\",\"sku\":\"batlietreu-green-l\",\"qty\":\"10\"},\"green-k\":{\"price\":\"1000\",\"sku\":\"batlietreu-green-k\",\"qty\":\"10\"},\"green-m\":{\"price\":\"1000\",\"sku\":\"batlietreu-green-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"k\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-21', 2, '4500', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '6787', 'fgkjdfhgjkfd,mdff', 'mmmm', '[\"q9V6tOsTqrKRNdNHAB4qCncKcskztmsptzKlfeJl.jpeg\"]', 'th_1579424864.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:07:18', '2020-01-19 03:07:45'),
(110, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'uiogtruiouirui', 555, 38, 0, 0, '10000', '[\"#40db24\"]', '{\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"10000\",\"sku\":\"-green-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-24', 2, '4500', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '<p>ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '5', 'mmm', 'fjsdfh hsdbgh', '[\"lEwNHqwghWikcyqIKoALhCTxTOX4Wufjn4y0pZlz.jpeg\"]', 'th_1579424951.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:09:11', '2020-01-19 03:09:11'),
(111, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant0035', 10, 38, 0, 0, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"-marun-m\",\"qty\":\"10\"},\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"10000\",\"sku\":\"-green-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-23', 2, '4500', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mmm', 'fjsdfh hsdbgh', '[\"LGjFU0HuWynVM7iyBWOVcOgT6g0sbPF9GBRcAYDA.jpeg\"]', 'th_1579425091.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:11:31', '2020-01-19 03:11:31'),
(112, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'ghjghj', 150, 40, 0, 0, '10000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"-marun-m\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"10000\",\"sku\":\"-marun-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\",\"k\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-22', 1, '456646', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mmm', 'fjsdfh hsdbgh', '[\"4teC65NL56sQKhO7bDE8zrtgL0GWIEVKvgYJMvwr.jpeg\"]', 'th_1579425157.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:12:37', '2020-01-19 03:12:37'),
(113, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 50, 37, 15, 9, '10000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"-marun-m\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"10000\",\"sku\":\"-marun-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\",\"k\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-22', 2, '4500', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mmmmm,kkkk', 'fjsdfh hsdbgh', '[\"WdJJ5B9l6vl45xaCAzINNbjffHJFr9e1jX2umLEv.jpeg\"]', 'th_1579425219.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:13:39', '2020-01-19 03:13:39'),
(114, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1515, 37, 15, 8, '10000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-22', 2, '456646', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mkmj', 'fjsdfh hsdbgh', '[\"bcYfrBqqCwWeKvJvffBIEmPWmf8o7nXB7HDhz0Cc.jpeg\"]', 'th_1579425270.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:14:30', '2020-01-19 03:14:30'),
(115, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1515, 37, 16, 11, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-20', '2020-01-23', 2, '4500', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mkmk', 'tytyutyu', '[\"fRHHITXacpx8mGNwX69ySCzVIm8mBzkkIWYjxUld.jpeg\"]', 'th_1579425330.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:15:30', '2020-01-19 03:15:30'),
(116, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 15151, 37, 16, 11, '100000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"100000\",\"sku\":\"-marun-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-21', 1, '4500', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mkm', 'fjsdfh hsdbgh', '[\"GWQwQzTmVtWazBF7jVLjNrgzoSHHl5O2jFCwJnNa.jpeg\"]', 'th_1579425379.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:16:19', '2020-01-19 03:16:19'),
(117, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1515, 37, 15, 8, '5000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"5000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"5000\",\"sku\":\"-marun-m\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"5000\",\"sku\":\"-marun-k\",\"qty\":\"10\"},\"green-l\":{\"price\":\"5000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"5000\",\"sku\":\"-green-m\",\"qty\":\"10\"},\"green-k\":{\"price\":\"5000\",\"sku\":\"-green-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\",\"k\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-22', 2, '456646', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mkm', 'tytyutyu', '[\"TCg0WrDY01qJr1cuPjlceLC3JpL13M5YaXuWLF5O.jpeg\"]', 'th_1579425432.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:17:12', '2020-01-19 03:17:12');
INSERT INTO `products` (`id`, `product_type`, `product_name`, `product_sku`, `product_qty`, `cate_id`, `subcate_id`, `resubcate_id`, `product_price`, `colors`, `variations`, `choice_options`, `allow_product_condition`, `product_condition`, `brand`, `allow_product_measurement`, `product_measurement`, `allow_flash_deal`, `flash_deal_start_date`, `flash_deal_end_date`, `flash_deal_type`, `flash_deal_price`, `product_description`, `buy_and_return_policy`, `shipping_time`, `meta_tag`, `meta_description`, `photos`, `thumbnail_img`, `today_deal`, `select_upload_type`, `upload_file`, `upload_link`, `affiliate_link`, `license_type`, `license_key`, `license_quantity`, `license_duration`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(118, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 1000, 37, 15, 8, '6000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"6000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"6000\",\"sku\":\"-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-24', 2, '4500', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '<p>n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;n an unknown printer took a galley of type and scrambled it to make&nbsp;</p>', '5', 'mfmm,dfff', 'fjsdfh hsdbgh', '[\"ybMhs33vlbBw6pHwZV2AosqohKpAKHNErWkMVRJO.jpeg\"]', 'th_1579425482.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:18:03', '2020-01-19 03:18:03'),
(119, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 42, 0, 0, '1000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"1000\",\"sku\":\"-marun-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-23', 2, '4500', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '6787', 'mmm', 'tytyutyu', '[\"yrT5hHqum8DkDBIYZe1MhEndg0VAzubOhCx0O4Zq.jpeg\"]', 'th_1579425727.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:22:07', '2020-01-19 03:22:07'),
(120, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant0035', 50, 42, 0, 0, '1000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-new\":{\"price\":\"1000\",\"sku\":\"-marun-new\",\"qty\":\"10\"},\"green-new\":{\"price\":\"1000\",\"sku\":\"-green-new\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"new\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-22', 1, '4500', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '5', 'mmmmm', 'mmmm', '[\"xE33hAmfEoQ2fD0V6UWQhUB11EJeIa06ZVXQgZHk.jpeg\"]', 'th_1579425897.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:24:57', '2020-01-19 03:24:57'),
(121, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003e4', 50, 42, 0, 0, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-k\":{\"price\":\"10000\",\"sku\":\"-marun-k\",\"qty\":\"10\"},\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-k\":{\"price\":\"10000\",\"sku\":\"-green-k\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"k\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-23', 2, '4500', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '5', 'mmmm', 'fjsdfh hsdbgh', '[\"RzX4b0eyGIA16bzO3bgw941ixxN6VCwpurU6Rlg5.jpeg\"]', 'th_1579425987.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:26:28', '2020-01-19 03:26:28'),
(122, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 25555, 41, 0, 0, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-19', '2020-01-22', 1, '4500', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '5', 'mmm', 'mmmm', '[\"ek0OxujjHflFI2xZ2xVvWDGcc6nbwE62WNLqNlcu.jpeg\"]', 'th_1579426033.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:27:13', '2020-01-19 03:27:13'),
(123, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 100, 41, 0, 0, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"-marun-m\",\"qty\":\"10\"},\"green-l\":{\"price\":\"10000\",\"sku\":\"-green-l\",\"qty\":\"10\"},\"green-m\":{\"price\":\"10000\",\"sku\":\"-green-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 2, 14, 1, 4, 1, '2020-01-19', '2020-01-24', 2, '456646', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '5', 'mmm', 'tytyutyu', '[\"dETIUNwiA7ktgP5WEVU2ld07hUNydWNlboaRTtsw.jpeg\"]', 'th_1579426088.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:28:08', '2020-01-19 03:28:08'),
(124, 1, 'but also the leap into electronic typesetting, remaining essentially unchanged', 'pant003', 50, 41, 0, 0, '10000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"marun-m\":{\"price\":\"10000\",\"sku\":\"-marun-m\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\",\"m\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-19', '2020-01-22', 2, '456646', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '<p>Babies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; ToysBabies &amp; Toys</p>', '5', 'mmm', 'fjsdfh hsdbgh', '[\"FSRzdMfx9YalGmIiBfyyC7dNiIuZizfzjH44q6hx.jpeg\"]', 'th_1579426137.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-01-19 03:28:57', '2020-01-19 03:28:57');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_licenses`
--

INSERT INTO `product_licenses` (`id`, `product_id`, `license_key`, `license_quantity`, `license_duration`, `created_at`, `updated_at`) VALUES
(1, 29, 'foysal', NULL, 10, '2019-12-30 06:04:41', NULL),
(2, 29, 'aasif', NULL, 20, '2019-12-30 06:04:41', NULL),
(3, 29, 'new', NULL, 15, '2019-12-30 06:04:41', NULL),
(4, 30, 'shisir', 60, 10, '2019-12-30 06:06:48', NULL),
(5, 30, 'abir', 50, 50, '2019-12-30 06:06:48', NULL),
(7, 60, 'new', 13, 13, '2020-01-08 03:19:30', NULL),
(8, 61, 'ro', 107, 12, '2020-01-08 23:37:06', '2020-01-08 23:37:06'),
(9, 61, 'llllaaa', 12, 23, '2020-01-08 03:22:50', NULL),
(42, 61, 'asif', 8989, 666, '2020-01-09 00:13:30', '2020-01-09 00:13:30'),
(43, 61, 'asif', 78, 96, '2020-01-09 00:08:02', '2020-01-09 00:08:02'),
(151, 65, 'new', 1010, 1212, '2020-01-09 02:13:49', NULL),
(152, 65, 'asif fo', 585, 464, '2020-01-09 02:13:49', NULL),
(166, 66, 'new', 101010, 101010, '2020-01-10 22:23:34', NULL),
(167, 66, 'asif fo', 10, 1569, '2020-01-10 22:23:34', NULL),
(171, 67, 'new', 10, 15, '2020-01-11 05:44:54', NULL),
(172, 67, 'asif fo', 152, 10, '2020-01-11 05:44:54', NULL),
(173, 67, 'asif follll', 10, 10, '2020-01-11 05:44:54', NULL),
(174, 67, 'jjjj', 15, 25, '2020-01-11 05:44:54', NULL);

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
  `subcate_id` int(11) NOT NULL,
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
(6, 'asif', 'new-hi', 'new', 32, 11, 1, 'category__1577518143.jpg', 0, '2019-12-28 01:29:03', '2019-12-28 01:29:03'),
(7, 'asif nnnn', 'new-hi', 'newm', 32, 12, 1, 'category__1577518159.png', 0, '2019-12-28 01:29:19', '2019-12-28 01:29:19'),
(8, 'Watch', 'watch', 'watch', 37, 15, 1, '__1578994919.jpg', 0, '2020-01-14 03:41:59', '2020-01-14 03:41:59'),
(9, 'pant', 'pant', 'pant', 37, 15, 1, '__1578994950.png', 0, '2020-01-14 03:42:30', '2020-01-14 03:42:30'),
(10, 'Mobile', 'mobile', 'jjj', 36, 14, 1, '__1578995539.jpg', 0, '2020-01-14 03:52:19', '2020-01-14 03:52:19'),
(11, 'asif', 'asif', 'mm', 37, 16, 1, '__1579002988.png', 0, '2020-01-14 05:56:28', '2020-01-14 05:56:28');

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
(1, 'DurbarIT | All Kind Solution Of IT', 'DurbarIT', 'DurbarIT | All Kind Solution Of IT', 'software company , webdesign , web development', '<meta name=\"google-site-verification\" content=\"dasdasd\" />', '<meta name=\"Bing-site-verification\" content=\"asdasd\" />', 'DurbarIT | All Kind Solution Of IT', 'DurbarIT | All Kind Solution Of IT DurbarIT | All Kind Solution Of IT DurbarIT | All Kind Solution Of IT DurbarIT | All Kind Solution Of ITDurbarIT | All Kind Solution Of IT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_user_id` int(11) NOT NULL,
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

INSERT INTO `shipping_addresses` (`id`, `shipping_user_id`, `shipping_address`, `shipping_post_office`, `shipping_postcode`, `shipping_country_id`, `shipping_division_id`, `shipping_district_id`, `shipping_upazila_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 12, '0', 'sdafdsafdsa', 'dsfafdsf', '18', '6', '41', '319', '42984', '2020-01-26 04:09:41', NULL),
(2, 12, '0', 'fdsafdsaf', 'fdsafdsaff', '18', '6', '41', '319', '42984', '2020-01-26 04:12:14', NULL),
(3, 12, '0', 'gdfgfdg', 'gfdgfd', '18', '6', '41', '319', '76738', '2020-01-26 04:15:36', NULL),
(4, 12, '0', 'dsafdsafdsaf', 'sdafdsf', '18', '6', '41', '319', '11074', '2020-01-26 04:24:47', NULL),
(5, 12, '0', 'dsafdsf', 'fdsafdsaf', '18', '3', '27', '214', '63772', '2020-01-26 04:25:52', NULL),
(6, 12, 'dsfdsf', 'dsafdsf', 'fsdafdsaf', '18', '6', '41', '319', '77933', '2020-01-26 22:33:16', NULL),
(7, 12, 'dsfdsf', 'dsafdsf', 'fsdafdsaf', '18', '6', '41', '319', '77933', '2020-01-26 22:34:45', NULL),
(8, 12, 'tretre', 'trewt', 'retret', '18', '2', '13', '117', '12685', '2020-02-01 23:58:58', NULL),
(9, 12, 'tretre', 'trewt', 'retret', '18', '2', '13', '117', '12685', '2020-02-02 00:00:20', NULL);

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
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_banners`
--

INSERT INTO `site_banners` (`id`, `section`, `link`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(9, 1, '#', 'th_1580118045.png', 1, 0, '2020-01-27 03:40:45', '2020-01-27 03:40:45'),
(10, 1, '#', 'th_1580118067.png', 1, 0, '2020-01-27 03:41:07', '2020-01-27 03:41:07'),
(11, 2, '#', 'th_1580118079.png', 1, 0, '2020-01-27 03:41:19', '2020-01-27 03:41:19'),
(12, 2, '#', 'th_1580118092.png', 1, 0, '2020-01-27 03:41:33', '2020-01-27 03:41:33'),
(13, 3, '#', 'th_1580118110.png', 1, 0, '2020-01-27 03:41:50', '2020-01-27 03:41:50'),
(14, 3, '#', 'th_1580118132.png', 1, 0, '2020-01-27 03:42:12', '2020-01-27 03:42:12'),
(15, 4, '#', 'th_1580118171.png', 1, 0, '2020-01-27 03:42:51', '2020-01-27 03:42:51'),
(16, 4, '#', 'th_1580118182.png', 1, 0, '2020-01-27 03:43:02', '2020-01-27 03:43:02'),
(17, 5, '#', 'th_1580118197.png', 1, 0, '2020-01-27 03:43:17', '2020-01-27 03:43:17'),
(18, 5, '#', 'th_1580118207.png', 1, 0, '2020-01-27 03:43:27', '2020-01-27 03:43:27'),
(19, 1, '#', 'th_1580118944.png', 1, 0, '2020-01-27 03:55:45', '2020-01-27 03:55:45'),
(20, 3, '#', 'th_1580119921.png', 1, 0, '2020-01-27 04:12:01', '2020-01-27 04:12:01'),
(21, 3, '#', 'th_1580121842.png', 1, 0, '2020-01-27 04:44:02', '2020-01-27 04:44:02'),
(22, 2, '#', 'th_1580122864.png', 1, 0, '2020-01-27 05:01:04', '2020-01-27 05:01:04'),
(23, 2, '#', 'th_1580122880.png', 1, 0, '2020-01-27 05:01:20', '2020-01-27 05:01:20');

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
(14, 'Mobile & Teblets', 'mobile-teblets', 36, 'subactegory_1578994578.png', '__1578994578.png', 'Mobile', 1, 0, '2020-01-14 03:36:18', '2020-01-14 03:36:18'),
(15, 'Men', 'men', 37, 'subactegory_1578994660.jpg', '__1578994660.png', 'new', 1, 0, '2020-01-14 03:37:40', '2020-01-14 03:37:40'),
(16, 'Women', 'women', 37, 'subactegory_1578994847.jpg', '__1578994847.jpg', 'women', 1, 0, '2020-01-14 03:40:47', '2020-01-14 03:40:47'),
(17, 'new', 'new', 37, 'subactegory_1579001005.jpg', '__1579001005.jpg', 'jj', 1, 0, '2020-01-14 05:23:25', '2020-01-14 05:23:26'),
(18, 'Haha', 'haha', 37, 'subactegory_1579001046.png', '__1579001046.png', 'new', 1, 0, '2020-01-14 05:24:06', '2020-01-14 05:24:06');

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
(1, 'frontend.include.css.home1', 'frontend.include.js.home1', 'frontend.include.header.home1', 'frontend.include.footer.footer1', 'frontend.home.home1', 1, '2020-01-13 18:00:00', '2020-01-15 04:47:18'),
(2, 'frontend.include.css.home2', 'frontend.include.js.home2', 'frontend.include.header.home2', 'frontend.include.footer.footer2', 'frontend.home.home2', 0, NULL, '2020-01-15 04:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`, `url`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 'debidwar.comilla.gov.bd'),
(2, 1, 'Barura', 'বরুড়া', 'barura.comilla.gov.bd'),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 'brahmanpara.comilla.gov.bd'),
(4, 1, 'Chandina', 'চান্দিনা', 'chandina.comilla.gov.bd'),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 'chauddagram.comilla.gov.bd'),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 'daudkandi.comilla.gov.bd'),
(7, 1, 'Homna', 'হোমনা', 'homna.comilla.gov.bd'),
(8, 1, 'Laksam', 'লাকসাম', 'laksam.comilla.gov.bd'),
(9, 1, 'Muradnagar', 'মুরাদনগর', 'muradnagar.comilla.gov.bd'),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 'nangalkot.comilla.gov.bd'),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 'comillasadar.comilla.gov.bd'),
(12, 1, 'Meghna', 'মেঘনা', 'meghna.comilla.gov.bd'),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 'monohargonj.comilla.gov.bd'),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 'sadarsouth.comilla.gov.bd'),
(15, 1, 'Titas', 'তিতাস', 'titas.comilla.gov.bd'),
(16, 1, 'Burichang', 'বুড়িচং', 'burichang.comilla.gov.bd'),
(17, 1, 'Lalmai', 'লালমাই', 'lalmai.comilla.gov.bd'),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 'chhagalnaiya.feni.gov.bd'),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 'sadar.feni.gov.bd'),
(20, 2, 'Sonagazi', 'সোনাগাজী', 'sonagazi.feni.gov.bd'),
(21, 2, 'Fulgazi', 'ফুলগাজী', 'fulgazi.feni.gov.bd'),
(22, 2, 'Parshuram', 'পরশুরাম', 'parshuram.feni.gov.bd'),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 'daganbhuiyan.feni.gov.bd'),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 'sadar.brahmanbaria.gov.bd'),
(25, 3, 'Kasba', 'কসবা', 'kasba.brahmanbaria.gov.bd'),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 'nasirnagar.brahmanbaria.gov.bd'),
(27, 3, 'Sarail', 'সরাইল', 'sarail.brahmanbaria.gov.bd'),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 'ashuganj.brahmanbaria.gov.bd'),
(29, 3, 'Akhaura', 'আখাউড়া', 'akhaura.brahmanbaria.gov.bd'),
(30, 3, 'Nabinagar', 'নবীনগর', 'nabinagar.brahmanbaria.gov.bd'),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 'bancharampur.brahmanbaria.gov.bd'),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 'bijoynagar.brahmanbaria.gov.bd    '),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 'sadar.rangamati.gov.bd'),
(34, 4, 'Kaptai', 'কাপ্তাই', 'kaptai.rangamati.gov.bd'),
(35, 4, 'Kawkhali', 'কাউখালী', 'kawkhali.rangamati.gov.bd'),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 'baghaichari.rangamati.gov.bd'),
(37, 4, 'Barkal', 'বরকল', 'barkal.rangamati.gov.bd'),
(38, 4, 'Langadu', 'লংগদু', 'langadu.rangamati.gov.bd'),
(39, 4, 'Rajasthali', 'রাজস্থলী', 'rajasthali.rangamati.gov.bd'),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 'belaichari.rangamati.gov.bd'),
(41, 4, 'Juraichari', 'জুরাছড়ি', 'juraichari.rangamati.gov.bd'),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 'naniarchar.rangamati.gov.bd'),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 'sadar.noakhali.gov.bd'),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.noakhali.gov.bd'),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 'begumganj.noakhali.gov.bd'),
(46, 5, 'Hatia', 'হাতিয়া', 'hatia.noakhali.gov.bd'),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 'subarnachar.noakhali.gov.bd'),
(48, 5, 'Kabirhat', 'কবিরহাট', 'kabirhat.noakhali.gov.bd'),
(49, 5, 'Senbug', 'সেনবাগ', 'senbug.noakhali.gov.bd'),
(50, 5, 'Chatkhil', 'চাটখিল', 'chatkhil.noakhali.gov.bd'),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 'sonaimori.noakhali.gov.bd'),
(52, 6, 'Haimchar', 'হাইমচর', 'haimchar.chandpur.gov.bd'),
(53, 6, 'Kachua', 'কচুয়া', 'kachua.chandpur.gov.bd'),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 'shahrasti.chandpur.gov.bd'),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 'sadar.chandpur.gov.bd'),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 'matlabsouth.chandpur.gov.bd'),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 'hajiganj.chandpur.gov.bd'),
(58, 6, 'Matlab North', 'মতলব উত্তর', 'matlabnorth.chandpur.gov.bd'),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 'faridgonj.chandpur.gov.bd'),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 'sadar.lakshmipur.gov.bd'),
(61, 7, 'Kamalnagar', 'কমলনগর', 'kamalnagar.lakshmipur.gov.bd'),
(62, 7, 'Raipur', 'রায়পুর', 'raipur.lakshmipur.gov.bd'),
(63, 7, 'Ramgati', 'রামগতি', 'ramgati.lakshmipur.gov.bd'),
(64, 7, 'Ramganj', 'রামগঞ্জ', 'ramganj.lakshmipur.gov.bd'),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 'rangunia.chittagong.gov.bd'),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 'sitakunda.chittagong.gov.bd'),
(67, 8, 'Mirsharai', 'মীরসরাই', 'mirsharai.chittagong.gov.bd'),
(68, 8, 'Patiya', 'পটিয়া', 'patiya.chittagong.gov.bd'),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 'sandwip.chittagong.gov.bd'),
(70, 8, 'Banshkhali', 'বাঁশখালী', 'banshkhali.chittagong.gov.bd'),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 'boalkhali.chittagong.gov.bd'),
(72, 8, 'Anwara', 'আনোয়ারা', 'anwara.chittagong.gov.bd'),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 'chandanaish.chittagong.gov.bd'),
(74, 8, 'Satkania', 'সাতকানিয়া', 'satkania.chittagong.gov.bd'),
(75, 8, 'Lohagara', 'লোহাগাড়া', 'lohagara.chittagong.gov.bd'),
(76, 8, 'Hathazari', 'হাটহাজারী', 'hathazari.chittagong.gov.bd'),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 'fatikchhari.chittagong.gov.bd'),
(78, 8, 'Raozan', 'রাউজান', 'raozan.chittagong.gov.bd'),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 'karnafuli.chittagong.gov.bd'),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 'sadar.coxsbazar.gov.bd'),
(81, 9, 'Chakaria', 'চকরিয়া', 'chakaria.coxsbazar.gov.bd'),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 'kutubdia.coxsbazar.gov.bd'),
(83, 9, 'Ukhiya', 'উখিয়া', 'ukhiya.coxsbazar.gov.bd'),
(84, 9, 'Moheshkhali', 'মহেশখালী', 'moheshkhali.coxsbazar.gov.bd'),
(85, 9, 'Pekua', 'পেকুয়া', 'pekua.coxsbazar.gov.bd'),
(86, 9, 'Ramu', 'রামু', 'ramu.coxsbazar.gov.bd'),
(87, 9, 'Teknaf', 'টেকনাফ', 'teknaf.coxsbazar.gov.bd'),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 'sadar.khagrachhari.gov.bd'),
(89, 10, 'Dighinala', 'দিঘীনালা', 'dighinala.khagrachhari.gov.bd'),
(90, 10, 'Panchari', 'পানছড়ি', 'panchari.khagrachhari.gov.bd'),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 'laxmichhari.khagrachhari.gov.bd'),
(92, 10, 'Mohalchari', 'মহালছড়ি', 'mohalchari.khagrachhari.gov.bd'),
(93, 10, 'Manikchari', 'মানিকছড়ি', 'manikchari.khagrachhari.gov.bd'),
(94, 10, 'Ramgarh', 'রামগড়', 'ramgarh.khagrachhari.gov.bd'),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 'matiranga.khagrachhari.gov.bd'),
(96, 10, 'Guimara', 'গুইমারা', 'guimara.khagrachhari.gov.bd'),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 'sadar.bandarban.gov.bd'),
(98, 11, 'Alikadam', 'আলীকদম', 'alikadam.bandarban.gov.bd'),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 'naikhongchhari.bandarban.gov.bd'),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 'rowangchhari.bandarban.gov.bd'),
(101, 11, 'Lama', 'লামা', 'lama.bandarban.gov.bd'),
(102, 11, 'Ruma', 'রুমা', 'ruma.bandarban.gov.bd'),
(103, 11, 'Thanchi', 'থানচি', 'thanchi.bandarban.gov.bd'),
(104, 12, 'Belkuchi', 'বেলকুচি', 'belkuchi.sirajganj.gov.bd'),
(105, 12, 'Chauhali', 'চৌহালি', 'chauhali.sirajganj.gov.bd'),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 'kamarkhand.sirajganj.gov.bd'),
(107, 12, 'Kazipur', 'কাজীপুর', 'kazipur.sirajganj.gov.bd'),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 'raigonj.sirajganj.gov.bd'),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 'shahjadpur.sirajganj.gov.bd'),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 'sirajganjsadar.sirajganj.gov.bd'),
(111, 12, 'Tarash', 'তাড়াশ', 'tarash.sirajganj.gov.bd'),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 'ullapara.sirajganj.gov.bd'),
(113, 13, 'Sujanagar', 'সুজানগর', 'sujanagar.pabna.gov.bd'),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 'ishurdi.pabna.gov.bd'),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 'bhangura.pabna.gov.bd'),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 'pabnasadar.pabna.gov.bd'),
(117, 13, 'Bera', 'বেড়া', 'bera.pabna.gov.bd'),
(118, 13, 'Atghoria', 'আটঘরিয়া', 'atghoria.pabna.gov.bd'),
(119, 13, 'Chatmohar', 'চাটমোহর', 'chatmohar.pabna.gov.bd'),
(120, 13, 'Santhia', 'সাঁথিয়া', 'santhia.pabna.gov.bd'),
(121, 13, 'Faridpur', 'ফরিদপুর', 'faridpur.pabna.gov.bd'),
(122, 14, 'Kahaloo', 'কাহালু', 'kahaloo.bogra.gov.bd'),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 'sadar.bogra.gov.bd'),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 'shariakandi.bogra.gov.bd'),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 'shajahanpur.bogra.gov.bd'),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 'dupchanchia.bogra.gov.bd'),
(127, 14, 'Adamdighi', 'আদমদিঘি', 'adamdighi.bogra.gov.bd'),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 'nondigram.bogra.gov.bd'),
(129, 14, 'Sonatala', 'সোনাতলা', 'sonatala.bogra.gov.bd'),
(130, 14, 'Dhunot', 'ধুনট', 'dhunot.bogra.gov.bd'),
(131, 14, 'Gabtali', 'গাবতলী', 'gabtali.bogra.gov.bd'),
(132, 14, 'Sherpur', 'শেরপুর', 'sherpur.bogra.gov.bd'),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 'shibganj.bogra.gov.bd'),
(134, 15, 'Paba', 'পবা', 'paba.rajshahi.gov.bd'),
(135, 15, 'Durgapur', 'দুর্গাপুর', 'durgapur.rajshahi.gov.bd'),
(136, 15, 'Mohonpur', 'মোহনপুর', 'mohonpur.rajshahi.gov.bd'),
(137, 15, 'Charghat', 'চারঘাট', 'charghat.rajshahi.gov.bd'),
(138, 15, 'Puthia', 'পুঠিয়া', 'puthia.rajshahi.gov.bd'),
(139, 15, 'Bagha', 'বাঘা', 'bagha.rajshahi.gov.bd'),
(140, 15, 'Godagari', 'গোদাগাড়ী', 'godagari.rajshahi.gov.bd'),
(141, 15, 'Tanore', 'তানোর', 'tanore.rajshahi.gov.bd'),
(142, 15, 'Bagmara', 'বাগমারা', 'bagmara.rajshahi.gov.bd'),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 'natoresadar.natore.gov.bd'),
(144, 16, 'Singra', 'সিংড়া', 'singra.natore.gov.bd'),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 'baraigram.natore.gov.bd'),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 'bagatipara.natore.gov.bd'),
(147, 16, 'Lalpur', 'লালপুর', 'lalpur.natore.gov.bd'),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 'gurudaspur.natore.gov.bd'),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 'naldanga.natore.gov.bd'),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 'akkelpur.joypurhat.gov.bd'),
(151, 17, 'Kalai', 'কালাই', 'kalai.joypurhat.gov.bd'),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 'khetlal.joypurhat.gov.bd'),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 'panchbibi.joypurhat.gov.bd'),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 'joypurhatsadar.joypurhat.gov.bd'),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 'chapainawabganjsadar.chapainawabganj.gov.bd'),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 'gomostapur.chapainawabganj.gov.bd'),
(157, 18, 'Nachol', 'নাচোল', 'nachol.chapainawabganj.gov.bd'),
(158, 18, 'Bholahat', 'ভোলাহাট', 'bholahat.chapainawabganj.gov.bd'),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 'shibganj.chapainawabganj.gov.bd'),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 'mohadevpur.naogaon.gov.bd'),
(161, 19, 'Badalgachi', 'বদলগাছী', 'badalgachi.naogaon.gov.bd'),
(162, 19, 'Patnitala', 'পত্নিতলা', 'patnitala.naogaon.gov.bd'),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 'dhamoirhat.naogaon.gov.bd'),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 'niamatpur.naogaon.gov.bd'),
(165, 19, 'Manda', 'মান্দা', 'manda.naogaon.gov.bd'),
(166, 19, 'Atrai', 'আত্রাই', 'atrai.naogaon.gov.bd'),
(167, 19, 'Raninagar', 'রাণীনগর', 'raninagar.naogaon.gov.bd'),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 'naogaonsadar.naogaon.gov.bd'),
(169, 19, 'Porsha', 'পোরশা', 'porsha.naogaon.gov.bd'),
(170, 19, 'Sapahar', 'সাপাহার', 'sapahar.naogaon.gov.bd'),
(171, 20, 'Manirampur', 'মণিরামপুর', 'manirampur.jessore.gov.bd'),
(172, 20, 'Abhaynagar', 'অভয়নগর', 'abhaynagar.jessore.gov.bd'),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 'bagherpara.jessore.gov.bd'),
(174, 20, 'Chougachha', 'চৌগাছা', 'chougachha.jessore.gov.bd'),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 'jhikargacha.jessore.gov.bd'),
(176, 20, 'Keshabpur', 'কেশবপুর', 'keshabpur.jessore.gov.bd'),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 'sadar.jessore.gov.bd'),
(178, 20, 'Sharsha', 'শার্শা', 'sharsha.jessore.gov.bd'),
(179, 21, 'Assasuni', 'আশাশুনি', 'assasuni.satkhira.gov.bd'),
(180, 21, 'Debhata', 'দেবহাটা', 'debhata.satkhira.gov.bd'),
(181, 21, 'Kalaroa', 'কলারোয়া', 'kalaroa.satkhira.gov.bd'),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 'satkhirasadar.satkhira.gov.bd'),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 'shyamnagar.satkhira.gov.bd'),
(184, 21, 'Tala', 'তালা', 'tala.satkhira.gov.bd'),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 'kaliganj.satkhira.gov.bd'),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 'mujibnagar.meherpur.gov.bd'),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 'meherpursadar.meherpur.gov.bd'),
(188, 22, 'Gangni', 'গাংনী', 'gangni.meherpur.gov.bd'),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 'narailsadar.narail.gov.bd'),
(190, 23, 'Lohagara', 'লোহাগড়া', 'lohagara.narail.gov.bd'),
(191, 23, 'Kalia', 'কালিয়া', 'kalia.narail.gov.bd'),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 'chuadangasadar.chuadanga.gov.bd'),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 'alamdanga.chuadanga.gov.bd'),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 'damurhuda.chuadanga.gov.bd'),
(195, 24, 'Jibannagar', 'জীবননগর', 'jibannagar.chuadanga.gov.bd'),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 'kushtiasadar.kushtia.gov.bd'),
(197, 25, 'Kumarkhali', 'কুমারখালী', 'kumarkhali.kushtia.gov.bd'),
(198, 25, 'Khoksa', 'খোকসা', 'khoksa.kushtia.gov.bd'),
(199, 25, 'Mirpur', 'মিরপুর', 'mirpurkushtia.kushtia.gov.bd'),
(200, 25, 'Daulatpur', 'দৌলতপুর', 'daulatpur.kushtia.gov.bd'),
(201, 25, 'Bheramara', 'ভেড়ামারা', 'bheramara.kushtia.gov.bd'),
(202, 26, 'Shalikha', 'শালিখা', 'shalikha.magura.gov.bd'),
(203, 26, 'Sreepur', 'শ্রীপুর', 'sreepur.magura.gov.bd'),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 'magurasadar.magura.gov.bd'),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 'mohammadpur.magura.gov.bd'),
(206, 27, 'Paikgasa', 'পাইকগাছা', 'paikgasa.khulna.gov.bd'),
(207, 27, 'Fultola', 'ফুলতলা', 'fultola.khulna.gov.bd'),
(208, 27, 'Digholia', 'দিঘলিয়া', 'digholia.khulna.gov.bd'),
(209, 27, 'Rupsha', 'রূপসা', 'rupsha.khulna.gov.bd'),
(210, 27, 'Terokhada', 'তেরখাদা', 'terokhada.khulna.gov.bd'),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 'dumuria.khulna.gov.bd'),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 'botiaghata.khulna.gov.bd'),
(213, 27, 'Dakop', 'দাকোপ', 'dakop.khulna.gov.bd'),
(214, 27, 'Koyra', 'কয়রা', 'koyra.khulna.gov.bd'),
(215, 28, 'Fakirhat', 'ফকিরহাট', 'fakirhat.bagerhat.gov.bd'),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 'sadar.bagerhat.gov.bd'),
(217, 28, 'Mollahat', 'মোল্লাহাট', 'mollahat.bagerhat.gov.bd'),
(218, 28, 'Sarankhola', 'শরণখোলা', 'sarankhola.bagerhat.gov.bd'),
(219, 28, 'Rampal', 'রামপাল', 'rampal.bagerhat.gov.bd'),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 'morrelganj.bagerhat.gov.bd'),
(221, 28, 'Kachua', 'কচুয়া', 'kachua.bagerhat.gov.bd'),
(222, 28, 'Mongla', 'মোংলা', 'mongla.bagerhat.gov.bd'),
(223, 28, 'Chitalmari', 'চিতলমারী', 'chitalmari.bagerhat.gov.bd'),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 'sadar.jhenaidah.gov.bd'),
(225, 29, 'Shailkupa', 'শৈলকুপা', 'shailkupa.jhenaidah.gov.bd'),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 'harinakundu.jhenaidah.gov.bd'),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.jhenaidah.gov.bd'),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 'kotchandpur.jhenaidah.gov.bd'),
(229, 29, 'Moheshpur', 'মহেশপুর', 'moheshpur.jhenaidah.gov.bd'),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 'sadar.jhalakathi.gov.bd'),
(231, 30, 'Kathalia', 'কাঠালিয়া', 'kathalia.jhalakathi.gov.bd'),
(232, 30, 'Nalchity', 'নলছিটি', 'nalchity.jhalakathi.gov.bd'),
(233, 30, 'Rajapur', 'রাজাপুর', 'rajapur.jhalakathi.gov.bd'),
(234, 31, 'Bauphal', 'বাউফল', 'bauphal.patuakhali.gov.bd'),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 'sadar.patuakhali.gov.bd'),
(236, 31, 'Dumki', 'দুমকি', 'dumki.patuakhali.gov.bd'),
(237, 31, 'Dashmina', 'দশমিনা', 'dashmina.patuakhali.gov.bd'),
(238, 31, 'Kalapara', 'কলাপাড়া', 'kalapara.patuakhali.gov.bd'),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 'mirzaganj.patuakhali.gov.bd'),
(240, 31, 'Galachipa', 'গলাচিপা', 'galachipa.patuakhali.gov.bd'),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 'rangabali.patuakhali.gov.bd'),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 'sadar.pirojpur.gov.bd'),
(243, 32, 'Nazirpur', 'নাজিরপুর', 'nazirpur.pirojpur.gov.bd'),
(244, 32, 'Kawkhali', 'কাউখালী', 'kawkhali.pirojpur.gov.bd'),
(245, 32, 'Zianagar', 'জিয়ানগর', 'zianagar.pirojpur.gov.bd'),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 'bhandaria.pirojpur.gov.bd'),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 'mathbaria.pirojpur.gov.bd'),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 'nesarabad.pirojpur.gov.bd'),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 'barisalsadar.barisal.gov.bd'),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 'bakerganj.barisal.gov.bd'),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 'babuganj.barisal.gov.bd'),
(252, 33, 'Wazirpur', 'উজিরপুর', 'wazirpur.barisal.gov.bd'),
(253, 33, 'Banaripara', 'বানারীপাড়া', 'banaripara.barisal.gov.bd'),
(254, 33, 'Gournadi', 'গৌরনদী', 'gournadi.barisal.gov.bd'),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 'agailjhara.barisal.gov.bd'),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 'mehendiganj.barisal.gov.bd'),
(257, 33, 'Muladi', 'মুলাদী', 'muladi.barisal.gov.bd'),
(258, 33, 'Hizla', 'হিজলা', 'hizla.barisal.gov.bd'),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 'sadar.bhola.gov.bd'),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 'borhanuddin.bhola.gov.bd'),
(261, 34, 'Charfesson', 'চরফ্যাশন', 'charfesson.bhola.gov.bd'),
(262, 34, 'Doulatkhan', 'দৌলতখান', 'doulatkhan.bhola.gov.bd'),
(263, 34, 'Monpura', 'মনপুরা', 'monpura.bhola.gov.bd'),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 'tazumuddin.bhola.gov.bd'),
(265, 34, 'Lalmohan', 'লালমোহন', 'lalmohan.bhola.gov.bd'),
(266, 35, 'Amtali', 'আমতলী', 'amtali.barguna.gov.bd'),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 'sadar.barguna.gov.bd'),
(268, 35, 'Betagi', 'বেতাগী', 'betagi.barguna.gov.bd'),
(269, 35, 'Bamna', 'বামনা', 'bamna.barguna.gov.bd'),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 'pathorghata.barguna.gov.bd'),
(271, 35, 'Taltali', 'তালতলি', 'taltali.barguna.gov.bd'),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 'balaganj.sylhet.gov.bd'),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 'beanibazar.sylhet.gov.bd'),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 'bishwanath.sylhet.gov.bd'),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.sylhet.gov.bd'),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 'fenchuganj.sylhet.gov.bd'),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 'golapganj.sylhet.gov.bd'),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 'gowainghat.sylhet.gov.bd'),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 'jaintiapur.sylhet.gov.bd'),
(280, 36, 'Kanaighat', 'কানাইঘাট', 'kanaighat.sylhet.gov.bd'),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 'sylhetsadar.sylhet.gov.bd'),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 'zakiganj.sylhet.gov.bd'),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 'dakshinsurma.sylhet.gov.bd'),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 'osmaninagar.sylhet.gov.bd'),
(285, 37, 'Barlekha', 'বড়লেখা', 'barlekha.moulvibazar.gov.bd'),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 'kamolganj.moulvibazar.gov.bd'),
(287, 37, 'Kulaura', 'কুলাউড়া', 'kulaura.moulvibazar.gov.bd'),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 'moulvibazarsadar.moulvibazar.gov.bd'),
(289, 37, 'Rajnagar', 'রাজনগর', 'rajnagar.moulvibazar.gov.bd'),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 'sreemangal.moulvibazar.gov.bd'),
(291, 37, 'Juri', 'জুড়ী', 'juri.moulvibazar.gov.bd'),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 'nabiganj.habiganj.gov.bd'),
(293, 38, 'Bahubal', 'বাহুবল', 'bahubal.habiganj.gov.bd'),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 'ajmiriganj.habiganj.gov.bd'),
(295, 38, 'Baniachong', 'বানিয়াচং', 'baniachong.habiganj.gov.bd'),
(296, 38, 'Lakhai', 'লাখাই', 'lakhai.habiganj.gov.bd'),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 'chunarughat.habiganj.gov.bd'),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 'habiganjsadar.habiganj.gov.bd'),
(299, 38, 'Madhabpur', 'মাধবপুর', 'madhabpur.habiganj.gov.bd'),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 'sadar.sunamganj.gov.bd'),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 'southsunamganj.sunamganj.gov.bd'),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 'bishwambarpur.sunamganj.gov.bd'),
(303, 39, 'Chhatak', 'ছাতক', 'chhatak.sunamganj.gov.bd'),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 'jagannathpur.sunamganj.gov.bd'),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 'dowarabazar.sunamganj.gov.bd'),
(306, 39, 'Tahirpur', 'তাহিরপুর', 'tahirpur.sunamganj.gov.bd'),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 'dharmapasha.sunamganj.gov.bd'),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 'jamalganj.sunamganj.gov.bd'),
(309, 39, 'Shalla', 'শাল্লা', 'shalla.sunamganj.gov.bd'),
(310, 39, 'Derai', 'দিরাই', 'derai.sunamganj.gov.bd'),
(311, 40, 'Belabo', 'বেলাবো', 'belabo.narsingdi.gov.bd'),
(312, 40, 'Monohardi', 'মনোহরদী', 'monohardi.narsingdi.gov.bd'),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', 'narsingdisadar.narsingdi.gov.bd'),
(314, 40, 'Palash', 'পলাশ', 'palash.narsingdi.gov.bd'),
(315, 40, 'Raipura', 'রায়পুরা', 'raipura.narsingdi.gov.bd'),
(316, 40, 'Shibpur', 'শিবপুর', 'shibpur.narsingdi.gov.bd'),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.gazipur.gov.bd'),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', 'kaliakair.gazipur.gov.bd'),
(319, 41, 'Kapasia', 'কাপাসিয়া', 'kapasia.gazipur.gov.bd'),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', 'sadar.gazipur.gov.bd'),
(321, 41, 'Sreepur', 'শ্রীপুর', 'sreepur.gazipur.gov.bd'),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 'sadar.shariatpur.gov.bd'),
(323, 42, 'Naria', 'নড়িয়া', 'naria.shariatpur.gov.bd'),
(324, 42, 'Zajira', 'জাজিরা', 'zajira.shariatpur.gov.bd'),
(325, 42, 'Gosairhat', 'গোসাইরহাট', 'gosairhat.shariatpur.gov.bd'),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', 'bhedarganj.shariatpur.gov.bd'),
(327, 42, 'Damudya', 'ডামুড্যা', 'damudya.shariatpur.gov.bd'),
(328, 43, 'Araihazar', 'আড়াইহাজার', 'araihazar.narayanganj.gov.bd'),
(329, 43, 'Bandar', 'বন্দর', 'bandar.narayanganj.gov.bd'),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 'narayanganjsadar.narayanganj.gov.bd'),
(331, 43, 'Rupganj', 'রূপগঞ্জ', 'rupganj.narayanganj.gov.bd'),
(332, 43, 'Sonargaon', 'সোনারগাঁ', 'sonargaon.narayanganj.gov.bd'),
(333, 44, 'Basail', 'বাসাইল', 'basail.tangail.gov.bd'),
(334, 44, 'Bhuapur', 'ভুয়াপুর', 'bhuapur.tangail.gov.bd'),
(335, 44, 'Delduar', 'দেলদুয়ার', 'delduar.tangail.gov.bd'),
(336, 44, 'Ghatail', 'ঘাটাইল', 'ghatail.tangail.gov.bd'),
(337, 44, 'Gopalpur', 'গোপালপুর', 'gopalpur.tangail.gov.bd'),
(338, 44, 'Madhupur', 'মধুপুর', 'madhupur.tangail.gov.bd'),
(339, 44, 'Mirzapur', 'মির্জাপুর', 'mirzapur.tangail.gov.bd'),
(340, 44, 'Nagarpur', 'নাগরপুর', 'nagarpur.tangail.gov.bd'),
(341, 44, 'Sakhipur', 'সখিপুর', 'sakhipur.tangail.gov.bd'),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', 'tangailsadar.tangail.gov.bd'),
(343, 44, 'Kalihati', 'কালিহাতী', 'kalihati.tangail.gov.bd'),
(344, 44, 'Dhanbari', 'ধনবাড়ী', 'dhanbari.tangail.gov.bd'),
(345, 45, 'Itna', 'ইটনা', 'itna.kishoreganj.gov.bd'),
(346, 45, 'Katiadi', 'কটিয়াদী', 'katiadi.kishoreganj.gov.bd'),
(347, 45, 'Bhairab', 'ভৈরব', 'bhairab.kishoreganj.gov.bd'),
(348, 45, 'Tarail', 'তাড়াইল', 'tarail.kishoreganj.gov.bd'),
(349, 45, 'Hossainpur', 'হোসেনপুর', 'hossainpur.kishoreganj.gov.bd'),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', 'pakundia.kishoreganj.gov.bd'),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', 'kuliarchar.kishoreganj.gov.bd'),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 'kishoreganjsadar.kishoreganj.gov.bd'),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', 'karimgonj.kishoreganj.gov.bd'),
(354, 45, 'Bajitpur', 'বাজিতপুর', 'bajitpur.kishoreganj.gov.bd'),
(355, 45, 'Austagram', 'অষ্টগ্রাম', 'austagram.kishoreganj.gov.bd'),
(356, 45, 'Mithamoin', 'মিঠামইন', 'mithamoin.kishoreganj.gov.bd'),
(357, 45, 'Nikli', 'নিকলী', 'nikli.kishoreganj.gov.bd'),
(358, 46, 'Harirampur', 'হরিরামপুর', 'harirampur.manikganj.gov.bd'),
(359, 46, 'Saturia', 'সাটুরিয়া', 'saturia.manikganj.gov.bd'),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 'sadar.manikganj.gov.bd'),
(361, 46, 'Gior', 'ঘিওর', 'gior.manikganj.gov.bd'),
(362, 46, 'Shibaloy', 'শিবালয়', 'shibaloy.manikganj.gov.bd'),
(363, 46, 'Doulatpur', 'দৌলতপুর', 'doulatpur.manikganj.gov.bd'),
(364, 46, 'Singiar', 'সিংগাইর', 'singiar.manikganj.gov.bd'),
(365, 47, 'Savar', 'সাভার', 'savar.dhaka.gov.bd'),
(366, 47, 'Dhamrai', 'ধামরাই', 'dhamrai.dhaka.gov.bd'),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', 'keraniganj.dhaka.gov.bd'),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dhaka.gov.bd'),
(369, 47, 'Dohar', 'দোহার', 'dohar.dhaka.gov.bd'),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 'sadar.munshiganj.gov.bd'),
(371, 48, 'Sreenagar', 'শ্রীনগর', 'sreenagar.munshiganj.gov.bd'),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', 'sirajdikhan.munshiganj.gov.bd'),
(373, 48, 'Louhajanj', 'লৌহজং', 'louhajanj.munshiganj.gov.bd'),
(374, 48, 'Gajaria', 'গজারিয়া', 'gajaria.munshiganj.gov.bd'),
(375, 48, 'Tongibari', 'টংগীবাড়ি', 'tongibari.munshiganj.gov.bd'),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', 'sadar.rajbari.gov.bd'),
(377, 49, 'Goalanda', 'গোয়ালন্দ', 'goalanda.rajbari.gov.bd'),
(378, 49, 'Pangsa', 'পাংশা', 'pangsa.rajbari.gov.bd'),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', 'baliakandi.rajbari.gov.bd'),
(380, 49, 'Kalukhali', 'কালুখালী', 'kalukhali.rajbari.gov.bd'),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', 'sadar.madaripur.gov.bd'),
(382, 50, 'Shibchar', 'শিবচর', 'shibchar.madaripur.gov.bd'),
(383, 50, 'Kalkini', 'কালকিনি', 'kalkini.madaripur.gov.bd'),
(384, 50, 'Rajoir', 'রাজৈর', 'rajoir.madaripur.gov.bd'),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 'sadar.gopalganj.gov.bd'),
(386, 51, 'Kashiani', 'কাশিয়ানী', 'kashiani.gopalganj.gov.bd'),
(387, 51, 'Tungipara', 'টুংগীপাড়া', 'tungipara.gopalganj.gov.bd'),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', 'kotalipara.gopalganj.gov.bd'),
(389, 51, 'Muksudpur', 'মুকসুদপুর', 'muksudpur.gopalganj.gov.bd'),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', 'sadar.faridpur.gov.bd'),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', 'alfadanga.faridpur.gov.bd'),
(392, 52, 'Boalmari', 'বোয়ালমারী', 'boalmari.faridpur.gov.bd'),
(393, 52, 'Sadarpur', 'সদরপুর', 'sadarpur.faridpur.gov.bd'),
(394, 52, 'Nagarkanda', 'নগরকান্দা', 'nagarkanda.faridpur.gov.bd'),
(395, 52, 'Bhanga', 'ভাঙ্গা', 'bhanga.faridpur.gov.bd'),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', 'charbhadrasan.faridpur.gov.bd'),
(397, 52, 'Madhukhali', 'মধুখালী', 'madhukhali.faridpur.gov.bd'),
(398, 52, 'Saltha', 'সালথা', 'saltha.faridpur.gov.bd'),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 'panchagarhsadar.panchagarh.gov.bd'),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', 'debiganj.panchagarh.gov.bd'),
(401, 53, 'Boda', 'বোদা', 'boda.panchagarh.gov.bd'),
(402, 53, 'Atwari', 'আটোয়ারী', 'atwari.panchagarh.gov.bd'),
(403, 53, 'Tetulia', 'তেতুলিয়া', 'tetulia.panchagarh.gov.bd'),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dinajpur.gov.bd'),
(405, 54, 'Birganj', 'বীরগঞ্জ', 'birganj.dinajpur.gov.bd'),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', 'ghoraghat.dinajpur.gov.bd'),
(407, 54, 'Birampur', 'বিরামপুর', 'birampur.dinajpur.gov.bd'),
(408, 54, 'Parbatipur', 'পার্বতীপুর', 'parbatipur.dinajpur.gov.bd'),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', 'bochaganj.dinajpur.gov.bd'),
(410, 54, 'Kaharol', 'কাহারোল', 'kaharol.dinajpur.gov.bd'),
(411, 54, 'Fulbari', 'ফুলবাড়ী', 'fulbari.dinajpur.gov.bd'),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', 'dinajpursadar.dinajpur.gov.bd'),
(413, 54, 'Hakimpur', 'হাকিমপুর', 'hakimpur.dinajpur.gov.bd'),
(414, 54, 'Khansama', 'খানসামা', 'khansama.dinajpur.gov.bd'),
(415, 54, 'Birol', 'বিরল', 'birol.dinajpur.gov.bd'),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', 'chirirbandar.dinajpur.gov.bd'),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 'sadar.lalmonirhat.gov.bd'),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.lalmonirhat.gov.bd'),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', 'hatibandha.lalmonirhat.gov.bd'),
(420, 55, 'Patgram', 'পাটগ্রাম', 'patgram.lalmonirhat.gov.bd'),
(421, 55, 'Aditmari', 'আদিতমারী', 'aditmari.lalmonirhat.gov.bd'),
(422, 56, 'Syedpur', 'সৈয়দপুর', 'syedpur.nilphamari.gov.bd'),
(423, 56, 'Domar', 'ডোমার', 'domar.nilphamari.gov.bd'),
(424, 56, 'Dimla', 'ডিমলা', 'dimla.nilphamari.gov.bd'),
(425, 56, 'Jaldhaka', 'জলঢাকা', 'jaldhaka.nilphamari.gov.bd'),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', 'kishorganj.nilphamari.gov.bd'),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', 'nilphamarisadar.nilphamari.gov.bd'),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', 'sadullapur.gaibandha.gov.bd'),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 'gaibandhasadar.gaibandha.gov.bd'),
(430, 57, 'Palashbari', 'পলাশবাড়ী', 'palashbari.gaibandha.gov.bd'),
(431, 57, 'Saghata', 'সাঘাটা', 'saghata.gaibandha.gov.bd'),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', 'gobindaganj.gaibandha.gov.bd'),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', 'sundarganj.gaibandha.gov.bd'),
(434, 57, 'Phulchari', 'ফুলছড়ি', 'phulchari.gaibandha.gov.bd'),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 'thakurgaonsadar.thakurgaon.gov.bd'),
(436, 58, 'Pirganj', 'পীরগঞ্জ', 'pirganj.thakurgaon.gov.bd'),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', 'ranisankail.thakurgaon.gov.bd'),
(438, 58, 'Haripur', 'হরিপুর', 'haripur.thakurgaon.gov.bd'),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', 'baliadangi.thakurgaon.gov.bd'),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', 'rangpursadar.rangpur.gov.bd'),
(441, 59, 'Gangachara', 'গংগাচড়া', 'gangachara.rangpur.gov.bd'),
(442, 59, 'Taragonj', 'তারাগঞ্জ', 'taragonj.rangpur.gov.bd'),
(443, 59, 'Badargonj', 'বদরগঞ্জ', 'badargonj.rangpur.gov.bd'),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', 'mithapukur.rangpur.gov.bd'),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', 'pirgonj.rangpur.gov.bd'),
(446, 59, 'Kaunia', 'কাউনিয়া', 'kaunia.rangpur.gov.bd'),
(447, 59, 'Pirgacha', 'পীরগাছা', 'pirgacha.rangpur.gov.bd'),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 'kurigramsadar.kurigram.gov.bd'),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', 'nageshwari.kurigram.gov.bd'),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', 'bhurungamari.kurigram.gov.bd'),
(451, 60, 'Phulbari', 'ফুলবাড়ী', 'phulbari.kurigram.gov.bd'),
(452, 60, 'Rajarhat', 'রাজারহাট', 'rajarhat.kurigram.gov.bd'),
(453, 60, 'Ulipur', 'উলিপুর', 'ulipur.kurigram.gov.bd'),
(454, 60, 'Chilmari', 'চিলমারী', 'chilmari.kurigram.gov.bd'),
(455, 60, 'Rowmari', 'রৌমারী', 'rowmari.kurigram.gov.bd'),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', 'charrajibpur.kurigram.gov.bd'),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', 'sherpursadar.sherpur.gov.bd'),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', 'nalitabari.sherpur.gov.bd'),
(459, 61, 'Sreebordi', 'শ্রীবরদী', 'sreebordi.sherpur.gov.bd'),
(460, 61, 'Nokla', 'নকলা', 'nokla.sherpur.gov.bd'),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', 'jhenaigati.sherpur.gov.bd'),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', 'fulbaria.mymensingh.gov.bd'),
(463, 62, 'Trishal', 'ত্রিশাল', 'trishal.mymensingh.gov.bd'),
(464, 62, 'Bhaluka', 'ভালুকা', 'bhaluka.mymensingh.gov.bd'),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', 'muktagacha.mymensingh.gov.bd'),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 'mymensinghsadar.mymensingh.gov.bd'),
(467, 62, 'Dhobaura', 'ধোবাউড়া', 'dhobaura.mymensingh.gov.bd'),
(468, 62, 'Phulpur', 'ফুলপুর', 'phulpur.mymensingh.gov.bd'),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', 'haluaghat.mymensingh.gov.bd'),
(470, 62, 'Gouripur', 'গৌরীপুর', 'gouripur.mymensingh.gov.bd'),
(471, 62, 'Gafargaon', 'গফরগাঁও', 'gafargaon.mymensingh.gov.bd'),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', 'iswarganj.mymensingh.gov.bd'),
(473, 62, 'Nandail', 'নান্দাইল', 'nandail.mymensingh.gov.bd'),
(474, 62, 'Tarakanda', 'তারাকান্দা', 'tarakanda.mymensingh.gov.bd'),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', 'jamalpursadar.jamalpur.gov.bd'),
(476, 63, 'Melandah', 'মেলান্দহ', 'melandah.jamalpur.gov.bd'),
(477, 63, 'Islampur', 'ইসলামপুর', 'islampur.jamalpur.gov.bd'),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', 'dewangonj.jamalpur.gov.bd'),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', 'sarishabari.jamalpur.gov.bd'),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', 'madarganj.jamalpur.gov.bd'),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', 'bokshiganj.jamalpur.gov.bd'),
(482, 64, 'Barhatta', 'বারহাট্টা', 'barhatta.netrokona.gov.bd'),
(483, 64, 'Durgapur', 'দুর্গাপুর', 'durgapur.netrokona.gov.bd'),
(484, 64, 'Kendua', 'কেন্দুয়া', 'kendua.netrokona.gov.bd'),
(485, 64, 'Atpara', 'আটপাড়া', 'atpara.netrokona.gov.bd'),
(486, 64, 'Madan', 'মদন', 'madan.netrokona.gov.bd'),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', 'khaliajuri.netrokona.gov.bd'),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', 'kalmakanda.netrokona.gov.bd'),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', 'mohongonj.netrokona.gov.bd'),
(490, 64, 'Purbadhala', 'পূর্বধলা', 'purbadhala.netrokona.gov.bd'),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', 'netrokonasadar.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `ip_address`, `avatar`, `email_verified_at`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'user1', '', NULL, 'user1@gmail.com', '', NULL, NULL, 0, '$2y$10$Uw96hu6F6YGmyQHvnyZTQuV0QbFEkB9svhGGePzLPPOR6HS3t6dlC', NULL, '2019-12-16 23:47:00', '2019-12-16 23:47:00'),
(7, 'Harrison', 'Roy', '123456789123', 'ermhroy7@gmail.com', '::1', NULL, '2020-01-20 03:11:54', 1, '$2y$10$omJyndzoXUTQURPw7yOMZO503N.k8uq0a3JF.lC5d2N0Ac70Pi14e', NULL, '2020-01-20 03:11:37', '2020-01-20 03:11:54'),
(10, 'Harrison', 'Roy', '1231231234', 'admin@gmail.com', '::1', NULL, NULL, 0, '$2y$10$/tofG/wZxL.GtRBoY3il7u8VZOhcj4YWtLI/s9eCtfYKuRGc3e1xS', '75d23af433e0cea4c0e45a56dba18b30', '2020-01-20 06:09:03', '2020-01-20 06:09:03'),
(11, 'Asif', 'Foysal', '01783038818', 'ashiffoysal8818@gmail.com', '::1', NULL, '2020-01-20 23:40:15', 1, '$2y$10$AfvecRgnMOfq/aLdgqsYiOr.F8emWeF0JwHvaB8VCYJkMid.2Ybkm', NULL, '2020-01-20 23:39:25', '2020-01-20 23:40:15'),
(12, 'Qayum', 'Hasan', '01748000000', 'user@gmail.com', '::1', NULL, NULL, 0, '$2y$10$dzk4lpGYUD0/PbWDqdjfEOE8jJ/i8RzdghSlnxoBaWKRVZMTyu.bO', 'cba1f2d695a5ca39ee6f343297a761a4', '2020-01-22 00:32:02', '2020-01-22 00:32:02'),
(13, 'Qayum', 'Hasan', '017456987452', 'dev.qayumhasan@gmail.com', '::1', NULL, NULL, 0, '$2y$10$VCcsk.8kG713bfcMMg75Xu3q2NY8gTBF8HpmigUIoqxIPnZz3D3de', '6c85c4e0f92076b9fe207033eed12f30', '2020-01-22 01:17:09', '2020-01-22 01:17:09');

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
(13, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', NULL, '2020-01-26 02:00:42', NULL),
(14, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', NULL, '2020-01-26 02:01:57', NULL),
(15, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', NULL, '2020-01-26 02:02:30', NULL),
(16, '12', 'sdfgdsfafsaf', 'fsdafdsafdsadf', 'fdsafdsf', '18', '3', '20', '171', NULL, '2020-01-26 02:03:14', NULL),
(17, '12', 'sdfsdaf', 'fsdafdsf', 'sdfdsfdsf', '18', '6', '41', '319', NULL, '2020-01-26 04:09:41', NULL),
(18, '12', 'sdfsdafewerwsd', 'fsdafdsfffdsaff', 'sdfdsfdsffsdafds', '18', '6', '41', '319', NULL, '2020-01-26 04:12:14', NULL),
(19, '12', 'dsgsdfgd', 'dggdfsg', 'gdfsgfds', '18', '6', '41', '319', NULL, '2020-01-26 04:15:36', NULL),
(20, '12', 'fsdfdsa', 'afdsafsd', 'fdsfdsf', '18', '6', '41', '319', '1', '2020-01-26 04:21:13', NULL),
(21, '12', 'fsdfdsa', 'afdsafsd', 'fdsfdsf', '18', '6', '41', '319', NULL, '2020-01-26 04:24:47', NULL),
(22, '12', 'safdsafdsa', 'fdsfdsf', 'dsfdsfds', '18', '6', '41', '319', NULL, '2020-01-26 04:25:52', NULL),
(23, '12', 'fsagddfsa', 'fdsfasdf', 'dsafdsaf', '18', '6', '41', '319', '1', '2020-01-26 04:29:03', NULL),
(24, '12', 'asdfsad', 'safdsa', 'fsdfdsf', '18', '6', '41', '319', '1', '2020-01-26 04:33:35', NULL),
(25, '12', 'asdfsad', 'safdsa', 'fsdfdsf', '18', '6', '41', '319', '1', '2020-01-26 04:34:05', NULL),
(26, '12', 'ragfrda', 'fgdsafsda', 'fdsafdsaf', '18', '6', '41', '319', '1', '2020-01-26 04:35:03', NULL),
(27, '12', 'gfdag', 'gfdgdfg', 'fdsgfdsgfdss', '18', '6', '41', '319', '1', '2020-01-26 04:37:04', NULL),
(28, '12', 'dfsgfdsg', 'fadsfdsf', 'dsfdsf', '18', '6', '41', '319', '1', '2020-01-26 05:27:36', NULL),
(29, '12', 'sdafdsaf', 'sdfdsaf', 'fsdfsaf', '18', '6', '41', '319', NULL, '2020-01-26 05:43:18', NULL),
(30, '12', 'fdsafd', 'sfadsfds', 'fdsfdsf', '18', '6', '41', '319', '1', '2020-01-26 05:44:03', NULL),
(31, '12', 'fdsafd', 'sfadsfds', 'fdsfdsf', '18', '6', '41', '319', '1', '2020-01-26 05:44:23', NULL),
(32, '12', 'dsadffs', 'fdsafdsf', 'dsafdsaf', '18', '6', '41', '319', '1', '2020-01-26 05:44:46', NULL),
(33, '12', 'dsadffs', 'fdsafdsf', 'dsafdsaf', '18', '6', '41', '319', '1', '2020-01-26 05:45:00', NULL),
(34, '12', 'sdfdfdsfds', 'fdsfdsf', 'sfdffdsf', '18', '6', '41', '319', '1', '2020-01-26 05:45:38', NULL),
(35, '12', 'sdfdfdsfds', 'fdsfdsf', 'sfdffdsf', '18', '6', '41', '319', '1', '2020-01-26 05:45:50', NULL),
(36, '12', 'fdsf', 'sfddsaf', 'fdsfads', '18', '6', '41', '319', '1', '2020-01-26 05:46:30', NULL),
(37, '12', 'TGREWTRE', 'TEWTERW', 'REWTERWT', '18', '6', '41', '319', '1', '2020-01-26 06:10:48', NULL),
(38, '12', 'dfsfsda', 'sdfddsaf', 'dsfafdsa', '18', '6', '41', '319', '1', '2020-01-26 06:43:40', NULL),
(39, '12', 'sdfdsf', 'sdfdsf', 'ffdsafa', '18', '6', '41', '319', NULL, '2020-01-26 22:33:16', NULL),
(40, '12', 'sdfdsf', 'sdfdsf', 'ffdsafa', '18', '6', '41', '319', NULL, '2020-01-26 22:34:45', NULL),
(41, '12', 'dsfgfdsg', 'ddsgfdsgfdsg', 'gfdsgfdsg', '18', '6', '41', '319', '1', '2020-01-26 23:04:58', NULL),
(42, '12', 'ertewr', 'rewtrewt', 'ertrewtrew', '18', '6', '41', '319', '1', '2020-01-26 23:40:40', NULL),
(43, '12', 'ertretr', 'etrewt', 'rewtrewt', '18', '6', '41', '319', '1', '2020-01-26 23:47:40', NULL),
(44, '12', 'ertretr', 'etrewt', 'rewtrewt', '18', '6', '41', '319', '1', '2020-01-26 23:48:27', NULL),
(45, '12', 'sdgdsg', 'ggdfgfd', 'gfdgdfg', '18', '6', '47', '365', '1', '2020-01-26 23:50:28', NULL),
(46, '12', 'dsfdfds', 'fdsfsd', 'fdsfds', '18', '6', '47', '369', '1', '2020-01-26 23:58:10', NULL),
(47, '12', 'dsfdfds', 'fdsfsd', 'fdsfds', '18', '6', '47', '369', '1', '2020-01-26 23:58:49', NULL),
(48, '12', 'sdfdasff', 'dsfdsf', 'dsfds', '18', '6', '41', '319', '1', '2020-01-27 01:25:31', NULL),
(49, '12', 'sdfdasff', 'dsfdsf', 'dsfds', '18', '6', '41', '319', '1', '2020-01-27 01:26:11', NULL),
(50, '12', 'fgdgfdg', 'fddsgfdsg', 'fdgfdg', '18', '6', '41', '319', '1', '2020-01-27 04:11:45', NULL),
(51, '12', 'dgsfdg', 'dfsgfdg', 'fddgfdsg', '18', '6', '41', '319', '1', '2020-01-27 07:16:39', NULL),
(52, '12', 'gfdsg', 'dfsgfdsgfd', 'gfdsgfdss', '18', '6', '41', '319', '1', '2020-01-28 00:19:41', NULL),
(53, '12', 'sdfds', 'dsfds', 'dsfdsf', '18', '6', '41', '319', '1', '2020-01-28 01:40:17', NULL),
(54, '12', 'dsafdsafdf', 'dsafdsaf', 'dsafdsaf', '18', '6', '41', '319', '1', '2020-01-28 01:47:17', NULL),
(55, '12', 'fsdfds', 'fdsafds', 'dsfdsf', '18', '6', '41', '319', '1', '2020-01-28 01:49:48', NULL),
(56, '12', 'fdddfdsf', 'dsafdsaf', 'ssdafdsaf', '18', '6', '47', '369', '1', '2020-01-28 01:51:08', NULL),
(57, '12', 'safdsaf', 'fdsfdsf', 'dsfdsafaa', '18', '6', '44', '335', '1', '2020-01-28 03:12:51', NULL),
(58, '12', 'fasadf', 'sdafsd', 'fsdafds', '18', '6', '41', '319', '1', '2020-01-29 01:23:44', NULL),
(59, '12', 'fdgfdsg', 'dfgfdg', 'dfsgfds', '18', '6', '41', '319', '1', '2020-01-29 01:30:39', NULL),
(60, '12', 'gfdsgfd', 'gdfsgsdf', 'gfdsgdsf', '18', '6', '47', '366', '1', '2020-01-29 01:33:03', NULL),
(61, '12', 'sgdsdfg', 'fsdgfds', 'gfdsfgds', '18', '6', '42', '325', '1', '2020-01-29 01:33:55', NULL),
(62, '12', 'sgdsdfg', 'fsdgfds', 'gfdsfgds', '18', '6', '42', '325', '1', '2020-01-29 01:35:28', NULL),
(63, '12', 'sgdsdfg', 'fsdgfds', 'gfdsfgds', '18', '6', '42', '325', '1', '2020-01-29 01:35:37', NULL),
(64, '12', 'fdsfff', 'sdfadsaf', 'dsfdsafds', '18', '6', '47', '366', '1', '2020-01-29 01:58:17', NULL),
(65, '12', 'sdfdsa', 'fsdafdsa', 'sfdfdsa', '18', '2', '12', '104', '1', '2020-01-29 02:00:02', NULL),
(66, '12', 'ewtrewt', 'ewtre', 'trewtrew', '18', '6', '41', '319', '1', '2020-01-29 03:47:36', NULL),
(67, '12', '5yrty', 'tryrty', 'rtyrty', '18', '6', '51', '386', NULL, '2020-02-01 23:58:58', NULL),
(68, '12', '5yrty', 'tryrty', 'rtyrty', '18', '6', '51', '386', NULL, '2020-02-02 00:00:20', NULL),
(69, '12', 'DSGDFSG', 'FDSGFDGF', 'DGFDSGS', '18', '8', '63', '476', '1', '2020-02-02 00:01:03', NULL),
(70, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '47', '365', '1', '2020-02-02 03:23:12', NULL),
(71, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', NULL, '2020-02-02 03:27:23', NULL),
(72, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-02 03:27:48', NULL),
(73, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-02 05:12:41', NULL),
(74, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-02 05:14:25', NULL),
(75, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-03 04:03:30', NULL),
(76, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-03 05:40:08', NULL),
(77, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-03 05:40:24', NULL),
(78, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', NULL, '2020-02-03 23:53:43', NULL),
(79, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-03 23:54:14', NULL),
(80, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-03 23:54:30', NULL),
(81, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-04 01:48:54', NULL),
(82, '12', 'sdfgdsfa', 'fsdafdsa', 'fdsaf', '18', '6', '41', '319', '1', '2020-02-04 22:34:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_used_cupons`
--

CREATE TABLE `user_used_cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_used_cupons`
--

INSERT INTO `user_used_cupons` (`id`, `user_ip`, `cupon_id`, `order_id`, `created_at`, `updated_at`) VALUES
(106, '12', '2', '37591', '2020-02-04 06:22:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(49, 105, 11, '2020-01-21 06:03:32', NULL),
(50, 104, 11, '2020-01-21 06:03:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
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
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
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
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
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
-- AUTO_INCREMENT for table `add_to_carts`
--
ALTER TABLE `add_to_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_storage`
--
ALTER TABLE `cart_storage`
  MODIFY `purchase_key` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `category_banners`
--
ALTER TABLE `category_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compare_products`
--
ALTER TABLE `compare_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contract_images`
--
ALTER TABLE `contract_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `flash_deal_details`
--
ALTER TABLE `flash_deal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT for table `footer_options`
--
ALTER TABLE `footer_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gateway`
--
ALTER TABLE `gateway`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `order_places`
--
ALTER TABLE `order_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_storages`
--
ALTER TABLE `order_storages`
  MODIFY `purchase_key` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `product_licenses`
--
ALTER TABLE `product_licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `re_sub_categories`
--
ALTER TABLE `re_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_banners`
--
ALTER TABLE `site_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `user_used_cupons`
--
ALTER TABLE `user_used_cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contract_images`
--
ALTER TABLE `contract_images`
  ADD CONSTRAINT `contract_images_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `upazilas_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
