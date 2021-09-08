-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 11:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r31_laravel_ec`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenname` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attgroup` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `screenname`, `content`, `unit`, `type`, `values`, `attgroup`, `created_at`, `updated_at`) VALUES
(1, 'name', 'Name', 'name', 'none', 'string', 'none', 'General', '2017-10-07 00:32:38', '2017-10-07 00:32:38'),
(2, 'description', 'Description', 'description', 'none', 'text', 'none', 'General', '2017-10-07 00:34:00', '2017-10-07 00:34:00'),
(3, 'stock', 'Stock Status', 'some status', 'none', 'dropdown', 'In stock,Out of stock', 'General', '2017-10-07 00:36:32', '2017-10-07 01:03:43'),
(4, 'short_description', 'Short Description', 'short description', 'none', 'text', 'none', 'General', '2017-10-07 00:36:52', '2017-10-07 00:36:52'),
(5, 'visibility', 'Visibility', 'visibility', 'none', 'yesno', 'none', 'General', '2017-10-07 00:38:07', '2017-10-07 00:38:07'),
(6, 'sku', 'SKU', 'some content', 'none', 'string', 'none', 'General', '2017-10-07 00:39:58', '2017-10-07 00:39:58'),
(7, 'price', 'Price', 'price', 'none', 'string', 'none', 'General', '2017-10-07 00:40:35', '2017-10-07 00:40:35'),
(8, 'color', 'Color', 'color', 'none', 'string', 'none', 'General', '2017-10-07 00:43:38', '2017-10-07 00:52:18'),
(9, 'weight', 'Weight', 'weight', 'none', 'string', 'none', 'General', '2017-10-07 00:48:01', '2017-10-07 00:48:01'),
(10, 'manufacturer', 'Manufacturer', 'manufacturer', 'none', 'string', 'none', 'General', '2017-10-07 00:50:46', '2017-10-07 00:50:46'),
(11, 'availablecolor', 'Available Color', 'availablecolor', 'none', 'checkbox', 'White,Black,Red,Green,Blue,Silver,Gold,Gray', 'General', '2017-10-07 00:56:30', '2017-10-07 00:56:30'),
(12, 'operatingsystem', 'OS', 'operatingsystem', 'none', 'string', 'none', 'Computer', '2017-10-07 01:22:37', '2017-10-07 01:22:37'),
(13, 'ram', 'RAM', 'ram', 'none', 'string', 'none', 'Computer', '2017-10-07 01:23:08', '2017-10-07 01:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `attributesets`
--

CREATE TABLE `attributesets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributesets`
--

INSERT INTO `attributesets` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'mobile', '2017-10-07 00:58:28', '2017-10-07 00:58:28'),
(2, 'Computer', 'computer', '2017-10-07 01:25:15', '2017-10-07 01:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_attributeset`
--

