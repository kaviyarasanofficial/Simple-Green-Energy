-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2023 at 03:41 PM
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
-- Table structure for table `atp`
--

CREATE TABLE `atp` (
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
-- Dumping data for table `atp`
--

INSERT INTO `atp` (`f.no`, `fuleType`, `boilerType`, `boilerCondition`, `isWallMounted`, `bolierAge`, `shouldBoilerLocationChange`, `propertyType`, `bedroomCount`, `radiatorCount`, `isThermostaticRadiatorValvesPresent`, `flueExhaustLocation`, `flueLocation`, `firstName`, `lastName`, `email`, `phone`, `addressLine1`, `city`, `postcode`) VALUES
(1, 'Oil', 'System', 'Other', 'No, its fl', '10-20', 'No', 'Semi-Detac', '3 Bedrooms', '4', 'No', 'Wall', 'Sloped Roof', 'John', 'Doe', 'john.doe@gmail3.com', 1234567890, '1st Lane', 'Birmingham', 443);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `email` varchar(25) NOT NULL,
  `name` varchar(666) NOT NULL,
  `phone` int(12) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`email`, `name`, `phone`, `location`) VALUES
('klscse6@gmail.com', '', 0, 'https://sgecrm.rectusmedia.in/uploads/klscse6@gmail.com/reshma.JPG');

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
-- Table structure for table `surveyor`
--

CREATE TABLE `surveyor` (
  `id` int(11) NOT NULL,
  `surveyorname` varchar(60) NOT NULL,
  `surveyoremail` varchar(60) NOT NULL,
  `surveyorphone` varchar(60) NOT NULL,
  `password` varchar(25) NOT NULL,
  `about_surveyor` varchar(25) NOT NULL,
  `workdatatime` varchar(60) NOT NULL,
  `heatingSource` varchar(90) NOT NULL,
  `isHeatingSourceOld` varchar(6) NOT NULL,
  `propertyOwnership` varchar(12) NOT NULL,
  `benefit` varchar(100) NOT NULL,
  `property` varchar(100) NOT NULL,
  `bedroom` varchar(25) NOT NULL,
  `wall` varchar(25) NOT NULL,
  `CustomerfirstName` varchar(25) NOT NULL,
  `CustomerlastName` varchar(25) NOT NULL,
  `Customeremail` varchar(25) NOT NULL,
  `Customerphone` varchar(25) NOT NULL,
  `CustomeraddressLine1` varchar(25) NOT NULL,
  `CustomeraddressLine2` varchar(25) NOT NULL,
  `Customercity` varchar(25) NOT NULL,
  `Customerpostcode` varchar(25) NOT NULL,
  `Customerreference` varchar(25) NOT NULL,
  `statusofwork` varchar(60) NOT NULL,
  `feedbackwork` varchar(60) NOT NULL,
  `workconfirmation` varchar(60) NOT NULL,
  `uploaddetails` varchar(100) NOT NULL,
  `messagetoadmin` varchar(100) NOT NULL,
  `idstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surveyor`
--

INSERT INTO `surveyor` (`id`, `surveyorname`, `surveyoremail`, `surveyorphone`, `password`, `about_surveyor`, `workdatatime`, `heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `CustomerfirstName`, `CustomerlastName`, `Customeremail`, `Customerphone`, `CustomeraddressLine1`, `CustomeraddressLine2`, `Customercity`, `Customerpostcode`, `Customerreference`, `statusofwork`, `feedbackwork`, `workconfirmation`, `uploaddetails`, `messagetoadmin`, `idstatus`) VALUES
(19, 'Joun', 'pogejaw661@unbiex.com', '987654321', '1234', 'he north uk', '2023-10-08T20:15', 'Gas Boiler', '1', 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'klscse6@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', '', '', '', '', '', ''),
(21, 'kavi', 'klscse6@gmail.com', '987654321', '1234', 'he south uk', '2023-10-08T15:38', 'Gas Boiler', '1', 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'klscse6@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `f.no` int(11) NOT NULL,
  `heatingSource` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `isHeatingSourceOld` tinyint(1) NOT NULL,
  `propertyOwnership` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `benefit` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `property` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bedroom` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `wall` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `users` (`f.no`, `heatingSource`, `isHeatingSourceOld`, `propertyOwnership`, `benefit`, `property`, `bedroom`, `wall`, `firstName`, `lastName`, `email`, `phone`, `addressLine1`, `addressLine2`, `city`, `postcode`, `reference`, `password`) VALUES
(1, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'klscse6@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234'),
(5, '', 0, '', '', '', '', '', '', '', 'joh1n.doe@gmail.com', '', '', '', '', '', '', 'root123'),
(6, 'Gas bolier', 1, 'Own', 'Job seekers allowance', 'Park Home', '1 Bedr', 'Soild Brick Wal', 'John', 'Doe', 'kavidcome@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234'),
(7, 'Gas Boiler', 1, 'Own', '', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', 'root1234'),
(9, 'Back boiler', 1, 'Rent', 'Job seekers allowance', 'Detached House', '1 Bedr', 'Soild Brick Wal', 'Biswajit ', 'Chakraborty ', 'bc247rrr@hotmail.com', '8697661987', 'Road 1', 'Road 2', 'Kolkata ', '700077', 'Facebook or Ins', ''),
(10, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(11, '', 0, '', '', '', '', '', '', '', 'joh1n.doe2@gmail.com', '', '', '', '', '', '', 'root123'),
(12, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(13, 'Electric heaters', 1, 'Own', 'Job seekers allowance', 'End-Terrance Ho', '4 Bedr', 'Soild Brick Wal', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(14, '', 0, '', '', '', '', '', '', '', 'joh1n.doe3@gmail.com', '', '', '', '', '', '', 'root123'),
(15, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(16, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(17, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(18, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(19, 'Gas Boiler', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(20, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(21, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(22, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(23, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', ''),
(24, 'Gas Boilers', 1, 'Own', 'Universal Credit', 'Park Home', '2', 'Solid Brick', 'John', 'Doe', 'jhon.doe@gmail.com', '1234567890', '1st Lane', '2nd Lane', 'Birmingham', '044-569-896', 'Google', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `atp`
--
ALTER TABLE `atp`
  ADD UNIQUE KEY `f.no` (`f.no`);

--
-- Indexes for table `surveyor`
--
ALTER TABLE `surveyor`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`f.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atp`
--
ALTER TABLE `atp`
  MODIFY `f.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1990;

--
-- AUTO_INCREMENT for table `surveyor`
--
ALTER TABLE `surveyor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `f.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
