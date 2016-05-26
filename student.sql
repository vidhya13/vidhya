-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2016 at 06:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `alt_phone_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alt_email` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year_of_study` int(4) NOT NULL,
  `fee` double NOT NULL,
  `course` varchar(100) NOT NULL,
  `type_training` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`id`, `username`, `organisation`, `phone_no`, `alt_phone_no`, `email`, `alt_email`, `dept`, `year_of_study`, `fee`, `course`, `type_training`, `status`, `created_at`) VALUES
(1, 'vidhya', 'psg', 5654654, 54566, 'fgfdgfd', 'ffgfdg', 'fgdfgf', 1234, 7450, 'PHP', 'dfsf', 0, '2016-05-23 13:22:26'),
(2, 'madhu', 'jsrgi', 4523423, 4235234, 'madhu@gmail.com', 'madhu', 'cs', 2016, 6450, 'Python', 'dfdsf', 1, '2016-05-23 13:39:10'),
(4, 'raj', 'kg', 343423432, 3454354, 'raj@gmail.com', 'fdfdf', 'dfdf', 2015, 6000, 'PHP', 'GFGE', 1, '2016-05-24 03:54:12'),
(5, 'deepa', 'psg', 54542, 434346, 'deepa@gmail.com', 'dffdf', 'ddfd', 2016, 5000, 'Python', 'fdfdsf', 1, '2016-05-24 03:55:48'),
(6, 'thara', 'krishna', 34343, 3423423, 'thara@gmail.com', 'thara@gmail.com', 'cse', 2016, 6000, 'Python', 'training', 1, '2016-05-25 09:28:32'),
(7, 'suby', 'kg', 4343, 343432, 'suby@gmail.com', 'dfdfd', 'CS', 2016, 6450, 'PHP', 'HGFHFG', 1, '2016-05-25 11:25:04'),
(20, 'hari', '', 0, 0, 'hghg', '', '', 0, 0, 'select', '', 1, '2016-05-25 11:40:19'),
(21, '', '', 0, 0, '', '', '', 0, 6450, 'select', '', 1, '2016-05-25 11:41:05'),
(22, '', '', 0, 0, '', '', '', 0, 0, 'select', '', 1, '2016-05-26 03:55:01'),
(23, '', '', 0, 0, '', '', '', 0, 7450, 'PHP', '', 1, '2016-05-26 04:04:16'),
(24, '', '', 0, 0, '', '', '', 0, 0, 'PHP', '', 0, '2016-05-26 04:10:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
