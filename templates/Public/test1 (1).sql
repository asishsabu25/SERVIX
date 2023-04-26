-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 01:22 PM
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
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `workerid` varchar(10) NOT NULL,
  `complaints` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`workerid`, `complaints`, `name`, `email`) VALUES
('1', 'not came for work', 'annet', 'ann@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `experience` varchar(10) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`experience`, `feedback`, `name`, `email`) VALUES
('bad', 'good', 'jerin', 'jer@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `Email` varchar(25) NOT NULL,
  `newpassword` varchar(25) NOT NULL,
  `confirmpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Lid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Lid`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(130, 'jer@gmail.com', 'jer@12345', 'user'),
(131, 'leo@gmail.com', 'leo@12345', 'user'),
(132, 'thaikkadanasish1998@gmail.com', 'asish@123', 'worker'),
(133, 'sabu@gmail.com', 'Sabu@123', 'worker'),
(134, 'Shankar@gmail.com', 'shankar@1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `workerid` int(11) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Gender` varchar(23) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Aadharno` varchar(12) NOT NULL,
  `Job` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `District` varchar(25) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`workerid`, `Firstname`, `Lastname`, `Gender`, `State`, `Aadharno`, `Job`, `Email`, `Mobile`, `Address`, `District`, `Pincode`, `Password`) VALUES
(1, 'asish', 'sabu', 'male', 'kerala', '789654123666', 'carpenter', 'thaikkadanasish1998@gmail', 2147483647, 'thaikadan', 'ekm', 789654, 'asish@123'),
(2, 'sabu', 'john', 'male', 'kerala', '852145962853', 'carpenter', '0', 2147483647, 'ayodhya ', 'ekm', 989898, 'Sabu@123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `address` text NOT NULL,
  `District` varchar(15) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Firstname`, `Lastname`, `Gender`, `State`, `Email`, `Mobile`, `address`, `District`, `Pincode`, `Password`) VALUES
('jerin ', 'john', 'male', 'kerala', 'jer@gmail.com', 2147483647, 'kalarickal', 'alp', 688529, 'jer@12345'),
('leo', 'thomas', 'male', 'kerala', 'leo@gmail.com', 2147483647, 'kalarickal', 'ekm', 688578, 'leo@12345'),
('shankar', 'madhav', 'male', 'kerala', 'Shankar@gmail.com', 2147483647, 'chertala', 'alp', 454545, 'shankar@12');

-- --------------------------------------------------------

--
-- Table structure for table `workerbooking`
--

CREATE TABLE `workerbooking` (
  `workerid` int(25) NOT NULL,
  `date` date NOT NULL,
  `duration` time NOT NULL,
  `salary` int(11) NOT NULL,
  `bookingid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workerbooking`
--

INSERT INTO `workerbooking` (`workerid`, `date`, `duration`, `salary`, `bookingid`) VALUES
(1, '2022-02-10', '05:00:00', 5000, 10),
(1, '2022-02-16', '08:00:00', 800, 11),
(1, '2022-02-19', '15:09:00', 700, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`workerid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `workerbooking`
--
ALTER TABLE `workerbooking`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `workerid` (`workerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `workerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workerbooking`
--
ALTER TABLE `workerbooking`
  MODIFY `bookingid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workerbooking`
--
ALTER TABLE `workerbooking`
  ADD CONSTRAINT `workerid` FOREIGN KEY (`workerid`) REFERENCES `registration` (`workerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
