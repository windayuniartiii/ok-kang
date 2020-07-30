-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 02:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mekar`
--
CREATE DATABASE IF NOT EXISTS `mekar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mekar`;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_paket`
--

DROP TABLE IF EXISTS `jenis_paket`;
CREATE TABLE `jenis_paket` (
  `id_jenis_paket` varchar(200) NOT NULL,
  `jenis_paket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `jenis_paket`:
--

--
-- Dumping data for table `jenis_paket`
--

INSERT INTO `jenis_paket` (`id_jenis_paket`, `jenis_paket`) VALUES
('BSR', 'BESAR'),
('KCL', 'KECIL'),
('SDG', 'SEDANG');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket` (
  `id_paket` varchar(200) NOT NULL,
  `id_jenis_paket` varchar(200) NOT NULL,
  `jumlah_tukang` int(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `permintaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `paket`:
--

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_jenis_paket`, `jumlah_tukang`, `harga`, `permintaan`) VALUES
('001', 'BSR', 3, '2000000', 'BANGUN RUKO'),
('002', 'SDG', 2, '800000', 'BANGUN KAMAR'),
('003', 'KCL', 2, '300000', 'PASANG KERAMIK'),
('001', 'KCL', 2, '0', 'Pemasangan AC'),
('001', 'KCL', 1, '200000', 'Pemasangan AC'),
('001', 'KCL', 1, '200000', 'Pemasangan AC'),
('002', 'SDG', 6, '400000', 'Bangun Kamar'),
('003', 'BSR', 15, '600000', 'Bangun Ruko');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

DROP TABLE IF EXISTS `tabel_transaksi`;
CREATE TABLE `tabel_transaksi` (
  `kode_transaksi` varchar(200) NOT NULL,
  `id` int(200) NOT NULL,
  `id_paket` varchar(200) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tabel_transaksi`:
--

--
-- Dumping data for table `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`kode_transaksi`, `id`, `id_paket`, `tgl_transaksi`) VALUES
('P-001', 1, '002', '2020-04-26'),
('P-002', 2, '001', '2020-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(126) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `email`, `role_id`, `is_active`, `date_created`, `image`) VALUES
(9, 'Miftahul Rahmah', '$2y$10$.iWe6hir2r16lBt3jEicZOVUlae93Kha3HtWJDxWDRomHitgPzi/2', 'miftahul1800018172@webmail.uad.ac.id', 2, 1, 1595495059, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `user_role`:
--

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
