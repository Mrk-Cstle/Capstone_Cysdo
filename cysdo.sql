-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 01:21 AM
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
(25, 'Castillo, Mark David S.', 'Castillo', 'Mark David', 'S.', '2002-02-11', 2147483647, ' markdavid.castillo.s@bulsu.edu.ph', '    Marilao Bulacan', 'male', 'single', 'Filipino-', 'Castillo_profile.jpeg', '', '$2y$10$eSn1oqf8j8DfjifsaDPOQ.qNpyP1J6VZwB1tzmDB1mjr59oZKIeL6'),
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
(51, '2023-09-20', 'asd', 'bnm, bnm bnm', 'applicant');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(100) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_id` int(11) DEFAULT NULL,
  `scholar_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender`, `message`, `timestamp`, `admin_id`, `scholar_id`, `is_read`) VALUES
(1, 'City Youth and Sports Development Office - CSJDM', 'qwe', '2023-11-12 12:23:23', 24, 5, 0),
(2, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'asd', '2023-11-12 12:25:55', 24, 5, 1),
(3, 'City Youth and Sports Development Office - CSJDM', 'asd', '2023-11-12 12:26:15', 24, 5, 0),
(4, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'qwe', '2023-11-12 12:26:52', 24, 5, 1),
(5, 'City Youth and Sports Development Office - CSJDM', 'qwe', '2023-11-12 12:27:05', 24, 5, 0),
(6, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'qwe', '2023-11-12 12:27:09', 24, 5, 1),
(7, 'ASDSDF, XCVSDF SDFXCV', 'qwe', '2023-11-12 12:27:52', 24, 14, 1),
(8, 'City Youth and Sports Development Office - CSJDM', 'qwe', '2023-11-12 12:28:09', 24, 14, 0),
(9, 'ASDSDF, XCVSDF SDFXCV', 'asd', '2023-11-12 14:07:19', 24, 14, 1),
(10, 'City Youth and Sports Development Office - CSJDM', 'qwe', '2023-11-12 14:14:10', 24, 14, 0);

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
(26, 'pass', 'Approve', 36),
(29, 'pass', 'Approve', 34),
(42, 'pass', 'Failed', 20),
(56, 'pass', 'Approve', 59),
(57, 'pass', 'Approve', 74),
(58, 'pass', 'Failed', 73),
(60, 'pass', 'Approve', 75),
(61, 'pass', 'Failed', 76),
(63, 'pass', 'Failed', 77),
(76, 'failed', NULL, 85),
(77, 'failed', NULL, 93),
(78, 'failed', NULL, 94),
(79, 'failed', NULL, 95),
(80, 'failed', NULL, 96),
(81, 'pass', 'Approve', 91),
(82, 'pass', 'Approve', 97),
(83, 'pass', 'Approve', 98),
(84, 'pass', 'Approve', 99),
(86, 'pass', 'Approve', 92),
(87, 'pass', 'Approve', 103),
(88, 'pass', 'Approve', 102),
(89, 'pass', 'Approve', 104),
(90, 'pass', 'Approve', 106),
(91, 'pass', 'Approve', 108),
(92, 'pass', 'Approve', 109);

-- --------------------------------------------------------

--
-- Table structure for table `examination_requirements`
--

CREATE TABLE `examination_requirements` (
  `exam_action_id` int(11) NOT NULL,
  `examination_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL
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
  `contactNum2` int(20) NOT NULL,
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
  `annualGross` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`applicant_id`, `fullName`, `lastName`, `firstName`, `middleName`, `status`, `gender`, `civilStatus`, `voter`, `birthDate`, `birthPlace`, `citizenship`, `fullAddress`, `houseAddress`, `streetAddress`, `barangayAddress`, `contactNum1`, `contactNum2`, `pic2x2`, `signaturePic`, `schoolName`, `schoolAddress`, `schoolType`, `course`, `yearLevel`, `fatherName`, `fatherStatus`, `fatherAddress`, `fatherContact`, `fatherOccupation`, `fatherEduc`, `motherName`, `motherStatus`, `motherAddress`, `motherContact`, `motherOccupation`, `motherEduc`, `guardianName`, `guardianAddress`, `guardianContact`, `guardianOccupation`, `guardianEduc`, `sibling1`, `sibling2`, `sibling3`, `sibling4`, `sibling5`, `sibling6`, `sizeFamily`, `annualGross`) VALUES
