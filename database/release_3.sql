-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2020 at 05:43 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repairnetwork_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riq_notes`
--

CREATE TABLE `tbl_riq_notes` (
  `note_id` int(11) NOT NULL,
  `note_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `caller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_riq_notes`
--

INSERT INTO `tbl_riq_notes` (`note_id`, `note_desc`, `caller_id`, `user_id`, `note_added_on`) VALUES
(1, 'test 3', 1808060, 1022, '2020-07-14 06:41:02'),
(2, 'test 2', 1804102, 1022, '2020-07-14 06:41:13'),
(3, 'test 1', 1801519, 1022, '2020-07-14 06:41:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_riq_notes`
--
ALTER TABLE `tbl_riq_notes`
  ADD PRIMARY KEY (`note_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_riq_notes`
--
ALTER TABLE `tbl_riq_notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
