-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 04:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule_service_table`
--

CREATE TABLE `schedule_service_table` (
  `vehicle_name` varchar(200) NOT NULL,
  `scheduled_service_item` varchar(200) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `by_date` date NOT NULL,
  `reminder_date` date NOT NULL,
  `odo_next_occurance` varchar(100) NOT NULL,
  `reminder_odo` varchar(100) NOT NULL,
  `repeat_odo` varchar(100) NOT NULL,
  `engine_hrs_next_occurance` int(100) NOT NULL,
  `reminder_hours` int(100) NOT NULL,
  `repeat_hours` int(100) NOT NULL,
  `repeat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
