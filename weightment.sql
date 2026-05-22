-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2026 at 07:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weightment`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Dell', '1', '1', '2024-12-04 02:35:15', '2025-10-03 05:15:04'),
(2, 'HP', '1', '1', '2024-12-04 02:35:23', '2025-10-03 05:15:02'),
(3, '3 Star', '1', '0', '2025-09-16 10:07:41', '2025-10-03 05:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:5:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:10:\"group_name\";s:1:\"c\";s:4:\"name\";s:1:\"d\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:56:{i:0;a:5:{s:1:\"a\";i:56;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:14:\"create_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:5:{s:1:\"a\";i:57;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:12:\"view_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:5:{s:1:\"a\";i:58;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:14:\"update_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:5:{s:1:\"a\";i:59;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:14:\"delete_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:5:{s:1:\"a\";i:60;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:13:\"print_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:5:{s:1:\"a\";i:61;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:23:\"create_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:5:{s:1:\"a\";i:62;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:21:\"view_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:5:{s:1:\"a\";i:63;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:23:\"update_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:5:{s:1:\"a\";i:64;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:23:\"delete_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:5:{s:1:\"a\";i:65;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:22:\"print_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:5:{s:1:\"a\";i:106;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:11:\"create_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:5:{s:1:\"a\";i:107;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:9:\"view_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:5:{s:1:\"a\";i:108;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:11:\"update_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:5:{s:1:\"a\";i:109;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:11:\"delete_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:5:{s:1:\"a\";i:110;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:10:\"print_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:5:{s:1:\"a\";i:111;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:11:\"create_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:5:{s:1:\"a\";i:112;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:9:\"view_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:5:{s:1:\"a\";i:113;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:11:\"update_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:5:{s:1:\"a\";i:114;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:11:\"delete_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:5:{s:1:\"a\";i:115;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:10:\"print_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:5:{s:1:\"a\";i:116;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:15:\"change_password\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:5:{s:1:\"a\";i:117;s:1:\"b\";s:18:\"Roles & Permission\";s:1:\"c\";s:21:\"view_roles_permission\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:5:{s:1:\"a\";i:118;s:1:\"b\";s:18:\"Roles & Permission\";s:1:\"c\";s:23:\"update_roles_permission\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:5:{s:1:\"a\";i:119;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:11:\"all_reports\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:5:{s:1:\"a\";i:126;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:23:\"expense_report_by_month\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:5:{s:1:\"a\";i:127;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:22:\"profit_and_loss_report\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:5:{s:1:\"a\";i:137;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:11:\"report_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:5:{s:1:\"a\";i:138;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:12:\"expense_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:5:{s:1:\"a\";i:139;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:12:\"setting_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:5:{s:1:\"a\";i:140;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:25:\"roles_and_permission_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:5:{s:1:\"a\";i:141;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:20:\"general_setting_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:5:{s:1:\"a\";i:142;s:1:\"b\";s:4:\"Sale\";s:1:\"c\";s:9:\"view_sale\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:32;a:5:{s:1:\"a\";i:143;s:1:\"b\";s:4:\"Sale\";s:1:\"c\";s:11:\"create_sale\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:33;a:5:{s:1:\"a\";i:145;s:1:\"b\";s:4:\"Sale\";s:1:\"c\";s:11:\"update_sale\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:5:{s:1:\"a\";i:146;s:1:\"b\";s:4:\"Sale\";s:1:\"c\";s:11:\"delete_sale\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:5:{s:1:\"a\";i:147;s:1:\"b\";s:8:\"Purchase\";s:1:\"c\";s:13:\"view_purchase\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:5:{s:1:\"a\";i:148;s:1:\"b\";s:8:\"Purchase\";s:1:\"c\";s:15:\"create_purchase\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:5:{s:1:\"a\";i:149;s:1:\"b\";s:8:\"Purchase\";s:1:\"c\";s:15:\"update_purchase\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:5:{s:1:\"a\";i:150;s:1:\"b\";s:8:\"Purchase\";s:1:\"c\";s:15:\"delete_purchase\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:5:{s:1:\"a\";i:151;s:1:\"b\";s:11:\"Sale Return\";s:1:\"c\";s:16:\"view_sale_return\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:5:{s:1:\"a\";i:152;s:1:\"b\";s:11:\"Sale Return\";s:1:\"c\";s:18:\"create_sale_return\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:5:{s:1:\"a\";i:153;s:1:\"b\";s:11:\"Sale Return\";s:1:\"c\";s:18:\"update_sale_return\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:5:{s:1:\"a\";i:154;s:1:\"b\";s:11:\"Sale Return\";s:1:\"c\";s:18:\"delete_sale_return\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:5:{s:1:\"a\";i:155;s:1:\"b\";s:8:\"Customer\";s:1:\"c\";s:13:\"view_customer\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:5:{s:1:\"a\";i:156;s:1:\"b\";s:8:\"Customer\";s:1:\"c\";s:15:\"create_customer\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:5:{s:1:\"a\";i:157;s:1:\"b\";s:8:\"Customer\";s:1:\"c\";s:15:\"update_customer\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:5:{s:1:\"a\";i:158;s:1:\"b\";s:8:\"Customer\";s:1:\"c\";s:15:\"delete_customer\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:5:{s:1:\"a\";i:159;s:1:\"b\";s:8:\"Supplier\";s:1:\"c\";s:13:\"view_supplier\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:5:{s:1:\"a\";i:160;s:1:\"b\";s:8:\"Supplier\";s:1:\"c\";s:15:\"create_supplier\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:5:{s:1:\"a\";i:161;s:1:\"b\";s:8:\"Supplier\";s:1:\"c\";s:15:\"update_supplier\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:5:{s:1:\"a\";i:162;s:1:\"b\";s:8:\"Supplier\";s:1:\"c\";s:15:\"delete_supplier\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:5:{s:1:\"a\";i:163;s:1:\"b\";s:7:\"Product\";s:1:\"c\";s:12:\"view_product\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:5:{s:1:\"a\";i:164;s:1:\"b\";s:7:\"Product\";s:1:\"c\";s:14:\"create_product\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:5:{s:1:\"a\";i:165;s:1:\"b\";s:7:\"Product\";s:1:\"c\";s:14:\"update_product\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:5:{s:1:\"a\";i:166;s:1:\"b\";s:7:\"Product\";s:1:\"c\";s:14:\"delete_product\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:5:{s:1:\"a\";i:167;s:1:\"b\";s:5:\"Stock\";s:1:\"c\";s:10:\"view_stock\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"c\";s:11:\"Super Admin\";s:1:\"d\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"c\";s:8:\"Operator\";s:1:\"d\";s:3:\"web\";}}}', 1776590753);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 'Wash&Wear', '1', '0', '2024-12-04 02:34:10', '2025-10-03 05:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `urf` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `phone_1` varchar(255) DEFAULT NULL,
  `phone_2` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `cast` varchar(255) DEFAULT NULL,
  `famous_name` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `temp_address` longtext DEFAULT NULL,
  `perm_address` longtext DEFAULT NULL,
  `special_note` longtext DEFAULT NULL,
  `cnic_front_image` varchar(255) DEFAULT NULL,
  `cnic_back_image` varchar(255) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `status` enum('Normal','Hard','Defaulter') NOT NULL DEFAULT 'Normal',
  `customer_type` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cus_name`, `father_name`, `urf`, `cnic`, `phone_1`, `phone_2`, `age`, `cast`, `famous_name`, `occupation`, `temp_address`, `perm_address`, `special_note`, `cnic_front_image`, `cnic_back_image`, `is_active`, `status`, `customer_type`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Retail Customer', 'Ahmad', 'Ali', '3310527333161', '03220622406', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1843432640078569.jpg', '1817493169125790.jpg', '1', 'Normal', 'retail', NULL, NULL, NULL, '2024-12-04 02:15:55', '2025-10-03 05:45:08'),
