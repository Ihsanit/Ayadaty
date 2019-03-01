-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 10:31 PM
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
(1, 'Mohammed Ali', 'mohammed@gmil.com', '', 0, '1999-01-19 21:00:00', 886, 1, 1, 'ش تونس', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar5.png', 4, 'mohammed'),
(2, 'Rabab Mojahed Mansour Shalan', 'aisha@gmail.com', '', 0, '1993-02-04 21:00:00', 886, 1, 1, 'الروضة', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar5.png', 3, 'rabab'),
(3, 'رباب مجاهد منصور شعلان', 'rabab2019@gmail.com', '', 0, '1993-11-09 21:00:00', 886, 1, 1, 'الروضة - صنعاء', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar2.png', 2, 'rabab'),
(4, 'روان فتحي المنصوري', 'rawan2019@gmail.com', '', 0, '1993-08-21 21:00:00', 886, 1, 3, 'الصافية - صنعاء', 'https://www.facebook.com/', 'https://www.facebook.com/', 'avatar3.png', 4, 'rawan');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_experience`
--

CREATE TABLE `doctor_experience` (
  `e_id` int(12) NOT NULL,
  `e_job_name` varchar(200) NOT NULL,
  `e_place_name` varchar(200) NOT NULL,
  `e_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `e_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `e_job_summary` text,
  `e_certificate` varchar(200) NOT NULL,
  `e_d_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `doctor_job`
--

CREATE TABLE `doctor_job` (
  `j_id` int(12) NOT NULL,
  `j_name` int(12) NOT NULL,
  `j_place_name` varchar(200) NOT NULL,
  `j_country_address` int(12) NOT NULL,
  `j_city_address` int(12) NOT NULL,
  `j_day_start` int(2) NOT NULL,
  `j_day_last` int(2) NOT NULL,
  `j_period_start` varchar(50) NOT NULL,
  `j_period_end` varchar(50) NOT NULL,
  `j_summary` text,
  `j_d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_qualification`
--

CREATE TABLE `doctor_qualification` (
  `q_id` int(12) NOT NULL,
  `q_name` int(12) NOT NULL,
  `q_university` int(12) NOT NULL,
  `q_specialty` int(12) NOT NULL,
  `q_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `q_graduate_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `q_gpa` float NOT NULL,
  `q_certificate` varchar(200) NOT NULL,
  `q_d_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Mohammed Ali', 'mohammed', 'mohammed@gmil.com', NULL, '2019-03-01 15:28:12'),
(2, 'Rabab Mojahed Mansour Shalan', 'rabab', 'aisha@gmail.com', NULL, '2019-03-01 16:45:14'),
(3, 'Rawan', 'rawan', 'rawan@gmail.com', NULL, '2019-03-01 18:20:00'),
(4, 'Rabab', 'rabab', 'rabab@gmail.com', NULL, '2019-03-01 18:21:59'),
(5, 'رباب مجاهد منصور شعلان', 'rabab', 'rabab2019@gmail.com', NULL, '2019-03-01 19:50:45'),
(6, 'روان فتحي المنصوري', 'rawan', 'rawan2019@gmail.com', NULL, '2019-03-01 20:29:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_email` (`d_email`),
  ADD KEY `d_specialty_id_fk` (`d_specialty_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(12) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`d_specialty_id`) REFERENCES `specialty` (`specialty_id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `s_emp_id_fk` FOREIGN KEY (`s_emp_id`) REFERENCES `employee` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
