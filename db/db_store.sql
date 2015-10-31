-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2015 at 03:44 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `gangguan`
--

CREATE TABLE IF NOT EXISTS `gangguan` (
  `id` int(11) NOT NULL,
  `deskripsi_gangguan` text NOT NULL,
  `rencana_tindakan` text NOT NULL,
  `eksekusi` text NOT NULL,
  `keterangan` text NOT NULL,
  `id_perangkat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gangguan`
--

INSERT INTO `gangguan` (`id`, `deskripsi_gangguan`, `rencana_tindakan`, `eksekusi`, `keterangan`, `id_perangkat`) VALUES
(1, 'Tampilan hitam', 'ganti vga', 'ganti vga', 'vga rusak', 4);

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE IF NOT EXISTS `komponen` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `spec` text NOT NULL,
  `id_perangkat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`id`, `name`, `spec`, `id_perangkat`) VALUES
(1, 'VGA', '1GB', 4),
(4, 'VGA', '2GB', 5);

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE IF NOT EXISTS `perangkat` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`id`, `name`, `type`, `status`, `picture`) VALUES
(4, 'Laptop Otong', 'Asus', 'Baik', 'asus.jpeg'),
(6, 'Laptop Pak Pol', 'Macbook Pro', 'Rusak Ringan', ''),
(11, 'Laptop Budi', 'Macbook Air', 'Baik', 'macbook-air.jpg'),
(13, 'Laptop Citra', 'Asus', 'Baik', ''),
(14, 'Laptop Dani', 'Acer', 'Baik', ''),
(15, 'Laptop Elly', 'Dell', 'Baik', ''),
(16, 'Laptop Fandi', 'HP', 'Baik', ''),
(17, 'Laptop Hanny', 'Asus', 'Rusak Berat', ''),
(18, 'Laptop John', 'Asus', 'Mati Total', ''),
(19, 'Laptop Karina', 'Acer', 'Rusak Berat', ''),
(20, 'Laptop Lusy', 'Macbook', 'Rusak Ringan', ''),
(21, 'Laptop Martin', 'Dell', 'Mati Total', ''),
(22, 'Laptop Nina', 'Asus', 'Rusak Ringan', ''),
(23, 'Laptop Paul', 'Acer', 'Mati Total', ''),
(24, 'Laptop Orin', 'Acer', 'Baik', ''),
(25, 'Laptop Rina', 'HP', 'Mati Total', ''),
(26, 'Laptop Satria', 'Macbook Air', 'Baik', ''),
(27, 'Laptop Tia', 'Asus', 'Baik', ''),
(28, 'Laptop Udin', 'Dell', 'Rusak Berat', ''),
(29, 'Laptop Via', 'Asus', 'Mati Total', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `level`) VALUES
(1, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'demo', 'Demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gangguan`
--
ALTER TABLE `gangguan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gangguan`
--
ALTER TABLE `gangguan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komponen`
--
ALTER TABLE `komponen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
