-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 03:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
CREATE DATABASE IF NOT EXISTS `abira` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `abira`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(350) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `campus` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Id`, `username`, `password`, `designation`, `campus`) VALUES
(1, 'admin_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'ALANGILAN'),
(2, 'director_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'director', 'ALANGILAN');

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
  `materialsNeeded10` varchar(250) DEFAULT NULL,
  `materialsNeeded11` varchar(250) NOT NULL,
  `materialsNeeded12` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joborder`
--

INSERT INTO `joborder` (`Id`, `SerialCode`, `DateRequestCreated`, `Campus`, `NameOfOffice`, `AirCondition`, `CarpentryMasonry`, `ElectricalWorks`, `Painting`, `Plumbing`, `Welding`, `InspectionReport`, `JobRecommendation`, `MaterialsNeededId`, `RequestorSignature`, `RequestorName`, `RequestorDesignation`, `DateRequested`, `signatureOfInspector`, `InspectorName`, `InspectorDesignation`, `DateInspected`, `Approved`, `ApprovedBy`, `StartOfService`, `StartOfServiceTime`, `EndOfService`, `EndOfServiceTime`, `NoOfHours`, `Assessment`, `AccomplishedWork1`, `WorkDoneBy1`, `Signature1`, `AccomplishedWork2`, `WorkDoneBy2`, `Signature2`, `AccomplishedWork3`, `WorkDoneBy3`, `Signature3`, `AccomplishedWork4`, `WorkDoneBy4`, `Signature4`, `ConformeName`, `ConformeApproved`, `ConformeDateApproved`, `ResponseTime`, `AccuracyOfWork`, `Courtesy`, `QualityOfService`, `statusId`, `priorityId`, `UserJobDescription`, `materialsNeeded1`, `materialsNeeded2`, `materialsNeeded3`, `materialsNeeded4`, `materialsNeeded5`, `materialsNeeded6`, `materialsNeeded7`, `materialsNeeded8`, `materialsNeeded9`, `materialsNeeded10`, `materialsNeeded11`, `materialsNeeded12`) VALUES
(18, 'RO18111601', '2018-11-16', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', '', '', '', NULL, '', 'checked', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(19, 'AL18111601', '2018-11-16', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', '', '', 'checked', NULL, '', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, 'There has been an issue with room 204 electricity, please check', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(20, 'AL18111602', '2018-11-16', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'off', 'off', 'checked', 'off', 'off', 'off', '', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-16', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', '    ', '', '', '    ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 2, 'There has been an issue with room 204 electricity, please check', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'NA18111801', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'off', 'off', 'off', NULL, 'checked', 'off', '', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-18', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, 4, 'try', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'NA18111802', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', '', '', '', NULL, 'checked', 'checked', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 4, 'try01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(23, 'NA18111803', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', '', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-18', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', '   ', '', '', '   ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, 4, 'capstone test', '', '', '', '', '', '', '', '', '', 'm1012', '', ''),
(24, 'AL18112501', '2018-11-25', '', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', '', '', '', '', 'ALANGILAN', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'We request air conditioning cleaning.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(25, 'AL18112502', '2018-11-25', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', '2 broken glass panel windows', 'installation of new glass panel windows', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-25', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'completed', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, NULL, 'There has been a broken glass panel and now in critical condition. Require immediate attention', 'glass panel', 'screws', 'glue', '', '', '', '', '', '', '', '', ''),
(26, 'AL18112503', '2018-11-25', 'ALANGILAN ', 'Dean\'s Office', '', 'checked', '', '', '', '', 'broken glass panel', 'installation of new glass panel', NULL, 'bebe ', 'bebe Alyana', 'deans\'s office staff', '2018-11-25', 'cardo', 'cardo dalisay', 'carpentry and masonry', '2018-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, 'glass panel', 'screws', 'glue', '', '', '', '', '', '', '', '', ''),
(27, 'AL18112503', '2018-11-25', 'ALANGILAN ', 'Dean\'s Office', '', 'checked', '', '', '', '', 'broken glass panel', 'installation of new glass panel', NULL, 'bebe ', 'bebe Alyana', 'deans\'s office staff', '2018-11-25', 'cardo', 'cardo dalisay', 'carpentry and masonry', '2018-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, 'glass panel', 'screws', 'glue', '', '', '', '', '', '', '', '', ''),
(28, 'AL18112504', '2018-11-25', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'checked', 'off', 'off', 'checked', 'off', 'rusty and leaky pipes', ' replacement of old pipes', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-25', '', 'cardo dalisay', 'plumbing', '0000-00-00', 0, NULL, '2018-11-27', '01:00 AM', '2018-11-28', '01:00 AM', 0, 'completed', '  ', '', '', '  ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 3, 'Requesting for installation of new water pipes for the drinking fountains. The tested water from the drinking fountain showed large traces of bacteria.', 'pipes', 'pipe tape', '', '', '', '', '', '', '', '', '', ''),
(29, 'AL18112601', '2018-11-26', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'off', 'checked', 'off', 'off', 'off', 'needs 20 yards of plastic tubes', 'can be done by one personnel', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-26', 'cardo', 'cardo dalisay', 'electrician', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'completed', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, NULL, 'requesting installment of electrical cable covers for all the computer laboratories of the building.', 'plastic tubes', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'AL18112602', '2018-11-26', 'ALANGILAN ', 'GSO', '', '', '', 'checked', '', '', 'old painting works', 'repainting', NULL, 'GSO', 'GSO', 'GSO admin aide', '2018-11-26', 'cardo', 'cardo dalisay', 'painting', '2018-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 4, NULL, 'paints', 'brushes', '', '', '', '', '', '', '', '', '', ''),
(31, 'AL18112701', '2018-11-27', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'off', 'checked', 'off', 'off', 'off', 'cut wires', 'replace wire\r\nrewire', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-27', '', 'cardo dalisay', 'electrician', '2018-11-27', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, NULL, 'hanging cables', 'cables', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'AL18112702', '2018-11-27', 'ALANGILAN ', 'GSO', 'checked', '', '', '', '', '', 'old models of aircon', 'replacement of new air cons', NULL, '', 'GSO', 'GSO admin aide', '2018-11-27', '', 'cardo dalisay', 'electrician', '2018-11-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, 'latest aircon', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `preventive_maintenance`
--

CREATE TABLE `preventive_maintenance` (
  `id` int(11) NOT NULL,
  `work` varchar(150) DEFAULT NULL,
  `campus` varchar(150) DEFAULT NULL,
  `month` varchar(150) DEFAULT NULL,
  `college` varchar(150) DEFAULT NULL,
  `floor` varchar(150) DEFAULT NULL,
  `area` varchar(150) DEFAULT NULL,
  `dateStarted` date DEFAULT NULL,
  `dateEnded` date DEFAULT NULL,
  `accomplishedBy` varchar(150) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `maintainance_activity` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preventive_maintenance`
--

INSERT INTO `preventive_maintenance` (`id`, `work`, `campus`, `month`, `college`, `floor`, `area`, `dateStarted`, `dateEnded`, `accomplishedBy`, `type`, `maintainance_activity`) VALUES
(28, '', '', '', '', '', NULL, '0000-00-00', '0000-00-00', '', NULL, NULL),
(29, '', 'ALANGILAN', 'January', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', NULL, '2018-11-14', '2018-11-10', 'sa', 'Door (Repainted; Lock/Knobs repaired/ replaced)', NULL),
(30, '', 'ALANGILAN', 'January', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', NULL, '0000-00-00', '0000-00-00', 'sa', 'Door (Repainted; Lock/Knobs repaired/ replaced)', NULL),
(31, 'Building, Walls, Doors, Windows', 'ALANGILAN', 'January', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', NULL, '0000-00-00', '0000-00-00', 'sa', 'Door (Repainted; Lock/Knobs repaired/ replaced)', NULL),
(32, '', 'ALANGILAN', 'January', '', '', '', '2018-11-17', '0000-00-00', 'a', NULL, 'Generator Set (Test run; Check fuel consumption; Cleaning)'),
(33, '', 'ALANGILAN', 'January', '', '', '', '2018-11-03', '0000-00-00', 'a', NULL, 'Generator Set (Test run; Check fuel consumption; Cleaning)'),
(34, 'Generator Set/Fuel Container', 'ALANGILAN', 'January', '', '', '', '2018-11-17', '0000-00-00', 'aaaaaaaa', NULL, 'Generator Set (Test run; Check fuel consumption; Cleaning)'),
(35, 'Generator Set/Fuel Container', 'ALANGILAN', 'January', '', '', '', '2018-11-17', '0000-00-00', 'aaaaaaaa', NULL, 'Generator Set (Test run; Check fuel consumption; Cleaning)');

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
(1, 'Pending For Approval', NULL),
(2, 'Approved', NULL),
(3, 'Denied', NULL),
(5, 'On-Going', NULL),
(6, 'Completed', NULL),
(7, 'For Inspection', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `preventive_maintenance`
--
ALTER TABLE `preventive_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joborder`
--
ALTER TABLE `joborder`
  ADD CONSTRAINT `joborder_ibfk_2` FOREIGN KEY (`statusId`) REFERENCES `status` (`Id`),
  ADD CONSTRAINT `joborder_ibfk_3` FOREIGN KEY (`priorityId`) REFERENCES `priority` (`Id`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"abira\",\"table\":\"joborder\"},{\"db\":\"abira\",\"table\":\"preventive_maintenance\"},{\"db\":\"abira\",\"table\":\"status\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-11-27 14:43:05', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
