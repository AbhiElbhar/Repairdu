-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 09:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repairdu`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `mobile_no`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '1707989412.webp', '8600772327', '<h5><span style=\"color: rgb(111, 115, 123); font-family: &quot;DM Sans&quot;, sans-serif; font-size: 18px;\"><b><span style=\"font-family: &quot;Arial Black&quot;;\">DomS IT Solutions Pvt. Ltd,</span></b> aims at providing innovative and impactful software development solutions that will help your businesses keep up with the changing technology trends. We are a leading&nbsp;digital marketing&nbsp;and&nbsp;custom&nbsp;</span><strong style=\"font-weight: bold; color: rgb(111, 115, 123); font-family: &quot;DM Sans&quot;, sans-serif; font-size: 18px;\">software development company in Pune</strong><span style=\"color: rgb(111, 115, 123); font-family: &quot;DM Sans&quot;, sans-serif; font-size: 18px;\">. We <u>design</u> and <u>develop intuitive</u>,<u> SEO</u>, and <u>user-friendly web-based apps and desktop</u> &amp; <u>mobile applications.</u></span></h5>', 'logo', 'key', '<h4 style=\"font-family: sans-serif; color: rgb(0, 0, 0);\"><span style=\"color: rgb(111, 115, 123); font-family: &quot;DM Sans&quot;, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder;\">DomS IT Solutions Pvt. Ltd,</span>&nbsp;aims at providing innovative and impactful software development solutions that will help your businesses keep up with the changing technology trends. We are a leading&nbsp;digital marketing&nbsp;and&nbsp;custom&nbsp;</span><strong style=\"font-weight: bold; color: rgb(111, 115, 123); font-family: &quot;DM Sans&quot;, sans-serif; font-size: 18px;\">software development company in Pune</strong><span style=\"color: rgb(111, 115, 123); font-family: &quot;DM Sans&quot;, sans-serif; font-size: 18px;\">. We&nbsp;<u>design</u>&nbsp;and&nbsp;<u>develop intuitive</u>,<u>&nbsp;SEO</u>, and&nbsp;<u>user-friendly web-based apps and desktop</u>&nbsp;&amp;&nbsp;<u>mobile applications</u>.</span></h4>', '2024-02-15 01:51:24', '2024-02-27 00:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `bases`
--

CREATE TABLE `bases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bases`
--

INSERT INTO `bases` (`id`, `title`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'In sit ullamco venia', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', 'Atque nulla consecte', 'Perferendis omnis si', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', '2024-02-16 01:43:41', '2024-02-16 01:43:41'),
(2, 'Qui animi natus adi', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', 'Nihil saepe consequa', 'Nam exercitation vel', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', '2024-02-16 01:44:44', '2024-02-16 01:44:44'),
(3, 'Qui animi natus adi', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', 'Nihil saepe consequa', 'Perferendis omnis si', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', '2024-02-16 01:45:36', '2024-02-16 01:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Abhi', 'elbharabhijit@gmail.com', 'pratik', 'hgfd hddwfh At Tavharewadi, Post Awasari BK,In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. Tal Ambegoan, Dist Pune.', '2024-02-17 07:26:49', '2024-02-17 07:26:49'),
(3, 'Bhushan', 'elbharabhijit@gmail.com', 'gsfhjhdv', 'At Tavharewadi, Post Awasari BK,In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. Tal Ambegoan, Dist Pune', '2024-02-17 07:37:46', '2024-02-17 07:37:46'),
(4, 'admin', 'elbharabhijit@gmail.com', 'pratik', 'Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.', '2024-02-18 10:54:42', '2024-02-18 10:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counter` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `counter`, `title`, `created_at`, `updated_at`) VALUES
(1, '5', 'Years Of Experience', '2024-02-27 00:34:10', '2024-02-27 00:42:18'),
(2, '66', 'Complete Projects', '2024-02-27 00:37:11', '2024-02-27 00:37:11'),
(3, '29', 'Client Satisfied', '2024-02-27 00:37:57', '2024-02-27 00:37:57'),
(4, '150', 'Global Award Winning', '2024-02-27 00:38:22', '2024-02-27 00:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `email`, `mobile_no`, `address`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'elbharabhijit@gmail.com', '8600772327', 'At Tavharewadi, Post Awasari BK,Tal Ambegoan, Dist Pune.', '1708165267.png', '1708165267.png', '2024-02-16 04:06:53', '2024-02-18 10:45:41');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'This software data is safe for my business ?', 'Yes', '2024-02-16 01:05:42', '2024-02-16 01:05:42'),
(2, 'How i can get Free Trail of this product ?', 'Yes, Simply you need to register with us & get free trail of this software.', '2024-02-16 01:07:32', '2024-02-16 01:07:32'),
(4, 'This software data is safe for my business ?', 'Yes, Simply you need to register with us & get free trail of this software.', '2024-02-16 01:08:30', '2024-02-16 01:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `image`, `heading`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'In sit ullamco venia', '1708062911.webp', 'In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem. In sit ullamco venia In ducimus hic rem.', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous<strong> testing </strong>means that organizations don’t have to wait for all the pieces to be deployed before testing can start. <br>\r\nShift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', 'Atque nulla consecte', 'Perferendis omnis si', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', '2024-02-16 00:18:23', '2024-02-19 03:36:42'),
(2, 'Qui animi natus adi', '1708062733.webp', 'Quia reiciendis proi', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', 'Nihil saepe consequa', 'Nam exercitation vel', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', '2024-02-16 00:22:13', '2024-02-16 00:22:13'),
(3, 'Nam exercitation vel', '1708062809.webp', 'In ducimus hic rem', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', 'Atque nulla consecte', 'Perferendis omnis si', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed into production. Continuous testing means that organizations don’t have to wait for all the pieces to be deployed before testing can start. Shift-left, moving testing closer to design, and shift-right, where validation is done by end-users, are also philosophies of testing that have recently gained traction in the software community. Once your test strategy and management plans are understood, automation of all aspects of testing becomes a must to support the speed of delivery that is required.', '2024-02-16 00:23:29', '2024-02-16 00:23:29'),
(4, 'Quia reiciendis proi', '1708169490.png', 'Quia reiciendis proi', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed', 'Quia reiciendis proi', 'Quia reiciendis proi', 'Software testing today is most effective when it is continuous, indicating that testing is started during the design, continues as the software is built out, and even occurs when deployed', '2024-02-17 06:01:30', '2024-02-17 06:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `title`, `image`, `category_id`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Healthy & Hospitality', '1708084122.png', 2, 'Continually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.', 'Healthy & Hospitality', 'Healthy & Hospitality', 'Continually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.', '2024-02-16 06:18:42', '2024-02-16 06:31:39'),
(2, 'Facilis', '1708086008.png', 3, 'Business Growth Mangment\r\n\r\nContinually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.\r\n\r\nIntrinsicly coordinate multifunctional functionalities reliable potentialities. Objectively envisioneer high in convergence through collaborative networks. Interactively generate B2C e-tailers for business data restore fully researched relationships through resource maximizing results.', 'Facilis', 'Facilis', 'Business Growth Mangment\r\n\r\nContinually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.\r\n\r\nIntrinsicly coordinate multifunctional functionalities reliable potentialities. Objectively envisioneer high in convergence through collaborative networks. Interactively generate B2C e-tailers for business data restore fully researched relationships through resource maximizing results.', '2024-02-16 06:50:08', '2024-02-16 06:50:08'),
(3, 'Facilis', '1708086100.png', 2, 'Business Growth Mangment\r\n\r\nContinually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.\r\n\r\nIntrinsicly coordinate multifunctional functionalities reliable potentialities. Objectively envisioneer high in convergence through collaborative networks. Interactively generate B2C e-tailers for business data restore fully researched relationships through resource maximizing results.', 'Facilis', 'Facilis', 'Business Growth Mangment\r\n\r\nContinually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.\r\n\r\nIntrinsicly coordinate multifunctional functionalities reliable potentialities. Objectively envisioneer high in convergence through collaborative networks. Interactively generate B2C e-tailers for business data restore fully researched relationships through resource maximizing results.', '2024-02-16 06:51:40', '2024-02-16 06:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `industry_categories`
--

CREATE TABLE `industry_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industry_categories`
--

INSERT INTO `industry_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'anteom modo vehicula', '2024-02-16 05:11:42', '2024-02-16 05:11:42'),
(2, 'lectus honcus anteom modo vehicula', '2024-02-16 05:12:07', '2024-02-16 05:12:07'),
(3, 'admin', '2024-02-16 05:12:27', '2024-02-16 05:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_bases`
--

CREATE TABLE `knowledge_bases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowledge_bases`
--

INSERT INTO `knowledge_bases` (`id`, `title`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Facilis', '<u>DomsIT truly lives up to its reputation as the best in digital marketing. With their exceptional expertise and innovative strategies, they have taken my business to new heights. Their team is highly skilled and knowledgeable, always staying ahead of the latest trends. Working with DomsIT has been an absolute game-changer for my online presence. I cannot recommend them enough – if you\'re looking for top-notch digital marketing services, DomsIT is the way to go!</u>', 'Facilis', 'key', 'DomsIT truly lives up to its reputation as the best in digital marketing. With their exceptional expertise and innovative strategies, they have taken my business to new heights. Their team is highly skilled and knowledgeable, always staying ahead of the latest trends. Working with DomsIT has been an absolute game-changer for my online presence. I cannot recommend them enough – if you\'re looking for top-notch digital marketing services, DomsIT is the way to go!', '2024-02-18 07:03:28', '2024-02-24 05:34:15'),
(2, 'logo', 'DomsIT truly lives up to its reputation as the best in digital marketing. With their exceptional expertise and innovative strategies, they have taken my business to new heights. Their team is highly skilled and knowledgeable, always staying ahead of the latest trends. Working with DomsIT has been an absolute game-changer for my online presence. I cannot recommend them enough – if you\'re looking for top-notch digital marketing services, DomsIT is the way to go!', 'logo', 'logo1', 'DomsIT truly lives up to its reputation as the best in digital marketing. With their exceptional expertise and innovative strategies, they have taken my business to new heights. Their team is highly skilled and knowledgeable, always staying ahead of the latest trends. Working with DomsIT has been an absolute game-changer for my online presence. I cannot recommend them enough – if you\'re looking for top-notch digital marketing services, DomsIT is the way to go!', '2024-02-18 07:04:16', '2024-02-18 07:04:16'),
(3, 'Nihil saepe consequa', 'DomsIT truly lives up to its reputation as the best in digital marketing. With their exceptional expertise and innovative strategies, they have taken my business to new heights. Their team is highly skilled and knowledgeable, always staying ahead of the latest trends. Working with DomsIT has been an absolute game-changer for my online presence. I cannot recommend them enough – if you\'re looking for top-notch digital marketing services, DomsIT is the way to go!!', 'Nihil saepe consequa', 'Nam exercitation vel', 'DomsIT truly lives up to its reputation as the best in digital marketing. With their exceptional expertise and innovative strategies, they have taken my business to new heights. Their team is highly skilled and knowledgeable, always staying ahead of the latest trends. Working with DomsIT has been an absolute game-changer for my online presence. I cannot recommend them enough – if you\'re looking for top-notch digital marketing services, DomsIT is the way to go!', '2024-02-18 07:04:39', '2024-02-18 07:06:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_12_081824_add_details_to_users_table', 2),
(8, '2024_02_12_063212_create_abouts_table', 3),
(11, '2024_02_15_093533_create_sliders_table', 4),
(12, '2024_02_15_123258_create_testers_table', 5),
(13, '2024_02_16_050325_create_features_table', 6),
(14, '2024_02_16_055806_create_faqs_table', 7),
(15, '2024_02_16_064015_create_bases_table', 8),
(16, '2024_02_16_073014_create_details_table', 9),
(17, '2024_02_16_100012_create_industry_categories_table', 10),
(18, '2024_02_16_104643_create_industries_table', 11),
(19, '2024_02_17_120350_create_contacts_table', 12),
(20, '2024_02_18_121616_create_knowledge_bases_table', 13),
(21, '2024_02_20_043612_create_social_media_table', 14),
(22, '2024_02_20_054444_create_policies_table', 15),
(23, '2024_02_21_050135_create_times_table', 16),
(26, '2024_02_21_044152_create_pricings_table', 17),
(27, '2024_02_23_051111_create_registers_table', 18),
(29, '2024_02_27_051744_create_counters_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `policy` text NOT NULL,
  `terms` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `policy`, `terms`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Rajendra Sonawane\r\nHomeopathic Doctor\r\n\r\nHe seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".\r\n\r\nadmin\r\nHomeopathic Doctor\r\n\r\nHe seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".\r\n\r\nTushar Sharma\r\nOne Consultant Services, Delhi\r\n\r\nHe seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".', 'Dr. Rajendra Sonawane\r\nHomeopathic Doctor\r\n\r\nHe seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".\r\n\r\nadmin\r\nHomeopathic Doctor\r\n\r\nHe seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".\r\n\r\nTushar Sharma\r\nOne Consultant Services, Delhi\r\n\r\nHe seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".', '2024-02-20 00:44:40', '2024-02-20 00:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `staff_accounts` varchar(255) NOT NULL,
  `contacts_limit` varchar(255) NOT NULL,
  `invoice_limit` varchar(255) NOT NULL,
  `quotation_limit` varchar(255) NOT NULL,
  `project_management` varchar(255) NOT NULL,
  `recurring_transaction` varchar(255) NOT NULL,
  `inventory_module` varchar(255) NOT NULL,
  `live_chat` varchar(255) NOT NULL,
  `file_manager` varchar(255) NOT NULL,
  `online_payment` varchar(255) NOT NULL,
  `time_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `package`, `price`, `staff_accounts`, `contacts_limit`, `invoice_limit`, `quotation_limit`, `project_management`, `recurring_transaction`, `inventory_module`, `live_chat`, `file_manager`, `online_payment`, `time_id`, `created_at`, `updated_at`) VALUES
(1, 'Basic', '100', 'no', '4', 'unlimited', '9', 'no', 'no', 'no', 'no', 'yes', 'yes', 1, '2024-02-21 04:26:00', '2024-02-22 03:15:12'),
(2, 'Basic', '200', 'unlimited', '1', 'unlimited', '1', 'yes', 'no', 'yes', 'no', 'yes', 'no', 2, '2024-02-21 06:51:35', '2024-02-21 06:51:35'),
(3, 'Standard', '125', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 1, '2024-02-21 07:34:54', '2024-02-21 07:34:54'),
(4, 'Standard', '225', '1', '1', '1', '1', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 2, '2024-02-21 07:37:33', '2024-02-21 07:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `package_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `mobile_no`, `package`, `package_type`, `password`, `c_password`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'elbharabhijit@gmail.com', '8600772327', 'Standard', 'Monthly', '1234', '1234', '2024-02-23 01:25:30', '2024-02-23 01:25:30'),
(3, 'Abhi', 'elbharabhijit@gmail.com', '8600772327', 'Basic', 'Monthly', '1234', '1234', '2024-02-23 01:53:21', '2024-02-23 01:53:21'),
(4, 'Bhushan', 'elbharabhijit@gmail.com', '8600772327', 'Basic', 'Monthly', '1234', '1234', '2024-02-23 01:54:27', '2024-02-23 01:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `url`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Build Your Business Easy Solution', 'https://www.youtube.com/embed/KwpA_CvmWV0', '1708340419.png', '<p>Enim luctus sociis cum quam cubilia penatibus sodales neque tristique tempor dignissim aptent sollicitudin mattis integer magnis</p>', '2024-02-18 23:50:57', '2024-02-22 06:37:17'),
(4, 'Automate your Repair Shop Easily', NULL, '1708327528.webp', 'Enim luctus sociis cum quam cubilia penatibus sodales neque tristique tempor dignissim aptent sollicitudin mattis integer magnis', '2024-02-19 01:55:28', '2024-02-19 01:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `twitter`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/abhi.vvm?sfnsn=wiwspwa&mibextid=RUbZ1f', 'https://x.com/abhijit_elbhar?t=HfvvGDxhcQ4rgGIw6z4FIw&s=08', 'https://www.linkedin.com/in/abhijit-elbhar-586429245?utm_source=share$utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 'https://www.instagram.com/abhi_elbhar?utm_source=qr&igsh=MWdhZDgyaHN0dmR2eA==', '2024-02-19 23:56:17', '2024-02-22 06:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `testers`
--

CREATE TABLE `testers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testers`
--

INSERT INTO `testers` (`id`, `name`, `position`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tushar Sharma', 'One Consultant Services, Delhi', 'He seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".', '2024-02-15 23:20:22', '2024-02-18 07:18:04'),
(3, 'Dr. B Hake', 'Homeopathic Doctor', 'He seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".', '2024-02-15 23:22:02', '2024-02-18 07:18:17'),
(4, 'Dr. Rajendra Sonawane', 'Homeopathic Doctor', 'He seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".', '2024-02-15 23:30:35', '2024-02-15 23:30:35'),
(5, 'admin', 'Homeopathic Doctor', 'He seems to know so much that he is a good guide to us. In fact, I learned so many things from him. His honest guidance about Software Development is so profound that we are sure our software will be an ultimate one. The Best thing I feel about Devendra that he is not only a businessman but also a devoted friend who wants to earnestly help you with all his knowledge, experience and energies all the time\".', '2024-02-18 08:38:48', '2024-02-18 08:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Monthly', '2024-02-21 00:06:43', '2024-02-21 00:07:00'),
(2, 'Yearly', '2024-02-21 00:07:17', '2024-02-21 00:07:17');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user,1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'Abhi', 'elbharabhijit@gmail.com', NULL, '$2y$10$Z/al7pJyRoxjBYoCC6P0COH/.pnlRb/1z6Axl3ZXRUMk/yc/97dOO', 'jsE9Snb2zpBxCBUN52mzuZIbSIXFWqDlJ0WFEFWKX5jGffEEDIyXOiowzmfM', '2024-02-11 22:47:33', '2024-02-11 22:47:33', 1),
(2, 'Abhijit Elbhar', 'abhi@gmail.com', NULL, '$2y$10$GrqT3UJTpQEBs.TYNjl/V.Fo6IbcOM7yqfgHctcijiur02ZQQ4DSC', 'DzIFfNDfdZzGFDrNFyAbi1j2L11F4M3V1uyGxq1kbYe9zvt39GJqMQAoO9UG', '2024-02-13 01:57:58', '2024-02-13 01:57:58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bases`
--
ALTER TABLE `bases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industries_category_id_foreign` (`category_id`);

--
-- Indexes for table `industry_categories`
--
ALTER TABLE `industry_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge_bases`
--
ALTER TABLE `knowledge_bases`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricings_time_id_foreign` (`time_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testers`
--
ALTER TABLE `testers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bases`
--
ALTER TABLE `bases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industry_categories`
--
ALTER TABLE `industry_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `knowledge_bases`
--
ALTER TABLE `knowledge_bases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testers`
--
ALTER TABLE `testers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `industries`
--
ALTER TABLE `industries`
  ADD CONSTRAINT `industries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `industry_categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pricings`
--
ALTER TABLE `pricings`
  ADD CONSTRAINT `pricings_time_id_foreign` FOREIGN KEY (`time_id`) REFERENCES `times` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
