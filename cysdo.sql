-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 08:25 AM
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
  `contact_number` varchar(200) NOT NULL,
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
(60, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', '0000-00-00', '9914548209', 'markdavid.castillo.s@bulsu.edu.ph', '       ', 'male', '', '', 'Castillo_profile.jpeg', 'admin', '$2y$10$/1upBbezwg3LfSZDm2vdDu4aEjAIB5b138KYNyhN5mdfE78YGamhC');

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
(95, '2023-11-29', 'qwe', 'Castillo, Mark David Santos', 'applicant'),
(96, '2023-11-29', 'asd', 'Castillo, Mark David Santos', 'scholar');

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
(215, 'City Youth and Sports Development Office - CSJDM', 187, 'hi', '2023-11-21 06:00:02', NULL, 56, 1),
(216, 'qwe, qwe qweqwe', 183, 'asd', '2023-11-21 16:35:58', 24, 72, 1);

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

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`examination_id`, `result`, `requirements_status`, `action_id`) VALUES
(121, 'pass', 'Approve', 164),
(122, 'pass', 'Approve', 165),
(123, 'pass', 'Approve', 166),
(124, 'pass', 'Approve', 167),
(125, 'pass', 'Approve', 168),
(126, 'pass', 'Approve', 169),
(129, 'pass', 'Approve', 174);

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
  `scholar_release_id` int(100) NOT NULL,
  `scholar_id` int(100) NOT NULL,
  `newrelease_status` varchar(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newscholar_award`
--

INSERT INTO `newscholar_award` (`scholar_release_id`, `scholar_id`, `newrelease_status`, `date`) VALUES
(21, 72, 'done', '2023-11-22'),
(22, 73, NULL, '2023-11-30'),
(23, 74, NULL, '2023-11-30'),
(24, 75, NULL, '2023-11-30'),
(26, 78, NULL, '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `newscholar_award_archive`
--

CREATE TABLE `newscholar_award_archive` (
  `newscholar_award_archive_id` int(100) NOT NULL,
  `scholar_release_id` int(100) NOT NULL,
  `scholar_id` int(100) NOT NULL,
  `newrelease_status` varchar(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
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

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`applicant_id`, `fullName`, `lastName`, `firstName`, `middleName`, `status`, `gender`, `civilStatus`, `voter`, `birthDate`, `birthPlace`, `citizenship`, `fullAddress`, `houseAddress`, `streetAddress`, `barangayAddress`, `contactNum1`, `contactNum2`, `pic2x2`, `signaturePic`, `schoolName`, `schoolAddress`, `schoolType`, `course`, `yearLevel`, `fatherName`, `fatherStatus`, `fatherAddress`, `fatherContact`, `fatherOccupation`, `fatherEduc`, `motherName`, `motherStatus`, `motherAddress`, `motherContact`, `motherOccupation`, `motherEduc`, `guardianName`, `guardianAddress`, `guardianContact`, `guardianOccupation`, `guardianEduc`, `sibling1`, `sibling2`, `sibling3`, `sibling4`, `sibling5`, `sibling6`, `sizeFamily`, `annualGross`, `date`) VALUES
(181, 'qwe, qwe qweqwe', 'qwe', 'qwe', 'qweqwe', 'done', 'male', 'single', 'yes', '2023-11-20', 'asdqwe', 'Arabic-', 'qwe  qweq  Assumption', 'qwe', 'qweq', 'Assumption', '123', 'asd@asd', 'qwe_655cdc06e6964_2x2image.jpeg', '', 'qwe', 'qwe', 'Public', 'qe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 123, '2023-11-22'),
(182, 'asd, asd asd', 'asd', 'asd', 'asd', 'done', 'male', 'single', 'yes', '2023-11-21', 'qwe', 'Arabic-', 'qwe  qwe  Assumption', 'qwe', 'qwe', 'Assumption', '123123123', 'qwe@qwe', 'asd_6565edaeeaf72_2x2image.jpeg', '', 'qwe', 'qwe', 'Private', 'qwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 12312, '2023-11-28'),
(183, 'asd, asd ', 'asd', 'asd', '', 'done', 'male', 'single', 'yes', '2023-11-05', 'asd', 'Arabic-', 'qwe  qwe  Assumption', 'qwe', 'qwe', 'Assumption', '9914548209', 'asdasdasd@asdasd.com', 'asd_65675d0e0bb28_2x2image.jpeg', '', 'qwe', 'qwe', 'Public', 'qwe', 'ALS Graduate', 'qwe', '-', '', 0, 'qwe', '', 'qwe', '-', '', 0, 'qwe', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 10, '2023-11-29'),
(184, '123, 123 ', '123', '123', '', 'done', 'male', 'single', 'yes', '2023-11-16', '123', 'Arabic-', '123  asdasdasd  Assumption', '123', 'asdasdasd', 'Assumption', '9914548209', '123@qwe.com', '123_6568257d272a8_2x2image.jpg', '', '123', '123', 'Public', 'qwe', 'Grade 12', 'qweqweqwe', '-', '', 0, '123', '', 'qwe', '-', '', 0, '312', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 10, '2023-11-30'),
(185, '12312, qweqwe ', '12312', 'qweqwe', '', 'done', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', '12312_6568281073435_2x2image.jpg', '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 'ALS Graduate', 'asd', '-', '', 0, 'qwe', '', 'asd', '-', '', 0, 'qwe', '', '', '', 0, '', '', '', '', '', '', '', '', 123123123, 10, '2023-11-30'),
(186, '12312, qweqwe ', '12312', 'qweqwe', '', 'done', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', '12312_6568281272e04_2x2image.jpg', '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 'ALS Graduate', 'asd', '-', '', 0, 'qwe', '', 'asd', '-', '', 0, 'qwe', '', '', '', 0, '', '', '', '', '', '', '', '', 123123123, 10, '2023-11-30'),
(191, '12312, qweqwe ', '12312', 'qweqwe', '', 'done', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', '12312_6568282727880_2x2image.jpg', '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 'ALS Graduate', 'asd', '-', '', 0, 'qwe', '', 'asd', '-', '', 0, 'qwe', '', '', '', 0, '', '', '', '', '', '', '', '', 123123123, 10, '2023-11-30');

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

--
-- Dumping data for table `registration_approval`
--

INSERT INTO `registration_approval` (`action_id`, `application_id`, `action_type`, `exam_status`, `date`) VALUES
(164, 181, 'approve', 'done', '2023-11-22 00:34:22'),
(165, 182, 'approve', 'done', '2023-11-30 01:34:17'),
(166, 183, 'approve', 'done', '2023-11-30 01:55:57'),
(167, 184, 'approve', 'done', '2023-11-30 14:14:06'),
(168, 185, 'approve', 'done', '2023-11-30 14:14:51'),
(169, 186, 'approve', 'done', '2023-11-30 14:15:31'),
(174, 191, 'approve', 'done', '2023-11-30 14:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `registration_archive`
--

CREATE TABLE `registration_archive` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `civilStatus` varchar(255) DEFAULT NULL,
  `voter` varchar(255) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `birthPlace` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `fullAddress` varchar(255) DEFAULT NULL,
  `houseAddress` varchar(255) DEFAULT NULL,
  `streetAddress` varchar(255) DEFAULT NULL,
  `barangayAddress` varchar(255) DEFAULT NULL,
  `contactNum1` varchar(255) DEFAULT NULL,
  `contactNum2` varchar(255) DEFAULT NULL,
  `pic2x2` blob DEFAULT NULL,
  `signaturePic` blob DEFAULT NULL,
  `schoolName` varchar(255) DEFAULT NULL,
  `schoolAddress` varchar(255) DEFAULT NULL,
  `schoolType` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `yearLevel` int(11) DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `fatherStatus` varchar(255) DEFAULT NULL,
  `fatherAddress` varchar(255) DEFAULT NULL,
  `fatherContact` varchar(255) DEFAULT NULL,
  `fatherOccupation` varchar(255) DEFAULT NULL,
  `fatherEduc` varchar(255) DEFAULT NULL,
  `motherName` varchar(255) DEFAULT NULL,
  `motherStatus` varchar(255) DEFAULT NULL,
  `motherAddress` varchar(255) DEFAULT NULL,
  `motherContact` varchar(255) DEFAULT NULL,
  `motherOccupation` varchar(255) DEFAULT NULL,
  `motherEduc` varchar(255) DEFAULT NULL,
  `guardianName` varchar(255) DEFAULT NULL,
  `guardianAddress` varchar(255) DEFAULT NULL,
  `guardianContact` varchar(255) DEFAULT NULL,
  `guardianOccupation` varchar(255) DEFAULT NULL,
  `guardianEduc` varchar(255) DEFAULT NULL,
  `sibling1` varchar(255) DEFAULT NULL,
  `sibling2` varchar(255) DEFAULT NULL,
  `sibling3` varchar(255) DEFAULT NULL,
  `sibling4` varchar(255) DEFAULT NULL,
  `sibling5` varchar(255) DEFAULT NULL,
  `sibling6` varchar(255) DEFAULT NULL,
  `sizeFamily` int(11) DEFAULT NULL,
  `annualGross` decimal(10,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_archive`
--

INSERT INTO `registration_archive` (`id`, `type`, `applicant_id`, `fullName`, `lastName`, `firstName`, `middleName`, `status`, `gender`, `civilStatus`, `voter`, `birthDate`, `birthPlace`, `citizenship`, `fullAddress`, `houseAddress`, `streetAddress`, `barangayAddress`, `contactNum1`, `contactNum2`, `pic2x2`, `signaturePic`, `schoolName`, `schoolAddress`, `schoolType`, `course`, `yearLevel`, `fatherName`, `fatherStatus`, `fatherAddress`, `fatherContact`, `fatherOccupation`, `fatherEduc`, `motherName`, `motherStatus`, `motherAddress`, `motherContact`, `motherOccupation`, `motherEduc`, `guardianName`, `guardianAddress`, `guardianContact`, `guardianOccupation`, `guardianEduc`, `sibling1`, `sibling2`, `sibling3`, `sibling4`, `sibling5`, `sibling6`, `sizeFamily`, `annualGross`, `date`) VALUES
(21, 'Declined', 192, '12312, qweqwe ', '12312', 'qweqwe', '', '', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', 0x31323331325f363536383238323837643931355f327832696d6167652e6a7067, '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 0, 'asd', '-', '', '0', 'qwe', '', 'asd', '-', '', '0', 'qwe', '', '', '', '0', '', '', '', '', '', '', '', '', 123123123, 10.00, '2023-11-29 16:00:00'),
(22, 'Declined', 193, '12312, qweqwe ', '12312', 'qweqwe', '', '', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', 0x31323331325f363536383261343534306431315f327832696d6167652e6a7067, '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 0, 'asd', '-', '', '0', 'qwe', '', 'asd', '-', '', '0', 'qwe', '', '', '', '0', '', '', '', '', '', '', '', '', 123123123, 10.00, '2023-11-29 16:00:00'),
(23, 'Failed Exam', 189, '12312, qweqwe ', '12312', 'qweqwe', '', 'done', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', 0x31323331325f363536383238323438636630645f327832696d6167652e6a7067, '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 0, 'asd', '-', '', '0', 'qwe', '', 'asd', '-', '', '0', 'qwe', '', '', '', '0', '', '', '', '', '', '', '', '', 123123123, 10.00, '2023-11-29 16:00:00'),
(24, 'Failed Exam', 190, '12312, qweqwe ', '12312', 'qweqwe', '', 'done', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', 0x31323331325f363536383238323539333262355f327832696d6167652e6a7067, '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 0, 'asd', '-', '', '0', 'qwe', '', 'asd', '-', '', '0', 'qwe', '', '', '', '0', '', '', '', '', '', '', '', '', 123123123, 10.00, '2023-11-29 16:00:00'),
(25, 'Failed Requirements', 187, '12312, qweqwe ', '12312', 'qweqwe', '', 'done', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', 0x31323331325f363536383238313338346531665f327832696d6167652e6a7067, '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 0, 'asd', '-', '', '0', 'qwe', '', 'asd', '-', '', '0', 'qwe', '', '', '', '0', '', '', '', '', '', '', '', '', 123123123, 10.00, '2023-11-30 06:16:01'),
(26, 'Failed Requirements', 188, '12312, qweqwe ', '12312', 'qweqwe', '', 'done', 'male', 'single', 'yes', '2023-11-08', 'qweqwe', 'Arabic-', '12123  qweqwe  Bagong Buhay I', '12123', 'qweqwe', 'Bagong Buhay I', '9914548209', 'asdasd@asczxcae.com', 0x31323331325f363536383238323238303333385f327832696d6167652e6a7067, '', 'asdas', 'dasdasd', 'Private', 'qweqwe', 0, 'asd', '-', '', '0', 'qwe', '', 'asd', '-', '', '0', 'qwe', '', '', '', '0', '', '', '', '', '', '', '', '', 123123123, 10.00, '2023-11-30 06:17:04');

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
(1, 100);

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

--
-- Dumping data for table `registration_requirements`
--

INSERT INTO `registration_requirements` (`requirements_id`, `examination_id`, `image2x2`, `birth`, `bir`, `cedula`, `health`, `curriculum`, `residency`, `map`, `house`, `moral`, `cor`, `cog`, `coe`, `stub`, `landbank`, `photocopy`, `letter`, `req_status`) VALUES
(53, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(54, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(55, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(56, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(57, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(58, 126, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(61, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve');

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

--
-- Dumping data for table `renewal`
--

INSERT INTO `renewal` (`renewal_id`, `scholar_id`, `semester`, `academic_year`, `renewal_date`, `status`, `current_yr`, `form`, `previous_cor`, `cog`, `atm`, `current_cor`, `dtr`, `e3_form`, `curriculum`) VALUES
(130, 73, 'renew_2ndYr_1stSem', '', '2023-11-30 07:01:06', 'approve', '', '', '', '', '', '', '', '', ''),
(131, 73, 'renew_1stYr_2ndSem', '', '2023-11-30 07:08:01', 'decline', '', '', '', '', '', '', '', '', ''),
(132, 73, 'renew_1stYr_2ndSem', '', '2023-11-30 07:08:29', '', '', '', '', '', '', '', '', '', ''),
(134, 73, 'renew_3rdYr_1stSem', '', '2023-11-30 07:11:18', 'approve', '', '', '', '', '', '', '', '', '');

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

--
-- Dumping data for table `renewal_award`
--

INSERT INTO `renewal_award` (`award_id`, `renewal_id`, `award_status`, `semester_year`) VALUES
(44, 130, 'done', 'renew_2ndYr_1stSem_'),
(45, 134, NULL, 'renew_3rdYr_1stSem_');

-- --------------------------------------------------------

--
-- Table structure for table `renewal_award_archive`
--

CREATE TABLE `renewal_award_archive` (
  `renewal_award_archive_id` int(100) NOT NULL,
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
(1, 1);

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

--
-- Dumping data for table `renewal_process`
--

INSERT INTO `renewal_process` (`process_id`, `renewal_id`, `process_status`, `comment`, `uploader`) VALUES
(109, 134, 'approve', '', '73');

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
(72, '', NULL, 'Released New Scholar', '', 'asd@asd', '$2y$10$pS9ieucgHRjSfhwUk.BrP.51WlKxqZ9Rvsc9MREr8xbnrp6wXb96C', 181, 'qwe, qwe qweqwe', 'qwe', 'qwe', 'qweqwe', 0, 'male', 'yes', '123', 'asd@asd', 'qwe  qweq  Assumption', 'Assumption', '', '', '', '', 'qe', 0, 'ALS Graduate', '', 'qwe', 'qwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-22'),
(73, '', 'Approve', 'released_renew_2ndYr_1stSem_', 'renew_3rdYr_1stSem_', 'qwe@qwe', '$2y$10$IGqyIod5YkSa.JRar4v9XOq9enUENEYulq34FNmh2T0IOBxdEsYum', 182, 'asd, asd asd', 'asd', 'asd', 'asd', 0, 'male', 'yes', '123123123', 'qwe@qwe', 'qwe  qwe  Assumption', 'Assumption', '', '', '', '', 'qwe', 0, 'ALS Graduate', '', 'qwe', 'qwe', NULL, 'uploaded', 'approve renewal', NULL, 'approve renewal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-11-30'),
(74, '', NULL, '', '', 'asdasdasd@asdasd.com', '$2y$10$GA9wVGRAeo2CuHNSyvXrGO9OzmKVm9kyUh59.3CryXw3y3Cg70Hle', 183, 'asd, asd ', 'asd', 'asd', '', 0, 'male', 'yes', '9914548209', 'asdasdasd@asdasd.com', 'qwe  qwe  Assumption', 'Assumption', '', '', '', '', 'qwe', 0, 'ALS Graduate', '', 'qwe', 'qwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-30'),
(75, '', NULL, '', '', '123@qwe.com', '$2y$10$qzeUMdSQF/YcgPfm7GTXeeOuOoG81.tWEAFTFGjdeTZR0Mi3x85KG', 184, '123, 123 ', '123', '123', '', 0, 'male', 'yes', '9914548209', '123@qwe.com', '123  asdasdasd  Assumption', 'Assumption', '', '', '', '', 'qwe', 0, 'Grade 12', '', '123', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-30'),
(78, '', NULL, '', '', 'asdasd@asczxcae.com', '$2y$10$IRDchlZihoC1g/zQJ546nOaq8JQ3ZrD8s3FXJ.UCH5KMfT4UAHWY2', 191, '12312, qweqwe ', '12312', 'qweqwe', '', 0, 'male', 'yes', '9914548209', 'asdasd@asczxcae.com', '12123  qweqwe  Bagong Buhay I', 'Bagong Buhay I', '', '', '', '', 'qweqwe', 0, 'ALS Graduate', '', 'asdas', 'dasdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-30'),
(79, '', NULL, '', '', 'asd', '$2y$10$4QbQUyq7pkBLoRYb7rzNj.O80Tm/wH9EuFNK0eeM7jYaT47zqZB1m', 0, 'asd, asd qwe', 'asd', 'asd', 'qwe', 0, '', '', '123123', '', '', '', '', '', '', '', '', 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-30');

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
  `contactNum` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `fullName`, `last_name`, `first_name`, `middle_name`, `position`, `user`, `password`, `contactNum`, `address`, `email`, `image`) VALUES
(187, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'student', 'staff ', '$2y$10$l/i3sC.bRRqpqKpDgtz5muF16xtBsjYIFI2ILM1g2htUCaWKTTHNG', '9914548209', '', 'castillo.markdavid64@gmail.com', 0x43617374696c6c6f5f70726f66696c652e6a706567);

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
(36, 'asdasd', 1, '2023-10-08 13:47:17'),
(49, 'asdasdas', 0, '2023-11-21 06:07:07');

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
-- Indexes for table `newscholar_award_archive`
--
ALTER TABLE `newscholar_award_archive`
  ADD PRIMARY KEY (`newscholar_award_archive_id`),
  ADD KEY `FK_New_Award_Archive` (`scholar_id`);

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
-- Indexes for table `registration_archive`
--
ALTER TABLE `registration_archive`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `renewal_award_archive`
--
ALTER TABLE `renewal_award_archive`
  ADD PRIMARY KEY (`renewal_award_archive_id`),
  ADD KEY `FK_Renewal_Award_Archive` (`renewal_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `newscholar_award`
--
ALTER TABLE `newscholar_award`
  MODIFY `scholar_release_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newscholar_award_archive`
--
ALTER TABLE `newscholar_award_archive`
  MODIFY `newscholar_award_archive_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `registration_approval`
--
ALTER TABLE `registration_approval`
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `registration_archive`
--
ALTER TABLE `registration_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registration_control`
--
ALTER TABLE `registration_control`
  MODIFY `reg_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_requirements`
--
ALTER TABLE `registration_requirements`
  MODIFY `requirements_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `renewal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `renewal_award`
--
ALTER TABLE `renewal_award`
  MODIFY `award_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `renewal_award_archive`
--
ALTER TABLE `renewal_award_archive`
  MODIFY `renewal_award_archive_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `renewal_control`
--
ALTER TABLE `renewal_control`
  MODIFY `renew_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `renewal_process`
--
ALTER TABLE `renewal_process`
  MODIFY `process_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examination`
--
ALTER TABLE `examination`
  ADD CONSTRAINT `FK_ExaminationAction` FOREIGN KEY (`action_id`) REFERENCES `registration_approval` (`action_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `newscholar_award`
--
ALTER TABLE `newscholar_award`
  ADD CONSTRAINT `FK_NewScholar` FOREIGN KEY (`scholar_id`) REFERENCES `scholar` (`scholar_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `newscholar_award_archive`
--
ALTER TABLE `newscholar_award_archive`
  ADD CONSTRAINT `FK_New_Award_Archive` FOREIGN KEY (`scholar_id`) REFERENCES `scholar` (`scholar_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `renewal_award_archive`
--
ALTER TABLE `renewal_award_archive`
  ADD CONSTRAINT `FK_Renewal_Award_Archive` FOREIGN KEY (`renewal_id`) REFERENCES `renewal` (`renewal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `renewal_process`
--
ALTER TABLE `renewal_process`
  ADD CONSTRAINT `FK_Renewal_Process` FOREIGN KEY (`renewal_id`) REFERENCES `renewal` (`renewal_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
