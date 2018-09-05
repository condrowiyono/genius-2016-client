-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2016 pada 10.29
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
-- Struktur dari tabel `tbpenyisihan`
--

CREATE TABLE IF NOT EXISTS `tbpenyisihan` (
  `sekolah` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `namatim` varchar(50) NOT NULL,
  `sesi` varchar(2) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL,
  `1` varchar(1),
  `2` varchar(1)  ,
  `3` varchar(1)  ,
  `4` varchar(1)  ,
  `5` varchar(1)  ,
  `6` varchar(1)  ,
  `7` varchar(1)  ,
  `8` varchar(1)  ,
  `9` varchar(1)  ,
  `10` varchar(1)  ,
  `11` varchar(1)  ,
  `12` varchar(1)  ,
  `13` varchar(1)  ,
  `14` varchar(1)  ,
  `15` varchar(1)  ,
  `16` varchar(1)  ,
  `17` varchar(1)  ,
  `18` varchar(1)  ,
  `19` varchar(1)  ,
  `20` varchar(1)  ,
  `21` varchar(1)  ,
  `22` varchar(1)  ,
  `23` varchar(1)  ,
  `24` varchar(1)  ,
  `25` varchar(1)  ,
  `26` varchar(1)  ,
  `27` varchar(1)  ,
  `28` varchar(1)  ,
  `29` varchar(1)  ,
  `30` varchar(1)  ,
  `31` varchar(1)  ,
  `32` varchar(1)  ,
  `33` varchar(1)  ,
  `34` varchar(1)  ,
  `35` varchar(1)  ,
  `36` varchar(1)  ,
  `37` varchar(1)  ,
  `38` varchar(1)  ,
  `39` varchar(1)  ,
  `40` varchar(1)  ,
  `41` varchar(1)  ,
  `42` varchar(1)  ,
  `43` varchar(1)  ,
  `44` varchar(1)  ,
  `45` varchar(1)  ,
  `46` varchar(1)  ,
  `47` varchar(1)  ,
  `48` varchar(1)  ,
  `49` varchar(1)  ,
  `50` varchar(1)  ,
  `51` varchar(1)  ,
  `52` varchar(1)  ,
  `53` varchar(1)  ,
  `54` varchar(1)  ,
  `55` varchar(1)  ,
  `56` varchar(1)  ,
  `57` varchar(1)  ,
  `58` varchar(1)  ,
  `59` varchar(1)  ,
  `60` varchar(1)  ,
  `61` varchar(1)  ,
  `62` varchar(1)  ,
  `63` varchar(1)  ,
  `64` varchar(1)  ,
  `65` varchar(1)  ,
  `66` varchar(1)  ,
  `67` varchar(1)  ,
  `68` varchar(1)  ,
  `69` varchar(1)  ,
  `70` varchar(1)  ,
  `71` varchar(1)  ,
  `72` varchar(1)  ,
  `73` varchar(1)  ,
  `74` varchar(1)  ,
  `75` varchar(1)  ,
  `76` varchar(1)  ,
  `77` varchar(1)  ,
  `78` varchar(1)  ,
  `79` varchar(1)  ,
  `80` varchar(1)  ,
  `81` varchar(1)  ,
  `82` varchar(1)  ,
  `83` varchar(1)  ,
  `84` varchar(1)  ,
  `85` varchar(1)  ,
  `86` varchar(1)  ,
  `87` varchar(1)  ,
  `88` varchar(1)  ,
  `89` varchar(1)  ,
  `90` varchar(1)  ,
  `91` varchar(1)  ,
  `92` varchar(1)  ,
  `93` varchar(1)  ,
  `94` varchar(1)  ,
  `95` varchar(1)  ,
  `96` varchar(1)  ,
  `97` varchar(1)  ,
  `98` varchar(1)  ,
  `99` varchar(1)  ,
  `100` varchar(1)  ,
  `sudah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbsimulasi`
--
ALTER TABLE `tbpenyisihan`
  ADD UNIQUE KEY `namatim` (`namatim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
