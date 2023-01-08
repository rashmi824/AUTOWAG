-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 06:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autowag`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(70) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `username`, `password`) VALUES
(1, 'Rashmi', 'NO 890 1/2, Seeduwa, Gampaha', 'rashmi@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vehicle_type` varchar(30) NOT NULL,
  `air_condition` varchar(10) NOT NULL,
  `need_driver` varchar(10) NOT NULL,
  `pickup_location` varchar(50) NOT NULL,
  `drop_location` varchar(50) NOT NULL,
  `pickup_date` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `returnDate` varchar(50) NOT NULL,
  `returnTime` varchar(50) NOT NULL,
  `stop_points` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `phone_number`, `email`, `vehicle_type`, `air_condition`, `need_driver`, `pickup_location`, `drop_location`, `pickup_date`, `pickup_time`, `returnDate`, `returnTime`, `stop_points`) VALUES
('alfred', '0714576345', 'alf@gmail.com', 'Car', 'yes', 'no', 'gampaha', 'maradana', '2021-10-10', '23:25', '2021-10-13', '13:30', 'dematagoda'),
('Gamini', '0771198086', 'Gamininilantha@gmail.com', 'Lorry', 'no', 'yes', 'ganemulla', 'wattala', '2021-10-08', '16.30', '2021-10-08', '17.00', ''),
('Hiruni', '0714041487', 'hirunisaparamadu@gmail.com', 'Car', 'yes', 'yes', 'Ragama', 'Colombo', '2021-10-05', '09:36', '2021-10-05', '11:36', 'narahenpita'),
('sanjeewa', '0783579832', 'sanjeewaperera@gmail.com', 'Tuk Tuk', 'no', 'yes', 'negombo', 'maradana', '2021-10-10', '07:40', '2021-10-10', '11:30', 'dematagoda'),
('shavini', '0705947815', 'shavinimandira@gmail.com', 'van', 'yes', 'yes', 'piliyandala', 'malabe', '2021-09-16', '09:57', '2021-09-16', '12:30', 'koswatta');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `DOB`, `gender`, `phone_number`, `email`, `password`, `is_deleted`) VALUES
(1, 'lahiru', 'prasad', '2021-10-19', 'mail', '0787370283', 'lahiru@gmail.com', '1234', 0),
(2, 'Peshala', 'Pahandi', '2021-10-18', 'femail', '0777687879', 'peshala@gmail.com', '1234', 0),
(3, 'Peshala', 'Pahandi', '2021-10-18', 'femail', '0777687879', 'peshala@gmail.com', '1234', 0),
(4, 'Hashen', 'Kottegoda', '2021-10-11', 'mail', '0777689090', 'Hashen@gmail.com', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `work_experience` varchar(30) NOT NULL,
  `licen_number` varchar(20) NOT NULL,
  `working_time` int(2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `firstname`, `lastname`, `DOB`, `password`, `phone_number`, `email`, `work_experience`, `licen_number`, `working_time`, `is_deleted`, `address`, `age`) VALUES
(1, 'lahiru', 'prasad', '2021-10-04', '1234', '0787370283', 'lahiru@gmail.com', '5 Years', '20190890890', 8, 0, 'NO:567 1/2, gampaha', 22),
(2, 'Peshala', 'Sadamali', '2021-10-05', '1234', '0777687879', 'peshala@gmail.com', '3 Years', '67890890890', 6, 0, 'NO:345 1/2, Matara', 20),
(3, 'Hashen', 'Kottegoda', '2021-10-11', '1234', '0777687879', 'Hashen@gmail.com', '2 Years', '67890890543', 8, 0, 'NO:908 1/2, Kottava', 26);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vehicle_type` varchar(30) NOT NULL,
  `air_condition` varchar(10) NOT NULL,
  `need_driver` varchar(20) NOT NULL,
  `returnDate` date NOT NULL,
  `returnTime` time NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pickup_location` varchar(50) NOT NULL,
  `drop_location` varchar(50) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` time NOT NULL,
  `stop_points` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `vehicle_type`, `air_condition`, `need_driver`, `returnDate`, `returnTime`, `phone_number`, `email`, `pickup_location`, `drop_location`, `pickup_date`, `pickup_time`, `stop_points`) VALUES
(1, 'Rashmi', 'KDH', 'Yes', 'yes', '2021-10-05', '00:00:00', '0787370283', 'lahiru@gmail.com', 'Kottava', 'Colombo', '2021-10-04', '23:01:07', 'gampaha,ra'),
(2, 'Hashen', 'Hybrid', 'Yes', 'no', '2021-10-05', '00:00:00', '0777689090', 'Hashen@gmail.com', 'Gampaha', 'Colombo', '2021-10-07', '21:05:59', '3'),
(3, 'Shehani', 'BMW', 'No', 'yes', '2021-10-08', '00:00:00', '0777687879', 'peshala@gmail.com', 'Matara', 'Kaduwela', '2021-10-17', '11:26:58', '2');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `Transmission` varchar(30) NOT NULL,
  `Air_condition` varchar(3) NOT NULL,
  `Fuel_type` varchar(30) NOT NULL,
  `Luggage` int(3) NOT NULL,
  `Doors` int(3) NOT NULL,
  `Engine_capacity` varchar(30) NOT NULL,
  `Passenger` int(2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `Transmission`, `Air_condition`, `Fuel_type`, `Luggage`, `Doors`, `Engine_capacity`, `Passenger`, `is_deleted`) VALUES
(1, 'Auto', 'yes', 'Petrol', 2, 4, '1000 CC', 15, 0),
(3, 'Manual', 'Yes', 'Electric', 2, 2, '2000 CC', 2, 0),
(4, 'Manual', 'No', 'Petrol', 2, 5, '20000 CC', 12, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
