-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 10:02 PM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appt_id` int(12) NOT NULL,
  `appt_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `appt_time` time NOT NULL,
  `appt_note` text,
  `appt_doctor_id` int(12) NOT NULL,
  `appt_patient_id` int(12) NOT NULL,
  `appt_visit_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(12) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Health'),
(2, 'Beauty');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(12) NOT NULL,
  `d_name` varchar(150) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_phone` int(14) NOT NULL,
  `d_address` varchar(50) NOT NULL,
  `d_gender` tinyint(1) NOT NULL,
  `d_personal_img` varchar(50) DEFAULT NULL,
  `d_salary` float NOT NULL,
  `d_employ_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `d_qualifier` int(12) NOT NULL,
  `d_experience` int(12) DEFAULT NULL,
  `d_certificate` varchar(100) DEFAULT NULL,
  `d_note` text,
  `d_specialty_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_name`, `d_email`, `d_phone`, `d_address`, `d_gender`, `d_personal_img`, `d_salary`, `d_employ_date`, `d_qualifier`, `d_experience`, `d_certificate`, `d_note`, `d_specialty_id`) VALUES
(1, 'Rabab Mojahed Mansour Shalan', 'rabab@gmail.com', 77777777, 'Al-Rudah-Sana\'a', 0, 'no_perosnal_img.png', 2000, '2018-12-31 21:00:00', 3, NULL, 'no_certificate_file.png', 'He is a hardworking', 1),
(2, 'Rabab Mojahed Mansour Shalan', 'rabab1@gmail.com', 888888888, 'Al-Rudah-Sana\'a', 0, 'dr.png', 1000, '2018-12-03 21:00:00', 3, 1, 'no_certificate_file.png', 'honest', 1),
(3, 'Rabab Mojahed Mansour Shalan', 'rabab2@gmail.com', 88887888, 'Al-Rudah-Sana\'a', 0, 'no_perosnal_img.png', 1500, '2019-01-15 21:00:00', 3, 1, 'no_certificate_file.png', 'creative', 1),
(4, 'Rabab Mojahed Mansour Shalan', 'rabab3@gmail.com', 55555555, 'Al-Rudah-Sana\'a', 0, NULL, 1020, '2019-01-08 21:00:00', 3, 1, NULL, 'no thing', 1),
(5, 'Rabab Mojahed Mansour Shalan', 'rabab11@gmail.com', 2147483647, 'Al-Rudah-Sana\'a', 0, 'no_perosnal_img.png', 2411, '2019-01-02 21:00:00', 4, 1, 'no_certificate_file.png', 'no ', 1),
(9, 'Rabab Mojahed Mansour Shalan', 'rababd@gmail.com', 33333333, 'Al-Rudah-Sana\'a', 0, 'no_perosnal_img.png', 1020, '2019-01-09 21:00:00', 4, 2, 'no_certificate_file.png', 'dddddddd', 1),
(10, 'Rabab Mojahed Mansour Shalan', 'rabab22@gmail.com', 4444444, 'Al-Rudah-Sana\'a', 0, 'no_perosnal_img.png', 1030, '2018-12-04 21:00:00', 3, 1, 'no_certificate_file.png', 'no comment', 1),
(11, 'Rabab Mojahed Mansour Shalan', 'rabab221@gmail.com', 15645788, 'Al-Rudah-Sana\'a', 0, NULL, 1000, '2019-01-16 21:00:00', 3, 1, NULL, 'lkjlnlnl', 1),
(13, 'Rabab Mojahed Mansour Shalan', 'rabab6@gmail.com', 2147483647, 'Al-Rudah-Sana\'a', 0, 'no_file.png', 666, '2019-01-05 21:00:00', 3, 1, 'no_file.png', 'kkkkkkkkk', 1),
(15, 'Rabab Mojahed Mansour Shalan', 'rabab111111@gmail.com', 0, 'Al-Rudah-Sana\'a', 0, 'no_file.png', 5000, '2019-01-10 21:00:00', 4, 1, 'no_file.png', 'helloooooooooooooo', 1),
(17, 'Rabab Mojahed Mansour Shalan', 'rabab01@gmail.com', 4444444, 'Al-Rudah-Sana\'a', 0, 'no_file.png', 22222, '2019-01-09 21:00:00', 4, 3, 'no_file.png', 'enough', 1);

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

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_phone`, `emp_address`, `emp_salary`, `emp_employ_date`) VALUES
(1, 'Rabab', 'rabab@gmail.com', 777001122, 'Al-Rudah-Sanaa', 800, '2019-01-13 15:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(12) NOT NULL,
  `p_name` varchar(150) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_phone` int(14) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_gender` tinyint(1) NOT NULL,
  `p_birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_email`, `p_phone`, `p_address`, `p_gender`, `p_birth_date`) VALUES
