-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 08:31 AM
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
  `staff_no` int(4) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `password` varchar(5) NOT NULL,
  `division` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`staff_no`, `u_name`, `password`, `division`) VALUES
(1, 'heshan', '0000', 'admie'),
(2, 'rasika', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `paysheet_no` int(5) NOT NULL,
  `month` varchar(20) NOT NULL,
  `staff_no` int(4) NOT NULL,
  `staff_leave` int(10) NOT NULL,
  `staff_ot` int(10) NOT NULL,
  `staff_advance` int(10) NOT NULL,
  `b_salary` int(10) NOT NULL,
  `net_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`paysheet_no`, `month`, `staff_no`, `staff_leave`, `staff_ot`, `staff_advance`, `b_salary`, `net_amount`) VALUES
(1, '2020 january', 1, 1000, 2000, 1000, 30000, 32000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `paysheet_no` int(5) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `bank_no` int(10) NOT NULL,
  `b_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`paysheet_no`, `f_name`, `l_name`, `telephone`, `address`, `bank_no`, `b_day`) VALUES
(1, 'sachintha', 'heshan', '011 224101', 'no.423, Ragama', 123456, '1997-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`staff_no`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`paysheet_no`),
  ADD KEY `staff_no` (`staff_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `paysheet_no` (`paysheet_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `staff_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `paysheet_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`staff_no`) REFERENCES `login` (`staff_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`paysheet_no`) REFERENCES `salary` (`paysheet_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
