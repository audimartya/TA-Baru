-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 11:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elpiji`
--

-- --------------------------------------------------------

--
-- Table structure for table `distribusi1`
--

CREATE TABLE `distribusi1` (
  `id_kirim1` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_gas` int(5) NOT NULL,
  `asal` int(5) NOT NULL,
  `tujuan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribusi1`
--

INSERT INTO `distribusi1` (`id_kirim1`, `tanggal`, `jumlah_gas`, `asal`, `tujuan`) VALUES
(2, '2019-04-25', 45678, 0, 1),
(5, '2019-04-29', 80, 4, 5),
(6, '2019-04-30', 100, 6, 9),
(7, '2019-04-30', 100, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `distribusi2`
--

CREATE TABLE `distribusi2` (
  `id_kirim2` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_gas` int(5) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `id_pangkalan` int(20) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `alamat_pembeli` varchar(50) NOT NULL,
  `jenis_pembeli` enum('RT','UMK','Pengecer','') NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `paraf_pembeli` varchar(50) NOT NULL,
  `asal` int(5) NOT NULL,
  `tujuan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribusi2`
--

INSERT INTO `distribusi2` (`id_kirim2`, `tanggal`, `jumlah_gas`, `nama_pembeli`, `id_pangkalan`, `no_tlp`, `alamat_pembeli`, `jenis_pembeli`, `keterangan`, `paraf_pembeli`, `asal`, `tujuan`) VALUES
(1, '2019-04-30', 25, 'a', 0, 1, 'a', 'RT', 'a', '104.jpg', 5, 4),
(4, '2019-04-29', 34, 'sdfg', 3, 32425, 'gh', 'UMK', 'ezrxdtcfyv', '3.jpg', 5, 6),
(5, '2019-06-21', 24, 'a', 0, 1, 'a', 'Pengecer', 'c', 'a.jpg', 7, 8),
(6, '2019-05-02', 24, 'a', 0, 1, 'a', 'Pengecer', 'c', 'a.jpg', 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('agen','pangkalan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'a', '0cc175b9c0f1b6a831c399e269772661', 'agen'),
(2, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'pangkalan');

-- --------------------------------------------------------

--
-- Table structure for table `member_elpiji`
--

CREATE TABLE `member_elpiji` (
  `id_member` int(5) NOT NULL,
  `no_reg` int(20) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `nama_pangkalan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `id_login` int(5) NOT NULL,
  `paraf_pembeli` varchar(50) NOT NULL,
  `jenis` enum('agen','pangkalan','pengecer','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_elpiji`
--

INSERT INTO `member_elpiji` (`id_member`, `no_reg`, `nama_member`, `nama_pangkalan`, `alamat`, `no_ktp`, `no_tlp`, `id_login`, `paraf_pembeli`, `jenis`) VALUES
(5, 0, 'vavabre', '', 'SDFGHJKL', 0, 23421, 0, '63.jpg', 'pengecer'),
(6, 0, 'dsfghjk', '', 'aaaaaaaaaaaaaaaaaaa', 0, 2345678, 0, '102.jpg', 'pengecer'),
(7, 0, 'xsac', 'NULL', 'fghj', 0, 3456789, 0, '64.jpg', 'pengecer'),
(8, 0, 'cvkdstcfsak', 'NULL', 'cksuacgakbak', 0, 34567890, 0, '121.jpg', 'pengecer'),
(10, 0, 'a', 'NULL', 'a', 0, 1, 0, '86.jpg', 'pengecer');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `tanggal`, `jumlah`, `keterangan`, `asal`) VALUES
(5, '2019-03-11', 12, 'ehqe', 'Pangkalan 2'),
(6, '2019-03-13', 8, 'ezrxdtcfyv', 'Pangkalan 2'),
(7, '2019-04-10', 45, 'xcvbnm,.', 'Pangkalan 2'),
(8, '2019-04-25', 8, 'u', 'kn n n');

-- --------------------------------------------------------

--
-- Table structure for table `stock_elpiji`
--

CREATE TABLE `stock_elpiji` (
  `id_member` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `stock_datang` int(5) NOT NULL,
  `stock_keluar` int(5) NOT NULL,
  `stock_total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_elpiji`
--

INSERT INTO `stock_elpiji` (`id_member`, `tanggal`, `stock_datang`, `stock_keluar`, `stock_total`) VALUES
(5, '2019-05-02', 30, 30, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribusi1`
--
ALTER TABLE `distribusi1`
  ADD PRIMARY KEY (`id_kirim1`);

--
-- Indexes for table `distribusi2`
--
ALTER TABLE `distribusi2`
  ADD PRIMARY KEY (`id_kirim2`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `member_elpiji`
--
ALTER TABLE `member_elpiji`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribusi1`
--
ALTER TABLE `distribusi1`
  MODIFY `id_kirim1` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `distribusi2`
--
ALTER TABLE `distribusi2`
  MODIFY `id_kirim2` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member_elpiji`
--
ALTER TABLE `member_elpiji`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
