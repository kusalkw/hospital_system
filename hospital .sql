-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 06:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13
CREATE DATABASE hospital;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--



-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `did` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`did`) VALUES
('d0002'),
('d0005');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` varchar(10) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `reg_no`, `f_name`, `l_name`, `type`) VALUES
('d0001', 'reg1', 'kamal', 'Perera', 'Specialist'),
('d0002', 'reg2', 'Anura', 'Kumara', 'Consultant'),
('d0003', 'reg3', 'Saman', 'Soisa', 'Ex_physiciant'),
('d0004', 'reg4', 'Amara', 'Perera', 'Specialist'),
('d0005', 'reg5', 'Supun', 'Wikrama', 'Consultant');

-- --------------------------------------------------------

--
-- Table structure for table `ex_physician`
--

CREATE TABLE `ex_physician` (
  `did` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ex_physician`
--

INSERT INTO `ex_physician` (`did`) VALUES
('d0003');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` varchar(5) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `birth_day` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `addmit_date` date NOT NULL,
  `discharge_date` date NOT NULL,
  `ward_no` varchar(5) NOT NULL,
  `did` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tele` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `f_name`, `l_name`, `nic`, `birth_day`, `address`, `addmit_date`, `discharge_date`, `ward_no`, `did`, `gender`, `tele`) VALUES
('p0001', 'Dinuka', 'Kasun', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0001', 'male', 717275722),
('p0002', 'Kusal', 'Kalhara', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0002', 'male', 717275722),
('p0003', 'Amara', 'Perera', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0003', 'male', 717275722),
('p0004', 'Namal', 'Jayasingha', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0004', 'male', 717275722),
('p0005', 'Kusum', 'Karunawathi', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0005', 'male', 717275722),
('p0006', 'Amarapala', 'Perera', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0001', 'male', 717275722),
('p0007', 'Kusuma', 'Abesingha', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0002', 'female', 717275722),
('p0008', 'Ruwan', 'Perera', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0003', 'male', 717275722),
('p0009', 'Anupama', 'Kumara', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0004', 'male', 717275722),
('p0010', 'Kumudu', 'Perera', '952641514v', '1995-09-20', 'Piliyandala', '2017-03-02', '2017-03-05', 'w0001', 'd0005', 'male', 717275722);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(10) NOT NULL,
  `result` varchar(100) NOT NULL,
  `test _id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `result`, `test _id`) VALUES
(3, 'good1', 't0001'),
(4, 'good2', 't0002'),
(5, 'good3', 't0003'),
(6, 'good4', 't0004'),
(7, 'good5', 't0005'),
(8, 'good6', 't0006'),
(9, 'good7', 't0007'),
(10, 'good8', 't0008'),
(11, 'good9', 't0009'),
(12, 'good10', 't0010');

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `did` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`did`) VALUES
('d0001'),
('d0004');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` varchar(10) NOT NULL,
  `test_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`) VALUES
('t0001', 'test1'),
('t0002', 'test2'),
('t0003', 'test3'),
('t0004', 'test4'),
('t0005', 'test5'),
('t0006', 'test6'),
('t0007', 'test7'),
('t0008', 'test8'),
('t0009', 'test9'),
('t0010', 'test10');

-- --------------------------------------------------------

--
-- Table structure for table `undergo`
--

CREATE TABLE `undergo` (
  `test _id` varchar(5) NOT NULL,
  `pid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undergo`
--

INSERT INTO `undergo` (`test _id`, `pid`) VALUES
('1', ''),
('t0001', 'p0001'),
('t0002', 'p0001'),
('t0014', 'p0002'),
('t0015', 'p0004');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `user_id` varchar(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `tele` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`user_id`, `password`, `type`, `f_name`, `l_name`, `nic`, `tele`, `email`) VALUES
('u0001', '123', 'admin', 'Dinuka', 'Kasun', '952641514v', 717275722, 'dinuka.kasunds@gmail.com'),
('u0002', '123', 'doctor', 'Kusal', 'Kalhara', '952641514v', 717275722, 'dinuka.kasunds@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `ward_no` varchar(5) NOT NULL,
  `ward_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`ward_no`, `ward_name`) VALUES
('w0001', 'ward1'),
('w0002', 'ward2'),
('w0003', 'ward3'),
('w0004', 'ward4'),
('w0005', 'ward5'),
('w0006', 'ward6'),
('w0007', 'ward7'),
('w0008', 'ward8'),
('w0009', 'ward9'),
('w0010', 'ward10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `ex_physician`
--
ALTER TABLE `ex_physician`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `undergo`
--
ALTER TABLE `undergo`
  ADD PRIMARY KEY (`test _id`,`pid`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`ward_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
