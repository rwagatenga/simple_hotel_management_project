-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 11:21 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `customer_id`, `room_id`, `service_id`, `in_date`, `out_date`) VALUES
(1, 1, 1, 0, '2020-12-09', '2020-12-11'),
(2, 1, 1, 1, '2020-12-17', '2020-12-27'),
(3, 1, 1, 1, '2020-12-17', '2020-12-21'),
(4, 1, 1, 1, '2020-12-17', '2020-12-21'),
(5, 1, 1, 1, '2020-12-11', '2020-12-23'),
(6, 1, 1, 1, '2020-12-11', '2020-12-23'),
(7, 1, 1, 1, '2020-12-11', '2020-12-23'),
(8, 1, 1, 1, '2020-12-11', '2020-12-23'),
(9, 1, 1, 1, '2020-12-11', '2020-12-23'),
(10, 1, 1, 1, '2020-12-11', '2020-12-23'),
(11, 1, 1, 1, '2020-12-11', '2020-12-23'),
(12, 1, 1, 1, '2020-12-11', '2020-12-23'),
(13, 1, 1, 1, '2020-12-11', '2020-12-23'),
(14, 1, 1, 1, '2020-12-11', '2020-12-23'),
(15, 1, 1, 1, '2020-12-11', '2020-12-23'),
(16, 1, 1, 1, '2020-12-11', '2020-12-23'),
(17, 1, 1, 1, '2020-12-11', '2020-12-13'),
(18, 1, 1, 1, '2020-12-11', '2020-12-13'),
(19, 1, 1, 1, '2020-12-14', '2020-12-17'),
(20, 1, 1, 1, '2020-12-12', '2020-12-25'),
(21, 1, 1, 1, '2020-12-12', '2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `card_id` int(50) NOT NULL,
  `card_number` int(50) NOT NULL,
  `card_amount` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`card_id`, `card_number`, `card_amount`) VALUES
(1, 1990, 1500),
(2, 1991, 940);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `age` int(3) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gender` varchar(19) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nid` bigint(16) NOT NULL,
  `credit_card` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `age`, `country`, `gender`, `phone`, `email`, `nid`, `credit_card`, `amount`, `check_in`, `check_out`) VALUES
