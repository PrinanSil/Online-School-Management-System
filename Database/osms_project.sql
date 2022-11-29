-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 10:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(15) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `Type`, `Email`, `Password`, `name`) VALUES
(1, 'teacher', 'teacher.1@example.com', 'nbdcnsbv', 'Teacher 1'),
(2, 'teacher', 'teacher.2@example.com', 'efiwfhb', 'Teacher 2'),
(3, 'student', 'student1@example.com', 'vhdhsbvabvj', 'Student 1'),
(4, 'teacher', 'prinan@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'Prinan Sil'),
(5, 'library', 'lonewol@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'Prinan Sil'),
(6, 'staff', 'subho@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'Subhodeep'),
(7, 'teacher', 'try@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'Subhodeep'),
(8, 'teacher', 'try@g.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'try'),
(9, 'teacher', 't@gmail.co', 'e807f1fcf82d132f9bb018ca6738a19f', 'try1'),
(10, 'teacher', 'fasf@sdf.ads', 'e807f1fcf82d132f9bb018ca6738a19f', 'faf'),
(11, 'teacher', 'asdasd@ads.adas', 'e807f1fcf82d132f9bb018ca6738a19f', 'Prinan Sil'),
(12, 'teacher', 'abc@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'Subhodeep'),
(13, 'parent', 'a@a.co', 'e807f1fcf82d132f9bb018ca6738a19f', 'Prabal Sil'),
(14, 'teacher', 'lonewolf@g.co', 'e807f1fcf82d132f9bb018ca6738a19f', 'lone');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `section` varchar(50) NOT NULL,
  `added_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID`, `title`, `section`, `added_date`) VALUES
(1, 'Class-1', '1', '2022-11-17'),
(2, 'Class-1', ' 1, 2', '2022-11-17'),
(3, 'Class 2', ' 1, 2', '2022-11-17'),
(4, 'Class 4', ' 1, 2, 3', '2022-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`ID`, `title`) VALUES
(1, 'Section A'),
(2, 'Section B'),
(3, 'Section C');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`ID`, `title`) VALUES
(1, 'Computer Science'),
(2, 'Biology'),
(7, 'Physics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
