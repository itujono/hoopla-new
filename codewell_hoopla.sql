-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 03:17 AM
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
(1, 1, 1, 1, 'Stroller Babys', '12000', '0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-09-26 13:58:43', '2017-10-04 13:10:16', 0),
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
(3, 'Mainan untuk mama', 'Santoryu', '1600000', 'Mainan untuk mama.', 1, '2017-09-28 14:51:42', '2017-10-04 01:16:16', 1);

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
('n3rkao4rvj6rvbrdij5ltpto9vrp4502', '::1', 1507729777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373732393737373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b);

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
(16, 'Titip Sewa', 'supervisor_account', 'titipsewa', 0, '0', 6, 1, '2017-10-04 15:03:12'),
(17, 'Daftar', 'supervisor_account', 'index_titipsewa', 16, '0', 1, 1, '2017-10-04 15:03:28'),
(18, 'Sewa Mainan', 'nfc', 'sewabarang', 0, '0', 7, 1, '2017-10-05 00:58:22'),
(19, 'Daftar', 'nfc', 'index_sewabarang', 18, '0', 1, 1, '2017-10-05 00:58:35');

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
-- Table structure for table `hoopla_sewa_barang`
--

CREATE TABLE `hoopla_sewa_barang` (
  `idSEWA` int(11) NOT NULL,
  `namaSEWA` varchar(100) NOT NULL,
  `alamatSEWA` text NOT NULL,
  `telpSEWA` varchar(20) NOT NULL,
  `barangSEWA` varchar(80) NOT NULL,
  `antarjemputSEWA` varchar(100) NOT NULL,
  `instagramSEWA` varchar(70) NOT NULL,
  `periodeSEWA` varchar(20) NOT NULL,
  `pengirimanSEWA` varchar(80) NOT NULL,
  `rekomenSEWA` varchar(80) NOT NULL,
  `ketahuiSEWA` varchar(60) NOT NULL,
  `permintaanSEWA` text NOT NULL,
  `syaratSEWA` int(1) NOT NULL,
  `createdateSEWA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_sewa_barang`
--

INSERT INTO `hoopla_sewa_barang` (`idSEWA`, `namaSEWA`, `alamatSEWA`, `telpSEWA`, `barangSEWA`, `antarjemputSEWA`, `instagramSEWA`, `periodeSEWA`, `pengirimanSEWA`, `rekomenSEWA`, `ketahuiSEWA`, `permintaanSEWA`, `syaratSEWA`, `createdateSEWA`) VALUES
(1, 'Andhana', 'Tiban mesta blok s', '08566688840', 'Lego Sakti', 'Sekupang', 'andhanautama', '2 minggu', '12 September 2017', 'saya sendiri', 'Instagram', 'Lalala aland', 1, '2017-10-05 00:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_titip_sewa`
--

CREATE TABLE `hoopla_titip_sewa` (
  `idTITIP` int(11) NOT NULL,
  `namaTITIP` varchar(100) NOT NULL,
  `emailTITIP` varchar(120) NOT NULL,
  `telpTITIP` varchar(20) NOT NULL,
  `merekTITIP` varchar(150) NOT NULL,
  `kondisiTITIP` int(1) NOT NULL,
  `tipeTITIP` varchar(20) NOT NULL,
  `syaratTITIP` int(1) NOT NULL,
  `createdateTITIP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_titip_sewa`
--

INSERT INTO `hoopla_titip_sewa` (`idTITIP`, `namaTITIP`, `emailTITIP`, `telpTITIP`, `merekTITIP`, `kondisiTITIP`, `tipeTITIP`, `syaratTITIP`, `createdateTITIP`) VALUES
(1, 'Andhana', 'mamatjualtomat@gmail.com', '08566688840', 'Comotomo', 1, 'Pakaian/Fashion', 1, '2017-10-04 14:48:59');

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
(1, '::1', '2017-10-11');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `hoopla_sewa_barang`
--
ALTER TABLE `hoopla_sewa_barang`
  ADD PRIMARY KEY (`idSEWA`);

--
-- Indexes for table `hoopla_titip_sewa`
--
ALTER TABLE `hoopla_titip_sewa`
  ADD PRIMARY KEY (`idTITIP`);

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
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  MODIFY `idTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_sewa_barang`
--
ALTER TABLE `hoopla_sewa_barang`
  MODIFY `idSEWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_titip_sewa`
--
ALTER TABLE `hoopla_titip_sewa`
  MODIFY `idTITIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
