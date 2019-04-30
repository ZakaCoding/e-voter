-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2019 at 02:41 PM
-- Server version: 8.0.15
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_voter`
--

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `id_pilihan` int(5) NOT NULL,
  `pilih` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `username`, `nama`, `password`) VALUES
(1234, '', 'admin', '1234'),
(145790, 'dude', 'Yogi K', '$2y$10$1ZJy0vIeb4tv9F7zdx404ejbUx8pyIInAm1ZgRhNPV0xjzxwlt9yO'),
(967321, 'dhani', 'dhani', '$2y$10$lTwQ2bwgIWOARWGrVhC9/uFXMD1El/i8Rbm3oFfaStOmlH9o2lCrW'),
(489031, 'root', 'GROOT', '$2y$10$ZVdV5KYxD.l7gyCfQEfeV.7JNukjYk3QYBlHyxoOnfTdPED65zwgO');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pembuat`
--

CREATE TABLE `tabel_pembuat` (
  `id_vote` int(5) NOT NULL,
  `id_pilihan` int(2) NOT NULL,
  `id_user` int(12) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `pass_pilihan` varchar(32) NOT NULL,
  `tgl_pilih` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `status` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id_pilihan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
