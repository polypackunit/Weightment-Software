-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 07:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill_management`
--

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
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:5:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:10:\"group_name\";s:1:\"c\";s:4:\"name\";s:1:\"d\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:141:{i:0;a:5:{s:1:\"a\";i:1;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:14:\"create_student\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:5:{s:1:\"a\";i:2;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:12:\"view_student\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:5:{s:1:\"a\";i:3;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:14:\"update_student\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:5:{s:1:\"a\";i:4;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:14:\"delete_student\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:5:{s:1:\"a\";i:5;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:13:\"print_student\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:5:{s:1:\"a\";i:6;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:13:\"view_fees_btn\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:5:{s:1:\"a\";i:7;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:16:\"view_full_detail\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:5:{s:1:\"a\";i:8;s:1:\"b\";s:8:\"Students\";s:1:\"c\";s:14:\"view_admission\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:5:{s:1:\"a\";i:9;s:1:\"b\";s:8:\"Teachers\";s:1:\"c\";s:14:\"create_teacher\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:5:{s:1:\"a\";i:10;s:1:\"b\";s:8:\"Teachers\";s:1:\"c\";s:12:\"view_teacher\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:5:{s:1:\"a\";i:11;s:1:\"b\";s:8:\"Teachers\";s:1:\"c\";s:14:\"update_teacher\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:5:{s:1:\"a\";i:12;s:1:\"b\";s:8:\"Teachers\";s:1:\"c\";s:14:\"delete_teacher\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:5:{s:1:\"a\";i:13;s:1:\"b\";s:8:\"Teachers\";s:1:\"c\";s:13:\"print_teacher\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:5:{s:1:\"a\";i:14;s:1:\"b\";s:5:\"Staff\";s:1:\"c\";s:12:\"create_staff\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:5:{s:1:\"a\";i:15;s:1:\"b\";s:5:\"Staff\";s:1:\"c\";s:10:\"view_staff\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:5:{s:1:\"a\";i:16;s:1:\"b\";s:5:\"Staff\";s:1:\"c\";s:12:\"update_staff\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:5:{s:1:\"a\";i:17;s:1:\"b\";s:5:\"Staff\";s:1:\"c\";s:12:\"delete_staff\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:5:{s:1:\"a\";i:18;s:1:\"b\";s:5:\"Staff\";s:1:\"c\";s:11:\"print_staff\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:5:{s:1:\"a\";i:19;s:1:\"b\";s:9:\"Guardians\";s:1:\"c\";s:15:\"create_guardian\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:5:{s:1:\"a\";i:20;s:1:\"b\";s:9:\"Guardians\";s:1:\"c\";s:13:\"view_guardian\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:5:{s:1:\"a\";i:21;s:1:\"b\";s:9:\"Guardians\";s:1:\"c\";s:15:\"update_guardian\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:5:{s:1:\"a\";i:22;s:1:\"b\";s:9:\"Guardians\";s:1:\"c\";s:15:\"delete_guardian\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:5:{s:1:\"a\";i:23;s:1:\"b\";s:9:\"Guardians\";s:1:\"c\";s:14:\"print_guardian\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:5:{s:1:\"a\";i:24;s:1:\"b\";s:9:\"Transport\";s:1:\"c\";s:16:\"create_transport\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:5:{s:1:\"a\";i:25;s:1:\"b\";s:9:\"Transport\";s:1:\"c\";s:14:\"view_transport\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:5:{s:1:\"a\";i:26;s:1:\"b\";s:9:\"Transport\";s:1:\"c\";s:16:\"update_transport\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:5:{s:1:\"a\";i:27;s:1:\"b\";s:9:\"Transport\";s:1:\"c\";s:16:\"delete_transport\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:5:{s:1:\"a\";i:28;s:1:\"b\";s:9:\"Transport\";s:1:\"c\";s:15:\"print_transport\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:5:{s:1:\"a\";i:29;s:1:\"b\";s:18:\"Student Attendance\";s:1:\"c\";s:25:\"create_student_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:5:{s:1:\"a\";i:30;s:1:\"b\";s:18:\"Student Attendance\";s:1:\"c\";s:23:\"view_student_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:5:{s:1:\"a\";i:31;s:1:\"b\";s:18:\"Student Attendance\";s:1:\"c\";s:25:\"update_student_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:5:{s:1:\"a\";i:32;s:1:\"b\";s:18:\"Student Attendance\";s:1:\"c\";s:25:\"delete_student_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:5:{s:1:\"a\";i:33;s:1:\"b\";s:16:\"Staff Attendance\";s:1:\"c\";s:23:\"create_staff_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:5:{s:1:\"a\";i:34;s:1:\"b\";s:16:\"Staff Attendance\";s:1:\"c\";s:21:\"view_staff_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:5:{s:1:\"a\";i:35;s:1:\"b\";s:16:\"Staff Attendance\";s:1:\"c\";s:23:\"update_staff_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:5:{s:1:\"a\";i:36;s:1:\"b\";s:16:\"Staff Attendance\";s:1:\"c\";s:23:\"delete_staff_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:5:{s:1:\"a\";i:37;s:1:\"b\";s:18:\"Teacher Attendance\";s:1:\"c\";s:25:\"create_teacher_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:5:{s:1:\"a\";i:38;s:1:\"b\";s:18:\"Teacher Attendance\";s:1:\"c\";s:23:\"view_teacher_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:5:{s:1:\"a\";i:39;s:1:\"b\";s:18:\"Teacher Attendance\";s:1:\"c\";s:25:\"update_teacher_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:5:{s:1:\"a\";i:40;s:1:\"b\";s:18:\"Teacher Attendance\";s:1:\"c\";s:25:\"delete_teacher_attendance\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:5:{s:1:\"a\";i:41;s:1:\"b\";s:6:\"Feeses\";s:1:\"c\";s:11:\"receive_fee\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:5:{s:1:\"a\";i:42;s:1:\"b\";s:6:\"Feeses\";s:1:\"c\";s:11:\"advance_fee\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:5:{s:1:\"a\";i:43;s:1:\"b\";s:6:\"Feeses\";s:1:\"c\";s:12:\"generate_fee\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:5:{s:1:\"a\";i:44;s:1:\"b\";s:9:\"Fee Heads\";s:1:\"c\";s:16:\"create_fee_heads\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:5:{s:1:\"a\";i:45;s:1:\"b\";s:9:\"Fee Heads\";s:1:\"c\";s:14:\"view_fee_heads\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:5:{s:1:\"a\";i:46;s:1:\"b\";s:9:\"Fee Heads\";s:1:\"c\";s:16:\"update_fee_heads\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:5:{s:1:\"a\";i:47;s:1:\"b\";s:9:\"Fee Heads\";s:1:\"c\";s:16:\"delete_fee_heads\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:5:{s:1:\"a\";i:48;s:1:\"b\";s:8:\"Fee Plan\";s:1:\"c\";s:15:\"create_fee_plan\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:5:{s:1:\"a\";i:49;s:1:\"b\";s:8:\"Fee Plan\";s:1:\"c\";s:13:\"view_fee_plan\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:5:{s:1:\"a\";i:50;s:1:\"b\";s:8:\"Fee Plan\";s:1:\"c\";s:14:\"print_fee_plan\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:5:{s:1:\"a\";i:51;s:1:\"b\";s:11:\"Concessions\";s:1:\"c\";s:17:\"create_concession\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:5:{s:1:\"a\";i:52;s:1:\"b\";s:11:\"Concessions\";s:1:\"c\";s:15:\"view_concession\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:5:{s:1:\"a\";i:53;s:1:\"b\";s:11:\"Concessions\";s:1:\"c\";s:17:\"update_concession\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:5:{s:1:\"a\";i:54;s:1:\"b\";s:11:\"Concessions\";s:1:\"c\";s:17:\"delete_concession\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:5:{s:1:\"a\";i:55;s:1:\"b\";s:11:\"Concessions\";s:1:\"c\";s:16:\"print_concession\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:5:{s:1:\"a\";i:56;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:14:\"create_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:5:{s:1:\"a\";i:57;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:12:\"view_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:5:{s:1:\"a\";i:58;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:14:\"update_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:5:{s:1:\"a\";i:59;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:14:\"delete_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:5:{s:1:\"a\";i:60;s:1:\"b\";s:7:\"Expense\";s:1:\"c\";s:13:\"print_expense\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:5:{s:1:\"a\";i:61;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:23:\"create_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:5:{s:1:\"a\";i:62;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:21:\"view_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:5:{s:1:\"a\";i:63;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:23:\"update_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:5:{s:1:\"a\";i:64;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:23:\"delete_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:5:{s:1:\"a\";i:65;s:1:\"b\";s:18:\"Expense Categories\";s:1:\"c\";s:22:\"print_expense_category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:5:{s:1:\"a\";i:66;s:1:\"b\";s:8:\"Sessions\";s:1:\"c\";s:14:\"create_session\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:5:{s:1:\"a\";i:67;s:1:\"b\";s:8:\"Sessions\";s:1:\"c\";s:12:\"view_session\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:5:{s:1:\"a\";i:68;s:1:\"b\";s:8:\"Sessions\";s:1:\"c\";s:14:\"update_session\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:5:{s:1:\"a\";i:69;s:1:\"b\";s:8:\"Sessions\";s:1:\"c\";s:14:\"delete_session\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:5:{s:1:\"a\";i:70;s:1:\"b\";s:8:\"Sessions\";s:1:\"c\";s:13:\"print_session\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:5:{s:1:\"a\";i:71;s:1:\"b\";s:7:\"Classes\";s:1:\"c\";s:12:\"create_class\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:5:{s:1:\"a\";i:72;s:1:\"b\";s:7:\"Classes\";s:1:\"c\";s:10:\"view_class\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:5:{s:1:\"a\";i:73;s:1:\"b\";s:7:\"Classes\";s:1:\"c\";s:12:\"update_class\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:5:{s:1:\"a\";i:74;s:1:\"b\";s:7:\"Classes\";s:1:\"c\";s:12:\"delete_class\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:5:{s:1:\"a\";i:75;s:1:\"b\";s:7:\"Classes\";s:1:\"c\";s:11:\"print_class\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:5:{s:1:\"a\";i:76;s:1:\"b\";s:8:\"Sections\";s:1:\"c\";s:14:\"create_section\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:5:{s:1:\"a\";i:77;s:1:\"b\";s:8:\"Sections\";s:1:\"c\";s:12:\"view_section\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:5:{s:1:\"a\";i:78;s:1:\"b\";s:8:\"Sections\";s:1:\"c\";s:14:\"update_section\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:5:{s:1:\"a\";i:79;s:1:\"b\";s:8:\"Sections\";s:1:\"c\";s:14:\"delete_section\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:5:{s:1:\"a\";i:80;s:1:\"b\";s:8:\"Sections\";s:1:\"c\";s:13:\"print_section\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:5:{s:1:\"a\";i:81;s:1:\"b\";s:8:\"Subjects\";s:1:\"c\";s:14:\"create_subject\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:5:{s:1:\"a\";i:82;s:1:\"b\";s:8:\"Subjects\";s:1:\"c\";s:12:\"view_subject\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:5:{s:1:\"a\";i:83;s:1:\"b\";s:8:\"Subjects\";s:1:\"c\";s:14:\"update_subject\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:5:{s:1:\"a\";i:84;s:1:\"b\";s:8:\"Subjects\";s:1:\"c\";s:14:\"delete_subject\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:5:{s:1:\"a\";i:85;s:1:\"b\";s:8:\"Subjects\";s:1:\"c\";s:13:\"print_subject\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:5:{s:1:\"a\";i:86;s:1:\"b\";s:11:\"Departments\";s:1:\"c\";s:17:\"create_department\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:5:{s:1:\"a\";i:87;s:1:\"b\";s:11:\"Departments\";s:1:\"c\";s:15:\"view_department\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:5:{s:1:\"a\";i:88;s:1:\"b\";s:11:\"Departments\";s:1:\"c\";s:17:\"update_department\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:5:{s:1:\"a\";i:89;s:1:\"b\";s:11:\"Departments\";s:1:\"c\";s:17:\"delete_department\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:5:{s:1:\"a\";i:90;s:1:\"b\";s:11:\"Departments\";s:1:\"c\";s:16:\"print_department\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:5:{s:1:\"a\";i:91;s:1:\"b\";s:12:\"Designations\";s:1:\"c\";s:18:\"create_designation\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:5:{s:1:\"a\";i:92;s:1:\"b\";s:12:\"Designations\";s:1:\"c\";s:16:\"view_designation\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:92;a:5:{s:1:\"a\";i:93;s:1:\"b\";s:12:\"Designations\";s:1:\"c\";s:18:\"update_designation\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:93;a:5:{s:1:\"a\";i:94;s:1:\"b\";s:12:\"Designations\";s:1:\"c\";s:18:\"delete_designation\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:94;a:5:{s:1:\"a\";i:95;s:1:\"b\";s:12:\"Designations\";s:1:\"c\";s:17:\"print_designation\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:95;a:5:{s:1:\"a\";i:96;s:1:\"b\";s:6:\"Castes\";s:1:\"c\";s:12:\"create_caste\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:96;a:5:{s:1:\"a\";i:97;s:1:\"b\";s:6:\"Castes\";s:1:\"c\";s:10:\"view_caste\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:97;a:5:{s:1:\"a\";i:98;s:1:\"b\";s:6:\"Castes\";s:1:\"c\";s:12:\"update_caste\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:98;a:5:{s:1:\"a\";i:99;s:1:\"b\";s:6:\"Castes\";s:1:\"c\";s:12:\"delete_caste\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:99;a:5:{s:1:\"a\";i:100;s:1:\"b\";s:6:\"Castes\";s:1:\"c\";s:11:\"print_caste\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:100;a:5:{s:1:\"a\";i:101;s:1:\"b\";s:5:\"Roots\";s:1:\"c\";s:11:\"create_root\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:101;a:5:{s:1:\"a\";i:102;s:1:\"b\";s:5:\"Roots\";s:1:\"c\";s:9:\"view_root\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:102;a:5:{s:1:\"a\";i:103;s:1:\"b\";s:5:\"Roots\";s:1:\"c\";s:11:\"update_root\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:103;a:5:{s:1:\"a\";i:104;s:1:\"b\";s:5:\"Roots\";s:1:\"c\";s:11:\"delete_root\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:104;a:5:{s:1:\"a\";i:105;s:1:\"b\";s:5:\"Roots\";s:1:\"c\";s:10:\"print_root\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:105;a:5:{s:1:\"a\";i:106;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:11:\"create_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:106;a:5:{s:1:\"a\";i:107;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:9:\"view_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:107;a:5:{s:1:\"a\";i:108;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:11:\"update_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:5:{s:1:\"a\";i:109;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:11:\"delete_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:109;a:5:{s:1:\"a\";i:110;s:1:\"b\";s:5:\"Banks\";s:1:\"c\";s:10:\"print_bank\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:110;a:5:{s:1:\"a\";i:111;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:11:\"create_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:111;a:5:{s:1:\"a\";i:112;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:9:\"view_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:112;a:5:{s:1:\"a\";i:113;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:11:\"update_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:113;a:5:{s:1:\"a\";i:114;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:11:\"delete_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:114;a:5:{s:1:\"a\";i:115;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:10:\"print_user\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:115;a:5:{s:1:\"a\";i:116;s:1:\"b\";s:5:\"Users\";s:1:\"c\";s:15:\"change_password\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:116;a:5:{s:1:\"a\";i:117;s:1:\"b\";s:18:\"Roles & Permission\";s:1:\"c\";s:21:\"view_roles_permission\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:117;a:5:{s:1:\"a\";i:118;s:1:\"b\";s:18:\"Roles & Permission\";s:1:\"c\";s:23:\"update_roles_permission\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:118;a:5:{s:1:\"a\";i:119;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:16:\"total_fee_report\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:119;a:5:{s:1:\"a\";i:120;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:18:\"pending_fee_report\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:120;a:5:{s:1:\"a\";i:121;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:31:\"student_total_attendance_report\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:121;a:5:{s:1:\"a\";i:122;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:22:\"student_report_by_root\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:122;a:5:{s:1:\"a\";i:123;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:23:\"student_report_by_caste\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:123;a:5:{s:1:\"a\";i:124;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:27:\"student_report_by_transport\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:124;a:5:{s:1:\"a\";i:125;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:27:\"student_by_transport_report\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:125;a:5:{s:1:\"a\";i:126;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:23:\"expense_report_by_month\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:126;a:5:{s:1:\"a\";i:127;s:1:\"b\";s:7:\"Reports\";s:1:\"c\";s:22:\"profit_and_loss_report\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:127;a:5:{s:1:\"a\";i:128;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:12:\"student_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:128;a:5:{s:1:\"a\";i:129;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:12:\"teacher_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:129;a:5:{s:1:\"a\";i:130;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:10:\"staff_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:130;a:5:{s:1:\"a\";i:131;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:13:\"guardian_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:131;a:5:{s:1:\"a\";i:132;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:14:\"transport_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:132;a:5:{s:1:\"a\";i:133;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:23:\"student_attendance_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:133;a:5:{s:1:\"a\";i:134;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:21:\"staff_attendance_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:134;a:5:{s:1:\"a\";i:135;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:23:\"teacher_attendance_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:135;a:5:{s:1:\"a\";i:136;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:9:\"fees_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:136;a:5:{s:1:\"a\";i:137;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:11:\"report_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:137;a:5:{s:1:\"a\";i:138;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:12:\"expense_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:138;a:5:{s:1:\"a\";i:139;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:12:\"setting_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:139;a:5:{s:1:\"a\";i:140;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:25:\"roles_and_permission_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:140;a:5:{s:1:\"a\";i:141;s:1:\"b\";s:4:\"Menu\";s:1:\"c\";s:20:\"general_setting_menu\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"c\";s:11:\"Super Admin\";s:1:\"d\";s:3:\"web\";}}}', 1729792852);

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
(34, '2024_07_28_150209_create_settings_table', 6),
(44, '2024_08_23_053238_create_permission_groups_table', 11);

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
(1, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 2);

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
(1, 'Students', 'create_student', 'web', '2024-08-23 01:18:30', '2024-08-23 07:43:54'),
(2, 'Students', 'view_student', 'web', '2024-08-23 07:44:14', '2024-08-23 07:45:23'),
(3, 'Students', 'update_student', 'web', '2024-08-23 07:44:30', '2024-08-23 07:44:30'),
(4, 'Students', 'delete_student', 'web', '2024-08-23 07:44:46', '2024-08-23 07:44:46'),
(5, 'Students', 'print_student', 'web', '2024-08-23 07:45:47', '2024-08-23 07:45:47'),
(6, 'Students', 'view_fees_btn', 'web', '2024-08-23 07:46:56', '2024-08-23 07:46:56'),
(7, 'Students', 'view_full_detail', 'web', '2024-08-23 08:15:11', '2024-08-23 08:15:11'),
(8, 'Students', 'view_admission', 'web', '2024-08-23 08:15:39', '2024-08-23 08:29:30'),
(9, 'Teachers', 'create_teacher', 'web', '2024-08-23 08:22:56', '2024-08-23 08:22:56'),
(10, 'Teachers', 'view_teacher', 'web', '2024-08-23 08:28:21', '2024-08-23 08:28:21'),
(11, 'Teachers', 'update_teacher', 'web', '2024-08-23 08:28:38', '2024-08-23 08:28:38'),
(12, 'Teachers', 'delete_teacher', 'web', '2024-08-23 08:28:51', '2024-08-23 08:28:51'),
(13, 'Teachers', 'print_teacher', 'web', '2024-08-23 08:30:12', '2024-08-23 08:30:12'),
(14, 'Staff', 'create_staff', 'web', '2024-08-23 08:31:21', '2024-08-23 08:31:21'),
(15, 'Staff', 'view_staff', 'web', '2024-08-23 08:33:46', '2024-08-23 08:33:46'),
(16, 'Staff', 'update_staff', 'web', '2024-08-23 08:33:56', '2024-08-23 08:33:56'),
(17, 'Staff', 'delete_staff', 'web', '2024-08-23 08:34:05', '2024-08-23 08:34:05'),
(18, 'Staff', 'print_staff', 'web', '2024-08-23 08:34:15', '2024-08-23 08:34:15'),
(19, 'Guardians', 'create_guardian', 'web', '2024-08-23 08:43:24', '2024-08-23 08:43:24'),
(20, 'Guardians', 'view_guardian', 'web', '2024-08-23 08:43:39', '2024-08-23 08:43:39'),
(21, 'Guardians', 'update_guardian', 'web', '2024-08-23 08:43:51', '2024-08-23 08:43:51'),
(22, 'Guardians', 'delete_guardian', 'web', '2024-08-23 08:44:07', '2024-08-23 08:44:07'),
(23, 'Guardians', 'print_guardian', 'web', '2024-08-23 08:44:21', '2024-08-23 08:44:21'),
(24, 'Transport', 'create_transport', 'web', '2024-08-24 06:59:00', '2024-08-24 06:59:00'),
(25, 'Transport', 'view_transport', 'web', '2024-08-24 06:59:16', '2024-08-24 06:59:16'),
(26, 'Transport', 'update_transport', 'web', '2024-08-24 06:59:30', '2024-08-24 06:59:30'),
(27, 'Transport', 'delete_transport', 'web', '2024-08-24 06:59:42', '2024-08-24 06:59:42'),
(28, 'Transport', 'print_transport', 'web', '2024-08-24 06:59:54', '2024-08-24 06:59:54'),
(29, 'Student Attendance', 'create_student_attendance', 'web', '2024-08-24 07:02:18', '2024-08-24 07:02:18'),
(30, 'Student Attendance', 'view_student_attendance', 'web', '2024-08-24 07:02:44', '2024-08-24 07:02:44'),
(31, 'Student Attendance', 'update_student_attendance', 'web', '2024-08-24 07:02:53', '2024-08-24 07:02:53'),
(32, 'Student Attendance', 'delete_student_attendance', 'web', '2024-08-24 07:03:02', '2024-08-24 07:03:02'),
(33, 'Staff Attendance', 'create_staff_attendance', 'web', '2024-08-24 07:03:48', '2024-08-24 07:03:48'),
(34, 'Staff Attendance', 'view_staff_attendance', 'web', '2024-08-24 07:04:01', '2024-08-24 07:04:01'),
(35, 'Staff Attendance', 'update_staff_attendance', 'web', '2024-08-24 07:04:12', '2024-08-24 07:04:12'),
(36, 'Staff Attendance', 'delete_staff_attendance', 'web', '2024-08-24 07:04:23', '2024-08-24 07:04:23'),
(37, 'Teacher Attendance', 'create_teacher_attendance', 'web', '2024-08-24 07:04:57', '2024-08-24 07:04:57'),
(38, 'Teacher Attendance', 'view_teacher_attendance', 'web', '2024-08-24 07:05:07', '2024-08-24 07:05:07'),
(39, 'Teacher Attendance', 'update_teacher_attendance', 'web', '2024-08-24 07:05:20', '2024-08-24 07:05:20'),
(40, 'Teacher Attendance', 'delete_teacher_attendance', 'web', '2024-08-24 07:05:30', '2024-08-24 07:05:30'),
(41, 'Feeses', 'receive_fee', 'web', '2024-08-24 07:06:14', '2024-08-24 07:06:14'),
(42, 'Feeses', 'advance_fee', 'web', '2024-08-24 07:06:32', '2024-08-24 07:06:32'),
(43, 'Feeses', 'generate_fee', 'web', '2024-08-24 07:06:45', '2024-08-24 07:06:45'),
(44, 'Fee Heads', 'create_fee_heads', 'web', '2024-08-24 07:07:01', '2024-08-24 07:09:48'),
(45, 'Fee Heads', 'view_fee_heads', 'web', '2024-08-24 07:07:11', '2024-08-24 07:10:11'),
(46, 'Fee Heads', 'update_fee_heads', 'web', '2024-08-24 07:07:31', '2024-08-24 07:10:41'),
(47, 'Fee Heads', 'delete_fee_heads', 'web', '2024-08-24 07:11:31', '2024-08-24 07:11:31'),
(48, 'Fee Plan', 'create_fee_plan', 'web', '2024-08-24 07:14:12', '2024-08-24 07:14:12'),
(49, 'Fee Plan', 'view_fee_plan', 'web', '2024-08-24 07:14:32', '2024-08-24 07:14:32'),
(50, 'Fee Plan', 'print_fee_plan', 'web', '2024-08-24 07:15:38', '2024-08-24 07:15:38'),
(51, 'Concessions', 'create_concession', 'web', '2024-08-24 07:16:24', '2024-08-24 07:16:24'),
(52, 'Concessions', 'view_concession', 'web', '2024-08-24 07:16:38', '2024-08-24 07:16:38'),
(53, 'Concessions', 'update_concession', 'web', '2024-08-24 07:16:48', '2024-08-24 07:16:48'),
(54, 'Concessions', 'delete_concession', 'web', '2024-08-24 07:17:02', '2024-08-24 07:17:02'),
(55, 'Concessions', 'print_concession', 'web', '2024-08-24 07:17:22', '2024-08-24 07:17:22'),
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
(66, 'Sessions', 'create_session', 'web', '2024-08-24 07:29:15', '2024-08-24 07:29:15'),
(67, 'Sessions', 'view_session', 'web', '2024-08-24 07:29:25', '2024-08-24 07:29:25'),
(68, 'Sessions', 'update_session', 'web', '2024-08-24 07:29:34', '2024-08-24 07:29:34'),
(69, 'Sessions', 'delete_session', 'web', '2024-08-24 07:29:46', '2024-08-24 07:29:46'),
(70, 'Sessions', 'print_session', 'web', '2024-08-24 07:30:59', '2024-08-24 07:30:59'),
(71, 'Classes', 'create_class', 'web', '2024-08-24 07:31:37', '2024-08-24 07:31:37'),
(72, 'Classes', 'view_class', 'web', '2024-08-24 07:31:49', '2024-08-24 07:31:49'),
(73, 'Classes', 'update_class', 'web', '2024-08-24 07:31:59', '2024-08-24 07:31:59'),
(74, 'Classes', 'delete_class', 'web', '2024-08-24 07:32:08', '2024-08-24 07:32:08'),
(75, 'Classes', 'print_class', 'web', '2024-08-24 07:32:21', '2024-08-24 07:32:21'),
(76, 'Sections', 'create_section', 'web', '2024-08-24 07:35:01', '2024-08-24 07:35:01'),
(77, 'Sections', 'view_section', 'web', '2024-08-24 07:35:10', '2024-08-24 07:35:10'),
(78, 'Sections', 'update_section', 'web', '2024-08-24 07:35:23', '2024-08-24 07:35:23'),
(79, 'Sections', 'delete_section', 'web', '2024-08-24 07:35:34', '2024-08-24 07:35:34'),
(80, 'Sections', 'print_section', 'web', '2024-08-24 07:35:55', '2024-08-24 07:35:55'),
(81, 'Subjects', 'create_subject', 'web', '2024-08-24 07:38:14', '2024-08-24 07:38:14'),
(82, 'Subjects', 'view_subject', 'web', '2024-08-24 07:38:23', '2024-08-24 07:38:23'),
(83, 'Subjects', 'update_subject', 'web', '2024-08-24 07:38:32', '2024-08-24 07:38:32'),
(84, 'Subjects', 'delete_subject', 'web', '2024-08-24 07:38:43', '2024-08-24 07:38:43'),
(85, 'Subjects', 'print_subject', 'web', '2024-08-24 07:38:56', '2024-08-24 07:38:56'),
(86, 'Departments', 'create_department', 'web', '2024-08-24 07:39:55', '2024-08-24 07:39:55'),
(87, 'Departments', 'view_department', 'web', '2024-08-24 07:40:11', '2024-08-24 07:40:11'),
(88, 'Departments', 'update_department', 'web', '2024-08-24 07:40:25', '2024-08-24 07:40:25'),
(89, 'Departments', 'delete_department', 'web', '2024-08-24 07:40:35', '2024-08-24 07:40:35'),
(90, 'Departments', 'print_department', 'web', '2024-08-24 07:40:44', '2024-08-24 07:40:44'),
(91, 'Designations', 'create_designation', 'web', '2024-08-24 07:41:55', '2024-08-24 07:41:55'),
(92, 'Designations', 'view_designation', 'web', '2024-08-24 07:42:04', '2024-08-24 07:42:04'),
(93, 'Designations', 'update_designation', 'web', '2024-08-24 07:43:18', '2024-08-24 07:43:18'),
(94, 'Designations', 'delete_designation', 'web', '2024-08-24 07:43:29', '2024-08-24 07:43:29'),
(95, 'Designations', 'print_designation', 'web', '2024-08-24 07:43:41', '2024-08-24 07:43:41'),
(96, 'Castes', 'create_caste', 'web', '2024-08-24 07:44:11', '2024-08-24 07:44:11'),
(97, 'Castes', 'view_caste', 'web', '2024-08-24 07:44:19', '2024-08-24 07:44:19'),
(98, 'Castes', 'update_caste', 'web', '2024-08-24 07:44:33', '2024-08-24 07:44:33'),
(99, 'Castes', 'delete_caste', 'web', '2024-08-24 07:45:00', '2024-08-24 07:45:00'),
(100, 'Castes', 'print_caste', 'web', '2024-08-24 07:45:09', '2024-08-24 07:45:09'),
(101, 'Roots', 'create_root', 'web', '2024-08-24 07:48:01', '2024-08-24 07:48:01'),
(102, 'Roots', 'view_root', 'web', '2024-08-24 07:48:40', '2024-08-24 07:48:40'),
(103, 'Roots', 'update_root', 'web', '2024-08-24 07:48:54', '2024-08-24 07:48:54'),
(104, 'Roots', 'delete_root', 'web', '2024-08-24 07:49:12', '2024-08-24 07:49:12'),
(105, 'Roots', 'print_root', 'web', '2024-08-24 07:49:44', '2024-08-24 07:49:44'),
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
(119, 'Reports', 'total_fee_report', 'web', '2024-08-24 10:47:41', '2024-08-24 10:47:41'),
(120, 'Reports', 'pending_fee_report', 'web', '2024-08-24 10:48:07', '2024-08-24 10:48:07'),
(121, 'Reports', 'student_total_attendance_report', 'web', '2024-08-24 10:48:44', '2024-08-24 10:48:44'),
(122, 'Reports', 'student_report_by_root', 'web', '2024-08-24 10:49:07', '2024-08-24 10:49:07'),
(123, 'Reports', 'student_report_by_caste', 'web', '2024-08-24 10:49:27', '2024-08-24 10:49:27'),
(124, 'Reports', 'student_report_by_transport', 'web', '2024-08-24 10:49:49', '2024-08-24 10:49:49'),
(125, 'Reports', 'student_by_transport_report', 'web', '2024-08-24 10:50:13', '2024-08-24 10:50:13'),
(126, 'Reports', 'expense_report_by_month', 'web', '2024-08-24 10:50:49', '2024-08-24 10:50:49'),
(127, 'Reports', 'profit_and_loss_report', 'web', '2024-08-24 10:51:06', '2024-08-24 10:51:06'),
(128, 'Menu', 'student_menu', 'web', '2024-08-24 10:53:59', '2024-08-24 10:53:59'),
(129, 'Menu', 'teacher_menu', 'web', '2024-08-24 10:54:12', '2024-08-24 10:54:12'),
(130, 'Menu', 'staff_menu', 'web', '2024-08-24 10:54:28', '2024-08-24 10:54:28'),
(131, 'Menu', 'guardian_menu', 'web', '2024-08-24 10:54:42', '2024-08-24 10:54:42'),
(132, 'Menu', 'transport_menu', 'web', '2024-08-24 10:54:55', '2024-08-24 10:54:55'),
(133, 'Menu', 'student_attendance_menu', 'web', '2024-08-24 10:55:14', '2024-08-24 10:55:14'),
(134, 'Menu', 'staff_attendance_menu', 'web', '2024-08-24 10:55:32', '2024-08-24 10:55:32'),
(135, 'Menu', 'teacher_attendance_menu', 'web', '2024-08-24 10:55:49', '2024-08-24 10:55:49'),
(136, 'Menu', 'fees_menu', 'web', '2024-08-24 10:56:12', '2024-08-24 10:56:12'),
(137, 'Menu', 'report_menu', 'web', '2024-08-24 10:56:25', '2024-08-24 10:56:25'),
(138, 'Menu', 'expense_menu', 'web', '2024-08-24 10:56:38', '2024-08-24 10:56:38'),
(139, 'Menu', 'setting_menu', 'web', '2024-08-24 10:56:56', '2024-08-24 10:56:56'),
(140, 'Menu', 'roles_and_permission_menu', 'web', '2024-08-24 10:57:25', '2024-08-24 10:57:25'),
(141, 'Menu', 'general_setting_menu', 'web', '2024-08-24 10:58:00', '2024-08-24 10:58:00');

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
(1, 'Students', '0', 1, 1, '2024-08-23 02:00:44', '2024-08-23 02:00:44'),
(2, 'Teachers', '0', 1, 1, '2024-08-23 08:06:31', '2024-08-23 08:06:31'),
(3, 'Staff', '0', 1, 1, '2024-08-23 08:31:16', '2024-08-23 08:31:16'),
(4, 'Guardians', '0', 1, 1, '2024-08-23 08:43:03', '2024-08-23 08:43:03'),
(5, 'Transport', '0', 1, 1, '2024-08-24 06:58:39', '2024-08-24 06:58:39'),
(6, 'Student Attendance', '0', 1, 1, '2024-08-24 07:01:58', '2024-08-24 07:01:58'),
(7, 'Staff Attendance', '0', 1, 1, '2024-08-24 07:03:30', '2024-08-24 07:03:30'),
(8, 'Teacher Attendance', '0', 1, 1, '2024-08-24 07:04:40', '2024-08-24 07:04:40'),
(9, 'Feeses', '0', 1, 1, '2024-08-24 07:05:55', '2024-08-24 07:05:55'),
(10, 'Fee Heads', '0', 1, 1, '2024-08-24 07:09:35', '2024-08-24 07:09:35'),
(11, 'Fee Plan', '0', 1, 1, '2024-08-24 07:13:57', '2024-08-24 07:13:57'),
(12, 'Concessions', '0', 1, 1, '2024-08-24 07:16:08', '2024-08-24 07:16:08'),
(13, 'Expense', '0', 1, 1, '2024-08-24 07:21:30', '2024-08-24 07:21:30'),
(14, 'Expense Categories', '0', 1, 1, '2024-08-24 07:23:18', '2024-08-24 07:23:18'),
(15, 'Sessions', '0', 1, 1, '2024-08-24 07:29:04', '2024-08-24 07:29:04'),
(16, 'Classes', '0', 1, 1, '2024-08-24 07:31:16', '2024-08-24 07:31:16'),
(17, 'Sections', '0', 1, 1, '2024-08-24 07:34:50', '2024-08-24 07:34:50'),
(18, 'Subjects', '0', 1, 1, '2024-08-24 07:37:57', '2024-08-24 07:37:57'),
(19, 'Departments', '0', 1, 1, '2024-08-24 07:39:44', '2024-08-24 07:39:44'),
(20, 'Designations', '0', 1, 1, '2024-08-24 07:41:39', '2024-08-24 07:41:39'),
(21, 'Castes', '0', 1, 1, '2024-08-24 07:43:59', '2024-08-24 07:43:59'),
(22, 'Roots', '0', 1, 1, '2024-08-24 07:47:28', '2024-08-24 07:47:28'),
(23, 'Banks', '0', 1, 1, '2024-08-24 10:26:06', '2024-08-24 10:26:06'),
(24, 'Users', '0', 1, 1, '2024-08-24 10:40:43', '2024-08-24 10:40:43'),
(25, 'Roles & Permission', '0', 1, 1, '2024-08-24 10:45:20', '2024-08-24 10:45:20'),
(26, 'Reports', '0', 1, 1, '2024-08-24 10:47:13', '2024-08-24 10:47:13'),
(27, 'Menu', '0', 1, 1, '2024-08-24 10:53:47', '2024-08-24 10:53:47');

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
(4, 'Teacher', 'web', '2024-08-14 11:15:08', '2024-08-14 11:15:08'),
(5, 'Parent', 'web', '2024-08-14 11:15:15', '2024-08-14 11:15:15'),
(6, 'Student', 'web', '2024-08-14 11:15:22', '2024-08-14 11:15:22');

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
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
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
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
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
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1);

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
('KE8F3O27dIaHyrifRrygwHgmzS5ARcDjexF8ugvE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHdtR3lwd3FydTluNVo2b1AzU1gyTUlMaVg1cDhXNGlhOG9pblB2VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iaWxsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1729596437),
('m12rUITRtYcKJPW0jENHroK319SzOf3ECHWs5HPK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0d0OHpmMkdHSUJXR24wSEt4R1JRYm0wUFU4RzhFNGNzVTFTeWplWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1729440500),
('T4b391JLmu1gn9VJ9aMhHb0YXl87DTqNEph9Z91W', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRGhvVHdrMVFIYTlOT25tSWU1STdobDRwOThENjhEaFRSWEVUMmFKUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1729708073),
('ZTGUNm45D6iKwmyyVkn4Cv1usgJEhx2vzsCb3GkJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTdFVk5VVmkxcjFpYUhoTDBLNjQzOXUzVUEzc3F3QUhpVTlSVHhETiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iaWxsIjt9fQ==', 1729586541);

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

INSERT INTO `settings` (`id`, `school_name`, `camp_name`, `phone`, `email`, `website`, `address`, `prefix`, `logo`, `favicon`, `bill_logo`, `letter_head`, `terms`, `footer_text`, `created_at`, `updated_at`) VALUES
(1, 'Fatima Grammar SchooL', 'Samundri', '041-3416341', 'fatimagrammarschool141@gmail.com', NULL, 'Chak No. 141 G.B 8 Km Gojra Road Samundri', 'FGS', '1807633660169258.png', '1807633670203105.png', '1807638581704453.png', '1812800085729221.jpg', NULL, NULL, '2024-07-28 15:09:11', '2024-10-13 07:01:22');

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
(1, 'Admin', 'superadmin@gmail.com', NULL, '$2y$12$rwUauGz06XeztazTUlVfVeBXrdk.gyGsKfooVsnvW9wji4iRHgVu.', NULL, '1807513375897236.jpg', '2024-08-28 05:16:14', '127.0.0.1', 'Unknown City, Unknown Region, Unknown Country', '1', '0', 1, 1, '2024-07-14 07:41:33', '2024-08-28 00:16:14'),
(2, 'Teacher', 'teacher@gmail.com', NULL, '$2y$12$S5W1w/TSqAU9kus6wo/e8.tDQXVRU8OTjXsnIcJTPwFk6T.ku2tbW', NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, '2024-08-15 10:21:32', '2024-09-04 04:26:56'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$12$FCY.MZ7sm2LEGOf7x/tZauQEsjBEsK3Xt6vfxwrR/39hmHTJBYup.', NULL, NULL, '2024-10-23 18:02:22', '127.0.0.1', 'Unknown City, Unknown Region, Unknown Country', '1', '1', 1, 1, '2024-08-28 00:18:35', '2024-10-23 13:02:22'),
(4, 'Hafiz AbduL Hafeez', 'fatimagrammarschool141@gmail.com', NULL, '$2y$12$S02ngX7mxkN19RBknnkGduOehEr2uGuY6M0hNrWkl1IDh7uyshohW', NULL, '1809239523045511.bmp', '2024-10-12 03:36:38', '223.123.15.252', 'Islamabad, Islamabad, PK', '1', '0', 3, 1, '2024-09-04 04:30:12', '2024-10-12 03:36:38');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
