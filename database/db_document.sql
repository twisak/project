-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 07:16 PM
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
-- Table structure for table `tb_agreement`
--

CREATE TABLE `tb_agreement` (
  `agree_id` int(20) NOT NULL COMMENT 'รหัสเอกสารสัญญาเงินยืม',
  `fomrm` varchar(110) NOT NULL COMMENT 'ชื่อเอกสารสัญญาเงินยืม',
  `Person_id` varchar(110) NOT NULL COMMENT 'รหัสบุคลากร',
  `position` varchar(110) NOT NULL COMMENT 'ตำแหน่ง',
  `str-date` date NOT NULL COMMENT 'วันเริ่มต้น',
  `stp-date` date NOT NULL COMMENT 'วันสิ้นสุด',
  `project_id` varchar(20) NOT NULL COMMENT 'ชื่อโครงการ',
  `active` varchar(110) NOT NULL COMMENT 'ชื่อกิจกรรม',
  `firstname` varchar(110) NOT NULL COMMENT 'ชื่อบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cleansing`
--

CREATE TABLE `tb_cleansing` (
  `clean_id` int(20) NOT NULL COMMENT 'รหัสเอกสารล้างหนี้',
  `clean_name` varchar(110) NOT NULL COMMENT 'ชื่อเอกสารล้างหนี้',
  `firstname` varchar(110) NOT NULL COMMENT 'ชื่อบุคลากร',
  `str-date` date NOT NULL COMMENT 'วันเริ่มต้น',
  `stp-date` date NOT NULL COMMENT 'วันสิ้นสุด',
  `project_name` varchar(200) NOT NULL COMMENT 'ชื่อโครงการ',
  `address` varchar(110) NOT NULL COMMENT 'ที่อยู่ ',
  `preson_id` varchar(20) NOT NULL COMMENT 'รหัสบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_contract`
--

CREATE TABLE `tb_contract` (
  `Con_id` int(20) NOT NULL COMMENT 'รหัสเอกสารจ้างเหมาบริการ',
  `person_id` varchar(20) NOT NULL COMMENT 'รหัสบุคลากร',
  `prosition_id` varchar(20) NOT NULL COMMENT 'รหัสตำแหน่ง',
  `project_name` varchar(200) NOT NULL COMMENT 'ชื่อโครงการ',
  `active` varchar(110) NOT NULL COMMENT 'ชื่อโครงการ',
  `str-date` date NOT NULL COMMENT 'วันเริ่มต้น',
  `stp-date` date NOT NULL COMMENT 'วันสิ้นสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ document`
--

CREATE TABLE `tb_ document` (
  `documen_id` int(20) NOT NULL COMMENT 'รหัสแบบฟอร์มเอกสาร',
  `document_name` varchar(50) NOT NULL COMMENT 'ชื่อแบบฟอร์มเอกสาร',
  `person_id` varchar(20) NOT NULL COMMENT 'รหัสบุคลากร',
  `firstname` varchar(110) NOT NULL COMMENT 'ชื่อบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_note`
--

CREATE TABLE `tb_note` (
  `note_id` int(20) NOT NULL COMMENT 'รหัสเอกสารบันทึกข้อความอื่นๆ',
  `firstname` varchar(110) NOT NULL COMMENT 'ชื่อบุคลากร',
  `project_name` varchar(200) NOT NULL COMMENT 'ชื่อโครงการ',
  `active` varchar(110) NOT NULL COMMENT 'ชื่อกิจกรรม',
  `position` varchar(110) NOT NULL COMMENT 'ตำแหน่ง',
  `project_id` varchar(20) NOT NULL COMMENT 'รหัสโครงการ',
  `preso_id` varchar(20) NOT NULL COMMENT 'รหัสบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_personnel`
--

CREATE TABLE `tb_personnel` (
  `person_id` int(10) DEFAULT NULL COMMENT 'รหัสบุคลากร',
  `prefix` varchar(20) NOT NULL COMMENT 'คำนำหน้า',
  `firstname` varchar(110) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(110) NOT NULL COMMENT 'นามสกุล',
  `Idcard` varchar(13) NOT NULL COMMENT 'บัตรประชาชน',
  `position` varchar(30) NOT NULL COMMENT 'ตำแหน่ง',
  `username` varchar(30) NOT NULL COMMENT 'ชื่อผูัใช้',
  `password` varchar(20) NOT NULL COMMENT 'รหัสผ่าน',
  `status` varchar(10) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `position_id` int(20) DEFAULT NULL COMMENT 'รหัสตำแหน่ง',
  `Position_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `project_id` int(10) DEFAULT NULL COMMENT 'รหัสโครงการ',
  `type` varchar(200) NOT NULL COMMENT 'ประเภทงบประมาณ',
  `product` varchar(100) NOT NULL COMMENT 'ผลผลิต',
  `mission` varchar(50) NOT NULL COMMENT 'พันธกิจ',
  `strategic` varchar(50) NOT NULL COMMENT 'ยุทธศาสตร์',
  `reason` varchar(20) NOT NULL COMMENT 'หลักการและเหตุผล',
  `projected` varchar(20) NOT NULL COMMENT 'รหัสโครงการ',
  `project_name` varchar(110) NOT NULL COMMENT 'ชื่อโครงการ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_salary`
--

CREATE TABLE `tb_salary` (
  `salary_id` int(20) NOT NULL COMMENT 'รหัสเอกสารเงินเดือน',
  `salary_name` varchar(110) NOT NULL COMMENT 'ชื่อเอกสารเงินเดือน',
  `preson_id` varchar(20) NOT NULL COMMENT 'รหัสบุคลากร',
  `str-date` date NOT NULL COMMENT 'วันเริ่มต้น',
  `stp-date` date NOT NULL COMMENT 'วันสิ้นสุด',
  `project_id` varchar(20) NOT NULL COMMENT 'รหัสโครการ',
  `firstname` varchar(110) NOT NULL COMMENT 'ชื่อบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_school`
--

CREATE TABLE `tb_school` (
  `school_id` int(10) NOT NULL COMMENT 'รหัสโรงเรียน/สถานที่',
  `School_name` varchar(110) NOT NULL COMMENT 'ชื่อโรงเรียน/สถานที่',
  `address` varchar(200) NOT NULL COMMENT 'ที่อยู่',
  `affiliation` varchar(110) NOT NULL COMMENT 'สังกัด',
  `area` varchar(110) NOT NULL COMMENT 'เขตพื้นที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
