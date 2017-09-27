-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 06:03 PM
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
(3, 'Mainan', 1, '2017-09-27 14:17:17', '0000-00-00 00:00:00'),
(4, 'Snack & Makanan', 1, '2017-09-27 14:17:38', '0000-00-00 00:00:00');

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
('fp8qr6qrihh1relgtcbfah3be0097jeu', '::1', 1506528138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532373936353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('r8ois03spmmifiv2f4t9mn4d2flmil91', '::1', 1506527965, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532373936353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('qjun26e2kin6tovkk124f5dvnphbuags', '::1', 1506527649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532373634393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('m2m57g34591mcjd0e4httcu0490em783', '::1', 1506527251, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532373235313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7dr65oj4ri3mqb5cqn2fl1qgd3fj80km', '::1', 1506526785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532363738353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('i3cehfptd8uvvoaquvk6oc1e35bgglnd', '::1', 1506526339, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532363333393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1jagnhtiiuo9oro4aiel92tl0k0g2a4g', '::1', 1506518829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363531383832393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('laqmair5v8t70r2pqbdt6le1r0pg3mc8', '::1', 1506519572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363531393537323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7et4qpevse3kgctrfhss60tlarehfgq2', '::1', 1506519890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363531393839303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('14pfhe71tqvara5djcok3snvcr0h7t61', '::1', 1506520207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532303230373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('6pin6gagigmck73r5lghdkcjr7q3tp8a', '::1', 1506520545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532303534353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('id5q7bnq8fa86pi1g8l35r891qdhovft', '::1', 1506521751, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532313735313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('496i37b8itbctfqdt1dr09hhmv6klg4r', '::1', 1506522083, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532323038333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7mti930qjmdehkdf9tg8cqsgk0ffpom2', '::1', 1506522465, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532323436353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('0votofqbl7nq17vqq4j2sft0nftqe4g6', '::1', 1506523585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532333538353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('4h4at70f322vkja627iq7oje93qumdph', '::1', 1506523902, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532333930323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('i1f2rfeukmldu1m8qki2d791jrvcj6qh', '::1', 1506524335, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532343333353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('oehjlk33125r6r02qdfj1ntikrf2v673', '::1', 1506525560, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532353536303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('g2fvkpmuhclsvsmt4o8it902p3vrrm62', '::1', 1506525966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363532353936363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b);

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
(3, 'sale', 'Sale', 'dashboard', '2017-09-27 14:27:41', '2017-09-27 14:27:53', 1);

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
  MODIFY `idCATEGORY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hoopla_category_sale`
--
ALTER TABLE `hoopla_category_sale`
  MODIFY `idCATSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hoopla_menu_admin`
--
ALTER TABLE `hoopla_menu_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
