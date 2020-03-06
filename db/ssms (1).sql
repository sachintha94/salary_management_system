-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 01:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `staff_no` int(10) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`staff_no`, `u_name`, `password`, `division`) VALUES
(1, 'heshan', '0000', 'admin'),
(3, 'Dilshan', '1111', 'teacher'),
(4, '', '2222', 'teacher'),
(5, 'Dilshan', '3333', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `paysheet_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `staff_no` int(10) NOT NULL,
  `b_salary` varchar(100) NOT NULL,
  `loan` varchar(100) NOT NULL,
  `leave` varchar(100) NOT NULL,
  `ot` varchar(100) NOT NULL,
  `advance` varchar(100) NOT NULL,
  `net_amount` varchar(100) NOT NULL,
  `delet` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`paysheet_no`, `name`, `month`, `staff_no`, `b_salary`, `loan`, `leave`, `ot`, `advance`, `net_amount`, `delet`) VALUES
(1, 'Heshan', '2020 january', 1, '30,000', '0', '0', '10,000', '0', '40,000', 0),
(2, 'Rasika', '2020 February', 2, '30,000', '0', '0', '10,000', '0', '40,000', 0),
(3, 'Dilshan', '2019 January', 3, '30,000', '0', '0', '0', '0', '30,000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bank_no` varchar(100) NOT NULL,
  `b_day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`f_name`, `l_name`, `telephone`, `address`, `bank_no`, `b_day`) VALUES
('sachintha', 'heshan', '076 3265495', 'no.423,ragama', '0123456789', '1994.03.16'),
('', '', '102345608', 'no.263,ragama', '', ''),
('sd', 'fv', '30122', 'dfefewfwe', 'ewawefe8848', '1994/03/17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`paysheet_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `staff_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `paysheet_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
