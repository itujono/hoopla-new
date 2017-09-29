-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 04:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codewell_hoopla`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_barang_rental`
--

CREATE TABLE `hoopla_barang_rental` (
  `idRENTAL` int(11) NOT NULL,
  `namaRENTAL` varchar(70) NOT NULL,
  `brandRENTAL` varchar(80) NOT NULL,
  `hargaRENTAL` varchar(50) NOT NULL,
  `durasiRENTAL` varchar(40) NOT NULL,
  `descriptionRENTAL` text NOT NULL,
  `idCATEGORY` int(11) NOT NULL,
  `createdateRENTAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateRENTAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusRENTAL` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_barang_rental`
--

INSERT INTO `hoopla_barang_rental` (`idRENTAL`, `namaRENTAL`, `brandRENTAL`, `hargaRENTAL`, `durasiRENTAL`, `descriptionRENTAL`, `idCATEGORY`, `createdateRENTAL`, `updatedateRENTAL`, `statusRENTAL`) VALUES
(1, 'Stroller Babys', 'Kitatsu', '42000', '4 Minggu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, '2017-09-26 13:58:43', '2017-09-27 13:50:25', 0),
(3, 'Bekal Bayi Minion', 'Motaro', '56000', '4 Minggu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, '2017-09-27 13:16:55', '2017-09-27 13:50:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_barang_sale`
--

CREATE TABLE `hoopla_barang_sale` (
  `idSALE` int(11) NOT NULL,
  `namaSALE` varchar(70) NOT NULL,
  `brandSALE` varchar(80) NOT NULL,
  `hargaSALE` varchar(50) NOT NULL,
  `descriptionSALE` text NOT NULL,
  `idCATSALE` int(11) NOT NULL,
  `createdateSALE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSALE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusSALE` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_barang_sale`
--

INSERT INTO `hoopla_barang_sale` (`idSALE`, `namaSALE`, `brandSALE`, `hargaSALE`, `descriptionSALE`, `idCATSALE`, `createdateSALE`, `updatedateSALE`, `statusSALE`) VALUES
(2, 'Mainan Mobil Pemadam Kebakaran', 'Hisatmisu', '230000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3, '2017-09-27 14:31:37', '0000-00-00 00:00:00', 1),
(3, 'Mainan untuk mama', 'Santoryu', '1600000', 'Mainan untuk mama.', 1, '2017-09-27 14:51:42', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_category_rental`
--

CREATE TABLE `hoopla_category_rental` (
  `idCATEGORY` int(11) NOT NULL,
  `namaCATEGORY` varchar(60) NOT NULL,
  `statusCATEGORY` int(1) NOT NULL,
  `createdateCATEGORY` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCATEGORY` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_category_rental`
--

INSERT INTO `hoopla_category_rental` (`idCATEGORY`, `namaCATEGORY`, `statusCATEGORY`, `createdateCATEGORY`, `updatedateCATEGORY`) VALUES
(1, 'Newborn', 1, '2017-09-26 13:48:13', '2017-09-26 13:49:57'),
(2, 'Walking', 1, '2017-09-26 13:48:48', '2017-09-26 13:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_category_sale`
--

CREATE TABLE `hoopla_category_sale` (
  `idCATSALE` int(11) NOT NULL,
  `namaCATSALE` varchar(60) NOT NULL,
  `statusCATSALE` int(1) NOT NULL,
  `createdateCATSALE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCATSALE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_category_sale`
--

INSERT INTO `hoopla_category_sale` (`idCATSALE`, `namaCATSALE`, `statusCATSALE`, `createdateCATSALE`, `updatedateCATSALE`) VALUES
(1, 'Buat Mama', 1, '2017-09-27 14:16:40', '0000-00-00 00:00:00'),
(2, 'Buat Baby', 1, '2017-09-27 14:16:52', '2017-09-27 14:16:58'),
(3, 'Mainan', 1, '2017-09-27 14:17:17', '2017-09-28 14:14:24'),
(5, 'Snack & Food', 1, '2017-09-28 14:13:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_category_trivia`
--

CREATE TABLE `hoopla_category_trivia` (
  `idCATTRIVIA` int(11) NOT NULL,
  `namaCATTRIVIA` varchar(60) NOT NULL,
  `statusCATTRIVIA` int(1) NOT NULL,
  `createdateCATTRIVIA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCATTRIVIA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_category_trivia`
--

INSERT INTO `hoopla_category_trivia` (`idCATTRIVIA`, `namaCATTRIVIA`, `statusCATTRIVIA`, `createdateCATTRIVIA`, `updatedateCATTRIVIA`) VALUES
(1, 'Tips & Trick', 1, '2017-09-27 14:16:40', '2017-09-28 14:54:18'),
(2, 'Parenting', 1, '2017-09-27 14:16:52', '2017-09-28 14:54:27'),
(3, 'Toys', 1, '2017-09-27 14:17:17', '2017-09-28 14:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_ci_sessions`
--

CREATE TABLE `hoopla_ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoopla_ci_sessions`
--

INSERT INTO `hoopla_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('hg4p2oeoa1td699epj71ga1hulq4uvod', '::1', 1506611970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363631313937303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('f464u1fa0sls6f8gud4aq3tqntbpesbb', '::1', 1506611098, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363631313039383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('movs18oivk7bq0pnkl3bk8dtr7vijn6a', '::1', 1506610702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363631303730323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('944pou4rhcols2rt5d50dddd1c93ffe0', '::1', 1506610341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363631303334313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('cm1c6rklljl5blmv9psrvok47301dntv', '::1', 1506608422, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630383432323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ivdkatjilp5hjsc8j79k56202ruoc4c7', '::1', 1506607354, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630373335343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7gokt76ravgra2rgdea7vbc2g02p764p', '::1', 1506607983, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630373938333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e676861707573616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('t4o8khrdr1tcli5hh5mikjf738tu8vp3', '::1', 1506606059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630363035393b),
('sr7hugju923abfdktdpkg0a1de6768f3', '::1', 1506606631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630363633313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('6kvsrqiht1ghmrncgn4s7j1u23u8j3f0', '::1', 1506605757, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630353735373b),
('j37ehet3j8a09v472ha3gso3ffl6csil', '::1', 1506605294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630353239343b),
('gljc2aofrqn83eao9jhiua2apji0g5t9', '::1', 1506604968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363630343936383b),
('ilkr130e38779usrvd67vqvb2i68pc4l', '::1', 1506652920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363635323932303b),
('28vdq31s05r78cincplkeni3cdkoreiv', '::1', 1506653025, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363635323932303b),
('pvllboirec4ieh4g83t7r4h33likoocu', '::1', 1506652536, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363635323533363b),
('i15rgag8mk2k3r1qlkck6b51uk7h44fv', '::1', 1506651047, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363635313034373b),
('t9a8adktd3etvoesk6gdou7mhgl2unnn', '::1', 1506651549, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363635313534393b),
('g02ah0sunp3iupblh9ho1o7qsg82f9ll', '::1', 1506612459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363631323435313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1mp8lv7k0s9gmo64b36brm3ap99pv6sa', '::1', 1506612451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363631323435313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_menu_admin`
--

CREATE TABLE `hoopla_menu_admin` (
  `idMENU` int(11) NOT NULL,
  `functionMENU` varchar(40) NOT NULL,
  `namaMENU` varchar(70) NOT NULL,
  `iconMENU` varchar(10) NOT NULL,
  `createdateMENU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateMENU` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusMENU` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_menu_admin`
--

INSERT INTO `hoopla_menu_admin` (`idMENU`, `functionMENU`, `namaMENU`, `iconMENU`, `createdateMENU`, `updatedateMENU`, `statusMENU`) VALUES
(1, 'dashboard', 'Dashboard', 'dashboard', '2017-09-26 13:29:22', '2017-09-26 13:31:49', 1),
(2, 'rental', 'Rental', 'dashboard', '2017-09-26 13:29:29', '2017-09-26 13:38:39', 1),
(4, 'rental/category_rental', 'Kategori Rental', 'dashboard', '2017-09-28 13:50:27', '0000-00-00 00:00:00', 1),
(5, 'sale', 'Sale', 'dashboard', '2017-09-28 13:51:46', '2017-09-28 13:52:11', 1),
(6, 'sale/category_sale', 'Kategori Sale', 'dashboard', '2017-09-28 14:12:58', '2017-09-28 14:13:10', 1),
(7, 'trivia', 'Trivia', 'dashboard', '2017-09-28 14:51:54', '2017-09-28 14:52:30', 1),
(8, 'trivia/category_trivia', 'Kategori Trivia', 'dashboard', '2017-09-28 14:52:15', '2017-09-28 14:52:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_post_trivia`
--

CREATE TABLE `hoopla_post_trivia` (
  `idTRIVIA` int(11) NOT NULL,
  `titleTRIVIA` varchar(70) NOT NULL,
  `idCATTRIVIA` int(11) NOT NULL,
  `descriptionTRIVIA` text NOT NULL,
  `createdateTRIVIA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTRIVIA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusTRIVIA` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_post_trivia`
--

INSERT INTO `hoopla_post_trivia` (`idTRIVIA`, `titleTRIVIA`, `idCATTRIVIA`, `descriptionTRIVIA`, `createdateTRIVIA`, `updatedateTRIVIA`, `statusTRIVIA`) VALUES
(3, 'Bagaimana membesarkan anak yang hilang 1 mata-nya?', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-09-28 15:07:32', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_users_admin`
--

CREATE TABLE `hoopla_users_admin` (
  `idADMIN` int(11) NOT NULL,
  `emailADMIN` varchar(40) NOT NULL,
  `passwordADMIN` varchar(129) NOT NULL,
  `createdateADMIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusADMIN` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_users_admin`
--

INSERT INTO `hoopla_users_admin` (`idADMIN`, `emailADMIN`, `passwordADMIN`, `createdateADMIN`, `statusADMIN`) VALUES
(1, 'admin@admin.com', '2ba84d7e1afe795f526943940fd40f48a6681b8d7b206fcab2fc6cbaf86f3244039f5ef1ddfc546ba76d74edf529645fdaa96109befa226eb56fb9cf05b2f441', '2017-09-26 10:04:09', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoopla_barang_rental`
--
ALTER TABLE `hoopla_barang_rental`
  ADD PRIMARY KEY (`idRENTAL`);

--
-- Indexes for table `hoopla_barang_sale`
--
ALTER TABLE `hoopla_barang_sale`
  ADD PRIMARY KEY (`idSALE`);

--
-- Indexes for table `hoopla_category_rental`
--
ALTER TABLE `hoopla_category_rental`
  ADD PRIMARY KEY (`idCATEGORY`);

--
-- Indexes for table `hoopla_category_sale`
--
ALTER TABLE `hoopla_category_sale`
  ADD PRIMARY KEY (`idCATSALE`);

--
-- Indexes for table `hoopla_category_trivia`
--
ALTER TABLE `hoopla_category_trivia`
  ADD PRIMARY KEY (`idCATTRIVIA`);

--
-- Indexes for table `hoopla_ci_sessions`
--
ALTER TABLE `hoopla_ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `hoopla_menu_admin`
--
ALTER TABLE `hoopla_menu_admin`
  ADD PRIMARY KEY (`idMENU`);

--
-- Indexes for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  ADD PRIMARY KEY (`idTRIVIA`);

--
-- Indexes for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  ADD PRIMARY KEY (`idADMIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoopla_barang_rental`
--
ALTER TABLE `hoopla_barang_rental`
  MODIFY `idRENTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_barang_sale`
--
ALTER TABLE `hoopla_barang_sale`
  MODIFY `idSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_category_rental`
--
ALTER TABLE `hoopla_category_rental`
  MODIFY `idCATEGORY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_category_sale`
--
ALTER TABLE `hoopla_category_sale`
  MODIFY `idCATSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hoopla_category_trivia`
--
ALTER TABLE `hoopla_category_trivia`
  MODIFY `idCATTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hoopla_menu_admin`
--
ALTER TABLE `hoopla_menu_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  MODIFY `idTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
