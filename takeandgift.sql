-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 08:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takeandgift`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(3, 'farhan kamil', 'admin', '$2y$10$XnbVKwU8K3cNzUuYs2lZOeBpDGs3k8wnoKJEX7f6l8FvI0Oq/Rhdi'),
(10, 'fahrul', 'fahrul', '$2y$10$7IzFYy/3WL/ciT2hXkNK3ulCdFK/GnbGjlNTuTHDV4LwN7U8spI7C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesan`
--

CREATE TABLE `tbl_pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_pemesan` varchar(225) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telpon` varchar(50) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pemesan`
--

INSERT INTO `tbl_pemesan` (`id_pemesan`, `id_produk`, `nama_pemesan`, `alamat`, `no_telpon`, `jumlah`, `metode_pembayaran`, `tanggal`, `waktu`) VALUES
(1, 11, 'Farhan Kamil', 'aa', '08161120362', '2', 'Transfer', '2023-06-14', '00:43:19'),
(2, 7, 'Ridwan Kamil', 'njnj', '0889858989', '2', 'COD', '2023-06-14', '00:46:40'),
(4, 11, 'Farhan Kamil', 'bdbwu', '08161120363', '2', 'Transfer', '2023-06-14', '02:31:47'),
(5, 10, 'Farhan Kamilun', 'sfsf', '0889858989', '2', 'Transfer', '2023-06-15', '02:05:53'),
(7, 8, 'Admin', 'Jakarta', '0889858989', '1', 'Transfer', '2023-06-15', '03:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `kategori`, `harga`, `cover`, `tanggal`, `waktu`) VALUES
(1, 'Snack Medium (Isi 8)', 'Buket', '100000', '98CA1BA1-2A4A-4E51-A896-AFB024CE1632.png', '2023-06-04', '17:48:07'),
(2, 'Buket Bunga Asli', 'Buket', '150000', 'IMG_0395.png', '2023-06-04', '17:49:11'),
(3, 'Buket Uang (20 Lembar)', 'Buket', '120000', '862E55DD-2202-43F0-8C42-13A4FC954C54.png', '2023-06-04', '17:52:24'),
(4, 'Hampers Imlek', 'Hampers', '150000', 'PHOTO-2022-12-23-17-04-51.png', '2023-06-04', '17:53:40'),
(5, 'Hampers Valentine', 'Hampers', '150000', '2955C140-EDDF-4589-8F79-1A778B7B3656.png', '2023-06-04', '17:54:38'),
(6, 'Snack Premium (Isi 10)', 'Buket', '200000', '42917A01-DC23-4CDA-BBD2-FED7EAE0B6D0.png', '2023-06-04', '17:56:08'),
(7, 'Hampers Natal', 'Hampers', '150000', 'PHOTO-2022-12-23-17-04-57.png', '2023-06-04', '17:58:21'),
(8, 'Buket Uang (30 Lembar)', 'Buket', '180000', 'EBB0F932-760B-4844-9692-812B303ED5D0.png', '2023-06-04', '18:00:00'),
(9, 'Buket Boneka & Snack', 'Buket', '100000', 'IMG_0391.png', '2023-06-04', '18:01:38'),
(10, 'Buket Boneka & Bunga', 'Buket', '120000', 'IMG_1861.png', '2023-06-04', '18:02:46'),
(11, 'Buket Uang 100k (15 Lembar)', 'Buket', '1750000', '4E4EBF87-3E88-4135-A11F-46B3C55B038F.png', '2023-06-04', '18:06:37'),
(12, 'Hampers Idul Fitri', 'Hampers', '150000', 'PHOTO-2022-12-23-17-04-55.png', '2023-06-04', '18:07:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD PRIMARY KEY (`id_pemesan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD CONSTRAINT `tbl_pemesan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
