-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 09:52 PM
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
-- Database: `finance2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `message`) VALUES
('', '', 0, ''),
('abcd', 'a@gmail.com', 7898145189, 'hi'),
('', '', 0, ''),
('', '', 0, ''),
('ayush', 'ayush@gmail.com', 7898, 'hi'),
('ayush', 'ayush@gmail.com', 7898, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('Seed', 'ayush@gmail.com', 7898145189, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('abcd', 'ayush@gmail.com', 7898145189, 'hi'),
('ay', 'ayush@gmail.com', 9893550664, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Bankname` varchar(50) NOT NULL,
  `Accountno` int(11) NOT NULL,
  `IFSC` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `income` bigint(20) NOT NULL,
  `state` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `CID`, `Name`, `Mobile`, `Email`, `Address`, `Occupation`, `Bankname`, `Accountno`, `IFSC`, `city`, `DOB`, `income`, `state`, `type`) VALUES
(1, 1, 'ayush', 7898145189, 'ayush@gmail.com', 'vashali nagar', 'student', 'SBI', 12345, '123', 'Bhilai', '20/6/2002', 1000000, 'Bhilai', 'user'),
(4, 5, 'as', 7898316374, 'ayush@gmail.com', 'vashali nagar', 'student', 'SBI', 12345, '123', 'Bhilai', '20/6/2002', 1000000, 'chhattisgarh', 'user'),
(5, 6, 'ak', 9827169075, 'a@gmail.com', 'vashali nagar', 'student', 'SBI', 123456, '1234', 'Bhilai', '20/6/2002', 100000, 'Bhilai', 'user'),
(6, 7, 'atul', 9893550664, 'a@gmail.com', 'vashali nagar', 'engineer', 'SBI', 1234567, '12345', 'Bhilai', '20/6/2002', 1000000, 'Bhilai', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `emi`
--

CREATE TABLE `emi` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `loanid` int(20) NOT NULL,
  `emi1` bigint(20) NOT NULL,
  `duration` int(20) NOT NULL,
  `installment` int(20) NOT NULL,
  `date` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `emi`
--

INSERT INTO `emi` (`id`, `Name`, `Mobile`, `loanid`, `emi1`, `duration`, `installment`, `date`) VALUES
(1, 'as', 7898316374, 3, 8333, 12, 1, '07.04.23'),
(2, 'as', 7898316374, 3, 8333, 12, 2, '07.04.23'),
(3, 'as', 7898316374, 3, 8333, 12, 3, '07.04.23'),
(4, 'as', 7898316374, 3, 8333, 12, 4, '07.04.23'),
(5, 'as', 7898316374, 3, 8333, 12, 5, '07.04.23'),
(6, 'as', 7898316374, 3, 8333, 12, 6, '07.04.23'),
(7, 'as', 7898316374, 3, 8333, 12, 7, '07.04.23'),
(8, 'as', 7898316374, 3, 8333, 12, 8, '07.04.23'),
(9, 'as', 7898316374, 3, 8333, 12, 9, '07.04.23'),
(10, 'as', 7898316374, 3, 8333, 12, 10, '07.04.23'),
(11, 'as', 7898316374, 3, 8333, 12, 11, '07.04.23'),
(12, 'as', 7898316374, 3, 8333, 12, 12, '07.04.23'),
(13, 'as', 7898316374, 6, 1667, 12, 1, '07.05.23'),
(14, 'as', 7898316374, 6, 1667, 12, 2, '07.05.23'),
(15, 'as', 7898316374, 6, 1667, 12, 3, '07.05.23'),
(16, 'ak', 9827169075, 8, 83, 12, 1, '07.05.23'),
(17, 'ak', 9827169075, 8, 83, 12, 2, '07.05.23'),
(18, 'ak', 9827169075, 8, 83, 12, 3, '07.05.23'),
(19, 'ak', 9827169075, 8, 83, 12, 4, '07.05.23'),
(20, 'ak', 9827169075, 8, 83, 12, 5, '07.05.23'),
(21, 'ak', 9827169075, 8, 83, 12, 6, '07.05.23'),
(22, 'ak', 9827169075, 8, 83, 12, 7, '07.05.23'),
(23, 'ak', 9827169075, 8, 83, 12, 8, '07.05.23'),
(24, 'ak', 9827169075, 8, 83, 12, 9, '07.05.23'),
(25, 'ak', 9827169075, 8, 83, 12, 10, '07.05.23'),
(26, 'ak', 9827169075, 8, 83, 12, 11, '07.05.23'),
(27, 'ak', 9827169075, 8, 83, 12, 12, '07.05.23'),
(28, 'as', 7898316374, 6, 1667, 12, 4, '07.05.23'),
(29, 'as', 7898316374, 6, 1667, 12, 5, '07.05.23'),
(30, 'as', 7898316374, 6, 1667, 12, 6, '07.05.23'),
(31, 'as', 7898316374, 6, 1667, 12, 7, '07.05.23'),
(32, 'as', 7898316374, 6, 1667, 12, 8, '07.05.23'),
(33, 'as', 7898316374, 6, 1667, 12, 9, '07.05.23'),
(34, 'as', 7898316374, 6, 1667, 12, 10, '07.05.23'),
(35, 'as', 7898316374, 6, 1667, 12, 11, '07.05.23'),
(36, 'as', 7898316374, 6, 1667, 12, 12, '07.05.23'),
(37, 'as', 7898316374, 9, 4167, 24, 1, '07.06.23'),
(38, 'ak', 9827169075, 10, 8, 12, 1, '07.06.23'),
(39, 'ak', 9827169075, 10, 8, 12, 2, '07.06.23'),
(40, 'ak', 9827169075, 10, 8, 12, 3, '07.06.23'),
(41, 'ak', 9827169075, 10, 8, 12, 4, '07.06.23'),
(42, 'ak', 9827169075, 10, 8, 12, 5, '07.06.23'),
(43, 'as', 7898316374, 9, 4167, 24, 2, '07.08.23'),
(44, 'as', 7898316374, 9, 4167, 24, 3, '07.08.23'),
(45, 'as', 7898316374, 9, 4167, 24, 4, '07.08.23'),
(46, 'as', 7898316374, 9, 4167, 24, 5, '07.08.23'),
(47, 'as', 7898316374, 9, 4167, 24, 6, '07.08.23'),
(48, 'as', 7898316374, 9, 4167, 24, 7, '07.08.23'),
(49, 'as', 7898316374, 9, 4167, 24, 8, '07.08.23'),
(50, 'as', 7898316374, 9, 4167, 24, 9, '07.08.23'),
(51, 'as', 7898316374, 9, 4167, 24, 10, '07.08.23'),
(52, 'as', 7898316374, 9, 4167, 24, 11, '07.08.23'),
(53, 'as', 7898316374, 9, 4167, 24, 12, '07.08.23'),
(54, 'as', 7898316374, 9, 4167, 24, 13, '07.08.23'),
(55, 'as', 7898316374, 9, 4167, 24, 14, '07.08.23'),
(56, 'as', 7898316374, 9, 4167, 24, 15, '07.08.23'),
(57, 'as', 7898316374, 9, 4167, 24, 16, '07.08.23'),
(58, 'as', 7898316374, 9, 4167, 24, 17, '07.08.23'),
(59, 'as', 7898316374, 9, 4167, 24, 18, '07.08.23'),
(60, 'as', 7898316374, 9, 4167, 24, 19, '07.08.23'),
(61, 'as', 7898316374, 9, 4167, 24, 20, '07.08.23'),
(62, 'as', 7898316374, 9, 4167, 24, 21, '07.08.23'),
(63, 'as', 7898316374, 9, 4167, 24, 22, '07.08.23'),
(64, 'as', 7898316374, 9, 4167, 24, 23, '07.08.23'),
(65, 'as', 7898316374, 9, 4167, 24, 24, '07.08.23');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `duration` int(11) NOT NULL,
  `interest` float NOT NULL,
  `emi` bigint(20) NOT NULL,
  `emileft` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `user`, `Mobile`, `amount`, `duration`, `interest`, `emi`, `emileft`, `status`) VALUES
