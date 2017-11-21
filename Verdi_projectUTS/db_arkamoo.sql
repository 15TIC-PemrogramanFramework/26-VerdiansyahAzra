-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 08:48 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuts`
--
DROP DATABASE `projectuts`;
CREATE DATABASE IF NOT EXISTS `projectuts` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projectuts`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `ukuran_barang` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `ukuran_barang`, `gambar`) VALUES
(1, 'Tas Archodo AG-109', 'Soft', 'A', '1510841271.PNG'),
(2, 'Tas American Brood TF-888', 'Medium', 'C', '1510838204.PNG'),
(3, 'Tas Camolo VK-951', 'Hard', 'C', '1510837044.PNG'),
(4, 'Tas David Crulinho B220', 'Medium', 'B', '1510841296.JPG'),
(5, 'Tas Polo Cross 870', 'Slick', 'B', '1510841207.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `id_barang`, `id_pelanggan`, `harga_beli`, `tanggal_beli`) VALUES
(1, 1, 1, 100000, '2017-11-17'),
(3, 3, 7, 89776, '2017-11-20'),
(4, 5, 2, 62000, '2017-11-27'),
(5, 2, 6, 87600, '2017-11-17'),
(6, 1, 2, 61000, '2017-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `isi_komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_barang`, `id_pelanggan`, `isi_komentar`) VALUES
(2, 3, 8, 'kurang bagus :('),
(3, 2, 6, 'Komplitttt....'),
(4, 5, 2, 'Mantap skali tas baru....');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `asal_daerah` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noHP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `jk`, `asal_daerah`, `umur`, `email`, `noHP`) VALUES
(1, 'Verdiansyah Azra', 'L', 'Pekanbaru, Riau', '22', 'verdiansyah15ti@mahasiswa.pcr.ac.id', '08117511995'),
(2, 'Linda', 'P', 'Pekanbaru, Riau', '18', 'linda15ti@mahasiswa.pcr.ac.id', '56488200'),
(3, 'M. Ilham Novitra', 'L', 'Koto Gasib, Kab.Siak, Riau', '18', 'ilham@gmail.com', '08986453781'),
(5, 'Jesika Erventy Osman', 'P', 'Padang, Sumbar', '19', 'jesika@alumni.pcr.ac.id', '22222677'),
(6, 'Shania Shamantha', 'P', 'Bukittinggi, Sumbar', '22', 'shania16ti@mahasiswa.pcr.ac.id', '747384900'),
(7, 'Yan Lazuardy', 'L', 'Padang Sidempuan, Sumut', '22', 'yan14ti@mahasiswa.pcr.ac.id', '74632883412'),
(8, 'Rani Amelia', 'P', 'Pakan Kamih, Sumbar', '20', 'rani16ti@mahasiswa.pcr.ac.id', '60003993');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_barang_2` (`id_barang`),
  ADD KEY `id_pelanggan_2` (`id_pelanggan`),
  ADD KEY `id_pelanggan_3` (`id_pelanggan`),
  ADD KEY `id_barang_3` (`id_barang`),
  ADD KEY `id_barang` (`id_barang`) USING BTREE;

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `beli`
--
ALTER TABLE `beli`
  ADD CONSTRAINT `fk_beli` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_beli2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
