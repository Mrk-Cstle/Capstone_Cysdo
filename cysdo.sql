-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 07:11 PM
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
  `birth_date` date DEFAULT NULL,
  `contact_number` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `last_name`, `first_name`, `middle_name`, `birth_date`, `contact_number`, `email`, `address`, `gender`, `civil_status`, `citizenship`, `image`, `user`, `password`) VALUES
(58, 'ASD, ASD ASD', 'ASD', 'ASD', 'ASD', NULL, 123, 'asd@asd', '', '', '', '', '', 'asd@asd', '$2y$10$Z04uClSZuLBntGXNgbt85.9SywufHe6T5m4hg2IKqj4CBUBp9.WWS'),
(60, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', NULL, 123123, 'markdavid.castillo.s@bulsu.edu.ph', '', '', '', '', '', 'admin', '$2y$10$/1upBbezwg3LfSZDm2vdDu4aEjAIB5b138KYNyhN5mdfE78YGamhC');

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
(46, '2023-09-10', 'qweq', '', 'scholar'),
(58, '2023-11-16', 'z', 'Castillo, Mark David S.', 'applicant'),
(59, '2023-11-16', 'asdasdasd', 'Castillo, Mark David S.', 'applicant'),
(60, '2023-11-16', 'asdasd', 'Castillo, Mark David S.', 'applicant'),
(61, '2023-11-16', 'asdasds', 'Castillo, Mark David S.', 'applicant'),
(62, '2023-11-16', 'hello', 'Castillo, Mark David S.', 'applicant'),
(63, '2023-11-16', 'hello', 'Castillo, Mark David S.', 'applicant'),
(64, '2023-11-16', 'hello', 'Castillo, Mark David S.', 'applicant'),
(65, '2023-11-16', 'hi', 'Castillo, Mark David S.', 'applicant'),
(66, '2023-11-16', 'zxc\n', 'Castillo, Mark David S.', 'applicant'),
(67, '2023-11-16', 'asd', 'Castillo, Mark David S.', 'scholar'),
(68, '2023-11-16', 'as', 'Castillo, Mark David S.', 'applicant'),
(69, '2023-11-16', 'hi', 'Castillo, Mark David S.', 'applicant'),
(70, '2023-11-16', 'qwe', 'Castillo, Mark David S.', 'applicant'),
(71, '2023-11-16', 'qwe', 'Castillo, Mark David S.', ''),
(72, '2023-11-16', 'asd', 'Castillo, Mark David S.', 'applicant'),
(73, '2023-11-16', 'gege', 'Castillo, Mark David S.', 'applicant'),
(74, '2023-11-16', 'hatdog', 'Castillo, Mark David S.', 'applicant'),
(75, '2023-11-20', 'asd', 'Castillo, Mark David S.', 'applicant'),
(76, '2023-11-20', '', 'Castillo, Mark David S.', 'applicant'),
(77, '2023-11-20', '', 'Castillo, Mark David S.', 'applicant'),
(78, '2023-11-20', 'asd', 'Castillo, Mark David S.', 'applicant'),
(79, '2023-11-20', 'asd', 'Castillo, Mark David S.', 'applicant'),
(80, '2023-11-20', 'asdasdasd', 'Castillo, Mark David S.', 'applicant'),
(81, '2023-11-20', 'zxc', 'Castillo, Mark David S.', 'applicant'),
(82, '2023-11-20', 'asdasdasd', 'Castillo, Mark David S.', 'applicant'),
(83, '2023-11-20', 'asdasdasdasdasdasd', 'Castillo, Mark David S.', 'applicant'),
(84, '2023-11-20', 'asdasdasdasdasdasd', 'Castillo, Mark David S.', 'applicant'),
(85, '2023-11-20', 'asdasdasdasdasdasd', 'Castillo, Mark David S.', 'applicant'),
(86, '2023-11-20', 'asdasdasdasdasdasd', 'Castillo, Mark David S.', 'applicant'),
(87, '2023-11-20', 'asdasdasdasdasdasd', 'Castillo, Mark David S.', 'applicant'),
(88, '2023-11-20', 'zxczxc', 'Castillo, Mark David S.', 'applicant'),
(89, '2023-11-20', 'asd', 'Castillo, Mark David S.', 'applicant'),
(90, '2023-11-20', 'asd', 'Castillo, Mark David S.', 'scholar'),
(91, '2023-11-20', 'zxc', 'Castillo, Mark David S.', 'scholar'),
(92, '2023-11-20', 'asdasd', 'Castillo, Mark David S.', 'applicant'),
(93, '2023-11-20', 'asd', 'Castillo, Mark David S.', 'applicant'),
(94, '2023-11-20', 'iop', 'Castillo, Mark David S.', 'applicant');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(100) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `staffId` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_id` int(11) DEFAULT NULL,
  `scholar_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender`, `staffId`, `message`, `timestamp`, `admin_id`, `scholar_id`, `is_read`) VALUES
(209, 'City Youth and Sports Development Office - CSJDM', NULL, 'asdasd', '2023-11-14 14:53:30', 24, 14, 1),
(210, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-14 15:19:58', 24, 14, 1),
(211, 'City Youth and Sports Development Office - CSJDM', 168, 'asd', '2023-11-14 16:18:18', NULL, 14, 1),
(212, 'City Youth and Sports Development Office - CSJDM', NULL, 'hi', '2023-11-19 18:09:48', 24, 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `examination_id` int(11) NOT NULL,
  `result` varchar(255) NOT NULL,
  `requirements_status` varchar(100) DEFAULT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examination_requirements`
--

CREATE TABLE `examination_requirements` (
  `exam_action_id` int(11) NOT NULL,
  `examination_id` int(11) NOT NULL,
  `requirement_actions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newscholar_award`
--

CREATE TABLE `newscholar_award` (
  `scholar_release_id` int(11) NOT NULL,
  `scholar_id` int(11) NOT NULL,
  `newrelease_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `contactNum1` varchar(20) NOT NULL,
  `contactNum2` varchar(255) NOT NULL,
  `pic2x2` varchar(255) NOT NULL,
  `signaturePic` varchar(255) NOT NULL,
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
  `annualGross` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_approval`
--

CREATE TABLE `registration_approval` (
  `action_id` int(100) NOT NULL,
  `application_id` int(100) NOT NULL,
  `action_type` varchar(50) NOT NULL,
  `exam_status` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_control`
--

CREATE TABLE `registration_control` (
  `reg_control_id` int(11) NOT NULL,
  `quota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_control`
--

INSERT INTO `registration_control` (`reg_control_id`, `quota`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `registration_requirements`
--

CREATE TABLE `registration_requirements` (
  `requirements_id` int(100) NOT NULL,
  `examination_id` int(100) NOT NULL,
  `image2x2` varchar(255) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `bir` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `health` varchar(100) NOT NULL,
  `curriculum` varchar(100) NOT NULL,
  `residency` varchar(100) NOT NULL,
  `map` varchar(100) NOT NULL,
  `house` varchar(100) NOT NULL,
  `moral` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `cog` varchar(100) NOT NULL,
  `coe` varchar(100) NOT NULL,
  `stub` varchar(100) NOT NULL,
  `landbank` varchar(100) NOT NULL,
  `photocopy` varchar(100) NOT NULL,
  `letter` varchar(100) NOT NULL,
  `req_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `renewal`
--

CREATE TABLE `renewal` (
  `renewal_id` int(100) NOT NULL,
  `scholar_id` int(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `renewal_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `current_yr` varchar(100) NOT NULL,
  `form` varchar(255) NOT NULL,
  `previous_cor` varchar(255) NOT NULL,
  `cog` varchar(255) NOT NULL,
  `atm` varchar(255) NOT NULL,
  `current_cor` varchar(255) NOT NULL,
  `dtr` varchar(255) NOT NULL,
  `e3_form` varchar(100) NOT NULL,
  `curriculum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `renewal_award`
--

CREATE TABLE `renewal_award` (
  `award_id` int(100) NOT NULL,
  `renewal_id` int(100) NOT NULL,
  `award_status` varchar(100) DEFAULT NULL,
  `semester_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `renewal_control`
--

CREATE TABLE `renewal_control` (
  `renew_control_id` int(11) NOT NULL,
  `switch_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renewal_control`
--

INSERT INTO `renewal_control` (`renew_control_id`, `switch_status`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `renewal_process`
--

CREATE TABLE `renewal_process` (
  `process_id` int(255) NOT NULL,
  `renewal_id` int(255) NOT NULL,
  `process_status` varchar(100) DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `uploader` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `scholar_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `scholar_status` varchar(255) DEFAULT NULL,
  `scholar_award_status` varchar(100) NOT NULL,
  `status_lastsem` varchar(100) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `applicant_id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `voter` varchar(100) NOT NULL,
  `contact_num1` varchar(20) NOT NULL,
  `contact_num2` varchar(20) NOT NULL,
  `full_address` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `telegram` varchar(100) NOT NULL,
  `atm_number` varchar(255) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `years_course` int(100) NOT NULL,
  `current_yr` varchar(100) NOT NULL,
  `degree_or_non` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_address` varchar(100) NOT NULL,
  `renew_1stYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_1stYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_2ndYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_2ndYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_3rdYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_3rdYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_4thYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_4thYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_5thYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_5thYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_6thYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_6thYr_2ndSem` varchar(100) DEFAULT NULL,
  `c_service1st` int(100) DEFAULT NULL,
  `c_service2nd` int(100) DEFAULT NULL,
  `approve_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`scholar_id`, `image`, `scholar_status`, `scholar_award_status`, `status_lastsem`, `user`, `password`, `applicant_id`, `full_name`, `last_name`, `first_name`, `middle_name`, `age`, `gender`, `voter`, `contact_num1`, `contact_num2`, `full_address`, `barangay`, `telegram`, `atm_number`, `facebook`, `email`, `course`, `years_course`, `current_yr`, `degree_or_non`, `school_name`, `school_address`, `renew_1stYr_1stSem`, `renew_1stYr_2ndSem`, `renew_2ndYr_1stSem`, `renew_2ndYr_2ndSem`, `renew_3rdYr_1stSem`, `renew_3rdYr_2ndSem`, `renew_4thYr_1stSem`, `renew_4thYr_2ndSem`, `renew_5thYr_1stSem`, `renew_5thYr_2ndSem`, `renew_6thYr_1stSem`, `renew_6thYr_2ndSem`, `c_service1st`, `c_service2nd`, `approve_date`) VALUES
(56, '', NULL, '', '', '', '$2y$10$mV2X27DVTi8BMK789cl4XOFnwwTry2iQ1mpN8ctW/oTNXsXFYAvym', 131, 'asdasdasdasdasdasd', 'asdasd', 'asdas', 'dasdasd', 0, '', '', '9612479632', '', '', '', '', '', '', '', '', 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `scholar_archive`
--

CREATE TABLE `scholar_archive` (
  `scholar_id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `scholar_award_status` varchar(100) NOT NULL,
  `status_lastsem` varchar(100) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `applicant_id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `voter` varchar(100) NOT NULL,
  `contact_num1` varchar(20) NOT NULL,
  `contact_num2` varchar(20) NOT NULL,
  `full_address` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `telegram` varchar(100) NOT NULL,
  `atm_number` varchar(255) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `years_course` int(100) NOT NULL,
  `current_yr` varchar(100) NOT NULL,
  `degree_or_non` varchar(100) DEFAULT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_address` varchar(100) NOT NULL,
  `renew_1stYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_1stYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_2ndYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_2ndYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_3rdYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_3rdYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_4thYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_4thYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_5thYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_5thYr_2ndSem` varchar(100) DEFAULT NULL,
  `renew_6thYr_1stSem` varchar(100) DEFAULT NULL,
  `renew_6thYr_2ndSem` varchar(100) DEFAULT NULL,
  `c_service1st` int(100) DEFAULT NULL,
  `c_service2nd` int(100) DEFAULT NULL,
  `approve_date` date NOT NULL DEFAULT current_timestamp(),
  `remove_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholar_archive`
--

INSERT INTO `scholar_archive` (`scholar_id`, `type`, `image`, `scholar_award_status`, `status_lastsem`, `user`, `password`, `applicant_id`, `full_name`, `last_name`, `first_name`, `middle_name`, `age`, `gender`, `voter`, `contact_num1`, `contact_num2`, `full_address`, `barangay`, `telegram`, `atm_number`, `facebook`, `email`, `course`, `years_course`, `current_yr`, `degree_or_non`, `school_name`, `school_address`, `renew_1stYr_1stSem`, `renew_1stYr_2ndSem`, `renew_2ndYr_1stSem`, `renew_2ndYr_2ndSem`, `renew_3rdYr_1stSem`, `renew_3rdYr_2ndSem`, `renew_4thYr_1stSem`, `renew_4thYr_2ndSem`, `renew_5thYr_1stSem`, `renew_5thYr_2ndSem`, `renew_6thYr_1stSem`, `renew_6thYr_2ndSem`, `c_service1st`, `c_service2nd`, `approve_date`, `remove_date`) VALUES
(14, 'remove', 'ASDSDF_profile.jpg', 'released_renew_2ndYr_1stSem_', 'renew_2ndYr_1stSem_', 'qwe', '$2y$10$FnJgB80jcRARksccpa92q.xEX96hGNpkh6JtbRT4Z7FHyBZFrjK7y', 0, 'ASDSDF, XCVSDF SDFXCV', 'ASDSDF', 'XCVSDF', 'SDFXCV', 1321, 'asd', 'asd', '235345', '123', 'asd', 'asd', 'qwe', '0', 'qwes', ' asd  ', '', 0, '', ' ', '', '', 'approve renewal', 'approve renewal', 'approve renewal', 'approve renewal', '', '', '', '', '', '', '', '', 22, 0, '2023-11-03', '2023-11-20'),
(18, 'remove', '', '', '', 'asd', '$2y$10$L5Amwznv595EQR9RDPrNYuO4xXN37r1EgLZEMNFhZqaWX3jt0JQem', 76, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 0, 'male', 'yes', '123123123', '123123123', '', 'Assumption', '', '', '', 'castillo.markdavid64@gmail.com', 'asdasdad', 0, 'ALS Graduate', '', 'qweas', 'dasdas', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-16', '2023-11-20'),
(19, 'remove', '', '', '', '', '$2y$10$MDHQKpsjtPHxCV9eHdZr5O8v0quYj4mlPSZpUr2whQl8B.8YScNL2', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-17', '2023-11-19'),
(26, 'remove', '', '', '', 'Castillo', '$2y$10$PZiUxHvpVUhjKoH5CDXH6eXUOLGgFljlqQ14e5eWiYU1iignSd8li', 96, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 0, 'male', 'yes', '123123123', '123123123', '', 'Assumption', '', '', '', '', 'asdasdad', 0, 'ALS Graduate', '', 'qweas', 'dasdas', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-17', '2023-11-20'),
(34, 'remove', '', '', '', 'qweqdasd', '$2y$10$K9mF37tJAR2cF8q4wcUw1OEPo45LDqYjBTmCAXVKBgCRVYMv0VxiS', 125, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 0, 'male', 'yes', '1123123', 'castillo.markdavid64', 'asdasd  asdasd  Bagong Buhay I', 'Bagong Buhay I', '', '', '', '', 'qwe', 0, 'Grade 12', '', 'qwe', 'qwe', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-17', '2023-11-20'),
(48, 'remove', '', '', '', 'dfg', '$2y$10$JgAhRMuh5vxKTWoDUIfwW.Rff3Mg1x52up20WgS5bKdJa4hlL88LS', 126, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 0, 'male', 'yes', '1123123', 'castillo.markdavid64', 'asdasd  asdasd  Bagong Buhay I', 'Bagong Buhay I', '', '', '', '', 'qwe', 0, 'Grade 12', '', 'qwe', 'qwe', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-18', '2023-11-19'),
(54, 'remove', '', 'New Scholar', '', 'castillo.markdavid64@gmail.com', '$2y$10$042PNHhGwgY2HOKGvC4iUeWpgt.FCKuTFjP7d.p3abXn1K1jGskgq', 128, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 0, 'male', 'yes', '1123123', 'castillo.markdavid64', 'asdasd  asdasd  Bagong Buhay I', 'Bagong Buhay I', '', '', '', '', 'qwe', 0, 'Grade 12', '', 'qwe', 'qwe', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-19', '2023-11-20'),
(55, 'remove', '', '', '', 'martinmendoza03.mm@gmail.com', '$2y$10$EIaNEseqysjpdJzrFPVVUO5qlaJ6wzUsMCuLxRIBjUt.xa.Yyn.Qq', 132, 'asdasdasdasd', '', '', '', 0, '', '', '9164983650', 'martinmendoza03.mm@g', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-20', '2023-11-20');

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
(187, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'student', 'staff', '$2y$10$HlasLXastz0ZToIlmdd0JO36q1kHNlnKQ63hobGzwe.AUpT1/g0NG', 2147483647, '', 'castillo.markdavid64@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `todo_text` varchar(255) NOT NULL,
  `completed` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `todo_text`, `completed`, `created_at`) VALUES
(36, 'asd', 1, '2023-10-08 13:47:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`uploadId`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`examination_id`),
  ADD UNIQUE KEY `action_id` (`action_id`),
  ADD KEY `FK_ExaminationAction` (`action_id`);

--
-- Indexes for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  ADD PRIMARY KEY (`exam_action_id`),
  ADD KEY `FK_Examination_Action` (`examination_id`);

--
-- Indexes for table `newscholar_award`
--
ALTER TABLE `newscholar_award`
  ADD PRIMARY KEY (`scholar_release_id`),
  ADD KEY `FK_NewScholar` (`scholar_id`);

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
  ADD UNIQUE KEY `application_id` (`application_id`),
  ADD KEY `registration_approval_ibfk_1` (`application_id`);

--
-- Indexes for table `registration_control`
--
ALTER TABLE `registration_control`
  ADD PRIMARY KEY (`reg_control_id`);

--
-- Indexes for table `registration_requirements`
--
ALTER TABLE `registration_requirements`
  ADD PRIMARY KEY (`requirements_id`),
  ADD UNIQUE KEY `applicant_id` (`examination_id`);

--
-- Indexes for table `renewal`
--
ALTER TABLE `renewal`
  ADD PRIMARY KEY (`renewal_id`),
  ADD KEY `FK_Renewal` (`scholar_id`);

--
-- Indexes for table `renewal_award`
--
ALTER TABLE `renewal_award`
  ADD PRIMARY KEY (`award_id`),
  ADD KEY `FK_Renewal_Award` (`renewal_id`);

--
-- Indexes for table `renewal_control`
--
ALTER TABLE `renewal_control`
  ADD PRIMARY KEY (`renew_control_id`);

--
-- Indexes for table `renewal_process`
--
ALTER TABLE `renewal_process`
  ADD PRIMARY KEY (`process_id`),
  ADD UNIQUE KEY `renewal_id` (`renewal_id`),
  ADD UNIQUE KEY `uploader` (`uploader`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`scholar_id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `scholar_archive`
--
ALTER TABLE `scholar_archive`
  ADD PRIMARY KEY (`scholar_id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user` (`user`);

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
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  MODIFY `exam_action_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newscholar_award`
--
ALTER TABLE `newscholar_award`
  MODIFY `scholar_release_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `registration_approval`
--
ALTER TABLE `registration_approval`
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `registration_control`
--
ALTER TABLE `registration_control`
  MODIFY `reg_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_requirements`
--
ALTER TABLE `registration_requirements`
  MODIFY `requirements_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `renewal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `renewal_award`
--
ALTER TABLE `renewal_award`
  MODIFY `award_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `renewal_control`
--
ALTER TABLE `renewal_control`
  MODIFY `renew_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `renewal_process`
--
ALTER TABLE `renewal_process`
  MODIFY `process_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examination`
--
ALTER TABLE `examination`
  ADD CONSTRAINT `FK_ExaminationAction` FOREIGN KEY (`action_id`) REFERENCES `registration_approval` (`action_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  ADD CONSTRAINT `FK_Examination_Action` FOREIGN KEY (`examination_id`) REFERENCES `examination` (`examination_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `newscholar_award`
--
ALTER TABLE `newscholar_award`
  ADD CONSTRAINT `FK_NewScholar` FOREIGN KEY (`scholar_id`) REFERENCES `scholar` (`scholar_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration_approval`
--
ALTER TABLE `registration_approval`
  ADD CONSTRAINT `registration_approval_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `registration` (`applicant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration_requirements`
--
ALTER TABLE `registration_requirements`
  ADD CONSTRAINT `FK_Examination_Requirements` FOREIGN KEY (`examination_id`) REFERENCES `examination` (`examination_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `renewal`
--
ALTER TABLE `renewal`
  ADD CONSTRAINT `FK_Renewa_Archive` FOREIGN KEY (`scholar_id`) REFERENCES `scholar` (`scholar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Renewal` FOREIGN KEY (`scholar_id`) REFERENCES `scholar` (`scholar_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `renewal_award`
--
ALTER TABLE `renewal_award`
  ADD CONSTRAINT `FK_Renewal_Award` FOREIGN KEY (`renewal_id`) REFERENCES `renewal` (`renewal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `renewal_process`
--
ALTER TABLE `renewal_process`
  ADD CONSTRAINT `FK_Renewal_Process` FOREIGN KEY (`renewal_id`) REFERENCES `renewal` (`renewal_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
