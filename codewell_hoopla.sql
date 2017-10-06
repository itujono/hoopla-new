-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 03:15 AM
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
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoopla_ci_sessions`
--

INSERT INTO `hoopla_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('djefknmqatetfv9fam8ta16kbcmaalb9', '::1', 1507217007, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373231363939333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('q48iftu59psidet1lurodg73dtg8gmql', '::1', 1507216648, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373231363634383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('l69odlq83j0dq96b1fvasi3sct93td4n', '::1', 1507216993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373231363939333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('8s4fj66gm9e2cdk936lpl91eo0tn7svl', '::1', 1507216296, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373231363239363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a383a2257656c636f6d6521223b733a343a2274657874223b733a33393a2248616c6c6f2c2053656c616d617420646174616e672061646d696e4061646d696e2e636f6d2021223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('ibptaheb6ve62s4b75dgda31h055t3kp', '::1', 1507167741, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373136373734313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a323a7b733a353a227469746c65223b733a32303a22546572696d61206b617369682062616e79616b21223b733a343a2274657874223b733a37323a22466f726d20737564616820626572686173696c2064697375626d69742e20416b616e206b616d69206c696861742064616e2070726f73657320736563657061746e79612c2079612e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('olcldkrk3ig44f4d3qsv9iua2fardhhr', '::1', 1507167935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373136373734313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a323a7b733a353a227469746c65223b733a32303a22546572696d61206b617369682062616e79616b21223b733a343a2274657874223b733a37323a22466f726d20737564616820626572686173696c2064697375626d69742e20416b616e206b616d69206c696861742064616e2070726f73657320736563657061746e79612c2079612e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('kjonoi1ae0o4trf1i6rmoeugkteimkm0', '::1', 1507167323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373136373332333b),
('hf7er1s8picor1g9g63eama0mgth6cpd', '::1', 1507165133, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373136353133333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('eo3c84qssb1gjhacodm22mranpv9n4cs', '::1', 1507166005, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373136363030353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('bag8h2q0gn68nk8prmcohfe6a95650n5', '::1', 1507166477, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373136363437373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('9316mtm2kmtc2a39gbvlvfp91edu2t9r', '::1', 1507164665, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373136343636353b6d6573736167657c613a313a7b733a343a2274657874223b733a37353a224d61616620536573756174752074656c6168207465726a6164692c206d6f686f6e20756c616e676920696e707574616e20666f726d2074697469702064616e207365776120616e6461212e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('8360c2rbu4dg5e334agiendhjllgsk4f', '::1', 1507132244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373133323234343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7g0kicen7e9u5cd3gqfpp8ap7nm1r8ar', '::1', 1507132294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373133323234343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a313a7b733a343a2274657874223b733a37353a224d61616620536573756174752074656c6168207465726a6164692c206d6f686f6e20756c616e676920696e707574616e20666f726d2074697469702064616e207365776120616e6461212e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('dtbfs33fu79h15e0mn1r2gn9nv7anklo', '::1', 1507130583, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373133303538333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('lbeehvqirbmlt6aqeiabbcifb5ati5rh', '::1', 1507128819, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132383831393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a313a7b733a343a2274657874223b733a3133323a22546572696d61206b61736968207375646168206d656e6769736920666f726d2054697469702064616e2053657761204d61696e616e2079616e672074656c6168206b616d692073656469616b616e2c206b616d6920616b616e20736563657061746e7961206d656e67687562756e676920616e64612c20546572696d61204b6173696821223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('mbjps95j3v3d9n9trln39gh8jsf36dbb', '::1', 1507129729, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132393732393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('f77dc4p95frjkscdve3n111g20ujmnov', '::1', 1507127914, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132373931343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('af0n59btsjtioanvlc528mj2hafa1400', '::1', 1507128298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132383239383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1kea28f0n89ld3302fe66906dqaisp9j', '::1', 1507126378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132363337383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('qqfef12obbr728v55crcnc68riat2kbj', '::1', 1507126703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132363730333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('84838ihaile2caelpv5nv6bmjgp3gj0g', '::1', 1507125098, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132353039383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('0rpu2bmf7kkp8br37hvj4ei4jk0dq6ec', '::1', 1507126028, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132363032383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('kofhq1k8v8n82vjdbo52qpjp9qe459d0', '::1', 1507123054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132333035343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('i5587q955f9lcck4ituvbsjte3qvqsah', '::1', 1507123414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132333431343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('a9hsm0fdp6fbrd04nubudc6ip7hlef2a', '::1', 1507122746, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132323734363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('crkseq3n86141p5incmnqbotjp89b90g', '::1', 1507122442, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132323434323b),
('v6pv2k78c0sgu2ntur1it1oinc0vunma', '::1', 1507121805, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132313830353b),
('do28olvoho5lmfhmn9hl5s7t8d9iomlq', '::1', 1507122108, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132323130383b),
('up2opu898k14041abosnfv6capk7ouco', '::1', 1507120798, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132303739383b),
('6im7qttoelu9d5balus6ik7jkijksm81', '::1', 1507121401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373132313430313b),
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
