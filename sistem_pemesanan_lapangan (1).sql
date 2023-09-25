-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 06:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pemesanan_lapangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pemain`
--

CREATE TABLE `data_pemain` (
  `id` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `jumlah_pemain` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pemain`
--

INSERT INTO `data_pemain` (`id`, `waktu`, `nama_tim`, `jumlah_pemain`) VALUES
(3, '10:38:00', 'rty', 12),
(4, '10:39:00', 'no fc', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_lapangan` varchar(200) DEFAULT NULL,
  `lebar_lapangan` int(200) DEFAULT NULL,
  `bola` int(20) DEFAULT NULL,
  `jenis_rumput` varchar(200) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `jam_pemesanan` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_lapangan`, `lebar_lapangan`, `bola`, `jenis_rumput`, `tanggal_pemesanan`, `jam_pemesanan`) VALUES
(3, 'rejoagung777', 18, 0, 'Sintetis', '0209-12-11', '12:44:00'),
(4, 'rejoagung', 18, 0, 'Asli', '0209-12-11', '12:49:00'),
(5, 'brawijaya', 300, 0, 'Asli', '2023-08-06', '05:50:00'),
(6, 'brawijaya', 300, 0, 'Sintetis', '2023-08-13', '13:39:00'),
(7, 'brawijaya', 18, 0, 'Asli', '4466-05-31', '04:06:00'),
(8, 'rejoagung', 300, 0, 'Asli', '2023-08-22', '14:16:00'),
(9, 'q', 0, 0, 'Asli', '0001-01-01', '22:02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pemain`
--
ALTER TABLE `data_pemain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pemain`
--
ALTER TABLE `data_pemain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
