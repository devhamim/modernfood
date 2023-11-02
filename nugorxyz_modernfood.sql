-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2023 at 06:33 PM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nugorxyz_modernfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `define` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `subtitle`, `title`, `image`, `description`, `define`, `status`, `created_at`, `updated_at`) VALUES
(3, 'About Us', 'Modern Food BD', 'IwobP129622.jpg', '<p>Welcome to Modern Food, your ultimate destination for exquisite food and beverage experiences. As a premier food and beverage company, we take pride in offering a diverse range of high-quality products that cater to the unique tastes and preferences of our customers. With a commitment to excellence, we source the finest ingredients and employ innovative culinary techniques to create delectable dishes and beverages.</p><p><br></p><p>Our team of passionate chefs, food scientists, and experts is dedicated to crafting flavors that delight the senses and elevate your dining and drinking moments. We prioritize freshness, authenticity, and sustainability in every product we offer, ensuring a memorable experience for our consumers. Whether you\'re savoring our gourmet foods, indulging in our refreshing beverages, or exploring our culinary creations, you\'re embracing a journey of taste, quality, and innovation.</p><p><br></p><p>At Modern Food, we also value customer satisfaction and continuously strive to exceed your expectations. With a focus on customer-centricity, we provide exceptional service, prompt delivery, and unparalleled culinary expertise. Join us in celebrating the art of food and beverage, and let your taste buds embark on an extraordinary adventure with our delectable offerings.</p>', 1, 1, '2023-11-01 03:13:24', '2023-11-01 03:13:24'),
(4, 'About Us', 'Modern Food BD', 'RGLO1635335.jpg', '<p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\">Welcome to Modern Food, your ultimate destination for exquisite food and beverage experiences. As a premier food and beverage company, we take pride in offering a diverse range of high-quality products that cater to the unique tastes and preferences of our customers. With a commitment to excellence, we source the finest ingredients and employ innovative culinary techniques to create delectable dishes and beverages.</p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\"><br></p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\">Our team of passionate chefs, food scientists, and experts is dedicated to crafting flavors that delight the senses and elevate your dining and drinking moments. We prioritize freshness, authenticity, and sustainability in every product we offer, ensuring a memorable experience for our consumers. Whether you\'re savoring our gourmet foods, indulging in our refreshing beverages, or exploring our culinary creations, you\'re embracing a journey of taste, quality, and innovation.</p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\"><br></p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\">At Modern Food, we also value customer satisfaction and continuously strive to exceed your expectations. With a focus on customer-centricity, we provide exceptional service, prompt delivery, and unparalleled culinary expertise. Join us in celebrating the art of food and beverage, and let your taste buds embark on an extraordinary adventure with our delectable offerings.</p>', 2, 1, '2023-11-01 03:22:43', '2023-11-01 03:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `achieves`
--

CREATE TABLE `achieves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achieves`
--

INSERT INTO `achieves` (`id`, `title`, `icon`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vero ex quas anim li', 'ULPU4558391.png', '500', 1, '2023-10-29 23:22:30', '2023-10-29 23:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'XHIlj828120.jpg', 1, '2023-11-01 04:14:07', '2023-11-01 04:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `define` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title`, `tags`, `image`, `description`, `added_by`, `define`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'Unde suscipit ducimu', NULL, 'vtm8n782739.jpg', '<p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><blockquote style=\"margin-top: 27px; margin-bottom: 30px; font-size: 18px; line-height: 28px; font-style: italic; color: rgb(76, 76, 76); padding-left: 90px; position: relative; padding-right: 30px; font-family: Roboto, sans-serif;\">Agriculture is the science and art of cultivating plants and livestock. Agriculture was the key development in the rise of sedentary human.</blockquote><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><div class=\"blog-details-img\" style=\"display: flex; align-items: center; margin: 45px 0px 40px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img01.jpg\" alt=\"img\" style=\"border-style: none; margin-right: 20px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img02.jpg\" alt=\"img\" style=\"border-style: none;\"></div><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p>', 1, 2, 1, '2023-10-29 05:32:01', '2023-10-30 00:53:58'),
(2, 'unde-suscipit-ducimu-336738', 'Unde suscipit ducimu', NULL, '28T9r869738.jpg', '<p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><blockquote style=\"margin-top: 27px; margin-bottom: 30px; font-size: 18px; line-height: 28px; font-style: italic; color: rgb(76, 76, 76); padding-left: 90px; position: relative; padding-right: 30px; font-family: Roboto, sans-serif;\">Agriculture is the science and art of cultivating plants and livestock. Agriculture was the key development in the rise of sedentary human.</blockquote><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><div class=\"blog-details-img\" style=\"display: flex; align-items: center; margin: 45px 0px 40px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img01.jpg\" alt=\"img\" style=\"border-style: none; margin-right: 20px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img02.jpg\" alt=\"img\" style=\"border-style: none;\"></div><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p>', 1, 2, 1, '2023-10-29 05:40:30', '2023-10-29 05:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `blogs_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `name`, `blogs_id`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Guinevere Zimmerman', 1, 'mofuxujona@mailinator.com', 'Deserunt distinctio', '2023-10-30 01:20:58', '2023-10-30 01:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Modern Express', 'bDjTq683928.jpg', 1, '2023-11-01 04:11:32', '2023-11-01 04:11:32'),
(5, 'Modern School & College', '0dYbo253073.jpg', 1, '2023-11-01 04:12:05', '2023-11-01 04:12:05'),
(6, 'Modern Hospital', 'NVaiL488996.jpg', 1, '2023-11-01 04:12:48', '2023-11-01 04:12:48'),
(7, 'Modern Export & Important', '5vMyY479721.jpg', 1, '2023-11-01 04:13:17', '2023-11-01 04:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_messages`
--

CREATE TABLE `customer_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_messages`
--

INSERT INTO `customer_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ina Lindsey', 'fytijoco@mailinator.com', '+1 (297) 242-2658', 'Corrupti quos aliqu', 'Quaerat quis cupidat', '2023-10-30 01:29:13', '2023-10-30 01:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `customer_says`
--

CREATE TABLE `customer_says` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dealerforms`
--

CREATE TABLE `dealerforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conpany_name` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `husband_father` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `dealer_address` varchar(255) DEFAULT NULL,
  `nid_birth` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `warehouse` varchar(255) DEFAULT NULL,
  `agree` int(11) NOT NULL,
  `visiting_area` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealerforms`
--

INSERT INTO `dealerforms` (`id`, `conpany_name`, `name`, `husband_father`, `company_address`, `dealer_address`, `nid_birth`, `phone`, `email`, `warehouse`, `agree`, `visiting_area`, `created_at`, `updated_at`) VALUES
(2, 'Gannon Kirby', 'Hanna Brock', 'Proident ea consequ', 'Avila Daniels Plc', 'Amet doloremque ist', 'Eum saepe est tempor', '+1 (837) 669-5128', 'dygotabop@mailinator.com', 'Et dignissimos totam', 1, 'Voluptatem Dolor cu', '2023-10-31 04:50:18', '2023-10-31 04:50:18'),
(5, 'Alec Acosta', 'Aiko Winters', 'Velit enim cillum fu', 'Maddox and Gray Co', 'Eiusmod autem perspi', 'Blanditiis dolor est', '+1 (421) 302-4568', 'feladipiqi@mailinator.com', 'Dolor commodo cillum', 1, 'Sunt cum ut qui duci', '2023-10-31 07:08:04', '2023-10-31 07:08:04');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `address`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Office Meeting', 'hWypo862004.jpg', NULL, 1, '2023-11-01 04:22:30', '2023-11-01 04:22:30'),
(8, 'Office Meeting', 'BAOTB336220.jpg', NULL, 1, '2023-11-01 04:22:38', '2023-11-01 04:22:38'),
(9, 'Office Meeting', 'CYwx972349.jpg', NULL, 1, '2023-11-01 04:22:44', '2023-11-01 04:22:44'),
(10, 'Office Meeting', 'j2ImC562264.jpg', NULL, 1, '2023-11-01 04:22:51', '2023-11-01 04:22:51'),
(11, 'Office Meeting', 'uGlYY813498.jpg', NULL, 1, '2023-11-01 04:23:18', '2023-11-01 04:23:18'),
(12, 'Office Meeting', 'XqXzL742359.jpg', NULL, 1, '2023-11-01 04:23:31', '2023-11-01 04:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sort_desp` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `slug`, `title`, `sort_desp`, `image`, `description`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'et-eiusmod-voluptati-599039', 'Farming Has A Banking Problem Crop', 'Whereby farming was the key development in the rise of sedentary human civilization, whereby farming domesticated specie available, but the majory have suffered alteration in some form but the majority have suffered alteration Ipsum versions have evolved some injected or words.', 'hI65Y956826.jpg', '<span style=\"color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Whereby farming was the key development in the rise of sedentary human civilization, whereby farming domesticated specie available, but the majory have suffered alteration in some form but the majority have suffered alteration Ipsum versions have evolved some injected or words.</span><span style=\"color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Whereby farming was the key development in the rise of sedentary human civilization, whereby farming domesticated specie available, but the majory have suffered alteration in some form but the majority have suffered alteration Ipsum versions have evolved some injected or words.</span>', 1, 1, '2023-10-30 01:56:15', '2023-10-30 05:21:21');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_16_091028_create_settings_table', 1),
(7, '2023_10_18_120350_create_features_table', 1),
(8, '2023_10_19_053423_create_abouts_table', 1),
(9, '2023_10_19_074934_create_teams_table', 1),
(10, '2023_10_19_090648_create_customer_says_table', 1),
(11, '2023_10_19_095341_create_clients_table', 1),
(12, '2023_10_19_103509_create_portfolios_table', 1),
(13, '2023_10_21_054156_create_blogs_table', 1),
(14, '2023_10_23_060741_create_services_table', 1),
(15, '2023_10_23_065009_create_pricings_table', 1),
(16, '2023_10_23_073730_create_privacy_policies_table', 1),
(17, '2023_10_25_052005_create_galleries_table', 1),
(18, '2023_10_25_055948_create_achieves_table', 1),
(19, '2023_10_25_070628_create_customer_messages_table', 1),
(20, '2023_10_28_054429_create_banners_table', 1),
(21, '2023_10_29_050538_create_blog_comments_table', 1),
(22, '2023_10_30_052550_create_products_table', 2),
(24, '2023_10_30_073843_create_media_table', 3),
(25, '2023_10_31_053006_create_videos_table', 4),
(26, '2023_10_31_101022_create_dealerforms_table', 5),
(27, '2023_10_31_101055_create_visitingareas_table', 5);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `completed` int(11) NOT NULL DEFAULT 1,
  `define` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<div style=\"color: rgb(204, 204, 204); background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: #9cdcfe;\">privacyPolicy</span></div>', '2023-10-30 05:55:06', '2023-10-30 05:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `define` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `image`, `description`, `define`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Morden Soyabean oil', '1kg', 'AL0so103411.jpg', NULL, 2, 1, '2023-10-29 23:45:17', '2023-11-01 06:04:03'),
(3, 'Sorishar Oil', '25 m', 'ck1EX710898.jpg', NULL, 2, 1, '2023-10-29 23:45:26', '2023-11-01 06:03:45'),
(4, 'Mordent Super Salt', '1kg', 'la4jK799959.jpg', NULL, 2, 1, '2023-10-29 23:45:39', '2023-11-01 06:02:52'),
(5, 'Chinigura Chal', '1Kg', 'TZUWk634322.jpg', NULL, 2, 1, '2023-10-29 23:53:26', '2023-11-01 06:03:07'),
(6, 'Soyabean oil', '5 Letter', 'FytxZ556755.jpg', NULL, 2, 1, '2023-11-01 05:42:52', '2023-11-01 06:03:30'),
(7, 'Masquito coil', '1 Pack', 'Fvc74585138.jpg', NULL, 1, 1, '2023-11-01 06:13:10', '2023-11-01 06:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_desp` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `footer` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `about`, `number`, `logo`, `footer_logo`, `favicon`, `address`, `footer`, `title`, `meta_title`, `meta_tag`, `meta_description`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 'Modern Food', 'moderfood@gmail.com', 'We are a leading food and beverage company dedicated to providing high-quality products and exceptional culinary experiences for customers worldwide.', '0969610240', 'nNH5c23350.png', 'TBs0y93025.png', 'XJqhD906983.png', 'Abdul  Lotif Member Market Borowa Khilkhet Dhaka-1229', '© 2023 Copyright Modern Food |', 'Modern Food BD', 'Food and beverage company in Bangladesh', NULL, NULL, 'https://www.facebook.com/modernfoodproducts/mentions', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-01 03:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `image`, `facebook`, `instagram`, `linkedin`, `github`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Harlan Maldonado', 'Amet a ipsum conseq', 'xxu6e627573.jpg', 'Pariatur Cillum nih', 'Quo facilis velit l', 'Omnis laborum volupt', 'Fugiat sit do susci', 1, '2023-10-29 05:53:54', '2023-10-29 05:53:54'),
(2, 'Keefe Ross', 'Rem temporibus asper', 'DnoN2468884.png', 'Libero omnis suscipi', 'Mollit voluptatem r', 'Omnis eiusmod nemo a', 'Earum vero sed verit', 1, '2023-10-29 05:54:01', '2023-10-29 05:54:01'),
(3, 'Beck Burgess', 'Voluptas debitis max', 'PeQD8900830.png', 'Dicta ducimus commo', 'Voluptatibus sed mol', 'Consectetur iste ad', 'Labore non aut aperi', 1, '2023-10-30 06:48:01', '2023-10-30 06:48:01'),
(4, 'Valentine Curtis', 'Eaque nulla asperior', 'PX4Z8158221.png', 'Architecto sint omni', 'Non non soluta omnis', 'Quam minim voluptate', 'Minima et odit elige', 1, '2023-10-30 06:48:09', '2023-10-30 06:48:09'),
(5, 'Zoe Byrd', 'Ipsa placeat eu ea', 'O64gN28653.png', 'Incididunt alias ame', 'Placeat et minus et', 'Debitis sit adipisi', 'Maxime fugiat tempo', 1, '2023-10-30 06:48:31', '2023-10-30 06:48:31');

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
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hamim', 'hamim@gmail.com', NULL, '$2y$10$fEBeyhM6WU0pqWJrHfYufeILnOas/oG9ejohK0wYNEuN5.1yb/bgm', NULL, NULL, NULL, NULL),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$YfHCl3./6wg8FtFUK6JeU.L8vbfrZIEyMleW2HJXSCK3xd1Aiv91S', NULL, NULL, '2023-11-01 01:02:41', '2023-11-01 01:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'If are interstate apply for dealership', 'https://www.youtube.com/watch?v=SJxu4paAjwY', 'eWgTD774548.jpg', 1, '2023-10-30 23:40:58', '2023-11-01 06:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `visitingareas`
--

CREATE TABLE `visitingareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealerform_id` varchar(255) NOT NULL,
  `sl` varchar(255) DEFAULT NULL,
  `visiting_company_name` varchar(255) DEFAULT NULL,
  `visiting_product` varchar(255) DEFAULT NULL,
  `monthly_sell` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitingareas`
--

INSERT INTO `visitingareas` (`id`, `dealerform_id`, `sl`, `visiting_company_name`, `visiting_product`, `monthly_sell`, `created_at`, `updated_at`) VALUES
(7, '2', 'Sit possimus a des', 'Buck and Gill Traders', 'Aut alias quasi nost', '1', '2023-10-31 05:48:39', '2023-10-31 05:48:39'),
(8, '2', 'Exercitationem autem', 'Holder Holman Inc', 'Suscipit doloremque', '12', '2023-10-31 05:48:39', '2023-10-31 05:48:39'),
(9, '2', 'Quia impedit repreh', 'Copeland Roy Inc', 'Dolor ducimus amet', '8', '2023-10-31 05:48:39', '2023-10-31 05:48:39'),
(13, '5', NULL, NULL, NULL, NULL, '2023-10-31 07:08:04', '2023-10-31 07:08:04'),
(14, '5', NULL, NULL, NULL, NULL, '2023-10-31 07:08:04', '2023-10-31 07:08:04'),
(15, '5', NULL, NULL, NULL, NULL, '2023-10-31 07:08:04', '2023-10-31 07:08:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achieves`
--
ALTER TABLE `achieves`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_messages`
--
ALTER TABLE `customer_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_says`
--
ALTER TABLE `customer_says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealerforms`
--
ALTER TABLE `dealerforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitingareas`
--
ALTER TABLE `visitingareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `achieves`
--
ALTER TABLE `achieves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_messages`
--
ALTER TABLE `customer_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_says`
--
ALTER TABLE `customer_says`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealerforms`
--
ALTER TABLE `dealerforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitingareas`
--
ALTER TABLE `visitingareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
