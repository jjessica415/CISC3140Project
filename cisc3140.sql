-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 16, 2023 at 06:37 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cisc3140`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`name`, `email`, `message`) VALUES
('jessica', 'email@gmail.com', 'package was delivered to the wrong address'),
('anna petrov', 'anna.petrov123@gmail.com', 'order was missing one of the keycaps I had commissioned for.');

-- --------------------------------------------------------

--
-- Table structure for table `fulfillment_info`
--

CREATE TABLE `fulfillment_info` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `shipping` varchar(10) NOT NULL,
  `finisher` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fulfillment_info`
--

INSERT INTO `fulfillment_info` (`name`, `username`, `email`, `amount`, `address`, `contact`, `shipping`, `finisher`) VALUES
('jessica jiang', 'cloudycaps', 'paypal@gmail.com', 'one', '1234 address ', 'yes', 'USA', 'glaze'),
('jessica', '', '', 'two', '', 'no', 'Canada', 'glaze'),
('Tavish Leon', 'Tavish.Leon245', 'Tavish.Leon123@gmail.com', 'two', '2468 Address 124252', 'no', 'USA', 'glaze'),
('Emil Steffen', 'Emil.Steffen234', 'Emil.Steffen123@gmail.com', 'two', '1234 Address 124532', 'yes', 'Canada', 'glaze');

-- --------------------------------------------------------

--
-- Table structure for table `signin_info`
--

CREATE TABLE `signin_info` (
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signin_info`
--

INSERT INTO `signin_info` (`email`, `password`) VALUES
('email@gmail.com', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `signup_info`
--

CREATE TABLE `signup_info` (
  `first name` varchar(30) NOT NULL,
  `last name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup_info`
--

INSERT INTO `signup_info` (`first name`, `last name`, `email`, `password`) VALUES
('jessica', 'jiang', 'email@gmail.com', 'password123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
