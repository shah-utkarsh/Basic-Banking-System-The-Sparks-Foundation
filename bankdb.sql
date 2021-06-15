-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 15, 2021 at 01:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `currentbalance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `currentbalance`) VALUES
(1, 'Jethalal', 'jethalal@gmail.com', 9500),
(2, 'Tarak', 'tarak@gmail.com', 3500),
(3, 'Sodhi', 'sodhi@gmail.com', 6500),
(4, 'Bhide', 'bhide@gmail.com', 8500),
(5, 'Hathi', 'hathi@gmail.com', 6000),
(6, 'Popatlal', 'popatlal@gmail.com', 5000),
(7, 'Abdul', 'abdul@gmail.com', 6500),
(8, 'Mohanlal', 'mohanlal@gmail.com', 3000),
(9, 'Champaklal', 'champaklal@gmail.com', 4500),
(10, 'Iyer', 'iyer@gmail.com', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(11) NOT NULL,
  `sendername` varchar(20) NOT NULL,
  `receivername` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `sendername`, `receivername`, `amount`, `time`) VALUES
(1, 'Tarak', 'Jethalal', 3000, '2021-06-11 21:36:06'),
(2, 'Jethalal', 'Iyer', 1000, '2021-06-15 17:14:58'),
(3, 'Sodhi', 'Champaklal', 2500, '2021-06-15 17:15:14'),
(4, 'Tarak', 'Bhide', 1500, '2021-06-15 17:15:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
