-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 01:44 PM
-- Generation Time: Jun 26, 2023 at 04:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cysdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(200) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `contact_number` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `last_name`, `first_name`, `middle_name`, `contact_number`, `email`, `address`, `image`, `user`, `password`) VALUES
(7, 'qaz, qaz qaz', 'qaz', 'qaz', 'qaz', 1, 'qaz@qaz', 'qazqaz', '', 'qaz@qaz', '$2y$10$LudrsmGWjTQfFGxYiaesOeV4WVk426Yh1KmupaDaIc6wc7xjeCJyW'),
(8, 'qwea, qwe qwe', 'qwea', 'qwe', 'qwe', 123, 'qwe@qwe', 'qwe', '', 'qwe@qwe', '$2y$10$rwj3q8rJCZsaVp9QRGnXhe3CqCv/m.vyZrn3hnayq51R1b2zj/QrS');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `uploadId` int(11) NOT NULL,
  `uploadDate` date NOT NULL DEFAULT current_timestamp(),
  `announcement` longtext NOT NULL,
  `uploader` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`uploadId`, `uploadDate`, `announcement`, `uploader`, `category`) VALUES
(4, '2023-06-26', 'sdfsdf', 'qaz@qaz', ''),
(5, '2023-06-26', 'sdfsdf', 'qaz@qaz', ''),
(8, '2023-06-26', 'asd', 'qaz@qaz', ''),
(9, '2023-06-26', 'asd', 'qaz@qaz', ''),
(10, '2023-06-26', 'asd', 'qaz@qaz', ''),
(11, '2023-06-26', 'asd', 'qaz@qaz', ''),
(12, '2023-06-26', 'asd', 'qaz@qaz', ''),
(13, '2023-06-26', 'asd', 'qaz@qaz', ''),
(14, '2023-06-26', 'asd', 'qaz@qaz', ''),
(17, '2023-07-06', 'asdasd', 'qaz@qaz', 'applicant'),
(18, '2023-07-06', 'asdasd', 'qaz@qaz', ''),
(19, '2023-07-06', 'asdasd', 'qaz@qaz', 'applicant'),
(20, '2023-07-06', 'asdasdasdasd', 'qaz@qaz', ''),
(21, '2023-07-06', 'asdasdasdasd', 'qaz@qaz', ''),
(22, '2023-07-06', 'asdasdasdasd', 'qaz@qaz', ''),
(25, '2023-07-06', 'asdasdad', 'qaz@qaz', ''),
(26, '2023-07-06', 'asdasdad', 'qaz@qaz', ''),
(27, '2023-07-06', 'asdasdad', 'qaz@qaz', ''),
(28, '2023-07-08', 'asdawd', 'qaz@qaz', 'applicant'),
(29, '2023-07-08', 'asdasd', 'qaz@qaz', ''),
(30, '2023-07-08', 'asdasdq', 'qaz@qaz', 'scholar'),
(31, '2023-07-08', 'asdasd', 'qaz@qaz', ''),
(32, '2023-07-08', 'aweqweqwe', 'qaz@qaz', 'applicant'),
(33, '2023-07-08', 'sdfwsew', 'qaz@qaz', 'scholar'),
(34, '2023-07-08', 'sdfsewr', 'qaz@qaz', 'applicant'),
(35, '2023-07-08', 'sdfewr', 'qaz@qaz', ''),
(36, '2023-07-08', 'sdfwserf', 'qaz@qaz', 'scholar'),
(37, '2023-08-01', 'qwe', 'qaz@qaz', 'applicant'),
(38, '2023-08-01', '123123', 'qaz@qaz', 'scholar'),
(39, '2023-08-01', 'qweqwe', 'qaz@qaz', 'applicant'),
(41, '2023-08-01', 'q', 'qaz@qaz', 'applicant');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `applicant_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `civilStatus` varchar(10) NOT NULL,
  `voter` varchar(5) NOT NULL,
  `birthDate` date NOT NULL,
  `birthPlace` varchar(100) NOT NULL,
  `citizenship` varchar(10) NOT NULL,
  `fullAddress` varchar(255) NOT NULL,
  `houseAddress` varchar(100) NOT NULL,
  `streetAddress` varchar(100) NOT NULL,
  `barangayAddress` varchar(100) NOT NULL,
  `contactNum1` int(20) NOT NULL,
  `contactNum2` int(20) NOT NULL,
  `2x2Pic` longblob NOT NULL,
  `signaturePic` longblob NOT NULL,
  `schoolName` varchar(100) NOT NULL,
  `schoolAddress` varchar(100) NOT NULL,
  `schoolType` varchar(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `yearLevel` varchar(50) NOT NULL,
  `fatherName` varchar(100) NOT NULL,
  `fatherStatus` varchar(20) NOT NULL,
  `fatherAddress` varchar(100) NOT NULL,
  `fatherContact` int(20) NOT NULL,
  `fatherOccupation` varchar(50) NOT NULL,
  `fatherEduc` varchar(50) NOT NULL,
  `motherName` varchar(100) NOT NULL,
  `motherStatus` varchar(50) NOT NULL,
  `motherAddress` varchar(100) NOT NULL,
  `motherContact` int(20) NOT NULL,
  `motherOccupation` varchar(50) NOT NULL,
  `motherEduc` varchar(50) NOT NULL,
  `guardianName` varchar(100) NOT NULL,
  `guardianAddress` varchar(100) NOT NULL,
  `guardianContact` int(20) NOT NULL,
  `guardianOccupation` varchar(50) NOT NULL,
  `guardianEduc` varchar(50) NOT NULL,
  `sibling1` varchar(200) NOT NULL,
  `sibling2` varchar(200) NOT NULL,
  `sibling3` varchar(200) NOT NULL,
  `sibling4` varchar(200) NOT NULL,
  `sibling5` varchar(200) NOT NULL,
  `sibling6` varchar(200) NOT NULL,
  `sizeFamily` int(50) NOT NULL,
  `annualGross` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`applicant_id`, `fullName`, `lastName`, `firstName`, `middleName`, `status`, `gender`, `civilStatus`, `voter`, `birthDate`, `birthPlace`, `citizenship`, `fullAddress`, `houseAddress`, `streetAddress`, `barangayAddress`, `contactNum1`, `contactNum2`, `2x2Pic`, `signaturePic`, `schoolName`, `schoolAddress`, `schoolType`, `course`, `yearLevel`, `fatherName`, `fatherStatus`, `fatherAddress`, `fatherContact`, `fatherOccupation`, `fatherEduc`, `motherName`, `motherStatus`, `motherAddress`, `motherContact`, `motherOccupation`, `motherEduc`, `guardianName`, `guardianAddress`, `guardianContact`, `guardianOccupation`, `guardianEduc`, `sibling1`, `sibling2`, `sibling3`, `sibling4`, `sibling5`, `sibling6`, `sizeFamily`, `annualGross`) VALUES
(2, '', 'asd', 'asdwq', 'qwe', 'done', 'male', 'single', 'yes', '2023-04-04', 'sadqwe', 'qweqwe', '', 'asdqwe', 'asdwqe', 'asdawd', 123123, 123123123, '', '', 'qweqweqw', 'eqweqwe', 'public', 'qwe12', 'als', 'qweq2e', 'alive', 'qweq', 2123, 'eqwe', 'qweqwe', 'qweqwe', 'alive', 'qweqwe', 3123, 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 123123, 'qweq2', 'qweqwe', '', '', '', '', '', '', 12312, 213123123),
(18, 'asd, asdasd asdasd', 'asd', 'asdasd', 'asdasd', 'done', 'male', 'single', 'yes', '2023-05-31', 'asdasd', 'qweqwe', '', 'qwe', 'qweqwe', 'qweq', 123123, 123123, '', '', 'qweqwe', 'qweqwe', 'public', 'qweqwe', 'als', 'qweqwe', 'alive', 'eqweqweqasd', 123123, 'qwe', 'qwe', 'qweqwe', 'alive', 'qweqwe', 123, 'qwe', 'qwe', 'qweqwe', 'qweqwe', 213123, 'qweqwe', 'qweqwe', 'dasd', 'asdasd', 'asdas', 'dasd', 'asdasd', 'asdasd', 123123, 123123123),
(19, 'zxczxczxczxc, zxczxc zxczxc', 'zxczxczxczxc', 'zxczxc', 'zxczxc', 'done', 'male', 'single', 'yes', '2023-06-30', 'zxczxc', 'zxczxc', '', 'zxczxc', 'zxc', 'zxczxczxc', 123, 123123, '', '', 'zxczxc', 'zxczxc', 'public', 'zxczxczxc', 'als', '', 'alive', '', 0, '', '', '', 'alive', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(20, 'qwe, qwe qwe', 'qwe', 'qwe', 'qwe', 'done', 'male', 'single', 'yes', '2023-07-04', 'qweqwe', 'qweasd', '', '123123', 'qweqwe', 'qweqweqwe', 123123123, 123123, '', '', 'qweqwe', 'qweqwe', 'public', 'qweqweqweqweqwe', 'als', 'qweqweqweqwe', 'alive', 'qweqwe', 123123, 'qweqwe', 'qweqweqwe', '', 'alive', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 12),
(21, 'qwe, qwe qwe', 'qwe', 'qwe', 'qwe', 'done', 'male', 'single', 'yes', '2023-07-04', 'qweqwe', 'qweasd', '', '123123', 'qweqwe', 'qweqweqwe', 123123123, 123123, '', '', 'qweqwe', 'qweqwe', 'public', 'qweqweqweqweqwe', 'als', 'qweqweqweqwe', 'alive', 'qweqwe', 123123, 'qweqwe', 'qweqweqwe', '', 'alive', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 12),
(22, 'qwe', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(23, 'qwe', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(24, 'a', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(25, 'a', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(26, 'q', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration_approval`
--

