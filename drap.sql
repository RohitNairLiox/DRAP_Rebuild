-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 02:29 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drap`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `Uid` int(11) NOT NULL,
  `Client_ID` text NOT NULL,
  `Client_name` text NOT NULL,
  `Address` text NOT NULL,
  `Client_type` text NOT NULL,
  `Referred_by` text NOT NULL,
  `Contact` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`Uid`, `Client_ID`, `Client_name`, `Address`, `Client_type`, `Referred_by`, `Contact`, `Email`) VALUES
(1, 'RN0001', 'Rohit Nair', 'shiv sagar', 'good', 'sarath', '8149712865', 'puthenrohit@gmail.com'),
(2, 'SC0001', 'Sarath Chandran', 'asddafdadfasdsadsadsadsadsaxxacxsvWD', 'Hindu Undivided Family', 'Rohit Nair', '8149712865', 'puthenrohit@gmaiol.com'),
(3, 'SC0002', 'Sarathchandran', '108/C, Shivsagar Apt, Suyog nagar, Stella, Vasai(W) - 401202', 'type 1', 'Rohit Nair', '9969520439', 'sarathvalia@gmail.com'),
(4, 'SM0001', 'Sasa More', 'adasdsadsadasdadad', 'Co-operative Credit Societies', 'Rohit Nair', '9969520439', 'asdasdd@asda.ai'),
(5, 'SS0001', 'Sobha Sarath', '108/C, Shivsagar Apt, Suyog Nagar, Stella, Vasai(W)', 'Hindu Undivided Family', 'Rohit Nair', '819712865', 'puthensobha@gmail.com'),
(7, 'VF001', 'Vanessa', 'Shiv samarth Apt, Stella, Vasai(E)', 'Hindu Undivided Family', 'Rohit Nair', '9969520439', 'van@aa.in');

-- --------------------------------------------------------

--
-- Table structure for table `daily_report`
--

CREATE TABLE `daily_report` (
  `UID` int(11) NOT NULL,
  `Client_name` text NOT NULL,
  `Reporting_person` text NOT NULL,
  `Report_Content` text NOT NULL,
  `Status` text NOT NULL,
  `Reporting_Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_report`
--

INSERT INTO `daily_report` (`UID`, `Client_name`, `Reporting_person`, `Report_Content`, `Status`, `Reporting_Date`) VALUES
(1, 'Rohit Nair', 'Amit Gaud', 'Went To his office. Had a talk and explained to him that tax has to be paid. Fruitful time spend.', 'Completed', '2016-07-23'),
(2, 'Sarathchandran', 'Ravi Sir', 'Went to the court collected the papers and submitted for fresh renewal.', 'On-going', '2016-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `new_task`
--

CREATE TABLE `new_task` (
  `Uid` int(11) NOT NULL,
  `Client_ID` varchar(20) NOT NULL,
  `Client_name` text NOT NULL,
  `Task_description` text NOT NULL,
  `Specific_taskDetail` text NOT NULL,
  `Start_date` text NOT NULL,
  `Estimated_EndDate` text NOT NULL,
  `Task_type` text NOT NULL,
  `Task_Severity` text NOT NULL,
  `Extra_TaskDescription` text NOT NULL,
  `Status` text NOT NULL,
  `Taken_by` text NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_task`
--

