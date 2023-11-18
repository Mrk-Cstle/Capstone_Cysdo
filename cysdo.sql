-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 03:08 PM
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
(8, 'qwea, qwe qwe', 'qwea', 'qwe', 'qwe', NULL, 123, 'qwe@qwe', 'qwe', '', '', '', '', 'qwe@qwe', '$2y$10$rwj3q8rJCZsaVp9QRGnXhe3CqCv/m.vyZrn3hnayq51R1b2zj/QrS'),
(24, 'qaz, qaz qaz', 'qaz', 'qaz', 'qaz', '2023-07-30', 1233425345, 'qaz@qaz1  ', 'zxc  ', 'male', 'married', 'French-', 'qaz_profile.jpg', 'qaz', '$2y$10$QRNUQdpxahNTCd9efiQ2Ruoyv/rKs19gBbbA15A5Q4LHRI1gR93x2'),
(25, 'Castillo, Mark David S.', 'Castillo', 'Mark David', 'S.', '2002-02-11', 2147483647, ' markdavid.castillo.s@bulsu.edu.ph ', '    Marilao Bulacan ', 'male', 'single', 'Filipino-', 'Castillo_profile.jpeg', '', '$2y$10$b2BU6DtoXeHx/r7Do4ZsD.ALxDeO3fMIjiL59VEzzPbgBAUaeAV8i'),
(26, 'qweqw, eqweqwe qweqwe', 'qweqw', 'eqweqwe', 'qweqwe', NULL, 13123, 'qweqwe', '', '', '', '', '', 'qweqwe', '$2y$10$upTHZF.td3dgiI1lEXAmbe1vFbNYU/.vaYSfK/EO.8IWBwhF/1Cnm');

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
(4, '2023-06-26', 'aLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus cum corporis unde porro, aliquam deserunt, id necessitatibus modi vero, cupiditate placeat itaque maiores! Deleniti fugiat corporis illo alias ipsum. Nihil maxime adipisci exercitationem illo placeat debitis quis cupiditate adoloremque et commodi sapiente numquam dolorum unde fugiat recusandae, porro hic architecto provident autem assumenda tempora? Labore, accusantium? Similique consequuntur quos quas at doloribus molestias perferendis qui expedita fugiat libero. Ipsum tempore vel blanditiis magni accusantium fuga debitis nobis consequatur fugiat sapiente! Soluta illum ducimus natus laboriosam voluptatem magnam dolorem optio, ex, numquam animi itaque consectetur sunt esse aliquid corrupti quis autem.', 'qaz@qaz', 'scholar'),
(17, '2023-07-06', 'asdasd', 'qaz@qaz', 'applicant'),
(19, '2023-07-06', 'asdasd', 'qaz@qaz', 'applicant'),
(28, '2023-07-08', 'asdawd', 'qaz@qaz', 'applicant'),
(32, '2023-07-08', 'aweqweqwe', 'qaz@qaz', 'applicant'),
(34, '2023-07-08', 'sdfsewr', 'qaz@qaz', 'applicant'),
(36, '2023-07-08', 'sdfwserf', 'qaz@qaz', 'scholar'),
(37, '2023-08-01', 'qwe', 'qaz@qaz', 'applicant'),
(38, '2023-08-01', '123123', 'qaz@qaz', 'scholar'),
(39, '2023-08-01', 'qweqwe', 'qaz@qaz', 'applicant'),
(41, '2023-08-01', 'q', 'qaz@qaz', 'applicant'),
(42, '2023-09-08', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus cum corporis unde porro, aliquam deserunt, id necessitatibus modi vero, cupiditate placeat itaque maiores! Deleniti fugiat corporis illo alias ipsum. Nihil maxime adipisci exercitationem illo placeat debitis quis cupiditate doloremque et commodi sapiente numquam dolorum unde fugiat recusandae, porro hic architecto provident autem assumenda tempora? Labore, accusantium? Similique consequuntur quos quas at doloribus molestias perferendis qui expedita fugiat libero. Ipsum tempore vel blanditiis magni accusantium fuga debitis nobis consequatur fugiat sapiente! Soluta illum ducimus natus laboriosam voluptatem magnam dolorem optio, ex, numquam animi itaque consectetur sunt esse aliquid corrupti quis autem.', 'qaz, qaz qaz', 'scholar'),
(43, '2023-09-08', 'a', 'qaz, qaz qaz', 'applicant'),
(46, '2023-09-10', 'qweq', '', 'scholar'),
(47, '2023-09-20', 'asd', 'qaz, qaz qaz', 'applicant'),
(48, '2023-09-20', 'asd', 'qaz, qaz qaz', 'scholar'),
(49, '2023-09-20', 'asd', 'qaz, qaz qaz', 'applicant'),
(51, '2023-09-20', 'asd', 'bnm, bnm bnm', 'applicant'),
(52, '2023-11-16', 'asd', 'Castillo, Mark David S.', 'applicant'),
(53, '2023-11-16', 'qwe', 'Castillo, Mark David S.', 'applicant'),
(54, '2023-11-16', 'qwe', 'Castillo, Mark David S.', 'applicant'),
(55, '2023-11-16', 'qwe', 'Castillo, Mark David S.', 'applicant'),
(56, '2023-11-16', 'dasdzxcsa', 'Castillo, Mark David S.', 'applicant'),
(57, '2023-11-16', 'dasdzxcsa', 'Castillo, Mark David S.', 'applicant'),
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
(74, '2023-11-16', 'hatdog', 'Castillo, Mark David S.', 'applicant');

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
(1, 'City Youth and Sports Development Office - CSJDM', NULL, 'qwe', '2023-11-12 12:23:23', 24, 5, 0),
(2, 'eqweasdasdad, rdfgdrt dfgdfgdfg', NULL, 'asd', '2023-11-12 12:25:55', 24, 5, 1),
(3, 'City Youth and Sports Development Office - CSJDM', NULL, 'asd', '2023-11-12 12:26:15', 24, 5, 0),
(4, 'eqweasdasdad, rdfgdrt dfgdfgdfg', NULL, 'qwe', '2023-11-12 12:26:52', 24, 5, 1),
(5, 'City Youth and Sports Development Office - CSJDM', NULL, 'qwe', '2023-11-12 12:27:05', 24, 5, 0),
(6, 'eqweasdasdad, rdfgdrt dfgdfgdfg', NULL, 'qwe', '2023-11-12 12:27:09', 24, 5, 1),
(7, 'ASDSDF, XCVSDF SDFXCV', NULL, 'qwe', '2023-11-12 12:27:52', 24, 14, 1),
(8, 'City Youth and Sports Development Office - CSJDM', NULL, 'qwe', '2023-11-12 12:28:09', 24, 14, 1),
(9, 'ASDSDF, XCVSDF SDFXCV', NULL, 'asd', '2023-11-12 14:07:19', 24, 14, 1),
(10, 'City Youth and Sports Development Office - CSJDM', NULL, 'qwe', '2023-11-12 14:14:10', 24, 14, 1),
(194, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 183, 'qwe', '2023-11-12 14:08:59', 24, 5, 1),
(195, 'City Youth and Sports Development Office - CSJDM', NULL, 'asd', '2023-11-13 10:13:37', 24, 5, 1),
(196, 'City Youth and Sports Development Office - CSJDM', NULL, 'asd', '2023-11-13 10:13:46', 24, 9, 1),
(197, 'City Youth and Sports Development Office - CSJDM', NULL, 'qwe', '2023-11-13 10:13:52', 24, 12, 1),
(198, 'City Youth and Sports Development Office - CSJDM', NULL, 'asd', '2023-11-13 10:13:56', 24, 14, 1),
(199, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-13 10:15:33', 24, 14, 1),
(200, 'ASDSDF, XCVSDF SDFXCV', 183, 'zxc', '2023-11-13 10:15:41', 24, 14, 1),
(201, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-13 10:15:59', 24, 14, 1),
(202, 'City Youth and Sports Development Office - CSJDM', NULL, 'asd', '2023-11-13 10:16:11', 24, 14, 1),
(203, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-14 06:59:29', 24, 14, 1),
(204, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-14 07:00:03', 24, 14, 1),
(205, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-14 07:02:28', 24, 14, 1),
(206, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-14 07:02:58', 24, 14, 1),
(207, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-14 07:06:01', 24, 14, 1),
(208, 'City Youth and Sports Development Office - CSJDM', NULL, 'asdasd', '2023-11-14 07:06:16', 24, 14, 1),
(209, 'City Youth and Sports Development Office - CSJDM', NULL, 'asdasd', '2023-11-14 14:53:30', 24, 14, 1),
(210, 'ASDSDF, XCVSDF SDFXCV', 183, 'asd', '2023-11-14 15:19:58', 24, 14, 1),
(211, 'City Youth and Sports Development Office - CSJDM', 168, 'asd', '2023-11-14 16:18:18', NULL, 14, 1);

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
(101, 'pass', 'Failed', 138),
(102, 'pass', 'Approve', 139);

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
  `newrelease_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newscholar_award`
--

INSERT INTO `newscholar_award` (`scholar_release_id`, `scholar_id`, `newrelease_status`) VALUES
(1, 48, 0);

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
(124, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 'done', 'male', 'single', 'yes', '2023-11-14', 'asdasd', 'American-', 'asdasd  asdasd  Bagong Buhay I', 'asdasd', 'asdasd', 'Bagong Buhay I', '1123123', 'castillo.markdavid64@gmail.com', 'qweqdasd_655640d5dc061_2x2image.jpg', '', 'qwe', 'qwe', 'Public', 'qwe', 'Grade 12', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123, '2023-11-17'),
(125, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 'done', 'male', 'single', 'yes', '2023-11-14', 'asdasd', 'American-', 'asdasd  asdasd  Bagong Buhay I', 'asdasd', 'asdasd', 'Bagong Buhay I', '1123123', 'castillo.markdavid64@gmail.com', 'qweqdasd_655640dd4eb5d_2x2image.jpg', '', 'qwe', 'qwe', 'Public', 'qwe', 'Grade 12', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123, '2023-11-17'),
(126, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 'done', 'male', 'single', 'yes', '2023-11-14', 'asdasd', 'American-', 'asdasd  asdasd  Bagong Buhay I', 'asdasd', 'asdasd', 'Bagong Buhay I', '1123123', 'castillo.markdavid64@gmail.com', 'qweqdasd_655640de33ec3_2x2image.jpg', '', 'qwe', 'qwe', 'Public', 'qwe', 'Grade 12', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123, '2023-11-17'),
(127, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', NULL, 'male', 'single', 'yes', '2023-11-14', 'asdasd', 'American-', 'asdasd  asdasd  Bagong Buhay I', 'asdasd', 'asdasd', 'Bagong Buhay I', '1123123', 'castillo.markdavid64@gmail.com', 'qweqdasd_655640df14e7f_2x2image.jpg', '', 'qwe', 'qwe', 'Public', 'qwe', 'Grade 12', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123, '2023-11-17'),
(128, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', NULL, 'male', 'single', 'yes', '2023-11-14', 'asdasd', 'American-', 'asdasd  asdasd  Bagong Buhay I', 'asdasd', 'asdasd', 'Bagong Buhay I', '1123123', 'castillo.markdavid64@gmail.com', 'qweqdasd_655640dfda56a_2x2image.jpg', '', 'qwe', 'qwe', 'Public', 'qwe', 'Grade 12', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123, '2023-11-17'),
(129, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', NULL, 'male', 'single', 'yes', '2023-11-14', 'asdasd', 'American-', 'asdasd  asdasd  Bagong Buhay I', 'asdasd', 'asdasd', 'Bagong Buhay I', '1123123', 'castillo.markdavid64@gmail.com', 'qweqdasd_655640e18d34a_2x2image.jpg', '', 'qwe', 'qwe', 'Public', 'qwe', 'Grade 12', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123, '2023-11-17');

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
(137, 124, 'approve', 'done', '2023-11-17 00:18:54'),
(138, 125, 'approve', 'done', '2023-11-17 00:26:30'),
(139, 126, 'approve', 'done', '2023-11-17 00:36:15');

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
(1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `registration_requirements`
--

CREATE TABLE `registration_requirements` (
  `requirements_id` int(100) NOT NULL,
  `examination_id` int(100) NOT NULL,
  `image2x2` varchar(255) NOT NULL,
  `req_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_requirements`
--

INSERT INTO `registration_requirements` (`requirements_id`, `examination_id`, `image2x2`, `req_status`) VALUES
(17, 101, 'applicantForm_101.jpg', 'Failed'),
(18, 102, 'applicantForm_102.jpg', 'Approve');

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
(114, 14, 'renew_5thYr_1stSem', '2023', '2023-11-14 15:16:31', '', '', '', 'renew_5thYr_1stSem_ASDSDF, XCVSDF SDFXCV_14_PrevCor.jpg', '', '', '', '', '', ''),
(115, 18, 'new_scholar', '', '2023-11-15 16:17:29', '', '', '', '', '', '', '', '', '', ''),
(116, 14, 'renew_1stYr_1stSem', '', '2023-11-15 16:36:22', 'approve', '', '', '', '', '', '', '', '', ''),
(118, 19, 'new_scholar', '', '2023-11-16 16:07:13', '', '', '', '', '', '', '', '', '', ''),
(119, 26, 'new_scholar', '', '2023-11-16 16:07:45', '', '', '', '', '', '', '', '', '', ''),
(120, 34, 'new_scholar', '', '2023-11-16 16:42:05', '', '', '', '', '', '', '', '', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `scholar_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `scholar_status` varchar(255) NOT NULL,
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
(14, 'ASDSDF_profile.jpg', '', '', 'renew_1stYr_1stSem_', 'qwe', '$2y$10$eZ1HaQ1wrws4eoYQfPnJBOX3P/226IYUV6gRrIUqRitCu8/choX2G', 0, 'ASDSDF, XCVSDF SDFXCV', 'ASDSDF', 'XCVSDF', 'SDFXCV', 1321, 'asd', 'asd', '235345', '123', 'asd', 'asd', 'qwe', '0', 'qwes', ' asd  ', '', 0, '', ' ', '', '', 'approve renewal', NULL, 'reupload renewal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 0, '2023-11-03'),
(18, '', '', '', '', 'asd', '$2y$10$L5Amwznv595EQR9RDPrNYuO4xXN37r1EgLZEMNFhZqaWX3jt0JQem', 76, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 0, 'male', 'yes', '123123123', '123123123', '', 'Assumption', '', '', '', 'castillo.markdavid64@gmail.com', 'asdasdad', 0, 'ALS Graduate', '', 'qweas', 'dasdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-11-16'),
(19, '', '', '', '', '', '$2y$10$MDHQKpsjtPHxCV9eHdZr5O8v0quYj4mlPSZpUr2whQl8B.8YScNL2', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-17'),
(26, '', '', '', '', 'Castillo', '$2y$10$PZiUxHvpVUhjKoH5CDXH6eXUOLGgFljlqQ14e5eWiYU1iignSd8li', 96, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 0, 'male', 'yes', '123123123', '123123123', '', 'Assumption', '', '', '', '', 'asdasdad', 0, 'ALS Graduate', '', 'qweas', 'dasdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-17'),
(34, '', '', '', '', 'qweqdasd', '$2y$10$K9mF37tJAR2cF8q4wcUw1OEPo45LDqYjBTmCAXVKBgCRVYMv0VxiS', 125, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 0, 'male', 'yes', '1123123', 'castillo.markdavid64', 'asdasd  asdasd  Bagong Buhay I', 'Bagong Buhay I', '', '', '', '', 'qwe', 0, 'Grade 12', '', 'qwe', 'qwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-17'),
(48, '', '', '', '', 'dfg', '$2y$10$JgAhRMuh5vxKTWoDUIfwW.Rff3Mg1x52up20WgS5bKdJa4hlL88LS', 126, 'qweqdasd, asdasd asdasdasd', 'qweqdasd', 'asdasd', 'asdasdasd', 0, 'male', 'yes', '1123123', 'castillo.markdavid64', 'asdasd  asdasd  Bagong Buhay I', 'Bagong Buhay I', '', '', '', '', 'qwe', 0, 'Grade 12', '', 'qwe', 'qwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-18');

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
  `contactNum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `fullName`, `last_name`, `first_name`, `middle_name`, `position`, `user`, `password`, `contactNum`, `address`, `email`, `image`) VALUES
(166, ',  asd', '', '', 'asd', '', 'asd', '$2y$10$Ze5h8a/n.MJeuQ650sJ/m.r30W.ICZxKb.v6crisHbSbqT58cX08e', 0, '', 'asd', ''),
(167, 'qwem,  ', 'qwem', '', '', '', 'qweqweqweqwe', '$2y$10$8qmU/eYjAALSYcgRCLZU5eNiDkoCpCtqr0skiWBwUC30VloS9Ne66', 0, '', 'qweqweqweqweqwe', ''),
(168, 'zxczxc, qweqwe asdqw', 'zxczxc', 'qweqwe', 'asdqw', '123', 'qwe', '$2y$10$hbZNtRozkM1noS8SI6Kc9OTmGKXSwOpvdPzoICa189BEI/zpDABlu', 123123, 'asd', 'qeqwe@asd  ', 0x7a78637a78635f70726f66696c652e6a706567),
(175, 'asd, qwe asd', 'asd', 'qwe', 'asd', '', '', '$2y$10$tedEnHfW6SKyYFFQ12eQdODBl0EJhY9NeaD2HtznBIN4UAhfJhB.O', 0, '', '', ''),
(176, ', xacsdQWEZXC AS', '', 'xacsdQWEZXC', 'AS', '', 'zxfaewdasd@asdzxc', '$2y$10$bvNGuatyaGaIUR/la71rYu/.Br5jFsYZ1tTKpZqPKfhc7i4mizZ6K', 0, '', 'zxfaewdasd@asdzxc', '');

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
(36, 'asd', 1, '2023-10-08 13:47:17'),
(37, 'z', 0, '2023-10-08 13:47:20'),
(38, 'z', 0, '2023-10-08 13:47:22'),
(39, 'z', 0, '2023-10-08 13:47:25'),
(40, 'z', 0, '2023-10-08 13:47:28'),
(41, 'z', 0, '2023-10-08 13:47:31'),
(42, 'z', 0, '2023-10-08 13:47:33'),
(43, 'adsxc', 0, '2023-10-08 13:47:36'),
(44, 'zxczs', 0, '2023-10-08 13:47:38'),
(45, 'zxc', 1, '2023-10-08 13:47:44'),
(46, 'zxcasd', 1, '2023-10-08 13:47:47'),
(47, 'zxczs', 0, '2023-10-08 13:47:49'),
(48, 'vgcgtrxrxy', 0, '2023-11-13 05:34:13');

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
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  MODIFY `exam_action_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newscholar_award`
--
ALTER TABLE `newscholar_award`
  MODIFY `scholar_release_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `registration_approval`
--
ALTER TABLE `registration_approval`
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `registration_control`
--
ALTER TABLE `registration_control`
  MODIFY `reg_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_requirements`
--
ALTER TABLE `registration_requirements`
  MODIFY `requirements_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `renewal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `renewal_award`
--
ALTER TABLE `renewal_award`
  MODIFY `award_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `renewal_control`
--
ALTER TABLE `renewal_control`
  MODIFY `renew_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `renewal_process`
--
ALTER TABLE `renewal_process`
  MODIFY `process_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

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
