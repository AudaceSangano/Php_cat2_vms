-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 04:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'sangano audace', 'admin', 783503691, 'admin@gmail.com', '123', '2019-05-23 06:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

CREATE TABLE `tblvisitor` (
  `ID` int(5) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `WhomtoMeet` varchar(120) DEFAULT NULL,
  `Deptartment` varchar(120) DEFAULT NULL,
  `ReasontoMeet` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `remark` varchar(255) DEFAULT NULL,
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `Email`, `MobileNumber`, `Address`, `WhomtoMeet`, `Deptartment`, `ReasontoMeet`, `EnterDate`, `remark`, `outtime`, `Status`) VALUES
(1, 'Sangano', 'audasang2018@gmail.com', 783503691, 'byumba/rwanda', 'prencipal', 'administration', 'interview', '2021-05-29 16:59:46', 'done', '2021-06-03 14:38:52', 0),
(2, 'Emmanuel', 'test@emmy.com', 786917705, 'byumba', 'sangwa', 'IT', 'interview', '2021-05-30 08:57:56', 'not done', '2021-06-03 14:38:52', 0),
(3, 'jonathan', 'jonath@test.gmail.com', 783503691, 'kgl', 'sangwa', 'IT', 'person', '2021-05-30 10:05:14', 'done', '2021-06-03 14:38:52', 0),
(4, 'leah', 'test@leah.com', 783503691, 'kgl', 'sangwa', 'IT', 'person', '2021-05-30 10:08:07', 'ok', '2021-06-03 14:38:52', 0),
(9, 'damour', 'dam@gmail.com', 123456789, 'kgl', 'principle', 'administration', 'interview', '2021-05-30 15:40:33', 'done', '2021-05-30 15:40:58', 0),
(10, 'kagame', 'test@gmail.com', 783503691, 'kgl', 'principle', 'administration', 'interview', '2021-05-30 16:23:48', 'done', '2021-06-03 09:30:49', 0),
(11, 'Iradukunda ', 'audace@car.com', 783503691, 'kgl', 'sano', 'IT', 'mark', '2021-06-02 06:40:48', 'done', '2021-06-03 09:27:31', 0),
(12, 'bantegeye', 'bant@gmail.com', 783503691, 'byumba', 'sangano', 'IT', 'visit', '2021-06-03 09:32:29', 'not yet', '2021-06-03 09:33:01', 0),
(13, 'sandra', 'ishimwesandra5@gmail.com', 789999999, 'tct', 'principle', 'administration', 'interview', '2021-06-03 11:18:12', 'dfghjk', '2021-06-03 11:58:52', 0),
(14, 'sangano', 'audace@car.com', 783503691, 'kgl', 'sanga', 're', 'person', '2021-06-03 11:35:46', 'done', '2021-06-03 12:11:11', 0),
(15, 'Gilbert', 'gilbert@test.com', 783503691, 'Rusizi', 'Damour', 'IT', 'person', '2021-06-03 14:46:22', NULL, NULL, 1),
(16, 'Muhatuma', 'muha@test.com', 987654321, 'huye', 'principle', 'Administration', 'person', '2021-06-03 14:54:01', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
