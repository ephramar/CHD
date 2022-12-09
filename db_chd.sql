-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 01:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

CREATE TABLE `tbl_patients` (
  `pt_id` int(11) NOT NULL,
  `pt_name` text NOT NULL,
  `pt_gender` varchar(255) NOT NULL,
  `pt_dob` date NOT NULL,
  `pt_mobile` text NOT NULL,
  `pt_temp` varchar(255) NOT NULL,
  `pt_diagnosis` varchar(255) NOT NULL,
  `pt_encounter` varchar(255) NOT NULL,
  `pt_vaccine` text NOT NULL,
  `pt_nationality` varchar(255) NOT NULL,
  `pt_data_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `pt_data_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`pt_id`, `pt_name`, `pt_gender`, `pt_dob`, `pt_mobile`, `pt_temp`, `pt_diagnosis`, `pt_encounter`, `pt_vaccine`, `pt_nationality`, `pt_data_creation`, `pt_data_update`) VALUES
(1, 'Ephramar A. Telog', 'Male', '1991-03-13', '09123577770', '35.5', 'No', 'No', 'Yes', 'Filipino', '2022-12-08 03:41:15', NULL),
(2, 'Juan M. De La Cruz', 'Male', '1994-11-26', '09997812460', '34.6', 'No', 'No', 'Yes', 'Filipino', '2022-12-08 07:52:44', NULL),
(3, 'Hannah J. De La Peña', 'Female', '1991-04-15', '09774984222', '34.5', 'No', 'No', 'No', 'No', '2022-12-08 07:57:09', NULL),
(4, 'Anna J. De La Peña', 'Female', '1991-04-15', '09774984223', '35.5', 'No', 'No', 'No', 'No', '2022-12-08 07:57:09', NULL),
(5, 'Amira J. De La Peña', 'Female', '1991-04-15', '09774984222', '33.5', 'No', 'No', 'No', 'No', '2022-12-08 07:57:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `uid` int(11) NOT NULL,
  `uun` varchar(255) NOT NULL,
  `upw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `uun`, `upw`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
