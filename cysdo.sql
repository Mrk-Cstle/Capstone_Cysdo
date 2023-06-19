-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 07:21 PM
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

INSERT INTO `admin` (`admin_id`, `full_name`, `contact_number`, `email`, `address`, `image`, `user`, `password`) VALUES
(7, 'qaz, qaz qaz', 1, 'qaz@qaz', 'qazqaz', '', 'qaz@qaz', '$2y$10$/BO97my/UJbzFStoBQ/IAOFw5h3nbz1ZTEAloEV21Urv7YqMXZss2'),
(8, 'qwe, qwe qwe', 123, 'qwe@qwe', 'qwe', '', 'qwe@qwe', '$2y$10$gwvIEogUgo6ccv5I9x/sje8uP89iJelsmLqM70WU1BR4WG7STKDn.');

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
(62, '2023-06-19', 'asdasdasd', 'qaz@qaz', 'scholar'),
(63, '2023-06-19', 'qweasczxc', 'qaz@qaz', 'applicant'),
(71, '2023-06-19', 'asdzxczxc', 'qaz@qaz', 'applicant'),
(74, '2023-06-19', 'zxcqdasd', 'qaz@qaz', 'applicant'),
(75, '2023-06-19', 'qweasd', 'qaz@qaz', 'scholar');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullName` varchar(255) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
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
  `sizeFamily` int(50) NOT NULL,
  `annualGross` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullName`, `lastName`, `firstName`, `middleName`, `status`, `gender`, `civilStatus`, `voter`, `birthDate`, `birthPlace`, `citizenship`, `fullAddress`, `houseAddress`, `streetAddress`, `barangayAddress`, `contactNum1`, `contactNum2`, `2x2Pic`, `signaturePic`, `schoolName`, `schoolAddress`, `schoolType`, `course`, `yearLevel`, `fatherName`, `fatherStatus`, `fatherAddress`, `fatherContact`, `fatherOccupation`, `fatherEduc`, `motherName`, `motherStatus`, `motherAddress`, `motherContact`, `motherOccupation`, `motherEduc`, `guardianName`, `guardianAddress`, `guardianContact`, `guardianOccupation`, `guardianEduc`, `sizeFamily`, `annualGross`) VALUES
('asd, asdasd asd', 'asd', 'asdasd', 'asd', 'approved', 'male', 'single', 'yes', '2023-04-17', 'dqwe', 'wqeqwe', '', 'asdasd', 'dqwe', 'qweqw', 123123, 123123, '', '', 'asdasd', 'asdasd', 'public', 'asdasd', 'als', 'asdasd', 'alive', 'asdasd', 123123, 'asdasd', 'asdasd', 'asdasd', 'alive', 'wqeqwe', 123123, 'qsdasd', 'asdasd', '', '', 0, '', '', 123123, 123123),
('asd, asdwq qwe', 'asd', 'asdwq', 'qwe', '', 'male', 'single', 'yes', '2023-04-04', 'sadqwe', 'qweqwe', '', 'asdqwe', 'asdwqe', 'asdawd', 123123, 123123123, '', '', 'qweqweqw', 'eqweqwe', 'public', 'qwe12', 'als', 'qweq2e', 'alive', 'qweq', 2123, 'eqwe', 'qweqwe', 'qweqwe', 'alive', 'qweqwe', 3123, 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 123123, 'qweq2', 'qweqwe', 12312, 213123123),
('qwe, asdwq  asdqw', 'qwe', 'asdwq ', 'asdqw', 'undefined', 'male', 'single', 'yes', '2023-04-23', 'asd', 'asdw', '', 'wqdqe', 'asd', 'awqe', 123123, 123123, '', '', 'qweqweqw', 'qweqweqe', 'public', 'qwe', 'als', 'eqweqwe', 'alive', 'qwe21', 3123123, 'qweqwe', 'qweqwe', 'eqweqwe', 'alive', 'qweqwe', 123123, 'qweqwe', 'qweqwe', '', '', 0, '', '', 123123, 123123),
('qweqw, weqwe qweqwe', 'qweqw', 'weqwe', 'qweqwe', 'undefined', 'male', 'single', 'yes', '2023-04-24', 'qweqwe', 'qweqwe', '', 'qweqwe', 'qwe', 'qweqwe', 1231231, 123123123, '', '', 'qweqwe', 'qweqweqw', 'public', '123123', 'highSchoolGrad', 'qweqwe', 'alive', 'qweqwe', 123123, 'weqweqwe', 'qweqwe', 'qweqwe', 'alive', 'qweqwe', 123123, 'qweqweqwe', 'qweqwe', 'qweqwe', '', 0, '', '', 123123, 12312312),
('qwqw, qwqw qwqw', 'qwqw', 'qwqw', 'qwqw', 'denied', 'male', 'single', 'yes', '2023-03-18', 'qwqwqw', 'qwqwqw', '', 'qwqqw', 'qwqwqw', 'qwqwqw', 12123, 123123123, 0x43617374696c6c6f28327832292e6a706567, 0x5350494d53204c4f474f2e706e67, 'qweqwe', 'qweqwe', 'public', 'qweqwe', 'als', 'qweqwe', 'alive', 'qweqwe', 123123, 'qwe', 'qweqwe', 'qweqweqwe', 'alive', 'qweqweqwe', 123, 'qweqwe', 'qweqweqwe', 'qweqweqwe', 'qweqweqwe', 123123, 'qweqwe', 'qweqweqwe', 213123, 12121212);

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
(125, 'castillo, mark david', 'castillo', 'mark', 'david', 'qwe', 'qwe', '$2y$10$Zib3yIC1HIaVReUodsRinONQY2Jbi2CB3SEYLOJ4t/oASAlh1Pkey', 123, '', 'qwea', ''),
(136, ',  ', '', '', '', '', 'qw', '$2y$10$oi.LbMhkmmwwlxgGatQIqunIFEN//wfpgJsIB9MjgBbKav197YEoi', 0, '', 'qw', ''),
(139, ',  ', '', '', '', '', 'qwe', '$2y$10$Wjl.ClU7USZgJ4rP9hYBX.bWMl7LRnJCJ3.2zlLGtV/3eTX/5cbr6', 0, '', 'qwe', ''),
(153, ',  ', '', '', '', '', 'asdas@qweqwe', '$2y$10$8hcNwH6/c2IhnsS9ZvA0YOVnUj5NuzCideuSyos1S2W7jrnVuL76W', 0, '', 'asdas@qweqwe', ''),
(155, ',  qwe', '', '', 'qwe', '', 'qwe@qwe', '$2y$10$epGXl08dcN5JkSSGs.Kb0eoy2z8qiiz96vfdY3mc3Jh5zWtKTjeVG', 0, '', 'qwe@qwe', ''),
(156, ',  asdasd', '', '', 'asdasd', '', 'asd@asd', '$2y$10$nGxyykK0T9m59lsq1vZ3pun8oA2/fpqlHzR2/fWERAk0iREbGovsu', 0, '', 'asd@asd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`uploadId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`fullName`),
  ADD UNIQUE KEY `fullName` (`fullName`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `uploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
