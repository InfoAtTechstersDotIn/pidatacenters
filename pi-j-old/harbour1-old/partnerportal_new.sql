-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 05:33 AM
-- Server version: 10.5.17-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partnerportal_new`
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
(2, 'How is Cloud transforming businesses', 'blogs/view/how-is-cloud-transforming-businesses', NULL, '<p>Cloud technology is playing a vital role in enhancing the business organisations&#39; capability in t...</p>', NULL, 'resources/blogs/blog-how.png', 1, 'https://harbour1.in/blog-info/7/how-is-cloud-transforming-businesses', 1, '2021-08-25 00:28:36', '2021-08-25 00:28:36'),
(3, 'Artificial Intelligence In Datacenters - The Way Forward', 'blogs/view/artificial-intelligence-in-datacenters---the-way-forward', NULL, '<p>Datacenters have emerged as the lifeline for organizations when the 90s heralded a massive techno...</p>', NULL, 'resources/blogs/ceo-blog.png', 1, 'https://harbour1.in/blog-info/6/artificial-intelligence-in-datcenters-the-way-forward', 1, '2021-08-25 00:29:09', '2021-08-25 00:29:09');

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
(2, 'Cloud Migration From Global Public Cloud Provider To Harbour1', NULL, 'resources/casestudies/images/cs2.png', 'resources/casestudies/docs/migration.pdf', '2021-08-28 18:30:00', 1, '2021-08-29 01:13:54', '2021-10-29 04:01:10');

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
(1, 'SAP On Harbour1 Webinar', '<h5 style="text-align:center"><u>Delivering A Comprehensive Bouquet Of SAP Infra On Cloud For All Business Needs</u></h5>\r\n\r\n<p>Panel Discussion Topic: Is the changing SAP landscape making life easy or challenging for IT Leader?</p>\r\n\r\n<p>For key take aways, Register Here -<a href="https://bit.ly/3dXxig1" target="_blank">https://bit.ly/3dXxig1</a></p>\r\n\r\n<p>Learn how, a well curated cloud strategy can make your work life seamless &amp; hassle-free, this <strong>29th July from 4 pm!</strong></p>\r\n\r\n<p>Looking forward to seeing you all!</p>', '2021-09-29', '16:30:00', '17:30:00', 'resources/events/1/SAP_on_Harbour1.jpeg', 1, '2021-09-09 00:21:15', '2021-09-09 04:48:44');

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
('06a0809e798da9ffee77b8efe6841a4cf5cb3fee5b74f5430a9d5b9ea44c3d46a40fb05649b6c8ff', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:55:26', '2021-09-03 04:55:26', '2022-09-03 10:25:26'),
('1223c7a334637e825b9426a25f11de3858da599ae0a8144e9854d5872a0594bf7f877df74fc4978b', 40, 3, 'PartnerPortal', '[]', 0, '2021-10-26 07:05:52', '2021-10-26 07:05:52', '2022-10-26 12:35:52'),
('152035eb363cf2a6c938e93b3dbbe3632db9638f2371217c31e1cdaee1b2daba4349c76508585a2d', 5, 3, 'PartnerPortal', '[]', 0, '2021-08-29 01:14:55', '2021-08-29 01:14:55', '2022-08-29 06:44:55'),
('2e88dcf68e480d7e2293032566d1dd107c1bf3235e300aca0d4721339571486ce1e1ed541567106e', 40, 3, 'PartnerPortal', '[]', 0, '2021-10-18 23:06:49', '2021-10-18 23:06:49', '2022-10-19 04:36:49'),
('33c76c0adeaffb60b4b6fb86e79923e5bcb0df9839384c22c242079a5b9c1e573f923b273a43b0c1', 34, 3, 'PartnerPortal', '[]', 0, '2021-10-13 02:02:58', '2021-10-13 02:02:58', '2022-10-13 07:32:58'),
('46b44397e7a1e3aff9077fc8382d977996ea5b73dbd5dbd1232159c377ff38e3eccd3a926c4a6a38', 13, 3, 'PartnerPortal', '[]', 0, '2021-09-17 04:42:26', '2021-09-17 04:42:26', '2022-09-17 10:12:26'),
('59175de8e3c092cb1fa8d85874310dca34a36488f8bfd27711ca4e43dc44a1209890f2b102c10540', 31, 3, 'PartnerPortal', '[]', 0, '2021-10-14 00:12:34', '2021-10-14 00:12:34', '2022-10-14 05:42:34'),
('6cb8e715d5b9b4c6122c4e4c20cb3fd16d39116303086e8a3e9b8c1c16db2d79661de33c63f03949', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-15 11:54:12', '2021-09-15 11:54:12', '2022-09-15 17:24:12'),
('7c2e557ac849d587b1891838d89475f0d1ebabc2ef853e7524df9728b3c8c28a85e43906562eb6ea', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-21 03:23:50', '2021-09-21 03:23:50', '2022-09-21 08:53:50'),
('7e5b358843cee5773bbb89ba5051b66bf26ce8a45cb5c794a735817aa54b25ce1d5cb5ad561aaffd', 46, 3, 'PartnerPortal', '[]', 0, '2021-10-27 02:38:54', '2021-10-27 02:38:54', '2022-10-27 08:08:54'),
('86c70b3d8980e546ece858e32c8710714e44314b91e500f9abc251915f214eaca02708e796f64797', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:56:24', '2021-09-03 04:56:24', '2022-09-03 10:26:24'),
('887bd247f71875fc1e30ddb0a53107ebcac7258453af8cd043db7871b65000fcabb8991113e24f8c', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-17 04:00:59', '2021-09-17 04:00:59', '2022-09-17 09:30:59'),
('89e74d4cad4b924352545b7341336ae29d2ba3eeb50abcac18125496d15c6ad295d22f96c52f8b47', 42, 3, 'PartnerPortal', '[]', 0, '2021-10-26 03:03:54', '2021-10-26 03:03:54', '2022-10-26 08:33:54'),
('94ab2b9f25d6288b91a34fae63d244043e6e2372162a684f16e85e18938a0c8e5d7f81cd712c1fc3', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:50:32', '2021-09-03 04:50:32', '2022-09-03 10:20:32'),
('ab46a464e2fa58ef3c3cabf57920ae51a33a6284126bf9201fbe8b82bd810d47bdfc0cafa5dfcb2a', 5, 3, 'PartnerPortal', '[]', 0, '2021-09-01 23:20:03', '2021-09-01 23:20:03', '2022-09-02 04:50:03'),
('b1473f21bb32c2c331cfc32e4a655b3a8c5d84a716bcb88f7cdae46df403f6a65b59f946b7bcc8ee', 40, 3, 'PartnerPortal', '[]', 0, '2021-10-21 03:39:30', '2021-10-21 03:39:30', '2022-10-21 09:09:30'),
('b6cac9af2d0ab6034197364a39109ba04ee9a0b25313a67f3c164517866ad0e0886ed6568e077666', 7, 3, 'PartnerPortal', '[]', 0, '2021-09-21 22:47:18', '2021-09-21 22:47:18', '2022-09-22 04:17:18'),
('c75d3534cc68fd4f46511909751952c5bfd3310943e7a3b4870eb4e8997970a69c5206043c770a21', 15, 3, 'PartnerPortal', '[]', 0, '2021-09-25 11:48:23', '2021-09-25 11:48:23', '2022-09-25 17:18:23'),
('d6f4dd48a5cbc0d662cfd0d5861c6179a3ad36d8472302ad72d742b4b6aaea1962e03b920c48f592', 3, 3, 'PartnerPortal', '[]', 0, '2021-09-03 04:49:44', '2021-09-03 04:49:44', '2022-09-03 10:19:44'),
('e431a5c392f90c09c0dd63ef259f02544f166bf14b4abcf6533084a30d6ac78d13d572275344bd70', 12, 3, 'PartnerPortal', '[]', 0, '2021-09-17 05:32:11', '2021-09-17 05:32:11', '2022-09-17 11:02:11'),
('ed9ba10a025b9aa52e1ca160dd5f648e55459839fc98d5de58edd0bcabae3aaac40a49565f08b9be', 5, 3, 'PartnerPortal', '[]', 0, '2021-09-01 23:18:23', '2021-09-01 23:18:23', '2022-09-02 04:48:23'),
('ffb63a6feb79d26e31635d9d38a654986abf015a9a8ea2466d8c7015d1003ce02879191310eaa3f2', 31, 3, 'PartnerPortal', '[]', 0, '2021-10-13 06:48:55', '2021-10-13 06:48:55', '2022-10-13 12:18:55');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnerorginfos`
--

