-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 01:11 PM
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
-- Table structure for table `tabel_pembuat`
--

CREATE TABLE `tabel_pembuat` (
  `id_vote` int(5) NOT NULL,
  `id_pilihan1` int(5) NOT NULL,
  `id_pilihan2` int(5) NOT NULL,
  `id_admin` int(12) DEFAULT NULL,
  `subjek` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `deskripsi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pass_pilihan` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tgl_pilih` varchar(20) DEFAULT NULL,
  `tgl_akhir` varchar(50) DEFAULT NULL,
  `total_pilih1` int(11) DEFAULT '0',
  `total_pilih2` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pembuat`
--

INSERT INTO `tabel_pembuat` (`id_vote`, `id_pilihan1`, `id_pilihan2`, `id_admin`, `subjek`, `deskripsi`, `pass_pilihan`, `tgl_pilih`, `tgl_akhir`, `total_pilih1`, `total_pilih2`) VALUES
(53841, 96532, 24763, 489031, 'Pemilihan babang tamvan', 'babang dude', '$2y$10$mKK4C9poQ5SdhZx83crK8.5Y/bfdUIRkJg1QHXYbj7NXeCQNuIKUW', '2019-05-03', '2019-05-15', 1, 0),
(17354, 96482, 87963, 489031, 'Pemilihan Ketua kelas', 'Ketua kelas SMP 1 JEMBER', '$2y$10$80LKibi3CmH7Dact.jZa8OiQAmC9U47uiwqHc5dlQQVZHGn5FscK2', '2019-05-09', '2019-05-11', 0, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
