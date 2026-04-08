-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `dataproject`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `detailproject`
-- 

CREATE TABLE `detailproject` (
  `ProjectID` int(50) NOT NULL auto_increment,
  `NameProject` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Contact` varchar(50) collate utf8_unicode_ci NOT NULL,
  `OwnerProject` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Architect` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Consultant` varchar(100) collate utf8_unicode_ci NOT NULL,
  `StartDate` varchar(20) collate utf8_unicode_ci NOT NULL,
  `LastDate` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Sale` varchar(10) collate utf8_unicode_ci NOT NULL,
  `StatusData` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ProjectID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

-- 
-- dump ตาราง `detailproject`
-- 

INSERT INTO `detailproject` VALUES (33, 'อาคารอัศวรรณ', 'คุณนาถอนงค์', 'ห้างสรรพสินค้าเจียง-ฟิวเจอร์', '-', '-', '09/06/2558', '18/08/2558', 'หนึ่ง', 'ส่งมอบงาน');
INSERT INTO `detailproject` VALUES (32, 'อาคารอัศวรรณ', 'คุณนาถอนงค์', 'ห้างสรรพสินค้าเจียง-ฟิวเจอร์', '-', '-', '03/02/2558', '19/05/2558', 'หนึ่ง', 'ส่งมอบงาน');
INSERT INTO `detailproject` VALUES (30, 'ณุศา มายโอโซน', 'สุดารัตน์', '-', '-', '-', '22/12/2557', '26/06/2558', 'หนึ่ง', 'ส่งมอบงาน');
INSERT INTO `detailproject` VALUES (29, 'บริษัท เอกการทดสอบ จำกัด', 'คุณเอกการ', 'คุณเอกการ', 'คุณสมบัติ', 'คุณนครินท์', '09/12/2558', '28/02/2559', 'มาร์', 'Precall');
INSERT INTO `detailproject` VALUES (34, 'มูราโมโต้ อีเล็คตรอน', 'คุณณัฐธพงษ์ ', 'เวิด์ล คูล เอ็นจิเนียริ่ง ', '-', '-', '03/07/2558', '23/09/2558', 'หนึ่ง', 'เก็บเงิน');
INSERT INTO `detailproject` VALUES (35, 'งานสร้างห้องระบบ Exhaust', 'คุณมนตรี', 'จตุรัสจามจุรี', '-', '-', '21/01/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (36, 'Fire Pump Control Panel', 'ทิพรัตน์ แซ่ตั้ง', 'อาคารชุด วิวิด ทาวเวอร์', '-', '-', '10/03/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (37, 'เสนอสินค้า Pegler', 'คุณอานุภาพ', 'สถานีวิทยุกระจายเสียง', '-', '-', '28/05/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (38, 'Replacement Softener', 'คุณสุพัฒ ชาบุญ', 'โรงแรมอินเตอร์คอนติเนนตัล', '-', '-', '11/03/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (39, 'COMPLETE SET STEAM WATER PUMP.24 GPM.x 2EA', 'คุณสุพัฒ ชาบุญ', 'โรงแรมอินเตอร์คอนติเนนตัล', '-', '-', '11/03/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (40, 'COMPLETE SET/ STEAM WATER PUMP.48 GPM.x 2EA', 'คุณสุพัฒ ชาบุญ', 'โรงแรมอินเตอร์คอนติเนนตัล', '-', '-', '11/03/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (41, 'ซ่อมและทำฐานบอยเลอร์', 'คุณสุพัฒ ชาบุญ', 'โรงแรมอินเตอร์คอนติเนนตัล', '-', '-', '11/03/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (42, 'เสนอสินค้า Pegler', 'คุณกุลธิดา', 'เบเจอร์ บี.กริม ประเทศไทย', '-', '-', '07/07/2558', '', 'หนึ่ง', 'เสนอราคา');
INSERT INTO `detailproject` VALUES (43, 'test1', 'test1', 'test1', 'test1', 'test1', '05/01/2559', '24/01/2559', 'อั้ม', 'ส่งมอบงาน');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `files`
-- 

CREATE TABLE `files` (
  `FilesID` int(5) NOT NULL auto_increment,
  `content_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `content_detail` text collate utf8_unicode_ci NOT NULL,
  `FilesName` varchar(150) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`FilesID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

-- 
-- dump ตาราง `files`
-- 

INSERT INTO `files` VALUES (16, 'งานสปา', 'งานสปา', 'Z:\\Jack\\Website_New');
INSERT INTO `files` VALUES (17, 'test', 'test', 'E:\\20012559');
INSERT INTO `files` VALUES (18, 'ณุศา มายโอโซน', 'ส่งมอบสินค้าเรียบร้อยแล้ว ลูกค้าชำระเงินเรียบร้อยแล้ว\r\nมูลค่าทั้งสิ้น 370,000 บาท', '-');
INSERT INTO `files` VALUES (19, 'อาคารอัศวรรณ ชั้น 16 ', 'ติดตั้งท่อน้ำร้อน  ', 'Z:\\ทดสอบงานท่อ');
INSERT INTO `files` VALUES (20, 'อาคารอัศวรรณ ชั้น 16 ', 'หุ้มฉนวนกันความร้อนให้กับท่อน้ำร้อน', 'Z:\\ทดสอบงานท่อ');
INSERT INTO `files` VALUES (21, 'มูราโมโต้ อีเล็คตรอน', 'ส่งสินค้าเรียบร้อย ', '');
INSERT INTO `files` VALUES (22, 'จตุรัส', 'จตุรัส', '\\\\Admink-pc\\_เสนอราคา-58\\009-จตุรัสจามจุรี-งานสร้างห้องระบบ Exhaust');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `member`
-- 

CREATE TABLE `member` (
  `UserID` int(50) NOT NULL auto_increment,
  `Username` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Password` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Status` enum('ผู้ดูแลระบบ','เจ้าหน้าที่ทั่วไป') collate utf8_unicode_ci NOT NULL,
  `LoginStatus` int(1) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  PRIMARY KEY  (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES (1, 'admin', 'admin', 'ผู้ดูแลระบบ', 'ผู้ดูแลระบบ', 0, '2016-03-04 14:30:19');
INSERT INTO `member` VALUES (2, 'user', 'user', 'เจ้าหน้าที่ทั่วไป', 'เจ้าหน้าที่ทั่วไป', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `sale`
-- 

CREATE TABLE `sale` (
  `SaleID` int(5) NOT NULL auto_increment,
  `SaleName` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`SaleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `sale`
-- 

INSERT INTO `sale` VALUES (3, 'มาร์');
INSERT INTO `sale` VALUES (4, 'อั้ม');
INSERT INTO `sale` VALUES (6, 'หนึ่ง');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `statusdata`
-- 

CREATE TABLE `statusdata` (
  `StatusID` int(10) NOT NULL auto_increment,
  `NameStatus` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`StatusID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

-- 
-- dump ตาราง `statusdata`
-- 

INSERT INTO `statusdata` VALUES (1, 'Precall');
INSERT INTO `statusdata` VALUES (2, 'เข้าไปพบลูกค้า');
INSERT INTO `statusdata` VALUES (3, 'เสนอราคา');
INSERT INTO `statusdata` VALUES (4, 'สรุปราคา');
INSERT INTO `statusdata` VALUES (5, 'เปิด PO');
INSERT INTO `statusdata` VALUES (6, 'สั่งของ');
INSERT INTO `statusdata` VALUES (7, 'ส่งของ');
INSERT INTO `statusdata` VALUES (8, 'ส่งมอบงาน');
INSERT INTO `statusdata` VALUES (9, 'เก็บเงิน');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tbl_content`
-- 

CREATE TABLE `tbl_content` (
  `content_id` int(5) NOT NULL auto_increment,
  `content_name` varchar(255) NOT NULL,
  `content_detail` text NOT NULL,
  `files_name` varchar(25) NOT NULL,
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- dump ตาราง `tbl_content`
-- 

INSERT INTO `tbl_content` VALUES (19, 'งานเดินท่อ', 'งานเดินท่อ', 'AbHfR1448846346.jpg');
INSERT INTO `tbl_content` VALUES (18, 'งานสปา', 'งานสปา', 'eisTY1448846092.jpg');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tbl_files`
-- 

CREATE TABLE `tbl_files` (
  `files_id` int(10) NOT NULL auto_increment,
  `files_title` varchar(255) NOT NULL,
  `files_name` varchar(25) NOT NULL,
  PRIMARY KEY  (`files_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- 
-- dump ตาราง `tbl_files`
-- 

INSERT INTO `tbl_files` VALUES (25, 'งานเดินท่อ', 'AbHfR1448846346.jpg');
INSERT INTO `tbl_files` VALUES (24, 'งานสปา', 'eisTY1448846092.jpg');
