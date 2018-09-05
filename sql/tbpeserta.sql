-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Sep 2015 pada 01.45
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genius2016`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpeserta`
--

CREATE TABLE IF NOT EXISTS `tbpeserta` (
  `namatim` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `sekolahasal` varchar(200) DEFAULT NULL,
  `notelpsekolah` varchar(20) DEFAULT NULL,
  `pendampingnama` varchar(100) DEFAULT NULL,
  `pendampingtelp` varchar(20) DEFAULT NULL,
  `pesertasatunama` varchar(100) DEFAULT NULL,
  `pesertasatuttl` varchar(200) DEFAULT NULL,
  `pesertasatutelp` varchar(20) DEFAULT NULL,
  `pesertasatugender` varchar(40) DEFAULT NULL,
  `pesertaduanama` varchar(100) DEFAULT NULL,
  `pesertaduattl` varchar(200) DEFAULT NULL,
  `pesertaduagender` varchar(40) DEFAULT NULL,
  `pesertatiganama` varchar(100) DEFAULT NULL,
  `pesertatigattl` varchar(200) DEFAULT NULL,
  `pesertatigagender` varchar(40) DEFAULT NULL,
  `buktitransfer` varchar(400) DEFAULT NULL,
  `jalurpenyisihan` varchar(20) DEFAULT NULL,
  `sudah` varchar(5) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpeserta`
--

INSERT INTO `tbpeserta` (`namatim`, `email`, `password`, `sekolahasal`, `notelpsekolah`, `pendampingnama`, `pendampingtelp`, `pesertasatunama`, `pesertasatuttl`, `pesertasatutelp`, `pesertasatugender`, `pesertaduanama`, `pesertaduattl`, `pesertaduagender`, `pesertatiganama`, `pesertatigattl`, `pesertatigagender`, `buktitransfer`, `jalurpenyisihan`, `sudah`, `timestamp`) VALUES
('satu', 'satu', 'satu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tidak', '2015-09-22 20:35:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpeserta`
--
ALTER TABLE `tbpeserta`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `namatim` (`namatim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