CREATE TABLE `registration_approval` (
  `action_id` int(100) NOT NULL,
  `application_id` int(100) NOT NULL,
  `action_type` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_approval`
--

INSERT INTO `registration_approval` (`action_id`, `application_id`, `action_type`, `date`) VALUES
(1, 19, 'approve', '0000-00-00 00:00:00'),
(2, 19, 'approve', '2023-07-02 19:46:39'),
(3, 19, 'decline', '2023-07-02 19:51:46'),
(4, 19, 'approve', '2023-07-02 19:53:02'),
(5, 19, 'decline', '2023-07-02 19:53:05'),
(6, 19, 'approve', '2023-07-02 19:53:22'),
(7, 19, 'approve', '2023-07-02 20:00:34'),
(8, 21, 'approve', '2023-07-02 20:07:51'),
(9, 22, 'decline', '2023-07-02 20:09:04'),
(10, 23, 'decline', '2023-07-02 20:09:56'),
(11, 22, 'decline', '2023-07-02 20:10:05'),
(12, 20, 'approve', '2023-07-02 20:11:25'),
(13, 18, 'approve', '2023-07-02 20:11:31'),
(14, 2, 'approve', '2023-07-09 19:58:10'),
(15, 24, 'decline', '2023-07-09 22:25:05'),
(16, 25, 'decline', '2023-07-09 23:25:06'),
(17, 26, 'decline', '2023-08-02 00:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `position` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contactNum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `fullName`, `last_name`, `first_name`, `middle_name`, `position`, `user`, `password`, `contactNum`, `address`, `email`, `image`) VALUES
(160, ',  ', '', '', '', '', 'asdasdasdasdasdasd', '$2y$10$QTcLC/BCbV1FM63BFLVGKOmwj7gPT0WihA2juDn4QnfEKuJIGu2JC', 0, '', 'asdasdasdasdasdasd', ''),
(165, 'asdasd,  ', 'asdasd', '', '', '', 'QASs', '$2y$10$VO3drbm7hfKF/byFJ9SLieskVGEOWSCFrL3ny0b8QFxQQhIPSXXOq', 0, '', 'QASs', ''),
<<<<<<<<< Temporary merge branch 1
(166, ',  asd', '', '', 'asd', '', 'asd', '$2y$10$Ze5h8a/n.MJeuQ650sJ/m.r30W.ICZxKb.v6crisHbSbqT58cX08e', 0, '', 'asd', '');
=========
(166, ',  asd', '', '', 'asd', '', 'asd', '$2y$10$Ze5h8a/n.MJeuQ650sJ/m.r30W.ICZxKb.v6crisHbSbqT58cX08e', 0, '', 'asd', ''),
(167, 'qwem,  ', 'qwem', '', '', '', 'qweqweqweqwe', '$2y$10$8qmU/eYjAALSYcgRCLZU5eNiDkoCpCtqr0skiWBwUC30VloS9Ne66', 0, '', 'qweqweqweqweqwe', '');
>>>>>>>>> Temporary merge branch 2

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`uploadId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `registration_approval`
--
ALTER TABLE `registration_approval`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `registration_approval_ibfk_1` (`application_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
<<<<<<<<< Temporary merge branch 1
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT;
=========
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
>>>>>>>>> Temporary merge branch 2

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
<<<<<<<<< Temporary merge branch 1
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
=========
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
>>>>>>>>> Temporary merge branch 2
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
