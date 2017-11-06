-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 03:51 PM
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
-- Table structure for table `hoopla_age_join_rental`
--

CREATE TABLE `hoopla_age_join_rental` (
  `idAGEJOINRENTAL` int(11) NOT NULL,
  `idRENTAL` int(11) NOT NULL,
  `idAGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_age_join_rental`
--

INSERT INTO `hoopla_age_join_rental` (`idAGEJOINRENTAL`, `idRENTAL`, `idAGE`) VALUES
(2, 1, 2),
(4, 3, 1),
(5, 3, 2),
(7, 4, 1);

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
  `namaRENTAL` varchar(70) NOT NULL,
  `harga2RENTAL` varchar(50) NOT NULL,
  `harga4RENTAL` varchar(50) NOT NULL,
  `descriptionRENTAL` text NOT NULL,
  `createdateRENTAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateRENTAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusRENTAL` int(1) NOT NULL,
  `popularRENTAL` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_barang_rental`
--

INSERT INTO `hoopla_barang_rental` (`idRENTAL`, `idBRAND`, `idTYPE`, `namaRENTAL`, `harga2RENTAL`, `harga4RENTAL`, `descriptionRENTAL`, `createdateRENTAL`, `updatedateRENTAL`, `statusRENTAL`, `popularRENTAL`) VALUES
(1, 1, 1, 'Stroller Babys dan Mainan Lain', '12000', '23000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-09-26 13:58:43', '2017-11-06 09:27:04', 1, 1),
(3, 2, 2, 'Bekal Bayi Minion', '16000', '28000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-09-27 13:16:55', '2017-11-06 13:08:56', 1, 0),
(4, 1, 2, 'Lego Sakti', '64000', '124000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequato.', '2017-10-04 13:23:34', '2017-11-04 03:36:59', 1, 1);

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
('vtmbomvrqdj15ula1bleqc3s6qva3u1k', '::1', 1508639037, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383633393033373b),
('qfmengrlrfdpag0d85i6ju6eckopom63', '::1', 1508639380, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383633393338303b6e6f7469665f6c6573735f7468616e5f335f6368617261637465727c613a323a7b733a353a227469746c65223b733a353a224d6161662c223b733a343a2274657874223b733a37323a2270656e63617269616e20616e6461206b7572616e67206461726920332068757275662c2073696c616b616e206d656c616b756b616e2070656e63617269616e206b656d62616c692e223b7d5f5f63695f766172737c613a313a7b733a32373a226e6f7469665f6c6573735f7468616e5f335f636861726163746572223b733a333a226f6c64223b7d),
('9dqh1vij15kf4346evckj7npjlqo5344', '::1', 1508639766, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383633393736363b),
('tgld4ruc48vfs891l1hpjva9hgh8aadm', '::1', 1508640096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634303039363b),
('q592d401m0b853i899n18lkbne5186cg', '::1', 1508640661, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634303636313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('4ce9ngb06fqhvq3kn5b1jvoi6fgbgrk9', '::1', 1508641337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634313333373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('snvcs33ni8lme1rgcri2lof98q3us4m5', '::1', 1508641704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634313730343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('d6h6r87ko0633jhf3umtktbqb1j2l9tk', '::1', 1508642148, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634323134383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('3g47ipc1l3o4pgrlatm2asbtdvf9il76', '::1', 1508642551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634323535313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ep98f6mvtmak0ba8agjme1to4cs2olqk', '::1', 1508643096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634333039363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('pflfgvn7lvc2bm29uprp9nl8gg6tj881', '::1', 1508643417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634333431373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('rkpmmimarpk84p4u6ddomc7ca3otkn24', '::1', 1508644489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634343438393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('kii8e3370oph92n1lbthpqinv5cja4rc', '::1', 1508644813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634343831333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33373a2250656e676861707573616e2047616d62617220626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('772bsfektrusv8h4suifocng7d3tskfa', '::1', 1508645168, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634353136383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('528m4lntsuqiqc2m1ebfrdlmkhu7m32m', '::1', 1508645470, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634353437303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('u4ppknkd1l4n43amfl5nd5l60kvsvtud', '::1', 1508645774, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634353737343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('5u5nsr41fpnss0bjcschkmlgqlp3dnbm', '::1', 1508646244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634363234343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('p1rpdt4lmg99ve5tjpjhn96q5jga1f42', '::1', 1508646561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634363536313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('91ht5cgl7njqn1ronu6ju9vqg82qgp8c', '::1', 1508646924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634363932343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('m9m09siq2mug7dgc97k23hj2tqo76npn', '::1', 1508647269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383634373236393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('a9o1lo466n8gobvd2q68ujmdobalue2r', '::1', 1509766531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393736363533313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('jusg13r5ue0vc8nrgarcei532cvliacr', '::1', 1509766944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393736363934343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('gp2th6o97bdo201btf6qfrpk6p57kqfq', '::1', 1509767882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393736373838323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('f8htmd4rf38835tunffjg1tjfm5e6896', '::1', 1509771126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393737313132363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('587sfsg35lmpdiq63advqmlq6md1udtk', '::1', 1509771126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393737313132363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('mko9r1s9g44aml1km5bsqd6j97p26akl', '::1', 1509959200, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393935393230303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('lknc6o0sa9h6u27rt2n3tulagrm4g1rq', '::1', 1509959504, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393935393530343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('d54id6e2o4fltci2frjiktoj7p3u1o6i', '::1', 1509959835, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393935393833353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31373a225465726a616469204b6573616c6168616e223b733a343a2274657874223b733a33393a226d6f686f6e20756c616e676920696e707574616e20666f726d20616e646120646962617761682e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('3i4fllqh22tubv9bil52fm8hv02oop5j', '::1', 1509960142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393936303134323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31373a225465726a616469204b6573616c6168616e223b733a343a2274657874223b733a33393a226d6f686f6e20756c616e676920696e707574616e20666f726d20616e646120646962617761682e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('spjltg2vaect1beogdgi9bkhnbqj6p7g', '::1', 1509960590, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393936303539303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('ealalu4r2ai948f7tjjhjqhmccutb7oi', '::1', 1509960961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393936303936313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1iman0cn6bsdrdu3cjjut226hh178t3a', '::1', 1509961379, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393936313337393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('lb1902fvkm7kd73g213oh30e2ic5o7i6', '::1', 1509961395, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393936313337393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('36qrrnmr0k1ln610gguudpqvpj1agch6', '::1', 1509969394, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393936393339343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('rhh9n60ti9r2fdjg68u3r01abluvk2g5', '::1', 1509970138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937303133383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('fuc2l7dqfvvvd4qt5b63igprqr2ojj1a', '::1', 1509971578, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937313537383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('u3htibphu0htladu65ideivj2feqvrhm', '::1', 1509971941, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937313934313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7586b7um1rtho5kokjg1p72ootf28bhc', '::1', 1509972245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937323234353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('svf49nodffdcngsiueo1ctal4ritnmdc', '::1', 1509972599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937323539393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('46ser616ue6ird0gcthcima3f1edllq5', '::1', 1509972945, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937323934353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('u44pb8qf1jb3ik01s7jmnv9dimqi5nfp', '::1', 1509973436, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937333433363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('s2aud69k1c4c8ue42o8hnh28sqibedvb', '::1', 1509973890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937333839303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('rlm69h2op7gg3gna644var2vj5lhi6b0', '::1', 1509974317, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937343331373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('vs4eofhp4otajdfv27qokuqapi8k83ir', '::1', 1509975097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937353039373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('mq16pvmm0brr5gsg78gkqpblo349cs64', '::1', 1509975489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937353438393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('sm8dqbir5ldmd7f7lpq1sg45mu0tu9so', '::1', 1509975868, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937353836383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('iq8ok84u00sqvjvcd2fa1q14bgfudhsg', '::1', 1509976622, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937363632323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('97e21sliqgq5qkksumpjk94hn0jk7nir', '::1', 1509976948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937363934383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('51k3n5en1ltovk6b7fqschnsvqjhm2me', '::1', 1509977497, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937373439373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('os4jqkk29h0i11h0ecabj73lgjkou42r', '::1', 1509978148, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937383134383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('tvibhbs7h96n8urc3nb29uo6pfkd6j3i', '::1', 1509978456, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937383435363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('m60mvvr6avl2o25jd9erhha3j1999dft', '::1', 1509978768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937383736383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('a4p2f8eb022ku1kr1vokkvaneb314btk', '::1', 1509979077, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937393037373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('hjckt0eoj2mk6mkquvumqoler3sb3kd5', '::1', 1509979384, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937393338343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('acn6fq368sci9buavcet1uek9rktn9k1', '::1', 1509979850, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937393835303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('rapi5mpu04o50j42kahgprk6db9tmkqc', '::1', 1509979851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393937393835303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b);

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
(26, 'Daftar', 'content_paste', 'index_social', 25, '0', 1, 1, '2017-10-17 15:45:28'),
(27, 'Slider', 'slideshow', 'slider', 0, '0', 1, 1, '2017-10-22 03:53:50'),
(28, 'Daftar', 'slideshow', 'index_slider', 27, '0', 1, 1, '2017-10-22 03:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_post_trivia`
--

CREATE TABLE `hoopla_post_trivia` (
  `idTRIVIA` int(11) NOT NULL,
  `titleTRIVIA` varchar(70) NOT NULL,
  `idCATTRIVIA` int(11) NOT NULL,
  `descriptionTRIVIA` text NOT NULL,
  `featuredTRIVIA` int(1) NOT NULL DEFAULT '0',
  `createdateTRIVIA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTRIVIA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusTRIVIA` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_post_trivia`
--

INSERT INTO `hoopla_post_trivia` (`idTRIVIA`, `titleTRIVIA`, `idCATTRIVIA`, `descriptionTRIVIA`, `featuredTRIVIA`, `createdateTRIVIA`, `updatedateTRIVIA`, `statusTRIVIA`) VALUES
(3, 'Bagaimana membesarkan anak yang hilang 1 mata-nya?', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2017-09-28 15:07:32', '2017-10-22 04:44:32', 1),
(4, 'Tips & Trick Melihat anak kita lucu atau tidak', 1, 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2017-10-22 04:30:37', '2017-10-22 04:43:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_slider`
--

CREATE TABLE `hoopla_slider` (
  `idSLIDER` int(11) NOT NULL,
  `titleSLIDER` varchar(50) NOT NULL,
  `descSLIDER` varchar(120) NOT NULL,
  `linkSLIDER` varchar(255) NOT NULL,
  `createdateSLIDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSLIDER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_slider`
--

INSERT INTO `hoopla_slider` (`idSLIDER`, `titleSLIDER`, `descSLIDER`, `linkSLIDER`, `createdateSLIDER`, `updatedateSLIDER`) VALUES
(1, 'Selamat datang di dunia Hoopla!', 'Pusatnya sewa perlengkapan dan mainan bayi dan anak di kota Batam', '#', '2017-10-22 03:56:20', '0000-00-00 00:00:00'),
(2, 'Don\'t be strangers', 'Follow IG kami @hoopla_rentalmainan dan mari berteman', '#', '2017-10-22 03:57:07', '0000-00-00 00:00:00'),
(3, 'Kalo bisa sewa, <br> kenapa harus beli?', 'Temukan kenapa menyewa adalah pilihan terbaik saat ini', '#', '2017-10-22 03:57:45', '0000-00-00 00:00:00'),
(4, 'Tidak ada di list kami?', 'Well, silakan beritahu kami, dan akan kami sediakan untuk kamu', '#', '2017-10-22 03:58:28', '0000-00-00 00:00:00'),
(6, 'Cara pemesanan gampang.', 'Cukup dengan 4 langkah mudah, dan kamu sudah bisa menyewa semuanya di Hoopla.', '#', '2017-10-22 04:01:13', '0000-00-00 00:00:00');

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
(3, '::1', '2017-10-17'),
(4, '::1', '2017-10-18'),
(5, '::1', '2017-10-22'),
(6, '::1', '2017-11-04'),
(7, '::1', '2017-11-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoopla_about`
--
ALTER TABLE `hoopla_about`
  ADD PRIMARY KEY (`idABOUT`);

--
-- Indexes for table `hoopla_age_join_rental`
--
ALTER TABLE `hoopla_age_join_rental`
  ADD PRIMARY KEY (`idAGEJOINRENTAL`);

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
-- Indexes for table `hoopla_slider`
--
ALTER TABLE `hoopla_slider`
  ADD PRIMARY KEY (`idSLIDER`);

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
-- AUTO_INCREMENT for table `hoopla_age_join_rental`
--
ALTER TABLE `hoopla_age_join_rental`
  MODIFY `idAGEJOINRENTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  MODIFY `idTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hoopla_slider`
--
ALTER TABLE `hoopla_slider`
  MODIFY `idSLIDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
