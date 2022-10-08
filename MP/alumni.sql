-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 06:05 PM
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
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `a_username` varchar(20) NOT NULL,
  `a_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_username`, `a_pass`) VALUES
(1, 'becky', '1314'),
(2, 'tzen', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `annoucement`
--

CREATE TABLE `annoucement` (
  `ann_id` int(4) NOT NULL,
  `ann_topic` varchar(255) NOT NULL,
  `ann_pic` varchar(255) NOT NULL,
  `ann_date` varchar(60) NOT NULL,
  `ann_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annoucement`
--

INSERT INTO `annoucement` (`ann_id`, `ann_topic`, `ann_pic`, `ann_date`, `ann_description`) VALUES
(1, 'Job Recruitment', 'Tzzn', '21/05/18 07:12:01', ''),
(2, 'Car Let Go', 'Ammi ZUl', '21/05/18 07:33:18', 'New Axia, 2017 Production. If interested please contact me. 0125314798 '),
(3, 'HALO', 'BECKY', '21/05/18 10:45:18', 'HELLO WORLD!');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(4) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_type` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_venue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `finance_id` int(4) NOT NULL,
  `member_id` int(11) NOT NULL,
  `finance_date` date NOT NULL,
  `finance_type` varchar(65) NOT NULL,
  `finance_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`finance_id`, `member_id`, `finance_date`, `finance_type`, `finance_amount`) VALUES
(1, 1, '2018-05-20', 'Membership Fee', 600),
(2, 3, '2018-05-21', 'Cash Donation', 100),
(3, 2, '2018-05-16', 'Expenses', 500),
(5, 1, '2018-05-15', 'Expenses', 250),
(8, 1, '2018-05-10', 'Membership Fee', 100),
(12, 1, '2018-05-09', 'Cash Donation', 100),
(13, 1, '2018-05-10', 'Membership Fee', 500);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(11) NOT NULL,
  `forum_name` varchar(100) NOT NULL,
  `forum_description` varchar(255) NOT NULL,
  `forum_author` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `forum_name`, `forum_description`, `forum_author`, `date`) VALUES
(1, 'web design', '', '', ''),
(2, '', '', '', '19-05-2018'),
(3, '', '', '', '19-05-2018'),
(4, 'abcd', 'hi this', 'blah blah', '291283'),
(5, 'sdad', 'dasd', '', ''),
(6, 'asds', 'adsfdg', '', '2018-05-20 '),
(7, 'adsfd', 'aDSF', '', '2018-05-20 05:49:22pm'),
(8, 'adsfd', 'aDSF', '', '2018-05-20 05:51:12pm'),
(9, 'PLAYING FACEBOOK', 'U BAD BAD', 'Hew Chin Hui', '2018-05-20 05:53:41pm'),
(10, 'tzzn', 'OMG', 'bbbb', '2018-05-21 04:39:02pm');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(150) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_body` text NOT NULL,
  `post_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`post_id`, `post_title`, `post_author`, `post_body`, `post_time`) VALUES
