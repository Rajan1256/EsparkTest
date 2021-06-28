-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2021 at 02:50 PM
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
-- Database: `jobdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_application_id` bigint(20) UNSIGNED NOT NULL,
  `ssc_name_of_board` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_passing_year` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_percentage` double(8,2) NOT NULL,
  `hsc_name_of_board` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_passing_year` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_percentage` double(8,2) NOT NULL,
  `beachelor_course_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beachelor_university` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beachelor_passing_year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beachelor_percentage` double(8,2) DEFAULT NULL,
  `master_course_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_university` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_passing_year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_percentage` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `job_application_id`, `ssc_name_of_board`, `ssc_passing_year`, `ssc_percentage`, `hsc_name_of_board`, `hsc_passing_year`, `hsc_percentage`, `beachelor_course_name`, `beachelor_university`, `beachelor_passing_year`, `beachelor_percentage`, `master_course_name`, `master_university`, `master_passing_year`, `master_percentage`, `created_at`, `updated_at`) VALUES
(3, 10, 'SSc GH Board', '2002', 67.00, 'HSC CH Board', '2006', 88.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-28 07:20:28'),
(4, 11, 'T1', '2012', 67.00, 'T2', '2015', 78.00, 'T3', 'ssp', '2016', 66.00, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 0,
  `zip_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship_status` tinyint(4) NOT NULL DEFAULT 0,
  `date_of_birth` date NOT NULL,
  `language` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technologies` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_contacts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_relation` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefered_locations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_period` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expacted_ctc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_ctc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `first_name`, `last_name`, `designation`, `address1`, `email`, `address2`, `phone_number`, `city`, `state`, `gender`, `zip_code`, `relationship_status`, `date_of_birth`, `language`, `technologies`, `reference_name`, `reference_contacts`, `reference_relation`, `prefered_locations`, `notice_period`, `expacted_ctc`, `current_ctc`, `department`, `created_at`, `updated_at`) VALUES
(10, 'Niranjan', 'vyas', 'Sr. Developer', 'Surat', 'nj@www.com', 'Gujarat', '234234234', 'Surat', 1, 1, '394107', 2, '1995-02-04', '[[\"1\",\"3\"],[\"1\",\"2\"],[\"1\",\"3\"]]', '[{\"programinglangmysql\":1,\"phpbiginer\":\"2\"},{\"programinglangmysql\":1,\"mysqlbiginerdata1\":null},{\"programinglanglaravel\":1,\"laravelbiginerdata1\":null}]', 'TS', '12345678', 'Brother', '2', '12345678', '12345678', '12345678', 2, NULL, '2021-06-28 07:20:28'),
(11, 'Minesh', 'Rama', 'Sr. manager', 'Mumbai', 'mj@www.com', 'Mumbai', '4667867867', 'Mumnai', 2, 0, '123456', 2, '2021-06-10', '[[\"1\",\"2\"],[\"1\",\"4\"],[\"1\",\"2\",\"3\"]]', '[{\"programinglangmysql\":1,\"phpbiginer\":\"1\"},{\"programinglangmysql\":1,\"mysqlbiginerdata1\":null},{\"programinglanglaravel\":1,\"laravelbiginerdata1\":null}]', NULL, NULL, NULL, '2', '2 months', '40000', '50000', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_06_24_054744_create_job_applications_table', 1),
(2, '2021_06_24_054814_create_admins_table', 1),
(3, '2021_06_24_060453_create_education_details_table', 1),
(4, '2021_06_24_063600_create_word_experiences_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `word_experiences`
--

CREATE TABLE `word_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_application_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `word_experiences`
--

INSERT INTO `word_experiences` (`id`, `job_application_id`, `company_name`, `designation`, `from_date`, `to_date`, `created_at`, `updated_at`) VALUES
(1, 10, '[\"Test1\",\"Test2\",\"Test#\"]', '[\"Jr. Developer\",\"Sr. Developer\",\"Sr. Developer\"]', '[\"2018-01-01\",\"2019-01-01\",\"2020-02-28\"]', '[\"2018-01-01\",\"2019-01-01\",\"2020-02-28\"]', NULL, '2021-06-28 07:20:28'),
(2, 11, '[\"Data Company\"]', '[\"Sr. Manager\"]', '[\"2020-01-28\"]', '[\"2021-06-01\"]', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_details_job_application_id_foreign` (`job_application_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word_experiences`
--
ALTER TABLE `word_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `word_experiences_job_application_id_foreign` (`job_application_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `word_experiences`
--
ALTER TABLE `word_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education_details`
--
ALTER TABLE `education_details`
  ADD CONSTRAINT `education_details_job_application_id_foreign` FOREIGN KEY (`job_application_id`) REFERENCES `job_applications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `word_experiences`
--
ALTER TABLE `word_experiences`
  ADD CONSTRAINT `word_experiences_job_application_id_foreign` FOREIGN KEY (`job_application_id`) REFERENCES `job_applications` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
