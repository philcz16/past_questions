-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2018 at 03:38 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `myschol1_scholar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `username`, `email`, `password`) VALUES
(1, 'philcz', 'phil16terpase@gmail.com', 'g@mm@r@y'),
(2, 'felix', 'ayangefelix8@gmail.com', 'felix'),
(3, 'logics', 'genesisofib@gmail.com', 'logics9803');

-- --------------------------------------------------------

--
-- Table structure for table `college_faculty`
--

CREATE TABLE `college_faculty` (
  `college_faculty_id` int(10) UNSIGNED NOT NULL,
  `school` varchar(255) NOT NULL DEFAULT '',
  `college_faculty` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_faculty`
--

INSERT INTO `college_faculty` (`college_faculty_id`, `school`, `college_faculty`) VALUES
(1, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'AGRICULTURAL AND SCIENCE EDUCATION'),
(2, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'AGRICULTURAL ECONOMICS AND EXTENSION'),
(3, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'AGRONOMY'),
(4, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'ENGINEERING'),
(5, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'ANIMAL SCIENCE'),
(6, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'FOOD TECHNOLOGY'),
(7, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'VETERINARY MEDICINE'),
(8, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'SCIENCES'),
(9, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'MANAGEMENT SCIENCES'),
(10, 'FEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI', 'FORESTRY AND FISHERY');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL DEFAULT '',
  `useremail` varchar(45) NOT NULL DEFAULT '',
  `userphone` varchar(45) NOT NULL DEFAULT '',
  `usermessage` text,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `department` varchar(100) NOT NULL DEFAULT '',
  `level` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `course` varchar(45) NOT NULL DEFAULT '',
  `file` varchar(45) NOT NULL DEFAULT '',
  `file_type` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `department`, `level`, `course`, `file`, `file_type`) VALUES
