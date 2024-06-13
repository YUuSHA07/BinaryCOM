-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 05:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klien`
--

CREATE TABLE `tbl_klien` (
  `id` int(11) NOT NULL,
  `nama_klien` varchar(100) NOT NULL,
  `tingkatan_klien` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klien`
--

INSERT INTO `tbl_klien` (`id`, `nama_klien`, `tingkatan_klien`) VALUES
(1, 'inalum', 'Klien Korporat'),
(3, 'Telkom', 'Klien Utama'),
(4, 'yusa', 'Klien Individu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `level`) VALUES
(1, 'zoro', '1105', 'admin'),
(2, 'luffy', '56', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(20, 'ASUS ROG', 'Laptop Gaming dari Asus Republic Of Gamer dengan harga Rp15.000.000', 'AsusRog2.jpg'),
(22, 'acer nitro predator', 'Laptop Gaming Acer dengan harga\r\nRp 12.000.000', 'AcerPredator.jpeg'),
(23, 'Mouse Gaming Logitect ', 'Mouse gaming logitect dengan 6 tombol dengan harga Rp500.000', 'logitectGaming.jpg'),
(24, 'Headset Rexus', 'Headset gaming rexus warna putih dengan harga Rp400.000', 'rexus.png'),
(25, 'Keyboard ROG', 'Keyboar dengan tambahan bantalan untuk tangan saat megetik dengan harga Rp300.000', 'keyboardROG.png'),
(27, 'Monitor ROG', 'monitor ROG', 'monitorROG.jpg'),
(28, 'Laptop Lenovo Legion', 'Varian Terbaru dari lenovo dengan harga Rp13.000.000', 'legion.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_klien`
--
ALTER TABLE `tbl_klien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_klien`
--
ALTER TABLE `tbl_klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