(1, 'ali', 'ali@gmail.com', 777777777, 'Sana\'a', 1, NULL),
(2, 'Rbab', 'rrr@gmail.com', 2147483647, 'Sana\'a', 1, NULL),
(3, 'yttttt', 'tttt@jkjj.ljlkjl', 98897008, 'Sana\'a', 1, NULL),
(4, 'Mohammed', 'mohammed@gmail.com', 85858585, 'Sana\'a', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `play_id` int(12) NOT NULL,
  `play_img1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`play_id`, `play_img1`) VALUES
(0, 'noimg.png');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `rec_id` int(12) NOT NULL,
  `rec_visit_id` int(12) NOT NULL,
  `rec_appt_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(12) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `c_id` int(12) NOT NULL,
  `s_description` text NOT NULL,
  `s_img` varchar(50) DEFAULT NULL,
  `s_emp_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_title`, `c_id`, `s_description`, `s_img`, `s_emp_id`) VALUES
(32, 'Eye examination', 0, '<p>The&nbsp;<strong>Hello World</strong>&nbsp;project is a time-honored tradition in computer programming. It is a simple exercise that gets you started when learning something new. Let&rsquo;s get started with GitHub!</p>\r\n\r\n<p>A&nbsp;<strong>repository</strong>&nbsp;is usually used to organize a single project. Repositories can contain folders and files, images, videos, spreadsheets, and data sets &ndash; anything your project needs. We recommend including a&nbsp;<em>README</em>, or a file with information about your project. GitHub makes it easy to add one at the same time you create your new repository.&nbsp;<em>It also offers other common options such as a license file</em></p>\r\n', 'yellow.png', 1),
(33, 'Drink of Water', 1, '<p>When you open a&nbsp;<em>pull request</em>, you&rsquo;re proposing your changes and requesting that someone review and pull in your contribution and merge them into their branch. Pull requests show&nbsp;<em>diffs</em>, or differences, of the content from both branches. The changes, additions, and subtractions are shown in green and red.</p>\r\n', 'wedding.jpg', 1),
(34, 'Eyes examination', 1, '<p>JavaScript is one of the&nbsp;<strong>3 languages</strong>&nbsp;all web developers&nbsp;<strong>must</strong>&nbsp;learn:</p>\r\n\r\n<p>&nbsp;&nbsp; 1.&nbsp;<strong>HTML</strong>&nbsp;to define the content of web pages</p>\r\n\r\n<p>&nbsp;&nbsp; 2.&nbsp;<strong>CSS</strong>&nbsp;to specify the layout of web pages</p>\r\n\r\n<p>&nbsp;&nbsp; 3.&nbsp;<strong>JavaScript</strong>&nbsp;to program the behavior of web pages</p>\r\n\r\n<p>Web pages are not the only place where JavaScript is used. Many desktop and server programs use JavaScript. Node.js is the best known. Some databases, like MongoDB and CouchDB, also use JavaScript as their programming language.</p>\r\n', 'yellow.png', 1),
(35, 'Nutrition', 0, '<p>JavaScript is one of the&nbsp;<strong>3 languages</strong>&nbsp;all web developers&nbsp;<strong>must</strong>&nbsp;learn.</p>\r\n', 'blue1.png', 1),
(36, 'Nutrition', 2, '<p>default column gutters for tighter and more compact layouts.</p>\r\n', 'b87519f01a62693119870a60e9e5c04f.png', 1),
(37, 'Skin and Winter', 2, '<p>This year is described with the winter is the coldest&nbsp;</p>\r\n', 'red1.png', 1),
(38, 'helloooo ', 2, '<p>kjldhklllllllllllll ;;;;;;;;;;;;;;;;;;;;; ooooooooooooooooooooo</p>\r\n', 'red1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE `specialty` (
  `specialty_id` int(12) NOT NULL,
  `specialty_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`specialty_id`, `specialty_name`) VALUES
(1, 'Dental');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(12) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_username`, `u_password`, `u_email`, `u_registered_date`) VALUES
(1, 'Rabab', '202cb962ac59075b964b07152d234b70', 'rabab.shaalan@gmail.com', '2019-01-12 13:34:37'),
(2, 'Rabab', '202cb962ac59075b964b07152d234b70', 'rabab.shaalan@gmail.com', '2019-01-12 13:57:30'),
(3, 'Rabab', '202cb962ac59075b964b07152d234b70', 'rabab.shaalan@gmail.com', '2019-01-12 13:57:58'),
(4, 'Rabab', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'rabab.shaalan@gmail.com', '2019-01-12 13:59:41'),
(5, 'Rabab', 'c20ad4d76fe97759aa27a0c99bff6710', 'rabab.shaalan@gmail.com', '2019-01-12 14:00:19'),
(6, 'Rabab', '6512bd43d9caa6e02c990b0a82652dca', 'rabab.shaalan@gmail.com', '2019-01-12 14:02:20'),
(7, 'Rabab', 'c20ad4d76fe97759aa27a0c99bff6710', 'rabab.shaalan@gmail.com', '2019-01-12 14:03:39'),
(8, 'Rabab', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'rabab.shaalan@gmail.com', '2019-01-12 14:05:33'),
(9, 'Rabab', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'rabab.shaalan@gmail.com', '2019-01-12 14:10:05'),
(10, 'Aisha', 'a381bedb5d4478053eb04be35f8798dd', 'aisha@gmail.com', '2019-01-12 16:18:31'),
(11, 'Rana', '90a1e95dba0d3d9c11e3f220cc4f7879', 'rana@gmail.com', '2019-01-24 13:45:26'),
(12, 'rawan', '3ba482ecb56ba605fb5dee188f44cfdd', 'rawan@gmail.com', '2019-01-24 18:17:21'),
(13, 'Jehan', '123    ', 'jehan@gmail.com', '2019-01-25 17:13:31'),
(14, 'Raja', '123', 'raja@gmail.com', '2019-01-25 17:18:39'),
(15, 'Raja', '123', 'raja@gmail.com', '2019-01-25 17:18:40'),
(16, 'Roqia', '123', 'roqia@gmail.com', '2019-01-25 19:01:15'),
(17, 'Enas', '123', 'enas@gmail.com', '2019-01-25 19:03:06'),
(18, 'Enas', '123', 'enas@gmail.com', '2019-01-25 19:03:17'),
(19, 'Nawal', '123', 'enas@gmail.com', '2019-01-25 19:04:14'),
(21, 'Rania', '123', 'rania@gmail.com', '2019-01-25 19:11:43'),
(22, 'Ali', 'ali', 'ali@gmail.com', '2019-01-25 20:13:35'),
(23, 'Ammar', 'ammar', 'ammar@gmail.com', '2019-01-25 20:13:35'),
(24, 'Ali', 'ali', 'ali@gmail.com', '2019-01-25 20:15:00'),
(25, 'Ammar', 'ammar', 'ammar@gmail.com', '2019-01-25 20:15:00'),
(26, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:36'),
(27, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:37'),
(28, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:37'),
(29, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:38'),
(30, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:38'),
(31, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:39'),
(32, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:41'),
(33, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:30:42'),
(34, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:32:10'),
(35, 'Ahmed', '123', 'ahmed@gmail.com', '2019-01-25 20:32:11'),
(36, 'Ahmed111', '123', 'ahmed1@gmail.com', '2019-01-25 20:33:00'),
(38, 'Mohammed', '123', 'mohammed@gmail.com', '2019-01-25 20:40:02'),
(39, 'Manar', '12352', 'manar@gmail.com', '2019-01-25 20:40:02'),
(40, 'Ibrahim', '144423', 'ibrahim@gmail.com', '2019-01-25 20:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `visit_id` int(12) NOT NULL,
  `v_diagnose` text NOT NULL,
  `v_treatment` varchar(200) NOT NULL,
  `v_visit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appt_id`),
  ADD KEY `appt_patient_id_fk` (`appt_patient_id`),
  ADD KEY `appt_doctor_id_fk` (`appt_doctor_id`),
  ADD KEY `appt_visit_id_fk` (`appt_visit_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

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
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_email` (`p_email`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`play_id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `rec_appt_id_fk` (`rec_appt_id`),
  ADD KEY `rec_visit_id_fk` (`rec_visit_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_emp_id_fk` (`s_emp_id`);

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
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appt_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `visit_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appt_doctor_id_fk` FOREIGN KEY (`appt_doctor_id`) REFERENCES `doctor` (`d_id`),
  ADD CONSTRAINT `appt_patient_id_fk` FOREIGN KEY (`appt_patient_id`) REFERENCES `patient` (`p_id`),
  ADD CONSTRAINT `appt_visit_id_fk` FOREIGN KEY (`appt_visit_id`) REFERENCES `visit` (`visit_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `d_specialty_id_fk` FOREIGN KEY (`d_specialty_id`) REFERENCES `specialty` (`specialty_id`) ON DELETE CASCADE;

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `rec_appt_id_fk` FOREIGN KEY (`rec_appt_id`) REFERENCES `appointment` (`appt_id`),
  ADD CONSTRAINT `rec_visit_id_fk` FOREIGN KEY (`rec_visit_id`) REFERENCES `visit` (`visit_id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `s_emp_id_fk` FOREIGN KEY (`s_emp_id`) REFERENCES `employee` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