INSERT INTO `partnerorginfos` (`id`, `partner_ref_no`, `comp_name`, `comp_website`, `comp_hq`, `comp_desc`, `comp_size`, `industry`, `annual_revenue`, `lob`, `lob_other`, `city`, `ro_name`, `rh_name`, `state`, `country`, `pincode`, `loc_o_b`, `client_base`, `client_base_other`, `partnership_model`, `partner_id`, `created_at`, `updated_at`) VALUES
(1, 'RBP_93574', 'Pi Datacenters', 'https://harbour1.in', 'Hyderabad', 'Pi Datacenters', '100 - 250', 'Technology', '2000000', 'Consultancy', NULL, 'Hyderabad', 'Vignesh Seenivsan', 'Vignesh Seenivsan', 'Telangana', 'India', '522503', '["India - Telangana"]', '["Education","Enterprise","Government-Local","Government-National","Mid-size Business","Non-Profit","Startup"]', NULL, 'One-Time Referral Bonus', 1, '2021-07-04 18:41:51', '2021-07-04 18:41:51'),
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
(45, 'RBP_56418', 'Dbrains Infosystems & Controls Pvt Ltd', 'www.dbrains.in', 'PM building,Azakodi Temple cross road mavoor road.Calicut', 'ISO Certified company dealing with hardware & software', '100 - 250', 'IT/ITES', '90000000', 'Reseller', NULL, 'Kozhikode', 'Sujith P R', 'Sujay Sen', 'Kerala', 'India', '670004', '"India - Kerala,India - Kerala"', '"Education,Enterprise,Government-Local,Government-National,Mid-size Business,Non-Profit,Startup"', NULL, '"Recurring Commission,One-Time Referral Bonus,Transfer Price"', 47, '2021-10-27 04:06:31', '2021-10-27 04:06:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(28, 'RBP_97581', 'Mr.', 'Muralikrishnan', 'P', 'Designated Partner', 'admin@sceptrebusiness.com', '+91', '9387878791', 28, '2021-10-04 03:02:01', '2021-10-04 03:02:01'),
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
(47, 'RBP_56418', 'Mr.', 'Gireeshan', 'P', 'CEO', 'ceo@discclt.com', '+91', '9349251916', 47, '2021-10-27 04:06:31', '2021-10-27 04:06:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_ref_no`, `business_email`, `password`, `mobile_code`, `mobile_number`, `is_verified`, `status`, `login_role`, `user_type`, `email`, `rejection_comment`, `created_at`, `updated_at`) VALUES
(1, 'RBP_93574', 'bidmanagement@pidatacenters.com', '$2y$10$JCD2wYuJaBXRJrnspjdR3OLXrgM2rSI.PiAjQOP4AKWrj3HQLp19i', '+91', '1111111111', 0, 'pending', 'admin', 'admin', 'bidmanagement@pidatacenters.com', NULL, '2021-07-04 18:41:51', '2021-07-18 19:14:29'),
(8, 'RBP_09625', 'admin@ecservice.in', '$2y$10$9pzov2EVjaYCQmrM6ixs0uOZKFklGPoERaNHaur5.59ZQv2tEo0S.', '+91', '9345534999', 3, 'rejected', 'partner', 'partner', 'admin@ecservice.in', 'Dear Albert, Thank you for showing the interest to partnering with Pi for Cloud Hosting and DC Services. Please upload Pi RBPP and NDA documents with your authorized signatures to review and approve the registration process.', '2021-09-04 02:29:23', '2021-09-14 07:55:07'),
(9, 'RBP_06491', 'alliances@cloudfence.ai', '$2y$10$DDGmDPW3.30FTNtiF4KLJO9bfOAWn2pFeS9I0t.ZiyACFWJ5RcFYm', '+91', '9289115008', 2, 'approved', 'partner', 'partner', 'alliances@cloudfence.ai', NULL, '2021-09-08 05:16:52', '2021-10-01 02:45:59'),
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
(30, 'RBP_89542', 'praneeth@laxmitech.in', '$2y$10$NbbaZ3lq0qPnRC8Fp/PT3O.r/DcK6VYdheVCIUIoxs/uAv4UttwpS', '+91', '8985692092', 2, 'approved', 'partner', 'partner', 'praneeth@laxmitech.in', NULL, '2021-10-07 01:24:23', '2021-10-07 01:31:40'),
(31, 'RBP_02851', 'ajay@labyrinthsolutions.in', '$2y$10$bRI63FHfhCiYRxYm7mUGqupuKxftF6ABJoXG8Kz6Q7F05HqhsRvra', '+91', '9618612222', 2, 'approved', 'partner', 'partner', 'ajay@labyrinthsolutions.in', NULL, '2021-10-08 05:40:18', '2021-10-13 03:40:03'),
(32, 'RBP_39724', 'srinivas.sriram.om@tatatel.co.in', '$2y$10$1vaujYlGtQhAmlQr09OSuejaaJHfSvcGokflPPD6WJpIuXau5x3LG', '+91', '8106193218', 2, 'approved', 'partner', 'partner', 'srinivas.sriram.om@tatatel.co.in', NULL, '2021-10-12 06:34:18', '2021-10-13 00:32:32'),
(33, 'RBP_26591', 'vidya@vservetech.in', '$2y$10$8c2FGnjJUOrN8tGU1sqwPebZEzR4PqMBqmICTVsKedBlcZl3vx9AS', '+91', '6364777712', 3, 'rejected', 'partner', 'partner', 'vidya@vservetech.in', 'The RBPP & NDA documents uploaded are not the updated agreements. Please contact sales owner for the new RBPP & NDA.', '2021-10-12 10:49:31', '2021-10-13 00:36:19'),
(34, 'RBP_21530', 'mjs@mslinfotech.com', '$2y$10$Mg3iytEom/TiNWVXaC5fi.BAgAdYdqz0CgWrFvGhkOkJplAMezezy', '+91', '7540050072', 2, 'approved', 'partner', 'partner', 'mjs@mslinfotech.com', NULL, '2021-10-13 01:37:32', '2021-10-13 02:02:37'),
(35, 'RBP_01892', 'sales@origonsystems.com', '$2y$10$pSI2bnY6nknmYfjW37Rd.ORVfNn0p4ZVwkCqaFfgSv7WaxEYhK14m', '+91', '9841071153', 2, 'approved', 'partner', 'partner', 'sales@origonsystems.com', NULL, '2021-10-13 01:39:56', '2021-10-13 01:53:28'),
(36, 'RBP_21908', 'amit.desai92@yaho.in', '$2y$10$H7z8ktNDu.VfZX/V5sjD7eAqdR5Ns1A/8VELvhcJCrmK99tTPQiG6', '+91', '8454093862', 3, 'rejected', 'partner', 'partner', 'amit.desai92@yaho.in', 'RBPP docs are not relevant and this is a test registration it seems.', '2021-10-13 06:36:46', '2021-10-13 07:31:26'),
(37, 'RBP_06213', 'mpatil@yotta.com', '$2y$10$WNv30A35wZ4yMS8my3m5/.l3lcT3.LFddO8PnpdDyOPB4VfIutJV2', '+91', '9223577795', 3, 'rejected', 'partner', 'partner', 'mpatil@yotta.com', 'Amit Desai would be discussing with Yotta team for needful action.', '2021-10-14 00:03:11', '2021-10-18 00:32:20'),
(38, 'RBP_79346', 'vidya@vservetech.co.in', '$2y$10$SuTcm./N5yUu0.j0WaOceehHjE.ykRdl1krkP3XnAkc9hVCuKH4Ru', '+91', '9448708712', 2, 'approved', 'partner', 'partner', 'vidya@vservetech.co.in', NULL, '2021-10-14 02:56:00', '2021-10-14 05:01:33'),
(39, 'RBP_26384', 'pasu@dcdrinfra.com', '$2y$10$AeAaVohH48mno2FQ9AEQfuRf3zWBQFZWayNAMlriiW4BAHSIytPLO', '+91', '9841979150', 2, 'approved', 'partner', 'partner', 'pasu@dcdrinfra.com', NULL, '2021-10-16 00:07:36', '2021-10-19 02:05:54'),
(40, 'RBP_90587', 'mpatil@yotta.com', '$2y$10$UqgwWvF.hL0q8SRonrlrcu1uwNJs2/sylHFZE7DiItqdATQaQthli', '+91', '9223577795', 2, 'approved', 'partner', 'partner', 'mpatil@yotta.com', NULL, '2021-10-18 00:52:47', '2021-10-18 04:25:22'),
(41, 'RBP_39102', 'yugandhar@tracenetwork.in', '$2y$10$nzND.3YdFxYKxhCHv3a3ie2dTmQi47r03oBwEf6SeEW3WYr2Jg2Ge', '+91', '9640406999', 3, 'rejected', 'partner', 'partner', 'yugandhar@tracenetwork.in', 'Rejecting this specific entry as right RBPP docs are not uploaded in this registration and your team has created another registration entry and uploaded the signed docs.', '2021-10-18 07:23:41', '2021-10-20 06:35:45'),
(42, 'RBP_03571', 'suresh@tracenetwork.in', '$2y$10$FbYbTCx78p6E76Vi58o19euLZGP5y6em044XRXOVlNZ3l0SuQVCUu', '+91', '9989125347', 2, 'approved', 'partner', 'partner', 'suresh@tracenetwork.in', NULL, '2021-10-19 23:14:05', '2021-10-26 03:01:50'),
(43, 'RBP_93184', 'rajendran@felixinfotech.com', '$2y$10$Q9tPQNu3aoVrf0T/ndrXX.zqVdohuyCO7qoikBmARNnZVnxPjCD6q', '+91', '9941666675', 2, 'approved', 'partner', 'partner', 'rajendran@felixinfotech.com', NULL, '2021-10-21 19:38:35', '2021-10-25 05:37:48'),
(44, 'RBP_53261', 'harish@smartsoft.co.in', '$2y$10$dERAgpNiaVhxFHyccRszuOEwxHCVEW4rTIM1v8AoqTLJHjxp29If2', '+91', '9895604277', 3, 'rejected', 'partner', 'partner', 'harish@smartsoft.co.in', 'In the RBPP document on the 5th page, the second party details option is left blank. Partner need to fill up the same & re submit .', '2021-10-25 07:50:17', '2021-10-25 22:52:31'),
(45, 'RBP_59024', 'murali@vipuns.com', '$2y$10$0dAznkEt52uRfj3qNxAS8OD5PjoOW5O1L24vHhuZQBziNfU0UEQ82', '+91', '8095680999', 3, 'rejected', 'partner', 'partner', 'murali@vipuns.com', 'RBPP & NDA documents uploaded are the older version, please upload the latest documents & re register.', '2021-10-25 08:05:01', '2021-10-25 22:56:07'),
(46, 'RBP_60172', 'harish@smartsoft.co.in', '$2y$10$OxDN4IPMnld4kv2NqSsAZeTyF8ux6r2223jatzqviOlH60CuJAuB2', '+91', '9895604277', 2, 'approved', 'partner', 'partner', 'harish@smartsoft.co.in', NULL, '2021-10-25 23:19:23', '2021-10-27 02:38:39'),
(47, 'RBP_56418', 'ceo@discclt.com', '$2y$10$H6xuqAxLuQ2zwx6mrE9w7eGcRv8i91ytvD0F7TIVckv.h6z.EpZ6G', '+91', '9349251916', 2, 'approved', 'partner', 'partner', 'ceo@discclt.com', NULL, '2021-10-27 04:06:31', '2021-10-27 04:28:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(37, 'RBP_26384', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Archieving,High Availability,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"Linux,.NET,MS Exchange,MS SQL,MySQL,System Management,System Integration"', NULL, NULL, '"Assessments,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'DCDR Infra is already onboarded IIT-M Cloud server with Harbour1 and working for few new cases also.', 'Transfer Price', 39, 'storage/app/public/uploads/registrations/RBPP Agreement-DC-DR Infra.pdf', 'storage/app/public/uploads/registrations/NDA -DC-DR Infra.pdf', '2021-10-16 00:07:36', '2021-10-16 00:07:36'),
(38, 'RBP_90587', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Managed Service Provider"', '"Co-Location,Cloud Services,Managed Services,Assessments"', NULL, 'Yotta provides Managed service to customer and would like to be partner with PI for reselling Cloud and infra services to customer', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 40, 'storage/app/public/uploads/registrations/YOTTA MSA - DC - Pi-DC +YLLP - signed.pdf', 'storage/app/public/uploads/registrations/Mutual NDA_Pi_Yotta_Digitally signed_07-0702020 (B&W).pdf', '2021-10-18 00:52:47', '2021-10-18 00:52:47'),
(39, 'RBP_39102', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We are looking for a long term business relationship with Pi data center and to provide our customers the esteemed products of Pi data.', 'Recurring Commission,Transfer Price', 41, 'storage/app/public/uploads/registrations/Pi Partner Program.pdf', 'storage/app/public/uploads/registrations/Nondisclosure Agreement.pdf', '2021-10-18 07:23:41', '2021-10-18 07:23:41'),
(40, 'RBP_03571', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Looking for a long time business relationship and extend support to improve our services to our customers', 'Recurring Commission,Transfer Price', 42, 'storage/app/public/uploads/registrations/Pi Partner Program_1.pdf', 'storage/app/public/uploads/registrations/Nondisclosure Agreement_1.pdf', '2021-10-19 23:14:05', '2021-10-19 23:14:05'),
(41, 'RBP_93184', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - Microsoft,Archieving,High Availability,High Performance Computing (HPC),Security & Compliance,Storage (Backup, Recovery & Asset Storage)"', NULL, '"IBM,Linux,MS Exchange,MS SQL,System Management,System Integration"', NULL, NULL, '"Assessments,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build,Assessments"', NULL, 'Worked already for 1) Solvedge and currently working for few prospects', 'Transfer Price', 43, 'storage/app/public/uploads/registrations/RBPP-FELIX.pdf', 'storage/app/public/uploads/registrations/NDA-FELIX.pdf', '2021-10-21 19:38:35', '2021-10-21 19:38:35'),
(42, 'RBP_53261', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Web & Web Apps"', NULL, '"Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Smartsoft is a leading provider of quality IT infrastructure, ERP and Business Intelligence Solutions by leveraging technology in cost effective manner to solve business problems.When it comes to your IT infrastructure needs, we give you choices based on Smartsoft''s relationships with world-class Vendors -including IBM, SAP Business One, Microsoft, DELL, HP, VMWARE, Citrix, Symantec, Adobe, Oracle, Intel etc.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 44, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21).pdf', '2021-10-25 07:50:17', '2021-10-25 07:50:17'),
(43, 'RBP_59024', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"System Integration"', NULL, NULL, '"Cloud Migration Services,Managed Service Provider,Strategic \\/ IT Consulting"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'We would like to get co-location space and manage services from the PI data center for esteemed Customers...\nleverage Pi teams skill set to expand our hybrid cloud customer requirements.\nwe are looking at Pi for our focused verticals like SMB, enterprise, Government customers.', 'Recurring Commission', 45, 'storage/app/public/uploads/registrations/Vipuns business registration RBPP rev1.pdf', 'storage/app/public/uploads/registrations/Vipuns-NDA V2.pdf', '2021-10-25 08:05:01', '2021-10-25 08:05:01'),
(44, 'RBP_60172', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability, Database & Data Warehouse, Dev & Test,High Performance Computing (HPC),Internet of Things (IoT),Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO)"', NULL, '"Hadoop,IBM,.NET, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,System Management,System Integration"', NULL, NULL, '"ERP Consulting,Cloud Migration Services,Custom Application Development,Managed Service Provider,Strategic \\/ IT Consulting"', '"Cloud Services,Managed Services, Data Center Build, Data Center Consulting"', NULL, 'Smartsoft is a leading provider of quality IT infrastructure, ERP and Business Intelligence Solutions by leveraging technology in cost effective manner to solve business problems.When it comes to your IT infrastructure needs, we give you choices based on Smartsoft''s relationships with world-class Vendors -including IBM, SAP Business One, Microsoft, DELL, HP, VMWARE, Citrix, Symantec, Adobe, Oracle, Intel etc.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 46, 'storage/app/public/uploads/registrations/RBPP Agreement-Final(19-May-21).pdf', 'storage/app/public/uploads/registrations/NDA -Final(19-May-21).pdf', '2021-10-25 23:19:23', '2021-10-25 23:19:23'),
(45, 'RBP_56418', '"Cloud Services,Data Center Services,Disaster Recovery,Business Applications - SAP,Business Applications - Microsoft,Business Applications - Oracle,Business Applications - Other,Big Data, Analytics, Batch Processing & Business Intelligence (BI),Archieving,High Availability,Content Delivery, Database & Data Warehouse, Dev & Test,Digital Marketing,High Performance Computing (HPC),Internet of Things (IoT),Mobile,Security & Compliance,Storage (Backup, Recovery & Asset Storage),Value (Cost Saving \\/ TCO),Web & Web Apps"', NULL, '"Apache, Flash Media Server,Hadoop,IBM,JBOSS,Linux,.NET,MS Exchange, Microsoft Share Point,MS SQL,MySQL,SAP,SAP,Oracle Apps,Oracle DataBase,Oracle Middleware,Ruby on Rails,System Management,System Integration"', NULL, NULL, '"Assessments,ERP Consulting,Cloud Migration Services,Custom Application Development,Digital Marketing,Managed Service Provider,Strategic \\/ IT Consulting,Staff Augmentation"', '"Co-Location,Cloud Services,Managed Services, Data Center Build, Data Center Consulting,Assessments"', NULL, 'Dbrains will be focussing on the existing customer base & will position cloud & colo.', 'Recurring Commission,One-Time Referral Bonus,Transfer Price', 47, 'storage/app/public/uploads/registrations/RBPP Agreement.pdf', 'storage/app/public/uploads/registrations/NDA.pdf', '2021-10-27 04:06:31', '2021-10-27 04:06:31');

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
('suresh@tracenetwork.in', 'cb49Jc0Os6', '2021-10-27 03:42:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pipelines`
--

INSERT INTO `pipelines` (`id`, `potential_id`, `rbp_name`, `rbp_state`, `sales_owner`, `customer_state`, `customer_name`, `customer_email_id`, `business_industry`, `account_type`, `sbunits_id`, `sbu_product_id`, `opportunity_details`, `stage`, `rating_id`, `mrc`, `otc`, `arc`, `acv`, `tcv`, `contract_period`, `payment_terms`, `opportunity_date`, `proposal_date`, `closing_date`, `customer_type`, `commission_type`, `projected_commission`, `customer_website`, `opportunity_docs`, `status`, `rejection_comment`, `status_date`, `partner_id`, `created_at`, `updated_at`) VALUES
(4, 'RBP_97581_041020211', 'Sceptre Business Corporation LLP', 13, 'Sceptre Business Corporation LLP', 13, 'Giridhar Eye Institute', 'itmanager@giridhareye.org', '5', '1', 1, 3, NULL, '2', '1', 25000.00, 5000.00, 0.00, 305000.00, 305000.00, 12, '2', '2021-10-04', '2021-10-04', '2021-10-31', '1', '1', 30000.00, 'giridhareye.org', '', 'approved', NULL, '2021-10-19 06:13:03', 28, '2021-10-04 07:09:35', '2021-10-19 06:13:03'),
(5, 'RBP_02851_141020211', 'Labyrinth Solutions', 1, 'G ajay', 24, 'Sudaram Finance', 'ap@sundarambpo.com', '10', '1', 1, 1, NULL, '3', '2', 30500.00, 0.00, 0.00, 366000.00, 1098000.00, 36, '2', '2021-10-14', '2021-10-14', '2021-11-30', '1', '1', 109800.00, 'https://www.sundaramfinance.in', '', NULL, NULL, NULL, 31, '2021-10-14 00:23:15', '2021-10-14 00:23:15'),
(6, 'RBP_02851_141020212', 'Labyrinth Solutions', 1, 'G ajay', 1, 'Centurion University', 'kalyankv@cutmap.ac.in', '7', '1', 1, 14, NULL, '3', '2', 33500.00, 0.00, 0.00, 402000.00, 1206000.00, 36, '2', '2021-10-14', '2021-10-14', '2021-11-30', '1', '1', 120600.00, 'https://cutmap.ac.in', '', NULL, NULL, NULL, 31, '2021-10-14 00:28:36', '2021-10-14 00:28:36'),
(7, 'RBP_06213_191020211', 'Yotta Infrastructure Solutions LLP', 15, 'Sandeep Thombre', 15, 'NM1 Datacentre', 'sbapat@yotta.com', '2', '1', 1, 1, 'SAP DR Hosting', '2', '2', 120000.00, 50000.00, 1440000.00, 2930000.00, 2930000.00, 12, '1', '2021-10-19', '2021-10-19', '2021-11-24', '1', '3', 0.00, 'https://www.yotta.com/', 'storage/app/public/uploads/pipelines/RBP_06213_191020211/Customer_Inputs_DR 18th Oct 2021.xlsx', 'approved', NULL, '2021-10-25 05:28:36', 40, '2021-10-18 23:11:35', '2021-10-25 05:28:36'),
(8, 'RBP_06213_211020211', 'YOTTA LLP', 15, 'Rahul Shetty', 15, 'BOB', 'rshetty@yotta.com', '1', '2', 1, 1, 'Website Hosting.', '2', '2', 100000.00, 100000.00, 1200000.00, 2500000.00, 12100000.00, 60, '2', '2021-10-21', '2021-10-21', '2021-12-16', '1', '3', 0.00, 'yotta.com', 'storage/app/public/uploads/pipelines/RBP_06213_211020211/addendum-2-f-18-09.pdf;storage/app/public/uploads/pipelines/RBP_06213_211020211/addendum-05-13.pdf;storage/app/public/uploads/pipelines/RBP_06213_211020211/rfp-for-selection-of-service-provider-for-hosting.pdf', NULL, NULL, NULL, 40, '2021-10-21 03:47:58', '2021-10-21 03:47:58');

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
(1, 'Pi Partner Program - Training Workshop', '2021-09-03', '15:00:00', '16:30:00', 'By Roopam Jain', '<p><strong>Date:</strong> Sept 03, 2021<br />\r\n<strong>Time:</strong> 03:00-4.30PM</p>\r\n<h5 style="color:blue;">Agenda</h5>\r\n\r\n<p>Overview on Pi DATACENTERS, Products &amp; Services By Roopam Jain<br />\r\nAccount Manager (North)</p>\r\n\r\n<p>Demo on Harbour1 Enterprise Cloud Platform:<br />\r\nSreekanth Chukalooru<br />\r\nSolution Architect</p>\r\n\r\n<p>Moderator of the Event:<br />\r\nBhaswati De<br />\r\nBusiness Support - Partner Alliance</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please find the Meeting Details Below:<br />\r\nJoin Zoom Meeting<br />\r\n<a href="https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09" target="_blank">https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09</a></p>\r\n\r\n<p>Meeting ID: 896 6365 0475<br />\r\nPasscode: 070619</p>', '/trainings/pi-partner-program-training-workshop', 1, NULL, '2021-10-29 05:25:24'),
(2, 'Pi Partner Program - Training Workshop', '2021-09-13', '15:00:00', '16:30:00', 'By Roopam Jain', 'Agenda :\r\nOverview on Pi DATACENTERS, Products & Services \r\nBy Roopam Jain – Account Manager (North)\r\nDemo on Harbour1 Enterprise Cloud Platform :\r\nSreekanth Chukalooru \r\nSolution Architect\r\nModerator of the Event :\r\nBhaswati De \r\nBusiness Support - Partner Alliance', '/trainings/pi-partner-program-training-workshop', 0, NULL, NULL),
(3, 'Event 1', '2021-09-04', '15:00:00', '16:30:00', NULL, '<p><strong>Date:</strong> Sept 03, 2021<br />\r\n<strong>Time:</strong> 03:00-4.30PM</p>\r\n\r\n<p><strong>Agenda</strong></p>\r\n\r\n<p><strong>Overview on Pi DATACENTERS, Products &amp; Services</strong> By Roopam Jain<br />\r\nAccount Manager (North)</p>\r\n\r\n<p><strong>Demo on Harbour1 Enterprise Cloud Platform</strong>:<br />\r\nSreekanth Chukalooru<br />\r\nSolution Architect</p>\r\n\r\n<p>Moderator of the Event:<br />\r\nBhaswati De<br />\r\nBusiness Support - Partner Alliance</p>\r\n\r\n<p>Please find the Meeting Details Below:<br />\r\nJoin Zoom Meeting<br />\r\n<a href="https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09" target="_blank">https://us02web.zoom.us/j/89663650475?pwd=UWI4cGVIVi9GcFVNc3NwWk1xOXBWdz09</a></p>\r\n\r\n<p>Meeting ID: 896 6365 0475<br />\r\nPasscode: 070619</p>', NULL, 0, '2021-09-03 09:46:24', '2021-10-29 05:32:25');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_is_active`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'bidmanagement@pidatacenters.com', NULL, '$2y$10$JCD2wYuJaBXRJrnspjdR3OLXrgM2rSI.PiAjQOP4AKWrj3HQLp19i', 1, 'admin', NULL, '2021-07-04 18:41:51', '2021-07-18 19:14:29'),
(8, '', 'admin@ecservice.in', NULL, '$2y$10$9pzov2EVjaYCQmrM6ixs0uOZKFklGPoERaNHaur5.59ZQv2tEo0S.', 0, 'partner_admin', NULL, '2021-09-04 02:29:23', '2021-09-04 02:29:23'),
(9, '', 'alliances@cloudfence.ai', NULL, '$2y$10$DDGmDPW3.30FTNtiF4KLJO9bfOAWn2pFeS9I0t.ZiyACFWJ5RcFYm', 1, 'partner_admin', NULL, '2021-09-08 05:16:52', '2021-10-01 02:45:59'),
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
(30, '', 'praneeth@laxmitech.in', NULL, '$2y$10$NbbaZ3lq0qPnRC8Fp/PT3O.r/DcK6VYdheVCIUIoxs/uAv4UttwpS', 1, 'partner_admin', NULL, '2021-10-07 01:24:23', '2021-10-07 01:24:23'),
(31, '', 'ajay@labyrinthsolutions.in', NULL, '$2y$10$bRI63FHfhCiYRxYm7mUGqupuKxftF6ABJoXG8Kz6Q7F05HqhsRvra', 1, 'partner_admin', NULL, '2021-10-08 05:40:18', '2021-10-13 03:40:03'),
(32, '', 'srinivas.sriram.om@tatatel.co.in', NULL, '$2y$10$1vaujYlGtQhAmlQr09OSuejaaJHfSvcGokflPPD6WJpIuXau5x3LG', 1, 'partner_admin', NULL, '2021-10-12 06:34:18', '2021-10-12 06:34:18'),
(33, '', 'vidya@vservetech.in', NULL, '$2y$10$8c2FGnjJUOrN8tGU1sqwPebZEzR4PqMBqmICTVsKedBlcZl3vx9AS', 0, 'partner_admin', NULL, '2021-10-12 10:49:31', '2021-10-13 00:36:19'),
(34, '', 'mjs@mslinfotech.com', NULL, '$2y$10$Mg3iytEom/TiNWVXaC5fi.BAgAdYdqz0CgWrFvGhkOkJplAMezezy', 1, 'partner_admin', NULL, '2021-10-13 01:37:32', '2021-10-13 02:02:37'),
(35, '', 'sales@origonsystems.com', NULL, '$2y$10$pSI2bnY6nknmYfjW37Rd.ORVfNn0p4ZVwkCqaFfgSv7WaxEYhK14m', 1, 'partner_admin', NULL, '2021-10-13 01:39:56', '2021-10-13 01:39:56'),
(36, '', 'amit.desai92@yaho.in', NULL, '$2y$10$H7z8ktNDu.VfZX/V5sjD7eAqdR5Ns1A/8VELvhcJCrmK99tTPQiG6', 0, 'partner_admin', NULL, '2021-10-13 06:36:46', '2021-10-13 07:31:26'),
(37, '', 'mpatil@yotta.com', NULL, '$2y$10$WNv30A35wZ4yMS8my3m5/.l3lcT3.LFddO8PnpdDyOPB4VfIutJV2', 0, 'partner_admin', NULL, '2021-10-14 00:03:11', '2021-10-18 00:32:20'),
(38, '', 'vidya@vservetech.co.in', NULL, '$2y$10$SuTcm./N5yUu0.j0WaOceehHjE.ykRdl1krkP3XnAkc9hVCuKH4Ru', 1, 'partner_admin', NULL, '2021-10-14 02:56:00', '2021-10-14 02:56:00'),
(39, '', 'pasu@dcdrinfra.com', NULL, '$2y$10$AeAaVohH48mno2FQ9AEQfuRf3zWBQFZWayNAMlriiW4BAHSIytPLO', 1, 'partner_admin', NULL, '2021-10-16 00:07:36', '2021-10-16 00:07:36'),
(40, '', 'mpatil@yotta.com', NULL, '$2y$10$UqgwWvF.hL0q8SRonrlrcu1uwNJs2/sylHFZE7DiItqdATQaQthli', 1, 'partner_admin', NULL, '2021-10-18 00:52:47', '2021-10-18 04:25:22'),
(41, '', 'yugandhar@tracenetwork.in', NULL, '$2y$10$nzND.3YdFxYKxhCHv3a3ie2dTmQi47r03oBwEf6SeEW3WYr2Jg2Ge', 0, 'partner_admin', NULL, '2021-10-18 07:23:41', '2021-10-20 06:35:45'),
(42, '', 'suresh@tracenetwork.in', NULL, '$2y$10$FbYbTCx78p6E76Vi58o19euLZGP5y6em044XRXOVlNZ3l0SuQVCUu', 1, 'partner_admin', NULL, '2021-10-19 23:14:05', '2021-10-26 03:01:50'),
(43, '', 'rajendran@felixinfotech.com', NULL, '$2y$10$Q9tPQNu3aoVrf0T/ndrXX.zqVdohuyCO7qoikBmARNnZVnxPjCD6q', 1, 'partner_admin', NULL, '2021-10-21 19:38:35', '2021-10-21 19:38:35'),
(44, '', 'harish@smartsoft.co.in', NULL, '$2y$10$dERAgpNiaVhxFHyccRszuOEwxHCVEW4rTIM1v8AoqTLJHjxp29If2', 0, 'partner_admin', NULL, '2021-10-25 07:50:17', '2021-10-25 22:52:31'),
(45, '', 'murali@vipuns.com', NULL, '$2y$10$0dAznkEt52uRfj3qNxAS8OD5PjoOW5O1L24vHhuZQBziNfU0UEQ82', 0, 'partner_admin', NULL, '2021-10-25 08:05:01', '2021-10-25 22:56:07'),
(46, '', 'harish@smartsoft.co.in', NULL, '$2y$10$OxDN4IPMnld4kv2NqSsAZeTyF8ux6r2223jatzqviOlH60CuJAuB2', 1, 'partner_admin', NULL, '2021-10-25 23:19:23', '2021-10-27 02:38:39'),
(47, '', 'ceo@discclt.com', NULL, '$2y$10$H6xuqAxLuQ2zwx6mrE9w7eGcRv8i91ytvD0F7TIVckv.h6z.EpZ6G', 1, 'partner_admin', NULL, '2021-10-27 04:06:31', '2021-10-27 04:06:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `vid_title`, `vid_is_ext_url`, `vid_url`, `vid_is_active`, `created_at`, `updated_at`) VALUES
(1, 'HarbourFront, India''s First Indigenous CDN On Cloud. Another 1st From Pi DATACENTERS', 1, 'https://www.youtube.com/embed/NxHgdxbgBqY', 1, '2021-09-13 03:17:36', '2021-09-13 03:17:36'),
(2, 'The Grand Launch of ''Pi Amaravati'', India''s First Uptime Institute TIER IV Certified Data Center', 1, 'https://www.youtube.com/embed/V5YI2OM-0ak', 1, '2021-09-13 03:18:37', '2021-09-13 03:18:37'),
(3, 'The all new Harbour1® website is NOW LIVE!', 1, 'https://www.youtube.com/embed/qkq1D8h-lec', 1, '2021-09-13 03:19:04', '2021-09-13 03:19:04'),
(4, 'test', 1, 'https://www.youtube.com/embed/bPkMuhCpOz8', 1, '2021-10-30 02:29:59', '2021-10-30 02:29:59'),
(5, 'test upload', 0, 'resources/videos/sample-mp4-file.mp4', 1, '2021-10-30 02:32:35', '2021-10-30 02:32:35');

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
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `partnerpersonalinfos`
--
ALTER TABLE `partnerpersonalinfos`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `partnertechinfos`
--
ALTER TABLE `partnertechinfos`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `payment_terms`
--
ALTER TABLE `payment_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pipelines`
--
ALTER TABLE `pipelines`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