(1, 'BIOLOGICAL SCIENCES', 100, 'GST 111', 'GST111.pdf', '1'),
(2, 'BIOLOGICAL SCIENCES', 100, 'GST113', 'GST113.pdf', '1'),
(3, 'BIOLOGICAL SCIENCES', 100, 'BIO101', 'BIO 101.pdf', '1'),
(4, 'BIOLOGICAL SCIENCES', 100, 'CHM111', 'CHM111.pdf', '1'),
(5, 'BIOLOGICAL SCIENCES', 100, 'CHM151', 'CHM151.pdf', '1'),
(6, 'BIOLOGICAL SCIENCES', 100, 'PHY111', 'conflict_resolution.zip', '1'),
(7, 'BIOLOGICAL SCIENCES', 100, 'PHY191', '', ''),
(8, 'BIOLOGICAL SCIENCES', 100, 'MTH111', '', ''),
(9, 'BIOLOGICAL SCIENCES', 100, 'CMP111', 'CMP111.pdf', '1'),
(10, 'BIOLOGICAL SCIENCES', 100, 'STA111', 'STA111.pdf', '1'),
(11, 'BIOLOGICAL SCIENCES', 100, 'PHY101', 'PHY101.pdf', '1'),
(12, 'BIOLOGICAL SCIENCES', 100, 'PHY151', 'PHY151.pdf', '1'),
(13, 'AGRICULTURAL ECONOMICS', 100, 'MTH111', '', ''),
(14, 'AGRICULTURAL ECONOMICS', 100, 'CHM111', '', ''),
(15, 'AGRICULTURAL ECONOMICS', 100, 'GST111', '', ''),
(16, 'AGRICULTURAL ECONOMICS', 100, 'CHM151', '', ''),
(17, 'AGRICULTURAL ECONOMICS', 100, 'PHY151', 'PHY151.pdf', '1'),
(18, 'AGRICULTURAL ECONOMICS', 100, 'STA111', '', ''),
(19, 'AGRICULTURAL ECONOMICS', 100, 'GST113', '', ''),
(20, 'AGRICULTURAL ECONOMICS', 100, 'BIO103', 'BIO103.pdf', '1'),
(21, 'AGRICULTURAL ECONOMICS', 100, 'GST115', 'GST115.pdf', '1'),
(22, 'AGRICULTURAL ECONOMICS', 100, 'BIO101', '', ''),
(23, 'AGRICULTURAL ECONOMICS', 100, 'PHY101', '', ''),
(24, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'PHY151', '', ''),
(25, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'CHM151', '', ''),
(26, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'CHM111', '', ''),
(27, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'MTH111', '', ''),
(28, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'STA111', '', ''),
(29, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'GST113', '', ''),
(30, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'BIO103', '', ''),
(31, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'GST115', '', ''),
(32, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'GST111', '', ''),
(33, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'BIO101', '', ''),
(34, 'AGRICULTURAL EXTENSION AND COMMUNICATION', 100, 'PHY101', '', ''),
(35, 'CHEMISTRY', 100, 'CHM 111', '', ''),
(36, 'BIOLOGICAL SCIENCES', 100, 'CHM 151', '', ''),
(37, 'CHEMISTRY', 100, 'CMP 111', '', ''),
(38, 'CHEMISTRY', 100, 'GST 111', '', ''),
(39, 'CHEMISTRY', 100, 'CHM 151', '', ''),
(40, 'CHEMISTRY', 100, 'MTH 111', '', ''),
(41, 'CHEMISTRY', 100, 'PHY 111', '', ''),
(42, 'CHEMISTRY', 100, 'PHY 191', '', ''),
(43, 'CHEMISTRY', 100, 'STA 111', '', ''),
(44, 'CHEMISTRY', 100, 'BIO 104', '', ''),
(45, 'CHEMISTRY', 100, 'CHM 122', '', ''),
(46, 'CHEMISTRY', 100, 'CHM 132', '', ''),
(47, 'CHEMISTRY', 100, 'CHM 152', '', ''),
(48, 'CHEMISTRY', 100, 'CMP 122', '', ''),
(49, 'CHEMISTRY', 100, 'GST 112', '', ''),
(50, 'CHEMISTRY', 100, 'MTH 122', '', ''),
(51, 'CHEMISTRY', 100, 'PHY 132', '', ''),
(52, 'CHEMISTRY', 100, 'PHY 142', '', ''),
(53, 'CHEMISTRY', 100, 'PHY 192', '', ''),
(54, 'CHEMISTRY', 200, 'BCH 201', '', ''),
(55, 'CHEMISTRY', 200, 'CHM 211', '', ''),
(56, 'CHEMISTRY', 200, 'CHM 221', '', ''),
(57, 'CHEMISTRY', 200, 'CHM 223', '', ''),
(58, 'CHEMISTRY', 200, 'CHM 241', '', ''),
(59, 'CHEMISTRY', 200, 'CHM 251', '', ''),
(60, 'CHEMISTRY', 200, 'CMP 211', '', ''),
(61, 'CHEMISTRY', 200, 'GST 213', '', ''),
(62, 'CHEMISTRY', 200, 'PHY 221', '', ''),
(63, 'CHEMISTRY', 200, 'AEC 204', '', ''),
(64, 'CHEMISTRY', 200, 'CHM 224', '', ''),
(65, 'CHEMISTRY', 200, 'CHM 232', '', ''),
(66, 'CHEMISTRY', 200, 'CHM 252', '', ''),
(67, 'CHEMISTRY', 200, 'CHM 254', '', ''),
(68, 'CHEMISTRY', 200, 'GST 114', '', ''),
(69, 'CHEMISTRY', 200, 'GST 116', '', ''),
(70, 'CHEMISTRY', 200, 'GST 222', '', ''),
(71, 'CHEMISTRY', 200, 'PHY 252', '', ''),
(72, 'CHEMISTRY', 200, 'BIO 204', '', ''),
(73, 'CHEMISTRY', 200, 'CMP 212', '', ''),
(74, 'CHEMISTRY', 200, 'PHY 242', '', ''),
(75, 'CHEMISTRY', 300, 'CHM 299', '', ''),
(76, 'CHEMISTRY', 300, 'CHM 311', '', ''),
(77, 'CHEMISTRY', 300, 'CHM 321', '', ''),
(78, 'CHEMISTRY', 300, 'CHM 323', '', ''),
(79, 'CHEMISTRY', 300, 'CHM 331', '', ''),
(80, 'CHEMISTRY', 300, 'CHM 351', '', ''),
(81, 'CHEMISTRY', 300, 'CHM 363', '', ''),
(82, 'CHEMISTRY', 300, 'BCH 307', '', ''),
(83, 'CHEMISTRY', 300, 'CHM 333', '', ''),
(84, 'CHEMISTRY', 300, 'CHM 361', '', ''),
(85, 'CHEMISTRY', 300, 'CHM 366', '', ''),
(86, 'CHEMISTRY', 300, 'EME 201', '', ''),
(87, 'CHEMISTRY', 300, 'CHM 322', '', ''),
(88, 'CHEMISTRY', 300, 'CHM 324', '', ''),
(89, 'CHEMISTRY', 300, 'CHM 332', '', ''),
(90, 'CHEMISTRY', 300, 'CHM 352', '', ''),
(91, 'CHEMISTRY', 300, 'CHM 354', '', ''),
(92, 'CHEMISTRY', 300, 'CHM 362', '', ''),
(93, 'CHEMISTRY', 300, 'CHM 364', '', ''),
(94, 'CHEMISTRY', 300, 'PHY 372', '', ''),
(95, 'CHEMISTRY', 300, 'BCH 308', '', ''),
(96, 'CHEMISTRY', 300, 'MTH 382', '', ''),
(97, 'CHEMISTRY', 400, 'CHM 399', '', ''),
(98, 'CHEMISTRY', 400, 'CHM413', '', ''),
(99, 'CHEMISTRY', 400, 'CHM 423', '', ''),
(100, 'CHEMISTRY', 400, 'CHM 425', '', ''),
(101, 'CHEMISTRY', 400, 'CHM 433', '', ''),
(102, 'CHEMISTRY', 400, 'CHM 435', '', ''),
(103, 'CHEMISTRY', 400, 'CHM 411', '', ''),
(104, 'CHEMISTRY', 400, 'CHM 421', '', ''),
(105, 'CHEMISTRY', 400, 'CHM 431', '', ''),
(106, 'CHEMISTRY', 400, 'CHM 461', '', ''),
(107, 'CHEMISTRY', 400, 'CHM 463', '', ''),
(108, 'CHEMISTRY', 400, 'CHM 499', '', ''),
(109, 'CHEMISTRY', 400, 'CHM 412', '', ''),
(110, 'CHEMISTRY', 400, 'CHM 434', '', ''),
(111, 'CHEMISTRY', 400, 'CHM 402', '', ''),
(112, 'CHEMISTRY', 400, 'CHM 424', '', ''),
(113, 'CHEMISTRY', 400, 'CHM 466', '', ''),
(114, 'CHEMISTRY', 400, 'CHM 414', '', ''),
(115, 'CHEMISTRY', 400, 'CHM 422', '', ''),
(116, 'CHEMISTRY', 400, 'CHM 426', '', ''),
(117, 'CHEMISTRY', 400, 'CHM 436', '', ''),
(118, 'CHEMISTRY', 400, 'CHM 462', '', ''),
(119, 'CHEMISTRY', 400, 'CHM 464', '', ''),
(120, 'CHEMISTRY', 400, 'CHM 432', '', ''),
(121, 'PHYSICS', 100, 'GST 111', '', ''),
(122, 'PHYSICS', 100, 'EDU 101', '', ''),
(123, 'PHYSICS', 100, 'BIO 101', '', ''),
(124, 'PHYSICS', 100, 'BIO 103', '', ''),
(125, 'PHYSICS', 100, 'CHM 111', '', ''),
(126, 'PHYSICS', 100, 'CHM 151', '', ''),
(127, 'PHYSICS', 100, 'CMP 111', '', ''),
(128, 'PHYSICS', 100, 'MTH 111', '', ''),
(129, 'PHYSICS', 100, 'PHY 101', '', ''),
(130, 'PHYSICS', 100, 'STA 111', '', ''),
(131, 'PHYSICS', 200, 'GST 113', '', ''),
(132, 'PHYSICS', 200, 'GST 115', '', ''),
(133, 'PHYSICS', 100, 'GST 213', '', ''),
(134, 'PHYSICS', 100, 'SED 207', '', ''),
(135, 'PHYSICS', 200, 'EDU 201', '', ''),
(136, 'PHYSICS', 200, 'BIO 201', '', ''),
(137, 'PHYSICS', 200, 'BCH 201', '', ''),
(138, 'PHYSICS', 200, 'BOT 201', '', ''),
(139, 'PHYSICS', 200, 'MCB 201', '', ''),
(140, 'PHYSICS', 200, 'ZOO 201', '', ''),
(141, 'PHYSICS', 200, 'CHM 241', '', ''),
(142, 'PHYSICS', 200, 'GST 213', '', ''),
(143, 'PHYSICS', 200, 'EDU 201', '', ''),
(144, 'PHYSICS', 200, 'SED 207', '', ''),
(145, 'PHYSICS', 200, 'CHM 211', '', ''),
(146, 'PHYSICS', 200, 'CHM 221', '', ''),
(147, 'PHYSICS', 200, 'CHM 223', '', ''),
(148, 'PHYSICS', 200, 'CHM 241', '', ''),
(149, 'PHYSICS', 200, 'CHM 251', '', ''),
(150, 'PHYSICS', 200, 'PHY 221', '', ''),
(151, 'PHYSICS', 200, 'BCH 201', '', ''),
(152, 'PHYSICS', 300, 'PHY 301', '', ''),
(153, 'PHYSICS', 300, 'PHY 321', '', ''),
(154, 'PHYSICS', 300, 'PHY 341', '', ''),
(155, 'PHYSICS', 300, 'PHY 331', '', ''),
(156, 'PHYSICS', 300, 'PHY 391', '', ''),
(157, 'PHYSICS', 300, 'PHY351', '', ''),
(158, 'PHYSICS', 300, ' 	  PHY353', '', ''),
(159, 'PHYSICS', 300, 'PHY 311', '', ''),
(160, 'PHYSICS', 300, 'PHY 397', '', ''),
(161, 'PHYSICS', 300, ' PHY 314', '', ''),
(162, 'PHYSICS', 300, 'PHY 342', '', ''),
(163, 'PHYSICS', 300, 'PHY 362', '', ''),
(164, 'PHYSICS', 300, 'PHY 372', '', ''),
(165, 'PHYSICS', 300, ' 	  PHY 392', '', ''),
(166, 'PHYSICS', 300, 'MTH 322', '', ''),
(167, 'PHYSICS', 300, ' 	  PHY374', '', ''),
(168, 'PHYSICS', 400, ' 	  PHY 401', '', ''),
(169, 'PHYSICS', 400, 'PHY 411', '', ''),
(170, 'PHYSICS', 400, 'PHY 453', '', ''),
(171, 'PHYSICS', 400, 'PHY 471', '', ''),
(172, 'PHYSICS', 400, 'PHY 455', '', ''),
(173, 'PHYSICS', 400, ' 	  PHY 421', '', ''),
(174, 'PHYSICS', 400, ' 	  PHY 497', '', ''),
(175, 'PHYSICS', 400, 'PHY 414', '', ''),
(176, 'PHYSICS', 400, ' 	  PHY 474', '', ''),
(177, 'PHYSICS', 400, ' PHY 464', '', ''),
(178, 'PHYSICS', 400, ' 	  PHY 499', '', ''),
(179, 'PHYSICS', 400, ' 	  PHY 412', '', ''),
(180, 'PHYSICS', 400, ' 	  PHY 482', '', ''),
(181, 'PHYSICS', 400, ' 	  PHY 484', '', ''),
(182, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'GST 111', '', ''),
(183, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'GST 113', '', ''),
(184, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'GST 115', '', ''),
(185, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'CMP 111', '', ''),
(186, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'MTH 111', '', ''),
(187, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'STA 111', '', ''),
(188, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'PHY 111', '', ''),
(189, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'PHY 191', '', ''),
(190, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'CHM 111', '', ''),
(191, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'CHM 151', '', ''),
(192, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'BIO 103', '', ''),
(193, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'GST 112', '', ''),
(194, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'GST 114', '', ''),
(195, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'GST 116', '', ''),
(196, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'CMP 122', '', ''),
(197, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'MTH 122', '', ''),
(198, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'MTH 132', '', ''),
(199, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'STA 112', '', ''),
(200, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'PHY 142', '', ''),
(201, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'PHY 132', '', ''),
(202, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'PHY 192', '', ''),
(203, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'CHM 122', '', ''),
(204, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'CHM 152', '', ''),
(205, 'MATHEMATICS STATISTICS COMPUTER SCIENCE', 100, 'BIO 104', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(10) UNSIGNED NOT NULL,
  `college_faculty` varchar(45) NOT NULL DEFAULT '',
  `department` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `college_faculty`, `department`) VALUES
