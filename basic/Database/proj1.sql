-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 06:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj1`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE `post_data` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` set('Active','Pending','Rejected','') NOT NULL DEFAULT 'Pending',
  `identity` set('Show','Hidden','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_data`
--

INSERT INTO `post_data` (`postid`, `userid`, `title`, `message`, `date`, `status`, `identity`) VALUES
(1, 2, 'Title', 'Lorem Ipsum<br>', '2018-04-10', 'Active', 'Show'),
(2, 2, 'Title1', 'Lorem Ipsum1', '2018-04-10', 'Active', 'Show'),
(3, 2, 'Title2', 'lorem Ipsum2', '2018-04-10', 'Pending', 'Show'),
(4, 2, 'adc', 'ss', '2018-04-10', 'Pending', 'Show'),
(5, 3, 'Vik', 'aad', '2018-04-10', 'Active', 'Hidden'),
(6, 3, 'unanonymous', 'aaaaaaa', '2018-04-10', 'Active', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `valid_users`
--

CREATE TABLE `valid_users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` set('user','admin','','') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `valid_users`
--

INSERT INTO `valid_users` (`userid`, `username`, `email`, `password`, `role`) VALUES
(1, 'deva', 'dev@gmail.com', '962012d09b8170d912f0669f6d7d9d07', 'admin'),
(2, 'isha', 'isha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(3, 'vik', 'vik@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(4, 'leena', 'leena@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_data`
--
ALTER TABLE `post_data`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `valid_users`
--
ALTER TABLE `valid_users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_data`
--
ALTER TABLE `post_data`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `valid_users`
--
ALTER TABLE `valid_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
