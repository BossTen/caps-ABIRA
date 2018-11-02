-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 01:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abira`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomplishedwork`
--

CREATE TABLE `accomplishedwork` (
  `Id` int(10) NOT NULL,
  `JobOrderId` int(10) NOT NULL,
  `AccomplishedWork` int(10) NOT NULL,
  `WorkedBy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accountrole`
--

CREATE TABLE `accountrole` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `capuses`
--

CREATE TABLE `capuses` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capuses`
--

INSERT INTO `capuses` (`Id`, `Name`) VALUES
(1, 'Main I'),
(2, 'Main II'),
(3, 'Lemery'),
(4, 'Balayan'),
(5, 'Nasugbu'),
(6, 'Malvar'),
(7, 'Rosario'),
(8, 'Lobo'),
(9, 'San Juan');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Id` int(11) NOT NULL,
  `AccountRoleID` int(100) NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `joborder`
--

CREATE TABLE `joborder` (
  `Id` int(10) NOT NULL,
  `SerialCode` varchar(10) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `DateRequestCreated` date DEFAULT NULL,
  `CampusId` int(10) DEFAULT NULL,
  `NameOfOffice` varchar(200) DEFAULT NULL,
  `AirCondition` varchar(5) DEFAULT NULL,
  `CarpentryMasonry` varchar(5) DEFAULT NULL,
  `ElectricalWorks` varchar(5) DEFAULT NULL,
  `Painting` varchar(5) DEFAULT NULL,
  `Plumbing` varchar(5) DEFAULT NULL,
  `Welding` varchar(5) DEFAULT NULL,
  `InspectionReport` varchar(200) DEFAULT NULL,
  `JobRecommendation` varchar(200) DEFAULT NULL,
  `MaterialsNeeded` varchar(200) DEFAULT NULL,
  `RequestorSignature` varchar(5) DEFAULT NULL,
  `RequestorName` varchar(200) DEFAULT NULL,
  `RequestorDesignation` varchar(200) DEFAULT NULL,
  `DateRequested` date DEFAULT NULL,
  `signatureOfInspector` varchar(5) DEFAULT NULL,
  `InspectorName` varchar(200) DEFAULT NULL,
  `InspectorDesignation` varchar(200) DEFAULT NULL,
  `DateInspected` date DEFAULT NULL,
  `Approved` tinyint(1) DEFAULT NULL,
  `ApprovedBy` varchar(200) DEFAULT NULL,
  `StartOfService` date DEFAULT NULL,
  `EndOfService` date DEFAULT NULL,
  `NoOfHours` int(10) DEFAULT NULL,
  `Assesment` varchar(200) DEFAULT NULL,
  `AccomplishedWorkId` int(10) DEFAULT NULL,
  `ConformeName` varchar(200) DEFAULT NULL,
  `ConformeApproved` tinyint(1) DEFAULT NULL,
  `ConformeDateApproved` date DEFAULT NULL,
  `ResponseTime` int(10) DEFAULT NULL,
  `AccuracyOfWork` int(10) DEFAULT NULL,
  `Courtesy` int(10) DEFAULT NULL,
  `QualityOfService` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joborder`
--

INSERT INTO `joborder` (`Id`, `SerialCode`, `Title`, `DateRequestCreated`, `CampusId`, `NameOfOffice`, `AirCondition`, `CarpentryMasonry`, `ElectricalWorks`, `Painting`, `Plumbing`, `Welding`, `InspectionReport`, `JobRecommendation`, `MaterialsNeeded`, `RequestorSignature`, `RequestorName`, `RequestorDesignation`, `DateRequested`, `signatureOfInspector`, `InspectorName`, `InspectorDesignation`, `DateInspected`, `Approved`, `ApprovedBy`, `StartOfService`, `EndOfService`, `NoOfHours`, `Assesment`, `AccomplishedWorkId`, `ConformeName`, `ConformeApproved`, `ConformeDateApproved`, `ResponseTime`, `AccuracyOfWork`, `Courtesy`, `QualityOfService`) VALUES
(1, '123', NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'this is un', NULL, '0000-00-00', NULL, 'asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'qwe', NULL, '0000-00-00', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '123333', NULL, '0000-00-00', NULL, '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'test', NULL, '0000-00-00', NULL, '1', 'on', 'off', 'on', NULL, 'off', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'test1', NULL, '0000-00-00', NULL, '1', 'on', 'off', 'on', NULL, 'on', 'on', NULL, NULL, NULL, 'signa', 'printed name of requester', 'desgination of requester', '2018-11-01', 'signa', 'printed name of Inspecter', 'designation of Inspecter', '2018-11-07', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'testing 3', NULL, '0000-00-00', NULL, '1', 'off', 'off', 'off', NULL, 'off', 'off', NULL, NULL, NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', 0, NULL, '2018-11-07', '2018-11-07', 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'assessment', NULL, '0000-00-00', NULL, '1', 'off', 'off', 'off', NULL, 'off', 'off', NULL, NULL, NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', 0, NULL, '2018-11-15', '2018-11-06', 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomplishedwork`
--
ALTER TABLE `accomplishedwork`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `JobOrderId` (`JobOrderId`);

--
-- Indexes for table `accountrole`
--
ALTER TABLE `accountrole`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `capuses`
--
ALTER TABLE `capuses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `AccountRoleID` (`AccountRoleID`);

--
-- Indexes for table `joborder`
--
ALTER TABLE `joborder`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `serial` (`SerialCode`),
  ADD KEY `CampusId` (`CampusId`),
  ADD KEY `AccomplishedWorkId` (`AccomplishedWorkId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomplishedwork`
--
ALTER TABLE `accomplishedwork`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accountrole`
--
ALTER TABLE `accountrole`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capuses`
--
ALTER TABLE `capuses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joborder`
--
ALTER TABLE `joborder`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`AccountRoleID`) REFERENCES `accountrole` (`ID`);

--
-- Constraints for table `joborder`
--
ALTER TABLE `joborder`
  ADD CONSTRAINT `joborder_ibfk_1` FOREIGN KEY (`CampusId`) REFERENCES `capuses` (`Id`),
  ADD CONSTRAINT `joborder_ibfk_2` FOREIGN KEY (`AccomplishedWorkId`) REFERENCES `accomplishedwork` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
