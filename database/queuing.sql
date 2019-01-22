-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 04:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queuing`
--

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `quenumber` varchar(20) NOT NULL,
  `teller` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`quenumber`, `teller`) VALUES
('TR01', 1),
('TR02', 3),
('TR03', 1),
('TR04', 2),
('TR05', 3),
('TR036', 1),
('TR037', 1),
('TR038', 1),
('TR039', 1),
('TR010', 1),
('TR011', 1),
('TR012', 2),
('TR013', 2),
('TR014', 2),
('TR015', 2),
('', 2),
('', 2),
('', 2),
('', 2),
('TR020', 2),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('27', 1),
('28', 1),
('29', 1),
('30', 1),
('31', 1),
('32', 1),
('33', 1),
('34', 1),
('35', 1),
('36', 1),
('37', 1),
('38', 1),
('39', 1),
('40', 2),
('41', 2),
('42', 2),
('43', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `quenumber` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `accountnum` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `accountnum2` varchar(50) NOT NULL,
  `amount2` varchar(50) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `taposna` int(2) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `accountnum3` varchar(50) NOT NULL,
  `amount3` varchar(15) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `accountnum4` varchar(50) NOT NULL,
  `amount4` varchar(15) NOT NULL,
  `dtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `teller` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`quenumber`, `name`, `accountnum`, `amount`, `name2`, `accountnum2`, `amount2`, `priority`, `taposna`, `contact`, `name3`, `accountnum3`, `amount3`, `name4`, `accountnum4`, `amount4`, `dtime`, `teller`) VALUES
