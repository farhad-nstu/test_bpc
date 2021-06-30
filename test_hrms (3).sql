-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 12:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'af4004VIKC9dOUrkENtOVANr7QQOBGzX', 1, '2021-01-14 21:55:21', '2021-01-14 21:55:21', '2021-01-14 21:55:21'),
(2, 2, 'XeYQs454WXtpgGeMQSuMAyWjcEBoJj76', 1, '2021-01-14 21:56:19', '2021-01-14 21:56:19', '2021-01-14 21:56:19'),
(3, 3, 'QB3iuaed0FFwCSrKpljve1RsIHMhN0ye', 1, '2021-01-14 23:15:32', '2021-01-14 23:15:32', '2021-01-14 23:15:32'),
(4, 4, '19ugfWmSByo1loHvO4ltuhKVtKJyAgkA', 1, '2021-01-14 23:16:26', '2021-01-14 23:16:26', '2021-01-14 23:16:26'),
(5, 5, 'id3ILzb8UzIJ4MeO9Q0KNu0H4dzLQ13g', 1, '2021-01-15 18:04:33', '2021-01-15 18:04:33', '2021-01-15 18:04:33'),
(6, 6, 'WP0SDPMjxgCPiViyZqypRbA3FHDwingM', 1, '2021-01-15 18:37:06', '2021-01-15 18:37:06', '2021-01-15 18:37:06'),
(7, 7, 'Y7bgU4bx4CXU4RRHwZloUGWwP7wbjQlz', 1, '2021-01-15 21:01:31', '2021-01-15 21:01:31', '2021-01-15 21:01:31'),
(8, 8, 'V85m5nRuCso4O2fNrHvBwzymjmFpV9ci', 1, '2021-01-15 23:23:41', '2021-01-15 23:23:41', '2021-01-15 23:23:41'),
(9, 12, '8EYjlY7Dl2T4guGm5rHtnDCtNnArBV06', 1, '2021-01-15 23:38:15', '2021-01-15 23:38:15', '2021-01-15 23:38:15'),
(10, 13, 'TyUWdKttdSwDGOXWMdqzwyZtvzpbUG8E', 1, '2021-01-15 23:58:24', '2021-01-15 23:58:24', '2021-01-15 23:58:24'),
(11, 14, '5WupcpiCxdIwsEZ03fopt0O0qND14sE1', 1, '2021-01-16 00:12:37', '2021-01-16 00:12:37', '2021-01-16 00:12:37'),
(12, 15, 'CJIl50EcNl8PrOEzIGi4KONvOZIJmewd', 1, '2021-01-16 00:40:32', '2021-01-16 00:40:32', '2021-01-16 00:40:32'),
(13, 16, '7xDnQbgsQ2sFa036uyYSYOdhhdhCTSN4', 1, '2021-01-16 00:41:24', '2021-01-16 00:41:24', '2021-01-16 00:41:24'),
(14, 17, 'CbQiIbM1ENOBr3cHXhmrPjtlaUR07e85', 1, '2021-01-17 18:03:38', '2021-01-17 18:03:38', '2021-01-17 18:03:38'),
(15, 18, 'FC7aWozq9WZOikzqWC7mXm4JM3jYEDkW', 1, '2021-01-17 18:15:43', '2021-01-17 18:15:43', '2021-01-17 18:15:43'),
(16, 19, 'Uyz9ZQ34oiFOIFscKBSig9MVRGiESCAl', 1, '2021-01-17 18:16:09', '2021-01-17 18:16:09', '2021-01-17 18:16:09'),
(17, 20, 'wVY7jbvsBDOuxPcBc4PLWe4R8R4y39ll', 1, '2021-01-17 18:32:52', '2021-01-17 18:32:52', '2021-01-17 18:32:52'),
(18, 21, 'UniTWSbijOimgCA7Tfq6PNmYYDHmdyFr', 1, '2021-01-17 18:36:02', '2021-01-17 18:36:02', '2021-01-17 18:36:02'),
(19, 22, 'nbVNNok47okD9RNRqUc16ThtUxfvCkCh', 1, '2021-01-17 18:36:16', '2021-01-17 18:36:16', '2021-01-17 18:36:16'),
(20, 23, 'aQt3e8uANXw3ogrSbEdWyxRyqFfVycJL', 1, '2021-01-18 09:06:06', '2021-01-18 09:06:06', '2021-01-18 09:06:06'),
(21, 24, 'q607tFCsWx3PF0qISnsJS0OdZGDmZAbE', 1, '2021-01-18 09:06:39', '2021-01-18 09:06:39', '2021-01-18 09:06:39'),
(22, 25, 'bnZ7qk0sqnr62PQgoRXbztatcW93Pi2t', 1, '2021-01-18 09:07:05', '2021-01-18 09:07:05', '2021-01-18 09:07:05'),
(23, 26, 'Y9mvGhW8EQXB6ZpOZRCHtoux5rsZnLm4', 1, '2021-01-18 09:07:20', '2021-01-18 09:07:20', '2021-01-18 09:07:20'),
(24, 27, 'ITdXN6CpssxRNSThxQ4nfePjGMKtabcT', 1, '2021-01-24 01:24:02', '2021-01-24 01:24:02', '2021-01-24 01:24:02'),
(25, 28, 'DCXFnfjc6dCAAAjgZ6eyjsGJJTn0EoWW', 1, '2021-01-24 01:27:06', '2021-01-24 01:27:06', '2021-01-24 01:27:06'),
(26, 29, 'HLP0nlh7oCCRHwHD5XcfGVaQ17ZZw4l2', 1, '2021-01-24 01:28:23', '2021-01-24 01:28:23', '2021-01-24 01:28:23'),
(27, 30, 'cuwI6uSQGqULRJ3wUIIp5ykUQwqhr5Rv', 1, '2021-01-24 01:29:01', '2021-01-24 01:29:01', '2021-01-24 01:29:01'),
(28, 35, '2VnhOKZWOt4uTMyt71eCLkxDcBPVZJTi', 1, '2021-04-06 11:10:41', '2021-04-06 11:10:41', '2021-04-06 11:10:41'),
(29, 36, 'qx03jUybZ40EannphAO341ekJyHeXJ2c', 1, '2021-04-06 11:12:15', '2021-04-06 11:12:15', '2021-04-06 11:12:15'),
(30, 37, '1jhsCiVT8FEWmeBWdmbvFn0M9A4DN9fN', 1, '2021-04-11 05:15:46', '2021-04-11 05:15:46', '2021-04-11 05:15:46'),
(31, 38, 'EpFmtExvZoMiVMzJNyJQjt77gM1Et9R3', 1, '2021-04-11 05:30:41', '2021-04-11 05:30:41', '2021-04-11 05:30:41'),
(32, 39, 'UdDuNc4KogYB0clx7RjzqjOZnnPuIz8L', 1, '2021-04-11 05:33:47', '2021-04-11 05:33:47', '2021-04-11 05:33:47'),
(33, 40, 'SdHAiJ6oNfWfvSxcSjIuY3gYf4c2eRYv', 1, '2021-04-11 05:35:40', '2021-04-11 05:35:40', '2021-04-11 05:35:40'),
(34, 41, 'mcJchXqgOkKf1jYqdbZiwcACfCWlIcLK', 1, '2021-04-11 05:49:29', '2021-04-11 05:49:29', '2021-04-11 05:49:29');

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
-- Table structure for table `fe_settings`
--

CREATE TABLE `fe_settings` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_value` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fe_settings`
--

