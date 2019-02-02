-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 04:57 AM
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
-- Table structure for table `accountreg`
--

CREATE TABLE `accountreg` (
  `id` int(2) NOT NULL,
  `teller` int(2) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `stat` varchar(15) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountreg`
--

INSERT INTO `accountreg` (`id`, `teller`, `userid`, `stat`, `link`) VALUES
(1, 1, '', 'offline', 'teller/teller1.php'),
(2, 2, 'teller1', 'offline', 'teller/teller2.php'),
(3, 3, 'teller1', 'offline', 'teller/teller3.php'),
(4, 4, 'teller1', 'offline', 'teller/teller4.php'),
(6, 5, 'tanny', 'offline', '');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `link` varchar(50) NOT NULL,
  `accountype` varchar(6) NOT NULL,
  `stat` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `loggedto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `userid`, `pass`, `link`, `accountype`, `stat`, `fname`, `lname`, `age`, `address`, `contact`, `loggedto`) VALUES
(1, 'tanny', '$2y$10$84Dgw7T.hjLyWEdvR1uwcuTkGj4dy4u.2S9OpT9qmWfV8UWb3MlQa', 'admin/index.php', 'admin', 'offline', 'Tanny', 'Rotersos', 21, 'Basdacu, Loon, Bohol', 9123941655, ''),
(2, 'teller1', '$2y$10$bT04uB1GxIR3Wjg8FgxPIOFTeQrT8uENuy3x2L7yEY4Nr6zQgO6a.', 'teller/teller.php', 'teller', 'offline', 'Nin', 'Rotersos', 21, 'Basdacu, Loon, Bohol', 9123941655, '');

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
('BL18', 1),
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
  `teller` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL
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
  `teller` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `teller` int(2) NOT NULL,
  `user` varchar(20) NOT NULL
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
  `teller` int(2) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountreg`
--
ALTER TABLE `accountreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `accountreg`
--
ALTER TABLE `accountreg`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
