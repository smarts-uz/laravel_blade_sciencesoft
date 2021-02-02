-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2021 at 08:08 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_lang` json DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_lang` json DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_blade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name`, `name_lang`, `description`, `description_lang`, `icon`, `image`, `path_blade`, `link`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'About', NULL, 'ScienceSoft is a US-based IT consulting and software development company founded in 1989. We are a team of 700 employees, including technical experts and BAs.', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(2, NULL, 'Services', NULL, 'We handle complex business challenges building all types of custom and platform-based solutions and providing a comprehensive set of end-to-end IT services.', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(3, NULL, 'Industries', NULL, 'To power businesses with a meaningful digital change, ScienceSoft’s team maintains a solid knowledge of trends, needs and challenges in more than 20 industries.', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(4, 1, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(5, 4, 'About Company', NULL, NULL, NULL, NULL, NULL, 'about.company.about_company', NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(6, 4, 'Management Team', NULL, NULL, NULL, NULL, NULL, 'about.company.management_team', NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(7, 4, 'Careers', NULL, NULL, NULL, NULL, NULL, 'about.company.careers', NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(8, 4, 'Partnerships', NULL, NULL, NULL, NULL, NULL, 'about.company.partnerships', NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(9, 4, 'Sciencesoft Referral Program', NULL, NULL, NULL, NULL, NULL, 'about.company.sciencesoft_referall_program', NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(10, 4, 'Our Locations', NULL, NULL, NULL, NULL, NULL, 'about.company.our_locations', NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(11, 1, 'Approach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:09', '2021-02-02 00:04:09'),
(12, 11, 'Development Process', NULL, NULL, NULL, NULL, NULL, 'about.approach.development_process', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(13, 11, 'Sustainability Policy', NULL, NULL, NULL, NULL, NULL, 'about.approach.sustainability_policy', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(14, 11, 'Privacy Policy', NULL, NULL, NULL, NULL, NULL, 'about.approach.privacy_policy', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(15, 11, 'Terms of Use', NULL, NULL, NULL, NULL, NULL, 'about.approach.terms_of_use', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(16, 1, 'Recognition', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(17, 16, 'Testimonials', NULL, NULL, NULL, NULL, NULL, 'about.recognition.testimonials', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(18, 16, 'Awards and Acknowledgements', NULL, NULL, NULL, NULL, NULL, 'about.recognition.awards_and_acknowledgements', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(19, 16, 'Press Room', NULL, NULL, NULL, NULL, NULL, 'about.recognition.press_room', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(20, 16, 'News', NULL, NULL, NULL, NULL, NULL, 'about.recognition.news', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(21, 2, 'Service Types', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(22, 21, 'Testing and QA', NULL, NULL, NULL, NULL, NULL, 'services.service_types.testing_and_qa', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(23, 21, 'Application Services', NULL, NULL, NULL, NULL, NULL, 'services.service_types.application_services', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(24, 21, 'UI/UX Design', NULL, NULL, NULL, NULL, NULL, 'services.service_types.ui_ux_design', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(25, 21, 'Infrastructure Services', NULL, NULL, NULL, NULL, NULL, 'services.service_types.infrastructure_services', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(26, 21, 'Managed IT Services', NULL, NULL, NULL, NULL, NULL, 'services.service_types.managed_it_services', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(27, 21, 'IT Outsourcing', NULL, NULL, NULL, NULL, NULL, 'services.service_types.it_outsourcing', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(28, 21, 'IT Consulting', NULL, NULL, NULL, NULL, NULL, 'services.service_types.it_consulting', NULL, 1, NULL, '2021-02-02 00:04:10', '2021-02-02 00:04:10'),
(29, 21, 'IT Support', NULL, NULL, NULL, NULL, NULL, 'services.service_types.it_support', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(30, 2, 'Solutions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(31, 30, 'Data Analytics', NULL, NULL, NULL, NULL, NULL, 'services.solutions.data_analytics', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(32, 30, 'CRM', NULL, NULL, NULL, NULL, NULL, 'services.solutions.CRM', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(33, 30, 'Cybersecurity', NULL, NULL, NULL, NULL, NULL, 'services.solutions.cyber_security', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(34, 30, 'Internet of Things', NULL, NULL, NULL, NULL, NULL, 'services.solutions.internet_of_things', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(35, 30, 'Virtual Reality', NULL, NULL, NULL, NULL, NULL, 'services.solutions.virtual_reality', NULL, 0, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(36, 30, 'Image Analysis', NULL, NULL, NULL, NULL, NULL, 'services.solutions.image_analysis', NULL, 0, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(37, 30, 'Web Portals', NULL, NULL, NULL, NULL, NULL, 'services.solutions.web_portals', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(38, 30, 'Ecommerce', NULL, NULL, NULL, NULL, NULL, 'services.solutions.ecommerce', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(39, 30, 'Fleet Management', NULL, NULL, NULL, NULL, NULL, 'services.solutions.fleet_management', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(40, 2, 'Platforms', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(41, 40, 'SharePoint and Office 365', NULL, NULL, NULL, NULL, NULL, 'services.platforms.share_point_office_365', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(42, 40, 'Microsoft Dynamics 365', NULL, NULL, NULL, NULL, NULL, 'services.platforms.microsoft_dynamics_365', NULL, 1, NULL, '2021-02-02 00:04:11', '2021-02-02 00:04:11'),
(43, 40, 'Microsoft Power BI', NULL, NULL, NULL, NULL, NULL, 'services.platforms.microsoft_power_bi', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(44, 40, 'Salesforce', NULL, NULL, NULL, NULL, NULL, 'services.platforms.salesforce', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(45, 40, 'Magento', NULL, NULL, NULL, NULL, NULL, 'services.platforms.magento', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(46, 40, 'Service Now', NULL, NULL, NULL, NULL, NULL, 'services.platforms.service_now', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(47, 2, 'Technologies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(48, 47, 'Java', NULL, NULL, NULL, NULL, NULL, 'services.technologies.java', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(49, 47, '.NET', NULL, NULL, NULL, NULL, NULL, 'services.technologies.net', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(50, 47, 'PHP', NULL, NULL, NULL, NULL, NULL, 'services.technologies.PHP', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(51, 47, 'Python', NULL, NULL, NULL, NULL, NULL, 'services.technologies.python', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(52, 47, 'Golang', NULL, NULL, NULL, NULL, NULL, 'services.technologies.golang', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(53, 47, 'C++', NULL, NULL, NULL, NULL, NULL, 'services.technologies.cPlus', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(54, 47, 'Configure Your Team', NULL, NULL, NULL, NULL, NULL, 'services.technologies.configure_your_team', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(55, 3, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(56, 55, 'Healthcare', NULL, NULL, NULL, NULL, NULL, 'industries.healthcare', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(57, 55, 'Banking and Financial Services', NULL, NULL, NULL, NULL, NULL, 'industries.banking_financial_services', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(58, 55, 'Retail', NULL, NULL, NULL, NULL, NULL, 'industries.retail', NULL, 1, NULL, '2021-02-02 00:04:12', '2021-02-02 00:04:12'),
(59, 55, 'Ecommerce', NULL, NULL, NULL, NULL, NULL, 'industries.ecommerce', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(60, 55, 'Manufacturing', NULL, NULL, NULL, NULL, NULL, 'industries.manufacturing', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(61, 55, 'Marketing & Advertising', NULL, NULL, NULL, NULL, NULL, 'industries.market_advertising', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(62, 55, 'Telecommunications', NULL, NULL, NULL, NULL, NULL, 'industries.telecommunications', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(63, 55, 'eLearning', NULL, NULL, NULL, NULL, NULL, 'industries.elearning', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(64, 55, 'Transportation and Logistics', NULL, NULL, NULL, NULL, NULL, 'industries.transportation_logistics', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(65, 55, 'Oil & Gas', NULL, NULL, NULL, NULL, NULL, 'industries.oil_gas', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(66, 55, 'Professional Services', NULL, NULL, NULL, NULL, NULL, 'industries.professional_services', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13'),
(67, 55, 'Insurance', NULL, NULL, NULL, NULL, NULL, 'industries.insurance', NULL, 1, NULL, '2021-02-02 00:04:13', '2021-02-02 00:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_30_061151_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bekzod Erkinov', 'erkinovbegzod.45@gmail.com', NULL, '$2y$10$u79A0jZUWHHM2gx0U5OwD.1CaqpHvx5IUCRZs3k009/E.scHfHIRe', NULL, '2021-02-02 00:05:08', '2021-02-02 00:05:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
