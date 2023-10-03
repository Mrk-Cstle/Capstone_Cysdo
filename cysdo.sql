-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 08:49 PM
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
(25, 'Castillo, Mark David S.', 'Castillo', 'Mark David', 'S.', '2002-02-11', 2147483647, ' markdavid.castillo.s@bulsu.edu.ph', '    Marilao Bulacan', 'male', 'single', 'Filipino-', 'Castillo_profile.jpeg', '', '$2y$10$eSn1oqf8j8DfjifsaDPOQ.qNpyP1J6VZwB1tzmDB1mjr59oZKIeL6');

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
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `examination_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `result` varchar(255) NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, '', 'asd', 'asdwq', 'qwe', 'done', 'male', 'single', 'yes', '2023-04-04', 'sadqwe', 'qweqwe', '', 'asdqwe', 'asdwqe', 'asdawd', '123123', 123123123, '', '', 'qweqweqw', 'eqweqwe', 'public', 'qwe12', 'als', 'qweq2e', 'alive', 'qweq', 2123, 'eqwe', 'qweqwe', 'qweqwe', 'alive', 'qweqwe', 3123, 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 123123, 'qweq2', 'qweqwe', '', '', '', '', '', '', 12312, 213123123),
(18, 'asd, asdasd asdasd', 'asd', 'asdasd', 'asdasd', 'done', 'male', 'single', 'yes', '2023-05-31', 'asdasd', 'qweqwe', '', 'qwe', 'qweqwe', 'qweq', '123123', 123123, '', '', 'qweqwe', 'qweqwe', 'public', 'qweqwe', 'als', 'qweqwe', 'alive', 'eqweqweqasd', 123123, 'qwe', 'qwe', 'qweqwe', 'alive', 'qweqwe', 123, 'qwe', 'qwe', 'qweqwe', 'qweqwe', 213123, 'qweqwe', 'qweqwe', 'dasd', 'asdasd', 'asdas', 'dasd', 'asdasd', 'asdasd', 123123, 123123123),
(19, 'zxczxczxczxc, zxczxc zxczxc', 'zxczxczxczxc', 'zxczxc', 'zxczxc', 'done', 'male', 'single', 'yes', '2023-06-30', 'zxczxc', 'zxczxc', 'qeasdqwweqweasd', 'zxczxc', 'zxc', 'zxczxczxc', '123', 123123, '', '', 'zxczxc', 'zxczxc', 'public', 'zxczxczxc', 'als', '', 'alive', '', 0, '', '', '', 'alive', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(20, 'qwe, qwe qwe', 'qwe', 'qwe', 'qwe', 'done', 'male', 'single', 'yes', '2023-07-04', 'qweqwe', 'qweasd', '', '123123', 'qweqwe', 'qweqweqwe', '123123123', 123123, '', '', 'qweqwe', 'qweqwe', 'public', 'qweqweqweqweqwe', 'als', 'qweqweqweqwe', 'alive', 'qweqwe', 123123, 'qweqwe', 'qweqweqwe', '', 'alive', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 12),
(22, 'qwe', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(23, 'qwe', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(24, 'a', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(25, 'a', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(26, 'q', '', '', '', 'done', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
(27, 'eqweasdasdad, qweqwe qeqe', 'eqweasdasdad', 'qweqwe', 'qeqe', 'done', 'male', 'single', 'yes', '2023-09-04', 'qweqe', 'American-', '', 'easeqwe', 'qweqw', 'Assumption', '123123', 2147483647, 'CysdoLogo.jpg', 'callIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', 'qwe', 'Living', 'qwe', 123, 'qwe', 'qwe', 'qwe', 'Living', 'qwe', 123, 'eqwe', 'qwe', 'qwe', 'qwe', 123, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123, 123),
(28, 'asd, asd asd', 'asd', 'asd', 'asd', 'done', 'male', 'single', 'yes', '2023-09-10', 'asd', 'Filipino-C', '', 'asdasd', 'qweqwe', 'San Martin II', '123123123', 123123, '16943582172179088735958047778217.jpg', '16943582271153413013204315484875.jpg', 'qwe', 'qwe', 'Private', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(29, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '123123', 123123, '', '', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(30, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '123123', 123123, 'Array', 'Array', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(31, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '123123', 123123, 'CysdoBg.jpg', 'fbIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(32, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '123123', 123123, 'CysdoBg.jpg', 'fbIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(33, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '+639612479632', 123123, 'CysdoBg.jpg', 'fbIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(34, 'qwe, qe qwe', 'qwe', 'qe', 'qwe', 'done', 'male', 'single', 'yes', '2023-09-22', 'qweqe', 'Arabic-', '', 'qweqwe', 'qweqwe', 'Assumption', '123123', 123123, 'CysdoBg.jpg', 'fbIcon.png', 'qweqwe', 'qweqwe', 'Public', 'qweqwe', 'ALS Graduate', '', '-', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123123, 123123),
(35, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, '1x1.jpg', 'CYSDOHeader.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(36, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, 'Castillo_65002d9d98440_2x2image.jpg', 'CYSDOHeader.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(37, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '+639612479632', 123123123, 'Castillo_65002dc69fe8a_2x2image.jpg', 'CYSDOHeader.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(38, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, 'Castillo_65002f0681782_2x2image.jpg', 'Castillo_65002f0681782_2x2image.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(39, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, 'Castillo_65002f1365b54_2x2image.jpg', 'Castillo_65002f1365b54_2x2image.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(40, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '+639612479632', 123123123, 'Castillo_65002f19c4057_2x2image.jpg', 'Castillo_65002f19c4057_2x2image.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(41, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, 'Castillo_6500312a1fc8d_2x2image.jpg', 'Castillo_6500312a1fc8d_Signature.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(42, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '+639612479632', 123123123, 'Castillo_6500316f68566_2x2image.jpg', 'Castillo_6500316f68566_Signature.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(43, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '+639612479632', 123123123, 'Castillo_650031a0339d4_2x2image.jpg', 'Castillo_650031a0339d4_Signature.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(44, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, 'Castillo_650031b316e1f_2x2image.jpg', 'Castillo_650031b316e1f_Signature.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(45, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, 'Castillo_650031d263ec9_2x2image.jpg', 'Castillo_650031d263ec9_Signature.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(46, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '123123123', 123123123, 'Castillo_6500351972772_2x2image.jpg', 'Castillo_6500351972772_Signature.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(47, 'Castillo, Mark David Santos', 'Castillo', 'Mark David', 'Santos', 'done', 'male', 'single', 'yes', '2002-02-11', 'bulacan', 'Filipino-', '', '123', 'asd', 'Assumption', '+639957751618', 123123123, 'Castillo_650035ee9f307_2x2image.jpg', 'Castillo_650035ee9f307_Signature.png', 'bsu', 'bsu', 'Public', 'bsit', '3rd Year College', 'Restituto Castillo', 'Living', 'bulacan', 123123123, 'qwe', 'qwe', 'Florelita Castillo', 'Living', 'bulacan', 123123123, '123123', '123123', 'qwe', 'qwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123, 123123),
(48, 'asdasd, sdfsdf sdfsdf', 'asdasd', 'sdfsdf', 'sdfsdf', 'done', 'male', 'single', 'yes', '2023-09-12', 'qweqe', 'American-', '', '123123', '123123', 'Bagong Buhay II', '123123', 123123, 'asdasd_650079ea3b686_2x2image.jpg', 'asdasd_650079ea3b686_Signature.png', 'asdasd', 'asdasd', 'Public', 'asdasd', 'ALS Graduate', 'asdasd', 'Living', 'asdasd', 123123, '3123', '123123', 'asdasd', 'Living', 'asdasd', 8, 'asdasdas', 'asdasdasd', 'qweqwe', 'qweqwe', 123123, 'qweqwe', 'qweqwe', 'qwe', 'qwe', 'qwe', 'qweqwe', 'qweqwe', 'qweqwe', 123123, 123123),
(49, 'qweewq, qweerq qawer', 'qweewq', 'qweerq', 'qawer', NULL, 'male', 'single', 'yes', '2023-09-29', 'tyrtyrtyr', 'American-', '', '34a2234a', 'fghjfghj', 'Assumption', '5634564', 5645674, 'qweewq_6516e8e98320a_2x2image.jpg', 'qweewq_6516e8e98320a_Signature.png', '67r tyrtyur', 'tyrtyr', 'Public', '6785yuty', 'ALS Graduate', '', 'Living', '', 0, '', '', '', '-', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', 123, 123);

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
(9, 22, 'decline', '2023-07-02 20:09:04'),
(10, 23, 'decline', '2023-07-02 20:09:56'),
(11, 22, 'decline', '2023-07-02 20:10:05'),
(12, 20, 'approve', '2023-07-02 20:11:25'),
(13, 18, 'approve', '2023-07-02 20:11:31'),
(14, 2, 'approve', '2023-07-09 19:58:10'),
(15, 24, 'decline', '2023-07-09 22:25:05'),
(16, 25, 'decline', '2023-07-09 23:25:06'),
(17, 26, 'decline', '2023-08-02 00:18:45'),
(18, 28, 'approve', '2023-09-10 23:05:58'),
(19, 47, 'decline', '2023-09-20 01:39:01'),
(20, 48, 'approve', '2023-09-20 01:40:34'),
(21, 46, 'approve', '2023-09-27 02:55:59'),
(23, 44, 'approve', '2023-09-27 03:02:14'),
(24, 43, 'approve', '2023-09-27 03:12:30'),
(25, 42, 'approve', '2023-09-27 03:13:52'),
(26, 38, 'decline', '2023-09-27 03:16:45'),
(28, 37, 'approve', '2023-09-27 03:32:26'),
(29, 39, 'decline', '2023-09-27 03:36:11'),
(30, 41, 'decline', '2023-09-27 03:36:28'),
(31, 36, 'decline', '2023-09-27 03:36:40'),
(32, 35, 'decline', '2023-09-27 03:38:25'),
(34, 33, 'approve', '2023-09-27 03:40:59'),
(35, 32, 'decline', '2023-09-27 03:43:04'),
(36, 27, 'approve', '2023-09-27 03:43:26'),
(37, 31, 'approve', '2023-09-27 03:44:04'),
(38, 30, 'decline', '2023-09-27 03:44:34'),
(39, 29, 'decline', '2023-09-27 03:44:51'),
(40, 29, 'decline', '2023-09-27 03:44:52'),
(41, 41, 'approve', '2023-09-27 12:34:59'),
(42, 45, 'decline', '2023-09-27 12:35:44'),
(43, 46, 'approve', '2023-09-27 12:36:56'),
(44, 47, 'approve', '2023-09-28 02:20:52'),
(45, 47, 'approve', '2023-09-28 02:23:02'),
(46, 47, 'decline', '2023-09-28 02:24:37'),
(47, 47, 'decline', '2023-09-28 02:26:16'),
(48, 47, 'approve', '2023-09-28 02:28:25'),
(49, 47, 'approve', '2023-09-28 02:31:23'),
(50, 42, 'approve', '2023-09-28 02:45:28'),
(51, 43, 'decline', '2023-09-28 02:45:40'),
(52, 42, 'approve', '2023-09-28 02:46:19'),
(53, 47, 'decline', '2023-09-28 02:55:02'),
(54, 47, 'decline', '2023-09-28 02:58:59'),
(55, 47, 'decline', '2023-09-28 02:59:36'),
(56, 47, 'decline', '2023-09-28 03:07:00'),
(57, 47, 'decline', '2023-09-28 03:09:06'),
(58, 47, 'decline', '2023-09-28 03:09:42');

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
(165, 'asdasd,  ', 'asdasd', '', '', '', 'QASs', '$2y$10$mLDbCbU8xgKOwMk.9Z.Fse8kJfE9rTUKaFKyloFd5YXHuwQiSvgD2', 12312312, '', 'QASs', ''),
(166, ',  asd', '', '', 'asd', '', 'asd', '$2y$10$Ze5h8a/n.MJeuQ650sJ/m.r30W.ICZxKb.v6crisHbSbqT58cX08e', 0, '', 'asd', ''),
(167, 'qwem,  ', 'qwem', '', '', '', 'qweqweqweqwe', '$2y$10$8qmU/eYjAALSYcgRCLZU5eNiDkoCpCtqr0skiWBwUC30VloS9Ne66', 0, '', 'qweqweqweqweqwe', ''),
(168, 'zxczxc, qweqwe asdqw', 'zxczxc', 'qweqwe', 'asdqw', '123', 'qeqwe@asd', '$2y$10$6TeFjAsvRkqIu6B3WnwU..oEA.ic/T3XDPEE9sJmNhQIPmct/lD/G', 123123, '', 'qeqwe@asd', ''),
(175, 'asd, qwe asd', 'asd', 'qwe', 'asd', '', '', '$2y$10$tedEnHfW6SKyYFFQ12eQdODBl0EJhY9NeaD2HtznBIN4UAhfJhB.O', 0, '', '', ''),
(176, ', xacsdQWEZXC AS', '', 'xacsdQWEZXC', 'AS', '', 'zxfaewdasd@asdzxc', '$2y$10$bvNGuatyaGaIUR/la71rYu/.Br5jFsYZ1tTKpZqPKfhc7i4mizZ6K', 0, '', 'zxfaewdasd@asdzxc', ''),
(179, 'asd, asd asd', 'asd', 'asd', 'asd', 'asd', 'asdasd@asd', '$2y$10$B0ZMcRbVavNZzUCHIvpzPeM..xMsLKqRWtUVzlthMZV2yu3T1CdKC', 123123, '', 'asdasd@asd', '');

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
(35, 'asdasd', 0, '2023-09-19 17:38:34');

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
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`examination_id`),
  ADD KEY `FK_Examination_Applicant` (`applicant_id`);

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
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examination_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examination_requirements`
--
ALTER TABLE `examination_requirements`
  MODIFY `exam_action_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `registration_approval`
--
ALTER TABLE `registration_approval`
  MODIFY `action_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examination`
--
ALTER TABLE `examination`
  ADD CONSTRAINT `FK_Examination_Applicant` FOREIGN KEY (`applicant_id`) REFERENCES `registration_approval` (`application_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
