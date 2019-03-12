-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 10:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayadaty_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(12) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `c_country_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `c_country_id`) VALUES
(1, 'امانة العاصمة', 243),
(2, 'صنعاء', 243),
(3, 'عدن', 243),
(4, 'تعز', 243),
(5, 'حضرموت', 243),
(6, 'المهرة', 243),
(7, 'عمران', 243),
(8, 'اب', 243);

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `c_id` int(12) NOT NULL,
  `c_job_name` varchar(200) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_place_name` varchar(200) DEFAULT NULL,
  `c_country_address` int(12) NOT NULL,
  `c_city_address` int(12) NOT NULL,
  `c_street_address` varchar(200) NOT NULL,
  `c_day_start` int(2) NOT NULL,
  `c_day_end` int(2) NOT NULL,
  `c_period_start` varchar(50) NOT NULL,
  `c_period_end` varchar(50) NOT NULL,
  `c_summary` text,
  `c_d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(12) NOT NULL,
  `country_shortname` varchar(3) NOT NULL,
  `country_name` varchar(300) NOT NULL,
  `country_phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_shortname`, `country_name`, `country_phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `day_id` int(11) NOT NULL,
  `day_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day_id`, `day_name`) VALUES
(1, 'السبت'),
(2, 'الأحد'),
(3, 'الاثنين'),
(4, 'الثلاثاء'),
(5, 'الأربعاء'),
(6, 'الخميس'),
(7, 'الجمعة');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(12) NOT NULL,
  `d_name` varchar(150) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_phone` varchar(15) DEFAULT NULL,
  `d_gender` tinyint(1) NOT NULL,
  `d_birth_date` timestamp NULL DEFAULT NULL,
  `d_nationality` int(12) NOT NULL,
  `d_country_address` int(12) NOT NULL,
  `d_city_address` int(12) NOT NULL,
  `d_street_address` varchar(200) NOT NULL,
  `d_facebook_link` varchar(500) DEFAULT NULL,
  `d_twitter_link` varchar(500) DEFAULT NULL,
  `d_personal_img` varchar(50) DEFAULT NULL,
  `d_specialty_id` int(12) NOT NULL,
  `d_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_name`, `d_email`, `d_phone`, `d_gender`, `d_birth_date`, `d_nationality`, `d_country_address`, `d_city_address`, `d_street_address`, `d_facebook_link`, `d_twitter_link`, `d_personal_img`, `d_specialty_id`, `d_password`) VALUES
(1, 'Hamzah', 'hamzah@gmail.com', '+967777888999', 1, '1988-02-19 21:00:00', 54, 1, 5, 'شارع الستين الشمالي', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar.png', 3, 'hamzah'),
(2, 'امين ردمان', 'ameen@gmail.com', '+967777999666', 1, '1983-02-14 21:00:00', 243, 1, 1, 'التحرير', 'https://www.facebook.com/', 'https://www.facebook.com/', 'user8-128x128.jpg', 4, 'ameen'),
(3, 'ليلى الربيعي', 'lila@gmail.com', '+967777722665', 0, '1984-01-31 21:00:00', 243, 1, 5, 'المكلا', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar2.png', 3, 'lila1'),
(4, 'محمد ناصر الخزان', 'mohammed@gmail.com', '+967712233366', 1, '1972-02-03 21:00:00', 243, 1, 1, 'المطار', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar5.png', 2, 'mohammed'),
(5, 'ضياء العزي', 'dea@gmail.com', '+967739638528', 1, '1981-02-04 21:00:00', 191, 1, 8, 'شارع صنعاء', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar04.png', 1, 'dea12');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_hospiatl`
--

