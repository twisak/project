-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 05:31 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_document`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_login`
--

CREATE TABLE `account_login` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `position_id` varchar(20) NOT NULL COMMENT 'รหัสตำแหน่ง',
  `username` varchar(50) DEFAULT NULL COMMENT 'username',
  `password` varchar(50) DEFAULT NULL COMMENT 'pass',
  `position` varchar(20) DEFAULT NULL COMMENT 'ตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_login`
--

INSERT INTO `account_login` (`id`, `position_id`, `username`, `password`, `position`) VALUES
(1, '', '594407088', '123456', 'staff'),
(2, '', '594407058', '123456', 'admin'),
(14, 'PS001', 'ma', '123', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contract`
--

CREATE TABLE `tb_contract` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `doc_id` int(11) DEFAULT NULL COMMENT 'รหัสเอกสารจ้างเหมาบริการ	',
  `str_date` int(11) DEFAULT NULL COMMENT 'วันที่เริ่มต้น',
  `stp_date` int(11) DEFAULT NULL COMMENT 'วันที่สิ้นสุด',
  `project_id` int(11) DEFAULT NULL COMMENT 'รหัสโครงการ',
  `person_id` int(11) DEFAULT NULL COMMENT 'รหัสบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_debt`
--

CREATE TABLE `tb_debt` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `doc_id` int(11) DEFAULT NULL COMMENT 'รหัสเอกสารล้างหนี้	',
  `str_date` date DEFAULT NULL COMMENT 'วันที่เริ่มต้น',
  `stp_date` date DEFAULT NULL COMMENT 'วันที่สิ้นสุด',
  `project_id` int(11) DEFAULT NULL COMMENT 'รหัสโครงการ',
  `person_id` int(11) DEFAULT NULL COMMENT 'รหัสบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lend`
--

CREATE TABLE `tb_lend` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `doc_id` int(11) DEFAULT NULL COMMENT 'รหัสเอกสารสัญญาเงินยืม	',
  `str_date` date DEFAULT NULL COMMENT 'วันที่เริ่มต้น',
  `stp_date` date DEFAULT NULL COMMENT 'วันที่สิ้นสุด',
  `project_id` int(11) DEFAULT NULL COMMENT 'รหัสโครงการ',
  `person_id` int(11) DEFAULT NULL COMMENT 'รหัสบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_note`
--

CREATE TABLE `tb_note` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `doc_id` int(11) DEFAULT NULL COMMENT 'รหัสเอกสาร',
  `project_id` int(11) DEFAULT NULL COMMENT 'รหัสโครงการ',
  `person_id` int(11) DEFAULT NULL COMMENT 'รหัสบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `id` int(11) NOT NULL COMMENT 'ออโต้',
  `prefix` varchar(20) NOT NULL COMMENT 'คำนำหน้า',
  `firtname` varchar(30) DEFAULT NULL COMMENT 'ชื่อ',
  `lastname` varchar(30) DEFAULT NULL COMMENT 'นามสกุล',
  `idcard` varchar(13) NOT NULL COMMENT 'บัตรประชาชน',
  `address` varchar(50) DEFAULT NULL COMMENT 'ที่อยู่',
  `position_id` varchar(11) DEFAULT NULL COMMENT 'รหัสตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_person`
--

INSERT INTO `tb_person` (`id`, `prefix`, `firtname`, `lastname`, `idcard`, `address`, `position_id`) VALUES
(12, 'ศาสตราจารย์', 'มามะ', 'การี', '1234567891234', '2410/88', 'PS001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `position_id` int(11) DEFAULT NULL COMMENT 'รหัสตำแหน่ง',
  `position_name` varchar(30) DEFAULT NULL COMMENT 'ตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `project_id` int(11) DEFAULT NULL COMMENT 'รหัสโครงการ',
  `type_money` text DEFAULT NULL COMMENT 'ประเภทงบประมาณ',
  `product` text DEFAULT NULL COMMENT 'ผลผลิต',
  `mission` text DEFAULT NULL COMMENT 'พันธกิจ',
  `strategic` text DEFAULT NULL COMMENT 'ยทธศาสตร์',
  `reason` text DEFAULT NULL COMMENT 'หลักการและเหตุผล',
  `project_name` text NOT NULL COMMENT 'ชื่อโครงการ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_salary`
--

CREATE TABLE `tb_salary` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `doc_id` int(11) DEFAULT NULL COMMENT 'รหัสเอกสารเงินเดือน',
  `str_date` date DEFAULT NULL COMMENT 'วันที่เริ่มต้น',
  `stp_date` date DEFAULT NULL COMMENT 'วันที่สิ้นสุด',
  `project_id` int(11) DEFAULT NULL COMMENT 'รหัสโครงการ',
  `person_id` int(11) DEFAULT NULL COMMENT 'รหัสบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_school`
--

CREATE TABLE `tb_school` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `school_id` int(11) DEFAULT NULL COMMENT 'รหัสโรงเรียน/สถานที่',
  `school_name` text DEFAULT NULL COMMENT 'ชื่อโรงเรียน/สถานที่',
  `address` varchar(100) DEFAULT NULL COMMENT 'ที่อยู่',
  `affiliation` varchar(100) DEFAULT NULL COMMENT 'สังกัด',
  `area` varchar(100) DEFAULT NULL COMMENT 'เขตพื้นที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_typedoc`
--

CREATE TABLE `tb_typedoc` (
  `id` int(11) NOT NULL COMMENT 'ออโต้ไอดี',
  `doc_id` int(11) DEFAULT NULL COMMENT 'รหัสเอกสาร',
  `doc_name` int(11) DEFAULT NULL COMMENT 'ชื่อแบบฟอร์ม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_login`
--
ALTER TABLE `account_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contract`
--
ALTER TABLE `tb_contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_debt`
--
ALTER TABLE `tb_debt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lend`
--
ALTER TABLE `tb_lend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_note`
--
ALTER TABLE `tb_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_salary`
--
ALTER TABLE `tb_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_school`
--
ALTER TABLE `tb_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_typedoc`
--
ALTER TABLE `tb_typedoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_login`
--
ALTER TABLE `account_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_contract`
--
ALTER TABLE `tb_contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_debt`
--
ALTER TABLE `tb_debt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_lend`
--
ALTER TABLE `tb_lend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_note`
--
ALTER TABLE `tb_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_person`
--
ALTER TABLE `tb_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_salary`
--
ALTER TABLE `tb_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_school`
--
ALTER TABLE `tb_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';

--
-- AUTO_INCREMENT for table `tb_typedoc`
--
ALTER TABLE `tb_typedoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ออโต้ไอดี';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
