-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 08:10 PM
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
(212, 'City Youth and Sports Development Office - CSJDM', NULL, 'hi', '2023-11-19 18:09:48', 24, 56, 1),
(213, 'City Youth and Sports Development Office - CSJDM', NULL, 'hi', '2023-11-19 19:00:53', 24, 56, 1),
(214, 'asdasdasdasdasdasd', 183, 'hi', '2023-11-19 19:01:36', 24, 56, 0);

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
(117, 'pass', 'Approve', 158),
(118, 'pass', 'Approve', 159),
(119, 'pass', 'Approve', 160);

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

--
-- Dumping data for table `newscholar_award_archive`
--

INSERT INTO `newscholar_award_archive` (`newscholar_award_archive_id`, `scholar_release_id`, `scholar_id`, `newrelease_status`, `date`) VALUES
(5, 13, 70, '', '2023-11-21');

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
(134, 'asd, asdas dasdasdasd', 'asd', 'asdas', 'dasdasdasd', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asd_655b783cdd66d_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(135, 'asdq2we, qeweqasd asdqweqwe', 'asdq2we', 'qeweqasd', 'asdqweqwe', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdq2we_655b78547797b_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(138, 'asdqwe, qweasdqw asdqweqwe', 'asdqwe', 'qweasdqw', 'asdqweqwe', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdqwe_655b78753d4c6_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(149, 'jkluioui, jkluiouio jkluiouio', 'jkluioui', 'jkluiouio', 'jkluiouio', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'jkluioui_655b78fb7e71a_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(150, 'asdqwe, asdqweqwe asdqweqe', 'asdqwe', 'asdqweqwe', 'asdqweqe', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdqwe_655b79177acf5_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(152, 'asdqwedr, yuiyu fghfghrt', 'asdqwedr', 'yuiyu', 'fghfghrt', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdqwedr_655b792fce40e_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(153, 'werwer, sdfwer dfwerwer', 'werwer', 'sdfwer', 'dfwerwer', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'werwer_655b793c41239_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(154, 'sdfsdfwer, dfswers sdfwerw', 'sdfsdfwer', 'dfswers', 'sdfwerw', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'sdfsdfwer_655b7945e693e_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(155, 'asdqwe, asdqweqwe asdqweqwe', 'asdqwe', 'asdqweqwe', 'asdqweqwe', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdqwe_655b7951ca0b5_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(156, 'asdqwew, asdqwe asdqweq', 'asdqwew', 'asdqwe', 'asdqweq', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdqwew_655b795c805cb_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(157, 'dasdqwe, asdasdqwe asdqweqwe', 'dasdqwe', 'asdasdqwe', 'asdqweqwe', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'dasdqwe_655b79663655b_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(158, 'asdqwe, dasd qweasdqwe', 'asdqwe', 'dasd', 'qweasdqwe', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdqwe_655b796fc5a11_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(159, 'asdasdqwe, asdqwweasd qwesdf', 'asdasdqwe', 'asdqwweasd', 'qwesdf', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'asdasdqwe_655b7979cba98_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(160, 'zxczxc, zxczxczxc zxczxcz', 'zxczxc', 'zxczxczxc', 'zxczxcz', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'zxczxc_655b7981c1b1a_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(161, 'rwersdfwer, dfwersdf sdfwerwer', 'rwersdfwer', 'dfwersdf', 'sdfwerwer', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'rwersdfwer_655b798f001e2_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(162, 'sdfwersd, wersdfwer sdfwerfsdf', 'sdfwersd', 'wersdfwer', 'sdfwerfsdf', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'sdfwersd_655b799713b8b_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(163, 'dfwersdf, sdfewrwr wersdfqw', 'dfwersdf', 'sdfewrwr', 'wersdfqw', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'dfwersdf_655b79a056f29_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(164, 'sdfwersd, sdfwer sdfwer', 'sdfwersd', 'sdfwer', 'sdfwer', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'sdfwersd_655b79ac2feb9_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(165, 'sdfwer, sdfwer fwerwer', 'sdfwer', 'sdfwer', 'fwerwer', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'sdfwer_655b79b4a0177_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(166, 'weasdqw, asdqwe sdqweqwe', 'weasdqw', 'asdqwe', 'sdqweqwe', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'weasdqw_655b79bebe03e_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(167, 'zxcasd, asdxc dasdzxca', 'zxcasd', 'asdxc', 'dasdzxca', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'zxcasd_655b79cf29e70_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(168, 'zcxcasd, asdzxca asdasdzx', 'zcxcasd', 'asdzxca', 'asdasdzx', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'zcxcasd_655b79da06cfb_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(169, 'zxcasddfg, gdfgcvb fgdfgdfg', 'zxcasddfg', 'gdfgcvb', 'fgdfgdfg', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'zxcasddfg_655b79e27f3b8_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20'),
(170, 'cvbcvbdf, cvbcfbdfg cvbdfgdfg', 'cvbcvbdf', 'cvbcfbdfg', 'cvbdfgdfg', NULL, 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 'cvbcvbdf_655b79ede6f3b_2x2image.jpeg', '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 'ALS Graduate', 'qweqweqwe', 'Living', 'qweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', 2147483647, 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', 2147483647, 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 123123123, '2023-11-20');

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
(148, 138, 'approve', 'done', '2023-11-21 00:12:34'),
(158, 149, 'approve', 'done', '2023-11-21 01:44:35'),
(159, 150, 'approve', 'done', '2023-11-21 01:48:25'),
(160, 152, 'approve', 'done', '2023-11-21 02:37:31');

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
(1, '', 136, 'asdqweasd, qweqweasd qweasd', 'asdqweasd', 'qweqweasd', 'qweasd', '', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x6173647177656173645f363535623738363263616464375f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-19 16:00:00'),
(2, 'Declined', 137, 'eqweasdqw, dasdqwesa asdweq', 'eqweasdqw', 'dasdqwesa', 'asdweq', '', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x6571776561736471775f363535623738366334333566655f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-19 16:00:00'),
(3, 'Failed', 138, 'asdqwe, qweasdqw asdqweqwe', 'asdqwe', 'qweasdqw', 'asdqweqwe', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x6173647177655f363535623738373533643463365f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-19 16:00:00'),
(4, 'Failed', 139, 'sdqweqw, qweqdasdqw sdqweqwe', 'sdqweqw', 'qweqdasdqw', 'sdqweqwe', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x736471776571775f363535623738383730363035355f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-19 16:00:00'),
(5, 'Failed', 140, 'asdaweq, asdqweqe qweqweasd', 'asdaweq', 'asdqweqe', 'qweqweasd', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x617364617765715f363535623738393032636435315f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-19 16:00:00'),
(6, 'Failed Requirements', 141, 'dqweqwesa, qweqweasdq qweasd', 'dqweqwesa', 'qweqweasdq', 'qweasd', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x6471776571776573615f363535623738393864393236395f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 16:26:15'),
(7, '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0.00, '0000-00-00 00:00:00'),
(8, '', 143, 'hgbhfghvbn, ghvbnvbn nvbnghf', 'hgbhfghvbn', 'ghvbnvbn', 'nvbnghf', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'castillo.markdavid64@gmail.com', 0x6867626866676876626e5f363535623738616535613561375f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 16:37:30'),
(9, 'New Scholar', 143, 'hgbhfghvbn, ghvbnvbn nvbnghf', 'hgbhfghvbn', 'ghvbnvbn', 'nvbnghf', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'castillo.markdavid64@gmail.com', 0x6867626866676876626e5f363535623738616535613561375f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 16:37:30'),
(10, 'New Scholar', 143, 'hgbhfghvbn, ghvbnvbn nvbnghf', 'hgbhfghvbn', 'ghvbnvbn', 'nvbnghf', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'castillo.markdavid64@gmail.com', 0x6867626866676876626e5f363535623738616535613561375f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 16:37:30'),
(11, 'New Scholar', 142, 'qweasdqwe, asdqweqwe asdqweqasd', 'qweasdqwe', 'asdqweqwe', 'asdqweqasd', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x7177656173647177655f363535623738613537613363325f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 17:06:30'),
(12, 'New Scholar', 144, 'hjkljklj, jklmn,. lm,.jkljkl', 'hjkljklj', 'jklmn,.', 'lm,.jkljkl', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x686a6b6c6a6b6c6a5f363535623738623865373931315f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 17:35:43'),
(13, 'New Scholar', 146, 'kluio uio, uiojklui jkljkluio', 'kluio uio', 'uiojklui', 'jkljkluio', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x6b6c75696f2075696f5f363535623738643262653730345f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 17:35:57'),
(14, 'New Scholar', 147, 'jkluiouio, jkluiojkl; piopjkl;', 'jkluiouio', 'jkluiojkl;', 'piopjkl;', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x6a6b6c75696f75696f5f363535623738646335333333305f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 17:36:06'),
(15, 'New Scholar', 145, 'm,.jkljluiol, luiouio iojkluio', 'm,.jkljluiol', 'luiouio', 'iojkluio', 'done', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x6d2c2e6a6b6c6a6c75696f6c5f363535623738633533653539635f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-20 17:35:51'),
(16, 'Declined', 151, 'asdqweq, qweqweasd qweasdasdqw', 'asdqweq', 'qweqweasd', 'qweasdasdqw', '', 'male', 'single', 'yes', '2023-11-20', 'zxczxczxc', 'American-', '123123123  asdasdasd  F. Homes Mulawin', '123123123', 'asdasdasd', 'F. Homes Mulawin', '123123123123', 'asdasdasd@asdasd', 0x617364717765715f363535623739323533386263345f327832696d6167652e6a706567, '', 'qweqwe', 'asdasdas', 'Public', 'qweqweqwe', 0, 'qweqweqwe', 'Living', 'qweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'Living', 'asdasdasdasd', '2147483647', 'qweqweqwe', 'qweqweqweqw', 'qweqweqweqwe', 'qweqweqweqwe', '2147483647', 'asdasdasd', 'asdasdasd', 'qsd', 'asd', 'asd', 'asdasd', 'asdasd', 'asdasdasd', 2147483647, 99999999.99, '2023-11-19 16:00:00');

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

--
-- Dumping data for table `registration_requirements`
--

INSERT INTO `registration_requirements` (`requirements_id`, `examination_id`, `image2x2`, `birth`, `bir`, `cedula`, `health`, `curriculum`, `residency`, `map`, `house`, `moral`, `cor`, `cog`, `coe`, `stub`, `landbank`, `photocopy`, `letter`, `req_status`) VALUES
(49, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(50, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve'),
(51, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Approve');

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
(124, 56, 'renew_1stYr_1stSem', '', '2023-11-20 18:50:34', 'approve', '', '', '', '', '', '', '', '', ''),
(125, 56, 'renew_1stYr_2ndSem', '', '2023-11-20 18:57:53', 'approve', '', '', '', '', '', '', '', '', '');

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
-- Table structure for table `renewal_award_archive`
--

CREATE TABLE `renewal_award_archive` (
  `renewal_award_archive_id` int(100) NOT NULL,
  `award_id` int(100) NOT NULL,
  `renewal_id` int(100) NOT NULL,
  `award_status` varchar(100) DEFAULT NULL,
  `semester_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renewal_award_archive`
--

INSERT INTO `renewal_award_archive` (`renewal_award_archive_id`, `award_id`, `renewal_id`, `award_status`, `semester_year`) VALUES
(1, 40, 124, '', ''),
(2, 40, 124, '', ''),
(3, 41, 125, '', '');

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
(100, 125, 'approve', '', '56');

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
(56, '', 'Approve', '', 'renew_1stYr_2ndSem_', 'qwe', '$2y$10$EFwrWywsWIIQlsPbpxElf.UnPtFVIafT..w92YZJ2dRERwCObxF8.', 131, 'asdasdasdasdasdasd', 'asdasd', 'asdas', 'dasdasd', 0, '', '', '9612479632', '', '', '', '', '', '', '', '', 0, '', '', '', '', 'approve renewal', 'approve renewal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-11-20'),
(59, '', NULL, '', '', 'castillo.markdavid64@gmail.com', '$2y$10$NoJsSW2TFsH9JvjT/ia5Pu9qjYEFzNbnN4t.jaDs/E1HHitO6JhtK', 143, 'hgbhfghvbn, ghvbnvbn nvbnghf', 'hgbhfghvbn', 'ghvbnvbn', 'nvbnghf', 0, 'male', 'yes', '123123123123', 'castillo.markdavid64', '123123123  asdasdasd  F. Homes Mulawin', 'F. Homes Mulawin', '', '', '', '', 'qweqweqwe', 0, 'ALS Graduate', '', 'qweqwe', 'asdasdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-21'),
(70, '', NULL, '', '', 'asdasdasd@asdasd', '$2y$10$qNLcDbN25.oCa5EmG0KMweXzqtQPH/l4tRHKWkvi0ovUnbYBj7ZXG', 152, 'asdqwedr, yuiyu fghfghrt', 'asdqwedr', 'yuiyu', 'fghfghrt', 0, 'male', 'yes', '123123123123', 'asdasdasd@asdasd', '123123123  asdasdasd  F. Homes Mulawin', 'F. Homes Mulawin', '', '', '', '', 'qweqweqwe', 0, 'ALS Graduate', '', 'qweqwe', 'asdasdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-21');

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
(55, 'remove', '', '', '', 'martinmendoza03.mm@gmail.com', '$2y$10$EIaNEseqysjpdJzrFPVVUO5qlaJ6wzUsMCuLxRIBjUt.xa.Yyn.Qq', 132, 'asdasdasdasd', '', '', '', 0, '', '', '9164983650', 'martinmendoza03.mm@g', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-20', '2023-11-20'),
(69, 'remove', '', '', '', 'asdasdasd@asdasd', '$2y$10$djg5Uk6gxn.XxB1mYcUDxeGUrBETkcu9u024X0cvVLVZf4M8IR8yO', 150, 'asdqwe, asdqweqwe asdqweqe', 'asdqwe', 'asdqweqwe', 'asdqweqe', 0, 'male', 'yes', '123123123123', 'asdasdasd@asdasd', '123123123  asdasdasd  F. Homes Mulawin', 'F. Homes Mulawin', '', '', '', '', 'qweqweqwe', 0, 'ALS Graduate', '', 'qweqwe', 'asdasdas', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '2023-11-21', '2023-11-21');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  MODIFY `exam_action_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newscholar_award`
--
ALTER TABLE `newscholar_award`
  MODIFY `scholar_release_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `newscholar_award_archive`
--
ALTER TABLE `newscholar_award_archive`
  MODIFY `newscholar_award_archive_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `registration_approval`
--
ALTER TABLE `registration_approval`
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `registration_archive`
--
ALTER TABLE `registration_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration_control`
--
ALTER TABLE `registration_control`
  MODIFY `reg_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_requirements`
--
ALTER TABLE `registration_requirements`
  MODIFY `requirements_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `renewal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `renewal_award`
--
ALTER TABLE `renewal_award`
  MODIFY `award_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `renewal_award_archive`
--
ALTER TABLE `renewal_award_archive`
  MODIFY `renewal_award_archive_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `renewal_control`
--
ALTER TABLE `renewal_control`
  MODIFY `renew_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `renewal_process`
--
ALTER TABLE `renewal_process`
  MODIFY `process_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

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
