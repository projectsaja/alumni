-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 02:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `tahun` int(11) NOT NULL,
  `namaperusahaan` varchar(50) NOT NULL,
  `alamatperusahaan` varchar(75) NOT NULL,
  `teleponperusahaan` varchar(15) NOT NULL,
  `posisikerja` varchar(20) NOT NULL,
  `kerjadibidang` varchar(25) NOT NULL,
  `sesuaibidang` varchar(10) NOT NULL,
  `saranalumni` varchar(160) NOT NULL,
  `namapengguna` varchar(20) NOT NULL,
  `kerjadiposisi` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `saranpengguna` varchar(160) NOT NULL,
  `skill1` varchar(15) NOT NULL,
  `skill2` varchar(15) NOT NULL,
  `skill3` varchar(15) NOT NULL,
  `skill4` varchar(15) NOT NULL,
  `skill5` varchar(15) NOT NULL,
  `skill6` varchar(15) NOT NULL,
  `skill7` varchar(15) NOT NULL,
  `bukti` varchar(75) NOT NULL,
  `alumni_id` varchar(20) NOT NULL,
  `Emailmanager` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`tahun`, `namaperusahaan`, `alamatperusahaan`, `teleponperusahaan`, `posisikerja`, `kerjadibidang`, `sesuaibidang`, `saranalumni`, `namapengguna`, `kerjadiposisi`, `email`, `saranpengguna`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `skill7`, `bukti`, `alumni_id`, `Emailmanager`) VALUES
(2017, 'Microsoft Corporated', 'Jln. New York City', '977001002', 'IT Analystic', 'Informatic Enginering', 'IT', 'Banyakin Project', 'BW dev', 'IT Analystic', 'rizkisetiawan.root@gmail.com', 'Banyakin Project', '', '', '', '', '', '', '', 'Project Manager Approval', 'ajdakjdak', NULL),
(2016, 'Microsof Corporation', 'New York City', '0022774836938', 'Lead Software', 'Update Software', 'Y', 'Banyakin Latihan Lagi', 'oke-google', 'Project Manager', 'shinichirizki@yahoo.com', 'idem atas tadi', 'SB', 'SB', 'SB', 'SB', 'SB', 'SB', 'SB', 'Approval Manager', 'id_00123', NULL),
(2016, 'Microsof Corporation', 'New York City', '0022774836938', 'Lead Software', 'Update Software', 'Y', 'Banyakin Latihan Lagi', 'oke-google', 'Project Manager', 'shinichirizki@yahoo.com', 'idem atas tadi', 'SB', 'SB', 'SB', 'SB', 'SB', 'SB', 'SB', 'Approval Manager', 'id_01097', NULL),
(2016, 'oke', 'yaa ini', '000', 'analys', 'IT', 'Y', 'banyak project', 'Ini aku mana kamu', 'manageer', 'bagusekoprasetyo97@gmail.com', 'oke', 'SB', 'SB', 'SB', 'SB', 'SB', 'SB', 'SB', 'okejaya', 'sergio.angga.sa@gmai', 'Approval Manager');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('ikky', 'OKEGOOGLE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
