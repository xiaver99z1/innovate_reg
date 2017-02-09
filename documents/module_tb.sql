-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 05:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppp_irm`
--

-- --------------------------------------------------------

--
-- Table structure for table `module_tb`
--

CREATE TABLE `module_tb` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `module_description` varchar(200) NOT NULL,
  `module_delete` enum('0','1','','') NOT NULL DEFAULT '0',
  `module_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_tb`
--

INSERT INTO `module_tb` (`module_id`, `module_name`, `module_description`, `module_delete`, `module_created_date`) VALUES
(1, 'Home', 'Main Module', '0', '2017-02-07 10:08:49'),
(2, 'Company', 'Company Module', '0', '2017-01-31 03:21:23'),
(3, 'HR Department', 'HR Module', '0', '2017-01-31 03:35:45'),
(4, 'Accounting Department', 'Accounting Module', '0', '2017-01-31 03:36:31'),
(5, 'Operations Department', 'Operations Module', '0', '2017-01-31 03:50:47'),
(6, 'Site Department', 'Site Module', '0', '2017-01-31 03:50:55'),
(7, 'Sales Department', 'Sales Module', '0', '2017-01-31 03:51:01'),
(8, 'Activity Department', 'Activity Module', '0', '2017-01-31 03:51:09'),
(9, 'Report Department', 'Report Module', '0', '2017-01-31 03:51:24'),
(10, 'Settings Department', 'Settings Module', '0', '2017-01-31 03:51:36'),
(11, 'Approve Events Schedule', 'Company Module', '0', '2017-01-31 03:52:38'),
(28, 'Employee List', 'Employee Module', '0', '2017-01-31 05:15:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module_tb`
--
ALTER TABLE `module_tb`
  ADD PRIMARY KEY (`module_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module_tb`
--
ALTER TABLE `module_tb`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
