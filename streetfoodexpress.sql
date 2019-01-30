-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 01:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streetfoodexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstName` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstName`, `lastName`, `gender`, `birthdate`, `email`, `password`) VALUES
(4, 'ksksk', 'jsjsj', 'Male', '0000-00-00', 'jsjsk@gmail.com', '$2y$10$EV0M9TwwG3ScI'),
(5, 'ksksk', 'jsjsj', 'Male', '0000-00-00', 'jsjsk@gmail.com', '$2y$10$46iReK7dw/v1A'),
(6, 'kqkq', 'kekke', 'Male', '2019-01-28', 'mama@gmail.com', '$2y$10$bXek3QEdtJplA'),
(7, 'hello', 'world', 'Male', '2019-01-01', 'hello@gmail.com', '$2y$10$Jf0N9hHCktkih'),
(8, 'tg', 'yh', 'Male', '2019-01-09', 'ff@gmail.com', '$2y$10$ek/2JA6T7JD.j'),
(9, 'qq', 'qq', 'Male', '2019-01-30', 'qq@gmail.com', '$2y$10$/yrtjHhYfo.DIxlvub4BoeCsuNLUC1i6bpXyghhoSo.H7lJdzEHHq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