INSERT INTO `fe_settings` (`s_id`, `s_name`, `s_value`) VALUES
(1, 'appName', 'BPC'),
(2, 'appTitle', 'Bangladesh Parjatan Corporation'),
(3, 'url', 'https://tos.com.bd'),
(4, 'email', 'contact@tos.com.bd'),
(5, 'description', 'Road No. 09, PC Culture Housing Society, Mohammadpur, Dhaka.'),
(8, 'contact', '09613555867'),
(9, 'logo', 'logo-646293715.jpg'),
(10, 'c_symbol', 'TK ');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Male', NULL, NULL),
(2, 'Femail', NULL, NULL),
(3, 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hrms_allowances`
--

CREATE TABLE `hrms_allowances` (
  `allowance_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `month` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Dearness Allowance',
  `HR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'House Rent',
  `Medi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Medical Allowance',
  `Edu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Educational',
  `PM_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'PM Office Duty',
  `Tiff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arrear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Wash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Conv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Conveniyence Allowance',
  `Re_p_bill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_allowances_basics`
--

CREATE TABLE `hrms_allowances_basics` (
  `allowance_id` int(10) UNSIGNED NOT NULL,
  `allowance_title` int(11) NOT NULL,
  `allowance_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_awards`
--

CREATE TABLE `hrms_awards` (
  `award_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `award_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `award_ground` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `award_date` date DEFAULT NULL,
  `award_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_banks`
--

CREATE TABLE `hrms_banks` (
  `bank_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_configs`
--

CREATE TABLE `hrms_configs` (
  `hrms_config_id` int(11) NOT NULL,
  `hrms_config_key` varchar(50) NOT NULL,
  `hrms_config_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_departments`
--

CREATE TABLE `hrms_departments` (
  `dpt_id` int(10) UNSIGNED NOT NULL,
  `dpt_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_departments`
--

INSERT INTO `hrms_departments` (`dpt_id`, `dpt_title`, `created_at`, `updated_at`) VALUES
(1, 'IT', '2021-06-22 14:22:05', '2021-06-22 14:22:05'),
(2, 'HR', '2021-06-22 14:22:10', '2021-06-22 14:22:10'),
(3, 'Accounts', '2021-06-22 14:22:17', '2021-06-22 14:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_designations`
--

CREATE TABLE `hrms_designations` (
  `desg_id` int(10) UNSIGNED NOT NULL,
  `desg_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_designations`
--

INSERT INTO `hrms_designations` (`desg_id`, `desg_title`, `created_at`, `updated_at`) VALUES
(1, 'Director', '2021-06-22 14:16:42', '2021-06-22 14:16:42'),
(2, 'Assistant Manager', '2021-06-22 14:16:55', '2021-06-22 14:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_disciplinary_actions`
--

CREATE TABLE `hrms_disciplinary_actions` (
  `dis_act_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `nature_of_offense` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punishment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_date` date DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_employees`
--

CREATE TABLE `hrms_employees` (
  `employee_id` int(11) NOT NULL,
  `employee_bpc_id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_designation` int(11) NOT NULL,
  `employee_father_name` varchar(55) DEFAULT NULL,
  `employee_mother_name` varchar(55) DEFAULT NULL,
  `employee_district` int(11) NOT NULL,
  `employee_birth_date` date DEFAULT NULL,
  `employee_prl_date` date DEFAULT NULL,
  `employee_posting` varchar(55) DEFAULT NULL,
  `employee_rank` varchar(55) DEFAULT NULL,
  `employee_location` varchar(55) DEFAULT NULL,
  `employee_join_date` date NOT NULL,
  `employee_cadre` varchar(55) DEFAULT NULL,
  `employee_batch` varchar(15) DEFAULT NULL,
  `employee_release_date` date DEFAULT NULL,
  `employee_confirm_g_o_date` date DEFAULT NULL,
  `employee_sex` varchar(55) NOT NULL,
  `employee_religion` int(11) NOT NULL,
  `employee_marital_state` tinyint(2) NOT NULL,
  `employee_mobile` varchar(55) NOT NULL,
  `employee_email` varchar(55) NOT NULL,
  `employee_nid` varchar(55) NOT NULL,
  `employee_department` int(11) DEFAULT NULL,
  `employee_unit` int(11) DEFAULT NULL,
  `employee_payscale_grade` int(11) NOT NULL,
  `employee_basic_salary` varchar(55) DEFAULT NULL,
  `employee_present_address` text NOT NULL,
  `employee_permanent_address` text DEFAULT NULL,
  `employee_spouse` longtext DEFAULT NULL,
  `employee_children` longtext DEFAULT NULL,
  `employee_language` longtext DEFAULT NULL,
  `employee_education` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `working_place` varchar(55) NOT NULL,
  `employee_seniority` varchar(55) DEFAULT NULL,
  `employee_type` varchar(55) NOT NULL,
  `blood_group` varchar(21) NOT NULL,
  `identification_mark` varchar(55) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hrms_employees`
--

INSERT INTO `hrms_employees` (`employee_id`, `employee_bpc_id`, `employee_name`, `employee_designation`, `employee_father_name`, `employee_mother_name`, `employee_district`, `employee_birth_date`, `employee_prl_date`, `employee_posting`, `employee_rank`, `employee_location`, `employee_join_date`, `employee_cadre`, `employee_batch`, `employee_release_date`, `employee_confirm_g_o_date`, `employee_sex`, `employee_religion`, `employee_marital_state`, `employee_mobile`, `employee_email`, `employee_nid`, `employee_department`, `employee_unit`, `employee_payscale_grade`, `employee_basic_salary`, `employee_present_address`, `employee_permanent_address`, `employee_spouse`, `employee_children`, `employee_language`, `employee_education`, `created_at`, `updated_at`, `working_place`, `employee_seniority`, `employee_type`, `blood_group`, `identification_mark`) VALUES
(6, 4565, 'fght rtyrt', 1, 'try', NULL, 40, '2021-06-15', '2021-06-16', NULL, '45', NULL, '2021-06-21', NULL, NULL, NULL, NULL, 'Male', 2, 1, '5467576571', 'ghhd@gmail.com', '5676556342', NULL, 3, 19, '16910', 'rtytry tr rtyrt tht ty', NULL, NULL, NULL, NULL, NULL, '2021-06-28 07:17:43', '2021-06-29 08:08:01', 'commercial_unit', NULL, 'Deputation', 'A+', NULL),
(7, 567, 'Mohammad Mezbahul Islam Milu', 1, NULL, NULL, 40, NULL, NULL, NULL, '220', NULL, '2021-06-01', NULL, NULL, NULL, NULL, 'Female', 1, 2, '01321135467', 'te544rst@gmail.com', '9835423218', NULL, 2, 19, '12600', '4t54 5454 5gfhf hgfhgf gfbgfh tghfd ghf hgfhgfh gfh gfh t', NULL, '{\"spouse_name\":[\"dfgfd\"],\"spouse_nid\":[\"1234567812\"],\"spouse_occup\":[\"House Wife\"],\"spouse_desg\":[\"N\\/A\"],\"spouse_dist\":[\"40\"],\"spouse_org\":[\"N\\/A\"],\"spouse_loc\":[\"MIrpur\"]}', '{\"child_name\":[\"Fatema\",\"Jayed\"],\"child_birth\":[\"2021-06-08\",\"2021-06-30\"],\"child_sex\":[\"Female\",\"Male\"]}', '{\"lang_name\":[\"Bangla\",\"English\",\"Hindi\"],\"readLang\":[\"Y\",\"Y\"],\"writeLang\":[\"Y\",\"Y\"],\"speakLang\":[\"Y\",\"Y\",\"Y\"]}', '{\"ins_name\":[\"Chitttagong University Of Engineering & Technology\",\"Noakhali Science & Technology University\"],\"subject\":[\"Computer Science Engineering\",\"Science\"],\"degree\":[\"BSc\",\"Master of Science\"],\"passing_year\":[\"2018\",\"2019\"],\"result\":[\"3.97\",\"5.00\"]}', '2021-06-28 10:44:47', '2021-06-29 08:08:08', 'commercial_unit', NULL, 'Deputation', 'A+', NULL),
(8, 345353, 'fghfg fghf g', 2, 'gfhfg fgh', 'gtdfgfd dfg', 40, '2021-06-23', '2021-06-24', NULL, '550', NULL, '2021-06-25', NULL, NULL, '2021-06-10', NULL, 'Male', 2, 2, '0112135467', 'reter@gmaikg', '64564565454', 2, NULL, 19, '16100', 'trew reter re rretre ertre ertertererre', NULL, '{\"spouse_name\":[\"Marjina Aktar\"],\"spouse_nid\":[\"1234567812\"],\"spouse_occup\":[\"House Wife\"],\"spouse_desg\":[\"N\\/A\"],\"spouse_dist\":[\"27\"],\"spouse_org\":[\"N\\/A\"],\"spouse_loc\":[\"Khilkhet\"]}', '{\"child_name\":[\"Fatema\"],\"child_birth\":[\"2021-06-15\"],\"child_sex\":[\"Female\"]}', '{\"lang_name\":[\"Bangla\",\"English\"],\"readLang\":[\"Y\",\"Y\"],\"writeLang\":[\"Y\",\"Y\"],\"speakLang\":[\"Y\",\"Y\"]}', '{\"ins_name\":[\"BGC Trust University\"],\"subject\":[\"Accounting\"],\"degree\":[\"BSc\"],\"passing_year\":[\"2018\"],\"result\":[\"3.70\"]}', '2021-06-28 11:49:05', '2021-06-29 08:08:16', 'head_office', NULL, 'Deputation', 'A-', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hrms_employee_basics`
--

CREATE TABLE `hrms_employee_basics` (
  `employee_basic_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `payscale_grad_no` int(11) NOT NULL,
  `payscale_step` int(11) NOT NULL,
  `employee_basic_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_festivals`
--

CREATE TABLE `hrms_festivals` (
  `festival_id` int(10) UNSIGNED NOT NULL,
  `religion_id` int(11) NOT NULL,
  `festival_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_festivals`
--

INSERT INTO `hrms_festivals` (`festival_id`, `religion_id`, `festival_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Eid-ul-Azha', '2021-06-22 14:22:39', '2021-06-22 14:22:39'),
(2, 2, 'Durga Puja', '2021-06-23 11:30:04', '2021-06-23 11:30:04'),
(3, 4, 'Christmasday', '2021-06-23 11:30:23', '2021-06-23 11:30:23'),
(4, 1, 'Eid-ul-Fitre', '2021-06-23 11:41:01', '2021-06-23 11:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_festival_bonuses`
--

CREATE TABLE `hrms_festival_bonuses` (
  `festival_bonus_id` int(10) UNSIGNED NOT NULL,
  `festival_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `festival_bonus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `date` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_increments`
--

CREATE TABLE `hrms_increments` (
  `increment_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_basic_salary` int(11) DEFAULT NULL,
  `increment_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `increment_salary` int(11) NOT NULL,
  `increment_year` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_installments`
--

CREATE TABLE `hrms_installments` (
  `installment_id` int(11) NOT NULL,
  `installment_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_loans`
--

CREATE TABLE `hrms_loans` (
  `loan_id` int(10) UNSIGNED NOT NULL,
  `loan_title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` float NOT NULL,
  `installment` int(11) NOT NULL,
  `interest` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_schedule` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_loans`
--

INSERT INTO `hrms_loans` (`loan_id`, `loan_title`, `loan_code`, `amount`, `installment`, `interest`, `payment_schedule`, `created_at`, `updated_at`) VALUES
(7, 'House Building Loan', 'HBL', 120000, 120, '10', 60, '2021-06-06 08:59:49', '2021-06-06 08:59:49'),
(8, 'House Repairing Loan', 'HRL', 60000, 60, '10', 30, '2021-06-06 09:02:02', '2021-06-06 09:02:02'),
(9, 'Motor Car Loan', 'MCL', 60000, 60, '10', 30, '2021-06-06 09:03:02', '2021-06-06 09:03:02'),
(10, 'Computer Purchase Loan', 'CPL', 50000, 50, '10', 25, '2021-06-06 09:04:30', '2021-06-06 09:04:30'),
(11, 'Motor Cycle Loan', 'MCyL', 25000, 25, '10', 25, '2021-06-06 09:06:06', '2021-06-06 09:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_loan_interests`
--

CREATE TABLE `hrms_loan_interests` (
  `loan_interest_id` int(11) NOT NULL,
  `salary_id` int(11) DEFAULT NULL,
  `loan_mange_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` varchar(55) NOT NULL,
  `principal` float NOT NULL,
  `installment` int(11) NOT NULL,
  `total_recovery` float NOT NULL,
  `balance` float NOT NULL,
  `interest` float DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrms_loan_interests`
--

INSERT INTO `hrms_loan_interests` (`loan_interest_id`, `salary_id`, `loan_mange_id`, `employee_id`, `date`, `principal`, `installment`, `total_recovery`, `balance`, `interest`, `updated_at`, `created_at`) VALUES
(16, NULL, 25, 4565, '2021-03', 120000, 1000, 1000, 119000, 1000, '2021-06-29', '2021-06-29'),
(17, NULL, 25, 4565, '2021-04', 119000, 1000, 2000, 118000, 991.667, '2021-06-29', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_loan_manages`
--

CREATE TABLE `hrms_loan_manages` (
  `loan_manage_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `loan_id` int(5) NOT NULL,
  `interest` int(11) DEFAULT NULL,
  `loan_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  `payableAmount` float DEFAULT NULL,
  `installment` int(11) NOT NULL,
  `monthly_payment` int(11) NOT NULL,
  `monthlyPayableAmount` float DEFAULT NULL,
  `installment_no` int(11) DEFAULT NULL,
  `paid_amount` float DEFAULT NULL,
  `rest_amount` float DEFAULT NULL,
  `first_year_interest` float DEFAULT NULL,
  `current_or_one_year` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_installment_no` int(11) DEFAULT NULL,
  `interest_paid_amount` float DEFAULT NULL,
  `interest_rest_amount` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_loan_manages`
--

INSERT INTO `hrms_loan_manages` (`loan_manage_id`, `employee_id`, `loan_id`, `interest`, `loan_date`, `amount`, `payableAmount`, `installment`, `monthly_payment`, `monthlyPayableAmount`, `installment_no`, `paid_amount`, `rest_amount`, `first_year_interest`, `current_or_one_year`, `interest_installment_no`, `interest_paid_amount`, `interest_rest_amount`, `created_at`, `updated_at`) VALUES
(25, 4565, 7, 10, '2021-02-19', 120000, NULL, 120, 1000, NULL, 2, 2000, 118000, 361.644, 'current', NULL, NULL, NULL, '2021-06-29 10:17:05', '2021-06-29 10:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_overtimes`
--

CREATE TABLE `hrms_overtimes` (
  `overtime_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overtime_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_payscale`
--

CREATE TABLE `hrms_payscale` (
  `payscale_id` int(11) NOT NULL,
  `payscale_grad_no` int(11) NOT NULL,
  `payscale_salary_min` varchar(55) NOT NULL,
  `payscale_salary_max` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrms_payscale`
--

INSERT INTO `hrms_payscale` (`payscale_id`, `payscale_grad_no`, `payscale_salary_min`, `payscale_salary_max`) VALUES
(1, 20, '8250', '20010'),
(2, 19, '8500', '20570'),
(3, 18, '8800', '21310'),
(4, 17, '9000', '21800'),
(5, 16, '9300', '22490'),
(6, 15, '9700', '23490'),
(7, 14, '10200', '24680'),
(8, 13, '11000', '26590'),
(9, 12, '11300', '27300'),
(10, 11, '12500', '30230'),
(11, 10, '16000', '38640'),
(12, 9, '22000', '53060'),
(13, 8, '23000', '55470'),
(14, 7, '29000', '63410'),
(15, 6, '35500', '67010'),
(16, 5, '43000', '69850'),
(17, 4, '50000', '71200'),
(18, 3, '56500', '74400'),
(19, 2, '66000', '76490'),
(20, 1, '78000', '78000');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_payscale_steps`
--

CREATE TABLE `hrms_payscale_steps` (
  `payscale_step_id` int(11) NOT NULL,
  `payscale_step` int(6) NOT NULL,
  `payscale_grad_no` int(11) NOT NULL,
  `payscale_step_salary` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrms_payscale_steps`
--

INSERT INTO `hrms_payscale_steps` (`payscale_step_id`, `payscale_step`, `payscale_grad_no`, `payscale_step_salary`) VALUES
(1, 1, 20, '8250'),
(2, 2, 20, '8670'),
(3, 3, 20, '9110'),
(4, 4, 20, '9570'),
(5, 5, 20, '10050'),
(6, 6, 20, '10560'),
(7, 7, 20, '11090'),
(8, 8, 20, '11650'),
(9, 9, 20, '12240'),
(10, 10, 20, '12860'),
(11, 11, 20, '13510'),
(12, 12, 20, '14190'),
(13, 13, 20, '14900'),
(14, 14, 20, '15650'),
(15, 15, 20, '16440'),
(16, 16, 20, '17270'),
(17, 17, 20, '18140'),
(18, 18, 20, '19050'),
(19, 19, 20, '20010'),
(20, 1, 19, '8500'),
(21, 2, 19, '8930'),
(22, 3, 19, '9380'),
(23, 4, 19, '9850'),
(24, 5, 19, '10350'),
(25, 6, 19, '10870'),
(26, 7, 19, '11420'),
(27, 8, 19, '12000'),
(28, 9, 19, '12600'),
(29, 10, 19, '13230'),
(30, 11, 19, '13900'),
(31, 12, 19, '14600'),
(32, 13, 19, '15330'),
(33, 14, 19, '16100'),
(34, 15, 19, '16910'),
(35, 16, 19, '17760'),
(36, 17, 19, '18650'),
(37, 18, 19, '19590'),
(38, 19, 19, '20570'),
(39, 1, 18, '8800'),
(40, 2, 18, '9240'),
(41, 3, 18, '9710'),
(42, 4, 18, '10200'),
(43, 5, 18, '10710'),
(44, 6, 18, '11250'),
(45, 7, 18, '11820'),
(46, 8, 18, '12420'),
(47, 9, 18, '13050'),
(48, 10, 18, '13710'),
(49, 11, 18, '14400'),
(50, 12, 18, '15120'),
(51, 13, 18, '15880'),
(52, 14, 18, '16680'),
(53, 15, 18, '17520'),
(54, 16, 18, '18400'),
(55, 17, 18, '19320'),
(56, 18, 18, '20290'),
(57, 19, 18, '21310'),
(58, 1, 17, '9000'),
(59, 2, 17, '9450'),
(60, 3, 17, '9930'),
(61, 4, 17, '10430'),
(62, 5, 17, '10960'),
(63, 6, 17, '11510'),
(64, 7, 17, '12090'),
(65, 8, 17, '12700'),
(66, 9, 17, '13340'),
(67, 10, 17, '14010'),
(68, 11, 17, '14720'),
(69, 12, 17, '15460'),
(70, 13, 17, '16240'),
(71, 14, 17, '17060'),
(72, 15, 17, '17920'),
(73, 16, 17, '18820'),
(74, 17, 17, '19770'),
(75, 18, 17, '20760'),
(76, 19, 17, '21800'),
(96, 1, 16, '9300'),
(97, 2, 16, '9770'),
(98, 3, 16, '10260'),
(99, 4, 16, '10780'),
(100, 5, 16, '11320'),
(101, 6, 16, '11890'),
(102, 7, 16, '12490'),
(103, 8, 16, '13120'),
(104, 9, 16, '13780'),
(105, 10, 16, '14470'),
(106, 11, 16, '15200'),
(107, 12, 16, '15960'),
(108, 13, 16, '16760'),
(109, 14, 16, '17600'),
(110, 15, 16, '18480'),
(111, 16, 16, '19410'),
(112, 17, 16, '20390'),
(113, 18, 16, '21410'),
(114, 19, 16, '22490'),
(115, 1, 15, '9700'),
(116, 2, 15, '10190'),
(117, 3, 15, '10700'),
(118, 4, 15, '11240'),
(119, 5, 15, '11810'),
(120, 6, 15, '12410'),
(121, 7, 15, '13040'),
(122, 8, 15, '13700'),
(123, 9, 15, '14390'),
(124, 10, 15, '15110'),
(125, 11, 15, '15870'),
(126, 12, 15, '16670'),
(127, 13, 15, '17510'),
(128, 14, 15, '18390'),
(129, 15, 15, '19310'),
(130, 16, 15, '20280'),
(131, 17, 15, '21300'),
(132, 18, 15, '22370'),
(133, 19, 15, '23490'),
(134, 1, 14, '10200'),
(135, 2, 14, '10710'),
(136, 3, 14, '11250'),
(137, 4, 14, '11820'),
(138, 5, 14, '12420'),
(139, 6, 14, '13050'),
(140, 7, 14, '13710'),
(141, 8, 14, '14400'),
(142, 9, 14, '15120'),
(143, 10, 14, '15880'),
(144, 11, 14, '16680'),
(145, 12, 14, '17520'),
(146, 13, 14, '18400'),
(147, 14, 14, '19320'),
(148, 15, 14, '20290'),
(149, 16, 14, '21310'),
(150, 17, 14, '22380'),
(151, 18, 14, '23500'),
(152, 19, 14, '24680'),
(153, 1, 13, '11000'),
(154, 2, 13, '11550'),
(155, 3, 13, '12130'),
(156, 4, 13, '12740'),
(157, 5, 13, '13380'),
(158, 6, 13, '14050'),
(159, 7, 13, '14760'),
(160, 8, 13, '15500'),
(161, 9, 13, '16280'),
(162, 10, 13, '17100'),
(163, 11, 13, '17960'),
(164, 12, 13, '18860'),
(165, 13, 13, '19810'),
(166, 14, 13, '20810'),
(167, 15, 13, '21860'),
(168, 16, 13, '22960'),
(169, 17, 13, '24110'),
(170, 18, 13, '25320'),
(171, 19, 13, '26590'),
(172, 1, 12, '11300'),
(173, 2, 12, '11870'),
(174, 3, 12, '12470'),
(175, 4, 12, '13100'),
(176, 5, 12, '13760'),
(177, 6, 12, '14450'),
(178, 7, 12, '15180'),
(179, 8, 12, '15940'),
(180, 9, 12, '16740'),
(181, 10, 12, '17580'),
(182, 11, 12, '18460'),
(183, 12, 12, '19390'),
(184, 13, 12, '20360'),
(185, 14, 12, '21380'),
(186, 15, 12, '22450'),
(187, 16, 12, '23580'),
(188, 17, 12, '24760'),
(189, 18, 12, '26000'),
(190, 19, 12, '27300'),
(191, 1, 11, '12500'),
(192, 2, 11, '13130'),
(193, 3, 11, '13790'),
(194, 4, 11, '14480'),
(195, 5, 11, '15210'),
(196, 6, 11, '15980'),
(197, 7, 11, '16780'),
(198, 8, 11, '17620'),
(199, 9, 11, '18510'),
(200, 10, 11, '19440'),
(201, 11, 11, '20420'),
(202, 12, 11, '21450'),
(203, 13, 11, '22530'),
(204, 14, 11, '23660'),
(205, 15, 11, '24850'),
(206, 16, 11, '26100'),
(207, 17, 11, '27410'),
(208, 18, 11, '28790'),
(209, 19, 11, '30230'),
(210, 1, 10, '16000'),
(211, 2, 10, '16800'),
(212, 3, 10, '17640'),
(213, 4, 10, '18530'),
(214, 5, 10, '19460'),
(215, 6, 10, '20440'),
(216, 7, 10, '21470'),
(217, 8, 10, '22550'),
(218, 9, 10, '23680'),
(219, 10, 10, '24870'),
(220, 11, 10, '26120'),
(221, 12, 10, '27430'),
(222, 13, 10, '28810'),
(223, 14, 10, '30260'),
(224, 15, 10, '31780'),
(225, 16, 10, '33370'),
(226, 17, 10, '35040'),
(227, 18, 10, '36800'),
(228, 19, 10, '38640'),
(229, 1, 9, '22000'),
(230, 2, 9, '23100'),
(231, 3, 9, '24260'),
(232, 4, 9, '25480'),
(233, 5, 9, '26760'),
(234, 6, 9, '28100'),
(235, 7, 9, '29510'),
(236, 8, 9, '30990'),
(237, 9, 9, '32540'),
(238, 10, 9, '34170'),
(239, 11, 9, '35880'),
(240, 12, 9, '37680'),
(241, 13, 9, '39570'),
(242, 14, 9, '41550'),
(243, 15, 9, '43630'),
(244, 16, 9, '45820'),
(245, 17, 9, '48120'),
(246, 18, 9, '50530'),
(247, 19, 9, '53060'),
(248, 1, 8, '23000'),
(249, 2, 8, '24150'),
(250, 3, 8, '25360'),
(251, 4, 8, '26630'),
(252, 5, 8, '27970'),
(253, 6, 8, '29370'),
(254, 7, 8, '30840'),
(255, 8, 8, '32390'),
(256, 9, 8, '34010'),
(257, 10, 8, '35720'),
(258, 11, 8, '37510'),
(259, 12, 8, '39390'),
(260, 13, 8, '41360'),
(261, 14, 8, '43430'),
(262, 15, 8, '45610'),
(263, 16, 8, '47900'),
(264, 17, 8, '50300'),
(265, 18, 8, '52820'),
(266, 19, 8, '55470'),
(267, 1, 7, '29000'),
(268, 2, 7, '30450'),
(269, 3, 7, '31980'),
(270, 4, 7, '33580'),
(271, 5, 7, '35260'),
(272, 6, 7, '37030'),
(273, 7, 7, '38890'),
(274, 8, 7, '40840'),
(275, 9, 7, '42890'),
(276, 10, 7, '45040'),
(277, 11, 7, '47300'),
(278, 12, 7, '49670'),
(279, 13, 7, '52160'),
(280, 14, 7, '54770'),
(281, 15, 7, '57510'),
(282, 16, 7, '60390'),
(283, 17, 7, '63410'),
(284, 1, 6, '35500'),
(285, 2, 6, '37280'),
(286, 3, 6, '39150'),
(287, 4, 6, '41110'),
(288, 5, 6, '43170'),
(289, 6, 6, '45330'),
(290, 7, 6, '47600'),
(291, 8, 6, '49980'),
(292, 9, 6, '52480'),
(293, 10, 6, '55110'),
(294, 11, 6, '57870'),
(295, 12, 6, '60770'),
(296, 13, 6, '63810'),
(297, 14, 6, '67010'),
(298, 1, 5, '43000'),
(299, 2, 5, '44940'),
(300, 3, 5, '46970'),
(301, 4, 5, '49090'),
(302, 5, 5, '51300'),
(303, 6, 5, '53610'),
(304, 7, 5, '56030'),
(305, 8, 5, '58560'),
(306, 9, 5, '61200'),
(307, 10, 5, '63960'),
(308, 11, 5, '66840'),
(309, 12, 5, '69850'),
(310, 1, 4, '50000'),
(311, 2, 4, '52000'),
(312, 3, 4, '54080'),
(313, 4, 4, '56250'),
(314, 5, 4, '58500'),
(315, 6, 4, '60840'),
(316, 7, 4, '63280'),
(317, 8, 4, '65820'),
(318, 9, 4, '68460'),
(319, 10, 4, '71200'),
(320, 1, 3, '56500'),
(321, 2, 3, '58760'),
(322, 3, 3, '61120'),
(323, 4, 3, '63570'),
(324, 5, 3, '66120'),
(325, 6, 3, '68770'),
(326, 7, 3, '71530'),
(327, 8, 3, '74400'),
(328, 1, 2, '66000'),
(329, 2, 2, '68480'),
(330, 3, 2, '71050'),
(331, 4, 2, '73720'),
(332, 5, 2, '76490'),
(333, 1, 1, '78000');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_postings`
--

CREATE TABLE `hrms_postings` (
  `posting_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `posting_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `posting_from` date NOT NULL,
  `posting_to` date DEFAULT NULL,
  `posting_pay_scale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_abroad` tinyint(4) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `posting_section` int(11) DEFAULT NULL,
  `posting_unit` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_promotions`
--

CREATE TABLE `hrms_promotions` (
  `promot_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `promot_date` date NOT NULL,
  `promot_g_o_date` date DEFAULT NULL,
  `promot_nature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promot_pay_scale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `increment_salary` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `promotion_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_designation` int(11) DEFAULT NULL,
  `promoted_designation` int(11) NOT NULL,
  `previous_grade` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_salary` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_publications`
--

CREATE TABLE `hrms_publications` (
  `publication_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `publication_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `publication_type` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_curr_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_salaries`
--

CREATE TABLE `hrms_salaries` (
  `salary_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `issue_no` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_addition_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_deductiontion_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `salary_total_addition` double(8,2) DEFAULT NULL,
  `salary_total_deductiontion` double(8,2) DEFAULT NULL,
  `salary_total` double(8,2) DEFAULT NULL,
  `partial_day` int(11) DEFAULT NULL,
  `active_salary` float NOT NULL,
  `partial_salary` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_salary_categories`
--

CREATE TABLE `hrms_salary_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_salary_categories`
--

INSERT INTO `hrms_salary_categories` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(3, 'Chairman', '2021-06-27 12:35:40', '2021-06-27 12:35:40'),
(4, 'Dir(Planning)', '2021-06-27 12:36:13', '2021-06-27 12:36:13'),
(5, 'Officer(Bank)', '2021-06-27 12:36:25', '2021-06-27 12:36:25'),
(6, 'PRL Officer:Bank', '2021-06-27 12:36:41', '2021-06-27 12:36:41'),
(7, 'Staff(Bank)', '2021-06-27 12:36:52', '2021-06-27 12:36:52'),
(8, 'PRL(Bank) staff', '2021-06-27 12:37:03', '2021-06-27 12:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_salary_rules`
--

CREATE TABLE `hrms_salary_rules` (
  `rules_id` int(10) UNSIGNED NOT NULL,
  `rules_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rules_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rules_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rules_condition` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rules_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rules_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rules_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_fixed` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_salary_rules`
--

INSERT INTO `hrms_salary_rules` (`rules_id`, `rules_name`, `rules_code`, `rules_type`, `rules_condition`, `rules_amount`, `rules_description`, `rules_status`, `is_fixed`, `created_at`, `updated_at`) VALUES
(1, 'Conveyance Allowance', 'CONV', 'addition', NULL, '400', NULL, 'Active', 1, '2021-06-22 14:17:34', '2021-06-22 14:17:34'),
(2, 'City Tax', 'CT', 'deduction', NULL, '5', NULL, 'Active', 0, '2021-06-22 14:18:12', '2021-06-22 14:23:13'),
(4, 'House Rent Allowance', 'HRA', 'addition', NULL, NULL, NULL, 'Active', 0, '2021-06-22 14:42:05', '2021-06-22 14:42:05'),
(5, 'Vehicle Allowance', 'VA', 'addition', NULL, '500', NULL, 'Active', 1, '2021-06-23 08:36:59', '2021-06-23 08:36:59'),
(6, 'Stamp', 'Stamp', 'deduction', NULL, '10', NULL, 'Active', 1, '2021-06-23 10:10:14', '2021-06-23 10:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `hrms_salary_structures`
--

CREATE TABLE `hrms_salary_structures` (
  `structure_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `structure_addition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_deduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_frequency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_status` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_salary` float DEFAULT NULL,
  `active_salary` float DEFAULT NULL,
  `partial_day` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_trainings`
--

CREATE TABLE `hrms_trainings` (
  `train_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `train_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `status` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_units`
--

CREATE TABLE `hrms_units` (
  `unit_id` int(10) UNSIGNED NOT NULL,
  `unit_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrms_units`
--

INSERT INTO `hrms_units` (`unit_id`, `unit_title`, `created_at`, `updated_at`) VALUES
(1, 'C Unit', '2021-06-22 14:21:38', '2021-06-22 14:21:38'),
(2, 'A Unit', '2021-06-22 14:21:46', '2021-06-22 14:21:46'),
(3, 'B Unit', '2021-06-22 14:21:52', '2021-06-22 14:21:52');

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
(1, '2020_12_21_082939_create_hotel_lists_table', 1),
(2, '2020_12_22_085815_create_hotel_rooms_table', 1),
(3, '2014_07_02_230147_migration_cartalyst_sentinel', 2),
(4, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1=Admin, 2= Frontend ',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `status`, `created_at`) VALUES
('admin@mail.com', 'uINBILAYBuRbPXEU4h0o8IorT6zEAPEO', 1, '2021-04-12 09:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(2, 2, 'mOcxEKkizYQkav4K6h7mlKoR8JtCimcQ', '2021-01-14 22:17:09', '2021-01-14 22:17:09'),
(4, 2, 'LYE9f1KnXvrkypqyQCkm0GAkfSzvrgvk', '2021-01-14 22:21:57', '2021-01-14 22:21:57'),
(8, 1, 'GKBbbh80jkldjiRz0hXTootLkyNJpO6j', '2021-01-15 18:36:06', '2021-01-15 18:36:06'),
(24, 16, 'GdW8LKQAozN5RQT1IoPwDBjWzMY9AurF', '2021-01-16 00:59:05', '2021-01-16 00:59:05'),
(28, 16, 'NVdHbTgs5xc0pVsMAd09rehTftjt4Hmb', '2021-01-16 05:40:20', '2021-01-16 05:40:20'),
(30, 6, 'hwsA5tkZiJehdvbOEqucb64T7PemupXj', '2021-01-17 17:14:11', '2021-01-17 17:14:11'),
(31, 6, 'c4y2oJXTo0t3ZvqwhbqgOAEICmnA28bu', '2021-01-17 17:22:33', '2021-01-17 17:22:33'),
(32, 6, 'tbf19OtjAtHb3z8IgDqrkmLLiPplrZMc', '2021-01-17 21:20:00', '2021-01-17 21:20:00'),
(35, 6, '80Ev6oWiDtS4aoU0Yylt4XEBYagUyWMR', '2021-01-18 09:43:21', '2021-01-18 09:43:21'),
(40, 23, 'V3W6pT9KOrVGxIRwKUvsJ0QkUwjaqQ6N', '2021-01-19 04:53:57', '2021-01-19 04:53:57'),
(58, 6, 'IgYoyVFwfH55hj8flX0jyYFQkVk1fGFA', '2021-01-19 19:38:35', '2021-01-19 19:38:35'),
(61, 6, '33NUPlLJo8ZNYUIoMrT95ZqhiDgfJhTy', '2021-01-20 10:53:20', '2021-01-20 10:53:20'),
(63, 6, 'W5bOb7CNFAFkEmBRrfomBdqyKv9IDgCk', '2021-01-20 22:46:34', '2021-01-20 22:46:34'),
(64, 6, 'zfjZ7Cc5m3yQqnb7u3HmunRaV3Plbsan', '2021-01-21 04:48:12', '2021-01-21 04:48:12'),
(65, 6, 'BTiv9xXDy4bldojM5h86Rd8hc7BhIYlG', '2021-01-22 22:55:49', '2021-01-22 22:55:49'),
(68, 6, 'h0S0TrFkXkVvuAm2EdHOW2DsQyNS8mc2', '2021-01-23 05:40:16', '2021-01-23 05:40:16'),
(69, 6, 'LrBQ7xOUQcOK0KE1YOquJJ3gHFxwwelp', '2021-01-23 23:19:36', '2021-01-23 23:19:36'),
(71, 6, 'IRtQTCCEBTdqXhjIB9ZTpCe799MTB3o8', '2021-01-24 05:52:10', '2021-01-24 05:52:10'),
(72, 6, '2hgQmdGcdSolOgDQJteeI6cypy8cJizR', '2021-01-24 23:09:14', '2021-01-24 23:09:14'),
(73, 6, 'uMAJT8TBSF9sBqKLDCCoZplVVORwwUiM', '2021-01-27 05:15:11', '2021-01-27 05:15:11'),
(75, 6, 'YgmmDP3FbtkVgcNu1j78RlE1AzsCBWXB', '2021-01-27 08:15:50', '2021-01-27 08:15:50'),
(76, 6, '1xTuzz2Nzbl5AzndLxsZR8wfDY7OtODc', '2021-01-27 23:33:33', '2021-01-27 23:33:33'),
(77, 6, 'Y7z7XFG6A6zXAWthf0KkuhdT4DDZ7NAI', '2021-01-28 02:48:51', '2021-01-28 02:48:51'),
(78, 6, 'AtC0kSXjsdgUOR1VIFeRmEqPdsMX9eUZ', '2021-01-29 23:33:17', '2021-01-29 23:33:17'),
(79, 6, 't32FPCMj0myuj9XMlbNHRYFbpQTDWYa0', '2021-01-30 03:28:52', '2021-01-30 03:28:52'),
(80, 6, 'IQJRDKdRRYWxdN3DzmRIuu6xG4MPj5jQ', '2021-01-30 22:59:44', '2021-01-30 22:59:44'),
(83, 6, 'yAa4B4WQIjZpQ0YZ05DcjVlWmhaaLgUG', '2021-02-01 07:53:28', '2021-02-01 07:53:28'),
(84, 6, 'beG2D1R0L9BY7x8U8OkCmggdWO4y2ECK', '2021-02-01 23:14:11', '2021-02-01 23:14:11'),
(85, 6, 'EzBjj2XWzrKlHy7K1fbUn2nPPK4WsW5x', '2021-02-02 23:31:11', '2021-02-02 23:31:11'),
(86, 6, '96iESDVvAU7lm3qMZrK362YRhl87AqLP', '2021-02-03 09:00:16', '2021-02-03 09:00:16'),
(87, 6, '7qiFlbnoj0A2d1Mpb9vMmyKpMcfk9Eb4', '2021-02-03 23:06:37', '2021-02-03 23:06:37'),
(88, 6, 'QJVGxG3TYnGu3AHEr0EoPnq7AAmeQqAM', '2021-02-05 23:04:33', '2021-02-05 23:04:33'),
(89, 6, 'VhniZxpUOB4OAxhFgsEAtY2rDuHpOPxh', '2021-02-07 05:43:02', '2021-02-07 05:43:02'),
(90, 6, 'Lqb892QwFw5ZkmLXlAyImqC4hi579c1P', '2021-02-07 10:39:50', '2021-02-07 10:39:50'),
(91, 6, 'Z9RfAGpZaJvYxYFOVL0ulcmR8AucQ2Wv', '2021-02-08 04:59:04', '2021-02-08 04:59:04'),
(92, 6, 'ZBQvFbyUpUZTqrbIAH9qWYNoqF6t1uN5', '2021-02-09 05:18:20', '2021-02-09 05:18:20'),
(95, 6, 'Smxj6FtKkSs4YjKq3Zh2rmlY7aZlqJeU', '2021-02-10 08:40:54', '2021-02-10 08:40:54'),
(96, 6, '4VJsYXH425tgoRyHZi6tnwF51Az62iRb', '2021-02-11 05:47:49', '2021-02-11 05:47:49'),
(97, 6, 'mbqxkLsfvjgQoIF4DtjtISIvzZZlVOqt', '2021-02-11 10:17:30', '2021-02-11 10:17:30'),
(98, 6, 'XZlQMNqOuEUumxvXpLyPtXiCfnWMvKII', '2021-02-11 12:17:55', '2021-02-11 12:17:55'),
(99, 6, 'ZsJMhJWTn4UPrxhTsNOqQI9QM0DEMHe5', '2021-02-13 04:35:55', '2021-02-13 04:35:55'),
(100, 6, 'FQg4E3qti38LaN8RdtQxMB33VBSYSZob', '2021-02-13 10:45:40', '2021-02-13 10:45:40'),
(101, 6, 'JazInljZ5VEWIawa2YnjE04vgaZIAJOT', '2021-02-14 05:12:27', '2021-02-14 05:12:27'),
(102, 6, 'lo0ARBSxWEwbLni36O3HrrdUUS3vw57v', '2021-02-15 06:02:36', '2021-02-15 06:02:36'),
(103, 6, 'NNuwpCo69xDzc9yAjMsyg5QfwkfAANrg', '2021-02-15 06:41:15', '2021-02-15 06:41:15'),
(104, 6, 'Zc0QHoxgY6H97z05wgIgZ30UuZLdCSKL', '2021-02-16 07:27:25', '2021-02-16 07:27:25'),
(105, 6, 'KtzLwwLtxykyKvKdNbhaFtM1lPeX4oI9', '2021-02-17 05:25:18', '2021-02-17 05:25:18'),
(106, 6, 'qu9BOEwyqYHwTwbVI8dwRJYnovaWxkzL', '2021-02-17 11:49:08', '2021-02-17 11:49:08'),
(107, 6, 'Irz0zxutoB5BEMjyj9SsNOYOzR6flkG7', '2021-02-18 05:20:52', '2021-02-18 05:20:52'),
(108, 6, 'J7SXxCADQ3mAuNLeE6LjwTfaCpcGJ0PK', '2021-02-20 04:42:03', '2021-02-20 04:42:03'),
(109, 6, 'tY1uqY8jbcLRYU2BWx9ocP3lZeXWGQdC', '2021-02-22 05:18:43', '2021-02-22 05:18:43'),
(110, 6, 'vCAVmg7a7Gg74zluaPNRgl5SjjMxYO2k', '2021-02-23 05:28:50', '2021-02-23 05:28:50'),
(111, 6, 'x0lZUzjUjOH3XUoipZPlwSpwejBXSpvL', '2021-02-24 05:35:23', '2021-02-24 05:35:23'),
(112, 6, 'qZQIUn1Me0FwVGIlWMRbqBzDpfO2CZOV', '2021-02-24 12:31:44', '2021-02-24 12:31:44'),
(113, 6, 'vj9lhU1TsJX0n8QgGZ1s2sPMZCSrWXO3', '2021-02-25 05:11:49', '2021-02-25 05:11:49'),
(114, 6, 'FQLhP4bWLBZ19qGiWuG7AWSjQzlGYLDy', '2021-02-25 07:12:28', '2021-02-25 07:12:28'),
(116, 6, 'OwpCVStuGJfyY9ENFs2l5vYFXSIyBLth', '2021-02-27 15:57:07', '2021-02-27 15:57:07'),
(117, 6, 'nmU12edH4CvmQ9PgpQyNPYQ3lGPWd1CF', '2021-02-28 05:26:16', '2021-02-28 05:26:16'),
(118, 6, 'BsEM4RLPIvA5OwGFk6kEcvhFUx7VyIBq', '2021-03-01 05:20:19', '2021-03-01 05:20:19'),
(119, 6, 'VOa5NJx1ZmfCwww8Gx57z5sOcAuMTJKp', '2021-03-02 05:21:17', '2021-03-02 05:21:17'),
(120, 6, '4dQtgUI3NAcDaJ2372NSgEvh2sALgXJC', '2021-03-02 09:55:30', '2021-03-02 09:55:30'),
(121, 6, 'vesJbwssF2iVRcReAda3WH1YqRNGw6c5', '2021-03-03 05:50:29', '2021-03-03 05:50:29'),
(122, 6, 'QAv7iayBcaLxwV3EwDrHk6HyIYblfgsY', '2021-03-04 05:23:30', '2021-03-04 05:23:30'),
(123, 6, 'zjHFXvjOcFrY9A6ribaqKFH1uzVFoSe5', '2021-03-06 05:02:26', '2021-03-06 05:02:26'),
(124, 6, 'sR4VD0SHbws6qN2q870yllv6n1WiRICc', '2021-03-07 05:37:35', '2021-03-07 05:37:35'),
(125, 6, '0HwzRb6WYSIp7uxe2nd6Dp1QjVbdt0oy', '2021-03-08 05:55:38', '2021-03-08 05:55:38'),
(126, 6, 'slB3QSLJOdMlwxrrfAcBNxe1nyV1r2PW', '2021-03-08 10:59:43', '2021-03-08 10:59:43'),
(127, 6, 'kCMal1Q5nkchq8sFpU0ePfQk6VbC3p9R', '2021-03-08 13:29:31', '2021-03-08 13:29:31'),
(131, 6, 'zv1Myg61YiRdFnNVZzuXdMNwtpAEQ85j', '2021-03-09 05:32:32', '2021-03-09 05:32:32'),
(132, 6, 'Xx1RmsdoohoaESH846kiR9l7F5yypqEO', '2021-03-10 04:53:25', '2021-03-10 04:53:25'),
(133, 6, 'InIdvwKQZ54O1ocWRtr89KGOuTlgvnTt', '2021-03-10 12:43:11', '2021-03-10 12:43:11'),
(134, 6, 'oiGn99ZPlm2w6msxHLtd2OdKPuABKjHy', '2021-03-11 04:44:47', '2021-03-11 04:44:47'),
(137, 6, 'tdJvwswO9sWRTQ80os7IWBPnVtGakxV1', '2021-03-13 13:02:49', '2021-03-13 13:02:49'),
(138, 6, 'jjlgTCLF66s3e3aDfo1HZ11CGcrxySg1', '2021-03-14 05:21:42', '2021-03-14 05:21:42'),
(139, 6, 'HigAss9ogPorQ8bajcAlaN6tV0CcuY75', '2021-03-15 05:08:56', '2021-03-15 05:08:56'),
(142, 6, 'iSuDX5e7Ea6h5TN8eXkU7gsbP4zrbfkM', '2021-03-16 13:16:58', '2021-03-16 13:16:58'),
(144, 6, 'LirKLVGasfoxRCXOqiFxLxbgFz4TgiU9', '2021-03-17 05:58:46', '2021-03-17 05:58:46'),
(146, 6, 'ioDMhNhbwof5yb3enrJYBELQzjOxgb3t', '2021-03-17 13:02:09', '2021-03-17 13:02:09'),
(148, 6, 'tfZvaZOZQEf1JMooCt6hTn7nycNj5dzD', '2021-03-18 12:19:26', '2021-03-18 12:19:26'),
(149, 6, 'kWWSNDORx2oWIzSSRPBYGmSpc9Lzufx0', '2021-03-19 06:14:08', '2021-03-19 06:14:08'),
(150, 6, 'jo3J00laeoDpNIx5ovvsiDflqG5OfFz2', '2021-03-20 05:45:36', '2021-03-20 05:45:36'),
(158, 6, 'jyuLk8YqQ2LGTIgBpHa8X3PZy6e0HmVT', '2021-03-21 13:48:48', '2021-03-21 13:48:48'),
(161, 6, 'xaovNihYzliRr0vlyao9LzyuE7arLY1u', '2021-03-22 13:12:43', '2021-03-22 13:12:43'),
(162, 6, '92VB3aZzHxaXKpSfyhLCtjBXsvl2paLO', '2021-03-23 05:56:15', '2021-03-23 05:56:15'),
(163, 6, 'wZoqnK9woDwNq6cP4Nhiw22qHDgKqDjH', '2021-03-23 10:08:17', '2021-03-23 10:08:17'),
(164, 6, 'cXWJYPzpfnNsCDm40Iuh5IFat6W1HCht', '2021-03-24 05:31:13', '2021-03-24 05:31:13'),
(165, 6, 'kAZpEkTPMoR9ZqxphjrKbAzNP3EcBrwD', '2021-03-24 08:30:00', '2021-03-24 08:30:00'),
(166, 6, 'Sc3G8R3nxBIuZbOXsKqEQ27xhrLDkGIZ', '2021-03-25 05:21:14', '2021-03-25 05:21:14'),
(167, 6, 'vVQlYeWBBRJvyR0w1LIZLkBMfhGviaKF', '2021-03-25 09:39:01', '2021-03-25 09:39:01'),
(169, 6, 'D6xUxwiHEmZ76x59ASkrdO4IPThTtTHg', '2021-03-27 08:28:02', '2021-03-27 08:28:02'),
(171, 6, '5dqO3uu2Px7XoSClxiFzfx1vbju8emqN', '2021-03-28 12:23:31', '2021-03-28 12:23:31'),
(172, 6, 'fA6asf06dWaFlmyP8g1pli83jYrNaZF2', '2021-03-29 06:35:09', '2021-03-29 06:35:09'),
(173, 6, 'JC6PPutL9SCJQPNIRTf3Gh0A9kdH2FRZ', '2021-03-29 10:36:02', '2021-03-29 10:36:02'),
(174, 6, '9y7LYdmG1WzcfhY8nGUNs7RslT1A3KP1', '2021-03-31 05:34:44', '2021-03-31 05:34:44'),
(175, 6, 'wWGU8n1Y22KpFQjeu4M7JR91tdTa1ikL', '2021-03-31 07:42:23', '2021-03-31 07:42:23'),
(176, 6, '6J5sy5FrlXNDwJGm3Bv0QhmHuP8lm7Ag', '2021-04-01 06:26:42', '2021-04-01 06:26:42'),
(177, 6, '8Zw99VO8hNzBiDIPPgottgYcVCN3LBzj', '2021-04-01 12:03:40', '2021-04-01 12:03:40'),
(178, 6, 'MWJAaPtcByZwKOjWgmUliSqpe3PaOQZd', '2021-04-01 13:49:08', '2021-04-01 13:49:08'),
(179, 6, 'rBNxwhi98vSxmqTwIaVEwDR15yYKiswv', '2021-04-03 10:37:31', '2021-04-03 10:37:31'),
(180, 6, '3cin0aV25Jk8J2D2JCUsSYnj9elpEJHq', '2021-04-03 12:55:58', '2021-04-03 12:55:58'),
(181, 6, 'ayMucGAhpwpDcugExzeGI9DC8LLOoMQ9', '2021-04-04 05:16:30', '2021-04-04 05:16:30'),
(182, 6, 'jpLyXiSssSwg696JAv8cr0EeXnCqWEsw', '2021-04-05 06:20:05', '2021-04-05 06:20:05'),
(184, 34, '3UBUTYc80LGpthkJOSDxCw13rlOj35Cu', '2021-04-06 11:06:00', '2021-04-06 11:06:00'),
(187, 36, 'bbh4CnNOndpU64LTuclzrrInRJoQByoR', '2021-04-06 11:12:38', '2021-04-06 11:12:38'),
(192, 6, 'BLKzzugQBDOHUMLnCQAbmBo9XVZEVVa9', '2021-04-07 09:43:24', '2021-04-07 09:43:24'),
(200, 6, 'Ho6G7Bv93YaYg4oxjFr41O4SKXc57mSP', '2021-04-07 11:34:23', '2021-04-07 11:34:23'),
(201, 6, 'qA0gTY5CtfHo0eibdfnAnQxjUKfyy2Zv', '2021-04-08 03:54:39', '2021-04-08 03:54:39'),
(205, 6, 'tuJXMBFbPoLsVJBaMlHQygizaxMLlCl0', '2021-04-10 08:32:48', '2021-04-10 08:32:48'),
(222, 6, 'w0SAARAJuaCgNSoNGc6GHh2oMuwoICku', '2021-04-12 11:15:49', '2021-04-12 11:15:49'),
(223, 6, 'QBsFzkiHn8fdjv8Gpri4wF6UsENAFJaL', '2021-04-14 06:27:55', '2021-04-14 06:27:55'),
(224, 6, 'mo3wmpQe7TAlOrGsti9sbpLqSQFZgKjJ', '2021-04-15 03:03:13', '2021-04-15 03:03:13'),
(225, 6, '0ug1MJPGwP64xJJn1jcJCiDfOFnTm7yR', '2021-04-15 09:17:35', '2021-04-15 09:17:35'),
(226, 6, 'RqeSaLuh0iU47qvmFJ0JxNE6g3P8RTd0', '2021-04-15 09:24:08', '2021-04-15 09:24:08'),
(227, 6, 'g7h6vGhoX5sTkyTeDGIEFnrl9HqJUxdp', '2021-04-15 09:35:53', '2021-04-15 09:35:53'),
(228, 6, '1W2kDtBkslqwd6TFRrqFBs7tNpHrGz0W', '2021-04-16 21:26:17', '2021-04-16 21:26:17'),
(229, 6, 'k4Cy5CQBbjhbzefLu6al19uV17pzecDB', '2021-04-17 03:32:38', '2021-04-17 03:32:38'),
(234, 6, '4XYsS3N1nE1ARnZ7wxD3jjYWFlj2RhwF', '2021-04-18 07:44:04', '2021-04-18 07:44:04'),
(235, 6, 'RUosyU3h40P6iNxC4z7kSW8P7LfbzRmz', '2021-04-19 03:14:41', '2021-04-19 03:14:41'),
(236, 6, '41MHXLBSLLXbFmVp3K9hkFWkhgtxS1iX', '2021-04-20 03:25:57', '2021-04-20 03:25:57'),
(237, 6, 'LoEEibiOZepQyrjO2agDh7oJN98HjMbw', '2021-04-21 04:02:44', '2021-04-21 04:02:44'),
(238, 6, 't9zTSbhh7aeKexRWsgeVs1DK3uyIj5qs', '2021-04-24 03:53:44', '2021-04-24 03:53:44'),
(239, 6, 'Lm10EdkXNvh38p72rXLfeDg3P1hSdT3G', '2021-04-25 04:18:08', '2021-04-25 04:18:08'),
(240, 6, 'ZTf6VyB4WNs5ZqH60k2h5Ta3qGdA28ud', '2021-04-26 03:58:06', '2021-04-26 03:58:06'),
(241, 6, 'STK1vpp1AE2dw13Agqn7U0PSuoh0vegt', '2021-04-27 04:23:42', '2021-04-27 04:23:42'),
(242, 6, 'OyM8HATQ5owrr7JDeKTbca3L7NJtgPm7', '2021-04-28 04:06:45', '2021-04-28 04:06:45'),
(243, 6, 'TCuWN27PfSL7UKwxRpX1IRLnUbCmfRZ3', '2021-04-29 04:21:58', '2021-04-29 04:21:58'),
(244, 6, 'qmwRtygtUDCGIy5Y0wpqFQgRBiGIG59M', '2021-05-02 04:33:17', '2021-05-02 04:33:17'),
(245, 6, '0waZUtJoMrexmOPXpO03xx4OK10p6fno', '2021-05-03 05:17:16', '2021-05-03 05:17:16'),
(246, 6, 'OkQw9ijOHwaaZ40Ah5EiE5q0kMbmHg4i', '2021-05-04 04:59:44', '2021-05-04 04:59:44'),
(247, 6, 'H4UoATVOAtfz2W5QbS0ztbYk7mFZNCBa', '2021-05-05 04:31:54', '2021-05-05 04:31:54'),
(248, 6, 'w97iBMrVlIimwjxzfTnZm54hiM89dZWM', '2021-05-06 05:01:09', '2021-05-06 05:01:09'),
(249, 6, 'BcpRlS82Gkqq0NxwFZohnxayjEWimEvf', '2021-05-08 04:12:42', '2021-05-08 04:12:42'),
(250, 6, 'u8kxZHcP1ktsW96N1uL0H53kxnJVKCS3', '2021-05-09 05:43:07', '2021-05-09 05:43:07'),
(251, 6, 'KjA3qQes8SgqFYBoNvhZFS0ZJqCsGDsG', '2021-05-11 05:55:10', '2021-05-11 05:55:10'),
(252, 6, 'XpWwUksMh4k91PbaA0KJl8svdISNCI57', '2021-05-22 06:12:20', '2021-05-22 06:12:20'),
(253, 6, '0MSL2h1GQ7hvR6RObBrFOUJbs33ern8r', '2021-05-23 05:17:47', '2021-05-23 05:17:47'),
(254, 6, '87mCBB2IxjNMKDu3O8YDwHG9rJ3ipQ4T', '2021-05-24 05:50:10', '2021-05-24 05:50:10'),
(255, 6, '0a1kgES5FfD00uFpZ3gHvfDehI7XWaq3', '2021-05-25 05:03:44', '2021-05-25 05:03:44'),
(256, 6, 's6LZTJZQFPdM7xLgjrIo8TTQ4o6M8Kt4', '2021-05-26 05:57:53', '2021-05-26 05:57:53'),
(257, 6, '26u7eU3ZqnLRqYiVAiBEoXXkbqswgqFY', '2021-05-27 05:39:57', '2021-05-27 05:39:57'),
(258, 6, 'gppquk4JScRZrjE6CrFTLe0Ys6D9MQMO', '2021-05-28 05:08:42', '2021-05-28 05:08:42'),
(259, 6, 'deGEh55ApGLVxwEL0rfOayd0xgvlLizI', '2021-05-29 05:23:58', '2021-05-29 05:23:58'),
(260, 6, 'xbkFRnnWmkFK2HOaO91eigtmHBZhNZzx', '2021-05-30 05:26:14', '2021-05-30 05:26:14'),
(261, 6, 'uQOKkgLWEzJW8DSuv6OdDnVaArcaZrD4', '2021-05-31 06:01:17', '2021-05-31 06:01:17'),
(262, 6, '93iAhgR2N0RtqFtkeLQ70V2IkUv5Rho5', '2021-05-31 18:00:03', '2021-05-31 18:00:03'),
(263, 6, 'UN3AuTgyiPoGt8Zr59srxlLmLIlokkyN', '2021-05-31 23:01:00', '2021-05-31 23:01:00'),
(264, 6, 'FLGCxZBzpBDnMsTeAQg6bf3xRYLRkvr6', '2021-05-31 23:05:53', '2021-05-31 23:05:53'),
(265, 6, 'qf8tvvBBBPwu1QcHYyPMF77LgdSDqIoW', '2021-06-01 00:06:48', '2021-06-01 00:06:48'),
(266, 6, 'irpmrPevf9omVMsMTklszwjUuSBBzs14', '2021-05-30 01:33:34', '2021-05-30 01:33:34'),
(267, 6, 'CkKMSONmZV6yxQxkC3jekSnXPit7do6S', '2021-05-31 01:34:31', '2021-05-31 01:34:31'),
(268, 6, 'tiI00c8x5QkzKJk991OtEHfxdGfwapKZ', '2021-05-31 01:35:49', '2021-05-31 01:35:49'),
(269, 6, '4JKW0Nbxkg1nZSuLd5Hu59T7uP6MHYvm', '2021-05-31 17:15:06', '2021-05-31 17:15:06'),
(270, 6, 'lomG87eQO1KMyNU4HZxOw5HutUhrW76C', '2021-05-31 17:17:11', '2021-05-31 17:17:11'),
(272, 6, 'toE7XqsVNPr2lDQvsogdz5Zw91dgTM66', '2021-05-30 14:02:35', '2021-05-30 14:02:35'),
(273, 6, 'a4EoRbXX6GCWR3Jn4U7AmwDSCQ9r8CBF', '2021-05-31 16:10:31', '2021-05-31 16:10:31'),
(274, 6, 'U0IGWMxRY8t44UyUUgPD3XW3fDY4mYrO', '2021-05-31 17:36:22', '2021-05-31 17:36:22'),
(275, 6, 'J35AvcdZmu5hlNVL7lRP6rDvj7Kv1hAM', '2021-06-01 06:28:30', '2021-06-01 06:28:30'),
(276, 6, 'pn4HwIjPuebPWHoVR9wYmbjA7XtWPB3S', '2021-06-05 06:40:08', '2021-06-05 06:40:08'),
(277, 6, 'hr4etBetEhLZVtXv44CBnZF7Kp63a22q', '2021-06-06 05:07:18', '2021-06-06 05:07:18'),
(278, 6, 'PiN8czq0QMUCp9Mmjph9t03RzAEd8pRa', '2021-06-07 05:49:06', '2021-06-07 05:49:06'),
(279, 6, '5fneiSqS1FWPZJfcelPCEoy8dxLoMCP5', '2021-06-08 07:31:20', '2021-06-08 07:31:20'),
(280, 6, 'O5M1PEV3ZyG0gl8R4DiacsDX4p5FZMgA', '2021-06-08 08:05:03', '2021-06-08 08:05:03'),
(281, 6, '1iXV9FD9rGJm79mC3ra4Iv1M6BK2FtbL', '2021-06-08 08:46:19', '2021-06-08 08:46:19'),
(282, 6, 'qmCjYiKM1TqOGuYDFc3NtU6yfE5Uh8tf', '2021-06-08 12:55:17', '2021-06-08 12:55:17'),
(283, 6, 'Odxw2iqA4Pa1inIYdkPWjORKjWaaxHJW', '2021-06-09 06:44:51', '2021-06-09 06:44:51'),
(284, 6, '4lnaTynvDR3cNcPqiScY9uoVI0XNzpDA', '2021-06-10 05:59:24', '2021-06-10 05:59:24'),
(285, 6, 'W3CWarc1dX1A96bjgASXSxslwfQeE82W', '2021-06-12 09:15:50', '2021-06-12 09:15:50'),
(286, 6, 'l6nDAwTeeBBCxYKgogD79YAcsKBR1jUZ', '2021-06-13 06:12:35', '2021-06-13 06:12:35'),
(287, 6, 'CCWt9dQwxXJe8XjKwvQPhDAS5FAj2cSJ', '2021-06-14 06:14:42', '2021-06-14 06:14:42'),
(289, 6, '28AOHwlicwLvZav9ykdK7etPU1Z3Q3Qa', '2021-06-14 10:15:01', '2021-06-14 10:15:01'),
(290, 6, 'zqVqfJRxyRnWJYEnbTZlk4s6sS5IqnRS', '2021-06-15 07:26:27', '2021-06-15 07:26:27'),
(291, 6, 'RYhObSoJG4BsuaeJOgba2z40k2v8qhGC', '2021-06-15 09:06:11', '2021-06-15 09:06:11'),
(293, 6, 'nMZn5VcTMXwn1UTwhPjjwNDt2duRJ4NX', '2021-06-16 12:17:41', '2021-06-16 12:17:41'),
(298, 6, 'XJ4Tjjzpe4zvR1R0DpbeglSmLHgsMKEr', '2021-06-17 13:26:18', '2021-06-17 13:26:18'),
(299, 6, 'ST6JPxbsD9pQxy4AEDUpjqCm9gj2i44B', '2021-06-19 10:06:21', '2021-06-19 10:06:21'),
(300, 6, '1gw0FTMHOjgqDxjOgswJV9J6UutpUwDk', '2021-06-19 10:18:01', '2021-06-19 10:18:01'),
(301, 6, 'GmdougiPgz5neu06i7h8FMORbTuouz7x', '2021-06-20 05:28:26', '2021-06-20 05:28:26'),
(302, 6, 'eFe06l9Uy7cw6fl3q78hzGtEoFbGrB12', '2021-06-20 06:44:15', '2021-06-20 06:44:15'),
(303, 6, 'CP0bj4JunK7gsOaK6rJ7d7nuHgIKAI2b', '2021-06-20 07:35:39', '2021-06-20 07:35:39'),
(304, 6, 'dOxxKffG6fcywwqC852hvwsemFet9wDP', '2021-06-20 10:22:33', '2021-06-20 10:22:33'),
(306, 6, 'jhsM5diFnNN3rwn3o5hAInLa2dz6XJXD', '2021-06-21 11:47:19', '2021-06-21 11:47:19'),
(307, 6, 'EVp1o7IIYW9MOr0YSBQVazdNHYFcTL8j', '2021-06-22 06:16:29', '2021-06-22 06:16:29'),
(308, 6, '0lrW4pWR3GB4a1RPNIXmAJ0kxKVKLYRN', '2021-06-22 06:40:55', '2021-06-22 06:40:55'),
(309, 6, 'Pr2wdO62d65yEKEG1hp4qAquh7Oag77j', '2021-06-22 09:37:40', '2021-06-22 09:37:40'),
(310, 6, 'puGycNTlrEzvnfWs5D60qsHOMsFpPkKf', '2021-06-22 09:57:46', '2021-06-22 09:57:46'),
(311, 6, 'GxxC36uMts6jAmZDbTi04fFz86xulUU5', '2021-06-22 13:58:59', '2021-06-22 13:58:59'),
(312, 6, 'BHIcRODGV0UFBPMex4jWNaRqVdCZJJyD', '2021-06-22 14:25:42', '2021-06-22 14:25:42'),
(313, 6, 'JSZwG1NgDqdjSGzywyc1iiZWyISRoh7v', '2021-06-23 06:17:44', '2021-06-23 06:17:44'),
(314, 6, 'k791AIqxRz3D4HJ6LDOCzFdmMkyRCv81', '2021-06-23 10:06:34', '2021-06-23 10:06:34'),
(315, 6, 'HuENcCDVlko3hDo0yNAlCNP15KkkUJzo', '2021-06-24 05:25:20', '2021-06-24 05:25:20'),
(316, 6, 'tadvrox06yQLYm2sVH3UKddWIaEnkgWF', '2021-06-24 09:06:52', '2021-06-24 09:06:52'),
(317, 6, 'Nn2caGe4jCKWISV0podzoz9jo1s90FQe', '2021-06-26 05:39:01', '2021-06-26 05:39:01'),
(318, 6, 'sWvzxryXB0OaqNplIB0POMEN364SrYZI', '2021-06-26 12:19:28', '2021-06-26 12:19:28'),
(319, 6, '2xEnYBPPwmXyi10mMwTaelAwCPY52zL4', '2021-06-27 06:17:06', '2021-06-27 06:17:06'),
(320, 6, 'yXj7zSzVp7YIXiprrCXrreBuq8wLol4X', '2021-06-28 05:28:43', '2021-06-28 05:28:43'),
(321, 6, 'oZldy4QlibhJdHoxXCMuwujg18Lxbfik', '2021-06-28 06:04:32', '2021-06-28 06:04:32'),
(322, 6, 'XYMFdw63fieYwkv2PbcvidBkabGKw0bU', '2021-06-28 09:50:00', '2021-06-28 09:50:00'),
(323, 6, 'BQ63lTbqXmk1W9YuvDfiJwu2egQjASEA', '2021-06-29 06:01:23', '2021-06-29 06:01:23'),
(324, 6, 'cc9JKhn8r6yVvyNSauKrbsrSePME1tnn', '2021-06-29 08:07:09', '2021-06-29 08:07:09'),
(325, 6, 'vLlADOKaraAJ036awL1yD2qh7qLEuQ0B', '2021-06-29 10:29:14', '2021-06-29 10:29:14'),
(326, 6, 'pbv6JsaVl3qvglJ4m8i3A1qzY6IshbPX', '2021-06-29 10:45:52', '2021-06-29 10:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2021-01-02 04:23:05', NULL),
(2, 'Hinduism', '2021-03-01 12:08:45', NULL),
(3, 'Buddhism', '2021-03-01 12:08:45', NULL),
(4, 'Christianity', '2021-03-01 12:08:45', NULL),
(5, 'Other', '2021-03-22 12:36:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '{\"auth.register_user_action\":true,\"auth.show_user\":true,\"auth.edit_user\":true,\"auth.users\":true,\"system.permission_register\":true,\"system.assign_permission\":true,\"auth.register_user\":true,\"rooms.create\":true,\"rooms.update\":true,\"system.permission\":true,\"hotels.invoices.create\":true,\"hotels.invoices.edit\":true,\"hotels.invoices\":true,\"hotels.invoices.store\":true,\"hotels.invoices.show\":true,\"hotels.invoices.delete\":true,\"hotels.guesttypes.create\":true,\"hotels.guesttypes.edit\":true,\"hotels.guesttypes\":true,\"hotels.guesttypes.store\":true,\"hotels.guesttypes.show\":true,\"hotels.guesttypes.delete\":true,\"hotels.paymenttypes.show\":true,\"hotels.paymenttypes.delete\":true,\"hotels.paymenttypes.store\":true,\"hotels.paymenttypes\":true,\"hotels.paymenttypes.edit\":true,\"hotels.paymenttypes.create\":true,\"hotels.services\":true,\"hotels.services.create\":true,\"hotels.services.delete\":true,\"hotels.services.store\":true,\"hotels.services.edit\":true,\"hotels.services.show\":true,\"hotels.roomprices.delete\":true,\"hotels.roomprices.show\":true,\"hotels.roomprices.store\":true,\"hotels.roomprices\":true,\"hotels.roomprices.edit\":true,\"hotels.roomprices.create\":true,\"hotels.housekeeping.edit\":true,\"hotels.housekeeping.create\":true,\"hotels.housekeeping.store\":true,\"hotels.housekeepinghistory\":true,\"hotels.housekeeping\":true,\"hotels.guestregistrations.create\":true,\"hotels.guestregistrations.edit\":true,\"hotels.guestregistrations.show\":true,\"hotels.guestregistrations.delete\":true,\"hotels.guestregistrations.shifting\":true,\"hotels.guestregistrations\":true,\"hotels.guestregistrations.store\":true,\"hotels.reservationslist\":true,\"hotels.reservations.cancel_reservation\":true,\"hotels.reservations.edit\":true,\"hotels.reservations.create\":true,\"hotels.reservations.store\":true,\"hotels.reservations\":true,\"hotels.reservations.cancel_room\":true,\"hotels.reservations.dashboard\":true,\"hotels.reservations.delete\":true,\"hotels.reservations.show\":true,\"hotels.roomtypes.show\":true,\"hotels.halltypes.create\":true,\"hotels.roomtypes\":true,\"hotels.roomtypes.create\":true,\"hotels.roomtypes.store\":true,\"hotels.roomtypes.delete\":true,\"hotels.room-types.picture\":true,\"hotels.roomtypes.edit\":true,\"hotels.hotel.picture\":true,\"hotels.hotel\":true,\"hotels.hotel.store\":true,\"hotels.hotel.create\":true,\"hotels.hotel.edit\":true,\"hotels.hotel.delete\":true,\"hotels.rooms.show\":true,\"hotels.hotel.show\":true,\"hotels.hotel.remove_picture\":true,\"hotels.rooms.delete\":true,\"hotels.rooms.picture\":true,\"hotels.rooms.store\":true,\"hotels.rooms\":true,\"hotels.housekeeping.show\":true,\"hotels.hotel.config\":true,\"hotels.rooms.create\":true,\"hotels.reports.room_status\":true,\"hotels.reports.room_mapping\":true,\"hotels.reports.arrival_departure\":true,\"hotels.reports.occupancy\":true,\"hotels.reports.all_hotel_occupancy\":true,\"hotels.reports.guest_list\":true,\"hotels.reports.hotel_rooms\":true,\"hotels.multipleroom.create\":true,\"hotel.home.id\":true,\"hotels.guests\":true,\"hotel.home\":true,\"hotels.guesttypediscount\":true,\"hotels.paymentdiscount\":true,\"hotels.ajax.*\":true,\"auth.profile\":true,\"hotels.reports.dashboard\":true,\"hotels.multipleroom.multiple_room_create\":true,\"hotels.multipleroom.multiple_room_store\":true,\"hotels.guests.guest_show\":true,\"system.user_permission\":true,\"hotels.rooms.remove-picture\":true,\"hotels.invoice.service_delete\":true,\"hotels.invoice.other_guest_bill\":true,\"hotels.invoice.print\":true,\"hotels.checkout.checkout_store\":true,\"hotels.checkout\":true,\"hotels.specialdiscounts.special_discounts_edit\":true,\"hotels.specialdiscounts.special_discounts_show\":true,\"hotels.specialdiscounts.special_discounts_store\":true,\"hotels.guesttypediscount.guest_type_discount_create\":true,\"hotels.specialdiscounts.special_discounts_create\":true,\"hotels.guesttypediscount.guest_type_discount_store\":true,\"hotels.guesttypediscount.guest_type_discount_show\":true,\"hotels.specialdiscounts.special_discounts_delete\":true,\"hotels.specialdiscounts\":true,\"hotels.guesttypediscount.guest_type_discount_edit\":true,\"hotels.guesttypediscount.guest_type_discount_delete\":true,\"hotel.home.hotel_view\":true,\"hotels.housekeeping.delete\":true,\"hotel.front\":true,\"hotels.frontdesk.Front_Des_dashboard\":true,\"hotels.reports.report_dashboard\":true,\"system.permission.route_edit\":true,\"system.core.logs_show\":true,\"system.ajax.permission_remove\":true,\"system.core.logs\":true,\"system.ajax.permission_check\":true,\"base_setting\":true,\"home\":true,\"hotels.rooms.edit\":true,\"hotels.reports.guest_ledger\":true,\"hotels.reports.foreign_guest_list\":true,\"hotels.reports.payment-type\":true,\"hotels.reports.accumulated_occupancy\":true,\"hotels.reports.country_wise_guest_list\":true,\"hotels.reports.collection\":true,\"hotels.reports.monthly_collection\":true,\"hotels.canceledreservation\":true,\"hotels.canceledreservationlist\":true,\"hrms.employee.hrm\":true,\"hrms.employee.store\":true,\"hrms.employee.create\":true,\"hrms.employee.delete\":true,\"hrms.employee.edit\":true,\"hrms.employee.update\":true,\"hrms.employee.show\":true,\"hrms.designation\":true,\"hrms.hr.report_page\":true,\"hrms.baisc_salary\":true,\"hrms.salary_increment\":true,\"hrms.promotion\":true,\"hrms.posting\":true,\"hrms.disciplinary-action\":true,\"hrms.award\":true,\"hrms.salary_rules\":true,\"hrms.salary-structure\":true,\"hrms.training\":true,\"hrms.salary-manage\":true,\"hrms.bank\":true,\"hrms.baisc-salary\":true,\"hrms.salary-increment\":true,\"hrms.loan-manage\":true,\"hrms.loan\":true,\"hrms.unit\":true,\"hrms.department\":true,\"hrms.festival\":true,\"hrms.salary_category\":true,\"hrms.report.category_page\":true,\"hrms.report.increment_page\":true,\"hrms.report.deduction_list\":true,\"hrms.report.category_wise_deduction\":true,\"hrms.report.employee_income_tax\":true,\"hrms.report.employee_allowance_details\":true,\"hrms.report.festival\":true,\"hrms.single_salary\":true,\"hrms.filter_date\":true,\"hrms.festival_bonus\":true,\"hrms.publication\":true,\"hrms.hr.report.prl\":true,\"hr.info\":true}', '2021-01-15 11:01:15', '2021-06-27 09:33:00'),
(2, 'hoteladmin', 'Admin Hotel', '{\"hotels.*\":true,\"rooms.create\":true,\"hotels.rooms.create\":true,\"hotels.rooms.delete\":true,\"hotels.rooms.picture\":true,\"hotels.rooms.store\":true,\"rooms.update\":true,\"hotels.rooms.remove-picture\":true,\"hotels.rooms\":true,\"hotels.hotel.edit\":true,\"hotels.rooms.show\":true,\"hotels.hotel.picture\":true,\"hotels.hotel.show\":true,\"hotels.hotel.config\":true,\"hotels.rooms.edit\":true,\"hotels.roomtypes.create\":true,\"hotels.roomtypes\":true,\"hotels.hotel.remove_picture\":true,\"hotels.halltypes.create\":true,\"hotels.roomtypes.delete\":true,\"hotels.roomtypes.store\":true,\"hotels.roomtypes.edit\":true,\"hotels.room-types.picture\":true,\"hotels.roomtypes.show\":true,\"hotels.reservations.show\":true,\"hotels.reservations.delete\":true,\"hotels.reservations.dashboard\":true,\"hotels.reservations.cancel_room\":true,\"hotels.reservations\":true,\"hotels.reservations.store\":true,\"hotels.reservations.create\":true,\"hotels.reservations.edit\":true,\"hotels.reservations.cancel_reservation\":true,\"hotels.reservationslist\":true,\"hotels.guestregistrations.store\":true,\"hotels.guestregistrations\":true,\"hotels.guestregistrations.delete\":true,\"hotels.guestregistrations.show\":true,\"hotels.guestregistrations.edit\":true,\"hotels.guestregistrations.create\":true,\"hotels.guestregistrations.shifting\":true,\"hotels.housekeeping.create\":true,\"hotels.housekeeping.edit\":true,\"hotels.housekeepinghistory\":true,\"hotels.housekeeping.store\":true,\"hotels.housekeeping.show\":true,\"hotels.housekeeping\":true,\"hotels.roomprices.show\":true,\"hotels.roomprices.delete\":true,\"hotels.roomprices\":true,\"hotels.roomprices.store\":true,\"hotels.roomprices.create\":true,\"hotels.roomprices.edit\":true,\"hotels.services.create\":true,\"hotels.services\":true,\"hotels.services.delete\":true,\"hotels.services.store\":true,\"hotels.services.show\":true,\"hotels.services.edit\":true,\"hotels.invoices.show\":true,\"hotels.invoices.delete\":true,\"hotels.invoices\":true,\"hotels.invoices.store\":true,\"hotels.invoices.create\":true,\"hotels.invoices.edit\":true,\"hotels.guesttypes.create\":true,\"hotels.multipleroom.create\":true}', '2021-03-17 10:02:18', '2021-04-06 09:08:38'),
(3, 'hotelmanager', 'Hotel Manager', '{\"rooms.update\":true,\"rooms.create\":true,\"hotels.rooms.remove-picture\":true,\"hotels.rooms\":true,\"hotels.rooms.delete\":true,\"hotels.rooms.create\":true,\"hotels.rooms.store\":true,\"hotels.rooms.picture\":true,\"hotels.hotel.picture\":true,\"hotels.hotel.show\":true,\"hotels.rooms.show\":true,\"hotels.hotel.config\":true,\"hotels.rooms.edit\":true,\"hotels.roomtypes.create\":true,\"hotels.roomtypes\":true,\"hotels.hotel.remove_picture\":true,\"hotels.halltypes.create\":true,\"hotels.roomtypes.delete\":true,\"hotels.roomtypes.store\":true,\"hotels.roomtypes.edit\":true,\"hotels.room-types.picture\":true,\"hotels.roomtypes.show\":true,\"hotels.reservations.create\":true,\"hotels.reservations.edit\":true,\"hotels.reservations.cancel_room\":true,\"hotels.reservations\":true,\"hotels.reservationslist\":true,\"hotels.reservations.store\":true,\"hotels.reservations.show\":true,\"hotels.reservations.cancel_reservation\":true,\"hotels.guestregistrations.store\":true,\"hotels.guestregistrations\":true,\"hotels.guestregistrations.create\":true,\"hotels.guestregistrations.show\":true,\"hotels.guestregistrations.edit\":true,\"hotels.guestregistrations.shifting\":true,\"hotels.housekeeping.create\":true,\"hotels.housekeeping.edit\":true,\"hotels.housekeeping.store\":true,\"hotels.housekeepinghistory\":true,\"hotels.housekeeping.show\":true,\"hotels.housekeeping\":true,\"hotels.roomprices.create\":true,\"hotels.roomprices.edit\":true,\"hotels.roomprices\":true,\"hotels.roomprices.store\":true,\"hotels.roomprices.show\":true,\"hotels.roomprices.delete\":true,\"hotels.services.show\":true,\"hotels.services.edit\":true,\"hotels.services.delete\":true,\"hotels.services.store\":true,\"hotels.services.create\":true,\"hotels.services\":true,\"hotels.invoices.create\":true,\"hotels.invoices.edit\":true,\"hotels.invoices\":true,\"hotels.invoices.store\":true,\"hotels.invoices.show\":true}', '2021-01-16 06:07:58', '2021-03-22 07:47:27'),
(4, 'frontdesk', 'Frontdesk', '{\"hotel.create\":false,\"hotel.read\":false,\"hotel.update\":false,\"hotel.export\":false,\"hotel.delete\":false,\"rooms.update\":true,\"hotels.rooms\":true,\"hotels.rooms.picture\":true,\"hotels.roomtypes.show\":true,\"hotels.roomtypes\":true,\"hotels.rooms.show\":true,\"hotels.room-types.picture\":true,\"hotels.reservations.create\":true,\"hotels.reservations.edit\":true,\"hotels.reservations.store\":true,\"hotels.reservations\":true,\"hotels.reservationslist\":true,\"hotels.reservations.cancel_room\":true,\"hotels.reservations.show\":true,\"hotels.reservations.cancel_reservation\":true,\"hotels.guestregistrations.store\":true,\"hotels.guestregistrations\":true,\"hotels.guestregistrations.create\":true,\"hotels.guestregistrations.show\":true,\"hotels.guestregistrations.edit\":true,\"hotels.guestregistrations.shifting\":true,\"hotels.housekeeping.create\":true,\"hotels.housekeeping.edit\":true,\"hotels.housekeeping.store\":true,\"hotels.housekeepinghistory\":true,\"hotels.housekeeping.show\":true,\"hotels.housekeeping\":true,\"hotels.roomprices.show\":true,\"hotels.roomprices\":true,\"hotels.services.show\":true,\"hotels.services\":true,\"hotels.invoices.create\":true,\"hotels.invoices.edit\":true,\"hotels.invoices.store\":true,\"hotels.invoices\":true,\"hotels.invoices.show\":true}', '2021-01-16 06:07:55', '2021-03-22 07:47:41'),
(5, 'roomservice', 'Room Service', '{\"hotels.housekeeping.edit\":true,\"hotels.housekeeping.store\":true,\"hotels.housekeepinghistory\":true,\"hotels.housekeeping.show\":true,\"hotels.housekeeping\":true,\"hotels.housekeeping.create\":true,\"hotels.roomprices.create\":true}', '2021-03-17 10:03:41', '2021-04-11 11:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(6, 1, '2021-01-15 18:37:06', '2021-01-15 18:37:06'),
(23, 2, '2021-01-18 09:06:06', '2021-01-18 09:06:06'),
(24, 2, '2021-01-18 09:06:39', '2021-01-18 09:06:39'),
(25, 3, '2021-01-18 09:07:05', '2021-01-18 09:07:05'),
(26, 3, '2021-01-18 09:07:20', '2021-01-18 09:07:20'),
(27, 1, '2021-01-24 01:24:02', '2021-01-24 01:24:02'),
(28, 1, '2021-01-24 01:27:06', '2021-01-24 01:27:06'),
(29, 1, '2021-01-24 01:28:23', '2021-01-24 01:28:23'),
(30, 1, '2021-01-24 01:29:01', '2021-01-24 01:29:01'),
(31, 3, '2021-03-21 13:22:17', '2021-03-21 13:22:17'),
(32, 2, '2021-03-21 13:23:26', '2021-03-21 13:23:26'),
(33, 4, '2021-03-21 13:24:05', '2021-03-21 13:24:05'),
(34, 5, '2021-03-21 13:24:39', '2021-03-21 13:24:39'),
(35, 5, '2021-04-06 11:10:41', '2021-04-06 11:10:41'),
(36, 5, '2021-04-06 11:12:15', '2021-04-06 11:12:15'),
(37, 2, '2021-04-11 05:15:46', '2021-04-11 05:15:46'),
(38, 3, '2021-04-11 05:30:41', '2021-04-11 05:30:41'),
(39, 3, '2021-04-11 05:33:47', '2021-04-11 05:33:47'),
(40, 4, '2021-04-11 05:35:40', '2021-04-11 05:35:40'),
(41, 5, '2021-04-11 05:49:29', '2021-04-11 05:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_cart`
--

CREATE TABLE `tbl_booking_cart` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(191) NOT NULL,
  `booking_cart` text DEFAULT NULL,
  `other` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1= Active, 0= Inactive ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking_cart`
--

INSERT INTO `tbl_booking_cart` (`id`, `transaction_id`, `booking_cart`, `other`, `status`, `created_at`, `updated_at`) VALUES
(27, 'ON-01210408105', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-04-12\",\"checkOut\":\"2021-04-13\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"5a6dca36e1fdc474910a254adc37c163\":{\"id\":\"71\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-04-12\",\"end_date\":\"2021-04-13\",\"room_no\":\"414\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-04-12\",\"checkOut\":\"2021-04-13\",\"discount\":0,\"rowId\":\"5a6dca36e1fdc474910a254adc37c163\"}}}', '{\"guest_adult\":null,\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Md. Rasel\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Md. Rasel\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-04-12\",\"re_checkout_date\":\"2021-04-13\",\"h_id\":1,\"re_card_no\":\"ON-01210408105\",\"re_guest_adult\":null,\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-04-12 11:15:13\",\"re_paid_amount\":5000}}', 1, '2021-04-12 05:15:32', NULL),
(31, 'ON-01210408114', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-04-18\",\"checkOut\":\"2021-04-19\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"40ba3637b32f25f77f2ffba90c0718f7\":{\"id\":\"73\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-04-18\",\"end_date\":\"2021-04-19\",\"room_no\":\"417\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-04-18\",\"checkOut\":\"2021-04-19\",\"discount\":0,\"rowId\":\"40ba3637b32f25f77f2ffba90c0718f7\"}}}', '{\"guest_adult\":null,\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"rubel@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-04-18\",\"re_checkout_date\":\"2021-04-19\",\"h_id\":1,\"re_card_no\":\"ON-01210408114\",\"re_guest_adult\":null,\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-04-18 16:29:31\",\"re_paid_amount\":5000}}', 1, '2021-04-18 10:29:38', NULL),
(32, 'ON-01210526108', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-05-31\",\"checkOut\":\"2021-06-01\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"1d5a61d4766313974bd7cbe96e77cd05\":{\"id\":\"72\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-05-31\",\"end_date\":\"2021-06-01\",\"room_no\":\"415\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-05-31\",\"checkOut\":\"2021-06-01\",\"discount\":0,\"rowId\":\"1d5a61d4766313974bd7cbe96e77cd05\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel\",\"cus_address\":\"TUSHPUR\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"rubel@gmail.com\",\"cus_company\":\"ABDUL HAQUE\",\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel\",\"re_telephone\":\"01911054866\",\"re_address\":\"TUSHPUR\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-05-31\",\"re_checkout_date\":\"2021-06-01\",\"h_id\":1,\"re_card_no\":\"ON-01210526108\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-05-31 20:19:12\",\"re_paid_amount\":5000}}', 1, '2021-05-31 14:23:19', NULL),
(70, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:30:17', NULL),
(71, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:30:38', NULL),
(72, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:30:56', NULL),
(73, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:31:06', NULL),
(74, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:31:24', NULL),
(75, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:32:20', NULL),
(76, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:33:23', NULL),
(77, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:33:58', NULL),
(78, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:34:39', NULL),
(79, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:35:13', NULL),
(80, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:35:18', NULL),
(81, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:36:53', NULL),
(82, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 11:59:33', NULL),
(83, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 17:30:14\",\"re_paid_amount\":5000}}', 1, '2021-06-07 12:02:43', NULL),
(85, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 18:05:24\",\"re_paid_amount\":5000}}', 1, '2021-06-07 12:05:28', NULL),
(86, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 18:05:24\",\"re_paid_amount\":5000}}', 1, '2021-06-07 12:05:45', NULL),
(87, 'ON-01210607101', '{\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"guestList\":\"\",\"payableBill\":5000,\"action\":\"frontend\"},\"default\":{\"32ac1f7782a970bc13e2a0f2b92599d6\":{\"id\":\"70\",\"qty\":1,\"price\":5000,\"usd\":59,\"start_date\":\"2021-06-07\",\"end_date\":\"2021-06-08\",\"room_no\":\"413\",\"type_name\":\"Deluxe Twin\",\"type_id\":\"5\",\"name\":\"Deluxe Twin\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-08\",\"discount\":0,\"rowId\":\"32ac1f7782a970bc13e2a0f2b92599d6\"}}}', '{\"guest_adult\":\"1\",\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Rasel Hossain\",\"cus_address\":\"Dhaka\",\"cus_country\":\"18\",\"cus_date_of_birth\":null,\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_company\":null,\"cus_gender\":null,\"cus_passport\":null,\"cus_profession\":null,\"cus_purpose_visit\":null,\"cus_expiry_date\":null,\"cus_nid\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_country\":\"18\",\"re_name\":\"Rasel Hossain\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":\"Dhaka\",\"re_arrive_date\":null,\"re_advance_amount\":5000,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-08\",\"h_id\":1,\"re_card_no\":\"ON-01210607101\",\"re_guest_adult\":\"1\",\"re_children\":null,\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 18:05:24\",\"re_paid_amount\":5000}}', 1, '2021-06-07 12:07:52', NULL),
(98, 'Hl-01210607101', '{\"default\":{\"7b7fb1ec2c89d15694a9b8ffcc9c6f23\":{\"id\":709,\"qty\":1,\"price\":700,\"start_date\":\"2021-06-07 00:00\",\"end_date\":\"2021-06-07 11:59\",\"room_no\":\"123\",\"type_name\":\"Hall One\",\"type_id\":86,\"name\":\"Hall One\",\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-07\",\"discount\":0,\"rowId\":\"7b7fb1ec2c89d15694a9b8ffcc9c6f23\"}},\"base\":{\"location\":\"83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C\\/A, Dhaka-1212, Bangladesh\",\"hotel\":\"Hotel Abakash\",\"hotel_id\":1,\"checkIn\":\"2021-06-07\",\"checkOut\":\"2021-06-07\",\"payableBill\":700,\"time_slot\":\"4\",\"shifting\":\"1\",\"action\":\"f_hall_reservation\"}}', '{\"guest_adult\":1,\"guest_children\":null,\"customer_data\":{\"cus_name\":\"Md. Rasel\",\"cus_address\":\"Dhaka\",\"cus_phone\":\"01911054866\",\"cus_email\":\"raselhossainb@gmail.com\",\"cus_nid\":null,\"cus_company\":null},\"reservation_data\":{\"re_number_of_person\":\"1\",\"re_name\":\"Md. Rasel\",\"re_telephone\":\"01911054866\",\"re_address\":\"Dhaka\",\"re_arrive_from\":null,\"re_event\":null,\"re_event_date\":null,\"re_special_request\":null,\"re_advance_amount\":700,\"re_qty\":1,\"re_checkin_date\":\"2021-06-07\",\"re_checkout_date\":\"2021-06-07\",\"h_id\":1,\"re_card_no\":\"Hl-01210607101\",\"re_mode_of_reservation\":\"online\",\"created_at\":\"2021-06-07 19:45:24\",\"re_paid_amount\":700,\"re_vip_service\":null,\"re_musicians\":null,\"re_vip_name\":null,\"re_musicians_name\":null}}', 1, '2021-06-07 13:47:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_districts`
--

CREATE TABLE `tbl_districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_districts`
--

INSERT INTO `tbl_districts` (`district_id`, `district_name`) VALUES
(1, 'Dhaka'),
(2, 'Faridpur'),
(3, 'Gazipur'),
(4, 'Gopalganj'),
(5, 'Jamalpur'),
(6, 'Kishoreganj'),
(7, 'Madaripur'),
(8, 'Manikganj'),
(10, 'Mymensingh'),
(11, 'Narayanganj'),
(12, 'Narsingdi'),
(13, 'Netrokona'),
(14, 'Rajbari'),
(15, 'Shariatpur'),
(16, 'Sherpur'),
(17, 'Tangail'),
(18, 'Bogra'),
(19, 'Joypurhat'),
(20, 'Naogaon'),
(21, 'Natore'),
(22, 'Nawabganj'),
(23, 'Pabna'),
(24, 'Rajshahi'),
(25, 'Sirajgonj'),
(26, 'Dinajpur'),
(27, 'Gaibandha'),
(28, 'Kurigram'),
(29, 'Lalmonirhat'),
(30, 'Nilphamari'),
(31, 'Panchagarh'),
(32, 'Rangpur'),
(33, 'Thakurgaon'),
(34, 'Barguna'),
(35, 'Barisal'),
(36, 'Bhola'),
(37, 'Jhalokati'),
(38, 'Patuakhali'),
(39, 'Pirojpur'),
(40, 'Bandarban'),
(41, 'Brahmanbaria'),
(42, 'Chandpur'),
(43, 'Chittagong'),
(44, 'Comilla'),
(45, 'Cox\'s Bazar'),
(46, 'Feni'),
(47, 'Khagrachari'),
(48, 'Lakshmipur'),
(49, 'Noakhali'),
(50, 'Rangamati'),
(51, 'Habiganj'),
(52, 'Maulvibazar'),
(53, 'Sunamganj'),
(54, 'Sylhet'),
(55, 'Bagerhat'),
(56, 'Chuadanga'),
(57, 'Jessore'),
(58, 'Jhenaidah'),
(59, 'Khulna'),
(60, 'Kushtia'),
(61, 'Magura'),
(62, 'Meherpur'),
(63, 'Narail'),
(64, 'Satkhira');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotels`
--

CREATE TABLE `tbl_hotels` (
  `h_id` bigint(20) NOT NULL,
  `h_name` varchar(255) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `h_description` text DEFAULT NULL,
  `h_contact` varchar(255) DEFAULT NULL,
  `h_phone` varchar(50) DEFAULT NULL,
  `h_email` varchar(255) DEFAULT NULL,
  `h_address` varchar(255) DEFAULT NULL,
  `h_website` varchar(255) DEFAULT NULL,
  `h_area_code` varchar(50) DEFAULT NULL,
  `h_fax` varchar(255) DEFAULT NULL,
  `h_vat_reg_no` varchar(255) DEFAULT NULL,
  `h_restaurant_id` bigint(20) DEFAULT NULL,
  `h_photo` text DEFAULT NULL,
  `h_isActive` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1= active, 0= in active',
  `h_restaurant_name` varchar(255) DEFAULT NULL,
  `h_restaurant_capacity` varchar(255) DEFAULT NULL,
  `is_hall` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hotels`
--

INSERT INTO `tbl_hotels` (`h_id`, `h_name`, `district_id`, `h_description`, `h_contact`, `h_phone`, `h_email`, `h_address`, `h_website`, `h_area_code`, `h_fax`, `h_vat_reg_no`, `h_restaurant_id`, `h_photo`, `h_isActive`, `h_restaurant_name`, `h_restaurant_capacity`, `is_hall`, `created_at`, `updated_at`) VALUES
(1, 'Hotel Abakash', 1, '<p>Hotel Abakash</p>\r\n<p>83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C/A, Dhaka-1212, Bangladesh</p>', '02222299288, 01745575064', '01745575064', 'hotelabakash@gmail.com', '83-88 , Bir Uttom A.k Khandakar Sarak Mohakhali C/A, Dhaka-1212, Bangladesh', NULL, NULL, '0258811150', '018121028032', NULL, '/images/hotel_1/hotel_731616413681.jpg|/images/hotel_1/hotel_201616413692.jpg|/images/hotel_1/hotel_921616413709.jpg|/images/hotel_1/hotel_981616413792.jpg|/images/hotel_1/hotel_951616413804.jpg|/images/hotel_1/hotel_851616413843.jpg|/images/hotel_1/hotel_981616413915.jpg', 1, NULL, NULL, 1, NULL, '2021-06-12 09:23:52'),
(2, 'Parjatan Motel Dinajpur', 26, '<p><strong>Parjatan Motel</strong></p>\r\n<p>Housing More, Dinajpur</p>\r\n<p><strong>Facilities&nbsp;</strong></p>\r\n<p>Air Condition, LED TV, Intercom, Hot &amp; Cold water supply, Mineral water, COVID-19 health septic kit, Complimentary Breakfast, etc.</p>', '0531-64718, 01775-883355 , 01991-139016', '01991139016', 'bpcdinaj@gmail.com', 'Housing More, Dinajpur', NULL, NULL, '0531-66596', '002477277-1006', NULL, '/images/hotel_2/hotel_821616413965.jpg|/images/hotel_2/hotel_231616413997.jpg|/images/hotel_2/hotel_481616414015.jpg|/images/hotel_2/hotel_441616414058.jpg|/images/hotel_2/hotel_761616414087.jpg', 1, NULL, NULL, 1, NULL, '2021-04-14 16:01:16'),
(3, 'Parjatan Motel Bogura', 18, '<h3>Parjatan Motel, Bogura</h3>\r\n<div>\r\n<p><strong>Banani, Sherpur Road, Bogura</strong><br />Phone :&nbsp;<a title=\"+880-51-67024-7\" href=\"tel:+880-51-67024-7\">+880-51-67024-7</a>, Fax :&nbsp;<a title=\"+880-51-66753&nbsp;\" href=\"tel:+880-51-66753\">+880-51-66753&nbsp;</a>&nbsp;<br />Mobile : 01798-462890, 01991139621&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />Email: motelbogra@gmail.com</p>\r\n</div>', 'Banani, Sherpur Road, Bogura', '+8805167024', 'motelbogra@gmail.com', 'Sharpur, Road', NULL, NULL, '+8805166753', NULL, NULL, '/images/hotel_3/hotel_651621616522.jpg', 1, NULL, NULL, 0, NULL, '2021-05-21 15:02:02'),
(4, 'Parjatan Motel Rajshahi', 24, '<h4>Parjatan Motel Rajshahi</h4>\r\n<p>Abdul Mohid Road</p>\r\n<p>Phone: 0721775237, 0721770247</p>\r\n<p>Mobile: 01991139394, 01558143636</p>', '01991139394, 01558143636', '0721775237', 'motelrajshahi@gmail.com', 'Abdul Mohid Road', NULL, NULL, '0721770247', '002504037-1101', NULL, '/images/hotel_4/hotel_951621616866.jpg|/images/hotel_4/hotel_841621670628.jpg|/images/hotel_4/hotel_871621670669.jpg|/images/hotel_4/hotel_431621670699.jpg|/images/hotel_4/hotel_411621670717.jpg|/images/hotel_4/hotel_821621670744.jpg|/images/hotel_4/hotel_951621670769.jpg|/images/hotel_4/hotel_591621670797.jpg', 1, NULL, NULL, 0, NULL, '2021-05-22 06:06:37'),
(5, 'Hotel Ne-Taung', 45, '<h4>Hotel Ne-Taung&nbsp;</h4>\r\n<p>Teknaf, Cox\'s Bazar</p>\r\n<p>Contract : 01991139024</p>\r\n<p>email: hotelnetaungbpc@gmail.com</p>\r\n<p>&nbsp;</p>', '01991139024', '01991139024', 'hotelnetaungbpc@gmail.com', 'Teknaf, Cox\'s Bazar', NULL, NULL, NULL, '002607156-0507', NULL, '/images/hotel_5/hotel_181621791001.jpg|/images/hotel_5/hotel_171621791017.jpg|/images/hotel_5/hotel_971621791178.jpg', 1, NULL, NULL, 0, NULL, '2021-05-23 21:32:58'),
(6, 'Hotel Shaibal', 45, '<h4>Parjatan Hotel Shaibal</h4>\r\n<p>Motel Road, Cox\'s Bazar</p>\r\n<p>Mobile: 01991139020</p>\r\n<p>email: hotelshaibalbpc@gmail.com</p>', '0191139020', '034163274', 'hotelshaibalbpc@gmail.com', 'Motel Road, Cox\'s Bazar', NULL, NULL, '034164202', '002227992-0507', NULL, '/images/hotel_6/hotel_271621584926.jpg', 1, NULL, NULL, 0, NULL, '2021-05-21 06:15:26'),
(7, 'Motel Rangpur', 32, '<h3><span style=\"color: #ff001f;\">Parjatan Motel Rangpur</span></h3>\r\n<p>R. K. Road, Rangpur</p>\r\n<p>Contact : 01991139666, &nbsp;0521-63681</p>\r\n<p>email: <a href=\"mailto:rangpurmotel@gmail.com\">rangpurmotel@gmail.com</a></p>', '01991139666,  0521-63681', '01991139666', 'rangpurmotel@gmail.com', 'R. K. Road, Rangpur', NULL, NULL, '0521-62894', '002339591-1001', NULL, '/images/hotel_7/hotel_201621750274.jpg|/images/hotel_7/hotel_171621750399.jpg|/images/hotel_7/hotel_951621750672.jpg|/images/hotel_7/hotel_551621752070.jpg|/images/hotel_7/hotel_671621752204.jpg|/images/hotel_7/hotel_811621752310.jpg|/images/hotel_7/hotel_841621753611.jpg', 1, NULL, NULL, 0, NULL, '2021-05-23 11:06:51'),
(8, 'Motel Benapole', 57, '<h3><span style=\"color: #ff001f;\">Parjatan Motel Benapole&nbsp;</span></h3>\r\n<p>Benapole, Sharsha, Jashore</p>\r\n<p>Contact: &nbsp;01991139032, &nbsp;0422875411</p>\r\n<p>email: parjatanbenapole2003@gmail.com</p>\r\n<p>&nbsp;</p>', '01991139032,  0422875411', '01991139032', 'parjatanbenapole2003@gmail.com', 'Benapole, Sharsha, Jashore', NULL, NULL, '0422875411', '002554238-0901', NULL, '/images/hotel_8/hotel_471621584736.JPG', 1, NULL, NULL, 0, NULL, '2021-05-21 06:12:16'),
(9, 'Hotel Pashur', 55, '<h3><span style=\"color: #ff001f;\">Parjatan Hotel Pashur</span></h3>\r\n<p>Mongla Port Area, Mongla, Bagerhat</p>\r\n<p>Contact: 01773044470, 01991139036, 0466275100</p>\r\n<p>email: <a href=\"mailto:hotelpashur930@gmail.com\">hotelpashur930@gmail.com</a>&nbsp;</p>', '01773044470, 01991139036, 0466275100', '0466275100', 'hotelpashur930@gmail.com', 'Mongla Port Area, Mongla, Bagerhat', NULL, NULL, '0466275100', '000071366-0802', NULL, '/images/hotel_9/hotel_681621605528.jpg', 1, NULL, NULL, 0, NULL, '2021-05-21 11:58:48'),
(10, 'Hotel Shaikat', 43, '<h3><span style=\"color: #ff001f;\">Parjatan Hotel Shaikat</span></h3>\r\n<p>Station Road, Chattogram</p>\r\n<p>Contact: &nbsp;01991139143, 031-2866011 -14</p>\r\n<p>email: <a href=\"mailto:hotelshaikatbpc@gmail.com\">hotelshaikatbpc@gmail.com</a>&nbsp;</p>', '01991139143, 031-2866011 -14', '0312866011', 'hotelshaikatbpc@gmail.com', 'Station Road, Chattogram', NULL, NULL, '031-2866014', '002092493-0503', NULL, '/images/hotel_10/hotel_951621608642.jpg|/images/hotel_10/hotel_911621686687.jpg|/images/hotel_10/hotel_161621686700.jpg|/images/hotel_10/hotel_531621686715.jpg|/images/hotel_10/hotel_521621686730.jpg|/images/hotel_10/hotel_661621686750.jpg|/images/hotel_10/hotel_961621686768.jpg|/images/hotel_10/hotel_721621686780.jpg|/images/hotel_10/hotel_641621686792.jpg', 1, NULL, NULL, 0, NULL, '2021-05-22 10:33:12'),
(11, 'Motel Labonee', 45, '<h3><span style=\"color: #ff001f;\">Motel Labonee</span></h3>\r\n<p><span style=\"color: #000000;\">Motel Road, Cox\'s Bazar</span></p>\r\n<p><span style=\"color: #000000;\">Contact: 01312884420, 0341-64703 &nbsp;</span></p>\r\n<p><span style=\"color: #000000;\">email: &nbsp;motellaboneebpc@gmail.com</span></p>\r\n<p>&nbsp;</p>', '01312884420, 0341-64703', '034164703', 'motellaboneebpc@gmail.com', 'Motel Road, Cox\'s Bazar', NULL, NULL, '0341-64703', NULL, NULL, '/images/hotel_11/hotel_321621625283.jpg', 1, NULL, NULL, 0, NULL, '2021-05-21 17:28:03'),
(12, 'Parjatan Holiday Complex', 38, '<h3><span style=\"color: #ff001f;\">Parjatan Holiday Complex&nbsp;</span></h3>\r\n<p><span style=\"color: #000000;\">Kuakata, Kalapara, Patuakhali-8651</span></p>\r\n<p><span style=\"color: #000000;\">Contact: &nbsp;01732091599, &nbsp;04428-56207, 56208</span></p>\r\n<p><span style=\"color: #000000;\">email: &nbsp;holidayhomesbpc@gmail.com</span></p>', '01732091599,  04428-56207, 56208', '0442856207', 'holidayhomesbpc@gmail.com', 'Kuakata, Kalapara, Patuakhali-8651.', NULL, NULL, '04428-56004', '003374572-0806', NULL, '/images/hotel_12/hotel_771621659523.jpg', 1, NULL, NULL, 0, NULL, '2021-05-22 02:58:43'),
(13, 'Motel Bandarban', 40, '<h3><span style=\"color: #ff001f;\">Parjatan Motel Bandarban</span></h3>\r\n<p>Maghla Talukdarpara, Bandarban</p>\r\n<p>Contact: 01991139548, 0361-62741-42</p>\r\n<p>email: &nbsp;bmotelbpc@gmail.com</p>', '01991139548, 0361-62741-42', '01991139548', 'bmotelbpc@gmail.com', 'Maghla Talukdarpara, Bandarban', NULL, NULL, NULL, '002541521-0501', NULL, '/images/hotel_13/hotel_111621697852.jpg', 1, NULL, NULL, 0, NULL, '2021-05-22 19:37:32'),
(14, 'Motel Sylhet', 54, '<h3><span style=\"color: #ba372a;\">Parjatan Motel Sylhet&nbsp;</span></h3>\r\n<p><span style=\"color: #000000;\">Airport Road, Borosola, Sylhet</span></p>\r\n<p><span style=\"color: #000000;\">Contact: 01795594790</span></p>\r\n<p><span style=\"color: #000000;\">email: parjatanmotelsylhet@gmail.com</span></p>', '01795594790', '01795594790', 'parjatanmotelsylhet@gmail.com', 'Airport Road, Borosola, Sylhet', NULL, NULL, NULL, '002655897-0701', NULL, '/images/hotel_14/hotel_371621776622.jpg|/images/hotel_14/hotel_211621776829.jpg|/images/hotel_14/hotel_401621776870.jpg|/images/hotel_14/hotel_521621776899.jpg', 1, NULL, NULL, 0, NULL, '2021-05-23 17:34:59'),
(15, 'Holiday Complex Rangamati', 50, '<h3><span style=\"color: #ba372a;\">Holiday Complex Rangamati</span></h3>\r\n<p>Parjatan Holiday Complex, Rangamati</p>\r\n<p>Contact: 01863231185, 0351-63126, 0351-63786</p>\r\n<p>email: hcrangamati@gmail.com</p>', '01863231185, 0351-63126, 0351-63786', '01863231185', 'hcrangamati@gmail.com', 'Parjatan Holiday Complex, Rangamati', NULL, NULL, '0351-61046', '0024903407-0506', NULL, '/images/hotel_15/hotel_451621778702.jpg', 1, NULL, NULL, 0, NULL, '2021-05-23 18:05:02'),
(16, 'Hotel Modhumoti', 4, '<h3><span style=\"color: #ba372a;\">Parjatan Hotel Modhumoti</span></h3>\r\n<p><span style=\"color: #000000;\">Tungipara, Gopalganj</span></p>\r\n<p><span style=\"color: #000000;\">Contact: 01991139031, 01991139429, 06655-56349</span></p>\r\n<p><span style=\"color: #000000;\">email: bpchotelmadhumoti@gmail.com</span></p>', '01991139031, 01991139429, 06655-56349', '01991139031', 'bpchotelmadhumoti@gmail.com', 'Tungipara, Gopalganj', NULL, NULL, NULL, NULL, NULL, '/images/hotel_16/hotel_991621786480.jpg|/images/hotel_16/hotel_391621787441.jpg|/images/hotel_16/hotel_491621787875.jpg|/images/hotel_16/hotel_781621788026.jpg|/images/hotel_16/hotel_491621788182.jpg|/images/hotel_16/hotel_571621788353.jpg', 1, NULL, NULL, 0, NULL, '2021-05-23 20:45:53'),
(17, 'Motel Sonamosjid', 65, '<h3>Parjatan Motel Sonamosjid</h3>\r\n<p>Sonamosjid, Shibgonj, Chapainawabganj</p>\r\n<p>Contact: 01991139888, 01816879874</p>\r\n<p>email: motelsonamosjid@parjatan.gov.bd</p>', '01991139888, 01816879874', '01991139888', 'motelsonamosjid@parjatan.gov.bd', 'Sonamosjid, Shibgonj, Chapainawabganj', NULL, NULL, NULL, NULL, NULL, '/images/hotel_17/hotel_661621796402.jpg|/images/hotel_17/hotel_421621831959.jpg|/images/hotel_17/hotel_551621832688.jpg|/images/hotel_17/hotel_791621833028.jpg|/images/hotel_17/hotel_701621833596.jpg|/images/hotel_17/hotel_581621834850.jpg', 1, NULL, NULL, 0, NULL, '2021-05-24 09:42:35'),
(18, 'Motel Khagrachari', 47, '<h3><span style=\"color: #ba372a;\">Parjatan Motel Khagrachari</span></h3>\r\n<p>Main Road (adjacent to Chengi Bridge), Khagrachari Sadar, Khagrachari</p>\r\n<p>Contact: 01737-444961, 0371-62084-85&nbsp;</p>\r\n<p>email: kgcmotel@gmail.com</p>', '01737444961, 0371-62084-85', '01737444961', 'kgcmotel@gmail.com', 'Main Road (adjacent to Chengi Bridge), Khagrachari Sadar, Khagrachari', NULL, NULL, NULL, NULL, NULL, '/images/hotel_18/hotel_301621797884.jpg', 1, NULL, NULL, 0, NULL, '2021-05-23 23:24:44'),
(19, 'Motel Upal', 45, '<p>Parjatan Motel Upal</p>\r\n<p>Motel Road, Cox\'s Bazar</p>\r\n<p>Contact: 01991139022, 0341-64258</p>\r\n<p>email: motelupal1@gmail.com</p>', '01991139022, 0341-64258', '034164258', 'motelupal1@gmail.com', 'Motel Road, Cox\'s Bazar', NULL, NULL, '0341-64258', '0022280060507', NULL, '/images/hotel_19/hotel_651621996423.jpg|/images/hotel_19/hotel_341621998404.jpg|/images/hotel_19/hotel_581621998432.jpg|/images/hotel_19/hotel_901621998986.jpg', 1, NULL, NULL, 0, NULL, '2021-05-26 07:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `log_id` int(11) NOT NULL,
  `log_title` varchar(200) NOT NULL,
  `log_type` varchar(50) NOT NULL,
  `log_tr_id` varchar(50) DEFAULT NULL,
  `log_amount` varchar(30) NOT NULL,
  `log_creator` int(11) NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`log_id`, `log_title`, `log_type`, `log_tr_id`, `log_amount`, `log_creator`, `log_date`) VALUES
(1, 'Award Inserted', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(2, 'Employee(Id-)2Award Inserted', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(3, 'Employee(Id-2) Award Inserted', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(4, 'Employee(Id-2) Award Deleted', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(5, 'Employee(Id-4143) Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(6, 'Employee(Id-4143) Training Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(7, 'Employee(Id-4143) Training Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(8, 'Employee(Id-4143) Training Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(9, 'Employee(Id-4143) Training Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(10, 'Employee(Id-4143) Training Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(11, 'Employee(Id-4143) Posting Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(12, 'Employee(Id-4143) Posting Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(13, 'Employee(Id-4143) Promotion Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(14, 'Employee(Id-4143) Promotion Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(15, 'Employee(Id-4143) Publication Inserted', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(16, 'Employee(Id-4143) Publication Inserted', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(17, 'Employee(Id-4143) Publication Inserted', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(18, 'Employee(Id-2) Publication Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(19, 'Employee(Id-2) Disciplinary Action Stored', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(20, 'Employee(Id-2) Award Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-01 00:00:00'),
(21, 'Employee(Id-4143) Allowance Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-02 00:00:00'),
(22, 'Employee(Id-4143) Allowance Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-02 00:00:00'),
(23, 'Employee(Id-) Allowance Deleted', 'Employee Section Updated', NULL, '1', 6, '2021-03-02 00:00:00'),
(24, 'Employee(Id-4143) Allowance Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-02 00:00:00'),
(25, 'Employee(Id-) Allowance Deleted', 'Employee Section Updated', NULL, '1', 6, '2021-03-02 00:00:00'),
(26, 'Employee(Id-4143) Allowance Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-02 00:00:00'),
(27, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(28, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(29, 'Salary Rules Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(30, 'Salary Rules Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(31, 'Employee(Id-4143) Salary Structure Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(32, 'Employee(Id-2) Salary Structure Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(33, 'Employee(Id-4143) Salary Structure Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(34, 'Employee(Id-4143) Salary Structure Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(35, 'Employee(Id-2) Salary Structure Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(36, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(37, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(38, 'Employee(Id-2) Salary Structure Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(39, 'Employee(Id-2) Salary Structure Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-03 00:00:00'),
(40, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(41, 'Salary Rules Deleted', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(42, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(43, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(44, 'New Salary Rules Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(45, 'Employee(Id-4143) Salary Structure Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(46, 'Employee(Id-4143) Salary Structure Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(47, 'Salary Rules Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(48, 'Salary Rules Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-04 00:00:00'),
(49, 'Employee(Id-4143) Salary Structure Updated', 'Employee Section Updated', NULL, '1', 6, '2021-03-06 00:00:00'),
(50, 'Employee(Id-2) Salary Structure Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-06 00:00:00'),
(51, 'Employee(Id-2) Salary Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-06 00:00:00'),
(52, 'Employee(Id-2) Salary Sheet Deleted', 'Employee Section Updated', NULL, '1', 6, '2021-03-06 00:00:00'),
(53, 'Employee(Id-2) Salary Created', 'Employee Section Updated', NULL, '1', 6, '2021-03-06 00:00:00'),
(58, 'Reservation (Name -Tos) Update', 'Reservation Update', NULL, '0', 6, '2021-03-07 12:03:38'),
(57, 'Reservation Name -Tos', 'Reservation Update', NULL, '0', 6, '2021-03-06 16:03:31'),
(59, 'Reservation (FO-01210227106) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-07 13:03:07'),
(60, 'Reservation (FO-01210227106) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-07 13:03:52'),
(61, 'checkout Transaction (Name -Tos)', 'checkout Transaction Create', NULL, '1000', 6, '2021-03-07 19:03:51'),
(62, 'Reservation (FO-01210227112) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-08 11:03:06'),
(63, 'Reservation (ON-01210227110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-08 12:03:49'),
(64, 'Hotel (Name -Holiday Complex Rangamati) Update', 'Hotel Update', NULL, '0', 6, '2021-03-08 14:03:17'),
(65, 'Hotel (Name -Holiday Complex Rangamati) Update', 'Hotel Update', NULL, '0', 6, '2021-03-08 17:03:36'),
(66, 'Hotel (Name -Holiday Complex Rangamati) Update', 'Hotel Update', NULL, '0', 6, '2021-03-08 17:03:59'),
(67, 'Reservation (ON-01210308101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-08 18:03:28'),
(68, 'Registration (ON-01210308101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-08 18:03:36'),
(69, 'Guest  (Name -Test) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-08 19:03:49'),
(70, 'Add Guest Service -Room Servie (Name -Tos)', 'Service Create', NULL, '0', 6, '2021-03-08 19:03:09'),
(71, ' Transaction (Name -Tos)', ' Transaction Create', NULL, '100', 6, '2021-03-08 19:03:18'),
(72, ' Transaction (Name -Tos)', ' Transaction Create', NULL, '100', 6, '2021-03-08 19:03:24'),
(73, 'Registration (ON-01210308101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-08 19:03:47'),
(74, 'checkout Transaction (Name -Tos)', 'checkout Transaction Create', NULL, '500', 6, '2021-03-08 19:03:05'),
(75, 'checkout Transaction (Name -Tos)', 'checkout Transaction Create', NULL, '300', 6, '2021-03-08 19:03:19'),
(76, 'checkout Transaction (Name -Tos)', 'checkout Transaction Create', NULL, '4300', 6, '2021-03-08 19:03:29'),
(77, 'Guest  (Name -Tos) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-08 19:03:29'),
(78, 'Registration (ON-01210308101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-08 19:03:37'),
(79, 'Reservation (ON-01210308101) was Cancel by BPC', 'reservation_cancel', NULL, '0', 6, '2021-03-08 19:03:40'),
(80, 'Reservation (ON-01210308101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-08 19:03:21'),
(81, 'Registration (ON-01210308101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-08 19:03:40'),
(82, 'Registration (ON-01210308101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-08 19:03:59'),
(83, 'Hotel (Name -Hotel Abakash) Update', 'Hotel Update', NULL, '0', 6, '2021-03-09 11:03:09'),
(84, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-09 13:03:40'),
(85, 'Reservation (ON-01210308102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-09 14:03:58'),
(86, 'Add Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-10 19:03:27'),
(87, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '10', 6, '2021-03-10 19:03:24'),
(88, 'Add Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-10 19:03:38'),
(89, 'Registration (ON-01210308101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-10 19:03:31'),
(90, 'Reservation (FO-01210311101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-11 15:03:50'),
(91, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 15:03:58'),
(92, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 15:03:27'),
(93, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 15:03:46'),
(94, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 16:03:59'),
(95, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 16:03:51'),
(96, 'Reservation (FO-01210311101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-11 16:03:43'),
(97, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 16:03:45'),
(98, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 16:03:27'),
(99, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 16:03:52'),
(100, 'Reservation (FO-01210311101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-11 16:03:15'),
(101, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 16:03:44'),
(102, 'Reservation (FO-01210311101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-11 16:03:25'),
(103, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 16:03:38'),
(104, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:22'),
(105, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:54'),
(106, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:15'),
(107, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:10'),
(108, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:28'),
(109, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:52'),
(110, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:09'),
(111, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:34'),
(112, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:07'),
(113, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:24'),
(114, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:33'),
(115, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:08'),
(116, 'Reservation (FO-01210311101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-11 17:03:16'),
(117, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:00'),
(118, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:22'),
(119, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:41'),
(120, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:08'),
(121, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:05'),
(122, 'Reservation (FO-01210311101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-11 17:03:36'),
(123, 'Reservation (FO-01210313101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-13 13:03:05'),
(124, 'Registration (FO-01210313101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-13 14:03:26'),
(125, 'Reservation (FO-01210313102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-13 15:03:04'),
(126, 'Reservation (FO-01210313102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-13 15:03:45'),
(127, 'Reservation (FO-01210313102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-13 15:03:00'),
(128, 'Hotel (Name -Hotel Abakash) Update', 'Hotel Update', NULL, '0', 6, '2021-03-13 16:03:48'),
(129, 'Room Type (Name -Standard Twin Bed) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 16:03:22'),
(130, 'Room Type (Name -Deluxe Twin Bed) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 16:03:01'),
(131, 'Hotel (Name -Parjatan Hotel Shaikat) Update', 'Hotel Update', NULL, '0', 6, '2021-03-13 19:03:27'),
(132, 'Room Type (Name -Non AC Couple Bed) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 19:03:28'),
(133, 'Room Type (Name -Non AC Twin Bed) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 19:03:09'),
(134, 'Room Type (Name -AC Standard Twin/ Queen) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 19:03:39'),
(135, 'Room Type (Name -AC Deluxe Queen Room) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 19:03:13'),
(136, 'Room Type (Name -AC Suite Room) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 19:03:47'),
(137, 'Room Type (Name -International Suite Room) Update', 'Guest Registration Update', NULL, '0', 6, '2021-03-13 19:03:21'),
(138, 'Reservation (FO-04210313101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-13 19:03:41'),
(139, 'Reservation (FO-04210313101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-13 19:03:24'),
(140, 'Reservation (FO-04210313101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-13 19:03:43'),
(141, 'Reservation (FO-04210313101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-13 20:03:25'),
(142, 'Reservation (FO-04210313101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-13 20:03:50'),
(143, 'Registration (FO-04210313101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-13 20:03:22'),
(144, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '5000', 6, '2021-03-13 20:03:32'),
(145, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-13 20:03:09'),
(146, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-13 20:03:18'),
(147, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '20', 6, '2021-03-13 20:03:36'),
(148, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-13 20:03:36'),
(149, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '50', 6, '2021-03-13 20:03:28'),
(150, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-13 20:03:28'),
(151, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 11:03:18'),
(152, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 11:03:18'),
(153, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '250', 6, '2021-03-14 11:03:54'),
(154, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 11:03:54'),
(155, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 11:03:22'),
(156, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 11:03:22'),
(157, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 11:03:32'),
(158, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 11:03:32'),
(159, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 11:03:36'),
(160, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 11:03:36'),
(161, '(Name -Md. Rasel Hossain) Service Other BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 11:03:39'),
(162, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 11:03:39'),
(163, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '9080', 6, '2021-03-14 11:03:02'),
(164, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '50', 6, '2021-03-14 12:03:51'),
(165, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:51'),
(166, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '550', 6, '2021-03-14 12:03:04'),
(167, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 12:03:03'),
(168, 'Reservation (FO-04210314101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 12:03:38'),
(169, 'Guest Registration (Name -)', 'Transaction', NULL, '500', 6, '2021-03-14 12:03:22'),
(170, 'Registration (FO-04210314101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 12:03:22'),
(171, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 12:03:06'),
(172, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:06'),
(173, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 12:03:22'),
(174, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 12:03:22'),
(175, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:23'),
(176, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '100', 6, '2021-03-14 12:03:57'),
(177, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:57'),
(178, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 12:03:50'),
(179, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 12:03:50'),
(180, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 12:03:23'),
(181, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 12:03:23'),
(182, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '100', 6, '2021-03-14 12:03:10'),
(183, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:10'),
(184, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 12:03:13'),
(185, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 12:03:13'),
(186, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:24'),
(187, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 12:03:12'),
(188, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 12:03:12'),
(189, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:31'),
(190, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 12:03:39'),
(191, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 12:03:39'),
(192, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '100', 6, '2021-03-14 12:03:34'),
(193, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 12:03:34'),
(194, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 12:03:08'),
(195, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:17'),
(196, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:43'),
(197, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:18'),
(198, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:49'),
(199, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:28'),
(200, 'Guest Registration (Name -)', 'Transaction', NULL, '1000', 6, '2021-03-14 13:03:46'),
(201, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:46'),
(202, 'Guest Registration (Name -)', 'Transaction', NULL, '500', 6, '2021-03-14 13:03:01'),
(203, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:01'),
(204, 'Reservation (FO-04210314102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 13:03:35'),
(205, 'Reservation (FO-04210314101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 13:03:17'),
(206, 'Reservation (FO-04210314102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 13:03:43'),
(207, 'Reservation (FO-04210314101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-14 13:03:41'),
(208, 'Guest Registration (Name -)', 'Transaction', NULL, '400', 6, '2021-03-14 13:03:03'),
(209, 'Registration (FO-04210314101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 13:03:03'),
(210, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 13:03:33'),
(211, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 13:03:33'),
(212, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 13:03:45'),
(213, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 13:03:45'),
(214, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '100', 6, '2021-03-14 13:03:20'),
(215, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 13:03:20'),
(216, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 13:03:35'),
(217, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 13:03:35'),
(218, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '100', 6, '2021-03-14 13:03:32'),
(219, 'Add Guest Service - (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 13:03:32'),
(220, 'Guest Registration (Name -)', 'Transaction', NULL, '100', 6, '2021-03-14 13:03:06'),
(221, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 13:03:06'),
(222, '(Name -Md. Rasel Hossain) Service Transaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 13:03:23'),
(223, 'Delete Guest Service - (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 13:03:23'),
(224, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '200', 6, '2021-03-14 13:03:57'),
(225, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 13:03:57'),
(226, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 13:03:10'),
(227, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 13:03:10'),
(228, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '200', 6, '2021-03-14 13:03:06'),
(229, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 13:03:06'),
(230, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 13:03:00'),
(231, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 13:03:00'),
(232, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:13'),
(233, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:13'),
(234, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:12'),
(235, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:12'),
(236, ' Transaction (Name -Md. Rasel Hossain)', ' Transaction Create', NULL, '200', 6, '2021-03-14 14:03:26'),
(237, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:26'),
(238, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:59'),
(239, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:59'),
(240, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:43'),
(241, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:43'),
(242, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:08'),
(243, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:08'),
(244, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:28'),
(245, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:28'),
(246, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:15'),
(247, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:15'),
(248, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:34'),
(249, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:34'),
(250, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:39'),
(251, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:39'),
(252, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:40'),
(253, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:40'),
(254, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:56'),
(255, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:56'),
(256, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:27'),
(257, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:27'),
(258, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:03'),
(259, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:03'),
(260, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:43'),
(261, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:43'),
(262, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:04'),
(263, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:04'),
(264, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:33'),
(265, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:33'),
(266, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:51'),
(267, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:51'),
(268, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 14:03:09'),
(269, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:09'),
(270, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:14'),
(271, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:14'),
(272, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:08'),
(273, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:08'),
(274, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 14:03:32'),
(275, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 14:03:32'),
(276, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 14:03:57'),
(277, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:57'),
(278, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '9500', 6, '2021-03-14 14:03:31'),
(279, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 14:03:31'),
(280, 'Reservation (FO-04210314101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 14:03:26'),
(281, 'Reservation (FO-04210314101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-14 14:03:52'),
(282, 'Reservation (FO-04210314101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 14:03:25'),
(283, 'Reservation (FO-04210314101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-14 14:03:19'),
(284, 'Reservation (FO-04210314101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-14 14:03:30'),
(285, 'Reservation (FO-04210314101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-14 14:03:08'),
(286, 'Guest Registration (Name -)', 'Transaction', NULL, '100', 6, '2021-03-14 14:03:41'),
(287, 'Registration (FO-04210314101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 14:03:41'),
(288, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 14:03:01'),
(289, 'Registration (FO-04210314101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 14:03:19'),
(290, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 14:03:49'),
(291, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 14:03:49'),
(292, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '8300', 6, '2021-03-14 15:03:19'),
(293, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 15:03:19'),
(294, 'Reservation (FO-04210314101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 15:03:06'),
(295, 'Guest Registration (Name -)', 'Transaction', NULL, '500', 6, '2021-03-14 15:03:23'),
(296, 'Registration (FO-04210314101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 15:03:23'),
(297, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 15:03:38'),
(298, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 15:03:38'),
(299, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 15:03:38'),
(300, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 15:03:38'),
(301, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 15:03:03'),
(302, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 15:03:03'),
(303, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 15:03:12'),
(304, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 15:03:12'),
(305, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 15:03:25'),
(306, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 15:03:25'),
(307, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 15:03:28'),
(308, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 15:03:28'),
(309, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 15:03:42'),
(310, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 15:03:42'),
(311, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 16:03:24'),
(312, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 16:03:24'),
(313, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 16:03:56'),
(314, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 16:03:56'),
(315, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 16:03:23'),
(316, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 16:03:23'),
(317, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 16:03:47'),
(318, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 16:03:47'),
(319, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 16:03:39'),
(320, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 16:03:39'),
(321, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 16:03:56'),
(322, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 16:03:56'),
(323, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 16:03:20'),
(324, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 16:03:20'),
(325, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 16:03:47'),
(326, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 16:03:47'),
(327, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '500', 6, '2021-03-14 16:03:11'),
(328, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 16:03:11'),
(329, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '10000', 6, '2021-03-14 16:03:49'),
(330, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 16:03:49'),
(331, 'Reservation (FO-04210314102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 16:03:51'),
(332, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-14 16:03:48'),
(333, 'Reservation (FO-04210314104) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 18:03:52'),
(334, 'Registration (FO-04210314104) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 18:03:08'),
(335, 'Guest Registration (Name -)', 'Transaction', NULL, '3000', 6, '2021-03-14 18:03:07'),
(336, 'Registration (FO-04210314104) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 18:03:07'),
(337, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 18:03:35'),
(338, 'Guest Registration (Name -)', 'Transaction', NULL, '4000', 6, '2021-03-14 18:03:04'),
(339, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-14 18:03:04'),
(340, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 18:03:28'),
(341, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 18:03:49'),
(342, 'Reservation (FO-04210314106) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 19:03:04'),
(343, 'Guest Registration (Name -)', 'Transaction', NULL, '100', 6, '2021-03-14 19:03:16'),
(344, 'Registration (FO-04210314106) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 19:03:16'),
(345, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 19:03:38'),
(346, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 19:03:38'),
(347, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-14 19:03:50'),
(348, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 19:03:50'),
(349, 'Registration (FO-04210314106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 19:03:05'),
(350, 'Registration (FO-04210314106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 19:03:48'),
(351, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 19:03:03'),
(352, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 19:03:31'),
(353, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 19:03:44'),
(354, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '1050', 6, '2021-03-14 19:03:40'),
(355, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 19:03:40'),
(356, 'Reservation (FO-04210314107) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 19:03:09'),
(357, 'Guest Registration (Name -)', 'Transaction', NULL, '100', 6, '2021-03-14 19:03:24'),
(358, 'Registration (FO-04210314107) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 19:03:24'),
(359, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 19:03:42'),
(360, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 19:03:14'),
(361, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 19:03:28'),
(362, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-14 19:03:39'),
(363, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 19:03:06'),
(364, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-14 19:03:19'),
(365, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 19:03:19'),
(366, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '525', 6, '2021-03-14 19:03:21'),
(367, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 19:03:21'),
(368, 'Reservation (FO-04210314108) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-14 19:03:14'),
(369, 'Registration (FO-04210314108) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-14 19:03:43'),
(370, 'Registration (FO-04210314108) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-14 19:03:10'),
(371, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '200', 6, '2021-03-14 19:03:28'),
(372, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-14 19:03:28'),
(373, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '540', 6, '2021-03-14 19:03:02'),
(374, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-14 19:03:02'),
(375, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:53'),
(376, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 11:03:04'),
(377, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:04'),
(378, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 11:03:42'),
(379, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:42'),
(380, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:45'),
(381, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:18'),
(382, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:05'),
(383, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 11:03:39'),
(384, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:39'),
(385, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:50'),
(386, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:43'),
(387, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 11:03:46'),
(388, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:46'),
(389, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 11:03:02'),
(390, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:02'),
(391, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:11'),
(392, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:35'),
(393, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 11:03:39'),
(394, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:39'),
(395, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 11:03:50'),
(396, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:50'),
(397, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:58'),
(398, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:30'),
(399, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 11:03:33'),
(400, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:33'),
(401, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 11:03:09'),
(402, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:09'),
(403, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:18'),
(404, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:39'),
(405, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:58'),
(406, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:31'),
(407, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:38'),
(408, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:42'),
(409, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 11:03:47'),
(410, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:47'),
(411, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 11:03:35'),
(412, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:35'),
(413, 'Registration (FO-04210314103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-15 11:03:51'),
(414, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 11:03:58'),
(415, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 11:03:58'),
(416, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 11:03:39'),
(417, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:39'),
(418, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 11:03:56'),
(419, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 12:03:48'),
(420, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '250', 6, '2021-03-15 12:03:23'),
(421, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 12:03:23'),
(422, '(Name -Md. Rasel Hossain) Service Other BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 12:03:54'),
(423, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 12:03:54'),
(424, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 12:03:03'),
(425, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 12:03:09'),
(426, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 12:03:14');
INSERT INTO `tbl_logs` (`log_id`, `log_title`, `log_type`, `log_tr_id`, `log_amount`, `log_creator`, `log_date`) VALUES
(427, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 12:03:14'),
(428, 'Reservation (FO-04210314102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-15 12:03:18'),
(429, 'Registration (FO-04210314102) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-15 12:03:28'),
(430, 'Guest Registration (Name -)', 'Transaction', NULL, '2000', 6, '2021-03-15 12:03:07'),
(431, 'Registration (FO-04210314102) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-15 12:03:07'),
(432, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-15 12:03:51'),
(433, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 12:03:51'),
(434, 'Add Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 12:03:11'),
(435, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-15 12:03:25'),
(436, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '8000', 6, '2021-03-15 12:03:18'),
(437, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-15 12:03:18'),
(438, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 13:03:00'),
(439, 'Delete Guest Service -Other Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 13:03:08'),
(440, '(Name -Md. Rasel Hossain) Service Restaurant BillTransaction Delete', 'Transaction Delete', NULL, '0', 6, '2021-03-15 13:03:13'),
(441, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-15 13:03:13'),
(442, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-15 17:03:41'),
(443, 'Reservation (FO-04210314110) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-15 17:03:29'),
(444, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-15 17:03:40'),
(445, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-15 17:03:42'),
(446, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-15 17:03:55'),
(447, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-15 17:03:03'),
(448, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-15 17:03:45'),
(449, 'Reservation (FO-04210314111) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-15 18:03:29'),
(450, 'Guest Registration (Name -)', 'Transaction', NULL, '200', 6, '2021-03-15 18:03:50'),
(451, 'Registration (FO-04210314111) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-15 18:03:50'),
(452, 'Guest Registration (Name -)', 'Transaction', NULL, '500', 6, '2021-03-15 18:03:17'),
(453, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-15 18:03:17'),
(454, 'Registration (FO-04210314112) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-15 18:03:33'),
(455, 'Add Guest Service -Restaurant Bill (Name -test 3)', 'Service Create', NULL, '0', 6, '2021-03-15 18:03:55'),
(456, 'checkout Transaction (Name -test 3)', 'checkout Transaction Create', NULL, '3100', 6, '2021-03-15 18:03:13'),
(457, 'Guest  (Name -test 3) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-15 18:03:13'),
(458, 'Reservation (FO-04210314113) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-15 19:03:30'),
(459, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 12:03:58'),
(460, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 12:03:06'),
(461, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 13:03:09'),
(462, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 13:03:31'),
(463, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 13:03:50'),
(464, 'Registration (FO-04210314111) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 13:03:31'),
(465, 'Registration (FO-04210314111) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 13:03:17'),
(466, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 13:03:53'),
(467, 'Reservation (FO-04210314110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 13:03:23'),
(468, 'Reservation (FO-01210316101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-16 17:03:57'),
(469, 'Reservation (FO-01210316101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 17:03:13'),
(470, 'Reservation (FO-01210316101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 17:03:37'),
(471, 'Reservation (FO-01210316101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-16 17:03:11'),
(472, 'Guest Registration (Name -)', 'Transaction', NULL, '500', 6, '2021-03-16 17:03:29'),
(473, 'Registration (FO-01210316101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-16 17:03:29'),
(474, 'Guest Registration (Name -Md. Rasel Hossain) Room Shifting', 'Guest Registration Room Shiftin', NULL, '0', 6, '2021-03-16 18:03:39'),
(475, 'Guest Registration (Name -Md. Rasel Hossain) Room Shifting', 'Guest Registration Room Shiftin', NULL, '0', 6, '2021-03-16 18:03:28'),
(476, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '4500', 6, '2021-03-16 18:03:36'),
(477, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 18:03:36'),
(478, 'Reservation (FO-01210316102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-16 18:03:14'),
(479, 'Registration (FO-01210316102) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-16 18:03:26'),
(480, 'Add Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-16 18:03:45'),
(481, 'Delete Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-16 18:03:51'),
(482, 'Add Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-16 18:03:01'),
(483, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '4200', 6, '2021-03-16 18:03:19'),
(484, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 18:03:19'),
(485, 'Guest Registration (Name -)', 'Transaction', NULL, '500', 6, '2021-03-16 18:03:11'),
(486, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-16 18:03:11'),
(487, 'Registration (FO-01210316103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 18:03:42'),
(488, 'Registration (FO-01210316103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 18:03:29'),
(489, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '8500', 6, '2021-03-16 18:03:55'),
(490, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 18:03:55'),
(491, 'Guest Registration (Name -)', 'Transaction', NULL, '1000', 6, '2021-03-16 18:03:28'),
(492, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-16 18:03:28'),
(493, 'Registration (FO-01210316104) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 18:03:23'),
(494, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '8000', 6, '2021-03-16 18:03:11'),
(495, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 18:03:11'),
(496, 'Guest Registration (Name -)', 'Transaction', NULL, '600', 6, '2021-03-16 19:03:41'),
(497, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-16 19:03:41'),
(498, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '3000', 6, '2021-03-16 19:03:09'),
(499, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 19:03:09'),
(500, 'Guest Registration (Name -)', 'Transaction', NULL, '250', 6, '2021-03-16 19:03:01'),
(501, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-16 19:03:01'),
(502, 'Registration (FO-01210316112) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 19:03:15'),
(503, 'Registration (FO-01210316112) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 19:03:37'),
(504, 'Registration (FO-01210316112) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 19:03:29'),
(505, 'Add Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-16 19:03:53'),
(506, 'Delete Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Delete', NULL, '0', 6, '2021-03-16 19:03:19'),
(507, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-16 19:03:28'),
(508, 'Add Guest Service -Room Servie (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-16 19:03:28'),
(509, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '4350', 6, '2021-03-16 19:03:35'),
(510, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 19:03:35'),
(511, 'Reservation (FO-04210316101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-16 19:03:59'),
(512, 'Guest Registration (Name -)', 'Transaction', NULL, '250', 6, '2021-03-16 19:03:25'),
(513, 'Registration (FO-04210316101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-16 19:03:25'),
(514, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-16 19:03:47'),
(515, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-16 19:03:47'),
(516, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '2500', 6, '2021-03-16 19:03:31'),
(517, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 19:03:31'),
(518, 'Guest Registration (Name -)', 'Transaction', NULL, '500', 6, '2021-03-16 19:03:17'),
(519, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-16 19:03:17'),
(520, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-16 19:03:38'),
(521, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-16 19:03:38'),
(522, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '8500', 6, '2021-03-16 19:03:52'),
(523, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 19:03:52'),
(524, 'Guest Registration (Name -)', 'Transaction', NULL, '30', 6, '2021-03-16 19:03:35'),
(525, 'Guest Registration (Name -) Create', 'Guest Registration Create', NULL, '0', 6, '2021-03-16 19:03:35'),
(526, 'Registration (FO-04210316103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-16 19:03:57'),
(527, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '100', 6, '2021-03-16 19:03:26'),
(528, 'Add Guest Service -Restaurant Bill (Name -Md. Rasel Hossain)', 'Service Create', NULL, '0', 6, '2021-03-16 19:03:26'),
(529, 'checkout Transaction (Name -Md. Rasel Hossain)', 'checkout Transaction Create', NULL, '1100', 6, '2021-03-16 19:03:40'),
(530, 'Guest  (Name -Md. Rasel Hossain) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-16 19:03:40'),
(531, 'Reservation (ON-04210316104) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-18 18:03:34'),
(532, 'Registration (ON-04210316104) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-18 18:03:56'),
(533, 'Guest  (Name -Test 4) Check-out', ' Guest Check-out', NULL, '0', 6, '2021-03-18 19:03:36'),
(534, 'Room type Price (Royal Suite) was delete by BPC', 'room_type_price_delete', NULL, '0', 6, '2021-03-19 14:03:15'),
(535, 'House Keeping (602) was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-19 16:03:44'),
(536, 'House Keeping (602) was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-19 16:03:55'),
(537, 'Promotional (Deluxe Twin Bed) was update by BPC', 'promotional_update', NULL, '0', 6, '2021-03-19 16:03:54'),
(538, 'Room Type Price (Deluxe Twin Bed) was update by BPC', 'room_type_price_update', NULL, '0', 6, '2021-03-19 17:03:10'),
(539, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-19 17:03:25'),
(540, 'Hotel (Holiday Complex Rangamati) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-20 14:03:33'),
(541, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-20 18:03:18'),
(542, 'Guest Service (Md. Rasel Hossain) was create by BPC', 'guest_service', NULL, '0', 6, '2021-03-20 18:03:53'),
(543, 'Guest Service (Md. Rasel Hossain) was create by BPC', 'guest_service', NULL, '0', 6, '2021-03-20 18:03:26'),
(544, 'Registration (FO-01210320101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-20 19:03:02'),
(545, 'Reservation (FO-01210320102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-20 19:03:55'),
(546, 'Reservation (FO-01210320103) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-20 21:03:59'),
(547, 'Hotel (Parjatan Hotel Shaikat) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-21 13:03:02'),
(548, 'Reservation (FO-01210321101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-21 18:03:01'),
(549, 'Reservation (FO-01210321101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-21 18:03:27'),
(550, 'Hotel (Eagle Restaurant) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-21 19:03:15'),
(551, 'Hotel (Parliament VIP Cafeteria) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-21 19:03:07'),
(552, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-03-22 12:03:45'),
(553, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-22 12:03:45'),
(554, 'Registration (FO-02210322101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-22 12:03:39'),
(555, 'Registration (FO-02210322101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-22 12:03:38'),
(556, 'Registration (FO-02210322101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-22 12:03:13'),
(557, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-22 16:03:08'),
(558, 'Hotel (Parjatan Hotel Shaikat) was delete by BPC', 'hotel_delete', NULL, '0', 6, '2021-03-22 17:03:49'),
(559, 'Hotel (Parliament VIP Cafeteria) was delete by BPC', 'hotel_delete', NULL, '0', 6, '2021-03-22 17:03:57'),
(560, 'Hotel (Eagle Restaurant) was delete by BPC', 'hotel_delete', NULL, '0', 6, '2021-03-22 17:03:10'),
(561, 'Hotel (Hotel Abakash) was delete by BPC', 'hotel_delete', NULL, '0', 6, '2021-03-22 17:03:36'),
(562, 'Hotel (Hotel Abakash) was create by BPC', 'hotel_create', NULL, '0', 6, '2021-03-22 17:03:01'),
(563, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-22 17:03:18'),
(564, 'Hotel (Parjatan Motel) was create by BPC', 'hotel_create', NULL, '0', 6, '2021-03-22 17:03:46'),
(565, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-22 17:03:51'),
(566, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-22 17:03:24'),
(567, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-22 17:03:06'),
(568, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-22 17:03:12'),
(569, 'Room Type (A/C Deluxe Couple) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-03-22 18:03:23'),
(570, 'Room Type (A/C Deluxe Couple) was update by BPC', 'room_type_update', NULL, '0', 6, '2021-03-22 18:03:36'),
(571, 'Room Type (A/C Deluxe Twin) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-03-22 18:03:56'),
(572, 'Room Type (A/C Standard Couple) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-03-22 18:03:38'),
(573, 'Room Type (A/C Deluxe Couple) was update by BPC', 'room_type_update', NULL, '0', 6, '2021-03-22 18:03:52'),
(574, 'Room Type (A/C Standard Twin) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-03-22 18:03:34'),
(575, 'Room Type (Deluxe Twin) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-03-22 19:03:05'),
(576, 'Room Type (Deluxe Suite) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-03-22 19:03:47'),
(577, 'Room Type (Bridal) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-03-22 19:03:55'),
(578, 'Reservation (FO-01210322101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-22 20:03:28'),
(579, 'Registration (FO-01210322101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-22 20:03:37'),
(580, 'Guest Service (Md. Rasel Hossain) was create by BPC', 'guest_service', NULL, '0', 6, '2021-03-22 20:03:55'),
(581, 'Transaction (Md. Rasel Hossain) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-03-22 20:03:03'),
(582, 'Guest (Md. Rasel Hossain) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-03-22 20:03:03'),
(583, 'Reservation (FO-01210322101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-22 20:03:40'),
(584, 'Registration (FO-01210322101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-22 20:03:14'),
(585, 'Transaction (Md. Rasel Hossain) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-03-22 20:03:40'),
(586, 'Guest (Md. Rasel Hossain) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-03-22 20:03:40'),
(587, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-22 20:03:39'),
(588, 'Reservation (FO-01210322103) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-23 12:03:38'),
(589, 'Registration (FO-01210322103) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-23 12:03:23'),
(590, 'Registration (FO-01210322103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-23 12:03:38'),
(591, 'Registration (FO-01210322103) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-23 12:03:36'),
(592, 'Guest (Md. Rasel Hossain) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-03-23 12:03:18'),
(593, 'Guest (Md. Rasel Hossain) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-03-23 12:03:31'),
(594, 'Registration (FO-01210322103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-23 12:03:48'),
(595, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-24 18:03:42'),
(596, 'Reservation (FO-01210324102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-25 11:03:27'),
(597, 'Registration (FO-01210324102) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-25 12:03:26'),
(598, 'Transaction (Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-03-25 12:03:49'),
(599, 'Guest (Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-03-25 12:03:49'),
(600, 'Guest (Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-03-25 12:03:33'),
(601, 'Guest (Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-03-25 12:03:25'),
(602, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-25 15:03:03'),
(603, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-25 15:03:03'),
(604, 'Reservation (FO-01210324105) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-25 15:03:10'),
(605, 'Reservation (FO-01210324105) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-25 15:03:42'),
(606, 'Registration (FO-01210324104) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-25 16:03:57'),
(607, 'Reservation (FO-01210324105) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-25 16:03:25'),
(608, 'Reservation (FO-01210324105) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-25 16:03:36'),
(609, 'Registration (FO-01210324104) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-25 16:03:08'),
(610, 'Reservation (FO-01210324105) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-25 16:03:45'),
(611, 'Reservation (FO-01210324105) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-25 16:03:46'),
(612, 'Reservation (FO-01210324105) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-25 16:03:32'),
(613, 'Reservation (FO-01210324105) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-03-25 16:03:12'),
(614, 'Registration (FO-01210324104) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-25 16:03:06'),
(615, 'Reservation (FO-01210324106) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-25 16:03:52'),
(616, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 13:03:37'),
(617, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 13:03:45'),
(618, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 14:03:08'),
(619, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 14:03:41'),
(620, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 14:03:22'),
(621, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 14:03:35'),
(622, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 14:03:25'),
(623, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 14:03:38'),
(624, 'Reservation (FO-02210327101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-27 16:03:09'),
(625, 'Registration (FO-02210327101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-03-27 17:03:20'),
(626, 'Reservation (FO-02210327102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-27 17:03:11'),
(627, 'Reservation (FO-02210327103) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-27 17:03:06'),
(628, 'Reservation (FO-02210327104) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-27 17:03:18'),
(629, 'House Keeping (203) was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-27 19:03:35'),
(630, 'House Keeping (203) was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-27 19:03:34'),
(631, 'House Keeping (203) was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-27 19:03:31'),
(632, 'House Keeping (203) was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-27 19:03:54'),
(633, 'House Keeping (203) was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-27 19:03:14'),
(634, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-27 19:03:00'),
(635, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-27 19:03:25'),
(636, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-03-27 20:03:59'),
(637, 'Reservation (FO-01210324107) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-03-28 12:03:01'),
(638, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-28 13:03:50'),
(639, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-28 16:03:47'),
(640, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-28 16:03:29'),
(641, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-28 16:03:20'),
(642, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-28 16:03:34'),
(643, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-03-28 16:03:04'),
(644, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-03-28 18:03:40'),
(645, 'Registration (FO-01210328101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-28 19:03:49'),
(646, 'Registration (FO-01210328101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-03-28 19:03:05'),
(647, 'Room Type Price (Deluxe Twin) was create by BPC', 'room_type_price_create', NULL, '0', 6, '2021-03-29 12:03:30'),
(648, 'Room Type Price (Deluxe Twin) was update by BPC', 'room_type_price_update', NULL, '0', 6, '2021-03-29 12:03:05'),
(649, 'Reservation (FO-01210329108) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-01 15:04:20'),
(650, 'Reservation (FO-01210329108) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 15:04:25'),
(651, 'Reservation (FO-01210329109) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-01 15:04:55'),
(652, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 18:04:00'),
(653, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 18:04:41'),
(654, 'Reservation (FO-01210329109) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 18:04:58'),
(655, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 19:04:24'),
(656, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 19:04:00'),
(657, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 19:04:18'),
(658, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 19:04:34'),
(659, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 20:04:37'),
(660, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 20:04:07'),
(661, 'Reservation (ON-01210329110) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-01 20:04:23'),
(662, 'Registration (FO-01210329109) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-01 20:04:03'),
(663, 'Registration (FO-01210329109) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-01 20:04:21'),
(664, 'Registration (FO-01210329109) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-01 20:04:02'),
(665, 'Registration (FO-01210329109) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-01 20:04:13'),
(666, 'Guest type (Official) was update by BPC', 'guest_type_update', NULL, '0', 6, '2021-04-03 18:04:37'),
(667, 'Payment Type Discount (Mobile Banking) was update by BPC', 'payment_type_discount_update', NULL, '0', 6, '2021-04-03 18:04:56'),
(668, 'Payment Discount (20) was update by BPC', 'payment_discount_update', NULL, '0', 6, '2021-04-03 18:04:21'),
(669, 'Reservation (FO-01210329108) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-04 11:04:27'),
(670, 'Reservation (FO-01210329112) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-04 11:04:16'),
(671, 'Registration (FO-01210329109) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-04 14:04:57'),
(672, 'Registration (ON-01210329101) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-05 12:04:21'),
(673, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-05 12:04:57'),
(674, 'Registration (ON-01210329102) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-05 12:04:12'),
(675, 'Registration (ON-01210329103) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-05 12:04:32'),
(676, 'Registration (FO-01210329112) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-05 12:04:15'),
(677, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-08 11:04:25'),
(678, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-08 11:04:35'),
(679, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-08 11:04:44'),
(680, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-08 17:04:26'),
(681, 'Registration (FO-01210329114) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-08 17:04:49'),
(682, 'Transaction (Md. Rasel 2) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-08 17:04:19'),
(683, 'Guest (Md. Rasel 2) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-08 17:04:19'),
(684, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-08 17:04:56'),
(685, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-08 17:04:44'),
(686, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-08 17:04:44'),
(687, 'Registration (FO-01210408101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-08 17:04:01'),
(688, 'Registration (FO-01210408101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-08 17:04:22'),
(689, 'Registration (FO-01210408101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-08 17:04:43'),
(690, 'Registration (FO-01210408101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-08 17:04:11'),
(691, 'Reservation (FO-01210408102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-10 10:04:15'),
(692, 'Reservation (FO-01210408102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-10 11:04:24'),
(693, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:44'),
(694, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:16'),
(695, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:36'),
(696, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:43'),
(697, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:03'),
(698, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:12'),
(699, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:39'),
(700, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:44'),
(701, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:51'),
(702, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:43'),
(703, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 12:04:31'),
(704, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 13:04:00'),
(705, 'Base Setting was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 13:04:05'),
(706, 'Base Setting (BPC) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 15:04:15'),
(707, 'Base Setting (BPC test) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 15:04:15'),
(708, 'Base Setting (Bangladesh Parjatan Corporation) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 15:04:04'),
(709, 'Registration (FO-01210408101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-10 16:04:51'),
(710, 'Base Setting (BPC test) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:30'),
(711, 'Base Setting (BPC) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:37'),
(712, 'Base Setting (https://hotels.gov.bd) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:08'),
(713, 'Base Setting (admin@hotels.gov.bd) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:08'),
(714, 'Base Setting (E-5 C/1, West Agargaon, Sher-e-Bangla Nagar Administrative Area, Dhaka - 1207) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:08'),
(715, 'Base Setting (+880-2-44826527) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:08'),
(716, 'Base Setting (2017-12-13) was update by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:08'),
(717, 'System Setting (appName) was changed by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 16:04:34'),
(718, 'System Setting (appName) was changed by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 17:04:10'),
(719, 'System Setting (appName) was changed by BPC', 'base_setting', NULL, '0', 6, '2021-04-10 17:04:55'),
(720, 'Hotel (Parjatan Motel) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-04-11 12:04:46'),
(721, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-04-11 15:04:40'),
(722, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-11 16:04:39'),
(723, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-11 16:04:39'),
(724, 'Reservation (FO-01210408103) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-11 16:04:11'),
(725, 'Reservation (FO-01210408103) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-11 16:04:25'),
(726, 'Reservation (FO-01210408103) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-11 17:04:09'),
(727, 'Registration (ON-01210408104) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-14 12:04:28'),
(728, 'Route (Section : Rooms, Permission : Edit) was remove by BPC', 'route_permission_remove', NULL, '0', 6, '2021-04-15 11:04:23'),
(729, 'Route (Section : Rooms, Permission : edit) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-04-15 11:04:55'),
(730, 'Route (Section : Auth, Permission : route_edit) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-15 12:04:51'),
(731, 'Route (Section : Auth, Permission : Route edit) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 12:04:12'),
(732, 'Route (Section : Auth, Permission : logs) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-15 12:04:41'),
(733, 'Route (Section : Auth, Permission : logs_show) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-15 12:04:05'),
(734, 'Route (Section : Auth, Permission : permission_remove) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-15 12:04:25'),
(735, 'Route (Section : Auth, Permission : permission_check) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-15 12:04:38'),
(736, 'Route (Section : Auth, Permission : Logs show) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 12:04:11'),
(737, 'Route (Section : Auth, Permission : Permission remove) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 12:04:12'),
(738, 'Route (Section : Auth, Permission : Logs) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 12:04:15'),
(739, 'Route (Section : Auth, Permission : Permission check) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 12:04:18'),
(740, 'Route (Section : Auth, Permission : ase_setting) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-15 12:04:00'),
(741, 'Route (Section : Auth, Permission : Ase setting) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 12:04:13'),
(742, 'Route (Section : Auth) was update by BPC', 'route_section_update', NULL, '0', 6, '2021-04-15 12:04:53'),
(743, 'Route (Section : Auth, Permission : ome) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-15 13:04:55'),
(744, 'Route (Section : Auth, Permission : Ome) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 13:04:29'),
(745, 'Route (Section : Rooms, Permission : Edit) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-15 13:04:14'),
(746, 'Route (Section : Discount, Permission : special_discounts_delete) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-04-15 13:04:01'),
(747, 'Route (Section : Discount, Permission : specialdiscounts) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-04-15 13:04:04'),
(748, 'Route (Section : Discount, Permission : special_discounts_store) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-04-15 13:04:07'),
(749, 'Route (Section : Discount, Permission : special_discounts_show) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-04-15 13:04:09'),
(750, 'Route (Section : Discount, Permission : special_discounts_edit) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-04-15 13:04:12'),
(751, 'Route (Section : Discount, Permission : special_discounts_create) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-04-15 13:04:16'),
(752, 'Registration (FO-01210408103) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-15 14:04:06'),
(753, 'Reservation (FO-01210408105) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-15 14:04:40'),
(754, 'Registration (FO-01210408105) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-15 14:04:52'),
(755, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-15 14:04:05'),
(756, 'Registration (ON-01210408109) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-15 15:04:07'),
(757, 'Guest (Hasan) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-15 15:04:28'),
(758, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-15 16:04:49'),
(759, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-15 16:04:49'),
(760, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-15 16:04:31'),
(761, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-15 16:04:31'),
(762, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-17 12:04:40'),
(763, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-17 14:04:14'),
(764, 'Registration (FO-01210408110) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-17 14:04:21'),
(765, 'Registration (FO-01210408110) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-17 14:04:09'),
(766, 'Registration (FO-01210408110) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-17 14:04:36'),
(767, 'Registration (FO-01210408110) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-17 14:04:10'),
(768, 'Registration (FO-01210408110) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-17 14:04:11'),
(769, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-17 14:04:02'),
(770, 'Reservation (ON-01210408108) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-18 12:04:52'),
(771, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-18 14:04:08'),
(772, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-18 14:04:37'),
(773, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-18 14:04:37'),
(774, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-18 14:04:28'),
(775, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-18 14:04:28'),
(776, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-18 15:04:55'),
(777, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-18 15:04:46'),
(778, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-18 15:04:20'),
(779, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-18 15:04:20'),
(780, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-18 15:04:52'),
(781, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-18 15:04:53'),
(782, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-18 15:04:18'),
(783, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-18 15:04:49'),
(784, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-18 15:04:49'),
(785, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-18 15:04:19'),
(786, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-18 15:04:19'),
(787, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-18 16:04:16'),
(788, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-18 16:04:53'),
(789, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-18 16:04:34'),
(790, 'Registration (FO-02210418101) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-18 16:04:34'),
(791, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-18 16:04:27'),
(792, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-18 16:04:27'),
(793, 'Route (Section : Reports) was update by BPC', 'route_section_update', NULL, '0', 6, '2021-04-18 16:04:57'),
(794, 'Route (Section : Reports, Permission : guest_ledger) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-18 16:04:47'),
(795, 'Route (Section : Reports, Permission : Guest ledger) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-18 16:04:05'),
(796, 'Reservation (FO-01210408102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-19 09:04:33'),
(797, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-19 09:04:59'),
(798, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-19 09:04:10'),
(799, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-19 09:04:37'),
(800, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-19 09:04:32'),
(801, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-19 10:04:10'),
(802, 'Route (Section : Reports, Permission : foreign_guest_list) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-19 13:04:41'),
(803, 'Route (Section : Reports, Permission : Foreign guest list) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-19 13:04:03'),
(804, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-19 15:04:42'),
(805, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-19 15:04:42'),
(806, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-19 15:04:48'),
(807, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-19 15:04:48'),
(808, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-19 15:04:54'),
(809, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-19 15:04:54'),
(810, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-19 15:04:47'),
(811, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-19 15:04:47'),
(812, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-19 16:04:07'),
(813, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-19 16:04:07'),
(814, 'Route (Section : Reports, Permission : payment-type) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-20 11:04:56'),
(815, 'Route (Section : Reports, Permission : Payment-type) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-20 11:04:23'),
(816, 'Reservation (FO-01210408102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-20 11:04:17'),
(817, 'Reservation (FO-01210408102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-20 11:04:56'),
(818, 'Reservation (FO-01210408102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-20 11:04:10'),
(819, 'Reservation (FO-01210408102) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-20 11:04:52'),
(820, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-20 11:04:05'),
(821, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-20 11:04:05'),
(822, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-20 11:04:53'),
(823, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-20 11:04:32'),
(824, 'Registration (FO-01210408106) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-20 11:04:32'),
(825, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-20 11:04:06'),
(826, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-20 11:04:06'),
(827, 'Reservation (FO-01210408114) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-20 13:04:43'),
(828, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-20 13:04:07'),
(829, 'Route (Section : Reports) was update by BPC', 'route_section_update', NULL, '0', 6, '2021-04-21 12:04:46'),
(830, 'Route (Section : Reports, Permission : country_wise_guest_list) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-21 12:04:36'),
(831, 'Route (Section : Reports, Permission : Accumulated occupancy) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-21 12:04:58'),
(832, 'Route (Section : Reports, Permission : Country wise guest list) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-21 12:04:00'),
(833, 'Room Type (Deluxe Twin) was update by BPC', 'room_type_update', NULL, '0', 6, '2021-04-24 12:04:26'),
(834, 'Reservation (FO-01210408114) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-04-24 14:04:41'),
(835, 'Registration (FO-01210408114) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-24 14:04:06'),
(836, 'Registration (FO-01210408114) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-24 14:04:04'),
(837, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-24 15:04:16'),
(838, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-04-25 14:04:56'),
(839, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-25 14:04:56'),
(840, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-26 09:04:44'),
(841, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-26 09:04:00'),
(842, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-26 09:04:17'),
(843, 'Registration (FO-01210408116) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-26 10:04:09'),
(844, 'Delete Guest Service -Other Bill (Name -Md. Rasel)', 'Service Delete', NULL, '0', 6, '2021-04-26 10:04:48'),
(845, 'Delete Guest Service -Restaurant Bill (Name -Md. Rasel)', 'Service Delete', NULL, '0', 6, '2021-04-26 10:04:52'),
(846, 'Delete Guest Service -Room Servie (Name -Md. Rasel)', 'Service Delete', NULL, '0', 6, '2021-04-26 10:04:57'),
(847, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-26 10:04:28'),
(848, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-26 10:04:40'),
(849, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-26 10:04:57'),
(850, 'Registration (FO-01210408116) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-26 10:04:39'),
(851, 'Registration (FO-01210408116) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-26 10:04:11'),
(852, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-26 11:04:49'),
(853, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-26 12:04:44'),
(854, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-26 12:04:44'),
(855, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-27 11:04:17'),
(856, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-27 11:04:31'),
(857, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-27 11:04:04'),
(858, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-27 11:04:14'),
(859, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-27 11:04:29'),
(860, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-27 11:04:23'),
(861, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-04-27 12:04:58'),
(862, 'Registration (FO-01210408117) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-27 12:04:07'),
(863, 'Registration (FO-01210408117) was update by BPC', 'registration_update', NULL, '0', 6, '2021-04-27 12:04:26'),
(864, 'Transaction (Rubel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-04-27 14:04:43'),
(865, 'Guest (Rubel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-04-27 14:04:43'),
(866, 'Route (Section : Reports, Permission : collection) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-28 10:04:16'),
(867, 'Route (Section : Reports, Permission : monthly_collection) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-04-28 10:04:32');
INSERT INTO `tbl_logs` (`log_id`, `log_title`, `log_type`, `log_tr_id`, `log_amount`, `log_creator`, `log_date`) VALUES
(868, 'Route (Section : Reports, Permission : Collection) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-28 10:04:43'),
(869, 'Route (Section : Reports, Permission : Monthly collection) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-04-28 10:04:44'),
(870, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-04-28 14:04:49'),
(871, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-04-28 15:04:23'),
(872, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-29 11:04:17'),
(873, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-29 11:04:22'),
(874, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-04-29 11:04:27'),
(875, 'Reservation (FO-01210408118) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-04-29 12:04:56'),
(876, 'Service (Accommodation) was create by BPC', 'service_create', NULL, '0', 6, '2021-04-29 13:04:46'),
(877, 'Service (Laundry) was update by BPC', 'service_update', NULL, '0', 6, '2021-04-29 13:04:41'),
(878, 'Registration (FO-01210408118) was create by BPC', 'registration_create', NULL, '0', 6, '2021-04-29 13:04:00'),
(879, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-29 13:04:55'),
(880, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-29 13:04:02'),
(881, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-29 13:04:14'),
(882, 'Service (Mini Fridge) was create by BPC', 'service_create', NULL, '0', 6, '2021-04-29 14:04:18'),
(883, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-04-29 14:04:40'),
(884, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-04-29 14:04:14'),
(885, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-04-29 16:04:08'),
(886, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-02 10:05:02'),
(887, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-02 10:05:38'),
(888, 'Hotel (Daily sales report was deleted by BPC', 'sales_statement_report_delete', NULL, '0', 6, '2021-05-02 10:05:26'),
(889, 'Hotel (Daily sales report was deleted by BPC', 'sales_statement_report_delete', NULL, '0', 6, '2021-05-02 10:05:36'),
(890, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-02 11:05:45'),
(891, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-05-03 13:05:45'),
(892, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-03 13:05:57'),
(893, 'Guest Service (Md. Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-03 13:05:03'),
(894, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-05-03 13:05:34'),
(895, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-03 13:05:43'),
(896, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-03 13:05:01'),
(897, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-03 13:05:13'),
(898, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-03 13:05:26'),
(899, 'Hotel (Daily sales report was updated by BPC', 'sales_statement_report_update', NULL, '0', 6, '2021-05-03 14:05:10'),
(900, 'Hotel (Daily sales report was deleted by BPC', 'sales_statement_report_delete', NULL, '0', 6, '2021-05-03 14:05:39'),
(901, 'Hall Type (Hall One) was create by BPC', 'room_type_create', NULL, '0', 6, '2021-05-04 12:05:10'),
(902, 'Hall type (Hall One) was delete by BPC', 'hall_type_delete', NULL, '0', 6, '2021-05-04 12:05:52'),
(903, 'Hall Type (Hall One) was create by BPC', 'hall_type_create', NULL, '0', 6, '2021-05-04 12:05:19'),
(904, 'Room Type (Bridal) was update by BPC', 'room_type_update', NULL, '0', 6, '2021-05-04 13:05:57'),
(905, 'Hall Type Price (Hall One) was create by BPC', 'hall_type_price_create', NULL, '0', 6, '2021-05-04 14:05:10'),
(906, 'Hall Type Price (Hall One) was update by BPC', 'hall_type_price_update', NULL, '0', 6, '2021-05-04 14:05:53'),
(907, 'Hall type Price (Hall One) was delete by BPC', 'hall_type_price_delete', NULL, '0', 6, '2021-05-04 14:05:08'),
(908, 'Hall Type Price (Hall One) was create by BPC', 'hall_type_price_create', NULL, '0', 6, '2021-05-04 14:05:31'),
(909, 'Hall Room (424) was update by BPC', 'hall_room_update', NULL, '0', 6, '2021-05-04 15:05:09'),
(910, 'Hall Room (424) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-05-04 15:05:18'),
(911, 'Hall Room (424) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-05-04 15:05:28'),
(912, 'Hall Room (424) was delete by BPC', 'hall_room_delete', NULL, '0', 6, '2021-05-04 15:05:31'),
(913, 'Hall Room (424) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-05-04 15:05:41'),
(914, 'Hall Reservation (FO-01210408124) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-08 14:05:05'),
(915, 'Hall Reservation (FO-01210408125) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-08 14:05:03'),
(916, 'Hall Reservation (FO-01210408126) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-09 13:05:03'),
(917, 'Hall Reservation (FO-01210408127) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-09 13:05:12'),
(918, 'Hall Reservation (FO-01210408128) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-09 14:05:53'),
(919, 'Hall Reservation (FO-01210408129) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-09 14:05:46'),
(920, 'Hall Reservation (FO-01210408102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-09 14:05:42'),
(921, 'Hall Reservation (FO-01210408102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-09 14:05:01'),
(922, 'Hall Reservation (FO-01210408102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-09 14:05:34'),
(923, 'Hall Reservation (FO-01210408102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-09 14:05:47'),
(924, 'Hall Reservation (FO-01210408102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-09 14:05:03'),
(925, 'Hall Reservation (FO-01210408102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-09 14:05:16'),
(926, 'Hall Reservation (FO-01210408102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-09 14:05:32'),
(927, 'Hall Reservation (FO-01210509102) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-09 14:05:43'),
(928, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 13:05:05'),
(929, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:20'),
(930, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:00'),
(931, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:26'),
(932, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:38'),
(933, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:50'),
(934, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:58'),
(935, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:10'),
(936, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 14:05:42'),
(937, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 15:05:31'),
(938, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 15:05:44'),
(939, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 15:05:58'),
(940, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-11 16:05:38'),
(941, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 16:05:38'),
(942, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-11 16:05:55'),
(943, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 16:05:55'),
(944, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-11 16:05:11'),
(945, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 16:05:11'),
(946, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-11 16:05:27'),
(947, 'Hall Reservation (FO-01210509102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-11 16:05:27'),
(948, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-22 12:05:33'),
(949, 'Hall Reservation (FO-01210509103) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-22 12:05:33'),
(950, 'Hall Reservation (FO-01210509103) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-22 14:05:23'),
(951, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-22 18:05:17'),
(952, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-05-22 18:05:52'),
(953, 'Registration (FO-01210408119) was update by BPC', 'registration_update', NULL, '0', 6, '2021-05-22 18:05:52'),
(954, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-22 19:05:10'),
(955, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-22 19:05:07'),
(956, 'Transaction (Md. Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-22 19:05:51'),
(957, 'Guest (Md. Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-22 19:05:51'),
(958, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-05-23 12:05:27'),
(959, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-05-23 12:05:27'),
(960, 'Transaction (Md.  Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-23 12:05:57'),
(961, 'Guest (Md.  Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-23 12:05:57'),
(962, 'Reservation (FO-01210523102) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-05-23 13:05:12'),
(963, 'Room Type Price (Deluxe Twin) was update by BPC', 'room_type_price_update', NULL, '0', 6, '2021-05-23 14:05:42'),
(964, 'Room Type (Bridal) was update by BPC', 'room_type_update', NULL, '0', 6, '2021-05-23 14:05:57'),
(965, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-05-23 15:05:06'),
(966, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-05-23 16:05:27'),
(967, 'Registration (FO-01210523103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-05-23 16:05:27'),
(968, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-05-23 16:05:13'),
(969, 'Registration (FO-01210523103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-05-23 16:05:13'),
(970, 'Hall Type (Hall One) was create by BPC', 'hall_type_create', NULL, '0', 6, '2021-05-23 16:05:21'),
(971, 'Hall Room (424) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-05-23 16:05:36'),
(972, 'Hall Reservation (FO-01210523101) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-23 16:05:25'),
(973, 'Hall Reservation (FO-01210523101) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-23 16:05:49'),
(974, 'Guest Service (Md.  Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-23 18:05:47'),
(975, 'Guest Service (Md.  Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-23 18:05:31'),
(976, 'Guest Service (Md.  Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-23 18:05:11'),
(977, 'Transaction (Md.  Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-23 18:05:26'),
(978, 'Guest (Md.  Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-23 18:05:26'),
(979, 'Hall Reservation (FO-01210523102) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-23 18:05:10'),
(980, 'Hall Reservation (FO-01210523102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-23 19:05:31'),
(981, 'Guest Service (Md.  Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-23 19:05:10'),
(982, 'Transaction (Md.  Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-23 19:05:25'),
(983, 'Guest Service (Md.  Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-23 19:05:25'),
(984, 'Transaction (Md.  Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-23 19:05:03'),
(985, 'Guest (Md.  Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-23 19:05:03'),
(986, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-05-24 12:05:29'),
(987, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-05-24 12:05:36'),
(988, 'Hall Reservation (FO-01210523103) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-24 12:05:09'),
(989, 'Reservation (FO-01210523103) was delete by BPC', 'reservation_delete', NULL, '0', 6, '2021-05-24 12:05:35'),
(990, 'Hall Reservation (FO-01210523106) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-24 12:05:44'),
(991, 'Hall Reservation (FO-01210523106) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-24 13:05:10'),
(992, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-05-24 13:05:07'),
(993, 'Hall Reservation (FO-01210524101) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-24 13:05:32'),
(994, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-24 13:05:47'),
(995, 'Hall Reservation (FO-01210524101) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-24 13:05:47'),
(996, 'Hall Reservation (FO-01210524101) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-24 13:05:12'),
(997, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-24 13:05:44'),
(998, 'Hall Reservation (FO-01210524101) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-24 13:05:44'),
(999, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-24 13:05:20'),
(1000, 'Hall Reservation (FO-01210524101) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-24 13:05:20'),
(1001, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-05-24 13:05:28'),
(1002, 'Hall Reservation (FO-01210524101) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-24 13:05:06'),
(1003, 'Hall Reservation (FO-01210524101) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-24 13:05:23'),
(1004, 'Guest Service (Md.  Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-24 13:05:33'),
(1005, 'Delete Guest Service -Room Servie (Name -Md.  Rasel)', 'Service Delete', NULL, '0', 6, '2021-05-24 13:05:02'),
(1006, 'Guest (Md.  Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-24 13:05:12'),
(1007, 'Hall Room (123) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-05-24 15:05:07'),
(1008, 'Hall Room (12345) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-05-24 15:05:19'),
(1009, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-05-24 15:05:21'),
(1010, 'Hall Reservation (FO-01210524102) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-24 15:05:45'),
(1011, 'Hall Registration () was Transaction by BPC', 'hall_registration_transaction', NULL, '0', 6, '2021-05-24 16:05:02'),
(1012, 'Hall Reservation (FO-01210524102) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-24 16:05:02'),
(1013, 'Transaction (Md.  Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-24 16:05:53'),
(1014, 'Guest (Md.  Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-24 16:05:53'),
(1015, 'Hall Reservation (FO-01210524103) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-24 16:05:43'),
(1016, 'Hall Reservation (FO-01210524103) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-25 16:05:09'),
(1017, 'Delete Guest Service -Room Servie (Name -Md.  Rasel)', 'Service Delete', NULL, '0', 6, '2021-05-25 16:05:27'),
(1018, 'Delete Guest Service -Room Servie (Name -Md.  Rasel)', 'Service Delete', NULL, '0', 6, '2021-05-25 16:05:34'),
(1019, 'Hall Reservation (FO-01210524104) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-25 16:05:37'),
(1020, 'Reservation (FO-01210523104) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-05-25 16:05:14'),
(1021, 'Registration (FO-01210523104) was create by BPC', 'registration_create', NULL, '0', 6, '2021-05-25 19:05:12'),
(1022, 'Hall Reservation (FO-01210524104) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-26 13:05:38'),
(1023, 'Hall Reservation (HL-01210524105) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-26 13:05:24'),
(1024, 'Reservation (FO-01210524104) was Cancel by BPC', 'reservation_cancel', NULL, '0', 6, '2021-05-26 15:05:31'),
(1025, 'Hall Reservation (HL-01210524106) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-26 15:05:35'),
(1026, 'Hall Reservation (HL-01210524107) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-26 15:05:06'),
(1027, 'Guest Service (Md.  Rasel) was create by BPC', 'guest_service', NULL, '0', 6, '2021-05-26 16:05:11'),
(1028, 'Delete Guest Service -Extra Hours (Name -Md.  Rasel)', 'Service Delete', NULL, '0', 6, '2021-05-26 16:05:19'),
(1029, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-05-26 16:05:00'),
(1030, 'Reservation (FO-01210526101) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-05-26 16:05:06'),
(1031, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-05-26 16:05:00'),
(1032, 'Hall Reservation (HL-01210526101) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-26 16:05:30'),
(1033, 'Hall Reservation (HL-01210526102) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-26 16:05:30'),
(1034, 'Reservation (FO-01210526101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-05-26 17:05:07'),
(1035, 'Registration (FO-01210526102) was update by BPC', 'registration_update', NULL, '0', 6, '2021-05-26 18:05:10'),
(1036, 'Reservation (FO-01210526101) was update by BPC', 'reservation_update', NULL, '0', 6, '2021-05-26 18:05:53'),
(1037, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-05-26 18:05:42'),
(1038, 'Registration (FO-01210526102) was update by BPC', 'registration_update', NULL, '0', 6, '2021-05-26 18:05:42'),
(1039, 'Transaction (Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-26 18:05:31'),
(1040, 'Guest (Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-26 18:05:31'),
(1041, 'Transaction (Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-05-26 19:05:25'),
(1042, 'Guest (Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-05-26 19:05:25'),
(1043, 'Hall Type (Hall One) was update by BPC', 'hall_type_update', NULL, '0', 6, '2021-05-27 14:05:03'),
(1044, 'Reservation (FO-01210526101) was Cancel by BPC', 'reservation_cancel', NULL, '0', 6, '2021-05-29 16:05:33'),
(1045, 'Route (Section : Reservations, Permission : canceledreservation) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-05-29 17:05:20'),
(1046, 'Route (Section : Reservations, Permission : Canceledreservation) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-05-29 17:05:51'),
(1047, 'Route (Section : Reservations, Permission : canceledreservationlist) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-05-29 17:05:07'),
(1048, 'Route (Section : Reservations, Permission : Canceledreservationlist) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-05-29 17:05:23'),
(1049, 'Route (Section : Reservations, Permission : canceledreservation) was delete by BPC', 'route_permission_delete', NULL, '0', 6, '2021-05-29 18:05:02'),
(1050, 'Route (Section : Reservations) was update by BPC', 'route_section_update', NULL, '0', 6, '2021-05-29 18:05:04'),
(1051, 'Reservation (FO-01210526103) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-05-29 18:05:09'),
(1052, 'Registration (FO-01210526103) was create by BPC', 'registration_create', NULL, '0', 6, '2021-05-30 11:05:37'),
(1053, 'Hall Reservation (HL-01210526101) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-05-30 11:05:51'),
(1054, 'Reservation (FO-01210526104) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-05-30 13:05:06'),
(1055, 'Reservation (FO-01210526104) was Cancel by BPC', 'reservation_cancel', NULL, '0', 6, '2021-05-30 13:05:13'),
(1056, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-05-30 13:05:33'),
(1057, 'House Keeping () was create by BPC', 'house_keeping_create', NULL, '0', 6, '2021-05-30 13:05:40'),
(1058, 'Reservation (FO-01210526105) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-05-30 13:05:20'),
(1059, 'Reservation (FO-01210526105) was Cancel by BPC', 'reservation_cancel', NULL, '0', 6, '2021-05-30 13:05:34'),
(1060, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-06-01 07:06:17'),
(1061, 'Registration (FO-01210526103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-05-30 16:05:44'),
(1062, 'Reservation (FO-01210526107) was create by BPC', 'reservation_create', NULL, '0', 6, '2021-05-30 18:05:33'),
(1063, 'Hall Reservation (HL-01210526103) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-05-30 19:05:03'),
(1064, 'Room Type (Deluxe Twin) was update by BPC', 'room_type_update', NULL, '0', 6, '2021-05-30 20:05:35'),
(1065, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-05-31 22:05:00'),
(1066, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-05-31 22:05:00'),
(1067, 'Guest Registration () was Transaction by BPC', 'guest_registration_transaction', NULL, '0', 6, '2021-05-31 22:05:53'),
(1068, 'Registration (FO-01210526103) was update by BPC', 'registration_update', NULL, '0', 6, '2021-05-31 22:05:53'),
(1069, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-06-01 12:06:04'),
(1070, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-06-01 12:06:15'),
(1071, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-06-01 13:06:09'),
(1072, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-06-01 13:06:25'),
(1073, 'Hotel (Daily sales report was created by BPC', 'sales_statement_report_create', NULL, '0', 6, '2021-06-01 13:06:42'),
(1074, 'Hall Type (Hall One) was create by BPC', 'hall_type_create', NULL, '0', 6, '2021-06-01 15:06:03'),
(1075, 'Hall Room (424) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-06-01 15:06:17'),
(1076, 'Hall Room (123) was create by BPC', 'hall_room_create', NULL, '0', 6, '2021-06-01 15:06:26'),
(1077, 'Registration () was Create by BPC', 'registration_create', NULL, '0', 6, '2021-06-06 12:06:01'),
(1078, 'Service (Extra Hours) was update by BPC', 'service_update', NULL, '0', 6, '2021-06-06 12:06:37'),
(1079, 'Hall Reservation (Hl-01210607118) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-06-08 18:06:47'),
(1080, 'Hall Reservation (Hl-01210607118) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-06-09 12:06:29'),
(1081, 'Transaction (Rasel) was create by BPC', 'transaction_create', NULL, '0', 6, '2021-06-09 12:06:38'),
(1082, 'Guest (Rasel) was Checkout by BPC', 'guest_checkout', NULL, '0', 6, '2021-06-09 12:06:38'),
(1083, 'Hall Reservation (HL-01210607119) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-06-09 12:06:31'),
(1084, 'Hall Reservation (HL-01210607119) was update by BPC', 'hall_reservation_update', NULL, '0', 6, '2021-06-09 12:06:51'),
(1085, 'Hall Reservation (HL-01210607120) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-06-09 12:06:22'),
(1086, 'Hotel Facility (Service 24/7) was updated by BPC', 'hotel_facility_updated', NULL, '0', 6, '2021-06-09 16:06:54'),
(1087, 'Hotel Facility (Test) was created by BPC', 'hotel_facility_created', NULL, '0', 6, '2021-06-09 16:06:04'),
(1088, 'Hotel Facility (Test) was delete by BPC', 'hotel_facility_delete', NULL, '0', 6, '2021-06-09 16:06:16'),
(1089, 'Hotel Facility (Test) was created by BPC', 'hotel_facility_created', NULL, '0', 6, '2021-06-09 16:06:58'),
(1090, 'Hotel Facility (Test) was updated by BPC', 'hotel_facility_updated', NULL, '0', 6, '2021-06-09 16:06:15'),
(1091, 'Hotel Facility (Test) was delete by BPC', 'hotel_facility_delete', NULL, '0', 6, '2021-06-09 16:06:26'),
(1092, 'Hall Reservation (HL-01210607121) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-06-09 17:06:17'),
(1093, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-06-12 15:06:48'),
(1094, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-06-12 15:06:47'),
(1095, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-06-12 15:06:57'),
(1096, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-06-12 15:06:24'),
(1097, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-06-12 15:06:43'),
(1098, 'Hotel (Hotel Abakash) was update by BPC', 'hotel_update', NULL, '0', 6, '2021-06-12 15:06:52'),
(1099, 'Hall Reservation (HL-01210607123) was create by BPC', 'hall_reservation_create', NULL, '0', 6, '2021-06-14 12:06:01'),
(1100, 'Reservation (Hl-01210607125) was delete by BPC', 'reservation_delete', NULL, '0', 6, '2021-06-14 14:06:13'),
(1101, 'Hrms (Employee Id - 335, loan- 8) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-19 19:06:06'),
(1102, 'Hrms (Employee Id - 335, loan- 8) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-19 19:06:04'),
(1103, 'Hrms (Employee Id - 335, loan- 8) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-19 19:06:20'),
(1104, 'Hrms (Employee Id - 332, loan- 8) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-19 19:06:22'),
(1105, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-19 19:06:23'),
(1106, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-19 19:06:23'),
(1107, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-19 19:06:23'),
(1108, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-19 19:06:23'),
(1109, 'Hrms (Employee Id - 34171, promotion- Performance based updated) was updated by BPC', 'promotion_update', NULL, '0', 6, '2021-06-20 12:06:07'),
(1110, 'Route (Section : Employee, Permission : Hrm) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 13:06:20'),
(1111, 'Route (Section : Employee, Permission : store) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-20 13:06:05'),
(1112, 'Route (Section : Employee, Permission : Store) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 13:06:17'),
(1113, 'Route (Section : Employee, Permission : create) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-20 13:06:05'),
(1114, 'Route (Section : Employee, Permission : Create) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 13:06:54'),
(1115, 'Route (Section : Employee, Permission : delete) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-20 13:06:47'),
(1116, 'Route (Section : Employee, Permission : Delete) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 13:06:54'),
(1117, 'Route (Section : Employee, Permission : edit) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-20 15:06:20'),
(1118, 'Route (Section : Employee, Permission : update) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-20 15:06:04'),
(1119, 'Route (Section : Employee, Permission : show) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-20 15:06:22'),
(1120, 'Route (Section : Employee, Permission : Edit) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 15:06:37'),
(1121, 'Route (Section : Employee, Permission : Update) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 15:06:38'),
(1122, 'Route (Section : Employee, Permission : Show) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 15:06:39'),
(1123, 'Route (Section : Configuration, Permission : Designation) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 16:06:26'),
(1124, 'Route (Section : Report, Permission : Report page) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 16:06:54'),
(1125, 'Route (Section : Payroll, Permission : Baisc salary) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 17:06:02'),
(1126, 'Hrms (Employee Id - 8988, name- test new 5546787) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-20 17:06:02'),
(1127, 'Route (Section : Payroll, Permission : salary_increment) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-20 18:06:28'),
(1128, 'Route (Section : Payroll, Permission : Salary increment) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 18:06:40'),
(1129, 'Hrms (Employee Id - 2, increment- 2021-05-04) was updated by BPC', 'increment_update', NULL, '0', 6, '2021-06-20 18:06:38'),
(1130, 'Hrms (Employee Id - 2) employee basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-20 18:06:39'),
(1131, 'Route (Section : Promotion, Permission : Promotion) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 18:06:12'),
(1132, 'Route (Section : Posting, Permission : Posting) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 18:06:48'),
(1133, 'Route (Section : Disciplinary Action, Permission : Disciplinary-action) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 18:06:29'),
(1134, 'Route (Section : Award, Permission : Award) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 18:06:12'),
(1135, 'Route (Section : Salary Rules, Permission : Salary rules) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 19:06:49'),
(1136, 'Route (Section : Salary Structure, Permission : Salary-structure) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 19:06:08'),
(1137, 'Route (Section : Salary Structure, Permission : salary-structure) was update by BPC', 'route_permission_update', NULL, '0', 6, '2021-06-20 19:06:40'),
(1138, 'Route (Section : Salary Structure, Permission : Salary-structure) was remove by BPC', 'route_permission_remove', NULL, '0', 6, '2021-06-20 19:06:51'),
(1139, 'Route (Section : Salary Structure, Permission : Salary-structure) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-20 19:06:51'),
(1140, 'Route (Section : Training, Permission : Training) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-21 13:06:42'),
(1141, 'Route (Section : Salary Manage, Permission : Salary-manage) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-21 15:06:59'),
(1142, 'Route (Section : Banks, Permission : Bank) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-21 15:06:11'),
(1143, 'Route (Section : Basic Salary, Permission : Baisc-salary) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-21 15:06:57'),
(1144, 'Route (Section : Salary Increment, Permission : Salary-increment) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-21 16:06:58'),
(1145, 'Route (Section : Loan Manage, Permission : Loan-manage) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-21 16:06:50'),
(1146, 'Route (Section : Loan, Permission : Loan) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-21 16:06:19'),
(1147, 'Route (Section : Posting, Permission : posting) was update by BPC', 'route_permission_update', NULL, '0', 6, '2021-06-21 16:06:33'),
(1148, 'Hrms (Employee Id - 332) salary was deleted by BPC', 'salary_delete', NULL, '0', 6, '2021-06-22 13:06:06'),
(1149, 'Hrms (Employee Id - 332, loan- 8) was deleted by BPC', 'loan_delete', NULL, '0', 6, '2021-06-22 13:06:17'),
(1150, 'Hrms (Employee Id - 121121, name- Rokeya Khatun) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-22 13:06:09'),
(1151, 'Hrms (Employee Id - 121121, name- Rokeya Khatun) was updated by BPC', 'employee_update', NULL, '0', 6, '2021-06-22 13:06:42'),
(1152, 'Hrms (Employee Id - 121121, name- Rokeya Khatun) was updated by BPC', 'employee_update', NULL, '0', 6, '2021-06-22 13:06:37'),
(1153, 'Hrms (Tax Test) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-22 15:06:11'),
(1154, 'Hrms (Tax Test) was updated by BPC', 'salary_rule_update', NULL, '0', 6, '2021-06-22 15:06:42'),
(1155, 'Hrms (yrtytr) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-22 15:06:50'),
(1156, 'Hrms (Employee Id - 121121, posting- 10) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 15:06:45'),
(1157, 'Hrms (GI) was updated by BPC', 'salary_rule_update', NULL, '0', 6, '2021-06-22 16:06:07'),
(1158, 'Hrms (GI) was updated by BPC', 'salary_rule_update', NULL, '0', 6, '2021-06-22 16:06:31'),
(1159, 'Hrms (Employee Id - 121121, training- Graphic Design) was created by BPC', 'training_create', NULL, '0', 6, '2021-06-22 16:06:40'),
(1160, 'Hrms (Employee Id - 332, loan- 10) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-22 16:06:41'),
(1161, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:41'),
(1162, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:41'),
(1163, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:41'),
(1164, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:41'),
(1165, 'Hrms (Employee Id- 332) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:02'),
(1166, 'Hrms (Employee Id- 332) loan manage was created by BPC', 'loan_manage_created', NULL, '0', 6, '2021-06-22 16:06:02'),
(1167, 'Hrms (Employee Id- 332) was created by BPC', 'salary_created', NULL, '0', 6, '2021-06-22 16:06:02'),
(1168, 'Hrms (Employee Id - 123123, posting- 8) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:44'),
(1169, 'Hrms (Employee Id - 2, posting- 10) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:28'),
(1170, 'Hrms (Employee Id - 8988) salary was deleted by BPC', 'salary_delete', NULL, '0', 6, '2021-06-22 16:06:29'),
(1171, 'Hrms (Employee Id - 8988, loan- 11) was deleted by BPC', 'loan_delete', NULL, '0', 6, '2021-06-22 16:06:33'),
(1172, 'Hrms (Employee Id - 8988, posting- 10) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:39'),
(1173, 'Hrms (Employee Id - 331, posting- 2) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:12'),
(1174, 'Hrms (Employee Id - 336, posting- 8) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:39'),
(1175, 'Hrms (Employee Id - 339, posting- 10) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:57'),
(1176, 'Hrms (Employee Id - 365, posting- 5) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:18'),
(1177, 'Hrms (Employee Id - 8988, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-22 16:06:20'),
(1178, 'Hrms (Employee Id- 8988) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:20'),
(1179, 'Hrms (Employee Id- 8988) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:20'),
(1180, 'Hrms (Employee Id- 8988) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:20'),
(1181, 'Hrms (Employee Id- 8988) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:20'),
(1182, 'Hrms (Employee Id - 34171, posting- Select Designation) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:52'),
(1183, 'Hrms (Employee Id- 8988) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 16:06:33'),
(1184, 'Hrms (Employee Id- 8988) loan manage was created by BPC', 'loan_manage_created', NULL, '0', 6, '2021-06-22 16:06:33'),
(1185, 'Hrms (Employee Id- 8988) was created by BPC', 'salary_created', NULL, '0', 6, '2021-06-22 16:06:33'),
(1186, 'Hrms (Employee Id - 34171, posting- 8) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 16:06:17'),
(1187, 'Hrms (Employee Id - 8988, posting- 5) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 17:06:35'),
(1188, 'Hrms (Employee Id - 8988, posting- 5) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 17:06:30'),
(1189, 'Hrms (Employee Id - 8988, posting- 5) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 17:06:19'),
(1190, 'Hrms (Employee Id - 123123, posting- 2) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 17:06:19'),
(1191, 'Hrms (Employee Id - 365, posting- 10) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 17:06:12'),
(1192, 'Hrms (Employee Id - 34171, posting- 2) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 17:06:58'),
(1193, 'Hrms (Employee Id - 4143, posting- 5) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 17:06:09'),
(1194, 'Hrms (Employee Id - 121121, award- ICT Award 2020) was created by BPC', 'award_create', NULL, '0', 6, '2021-06-22 17:06:28'),
(1195, 'Hrms (Employee Id - 121121, award- ICT Award 2020) was updated by BPC', 'award_update', NULL, '0', 6, '2021-06-22 17:06:20'),
(1196, 'Hrms (Employee Id - 121121, award- ICT Award 2020) was updated by BPC', 'award_update', NULL, '0', 6, '2021-06-22 17:06:03'),
(1197, 'Hrms (Employee Id - 121121, action- Break disciplinary) was created by BPC', 'action_create', NULL, '0', 6, '2021-06-22 17:06:47'),
(1198, 'Hrms (Employee Id - 76768877, name- yjkuhkjh) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-22 17:06:41'),
(1199, 'Hrms (Employee Id - 76768877, name- yjkuhkjh) was deleted by BPC', 'employee_delete', NULL, '0', 6, '2021-06-22 17:06:02'),
(1200, 'Hrms (Employee Id - 121121, promotion- Performance based) was created by BPC', 'promotion_create', NULL, '0', 6, '2021-06-22 17:06:02'),
(1201, 'Hrms (Employee Id - 121121, bank- Southeast) was created by BPC', 'bank_create', NULL, '0', 6, '2021-06-22 18:06:56'),
(1202, 'Hrms (Employee Id - 121121, bank - Southeast) was updated by BPC', 'bank_update', NULL, '0', 6, '2021-06-22 18:06:19'),
(1203, 'Hrms (Employee Id - 121121, promotion- Performance based) was deleted by BPC', 'promotion_delete', NULL, '0', 6, '2021-06-22 18:06:13'),
(1204, 'Hrms (Employee Id - 4143, promotion- Performance based) was updated by BPC', 'promotion_update', NULL, '0', 6, '2021-06-22 18:06:44'),
(1205, 'Hrms (Employee Id - 4143, promotion- Performance based) was updated by BPC', 'promotion_update', NULL, '0', 6, '2021-06-22 18:06:12'),
(1206, 'Hrms (Employee Id - 34171, promotion- Performance based updated) was updated by BPC', 'promotion_update', NULL, '0', 6, '2021-06-22 18:06:43'),
(1207, 'Hrms (Employee Id - 4143, promotion- Performance based) was updated by BPC', 'promotion_update', NULL, '0', 6, '2021-06-22 18:06:06'),
(1208, 'Hrms (Employee Id - 4143, promotion- Performance based) was updated by BPC', 'promotion_update', NULL, '0', 6, '2021-06-22 18:06:19'),
(1209, 'Hrms (Employee Id - 121121, name- Rokeya Khatun) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-22 18:06:14'),
(1210, 'Hrms (Employee Id - 334, award- Youth Leadership) was updated by BPC', 'award_update', NULL, '0', 6, '2021-06-22 18:06:43'),
(1211, 'Hrms (Employee Id - 121121, promotion- Performance based) was created by BPC', 'promotion_create', NULL, '0', 6, '2021-06-22 18:06:24'),
(1212, 'Hrms (Employee Id - 330, promotion- testb 2) was created by BPC', 'promotion_create', NULL, '0', 6, '2021-06-22 19:06:33'),
(1213, 'Hrms (Employee Id - 330, promotion- testb 2) was created by BPC', 'promotion_create', NULL, '0', 6, '2021-06-22 19:06:12'),
(1214, 'Hrms (Employee Id - 330) employee salary scale and basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-22 20:06:03'),
(1215, 'Hrms (Director) was created by BPC', 'designation_create', NULL, '0', 6, '2021-06-22 20:06:42'),
(1216, 'Hrms (Assistant Manager) was created by BPC', 'designation_create', NULL, '0', 6, '2021-06-22 20:06:55'),
(1217, 'Hrms (Conveyance Allowance) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-22 20:06:34'),
(1218, 'Hrms (City Tax) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-22 20:06:12'),
(1219, 'Route (Section : Unit, Permission : Unit) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-22 20:06:22'),
(1220, 'Route (Section : Department, Permission : Department) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-22 20:06:53'),
(1221, 'Route (Section : Festival, Permission : Festival) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-22 20:06:35'),
(1222, 'Hrms (C Unit) was created by BPC', 'unit_create', NULL, '0', 6, '2021-06-22 20:06:38'),
(1223, 'Hrms (A Unit) was created by BPC', 'unit_create', NULL, '0', 6, '2021-06-22 20:06:46'),
(1224, 'Hrms (B Unit) was created by BPC', 'unit_create', NULL, '0', 6, '2021-06-22 20:06:52'),
(1225, 'Hrms (IT) was created by BPC', 'department_create', NULL, '0', 6, '2021-06-22 20:06:05'),
(1226, 'Hrms (HR) was created by BPC', 'department_create', NULL, '0', 6, '2021-06-22 20:06:10'),
(1227, 'Route (Section : Salary Category, Permission : Salary category) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-22 20:06:17'),
(1228, 'Hrms (Accounts) was created by BPC', 'department_create', NULL, '0', 6, '2021-06-22 20:06:17'),
(1229, 'Hrms (Religion - 1, name- Eid-ul-Azha) was created by BPC', 'festival_create', NULL, '0', 6, '2021-06-22 20:06:39'),
(1230, 'Hrms (Chairman) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-22 20:06:48'),
(1231, 'Hrms (Officer(Bank)) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-22 20:06:53'),
(1232, 'Hrms (City Tax) was updated by BPC', 'salary_rule_update', NULL, '0', 6, '2021-06-22 20:06:13'),
(1233, 'Hrms (Employee Id - 478478, name- Md. Mizanur Rahman) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-22 20:06:27'),
(1234, 'Hrms (Employee Id - 478478, posting- 1) was created by BPC', 'posting_create', NULL, '0', 6, '2021-06-22 20:06:18'),
(1235, 'Hrms (Employee Id - 478478, training- Web Development) was created by BPC', 'training_create', NULL, '0', 6, '2021-06-22 20:06:09'),
(1236, 'Hrms (Employee Id - 320, name- Mohammad Badruzza Mishkat) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-22 20:06:30'),
(1237, 'Hrms (Employee Id - 478478, award- ICT Award 2020) was created by BPC', 'award_create', NULL, '0', 6, '2021-06-22 20:06:49'),
(1238, 'Hrms (Employee Id - 478478, bank- Southeast) was created by BPC', 'bank_create', NULL, '0', 6, '2021-06-22 20:06:38'),
(1239, 'Hrms (House Rent Allowance) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-22 20:06:59'),
(1240, 'Hrms (Employee Id - 478478, action- Break disciplinary) was created by BPC', 'action_create', NULL, '0', 6, '2021-06-22 20:06:23'),
(1241, 'Hrms (Employee Id - 478478, loan- 8) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-22 20:06:51'),
(1242, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 20:06:51'),
(1243, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 20:06:51'),
(1244, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 20:06:51'),
(1245, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 20:06:51'),
(1246, 'Hrms (Employee Id - 320, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-22 20:06:41'),
(1247, 'Hrms (Employee Id - 478478, name- Md. Mizanur Rahman) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-22 20:06:54'),
(1248, 'Hrms (Employee Id - 320, name- Mohammad Badruzza Mishkat) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-22 20:06:07'),
(1249, 'Hrms (Employee Id - 478478) salary structure was created by BPC', 'salary_structure_create', NULL, '0', 6, '2021-06-22 20:06:40'),
(1250, 'Hrms (Employee Id - 478478) salary structure was deleted by BPC', 'salary_structure_delete', NULL, '0', 6, '2021-06-22 20:06:35'),
(1251, 'Hrms (House Rent Allowance) was deleted by BPC', 'salary_rule_delete', NULL, '0', 6, '2021-06-22 20:06:51'),
(1252, 'Hrms (House Rent Allowance) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-22 20:06:05'),
(1253, 'Hrms (Employee Id - 478478) salary structure was created by BPC', 'salary_structure_create', NULL, '0', 6, '2021-06-22 20:06:41'),
(1254, 'Hrms (Employee Id - 320) salary structure was created by BPC', 'salary_structure_create', NULL, '0', 6, '2021-06-22 20:06:10'),
(1255, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 20:06:45'),
(1256, 'Hrms (Employee Id- 478478) loan manage was created by BPC', 'loan_manage_created', NULL, '0', 6, '2021-06-22 20:06:45'),
(1257, 'Hrms (Employee Id- 478478) was created by BPC', 'salary_created', NULL, '0', 6, '2021-06-22 20:06:45'),
(1258, 'Hrms (Employee Id- 320) was created by BPC', 'salary_created', NULL, '0', 6, '2021-06-22 20:06:45'),
(1259, 'Hrms (Employee Id - 320) salary was deleted by BPC', 'salary_delete', NULL, '0', 6, '2021-06-22 20:06:54'),
(1260, 'Hrms (Employee Id- 320) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 20:06:03'),
(1261, 'Hrms (Employee Id- 320) loan manage was created by BPC', 'loan_manage_created', NULL, '0', 6, '2021-06-22 20:06:03'),
(1262, 'Hrms (Employee Id- 320) was created by BPC', 'salary_created', NULL, '0', 6, '2021-06-22 20:06:03'),
(1263, 'Hrms (Employee Id - 320) salary was deleted by BPC', 'salary_delete', NULL, '0', 6, '2021-06-22 20:06:00'),
(1264, 'Hrms (Employee Id - 320, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-22 21:06:42'),
(1265, 'Hrms (Employee Id - 478478, loan- 8) was deleted by BPC', 'loan_delete', NULL, '0', 6, '2021-06-22 21:06:31'),
(1266, 'Hrms (Employee Id - 478478, loan- 8) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-22 21:06:50'),
(1267, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 21:06:50'),
(1268, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 21:06:50'),
(1269, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 21:06:50'),
(1270, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 21:06:50'),
(1271, 'Hrms (Employee Id - 320, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-22 21:06:39'),
(1272, 'Hrms (Employee Id- 478478) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 21:06:08'),
(1273, 'Hrms (Employee Id- 478478) loan manage was created by BPC', 'loan_manage_created', NULL, '0', 6, '2021-06-22 21:06:08'),
(1274, 'Hrms (Employee Id- 478478) was created by BPC', 'salary_created', NULL, '0', 6, '2021-06-22 21:06:08'),
(1275, 'Hrms (Employee Id- 320) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-22 21:06:08'),
(1276, 'Hrms (Employee Id- 320) loan manage was created by BPC', 'loan_manage_created', NULL, '0', 6, '2021-06-22 21:06:08'),
(1277, 'Hrms (Employee Id- 320) was created by BPC', 'salary_created', NULL, '0', 6, '2021-06-22 21:06:08'),
(1278, 'Hrms (Employee Id - 478478) employee salary scale and basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-23 13:06:02'),
(1279, 'Hrms (Employee Id - 478478, promotion- test) was created by BPC', 'promotion_create', NULL, '0', 6, '2021-06-23 13:06:02');
INSERT INTO `tbl_logs` (`log_id`, `log_title`, `log_type`, `log_tr_id`, `log_amount`, `log_creator`, `log_date`) VALUES
(1280, 'Hrms (Employee Id - 320) employee salary scale and basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-23 13:06:13'),
(1281, 'Hrms (Employee Id - 320, promotion- Senior Officer) was created by BPC', 'promotion_create', NULL, '0', 6, '2021-06-23 13:06:13'),
(1282, 'Hrms (Employee Id - 320, promotion- Senior Officer) was deleted by BPC', 'promotion_delete', NULL, '0', 6, '2021-06-23 13:06:16'),
(1283, 'Hrms (Employee Id - 320) employee salary scale and basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-23 13:06:43'),
(1284, 'Hrms (Employee Id - 320, promotion- testb 2) was created by BPC', 'promotion_create', NULL, '0', 6, '2021-06-23 13:06:43'),
(1285, 'Hrms (Employee Id - 478478) employee salary scale and basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-23 13:06:21'),
(1286, 'Hrms (Employee Id - 478478, promotion- test) was updated by BPC', 'promotion_update', NULL, '0', 6, '2021-06-23 13:06:21'),
(1287, 'Route (Section : Report, Permission : category_page) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 13:06:05'),
(1288, 'Route (Section : Report, Permission : Category page) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 13:06:19'),
(1289, 'Route (Section : Report, Permission : increment_page) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 13:06:29'),
(1290, 'Route (Section : Report, Permission : deduction_list) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 13:06:39'),
(1291, 'Route (Section : Report, Permission : category_wise_deduction) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 13:06:52'),
(1292, 'Route (Section : Report, Permission : employee_income_tax) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 13:06:02'),
(1293, 'Route (Section : Report, Permission : employee_allowance_details) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 13:06:20'),
(1294, 'Route (Section : Report, Permission : festival) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 13:06:29'),
(1295, 'Route (Section : Report, Permission : Increment page) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 13:06:35'),
(1296, 'Route (Section : Report, Permission : Deduction list) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 13:06:36'),
(1297, 'Route (Section : Report, Permission : Category wise deduction) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 13:06:38'),
(1298, 'Route (Section : Report, Permission : Employee income tax) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 13:06:39'),
(1299, 'Route (Section : Report, Permission : Employee allowance details) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 13:06:40'),
(1300, 'Route (Section : Report, Permission : Festival) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 13:06:42'),
(1301, 'Route (Section : Report, Permission : single_salary) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 14:06:23'),
(1302, 'Route (Section : Report, Permission : filter_date) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-23 14:06:31'),
(1303, 'Route (Section : Report, Permission : Single salary) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 14:06:44'),
(1304, 'Route (Section : Report, Permission : Filter date) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 14:06:45'),
(1305, 'Hrms (Vehicle Allowance) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-23 14:06:59'),
(1306, 'Hrms (Employee Id - 478478, name- Md. Mizanur Rahman) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-23 16:06:40'),
(1307, 'Hrms (Employee Id - 478478, increment- 2021-04-10) was created by BPC', 'increment_create', NULL, '0', 6, '2021-06-23 16:06:14'),
(1308, 'Hrms (Employee Id - 478478) employee basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-23 16:06:15'),
(1309, 'Hrms (Employee Id - 478478, increment- 2021-04-10) was updated by BPC', 'increment_update', NULL, '0', 6, '2021-06-23 16:06:30'),
(1310, 'Hrms (Employee Id - 478478) employee basic salary was updated by BPC', 'employee_basic_salary', NULL, '0', 6, '2021-06-23 16:06:31'),
(1311, 'Hrms (Stamp) was created by BPC', 'salary_rule_create', NULL, '0', 6, '2021-06-23 16:06:14'),
(1312, 'Route (Section : Festival Bonus, Permission : Festival bonus) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-23 17:06:13'),
(1313, 'Hrms Eid-ul-Azha bonus was created by BPC', 'festival_bonus_create', NULL, '0', 6, '2021-06-23 17:06:53'),
(1314, 'Hrms (Religion - 2, name- Durga Puja) was created by BPC', 'festival_create', NULL, '0', 6, '2021-06-23 17:06:04'),
(1315, 'Hrms (Religion - 4, name- Christmasday) was created by BPC', 'festival_create', NULL, '0', 6, '2021-06-23 17:06:23'),
(1316, 'Hrms (Religion - 1, name- Eid-ul-Fitre) was created by BPC', 'festival_create', NULL, '0', 6, '2021-06-23 17:06:01'),
(1317, 'Hrms Eid-ul-Fitre bonus was created by BPC', 'festival_bonus_create', NULL, '0', 6, '2021-06-23 17:06:16'),
(1318, 'Hrms (Employee Id - 334, name- Mijbahul Islam Milu) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-23 17:06:05'),
(1319, 'Hrms (Employee Id - 332, name- Sohel Barua Badhon) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-23 17:06:02'),
(1320, 'Hrms (Employee Id - 231, name- Lionel Andress Messi) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-23 17:06:09'),
(1321, 'Hrms (Employee Id - 334, name- Mijbahul Islam Milu) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-23 17:06:33'),
(1322, 'Hrms (Employee Id - 332, name- Sohel Barua Badhon) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-23 17:06:45'),
(1323, 'Hrms (Employee Id - 231, name- Lionel Andress Messi) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-23 17:06:56'),
(1324, 'Hrms Durga Puja bonus was created by BPC', 'festival_bonus_create', NULL, '0', 6, '2021-06-23 18:06:58'),
(1325, 'Hrms Christmasday bonus was created by BPC', 'festival_bonus_create', NULL, '0', 6, '2021-06-23 18:06:50'),
(1326, 'Route (Section : Publication, Permission : Publication) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-24 17:06:02'),
(1327, 'Route (Section : Report, Permission : prl) was create by BPC', 'route_permission_create', NULL, '0', 6, '2021-06-27 14:06:08'),
(1328, 'Route (Section : Report, Permission : Prl) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-27 14:06:18'),
(1329, 'Route (Section : Destroy, Permission : Info) was add by BPC', 'route_permission_add', NULL, '0', 6, '2021-06-27 15:06:00'),
(1330, 'Hrms (Officer(Bank)) was deleted by BPC', 'salary_category_delete', NULL, '0', 6, '2021-06-27 18:06:18'),
(1331, 'Hrms (Chairman) was deleted by BPC', 'salary_category_delete', NULL, '0', 6, '2021-06-27 18:06:23'),
(1332, 'Hrms (Chairman) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-27 18:06:40'),
(1333, 'Hrms (Dir(Planning)) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-27 18:06:13'),
(1334, 'Hrms (Officer(Bank)) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-27 18:06:25'),
(1335, 'Hrms (PRL Officer:Bank) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-27 18:06:41'),
(1336, 'Hrms (Staff(Bank)) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-27 18:06:52'),
(1337, 'Hrms (PRL(Bank) staff) was created by BPC', 'salary_category_created', NULL, '0', 6, '2021-06-27 18:06:03'),
(1338, 'Hrms (Employee Id - 4565, name- fght rtyrt) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-28 13:06:44'),
(1339, 'Hrms (Employee Id - 567, name- Mohammad Mezbahul Islam Milu) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-28 16:06:47'),
(1340, 'Hrms (Employee Id - 345353, name- fghfg fghf g) was created by BPC', 'employee_create', NULL, '0', 6, '2021-06-28 17:06:05'),
(1341, 'Hrms (Employee Id - 345353, name- fghfg fghf g) was updated by BPC', 'employee_update', NULL, '0', 6, '2021-06-28 18:06:28'),
(1342, 'Hrms (Employee Id - 345353, name- fghfg fghf g) was updated by BPC', 'employee_update', NULL, '0', 6, '2021-06-28 18:06:46'),
(1343, 'Hrms (Employee Id - 345353, name- fghfg fghf g) was updated by BPC', 'employee_update', NULL, '0', 6, '2021-06-28 18:06:34'),
(1344, 'Hrms (Employee Id - 4565, name- fght rtyrt) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-29 14:06:01'),
(1345, 'Hrms (Employee Id - 567, name- Mohammad Mezbahul Islam Milu) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-29 14:06:08'),
(1346, 'Hrms (Employee Id - 345353, name- fghfg fghf g) salary was updated by BPC', 'employee_salary_update', NULL, '0', 6, '2021-06-29 14:06:16'),
(1347, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 14:06:57'),
(1348, 'Hrms (Employee Id- 4565) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-29 14:06:57'),
(1349, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 14:06:10'),
(1350, 'Hrms (Employee Id- 4565) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-29 14:06:10'),
(1351, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:00'),
(1352, 'Hrms (Employee Id- 4565) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-29 15:06:00'),
(1353, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:14'),
(1354, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:01'),
(1355, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:35'),
(1356, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:51'),
(1357, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:22'),
(1358, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:44'),
(1359, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:01'),
(1360, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:12'),
(1361, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:34'),
(1362, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:43'),
(1363, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 15:06:47'),
(1364, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 16:06:56'),
(1365, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 16:06:11'),
(1366, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 16:06:35'),
(1367, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 16:06:03'),
(1368, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 16:06:08'),
(1369, 'Hrms (Employee Id - 4565, loan- 7) was created by BPC', 'loan_create', NULL, '0', 6, '2021-06-29 16:06:05'),
(1370, 'Hrms (Employee Id- 4565) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-29 16:06:05'),
(1371, 'Hrms (Employee Id- 4565) loan interest was created by BPC', 'loan_interest_created', NULL, '0', 6, '2021-06-29 16:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_sections`
--

CREATE TABLE `tbl_module_sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `section_module_name` varchar(255) DEFAULT NULL,
  `section_action_route` text DEFAULT NULL,
  `section_roles_permission` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_module_sections`
--

INSERT INTO `tbl_module_sections` (`section_id`, `section_name`, `section_module_name`, `section_action_route`, `section_roles_permission`, `created_at`, `updated_at`) VALUES
(5, 'Rooms', NULL, '{\"hotels.rooms.remove-picture\":[\"1\",\"2\",\"3\"],\"hotels.rooms.create\":[\"1\",\"2\"],\"hotels.rooms.store\":[\"1\",\"2\"],\"hotels.rooms\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.rooms.delete\":[\"1\",\"2\",\"3\"],\"hotels.rooms.picture\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.multipleroom.multiple_room_create\":[\"1\",\"2\"],\"hotels.multipleroom.multiple_room_store\":[\"1\",\"2\"],\"hotels.rooms.show\":[\"1\",\"2\"],\"hotels.rooms.edit\":[\"1\",\"2\"]}', '[\"1\",\"2\",\"3\",\"4\"]', '2021-03-07 12:21:38', '2021-03-07 12:21:38'),
(6, 'Auth', NULL, '{\"auth.register_user\":[\"1\"],\"auth.register_user_action\":[\"1\"],\"auth.users\":[\"1\"],\"auth.edit_user\":[\"1\"],\"auth.show_user\":[\"1\"],\"auth.profile\":[\"1\"],\"system.user_permission\":[\"1\",\"2\"],\"system.permission.route_edit\":[\"1\"],\"system.core.logs\":[\"1\"],\"system.core.logs_show\":[\"1\"],\"system.ajax.permission_remove\":[\"1\"],\"system.ajax.permission_check\":[\"1\"],\"base_setting\":[\"1\"],\"home\":[\"1\"]}', '[\"1\",\"2\"]', '2021-03-14 07:30:08', '2021-03-14 07:30:08'),
(7, 'System', NULL, '{\"system.permission\":[\"1\"],\"system.assign_permission\":[\"1\"],\"system.permission_register\":[\"1\"]}', '[\"1\"]', '2021-03-14 07:31:16', '2021-03-14 07:31:16'),
(8, 'Hotel', NULL, '{\"hotels.hotel.remove_picture\":[\"1\",\"2\",\"3\"],\"hotels.hotel.create\":[\"1\"],\"hotels.hotel.store\":[\"1\"],\"hotels.hotel.show\":[\"1\",\"2\",\"3\"],\"hotels.hotel.edit\":[\"1\",\"2\"],\"hotels.hotel\":[\"1\"],\"hotels.hotel.config\":[\"1\",\"2\",\"3\"],\"hotels.hotel.delete\":[\"1\"],\"hotels.hotel.picture\":[\"1\",\"2\",\"3\"],\"hotel.home.hotel_view\":[\"1\",\"2\"],\"hotel.home\":[\"1\",\"2\"],\"hotel.front\":[\"1\"]}', '[\"1\",\"2\",\"3\"]', '2021-03-21 11:19:07', '2021-03-21 11:19:07'),
(9, 'Room Types', NULL, '{\"hotels.roomtypes.create\":[\"1\",\"2\",\"3\"],\"hotels.roomtypes.store\":[\"1\",\"2\",\"3\"],\"hotels.roomtypes.edit\":[\"1\",\"2\",\"3\"],\"hotels.roomtypes\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.roomtypes.delete\":[\"1\",\"2\",\"3\"],\"hotels.room-types.picture\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.hotel.remove_picture\":[\"1\",\"2\",\"3\"],\"hotels.roomtypes.show\":[\"1\",\"2\",\"3\",\"4\"]}', '[\"1\",\"2\",\"3\",\"4\"]', '2021-03-21 11:42:57', '2021-03-21 11:42:57'),
(11, 'Reservations', NULL, '{\"hotels.reservations.create\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.reservations.store\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.reservations.show\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.reservations.edit\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.reservations\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.reservations.delete\":[\"1\",\"2\"],\"hotels.reservations.cancel_reservation\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.reservations.cancel_room\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.reservations.dashboard\":[\"1\",\"2\"],\"hotels.reservationslist\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.guests\":[\"1\",\"2\"],\"hotels.guests.guest_show\":[\"1\",\"2\"],\"hotels.canceledreservationlist\":[\"1\"]}', '[\"1\",\"2\",\"3\",\"4\"]', '2021-03-21 11:48:14', '2021-03-21 11:48:14'),
(13, 'Registrations', NULL, '{\"hotels.guestregistrations.store\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.guestregistrations.show\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.guestregistrations.edit\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.guestregistrations\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.guestregistrations.delete\":[\"1\",\"2\"],\"hotels.guestregistrations.create\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.guestregistrations.shifting\":[\"1\",\"2\"]}', '[\"1\",\"2\",\"3\",\"4\"]', '2021-03-21 11:54:01', '2021-03-21 11:54:01'),
(15, 'House Keeping', NULL, '{\"hotels.housekeeping.create\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"hotels.housekeeping.store\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"hotels.housekeeping.show\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"hotels.housekeeping.edit\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"hotels.housekeepinghistory\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"hotels.housekeeping\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"hotels.housekeeping.delete\":[\"1\"]}', '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '2021-03-21 11:57:58', '2021-03-21 11:57:58'),
(16, 'Room Prices', NULL, '{\"hotels.roomprices.create\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"hotels.roomprices.store\":[\"1\",\"2\",\"3\"],\"hotels.roomprices.show\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.roomprices.edit\":[\"1\",\"2\",\"3\"],\"hotels.roomprices\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.roomprices.delete\":[\"1\",\"2\",\"3\"]}', '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '2021-03-21 12:03:49', '2021-03-21 12:03:49'),
(17, 'Hotel Services', NULL, '{\"hotels.services.create\":[\"1\",\"2\",\"3\"],\"hotels.services.store\":[\"1\",\"2\",\"3\"],\"hotels.services.show\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.services\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.services.delete\":[\"1\",\"2\",\"3\"],\"hotels.services.edit\":[\"1\",\"2\",\"3\"]}', '[\"1\",\"2\",\"3\",\"4\"]', '2021-03-21 12:08:50', '2021-03-21 12:08:50'),
(19, 'Invoice', NULL, '{\"hotels.invoices.create\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.invoices.store\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.invoices.show\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.invoices.edit\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.invoices\":[\"1\",\"2\",\"3\",\"4\"],\"hotels.invoices.delete\":[\"1\",\"2\"],\"hotels.invoice.service_delete\":[\"1\"],\"hotels.invoice.print\":[\"1\",\"2\"],\"hotels.checkout\":[\"1\"],\"hotels.invoice.other_guest_bill\":[\"1\"],\"hotels.checkout.checkout_store\":[\"1\"]}', '[\"1\",\"2\",\"3\",\"4\"]', '2021-03-22 07:34:47', '2021-03-22 07:34:47'),
(20, 'Guest Types', NULL, '{\"hotels.guesttypes.create\":[\"1\",\"2\"],\"hotels.guesttypes.store\":[\"1\"],\"hotels.guesttypes.show\":[\"1\"],\"hotels.guesttypes.edit\":[\"1\"],\"hotels.guesttypes\":[\"1\"], \"hotels.guesttypes.delete\":[\"1\"]}', '[\"1\",\"2\"]', '2021-03-22 07:38:06', '2021-03-22 07:38:06'),
(22, 'Payment Types', NULL, '{\"hotels.paymenttypes.create\":[\"1\"],\"hotels.paymenttypes.store\":[\"1\"],\"hotels.paymenttypes.show\":[\"1\"],\"hotels.paymenttypes.edit\":[\"1\"],\"hotels.paymenttypes\":[\"1\"],\"hotels.paymenttypes.delete\":[\"1\"]}', '[\"1\",\"2\",\"3\",\"4\"]', '2021-03-22 07:40:16', '2021-03-22 07:40:16'),
(23, 'Reports', NULL, '{\"hotels.reports.room_status\":[\"1\",\"2\"],\"hotels.reports.room_mapping\":[\"1\",\"2\"],\"hotels.reports.hotel_rooms\":[\"1\",\"2\"],\"hotels.reports.occupancy\":[\"1\",\"2\"],\"hotels.reports.arrival_departure\":[\"1\",\"2\"],\"hotels.reports.guest_list\":[\"1\",\"2\"],\"hotels.reports.accumulated_occupancy\":[\"1\",\"2\"],\"hotels.reports.guest_ledger\":[\"1\"],\"hotels.reports.foreign_guest_list\":[\"1\"],\"hotels.reports.payment-type\":[\"1\"],\"hotels.reports.country_wise_guest_list\":[\"1\"],\"hotels.reports.collection\":[\"1\"],\"hotels.reports.monthly_collection\":[\"1\"]}', '[\"1\",\"2\"]', '2021-04-05 21:37:23', '2021-04-05 21:37:23'),
(24, 'Discount', NULL, '{\"hotels.guesttypediscount\":[\"1\"],\"hotels.paymentdiscount\":[\"1\",\"2\"],\"hotels.guesttypediscount.guest_type_discount_create\":[\"1\"],\"hotels.guesttypediscount.guest_type_discount_edit\":[\"1\"],\"hotels.guesttypediscount.guest_type_discount_show\":[\"1\"],\"hotels.guesttypediscount.guest_type_discount_store\":[\"1\"],\"hotels.guesttypediscount.guest_type_discount_delete\":[\"1\"]}', '[\"1\",\"2\"]', '2021-04-06 04:25:55', '2021-04-06 04:25:55'),
(28, 'Dashboard', NULL, '{\"hotels.frontdesk.Front_Des_dashboard\":[\"1\",\"2\"],\"hotels.reports.report_dashboard\":[\"1\",\"2\"]}', '[\"1\",\"2\"]', '2021-04-15 03:44:46', '2021-04-15 03:44:46'),
(30, 'Employee', NULL, '{\"hrms.employee.hrm\":[\"1\"],\"hrms.employee.store\":[\"1\"],\"hrms.employee.create\":[\"1\"],\"hrms.employee.delete\":[\"1\"],\"hrms.employee.edit\":[\"1\"],\"hrms.employee.update\":[\"1\"],\"hrms.employee.show\":[\"1\"]}', '[\"1\"]', '2021-06-20 07:40:02', '2021-06-20 07:40:02'),
(31, 'Configuration', NULL, '{\"hrms.designation\":[\"1\"]}', '[\"1\"]', '2021-06-20 10:17:09', '2021-06-20 10:17:09'),
(32, 'Report', NULL, '{\"hrms.hr.report_page\":[\"1\"],\"hrms.report.category_page\":[\"1\"],\"hrms.report.increment_page\":[\"1\"],\"hrms.report.deduction_list\":[\"1\"],\"hrms.report.category_wise_deduction\":[\"1\"],\"hrms.report.employee_income_tax\":[\"1\"],\"hrms.report.employee_allowance_details\":[\"1\"],\"hrms.report.festival\":[\"1\"],\"hrms.single_salary\":[\"1\"],\"hrms.filter_date\":[\"1\"],\"hrms.hr.report.prl\":[\"1\"]}', '[\"1\"]', '2021-06-20 10:18:39', '2021-06-20 10:18:39'),
(33, 'Payroll', NULL, '{\"hrms.baisc_salary\":[\"1\"],\"hrms.salary_increment\":[\"1\"]}', '[\"1\"]', '2021-06-20 11:35:47', '2021-06-20 11:35:47'),
(34, 'Promotion', NULL, '{\"hrms.promotion\":[\"1\"]}', '[\"1\"]', '2021-06-20 12:44:58', '2021-06-20 12:44:58'),
(35, 'Posting', NULL, '{\"hrms.posting\":[\"1\"]}', '[\"1\"]', '2021-06-20 12:49:35', '2021-06-20 12:49:35'),
(36, 'Disciplinary Action', NULL, '{\"hrms.disciplinary-action\":[\"1\"]}', '[\"1\"]', '2021-06-20 12:52:18', '2021-06-20 12:52:18'),
(37, 'Award', NULL, '{\"hrms.award\":[\"1\"]}', '[\"1\"]', '2021-06-20 12:56:04', '2021-06-20 12:56:04'),
(38, 'Salary Rules', NULL, '{\"hrms.salary_rules\":[\"1\"]}', '[\"1\"]', '2021-06-20 13:02:41', '2021-06-20 13:02:41'),
(39, 'Salary Structure', NULL, '{\"hrms.salary-structure\":[\"1\"]}', '[\"1\"]', '2021-06-20 13:06:00', '2021-06-20 13:06:00'),
(40, 'Training', NULL, '{\"hrms.training\":[\"1\"]}', '[\"1\"]', '2021-06-21 07:04:29', '2021-06-21 07:04:29'),
(41, 'Salary Manage', NULL, '{\"hrms.salary-manage\":[\"1\"]}', '[\"1\"]', '2021-06-21 09:29:49', '2021-06-21 09:29:49'),
(42, 'Banks', NULL, '{\"hrms.bank\":[\"1\"]}', '[\"1\"]', '2021-06-21 09:48:00', '2021-06-21 09:48:00'),
(43, 'Basic Salary', NULL, '{\"hrms.baisc-salary\":[\"1\"]}', '[\"1\"]', '2021-06-21 09:52:46', '2021-06-21 09:52:46'),
(44, 'Action', NULL, '{\"hrms.disciplinary-action\":[\"1\"]}', '[\"1\"]', '2021-06-21 09:56:51', '2021-06-21 09:56:51'),
(45, 'Salary Increment', NULL, '{\"hrms.salary-increment\":[\"1\"]}', '[\"1\"]', '2021-06-21 10:01:46', '2021-06-21 10:01:46'),
(46, 'Loan Manage', NULL, '{\"hrms.loan-manage\":[\"1\"]}', '[\"1\"]', '2021-06-21 10:04:39', '2021-06-21 10:04:39'),
(47, 'Loan', NULL, '{\"hrms.loan\":[\"1\"]}', '[\"1\"]', '2021-06-21 10:07:08', '2021-06-21 10:07:08'),
(48, 'Unit', NULL, '{\"hrms.unit\":[\"1\"]}', '[\"1\"]', '2021-06-22 14:20:07', '2021-06-22 14:20:07'),
(49, 'Department', NULL, '{\"hrms.department\":[\"1\"]}', '[\"1\"]', '2021-06-22 14:20:44', '2021-06-22 14:20:44'),
(50, 'Festival', NULL, '{\"hrms.festival\":[\"1\"]}', '[\"1\"]', '2021-06-22 14:21:17', '2021-06-22 14:21:17'),
(51, 'Salary Category', NULL, '{\"hrms.salary_category\":[\"1\"]}', '[\"1\"]', '2021-06-22 14:22:09', '2021-06-22 14:22:09'),
(52, 'Festival Bonus', NULL, '{\"hrms.festival_bonus\":[\"1\"]}', '[\"1\"]', '2021-06-23 11:04:02', '2021-06-23 11:04:02'),
(53, 'Publication', NULL, '{\"hrms.publication\":[\"1\"]}', '[\"1\"]', '2021-06-24 11:40:50', '2021-06-24 11:40:50'),
(54, 'Destroy', NULL, '{\"hr.info\":[\"1\"]}', '[\"1\"]', '2021-06-27 09:32:48', '2021-06-27 09:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_status`
--

CREATE TABLE `tbl_order_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_status` tinyint(1) NOT NULL DEFAULT 0,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_transaction_id` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_status`
--

INSERT INTO `tbl_order_status` (`id`, `user_id`, `name`, `email`, `phone`, `amount`, `address`, `order_status`, `status`, `store_status`, `transaction_id`, `bank_transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(26, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '605af78e5ac0c', NULL, 'BDT', NULL, NULL),
(27, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Processing', 0, '605c3e7f3d850', NULL, 'BDT', NULL, NULL),
(28, NULL, 'Md. Rasel', 'rasel@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, '605c4453b398c', NULL, 'BDT', NULL, NULL),
(29, NULL, 'Rasel', 'rasel@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, '605c50003f7ab', NULL, 'BDT', NULL, NULL),
(30, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Pending', 0, '60619e3ac5c0f', NULL, 'BDT', NULL, NULL),
(31, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '60619e4d3215c', NULL, 'BDT', NULL, NULL),
(32, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '60619ff9afe7a', NULL, 'BDT', NULL, NULL),
(33, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061a04b5bb06', NULL, 'BDT', NULL, NULL),
(34, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061a0a7088f7', NULL, 'BDT', NULL, NULL),
(35, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061a112bd687', NULL, 'BDT', NULL, NULL),
(36, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Processing', 0, '6061af728921a', NULL, 'BDT', NULL, NULL),
(37, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b3b77dd04', NULL, 'BDT', NULL, NULL),
(38, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b3c0105b4', NULL, 'BDT', NULL, NULL),
(39, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b3e508fc3', NULL, 'BDT', NULL, NULL),
(40, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b4081a587', NULL, 'BDT', NULL, NULL),
(41, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b41f642e3', NULL, 'BDT', NULL, NULL),
(42, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b433b0f41', NULL, 'BDT', NULL, NULL),
(43, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b45da5618', NULL, 'BDT', NULL, NULL),
(44, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b6006a185', NULL, 'BDT', NULL, NULL),
(45, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b61c45741', NULL, 'BDT', NULL, NULL),
(46, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b6369b4ca', NULL, 'BDT', NULL, NULL),
(47, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b64af201f', NULL, 'BDT', NULL, NULL),
(48, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b65225b7f', NULL, 'BDT', NULL, NULL),
(49, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b6a10b957', NULL, 'BDT', NULL, NULL),
(50, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b6ae4c4e0', NULL, 'BDT', NULL, NULL),
(51, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Processing', 0, '6061b6bfeb56f', NULL, 'BDT', NULL, NULL),
(52, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b716de0f8', NULL, 'BDT', NULL, NULL),
(53, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Pending', 0, '6061b73c65d9f', NULL, 'BDT', NULL, NULL),
(54, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', NULL, 'Failed', 0, '6061b77ab4801', NULL, 'BDT', NULL, NULL),
(55, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061b9cd1b9f2', NULL, 'BDT', NULL, NULL),
(56, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Pending', 0, '6061c31304d03', NULL, 'BDT', NULL, NULL),
(57, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Pending', 0, '6061c7453abb1', NULL, 'BDT', NULL, NULL),
(58, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061cadd11cf5', NULL, 'BDT', NULL, NULL),
(59, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061cb5d36139', NULL, 'BDT', NULL, NULL),
(60, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 3200, 'Dhaka', NULL, 'Processing', 0, '6061ce1c5f040', NULL, 'BDT', NULL, NULL),
(61, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061ce80c4dc4', NULL, 'BDT', NULL, NULL),
(62, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 3200, 'Dhaka', NULL, 'Processing', 0, '6061cf320fe84', NULL, 'BDT', NULL, NULL),
(63, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061d011c3060', NULL, 'BDT', NULL, NULL),
(64, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 4000, 'Dhaka', NULL, 'Processing', 0, '6061d27178fd1', NULL, 'BDT', NULL, NULL),
(65, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, '606403fb6bc2c', NULL, 'BDT', NULL, NULL),
(66, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, '60640492193f5', NULL, 'BDT', NULL, NULL),
(67, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, '606404e7d4816', NULL, 'BDT', NULL, NULL),
(68, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, '60642794d339e', NULL, 'BDT', NULL, NULL),
(69, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'ON-01210329106', NULL, 'BDT', NULL, NULL),
(70, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'ON-01210329107', NULL, 'BDT', NULL, NULL),
(71, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210329108', NULL, 'BDT', NULL, NULL),
(72, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', NULL, 'Dhaka', NULL, 'Processing', 0, 'ON-02210401101', NULL, 'BDT', NULL, NULL),
(73, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 3200, 'Dhaka', NULL, 'Processing', 0, 'ON-02210401101', NULL, 'BDT', NULL, NULL),
(74, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 3200, 'Dhaka', NULL, 'Pending', 0, 'ON-02210401101', NULL, 'BDT', NULL, NULL),
(75, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'ON-01210329110', NULL, 'BDT', NULL, NULL),
(76, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 3200, 'Dhaka', NULL, 'Processing', 0, 'ON-02210401102', '2104031710061QwBNxTO6M5DZXp', 'BDT', NULL, NULL),
(77, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'ON-01210329111', '210403200757r3en9tVPo0TzZlh', 'BDT', NULL, NULL),
(78, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 3200, 'Dhaka', NULL, 'Pending', 0, 'ON-02210401103', NULL, 'BDT', NULL, NULL),
(79, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'ON-01210408104', '2104111727001RopihxqghOhEWc', 'BDT', NULL, NULL),
(80, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210408105', NULL, 'BDT', NULL, NULL),
(81, NULL, 'Rubel', 'rubel@gmail.com', '01611054866', 5000, 'TUSHPUR', NULL, 'Processing', 0, 'ON-01210408107', '2104151520021gcFi8hUrNitJR0', 'BDT', NULL, NULL),
(82, NULL, 'Sogin', 'sogir@gmail.com', '01511054866', 10000, 'TUSHPUR', NULL, 'Processing', 0, 'ON-01210408108', '2104151529380zhNuGkspPZOoff', 'BDT', NULL, NULL),
(83, NULL, 'Hasan', 'hasan@gmail.com', '015454455', 5000, 'Dhaka', NULL, 'Processing', 0, 'ON-01210408109', '2104151540454YGPmWQmHjJUX1v', 'BDT', NULL, NULL),
(84, NULL, 'Rasel', 'rubel@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210408114', NULL, 'BDT', NULL, NULL),
(85, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, '60b216390bdc5', NULL, 'BDT', NULL, NULL),
(86, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, '60b21a45423fd', NULL, 'BDT', NULL, NULL),
(87, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, '60b21b007c3e6', NULL, 'BDT', NULL, NULL),
(88, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, '60b21d781d114', NULL, 'BDT', NULL, NULL),
(89, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4eee92448e', NULL, 'BDT', NULL, NULL),
(90, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4ef767ce7c', NULL, 'BDT', NULL, NULL),
(91, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4ef7d2d561', NULL, 'BDT', NULL, NULL),
(92, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4efac4a167', NULL, 'BDT', NULL, NULL),
(93, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4efc810513', NULL, 'BDT', NULL, NULL),
(94, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4efd2d4b85', NULL, 'BDT', NULL, NULL),
(95, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4eff0298be', NULL, 'BDT', NULL, NULL),
(96, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4eff5b284b', NULL, 'BDT', NULL, NULL),
(97, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4f00c27f9c', NULL, 'BDT', NULL, NULL),
(98, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4f01cbf803', NULL, 'BDT', NULL, NULL),
(99, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Pending', 0, '60b4f03078d46', NULL, 'BDT', NULL, NULL),
(100, NULL, 'Rasel', 'rubel@gmail.com', '01911054866', 5000, 'TUSHPUR', NULL, 'Pending', 0, '60b4f06fd6fb4', NULL, 'BDT', NULL, NULL),
(101, NULL, 'Rasel', 'rubel@gmail.com', '01911054866', 5000, 'TUSHPUR', NULL, 'Pending', 0, 'ON-01210526108', NULL, 'BDT', '2021-05-31 14:23:19', NULL),
(102, NULL, 'Rasel', 'rubel@gmail.com', '01911054866', 5000, 'KHADERGONJ', NULL, 'Processing', 0, 'ON-01210526109', '210531222430RgZ2t5x5QoO2a45', 'BDT', '2021-05-31 16:24:16', NULL),
(103, NULL, 'Rasel', 'rubel@gmail.com', '01911054866', 5000, 'KHADERGONJ', NULL, 'Processing', 0, 'ON-01210526110', '2105312255030uLIJ2lppt5FBeX', 'BDT', '2021-05-31 16:54:45', NULL),
(104, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 09:43:53', NULL),
(105, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 09:56:09', NULL),
(106, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:04:14', NULL),
(107, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:08:25', NULL),
(108, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:09:12', NULL),
(109, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:44:07', NULL),
(110, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:46:22', NULL),
(111, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:46:56', NULL),
(112, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:47:58', NULL),
(113, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:48:25', NULL),
(114, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:53:49', NULL),
(115, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 10:59:50', NULL),
(116, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:08:37', NULL),
(117, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:12:04', NULL),
(118, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:12:24', NULL),
(119, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:12:57', NULL),
(120, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:13:28', NULL),
(121, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:13:53', NULL),
(122, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:14:40', NULL),
(123, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:15:03', NULL),
(124, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:15:23', NULL),
(125, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:15:52', NULL),
(126, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:16:51', NULL),
(127, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:17:31', NULL),
(128, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:18:18', NULL),
(129, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:19:13', NULL),
(130, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:20:30', NULL),
(131, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:21:06', NULL),
(132, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:21:19', NULL),
(133, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:22:26', NULL),
(134, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:23:25', NULL),
(135, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:24:00', NULL),
(136, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:24:50', NULL),
(137, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:25:18', NULL),
(138, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:25:54', NULL),
(139, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 11:29:06', NULL),
(140, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:30:17', NULL),
(141, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:30:38', NULL),
(142, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:30:56', NULL),
(143, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:31:06', NULL),
(144, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:31:24', NULL),
(145, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:32:20', NULL),
(146, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, '60be03ce64436', NULL, 'BDT', NULL, NULL),
(147, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, '60be03f9c2035', NULL, 'BDT', NULL, NULL),
(148, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:33:23', NULL),
(149, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, '60be0416a87c0', NULL, 'BDT', NULL, NULL),
(150, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:33:58', NULL),
(151, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:34:39', NULL),
(152, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:35:13', NULL),
(153, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:35:18', NULL),
(154, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:36:53', NULL),
(155, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 11:59:33', NULL),
(156, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 12:02:43', NULL),
(157, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 12:05:09', NULL),
(158, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 12:05:28', NULL),
(159, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 12:05:45', NULL),
(160, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Pending', 0, 'ON-01210607101', NULL, 'BDT', '2021-06-07 12:07:52', NULL),
(161, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 12:08:08', NULL),
(162, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 12:08:56', NULL),
(163, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607101', '2106071909520GlhnhXDjboJ7qx', 'BDT', '2021-06-07 13:09:45', NULL),
(164, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:12:58', NULL),
(165, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:14:15', NULL),
(166, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 1200, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:20:36', NULL),
(167, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:23:54', NULL),
(168, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:25:31', NULL),
(169, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:31:32', NULL),
(170, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:45:28', NULL),
(171, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607101', NULL, 'BDT', '2021-06-07 13:47:45', NULL),
(172, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607102', '2106071948341kywOCozdX3cpPB', 'BDT', '2021-06-07 13:48:28', NULL),
(173, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607103', '210607194955O39IHX8Hlqk2cd3', 'BDT', '2021-06-07 13:49:50', NULL),
(174, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607104', '2106081300541GM17A5jEac8oOz', 'BDT', '2021-06-08 07:00:48', NULL),
(175, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607105', '2106081316431a3MNmqfZLHcajx', 'BDT', '2021-06-08 07:16:38', NULL),
(176, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607106', '210608140229fYCMf4JhQezInJR', 'BDT', '2021-06-08 08:02:23', NULL),
(177, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607107', '21060814223416nF9EVUMwhZEfn', 'BDT', '2021-06-08 08:22:29', NULL),
(178, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607107', NULL, 'BDT', '2021-06-08 08:27:11', NULL),
(179, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607108', '2106081441591HGIddyAiw62sJR', 'BDT', '2021-06-08 08:41:54', NULL),
(180, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607109', '2106081443160LnR2JAfvQWZstY', 'BDT', '2021-06-08 08:43:10', NULL),
(181, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607110', '2106081444461s53FqWr9PjQ10k', 'BDT', '2021-06-08 08:44:41', NULL),
(182, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607111', '210608144728KEH1prGCvxXgD2S', 'BDT', '2021-06-08 08:47:22', NULL),
(183, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607112', '210608145029URoFytfqy0ESpIy', 'BDT', '2021-06-08 08:50:24', NULL),
(184, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607113', '2106081718360BR18b9PkiAyeUL', 'BDT', '2021-06-08 11:18:31', NULL),
(185, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607114', '210608175420lmkOCk6cj0Nmc6z', 'BDT', '2021-06-08 11:54:15', NULL),
(186, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607115', '210608175522yHF0h0xIpuL9xNZ', 'BDT', '2021-06-08 11:55:17', NULL),
(187, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607116', '2106081820280PfUDxky9tLNTVt', 'BDT', '2021-06-08 12:20:23', NULL),
(188, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607117', '210608182312oI5P56LV1ghmwNA', 'BDT', '2021-06-08 12:23:07', NULL),
(189, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607117', NULL, 'BDT', '2021-06-08 12:24:43', NULL),
(190, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 700, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607118', '2106081825378X89xGMsEW8eq14', 'BDT', '2021-06-08 12:25:31', NULL),
(191, NULL, 'Rasel Hossain', 'raselhossainb@gmail.com', '01911054866', 5000, 'Dhaka', NULL, 'Processing', 0, 'ON-01210608101', '210608185204pw7pfV87nPQwy0K', 'BDT', '2021-06-08 12:51:57', NULL),
(192, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607122', '210614115819reIpxYWUO4MPRvw', 'BDT', '2021-06-14 05:58:13', NULL),
(193, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607124', '210614130420zmjzbu3GTw8Nqq2', 'BDT', '2021-06-14 07:04:14', NULL),
(194, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Pending', 0, 'Hl-01210607124', NULL, 'BDT', '2021-06-14 07:14:28', NULL),
(195, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607125', '210614131514jiXqseI4T3UkuAq', 'BDT', '2021-06-14 07:15:08', NULL),
(196, NULL, 'Md. Rasel', 'raselhossainb@gmail.com', '01911054866', 2100, 'Dhaka', NULL, 'Processing', 0, 'Hl-01210607126', '2106141317400Ptc7sP0leKliG6', 'BDT', '2021-06-14 07:17:27', NULL),
(197, NULL, 'Mohammad Riad islam', 'riad2119@gmail.com', '01313979489', 2100, 'Barishal', NULL, 'Processing', 0, 'Hl-01210614101', '210614150109cH03YfXYVt1pAM6', 'BDT', '2021-06-14 08:57:46', NULL),
(198, NULL, 'Mohammad Riad islam', 'riad2119@gmail.com', '01313979489', 2100, 'Barishal', NULL, 'Processing', 0, 'Hl-01210614101', '210614150109cH03YfXYVt1pAM6', 'BDT', '2021-06-14 08:59:45', NULL),
(199, NULL, 'Mohammad Riad islam', 'riad2119@gmail.com', '01313979489', 700, 'Barishal', NULL, 'Processing', 0, 'Hl-01210614102', '210614150322AWnWbn44dMOyXXa', 'BDT', '2021-06-14 09:03:11', NULL),
(200, NULL, 'Mohammad Riad islam', 'riad27119@gmail.com', '01313979489', 2100, 'Barishal', NULL, 'Processing', 0, 'Hl-01210614103', '210614150803E85Sq5GZGGLzom2', 'BDT', '2021-06-14 09:07:51', NULL),
(201, NULL, 'Mohammad Riad islam', 'riad27119@gmail.com', '01313979489', 2100, 'Barishal', NULL, 'Processing', 0, 'Hl-01210614104', '210614150952IWEKhVMmher1iTD', 'BDT', '2021-06-14 09:09:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE `tbl_reports` (
  `re_id` int(11) NOT NULL,
  `re_idn` varchar(255) NOT NULL,
  `re_name` varchar(255) NOT NULL,
  `re_param` text NOT NULL,
  `re_data` longtext NOT NULL,
  `re_type` varchar(11) NOT NULL,
  `re_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_value` varchar(250) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`s_id`, `s_name`, `s_value`, `updated_at`) VALUES
(1, 'appName', 'BPC', '2021-04-10 11:16:55'),
(2, 'appTitle', 'Bangladesh Parjatan Corporation', '2021-04-10 09:26:04'),
(3, 'url', 'https://hotels.gov.bd', '2021-04-10 10:45:08'),
(4, 'email', 'admin@hotels.gov.bd', '2021-04-10 10:45:08'),
(5, 'appAddress', 'E-5 C/1, West Agargaon, Sher-e-Bangla Nagar Administrative Area, Dhaka - 1207', '2021-04-10 10:45:08'),
(8, 'contact', '+880-2-44826527', '2021-04-10 10:45:08'),
(9, 'logo', '/images/base_setting/logo.png', '2021-04-15 06:58:12'),
(10, 'c_symbol', 'BDT ', '2021-04-10 07:28:05'),
(11, 'c_order', 'left', '2021-04-10 07:28:05'),
(12, 'date_format', '2017-12-13', '2021-04-10 10:45:08'),
(16, 'usd_rate', '85', '2021-04-10 07:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `id` bigint(20) NOT NULL,
  `cus_id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1= active, 0= inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_note` varchar(255) DEFAULT NULL,
  `transaction_amount` float NOT NULL,
  `transaction_discount` float DEFAULT NULL,
  `transaction_net_payable` float NOT NULL DEFAULT 0,
  `transaction_paid` float NOT NULL DEFAULT 0,
  `transaction_adjust` float NOT NULL DEFAULT 0,
  `transaction_due` float DEFAULT NULL,
  `transaction_date` date NOT NULL,
  `transaction_pay_method` varchar(50) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `invoice_id` varchar(64) DEFAULT NULL,
  `reference_id` varchar(50) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `transaction_ref_id` varchar(64) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `card_no` varchar(255) DEFAULT NULL,
  `transaction_type` varchar(255) DEFAULT NULL,
  `transaction_received_by` int(11) DEFAULT NULL,
  `is_refund` tinyint(1) DEFAULT NULL,
  `is_hall` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_years`
--

CREATE TABLE `tbl_years` (
  `year_id` int(11) NOT NULL,
  `year_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_years`
--

INSERT INTO `tbl_years` (`year_id`, `year_name`) VALUES
(1, '2000'),
(2, '2001'),
(3, '2002'),
(4, '2003'),
(5, '2004'),
(6, '2005'),
(7, '2006'),
(8, '2007'),
(9, '2008'),
(10, '2009'),
(11, '2010'),
(12, '2011'),
(13, '2012'),
(14, '2013'),
(15, '2014'),
(16, '2015'),
(17, '2016'),
(18, '2017'),
(19, '2018'),
(20, '2019'),
(21, '2020'),
(22, '2021'),
(23, '2022'),
(24, '2023'),
(25, '2024'),
(26, '2025'),
(27, '2026'),
(28, '2027'),
(29, '2028'),
(30, '2029'),
(31, '2030'),
(32, '2031'),
(33, '2032'),
(34, '2033'),
(35, '2034'),
(36, '2035'),
(37, '2036'),
(38, '2037'),
(39, '2038'),
(40, '2039'),
(41, '2040');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `hotel_id`, `last_login`, `full_name`, `phone`, `created_at`, `updated_at`) VALUES
(6, 'admin@mail.com', '$2y$10$n9xS8/8yiEHEVzs2fPyhWuCjxgHF3CjPTF59bUhZBTUV2Cc/Q3Hx6', '{\"hotels.guestregistrations.shifting\":true,\"hotels.reservations.show\":true,\"hotels.reservations.dashboard\":true,\"hotels.rooms\":true,\"hotels.multipleroom.multiple_room_create\":true,\"hotels.rooms.edit\":true,\"hotels.multipleroom.multiple_room_store\":true,\"hotels.rooms.delete\":true,\"hotels.rooms.show\":true,\"hotels.rooms.picture\":true,\"hotels.rooms.store\":true,\"hotels.rooms.create\":false,\"hotels.rooms.remove-picture\":false}', 1, '2021-06-29 10:45:52', 'BPC', NULL, '2021-01-15 18:37:06', '2021-06-29 10:45:52'),
(23, 'manager1@mail.com', '$2y$10$uhHZ2OiK/eSjk.6LvnikNuMatHymeohFlq5yBtvqMKF7Xg17Sj8Ym', NULL, 2, '2021-01-19 06:42:37', 'Manager1', NULL, '2021-01-18 09:06:06', '2021-01-19 06:42:37'),
(24, 'manager2@mail.com', '$2y$10$c9tCijr3ye5d2fZlWfS07u0LrPbv1SiPZxovEMwC73lLg7WJAtig6', NULL, 3, '2021-01-19 06:42:55', 'Manager 2', NULL, '2021-01-18 09:06:39', '2021-01-19 06:42:55'),
(25, 'front1@mail.com', '$2y$10$GwWd32P4d7Bvr1v2iMbxP.1YXhN95AByq99d29vusv6kV8DOgIwuy', NULL, 2, '2021-01-20 09:09:37', 'FrontDesk1', NULL, '2021-01-18 09:07:05', '2021-01-20 09:09:37'),
(26, 'front2@mail.com', '$2y$10$c86HW2pzYB9hX2SWDooyz.KqP9qqlwowRSOcEMILy1NmbetovQghq', NULL, 3, '2021-01-19 16:58:30', 'FrontDesk2', NULL, '2021-01-18 09:07:20', '2021-01-18 09:07:20'),
(30, 'rasel@gmail.com', '$2y$10$prjaFwHY/Z2AS5yoIvid9.nP3ll3CpH747.ilFELhUy1fIj4WeYxW', NULL, NULL, NULL, NULL, NULL, '2021-01-24 01:29:01', '2021-01-24 01:29:01'),
(31, 'manager@mail.com', '$2y$10$SVPkR98mK3k6L.SzP/BmkeCB3kp3h.KVSRqtqkFGrMxVHE.qppfaO', NULL, 1, '2021-03-21 13:27:38', 'Hotel Manager', NULL, '2021-03-21 13:22:17', '2021-03-21 13:27:38'),
(32, 'hoteladmin@mail.com', '$2y$10$AAWUCMxQ6S3Vn86P0FL2h.T80Cju0YsbLa1TFfQ8Qgj1OGrsHvfmm', NULL, 1, '2021-03-22 03:21:06', 'Hotel Admin', NULL, '2021-03-21 13:23:26', '2021-03-22 03:21:06'),
(33, 'frontdesk@mail.com', '$2y$10$Erk7QHDTQFftM6AbSQykMe3muCNNYOhjsX2DarU1YLkAn/DIaGt5a', NULL, 1, '2021-03-21 13:32:27', 'FrontDesk', NULL, '2021-03-21 13:24:05', '2021-03-21 13:32:27'),
(34, 'roomservice@mail.com', '$2y$10$DbYWf/yGQU.JcIcATAcsku1EQVhobMLGtUevcC3nOGeGAYqR6J9bq', NULL, 2, '2021-04-06 11:06:00', 'Room Service', NULL, '2021-03-21 13:24:39', '2021-04-06 11:06:00'),
(35, 'roomservice1@mail.com', '$2y$10$W2N4Ke7Rf9SqIoeeOCt6fOq5E2ARIQwRONO78N6KkqlBfnWTzZ3g6', NULL, 2, NULL, 'Room Service', NULL, '2021-04-06 11:10:41', '2021-04-06 11:10:41'),
(36, 'roomservice2@gmail.com', '$2y$10$5odHQQxnqieICFF5k4DDXeqHfsIal89cN9J8Eqzs6HQnaEOplMDKK', NULL, 2, '2021-04-06 11:12:38', 'Room Service', NULL, '2021-04-06 11:12:15', '2021-04-06 11:12:38'),
(37, 'admin_hotel@gmail.com', '$2y$10$gYi9Yd1WJdt516Ixw3qTOu7XMH2sKgk89YliK2OUqL4SqBvE8kNWC', NULL, 1, '2021-04-11 05:16:06', 'Admin Hotel', NULL, '2021-04-11 05:15:46', '2021-04-11 05:16:06'),
(39, 'hotel_manager@gmail.com', '$2y$10$AB74toFNVv4qKbY6zO0Z4escH9/B66tB8tbo17XbLRJW0qheKprJa', NULL, 1, '2021-04-11 05:34:03', 'Hotel Manager', NULL, '2021-04-11 05:33:47', '2021-04-11 05:34:03'),
(40, 'frontdesk@gmail.com', '$2y$10$9c4Tu8BNzKcr29kBUd9ttuoZM60eziMoklXvnDf6znS7pU2BuaE9q', NULL, 1, '2021-04-11 05:35:54', 'Frontdesk', NULL, '2021-04-11 05:35:40', '2021-04-11 05:35:54'),
(41, 'room_service@mail.com', '$2y$10$/J6wSKxXHGbz7K.u2IxjsOhg/MpoZ6EbvhU5gnv9Cj6s11FdwDObK', '{\"hotels.reports.dashboard\":true}', 1, '2021-04-11 05:49:41', 'Room Service', NULL, '2021-04-11 05:49:29', '2021-04-12 05:32:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fe_settings`
--
ALTER TABLE `fe_settings`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_name` (`s_name`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrms_allowances`
--
ALTER TABLE `hrms_allowances`
  ADD PRIMARY KEY (`allowance_id`);

--
-- Indexes for table `hrms_allowances_basics`
--
ALTER TABLE `hrms_allowances_basics`
  ADD PRIMARY KEY (`allowance_id`);

--
-- Indexes for table `hrms_awards`
--
ALTER TABLE `hrms_awards`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `hrms_banks`
--
ALTER TABLE `hrms_banks`
  ADD PRIMARY KEY (`bank_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`,`account_no`);

--
-- Indexes for table `hrms_configs`
--
ALTER TABLE `hrms_configs`
  ADD PRIMARY KEY (`hrms_config_id`);

--
-- Indexes for table `hrms_departments`
--
ALTER TABLE `hrms_departments`
  ADD PRIMARY KEY (`dpt_id`);

--
-- Indexes for table `hrms_designations`
--
ALTER TABLE `hrms_designations`
  ADD PRIMARY KEY (`desg_id`);

--
-- Indexes for table `hrms_disciplinary_actions`
--
ALTER TABLE `hrms_disciplinary_actions`
  ADD PRIMARY KEY (`dis_act_id`);

--
-- Indexes for table `hrms_employees`
--
ALTER TABLE `hrms_employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `UNIQUE` (`employee_bpc_id`),
  ADD UNIQUE KEY `employee_mobile` (`employee_mobile`,`employee_email`,`employee_nid`);

--
-- Indexes for table `hrms_employee_basics`
--
ALTER TABLE `hrms_employee_basics`
  ADD PRIMARY KEY (`employee_basic_id`);

--
-- Indexes for table `hrms_festivals`
--
ALTER TABLE `hrms_festivals`
  ADD PRIMARY KEY (`festival_id`);

--
-- Indexes for table `hrms_festival_bonuses`
--
ALTER TABLE `hrms_festival_bonuses`
  ADD PRIMARY KEY (`festival_bonus_id`);

--
-- Indexes for table `hrms_increments`
--
ALTER TABLE `hrms_increments`
  ADD PRIMARY KEY (`increment_id`);

--
-- Indexes for table `hrms_installments`
--
ALTER TABLE `hrms_installments`
  ADD PRIMARY KEY (`installment_id`);

--
-- Indexes for table `hrms_loans`
--
ALTER TABLE `hrms_loans`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `hrms_loan_interests`
--
ALTER TABLE `hrms_loan_interests`
  ADD PRIMARY KEY (`loan_interest_id`);

--
-- Indexes for table `hrms_loan_manages`
--
ALTER TABLE `hrms_loan_manages`
  ADD PRIMARY KEY (`loan_manage_id`);

--
-- Indexes for table `hrms_overtimes`
--
ALTER TABLE `hrms_overtimes`
  ADD PRIMARY KEY (`overtime_id`);

--
-- Indexes for table `hrms_payscale`
--
ALTER TABLE `hrms_payscale`
  ADD PRIMARY KEY (`payscale_id`),
  ADD UNIQUE KEY `payscale_grad_no` (`payscale_grad_no`);

--
-- Indexes for table `hrms_payscale_steps`
--
ALTER TABLE `hrms_payscale_steps`
  ADD PRIMARY KEY (`payscale_step_id`);

--
-- Indexes for table `hrms_postings`
--
ALTER TABLE `hrms_postings`
  ADD PRIMARY KEY (`posting_id`);

--
-- Indexes for table `hrms_promotions`
--
ALTER TABLE `hrms_promotions`
  ADD PRIMARY KEY (`promot_id`);

--
-- Indexes for table `hrms_publications`
--
ALTER TABLE `hrms_publications`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `hrms_salaries`
--
ALTER TABLE `hrms_salaries`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `hrms_salary_categories`
--
ALTER TABLE `hrms_salary_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `hrms_salary_rules`
--
ALTER TABLE `hrms_salary_rules`
  ADD PRIMARY KEY (`rules_id`);

--
-- Indexes for table `hrms_salary_structures`
--
ALTER TABLE `hrms_salary_structures`
  ADD PRIMARY KEY (`structure_id`);

--
-- Indexes for table `hrms_trainings`
--
ALTER TABLE `hrms_trainings`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `hrms_units`
--
ALTER TABLE `hrms_units`
  ADD PRIMARY KEY (`unit_id`);

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
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_booking_cart`
--
ALTER TABLE `tbl_booking_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_hotels`
--
ALTER TABLE `tbl_hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_module_sections`
--
ALTER TABLE `tbl_module_sections`
  ADD PRIMARY KEY (`section_id`),
  ADD UNIQUE KEY `section_name` (`section_name`);

--
-- Indexes for table `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  ADD PRIMARY KEY (`re_id`),
  ADD UNIQUE KEY `re_idn` (`re_idn`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_name` (`s_name`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `tbl_years`
--
ALTER TABLE `tbl_years`
  ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fe_settings`
--
ALTER TABLE `fe_settings`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hrms_allowances`
--
ALTER TABLE `hrms_allowances`
  MODIFY `allowance_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrms_allowances_basics`
--
ALTER TABLE `hrms_allowances_basics`
  MODIFY `allowance_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrms_awards`
--
ALTER TABLE `hrms_awards`
  MODIFY `award_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrms_banks`
--
ALTER TABLE `hrms_banks`
  MODIFY `bank_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrms_configs`
--
ALTER TABLE `hrms_configs`
  MODIFY `hrms_config_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrms_departments`
--
ALTER TABLE `hrms_departments`
  MODIFY `dpt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hrms_designations`
--
ALTER TABLE `hrms_designations`
  MODIFY `desg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hrms_disciplinary_actions`
--
ALTER TABLE `hrms_disciplinary_actions`
  MODIFY `dis_act_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrms_employees`
--
ALTER TABLE `hrms_employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hrms_employee_basics`
--
ALTER TABLE `hrms_employee_basics`
  MODIFY `employee_basic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrms_festivals`
--
ALTER TABLE `hrms_festivals`
  MODIFY `festival_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hrms_festival_bonuses`
--
ALTER TABLE `hrms_festival_bonuses`
  MODIFY `festival_bonus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hrms_increments`
--
ALTER TABLE `hrms_increments`
  MODIFY `increment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrms_loans`
--
ALTER TABLE `hrms_loans`
  MODIFY `loan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hrms_loan_interests`
--
ALTER TABLE `hrms_loan_interests`
  MODIFY `loan_interest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hrms_loan_manages`
--
ALTER TABLE `hrms_loan_manages`
  MODIFY `loan_manage_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hrms_overtimes`
--
ALTER TABLE `hrms_overtimes`
  MODIFY `overtime_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrms_payscale`
--
ALTER TABLE `hrms_payscale`
  MODIFY `payscale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hrms_payscale_steps`
--
ALTER TABLE `hrms_payscale_steps`
  MODIFY `payscale_step_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `hrms_postings`
--
ALTER TABLE `hrms_postings`
  MODIFY `posting_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrms_promotions`
--
ALTER TABLE `hrms_promotions`
  MODIFY `promot_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hrms_publications`
--
ALTER TABLE `hrms_publications`
  MODIFY `publication_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrms_salaries`
--
ALTER TABLE `hrms_salaries`
  MODIFY `salary_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hrms_salary_categories`
--
ALTER TABLE `hrms_salary_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hrms_salary_rules`
--
ALTER TABLE `hrms_salary_rules`
  MODIFY `rules_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hrms_salary_structures`
--
ALTER TABLE `hrms_salary_structures`
  MODIFY `structure_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hrms_trainings`
--
ALTER TABLE `hrms_trainings`
  MODIFY `train_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrms_units`
--
ALTER TABLE `hrms_units`
  MODIFY `unit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_booking_cart`
--
ALTER TABLE `tbl_booking_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tbl_hotels`
--
ALTER TABLE `tbl_hotels`
  MODIFY `h_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1372;

--
-- AUTO_INCREMENT for table `tbl_module_sections`
--
ALTER TABLE `tbl_module_sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