INSERT INTO `new_task` (`Uid`, `Client_ID`, `Client_name`, `Task_description`, `Specific_taskDetail`, `Start_date`, `Estimated_EndDate`, `Task_type`, `Task_Severity`, `Extra_TaskDescription`, `Status`, `Taken_by`, `Time`) VALUES
(1, 'RN0001', 'Rohit Nair', 'MVAC', 'Returns', '12/04/16', '25/04/16', 'Indoor', 'Urgent', '', 'Completed', 'Ravi Sir', '2016-07-21 14:20:54'),
(2, 'RN0002', 'Rohit Nair', 'MVAC', 'Results', '12/04/16', '26/04/16', 'Indoor', 'Important', '', 'Completed', 'Amit Gaud', '2016-07-21 14:32:01'),
(3, 'RA001', 'Ramesh Vadiyar', 'MVAC', 'Results', '14/07/2016', '31/07/2016', 'Indoor', 'High', 'Go To High court and get the returns submitted. Please call me after completeion of work!', 'Completed', 'Ravi Sir', '2016-07-21 14:22:56'),
(4, 'RA002', 'Ragnesh Mahershi', 'MVAC', 'Results', '14/07/2016', '31/07/2016', 'Indoor', 'High', 'Go To High court and get the returns submitted. Please call me after completeion of work!', 'Completed', 'Ravi Sir', '2016-07-21 17:57:56'),
(5, 'MG001', 'Mercina Gomes', 'MVAC', 'Returns', '04/07/2016', '31/07/2016', 'Outdoor', 'Urgent', 'Get the file from the table and submit it. Please mark the task as completed.', 'Completed', 'Amit Gaud', '2016-07-21 17:51:46'),
(6, 'AM0001', 'Amurta', 'yoyo', 'Results', '29/07/2016', '27/07/2016', 'Outdoor', 'Low', 'Yeah Man', 'Taken', 'Ravi Sir', '2016-07-23 15:38:14'),
(7, 'BC0001', 'BabluContractor', 'accounts', 'assets filing', '21/07/2016', '30/07/2016', 'Indoor', 'High', 'Just look into the matter', 'Taken', 'Amit Gaud', '2016-07-23 18:52:35'),
(8, 'RV0001', 'Ramesh Vaidya', 'Returns', '0', '20/07/2016', '06/08/2016', 'Indoor', 'High', 'Ask Ramesh Vaidya to come to the Office you sit with him and get the things done. ', 'Taken', 'Amit Gaud', '2016-07-23 23:10:17'),
(9, 'RO001', 'Rohan', 'MVAC', '0', '20/07/2016', '30/07/2016', 'Indoor', 'Low', 'Kick him out of the office', 'Not Taken', 'Ravi Sir', '2016-07-21 11:48:15'),
(10, 'SU001', 'Suresh', 'MFAP', 'Returns', '20/07/2016', '06/08/2016', 'Outdoor', 'High', 'Kick him out too', 'Not Taken', 'Ravi Sir', '2016-07-20 16:11:20'),
(11, 'VK001', 'Varun Kumar', 'MVAC', 'Results', '20/07/2016', '30/07/2016', 'Outdoor', 'Urgent', 'Babu lal', 'Not Taken', 'Ravi Sir', '2016-07-20 16:12:44'),
(12, 'SA0001', 'Sarabjit', 'MVAC', 'Returns', '22/07/2016', '06/08/2016', 'Indoor', 'Urgent', 'Kill Him', 'Not Taken', 'Ravi Sir', '21/07/2016 07:32'),
(13, 'SA0002', 'Sarabjit', 'MVAC', 'Returns', '20/07/2016', '31/08/2016', 'Indoor', 'Urgent', 'Kill Him', 'Not Taken', 'Ravi Sir', '21/07/2016 07:52'),
(14, 'SA0003', 'Sarabjit', 'MVAC', 'Returns', '26/06/2016', '05/07/2016', 'Indoor', 'Urgent', 'Kill Him', 'Not Taken', 'Ravi Sir', '2016-07-21 11:26:55'),
(15, 'SA0005', 'Sarabjit', 'MVAC', 'Returns', '29/06/2016', '02/07/2016', 'Indoor', 'Urgent', 'Kill Him', 'Not Taken', 'Ravi Sir', '2016-07-21 11:28:44'),
(16, 'SA0004', 'Sarabjit1', 'MVAC', 'Returns', '28/06/2016', '13/07/2016', 'Indoor', 'Urgent', 'Kill Him', 'Not Taken', 'Ravi Sir', '2016-07-21 11:35:05'),
(17, 'SA0006', 'Sarabjit1', 'MVAC', 'Returns', '19/07/2016', '04/08/2016', 'Indoor', 'Urgent', 'Kill Him', 'Not Taken', 'Ravi Sir', '20/07/2016 01:57 pm'),
(18, 'SO0001', 'Sobha', 'MVAC', 'Returns', '22/07/2016', '05/08/2016', 'Indoor', 'High', 'Go and collect the papers', 'Completed', 'Amit Gaud', '2016-07-23 23:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Uid` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Uid`, `Name`, `Username`, `Password`, `Role`) VALUES
(1, 'Rohit Nair', 'Rohit@drap.app', 'Love2play', 'Admin'),
(2, 'Ravi Sir', 'Ravi@drap.app', 'love2work', 'DataOperator'),
(3, 'Amit Gaud', 'Amit@drap.app', 'Rohit123s', 'DataOperator');

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `session_id` text NOT NULL,
  `ip_address` text NOT NULL,
  `user_agent` text NOT NULL,
  `last_activity` text NOT NULL,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_session`
--

INSERT INTO `user_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('c95b07342b3a298bad7bf827b2226a3e', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', '1469362640', 'a:4:{s:9:"user_data";a:2:{i:0;s:13:"Amit@drap.app";i:1;s:9:"Rohit123s";}s:9:"user_name";s:9:"Amit Gaud";s:9:"user_role";s:12:"DataOperator";s:8:"userName";s:13:"Amit@drap.app";}'),
('8e7380a1f30e10af45efc315bf4a0292', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', '1469448749', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD UNIQUE KEY `Uid_2` (`Uid`);

--
-- Indexes for table `daily_report`
--
ALTER TABLE `daily_report`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `new_task`
--
ALTER TABLE `new_task`
  ADD UNIQUE KEY `Uid` (`Uid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `Uid` (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daily_report`
--
ALTER TABLE `daily_report`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `new_task`
--
ALTER TABLE `new_task`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