(1, 'SCIENCES', 'BIOLOGICAL SCIENCES'),
(2, 'SCIENCES', 'CHEMISTRY'),
(3, 'SCIENCES', 'MATHEMATICS STATISTICS COMPUTER SCIENCE'),
(4, 'SCIENCES', 'PHYSICS'),
(5, 'AGRICULTURAL AND SCIENCE EDUCATION', 'SCIENCE EDUCATION'),
(6, 'AGRICULTURAL AND SCIENCE EDUCATION', 'EDUCATIONAL FOUNDATIONS'),
(7, 'AGRICULTURAL ECONOMICS AND EXTENSION', 'AGRICULTURAL ECONOMICS'),
(8, 'AGRICULTURAL ECONOMICS AND EXTENSION', 'AGRICULTURAL EXTENSION AND COMMUNICATION'),
(9, 'ANIMAL SCIENCE', 'ANIMAL PRODUCTION'),
(10, 'ANIMAL SCIENCE', 'ANIMAL NUTRITION'),
(11, 'ANIMAL SCIENCE', 'ANIMAL BREEDING AND PHYSIOLOGY'),
(12, 'FOOD TECHNOLOGY', 'FOOD SCIENCE AND TECHNOLOGY'),
(13, 'FOOD TECHNOLOGY', 'HOME SCIENCE AND MANAGEMENT'),
(14, 'VETERINARY MEDICINE', 'VETERINARY MEDICINE'),
(15, 'MANAGEMENT SCIENCES', 'BUSINESS ADMINISTRATION'),
(16, 'MANAGEMENT SCIENCES', 'ACCOUNTING AND FINANCE'),
(17, 'AGRONOMY', 'CROP PRODUCTION'),
(18, 'AGRONOMY', 'SOIL SCIENCE'),
(19, 'AGRONOMY', 'PLANT BREEDING AND SEED SCIENCE'),
(20, 'AGRONOMY', 'CROP AND ENVIRONMENTAL PRODUCTION'),
(21, 'ENGINEERING', 'AGRICULTURAL AND ENVIRONMENTAL ENGINEERING'),
(22, 'ENGINEERING', 'CIVIL ENGINEERING'),
(23, 'ENGINEERING', 'ELECTRICAL AND ELECTRONICS ENGINEERING'),
(24, 'ENGINEERING', 'MECHANICAL ENGINEERING'),
(25, 'FORESTRY AND FISHERY', 'FISHERIES AND AQUACULTURE'),
(26, 'FORESTRY AND FISHERY', 'FOREST PRODUCTION AND PRODUCTS'),
(27, 'FORESTRY AND FISHERY', 'SOCIAL AND ENVIRONMENTAL FORESTRY'),
(28, 'FORESTRY AND FISHERY', 'WILDLIFE AND RANGE MANAGEMENT');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(45) NOT NULL DEFAULT '',
  `file_type` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(10) UNSIGNED NOT NULL,
  `school` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school`) VALUES
(1, 'Federal University of Agriculture, Makurdi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_faculty`
--
ALTER TABLE `college_faculty`
  ADD PRIMARY KEY (`college_faculty_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `college_faculty`
--
ALTER TABLE `college_faculty`
  MODIFY `college_faculty_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;


