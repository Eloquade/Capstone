-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 02:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblactivity`
--

INSERT INTO `tblactivity` (`id`, `dateofactivity`, `activity`, `description`) VALUES
(12, '2020-01-23', 'Juan For All', 'At City Hall');

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblactivityphoto`
--

INSERT INTO `tblactivityphoto` (`id`, `activityid`, `filename`) VALUES
(18, 7, '1485255503893ChibiMaker.jpg'),
(19, 7, '1485255504014dental.jpg'),
(20, 7, '1485255504108images.jpg'),
(21, 8, '1485255608251dfxfxfxdfxfxfxdf.png'),
(22, 8, '1485255608315easy-nail-art-designs-for-beginners-youtube.jpg'),
(23, 8, '1485255608404Easy-Winter-Nail-Art-Tutorials-2013-2014-For-Beginners-Learners-10.jpg'),
(24, 8, '1485255608513motherboard.png'),
(25, 9, '148525575293111041019_1012143402147589_9043399646875097729_n.jpg'),
(26, 9, '1485255753089bg.PNG'),
(32, 10, '148526764905211041019_1012143402147589_9043399646875097729_n.jpg'),
(33, 10, '1485267649364bg.PNG'),
(34, 10, '1485267649563motherboard.png'),
(35, 10, '14855301764078196186971_2237f161bd_b.jpg'),
(36, 10, '1485530481111bicycle-1280x720.jpg'),
(38, 11, '1485530620716user2.jpg'),
(39, 12, '1621218330674capstoneee.jpg'),
(40, 12, '1621235854801IMG20210503223454.jpg'),
(41, 12, '1621235854807IMG20210503223509.jpg'),
(42, 12, '1621235854811IMG20210503223631.jpg'),
(45, 13, '1621683176326organnn.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `page` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `actionTaken` varchar(50) NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id`, `yearRecorded`, `dateRecorded`, `complainant`, `cage`, `caddress`, `ccontact`, `personToComplain`, `page`, `paddress`, `pcontact`, `complaint`, `actionTaken`, `sStatus`, `locationOfIncidence`, `recordedby`) VALUES
(3, '2016', '2016-10-15', 'sda, as das', 2132, 'asda', 213, '11', 3213, 'dasda', 2123, '213asd', '1st Option', 'Solved', 'asdsa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `residentid` int(11) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `fullname`, `residentid`, `findings`, `purpose`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(17, 54354, 'Richard Dumas Villarica', 0, '', 'scholar', 5435345, 0, '2021-05-17', 'admin', 'Approved'),
(18, 45353, 'Laurenze Villarica', 0, '', 'scholar', 54354, 0, '2021-05-17', 'admin', 'Approved'),
(19, 4324, 'Lol Villarica', 0, '', 'scholar', 433, 500, '2021-05-17', 'admin', 'Approved'),
(20, 4324232, 'Adao, Kichi', 0, '', 'scholar', 42343, 0, '2021-05-17', 'admin', 'Approved'),
(21, 5442, 'Lol Villarica', 0, '', 'scholar', 54354, 200, '2021-05-18', 'admin', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhousehold`
--

INSERT INTO `tblhousehold` (`id`, `householdno`, `zone`, `totalhouseholdmembers`, `headoffamily`) VALUES
(3, 2, '2', 0, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tblindigency`
--

CREATE TABLE `tblindigency` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `purpose` text NOT NULL,
  `street` varchar(50) NOT NULL,
  `samount` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(2, 'asd', '2017-01-04 00:00:00', 'Added Resident namedjayjay, asd asd'),
(3, 'asd', '2017-01-04 19:13:40', 'Update Resident named Sample1, User1 Brgy1'),
(4, 'sad', '2017-01-05 13:22:10', 'Update Official named eliezer a. vacalares, jr.'),
(7, 'sad', '2017-01-05 13:54:40', 'Update Household Number 1'),
(8, 'sad', '2017-01-05 14:00:08', 'Update Blotter Request sda, as das'),
(9, 'sad', '2017-01-05 14:15:39', 'Update Clearance with clearance number of 123131'),
(10, 'sad', '2017-01-05 14:25:03', 'Update Permit with business name of asda'),
(11, 'sad', '2017-01-05 14:25:25', 'Update Resident named Sample1, User1 Brgy1'),
(12, 'Administrator', '2017-01-24 16:32:40', 'Added Permit with business name of hahaha'),
(13, 'Administrator', '2017-01-24 16:35:41', 'Added Clearance with clearance number of 123'),
(14, 'Administrator', '2017-01-24 18:43:35', 'Added Activity sad'),
(15, 'Administrator', '2017-01-24 18:45:49', 'Added Activity qwe'),
(16, 'Administrator', '2017-01-24 18:46:20', 'Added Activity ss'),
(17, 'Administrator', '2017-01-24 18:47:39', 'Added Activity e'),
(18, 'Administrator', '2017-01-24 18:55:20', 'Added Activity activity'),
(19, 'Administrator', '2017-01-24 18:58:23', 'Added Activity Activity'),
(20, 'Administrator', '2017-01-24 19:00:07', 'Added Activity activity'),
(21, 'Administrator', '2017-01-24 19:02:32', 'Added Activity Activity'),
(22, 'Administrator', '2017-01-24 19:04:54', 'Added Activity activity'),
(23, 'Administrator', '2017-01-24 19:08:40', 'Update Activity activity'),
(24, 'Administrator', '2017-01-27 23:23:40', 'Added Activity teets'),
(25, 'Administrator', '2017-01-27 23:24:14', 'Update Resident named Sample1, User1 Brgy1'),
(26, 'Administrator', '2017-01-27 23:25:10', 'Update Resident named sda, as das'),
(27, 'Administrator', '2017-01-30 10:45:13', 'Added Resident named 2, 2 2'),
(28, 'Administrator', '2017-01-30 10:45:54', 'Added Resident named 2, 2 2'),
(29, 'Administrator', '2017-02-06 08:58:23', 'Update Resident named sda, as das'),
(30, 'Administrator', '2017-02-06 09:00:14', 'Update Resident named sda, as das'),
(31, 'Administrator', '2017-02-06 09:03:57', 'Added Household Number 2'),
(32, 'Administrator', '2017-02-06 09:04:25', 'Added Household Number 2'),
(33, 'Administrator', '2021-05-16 17:10:13', 'Added Permit with business name of '),
(34, 'Administrator', '2021-05-16 17:12:40', 'Added Permit with business name of Milktea'),
(35, 'Administrator', '2021-05-16 17:14:36', 'Added Permit with business name of Ukay'),
(36, 'Administrator', '2021-05-16 17:14:36', 'Added Permit with business name of Ukay'),
(37, 'Administrator', '2021-05-16 17:16:17', 'Added Permit with business name of Milktea'),
(38, 'Administrator', '2021-05-16 17:16:17', 'Added Permit with business name of Milktea'),
(39, 'Administrator', '2021-05-16 17:19:31', 'Added Permit with business name of Ukay'),
(40, 'Administrator', '2021-05-16 17:19:31', 'Added Permit with business name of Ukay'),
(41, 'Administrator', '2021-05-16 17:23:51', 'Added Permit with business name of Ukay ni LOLE'),
(42, 'Administrator', '2021-05-16 17:23:51', 'Added Permit with business name of Ukay ni LOLE'),
(43, 'Administrator', '2021-05-16 17:28:01', 'Added Permit with business name of Milktea'),
(44, 'Administrator', '2021-05-16 17:28:01', 'Added Permit with business name of Milktea'),
(45, 'Administrator', '2021-05-16 17:32:03', 'Added Permit with business name of Ukay'),
(46, 'Administrator', '2021-05-16 17:32:03', 'Added Permit with business name of Ukay'),
(47, 'Administrator', '2021-05-16 17:32:52', 'Added Permit with business name of Milktea'),
(48, 'Administrator', '2021-05-16 17:32:52', 'Added Permit with business name of Milktea'),
(49, 'Administrator', '2021-05-16 17:33:30', 'Added Permit with business name of Ukay'),
(50, 'Administrator', '2021-05-16 17:33:30', 'Added Permit with business name of Ukay'),
(51, 'Administrator', '2021-05-16 17:35:12', 'Added Permit with business name of Milktea'),
(52, 'Administrator', '2021-05-16 17:35:12', 'Added Permit with business name of Milktea'),
(53, 'Administrator', '2021-05-16 17:37:25', 'Added Permit with business name of fsdfsdf'),
(54, 'Administrator', '2021-05-16 17:38:40', 'Added Permit with business name of Ukay'),
(55, 'Administrator', '2021-05-16 18:53:15', 'Added Permit with business name of Milktea'),
(56, 'Administrator', '2021-05-16 18:53:15', 'Added Permit with business name of Milktea'),
(57, 'Administrator', '2021-05-16 18:53:44', 'Added Permit with business name of ewe'),
(58, 'Administrator', '2021-05-16 18:53:44', 'Added Permit with business name of ewe'),
(59, 'Administrator', '2021-05-16 18:55:35', 'Added Permit with business name of Ukay'),
(60, 'Administrator', '2021-05-16 18:55:35', 'Added Permit with business name of Ukay'),
(61, 'Administrator', '2021-05-16 19:05:28', 'Added Clearance with clearance number of 434'),
(62, 'Administrator', '2021-05-16 19:13:24', 'Added Clearance with clearance number of 3432'),
(63, 'Administrator', '2021-05-16 20:09:59', 'Added Indigency with name of Laurenze Villarica'),
(64, 'Administrator', '2021-05-16 20:10:46', 'Added Indigency with name of Laurenze Villarica'),
(65, 'Administrator', '2021-05-16 20:11:04', 'Added Indigency with name of Laurenze Villarica'),
(66, 'Administrator', '2021-05-17 10:21:09', 'Added Permit with business name of Milktea'),
(67, 'Administrator', '2021-05-17 10:21:09', 'Added Permit with business name of Milktea'),
(68, 'Administrator', '2021-05-17 10:25:30', 'Added Activity Juan For All'),
(69, 'Administrator', '2021-05-17 10:29:27', 'Added Resident named Villarica, Laurnze Dumas'),
(70, 'Administrator', '2021-05-17 10:56:59', 'Added Official named Villarica, Laurenze P.'),
(71, 'Administrator', '2021-05-17 15:02:11', 'Added Permit with business name of Ukay ni LOLE'),
(72, 'Administrator', '2021-05-17 15:02:11', 'Added Permit with business name of Ukay ni LOLE'),
(73, 'Administrator', '2021-05-17 15:07:58', 'Added Clearance with clearance number of 43432'),
(74, 'Administrator', '2021-05-17 15:41:07', 'Update Clearance with clearance number of 434'),
(75, 'Administrator', '2021-05-17 15:41:22', 'Update Clearance with clearance number of 434'),
(76, 'Administrator', '2021-05-17 16:30:43', 'Added Permit with business name of Milktea'),
(77, 'Administrator', '2021-05-17 16:30:43', 'Added Permit with business name of Milktea'),
(78, 'Administrator', '2021-05-17 16:31:47', 'Added Permit with business name of Ukay'),
(79, 'Administrator', '2021-05-17 16:31:47', 'Added Permit with business name of Ukay'),
(80, 'Administrator', '2021-05-17 16:32:21', 'Added Clearance with clearance number of 54354'),
(81, 'Administrator', '2021-05-17 16:32:56', 'Added Clearance with clearance number of 54354'),
(82, 'Administrator', '2021-05-17 16:33:15', 'Added Clearance with clearance number of 432432'),
(83, 'Administrator', '2021-05-17 19:03:42', 'Added Permit with business name of 4324'),
(84, 'Administrator', '2021-05-17 19:03:42', 'Added Permit with business name of 4324'),
(85, 'Administrator', '2021-05-17 19:07:19', 'Added Permit with business name of Ukay ni LOLE'),
(86, 'Administrator', '2021-05-17 19:07:19', 'Added Permit with business name of Ukay ni LOLE'),
(87, 'Administrator', '2021-05-17 19:38:57', 'Added Clearance with clearance number of 432'),
(88, 'Administrator', '2021-05-17 19:40:28', 'Added Clearance with clearance number of 432'),
(89, 'Administrator', '2021-05-17 19:40:38', 'Added Clearance with clearance number of 432'),
(90, 'Administrator', '2021-05-17 19:41:44', 'Added Clearance with clearance number of 432'),
(91, 'Administrator', '2021-05-17 19:47:11', 'Added Permit with business name of 432432'),
(92, 'Administrator', '2021-05-17 19:47:11', 'Added Permit with business name of 432432'),
(93, 'Administrator', '2021-05-17 22:29:35', 'Added Permit with business name of Ukay ni LOLE'),
(94, 'Administrator', '2021-05-17 22:29:35', 'Added Permit with business name of Ukay ni LOLE'),
(95, 'Administrator', '2021-05-17 22:29:42', 'Update Permit with business name of Ukay ni LOLE'),
(96, 'Administrator', '2021-05-17 22:29:42', 'Update Permit with business name of Ukay ni LOLE'),
(97, 'Administrator', '2021-05-17 22:30:35', 'Added Permit with business name of Ukay ni LOLE'),
(98, 'Administrator', '2021-05-17 22:30:35', 'Added Permit with business name of Ukay ni LOLE'),
(99, 'Administrator', '2021-05-17 22:32:56', 'Added Permit with business name of Ukay ni LOLE'),
(100, 'Administrator', '2021-05-17 22:32:56', 'Added Permit with business name of Ukay ni LOLE'),
(101, 'Administrator', '2021-05-17 22:33:28', 'Added Permit with business name of Milktea'),
(102, 'Administrator', '2021-05-17 22:33:28', 'Added Permit with business name of Milktea'),
(103, 'Administrator', '2021-05-17 22:34:15', 'Added Permit with business name of ewe'),
(104, 'Administrator', '2021-05-17 22:34:15', 'Added Permit with business name of ewe'),
(105, 'Administrator', '2021-05-17 22:34:52', 'Added Permit with business name of Ukay ni LOLE'),
(106, 'Administrator', '2021-05-17 22:34:52', 'Added Permit with business name of Ukay ni LOLE'),
(107, 'Administrator', '2021-05-17 22:35:32', 'Added Permit with business name of Ukay ni LOLE'),
(108, 'Administrator', '2021-05-17 22:35:32', 'Added Permit with business name of Ukay ni LOLE'),
(109, 'Administrator', '2021-05-17 22:35:48', 'Added Permit with business name of rwerwer'),
(110, 'Administrator', '2021-05-17 22:35:48', 'Added Permit with business name of rwerwer'),
(111, 'Administrator', '2021-05-17 22:36:56', 'Added Clearance with clearance number of 543545'),
(112, 'Administrator', '2021-05-17 22:38:52', 'Added Clearance with clearance number of 543545'),
(113, 'Administrator', '2021-05-17 22:39:32', 'Added Clearance with clearance number of 4324'),
(114, 'Administrator', '2021-05-17 22:39:57', 'Added Clearance with clearance number of 4324'),
(115, 'Administrator', '2021-05-17 22:44:24', 'Added Clearance with clearance number of 4324'),
(116, 'Administrator', '2021-05-17 22:44:38', 'Added Clearance with clearance number of 3242'),
(117, 'Administrator', '2021-05-17 22:45:44', 'Added Clearance with clearance number of 4324'),
(118, 'Administrator', '2021-05-17 22:45:54', 'Added Clearance with clearance number of 654654'),
(119, 'Administrator', '2021-05-17 22:46:19', 'Added Clearance with clearance number of 54354'),
(120, 'Administrator', '2021-05-17 22:48:08', 'Added Clearance with clearance number of 45353'),
(121, 'Administrator', '2021-05-17 22:56:01', 'Added Clearance with clearance number of 4324'),
(122, 'Administrator', '2021-05-17 22:56:41', 'Added Clearance with clearance number of 4324232'),
(123, 'Administrator', '2021-05-17 22:57:21', 'Added Permit with business name of Ukay'),
(124, 'Administrator', '2021-05-17 22:57:21', 'Added Permit with business name of Ukay'),
(125, 'Administrator', '2021-05-17 22:57:37', 'Added Permit with business name of Ukay'),
(126, 'Administrator', '2021-05-17 22:57:37', 'Added Permit with business name of Ukay'),
(127, 'Administrator', '2021-05-18 13:37:27', 'Added Clearance with clearance number of 5442'),
(128, 'Administrator', '2021-05-22 19:32:56', 'Added Activity Juan For All Day 4');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `sPosition`, `completeName`, `pcontact`, `paddress`, `termStart`, `termEnd`, `status`) VALUES
(4, 'Captain', 'Laurenze Villarica', '8978768761', 'gdfgdfgd', '2016-10-03', '2016-10-06', 'Ongoing Term');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `residentid`, `fullname`, `businessName`, `businessAddress`, `typeOfBusiness`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(67, 0, 'Lol Villarica', 'Ukay', 'Zamora', 'ewe', 423432, 500, '2021-05-17', 'admin', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `bplace` text NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(120) NOT NULL,
  `zone` varchar(5) NOT NULL,
  `totalhousehold` int(5) NOT NULL,
  `differentlyabledperson` varchar(100) NOT NULL,
  `relationtohead` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `monthlyincome` int(12) NOT NULL,
  `householdnum` int(11) NOT NULL,
  `lengthofstay` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `skills` text NOT NULL,
  `igpitID` int(11) NOT NULL,
  `philhealthNo` int(12) NOT NULL,
  `highestEducationalAttainment` varchar(50) NOT NULL,
  `houseOwnershipStatus` varchar(50) NOT NULL,
  `landOwnershipStatus` varchar(20) NOT NULL,
  `dwellingtype` varchar(20) NOT NULL,
  `waterUsage` varchar(20) NOT NULL,
  `lightningFacilities` varchar(20) NOT NULL,
  `sanitaryToilet` varchar(20) NOT NULL,
  `formerAddress` text NOT NULL,
  `remarks` text NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `age`, `barangay`, `zone`, `totalhousehold`, `differentlyabledperson`, `relationtohead`, `maritalstatus`, `bloodtype`, `civilstatus`, `occupation`, `monthlyincome`, `householdnum`, `lengthofstay`, `religion`, `nationality`, `gender`, `skills`, `igpitID`, `philhealthNo`, `highestEducationalAttainment`, `houseOwnershipStatus`, `landOwnershipStatus`, `dwellingtype`, `waterUsage`, `lightningFacilities`, `sanitaryToilet`, `formerAddress`, `remarks`, `image`, `username`, `password`) VALUES
(17, 'Villarica', 'Laurnze', 'Dumas', '1976-01-27', 'Calapan City', 45, '', '', 9, '', '', '', 'O', 'Single', 'OFW', 14000, 232, 12, 'Catholic', 'Filipino', 'Male', 'Computer Literate', 0, 0, 'Bachelor’s degree', 'Own Home', '', '', '', '', '', 'Zamora Street, Calapan City, Oriental Mindoro', '', '1621218567071_IMG20191221204700.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `name`, `username`, `password`) VALUES
(1, 'sad', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'administrator'),
(2, 'zone', 'zone', 'zoneleader');

-- --------------------------------------------------------

--
-- Table structure for table `tblzone`
--

CREATE TABLE `tblzone` (
  `id` int(5) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblzone`
--

INSERT INTO `tblzone` (`id`, `zone`, `username`, `password`) VALUES
(2, '4', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblindigency`
--
ALTER TABLE `tblindigency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficial`
--
ALTER TABLE `tblofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblzone`
--
ALTER TABLE `tblzone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblindigency`
--
ALTER TABLE `tblindigency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
