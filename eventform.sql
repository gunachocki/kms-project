-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 06:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventform`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `images`) VALUES
(1, '1200px-Vellore_Institute_of_Technology_seal_2017.svg.png'),
(2, 'social_default_image.png'),
(3, 'use case.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sportevent`
--

CREATE TABLE `sportevent` (
  `id` int(11) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `eventurl` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `eventdate` date NOT NULL,
  `eventtime` time NOT NULL,
  `place` varchar(100) NOT NULL,
  `eventdescription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sportevent`
--

INSERT INTO `sportevent` (`id`, `eventname`, `eventurl`, `mail`, `eventdate`, `eventtime`, `place`, `eventdescription`) VALUES
(22, 'abc', 'https://www.google.com', 'maran.a2018@vitstudent.ac.in', '2021-05-20', '12:31:00', 'vellore', 'Tell about the event');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userpassword` text NOT NULL,
  `creationtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `userpassword`, `creationtime`) VALUES
(7, '18MIS0364', 'maran.a2018@vitstudent.ac.in', '54b709c250994ee773f448aab0cc75cc', '2021-05-03 06:57:42'),
(8, '18MIS0350', 'gunalan.d2018@vitstudent.ac.in', 'f7f966045aee0b2ee5e78340264c499a', '2021-06-03 07:30:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportevent`
--
ALTER TABLE `sportevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sportevent`
--
ALTER TABLE `sportevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
