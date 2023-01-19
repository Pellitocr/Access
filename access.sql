-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 02:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `access`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `ID` int(11) NOT NULL,
  `introduction` mediumtext NOT NULL,
  `mission` mediumtext NOT NULL,
  `vision` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `contact` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`ID`, `introduction`, `mission`, `vision`, `content`, `contact`) VALUES
(1, 'Centro de Informatica y Telecomunicaciones (C.I.T) General information regarding the C.I.T.\r\n', 'Its Mission: Facilitate and provide computing resources and communications infrastructure to support academia, research, and management. Work with dedication and care to guarantee a service of excellence and quality. Provide a communications network accessible to our entire university community and to all who request our services in Puerto Rico and abroad. Comply with the rules and regulations governing information technology.', 'Its Vision: Transcend information technology and telecommunications as fundamental tools for academic management and the managerial processes of our Campus. ', '', 'Contact Information:                \r\nAddress: Calle San Blás, Esquina Juan P. Avilés (Antigua Esc. John F. Kennedy) Schedule: Monday - Friday: 1:00PM to 5:00PM Phone: (787)899-8999');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `keyNUM` int(250) NOT NULL,
  `classroom` varchar(100) NOT NULL,
  `availability` varchar(35) NOT NULL,
  `givenTo` varchar(35) NOT NULL,
  `purpose` varchar(35) NOT NULL,
  `date` varchar(35) NOT NULL,
  `dateRequested` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`keyNUM`, `classroom`, `availability`, `givenTo`, `purpose`, `date`, `dateRequested`) VALUES
