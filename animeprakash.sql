-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.infinityfree.com
-- Generation Time: Apr 02, 2024 at 12:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35023484_prakash`
--

-- --------------------------------------------------------

--
-- Table structure for table `downloaddetails`
--

CREATE TABLE `downloaddetails` (
  `downloadid` int(11) NOT NULL,
  `downquoteid` int(11) DEFAULT NULL,
  `downloadcount` int(11) DEFAULT NULL,
  `downuseremail` varchar(300) DEFAULT NULL,
  `downloadon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloaddetails`
--

INSERT INTO `downloaddetails` (`downloadid`, `downquoteid`, `downloadcount`, `downuseremail`, `downloadon`) VALUES
(1, 1, 2, 'animeprakash1@gmail.com', '2023-11-02 03:20:50'),
(2, 2, 1, 'pravkash2@gmail.com', '2023-12-27 04:12:43'),
(3, 0, 1, '', '2024-03-22 06:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `likedetails`
--

CREATE TABLE `likedetails` (
  `likeid` int(11) NOT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `user_email` varchar(300) DEFAULT NULL,
  `likeon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likedetails`
--

INSERT INTO `likedetails` (`likeid`, `quote_id`, `user_email`, `likeon`) VALUES
(4, 1, '', '2024-03-22 06:47:09'),
(5, 0, '', '2024-03-22 06:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `quotedetails`
--

CREATE TABLE `quotedetails` (
  `quoteid` int(11) NOT NULL,
  `quotetitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quotedescription` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quoteimage` blob DEFAULT NULL,
  `quoteon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quotedetails`
--

INSERT INTO `quotedetails` (`quoteid`, `quotetitle`, `quotedescription`, `quoteimage`, `quoteon`) VALUES
(1, 'Comedy Quotes', '  ', 0x4c6f676f57697a5f30323131323032335f3132353231332e706e67, '2023-11-02 03:17:23'),
(2, 'English Quotes', '  ', 0x4c6f676f57697a5f32373132323032335f3134313233352e706e67, '2023-12-27 04:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `useremail` varchar(200) DEFAULT NULL,
  `userpassword` varchar(100) DEFAULT NULL,
  `useron` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userid`, `username`, `useremail`, `userpassword`, `useron`) VALUES
(1, 'V PRAKASH', 'animeprakash1@gmail.com', 'animeprakash', '2023-11-02 02:09:25'),
(2, 'prakash', 'pravkash2@gmail.com', '123', '2023-12-27 04:11:24'),
(3, 'Shiva', 'shivaag74@gmail.com', 'Animeprakash@123', '2024-03-05 00:48:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downloaddetails`
--
ALTER TABLE `downloaddetails`
  ADD PRIMARY KEY (`downloadid`);

--
-- Indexes for table `likedetails`
--
ALTER TABLE `likedetails`
  ADD PRIMARY KEY (`likeid`);

--
-- Indexes for table `quotedetails`
--
ALTER TABLE `quotedetails`
  ADD PRIMARY KEY (`quoteid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `downloaddetails`
--
ALTER TABLE `downloaddetails`
  MODIFY `downloadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likedetails`
--
ALTER TABLE `likedetails`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quotedetails`
--
ALTER TABLE `quotedetails`
  MODIFY `quoteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
