-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 09:30 AM
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
(20, 'AL18111602', '2018-11-16', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'aa', 'asdas', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-16', '', 'a', 'as', '2018-10-31', 0, NULL, '2018-11-02', '01:00 AM', '2018-11-05', '03:00 AM', 74, 'completed', '                       a', 'a', 'a', '                       a', 'aa', 'a', 'a3a', 'a', 'a', 'a', 'a', 'a', 'a', 0, '2018-11-07', 0, 0, 0, 0, 5, 3, 'There has been an issue with room 204 electricity, please check', 'aa', 'a', 'aaa', 'aa', 'aa', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(21, 'NA18111801', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'checked', 'checked', 'checked', 'checked', 'checked', 'off', 'a', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-18', '', '', '', '0000-00-00', 0, NULL, '2018-11-02', '12:59 PM', '2018-11-17', '12:59 PM', 360, 'completed', '   ', '', '', '   ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 4, 'try', 'd', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'a', 'a'),
(22, 'NA18111802', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 's', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-18', '', 's', 's', '0000-00-00', 0, NULL, '2019-11-11', '12:00 PM', '2018-11-09', '01:00 AM', 0, 'completed', '     ', '', '', '     ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 1, 'try01', 'a', 's', 's', 's', 'ss', 'as', 's', 's', 's', 's', 's', 's'),
(23, 'NA18111803', '2018-11-18', 'ALANGILAN', 'College of Accountancy, Business, Economics and International Hospitality Management  ', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', '', NULL, NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-18', '', '', '', '0000-00-00', 0, NULL, '0000-00-00', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', '1notcompleted', 1, '0000-00-00', 0, 0, 0, 0, 5, 4, 'capstone test', '', '', '', '', '', '', '', '', '', 'm1012', '', ''),
(24, 'AL18112401', '2018-11-24', 'ALANGILAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'awesome', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', '', '2018-11-24', '', '', '', '0000-00-00', 0, NULL, '2018-11-02', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', '  ', '', '', '  ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 1, 'a', 'a1', 'a', '', '', '', '', 'a', '', '', '', 'a', ''),
(25, 'NA18112401', '2018-11-24', 'NASUGBU', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 's', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(26, 'BA18112401', '2018-11-24', 'BALAYAN', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, 'vc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(27, 'LO18112401', '2018-11-24', 'checked', 'CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.', 'checked', 'checked', 'checked', 'checked', 'checked', 'LOBO', NULL, NULL, NULL, NULL, 'MAGNAYE, CHRISTINA ANCHETA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 'sto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(28, 'AL18112402', '2018-11-17', 'NASUGBU', 'a', 'checked', 'checked', 'checked', NULL, '', 'checked', 'a', 'a', NULL, '', '', '', '0000-00-00', 'signa', 'a', 'a', '2018-11-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 4, NULL, 'a', 'a', 'a', 'aaa', 'a', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'a'),
(29, 'AL18112501', '2018-11-08', 'ALANGILAN ', 'dean', 'checked', 'checked', 'checked', 'checked', '', 'checked', 'asdasd', '', NULL, '', 'MAGNAYE, CHRISTINA ANCHETA', 'designation 1', '2018-11-08', '', 'name2', 's', '2018-11-26', 0, NULL, '2018-11-08', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 4, NULL, 'asd', 'asd', '', '', '', '', '', '', '', 'asd', '', ''),
(30, 'AL18112502', '2018-11-01', 'ALANGILAN ', 'deans', 'checked', 'checked', 'checked', 'checked', '', 'checked', 'q', '', NULL, '', 'q', 'q', '2018-11-01', '', 'q', 'q', '2018-10-31', 0, NULL, '2018-11-10', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 3, NULL, 'q', 'q', 'qq', 'aaa', '', '', '', '', '', '', 'q', ''),
(31, 'AL18112503', '2018-11-15', 'ALANGILAN ', 'd', '', '', '', '', '', '', '', 'test', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'AL18112504', '2018-11-15', 'ALANGILAN ', 'a', '', '', '', '', '', '', '', ' ', NULL, '', '', '', '2018-11-15', '', '', '', '0000-00-00', 0, NULL, '2018-11-30', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 4, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'AL18112505', '2018-11-30', 'ALANGILAN ', 'deans', '', '', '', '', '', '', '', '', NULL, '', '', '', '2018-11-30', '', '', '', '0000-00-00', 0, NULL, '2018-11-12', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'AL18112506', '2018-11-24', 'ALANGILAN ', 'deans', '', '', '', '', '', '', '', '', NULL, '', '', '', '2018-11-24', '', '', '', '0000-00-00', 0, NULL, '2018-11-11', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 4, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'AL18112507', '2018-11-13', 'ALANGILAN ', 'deans', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'AL18112508', '2018-11-17', 'ALANGILAN ', 'deans', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'AL18112509', '2018-11-16', 'ALANGILAN ', 'asdasad', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'AL18112510', '2018-11-22', 'ALANGILAN ', 'deans', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'AL18112511', '2018-11-08', 'ALANGILAN ', 'New Officea', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'AL18112512', '2018-11-01', 'ALANGILAN ', 'New Officea', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'AL18112513', '2018-11-24', 'ALANGILAN ', 'New Officea', 'checked', 'checked', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'AL18112514', '2018-11-23', 'ALANGILAN ', 'a', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'AL18112515', '2018-11-08', 'ALANGILAN ', 'asd', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'AL18112516', '2018-11-09', 'ALANGILAN ', 'asd', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'AL18112517', '2018-11-02', 'ALANGILAN ', 'a', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'AL18112518', '2018-11-01', 'ALANGILAN ', 'asd', '', '', '', '', '', '', '', '', NULL, '', '', '', '2018-11-01', '', '', '', '0000-00-00', 0, NULL, '2018-11-13', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 2, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'AL18112519', '2018-11-17', 'ALANGILAN ', 'asd', '', '', '', '', '', '', '', '', NULL, '', '', '', '2018-11-17', '', '', '', '0000-00-00', 0, NULL, '2018-11-02', '01:00 AM', '0000-00-00', '01:00 AM', 0, 'notcompleted', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', 0, 0, 0, 0, 5, 2, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'AL18112520', '2018-11-14', 'ALANGILAN ', 'asd', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'AL18112521', '2018-11-28', 'ALANGILAN ', 'asd', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'AL18112522', '2018-11-13', 'ALANGILAN ', 'New Officea', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 'AL18112523', '2018-11-15', 'ALANGILAN ', 'New Officeaaaa', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'AL18112524', '2018-11-16', 'ALANGILAN ', 'asd', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'AL18112525', '2018-11-12', 'ALANGILAN ', 'New Officea', '', '', '', '', '', '', '', '', NULL, '', '', '', '0000-00-00', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', '');

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
