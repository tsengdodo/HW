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
-- Table structure for table `messagereg`
--

CREATE TABLE `messagereg` (
  `no` int(6) NOT NULL,
  `name` char(30) CHARACTER SET utf8 NOT NULL,
  `message` varchar(100) CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messagereg`
--

INSERT INTO `messagereg` (`no`, `name`, `message`, `time`) VALUES
(1, 'Your name', '1', '2016-04-17 01:49:13'),
(2, 'Your name', '1', '2016-04-17 01:49:13'),
(3, 'Your name', '/', '2016-04-17 01:49:47'),
(4, 'Your name', 'e e e e ', '2016-04-17 02:12:08'),
(5, 'e e', 'e e ', '2016-04-17 02:12:20'),
(6, 'Your name', '88', '2016-04-17 02:12:41'),
(7, 'Your name here88', '88', '2016-04-17 02:13:13'),
(8, '123456', '123456', '2016-04-17 03:00:26'),
(9, '2', '2222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222', '2016-04-17 11:17:23'),
(10, '留言板', '留\r\n言\r\n版', '2016-04-17 23:32:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagereg`
--
ALTER TABLE `messagereg`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagereg`
--
ALTER TABLE `messagereg`
  MODIFY `no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
