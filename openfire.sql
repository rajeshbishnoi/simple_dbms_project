-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 04:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openfire`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(20) NOT NULL,
  `grade_name` varchar(30) NOT NULL,
  `grade_code` int(11) NOT NULL,
  `grade_course` int(11) NOT NULL,
  `grade_sem` int(11) NOT NULL,
  `grade_credit` int(30) NOT NULL,
  `grade_ct1` int(30) NOT NULL,
  `grade_ct2` int(30) NOT NULL,
  `grade_ct3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `grade_name`, `grade_code`, `grade_course`, `grade_sem`, `grade_credit`, `grade_ct1`, `grade_ct2`, `grade_ct3`) VALUES
(10, 'raj', 0, 0, 0, 0, 5, 3, 6),
(11, 'kar', 0, 0, 0, 0, 7, 9, 8),
(12, 'hit', 0, 0, 0, 0, 9, 4, 7),
(13, 'prem', 234, 0, 3, 0, 2, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(30) NOT NULL,
  `login_email` varchar(40) NOT NULL,
  `login_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_email`, `login_password`) VALUES
(1, 'rajesh', 'rajesh@gmail.com', 'rajesh'),
(3, 'user', 'user@gmail.com', 'user'),
(4, 'kartik', 'kartik@gmail.com', 'kartik'),
(5, 'nikhil', 'nikhil@gmail.com', 'nikhil'),
(6, 'karan', 'karan@gmail.com', 'karan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_type` varchar(15) NOT NULL DEFAULT 'Student',
  `user_usefor` varchar(100) NOT NULL,
  `user_remark` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_status` varchar(10) NOT NULL DEFAULT 'Pending',
  `user_grade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_username`, `user_email`, `user_password`, `user_type`, `user_usefor`, `user_remark`, `created_at`, `user_status`, `user_grade`) VALUES
(10, 'raj', 'raj', 'raj@gmail.com', 'raj', 'other', 'raj', 'raj', '2017-10-11 17:17:28', 'Pending', 0),
(11, 'kar', 'kar', 'kar@gmail.com', 'kar', 'other', 'kar', 'kar', '2017-10-11 17:18:01', 'Pending', 0),
(12, 'hit', 'hit', 'hit@gmail.com', 'hit', 'other', 'hit', 'hit', '2017-10-11 17:18:19', 'Pending', 0),
(13, 'prem', 'prem', 'prem@gmail.com', 'prem', 'other', 'prem', 'prem', '2017-10-11 17:25:42', 'Pending', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
