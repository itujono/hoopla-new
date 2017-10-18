-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 03:02 AM
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
-- Table structure for table `hoopla_about`
--

CREATE TABLE `hoopla_about` (
  `idABOUT` int(11) NOT NULL,
  `title1ABOUT` varchar(70) NOT NULL,
  `desc1ABOUT` text NOT NULL,
  `title2ABOUT` varchar(70) NOT NULL,
  `desc2ABOUT` text NOT NULL,
  `link2ABOUT` varchar(100) NOT NULL,
  `title3ABOUT` varchar(70) NOT NULL,
  `desc3ABOUT` text NOT NULL,
  `link3ABOUT` varchar(100) NOT NULL,
  `title4ABOUT` varchar(70) NOT NULL,
  `desc4ABOUT` text NOT NULL,
  `link4ABOUT` varchar(100) NOT NULL,
  `createdateABOUT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateABOUT` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_about`
--

INSERT INTO `hoopla_about` (`idABOUT`, `title1ABOUT`, `desc1ABOUT`, `title2ABOUT`, `desc2ABOUT`, `link2ABOUT`, `title3ABOUT`, `desc3ABOUT`, `link3ABOUT`, `title4ABOUT`, `desc4ABOUT`, `link4ABOUT`, `createdateABOUT`, `updatedateABOUT`) VALUES
(1, 'Kalo bisa rental,  ngapain beli?', 'Hoopla merupakan penyedia jasa rental mainan serta perlengkapan bayi dan anak khusus buat anda yang berada di Kota Batam. Didirikan pada tahun 2016 lalu, Hoopla berkomitmen untuk terus dapat memberikan pelayanan terbaik dengan menyediakan produk-produk unggulan untuk menyenangkan buah hati anda, dan sesuai dengan motto kami: We deliver happiness to your home.', 'Kenapa harus menyewa?', 'Ada banyak alasan bagus kenapa kamu sebaiknya menyewa daripada membeli. Alasan pastinya, silakan ikuti link di bawah ini.', 'http://localhost/codewell/hoopla-new-html/why', 'That\'s all it!', 'Mau sewa mainan di Hoopla? Gampang banget caranya!', 'http://localhost/codewell/hoopla-new-html/terms', 'Masih kurang?', 'Hoopla punya paket-paket menarik yang kami jamin it will save you a lot. Mau tahu paket-paket menarik yang ada di Hoopla?', 'http://localhost/codewell/hoopla-new-html/product', '2017-10-16 13:46:43', '2017-10-16 13:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_age_rental`
--

CREATE TABLE `hoopla_age_rental` (
  `idAGE` int(11) NOT NULL,
  `namaAGE` varchar(70) NOT NULL,
  `statusAGE` int(1) NOT NULL,
  `createdateAGE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateAGE` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_age_rental`
--

INSERT INTO `hoopla_age_rental` (`idAGE`, `namaAGE`, `statusAGE`, `createdateAGE`, `updatedateAGE`) VALUES
(1, '1 Month', 1, '2017-10-02 13:33:54', '2017-10-02 13:35:52'),
(2, '2 Months', 1, '2017-10-02 13:34:05', '2017-10-02 14:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_barang_rental`
--

CREATE TABLE `hoopla_barang_rental` (
  `idRENTAL` int(11) NOT NULL,
  `idBRAND` int(11) NOT NULL,
  `idTYPE` int(11) NOT NULL,
  `idAGE` int(11) NOT NULL,
  `namaRENTAL` varchar(70) NOT NULL,
  `harga2RENTAL` varchar(50) NOT NULL,
  `harga4RENTAL` varchar(50) NOT NULL,
  `descriptionRENTAL` text NOT NULL,
  `createdateRENTAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateRENTAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusRENTAL` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_barang_rental`
--

INSERT INTO `hoopla_barang_rental` (`idRENTAL`, `idBRAND`, `idTYPE`, `idAGE`, `namaRENTAL`, `harga2RENTAL`, `harga4RENTAL`, `descriptionRENTAL`, `createdateRENTAL`, `updatedateRENTAL`, `statusRENTAL`) VALUES
(1, 1, 1, 1, 'Stroller Babys dan Mainan Lain', '12000', '23000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-09-26 13:58:43', '2017-10-17 14:19:09', 1),
(3, 2, 2, 2, 'Bekal Bayi Minion', '16000', '0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-09-27 13:16:55', '2017-10-04 13:10:18', 0),
(4, 1, 2, 2, 'Lego Sakti', '64000', '124000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequato.', '2017-10-04 13:23:34', '2017-10-04 13:26:13', 1);

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
(2, 'Mainan Mobil Pemadam Kebakaran', 'Hisatmisu', '230000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3, '2017-09-21 14:31:37', '2017-10-04 01:16:50', 1),
(3, 'Mainan untuk mama dan untuk bapak', 'Santoryu', '1600000', 'Mainan untuk mama dan untuk bapak', 1, '2017-09-28 14:51:42', '2017-10-17 14:39:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_brand_rental`
--

CREATE TABLE `hoopla_brand_rental` (
  `idBRAND` int(11) NOT NULL,
  `namaBRAND` varchar(60) NOT NULL,
  `statusBRAND` int(1) NOT NULL,
  `createdateBRAND` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateBRAND` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_brand_rental`
--

INSERT INTO `hoopla_brand_rental` (`idBRAND`, `namaBRAND`, `statusBRAND`, `createdateBRAND`, `updatedateBRAND`) VALUES
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
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_ci_sessions`
--

INSERT INTO `hoopla_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('mlj3ako3sah4oukcfgumsmnuft1c0npq', '::1', 1507724530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732343533303b),
('h0e85jauc9gsvsnklm9cm8t9msdmteo3', '::1', 1507725018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732353031383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('tlujka991su86celsbcs57ck1b88nubh', '::1', 1507725378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732353337383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('jq6tpda2vqrldp5s2hlgotoh53kooamj', '::1', 1507725766, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732353736363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('6bv3mk4264qj5996vs2clq5udp4nibb4', '::1', 1507726068, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732363036383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('pls0p7h52fbhv6n7to8vhscogi25l2t9', '::1', 1507726468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732363436383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('3i0cgbdk2ud66joflp7vs04iehcpsc7a', '::1', 1507726797, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732363739373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('jnc07oej90jirikefptjjmmnpneojbti', '::1', 1507727142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732373134323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1t9i4nhjdf6vk09b0mfrei1fe05anug1', '::1', 1507727585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732373538353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('vjjbgjv8i76qlkskc3k2hsfbnmcvle5m', '::1', 1507728056, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732383035363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('dlnt4l10ii6cma6ia13i0isck8o5ad6e', '::1', 1507728754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732383735343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('n3rkao4rvj6rvbrdij5ltpto9vrp4502', '::1', 1507729777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732393737373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('t7vqorm4mckub7lkk21jefpguarfvmah', '::1', 1508115115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383131353131353b),
('qho1vlse3c5saqv9ulm13imsaq8nldbi', '::1', 1508115516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383131353531363b),
('4dabt2a266h5ns7ipvg5im7igaog5g18', '::1', 1508115516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383131353531363b),
('v549ib3jato283j9bf19b7hd8b02ek8s', '::1', 1508158182, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383135383138323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('m2b2jag4mfflcriarqa3q7jjhto80t3h', '::1', 1508158778, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383135383737383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('fufnpqqntkarbvr8ise23p77161ll4on', '::1', 1508160882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136303838323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('inai6s3378a8vhdb5esci7bfmll3oa58', '::1', 1508161220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136313232303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('mreba5v2p3lkdpmoc07hi72mpf2g7ieu', '::1', 1508161603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136313630333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31373a225465726a616469204b6573616c6168616e223b733a343a2274657874223b733a33393a226d6f686f6e20756c616e676920696e707574616e20666f726d20616e646120646962617761682e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('laeot4niruetqf43b8aactc8dp3clbdh', '::1', 1508162043, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136323034333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('dostvauppfskp519mkab69mt2tb1qc7g', '::1', 1508162359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136323335393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('vsc0vt1n3do4uhfttt1p7hikovahgcth', '::1', 1508164141, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136343134313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('an2auhb9kvt0rcsvttdnfno0fuij98ln', '::1', 1508164755, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136343735353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('1bqnol19g6u3nsu32bd1v25r1ausuuur', '::1', 1508166708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136363730383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('l03039t52irmbrfje7jq30cl4r5bpteb', '::1', 1508167126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136373132363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7r8q21oora2brooev5us20oit56lv756', '::1', 1508167446, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136373434363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ipa2il2so9iro2aubbqfo4ah86bt6he3', '::1', 1508167941, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136373934313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('pla2f6ehrifpk8iaoptgvqbl8vgrgpa8', '::1', 1508168265, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383136383236353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('jig06vvvc08tu9gdt2iembb0pt5e80mk', '::1', 1508202613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383230323631333b),
('9qdlj2i90ejaq6tndr1f83qb8bv407qj', '::1', 1508246161, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234363136313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('tm68sbln9hpi1sln12l8vvu0lqu9e4h8', '::1', 1508246464, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234363436343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('leuh6l4dun61ra46sjjh4eai0dv5df0h', '::1', 1508246784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234363738343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('4t8fucakpm4j2fb5lnkecf22ce9lvhrm', '::1', 1508247110, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234373131303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('nmsf00pb8ub4rpjq7pnh6r5n6a2c6b7f', '::1', 1508247447, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234373434373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('5fo6gag1bn34bsjvoh08u32893kefo9h', '::1', 1508248959, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234383935393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('22lve0do2na1d5e73r7h1o293d1fb3vi', '::1', 1508249446, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234393434363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('96fach3soerd9l475hocp9bpmc94hq7q', '::1', 1508249890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383234393839303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('37rq3ve8ts9l61kfhof9nmac0aos1b1k', '::1', 1508250296, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235303239363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('bbkmjpome7tffr70o1agm958kdesjhd8', '::1', 1508250635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235303633353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('vpc19ufn2p0kghg70ggkj8ud1116opkg', '::1', 1508251157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235313135373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ocoodt310659t1e2qdksdjpfrvl29tee', '::1', 1508254187, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235343138373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('uedknctee8gcfq382c3ln9sl4bfuaepr', '::1', 1508255142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235353134323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('d2qrjtdr5ukdmotj4p7lbleainrkl695', '::1', 1508255531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235353533313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_contact`
--

CREATE TABLE `hoopla_contact` (
  `idCONTACT` int(255) NOT NULL,
  `namaCONTACT` varchar(60) NOT NULL,
  `emailCONTACT` varchar(100) NOT NULL,
  `descriptionCONTACT` text NOT NULL,
  `createdateCONTACT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_contact`
--

INSERT INTO `hoopla_contact` (`idCONTACT`, `namaCONTACT`, `emailCONTACT`, `descriptionCONTACT`, `createdateCONTACT`) VALUES
(1, 'Andhana', 'andhan@gamim.com', 'Lalalallala', '2017-10-05 01:42:38'),
(2, 'Andhana', 'andhan@gamim.com', 'Lalalallala', '2017-10-05 01:43:36'),
(3, 'apa tuh', 'andhana@lala.com', 'is apasoh', '2017-10-05 01:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_menus_admin`
--

CREATE TABLE `hoopla_menus_admin` (
  `idMENU` int(11) NOT NULL,
  `namaMENU` varchar(45) NOT NULL,
  `iconMENU` varchar(45) NOT NULL,
  `functionMENU` varchar(45) NOT NULL,
  `parentMENU` int(11) NOT NULL DEFAULT '0',
  `accessMENU` varchar(11) NOT NULL,
  `orderMENU` int(10) NOT NULL,
  `statusMENU` int(11) NOT NULL DEFAULT '1',
  `createdateMENU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoopla_menus_admin`
--

INSERT INTO `hoopla_menus_admin` (`idMENU`, `namaMENU`, `iconMENU`, `functionMENU`, `parentMENU`, `accessMENU`, `orderMENU`, `statusMENU`, `createdateMENU`) VALUES
(1, 'Dashboard', 'dashboard', 'dashboard', 0, '0', 1, 1, '2017-10-02 09:05:04'),
(2, 'Rental', 'favorite_border', 'rental', 0, '0', 2, 1, '2017-10-02 09:05:21'),
(3, 'Brand Rental', 'loyalty', 'brand_rental', 2, '0', 2, 1, '2017-10-02 09:06:44'),
(4, 'Type Rental', 'loyalty', 'type_rental', 2, '0', 3, 1, '2017-10-02 09:07:27'),
(5, 'Age Rental', 'loyalty', 'age_rental', 2, '0', 4, 1, '2017-10-02 09:08:25'),
(6, 'Sale', 'control_point_duplicate', 'sale', 0, '0', 3, 1, '2017-10-02 09:09:02'),
(7, 'Kategori Sale', 'content_paste', 'category_sale', 6, '0', 2, 1, '2017-10-02 09:09:49'),
(8, 'Trivia', 'library_books', 'trivia', 0, '0', 4, 1, '2017-10-02 09:10:22'),
(9, 'Kategori Triva', 'book', 'category_trivia', 8, '0', 2, 1, '2017-10-02 09:11:01'),
(10, 'Contact', 'rate_review', 'contact', 0, '0', 5, 1, '2017-10-02 09:11:18'),
(11, 'Daftar Rental', 'favorite_border', 'index_product', 2, '0', 1, 1, '2017-10-02 09:36:17'),
(12, 'Daftar Sale', 'control_point_duplicate', 'index_sale', 6, '0', 1, 1, '2017-10-02 09:36:49'),
(13, 'Daftar Trivia', 'library_books', 'index_trivia', 8, '0', 1, 1, '2017-10-02 09:37:12'),
(14, 'Beranda', 'dashboard', 'index_dashboard', 1, '0', 1, 1, '2017-10-02 13:24:50'),
(15, 'Daftar Kontak', 'rate_review', 'index_contact', 10, '0', 1, 1, '2017-10-02 13:26:37'),
(20, 'Tentang', 'textsms', 'about', 0, '0', 1, 1, '2017-10-16 13:15:38'),
(21, 'Daftar', 'textsms', 'index_about', 20, '0', 1, 1, '2017-10-16 13:16:10'),
(22, 'Pemesanan', 'book', 'terms', 0, '0', 1, 1, '2017-10-16 14:28:24'),
(23, 'Cara Pemesanan', 'book', 'index_terms', 22, '0', 1, 1, '2017-10-16 14:28:34'),
(24, 'Cara Titip Sewa', 'book', 'index_terms_cara_titipsewa', 22, '0', 1, 1, '2017-10-16 14:43:57'),
(25, 'Social', 'content_paste', 'social', 0, '0', 1, 1, '2017-10-17 15:45:07'),
(26, 'Daftar', 'content_paste', 'index_social', 25, '', 1, 1, '2017-10-17 15:45:28');

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
-- Table structure for table `hoopla_social`
--

CREATE TABLE `hoopla_social` (
  `idSOCIAL` int(11) NOT NULL,
  `waSOCIAL` varchar(15) NOT NULL,
  `lineSOCIAL` varchar(30) NOT NULL,
  `igSOCIAL` varchar(30) NOT NULL,
  `email1SOCIAL` varchar(40) NOT NULL,
  `email2SOCIAL` varchar(40) NOT NULL,
  `telpSOCIAL` varchar(15) NOT NULL,
  `createdateSOCIAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSOCIAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_social`
--

INSERT INTO `hoopla_social` (`idSOCIAL`, `waSOCIAL`, `lineSOCIAL`, `igSOCIAL`, `email1SOCIAL`, `email2SOCIAL`, `telpSOCIAL`, `createdateSOCIAL`, `updatedateSOCIAL`) VALUES
(1, '085667651688', 'hoopla_rentalmainan', 'hoopla_rentalmainan', 'order@hooplatoyrental.com', 'info@hooplatoyrental.com', '0778 325 253', '2017-10-17 15:47:20', '2017-10-17 15:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_terms`
--

CREATE TABLE `hoopla_terms` (
  `idTERMS` int(11) NOT NULL,
  `title1TERMS` varchar(70) NOT NULL,
  `desc1TERMS` text NOT NULL,
  `title2TERMS` varchar(70) NOT NULL,
  `desc2TERMS` text NOT NULL,
  `title3TERMS` varchar(70) NOT NULL,
  `desc3TERMS` text NOT NULL,
  `title4TERMS` varchar(70) NOT NULL,
  `desc4TERMS` text NOT NULL,
  `harga1TERMS` varchar(20) NOT NULL,
  `place1TERMS` varchar(80) NOT NULL,
  `harga2TERMS` varchar(20) NOT NULL,
  `place2TERMS` varchar(80) NOT NULL,
  `harga3TERMS` varchar(20) NOT NULL,
  `place3TERMS` varchar(80) NOT NULL,
  `createdateTERMS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTERMS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_terms`
--

INSERT INTO `hoopla_terms` (`idTERMS`, `title1TERMS`, `desc1TERMS`, `title2TERMS`, `desc2TERMS`, `title3TERMS`, `desc3TERMS`, `title4TERMS`, `desc4TERMS`, `harga1TERMS`, `place1TERMS`, `harga2TERMS`, `place2TERMS`, `harga3TERMS`, `place3TERMS`, `createdateTERMS`, `updatedateTERMS`) VALUES
(1, 'Order by Whatsapp/Line/SMS', 'Pemesanan dan pengecekan ketersediaan barang dilakukan dengan mengirimkan chat ke admin Hoopla melalui WA, LINE atau SMS.', 'Mengisi formulir pemesanan', 'Setelah melakukan pemesanan melalui chat, Penyewa akan diminta untuk mengisi Form Penyewaan melalui Link yang dikirimkan oleh Hoopla melalui WA, LINE atau SMS. Di dalam Form tersebut, Penyewa akan mengisi data diri dan tipe mainan yang ingin disewa. Tenang, Cuma butuh 1 (satu) menit kok buat mengisi Form Penyewaan Hoopla :)', 'Bayar', 'Setelah Form Penyewaan di submit, Penyewa akan diberi tenggat waktu untuk membayar mainan yang akan disewa.', 'Kami antar mainannya!', 'Hoopla akan memberikan jadwal pengantaran dan mainan siap diantar!', 'Rp 20.000,00', 'Kecamatan Batu Aji, Batu Ampar, Bengkong, Nongsa, Sagulung, Sei Beduk, Sekupang', 'Rp 15.000,00', 'Kecamatan Lubuk Baja', 'Rp 10.000,00', 'Kecamatan Batam Kota', '2017-10-16 14:31:14', '2017-10-16 14:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_terms_caratitip`
--

CREATE TABLE `hoopla_terms_caratitip` (
  `idTERMSTITIP` int(11) NOT NULL,
  `titleTERMSTITIP` varchar(70) NOT NULL,
  `textTERMSTITIP` text NOT NULL,
  `syaratTERMSTITIP` text NOT NULL,
  `caraTERMSTITIP` text NOT NULL,
  `createdateTERMSTITIP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTERMSTITIP` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_terms_caratitip`
--

INSERT INTO `hoopla_terms_caratitip` (`idTERMSTITIP`, `titleTERMSTITIP`, `textTERMSTITIP`, `syaratTERMSTITIP`, `caraTERMSTITIP`, `createdateTERMSTITIP`, `updatedateTERMSTITIP`) VALUES
(1, 'Mau titip barang kamu di Hoopla?', 'Bingung mainan anak mulai menumpuk dan mulai tidak terawat? Yuuk titip sewa di Hoopla, kami akan merawat barang Anda dan membayar Anda.', '<ul>\r\n<li>Kondisi barang sesuai dengan standar mainan di Hoopla.</li>\r\n<li>Diutamakan merek-merek yang premium dengan kondisi barang setidaknya 90% layak pakai.</li>\r\n<li>Titip sewa dilandaskan dengan asas kepercayaan.</li>\r\n</ul>', '<ul>\r\n<li>Kirim data barang (jenis, merek dan kondisi barang) beserta foto detail mainan melalui WA maupun Line.</li>\r\n<li>Hoopla akan menghubungi anda jika barang yang diajukan sesuai dengan standar dan kriteria Hoopla.</li>\r\n<li>Barang akan diantarkan langsung ke alamat Hoopla dalam keadaan bersih untuk dilakukan cek fisik barang secara langsung.</li>\r\n<li>Anda akan menandatangani Kontrak Titip Sewa dengan Hoopla (ditandatangani di atas materai 6000).</li>\r\n<li>Barang yang dititip akan masuk ke dalam Instagram dan Website Hoopla maksimal 3 hari setelah Kontrak Titip Sewa ditandatangani.</li>\r\n<li>Setelah Kontrak ditandatangani, barang yang di titip sewa akan berada dalam kepemilikan sementara Hoopla.</li>\r\n<li>Hoopla akan merawat barang yang dititip sewakan dengan sebaik-baiknya, namun Hoopla tidak bertanggung jawab jika kerusakan ditimbulkan oleh Penyewa.</li>\r\n<li>Anda akan menerima laporan barang pada tanggal 1 (satu) setiap bulannya.</li>\r\n<li>Jika dalam waktu 3 (tiga) bulan barang yang dititip tidak tersewa, maka Hoopla akan mengevaluasi dan berhak mengembalikan barang tersebut kepada Anda sebelum jangka waktu Kontrak berakhir.</li>\r\n</ul>', '2017-10-16 15:33:06', '2017-10-16 15:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_type_rental`
--

CREATE TABLE `hoopla_type_rental` (
  `idTYPE` int(11) NOT NULL,
  `namaTYPE` varchar(70) NOT NULL,
  `statusTYPE` int(1) NOT NULL,
  `createdateTYPE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTYPE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_type_rental`
--

INSERT INTO `hoopla_type_rental` (`idTYPE`, `namaTYPE`, `statusTYPE`, `createdateTYPE`, `updatedateTYPE`) VALUES
(1, 'Cross', 1, '2017-10-02 13:35:06', '0000-00-00 00:00:00'),
(2, 'Crosser', 1, '2017-10-02 13:35:15', '2017-10-02 14:27:22');

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

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_visitor`
--

CREATE TABLE `hoopla_visitor` (
  `idVISITOR` int(11) NOT NULL,
  `ipVISITOR` varchar(18) NOT NULL,
  `dateVISITOR` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_visitor`
--

INSERT INTO `hoopla_visitor` (`idVISITOR`, `ipVISITOR`, `dateVISITOR`) VALUES
(1, '::1', '2017-10-11'),
(2, '::1', '2017-10-16'),
(3, '::1', '2017-10-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoopla_about`
--
ALTER TABLE `hoopla_about`
  ADD PRIMARY KEY (`idABOUT`);

--
-- Indexes for table `hoopla_age_rental`
--
ALTER TABLE `hoopla_age_rental`
  ADD PRIMARY KEY (`idAGE`);

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
-- Indexes for table `hoopla_brand_rental`
--
ALTER TABLE `hoopla_brand_rental`
  ADD PRIMARY KEY (`idBRAND`);

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
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `hoopla_contact`
--
ALTER TABLE `hoopla_contact`
  ADD PRIMARY KEY (`idCONTACT`);

--
-- Indexes for table `hoopla_menus_admin`
--
ALTER TABLE `hoopla_menus_admin`
  ADD PRIMARY KEY (`idMENU`);

--
-- Indexes for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  ADD PRIMARY KEY (`idTRIVIA`);

--
-- Indexes for table `hoopla_social`
--
ALTER TABLE `hoopla_social`
  ADD PRIMARY KEY (`idSOCIAL`);

--
-- Indexes for table `hoopla_terms`
--
ALTER TABLE `hoopla_terms`
  ADD PRIMARY KEY (`idTERMS`);

--
-- Indexes for table `hoopla_terms_caratitip`
--
ALTER TABLE `hoopla_terms_caratitip`
  ADD PRIMARY KEY (`idTERMSTITIP`);

--
-- Indexes for table `hoopla_type_rental`
--
ALTER TABLE `hoopla_type_rental`
  ADD PRIMARY KEY (`idTYPE`);

--
-- Indexes for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  ADD PRIMARY KEY (`idADMIN`);

--
-- Indexes for table `hoopla_visitor`
--
ALTER TABLE `hoopla_visitor`
  ADD PRIMARY KEY (`idVISITOR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoopla_about`
--
ALTER TABLE `hoopla_about`
  MODIFY `idABOUT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_age_rental`
--
ALTER TABLE `hoopla_age_rental`
  MODIFY `idAGE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hoopla_barang_rental`
--
ALTER TABLE `hoopla_barang_rental`
  MODIFY `idRENTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hoopla_barang_sale`
--
ALTER TABLE `hoopla_barang_sale`
  MODIFY `idSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_brand_rental`
--
ALTER TABLE `hoopla_brand_rental`
  MODIFY `idBRAND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hoopla_category_sale`
--
ALTER TABLE `hoopla_category_sale`
  MODIFY `idCATSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hoopla_category_trivia`
--
ALTER TABLE `hoopla_category_trivia`
  MODIFY `idCATTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_contact`
--
ALTER TABLE `hoopla_contact`
  MODIFY `idCONTACT` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_menus_admin`
--
ALTER TABLE `hoopla_menus_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  MODIFY `idTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_social`
--
ALTER TABLE `hoopla_social`
  MODIFY `idSOCIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_terms`
--
ALTER TABLE `hoopla_terms`
  MODIFY `idTERMS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_terms_caratitip`
--
ALTER TABLE `hoopla_terms_caratitip`
  MODIFY `idTERMSTITIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_type_rental`
--
ALTER TABLE `hoopla_type_rental`
  MODIFY `idTYPE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_visitor`
--
ALTER TABLE `hoopla_visitor`
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