(1, 'Mugabo', 'Salome', 12, 'Rwanda', 'male', 783152167, 'salehmugabo@gmail.com', 1199780066360031, 1990, 100, '2020-01-16', '2020-12-21'),
(2, 'Mugabo', 'Salome', 12, 'Rwanda', 'male', 783152167, 'salehmugabo@gmail.com', 1199780066360031, 1990, 100, '2020-01-16', '2020-12-21'),
(3, 'Dada', 'Sara', 34, 'Rwanda', 'male', 783152167, 'saleh@gmail.com', 1199780066360032, 1990, 100, '2020-02-28', '2020-12-15'),
(4, 'Dadaye', 'Salomoni', 24, 'congo', 'male', 783152198, 'salo@gmail.com', 1199780066360054, 1990, 100, '2020-03-12', '2020-12-14'),
(5, 'Mugabos', 'Salomi', 34, 'Rwanda', 'male', 987654355, 'salehmuga@gmail.com', 1199780066360038, 1990, 100, '2020-03-10', '2020-12-12'),
(6, 'Mugabo', 'Saleh', 34, 'congo', 'male', 783152167, 'salehmugabo@gmail.com', 1199780066360031, 1990, 100, '2020-03-29', '2020-12-31'),
(7, 'Mugabo', 'Saleh', 34, 'congo', 'male', 783152167, 'salehmugabo@gmail.com', 1199780066360031, 1990, 100, '2020-04-29', '2020-12-31'),
(8, 'Mugabo', 'Saleh', 34, 'Rwanda', 'male', 987654321, 'salehmugabo@gmail.com', 1199780066360031, 1990, 100, '2020-05-10', '2020-12-24'),
(9, 'vscz', 'zc', 25, 'congo', 'male', 987654321, 'saleh@gmail.com', 1199780066360043, 1991, 100, '2020-06-09', '2020-12-25'),
(10, 'Mugabo', 'Saleh', 12, 'congo', 'ed', 987654321, 'salehmugabo@gmail.com', 1199780066360032, 1990, 100, '2020-06-22', '2020-12-29'),
(11, 'Mugabo', 'Saleh', 24, 'Rwanda', 'male', 987654321, 'salehmugabo@gmail.com', 1199780066360032, 1990, 100, '2020-06-09', '2020-12-23'),
(12, 'Mugabo', 'Saleh', 12, 'Rwanda', 'male', 987654321, 'saleh@gmail.com', 1199780066360031, 1991, 100, '2020-06-21', '2020-12-31'),
(13, 'Mugabo', 'Saleh', 345, 'Rwanda', 'male', 987654321, 'salehmugabo@gmail.com', 1199780066360031, 1991, 100, '2020-07-16', '2020-12-24'),
(14, 'Mugabo', 'Saleh', 25, 'Rwanda', 'male', 783152167, 'salehmugabo@gmail.com', 1234567890098765, 1991, 100, '2020-07-09', '2020-12-17'),
(15, 'Did', 'Salome', 24, 'Rwanda', 'male', 783152167, 'saleh@gmail.com', 1199780066360032, 1991, 100, '2020-08-08', '2020-12-22'),
(16, 'asdf', 'asdf', 45, 'Gabon', 'Male', 77882, 'asd@gmail.com', 882922, 1990, 100, '2020-01-10', '2020-12-13'),
(17, 'asdf', 'adfs', 0, 'asdf', 'asdf', 0, 'adsf', 0, 1990, 100, '2020-01-10', '2020-12-12'),
(18, 'asdf', 'assdf', 0, 'adsf', 'asdf', 0, 'asdf', 0, 1990, 100, '2020-02-10', '2020-12-11'),
(19, 'adsf', 'asdf', 0, 'assdf', 'asdf', 0, 'assdf', 0, 1990, 100, '2020-02-17', '2020-12-27'),
(20, 'asdf', 'asdf', 32, 'Gabon', 'Male', 7788223, 'asdf@gmail.com', 10029233, 1990, 100, '2020-03-17', '2020-12-21'),
(21, 'asdf', 'asdf', 32, 'Gabon', 'Male', 7788223, 'asdf@gmail.com', 10029233, 1990, 100, '2020-03-17', '2020-12-21'),
(22, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-04-11', '2020-12-23'),
(23, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-04-11', '2020-12-23'),
(24, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-05-11', '2020-12-23'),
(25, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-06-11', '2020-12-23'),
(26, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-07-11', '2020-12-23'),
(27, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-12-11', '2020-12-23'),
(28, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-12-11', '2020-12-23'),
(29, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-12-11', '2020-12-23'),
(30, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-12-11', '2020-12-23'),
(31, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-12-11', '2020-12-23'),
(32, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-12-11', '2020-12-23'),
(33, 'ka', 'da', 32, 'Rwanda', 'Male', 889922, 'fredrwagatenga@gmail.com', 3332233, 1990, 100, '2020-12-11', '2020-12-23'),
(34, 'fasdf', 'asdf', 83, 'Rwa', 'Fem', 882, 'umutonidino@gmail.com', 3323, 1990, 100, '2020-12-11', '2020-12-13'),
(35, 'fasdf', 'asdf', 83, 'Rwa', 'Fem', 882, 'umutonidino@gmail.com', 3323, 1990, 100, '2020-12-11', '2020-12-13'),
(36, 'asdf', 'asdf', 32, 'Rw', 'M', 8892, 'asdf', 3233, 1990, 100, '2020-12-14', '2020-12-17'),
(37, 'mugabo', 'saleh', 23, 'drc', 'famale', 2147483647, 'saleh@gmail.com', 12345678900987654, 1991, 100, '2020-12-12', '2020-12-25'),
(38, 'mugabo', 'saleh', 23, 'drc', 'famale', 2147483647, 'saleh@gmail.com', 12345678900987654, 1991, 100, '2020-12-12', '2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `amount`, `dates`) VALUES
(1, 100, '2020-01-08 13:48:23'),
(2, 100, '2020-01-14 22:00:00'),
(3, 100, '2020-01-09 13:51:44'),
(4, 100, '2020-02-08 14:12:59'),
(5, 100, '2020-02-08 14:14:40'),
(6, 100, '2020-02-08 14:17:49'),
(7, 100, '2020-03-08 14:36:31'),
(8, 100, '2020-03-08 14:51:02'),
(9, 300, '2020-04-09 11:25:18'),
(10, 200, '2020-04-09 13:44:00'),
(11, 100, '2020-05-09 13:46:57'),
(12, 1000, '2020-05-09 13:56:18'),
(13, 400, '2020-06-09 14:40:52'),
(14, 400, '2020-06-09 14:40:53'),
(15, 1200, '2020-07-09 15:32:24'),
(16, 1200, '2020-07-09 15:32:28'),
(17, 1200, '2020-08-09 16:01:30'),
(18, 1200, '2020-08-09 16:01:34'),
(19, 1200, '2020-07-08 22:00:00'),
(20, 1200, '2020-12-09 16:02:56'),
(21, 1200, '2020-12-09 16:05:13'),
(22, 1200, '2020-12-09 16:05:35'),
(23, 1200, '2020-12-09 16:07:33'),
(24, 1200, '2020-12-09 16:07:50'),
(25, 1200, '2020-12-09 16:14:21'),
(26, 1200, '2020-12-09 16:14:35'),
(27, 200, '2020-12-09 16:15:59'),
(28, 200, '2020-12-09 16:16:14'),
(29, 300, '2020-12-10 11:53:29'),
(30, 1300, '2020-12-11 11:52:51'),
(31, 1300, '2020-12-11 11:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_number` varchar(11) NOT NULL,
  `room_type` varchar(80) NOT NULL,
  `status` int(11) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_number`, `room_type`, `status`, `price`) VALUES
(1, 'RS001', 'Single', 1, 100),
(2, 'RD002', 'Double', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(80) NOT NULL,
  `service_type` varchar(200) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` bigint(20) NOT NULL,
  `service_image` varchar(500) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_type`, `description`, `price`, `service_image`, `status`) VALUES
(1, 'Logding', 'Single', 'One Night including Breakfast Swimming Pool, GYM/Aerobics.', 100, 'deluxe-room.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(76) NOT NULL,
  `lname` varchar(245) NOT NULL,
  `user_role` varchar(80) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `password` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `user_role`, `phone`, `email`, `salary`, `password`) VALUES
(1, 'Fred', 'fred', 'Admin', '07888992', 'fred@gmail.com', 400000, 'fred1234'),
(2, 'Saleh', 'MUGABO', 'Receptionist', '0785494023', 'salehmugabo@gmail.com', 200000, 'fkmUZaie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `card_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