CREATE TABLE `attribute_attributeset` (
  `id` int(10) UNSIGNED NOT NULL,
  `attributeset_id` int(10) UNSIGNED DEFAULT NULL,
  `attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `filterable` tinyint(1) NOT NULL DEFAULT '0',
  `searchable` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_attributeset`
--

INSERT INTO `attribute_attributeset` (`id`, `attributeset_id`, `attribute_id`, `filterable`, `searchable`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 0, NULL, NULL),
(2, 1, 2, 0, 0, NULL, NULL),
(3, 1, 3, 0, 0, NULL, NULL),
(4, 1, 4, 0, 0, NULL, NULL),
(5, 1, 5, 0, 0, NULL, NULL),
(6, 1, 6, 0, 0, NULL, NULL),
(7, 1, 7, 0, 0, NULL, NULL),
(8, 1, 8, 0, 0, NULL, NULL),
(9, 1, 9, 0, 0, NULL, NULL),
(10, 1, 10, 0, 0, NULL, NULL),
(11, 1, 11, 0, 0, NULL, NULL),
(12, 2, 1, 0, 0, NULL, NULL),
(13, 2, 2, 0, 0, NULL, NULL),
(14, 2, 3, 0, 0, NULL, NULL),
(15, 2, 4, 0, 0, NULL, NULL),
(16, 2, 5, 0, 0, NULL, NULL),
(17, 2, 6, 0, 0, NULL, NULL),
(18, 2, 7, 0, 0, NULL, NULL),
(19, 2, 8, 0, 0, NULL, NULL),
(20, 2, 9, 0, 0, NULL, NULL),
(21, 2, 10, 0, 0, NULL, NULL),
(22, 2, 11, 0, 0, NULL, NULL),
(23, 2, 12, 0, 0, NULL, NULL),
(24, 2, 13, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'Electronics', 0, '2017-10-07 00:25:52', '2017-10-07 00:25:52'),
(2, 'Mobile', 'Mobile', 1, '2017-10-07 00:26:07', '2017-10-07 00:26:07'),
(3, 'Computer', 'Computer', 1, '2017-10-07 00:26:28', '2017-10-07 00:26:28'),
(4, 'Garments', 'garments', 0, '2017-10-07 00:26:44', '2017-10-07 00:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-10-07 01:05:46', '2017-10-07 01:05:46'),
(2, 2, 1, '2017-10-07 01:05:46', '2017-10-07 01:05:46'),
(3, 1, 2, '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(4, 3, 2, '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(5, 1, 3, '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(6, 2, 3, '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(7, 3, 4, '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(8, 3, 5, '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(9, 2, 6, '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(10, 3, 7, '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(11, 2, 8, '2017-10-10 22:01:50', '2017-10-10 22:01:50'),
(12, 2, 9, '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(13, 3, 10, '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(14, 2, 11, '2017-10-10 22:11:10', '2017-10-10 22:11:10'),
(15, 3, 12, '2017-10-10 22:12:07', '2017-10-10 22:12:07'),
(16, 2, 13, '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(17, 2, 14, '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(18, 2, 15, '2017-10-10 22:22:21', '2017-10-10 22:22:21');

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
(3, '2017_09_09_051106_add_is_admin_to_user_table', 1),
(4, '2017_09_12_062138_create_categories_table', 1),
(5, '2017_09_13_064801_create_shops_table', 1),
(6, '2017_09_14_045221_create_attributes_table', 1),
(7, '2017_09_14_045611_create_attributesets_table', 1),
(8, '2017_09_14_052214_create_attribute_attributeset_table', 1),
(9, '2017_09_26_044323_create_products_table', 1),
(10, '2017_09_27_071337_create_productmetas_table', 1),
(11, '2017_10_02_034458_create_pivot_table_category_product', 1),
(12, '2017_10_04_073857_create_productimages_table', 1);

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
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `imagename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`id`, `product_id`, `imagename`, `created_at`, `updated_at`) VALUES
(1, 1, '1507359939_2_40653.jpg', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(2, 1, '1507359939_2_40859.jpg', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(3, 1, '1507359939_2_36593.jpg', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(4, 2, '1507361216_2_39966.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(5, 2, '1507361216_2_25076.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(6, 2, '1507361216_2_44183.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(7, 2, '1507361216_2_28158.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(8, 2, '1507361216_2_24771.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(9, 2, '1507361216_2_43296.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(10, 2, '1507361216_2_36928.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(11, 2, '1507361216_2_26777.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(12, 2, '1507361216_2_26159.jpg', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(13, 3, '1507613178_2_36309.jpg', '2017-10-09 23:26:26', '2017-10-09 23:26:26'),
(14, 3, '1507613178_2_21192.jpg', '2017-10-09 23:26:26', '2017-10-09 23:26:26'),
(15, 3, '1507613178_2_41801.jpg', '2017-10-09 23:26:26', '2017-10-09 23:26:26'),
(16, 3, '1507613178_2_20685.jpg', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(17, 4, '1507694150_4_47662.jpg', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(18, 4, '1507694150_4_36120.jpg', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(19, 4, '1507694150_4_26317.jpg', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(20, 4, '1507694150_4_20495.jpg', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(21, 5, '1507694186_7_43997.jpg', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(22, 6, '1507694100_6_34450.jpg', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(23, 6, '1507694100_6_39296.png', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(24, 7, '1507694387_7_45461.jpg', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(25, 7, '1507694387_7_38094.jpg', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(26, 7, '1507694387_7_25844.jpg', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(27, 7, '1507694387_7_45878.jpg', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(28, 8, '1507694499_4_27060.jpg', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(29, 8, '1507694499_4_35902.jpg', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(30, 8, '1507694499_4_31629.jpg', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(31, 8, '1507694499_4_47304.jpg', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(32, 8, '1507694499_4_49133.jpg', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(33, 9, '1507694572_6_24035.jpg', '2017-10-10 22:02:59', '2017-10-10 22:02:59'),
(34, 9, '1507694572_6_24937.jpg', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(35, 9, '1507694572_6_40264.jpg', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(36, 9, '1507694572_6_47297.png', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(37, 10, '1507694683_7_29308.jpeg', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(38, 10, '1507694683_7_41361.png', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(39, 10, '1507694683_7_47786.jpg', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(40, 10, '1507694683_7_27560.jpg', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(41, 11, '1507695035_6_44138.jpg', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(42, 11, '1507695050_6_44907.jpg', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(43, 12, '1507695121_7_44913.jpg', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(44, 12, '1507695121_7_37849.jpg', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(45, 12, '1507695121_7_38106.png', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(46, 12, '1507695121_7_43180.jpg', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(47, 13, '1507694984_8_32046.jpg', '2017-10-10 22:14:08', '2017-10-10 22:14:08'),
(48, 13, '1507695195_8_25132.jpg', '2017-10-10 22:14:08', '2017-10-10 22:14:08'),
(49, 13, '1507695206_8_45741.jpg', '2017-10-10 22:14:08', '2017-10-10 22:14:08'),
(50, 13, '1507695227_8_29948.jpg', '2017-10-10 22:14:08', '2017-10-10 22:14:08'),
(51, 13, '1507695241_8_24511.jpg', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(52, 14, '1507695556_6_43673.jpg', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(53, 14, '1507695609_6_47603.jpg', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(54, 15, '1507695677_8_26598.jpg', '2017-10-10 22:22:20', '2017-10-10 22:22:20'),
(55, 15, '1507695688_8_25739.jpg', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(56, 15, '1507695698_8_39632.jpg', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(57, 15, '1507695725_8_34876.jpg', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(58, 15, '1507695735_8_44638.jpg', '2017-10-10 22:22:21', '2017-10-10 22:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `productmetas`
--

CREATE TABLE `productmetas` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `namemeta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productmetas`
--

INSERT INTO `productmetas` (`id`, `product_id`, `attribute_id`, `namemeta`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'name', 'Apple Iphone X', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(2, 1, 2, 'description', 'Apple Iphone X', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(3, 1, 3, 'stock', 'In stock', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(4, 1, 4, 'short_description', 'Apple Iphone X', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(5, 1, 5, 'visibility', 'yes', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(6, 1, 6, 'sku', 'appip10', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(7, 1, 7, 'price', '68000', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(8, 1, 8, 'color', 'Gold', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(9, 1, 9, 'weight', '200', '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(10, 1, 10, 'manufacturer', 'US', '2017-10-07 01:05:46', '2017-10-07 01:05:46'),
(11, 1, 11, 'availablecolor', 'White,Black,Red,Green,Gray', '2017-10-07 01:05:46', '2017-10-07 01:05:46'),
(12, 2, 1, 'name', 'lenovo T440', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(13, 2, 2, 'description', 'lenovo T440', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(14, 2, 3, 'stock', 'In stock', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(15, 2, 4, 'short_description', 'lenovo T440', '2017-10-07 01:27:02', '2017-10-07 01:27:02'),
(16, 2, 5, 'visibility', 'yes', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(17, 2, 6, 'sku', 'lenovot440', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(18, 2, 7, 'price', '600', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(19, 2, 8, 'color', 'Black', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(20, 2, 9, 'weight', '200', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(21, 2, 10, 'manufacturer', 'China', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(22, 2, 11, 'availablecolor', 'White,Black,Silver,Gray', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(23, 2, 12, 'operatingsystem', 'Windows 10', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(24, 2, 13, 'ram', '16GB', '2017-10-07 01:27:03', '2017-10-07 01:27:03'),
(25, 3, 1, 'name', 'Samsung S8', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(26, 3, 2, 'description', 'Samsung S8', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(27, 3, 3, 'stock', 'In stock', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(28, 3, 4, 'short_description', 'Samsung S8', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(29, 3, 5, 'visibility', 'yes', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(30, 3, 6, 'sku', 'ss8123', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(31, 3, 7, 'price', '68000', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(32, 3, 8, 'color', 'Golden', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(33, 3, 9, 'weight', '200', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(34, 3, 10, 'manufacturer', 'Korea', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(35, 3, 11, 'availablecolor', 'White,Black,Red,Green,Blue,Silver,Gold,Gray', '2017-10-09 23:26:27', '2017-10-09 23:26:27'),
(36, 4, 1, 'name', 'HP Stream 14-ax000na', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(37, 4, 2, 'description', 'HP Stream 14-ax000na 14-inch HD Laptop (Aqua Blue) - (Intel Celeron N3060, 4GB RAM, 32GB eMMC, 1TB OneDrive and Office 365, 1 Year Subscription Included, Intel HD Graphics, Windows 10)', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(38, 4, 3, 'stock', 'In stock', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(39, 4, 4, 'short_description', 'Only 9 left in stock.\r\nThis item does not ship to Bangladesh. Learn more\r\nSold by TECH SENSE and Fulfilled by Amazon. Gift-wrap available.', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(40, 4, 5, 'visibility', 'yes', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(41, 4, 6, 'sku', 'computer', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(42, 4, 7, 'price', '30000', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(43, 4, 8, 'color', 'Aqua Blue', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(44, 4, 9, 'weight', '1Kg', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(45, 4, 10, 'manufacturer', 'USA', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(46, 4, 11, 'availablecolor', 'Blue', '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(47, 5, 1, 'name', 'HP ENVY 13', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(48, 5, 2, 'description', 'Windows 10\r\nIntel® Core™ processors\r\nUltra-slim notebook at just 12.9mm\r\nImpossibly thin. Enviably engineered.', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(49, 5, 3, 'stock', 'In stock', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(50, 5, 4, 'short_description', 'Windows 10\r\nIntel® Core™ processors', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(51, 5, 5, 'visibility', 'yes', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(52, 5, 6, 'sku', 'HPENVY13', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(53, 5, 7, 'price', '49000', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(54, 5, 8, 'color', 'Black', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(55, 5, 9, 'weight', '1.5', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(56, 5, 10, 'manufacturer', 'USA', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(57, 5, 11, 'availablecolor', 'White,Black,Blue', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(58, 5, 12, 'operatingsystem', 'Windows-10', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(59, 5, 13, 'ram', '8 GB', '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(60, 6, 1, 'name', 'Nokia 6', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(61, 6, 2, 'description', 'screen : 5.5" IPS LCD 1080 x 1920 pixels (~403 ppi pixel density);\r\nMemory : expandable 256 GB; RAM 3 GB; ROM 32 GB', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(62, 6, 3, 'stock', 'In stock', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(63, 6, 4, 'short_description', 'User Friendly and fast operate', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(64, 6, 5, 'visibility', 'yes', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(65, 6, 6, 'sku', 'Nokia6', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(66, 6, 7, 'price', '22500', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(67, 6, 8, 'color', 'Black', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(68, 6, 9, 'weight', '169 gm', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(69, 6, 10, 'manufacturer', 'Singapore', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(70, 6, 11, 'availablecolor', 'Black', '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(71, 7, 1, 'name', 'HP ENVY 17', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(72, 7, 2, 'description', 'Windows 10 and other operating systems available\r\nIntel® Core™ i7 Processors\r\n15-inch Display\r\nBang & Olufsen audio available', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(73, 7, 3, 'stock', 'In stock', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(74, 7, 4, 'short_description', 'Windows 10 and other operating systems available\r\nIntel® Core™ i7 Processors', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(75, 7, 5, 'visibility', 'yes', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(76, 7, 6, 'sku', 'HPENVY17', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(77, 7, 7, 'price', '55000', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(78, 7, 8, 'color', 'BLUE', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(79, 7, 9, 'weight', '1.25', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(80, 7, 10, 'manufacturer', 'USA', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(81, 7, 11, 'availablecolor', 'White,Black,Blue,Silver', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(82, 7, 12, 'operatingsystem', 'Windows 10', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(83, 7, 13, 'ram', '8GB', '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(84, 8, 1, 'name', 'Apple iPhone 8 (64GB)', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(85, 8, 2, 'description', 'The iPhone 8 and 8 Plus feature glass bodies that enable wireless charging, faster A11 processors, upgraded cameras, and True Tone displays. Launched on September 22, 2017.', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(86, 8, 3, 'stock', 'In stock', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(87, 8, 4, 'short_description', 'FEATURES\r\n\r\n4.7 and 5.5-inch LCD display\r\nFaster A11 processor\r\nGlass body\r\nUpgraded camera\r\nLouder speakers\r\nWireless inductive charging', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(88, 8, 5, 'visibility', 'yes', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(89, 8, 6, 'sku', 'apple8', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(90, 8, 7, 'price', '100000', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(91, 8, 8, 'color', 'Black', '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(92, 8, 9, 'weight', '500 grams', '2017-10-10 22:01:50', '2017-10-10 22:01:50'),
(93, 8, 10, 'manufacturer', 'USA', '2017-10-10 22:01:50', '2017-10-10 22:01:50'),
(94, 8, 11, 'availablecolor', 'White,Black,Silver', '2017-10-10 22:01:50', '2017-10-10 22:01:50'),
(95, 9, 1, 'name', 'Samsung Galaxy S8', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(96, 9, 2, 'description', 'Android N OS 7.0; Primary Camera : 12MP, Secondary Camera : 8mp, memory: 64GB, Ram:4GB, Battery capacity : 3500mAh Li-Ion (non-removeable)', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(97, 9, 3, 'stock', 'In stock', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(98, 9, 4, 'short_description', 'Nice and best Camera phone ever', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(99, 9, 5, 'visibility', 'yes', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(100, 9, 6, 'sku', 'Samsung S8', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(101, 9, 7, 'price', '83,500', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(102, 9, 8, 'color', 'Black, Gray', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(103, 9, 9, 'weight', '173 gm', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(104, 9, 10, 'manufacturer', 'Germany', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(105, 9, 11, 'availablecolor', 'Black,Gray', '2017-10-10 22:03:00', '2017-10-10 22:03:00'),
(106, 10, 1, 'name', 'HP Pavilion 17', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(107, 10, 2, 'description', 'Windows 10\r\nIntel® Core™ i5 Processor\r\n17-inch display\r\nB&O Audio available', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(108, 10, 3, 'stock', 'In stock', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(109, 10, 4, 'short_description', 'Windows 10\r\nIntel® Core™ i5 Processor', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(110, 10, 5, 'visibility', 'yes', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(111, 10, 6, 'sku', 'HPPavilioni7', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(112, 10, 7, 'price', '45330', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(113, 10, 8, 'color', 'Red', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(114, 10, 9, 'weight', '115', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(115, 10, 10, 'manufacturer', 'UK', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(116, 10, 11, 'availablecolor', 'White,Black,Red,Blue,Silver,Gold', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(117, 10, 12, 'operatingsystem', 'Windows-10', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(118, 10, 13, 'ram', '8GB', '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(119, 11, 1, 'name', 'Xiaomi Mi Max 2', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(120, 11, 2, 'description', 'RAM 4GB/ ROM 64GB, Screen Size, 6.44" IPS LCD 1080 x 1920 pixels (~342 ppi pixel density), Dimention 174.1 x 88.7 x 7.6 mm, camera 12/5mp', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(121, 11, 3, 'stock', 'In stock', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(122, 11, 4, 'short_description', 'Nice for playing 3D games', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(123, 11, 5, 'visibility', 'yes', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(124, 11, 6, 'sku', 'Xiaomi Mi Max 2', '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(125, 11, 7, 'price', '25000', '2017-10-10 22:11:10', '2017-10-10 22:11:10'),
(126, 11, 8, 'color', 'white, black, orange', '2017-10-10 22:11:10', '2017-10-10 22:11:10'),
(127, 11, 9, 'weight', '172gm', '2017-10-10 22:11:10', '2017-10-10 22:11:10'),
(128, 11, 10, 'manufacturer', 'China', '2017-10-10 22:11:10', '2017-10-10 22:11:10'),
(129, 11, 11, 'availablecolor', 'White,Black,Gray', '2017-10-10 22:11:10', '2017-10-10 22:11:10'),
(130, 12, 1, 'name', 'HP Pavilion 725n-us Desktop', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(131, 12, 2, 'description', 'HP provides a model name on the front of the desktop computer, but this name or number might not be sufficient to get proper support for your computer. These names or numbers often represent a series of many desktop computers that look similar, but have different options and parts. For example, HP has produced over one hundred types', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(132, 12, 3, 'stock', 'In stock', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(133, 12, 4, 'short_description', 'HP provides a model name on the front of the desktop computer, but this name or number might not be sufficient to get proper support for your computer.', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(134, 12, 5, 'visibility', 'yes', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(135, 12, 6, 'sku', 'Pavilion725n-us', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(136, 12, 7, 'price', '41000', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(137, 12, 8, 'color', 'Black', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(138, 12, 9, 'weight', '7', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(139, 12, 10, 'manufacturer', 'USA', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(140, 12, 11, 'availablecolor', 'Black,Blue,Silver,Gray', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(141, 12, 12, 'operatingsystem', 'Windows-10', '2017-10-10 22:12:06', '2017-10-10 22:12:06'),
(142, 12, 13, 'ram', '8 GB', '2017-10-10 22:12:07', '2017-10-10 22:12:07'),
(143, 13, 1, 'name', 'iphone-7', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(144, 13, 2, 'description', 'This is a smart phone.', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(145, 13, 3, 'stock', 'In stock', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(146, 13, 4, 'short_description', 'This is a smart phone.high pixel camera, 16 GB phone memory etc.', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(147, 13, 5, 'visibility', 'no', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(148, 13, 6, 'sku', 'iphone-7', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(149, 13, 7, 'price', '21000', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(150, 13, 8, 'color', 'white', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(151, 13, 9, 'weight', '1.5', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(152, 13, 10, 'manufacturer', 'Made in Bangladesh', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(153, 13, 11, 'availablecolor', 'White,Black,Silver,Gold', '2017-10-10 22:14:09', '2017-10-10 22:14:09'),
(154, 14, 1, 'name', 'LG G4', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(155, 14, 2, 'description', 'Ram 3GB, Rom 32GB, Camera : 13mp/5mp', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(156, 14, 3, 'stock', 'In stock', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(157, 14, 4, 'short_description', 'Nice Phone for Camera', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(158, 14, 5, 'visibility', 'yes', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(159, 14, 6, 'sku', 'LG G4', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(160, 14, 7, 'price', '25000', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(161, 14, 8, 'color', 'Merun, Gray, Black', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(162, 14, 9, 'weight', '170gm', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(163, 14, 10, 'manufacturer', 'South Korea', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(164, 14, 11, 'availablecolor', 'Black,Green,Gray', '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(165, 15, 1, 'name', 'iphone-7', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(166, 15, 2, 'description', 'This is smart phone', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(167, 15, 3, 'stock', 'In stock', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(168, 15, 4, 'short_description', 'This is smart phone.high pixel camera.', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(169, 15, 5, 'visibility', 'yes', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(170, 15, 6, 'sku', 'iphone-7', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(171, 15, 7, 'price', '21000', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(172, 15, 8, 'color', 'white', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(173, 15, 9, 'weight', '1.2', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(174, 15, 10, 'manufacturer', 'Made in Bangladesh', '2017-10-10 22:22:21', '2017-10-10 22:22:21'),
(175, 15, 11, 'availablecolor', 'White,Black,Red,Silver,Gold', '2017-10-10 22:22:21', '2017-10-10 22:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `attributeset_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `attributeset_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2017-10-07 01:05:45', '2017-10-07 01:05:45'),
(2, 2, 2, '2017-10-07 01:27:01', '2017-10-07 01:27:01'),
(3, 1, 2, '2017-10-09 23:26:26', '2017-10-09 23:26:26'),
(4, 1, 4, '2017-10-10 21:56:05', '2017-10-10 21:56:05'),
(5, 2, 7, '2017-10-10 21:56:40', '2017-10-10 21:56:40'),
(6, 1, 6, '2017-10-10 21:56:55', '2017-10-10 21:56:55'),
(7, 2, 7, '2017-10-10 21:59:55', '2017-10-10 21:59:55'),
(8, 1, 4, '2017-10-10 22:01:49', '2017-10-10 22:01:49'),
(9, 1, 6, '2017-10-10 22:02:59', '2017-10-10 22:02:59'),
(10, 2, 7, '2017-10-10 22:04:51', '2017-10-10 22:04:51'),
(11, 1, 6, '2017-10-10 22:11:09', '2017-10-10 22:11:09'),
(12, 2, 7, '2017-10-10 22:12:05', '2017-10-10 22:12:05'),
(13, 1, 8, '2017-10-10 22:14:08', '2017-10-10 22:14:08'),
(14, 1, 6, '2017-10-10 22:20:12', '2017-10-10 22:20:12'),
(15, 1, 8, '2017-10-10 22:22:20', '2017-10-10 22:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_pageid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profileimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `description`, `address`, `tel1`, `tel2`, `branch`, `email`, `fb_pageid`, `contact_person`, `coverimage`, `profileimage`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PTTC Shop', 'PTTC Shop', 'Hallmark Building, Taltola', '01911123456', '01711123456', 'Taltola', 'shop@gmail.com', 'asdfwer', 'Mr. Ahmed Ali', 'E:\\xampp\\tmp\\php1835.tmp', 'E:\\xampp\\tmp\\php1846.tmp', 2, '2017-10-09 22:34:06', '2017-10-09 22:34:06'),
(2, 'MoBiLe Shop', 'Please confirm your mobile model case availability before placing the order', 'Section-6, Block-C, Road-13, Plot-5\r\nMirpur, Dhaka-1216.', '01758292929', '01677713097', 'Mirpur, Dhaka', 'ssadi1107@gmail.com', 'https://www.facebook.com/sheikh.sadi.5205', 'Sheikh Sadi', 'E:\\xampp\\tmp\\phpA3C2.tmp', 'E:\\xampp\\tmp\\phpA3C3.tmp', 6, '2017-10-10 21:47:40', '2017-10-10 21:47:40'),
(3, 'Computer House', 'We fulfill the needs of our customers\r\nwith a focus on the three pillars of our company.', 'IDB Bhaban (4th Floor) E/8-A, Begum Rokeya Sarani, Dhaka 1207', '+8801916409860', '+8801674491876', 'Multiplan Centre,Elephant Road.', 'palash123@gmail.com', 'computerhouse_bd123', 'MD.MEHEDI HASAN', 'E:\\xampp\\tmp\\php30E5.tmp', 'E:\\xampp\\tmp\\php30F6.tmp', 4, '2017-10-10 21:48:16', '2017-10-10 21:48:16'),
(4, 'Kazi Mehedy Hasan', 'Corporate Division, Physical Shop Division, Online Shop Division At Dospara, we will continue to offer customers "new digital lifestyles". ... Dospara Physical Shop Division. ... We are engaged in sale and buy-back businesses of used PCs, smartphones, PC parts, digital cameras,', 'East Kazipara, Kafrul, dhaka-1216', '159357', '123456', 'Dhaka', 'mehedy19@gmail.com', '12345', '159357', 'E:\\xampp\\tmp\\php2C27.tmp', 'E:\\xampp\\tmp\\php2C37.tmp', 7, '2017-10-10 21:50:26', '2017-10-10 21:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_group` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `user_group`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$4rUFR.s.roao.OQvr8La5uhxludUTx79AEbu3.KkwTZLUaGFkCV8.', 'PcTb5HYghpKO7GyR1zDqg23Qto5BYvAjmGeEjiWCRMFjkqhENVqXkKc7yRsm', 2, '2017-10-07 00:22:30', '2017-10-07 00:22:30'),
(2, 'shop', 'shop@gmail.com', '$2y$10$wrgbofSaAQBsiSj/ZzW4Xu94etmmkIs8B9HXF2ESZxRyJo9guV7s6', 'MWBykQaBOxhV39dMQb1VRf7gFmGMvaWAKv5yJt6hE495BxVUeRx4PwkmL9I8', 1, '2017-10-07 00:23:14', '2017-10-07 00:23:14'),
(3, 'user', 'user@gmail.com', '$2y$10$CYdE.4m4HvDjX70QZ/FwZenlNxHZVgbQ8NVdv9mjWNGX2fsk1Zebm', 'HnitYHbKDMLhN36YzfEi8J6LRNGao5DWEv7QEeI8JDELMQWqU6xVXaZ5XONR', 0, '2017-10-07 00:24:08', '2017-10-07 00:24:08'),
(4, 'MD.MEHEDI HASAN', 'palash123@gmail.com', '$2y$10$TaVMxeJ.EunP6bvoBVMTZO0X9o3KzKHxlfPb9nNtZFiABB0QJrLpK', 'eiXuuTgg9o41AXI1AJwFDBurlehA4eANu13SghhUu4MtvSHDpCAEQK758BL4', 1, '2017-10-10 21:38:49', '2017-10-10 21:38:49'),
(5, 'asdasd', 'asdasd@gmail.com', '$2y$10$EUVy9.kF2B.aRE6DRGyqhe0/dxapQTb3pKSzxGnHpNWY/EY/4n0gK', '0UwWJhluyoaNKuUVhsHU5YaKuStXSvYvvrLfD4QBpQpaqY53geHQ21ivhoQn', 1, '2017-10-10 21:39:38', '2017-10-10 21:39:38'),
(6, 'SADI ASSOCIATES', 'ssadi1107@gmail.com', '$2y$10$WNeGZaZl.GyaBz5.q0pgxOB5AyhU4oH1PqqakUcpzHuJjJBxpUo.2', '6lrSWT5PRgbZi9KSg8aiuWwXMk1OmDAM9egdqaUTrFsstQyRCkENffzT2sjC', 1, '2017-10-10 21:40:18', '2017-10-10 21:40:18'),
(7, 'Mehedy', 'mehedy19@gmail.com', '$2y$10$fXnKCPT6vZq6Yx7mXBegK..N6zcJJBNS6AKQalHQ1qPavVi0kcXAO', 'zeiUczpkdc8cwIKEOGsaq8ZoN2d96MBSPM7OZgUDKLLzQXHRiNDWEeC08TKC', 1, '2017-10-10 21:41:02', '2017-10-10 21:41:02'),
(8, 'Kamal Hossain', 'kamal01732292726@gmail.com', '$2y$10$Kn227J2vdHsMrPNBGvinh.eTOPjdewoAoIQg.GKIgdQsI4hDtwkti', NULL, 1, '2017-10-10 21:41:27', '2017-10-10 21:41:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributesets`
--
ALTER TABLE `attributesets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributesets_name_unique` (`name`);

--
-- Indexes for table `attribute_attributeset`
--
ALTER TABLE `attribute_attributeset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_attributeset_attributeset_id_foreign` (`attributeset_id`),
  ADD KEY `attribute_attributeset_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

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
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productimages_product_id_foreign` (`product_id`);

--
-- Indexes for table `productmetas`
--
ALTER TABLE `productmetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productmetas_product_id_foreign` (`product_id`),
  ADD KEY `productmetas_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_attributeset_id_foreign` (`attributeset_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `attributesets`
--
ALTER TABLE `attributesets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attribute_attributeset`
--
ALTER TABLE `attribute_attributeset`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `productmetas`
--
ALTER TABLE `productmetas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_attributeset`
--
ALTER TABLE `attribute_attributeset`
  ADD CONSTRAINT `attribute_attributeset_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_attributeset_attributeset_id_foreign` FOREIGN KEY (`attributeset_id`) REFERENCES `attributesets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productimages`
--
ALTER TABLE `productimages`
  ADD CONSTRAINT `productimages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productmetas`
--
ALTER TABLE `productmetas`
  ADD CONSTRAINT `productmetas_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productmetas_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_attributeset_id_foreign` FOREIGN KEY (`attributeset_id`) REFERENCES `attributesets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