(19, 'zxczxczxczxc, zxczxc zxczxc', 'zxczxczxczxc', 'zxczxc', 'zxczxc', 'done', 'male', 'single', 'yes', '2023-06-30', 'zxczxc', 'zxczxc', 'qeasdqwweqweasd', 'zxczxc', 'zxc', 'zxczxczxc', '123', 123123, '', '', 'zxczxc', 'zxczxc', 'public', 'zxczxczxc', 'als', '', 'alive', '', 0, '', '', '', 'alive', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(27, 'eqweasdasdad, qweqwe qeqe', 'eqweasdasdad', 'qweqwe', 'qeqe', 'done', 'male', 'single', 'yes', '2023-09-04', 'qweqe', 'American-', '', 'easeqwe', 'qweqw', 'Assumption', '123123', 2147483647, 'CysdoLogo.jpg', 'callIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', 'qwe', 'Living', 'qwe', 123, 'qwe', 'qwe', 'qwe', 'Living', 'qwe', 123, 'eqwe', 'qwe', 'qwe', 'qwe', 123, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123, 123),
(33, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '+639612479632', 123123, 'CysdoBg.jpg', 'fbIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(34, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '123123', 123123, 'CysdoBg.jpg', 'fbIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(40, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '+639612479632', 123123123, 'Castillo_65002f19c4057_2x2image.jpg', 'Castillo_65002f19c4057_2x2image.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(48, 'asdasd, sdfsdf sdfsdf', 'asdasd', 'sdfsdf', 'sdfsdf', 'done', 'male', 'single', 'yes', '2023-09-12', 'qweqe', 'American-', '', '123123', '123123', 'Bagong Buhay II', '123123', 123123, 'asdasd_650079ea3b686_2x2image.jpg', 'asdasd_650079ea3b686_Signature.png', 'asdasd', 'asdasd', 'Public', 'asdasd', 'ALS Graduate', 'asdasd', 'Living', 'asdasd', 123123, '3123', '123123', 'asdasd', 'Living', 'asdasd', 8, 'asdasdas', 'asdasdasd', 'qweqwe', 'qweqwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qweqwe', 'qweqwe', 'qweqwe', 123123, 123123),
(49, 'qweewq, qweerq qawer', 'qweewq', 'qweerq', 'qawer', 'done', 'male', 'single', 'yes', '2023-09-29', 'tyrtyrtyr', 'American-', '', '34a2234a', 'fghjfghj', 'Assumption', '5634564', 5645674, 'qweewq_6516e8e98320a_2x2image.jpg', 'qweewq_6516e8e98320a_Signature.png', '67r tyrtyur', 'tyrtyr', 'Public', '6785yuty', 'ALS Graduate', '', 'Living', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 123),
(52, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c699ca7202_2x2image.jpeg', 'Castillo_651c699ca7202_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(53, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '+639957751618', 123123123, 'Castillo_651c6a56c3535_2x2image.jpeg', 'Castillo_651c6a56c3535_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(54, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '+639957751618', 123123123, 'Castillo_651c6a6f683f7_2x2image.jpeg', 'Castillo_651c6a6f683f7_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(64, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c6e3c5c80a_2x2image.jpeg', 'Castillo_651c6e3c5c80a_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(65, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c6e694af56_2x2image.jpeg', 'Castillo_651c6e694af56_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(66, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c6e8952685_2x2image.jpeg', 'Castillo_651c6e8952685_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(67, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c6ea366a90_2x2image.jpeg', 'Castillo_651c6ea366a90_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(68, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c6ed9d0866_2x2image.jpeg', 'Castillo_651c6ed9d0866_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(69, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c6f05a3b6e_2x2image.jpeg', 'Castillo_651c6f05a3b6e_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(70, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c6ff3b64fc_2x2image.jpeg', 'Castillo_651c6ff3b64fc_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(71, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c70216b0ae_2x2image.jpeg', 'Castillo_651c70216b0ae_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(72, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c7055a0687_2x2image.jpeg', 'Castillo_651c7055a0687_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(73, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c70746c920_2x2image.jpeg', 'Castillo_651c70746c920_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(74, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c70d66d763_2x2image.jpeg', 'Castillo_651c70d66d763_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(75, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c70e97b9d6_2x2image.jpeg', 'Castillo_651c70e97b9d6_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(76, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c70fbd21b9_2x2image.jpeg', 'Castillo_651c70fbd21b9_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(77, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c711046911_2x2image.jpeg', 'Castillo_651c711046911_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(78, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c711544e62_2x2image.jpeg', 'Castillo_651c711544e62_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(79, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c714345da0_2x2image.jpeg', 'Castillo_651c714345da0_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(84, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c7267c08cc_2x2image.jpeg', 'Castillo_651c7267c08cc_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(85, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c72880eb1c_2x2image.jpeg', 'Castillo_651c72880eb1c_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(86, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c72b9c0b46_2x2image.jpeg', 'Castillo_651c72b9c0b46_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(87, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c73028fc18_2x2image.jpeg', 'Castillo_651c73028fc18_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(88, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c7339c24a9_2x2image.jpeg', 'Castillo_651c7339c24a9_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(89, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c737f7191c_2x2image.jpeg', 'Castillo_651c737f7191c_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(90, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c73937e21f_2x2image.jpeg', 'Castillo_651c73937e21f_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(91, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c73eaf1626_2x2image.jpeg', 'Castillo_651c73eaf1626_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(92, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c7406712bd_2x2image.jpeg', 'Castillo_651c7406712bd_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(93, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c74529cc35_2x2image.jpeg', 'Castillo_651c74529cc35_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(94, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', NULL, 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c755466128_2x2image.jpeg', 'Castillo_651c755466128_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(95, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c7583b417d_2x2image.jpeg', 'Castillo_651c7583b417d_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(96, 'Castillo, asda sdasdasdas', 'Castillo', 'asda', 'sdasdasdas', 'done', 'male', 'single', 'yes', '2023-10-05', 'qwe', 'American-', '', 'qweqwe', 'asdasd', 'Assumption', '123123123', 123123123, 'Castillo_651c7589df810_2x2image.jpeg', 'Castillo_651c7589df810_Signature.png', 'qweas', 'dasdas', 'Public', 'asdasdad', 'ALS Graduate', 'asdasdasd', 'Living', 'qweqweqwe', 213123123, 'asdasdas', 'dasdasda', 'asdasdasd', 'Living', 'asdasdasd', 123123123, 'asdasdasd', 'qweqweasd', 'sadasdas', 'dasdasd', 123123123, 'asdasdasd', 'asdasd', 'qwe', 'qwe', 'qw', 'w', 'q', 'q', 123123, 1231231),
(97, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'eqweasdasdad', 'rdfgdrt', 'dfgdfgdfg', 'done', 'male', 'single', 'no', '2023-10-10', 'qweqe', 'American-', '', '123', 'dfgdf', 'Assumption', '345345', 345345345, 'eqweasdasdad_6525292009ba5_2x2image.jpg', 'eqweasdasdad_6525292009ba5_Signature.png', 'asd', 'asd', 'Public', 'asdad', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 213),
(98, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'eqweasdasdad', 'rdfgdrt', 'dfgdfgdfg', 'done', 'male', 'single', 'no', '2023-10-10', 'qweqe', 'American-', '123 dfgdf Assumption', '123', 'dfgdf', 'Assumption', '345345', 345345345, 'eqweasdasdad_6525303c132d1_2x2image.jpg', 'eqweasdasdad_6525303c132d1_Signature.png', 'asd', 'asd', 'Public', 'asdad', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 213),
(99, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'eqweasdasdad', 'rdfgdrt', 'dfgdfgdfg', 'done', 'male', 'single', 'no', '2023-10-10', 'qweqe', 'American-', '123 dfgdf Assumption', '123', 'dfgdf', 'Assumption', '345345', 345345345, 'eqweasdasdad_65253060b039d_2x2image.jpg', 'eqweasdasdad_65253060b039d_Signature.png', 'asd', 'asd', 'Public', 'asdad', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 213),
(104, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'eqweasdasdad', 'rdfgdrt', 'dfgdfgdfg', 'done', 'male', 'single', 'no', '2023-10-10', 'qweqe', 'American-', '123 dfgdf Assumption', '123', 'dfgdf', 'Assumption', '345345', 345345345, 'eqweasdasdad_6525310f61b24_2x2image.jpg', 'eqweasdasdad_6525310f61b24_Signature.png', 'asd', 'asd', 'Public', 'asdad', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 213),
(107, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'eqweasdasdad', 'rdfgdrt', 'dfgdfgdfg', '', 'male', 'single', 'no', '2023-10-10', 'qweqe', 'American-', '123 dfgdf Assumption', '123', 'dfgdf', 'Assumption', '345345', 345345345, 'eqweasdasdad_6525314d6e2a4_2x2image.jpg', 'eqweasdasdad_6525314d6e2a4_Signature.png', 'asd', 'asd', 'Public', 'asdad', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 213);

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
(20, 48, 'approve', 'done', '2023-09-20 01:40:34'),
(34, 33, 'approve', 'done', '2023-09-27 03:40:59'),
(36, 27, 'approve', 'done', '2023-09-27 03:43:26'),
(59, 49, 'approve', 'done', '2023-10-08 21:53:18'),
(71, 72, 'decline', NULL, '2023-10-08 21:58:06'),
(73, 52, 'approve', 'done', '2023-10-09 00:28:52'),
(74, 52, 'approve', 'done', '2023-10-09 00:28:54'),
(75, 53, 'approve', 'done', '2023-10-10 10:50:24'),
(76, 54, 'approve', 'done', '2023-10-10 10:50:31'),
(77, 64, 'approve', 'done', '2023-10-10 10:50:36'),
(81, 99, 'decline', NULL, '2023-10-10 19:49:30'),
(82, 107, 'decline', NULL, '2023-10-10 19:49:45'),
(85, 104, 'approve', 'done', '2023-10-18 19:16:52'),
(91, 98, 'approve', 'done', '2023-10-18 19:20:16'),
(92, 97, 'approve', 'done', '2023-10-18 19:20:20'),
(93, 92, 'approve', 'done', '2023-10-18 19:20:27'),
(94, 92, 'approve', 'done', '2023-10-18 19:20:27'),
(95, 92, 'approve', 'done', '2023-10-18 19:20:28'),
(96, 93, 'approve', 'done', '2023-10-18 19:20:34'),
(97, 95, 'approve', 'done', '2023-10-18 19:20:40'),
(98, 96, 'approve', 'done', '2023-10-31 16:48:38'),
(99, 87, 'approve', 'done', '2023-10-31 16:55:09'),
(100, 65, 'approve', NULL, '2023-10-31 17:32:10'),
(102, 77, 'approve', 'done', '2023-10-31 18:22:48'),
(103, 74, 'approve', 'done', '2023-10-31 18:23:43'),
(104, 75, 'approve', 'done', '2023-10-31 18:28:06'),
(105, 76, 'approve', NULL, '2023-10-31 18:28:11'),
(106, 76, 'approve', 'done', '2023-10-31 18:28:12'),
(107, 76, 'approve', NULL, '2023-10-31 18:28:12'),
(108, 78, 'approve', 'done', '2023-10-31 18:29:35'),
(109, 78, 'approve', 'done', '2023-10-31 18:29:35');

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
(42, 9, 'renew_1stYr_2ndSem', '2023-2024', '2023-11-07 15:26:57', 'approve', '', '', 'renew_1stYr_2ndSem_qwe, qwe qwe_9_654a5741e4158.png', '654a5741e4151_qwe, qwe qwe_9_654a5741e4380.png', '654a5741e4151_qwe, qwe qwe_9_654a5741e4a50.png', '654a5741e4151_qwe, qwe qwe_9_654a5741e453b.png', '654a5741e4151_qwe, qwe qwe_9_654a5741e48a9.png', '654a5741e4151_qwe, qwe qwe_9_654a5741e4be5.png', '654a5741e4151_qwe, qwe qwe_9_654a5741e46fd.png'),
(43, 14, 'renew_2ndYr_1stSem', '2023-2024', '2023-11-07 16:07:56', 'decline', '', '', 'renew_2ndYr_1stSem_ASDSDF, XCVSDF SDFXCV_14_654a60dc908e2.png', '654a60dc908d9_ASDSDF, XCVSDF SDFXCV_14_654a60dc90a8c.png', '654a60dc908d9_ASDSDF, XCVSDF SDFXCV_14_654a60dc90dc5.png', '654a60dc908d9_ASDSDF, XCVSDF SDFXCV_14_654a60dc90b63.png', '654a60dc908d9_ASDSDF, XCVSDF SDFXCV_14_654a60dc90d07.png', '654a60dc908d9_ASDSDF, XCVSDF SDFXCV_14_654a60dc90ed0.png', '654a60dc908d9_ASDSDF, XCVSDF SDFXCV_14_654a60dc90c2f.png'),
(44, 14, 'renew_2ndYr_2ndSem', '', '2023-11-07 17:22:20', '', '', '', '', '', '', '', '', '', ''),
(45, 5, 'renew_1stYr_1stSem', '2023-2024', '2023-11-08 06:08:10', '', '', '', 'renew_1stYr_1stSem_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b25cad2f6c.jpg', '654b25cad2f64_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b25cad3422.jpg', '654b25cad2f64_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b25cad39b2.jpg', '654b25cad2f64_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b25cad35af.jpg', '654b25cad2f64_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b25cad3878.jpg', '', '654b25cad2f64_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b25cad3743.jpg'),
(46, 5, 'renew_1stYr_1stSem', '2023-2024', '2023-11-08 06:09:18', 'approve', '', '', 'renew_1stYr_1stSem_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b260ee2f09.jpeg', '654b260ee2eff_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b260ee30de.jpeg', '654b260ee2eff_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b260ee3828.jpeg', '654b260ee2eff_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b260ee32dc.jpeg', '654b260ee2eff_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b260ee367a.jpeg', '654b260ee2eff_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b260ee39bb.jpeg', '654b260ee2eff_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b260ee3498.jpeg'),
(47, 5, 'renew_1stYr_2ndSem', '2023-2024', '2023-11-08 06:09:50', '', '', '', 'renew_1stYr_2ndSem_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b262ed22e2.jpg', '654b262ed22dc_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b262ed2452.jpg', '654b262ed22dc_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b262ed2a2b.jpg', '654b262ed22dc_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b262ed266f.jpg', '654b262ed22dc_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b262ed290a.jpg', '654b262ed22dc_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b262ed2b54.jpg', '654b262ed22dc_eqweasdasdad, rdfgdrt dfgdfgdfg_5_654b262ed27e6.jpg'),
(65, 12, 'renew_2ndYr_2ndSem', '', '2023-11-08 06:28:01', '', '', '', '', '', '', '', '', '', ''),
(66, 12, 'renew_1stYr_2ndSem', '', '2023-11-08 06:49:39', 'approve', '', '', '', 'qqweqw', '', '', '', '', ''),
(67, 14, 'renew_1stYr_1stSem', '', '2023-11-08 09:44:31', 'approve', '', '', 'qeasdaw', '', '', '', '', '', ''),
(68, 14, 'renew_1stYr_2ndSem', '', '2023-11-08 09:46:08', 'decline', '', '', '', '', '', '', '', '', ''),
(69, 14, 'renew_3rdYr_1stSem', '', '2023-11-08 09:46:39', 'approve', '', '', '', '', '', '', '', '', ''),
(70, 14, 'renew_3rdYr_2ndSem', '', '2023-11-08 09:54:08', 'approve', '', '', '', '', '', '', '', '', ''),
(71, 14, 'renew_4thYr_1stSem', '', '2023-11-08 10:10:17', 'approve', '', '', '', '', '', '', '', '', ''),
(72, 14, 'renew_4thYr_2ndSem', '', '2023-11-08 10:16:20', 'approve', '', '', '', '', '', '', '', '', ''),
(73, 12, 'renew_3rdYr_1stSem', '2023-2024', '2023-11-09 14:05:57', 'approve', '', '', 'renew_3rdYr_1stSem_CVB, CVB CVB_12_654ce7456a621.jpeg', '654ce7456a61b_CVB, CVB CVB_12_654ce7456ab90.jpeg', '654ce7456a61b_CVB, CVB CVB_12_654ce74570a45.jpg', '654ce7456a61b_CVB, CVB CVB_12_654ce7456ad22.jpeg', '654ce7456a61b_CVB, CVB CVB_12_654ce74570849.jpg', '654ce7456a61b_CVB, CVB CVB_12_654ce74570da8.jpg', '654ce7456a61b_CVB, CVB CVB_12_654ce7456aea2.jpeg'),
(74, 9, 'renew_2ndYr_1stSem', '213123', '2023-11-10 13:33:55', 'approve', '', '', '', '', '', '', '', '', ''),
(75, 9, 'renew_3rdYr_1stSem', '', '2023-11-10 13:44:26', 'approve', '', '', '', '', '', '', '', '', ''),
(76, 9, 'renew_3rdYr_2ndSem', '', '2023-11-10 13:49:21', 'approve', '', '', '', '', '', '', '', '', ''),
(77, 9, 'renew_4thYr_1stSem', '', '2023-11-10 13:50:15', 'approve', '', '', '', '', '', '', '', '', ''),
(78, 9, 'renew_4thYr_2ndSem', '', '2023-11-10 13:58:51', 'approve', '', '', '', '', '', '', '', '', ''),
(82, 9, 'renew_1stYr_1stSem', '', '2023-11-10 14:51:43', 'decline', '', '', '', '', '', '', '', '', ''),
(83, 9, 'renew_1stYr_1stSem', '', '2023-11-10 14:52:53', 'decline', '', '', '', '', '', '', '', '', ''),
(84, 9, 'renew_1stYr_1stSem', 'qwe', '2023-11-10 14:57:54', 'decline', '', '', '', '', '', '', '', '', ''),
(85, 9, 'renew_1stYr_1stSem', '', '2023-11-10 14:59:02', 'decline', '', '', '', '', '', '', '', '', ''),
(86, 9, 'renew_1stYr_1stSem', '', '2023-11-10 15:01:50', 'decline', '', '', '', '', '', '', '', '', ''),
(87, 9, 'renew_1stYr_1stSem', '2023-2024', '2023-11-10 15:07:21', 'approve', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_gif', '654e4729774e6_qwe, qwe qwe_9_gif', '654e4729774e6_qwe, qwe qwe_9_gif', '654e4729774e6_qwe, qwe qwe_9_gif', '654e4729774e6_qwe, qwe qwe_9_gif', '654e4729774e6_qwe, qwe qwe_9_gif', '654e4729774e6_qwe, qwe qwe_9_gif'),
(88, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 15:11:41', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', '654e482d0d394_qwe, qwe qwe_9_jpg', '654e482d0d394_qwe, qwe qwe_9_jpg', '654e482d0d394_qwe, qwe qwe_9_jpg', '654e482d0d394_qwe, qwe qwe_9_jpg', '654e482d0d394_qwe, qwe qwe_9_jpg', '654e482d0d394_qwe, qwe qwe_9_jpg'),
(89, 9, 'renew_5thYr_1stSem', '2020', '2023-11-10 15:14:52', 'decline', '', '', 'renew_5thYr_1stSem_qwe, qwe qwe_9_jpg', '654e48ec08d4c_qwe, qwe qwe_9_jpg', '654e48ec08d4c_qwe, qwe qwe_9_jpg', '654e48ec08d4c_qwe, qwe qwe_9_jpg', '654e48ec08d4c_qwe, qwe qwe_9_jpg', '654e48ec08d4c_qwe, qwe qwe_9_jpg', '654e48ec08d4c_qwe, qwe qwe_9_jpg'),
(90, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 15:21:29', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg'),
(91, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 15:29:02', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_jpg'),
(92, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 15:32:05', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCorpng', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cogjpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Atmjpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_CurrCorjpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Dtrjpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Formpng', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Curripng'),
(93, 9, 'renew_1stYr_1stSem', '', '2023-11-10 15:34:03', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.png', '', '', '', '', ''),
(94, 9, 'renew_1stYr_1stSem', '', '2023-11-10 15:35:09', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.png', '', '', '', '', ''),
(95, 9, 'renew_1stYr_1stSem', '', '2023-11-10 15:35:54', 'approve', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.png', '', '', '', '', ''),
(96, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 16:14:59', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Atm.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_CurrCor.png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Dtr.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Form.png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Curri.jpg'),
(98, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 16:16:48', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Atm.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_CurrCor.png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Dtr.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Form.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Curri.jpg'),
(99, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 16:18:19', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.png', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Atm.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_CurrCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Dtr.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Form.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Curri.jpg'),
(100, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 16:19:27', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Atm.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_CurrCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Dtr.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Form.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Curri.jpg'),
(101, 9, 'renew_1stYr_1stSem', '2020', '2023-11-10 16:21:33', 'decline', '', '', 'renew_1stYr_1stSem_qwe, qwe qwe_9_PrevCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Cog.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Atm.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_CurrCor.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Dtr.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Form.jpg', 'renew_1stYr_1stSem_qwe, qwe qwe_9_Curri.jpg'),
(102, 9, 'renew_1stYr_1stSem', '', '2023-11-10 16:25:02', 'decline', '', '', '', '', '', '', '', '', ''),
(104, 14, 'renew_4thYr_2ndSem', '', '2023-11-11 14:34:25', 'decline', '', '', '', '', '', '', '', '', ''),
(106, 14, 'renew_4thYr_2ndSem', '', '2023-11-11 14:39:28', 'approve', '', '', '', '', '', '', '', '', ''),
(107, 14, 'renew_5thYr_1stSem', '', '2023-11-12 12:41:29', 'approve', '', '', '', '', '', '', '', '', ''),
(108, 14, 'renew_5thYr_2ndSem', '', '2023-11-12 14:39:05', 'approve', '', '', '', '', '', '', '', '', '');

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
(29, 108, NULL, 'renew_5thYr_2ndSem_');

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
  `scholar_id` int(10) NOT NULL,
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
  `approve_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`scholar_id`, `image`, `scholar_award_status`, `status_lastsem`, `user`, `password`, `applicant_id`, `full_name`, `last_name`, `first_name`, `middle_name`, `age`, `gender`, `voter`, `contact_num1`, `contact_num2`, `full_address`, `barangay`, `telegram`, `atm_number`, `facebook`, `email`, `course`, `years_course`, `current_yr`, `degree_or_non`, `school_name`, `school_address`, `renew_1stYr_1stSem`, `renew_1stYr_2ndSem`, `renew_2ndYr_1stSem`, `renew_2ndYr_2ndSem`, `renew_3rdYr_1stSem`, `renew_3rdYr_2ndSem`, `renew_4thYr_1stSem`, `renew_4thYr_2ndSem`, `renew_5thYr_1stSem`, `renew_5thYr_2ndSem`, `renew_6thYr_1stSem`, `renew_6thYr_2ndSem`, `c_service1st`, `c_service2nd`, `approve_date`) VALUES
(5, 'eqweasdasdad_profile.jpg', '', 'renew_1stYr_1stSem_2023-2024', 'eqweasdasdad', '$2y$10$bkPmzBB/oEypHsB4qJ1fc.0L8thjsItPYblRVSlxeNF3GFFavEJga', 98, 'eqweasdasdad, rdfgdrt dfgdfgdfg', 'eqweasdasdad', 'rdfgdrt', 'dfgdfgdfg', 0, '', '', '345345', '123123', '', '', '', '0', '', '0', '', 0, '0', NULL, '', '', 'uploaded', 'uploaded', '', 'uploaded', '', '', '', '', '', '', '', '', NULL, NULL, '2023-10-24'),
(9, '', 'released_renew_2ndYr_1stSem_213123', 'renew_1stYr_1stSem_', 'qwe', '$2y$10$bmuvoFNCxgEMQCZcEtN7PuBVdGUZYuSFNWqfRjss0T4XCF.z1k11m', 20, 'qwe, qwe qwe', 'qwe', 'qwe', 'qwe', 0, 'male', 'yes', '+639612479632', '123123', 'qweqweqweqweqweqweqweqwe', 'qweqweqwe', '', '0', '', '0', 'qweqweqweqweqwe', 0, 'als', NULL, 'qweqwe', 'qweqwe', 'reupload renewal', 'null', 'uploaded', NULL, 'uploaded', 'uploaded', 'uploaded', 'approve', 'reupload renewal', NULL, NULL, NULL, 20, NULL, '2023-10-31'),
(12, 'CVB_profile.jpg', 'released_renew_3rdYr_1stSem_2023-2024', 'renew_3rdYr_1stSem_2023-2024', 'CVB', '$2y$10$PuzKNDWprIeM4PeNC16OUelTYMVSR0zr0xjJUZGzzHVEw35i8oVFC', 0, 'CVB, CVB CVB', 'CVB', 'CVB', 'CVB', 0, '', '', '+639164983650', '', '', '', '', '0', '', '', '', 0, '', NULL, '', '', 'uploaded', 'uploaded', NULL, NULL, 'uploaded', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, '2023-11-03'),
(14, 'ASDSDF_profile.jpg', 'released_renew_4thYr_2ndSem_', 'renew_5thYr_2ndSem_', 'ASDSDF', '$2y$10$/3TOohNGpQJIFJoJCV68du9ufANFd0jZV.uSQ3FQpKcJulmWxUHG6', 0, 'ASDSDF, XCVSDF SDFXCV', 'ASDSDF', 'XCVSDF', 'SDFXCV', 0, '', '', '235345', '', '', '', '', '0', '', '', '', 0, '', NULL, '', '', 'uploaded', 'uploaded', 'uploaded', 'uploaded', 'uploaded', 'uploaded', 'uploaded', 'approve renewal', 'approve renewal', 'approve renewal', NULL, NULL, 10, NULL, '2023-11-03'),
(22, '', '', '', 'asdasd', '$2y$10$Kq9kj10PVW2esAVyIMe4qO3aGg8BgFJne0TrIk0R/Yea6XYuhEBvO', 0, 'asdasd, asdasd asdasd', 'asdasd', 'asdasd', 'asdasd', 0, '', '', '4356456', '', '', '', '', '', '', '', '', 0, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-12'),
(23, 'asd_profile.jpg', '', '', 'asd', '$2y$10$D36Y6OANMpb2cN3bDOEGT.Uoobf0LFNlrRWxEPSLEpRFB9vgQOJMe', 0, 'asd, asd asd', 'asd', 'asd', 'asd', 0, '', '', '123123', '1212312', 'qwe', 'qwe', 'weqweqwe', '', 'qweq', ' qwe@qwe', '', 0, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `scholar_archive`
--

CREATE TABLE `scholar_archive` (
  `scholar_id` int(100) NOT NULL,
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
  `approve_date` date NOT NULL DEFAULT current_timestamp()
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
(168, 'zxczxc, qweqwe asdqw', 'zxczxc', 'qweqwe', 'asdqw', '123', 'qeqwe@asd', '$2y$10$6TeFjAsvRkqIu6B3WnwU..oEA.ic/T3XDPEE9sJmNhQIPmct/lD/G', 123123, '', 'qeqwe@asd', ''),
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
(35, 'asdasd', 0, '2023-09-19 17:38:34'),
(36, 'asd', 0, '2023-10-08 13:47:17'),
(37, 'z', 0, '2023-10-08 13:47:20'),
(38, 'z', 0, '2023-10-08 13:47:22'),
(39, 'z', 0, '2023-10-08 13:47:25'),
(40, 'z', 0, '2023-10-08 13:47:28'),
(41, 'z', 0, '2023-10-08 13:47:31'),
(42, 'z', 0, '2023-10-08 13:47:33'),
(43, 'adsxc', 0, '2023-10-08 13:47:36'),
(44, 'zxczs', 0, '2023-10-08 13:47:38'),
(45, 'zxc', 0, '2023-10-08 13:47:44'),
(46, 'zxcasd', 0, '2023-10-08 13:47:47'),
(47, 'zxczs', 0, '2023-10-08 13:47:49');

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
  ADD KEY `FK_ExaminationAction` (`action_id`);

--
-- Indexes for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  ADD PRIMARY KEY (`exam_action_id`),
  ADD KEY `FK_Examination_Action` (`examination_id`);

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
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  MODIFY `exam_action_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `registration_approval`
--
ALTER TABLE `registration_approval`
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `renewal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `renewal_award`
--
ALTER TABLE `renewal_award`
  MODIFY `award_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `renewal_process`
--
ALTER TABLE `renewal_process`
  MODIFY `process_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `scholar_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
-- Constraints for table `registration_approval`
--
ALTER TABLE `registration_approval`
  ADD CONSTRAINT `registration_approval_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `registration` (`applicant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `renewal`
--
ALTER TABLE `renewal`
  ADD CONSTRAINT `FK_Renewal` FOREIGN KEY (`scholar_id`) REFERENCES `scholar` (`scholar_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
