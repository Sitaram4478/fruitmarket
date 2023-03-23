-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 08:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruitwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit_table`
--

CREATE TABLE `fruit_table` (
  `fruit_id` int(100) NOT NULL,
  `fruit_name` varchar(255) NOT NULL,
  `fruit_kg` int(250) NOT NULL,
  `mobile_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruit_table`
--

INSERT INTO `fruit_table` (`fruit_id`, `fruit_name`, `fruit_kg`, `mobile_number`) VALUES
(1, 'apple', 500, '8128222334'),
(2, 'banana', 600, '8128222334'),
(3, 'chiku', 50, '9128222335'),
(4, 'grapes', 80, '9664577565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit_table`
--
ALTER TABLE `fruit_table`
  ADD PRIMARY KEY (`fruit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit_table`
--
ALTER TABLE `fruit_table`
  MODIFY `fruit_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
