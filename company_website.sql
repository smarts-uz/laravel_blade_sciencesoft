-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2021 at 11:27 PM
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
-- Database: `teamproweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `tag` json DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `tag`, `image`, `title`, `description`, `description_text`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, '{\"category\": [\"Programming\"]}', '1612854802.jpeg', 'programming languages that we use', 'dsafsedfdsgssdgdfsg', '<p>sfdsfdsfgfdbdfgsdgsdfsf</p>', NULL, '2021-02-09 02:13:23', '2021-02-12 02:10:24'),
(2, NULL, '{\"category\": [\"Php\", \"Laravel\"]}', '1612934383.jpg', 'Php', 'Phphphphphphphphphp', '<p>qwer</p>', NULL, '2021-02-10 00:19:43', '2021-02-12 02:11:17'),
(3, NULL, NULL, '1613195345.png', 'Title', 'DescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescription', '<p>asdffgghjh</p>', NULL, '2021-02-13 00:49:05', '2021-02-13 00:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `card_lists`
--

CREATE TABLE `card_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `card_lists`
--

INSERT INTO `card_lists` (`id`, `image`, `title`, `sub_title`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'fsldfnso.png', 'skdnmgiksndg', ' asdfdsafasdfdsaf asdfdsafasdfdsaf asdfdsaf', 'asdfdsaf asdfdsa asdfdsaff asdfdsaf asdfdsafasdfdsaf asdfdsaf', NULL, NULL, NULL),
(2, 'fsldfnso.png', 'skdnmgiksndg', ' asdfdsafasdfdsaf asdfdsafasdfdsaf asdfdsaf', 'asdfdsaf asdfdsa asdfdsaff asdfdsaf asdfdsafasdfdsaf asdfdsaf', NULL, NULL, NULL),
(3, 'sdfsdf.png', 'asdfdsaf asdfdsaf', 'asdfdsaf asdfdsaf asdfdsaf ', 'asdfdsaf asdfdsafasdfdsaf asdfdsaf asdfdsafasdfdsaf asdfdsaf asdfdsaf', '2021-02-13 00:43:40', NULL, '2021-02-13 00:43:40'),
(4, 'sdfsdf.png', 'asdfdsaf asdfdsaf', 'asdfdsaf asdfdsaf asdfdsaf ', 'asdfdsaf asdfdsafasdfdsaf asdfdsaf asdfdsafasdfdsaf asdfdsaf asdfdsaf', '2021-02-13 00:43:43', NULL, '2021-02-13 00:43:43'),
(5, 'asfasf.png', 'asdfdsaf ', 'asdfdsaf asdfdsaf', 'asdfdsaf asdfdsafasdfdsaf asdfdsaf asdfdsaf asdfdsaf asdfdsaf asdfdsaf', NULL, NULL, NULL),
(6, 'asfasf.png', 'asdfdsaf ', 'asdfdsaf asdfdsaf', 'asdfdsaf asdfdsafasdfdsaf asdfdsaf asdfdsaf asdfdsaf asdfdsaf asdfdsaf', NULL, NULL, NULL),
(7, '1613199134.png', 'qwerdtfygfgdfdssd', 'dfdgzgfbxzfsfv', 'SDVVSDvdsvzdvxdv', NULL, '2021-02-13 01:52:14', '2021-02-13 01:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_lang` json DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_lang` json DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_blade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name`, `name_lang`, `description`, `description_lang`, `icon`, `image`, `path_blade`, `link`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'About', NULL, 'ScienceSoft is a US-based  IT consulting and software development company founded in 1989. We are a team of 700 employees, including technical experts and BAs.', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-10 01:53:11'),
(2, NULL, 'Services', NULL, 'We handle complex business challenges building all types of custom and platform-based solutions and providing a comprehensive set of end-to-end IT services.', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(3, NULL, 'Industries', NULL, 'To power businesses with a meaningful digital change, ScienceSoft’s team maintains a solid knowledge of trends, needs and challenges in more than 20 industries.', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(4, 1, 'Company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(5, 4, 'About Company', NULL, NULL, NULL, NULL, NULL, 'about.company.about_company', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(6, 4, 'Management Team', NULL, NULL, NULL, NULL, NULL, 'about.company.management_team', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(7, 4, 'Careers', NULL, NULL, NULL, NULL, NULL, 'about.company.careers', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(8, 4, 'Partnerships', NULL, NULL, NULL, NULL, NULL, 'about.company.partnerships', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(9, 4, 'Sciencesoft Referral Program', NULL, NULL, NULL, NULL, NULL, 'about.company.sciencesoft_referral_program', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(10, 4, 'Our Locations', NULL, NULL, NULL, NULL, NULL, 'about.company.our_locations', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(11, 1, 'Approach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(12, 11, 'Development Process', NULL, NULL, NULL, NULL, NULL, 'about.approach.development_process', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(13, 11, 'Sustainability Policy', NULL, NULL, NULL, NULL, NULL, 'about.approach.sustainability_policy', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(14, 11, 'Privacy Policy', NULL, NULL, NULL, NULL, NULL, 'about.approach.privacy_policy', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(15, 11, 'Terms of Use', NULL, NULL, NULL, NULL, NULL, 'about.approach.terms_of_use', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(16, 1, 'Recognition', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(17, 16, 'Testimonials', NULL, NULL, NULL, NULL, NULL, 'about.recognition.testimonials', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(18, 16, 'Awards and Acknowledgements', NULL, NULL, NULL, NULL, NULL, 'about.recognition.awards_and_acknowledgements', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(19, 16, 'Press Room', NULL, NULL, NULL, NULL, NULL, 'about.recognition.press_room', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(20, 16, 'News', NULL, NULL, NULL, NULL, NULL, 'about.recognition.news', NULL, 1, NULL, '2021-02-09 01:35:15', '2021-02-09 01:35:15'),
(21, 2, 'Service Types', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(22, 21, 'Testing and QA', NULL, NULL, NULL, NULL, NULL, 'services.service_types.testing_and_qa', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(23, 21, 'Application Services', NULL, NULL, NULL, NULL, NULL, 'services.service_types.application_services', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(24, 21, 'UI/UX Design', NULL, NULL, NULL, NULL, NULL, 'services.service_types.ui_ux_design', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(25, 21, 'Infrastructure Services', NULL, NULL, NULL, NULL, NULL, 'services.service_types.infrastructure_services', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(26, 21, 'Managed IT Services', NULL, NULL, NULL, NULL, NULL, 'services.service_types.managed_it_services', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(27, 21, 'IT Outsourcing', NULL, NULL, NULL, NULL, NULL, 'services.service_types.it_outsourcing', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(28, 21, 'IT Consulting', NULL, NULL, NULL, NULL, NULL, 'services.service_types.it_consulting', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(29, 21, 'IT Support', NULL, NULL, NULL, NULL, NULL, 'services.service_types.it_support', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(30, 2, 'Solutions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(31, 30, 'Data Analytics', NULL, NULL, NULL, NULL, NULL, 'services.solutions.data_analytics', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(32, 30, 'CRM', NULL, NULL, NULL, NULL, NULL, 'services.solutions.CRM', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(33, 30, 'Cybersecurity', NULL, NULL, NULL, NULL, NULL, 'services.solutions.cyber_security', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(34, 30, 'Internet of Things', NULL, NULL, NULL, NULL, NULL, 'services.solutions.internet_of_things', NULL, 1, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(35, 30, 'Virtual Reality', NULL, NULL, NULL, NULL, NULL, 'services.solutions.virtual_reality', NULL, 0, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(36, 30, 'Image Analysis', NULL, NULL, NULL, NULL, NULL, 'services.solutions.image_analysis', NULL, 0, NULL, '2021-02-09 01:35:16', '2021-02-09 01:35:16'),
(37, 30, 'Web Portals', NULL, NULL, NULL, NULL, NULL, 'services.solutions.web_portals', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(38, 30, 'Ecommerce', NULL, NULL, NULL, NULL, NULL, 'services.solutions.ecommerce', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(39, 30, 'Fleet Management', NULL, NULL, NULL, NULL, NULL, 'services.solutions.fleet_management', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(40, 2, 'Platforms', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(47, 2, 'Technologies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(48, 47, 'Java', NULL, NULL, NULL, NULL, NULL, 'services.technologies.java', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(49, 47, '.NET', NULL, NULL, NULL, NULL, NULL, 'services.technologies.net', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(50, 47, 'PHP', NULL, NULL, NULL, NULL, NULL, 'services.technologies.PHP', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(51, 47, 'Python', NULL, NULL, NULL, NULL, NULL, 'services.technologies.python', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(52, 47, 'Golang', NULL, NULL, NULL, NULL, NULL, 'services.technologies.golang', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(53, 47, 'C++', NULL, NULL, NULL, NULL, NULL, 'services.technologies.cPlus', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(54, 47, 'Configure Your Team', NULL, NULL, NULL, NULL, NULL, 'services.technologies.configure_your_team', NULL, 1, NULL, '2021-02-09 01:35:17', '2021-02-09 01:35:17'),
(55, 3, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(56, 55, 'Healthcare', NULL, NULL, NULL, NULL, NULL, 'industries.healthcare', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(57, 55, 'Banking and Financial Services', NULL, NULL, NULL, NULL, NULL, 'industries.banking_financial_services', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(58, 55, 'Retail', NULL, NULL, NULL, NULL, NULL, 'industries.retail', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(59, 55, 'Ecommerce', NULL, NULL, NULL, NULL, NULL, 'industries.ecommerce', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(60, 55, 'Manufacturing', NULL, NULL, NULL, NULL, NULL, 'industries.manufacturing', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(61, 55, 'Marketing & Advertising', NULL, NULL, NULL, NULL, NULL, 'industries.market_advertising', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(62, 55, 'Telecommunications', NULL, NULL, NULL, NULL, NULL, 'industries.telecommunications', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(63, 55, 'eLearning', NULL, NULL, NULL, NULL, NULL, 'industries.elearning', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(64, 55, 'Transportation and Logistics', NULL, NULL, NULL, NULL, NULL, 'industries.transportation_logistics', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(65, 55, 'Oil & Gas', NULL, NULL, NULL, NULL, NULL, 'industries.oil_gas', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(66, 55, 'Professional Services', NULL, NULL, NULL, NULL, NULL, 'industries.professional_services', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(67, 55, 'Insurance', NULL, NULL, NULL, NULL, NULL, 'industries.insurance', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(68, NULL, 'Blog', NULL, NULL, NULL, NULL, NULL, 'blog', NULL, 1, NULL, '2021-02-09 01:35:18', '2021-02-09 01:35:18'),
(69, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-02-09 04:33:08', '2021-02-09 01:49:31', '2021-02-09 04:33:08'),
(70, 8, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-02-09 04:33:13', '2021-02-09 04:32:17', '2021-02-09 04:33:13'),
(71, 8, 'dwadawd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-02-09 04:59:00', '2021-02-09 04:58:45', '2021-02-09 04:59:00'),
(72, 8, 'Mic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-02-09 05:03:10', '2021-02-09 05:02:42', '2021-02-09 05:03:10'),
(73, 8, 'Microsoft Partner', NULL, 'ScienceSoft has been a member of the Microsoft Partner Network since November 2008. The company is a Microsoft Gold Competency Partner and holds eight competencies recognizing technical expertise in consulting and selling Microsoft products and technologies worldwide: Gold Application Development, Gold Application Integration, Gold Collaboration and Content, Gold Data Analytics, Gold Data Platform, Gold Datacenter, Gold Cloud Platform and Gold Messaging. ScienceSoft’s particular focus is Microsoft Dynamics 365 (formerly Dynamics CRM) with 10 experts on board and 15 projects delivered for corporations in Healthcare, Retail, Telecom, Banking, Oil & Gas and other industries.', NULL, '1612865191.svg', '1612865191.png', NULL, NULL, 0, NULL, '2021-02-09 05:06:31', '2021-02-09 05:06:31'),
(74, 8, 'aws', NULL, 'ScienceSoft is an AWS Consulting Partner since 2017 and is included in the AWS Select tier. With AWS-accredited solutions architects, technical professionals and SysOps administrators on-board, we carry out comprehensive AWS managed services. ScienceSoft has implemented an array of AWS-based projects, delivering business applications, databases and data warehouses, digital marketing solutions, IoT infrastructures, big data processing and analytics solutions.', NULL, '1612865402.svg', '1612865402.svg', NULL, NULL, 1, NULL, '2021-02-09 05:10:02', '2021-02-09 05:10:02'),
(75, 8, 'Oracle', NULL, 'An Oracle Partner since 2007, ScienceSoft provides end-to-end business intelligence solutions, including data warehouse implementation, predictive analytics, reporting, OLAP and visualization.', NULL, '1612865846.svg', '1612865846.svg', NULL, NULL, 1, NULL, '2021-02-09 05:17:26', '2021-02-09 05:17:26'),
(76, 8, 'IBM', NULL, 'ScienceSoft, IBM Silver Business Partner, has been working in Security Intelligence together with IBM for 16 years. We have been creating IBM TSIEM/TCIM and TSOM products and co-developed IBM’s official TSIEM to QRadar migration guide. Since 2011 ScienceSoft has been working on SIEM projects in North America, Europe, the Middle East and Africa. In addition to that, we launched a QRadar anti-fraud solution for banking and released a QLEAN (aka Health Check Framework) for IBM QRadar SIEM.', NULL, '1612865992.svg', '1612865992.svg', NULL, NULL, 1, NULL, '2021-02-09 05:19:52', '2021-02-09 05:19:52'),
(77, 8, 'Partnet', NULL, 'ScienceSoft has been running ServiceNow consulting and implementation services since 2009. As a Premier ServiceNow Partner we deliver efficient ITSM solutions that bring visibility into our clients’ IT processes and infrastructure, allow timely reaction to incidents, problems and events, minimize negative impact of infrastructural changes, and help to optimize IT support costs.', NULL, '1612866086.svg', '1612866086.svg', NULL, NULL, 1, NULL, '2021-02-09 05:21:26', '2021-02-09 05:21:26'),
(78, 8, 'Solution', NULL, 'An Adobe Commerce Cloud partner, ScienceSoft helps businesses secure the viability of their business model in the digital age and shift their operations online to serve customers globally. Since 2003, our team has been designing ecommerce solutions and web portals for businesses in retail, manufacturing, healthcare, education, and other industries. Powered by Adobe technologies, we build highly automated and effective digital solutions.', NULL, '1612866200.svg', '1612866200.svg', NULL, NULL, 1, NULL, '2021-02-09 05:23:20', '2021-02-09 05:23:20'),
(79, 8, 'Pimcore', NULL, 'With a proven track record of implementing Pimcore website solutions, ScienceSoft was the 4th company in the US to obtain Pimcore partnership. To satisfy the ever-growing need for modern and responsive websites, ScienceSoft team of 7 Pimcore experts offers turnkey website, including mobile apps with Pimcore backend, migration to Pimcore as well as maintenance and support.', NULL, '1612866302.svg', '1612866302.svg', NULL, NULL, 1, NULL, '2021-02-09 05:25:02', '2021-02-09 05:25:02'),
(80, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-02-09 23:49:14', '2021-02-09 05:28:59', '2021-02-09 23:49:14'),
(81, 8, 'Registered', NULL, 'Since 2008, ScienceSoft has been successfully delivering industry-specific CRM and CXM solutions to customers in Healthcare, Retail, Telecommunications, Banking, and Manufacturing. As a Salesforce Registered Consulting Partner, ScienceSoft provides its customers with tailor-made solutions based on the best-in-class platform.', NULL, '1612866595.svg', '1612866595.svg', NULL, NULL, 1, NULL, '2021-02-09 05:29:55', '2021-02-09 05:29:55'),
(82, 8, 'Citrix', NULL, 'ScienceSoft is a member of the Citrix Partner network as a Silver Solution Advisor since 2018 with Citrix-accredited in-house professionals. ScienceSoft’s team holds a total of 16 Citrix certificates, including Citrix Consulting Methodology and Project Management, Citrix Certified Sales Professional (CCSP-019), Leveraging Citrix Sales Tools, Important Revenue Recognition and Legal Considerations, Think Like a Support Engineer, etc.', NULL, '1612866730.svg', '1612866730.svg', NULL, NULL, 1, NULL, '2021-02-09 05:32:10', '2021-02-09 05:32:10'),
(83, 8, 'Kyubit', NULL, 'In cooperation with Kyubit Business Intelligence, ScienceSoft delivers comprehensive OLAP analytic solutions tailored to customers’ specific needs and requirements. Bringing in over 31 years in BI & Data Science, ScienceSoft is able to incorporate Kyubit’s products into elaborate BI solutions for customers in Healthcare, Telecom, Retail, Financial and Manufacturing industries.', NULL, '1612866851.svg', '1612866851.png', NULL, NULL, 1, NULL, '2021-02-09 05:34:11', '2021-02-09 05:34:11'),
(84, 8, 'OpenText', NULL, 'As Services Partner of OpenText, ScienceSoft has been using StreamServe to help companies in Telecommunications, Retail, Banking and other industries benefit from powerful document management capabilities.', NULL, '1612867064.svg', '1612867064.svg', NULL, NULL, 1, NULL, '2021-02-09 05:37:44', '2021-02-09 05:37:44'),
(85, 8, 'Ispirer', NULL, 'A long-term partner of ScienceSoft, Ispirer offers cross-platform database migration, embedded SQL/Database API Migration and application conversion. The company focuses on custom and automated conversion of SQL languages.', NULL, NULL, '1612867228.svg', NULL, NULL, 1, NULL, '2021-02-09 05:40:28', '2021-02-09 05:40:28'),
(86, 8, 'Deloitte', NULL, 'An Oracle Partner since 2007, ScienceSoft provides end-to-end business intelligence solutions, including data warehouse implementation, predictive analytics, reporting, OLAP and visualization.', NULL, '1612867656.svg', '1612867656.svg', NULL, NULL, 1, NULL, '2021-02-09 05:47:36', '2021-02-09 05:47:36'),
(88, 40, 'Website development', NULL, NULL, NULL, NULL, NULL, 'services.platforms.website_development', NULL, 1, NULL, '2021-02-10 10:05:35', '2021-02-10 01:54:28'),
(89, 40, 'e-commerce development', NULL, NULL, NULL, NULL, NULL, 'services.platforms.e-commerce_development', NULL, 1, NULL, NULL, NULL),
(90, NULL, 'Products', NULL, NULL, NULL, NULL, NULL, 'products.products', NULL, 1, NULL, '2021-02-12 05:09:11', '2021-02-12 05:10:15'),
(91, NULL, 'Portfolio', NULL, NULL, NULL, NULL, NULL, 'portfolios.portfolios', NULL, 1, NULL, '2021-02-12 05:11:48', '2021-02-12 05:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `category_lists`
--

CREATE TABLE `category_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_teams`
--

CREATE TABLE `company_teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_teams`
--

INSERT INTO `company_teams` (`id`, `name`, `job`, `image`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nikolay Kurayev', 'CEO, ScienceSoft', '1612854816.png', 'Mr. Kurayev has been leading our company for 21 years. He holds a Master’s in Physics from BSUIR and has published 12 papers on computer modeling in electronics. Under his leadership, ScienceSoft achieved 10 times growth.', NULL, '2021-02-09 02:13:36', '2021-02-09 02:13:36'),
(2, 'Boris Shiklo', 'Chief Technology Officer', '1612854877.png', 'Mr. Shiklo entered ScienceSoft in 1997 and became CTO in 2003. He holds a Master’s in Computer Science from BSU. Under his management, we launched Mobile, SharePoint and CRM development services and grew to 700 IT experts.', NULL, '2021-02-09 02:14:37', '2021-02-09 02:14:37'),
(3, 'Valentina Borokha', 'Chief Financial Officer', '1612854952.png', 'With a Bachelor of Science in Economics from MSU, Mrs. Borokha joined our team in 1992, contributing 28 years of financial and management experience.', NULL, '2021-02-09 02:15:52', '2021-02-09 02:15:52'),
(4, 'Ulad Radkevitch', 'hD, VP Sales and BD', '1612855015.png', 'Mr. Radkevitch has been ScienceSoft’s VP for 12 years. He holds a PhD in Management from RSM Erasmus University. He is an author of a number of academic and business papers on IT outsourcing, online services procurement and online IT marketplaces.', NULL, '2021-02-09 02:16:55', '2021-02-09 02:16:55'),
(5, 'Wade Brantley', 'CEO, ScienceSoft USA', '1612855068.png', 'Joined our team in 2015, Mr. Brantley holds a BSc in Business Management from the University of South Carolina. He brought in nearly 20 years of management experience in technology and finance.', NULL, '2021-02-09 02:17:48', '2021-02-09 02:17:48'),
(6, 'Natallia Sakovich', 'CEO, ScienceSoft Finland', '1612855332.png', 'With a Bachelor’s degree in Mathematics, Mrs. Sakovich entered ScienceSoft in 2005 and worked with us for two years in different positions from software development to project management.', NULL, '2021-02-09 02:22:12', '2021-02-09 02:22:12'),
(7, 'admin', 'daw', '1612862166.jpg', '1212', '2021-02-09 04:16:12', '2021-02-09 04:16:06', '2021-02-09 04:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `fullname`, `company`, `email`, `phone_number`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Jahongir', '234t', 'admin@gmail.com', '+998931885588', 'qwertyuioiuytrewq', NULL, '2021-02-10 02:29:11', '2021-02-10 02:29:11'),
(2, 'ssss', 'sss', 'madina@gmail.com', '+998931885588', 'sssss', NULL, '2021-02-10 09:48:05', '2021-02-10 09:48:05'),
(3, 'Uktamjon Rakhmatullayev', 'TeamPro', 'rakhmatullayev2017@mail.ru', '+998931885588', 'How are you today?', NULL, '2021-02-10 10:09:32', '2021-02-10 10:09:32'),
(4, 'Jahongir', '234t', 'admin@gmail.com', '+998931885588', 'efsrdgftyhgjuhkij', NULL, '2021-02-13 00:38:59', '2021-02-13 00:38:59'),
(5, '123', '12121212', 'user@pay.uz', '+998931885588', 'awdfsgdfhgjhhggdfgfgd1234567', NULL, '2021-02-13 01:46:30', '2021-02-13 01:46:30'),
(6, 'Uktamjon Rakhmatullayev', 'asdasdad', 'madina@gmail.com', '+998931885588', 'll', NULL, '2021-02-13 01:52:33', '2021-02-13 01:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtl` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `rtl`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 0, '2019-01-20 12:13:20', '2019-01-20 12:13:20'),
(2, 'O\'zbekcha', 'uz', 0, '2019-02-17 06:35:37', '2019-02-18 06:49:51'),
(3, 'Русский', 'ru', 0, '2019-04-28 18:34:12', '2021-02-09 01:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_25_082720_create_languages_table', 1),
(5, '2021_01_25_082720_create_translations_table', 1),
(6, '2021_01_30_061151_create_categories_table', 1),
(7, '2021_02_01_155620_create_consultations_table', 1),
(8, '2021_02_02_050413_create_card_lists_table', 1),
(9, '2021_02_02_071200_create_blogs_table', 1),
(10, '2021_02_04_055333_create_company_teams_table', 1),
(11, '2021_02_05_045834_create_products_table', 1),
(12, '2021_02_05_092933_create_portfolios_table', 1),
(13, '2021_02_08_052936_create_news_table', 1),
(14, '2021_02_03_103002_create_category_lists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `sub_title`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1612852598.png', 'ScienceSoft Is among Top B2B Companies in Texas on the Clutch List', 'Clutch featured ScienceSoft among the top 300 B2B service providers in Texas.', '<p>On September 28, 2020, Clutch named ScienceSoft among the&nbsp;top 300 B2B service providers in Texas, the state that was ranked among the top 2 for IT services employment in the US.</p>\r\n\r\n<p>Known for their unbiased attitude to market research, Clutch helps businesses shortlist reliable service vendors by independently assessing their domain expertise, completed projects, and client reviews. Let us use this recognition of our company as an opportunity to thank our customers for trusting ScienceSoft with the digital transformation of their business processes and taking time to provide their feedback. It helps ScienceSoft make way to the top of the IT business, win new projects, and invest more in the professional growth of the team!</p>\r\n\r\n<p>Since 1989, ScienceSoft has collaborated on more than 2,695 projects in&nbsp;IT consulting,&nbsp;IT outsourcing, and&nbsp;custom software development. With a vast technology portfolio and industry expertise, we are ready to meet an ever-growing demand for software variability. Don&rsquo;t hesitate to&nbsp;discuss your IT needs with our team&nbsp;if you face some right now!</p>', NULL, '2021-02-09 01:36:38', '2021-02-09 01:36:38'),
(2, '1612852797.png', 'ScienceSoft Is Recognized in Clutch Top 1000 B2B Providers Globally', 'On December 4, 2020, ScienceSoft was featured in The Clutch 1000 exclusive list of the top 1% of B2B providers represented on the platform.', '<p>On December 4, 2020, ScienceSoft was featured in&nbsp;<em>The Clutch 1000</em>&nbsp;exclusive list of the&nbsp;<strong>top 1% of B2B companies</strong>&nbsp;<strong>represented on the platform</strong>.</p>\r\n\r\n<p>Clutch is a market research firm and a leading independent ratings and reviews platform used by half a million B2B service buyers and sellers from across the globe monthly. To determine nominees for The Clutch 1000, Clutch analyzes 4 main criteria:</p>\r\n\r\n<ul>\r\n	<li>Recency, number, and quality of Clutch-verified reviews on a company&rsquo;s profile.</li>\r\n	<li>Types of customers a company works with.</li>\r\n	<li>Services offered and experience in rendering these services.</li>\r\n	<li>Brand reputation and visibility in the target market.</li>\r\n</ul>\r\n\r\n<p>ScienceSoft has&nbsp;33 verified reviews&nbsp;from customers in a broad spectrum of industries and an overall 4,8-star rating highlighting our focus on providing reliable&nbsp;IT consulting,&nbsp;IT outsourcing, and&nbsp;software development&nbsp;services.</p>\r\n\r\n<p><strong>We&rsquo;d like to take the chance to thank our customers for acknowledging our work.</strong>&nbsp;We&rsquo;re always looking forward to delivering advanced services and solutions backed by our 31-year experience in IT to help businesses stay ahead of the curve. Feel free to&nbsp;get in touch&nbsp;with us to discuss collaboration.</p>', NULL, '2021-02-09 01:39:57', '2021-02-09 01:39:57'),
(3, '1612853085.png', 'ScienceSoft Is in Two 2020 Lists of Top Companies by SoftwareWorld', 'SoftwareWorld featured ScienceSoft in Top 30+ World’s Web Design & Development and U.S. Based Mobile App Development Companies.', '<p>In August 2020, SoftwareWorld included ScienceSoft in the following lists:</p>\r\n\r\n<ul>\r\n	<li>World&rsquo;s Top 30+ Web Design &amp; Development Companies</li>\r\n	<li>Top 30+ U.S. Based Mobile App Development Companies</li>\r\n</ul>\r\n\r\n<p>SoftwareWorld, one of the leading B2B software review sites, helps users find suitable specialized tools to meet their business needs with the focus on software categories like CRM, marketing automation, and accounting. SoftwareWorld base their lists on unbiased research of user satisfaction reviews, ratings, social media and online presence, and other aspects.</p>\r\n\r\n<p>SoftwareWorld examined ScienceSoft&rsquo;s success stories in web design and development and mobile app development as well as analyzed our customers&rsquo; reviews. SoftwareWorld recognized our company&rsquo;s expertise in these domains and included ScienceSoft in the relevant lists. As a result, we entered&nbsp;<strong>Top 10</strong>&nbsp;of World&rsquo;s Top 30+ Web Design &amp; Development Companies and&nbsp;<strong>Top 5&nbsp;</strong>of Top 30+ U.S. Based Mobile App Development Companies.</p>\r\n\r\n<p>With 31 years in IT, ScienceSoft delivers all-round services on&nbsp;web design&nbsp;and&nbsp;mobile app development&nbsp;to create robust software tailored to the customers&rsquo; business needs. ScienceSoft&rsquo;s most prominent web design and development projects include developing a web app for&nbsp;car insurance claim estimation,&nbsp;a consolidated clinic map,&nbsp;a website for the fabrics and home textile producer, and more. As for mobile app development, ScienceSoft is appreciated by customers for delivering such apps, as the&nbsp;Viber&nbsp;messenger,&nbsp;an award-winning mobile banking app,&nbsp;a mobile payment app, and&nbsp;a document management app for a parliament.</p>', NULL, '2021-02-09 01:44:45', '2021-02-09 01:44:45'),
(4, '1612853424.png', 'ScienceSoft Achieves Microsoft Co-Sell Ready Status', 'ScienceSoft is recognized as a Microsoft Co-Sell Ready partner with our Azure migration offering, which allows us to extend our reach and establish valuable customer ties.', '<p>ScienceSoft has earned the&nbsp;<strong>Microsoft Co-Sell Ready</strong>&nbsp;status with our&nbsp;fast and low-risk Azure migration offering&nbsp;that is now available on Azure Marketplace. The Co-Sell Ready status enables ScienceSoft to join a group of IT services providers selected by Microsoft who take part in joint sales and go-to-market initiatives. Besides, the status allows us to get Microsoft&rsquo;s technical support in Azure projects.</p>\r\n\r\n<p>As a Microsoft Partner with a Gold Cloud Platform competency, ScienceSoft&rsquo;s experts help plan and carry out sound Azure migration as well as provide managed services to ensure stability, security and optimized maintenance costs of the Azure environment.</p>\r\n\r\n<p>&ldquo;We are excited to join the Microsoft Co-Sell Ready program,&rdquo; says Andy Lipnitski, IT Director at ScienceSoft. &ldquo;Backed up with Microsoft tech, marketing and sales support for our Azure projects, we are looking forward to bringing a personalized migration strategy to businesses and help them establish a cost-effective and high-performing Azure environment.&rdquo;</p>', NULL, '2021-02-09 01:50:24', '2021-02-09 01:50:24'),
(5, '1612853728.jpg', 'ScienceSoft Officially Launches in the UAE!', 'In June 2020, ScienceSoft received licenses in the United Arab Emirates to offer IT services, IT solutions and IT consultancy and opened its first Middle East office in the UAE.', '<p>In June 2020, ScienceSoft received licenses in the United Arab Emirates to offer IT services, IT solutions and IT consultancy and opened its first Middle East office in the UAE. The Middle East launch solidifies ScienceSoft&rsquo;s aspiration to tap into new markets and grow international presence.</p>\r\n\r\n<p>ScienceSoft has been showing success in the Middle East environment for quite a while. Since 2013, ScienceSoft has completed dozens of projects for diverse businesses and government organizations in the Gulf region. The recent ones include&nbsp;IT consulting for enterprise application integration for a large multi-industry corporation&nbsp;and&nbsp;development of CRM for a medical and research center. The direct presence in the region will help us deliver high-quality and cost-efficient&nbsp;software development outsourcing services&nbsp;in the Gulf countries.</p>\r\n\r\n<p>&ldquo;Opening of ScienceSoft&rsquo;s office in the Middle East is certainly good news for the companies in the region doing business with us. Besides, it is the next big push to drive local operations and make the company more visible in the Middle East market,&rdquo; says Dzmitry Viazmin, Director of Middle East Operations at ScienceSoft. &ldquo;The clear strategic priorities we are looking to develop in the Gulf are seen in AI, cloud techs, digital trade, Industry 4.0, Supply Chain 4.0, digital health, smart cities, and cybersecurity. At the same time, the company is eager to strengthen and grow its long-running service categories for the region &ndash; IT consulting and software development&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>', NULL, '2021-02-09 01:55:28', '2021-02-09 01:55:28'),
(6, '1612853811.png', 'ScienceSoft Achieves Microsoft Gold Application Integration Competency', 'ScienceSoft received Microsoft Gold Application Integration Competency, proving the highest tech expertise in integrating apps into the Microsoft product ecosystem.', '<p>In July 2020, ScienceSoft achieved&nbsp;Microsoft Gold Application Integration Competency. We now hold 8 Gold Competencies granted by Microsoft, including Cloud Platform, Data Analytics, Data Platform, Application Development, Collaboration and Content, Datacenter, and Messaging. Having Gold Competency in the respective areas confirms that ScienceSoft can serve their customers according to the highest standards of the Microsoft Partner Network program.</p>\r\n\r\n<p>To qualify for Gold Application Integration Competency, IT engineers from ScienceSoft passed a series of industry-recognized exams by Microsoft. They successfully met certification criteria by proving technical expertise in integrating applications and solutions into the Microsoft product ecosystem.</p>\r\n\r\n<p>Being a long-term Microsoft partner, we&rsquo;re always ready to apply our knowledge of Microsoft tools and experience in diverse business domains to help you&nbsp;leverage the power of integrated applications&nbsp;that resides in data integrity and reliable workflows for your company.</p>', NULL, '2021-02-09 01:56:51', '2021-02-09 01:56:51'),
(7, '1612853906.png', 'ScienceSoft Ranked among Top 50+ Custom Software and Mobile App Development Companies in 2020 by SoftwareWorld', 'SoftwareWorld featured ScienceSoft in Top 50+ Custom Software Development Companies and World’s Top 50+ Mobile App Development Companies.', '<p>SoftwareWorld featured ScienceSoft in the following listings:</p>\r\n\r\n<ul>\r\n	<li>Top 50+ Custom Software Development Companies</li>\r\n	<li>World&rsquo;s Top 50+ Mobile App Development Companies</li>\r\n</ul>\r\n\r\n<p>SoftwareWorld is one of the leading B2B software review sites. It focuses on software categories (e.g., CRM, marketing automation, accounting), thus helping users choose the right tools for their specific needs. SoftwareWorld listings are based on unbiased research of user satisfaction reviews and ratings, social media and online presence, and more.</p>\r\n\r\n<p>SoftwareWorld studied ScienceSoft&rsquo;s competencies in custom software development and mobile app development, relevant success stories, and our customers&rsquo; reviews. SoftwareWorld recognized ScienceSoft&rsquo;s ample expertise and professionalism in bringing these solutions to customers and as a result, we entered&nbsp;<strong>Top 5</strong>&nbsp;of Top 50+ Custom Software Development Companies and&nbsp;<strong>Top 10&nbsp;</strong>of World&#39;s Top 50+ Mobile App Development Companies.</p>\r\n\r\n<p>Having 31-year experience in IT, ScienceSoft offers full-cycle services on&nbsp;custom software development&nbsp;and&nbsp;mobile app development&nbsp;to create solutions tailored to the customers&rsquo; business needs. Our prominent projects include developing custom software for&nbsp;inventory management,&nbsp;well log data tracking,&nbsp;trade marketing planning,&nbsp;data analytics, and more. As for mobile app development, ScienceSoft is appreciated by customers for delivering such apps, as the&nbsp;Viber&nbsp;messenger,&nbsp;an award-winning mobile banking app,&nbsp;a mobile payment app, and&nbsp;a document management app for a parliament.</p>', NULL, '2021-02-09 01:58:26', '2021-02-09 01:58:26'),
(8, '1612853970.png', 'Meet Cleverly – A New ServiceNow Training Management App by ScienceSoft!', 'A Premier ServiceNow partner, ScienceSoft has released a proprietary ServiceNow app called Cleverly designed to solve your corporate training problems.', '<p>ScienceSoft has released Cleverly, our new proprietary ServiceNow application for corporate training management. It is certified by ServiceNow and available on the&nbsp;ServiceNow Store&nbsp;right now.</p>\r\n\r\n<p>Cleverly is the first free ServiceNow app that allows you to streamline training management processes in your company and enhance your employees&rsquo; competencies and skills.</p>\r\n\r\n<p>The app can help you achieve this massive goal with light-weight and easy-to-use functionality that supports:</p>\r\n\r\n<ul>\r\n	<li>Creating instructor-led training courses and self-learning engagements.</li>\r\n	<li>Adding participants to the created training engagements.</li>\r\n	<li>Distributing training courses and related materials among participants.</li>\r\n	<li>Tracking and reviewing trainees&rsquo; progress.</li>\r\n</ul>\r\n\r\n<p>You can also use Cleverly with the functionality of your existing ServiceNow solution, such as&nbsp;<em>surveys and quizzes</em>, to review and improve the efficiency of your training courses as well as check the quality of knowledge that your trainees receive.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Cleverly is designed to help your organization facilitate your business processes and stimulate your revenue streams by growing your employees&rsquo; expertise,&rdquo; says Ann Ziatsikava, ScienceSoft&rsquo;s product line manager for ServiceNow.</p>\r\n</blockquote>\r\n\r\n<p>Cleverly is the first ScienceSoft&rsquo;s proprietary ServiceNow application released to the ServiceNow Store. And we are planning to further apply our&nbsp;ServiceNow application development&nbsp;expertise and create more apps for you to solve more of your business challenges.</p>\r\n\r\n<p>We would like to give a huge thanks to the whole team that made Cleverly happen: our ServiceNow architect&nbsp;<strong>Andrii Iarmolatii</strong>, ServiceNow developers&nbsp;<strong>Anna Kandratsiuk</strong>&nbsp;and&nbsp;<strong>Uladzimir</strong>&nbsp;<strong>Rubakhin</strong>, software testing&nbsp;engineer&nbsp;<strong>Vadym Makovetskyi</strong>, project manager&nbsp;<strong>Maksim Kavaleu</strong>, designers&nbsp;<strong>Aliaksandr Barcheuski</strong>&nbsp;and&nbsp;<strong>Anastasiya Stelmashchuk</strong>, communication specialist&nbsp;<strong>Maria Saladukhina</strong>&nbsp;and editors&nbsp;<strong>Anastasiya Valasach&nbsp;</strong>and&nbsp;<strong>Marina Volkova</strong>.</p>', NULL, '2021-02-09 01:59:30', '2021-02-09 01:59:30'),
(9, '1612854186.png', 'ScienceSoft Features in IAOP Global Outsourcing 100 Award Lists 2020', 'ScienceSoft was selected for IAOP Global Outsourcing 100 Award 2020 in the categories ‘Top Customer References’ and ‘Top Awards & Certifications’.', '<p>International Association of Outsourcing Professionals (IAOP) published the results of their annual&nbsp;<strong>Global Outsourcing 100&nbsp;</strong>rating that recognizes the most mature outsourcing service providers in 2020. ScienceSoft was honored by awards in two sub-lists:</p>\r\n\r\n<ul>\r\n	<li>Top Customer References.</li>\r\n	<li>Top Awards &amp; Certifications.</li>\r\n</ul>\r\n\r\n<p>IAOP is a renowned association that connects customers, outsourcing providers, and advisors in a synergic environment aimed at improving business service models and results. The Global Outsourcing 100 rating is pulled from the applications submitted by outsourcing service providers around the world. The candidates are evaluated at an independent board meeting of IAOP members with vast experience in selecting outsourcing providers for their organizations. They consider such criteria as professional certificates, awards and business outcomes of the customers brought by outsourcing providers under evaluation.</p>\r\n\r\n<p>ScienceSoft&rsquo;s outsourcing services cover full-cycle&nbsp;software development outsourcing&nbsp;and&nbsp;IT outsourcing. Our track record includes projects for Walmart, eBay, NASA JPL, PerkinElmer, Baxter, IBM, Leo Burnett, and other large-scale customers. We&rsquo;re thankful for the companies who chose us as a trusted outsourcing provider and are ready to apply our 31-year IT experience to new exciting projects.</p>', NULL, '2021-02-09 02:03:06', '2021-02-09 02:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `technology` json DEFAULT NULL,
  `industry` json DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blade_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `read_more_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_website_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int NOT NULL,
  `lang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_key` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `lang`, `lang_key`, `lang_value`, `created_at`, `updated_at`) VALUES
(60, 'en', 'Reset Password', 'Reset Password', '2021-02-14 15:20:20', '2021-02-14 15:20:20'),
(61, 'en', 'Send Reset Link', 'Send Reset Link', '2021-02-14 15:20:20', '2021-02-14 15:20:20'),
(62, 'en', 'Language Information', 'Language Information', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(63, 'en', 'Name', 'Name', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(64, 'en', 'Code', 'Code', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(65, 'en', 'Save', 'Save', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(66, 'en', 'Delete Confirmation', 'Delete Confirmation', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(67, 'en', 'Are you sure to delete this?', 'Are you sure to delete this?', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(68, 'en', 'Cancel', 'Cancel', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(69, 'en', 'Delete', 'Delete', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(70, 'en', 'update Language Info', 'update Language Info', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(71, 'en', 'Default Language', 'Default Language', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(72, 'en', 'Add New Language', 'Add New Language', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(73, 'en', 'Language', 'Language', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(74, 'en', 'RTL', 'RTL', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(75, 'en', 'Options', 'Options', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(76, 'en', 'Translation', 'Translation', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(77, 'en', 'Edit', 'Edit', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(78, 'en', 'Something went wrong', 'Something went wrong', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(79, 'en', 'Type key & Enter', 'Type key & Enter', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(80, 'en', 'Key', 'Key', '2021-02-14 15:20:21', '2021-02-14 15:20:21'),
(81, 'en', 'Value', 'Value', '2021-02-14 15:20:22', '2021-02-14 15:20:22'),
(82, 'en', 'Copy Translations', 'Copy Translations', '2021-02-14 15:20:22', '2021-02-14 15:20:22'),
(83, 'uz', 'Reset Password', 'Parolni tiklash', '2021-02-14 15:23:56', '2021-02-14 15:23:56'),
(84, 'uz', 'Send Reset Link', 'Qayta tiklash havolasini yuboring', '2021-02-14 15:23:56', '2021-02-14 15:23:56'),
(85, 'uz', 'Language Information', 'Til haqida ma\'lumot', '2021-02-14 15:23:56', '2021-02-14 15:23:56'),
(86, 'uz', 'Name', 'Ism', '2021-02-14 15:23:56', '2021-02-14 15:23:56'),
(87, 'uz', 'Code', 'Kod', '2021-02-14 15:23:56', '2021-02-14 15:23:56'),
(88, 'uz', 'Save', 'Saqlash', '2021-02-14 15:23:56', '2021-02-14 15:23:56'),
(89, 'uz', 'Delete Confirmation', 'Tasdiqlashni o\'chirib tashlang', '2021-02-14 15:23:56', '2021-02-14 15:23:56'),
(90, 'uz', 'Are you sure to delete this?', 'Buni o\'chirishga ishonchingiz komilmi?', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(91, 'uz', 'Cancel', 'Bekor qilish', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(92, 'uz', 'Delete', 'O\'chirish', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(93, 'uz', 'update Language Info', 'Til ma\'lumotlarini yangilang', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(94, 'uz', 'Default Language', 'Standart til', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(95, 'uz', 'Add New Language', 'Yangi til qo\'shish', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(96, 'uz', 'Language', 'Til', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(97, 'uz', 'RTL', 'RTL', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(98, 'uz', 'Options', 'Tanlovlar', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(99, 'uz', 'Translation', 'Tarjima', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(100, 'uz', 'Edit', 'Tahrirlash', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(101, 'uz', 'Something went wrong', 'Nimadir noto\'g\'ri bajarildi', '2021-02-14 15:23:57', '2021-02-14 15:23:57'),
(102, 'uz', 'Type key & Enter', 'Kalitni kiriting va kiriting', '2021-02-14 15:23:58', '2021-02-14 15:23:58'),
(103, 'uz', 'Key', 'Kalit', '2021-02-14 15:23:58', '2021-02-14 15:23:58'),
(104, 'uz', 'Value', 'Qiymat', '2021-02-14 15:23:58', '2021-02-14 15:23:58'),
(105, 'uz', 'Copy Translations', 'Tarjimalarni nusxalash', '2021-02-14 15:23:58', '2021-02-14 15:23:58'),
(106, 'ru', 'Reset Password', 'Сброс пароля', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(107, 'ru', 'Send Reset Link', 'Отправить ссылку для сброса', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(108, 'ru', 'Language Information', 'Информация о языке', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(109, 'ru', 'Name', 'Имя', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(110, 'ru', 'Code', 'Код', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(111, 'ru', 'Save', 'Сохранять', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(112, 'ru', 'Delete Confirmation', 'Удалить подтверждение', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(113, 'ru', 'Are you sure to delete this?', 'Вы уверены, что удалите это?', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(114, 'ru', 'Cancel', 'Отмена', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(115, 'ru', 'Delete', 'Удалить', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(116, 'ru', 'update Language Info', 'обновить информацию о языке', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(117, 'ru', 'Default Language', 'Язык по умолчанию', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(118, 'ru', 'Add New Language', 'Добавить новый язык', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(119, 'ru', 'Language', 'Язык', '2021-02-14 15:24:34', '2021-02-14 15:24:34'),
(120, 'ru', 'RTL', 'RTL', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(121, 'ru', 'Options', 'Опции', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(122, 'ru', 'Translation', 'Перевод', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(123, 'ru', 'Edit', 'Редактировать', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(124, 'ru', 'Something went wrong', 'Что-то пошло не так', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(125, 'ru', 'Type key & Enter', 'Введите ключ и введите', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(126, 'ru', 'Key', 'Ключ', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(127, 'ru', 'Value', 'Ценить', '2021-02-14 15:24:35', '2021-02-14 15:24:35'),
(128, 'ru', 'Copy Translations', 'Копировать переводы', '2021-02-14 15:24:35', '2021-02-14 15:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'begzod', 'erkinovbegzod.45@gmail.com', NULL, '$2y$10$HUPmm1qUAJoIGET87dPRw.RWqUes4lH6WtzgL7JrJzczzBpyjEWh6', 'Rhg2SLd128NMExK3lAzIxyHRtO6AIpSmYksU7NkILbKSn3rkEulYsZyVKRil', '2021-02-09 01:35:14', '2021-02-09 01:35:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_lists`
--
ALTER TABLE `card_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_lists`
--
ALTER TABLE `category_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_teams`
--
ALTER TABLE `company_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `card_lists`
--
ALTER TABLE `card_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `category_lists`
--
ALTER TABLE `category_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_teams`
--
ALTER TABLE `company_teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