(1, 'Lab #3', 'Available', 'Holder', 'None', '11/16/2022', '11/11/2022'),
(2, 'Super Lab.', 'Available', 'Holder', 'None', '12/05/2022', '11/23/2022'),
(3, 'Electronic Classroom ', 'Available', 'Holder', 'None', '11/16/2022', '11/15/2022'),
(4, 'Data Room', 'Available', 'Holder', 'None', '11/16/2022', '11/15/2022'),
(5, 'Lab #1', 'Available', 'Holder', 'Class', '11/28/2022', '11/15/2022'),
(6, 'Lab #2', 'Available', 'Holder', 'None', '12/03/2022', '11/16/2022');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `classroom` varchar(100) NOT NULL,
  `loginDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES
(28, 'Rose', 'Added Classroom', 'Lab #2', '2022-11-28 14:14:36'),
(29, 'Rose', 'Updating Classroom', 'Lab #2', '2022-11-28 14:16:20'),
(30, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-11-28 14:16:36'),
(31, 'admin', 'Updating Information', 'Information', '2022-11-28 18:19:57'),
(32, 'admin', 'Updating Information', 'Information', '2022-11-28 18:21:39'),
(33, 'Junachito', 'Created User', 'New User', '2022-11-28 18:25:02'),
(34, 'Last active User', 'Deleted User', 'User Deleted', '2022-11-28 18:28:13'),
(35, 'Junachito', 'Updated Classroom', 'Lab #1', '2022-11-28 18:31:00'),
(36, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:39:38'),
(37, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:40:47'),
(38, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:45:03'),
(39, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:46:43'),
(40, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:46:52'),
(41, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:46:57'),
(42, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:47:05'),
(43, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:47:10'),
(44, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:47:14'),
(45, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:48:04'),
(46, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:48:40'),
(47, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:49:36'),
(48, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:50:05'),
(49, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:50:48'),
(50, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:51:03'),
(51, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:51:10'),
(52, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:51:26'),
(53, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:51:52'),
(54, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:52:23'),
(55, 'Pellitocr', 'Updating Information', 'Information', '2022-11-28 18:53:36'),
(56, 'Pellitocr', 'Added Classroom', 'Lab #2', '2022-11-28 18:54:07'),
(57, 'Pellitocr', 'Created User', 'New User', '2022-11-28 18:55:37'),
(58, 'admin', 'Updating Information', 'Information', '2022-11-29 09:43:09'),
(59, 'admin', 'Updated Classroom', 'Lab #2', '2022-11-29 09:44:38'),
(60, 'admin', 'Updating Information', 'Information', '2022-11-29 09:47:18'),
(61, 'Last active user', 'Deleted User', 'User Deleted', '2022-11-30 12:37:44'),
(62, 'Last active user', 'Deleted User', 'User Deleted', '2022-11-30 12:37:54'),
(63, 'Last active user', 'Deleted User', 'User Deleted', '2022-11-30 12:38:52'),
(64, 'admin', 'Updating Information', 'Information', '2022-11-30 12:39:32'),
(65, 'Pellitocr', 'Updated Classroom', 'Lab #2', '2022-11-30 12:54:25'),
(66, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-11-30 12:54:59'),
(72, 'admin', 'Created Report', 'Report', '2022-12-02 15:32:32'),
(73, 'admin', 'Created Report', 'Report', '2022-12-02 15:32:40'),
(74, 'admin', 'Created Report', 'Report', '2022-12-02 15:37:56'),
(75, 'admin', 'Created Report', 'Report', '2022-12-02 15:39:10'),
(76, 'admin', 'Created Report', 'Report', '2022-12-02 15:52:20'),
(78, 'Pellitocr', 'Created Report', 'Report', '2022-12-02 15:56:47'),
(79, 'Pellitocr', 'Created Report', 'Report', '2022-12-02 22:50:20'),
(80, 'Pellitocr', 'Created Report', 'Report', '2022-12-02 22:50:39'),
(81, 'Pellitocr', 'Added Classroom', 'Lab #2', '2022-12-02 22:52:11'),
(82, 'Pellitocr', 'Created Report', 'Report', '2022-12-02 22:52:29'),
(83, 'Pellitocr', 'Created Report', 'Report', '2022-12-02 22:52:32'),
(84, 'Pellitocr', 'Created Report', 'Report', '2022-12-02 22:54:18'),
(86, 'Pellitocr', 'Created Report', 'Report', '2022-12-03 13:41:03'),
(87, 'admin', 'Created Report', 'Report', '2022-12-04 12:59:08'),
(88, 'admin', 'Added Classroom', 'Lab #3', '2022-12-07 12:33:02'),
(89, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-07 12:35:15'),
(90, 'admin', 'Added Classroom', 'sfs', '2022-12-07 12:36:22'),
(91, 'admin', 'Added Classroom', 'sfs', '2022-12-07 12:38:31'),
(92, 'admin', 'Added Classroom', 'sfs', '2022-12-07 12:39:12'),
(93, 'admin', 'Added Classroom', 'sfs', '2022-12-07 12:39:41'),
(94, 'admin', 'Added Classroom', 'asd', '2022-12-07 12:39:56'),
(95, 'admin', 'Added Classroom', 'asd', '2022-12-07 12:41:40'),
(96, 'admin', 'Added Classroom', 'asd', '2022-12-07 12:42:15'),
(97, 'admin', 'Added Classroom', 'asd', '2022-12-07 12:43:03'),
(98, 'admin', 'Added Classroom', 'asd', '2022-12-07 12:43:49'),
(99, 'admin', 'Added Classroom', 'sdf', '2022-12-07 12:44:20'),
(100, 'admin', 'Added Classroom', 'sdf', '2022-12-09 13:30:08'),
(101, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:21'),
(102, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:25'),
(103, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:28'),
(104, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:31'),
(105, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:35'),
(106, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:38'),
(107, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:41'),
(108, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:30:49'),
(109, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:33:56'),
(110, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-09 13:34:00'),
(111, 'admin', 'Updated Classroom', 'DeezNuts', '2022-12-09 13:37:11'),
(112, 'admin', 'Created Report', 'Report', '2022-12-09 15:10:30'),
(113, 'admin', 'Updating Information', 'Information', '2022-12-09 15:13:31'),
(114, 'admin', 'Created Report', 'Report', '2022-12-09 15:14:09'),
(115, 'admin', 'Created Report', 'Report', '2022-12-09 15:14:34'),
(116, '', 'Created Report', 'Report', '2022-12-09 15:14:40'),
(117, 'admin', 'Created Report', 'Report', '2022-12-09 22:46:31'),
(118, '', 'Created Report', 'Report', '2022-12-09 22:50:43'),
(119, 'Pellitocr', 'Updated Classroom', 'Lab #3', '2022-12-11 09:01:18'),
(120, 'Pellitocr', 'Updated Classroom', 'Super Lab.', '2022-12-11 09:03:59'),
(121, 'Pellitocr', 'Updated Classroom', 'Electronic Classroom ', '2022-12-11 09:04:15'),
(122, 'Pellitocr', 'Updated Classroom', 'Data Room', '2022-12-11 09:04:29'),
(123, 'Pellitocr', 'Updated Classroom', 'Lab #1', '2022-12-11 09:04:40'),
(124, 'Pellitocr', 'Updated Classroom', 'Lab #2', '2022-12-11 09:05:00'),
(125, 'Pellitocr', 'Updated Classroom', 'DeezNuts', '2022-12-11 09:07:28'),
(126, 'Pellitocr', 'Added Profile', 'E0000000000', '2022-12-11 09:08:30'),
(127, 'Pellitocr', 'Updated Classroom', 'DeezNuts', '2022-12-11 09:08:50'),
(128, 'Last active User', 'Deleted Classroom', 'Classroom Deleted', '2022-12-11 22:16:28'),
(129, 'Pellitocr', 'Created Report', 'Report', '2022-12-11 22:17:06'),
(130, '', 'Created Report', 'Report', '2022-12-11 22:18:40'),
(131, 'admin', 'Created Report', 'Report', '2022-12-12 09:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ID` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `employee_Number` varchar(100) NOT NULL,
  `birtdate` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `alt_phone` varchar(100) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `records` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`ID`, `name`, `last_Name`, `employee_Number`, `birtdate`, `address`, `sex`, `email`, `phone`, `alt_phone`, `comments`, `records`) VALUES
(1, 'Pedro', 'Camacho', 'E00562662', '09/28/2000', 'G 129 Atrs. Sabaneras', 'M', 'PCAMACHO2662@intersg.edu', '7872376719', '7872315215', 'Student', 'Record Created for Test Purposes'),
(2, 'Rafael', 'Justiniano', 'E0000000000', 'HIDDEN', 'HIDDEN', 'M', 'HIDDEN', 'HIDDEN', 'HIDDEN', 'HIDDEN', 'HIDDEN'),
(3, 'Jose', 'Zapata', 'E0000000000', '01/01/2000', '', 'M', '', '1234567890', '1234567890', 'Student', 'He a good guy.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `loginDate` varchar(255) DEFAULT NULL,
  `logoutDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `last_name`, `username`, `password`, `loginDate`, `logoutDate`) VALUES
(1, 'Pedro', 'Camacho', 'Pellitocr', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '2022-12-11 22:14:17', NULL),
(2, 'admin', 'admin', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '2022-12-12 09:44:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`keyNUM`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `keyNUM` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
