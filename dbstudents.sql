-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 06:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstudents`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblavailable`
--

CREATE TABLE `tblavailable` (
  `avID` int(11) NOT NULL,
  `avCourseID` int(11) NOT NULL,
  `avSemester` text NOT NULL,
  `avYear` int(4) NOT NULL,
  `avStatus` text NOT NULL,
  `avStaffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblavailable`
--

INSERT INTO `tblavailable` (`avID`, `avCourseID`, `avSemester`, `avYear`, `avStatus`, `avStaffID`) VALUES
(1, 3, 'Spring', 2022, 'Active', 1),
(2, 1, 'Spring', 2022, 'Active', 2),
(3, 2, 'Fall', 2023, 'Inactive', 3),
(4, 4, 'Winter', 2023, 'Inactive', 4),
(5, 5, 'Summer', 2023, 'Active', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblcourses`
--

CREATE TABLE `tblcourses` (
  `crsID` int(10) NOT NULL,
  `crsName` varchar(100) NOT NULL,
  `crsDesc` varchar(500) NOT NULL,
  `crsCount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourses`
--

INSERT INTO `tblcourses` (`crsID`, `crsName`, `crsDesc`, `crsCount`) VALUES
(1, 'CST301: Computer Software Technology & Design', 'Learn application of theory, knowledge, and practices to effectively and efficiently build reliable software systems.', 25),
(2, 'CYB101: Defensive Network Reconnaissance', 'Master beginning and intermediate-level Cybersecurity skills and knowledge.', 15),
(3, 'ART101: Art Appreciation', 'Overview of art history and the principles of visual art, exploring the various contextual factors and purposes of art.', 30),
(4, 'FIN301: Business Ethics for Financial Managers', 'Examine some of the most recent and classical organizational ethics cases using the framework from managing business ethical procedures and practices.', 10),
(5, 'INF620: Management Information Systems', 'Introduces the fundamentals of computer systems, the role of information processing in the business environment, and provides a basic overview of essential computer software.', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tblenrollment`
--

CREATE TABLE `tblenrollment` (
  `enrID` int(10) NOT NULL,
  `enrStudentID` int(10) NOT NULL,
  `enrCourseID` int(10) NOT NULL,
  `enrStaffID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblenrollment`
--

INSERT INTO `tblenrollment` (`enrID`, `enrStudentID`, `enrCourseID`, `enrStaffID`) VALUES
(1, 3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `stfID` int(10) NOT NULL,
  `stfFirstName` varchar(50) NOT NULL,
  `stfLastName` varchar(50) NOT NULL,
  `stfStartDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`stfID`, `stfFirstName`, `stfLastName`, `stfStartDate`) VALUES
(1, 'Leonard', 'Hemshall', '1999-01-01'),
(2, 'Gris', 'Bellwood', '1990-06-22'),
(3, 'Claudine', 'Brewins', '2020-04-08'),
(4, 'Sherill', 'Beales', '2016-08-06'),
(5, 'Kenton', 'Graundisson', '2018-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `stID` int(10) NOT NULL,
  `stFirstName` varchar(50) NOT NULL,
  `stLastName` varchar(50) NOT NULL,
  `stStreetNum` int(10) NOT NULL,
  `stStreetName` varchar(50) NOT NULL,
  `stCity` varchar(100) NOT NULL,
  `stState` text NOT NULL,
  `stZip` int(10) NOT NULL,
  `stPhone` varchar(20) NOT NULL,
  `stEmail` varchar(100) NOT NULL,
  `stSSN` int(4) NOT NULL,
  `stPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`stID`, `stFirstName`, `stLastName`, `stStreetNum`, `stStreetName`, `stCity`, `stState`, `stZip`, `stPhone`, `stEmail`, `stSSN`, `stPass`) VALUES
(1, 'Jason', 'Test', 123, 'Main Street', 'Anywhere', 'CA', 956747, '916-548-7895', 'simms@lothlorien.edu', 7895, 'password'),
(2, 'Jane', 'Doe', 123, 'Hunter Drive', 'Tampa', 'FL', 89567, '212-859-6547', 'jdoe@gmail.com', 8523, 'password'),
(3, 'Frodo', 'Baggins', 1, 'Bagshot Row', 'Hobbiton', 'NZ', 138933, '202-869-4568', 'fbaggins@lothlorien.edu', 4422, 'onering');

-- --------------------------------------------------------

--
-- Table structure for table `tblwaitlist`
--

CREATE TABLE `tblwaitlist` (
  `wtID` int(10) NOT NULL,
  `wtStudentID` int(10) NOT NULL,
  `wtCourseID` int(10) NOT NULL,
  `wtDateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblavailable`
--
ALTER TABLE `tblavailable`
  ADD PRIMARY KEY (`avID`),
  ADD KEY `Course` (`avCourseID`),
  ADD KEY `Staff` (`avStaffID`);

--
-- Indexes for table `tblcourses`
--
ALTER TABLE `tblcourses`
  ADD PRIMARY KEY (`crsID`);

--
-- Indexes for table `tblenrollment`
--
ALTER TABLE `tblenrollment`
  ADD PRIMARY KEY (`enrID`),
  ADD KEY `Student` (`enrStudentID`),
  ADD KEY `Courses` (`enrCourseID`),
  ADD KEY `Instructor` (`enrStaffID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`stfID`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`stID`);

--
-- Indexes for table `tblwaitlist`
--
ALTER TABLE `tblwaitlist`
  ADD PRIMARY KEY (`wtID`),
  ADD KEY `wtStudent` (`wtStudentID`),
  ADD KEY `wtCourse` (`wtCourseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblavailable`
--
ALTER TABLE `tblavailable`
  MODIFY `avID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcourses`
--
ALTER TABLE `tblcourses`
  MODIFY `crsID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblenrollment`
--
ALTER TABLE `tblenrollment`
  MODIFY `enrID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `stfID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `stID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblwaitlist`
--
ALTER TABLE `tblwaitlist`
  MODIFY `wtID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblavailable`
--
ALTER TABLE `tblavailable`
  ADD CONSTRAINT `Course` FOREIGN KEY (`avCourseID`) REFERENCES `tblcourses` (`crsID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Staff` FOREIGN KEY (`avStaffID`) REFERENCES `tblstaff` (`stfID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblenrollment`
--
ALTER TABLE `tblenrollment`
  ADD CONSTRAINT `Courses` FOREIGN KEY (`enrCourseID`) REFERENCES `tblavailable` (`avCourseID`),
  ADD CONSTRAINT `Instructor` FOREIGN KEY (`enrStaffID`) REFERENCES `tblavailable` (`avStaffID`),
  ADD CONSTRAINT `Student` FOREIGN KEY (`enrStudentID`) REFERENCES `tblstudents` (`stID`);

--
-- Constraints for table `tblwaitlist`
--
ALTER TABLE `tblwaitlist`
  ADD CONSTRAINT `wtCourse` FOREIGN KEY (`wtCourseID`) REFERENCES `tblavailable` (`avCourseID`),
  ADD CONSTRAINT `wtStudent` FOREIGN KEY (`wtStudentID`) REFERENCES `tblstudents` (`stID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