CREATE TABLE `doctor_hospiatl` (
  `dh_d_id` int(12) NOT NULL,
  `dh_h_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `education_specialty`
--

CREATE TABLE `education_specialty` (
  `e_s_id` int(12) NOT NULL,
  `e_s_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_specialty`
--

INSERT INTO `education_specialty` (`e_s_id`, `e_s_name`) VALUES
(1, 'طب عام'),
(2, 'المخ والأعصاب'),
(3, 'اسنان'),
(4, 'جلدية'),
(5, 'الروماتيزم والمفاصل'),
(6, 'طب عيون');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(12) NOT NULL,
  `emp_name` varchar(150) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_phone` int(14) NOT NULL,
  `emp_address` varchar(50) NOT NULL,
  `emp_salary` float NOT NULL,
  `emp_employ_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `e_id` int(12) NOT NULL,
  `e_job_name` varchar(200) NOT NULL,
  `e_clinic_name` varchar(200) NOT NULL,
  `e_place_address` varchar(200) NOT NULL,
  `e_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `e_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `e_job_summary` text,
  `e_certificate` varchar(50) DEFAULT NULL,
  `e_d_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(12) NOT NULL,
  `h_name` varchar(250) NOT NULL,
  `h_abbrev` varchar(50) DEFAULT NULL,
  `h_email` varchar(50) NOT NULL,
  `h_phone` int(14) NOT NULL,
  `h_type` tinyint(4) NOT NULL,
  `h_country_address` int(12) NOT NULL,
  `h_city_address` int(12) NOT NULL,
  `h_street_address` varchar(200) NOT NULL,
  `h_summary` text NOT NULL,
  `h_img` varchar(200) DEFAULT NULL,
  `h_license_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_specialty`
--

CREATE TABLE `hospital_specialty` (
  `hs_h_id` int(12) NOT NULL,
  `hs_sp_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `period_id` int(12) NOT NULL,
  `period_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`period_id`, `period_name`) VALUES
(1, '08:00صباحا'),
(2, '09:00صباحا'),
(3, '10:00صباحا'),
(4, '11:00صباحا'),
(5, '12:00مساء'),
(6, '1:00مساء');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `q_id` int(12) NOT NULL,
  `q_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `q_graduate_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `q_gpa` int(3) NOT NULL,
  `q_certificate` varchar(200) NOT NULL,
  `q_q_t_id` int(12) NOT NULL,
  `q_e_s_id` int(12) NOT NULL,
  `q_un_id` int(12) NOT NULL,
  `q_d_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`q_id`, `q_start_date`, `q_graduate_date`, `q_gpa`, `q_certificate`, `q_q_t_id`, `q_e_s_id`, `q_un_id`, `q_d_id`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 89, 'red1.png', 6, 2, 3, 1),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 90, 'blue1.png', 2, 1, 2, 1),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 85, 'red1.png', 4, 5, 1, 1),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 82, 'red1.png', 7, 6, 4, 2),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 96, 'blue1.png', 3, 1, 1, 2),
(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 84, 'blue1.png', 1, 3, 2, 2),
(7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 85, 'blue1.png', 6, 1, 1, 3),
(8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 85, 'red1.png', 7, 2, 2, 3),
(9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 99, 'red1.png', 4, 4, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `qualification_type`
--

CREATE TABLE `qualification_type` (
  `q_t_id` int(12) NOT NULL,
  `q_t_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qualification_type`
--

INSERT INTO `qualification_type` (`q_t_id`, `q_t_name`) VALUES
(1, 'دبلوم'),
(2, 'بكالوريوس'),
(3, 'ليسانس'),
(4, 'بورد'),
(5, 'زمالة'),
(6, 'ماجستير'),
(7, 'دكتوراه');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(12) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `s_description` text NOT NULL,
  `s_emp_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(12) NOT NULL,
  `slide_img` varchar(200) NOT NULL,
  `slide_emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE `specialty` (
  `specialty_id` int(12) NOT NULL,
  `specialty_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`specialty_id`, `specialty_name`) VALUES
(1, 'اسنان'),
(2, 'جلدية'),
(3, 'باطنية'),
(4, 'عظام');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `un_id` int(12) NOT NULL,
  `un_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`un_id`, `un_name`) VALUES
(1, 'جامعة صنعاء'),
(2, 'جامعة عدن'),
(3, 'العلوم والتكنولوجيا'),
(4, 'دار السلام');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(12) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_privilage` int(2) DEFAULT NULL,
  `u_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_username`, `u_password`, `u_email`, `u_privilage`, `u_registered_date`) VALUES
(1, 'Hamzah', 'hamzah', 'hamzah@gmail.com', NULL, '2019-03-11 16:30:16'),
(2, 'امين ردمان', 'ameen', 'ameen@gmail.com', NULL, '2019-03-12 13:28:54'),
(3, 'ليلى الربيعي', 'lila1', 'lila@gmail.com', NULL, '2019-03-12 13:33:53'),
(4, 'محمد ناصر الخزان', 'mohammed', 'mohammed@gmail.com', NULL, '2019-03-12 13:40:42'),
(5, 'ضياء العزي', 'dea12', 'dea@gmail.com', NULL, '2019-03-12 14:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `c_country_id_fk` (`c_country_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_email` (`d_email`),
  ADD KEY `d_specialty_id_fk` (`d_specialty_id`),
  ADD KEY `d_nationality_country_fk` (`d_nationality`),
  ADD KEY `city_id_fk` (`d_city_address`);

--
-- Indexes for table `education_specialty`
--
ALTER TABLE `education_specialty`
  ADD PRIMARY KEY (`e_s_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `e_d_id_fk` (`e_d_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `q_e_s_id_fk` (`q_e_s_id`),
  ADD KEY `q_u_id_fk` (`q_un_id`),
  ADD KEY `q_q_t_id_fk` (`q_q_t_id`),
  ADD KEY `q_d_id_fk` (`q_d_id`);

--
-- Indexes for table `qualification_type`
--
ALTER TABLE `qualification_type`
  ADD PRIMARY KEY (`q_t_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_emp_id_fk` (`s_emp_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`specialty_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`un_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `c_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education_specialty`
--
ALTER TABLE `education_specialty`
  MODIFY `e_s_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `e_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `period_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `q_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `qualification_type`
--
ALTER TABLE `qualification_type`
  MODIFY `q_t_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `un_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `c_country_id_fk` FOREIGN KEY (`c_country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `city_id_fk` FOREIGN KEY (`d_city_address`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `d_nationality_country_fk` FOREIGN KEY (`d_nationality`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`d_specialty_id`) REFERENCES `specialty` (`specialty_id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `e_d_id_fk` FOREIGN KEY (`e_d_id`) REFERENCES `doctor` (`d_id`);

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `q_d_id_fk` FOREIGN KEY (`q_d_id`) REFERENCES `doctor` (`d_id`),
  ADD CONSTRAINT `q_e_s_id_fk` FOREIGN KEY (`q_e_s_id`) REFERENCES `education_specialty` (`e_s_id`),
  ADD CONSTRAINT `q_q_t_id_fk` FOREIGN KEY (`q_q_t_id`) REFERENCES `qualification_type` (`q_t_id`),
  ADD CONSTRAINT `q_u_id_fk` FOREIGN KEY (`q_un_id`) REFERENCES `university` (`un_id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `s_emp_id_fk` FOREIGN KEY (`s_emp_id`) REFERENCES `employee` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
