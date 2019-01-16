-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 12:43 AM
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
  `campus` varchar(150) NOT NULL,
  `NameOfOffice` varchar(250) DEFAULT NULL,
  `Department` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Id`, `username`, `password`, `designation`, `campus`, `NameOfOffice`, `Department`) VALUES
(1, 'admin_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'ALANGILAN', NULL, NULL),
(2, 'director_alangilan', '21232f297a57a5a743894a0e4a801fc3', 'director', 'ALANGILAN', NULL, NULL),
(3, 'test', 'testpass', 'testdesignation', 'testcampus', 'testnameofoffice', 'testdepartment'),
(4, 'test1', 'test1', 'test1', 'NASUGBU', NULL, 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(5, 'test1', 'test1', 'test1', 'NASUGBU', 'test1', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(6, 'test2', 'test2', 'test2', 'NASUGBU', 'test2', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(7, 'test3', 'test3', 'test3', 'NASUGBU', 'test3', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(8, 'test4', 'test4', 'test4', 'NASUGBU', 'test4', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(9, 'test5', 'test5', 'test5', 'ALANGILAN', '', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(10, 'admin_alangilan', '', '', 'NASUGBU', '', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(11, 'faculty', 'pass', 'designation', 'campus', 'name', 'dept'),
(12, 'faculty', 'faculty', 'faculty', 'NASUGBU', 'faculty', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(13, 'faculty', 'faculty', 'faculty', 'ALANGILAN', 'faculty', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(14, 'faculty', 'd561c7c03c1f2831904823a95835ff5f', 'faculty', 'ALANGILAN', 'faculty', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(15, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'NASUGBU', 'a', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.'),
(16, 'open', '7cef8a734855777c2a9d0caf42666e69', 'a', 'NASUGBU', 'faculty', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.');

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
(18, 'RO18111601', '2018-11-16', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', '', '', '', NULL, '', 'checked', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 5, 5, 5, 6, 2, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(19, 'AL18111601', '2018-11-16', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', '', '', 'checked', NULL, '', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, 'There has been an issue with room 204 electricity, please check', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(20, 'AL18111602', '2018-11-16', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'off', 'off', 'checked', 'off', 'off', 'off', '', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-16', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', '    ', '', '', '    ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, 2, 'There has been an issue with room 204 electricity, please check', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'NA18111801', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'off', 'off', 'off', NULL, 'checked', 'off', '', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-18', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, 4, 'try', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'NA18111802', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', '', '', '', NULL, 'checked', 'checked', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 4, 'try01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(23, 'NA18111803', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', '', ' ', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-18', '', '', '', '0000-00-00', 0, NULL, '2018-12-03', '01:00 AM', '2018-12-04', '01:00 AM', 0, 'notcompleted', '    ', '', '', '    ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 6, 3, 'capstone test', '', '', '', '', '', '', '', '', '', 'm1012', '', ''),
(24, 'AL18112501', '2018-11-25', '', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', '', '', '', '', 'ALANGILAN', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'We request air conditioning cleaning.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(25, 'AL18112502', '2018-11-25', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', '2 broken glass panel windows', 'installation of new glass panel windows', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-25', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'completed', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, NULL, 'There has been a broken glass panel and now in critical condition. Require immediate attention', 'glass panel', 'screws', 'glue', '', '', '', '', '', '', '', '', ''),
(26, 'AL18112503', '2018-11-25', 'ALANGILAN ', 'Dean\'s Office', '', 'checked', '', '', '', '', 'broken glass panel', ' installation of new glass panel', NULL, '', 'bebe Alyana', 'deans\'s office staff', '2018-11-25', '', 'cardo dalisay', 'carpentry and masonry', '2018-11-26', 0, NULL, '2018-12-08', '08:00 AM', '2018-12-08', '12:00 PM', 4, 'completed', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 1, NULL, 'glass panel', 'screws', 'glue', '', '', '', '', '', '', '', '', ''),
(27, 'AL18112503', '2018-11-25', 'ALANGILAN ', 'Dean\'s Office', '', 'checked', '', '', '', '', 'broken glass panel', ' installation of new glass panel', NULL, '', 'bebe Alyana', 'deans\'s office staff', '2018-11-25', '', 'cardo dalisay', 'carpentry and masonry', '2018-11-26', 0, NULL, '2018-12-08', '08:00 AM', '2018-12-08', '12:00 PM', 4, 'completed', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 1, NULL, 'glass panel', 'screws', 'glue', '', '', '', '', '', '', '', '', ''),
(28, 'AL18112504', '2018-11-25', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'checked', 'off', 'off', 'checked', 'off', 'rusty and leaky pipes', ' replacement of old pipes', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-25', '', 'cardo dalisay', 'plumbing', '0000-00-00', 0, NULL, '2018-11-27', '01:00 AM', '2018-11-28', '01:00 AM', 0, 'completed', '  ', '', '', '  ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 6, 3, 'Requesting for installation of new water pipes for the drinking fountains. The tested water from the drinking fountain showed large traces of bacteria.', 'pipes', 'pipe tape', '', '', '', '', '', '', '', '', '', ''),
(29, 'AL18112601', '2018-11-26', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'off', 'checked', 'off', 'off', 'off', 'needs 20 yards of plastic tubes', 'can be done by one personnel', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-26', 'cardo', 'cardo dalisay', 'electrician', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'completed', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, NULL, 'requesting installment of electrical cable covers for all the computer laboratories of the building.', 'plastic tubes', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'AL18112602', '2018-11-26', 'ALANGILAN ', 'GSO', '', '', '', 'checked', '', '', 'old painting works', 'repainting', NULL, 'GSO', 'GSO', 'GSO admin aide', '2018-11-26', 'cardo', 'cardo dalisay', 'painting', '2018-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 4, NULL, 'paints', 'brushes', '', '', '', '', '', '', '', '', '', ''),
(31, 'AL18112701', '2018-11-27', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'off', 'checked', 'off', 'off', 'off', 'cut wires', 'replace wire\r\nrewire', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-27', '', 'cardo dalisay', 'electrician', '2018-11-27', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, NULL, 'hanging cables', 'cables', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'AL18112702', '2018-11-27', 'ALANGILAN ', 'GSO', 'checked', 'off', 'off', 'off', 'off', 'off', 'old models of aircon', ' ', NULL, '', 'GSO', 'GSO admin aide', '2018-11-27', '', 'cardo dalisay', 'electrician', '2018-11-28', 0, NULL, '2018-12-08', '08:00 AM', '2018-12-08', '12:00 PM', 4, 'completed', '  ', '', '', '  ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 5, 5, 5, 5, 6, 2, NULL, 'latest aircon', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'AL18112801', '2018-11-28', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'off', 'off', 'off', 'off', 'checked', 'off', 'leaky', 'replace', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-28', '', 'cardo dalisay', 'plumbing', '2018-11-29', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, NULL, 'leaky pipe. request immediate response.', 'pipes', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'AL18112802', '2018-11-28', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'off', 'checked', 'off', 'off', 'off', 'all rooms in the building ', ' installation of cable covers', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-28', '', 'cardo dalisay', 'electrician', '2018-11-29', 0, NULL, '2018-11-29', '01:00 AM', '2018-11-29', '01:00 AM', 0, 'completed', '   task 1', '', '', '  task 2', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 6, 1, 'requesting for cable covers for all electrical wiring', 'cable covers', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'AL18112803', '2018-11-28', 'ALANGILAN', 'GSO', 'checked', '', '', '', '', '', 'old models', 'install new aircon', NULL, '', 'GSO', 'GSO admin aide', '2018-11-28', '', 'cardo dalisay', 'electrician', '2018-11-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, NULL, 'latest aircon', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'AL18112804', '2018-11-28', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'sample description', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(37, 'AL18112805', '2018-11-28', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'dirty', ' clean', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-28', '', 'cardo dalisay', 'electrician', '2018-11-30', 0, NULL, '2018-11-29', '01:00 AM', '2018-11-29', '01:00 AM', 0, 'notcompleted', '   task 1', '', '', 'task 2', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 6, 1, 'recleaning', 'none', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'AL18112806', '2018-11-28', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', 'broke', ' replace', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-28', '', 'cardo dalisay', 'electrician', '2018-11-29', 0, NULL, '2018-11-30', '01:00 AM', '2018-11-30', '01:00 AM', 0, 'notcompleted', '  ', '', '', '  ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 6, 1, 'door is broken', 'doorknob', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'AL18112807', '2018-11-28', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'broke', 'replace', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-28', '', 'cardo dalisay', 'electrician', '2018-11-29', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, NULL, 'broken aircon', 'air con', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'AL18112808', '2018-11-28', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'dirty', ' clean', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-28', '', 'cardo dalisay', 'electrician', '2018-11-29', 0, NULL, '2018-11-29', '01:00 AM', '2018-11-29', '01:00 AM', 0, 'completed', '   task 1', '', '', '  task 2', '', '', '', '', '', '', '', '', 'GSO ADMIN AIDE', 0, '2018-11-29', 0, 0, 0, 0, 6, 1, 'request immediate cleaning', 'none', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'AL18112901', '2018-11-29', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', 'broken doorknow', ' replace doorknob', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-11-29', '', 'cardo dalisay', 'electrician', '2018-11-29', 0, NULL, '2018-12-03', '01:00 AM', '2018-12-11', '01:00 AM', 0, 'completed', '   task 1', 'carding cardo', '', '  task 2', 'cardo dalisay', '', '', '', '', '', '', '', '', 0, '0000-00-00', 5, 4, 3, 2, 6, 1, 'broken doorknob', 'doorknob', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'AL18112902', '2018-11-29', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'request cleaning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(43, 'AL18120301', '2018-12-03', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', 'broken', 'fix', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-12-03', '', 'cardo dalisay', 'carpentry and masonry', '2018-12-03', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 3, NULL, 'broken shelves', 'wood', 'nails', '', '', '', '', '', '', '', '', '', ''),
(44, 'AL18120501', '2018-12-05', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'off', 'off', 'checked', 'off', 'off', 'off', 'broken fans. cannot be fixed', 'installation of new efans', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-12-05', '', 'cardo dalisay', 'electrician', '2018-12-05', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, NULL, 'broken electric fans', 'new fans', 'wires', '', '', '', '', '', '', '', '', '', ''),
(45, 'AL18120502', '2018-12-05', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', '', '', '', '', '', 'checked', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'please report all doors of the building', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(46, 'AL18120503', '2018-12-05', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'off', 'off', 'off', 'checked', 'off', 'broken pipes', 'replace pipes', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-12-05', '', 'cardo dalisay', 'plumbing', '2018-12-06', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, NULL, 'leaking faucet', 'pipes', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'AL18120504', '2018-12-05', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'off', 'off', 'off', 'checked', 'off', 'clogged 2nd floor boys\' cr. 2 bowls', 'plumbing ', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'Staff', '2018-12-05', '', 'cardo dalisay', 'plumbing', '2018-12-06', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, NULL, 'clogged bowls in the boys\' comfort rooms', 'muriatic acid', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'NA18120501', '2018-12-05', 'NASUGBU', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', '', 'checked', '', 'checked', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'oih', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(49, 'NA18120502', '2018-12-05', 'NASUGBU', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', 'designation101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'qwa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(50, 'AL18120701', '2018-12-07', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'need to clean the filter', 'need to clean the filter', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'CICS', '2018-12-07', '', 'Ten Magnaye', '', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 1, 'pls check NBC office ', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 'AL18120702', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', 'need to fix', 'need to replace broken tiles', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'CICS', '2018-12-07', '', 'Ricardo', 'GSO', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, 2, 'please check third floor SL1', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'AL18120703', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', '', '', 'checked', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'please check third floor SL1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(53, 'AL18120704', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', '', '', '', '', 'checked', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'please check third floor ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(54, 'AL18120705', '2018-12-07', 'ALANGILAN', 'Food Innovation Center Building', 'off', 'off', 'off', 'off', 'checked', 'off', 'clog urinal', 'need to pump urinals', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'Food Tech', '2018-12-07', '', 'Nikko', 'GSO', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 4, 'please check third floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 'AL18120706', '2018-12-07', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'we need to clean the filter ', 'need to clean the filter', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'CEAFA', '2018-12-07', '', 'Earl Cabanig', '', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 1, 'please check fourth floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'AL18120707', '2018-12-07', 'ALANGILAN', 'STUDENT Center Bldg. (SSC)', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'SSC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'please check Registar Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(57, 'AL18120708', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'dusty filter', 'need to clean the filter', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'CIT', '2018-12-07', '', 'Noy ', 'GSO', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, 3, 'please check first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 'AL18120709', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', '', '', 'checked', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'please check third floor SL1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(59, 'AL18120710', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', '', '', '', '', 'checked', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'please check third floor comfort room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(60, 'AL18120711', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CIT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'please check third floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(61, 'AL18120712', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', '', '', 'checked', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CIT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'please check third floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(62, 'AL18120713', '2018-12-07', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CEAFA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'please check first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(63, 'AL18120714', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'Please check first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(64, 'AL18120715', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'broken aircon in room 101', 'need to fix some issues to the aircon', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'CIT', '2018-12-07', '', 'Jhunard', 'Makati', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, 3, 'Please check first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 'AL18120716', '2018-12-07', 'ALANGILAN', 'RG RECTO Bldg. (RGR)', 'checked', 'off', 'off', 'off', 'off', 'off', 'need to clean room 101', 'need to add freon and clean the filter', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'RGR', '2018-12-07', '', 'Jayjay', 'Reddit', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, 4, 'Please check first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 'AL18120717', '2018-12-07', 'ALANGILAN', 'STUDENT Center Bldg. (SSC)', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'SSC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'Please check first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(67, 'AL18120718', '2018-12-07', 'ALANGILAN', 'FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office', 'checked', 'off', 'off', 'off', 'off', 'off', 'dirty filter and need to add freon', ' need to clean filter and add freon', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'OSAS', '2018-12-07', '', 'Ange Ramos', 'Topengs <3', '2018-12-08', 0, NULL, '2018-12-08', '08:00 PM', '2018-12-09', '12:00 PM', 24, 'completed', '  ', '', '', '  ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 6, 1, 'Please check first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 'AL18120719', '2018-12-07', 'ALANGILAN', 'RSFIHM (School of Food & International Hotel Management) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'TENORIO, CRISTOPER PIDLAOAN', 'GSO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'Please check first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(69, 'AL18120720', '2018-12-07', 'ALANGILAN', 'Food Innovation Center Building', 'checked', 'off', 'off', 'off', 'off', 'off', 'need to clean the filter', 'need to clean the filter in room 102', NULL, '', 'TENORIO, CRISTOPER PIDLAOAN', 'Food Tech', '2018-12-07', '', 'Ria Du', 'CICS', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, 3, 'Please check first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 'AL18120721', '2018-12-07', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CEAFA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'please check rooms in first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(71, 'AL18120722', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'please check rooms in first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(72, 'AL18120723', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'dusty aircon in Faculty room', ' need to add freon and clean the filter', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'CIT', '2018-12-07', '', 'Junie Boy', 'CongTV', '2018-12-08', 0, NULL, '2018-12-08', '10:00 AM', '2018-12-08', '12:00 PM', 2, 'completed', '  ', '', '', '  ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 3, 'please check rooms in first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 'AL18120724', '2018-12-07', 'ALANGILAN', 'RG RECTO Bldg. (RGR)', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'RGR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'please check rooms in first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(74, 'AL18120725', '2018-12-07', 'ALANGILAN', 'STUDENT Center Bldg. (SSC)', 'checked', 'off', 'off', 'off', 'off', 'off', 'need to clean the aircon', 'need to clean the filter for better performance', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'SSC', '2018-12-07', '', 'Ria Du', 'CICS', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 3, 'please check casher  office', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 'AL18120726', '2018-12-07', 'ALANGILAN', 'FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office', 'checked', 'off', 'off', 'off', 'off', 'off', 'aircons not cold enough', 'need to add freon to all the aircon in first floor', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'OSAS', '2018-12-07', '', 'Ange Tenorio', 'Topengs <3', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 3, 'please check rooms in first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'AL18120727', '2018-12-07', 'ALANGILAN', 'RSFIHM (School of Food & International Hotel Management) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'dirty filters', 'need to clean the filter', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'RSFIHM', '2018-12-07', '', 'Sab Arvin', 'CICS', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 2, 2, 'please check rooms in first floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 'AL18120728', '2018-12-07', 'ALANGILAN', 'Food Innovation Center Building', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'Food Tech', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'please check rooms in first floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(78, 'AL18120729', '2018-12-07', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CEAFA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(79, 'AL18120730', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'dirty aircon in room 201', 'need to clean and add freon for room 201', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'CICS', '2018-12-07', '', 'Karen', 'Sto.Tomas', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 3, 'Please check rooms in second floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'AL18120731', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', 'checked', 'off', 'off', 'off', 'off', 'off', 'need to add freon', 'need to add freon', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'CIT', '2018-12-07', '', 'Jhubelle', 'CICS', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 3, 'Please check rooms in second floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 'AL18120732', '2018-12-07', 'ALANGILAN', 'STUDENT Center Bldg. (SSC)', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'SSC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'Please check  second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(82, 'AL18120733', '2018-12-07', 'ALANGILAN', 'FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'Food Tech', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(83, 'AL18120734', '2018-12-07', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', '', 'checked', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CEAFA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(84, 'AL18120735', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', 'need to fix broken tiles', 'need to replace the broken tiles and fix some windows', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'CICS', '2018-12-07', '', 'Jhuden', 'XAV', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 3, 'Please check rooms in second floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'AL18120736', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', 'off', 'checked', 'off', 'off', 'off', 'off', 'need to fix broken tiles', 'need to replace broken tiles', NULL, '', 'ENCINAS, KIM ANGELO  RIEGO', 'CIT', '2018-12-07', '', 'Patrick Rizare', 'CICS', '2018-12-08', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 1, 1, 'Please check rooms in second floor', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 'AL18120737', '2018-12-07', 'ALANGILAN', 'Food Innovation Center Building', '', 'checked', '', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'Food Tech', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(87, 'AL18120738', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', '', '', 'checked', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CIT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(88, 'NA18120701', '2018-12-07', 'NASUGBU', 'CICS (College of Informatics & Computing Sciences) Bldg.', '', '', '', '', '', 'checked', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(89, 'AL18120739', '2018-12-07', 'ALANGILAN', 'CICS (College of Informatics & Computing Sciences) Bldg.', '', '', 'checked', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CICS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(90, 'AL18120740', '2018-12-07', 'ALANGILAN', 'CIT (College of Industrial Technology) Bldg.', '', '', 'checked', '', '', '', NULL, NULL, NULL, NULL, 'ENCINAS, KIM ANGELO  RIEGO', 'CIT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 2, 'Please check rooms in second floor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(91, '19011701', '2019-01-17', NULL, '', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', NULL, NULL, NULL, NULL, 'faculty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'ahhhhhhhhhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(92, 'AL19011701', '2019-01-17', NULL, '', 'checked', 'checked', '', '', '', '', NULL, NULL, NULL, NULL, 'faculty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 3, 'try', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(93, 'AL19011702', '2019-01-17', NULL, '', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', NULL, NULL, NULL, NULL, 'faculty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'hiiiiiiiiiiiiiiiia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(94, 'AL19011703', '2019-01-17', NULL, '', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'faculty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'tre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(95, 'AL19011704', '2019-01-17', 'ALANGILAN', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 'faculty', 'faculty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(96, 'AL19011705', '2019-01-17', 'ALANGILAN', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 'faculty', 'faculty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'jkl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(97, 'AL19011706', '2019-01-17', 'ALANGILAN', 'faculty', 'checked', '', '', '', '', '', NULL, NULL, NULL, NULL, 'faculty', 'faculty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'please work', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '');

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
(1, 'faculty', '11111', 9, 1, 'qaasd', '2019-01-10'),
(2, 'faculty', 'aqq', 9, 3, '123', '2019-01-02'),
(3, 'faculty', '123123', 9, 1, '1', '2019-01-02'),
(4, 'faculty', ' ', 0, 0, NULL, '0000-00-00'),
(5, 'faculty', ' ', 0, 0, NULL, '0000-00-00'),
(6, 'faculty', ' ', 0, 0, NULL, '0000-00-00'),
(7, 'faculty', ' ', 0, 0, NULL, '0000-00-00'),
(8, 'faculty', ' ', 0, 0, NULL, '0000-00-00'),
(9, 'faculty', ' ', 0, 0, NULL, '0000-00-00'),
(10, 'faculty', ' ', 0, 0, 'test123', '0000-00-00'),
(11, 'admin', ' ', 0, 0, 'try', '0000-00-00'),
(12, 'admin', ' ', 9, 0, 'trry', '0000-00-00'),
(13, 'admin', ' ', 9, 1, 'ops', '0000-00-00'),
(14, 'admin', 'aqq', 9, 1, 'tr', '0000-00-00'),
(15, 'faculty', ' ', 14, 0, 'ya, when will it be then?\r\n', '0000-00-00'),
(16, 'faculty', ' ', 14, 0, 'ya, when will it be then?\r\n', '2019-01-17'),
(17, 'faculty', ' ', 14, 0, 'ya, when will it be then?\r\n', '2019-01-17'),
(18, 'faculty', ' ', 14, 0, 'ya, when will it be then?dasd\r\n', '2019-01-17'),
(19, 'faculty', ' ', 14, 0, 'ya, when will it be then?up\r\n', '2019-01-17'),
(20, 'admin', ' ', 14, 1, 'maybe later', '2019-01-17'),
(21, 'faculty', ' ', 14, 1, 'okay\r\n', '2019-01-17');

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
