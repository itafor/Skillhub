-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 03:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'BSC', 3, '2018-11-08 08:00:00', '2018-11-21 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `skillReq` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noOfAplicant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compPhone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compEmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruitDeadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `jobdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobrequirement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobresponsibility` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobExpLevel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `skillReq`, `noOfAplicant`, `companyAddress`, `compPhone`, `compEmail`, `compName`, `gender`, `state`, `lga`, `recruitDeadline`, `expired`, `jobdescription`, `jobrequirement`, `jobresponsibility`, `jobExpLevel`, `jobTitle`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'cooking', '8', '30, Arikewoyu, Orile Iganmu, Lagos state, Nigeria,', '07065907948', 'itaforfrancis@gmail.com', 'De-Frank Tech LMT', 'Male & Female', 'Abia State', 'Aba North', '2018/12/19 12:00', 'closed', 'hgvgj', 'jvjgv', 'jgvjhgv', 'Mid Level', 'cook', 'Pending', 1, '2018-12-03 00:36:10', '2018-12-13 21:30:03'),
(2, 'PHP/MYSQL, LARAVEL, CSS, HTML5', '8', '30, Arikewoyu, Orile Iganmu, Lagos state, Nigeria,', '07065907948', 'itaforfrancis@gmail.com', 'Hotel and suit', 'Only Male', 'Abia State', '\'Ukwa West', '2018/12/12 08:05', 'closed', 'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', 'Mid Level', 'Test', 'Approved', 1, '2018-12-11 00:06:11', '2018-12-13 21:30:03'),
(4, 'Strong communication, presentation and interpersonal skills. Superior Microsoft Excel and Power Point knowledge In-depth understanding of International Financial', '32', 'Lagos, Nigeria', '08077889933', 'Noemdek@gmail.com', 'Noemdek Ltd. and Affiliate Companies', 'Male & Female', 'Abia State', '\'Ukwa West', '2018/12/25 16:40', 'closed', 'The Finance Manager will be a member of the management team and will be responsible for', 'BA / BS degree required; MSc preferred.\r\n3 - 5 years of accounting experience, with at least 2 years in an accounting role', 'Accounting\r\nVerify, allocate, post and reconcile accounts payable and receivable', 'Mid Level', 'Finance and Accounting Manager', 'Pending', 8, '2018-12-11 08:47:50', '2018-12-13 21:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `guarantors`
--

CREATE TABLE `guarantors` (
  `id` int(10) UNSIGNED NOT NULL,
  `myFullName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantorsFullName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relDuration` int(11) NOT NULL,
  `residentAddrress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameOfOrg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiremes`
--

CREATE TABLE `hiremes` (
  `id` int(10) UNSIGNED NOT NULL,
  `empName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Empdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hiremes`
--

INSERT INTO `hiremes` (`id`, `empName`, `empphone`, `empEmail`, `Empdescription`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Itafor Francis', '07065907948', 'itaforfrancis@gmail.com', 'testing', 2, '2018-11-26 05:57:50', '2018-11-26 05:57:50'),
(3, 'maths Man', '08055321458', 'mathematicsmadeasy@gmail.com', 'testing email functionality', 2, '2018-12-11 03:16:29', '2018-12-11 03:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `imageproofs`
--

CREATE TABLE `imageproofs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imageproofs`
--

INSERT INTO `imageproofs` (`id`, `name`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 'Building', '04-visonstreetwear1230.jpg', 7, '2018-11-30 16:44:43', '2018-11-30 16:44:43'),
(22, 'Wears', '67-visonstreetwear1240.jpg', 7, '2018-11-30 16:45:04', '2018-11-30 16:45:04'),
(23, 'shoe1', '50-visonstreetwear1130.jpg', 2, '2018-12-10 19:31:13', '2018-12-10 19:31:13'),
(24, 'shirt', 'travel.jpg', 2, '2018-12-10 19:31:39', '2018-12-10 19:31:39'),
(25, 'Trouzer', 'BruzWear_butterfly - Copy (2).jpg', 2, '2018-12-10 19:32:03', '2018-12-10 19:32:03'),
(26, 'Shoe', 'stock-photo-chukka-shoes-for-men-370304666.jpg', 2, '2018-12-10 19:34:14', '2018-12-10 19:34:14'),
(27, 'w shoe', '04-visonstreetwear1230.jpg', 2, '2018-12-10 19:34:43', '2018-12-10 19:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplications`
--

CREATE TABLE `jobapplications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobapplications`
--

INSERT INTO `jobapplications` (`id`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2018-12-11 03:49:33', '2018-12-11 03:49:33'),
(2, 3, 1, '2018-12-11 07:57:04', '2018-12-11 07:57:04'),
(3, 3, 4, '2018-12-11 09:09:28', '2018-12-11 09:09:28');

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
(3, '2018_11_19_171446_create_roles_table', 1),
(4, '2013_10_12_000000_create_users_table', 2),
(5, '2018_11_20_034632_create_state_lgas_table', 2),
(6, '2018_11_20_040245_create_skills_table', 2),
(7, '2018_11_20_040344_create_guarantors_table', 2),
(8, '2018_11_20_040426_create_employers_table', 2),
(9, '2018_11_20_040540_create_educations_table', 2),
(10, '2018_11_20_051053_create_hiremes_table', 2),
(11, '2012_10_12_000000_create_users_table', 3),
(12, '2018_11_22_053510_create_onlineproofs_table', 3),
(13, '2018_11_22_053547_create_imageproofs_table', 3),
(14, '2017_11_20_040245_create_skills_table', 4),
(15, '2018_11_24_010218_create_videoproof_table', 5),
(16, '2018_11_24_010218_create_videoproofs_table', 6),
(17, '2012_10_12_200000_create_users_table', 7),
(18, '2018_11_21_051053_create_hiremes_table', 8),
(19, '2017_11_20_040426_create_employers_table', 9),
(20, '2017_12_20_040426_create_employers_table', 10),
(21, '2016_12_20_040426_create_employers_table', 11),
(22, '2018_11_28_031608_create_sharedjobs_table', 11),
(23, '2018_11_29_082833_create_jobapplications_table', 12),
(24, '2015_12_20_040426_create_employers_table', 13),
(25, '2010_12_20_040426_create_employers_table', 14),
(26, '2013_11_20_040245_create_skills_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `onlineproofs`
--

CREATE TABLE `onlineproofs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onlineproofs`
--

INSERT INTO `onlineproofs` (`id`, `name`, `url`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'nairaland', 'www.nairaland.com', 7, '2018-11-30 16:43:25', '2018-11-30 16:43:25'),
(13, 'Facebook', 'www.facebook.com', 2, '2018-12-10 19:25:52', '2018-12-10 19:25:52'),
(14, 'Book Marker', 'www.bookmarker.com', 2, '2018-12-10 19:48:00', '2018-12-10 19:48:00');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Employer', '2018-11-03 07:00:00', '2018-11-22 08:00:00'),
(2, 'Applicant', '2018-11-29 08:00:00', '2018-11-13 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sharedjobs`
--

CREATE TABLE `sharedjobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `compName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sharedjobs`
--

INSERT INTO `sharedjobs` (`id`, `compName`, `jobTitle`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'De-Frank Tech LMT', 'cook', 1, 1, '2018-12-11 03:45:02', '2018-12-11 03:45:02'),
(2, 'Noemdek Ltd. and Affiliate Companies', 'Finance and Accounting Manager', 8, 4, '2018-12-11 09:00:27', '2018-12-11 09:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Programmer', 'PHP Programmer', 2, '2018-12-10 21:10:13', '2018-12-11 02:29:39'),
(4, 'Mathematics Teacher', 'I can teach both General Maths and Further Maths', 2, '2018-12-10 21:10:48', '2018-12-11 02:34:25'),
(5, 'Cook', 'I am a proffesional cook, I can cook any type of Nigerian dish', 2, '2018-12-10 21:11:26', '2018-12-10 21:12:59'),
(6, 'Writer', 'I am good writer', 2, '2018-12-12 22:21:59', '2018-12-12 22:22:38'),
(7, 'Bloger', 'i am a season bloger', 2, '2018-12-12 22:24:22', '2018-12-12 22:24:22'),
(8, 'Shoe marker', 'i can make any kind of shoe', 2, '2018-12-12 22:25:16', '2018-12-12 22:25:16'),
(9, 'Microsoft proficient', 'i can work with almost all MS parkages', 2, '2018-12-12 22:27:08', '2018-12-12 22:27:08'),
(10, 'MS Expert', 'i am good at MS parkages', 9, '2018-12-13 00:43:47', '2018-12-13 00:43:47'),
(11, 'Frontend prog', 'hgvgh', 9, '2018-12-13 00:48:18', '2018-12-13 00:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `state_lgas`
--

CREATE TABLE `state_lgas` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state_lgas`
--

INSERT INTO `state_lgas` (`id`, `state`, `lga`, `created_at`, `updated_at`) VALUES
(1, 'Abia State', 'Aba North', NULL, NULL),
(2, 'Abia State', 'Arochukwu', NULL, NULL),
(3, 'Abia State', 'Bende', NULL, NULL),
(4, 'Abia State', 'Ikwuano', NULL, NULL),
(5, 'Abia State', 'Ngwa North', NULL, NULL),
(6, 'Abia State', 'Isiala Ngwa South', NULL, NULL),
(7, 'Abia State', 'Isuikwuato', NULL, NULL),
(8, 'Abia State', 'Obi Ngwa', NULL, NULL),
(9, 'Abia State', 'Ohafia', NULL, NULL),
(10, 'Abia State', 'Osisioma', NULL, NULL),
(11, 'Abia State', 'Ugwunagbo', NULL, NULL),
(12, 'Abia State', 'Ukwa East', NULL, NULL),
(13, 'Abia State', '\'Ukwa West', NULL, NULL),
(14, 'Abia State', 'Umuahia North', NULL, NULL),
(15, 'Abia State', 'Umuahia South', NULL, NULL),
(16, 'Abia State', 'Umu Nneochi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sex`, `phone`, `address`, `role`, `photo`, `state`, `lga`, `qualification`, `about`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Itafor Francis', 'Male', '07065907948', '30, Arikewoyu, Orile Iganmu, Lagos state, Nigeria', 'Employer', NULL, 'Abia State', 'Umu Nneochi', 'Primary', '\r\n', 'Available', 'itaforfrancis@gmail.com', NULL, '$2y$10$du5mzKQNF12koR8T7unvNOi/i3yUNNhJY435NMzOuKaM7YHM.0WtO', 'dWBHJqTE5V9TA6Q0q2nwv2xW64QbDzGsEGiwOm4wc5mNsfBAb85VXax7OOkL', '2018-11-25 10:59:52', '2018-12-02 23:23:20'),
(2, 'patience Paul C', 'Female', '07067547532', '30, Arikewoyu, Orile Iganmu, Lagos state, Nigeria', 'Applicant', 'eveningdress1 - Copy.jpg', 'Abia State', 'Bende', 'Secondary', 'I am a graduate of Computer Science, I can program with PHP, MYSQL, CSS/HTML', 'Available', 'papa@gmail.com', NULL, '$2y$10$OhoUZhO1EPYMGhDmI.4QNO8RAbjapMlf0uqpjjEFjdIkMjg5BXd2m', 'CToKvMch8jFPkQeUblMrRhsV8zwZUVvxdlFt2GP01riR6ADUSN83c8VUvOrN', '2018-11-25 11:02:24', '2018-12-10 21:14:12'),
(3, 'Itafor Francis', 'Male', '07065900948', '30, Arikewoyu, Orile Iganmu, Lagos state, Nigeria', 'Applicant', 'male.png', 'Lagos', 'Aja', 'Primary', 'I am a hardworking young graduate, i am interested in programming , i can program with PHP, HTML and CSS', 'Available', 'dav@gmail.com', NULL, '$2y$10$Aez0slZUOSSdKMWAUQcI4ePbHMwHzZaojgN1scDIBsJhoZ/xth.ca', '3C33tO87cYuNhUWJUC1FxFUQQEZcSkfqBpxHcI8LQO3aQNSP1FQcC57Ta5jr', '2018-11-25 11:36:12', '2018-11-25 12:08:19'),
(4, 'Freedom fighter', 'Male', '07065907988', 'Ikorodu, Lagos Nigeria', 'Admin', NULL, NULL, NULL, NULL, NULL, 'Available', 'itaforfrancis1@gmail.com', NULL, '$2y$10$NY8ucVaXXyLQJpzxe/xpz.vMLI83gwFr8o31pKN4Fyp.Vc7cXKEpS', 'epV61XUdvYqP4MEXztBUXYzDXRGBlogE4lvB7YgAEO7vXw4RvjQmjK6jXy8g', '2018-11-26 10:57:56', '2018-11-26 10:57:56'),
(5, 'BA. BA', 'Male', '07068907948', 'Ikorodu, Lagos Nigeria', 'Employer', NULL, NULL, NULL, NULL, NULL, 'Available', 'ba@gmail.com', NULL, '$2y$10$vZQOnDW0.bK.ut60NfKy/OrConco6y1ACJGBIEuYR8YHWSrq4v3uS', NULL, '2018-11-27 09:39:56', '2018-11-27 09:39:56'),
(6, 'Abidemi A, Ababo', 'Male', '09033212312', '3, Aba RD', 'Employer', NULL, NULL, NULL, NULL, NULL, 'Available', 'abi@gmail.com', NULL, '$2y$10$GCkUeZB8u3OzNSeAYRtCr.gIkreoQgauLS8yfLpga.ec/WTl151Py', NULL, '2018-11-30 07:37:20', '2018-11-30 07:37:20'),
(7, 'Akim Dayo Ayp', 'Male', '07065907940', '30, Arikewoyu, Orile Iganmu, Lagos state, Nigeria,', 'Applicant', 'IMG_20180429_121948.jpg', 'Lagos', 'Epeh', 'Tertially', NULL, 'Available', 'akim@gmail.com', NULL, '$2y$10$BQBJJJsMFL9pzdd7K/p3POjkRdsnb56rBJ7doF7CeE.UZ0qjZxxli', 'psmMkQljNOpMfwYw3xjPqG7o3AXPrm46svZs4I7JbrRUac5zHlRJcQaDEiBT', '2018-11-30 16:22:23', '2018-11-30 16:49:07'),
(8, 'Simon Bassey B', 'Male', '09033212002', '3, Aba RD', 'Employer', NULL, NULL, NULL, NULL, NULL, 'Available', 'simon@gmail.com', NULL, '$2y$10$1RLGsB3Pl.A.7A046G5KH.5v9vIZyZpDqD/4TCsHIGE8n3lq4MkRe', 'IJj9IcUd7YXbNwi62lk5idrVl3nW0hA61dmfdxSbeGaesxT0HhQR9AI0Q8mc', '2018-12-11 08:20:25', '2018-12-11 08:20:25'),
(9, 'Bassey Agege', 'Male', '07065907941', 'Ikorodu, Lagos Nigeria', 'Applicant', 'doglick.jpg', 'Abia State', 'Arochukwu', 'Tertially', NULL, 'Available', 'bassey@gmail.com', NULL, '$2y$10$r0p7y9aqC2gszTh2TVWCS.8YTgMjQwIoIL3n0Uv9bWvJNfm1WInpu', NULL, '2018-12-13 00:04:57', '2018-12-13 00:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `videoproofs`
--

CREATE TABLE `videoproofs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videoproofs`
--

INSERT INTO `videoproofs` (`id`, `name`, `video`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'Laravel Tutorial by Dav', 'Laravel 5.5 tutorial 15 What is MVC in laravel.mp4', 3, '2018-11-25 12:12:25', '2018-11-25 12:12:25'),
(13, 'Laravel Tutorial by Dav 2', 'Laravel 5.5 tutorial   35   how to write the delete function in laravel.mp4', 3, '2018-11-25 12:16:18', '2018-11-25 12:16:18'),
(14, 'Laravel Tutor', 'Laravel 5.5 tutorial 15 What is MVC in laravel.mp4', 2, '2018-12-10 21:19:01', '2018-12-10 21:19:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educations_user_id_foreign` (`user_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employers_user_id_foreign` (`user_id`);

--
-- Indexes for table `guarantors`
--
ALTER TABLE `guarantors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guarantors_user_id_foreign` (`user_id`);

--
-- Indexes for table `hiremes`
--
ALTER TABLE `hiremes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hiremes_user_id_foreign` (`user_id`);

--
-- Indexes for table `imageproofs`
--
ALTER TABLE `imageproofs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imageproofs_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobapplications_job_id_foreign` (`job_id`),
  ADD KEY `jobapplications_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlineproofs`
--
ALTER TABLE `onlineproofs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `onlineproofs_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sharedjobs`
--
ALTER TABLE `sharedjobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sharedjobs_job_id_foreign` (`job_id`),
  ADD KEY `sharedjobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `state_lgas`
--
ALTER TABLE `state_lgas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videoproofs`
--
ALTER TABLE `videoproofs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videoproofs_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guarantors`
--
ALTER TABLE `guarantors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hiremes`
--
ALTER TABLE `hiremes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imageproofs`
--
ALTER TABLE `imageproofs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jobapplications`
--
ALTER TABLE `jobapplications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `onlineproofs`
--
ALTER TABLE `onlineproofs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sharedjobs`
--
ALTER TABLE `sharedjobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `state_lgas`
--
ALTER TABLE `state_lgas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videoproofs`
--
ALTER TABLE `videoproofs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employers`
--
ALTER TABLE `employers`
  ADD CONSTRAINT `employers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `guarantors`
--
ALTER TABLE `guarantors`
  ADD CONSTRAINT `guarantors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `hiremes`
--
ALTER TABLE `hiremes`
  ADD CONSTRAINT `hiremes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `imageproofs`
--
ALTER TABLE `imageproofs`
  ADD CONSTRAINT `imageproofs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD CONSTRAINT `jobapplications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `employers` (`id`),
  ADD CONSTRAINT `jobapplications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `onlineproofs`
--
ALTER TABLE `onlineproofs`
  ADD CONSTRAINT `onlineproofs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sharedjobs`
--
ALTER TABLE `sharedjobs`
  ADD CONSTRAINT `sharedjobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `employers` (`id`),
  ADD CONSTRAINT `sharedjobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `videoproofs`
--
ALTER TABLE `videoproofs`
  ADD CONSTRAINT `videoproofs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
