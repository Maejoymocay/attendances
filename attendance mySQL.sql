-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 01:41 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_ID` int(11) NOT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `Subject_Code` varchar(20) DEFAULT NULL,
  `Semester` varchar(20) DEFAULT NULL,
  `Academic_Year` char(9) DEFAULT NULL,
  `Schedule_Day` varchar(20) DEFAULT NULL,
  `Schedule_Time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_ID`, `Section`, `Subject_Code`, `Semester`, `Academic_Year`, `Schedule_Day`, `Schedule_Time`) VALUES
(6, 'BSIT 3Ab', 'Filipino', 'First Semester', '2222', 'MWF', '2:00am-2:00pm'),
(7, 'bse-tle', 'Filipino 11', 'Second Semester', '2009', 'lunes', '3:00'),
(8, 'marawi', 'Filipino', 'First Semester', '2019', 'monday', '2:00am-2:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` varchar(20) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Middle_Initial` char(1) DEFAULT NULL,
  `Name_Extension` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `First_Name`, `Last_Name`, `Middle_Initial`, `Name_Extension`) VALUES
('0909', 'RDpawn', 'Reid', 'q', 'II'),
('11111111', 'Julie', 'Dumon', '-', 's'),
('606888', 'Kenna Lou', 'Eseos', 'A', 'q'),
('6676778', 'James', 'Eseos', 'y', '-'),
('877888887', 'Rupert', 'Dumon', 'q', 'II');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `number` int(15) NOT NULL,
  `Student_ID` varchar(20) DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`number`, `Student_ID`, `Class_ID`) VALUES
(12, '11111111', 7),
(13, '606888', 6),
(14, '0909', 6),
(17, '0909', 8),
(18, '877888887', 6),
(19, '6676778', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_Code` varchar(20) NOT NULL,
  `Subject_Title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_Code`, `Subject_Title`) VALUES
('Filipino', 'History'),
('Filipino 11', 'pinoy'),
('IT0000', 'Programming'),
('Math 10', 'Statistic');

-- --------------------------------------------------------

--
-- Table structure for table `take_attendance`
--

CREATE TABLE `take_attendance` (
  `Student_ID` varchar(20) DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL,
  `Time_Stamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_ID`),
  ADD KEY `Subject_Code` (`Subject_Code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`number`),
  ADD KEY `Student_ID` (`Student_ID`),
  ADD KEY `Class_ID` (`Class_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_Code`);

--
-- Indexes for table `take_attendance`
--
ALTER TABLE `take_attendance`
  ADD KEY `Student_ID` (`Student_ID`),
  ADD KEY `Class_ID` (`Class_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `number` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`Subject_Code`) REFERENCES `subject` (`Subject_Code`);

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
  ADD CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`),
  ADD CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`Class_ID`) REFERENCES `class` (`Class_ID`);

--
-- Constraints for table `take_attendance`
--
ALTER TABLE `take_attendance`
  ADD CONSTRAINT `take_attendance_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`),
  ADD CONSTRAINT `take_attendance_ibfk_2` FOREIGN KEY (`Class_ID`) REFERENCES `class` (`Class_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
