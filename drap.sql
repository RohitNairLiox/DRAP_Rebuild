-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 02:50 PM
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
  `ResContact` text NOT NULL,
  `OffcContact` text NOT NULL,
  `MobContact` text NOT NULL,
  `AltContact` text NOT NULL,
  `Email` text NOT NULL,
  `PAN_No` text NOT NULL,
  `ST_No` text NOT NULL,
  `VAT_No` text NOT NULL,
  `CST_No` text NOT NULL,
  `PTRC_No` text NOT NULL,
  `PTEC_No` text NOT NULL,
  `TAN_No` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`Uid`, `Client_ID`, `Client_name`, `Address`, `Client_type`, `Referred_by`, `ResContact`, `OffcContact`, `MobContact`, `AltContact`, `Email`, `PAN_No`, `ST_No`, `VAT_No`, `CST_No`, `PTRC_No`, `PTEC_No`, `TAN_No`) VALUES
(1, 'RN0001', 'Rohit Nair', 'Shivsagar-108,stella,vasai (W)', 'Individual', 'Sarath', '9999999999', '2222222222', '4444444444', '8888888888', 'puthen@gmail.com', 'ADS', 'ads', 'ads', 'ads', 'ads', 'ads', 'ads'),
(2, 'SC0001', 'Sarath Chandran', 'asddafdadfasdsadsadsadsadsaxxacxsvWD', 'Hindu Undivided Family', 'Rohit Nair', '8149712865', '', '', '', 'puthenrohit@gmaiol.com', '', '', '', '', '', '', ''),
(3, 'SC0002', 'Sarathchandran', '108/C, Shivsagar Apt, Suyog nagar, Stella, Vasai(W) - 401202', 'type 1', 'Rohit Nair', '9969520439', '', '', '', 'sarathvalia@gmail.com', '', '', '', '', '', '', ''),
(4, 'SM0001', 'Sasa More', 'adasdsadsadasdadad', 'Co-operative Credit Societies', 'Rohit Nair', '9969520439', '', '', '', 'asdasdd@asda.ai', '', '', '', '', '', '', ''),
(5, 'SS0001', 'Sobha Sarath', '108/C, Shivsagar Apt, Suyog Nagar, Stella, Vasai(W)', 'Hindu Undivided Family', 'Rohit Nair', '819712865', '', '', '', 'puthensobha@gmail.com', '', '', '', '', '', '', ''),
(7, 'VF001', 'Vanessa', 'Shiv samarth Apt, Stella, Vasai(E)', 'Hindu Undivided Family', 'Rohit Nair', '9969520439', '', '', '', 'van@aa.in', '', '', '', '', '', '', ''),
(8, 'RO0001', 'Rohjad', 'Vitalwadi, Charni Rd, Mumbai, Delhi, Agra', 'Hindu Undivided Family', 'Sarath', '3242343243', '3243465463', '3425345324', '1111111111', 'pu@in.in', '3432423', '115255', '6767', '3345654', '353654', '78765', '22445'),
(9, 'SU001', 'Suraj Chemicals', 'asdadadad', 'Private Limited Company', 'Direct', '2323422222', '1232323231', '3232321212', '2323241413', 'pu@gb.co', '1213331313313111', '243234243', '31313131', '2323123131', '233123131', '23231211', '131313'),
(10, 'vf002', 'Ramesh', '8149712865', 'Individual', 'asddsad', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865@fa.co', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865'),
(11, 'RO0002', 'Rohit Naire', '8149712865', 'Hindu Undivided Family', 'asddsad', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865@DA.GO', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865'),
(12, 'RO0006', 'Roihgit', '8149712865', 'Individual', 'Saa', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865@ga.co', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865'),
(13, 'RO0009', 'Rohit', '81497128658149712865', 'Individual', 'Rohit Nair', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865@fa.co', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '81497128658149712865', '8149712865'),
(14, 'RO0010', 'Rohit', '8149712865', 'Hindu Undivided Family', 'Rohit Nair', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865@fa.co', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865'),
(15, 'RO0012', 'Rohit Nair', '8149712865 8149712865 8149712865 8149712865', 'Individual', 'Sarath', '8149712865', '8149712865', '8149712865', '8149712865', 'puthen@da.co', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865'),
(16, 'RO0013', 'Rohit', '8149712865 8149712865 8149712865', 'Individual', 'Sarath', '8149712865', '8149712865', '8149712865', '8149712865', 'puthen@da.co', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865', '8149712865'),
(17, 'RO0100', 'Rohit Nair', '8888888888', 'Individual', 'Sarath', '8888888888', '8888888888', '8888888888', '8888888888', 'puth@da.co', '8888888888', '8888888888', '8888888888v', '8888888888', '8888888888', '8888888888', '8888888888'),
(18, 'RO0150', 'Rohit', '9999999999', 'Individual', 'saa', '9999999999', '9999999999', '9999999999', '9999999999', 'puth@ada.co', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999'),
(19, 'RO0120', 'Rohit', '9999999999', 'Limited Liability Partnership', 'saa', '9999999999', '9999999999', '9999999999', '9999999999', 'puth@ada.co', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999'),
(20, 'RO0122', 'Rohit', '9999999999', 'Hindu Undivided Family', 'saa', '9999999999', '9999999999', '9999999999', '9999999999', 'puth@ada.co', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999'),
(21, 'RO0121', 'Rohit', '9999999999', 'Partnership Firm', 'Sara', '9999999999', '9999999999', '9999999999', '9999999999', 'puth@da.co', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999', '9999999999'),
(22, 'RO0111', 'Rohit', 'ass', 'Individual', 'Sarath', '9999999999', '9999999999', '9999999999', '9999999999', 'puthenrohit@ga.com', '9999999999', '9999999999', '9999999999', 'as', 'as', 'as', 'as'),
(23, 'RO0500', 'Rohit', 'fgfgs', 'Private Limited Company', 'Sarath', '', '', '9999999999', '', 'pu@da.co', 'sdda', 'assa', 'dssd', 'fgf', 'fgfg', 'ggff', 'fgfg'),
(24, 'RO0024', 'Sarath', 'nirma house burma', 'Individual', 'Rohit Nair', '8149712865', '9999999999', '9999999999', '9999999999', 'putha@fa.co', 'ads', 'dfadfd', 'asasa', 'adfdf', 'ffsd', 'sdfd', 'dssdd');

-- --------------------------------------------------------

--
-- Table structure for table `daily_report`
--

CREATE TABLE `daily_report` (
  `UID` int(11) NOT NULL,
  `Client_ID` text NOT NULL,
  `Client_name` text NOT NULL,
  `Reporting_person` text NOT NULL,
  `Report_Content` text NOT NULL,
  `Status` text NOT NULL,
  `Reporting_Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_report`
--

INSERT INTO `daily_report` (`UID`, `Client_ID`, `Client_name`, `Reporting_person`, `Report_Content`, `Status`, `Reporting_Date`) VALUES
(1, '', 'Rohit Nair', 'Amit Gaud', 'Went To his office. Had a talk and explained to him that tax has to be paid. Fruitful time spend.', 'Completed', '2016-07-23'),
(2, '', 'Sarathchandran', 'Ravi Sir', 'Went to the court collected the papers and submitted for fresh renewal.', 'On-going', '2016-07-23'),
(3, 'Vanessa', 'VF001', 'Amit Gaud', 'Went and met her', 'On-going', '2016-09-04'),
(4, 'VF001', 'Vanessa', 'Amit Gaud', 'Will talk to her again\r\n', 'On-going', '2016-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `new_task`
--

CREATE TABLE `new_task` (
  `Uid` int(11) NOT NULL,
  `Client_ID` varchar(20) NOT NULL,
  `Client_name` text NOT NULL,
  `Financial_year` text NOT NULL,
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

INSERT INTO `new_task` (`Uid`, `Client_ID`, `Client_name`, `Financial_year`, `Task_description`, `Specific_taskDetail`, `Start_date`, `Estimated_EndDate`, `Task_type`, `Task_Severity`, `Extra_TaskDescription`, `Status`, `Taken_by`, `Time`) VALUES
(1, 'RN0001', 'Rohit Nair', '', 'MVAC', 'Returns', '12/04/16', '25/04/16', 'Indoor', 'Urgent', '', 'Completed', 'Ravi Sir', '2016-07-21 14:20:54'),
(2, 'RN0002', 'Rohit Nair', '', 'MVAC', 'Results', '12/04/16', '26/04/16', 'Indoor', 'Important', '', 'Completed', 'Amit Gaud', '2016-07-21 14:32:01'),
(3, 'RA001', 'Ramesh Vadiyar', '', 'MVAC', 'Results', '14/07/2016', '31/07/2016', 'Indoor', 'High', 'Go To High court and get the returns submitted. Please call me after completeion of work!', 'Completed', 'Ravi Sir', '2016-07-21 14:22:56'),
(4, 'RA002', 'Ragnesh Mahershi', '', 'MVAC', 'Results', '14/07/2016', '31/07/2016', 'Indoor', 'High', 'Go To High court and get the returns submitted. Please call me after completeion of work!', 'Completed', 'Ravi Sir', '2016-07-21 17:57:56'),
(5, 'MG001', 'Mercina Gomes', '', 'MVAC', 'Returns', '04/07/2016', '31/07/2016', 'Outdoor', 'Urgent', 'Get the file from the table and submit it. Please mark the task as completed.', 'Completed', 'Amit Gaud', '2016-07-21 17:51:46'),
(6, 'AM0001', 'Amurta', '', 'yoyo', 'Results', '29/07/2016', '27/07/2016', 'Outdoor', 'Low', 'Yeah Man', 'Completed', 'Ravi Sir', '2016-07-23 15:38:14'),
(7, 'RN0001', 'Rohit Nair', '2016-17', 'MAAA', 'MAAA', '16/09/2016', '29/09/2016', 'Outdoor', 'Urgent', 'MAA MAA MAA', 'Current', 'Amit Gaud', '2016-07-23 18:52:35'),
(8, 'RV0001', 'Ramesh Vaidya', '', 'Returns', '0', '20/07/2016', '06/08/2016', 'Indoor', 'High', 'Ask Ramesh Vaidya to come to the Office you sit with him and get the things done. ', 'Current', 'Amit Gaud', '2016-07-23 23:10:17'),
(9, 'RO001', 'Rohan', '', 'MVAC', '0', '20/07/2016', '30/07/2016', 'Indoor', 'Low', 'Kick him out of the office', 'Current', 'Ravi Sir', '2016-07-21 11:48:15'),
(10, 'SU001', 'Suresh', '', 'MFAP', 'Returns', '20/07/2016', '06/08/2016', 'Outdoor', 'High', 'Kick him out too', 'Completed', 'Ravi Sir', '2016-07-20 16:11:20'),
(11, 'VK001', 'Varun Kumar', '', 'MVAC', 'Results', '20/07/2016', '30/07/2016', 'Outdoor', 'Urgent', 'Babu lal', 'Current', 'Ravi Sir', '2016-07-20 16:12:44'),
(12, 'SA0001', 'Sarabjit', '', 'MVAC', 'Returns', '22/07/2016', '06/08/2016', 'Indoor', 'Urgent', 'Kill Him', 'Current', 'Ravi Sir', '21/07/2016 07:32'),
(13, 'SA0002', 'Sarabjit', '', 'MVAC', 'Returns', '20/07/2016', '31/08/2016', 'Indoor', 'Urgent', 'Kill Him', 'Current', 'Ravi Sir', '21/07/2016 07:52'),
(14, 'SA0003', 'Sarabjit', '', 'MVAC', 'Returns', '26/06/2016', '05/07/2016', 'Indoor', 'Urgent', 'Kill Him', 'Current', 'Ravi Sir', '2016-07-21 11:26:55'),
(15, 'SA0005', 'Sarabjit', '', 'MVAC', 'Returns', '29/06/2016', '02/07/2016', 'Indoor', 'Urgent', 'Kill Him', 'Current', 'Ravi Sir', '2016-07-21 11:28:44'),
(16, 'SA0004', 'Sarabjit1', '', 'MVAC', 'Returns', '28/06/2016', '13/07/2016', 'Indoor', 'Urgent', 'Kill Him', 'Current', 'Ravi Sir', '2016-07-21 11:35:05'),
(17, 'SA0006', 'Sarabjit1', '', 'MVAC', 'Returns', '19/07/2016', '04/08/2016', 'Indoor', 'Urgent', 'Kill Him', 'Current', 'Ravi Sir', '20/07/2016 01:57 pm'),
(18, 'SO0001', 'Sobha', '', 'MVAC', 'Returns', '22/07/2016', '05/08/2016', 'Indoor', 'High', 'Go and collect the papers', 'Completed', 'Amit Gaud', '2016-07-23 23:11:09'),
(19, '0', 'Rohit Nair', '', 'MVAC', '', '15/09/2016', '30/09/2016', 'Indoor', 'High', 'Just get the returns filled and report', 'Completed', '', '02/09/2016 06:46 am'),
(20, '0', 'Sarath Chandran-Sarath Chandran', '', 'asdasd', 'adasd', '02/09/2016', '19/09/2016', 'Indoor', 'High', '', 'Completed', '', '02/09/2016 07:13 am'),
(21, '0', 'Sarath Chandran-SC0001', '', 'asdsad', 'asdsad', '07/09/2016', '12/09/2016', 'Outdoor', 'Urgent', '', 'Completed', '', '02/09/2016 07:14 am'),
(22, 'RN0001', 'Rohit Nair-RN0001', '', 'asdsasd', 'assaas', '09/09/2016', '27/09/2016', 'Indoor', 'Low', 'asdsadasd', 'Current', '', '02/09/2016 07:21 am'),
(23, 'SS0001', 'Sobha Sarath', '', 'aaaaa', 'aaa', '21/09/2016', '28/09/2016', 'Indoor', 'High', 'adsdsdsda', 'Current', '', '02/09/2016 07:22 am'),
(24, 'VF001', 'Vanessa', '', 'MVAC', 'Asset filing', '15/09/2016', '08/10/2016', 'Indoor', 'Urgent', 'went to office got my friends hardwares on', 'Completed', '', '04/09/2016 01:32 pm'),
(25, 'RN0001', 'Rohit Nair', '', 'MVAC', 'Returns', '25/09/2016', '29/09/2016', 'Outdoor', 'High', 'Blah Blah Blah', 'Completed', '', '04/09/2016 02:54 pm'),
(26, 'SC0001', 'Sarath Chandran', '2016-17', 'Mva', 'aa', '15/09/2016', '08/10/2016', 'Indoor', 'Urgent', 'Yo Yo ', 'Current', '', '26/09/2016 10:13 am');

-- --------------------------------------------------------

--
-- Table structure for table `task_report`
--

CREATE TABLE `task_report` (
  `Uid` int(11) NOT NULL,
  `Task_Uid` text NOT NULL,
  `Reported_by` text NOT NULL,
  `report_content` text NOT NULL,
  `reportingTime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_report`
--

INSERT INTO `task_report` (`Uid`, `Task_Uid`, `Reported_by`, `report_content`, `reportingTime`) VALUES
(1, '0', 'Amit Gaud', '0', '2016-09-01'),
(2, '0', 'Amit Gaud', 'Rohit is doing all of this entry by himself', '2016-09-01'),
(3, '0', 'Amit Gaud', 'Ramesh is also here', '2016-09-01'),
(4, '0', 'Amit Gaud', 'Rohit is doing all this entry by himself', '2016-09-01'),
(5, '0', 'Amit Gaud', 'Rohit is doing all this entry by himself', '2016-09-01'),
(6, '0', 'Amit Gaud', 'Rohit is doing all this entry by himself', '2016-09-01'),
(7, '0', 'Amit Gaud', 'Rohit is doing all this entry by himself', '2016-09-01'),
(8, '10', 'Amit Gaud', 'Rohit is doing all this entry by himself', '2016-09-01'),
(9, '10', 'Amit Gaud', 'Rohit is doing all this entry by himself', '2016-09-01'),
(10, '10', 'Amit Gaud', 'Rohit is doing all this entry by himself', '2016-09-01'),
(11, '11', 'Amit Gaud', 'Ramesh is on the way', '2016-09-01'),
(12, '9', 'Amit Gaud', 'Rajeev was also working ', '2016-09-01'),
(13, '17', 'Amit Gaud', 'Met Rohit is doing great. Just about time to leave. so lets see u soon. I hope!', '2016-09-01'),
(14, '10', 'Amit Gaud', 'Ramesh is on the way', '2016-09-01'),
(15, '10', 'Nilesh', 'I spoke to Ramesh he said he will be free bny tommorow. Have to follow up on this one again.I spoke to Ramesh he said he will be free bny tommorow. Have to follow up on this one again\r\n\r\nI spoke to Ramesh he said he will be free bny tommorow. Have to follow up on this one again', '2016-09-01'),
(16, '10', 'Nilesh', 'Went to his office collected the paper and cumulated.', '2016-09-01'),
(17, '24', 'Amit Gaud', 'Went to court today, submitted the papers', '2016-09-04'),
(18, '6', 'Amit Gaud', 'Went to court got the papers', '2016-09-04'),
(19, '7', 'Amit Gaud', 'Went to court today', '2016-09-04'),
(20, '7', 'Amit Gaud', 'Just got his phone he wants to postpone the task till tomorrow', '2016-09-04'),
(21, '7', 'Amit Gaud', 'Went to his office today and found that there are some mistakes in the filled report', '2016-09-04'),
(22, '7', 'Amit Gaud', 'have to get back to him regarding the mismatch of numbers\r\n', '2016-09-04'),
(23, '7', 'Amit Gaud', 'Checkedd the numbers. Now all are matching going to issue it in court\r\n', '2016-09-04'),
(24, '25', 'Amit Gaud', 'Went to the court collected aall the information', '2016-09-04'),
(25, '6', 'Amit Gaud', 'Came back from the office. Meet the guy on the way back home!', '2016-09-14');

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
(2, 'Ravindra Naik CA', 'Ravi@drap.app', 'Love2work', 'Admin'),
(3, 'Amit Gaud', 'Amit@drap.app', 'Love2work', 'DataOperator'),
(5, 'Ramesh Vaidya', 'RameshV@drap.app', 'Love2work', 'DataOperator'),
(6, 'Jayan', ' Jayan@drap.app', 'Love2play', 'DataOperator'),
(7, 'Maniyan', 'Mani@drap.app', 'Love2play', 'Admin');

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
('e1a10db59ca8b56f08af9fe37e158c16', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0', '1474980603', 'a:4:{s:9:"user_data";a:2:{i:0;s:14:"Rohit@drap.app";i:1;s:9:"Love2play";}s:9:"user_name";s:10:"Rohit Nair";s:9:"user_role";s:5:"Admin";s:8:"userName";s:14:"Rohit@drap.app";}');

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
-- Indexes for table `task_report`
--
ALTER TABLE `task_report`
  ADD PRIMARY KEY (`Uid`);

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
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `daily_report`
--
ALTER TABLE `daily_report`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `new_task`
--
ALTER TABLE `new_task`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `task_report`
--
ALTER TABLE `task_report`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
