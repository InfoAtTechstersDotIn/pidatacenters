-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 05:32 AM
-- Server version: 10.5.17-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partnerportal_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE IF NOT EXISTS `account_type` (
  `id` int(11) NOT NULL,
  `display_value` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`id`, `display_value`, `display_name`) VALUES
(1, 'large-enterprise-cust', 'Enterprise Customer'),
(2, 'government', 'Government');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_external_link` tinyint(4) NOT NULL DEFAULT 0,
  `blog_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_slug`, `blog_author`, `blog_short_description`, `blog_description`, `blog_image_path`, `is_external_link`, `blog_link`, `blog_is_active`, `created_at`, `updated_at`) VALUES
(1, 'Data Migration Challenges And Methods To Overcome Them', 'blogs/view/data-migration-challenges-and-methods-to-overcome-them', 'Admin in Cloud Managed Services', '<p>Cloud technology offers diverse advantages to businesses to maintain the competitive streak. Mana...</p>', NULL, 'resources/blogs/xcreative-1-1.png.pagespeed.ic.GbD6_f-8TZ.png', 1, 'https://pidatacenters.com/data-migration-challenges-and-methods-to-overcome-them/', 1, '2021-08-25 00:27:38', '2021-08-31 02:37:59'),
(2, 'How is Cloud transforming businesses', 'blogs/view/how-is-cloud-transforming-businesses', NULL, '<p>Cloud technology is playing a vital role in enhancing the business organisations&#39; capability in t...</p>', NULL, 'resources/blogs/blog-how.png', 1, 'https://pi-cloud.in/blog-info/7/how-is-cloud-transforming-businesses', 1, '2021-08-25 00:28:36', '2021-08-25 00:28:36'),
(3, 'Artificial Intelligence In Datacenters - The Way Forward', 'blogs/view/artificial-intelligence-in-datacenters---the-way-forward', NULL, '<p>Datacenters have emerged as the lifeline for organizations when the 90s heralded a massive techno...</p>', NULL, 'resources/blogs/ceo-blog.png', 1, 'https://pi-cloud.in/blog-info/6/artificial-intelligence-in-datcenters-the-way-forward', 1, '2021-08-25 00:29:09', '2021-08-25 00:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `business_industries`
--

CREATE TABLE IF NOT EXISTS `business_industries` (
  `id` int(11) NOT NULL,
  `display_value` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_industries`
--

INSERT INTO `business_industries` (`id`, `display_value`, `display_name`) VALUES
(1, 'bfsi', 'BFSI'),
(2, 'it-ites', 'IT &amp; ITES'),
(3, 'telecom', 'Telecom'),
(4, 'hospitality-services', 'Hospitality &amp; Services'),
(5, 'healthcare-pharma', 'Healthcare &amp; Pharma'),
(6, 'media-entertainment', 'Media &amp; Entertainment'),
(7, 'education', 'Education'),
(8, 'manufacturing-energy', 'Manufacturing &amp; Energy'),
(9, 'retail-ecommerce', 'Retail &amp; eCommerce'),
(10, 'fmcg', 'FMCG');

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE IF NOT EXISTS `case_studies` (
  `id` bigint(20) unsigned NOT NULL,
  `cs_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cs_short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cs_image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cs_doc_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cs_date` timestamp NULL DEFAULT NULL,
  `cs_is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`id`, `cs_title`, `cs_short_description`, `cs_image_path`, `cs_doc_path`, `cs_date`, `cs_is_active`, `created_at`, `updated_at`) VALUES
(1, 'Wi-Fi Cloud', NULL, 'resources/casestudies/images/cs1.png', 'resources/casestudies/docs/wifi.pdf', '2021-08-27 04:54:45', 1, '2021-08-27 04:54:45', '2021-08-27 04:54:45'),
(2, 'Cloud Migration From Global Public Cloud Provider To pi-cloud', NULL, 'resources/casestudies/images/cs2.png', 'resources/casestudies/docs/migration.pdf', '2021-08-29 01:13:54', 1, '2021-08-29 01:13:54', '2021-08-29 01:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) unsigned NOT NULL,
  `state_id` bigint(20) unsigned NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1232 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 30, 'Port Blair', NULL, NULL),
(2, 1, 'Visakhapatnam', NULL, NULL),
(3, 1, 'Vijayawada', NULL, NULL),
(4, 1, 'Guntur', NULL, NULL),
(5, 1, 'Nellore', NULL, NULL),
(6, 1, 'Kurnool', NULL, NULL),
(7, 1, 'Rajahmundry', NULL, NULL),
(8, 1, 'Kakinada', NULL, NULL),
(9, 1, 'Tirupati', NULL, NULL),
(10, 1, 'Anantapur', NULL, NULL),
(11, 1, 'Kadapa', NULL, NULL),
(12, 1, 'Vizianagaram', NULL, NULL),
(13, 1, 'Eluru', NULL, NULL),
(14, 1, 'Ongole', NULL, NULL),
(15, 1, 'Nandyal', NULL, NULL),
(16, 1, 'Machilipatnam', NULL, NULL),
(17, 1, 'Adoni', NULL, NULL),
(18, 1, 'Tenali', NULL, NULL),
(19, 1, 'Chittoor', NULL, NULL),
(20, 1, 'Hindupur', NULL, NULL),
(21, 1, 'Proddatur', NULL, NULL),
(22, 1, 'Bhimavaram', NULL, NULL),
(23, 1, 'Madanapalle', NULL, NULL),
(24, 1, 'Guntakal', NULL, NULL),
(25, 1, 'Dharmavaram', NULL, NULL),
(26, 1, 'Gudivada', NULL, NULL),
(27, 1, 'Srikakulam', NULL, NULL),
(28, 1, 'Narasaraopet', NULL, NULL),
(29, 1, 'Rajampet', NULL, NULL),
(30, 1, 'Tadpatri', NULL, NULL),
(31, 1, 'Tadepalligudem', NULL, NULL),
(32, 1, 'Chilakaluripet', NULL, NULL),
(33, 1, 'Yemmiganur', NULL, NULL),
(34, 1, 'Kadiri', NULL, NULL),
(35, 1, 'Chirala', NULL, NULL),
(36, 1, 'Anakapalle', NULL, NULL),
(37, 1, 'Kavali', NULL, NULL),
(38, 1, 'Palacole', NULL, NULL),
(39, 1, 'Sullurpeta', NULL, NULL),
(40, 1, 'Tanuku', NULL, NULL),
(41, 1, 'Rayachoti', NULL, NULL),
(42, 1, 'Srikalahasti', NULL, NULL),
(43, 1, 'Bapatla', NULL, NULL),
(44, 1, 'Naidupet', NULL, NULL),
(45, 1, 'Nagari', NULL, NULL),
(46, 1, 'Gudur', NULL, NULL),
(47, 1, 'Vinukonda', NULL, NULL),
(48, 1, 'Narasapuram', NULL, NULL),
(49, 1, 'Nuzvid', NULL, NULL),
(50, 1, 'Markapur', NULL, NULL),
(51, 1, 'Ponnur', NULL, NULL),
(52, 1, 'Kandukur', NULL, NULL),
(53, 1, 'Bobbili', NULL, NULL),
(54, 1, 'Rayadurg', NULL, NULL),
(55, 1, 'Samalkot', NULL, NULL),
(56, 1, 'Jaggaiahpet', NULL, NULL),
(57, 1, 'Tuni', NULL, NULL),
(58, 1, 'Amalapuram', NULL, NULL),
(59, 1, 'Bheemunipatnam', NULL, NULL),
(60, 1, 'Venkatagiri', NULL, NULL),
(61, 1, 'Sattenapalle', NULL, NULL),
(62, 1, 'Pithapuram', NULL, NULL),
(63, 1, 'Palasa Kasibugga', NULL, NULL),
(64, 1, 'Parvathipuram', NULL, NULL),
(65, 1, 'Macherla', NULL, NULL),
(66, 1, 'Gooty', NULL, NULL),
(67, 1, 'Salur', NULL, NULL),
(68, 1, 'Mandapeta', NULL, NULL),
(69, 1, 'Jammalamadugu', NULL, NULL),
(70, 1, 'Peddapuram', NULL, NULL),
(71, 1, 'Punganur', NULL, NULL),
(72, 1, 'Nidadavole', NULL, NULL),
(73, 1, 'Repalle', NULL, NULL),
(74, 1, 'Ramachandrapuram', NULL, NULL),
(75, 1, 'Kovvur', NULL, NULL),
(76, 1, 'Tiruvuru', NULL, NULL),
(77, 1, 'Uravakonda', NULL, NULL),
(78, 1, 'Narsipatnam', NULL, NULL),
(79, 1, 'Yerraguntla', NULL, NULL),
(80, 1, 'Pedana', NULL, NULL),
(81, 1, 'Puttur', NULL, NULL),
(82, 1, 'Renigunta', NULL, NULL),
(83, 1, 'Rajam', NULL, NULL),
(84, 1, 'Srisailam', NULL, NULL),
(85, 2, 'Naharlagun', NULL, NULL),
(86, 2, 'Pasighat', NULL, NULL),
(87, 3, 'Guwahati', NULL, NULL),
(88, 3, 'Silchar', NULL, NULL),
(89, 3, 'Dibrugarh', NULL, NULL),
(90, 3, 'Nagaon', NULL, NULL),
(91, 3, 'Tinsukia', NULL, NULL),
(92, 3, 'Jorhat', NULL, NULL),
(93, 3, 'Bongaigaon City', NULL, NULL),
(94, 3, 'Dhubri', NULL, NULL),
(95, 3, 'Diphu', NULL, NULL),
(96, 3, 'North Lakhimpur', NULL, NULL),
(97, 3, 'Tezpur', NULL, NULL),
(98, 3, 'Karimganj', NULL, NULL),
(99, 3, 'Sibsagar', NULL, NULL),
(100, 3, 'Goalpara', NULL, NULL),
(101, 3, 'Barpeta', NULL, NULL),
(102, 3, 'Lanka', NULL, NULL),
(103, 3, 'Lumding', NULL, NULL),
(104, 3, 'Mankachar', NULL, NULL),
(105, 3, 'Nalbari', NULL, NULL),
(106, 3, 'Rangia', NULL, NULL),
(107, 3, 'Margherita', NULL, NULL),
(108, 3, 'Mangaldoi', NULL, NULL),
(109, 3, 'Silapathar', NULL, NULL),
(110, 3, 'Mariani', NULL, NULL),
(111, 3, 'Marigaon', NULL, NULL),
(112, 4, 'Patna', NULL, NULL),
(113, 4, 'Gaya', NULL, NULL),
(114, 4, 'Bhagalpur', NULL, NULL),
(115, 4, 'Muzaffarpur', NULL, NULL),
(116, 4, 'Darbhanga', NULL, NULL),
(117, 4, 'Arrah', NULL, NULL),
(118, 4, 'Begusarai', NULL, NULL),
(119, 4, 'Chhapra', NULL, NULL),
(120, 4, 'Katihar', NULL, NULL),
(121, 4, 'Munger', NULL, NULL),
(122, 4, 'Purnia', NULL, NULL),
(123, 4, 'Saharsa', NULL, NULL),
(124, 4, 'Sasaram', NULL, NULL),
(125, 4, 'Hajipur', NULL, NULL),
(126, 4, 'Dehri-on-Sone', NULL, NULL),
(127, 4, 'Bettiah', NULL, NULL),
(128, 4, 'Motihari', NULL, NULL),
(129, 4, 'Bagaha', NULL, NULL),
(130, 4, 'Siwan', NULL, NULL),
(131, 4, 'Kishanganj', NULL, NULL),
(132, 4, 'Jamalpur', NULL, NULL),
(133, 4, 'Buxar', NULL, NULL),
(134, 4, 'Jehanabad', NULL, NULL),
(135, 4, 'Aurangabad', NULL, NULL),
(136, 4, 'Lakhisarai', NULL, NULL),
(137, 4, 'Nawada', NULL, NULL),
(138, 4, 'Jamui', NULL, NULL),
(139, 4, 'Sitamarhi', NULL, NULL),
(140, 4, 'Araria', NULL, NULL),
(141, 4, 'Gopalganj', NULL, NULL),
(142, 4, 'Madhubani', NULL, NULL),
(143, 4, 'Masaurhi', NULL, NULL),
(144, 4, 'Samastipur', NULL, NULL),
(145, 4, 'Mokameh', NULL, NULL),
(146, 4, 'Supaul', NULL, NULL),
(147, 4, 'Dumraon', NULL, NULL),
(148, 4, 'Arwal', NULL, NULL),
(149, 4, 'Forbesganj', NULL, NULL),
(150, 4, 'BhabUrban Agglomeration', NULL, NULL),
(151, 4, 'Narkatiaganj', NULL, NULL),
(152, 4, 'Naugachhia', NULL, NULL),
(153, 4, 'Madhepura', NULL, NULL),
(154, 4, 'Sheikhpura', NULL, NULL),
(155, 4, 'Sultanganj', NULL, NULL),
(156, 4, 'Raxaul Bazar', NULL, NULL),
(157, 4, 'Ramnagar', NULL, NULL),
(158, 4, 'Mahnar Bazar', NULL, NULL),
(159, 4, 'Warisaliganj', NULL, NULL),
(160, 4, 'Revelganj', NULL, NULL),
(161, 4, 'Rajgir', NULL, NULL),
(162, 4, 'Sonepur', NULL, NULL),
(163, 4, 'Sherghati', NULL, NULL),
(164, 4, 'Sugauli', NULL, NULL),
(165, 4, 'Makhdumpur', NULL, NULL),
(166, 4, 'Maner', NULL, NULL),
(167, 4, 'Rosera', NULL, NULL),
(168, 4, 'Nokha', NULL, NULL),
(169, 4, 'Piro', NULL, NULL),
(170, 4, 'Rafiganj', NULL, NULL),
(171, 4, 'Marhaura', NULL, NULL),
(172, 4, 'Mirganj', NULL, NULL),
(173, 4, 'Lalganj', NULL, NULL),
(174, 4, 'Murliganj', NULL, NULL),
(175, 4, 'Motipur', NULL, NULL),
(176, 4, 'Manihari', NULL, NULL),
(177, 4, 'Sheohar', NULL, NULL),
(178, 4, 'Maharajganj', NULL, NULL),
(179, 4, 'Silao', NULL, NULL),
(180, 4, 'Barh', NULL, NULL),
(181, 4, 'Asarganj', NULL, NULL),
(182, 31, 'Chandigarh', NULL, NULL),
(183, 5, 'Raipur', NULL, NULL),
(184, 5, 'Bhilai Nagar', NULL, NULL),
(185, 5, 'Korba', NULL, NULL),
(186, 5, 'Bilaspur', NULL, NULL),
(187, 5, 'Durg', NULL, NULL),
(188, 5, 'Rajnandgaon', NULL, NULL),
(189, 5, 'Jagdalpur', NULL, NULL),
(190, 5, 'Raigarh', NULL, NULL),
(191, 5, 'Ambikapur', NULL, NULL),
(192, 5, 'Mahasamund', NULL, NULL),
(193, 5, 'Dhamtari', NULL, NULL),
(194, 5, 'Chirmiri', NULL, NULL),
(195, 5, 'Bhatapara', NULL, NULL),
(196, 5, 'Dalli-Rajhara', NULL, NULL),
(197, 5, 'Naila Janjgir', NULL, NULL),
(198, 5, 'Tilda Newra', NULL, NULL),
(199, 5, 'Mungeli', NULL, NULL),
(200, 5, 'Manendragarh', NULL, NULL),
(201, 5, 'Sakti', NULL, NULL),
(202, 32, 'Silvassa', NULL, NULL),
(203, 35, 'Delhi', NULL, NULL),
(204, 35, 'New Delhi', NULL, NULL),
(205, 8, 'Faridabad', NULL, NULL),
(206, 8, 'Gurgaon', NULL, NULL),
(207, 8, 'Hisar', NULL, NULL),
(208, 8, 'Rohtak', NULL, NULL),
(209, 8, 'Panipat', NULL, NULL),
(210, 8, 'Karnal', NULL, NULL),
(211, 8, 'Sonipat', NULL, NULL),
(212, 8, 'Yamunanagar', NULL, NULL),
(213, 8, 'Panchkula', NULL, NULL),
(214, 8, 'Bhiwani', NULL, NULL),
(215, 8, 'Bahadurgarh', NULL, NULL),
(216, 8, 'Jind', NULL, NULL),
(217, 8, 'Sirsa', NULL, NULL),
(218, 8, 'Thanesar', NULL, NULL),
(219, 8, 'Kaithal', NULL, NULL),
(220, 8, 'Palwal', NULL, NULL),
(221, 8, 'Rewari', NULL, NULL),
(222, 8, 'Hansi', NULL, NULL),
(223, 8, 'Narnaul', NULL, NULL),
(224, 8, 'Fatehabad', NULL, NULL),
(225, 8, 'Gohana', NULL, NULL),
(226, 8, 'Tohana', NULL, NULL),
(227, 8, 'Narwana', NULL, NULL),
(228, 8, 'Mandi Dabwali', NULL, NULL),
(229, 8, 'Charkhi Dadri', NULL, NULL),
(230, 8, 'Shahbad', NULL, NULL),
(231, 8, 'Pehowa', NULL, NULL),
(232, 8, 'Samalkha', NULL, NULL),
(233, 8, 'Pinjore', NULL, NULL),
(234, 8, 'Ladwa', NULL, NULL),
(235, 8, 'Sohna', NULL, NULL),
(236, 8, 'Safidon', NULL, NULL),
(237, 8, 'Taraori', NULL, NULL),
(238, 8, 'Mahendragarh', NULL, NULL),
(239, 8, 'Ratia', NULL, NULL),
(240, 8, 'Rania', NULL, NULL),
(241, 8, 'Sarsod', NULL, NULL),
(242, 7, 'Jamnagar', NULL, NULL),
(243, 7, 'Nadiad', NULL, NULL),
(244, 7, 'Porbandar', NULL, NULL),
(245, 7, 'Anand', NULL, NULL),
(246, 7, 'Morvi', NULL, NULL),
(247, 7, 'Mahesana', NULL, NULL),
(248, 7, 'Bharuch', NULL, NULL),
(249, 7, 'Vapi', NULL, NULL),
(250, 7, 'Navsari', NULL, NULL),
(251, 7, 'Veraval', NULL, NULL),
(252, 7, 'Bhuj', NULL, NULL),
(253, 7, 'Godhra', NULL, NULL),
(254, 7, 'Palanpur', NULL, NULL),
(255, 7, 'Valsad', NULL, NULL),
(256, 7, 'Patan', NULL, NULL),
(257, 7, 'Deesa', NULL, NULL),
(258, 7, 'Amreli', NULL, NULL),
(259, 7, 'Anjar', NULL, NULL),
(260, 7, 'Dhoraji', NULL, NULL),
(261, 7, 'Khambhat', NULL, NULL),
(262, 7, 'Mahuva', NULL, NULL),
(263, 7, 'Keshod', NULL, NULL),
(264, 7, 'Wadhwan', NULL, NULL),
(265, 7, 'Ankleshwar', NULL, NULL),
(266, 7, 'Savarkundla', NULL, NULL),
(267, 7, 'Kadi', NULL, NULL),
(268, 7, 'Visnagar', NULL, NULL),
(269, 7, 'Upleta', NULL, NULL),
(270, 7, 'Una', NULL, NULL),
(271, 7, 'Sidhpur', NULL, NULL),
(272, 7, 'Unjha', NULL, NULL),
(273, 7, 'Mangrol', NULL, NULL),
(274, 7, 'Viramgam', NULL, NULL),
(275, 7, 'Modasa', NULL, NULL),
(276, 7, 'Palitana', NULL, NULL),
(277, 7, 'Petlad', NULL, NULL),
(278, 7, 'Kapadvanj', NULL, NULL),
(279, 7, 'Sihor', NULL, NULL),
(280, 7, 'Wankaner', NULL, NULL),
(281, 7, 'Limbdi', NULL, NULL),
(282, 7, 'Mandvi', NULL, NULL),
(283, 7, 'Thangadh', NULL, NULL),
(284, 7, 'Vyara', NULL, NULL),
(285, 7, 'Padra', NULL, NULL),
(286, 7, 'Lunawada', NULL, NULL),
(287, 7, 'Rajpipla', NULL, NULL),
(288, 7, 'Vapi', NULL, NULL),
(289, 7, 'Umreth', NULL, NULL),
(290, 7, 'Sanand', NULL, NULL),
(291, 7, 'Rajula', NULL, NULL),
(292, 7, 'Radhanpur', NULL, NULL),
(293, 7, 'Mahemdabad', NULL, NULL),
(294, 7, 'Ranavav', NULL, NULL),
(295, 7, 'Tharad', NULL, NULL),
(296, 7, 'Mansa', NULL, NULL),
(297, 7, 'Umbergaon', NULL, NULL),
(298, 7, 'Talaja', NULL, NULL),
(299, 7, 'Vadnagar', NULL, NULL),
(300, 7, 'Manavadar', NULL, NULL),
(301, 7, 'Salaya', NULL, NULL),
(302, 7, 'Vijapur', NULL, NULL),
(303, 7, 'Pardi', NULL, NULL),
(304, 7, 'Rapar', NULL, NULL),
(305, 7, 'Songadh', NULL, NULL),
(306, 7, 'Lathi', NULL, NULL),
(307, 7, 'Adalaj', NULL, NULL),
(308, 7, 'Chhapra', NULL, NULL),
(309, 9, 'Shimla', NULL, NULL),
(310, 9, 'Mandi', NULL, NULL),
(311, 9, 'Solan', NULL, NULL),
(312, 9, 'Nahan', NULL, NULL),
(313, 9, 'Sundarnagar', NULL, NULL),
(314, 9, 'Palampur', NULL, NULL),
(315, 10, 'Srinagar', NULL, NULL),
(316, 10, 'Jammu', NULL, NULL),
(317, 10, 'Baramula', NULL, NULL),
(318, 10, 'Anantnag', NULL, NULL),
(319, 10, 'Sopore', NULL, NULL),
(320, 10, 'KathUrban Agglomeration', NULL, NULL),
(321, 10, 'Rajauri', NULL, NULL),
(322, 10, 'Punch', NULL, NULL),
(323, 10, 'Udhampur', NULL, NULL),
(324, 11, 'Dhanbad', NULL, NULL),
(325, 11, 'Ranchi', NULL, NULL),
(326, 11, 'Jamshedpur', NULL, NULL),
(327, 11, 'Bokaro Steel City', NULL, NULL),
(328, 11, 'Deoghar', NULL, NULL),
(329, 11, 'Phusro', NULL, NULL),
(330, 11, 'Adityapur', NULL, NULL),
(331, 11, 'Hazaribag', NULL, NULL),
(332, 11, 'Giridih', NULL, NULL),
(333, 11, 'Ramgarh', NULL, NULL),
(334, 11, 'Jhumri Tilaiya', NULL, NULL),
(335, 11, 'Saunda', NULL, NULL),
(336, 11, 'Sahibganj', NULL, NULL),
(337, 11, 'Medininagar (Daltonganj)', NULL, NULL),
(338, 11, 'Chaibasa', NULL, NULL),
(339, 11, 'Chatra', NULL, NULL),
(340, 11, 'Gumia', NULL, NULL),
(341, 11, 'Dumka', NULL, NULL),
(342, 11, 'Madhupur', NULL, NULL),
(343, 11, 'Chirkunda', NULL, NULL),
(344, 11, 'Pakaur', NULL, NULL),
(345, 11, 'Simdega', NULL, NULL),
(346, 11, 'Musabani', NULL, NULL),
(347, 11, 'Mihijam', NULL, NULL),
(348, 11, 'Patratu', NULL, NULL),
(349, 11, 'Lohardaga', NULL, NULL),
(350, 11, 'Tenu dam-cum-Kathhara', NULL, NULL),
(351, 12, 'Bengaluru', NULL, NULL),
(352, 12, 'Hubli-Dharwad', NULL, NULL),
(353, 12, 'Belagavi', NULL, NULL),
(354, 12, 'Mangaluru', NULL, NULL),
(355, 12, 'Davanagere', NULL, NULL),
(356, 12, 'Ballari', NULL, NULL),
(357, 12, 'Tumkur', NULL, NULL),
(358, 12, 'Shivamogga', NULL, NULL),
(359, 12, 'Raayachuru', NULL, NULL),
(360, 12, 'Robertson Pet', NULL, NULL),
(361, 12, 'Kolar', NULL, NULL),
(362, 12, 'Mandya', NULL, NULL),
(363, 12, 'Udupi', NULL, NULL),
(364, 12, 'Chikkamagaluru', NULL, NULL),
(365, 12, 'Karwar', NULL, NULL),
(366, 12, 'Ranebennuru', NULL, NULL),
(367, 12, 'Ranibennur', NULL, NULL),
(368, 12, 'Ramanagaram', NULL, NULL),
(369, 12, 'Gokak', NULL, NULL),
(370, 12, 'Yadgir', NULL, NULL),
(371, 12, 'Rabkavi Banhatti', NULL, NULL),
(372, 12, 'Shahabad', NULL, NULL),
(373, 12, 'Sirsi', NULL, NULL),
(374, 12, 'Sindhnur', NULL, NULL),
(375, 12, 'Tiptur', NULL, NULL),
(376, 12, 'Arsikere', NULL, NULL),
(377, 12, 'Nanjangud', NULL, NULL),
(378, 12, 'Sagara', NULL, NULL),
(379, 12, 'Sira', NULL, NULL),
(380, 12, 'Puttur', NULL, NULL),
(381, 12, 'Athni', NULL, NULL),
(382, 12, 'Mulbagal', NULL, NULL),
(383, 12, 'Surapura', NULL, NULL),
(384, 12, 'Siruguppa', NULL, NULL),
(385, 12, 'Mudhol', NULL, NULL),
(386, 12, 'Sidlaghatta', NULL, NULL),
(387, 12, 'Shahpur', NULL, NULL),
(388, 12, 'Saundatti-Yellamma', NULL, NULL),
(389, 12, 'Wadi', NULL, NULL),
(390, 12, 'Manvi', NULL, NULL),
(391, 12, 'Nelamangala', NULL, NULL),
(392, 12, 'Lakshmeshwar', NULL, NULL),
(393, 12, 'Ramdurg', NULL, NULL),
(394, 12, 'Nargund', NULL, NULL),
(395, 12, 'Tarikere', NULL, NULL),
(396, 12, 'Malavalli', NULL, NULL),
(397, 12, 'Savanur', NULL, NULL),
(398, 12, 'Lingsugur', NULL, NULL),
(399, 12, 'Vijayapura', NULL, NULL),
(400, 12, 'Sankeshwara', NULL, NULL),
(401, 12, 'Madikeri', NULL, NULL),
(402, 12, 'Talikota', NULL, NULL),
(403, 12, 'Sedam', NULL, NULL),
(404, 12, 'Shikaripur', NULL, NULL),
(405, 12, 'Mahalingapura', NULL, NULL),
(406, 12, 'Mudalagi', NULL, NULL),
(407, 12, 'Muddebihal', NULL, NULL),
(408, 12, 'Pavagada', NULL, NULL),
(409, 12, 'Malur', NULL, NULL),
(410, 12, 'Sindhagi', NULL, NULL),
(411, 12, 'Sanduru', NULL, NULL),
(412, 12, 'Afzalpur', NULL, NULL),
(413, 12, 'Maddur', NULL, NULL),
(414, 12, 'Madhugiri', NULL, NULL),
(415, 12, 'Tekkalakote', NULL, NULL),
(416, 12, 'Terdal', NULL, NULL),
(417, 12, 'Mudabidri', NULL, NULL),
(418, 12, 'Magadi', NULL, NULL),
(419, 12, 'Navalgund', NULL, NULL),
(420, 12, 'Shiggaon', NULL, NULL),
(421, 12, 'Shrirangapattana', NULL, NULL),
(422, 12, 'Sindagi', NULL, NULL),
(423, 12, 'Sakaleshapura', NULL, NULL),
(424, 12, 'Srinivaspur', NULL, NULL),
(425, 12, 'Ron', NULL, NULL),
(426, 12, 'Mundargi', NULL, NULL),
(427, 12, 'Sadalagi', NULL, NULL),
(428, 12, 'Piriyapatna', NULL, NULL),
(429, 12, 'Adyar', NULL, NULL),
(430, 12, 'Mysore', NULL, NULL),
(431, 13, 'Thiruvananthapuram', NULL, NULL),
(432, 13, 'Kochi', NULL, NULL),
(433, 13, 'Kozhikode', NULL, NULL),
(434, 13, 'Kollam', NULL, NULL),
(435, 13, 'Thrissur', NULL, NULL),
(436, 13, 'Palakkad', NULL, NULL),
(437, 13, 'Alappuzha', NULL, NULL),
(438, 13, 'Malappuram', NULL, NULL),
(439, 13, 'Ponnani', NULL, NULL),
(440, 13, 'Vatakara', NULL, NULL),
(441, 13, 'Kanhangad', NULL, NULL),
(442, 13, 'Taliparamba', NULL, NULL),
(443, 13, 'Koyilandy', NULL, NULL),
(444, 13, 'Neyyattinkara', NULL, NULL),
(445, 13, 'Kayamkulam', NULL, NULL),
(446, 13, 'Nedumangad', NULL, NULL),
(447, 13, 'Kannur', NULL, NULL),
(448, 13, 'Tirur', NULL, NULL),
(449, 13, 'Kottayam', NULL, NULL),
(450, 13, 'Kasaragod', NULL, NULL),
(451, 13, 'Kunnamkulam', NULL, NULL),
(452, 13, 'Ottappalam', NULL, NULL),
(453, 13, 'Thiruvalla', NULL, NULL),
(454, 13, 'Thodupuzha', NULL, NULL),
(455, 13, 'Chalakudy', NULL, NULL),
(456, 13, 'Changanassery', NULL, NULL),
(457, 13, 'Punalur', NULL, NULL),
(458, 13, 'Nilambur', NULL, NULL),
(459, 13, 'Cherthala', NULL, NULL),
(460, 13, 'Perinthalmanna', NULL, NULL),
(461, 13, 'Mattannur', NULL, NULL),
(462, 13, 'Shoranur', NULL, NULL),
(463, 13, 'Varkala', NULL, NULL),
(464, 13, 'Paravoor', NULL, NULL),
(465, 13, 'Pathanamthitta', NULL, NULL),
(466, 13, 'Peringathur', NULL, NULL),
(467, 13, 'Attingal', NULL, NULL),
(468, 13, 'Kodungallur', NULL, NULL),
(469, 13, 'Pappinisseri', NULL, NULL),
(470, 13, 'Chittur-Thathamangalam', NULL, NULL),
(471, 13, 'Muvattupuzha', NULL, NULL),
(472, 13, 'Adoor', NULL, NULL),
(473, 13, 'Mavelikkara', NULL, NULL),
(474, 13, 'Mavoor', NULL, NULL),
(475, 13, 'Perumbavoor', NULL, NULL),
(476, 13, 'Vaikom', NULL, NULL),
(477, 13, 'Palai', NULL, NULL),
(478, 13, 'Panniyannur', NULL, NULL),
(479, 13, 'Guruvayoor', NULL, NULL),
(480, 13, 'Puthuppally', NULL, NULL),
(481, 13, 'Panamattom', NULL, NULL),
(482, 14, 'Indore', NULL, NULL),
(483, 14, 'Bhopal', NULL, NULL),
(484, 14, 'Jabalpur', NULL, NULL),
(485, 14, 'Gwalior', NULL, NULL),
(486, 14, 'Ujjain', NULL, NULL),
(487, 14, 'Sagar', NULL, NULL),
(488, 14, 'Ratlam', NULL, NULL),
(489, 14, 'Satna', NULL, NULL),
(490, 14, 'Murwara (Katni)', NULL, NULL),
(491, 14, 'Morena', NULL, NULL),
(492, 14, 'Singrauli', NULL, NULL),
(493, 14, 'Rewa', NULL, NULL),
(494, 14, 'Vidisha', NULL, NULL),
(495, 14, 'Ganjbasoda', NULL, NULL),
(496, 14, 'Shivpuri', NULL, NULL),
(497, 14, 'Mandsaur', NULL, NULL),
(498, 14, 'Neemuch', NULL, NULL),
(499, 14, 'Nagda', NULL, NULL),
(500, 14, 'Itarsi', NULL, NULL),
(501, 14, 'Sarni', NULL, NULL),
(502, 14, 'Sehore', NULL, NULL),
(503, 14, 'Mhow Cantonment', NULL, NULL),
(504, 14, 'Seoni', NULL, NULL),
(505, 14, 'Balaghat', NULL, NULL),
(506, 14, 'Ashok Nagar', NULL, NULL),
(507, 14, 'Tikamgarh', NULL, NULL),
(508, 14, 'Shahdol', NULL, NULL),
(509, 14, 'Pithampur', NULL, NULL),
(510, 14, 'Alirajpur', NULL, NULL),
(511, 14, 'Mandla', NULL, NULL),
(512, 14, 'Sheopur', NULL, NULL),
(513, 14, 'Shajapur', NULL, NULL),
(514, 14, 'Panna', NULL, NULL),
(515, 14, 'Raghogarh-Vijaypur', NULL, NULL),
(516, 14, 'Sendhwa', NULL, NULL),
(517, 14, 'Sidhi', NULL, NULL),
(518, 14, 'Pipariya', NULL, NULL),
(519, 14, 'Shujalpur', NULL, NULL),
(520, 14, 'Sironj', NULL, NULL),
(521, 14, 'Pandhurna', NULL, NULL),
(522, 14, 'Nowgong', NULL, NULL),
(523, 14, 'Mandideep', NULL, NULL),
(524, 14, 'Sihora', NULL, NULL),
(525, 14, 'Raisen', NULL, NULL),
(526, 14, 'Lahar', NULL, NULL),
(527, 14, 'Maihar', NULL, NULL),
(528, 14, 'Sanawad', NULL, NULL),
(529, 14, 'Sabalgarh', NULL, NULL),
(530, 14, 'Umaria', NULL, NULL),
(531, 14, 'Porsa', NULL, NULL),
(532, 14, 'Narsinghgarh', NULL, NULL),
(533, 14, 'Malaj Khand', NULL, NULL),
(534, 14, 'Sarangpur', NULL, NULL),
(535, 14, 'Mundi', NULL, NULL),
(536, 14, 'Nepanagar', NULL, NULL),
(537, 14, 'Pasan', NULL, NULL),
(538, 14, 'Mahidpur', NULL, NULL),
(539, 14, 'Seoni-Malwa', NULL, NULL),
(540, 14, 'Rehli', NULL, NULL),
(541, 14, 'Manawar', NULL, NULL),
(542, 14, 'Rahatgarh', NULL, NULL),
(543, 14, 'Panagar', NULL, NULL),
(544, 14, 'Wara Seoni', NULL, NULL),
(545, 14, 'Tarana', NULL, NULL),
(546, 14, 'Sausar', NULL, NULL),
(547, 14, 'Rajgarh', NULL, NULL),
(548, 14, 'Niwari', NULL, NULL),
(549, 14, 'Mauganj', NULL, NULL),
(550, 14, 'Manasa', NULL, NULL),
(551, 14, 'Nainpur', NULL, NULL),
(552, 14, 'Prithvipur', NULL, NULL),
(553, 14, 'Sohagpur', NULL, NULL),
(554, 14, 'Nowrozabad (Khodargama)', NULL, NULL),
(555, 14, 'Shamgarh', NULL, NULL),
(556, 14, 'Maharajpur', NULL, NULL),
(557, 14, 'Multai', NULL, NULL),
(558, 14, 'Pali', NULL, NULL),
(559, 14, 'Pachore', NULL, NULL),
(560, 14, 'Rau', NULL, NULL),
(561, 14, 'Mhowgaon', NULL, NULL),
(562, 14, 'Vijaypur', NULL, NULL),
(563, 14, 'Narsinghgarh', NULL, NULL),
(564, 15, 'Mumbai', NULL, NULL),
(565, 15, 'Pune', NULL, NULL),
(566, 15, 'Nagpur', NULL, NULL),
(567, 15, 'Thane', NULL, NULL),
(568, 15, 'Nashik', NULL, NULL),
(569, 15, 'Kalyan-Dombivali', NULL, NULL),
(570, 15, 'Vasai-Virar', NULL, NULL),
(571, 15, 'Solapur', NULL, NULL),
(572, 15, 'Mira-Bhayandar', NULL, NULL),
(573, 15, 'Bhiwandi', NULL, NULL),
(574, 15, 'Amravati', NULL, NULL),
(575, 15, 'Nanded-Waghala', NULL, NULL),
(576, 15, 'Sangli', NULL, NULL),
(577, 15, 'Malegaon', NULL, NULL),
(578, 15, 'Akola', NULL, NULL),
(579, 15, 'Latur', NULL, NULL),
(580, 15, 'Dhule', NULL, NULL),
(581, 15, 'Ahmednagar', NULL, NULL),
(582, 15, 'Ichalkaranji', NULL, NULL),
(583, 15, 'Parbhani', NULL, NULL),
(584, 15, 'Panvel', NULL, NULL),
(585, 15, 'Yavatmal', NULL, NULL),
(586, 15, 'Achalpur', NULL, NULL),
(587, 15, 'Osmanabad', NULL, NULL),
(588, 15, 'Nandurbar', NULL, NULL),
(589, 15, 'Satara', NULL, NULL),
(590, 15, 'Wardha', NULL, NULL),
(591, 15, 'Udgir', NULL, NULL),
(592, 15, 'Aurangabad', NULL, NULL),
(593, 15, 'Amalner', NULL, NULL),
(594, 15, 'Akot', NULL, NULL),
(595, 15, 'Pandharpur', NULL, NULL),
(596, 15, 'Shrirampur', NULL, NULL),
(597, 15, 'Parli', NULL, NULL),
(598, 15, 'Washim', NULL, NULL),
(599, 15, 'Ambejogai', NULL, NULL),
(600, 15, 'Manmad', NULL, NULL),
(601, 15, 'Ratnagiri', NULL, NULL),
(602, 15, 'Uran Islampur', NULL, NULL),
(603, 15, 'Pusad', NULL, NULL),
(604, 15, 'Sangamner', NULL, NULL),
(605, 15, 'Shirpur-Warwade', NULL, NULL),
(606, 15, 'Malkapur', NULL, NULL),
(607, 15, 'Wani', NULL, NULL),
(608, 15, 'Lonavla', NULL, NULL),
(609, 15, 'Talegaon Dabhade', NULL, NULL),
(610, 15, 'Anjangaon', NULL, NULL),
(611, 15, 'Umred', NULL, NULL),
(612, 15, 'Palghar', NULL, NULL),
(613, 15, 'Shegaon', NULL, NULL),
(614, 15, 'Ozar', NULL, NULL),
(615, 15, 'Phaltan', NULL, NULL),
(616, 15, 'Yevla', NULL, NULL),
(617, 15, 'Shahade', NULL, NULL),
(618, 15, 'Vita', NULL, NULL),
(619, 15, 'Umarkhed', NULL, NULL),
(620, 15, 'Warora', NULL, NULL),
(621, 15, 'Pachora', NULL, NULL),
(622, 15, 'Tumsar', NULL, NULL),
(623, 15, 'Manjlegaon', NULL, NULL),
(624, 15, 'Sillod', NULL, NULL),
(625, 15, 'Arvi', NULL, NULL),
(626, 15, 'Nandura', NULL, NULL),
(627, 15, 'Vaijapur', NULL, NULL),
(628, 15, 'Wadgaon Road', NULL, NULL),
(629, 15, 'Sailu', NULL, NULL),
(630, 15, 'Murtijapur', NULL, NULL),
(631, 15, 'Tasgaon', NULL, NULL),
(632, 15, 'Mehkar', NULL, NULL),
(633, 15, 'Yawal', NULL, NULL),
(634, 15, 'Pulgaon', NULL, NULL),
(635, 15, 'Nilanga', NULL, NULL),
(636, 15, 'Wai', NULL, NULL),
(637, 15, 'Umarga', NULL, NULL),
(638, 15, 'Paithan', NULL, NULL),
(639, 15, 'Rahuri', NULL, NULL),
(640, 15, 'Nawapur', NULL, NULL),
(641, 15, 'Tuljapur', NULL, NULL),
(642, 15, 'Morshi', NULL, NULL),
(643, 15, 'Purna', NULL, NULL),
(644, 15, 'Satana', NULL, NULL),
(645, 15, 'Pathri', NULL, NULL),
(646, 15, 'Sinnar', NULL, NULL),
(647, 15, 'Uchgaon', NULL, NULL),
(648, 15, 'Uran', NULL, NULL),
(649, 15, 'Pen', NULL, NULL),
(650, 15, 'Karjat', NULL, NULL),
(651, 15, 'Manwath', NULL, NULL),
(652, 15, 'Partur', NULL, NULL),
(653, 15, 'Sangole', NULL, NULL),
(654, 15, 'Mangrulpir', NULL, NULL),
(655, 15, 'Risod', NULL, NULL),
(656, 15, 'Shirur', NULL, NULL),
(657, 15, 'Savner', NULL, NULL),
(658, 15, 'Sasvad', NULL, NULL),
(659, 15, 'Pandharkaoda', NULL, NULL),
(660, 15, 'Talode', NULL, NULL),
(661, 15, 'Shrigonda', NULL, NULL),
(662, 15, 'Shirdi', NULL, NULL),
(663, 15, 'Raver', NULL, NULL),
(664, 15, 'Mukhed', NULL, NULL),
(665, 15, 'Rajura', NULL, NULL),
(666, 15, 'Vadgaon Kasba', NULL, NULL),
(667, 15, 'Tirora', NULL, NULL),
(668, 15, 'Mahad', NULL, NULL),
(669, 15, 'Lonar', NULL, NULL),
(670, 15, 'Sawantwadi', NULL, NULL),
(671, 15, 'Pathardi', NULL, NULL),
(672, 15, 'Pauni', NULL, NULL),
(673, 15, 'Ramtek', NULL, NULL),
(674, 15, 'Mul', NULL, NULL),
(675, 15, 'Soyagaon', NULL, NULL),
(676, 15, 'Mangalvedhe', NULL, NULL),
(677, 15, 'Narkhed', NULL, NULL),
(678, 15, 'Shendurjana', NULL, NULL),
(679, 15, 'Patur', NULL, NULL),
(680, 15, 'Mhaswad', NULL, NULL),
(681, 15, 'Loha', NULL, NULL),
(682, 15, 'Nandgaon', NULL, NULL),
(683, 15, 'Warud', NULL, NULL),
(684, 16, 'Imphal', NULL, NULL),
(685, 16, 'Thoubal', NULL, NULL),
(686, 16, 'Lilong', NULL, NULL),
(687, 16, 'Mayang Imphal', NULL, NULL),
(688, 17, 'Shillong', NULL, NULL),
(689, 17, 'Tura', NULL, NULL),
(690, 17, 'Nongstoin', NULL, NULL),
(691, 18, 'Aizawl', NULL, NULL),
(692, 18, 'Lunglei', NULL, NULL),
(693, 18, 'Saiha', NULL, NULL),
(694, 19, 'Dimapur', NULL, NULL),
(695, 19, 'Kohima', NULL, NULL),
(696, 19, 'Zunheboto', NULL, NULL),
(697, 19, 'Tuensang', NULL, NULL),
(698, 19, 'Wokha', NULL, NULL),
(699, 19, 'Mokokchung', NULL, NULL),
(700, 20, 'Bhubaneswar', NULL, NULL),
(701, 20, 'Cuttack', NULL, NULL),
(702, 20, 'Raurkela', NULL, NULL),
(703, 20, 'Brahmapur', NULL, NULL),
(704, 20, 'Sambalpur', NULL, NULL),
(705, 20, 'Puri', NULL, NULL),
(706, 20, 'Baleshwar Town', NULL, NULL),
(707, 20, 'Baripada Town', NULL, NULL),
(708, 20, 'Bhadrak', NULL, NULL),
(709, 20, 'Balangir', NULL, NULL),
(710, 20, 'Jharsuguda', NULL, NULL),
(711, 20, 'Bargarh', NULL, NULL),
(712, 20, 'Paradip', NULL, NULL),
(713, 20, 'Bhawanipatna', NULL, NULL),
(714, 20, 'Dhenkanal', NULL, NULL),
(715, 20, 'Barbil', NULL, NULL),
(716, 20, 'Kendujhar', NULL, NULL),
(717, 20, 'Sunabeda', NULL, NULL),
(718, 20, 'Rayagada', NULL, NULL),
(719, 20, 'Jatani', NULL, NULL),
(720, 20, 'Byasanagar', NULL, NULL),
(721, 20, 'Kendrapara', NULL, NULL),
(722, 20, 'Rajagangapur', NULL, NULL),
(723, 20, 'Parlakhemundi', NULL, NULL),
(724, 20, 'Talcher', NULL, NULL),
(725, 20, 'Sundargarh', NULL, NULL),
(726, 20, 'Phulabani', NULL, NULL),
(727, 20, 'Pattamundai', NULL, NULL),
(728, 20, 'Titlagarh', NULL, NULL),
(729, 20, 'Nabarangapur', NULL, NULL),
(730, 20, 'Soro', NULL, NULL),
(731, 20, 'Malkangiri', NULL, NULL),
(732, 20, 'Rairangpur', NULL, NULL),
(733, 20, 'Tarbha', NULL, NULL),
(734, 36, 'Pondicherry', NULL, NULL),
(735, 36, 'Karaikal', NULL, NULL),
(736, 36, 'Yanam', NULL, NULL),
(737, 36, 'Mahe', NULL, NULL),
(738, 21, 'Ludhiana', NULL, NULL),
(739, 21, 'Patiala', NULL, NULL),
(740, 21, 'Amritsar', NULL, NULL),
(741, 21, 'Jalandhar', NULL, NULL),
(742, 21, 'Bathinda', NULL, NULL),
(743, 21, 'Pathankot', NULL, NULL),
(744, 21, 'Hoshiarpur', NULL, NULL),
(745, 21, 'Batala', NULL, NULL),
(746, 21, 'Moga', NULL, NULL),
(747, 21, 'Malerkotla', NULL, NULL),
(748, 21, 'Khanna', NULL, NULL),
(749, 21, 'Mohali', NULL, NULL),
(750, 21, 'Barnala', NULL, NULL),
(751, 21, 'Firozpur', NULL, NULL),
(752, 21, 'Phagwara', NULL, NULL),
(753, 21, 'Kapurthala', NULL, NULL),
(754, 21, 'Zirakpur', NULL, NULL),
(755, 21, 'Kot Kapura', NULL, NULL),
(756, 21, 'Faridkot', NULL, NULL),
(757, 21, 'Muktsar', NULL, NULL),
(758, 21, 'Rajpura', NULL, NULL),
(759, 21, 'Sangrur', NULL, NULL),
(760, 21, 'Fazilka', NULL, NULL),
(761, 21, 'Gurdaspur', NULL, NULL),
(762, 21, 'Kharar', NULL, NULL),
(763, 21, 'Gobindgarh', NULL, NULL),
(764, 21, 'Mansa', NULL, NULL),
(765, 21, 'Malout', NULL, NULL),
(766, 21, 'Nabha', NULL, NULL),
(767, 21, 'Tarn Taran', NULL, NULL),
(768, 21, 'Jagraon', NULL, NULL),
(769, 21, 'Sunam', NULL, NULL),
(770, 21, 'Dhuri', NULL, NULL),
(771, 21, 'Firozpur Cantt.', NULL, NULL),
(772, 21, 'Sirhind Fatehgarh Sahib', NULL, NULL),
(773, 21, 'Rupnagar', NULL, NULL),
(774, 21, 'Jalandhar Cantt.', NULL, NULL),
(775, 21, 'Samana', NULL, NULL),
(776, 21, 'Nawanshahr', NULL, NULL),
(777, 21, 'Rampura Phul', NULL, NULL),
(778, 21, 'Nangal', NULL, NULL),
(779, 21, 'Nakodar', NULL, NULL),
(780, 21, 'Zira', NULL, NULL),
(781, 21, 'Patti', NULL, NULL),
(782, 21, 'Raikot', NULL, NULL),
(783, 21, 'Longowal', NULL, NULL),
(784, 21, 'Urmar Tanda', NULL, NULL),
(785, 21, 'Morinda, India', NULL, NULL),
(786, 21, 'Phillaur', NULL, NULL),
(787, 21, 'Pattran', NULL, NULL),
(788, 21, 'Qadian', NULL, NULL),
(789, 21, 'Sujanpur', NULL, NULL),
(790, 21, 'Mukerian', NULL, NULL),
(791, 21, 'Talwara', NULL, NULL),
(792, 22, 'Jaipur', NULL, NULL),
(793, 22, 'Jodhpur', NULL, NULL),
(794, 22, 'Bikaner', NULL, NULL),
(795, 22, 'Udaipur', NULL, NULL),
(796, 22, 'Ajmer', NULL, NULL),
(797, 22, 'Bhilwara', NULL, NULL),
(798, 22, 'Alwar', NULL, NULL),
(799, 22, 'Bharatpur', NULL, NULL),
(800, 22, 'Pali', NULL, NULL),
(801, 22, 'Barmer', NULL, NULL),
(802, 22, 'Sikar', NULL, NULL),
(803, 22, 'Tonk', NULL, NULL),
(804, 22, 'Sadulpur', NULL, NULL),
(805, 22, 'Sawai Madhopur', NULL, NULL),
(806, 22, 'Nagaur', NULL, NULL),
(807, 22, 'Makrana', NULL, NULL),
(808, 22, 'Sujangarh', NULL, NULL),
(809, 22, 'Sardarshahar', NULL, NULL),
(810, 22, 'Ladnu', NULL, NULL),
(811, 22, 'Ratangarh', NULL, NULL),
(812, 22, 'Nokha', NULL, NULL),
(813, 22, 'Nimbahera', NULL, NULL),
(814, 22, 'Suratgarh', NULL, NULL),
(815, 22, 'Rajsamand', NULL, NULL),
(816, 22, 'Lachhmangarh', NULL, NULL),
(817, 22, 'Rajgarh (Churu)', NULL, NULL),
(818, 22, 'Nasirabad', NULL, NULL),
(819, 22, 'Nohar', NULL, NULL),
(820, 22, 'Phalodi', NULL, NULL),
(821, 22, 'Nathdwara', NULL, NULL),
(822, 22, 'Pilani', NULL, NULL),
(823, 22, 'Merta City', NULL, NULL),
(824, 22, 'Sojat', NULL, NULL),
(825, 22, 'Neem-Ka-Thana', NULL, NULL),
(826, 22, 'Sirohi', NULL, NULL),
(827, 22, 'Pratapgarh', NULL, NULL),
(828, 22, 'Rawatbhata', NULL, NULL),
(829, 22, 'Sangaria', NULL, NULL),
(830, 22, 'Lalsot', NULL, NULL),
(831, 22, 'Pilibanga', NULL, NULL),
(832, 22, 'Pipar City', NULL, NULL),
(833, 22, 'Taranagar', NULL, NULL),
(834, 22, 'Vijainagar, Ajmer', NULL, NULL),
(835, 22, 'Sumerpur', NULL, NULL),
(836, 22, 'Sagwara', NULL, NULL),
(837, 22, 'Ramganj Mandi', NULL, NULL),
(838, 22, 'Lakheri', NULL, NULL),
(839, 22, 'Udaipurwati', NULL, NULL),
(840, 22, 'Losal', NULL, NULL),
(841, 22, 'Sri Madhopur', NULL, NULL),
(842, 22, 'Ramngarh', NULL, NULL),
(843, 22, 'Rawatsar', NULL, NULL),
(844, 22, 'Rajakhera', NULL, NULL),
(845, 22, 'Shahpura', NULL, NULL),
(846, 22, 'Shahpura', NULL, NULL),
(847, 22, 'Raisinghnagar', NULL, NULL),
(848, 22, 'Malpura', NULL, NULL),
(849, 22, 'Nadbai', NULL, NULL),
(850, 22, 'Sanchore', NULL, NULL),
(851, 22, 'Nagar', NULL, NULL),
(852, 22, 'Rajgarh (Alwar)', NULL, NULL),
(853, 22, 'Sheoganj', NULL, NULL),
(854, 22, 'Sadri', NULL, NULL),
(855, 22, 'Todaraisingh', NULL, NULL),
(856, 22, 'Todabhim', NULL, NULL),
(857, 22, 'Reengus', NULL, NULL),
(858, 22, 'Rajaldesar', NULL, NULL),
(859, 22, 'Sadulshahar', NULL, NULL),
(860, 22, 'Sambhar', NULL, NULL),
(861, 22, 'Prantij', NULL, NULL),
(862, 22, 'Mount Abu', NULL, NULL),
(863, 22, 'Mangrol', NULL, NULL),
(864, 22, 'Phulera', NULL, NULL),
(865, 22, 'Mandawa', NULL, NULL),
(866, 22, 'Pindwara', NULL, NULL),
(867, 22, 'Mandalgarh', NULL, NULL),
(868, 22, 'Takhatgarh', NULL, NULL),
(869, 24, 'Chennai', NULL, NULL),
(870, 24, 'Coimbatore', NULL, NULL),
(871, 24, 'Madurai', NULL, NULL),
(872, 24, 'Tiruchirappalli', NULL, NULL),
(873, 24, 'Salem', NULL, NULL),
(874, 24, 'Tirunelveli', NULL, NULL),
(875, 24, 'Tiruppur', NULL, NULL),
(876, 24, 'Ranipet', NULL, NULL),
(877, 24, 'Nagercoil', NULL, NULL),
(878, 24, 'Thanjavur', NULL, NULL),
(879, 24, 'Vellore', NULL, NULL),
(880, 24, 'Kancheepuram', NULL, NULL),
(881, 24, 'Erode', NULL, NULL),
(882, 24, 'Tiruvannamalai', NULL, NULL),
(883, 24, 'Pollachi', NULL, NULL),
(884, 24, 'Rajapalayam', NULL, NULL),
(885, 24, 'Sivakasi', NULL, NULL),
(886, 24, 'Pudukkottai', NULL, NULL),
(887, 24, 'Neyveli (TS)', NULL, NULL),
(888, 24, 'Nagapattinam', NULL, NULL),
(889, 24, 'Viluppuram', NULL, NULL),
(890, 24, 'Tiruchengode', NULL, NULL),
(891, 24, 'Vaniyambadi', NULL, NULL),
(892, 24, 'Theni Allinagaram', NULL, NULL),
(893, 24, 'Udhagamandalam', NULL, NULL),
(894, 24, 'Aruppukkottai', NULL, NULL),
(895, 24, 'Paramakudi', NULL, NULL),
(896, 24, 'Arakkonam', NULL, NULL),
(897, 24, 'Virudhachalam', NULL, NULL),
(898, 24, 'Srivilliputhur', NULL, NULL),
(899, 24, 'Tindivanam', NULL, NULL),
(900, 24, 'Virudhunagar', NULL, NULL),
(901, 24, 'Karur', NULL, NULL),
(902, 24, 'Valparai', NULL, NULL),
(903, 24, 'Sankarankovil', NULL, NULL),
(904, 24, 'Tenkasi', NULL, NULL),
(905, 24, 'Palani', NULL, NULL),
(906, 24, 'Pattukkottai', NULL, NULL),
(907, 24, 'Tirupathur', NULL, NULL),
(908, 24, 'Ramanathapuram', NULL, NULL),
(909, 24, 'Udumalaipettai', NULL, NULL),
(910, 24, 'Gobichettipalayam', NULL, NULL),
(911, 24, 'Thiruvarur', NULL, NULL),
(912, 24, 'Thiruvallur', NULL, NULL),
(913, 24, 'Panruti', NULL, NULL),
(914, 24, 'Namakkal', NULL, NULL),
(915, 24, 'Thirumangalam', NULL, NULL),
(916, 24, 'Vikramasingapuram', NULL, NULL),
(917, 24, 'Nellikuppam', NULL, NULL),
(918, 24, 'Rasipuram', NULL, NULL),
(919, 24, 'Tiruttani', NULL, NULL),
(920, 24, 'Nandivaram-Guduvancheri', NULL, NULL),
(921, 24, 'Periyakulam', NULL, NULL),
(922, 24, 'Pernampattu', NULL, NULL),
(923, 24, 'Vellakoil', NULL, NULL),
(924, 24, 'Sivaganga', NULL, NULL),
(925, 24, 'Vadalur', NULL, NULL),
(926, 24, 'Rameshwaram', NULL, NULL),
(927, 24, 'Tiruvethipuram', NULL, NULL),
(928, 24, 'Perambalur', NULL, NULL),
(929, 24, 'Usilampatti', NULL, NULL),
(930, 24, 'Vedaranyam', NULL, NULL),
(931, 24, 'Sathyamangalam', NULL, NULL),
(932, 24, 'Puliyankudi', NULL, NULL),
(933, 24, 'Nanjikottai', NULL, NULL),
(934, 24, 'Thuraiyur', NULL, NULL),
(935, 24, 'Sirkali', NULL, NULL),
(936, 24, 'Tiruchendur', NULL, NULL),
(937, 24, 'Periyasemur', NULL, NULL),
(938, 24, 'Sattur', NULL, NULL),
(939, 24, 'Vandavasi', NULL, NULL),
(940, 24, 'Tharamangalam', NULL, NULL),
(941, 24, 'Tirukkoyilur', NULL, NULL),
(942, 24, 'Oddanchatram', NULL, NULL),
(943, 24, 'Palladam', NULL, NULL),
(944, 24, 'Vadakkuvalliyur', NULL, NULL),
(945, 24, 'Tirukalukundram', NULL, NULL),
(946, 24, 'Uthamapalayam', NULL, NULL),
(947, 24, 'Surandai', NULL, NULL),
(948, 24, 'Sankari', NULL, NULL),
(949, 24, 'Shenkottai', NULL, NULL),
(950, 24, 'Vadipatti', NULL, NULL),
(951, 24, 'Sholingur', NULL, NULL),
(952, 24, 'Tirupathur', NULL, NULL),
(953, 24, 'Manachanallur', NULL, NULL),
(954, 24, 'Viswanatham', NULL, NULL),
(955, 24, 'Polur', NULL, NULL),
(956, 24, 'Panagudi', NULL, NULL),
(957, 24, 'Uthiramerur', NULL, NULL),
(958, 24, 'Thiruthuraipoondi', NULL, NULL),
(959, 24, 'Pallapatti', NULL, NULL),
(960, 24, 'Ponneri', NULL, NULL),
(961, 24, 'Lalgudi', NULL, NULL),
(962, 24, 'Natham', NULL, NULL),
(963, 24, 'Unnamalaikadai', NULL, NULL),
(964, 24, 'P.N.Patti', NULL, NULL),
(965, 24, 'Tharangambadi', NULL, NULL),
(966, 24, 'Tittakudi', NULL, NULL),
(967, 24, 'Pacode', NULL, NULL),
(968, 24, 'O'' Valley', NULL, NULL),
(969, 24, 'Suriyampalayam', NULL, NULL),
(970, 24, 'Sholavandan', NULL, NULL),
(971, 24, 'Thammampatti', NULL, NULL),
(972, 24, 'Namagiripettai', NULL, NULL),
(973, 24, 'Peravurani', NULL, NULL),
(974, 24, 'Parangipettai', NULL, NULL),
(975, 24, 'Pudupattinam', NULL, NULL),
(976, 24, 'Pallikonda', NULL, NULL),
(977, 24, 'Sivagiri', NULL, NULL),
(978, 24, 'Punjaipugalur', NULL, NULL),
(979, 24, 'Padmanabhapuram', NULL, NULL),
(980, 24, 'Thirupuvanam', NULL, NULL),
(981, 29, 'Hyderabad', NULL, NULL),
(982, 29, 'Warangal', NULL, NULL),
(983, 29, 'Nizamabad', NULL, NULL),
(984, 29, 'Karimnagar', NULL, NULL),
(985, 29, 'Ramagundam', NULL, NULL),
(986, 29, 'Khammam', NULL, NULL),
(987, 29, 'Mahbubnagar', NULL, NULL),
(988, 29, 'Mancherial', NULL, NULL),
(989, 29, 'Adilabad', NULL, NULL),
(990, 29, 'Suryapet', NULL, NULL),
(991, 29, 'Jagtial', NULL, NULL),
(992, 29, 'Miryalaguda', NULL, NULL),
(993, 29, 'Nirmal', NULL, NULL),
(994, 29, 'Kamareddy', NULL, NULL),
(995, 29, 'Kothagudem', NULL, NULL),
(996, 29, 'Bodhan', NULL, NULL),
(997, 29, 'Palwancha', NULL, NULL),
(998, 29, 'Mandamarri', NULL, NULL),
(999, 29, 'Koratla', NULL, NULL),
(1000, 29, 'Sircilla', NULL, NULL),
(1001, 29, 'Tandur', NULL, NULL),
(1002, 29, 'Siddipet', NULL, NULL),
(1003, 29, 'Wanaparthy', NULL, NULL),
(1004, 29, 'Kagaznagar', NULL, NULL),
(1005, 29, 'Gadwal', NULL, NULL),
(1006, 29, 'Sangareddy', NULL, NULL),
(1007, 29, 'Bellampalle', NULL, NULL),
(1008, 29, 'Bhongir', NULL, NULL),
(1009, 29, 'Vikarabad', NULL, NULL),
(1010, 29, 'Jangaon', NULL, NULL),
(1011, 29, 'Bhadrachalam', NULL, NULL),
(1012, 29, 'Bhainsa', NULL, NULL),
(1013, 29, 'Farooqnagar', NULL, NULL),
(1014, 29, 'Medak', NULL, NULL),
(1015, 29, 'Narayanpet', NULL, NULL),
(1016, 29, 'Sadasivpet', NULL, NULL),
(1017, 29, 'Yellandu', NULL, NULL),
(1018, 29, 'Manuguru', NULL, NULL),
(1019, 29, 'Kyathampalle', NULL, NULL),
(1020, 29, 'Nagarkurnool', NULL, NULL),
(1021, 25, 'Agartala', NULL, NULL),
(1022, 25, 'Udaipur', NULL, NULL),
(1023, 25, 'Dharmanagar', NULL, NULL),
(1024, 25, 'Pratapgarh', NULL, NULL),
(1025, 25, 'Kailasahar', NULL, NULL),
(1026, 25, 'Belonia', NULL, NULL),
(1027, 25, 'Khowai', NULL, NULL),
(1028, 26, 'Lucknow', NULL, NULL),
(1029, 26, 'Kanpur', NULL, NULL),
(1030, 26, 'Firozabad', NULL, NULL),
(1031, 26, 'Agra', NULL, NULL),
(1032, 26, 'Meerut', NULL, NULL),
(1033, 26, 'Varanasi', NULL, NULL),
(1034, 26, 'Allahabad', NULL, NULL),
(1035, 26, 'Amroha', NULL, NULL),
(1036, 26, 'Moradabad', NULL, NULL),
(1037, 26, 'Aligarh', NULL, NULL),
(1038, 26, 'Saharanpur', NULL, NULL),
(1039, 26, 'Noida', NULL, NULL),
(1040, 26, 'Loni', NULL, NULL),
(1041, 26, 'Jhansi', NULL, NULL),
(1042, 26, 'Shahjahanpur', NULL, NULL),
(1043, 26, 'Rampur', NULL, NULL),
(1044, 26, 'Modinagar', NULL, NULL),
(1045, 26, 'Hapur', NULL, NULL),
(1046, 26, 'Etawah', NULL, NULL),
(1047, 26, 'Sambhal', NULL, NULL),
(1048, 26, 'Orai', NULL, NULL),
(1049, 26, 'Bahraich', NULL, NULL),
(1050, 26, 'Unnao', NULL, NULL),
(1051, 26, 'Rae Bareli', NULL, NULL),
(1052, 26, 'Lakhimpur', NULL, NULL),
(1053, 26, 'Sitapur', NULL, NULL),
(1054, 26, 'Lalitpur', NULL, NULL),
(1055, 26, 'Pilibhit', NULL, NULL),
(1056, 26, 'Chandausi', NULL, NULL),
(1057, 26, 'Hardoi', NULL, NULL),
(1058, 26, 'Azamgarh', NULL, NULL),
(1059, 26, 'Khair', NULL, NULL),
(1060, 26, 'Sultanpur', NULL, NULL),
(1061, 26, 'Tanda', NULL, NULL),
(1062, 26, 'Nagina', NULL, NULL),
(1063, 26, 'Shamli', NULL, NULL),
(1064, 26, 'Najibabad', NULL, NULL),
(1065, 26, 'Shikohabad', NULL, NULL),
(1066, 26, 'Sikandrabad', NULL, NULL),
(1067, 26, 'Shahabad, Hardoi', NULL, NULL),
(1068, 26, 'Pilkhuwa', NULL, NULL),
(1069, 26, 'Renukoot', NULL, NULL),
(1070, 26, 'Vrindavan', NULL, NULL),
(1071, 26, 'Ujhani', NULL, NULL),
(1072, 26, 'Laharpur', NULL, NULL),
(1073, 26, 'Tilhar', NULL, NULL),
(1074, 26, 'Sahaswan', NULL, NULL),
(1075, 26, 'Rath', NULL, NULL),
(1076, 26, 'Sherkot', NULL, NULL),
(1077, 26, 'Kalpi', NULL, NULL),
(1078, 26, 'Tundla', NULL, NULL),
(1079, 26, 'Sandila', NULL, NULL),
(1080, 26, 'Nanpara', NULL, NULL),
(1081, 26, 'Sardhana', NULL, NULL),
(1082, 26, 'Nehtaur', NULL, NULL),
(1083, 26, 'Seohara', NULL, NULL),
(1084, 26, 'Padrauna', NULL, NULL),
(1085, 26, 'Mathura', NULL, NULL),
(1086, 26, 'Thakurdwara', NULL, NULL),
(1087, 26, 'Nawabganj', NULL, NULL),
(1088, 26, 'Siana', NULL, NULL),
(1089, 26, 'Noorpur', NULL, NULL),
(1090, 26, 'Sikandra Rao', NULL, NULL),
(1091, 26, 'Puranpur', NULL, NULL),
(1092, 26, 'Rudauli', NULL, NULL),
(1093, 26, 'Thana Bhawan', NULL, NULL),
(1094, 26, 'Palia Kalan', NULL, NULL),
(1095, 26, 'Zaidpur', NULL, NULL),
(1096, 26, 'Nautanwa', NULL, NULL),
(1097, 26, 'Zamania', NULL, NULL),
(1098, 26, 'Shikarpur, Bulandshahr', NULL, NULL),
(1099, 26, 'Naugawan Sadat', NULL, NULL),
(1100, 26, 'Fatehpur Sikri', NULL, NULL),
(1101, 26, 'Shahabad, Rampur', NULL, NULL),
(1102, 26, 'Robertsganj', NULL, NULL),
(1103, 26, 'Utraula', NULL, NULL),
(1104, 26, 'Sadabad', NULL, NULL),
(1105, 26, 'Rasra', NULL, NULL),
(1106, 26, 'Lar', NULL, NULL),
(1107, 26, 'Lal Gopalganj Nindaura', NULL, NULL),
(1108, 26, 'Sirsaganj', NULL, NULL),
(1109, 26, 'Pihani', NULL, NULL),
(1110, 26, 'Shamsabad, Agra', NULL, NULL),
(1111, 26, 'Rudrapur', NULL, NULL),
(1112, 26, 'Soron', NULL, NULL),
(1113, 26, 'SUrban Agglomerationr', NULL, NULL),
(1114, 26, 'Samdhan', NULL, NULL),
(1115, 26, 'Sahjanwa', NULL, NULL),
(1116, 26, 'Rampur Maniharan', NULL, NULL),
(1117, 26, 'Sumerpur', NULL, NULL),
(1118, 26, 'Shahganj', NULL, NULL),
(1119, 26, 'Tulsipur', NULL, NULL),
(1120, 26, 'Tirwaganj', NULL, NULL),
(1121, 26, 'PurqUrban Agglomerationzi', NULL, NULL),
(1122, 26, 'Shamsabad, Farrukhabad', NULL, NULL),
(1123, 26, 'Warhapur', NULL, NULL),
(1124, 26, 'Powayan', NULL, NULL),
(1125, 26, 'Sandi', NULL, NULL),
(1126, 26, 'Achhnera', NULL, NULL),
(1127, 26, 'Naraura', NULL, NULL),
(1128, 26, 'Nakur', NULL, NULL),
(1129, 26, 'Sahaspur', NULL, NULL),
(1130, 26, 'Safipur', NULL, NULL),
(1131, 26, 'Reoti', NULL, NULL),
(1132, 26, 'Sikanderpur', NULL, NULL),
(1133, 26, 'Saidpur', NULL, NULL),
(1134, 26, 'Sirsi', NULL, NULL),
(1135, 26, 'Purwa', NULL, NULL),
(1136, 26, 'Parasi', NULL, NULL),
(1137, 26, 'Lalganj', NULL, NULL),
(1138, 26, 'Phulpur', NULL, NULL),
(1139, 26, 'Shishgarh', NULL, NULL),
(1140, 26, 'Sahawar', NULL, NULL),
(1141, 26, 'Samthar', NULL, NULL),
(1142, 26, 'Pukhrayan', NULL, NULL),
(1143, 26, 'Obra', NULL, NULL),
(1144, 26, 'Niwai', NULL, NULL),
(1145, 27, 'Dehradun', NULL, NULL),
(1146, 27, 'Hardwar', NULL, NULL),
(1147, 27, 'Haldwani-cum-Kathgodam', NULL, NULL),
(1148, 27, 'Srinagar', NULL, NULL),
(1149, 27, 'Kashipur', NULL, NULL),
(1150, 27, 'Roorkee', NULL, NULL),
(1151, 27, 'Rudrapur', NULL, NULL),
(1152, 27, 'Rishikesh', NULL, NULL),
(1153, 27, 'Ramnagar', NULL, NULL),
(1154, 27, 'Pithoragarh', NULL, NULL),
(1155, 27, 'Manglaur', NULL, NULL),
(1156, 27, 'Nainital', NULL, NULL),
(1157, 27, 'Mussoorie', NULL, NULL),
(1158, 27, 'Tehri', NULL, NULL),
(1159, 27, 'Pauri', NULL, NULL),
(1160, 27, 'Nagla', NULL, NULL),
(1161, 27, 'Sitarganj', NULL, NULL),
(1162, 27, 'Bageshwar', NULL, NULL),
(1163, 28, 'Kolkata', NULL, NULL),
(1164, 28, 'Siliguri', NULL, NULL),
(1165, 28, 'Asansol', NULL, NULL),
(1166, 28, 'Raghunathganj', NULL, NULL),
(1167, 28, 'Kharagpur', NULL, NULL),
(1168, 28, 'Naihati', NULL, NULL),
(1169, 28, 'English Bazar', NULL, NULL),
(1170, 28, 'Baharampur', NULL, NULL),
(1171, 28, 'Hugli-Chinsurah', NULL, NULL),
(1172, 28, 'Raiganj', NULL, NULL),
(1173, 28, 'Jalpaiguri', NULL, NULL),
(1174, 28, 'Santipur', NULL, NULL),
(1175, 28, 'Balurghat', NULL, NULL),
(1176, 28, 'Medinipur', NULL, NULL),
(1177, 28, 'Habra', NULL, NULL),
(1178, 28, 'Ranaghat', NULL, NULL),
(1179, 28, 'Bankura', NULL, NULL),
(1180, 28, 'Nabadwip', NULL, NULL),
(1181, 28, 'Darjiling', NULL, NULL),
(1182, 28, 'Purulia', NULL, NULL),
(1183, 28, 'Arambagh', NULL, NULL),
(1184, 28, 'Tamluk', NULL, NULL),
(1185, 28, 'AlipurdUrban Agglomerationr', NULL, NULL),
(1186, 28, 'Suri', NULL, NULL),
(1187, 28, 'Jhargram', NULL, NULL),
(1188, 28, 'Gangarampur', NULL, NULL),
(1189, 28, 'Rampurhat', NULL, NULL),
(1190, 28, 'Kalimpong', NULL, NULL),
(1191, 28, 'Sainthia', NULL, NULL),
(1192, 28, 'Taki', NULL, NULL),
(1193, 28, 'Murshidabad', NULL, NULL),
(1194, 28, 'Memari', NULL, NULL),
(1195, 28, 'Paschim Punropara', NULL, NULL),
(1196, 28, 'Tarakeswar', NULL, NULL),
(1197, 28, 'Sonamukhi', NULL, NULL),
(1198, 28, 'PandUrban Agglomeration', NULL, NULL),
(1199, 28, 'Mainaguri', NULL, NULL),
(1200, 28, 'Malda', NULL, NULL),
(1201, 28, 'Panchla', NULL, NULL),
(1202, 28, 'Raghunathpur', NULL, NULL),
(1203, 28, 'Mathabhanga', NULL, NULL),
(1204, 28, 'Monoharpur', NULL, NULL),
(1205, 28, 'Srirampore', NULL, NULL),
(1206, 28, 'Adra', NULL, NULL),
(1207, 6, 'Bicholim', NULL, NULL),
(1208, 6, 'Canacona', NULL, NULL),
(1209, 6, 'Cuncolim', NULL, NULL),
(1210, 6, 'Curchorem', NULL, NULL),
(1211, 6, 'Mapusa', NULL, NULL),
(1212, 6, 'Margao', NULL, NULL),
(1213, 6, 'Mormugao', NULL, NULL),
(1214, 6, 'Panaji', NULL, NULL),
(1215, 6, 'Pernem', NULL, NULL),
(1216, 6, 'Ponda', NULL, NULL),
(1217, 6, 'Quepem', NULL, NULL),
(1218, 6, 'Sanguem', NULL, NULL),
(1219, 6, 'Sanquelim', NULL, NULL),
(1220, 6, 'Valpoi', NULL, NULL),
(1221, 23, 'Gangtok', NULL, NULL),
(1222, 23, 'Gyalshing', NULL, NULL),
(1223, 23, 'Jorethang', NULL, NULL),
(1224, 23, 'Mangan', NULL, NULL),
(1225, 23, 'Namchi', NULL, NULL),
(1226, 23, 'Nayabazar', NULL, NULL),
(1227, 23, 'Rangpo', NULL, NULL),
(1228, 23, 'Rhenak (Rhenock)', NULL, NULL),
(1229, 23, 'Singtam', NULL, NULL),
(1230, 1, 'Amaravati', NULL, NULL),
(1231, 1, 'Mangalagiri', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commission_types`
--

CREATE TABLE IF NOT EXISTS `commission_types` (
  `id` int(11) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `display_value` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission_types`
--

INSERT INTO `commission_types` (`id`, `display_name`, `display_value`) VALUES
(1, 'Recurring', 'recurring'),
(2, 'Onetime', 'onetime'),
(3, 'Transfer Price', 'transfer-price');

-- --------------------------------------------------------

--
-- Table structure for table `contract_periods`
--

CREATE TABLE IF NOT EXISTS `contract_periods` (
  `id` int(11) NOT NULL,
  `display_value` varchar(20) NOT NULL,
  `display_name` varchar(20) NOT NULL COMMENT 'In months'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_periods`
--

INSERT INTO `contract_periods` (`id`, `display_value`, `display_name`) VALUES
(1, '12', '12'),
(2, '24', '24'),
(3, '36', '36'),
(4, '48', '48'),
(5, '60', '60');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint(20) unsigned NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'India', '2021-06-21 21:25:57', '2021-06-21 21:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `customer_types`
--

CREATE TABLE IF NOT EXISTS `customer_types` (
  `id` int(11) NOT NULL,
  `customer_type_value` varchar(100) NOT NULL,
  `customer_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_types`
--

INSERT INTO `customer_types` (`id`, `customer_type_value`, `customer_type_name`) VALUES
(1, 'new-logo', 'New Logo'),
(2, 'existing-logo', 'Existing Logo');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `event_content` text NOT NULL,
  `event_date` date NOT NULL,
  `event_st_time` time NOT NULL,
  `event_end_time` time DEFAULT NULL,
  `event_banner_path` varchar(200) DEFAULT NULL,
  `event_is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_content`, `event_date`, `event_st_time`, `event_end_time`, `event_banner_path`, `event_is_active`, `created_at`, `updated_at`) VALUES
(1, 'SAP On pi-cloud Webinar', '<h5 style="text-align:center"><u>Delivering A Comprehensive Bouquet Of SAP Infra On Cloud For All Business Needs</u></h5>\r\n\r\n<p>Panel Discussion Topic: Is the changing SAP landscape making life easy or challenging for IT Leader?</p>\r\n\r\n<p>For key take aways, Register Here -<a href="https://bit.ly/3dXxig1" target="_blank">https://bit.ly/3dXxig1</a></p>\r\n\r\n<p>Learn how, a well curated cloud strategy can make your work life seamless &amp; hassle-free, this <strong>29th July from 4 pm!</strong></p>\r\n\r\n<p>Looking forward to seeing you all!</p>', '2021-09-29', '16:30:00', '17:30:00', 'resources/events/1/SAP_on_pi-cloud.jpeg', 1, '2021-09-09 00:21:15', '2021-10-29 06:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gtm_collateral_requests`
--

CREATE TABLE IF NOT EXISTS `gtm_collateral_requests` (
  `id` bigint(20) unsigned NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collateral_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gtm_prod_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gtm_prod_services_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collateral_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_audience` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `status_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rejection_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gtm_fund_requests`
--

CREATE TABLE IF NOT EXISTS `gtm_fund_requests` (
  `id` bigint(20) unsigned NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmt_prod_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmt_prod_services_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_event_cost` double(15,2) NOT NULL,
  `budget_plan_doc_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_market` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_ownership` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_sponsors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_deliverables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pi_deliverables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fund_requested` double(15,2) DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_mobile_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_desig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cmobile_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marteking_cmobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_parameters` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_metrics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `status_date` datetime NOT NULL DEFAULT current_timestamp(),
  `rejection_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gtm_joint_event_requests`
--

CREATE TABLE IF NOT EXISTS `gtm_joint_event_requests` (
  `id` bigint(20) unsigned NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmt_prod_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmt_prod_services_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_event_cost` double(15,2) NOT NULL,
  `budget_plan_doc_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_market` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_sponsors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_deliverables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pi_deliverables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_mobile_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_desig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cmobile_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marteking_cmobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_parameters` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_metrics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_covered` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_media` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institutional_building` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `status_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rejection_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gtm_media_campaign_requests`
--

CREATE TABLE IF NOT EXISTS `gtm_media_campaign_requests` (
  `id` bigint(20) unsigned NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmt_prod_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmt_prod_services_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_event_cost` double(15,2) NOT NULL,
  `budget_plan_doc_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_market` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_ownership` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_sponsors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_deliverables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pi_deliverables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fund_requested` double(15,2) DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_mobile_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executive_desig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marteking_cmobile_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marteking_cmobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_parameters` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_metrics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_house_online` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_house_offline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `status_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rejection_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_06_04_092635_create_samples_table', 1),
(10, '2021_06_04_100143_create_partners_table', 1),
(11, '2021_06_04_101003_create_partnerpersonalinfos_table', 1),
(12, '2021_06_05_055709_create_partnerorginfos_table', 1),
(13, '2021_06_05_071521_create_partnertechinfos_table', 1),
(17, '2021_06_07_101856_create_sbunits_table', 1),
(18, '2021_06_07_104710_create_sbuproducts_table', 1),
(19, '2021_06_07_105758_create_ratings_table', 1),
(20, '2021_06_07_112109_create_pipelines_table', 1),
(21, '2021_06_08_115825_create_industries_table', 1),
(22, '2021_06_09_041854_create_pipeline_ratings_table', 1),
(23, '2021_06_07_072849_create_countries_table', 2),
(24, '2021_06_07_072904_create_states_table', 3),
(25, '2021_06_07_072917_create_cities_table', 4),
(30, '2021_06_29_060752_create_region_heads_table', 5),
(34, '2021_06_29_140109_create_relationowners_table', 6),
(35, '2021_06_29_140219_create_relationowner_state_table', 7),
(36, '2021_06_30_062621_create_jobs_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0337c4c3a52a7c4697a2a332c2c5343477233bd5e6bedd01f0c84e8c8f6a56b913d698e7fa272585', 1, 3, 'PartnerPortal', '[]', 0, '2022-08-23 03:41:57', '2022-08-23 03:41:57', '2023-08-23 09:11:57'),
('03481125a4a72fd62969b7ad7bf9b42082a766d4e1da30f5fadb538044ddc07517a5530ab3352b21', 96, 3, 'PartnerPortal', '[]', 0, '2022-07-27 04:01:53', '2022-07-27 04:01:53', '2023-07-27 09:31:53'),
('034faca4893c97c0f6e422eca9c17c8a57e1c09431c5495a9ff96628a0d6f29591e0939304a5b832', 40, 3, 'PartnerPortal', '[]', 0, '2022-03-24 04:52:39', '2022-03-24 04:52:39', '2023-03-24 10:22:39'),
('04c1d01784755c7b8f69201924049c06007beae2f119f92a8135da937a46a774b3d8e7e0aa7baffe', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-16 04:53:17', '2022-09-16 04:53:17', '2023-09-16 10:23:17'),
('069054d9274df1834a04def8fa091d5445e2f63340a72a12c0fa2fff10e3d55d25be72e470769702', 9, 3, 'PartnerPortal', '[]', 0, '2022-05-11 04:11:11', '2022-05-11 04:11:11', '2023-05-11 09:41:11'),
('06a0809e798da9ffee77b8efe6841a4cf5cb3fee5b74f5430a9d5b9ea44c3d46a40fb05649b6c8ff', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:55:26', '2021-09-03 04:55:26', '2022-09-03 10:25:26'),
('070d4d87d32c34c36e4885e873462b92110ec66cb7c1209505bdca8cad9de9a5d4d93017fb83c16a', 110, 3, 'PartnerPortal', '[]', 0, '2022-06-24 00:20:59', '2022-06-24 00:20:59', '2023-06-24 05:50:59'),
('09923a9d559c2aee7f64478eb22d949db83a1d4841c2cdd28339711df5100de3cd2fd618aa9f701f', 1, 3, 'PartnerPortal', '[]', 0, '2022-07-26 23:27:47', '2022-07-26 23:27:47', '2023-07-27 04:57:47'),
('0ac795569d182ce6e07c43cf8cb17e26191c99443cdd872aed5ac419c78897a8f7f4800d305cfc85', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-16 04:00:41', '2022-09-16 04:00:41', '2023-09-16 09:30:41'),
('0bd028c043395d96b3cc2448280f244fe989c213dbef0a80cbfe59d89de1eaaaa56b1e56c1bc3710', 78, 3, 'PartnerPortal', '[]', 0, '2021-12-24 03:10:12', '2021-12-24 03:10:12', '2022-12-24 08:40:12'),
('152035eb363cf2a6c938e93b3dbbe3632db9638f2371217c31e1cdaee1b2daba4349c76508585a2d', 5, 3, 'PartnerPortal', '[]', 0, '2021-08-29 01:14:55', '2021-08-29 01:14:55', '2022-08-29 06:44:55'),
('15f8e1010685527e3800452298fa8a4ce33adb2124aaebf1184f2e32d99d093efea7f7194010fa10', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-26 01:00:39', '2022-04-26 01:00:39', '2023-04-26 06:30:39'),
('161e9bfe7c7998cf556b0e222f7379c6bee39b4e33fc0842137bd271b60a87b78ab3ed163ae64223', 31, 3, 'PartnerPortal', '[]', 0, '2022-08-02 00:39:36', '2022-08-02 00:39:36', '2023-08-02 06:09:36'),
('1695ec092f8813beaad04eaee91226c2d4dd486fec4e9b555f7fb65516c217cb138988bc3e0713cc', 110, 3, 'PartnerPortal', '[]', 0, '2022-06-28 04:11:48', '2022-06-28 04:11:48', '2023-06-28 09:41:48'),
('178d5d9d11558f6802d4c98e198cf1f208263d1e4075ecb2d44f307921a19ce9229a3606622f1ef6', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-29 03:59:36', '2022-04-29 03:59:36', '2023-04-29 09:29:36'),
('1a1f935c3ddf1a605ca6b82a7b4c5c5c9fc8016194c938272cd471bcbc9d4dd41cb37090202b7545', 32, 3, 'PartnerPortal', '[]', 0, '2022-03-19 09:56:50', '2022-03-19 09:56:50', '2023-03-19 15:26:50'),
('1c7b333f01e84b5e7975fb501ab17b4e2cf037f91f204d29d113f646d59cebd323b2553cb59f4fef', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-01 01:35:29', '2022-07-01 01:35:29', '2023-07-01 07:05:29'),
('1e384dfc0e240e088a567aae83843b17b72c4000f7f58247c1b3ff283a6a434636d1a59b211ddfc9', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-28 23:08:49', '2022-04-28 23:08:49', '2023-04-29 04:38:49'),
('1e91ef6a03af060c5f370428d825174f164d094e37c031ae3c9ef449516ee6ab97d567114d904268', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-13 03:15:31', '2022-06-13 03:15:31', '2023-06-13 08:45:31'),
('1e95dc8ebfb260a8fa57cad97fe9c75bf5052823211794a7db0bcfc813e73cdced5a433c1b11121f', 112, 3, 'PartnerPortal', '[]', 0, '2022-07-04 00:37:43', '2022-07-04 00:37:43', '2023-07-04 06:07:43'),
('1f7b01289ff13089b30e98cd9d1a2532c14e0caf2b07beadd38ea764a204a8f0d9658f937036c2c9', 1, 3, 'PartnerPortal', '[]', 0, '2022-05-12 04:04:28', '2022-05-12 04:04:28', '2023-05-12 09:34:28'),
('22e237cb15cd4edf506558c6ec835ecd4e16d5f93ff9524819cd106a8ee371f87c4387cd00933294', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-19 23:55:11', '2022-04-19 23:55:11', '2023-04-20 05:25:11'),
('243e003122ad4040bdc740cd38b1a066b0b60d23993b74cdefb0d4623d5603bfdd4be803758ef6d0', 77, 3, 'PartnerPortal', '[]', 0, '2022-08-12 01:32:34', '2022-08-12 01:32:34', '2023-08-12 07:02:34'),
('2b9a1f634ed7ebe3dc9f1bd814937c1c7de7d55c7e72c92df6654eb797985e7f3af391083f5ef6b3', 122, 3, 'PartnerPortal', '[]', 0, '2022-10-13 22:45:33', '2022-10-13 22:45:33', '2023-10-14 04:15:33'),
('2dcb39ec2b1a79f2905284310ec7f6edbc366a173b2257240ec4502bb1288d1cf18831c756044865', 88, 3, 'PartnerPortal', '[]', 0, '2022-01-11 00:28:05', '2022-01-11 00:28:05', '2023-01-11 05:58:05'),
('2dda5b4fb97176195e5e4c40dce993b820077e85cb513e34aff7a3678840794749ddb9970c3a4996', 93, 3, 'PartnerPortal', '[]', 0, '2022-02-11 06:04:26', '2022-02-11 06:04:26', '2023-02-11 11:34:26'),
('2e055af96e7854e510bc6755cf0fbf54e70b17450041ae9f91802206075622837f5a2497b82a5e38', 74, 3, 'PartnerPortal', '[]', 0, '2022-06-29 08:21:01', '2022-06-29 08:21:01', '2023-06-29 13:51:01'),
('2e2cf6b6d4da161cf3d6a03c64e9e8fbd854db6d3c1d618ae53896d1e08bf9167f8762d3fce21f0e', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-15 00:54:11', '2022-09-15 00:54:11', '2023-09-15 06:24:11'),
('2ed9938fb92aa0e4930214204b8b9250405a6dd71874fad8e60f6326341505d0af0fc20980e68b2a', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-28 05:20:05', '2022-06-28 05:20:05', '2023-06-28 10:50:05'),
('2fa0ab075eedd250335877e5039551a589d44fb1ee42d0a68c0e4a7294040135db943d17012025a9', 62, 3, 'PartnerPortal', '[]', 0, '2022-03-03 02:41:34', '2022-03-03 02:41:34', '2023-03-03 08:11:34'),
('30fb519121ede710c5446dfb91501ed4070d0c37935d30fe1761f4661e63877147435f10dd0b23f7', 28, 3, 'PartnerPortal', '[]', 0, '2022-06-23 06:18:47', '2022-06-23 06:18:47', '2023-06-23 11:48:47'),
('3241b367de5a9d1ce6a289d1b686fcc8005d29acfc6c9ce324524dfaa72d6e6ec852d28e0d54e345', 1, 3, 'PartnerPortal', '[]', 0, '2023-06-07 02:58:43', '2023-06-07 02:58:43', '2024-06-07 08:28:43'),
('33c76c0adeaffb60b4b6fb86e79923e5bcb0df9839384c22c242079a5b9c1e573f923b273a43b0c1', 34, 3, 'PartnerPortal', '[]', 0, '2021-10-13 02:02:58', '2021-10-13 02:02:58', '2022-10-13 07:32:58'),
('35b7ee7d7ae69cded2d46bb3877b793d64a4b07e7d4830a1352b99e65a64844b6e690e4f041c270f', 9, 3, 'PartnerPortal', '[]', 0, '2023-05-05 02:00:59', '2023-05-05 02:00:59', '2024-05-05 07:30:59'),
('3628bd970a5a4831858b927f8064e0cd5f7c7b034235ff02aebb24efbcef6f1a417e9dbfaf9a685e', 93, 3, 'PartnerPortal', '[]', 0, '2022-02-08 00:42:41', '2022-02-08 00:42:41', '2023-02-08 06:12:41'),
('38b210e9b017373bd4b88f819ef50de4d95b323dd45d986aab5a04dc132a8db8473fe65f3dc596b6', 77, 3, 'PartnerPortal', '[]', 0, '2022-06-17 01:05:58', '2022-06-17 01:05:58', '2023-06-17 06:35:58'),
('41df2d06108f07d80caed876606f7694e718fe7a50e413c312c4d5e17c8a059f09ad119b008d9515', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-09 01:17:26', '2022-06-09 01:17:26', '2023-06-09 06:47:26'),
('425f58f0794cafae3e59626cdddfdb66038a38d324e92ab1d8694a69feda8ab839763bd3d2c7ecf2', 28, 3, 'PartnerPortal', '[]', 0, '2022-10-08 02:03:51', '2022-10-08 02:03:51', '2023-10-08 07:33:51'),
('460b8d91e1264b52b426a5f25f2208cdfb32baaeb07314ebe69527f2055a0e667768f0dd36d5595a', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-19 05:11:36', '2022-04-19 05:11:36', '2023-04-19 10:41:36'),
('46b44397e7a1e3aff9077fc8382d977996ea5b73dbd5dbd1232159c377ff38e3eccd3a926c4a6a38', 13, 3, 'PartnerPortal', '[]', 0, '2021-09-17 04:42:26', '2021-09-17 04:42:26', '2022-09-17 10:12:26'),
('46eda2aa534f939da89e0d631ce22bbcd33aebc1df914c36f7ddaa29d8e4f4b940b8d8e0aced6d63', 105, 3, 'PartnerPortal', '[]', 0, '2022-11-06 19:16:45', '2022-11-06 19:16:45', '2023-11-07 00:46:45'),
('482f620a52a734e87674f971ac9cdcfbb2a21336899d4793eb43f0645d6f3bb8ee6bd837250c1da1', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-19 07:44:16', '2022-07-19 07:44:16', '2023-07-19 13:14:16'),
('48550d6938fa0cd31d020b12e32d39f9b04a8ef77b5c1293ffd57b93e2d66c8a70503137ef60fb0c', 30, 3, 'PartnerPortal', '[]', 0, '2022-06-23 23:28:39', '2022-06-23 23:28:39', '2023-06-24 04:58:39'),
('49e1776f1dad25f4a649098bae4f2faffc7c0a1551c3d5ca118861907c2b26571c19bf20e1318349', 9, 3, 'PartnerPortal', '[]', 0, '2022-09-26 04:49:52', '2022-09-26 04:49:52', '2023-09-26 10:19:52'),
('4a9e357ec263028d8b51de99acb8563f12fea229b125c068df365cd07ac6a1d0731abf098d40e3af', 1, 3, 'PartnerPortal', '[]', 0, '2022-07-26 04:24:47', '2022-07-26 04:24:47', '2023-07-26 09:54:47'),
('4b64b521e4bace6c3906010d8380c96edeadbc0a2842af831bdaa803bd6775f4ac33176319907cb8', 9, 3, 'PartnerPortal', '[]', 0, '2022-11-07 03:41:44', '2022-11-07 03:41:44', '2023-11-07 09:11:44'),
('4d7b1d0523e0275565667a48346eb0d38dad6464f2c332b773fd1f626995216dab0b0408fcc5a680', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-28 04:53:19', '2022-06-28 04:53:19', '2023-06-28 10:23:19'),
('509bffb9af33168e3c9b9f508ed4802c12a8176be480441ea6b38ee24f3ad09399703bbdd2a9ab67', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-08 03:00:34', '2022-06-08 03:00:34', '2023-06-08 08:30:34'),
('51506ddfa58c19d0e651941f0ab2fada5bfff21df70e53057e7961d7d4ec69d6a679f78c36bba66f', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-29 22:01:07', '2022-09-29 22:01:07', '2023-09-30 03:31:07'),
('5211777eddb017f8e92487eb3f45e58a1662a10191bc5981525a2e4e0960d3f5556eddedebdc34be', 1, 3, 'PartnerPortal', '[]', 0, '2022-07-29 02:32:00', '2022-07-29 02:32:00', '2023-07-29 08:02:00'),
('533ee61f950af720d3286d2938a1b2c54f3644122af219dd4c4cee7edd365295ef7a6bc8e57121bf', 1, 3, 'PartnerPortal', '[]', 0, '2023-04-12 06:20:38', '2023-04-12 06:20:38', '2024-04-12 11:50:38'),
('558383bfe0266fb7f9e2567942eedf93b059d3de8efc0bacbcc959698e6948c4107bd8ca9148691c', 110, 3, 'PartnerPortal', '[]', 0, '2022-06-28 05:13:53', '2022-06-28 05:13:53', '2023-06-28 10:43:53'),
('5590675bb14e3f1c14787eeb3049cfb08c1baf6fee1f2a247c3ed60bcf2b3e959e0be7ee40921fe4', 112, 3, 'PartnerPortal', '[]', 0, '2022-07-04 00:24:33', '2022-07-04 00:24:33', '2023-07-04 05:54:33'),
('5af2b6f49b0c15372c7853ea1a06f945d2595c379806c5e1d97a9f3e3329c883ab8876fb223e3894', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-19 09:28:05', '2022-07-19 09:28:05', '2023-07-19 14:58:05'),
('5b8068c19ecca993322e084f0b5b667ad79bedaec690f183b2e0f9025b6ae73feeabb3fe78308040', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-24 05:15:57', '2022-06-24 05:15:57', '2023-06-24 10:45:57'),
('5d69e9eee9f8fe67ac4231faed063f9a4176498298d19088550b1a228702e63a3618517850306c68', 93, 3, 'PartnerPortal', '[]', 0, '2022-03-04 23:05:31', '2022-03-04 23:05:31', '2023-03-05 04:35:31'),
('61e8e54d648c3670098b7ea8a6639692cdc621f002f76b0dbc62dcf3e53d9b861627d962a0eaec07', 93, 3, 'PartnerPortal', '[]', 0, '2022-02-18 00:17:36', '2022-02-18 00:17:36', '2023-02-18 05:47:36'),
('640fb62adea418cfa4c8fe04e8d7e5dd2ca06e20fe535dac1edea2e59be2147a3ea81ba5db33f1a9', 74, 3, 'PartnerPortal', '[]', 0, '2022-06-28 04:25:12', '2022-06-28 04:25:12', '2023-06-28 09:55:12'),
('6434ba678c4ba62f57c6a63a4b6bef2e63fa726ab083fcaff24d10e81f52a993ed1669c09144d10e', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-05 23:30:51', '2022-09-05 23:30:51', '2023-09-06 05:00:51'),
('656d2fab276d457f64f96917ec9d86f8e797c988d913c19c851b5a1ee4dffb8abe2a2c3d4c6ff219', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-16 03:51:58', '2022-09-16 03:51:58', '2023-09-16 09:21:58'),
('681cfebb571a8e7d0c7ed4f0b5a665fcc297279eebda9acd73491fd22edbe921ccfa09253bb241e2', 9, 3, 'PartnerPortal', '[]', 0, '2023-05-09 23:34:23', '2023-05-09 23:34:23', '2024-05-10 05:04:23'),
('6c04666e6ff374436052342710b43652f874f2cc3122ec96b0e694d0f9ba0f13067bbba02f2dc44a', 105, 3, 'PartnerPortal', '[]', 0, '2022-09-05 00:50:02', '2022-09-05 00:50:02', '2023-09-05 06:20:02'),
('6c177dd741dbde4bc82c331923c617b32617502174015e975b55add63ab2b041ec632fed6dfb589b', 74, 3, 'PartnerPortal', '[]', 0, '2022-11-09 01:56:35', '2022-11-09 01:56:35', '2023-11-09 07:26:35'),
('6cb8e715d5b9b4c6122c4e4c20cb3fd16d39116303086e8a3e9b8c1c16db2d79661de33c63f03949', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-15 11:54:12', '2021-09-15 11:54:12', '2022-09-15 17:24:12'),
('6e1f5e8a3b1845a0bbb63f80b427653550f10ccd9231b7b19ca32d8bb7ed5e9579c399da137b2a4f', 93, 3, 'PartnerPortal', '[]', 0, '2022-01-24 23:32:48', '2022-01-24 23:32:48', '2023-01-25 05:02:48'),
('6fc3ee071ee5c2891649ccf49200439f52bc965c9a9ec49f19e3389a9133261cd5c1948438768fc9', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-07 05:04:17', '2022-06-07 05:04:17', '2023-06-07 10:34:17'),
('70d2b6fd6169ce5bc10582bad26d530b615206f1990f4e2288dd7220b30879d0266321806d6246d9', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-16 03:59:41', '2022-09-16 03:59:41', '2023-09-16 09:29:41'),
('722d0cff328e3be95eb5279b205461e5d6f7b9f5ab8fbd6b3a672f93f76bcfd39e19309f97dd2a0a', 93, 3, 'PartnerPortal', '[]', 0, '2022-11-22 03:30:02', '2022-11-22 03:30:02', '2023-11-22 09:00:02'),
('76bd24932d945711997bcb1ebc7e7f130446354c07198c1d24bbcae18eb5fc5a3ec0ff3a8dbed87c', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-19 00:50:05', '2022-04-19 00:50:05', '2023-04-19 06:20:05'),
('795977d40d0dfef459484c45fdef9aced428d7c8cbb43964c5235e8b9692a3889cddb4c207b3deb4', 46, 3, 'PartnerPortal', '[]', 0, '2022-07-22 03:44:45', '2022-07-22 03:44:45', '2023-07-22 09:14:45'),
('795988eb0540964cab6fcdf69c4b477a1cba517b926d396784a66ec7845ebadc6734e16423e300ed', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-16 01:50:41', '2022-09-16 01:50:41', '2023-09-16 07:20:41'),
('7bf163c78b70fadbf9bd7edf73ec7b4c93180ea76171a43ab064e53f48805ae340862d8c981ed3cb', 74, 3, 'PartnerPortal', '[]', 0, '2022-12-16 06:14:24', '2022-12-16 06:14:24', '2023-12-16 11:44:24'),
('7c2e557ac849d587b1891838d89475f0d1ebabc2ef853e7524df9728b3c8c28a85e43906562eb6ea', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-21 03:23:50', '2021-09-21 03:23:50', '2022-09-21 08:53:50'),
('7c76793a5623c16d4ef85ae59b3ad97f8195e39903c4b5d06137eb4805ae0b6ce22650316d1ab792', 1, 3, 'PartnerPortal', '[]', 0, '2022-08-10 07:36:32', '2022-08-10 07:36:32', '2023-08-10 13:06:32'),
('7cc7b472ebb18d818f5cc34a059a4228819f830346428428bfa84d120e95059545c52e1eb4f9b609', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-19 05:31:30', '2022-07-19 05:31:30', '2023-07-19 11:01:30'),
('7ceef4ae191bd8b6101225cc160553f553f920adc0f2c21cf5801fa4fe6d699ac7e275d859a9e083', 93, 3, 'PartnerPortal', '[]', 0, '2022-01-27 01:00:54', '2022-01-27 01:00:54', '2023-01-27 06:30:54'),
('7d4a9b03d990cf43f57131a7aa11abce17f6c2d346e8b6cc63d1196bfec6eb87c4324715002f62c7', 9, 3, 'PartnerPortal', '[]', 0, '2022-08-29 00:32:49', '2022-08-29 00:32:49', '2023-08-29 06:02:49'),
('7d9cf1a5c4c0a4d00af7262616aedf10b9a6c657dace56a51fd649784f5fca8fafea9dabf1d81f2a', 82, 3, 'PartnerPortal', '[]', 0, '2021-12-24 00:31:42', '2021-12-24 00:31:42', '2022-12-24 06:01:42'),
('7feefd4048f2712d931bd5f61c6f787cc4f2a13acffccded64e815473167da921fb4f7fd2b6fe041', 40, 3, 'PartnerPortal', '[]', 0, '2022-06-20 04:35:15', '2022-06-20 04:35:15', '2023-06-20 10:05:15'),
('81974b1097c91c874664ae7ca5ebe55349b978e12f2e3e14367de1ff139f9fa35a8c722c0b240c41', 31, 3, 'PartnerPortal', '[]', 0, '2022-07-02 04:44:21', '2022-07-02 04:44:21', '2023-07-02 10:14:21'),
('821824139f23ab21ca0f273dcc4282a90616ae6aeb44fbc1892d23c6965e380ae75bd4fa38cc15c9', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-04 23:22:33', '2022-09-04 23:22:33', '2023-09-05 04:52:33'),
('86c70b3d8980e546ece858e32c8710714e44314b91e500f9abc251915f214eaca02708e796f64797', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:56:24', '2021-09-03 04:56:24', '2022-09-03 10:26:24'),
('87c5e736a154c9e9fe74c3b6a3e439171aa9fd77a7dd9c1132a4ea0635ac754e517fee14986ce3c9', 1, 3, 'PartnerPortal', '[]', 0, '2022-07-10 21:32:58', '2022-07-10 21:32:58', '2023-07-11 03:02:58'),
('887bd247f71875fc1e30ddb0a53107ebcac7258453af8cd043db7871b65000fcabb8991113e24f8c', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-17 04:00:59', '2021-09-17 04:00:59', '2022-09-17 09:30:59'),
('8edd71e9b2ce42752fc599c45da2d4e8c278427a335d16eeffb4eff3db4aa85923202a02df47d70d', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-24 00:28:27', '2022-06-24 00:28:27', '2023-06-24 05:58:27'),
('8f5513f0b91a5d48f66e03e4bf661feee124333b34a4e63f2c42368d1af966edeae64817952b8453', 93, 3, 'PartnerPortal', '[]', 0, '2022-02-02 01:09:08', '2022-02-02 01:09:08', '2023-02-02 06:39:08'),
('907cdf5885b73c483623167d84d63b8ac444103f1c19bd87d1961e9c0292c563ac02fe1b0add3f54', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-24 06:01:11', '2022-06-24 06:01:11', '2023-06-24 11:31:11'),
('919d91e6fe01c8f2a919097783e61a0bb24abec1c0315ab1497504e27a96ba54f88cea2faa4a49ef', 1, 3, 'PartnerPortal', '[]', 0, '2022-08-22 22:21:34', '2022-08-22 22:21:34', '2023-08-23 03:51:34'),
('92c663eff440d7714ebfd97c07fea5cb646a3e9796fe8ad157115c809998b9ed04cf18578dc02956', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-13 03:57:51', '2022-06-13 03:57:51', '2023-06-13 09:27:51'),
('94ab2b9f25d6288b91a34fae63d244043e6e2372162a684f16e85e18938a0c8e5d7f81cd712c1fc3', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:50:32', '2021-09-03 04:50:32', '2022-09-03 10:20:32'),
('94de32ac1b32c93f35b17dc3c990652f07a5c7a586b93d9823922f4707d8590d90f3ffcd4ec9dd87', 1, 3, 'PartnerPortal', '[]', 0, '2022-07-08 05:24:36', '2022-07-08 05:24:36', '2023-07-08 10:54:36'),
('98db944fb94d1d59d739f67e6790d6fd89d3b16a0f384471ae57e3f02da366ee2a401a0856cb5643', 105, 3, 'PartnerPortal', '[]', 0, '2022-09-02 09:51:12', '2022-09-02 09:51:12', '2023-09-02 15:21:12'),
('98eb35d7a0f4141b31735f984e1e0850a45d4ccea957f49830f69251c25b4d581cb9c379371f2f3d', 62, 3, 'PartnerPortal', '[]', 0, '2021-12-21 02:08:55', '2021-12-21 02:08:55', '2022-12-21 07:38:55'),
('99a597183dc31e355948f94ae98189831855e5582a339daf4b65129729f9f228009f0705dda6593a', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-21 01:20:12', '2022-06-21 01:20:12', '2023-06-21 06:50:12'),
('99b91bd06d48755a8b06c3a2183238e7ff087186f0bb14101dc54446fa5eaa8adaecd95152f6f29a', 1, 3, 'PartnerPortal', '[]', 0, '2023-03-29 00:03:06', '2023-03-29 00:03:06', '2024-03-29 05:33:06'),
('a4cd2bcc3f493aa64939218ba93a4d81920e54d7122ad189c3e9c172e550af50e6f5f162c61b503c', 1, 3, 'PartnerPortal', '[]', 0, '2022-07-05 02:35:13', '2022-07-05 02:35:13', '2023-07-05 08:05:13'),
('a5a993fd243205eda5129f4ed1698a9a677998b244b0651a6379e392d3db48f4e584dcb336654d61', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-21 22:56:15', '2022-06-21 22:56:15', '2023-06-22 04:26:15'),
('a8a9f03000ae488150824a1676d0c1b3cb724d28b194138dffd47ecc98090f26ae16a279874b0d7b', 9, 3, 'PartnerPortal', '[]', 0, '2022-02-10 00:26:17', '2022-02-10 00:26:17', '2023-02-10 05:56:17'),
('ab46a464e2fa58ef3c3cabf57920ae51a33a6284126bf9201fbe8b82bd810d47bdfc0cafa5dfcb2a', 5, 3, 'PartnerPortal', '[]', 0, '2021-09-01 23:20:03', '2021-09-01 23:20:03', '2022-09-02 04:50:03'),
('ae2a21a10696c9a14237bb1e9db703ec0ca53f715fc9a7907c5755a08f26a87291d1f3e332df3f78', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-19 05:19:45', '2022-04-19 05:19:45', '2023-04-19 10:49:45'),
('ae3f148878a8f538fa470a559543e42b7f49a31bf847e3f0e1676db92654945820c21908b21d60f2', 93, 3, 'PartnerPortal', '[]', 0, '2022-03-07 02:44:04', '2022-03-07 02:44:04', '2023-03-07 08:14:04'),
('b3bba089bb331002242e105a9c92fa893316d88b918962a25079476ac2247aae6860e676bf2ff32d', 50, 3, 'PartnerPortal', '[]', 0, '2021-11-10 04:03:01', '2021-11-10 04:03:01', '2022-11-10 09:33:01'),
('b50e30dcd1b916b487b67896dd250e7bcde594f76fbfef1061543088ed53f24d13778a8ca8836968', 9, 3, 'PartnerPortal', '[]', 0, '2022-07-26 06:36:24', '2022-07-26 06:36:24', '2023-07-26 12:06:24'),
('b65b0fdb111ecca94a02aa86c9ed7a79dd5dc7db51e7db6036ea70de16e7a056c60780bb3dd626ee', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-21 23:25:56', '2022-06-21 23:25:56', '2023-06-22 04:55:56'),
('b67c8cc0f79cc8fec90c4a802230c60fa75da1f79c5d169aa6f69ea6a1629b46916ec6204754f6fb', 1, 3, 'PartnerPortal', '[]', 0, '2023-06-13 01:56:33', '2023-06-13 01:56:33', '2024-06-13 07:26:33'),
('b6cac9af2d0ab6034197364a39109ba04ee9a0b25313a67f3c164517866ad0e0886ed6568e077666', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-21 22:47:18', '2021-09-21 22:47:18', '2022-09-22 04:17:18'),
('b7c2c1e75aa4c2009ce729633506fcf93fd1d7672fd910f65e10a52f8c224f94d520b4e407e8e664', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-13 22:05:15', '2022-06-13 22:05:15', '2023-06-14 03:35:15'),
('bcac0ac0b71db409d22222e91f74b785a584634aa89a4d76974a73db927a54703a5b6f7970b7b589', 74, 3, 'PartnerPortal', '[]', 0, '2023-01-25 04:07:25', '2023-01-25 04:07:25', '2024-01-25 09:37:25'),
('be4eac6940430092db264361a9487cd4d85f9d0ed7e8f6dc3f61d3fdda0138c4f0aa7b03b6e33151', 110, 3, 'PartnerPortal', '[]', 0, '2022-06-28 04:14:32', '2022-06-28 04:14:32', '2023-06-28 09:44:32'),
('be8b2bd6dc6c71e7c09b9323b15ba146310a24edc1b48b9b5330491cfb5c7217388325ff66939ec2', 105, 3, 'PartnerPortal', '[]', 0, '2022-12-26 23:28:29', '2022-12-26 23:28:29', '2023-12-27 04:58:29'),
('beb0c2399c436f0ef5e4b8f744fb6c040c31591219ebab6e4b91459d1545aaa863c8852761da522e', 105, 3, 'PartnerPortal', '[]', 0, '2022-11-27 05:13:58', '2022-11-27 05:13:58', '2023-11-27 10:43:58'),
('c2c80bd006741679f80db5fff8b3e41118c25a7efac8dd3a18f481025f496a9a2516f2fdafb9b89f', 112, 3, 'PartnerPortal', '[]', 0, '2022-11-24 01:54:01', '2022-11-24 01:54:01', '2023-11-24 07:24:01'),
('c5b25debddd6679bc4b7a265027d0f71985b45c1098adb59c9eabef170ca77af339a25da1f916cbc', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-13 04:04:25', '2022-06-13 04:04:25', '2023-06-13 09:34:25'),
('c5bc4f69ea355d1b3be0ff857bfe36fff23091d72e6a2b59f07644d011692a064a4e83689e6182e6', 74, 3, 'PartnerPortal', '[]', 0, '2022-11-09 01:56:35', '2022-11-09 01:56:35', '2023-11-09 07:26:35'),
('c684a48940146d6d8d89a713d5a35488bb06c13a6f810a435d1859c0cfaaed367dfc0a2d52f70cdb', 32, 3, 'PartnerPortal', '[]', 0, '2022-03-19 03:25:03', '2022-03-19 03:25:03', '2023-03-19 08:55:03'),
('c70ae0d2dc5e507f5456ee4609707d004f01889d04da6f3845da884d21c76f08ab094a27d8ea3cf5', 96, 3, 'PartnerPortal', '[]', 0, '2022-11-23 05:31:22', '2022-11-23 05:31:22', '2023-11-23 11:01:22'),
('c75d3534cc68fd4f46511909751952c5bfd3310943e7a3b4870eb4e8997970a69c5206043c770a21', 15, 3, 'PartnerPortal', '[]', 0, '2021-09-25 11:48:23', '2021-09-25 11:48:23', '2022-09-25 17:18:23'),
('c945d9a9578706ebd20bcbc572f1f5a9c9df9f8be93838efc592bceeb23b32bec3ff872deff3afce', 46, 3, 'PartnerPortal', '[]', 0, '2022-06-01 01:01:23', '2022-06-01 01:01:23', '2023-06-01 06:31:23'),
('c9b48e4489c0902b7b67838d1a4434fc1c990d5a87632a3fce5f8bcce259f4d107e6961cc8ca54c1', 1, 3, 'PartnerPortal', '[]', 0, '2022-07-12 23:37:48', '2022-07-12 23:37:48', '2023-07-13 05:07:48'),
('cbf923bf4c337368f89a63d75ce9fa005dc1f0be0e8ff703ba1ca6ea5b49cc22304a1879f58643f1', 74, 3, 'PartnerPortal', '[]', 0, '2022-06-28 04:19:03', '2022-06-28 04:19:03', '2023-06-28 09:49:03'),
('cc62994fef8140df520932c324021e20f04ca155041becfa871049ddf0e70f140bbf98e802d67f3b', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-28 07:24:54', '2022-07-28 07:24:54', '2023-07-28 12:54:54'),
('d1d6fdbfbe3c320da6ef479c21926f31930b5aba2606d4ebf64e3ec4f68a48278c1c246758fc3164', 50, 3, 'PartnerPortal', '[]', 0, '2021-11-23 01:11:46', '2021-11-23 01:11:46', '2022-11-23 06:41:46'),
('d2900ec245c2bf3916f19e67438564341d0cd3b54a4838fe7eba1b9672012092060086955b980b70', 93, 3, 'PartnerPortal', '[]', 0, '2022-03-10 05:16:17', '2022-03-10 05:16:17', '2023-03-10 10:46:17'),
('d381a29f4f0e120b0de64ffbe9b0e69609b818644b8e5e05fef092c644d89f20c215c7a17d5bd46b', 93, 3, 'PartnerPortal', '[]', 0, '2023-06-26 01:44:42', '2023-06-26 01:44:42', '2024-06-26 07:14:42'),
('d61088c6382b90d860d5dd382c36716283d0c0a061e9f16b902246a8f946bd4d159f77897e4836e1', 9, 3, 'PartnerPortal', '[]', 0, '2022-09-28 05:59:06', '2022-09-28 05:59:06', '2023-09-28 11:29:06'),
('d6f4dd48a5cbc0d662cfd0d5861c6179a3ad36d8472302ad72d742b4b6aaea1962e03b920c48f592', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:49:44', '2021-09-03 04:49:44', '2022-09-03 10:19:44'),
('d72a769cfd580ff86ef3fc2af09168b6ff373f9591314e76f9c62678ba958eb2c94ca94541c19fae', 93, 3, 'PartnerPortal', '[]', 0, '2022-02-03 01:49:11', '2022-02-03 01:49:11', '2023-02-03 07:19:11'),
('d911225409cffb09b4f0d0e8b9b1dbf33c52b396a85d2b3fba8a8734e0ceb9fe76503fed2ed8c949', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-23 00:56:34', '2022-06-23 00:56:34', '2023-06-23 06:26:34'),
('da630b650321c1311cb388e684c246e551ee6f58a752d55d8ce2a15fb60a1db04fadaa2173329e11', 1, 3, 'PartnerPortal', '[]', 0, '2022-05-04 02:10:03', '2022-05-04 02:10:03', '2023-05-04 07:40:03'),
('dabcaa0e73f2fab05451b83e1a8b5e8d9b22929012aaecdf92cc1cb00613d3477488abb25163c581', 9, 3, 'PartnerPortal', '[]', 0, '2022-08-25 23:30:13', '2022-08-25 23:30:13', '2023-08-26 05:00:13'),
('db6d362767c9f12c5842004d1246f0319a448af3a04faa0e677bbeff6936c2ba660df75ef33aca0f', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-29 06:53:45', '2022-06-29 06:53:45', '2023-06-29 12:23:45'),
('dd9872035cf301b74f65b6596625f873b6005095bda4b17674e892739816ad056f378d2dc3c2b464', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-16 03:53:53', '2022-09-16 03:53:53', '2023-09-16 09:23:53'),
('ddaf7b7596e26f21c6c067b0c2e0cda576b4d47693f69de12a0d5b1ebe0d763c7d2f36c3bc7c3198', 1, 3, 'PartnerPortal', '[]', 0, '2022-04-20 01:56:24', '2022-04-20 01:56:24', '2023-04-20 07:26:24'),
('dfc1f259bb9ee18017956796afb255c84f07c26d9b7fde6dabf3125064ec200cffce3e10e9380636', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-06 03:35:47', '2022-06-06 03:35:47', '2023-06-06 09:05:47'),
('e28488a905c362ca03863132e9d7eb2f42665ef40a0e1ff7c2acad6602f33da0c9d4472bc8ef585b', 100, 3, 'PartnerPortal', '[]', 0, '2022-02-22 03:31:54', '2022-02-22 03:31:54', '2023-02-22 09:01:54'),
('e35ddfc7afacc94da61382a46932003cb1f59b6286bae5f82fa44317dc74711a3f751f1372aedb83', 1, 3, 'PartnerPortal', '[]', 0, '2022-10-17 03:18:00', '2022-10-17 03:18:00', '2023-10-17 08:48:00'),
('e3c0d52c214cb247df2e865b81f96be2f679fd8d8bd85f5890a940e204341de4bc753a1b496789e7', 74, 3, 'PartnerPortal', '[]', 0, '2022-08-07 22:35:14', '2022-08-07 22:35:14', '2023-08-08 04:05:14'),
('e431a5c392f90c09c0dd63ef259f02544f166bf14b4abcf6533084a30d6ac78d13d572275344bd70', 12, 3, 'PartnerPortal', '[]', 0, '2021-09-17 05:32:11', '2021-09-17 05:32:11', '2022-09-17 11:02:11'),
('e4cf4fd7dc4a0c3bcb56060bd565db3d18b3b865dbffa4cc471c875bb1f45a458bb8c6145e5dcc15', 9, 3, 'PartnerPortal', '[]', 0, '2022-03-30 23:47:49', '2022-03-30 23:47:49', '2023-03-31 05:17:49'),
('e4e61886ca2e6e7ceacb96c55024931ccbd2fa9682722fc730e6c40429f8124e9088f399d53ff846', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-08 01:10:26', '2022-07-08 01:10:26', '2023-07-08 06:40:26'),
('e7bdf9ba41f44870cf0201f8e9c7f32c131f7971f309eed1344333d568abefa69e6942c4a0424072', 62, 3, 'PartnerPortal', '[]', 0, '2022-01-25 00:49:00', '2022-01-25 00:49:00', '2023-01-25 06:19:00'),
('eae3a0eaeb5c9ac9b49533f6124f1ed3cbccd57a13b889bc1045375e53c4ad9355fb8c57c3e5d11d', 9, 3, 'PartnerPortal', '[]', 0, '2022-08-25 05:35:34', '2022-08-25 05:35:34', '2023-08-25 11:05:34'),
('eba55a3d7e4f4583286bbc0ab41235f2b5edde73a6b529f6f09e5a22d9db2687d5eedfcdeffd918e', 1, 3, 'PartnerPortal', '[]', 0, '2022-05-25 23:32:04', '2022-05-25 23:32:04', '2023-05-26 05:02:04'),
('ed9ba10a025b9aa52e1ca160dd5f648e55459839fc98d5de58edd0bcabae3aaac40a49565f08b9be', 5, 3, 'PartnerPortal', '[]', 0, '2021-09-01 23:18:23', '2021-09-01 23:18:23', '2022-09-02 04:48:23'),
('ee66c48379378834b63675b4a410ce0d8378988cee54dca2d41a6b2ad78673741f933813bc59d696', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-07 23:42:39', '2022-07-07 23:42:39', '2023-07-08 05:12:39'),
('eea334688bbd1d9c7074620def2fcdbf587a40a72038510e672869c07ea38508071115c1694e42dc', 42, 3, 'PartnerPortal', '[]', 0, '2022-09-10 07:53:01', '2022-09-10 07:53:01', '2023-09-10 13:23:01'),
('ef0b9871dc3f815b2105d6ad4eca922fafe0eef8ef26980e3441167b075bfad6bc4cf83331c9cd0f', 93, 3, 'PartnerPortal', '[]', 0, '2022-03-05 03:33:22', '2022-03-05 03:33:22', '2023-03-05 09:03:22'),
('f0266f1ae4b6c5bc87829935bc778e5619137617aa281fb3839a3189bf25c9ecf475409cd4d34a5b', 9, 3, 'PartnerPortal', '[]', 0, '2022-01-03 01:54:43', '2022-01-03 01:54:43', '2023-01-03 07:24:43'),
('f061dd9d2d60b6e871713009c274ba68e787be01e81d485bcbfe226129770e15a2e1042b379f8a88', 82, 3, 'PartnerPortal', '[]', 0, '2021-12-24 00:40:18', '2021-12-24 00:40:18', '2022-12-24 06:10:18'),
('f335a3f8a2a5dd614211c2a5e11b1016823c736b51a9501f27f5ebeed94826d5ea3d3a9115d3bf7b', 1, 3, 'PartnerPortal', '[]', 0, '2022-05-04 01:17:49', '2022-05-04 01:17:49', '2023-05-04 06:47:49'),
('f63cb0653326d7ffb4565c8fd8d5dd0f09b0b8b67594a38a4e00e3546afbbba11fe2875538aa546d', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-20 22:22:12', '2022-07-20 22:22:12', '2023-07-21 03:52:12'),
('f8a2b8f2d9f380af120b4fca95aefb7024863087f1e5e4a4fba0fe8caba5f6ed195953f8abfe0555', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-23 22:15:36', '2022-06-23 22:15:36', '2023-06-24 03:45:36'),
('fc19ccb96dc5191f131d01abb22daee91acc75156eecf2ae793a02fef322a8a72122bcc3b19fe8b3', 74, 3, 'PartnerPortal', '[]', 0, '2022-07-12 12:24:32', '2022-07-12 12:24:32', '2023-07-12 17:54:32'),
('fca221d4cb68fbf950d70d5e0e471fc19957e4faa31009ce8f1279edacfc1332f91329955d9f8587', 1, 3, 'PartnerPortal', '[]', 0, '2022-06-24 01:33:25', '2022-06-24 01:33:25', '2023-06-24 07:03:25'),
('feef6620308052d06b405cb6f24ea8585bb88f51d072a300c71b1e236398b51b4ed328417809bdda', 1, 3, 'PartnerPortal', '[]', 0, '2022-05-04 03:43:37', '2022-05-04 03:43:37', '2023-05-04 09:13:37'),
('ff3510fffa75ace4ce7eeb6c05102b52afafcedd585b2f0f7e08c0f7379202711c060bff405b1af9', 96, 3, 'PartnerPortal', '[]', 0, '2022-07-21 22:42:10', '2022-07-21 22:42:10', '2023-07-22 04:12:10'),
('ff7bbd5188ed89f1e2991b58c9f641a43e00c2c847c3cf8677ded422c4f7118d08dff35a8cbe3959', 1, 3, 'PartnerPortal', '[]', 0, '2022-09-15 00:50:17', '2022-09-15 00:50:17', '2023-09-15 06:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'QF4R7jZOUz9Nr8sQJ464CvVquNJvBFhJRjDqah6D', NULL, 'http://localhost', 1, 0, 0, '2021-06-09 22:53:59', '2021-06-09 22:53:59'),
(2, NULL, 'Laravel Password Grant Client', 'erGEhiqZtqztZ6paLkUN9VtnB5MXyPu327YOgWtv', 'users', 'http://localhost', 0, 1, 0, '2021-06-09 22:53:59', '2021-06-09 22:53:59'),
(3, NULL, 'Laravel Personal Access Client', 'CAcWyyXb4wLvMPVuJS2QFQjOySPTpQdBRkhYgs38', NULL, 'http://localhost', 1, 0, 0, '2021-06-09 22:54:25', '2021-06-09 22:54:25'),
(4, NULL, 'Laravel Password Grant Client', 'UAS1pQBvxAEWjCNQmdUf6xUqbOKgkBvNO3ifYb5Q', 'users', 'http://localhost', 0, 1, 0, '2021-06-09 22:54:25', '2021-06-09 22:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-06-09 22:53:59', '2021-06-09 22:53:59'),
(2, 3, '2021-06-09 22:54:25', '2021-06-09 22:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partnerorginfos`
--

CREATE TABLE IF NOT EXISTS `partnerorginfos` (
  `id` bigint(20) unsigned NOT NULL,
  `partner_ref_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_hq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annual_revenue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lob_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rh_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_o_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_base` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_base_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partnership_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnerorginfos`
--

INSERT INTO `partnerorginfos` (`id`, `partner_ref_no`, `comp_name`, `comp_website`, `comp_hq`, `comp_desc`, `comp_size`, `industry`, `annual_revenue`, `lob`, `lob_other`, `city`, `ro_name`, `rh_name`, `state`, `country`, `pincode`, `loc_o_b`, `client_base`, `client_base_other`, `partnership_model`, `partner_id`, `created_at`, `updated_at`) VALUES
(1, 'RBP_93574', 'Pi Datacenters', 'https://pi-cloud.in', 'Hyderabad', 'Pi Datacenters', '100 - 250', 'Technology', '2000000', 'Consultancy', NULL, 'Hyderabad', 'Vignesh Seenivsan', 'Vignesh Seenivsan', 'Telangana', 'India', '522503', '["India - Telangana"]', '["Education","Enterprise","Government-Local","Government-National","Mid-size Business","Non-Profit","Startup"]', NULL, 'One-Time Referral Bonus', 1, '2021-07-04 18:41:51', '2021-07-04 18:41:51'),
(8, 'RBP_09625', 'EC Service', 'ecservice.in', '199, Avvai Nagar, Jagi Ammapalayam,', 'Online Business and Service Industry', '<50', 'E-Commerce', '0.10', 'Others', NULL, 'Salem', 'Not Known', 'Sujay Sen', 'Tamil Nadu', 'India', '636302', '"India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus"', 8, '2021-09-04 02:29:23', '2021-09-04 02:29:23'),
(9, 'RBP_06491', 'CloudFence Technologies (OPC) Private Limited', 'https://www.cloudfence.ai', 'UG- 06, MGF Metropolis Mall, Gurgaon, Haryana, India', 'CloudFence Technologies is a new-age Technology firm that offers the best in Cloud Services, SaaS, CloudSec, Cyber and Digital Transformation Solutions to clients across the globe.', '<50', 'Technology', '15000000', 'Reseller', NULL, 'Gurgaon', 'Roopam Jain', 'Roopam Jain', 'Haryana', 'India', '122002', '"India - Haryana,India - Haryana"', '"Education,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 9, '2021-09-08 05:16:52', '2021-09-08 05:16:52'),
(14, 'RBP_27198', 'EC Service', 'www.ecservice.in', '199,Avvai Nagar, Jagir ammapalayam,Salem', 'Service sector for past 10 years', '<50', 'Logistics', '10000000', 'Consultancy', NULL, 'Vijayawada', 'Sarma SN', 'Sarma SN', 'Andhra Pradesh', 'India', '636302', '"India - Andhra Pradesh,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Andhra Pradesh,India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 14, '2021-09-18 08:45:41', '2021-09-18 08:45:41'),
(17, 'RBP_01853', 'Vgosh Info', 'https://www.vgoshinfo.com', '189, Sayee Nagar,8th St,Virugambakkam', 'Our expertise in Web development & Mobile App development. we are into Blockchain solutionstechnology,Digital Marketing & Cloud Computing', '<50', 'IT/ITES', '50', 'Consultancy', NULL, 'Chennai', 'Rajesh Padmanaban', 'Sujay Sen', 'Tamil Nadu', 'India', '600092', '"India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 17, '2021-09-27 05:35:13', '2021-09-27 05:35:13'),
(18, 'RBP_28045', 'Laxmi Enterprises', 'www.laxmienterprises.in', 'Yusufguda, Hyderabad', 'Laxmi Enterprises is basic a system integrator. Handling multiple products like Telecom, Hardware,Networking and cloud', '<50', 'IT/ITES', '2', 'SI', NULL, 'Hyderabad', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Telangana', 'India', '500045', '"India - Andhra Pradesh,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 18, '2021-09-29 01:32:46', '2021-09-29 01:32:46'),
(19, 'RBP_80964', 'ABC', 'abc.co.in', 'Telengana', 'DC', '<50', 'IT/ITES', '12', 'Technology OEM', NULL, 'Hyderabad', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Telangana', 'India', '500019', '"India - Telangana"', '"Enterprise"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 19, '2021-09-29 05:05:34', '2021-09-29 05:05:34'),
(20, 'RBP_78246', 'Orisenc Technologies Pvt Ltd', 'www.orisenc.com', '5 Balu Nagar Mogappair East', 'IT System Integrator, Hybrid Platform delivery ,Dell Platinum Partner, Microsoft Silver Partner, AWS', '<50', 'IT/ITES', '20', 'SI', NULL, 'Chennai', 'Rajesh Padmanaban', 'Sujay Sen', 'Tamil Nadu', 'India', '600037', '"India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu"', '"Enterprise,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 20, '2021-09-29 10:12:04', '2021-09-29 10:12:04'),
(21, 'RBP_98061', 'Veda Systems', 'www.vedasystems.in', 'No 3407, Embassy Residency Road,439-Cheran Nagar, Perumbakkam, Chennai, Tamil Nadu-600100, India', 'We are the System Integrator started in 2020 and recently tied up with various OEM.  VEDA SYSTEMS is an emerging  market leader in the supply of Quality IT Products in Tamil Nadu. We provides Information Technology Solutions built on innovation, expertise, independence, and flexibility. Our mission is to deliver quality Technology Solutions and Professional Outsourcing Services that provide true business value to our clients, enabling them to achieve their desired goals and initiatives.', '<50', 'IT/ITES', '10', 'SI', NULL, NULL, 'Rajesh Padmanaban', '', 'Tamilnadu', 'India', '600100', '"India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 21, '2021-09-30 01:40:36', '2021-09-30 01:40:36'),
(22, 'RBP_61724', 'Labyrinth Solutions', 'www.labyrinthsolutions.in', 'MIG-43,Marripalem VUDA Layout', 'We are in IT industry as reseller and system integrators over 10 years with good repetition.', '<50', 'IT/ITES', '3.5', 'Reseller', NULL, 'Visakhapatnam', 'Kumar Rama Pinnamaraju', 'Sarma SN', 'Andhra Pradesh', 'India', '530009', '"India - Andhra Pradesh,India - Andhra Pradesh,India - Andhra Pradesh,India - Andhra Pradesh,India - Telangana"', '"Education,Enterprise,Government-Local,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 22, '2021-09-30 06:47:38', '2021-09-30 06:47:38'),
(23, 'RBP_78540', 'QUADSEL SYSTEMS PRIVATE LIMITED', 'www.quadsel.in', 'No.80/118 Anna Salai, Manickkam Lane, Guindy, Chennai', 'IT Infrastructure Management Services including Networking and Software', '50 - 100', 'IT/ITES', '9.6', 'SI', NULL, 'Chennai', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '600032', '"India - Andhra Pradesh,India - Chhattisgarh,India - Arunachal Pradesh,India - Andhra Pradesh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Transfer Price"', 23, '2021-09-30 06:49:09', '2021-09-30 06:49:09'),
(24, 'RBP_23658', 'Geogem Technologies Pvt Ltd', 'www.gemtrack.in', '#10-1-1198,Ground Floor,Lakdikapul,Hyderabad', 'We are a group of Company with business intrest in Telecom /Security Solutions/Home Automation', '<50', 'IT/ITES', '5', 'Reseller', NULL, 'Hyderabad', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Telangana', 'India', '500004', '"India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 26, '2021-09-30 09:20:15', '2021-09-30 09:20:15'),
(25, 'RBP_56823', 'ProPhoenix Soft Pvt Ltd', 'www.prophoenixsoft.com', 'Oval Building, iLabs Center, Plot no. 18, Madhapur, Hyderabad', 'ProPhoenix Soft is a privately held company established in 2017 ; a leading 360-degree solutions provider for end to end IT requirements along with Cloud and Mobility solutions. We are a provider of Azure Cloud Service, IT consulting and software services to organizations all across India', '<50', 'IT/ITES', '30000000', 'SI', NULL, 'Hyderabad', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Telangana', 'India', '500018', '"India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup,Others"', 'Exceptional', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 27, '2021-10-01 10:32:07', '2021-10-01 10:32:07'),
(26, 'RBP_97581', 'Sceptre Business Corporation LLP', 'www.sceptrebusiness.com', 'No. 6/858-M, 2nd Floor, Suite No.938, Valamkottil Towers, Judgemukku, Kakkanad, Kochi -', 'Sceptre Business Corporation LLP is a consultancy firm that provides consultancy services like IT consultancy, business consultancy, and corporate real estate to its clients.', '<50', 'Technology', '1', 'Consultancy', NULL, 'Kochi', 'Sujith P R', 'Sujay Sen', 'Kerala', 'India', '682021', '"India - Kerala,India - Kerala,India - Kerala,India - Kerala,India - Kerala,India - Tamil Nadu,India - Karnataka,India - Kerala"', '"Education,Enterprise,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 28, '2021-10-04 03:02:01', '2021-10-04 03:02:01'),
(27, 'RBP_87469', 'Probity Technologies Private Limited', 'www.probitytech.com', 'L4/203 Empire Estate, Chinchwad', 'Probity Technologies is a team of experts in the field of IT Implementation and services. We have expertise and knowledge in aligning information technology with customer’s business requirements. The company is focused on delivering value through integrated solutions for data intensive business processes that help enterprises overcome their business challenges.', '<50', 'Technology', '1', 'Technology OEM', NULL, 'Pune', 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '411019', '"Indonesia,India - Andhra Pradesh,India - Maharashtra,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup,Others"', 'Manufacturing', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 29, '2021-10-05 04:55:08', '2021-10-05 04:55:08'),
(28, 'RBP_89542', 'Laxmi Enterprises', 'www.laxmienterprises.in', 'Yusufguda, Hyderabad', 'Laxmi Enterprises is  System Integrator and Cloud Service Provider with a huge customer base. They are premium partners of TATA,Airtel and Reliance', '<50', 'IT/ITES', '2', 'SI', NULL, 'Hyderabad', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Telangana', 'India', '500033', '"India - Andhra Pradesh,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 30, '2021-10-07 01:24:23', '2021-10-07 01:24:23'),
(29, 'RBP_02851', 'Labyrinth Solutions', 'www.labyrinthsolutions.in', 'MIG 43, Marripalem VUDA Colony,', 'Labyrinth Solutions is a Premium networking partner in Andhra. we are into networking, cloud and managed services', '<50', 'Technology', '5', 'ISV', NULL, 'Visakhapatnam', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '530009', '"India - Andhra Pradesh,India - Telangana,India - Karnataka,India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 31, '2021-10-08 05:40:18', '2021-10-08 05:40:18'),
(30, 'RBP_39724', 'Om Naitiktej Enterprises', 'https://www.indiamart.com/omnaitiktejenterprises/', 'H.No. 5-102, Sri Nilayam, Shiva Nagar, Chintal, Hyderabad, Telangana', 'Established in year 2013, “Om Naitiktej Enterprises” is Service Provider Networking Services, Wireless Router, Voice Service, Antivirus Software etc.', '<50', 'Telecom', '1', 'Consultancy', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500054', '"India - Telangana"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 32, '2021-10-12 06:34:18', '2021-10-12 06:34:18'),
(31, 'RBP_26591', 'Vserve Technology Services', 'www.vservetech.co.in', '#629,Ambika Nilaya,Fort, Devanahalli', 'VServe is a Technology Consulting & Services company based in Bangalore serving customers to adopt technology solutions which are Reliable, Secured and Agile to increase the productivity of their organization. We are Team of highly experienced professionals having expertise in IT solutions and we intend to support organizations with the best of our experience & services to scale and focus on their core business.', '<50', 'Technology', '1', 'Reseller', NULL, 'Bengaluru', 'Madhu Keerthi K', 'Sujay Sen', 'Karnataka', 'India', '562110', '"India - Andhra Pradesh,India - Andhra Pradesh,India - Chhattisgarh,India - Arunachal Pradesh"', '"Education,Enterprise,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,Transfer Price"', 33, '2021-10-12 10:49:31', '2021-10-12 10:49:31'),
(32, 'RBP_21530', 'MSL Infotech India Pvt Ltd', 'www.mslinfotech.com', '1/B1 Kannadasan Street, Rangarajapuram, Kodambakkam, Chennai', 'We are South India based emerging Systems Integrator focused on empowering organizations with its innovative IT product, solutions & services portfolio, both on-premises and cloud...Our Unique Strength is ability to Understand Exactly the customer Needs and Deliver Efficiently both products and services in time.Providing IT Infrastructure Support from Single Window in the Area of Computing, Networking & Security, Printing Solution, Power Consolidation and Support services.Our Solutions of Pr', '<50', 'Technology', '12.08', 'SI', NULL, 'Chennai', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '600024', '"India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Tamil Nadu,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Andhra Pradesh,India - Andhra Pradesh,India - Andhra Pradesh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Transfer Price"', 34, '2021-10-13 01:37:32', '2021-10-13 01:37:32'),
(33, 'RBP_01892', 'Origon Systems & Traders', 'www.origonsystems.in', '320/5, Natesan Nagar Main Road Virugambakkam, Chennai-600092', 'We are the Leading Computer and Laptop Dealer in Chennai and catering to various segments and Business verticals. We have also tied up with the Leading Telecom Providers', '<50', 'Telecom', '50', 'SI', NULL, NULL, 'Rajesh Padmanaban', 'Sujay Sen', 'Tamilnadu', 'India', '600092', '"Afghanistan,India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 35, '2021-10-13 01:39:56', '2021-10-13 01:39:56'),
(34, 'RBP_21908', 'Amit Ifra', 'www.ainfra.com', 'Pune , Shivajinagar', 'We are a reseller', '<50', 'IT/ITES', '1', 'SI', NULL, 'Pune', 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '411021', '"India - Andhra Pradesh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 36, '2021-10-13 06:36:46', '2021-10-13 06:36:46'),
(35, 'RBP_06213', 'Yotta Infrastructure Solutions LLP', 'www.yotta.com', '5th Floor, Scorpio Building, Hiranandani Gardens, Powai', 'Yotta supports with managed services to customer', '100 - 250', 'Others', '100', 'Reseller', NULL, 'Mumbai', 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '400076', '"India - Maharashtra"', '"Enterprise,Government-Local,Government-National,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 37, '2021-10-14 00:03:11', '2021-10-14 00:03:11'),
(36, 'RBP_79346', 'Vserve Technology Services', 'www.vservetech.co.in', '#629,Ambika Nilaya,Fort, Devanahalli,Bangalore', 'VServe is a Technology Consulting & Services company based in Bangalore serving customers to adopt technology solutions which are Reliable, Secured and Agile to increase the productivity of their organization. We are Team of highly experienced professionals having expertise in IT solutions and we intend to support organizations with the best of our experience & services to scale and focus on their core business.', '<50', 'Technology', '1', 'Reseller', NULL, 'Bengaluru', 'Madhu Keerthi K', 'Sujay Sen', 'Karnataka', 'India', '562110', '"India - Karnataka,India - Kerala,India - Andhra Pradesh,India - Goa,India - Tamil Nadu,India - Telangana"', '"Education,Enterprise,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,Transfer Price"', 38, '2021-10-14 02:56:00', '2021-10-14 02:56:00'),
(37, 'RBP_26384', 'DCDR Infra Private Limited', 'http://dcdrinfra.com/', 'No.6, Nehru Main Road, Lakshmi Nagar, Sholinganallur', 'DCDR Infra Private Limited, with its 100 years of combined work experience and expertise has remained updated and well versed with all latest technologies to help provide real time solutions for all your IT Needs.DCDR, understands the complexity of today’s and next generation technologies and delivers what suits better for your organisation. We have stood by this and proven to many organisations by providing a consultative and solutions based approach with performance, scalability, usability,', '<50', 'Technology', '20', 'Reseller', NULL, 'Chennai', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '600119', '"India - Tamil Nadu,India - Tamil Nadu,India - Karnataka,India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business"', NULL, '"Transfer Price"', 39, '2021-10-16 00:07:36', '2021-10-16 00:07:36'),
(38, 'RBP_90587', 'YOTTA INFRASTRUCTURE SOLUTION LLP', 'www.yotta.com', 'YOTTA INFRASTRUCTURE SOLUTION LLP', 'Yotta provides IT infrastructure and managed services to customer', '250 - 500', 'Technology', '100', 'Reseller', NULL, 'Mumbai', 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '400076', '"India - Maharashtra,India - Delhi,India - Andhra Pradesh,India - Maharashtra"', '"Enterprise,Government-Local,Government-National,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 40, '2021-10-18 00:52:47', '2021-10-18 00:52:47'),
(39, 'RBP_39102', 'Trace Network and Engineering Pvt Ltd', 'www.tracenetwork.in', 'Flat no 102, Plot no 809, Venkoti Building, Ayyappa Society, Khanamet Madhapur, Hyderabad, Telengan', 'System Integrators and Cybersecurity providers since 16+ years with 600+ customer and 30+ Technology partner and 70+ solutions.', '<50', 'IT/ITES', '7', 'Reseller', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500081', '"India - Telangana,India - Andhra Pradesh,India - Telangana,India - Telangana,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,Transfer Price"', 41, '2021-10-18 07:23:41', '2021-10-18 07:23:41'),
(40, 'RBP_03571', 'Trace Network and Engineering Pvt Ltd', 'www.tracenetwork.in', 'Flat no 102, Plot no 809, Venkoti Building, Ayyappa Society, Khanamet Madhapur, Hyderabad, Telengan', 'System Integrators and Cybersecurity solutions Provided', '<50', 'IT/ITES', '7', 'Reseller', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500081', '"India - Andhra Pradesh,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,Transfer Price"', 42, '2021-10-19 23:14:05', '2021-10-19 23:14:05'),
(41, 'RBP_93184', 'Felix Infotech Pvt Ltd', 'www.felixinfotech.com', 'New No. 7, Old No. 67, 3rd Main Rd, Kalaimagal Nagar, Ekkatuthangal,', 'Felix Infotech is a pan India technology solutions and service provider, powered by a team of passionate members, that thrive on customer satisfaction.', '<50', 'Technology', '25', 'Reseller', NULL, 'Chennai', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '600032', '"India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Transfer Price"', 43, '2021-10-21 19:38:35', '2021-10-21 19:38:35'),
(42, 'RBP_53261', 'SMARTSOFT', 'http://smartsoft.co.in/', 'AL Thaf Building,Calvary Road, West Fort, Thrissur, 680004', 'Smartsoft is a leading provider of quality IT infrastructure, ERP and Business Intelligence Solutions by leveraging technology in cost effective manner to solve business problems. We associate with leading manufactures such as IBM, Microsoft, DELL, HP, VMWARE, Citrix, Symantec, Adobe, Oracle, Intel to name a few.  Smartsoft is backed by a team of specialists who are trained and certified on Software Licensing, Servers, Storage and  solutions such as SAP Business One , Cloud Hosting and etc..', '50 - 100', 'Trading', '11.17', 'Reseller', NULL, 'Thrissur', 'Sujith P R', 'Sujay Sen', 'Kerala', 'India', '680004', '"India - Kerala,India - Tamil Nadu,India - Maharashtra,India - Karnataka,India - Goa"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 44, '2021-10-25 07:50:17', '2021-10-25 07:50:17'),
(43, 'RBP_59024', 'VIPUN COGNITIVE SOLUTIONS PVT LTD.', 'www.vipuns.com', 'G1, SAI SUPRIYA SIKHARAM, BEHIND GARDEN city college, kithaganuru', 'We are a System integration services company that deals with Server, storage, Cloud, Virtualisation, Networking, edge computing, Cyber Security, IoT solutions. Established in the year 2019,', '<50', 'IT/ITES', '1', 'Reseller', NULL, 'Bengaluru', 'Sujay Sen', 'Debmalya Dey Roy', 'Karnataka', 'India', '560036', '"India - Karnataka,India - Karnataka,India - Karnataka"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 45, '2021-10-25 08:05:01', '2021-10-25 08:05:01'),
(44, 'RBP_60172', 'SMARTSOFT', 'http://smartsoft.co.in/', 'AL Thaf Building,Calvary Road West Fort, Thrissur, Kerala-680 004 India', 'Smartsoft is a leading provider of quality IT infrastructure, ERP and Business Intelligence Solutions by leveraging technology in cost effective manner to solve business problems. We associate with leading manufactures such as IBM, Microsoft, DELL, HP, VMWARE, Citrix, Symantec, Adobe, Oracle, Intel to name a few.  Smartsoft is backed by a team of specialists who are trained and certified on Software Licensing, Servers, Storage and  solutions such as SAP Business One , Cloud Hosting and etc..', '50 - 100', 'Trading', '11.17', 'Reseller', NULL, 'Thrissur', 'Sujith P R', 'Sujay Sen', 'Kerala', 'India', '680004', '"India - Karnataka,India - Kerala,India - Tamil Nadu,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 46, '2021-10-25 23:19:23', '2021-10-25 23:19:23'),
(45, 'RBP_56418', 'Dbrains Infosystems & Controls Pvt Ltd', 'www.dbrains.in', 'PM building,Azakodi Temple cross road mavoor road.Calicut', 'ISO Certified company dealing with hardware & software', '100 - 250', 'IT/ITES', '90000000', 'Reseller', NULL, 'Kozhikode', 'Sujith P R', 'Sujay Sen', 'Kerala', 'India', '670004', '"India - Kerala,India - Kerala"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 47, '2021-10-27 04:06:31', '2021-10-27 04:06:31'),
(46, 'RBP_62547', 'Prime Technologies', 'http://www.primetechnologiesindia.com', 'No.6, SRP Ponnuswamy Nagar,Saibaba Colony', 'Prime Technologies has been a premiere supplier of software engineering consulting since 1994. It has developed a reputation for technical strength and an organization committed towards customer satisfaction.', '<50', 'IT/ITES', '7', 'Consultancy', NULL, 'Coimbatore', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '641011', '"India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Transfer Price"', 48, '2021-10-30 02:57:05', '2021-10-30 02:57:05'),
(47, 'RBP_81079', 'Prime Technologies', 'http://www.primetechnologiesindia.com', 'No.6, SRP Ponnuswamy Nagar,Saibaba Colony', 'Prime Technologies has been a premiere supplier of software engineering consulting since 1994. It has developed a reputation for technical strength and an organization committed towards customer satisfaction.', '<50', 'IT/ITES', '7', 'Consultancy', NULL, 'Coimbatore', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '641011', '"India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Transfer Price"', 49, '2021-11-09 01:15:32', '2021-11-09 01:15:32'),
(48, 'RBP_31457', 'VIPUN COGNITIVE SOLUTIONS PVT LTD.', 'www.vipuns.com', 'G1, SAI SUPRIYA APARTMENT, KITHAGANURU, K.R.PURAM, BEHIND GARDEN CITY COLLEGE', 'VIPUN COGNITIVE SOLUTIONS PVT LTD.(VCSPL) was established in the year 2019 in Bangalore, India. Started by 2 tech-savvy enthusiasts and IT proficient’s with an aim to be the top player in IT Infra solutions and Services.We are Business partners for a wide range of ICT products and solutions, partnered with industry leaders to provide robust and cost-effective solutions to our customers.We are an A.I. driven ICT company that help our clients throughout their Digital Transformation and achieve', '<50', 'Technology', '1', 'SI', NULL, 'Bengaluru', 'Sujay Sen', 'Debmalya Dey Roy', 'Karnataka', 'India', '560036', '"India - Karnataka,India - Karnataka"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 50, '2021-11-10 03:20:23', '2021-11-10 03:20:23'),
(49, 'RBP_04569', 'Balaji AI Infotech Pvt.Ltd.', 'www.balajiinfotechindia.com', '#5-37-197, Upstairs siddartha photo city,4/9, brodipet, Guntur', 'Tally Authorised implementation partner.', '50 - 100', 'IT/ITES', '1', 'SI', NULL, 'Guntur', 'Sarma S N', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '522002', '"India - Andhra Pradesh,India - Andhra Pradesh,India - Andhra Pradesh"', '"Enterprise"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 51, '2021-11-12 02:18:05', '2021-11-12 02:18:05'),
(50, 'RBP_08547', 'EC servies', 'www.ecservices.com', '199,avvai nagar,Salem', 'Mainly into Logistics ,hardware sales and consulatncy', '<50', 'Logistics', '1', 'Consultancy', NULL, 'Salem', 'Sarma S N', 'Vignesh Seenivsan', 'Tamil Nadu', 'India', '636302', '"India - Arunachal Pradesh,India - Andhra Pradesh,India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus"', 52, '2021-11-13 00:38:23', '2021-11-13 00:38:23'),
(51, 'RBP_18679', 'MM9', 'www.mm9india.com', '151, Sector 31, Gurugram', 'We are IT consulting and services having around 8+ yrs of Industry experience', '50 - 100', 'IT/ITES', '83', 'SI', NULL, 'Gurgaon', 'Amit Desai', 'Vijay Sharma', 'Haryana', 'India', '122001', '"India - Andhra Pradesh,India - Haryana,India - Haryana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 53, '2021-11-15 06:41:32', '2021-11-15 06:41:32'),
(52, 'RBP_51937', 'Tatva ICT Services Pvt Ltd', 'www.tatvaindia.in', 'First Floor Mid Town Plaza Banjara Hills Hyderabad Telangana', 'TATVA INDIA expertise in Cloud, IT infra and Network Management Services. We are partnered with leading Global OEMs to meet customer challenges and enhance Operations efficiency, there by supporting & delivering. We are a responsive, Customer - dedicated and trusted ICT Services Provider helping clients to achieve success through their Business needs. We have the experience and expertise to handle your complete procurement process, from consultation right through to product supply and even assis', '<50', 'Technology', '20000000', 'Reseller', NULL, 'Hyderabad', 'Madhavi Pillai M', 'Vignesh Seenivsan', 'Telangana', 'India', '500033', '"India - Andhra Pradesh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 54, '2021-11-22 02:26:58', '2021-11-22 02:26:58'),
(53, 'RBP_21705', 'EC Service', 'www.ecservice.in', '199,Avvai Nagar, Jagir ammapalayam,Salem', 'Mainly into logistics consultancy along with IT solutions', '<50', 'Logistics', '1', 'Consultancy', NULL, 'Salem', 'Sarma S N', 'Vignesh Seenivsan', 'Tamil Nadu', 'India', '636302', '"India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus"', 55, '2021-11-23 02:17:33', '2021-11-23 02:17:33'),
(54, 'RBP_58301', 'Cloud Yari Technologies', 'www.cloudyari.com', '1st Floor, Regus Business center,Old Madras road, KR Puram', 'Cloud Yari is a Cloud and Managed Service Partner. Already partner for AWS and Cloud4C.', '<50', 'IT/ITES', '2', 'Consultancy', NULL, 'Bengaluru', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Karnataka', 'India', '560016', '"India - Andhra Pradesh,India - Karnataka,India - Kerala,India - Maharashtra,India - Tamil Nadu,India - Telangana,India - Delhi,India - Puducherry"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus"', 56, '2021-11-24 01:55:53', '2021-11-24 01:55:53'),
(55, 'RBP_31046', 'IDC INDIA', 'www.idcindia.biz', '79 Dadi Mansion, Pralhad Chendvankar Marg, Dockyard Road, Mumbai 400010.', 'IDC India is an IT Marketing Company started in 2009 selling various Datacenter, cloud, hosting, Infrastructure & managed services to Enterprises & Mid Size organisations.', '<50', 'Others', '1', 'Consultancy', NULL, 'Mumbai', 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400010', '"India - Maharashtra,India - Maharashtra,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 57, '2021-11-24 06:24:51', '2021-11-24 06:24:51'),
(56, 'RBP_72865', 'Dev Systems & IT Services Pvt Ltd', 'http://www.devsystems.in/', 'New No: 13, Old No:4 Address: B 905, The Platina,  Govindan Road, West Mambalam', 'Dev systems established in year 2001and Dev team extends its passion to sell quality IT products. Dev Systems has several strengths that make it an ideal technology partner to medium, large and enterprise customers with complex IT environments. Dev Systems adopts best practices in the industry across all its support functions towards building individual excellence.', '<50', 'Technology', '40', 'Reseller', NULL, 'Chennai', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '600033', '"India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Transfer Price"', 58, '2021-11-24 23:42:29', '2021-11-24 23:42:29'),
(57, 'RBP_79032', 'Networks', 'www.networks-in.com', 'Plot No.201, 18th Street, Chowdry Nagar, Valasaravakkam', 'Networks is System Integrator on IT Products and Solutions in South Indian Market. Networks team has a consistent record of delivering the best technological solutions, including, lowering costs, raising productivity, showing tangible ROI, and mitigating risk. We combine your expectations and our innovations, to deliver customized products that flawlessly serve its goals.', '<50', 'Technology', '20', 'Reseller', NULL, 'Chennai', 'Vijayan Appasamy', 'Sujay Sen', 'Tamil Nadu', 'India', '600087', '"India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Mid-size Business"', NULL, '"Transfer Price"', 59, '2021-11-29 23:03:17', '2021-11-29 23:03:17'),
(58, 'RBP_69480', 'Accel IT Services', 'www.accelits.com', 'First Floor, SFI Complex, 175 - Valluvar Kottam High Road, Nungambakkam, Chennai - 600034, TN, India', 'ocused on Cloud Infrastructure, Enterprise Security, RPA, Managed Services and Training, Accel IT Services has evolved into a dependable and long-term digital transformation partner for discerning enterprise customers.', '250 - 500', 'IT/ITES', '102', 'SI', NULL, 'Chennai', 'Amit Desai', 'Vijay Sharma', 'Tamil Nadu', 'India', '600034', '"India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 61, '2021-11-30 00:03:24', '2021-11-30 00:03:24'),
(59, 'RBP_53684', 'Accel IT Services', 'www.accelits.com', 'First Floor, SFI Complex, 175 - Valluvar Kottam High Road, Nungambakkam, Chennai - 600034, TN, India', 'Focused on Cloud Infrastructure, Enterprise Security, RPA, Managed Services and Training, Accel IT Services has evolved into a dependable and long-term digital transformation partner for discerning enterprise customers', '100 - 250', 'IT/ITES', '102', 'SI', NULL, NULL, 'Amit Desai', 'Vijay Sharma', 'Tamil Nadu', 'India', '600034', '"India - Tamil Nadu,India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 62, '2021-11-30 06:22:27', '2021-11-30 06:22:27'),
(61, 'RBP_05749', 'Orisenc Technologies Private Limited', 'https://orisenc.com', 'No. 5, Balu Nagar, Mogappair East, Chennai, Tamil Nadu – 600037', 'Orisenc Technologies is one of the fastest growing Next-gen IT Infrastructure and Cloud Specialists. You can trust our certified engineers with all of your cloud, on-premise - hardware, software, and networking needs. Our team of cloud and storage experts is one of the best in the industry, with a focus on consistency, efficiency and awesome customer service. ​Orisenc is a Dell-EMC platinum partner! You can trust our certified engineers with all of your cloud, on-premises - hardware', '50 - 100', 'IT/ITES', '50', 'SI', NULL, 'Chennai', 'Rajesh Padmanaban', 'Sujay Sen', 'Tamil Nadu', 'India', '600037', '"India - Karnataka,India - Kerala,India - Tamil Nadu,India - Telangana,India - Maharashtra"', '"Enterprise,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 64, '2021-11-30 07:41:10', '2021-11-30 07:41:10'),
(62, 'RBP_48976', 'IDC INDIA', 'www.idcindia.biz', '79 Dadi Mansion, Pralhad Chendvankar Marg, Dockyard Road, Mumbai 400010.', 'IDC India is an IT, Cloud, Datacenter marketing company.Having Premium clients across India', '<50', 'Others', '1', 'Consultancy', NULL, NULL, 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400010', '"India - Maharashtra,India - Jharkhand,India - Maharashtra,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 65, '2021-12-01 05:40:47', '2021-12-01 05:40:47'),
(63, 'RBP_47063', 'IDC INDIA', 'www.idcindia.biz', '79 Dadi Mansion, Pralhad Chendvankar Marg, Dockyard Road, Mumbai 400010.', 'IT Marketing Company', '<50', 'Others', '1', 'Consultancy', NULL, NULL, 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400010', '"India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 66, '2021-12-01 05:56:59', '2021-12-01 05:56:59'),
(64, 'RBP_95048', 'Fintech Software & IT Service', 'www.fintechsoftwareservice.com', 'Room No: 2-A/6,Gundecha Onclave, Kherani Rd, Next to Post Office, SakiNaka, Andheri East, Asalpha, Mumbai, Maharashtra', 'FinTech Software & IT Service one of the fastest growing Information Technology company with more than decade of history in providing IT Consulting & Managed IT Services to medium and large enterprise."', '50 - 100', 'IT/ITES', '2', 'Consultancy', NULL, 'Mumbai', 'Amit Desai', 'Vijay Sharma', 'maharashtra', 'India', '400072', '"India - Maharashtra"', '"Enterprise,Government-Local,Mid-size Business,Others"', 'BFSI', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 67, '2021-12-01 22:21:46', '2021-12-01 22:21:46'),
(65, 'RBP_17856', 'SR TECHNO GROUP', 'WWW.SHRESHTAINFOTECH.IN', 'PLOT NO:53, PATRIKA NAGAR , MADHAPUR, HYDERABAD-81', 'WE ARE INTO IT integration company, we do all IT infrastructure solution of trunk y project in  Technology  Industry. we do all data center solutions for software industry .', '<50', 'IT/ITES', '1', 'Reseller', NULL, NULL, 'Vignesh S', 'Debmalya Dey Roy', 'TELANGANA', 'INDIA', '500081', '"Zambia,Zambia,Yemen,Yemen,Zambia"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"One-Time Referral Bonus"', 68, '2021-12-02 00:37:04', '2021-12-02 00:37:04'),
(66, 'RBP_49153', 'Zion Technologies Solutions', 'https://zion-technologies-solutions.business.site/', '26-95/20, BN -146,Balaramnagar, Safilguda', 'Nature Of Business : Software Development, Education, International Real-Estate Consulting/Developers, DSA, Investor Advisory and Food Manufacturing.', '50 - 100', 'IT/ITES', '55', 'SI', NULL, 'Hyderabad', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Telangana', 'India', '500047', '"India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 70, '2021-12-03 06:24:26', '2021-12-03 06:24:26'),
(67, 'RBP_09867', 'Digital Verto', 'www.digitalverto.com', 'Vijayawada', 'Digital Verto is a digital marketing agency based out in Vijayawada, India. With premium Digital Marketing Services & Training, Digital Verto transforms your business from the traditional way of marketing to the digital.', '<50', 'IT/ITES', '0.5', 'Consultancy', NULL, 'Vijayawada', 'Sarma S N', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '520010', '"India - Andhra Pradesh,India - Andhra Pradesh"', '"Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 71, '2021-12-04 04:06:39', '2021-12-04 04:06:39'),
(68, 'RBP_04538', 'Chithra Gupta Accouting Servicrs', 'www.chithragupta.com', '40-7-5, Sf-2, Trisul Towers, Mogalrajpuram , BMNR Street,Vijayawada', 'Mainly into BFSi financial consultancy for Tally implementation GST consultancy from last 30 Years', '50 - 100', 'BFSI', '5', 'Consultancy', NULL, 'Vijayawada', 'Sarma S N', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '520010', '"India - Andhra Pradesh"', '"Enterprise,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus"', 72, '2021-12-04 06:58:04', '2021-12-04 06:58:04'),
(69, 'RBP_30248', 'INNOFEAST IT SOLUTIONS (P)LTD', 'www.innofeast.in', 'Buhari’s Building, Muttom Aluva', 'nnofeast IT Solutions Pvt. Ltd. leading Digital Marketing service provider serving tier 1 brands across Asia-Pacific, US and European markets. Launched in 2014. We specialise in design for all aspects of digital Marketing, influencer Marketing , corporate identity, web & Mobile application development. We work for a diverse range of clients both within nation and abroad.', '<50', 'Technology', '1', 'Others', 'Digital Marketing Agency', 'Kochi', 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '683106', '"India - Kerala,India - Kerala"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 73, '2021-12-07 06:02:00', '2021-12-07 06:02:00'),
(70, 'RBP_93601', 'Professional Pal', 'www.professionalpal.in', 'HSR Layout, Sector 7, Bangalore', 'Authorised channel partner for all the telecom service providers like Airtel, Vodafone, TATA and Reliance Jio', '50 - 100', 'Telecom', '1.2', 'Consultancy', NULL, 'Bengaluru', 'Madhu Keerthi K', 'Sujay Sen', 'Karnataka', 'India', '560102', '"India - Karnataka,India - Kerala,India - Andhra Pradesh,India - Tamil Nadu,India - Delhi,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 74, '2021-12-07 06:45:28', '2021-12-07 06:45:28'),
(71, 'RBP_51043', 'DevDatta Instruments & Technology Pvt Ltd', 'www.devdatta.in', '7th Floor, Spencer Plaza, Anna Salai, Chennai', 'We are team of professionals who offer complete IT services, solutions [AI & IOT] and CYBER SECURITY with best products', '<50', 'IT/ITES', '50', 'SI', NULL, 'Chennai', 'Rajesh Padmanaban', 'Sujay Sen', 'Tamil Nadu', 'India', '600002', '"Estonia,India - Andhra Pradesh,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 75, '2021-12-07 09:41:06', '2021-12-07 09:41:06'),
(72, 'RBP_37621', 'UI SOLUTION', 'www.uidigitalworld.com', '25-125, Ground Floor,chintal, medchal', 'We are basically in system integration, cloud service provider and managed service povider', '<50', 'IT/ITES', '1', 'SI', NULL, 'Hyderabad', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Telangana', 'India', '500054', '"India - Andhra Pradesh,India - Telangana,India - Tamil Nadu,India - Karnataka"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 76, '2021-12-11 03:10:06', '2021-12-11 03:10:06'),
(73, 'RBP_20934', 'Ampler Technologies Pvt Ltd', 'www.ampler.in', 'Sri Rasthu Towers, 1st Floor,Vengal Rao Nagar,', 'Ampler Technologies Pvt Ltd is a leading value-added System integration Services & Solutions Provider in Hyderabad & Bangalore. Incorporated in 2016,our progress has been meteoric with an expansive client outreach. We carry expertise in System integration and implementation of IT Hardware equipment''s. Headquartered in Hyderabad , Our product lines are aligned across End user Computing, Data Center infrastructure, Security, Networking, Cloud  and Service.', '<50', 'Others', '120000000', 'SI', NULL, 'Hyderabad', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Telangana', 'India', '500038', '"India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 77, '2021-12-14 23:30:20', '2021-12-14 23:30:20'),
(74, 'RBP_42531', 'CLOUD MINDS SOLUTIONS', 'www.cloudmindssolutions.com', 'BRTS Road, Vepagunta,', 'We are cloud consulting company working on Multi cloud Platforms and Managed services', '<50', 'IT/ITES', '2', 'Consultancy', NULL, 'Visakhapatnam', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '530047', '"India - Andhra Pradesh,India - Karnataka,India - Telangana,India - Tamil Nadu"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 78, '2021-12-15 00:02:25', '2021-12-15 00:02:25'),
(75, 'RBP_01837', 'Locuz Enterprises Solutions Ltd', 'www.locuz.com', 'Locuz Enterprises Solutions Ltd', 'IT system integrator', '500 - 1000', 'Technology', '200', 'Reseller', NULL, 'Hyderabad', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Telangana', 'India', '500081', '"India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Andhra Pradesh,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 79, '2021-12-15 00:31:47', '2021-12-15 00:31:47'),
(76, 'RBP_19426', 'Dynacons Systems & Solutions Limited', 'http://dynacons.com/', '78, Ratnajyot Industrial Estate, Irla Lane Vile West', 'Dynacons Systems & Solutions Ltd. is an IT company with global perspectives with its headquarters at Mumbai and branches all over India.Established in 1995, Dynacons undertakes all activities related to IT infrastructure including infrastructure design and consulting services, turnkey systems integration of large Network and Data Centre infrastructures including supply of associated equipment and software, onsite and remote facilities management of multi location infrastructure of domestic clien', '1000 - 2500', 'IT/ITES', '400', 'SI', NULL, 'Mumbai', 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400056', '"India - Maharashtra,India - Maharashtra,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 80, '2021-12-17 06:04:31', '2021-12-17 06:04:31'),
(77, 'RBP_68357', 'Locuz Enterprises Solutions Ltd', 'www.locuz.com', 'Locuz Enterprises Solutions Ltd', 'IT System Integrator', '500 - 1000', 'Others', '200', 'Reseller', NULL, 'Hyderabad', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Telangana', 'India', '500081', '"India - Telangana,India - Andhra Pradesh"', '"Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 81, '2021-12-21 22:50:52', '2021-12-21 22:50:52'),
(78, 'RBP_05174', 'EastOrigin Cybertech Pvt Ltd', 'eastorigin.com', '4th Floor, MVR’s Vinayagar Trade Center, VIP Road , Asilmeta , Visakhapatnam', 'EastOrigin is a digital age technology company primarily focused on developing and offering user friendly Cyber Solutions for Global logistics, manufacturing and port based operations. EastOrigin also provides services like IT Consulting, IT Infrastructure Services and Cloud Services.', '<50', 'IT/ITES', '1', 'Consultancy', NULL, 'Visakhapatnam', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '530003', '"India - Andhra Pradesh,India - Karnataka,India - Tamil Nadu,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 82, '2021-12-23 07:13:45', '2021-12-23 07:13:45'),
(79, 'RBP_98207', 'Bridgecubex Infratech Pvt. Ltd', 'www.bridgecubex.com', '#2, 3rd Floor, NR Complex, 27th Main, 1st Sector, HSR Layout', 'Our company is one of the foremost experts in technology domain. We hold thousands of clients in India and is regarded as one of the largest VoIP providers in the country', '<50', 'IT/ITES', '1', 'Technology OEM', NULL, 'Bengaluru', 'Madhu Keerthi K', 'Sujay Sen', 'Karnataka', 'India', '560102', '"India - Bihar,India - Bihar,India - Chhattisgarh,India - Chhattisgarh,India - Assam,India - Andhra Pradesh,India - Goa,India - Goa,India - Goa,India - Goa,India - Andhra Pradesh,India - Karnataka"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 83, '2021-12-28 01:50:11', '2021-12-28 01:50:11'),
(80, 'RBP_08536', 'Transneter AR Software And Solutions Pvt. Ltd.', 'https://edigitalbox.com/', 'Flat No.2, Kashyapi A, Saubhagya Nagar, Near Pumping Station, Gangapur Road, Nashik', 'Transneter AR Software And Solutions Pvt. Ltd. company develops softwares. It focuses on eDigitalbox ecommerce website. It is a platform that fulfills various clients'' requirements in a place. All the IT related services and products are available on the e commerce website.  It helps small and large businesses to find new ways to interact with incremental business clients via a trusted experience.', '50 - 100', 'E-Commerce', '1', 'Others', 'IT Services', 'Nashik', 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '422007', '"India - Maharashtra,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Startup,Others"', 'Everything related to technical products/services', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 84, '2021-12-29 03:46:17', '2021-12-29 03:46:17'),
(81, 'RBP_62084', 'DATASOFT COMNET PVT LTD', 'www.datasoftcomnet.com', 'Vanitha residency fno103 104 Janakirama street', 'Consulting, Network Design and ImplementationWe provide latest Technology Consulting, IT Facilities Management, LAN, WAN Networking, Virtual Private Network, Internet, and Intranet solutions for businesses.', '50 - 100', 'IT/ITES', '15', 'SI', NULL, 'Visakhapatnam', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Andhra Pradesh', 'India', '530016', '"India - Andhra Pradesh,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup,Others"', 'DATA CENTRE SERVICES', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 85, '2021-12-30 06:46:35', '2021-12-30 06:46:35'),
(82, 'RBP_73489', 'DOCTUS SOFTWARE SOLUTIONS PVT.LTD', 'doctusindia.com', 'raod no:10 , banjarahills,hyderabad', 'DOCTUS SOFTWARE SOLUTIONS   is leading Managed IT Services , Systems integration, technology services and consulting company', '500 - 1000', 'Healthcare & Pharma', '75', 'Reseller', NULL, 'Hyderabad', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Telangana', 'India', '500034', '"India - Andhra Pradesh,India - Telangana"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 86, '2022-01-05 05:45:17', '2022-01-05 05:45:17');
INSERT INTO `partnerorginfos` (`id`, `partner_ref_no`, `comp_name`, `comp_website`, `comp_hq`, `comp_desc`, `comp_size`, `industry`, `annual_revenue`, `lob`, `lob_other`, `city`, `ro_name`, `rh_name`, `state`, `country`, `pincode`, `loc_o_b`, `client_base`, `client_base_other`, `partnership_model`, `partner_id`, `created_at`, `updated_at`) VALUES
(83, 'RBP_72468', 'Datasoft Comnet Pvt Ltd', 'https://www.datasoftcomnet.com/', '48-12-14, Flat 103 & 104, Vanitha Residency, Janikirama Street, Srinagar, (Opp lane of Lalitha Jewellers – RTC Complex), Visakhapatnam, Andhra Pradesh, India.', 'Consulting, Network Design and ImplementationWe provide latest Technology Consulting, IT Facilities Management, LAN, WAN Networking, Virtual Private Network, Internet, and Intranet solutions for businesses. Datasoft Comnet Pvt. Ltd. has the knowledge and proven expertise to design, implement, and maintain your Information System infrastructure. Most of our engineers are Certified Microsoft/ Cisco System Engineers with extensive experience in networking and system integration. Our mission is to', '100 - 250', 'IT/ITES', '20', 'SI', NULL, 'Visakhapatnam', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Andhra Pradesh', 'India', '530 016', '"Angola,India - Andhra Pradesh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 87, '2022-01-06 09:33:17', '2022-01-06 09:33:17'),
(84, 'RBP_74019', 'Pi Datacenters', 'www.pidatacenters.com', 'Amaravati', 'Datacenter and Cloud Company', '100 - 250', 'IT/ITES', '60', 'Consultancy', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500081', '"India - Andhra Pradesh"', '"Education,Enterprise,Government-National,Mid-size Business"', NULL, '"Recurring Commission"', 88, '2022-01-10 23:58:40', '2022-01-10 23:58:40'),
(85, 'RBP_57320', 'Trust It Solutions', 'www.tustitsolutions.com', 'G2, Royal Residency, Image Gardens Lane, Madhapur, Hyderabad', 'Company is in to end to end IT Solutions', '<50', 'Technology', '2', 'Reseller', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500081', '"Uganda,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup,Others"', 'Technology', '"Recurring Commission,Transfer Price"', 90, '2022-01-11 08:38:40', '2022-01-11 08:38:40'),
(86, 'RBP_05314', 'Jee Group', 'www.tescom.in', 'B-1402 Samar Heights Antophill Church Wadala Mumbai', 'IT solutions & networking', '50 - 100', 'IT/ITES', '1', 'SI', NULL, 'Mumbai', 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400037', '"India - Maharashtra,India - Maharashtra,India - Maharashtra,India - Maharashtra,India - Maharashtra,India - Madhya Pradesh,India - Madhya Pradesh,India - Maharashtra,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 91, '2022-01-21 03:24:07', '2022-01-21 03:24:07'),
(87, 'RBP_51096', 'Jee Group', 'www.tescom.in', 'B-1402 Samar Heights Antophill Church Wadala Mumbai', 'IT solutions & Telecom', '50 - 100', 'IT/ITES', '1', 'SI', NULL, 'Mumbai', 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400037', '"India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 92, '2022-01-21 04:33:05', '2022-01-21 04:33:05'),
(88, 'RBP_81036', 'Mobigic Technologies Private Limited', 'www.mobigic.com', ': Shop No 8, Atlantis Apartment,  Behind Big India Mall, Kasarvadavli,  Thane West', 'Founded in 2016 under START-UP INDIA initiative#startupindia, to address the gap in the market for Mobile & Web Technologies. Within a very short period, we have designed, developed and deployed Mobile as well as Web Applications for various industry verticals including Retail, Ecommerce', '<50', 'IT/ITES', '0.93', 'Technology OEM', NULL, 'Mumbai', 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400615', '"India - Arunachal Pradesh,India - Maharashtra,India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 93, '2022-01-24 07:32:03', '2022-01-24 07:32:03'),
(89, 'RBP_63897', 'Master Services', 'www.masterservices.co.in', 'Shrikrupa E, 8th Ln, Rajarampuri, Kolhapur, Maharashtra 416008', 'Master Services is an IBM Business Partner and IBM Warranty Service Provider Company in Kolhapur. We are just not box sellers but solution providers working since 1993', '<50', 'IT/ITES', '5', 'SI', NULL, NULL, 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '416008', '"India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 94, '2022-01-26 08:37:53', '2022-01-26 08:37:53'),
(90, 'RBP_51497', 'Master Services', 'www.masterservices.co.in', 'Shrikrupa E, 8th Ln, Rajarampuri, Kolhapur, Maharashtra 416008', 'Master Services is an IBM Business Partner and IBM Warranty Service Provider Company in Kolhapur. We are just not box sellers but solution providers working since 1993.', '<50', 'IT/ITES', '5', 'SI', NULL, NULL, 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '416008', '"India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 95, '2022-01-28 02:55:12', '2022-01-28 02:55:12'),
(91, 'RBP_72583', 'ServeDesk Services', 'https://servedesk.in/', '10-1-38/B, MVR''S Vinayagar Trade Center,         VIP Road, CBM Compound, Asilmetta,', 'Serve Desk services is a Managed services partner and cloud service provider', '50 - 100', 'IT/ITES', '10', 'Consultancy', NULL, 'Visakhapatnam', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '530003', '"India - Andhra Pradesh,India - Karnataka,India - Tamil Nadu,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 96, '2022-01-29 02:28:35', '2022-01-29 02:28:35'),
(92, 'RBP_47160', 'Cybergrid Solutions India Pvt Ltd', 'www.cybergrid.in', '#401,1A Block, Vivek Paradise, Karnataka-560093 . 2nd Cross, Chowdeshwari Temple Road', 'Cybergrid Solutions Is a a Focused Security System Intergarator with presence across South India.', '<50', 'IT/ITES', '3', 'SI', NULL, 'Bengaluru', 'Biswa Ranjan Agasti', 'Sabin Gupta', 'Karnataka', 'India', '560093', '"India - Karnataka,India - Telangana,India - Kerala"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Transfer Price"', 97, '2022-02-10 10:58:50', '2022-02-10 10:58:50'),
(93, 'RBP_34291', 'GKS INFOTECH PVT LTD', 'www.gksinfotech.in', 'No.29/1173 D, 2nd Floor, Infinity one, SA road, Vyttila, Cochin', 'GKS Infotech follows digital transformation uniquely to enhance our business strategies in a unique development method. We are the sister concern of Comtech Systems - an IT Firm, that has grown and diversified rapidly by setting benchmarks as a pioneer for others to follow.', '<50', 'Technology', '354122612', 'SI', NULL, 'Kochi', 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '682019', '"India - Andhra Pradesh,India - Kerala,India - Kerala"', '"Education,Enterprise,Government-Local,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 98, '2022-02-15 06:08:25', '2022-02-15 06:08:25'),
(94, 'RBP_49270', 'GKS INFOTECH PVT LTD', 'www.gksinfotech.in', 'No.29/1173 D, 2nd Floor, Infinity one, SA road, Vyttila, Cochin', 'GKS Infotech follows digital transformation uniquely to enhance our business strategies in a unique development method. We are the sister concern of Comtech Systems - an IT Firm, that has grown and diversified rapidly by setting benchmarks as a pioneer for others to follow.', '<50', 'Technology', '354122612', 'SI', NULL, NULL, 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '682019', '"India - Kerala"', '"Education,Enterprise,Government-Local,Mid-size Business,Startup"', NULL, '"Transfer Price"', 99, '2022-02-16 01:04:00', '2022-02-16 01:04:00'),
(95, 'RBP_95461', 'IRZ GLOBAL INDIA PVT LTD', 'www.irzglobal.com', 'GROUND FLOOR, 13 / 227 / A1, VALIYAPARAMBIL, KUTTIKKATTUKARA, ALUPURAM, UDYOGAMANDAL', 'We are Cloud solution providers and managed service providers of Azure, AWS, and Google platforms.', '<50', 'IT/ITES', '2', 'Reseller', NULL, 'Kochi', 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '683501', '"United Arab Emirates,India - Kerala,India - Karnataka,India - Madhya Pradesh,India - Maharashtra,India - Tamil Nadu,India - Delhi"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 100, '2022-02-19 09:53:39', '2022-02-19 09:53:39'),
(96, 'RBP_83547', 'Cyberace Infovision Private Limited', 'www.cyberace.in', '2A Wing Rear Side, Mhatre Plaza Dahanukar Wadi, Kandivali West, Mumbai-400 067', 'We at Cyberace Infovision Private Limited undertake turnkey projects in IT, Extra Low-Voltage System and Audio-Video InfrastructureWe have always been a customer-centric company, intuitively understanding our customers’ business challenges and objectives. This has led us to build excellent partnerships with cutting-edge technology providers and become a primary adopter of emerging technologies.', '50 - 100', 'IT/ITES', '28', 'SI', NULL, 'Mumbai', 'Sabin Gupta', 'Debmalya Dey Roy', 'Maharashtra', 'India', '400067', '"India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 102, '2022-02-23 00:38:10', '2022-02-23 00:38:10'),
(97, 'RBP_42183', 'Unqiue Solutions', 'www.uniquesolutionsit.com', '101A, 1st Floor, Pentagon 5, Magarpatta City, Hadapsar, Pune', '“Unique Solutions is a seasoned and well-established System Integrator that addresses the Mission Critical Infrastructure requirements across industry verticals. Having a deep insight in the ERP segment, Consolidation and migration needs, our team specializes in Technical Subject Expertise. With accolades received from Industry leaders and recognitions from various OEMs for our contribution in addressing critical infra requirements – Unique Solutions has defined for itself a marked space', '50 - 100', 'Others', '25000000', 'Reseller', NULL, 'Pune', 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '411013', '"India - Maharashtra"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,Transfer Price"', 103, '2022-03-11 06:03:12', '2022-03-11 06:03:12'),
(98, 'RBP_94587', 'Unique Solutions', 'www.uniquesolutionsit.com', '101A, 1st floor, Pentagon P5, Magarpatta City, Hadapsar, Pune – 411013', 'Unique Solutions was founded in 1997. We have over two decades of experience in providing high quality, yet cost-effective, IT infrastructure solutions spanning datacenter, cloud, server, storage, networking, and security. We are amongst the most preferred providers of mission-critical infrastructure solutions in Western India. Unique Solutions is an HPE Platinum Partner for Server and Storage.', '50 - 100', 'IT/ITES', '100', 'SI', NULL, 'Pune', 'Amit Desai', 'Vijay Sharma', 'Maharashtra', 'India', '411013', '"India - Maharashtra"', '"Enterprise,Government-Local,Government-National,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 104, '2022-03-11 07:49:31', '2022-03-11 07:49:31'),
(99, 'RBP_47985', 'Techbrein Solutions Pvt Ltd', 'techbrein.com', 'Sithara Building, East Nadakkavu, Calicut, Kerala – INDIA', 'TechBrein is an Information Technology company that has been operating in India since 2006. Over the years, we have had the privilege to be the IT partner of various businesses from diverse industries and help them simplify their business operations as well as achieve their business goals by furnishing them with cost-effective digital services.', '50 - 100', 'IT/ITES', '1.5', 'Consultancy', NULL, 'Kozhikode', 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '673011', '"India - Kerala,India - Rajasthan"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 105, '2022-03-29 03:37:02', '2022-03-29 03:37:02'),
(100, 'RBP_69028', 'PYROTECH ELECTRONICS PVT. LTD. UNIT 2', 'WWW.PYROTECHINDIA.COM', 'E-329, ROAD NO.12 M.I.A MADRI', 'MANUFACTURERS OF ENCLOSURE, RACKS WITH A VERY REASONABLE PRICE', '250 - 500', 'Manufacturing', '145', 'SI', NULL, 'Udaipur', 'Vignesh S', 'Debmalya Dey Roy', 'Rajasthan', 'India', '313003', '"India - Rajasthan,India - Rajasthan,India - Rajasthan,India - Rajasthan"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', 'ENTERPRISE', '"Recurring Commission,Transfer Price"', 106, '2022-04-02 01:56:32', '2022-04-02 01:56:32'),
(101, 'RBP_20349', 'CLOUDCORNERSOLUTIONSPRIVATELIMITED', 'https://www.cloudcorner.in', '32/7H, 3rd Floor, Chakrampilly Estate, NHBypass, Chakkaraparambu, Kochi', 'CloudCorner Solutions Pvt. Ltd. is a leading ERP solution provider, helping organizations to transform their business to compete in the digital economy using the latest innovation and cutting edge technologies. Our vision is to bring the advantages of technology innovations to simplify the business processes into the current digitally driven market.CloudCorner Solutions is the partner of choice in the region and we provide cost effective solutions to automate business processes across various', '50 - 100', 'IT/ITES', '1.02', 'Consultancy', NULL, 'Kochi', 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '682032', '"India - Kerala,India - Kerala"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup,Others"', 'Manufacturing, CPG & FMCG, Trading, Retail, Healthcare, Engineering, Construction, and Operations, Higher Education', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 108, '2022-04-05 05:40:25', '2022-04-05 05:40:25'),
(102, 'RBP_31645', 'APLUSA Technologies Pvt. Ltd', 'aplusatech.com', '11th floor, Dallas Center, Knowledge City, 83/1, Hitech City Main Rd, Silpa Gram Craft Village, Rai Durg, Hyderabad', 'APLUSA technologies pvt. ltd offer SAP solutions to help organizations streamline implementation, improve processes and deliver new business value, which helps to reduce the cost of implementing and maintaining a fully integrated and scalable business suite of market-leading applications and technology. We deliver simple, cost-effective solutions to complex business problems.', '<50', 'IT/ITES', '25000000', 'SI', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500032', '"India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Telangana,India - Sikkim,India - Telangana,India - Telangana,India - Telangana"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,Transfer Price"', 109, '2022-04-29 03:54:18', '2022-04-29 03:54:18'),
(103, 'RBP_98260', 'Athena IT And Telecom Solutions Pvt Ltd', 'www.athenaitsol.tech', '#883, ground floor, 19th main road, 39th cross, 4th T block, Jayanagar ward no-58 near BDA, Nandanavana park,', 'We offer a full range of consulting and business services that include computing and network strategy, storage and business continuance, Project management,', '50 - 100', 'Technology', '50', 'SI', NULL, 'Bengaluru', 'Madhu Keerthi', '', 'Karnataka', 'India', '560041', '"India - Karnataka,India - Karnataka"', '"Enterprise,Mid-size Business,Startup,Others"', 'E-Commerce', '"Recurring Commission,Transfer Price"', 110, '2022-06-08 01:26:10', '2022-06-08 01:26:10'),
(104, 'RBP_16390', 'ABC_Trial Pvt Ltd', 'www.abc.com', '123, Lajpat nagar,Delhi', 'Manufacturing', '100 - 250', 'Manufacturing', '100', 'Reseller', NULL, 'New Delhi', 'Vijay Sharma', 'Debmalya Dey Roy', 'Delhi/NCR', 'India', '110023', '"India - Karnataka,India - Maharashtra"', '"Education,Enterprise,Mid-size Business"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 111, '2022-06-13 03:13:52', '2022-06-13 03:13:52'),
(105, 'RBP_37215', 'MSR Projects', 'Msrinfraprojects.com', 'Visakhapatnam', 'MSR projects is into infra and Construction Company.', '<50', 'Others', '2', 'Others', 'MSR Projects is into providing Infra and Construction', 'Visakhapatnam', 'Kumar Rama Pinnamaraju', 'Vignesh Seenivsan', 'Andhra Pradesh', 'India', '530045', '"India - Andhra Pradesh,India - Telangana,India - Puducherry,India - Tamil Nadu,India - Karnataka,India - Kerala"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup,Others"', 'Pharma,Sea Food,manufacturing', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 112, '2022-06-13 06:43:43', '2022-06-13 06:43:43'),
(106, 'RBP_94760', 'SOWRYA SOFTWARE SOLUTIONS', 'sowryasoftwaresolutions.com', '#6-263/1A, Wellington Road, Vasavi Nagar, Karkhana, Secunderabad', 'Sowrya Software is a Market Research, IT Solutions & Services firm that provides comprehensive software solutions to clients. Our remarkable growth over the past years can be attributed to the ability to find quality, cost-effective IT solutions for our clients to assist them in helping their companies to become more efficient and increase profitability.', '<50', 'IT/ITES', '10000000', 'SI', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500015', '"India - Andhra Pradesh,India - Telangana"', '"Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 113, '2022-08-04 07:43:24', '2022-08-04 07:43:24'),
(107, 'RBP_80615', 'ABC Pvt Ltd', 'ABC.com', 'Delhi', 'ABC ABC is a delhi based SI working in the  cloud and colocation', '50 - 100', 'IT/ITES', '50', 'SI', NULL, 'New Delhi', 'Vijay Sharma', 'Debmalya Dey Roy', 'Delhi/NCR', 'India', '110001', '"India - Delhi,India - Delhi,India - Delhi,India - Delhi,India - Delhi,India - Chandigarh"', '"Education,Enterprise,Government-Local,Mid-size Business"', NULL, '"Recurring Commission"', 114, '2022-08-08 00:27:38', '2022-08-08 00:27:38'),
(108, 'RBP_51309', 'Mieux Technologies', 'https://www.mieuxtechnologies.com/', 'B-55B Kalkaji, New Delhi', 'We Serve As Your Complete Support Team Or As An Extension Of Your Current IT Team.Mieux Technologies is a fastest growing Cloud Server Managed Services Provider in Northern India including consulting, IT Managed Services and Cloud Solutions, aimed at providing the best in class Tier III & Tier IV Data Centre Cloud Services in India and US. Ever since our inception, we have been exploring the new horizons of opportunities with our services like Managed Services inhouse and in Cloud in Windows a', '<50', 'Technology', '7', 'SI', NULL, 'New Delhi', 'Vijay Sharma', 'Debmalya Dey Roy', 'Delhi/NCR', 'India', '110019', '"India - Bihar,India - Bihar,India - Chhattisgarh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 115, '2022-08-10 03:21:48', '2022-08-10 03:21:48'),
(109, 'RBP_58327', 'Jil it demo', 'ABC.com', 'Noida', 'With a single minded focus Shri. Jaiprakash Gaur, Founder Chairman of Jaypee Group, after acquiring a Diploma in Civil Engineering in 1950 from the University of Roorkee now (IIT Roorkee), had a stint with Govt. of U.P. and with steadfast determination to contribute in nation building, branched off on his own, to start as a civil contractor in 1958,and laid the foundation of Jaypee Group. The Jaypee story is not a story of privilege or entitlement. It is a story of grit and gumption; of struggle', '50 - 100', 'IT/ITES', '50', 'SI', NULL, NULL, 'Vijay Sharma', 'Debmalya Dey Roy', 'Delhi/NCR', 'India', '201304', '"India - Chhattisgarh,India - Assam"', '"Education,Enterprise,Mid-size Business,Others"', 'education, enterprise', '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 119, '2022-09-16 01:47:26', '2022-09-16 01:47:26'),
(110, 'RBP_46957', 'JIL Information technology Limited', 'www.jilit.co.in', 'Ghaziabad, sahibabad', 'JIL Information Technology Limited is system Integrator partner with focus on networking, office infrastructure, DC infrastructure, compute & storage. Looking actively in the general market place for SI opportunities and have attained reasonable success. Few of the large networking implementations in the past few years are- IIT Ropar, IIT Roorkee, IISER Berhampur, NSUIT Delhi, NIT Calicut and EIL,GAIL,HUDCO,DMRC, MTRDC etc. We feel with PI Datacentre Services we will be able to offer additional', '50 - 100', 'IT/ITES', '40', 'SI', NULL, 'Noida', 'Vijay Sharma', 'Debmalya Dey Roy', 'Uttar Pradesh', 'India', '201010', '"India - Assam,India - Chhattisgarh,India - Arunachal Pradesh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 121, '2022-09-16 04:13:33', '2022-09-16 04:13:33'),
(111, 'RBP_40628', 'SOWRYA SOFTWARE SOLUTIONS', 'sowryasoftwaresolutions.com', '#6-263/1A, Wellington Road, Vasavi Nagar, Karkhana, Secunderabad', 'Sowrya Software Solutions is a Market Research, IT Solutions & Services firm that provides comprehensive software solutions to clients. Our remarkable growth over the past years can be attributed to the ability to find quality, cost-effective IT solutions for our clients to assist them in helping their companies to become more efficient and increase profitability. Considering the continually changing demands of the market, we placed heavy emphasis on our expertise in matching the skills', '<50', 'IT/ITES', '1', 'Reseller', NULL, 'Hyderabad', 'Vignesh S', 'Debmalya Dey Roy', 'Telangana', 'India', '500015', '"India - Telangana,India - Andhra Pradesh"', '"Enterprise,Startup"', NULL, '"Recurring Commission"', 122, '2022-09-29 01:44:21', '2022-09-29 01:44:21'),
(112, 'RBP_46157', 'Nexgen Enterprises', 'www.nexgenenterprises.in', 'LGF-38, One Mart, Sector-6', 'Greetings From,NEXGEN ENTERPRISESI Hope You are Doing Well!Nexgen Enterprises is founded in 2015.We are into core IT Infra & Telecom industry since 2015 to Consulting and providing best Ever End To End solutios to Companies who looking for IT & Telco services for his Business need in across INDIA. We do provides solutions to Corporate Clients who required best solutions for his business need with Superior service quality with our core IT Engineers Team along with the best price ever.', '<50', 'IT/ITES', '2000000', 'Consultancy', NULL, 'Noida', 'Vijay Sharma', 'Debmalya Dey Roy', 'Uttar Pradesh', 'India', '201012', '"India - Andhra Pradesh"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 123, '2022-09-29 05:57:53', '2022-09-29 05:57:53'),
(113, 'RBP_17480', 'TOPSERV INFOTECH PVT LTD', 'www.topserv.co.in', '#41/1274, Edapally -Thripunithura Road, near GOVT L P School, Padivattom, Edappally, Kochi', 'IT Infrastructure Development Company and an IT consultant', '50 - 100', 'Technology', '2', 'Consultancy', NULL, 'Kochi', 'Varun KG', '', 'Kerala', 'India', '682024', '"India - Kerala,India - Kerala,India - Kerala"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup,Others"', 'IT/ITES', '"Recurring Commission"', 124, '2022-10-12 07:01:18', '2022-10-12 07:01:18'),
(114, 'RBP_53142', 'Accerix Technology Innovations Private Limited', 'www.accerix.com', 'Dotspace Business Centre, Cloud 9, 9th Cross Road Intersection, Avenue Road, Panampilly Nagar', 'Accerix Technology Innovations is IT Consultancy company in Kochi, Kerala. With 15 years of experience in the field of IT consulting, Accerix seeks to provide solutions that cater to your specific business needs. Improved quality and efficiency are what we focus on to provide tailored consulting services to meet the growing demands of your organization.', '<50', 'IT/ITES', '1', 'Consultancy', NULL, 'Kochi', 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '682036', '"India - Karnataka,India - Kerala,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business"', NULL, '"Recurring Commission"', 125, '2022-10-19 02:52:16', '2022-10-19 02:52:16'),
(115, 'RBP_25809', 'Accerix Technology Innovations Private Limited', 'https://accerix.com', 'Dotspace Business Centre, Cloud 9, 9th Cross Road Intersection, Avenue Road, Panampilly Nagar', 'Accerix Technology Innovations is IT Consultancy company in Kochi, Kerala. With 15 years of experience in the field of IT consulting, Accerix seeks to provide solutions that cater to your specific business needs. Improved quality and efficiency are what we focus on to provide tailored consulting services to meet the growing demands of your organization.', '<50', 'IT/ITES', '1', 'Consultancy', NULL, 'Kochi', 'Vibin K', 'Sujay Sen', 'Kerala', 'India', '682 036', '"United Arab Emirates,United Arab Emirates,India - Karnataka,India - Kerala,India - Tamil Nadu"', '"Education,Enterprise,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 126, '2022-10-19 06:47:11', '2022-10-19 06:47:11'),
(116, 'RBP_18563', 'Assure Assistance Teleservices Private Limited', 'www.assureassistance.in', '43 TOP FLOOR KRISHNA MARKET KALKA JI', 'We are a system integrators and cloud consultants for public and private cloud players.', '<50', 'Telecom', '7800000', 'Consultancy', NULL, 'New Delhi', 'Vijay Sharma', 'Debmalya Dey Roy', 'Delhi/NCR', 'India', '110019', '"India - Delhi,India - Delhi"', '"Education,Enterprise,Government-Local,Mid-size Business,Startup"', NULL, '"Recurring Commission"', 127, '2022-11-09 04:39:22', '2022-11-09 04:39:22'),
(117, 'RBP_30914', 'Monidilipenterprises', 'www.monidilip.co.in', '1878/A 7TH A MAIN E BLOCK RAJAJINAGAR BANGALORE', 'Monidilip Enterprises in Bangalore is a top player in the category Second Hand Computer Sub-Dealers in the Bangalore. It is known to provide top service in the following categories: Broadband services, IT solutions,CCTV solutions, Lease Lines, Laptops On Hire, Second Hand Laptop Dealers, firewalls Hire, Second Hand Computer Dealers, Computers On Hire, Laptops On Hire Monthly Basis, Computers On Hire Monthly Basis', '<50', 'Telecom', '10', 'Consultancy', NULL, 'Bengaluru', 'Madhu Keerthi K', 'Sujay Sen', 'Karnataka', 'India', '560010', '"India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 128, '2022-11-18 10:03:33', '2022-11-18 10:03:33'),
(118, 'RBP_09471', 'Monidilipenterprises', 'www.monidilip.co.in', '1878/A 7TH A MAIN E BLOCK RAJAJINAGAR BANGALORE', 'Monidilip Enterprises in Bangalore is a top player in the category Second Hand Computer Sub-Dealers in the Bangalore. It is known to provide top service in the following categories: Broadband services, IT solutions,CCTV solutions, Lease Lines, Laptops On Hire, Second Hand Laptop Dealers, firewalls Hire, Second Hand Computer Dealers, Computers On Hire, Laptops On Hire Monthly Basis, Computers On Hire Monthly Basis', '<50', 'Telecom', '10', 'Consultancy', NULL, 'Bengaluru', 'Madhu Keerthi K', 'Sujay Sen', 'Karnataka', 'India', '560010', '"India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka,India - Karnataka"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission"', 129, '2022-11-18 23:30:57', '2022-11-18 23:30:57'),
(119, 'RBP_12536', 'Bitkemy', 'http://bitkemy.com/', 'Salarpuria Touchstone 133, First Floor, 1-3, Outer Ring Rd, Kadubeesanahalli, Bengaluru, Karnataka, India – 560103', 'We help enterprises to align technology with business objectives. With our next-generation digital engineering services, businesses are able to quickly respond to technological and market changes. We add value to your business by providing technology services and solutions that leverage our industry-wide experience.', '50 - 100', 'E-Commerce', '200000', 'SI', NULL, 'Visakhapatnam', 'Vignesh S', 'Debmalya Dey Roy', 'Andhra Pradesh', 'India', '560103', '"India - Andhra Pradesh"', '"Education,Enterprise"', NULL, '"Recurring Commission"', 130, '2023-05-23 01:05:16', '2023-05-23 01:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `partnerpersonalinfos`
--

CREATE TABLE IF NOT EXISTS `partnerpersonalinfos` (
  `id` bigint(20) unsigned NOT NULL,
  `partner_ref_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnerpersonalinfos`
--

INSERT INTO `partnerpersonalinfos` (`id`, `partner_ref_no`, `title`, `first_name`, `last_name`, `designation`, `business_email`, `mobile_code`, `mobile_number`, `partner_id`, `created_at`, `updated_at`) VALUES
(1, 'RBP_93574', 'Mr.', 'Admin', 'Admin', 'SU', 'bidmanagement@pidatacenters.com', '+91', '1111111111', 1, '2021-07-04 18:41:51', '2021-07-04 18:41:51'),
(8, 'RBP_09625', 'Mr.', 'Albert Anthuvan', 'Blisho', 'Entrepreneur', 'admin@ecservice.in', '+91', '9345534999', 8, '2021-09-04 02:29:23', '2021-09-04 02:29:23'),
(9, 'RBP_06491', 'Ms.', 'Bhoomika', 'Gaur', 'Alliances Manager', 'alliances@cloudfence.ai', '+91', '9289115008', 9, '2021-09-08 05:16:52', '2021-09-08 05:16:52'),
(14, 'RBP_27198', 'Mr.', 'Albert', 'Anthuvan Blisho', 'Proprietor', 'admin@ecservices.in', '+91', '9345534999', 14, '2021-09-18 08:45:41', '2021-09-18 08:45:41'),
(17, 'RBP_01853', 'Mr.', 'Godwin', 'B', 'CEO', 'godwin@vgoshinfo.com', '+91', '8667503036', 17, '2021-09-27 05:35:13', '2021-09-27 05:35:13'),
(18, 'RBP_28045', 'Mr.', 'Praneeth', 'L', 'Director', 'praneeth@laxmitech.in', '+91', '8385692092', 18, '2021-09-29 01:32:46', '2021-09-29 01:32:46'),
(19, 'RBP_80964', 'Ms.', 'Bhaswati', 'De', 'EA', 'bhaswati.de@pidatacenters.com', '+91', '7003607319', 19, '2021-09-29 05:05:34', '2021-09-29 05:05:34'),
(20, 'RBP_78246', 'Ms.', 'Umamagehwari', 'Ramani', 'Director', 'uma@orisenc.com', '+91', '9940106040', 20, '2021-09-29 10:12:04', '2021-09-29 10:12:04'),
(21, 'RBP_98061', 'Ms.', 'Praveena', 'Govindaraj', 'Prop', 'info@vedasystems.in', '+91', '9790977739', 21, '2021-09-30 01:40:36', '2021-09-30 01:40:36'),
(22, 'RBP_61724', 'Mr.', 'BHaskar', 'P', 'Sales Manager', 'bhaskar@labyrinthsolutions.in', '+91', '9963779243', 22, '2021-09-30 06:47:38', '2021-09-30 06:47:38'),
(23, 'RBP_78540', 'Mr.', 'Girish', 'Madhavan', 'Director', 'shrinvasan.sk@quadsel.in', '+91', '4422502277', 23, '2021-09-30 06:49:09', '2021-09-30 06:49:09'),
(24, 'RBP_06481', 'Mr.', 'Razzaq', 'Mohammed Abdul', 'Managing Director', 'info@gemtrack.in', '+91', '9246333505', 24, '2021-09-30 08:56:10', '2021-09-30 08:56:10'),
(25, 'RBP_38405', 'Mr.', 'Razzaq', 'Mohammed Abdul', 'Managing Director', 'sales@gemtrack.in', '+91', '9246333505', 25, '2021-09-30 09:18:09', '2021-09-30 09:18:09'),
(26, 'RBP_23658', 'Mr.', 'Razzaq', 'Mohammed Abdul', 'Managing Director', 'abdul@gemtrack.in', '+91', '9246333505', 26, '2021-09-30 09:20:15', '2021-09-30 09:20:15'),
(27, 'RBP_56823', 'Mr.', 'Amit', 'Mishra', 'Director', 'amit@prophoenixsoft.com', '+91', '8106248884', 27, '2021-10-01 10:32:07', '2021-10-01 10:32:07'),
(28, 'RBP_97581', 'Mr.', 'Muralikrishnan', 'P', 'Designated Partner', 'admin@sceptrebusiness.com', '+91', '7025253777', 28, '2021-10-04 03:02:01', '2021-12-11 06:43:40'),
(29, 'RBP_87469', 'Mr.', 'Jitendra', 'Kulkarni', 'Director', 'jmk@probitytech.com', '+91', '9890006944', 29, '2021-10-05 04:55:08', '2021-10-05 04:55:08'),
(30, 'RBP_89542', 'Mr.', 'Praneeth', 'L', 'Director', 'praneeth@laxmitech.in', '+91', '8985692092', 30, '2021-10-07 01:24:23', '2021-10-07 01:24:23'),
(31, 'RBP_02851', 'Mr.', 'Ajay', 'chand', 'Proprietor', 'ajay@labyrinthsolutions.in', '+91', '9618612222', 31, '2021-10-08 05:40:18', '2021-10-08 05:40:18'),
(32, 'RBP_39724', 'Mr.', 'Srinivas', 'Sriram', 'Proprietorship', 'srinivas.sriram.om@tatatel.co.in', '+91', '8106193218', 32, '2021-10-12 06:34:18', '2021-10-12 06:34:18'),
(33, 'RBP_26591', 'Ms.', 'Vidya', 'H', 'Head', 'vidya@vservetech.in', '+91', '6364777712', 33, '2021-10-12 10:49:31', '2021-10-12 10:49:31'),
(34, 'RBP_21530', 'Mr.', 'Jeya Senthil', 'Muthuvijayan', 'Managing Director', 'mjs@mslinfotech.com', '+91', '7540050072', 34, '2021-10-13 01:37:32', '2021-10-13 01:37:32'),
(35, 'RBP_01892', 'Mr.', 'A.Sebastian', 'Cruez', 'Proprietor', 'sales@origonsystems.com', '+91', '9841071153', 35, '2021-10-13 01:39:56', '2021-10-13 01:39:56'),
(36, 'RBP_21908', 'Mr.', 'Aa', 'De', 'Sales', 'amit.desai92@yaho.in', '+91', '8454093862', 36, '2021-10-13 06:36:46', '2021-10-13 06:36:46'),
(37, 'RBP_06213', 'Mr.', 'MILIND', 'PATIL', 'Product Manager', 'mpatil@yotta.com', '+91', '9223577795', 37, '2021-10-14 00:03:11', '2021-10-14 00:03:11'),
(38, 'RBP_79346', 'Ms.', 'Vidya', 'H', 'Head - Operations', 'vidya@vservetech.co.in', '+91', '9448708712', 38, '2021-10-14 02:56:00', '2021-10-14 02:56:00'),
(39, 'RBP_26384', 'Mr.', 'Pasupathy', 'B', 'Director', 'pasu@dcdrinfra.com', '+91', '9841979150', 39, '2021-10-16 00:07:36', '2021-10-16 00:07:36'),
(40, 'RBP_90587', 'Mr.', 'MILIND', 'PATIL', 'PRODUCT MANAGER', 'mpatil@yotta.com', '+91', '9223577795', 40, '2021-10-18 00:52:47', '2021-10-18 00:52:47'),
(41, 'RBP_39102', 'Mr.', 'Murali Yugandhar', 'Modu', 'Operations Head', 'yugandhar@tracenetwork.in', '+91', '9640406999', 41, '2021-10-18 07:23:41', '2021-10-18 07:23:41'),
(42, 'RBP_03571', 'Mr.', 'Suresh Babu', 'Nisankara', 'Director', 'suresh@tracenetwork.in', '+91', '9989125347', 42, '2021-10-19 23:14:05', '2021-10-19 23:14:05'),
(43, 'RBP_93184', 'Mr.', 'Rajendran', '.', 'Sr.Manager-Sales', 'rajendran@felixinfotech.com', '+91', '9941666675', 43, '2021-10-21 19:38:35', '2021-10-21 19:38:35'),
(44, 'RBP_53261', 'Mr.', 'HARISH', 'TA', 'Managing Partner', 'harish@smartsoft.co.in', '+91', '9895604277', 44, '2021-10-25 07:50:17', '2021-10-25 07:50:17'),
(45, 'RBP_59024', 'Mr.', 'MURALI KRISHNA', 'NIDAMANURI', 'Director', 'murali@vipuns.com', '+91', '8095680999', 45, '2021-10-25 08:05:01', '2021-10-25 08:05:01'),
(46, 'RBP_60172', 'Mr.', 'Harish', 'TA', 'Managing Partner', 'harish@smartsoft.co.in', '+91', '9895604277', 46, '2021-10-25 23:19:23', '2021-10-25 23:19:23'),
(47, 'RBP_56418', 'Mr.', 'Gireeshan', 'P', 'CEO', 'ceo@discclt.com', '+91', '9349251916', 47, '2021-10-27 04:06:31', '2021-10-27 04:06:31'),
(48, 'RBP_62547', 'Mr.', 'Shankar', 'D', 'CEO', 'shankar@primetechnologiesindia.com', '+91', '9842227123', 48, '2021-10-30 02:57:05', '2021-10-30 02:57:05'),
(49, 'RBP_81079', 'Mr.', 'Shankar', 'D', 'CEO', 'shankar@primetechnologiesindia.com', '+91', '9842227123', 49, '2021-11-09 01:15:32', '2021-11-09 01:15:32'),
(50, 'RBP_31457', 'Mr.', 'MURALI', 'NIDAMANURI', 'Director', 'murali@vipuns.com', '+91', '8095680999', 50, '2021-11-10 03:20:23', '2021-11-10 03:20:23'),
(51, 'RBP_04569', 'Mr.', 'Eswera Rao', 'Maddi', 'CEO', 'info@balajiinfotechindia.com', '+91', '9849431943', 51, '2021-11-12 02:18:05', '2021-11-12 02:18:05'),
(52, 'RBP_08547', 'Mr.', 'ALbert Anthuvan', 'Blisho', 'MD', 'admin@ecservie.in', '+91', '9345534999', 52, '2021-11-13 00:38:23', '2021-11-13 00:38:23'),
(53, 'RBP_18679', 'Mr.', 'Anant', 'Dhawan', 'Sales Head', 'anant.dhawan@mm9india.com', '+91', '9871390600', 53, '2021-11-15 06:41:32', '2021-11-15 06:41:32'),
(54, 'RBP_51937', 'Mr.', 'J', 'Srinivas', 'Director', 'bdm@tatvaindia.in', '+91', '9299650479', 54, '2021-11-22 02:26:58', '2021-11-22 02:26:58'),
(55, 'RBP_21705', 'Mr.', 'ALbert Anthuvan', 'Blisho', 'MD', 'admin@ecservice.in', '+91', '9345534999', 55, '2021-11-23 02:17:33', '2021-11-23 02:17:33'),
(56, 'RBP_58301', 'Mr.', 'Vijay', 'Sarathy', 'Director', 'vijayasarathy@cloudyari.com', '+91', '8884781429', 56, '2021-11-24 01:55:53', '2021-11-24 01:55:53'),
(57, 'RBP_31046', 'Mr.', 'Nitin', 'A', 'Sr Manager', 'nitin@idcindia.biz', '+91', '7666695168', 57, '2021-11-24 06:24:51', '2021-11-24 06:24:51'),
(58, 'RBP_72865', 'Mr.', 'Deva', 'J', 'Managing Director', 'deva@devsystems.in', '+91', '9841042197', 58, '2021-11-24 23:42:29', '2021-11-24 23:42:29'),
(59, 'RBP_79032', 'Mr.', 'Rameshkumar', 'C', 'Managing Director', 'cramesh@networks-in.com', '+91', '9500038509', 59, '2021-11-29 23:03:17', '2021-11-29 23:03:17'),
(60, 'RBP_83460', 'Mr.', 'Balaji', 'J', 'GM', 'Balaji.j@accelits.com', '+91', '9003265842', 60, '2021-11-29 23:29:16', '2021-11-29 23:29:16'),
(61, 'RBP_69480', 'Mr.', 'Balaji', 'Janarthanan', 'General Manager', 'oemsupport@accelits.com', '+91', '9003265842', 61, '2021-11-30 00:03:24', '2021-11-30 00:03:24'),
(62, 'RBP_53684', 'Mr.', 'Balaji', 'Janarthanan', 'General Manager', 'oemsupport@accelits.com', '+91', '9003265842', 62, '2021-11-30 06:22:27', '2021-11-30 06:22:27'),
(64, 'RBP_05749', 'Ms.', 'Uma Maheswari', 'R', 'Director', 'uma@orisenc.com', '+91', '9840252735', 64, '2021-11-30 07:41:10', '2021-11-30 07:41:10'),
(65, 'RBP_48976', 'Mr.', 'Nitin', 'A', 'Sr Manager', 'nitin@idcindia.biz', '+91', '7666695168', 65, '2021-12-01 05:40:47', '2021-12-01 05:40:47'),
(66, 'RBP_47063', 'Mr.', 'Nitin', 'A', 'Sr Manager', 'nitin@idcindia.biz', '+91', '7666695168', 66, '2021-12-01 05:56:59', '2021-12-01 05:56:59'),
(67, 'RBP_95048', 'Ms.', 'Nidhi', 'Mahajan', 'Head Operations', 'nidhimahajan@fintechsoftwareservice.com', '+91', '9643795022', 67, '2021-12-01 22:21:46', '2021-12-01 22:21:46'),
(68, 'RBP_17856', 'Mr.', 'MURALI', 'Mohan REDDY', 'Director', 'mmr@srtechnogroup.com', '+91', '7330636666', 68, '2021-12-02 00:37:04', '2021-12-02 00:37:04'),
(69, 'RBP_97435', 'Mr.', 'Allen Dujon', 'Immaraju', 'CEO Cum Founder', 'support@ziontechnologiessolutions.com', '+91', '8106306584', 69, '2021-12-03 06:14:25', '2021-12-03 06:14:25'),
(70, 'RBP_49153', 'Mr.', 'Allen Dujon', 'Immaraju', 'CEO', 'support@ziontechnologiessolutions.in', '+91', '8106306584', 70, '2021-12-03 06:24:26', '2021-12-03 06:24:26'),
(71, 'RBP_09867', 'Mr.', 'Banavathu Prasad', 'Naik', 'Founder & CEO', 'prasadnaik@digitalverto.com', '+91', '9041139833', 71, '2021-12-04 04:06:39', '2021-12-04 04:06:39'),
(72, 'RBP_04538', 'Mr.', 'GVS', 'Sandeep', 'MD', 'sandeep@chithragupta.com', '+91', '8074555580', 72, '2021-12-04 06:58:04', '2021-12-04 06:58:04'),
(73, 'RBP_30248', 'Mr.', 'Danish', 'K M', 'Business head', 'danish@innofeast.in', '+91', '9633719333', 73, '2021-12-07 06:02:00', '2021-12-07 06:02:00'),
(74, 'RBP_93601', 'Mr.', 'Ravish Kumar', 'P', 'Channel Partner', 'ravish@professionalpal.in', '+91', '9886641094', 74, '2021-12-07 06:45:28', '2021-12-07 06:45:28'),
(75, 'RBP_51043', 'Ms.', 'Akilandeswari', 'Sriram', 'Managing Director', 'akila@devdatta.in', '+91', '7010144564', 75, '2021-12-07 09:41:06', '2021-12-07 09:41:06'),
(76, 'RBP_37621', 'Mr.', 'PREM', 'SUNANDAMARTHA', 'Managing Director', 'sunanda@uidigitalworld.com', '+91', '7032919856', 76, '2021-12-11 03:10:06', '2021-12-11 03:10:06'),
(77, 'RBP_20934', 'Mr.', 'Reddeppa', 'B', 'MD', 'reddy.b@ampler.in', '+91', '9700031004', 77, '2021-12-14 23:30:20', '2021-12-14 23:30:20'),
(78, 'RBP_42531', 'Mr.', 'Ramesh', 'Rayapureddy', 'Director', 'ramesh@cloudmindssolutions.com', '+91', '9908728007', 78, '2021-12-15 00:02:25', '2021-12-15 00:02:25'),
(79, 'RBP_01837', 'Mr.', 'Vinu', 'Gopinath', 'Regional Manager', 'vinu.gopinath@locuz.com', '+91', '9949047721', 79, '2021-12-15 00:31:47', '2021-12-15 00:31:47'),
(80, 'RBP_19426', 'Mr.', 'Amit', 'Vora', 'Head Business Development', 'amit.vora@dynacons.com', '+91', '9326092073', 80, '2021-12-17 06:04:31', '2021-12-17 06:04:31'),
(81, 'RBP_68357', 'Mr.', 'Vinu', 'Gopinath', 'Regional Manager', 'vinu.gopinath@locuz.com', '+91', '9949047721', 81, '2021-12-21 22:50:52', '2021-12-21 22:50:52'),
(82, 'RBP_05174', 'Mr.', 'JVSN', 'Raju', 'Director', 'jvsrajesh@eastorigin.com', '+91', '9866309865', 82, '2021-12-23 07:13:45', '2021-12-23 07:13:45'),
(83, 'RBP_98207', 'Mr.', 'Sajid', 'Hasnain', 'Director', 'Sajidh@bridgecubex.com', '+91', '9741230646', 83, '2021-12-28 01:50:11', '2021-12-28 01:50:11'),
(84, 'RBP_08536', 'Mr.', 'Amar', 'Thakare', 'CEO', 'amar.thakare@lumiversesolutions.com', '+91', '9960508010', 84, '2021-12-29 03:46:17', '2021-12-29 03:46:17'),
(85, 'RBP_62084', 'Mr.', 'Durga Prasad', 'MS', 'MD', 'dp@datasoftcomnet.com', '+91', '9849111010', 85, '2021-12-30 06:46:35', '2021-12-30 06:46:35'),
(86, 'RBP_73489', 'Mr.', 'Rama Krishna', 'Tummala', 'Managing Director', 'rtummala@doctususa.com', '+91', '9849034478', 86, '2022-01-05 05:45:17', '2022-01-05 05:45:17'),
(87, 'RBP_72468', 'Mr.', 'Durga prasad', 'MS', 'MD', 'dp@datasoftcomnet.com', '+91', '9000012366', 87, '2022-01-06 09:33:17', '2022-01-06 09:33:17'),
(88, 'RBP_74019', 'Ms.', 'Nishitha', 'B', 'Senior Marketing Manager', 'nishitha.b@pidatacenters.com', '+91', '9030066202', 88, '2022-01-10 23:58:40', '2022-01-10 23:58:40'),
(89, 'RBP_60174', 'Mr.', 'Raj Mohn', 'G', 'Director Technical', 'raj.g@servedesk.in', '+91', '7893982229', 89, '2022-01-11 06:05:28', '2022-01-11 06:05:28'),
(90, 'RBP_57320', 'Mr.', 'Ravi', 'Swarna', 'Director', 'ravi@trustitsolutions.com', '+91', '7702041616', 90, '2022-01-11 08:38:40', '2022-01-11 08:38:40'),
(91, 'RBP_05314', 'Mr.', 'Vivek', 'Bhattachraya', 'Proprietor', 'vivek.b@tescom.in', '+91', '9029019067', 91, '2022-01-21 03:24:07', '2022-01-21 03:24:07'),
(92, 'RBP_51096', 'Mr.', 'Vivek', 'Bhattachraya', 'Proprietor', 'vivek.b@tescom.in', '+91', '9029019067', 92, '2022-01-21 04:33:05', '2022-01-21 04:33:05'),
(93, 'RBP_81036', 'Mr.', 'Navnath', 'Wagh', 'Sr Sales Manager', 'navnath@mobigic.com', '+91', '7977040526', 93, '2022-01-24 07:32:03', '2023-06-26 01:46:15'),
(94, 'RBP_63897', 'Mr.', 'Sachin', 'Kulkarni', 'Director', 'admin@masterservices.co.in', '+91', '9822533173', 94, '2022-01-26 08:37:53', '2022-01-26 08:37:53'),
(95, 'RBP_51497', 'Mr.', 'Sachin', 'Kulkarni', 'Partner', 'admin@masterservices.co.in', '+91', '9822533173', 95, '2022-01-28 02:55:12', '2022-01-28 02:55:12'),
(96, 'RBP_72583', 'Mr.', 'Raj', 'Mohan', 'Director', 'raj.g@servedesk.in', '+91', '7893982229', 96, '2022-01-29 02:28:35', '2022-01-29 02:28:35'),
(97, 'RBP_47160', 'Mr.', 'Pralobh', 'Menon', 'Director', 'pmenon@cybergrid.in', '+91', '9789964733', 97, '2022-02-10 10:58:50', '2022-02-10 10:58:50'),
(98, 'RBP_34291', 'Mr.', 'SHIJU K', 'BALAN', 'MANAGING DIRECTOR', 'md@gksinfotech.in', '+91', '9746690000', 98, '2022-02-15 06:08:25', '2022-02-15 06:08:25'),
(99, 'RBP_49270', 'Mr.', 'SHIJU K', 'BALAN', 'MANAGING DIRECTOR', 'mdoffice@comtechsystems.in', '+91', '9746690000', 99, '2022-02-16 01:04:00', '2022-02-16 01:04:00'),
(100, 'RBP_95461', 'Mr.', 'ASWIN', 'HARIDAS', 'MANAGING DIRECTOR', 'aswin.h@irzglobal.com', '+91', '8136818484', 100, '2022-02-19 09:53:39', '2022-02-19 09:53:39'),
(101, 'RBP_94705', 'Mr.', 'Kaushal', 'Panchal', 'Cofounder', 'kaushal@cyberace.in', '+91', '9930012577', 101, '2022-02-22 04:12:49', '2022-02-22 04:12:49'),
(102, 'RBP_83547', 'Mr.', 'Kaushal', 'Panchal', 'Mr.', 'kaushal@cyberace.in', '+91', '9930012577', 102, '2022-02-23 00:38:10', '2022-02-23 00:38:10'),
(103, 'RBP_42183', 'Mr.', 'Saurabh', 'Godbole', 'BDM', 'saurabh.g@uniquesolutionsit.com', '+91', '9923446486', 103, '2022-03-11 06:03:12', '2022-03-11 06:03:12'),
(104, 'RBP_94587', 'Mr.', 'Saurabh', 'Godbole', 'Business Manager', 'saurabh.g@uniquesolutionsit.com', '+91', '9923446486', 104, '2022-03-11 07:49:31', '2022-03-11 07:49:31'),
(105, 'RBP_47985', 'Mr.', 'Shamshir', 'Ul Haq', 'BDM', 'techpartners@techbrein.com', '+91', '9809022112', 105, '2022-03-29 03:37:02', '2022-03-29 03:37:02'),
(106, 'RBP_69028', 'Mr.', 'RUCHIR', 'BAPNA', 'VP', 'RUCHIR@PYROTECHINDIA.CO.IN', '+91', '9785644278', 106, '2022-04-02 01:56:32', '2022-04-02 01:56:32'),
(107, 'RBP_46078', 'Mr.', 'BEJOY', 'C THOMAS', 'DIRECTOR', 'bejoy.t@cloudcorner.in', '+91', '9567642547', 107, '2022-04-05 01:50:00', '2022-04-05 01:50:00'),
(108, 'RBP_20349', 'Mr.', 'BEJOY', 'C THOMAS', 'DIRECTOR', 'bejoy.t@cloudcorner.in', '+91', '9567642547', 108, '2022-04-05 05:40:25', '2022-04-05 05:40:25'),
(109, 'RBP_31645', 'Mr.', 'M Arun Kumar', 'Reddy', 'CEO', 'arun@aplusatech.com', '+91', '9866606657', 109, '2022-04-29 03:54:18', '2022-04-29 03:54:18'),
(110, 'RBP_98260', 'Mr.', 'Harikrishnan', 'Srinivasan', 'Director', 'muzammil@athenaitsol.com', '+91', '9686451279', 110, '2022-06-08 01:26:10', '2022-06-08 01:26:10'),
(111, 'RBP_16390', 'Ms.', 'Shalini', 'Srivastava', 'Marketing', 'shalini.s@pidatacenters.com', '+91', '8978517793', 111, '2022-06-13 03:13:52', '2022-06-13 03:13:52'),
(112, 'RBP_37215', 'Mr.', 'JVSN', 'Raju', 'Managing Director', 'raju@msrinfraprojects.com', '+91', '9866309865', 112, '2022-06-13 06:43:43', '2022-06-13 06:43:43'),
(113, 'RBP_94760', 'Mr.', 'PRAKASH', 'M S', 'CEO', 'info@sowryasoftwaresolutions.com', '+91', '7032909200', 113, '2022-08-04 07:43:24', '2022-08-04 07:43:24'),
(114, 'RBP_80615', 'Mr.', 'kanwaljeet', 'Dureja', 'Director', 'kanwaljeet.dureja@pidatacenters.com', '+91', '9999177592', 114, '2022-08-08 00:27:38', '2022-08-08 00:27:38'),
(115, 'RBP_51309', 'Mr.', 'Dheeraj', 'Gupta', 'Director', 'Dheeraj@mieuxtechnologies.com', '+91', '9312202672', 115, '2022-08-10 03:21:48', '2022-08-10 03:21:48'),
(116, 'RBP_16527', 'Mr.', 'Rahul', 'Agarwal', 'President', 'sales.info@jilit.co.in', '+91', '9810117247', 116, '2022-09-14 01:51:21', '2022-09-14 01:51:21'),
(117, 'RBP_09437', 'Mr.', 'Rahul', 'Agarwal', 'President', 'rahul.agarwal@jilit.co.in', '+91', '9810117247', 117, '2022-09-14 02:17:50', '2022-09-14 02:17:50'),
(118, 'RBP_75318', 'Mr.', 'Rahul', 'Agarwal', 'President', 'sales.info@jilit.co.in', '+91', '9810117247', 118, '2022-09-15 04:59:11', '2022-09-15 04:59:11'),
(119, 'RBP_58327', 'Mr.', 'kanwaljeet', 'Dureja', 'Director', 'kanwaljeet.dureja@pidatacenters.com', '+91', '9999177592', 119, '2022-09-16 01:47:26', '2022-09-16 01:47:26'),
(120, 'RBP_15098', 'Mr.', 'Rahul', 'Agarwal', 'President', 'sales.info@jilit.co.in', '+91', '9911507816', 120, '2022-09-16 03:58:51', '2022-09-16 03:58:51'),
(121, 'RBP_46957', 'Mr.', 'Rahul', 'Agarwal', 'President', 'sales.info@jilit.co.in', '+91', '9911507816', 121, '2022-09-16 04:13:33', '2022-09-16 04:13:33'),
(122, 'RBP_40628', 'Mr.', 'PRAKASH', 'M S', 'CEO', 'info@sowryasoftwaresolutions.com', '+91', '7032909200', 122, '2022-09-29 01:44:21', '2022-09-29 01:44:21'),
(123, 'RBP_46157', 'Mr.', 'Lalit', 'Kumar', 'Founder & CEO', 'lalit@nexgenenterprises.co.in', '+91', '7042236194', 123, '2022-09-29 05:57:53', '2022-09-29 05:57:53'),
(124, 'RBP_17480', 'Mr.', 'Deepak', 'PR', 'Director', 'deepak.pr@topserv.co.in', '+91', '9847053466', 124, '2022-10-12 07:01:18', '2022-10-12 07:01:18'),
(125, 'RBP_53142', 'Mr.', 'Muralikrishnan', 'P', 'Managing Director', 'msp@acceix.com', '+91', '9387878791', 125, '2022-10-19 02:52:16', '2022-10-19 02:52:16'),
(126, 'RBP_25809', 'Mr.', 'Muralikrishnan', 'P', 'Managing Director', 'msp@accerix.com', '+91', '9387878791', 126, '2022-10-19 06:47:11', '2022-10-19 06:47:11'),
(127, 'RBP_18563', 'Mr.', 'Abhishek', 'Abhishek', 'Operation Head', 'abhishek@assureassistance.in', '+91', '9213951291', 127, '2022-11-09 04:39:22', '2022-11-09 04:39:22'),
(128, 'RBP_30914', 'Ms.', 'MANJULA', 'DB', 'CHANNEL PARTNER', 'monidilipenterprises@outlook.com', '+91', '9886060448', 128, '2022-11-18 10:03:33', '2022-11-18 10:03:33'),
(129, 'RBP_09471', 'Ms.', 'MANJULA', 'DB', 'CHANNEL PARTNER', 'monidilipenterprise@outlook.com', '+91', '9886060448', 129, '2022-11-18 23:30:57', '2022-11-18 23:30:57'),
(130, 'RBP_12536', 'Ms.', 'Rukmini', 'B', 'Na', 'rukmini.bongu@bitkemy.com', '+91', '6300394866', 130, '2023-05-23 01:05:16', '2023-05-23 01:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint(20) unsigned NOT NULL,
  `partner_ref_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(4) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `login_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'partner',
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'partner',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rejection_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_ref_no`, `business_email`, `password`, `mobile_code`, `mobile_number`, `is_verified`, `status`, `login_role`, `user_type`, `email`, `rejection_comment`, `created_at`, `updated_at`) VALUES
(1, 'RBP_93574', 'bidmanagement@pidatacenters.com', '$2y$10$zGoFHGHih/lTzF1UJMG7AO1rQEscMTlaHCKc69o3DD2DK322pvZ.e', '+91', '1111111111', 0, 'pending', 'admin', 'admin', 'bidmanagement@pidatacenters.com', NULL, '2021-07-04 18:41:51', '2022-04-18 05:12:41'),
(8, 'RBP_09625', 'admin@ecservice.in', '$2y$10$9pzov2EVjaYCQmrM6ixs0uOZKFklGPoERaNHaur5.59ZQv2tEo0S.', '+91', '9345534999', 3, 'rejected', 'partner', 'partner', 'admin@ecservice.in', 'Dear Albert, Thank you for showing the interest to partnering with Pi for Cloud Hosting and DC Services. Please upload Pi RBPP and NDA documents with your authorized signatures to review and approve the registration process.', '2021-09-04 02:29:23', '2021-09-14 07:55:07'),
(9, 'RBP_06491', 'alliances@cloudfence.ai', '$2y$10$0hdmFRyjnV4P2VwU8J2/be3NTrjy0KbY5jbpUkexsE10HB3.WBqVq', '+91', '9289115008', 2, 'approved', 'partner', 'partner', 'alliances@cloudfence.ai', NULL, '2021-09-08 05:16:52', '2022-08-25 05:35:27'),
(14, 'RBP_27198', 'admin@ecservices.in', '$2y$10$D6iSDhyLTCvg.MeR98GzM.LGfUTUzgeD.t/QD9vuJBI03RKbkhii6', '+91', '9345534999', 3, 'rejected', 'partner', 'partner', 'admin@ecservices.in', 'NDA & RBPP document is very old & agreement date starting not mentioned. Spoken to the partner , mailing him the revised NDA & RBPP and guided him on doing a fresh registration.', '2021-09-18 08:45:41', '2021-09-29 03:02:37'),
(17, 'RBP_01853', 'godwin@vgoshinfo.com', '$2y$10$316si6sLk7HNwaKYwl7X7.S5Jm85LkjLOfKb7TlJ4DiD4Emqe/pti', '+91', '8667503036', 2, 'approved', 'partner', 'partner', 'godwin@vgoshinfo.com', NULL, '2021-09-27 05:35:13', '2021-10-05 07:57:03'),
(18, 'RBP_28045', 'praneeth@laxmitech.in', '$2y$10$rPEJl8QeGYEe9hPYIIYt1uI2.RguNtaVJCSKRFukRBPlJHfR.7U0a', '+91', '8385692092', 3, 'rejected', 'partner', 'partner', 'praneeth@laxmitech.in', 'The NDA & RBPP document is old. Request to check & sign the new documents with the agreement start date as current & validity till 31-12-2022.All fields in yellow to be filled .Sales owner Kumar Rama already notified and new document mailed to him to forward to Laxmi Enterprise and help in registering.', '2021-09-29 01:32:46', '2021-09-29 04:30:52'),
(19, 'RBP_80964', 'bhaswati.de@pidatacenters.com', '$2y$10$IMZJbBFTyfyrVpgfGWHGHe.nUeqzx9J9vZOs3fkogWbcSKdtvnZu.', '+91', '7003607319', 2, 'approved', 'partner', 'partner', 'bhaswati.de@pidatacenters.com', 'Test-Reject', '2021-09-29 05:05:34', '2021-10-04 05:42:57'),
(20, 'RBP_78246', 'uma@orisenc.com', '$2y$10$5116HByWjyEcFEl5c8AnQ.2kN5iLVjC9jpMxIyLaMzDLzyr2mn5Eu', '+91', '9940106040', 3, 'rejected', 'partner', 'partner', 'uma@orisenc.com', 'Please upload the latest signed NDA & RBPP documents.', '2021-09-29 10:12:04', '2021-10-25 05:43:39'),
(21, 'RBP_98061', 'info@vedasystems.in', '$2y$10$jbkRWwnZrCRrLPnEvbbfG.mvO0IvA/oZ06fM9.XLLMbtbOmhwMwo.', '+91', '9790977739', 3, 'rejected', 'partner', 'partner', 'info@vedasystems.in', 'Please upload the latest RBPP & NDA documents with signature.', '2021-09-30 01:40:36', '2021-10-25 05:42:10'),
(22, 'RBP_61724', 'bhaskar@labyrinthsolutions.in', '$2y$10$Cpya5hoYy6Z92wb9i9PRre5GRxn8722StmV5wZOAo537Jx0xhU.eO', '+91', '9963779243', 3, 'rejected', 'partner', 'partner', 'bhaskar@labyrinthsolutions.in', 'New registration initiated with updated documents & approved. This is the old one which was uploaded with old documents, hence rejected.', '2021-09-30 06:47:38', '2021-10-13 00:47:25'),
(23, 'RBP_78540', 'shrinvasan.sk@quadsel.in', '$2y$10$LiTkBRYjVdqCdCBsL201cu/N.CoOmp36I1Oca0Y6EVMqas/UED9xG', '+91', '4422502277', 2, 'approved', 'partner', 'partner', 'shrinvasan.sk@quadsel.in', NULL, '2021-09-30 06:49:09', '2021-10-01 02:11:55'),
(24, 'RBP_06481', 'info@gemtrack.in', '$2y$10$u6mv/MsNySraKpgz1vszv.MMADJNSQP10RiSlfvcQZtTtU8vPtTie', '+91', '9246333505', 3, 'rejected', 'partner', 'partner', 'info@gemtrack.in', 'Incomplete information', '2021-09-30 08:56:10', '2021-10-01 05:33:56'),
(25, 'RBP_38405', 'sales@gemtrack.in', '$2y$10$tqbaV49J.hfCV2xTCtv49eoFWjYVjYeo3wjtjGmsksVCI9QSev.9e', '+91', '9246333505', 3, 'rejected', 'partner', 'partner', 'sales@gemtrack.in', 'Incomplete details', '2021-09-30 09:18:09', '2021-10-01 02:26:02'),
(26, 'RBP_23658', 'abdul@gemtrack.in', '$2y$10$bBxRMCse1TexV315Ciul8OwWs97MDU20HxfOTXCr4Wq/K/Jh46H92', '+91', '9246333505', 2, 'approved', 'partner', 'partner', 'abdul@gemtrack.in', NULL, '2021-09-30 09:20:15', '2021-10-03 23:19:39'),
(27, 'RBP_56823', 'amit@prophoenixsoft.com', '$2y$10$1quKVqaY/8G7GI4PMQZBzuwwkfNvxdt0trUlmeLlEAS5mY9R3pLgq', '+91', '8106248884', 3, 'rejected', 'partner', 'partner', 'amit@prophoenixsoft.com', 'The agreement end date in the RBPP should not be changed manually. It should be 31-12-2022 as per the original format. Please change the same & resubmit.', '2021-10-01 10:32:07', '2021-10-04 00:54:18'),
(28, 'RBP_97581', 'admin@sceptrebusiness.com', '$2y$10$XHEb2uKExWL86z7iInjQwOFXutcgV6jEyy8DgvLbBCynvaQKzCLtq', '+91', '9387878791', 2, 'approved', 'partner', 'partner', 'admin@sceptrebusiness.com', NULL, '2021-10-04 03:02:01', '2021-10-04 06:45:22'),
(29, 'RBP_87469', 'jmk@probitytech.com', '$2y$10$UseKhAUoZT/K12FvgV7rNOu2k0LrkxrUHmOlVX5lVFsDnaeReLIPG', '+91', '9890006944', 2, 'approved', 'partner', 'partner', 'jmk@probitytech.com', NULL, '2021-10-05 04:55:08', '2021-10-08 02:20:35'),
(30, 'RBP_89542', 'praneeth@laxmitech.in', '$2y$10$Vs98F.ZocuzpHECG3PzbBuqcoZxyE72D/7aHqua4RLMVwMNXkfLIK', '+91', '8985692092', 2, 'approved', 'partner', 'partner', 'praneeth@laxmitech.in', NULL, '2021-10-07 01:24:23', '2022-06-23 23:27:54'),
(31, 'RBP_02851', 'ajay@labyrinthsolutions.in', '$2y$10$/eWUYtH/VeEzKPeVAnoK5.pXsQaP.yzI0AhykHwCjsB1OseQ4G5Zm', '+91', '9618612222', 2, 'approved', 'partner', 'partner', 'ajay@labyrinthsolutions.in', NULL, '2021-10-08 05:40:18', '2022-08-02 00:38:41'),
(32, 'RBP_39724', 'srinivas.sriram.om@tatatel.co.in', '$2y$10$/tUdIizDiP8htregUADaneVYRRHD1n1ljltLAmEq7v8TsZSVg9nei', '+91', '8106193218', 2, 'approved', 'partner', 'partner', 'srinivas.sriram.om@tatatel.co.in', NULL, '2021-10-12 06:34:18', '2022-03-19 03:22:50'),
(33, 'RBP_26591', 'vidya@vservetech.in', '$2y$10$8c2FGnjJUOrN8tGU1sqwPebZEzR4PqMBqmICTVsKedBlcZl3vx9AS', '+91', '6364777712', 3, 'rejected', 'partner', 'partner', 'vidya@vservetech.in', 'The RBPP & NDA documents uploaded are not the updated agreements. Please contact sales owner for the new RBPP & NDA.', '2021-10-12 10:49:31', '2021-10-13 00:36:19'),
(34, 'RBP_21530', 'mjs@mslinfotech.com', '$2y$10$Mg3iytEom/TiNWVXaC5fi.BAgAdYdqz0CgWrFvGhkOkJplAMezezy', '+91', '7540050072', 2, 'approved', 'partner', 'partner', 'mjs@mslinfotech.com', NULL, '2021-10-13 01:37:32', '2021-10-13 02:02:37'),
(35, 'RBP_01892', 'sales@origonsystems.com', '$2y$10$pSI2bnY6nknmYfjW37Rd.ORVfNn0p4ZVwkCqaFfgSv7WaxEYhK14m', '+91', '9841071153', 2, 'approved', 'partner', 'partner', 'sales@origonsystems.com', NULL, '2021-10-13 01:39:56', '2021-10-13 01:53:28'),
(36, 'RBP_21908', 'amit.desai92@yaho.in', '$2y$10$H7z8ktNDu.VfZX/V5sjD7eAqdR5Ns1A/8VELvhcJCrmK99tTPQiG6', '+91', '8454093862', 3, 'rejected', 'partner', 'partner', 'amit.desai92@yaho.in', 'RBPP docs are not relevant and this is a test registration it seems.', '2021-10-13 06:36:46', '2021-10-13 07:31:26'),
(37, 'RBP_06213', 'mpatil@yotta.com', '$2y$10$WNv30A35wZ4yMS8my3m5/.l3lcT3.LFddO8PnpdDyOPB4VfIutJV2', '+91', '9223577795', 3, 'rejected', 'partner', 'partner', 'mpatil@yotta.com', 'Amit Desai would be discussing with Yotta team for needful action.', '2021-10-14 00:03:11', '2021-10-18 00:32:20'),
(38, 'RBP_79346', 'vidya@vservetech.co.in', '$2y$10$SuTcm./N5yUu0.j0WaOceehHjE.ykRdl1krkP3XnAkc9hVCuKH4Ru', '+91', '9448708712', 2, 'approved', 'partner', 'partner', 'vidya@vservetech.co.in', NULL, '2021-10-14 02:56:00', '2021-10-14 05:01:33'),
(39, 'RBP_26384', 'pasu@dcdrinfra.com', '$2y$10$AeAaVohH48mno2FQ9AEQfuRf3zWBQFZWayNAMlriiW4BAHSIytPLO', '+91', '9841979150', 2, 'approved', 'partner', 'partner', 'pasu@dcdrinfra.com', NULL, '2021-10-16 00:07:36', '2021-10-19 02:05:54'),
(40, 'RBP_90587', 'mpatil@yotta.com', '$2y$10$UqgwWvF.hL0q8SRonrlrcu1uwNJs2/sylHFZE7DiItqdATQaQthli', '+91', '9223577795', 2, 'approved', 'partner', 'partner', 'mpatil@yotta.com', NULL, '2021-10-18 00:52:47', '2021-10-18 04:25:22'),
(41, 'RBP_39102', 'yugandhar@tracenetwork.in', '$2y$10$nzND.3YdFxYKxhCHv3a3ie2dTmQi47r03oBwEf6SeEW3WYr2Jg2Ge', '+91', '9640406999', 3, 'rejected', 'partner', 'partner', 'yugandhar@tracenetwork.in', 'Rejecting this specific entry as right RBPP docs are not uploaded in this registration and your team has created another registration entry and uploaded the signed docs.', '2021-10-18 07:23:41', '2021-10-20 06:35:45'),
(42, 'RBP_03571', 'suresh@tracenetwork.in', '$2y$10$BAIfTe/pjLqTpIU3ZPwfEefpIwE8WDqvh9hWYGwMZm93jm7WGRwD.', '+91', '9989125347', 2, 'approved', 'partner', 'partner', 'suresh@tracenetwork.in', NULL, '2021-10-19 23:14:05', '2022-08-22 06:57:35'),
(43, 'RBP_93184', 'rajendran@felixinfotech.com', '$2y$10$Yr1v.jxgYBhkL6deoO7DH.CDWPzbd9UMm1fFakVNwKKagR9AkBH1W', '+91', '9941666675', 2, 'approved', 'partner', 'partner', 'rajendran@felixinfotech.com', NULL, '2021-10-21 19:38:35', '2022-06-23 03:47:00'),
(44, 'RBP_53261', 'harish@smartsoft.co.in', '$2y$10$dERAgpNiaVhxFHyccRszuOEwxHCVEW4rTIM1v8AoqTLJHjxp29If2', '+91', '9895604277', 3, 'rejected', 'partner', 'partner', 'harish@smartsoft.co.in', 'In the RBPP document on the 5th page, the second party details option is left blank. Partner need to fill up the same & re submit .', '2021-10-25 07:50:17', '2021-10-25 22:52:31'),
(45, 'RBP_59024', 'murali@vipuns.com', '$2y$10$0dAznkEt52uRfj3qNxAS8OD5PjoOW5O1L24vHhuZQBziNfU0UEQ82', '+91', '8095680999', 3, 'rejected', 'partner', 'partner', 'murali@vipuns.com', 'RBPP & NDA documents uploaded are the older version, please upload the latest documents & re register.', '2021-10-25 08:05:01', '2021-10-25 22:56:07'),
(46, 'RBP_60172', 'harish@smartsoft.co.in', '$2y$10$OxDN4IPMnld4kv2NqSsAZeTyF8ux6r2223jatzqviOlH60CuJAuB2', '+91', '9895604277', 2, 'approved', 'partner', 'partner', 'harish@smartsoft.co.in', NULL, '2021-10-25 23:19:23', '2021-10-27 02:38:39'),
(47, 'RBP_56418', 'ceo@discclt.com', '$2y$10$3cbZY.7Nmnt.RQGUXM5bheQHl3OvRUx6S8ZeVrbpjhC/N8SIL54W2', '+91', '9349251916', 2, 'approved', 'partner', 'partner', 'ceo@discclt.com', NULL, '2021-10-27 04:06:31', '2021-10-27 22:56:21'),
(48, 'RBP_62547', 'shankar@primetechnologiesindia.com', '$2y$10$Wu6zCMHUeMB8GWIxGYHH5erZo50DqDytM.eSrurQnb3eC9FR0biMO', '+91', '9842227123', 3, 'rejected', 'partner', 'partner', 'shankar@primetechnologiesindia.com', 'Under Terms & Condition in RBPP Doc, the expiry year to be mentioned is 2022 and not 2021.', '2021-10-30 02:57:05', '2021-10-31 21:53:22'),
(49, 'RBP_81079', 'shankar@primetechnologiesindia.com', '$2y$10$0XE7DoiwIDd4IVuo3xeABublIlgNzJ6tlV0Y/1TzME6Y1jHc128BG', '+91', '9842227123', 2, 'approved', 'partner', 'partner', 'shankar@primetechnologiesindia.com', NULL, '2021-11-09 01:15:32', '2021-11-09 01:22:03'),
(50, 'RBP_31457', 'murali@vipuns.com', '$2y$10$XeX.nLLKrnNgZcINNCWrJuVBik5ny/rkO4Ev98gI6BE.89JMpHJfy', '+91', '8095680999', 2, 'approved', 'partner', 'partner', 'murali@vipuns.com', NULL, '2021-11-10 03:20:23', '2021-11-10 04:02:40'),
(51, 'RBP_04569', 'info@balajiinfotechindia.com', '$2y$10$W7o6nAerdHGv5/kfq3Nvx.ttKWKVz8A838mW6FdK.L//jooYImlr6', '+91', '9849431943', 2, 'approved', 'partner', 'partner', 'info@balajiinfotechindia.com', NULL, '2021-11-12 02:18:05', '2022-07-14 02:27:26'),
(52, 'RBP_08547', 'admin@ecservie.in', '$2y$10$.1opmkBI41Mb6W5wViFR4..iJYVWnTmTZfReJ6Ri1pckkPjAXt1z2', '+91', '9345534999', 3, 'rejected', 'partner', 'partner', 'admin@ecservie.in', 'Company name is typed wrong & also the email id . Please check the same & upload with complete & correct details. The attached RBPP - 1st page is missing & for NDA, the below portion where "2021" is mentioned is not there. Please upload the documents properly.', '2021-11-13 00:38:23', '2021-11-15 01:26:14'),
(53, 'RBP_18679', 'anant.dhawan@mm9india.com', '$2y$10$8e9YDTdBSvbpKQAvejgBDOI0baMheWzHCaVL2zy0xZRQJspyeGyNG', '+91', '9871390600', 2, 'approved', 'partner', 'partner', 'anant.dhawan@mm9india.com', NULL, '2021-11-15 06:41:32', '2021-11-15 07:07:06'),
(54, 'RBP_51937', 'bdm@tatvaindia.in', '$2y$10$YzhoK1tL.t4F0uAHqSirrugPQc9jU1fVpiNtBUKs1gZwSuRYwbWOq', '+91', '9299650479', 2, 'approved', 'partner', 'partner', 'bdm@tatvaindia.in', NULL, '2021-11-22 02:26:58', '2021-11-23 02:02:53'),
(55, 'RBP_21705', 'admin@ecservice.in', '$2y$10$Np/kkQoFKHzlF0hxwui8Y.12mWUt/gDOqlW5ik/soyz/0S2ayR5X.', '+91', '9345534999', 2, 'approved', 'partner', 'partner', 'admin@ecservice.in', NULL, '2021-11-23 02:17:33', '2021-11-23 04:08:58'),
(56, 'RBP_58301', 'vijayasarathy@cloudyari.com', '$2y$10$4mFhct6yZIOnJqUbwebpuuJ8bA984OeTBHo8BBIQpZPWwKmgDuYqK', '+91', '8884781429', 2, 'approved', 'partner', 'partner', 'vijayasarathy@cloudyari.com', NULL, '2021-11-24 01:55:53', '2021-11-24 04:45:37'),
(57, 'RBP_31046', 'nitin@idcindia.biz', '$2y$10$S2iHUWVbj8CphQTc.fP3.OHH36qou4qLD1PP1yF3Ev8sthEf66Hqy', '+91', '7666695168', 3, 'rejected', 'partner', 'partner', 'nitin@idcindia.biz', 'Please upload the latest RBPP & NDA documents . The documents uploaded are the older version.', '2021-11-24 06:24:51', '2021-11-25 01:32:33'),
(58, 'RBP_72865', 'deva@devsystems.in', '$2y$10$UKH1xa87aVzpztPz8y0PC.74KRJ0byYZaIJTpk7YfCoKutjm67otG', '+91', '9841042197', 2, 'approved', 'partner', 'partner', 'deva@devsystems.in', NULL, '2021-11-24 23:42:29', '2021-11-25 01:37:01'),
(59, 'RBP_79032', 'cramesh@networks-in.com', '$2y$10$58ZiyjtzQ0V7mHxMe8ffVOGSe6u9Av2eRcOaSKJENipJH.6ixzheS', '+91', '9500038509', 2, 'approved', 'partner', 'partner', 'cramesh@networks-in.com', NULL, '2021-11-29 23:03:17', '2021-11-30 03:14:23'),
(60, 'RBP_83460', 'Balaji.j@accelits.com', '$2y$10$ATrZv/iimVlFC1i/KiETMu64DuHTwod30jsUDMhsI4a5K/Gnwq7J2', '+91', '9003265842', 3, 'rejected', 'partner', 'partner', 'Balaji.j@accelits.com', 'Incomplete information', '2021-11-29 23:29:16', '2021-11-30 02:50:37'),
(61, 'RBP_69480', 'oemsupport@accelits.com', '$2y$10$ikAkRPNNpXAqzf1mDwhIUeYqiYi4qhbXhLO9wYKw5UQSyqwQdI83S', '+91', '9003265842', 3, 'rejected', 'partner', 'partner', 'oemsupport@accelits.com', 'In the terms & condition , the expiry of calendar year to be mentioned 2022 & not kept blank. Please resubmit with the changes.', '2021-11-30 00:03:24', '2021-11-30 02:49:38'),
(62, 'RBP_53684', 'oemsupport@accelits.com', '$2y$10$LuCkHr/e9yaTcLt.LRmLBupcmzE0OqxivmfS5eTRhMfg6shg2ieFC', '+91', '9003265842', 2, 'approved', 'partner', 'partner', 'oemsupport@accelits.com', NULL, '2021-11-30 06:22:27', '2021-12-21 02:08:35'),
(64, 'RBP_05749', 'uma@orisenc.com', '$2y$10$AY9UNQ3su6ay1EZQoxab5eWuXc5Sg.THa2rVJiG8jWkfvhsOzylHK', '+91', '9840252735', 2, 'approved', 'partner', 'partner', 'uma@orisenc.com', NULL, '2021-11-30 07:41:10', '2021-12-01 05:31:48'),
(65, 'RBP_48976', 'nitin@idcindia.biz', '$2y$10$O82hSwhMaYIccdNY.D2/r.irmTTPYpejlSkPzxGMuFNZHHsjSzZ7e', '+91', '7666695168', 3, 'rejected', 'partner', 'partner', 'nitin@idcindia.biz', 'In the terms & condition segment, the expiry year will be 2022 & not 2023.', '2021-12-01 05:40:47', '2021-12-01 05:46:58'),
(66, 'RBP_47063', 'nitin@idcindia.biz', '$2y$10$sDhZUxYiDuhW5OhPH.S8M.fIWPg/8Bpm3A1H2ZjGs8SLL9FzsyeyK', '+91', '7666695168', 2, 'approved', 'partner', 'partner', 'nitin@idcindia.biz', NULL, '2021-12-01 05:56:59', '2022-02-09 10:53:19'),
(67, 'RBP_95048', 'nidhimahajan@fintechsoftwareservice.com', '$2y$10$MvWYMonz50b71fSGIoTMLOLUWt.xycv9Y4YXsH3.gfGa6.xXmx8y.', '+91', '9643795022', 2, 'approved', 'partner', 'partner', 'nidhimahajan@fintechsoftwareservice.com', NULL, '2021-12-01 22:21:46', '2021-12-03 04:28:15'),
(68, 'RBP_17856', 'mmr@srtechnogroup.com', '$2y$10$vqOm7R7Lo0MwuJiAEoijs.JiZRv/KaAMiN11/FUDFtMFyCa38fWqC', '+91', '7330636666', 2, 'approved', 'partner', 'partner', 'mmr@srtechnogroup.com', NULL, '2021-12-02 00:37:04', '2021-12-03 04:35:53'),
(69, 'RBP_97435', 'support@ziontechnologiessolutions.com', '$2y$10$KAMyXZ85jvUgC5zyPMldDuLJ2UPmmcfbl3CzDWMcT9rODWC/C6VAu', '+91', '8106306584', 3, 'rejected', 'partner', 'partner', 'support@ziontechnologiessolutions.com', 'Incomplete and duplicate entry', '2021-12-03 06:14:25', '2021-12-04 05:45:10'),
(70, 'RBP_49153', 'support@ziontechnologiessolutions.in', '$2y$10$zKrIpq8KLAj70BGYRGmQbOUtfi8./5HRMVRjGKFb0i0Su7cm4U3Uy', '+91', '8106306584', 2, 'approved', 'partner', 'partner', 'support@ziontechnologiessolutions.in', NULL, '2021-12-03 06:24:26', '2021-12-08 02:06:47'),
(71, 'RBP_09867', 'prasadnaik@digitalverto.com', '$2y$10$f83g7Ykliq1j.mIjmj4lP.DpRKkm6z/eiFjm138xGszi2LC6Q3P0m', '+91', '9041139833', 2, 'approved', 'partner', 'partner', 'prasadnaik@digitalverto.com', NULL, '2021-12-04 04:06:39', '2021-12-13 10:08:07'),
(72, 'RBP_04538', 'sandeep@chithragupta.com', '$2y$10$nBgHajdWYm2ewPnxHmfNzuuVR9vzcWwX5H4PGwOhgvwDsVn9aiqmC', '+91', '8074555580', 2, 'approved', 'partner', 'partner', 'sandeep@chithragupta.com', NULL, '2021-12-04 06:58:04', '2021-12-08 07:46:55'),
(73, 'RBP_30248', 'danish@innofeast.in', '$2y$10$m9FKYQ4CxAT9NCIuo5egouZq6R9ysBvCkBNfjWPC0FZEy.RitNNDO', '+91', '9633719333', 2, 'approved', 'partner', 'partner', 'danish@innofeast.in', NULL, '2021-12-07 06:02:00', '2021-12-20 13:09:35'),
(74, 'RBP_93601', 'ravish@professionalpal.in', '$2y$10$BjNixv9P8mm6U2YBgKxvaeolFyH2NJK3HMAKC1HQMpdQJ/OJnHCka', '+91', '9886641094', 2, 'approved', 'partner', 'partner', 'ravish@professionalpal.in', NULL, '2021-12-07 06:45:28', '2022-06-23 23:13:03'),
(75, 'RBP_51043', 'akila@devdatta.in', '$2y$10$ied9ixBa/6ZgHXF0qkASBea8mF6cPRsz11btJvBaqF/DFt7mpBy4q', '+91', '7010144564', 2, 'approved', 'partner', 'partner', 'akila@devdatta.in', NULL, '2021-12-07 09:41:06', '2021-12-08 07:51:08'),
(76, 'RBP_37621', 'sunanda@uidigitalworld.com', '$2y$10$.MlMeryCnfN/ZzpQtOEXqOxKesgr0eEh5T3dCbDZcByij/vfAKgnO', '+91', '7032919856', 2, 'approved', 'partner', 'partner', 'sunanda@uidigitalworld.com', NULL, '2021-12-11 03:10:05', '2021-12-12 01:25:35'),
(77, 'RBP_20934', 'reddy.b@ampler.in', '$2y$10$E8Z2eUw05Hbqhx.Wj4FM2e6ssi0Sqi8Ol.Ee0yrhpUkqXxkJnaw7m', '+91', '9700031004', 2, 'approved', 'partner', 'partner', 'reddy.b@ampler.in', NULL, '2021-12-14 23:30:20', '2022-06-17 01:05:37'),
(78, 'RBP_42531', 'ramesh@cloudmindssolutions.com', '$2y$10$KOALw2Ozf5kKLx1If5xOguABpg.OyV2Iq3zyPfzcKjWajKPP9CKU2', '+91', '9908728007', 2, 'approved', 'partner', 'partner', 'ramesh@cloudmindssolutions.com', NULL, '2021-12-15 00:02:25', '2021-12-24 03:09:46'),
(79, 'RBP_01837', 'vinu.gopinath@locuz.com', '$2y$10$QliextzeSJRIUx.LCnp8fOVga91wO8tEn81JXBcdyZQwiQdA61mvq', '+91', '9949047721', 3, 'rejected', 'partner', 'partner', 'vinu.gopinath@locuz.com', 'The RBPP & NDA documents are not filled ,signed & stamped.', '2021-12-15 00:31:47', '2021-12-15 04:15:02'),
(80, 'RBP_19426', 'amit.vora@dynacons.com', '$2y$10$uZdYImkGRZxBvX1Ud8w6vOrp8c3Dkwb8CwJz.pv0ODu1KKdNl4A3e', '+91', '9326092073', 2, 'approved', 'partner', 'partner', 'amit.vora@dynacons.com', NULL, '2021-12-17 06:04:31', '2022-03-07 06:55:46'),
(81, 'RBP_68357', 'vinu.gopinath@locuz.com', '$2y$10$7W1lUjum/fvqzxfqbDafS.PKWTqWBhxd1kMjWzrhNjeESYCYVmndu', '+91', '9949047721', 2, 'approved', 'partner', 'partner', 'vinu.gopinath@locuz.com', NULL, '2021-12-21 22:50:52', '2021-12-22 06:11:34'),
(82, 'RBP_05174', 'jvsrajesh@eastorigin.com', '$2y$10$pQd.Pbg3wFaakJpYlPDgR.0JDOXNzvkoyGMV.4TKVvkLlh4MkGSva', '+91', '9866309865', 2, 'approved', 'partner', 'partner', 'jvsrajesh@eastorigin.com', NULL, '2021-12-23 07:13:45', '2021-12-24 00:31:22'),
(83, 'RBP_98207', 'Sajidh@bridgecubex.com', '$2y$10$MIThjsX/GZBZd/lmuSs8TuP7PKUwXv6GpKC1ZJXAyW.hfkUJeS8u2', '+91', '9741230646', 2, 'approved', 'partner', 'partner', 'Sajidh@bridgecubex.com', NULL, '2021-12-28 01:50:11', '2021-12-28 02:22:41'),
(84, 'RBP_08536', 'amar.thakare@lumiversesolutions.com', '$2y$10$U5EBJlVnI8ihMOs.KImZA./POpkfCu5jq0sUGzlM6bihBpqVOgJVG', '+91', '9960508010', 2, 'approved', 'partner', 'partner', 'amar.thakare@lumiversesolutions.com', NULL, '2021-12-29 03:46:17', '2021-12-29 04:31:50'),
(85, 'RBP_62084', 'dp@datasoftcomnet.com', '$2y$10$8zvhqPm55jnea6CfY6yffeeR4NaK7kr0nly5m2jPjeHmejpRmlhVG', '+91', '9849111010', 3, 'rejected', 'partner', 'partner', 'dp@datasoftcomnet.com', 'The agreement is not filled up. Please fill up all the details , submit with sign and stamp', '2021-12-30 06:46:35', '2022-01-05 06:47:59'),
(86, 'RBP_73489', 'rtummala@doctususa.com', '$2y$10$gLFE9H/DIOyDklDnBx5F0O2BJXjL6oGX35A4h1ScsHIMHPqZzDPdK', '+91', '9849034478', 2, 'approved', 'partner', 'partner', 'rtummala@doctususa.com', NULL, '2022-01-05 05:45:17', '2022-01-05 06:50:32'),
(87, 'RBP_72468', 'dp@datasoftcomnet.com', '$2y$10$0/GVeqP4D5ou9yJcw9CP4OoMP9FwV/9s6BoDxQUly6J6nrXpX.sdi', '+91', '9000012366', 2, 'approved', 'partner', 'partner', 'dp@datasoftcomnet.com', NULL, '2022-01-06 09:33:17', '2022-01-07 06:28:38'),
(88, 'RBP_74019', 'nishitha.b@pidatacenters.com', '$2y$10$Sm68FfW5K7WXdt0JBJ30IedfRShB2IXDO05woqVJbjRvA1XyfwIk2', '+91', '9030066202', 2, 'approved', 'partner', 'partner', 'nishitha.b@pidatacenters.com', NULL, '2022-01-10 23:58:40', '2022-01-11 00:16:31'),
(89, 'RBP_60174', 'raj.g@servedesk.in', '$2y$10$xk.n5p4MNWpn/MMbvOmDl.peYbUPeC1v4WyMMS1hYLken.cH9NVF6', '+91', '7893982229', 3, 'rejected', 'partner', 'partner', 'raj.g@servedesk.in', 'test', '2022-01-11 06:05:28', '2022-01-23 23:44:45'),
(90, 'RBP_57320', 'ravi@trustitsolutions.com', '$2y$10$IxUz.I/N4D08bYwFlkjZa.j0IMehfyr4j06PdxshXP0U1A48H3qMC', '+91', '7702041616', 2, 'approved', 'partner', 'partner', 'ravi@trustitsolutions.com', NULL, '2022-01-11 08:38:40', '2022-02-01 04:48:09'),
(91, 'RBP_05314', 'vivek.b@tescom.in', '$2y$10$NlXtN32AZ5IQo1Xzi/cU7.oZD7drBAAX8DTiJcX/5heLvNtn1U0hW', '+91', '9029019067', 3, 'rejected', 'partner', 'partner', 'vivek.b@tescom.in', 'The expiry year will be 2022.', '2022-01-21 03:24:07', '2022-01-21 04:05:36'),
(92, 'RBP_51096', 'vivek.b@tescom.in', '$2y$10$pSY11BhmlB/.y4Y6aTZOj.hLgyif7QqW2kFNM0I7nfI4BKngM5ScK', '+91', '9029019067', 2, 'approved', 'partner', 'partner', 'vivek.b@tescom.in', NULL, '2022-01-21 04:33:05', '2022-01-21 04:59:31'),
(93, 'RBP_81036', 'navnath@mobigic.com', '$2y$10$dLwQ.jK7lNY2NcCazcd70u1bUhsIGDKQHf71KbWVbsKRn/Y/iNcpe', '+91', '9987555541', 2, 'approved', 'partner', 'partner', 'navnath@mobigic.com', NULL, '2022-01-24 07:32:03', '2022-01-24 23:31:37'),
(94, 'RBP_63897', 'admin@masterservices.co.in', '$2y$10$GZYLL3qzFeFVQBBPkh8Lb.crOMsX1Qq5YKxASiKcvraTG/f0rHdry', '+91', '9822533173', 3, 'rejected', 'partner', 'partner', 'admin@masterservices.co.in', '"The calendar year to be kept as valid till Dec2022 and not be changed to 2023. Validity should be from current date till Dec 2022 & calendar year 2022"', '2022-01-26 08:37:53', '2022-01-26 22:59:38'),
(95, 'RBP_51497', 'admin@masterservices.co.in', '$2y$10$f8V9zECiDKTVRtm/fuTq0uHlnhxobAFkH9gLNZHQfzW0qOVqKdZA.', '+91', '9822533173', 2, 'approved', 'partner', 'partner', 'admin@masterservices.co.in', NULL, '2022-01-28 02:55:12', '2022-01-31 06:52:39'),
(96, 'RBP_72583', 'raj.g@servedesk.in', '$2y$10$jXjyfO2XWmlB5yQa53CWQebV48XwQijbPoDZJbZsBJFCGnqf6m2jS', '+91', '7893982229', 2, 'approved', 'partner', 'partner', 'raj.g@servedesk.in', NULL, '2022-01-29 02:28:35', '2022-06-28 02:19:17'),
(97, 'RBP_47160', 'pmenon@cybergrid.in', '$2y$10$pME0mAjIHcTCfeL3tBL/mOLIG2kjxH67eNkH6WmML58i.gXVPJIs6', '+91', '9789964733', 2, 'approved', 'partner', 'partner', 'pmenon@cybergrid.in', NULL, '2022-02-10 10:58:50', '2022-02-10 22:37:38'),
(98, 'RBP_34291', 'md@gksinfotech.in', '$2y$10$cMW5XUcQ8YYTok5bHSmn7O.q1VyaVhEr0Scai0gEwjcVPIvZIAdza', '+91', '9746690000', 3, 'rejected', 'partner', 'partner', 'md@gksinfotech.in', 'Both the documents uploaded needs to be signed & stamped before uploading.', '2022-02-15 06:08:25', '2022-02-15 06:43:43'),
(99, 'RBP_49270', 'mdoffice@comtechsystems.in', '$2y$10$vA2QOyZcAivvcYXT11omseTYNSAUS6.e/n1Sqj2tWAvUAbc12cPgG', '+91', '9746690000', 2, 'approved', 'partner', 'partner', 'mdoffice@comtechsystems.in', NULL, '2022-02-16 01:04:00', '2022-02-16 03:42:23'),
(100, 'RBP_95461', 'aswin.h@irzglobal.com', '$2y$10$EUA2.W3gkx.xfhFAx/KTxeK7WHWEFFojVsttgwAWU.XN2guH9BgTW', '+91', '8136818484', 2, 'approved', 'partner', 'partner', 'aswin.h@irzglobal.com', NULL, '2022-02-19 09:53:39', '2022-02-22 03:30:40'),
(101, 'RBP_94705', 'kaushal@cyberace.in', '$2y$10$3JLMrlO3g6Ws/akOc7yu3eIU14VaKAWfnlpw480TA33PD3FyekkCa', '+91', '9930012577', 3, 'rejected', 'partner', 'partner', 'kaushal@cyberace.in', 'Incomplete registration, no details filled in. Please re-register.', '2022-02-22 04:12:49', '2022-02-22 22:57:40'),
(102, 'RBP_83547', 'kaushal@cyberace.in', '$2y$10$eWWdduhHtPVz3pGVfN/sGeGlizsSSZNkxUjgQm0SJhtTa06jgehI2', '+91', '9930012577', 2, 'approved', 'partner', 'partner', 'kaushal@cyberace.in', NULL, '2022-02-23 00:38:10', '2022-02-23 01:33:12'),
(103, 'RBP_42183', 'saurabh.g@uniquesolutionsit.com', '$2y$10$FuhUW/okuBmtkQJeJz4lZ.f1Np6OlGBXcTs5/wORjTzaus6tvmeru', '+91', '9923446486', 3, 'rejected', 'partner', 'partner', 'saurabh.g@uniquesolutionsit.com', 'In the RBPP, under term and termination, please mention the expiry of calendar year 2022. It is not filled, showing as YYYY. Please do the changes and resubmit.', '2022-03-11 06:03:12', '2022-03-11 06:24:15'),
(104, 'RBP_94587', 'saurabh.g@uniquesolutionsit.com', '$2y$10$VnBF375TfmSOjiUxpdJO4eihsLC82UAzn5U4mFayoYsDw3ChPP.Iy', '+91', '9923446486', 2, 'approved', 'partner', 'partner', 'saurabh.g@uniquesolutionsit.com', NULL, '2022-03-11 07:49:31', '2022-03-13 23:57:47'),
(105, 'RBP_47985', 'techpartners@techbrein.com', '$2y$10$zNjGau.HHqY86e2Iky8.1O5tkhQwIzCxE2PIKuS01JCsQgJkxVwiC', '+91', '9809022112', 2, 'approved', 'partner', 'partner', 'techpartners@techbrein.com', NULL, '2022-03-29 03:37:02', '2022-03-29 05:03:23'),
(106, 'RBP_69028', 'RUCHIR@PYROTECHINDIA.CO.IN', '$2y$10$IE59dCfZPy4BjfOnakyhmOOlj/wGBDJFXmNM17cP8eyHm0sXT3p6S', '+91', '9785644278', 3, 'rejected', 'partner', 'partner', 'RUCHIR@PYROTECHINDIA.CO.IN', 'This portal is for partnership with Pi to sell Pi products & services & not for vendor registration.', '2022-04-02 01:56:32', '2022-04-04 01:20:27'),
(107, 'RBP_46078', 'bejoy.t@cloudcorner.in', '$2y$10$uzYrqHqqcYfqfACaIBxY/.zdTu2TzObT4EqCvPUkiceZr6B1ncea.', '+91', '9567642547', 3, 'rejected', 'partner', 'partner', 'bejoy.t@cloudcorner.in', 'The registration is incomplete. No details mentioned.', '2022-04-05 01:50:00', '2022-04-05 03:27:58'),
(108, 'RBP_20349', 'bejoy.t@cloudcorner.in', '$2y$10$/JM3MVdK0HPVRMlt7TnBleCYAQ0hWTO9piGPibkfS88.csOYYE9Ge', '+91', '9567642547', 2, 'approved', 'partner', 'partner', 'bejoy.t@cloudcorner.in', NULL, '2022-04-05 05:40:25', '2022-04-06 01:57:58'),
(109, 'RBP_31645', 'arun@aplusatech.com', '$2y$10$nyHoZMXVO58sGqqJSiEPue8QfFVR.KTqnVCVFW74JaTKni1sMaCwq', '+91', '9866606657', 2, 'approved', 'partner', 'partner', 'arun@aplusatech.com', NULL, '2022-04-29 03:54:18', '2022-04-29 04:34:16'),
(110, 'RBP_98260', 'muzammil@athenaitsol.com', '$2y$10$JLS1gJUfbW7tbZ4iBI6o8eZLPKpmmyMkHYh4BE2VAoKPkALx6n2UO', '+91', '9686451279', 2, 'approved', 'partner', 'partner', 'muzammil@athenaitsol.com', NULL, '2022-06-08 01:26:10', '2022-06-24 00:20:32'),
(111, 'RBP_16390', 'shalini.s@pidatacenters.com', '$2y$10$nKY1C8QSOZRZCMObG9PI/upn.LrTIaToPxK4JkFGbaQm23ogMJnqW', '+91', '8978517793', 3, 'rejected', 'partner', 'partner', 'shalini.s@pidatacenters.com', 'Trial registration', '2022-06-13 03:13:52', '2022-06-13 04:04:53'),
(112, 'RBP_37215', 'raju@msrinfraprojects.com', '$2y$10$8TuNOyzB4OHt.IQTV3OafukiSzTfuwCazlrjrcZV0YNf.ut0HZoxa', '+91', '9866309865', 2, 'approved', 'partner', 'partner', 'raju@msrinfraprojects.com', NULL, '2022-06-13 06:43:43', '2022-07-04 00:24:18'),
(113, 'RBP_94760', 'info@sowryasoftwaresolutions.com', '$2y$10$5TwH7ytV..r6JmEytawH2Of4UQH4tcRPfdWzsYxL1ei0bU24GWITi', '+91', '7032909200', 3, 'rejected', 'partner', 'partner', 'info@sowryasoftwaresolutions.com', 'The NDA & RBPP documents are not signed & stamped. Please re-register with signature & stamp.', '2022-08-04 07:43:24', '2022-08-10 07:46:28'),
(114, 'RBP_80615', 'kanwaljeet.dureja@pidatacenters.com', '$2y$10$fZJHcFXnxWBrt444ang6COnJUo9DDA0Jd8FOZ.qSD7Ds3sIi5DXZm', '+91', '9999177592', 3, 'rejected', 'partner', 'partner', 'kanwaljeet.dureja@pidatacenters.com', 'This is a test registration', '2022-08-08 00:27:38', '2022-08-10 07:43:32'),
(115, 'RBP_51309', 'Dheeraj@mieuxtechnologies.com', '$2y$10$lxyEreGSruBZyUoZEVbXO.YqjN60RGGcusazL6JdraxCN57HoXcne', '+91', '9312202672', 3, 'rejected', 'partner', 'partner', 'Dheeraj@mieuxtechnologies.com', 'The RBPP & NDA documents are not signed & stamped. Please re-register with the stamp & signature on the documents.', '2022-08-10 03:21:48', '2022-08-10 07:41:01'),
(116, 'RBP_16527', 'sales.info@jilit.co.in', '$2y$10$TvzhfHr/J9UQBc8gbWm4LuAc3s4Dvz7fTFQvfqP5qZ2723fJDaJCC', '+91', '9810117247', 3, 'rejected', 'partner', 'partner', 'sales.info@jilit.co.in', 'Information not complete', '2022-09-14 01:51:21', '2022-09-15 00:54:40'),
(117, 'RBP_09437', 'rahul.agarwal@jilit.co.in', '$2y$10$wzvprGStaTt0HFOP28t5UeEh/TLh8CK5jQMpG7..q2gbHKWgd.fY6', '+91', '9810117247', 3, 'rejected', 'partner', 'partner', 'rahul.agarwal@jilit.co.in', 'Information not complete', '2022-09-14 02:17:50', '2022-09-15 00:51:51'),
(118, 'RBP_75318', 'sales.info@jilit.co.in', '$2y$10$s/4ErUg5stoM0bOw70e0K.sue9PjhlAOFkEUK/6ms4/taBB/WkQC2', '+91', '9810117247', 3, 'rejected', 'partner', 'partner', 'sales.info@jilit.co.in', 'Incomplete information', '2022-09-15 04:59:11', '2022-09-16 01:52:26'),
(119, 'RBP_58327', 'kanwaljeet.dureja@pidatacenters.com', '$2y$10$ZbpyUFzdAohy/YzAfjrWFewi3njQh7JQtur8KYQJDjOH3bRUNiF/i', '+91', '9999177592', 3, 'rejected', 'partner', 'partner', 'kanwaljeet.dureja@pidatacenters.com', 'Demo', '2022-09-16 01:47:26', '2022-09-16 01:53:14'),
(120, 'RBP_15098', 'sales.info@jilit.co.in', '$2y$10$MbqA0R28GCnaDaJM4AOmT.83rk1O7vc3frUP/Y0PYpi1L6vFOkQhW', '+91', '9911507816', 3, 'rejected', 'partner', 'partner', 'sales.info@jilit.co.in', 'Incomplete details', '2022-09-16 03:58:51', '2022-09-16 04:02:12'),
(121, 'RBP_46957', 'sales.info@jilit.co.in', '$2y$10$Z6F2.Co8K4mTytThF.pnTefKjdF0FqFD6BAbr77VDFreKnvtb6MJq', '+91', '9911507816', 2, 'approved', 'partner', 'partner', 'sales.info@jilit.co.in', NULL, '2022-09-16 04:13:33', '2022-09-16 04:56:34'),
(122, 'RBP_40628', 'info@sowryasoftwaresolutions.com', '$2y$10$MllJZTCApPVZOnCZQyZk5utaBm0LLhlbHJIc6UG/3DPbTelKCYTe6', '+91', '7032909200', 2, 'approved', 'partner', 'partner', 'info@sowryasoftwaresolutions.com', NULL, '2022-09-29 01:44:21', '2022-10-13 22:43:43'),
(123, 'RBP_46157', 'lalit@nexgenenterprises.co.in', '$2y$10$c4GsKDV6KLVqwBytTAlGFuTjnTYej3Ho2b1dqgNYiKutHUDRv2q72', '+91', '7042236194', 0, 'pending', 'partner', 'partner', 'lalit@nexgenenterprises.co.in', NULL, '2022-09-29 05:57:53', '2022-09-29 05:57:53'),
(124, 'RBP_17480', 'deepak.pr@topserv.co.in', '$2y$10$AYB3XmRCQbvDVizU8vDqmubuyHpbOuvu3MTE8QkAKikJ3WkjNl7Qm', '+91', '9847053466', 0, 'pending', 'partner', 'partner', 'deepak.pr@topserv.co.in', NULL, '2022-10-12 07:01:17', '2022-10-12 07:01:17'),
(125, 'RBP_53142', 'msp@acceix.com', '$2y$10$ppUScB4.g.ga6Tlro5bcp.HuxY/VaRoQAO4u4V9D9RwQfhiUzZmN.', '+91', '9387878791', 0, 'pending', 'partner', 'partner', 'msp@acceix.com', NULL, '2022-10-19 02:52:16', '2022-10-19 02:52:16'),
(126, 'RBP_25809', 'msp@accerix.com', '$2y$10$pwrZau/FbFBEn8vUwwmYKeEAQotzPhdgjOIcPL5WS36UYCqX0r..W', '+91', '9387878791', 0, 'pending', 'partner', 'partner', 'msp@accerix.com', NULL, '2022-10-19 06:47:11', '2022-10-19 06:47:11'),
(127, 'RBP_18563', 'abhishek@assureassistance.in', '$2y$10$kbqqRHa/pEVZYWq4T0Dubeh.e3HwaJ5NUnFm8oKV8wibBbruu.U1a', '+91', '9213951291', 0, 'pending', 'partner', 'partner', 'abhishek@assureassistance.in', NULL, '2022-11-09 04:39:22', '2022-11-09 04:39:22'),
(128, 'RBP_30914', 'monidilipenterprises@outlook.com', '$2y$10$g1465lA055NQleP4YBNr6.nyh8G1Xw22JRG/RUwaKzlaK4yX3fbZC', '+91', '9886060448', 0, 'pending', 'partner', 'partner', 'monidilipenterprises@outlook.com', NULL, '2022-11-18 10:03:33', '2022-11-18 10:03:33'),
(129, 'RBP_09471', 'monidilipenterprise@outlook.com', '$2y$10$Q4VuTDqeCrPFf885yjr1p.uDQEfXHC3/OxGymdB1jCZ32NVWTk7dK', '+91', '9886060448', 0, 'pending', 'partner', 'partner', 'monidilipenterprise@outlook.com', NULL, '2022-11-18 23:30:57', '2022-11-18 23:30:57'),
(130, 'RBP_12536', 'rukmini.bongu@bitkemy.com', '$2y$10$N8HLm8QklT7oh8xAlbhLMu/BqHSyCEC2Y3d23MhWVCnd3LBtIWeBK', '+91', '6300394866', 0, 'pending', 'partner', 'partner', 'rukmini.bongu@bitkemy.com', NULL, '2023-05-23 01:05:16', '2023-05-23 01:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `partnertechinfos`
--

CREATE TABLE IF NOT EXISTS `partnertechinfos` (
  `id` bigint(20) unsigned NOT NULL,
  `partner_ref_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `use_case_expertise` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `use_case_expertise_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technology_expertise` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology_expertise_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_services_offered_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_services_offered` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interested_ser_prod_at_pi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interested_ser_prod_at_pi_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busi_case_brief` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `agreement_doc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nda_doc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnertechinfos`
--

INSERT INTO `partnertechinfos` (`id`, `partner_ref_no`, `use_case_expertise`, `use_case_expertise_other`, `technology_expertise`, `technology_expertise_other`, `professional_services_offered_other`, `professional_services_offered`, `interested_ser_prod_at_pi`, `interested_ser_prod_at_pi_other`, `busi_case_brief`, `partner_type`, `partner_id`, `agreement_doc`, `nda_doc`, `created_at`, `updated_at`) VALUES
(1, 'RBP_93574', '["Cloud Services","Data Center Services","Disaster Recovery","Business Applications - SAP","Business Applications - Microsoft","Business Applications - Oracle","Business Applications - Other","Big Data, Analytics, Batch Processing & Business Intelligence (BI)","Archieving","High Availability","Content Delivery","Database & Data Warehouse","Dev & Test","Digital Marketing","High Performance Computing (HPC)","Internet of Things (IoT)","Mobile","Security & Compliance","Storage (Backup, Recovery & Asset Storage)","Value (Cost Saving \\/ TCO)","Web & Web Apps"]', NULL, '["Apache","Flash Media Server","Hadoop","IBM","JBOSS","Linux",".NET","MS Exchange","Microsoft Share Point","MS SQL","MySQL","SAP","SAP","Oracle Apps","Oracle DataBase","Oracle Middleware","Ruby on Rails","System Management","System Integration"]', NULL, NULL, '["Assessments","ERP Consulting","Cloud Migration Services","Custom Application Development","Digital Marketing","Managed Service Provider","Strategic \\/ IT Consulting","Staff Augmentation"]', '["Co-Location","Cloud Services","Managed Services","Data Center Build","Data Center Consulting","Assessments"]', NULL, 'Business Case', 'One-Time Referral Bonus', 1, '', '', '2021-07-04 18:41:51', '2021-07-04 18:41:51'),
(8, 'RBP_09625', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Business Applications - Other,Mobile,Storage (Backup, Recovery & Asset Storage),Web & Web Apps"', NULL, '"Linux,.NET,MySQL,System Management"', NULL, NULL, '"Cloud Migration Services,Custom Application Development,Digital Marketing,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Consulting"', NULL, 'Having good exposure in the IT field and Logistics Industry, opted for the Pi business partner.', 'Recurring Commission,One-Time Referral Bonus', 8, 'storage/app/public/uploads/registrations/Albert DL.pdf', 'storage/app/public/uploads/registrations/certificate.pdf', '2021-09-04 02:29:23', '2021-09-04 02:29:23'),
(9, 'RBP_06491', '"Cloud Services,Data Center Services,Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"IBM, Microsoft Share Point,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Cloud Services"', NULL, 'CloudFence Technologies is a new-age Technology firm that offers the best in Cloud Services, SaaS, CloudSec, Cyber and Digital Transformation Solutions to clients across the globe.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 9, 'storage/app/public/uploads/registrations/harbour 1 ag_compressed.pdf', 'storage/app/public/uploads/registrations/Harbour 1 NDA_compressed.pdf', '2021-09-08 05:16:52', '2021-09-08 05:16:52'),
(14, 'RBP_27198', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'EC service is looking for good partner in DC related services provider', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 14, 'storage/app/public/uploads/registrations/RBP-NDA-ECS-compressed.pdf', 'storage/app/public/uploads/registrations/RBP-NDA-ECS-compressed.pdf', '2021-09-18 08:45:41', '2021-09-18 08:45:41'),
(17, 'RBP_01853', '"Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'we provide services in Software development for our end customers & Cloud Platform, included technologies Blockchain,Dece Cloud,Crypto Consulting', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 17, 'storage/app/public/uploads/registrations/RBPP Agreement-Vgosh.pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21) (1).pdf', '2021-09-27 05:35:13', '2021-09-27 05:35:13'),
(18, 'RBP_28045', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Archieving,High Availability,Content Delivery,Internet of Things (IoT),Mobile,Storage (Backup, Recovery & Asset Storage),Web & Web Apps"', NULL, '"Linux,MS Exchange, Microsoft Share Point,MySQL,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'we have a huge customer base delivering multiple solutions like Hardware, Networking, Cloud, Managed services', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 18, 'storage/app/public/uploads/registrations/Registered Business Partner Progra.pdf', 'storage/app/public/uploads/registrations/NON-DISCLOSURE AGREEMENT.pdf', '2021-09-29 01:32:46', '2021-09-29 01:32:46'),
(19, 'RBP_80964', '"Data Center Services"', NULL, '"SAP"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Data Center Consulting"', NULL, 'want to be partner to increase business opportunity', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 19, 'storage/app/public/uploads/registrations/Modefin PO.pdf', 'storage/app/public/uploads/registrations/Modefin PO.pdf', '2021-09-29 05:05:34', '2021-09-29 05:05:34'),
(20, 'RBP_78246', '"Cloud Services,Data Center Services,Disaster Recovery"', NULL, '"MS Exchange, Microsoft Share Point,MS SQL,System Integration"', NULL, NULL, '"Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Cloud Provider , Co-location , Datacenter build , DR support', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 20, 'storage/app/public/uploads/registrations/Pi DC Registered Business Partner Program Agreement.pdf', 'storage/app/public/uploads/registrations/Pi DC NON-DISCLOSURE AGREEMENT_Pi Partner Program.pdf', '2021-09-29 10:12:04', '2021-09-29 10:12:04'),
(21, 'RBP_98061', '"Cloud Services,Disaster Recovery,Business Applications - Microsoft,Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"MS Exchange,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are into IT Consulting and many opportunities enables us to get the partnership with the Cloud Service Providers.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 21, 'storage/app/public/uploads/registrations/VEDA SYSTEMS RBPP.pdf', 'storage/app/public/uploads/registrations/VEDA SYSTEMS NDA.pdf', '2021-09-30 01:40:36', '2021-09-30 01:40:36'),
(22, 'RBP_61724', '"Cloud Services,Disaster Recovery,Business Applications - Oracle,High Availability,Content Delivery,Internet of Things (IoT)"', NULL, '"IBM,Linux,MySQL,Oracle DataBase,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services"', NULL, 'We are very interested in cloud and collocating offers which are very much suitable for our exiting customers. We regularly provide on premises solutions for customer requirement which may be a higher investment for some organizations where Pi Data centers are helpful for both end used and as well as our organization.', 'Recurring Commission', 22, 'storage/app/public/uploads/registrations/RBPP-Labyrinth Solution (1).pdf', 'storage/app/public/uploads/registrations/NDA_Labyrinth Solution.pdf', '2021-09-30 06:47:38', '2021-09-30 06:47:38'),
(23, 'RBP_78540', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Since we have more IT Infrastructure management services enquiries, we believe in partnership with Pi Data would give suitable product and  solution to customers.', 'Transfer Price', 23, 'storage/app/public/uploads/registrations/QSPL Agreement.pdf', 'storage/app/public/uploads/registrations/Quadsel NDA.pdf', '2021-09-30 06:49:09', '2021-09-30 06:49:09'),
(24, 'RBP_23658', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are into Telcom /Security Services and Home Automation Business from last More than 15Yrs we are Corporate channel partners for Vodfone Idea Ltd and Tata Teleservices for there Enterprise Products..', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 26, 'storage/app/public/uploads/registrations/RBPP-Agreement -Geogem-30-9-2021.pdf', 'storage/app/public/uploads/registrations/NDA Geogem-30-9-2021.pdf', '2021-09-30 09:20:15', '2021-09-30 09:20:15'),
(25, 'RBP_56823', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'ProPhoenix Soft is a privately held company established in 2017 ; a leading 360-degree solutions provider for end to end IT requirements along with Cloud and Mobility solutions. We are a provider of Azure Cloud Service, IT consulting and software services to organizations all across India', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 27, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21).pdf', '2021-10-01 10:32:07', '2021-10-01 10:32:07'),
(26, 'RBP_97581', '"Cloud Services,Data Center Services"', NULL, '"MS SQL,System Management"', NULL, NULL, '"ERP Consulting,Digital Marketing,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Consulting"', NULL, 'Since Sceptre business corporation provides consultancy services, we have a lot of clients who use applications. So we can recommend them cloud solutions.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 28, 'storage/app/public/uploads/registrations/PI partner Program.pdf', 'storage/app/public/uploads/registrations/PI NDA.pdf', '2021-10-04 03:02:01', '2021-10-04 03:02:01'),
(27, 'RBP_87469', '"Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Internet of Things (IoT)"', NULL, '".NET,MS SQL,MySQL,SAP,SAP,Oracle DataBase,System Management"', NULL, NULL, '"ERP Consulting,Strategic \\/ IT Consulting"', '"Co-Location, Data Center Consulting"', NULL, 'As of now no case in hand. Soon we shall have few cases on board.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 29, 'storage/app/public/uploads/registrations/Probity Tech RBPP Agreement.pdf', 'storage/app/public/uploads/registrations/Pi Signed NDA -Final(19-May-21).pdf', '2021-10-05 04:55:08', '2021-10-05 04:55:08'),
(28, 'RBP_89542', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,High Availability,Content Delivery, Database & Data Warehouse,High Performance Computing (HPC),Internet of Things (IoT),Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"Flash Media Server,Linux, Microsoft Share Point,MS SQL,MySQL,SAP,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Laxmi Enterprises works on all the requirements of the existing set of customers like hardware, software licensing, security, cloud, storage and backup solutions etc.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 30, 'storage/app/public/uploads/registrations/Laxmi-RBPP-AGGREMENT.pdf', 'storage/app/public/uploads/registrations/Laxmi-NDA.pdf', '2021-10-07 01:24:23', '2021-10-07 01:24:23'),
(29, 'RBP_02851', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Archieving,High Availability,Content Delivery, Database & Data Warehouse,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Linux,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Would like to wrong along with Pi in positioning cloud and colo, managed service business.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 31, 'storage/app/public/uploads/registrations/RBPP agreement10072021.pdf', 'storage/app/public/uploads/registrations/NDA final Pidata10072021.pdf', '2021-10-08 05:40:18', '2021-10-08 05:40:18'),
(30, 'RBP_39724', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft"', NULL, '"System Integration"', NULL, NULL, '"Strategic \\/ IT Consulting"', '"Co-Location,Managed Services"', NULL, 'We at "Om Natiktej Enterprises" are dedicated team of professionals dealing with all telecom and Data Center related services to Small Medium Enterprises in PAN india.', 'Recurring Commission', 32, 'storage/app/public/uploads/registrations/RBPP Agreement.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2021-10-12 06:34:18', '2021-10-12 06:34:18'),
(31, 'RBP_26591', '"Cloud Services,Data Center Services,Business Applications - Microsoft,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"Linux,MS Exchange, Microsoft Share Point,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Consulting,Assessments"', NULL, 'Vserve is an Microsoft CSP partner which has aligned with most of the Technology companies like Microsoft, Google , Amazon , TATA Communications , Airtel ,Zoho , Zyxel, Logitech and many more to ensure that our clients adopt the right solutions from the right service provider.', 'Recurring Commission,Transfer Price', 33, 'storage/app/public/uploads/registrations/vidya 2.pdf', 'storage/app/public/uploads/registrations/vidya 1.pdf', '2021-10-12 10:49:31', '2021-10-12 10:49:31'),
(32, 'RBP_21530', '"Cloud Services,Data Center Services,Disaster Recovery,High Availability,Content Delivery,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Storage (Backup, Recovery & Asset Storage)"', NULL, '"Linux,MS Exchange,MS SQL,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are working with our Customer ( India Japan Lighting ) , where customer is looking for Storage Space for 70+ TB Capacity for CCTV Footage.', 'Transfer Price', 34, 'storage/app/public/uploads/registrations/MSL Infotech - RBPP.pdf', 'storage/app/public/uploads/registrations/MSL Infotech-NDA.pdf', '2021-10-13 01:37:32', '2021-10-13 01:37:32'),
(33, 'RBP_01892', '"Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"Linux,MS Exchange,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services"', NULL, 'We are looking forward to associate with Pi Datacenters for the Cloud Adoption and Migration strategies', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 35, 'storage/app/public/uploads/registrations/Origon New RBPP.pdf', 'storage/app/public/uploads/registrations/NDA New Origon.pdf', '2021-10-13 01:39:56', '2021-10-13 01:39:56'),
(34, 'RBP_21908', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Big Data, Analytics, Batch Processing & Business Intelligence (BI)"', NULL, '"SAP,SAP"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Reseller', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 36, 'storage/app/public/uploads/registrations/bill paid reciept.pdf', 'storage/app/public/uploads/registrations/SOC newsletter-2.pdf', '2021-10-13 06:36:46', '2021-10-13 06:36:46'),
(35, 'RBP_06213', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Archieving, Database & Data Warehouse, Dev & Test,High Performance Computing (HPC),Internet of Things (IoT),Storage (Backup, Recovery & Asset Storage)"', NULL, '"Apache,Linux,MS SQL,MySQL,SAP,Oracle DataBase,System Management,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Yotta would like to be a reseller partner to various data center services of PI', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 37, 'storage/app/public/uploads/registrations/YOTTA MSA - DC - Pi-DC - YL_23-07-20.pdf', 'storage/app/public/uploads/registrations/YOTTA MSA - DC - Pi-DC - YL_23-07-20.pdf', '2021-10-14 00:03:11', '2021-10-14 00:03:11'),
(36, 'RBP_79346', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Linux,MS Exchange, Microsoft Share Point,MySQL,SAP,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Vserve is an Microsoft CSP partner which has aligned with most of the Technology companies like Microsoft, Google , Amazon , TATA Communications , Airtel ,Zoho , Zyxel, Logitech and many more to ensure that our clients adopt the right solutions from the right service provider.', 'Recurring Commission,Transfer Price', 38, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21).pdf', '2021-10-14 02:56:00', '2021-10-14 02:56:00'),
(37, 'RBP_26384', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Archieving,High Availability,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"Linux,.NET,MS Exchange,MS SQL,MySQL,System Management,System Integration"', NULL, NULL, '"Assessments,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'DCDR Infra is already onboarded IIT-M Cloud server with pi-cloud and working for few new cases also.', 'Transfer Price', 39, 'storage/app/public/uploads/registrations/RBPP Agreement-DC-DR Infra.pdf', 'storage/app/public/uploads/registrations/NDA -DC-DR Infra.pdf', '2021-10-16 00:07:36', '2021-10-16 00:07:36'),
(38, 'RBP_90587', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Managed Service Provider"', '"Co-Location,Cloud Services,Managed Services,Assessments"', NULL, 'Yotta provides Managed service to customer and would like to be partner with PI for reselling Cloud and infra services to customer', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 40, 'storage/app/public/uploads/registrations/YOTTA MSA - DC - Pi-DC +YLLP - signed.pdf', 'storage/app/public/uploads/registrations/Mutual NDA_Pi_Yotta_Digitally signed_07-0702020 (B&W).pdf', '2021-10-18 00:52:47', '2021-10-18 00:52:47'),
(39, 'RBP_39102', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are looking for a long term business relationship with Pi data center and to provide our customers the esteemed products of Pi data.', 'Recurring Commission,Transfer Price', 41, 'storage/app/public/uploads/registrations/Pi Partner Program.pdf', 'storage/app/public/uploads/registrations/Nondisclosure Agreement.pdf', '2021-10-18 07:23:41', '2021-10-18 07:23:41'),
(40, 'RBP_03571', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Looking for a long time business relationship and extend support to improve our services to our customers', 'Recurring Commission,Transfer Price', 42, 'storage/app/public/uploads/registrations/Pi Partner Program_1.pdf', 'storage/app/public/uploads/registrations/Nondisclosure Agreement_1.pdf', '2021-10-19 23:14:05', '2021-10-19 23:14:05'),
(41, 'RBP_93184', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Archieving,High Availability,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"IBM,Linux,MS Exchange,MS SQL,System Management,System Integration"', NULL, NULL, '"Assessments,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build,Assessments"', NULL, 'Worked already for 1) Solvedge and currently working for few prospects', 'Transfer Price', 43, 'storage/app/public/uploads/registrations/RBPP-FELIX.pdf', 'storage/app/public/uploads/registrations/NDA-FELIX.pdf', '2021-10-21 19:38:35', '2021-10-21 19:38:35'),
(42, 'RBP_53261', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Web & Web Apps"', NULL, '"Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Smartsoft is a leading provider of quality IT infrastructure, ERP and Business Intelligence Solutions by leveraging technology in cost effective manner to solve business problems.When it comes to your IT infrastructure needs, we give you choices based on Smartsoft''s relationships with world-class Vendors -including IBM, SAP Business One, Microsoft, DELL, HP, VMWARE, Citrix, Symantec, Adobe, Oracle, Intel etc.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 44, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21).pdf', '2021-10-25 07:50:17', '2021-10-25 07:50:17'),
(43, 'RBP_59024', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We would like to get co-location space and manage services from the PI data center for esteemed Customers...\nleverage Pi teams skill set to expand our hybrid cloud customer requirements.\nwe are looking at Pi for our focused verticals like SMB, enterprise, Government customers.', 'Recurring Commission', 45, 'storage/app/public/uploads/registrations/Vipuns business registration RBPP rev1.pdf', 'storage/app/public/uploads/registrations/Vipuns-NDA V2.pdf', '2021-10-25 08:05:01', '2021-10-25 08:05:01'),
(44, 'RBP_60172', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability, Database & Data Warehouse, Dev & Test,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"Hadoop,IBM,.NET, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Custom Application Development,Managed Service Provider,Strategic \\/ IT Consulting"', '"Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'Smartsoft is a leading provider of quality IT infrastructure, ERP and Business Intelligence Solutions by leveraging technology in cost effective manner to solve business problems.When it comes to your IT infrastructure needs, we give you choices based on Smartsoft''s relationships with world-class Vendors -including IBM, SAP Business One, Microsoft, DELL, HP, VMWARE, Citrix, Symantec, Adobe, Oracle, Intel etc.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 46, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21).pdf', '2021-10-25 23:19:23', '2021-10-25 23:19:23'),
(45, 'RBP_56418', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Dbrains will be focussing on the existing customer base & will position cloud & colo.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 47, 'storage/app/public/uploads/registrations/RBPP Agreement.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2021-10-27 04:06:31', '2021-10-27 04:06:31'),
(46, 'RBP_62547', '"Cloud Services,Data Center Services,Disaster Recovery,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving, Dev & Test,Mobile,Value (Cost Saving \\/ TCO),Web & Web Apps"', 'Customized Prime ERP', '"Apache,Linux,MS SQL,MySQL,Oracle Apps,Oracle DataBase"', NULL, NULL, '"Assessments,ERP Consulting,Custom Application Development,Managed Service Provider,Strategic \\/ IT Consulting"', '"Cloud Services,Managed Services,Assessments"', NULL, '1. Pentagan Garments for One 1 VM', 'Transfer Price', 48, 'storage/app/public/uploads/registrations/RBPP_Prime.pdf', 'storage/app/public/uploads/registrations/NDA _Prime.pdf', '2021-10-30 02:57:05', '2021-10-30 02:57:05'),
(47, 'RBP_81079', '"Cloud Services,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,High Performance Computing (HPC)"', NULL, '"Apache,Linux,.NET,MS SQL,MySQL,Oracle DataBase"', NULL, NULL, '"Assessments,ERP Consulting,Managed Service Provider,Strategic \\/ IT Consulting"', '"Cloud Services,Managed Services, Data Center Consulting,Assessments"', NULL, '1) 4 Cloud servers already purchased 2) Pentagon Garments (recent case)', 'Transfer Price', 49, 'storage/app/public/uploads/registrations/RBPP-Prime Technologies.pdf', 'storage/app/public/uploads/registrations/NDA _Prime Technologies.pdf', '2021-11-09 01:15:32', '2021-11-09 01:15:32'),
(48, 'RBP_31457', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Linux,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We would like to get co-location space and manage services from the PI data center for esteemed Customers...\nleverage Pi teams skill set to expand our hybrid cloud customer requirements.\nwe are looking at Pi for our focused verticals like SMB, enterprise, Government customers.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 50, 'storage/app/public/uploads/registrations/RBPP VIPUNS 1-Nov-21 With Seal and Sign_V1.pdf', 'storage/app/public/uploads/registrations/NDA-Vipuns 01-NOV-2021 with Seal.pdf', '2021-11-10 03:20:23', '2021-11-10 03:20:23'),
(49, 'RBP_04569', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'As a 3 star tally authorised implementation partners, we deal with medium and large enterprises clients for their accounting implementation and maintenance software.\nWe came across few enquires related to cloud, we would like to associate with your company mutual benefit.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 51, 'storage/app/public/uploads/registrations/Pi RBP.pdf', 'storage/app/public/uploads/registrations/Pi NDA.pdf', '2021-11-12 02:18:05', '2021-11-12 02:18:05'),
(50, 'RBP_08547', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Digital Marketing,Managed Service Provider"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'EC services is basically into consultancy of Logistics  & IT based services for more than 20 years in Tamilnadu. looking for a CSP to enhance our business.', 'Recurring Commission,One-Time Referral Bonus', 52, 'storage/app/public/uploads/registrations/RBP-Agreement-EC Service.pdf', 'storage/app/public/uploads/registrations/NDA-Agreement-EC Service.pdf', '2021-11-13 00:38:23', '2021-11-13 00:38:23'),
(51, 'RBP_18679', '"Cloud Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Internet of Things (IoT),Storage (Backup, Recovery & Asset Storage)"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are into Software consulting and services we  want  to have a tie-up with PI for  cloud services', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 53, 'storage/app/public/uploads/registrations/PI PARTNER PROGRAM -AGREEMENT.pdf', 'storage/app/public/uploads/registrations/PI PARTNER PROGRAM  -AGREEMENT.pdf', '2021-11-15 06:41:32', '2021-11-15 06:41:32'),
(52, 'RBP_51937', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Linux,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,System Management,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Custom Application Development,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Business Growth', 'Recurring Commission', 54, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2021-11-22 02:26:58', '2021-11-22 02:26:58'),
(53, 'RBP_21705', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'As a consultancy we deal with many clients in different verticals, DC services is one the services', 'Recurring Commission,One-Time Referral Bonus', 55, 'storage/app/public/uploads/registrations/RBP-EC Service.pdf', 'storage/app/public/uploads/registrations/NDA-EC Service 2.pdf', '2021-11-23 02:17:33', '2021-11-23 02:17:33'),
(54, 'RBP_58301', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"IBM,Linux,.NET,MS SQL,MySQL,SAP,SAP,Oracle DataBase,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Cloud Yari is a Cloud and Managed Service partner. Having huge connect across india', 'Recurring Commission,One-Time Referral Bonus', 56, 'storage/app/public/uploads/registrations/Cloud Yari Agreement.pdf', 'storage/app/public/uploads/registrations/Cloud Yari NDA.pdf', '2021-11-24 01:55:53', '2021-11-24 01:55:53'),
(55, 'RBP_31046', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI), Database & Data Warehouse,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Web & Web Apps"', NULL, '"Others"', 'Sales', NULL, '"Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Have closed many colocation, Disaster Recovery, Cloud, Managed Services, Internet & all hosting services for clients.', 'Recurring Commission', 57, 'storage/app/public/uploads/registrations/Registered_Business_Partner_Program_Agreement.pdf', 'storage/app/public/uploads/registrations/NON-DISCLOSURE_AGREEMENT_Pi_Partner_Program.pdf', '2021-11-24 06:24:51', '2021-11-24 06:24:51'),
(56, 'RBP_72865', '"Cloud Services,Data Center Services,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Other,Archieving,High Availability, Dev & Test,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"IBM,Linux,.NET,MS Exchange,MS SQL,MySQL,System Management,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Working for 1) IPI India Pvt Ltd - DR 2) Steel 1 India for SAP DR', 'Transfer Price', 58, 'storage/app/public/uploads/registrations/RBPP Agreement-Dev Systems.pdf', 'storage/app/public/uploads/registrations/NDA -Final_Dev Systems.pdf', '2021-11-24 23:42:29', '2021-11-24 23:42:29'),
(57, 'RBP_79032', '"Cloud Services,Business Applications - Microsoft,Archieving,High Availability,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,System Management,System Integration"', NULL, NULL, '"Assessments,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, '1) Currently working for renowned institutions and university for IT with Cloud.', 'Transfer Price', 59, 'storage/app/public/uploads/registrations/RBPP Agreement-Networks.pdf', 'storage/app/public/uploads/registrations/NDA -Networks.pdf', '2021-11-29 23:03:17', '2021-11-29 23:03:17');
INSERT INTO `partnertechinfos` (`id`, `partner_ref_no`, `use_case_expertise`, `use_case_expertise_other`, `technology_expertise`, `technology_expertise_other`, `professional_services_offered_other`, `professional_services_offered`, `interested_ser_prod_at_pi`, `interested_ser_prod_at_pi_other`, `busi_case_brief`, `partner_type`, `partner_id`, `agreement_doc`, `nda_doc`, `created_at`, `updated_at`) VALUES
(58, 'RBP_69480', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'Focused on Cloud Infrastructure, Enterprise Security, RPA, Managed Services and Training, Accel IT Services has evolved into a dependable and long-term digital transformation partner for discerning enterprise customers.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 61, 'storage/app/public/uploads/registrations/Pi Partner program Agreement.pdf', 'storage/app/public/uploads/registrations/Non Disclosure Agreement.pdf', '2021-11-30 00:03:24', '2021-11-30 00:03:24'),
(59, 'RBP_53684', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'Focused on Cloud Infrastructure, Enterprise Security, RPA, Managed Services and Training, Accel IT Services has evolved into a dependable and long-term digital transformation partner for discerning enterprise customers', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 62, 'storage/app/public/uploads/registrations/Pi Partner program Agreement - Final approved.pdf', 'storage/app/public/uploads/registrations/Non Disclosure Agreement.pdf', '2021-11-30 06:22:27', '2021-11-30 06:22:27'),
(61, 'RBP_05749', '"Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"IBM,Linux,MS Exchange, Microsoft Share Point,MS SQL,MySQL,Oracle Apps,Oracle DataBase,Oracle Middleware,System Management,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Custom Application Development,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'By engaging with the best cloud infrastructure service provider company, you will substantially expand your Cloud platform and unleash a potential you could never have before comprehended because it takes real experts to work the magic.\nOrisenc Technologies India is a team of cloud infrastructure technicians who are highly skilled and experienced in industry-leading cloud platforms.\nWe’ve been supporting enterprises across the country to use the cloud platform in the best possible way.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 64, 'storage/app/public/uploads/registrations/Orisenc RBPP Agreement-New.pdf', 'storage/app/public/uploads/registrations/Orisenc NDA -New.pdf', '2021-11-30 07:41:10', '2021-11-30 07:41:10'),
(62, 'RBP_48976', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Others"', 'Sales', NULL, '"Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'IDC INDIA Started in 2009 for supporting Large Indian & Multinationals to help in their IT Infrastructure, Cloud, Datacenter & System Integration services.\nWe have a huge client database & have been strategically consulting them for the IT Requirements', 'Recurring Commission', 65, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21) (1).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21) (1).pdf', '2021-12-01 05:40:47', '2021-12-01 05:40:47'),
(63, 'RBP_47063', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Others"', 'Sales & Marketing', NULL, '"Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'IDC INDIA started in 2009 with the objective of support large Indian & Multinational organisations in the IT Infrastructure Setup.\nWe are been selling Cloud, Colocation, Datacenters, Managed Services to our Clients.\nWe have a Large Client Base across India.', 'Recurring Commission', 66, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21) (1).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21) (1).pdf', '2021-12-01 05:56:59', '2021-12-01 05:56:59'),
(64, 'RBP_95048', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability, Database & Data Warehouse, Dev & Test,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache,JBOSS,.NET, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'FinTech Software & IT Service one of the fastest growing Information Technology company with more than decade of history in providing IT Consulting & Managed IT Services to medium and large enterprise."', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 67, 'storage/app/public/uploads/registrations/RBPP Agreement_pi & FinTech.pdf', 'storage/app/public/uploads/registrations/NDA_Pi & FinTech.pdf', '2021-12-01 22:21:46', '2021-12-01 22:21:46'),
(65, 'RBP_17856', '"Cloud Services,Data Center Services,Business Applications - Microsoft,Business Applications - Other,High Availability,Digital Marketing,Internet of Things (IoT),Mobile,Security & Compliance,Value (Cost Saving \\/ TCO)"', NULL, '"Linux,SAP,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'SR TECHNO GROUP is a leading systems integration company in India, offering IT Infrastructure design, development, Implementation services and IT infrastructure asset- Management segments through turnkey projects of national importance.  \nWE are hoping to became part of pi business partner it will be add on to our services to customers.', 'One-Time Referral Bonus', 68, 'storage/app/public/uploads/registrations/PI RBPP Agreement-Final SCAN.pdf', 'storage/app/public/uploads/registrations/pi NDA.pdf', '2021-12-02 00:37:04', '2021-12-02 00:37:04'),
(66, 'RBP_49153', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Nature Of Business : Software Development, Education, International Real-Estate Consulting/Developers, DSA, Investor Advisory and Food Manufacturing.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 70, 'storage/app/public/uploads/registrations/Business Partnership Pi Data Center and Zion Technologies Solutions.pdf', 'storage/app/public/uploads/registrations/NDA Pi Data Center and Zion Technologies Solutions.pdf', '2021-12-03 06:24:26', '2021-12-03 06:24:26'),
(67, 'RBP_09867', '"Cloud Services,Data Center Services,Digital Marketing,Web & Web Apps"', NULL, '"Apache,Linux,.NET,MySQL"', NULL, NULL, '"Cloud Migration Services,Digital Marketing,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'As a Digital Agency Partner, We provide all kind of Web Development Services/ Mobile Applications to our clients, so we are partnering with Pi DATA CENTERS for better customer service & relationship with the DATACENTER Local Presence.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 71, 'storage/app/public/uploads/registrations/RBPP Digital Verto.pdf', 'storage/app/public/uploads/registrations/NDA Digital Verto.pdf', '2021-12-04 04:06:39', '2021-12-04 04:06:39'),
(68, 'RBP_04538', '"Cloud Services,Data Center Services"', NULL, '"MySQL,SAP"', NULL, 'mainly into Tally implemetatiom', '"ERP Consulting,Others"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are into Tally implementation partners with a client base of 500 across AP looking for cloud partner permanently', 'Recurring Commission,One-Time Referral Bonus', 72, 'storage/app/public/uploads/registrations/CGAS-RBP_compressed.pdf', 'storage/app/public/uploads/registrations/CGAS - NDA_compressed.pdf', '2021-12-04 06:58:04', '2021-12-04 06:58:04'),
(69, 'RBP_30248', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,Oracle Apps,Oracle DataBase,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We would like to extend a business partnership proposal with your prestigious company. We strongly feel that partnership will be mutually beneficial to both the companies \r\nOur team excels in handing different marketing techniques which are helpful for you to grow. We firmly believe that this business partnership will prove to be a wonderful opportunity for both the companies.', 'Recurring Commission', 73, 'storage/app/public/uploads/registrations/RBPP Agreement- Innofeast (1) (1).pdf', 'storage/app/public/uploads/registrations/NDA - Innofeast (1).pdf', '2021-12-07 06:02:00', '2021-12-07 06:02:00'),
(70, 'RBP_93601', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Authorised Channel partner for all telecom service providers  like Airtel, Vodafone, TATA, Jio. Overall 12 years of experience in running channel partner with all Telecom B2B segment\nHaving Clients in all category Manufacturing, Corporate, SME Enterprise, IT, BPO''s & Call Centre''s etc.\nIndia Mart Business Channel Partner (B2B Sales)\nTotal 5 Branch offices in Bangalore, equipped with 2000 Square feet with Manpower of 100 BDM on Field.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 74, 'storage/app/public/uploads/registrations/register buisness partner.pdf', 'storage/app/public/uploads/registrations/non disclosure agreement.pdf', '2021-12-07 06:45:28', '2021-12-07 06:45:28'),
(71, 'RBP_51043', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability, Database & Data Warehouse, Dev & Test,Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"IBM,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,Oracle Apps,Oracle DataBase,System Management,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Custom Application Development,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We act as a catalyst by empowering businesses to scale new heights. We offer tailor made solutions with complete cyber security to get optimum utilization and maximum benefit from existing IT infrastructure and if required with some additional infrastructure. We have an entire range of IT and cyber security solutions at our disposal for any vertical.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 75, 'storage/app/public/uploads/registrations/Devdatta RBP.pdf', 'storage/app/public/uploads/registrations/Devdatta NDA.pdf', '2021-12-07 09:41:06', '2021-12-07 09:41:06'),
(72, 'RBP_37621', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"IBM,Linux,.NET,MS SQL,MySQL,Oracle DataBase,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'cloud service and managed service partner', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 76, 'storage/app/public/uploads/registrations/RBPP Agreement - UI SOLUTIONS.pdf', 'storage/app/public/uploads/registrations/NDA - UI SOLUTIONS.pdf', '2021-12-11 03:10:06', '2021-12-11 03:10:06'),
(73, 'RBP_20934', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Archieving,High Availability,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Ampler Technologies as end to end IT solution provider would link to offer our customer best in class along with cost effective solution which can address our customer pain areas in managing IT infra.\nWe believe partnering with PI we will enable our self with cloud base solutions which our customers looking for.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 77, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA (1).pdf', '2021-12-14 23:30:20', '2021-12-14 23:30:20'),
(74, 'RBP_42531', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,High Availability,Content Delivery, Database & Data Warehouse,Digital Marketing,Storage (Backup, Recovery & Asset Storage),Web & Web Apps"', NULL, '"SAP,SAP,Oracle DataBase,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are Cloud Consulting Company working on Multi cloud and would like to work with PI on cloud, colo and managed services.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 78, 'storage/app/public/uploads/registrations/Pi - CLOUD MINDS AGREEMENT.pdf', 'storage/app/public/uploads/registrations/Pi- CLOUD MINDS NDA.pdf', '2021-12-15 00:02:25', '2021-12-15 00:02:25'),
(75, 'RBP_01837', '"Cloud Services,Data Center Services,Disaster Recovery,High Availability, Dev & Test,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"IBM,Linux,MS Exchange, Microsoft Share Point,MS SQL,MySQL,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'Looking to improve colocation business', 'Recurring Commission', 79, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21)_Locuz.pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21)_Locuz.pdf', '2021-12-15 00:31:47', '2021-12-15 00:31:47'),
(76, 'RBP_19426', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Business Applications - Other, Database & Data Warehouse,Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"IBM,Oracle Apps,Oracle DataBase,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Data center setup and Operations and Maintenance for Government organization.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 80, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21).pdf', '2021-12-17 06:04:31', '2021-12-17 06:04:31'),
(77, 'RBP_68357', '"Cloud Services,Data Center Services,Disaster Recovery,High Availability,High Performance Computing (HPC)"', NULL, '"System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Increase revenue', 'Recurring Commission', 81, 'storage/app/public/uploads/registrations/RBPP_PI DATA CENTRE.pdf', 'storage/app/public/uploads/registrations/NDA_PI DATA CENTRE.pdf', '2021-12-21 22:50:52', '2021-12-21 22:50:52'),
(78, 'RBP_05174', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Very much Interested in Partnering with Pi Cloud services and Managed Services.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 82, 'storage/app/public/uploads/registrations/RBPP agreement EastOrigin.pdf', 'storage/app/public/uploads/registrations/NDA EastOrigin.pdf', '2021-12-23 07:13:45', '2021-12-23 07:13:45'),
(79, 'RBP_98207', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We wanted to have Partnership with Datacenter services provider to fulfill our Client requirements.', 'Recurring Commission', 83, 'storage/app/public/uploads/registrations/RBPP Agreement - Signed.pdf', 'storage/app/public/uploads/registrations/NDA - Signed.pdf', '2021-12-28 01:50:11', '2021-12-28 01:50:11'),
(80, 'RBP_08536', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache,IBM,Linux,.NET,MySQL,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We will update you soon about the business case.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 84, 'storage/app/public/uploads/registrations/Pi DC Agreement.pdf', 'storage/app/public/uploads/registrations/Pi DC NDA.pdf', '2021-12-29 03:46:17', '2021-12-29 03:46:17'),
(81, 'RBP_62084', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Consulting, Network Design and Implementation', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 85, 'storage/app/public/uploads/registrations/Pi Partner Program Registered Business Partner Program Agreement 2.pdf', 'storage/app/public/uploads/registrations/Pi Partner Program Non Disclosure Agreement.pdf', '2021-12-30 06:46:35', '2021-12-30 06:46:35'),
(82, 'RBP_73489', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Business Applications - Other,Archieving,High Availability,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"MS Exchange, Microsoft Share Point,MS SQL,MySQL,System Management,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build,Assessments"', NULL, 'we will work on  case to case  for preferred pay out model', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 86, 'storage/app/public/uploads/registrations/PI Data Agreement.pdf', 'storage/app/public/uploads/registrations/PI Data NDA Form.pdf', '2022-01-05 05:45:17', '2022-01-05 05:45:17'),
(83, 'RBP_72468', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'SI, Networking', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 87, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA File.pdf', '2022-01-06 09:33:17', '2022-01-06 09:33:17'),
(84, 'RBP_74019', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'I am into marketing and would like to see how the portal works for any other upgrades or additions.', 'Recurring Commission', 88, 'storage/app/public/uploads/registrations/KGN Invoice 2891 (1).pdf', 'storage/app/public/uploads/registrations/JAAHNAVI CAR BILLS.pdf', '2022-01-10 23:58:40', '2022-01-10 23:58:40'),
(85, 'RBP_57320', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"System Management"', NULL, NULL, '"Strategic \\/ IT Consulting"', '"Cloud Services,Managed Services"', NULL, 'Trust IT Solutions is a reliable source for Network Consulting Services, Enterprise Networking Solutions and Network Management Services in Hyderabad. Our motto is to provide a top quality service at an affordable price for our clients.', 'Recurring Commission,Transfer Price', 90, 'storage/app/public/uploads/registrations/PI .pdf', 'storage/app/public/uploads/registrations/PI 2 .pdf', '2022-01-11 08:38:40', '2022-01-11 08:38:40'),
(86, 'RBP_05314', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'SDWAN  for Trent , cloud services for nkgsb bank', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 91, 'storage/app/public/uploads/registrations/RBPP_Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-01-21 03:24:07', '2022-01-21 03:24:07'),
(87, 'RBP_51096', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'SDWAN Solution for trent company & cloud services to Nkgsb bank', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 92, 'storage/app/public/uploads/registrations/RBPP_Agreement.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-01-21 04:33:05', '2022-01-21 04:33:05'),
(88, 'RBP_81036', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We have closed cloud Solutions for Attabot Software , we have closed Colocation for SAP DC of Supreme Petrochem also we have closed Cloud requirement of Accelpix . Now we are working on 300VM requirement of MCGM .', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 93, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21)-Signed.pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21)-Signed.pdf', '2022-01-24 07:32:03', '2022-01-24 07:32:03'),
(89, 'RBP_63897', '"Cloud Services,Data Center Services,Disaster Recovery,Archieving,High Availability, Database & Data Warehouse,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'Master Services is an IBM Business Partner and IBM Warranty Service Provider Company in Kolhapur. We are just not box sellers but solution providers working since 1993', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 94, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-01-26 08:37:53', '2022-01-26 08:37:53'),
(90, 'RBP_51497', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'Master Services is an IBM Business Partner and IBM Warranty Service Provider Company in Kolhapur. We are just not box sellers but solution providers working since 1993.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 95, 'storage/app/public/uploads/registrations/rrbp rEVISED.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-01-28 02:55:12', '2022-01-28 02:55:12'),
(91, 'RBP_72583', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Storage (Backup, Recovery & Asset Storage)"', NULL, '"Linux,MS Exchange,MS SQL,MySQL,SAP,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Planning for cloud and managed service business with Pi', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 96, 'storage/app/public/uploads/registrations/RBPP Agreement-Servedesk Services - Seal & Signed Copy.pdf', 'storage/app/public/uploads/registrations/NDA -Servedesk Services - Seal & Signed Copy.pdf', '2022-01-29 02:28:35', '2022-01-29 02:28:35'),
(92, 'RBP_47160', '"Cloud Services,Data Center Services,High Availability,Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"System Integration"', NULL, NULL, '"Strategic \\/ IT Consulting"', '"Cloud Services,Managed Services, Data Center Consulting"', NULL, 'Partnership with Pidata will help us position the right solution and enables customer to move towards the next gen Solutions and adopt cloud.', 'Transfer Price', 97, 'storage/app/public/uploads/registrations/RBPP-PiData-compressed.pdf', 'storage/app/public/uploads/registrations/PiData-NDA-compressed.pdf', '2022-02-10 10:58:50', '2022-02-10 10:58:50'),
(93, 'RBP_34291', '"Cloud Services,Data Center Services,High Availability,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"IBM,Linux,MS Exchange,SAP,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We provide cloud service (Microsoft and AWS) and look forward to get associated with Pi data center for collocated and co hosting services.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 98, 'storage/app/public/uploads/registrations/RBPP Agreement GKS.pdf', 'storage/app/public/uploads/registrations/NDA GKS Pi.pdf', '2022-02-15 06:08:25', '2022-02-15 06:08:25'),
(94, 'RBP_49270', '"Cloud Services,Data Center Services, Database & Data Warehouse,Storage (Backup, Recovery & Asset Storage)"', NULL, '"IBM,Linux,MS Exchange,SAP"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Managed Service Provider"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We provide cloud services. Would like to be associated with you', 'Transfer Price', 99, 'storage/app/public/uploads/registrations/RBPP Agreement GKS.pdf', 'storage/app/public/uploads/registrations/NDA GKS Pi.pdf', '2022-02-16 01:04:00', '2022-02-16 01:04:00'),
(95, 'RBP_95461', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache,IBM,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are looking for a good partnership with Pi. Looking for Distribution sales in Kerala Market.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 100, 'storage/app/public/uploads/registrations/RBPP Agreement- Pi Datacenter-IRZ.pdf', 'storage/app/public/uploads/registrations/NDA -Pi Datacenter-IRZ.pdf', '2022-02-19 09:53:39', '2022-02-19 09:53:39'),
(96, 'RBP_83547', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, '.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 102, 'storage/app/public/uploads/registrations/RBPP Agreement-Final-Cyberace-180222.pdf', 'storage/app/public/uploads/registrations/NDA -Final-Cyberace-180222.pdf', '2022-02-23 00:38:10', '2022-02-23 00:38:10'),
(97, 'RBP_42183', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"JBOSS,Linux,MS SQL,SAP,SAP,Oracle DataBase,System Integration"', NULL, NULL, '"Assessments,Cloud Migration Services,Managed Service Provider"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Data center', 'Recurring Commission,Transfer Price', 103, 'storage/app/public/uploads/registrations/Agreement.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-03-11 06:03:12', '2022-03-11 06:03:12'),
(98, 'RBP_94587', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Big Data, Analytics, Batch Processing & Business Intelligence (BI),High Availability, Database & Data Warehouse,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"IBM,MS Exchange,MS SQL,MySQL,Oracle DataBase,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'SI', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 104, 'storage/app/public/uploads/registrations/Agreement.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-03-11 07:49:31', '2022-03-11 07:49:31'),
(99, 'RBP_47985', '"Cloud Services,Disaster Recovery,High Availability,High Performance Computing (HPC),Mobile,Security & Compliance,Web & Web Apps"', NULL, '"Apache,Linux,MySQL,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'TechBrein is an Information Technology company that has been operating in India since 2006. Over the years, we have had the privilege to be the IT partner of various businesses from diverse industries and help them simplify their business operations as well as achieve their business goals by furnishing them with cost-effective digital services.\r\n\r\nOur Services\r\nLinux Sever Management\r\nServer Monitoring \r\nTechnical Support\r\nCloud Setup and Management\r\nCloud Consultation\r\nCloud Design Services', 'Recurring Commission', 105, 'storage/app/public/uploads/registrations/RBPR_Agreement.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-03-29 03:37:02', '2022-03-29 03:37:02'),
(100, 'RBP_69028', '"Others"', 'SUPPLIER', '"System Integration"', NULL, NULL, '"Managed Service Provider"', '"Data Center Build"', NULL, 'MANUFACTURER OF RACKS,ENCLOSURE, MCC PANEL, CONTROL DESK, VIDEOWALL', 'Recurring Commission,Transfer Price', 106, 'storage/app/public/uploads/registrations/RBPP AGREEMENT.pdf', 'storage/app/public/uploads/registrations/NDA AGREEMENT.pdf', '2022-04-02 01:56:32', '2022-04-02 01:56:32');
INSERT INTO `partnertechinfos` (`id`, `partner_ref_no`, `use_case_expertise`, `use_case_expertise_other`, `technology_expertise`, `technology_expertise_other`, `professional_services_offered_other`, `professional_services_offered`, `interested_ser_prod_at_pi`, `interested_ser_prod_at_pi_other`, `busi_case_brief`, `partner_type`, `partner_id`, `agreement_doc`, `nda_doc`, `created_at`, `updated_at`) VALUES
(101, 'RBP_20349', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'CloudCorner Solutions is the partner of choice in the region and we provide cost effective solutions to automate business processes across various industry verticals such as Manufacturing, CPG & FMCG, Trading, Retail, Healthcare, Engineering, Construction, and Operations, Higher Education, etc.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 108, 'storage/app/public/uploads/registrations/RBPP Cloud Corner Solution Pvt Ltd.pdf', 'storage/app/public/uploads/registrations/NDA Cloud Corner Solution Pvt Ltd.pdf', '2022-04-05 05:40:25', '2022-04-05 05:40:25'),
(102, 'RBP_31645', '"Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,High Availability, Database & Data Warehouse"', NULL, '"Hadoop,Linux,MS SQL,MySQL,SAP,SAP,Oracle DataBase,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Custom Application Development,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Managed Services, Data Center Consulting"', NULL, 'The use case Will be defined as follows: 1. We will identify the accounts in which Pi DC competition is present and hosting their SAP and non SAP workloads.  \n2. We will position the offerings of Pi DC in those accounts and propose the solutions with the help of Pi account management team.\n3. We will win those accounts, post nurturing those accounts and getting the confidence of the client. \n4. We will service them in such a way that we get the CSAT more than or equal to 9.', 'Recurring Commission,Transfer Price', 109, 'storage/app/public/uploads/registrations/RBPP Agreement.pdf', 'storage/app/public/uploads/registrations/NDA_RBPP Partners.pdf', '2022-04-29 03:54:18', '2022-04-29 03:54:18'),
(103, 'RBP_98260', '"Cloud Services,Data Center Services,Disaster Recovery,High Availability,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"MS SQL,MySQL,SAP,Oracle Apps,System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'we want to become Partner with PI Datacenters to bring in the New Opportunities of Cloud & DC', 'Recurring Commission,Transfer Price', 110, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-06-08 01:26:10', '2022-06-08 01:26:10'),
(104, 'RBP_16390', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services"', NULL, 'We want to part', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 111, 'storage/app/public/uploads/registrations/R22 - Global Hyperscale Data Center Market Sample Report.pdf', 'storage/app/public/uploads/registrations/Programme Outline Cloud Summit 2022.pdf', '2022-06-13 03:13:52', '2022-06-13 03:13:52'),
(105, 'RBP_37215', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'MSR Projects is having Client base into Pharma,Sea food ,manufacturing and IT industries', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 112, 'storage/app/public/uploads/registrations/pi partnership with MSR _compressed.pdf', 'storage/app/public/uploads/registrations/NDA with pi MSR projects _compressed.pdf', '2022-06-13 06:43:43', '2022-06-13 06:43:43'),
(106, 'RBP_94760', '"Cloud Services,Content Delivery,Others"', 'AZURE', '"System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services"', '"Co-Location,Cloud Services"', NULL, 'Coding School\r\nVaibhav Jewellery', 'Recurring Commission', 113, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-08-04 07:43:24', '2022-08-04 07:43:24'),
(107, 'RBP_80615', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Big Data, Analytics, Batch Processing & Business Intelligence (BI),High Performance Computing (HPC),Storage (Backup, Recovery & Asset Storage)"', NULL, '"Hadoop,MS Exchange,SAP,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Custom Application Development,Managed Service Provider"', '"Co-Location,Cloud Services,Managed Services, Data Center Build"', NULL, 'ABC is a not a company i am doing the testing of onboarding of partner registration.', 'Recurring Commission', 114, 'storage/app/public/uploads/registrations/VR 1.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-08-08 00:27:38', '2022-08-08 00:27:38'),
(108, 'RBP_51309', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Other, Database & Data Warehouse,Digital Marketing,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We want to partner with your organization for co location , SAP , Cloud , Enterprise & GeM business', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 115, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-08-10 03:21:48', '2022-08-10 03:21:48'),
(109, 'RBP_58327', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"IBM,Linux,.NET,MySQL,SAP,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'System Integrator of Jaypee group', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 119, 'storage/app/public/uploads/registrations/BPP Agreement PI n JILIT 14092022.pdf', 'storage/app/public/uploads/registrations/NDA JILIT PI 14092022.pdf', '2022-09-16 01:47:26', '2022-09-16 01:47:26'),
(110, 'RBP_46957', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Big Data, Analytics, Batch Processing & Business Intelligence (BI),High Availability"', NULL, '"Hadoop,IBM,JBOSS,Linux,MySQL,SAP,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Custom Application Development,Managed Service Provider"', '"Co-Location,Cloud Services, Data Center Build, Data Center Consulting"', NULL, 'Looking forward for working in colocation & cloud PAN india', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 121, 'storage/app/public/uploads/registrations/BPP Agreement PI n JILIT 14092022.pdf', 'storage/app/public/uploads/registrations/NDA JILIT PI 14092022.pdf', '2022-09-16 04:13:33', '2022-09-16 04:13:33'),
(111, 'RBP_40628', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Other,High Availability,Content Delivery,Digital Marketing,Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Web & Web Apps"', NULL, '".NET,MS Exchange,MySQL,Oracle DataBase,System Integration"', NULL, NULL, '"Cloud Migration Services,Digital Marketing,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services"', NULL, 'Vaibhav Jewelers\r\nCoding School\r\nPulse Pharma', 'Recurring Commission', 122, 'storage/app/public/uploads/registrations/RBPP.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2022-09-29 01:44:21', '2022-09-29 01:44:21'),
(112, 'RBP_46157', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Business Applications - Other,High Availability,Content Delivery, Database & Data Warehouse,Digital Marketing,Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"System Management,System Integration"', NULL, NULL, '"Cloud Migration Services,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'we are  having team of experts who provides consulting to the organizations for their IT infra and telecom infra.\r\nNexgen is into telecom industry since last 7 yrs and serves several organizations to optimize IT and infra costs.\r\nwe are serving  50+ enterprise customers  for their hardware and AMC.\r\nour team of experts having deep knowledge of Delhi NCR market and we are looking for a long term association with Pi to explore the cloud market and get the maximum befits of our database.', 'Recurring Commission', 123, 'storage/app/public/uploads/registrations/RBPP PI Agreement.pdf', 'storage/app/public/uploads/registrations/NDA PIE agreement.pdf', '2022-09-29 05:57:53', '2022-09-29 05:57:53'),
(113, 'RBP_17480', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Other,High Availability,Content Delivery, Database & Data Warehouse,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"Apache,IBM,Linux,.NET,MS SQL,MySQL,SAP,SAP,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are one of the leading system integrators and IT infrastructure development company in this particular region. As per the new standards, most of the clients are opting cloud based solutions over an hardware equipment installed in their premise considering the cost and criticality. So we need a strong CSP support to continue our business as per todays standards and requirements.', 'Recurring Commission', 124, 'storage/app/public/uploads/registrations/RBPP Agreement.pdf', 'storage/app/public/uploads/registrations/NDA Agreement.pdf', '2022-10-12 07:01:18', '2022-10-12 07:01:18'),
(114, 'RBP_53142', '"Cloud Services,Disaster Recovery,High Availability,Web & Web Apps"', NULL, '".NET,MS SQL"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services"', NULL, 'We provide IT consultancy service on IT infrastructure, ERP Applications and Cloud Solutions.', 'Recurring Commission', 125, 'storage/app/public/uploads/registrations/PI data - RBPP agreement.pdf', 'storage/app/public/uploads/registrations/PI data - NDA.pdf', '2022-10-19 02:52:16', '2022-10-19 02:52:16'),
(115, 'RBP_25809', '"Cloud Services,Web & Web Apps"', NULL, '".NET,MS SQL"', NULL, NULL, '"ERP Consulting,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services"', NULL, 'We provide IT infrastructure consultancy, ERP consultancy, IT Auditing, etc.', 'Recurring Commission', 126, 'storage/app/public/uploads/registrations/PI data - RBPP agreement.pdf', 'storage/app/public/uploads/registrations/PI data - NDA.pdf', '2022-10-19 06:47:11', '2022-10-19 06:47:11'),
(116, 'RBP_18563', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Archieving,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"MS Exchange"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build"', NULL, 'HI,\r\n\r\nTeam we are partnering with you to extend our product portfolio offerings.\r\n\r\n\r\nRegards,', 'Recurring Commission', 127, 'storage/app/public/uploads/registrations/RBPP Agreement - _2022-23_ _1_.pdf', 'storage/app/public/uploads/registrations/NDA Agreement _2022-23_.pdf', '2022-11-09 04:39:22', '2022-11-09 04:39:22'),
(117, 'RBP_30914', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'WORKING ON FIN TECH INDUSTRY,, HEALTH AND PHARMA,,EDUCATION SECTOR', 'Recurring Commission', 128, 'storage/app/public/uploads/registrations/RBPP SIGNED AGREMEENT.pdf', 'storage/app/public/uploads/registrations/NDA SIGNED.pdf', '2022-11-18 10:03:33', '2022-11-18 10:03:33'),
(118, 'RBP_09471', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'WORKING ON FIN TECH INDUSTRY,, HEALTH AND PHARMA,,EDUCATION SECTOR', 'Recurring Commission', 129, 'storage/app/public/uploads/registrations/RBPP SIGNED AGREMEENT.pdf', 'storage/app/public/uploads/registrations/NDA SIGNED.pdf', '2022-11-18 23:30:57', '2022-11-18 23:30:57'),
(119, 'RBP_12536', '"Cloud Services"', NULL, '"Apache"', NULL, NULL, '"Assessments"', '"Cloud Services"', NULL, 'Sunil was the founder of Bitkemy. Sunil was a serial Entrepreneur and had been involved with multiple mobile and internet start-ups.', 'Recurring Commission', 130, 'storage/app/public/uploads/registrations/2010catalog.pdf', 'storage/app/public/uploads/registrations/2010catalog.pdf', '2023-05-23 01:05:16', '2023-05-23 01:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alliances@cloudfence.ai', 'RgzdQfJMTf', '2021-09-15 00:11:21'),
('alliances@cloudfence.ai', '3dYRF1XK7g', '2021-09-15 00:22:34'),
('murali@vipuns.com', 'pzDkLiHRSd', '2021-09-23 04:49:34'),
('murali@vipuns.com', 'UXxhjfgyJU', '2021-09-23 05:13:10'),
('murali@vipuns.com', 'HKhfnMJIqo', '2021-09-25 11:47:26'),
('Alliances@cloudfence.ai', 'Wb6AIULh3c', '2021-10-01 02:43:49'),
('admin@sceptrebusiness.com', 'Gq9mKIGQBs', '2021-10-04 05:18:31'),
('MPATIL@YOTTA.COM', 'zLchcEZkgl', '2021-10-18 00:18:50'),
('suresh@tracenetwork.in', 'cb49Jc0Os6', '2021-10-27 03:42:53'),
('jmk@probitytech.com', 'hxGOqJBJnk', '2021-11-10 04:52:59'),
('jmk@probitytech.com', 'b8upzCxPRs', '2021-11-10 05:00:37'),
('jmk@probitytech.com', 'mGRYUuaJSB', '2021-11-10 22:41:47'),
('bdm@tatvaindia.in', 'ymINNLjWyz', '2021-11-22 02:27:54'),
('danish@innofeast.in', 'oniskUASyb', '2021-12-17 05:45:02'),
('danish@innofeast.in', '3CCf5IOpMt', '2021-12-17 05:46:36'),
('OEMsupport@accelits.com', 'eiDuZ9Ho1P', '2021-12-20 00:25:05'),
('OEMsupport@accelits.com', 'IrHxiqd8gP', '2021-12-20 00:28:41'),
('OEMsupport@accelits.com', 'y8slEHHxrQ', '2021-12-20 00:36:02'),
('rajendran@felixinfotech.com', '9LTiQCwD3Q', '2021-12-20 05:16:26'),
('raj.g@servedesk.in', 'xsiuACgQd3', '2022-01-11 23:03:41'),
('oemsupport@accelits.com', 'A56PHAEzUH', '2022-01-25 00:42:44'),
('admin@masterservices.co.in', 'BhEfmX4DxH', '2022-01-31 06:51:37'),
('jmk@probitytech.com', '15jo8Xt8Iw', '2022-02-07 00:59:41'),
('nitin@idcindia.biz', '3h6uvtizEQ', '2022-02-09 10:52:31'),
('amit.vora@dynacons.com', 'pIuE3ejh7w', '2022-03-04 00:17:18'),
('amit.vora@dynacons.com', 'LZqE3pbIOb', '2022-03-07 06:54:27'),
('srinivas.sriram.om@tatatel.co.in', 'PdLXSn7Cnt', '2022-03-19 03:18:54'),
('bidmanagement@pidatacenters.com', 'fCb7pwTxOH', '2022-04-18 05:09:38'),
('bidmanagement@pidatacenters.com', '3UHmRPipk8', '2022-04-18 05:10:09'),
('bidmanagement@pidatacenters.com', '1gXvK7ynzz', '2022-04-18 05:11:06'),
('raju@msrinfraprojects.com', '0iwVnznXhZ', '2022-06-13 06:45:00'),
('reddy.b@ampler.in', 'JHdcZ7YtgC', '2022-06-16 23:35:51'),
('reddy.b@ampler.in', 'bzxFOhKiEy', '2022-06-16 23:37:10'),
('reddy.b@ampler.in', 'WA1ZCFeD9q', '2022-06-16 23:57:28'),
('rajendran@felixinfotech.com', 'sbD1QEG2Iw', '2022-06-23 03:46:16'),
('ravish@professionalpal.in', 'PTA1aY19YD', '2022-06-23 23:03:02'),
('ravish@professionalpal.in', 'ocXAcDm1U3', '2022-06-23 23:09:47'),
('raj.g@servedesk.in', 'qzKQtEcxma', '2022-06-24 01:03:25'),
('raj.g@servedesk.in', 'W5ik7idWHl', '2022-06-28 02:16:34'),
('ajay@labyrinthsolutions.in', 'rfCkT7N6OM', '2022-07-02 04:39:40'),
('raju@msrinfraprojects.com', '9kXHlyl96o', '2022-07-04 00:18:27'),
('raju@msrinfraprojects.com', 'LLpbGtWRBA', '2022-07-04 00:23:39'),
('info@balajiinfotechindia.com', 'qjizFPps2D', '2022-07-14 02:26:36'),
('rajendran@felixinfotech.com', 'CeZvklZw6w', '2022-07-28 02:52:19'),
('rajendran@felixinfotech.com', 'WnQ0h1hGwz', '2022-07-28 03:11:16'),
('ajay@labyrinthsolutions.in', 'xyKgkX8PTN', '2022-08-02 00:37:45'),
('suresh@tracenetwork.in', 'ztAu6DSZph', '2022-08-22 06:54:06'),
('alliances@cloudfence.ai', 'UgOurS9y9B', '2022-08-25 05:34:08'),
('lalit@nexgenenterprises.co.in', 'yB5osLFjeg', '2022-10-04 07:22:52'),
('lalit@nexgenenterprises.co.in', '01E4CI8FBd', '2022-10-04 07:23:47'),
('lalit@nexgenenterprises.co.in', '8ulyC8rp85', '2022-10-04 07:24:21'),
('lalit@nexgenenterprises.co.in', 'bZRlj7vFeF', '2022-10-04 07:24:58'),
('raj.g@servedesk.in', 'fxh04oqg5U', '2022-10-15 00:28:02'),
('raj.g@servedesk.in', '3K6tKMAcph', '2022-10-15 00:28:46'),
('raj.g@servedesk.in', 'WhWP3d8WZr', '2022-10-15 00:29:27'),
('raj.g@servedesk.in', 'sx0DUY3Cs5', '2022-10-15 00:30:15'),
('raj.g@servedesk.in', 'aA0GNiJyIM', '2022-10-15 00:32:09'),
('msp@accerix.com', 'Z4ObkO4XbV', '2022-11-03 12:39:46'),
('rajendran@felixinfotech.com', 'Q0aF6PfOZw', '2022-11-14 02:55:58'),
('rajendran@felixinfotech.com', 'v67NMAo8nM', '2022-11-14 02:59:25'),
('rajendran@felixinfotech.com', 'mYQH8YMaQO', '2022-11-14 22:31:43'),
('rajendran@felixinfotech.com', 'pfgbLtp3L8', '2022-11-14 22:32:21'),
('ravish@professionalpal.in', 'nT9Da4esGf', '2023-02-15 09:46:20'),
('ravish@professionalpal.in', 'BgbRx2JUK7', '2023-02-15 09:46:57'),
('Alliances@Cloudfence.ai', 'RKEKJK22GT', '2023-05-05 01:52:05'),
('Alliances@Cloudfence.ai', 'qrkH0TXM7k', '2023-05-05 01:52:40'),
('Alliances@Cloudfence.ai', 'Hhu4RF70vh', '2023-05-05 01:54:55'),
('Alliances@Cloudfence.ai', 'RKzfTscbun', '2023-05-05 02:00:03'),
('ajay@labyrinthsolutions.in', '4E8enPGPUG', '2023-07-01 05:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `payment_terms`
--

CREATE TABLE IF NOT EXISTS `payment_terms` (
  `id` int(11) NOT NULL,
  `display_value` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_terms`
--

INSERT INTO `payment_terms` (`id`, `display_value`, `display_name`) VALUES
(1, 'monthly-advance', 'Monthly Advance'),
(2, 'quarterly-advance', 'Quarterly Advance'),
(3, 'half-yearly-advance', 'Half Yearly Advance'),
(4, 'annual-advance', 'Annual Advance'),
(5, '100-perc-advance', '100% Advance');

-- --------------------------------------------------------

--
-- Table structure for table `pipelines`
--

CREATE TABLE IF NOT EXISTS `pipelines` (
  `id` bigint(20) unsigned NOT NULL,
  `potential_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rbp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rbp_state` bigint(20) unsigned NOT NULL,
  `sales_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_state` bigint(20) unsigned NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbunits_id` bigint(20) unsigned NOT NULL,
  `sbu_product_id` bigint(20) unsigned NOT NULL,
  `opportunity_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrc` double(12,2) NOT NULL,
  `otc` double(12,2) NOT NULL,
  `arc` double(12,2) NOT NULL,
  `acv` double(15,2) NOT NULL,
  `tcv` double(20,2) NOT NULL,
  `contract_period` int(11) NOT NULL,
  `payment_terms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opportunity_date` date NOT NULL,
  `proposal_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `customer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projected_commission` double(8,2) NOT NULL,
  `customer_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opportunity_docs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rejection_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_date` timestamp NULL DEFAULT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pipelines`
--

INSERT INTO `pipelines` (`id`, `potential_id`, `rbp_name`, `rbp_state`, `sales_owner`, `customer_state`, `customer_name`, `customer_email_id`, `business_industry`, `account_type`, `sbunits_id`, `sbu_product_id`, `opportunity_details`, `stage`, `rating_id`, `mrc`, `otc`, `arc`, `acv`, `tcv`, `contract_period`, `payment_terms`, `opportunity_date`, `proposal_date`, `closing_date`, `customer_type`, `commission_type`, `projected_commission`, `customer_website`, `opportunity_docs`, `status`, `rejection_comment`, `status_date`, `partner_id`, `created_at`, `updated_at`) VALUES
(4, 'RBP_97581_041020211', 'Sceptre Business Corporation LLP', 13, 'Sceptre Business Corporation LLP', 13, 'Giridhar Eye Institute', 'itmanager@giridhareye.org', '5', '1', 1, 3, NULL, '2', '1', 25000.00, 5000.00, 0.00, 305000.00, 305000.00, 12, '2', '2021-10-04', '2021-10-04', '2021-10-31', '1', '1', 30000.00, 'giridhareye.org', '', 'approved', NULL, '2021-10-19 06:13:03', 28, '2021-10-04 07:09:35', '2021-10-19 06:13:03'),
(5, 'RBP_02851_141020211', 'Labyrinth Solutions', 1, 'G ajay', 24, 'Sudaram Finance', 'ap@sundarambpo.com', '10', '1', 1, 1, NULL, '3', '2', 30500.00, 0.00, 0.00, 366000.00, 1098000.00, 36, '2', '2021-10-14', '2021-10-14', '2021-11-30', '1', '1', 109800.00, 'https://www.sundaramfinance.in', '', 'approved', NULL, '2021-11-11 02:25:36', 31, '2021-10-14 00:23:15', '2021-11-11 02:25:36'),
(6, 'RBP_02851_141020212', 'Labyrinth Solutions', 1, 'G ajay', 1, 'Centurion University', 'kalyankv@cutmap.ac.in', '7', '1', 1, 14, NULL, '3', '2', 33500.00, 0.00, 0.00, 402000.00, 1206000.00, 36, '2', '2021-10-14', '2021-10-14', '2021-11-30', '1', '1', 120600.00, 'https://cutmap.ac.in', '', 'approved', NULL, '2021-11-11 02:26:04', 31, '2021-10-14 00:28:36', '2021-11-11 02:26:04'),
(7, 'RBP_06213_191020211', 'Yotta Infrastructure Solutions LLP', 15, 'Sandeep Thombre', 15, 'NM1 Datacentre', 'sbapat@yotta.com', '2', '1', 1, 1, 'SAP DR Hosting', '2', '2', 120000.00, 50000.00, 1440000.00, 2930000.00, 2930000.00, 12, '1', '2021-10-19', '2021-10-19', '2021-11-24', '1', '3', 0.00, 'https://www.yotta.com/', 'storage/app/public/uploads/pipelines/RBP_06213_191020211/Customer_Inputs_DR 18th Oct 2021.xlsx', 'approved', NULL, '2021-10-25 05:28:36', 40, '2021-10-18 23:11:35', '2021-10-25 05:28:36'),
(8, 'RBP_06213_211020211', 'YOTTA LLP', 15, 'Rahul Shetty', 15, 'BOB', 'rshetty@yotta.com', '1', '2', 1, 1, 'Website Hosting.', '2', '2', 100000.00, 100000.00, 1200000.00, 2500000.00, 12100000.00, 60, '2', '2021-10-21', '2021-10-21', '2021-12-16', '1', '3', 0.00, 'yotta.com', 'storage/app/public/uploads/pipelines/RBP_06213_211020211/addendum-2-f-18-09.pdf;storage/app/public/uploads/pipelines/RBP_06213_211020211/addendum-05-13.pdf;storage/app/public/uploads/pipelines/RBP_06213_211020211/rfp-for-selection-of-service-provider-for-hosting.pdf', NULL, NULL, NULL, 40, '2021-10-21 03:47:58', '2021-10-21 03:47:58'),
(9, 'RBP_56418_281020211', 'nnur International Airpot', 13, 'Sabeena', 13, 'Kannur International Airpot', 'dinesh@kannurairport.aero', '2', '2', 1, 1, 'New requirement of cloud', '2', '2', 80000.00, 0.00, 0.00, 960000.00, 960000.00, 12, '2', '2021-10-28', '2021-10-26', '2021-11-10', '2', '1', 0.00, 'www.kannurairport.aero', 'storage/app/public/uploads/pipelines/RBP_56418_281020211/KannurAirport - IPC - BoM v1.0.xlsx', NULL, NULL, NULL, 47, '2021-10-28 00:05:03', '2021-10-28 00:05:03'),
(10, 'RBP_56418_281020212', 'Imbichibava Memorial Co-operative Hospital & Research Center Society Ltd', 13, 'Sabeena', 13, 'Imbichibava Memorial Co-operative Hospital & Research Center Society Ltd', 'It@imbichibavahospital.com', '4', '1', 1, 3, 'New requirement of cloud', '2', '2', 35000.00, 0.00, 0.00, 420000.00, 420000.00, 12, '2', '2021-10-28', '2021-10-25', '2021-11-25', '1', '1', 42000.00, 'https://imbichibavahospital.com/', '', NULL, NULL, NULL, 47, '2021-10-28 00:34:52', '2021-10-28 00:34:52'),
(11, 'RBP_56418_281020213', 'Calicut City Service Co-Operative Bank- Lead Registration', 13, 'Sabeena', 13, 'Calicut City Service Co-Operative Bank- Lead Registration', 'it@calicutcitybank.com', '1', '1', 1, 1, 'New requirement of cloud', '2', '3', 35000.00, 0.00, 0.00, 420000.00, 420000.00, 12, '2', '2021-10-28', '2021-11-10', '2021-12-10', '2', '1', 0.00, 'https://www.calicutcitybank.com/', '', NULL, NULL, NULL, 47, '2021-10-28 00:51:52', '2021-10-28 00:51:52'),
(12, 'RBP_03571_281020211', 'Trace Network and engineering Pvt Ltd', 29, 'Vignesh', 29, 'Ceyenar Chemicals', 'varghese@ceyenar.com', '5', '1', 1, 3, 'Customer is looking for cloud SAPB1', '4', '1', 40000.00, 0.00, 0.00, 480000.00, 1440000.00, 36, '2', '2021-10-28', '2021-10-24', '2021-11-05', '1', '1', 144000.00, 'ceyenar.com', '', 'approved', NULL, '2021-11-11 02:30:33', 42, '2021-10-28 01:00:46', '2021-11-11 02:30:33'),
(13, 'RBP_06213_091120211', 'Yotta Infra LLP', 15, 'Sandeep Thomre', 15, 'NM1 Data Centre', 'sthombre@yotta.com', '5', '1', 1, 3, 'SAP Hosting', '2', '1', 100000.00, 10000.00, 50000.00, 1260000.00, 3760000.00, 36, '1', '2021-11-09', '2021-11-11', '2021-11-18', '1', '3', 0.00, 'https://www.yotta.com/', 'storage/app/public/uploads/pipelines/RBP_06213_091120211/229_Yotta_Bharat Serum DR on Cloud Annexure_9th Nov 2021.xlsx', 'approved', NULL, '2021-11-11 02:20:40', 40, '2021-11-09 10:26:25', '2021-11-11 02:20:40'),
(14, 'RBP_59024_101120211', 'VIPUN Cognitive Solutions Pvt ltd', 12, 'Murali', 29, 'Alekhya homes Pvt ltd.', 'venkatarao@alekhyahomes.in', '8', '1', 1, 3, '1) 4 Core, 16 GB RAM, 1000 GB HDD, Windows 2019 Standard  2)8 Core, 16 GB RAM, 1000 GB HDD, Windows 2019 Standard, My SQL Server', '2', '1', 25.00, 0.00, 0.00, 300.00, 600.00, 24, '1', '2021-11-10', '2021-11-12', '2021-11-30', '1', '1', 60.00, 'https://alekhyahomes.in/', '', 'approved', NULL, '2021-11-11 08:10:22', 50, '2021-11-10 04:29:57', '2021-11-11 08:10:22'),
(15, 'RBP_59024_101120211', 'VIPUN COGNITIVE SOLUTIONS PVT LTD.', 12, 'MURALI', 29, 'PIXMINDZ LABS PVT LTD.', 'Tripuram@gmail.com', '2', '1', 1, 3, 'CDN Delivery 2 TB Storage, Transcoding -Output hour/month 100hours, DRM -Subscriber account monthly (entitled to 3 devices ) 100 Subscribers, Volume of storage on the CDN 4 TB Storage', '3', '3', 16.00, 0.00, 0.00, 192.00, 576.00, 36, '1', '2021-11-10', '2021-10-19', '2021-12-30', '2', '1', 0.00, 'http://pixmindzlabs.com/', '', 'approved', NULL, '2021-11-11 08:10:34', 50, '2021-11-10 04:54:16', '2021-11-11 08:10:34'),
(16, 'RBP_53261_111120211', 'SMARTSOFT', 13, 'Sujith P R', 13, 'Kancor Ingredients Limited', 'enquirykancor@mane.com', '8', '1', 1, 3, 'Looking to Host SAP Application', '1', '2', 50000.00, 0.00, 0.00, 600000.00, 600000.00, 12, '2', '2021-11-11', '2021-11-13', '2021-12-31', '1', '1', 60000.00, 'www.kancor.com/', '', 'approved', NULL, '2021-11-12 05:38:18', 46, '2021-11-11 05:55:36', '2021-11-12 05:38:18'),
(17, 'RBP_97581_131120211', 'Sceptre Business Corporation LLP', 13, 'Sceptre Business Corporation LLP', 13, 'MES Academy of Medical Sciences', 'it@mesams.com', '5', '1', 1, 1, NULL, '2', '2', 1.00, 1.00, 1.00, 14.00, 14.00, 12, '2', '2021-11-13', '2021-11-13', '2021-12-31', '1', '1', 1.20, 'mesams.com', '', NULL, NULL, NULL, 28, '2021-11-13 06:12:07', '2021-11-13 06:12:07'),
(18, 'RBP_18679_151120211', 'Mm9 Information Technologies Pvt Ltd', 8, 'Anant Dhawan', 26, 'Carrer Builder', 'hitesh.chaturvedi@carrerbuilder.com', '7', '1', 1, 9, 'Customer required to migrate his 118 servers within 4 to 6 months', '1', '3', 50000.00, 0.00, 0.00, 600000.00, 1200000.00, 24, '1', '2021-11-15', '2022-02-01', '2022-02-15', '1', '1', 120000.00, 'https://www.careerbuilder.co.in/', '', NULL, NULL, NULL, 53, '2021-11-15 07:17:14', '2021-11-15 07:17:14'),
(19, 'RBP_97581_161120211', 'Sceptre Business Corporation LLP', 13, 'Sujith P R', 13, 'Giridhar Eye Institute', 'itmanager@giridhareye.org', '5', '1', 1, 5, 'Looking for storage as aservice', '6', '1', 61738.00, 35000.00, 0.00, 775856.00, 775856.00, 12, '2', '2021-11-16', '2021-11-17', '2021-11-30', '1', '1', 74085.60, 'giridhareye.org', '', 'approved', NULL, '2021-11-22 00:56:21', 28, '2021-11-16 06:33:44', '2021-11-25 12:01:27'),
(20, 'RBP_59024_231120211', 'VIPUN COGNITIVE SOLUTIONS PVT LTD', 12, 'SivaShankari', 12, 'NOUVEAU LABS PVT LTD', 'stummala@nouveau-labs.com', '2', '1', 1, 1, '4Cores, 16gb, 256gb vms with ubuntu -3 and with Windows 1 units', '2', '3', 20.00, 0.00, 0.00, 240.00, 240.00, 12, '1', '2021-11-23', '2021-11-23', '2021-11-24', '1', '1', 24.00, 'nouveau-labs.com', '', 'approved', NULL, '2022-01-07 07:16:33', 50, '2021-11-23 00:49:50', '2022-01-07 07:16:33'),
(21, 'RBP_06213_241120211', 'Yotta', 15, 'Sandeep', 14, 'ABC', 'abc@gmail.com', '2', '1', 1, 1, 'Looking for BaaS', '2', '1', 1000.00, 0.00, 0.00, 12000.00, 36000.00, 36, '2', '2021-11-24', '2021-11-26', '2021-12-15', '2', '3', 0.00, 'abc.com', '', NULL, NULL, NULL, 40, '2021-11-24 03:22:04', '2021-11-24 03:22:04'),
(22, 'RBP_06213_301120211', 'Siyaram Silk Mills Limited', 15, 'Sandeep Thomre', 15, 'Siyaram Silk Mills Limited', 'sthombre@yotta.com', '8', '1', 2, 23, '42 U One RACK', '2', '2', 10000.00, 10000.00, 12000.00, 142000.00, 142000.00, 12, '1', '2021-11-30', '2021-11-30', '2022-01-13', '1', '3', 0.00, 'https://www.siyaram.com/', '', NULL, NULL, NULL, 40, '2021-11-30 01:56:07', '2021-11-30 01:56:07'),
(23, 'RBP_06213_021220211', 'Yotta LLP', 15, 'Poonam', 15, 'West1', 'fsomanathan@yotta.com', '8', '1', 1, 3, '1.	There are 2 web dispatcher/Router VMs in the below list. Does the Customer need 2 VMs on the DR site? I don''t see any reason for keeping 2 VMs for WD/router at the DR site. Please confirm.\r\nAns: the 4th one is Web Dispatcher and 5th one is Router\r\n2.	How much is the maximum number of concurrent users who will be accessing the system when DR/DR drill happens?\r\nAns:300\r\n3.	HANA and MaxDB full backup size?\r\nAns: 250GB\r\n4.	Daily data change for HANA and MaxDB?\r\nAns: Annual growth of 15%\r\n5.	Is Public IP is fine for accessing the SAP system when DR happens or Customer need RA VPN or additional site-to-site VPNs? if so then the count?\r\nAns: Please consider one Public IP address\r\n6.	Hope the scope is limited to infra only. Please confirm.\r\nAns: Yes\r\n7.	Does the Customer needs any OS-managed services?\r\nAns: Put this as optional', '2', '2', 50000.00, 10000.00, 300000.00, 910000.00, 910000.00, 12, '1', '2021-12-02', '2021-12-02', '2021-12-03', '1', '1', 60000.00, 'yotta.com', '', NULL, NULL, NULL, 40, '2021-12-02 05:17:30', '2021-12-02 05:17:30'),
(24, 'RBP_06213_021220211', 'Yotta LLP', 15, 'Sandeep', 15, 'West2', 'fsomanathan@yotta.com', '2', '1', 1, 3, '1.	HANA DB full backup size?\r\nAns: approximately 100GB\r\n2.How much is the maximum number of concurrent users who will be accessing the system when the DR/DR drill happens?\r\nAns: Total Users : 60-70 \r\n3.	Daily data change rate for HANA DB?\r\nAns: 10% Y-O-Y growth\r\n1.	DR is usually required for PRD only. Do we need to consider the non-PRD also in scope for this customer?\r\nAns: It’s the production workloads along with machines used for connecting to the workloads or supportive machines.\r\n4.	Daily data change rate for HANA DB?\r\nAns: 15% Y-O-Y growth\r\n5.	Is Public IP is fine for accessing the SAP system when DR happens or Customer need RA VPN or additional site-to-site VPNs? if so then the count?\r\nAns: One Public IP address to be assigned\r\n6.	Scope is limited to infra plus DR managed services as optional services. Please confirm?\r\nAns: Scope to DR, however could keep DR managed service as optional\r\n7.	Does the customer needs OS-managed services?\r\nAns: Please keep it as optional', '2', '2', 30000.00, 20000.00, 360000.00, 740000.00, 740000.00, 12, '1', '2021-12-02', '2021-12-02', '2021-12-03', '1', '1', 36000.00, 'yotta.com', '', NULL, NULL, NULL, 40, '2021-12-02 05:22:22', '2021-12-02 05:22:22'),
(25, 'RBP_97581_111220211', 'Sceptre Business Corporation', 13, 'Sujith P R', 13, 'Comercio Solutions', 'marketing@comerciosolutions.com', '5', '1', 1, 3, 'This is 100% assure business', '3', '4', 7800.00, 0.00, 93600.00, 187200.00, 187200.00, 12, '1', '2021-12-11', '2021-12-11', '2021-12-13', '1', '1', 9360.00, 'http://comerciosolutions.com', '', 'approved', NULL, '2022-01-07 07:15:28', 28, '2021-12-11 06:28:14', '2022-01-07 07:15:28'),
(26, 'RBP_97581_111220212', 'Sceptre Business Corporation', 13, 'Sujith P R', 13, 'St. John’s Hospital', 'mail@stjohns.co.in', '5', '1', 1, 3, 'Prospective customer', '1', '3', 50000.00, 0.00, 0.00, 600000.00, 600000.00, 12, '2', '2021-12-11', '2021-12-10', '2022-01-31', '1', '1', 60000.00, 'https://stjohns.co.in/', '', NULL, NULL, NULL, 28, '2021-12-11 06:33:12', '2021-12-11 06:33:12'),
(27, 'RBP_06213_141220211', 'Yotta', 15, 'Saraswathy M', 15, 'Yotta Infrastructure', 'smayamadhavi@yotta.com', '1', '1', 2, 24, 'End customer of a system integrator looking for DR.', '2', '2', 800000.00, 100000.00, 9600000.00, 19300000.00, 57700000.00, 36, '1', '2021-12-14', '2021-12-24', '2022-02-14', '1', '3', 0.00, 'https://www.yotta.com/', '', NULL, NULL, NULL, 40, '2021-12-14 02:04:00', '2021-12-14 02:04:00'),
(28, 'RBP_06213_151220211', 'Yotta-Wysetek-DR One Rack Colo-3KVA', 1, 'Vishal Patil', 15, 'Wysetek', 'vilas@wysetek.com', '2', '1', 2, 23, 'Customer wants to have the colo for DR, customer''s DC in Pune. One Rack with 3KVA bundle power with 100Mbps Internet Bandwidth', '2', '1', 25000.00, 20000.00, 300000.00, 620000.00, 620000.00, 12, '1', '2021-12-15', '2021-12-16', '2022-01-20', '1', '3', 0.00, 'www.wysetek.com', '', NULL, NULL, NULL, 40, '2021-12-15 07:16:43', '2021-12-15 07:16:43'),
(29, 'RBP_69480_211220211', 'BOB-Cloud', 24, 'Paras', 15, 'BOB Capital Marklet LTD', 'mhapankar@bobcaps.in', '2', '1', 1, 1, 'DR in cloud', '1', '2', 100000.00, 1000000.00, 100000.00, 2300000.00, 2300000.00, 12, '1', '2021-12-21', '2021-12-21', '2022-04-21', '1', '1', 120000.00, 'https://www.bobcaps.in/', '', NULL, NULL, NULL, 62, '2021-12-21 02:21:36', '2021-12-21 02:21:36'),
(30, 'RBP_97581_211220211', 'Sceptre Business Corporation', 13, 'Sujith P R', 13, 'Meditrina Hospitals', 'itcorp@meditrinahospital.com', '5', '1', 1, 3, 'Prospective customer. Discussion on going.', '3', '1', 37000.00, 0.00, 0.00, 444000.00, 444000.00, 12, '1', '2021-12-21', '2021-12-21', '2022-01-15', '1', '1', 44400.00, 'http://www.meditrinahospitals.com/', '', 'approved', NULL, '2022-06-06 03:52:04', 28, '2021-12-21 04:27:04', '2022-06-06 03:52:04'),
(31, 'RBP_42531_241220211', 'Cloud Minds solutions', 1, 'Kumarrama Pinnamaraju', 1, 'Teejay India Pvt Ltd', 'diwakars@teejay.com', '8', '1', 1, 3, 'Teejay is planning for SAP on Cloud', '2', '2', 80000.00, 0.00, 0.00, 960000.00, 2880000.00, 36, '1', '2021-12-24', '2022-01-10', '2022-02-10', '1', '2', 96000.00, 'www.teejay.com', '', 'approved', NULL, '2022-06-06 03:53:23', 78, '2021-12-24 03:22:57', '2022-06-06 03:53:23'),
(32, 'RBP_53261_020120221', 'SMARTSOFT', 13, 'Sujith P R', 13, 'Hi-Tech Diagnostic Center', 'accshitech@gmail.com', '4', '1', 1, 3, 'Price', '2', '2', 800.00, 1.00, 1.00, 9602.00, 9602.00, 12, '1', '2022-01-02', '2022-01-01', '2022-01-05', '2', '2', 960.20, 'https://hitechcochin.com/', '', 'approved', NULL, '2022-01-07 07:13:56', 46, '2022-01-01 22:34:44', '2022-01-07 07:13:56'),
(33, 'RBP_08536_050120221', 'Transneter AR Software And Solutions Pvt. Ltd.', 15, 'Amar Thakare', 15, 'Lumiverse Solutions Pvt. Ltd.', 'amar.thakare@lumiversesolutions.co.in', '2', '1', 1, 9, 'These four servers are for monitoring purpose for our personal organizational use.\r\nWe require services like Snapshot Service,Desktop Environment,Custom port open(like 80,44,8080,8081,1514,1515/tcp,1516/tcp,514,55000/tcp,9200/tcp,9300-9400/tcp,443/tcp).', '1', '1', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '5', '2022-01-05', '2022-01-05', '2022-01-11', '1', '2', 0.00, 'https://lumiversesolutions.com/', 'storage/app/public/uploads/pipelines/RBP_08536_050120221/Server Detailed Requirement.xlsx', 'approved', NULL, '2022-01-19 07:34:00', 84, '2022-01-05 02:16:39', '2022-01-19 07:34:00'),
(34, 'RBP_06213_170120221', 'Supreme Petrochem', 15, 'Girish Mayekar', 15, 'Supreme Petrochem', 'hb_pandit@spl.co.in', '8', '1', 2, 23, '1.	No Of severs- as per below:\r\n\r\nU''s	   DEVICE	      MAKE/MODEL	POWER RATING(W)\r\n1	   PEPLINK	           210/380	                    15\r\n2	   Sophos	              xg310                            32\r\n3	   switch		                                                    120\r\n4	Intel server		                                            800\r\n5	IBM P SERIES	MT 8286 42A	           2300\r\n\r\n2.	Power consumptions.- 3KVA\r\n3.	Required rack space - half rack\r\n4.	No of Cross connect required - 2\r\n5.	Count of DR Drills - twice in a year\r\n6.	Manage service requirement - yes, remote hands support required', '2', '2', 100000.00, 10000.00, 1200000.00, 2410000.00, 2410000.00, 12, '1', '2022-01-17', '2022-01-18', '2022-02-24', '2', '3', 0.00, 'https://www.supremepetrochem.com/default.htm', '', NULL, NULL, NULL, 40, '2022-01-17 04:59:14', '2022-01-17 04:59:14'),
(35, 'RBP_30248_210120221', 'INNOFEAST IT SOLUTIONS PVT LTD', 13, 'DANISH K M', 13, 'TRANSIGHT SYSTEMS', 'DIJO.DAVIS@TRANSIGHT.IN', '2', '1', 1, 3, 'The Client is interested in migrating their dedicated servers which is present hosted with OVH(CSP) At present most of their clients are in india and if gettng a better support technically and commercially they are willing to migrate', '2', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '2', '2022-01-21', '2022-01-25', '2022-03-15', '1', '1', 0.00, 'http://transight.in/', 'storage/app/public/uploads/pipelines/RBP_30248_210120221/Cloud Requirement Gathering Template.xls', NULL, NULL, NULL, 73, '2022-01-21 01:04:56', '2022-01-21 01:04:56'),
(36, 'RBP_06213_240120221', 'Yotta', 1, 'Saraswathy M', 1, 'Yotta Infrastructure', 'smayamadhavi@yotta.com', '2', '1', 2, 23, '2-Full racks which can support upto 10KW in each cabinet. (Metered power options)\r\nBandwidth cost for 100Mbps on 1Gbps port and 1Gbps on 1Gbps port.\r\nCross connect cost (Copper and Fiber)', '1', '3', 40000.00, 0.00, 480000.00, 960000.00, 960000.00, 12, '1', '2022-01-24', '2022-01-31', '2022-04-24', '1', '3', 0.00, 'https://www.yotta.com/', '', NULL, NULL, NULL, 40, '2022-01-24 08:32:55', '2022-01-24 08:32:55'),
(37, 'RBP_81036_250120221', 'Mobigic Technologies Private Limited', 15, 'Brijen Shah', 15, 'Maharashtra State Road Transport Corporation', 'dgmit.msrtc@gmail.com', '4', '2', 1, 3, 'Customer is currently hosted with Azure cloud and want to migrate from Azure . need to submit RFP through Gem and being Gem and MSME Registered vendor Mobigic would like to BID the same here it would be billed to Mobigic and support to MSRTC. Kindly help with commercials asap.', '2', '1', 208000.00, 50000.00, 0.00, 2546000.00, 5042000.00, 24, '2', '2022-01-25', '2022-01-27', '2022-02-05', '1', '3', 0.00, 'https://msrtc.maharashtra.gov.in/', '', NULL, NULL, NULL, 93, '2022-01-24 23:51:53', '2022-01-24 23:51:53'),
(38, 'RBP_06213_250120221', 'Yotta-Partner', 1, 'Anjaneyulu', 29, 'Yotta-Partner', 'aakula@yotta.com', '2', '1', 2, 23, 'Racks: 5 Racks with vertical PDUs, each rack with 6KVA enabled Power\r\nBandwidth: 256MBPS, IP 1\r\nPower: Metered power', '2', '2', 25000.00, 0.00, 0.00, 300000.00, 300000.00, 12, '1', '2022-01-25', '2022-01-25', '2022-03-04', '1', '3', 0.00, 'www.yotta.com', '', NULL, NULL, NULL, 40, '2022-01-25 06:18:43', '2022-01-25 06:18:43'),
(39, 'RBP_57320_010220221', 'Trust IT', 29, 'Vignesh', 29, 'Namitha Constructions', 'sureshit@gmail.com', '8', '1', 1, 3, 'Customer is looking for cloud for SAP B1.', '1', '2', 30000.00, 0.00, 0.00, 360000.00, 360000.00, 12, '2', '2022-02-01', '2022-02-03', '2022-02-27', '1', '1', 36000.00, 'www.namithaconstructions.com', '', 'approved', NULL, '2022-06-06 04:05:56', 90, '2022-02-01 04:52:33', '2022-06-06 04:05:56'),
(40, 'RBP_81036_020220221', 'Mobigic Technologies Private Limited', 15, 'Brijen Shah', 15, 'Multi Act Equity Consultancy Private Limited', 'amit.salvi@multi-act.com', '1', '1', 1, 3, 'Need to migrate inhouse data center to Cloud.', '1', '1', 100000.00, 10000.00, 1200000.00, 2410000.00, 2410000.00, 12, '2', '2022-02-02', '2022-02-09', '2022-02-28', '1', '1', 120000.00, 'https://multi-act.com', '', NULL, NULL, NULL, 93, '2022-02-02 01:55:05', '2022-02-02 01:55:05'),
(41, 'RBP_31046_090220221', 'IDC INDIA', 15, 'Nitin', 15, 'Prabhudas Lilladher Pvt. Ltd.', 'sachinshah@plindia.com', '1', '1', 2, 23, 'Current requirement is only for DR -1 rack, Dedicated rack space with Power - 6KVA ; BW ;- 100mbps / 200mbps ; 12 Cross Connects required & Public IP''s (ipv4) - 64 nos. required.\r\nwith managed services. Details are also mentioned in the COLO requirement gathering sheet attached file.', '2', '1', 25.00, 5.00, 30.00, 335.00, 995.00, 36, '1', '2022-02-09', '2022-02-09', '2022-04-30', '1', '1', 90.00, 'www.plindia.com/', 'storage/app/public/uploads/pipelines/RBP_31046_090220221/IDC -PL - DR-Colo-Requirements gathering Sheet.pdf', NULL, NULL, NULL, 66, '2022-02-09 11:01:19', '2022-02-09 11:01:19'),
(42, 'RBP_81036_110220221', 'Mobigic Technologies Private Limited', 15, 'Brijen Shah', 15, 'SUPREME PETROCHEM LIMITED', 'isha_raina@spl.co.in', '8', '1', 2, 23, 'Half Rack collocation', '1', '1', 25000.00, 10000.00, 300000.00, 610000.00, 610000.00, 12, '1', '2022-02-11', '2022-02-12', '2022-02-28', '1', '1', 30000.00, 'http://www.supremepetrochem.com', '', NULL, NULL, NULL, 93, '2022-02-11 06:09:34', '2022-02-11 06:09:34'),
(43, 'RBP_81036_180220221', 'Mobigic Technologies Private Limited', 15, 'Amit Desai', 15, 'TATSUNO INDIA PRIVATE LIMITED', 'surajit.banerjee@tatsuno.co.in', '8', '1', 1, 1, 'Back as a service requirement for 8 Tb object storage and 1 Tb SQL database', '2', '1', 25000.00, 10000.00, 300000.00, 610000.00, 610000.00, 12, '1', '2022-02-18', '2022-02-21', '2022-03-11', '1', '1', 30000.00, 'https://www.tatsuno.co.in', '', NULL, NULL, NULL, 93, '2022-02-18 00:22:41', '2022-02-18 00:22:41'),
(44, 'RBP_81036_050320221', 'Mobigic Technologies Private Limited', 15, 'Amit Desai', 15, 'Breach Candy Hospital Trust', 'venkatesh.mettu@breachcandyhospital.org', '4', '1', 1, 3, 'Looking for DR service for 4 Windows VM''s.', '1', '2', 60000.00, 10000.00, 481000.00, 1211000.00, 1211000.00, 12, '1', '2022-03-05', '2022-03-16', '2022-04-30', '1', '1', 72000.00, 'https://www.breachcandyhospital.org', '', NULL, NULL, NULL, 93, '2022-03-04 23:10:05', '2022-03-04 23:10:05'),
(45, 'RBP_81036_050320222', 'Mobigic Technologies Private Limited', 15, 'Amit Desai', 15, 'FDC Limited', 'gaurav.wadiwala@fdcindia.com', '5', '1', 1, 1, 'Backup as a Services requirement - Data Size 10 Tb,', '2', '1', 100000.00, 10000.00, 3.00, 1210003.00, 1210003.00, 12, '1', '2022-03-05', '2022-03-07', '2022-03-31', '1', '1', 120000.00, 'https://www.fdcindia.com', '', NULL, NULL, NULL, 93, '2022-03-05 03:46:20', '2022-03-05 03:46:20'),
(46, 'RBP_81036_070320221', 'Mobigic Technologies Private Limited', 15, 'Amit Desai', 15, 'Mayuresh Dalvi / Naval Patel', 'ssa02.it@mcgm.gov.in', '2', '2', 1, 3, 'Need to share Solution and Commercials for cloud Instances.', '2', '1', 100000.00, 50000.00, 1200000.00, 2450000.00, 7250000.00, 36, '2', '2022-03-07', '2022-03-11', '2022-03-30', '1', '1', 360000.00, 'www.mcgm.gov.in', '', NULL, NULL, NULL, 93, '2022-03-07 02:49:06', '2022-03-07 02:49:06'),
(47, 'RBP_81036_100320221', 'Mobigic Technologies Private Limited', 15, 'Amit Desai', 15, 'JM FINANCIAL HOME LOANS LIMITED', 'kiran.bhoir@jmfl.com', '1', '1', 1, 5, 'Cloud Storage requirement of 700 Tb.', '1', '2', 100000.00, 100000.00, 1.00, 1300001.00, 1300001.00, 12, '1', '2022-03-10', '2022-03-31', '2022-05-12', '1', '1', 120000.00, 'www.jmflhomeloans.com', '', NULL, NULL, NULL, 93, '2022-03-10 05:23:03', '2022-03-10 05:23:03'),
(48, 'RBP_39724_190320221', 'Om Naitiktej Enterprises', 29, 'Srinivas Sriram', 1, 'TVD Prasad Chakri', 'vdprasad@yahoo.com', '2', '1', 2, 23, 'Colocation', '2', '2', 5000.00, 10000.00, 60000.00, 130000.00, 130000.00, 12, '5', '2022-03-19', '2022-03-19', '2022-05-31', '1', '1', 6000.00, 'www.tvd.com', '', NULL, NULL, NULL, 32, '2022-03-19 04:34:07', '2022-03-19 04:34:07'),
(49, 'RBP_06213_240320221', 'Savex Technologies- Tescom', 15, 'Pankaj Vashishtha', 15, 'Savex Technologies', 'noamaan.shaikh@savex.in', '2', '1', 2, 23, 'DR:\r\n \r\n●2 racks with 6 kva each\r\n●100mbps internet\r\n●8 Static IP''s\r\n●20 Cross Connects\r\n●Shared WAF services for 5 applications', '2', '2', 350000.00, 400000.00, 4200000.00, 8800000.00, 8800000.00, 12, '1', '2022-03-24', '2022-03-24', '2022-05-12', '1', '1', 420000.00, 'savex.com', '', NULL, NULL, NULL, 40, '2022-03-24 05:21:55', '2022-03-24 05:21:55'),
(50, 'RBP_47985_290320221', 'TechBrace', 13, 'Arun Menon', 13, 'Arun Menon P', 'arun@tbmail.in', '2', '1', 1, 3, 'Cloud VM- Linux', '1', '2', 8448.00, 0.00, 101304.00, 202680.00, 202680.00, 12, '1', '2022-03-29', '2022-03-29', '2022-03-30', '1', '1', 10137.60, 'techbrace.com', '', NULL, NULL, NULL, 105, '2022-03-29 05:17:27', '2022-03-29 05:17:27'),
(51, 'RBP_31046_190420221', 'IDC INDIA', 15, 'Nitin', 15, 'IDBI Capital Markets & Securities Limited', 'Sanddep.gorivale@idbicapital.com', '1', '1', 2, 23, 'They are looking for 3 racks colocation with Internet & managed services', '2', '2', 150000.00, 0.00, 0.00, 1800000.00, 3600000.00, 24, '2', '2022-04-19', '2022-03-22', '2022-06-15', '1', '1', 360000.00, 'www.idbicapital.com', 'storage/app/public/uploads/pipelines/RBP_31046_190420221/IDC-IDBI_Capital-Colo_mumbai.pdf', NULL, NULL, NULL, 66, '2022-04-19 04:22:10', '2022-04-19 04:22:10'),
(52, 'RBP_31046_250420221', 'IDC INDIA', 15, 'Nitin', 15, 'Prime Focus World', 'shiy@redefine.co', '6', '1', 2, 23, 'colocation with internet', '2', '2', 200000.00, 100000.00, 2500000.00, 5000000.00, 14800000.00, 36, '2', '2022-04-25', '2022-04-25', '2022-07-31', '1', '1', 720000.00, 'www.primefocus.com', 'storage/app/public/uploads/pipelines/RBP_31046_250420221/IDC_-Prime_Focus_World-DC-_20_racks-Colo-Requirements_gathering_Sheet.pdf', NULL, NULL, NULL, 66, '2022-04-25 03:20:10', '2022-04-25 03:20:10'),
(53, 'RBP_31046_250420221', 'IDC INDIA', 15, 'Nitin', 15, 'Fact Solution', 'abhishek.singh@fact.solutions', '2', '1', 2, 23, 'colocation with internet', '2', '2', 20.00, 20.00, 20.00, 280.00, 540.00, 24, '2', '2022-04-25', '2022-04-25', '2022-06-30', '1', '1', 48.00, 'www.fact.solutions', 'storage/app/public/uploads/pipelines/RBP_31046_250420221/IDC-Fact Solution-Colo mumbai.pdf', NULL, NULL, NULL, 66, '2022-04-25 03:32:36', '2022-04-25 03:32:36'),
(54, 'RBP_97581_120520221', 'Sceptre Business Corporation LLP', 13, 'Sujith P R', 13, 'Sevana Hospital & Research Center Private Ltd', 'info@sevanahospital.org', '5', '1', 1, 9, 'Discussion started with the management of the Institution', '1', '2', 50000.00, 0.00, 0.00, 600000.00, 600000.00, 12, '2', '2022-05-12', '2022-05-12', '2022-06-30', '1', '1', 60000.00, 'sevanahospital.org', '', 'approved', NULL, '2022-06-06 04:01:04', 28, '2022-05-12 08:05:45', '2022-06-06 04:01:04'),
(55, 'RBP_63897_300520221', 'Brijen Shah', 15, 'Brijen Shah', 15, 'Aurangabad DCC Bank Ltd', 'itdept@aurangabaddccb.com', '1', '1', 2, 23, 'We as a hardware vendor are submitting this proposal to ISV and ISV will be front ending this opportunity to the bank', '2', '1', 100000.00, 0.00, 1200000.00, 2400000.00, 12000000.00, 60, '2', '2022-05-30', '2022-06-05', '2022-06-15', '1', '1', 600000.00, 'www.aurangabaddccb.com', '', 'rejected', 'RBP name is not correct', '2022-06-06 04:00:38', 95, '2022-05-30 01:07:48', '2022-06-06 04:00:38'),
(56, 'RBP_63897_300520221', 'Vijay Sharma', 15, 'Vijay Sharma', 15, 'Aurangabad DCC Bank Ltd', 'itdept@aurangabaddccb.com', '1', '1', 1, 3, 'We as a hardware vendor are proposing this solution to end customer through an ISV.', '2', '1', 50000.00, 0.00, 0.00, 600000.00, 3000000.00, 60, '2', '2022-05-30', '2022-06-01', '2022-06-15', '1', '1', 300000.00, 'www.aurangabaddccb.com', '', 'approved', NULL, '2022-06-06 03:59:39', 95, '2022-05-30 01:12:35', '2022-06-06 03:59:39'),
(57, 'RBP_93601_300520221', 'Bangalore', 12, 'Ravish', 12, 'AVI Solar Energy Pvt Ltd', 'itsupport@skyfri.com', '8', '1', 1, 3, 'Customer is facing billing issue from AWS and they want to upgrade the infrastructure', '1', '2', 60000.00, 30000.00, 0.00, 750000.00, 750000.00, 12, '2', '2022-05-30', '2022-05-30', '2022-07-21', '1', '1', 72000.00, 'https://www.avisolar.com/', '', 'rejected', 'Partner name is not correct', '2022-06-06 03:59:17', 74, '2022-05-30 06:12:11', '2022-06-06 03:59:17'),
(58, 'RBP_53261_010620221', 'Smartsoft', 13, 'Harish TA', 13, 'Cochin Shipyard Limited', 'renjan.vt@cochinshipyard.in', '8', '2', 1, 1, 'Please support Smartsoft with the best pricing and the right solution.', '2', '1', 50000.00, 0.00, 0.00, 600000.00, 600000.00, 12, '1', '2022-06-01', '2022-06-06', '2022-06-15', '1', '1', 60000.00, 'https://cochinshipyard.in/', 'storage/app/public/uploads/pipelines/RBP_53261_010620221/rfp-remote-data-storage-csl_2022-05-27-11-51-22_c14930cab8c57bb38f85269df82c49f6 (1).pdf', 'approved', NULL, '2022-06-06 03:58:22', 46, '2022-06-01 03:06:42', '2022-06-06 03:58:22'),
(59, 'RBP_47985_070620221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'QIZO Technologies and Solutions Pvt. Ltd', 'shamshir@tbmail.in', '2', '1', 1, 16, 'We have a requirement of Windows server and MS SQL Standard edition 1 Vm for our client QIZO Technologies and Solutions Pvt. Ltd', '7', '4', 9098.00, 0.00, 0.00, 109176.00, 109176.00, 12, '1', '2022-06-07', '2022-03-16', '2022-03-29', '1', '1', 10917.60, 'http://qizo.in/', 'storage/app/public/uploads/pipelines/RBP_47985_070620221/Techbrein - Revised PO (1).pdf', 'rejected', 'Need to modify the stage, rating, proposal date and closing date appropriately and resubmit.', '2022-06-07 06:04:59', 105, '2022-06-07 03:47:05', '2022-06-07 06:04:59'),
(60, 'RBP_47985_080620221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'QIZO Technologies and Solutions Pvt. Ltd', 'shamshir@tbmail.in', '2', '1', 1, 16, 'We have a requirement of Windows server and MS SQL Standard edition 1 Vm for our client QIZO Technologies and Solutions Pvt. Ltd', '7', '4', 9098.00, 0.00, 0.00, 109176.00, 109176.00, 12, '1', '2022-06-08', '2022-03-16', '2022-03-30', '1', '1', 10917.60, 'http://qizo.in/', 'storage/app/public/uploads/pipelines/RBP_47985_080620221/Techbrein - Revised PO (1).pdf', 'approved', NULL, '2022-06-07 23:39:09', 105, '2022-06-07 22:34:38', '2022-06-07 23:39:09'),
(61, 'RBP_37215_130620221', 'msr projects', 1, 'Raju', 1, 'innovare pharma', 'mahesh.marrapu@innovarelabs.com', '5', '1', 1, 3, 'Windows standard cloud with cal license', '4', '1', 30000.00, 0.00, 0.00, 360000.00, 1080000.00, 36, '2', '2022-06-13', '2022-05-04', '2022-06-25', '1', '1', 108000.00, 'www.innovarelabs.com', '', NULL, NULL, NULL, 112, '2022-06-13 07:00:15', '2022-06-13 07:00:15'),
(62, 'RBP_20934_170620221', 'Ampler Technologies Pvt Ltd', 29, 'Satish', 29, 'Nichino India Pvt Ltd', 'it@nichino.co.in', '8', '1', 1, 1, 'Backup solution required for End user Devices around 100 users.', '1', '2', 30000.00, 0.00, 0.00, 360000.00, 360000.00, 12, '1', '2022-06-17', '2022-06-30', '2022-08-31', '1', '1', 36000.00, 'https://www.nichinoindia.com/', '', NULL, NULL, NULL, 77, '2022-06-17 01:15:23', '2022-06-17 01:15:23'),
(63, 'RBP_47985_220620221', 'Techbrein Solutions Private Limited', 13, 'Shamshir Ul Haq', 13, 'IQRAA INTERNATIONAL HOSPITAL AND RESEARCH CENTRE', 'sales@techbrein.com', '5', '1', 1, 3, 'This is a requirement for our client "IQRAA INTERNATIONAL HOSPITAL AND RESEARCH CENTRE" they are looking for an On-demand DR setup on cloud for their HIS APP and DB', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '1', '2022-06-22', '2022-06-21', '2022-07-25', '1', '1', 0.00, 'https://iqraahospital.in/', 'storage/app/public/uploads/pipelines/RBP_47985_220620221/Iqraa Hospital - Cloud Requirement Gathering Template.xls', NULL, NULL, NULL, 105, '2022-06-22 04:00:05', '2022-06-22 04:00:05'),
(64, 'RBP_37215_220620221', 'msr projects', 1, 'Raju', 1, 'inndata analytics', 'vidyasagar@inndata.in', '2', '1', 1, 3, 'Myanmur 1 , myanmur 2 and other pipeline projects', '3', '2', 700000.00, 0.00, 500000.00, 8900000.00, 8900000.00, 12, '2', '2022-06-22', '2022-05-23', '2022-07-31', '1', '1', 840000.00, 'www.inndata.in', '', NULL, NULL, NULL, 112, '2022-06-22 05:40:54', '2022-06-22 05:40:54'),
(65, 'RBP_37215_220620222', 'msr projects', 1, 'Raju', 1, 'inndata analytics', 'vidyasagar@inndata.in', '1', '1', 1, 3, 'Myanmur Bank 2', '1', '2', 500000.00, 0.00, 0.00, 6000000.00, 6000000.00, 12, '2', '2022-06-22', '2022-07-30', '2022-09-30', '1', '1', 600000.00, 'www.inndata.in', '', NULL, NULL, NULL, 112, '2022-06-22 05:44:12', '2022-06-22 05:44:12'),
(66, 'RBP_31046_230620221', 'IDC INDIA', 15, 'Nitin', 15, 'DesiVps', 'milan@desivps.com', '2', '1', 1, 4, 'deal won', '7', '4', 30000.00, 10000.00, 0.00, 370000.00, 1090000.00, 36, '1', '2022-06-23', '2021-05-01', '2021-05-01', '1', '1', 108000.00, 'www.desivps.com', 'storage/app/public/uploads/pipelines/RBP_31046_230620221/DesiVPS-Colo-DR-240W_power-Amravati-Requirements_gathering_Sheet.pdf', NULL, NULL, NULL, 66, '2022-06-23 00:47:51', '2022-06-23 00:47:51'),
(67, 'RBP_93184_230620221', 'Rajendran', 24, 'rajendran', 24, 'Naser Tanning', 'ramesh@nasser.co.in', '8', '1', 3, 38, 'we are working for 6 Months, need to visit customer.', '8', '5', 1.00, 2.00, 3.00, 17.00, 32.00, 24, '1', '2022-06-23', '2022-09-23', '2023-05-23', '1', '1', 2.40, 'http://naser-group.com/', '', NULL, NULL, NULL, 43, '2022-06-23 04:11:12', '2022-06-23 04:11:12'),
(68, 'RBP_93184_230620222', 'Rajendran', 24, 'rajendran', 24, 'India health care', 'venkat@ghcbp.com', '5', '1', 2, 23, 'need to discuss for servers co location', '1', '5', 2.00, 2.00, 2.00, 28.00, 80.00, 36, '1', '2022-06-23', '2022-08-23', '2022-10-30', '1', '1', 7.20, 'http://indiahealthcaresolutions.com/', '', NULL, NULL, NULL, 43, '2022-06-23 04:16:01', '2022-06-23 04:16:01'),
(69, 'RBP_93184_230620223', 'Rajendran', 24, 'rajendran', 13, 'Manapuram finance', 'mridul@manappuram.com', '1', '1', 3, 38, 'IBM CLOUD customer, he is existing customer for us.', '1', '2', 2.00, 2.00, 2.00, 28.00, 28.00, 12, '2', '2022-06-23', '2022-09-30', '2023-01-25', '1', '1', 2.40, 'https://www.manappuram.com/', '', NULL, NULL, NULL, 43, '2022-06-23 04:22:27', '2022-06-23 04:22:27'),
(70, 'RBP_93601_240620221', 'PP', 12, 'Ravish', 12, 'AVI Solar Energy Pvt Ltd', 'itsupport@skyfri.com', '8', '1', 1, 3, 'Customer currently not happy with AWS billing, and they want to upgrade the current infrastructure in cloud.', '1', '2', 35000.00, 25000.00, 0.00, 445000.00, 445000.00, 12, '2', '2022-06-24', '2022-06-03', '2022-07-20', '1', '1', 42000.00, 'https://www.avisolar.com/', '', NULL, NULL, NULL, 74, '2022-06-23 23:20:08', '2022-06-23 23:20:08'),
(71, 'RBP_93601_240620222', 'Bangalore', 12, 'Ravish', 12, 'Chaitanya India FIN Credit Private Limited', 'shyam.prakash@chetnayaindia.in', '1', '1', 2, 23, 'Client is looking to host application on cloud currently they are with AWS', '1', '3', 45000.00, 30000.00, 0.00, 570000.00, 570000.00, 12, '2', '2022-06-24', '2022-05-18', '2022-09-13', '1', '1', 54000.00, 'http://www.chaitanyaindia.in/', '', NULL, NULL, NULL, 74, '2022-06-23 23:29:04', '2022-06-23 23:29:04'),
(72, 'RBP_93601_240620223', 'Bangalore', 12, 'Ravish', 12, 'eMudhra Limited', 'prathapa.s@emudhra.com', '2', '1', 1, 1, 'Client is looking for host application in cloud', '1', '3', 33000.00, 25000.00, 0.00, 421000.00, 421000.00, 12, '2', '2022-06-24', '2022-03-09', '2022-08-18', '1', '1', 39600.00, 'https://www.emudhra.com/', '', NULL, NULL, NULL, 74, '2022-06-23 23:34:22', '2022-06-23 23:34:22'),
(73, 'RBP_28045_240620221', 'Gaian', 29, 'Praneeth', 29, 'Gaian Solutions India Pvt Ltd', 'someswara.chanchali@gaiansolutions.com', '2', '1', 1, 9, 'Discussion with customer for final draft on exact requirement', '1', '3', 100000.00, 0.00, 1200000.00, 2400000.00, 2400000.00, 12, '1', '2022-06-24', '2022-06-16', '2022-10-30', '1', '1', 120000.00, 'www.gaiansolutions.com', '', NULL, NULL, NULL, 30, '2022-06-23 23:35:51', '2022-06-23 23:35:51'),
(74, 'RBP_93601_240620224', 'Bangalore', 12, 'Ravish', 12, 'Leapfrog Semiconductor Pvt Ltd', 'echerukuri@leapfrogsemi.com', '8', '1', 2, 24, 'Customer is looking for new ONPREM setup in Bangalore', '1', '2', 0.00, 550000.00, 0.00, 550000.00, 550000.00, 12, '5', '2022-06-24', '2022-06-02', '2022-07-27', '1', '2', 38500.00, 'https://leapfrogsemi.com/', '', NULL, NULL, NULL, 74, '2022-06-23 23:44:07', '2022-06-23 23:44:07'),
(75, 'RBP_98260_240620221', 'Bangalore', 12, 'Muzammil', 12, 'Sara Suole Pvt Ltd', 'rajeshr@saragroup.in', '8', '1', 1, 5, 'Customer is looking for cloud storage', '1', '3', 22000.00, 150000.00, 0.00, 414000.00, 414000.00, 12, '2', '2022-06-24', '2022-06-09', '2022-08-17', '1', '1', 26400.00, 'https://www.saragroup.in/', '', NULL, NULL, NULL, 110, '2022-06-24 00:27:29', '2022-06-24 00:27:29'),
(76, 'RBP_98260_240620222', 'Athena It and Telecom Solutions Private Limited', 12, 'Muzammil', 12, 'Sunchirin Autoparts  Pvt Ltd', 'harish@sunchirin.net', '8', '1', 1, 3, 'Customer is looking to host ERP on Cloud', '1', '3', 33000.00, 18000.00, 0.00, 414000.00, 414000.00, 12, '2', '2022-06-24', '2022-06-15', '2022-08-17', '1', '1', 39600.00, 'http://sunchirin.net/', '', NULL, NULL, NULL, 110, '2022-06-24 00:36:01', '2022-06-24 00:36:01'),
(77, 'RBP_98260_240620223', 'Athena It and Telecom Solutions Private Limited', 12, 'Muzammil', 12, 'Romas Electroengineering Pvt. Ltd', 'psrao@romas.co.in', '8', '1', 1, 3, 'Customer is looking for application hosting in cloud', '1', '3', 36000.00, 22000.00, 0.00, 454000.00, 454000.00, 12, '2', '2022-06-24', '2022-06-10', '2022-09-07', '1', '1', 43200.00, 'romas.co.in', '', NULL, NULL, NULL, 110, '2022-06-24 00:44:36', '2022-06-24 00:44:36'),
(78, 'RBP_98260_240620224', 'Athena It and Telecom Solutions Private Limited', 12, 'Muzammil', 12, 'Goldenlight VLSI Pvt Ltd', 'rashid.akhtar@goldenlightssolutions.com', '7', '1', 1, 1, 'Customer is looking for DR currently having ONPREM setup', '1', '3', 37000.00, 21000.00, 0.00, 465000.00, 465000.00, 12, '2', '2022-06-24', '2022-06-09', '2022-08-11', '1', '1', 44400.00, 'http://goldenlightvlsi.com/', '', NULL, NULL, NULL, 110, '2022-06-24 00:50:20', '2022-06-24 00:50:20'),
(79, 'RBP_47985_270620221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'Tip Top Furniture Pvt Ltd', 'shamshir@tbmail.in', '8', '1', 1, 3, 'The customer require 2-Vms for their APP and DB Server', '1', '1', 19732.00, 0.00, 0.00, 236784.00, 236784.00, 12, '1', '2022-06-27', '2022-06-27', '2022-07-11', '1', '1', 23678.40, 'https://tiptopfurniture.co.in/', 'storage/app/public/uploads/pipelines/RBP_47985_270620221/TIP TOP Furnitures_Requirements Gathering Template_v1.3.xlsx', NULL, NULL, NULL, 105, '2022-06-27 06:09:35', '2022-06-27 06:09:35'),
(80, 'RBP_60174_280620221', 'Serve Desk Services', 1, 'Raj Mohan', 1, 'Fathima Institute of Medical Sciences', 'fimslibrarian7899@gmail.com', '5', '1', 1, 3, '4 cloud infra with backup requirement along with our applications', '4', '1', 40000.00, 0.00, 0.00, 480000.00, 1440000.00, 36, '2', '2022-06-28', '2022-06-30', '2022-07-11', '1', '1', 144000.00, 'https://www.fimskadapa.in/', '', NULL, NULL, NULL, 96, '2022-06-28 02:25:19', '2022-06-28 02:25:19'),
(81, 'RBP_60174_280620221', 'Serve Desk Services', 1, 'Raj Mohan', 1, 'Maple Software solutions', 'gopal.krishna@maplesoftware.in', '2', '1', 1, 3, 'Looking for cloud infra for their new project cloud servers with DR', '1', '2', 50000.00, 0.00, 0.00, 600000.00, 1800000.00, 36, '2', '2022-06-28', '2022-07-15', '2022-08-26', '1', '1', 180000.00, 'https://www.maplesoft.com/', '', NULL, NULL, NULL, 96, '2022-06-28 02:28:37', '2022-06-28 02:28:37'),
(82, 'RBP_93601_280620221', 'Professional Pal', 12, 'Ravish', 12, 'Leapfrog Semiconductor Pvt Ltd', 'echerukuri@leapfrogsemi.com', '8', '1', 2, 24, 'Customer head office is in US in bangalore they are looking for onprem setup customer yet to receive details from Head office.', '1', '3', 0.00, 550000.00, 0.00, 550000.00, 550000.00, 12, '2', '2022-06-28', '2022-05-10', '2022-08-30', '1', '2', 38500.00, 'https://leapfrogsemi.com/', '', NULL, NULL, NULL, 74, '2022-06-28 04:32:48', '2022-06-28 04:32:48'),
(83, 'RBP_93601_280620222', 'Professional Pal', 12, 'Ravish', 12, 'eMudhra Limited', 'prathapa.s@emudhra.com', '4', '1', 1, 1, 'Client are looking for Cloud Storage', '1', '3', 33000.00, 25000.00, 0.00, 421000.00, 421000.00, 12, '2', '2022-06-28', '2022-02-16', '2022-08-23', '1', '1', 39600.00, 'https://www.emudhra.com/', '', NULL, NULL, NULL, 74, '2022-06-28 04:40:32', '2022-06-28 04:40:32'),
(84, 'RBP_93601_280620223', 'Professional Pal', 12, 'Ravish', 12, 'AVI Solar Energy Pvt Ltd', 'itsupport@skyfri.com', '8', '1', 1, 1, 'Customer currently not happy with AWS billing, and they want to upgrade the current infrastructure in cloud.', '1', '3', 35000.00, 25000.00, 0.00, 445000.00, 445000.00, 12, '2', '2022-06-28', '2022-04-07', '2022-09-07', '1', '1', 42000.00, 'https://www.avisolar.com/', '', NULL, NULL, NULL, 74, '2022-06-28 04:46:25', '2022-06-28 04:46:25'),
(85, 'RBP_93601_280620224', 'Professional Pal', 12, 'Ravish', 12, 'Chaitanya India FIN Credit Private Limited', 'shyam.prakash@chetnayaindia.in', '1', '1', 1, 1, 'Client is looking to host application on cloud currently they are with AWS', '1', '2', 45000.00, 30000.00, 0.00, 570000.00, 570000.00, 12, '2', '2022-06-28', '2022-03-16', '2022-09-13', '1', '1', 54000.00, 'http://www.chaitanyaindia.in/', '', NULL, NULL, NULL, 74, '2022-06-28 04:50:11', '2022-06-28 04:50:11'),
(86, 'RBP_93601_280620225', 'Professional Pal', 12, 'Ravish', 35, 'Graviton Research Capital LLP', 'pankaj.kumar@gravitontrading.com', '1', '1', 2, 23, 'Client is looking for The Rack (42U 600 * 1000)Rack Space', '8', '6', 400000.00, 300000.00, 0.00, 5100000.00, 5100000.00, 12, '2', '2022-06-28', '2021-11-18', '2022-09-21', '1', '2', 510000.00, 'www.gravitontrading.com', '', NULL, NULL, NULL, 74, '2022-06-28 05:02:31', '2022-06-28 05:02:31'),
(87, 'RBP_93601_290620221', 'Professional Pal', 12, 'Ravish', 12, 'The Muthoot Group', 'itsarath@muthootgroup.com', '1', '1', 1, 1, 'Customer is looking for cloud storage', '1', '2', 21000.00, 15000.00, 0.00, 267000.00, 267000.00, 12, '2', '2022-06-29', '2022-06-29', '2022-08-10', '1', '1', 25200.00, 'http://www.muthootgroup.com/', '', NULL, NULL, NULL, 74, '2022-06-29 08:25:24', '2022-06-29 08:25:24'),
(88, 'RBP_02851_020720221', 'Labyrinth Solutions', 1, 'Bhaskar', 1, 'Sreedevi Digitals Pvt Ltd', 'noc@sdvcomm.in', '6', '1', 1, 3, 'Customer is interested in our product', '3', '1', 25000.00, 5000.00, 0.00, 305000.00, 905000.00, 36, '2', '2022-07-02', '2022-06-28', '2022-07-02', '1', '1', 90000.00, 'https://business.google.com/website/sree-devi-digital-systems-pvt-ltd/', '', NULL, NULL, NULL, 31, '2022-07-02 07:16:15', '2022-07-02 07:16:15'),
(89, 'RBP_37215_040720221', 'MSR Projects', 1, 'JVSN RAJU', 1, 'InnData Analytics_Dubai Hospital Project', 'vidyasagar@inndata.in', '5', '1', 1, 3, 'this is for Dubai-based hospital project implementation  for cloud instances and storage', '1', '2', 150000.00, 0.00, 0.00, 1800000.00, 5400000.00, 36, '2', '2022-07-04', '2022-07-15', '2022-07-30', '1', '1', 540000.00, 'www.inndata.in', '', NULL, NULL, NULL, 112, '2022-07-04 00:41:59', '2022-07-04 00:41:59'),
(90, 'RBP_46078_040720221', 'CLOUD CORNER SOLUTIONS Pvt Ltd', 13, 'Mr. Bejoy Thomas', 13, 'Akay Natural Ingredients Private Limited', 'jijo.easow@akay-group.com', '8', '1', 1, 3, 'This is an SAP DC-DR requirement, presently the client DC is Onprem and DR on AWS', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '1', '2022-07-04', '2022-07-05', '2022-08-22', '1', '1', 0.00, 'www.akay-group.com', 'storage/app/public/uploads/pipelines/RBP_46078_040720221/Akay Naturals Cloud_Requirements Gathering Template_v1.3.xlsx', NULL, NULL, NULL, 108, '2022-07-04 01:13:53', '2022-07-04 01:13:53'),
(91, 'RBP_47985_120720221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'Techbrein', 'shamshir@tbmail.in', '2', '1', 1, 3, 'The client has a requirement for the mentioned Infra, attached and it should work with K3S', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '1', '2022-07-12', '2022-07-15', '2022-08-23', '1', '1', 0.00, 'https://www.techbrein.com/', 'storage/app/public/uploads/pipelines/RBP_47985_120720221/Cloud_Requirements Gathering Template_v1.3.xlsx', NULL, NULL, NULL, 105, '2022-07-12 01:07:47', '2022-07-12 01:07:47'),
(92, 'RBP_93601_120720221', 'Professional Pal', 12, 'Ravish', 12, 'Unit Alfa', 'unitalfa@gmail.com', '8', '1', 1, 9, 'Client is looking for 1VM with backup', '2', '1', 19000.00, 10000.00, 0.00, 238000.00, 238000.00, 12, '2', '2022-07-12', '2022-07-12', '2022-07-21', '1', '1', 22800.00, 'www.unitalfa.com', '', NULL, NULL, NULL, 74, '2022-07-12 12:33:01', '2022-07-12 12:33:01'),
(93, 'RBP_04569_140720221', 'BALAJI AI INFOTECH PVT. LTD.,`', 1, 'SARMA', 1, 'NRKR TEXTILES', 'info@nrkrtextiles.com', '8', '1', 1, 3, 'Still in discussions with Management and their SI.', '1', '2', 50000.00, 0.00, 0.00, 600000.00, 600000.00, 12, '2', '2022-07-14', '2022-08-16', '2022-09-30', '1', '1', 60000.00, 'www.nrkrtextiles.com', '', NULL, NULL, NULL, 51, '2022-07-14 02:32:32', '2022-07-14 02:32:32'),
(94, 'RBP_93601_190720221', 'Professional Pal', 12, 'Ravish', 12, 'VedaSoft Technologies', 'bk@vedhasoft.in', '2', '1', 1, 5, '1 VM: HANA Server\r\n•	Suse Linus OS \r\n•	128 GB RAM\r\n•	500 Gb HDD\r\n•	OS & Database management \r\n\r\n1 VM: Windows Server\r\n•	Windows OS \r\n•	Minimum 64 GB RAM\r\n•	500GB HDD\r\n•	60 RDP', '2', '1', 35000.00, 15000.00, 0.00, 435000.00, 435000.00, 12, '2', '2022-07-19', '2022-07-19', '2022-07-22', '1', '1', 42000.00, 'www.vedhasoft.in', '', NULL, NULL, NULL, 74, '2022-07-19 05:40:31', '2022-07-19 05:40:31'),
(95, 'RBP_09867_210720221', 'Digital Verto', 1, 'Sarma S N', 1, 'Simhachalam', 'simha.jp@avies.in', '2', '1', 1, 3, 'Client is looking for Two VMs', '1', '2', 30000.00, 0.00, 0.00, 360000.00, 1080000.00, 36, '2', '2022-07-21', '2022-09-12', '2022-09-30', '1', '1', 108000.00, 'https://avies.in/', '', NULL, NULL, NULL, 71, '2022-07-21 00:46:16', '2022-07-21 00:46:16'),
(96, 'RBP_09867_210720222', 'Digital Verto', 1, 'Sarma S N', 1, 'Sasdal Enterprises Pvt Ltd', 'rsm@sasdal.com', '8', '1', 1, 3, 'Client is looking for Cloud servers for their online applications', '1', '2', 60000.00, 0.00, 0.00, 720000.00, 2160000.00, 36, '2', '2022-07-21', '2022-09-19', '2022-10-10', '1', '1', 216000.00, 'https://www.theroyalev.com/', '', NULL, NULL, NULL, 71, '2022-07-21 00:51:27', '2022-07-21 00:51:27'),
(97, 'RBP_60174_220720221', 'Serve Desk Services', 1, 'Raj Mohan', 1, 'Inspire Edge IT services', 'rajmohan@inspireedge.in', '2', '1', 2, 23, 'colocation rack requirement as per the enclosed sheet', '2', '1', 25000.00, 10000.00, 0.00, 310000.00, 310000.00, 12, '2', '2022-07-22', '2022-07-22', '2022-07-29', '1', '1', 30000.00, 'www.inspireedge.in', 'storage/app/public/uploads/pipelines/RBP_60174_220720221/Serve Desk - Payout for Nekkanti Invoice.xlsx', NULL, NULL, NULL, 96, '2022-07-21 22:59:18', '2022-07-21 22:59:18'),
(98, 'RBP_60174_220720221', 'Serve Desk Services', 1, 'Raj Mohan', 1, 'Sankar Foundation Hospitals', 'rajmohan@servedesk.in', '5', '1', 1, 3, 'Sankar foundation hospital we are working on a hospital management application bundled with cloud infra', '1', '2', 40000.00, 0.00, 0.00, 480000.00, 1440000.00, 36, '2', '2022-07-22', '2022-08-05', '2022-08-27', '1', '1', 144000.00, 'www.sankarfoundation.com', '', NULL, NULL, NULL, 96, '2022-07-22 01:26:01', '2022-07-22 01:26:01'),
(99, 'RBP_60174_220720221', 'Serve Desk Services', 1, 'Raj Mohan', 1, 'Intelli Pollock schools', 'rajmohan@servedesk.in', '7', '1', 1, 3, 'we are working on HRM application for intelli Pollock schools along with cloud infra', '1', '2', 22000.00, 0.00, 0.00, 264000.00, 792000.00, 36, '2', '2022-07-22', '2022-07-22', '2022-08-31', '1', '1', 79200.00, 'https://www.intellischool.in/', '', NULL, NULL, NULL, 96, '2022-07-22 01:30:05', '2022-07-22 01:30:05'),
(100, 'RBP_60174_220720221', 'Serve Desk Services', 1, 'Raj Mohan', 1, 'Honey foods', 'rajmohan@servedesk.in', '9', '1', 1, 3, 'we are working on honey foods HRM application implementation along with cloud infra', '1', '2', 22000.00, 0.00, 0.00, 264000.00, 264000.00, 12, '2', '2022-07-22', '2022-07-30', '2022-08-30', '1', '1', 26400.00, 'www.honeyfoodsvizag.com', '', NULL, NULL, NULL, 96, '2022-07-22 01:33:17', '2022-07-22 01:33:17'),
(101, 'RBP_53261_220720221', 'Smartsoft India Solutions Pvt. Ltd', 13, 'Mr. Saneesh', 13, 'Spices Board of India', 'saneesh@smartsoft.co.in', '8', '2', 1, 3, 'The client is panning to move their DC-Infra( 5 VMs) to cloud.', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '1', '2022-07-22', '2022-07-27', '2022-09-19', '1', '1', 0.00, 'http://www.indianspices.com/', 'storage/app/public/uploads/pipelines/RBP_53261_220720221/Spice Board Cloud_Requirements Gathering Template_v1.3.xlsx', NULL, NULL, NULL, 46, '2022-07-22 04:12:53', '2022-07-22 04:12:53'),
(102, 'RBP_93184_280720221', 'Felix Infotech', 24, 'Rajendran', 19, 'A L Enterprise', 'mughalu.official@gmail.com', '9', '1', 1, 3, '8 core / 16 GB/ 500 GB SSD / 500 Datatransfer Rate / Public IP -1 / AV', '1', '2', 11000.00, 0.00, 0.00, 132000.00, 396000.00, 36, '2', '2022-07-28', '2022-07-31', '2022-08-30', '1', '3', 0.00, '.', '', NULL, NULL, NULL, 43, '2022-07-28 03:41:37', '2022-07-28 03:41:37'),
(103, 'RBP_93601_280720221', 'Professional Pal', 12, 'Ravish', 12, 'Airowire Networks Private Limited', 'bk@vedhasoft.in', '2', '1', 1, 3, 'Currently they are using cloud services from ASURE', '1', '1', 29500.00, 10000.00, 0.00, 364000.00, 364000.00, 12, '2', '2022-07-28', '2022-07-28', '2022-08-24', '1', '1', 35400.00, 'https://airowire.com/', '', NULL, NULL, NULL, 74, '2022-07-28 07:34:19', '2022-07-28 07:34:19');
INSERT INTO `pipelines` (`id`, `potential_id`, `rbp_name`, `rbp_state`, `sales_owner`, `customer_state`, `customer_name`, `customer_email_id`, `business_industry`, `account_type`, `sbunits_id`, `sbu_product_id`, `opportunity_details`, `stage`, `rating_id`, `mrc`, `otc`, `arc`, `acv`, `tcv`, `contract_period`, `payment_terms`, `opportunity_date`, `proposal_date`, `closing_date`, `customer_type`, `commission_type`, `projected_commission`, `customer_website`, `opportunity_docs`, `status`, `rejection_comment`, `status_date`, `partner_id`, `created_at`, `updated_at`) VALUES
(104, 'RBP_47985_040820221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'Brocade India Polytex Limited', 'shamshir@tbmail.in', '8', '1', 1, 3, 'The client is looking for a DR solution', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '1', '2022-08-04', '2022-08-05', '2022-09-12', '1', '1', 0.00, 'http://www.brocadegroup.com/', 'storage/app/public/uploads/pipelines/RBP_47985_040820221/Brocode Cloud_Requirements Gathering Template_v1.3.xlsx', NULL, NULL, NULL, 105, '2022-08-04 08:04:14', '2022-08-04 08:04:14'),
(105, 'RBP_20934_120820221', 'Ampler Technologies Pvt Ltd', 29, 'Satish', 29, 'Spansules Pharmatech Pvt Ltd', 'Madhu.k@ampler.in', '5', '1', 1, 1, 'Need to take weekly / monthly backup to cloud from NAS storage', '2', '1', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '2', '2022-08-12', '2022-08-12', '2022-08-25', '1', '1', 0.00, 'www.spansulespharma.com', '', NULL, NULL, NULL, 77, '2022-08-12 01:38:54', '2022-08-12 01:38:54'),
(106, 'RBP_03571_220820221', 'TRACE NETWORK', 29, 'M N Rajasekhar', 29, 'Radscribe', 'mkhan@radscribe.com', '5', '1', 1, 3, 'Customer is looking for VDI.', '2', '1', 50000.00, 25000.00, 0.00, 625000.00, 625000.00, 12, '2', '2022-08-22', '2022-08-23', '2022-08-26', '1', '1', 60000.00, 'www.radscribe.com', '', NULL, NULL, NULL, 42, '2022-08-22 07:11:10', '2022-08-22 07:11:10'),
(107, 'RBP_03571_220820222', 'TRACE NETWORK', 29, 'M N Rajasekhar', 29, 'CINEOM', 'riaj@cineom.com', '6', '1', 1, 3, 'Customer is looking for the cloud solution.', '1', '1', 50000.00, 0.00, 0.00, 600000.00, 600000.00, 12, '2', '2022-08-22', '2022-08-22', '2022-09-30', '1', '1', 60000.00, 'www.cineom.com', '', NULL, NULL, NULL, 42, '2022-08-22 07:15:39', '2022-08-22 07:15:39'),
(108, 'RBP_06491_250820221', 'Kawaljeet Dureja', 8, 'Vijay Sharma', 35, 'Tarun Kandhari', 'tarunkandhari@catarunkandhari.com', '1', '1', 1, 3, '14 Core processor/96 GB RAM/2000 GB SSD Storage/24*7 operation for 50 users/OS-Window', '2', '1', 14000.00, 10000.00, 168000.00, 346000.00, 346000.00, 12, '1', '2022-08-25', '2022-08-26', '2022-09-12', '1', '1', 16800.00, 'https://catarunkandhari.com/', '', NULL, NULL, NULL, 9, '2022-08-25 05:55:50', '2022-08-25 05:55:50'),
(109, 'RBP_06491_250820222', 'Kawaljeet Dureja', 8, 'Vijay Sharma', 8, 'Ram', 'info@sahugajak.com', '10', '1', 1, 3, '1 Core Processor/2 GB RAM/60 GB SSD Storage/OS-Window', '2', '1', 500.00, 5000.00, 6000.00, 17000.00, 17000.00, 12, '1', '2022-08-25', '2022-08-26', '2022-09-12', '1', '2', 1700.00, 'https://sahugajak.com/', '', NULL, NULL, NULL, 9, '2022-08-25 06:28:10', '2022-08-25 06:28:10'),
(110, 'RBP_47985_310820221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'Moulana Hospital', 'shamshir@techbrein.com', '5', '1', 1, 3, 'The client is looking for a DR on cloud for their HIS APP and DB Server', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 36, '1', '2022-08-31', '2022-09-01', '2022-10-10', '1', '1', 0.00, 'https://moulanahospital.com/', 'storage/app/public/uploads/pipelines/RBP_47985_310820221/Cloud_Requirements Gathering Template_v1. Moulana Hospital.xlsx', NULL, NULL, NULL, 105, '2022-08-31 04:58:25', '2022-08-31 04:58:25'),
(111, 'RBP_47985_050920221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'Moulana Hospital', 'shamshir@techbrein.com', '5', '1', 1, 3, 'The customer is looking for a proposal for DC, which is presently hosted Onprem', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 36, '1', '2022-09-05', '2022-09-06', '2022-10-25', '1', '1', 0.00, 'https://moulanahospital.com/', 'storage/app/public/uploads/pipelines/RBP_47985_050920221/Cloud_Requirements Gathering Template_v1. Moulana Hospital.xlsx', NULL, NULL, NULL, 105, '2022-09-05 00:53:53', '2022-09-05 00:53:53'),
(112, 'RBP_03571_100920221', 'TRACE NETWORK', 29, 'Rajasekhar', 29, 'Vouz BPO', 'admin@vouzbpo.com', '2', '1', 2, 23, 'Customer is looking for 12U Rack Space.', '3', '1', 40000.00, 20000.00, 0.00, 500000.00, 500000.00, 12, '2', '2022-09-10', '2022-09-10', '2022-09-12', '1', '1', 48000.00, 'www.vouvbpo.com', '', NULL, NULL, NULL, 42, '2022-09-10 08:00:39', '2022-09-10 08:00:39'),
(113, 'RBP_06491_280920221', 'Kawaljeet Dureja', 8, 'Vijay Sharma', 35, 'Shri ram institute of industrial research', 'edp@shriraminstitute.org', '7', '1', 1, 1, 'Required File server with below configuration\r\nUsers:-  20- 25 users\r\n3TB Storage capacity\r\nRBAC for user\r\nSecure access over public network', '1', '1', 10.00, 6.00, 1.00, 127.00, 127.00, 12, '1', '2022-09-28', '2022-09-30', '2022-10-28', '1', '1', 12.00, 'https://www.shriraminstitute.org/', '', NULL, NULL, NULL, 9, '2022-09-28 06:14:11', '2022-09-28 06:14:11'),
(114, 'RBP_93601_091120221', 'Professional Pal', 12, 'Ravish', 12, 'Ubona Information technology', 'ravish@professionalpal.in', '3', '1', 1, 3, 'Customer looking for cloud services', '1', '2', 47300.00, 18600.00, 0.00, 586200.00, 586200.00, 12, '2', '2022-11-09', '2022-11-21', '2022-12-16', '1', '1', 56760.00, 'www.ubona.com', '', NULL, NULL, NULL, 74, '2022-11-09 02:10:19', '2022-11-09 02:10:19'),
(115, 'RBP_93601_091120222', 'Professional Pal', 12, 'Ravish', 12, 'Ubona Information technology', 'ravish@professionalpal.in', '3', '1', 1, 3, 'Customer looking for cloud services', '1', '2', 47300.00, 18600.00, 0.00, 586200.00, 586200.00, 12, '2', '2022-11-09', '2022-11-21', '2022-12-16', '1', '1', 56760.00, 'www.ubona.com', '', NULL, NULL, NULL, 74, '2022-11-09 02:11:43', '2022-11-09 02:11:43'),
(116, 'RBP_93601_091120223', 'Professional Pal', 12, 'Ravish', 12, 'Ubona Information technology', 'ravish@professionalpal.in', '3', '1', 1, 3, 'Customer looking for cloud services', '1', '2', 47300.00, 18600.00, 0.00, 586200.00, 586200.00, 12, '2', '2022-11-09', '2022-11-21', '2022-12-16', '1', '1', 56760.00, 'www.ubona.com', '', NULL, NULL, NULL, 74, '2022-11-09 02:12:29', '2022-11-09 02:12:29'),
(117, 'RBP_93601_091120224', 'Professional Pal', 12, 'Ravish', 12, 'Ubona Information technology', 'ravish@professionalpal.in', '3', '1', 1, 3, 'Customer looking for cloud services', '1', '2', 47300.00, 18600.00, 0.00, 586200.00, 586200.00, 12, '2', '2022-11-09', '2022-11-21', '2022-12-16', '1', '1', 56760.00, 'www.ubona.com', '', NULL, NULL, NULL, 74, '2022-11-09 02:13:31', '2022-11-09 02:13:31'),
(118, 'RBP_93601_091120225', 'Professional Pal', 12, 'Ravish', 12, 'Ubona Information technology', 'ravish@professionalpal.in', '3', '1', 1, 3, 'Customer looking for cloud services', '1', '2', 47300.00, 18600.00, 0.00, 586200.00, 586200.00, 12, '2', '2022-11-09', '2022-11-21', '2022-12-16', '1', '1', 56760.00, 'www.ubona.com', '', NULL, NULL, NULL, 74, '2022-11-09 02:14:17', '2022-11-09 02:14:17'),
(119, 'RBP_93184_201120221', 'Felix Infotech Pvt Ltd', 24, 'Anand.D', 24, 'Aaratech Pvt Ltd', 'anand@felixinfotech.com', '2', '1', 2, 23, 'Application Dedicated Server	16GB Ram, 2 TB HDD, Server OS Higher End, 8 Core', '3', '2', 15000.00, 1.00, 15000.00, 195001.00, 195001.00, 12, '2', '2022-11-20', '2022-11-16', '2022-12-21', '1', '1', 18000.00, 'www.aaratech.com', 'storage/app/public/uploads/pipelines/RBP_93184_201120221/Aratech PI Excel.xlsx', NULL, NULL, NULL, 43, '2022-11-20 01:06:34', '2022-11-20 01:06:34'),
(120, 'RBP_93184_201120222', 'Felix Infotech Pvt Ltd', 24, 'Anand.D', 24, 'Aaratech Pvt Ltd', 'anand@felixinfotech.com', '2', '1', 2, 23, 'Application Dedicated Server	16GB Ram, 2 TB HDD, Server OS Higher End, 8 Core', '3', '2', 15000.00, 1.00, 15000.00, 195001.00, 195001.00, 12, '2', '2022-11-20', '2022-11-16', '2022-12-21', '1', '1', 18000.00, 'www.aaratech.com', 'storage/app/public/uploads/pipelines/RBP_93184_201120222/Aratech PI Excel.xlsx', NULL, NULL, NULL, 43, '2022-11-20 01:07:31', '2022-11-20 01:07:31'),
(121, 'RBP_93184_201120223', 'Felix Infotech Pvt Ltd', 24, 'Anand.D', 24, 'Aaratech Pvt Ltd', 'anand@felixinfotech.com', '2', '1', 2, 23, 'Application Dedicated Server	16GB Ram, 2 TB HDD, Server OS Higher End, 8 Core', '3', '2', 15000.00, 1.00, 15000.00, 195001.00, 195001.00, 12, '2', '2022-11-20', '2022-11-16', '2022-12-21', '1', '1', 18000.00, 'www.aaratech.com', 'storage/app/public/uploads/pipelines/RBP_93184_201120223/Aratech PI Excel.xlsx', NULL, NULL, NULL, 43, '2022-11-20 01:08:37', '2022-11-20 01:08:37'),
(122, 'RBP_93184_201120224', 'Felix Infotech Pvt Ltd', 24, 'Anand.D', 24, 'Aaratech Pvt Ltd', 'anand@felixinfotech.com', '2', '1', 2, 23, 'Application Dedicated Server	16GB Ram, 2 TB HDD, Server OS Higher End, 8 Core', '3', '2', 15000.00, 1.00, 15000.00, 195001.00, 195001.00, 12, '2', '2022-11-20', '2022-11-16', '2022-12-21', '1', '1', 18000.00, 'www.aaratech.com', 'storage/app/public/uploads/pipelines/RBP_93184_201120224/Aratech PI Excel.xlsx', NULL, NULL, NULL, 43, '2022-11-20 01:09:15', '2022-11-20 01:09:15'),
(123, 'RBP_93184_201120225', 'Felix Infotech Pvt Ltd', 24, 'Anand.D', 24, 'Aaratech Pvt Ltd', 'anand@felixinfotech.com', '2', '1', 2, 23, 'Application Dedicated Server	16GB Ram, 2 TB HDD, Server OS Higher End, 8 Core', '3', '2', 15000.00, 1.00, 15000.00, 195001.00, 195001.00, 12, '2', '2022-11-20', '2022-11-16', '2022-12-21', '1', '1', 18000.00, 'www.aaratech.com', 'storage/app/public/uploads/pipelines/RBP_93184_201120225/Aratech PI Excel.xlsx', NULL, NULL, NULL, 43, '2022-11-20 01:11:14', '2022-11-20 01:11:14'),
(124, 'RBP_93184_201120226', 'Felix Infotech Pvt Ltd', 24, 'Anand.D', 24, 'Bhavish graphics', 'anand@felixinfotech.com', '6', '1', 1, 1, 'Customer need 35TB -40 TB Backup in cloud. Existing user of -- AWS.\r\n\r\nNeed quote with uploading & downloading charges with, Maintenance cost.', '3', '2', 13333.00, 1.00, 140000.00, 299997.00, 299997.00, 12, '2', '2022-11-20', '2022-11-22', '2022-12-20', '1', '1', 15999.60, 'www.bhavish.co.in', 'storage/app/public/uploads/pipelines/RBP_93184_201120226/Bhavish PI Excel.xlsx', NULL, NULL, NULL, 43, '2022-11-20 01:42:49', '2022-11-20 01:42:49'),
(125, 'RBP_60174_231120221', 'Serve desk', 1, 'Rajm9han', 1, 'Ramesh Hospitals', 'raj.g@servedesk.in', '5', '1', 1, 3, 'Cloud', '2', '1', 120000.00, 0.00, 0.00, 1440000.00, 4320000.00, 36, '2', '2022-11-23', '2022-11-24', '2022-12-31', '1', '1', 432000.00, 'www.servedesk.in', '', NULL, NULL, NULL, 96, '2022-11-23 05:37:23', '2022-11-23 05:37:23'),
(126, 'RBP_60174_231120221', 'Serve desk', 1, 'Rajm9han', 1, 'Ramesh Hospitals', 'raj.g@servedesk.in', '5', '1', 1, 3, 'Cloud', '2', '1', 120000.00, 0.00, 0.00, 1440000.00, 4320000.00, 36, '2', '2022-11-23', '2022-11-24', '2022-12-31', '1', '1', 432000.00, 'www.servedesk.in', '', NULL, NULL, NULL, 96, '2022-11-23 05:38:06', '2022-11-23 05:38:06'),
(127, 'RBP_60174_231120221', 'Serve desk', 1, 'Rajm9han', 1, 'Ramesh Hospitals', 'raj.g@servedesk.in', '5', '1', 1, 3, 'Cloud', '2', '1', 120000.00, 0.00, 0.00, 1440000.00, 4320000.00, 36, '2', '2022-11-23', '2022-11-24', '2022-12-31', '1', '1', 432000.00, 'www.servedesk.in', '', NULL, NULL, NULL, 96, '2022-11-23 05:38:48', '2022-11-23 05:38:48'),
(128, 'RBP_60174_231120221', 'Serve desk', 1, 'Rajmohan', 1, 'Ramesh Hospitals', 'raj.g@servedesk.in', '5', '1', 1, 3, 'Cloud', '2', '1', 120000.00, 0.00, 0.00, 1440000.00, 4320000.00, 36, '2', '2022-11-23', '2022-11-24', '2022-12-31', '1', '1', 432000.00, 'www.servedesk.in', '', NULL, NULL, NULL, 96, '2022-11-23 05:39:54', '2022-11-23 05:39:54'),
(129, 'RBP_60174_231120221', 'Serve desk', 1, 'Rajmohan', 1, 'Ramesh Hospitals', 'raj.g@servedesk.in', '5', '1', 1, 3, 'Cloud', '2', '1', 120000.00, 0.00, 0.00, 1440000.00, 4320000.00, 36, '2', '2022-11-23', '2022-11-24', '2022-12-31', '1', '1', 432000.00, 'www.servedesk.in', '', NULL, NULL, NULL, 96, '2022-11-23 05:41:11', '2022-11-23 05:41:11'),
(130, 'RBP_37215_241120221', 'MSR Projects', 1, 'JVSN RAJU', 1, 'Ramesh Hospitals', 'raju@msrinfraprojects.com', '5', '1', 1, 3, 'cloud servers with backup requirement', '2', '1', 120000.00, 0.00, 0.00, 1440000.00, 4320000.00, 36, '2', '2022-11-24', '2022-11-24', '2022-12-15', '1', '1', 432000.00, 'https://www.rameshhospitals.com/', '', NULL, NULL, NULL, 112, '2022-11-24 02:09:47', '2022-11-24 02:09:47'),
(131, 'RBP_47985_281120221', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'TEAM THAI', 'shamshir@techbrein.com', '9', '1', 1, 3, 'The client has below mentioned requirements\r\n1) 3 VMs with the mentioned configurations. They need proposal for both Linux and Windows. This is a requirement for their new operations in Dubai.\r\n2) Backup requirement - 4TB Storage', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '1', '2022-11-28', '2022-11-28', '2022-12-19', '1', '1', 0.00, 'https://www.teamthai.in/', 'storage/app/public/uploads/pipelines/RBP_47985_281120221/Cloud_Requirements Gathering Template- Techbrein - Team Thai.xlsx', NULL, NULL, NULL, 105, '2022-11-27 20:08:36', '2022-11-27 20:08:36'),
(132, 'RBP_47985_281120222', 'Techbrein Solutions Pvt Ltd', 13, 'Mr. Shamshir Ul Haq', 13, 'TEAM THAI', 'shamshir@techbrein.com', '9', '1', 1, 3, 'The client has below mentioned requirements\r\n1) 3 VMs with the mentioned configurations. They need proposal for both Linux and Windows. This is a requirement for their new operations in Dubai.\r\n2) Backup requirement - 4TB Storage', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 12, '1', '2022-11-28', '2022-11-28', '2022-12-19', '1', '1', 0.00, 'https://www.teamthai.in/', 'storage/app/public/uploads/pipelines/RBP_47985_281120222/Cloud_Requirements Gathering Template- Techbrein - Team Thai.xlsx', NULL, NULL, NULL, 105, '2022-11-27 20:10:05', '2022-11-27 20:10:05'),
(133, 'RBP_93601_161220221', 'Professional Pal', 12, 'Ravish', 12, 'BLUE CHIP COMPUTER CONSULTANTS PVT LTD', 'srikanth.t@bluechipsw.com', '2', '1', 1, 3, 'Customer is looking for DR and CLOUD', '1', '2', 43500.00, 21600.00, 0.00, 543600.00, 543600.00, 12, '2', '2022-12-16', '2022-12-15', '2023-01-25', '1', '1', 52200.00, 'https://www.bluechipsw.com/', '', NULL, NULL, NULL, 74, '2022-12-16 06:53:19', '2022-12-16 06:53:19'),
(134, 'RBP_93601_161220222', 'Professional Pal', 12, 'Ravish', 12, 'BLUE CHIP COMPUTER CONSULTANTS PVT LTD', 'srikanth.t@bluechipsw.com', '2', '1', 1, 3, 'Customer is looking for DR and CLOUD', '1', '2', 43500.00, 21600.00, 0.00, 543600.00, 543600.00, 12, '2', '2022-12-16', '2022-12-15', '2023-01-25', '1', '1', 52200.00, 'https://www.bluechipsw.com/', '', NULL, NULL, NULL, 74, '2022-12-16 06:54:11', '2022-12-16 06:54:11'),
(135, 'RBP_31046_290520231', 'MX Player', 15, 'IDC INDIA', 15, 'Amit Rajput', 'amitrajput@mxplayer.in', '6', '1', 2, 23, 'They are looking for colocation with hosting & other services', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 36, '2', '2023-05-29', '2023-05-26', '2023-09-30', '1', '1', 0.00, 'mxplayer.in', '', NULL, NULL, NULL, 66, '2023-05-28 23:42:03', '2023-05-28 23:42:03'),
(136, 'RBP_31046_290520231', 'MX Player', 15, 'IDC INDIA', 15, 'Amit Rajput', 'amitrajput@mxplayer.in', '6', '1', 2, 23, 'They are looking for colocation with hosting & other services', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 36, '2', '2023-05-29', '2023-05-26', '2023-09-30', '1', '1', 0.00, 'www.mxplayer.in', '', NULL, NULL, NULL, 66, '2023-05-28 23:42:47', '2023-05-28 23:42:47'),
(137, 'RBP_31046_290520231', 'MX Player', 15, 'IDC INDIA', 15, 'Amit Rajput', 'amitrajput@mxplayer.in', '6', '1', 2, 23, 'They are looking for colocation with hosting & other services', '1', '2', 100000.00, 50000.00, 100000.00, 1350000.00, 3950000.00, 36, '2', '2023-05-29', '2023-05-26', '2023-09-30', '1', '1', 360000.00, 'www.mxplayer.in', '', NULL, NULL, NULL, 66, '2023-05-28 23:44:00', '2023-05-28 23:44:00'),
(138, 'RBP_31046_290520231', 'MX Player', 15, 'IDC INDIA', 15, 'Amit Rajput', 'amitrajput@mxplayer.in', '6', '1', 2, 23, 'They are looking for colocation with hosting & other services', '1', '2', 100000.00, 50000.00, 100000.00, 1350000.00, 3950000.00, 36, '2', '2023-05-29', '2023-05-26', '2023-09-30', '1', '1', 360000.00, 'www.mxplayer.in', '', NULL, NULL, NULL, 66, '2023-05-28 23:44:43', '2023-05-28 23:44:43'),
(139, 'RBP_31046_290520231', 'MX Player', 15, 'IDC INDIA', 15, 'Amit Rajput', 'amitrajput@mxplayer.in', '6', '1', 2, 23, 'They are looking for colocation with hosting & other services', '1', '2', 100000.00, 50000.00, 100000.00, 1350000.00, 3950000.00, 36, '2', '2023-05-29', '2023-05-26', '2023-09-30', '1', '1', 360000.00, 'www.mxplayer.in', '', NULL, NULL, NULL, 66, '2023-05-28 23:45:24', '2023-05-28 23:45:24'),
(140, 'RBP_31046_290520231', 'MX Player', 15, 'IDC INDIA', 15, 'Amit Rajput', 'amitrajput@mxplayer.in', '6', '1', 2, 23, 'They are looking for colocation with hosting & other services', '1', '2', 0.00, 0.00, 0.00, 0.00, 0.00, 36, '2', '2023-05-29', '2023-05-26', '2023-09-30', '1', '1', 0.00, 'www.mxplayer.in', '', NULL, NULL, NULL, 66, '2023-05-28 23:47:42', '2023-05-28 23:47:42'),
(141, 'RBP_81036_260620231', 'Mobigic Technologies Pvt Ltd', 15, 'Mayuresh Dalvi', 15, 'Riya Tour & Travels India Private Limited', 'connect@mobigic.com', '4', '1', 1, 3, 'This is an opportunity to transfer of MS Azure load of one of the customer''s project to Pi Cloud. There are currently 6 instances (VMs) to be worked upon along with the storage. Attached are the snapshot of details.', '2', '1', 100000.00, 15000.00, 1200000.00, 2415000.00, 12015000.00, 60, '1', '2023-06-26', '2023-06-26', '2023-07-28', '1', '3', 0.00, 'https://www.riya.travel', 'storage/app/public/uploads/pipelines/RBP_81036_260620231/Riya-Pune-Requirement.pdf', NULL, NULL, NULL, 93, '2023-06-26 02:06:11', '2023-06-26 02:06:11'),
(142, 'RBP_81036_260620232', 'Mobigic Technologies Pvt Ltd', 15, 'Mayuresh Dalvi', 15, 'Riya Tour & Travels India Private Limited', 'connect@mobigic.com', '4', '1', 1, 3, 'This is an opportunity to transfer of MS Azure load of one of the customer''s project to Pi Cloud. There are currently 6 instances (VMs) to be worked upon along with the storage. Attached are the snapshot of details.', '2', '1', 100000.00, 15000.00, 1200000.00, 2415000.00, 12015000.00, 60, '1', '2023-06-26', '2023-06-26', '2023-07-28', '1', '3', 0.00, 'https://www.riya.travel', 'storage/app/public/uploads/pipelines/RBP_81036_260620232/Riya-Pune-Requirement.pdf', NULL, NULL, NULL, 93, '2023-06-26 02:06:55', '2023-06-26 02:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `pipeline_ratings`
--

CREATE TABLE IF NOT EXISTS `pipeline_ratings` (
  `id` bigint(20) unsigned NOT NULL,
  `rate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_probability` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pipeline_ratings`
--

INSERT INTO `pipeline_ratings` (`id`, `rate_name`, `rate_probability`, `created_at`, `updated_at`) VALUES
(1, 'Hot - Closure within 30 days', 90.00, '2021-06-08 23:06:34', '2021-06-08 23:06:34'),
(2, 'Warm - Closure within 31-90 days', 60.00, '2021-06-08 23:06:34', '2021-06-08 23:06:34'),
(3, 'Cold - Prospective beyond 90 days', 40.00, '2021-06-08 23:06:34', '2021-06-08 23:06:34'),
(4, 'Win', 100.00, '2021-06-08 23:06:34', '2021-06-08 23:06:34'),
(5, 'Passive - yet to establish connect', 20.00, '2021-06-08 23:06:34', '2021-06-08 23:06:34'),
(6, 'Lost', 0.00, '2021-06-08 23:06:34', '2021-06-08 23:06:34'),
(7, 'Dropped', 0.00, '2021-06-08 23:06:34', '2021-06-08 23:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `region_heads`
--

CREATE TABLE IF NOT EXISTS `region_heads` (
  `id` bigint(20) unsigned NOT NULL,
  `rh_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rh_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `region_heads`
--

INSERT INTO `region_heads` (`id`, `rh_name`, `rh_email`, `created_at`, `updated_at`) VALUES
(1, 'Debmalya Dey Roy', 'debmalya@pidatacenters.com', '2021-06-29 07:09:12', '2021-06-29 07:09:12'),
(2, 'Sarma SN', 'snsarma@pidatacenters.com', '2021-06-29 07:09:12', '2021-06-29 07:09:12'),
(3, 'Vijay Sharma', 'vijay.sharma@pidatacenters.com', '2021-06-29 07:09:14', '2021-06-29 07:09:14'),
(4, 'Vignesh Seenivsan', 'vignesh.s@pidatacenters.com', '2021-06-29 07:09:14', '2021-06-29 07:09:14'),
(6, 'Sujay Sen', 'sujay.sen@pidatacenters.com', '2021-06-29 07:09:25', '2021-06-29 07:09:25'),
(10, 'Sabin Gupta', 'sabin.gupta@pidatacenters.com', '2021-09-30 18:30:00', '2021-09-30 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `relationowners`
--

CREATE TABLE IF NOT EXISTS `relationowners` (
  `id` bigint(20) unsigned NOT NULL,
  `ro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ro_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rh_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relationowners`
--

INSERT INTO `relationowners` (`id`, `ro_name`, `ro_email`, `rh_id`, `created_at`, `updated_at`) VALUES
(1, 'Vignesh S', 'vignesh.s@pidatacenters.com', 1, NULL, NULL),
(2, 'Kumar Rama Pinnamaraju', 'kumar.p@pidatacenters.com', 4, NULL, NULL),
(3, 'Madhavi Pillai M', 'madhavi.m@pidatacenters.com', 4, NULL, NULL),
(4, 'Sarma S N', 'snsarma@pidatacenters.com', 4, NULL, NULL),
(5, 'Vijay Sharma', 'vijay.sharma@pidatacenters.com', 1, NULL, NULL),
(6, 'Amit Desai', 'amit.desai@pidatacenters.com', 3, NULL, NULL),
(7, 'Sujay Sen', 'sujay.sen@pidatacenters.com', 1, NULL, NULL),
(8, 'K N Siva Sankari', 'sivasankari@pidatacenters.com', 1, NULL, NULL),
(9, 'Jyothi V', 'jyothi.v@pidatacenters.com', 6, NULL, NULL),
(10, 'Madhu Keerthi K', 'madhu.k@pidatacenters.com', 6, NULL, NULL),
(11, 'Vijayan Appasamy', 'vijayan@pidatacenters.com', 6, NULL, NULL),
(12, 'Rajesh Padmanaban', 'rajesh.padmanaban@pidatacenters.com', 6, NULL, NULL),
(13, 'Vibin K', 'vibin.k@pidatacenters.com', 6, NULL, NULL),
(14, 'Sujith P R', 'sujith.pr@pidatacenters.com', 6, NULL, NULL),
(15, 'Sabin Gupta', 'sabin.gupta@pidatacenters.com', 1, NULL, NULL),
(16, 'Anjaneyulu Akula', 'akula.anjaneyulu@pidatacenters.com', 10, NULL, NULL),
(17, 'Biswa Ranjan Agasti', 'biswaranjan.a@pidatacenters.com', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relationowner_state`
--

CREATE TABLE IF NOT EXISTS `relationowner_state` (
  `id` bigint(20) unsigned NOT NULL,
  `relationowner_id` bigint(20) unsigned NOT NULL,
  `state_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relationowner_state`
--

INSERT INTO `relationowner_state` (`id`, `relationowner_id`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 3, 15, '2021-07-05 05:05:16', '2021-07-05 05:05:16'),
(2, 3, 6, '2021-07-05 05:05:16', '2021-07-05 05:05:16'),
(3, 3, 7, '2021-07-05 05:05:16', '2021-07-05 05:05:16'),
(4, 3, 32, '2021-07-05 05:05:16', '2021-07-05 05:05:16'),
(5, 3, 33, '2021-07-05 05:05:16', '2021-07-05 05:05:16'),
(6, 4, 15, '2021-07-05 05:05:27', '2021-07-05 05:05:27'),
(7, 4, 6, '2021-07-05 05:05:27', '2021-07-05 05:05:27'),
(8, 4, 7, '2021-07-05 05:05:27', '2021-07-05 05:05:27'),
(9, 4, 32, '2021-07-05 05:05:27', '2021-07-05 05:05:27'),
(10, 4, 33, '2021-07-05 05:05:27', '2021-07-05 05:05:27'),
(11, 15, 15, '2021-07-05 05:05:38', '2021-07-05 05:05:38'),
(12, 15, 6, '2021-07-05 05:05:38', '2021-07-05 05:05:38'),
(13, 15, 7, '2021-07-05 05:05:38', '2021-07-05 05:05:38'),
(14, 15, 32, '2021-07-05 05:05:38', '2021-07-05 05:05:38'),
(15, 15, 33, '2021-07-05 05:05:38', '2021-07-05 05:05:38'),
(16, 7, 12, '2021-07-05 05:05:50', '2021-07-05 05:05:50'),
(17, 8, 12, '2021-07-05 05:05:50', '2021-07-05 05:05:50'),
(18, 9, 12, '2021-07-05 05:05:50', '2021-07-05 05:05:50'),
(19, 10, 12, '2021-07-05 05:05:50', '2021-07-05 05:05:50'),
(20, 13, 13, '2021-07-05 05:06:02', '2021-07-05 05:06:02'),
(21, 14, 13, '2021-07-05 05:06:02', '2021-07-05 05:06:02'),
(22, 8, 13, '2021-07-05 05:06:02', '2021-07-05 05:06:02'),
(23, 11, 24, '2021-07-05 05:06:14', '2021-07-05 05:06:14'),
(24, 11, 34, '2021-07-05 05:06:14', '2021-07-05 05:06:14'),
(25, 11, 36, '2021-07-05 05:06:14', '2021-07-05 05:06:14'),
(26, 11, 30, '2021-07-05 05:06:14', '2021-07-05 05:06:14'),
(27, 12, 24, '2021-07-05 05:06:25', '2021-07-05 05:06:25'),
(28, 12, 34, '2021-07-05 05:06:25', '2021-07-05 05:06:25'),
(29, 12, 36, '2021-07-05 05:06:25', '2021-07-05 05:06:25'),
(30, 12, 30, '2021-07-05 05:06:25', '2021-07-05 05:06:25'),
(31, 8, 24, '2021-07-05 05:06:39', '2021-07-05 05:06:39'),
(32, 8, 34, '2021-07-05 05:06:39', '2021-07-05 05:06:39'),
(33, 8, 36, '2021-07-05 05:06:39', '2021-07-05 05:06:39'),
(34, 8, 30, '2021-07-05 05:06:39', '2021-07-05 05:06:39'),
(35, 8, 2, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(36, 8, 3, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(37, 8, 4, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(38, 8, 5, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(39, 8, 23, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(40, 8, 25, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(41, 8, 28, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(42, 8, 20, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(43, 8, 16, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(44, 8, 17, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(45, 8, 18, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(46, 8, 11, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(47, 8, 19, '2021-07-05 05:06:49', '2021-07-05 05:06:49'),
(48, 1, 21, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(49, 1, 22, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(50, 1, 35, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(51, 1, 31, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(52, 1, 10, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(53, 1, 26, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(54, 1, 27, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(55, 1, 37, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(56, 1, 14, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(57, 1, 8, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(58, 1, 9, '2021-07-05 05:06:59', '2021-07-05 05:06:59'),
(59, 2, 1, '2021-07-05 05:07:10', '2021-07-05 05:07:10'),
(60, 5, 29, '2021-07-05 05:07:20', '2021-07-05 05:07:20'),
(61, 6, 29, '2021-07-05 05:07:20', '2021-07-05 05:07:20'),
(62, 16, 29, '2021-07-05 05:07:20', '2021-07-05 05:07:20'),
(63, 17, 29, '2021-07-05 05:07:20', '2021-07-05 05:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `sbunits`
--

CREATE TABLE IF NOT EXISTS `sbunits` (
  `id` bigint(20) unsigned NOT NULL,
  `sbu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sbunits`
--

INSERT INTO `sbunits` (`id`, `sbu_name`, `created_at`, `updated_at`) VALUES
(1, 'Cloud', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(2, 'Colocation', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(3, 'Consulting', '2021-06-07 18:30:00', '2021-06-07 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `sbuproducts`
--

CREATE TABLE IF NOT EXISTS `sbuproducts` (
  `id` bigint(20) unsigned NOT NULL,
  `sbunits_id` bigint(20) unsigned NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sbuproducts`
--

INSERT INTO `sbuproducts` (`id`, `sbunits_id`, `prod_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Backup As a Service', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(2, 1, 'Network As a Service', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(3, 1, 'Cloud Instances (ECS)', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(4, 1, 'Colocation', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(5, 1, 'Storage As a Service', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(6, 1, 'Firewall As a Service', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(7, 1, 'Container As a Service', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(8, 1, 'End User Computing', '2021-06-07 18:30:00', '2021-06-07 18:30:00'),
(9, 1, 'Cloud Managed Services', '2021-06-08 14:00:10', '2021-06-08 14:00:10'),
(10, 1, 'MySQL Standard', '2021-06-08 14:00:10', '2021-06-08 14:00:10'),
(11, 1, 'MySQL Enterprise', '2021-06-08 14:00:18', '2021-06-08 14:00:18'),
(12, 1, 'SSL Standard Certificate', '2021-06-08 14:00:33', '2021-06-08 14:00:33'),
(13, 1, 'SSL Wildcard Certificate', '2021-06-08 14:00:33', '2021-06-08 14:00:33'),
(14, 1, 'Windows Server Standard', '2021-06-08 14:00:50', '2021-06-08 14:00:50'),
(15, 1, 'Windows Datacenter', '2021-06-08 14:00:50', '2021-06-08 14:00:50'),
(16, 1, 'MS SQL Server Standard', '2021-06-08 14:01:05', '2021-06-08 14:01:05'),
(17, 1, 'MS SQL Server Enterprise', '2021-06-08 14:01:05', '2021-06-08 14:01:05'),
(18, 1, 'RHEL', '2021-06-08 14:01:22', '2021-06-08 14:01:22'),
(19, 1, 'SLES', '2021-06-08 14:01:22', '2021-06-08 14:01:22'),
(20, 1, 'Antimalware', '2021-06-08 14:01:35', '2021-06-08 14:01:35'),
(21, 1, 'Site to Site VPN', '2021-06-08 14:01:35', '2021-06-08 14:01:35'),
(22, 1, 'RA VPN', '2021-06-08 14:01:42', '2021-06-08 14:01:42'),
(23, 2, 'Rack Colocation', '2021-06-08 14:02:16', '2021-06-08 14:02:16'),
(24, 2, 'Server Colocation', '2021-06-08 14:02:16', '2021-06-08 14:02:16'),
(25, 2, 'MySQL Standard', '2021-06-08 14:02:31', '2021-06-08 14:02:31'),
(26, 2, 'MySQL Enterprise', '2021-06-08 14:02:31', '2021-06-08 14:02:31'),
(27, 2, 'SSL Standard Certificate', '2021-06-08 14:02:52', '2021-06-08 14:02:52'),
(28, 2, 'SSL Wildcard Certificate', '2021-06-08 14:02:52', '2021-06-08 14:02:52'),
(29, 2, 'Windows Server Standard', '2021-06-08 14:03:06', '2021-06-08 14:03:06'),
(30, 2, 'Windows Datacenter', '2021-06-08 14:03:06', '2021-06-08 14:03:06'),
(31, 2, 'MS SQL Server Standard', '2021-06-08 14:03:21', '2021-06-08 14:03:21'),
(32, 2, 'MS SQL Server Enterprise', '2021-06-08 14:03:21', '2021-06-08 14:03:21'),
(33, 2, 'RHEL', '2021-06-08 14:03:36', '2021-06-08 14:03:36'),
(34, 2, 'SLES', '2021-06-08 14:03:36', '2021-06-08 14:03:36'),
(35, 2, 'Antimalware', '2021-06-08 14:03:51', '2021-06-08 14:03:51'),
(36, 2, 'Site to Site VPN', '2021-06-08 14:03:51', '2021-06-08 14:03:51'),
(37, 2, 'RA VPN', '2021-06-08 14:03:59', '2021-06-08 14:03:59'),
(38, 3, 'Professional Services', '2021-06-08 14:04:09', '2021-06-08 14:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
  `id` int(11) NOT NULL,
  `display_value` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `display_value`, `display_name`) VALUES
(1, 'prospect', 'Prospect'),
(2, 'proposal-to-be-submitted', 'Proposal to be Submitted'),
(3, 'proposal-submitted', 'Proposal Submitted'),
(4, 'negotiation', 'Negotiation'),
(5, 'shortlisted', 'Shortlisted'),
(6, 'po-received-payment-pending', 'PO received Payment Pending'),
(7, 'closed-won-payment-received', 'Closed Won (Payment Received)'),
(8, 'on-hold', 'On Hold'),
(9, 'closed-dropped', 'Closed Dropped'),
(10, 'closed-lost-to-competition', 'Closed Lost to Competition');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` bigint(20) unsigned NOT NULL,
  `country_id` bigint(20) unsigned NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rh_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `state_name`, `rh_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Andhra Pradesh', 2, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(2, 1, 'Arunachal Pradesh', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(3, 1, 'Assam', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(4, 1, 'Bihar', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(5, 1, 'Chhattisgarh', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(6, 1, 'Goa', 3, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(7, 1, 'Gujarat', 3, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(8, 1, 'Haryana', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(9, 1, 'Himachal Pradesh', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(10, 1, 'Jammu and Kashmir', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(11, 1, 'Jharkhand', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(12, 1, 'Karnataka', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(13, 1, 'Kerala', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(14, 1, 'Madhya Pradesh', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(15, 1, 'Maharashtra', 3, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(16, 1, 'Manipur', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(17, 1, 'Meghalayah', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(18, 1, 'Mizoram', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(19, 1, 'Nagaland', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(20, 1, 'Odisha', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(21, 1, 'Punjab', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(22, 1, 'Rajasthan', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(23, 1, 'Sikkim', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(24, 1, 'Tamil Nadu', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(25, 1, 'Tripura', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(26, 1, 'Uttar Pradesh', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(27, 1, 'Uttarakhand', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(28, 1, 'West Bengal', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(29, 1, 'Telangana', 4, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(30, 1, 'Andaman and Nicobar', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(31, 1, 'Chandigarh', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(32, 1, 'Dadra and Nagar Haveli', 3, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(33, 1, 'Daman and Diu', 3, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(34, 1, 'Lakshadweep', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(35, 1, 'Delhi/NCR', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(36, 1, 'Puducherry', 6, '2021-06-21 21:27:04', '2021-06-21 21:27:04'),
(37, 1, 'Ladakh', 1, '2021-06-21 21:27:04', '2021-06-21 21:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE IF NOT EXISTS `trainings` (
  `id` int(11) NOT NULL,
  `training_title` varchar(100) NOT NULL,
  `training_date` date NOT NULL,
  `training_st_time` time NOT NULL,
  `training_end_time` time NOT NULL,
  `trainer_name` varchar(100) DEFAULT NULL,
  `training_content` text NOT NULL,
  `training_slug` varchar(255) DEFAULT NULL,
  `training_is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `training_title`, `training_date`, `training_st_time`, `training_end_time`, `trainer_name`, `training_content`, `training_slug`, `training_is_active`, `created_at`, `updated_at`) VALUES
(1, 'Pi Partner Program - Training Workshop', '2021-09-03', '15:00:00', '16:30:00', 'By Roopam Jain', '<p><strong>Date:</strong> Sept 03, 2021<br />\r\n<strong>Time:</strong> 03:00-4.30PM</p>\r\n<h5 style="color:blue;">Agenda</h5>\r\n\r\n<p>Overview on Pi DATACENTERS, Products &amp; Services By Roopam Jain<br />\r\nAccount Manager (North)</p>\r\n\r\n<p>Demo on pi-cloud Enterprise Cloud Platform:<br />\r\nSreekanth Chukalooru<br />\r\nSolution Architect</p>\r\n\r\n<p>Moderator of the Event:<br />\r\nBhaswati De<br />\r\nBusiness Support - Partner Alliance</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please find the Meeting Details Below:<br />\r\nJoin Zoom Meeting<br />\r\n<a href="https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09" target="_blank">https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09</a></p>\r\n\r\n<p>Meeting ID: 896 6365 0475<br />\r\nPasscode: 070619</p>', '/trainings/pi-partner-program-training-workshop', 0, NULL, '2022-08-23 03:51:48'),
(2, 'Pi Partner Program - Training Workshop', '2021-09-13', '15:00:00', '16:30:00', 'By Roopam Jain', 'Agenda :\r\nOverview on Pi DATACENTERS, Products & Services \r\nBy Roopam Jain – Account Manager (North)\r\nDemo on pi-cloud Enterprise Cloud Platform :\r\nSreekanth Chukalooru \r\nSolution Architect\r\nModerator of the Event :\r\nBhaswati De \r\nBusiness Support - Partner Alliance', '/trainings/pi-partner-program-training-workshop', 0, NULL, NULL),
(3, 'Event 1', '2021-09-04', '15:00:00', '16:30:00', NULL, '<p><strong>Date:</strong> Sept 03, 2021<br />\r\n<strong>Time:</strong> 03:00-4.30PM</p>\r\n\r\n<p><strong>Agenda</strong></p>\r\n\r\n<p><strong>Overview on Pi DATACENTERS, Products &amp; Services</strong> By Roopam Jain<br />\r\nAccount Manager (North)</p>\r\n\r\n<p><strong>Demo on pi-cloud Enterprise Cloud Platform</strong>:<br />\r\nSreekanth Chukalooru<br />\r\nSolution Architect</p>\r\n\r\n<p>Moderator of the Event:<br />\r\nBhaswati De<br />\r\nBusiness Support - Partner Alliance</p>\r\n\r\n<p>Please find the Meeting Details Below:<br />\r\nJoin Zoom Meeting<br />\r\n<a href="https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09" target="_blank">https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09</a></p>\r\n\r\n<p>Meeting ID: 896 6365 0475<br />\r\nPasscode: 070619</p>', NULL, 0, '2021-09-03 09:46:24', '2021-10-29 05:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_is_active` tinyint(1) NOT NULL DEFAULT 1,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'partner_admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_is_active`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'bidmanagement@pidatacenters.com', NULL, '$2y$10$zGoFHGHih/lTzF1UJMG7AO1rQEscMTlaHCKc69o3DD2DK322pvZ.e', 1, 'admin', NULL, '2021-07-04 18:41:51', '2022-04-18 05:12:41'),
(8, '', 'admin@ecservice.in', NULL, '$2y$10$9pzov2EVjaYCQmrM6ixs0uOZKFklGPoERaNHaur5.59ZQv2tEo0S.', 0, 'partner_admin', NULL, '2021-09-04 02:29:23', '2021-09-04 02:29:23'),
(9, '', 'alliances@cloudfence.ai', NULL, '$2y$10$0hdmFRyjnV4P2VwU8J2/be3NTrjy0KbY5jbpUkexsE10HB3.WBqVq', 1, 'partner_admin', NULL, '2021-09-08 05:16:52', '2022-08-25 05:35:27'),
(14, '', 'admin@ecservices.in', NULL, '$2y$10$D6iSDhyLTCvg.MeR98GzM.LGfUTUzgeD.t/QD9vuJBI03RKbkhii6', 0, 'partner_admin', NULL, '2021-09-18 08:45:41', '2021-09-29 03:02:37'),
(17, '', 'godwin@vgoshinfo.com', NULL, '$2y$10$316si6sLk7HNwaKYwl7X7.S5Jm85LkjLOfKb7TlJ4DiD4Emqe/pti', 1, 'partner_admin', NULL, '2021-09-27 05:35:13', '2021-09-27 05:35:13'),
(18, '', 'praneeth@laxmitech.in', NULL, '$2y$10$rPEJl8QeGYEe9hPYIIYt1uI2.RguNtaVJCSKRFukRBPlJHfR.7U0a', 0, 'partner_admin', NULL, '2021-09-29 01:32:46', '2021-09-29 04:30:52'),
(19, '', 'bhaswati.de@pidatacenters.com', NULL, '$2y$10$IMZJbBFTyfyrVpgfGWHGHe.nUeqzx9J9vZOs3fkogWbcSKdtvnZu.', 1, 'partner_admin', NULL, '2021-09-29 05:05:34', '2021-10-04 02:26:20'),
(20, '', 'uma@orisenc.com', NULL, '$2y$10$5116HByWjyEcFEl5c8AnQ.2kN5iLVjC9jpMxIyLaMzDLzyr2mn5Eu', 0, 'partner_admin', NULL, '2021-09-29 10:12:04', '2021-10-25 05:43:39'),
(21, '', 'info@vedasystems.in', NULL, '$2y$10$jbkRWwnZrCRrLPnEvbbfG.mvO0IvA/oZ06fM9.XLLMbtbOmhwMwo.', 0, 'partner_admin', NULL, '2021-09-30 01:40:36', '2021-10-25 05:42:10'),
(22, '', 'bhaskar@labyrinthsolutions.in', NULL, '$2y$10$Cpya5hoYy6Z92wb9i9PRre5GRxn8722StmV5wZOAo537Jx0xhU.eO', 0, 'partner_admin', NULL, '2021-09-30 06:47:38', '2021-10-13 00:47:25'),
(23, '', 'shrinvasan.sk@quadsel.in', NULL, '$2y$10$LiTkBRYjVdqCdCBsL201cu/N.CoOmp36I1Oca0Y6EVMqas/UED9xG', 1, 'partner_admin', NULL, '2021-09-30 06:49:09', '2021-09-30 06:49:09'),
(24, '', 'info@gemtrack.in', NULL, '$2y$10$u6mv/MsNySraKpgz1vszv.MMADJNSQP10RiSlfvcQZtTtU8vPtTie', 0, 'partner_admin', NULL, '2021-09-30 08:56:10', '2021-10-01 05:33:56'),
(25, '', 'sales@gemtrack.in', NULL, '$2y$10$tqbaV49J.hfCV2xTCtv49eoFWjYVjYeo3wjtjGmsksVCI9QSev.9e', 0, 'partner_admin', NULL, '2021-09-30 09:18:09', '2021-10-01 02:26:02'),
(26, '', 'abdul@gemtrack.in', NULL, '$2y$10$bBxRMCse1TexV315Ciul8OwWs97MDU20HxfOTXCr4Wq/K/Jh46H92', 1, 'partner_admin', NULL, '2021-09-30 09:20:15', '2021-09-30 09:20:15'),
(27, '', 'amit@prophoenixsoft.com', NULL, '$2y$10$1quKVqaY/8G7GI4PMQZBzuwwkfNvxdt0trUlmeLlEAS5mY9R3pLgq', 0, 'partner_admin', NULL, '2021-10-01 10:32:07', '2021-10-04 00:54:18'),
(28, '', 'admin@sceptrebusiness.com', NULL, '$2y$10$XHEb2uKExWL86z7iInjQwOFXutcgV6jEyy8DgvLbBCynvaQKzCLtq', 1, 'partner_admin', NULL, '2021-10-04 03:02:01', '2021-10-04 06:45:22'),
(29, '', 'jmk@probitytech.com', NULL, '$2y$10$UseKhAUoZT/K12FvgV7rNOu2k0LrkxrUHmOlVX5lVFsDnaeReLIPG', 1, 'partner_admin', NULL, '2021-10-05 04:55:08', '2021-10-05 04:55:08'),
(30, '', 'praneeth@laxmitech.in', NULL, '$2y$10$Vs98F.ZocuzpHECG3PzbBuqcoZxyE72D/7aHqua4RLMVwMNXkfLIK', 1, 'partner_admin', NULL, '2021-10-07 01:24:23', '2022-06-23 23:27:54'),
(31, '', 'ajay@labyrinthsolutions.in', NULL, '$2y$10$/eWUYtH/VeEzKPeVAnoK5.pXsQaP.yzI0AhykHwCjsB1OseQ4G5Zm', 1, 'partner_admin', NULL, '2021-10-08 05:40:18', '2022-08-02 00:38:41'),
(32, '', 'srinivas.sriram.om@tatatel.co.in', NULL, '$2y$10$/tUdIizDiP8htregUADaneVYRRHD1n1ljltLAmEq7v8TsZSVg9nei', 1, 'partner_admin', NULL, '2021-10-12 06:34:18', '2022-03-19 03:22:50'),
(33, '', 'vidya@vservetech.in', NULL, '$2y$10$8c2FGnjJUOrN8tGU1sqwPebZEzR4PqMBqmICTVsKedBlcZl3vx9AS', 0, 'partner_admin', NULL, '2021-10-12 10:49:31', '2021-10-13 00:36:19'),
(34, '', 'mjs@mslinfotech.com', NULL, '$2y$10$Mg3iytEom/TiNWVXaC5fi.BAgAdYdqz0CgWrFvGhkOkJplAMezezy', 1, 'partner_admin', NULL, '2021-10-13 01:37:32', '2021-10-13 02:02:37'),
(35, '', 'sales@origonsystems.com', NULL, '$2y$10$pSI2bnY6nknmYfjW37Rd.ORVfNn0p4ZVwkCqaFfgSv7WaxEYhK14m', 1, 'partner_admin', NULL, '2021-10-13 01:39:56', '2021-10-13 01:39:56'),
(36, '', 'amit.desai92@yaho.in', NULL, '$2y$10$H7z8ktNDu.VfZX/V5sjD7eAqdR5Ns1A/8VELvhcJCrmK99tTPQiG6', 0, 'partner_admin', NULL, '2021-10-13 06:36:46', '2021-10-13 07:31:26'),
(37, '', 'mpatil@yotta.com', NULL, '$2y$10$WNv30A35wZ4yMS8my3m5/.l3lcT3.LFddO8PnpdDyOPB4VfIutJV2', 0, 'partner_admin', NULL, '2021-10-14 00:03:11', '2021-10-18 00:32:20'),
(38, '', 'vidya@vservetech.co.in', NULL, '$2y$10$SuTcm./N5yUu0.j0WaOceehHjE.ykRdl1krkP3XnAkc9hVCuKH4Ru', 1, 'partner_admin', NULL, '2021-10-14 02:56:00', '2021-10-14 02:56:00'),
(39, '', 'pasu@dcdrinfra.com', NULL, '$2y$10$AeAaVohH48mno2FQ9AEQfuRf3zWBQFZWayNAMlriiW4BAHSIytPLO', 1, 'partner_admin', NULL, '2021-10-16 00:07:36', '2021-10-16 00:07:36'),
(40, '', 'mpatil@yotta.com', NULL, '$2y$10$UqgwWvF.hL0q8SRonrlrcu1uwNJs2/sylHFZE7DiItqdATQaQthli', 1, 'partner_admin', NULL, '2021-10-18 00:52:47', '2021-10-18 04:25:22'),
(41, '', 'yugandhar@tracenetwork.in', NULL, '$2y$10$nzND.3YdFxYKxhCHv3a3ie2dTmQi47r03oBwEf6SeEW3WYr2Jg2Ge', 0, 'partner_admin', NULL, '2021-10-18 07:23:41', '2021-10-20 06:35:45'),
(42, '', 'suresh@tracenetwork.in', NULL, '$2y$10$BAIfTe/pjLqTpIU3ZPwfEefpIwE8WDqvh9hWYGwMZm93jm7WGRwD.', 1, 'partner_admin', NULL, '2021-10-19 23:14:05', '2022-08-22 06:57:35'),
(43, '', 'rajendran@felixinfotech.com', NULL, '$2y$10$Yr1v.jxgYBhkL6deoO7DH.CDWPzbd9UMm1fFakVNwKKagR9AkBH1W', 1, 'partner_admin', NULL, '2021-10-21 19:38:35', '2022-06-23 03:47:00'),
(44, '', 'harish@smartsoft.co.in', NULL, '$2y$10$dERAgpNiaVhxFHyccRszuOEwxHCVEW4rTIM1v8AoqTLJHjxp29If2', 0, 'partner_admin', NULL, '2021-10-25 07:50:17', '2021-10-25 22:52:31'),
(45, '', 'murali@vipuns.com', NULL, '$2y$10$0dAznkEt52uRfj3qNxAS8OD5PjoOW5O1L24vHhuZQBziNfU0UEQ82', 0, 'partner_admin', NULL, '2021-10-25 08:05:01', '2021-10-25 22:56:07'),
(46, '', 'harish@smartsoft.co.in', NULL, '$2y$10$OxDN4IPMnld4kv2NqSsAZeTyF8ux6r2223jatzqviOlH60CuJAuB2', 1, 'partner_admin', NULL, '2021-10-25 23:19:23', '2021-10-27 02:38:39'),
(47, '', 'ceo@discclt.com', NULL, '$2y$10$3cbZY.7Nmnt.RQGUXM5bheQHl3OvRUx6S8ZeVrbpjhC/N8SIL54W2', 1, 'partner_admin', NULL, '2021-10-27 04:06:31', '2021-10-27 22:56:21'),
(48, '', 'shankar@primetechnologiesindia.com', NULL, '$2y$10$Wu6zCMHUeMB8GWIxGYHH5erZo50DqDytM.eSrurQnb3eC9FR0biMO', 0, 'partner_admin', NULL, '2021-10-30 02:57:05', '2021-10-31 21:53:22'),
(49, '', 'shankar@primetechnologiesindia.com', NULL, '$2y$10$0XE7DoiwIDd4IVuo3xeABublIlgNzJ6tlV0Y/1TzME6Y1jHc128BG', 1, 'partner_admin', NULL, '2021-11-09 01:15:32', '2021-11-09 01:15:32'),
(50, '', 'murali@vipuns.com', NULL, '$2y$10$XeX.nLLKrnNgZcINNCWrJuVBik5ny/rkO4Ev98gI6BE.89JMpHJfy', 1, 'partner_admin', NULL, '2021-11-10 03:20:23', '2021-11-10 04:02:40'),
(51, '', 'info@balajiinfotechindia.com', NULL, '$2y$10$W7o6nAerdHGv5/kfq3Nvx.ttKWKVz8A838mW6FdK.L//jooYImlr6', 1, 'partner_admin', NULL, '2021-11-12 02:18:05', '2022-07-14 02:27:26'),
(52, '', 'admin@ecservie.in', NULL, '$2y$10$.1opmkBI41Mb6W5wViFR4..iJYVWnTmTZfReJ6Ri1pckkPjAXt1z2', 0, 'partner_admin', NULL, '2021-11-13 00:38:23', '2021-11-15 01:26:14'),
(53, '', 'anant.dhawan@mm9india.com', NULL, '$2y$10$8e9YDTdBSvbpKQAvejgBDOI0baMheWzHCaVL2zy0xZRQJspyeGyNG', 1, 'partner_admin', NULL, '2021-11-15 06:41:32', '2021-11-15 07:07:06'),
(54, '', 'bdm@tatvaindia.in', NULL, '$2y$10$YzhoK1tL.t4F0uAHqSirrugPQc9jU1fVpiNtBUKs1gZwSuRYwbWOq', 1, 'partner_admin', NULL, '2021-11-22 02:26:58', '2021-11-22 02:32:54'),
(55, '', 'admin@ecservice.in', NULL, '$2y$10$Np/kkQoFKHzlF0hxwui8Y.12mWUt/gDOqlW5ik/soyz/0S2ayR5X.', 1, 'partner_admin', NULL, '2021-11-23 02:17:33', '2021-11-23 02:17:33'),
(56, '', 'vijayasarathy@cloudyari.com', NULL, '$2y$10$4mFhct6yZIOnJqUbwebpuuJ8bA984OeTBHo8BBIQpZPWwKmgDuYqK', 1, 'partner_admin', NULL, '2021-11-24 01:55:53', '2021-11-24 01:55:53'),
(57, '', 'nitin@idcindia.biz', NULL, '$2y$10$S2iHUWVbj8CphQTc.fP3.OHH36qou4qLD1PP1yF3Ev8sthEf66Hqy', 0, 'partner_admin', NULL, '2021-11-24 06:24:51', '2021-11-25 01:32:33'),
(58, '', 'deva@devsystems.in', NULL, '$2y$10$UKH1xa87aVzpztPz8y0PC.74KRJ0byYZaIJTpk7YfCoKutjm67otG', 1, 'partner_admin', NULL, '2021-11-24 23:42:29', '2021-11-24 23:42:29'),
(59, '', 'cramesh@networks-in.com', NULL, '$2y$10$58ZiyjtzQ0V7mHxMe8ffVOGSe6u9Av2eRcOaSKJENipJH.6ixzheS', 1, 'partner_admin', NULL, '2021-11-29 23:03:17', '2021-11-29 23:03:17'),
(60, '', 'Balaji.j@accelits.com', NULL, '$2y$10$ATrZv/iimVlFC1i/KiETMu64DuHTwod30jsUDMhsI4a5K/Gnwq7J2', 0, 'partner_admin', NULL, '2021-11-29 23:29:16', '2021-11-30 02:50:37'),
(61, '', 'oemsupport@accelits.com', NULL, '$2y$10$ikAkRPNNpXAqzf1mDwhIUeYqiYi4qhbXhLO9wYKw5UQSyqwQdI83S', 0, 'partner_admin', NULL, '2021-11-30 00:03:24', '2021-11-30 02:49:38'),
(62, '', 'oemsupport@accelits.com', NULL, '$2y$10$LuCkHr/e9yaTcLt.LRmLBupcmzE0OqxivmfS5eTRhMfg6shg2ieFC', 1, 'partner_admin', NULL, '2021-11-30 06:22:27', '2021-12-21 02:08:35'),
(64, '', 'uma@orisenc.com', NULL, '$2y$10$AY9UNQ3su6ay1EZQoxab5eWuXc5Sg.THa2rVJiG8jWkfvhsOzylHK', 1, 'partner_admin', NULL, '2021-11-30 07:41:10', '2021-11-30 07:41:10'),
(65, '', 'nitin@idcindia.biz', NULL, '$2y$10$O82hSwhMaYIccdNY.D2/r.irmTTPYpejlSkPzxGMuFNZHHsjSzZ7e', 0, 'partner_admin', NULL, '2021-12-01 05:40:47', '2021-12-01 05:46:58'),
(66, '', 'nitin@idcindia.biz', NULL, '$2y$10$sDhZUxYiDuhW5OhPH.S8M.fIWPg/8Bpm3A1H2ZjGs8SLL9FzsyeyK', 1, 'partner_admin', NULL, '2021-12-01 05:56:59', '2022-02-09 10:53:19'),
(67, '', 'nidhimahajan@fintechsoftwareservice.com', NULL, '$2y$10$MvWYMonz50b71fSGIoTMLOLUWt.xycv9Y4YXsH3.gfGa6.xXmx8y.', 1, 'partner_admin', NULL, '2021-12-01 22:21:46', '2021-12-01 22:21:46'),
(68, '', 'mmr@srtechnogroup.com', NULL, '$2y$10$vqOm7R7Lo0MwuJiAEoijs.JiZRv/KaAMiN11/FUDFtMFyCa38fWqC', 1, 'partner_admin', NULL, '2021-12-02 00:37:04', '2021-12-02 00:37:04'),
(69, '', 'support@ziontechnologiessolutions.com', NULL, '$2y$10$KAMyXZ85jvUgC5zyPMldDuLJ2UPmmcfbl3CzDWMcT9rODWC/C6VAu', 0, 'partner_admin', NULL, '2021-12-03 06:14:25', '2021-12-04 05:45:10'),
(70, '', 'support@ziontechnologiessolutions.in', NULL, '$2y$10$zKrIpq8KLAj70BGYRGmQbOUtfi8./5HRMVRjGKFb0i0Su7cm4U3Uy', 1, 'partner_admin', NULL, '2021-12-03 06:24:26', '2021-12-03 06:24:26'),
(71, '', 'prasadnaik@digitalverto.com', NULL, '$2y$10$f83g7Ykliq1j.mIjmj4lP.DpRKkm6z/eiFjm138xGszi2LC6Q3P0m', 1, 'partner_admin', NULL, '2021-12-04 04:06:39', '2021-12-13 10:08:07'),
(72, '', 'sandeep@chithragupta.com', NULL, '$2y$10$nBgHajdWYm2ewPnxHmfNzuuVR9vzcWwX5H4PGwOhgvwDsVn9aiqmC', 1, 'partner_admin', NULL, '2021-12-04 06:58:04', '2021-12-04 06:58:04'),
(73, '', 'danish@innofeast.in', NULL, '$2y$10$m9FKYQ4CxAT9NCIuo5egouZq6R9ysBvCkBNfjWPC0FZEy.RitNNDO', 1, 'partner_admin', NULL, '2021-12-07 06:02:00', '2021-12-20 13:09:35'),
(74, '', 'ravish@professionalpal.in', NULL, '$2y$10$BjNixv9P8mm6U2YBgKxvaeolFyH2NJK3HMAKC1HQMpdQJ/OJnHCka', 1, 'partner_admin', NULL, '2021-12-07 06:45:28', '2022-06-23 23:13:03'),
(75, '', 'akila@devdatta.in', NULL, '$2y$10$ied9ixBa/6ZgHXF0qkASBea8mF6cPRsz11btJvBaqF/DFt7mpBy4q', 1, 'partner_admin', NULL, '2021-12-07 09:41:06', '2021-12-07 09:41:06'),
(76, '', 'sunanda@uidigitalworld.com', NULL, '$2y$10$.MlMeryCnfN/ZzpQtOEXqOxKesgr0eEh5T3dCbDZcByij/vfAKgnO', 1, 'partner_admin', NULL, '2021-12-11 03:10:05', '2021-12-11 03:10:05'),
(77, '', 'reddy.b@ampler.in', NULL, '$2y$10$E8Z2eUw05Hbqhx.Wj4FM2e6ssi0Sqi8Ol.Ee0yrhpUkqXxkJnaw7m', 1, 'partner_admin', NULL, '2021-12-14 23:30:20', '2022-06-17 01:05:37'),
(78, '', 'ramesh@cloudmindssolutions.com', NULL, '$2y$10$KOALw2Ozf5kKLx1If5xOguABpg.OyV2Iq3zyPfzcKjWajKPP9CKU2', 1, 'partner_admin', NULL, '2021-12-15 00:02:25', '2021-12-24 03:09:46'),
(79, '', 'vinu.gopinath@locuz.com', NULL, '$2y$10$QliextzeSJRIUx.LCnp8fOVga91wO8tEn81JXBcdyZQwiQdA61mvq', 0, 'partner_admin', NULL, '2021-12-15 00:31:47', '2021-12-15 04:15:02'),
(80, '', 'amit.vora@dynacons.com', NULL, '$2y$10$uZdYImkGRZxBvX1Ud8w6vOrp8c3Dkwb8CwJz.pv0ODu1KKdNl4A3e', 1, 'partner_admin', NULL, '2021-12-17 06:04:31', '2022-03-07 06:55:46'),
(81, '', 'vinu.gopinath@locuz.com', NULL, '$2y$10$7W1lUjum/fvqzxfqbDafS.PKWTqWBhxd1kMjWzrhNjeESYCYVmndu', 1, 'partner_admin', NULL, '2021-12-21 22:50:52', '2021-12-21 22:50:52'),
(82, '', 'jvsrajesh@eastorigin.com', NULL, '$2y$10$pQd.Pbg3wFaakJpYlPDgR.0JDOXNzvkoyGMV.4TKVvkLlh4MkGSva', 1, 'partner_admin', NULL, '2021-12-23 07:13:45', '2021-12-24 00:31:22'),
(83, '', 'Sajidh@bridgecubex.com', NULL, '$2y$10$MIThjsX/GZBZd/lmuSs8TuP7PKUwXv6GpKC1ZJXAyW.hfkUJeS8u2', 1, 'partner_admin', NULL, '2021-12-28 01:50:11', '2021-12-28 01:50:11'),
(84, '', 'amar.thakare@lumiversesolutions.com', NULL, '$2y$10$U5EBJlVnI8ihMOs.KImZA./POpkfCu5jq0sUGzlM6bihBpqVOgJVG', 1, 'partner_admin', NULL, '2021-12-29 03:46:17', '2021-12-29 04:31:50'),
(85, '', 'dp@datasoftcomnet.com', NULL, '$2y$10$8zvhqPm55jnea6CfY6yffeeR4NaK7kr0nly5m2jPjeHmejpRmlhVG', 0, 'partner_admin', NULL, '2021-12-30 06:46:35', '2022-01-05 06:47:59'),
(86, '', 'rtummala@doctususa.com', NULL, '$2y$10$gLFE9H/DIOyDklDnBx5F0O2BJXjL6oGX35A4h1ScsHIMHPqZzDPdK', 1, 'partner_admin', NULL, '2022-01-05 05:45:17', '2022-01-05 05:45:17'),
(87, '', 'dp@datasoftcomnet.com', NULL, '$2y$10$0/GVeqP4D5ou9yJcw9CP4OoMP9FwV/9s6BoDxQUly6J6nrXpX.sdi', 1, 'partner_admin', NULL, '2022-01-06 09:33:17', '2022-01-06 09:33:17'),
(88, '', 'nishitha.b@pidatacenters.com', NULL, '$2y$10$Sm68FfW5K7WXdt0JBJ30IedfRShB2IXDO05woqVJbjRvA1XyfwIk2', 1, 'partner_admin', NULL, '2022-01-10 23:58:40', '2022-01-10 23:58:40'),
(89, '', 'raj.g@servedesk.in', NULL, '$2y$10$xk.n5p4MNWpn/MMbvOmDl.peYbUPeC1v4WyMMS1hYLken.cH9NVF6', 0, 'partner_admin', NULL, '2022-01-11 06:05:28', '2022-01-23 23:44:45'),
(90, '', 'ravi@trustitsolutions.com', NULL, '$2y$10$IxUz.I/N4D08bYwFlkjZa.j0IMehfyr4j06PdxshXP0U1A48H3qMC', 1, 'partner_admin', NULL, '2022-01-11 08:38:40', '2022-02-01 04:48:09'),
(91, '', 'vivek.b@tescom.in', NULL, '$2y$10$NlXtN32AZ5IQo1Xzi/cU7.oZD7drBAAX8DTiJcX/5heLvNtn1U0hW', 0, 'partner_admin', NULL, '2022-01-21 03:24:07', '2022-01-21 04:05:36'),
(92, '', 'vivek.b@tescom.in', NULL, '$2y$10$pSY11BhmlB/.y4Y6aTZOj.hLgyif7QqW2kFNM0I7nfI4BKngM5ScK', 1, 'partner_admin', NULL, '2022-01-21 04:33:05', '2022-01-21 04:33:05'),
(93, '', 'navnath@mobigic.com', NULL, '$2y$10$dLwQ.jK7lNY2NcCazcd70u1bUhsIGDKQHf71KbWVbsKRn/Y/iNcpe', 1, 'partner_admin', NULL, '2022-01-24 07:32:03', '2022-01-24 23:31:37'),
(94, '', 'admin@masterservices.co.in', NULL, '$2y$10$GZYLL3qzFeFVQBBPkh8Lb.crOMsX1Qq5YKxASiKcvraTG/f0rHdry', 0, 'partner_admin', NULL, '2022-01-26 08:37:53', '2022-01-26 22:59:38'),
(95, '', 'admin@masterservices.co.in', NULL, '$2y$10$f8V9zECiDKTVRtm/fuTq0uHlnhxobAFkH9gLNZHQfzW0qOVqKdZA.', 1, 'partner_admin', NULL, '2022-01-28 02:55:12', '2022-01-31 06:52:39'),
(96, '', 'raj.g@servedesk.in', NULL, '$2y$10$jXjyfO2XWmlB5yQa53CWQebV48XwQijbPoDZJbZsBJFCGnqf6m2jS', 1, 'partner_admin', NULL, '2022-01-29 02:28:35', '2022-06-28 02:19:17'),
(97, '', 'pmenon@cybergrid.in', NULL, '$2y$10$pME0mAjIHcTCfeL3tBL/mOLIG2kjxH67eNkH6WmML58i.gXVPJIs6', 1, 'partner_admin', NULL, '2022-02-10 10:58:50', '2022-02-10 10:58:50'),
(98, '', 'md@gksinfotech.in', NULL, '$2y$10$cMW5XUcQ8YYTok5bHSmn7O.q1VyaVhEr0Scai0gEwjcVPIvZIAdza', 0, 'partner_admin', NULL, '2022-02-15 06:08:25', '2022-02-15 06:43:43'),
(99, '', 'mdoffice@comtechsystems.in', NULL, '$2y$10$vA2QOyZcAivvcYXT11omseTYNSAUS6.e/n1Sqj2tWAvUAbc12cPgG', 1, 'partner_admin', NULL, '2022-02-16 01:04:00', '2022-02-16 01:04:00'),
(100, '', 'aswin.h@irzglobal.com', NULL, '$2y$10$EUA2.W3gkx.xfhFAx/KTxeK7WHWEFFojVsttgwAWU.XN2guH9BgTW', 1, 'partner_admin', NULL, '2022-02-19 09:53:39', '2022-02-22 03:30:40'),
(101, '', 'kaushal@cyberace.in', NULL, '$2y$10$3JLMrlO3g6Ws/akOc7yu3eIU14VaKAWfnlpw480TA33PD3FyekkCa', 0, 'partner_admin', NULL, '2022-02-22 04:12:49', '2022-02-22 22:57:40'),
(102, '', 'kaushal@cyberace.in', NULL, '$2y$10$eWWdduhHtPVz3pGVfN/sGeGlizsSSZNkxUjgQm0SJhtTa06jgehI2', 1, 'partner_admin', NULL, '2022-02-23 00:38:10', '2022-02-23 00:38:10'),
(103, '', 'saurabh.g@uniquesolutionsit.com', NULL, '$2y$10$FuhUW/okuBmtkQJeJz4lZ.f1Np6OlGBXcTs5/wORjTzaus6tvmeru', 0, 'partner_admin', NULL, '2022-03-11 06:03:12', '2022-03-11 06:24:15'),
(104, '', 'saurabh.g@uniquesolutionsit.com', NULL, '$2y$10$VnBF375TfmSOjiUxpdJO4eihsLC82UAzn5U4mFayoYsDw3ChPP.Iy', 1, 'partner_admin', NULL, '2022-03-11 07:49:31', '2022-03-11 07:49:31'),
(105, '', 'techpartners@techbrein.com', NULL, '$2y$10$zNjGau.HHqY86e2Iky8.1O5tkhQwIzCxE2PIKuS01JCsQgJkxVwiC', 1, 'partner_admin', NULL, '2022-03-29 03:37:02', '2022-03-29 05:03:23'),
(106, '', 'RUCHIR@PYROTECHINDIA.CO.IN', NULL, '$2y$10$IE59dCfZPy4BjfOnakyhmOOlj/wGBDJFXmNM17cP8eyHm0sXT3p6S', 0, 'partner_admin', NULL, '2022-04-02 01:56:32', '2022-04-04 01:20:27'),
(107, '', 'bejoy.t@cloudcorner.in', NULL, '$2y$10$uzYrqHqqcYfqfACaIBxY/.zdTu2TzObT4EqCvPUkiceZr6B1ncea.', 0, 'partner_admin', NULL, '2022-04-05 01:50:00', '2022-04-05 03:27:58'),
(108, '', 'bejoy.t@cloudcorner.in', NULL, '$2y$10$/JM3MVdK0HPVRMlt7TnBleCYAQ0hWTO9piGPibkfS88.csOYYE9Ge', 1, 'partner_admin', NULL, '2022-04-05 05:40:25', '2022-04-05 05:40:25'),
(109, '', 'arun@aplusatech.com', NULL, '$2y$10$nyHoZMXVO58sGqqJSiEPue8QfFVR.KTqnVCVFW74JaTKni1sMaCwq', 1, 'partner_admin', NULL, '2022-04-29 03:54:18', '2022-04-29 04:34:16'),
(110, '', 'muzammil@athenaitsol.com', NULL, '$2y$10$JLS1gJUfbW7tbZ4iBI6o8eZLPKpmmyMkHYh4BE2VAoKPkALx6n2UO', 1, 'partner_admin', NULL, '2022-06-08 01:26:10', '2022-06-24 00:20:32'),
(111, '', 'shalini.s@pidatacenters.com', NULL, '$2y$10$nKY1C8QSOZRZCMObG9PI/upn.LrTIaToPxK4JkFGbaQm23ogMJnqW', 0, 'partner_admin', NULL, '2022-06-13 03:13:52', '2022-06-13 04:04:53'),
(112, '', 'raju@msrinfraprojects.com', NULL, '$2y$10$8TuNOyzB4OHt.IQTV3OafukiSzTfuwCazlrjrcZV0YNf.ut0HZoxa', 1, 'partner_admin', NULL, '2022-06-13 06:43:43', '2022-07-04 00:24:18'),
(113, '', 'info@sowryasoftwaresolutions.com', NULL, '$2y$10$5TwH7ytV..r6JmEytawH2Of4UQH4tcRPfdWzsYxL1ei0bU24GWITi', 0, 'partner_admin', NULL, '2022-08-04 07:43:24', '2022-08-10 07:46:28'),
(114, '', 'kanwaljeet.dureja@pidatacenters.com', NULL, '$2y$10$fZJHcFXnxWBrt444ang6COnJUo9DDA0Jd8FOZ.qSD7Ds3sIi5DXZm', 0, 'partner_admin', NULL, '2022-08-08 00:27:38', '2022-08-10 07:43:32'),
(115, '', 'Dheeraj@mieuxtechnologies.com', NULL, '$2y$10$lxyEreGSruBZyUoZEVbXO.YqjN60RGGcusazL6JdraxCN57HoXcne', 0, 'partner_admin', NULL, '2022-08-10 03:21:48', '2022-08-10 07:41:01'),
(116, '', 'sales.info@jilit.co.in', NULL, '$2y$10$TvzhfHr/J9UQBc8gbWm4LuAc3s4Dvz7fTFQvfqP5qZ2723fJDaJCC', 0, 'partner_admin', NULL, '2022-09-14 01:51:21', '2022-09-15 00:54:40'),
(117, '', 'rahul.agarwal@jilit.co.in', NULL, '$2y$10$wzvprGStaTt0HFOP28t5UeEh/TLh8CK5jQMpG7..q2gbHKWgd.fY6', 0, 'partner_admin', NULL, '2022-09-14 02:17:50', '2022-09-15 00:51:51'),
(118, '', 'sales.info@jilit.co.in', NULL, '$2y$10$s/4ErUg5stoM0bOw70e0K.sue9PjhlAOFkEUK/6ms4/taBB/WkQC2', 0, 'partner_admin', NULL, '2022-09-15 04:59:11', '2022-09-16 01:52:26'),
(119, '', 'kanwaljeet.dureja@pidatacenters.com', NULL, '$2y$10$ZbpyUFzdAohy/YzAfjrWFewi3njQh7JQtur8KYQJDjOH3bRUNiF/i', 0, 'partner_admin', NULL, '2022-09-16 01:47:26', '2022-09-16 01:53:14'),
(120, '', 'sales.info@jilit.co.in', NULL, '$2y$10$MbqA0R28GCnaDaJM4AOmT.83rk1O7vc3frUP/Y0PYpi1L6vFOkQhW', 0, 'partner_admin', NULL, '2022-09-16 03:58:51', '2022-09-16 04:02:12'),
(121, '', 'sales.info@jilit.co.in', NULL, '$2y$10$Z6F2.Co8K4mTytThF.pnTefKjdF0FqFD6BAbr77VDFreKnvtb6MJq', 1, 'partner_admin', NULL, '2022-09-16 04:13:33', '2022-09-16 04:13:33'),
(122, '', 'info@sowryasoftwaresolutions.com', NULL, '$2y$10$MllJZTCApPVZOnCZQyZk5utaBm0LLhlbHJIc6UG/3DPbTelKCYTe6', 1, 'partner_admin', NULL, '2022-09-29 01:44:21', '2022-10-13 22:43:43'),
(123, '', 'lalit@nexgenenterprises.co.in', NULL, '$2y$10$c4GsKDV6KLVqwBytTAlGFuTjnTYej3Ho2b1dqgNYiKutHUDRv2q72', 1, 'partner_admin', NULL, '2022-09-29 05:57:53', '2022-09-29 05:57:53'),
(124, '', 'deepak.pr@topserv.co.in', NULL, '$2y$10$AYB3XmRCQbvDVizU8vDqmubuyHpbOuvu3MTE8QkAKikJ3WkjNl7Qm', 1, 'partner_admin', NULL, '2022-10-12 07:01:18', '2022-10-12 07:01:18'),
(125, '', 'msp@acceix.com', NULL, '$2y$10$ppUScB4.g.ga6Tlro5bcp.HuxY/VaRoQAO4u4V9D9RwQfhiUzZmN.', 1, 'partner_admin', NULL, '2022-10-19 02:52:16', '2022-10-19 02:52:16'),
(126, '', 'msp@accerix.com', NULL, '$2y$10$pwrZau/FbFBEn8vUwwmYKeEAQotzPhdgjOIcPL5WS36UYCqX0r..W', 1, 'partner_admin', NULL, '2022-10-19 06:47:11', '2022-10-19 06:47:11'),
(127, '', 'abhishek@assureassistance.in', NULL, '$2y$10$kbqqRHa/pEVZYWq4T0Dubeh.e3HwaJ5NUnFm8oKV8wibBbruu.U1a', 1, 'partner_admin', NULL, '2022-11-09 04:39:22', '2022-11-09 04:39:22'),
(128, '', 'monidilipenterprises@outlook.com', NULL, '$2y$10$g1465lA055NQleP4YBNr6.nyh8G1Xw22JRG/RUwaKzlaK4yX3fbZC', 1, 'partner_admin', NULL, '2022-11-18 10:03:33', '2022-11-18 10:03:33'),
(129, '', 'monidilipenterprise@outlook.com', NULL, '$2y$10$Q4VuTDqeCrPFf885yjr1p.uDQEfXHC3/OxGymdB1jCZ32NVWTk7dK', 1, 'partner_admin', NULL, '2022-11-18 23:30:57', '2022-11-18 23:30:57'),
(130, '', 'rukmini.bongu@bitkemy.com', NULL, '$2y$10$N8HLm8QklT7oh8xAlbhLMu/BqHSyCEC2Y3d23MhWVCnd3LBtIWeBK', 1, 'partner_admin', NULL, '2023-05-23 01:05:16', '2023-05-23 01:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint(20) unsigned NOT NULL,
  `vid_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vid_is_ext_url` tinyint(1) NOT NULL DEFAULT 0,
  `vid_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vid_is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `vid_title`, `vid_is_ext_url`, `vid_url`, `vid_is_active`, `created_at`, `updated_at`) VALUES
(1, 'HarbourFront, India''s First Indigenous CDN On Cloud. Another 1st From Pi DATACENTERS', 1, 'https://www.youtube.com/embed/NxHgdxbgBqY', 1, '2021-09-13 03:17:36', '2021-09-13 03:17:36'),
(2, 'The Grand Launch of ''Pi Amaravati'', India''s First Uptime Institute TIER IV Certified Data Center', 1, 'https://www.youtube.com/embed/V5YI2OM-0ak', 1, '2021-09-13 03:18:37', '2021-09-13 03:18:37'),
(3, 'The all new pi-cloud® website is NOW LIVE!', 1, 'https://www.youtube.com/embed/qkq1D8h-lec', 1, '2021-09-13 03:19:04', '2021-09-13 03:19:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_blog_slug_unique` (`blog_slug`);

--
-- Indexes for table `business_industries`
--
ALTER TABLE `business_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `commission_types`
--
ALTER TABLE `commission_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_periods`
--
ALTER TABLE `contract_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_types`
--
ALTER TABLE `customer_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gtm_collateral_requests`
--
ALTER TABLE `gtm_collateral_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gtm_collateral_requests_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `gtm_fund_requests`
--
ALTER TABLE `gtm_fund_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gtm_fund_requests_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `gtm_joint_event_requests`
--
ALTER TABLE `gtm_joint_event_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gtm_joint_event_requests_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `gtm_media_campaign_requests`
--
ALTER TABLE `gtm_media_campaign_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gtm_media_campaign_requests_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `partnerorginfos`
--
ALTER TABLE `partnerorginfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partnerorginfos_partner_ref_no_unique` (`partner_ref_no`),
  ADD KEY `partnerorginfos_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `partnerpersonalinfos`
--
ALTER TABLE `partnerpersonalinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partnerpersonalinfos_partner_ref_no_unique` (`partner_ref_no`),
  ADD KEY `partnerpersonalinfos_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partners_partner_ref_no_unique` (`partner_ref_no`);

--
-- Indexes for table `partnertechinfos`
--
ALTER TABLE `partnertechinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partnertechinfos_partner_ref_no_unique` (`partner_ref_no`),
  ADD KEY `partnertechinfos_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_terms`
--
ALTER TABLE `payment_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pipelines`
--
ALTER TABLE `pipelines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pipelines_partner_id_foreign` (`partner_id`),
  ADD KEY `pipelines_rbp_state_foreign` (`rbp_state`),
  ADD KEY `pipelines_customer_state_foreign` (`customer_state`),
  ADD KEY `pipelines_sbunits_id_foreign` (`sbunits_id`),
  ADD KEY `pipelines_sbu_product_id_foreign` (`sbu_product_id`);

--
-- Indexes for table `pipeline_ratings`
--
ALTER TABLE `pipeline_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region_heads`
--
ALTER TABLE `region_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationowners`
--
ALTER TABLE `relationowners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationowner_state`
--
ALTER TABLE `relationowner_state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relationowner_state_relationowner_id_index` (`relationowner_id`),
  ADD KEY `relationowner_state_state_id_index` (`state_id`);

--
-- Indexes for table `sbunits`
--
ALTER TABLE `sbunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbuproducts`
--
ALTER TABLE `sbuproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sbuproducts_sbunits_id_foreign` (`sbunits_id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`),
  ADD KEY `rh_id` (`rh_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `business_industries`
--
ALTER TABLE `business_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1232;
--
-- AUTO_INCREMENT for table `commission_types`
--
ALTER TABLE `commission_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contract_periods`
--
ALTER TABLE `contract_periods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer_types`
--
ALTER TABLE `customer_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gtm_collateral_requests`
--
ALTER TABLE `gtm_collateral_requests`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gtm_fund_requests`
--
ALTER TABLE `gtm_fund_requests`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gtm_joint_event_requests`
--
ALTER TABLE `gtm_joint_event_requests`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gtm_media_campaign_requests`
--
ALTER TABLE `gtm_media_campaign_requests`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partnerorginfos`
--
ALTER TABLE `partnerorginfos`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `partnerpersonalinfos`
--
ALTER TABLE `partnerpersonalinfos`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `partnertechinfos`
--
ALTER TABLE `partnertechinfos`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `payment_terms`
--
ALTER TABLE `payment_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pipelines`
--
ALTER TABLE `pipelines`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `pipeline_ratings`
--
ALTER TABLE `pipeline_ratings`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `region_heads`
--
ALTER TABLE `region_heads`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `relationowners`
--
ALTER TABLE `relationowners`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `relationowner_state`
--
ALTER TABLE `relationowner_state`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `sbunits`
--
ALTER TABLE `sbunits`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sbuproducts`
--
ALTER TABLE `sbuproducts`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `gtm_collateral_requests`
--
ALTER TABLE `gtm_collateral_requests`
  ADD CONSTRAINT `gtm_collateral_requests_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `gtm_fund_requests`
--
ALTER TABLE `gtm_fund_requests`
  ADD CONSTRAINT `gtm_fund_requests_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `gtm_joint_event_requests`
--
ALTER TABLE `gtm_joint_event_requests`
  ADD CONSTRAINT `gtm_joint_event_requests_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `gtm_media_campaign_requests`
--
ALTER TABLE `gtm_media_campaign_requests`
  ADD CONSTRAINT `gtm_media_campaign_requests_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `partnerorginfos`
--
ALTER TABLE `partnerorginfos`
  ADD CONSTRAINT `partnerorginfos_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `partnerpersonalinfos`
--
ALTER TABLE `partnerpersonalinfos`
  ADD CONSTRAINT `partnerpersonalinfos_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `partnertechinfos`
--
ALTER TABLE `partnertechinfos`
  ADD CONSTRAINT `partnertechinfos_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `pipelines`
--
ALTER TABLE `pipelines`
  ADD CONSTRAINT `pipelines_customer_state_foreign` FOREIGN KEY (`customer_state`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `pipelines_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`),
  ADD CONSTRAINT `pipelines_rbp_state_foreign` FOREIGN KEY (`rbp_state`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `pipelines_sbu_product_id_foreign` FOREIGN KEY (`sbu_product_id`) REFERENCES `sbuproducts` (`id`),
  ADD CONSTRAINT `pipelines_sbunits_id_foreign` FOREIGN KEY (`sbunits_id`) REFERENCES `sbunits` (`id`);

--
-- Constraints for table `relationowner_state`
--
ALTER TABLE `relationowner_state`
  ADD CONSTRAINT `relationowner_state_relationowner_id_foreign` FOREIGN KEY (`relationowner_id`) REFERENCES `relationowners` (`id`),
  ADD CONSTRAINT `relationowner_state_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `sbuproducts`
--
ALTER TABLE `sbuproducts`
  ADD CONSTRAINT `sbuproducts_sbunits_id_foreign` FOREIGN KEY (`sbunits_id`) REFERENCES `sbunits` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `states_region_heads_id_fk` FOREIGN KEY (`rh_id`) REFERENCES `region_heads` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