(1, '', '', '', '', '', '', 'TR01', 1, '', '', '', '', '', '', '', '2019-01-03 00:51:52', 1),
(2, '', '', '', '', '', '', 'TR02', 1, '', '', '', '', '', '', '', '2019-01-03 00:51:55', 3),
(3, '', '', '', '', '', '', 'TR03', 1, '', '', '', '', '', '', '', '2019-01-03 00:52:09', 1),
(4, '', '', '', '', '', '', 'TR04', 1, '', '', '', '', '', '', '', '2019-01-03 00:52:17', 2),
(5, '', '', '', '', '', '', 'TR05', 1, '', '', '', '', '', '', '', '2019-01-03 00:52:25', 3),
(6, '', '', '', '', '', '', 'TR06', 1, '', '', '', '', '', '', '', '2019-01-03 02:59:18', 1),
(7, '', '', '', '', '', '', 'TR07', 1, '', '', '', '', '', '', '', '2019-01-03 02:59:30', 1),
(8, '', '', '', '', '', '', 'TR08', 1, '', '', '', '', '', '', '', '2019-01-03 02:59:39', 1),
(9, '', '', '', '', '', '', 'TR09', 1, '', '', '', '', '', '', '', '2019-01-03 02:59:41', 1),
(10, '', '', '', '', '', '', 'TR010', 1, '', '', '', '', '', '', '', '2019-01-03 02:59:43', 1),
(11, '', '', '', '', '', '', 'TR011', 1, '', '', '', '', '', '', '', '2019-01-03 02:59:45', 1),
(12, '', '', '', '', '', '', 'TR012', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:11', 2),
(13, '', '', '', '', '', '', 'TR013', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:13', 2),
(14, '', '', '', '', '', '', 'TR014', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:22', 2),
(15, '', '', '', '', '', '', 'TR015', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:24', 2),
(16, '', '', '', '', '', '', 'TR016', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:27', 2),
(17, '', '', '', '', '', '', 'TR017', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:30', 2),
(18, '', '', '', '', '', '', 'TR018', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:32', 2),
(19, '', '', '', '', '', '', 'TR019', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:35', 2),
(20, '', '', '', '', '', '', 'TR020', 1, '', '', '', '', '', '', '', '2019-01-03 03:01:38', 2),
(21, '', '', '', '', '', '', 'TR021', 1, '', '', '', '', '', '', '', '2019-01-03 03:04:39', 1),
(22, '', '', '', '', '', '', 'TR022', 1, '', '', '', '', '', '', '', '2019-01-03 03:04:42', 1),
(23, '', '', '', '', '', '', 'TR023', 1, '', '', '', '', '', '', '', '2019-01-03 03:04:44', 1),
(24, '', '', '', '', '', '', 'TR024', 1, '', '', '', '', '', '', '', '2019-01-03 03:04:45', 1),
(25, '', '', '', '', '', '', 'TR025', 1, '', '', '', '', '', '', '', '2019-01-03 03:04:47', 1),
(26, '', '', '', '', '', '', 'TR026', 1, '', '', '', '', '', '', '', '2019-01-03 03:04:49', 1),
(27, '', '', '', '', '', '', 'TR027', 1, '', '', '', '', '', '', '', '2019-01-03 03:06:45', 1),
(28, '', '', '', '', '', '', 'TR028', 1, '', '', '', '', '', '', '', '2019-01-03 03:06:54', 1),
(29, '', '', '', '', '', '', 'TR029', 1, '', '', '', '', '', '', '', '2019-01-03 03:06:56', 1),
(30, '', '', '', '', '', '', 'TR030', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:38', 1),
(31, '', '', '', '', '', '', 'TR031', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:41', 1),
(32, '', '', '', '', '', '', 'TR032', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:45', 1),
(33, '', '', '', '', '', '', 'TR033', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:47', 1),
(34, '', '', '', '', '', '', 'TR034', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:49', 1),
(35, '', '', '', '', '', '', 'TR035', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:51', 1),
(36, '', '', '', '', '', '', 'TR036', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:53', 1),
(37, '', '', '', '', '', '', 'TR037', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:55', 1),
(38, '', '', '', '', '', '', 'TR038', 1, '', '', '', '', '', '', '', '2019-01-03 03:08:58', 1),
(39, '', '', '', '', '', '', 'TR039', 1, '', '', '', '', '', '', '', '2019-01-03 03:09:00', 1),
(40, '', '', '', '', '', '', 'TR040', 1, '', '', '', '', '', '', '', '2019-01-03 03:10:41', 2),
(41, '', '', '', '', '', '', 'TR041', 1, '', '', '', '', '', '', '', '2019-01-03 03:11:06', 2),
(42, '', '', '', '', '', '', 'TR042', 1, '', '', '', '', '', '', '', '2019-01-03 03:11:34', 2),
(43, '', '', '', '', '', '', 'TR043', 1, '', '', '', '', '', '', '', '2019-01-03 03:11:51', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que1`
--

CREATE TABLE `que1` (
  `quenumber` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `accountnum` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `accountnum2` varchar(50) NOT NULL,
  `amount2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `accountnum3` varchar(50) NOT NULL,
  `amount3` varchar(50) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `accountnum4` varchar(50) NOT NULL,
  `amount4` varchar(50) NOT NULL,
  `taposna` int(2) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `dtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `teller` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que1`
--

INSERT INTO `que1` (`quenumber`, `name`, `accountnum`, `amount`, `name2`, `accountnum2`, `amount2`, `name3`, `accountnum3`, `amount3`, `name4`, `accountnum4`, `amount4`, `taposna`, `contact`, `dtime`, `teller`) VALUES
('TR01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 00:51:52', 1),
('TR02', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 00:51:55', 3),
('TR03', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 00:52:09', 1),
('TR04', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 00:52:17', 2),
('TR05', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 00:52:25', 3),
('TR06', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:18', 1),
('TR07', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:30', 1),
('TR08', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:39', 1),
('TR09', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:41', 1),
('TR010', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:43', 1),
('TR011', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:45', 1),
('TR012', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:11', 2),
('TR013', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:13', 2),
('TR014', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:22', 2),
('TR015', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:24', 2),
('TR016', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:27', 2),
('TR017', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:30', 2),
('TR018', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:32', 2),
('TR019', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:35', 2),
('TR020', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:01:38', 2),
('TR021', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:04:39', 1),
('TR022', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:04:42', 1),
('TR023', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:04:44', 1),
('TR024', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:04:45', 1),
('TR025', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:04:47', 1),
('TR026', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:18', 1),
('TR027', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:30', 1),
('TR028', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:39', 1),
('TR029', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:41', 1),
('TR030', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:08:38', 1),
('TR031', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:08:41', 1),
('TR032', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:08:45', 1),
('TR033', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:08:47', 1),
('TR034', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:08:49', 1),
('TR035', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:08:51', 1),
('TR036', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:18', 1),
('TR037', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:30', 1),
('TR038', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:39', 1),
('TR039', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 02:59:41', 1),
('TR040', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:10:41', 2),
('TR041', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:11:06', 2),
('TR042', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:11:34', 2),
('TR043', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-03 03:11:51', 3);

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `quenumber` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `accountnum` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `accountnum2` varchar(50) NOT NULL,
  `amount2` varchar(50) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `taposna` int(2) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `accountnum3` varchar(50) NOT NULL,
  `amount3` varchar(15) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `accountnum4` varchar(50) NOT NULL,
  `amount4` varchar(15) NOT NULL,
  `dtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `teller` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`quenumber`, `name`, `accountnum`, `amount`, `name2`, `accountnum2`, `amount2`, `priority`, `taposna`, `contact`, `name3`, `accountnum3`, `amount3`, `name4`, `accountnum4`, `amount4`, `dtime`, `teller`) VALUES
(1, '', '', '', '', '', '', 'SL01', 0, '', '', '', '', '', '', '', '2019-01-03 02:25:31', 0),
(2, '', '', '', '', '', '', 'SL02', 0, '', '', '', '', '', '', '', '2019-01-03 02:25:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `senior1`
--

CREATE TABLE `senior1` (
  `quenumber` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `accountnum` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `accountnum2` varchar(50) NOT NULL,
  `amount2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `accountnum3` varchar(50) NOT NULL,
  `amount3` varchar(50) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `accountnum4` varchar(50) NOT NULL,
  `amount4` varchar(50) NOT NULL,
  `taposna` int(2) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `dtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `teller` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senior1`
--

INSERT INTO `senior1` (`quenumber`, `name`, `accountnum`, `amount`, `name2`, `accountnum2`, `amount2`, `name3`, `accountnum3`, `amount3`, `name4`, `accountnum4`, `amount4`, `taposna`, `contact`, `dtime`, `teller`) VALUES
('SL01', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2019-01-03 02:25:33', 0),
('SL02', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2019-01-03 02:25:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(50) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `online`) VALUES
('teller1', 1),
('teller2', 0),
('teller3', 0),
('admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`quenumber`);

--
-- Indexes for table `senior`
--
ALTER TABLE `senior`
  ADD PRIMARY KEY (`quenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
  MODIFY `quenumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `senior`
--
ALTER TABLE `senior`
  MODIFY `quenumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
