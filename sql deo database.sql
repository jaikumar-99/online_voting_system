-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 06:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `firstname` char(10) DEFAULT NULL,
  `lastname` char(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `partyname` varchar(20) DEFAULT NULL,
  `descr` varchar(100) DEFAULT NULL,
  `votes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`username`, `password`, `firstname`, `lastname`, `age`, `sex`, `partyname`, `descr`, `votes`) VALUES
('1LHI#p64^9', 'G#BTDJHFC_', 'sonakshi', 'singh', 45, 'F', 'loksatta', 'i want to change the education system', 0),
('bvJ*$aB(Q7', '@sA0xk8ElP', 'JAGAN', 'MOHAN', 42, 'M', 'YSR', 'I am a developer', 6),
('o!KHJ(txcf', 'lON2Ffm)x#', 'Pawan', 'Kalyan', 38, 'M', 'Janasena', 'i am for the people', 2),
('r)9fWm*%iB', 'B!@jl+Z0Vw', 'karan', 'kundra', 19, 'M', 'congress ', 'sabka saath, sabka vikas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `user_name` varchar(100) DEFAULT NULL,
  `user_pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`user_name`, `user_pass`) VALUES
('admin', 'election');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phoneno` bigint(11) NOT NULL,
  `aadharno` bigint(11) DEFAULT NULL,
  `sex` char(1) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `voterid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `phoneno`, `aadharno`, `sex`, `age`, `dob`, `email`, `voterid`, `password`) VALUES
('surya', 'yamini', 664654354654, 2147483647, 'F', 20, '1999-09-18', 'dbasjfbsj@gmail.com', 'JNU73$HC89', 'gP)&WtE2A1'),
('dev', 'surya', 25646464654, 545489745313213, 'M', 34, '1988-09-17', 'fbshjghfgsj@gmail.com', 'PQHj(OSWJq', 'sjXY3ASDL7'),
('sduhri', 'fsdlnflk', 1646846132, 326544698789, 'M', 18, '0009-01-08', 'kndskngfdsklng@gmail.com', '6k02c$^8q(', 'k*10^Hw2EJ'),
('GAYATHRI', 'ANAKAPALLI', 3487987598, 359894759769, 'M', 20, '9999-02-21', 'adsjfgdsju@gmail.com', '*Os0m)#pa@', '5vfoXH0nNS'),
('sanjana', 'battula', 3257847389, 358798475987, 'F', 30, '3333-12-31', 'sanjana@gmail.com', 'hL%eN^#Cd&', '2MCJs6(Fmr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
