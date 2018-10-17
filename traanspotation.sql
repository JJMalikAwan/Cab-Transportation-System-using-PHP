-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 07:43 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traanspotation`
--

-- --------------------------------------------------------

--
-- Table structure for table `alloat`
--

CREATE TABLE `alloat` (
  `g_id` int(11) NOT NULL,
  `guest_name` varchar(30) NOT NULL,
  `guest_mob` varchar(30) NOT NULL,
  `vac_no` varchar(30) NOT NULL,
  `vac_type` varchar(30) NOT NULL,
  `from` varchar(30) NOT NULL,
  `to` varchar(30) NOT NULL,
  `dri_name` varchar(30) NOT NULL,
  `dri_mob` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alloat`
--

INSERT INTO `alloat` (`g_id`, `guest_name`, `guest_mob`, `vac_no`, `vac_type`, `from`, `to`, `dri_name`, `dri_mob`, `date`) VALUES
(1, 'sourabh', '9122430437', 'jh10ay1811', 'Car', 'Dhanbad', 'Ranchi', 'xyz', '1254789658', '2018-07-03 16:24:06'),
(2, 'Ujjal Dutta', '4589658758', 'jh10bh1214', 'Bus', 'Dhanbad', 'Bokaro', 'abc', '1254785965', '2018-07-03 17:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `availablity`
--

CREATE TABLE `availablity` (
  `id` int(11) NOT NULL,
  `vac_no` varchar(100) NOT NULL,
  `total_seat` varchar(100) NOT NULL,
  `book_seat` varchar(100) NOT NULL,
  `vac_type` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availablity`
--

INSERT INTO `availablity` (`id`, `vac_no`, `total_seat`, `book_seat`, `vac_type`, `date`) VALUES
(1, 'jh10 ay 1811', '100', '20', 'Bus', '2018-07-03 12:51:46'),
(2, 'JH10 BH 1245 ', '50', '10', 'Van', '2018-07-03 12:51:46'),
(3, 'JH10 AZ 1212', '10', '2', 'Car', '2018-07-03 12:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(11) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `assign_to` varchar(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `wno` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `vname`, `vtype`, `assign_to`, `dname`, `mobile`, `wno`, `email`, `date`) VALUES
(1, '2568', 'bus', 'jkk', 'hjbg', '6589665889', '5689658963', 'shrutimishra.maxted@gmail.com', '2018-07-03 08:30:25'),
(2, 'jh101997', 'car', 'sourabh', 'xyz', '9122430437', '9122430437', 's@g,com', '2018-07-03 12:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `vac_no` varchar(30) NOT NULL,
  `vac_type` varchar(30) NOT NULL,
  `to` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `vac_no`, `vac_type`, `to`, `from`, `date`) VALUES
(1, 'jh10ay1811', 'Bus', 'Dhanbad', 'Bokaro', '2018-07-03 13:22:03'),
(2, 'jh10ay1811', 'Bus', 'Dhanbad', 'Ranchi', '2018-07-03 13:23:07'),
(4, 'jh10bh1214', 'Car', 'Dhanbad', 'Kolkata', '2018-07-03 13:40:47'),
(5, 'jh10ax2214', 'Van', 'Dhanbad', 'Bihar', '2018-07-03 13:40:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alloat`
--
ALTER TABLE `alloat`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `availablity`
--
ALTER TABLE `availablity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alloat`
--
ALTER TABLE `alloat`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `availablity`
--
ALTER TABLE `availablity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