(3, 'as', 7898316374, 100000, 12, 7.2, 8333, 0, 'done'),
(6, 'as', 7898316374, 20000, 12, 7.2, 1667, 0, 'done'),
(8, 'ak', 9827169075, 1000, 12, 7.2, 83, 0, 'done'),
(9, 'as', 7898316374, 100000, 24, 7.2, 4167, 0, 'done'),
(10, 'ak', 9827169075, 100, 12, 7.2, 8, 7, 'ongoing'),
(11, 'as', 7898316374, 10000, 12, 7.2, 833, 12, 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `login2`
--

CREATE TABLE `login2` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login2`
--

INSERT INTO `login2` (`ID`, `Name`, `Mobile`, `Password`, `type`) VALUES
(1, 'ayush', 7898145189, 'abcd', 'admin'),
(5, 'as', 7898316374, 'abcd2', 'user'),
(6, 'ak', 9827169075, 'abcd3', 'user'),
(7, 'atul', 9893550664, 'abcd4', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `sender` bigint(20) NOT NULL,
  `receiver` bigint(20) NOT NULL,
  `msg` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `sender`, `receiver`, `msg`, `status`) VALUES
(1, 9827169075, 7898145189, 'hi', 1),
(2, 7898316374, 7898145189, 'hi admin this as here', 1),
(4, 7898145189, 9827169075, 'hi', 1),
(5, 7898145189, 9827169075, 'hi', 1),
(6, 9827169075, 7898145189, 'hi', 1),
(7, 9827169075, 7898145189, 'ho', 1),
(8, 7898145189, 9827169075, 'hi ak', 1),
(9, 7898316374, 7898145189, 'hi', 1),
(10, 9827169075, 7898145189, 'hi from ak', 1),
(11, 7898316374, 7898145189, 'hi', 1),
(12, 7898316374, 7898145189, 'hi', 1),
(13, 9827169075, 7898145189, 'hi', 1),
(14, 7898145189, 0, 'hi', 1),
(15, 7898145189, 0, 'hi ak', 1),
(16, 9827169075, 7898145189, 'hi', 1),
(17, 7898145189, 7898316374, 'hi', 1),
(18, 7898316374, 7898145189, 'hi ak from govt instiute or hello', 1),
(19, 7898145189, 7898316374, 'hi ak from bhilai how are you', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emi`
--
ALTER TABLE `emi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login2`
--
ALTER TABLE `login2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emi`
--
ALTER TABLE `emi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login2`
--
ALTER TABLE `login2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
