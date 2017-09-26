-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 05:28 AM
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
  `hargaRENTAL` varchar(50) NOT NULL,
  `durasiRENTAL` varchar(40) NOT NULL,
  `descriptionRENTAL` text NOT NULL,
  `idCATEGORY` int(11) NOT NULL,
  `createdateRENTAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateRENTAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusRENTAL` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('jnr430ch52ud3197n5mfkptp6m6goicm', '::1', 1506347610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363334373631303b),
('1amgrv2csslj2g5ou82epflr6629vuvp', '::1', 1506347967, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363334373936373b),
('tsftqf6h2k28imkap6cta76l0fuv1rv9', '::1', 1506348008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363334373936373b),
('r5i6gbga24ahnglet23pad2e23fgdact', '::1', 1506386918, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363338363931383b),
('u8215d2vhah7shp9bq992kknms6i3ork', '::1', 1506387225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363338373232353b),
('80r82fk8iaupgtbbts1kks2n2u5b5goi', '::1', 1506390517, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339303531373b),
('rrt6l91b5misa87ug8ghq20idj9f20f8', '::1', 1506390901, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339303930313b),
('mq6lggel1kdf3h7f34vhfkh18lu113n5', '::1', 1506391219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339313231393b),
('54622kufo8jepau43u74arom99ji5hvq', '::1', 1506392187, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339323138373b),
('jupm6ta7fnjluh2tdcfrp6kpdfqsl6sd', '::1', 1506393630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339333633303b),
('k83cgnsjsk6iiqaj0hnha7icgvtfgq9q', '::1', 1506393963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339333936333b),
('iv8sic9p30ksu3465nan8efh7d1msnm6', '::1', 1506394458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339343435383b),
('9evf6uafirkvs768sq4ocld0tgni7oj6', '::1', 1506394826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339343832363b),
('d61aeb9ffon1hvf2sn21bbqq9tn295v6', '::1', 1506395188, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339353138383b),
('2tq73ol07dlee83ns3kd9jkifj0js77r', '::1', 1506396022, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339363032323b),
('lc21aagj7adq90aq2q128mvkjjo6pign', '::1', 1506396308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363339363032323b);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `hoopla_barang_rental`
--
ALTER TABLE `hoopla_barang_rental`
  ADD PRIMARY KEY (`idRENTAL`);

--
-- Indexes for table `hoopla_category_rental`
--
ALTER TABLE `hoopla_category_rental`
  ADD PRIMARY KEY (`idCATEGORY`);

--
-- Indexes for table `hoopla_ci_sessions`
--
ALTER TABLE `hoopla_ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

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
  MODIFY `idRENTAL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoopla_category_rental`
--
ALTER TABLE `hoopla_category_rental`
  MODIFY `idCATEGORY` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
