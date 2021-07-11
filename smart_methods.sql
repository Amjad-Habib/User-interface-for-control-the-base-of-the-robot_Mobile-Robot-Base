-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 يوليو 2021 الساعة 01:40
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_methods`
--

-- --------------------------------------------------------

--
-- بنية الجدول `directions`
--

CREATE TABLE `directions` (
  `id` int(1) NOT NULL,
  `Forward` varchar(20) NOT NULL,
  `Left` varchar(20) NOT NULL,
  `Right` varchar(20) NOT NULL,
  `Backward` varchar(20) NOT NULL,
  `Stop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `directions`
--

INSERT INTO `directions` (`id`, `Forward`, `Left`, `Right`, `Backward`, `Stop`) VALUES
(1, 'forward', '', '', '', ''),
(2, '', '', '', '', 'stop'),
(3, '', '', '', 'backward', ''),
(4, '', '', '', 'backward', ''),
(5, '', '', '', '', 'stop');

-- --------------------------------------------------------

--
-- بنية الجدول `motors`
--

CREATE TABLE `motors` (
  `id` int(11) NOT NULL,
  `M1` int(3) NOT NULL,
  `M2` int(3) NOT NULL,
  `M3` int(3) NOT NULL,
  `M4` int(3) NOT NULL,
  `M5` int(3) NOT NULL,
  `M6` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `motors`
--

INSERT INTO `motors` (`id`, `M1`, `M2`, `M3`, `M4`, `M5`, `M6`) VALUES
(1, 61, 28, 72, 32, 79, 82),
(2, 61, 28, 72, 32, 79, 82),
(3, 61, 28, 72, 90, 90, 90),
(4, 90, 90, 90, 90, 90, 90),
(5, 32, 70, 77, 122, 72, 124);

-- --------------------------------------------------------

--
-- بنية الجدول `operatingtable`
--

CREATE TABLE `operatingtable` (
  `id` int(11) NOT NULL,
  `isOn` int(1) NOT NULL,
  `isOff` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `operatingtable`
--

INSERT INTO `operatingtable` (`id`, `isOn`, `isOff`) VALUES
(1, 1, 0),
(2, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operatingtable`
--
ALTER TABLE `operatingtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `operatingtable`
--
ALTER TABLE `operatingtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
