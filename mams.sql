-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 05:36 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gender`, `age`, `contact`, `address`, `email`, `password`) VALUES
(11, 'sukhwinder', 'male', 21, 9779305547, 'sjakhbchjasbckj', 'mams@g.com', 'mams');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `hid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `did` int(11) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `contact`, `message`) VALUES
(1, 'sukhwinder', 'singh', 'sukh@gmail.com', 8263232372, 'jkhbdvs'),
(2, 'sukhw', 'ubxj', 'kjbxch@ljcvh.com', 8271637862, 'jsbcyvjkbwqejkb'),
(3, 'sukhwinder', 'singh', 'sukh@gmail.com', 8263232372, 'mjkhvxzckjbakscbkasbc'),
(4, 'sukhwinder', 'singh', 'sukh@gmail.com', 8263232372, 'luigyauscbkjasb'),
(5, 'sukhwinder', 'singh', 'hare@gmail.com', 8263232372, 'luiysvdcjxsahvsa'),
(6, 'sukhwinder', 'singh', 'hare@gmail.com', 8263232372, 'kjhvdscdbjsa');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `experience` int(11) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` bigint(20) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `hid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `qualification`, `experience`, `contact`, `email`, `password`, `speciality`, `hid`) VALUES
(111, 'hitesh gurjar', 'DM(Cardiology)', 6, 9043282819, 'hitesh12@gmail.com', 0, 'cardiology', 1111),
(112, 'Manmeet SIngh', 'DM(Cardiology)', 3, 8922211345, 'manmeets@gmail.com', 0, 'cardiology', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `city`, `pincode`, `contact`, `email`) VALUES
(1111, 'IVY NAWASHAHR', 'NAWASHAHR', 160071, 7508702020, 'info@ivyhospital.com'),
(1112, 'IVY HOSHIARPUR', 'HOSHIARPUR', 146001, 882237633, 'info@ivyhospital.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rand` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `age`, `contact`, `address`, `email`, `password`, `status`, `rand`) VALUES
(11111, 'Sukhwinder Singh', 'male', 21, 974515451, 'oubscibscsakcnbjq', 'mams@g.com', '7215ee9c7d9dc229d2921a40e899ec5f', 'approved', 1490177621),
(11112, 'parminder', 'male', 21, 983276729, 'oubscibscsakcnbjq', 'parm@g.com', '7215ee9c7d9dc229d2921a40e899ec5f', 'disapproved', 327585819);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `contact_2` (`contact`,`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
