-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 06:28 PM
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
-- Database: `autosalloni_yjet`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `tittle`, `description`, `date`) VALUES
(1, 'AUTOSALLONI YJET', 'YJET was founded in 2015 by Yllka, Jetmire and Ylli in Viti, and was named after the owners. The company deals with the sale and purchase of vehicles. In the company\'s salon more and more are the vehicles of the most popular trends and high caliber.        Thanks to its reliability and correctness, the number of customers has now increased enormously, not only within Kosovo but also abroad. </br>\r\n</br>\r\nAfter a feasibility analysis by experts, the company\'s management decided to transfer to headquarters in Pristina. During the two years of intensive works, in December 2018, the modern vehicle sales center in Prishtina is solemnly opened. An imposing and ultramodern object with all the optimal conditions for exercising this activity,\r\n where the service services are provided by the tireless and professional staff,\r\nwith modern equipment as well as with original auto parts from European and world manufacturers. There is also a restaurant-bar at the service of customers. </br>\r\n</br>\r\nToday, the company sells products of all major European and world car manufacturers.</br> \r\n</br>\r\nOur work creates a bridge of trust with our customers, and our goal is to offer our customer the best car at the best price. We want to be the leading company in Kosovo for vehicle sales.', '2021-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `mileage` int(11) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `created_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `manufacturer`, `model`, `year`, `transmission`, `mileage`, `fuel`, `seats`, `doors`, `color`, `price`, `created_date`, `user_id`, `image`) VALUES
(1, 'BMW X5', 'M50 d xDrive', 2020, 'Automatic', 100000, 'Gasoline', 4, 3, 'White', 120000, '2021-03-17', 1, 'img\\BMW - X5 M50 d xDrive.jpg'),
(3, 'Lamborghini', 'URUS', 2019, 'Automatic', 8542562, 'Gasoline', 4, 4, '5', 5623065, '2021-03-17', 1, 'img\\Lamborghini  URUS.jpg'),
(4, 'Mercedes-Benz', 'E350 d', 2020, 'Automatic', 45457, 'Diesel', 2, 3, 'Grey', 5623065, '2021-03-17', 1, 'img\\Mercedes-Benz  E350 d.jpg'),
(5, 'Porsche', 'Cayenne Coupe', 2019, 'Automatic', 56465, 'Diesel', 7, 3, 'Grey', 548687, '2021-03-17', 1, 'img\\Porsche - Cayenne Coupe.jpg'),
(7, 'Audi - A8', '50TDI Quattro S-line', 2019, 'Automatic', 2000055, 'Gasoline', 5, 3, '5', 890000, '2021-03-17', 1, 'img\\Audi - A8 50TDI Quattro S-line.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number_sales` varchar(255) NOT NULL,
  `phone_number_sales2` varchar(255) NOT NULL,
  `phone_number_administration` varchar(255) NOT NULL,
  `email_1` varchar(255) NOT NULL,
  `email_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `address`, `phone_number_sales`, `phone_number_sales2`, `phone_number_administration`, `email_1`, `email_2`) VALUES
(1, 'A.S YJET sh.p.k </br>\r\nMagj. Prishtinë-Ferizaj </br>\r\n10000, Prishtinë Kosovë', '+383 (0) 44 122-122', '+383 (0) 49 122-144', '+383 (0) 38 606-707', 'yjet_info@autosalon.net', 'autosalon_yjet@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messages_id`, `date`, `email`, `subject`, `message`) VALUES
(1, '2021-03-12', 'js40336@ubt-uni.net', 'test', 'helloo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role`, `firstname`, `lastname`, `username`, `password`, `email`, `register_date`) VALUES
(1, 'Admin', 'Jetmire', 'Syla', 'jsyla', '25f9e794323b453885f5181f1b624d0b', 'jsyla@gmail.com', '2021-01-30'),
(2, 'Admin', 'Yllka', 'Maloku', 'ymaloku', '25f9e794323b453885f5181f1b624d0b', 'ymaloku@gmail.com', '2021-01-30'),
(3, 'User', 'Jeta', 'syla', '', '32c9ed7cff85eec74046b2150964fb6a', 'js40336@ubt-uni.net', '2021-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
