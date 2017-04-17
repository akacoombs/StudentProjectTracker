-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 08:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecttracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `password`) VALUES
(1, 'akacoombs', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `newstudents`
--

CREATE TABLE `newstudents` (
  `studentId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `UWI_id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` text NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `status` text,
  `timeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newstudents`
--

INSERT INTO `newstudents` (`studentId`, `firstName`, `lastName`, `UWI_id`, `email`, `password`, `department`, `contact`, `status`, `timeCreated`) VALUES
(2, 'tim', 'coom', 0, 'tim@gmail.com', 'asshole', 'IT', '2015', NULL, '2017-04-17 16:34:39'),
(3, 'vanna ', 'peirre ', 0, 'vanna@gmail.com', 'asshole', 'computer science', '2015', NULL, '2017-04-17 16:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectId` int(11) NOT NULL,
  `projectName` varchar(50) NOT NULL,
  `courseCode` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `github` varchar(255) DEFAULT NULL,
  `upload` varchar(255) DEFAULT NULL,
  `groupMembers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectId`, `projectName`, `courseCode`, `year`, `github`, `upload`, `groupMembers`) VALUES
(1, 'Data structures ', 'info2410', 2016, NULL, NULL, 'kriste bunry');

-- --------------------------------------------------------

--
-- Table structure for table `studentprojects`
--

CREATE TABLE `studentprojects` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentprojects`
--

INSERT INTO `studentprojects` (`id`, `studentId`, `projectId`) VALUES
(1, 2, 1),
(2, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `newstudents`
--
ALTER TABLE `newstudents`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `studentprojects`
--
ALTER TABLE `studentprojects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentId` (`studentId`),
  ADD KEY `projectId` (`projectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newstudents`
--
ALTER TABLE `newstudents`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studentprojects`
--
ALTER TABLE `studentprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentprojects`
--
ALTER TABLE `studentprojects`
  ADD CONSTRAINT `studentprojects_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `projects` (`projectId`),
  ADD CONSTRAINT `studentprojects_ibfk_2` FOREIGN KEY (`studentId`) REFERENCES `newstudents` (`studentId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
