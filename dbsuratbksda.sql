-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 03:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsuratbksda`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `idKeluar` int(11) NOT NULL,
  `nomorKeluar` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kepada` text NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL,
  `scan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`idKeluar`, `nomorKeluar`, `perihal`, `tanggal_surat`, `tanggal_keluar`, `kepada`, `penanggung_jawab`, `scan`) VALUES
(2, '01', 'sdf', '2018-08-22', '2018-08-28', 'asdsad', 'ahmad', 'S1TI_VI.pdf'),
(3, 'ada', 'ada', '2018-08-28', '2018-08-31', 'ada', 'ada', 'S1TI_VIII.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `idMasuk` int(11) NOT NULL,
  `nomorMasuk` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `asal` text NOT NULL,
  `scan` varchar(255) NOT NULL,
  `scan_disposisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`idMasuk`, `nomorMasuk`, `perihal`, `tanggal_surat`, `tanggal_masuk`, `asal`, `scan`, `scan_disposisi`) VALUES
(15, 'gfdsdgfdgdfhdfhgfhdfhdhbdrh dfhdfh575467dxgvd', 'fds', '2018-12-15', '2018-12-12', 'sumbawa barat', '228-339-1-SM-JNTETI3.pdf', '228-339-1-SM-JNTETI3.pdf'),
(16, '123uu', 'ada', '2018-08-23', '2018-08-25', 'ada', 'jurnal_akreditasi_97-477-2-PB3.pdf', ''),
(17, 'ada', 'sad', '2018-12-12', '2019-12-12', 'sumbawa', 'jurnal_akreditasi_97-477-2-PB2.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(6) NOT NULL,
  `namaUser` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `noHp` varchar(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `namaUser`, `alamat`, `noHp`, `username`, `password`, `role`) VALUES
(8, 'ahmad', 'Sumbawa Barat', '12', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(11, 'User', 'User', '23', 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`idKeluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`idMasuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `idKeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `idMasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
