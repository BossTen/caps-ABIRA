-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 03:59 PM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(350) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `position` varchar(30) DEFAULT NULL,
  `campus` varchar(150) NOT NULL,
  `NameOfOffice` varchar(250) DEFAULT NULL,
  `Department` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Id`, `username`, `password`, `designation`, `position`, `campus`, `NameOfOffice`, `Department`) VALUES
(1, 'admin_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, 'ALANGILAN', NULL, NULL),
(2, 'director_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'director', NULL, 'ALANGILAN', NULL, NULL),
(21, 'cics', '0e8f46910b509cfa77f9806411e16196', 'faculty', 'CICS Dept.', 'ALANGILAN', 'CICS Faculty', 'CICS (College of Informatics & Computing Sciences) Bldg.'),
(22, 'Jerry', 'd561c7c03c1f2831904823a95835ff5f', 'faculty', 'Help desk', 'ALANGILAN', 'Dean\'s office', 'CIT (College of Industrial Technology) Bldg.');

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
  `userId` int(11) DEFAULT NULL,
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
  `materialsNeeded12` varchar(250) NOT NULL,
  `location` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joborder`
--

INSERT INTO `joborder` (`Id`, `userId`, `SerialCode`, `DateRequestCreated`, `Campus`, `NameOfOffice`, `AirCondition`, `CarpentryMasonry`, `ElectricalWorks`, `Painting`, `Plumbing`, `Welding`, `InspectionReport`, `JobRecommendation`, `MaterialsNeededId`, `RequestorSignature`, `RequestorName`, `RequestorDesignation`, `DateRequested`, `signatureOfInspector`, `InspectorName`, `InspectorDesignation`, `DateInspected`, `Approved`, `ApprovedBy`, `StartOfService`, `StartOfServiceTime`, `EndOfService`, `EndOfServiceTime`, `NoOfHours`, `Assessment`, `AccomplishedWork1`, `WorkDoneBy1`, `Signature1`, `AccomplishedWork2`, `WorkDoneBy2`, `Signature2`, `AccomplishedWork3`, `WorkDoneBy3`, `Signature3`, `AccomplishedWork4`, `WorkDoneBy4`, `Signature4`, `ConformeName`, `ConformeApproved`, `ConformeDateApproved`, `ResponseTime`, `AccuracyOfWork`, `Courtesy`, `QualityOfService`, `statusId`, `priorityId`, `UserJobDescription`, `materialsNeeded1`, `materialsNeeded2`, `materialsNeeded3`, `materialsNeeded4`, `materialsNeeded5`, `materialsNeeded6`, `materialsNeeded7`, `materialsNeeded8`, `materialsNeeded9`, `materialsNeeded10`, `materialsNeeded11`, `materialsNeeded12`, `location`) VALUES
(109, NULL, 'AL19012101', '2019-01-21', 'ALANGILAN', 'CICS Faculty', 'checked', 'off', 'off', 'off', 'off', 'off', 'dusty filters and low in freon', ' need to clean the filter and add freon', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '07:00 PM', '0000-00-00', '07:00 PM', 4, 'notcompleted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 5, 4, 3, 2, 6, NULL, 'please check the room in first floor', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(110, NULL, 'AL19012201', '2019-01-22', 'ALANGILAN', 'Dean\'s office', 'checked', 'off', 'off', 'off', 'off', 'off', 'Not working', ' Fix', NULL, '', 'Jerry', 'Help desk', NULL, '', 'Cardo', 'Electrician', NULL, 0, NULL, '2019-01-23', '07:44 AM', '2019-01-23', '11:44 AM', 4, 'notcompleted', '  Fix bug', 'Cardo', '', '  ', '', '', '', '', '', '', '', '', NULL, 0, '0000-00-00', 1, 1, 2, 3, 6, 4, 'Doesnt work', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(111, NULL, 'AL19012202', '2019-01-22', 'ALANGILAN', 'Dean\'s office', 'checked', 'off', 'off', 'off', 'off', 'off', 'Go', 'Go', NULL, NULL, 'Jerry', 'Help desk', NULL, NULL, 'Cardo', 'Electrician', '2019-01-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'notcompleted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 2, 4, 'Doesnt work', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(112, NULL, 'AL19012203', '2019-01-22', 'ALANGILAN', 'Dean\'s office', 'checked', 'off', 'off', 'off', 'off', 'off', 'Broke', ' Fix', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '07:00 PM', '0000-00-00', '07:00 PM', 2, 'notcompleted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 5, 5, 5, 5, 6, NULL, 'Broken fan', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(113, NULL, 'AL19012301', '2019-01-23', 'ALANGILAN', 'Dean\'s office', '', 'checked', '', '', '', '', NULL, NULL, NULL, NULL, 'Jerry', 'Help desk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'Broken Door', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(114, NULL, 'AL19012302', '2019-01-23', 'ALANGILAN', 'CICS Faculty', 'checked', 'off', 'off', 'off', 'off', 'off', 'dusty filter and low in freon', ' need to clean filters and add freon', NULL, '', 'cics', 'CICS Dept.', NULL, '', 'Ten Magnaye', 'GSO', NULL, 0, NULL, '2019-01-23', '08:00 AM', '2019-01-23', '12:00 PM', 4, 'completed', '  add freon', 'Marco', '', '  clean the filters', 'Jimuel', '', '', '', '', '', '', '', NULL, 0, '0000-00-00', 4, 4, 4, 4, 6, 1, 'please check room in 2nd floor', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(115, NULL, 'AL19012501', '2019-01-25', 'ALANGILAN', 'Dean\'s office', 'checked', 'off', 'off', 'off', 'off', 'off', 'broken fan', ' fix fan', NULL, '', 'Jerry', 'Help desk', NULL, '', 'Ten Magnaye', 'GSO', NULL, 0, NULL, '2019-01-25', '12:00 PM', '2019-01-25', '03:00 PM', 3, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', NULL, 0, '0000-00-00', 0, 0, 0, 0, 5, 4, 'Broken fan', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(116, NULL, 'AL19012502', '2019-01-25', 'ALANGILAN', 'Dean\'s office', 'checked', 'off', 'off', 'off', 'off', 'off', 'check 123', ' check 123', NULL, '', 'Jerry', 'Help desk', NULL, '', 'Ten Magnaye', 'GSO', NULL, 0, NULL, '2019-01-25', '12:00 PM', '2019-01-25', '03:00 PM', 3, 'completed', '  add freon', 'Marco', '', '  clean the filters', 'Marco', '', '', '', '', '', '', '', NULL, 0, '0000-00-00', 5, 4, 4, 5, 6, 4, 'Doesnt work on room 101', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(117, NULL, 'AL19012503', '2019-01-25', 'ALANGILAN', 'Dean\'s office', '', 'checked', '', '', '', '', NULL, NULL, NULL, NULL, 'Jerry', 'Help desk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'Broken door lock.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(118, NULL, 'AL19012901', '2019-01-29', 'ALANGILAN', 'Dean\'s office', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', NULL, NULL, NULL, NULL, 'Jerry', 'Help desk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'dasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1'),
(119, NULL, 'AL19012902', '2019-01-29', 'ALANGILAN', 'Dean\'s office', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 'Jerry', 'Help desk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1'),
(120, NULL, 'AL19012903', '2019-01-29', 'ALANGILAN', 'Dean\'s office', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 'Jerry', 'Help desk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'qaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `sender` varchar(10) DEFAULT NULL,
  `serialCode` varchar(10) DEFAULT NULL,
  `facultyId` int(5) DEFAULT NULL,
  `adminId` int(5) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  `dateCreated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `serialCode`, `facultyId`, `adminId`, `message`, `dateCreated`) VALUES
(29, 'admin', 'AL19012101', 21, 1, 'cant fix right now, ill update you soon', '2019-01-21'),
(30, 'faculty', 'AL19012101', 21, 1, 'ok sir, update me soon', '2019-01-21'),
(31, 'admin', 'AL19012202', 22, 1, 'Can do it today', '2019-01-25'),
(32, 'faculty', 'AL19012202', 22, 1, 'When then?', '2019-01-25'),
(33, 'admin', 'AL19012202', 22, 1, 'We will update you soon', '2019-01-25');

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
(36, 'Air-conditioning', 'ALANGILAN', 'January', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', 'left and right wing', '2018-11-28', '2018-11-30', '', NULL, NULL),
(37, 'Plumbing', 'ALANGILAN', 'January', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'Third Floor', NULL, '2018-11-28', '2018-11-28', '', 'Water Closet', NULL),
(38, 'Air-conditioning', 'ALANGILAN', 'January', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', 'left and right wing', '2018-11-28', '2018-11-28', 'Carding Dalisay', NULL, NULL),
(39, 'Building, Walls, Doors Windows', 'ALANGILAN', 'February', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', NULL, '2018-12-28', '2018-12-28', 'Carding Dalisay', 'Door (Repainted; Lock/Knobs repaired/ replaced)', NULL),
(40, 'Generator', 'ALANGILAN', 'January', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', 'left and right wing', '2018-11-29', '2018-11-30', 'Carding Dalisay', NULL, NULL),
(41, 'Air-conditioning', 'ALANGILAN', 'December', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'Basement Floor', 'left and right wing', '2018-12-05', '2018-12-05', 'Carding Dalisay', NULL, NULL);

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
(7, 'For Inspection', NULL),
(8, 'For Evaluation', NULL);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `senderId` (`facultyId`),
  ADD KEY `receiverId` (`adminId`);

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `preventive_maintenance`
--
ALTER TABLE `preventive_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
