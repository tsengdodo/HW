-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2016 at 03:36 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanlu`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

CREATE TABLE `member_table` (
  `NO` int(6) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `other` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`NO`, `username`, `password`, `telephone`, `address`, `other`) VALUES
(3, '88', '8', '88', '88', '8'),
(4, '1', '1', '1', '1', '1'),
(5, '1', '1', '1', '1', '1'),
(6, '1', '1', '1', '1', '1'),
(9, '8989', '89', '', '', ''),
(12, '87', 't87', '', '', ''),
(14, '1', '1', '1', '1', '1'),
(15, '87', '87', '', '', ''),
(16, '1', '1', '', '', ''),
(17, '1', '1', '1', '1', '1'),
(19, '123456', '123456', '123', '123', '123'),
(23, '12345678912345678945', '1', '', '', ''),
(24, '1', '1', '1', '1', '1'),
(26, '123', '1234', '123', '123', ''),
(27, 'root', '04172645', '', '', ''),
(28, '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_table`
--
ALTER TABLE `member_table`
  MODIFY `NO` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
