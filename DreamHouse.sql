-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2017 at 03:23 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Host Builders`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `email_id` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`email_id`, `pass`) VALUES
('root@dm.com', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_id` int(5) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `client_phone` varchar(15) NOT NULL,
  `noof_houses` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`client_id`, `client_name`, `client_email`, `client_phone`, `noof_houses`) VALUES
(1, 'Ram', 'ramsundar@gmail.com', '8976432434', 1),
(2, 'Soman Shekar', 'somanssk97@yahoo.com', '8327586994', 1),
(3, 'Arvind V', 'varvi123@gmail.com', '8327122190', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mat_info`
--

CREATE TABLE `mat_info` (
  `mat_id` int(5) NOT NULL,
  `mat_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mat_info`
--

INSERT INTO `mat_info` (`mat_id`, `mat_name`, `type`) VALUES
(1, 'Pipes', 'PVC'),
(2, 'Rod', 'Iron'),
(3, 'Havels wires', '2mm'),
(4, 'Cement', 'Raw material');

-- --------------------------------------------------------

--
-- Table structure for table `ret_info`
--

CREATE TABLE `ret_info` (
  `ret_id` int(10) NOT NULL,
  `ret_name` varchar(30) NOT NULL,
  `ret_phone` varchar(15) NOT NULL,
  `street` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ret_info`
--

INSERT INTO `ret_info` (`ret_id`, `ret_name`, `ret_phone`, `street`, `country`) VALUES
(1, 'BH Cements', '8767543437', 'Kolkata', 'India'),
(2, 'SAD Construction', '8721345396', 'Mumbai', 'India'),
(3, 'SAP pipes', '2112435674', 'Stockholm', 'Sweden'),
(4, 'Ganesh iron and Steel', '7734234239', 'Coimbatore', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `client_id` int(5) NOT NULL,
  `site_id` int(10) NOT NULL,
  `site_city` varchar(30) NOT NULL,
  `site_country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`client_id`, `site_id`, `site_city`, `site_country`) VALUES
(2, 1, 'Kollam', 'India'),
(1, 2, 'Stockholm', 'Sweden'),
(3, 4, 'Palakkad', 'India'),
(3, 5, 'Mumbai', 'India'),
(3, 6, 'Palakkad', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `site_transaction`
--

CREATE TABLE `site_transaction` (
  `site_id` int(10) NOT NULL,
  `trans_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_transaction`
--

INSERT INTO `site_transaction` (`site_id`, `trans_id`) VALUES
(1, 2),
(3, 3),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trans_info`
--

CREATE TABLE `trans_info` (
  `trans_id` int(10) NOT NULL,
  `mat_id` int(10) NOT NULL,
  `ret_id` int(10) NOT NULL,
  `mat_quantity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_info`
--

INSERT INTO `trans_info` (`trans_id`, `mat_id`, `ret_id`, `mat_quantity`) VALUES
(1, 1, 3, '50 nos'),
(2, 4, 2, '20 boxes'),
(3, 1, 3, '20 nos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mat_info`
--
ALTER TABLE `mat_info`
  ADD KEY `mat_id` (`mat_id`);

--
-- Indexes for table `ret_info`
--
ALTER TABLE `ret_info`
  ADD PRIMARY KEY (`ret_id`),
  ADD KEY `ret_id` (`ret_id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`site_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `trans_info`
--
ALTER TABLE `trans_info`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `trans_id` (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `client_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mat_info`
--
ALTER TABLE `mat_info`
  MODIFY `mat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ret_info`
--
ALTER TABLE `ret_info`
  MODIFY `ret_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `site_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trans_info`
--
ALTER TABLE `trans_info`
  MODIFY `trans_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
