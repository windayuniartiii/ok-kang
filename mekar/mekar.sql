-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 11:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mekar`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_paket`
--

CREATE TABLE `jenis_paket` (
  `id_jenis_paket` varchar(200) NOT NULL,
  `jenis_paket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `paket` (
  `id_paket` varchar(200) NOT NULL,
  `id_jenis_paket` varchar(200) NOT NULL,
  `jumlah_tukang` int(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `permintaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_jenis_paket`, `jumlah_tukang`, `harga`, `permintaan`) VALUES
('001', 'BSR', 3, '2000000', 'BANGUN RUKO'),
('002', 'SDG', 2, '800000', 'BANGUN KAMAR'),
('003', 'KCL', 2, '300000', 'PASANG KERAMIK');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `kode_transaksi` varchar(200) NOT NULL,
  `id` int(200) NOT NULL,
  `id_paket` varchar(200) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Miftahul Rahmah', 'miftahul', 'hahaha123'),
(2, 'Anggara Putra', 'anggara', 'jogja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_paket`
--
ALTER TABLE `jenis_paket`
  ADD PRIMARY KEY (`id_jenis_paket`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD UNIQUE KEY `id_jenis_paket` (`id_jenis_paket`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_paket` (`id_paket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_jenis_paket`) REFERENCES `jenis_paket` (`id_jenis_paket`);

--
-- Constraints for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD CONSTRAINT `tabel_transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tabel_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
