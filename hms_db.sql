-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2021 at 04:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`aid`, `aname`, `apass`) VALUES
(1, 'John Snow', 'Password'),
(2, 'James Smith', 'Password'),
(3, 'John Johnson', 'Password'),
(4, 'Robert Williams', 'Password'),
(5, 'Mary Brown', 'Password'),
(6, 'Patricia Jones', 'Password');

-- --------------------------------------------------------

--
-- Table structure for table `Bills`
--

CREATE TABLE `Bills` (
  `bid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `caid` int(11) NOT NULL,
  `date` date NOT NULL,
  `complaint` varchar(150) NOT NULL,
  `depname` varchar(50) NOT NULL,
  `diagnosis` varchar(150) NOT NULL,
  `medicine` varchar(150) NOT NULL,
  `doc_charge` int(11) NOT NULL,
  `no_days` int(11) NOT NULL,
  `room_charge` int(11) NOT NULL,
  `medicine_charge` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bills`
--

INSERT INTO `Bills` (`bid`, `pid`, `did`, `caid`, `date`, `complaint`, `depname`, `diagnosis`, `medicine`, `doc_charge`, `no_days`, `room_charge`, `medicine_charge`, `amount`) VALUES
(3, 6, 1, 1, '2021-11-14', 'Pain', 'General', 'Fractured leg', 'Panadol extra', 32, 12, 126000, 10, 1000),
(4, 5, 3, 1, '2021-11-14', 'Stomach pain', 'Audiology', 'Stop eating chocolates', 'Green tea', 12, 10, 105000, 10, 200),
(5, 6, 210, 1, '2021-11-14', 'Pain', 'Audiology', 'Laptop', 'Eye drops', 17, 0, 0, 50, 500),
(6, 1, 245, 4, '2021-11-26', 'Severe acne', 'Neurosurgery', 'Common cause of patient hitting puberty', 'Face cream', 20, 0, 0, 65, 85),
(7, 8, 223, 4, '2021-11-14', 'Extreme sensitivity to cold and/or hot items', 'Dentistry', 'Cavity in bottom left molar', 'None', 36, 0, 0, 0, 36),
(8, 28, 230, 4, '2021-12-08', 'Headache', 'General Medicine', 'Too much exposure to sun', 'None', 16, 0, 0, 0, 16),
(9, 8, 230, 4, '2021-12-08', 'Dummy pain', 'General Medicine', 'Dummy', 'Dummy', 16, 0, 0, 100, 116);

-- --------------------------------------------------------

--
-- Table structure for table `Cashier`
--

CREATE TABLE `Cashier` (
  `caid` int(11) NOT NULL,
  `caname` varchar(50) NOT NULL,
  `capass` varchar(50) NOT NULL,
  `cagender` varchar(50) NOT NULL,
  `ca_phone_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Cashier`
--

INSERT INTO `Cashier` (`caid`, `caname`, `capass`, `cagender`, `ca_phone_no`) VALUES
(1, 'Peter Petegrew', 'Password', 'Male', '4209043912'),
(3, 'Mark Barrymore', 'Password', 'Male', '3170299938'),
(4, 'Linda Carter', 'Password', 'Female', '3178290399'),
(5, 'Mary Beth', 'Password', 'Female', '3173172833'),
(6, 'Bethany Lewis', 'Password', 'Female', '3179273345');

-- --------------------------------------------------------

--
-- Table structure for table `Consults_Complaint`
--

CREATE TABLE `Consults_Complaint` (
  `cid` int(11) NOT NULL,
  `c_date` date DEFAULT NULL,
  `c_time` varchar(25) NOT NULL,
  `descr` varchar(150) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `did` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Consults_Complaint`
--

INSERT INTO `Consults_Complaint` (`cid`, `c_date`, `c_time`, `descr`, `pid`, `did`) VALUES
(10, '2021-11-14', '16:00', 'New pain', 5, 3),
(18, '2021-12-18', '10:40', 'Indigestion', 6, 230),
(19, '2021-12-18', '13:20', 'Persistent headache', 25, 230);

-- --------------------------------------------------------

--
-- Table structure for table `Decides_In_Patient`
--

CREATE TABLE `Decides_In_Patient` (
  `iid` int(11) NOT NULL,
  `descr` varchar(150) NOT NULL,
  `diagnosis` varchar(150) DEFAULT NULL,
  `medicine` varchar(150) DEFAULT NULL,
  `time_spent` int(11) DEFAULT NULL,
  `date_of_admission` date DEFAULT NULL,
  `date_of_discharge` date DEFAULT '0000-00-00',
  `pid` int(11) DEFAULT NULL,
  `did` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Decides_In_Patient`
--

INSERT INTO `Decides_In_Patient` (`iid`, `descr`, `diagnosis`, `medicine`, `time_spent`, `date_of_admission`, `date_of_discharge`, `pid`, `did`) VALUES
(2, 'Pain', 'Fractured hand', 'Panadol', 30, '2021-11-01', '2021-11-11', 5, 3),
(5, 'Headache', 'Severe sensitivity to sun', 'Tylenol', 25, '2021-12-18', '0000-00-00', 1, 230);

-- --------------------------------------------------------

--
-- Table structure for table `Decides_Out_Patient`
--

CREATE TABLE `Decides_Out_Patient` (
  `oid` int(11) NOT NULL,
  `descr` varchar(150) NOT NULL,
  `diagnosis` varchar(150) DEFAULT NULL,
  `medicine` varchar(150) DEFAULT NULL,
  `time_spent` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `did` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Decides_Out_Patient`
--

INSERT INTO `Decides_Out_Patient` (`oid`, `descr`, `diagnosis`, `medicine`, `time_spent`, `pid`, `did`) VALUES
(9, 'Stomach pain', 'Stomach virus', 'Tums extra strength', 20, 14, 230);

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dpass` varchar(50) NOT NULL,
  `dgender` varchar(50) NOT NULL,
  `since` date NOT NULL,
  `depname` varchar(50) NOT NULL,
  `d_phone_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Doctor`
--

INSERT INTO `Doctor` (`did`, `dname`, `dpass`, `dgender`, `since`, `depname`, `d_phone_no`) VALUES
(1, 'Bob Snow', 'Password', 'Male', '2000-06-15', 'General Medicine', '3170293333'),
(3, 'James Johnson', 'Password', 'Male', '2012-04-05', 'Audiology', '3176879090'),
(210, 'Mark Hill', 'Password', 'Male', '2021-11-01', 'Audiology', '3176478154'),
(212, 'Linda Brown', 'Password', 'Female', '2011-05-05', 'Anaesthesia', '3171239870'),
(213, 'David Miller', 'Password', 'Male', '2011-11-08', 'Anaesthesia', '8091281922'),
(214, 'Michael Rodriguez', 'Password', 'Male', '2013-03-24', 'Cardiology', '3177498702'),
(215, 'Michelle Hernandez', 'Password', 'Female', '2018-06-11', 'Cardiology', '3170920684'),
(216, 'Donald White', 'Password', 'Male', '2014-12-03', 'Cardiology', '3174829381'),
(217, 'Donna White', 'Password', 'Female', '2015-11-07', 'Breast Surgery', '7149023980'),
(218, 'Laura Moore', 'Password', 'Female', '2019-02-25', 'Child and Adolescent Psychiatry', '3170008925'),
(219, 'Brian Harris', 'Password', 'Male', '2015-11-10', 'Cardiovascular Surgery', '3173602738'),
(220, 'Sukrith Shetty', 'Password', 'Male', '2011-01-07', 'Cardiovascular Surgery', '3170296684'),
(221, 'Aravind Kittur', 'Password', 'Male', '2016-08-09', 'Dentistry', '3173990163'),
(222, 'Heena Lewis', 'Password', 'Female', '2015-10-15', 'Dentistry', '3173089992'),
(223, 'Gary Lewis', 'Password', 'Male', '2018-10-01', 'Dentistry', '3170388892'),
(224, 'Susan Lee', 'Password', 'Female', '2015-08-12', 'Dermatology', '3175096909'),
(225, 'Charles Xavier', 'Password', 'Male', '2021-01-08', 'ENT', '5130982375'),
(226, 'Melissa Perez', 'Password', 'Female', '2011-12-10', 'ENT', '2920193853'),
(227, 'Angela Young', 'Password', 'Female', '2019-11-08', 'ENT', '9201762986'),
(228, 'Mark Hamil', 'Password', 'Male', '2021-11-01', 'Family Medicine', '8298371901'),
(229, 'Ana Schmidt', 'Password', 'Female', '2012-07-08', 'General Medicine', '9273920991'),
(230, 'Ana Harris', 'Password', 'Female', '2013-12-21', 'General Medicine', '1739280995'),
(231, 'Jeffery David', 'Password', 'Male', '2017-04-11', 'General Medicine', '8193670110'),
(232, 'Luke Davis', 'Password', 'Male', '2021-06-01', 'General Surgery', '8201829031'),
(233, 'Luke Coutinho', 'Password', 'Male', '2018-02-28', 'General Surgery', '2710289181'),
(234, 'Scott Allen', 'Password', 'Male', '2021-11-03', 'General Surgery', '8920102810'),
(235, 'Mary Ann', 'Password', 'Female', '2015-11-02', 'General Surgery', '3019382917'),
(236, 'Babita Shetty', 'Password', 'Female', '2011-05-24', 'Gynaecological Oncology', '1029381298'),
(237, 'Larry Baker', 'Password', 'Male', '2015-09-08', 'Intensive Care Medicine', '8201829188'),
(238, 'Joshua Nelson', 'Password', 'Male', '2021-11-01', 'Intensive Care Medicine', '4042918291'),
(239, 'Andrew King', 'Password', 'Male', '2021-09-03', 'Neurology', '7200192810'),
(240, 'John Adams', 'Password', 'Male', '2021-11-01', 'Neurosurgery', '3174928392'),
(241, 'Justin Wang', 'Password', 'Male', '2016-05-18', 'Orthopaedic', '7120192839'),
(242, 'Patricia Drunder', 'Password', 'Female', '2018-01-09', 'Orthopaedic', '7201920192'),
(243, 'Amanda David', 'Password', 'Female', '2016-12-05', 'Radiology', '3170293726'),
(244, 'Justin Schmidt', 'Password', 'Male', '2013-12-30', 'Urology', '4204206809'),
(245, 'Johny Simmons', 'Password', 'Male', '2020-11-17', 'Neurosurgery', '3019203336');

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `ppass` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `weight` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`pid`, `pname`, `ppass`, `age`, `gender`, `weight`, `address`, `phone_no`) VALUES
(1, 'Peter Parker', 'Password', 23, 'Male', 183, '8241 Acton Road Indianapolis, IN 46259\r\n', '3178290031'),
(5, 'Jessica Fernandes', 'Password', 32, 'Female', 64, '5685 Abercromby Circle Indianapolis, IN 46254', '9021291002'),
(6, 'Mark Cuban', 'Password', 40, 'Male', 75, '4340 Abby Creek Lane, Indianapolis, IN 46205', '3091829112'),
(7, 'Jeremy McQuire', 'Password', 42, 'Male', 76, '2516 Abalone Drive Indianapolis, IN 46217', '8012810028'),
(8, 'Debra Green', 'Password', 37, 'Female', 69, '9354 Aberdare Drive Indianapolis, IN 46250', '3120371822'),
(9, 'Rachit Shrivastava', 'Password', 29, 'Male', 72, '9375 Aberdare Drive Indianapolis, IN 46250', '3170192719'),
(10, 'Mary Poppins', 'Password', 21, 'Female', 57, '9450 Aberdare Drive Indianapolis, IN 46250', '4092811478'),
(11, 'Sean Penn', 'Password', 63, 'Male', 87, '9493 Aberdare Drive Indianapolis, IN 46250', '3170291736'),
(12, 'Jean Krystal', 'Password', 32, 'Female', 73, '9516 Aberdare Drive Indianapolis, IN 46250', '4204729122'),
(13, 'Heather D\'Silva', 'Password', 24, 'Female', 64, '10882 Affirmed Drive Indianapolis, IN 46234\r\n', '3092839925'),
(14, 'Lewis Hamilton', 'Password', 48, 'Male', 85, '8827 Alto Way Indianapolis, IN 46231\r\n', '3179802286'),
(15, 'Amanda Baker', 'Password', 39, 'Female', 74, '54 Arlington Avenue Indianapolis, IN 46219\r\n', '7801236770'),
(16, 'Joshua Green', 'Password', 48, 'Male', 89, '105 Arsenal Avenue Indianapolis, IN 46201\r\n', '1092887391'),
(17, 'Stephanie Campbell', 'Password', 58, 'Female', 76, '2426 Arsenal Avenue Indianapolis, IN 46218\r\n', '1099283336'),
(18, 'Henry Douglas', 'Password', 28, 'Male', 82, '2974 Arthington Boulevard Indianapolis, IN 46218\r\n', '4288739995'),
(19, 'Marie Goldstein', 'Password', 32, 'Female', 62, '3941 Arthington Boulevard Indianapolis, IN 46226\r\n', '3209384429'),
(20, 'Christine Ramirez', 'Password', 30, 'Female', 70, '12729 Arvada Court Indianapolis, IN 46236\r\n', '4190293389'),
(21, 'Debra Nelson', 'Password', 23, 'Female', 60, '8059 Arvada Place Indianapolis, IN 46236', '1827309982'),
(22, 'Peggy Carter', 'Password', 34, 'Female', 69, '3824 Asbury Street Indianapolis, IN 46227\r\n', '3298390054'),
(23, 'Steve Rogers', 'Password', 49, 'Male', 93, '5725 Ashcroft Drive Indianapolis, IN 46221\r\n', '2938476651'),
(24, 'Philip Ortiz', 'Password', 40, 'Male', 80, '3845 Ashbourne Lane Indianapolis, IN 46226\r\n', '9891112837'),
(25, 'Paula Perry', 'Password', 31, 'Female', 73, '3114   Ashland Avenue Indianapolis, IN 46226\r\n', ''),
(26, 'Suparna Srinivasan', 'Password', 23, 'Female', 65, '5401 Ashurst Street Indianapolis, IN 46220\r\n', '9091827389'),
(27, 'Annie Fisher', 'Password', 41, 'Female', 80, '7228 Atmore Drive Indianapolis, IN 46217\r\n', '3178293856'),
(28, 'Betty White', 'Password', 27, 'Female', 69, '945 Atmore Place Indianapolis, IN 46217\r\n', '3892918827'),
(29, 'Mike Coleman', 'Password', 39, 'Male', 80, '605 Auburn Street Indianapolis, IN 46241\r\n', '8378298832'),
(30, 'Paul Walker', 'Password', 36, 'Male', 73, '2426 Autumn Road Indianapolis, IN 46229\r\n', '3178982374'),
(31, 'Debra Jones', 'Password', 23, 'Female', 69, '3519 Aylesford Lane Indianapolis, IN 46228\r\n', '7201928881'),
(32, 'Michael Cera', 'Password', 39, 'Male', 69, '8903 Alto Way Indianapolis, IN 46231', '1092839981'),
(33, 'John Snow', 'Password', 68, 'Male', 89, '5838 Alpine Avenue Indianapolis, IN 46224', '3920002918'),
(34, 'Jackie Shobani', 'Password', 42, 'Male', 89, '264 Arlington Avenue Indianapolis, IN 46219', '3172930091');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `Bills`
--
ALTER TABLE `Bills`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `bid` (`bid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `did` (`did`),
  ADD KEY `caid` (`caid`);

--
-- Indexes for table `Cashier`
--
ALTER TABLE `Cashier`
  ADD PRIMARY KEY (`caid`),
  ADD KEY `caid` (`caid`);

--
-- Indexes for table `Consults_Complaint`
--
ALTER TABLE `Consults_Complaint`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `Decides_In_Patient`
--
ALTER TABLE `Decides_In_Patient`
  ADD PRIMARY KEY (`iid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `Decides_Out_Patient`
--
ALTER TABLE `Decides_Out_Patient`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`did`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Bills`
--
ALTER TABLE `Bills`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Cashier`
--
ALTER TABLE `Cashier`
  MODIFY `caid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Consults_Complaint`
--
ALTER TABLE `Consults_Complaint`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Decides_In_Patient`
--
ALTER TABLE `Decides_In_Patient`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Decides_Out_Patient`
--
ALTER TABLE `Decides_Out_Patient`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Doctor`
--
ALTER TABLE `Doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bills`
--
ALTER TABLE `Bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Patient` (`pid`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`did`) REFERENCES `Doctor` (`did`),
  ADD CONSTRAINT `bills_ibfk_3` FOREIGN KEY (`caid`) REFERENCES `Cashier` (`caid`);

--
-- Constraints for table `Consults_Complaint`
--
ALTER TABLE `Consults_Complaint`
  ADD CONSTRAINT `consults_complaint_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Patient` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `consults_complaint_ibfk_2` FOREIGN KEY (`did`) REFERENCES `Doctor` (`did`) ON DELETE CASCADE;

--
-- Constraints for table `Decides_In_Patient`
--
ALTER TABLE `Decides_In_Patient`
  ADD CONSTRAINT `decides_in_patient_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Patient` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `decides_in_patient_ibfk_2` FOREIGN KEY (`did`) REFERENCES `Doctor` (`did`) ON DELETE CASCADE;

--
-- Constraints for table `Decides_Out_Patient`
--
ALTER TABLE `Decides_Out_Patient`
  ADD CONSTRAINT `decides_out_patient_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Patient` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `decides_out_patient_ibfk_2` FOREIGN KEY (`did`) REFERENCES `Doctor` (`did`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
