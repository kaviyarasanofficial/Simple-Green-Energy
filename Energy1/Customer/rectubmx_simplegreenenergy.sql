-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2023 at 12:28 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rectubmx_simplegreenenergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `password`) VALUES
('klscse6@gmail.com', 'admin1234'),
('sgecrm@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `ATP`
--

CREATE TABLE `ATP` (
  `f.no` int(11) NOT NULL,
  `fuleType` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boilerType` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boilerCondition` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `isWallMounted` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bolierAge` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `shouldBoilerLocationChange` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `propertyType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bedroomCount` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `radiatorCount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `isThermostaticRadiatorValvesPresent` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `flueExhaustLocation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `flueLocation` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `addressLine1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ATP`
--

INSERT INTO `ATP` (`f.no`, `fuleType`, `boilerType`, `boilerCondition`, `isWallMounted`, `bolierAge`, `shouldBoilerLocationChange`, `propertyType`, `bedroomCount`, `radiatorCount`, `isThermostaticRadiatorValvesPresent`, `flueExhaustLocation`, `flueLocation`, `firstName`, `lastName`, `email`, `phone`, `addressLine1`, `city`, `postcode`) VALUES
(1, 'LPG', 'System', 'Not Working', '1', '[10, 20]', '1', 'Park Home', '4', '2', '1', 'Roof', 'Flat Roof', 'John', 'Doe', 'john.doe@gmail3.com', 1234567890, '1st Lane', 'Birmingham', 44),
(2, 'LPG', 'System', 'Not Working', '1', '[10, 20]', '1', 'Park Home', '4', '2', '1', 'Roof', 'Flat Roof', 'John', 'Doe', 'john.doe@gmail.com', 1234567890, '1st Lane', 'Birmingham', 44);

-- --------------------------------------------------------

--
-- Table structure for table `otp_table`
--

CREATE TABLE `otp_table` (
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `otp` int(6) NOT NULL,
  `timestamp` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `otp_table`
--

INSERT INTO `otp_table` (`email`, `otp`, `timestamp`) VALUES
('codetree247@gmail.com', 7006, '169580'),
('klscse6@gmail.com', 3562, '169683'),
('klscse6@gmail.com', 7061, '169686');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `heatingSource` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `isHeatingSourceOld` tinyint(1) NOT NULL,
  `propertyOwnership` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `benefit` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `property` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bedroom` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `wall` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `addressLine1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `addressLine2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `firstName`, `lastName`, `email`, `phone`, `addressLine1`, `addressLine2`, `city`, `postcode`, `reference`, `password`) VALUES
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234'),
('', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 0, '', '', '', '', '', '', '', 'user@example.com', '', '', '', '', '', '', 'root1234'),
('', 0, '', '', '', '', '', '', '', 'john.doe@gmail.com', '', '', '', '', '', '', 'demoroot1234'),
('', 0, '', '', '', '', '', '', '', 'joh1n.doe@gmail.com', '', '', '', '', '', '', 'root123'),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234'),
('Gas Boiler', 1, 'Own', '', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234'),
('', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Gas boiler', 0, 'Rent', 'Employment and support al', 'Semi Detached H', '3 Bedr', 'Solid Brick Wal', 'Biswajit ', 'Chakraborty ', 'bc247@hotmail.com', '8697661987', 'Road 1', 'Road 2', 'Kolkata ', '700077', 'Facebook or Ins', ''),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('', 0, '', '', '', '', '', '', '', 'joh1n.doe2@gmail.com', '', '', '', '', '', '', 'root123'),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('', 0, '', '', '', '', '', '', '', 'joh1n.doe3@gmail.com', '', '', '', '', '', '', 'root123'),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
('Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ATP`
--
ALTER TABLE `ATP`
  ADD UNIQUE KEY `f.no` (`f.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ATP`
--
ALTER TABLE `ATP`
  MODIFY `f.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1990;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
