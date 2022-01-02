-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 08:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_reg`
--

CREATE TABLE `book_reg` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `isbn_no` varchar(30) NOT NULL,
  `publisher` varchar(40) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `img` blob DEFAULT NULL,
  `info_link` varchar(60) NOT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_reg`
--

INSERT INTO `book_reg` (`id`, `reg_id`, `book_name`, `isbn_no`, `publisher`, `author`, `img`, `info_link`, `stock`) VALUES
(4, 0, 'Python', '21Ane810', 'Anee_Ma', 'Mathew', 0x7362646f617562736f6162736f61, 'contact img.jpg', 30),
(9, 5, 'Jein_Booking', 'JErin', 'JKJ', 'JKJ', 0x36363930343431332d652d7061796d656e742d6c696e652d69636f6e2e6a7067, 'WWW.google.com', 10),
(11, 4, 'Python', '0-3108-5748-1', 'O\'Reilly', 'Mr.Khan', 0x707974686f6e2e6a7067, 'https://www.amazon.in/Core-Python-Programming-3ed-fundamenta', 200),
(12, 4, 'Cyber_Security', '52728197-3321', 'Ki', 'John', 0x63796265722e6a7067, 'https://www.amazon.in/Cyber-Security-Nina-Godbole/dp/8126521', 120),
(13, 4, 'IOT', '168161-2221-22', 'Arivanti Books', 'Mr. Kinaz. ji', 0x494f542e6a7067, 'www.google..com/iot', 120);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `reg_id` int(11) NOT NULL,
  `store_name` varchar(30) NOT NULL,
  `mail_id` varchar(30) NOT NULL,
  `gst_no` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`reg_id`, `store_name`, `mail_id`, `gst_no`, `password`) VALUES
(4, 'Kingo', 'mathewaneesh75@gmail.com', 'SGT20118188', '123'),
(5, 'StoreMan', 'amathew@gmail.com', 'GTMS81922', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_reg`
--
ALTER TABLE `book_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_reg`
--
ALTER TABLE `book_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
