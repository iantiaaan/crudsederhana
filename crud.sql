-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 11:08 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `bidang` varchar(500) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `nama`, `bidang`, `alamat`, `email`, `no_hp`) VALUES
(5, 'PT OSF AROMA INDONESIA', 'Arief Martianto', 'Flavors', 'Komplek Taman Tekno Blok E3/8 BSD Tangerang 15313', 'amartianto@sfflavors.com', '021-7588004'),
(6, 'PT UNRIA PRATAMA KENCANA', 'Benbageura Nihugo Yogaku', 'Importer, Trading &amp; Distribution Service (Flavor &amp; Fragrance', 'Kawasan bisnis terpadu kapuk Eco Park Blok BB-BC-B', 'Ben@unria.com', '021 - 5595510'),
(7, 'PT M &amp; N INDONESIA', 'Reliant N.A', 'Flavour, Essence &amp; Emulsion Manufacture', 'Jl. Daan Mogot Km 12.8, Komplek Daan Mogot Prima B', '', '021-54376318');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
