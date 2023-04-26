-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 03:38 PM
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
('WRK123', 'NOT CAME FOR WORK', 'JERIN', 'jer@gmail.com'),
('101', 'ggg', 'Annet', 'thaikkadanasish1998@'),
('1', 'not efficient', 'Annet', 'thaikkadanasish1998@');

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
('good', 'it was good working', 'jerin', 'jer@gmail.com'),
('bad', 'ssssss', 'ASISH SABU', 'thaikkadanasish'),
('bad', 'good', 'Annet', 'thaikkadanasish'),
('bad', 'very bad', 'Annet', 'thaikkadanasish'),
('bad', 'very bad work', 'annet', 'annet@gmail.com');

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
(2, 'arjun12@gmail.com', '12345', 'worker'),
(3, 'thaikkadanasish1998@gmail.com', '2255', 'worker'),
(4, 'thaikkadanasish1998@gmail.com', 'asish@123', 'worker'),
(5, 'sara@gmail.com', '3366', 'worker'),
(6, 'laya@gmail.com', '6666', 'worker'),
(7, 'amul@123', '456', 'worker'),
(121, 'jer@gmail.com', 'jer@123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Gender` varchar(23) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Aadharno` varchar(12) NOT NULL,
  `Job` varchar(25) NOT NULL,
  `Email` bigint(25) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Address` int(50) NOT NULL,
  `District` varchar(25) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Firstname`, `Lastname`, `Gender`, `State`, `Aadharno`, `Job`, `Email`, `Mobile`, `Address`, `District`, `Pincode`, `Password`) VALUES
('amal', 'manoj', 'male', 'kerala', '888554455444', 'carpenter', 1, 2147483647, 0, 'ekm', 680751, 'amal@234'),
('yyy', 'zzzz', 'male', 'tamil nadu', '445454545454', 'carpenter', 6, 2147483647, 0, 'alp', 454144, 'xx@12345'),
('aei', 'ou', 'female', 'kerala', '898797977874', 'electrician', 7, 2147483647, 0, 'alp', 123456, 'rr@23567');

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
('ASISH', 'SABU', 'male', 'kerala', '0', 2147483647, 'THAIKKADAN HOUSE', '0', 680005, 'asish@123'),
('arjun', 'murali', 'male', 'kerala', 'arjun12@gmail.com', 2147483647, 'THAIKKADAN HOUSE', 'alp', 680005, 'arjun@123'),
('jerin', 'john', 'male', 'kerala', 'jer@gmail.com', 2147483647, 'kalarickal', 'alp', 885654, 'jerin@123'),
('kkk', 'rrr', 'male', 'kerala', 'kk@gmail.com', 2147483647, 'kottayam', 'tcr', 416541, 'kk@123777'),
('leo', 'thomas', 'male', 'kerala', 'leo@gmail.com', 2147483647, 'kasargode', 'tcr', 111111, 'Leo@12345'),
('ASISH', 'SABU', 'male', 'kerala', 'thaikkadanasish1998@gmail', 2147483647, 'THAIKKADAN HOUSE', 'tcr', 680005, 'annet@234'),
('xxx', 'yyy', 'female', 'kerala', 'xxx@gmail.com', 2147483647, 'fort cochin', 'ekm', 565454, 'xx@123456');

-- --------------------------------------------------------

--
-- Table structure for table `workerbooking`
--

CREATE TABLE `workerbooking` (
  `workerid` int(15) DEFAULT NULL,
  `date` date NOT NULL,
  `duration` datetime NOT NULL,
  `salary` int(11) NOT NULL,
  `bookingid` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workerbooking`
--

INSERT INTO `workerbooking` (`workerid`, `date`, `duration`, `salary`, `bookingid`) VALUES
(123, '2022-02-05', '0000-00-00 00:00:00', 120000, NULL),
(101, '2022-02-19', '0000-00-00 00:00:00', 120000, NULL),
(101, '2022-02-09', '2022-02-09 10:25:36', 8500, 100021),
(101, '2022-02-04', '0000-00-00 00:00:00', 12300, 1),
(121, '2022-02-11', '0000-00-00 00:00:00', 6666, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Email` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
