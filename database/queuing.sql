-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 08:37 AM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userid` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `link` varchar(50) NOT NULL,
  `accountype` varchar(15) NOT NULL,
  `stat` int(2) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`userid`, `pass`, `link`, `accountype`, `stat`, `fname`, `lname`, `age`, `address`, `contact`) VALUES
('tanny', 'tan', 'teller/teller1.php', '', 0, 'Tanny', 'Rotersos', 21, 'Basdacu, Loon, Bohol', 9123941655),
('teller1', '34', 'teller/teller1.php', '', 0, 'Tanny', 'Rotersos', 21, 'Basdacu, Loon, Bohol', 43434);

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
('', 1),
('', 2),
('', 3),
('', 4);

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
('BL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-12 08:21:21', 1),
('BL02', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:01:47', 1),
('BL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-13 23:41:21', 1),
('BL02', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:01:47', 1),
('BL03', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-15 01:40:17', 1),
('BL04', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:03:51', 1),
('BL05', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:50:28', 2),
('BL06', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:52:32', 2),
('BL07', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:53:30', 2),
('BL08', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-14 09:45:54', 1),
('BL09', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:57:54', 1),
('BL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-15 01:24:23', 1),
('BL02', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:01:47', 1),
('BL03', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-15 01:40:17', 1),
('BL04', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:03:51', 1),
('BL05', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:50:28', 2),
('BL06', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:52:32', 2),
('BL07', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:53:30', 2),
('BL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-17 07:07:21', 1),
('BL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 01:59:16', 1),
('BL02', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:01:47', 1),
('BL03', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:01:58', 1),
('BL04', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:03:51', 1),
('BL05', '', '', '', '', '', '', '', '', '', '', '', '', 1, '09123941655', '2019-01-22 02:50:28', 2),
('BL06', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:52:32', 2),
('BL07', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:53:30', 2),
('BL08', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:48:37', 1),
('BL09', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 02:57:54', 1),
('BL10', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 03:10:41', 1),
('BL11', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:39:48', 1),
('BL12', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:39:48', 1),
('BL13', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:39:48', 1),
('BL14', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 04:01:15', 1),
('BL15', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:50:28', 2),
('BL16', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:52:32', 2),
('BL17', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:53:30', 2),
('BL18', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 07:57:26', 1),
('BL19', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 07:58:11', 1),
('BL20', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 07:59:11', 1),
('BL21', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:39:48', 1),
('BL22', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:42:36', 1),
('BL23', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:42:36', 1),
('BL24', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 08:37:53', 1),
('BL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:39:48', 1),
('BL02', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:42:36', 1),
('BL03', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:43:32', 1),
('BL04', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:48:30', 1),
('BL05', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:50:28', 2),
('BL06', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:52:32', 2),
('BL07', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:53:30', 2),
('BL08', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-22 02:54:02', 1),
('BL09', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2019-01-22 08:52:59', 0);

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
('SL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-15 01:41:44', 0),
('SL01', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 03:11:46', 0),
('SL02', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 08:05:27', 0),
('SL03', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '2019-01-18 08:37:38', 0),
('SL04', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2019-01-18 03:09:03', 0),
('SL05', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2019-01-18 03:09:07', 0),
('SL06', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2019-01-18 03:09:13', 0),
('SL07', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2019-01-18 08:05:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(50) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `link` varchar(30) NOT NULL,
  `stat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `pass`, `link`, `stat`) VALUES
('teller1', 'tan', 'teller/teller1.php', 0),
('teller2', '12345', 'teller/teller2.php', 0),
('teller3', '12345', 'teller/teller3.php', 0),
('teller4', '12345', 'teller/teller4.php', 0),
('admin', '12345', 'admin/index.php', 0);

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
  MODIFY `quenumber` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senior`
--
ALTER TABLE `senior`
  MODIFY `quenumber` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
