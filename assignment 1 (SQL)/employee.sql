-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 07:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firs_tname` varchar(155) DEFAULT NULL,
  `last_name` varchar(155) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `joining_date` varchar(155) DEFAULT NULL,
  `depertment` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firs_tname`, `last_name`, `salary`, `joining_date`, `depertment`) VALUES
(1, 'ammy', 'patel', 100000, '21-07-2021', 'IT'),
(2, 'jeni', 'rakholiya', 60000, '06-09-2021', 'EC'),
(3, 'mansi', 'patoliya', 750000, '19-09-2021', 'BANKING'),
(4, 'foram', 'patel', 780000, '23-12-2021', 'IT'),
(5, 'aayushi', 'areniya', 55000, '01-08-2022', 'SERVICES'),
(6, 'anshu', 'pipaliya', 8000, '06-06-2022', 'INSURENCE'),
(7, 'aneri', 'sidpra', 60000, '06-09-2022', 'EC'),
(8, 'foram', 'patel', 57000, '20-02-2021', 'CS'),
(9, 'riya', 'borad', 25000, '01-10-2022', 'MANAGER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
