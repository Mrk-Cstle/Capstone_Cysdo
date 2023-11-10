-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 01:59 PM
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
(64, 12, 'renew_1stYr_2ndSem', '', '2023-11-08 06:27:50', '', '', '', '', '', '', '', '', '', ''),
(65, 12, 'renew_2ndYr_2ndSem', '', '2023-11-08 06:28:01', '', '', '', '', '', '', '', '', '', ''),
(66, 12, 'renew_1stYr_2ndSem', '', '2023-11-08 06:49:39', 'approve', '', '', '', '', '', '', '', '', ''),
(67, 14, 'renew_1stYr_1stSem', '', '2023-11-08 09:44:31', 'approve', '', '', '', '', '', '', '', '', ''),
(68, 14, 'renew_1stYr_2ndSem', '', '2023-11-08 09:46:08', 'decline', '', '', '', '', '', '', '', '', ''),
(69, 14, 'renew_3rdYr_1stSem', '', '2023-11-08 09:46:39', 'approve', '', '', '', '', '', '', '', '', ''),
(70, 14, 'renew_3rdYr_2ndSem', '', '2023-11-08 09:54:08', 'approve', '', '', '', '', '', '', '', '', ''),
(71, 14, 'renew_4thYr_1stSem', '', '2023-11-08 10:10:17', 'approve', '', '', '', '', '', '', '', '', ''),
(72, 14, 'renew_4thYr_2ndSem', '', '2023-11-08 10:16:20', 'approve', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `renewal`
--
ALTER TABLE `renewal`
  ADD PRIMARY KEY (`renewal_id`),
  ADD KEY `FK_Renewal` (`scholar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `renewal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `renewal`
--
ALTER TABLE `renewal`
  ADD CONSTRAINT `FK_Renewal` FOREIGN KEY (`scholar_id`) REFERENCES `scholar` (`scholar_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
