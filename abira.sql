-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 12:22 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `campus` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `campus`) VALUES
(2, 'admin_nasugbu', '21232f297a57a5a743894a0e4a801fc3', 'nasugbu'),
(3, 'admin_balayan', '21232f297a57a5a743894a0e4a801fc3', 'balayan'),
(4, 'admin_malvar', '21232f297a57a5a743894a0e4a801fc3', 'malvar'),
(5, 'admin_lemery', '21232f297a57a5a743894a0e4a801fc3', 'lemery'),
(6, 'admin_lipa', '21232f297a57a5a743894a0e4a801fc3', 'lipa'),
(7, 'admin_lobo', '21232f297a57a5a743894a0e4a801fc3', 'lobo'),
(8, 'admin_mabini', '21232f297a57a5a743894a0e4a801fc3', 'mabini'),
(9, 'admin_main', '21232f297a57a5a743894a0e4a801fc3', 'main'),
(10, 'admin_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'alangilan'),
(11, 'admin_rosario', '21232f297a57a5a743894a0e4a801fc3', 'rosario'),
(12, 'admin_taysan', '21232f297a57a5a743894a0e4a801fc3', 'taysan'),
(13, 'admin_sanjaun', '21232f297a57a5a743894a0e4a801fc3', 'sanjuan');

-- --------------------------------------------------------

--
-- Table structure for table `campusaccounts`
--

CREATE TABLE `campusaccounts` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `campus` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `username`, `password`, `campus`) VALUES
(1, 'director_nasugbu', '21232f297a57a5a743894a0e4a801fc3', 'nasugbu'),
(2, 'director_balayan', '21232f297a57a5a743894a0e4a801fc3', 'balayan'),
(3, 'director_malvar', '21232f297a57a5a743894a0e4a801fc3', 'malvar'),
(4, 'director_lemery', '21232f297a57a5a743894a0e4a801fc3', 'lemery'),
(5, 'director_lipa', '21232f297a57a5a743894a0e4a801fc3', 'lipa'),
(6, 'director_lobo', '21232f297a57a5a743894a0e4a801fc3', 'lobo'),
(7, 'director_mabini', '21232f297a57a5a743894a0e4a801fc3', 'mabini'),
(8, 'director_main', '21232f297a57a5a743894a0e4a801fc3', 'main'),
(9, 'director_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'alangilan'),
(10, 'director_rosario', '21232f297a57a5a743894a0e4a801fc3', 'rosario'),
(11, 'director_taysan', '21232f297a57a5a743894a0e4a801fc3', 'taysan'),
(12, 'director_sanjaun', '21232f297a57a5a743894a0e4a801fc3', 'sanjuan');

-- --------------------------------------------------------

--
-- Table structure for table `joborder`
--

CREATE TABLE `joborder` (
  `Id` int(10) NOT NULL,
  `SerialCode` varchar(10) DEFAULT NULL,
  `DateRequestCreated` date DEFAULT NULL,
  `Campus` varchar(250) DEFAULT NULL,
  `NameOfOffice` varchar(200) DEFAULT NULL,
  `AirCondition` varchar(10) DEFAULT NULL,
  `CarpentryMasonry` varchar(10) DEFAULT NULL,
  `ElectricalWorks` varchar(10) DEFAULT NULL,
  `Painting` varchar(10) DEFAULT NULL,
  `Plumbing` varchar(10) DEFAULT NULL,
  `Welding` varchar(10) DEFAULT NULL,
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
  `Assessment` varchar(200) DEFAULT NULL,
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
  `UserJobDescription` varchar(450) DEFAULT NULL,
  `materialsNeeded1` varchar(250) DEFAULT NULL,
  `materialsNeeded2` varchar(250) DEFAULT NULL,
  `materialsNeeded3` varchar(250) DEFAULT NULL,
  `materialsNeeded4` varchar(250) DEFAULT NULL,
  `materialsNeeded5` varchar(250) DEFAULT NULL,
  `materialsNeeded6` varchar(250) DEFAULT NULL,
  `materialsNeeded7` varchar(250) DEFAULT NULL,
  `materialsNeeded8` varchar(250) DEFAULT NULL,
  `materialsNeeded9` varchar(250) DEFAULT NULL,
  `materialsNeeded10` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `preventive_maintenance`
--

CREATE TABLE `preventive_maintenance` (
  `id` int(11) NOT NULL,
  `work` varchar(150) DEFAULT NULL,
  `campus` varchar(150) DEFAULT NULL,
  `month` varchar(150) DEFAULT NULL,
  `department` varchar(150) DEFAULT NULL,
  `floor` varchar(150) DEFAULT NULL,
  `area` varchar(150) DEFAULT NULL,
  `dateStarted` varchar(150) DEFAULT NULL,
  `dateEnded` varchar(150) DEFAULT NULL,
  `accomplishedBy` varchar(150) DEFAULT NULL
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
(4, 'Pending', NULL),
(5, 'On-Going', NULL),
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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joborder`
--
ALTER TABLE `joborder`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CampusId` (`Campus`),
  ADD KEY `statusId` (`statusId`),
  ADD KEY `priorityId` (`priorityId`),
  ADD KEY `MaterialsNeededId` (`MaterialsNeededId`);

--
-- Indexes for table `preventive_maintenance`
--
ALTER TABLE `preventive_maintenance`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `joborder`
--
ALTER TABLE `joborder`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- Constraints for table `joborder`
--
ALTER TABLE `joborder`
  ADD CONSTRAINT `joborder_ibfk_2` FOREIGN KEY (`statusId`) REFERENCES `status` (`Id`),
  ADD CONSTRAINT `joborder_ibfk_3` FOREIGN KEY (`priorityId`) REFERENCES `priority` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
