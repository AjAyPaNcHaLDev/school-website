-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 03:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `adminphone` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `security_id` int(255) NOT NULL,
  `securityanswer` varchar(255) NOT NULL,
  `Enable/Disable` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `adminphone`, `psw`, `security_id`, `securityanswer`, `Enable/Disable`) VALUES
(3, 'AJAY', '8570091377', '29e457082db729fa1059d4294ede3909', 2, '34b7da764b21d298ef307d04d8152dc5', 0),
(4, 'rahul', '123', 'd76f3d05cc9ac98f1f9160274a39fe33', 3, 'd76f3d05cc9ac98f1f9160274a39fe33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`) VALUES
(9, 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `myschoolname`
--

CREATE TABLE `myschoolname` (
  `schoolid` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myschoolname`
--

INSERT INTO `myschoolname` (`schoolid`, `school_name`) VALUES
(1, '〖ή𝑒w〗𝕊h🅸𝓿คl🅸k HᎥ🅶ђﾂ Sc𝖍๏๏ℓ');

-- --------------------------------------------------------

--
-- Table structure for table `registerstd_adm_on_off`
--

CREATE TABLE `registerstd_adm_on_off` (
  `serial_no` int(11) NOT NULL,
  `Contant` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `EnableDisable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerstd_adm_on_off`
--

INSERT INTO `registerstd_adm_on_off` (`serial_no`, `Contant`, `reason`, `EnableDisable`) VALUES
(1, 'Student Sign up', 'Sorry for that but sign for student Disable it will start again 12/01/2020', 0),
(2, 'Admin Sign up', 'Admin Sign up', 0),
(3, 'Forgot Password', 'Forgot Password', 0),
(7, 'Student Login', 'asc', 0),
(8, 'Admin Login', 'aa', 0),
(15, 'Class Management', 'cs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `securityquestion`
--

CREATE TABLE `securityquestion` (
  `security_id` int(11) NOT NULL,
  `security` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `securityquestion`
--

INSERT INTO `securityquestion` (`security_id`, `security`) VALUES
(2, 'enter your pat name'),
(3, 'enter your friend');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `serial_no` int(11) NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_mname` varchar(255) NOT NULL,
  `student_fname` varchar(11) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `security_id` varchar(255) NOT NULL,
  `securityanswer` varchar(255) NOT NULL,
  `Enable/Disable` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`serial_no`, `student_id`, `student_name`, `student_mname`, `student_fname`, `age`, `gender`, `phone`, `psw`, `security_id`, `securityanswer`, `Enable/Disable`) VALUES
(7, 'ajay123', 'ajay', '', '', 0, '', 0, '29e457082db729fa1059d4294ede3909', '2', '34b7da764b21d298ef307d04d8152dc5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subjects` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `class_id`, `subjects`) VALUES
(16, 9, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `myschoolname`
--
ALTER TABLE `myschoolname`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `registerstd_adm_on_off`
--
ALTER TABLE `registerstd_adm_on_off`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `securityquestion`
--
ALTER TABLE `securityquestion`
  ADD PRIMARY KEY (`security_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `myschoolname`
--
ALTER TABLE `myschoolname`
  MODIFY `schoolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registerstd_adm_on_off`
--
ALTER TABLE `registerstd_adm_on_off`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `securityquestion`
--
ALTER TABLE `securityquestion`
  MODIFY `security_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
