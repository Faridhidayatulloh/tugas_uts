-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 03:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` float NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `kode_barang`, `qty`, `harga`, `kategori`) VALUES
(1, 'pencil', '10', 5, 5000, 1),
(2, 'hp', '11', 2, 1000000, 2),
(3, 'beras', '12', 2, 20000, 3),
(4, 'pakaian', '13', 1, 0, 4),
(5, '1', '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diskon_barang`
--

CREATE TABLE `diskon_barang` (
  `id_diskon_barang` int(11) NOT NULL,
  `jumlah_diskon` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(11) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `diskon`) VALUES
(1, 'ATK', 5),
(2, 'Elektronik', 10),
(3, 'sembako', 20),
(4, 'pakaian', 0);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `jenis_level` varchar(255) NOT NULL,
  `jml_disc_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `jenis_level`, `jml_disc_level`) VALUES
(1, 'Platinum', 15),
(2, 'Gold', 10),
(3, 'Silver', 5);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `no_transaksi` varchar(20) NOT NULL,
  `jenis_transaksi` varchar(20) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `no_transaksi`, `jenis_transaksi`, `barang_id`, `jumlah_transaksi`, `id_user`) VALUES
(1, '2023-10-02', '123', 'jual', 2, 1, 1),
(2, '2023-10-10', '321', 'jual', 1, 1, 2),
(3, '2023-10-11', '234', 'jual', 4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `level`, `status`, `id_level`) VALUES
(1, 'raysha', '123', 2, 1, 2),
(2, 'Reina', '321', 3, 1, 3),
(3, 'Nur anisa', '1122', 1, 1, 1),
(0, '1', '1', 1, 0, 0),
(0, '1', 'jaka', 123, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `diskon_barang`
--
ALTER TABLE `diskon_barang`
  ADD PRIMARY KEY (`id_diskon_barang`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diskon_barang`
--
ALTER TABLE `diskon_barang`
  MODIFY `id_diskon_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
