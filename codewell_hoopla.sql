-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 04:22 AM
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
  `hargaRENTAL` varchar(50) NOT NULL,
  `durasiRENTAL` varchar(40) NOT NULL,
  `descriptionRENTAL` text NOT NULL,
  `createdateRENTAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateRENTAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusRENTAL` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_barang_rental`
--

INSERT INTO `hoopla_barang_rental` (`idRENTAL`, `idBRAND`, `idTYPE`, `idAGE`, `namaRENTAL`, `hargaRENTAL`, `durasiRENTAL`, `descriptionRENTAL`, `createdateRENTAL`, `updatedateRENTAL`, `statusRENTAL`) VALUES
(1, 1, 1, 1, 'Stroller Babys', '42000', '4 Minggu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-09-26 13:58:43', '2017-10-02 13:32:44', 0),
(3, 2, 2, 2, 'Bekal Bayi Minion', '56000', '4 Minggu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-09-27 13:16:55', '2017-10-02 13:32:47', 0);

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
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoopla_ci_sessions`
--

INSERT INTO `hoopla_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('csms3g3l9l4bb85v4mqjii3rf71uuan5', '::1', 1507083598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373038333539343b),
('mobqj0ipvotluuto8p06g8toc5mlrce3', '::1', 1507083289, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373038333238393b),
('vfqcjbpqo4rokssg0vl3vjdtb397nkkl', '::1', 1507083594, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373038333539343b),
('d3n5mokje6dt0gi92p0jjnef270v8kcc', '::1', 1507080322, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373038303332323b),
('9dkoe3rr4t3mppnd6gk1u3cttlm71c0j', '::1', 1507081084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373038313038343b),
('vua8df4qi1s932f7dnnp4vrfjid1eblo', '::1', 1507082970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373038323937303b),
('aftomrqkhkufbpbdqf9f0af3c6ol4464', '::1', 1507079385, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373037393338353b),
('r6pluq0ehmgp7bnr76efoiccqln6mooa', '::1', 1507079691, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373037393639313b),
('mgbnm0p2fg5499e4dm489o2q0b1uqibu', '::1', 1507080021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373038303032313b),
('n2obkiudnm3bd9trdshenmbkv6tt9oq1', '::1', 1506957372, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935373337323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('0crtsj7djeu6ctflsk6d8sgsn78kvo52', '::1', 1506957740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935373733363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('k72v3q5c5cj5qraqn5nq5hpl4h0o5it1', '::1', 1506957736, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935373733363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ljr5hb23j0u4jk9m80vign0djuqoq5gr', '::1', 1506956676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935363637363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ufoqvpmvrmigfa4vob5u12g0binducgm', '::1', 1506957070, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935373037303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('j2tid4lg1tr4736spinag8idjug5tahe', '::1', 1506956362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935363336323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('v43n9bt80avoeprsko4r6mpi4goblanq', '::1', 1506955253, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935353235333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('khd851b5b38ie83h5oc3g0atjl8e9fjr', '::1', 1506956055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935363035353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('5kagq82uuuq6e6vgdvdep4uko91nqsh9', '::1', 1506954927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935343932373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('d6jod4f0rhio5iti7pm8a3n97krsbfua', '::1', 1506947151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363934373135313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ksed0jl3ckqlfn3igufrq8j12s1knpui', '::1', 1506947693, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363934373639333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('4gnogq50lcelkjf4nqk3m69i2cc4o1m2', '::1', 1506948165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363934383136353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('pa3kdg7vhtoe1hgmh67vd0jnfkv9iieu', '::1', 1506948475, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363934383437353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('l19cs3nruei89sd3io19o1qp2c0p2q8h', '::1', 1506948910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363934383931303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('30pcpqofvl2v29rkd3d547sa1p6bnli5', '::1', 1506949619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363934393631393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('52kits1v739qcd7inmd4dbjug2g0askp', '::1', 1506950027, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935303032373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('t7jtvouc5bqdt6vql4knm0jfiecphpum', '::1', 1506950346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935303334363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('v3fhbd4aknbqarq5d71q8m0oe9o5k9ie', '::1', 1506950652, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935303635323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('pfmvpote619ncfe9d17m5g30s4gv5nu8', '::1', 1506953327, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935333332373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('c9gblgpksejgsk0t8re0nhkf5tn8u8sj', '::1', 1506953924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935333932343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('2uki5gclvvbu90pe6ed7eh7toft6ofbr', '::1', 1506954270, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363935343237303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b);

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
(1, 'Afriazid', 'azod@gmail.com', 'Test lagi wak!', '2017-10-01 11:32:58');

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
(10, 'Contact', 'contact_mail', 'contact', 0, '0', 5, 1, '2017-10-02 09:11:18'),
(11, 'Daftar Rental', 'favorite_border', 'index_product', 2, '0', 1, 1, '2017-10-02 09:36:17'),
(12, 'Daftar Sale', 'control_point_duplicate', 'index_sale', 6, '0', 1, 1, '2017-10-02 09:36:49'),
(13, 'Daftar Trivia', 'library_books', 'index_trivia', 8, '0', 1, 1, '2017-10-02 09:37:12'),
(14, 'Beranda', 'dashboard', 'index_dashboard', 1, '', 1, 1, '2017-10-02 13:24:50'),
(15, 'Daftar Kontak', 'contact_mail', 'index_contact', 10, '', 1, 1, '2017-10-02 13:26:37');

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `idRENTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `idCONTACT` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_menus_admin`
--
ALTER TABLE `hoopla_menus_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  MODIFY `idTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
