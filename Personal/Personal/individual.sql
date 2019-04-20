-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 05:43 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `individual`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `REFNUM` bigint(20) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Subject` varchar(25) NOT NULL,
  `DESCRIPTION` varchar(2000) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entries1`
--

CREATE TABLE `entries1` (
  `TICKETNUM` int(20) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `SUBJECT` varchar(25) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `PRICE` varchar(10) NOT NULL,
  `DESCRIPTION` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entries1`
--

INSERT INTO `entries1` (`TICKETNUM`, `EMAIL`, `SUBJECT`, `TITLE`, `PRICE`, `DESCRIPTION`) VALUES
(1, 'linkatoon@professor.net', 'ECommerce', 'Electronic Commerce: A Managerial and Social Persp', '100.00', 'This is the textbook for class'),
(2, 'wchlud@student.fdu.edu', 'ECommerce', 'Electronic Commerce: A Managerial and Social Persp', '75.00', 'I am finishing this class and no longer need it'),
(4, 'santoni@fdu.edu', 'Physics', 'Physics Lab Manual', '20.00', 'The lab manual for class'),
(6, 'willchlud@gmail.com', 'Calculus', 'General Calc', '150.00', ''),
(7, 'test@test.com', 'this is a test', 'Test Me ', '4.00', 'Hi there'),
(9, 'newtest@gmail.com', 'Help me', 'Help please', '0.00', 'Im serious'),
(10, 'wchlud@student.fdu.edu', 'Physics', 'Gen Phys', '20.00', ''),
(11, 'test@test.com', 'Physics', 'Gen Phys', '2.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER_NAME` varchar(20) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAIL` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`REFNUM`),
  ADD UNIQUE KEY `Foreign_Key` (`USER_NAME`) USING BTREE;

--
-- Indexes for table `entries1`
--
ALTER TABLE `entries1`
  ADD PRIMARY KEY (`TICKETNUM`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_NAME`),
  ADD KEY `USER_NAME` (`USER_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `REFNUM` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entries1`
--
ALTER TABLE `entries1`
  MODIFY `TICKETNUM` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entries`
--
ALTER TABLE `entries`
  ADD CONSTRAINT `entries_ibfk_1` FOREIGN KEY (`USER_NAME`) REFERENCES `users` (`USER_NAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
