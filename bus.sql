-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 10:12 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `seat_number` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bus_id`, `route_id`, `time_id`, `date`, `seat_number`, `user_id`) VALUES
(3, 1, 1, 1, '2018-07-10', 'A2', 1),
(4, 1, 1, 1, '2018-07-10', 'A3', 1),
(5, 1, 1, 1, '2018-07-10', 'A4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `total_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `total_seat`) VALUES
(1, 'Hanif AC', 40),
(2, 'Hanif Non-AC', 40),
(3, 'Shohag AC', 40),
(4, 'Shohag Non-AC', 40),
(5, 'Nabil AC', 40),
(6, 'Nabil Non-AC', 40);

-- --------------------------------------------------------

--
-- Table structure for table `bus_time`
--

CREATE TABLE `bus_time` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_time`
--

INSERT INTO `bus_time` (`id`, `bus_id`, `route_id`, `time`) VALUES
(1, 1, 1, '10:30'),
(2, 1, 1, '11:30'),
(3, 1, 1, '12:30'),
(4, 1, 2, '13:30'),
(5, 1, 2, '14:30'),
(6, 1, 2, '15:30'),
(7, 2, 1, '00:30'),
(8, 2, 1, '01:30'),
(9, 2, 1, '02:30'),
(10, 2, 2, '03:30'),
(11, 2, 2, '04:30'),
(12, 2, 2, '05:30');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `route_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `bus_id`, `route_name`) VALUES
(1, 1, 'Dhaka-Khulna'),
(2, 1, 'Khulna-Dhaka'),
(3, 1, 'Dhaka-Rangpur'),
(4, 1, 'Rangpur-Dhaka'),
(5, 2, 'Dhaka-Khulna'),
(6, 2, 'Khulna-Dhaka'),
(7, 2, 'Dhaka-Rangpur'),
(8, 2, 'Rangpur-Dhaka'),
(9, 3, 'A-B'),
(10, 3, 'B-A'),
(11, 3, 'A-C'),
(12, 3, 'C-A'),
(13, 4, 'A-B'),
(14, 4, 'B-A'),
(15, 4, 'A-C'),
(16, 4, 'C-A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `address`, `name`) VALUES
(1, 'rakib@gmail.com', '123456', 'komu na', 'Rakibul Hasan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_time`
--
ALTER TABLE `bus_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bus_time`
--
ALTER TABLE `bus_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