(5, 'abcd', 'hew', 'asfsdgdg', '234'),
(6, 'PLAYING FACEBOOK', 'HEW', 'asdad', '2018-05-20 07:25:33pm'),
(7, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 07:25:42pm'),
(8, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 07:54:56pm'),
(9, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 07:56:27pm'),
(10, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 07:57:24pm'),
(11, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 07:57:59pm'),
(12, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 07:59:26pm'),
(13, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:00:43pm'),
(14, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:01:28pm'),
(15, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:01:35pm'),
(16, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:01:53pm'),
(17, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:02:09pm'),
(18, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:02:36pm'),
(19, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:03:35pm'),
(20, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:04:03pm'),
(21, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 08:11:12pm'),
(22, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:36:10pm'),
(23, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:37:19pm'),
(24, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:38:16pm'),
(25, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:38:35pm'),
(26, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:39:14pm'),
(27, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:39:53pm'),
(28, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:45:20pm'),
(29, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:45:31pm'),
(30, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:47:46pm'),
(31, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:48:03pm'),
(32, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:48:10pm'),
(33, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:48:50pm'),
(34, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:49:11pm'),
(35, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:49:41pm'),
(36, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:49:49pm'),
(37, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:50:05pm'),
(38, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:50:23pm'),
(39, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:51:05pm'),
(40, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:51:32pm'),
(41, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:51:59pm'),
(42, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:52:12pm'),
(43, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:52:21pm'),
(44, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:52:57pm'),
(45, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:55:24pm'),
(46, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:55:49pm'),
(47, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:55:59pm'),
(48, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:57:32pm'),
(49, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:57:41pm'),
(50, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:57:47pm'),
(51, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:57:57pm'),
(52, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:58:33pm'),
(53, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:58:51pm'),
(54, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:59:04pm'),
(55, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:59:19pm'),
(56, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:59:29pm'),
(57, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 09:59:36pm'),
(58, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 10:04:00pm'),
(59, 'PLAYING FACEBOOK', 'HEW', 'asdfgh', '2018-05-20 10:07:10pm'),
(60, 'PLAYING FACEBOOK', 'KONG SHIN YEE', 'NONO THANKS SO MUCH', '2018-05-21 02:53:52pm'),
(61, 'PLAYING FACEBOOK', 'bbbb', 'hihi', '2018-05-21 04:38:09pm');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `member_status` varchar(25) NOT NULL DEFAULT 'NOT APPROVED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `username`, `password`, `firstname`, `lastname`, `member_status`) VALUES
(1, 'abcd', '1234', 'LOW', 'CHAI WEI', 'APPROVED'),
(2, 'harley', '4321', 'Legend', 'Harley', 'NOT APPROVED'),
(3, 'johnson', '9012', 'Johnson', 'Wrekers', 'NOT APPROVED'),
(4, 'sdf', '1234`', 'Sddf', 'Wdf', 'NOT APPROVED'),
(8, 'hew', '1234', 'Hew', 'Chin hui', 'NOT APPROVED'),
(9, 'asd', 'asd', 'Asd', 'Asd', 'NOT APPROVED'),
(10, 'dsa', 'dsa', 'Dsa', 'Dsa', 'NOT APPROVED'),
(11, 'sad', 'dsa', 'Dsa', 'Dsa', 'NOT APPROVED'),
(12, 'bbbb', '1234', 'Cheng ', 'Tzzn', 'NOT APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `members_info`
--

CREATE TABLE `members_info` (
  `m_ic` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `graduation_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_info`
--

INSERT INTO `members_info` (`m_ic`, `member_id`, `gender`, `DOB`, `contact_no`, `address`, `email`, `batch`, `programme`, `graduation_year`) VALUES
('960516024568', 12, 'male', '11/5/1996', 'bbbb@gmail.com', 'ump', 'bbbb@gmail.com', '2016/2017', 'BCS', '-'),
('962514894567', 1, 'female', '12/02/1996', '0125314133', 'Block c7, jalan makota, taman makota, gambang.', 'abcd@gmail.com', '2014/2015', 'BCS', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(4) NOT NULL,
  `member_id` int(4) NOT NULL,
  `pay_date` date NOT NULL,
  `typemembership` varchar(65) NOT NULL,
  `totalpayment` double NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'UNPAID'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `member_id`, `pay_date`, `typemembership`, `totalpayment`, `payment_status`) VALUES
(1, 1, '2018-05-16', 'Life membership', 600, 'PAID'),
(2, 2, '2018-05-08', 'yearly', 300, 'PAID'),
(3, 3, '2018-05-02', 'life', 600, 'UNPAID'),
(6, 1, '2018-05-03', 'life', 200, 'UNPAID'),
(8, 4, '2018-05-10', 'life', 600, 'PAID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `annoucement`
--
ALTER TABLE `annoucement`
  ADD PRIMARY KEY (`ann_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`finance_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `members_info`
--
ALTER TABLE `members_info`
  ADD PRIMARY KEY (`m_ic`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `annoucement`
--
ALTER TABLE `annoucement`
  MODIFY `ann_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `finance_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `financial`
--
ALTER TABLE `financial`
  ADD CONSTRAINT `financial_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);

--
-- Constraints for table `members_info`
--
ALTER TABLE `members_info`
  ADD CONSTRAINT `members_info_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
