-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 12:55 PM
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
  `DateRequestCreated` date DEFAULT NULL,
  `CampusId` varchar(250) DEFAULT NULL,
  `NameOfOffice` varchar(200) DEFAULT NULL,
  `AirCondition` varchar(5) DEFAULT NULL,
  `CarpentryMasonry` varchar(5) DEFAULT NULL,
  `ElectricalWorks` varchar(5) DEFAULT NULL,
  `Painting` varchar(5) DEFAULT NULL,
  `Plumbing` varchar(5) DEFAULT NULL,
  `Welding` varchar(5) DEFAULT NULL,
  `InspectionReport` varchar(450) DEFAULT NULL,
  `JobRecommendation` varchar(450) DEFAULT NULL,
  `MaterialsNeededId` int(10) DEFAULT NULL,
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
  `StartOfServiceTime` varchar(15) DEFAULT NULL,
  `EndOfService` date DEFAULT NULL,
  `EndOfServiceTime` varchar(15) DEFAULT NULL,
  `NoOfHours` int(10) DEFAULT NULL,
  `Assesment` varchar(200) DEFAULT NULL,
  `AccomplishedWork1` varchar(250) DEFAULT NULL,
  `WorkDoneBy1` varchar(250) DEFAULT NULL,
  `Signature1` varchar(250) DEFAULT NULL,
  `AccomplishedWork2` varchar(250) DEFAULT NULL,
  `WorkDoneBy2` varchar(250) DEFAULT NULL,
  `Signature2` varchar(250) DEFAULT NULL,
  `AccomplishedWork3` varchar(250) DEFAULT NULL,
  `WorkDoneBy3` varchar(250) DEFAULT NULL,
  `Signature3` varchar(250) DEFAULT NULL,
  `AccomplishedWork4` varchar(250) DEFAULT NULL,
  `WorkDoneBy4` varchar(250) DEFAULT NULL,
  `Signature4` varchar(250) DEFAULT NULL,
  `ConformeName` varchar(200) DEFAULT NULL,
  `ConformeApproved` tinyint(1) DEFAULT NULL,
  `ConformeDateApproved` date DEFAULT NULL,
  `ResponseTime` int(10) DEFAULT NULL,
  `AccuracyOfWork` int(10) DEFAULT NULL,
  `Courtesy` int(10) DEFAULT NULL,
  `QualityOfService` int(10) DEFAULT NULL,
  `statusId` int(10) DEFAULT NULL,
  `priorityId` int(10) DEFAULT NULL,
  `Requester` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materialsneeded`
--

CREATE TABLE `materialsneeded` (
  `Id` int(10) NOT NULL,
  `M1` varchar(250) DEFAULT NULL,
  `M2` varchar(250) DEFAULT NULL,
  `M3` varchar(250) DEFAULT NULL,
  `M4` varchar(250) DEFAULT NULL,
  `M5` varchar(250) DEFAULT NULL,
  `M6` varchar(250) DEFAULT NULL,
  `M7` varchar(250) DEFAULT NULL,
  `M8` varchar(250) DEFAULT NULL,
  `M9` varchar(250) DEFAULT NULL,
  `M10` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `Id` int(3) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Color` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`Id`, `Name`, `Color`) VALUES
(1, 'High', ''),
(2, 'Medium', ''),
(3, 'Normal', ''),
(4, 'Low', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Id` int(3) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Color` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Id`, `Name`, `Color`) VALUES
(1, 'For Approval', NULL),
(2, 'Approved', NULL),
(3, 'Denied', NULL),
(4, 'On-Going', NULL),
(5, 'Pending', NULL),
(6, 'Done', NULL);

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
  ADD KEY `statusId` (`statusId`),
  ADD KEY `priorityId` (`priorityId`),
  ADD KEY `MaterialsNeededId` (`MaterialsNeededId`);

--
-- Indexes for table `materialsneeded`
--
ALTER TABLE `materialsneeded`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joborder`
--
ALTER TABLE `joborder`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materialsneeded`
--
ALTER TABLE `materialsneeded`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `joborder_ibfk_2` FOREIGN KEY (`statusId`) REFERENCES `status` (`Id`),
  ADD CONSTRAINT `joborder_ibfk_3` FOREIGN KEY (`priorityId`) REFERENCES `priority` (`Id`),
  ADD CONSTRAINT `joborder_ibfk_4` FOREIGN KEY (`MaterialsNeededId`) REFERENCES `materialsneeded` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