(11, 'Whole Sale Customer', 'Ahmad', 'whole', '3310590075417', '03220622443', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1844957200273735.jpg', NULL, '1', 'Normal', 'whole_sale', NULL, NULL, NULL, '2025-10-01 10:40:36', '2025-10-03 05:58:47'),
(13, 'Super Whole Sale Customer', 'Ahmad', 'Super', '3310590075417', '03220622404', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1844957167766294.jpg', NULL, '1', 'Normal', 'super_whole_sale', NULL, NULL, NULL, '2025-10-01 23:34:40', '2025-10-03 05:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer_ledgers`
--

CREATE TABLE `customer_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` bigint(20) DEFAULT NULL,
  `sale_id` bigint(20) DEFAULT NULL,
  `sale_return_id` int(20) DEFAULT NULL,
  `pro_id` varchar(20) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `pro_qty` varchar(255) DEFAULT NULL,
  `debit` decimal(8,2) DEFAULT NULL,
  `credit` decimal(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `transaction_type` enum('Open_balance','Sale','Sale_return','Payment Receive','Pay_return') NOT NULL DEFAULT 'Sale',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_ledgers`
--

INSERT INTO `customer_ledgers` (`id`, `cus_id`, `sale_id`, `sale_return_id`, `pro_id`, `date`, `detail`, `pro_qty`, `debit`, `credit`, `deleted_at`, `transaction_type`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(51, 2, 65, NULL, '11', '2025-10-03', NULL, '1', 550.00, 0.00, NULL, 'Sale', '2025-10-03 06:02:53', '2025-10-03 06:02:53', 3, 3),
(53, 11, 66, NULL, '11,11', '2025-10-03', NULL, '1,1', 1080.00, 0.00, NULL, 'Sale', '2025-10-03 06:15:09', '2025-10-03 06:15:09', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exp_date` date DEFAULT NULL,
  `exp_detail` varchar(255) DEFAULT NULL,
  `expense_cat_id` varchar(255) DEFAULT NULL,
  `long_detail` varchar(255) DEFAULT NULL,
  `total_amt` decimal(10,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exp_cat_name` varchar(255) NOT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_categories`
--

INSERT INTO `expense_categories` (`id`, `exp_cat_name`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'House', '1', NULL, '2025-01-07 14:15:31', '2025-01-07 14:15:31'),
(4, 'office', '1', NULL, '2025-01-07 14:15:40', '2025-01-07 14:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guaranters`
--

CREATE TABLE `guaranters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gur_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `urf` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `phone_1` varchar(255) DEFAULT NULL,
  `phone_2` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `cast` varchar(255) DEFAULT NULL,
  `famous_name` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `temp_address` longtext DEFAULT NULL,
  `perm_address` longtext DEFAULT NULL,
  `special_note` longtext DEFAULT NULL,
  `cnic_front_image` varchar(255) DEFAULT NULL,
  `cnic_back_image` varchar(255) DEFAULT NULL,
  `status` enum('Normal','Hard','Defaulter') NOT NULL DEFAULT 'Normal',
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guaranters`
--

INSERT INTO `guaranters` (`id`, `gur_name`, `father_name`, `urf`, `cnic`, `phone_1`, `phone_2`, `age`, `cast`, `famous_name`, `occupation`, `temp_address`, `perm_address`, `special_note`, `cnic_front_image`, `cnic_back_image`, `status`, `is_active`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Hammad Naseer', 'dd', 'dd', '54401-3812981-3', '03220622406', 'dd', 'dd', 'dd', 'dd', 'ddd', 'Post Office Khas Adda Mureedwala', 'dd', 'ddd', '1817495059556375.jpg', '1817495059561340.jpg', 'Normal', '1', NULL, NULL, NULL, '2024-12-04 02:45:06', '2024-12-04 02:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_28_141015_create_permission_tables', 1),
(5, '2024_07_28_150209_create_settings_table', 1),
(6, '2024_08_23_053238_create_permission_groups_table', 1),
(7, '2024_10_24_074843_create_customers_table', 1),
(8, '2024_10_24_134648_create_suppliers_table', 1),
(9, '2024_10_24_153351_create_categories_table', 1),
(10, '2024_10_24_161208_create_brands_table', 1),
(11, '2024_10_24_172023_create_guaranters_table', 1),
(12, '2024_10_24_180344_create_products_table', 1),
(13, '2024_10_25_120442_create_purchases_table', 1),
(14, '2024_10_26_122009_create_purchase_details_table', 1),
(15, '2024_10_26_131918_create_supplier_ledgers_table', 1),
(16, '2024_10_28_121823_create_bike_models_table', 1),
(17, '2024_10_29_050207_create_purchase_returns_table', 1),
(18, '2024_10_29_051743_create_purchase_return_details_table', 1),
(19, '2024_10_30_100136_create_expense_categories_table', 1),
(20, '2024_10_30_101121_create_expenses_table', 1),
(21, '2024_10_30_122336_create_stocks_table', 1),
(22, '2024_12_03_074720_create_customer_ledgers_table', 1),
(23, '2025_01_05_181914_create_sales_table', 2),
(24, '2025_01_05_185601_create_sale_details_table', 2),
(25, '2025_01_10_144736_create_sale_returns_table', 3),
(26, '2025_01_10_144808_create_sale_return_details_table', 3),
(27, '2025_01_10_171750_create_opening_stocks_table', 4),
(28, '2025_01_10_171815_create_opening_stock_details_table', 4),
(29, '2025_10_01_101027_create_units_table', 5),
(30, '2026_02_18_180850_create_weightments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `opening_stocks`
--

CREATE TABLE `opening_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `grand_total` decimal(8,2) DEFAULT NULL,
  `total_qty` decimal(8,2) DEFAULT NULL,
  `purchase_total` decimal(8,2) DEFAULT NULL,
  `sale_total` decimal(8,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opening_stocks`
--

INSERT INTO `opening_stocks` (`id`, `date`, `detail`, `grand_total`, `total_qty`, `purchase_total`, `sale_total`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(3, '2025-01-11', 'all test', 4050.00, NULL, NULL, NULL, '1', '0', '2025-01-11 04:04:04', '2025-01-11 10:03:28'),
(4, '2025-01-11', NULL, 4094.00, NULL, NULL, NULL, '1', '0', '2025-01-11 10:20:22', '2025-01-11 10:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `opening_stock_details`
--

CREATE TABLE `opening_stock_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `open_stock_id` bigint(20) DEFAULT NULL,
  `pro_id` bigint(20) DEFAULT NULL,
  `purchase_price` decimal(8,2) DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `pro_qty` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `pur_total` decimal(8,2) DEFAULT NULL,
  `sale_total` decimal(8,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_delete` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opening_stock_details`
--

INSERT INTO `opening_stock_details` (`id`, `open_stock_id`, `pro_id`, `purchase_price`, `sale_price`, `pro_qty`, `date`, `pur_total`, `sale_total`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(12, 3, 2, 50.00, 100.00, '1', '2025-01-11', 50.00, NULL, '1', '0', '2025-01-11 10:03:28', '2025-01-11 10:03:28'),
(13, 3, 3, 2000.00, 5000.00, '1', '2025-01-11', 2000.00, NULL, '1', '0', '2025-01-11 10:03:28', '2025-01-11 10:03:28'),
(14, 3, 4, 2000.00, 3000.00, '1', '2025-01-11', 2000.00, NULL, '1', '0', '2025-01-11 10:03:28', '2025-01-11 10:03:28'),
(15, 4, 1, 22.00, 250.00, '2', '2025-01-11', 44.00, NULL, '1', '0', '2025-01-11 10:20:22', '2025-01-11 10:20:22'),
(16, 4, 3, 2000.00, 5000.00, '1', '2025-01-11', 2000.00, NULL, '1', '0', '2025-01-11 10:20:22', '2025-01-11 10:20:22'),
(17, 4, 2, 50.00, 100.00, '1', '2025-01-11', 50.00, NULL, '1', '0', '2025-01-11 10:20:22', '2025-01-11 10:20:22'),
(18, 4, 4, 2000.00, 3000.00, '1', '2025-01-11', 2000.00, NULL, '1', '0', '2025-01-11 10:20:22', '2025-01-11 10:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `group_name`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(56, 'Expense', 'create_expense', 'web', '2024-08-24 07:21:53', '2024-08-24 07:21:53'),
(57, 'Expense', 'view_expense', 'web', '2024-08-24 07:22:04', '2024-08-24 07:22:04'),
(58, 'Expense', 'update_expense', 'web', '2024-08-24 07:22:15', '2024-08-24 07:22:15'),
(59, 'Expense', 'delete_expense', 'web', '2024-08-24 07:22:26', '2024-08-24 07:22:26'),
(60, 'Expense', 'print_expense', 'web', '2024-08-24 07:22:41', '2024-08-24 07:22:41'),
(61, 'Expense Categories', 'create_expense_category', 'web', '2024-08-24 07:23:34', '2024-08-24 07:23:34'),
(62, 'Expense Categories', 'view_expense_category', 'web', '2024-08-24 07:23:42', '2024-08-24 07:23:42'),
(63, 'Expense Categories', 'update_expense_category', 'web', '2024-08-24 07:23:52', '2024-08-24 07:23:52'),
(64, 'Expense Categories', 'delete_expense_category', 'web', '2024-08-24 07:24:04', '2024-08-24 07:24:04'),
(65, 'Expense Categories', 'print_expense_category', 'web', '2024-08-24 07:26:41', '2024-08-24 07:26:41'),
(106, 'Banks', 'create_bank', 'web', '2024-08-24 10:26:20', '2024-08-24 10:26:20'),
(107, 'Banks', 'view_bank', 'web', '2024-08-24 10:26:33', '2024-08-24 10:26:33'),
(108, 'Banks', 'update_bank', 'web', '2024-08-24 10:26:51', '2024-08-24 10:26:51'),
(109, 'Banks', 'delete_bank', 'web', '2024-08-24 10:27:05', '2024-08-24 10:27:05'),
(110, 'Banks', 'print_bank', 'web', '2024-08-24 10:27:16', '2024-08-24 10:27:16'),
(111, 'Users', 'create_user', 'web', '2024-08-24 10:40:57', '2024-08-24 10:40:57'),
(112, 'Users', 'view_user', 'web', '2024-08-24 10:41:08', '2024-08-24 10:41:08'),
(113, 'Users', 'update_user', 'web', '2024-08-24 10:41:20', '2024-08-24 10:41:20'),
(114, 'Users', 'delete_user', 'web', '2024-08-24 10:41:30', '2024-08-24 10:41:30'),
(115, 'Users', 'print_user', 'web', '2024-08-24 10:42:01', '2024-08-24 10:42:01'),
(116, 'Users', 'change_password', 'web', '2024-08-24 10:43:27', '2024-08-24 10:43:27'),
(117, 'Roles & Permission', 'view_roles_permission', 'web', '2024-08-24 10:45:45', '2024-08-24 10:45:45'),
(118, 'Roles & Permission', 'update_roles_permission', 'web', '2024-08-24 10:45:55', '2024-08-24 10:45:55'),
(119, 'Reports', 'all_reports', 'web', '2024-08-24 10:47:41', '2025-10-03 05:07:28'),
(126, 'Reports', 'expense_report_by_month', 'web', '2024-08-24 10:50:49', '2024-08-24 10:50:49'),
(127, 'Reports', 'profit_and_loss_report', 'web', '2024-08-24 10:51:06', '2024-08-24 10:51:06'),
(137, 'Menu', 'report_menu', 'web', '2024-08-24 10:56:25', '2024-08-24 10:56:25'),
(138, 'Menu', 'expense_menu', 'web', '2024-08-24 10:56:38', '2024-08-24 10:56:38'),
(139, 'Menu', 'setting_menu', 'web', '2024-08-24 10:56:56', '2024-08-24 10:56:56'),
(140, 'Menu', 'roles_and_permission_menu', 'web', '2024-08-24 10:57:25', '2024-08-24 10:57:25'),
(141, 'Menu', 'general_setting_menu', 'web', '2024-08-24 10:58:00', '2024-08-24 10:58:00'),
(142, 'Sale', 'view_sale', 'web', '2025-10-02 02:07:56', '2025-10-02 02:07:56'),
(143, 'Sale', 'create_sale', 'web', '2025-10-02 02:08:11', '2025-10-02 02:08:11'),
(145, 'Sale', 'update_sale', 'web', '2025-10-02 02:08:29', '2025-10-02 02:08:29'),
(146, 'Sale', 'delete_sale', 'web', '2025-10-02 02:08:39', '2025-10-02 02:08:39'),
(147, 'Purchase', 'view_purchase', 'web', '2025-10-03 04:52:05', '2025-10-03 04:52:05'),
(148, 'Purchase', 'create_purchase', 'web', '2025-10-03 04:52:25', '2025-10-03 04:52:25'),
(149, 'Purchase', 'update_purchase', 'web', '2025-10-03 04:52:36', '2025-10-03 04:52:36'),
(150, 'Purchase', 'delete_purchase', 'web', '2025-10-03 04:52:48', '2025-10-03 04:52:48'),
(151, 'Sale Return', 'view_sale_return', 'web', '2025-10-03 04:53:46', '2025-10-03 04:53:46'),
(152, 'Sale Return', 'create_sale_return', 'web', '2025-10-03 04:54:02', '2025-10-03 04:54:02'),
(153, 'Sale Return', 'update_sale_return', 'web', '2025-10-03 04:54:18', '2025-10-03 04:54:18'),
(154, 'Sale Return', 'delete_sale_return', 'web', '2025-10-03 04:54:29', '2025-10-03 04:54:29'),
(155, 'Customer', 'view_customer', 'web', '2025-10-03 04:56:02', '2025-10-03 04:56:02'),
(156, 'Customer', 'create_customer', 'web', '2025-10-03 04:56:18', '2025-10-03 04:56:18'),
(157, 'Customer', 'update_customer', 'web', '2025-10-03 04:56:31', '2025-10-03 04:56:31'),
(158, 'Customer', 'delete_customer', 'web', '2025-10-03 04:56:40', '2025-10-03 04:56:40'),
(159, 'Supplier', 'view_supplier', 'web', '2025-10-03 04:57:26', '2025-10-03 04:57:26'),
(160, 'Supplier', 'create_supplier', 'web', '2025-10-03 04:57:37', '2025-10-03 04:57:37'),
(161, 'Supplier', 'update_supplier', 'web', '2025-10-03 04:57:47', '2025-10-03 04:57:47'),
(162, 'Supplier', 'delete_supplier', 'web', '2025-10-03 04:58:34', '2025-10-03 04:58:34'),
(163, 'Product', 'view_product', 'web', '2025-10-03 05:01:26', '2025-10-03 05:01:26'),
(164, 'Product', 'create_product', 'web', '2025-10-03 05:01:38', '2025-10-03 05:01:38'),
(165, 'Product', 'update_product', 'web', '2025-10-03 05:01:50', '2025-10-03 05:01:50'),
(166, 'Product', 'delete_product', 'web', '2025-10-03 05:01:59', '2025-10-03 05:01:59'),
(167, 'Stock', 'view_stock', 'web', '2025-10-03 05:03:50', '2025-10-03 05:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_group_name` varchar(255) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `permission_group_name`, `is_deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(13, 'Expense', '0', 1, 1, '2024-08-24 07:21:30', '2024-08-24 07:21:30'),
(14, 'Expense Categories', '0', 1, 1, '2024-08-24 07:23:18', '2024-08-24 07:23:18'),
(23, 'Banks', '0', 1, 1, '2024-08-24 10:26:06', '2024-08-24 10:26:06'),
(24, 'Users', '0', 1, 1, '2024-08-24 10:40:43', '2024-08-24 10:40:43'),
(25, 'Roles & Permission', '0', 1, 1, '2024-08-24 10:45:20', '2024-08-24 10:45:20'),
(26, 'Reports', '0', 1, 1, '2024-08-24 10:47:13', '2024-08-24 10:47:13'),
(27, 'Menu', '0', 1, 1, '2024-08-24 10:53:47', '2024-08-24 10:53:47'),
(28, 'Sale', '0', 3, 3, '2025-10-02 02:07:30', '2025-10-02 02:07:30'),
(29, 'Purchase', '0', 3, 3, '2025-10-03 04:51:55', '2025-10-03 04:51:55'),
(30, 'Sale Return', '0', 3, 3, '2025-10-03 04:53:19', '2025-10-03 04:53:19'),
(31, 'Customer', '0', 3, 3, '2025-10-03 04:55:42', '2025-10-03 04:55:42'),
(32, 'Supplier', '0', 3, 3, '2025-10-03 04:57:11', '2025-10-03 04:57:11'),
(33, 'Product', '0', 3, 3, '2025-10-03 05:01:05', '2025-10-03 05:01:05'),
(34, 'Stock', '0', 3, 3, '2025-10-03 05:03:42', '2025-10-03 05:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `pro_modal` varchar(255) DEFAULT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `unit_id` bigint(20) DEFAULT NULL,
  `purchase_price` decimal(8,2) DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `other_pro_detail` varchar(255) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_modal`, `cat_id`, `brand_id`, `unit_id`, `purchase_price`, `sale_price`, `other_pro_detail`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(11, 'Nobel Suiting', '2025', 2, 3, 1, NULL, NULL, 'Imported', '1', NULL, '2025-10-01 06:29:52', '2025-10-03 05:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `pur_detail` varchar(255) DEFAULT NULL,
  `grand_total` decimal(8,2) DEFAULT NULL,
  `paid_amount` decimal(8,2) DEFAULT NULL,
  `remain_amount` decimal(8,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) DEFAULT NULL,
  `pro_id` bigint(20) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `purchase_price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `sale_price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `whole_sale` decimal(15,2) NOT NULL DEFAULT 0.00,
  `super_whole_sale` decimal(15,2) NOT NULL DEFAULT 0.00,
  `batch_no` text DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `pro_qty` varchar(255) DEFAULT NULL,
  `sale_qty` int(11) NOT NULL DEFAULT 0,
  `total` decimal(15,2) NOT NULL DEFAULT 0.00,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `pro_id`, `date`, `purchase_price`, `sale_price`, `whole_sale`, `super_whole_sale`, `batch_no`, `unit`, `pro_qty`, `sale_qty`, `total`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(157, 53, 11, '2025-10-03', 500.00, 550.00, 530.00, 520.00, '457692', 'Meter', '100', 1, 50000.00, '1', '0', '2025-10-03 06:08:12', '2025-10-03 06:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_returns`
--

CREATE TABLE `purchase_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `sub_total` decimal(8,2) DEFAULT NULL,
  `red_in_per` decimal(8,2) DEFAULT NULL,
  `red_in_amo` decimal(8,2) DEFAULT NULL,
  `grand_total` decimal(8,2) DEFAULT NULL,
  `receive_amount` decimal(8,2) DEFAULT NULL,
  `pending_amount` decimal(8,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_returns`
--

INSERT INTO `purchase_returns` (`id`, `supplier_id`, `date`, `detail`, `sub_total`, `red_in_per`, `red_in_amo`, `grand_total`, `receive_amount`, `pending_amount`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(7, 1, '2025-01-08', NULL, 130.00, NULL, NULL, 130.00, 130.00, 130.00, '1', 0, '2025-01-08 05:43:05', '2025-01-08 05:56:43'),
(9, 1, '2025-01-08', NULL, 72.00, NULL, NULL, 72.00, 72.00, 0.00, '1', 0, '2025-01-08 11:32:39', '2025-02-17 07:31:53'),
(10, 1, '2026-10-20', NULL, 4072.00, NULL, NULL, 4072.00, 0.00, 4072.00, '1', 0, '2025-01-08 11:42:12', '2025-01-08 11:42:12'),
(11, 1, '2025-01-08', NULL, 3665.00, NULL, NULL, 3665.00, 0.00, 3665.00, '1', 0, '2025-01-08 11:56:57', '2025-01-08 11:56:57'),
(12, 1, '2025-01-09', NULL, 4022.00, NULL, NULL, 4022.00, 0.00, 4022.00, '1', 0, '2025-01-09 06:51:40', '2025-01-09 08:21:48'),
(13, 1, '2025-01-09', NULL, 2000.00, NULL, NULL, 2000.00, 0.00, 2000.00, '1', 1, '2025-01-09 08:22:43', '2025-02-17 07:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_details`
--

CREATE TABLE `purchase_return_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pur_return_id` bigint(20) DEFAULT NULL,
  `pro_id` bigint(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `purchase_price` decimal(8,2) DEFAULT NULL,
  `return_price` decimal(8,2) DEFAULT NULL,
  `pro_qty` varchar(255) DEFAULT NULL,
  `red_percent` decimal(10,0) NOT NULL DEFAULT 0,
  `red_amt` decimal(10,0) NOT NULL DEFAULT 0,
  `total` decimal(8,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_return_details`
--

INSERT INTO `purchase_return_details` (`id`, `pur_return_id`, `pro_id`, `date`, `purchase_price`, `return_price`, `pro_qty`, `red_percent`, `red_amt`, `total`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 7, 2, '2025-01-07 19:00:00', 50.00, 50.00, '2', 10, 10, 90.00, '1', NULL, '2025-01-08 05:43:05', '2025-01-08 05:43:05'),
(6, 7, 1, '2025-01-07 19:00:00', 50.00, 22.00, '2', 10, 4, 40.00, '1', NULL, '2025-01-08 05:43:05', '2025-01-08 05:43:05'),
(7, 8, 1, '2025-01-07 19:00:00', 22.00, 22.00, '1', 0, 0, 22.00, '1', NULL, '2025-01-08 05:52:57', '2025-01-08 05:52:57'),
(8, 8, 2, '2025-01-07 19:00:00', 22.00, 50.00, '1', 0, 0, 50.00, '1', NULL, '2025-01-08 05:52:57', '2025-01-08 05:52:57'),
(11, 10, 1, '2026-10-19 19:00:00', 22.00, 22.00, '1', 0, 0, 22.00, '1', NULL, '2025-01-08 11:42:12', '2025-01-08 11:42:12'),
(12, 10, 2, '2026-10-19 19:00:00', 22.00, 50.00, '1', 0, 0, 50.00, '1', NULL, '2025-01-08 11:42:12', '2025-01-08 11:42:12'),
(13, 10, 3, '2026-10-19 19:00:00', 50.00, 2000.00, '1', 0, 0, 2000.00, '1', NULL, '2025-01-08 11:42:12', '2025-01-08 11:42:12'),
(14, 10, 4, '2026-10-19 19:00:00', 2000.00, 2000.00, '1', 0, 0, 2000.00, '1', NULL, '2025-01-08 11:42:12', '2025-01-08 11:42:12'),
(15, 11, 2, '2025-01-07 19:00:00', 50.00, 50.00, '1', 10, 5, 45.00, '1', NULL, '2025-01-08 11:56:57', '2025-01-08 11:56:57'),
(16, 11, 1, '2025-01-07 19:00:00', 22.00, 22.00, '1', 10, 2, 20.00, '1', NULL, '2025-01-08 11:56:57', '2025-01-08 11:56:57'),
(17, 11, 3, '2025-01-07 19:00:00', 2000.00, 2000.00, '1', 10, 200, 1800.00, '1', NULL, '2025-01-08 11:56:57', '2025-01-08 11:56:57'),
(18, 11, 4, '2025-01-07 19:00:00', 2000.00, 2000.00, '1', 10, 200, 1800.00, '1', NULL, '2025-01-08 11:56:57', '2025-01-08 11:56:57'),
(27, 12, 3, '2025-01-08 19:00:00', 2000.00, 2000.00, '2', 0, 0, 4000.00, '1', NULL, '2025-01-09 08:21:48', '2025-01-09 08:21:48'),
(28, 12, 1, '2025-01-08 19:00:00', 22.00, 22.00, '1', 0, 0, 22.00, '1', NULL, '2025-01-09 08:21:48', '2025-01-09 08:21:48'),
(29, 13, 4, '2025-01-08 19:00:00', 2000.00, 2000.00, '1', 0, 0, 2000.00, '1', NULL, '2025-01-09 08:22:43', '2025-01-09 08:22:43'),
(30, 9, 1, '2025-01-07 19:00:00', 22.00, 22.00, '1', 0, 0, 22.00, '1', NULL, '2025-02-17 07:31:53', '2025-02-17 07:31:53'),
(31, 9, 2, '2025-01-07 19:00:00', 22.00, 50.00, '1', 0, 0, 50.00, '1', NULL, '2025-02-17 07:31:53', '2025-02-17 07:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2024-08-14 11:14:19', '2024-08-14 11:14:33'),
(2, 'Admin', 'web', '2024-08-14 11:14:38', '2024-08-14 11:14:38'),
(3, 'Operator', 'web', '2024-08-14 11:15:02', '2024-08-14 11:15:02'),
(4, 'Cashier', 'web', '2024-08-14 11:15:08', '2025-09-16 08:03:52'),
(7, 'Waiter', 'web', '2025-10-13 06:35:49', '2025-10-13 06:35:49'),
(8, 'Sweeper', 'web', '2025-10-13 06:35:59', '2025-10-13 06:35:59'),
(9, 'Supplier', 'web', '2025-10-13 06:37:47', '2025-10-13 06:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(126, 1),
(127, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(142, 3),
(143, 1),
(143, 3),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `cus_id` bigint(20) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `dis_percent` decimal(10,2) DEFAULT 0.00,
  `dis_amount` decimal(10,2) DEFAULT 0.00,
  `grand_total` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `cus_id`, `detail`, `subtotal`, `dis_percent`, `dis_amount`, `grand_total`, `paid`, `due`, `is_active`, `is_deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(65, '2025-10-03', 2, NULL, 550.00, 0.00, 0.00, 550.00, 0.00, 550.00, '1', '0', 3, 3, '2025-10-03 06:02:53', '2025-10-03 06:02:53'),
(66, '2025-10-03', 11, NULL, 1080.00, 0.00, 0.00, 1080.00, 0.00, 1080.00, '1', '0', 3, 3, '2025-10-03 06:08:27', '2025-10-03 06:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` bigint(20) NOT NULL,
  `pro_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `purchase_price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `batch_no` text DEFAULT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `pro_qty` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `dis_per` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dis_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_details`
--

INSERT INTO `sale_details` (`id`, `sale_id`, `pro_id`, `date`, `purchase_price`, `batch_no`, `sale_price`, `pro_qty`, `unit`, `dis_per`, `dis_amount`, `total`, `paid`, `due`, `is_active`, `is_deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(220, 65, 11, '2025-10-03', 500.00, '457692', 550.00, '1', 'Meter', 0.00, 0.00, 550.00, NULL, NULL, '1', '0', 3, 3, '2025-10-03 06:02:53', '2025-10-03 06:02:53'),
(222, 66, 11, '2025-10-03', 0.00, '457692', 530.00, '1', 'Meter', 0.00, 0.00, 530.00, NULL, NULL, '1', '0', 3, 3, '2025-10-03 06:15:09', '2025-10-03 06:15:09'),
(223, 66, 11, '2025-10-03', 500.00, '457692', 550.00, '1', 'Meter', 0.00, 0.00, 550.00, NULL, NULL, '1', '0', 3, 3, '2025-10-03 06:15:09', '2025-10-03 06:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `sale_returns`
--

CREATE TABLE `sale_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` bigint(20) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `sub_total` decimal(8,2) DEFAULT NULL,
  `red_in_per` decimal(8,2) DEFAULT NULL,
  `red_in_amo` decimal(8,2) DEFAULT NULL,
  `grand_total` decimal(8,2) DEFAULT NULL,
  `receive_amount` decimal(8,2) DEFAULT NULL,
  `pending_amount` decimal(8,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_delete` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_returns`
--

INSERT INTO `sale_returns` (`id`, `cus_id`, `date`, `detail`, `sub_total`, `red_in_per`, `red_in_amo`, `grand_total`, `receive_amount`, `pending_amount`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(5, 2, '2025-01-10', 's', 12094.00, NULL, NULL, 12094.00, 65.00, 12029.00, '1', '1', '2025-01-10 10:34:15', '2025-10-03 05:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `sale_return_details`
--

CREATE TABLE `sale_return_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_return_id` bigint(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pro_id` bigint(20) DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `return_price` decimal(8,2) DEFAULT NULL,
  `pro_qty` varchar(255) DEFAULT NULL,
  `red_per` decimal(8,2) DEFAULT NULL,
  `red_amt` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_delete` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_return_details`
--

INSERT INTO `sale_return_details` (`id`, `sale_return_id`, `date`, `pro_id`, `sale_price`, `return_price`, `pro_qty`, `red_per`, `red_amt`, `total`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(19, 5, '2025-01-09 19:00:00', 4, 2000.00, 2000.00, '4', 0.00, 0.00, 8000.00, '1', '0', '2025-01-10 11:13:10', '2025-01-10 11:13:10'),
(20, 5, '2025-01-09 19:00:00', 2, 50.00, 50.00, '1', 0.00, 0.00, 50.00, '1', '0', '2025-01-10 11:13:10', '2025-01-10 11:13:10'),
(21, 5, '2025-01-09 19:00:00', 3, 2000.00, 2000.00, '2', 0.00, 0.00, 4000.00, '1', '0', '2025-01-10 11:13:10', '2025-01-10 11:13:10'),
(22, 5, '2025-01-09 19:00:00', 1, 22.00, 22.00, '2', 0.00, 0.00, 44.00, '1', '0', '2025-01-10 11:13:10', '2025-01-10 11:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3E28MZU6IL2qUNibTI2S0zZuYlp3QGAPPvNVjWDo', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibGxxMnRIRGhFeGV5NHRPZjNZNGJiMElaa1NCcXp4SDRCT0tLeHpmeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9pc3Rfd2VpZ2h0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1778568815),
('UeZ3Uy3JGKwyWxkUyi8RTIEkMxPgvIosVMiuUyHe', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTGpvZDBVZTIxVHd2c0tDVk5CZ0l1ak9mb1drR1RMYkdjVE96Y3Q2VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9pc3Rfd2VpZ2h0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1778158671),
('ZlHCHQaVbp0i9tzlZechrOGOd9r4zR2pHuB2lHFa', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkI4RVg5eTJ1WlN5bTBMQjVQVDBkb2c5ZzRuWUZINjBGUGcya2htViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9pc3Rfd2VpZ2h0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1778220486);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `camp_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `cable_fee` int(11) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `bill_logo` varchar(255) NOT NULL,
  `letter_head` varchar(255) DEFAULT NULL,
  `terms` varchar(255) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `school_name`, `camp_name`, `phone`, `email`, `website`, `address`, `cable_fee`, `prefix`, `logo`, `favicon`, `bill_logo`, `letter_head`, `terms`, `footer_text`, `created_at`, `updated_at`) VALUES
(1, 'Weightment Software', '4-KM Manga Road Raiwind', '03220622406', 'hamma@gmail.com', 'orientodev.com', 'jaranwala', 300, 'hammad', '1859268998958096.png', '1859269029570053.jfif', '1858292816477277.png', '1858292816482804.png', NULL, NULL, '2024-07-28 15:09:11', '2026-03-14 02:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opening_stock_id` bigint(20) DEFAULT NULL,
  `purchase_id` bigint(20) DEFAULT NULL,
  `return_id` bigint(20) DEFAULT NULL,
  `sale_id` bigint(20) DEFAULT NULL,
  `sale_return_id` bigint(20) DEFAULT NULL,
  `pro_id` bigint(20) DEFAULT NULL,
  `adjustment` varchar(255) DEFAULT NULL,
  `invoice_date` varchar(255) DEFAULT NULL,
  `purchase_price` varchar(255) DEFAULT NULL,
  `pur_return_price` varchar(255) DEFAULT NULL,
  `sale_price` varchar(255) DEFAULT NULL,
  `sale_return_price` varchar(255) DEFAULT NULL,
  `stock_in_qty` varchar(255) DEFAULT NULL,
  `stock_out_qty` varchar(255) DEFAULT NULL,
  `batch_no` varchar(255) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `opening_stock_id`, `purchase_id`, `return_id`, `sale_id`, `sale_return_id`, `pro_id`, `adjustment`, `invoice_date`, `purchase_price`, `pur_return_price`, `sale_price`, `sale_return_price`, `stock_in_qty`, `stock_out_qty`, `batch_no`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(386, NULL, NULL, NULL, 65, NULL, 11, NULL, '2025-10-03', '500.00', NULL, '550.00', NULL, NULL, '1', '457692', '1', '0', '2025-10-03 06:02:53', '2025-10-03 06:02:53'),
(387, NULL, 53, NULL, NULL, NULL, 11, NULL, '2025-10-03', '500.00', NULL, NULL, NULL, '100', NULL, '457692', '1', '0', '2025-10-03 06:08:12', '2025-10-03 06:08:12'),
(389, NULL, NULL, NULL, 66, NULL, 11, NULL, '2025-10-03', '0', NULL, '530.00', NULL, NULL, '1', '457692', '1', '0', '2025-10-03 06:15:09', '2025-10-03 06:15:09'),
(390, NULL, NULL, NULL, 66, NULL, 11, NULL, '2025-10-03', '500.00', NULL, '550.00', NULL, NULL, '1', '457692', '1', '0', '2025-10-03 06:15:09', '2025-10-03 06:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sup_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `other_note` varchar(255) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `sup_name`, `phone`, `address`, `other_note`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Ali', '03220622406', 'FSD', 'ABC', '1', NULL, '2025-01-10 08:01:52', '2025-09-16 10:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_ledgers`
--

CREATE TABLE `supplier_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) DEFAULT NULL,
  `purchase_id` bigint(20) DEFAULT NULL,
  `pur_return_id` bigint(20) DEFAULT NULL,
  `pro_id` varchar(20) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `pro_qty` varchar(255) DEFAULT NULL,
  `debit` decimal(15,2) NOT NULL DEFAULT 0.00,
  `credit` decimal(15,2) NOT NULL DEFAULT 0.00,
  `transaction_type` enum('Open_balance','Purchase','Pur_return','Payment','Pay_return') NOT NULL DEFAULT 'Purchase',
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_ledgers`
--

INSERT INTO `supplier_ledgers` (`id`, `supplier_id`, `purchase_id`, `pur_return_id`, `pro_id`, `date`, `detail`, `pro_qty`, `debit`, `credit`, `transaction_type`, `is_active`, `deleted_at`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(68, 2, 53, NULL, '11', '2025-10-03', 'Purchase', '100', 50000.00, 0.00, 'Purchase', '1', NULL, '2025-10-03 06:08:12', '2025-10-03 06:08:12', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Meter', 3, 3, '2025-10-01 05:18:44', '2025-10-01 05:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` varchar(255) DEFAULT NULL,
  `last_login_location` varchar(255) DEFAULT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_by` bigint(20) NOT NULL DEFAULT 1,
  `updated_by` bigint(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `last_login`, `last_login_ip`, `last_login_location`, `is_active`, `is_deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'superadmin@gmail.com', NULL, '$2y$12$rwUauGz06XeztazTUlVfVeBXrdk.gyGsKfooVsnvW9wji4iRHgVu.', NULL, '1817498810704211.jpg', '2024-08-28 05:16:14', '127.0.0.1', 'Unknown City, Unknown Region, Unknown Country', '1', '0', 1, 1, '2024-07-14 07:41:33', '2024-12-04 03:45:35'),
(2, 'Teacher', 'teacher@gmail.com', NULL, '$2y$12$S5W1w/TSqAU9kus6wo/e8.tDQXVRU8OTjXsnIcJTPwFk6T.ku2tbW', NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, '2024-08-15 10:21:32', '2024-09-04 04:26:56'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$12$FCY.MZ7sm2LEGOf7x/tZauQEsjBEsK3Xt6vfxwrR/39hmHTJBYup.', NULL, '1861520682943297.jpg', '2026-05-12 11:46:42', '127.0.0.1', 'Unknown City, Unknown Region, Unknown Country', '1', '1', 1, 1, '2024-08-28 00:18:35', '2026-05-12 18:46:42'),
(4, 'Operator', 'operator@gmail.com', NULL, '$2y$12$RXHSa7yWZBVfzCgQxYmuEuB7GrHcXlCad7QW2RBQLabsc9s7fUYJO', NULL, '1809239523045511.bmp', '2025-10-03 10:09:39', '127.0.0.1', 'Unknown City, Unknown Region, Unknown Country', '1', '0', 3, 1, '2024-09-04 04:30:12', '2025-10-03 05:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `weightments`
--

CREATE TABLE `weightments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `vehicle_no` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `gate_pass_no` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ist_weight` decimal(20,2) DEFAULT 0.00,
  `second_weight` decimal(20,2) DEFAULT 0.00,
  `net_weight` decimal(20,2) DEFAULT 0.00,
  `ist_time` varchar(255) DEFAULT NULL,
  `second_time` varchar(255) DEFAULT NULL,
  `ist_date` varchar(255) DEFAULT NULL,
  `second_date` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weightments`
--

INSERT INTO `weightments` (`id`, `date`, `vehicle_no`, `customer_name`, `supplier_name`, `driver_name`, `gate_pass_no`, `description`, `ist_weight`, `second_weight`, `net_weight`, `ist_time`, `second_time`, `ist_date`, `second_date`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(19, NULL, 'abc 123', 'PPF', 'PP1', 'Noor Wali', '123', 'Jmbo Bags', 34534.00, 23230.00, 11304.00, '11:06:11', '11:06:11', '2026-03-14', '2026-03-14', 3, NULL, '2026-03-13 06:34:03', '2026-03-14 05:30:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ledgers`
--
ALTER TABLE `customer_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guaranters`
--
ALTER TABLE `guaranters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `opening_stocks`
--
ALTER TABLE `opening_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_stock_details`
--
ALTER TABLE `opening_stock_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_returns`
--
ALTER TABLE `purchase_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return_details`
--
ALTER TABLE `purchase_return_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_returns`
--
ALTER TABLE `sale_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_return_details`
--
ALTER TABLE `sale_return_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_phone_unique` (`phone`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_ledgers`
--
ALTER TABLE `supplier_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `weightments`
--
ALTER TABLE `weightments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_ledgers`
--
ALTER TABLE `customer_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guaranters`
--
ALTER TABLE `guaranters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `opening_stocks`
--
ALTER TABLE `opening_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opening_stock_details`
--
ALTER TABLE `opening_stock_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `purchase_returns`
--
ALTER TABLE `purchase_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchase_return_details`
--
ALTER TABLE `purchase_return_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `sale_returns`
--
ALTER TABLE `sale_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_return_details`
--
ALTER TABLE `sale_return_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier_ledgers`
--
ALTER TABLE `supplier_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weightments`
--
ALTER TABLE `weightments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
