-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 07:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mss`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_announcements`
--

CREATE TABLE `tb_announcements` (
  `id` int(11) NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_announcements`
--

INSERT INTO `tb_announcements` (`id`, `posted_by`, `subject`, `message`, `post_date`) VALUES
(1, 'tt2136', 'lele', 'just a message!', '2019-07-25 15:47:58'),
(2, 'tt2136', 'NONONO', 'YESNO', '2019-07-25 15:49:47'),
(3, 'tt2136', 'Team Building', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. Nullam a dolor arcu, ac tempor elit. Donec', '2019-07-25 18:29:13'),
(4, 'tt2136', 'Sale', 'rhen markk reyes made a sale.', '2019-07-31 05:23:27'),
(5, 'tt2136', 'lele', '', '2019-08-04 16:19:56'),
(6, 'tt2136', 'rer', 'rere', '2019-08-04 16:23:08'),
(7, 'tt2136', 'wawa', 'wawa', '2019-08-04 16:24:15'),
(9, 'tt2136', 'erew', 'ewewe', '2019-08-04 16:27:28'),
(10, 'tt2136', 'tete', 'wiwiwiwd', '2019-08-04 16:33:36'),
(11, 'tt2136', 'wew', 'ewew', '2019-08-04 16:36:26'),
(12, 'tt2136', 'grgrg', 'efregr', '2019-08-04 16:36:42'),
(13, 'tt2136', 'wew', 'dsds', '2019-08-04 16:39:31'),
(14, 'tt2136', 'ew', 'ewewe', '2019-08-04 16:39:42'),
(16, 'tt2136', 'wew', 'ewe', '2019-08-04 16:41:44'),
(17, 'tt2136', 'dw', 'dwdw', '2019-08-04 16:50:18'),
(22, 'tt2136', 'Sample Announcement', 'Sample Message\r\n', '2019-08-04 17:27:47'),
(23, 'BO1234', 'Libre Donut', '<h2><b style=\"background-color: rgb(255, 255, 255);\">Libre ang donut!</b></h2><h6><span style=\"background-color: rgb(255, 255, 255);\">Sa darating na mga susunod na mga araw mayroong darating na package. at ang laman nito ay DONUTS!!!!</span></h6><h6><span style=\"font-family: &quot;Mercury SSm A&quot;, &quot;Mercury SSm B&quot;, Georgia, Times, &quot;Times New Roman&quot;, &quot;Microsoft YaHei New&quot;, &quot;Microsoft Yahei&quot;, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif; font-size: 26px; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></h6>', '2019-08-09 12:10:50'),
(24, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 11:15:41'),
(25, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 11:42:16'),
(26, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:12:21'),
(27, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:12:58'),
(28, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:13:00'),
(29, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:13:01'),
(30, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:13:03'),
(31, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:13:06'),
(32, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:13:07'),
(33, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:20:20'),
(34, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:20:23'),
(35, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:20:26'),
(36, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:20:27'),
(37, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:36:03'),
(38, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:40:07'),
(39, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:41:00'),
(40, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 13:46:14'),
(41, 'BO1234', 'Sale', 'Brendan Stephen S Odiver made a sale.', '2019-08-11 18:49:21'),
(42, 'al8633', 'Training for Financial Adviser', '<p>Dear Unit Managers,</p><p>There will be training on August 24-25, 2019 for the new policies that are coming so we can better discuss it to our customers.</p><p><br></p><p>Thank you so much!</p>', '2019-08-15 02:01:53'),
(43, 'al8633', 'Sale', 'Anice Nicole F Lucrida made a sale.', '2019-08-16 00:43:53'),
(44, 'al8633', 'Sale', 'Anice Nicole F Lucrida made a sale.', '2019-08-16 01:04:11'),
(45, 'al8633', 'Sale', 'Anice Nicole F Lucrida made a sale.', '2019-08-16 01:10:23'),
(46, 'al8633', 'Sale', 'Anice Nicole F Lucrida made a sale.', '2019-08-16 01:12:57'),
(47, 'al8633', 'Sale', 'Anice Nicole F Lucrida made a sale.', '2019-08-16 03:45:07'),
(48, 'al8633', 'meeting', '<p>friday 3:30pm</p>', '2019-08-16 03:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_applicants`
--

CREATE TABLE `tb_applicants` (
  `applicant_id` int(11) NOT NULL,
  `stage` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `applying_for` varchar(30) DEFAULT NULL,
  `resume` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `why_work` text NOT NULL,
  `date_of_application` date NOT NULL,
  `recruited_by_emp_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_branch`
--

CREATE TABLE `tb_branch` (
  `Branch_ID` int(9) NOT NULL,
  `Branch_Name` varchar(30) NOT NULL,
  `Branch_Head` varchar(100) NOT NULL,
  `Zone_No` int(9) NOT NULL,
  `Zone_Head` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_branch`
--

INSERT INTO `tb_branch` (`Branch_ID`, `Branch_Name`, `Branch_Head`, `Zone_No`, `Zone_Head`) VALUES
(1, 'Makati', 'Ariana Grande', 1, 'Anice Nicole Lucrida'),
(2, 'Pasig', 'Clarish Miguel', 3, 'Ren-ren Mark Reyes'),
(3, 'Manila', 'Afaman Lipasan', 2, 'Jan Patrick Sanchez'),
(4, 'Quezon City', 'Donna Bartolome', 4, 'Rossbell Chrislyn Ramos'),
(33, 'Mandaluyong', 'Flower Floreda', 4, 'Rossbell Chrislyn Ramos'),
(34, 'Cavite', 'Flower Floreda', 1, 'Anice Nicole Lucrida'),
(35, 'Rizal', 'Floriza Tonglaw', 3, 'Ren-ren Mark Reyes'),
(36, 'Paranaque', 'George Badita', 2, 'Jan Patrick Sanchez');

-- --------------------------------------------------------

--
-- Table structure for table `tb_commission`
--

CREATE TABLE `tb_commission` (
  `commission_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `policy_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `commission_amount` varchar(255) NOT NULL,
  `override_amount` varchar(255) NOT NULL,
  `date_expected` date NOT NULL,
  `employee_code` varchar(255) NOT NULL,
  `manager_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_commission`
--

INSERT INTO `tb_commission` (`commission_id`, `sales_id`, `policy_id`, `payment_method`, `commission_amount`, `override_amount`, `date_expected`, `employee_code`, `manager_code`) VALUES
(2, 2, 2, '', '33.333333333333', '', '2019-09-15', 'BO1234', ''),
(3, 3, 25, '', '34000', '', '2020-08-01', 'al8633', ''),
(4, 4, 4, '', '1875', '', '2019-12-29', 'al8633', ''),
(5, 5, 2, '', '833.33333333333', '', '2020-01-02', 'al8633', ''),
(6, 6, 18, '', '4500', '', '2020-02-01', 'al8633', ''),
(7, 7, 18, '', '2500', '', '2019-09-16', 'al8633', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee_branch`
--

CREATE TABLE `tb_employee_branch` (
  `Employee_Code` varchar(6) NOT NULL,
  `Zone_ID` int(11) DEFAULT NULL,
  `Branch_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee_branch`
--

INSERT INTO `tb_employee_branch` (`Employee_Code`, `Zone_ID`, `Branch_ID`) VALUES
('ja8634', 1, NULL),
('js3938', 1, NULL),
('js6670', 1, NULL),
('js7490', 1, NULL),
('tm2103', 1, NULL),
('tm7491', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee_status`
--

CREATE TABLE `tb_employee_status` (
  `Employee_Code` varchar(6) NOT NULL,
  `Status_ID` tinyint(4) NOT NULL,
  `Hire_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee_status`
--

INSERT INTO `tb_employee_status` (`Employee_Code`, `Status_ID`, `Hire_Date`, `End_Date`) VALUES
('ja8634', 0, NULL, NULL),
('js3938', 0, NULL, NULL),
('js6670', 0, NULL, NULL),
('js7490', 0, NULL, NULL),
('tm2103', 0, NULL, NULL),
('tm7491', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_logs`
--

CREATE TABLE `tb_logs` (
  `id` int(11) NOT NULL,
  `Employee_Code` varchar(6) NOT NULL,
  `action` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_logs`
--

INSERT INTO `tb_logs` (`id`, `Employee_Code`, `action`, `timestamp`, `description`) VALUES
(1, 'tt2136', 'Update', '2019-07-17 16:53:59', 'Employee rhen reyes markk was updated'),
(2, 'tt2136', 'Add', '2019-07-17 16:58:19', 'Employee Brendan Stephen  Odiver was added'),
(3, 'tt2136', 'Update', '2019-07-17 17:01:02', 'Employee Brendan Stephen Odiver Solmerano was updated'),
(4, 'tt2136', 'Delete', '2019-07-17 17:01:47', 'Employee Brendan Stephen Solmerano Odiver was deleted'),
(5, 'tt2136', 'Update', '2019-07-17 17:14:31', 'Policy Ambition X3434 was updated'),
(6, '', 'Update', '2019-07-17 17:14:52', 'Policy Ambition X3434 was updated'),
(7, 'tt2136', 'Update', '2019-07-17 17:16:24', 'Policy Ambition X was updated'),
(8, 'tt2136', 'Delete', '2019-07-17 17:26:00', 'Policy Health MaX Rider (Pay to 65: issue age 54) was deleted'),
(9, 'tt2136', 'Delete', '2019-07-17 17:39:35', 'Client Aldrin Alonzo was deleted'),
(10, 'tt2136', 'Login', '2019-07-25 13:05:16', 'This user logged in'),
(11, 'tt2136', 'Logout', '2019-07-25 14:05:56', 'This user logged out'),
(12, 'tt2136', 'Login', '2019-07-25 14:06:13', 'This user logged in'),
(13, 'tt2136', 'Logout', '2019-07-25 14:10:25', 'This user logged out'),
(14, 'tt2136', 'Login', '2019-07-25 14:10:43', 'This user logged in'),
(15, 'tt2136', 'Announcement', '2019-07-25 15:47:58', 'Posted an announcement'),
(16, 'tt2136', 'Announcement', '2019-07-25 15:49:47', 'Posted an announcement'),
(17, 'tt2136', 'Announcement', '2019-07-25 18:29:13', 'Posted an announcement'),
(18, 'tt2136', 'Announcement', '2019-07-25 19:48:57', 'Posted an announcement'),
(19, 'tt2136', 'Announcement', '2019-07-25 19:49:38', 'Posted an announcement'),
(20, 'tt2136', 'Announcement', '2019-07-25 19:49:59', 'Posted an announcement'),
(21, 'tt2136', 'Announcement', '2019-07-25 19:50:10', 'Posted an announcement'),
(22, 'tt2136', 'Announcement', '2019-07-25 19:50:31', 'Posted an announcement'),
(23, 'tt2136', 'Announcement', '2019-07-25 19:52:36', 'Posted an announcement'),
(24, '', 'Update', '2019-07-25 19:56:07', 'Announcement with the id of was updated'),
(25, 'tt2136', 'Update', '2019-07-25 19:57:25', 'Announcement with the id of2 was updated'),
(26, 'tt2136', 'Update', '2019-07-25 19:58:16', 'Announcement with the id of2 was updated'),
(27, 'tt2136', 'Update', '2019-07-25 19:59:06', 'Announcement with the id of2 was updated'),
(28, 'tt2136', 'Delete', '2019-07-25 20:06:59', 'Employee  was deleted'),
(29, 'tt2136', 'Delete', '2019-07-25 20:11:24', 'Announcement with the subject of wew was deleted'),
(30, 'tt2136', 'Delete', '2019-07-25 20:11:28', 'Announcement with the subject of wew was deleted'),
(31, 'tt2136', 'Delete', '2019-07-25 20:11:31', 'Announcement with the subject of wew was deleted'),
(32, 'tt2136', 'Delete', '2019-07-25 20:11:34', 'Announcement with the subject of wew was deleted'),
(33, 'tt2136', 'Delete', '2019-07-25 20:11:37', 'Announcement with the subject of wew was deleted'),
(34, 'tt2136', 'Delete', '2019-07-25 20:11:41', 'Announcement with the subject of wew was deleted'),
(35, 'tt2136', 'Logout', '2019-07-26 06:58:29', 'This user logged out'),
(36, 'tt2136', 'Login', '2019-07-26 07:34:29', '\r\n	OS: Windows 7<br>\r\n	Device: Computer<br>\r\n	Browser: Chrome<br>\r\n	Ip Address: ::1\r\n	'),
(37, 'tt2136', 'Logout', '2019-07-26 09:44:00', 'This user logged out'),
(38, 'tt2136', 'Login', '2019-07-26 10:00:45', '\r\n	OS: Windows 7<br>\r\n	Device: Computer<br>\r\n	Browser: Chrome<br>\r\n	Ip Address: ::1\r\n	'),
(39, 'tt2136', 'Logout', '2019-07-26 10:14:41', 'This user logged out'),
(40, 'tt2136', 'Login', '2019-07-26 10:46:19', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> ::1<br>\r\n	<b>Location: </b> Manila, , Philippines\r\n	'),
(41, 'tt2136', 'Logout', '2019-07-26 10:46:48', 'This user logged out'),
(42, 'tt2136', 'Login', '2019-07-26 10:52:47', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.138<br>\r\n	<b>Location: </b> Manila City, Metro Manila, Philippines\r\n	'),
(43, 'tt2136', 'Logout', '2019-07-26 10:56:09', 'This user logged out'),
(44, 'ga7943', 'Login', '2019-07-26 10:56:19', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.138<br>\r\n	<b>Location: </b> Manila City, Metro Manila, Philippines\r\n	'),
(45, 'ga7943', 'Logout', '2019-07-26 15:34:36', 'This user logged out'),
(46, 'tt2136', 'Login', '2019-07-26 15:34:53', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.138<br>\r\n	<b>Location: </b> Manila City, Metro Manila, Philippines\r\n	'),
(47, 'tt2136', 'Login', '2019-07-31 04:20:37', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.138<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(48, 'tt2136', 'Add', '2019-07-31 05:23:27', 'Client Brendan Stephen Odiver was added'),
(49, 'tt2136', 'Add', '2019-07-31 05:55:37', 'Employee Brendan Stephen  Odiver was added'),
(50, 'tt2136', 'Login', '2019-08-02 13:49:44', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(51, 'tt2136', 'Logout', '2019-08-02 14:41:47', 'This user logged out'),
(52, 'tt2136', 'Login', '2019-08-02 16:46:21', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(53, 'tt2136', 'Announcement', '2019-08-04 16:24:15', 'Posted an announcement'),
(54, 'tt2136', 'Announcement', '2019-08-04 16:26:46', 'Posted an announcement'),
(55, 'tt2136', 'Announcement', '2019-08-04 16:27:28', 'Posted an announcement'),
(56, 'tt2136', 'Announcement', '2019-08-04 16:33:36', 'Posted an announcement'),
(57, 'tt2136', 'Announcement', '2019-08-04 16:36:27', 'Posted an announcement'),
(58, 'tt2136', 'Announcement', '2019-08-04 16:36:42', 'Posted an announcement'),
(59, 'tt2136', 'Announcement', '2019-08-04 16:39:31', 'Posted an announcement'),
(60, 'tt2136', 'Announcement', '2019-08-04 16:39:42', 'Posted an announcement'),
(61, 'tt2136', 'Announcement', '2019-08-04 16:40:15', 'Posted an announcement'),
(62, 'tt2136', 'Announcement', '2019-08-04 16:41:44', 'Posted an announcement'),
(63, 'tt2136', 'Announcement', '2019-08-04 16:50:18', 'Posted an announcement'),
(64, 'tt2136', 'Announcement', '2019-08-04 16:58:47', 'Posted an announcement'),
(65, 'tt2136', 'Announcement', '2019-08-04 16:59:08', 'Posted an announcement'),
(66, 'tt2136', 'Announcement', '2019-08-04 17:05:07', 'Posted an announcement'),
(67, 'tt2136', 'Update', '2019-08-04 17:08:18', 'Announcement with the id of10 was updated'),
(68, 'tt2136', 'Announcement', '2019-08-04 17:27:02', 'Posted an announcement'),
(69, 'tt2136', 'Announcement', '2019-08-04 17:27:47', 'Posted an announcement'),
(70, 'tt2136', 'Announcement', '2019-08-04 17:28:20', 'Posted an announcement'),
(71, 'tt2136', 'Announcement', '2019-08-04 17:34:51', 'Posted an announcement'),
(72, 'tt2136', 'Announcement', '2019-08-04 17:35:29', 'Posted an announcement'),
(73, 'tt2136', 'Announcement', '2019-08-04 17:39:45', 'Posted an announcement'),
(74, 'tt2136', 'Announcement', '2019-08-04 17:41:14', 'Posted an announcement'),
(75, 'tt2136', 'Announcement', '2019-08-04 17:41:35', 'Posted an announcement'),
(76, 'tt2136', 'Announcement', '2019-08-04 17:42:07', 'Posted an announcement'),
(77, 'tt2136', 'Announcement', '2019-08-04 17:42:44', 'Posted an announcement'),
(78, 'tt2136', 'Announcement', '2019-08-04 17:43:44', 'Posted an announcement'),
(79, 'tt2136', 'Announcement', '2019-08-04 17:47:01', 'Posted an announcement'),
(80, 'tt2136', 'Announcement', '2019-08-04 17:47:54', 'Posted an announcement'),
(81, 'tt2136', 'Announcement', '2019-08-04 17:49:53', 'Posted an announcement'),
(82, 'tt2136', 'Announcement', '2019-08-04 17:50:11', 'Posted an announcement'),
(83, 'tt2136', 'Announcement', '2019-08-04 17:50:34', 'Posted an announcement'),
(84, 'tt2136', 'Announcement', '2019-08-04 18:20:52', 'Posted an announcement'),
(85, 'tt2136', 'Announcement', '2019-08-04 18:46:01', 'Posted an announcement'),
(86, 'tt2136', 'Announcement', '2019-08-04 18:46:33', 'Posted an announcement'),
(87, 'tt2136', 'Delete', '2019-08-05 07:07:26', 'Announcement with the subject of ohono was deleted'),
(88, 'tt2136', 'Delete', '2019-08-05 07:07:38', 'Announcement with the subject of dwda was deleted'),
(89, 'tt2136', 'Delete', '2019-08-05 07:08:15', 'Announcement with the subject of wdawd was deleted'),
(90, 'tt2136', 'Delete', '2019-08-05 07:08:23', 'Announcement with the subject of wdad was deleted'),
(91, 'tt2136', 'Delete', '2019-08-05 07:08:26', 'Announcement with the subject of dawd was deleted'),
(92, 'tt2136', 'Delete', '2019-08-05 07:08:43', 'Announcement with the subject of lolo mo bnaho was deleted'),
(93, 'tt2136', 'Update', '2019-08-05 07:41:22', 'Announcement with the id of 22 was updated'),
(94, 'tt2136', 'Update', '2019-08-05 07:42:15', 'Announcement with the id of 22 was updated'),
(95, 'tt2136', 'Update', '2019-08-05 07:42:32', 'Announcement with the id of  was updated'),
(96, 'tt2136', 'Update', '2019-08-05 07:42:52', 'Announcement with the id of  was updated'),
(97, 'tt2136', 'Update', '2019-08-05 07:43:26', 'Announcement with the id of 22 was updated'),
(98, 'tt2136', 'Update', '2019-08-05 07:44:14', 'Announcement with the id of 22 was updated'),
(99, 'tt2136', 'Update', '2019-08-05 07:44:41', 'Announcement with the id of 22 was updated'),
(100, 'tt2136', 'Update', '2019-08-05 07:45:03', 'Announcement with the id of 22 was updated'),
(101, 'tt2136', 'Update', '2019-08-05 07:51:41', 'Announcement with the id of 22 was updated'),
(102, 'tt2136', 'Update', '2019-08-05 07:52:19', 'Announcement with the id of 22 was updated'),
(103, 'tt2136', 'Update', '2019-08-05 07:52:25', 'Announcement with the id of 22 was updated'),
(104, 'tt2136', 'Update', '2019-08-05 07:55:20', 'Announcement with the id of 22 was updated'),
(105, 'tt2136', 'Update', '2019-08-05 07:57:05', 'Announcement with the id of  was updated'),
(106, 'tt2136', 'Update', '2019-08-05 07:57:18', 'Announcement with the id of  was updated'),
(107, 'tt2136', 'Update', '2019-08-05 07:57:29', 'Announcement with the id of  was updated'),
(108, 'tt2136', 'Update', '2019-08-05 07:57:44', 'Announcement with the id of  was updated'),
(109, 'tt2136', 'Update', '2019-08-05 07:58:28', 'Announcement with the id of  was updated'),
(110, 'tt2136', 'Update', '2019-08-05 08:00:35', 'Announcement with the id of  was updated'),
(111, 'tt2136', 'Update', '2019-08-05 08:03:29', 'Announcement with the id of  was updated'),
(112, 'tt2136', 'Update', '2019-08-05 08:05:23', 'Announcement with the id of  was updated'),
(113, 'tt2136', 'Update', '2019-08-05 08:05:46', 'Announcement with the id of 22 was updated'),
(114, 'tt2136', 'Update', '2019-08-05 08:08:30', 'Announcement with the id of 22 was updated'),
(115, 'tt2136', 'Update', '2019-08-05 08:08:53', 'Announcement with the id of 22 was updated'),
(116, 'tt2136', 'Update', '2019-08-05 08:09:08', 'Announcement with the id of 22 was updated'),
(117, 'tt2136', 'Update', '2019-08-05 08:09:35', 'Announcement with the id of 22 was updated'),
(118, 'tt2136', 'Update', '2019-08-05 08:10:09', 'Announcement with the id of 22 was updated'),
(119, 'tt2136', 'Delete', '2019-08-05 08:10:13', 'Announcement with the subject of toto was deleted'),
(120, 'tt2136', 'Update', '2019-08-05 08:10:19', 'Announcement with the id of 22 was updated'),
(121, 'tt2136', 'Delete', '2019-08-05 08:10:48', 'Announcement with the subject of tete was deleted'),
(122, 'tt2136', 'Delete', '2019-08-05 08:11:02', 'Announcement with the subject of dwd was deleted'),
(123, 'tt2136', 'Update', '2019-08-05 08:21:32', 'Announcement with the id of 22 was updated'),
(124, 'tt2136', 'Logout', '2019-08-05 08:30:17', 'This user logged out'),
(125, '', 'Logout', '2019-08-05 08:30:48', 'This user logged out'),
(126, '', 'Login', '2019-08-05 08:33:58', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(127, '', 'Login', '2019-08-05 08:34:10', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(128, '', 'Login', '2019-08-05 08:34:52', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(129, 'tt2136', 'Logout', '2019-08-05 08:37:42', 'This user logged out'),
(130, '', 'Login', '2019-08-05 08:42:53', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(131, 'tt2136', 'Update', '2019-08-05 10:01:31', 'Announcement with the id of 22 was updated'),
(132, 'tt2136', 'Delete', '2019-08-05 10:01:50', 'Announcement with the subject of Stephen is [pgi was deleted'),
(133, 'tt2136', 'Update', '2019-08-06 16:07:39', 'Announcement with the id of 22 was updated'),
(134, '', 'Login', '2019-08-07 10:40:27', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(135, '', 'Login', '2019-08-07 10:40:42', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(136, 'tt2136', 'Logout', '2019-08-07 10:40:49', 'This user logged out'),
(137, '', 'Login', '2019-08-07 10:41:03', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(138, '', 'Login', '2019-08-07 10:50:38', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.166<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(139, 'tt2136', 'Delete', '2019-08-07 10:53:18', 'Announcement with the subject of  was deleted'),
(140, '', 'Login', '2019-08-08 14:26:40', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(141, 'step', 'Login', '2019-08-08 15:36:44', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(142, 'step', 'Logout', '2019-08-09 07:59:06', 'This user logged out'),
(143, 'BO1234', 'Login', '2019-08-09 07:59:30', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(144, '', 'Login', '2019-08-09 08:10:01', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(145, 'BO1234', 'Update', '2019-08-09 10:37:39', 'Employee with the employee code: BO1234 was updated'),
(146, 'BO1234', 'Update', '2019-08-09 10:37:49', 'Employee with the employee code: BO1234 was updated'),
(147, 'BO1234', 'Update', '2019-08-09 10:37:54', 'Employee with the employee code: BO1234 was updated'),
(148, 'BO1234', 'Update', '2019-08-09 10:38:05', 'Employee with the employee code: BO1234 was updated'),
(149, 'BO1234', 'Update', '2019-08-09 10:38:11', 'Employee with the employee code: BO1234 was updated'),
(150, 'BO1234', 'Update', '2019-08-09 10:38:37', 'Employee with the employee code: BO1234 was updated'),
(151, 'BO1234', 'Update', '2019-08-09 10:40:42', 'Employee with the employee code: BO1234 was updated'),
(152, 'BO1234', 'Update', '2019-08-09 10:40:47', 'Employee with the employee code: BO1234 was updated'),
(153, 'BO1234', 'Update', '2019-08-09 11:06:00', 'Employee with the employee code: rr5661 was updated'),
(154, 'BO1234', 'Update', '2019-08-09 11:06:22', 'Employee with the employee code: rr5661 was updated'),
(155, 'BO1234', 'Update', '2019-08-09 11:06:35', 'Employee with the employee code: step was updated'),
(156, 'BO1234', 'Delete', '2019-08-09 11:13:17', 'Employee with the employee code: <b>bb1234</b> was deleted'),
(157, 'BO1234', 'Update', '2019-08-09 11:13:36', 'Employee with the employee code: rr5661 was updated'),
(158, 'BO1234', 'Update', '2019-08-09 11:16:38', 'Employee with the employee code: <b>BO1234</b> was updated'),
(159, 'BO1234', 'Registration', '2019-08-09 11:20:00', 'Employee with the employee code: <b>BO1577</b> has been registered'),
(160, 'BO1234', 'Delete', '2019-08-09 11:20:37', 'Employee with the employee code: <b>BO1577</b> was deleted'),
(161, 'BO1234', 'Announcement', '2019-08-09 12:10:51', 'Posted an announcement'),
(162, 'BO1234', 'Announcement', '2019-08-09 12:57:17', 'Posted an announcement'),
(163, 'BO1234', 'Delete', '2019-08-09 12:57:27', 'Announcement with the subject of wdawd was deleted'),
(164, '', 'Login', '2019-08-09 15:25:42', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b>  City, , \r\n	'),
(165, 'BO1234', 'Update', '2019-08-09 16:07:48', 'Branch <b>Calamba</b> was updated'),
(166, 'BO1234', 'Update', '2019-08-09 16:07:52', 'Branch <b>Calamba</b> was updated'),
(167, 'BO1234', 'Update', '2019-08-09 16:07:55', 'Branch <b>Calamba</b> was updated'),
(168, 'BO1234', 'Update', '2019-08-09 16:08:31', 'Branch <b>Calamba</b> was updated'),
(169, 'BO1234', 'Update', '2019-08-09 16:08:37', 'Branch <b>Cavite</b> was updated'),
(170, 'BO1234', 'Add', '2019-08-09 16:27:46', 'Branch <b>Binangonan</b> was added.'),
(171, 'BO1234', 'Delete', '2019-08-09 16:30:56', 'Branch: <b>Binangonan</b> was deleted'),
(172, 'BO1234', 'Logout', '2019-08-09 17:05:51', 'This user logged out'),
(173, '', 'Login', '2019-08-09 17:06:00', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(174, 'BO1234', 'Logout', '2019-08-09 17:40:00', 'This user logged out'),
(175, '', 'Login', '2019-08-09 17:40:08', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(176, 'BO1234', 'Update', '2019-08-09 17:47:00', 'Employee with the employee code: <b>BO1234</b> was updated'),
(177, 'BO1234', 'Update', '2019-08-09 17:47:47', 'Employee with the employee code: <b>BO1234</b> was updated'),
(178, 'BO1234', 'Update', '2019-08-09 18:08:11', 'Employee with the employee code: <b></b> was updated'),
(179, 'BO1234', 'Update', '2019-08-09 18:09:23', 'Employee with the employee code: <b></b> was updated'),
(180, 'BO1234', 'Update', '2019-08-09 18:09:45', 'Employee with the employee code: <b></b> was updated'),
(181, 'BO1234', 'Update', '2019-08-09 18:23:30', 'Employee with the employee code: <b>BO1234</b> was updated'),
(182, 'BO1234', 'Update', '2019-08-09 18:24:00', 'Employee with the employee code: <b>BO1234</b> was updated'),
(183, 'BO1234', 'Update', '2019-08-09 18:24:03', 'Employee with the employee code: <b>BO1234</b> was updated'),
(184, 'BO1234', 'Update', '2019-08-09 18:24:05', 'Employee with the employee code: <b>BO1234</b> was updated'),
(185, 'BO1234', 'Update', '2019-08-09 18:24:07', 'Employee with the employee code: <b>BO1234</b> was updated'),
(186, 'BO1234', 'Update', '2019-08-09 18:24:12', 'Employee with the employee code: <b>BO1234</b> was updated'),
(187, 'BO1234', 'Update', '2019-08-09 18:40:53', 'Employee with the employee code: <b>BO1234</b> was updated'),
(188, 'BO1234', 'Update', '2019-08-09 18:40:58', 'Employee with the employee code: <b>BO1234</b> was updated'),
(189, 'BO1234', 'Update', '2019-08-09 18:41:02', 'Employee with the employee code: <b>BO1234</b> was updated'),
(190, '', 'Login', '2019-08-10 06:58:09', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(191, 'BO1234', 'Registration', '2019-08-10 10:03:56', 'Applicant: <b>Brendan Stephen S Odiver</b> has been registered'),
(192, 'BO1234', 'Registration', '2019-08-10 10:04:09', 'Applicant: <b>Brendan Stephen S Odiver</b> has been registered'),
(193, 'BO1234', 'Registration', '2019-08-10 10:04:19', 'Applicant: <b>Brendan Stephen S Odiver</b> has been registered'),
(194, 'BO1234', 'Registration', '2019-08-10 10:25:49', 'Applicant: <b>Brendan Stephen S Odiver</b> has been registered'),
(195, 'BO1234', 'Update', '2019-08-10 15:37:58', 'Applicant with id: <b>94827838</b> was updated'),
(196, 'BO1234', 'Update', '2019-08-10 15:38:32', 'Applicant with id: <b>94827838</b> was updated'),
(197, 'BO1234', 'Update', '2019-08-10 15:38:49', 'Applicant with id: <b>94827838</b> was updated'),
(198, 'BO1234', 'Update', '2019-08-10 15:43:01', 'Applicant with id: <b>94827838</b> was updated'),
(199, 'BO1234', 'Update', '2019-08-10 15:43:16', 'Applicant with id: <b>94827838</b> was updated'),
(200, 'BO1234', 'Update', '2019-08-10 15:43:21', 'Applicant with id: <b>94827838</b> was updated'),
(201, 'BO1234', 'Update', '2019-08-10 15:43:25', 'Applicant with id: <b>94827838</b> was updated'),
(202, 'BO1234', 'Update', '2019-08-10 15:43:35', 'Applicant with id: <b>94827838</b> was updated'),
(203, 'BO1234', 'Update', '2019-08-10 15:47:17', 'Applicant with id: <b>94827838</b> was updated'),
(204, 'BO1234', 'Update', '2019-08-10 15:47:27', 'Applicant with id: <b>94827838</b> was updated'),
(205, 'BO1234', 'Update', '2019-08-10 15:47:39', 'Applicant with id: <b>94827838</b> was updated'),
(206, 'BO1234', 'Delete', '2019-08-10 15:51:40', 'Applicant: <b>Brendan Stephen S Odiver</b> was deleted'),
(207, 'BO1234', 'Add', '2019-08-10 16:55:18', 'Branch <b></b> was added.'),
(208, 'BO1234', 'Add', '2019-08-10 16:55:53', 'Policy <b>Lele Policy</b> was added.'),
(209, 'BO1234', 'Add', '2019-08-10 16:56:15', 'Policy <b>Lele Policy</b> was added.'),
(210, 'BO1234', 'Delete', '2019-08-10 16:56:29', 'Branch: <b></b> was deleted'),
(211, 'BO1234', 'Delete', '2019-08-10 16:58:30', 'Policy: <b></b> was deleted'),
(212, 'BO1234', 'Delete', '2019-08-10 16:58:44', 'Policy: <b></b> was deleted'),
(213, 'BO1234', 'Add', '2019-08-10 17:07:39', 'Policy <b>Ambition X</b> was added.'),
(214, 'BO1234', 'Add', '2019-08-10 17:08:41', 'Policy <b>Ambition X</b> was added.'),
(215, 'BO1234', 'Update', '2019-08-10 17:14:35', 'Policy <b>Ambition X</b> was updated'),
(216, 'BO1234', 'Update', '2019-08-10 17:14:44', 'Policy <b>Ambition X</b> was updated'),
(217, 'BO1234', 'Delete', '2019-08-10 17:14:47', 'Policy: <b>Ambition X</b> was deleted'),
(218, 'BO1234', 'Add', '2019-08-10 17:20:33', 'Policy <b>Lele Policy</b> was added.'),
(219, 'BO1234', 'Delete', '2019-08-10 17:28:38', 'Policy: <b>Lele Policy</b> was deleted'),
(220, 'BO1234', 'Logout', '2019-08-10 17:39:22', 'This user logged out'),
(221, '', 'Login', '2019-08-10 17:39:34', '\r\n	<b>OS:</b> Windows 7<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.8<br>\r\n	<b>Location: </b> Mandaluyong City City, Metro Manila, Philippines\r\n	'),
(222, 'BO1234', 'Add', '2019-08-11 11:15:41', 'Client: <b>red Odiver</b> has been added'),
(223, 'BO1234', 'Add', '2019-08-11 11:42:15', 'Client: <b>Axel BUngal</b> has been added'),
(224, 'BO1234', 'Add', '2019-08-11 13:12:21', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(225, 'BO1234', 'Add', '2019-08-11 13:12:58', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(226, 'BO1234', 'Add', '2019-08-11 13:13:00', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(227, 'BO1234', 'Add', '2019-08-11 13:13:01', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(228, 'BO1234', 'Add', '2019-08-11 13:13:03', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(229, 'BO1234', 'Add', '2019-08-11 13:13:06', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(230, 'BO1234', 'Add', '2019-08-11 13:13:07', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(231, 'BO1234', 'Add', '2019-08-11 13:20:20', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(232, 'BO1234', 'Add', '2019-08-11 13:20:23', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(233, 'BO1234', 'Add', '2019-08-11 13:20:26', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(234, 'BO1234', 'Add', '2019-08-11 13:20:27', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(235, 'BO1234', 'Add', '2019-08-11 13:36:03', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(236, 'BO1234', 'Add', '2019-08-11 13:40:07', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(237, 'BO1234', 'Add', '2019-08-11 13:41:00', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(238, 'BO1234', 'Add', '2019-08-11 13:46:14', 'Client: <b>Brendan Stephen Odiver</b> has been added'),
(239, 'BO1234', 'Registration', '2019-08-11 17:07:53', 'Applicant: <b>Carl Justin E Yanuario</b> has been registered'),
(240, 'BO1234', 'Update', '2019-08-11 17:09:06', 'Applicant with id: <b>94827835</b> was updated'),
(241, 'BO1234', 'Add', '2019-08-11 18:49:20', 'Client: <b>Kathleen Joyce Tamares</b> has been added'),
(242, 'BO1234', 'Update', '2019-08-11 19:20:37', 'Client: <b>Kathleen Joyce Tamares</b> was updated'),
(243, 'BO1234', 'Update', '2019-08-11 19:20:53', 'Client: <b>Brendan Stephen Odiver</b> was updated'),
(244, 'BO1234', 'Update', '2019-08-11 19:27:13', 'A sale for: <b>Brendan Stephen Odiver</b> was updated'),
(245, 'BO1234', 'Delete', '2019-08-11 19:29:42', 'A sale for: <b>Brendan Stephen Odiver</b> sold by: <b>BO1234</b> was deleted'),
(246, 'BO1234', 'Update', '2019-08-11 19:33:55', 'Applicant with id: <b>94827835</b> was updated'),
(247, 'BO1234', 'Delete', '2019-08-11 19:43:37', 'Branch: <b></b> was deleted'),
(248, 'BO1234', 'Update', '2019-08-11 20:00:51', 'Employee with the employee code: <b>BO1234</b> was updated'),
(249, 'BO1234', 'Update', '2019-08-11 20:01:00', 'Employee with the employee code: <b>BO1234</b> was updated'),
(250, 'BO1234', 'Update', '2019-08-11 20:01:06', 'Employee with the employee code: <b>BO1234</b> was updated'),
(251, '', 'Login', '2019-08-12 06:59:07', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(252, '', 'Login', '2019-08-12 07:00:08', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(253, '', 'Login', '2019-08-12 07:00:28', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(254, '', 'Login', '2019-08-12 07:00:43', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(255, '', 'Login', '2019-08-12 07:20:11', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(256, 'r', 'Login', '2019-08-12 07:22:16', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(257, 'r', 'Login', '2019-08-12 07:22:33', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(258, '', 'Login', '2019-08-12 07:23:38', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(259, 'rr3184', 'Login', '2019-08-12 07:27:44', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(260, 'rr3184', 'Logout', '2019-08-12 07:28:50', 'This user logged out'),
(261, 'rr3184', 'Login', '2019-08-12 07:30:13', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(262, 'rr3184', 'Delete', '2019-08-12 07:31:02', 'Employee with the employee code: <b>BO1234</b> was deleted'),
(263, 'rr3184', 'Logout', '2019-08-12 07:35:48', 'This user logged out'),
(264, 'ga7943', 'Login', '2019-08-12 07:36:01', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(265, 'ga7943', 'Logout', '2019-08-12 07:38:01', 'This user logged out'),
(266, 'rr3184', 'Login', '2019-08-12 14:18:10', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(267, 'rr3184', 'Login', '2019-08-13 01:25:49', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(268, 'ga7943', 'Login', '2019-08-13 01:26:19', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(269, 'ga7943', 'Login', '2019-08-13 01:26:48', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(270, 'ga7943', 'Login', '2019-08-13 01:27:41', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(271, 'rr3184', 'Login', '2019-08-13 01:28:23', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.165.44<br>\r\n	<b>Location: </b> Consolacion City, Central Visayas, Philippines\r\n	'),
(272, 'rr3184', 'Registration', '2019-08-13 01:30:12', 'Employee with the employee code: <b>JS1601</b> has been registered'),
(273, 'rr3184', 'Registration', '2019-08-13 01:30:28', 'Employee with the employee code: <b></b> has been registered'),
(274, 'rr3184', 'Logout', '2019-08-13 01:32:42', 'This user logged out'),
(275, 'rr3184', 'Login', '2019-08-13 01:32:55', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.165.44<br>\r\n	<b>Location: </b> Consolacion City, Central Visayas, Philippines\r\n	'),
(276, 'rr3184', 'Login', '2019-08-13 02:12:53', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.165.44<br>\r\n	<b>Location: </b> Consolacion City, Central Visayas, Philippines\r\n	'),
(277, 'rr3184', 'Logout', '2019-08-13 02:13:18', 'This user logged out'),
(278, 'ga7943', 'Login', '2019-08-13 02:14:37', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.165.44<br>\r\n	<b>Location: </b> Consolacion City, Central Visayas, Philippines\r\n	'),
(279, 'ga7943', 'Login', '2019-08-13 02:17:05', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.165.44<br>\r\n	<b>Location: </b> Consolacion City, Central Visayas, Philippines\r\n	'),
(280, 'ga7943', 'Logout', '2019-08-13 02:18:27', 'This user logged out'),
(281, 'ga7943', 'Login', '2019-08-13 02:18:43', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.165.44<br>\r\n	<b>Location: </b> Consolacion City, Central Visayas, Philippines\r\n	'),
(282, 'ga7943', 'Login', '2019-08-15 01:19:07', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(283, 'ga7943', 'Logout', '2019-08-15 01:37:35', 'This user logged out'),
(284, 'tt2136', 'Login', '2019-08-15 01:37:45', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(285, 'tt2136', 'Logout', '2019-08-15 01:56:27', 'This user logged out'),
(286, 'al8633', 'Login', '2019-08-15 01:57:11', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(287, 'al8633', 'Announcement', '2019-08-15 02:01:54', 'Posted an announcement'),
(288, 'al8633', 'Registration', '2019-08-15 02:04:37', 'Applicant: <b>Jan Patrick N Sanchez</b> has been registered'),
(289, 'al8633', 'Registration', '2019-08-15 02:51:06', 'Employee with the employee code: <b>JS8699</b> has been registered'),
(290, 'al8633', 'Login', '2019-08-15 03:19:20', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.29.116.186<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(291, 'al8633', 'Registration', '2019-08-15 03:25:54', 'Employee with the employee code: <b>TT7837</b> has been registered'),
(292, 'al8633', 'Registration', '2019-08-15 05:42:13', 'Employee with the employee code: <b>JS2964</b> has been registered'),
(293, 'al8633', 'Registration', '2019-08-15 05:43:33', 'Employee with the employee code: <b>RR6406</b> has been registered'),
(294, 'al8633', 'Registration', '2019-08-15 05:44:50', 'Employee with the employee code: <b>RR9947</b> has been registered'),
(295, 'al8633', 'Update', '2019-08-15 05:56:02', 'Branch <b>Mandaluyong</b> was updated'),
(296, 'al8633', 'Update', '2019-08-15 05:57:07', 'Branch <b>Cavite</b> was updated'),
(297, 'al8633', 'Update', '2019-08-15 05:57:12', 'Branch <b>Calamba</b> was updated'),
(298, 'al8633', 'Add', '2019-08-15 05:57:34', 'Branch <b>Cavite</b> was added.'),
(299, 'al8633', 'Update', '2019-08-15 05:57:56', 'Branch <b>Marikina</b> was updated'),
(300, 'al8633', 'Update', '2019-08-15 05:58:05', 'Branch <b>Taytay</b> was updated'),
(301, 'al8633', 'Login', '2019-08-15 14:04:04', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.28.22.14<br>\r\n	<b>Location: </b> Makati City City, National Capital Region, Philippines\r\n	'),
(302, 'al8633', 'Logout', '2019-08-15 14:04:42', 'This user logged out'),
(303, '', 'Logout', '2019-08-15 14:04:42', 'This user logged out'),
(304, 'JS2964', 'Login', '2019-08-15 14:04:58', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.28.22.14<br>\r\n	<b>Location: </b> Makati City City, National Capital Region, Philippines\r\n	'),
(305, 'JS2964', 'Registration', '2019-08-15 14:09:18', 'Applicant: <b>Annelia H Andres</b> has been registered'),
(306, 'JS2964', 'Update', '2019-08-15 14:19:42', 'Applicant with id: <b>94827837</b> was updated'),
(307, 'JS2964', 'Login', '2019-08-15 14:31:18', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 120.28.22.14<br>\r\n	<b>Location: </b> Makati City City, National Capital Region, Philippines\r\n	'),
(308, 'al8633', 'Login', '2019-08-16 00:41:31', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.193.118<br>\r\n	<b>Location: </b> Batangas City, Calabarzon, Philippines\r\n	'),
(309, 'al8633', 'Add', '2019-08-16 00:43:53', 'Client: <b>Gordon Ramsay</b> has been added'),
(310, 'al8633', 'Update', '2019-08-16 00:50:19', 'Branch <b>Makati</b> was updated'),
(311, 'al8633', 'Update', '2019-08-16 00:50:34', 'Branch <b>Makati</b> was updated'),
(312, 'al8633', 'Update', '2019-08-16 00:50:42', 'Branch <b>Manila</b> was updated'),
(313, 'al8633', 'Update', '2019-08-16 00:50:53', 'Branch <b>Manila</b> was updated'),
(314, 'al8633', 'Update', '2019-08-16 00:51:08', 'Branch <b>Pasig</b> was updated'),
(315, 'al8633', 'Update', '2019-08-16 00:51:24', 'Branch <b>Quezon City</b> was updated'),
(316, 'al8633', 'Add', '2019-08-16 00:51:43', 'Branch <b>Cavite</b> was added.'),
(317, 'al8633', 'Add', '2019-08-16 00:51:43', 'Branch <b>Cavite</b> was added.'),
(318, 'al8633', 'Update', '2019-08-16 00:51:57', 'Branch <b>Mandaluyong</b> was updated'),
(319, 'al8633', 'Update', '2019-08-16 00:52:13', 'Branch <b>Mandaluyong</b> was updated'),
(320, 'al8633', 'Update', '2019-08-16 00:52:19', 'Branch <b>Mandaluyong</b> was updated'),
(321, 'al8633', 'Add', '2019-08-16 00:52:54', 'Branch <b>Rizal</b> was added.'),
(322, 'al8633', 'Add', '2019-08-16 00:53:18', 'Branch <b>Paranaque</b> was added.'),
(323, 'al8633', 'Add', '2019-08-16 00:53:18', 'Branch <b>Paranaque</b> was added.'),
(324, 'al8633', 'Delete', '2019-08-16 00:53:29', 'Branch: <b>Paranaque</b> was deleted'),
(325, 'al8633', 'Registration', '2019-08-16 00:56:20', 'Applicant: <b>Peppa P Pig</b> has been registered'),
(326, 'al8633', 'Registration', '2019-08-16 00:57:40', 'Applicant: <b>Zion X Lucas</b> has been registered'),
(327, 'al8633', 'Logout', '2019-08-16 00:59:05', 'This user logged out'),
(328, '', 'Logout', '2019-08-16 00:59:06', 'This user logged out'),
(329, 'al8633', 'Login', '2019-08-16 01:00:33', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 110.54.193.118<br>\r\n	<b>Location: </b> Batangas City, Calabarzon, Philippines\r\n	'),
(330, 'al8633', 'Add', '2019-08-16 01:04:11', 'Client: <b>jason Sila</b> has been added'),
(331, 'al8633', 'Add', '2019-08-16 01:10:23', 'Client: <b>Mark Malabon</b> has been added'),
(332, 'al8633', 'Add', '2019-08-16 01:12:57', 'Client: <b>Meranda Rose Miamor</b> has been added'),
(333, 'al8633', 'Add', '2019-08-16 03:45:07', 'Client: <b>Juan Dela Cruz</b> has been added'),
(334, 'al8633', 'Announcement', '2019-08-16 03:56:31', 'Posted an announcement'),
(335, 'bo1234', 'Login', '2019-08-19 13:45:38', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.241<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(336, 'bo1234', 'Login', '2019-08-29 14:09:32', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(337, 'bo1234', 'Login', '2019-08-29 14:37:17', '\r\n	<b>OS:</b> Unknown OS Platform<br>\r\n	<b>Device:</b> SYSTEM<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(338, 'bo1234', 'Logout', '2019-08-29 14:51:56', 'This user logged out'),
(339, 'bo1234', 'Login', '2019-08-29 14:53:08', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(340, 'bo1234', 'Login', '2019-08-29 14:53:10', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(341, 'bo1234', 'Login', '2019-08-29 14:53:14', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(342, 'bo1234', 'Logout', '2019-08-29 15:51:54', 'This user logged out'),
(343, 'bo1234', 'Login', '2019-08-29 16:07:53', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(344, 'bo1234', 'Logout', '2019-08-29 16:13:44', 'This user logged out'),
(345, 'bo1234', 'Login', '2019-08-29 16:15:55', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(346, 'bo1234', 'Update', '2019-08-29 16:27:33', 'Employee with the employee code: <b>bo1234</b> was updated'),
(347, 'bo1234', 'Logout', '2019-08-29 16:27:39', 'This user logged out'),
(348, 'bo1234', 'Login', '2019-08-29 16:27:58', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.65<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(349, 'bo1234', 'Update', '2019-08-29 16:28:48', 'Employee with the employee code: <b>bo1234</b> was updated'),
(350, 'bo1234', 'Update', '2019-08-29 16:29:15', 'Employee with the employee code: <b>bo1234</b> was updated'),
(351, 'bo1234', 'Update', '2019-08-29 16:29:21', 'Employee with the employee code: <b>bo1234</b> was updated'),
(352, 'bo1234', 'Update', '2019-08-29 16:29:28', 'Employee with the employee code: <b>bo1234</b> was updated'),
(353, 'bo1234', 'Update', '2019-08-29 16:32:19', 'Employee with the employee code: <b>ag9640</b> was updated'),
(354, 'bo1234', 'Update', '2019-08-29 16:32:22', 'Employee with the employee code: <b>ag9640</b> was updated'),
(355, 'bo1234', 'Update', '2019-08-29 16:32:24', 'Employee with the employee code: <b>ag9640</b> was updated'),
(356, 'bo1234', 'Update', '2019-08-29 16:32:25', 'Employee with the employee code: <b>ag9640</b> was updated'),
(357, 'bo1234', 'Update', '2019-08-29 16:32:44', 'Employee with the employee code: <b>ag9640</b> was updated'),
(358, 'bo1234', 'Update', '2019-08-29 16:34:13', 'Employee with the employee code: <b>ag9640</b> was updated'),
(359, 'bo1234', 'Update', '2019-09-01 12:18:05', 'Applicant with id: <b>94827835</b> was updated'),
(360, 'bo1234', 'Update', '2019-09-01 12:18:11', 'Applicant with id: <b>94827836</b> was updated'),
(361, 'bo1234', 'Update', '2019-09-01 12:18:17', 'Applicant with id: <b>94827837</b> was updated'),
(362, 'bo1234', 'Update', '2019-09-01 12:18:34', 'Applicant with id: <b>94827837</b> was updated'),
(363, 'bo1234', 'Update', '2019-09-01 12:19:07', 'Applicant with id: <b>94827839</b> was updated'),
(364, 'bo1234', 'Update', '2019-09-01 12:19:23', 'Applicant with id: <b>94827839</b> was updated'),
(365, 'bo1234', 'Update', '2019-09-01 12:34:58', 'Applicant with id: <b>94827839</b> was updated'),
(366, 'bo1234', 'Logout', '2019-09-06 14:46:00', 'This user logged out'),
(367, 'bo1234', 'Login', '2019-09-06 15:01:06', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 61.9.101.200<br>\r\n	<b>Location: </b> Quezon City, Calabarzon, Philippines\r\n	'),
(368, 'bo1234', 'Logout', '2019-09-06 15:05:42', 'This user logged out'),
(369, 'bo1234', 'Login', '2019-09-06 15:05:50', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 61.9.101.200<br>\r\n	<b>Location: </b> Quezon City, Calabarzon, Philippines\r\n	'),
(370, 'bo1234', 'Logout', '2019-09-06 15:06:16', 'This user logged out'),
(371, 'bo1234', 'Login', '2019-09-06 15:07:13', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 61.9.101.200<br>\r\n	<b>Location: </b> Quezon City, Calabarzon, Philippines\r\n	'),
(372, 'bo1234', 'Logout', '2019-09-06 15:15:59', 'This user logged out'),
(373, 'bo1234', 'Login', '2019-09-06 15:17:23', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(374, 'bo1234', 'Login', '2019-09-06 15:17:34', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(375, 'bo1234', 'Login', '2019-09-06 15:17:43', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(376, 'bo1234', 'Login', '2019-09-06 15:18:26', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(377, 'bo1234', 'Logout', '2019-09-06 16:02:23', 'This user logged out'),
(378, 'bo1234', 'Login', '2019-09-06 16:02:40', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(379, 'bo1234', 'Login', '2019-09-06 16:42:31', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(380, 'bo1234', 'Login', '2019-09-06 16:42:34', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(381, 'bo1234', 'Login', '2019-09-06 16:42:35', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> <br>\r\n	<b>Location: </b>  City, , \r\n	'),
(382, 'bo1234', 'Logout', '2019-09-06 17:09:42', 'This user logged out'),
(383, 'bo1234', 'Login', '2019-09-06 17:10:01', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.224.64<br>\r\n	<b>Location: </b> Quezon City City, Metro Manila, Philippines\r\n	'),
(384, 'bo1234', 'Logout', '2019-09-07 05:17:14', 'This user logged out'),
(385, 'bo1234', 'Login', '2019-09-07 05:17:23', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.146<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(386, 'bo1234', 'Update', '2019-09-07 05:17:48', 'Employee with the employee code: <b>bo1234</b> was updated'),
(387, 'bo1234', 'Logout', '2019-09-07 05:17:53', 'This user logged out'),
(388, 'bo1234', 'Login', '2019-09-07 05:17:59', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.146<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(389, 'bo1234', 'Login', '2019-09-09 10:56:29', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.1<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(390, 'bo1234', 'Registration', '2019-09-09 11:18:51', 'Applicant: <b>Brendan Stephen S Odiver</b> has been registered'),
(391, 'bo1234', 'Logout', '2019-09-10 06:44:18', 'This user logged out'),
(392, 'bo1234', 'Login', '2019-09-10 06:45:15', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.1<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(393, 'bo1234', 'Logout', '2019-09-10 06:46:43', 'This user logged out'),
(394, 'N/A', 'Registration', '2019-09-10 06:48:05', 'Applicant: <b>Axel S Odiver</b> has been registered'),
(395, 'bo1234', 'Login', '2019-09-10 06:48:14', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.1<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(396, 'bo1234', 'Logout', '2019-09-10 06:50:00', 'This user logged out'),
(397, 'N/A', 'Registration', '2019-09-10 06:50:47', 'Applicant: <b>Axel S Odiver</b> applied for Progrunner'),
(398, 'bo1234', 'Login', '2019-09-10 06:50:55', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.1<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(399, 'bo1234', 'Logout', '2019-09-10 06:52:05', 'This user logged out'),
(400, 'al1234', 'Login', '2019-09-10 06:52:30', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.1<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(401, 'al1234', 'Logout', '2019-09-10 07:47:19', 'This user logged out');
INSERT INTO `tb_logs` (`id`, `Employee_Code`, `action`, `timestamp`, `description`) VALUES
(402, 'bo1234', 'Login', '2019-09-10 07:47:26', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.1<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(403, 'bo1234', 'Logout', '2019-09-10 07:51:33', 'This user logged out'),
(404, 'bo1234', 'Login', '2019-09-10 07:51:38', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.1<br>\r\n	<b>Location: </b> Makati City City, Metro Manila, Philippines\r\n	'),
(405, 'bo1234', 'Logout', '2019-09-11 08:35:11', 'This user logged out'),
(406, 'al1234', 'Login', '2019-09-11 08:35:24', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(407, 'al1234', 'Logout', '2019-09-11 13:29:02', 'This user logged out'),
(408, 'bo1234', 'Login', '2019-09-11 13:29:13', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(409, 'bo1234', 'Logout', '2019-09-11 13:44:56', 'This user logged out'),
(410, 'N/A', 'Registration', '2019-09-11 13:47:00', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Financial Adviser'),
(411, 'N/A', 'Registration', '2019-09-11 13:48:22', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Financial Adviser'),
(412, 'N/A', 'Registration', '2019-09-11 13:51:42', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Zone Head'),
(413, 'bo1234', 'Login', '2019-09-11 13:52:50', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(414, 'bo1234', 'Logout', '2019-09-11 14:13:18', 'This user logged out'),
(415, 'N/A', 'Registration', '2019-09-11 14:13:54', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Unit Manager'),
(416, 'bo1234', 'Login', '2019-09-11 14:14:10', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(417, 'bo1234', 'Delete', '2019-09-11 14:15:07', 'Applicant: <b>Carl Justin E Yanuario</b> was deleted'),
(418, 'bo1234', 'Delete', '2019-09-11 14:15:09', 'Applicant: <b>Jan Patrick N Sanchez</b> was deleted'),
(419, 'bo1234', 'Delete', '2019-09-11 14:15:10', 'Applicant: <b>Annelia H Halleluijah</b> was deleted'),
(420, 'bo1234', 'Delete', '2019-09-11 14:15:16', 'Applicant: <b>Peppa P Pig</b> was deleted'),
(421, 'bo1234', 'Delete', '2019-09-11 14:15:19', 'Applicant: <b>Zion X Lucas</b> was deleted'),
(422, 'bo1234', 'Delete', '2019-09-11 14:15:21', 'Applicant: <b>Brendan Stephen S Odiver</b> was deleted'),
(423, 'bo1234', 'Delete', '2019-09-11 14:15:23', 'Applicant: <b>Axel S Odiver</b> was deleted'),
(424, 'bo1234', 'Logout', '2019-09-11 15:26:20', 'This user logged out'),
(425, 'N/A', 'Registration', '2019-09-11 15:26:35', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Financial Adviser'),
(426, 'bo1234', 'Login', '2019-09-11 15:26:42', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(427, 'bo1234', 'Update', '2019-09-11 16:43:52', 'Applicant with id: <b>94827848</b> was updated'),
(428, 'bo1234', 'Update', '2019-09-11 16:52:06', 'Applicant with id: <b>94827848</b> was updated'),
(429, 'bo1234', 'Update', '2019-09-11 16:53:18', 'Applicant with id: <b>94827848</b> was updated'),
(430, 'bo1234', 'Update', '2019-09-11 17:02:50', 'Applicant with id: <b>94827848</b> was updated'),
(431, 'bo1234', 'Update', '2019-09-11 17:03:52', 'Applicant with id: <b>94827848</b> was updated'),
(432, 'bo1234', 'Update', '2019-09-11 17:03:59', 'Applicant with id: <b>94827848</b> was updated'),
(433, 'bo1234', 'Update', '2019-09-11 17:04:03', 'Applicant with id: <b>94827848</b> was updated'),
(434, 'bo1234', 'Update', '2019-09-11 17:04:44', 'Applicant with id: <b>94827848</b> was updated'),
(435, 'bo1234', 'Logout', '2019-09-11 17:08:14', 'This user logged out'),
(436, 'N/A', 'Registration', '2019-09-11 17:10:39', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Financial Adviser'),
(437, 'N/A', 'Registration', '2019-09-11 17:11:13', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Financial Adviser'),
(438, 'bo1234', 'Login', '2019-09-11 17:11:22', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(439, 'bo1234', 'Update', '2019-09-11 17:11:54', 'Applicant with id: <b>94827858</b> was updated'),
(440, 'bo1234', 'Update', '2019-09-11 17:11:58', 'Applicant with id: <b>94827858</b> was updated'),
(441, 'bo1234', 'Update', '2019-09-11 17:13:33', 'Applicant with id: <b>94827858</b> was updated'),
(442, 'bo1234', 'Update', '2019-09-11 17:19:44', 'Applicant with id: <b>94827858</b> was updated'),
(443, 'bo1234', 'Update', '2019-09-11 17:19:54', 'Applicant with id: <b>94827858</b> was updated'),
(444, 'bo1234', 'Update', '2019-09-11 17:23:03', 'Applicant with id: <b>94827858</b> was updated'),
(445, 'bo1234', 'Update', '2019-09-11 17:23:08', 'Applicant with id: <b>94827858</b> was updated'),
(446, 'bo1234', 'Update', '2019-09-11 17:24:35', 'Applicant with id: <b>94827858</b> was updated'),
(447, 'bo1234', 'Update', '2019-09-11 17:24:57', 'Applicant with id: <b>94827858</b> was updated'),
(448, 'bo1234', 'Update', '2019-09-11 17:29:35', 'Applicant with id: <b>94827858</b> was updated'),
(449, 'bo1234', 'Update', '2019-09-11 17:31:16', 'Applicant with id: <b>94827858</b> was updated'),
(450, 'bo1234', 'Update', '2019-09-11 17:35:54', 'Applicant with id: <b>94827858</b> was updated'),
(451, 'bo1234', 'Delete', '2019-09-11 17:36:30', 'Applicant: <b>Brendan Stephen S Odiver</b> was deleted'),
(452, 'bo1234', 'Logout', '2019-09-11 17:38:14', 'This user logged out'),
(453, 'N/A', 'Registration', '2019-09-11 17:38:54', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Financial Adviser'),
(454, 'bo1234', 'Login', '2019-09-11 17:39:03', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(455, 'bo1234', 'Update', '2019-09-11 17:40:05', 'Applicant with id: <b>94827859</b> was updated'),
(456, 'bo1234', 'Delete', '2019-09-11 17:51:35', 'Applicant: <b>Brendan Stephen S Odiver</b> was deleted'),
(457, 'bo1234', 'Logout', '2019-09-11 17:53:13', 'This user logged out'),
(458, 'N/A', 'Registration', '2019-09-11 17:53:56', 'Applicant: <b>Brendan Stephen S Odiver</b> applied for Financial Adviser'),
(459, 'bo1234', 'Login', '2019-09-11 17:54:07', '\r\n	<b>OS:</b> Windows 10<br>\r\n	<b>Device:</b> Computer<br>\r\n	<b>Browser:</b> Chrome<br>\r\n	<b>Ip Address:</b> 130.105.8.182<br>\r\n	<b>Location: </b> San Juan City, Metro Manila, Philippines\r\n	'),
(460, 'bo1234', 'Delete', '2019-09-11 17:54:28', 'Applicant: <b>Brendan Stephen S Odiver</b> was deleted'),
(461, 'bo1234', 'Delete', '2019-09-11 17:54:42', 'Applicant: <b>Brendan Stephen S Odiver</b> was deleted');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permissions`
--

CREATE TABLE `tb_permissions` (
  `PermissionKey` tinyint(4) NOT NULL,
  `PermissionDescription` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_policies`
--

CREATE TABLE `tb_policies` (
  `policy_id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `comm_rate_yr1` float NOT NULL,
  `comm_rate_yr2` float NOT NULL,
  `comm_rate_yr3` float NOT NULL,
  `comm_rate_yr4` float NOT NULL,
  `comm_rate_yr5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_policies`
--

INSERT INTO `tb_policies` (`policy_id`, `policy_name`, `comm_rate_yr1`, `comm_rate_yr2`, `comm_rate_yr3`, `comm_rate_yr4`, `comm_rate_yr5`) VALUES
(1, 'Ambition X', 2.5, 2.5, 2.5, 2.5, 2.5),
(2, 'Life BasiX', 40, 10, 5, 5, 5),
(3, 'Life BasiX USD', 40, 10, 5, 5, 5),
(4, 'Axelerator', 25, 5, 5, 0, 0),
(5, 'Investment Linked Top-Up Premiums', 2.5, 0, 0, 0, 0),
(6, 'Assure(5 Pay)', 25, 5, 5, 0, 0),
(7, 'Assure(10 Pay)', 40, 10, 5, 5, 5),
(8, 'Assure (20 Pay)', 50, 10, 5, 5, 5),
(9, 'Life eXentials', 30, 0, 0, 0, 0),
(10, 'Saving eXentials', 20, 0, 0, 0, 0),
(11, 'Academic Exentials', 20, 0, 0, 0, 0),
(12, 'Academic Exentials (w/Bright rider)', 25, 0, 0, 0, 0),
(13, 'Health MaX (20 Pay)', 40, 10, 5, 5, 5),
(15, 'FlexiProtect 5', 10, 12, 14, 14, 14),
(16, 'FlexiProtect 5 (5 Pay)', 10, 10, 10, 10, 10),
(17, 'Secure (until end of YRT prem payment period)', 30, 10, 10, 10, 10),
(18, 'Care', 30, 10, 10, 10, 10),
(19, 'Health MaX (Pay to 65: issue age 0-46)', 40, 10, 5, 5, 5),
(20, 'Ambition X USD', 2.5, 2.5, 2.5, 2.5, 2.5),
(21, 'Health MaX (Pay to 65: issue age 47)', 39, 10, 5, 5, 5),
(22, 'Health MaX (Pay to 65: issue age 48)', 38, 10, 5, 5, 5),
(23, 'Health MaX (Pay to 65: issue age 49)', 37, 10, 5, 5, 5),
(24, 'Health MaX (Pay to 65: issue age 50)', 36, 10, 5, 5, 5),
(25, 'Health MaX (Pay to 65: issue age 52)', 34, 10, 5, 5, 5),
(26, 'Health MaX (Pay to 65: issue age 53)', 33, 10, 5, 5, 5),
(27, 'Health MaX (Pay to 65: issue age 54)', 32, 10, 5, 5, 5),
(28, 'Health MaX (Pay to 65: issue age 55)', 31, 10, 5, 5, 5),
(29, 'Health MaX (Pay to 65: issue age 56)', 30, 10, 5, 5, 5),
(30, 'Health eXentials ', 35, 10, 10, 10, 10),
(31, 'Global Health Access (issue ages 0-59)', 20, 12, 10, 10, 10),
(32, 'Global Health Access (Issue ages 60-70)', 10, 10, 10, 10, 10),
(33, 'Secure (Level-Pay)', 40, 10, 5, 5, 5),
(34, 'Protector (until end of YRT prem payment period)', 30, 10, 10, 10, 10),
(35, 'Protector (5YT / 10YT)', 40, 10, 5, 5, 5),
(36, 'Protector (Level-Pay - 5 Pay / 10 Pay)', 40, 10, 5, 5, 5),
(37, 'Protector (Level-Pay - To Age 55)', 50, 15, 10, 5, 5),
(38, 'Health MaX Rider (20 Pay)', 40, 10, 5, 5, 5),
(39, 'Health MaX Rider (Pay to 65: issue age 0-46)', 40, 10, 5, 5, 5),
(40, 'Health MaX Rider (Pay to 65: issue age 47)', 39, 10, 5, 5, 5),
(41, 'Health MaX Rider (Pay to 65: issue age 48)', 38, 10, 5, 5, 5),
(42, 'Health MaX Rider (Pay to 65: issue age 49)', 37, 10, 5, 5, 5),
(43, 'Health MaX Rider (Pay to 65: issue age 50)', 36, 10, 5, 5, 5),
(44, 'Health MaX Rider (Pay to 65: issue age 51)', 35, 10, 5, 5, 5),
(45, 'Health MaX Rider (Pay to 65: issue age 52)', 34, 10, 5, 5, 5),
(46, 'Health MaX Rider (Pay to 65: issue age 53)', 33, 10, 5, 5, 5),
(48, 'Health MaX Rider (Pay to 65: issue age 55)', 31, 10, 5, 5, 5),
(49, 'Health MaX Rider (Pay to 65: issue age 56)', 30, 10, 5, 5, 5),
(50, 'Critical Conditions Rider (until end of YRT prem pay)', 30, 10, 10, 10, 10),
(51, 'Critical Conditions Rider (Level-Pay)', 50, 15, 10, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_recruitment_results`
--

CREATE TABLE `tb_recruitment_results` (
  `results_id` int(11) NOT NULL,
  `tracker_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `hire_date` date DEFAULT NULL,
  `recruited_by` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_recruitment_tracker`
--

CREATE TABLE `tb_recruitment_tracker` (
  `tracker_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `resume review` bit(1) NOT NULL DEFAULT b'0',
  `interview` varchar(3) DEFAULT 'N/A',
  `seminar` varchar(3) DEFAULT 'N/A',
  `arise` varchar(3) DEFAULT 'N/A',
  `training` varchar(3) DEFAULT 'N/A',
  `ice` varchar(3) DEFAULT 'N/A',
  `result` varchar(10) DEFAULT 'N/A',
  `employee_code` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sales`
--

CREATE TABLE `tb_sales` (
  `sales_id` int(11) NOT NULL,
  `client_first_name` varchar(255) NOT NULL,
  `client_last_name` varchar(255) NOT NULL,
  `client_contact_number` varchar(255) NOT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `policy_id` varchar(255) NOT NULL,
  `payment_plan` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `payment_per_plan` varchar(100) NOT NULL,
  `date_sold` date NOT NULL,
  `end_date` date NOT NULL,
  `next_payment_date` date NOT NULL,
  `employee_code` varchar(255) NOT NULL,
  `manager_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sales`
--

INSERT INTO `tb_sales` (`sales_id`, `client_first_name`, `client_last_name`, `client_contact_number`, `client_email`, `policy_id`, `payment_plan`, `payment_amount`, `payment_per_plan`, `date_sold`, `end_date`, `next_payment_date`, `employee_code`, `manager_code`) VALUES
(2, 'Kathleen Joyce', 'Tamares', '09056931926', 'tkathleenjoyce@gmail.com', '2', 'Monthly', '1000.00', '16.67', '2019-08-15', '2024-07-15', '2019-09-15', 'BO1234', ''),
(3, 'Gordon', 'Ramsay', '09263051664', 'gordon.ramsay@yahoo.com', '25', 'Annual', '100000.00', '20000.00', '2019-08-01', '2024-07-01', '2020-08-01', 'al8633', ''),
(4, 'jason', 'Sila', '09099776432', 'jasonsilva@scorpoin.com', '4', 'Quarterly', '30000.00', '1500.00', '2019-08-29', '2024-07-29', '2019-12-29', 'al8633', ''),
(5, 'Mark', 'Malabon', '097865432', 'markmalabon@scorpion.com', '2', 'Monthly', '25000.00', '416.67', '2019-12-02', '2024-11-02', '2020-01-02', 'al8633', ''),
(6, 'Meranda Rose', 'Miamor', '09654321345', 'mirandarose@scorpion.com', '18', 'Semi-annual', '30000.00', '3000.00', '2019-08-01', '2024-07-01', '2020-02-01', 'al8633', ''),
(7, 'Juan', 'Dela Cruz', '0923051664', 'juan.delacruz@gmail.com', '18', 'Monthly', '100000.00', '1666.67', '2019-08-16', '2024-07-16', '2019-09-16', 'al8633', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_description`
--

CREATE TABLE `tb_status_description` (
  `Status_ID` tinyint(4) NOT NULL,
  `Status_Description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `Employee_Code` varchar(6) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Middle_Name` varchar(200) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Birthday` date NOT NULL,
  `Password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Branch_ID` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Hire_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`Employee_Code`, `First_Name`, `Middle_Name`, `Last_Name`, `Email`, `Gender`, `Address`, `Contact`, `Birthday`, `Password`, `Position`, `Branch_ID`, `Status`, `Hire_Date`) VALUES
('ag9640', 'Ariana', 'B', 'Grande', 'ag9640@scorpion.com', 'Female', '2/F Ict Building Naia Old ', '7117573', '1990-05-10', '$2y$12$75744bEQPL97uLX8Cj1mU.meSfe8C4BLI4Wk9GrNdYTD0Oyl42xAS', 'Branch Head', 2, 'Full Time', '2019-01-15'),
('al1234', 'Anice Nicole', 'F', 'Lucrida', 'al8633@scorpion.com', 'Female', 'Metro Manilaquezon City537 Edsa Cubao', '6337691', '1999-03-12', '$2y$12$h89oN9SKbShJD1FTCb2FbeLJjcx6ghclLLGtkdg/lbBNw36bHfkdO', 'Financial Adviser', 1, 'Full Time', '2019-01-01'),
('al3542', 'Afaman', 'D\r\n', 'Lipasan', 'al35422@scorpion.com', 'Male', '4/F Manila Astral Tower1330 Padre Faura Street Ermita 1000', '5415742', '1984-08-15', '$2y$12$NDB94peQZaQV9XAQwIIRZOP5nxn8QrG/fyUBAuWgHaG1kCU7VM5o2', 'Branch Head', 3, 'Full Time', '2019-01-15'),
('as4068', 'Andrie', 'H', 'Samera', 'as4068@scorpion.com', 'Male', '5/F B And L Building116 Legaspi StreetLegaspi Village 1200', '6356090', '1987-07-28', '$2y$12$KU9tO39f7jWPKsxLjghpj.vbu9C7J7wFiXab4iVyNbfI6kKr8nE2m', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('bo1234', 'Brendan Stephen', 'G', 'Odiver', 'bsodiver@gmail.com', 'Male', '2f Hollywood Square 33 West Avenue', '8150744', '1994-05-01', '$2y$12$h89oN9SKbShJD1FTCb2FbeLJjcx6ghclLLGtkdg/lbBNw36bHfkdO', 'Zone Head', 3, 'Full Time', '2019-01-15'),
('cm1803', 'Clarish', 'E', 'Miguel', 'cm1803@scorpion.com', 'Male', 'Manalac Industrial Subdivision Bagumbayan Taguig', '8443702', '1998-07-29', '$2y$12$vz0gKfvnuWx1.a5iL5NATuAk48QL5M/pHBZ7lU2I6peKLtkcQg6Nq', 'Branch Head', 4, 'Full Time', '2019-01-15'),
('db4933', 'Donna', 'W', 'Bartolome', 'db4933@scorpion.com', 'Female', '185 N. Domingo Street Balong Bato 1500', '9393365', '1984-05-13', '$2y$12$lDDwjbVlZC4hMaK0kRDLf.4nj3YyEW/geleD7njgb4Dvxi2mu66Jy', 'Branch Head', 5, 'Full Time', '2019-01-15'),
('ff2213', 'Flower', 'K', 'Floreda', 'ff2213@scorpion.com', 'Female', '31 Bagong Barrio Sta. Maria Industrial Estate Bagumbayan 1631', '9373232', '1993-05-11', '$2y$12$0BpT66F2MX53XcePl.ydwekWl/QsV2dTJZ6gzDX5LBjPQiRPAMXYe', 'Branch Head', 6, 'Full Time', '2019-01-15'),
('ft8341', 'Floriza', 'Q', 'Tonglaw', 'ft8341@scorpion.com', 'Female', '4/F Ac Rustell Building 8193 Dr. A. Santos Avenue 1700', '21654987', '1951-12-25', '$2y$12$ba128FwMb3FRM09id1U9f.bUKcH6K9POtemT.mZMoJjMZWpk0PMP2', 'Branch Head', 7, 'Full Time', '2019-01-15'),
('gb5810', 'George', 'S', 'Badita', 'gb5810@scorpion.com', 'Female', '1801 Centerpoint Building Julia Vargas Corner Garnet StreetOrtigas Center 1600', '549488', '1997-09-22', '$2y$12$7SyyusNtkV2XUKVR9WTCy.d62qUueyIO.0hyzhYKloUsjvt0S3t0K', 'Branch Head', 8, 'Full Time', '2019-01-15'),
('hm5639', 'Hannah', 'O', 'Mandal', 'hm5639@scorpion.com', 'Female', '6/F P C C I Corporate Centre118 L. P. Leviste StreetSalcedo Village 1200', '8430351', '1986-02-11', '$2y$12$ez8SRXJMoFhKqnA0ghmclesHmBALY3spqogpRBfb1DIionRlLiVfK', 'Branch Head', 9, 'Full Time', '2019-01-15'),
('jr8515', 'John', 'l', 'Reyes', 'jr8515@scorpion.com', 'Male', '709 General Luis Street 1400', '21648', '1988-08-12', '$2y$12$dRO2qi81dkz9Hj4E.8DJGuuh9BgcoBuLYeXc7kyjqbm./T5240NRi', 'Unit Manager', 3, 'Full Time', '2019-01-15'),
('js1542', 'Jason', 'F', 'Silva', 'js852x@scorpion.com', 'Male', 'E. Abada Street., Loyola Heights, 1108', '251654798', '1986-12-18', '$2y$12$31CgWR48R9gskJ28xTTZ4.PX8yk4GTouT510iXSaZd413yuLIjzja', 'Unit Manager', 4, 'Full Time', '2019-01-15'),
('JS2964', 'Jan Patrick', 'N', 'Sanchez', 'js2964@scorpion.com', 'Male', '83-D United States St. Better Living Subdivision Paranaque City', '09263051664', '1994-10-06', '$2y$12$ylmorEUto1faF74pRw.hrOplteVKMqHOCcLeclui92Bqdb5ZJioCq', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('js3068', 'Jean Micheal', 'L', 'Sanchez', 'js3068@scorpion.com', 'Male', 'P. Ocampo St Corner D', '8189935', '1997-03-04', '$2y$12$9aLFxCOmMXsgtlpe2jRLYOOID8ScUioqy7V38tFx4dLzoEs1fHXKO', 'Unit Manager', 4, 'Full Time', '2019-01-15'),
('js7111', 'Jan Patrick', 'T', 'Sanchez', 'js7111@scorpion.com', 'Male', 'Quezon Power Plant, Cagsiay-I', '15645948', '1994-05-07', '$2y$12$m17qPrkhSk8NdYrPrhv5xeU6XNHZedTVu.J89rhGrkEjBeh4qnTVu', 'Unit Manager', 5, 'Casual', '2019-01-15'),
('JS8699', 'Jan Patrick', 'N', 'Sanchez', 'jps@yahoo.com', 'Male', 'a123', '23453534', '1994-10-06', '$2y$12$6I71pQQb3g7WRlHtGzyRL.YWcOdm2RI/GpvgGpg/eht48H/BY1poa', 'Unit Manager', 2, 'Full Time', '2019-02-02'),
('jt6961', 'Joelat', '', 'Topang', 'jt6961@scorpion.com', 'Male', 'Dominga I I I2113 Chino Roces Avenue Corner Dela Rosa Street1231', '65496498', '1949-04-15', '$2y$12$JKa1DYuaqqubJELie21dOeP2Rtw4T79nRF5ilkP9I5iL7zY2svJpC', 'Unit Manager', 5, 'Full Time', '2019-01-15'),
('jv1716', 'Javin V', 'V', 'Velasco', 'jv1716@scorpion.com', 'Male', '15 Shaw Blvd., Brgy. San Antonio,  N / A 1603', '7210024', '1985-05-04', '$2y$12$1koNmAI3ub450/NPms.i2e04dn.oliBFfPWM6qd7dEYWARolTGZ/O', 'Unit Manager', 6, 'Full Time', '2019-01-15'),
('ka9781', 'Kimmy', 'Q', 'Acosta', 'ka9781@scorpion.com', 'Female', '11th Street New Manila 1100', '8507222', '1986-10-13', '$2y$12$IOmfOGg086.Eb494AsrPouMYXUGkBHHDpKN4n5y9gAx3nrY/Jw1pq', 'Unit Manager', 6, 'Full Time', '2019-01-15'),
('ll3543', 'Lina', 'X', 'Laparan', 'll3543@scorpion.com', 'Female', 'Amkor Technology Special Economic Zone Km. 22 East Service Road Barrio Cupang 1702', '8507287', '1973-09-23', '$2y$12$Ww1uREjDwoqH.Kp2Dp85tu.qxKVZ9vBFIhg5iFDPPuX3TaP0sQzyi', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('md4048', 'Marrielle', 'H', 'Diaz', 'md4048@scorpion.com', 'Female', '3/F Equitable Bank Building898 Aurora Blvd. Cor. Stanford Street Cubao 1100', '9110471', '1997-01-01', '$2y$12$djT9Yjjaa997P/QO0JwUNOrMoDmdkuNZ6o2BliEQBIK3Er7e5e6Gm', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('md5964', 'Mary Rose', 'A', 'Dolana', 'md5964@scorpion.com', 'Female', 'UNIT 1 Dli Generics Building153 P. Cruz Street New Zaniga 1550', '533957', '1954-06-29', '$2y$12$g6IKBzxPhg0Sg7JMP6/XEeN6JiHYkpcRGN24H5VqNiwESyALy8NLO', 'Unit Manager', 7, 'Full Time', '2019-01-15'),
('mf2469', 'Montano', 'P', 'Falco', 'mf2469@scorpion.com', 'Male', '2nd Flr CTP Building', '5343965', '1994-03-31', '$2y$12$KL0n/msw1TAbDpIJurInIOsBXd8xyklV8/fuv1uMCIZBe72iilmXC', 'Unit Manager', 7, 'Full Time', '2019-01-15'),
('mf4634', 'Mark', 'S', 'Fajardo', 'mf4634@scorpion.com', 'Male', '6371 Estrella St., Guadalupe Viejo, NCR', '933942', '1985-03-12', '$2y$12$f0sv4.xqofw/t7zdVnEOpOtvvrzSQyfj9Idk11VRUTDOueAlHxy0K', 'Unit Manager', 8, 'Full Time', '2019-01-15'),
('mh1938', 'Marllon', 'C', 'Hosana', 'mh1938@scorpion.com', 'Male', '40 Peter Avenue Lfs, Veinte Reales', '8925466', '1999-02-14', '$2y$12$zZ/WbIvKR44kJB1GXhfZQukQaCE468tOJRbz9yth6uP6txdqu6lpa', 'Financial Adviser\r\n', 7, 'Full Time', '2019-01-15'),
('ml5248', 'Mariah Danah Lucrida', 'G', 'Lucrida', 'ml548@scorpion.com', 'Female', '227 Purple RoadCanaynay Court Gatchalian 1700', '2933942', '1998-08-13', '$2y$12$2xJ3t5wnfVG5y3dbsDJ7mez6vOw68/.ph8bv9u7ULamxizCAHPJra', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('mm8996', 'Marjory', 'B', 'Malary', 'mm8996@scorpion.com', 'Male', '101 Va Rufino Street Corner Dela Rosa StreetLegaspi Village', '7515000', '1987-02-21', '$2y$12$Ei4Tf0xfq81TeZ9a0bPZbei9eoA4U34SRWKsFid.SXp85.IOYP19e', 'Unit Manager', 8, 'Full Time', '2019-01-15'),
('ms8027', 'Mangno', 'K', 'Superable', 'ms8027@scorpion.com', 'Female', 'RM. 423 Chateau Verde Condominium E. Rodriguez Jr. AvenueValle Verde 1 Gate 2 1600', '8403673', '1995-03-12', '$2y$12$cWoZFmPpSmtwbB6ALwXAZOem8DeFpn96G71A4OVOrj6FRzkzOUjTu', 'Unit Manager', 9, 'Full Time', '2019-01-15'),
('N/A', 'N/A', NULL, '', NULL, NULL, '', '', '0000-00-00', '', 'N/A', 0, '', '0000-00-00'),
('pe3451', 'Prince', 'E', 'Ea\r\n', 'pe3451@scorpion.com', 'Male', '4/F Cargo Haus Building Naia Complex Barangay Vitalez 1700', '5968495', '1985-02-19', '$2y$12$kTpmUTz3j7RtWrhQMKSYguSO8Y61SKI1U2d9bNP9Az7g8/dtkI7o2', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('pi5411', 'Patricia', 'G', 'Ignasio', 'pi5411@scorpion.com', 'Female', '78 Quirino HighwayBalintawak 1106', '6717045', '1999-01-05', '$2y$12$zabHGagL2N2nTq5DyB7BSu/6ziQvlXTQMRxd0zauvWMwb4aYgngr.', 'Unit Manager', 9, 'Full Time', '2019-01-15'),
('rb4567', 'Rodolfo Bagansting', 'Q', 'Reyes', 'rb4567@scorpion.com', 'Male', '8473 LE West Service Rd., Km 14, Brgy. Sun Valley', '76845', '1989-03-18', '$2y$12$..JucWgTCx2kzwOSgIaq8OnX0BfCtfa/fTuqW6g8KA.oyhgH9ZI.u', 'Financial Adviser', 2, 'Full Time', '2019-02-02'),
('rm9276', 'Rosejen', 'J', 'Meegastanne', 'rm9276@scorpion.com', 'Female', '140 Aurora Boulevard', '3617089', '1985-07-10', '0', 'Financial Adviser', 2, 'Full Time', '2019-02-02'),
('rr1058', 'Ren-ren Mark', 'R', 'Reyes', 'rr1058@scorpion.com', 'Male', 'VETERANS ROAD, VETERANS CENTER, TAGUIG', '5249649', '1988-10-17', '$2y$12$iIiGC.zpFv7v3MlhehV1ruAvJRs9ObKjN8jIFN04zcthd/Uot5H.u', 'Financial Adviser', 3, 'Casual', '2019-01-15'),
('rr3675', 'Robert', 'R', 'Rosario', 'rr3675@scorpion.com', 'Male', '245 Dalisay Street 1000', '8456215', '1994-07-09', '$2y$12$pcTQr/swO/f.cF81J38dsOmzOXN6TjXv6vcNeJFqJW.ozOtoUDgie', 'Financial Adviser', 4, 'Full Time', '2019-01-15'),
('RR6406', 'Rossbell Chrislyn', 'X', 'Ramos', 'RR6406@scorpion.com', 'Male', 'Mandaluyong City', '091232145', '1994-10-06', '$2y$12$SB/7LiLKMBPcmoLzwkDsp.EBaH15w94rh4PN2QIVuZes9PQXxNxBO', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('RR9947', 'Ren-ren Mark', 'X', 'Reyes', 'RR9947@scorpion.com', 'Male', 'Pasig City', '0915155454', '1955-05-05', '$2y$12$IuhdnFjuT3G/i3v/b3wK9.W7BOLqrkDUSdaWTuSGZXr4CYtx430ky', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('TT7837', 'Testing', 'n', 'testingg', 'tt@tt.com', 'Male', '123', '23432424', '2018-12-31', '$2y$12$VzSKbzCt/OPr.bbk8HyWAu18seT5XVy06dymnMVRtJ9N6QqgdYFJC', 'Unit Manager', 2, 'Full Time', '2019-01-15'),
('vz1180', 'Vanessa', 'W', 'Zaraina', 'vz1180@scorpion.com', 'Female', '7805 St. Paul Corner Mayapis Street, San Antonio Village', '8957932', '1987-02-22', '$2y$12$dXnAbgHiH76yQQdoYR/Tduf/j.Yfz2s.a9Ok4nw4zg.P8YNNNYXFe', 'Zone Head', 1, 'Full Time', '2019-01-01'),
('ww6830', 'Wongad', 'S', 'Wong', 'ww6830@scorpion.com', 'Male', 'Mega State Building Araneta Ave Cor Agno Ext1100', '126196854', '1992-09-12', '$2y$12$RoDaknc6G1lx/QnzqEFNVeaxaJoxAr3CRL8z2jcST.PJG2np1uJ8a', 'Financial Adviser', 5, 'Full Time', '2019-01-15'),
('yd4937', 'Yollan', 'T', 'Dormado', 'yd4937@scorpion.com', 'Female', '163-A P. Sevilla Street Grace Park 1400', '5964923', '1984-03-19', '$2y$12$.QsPAOLltS4fG/WozL8NauG.gYig4bjhYQ.KKl3rtAo/Fp6VYBRPO', 'Financial Adviser', 6, 'Full Time', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_permissions`
--

CREATE TABLE `tb_user_permissions` (
  `Employee_Code` varchar(6) NOT NULL,
  `PermissionKey` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_permissions`
--

INSERT INTO `tb_user_permissions` (`Employee_Code`, `PermissionKey`) VALUES
('ja8634', NULL),
('js3938', NULL),
('js6670', NULL),
('js7490', NULL),
('tm2103', NULL),
('tm7491', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_announcements`
--
ALTER TABLE `tb_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_applicants`
--
ALTER TABLE `tb_applicants`
  ADD PRIMARY KEY (`applicant_id`),
  ADD UNIQUE KEY `tb_applicants_applicant_id_uindex` (`applicant_id`);

--
-- Indexes for table `tb_branch`
--
ALTER TABLE `tb_branch`
  ADD PRIMARY KEY (`Branch_ID`),
  ADD UNIQUE KEY `tb_branch_Branch_ID_uindex` (`Branch_ID`);

--
-- Indexes for table `tb_commission`
--
ALTER TABLE `tb_commission`
  ADD PRIMARY KEY (`commission_id`);

--
-- Indexes for table `tb_employee_branch`
--
ALTER TABLE `tb_employee_branch`
  ADD PRIMARY KEY (`Employee_Code`),
  ADD UNIQUE KEY `tb_employeeBranch_Employee_Code_uindex` (`Employee_Code`);

--
-- Indexes for table `tb_employee_status`
--
ALTER TABLE `tb_employee_status`
  ADD PRIMARY KEY (`Employee_Code`),
  ADD UNIQUE KEY `tb_employee_status_Employee_Code_uindex` (`Employee_Code`);

--
-- Indexes for table `tb_logs`
--
ALTER TABLE `tb_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_permissions`
--
ALTER TABLE `tb_permissions`
  ADD PRIMARY KEY (`PermissionKey`),
  ADD UNIQUE KEY `tb_permissions_PermissionDescription_uindex` (`PermissionDescription`),
  ADD UNIQUE KEY `tb_permissions_PermissionKey_uindex` (`PermissionKey`);

--
-- Indexes for table `tb_policies`
--
ALTER TABLE `tb_policies`
  ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `tb_recruitment_results`
--
ALTER TABLE `tb_recruitment_results`
  ADD PRIMARY KEY (`results_id`),
  ADD UNIQUE KEY `tb_recruitment_results_results_id_uindex` (`results_id`);

--
-- Indexes for table `tb_recruitment_tracker`
--
ALTER TABLE `tb_recruitment_tracker`
  ADD PRIMARY KEY (`tracker_id`);

--
-- Indexes for table `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `tb_status_description`
--
ALTER TABLE `tb_status_description`
  ADD PRIMARY KEY (`Status_ID`),
  ADD UNIQUE KEY `tb_status_description_Status_ID_uindex` (`Status_ID`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`Employee_Code`),
  ADD UNIQUE KEY `tb_users_employee_code_uindex` (`Employee_Code`);

--
-- Indexes for table `tb_user_permissions`
--
ALTER TABLE `tb_user_permissions`
  ADD PRIMARY KEY (`Employee_Code`),
  ADD UNIQUE KEY `tb_UserPermissions_Employee_Code_uindex` (`Employee_Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_announcements`
--
ALTER TABLE `tb_announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_applicants`
--
ALTER TABLE `tb_applicants`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94827861;

--
-- AUTO_INCREMENT for table `tb_branch`
--
ALTER TABLE `tb_branch`
  MODIFY `Branch_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_commission`
--
ALTER TABLE `tb_commission`
  MODIFY `commission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_logs`
--
ALTER TABLE `tb_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;

--
-- AUTO_INCREMENT for table `tb_permissions`
--
ALTER TABLE `tb_permissions`
  MODIFY `PermissionKey` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_policies`
--
ALTER TABLE `tb_policies`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_recruitment_tracker`
--
ALTER TABLE `tb_recruitment_tracker`
  MODIFY `tracker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_sales`
--
ALTER TABLE `tb_sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_status_description`
--
ALTER TABLE `tb_status_description`
  MODIFY `Status_ID` tinyint(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
