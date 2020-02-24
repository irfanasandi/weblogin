-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2020 at 07:41 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `level`, `active`) VALUES
(1, 'administrator', 'Erlangga101', 'Administrator', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `app_id` varchar(21) NOT NULL,
  `name` varchar(125) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `app_id`, `name`, `link`) VALUES
(1, 'APP01-WEBINFO', 'Web Info', 'http://10.1.1.60:8081/erl/myjualan/'),
(2, 'APP01-WEBBOOKING', 'Web Booking', 'http://10.1.1.28:8081/booking_sys/');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `app_id` varchar(21) DEFAULT NULL,
  `module_id` varchar(21) DEFAULT NULL,
  `a_create` tinyint(1) NOT NULL DEFAULT '0',
  `a_read` tinyint(1) NOT NULL DEFAULT '0',
  `a_update` tinyint(1) NOT NULL DEFAULT '0',
  `a_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `role_id`, `app_id`, `module_id`, `a_create`, `a_read`, `a_update`, `a_delete`) VALUES
(1, 1, 'APP01-WEBINFO', '1', 1, 1, 1, 1),
(2, 1, 'APP01-WEBINFO', '2', 1, 1, 1, 1),
(3, 3, 'APP01-WEBINFO', '2', 1, 0, 1, 1),
(4, 1, 'APP01-WEBBOOKING', '3', 1, 1, 1, 1),
(5, 2, 'APP01-WEBINFO', '1', 1, 1, 1, 1),
(6, 3, 'APP01-WEBINFO', '1', 1, 1, 1, 1),
(7, 2, 'APP01-WEBBOOKING', '3', 1, 1, 1, 1),
(8, 2, 'APP01-WEBINFO', '2', 0, 0, 0, 0),
(9, 3, 'APP01-WEBBOOKING', '3', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `app_id` varchar(21) NOT NULL,
  `description` text,
  `status` varchar(21) NOT NULL,
  `name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `app_id`, `description`, `status`, `name`) VALUES
(1, 'APP01-WEBINFO', 'Item Master', '1', 'itemmaster'),
(2, 'APP01-WEBINFO', 'Bursa Stock', '1', 'bursastock'),
(3, 'APP01-WEBBOOKING', 'Booking Cart', '1', 'bookingcart');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'Akunting'),
(3, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `emplid` varchar(21) NOT NULL,
  `name` varchar(125) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `telp` varchar(21) DEFAULT NULL,
  `bu` varchar(5) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emplid`, `name`, `password`, `email`, `telp`, `bu`, `role_id`, `token`, `image`) VALUES
(1, 'P2308', 'Irfana Sandi', 'sandi123', NULL, NULL, '', 1, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appsIdx` (`app_id`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`emplid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
