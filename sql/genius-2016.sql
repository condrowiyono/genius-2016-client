-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 05 Sep 2018 pada 20.32
-- Versi Server: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.31-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genius-2016`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbadmin`
--

CREATE TABLE `tbadmin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbadmin`
--

INSERT INTO `tbadmin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenyisihan`
--

CREATE TABLE `tbpenyisihan` (
  `sekolah` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `namatim` varchar(50) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL,
  `1` varchar(1) DEFAULT NULL,
  `2` varchar(1) DEFAULT NULL,
  `3` varchar(1) DEFAULT NULL,
  `4` varchar(1) DEFAULT NULL,
  `5` varchar(1) DEFAULT NULL,
  `6` varchar(1) DEFAULT NULL,
  `7` varchar(1) DEFAULT NULL,
  `8` varchar(1) DEFAULT NULL,
  `9` varchar(1) DEFAULT NULL,
  `10` varchar(1) DEFAULT NULL,
  `11` varchar(1) DEFAULT NULL,
  `12` varchar(1) DEFAULT NULL,
  `13` varchar(1) DEFAULT NULL,
  `14` varchar(1) DEFAULT NULL,
  `15` varchar(1) DEFAULT NULL,
  `16` varchar(1) DEFAULT NULL,
  `17` varchar(1) DEFAULT NULL,
  `18` varchar(1) DEFAULT NULL,
  `19` varchar(1) DEFAULT NULL,
  `20` varchar(1) DEFAULT NULL,
  `21` varchar(1) DEFAULT NULL,
  `22` varchar(1) DEFAULT NULL,
  `23` varchar(1) DEFAULT NULL,
  `24` varchar(1) DEFAULT NULL,
  `25` varchar(1) DEFAULT NULL,
  `26` varchar(1) DEFAULT NULL,
  `27` varchar(1) DEFAULT NULL,
  `28` varchar(1) DEFAULT NULL,
  `29` varchar(1) DEFAULT NULL,
  `30` varchar(1) DEFAULT NULL,
  `31` varchar(1) DEFAULT NULL,
  `32` varchar(1) DEFAULT NULL,
  `33` varchar(1) DEFAULT NULL,
  `34` varchar(1) DEFAULT NULL,
  `35` varchar(1) DEFAULT NULL,
  `36` varchar(1) DEFAULT NULL,
  `37` varchar(1) DEFAULT NULL,
  `38` varchar(1) DEFAULT NULL,
  `39` varchar(1) DEFAULT NULL,
  `40` varchar(1) DEFAULT NULL,
  `41` varchar(1) DEFAULT NULL,
  `42` varchar(1) DEFAULT NULL,
  `43` varchar(1) DEFAULT NULL,
  `44` varchar(1) DEFAULT NULL,
  `45` varchar(1) DEFAULT NULL,
  `46` varchar(1) DEFAULT NULL,
  `47` varchar(1) DEFAULT NULL,
  `48` varchar(1) DEFAULT NULL,
  `49` varchar(1) DEFAULT NULL,
  `50` varchar(1) DEFAULT NULL,
  `51` varchar(1) DEFAULT NULL,
  `52` varchar(1) DEFAULT NULL,
  `53` varchar(1) DEFAULT NULL,
  `54` varchar(1) DEFAULT NULL,
  `55` varchar(1) DEFAULT NULL,
  `56` varchar(1) DEFAULT NULL,
  `57` varchar(1) DEFAULT NULL,
  `58` varchar(1) DEFAULT NULL,
  `59` varchar(1) DEFAULT NULL,
  `60` varchar(1) DEFAULT NULL,
  `61` varchar(1) DEFAULT NULL,
  `62` varchar(1) DEFAULT NULL,
  `63` varchar(1) DEFAULT NULL,
  `64` varchar(1) DEFAULT NULL,
  `65` varchar(1) DEFAULT NULL,
  `66` varchar(1) DEFAULT NULL,
  `67` varchar(1) DEFAULT NULL,
  `68` varchar(1) DEFAULT NULL,
  `69` varchar(1) DEFAULT NULL,
  `70` varchar(1) DEFAULT NULL,
  `71` varchar(1) DEFAULT NULL,
  `72` varchar(1) DEFAULT NULL,
  `73` varchar(1) DEFAULT NULL,
  `74` varchar(1) DEFAULT NULL,
  `75` varchar(1) DEFAULT NULL,
  `76` varchar(1) DEFAULT NULL,
  `77` varchar(1) DEFAULT NULL,
  `78` varchar(1) DEFAULT NULL,
  `79` varchar(1) DEFAULT NULL,
  `80` varchar(1) DEFAULT NULL,
  `81` varchar(1) DEFAULT NULL,
  `82` varchar(1) DEFAULT NULL,
  `83` varchar(1) DEFAULT NULL,
  `84` varchar(1) DEFAULT NULL,
  `85` varchar(1) DEFAULT NULL,
  `86` varchar(1) DEFAULT NULL,
  `87` varchar(1) DEFAULT NULL,
  `88` varchar(1) DEFAULT NULL,
  `89` varchar(1) DEFAULT NULL,
  `90` varchar(1) DEFAULT NULL,
  `91` varchar(1) DEFAULT NULL,
  `92` varchar(1) DEFAULT NULL,
  `93` varchar(1) DEFAULT NULL,
  `94` varchar(1) DEFAULT NULL,
  `95` varchar(1) DEFAULT NULL,
  `96` varchar(1) DEFAULT NULL,
  `97` varchar(1) DEFAULT NULL,
  `98` varchar(1) DEFAULT NULL,
  `99` varchar(1) DEFAULT NULL,
  `100` varchar(1) DEFAULT NULL,
  `sudah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpenyisihan`
--

INSERT INTO `tbpenyisihan` (`sekolah`, `email`, `namatim`, `mulai`, `selesai`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`, `71`, `72`, `73`, `74`, `75`, `76`, `77`, `78`, `79`, `80`, `81`, `82`, `83`, `84`, `85`, `86`, `87`, `88`, `89`, `90`, `91`, `92`, `93`, `94`, `95`, `96`, `97`, `98`, `99`, `100`, `sudah`) VALUES
('SBBS', 'condro@outlook.co.id', 'condro', '2018-09-05 20:23:49', '2018-09-05 22:23:49', 'A', 'A', 'A', 'X', 'X', 'X', 'X', 'X', 'X', 'X', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpeserta`
--

CREATE TABLE `tbpeserta` (
  `namatim` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `sekolahasal` varchar(200) DEFAULT NULL,
  `notelpsekolah` varchar(20) DEFAULT NULL,
  `gurunama` varchar(100) DEFAULT NULL,
  `gurutelp` varchar(20) DEFAULT NULL,
  `satunama` varchar(100) DEFAULT NULL,
  `satuttl` varchar(200) DEFAULT NULL,
  `satutelp` varchar(20) DEFAULT NULL,
  `satugender` varchar(40) DEFAULT NULL,
  `duanama` varchar(100) DEFAULT NULL,
  `duattl` varchar(200) DEFAULT NULL,
  `duagender` varchar(40) DEFAULT NULL,
  `tiganama` varchar(100) DEFAULT NULL,
  `tigattl` varchar(200) DEFAULT NULL,
  `tigagender` varchar(40) DEFAULT NULL,
  `buktitransfer` varchar(400) DEFAULT NULL,
  `jalurpenyisihan` varchar(20) DEFAULT NULL,
  `poto` varchar(200) NOT NULL,
  `sudah` varchar(5) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpeserta`
--

INSERT INTO `tbpeserta` (`namatim`, `email`, `password`, `sekolahasal`, `notelpsekolah`, `gurunama`, `gurutelp`, `satunama`, `satuttl`, `satutelp`, `satugender`, `duanama`, `duattl`, `duagender`, `tiganama`, `tigattl`, `tigagender`, `buktitransfer`, `jalurpenyisihan`, `poto`, `sudah`, `timestamp`) VALUES
('condro', 'condro@outlook.co.id', 'a', 'SBBS', '09999', 'Budi', '900000', 'Condro', '29/12/1996', '08998816627', 'Perempuan', 'Dua', '12/12/2000', 'Perempuan', 'Ci', '12/12/1996', 'Perempuan', 'bukti/g16-condro-07.jpg', 'Online', 'potoprofil/ini.jpg', 'sudah', '2018-09-05 19:56:04'),
('satu', 'satu', 'satu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', '', 'sudah', '2015-09-22 20:35:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsimulasi`
--

CREATE TABLE `tbsimulasi` (
  `sekolah` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `namatim` varchar(50) NOT NULL,
  `sesi` varchar(2) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL,
  `1` varchar(1) DEFAULT NULL,
  `2` varchar(1) DEFAULT NULL,
  `3` varchar(1) DEFAULT NULL,
  `4` varchar(1) DEFAULT NULL,
  `5` varchar(1) DEFAULT NULL,
  `6` varchar(1) DEFAULT NULL,
  `7` varchar(1) DEFAULT NULL,
  `8` varchar(1) DEFAULT NULL,
  `9` varchar(1) DEFAULT NULL,
  `10` varchar(1) DEFAULT NULL,
  `11` varchar(1) DEFAULT NULL,
  `12` varchar(1) DEFAULT NULL,
  `13` varchar(1) DEFAULT NULL,
  `14` varchar(1) DEFAULT NULL,
  `15` varchar(1) DEFAULT NULL,
  `16` varchar(1) DEFAULT NULL,
  `17` varchar(1) DEFAULT NULL,
  `18` varchar(1) DEFAULT NULL,
  `19` varchar(1) DEFAULT NULL,
  `20` varchar(1) DEFAULT NULL,
  `21` varchar(1) DEFAULT NULL,
  `22` varchar(1) DEFAULT NULL,
  `23` varchar(1) DEFAULT NULL,
  `24` varchar(1) DEFAULT NULL,
  `25` varchar(1) DEFAULT NULL,
  `26` varchar(1) DEFAULT NULL,
  `27` varchar(1) DEFAULT NULL,
  `28` varchar(1) DEFAULT NULL,
  `29` varchar(1) DEFAULT NULL,
  `30` varchar(1) DEFAULT NULL,
  `31` varchar(1) DEFAULT NULL,
  `32` varchar(1) DEFAULT NULL,
  `33` varchar(1) DEFAULT NULL,
  `34` varchar(1) DEFAULT NULL,
  `35` varchar(1) DEFAULT NULL,
  `36` varchar(1) DEFAULT NULL,
  `37` varchar(1) DEFAULT NULL,
  `38` varchar(1) DEFAULT NULL,
  `39` varchar(1) DEFAULT NULL,
  `40` varchar(1) DEFAULT NULL,
  `sudah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsoal`
--

CREATE TABLE `tbsoal` (
  `indeks` int(11) NOT NULL,
  `sesi` int(11) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsoal`
--

INSERT INTO `tbsoal` (`indeks`, `sesi`, `pertanyaan`) VALUES
(1, 1, '<p><s>Apakah saya?</s></p>\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>A. ungkapkan rasaa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>B. kamu percaya</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C. butuh cinta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D. merangkai kata</td>\r\n		</tr>\r\n		<tr>\r\n			<td>E. katakan cinta sekarang</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Pada suatu kantong, terdapat 50 buah bola yang berwarna merah,kuning,putih,dan hitam. Jika tiap satu menit Riki hanya bias mengambil satu bola. Maka pada menit ke berapa Riki pasti mendapat 12 Bola berwarana sama ?</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div>a</div>\r\n						</td>\r\n						<td>50</td>\r\n						<td>\r\n						<div>d</div>\r\n						</td>\r\n						<td>45</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div>b</div>\r\n						</td>\r\n						<td>40</td>\r\n						<td>\r\n						<div>e</div>\r\n						</td>\r\n						<td>38</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div>c</div>\r\n						</td>\r\n						<td>44</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(3, 0, '<div class="default">Dimas memiliki 4 pasang magnet angka yang terdiri datri angka 1,2,4,5. Dia akan mengurutkan manet tersebut di kulkasnya dengan cara yang unik,yaitu :<br />\r\n~ angka 1 dipisah 1 magnet<br />\r\n~ angka 2 dipisah oleh 2 magnet<br />\r\n~ angka 4 dipisah oleh 4 magnet<br />\r\n~ angka 5 dipisah oleh 5 magnet<br />\r\n~ angka yang terbentuk adalh angka terbesat yang bias dihasilkan sesuai syarat diatas .<br />\r\nMaka magnet ke 5 dari susunan yang Dimas hasilkan jika dilihat dari kanan yaitu ? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>1</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>2</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>Magnet tidak dapat tersusun</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>4</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(4, 0, 'Ini gantinya nomor 4'),
(5, 0, '<p>Aji has decided he __________ arts at university</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>a.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>Studied</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>d.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>will study</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>b.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>Studies</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>e.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>is going to study</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>c.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>is studying</p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(6, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Sesaat setelah matahari terbenam, Senja melihat sebuah objek langit mirip bintang yang sangat terang di langit. Jika tidak ada objek langit lain saat itu, apa nama objek langit yang dilihat?</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">a.</div>\r\n						</td>\r\n						<td>Planet Merkurius</td>\r\n						<td>\r\n						<div class="choice">d.</div>\r\n						</td>\r\n						<td>Planet Jupiter</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">b.</div>\r\n						</td>\r\n						<td>Planet Kejora</td>\r\n						<td>\r\n						<div class="choice">e.</div>\r\n						</td>\r\n						<td>Jawaban diatas tidak ada yang benar</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">c.</div>\r\n						</td>\r\n						<td>Planet Mars</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(7, 0, '<div class="default">Berat badan Ipun di permukaan bumi adalah 400N. Jika Ipun pergi ke suatu planet yang massanya 5 kali massa bumi dan jari-jarinya 2 kali jari-jari bumi, maka berat Ipun di permukaan planet itu adalah? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>400 N</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>1000 N</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>500 N</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>2000 N</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>320 N</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(8, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Galaksi yang kita humi saat ini adalah? &hellip;</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">a.</div>\r\n						</td>\r\n						<td>Galaksi Andromeda</td>\r\n						<td>\r\n						<div class="choice">d.</div>\r\n						</td>\r\n						<td>Galaksi Cepheid</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">b.</div>\r\n						</td>\r\n						<td>Galaksi Bimasakti</td>\r\n						<td>\r\n						<div class="choice">e.</div>\r\n						</td>\r\n						<td>Galaksi Rozen</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">c.</div>\r\n						</td>\r\n						<td>Galaksi Arcturus</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(9, 0, '<div class="default">Sebuah pesawat bomber tipe Muttan sedang terbang mendatar dengan kecepatan 200 m/s dan ketinggian 500 m. Pesawat itu diberi misi untuk menjatuhkan bom ke suatu sasaran. Jika ia ingin mengenai sasarannya, berapa jarak antara titik saat pesawat menjatuhkan bom dan titik sasaran bom?</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>500 m</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>1750 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>1000 m</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>2000 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>1500 m</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(10, 0, '<div class="default">Sebuah cermin cembung berjari-jari 16 cm. Jika jarak bayangan ke cermin 6 cm, maka jarak benda ke lensa adalah &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>-24 cm</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>12 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>-12 cm</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>24 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>&nbsp;&nbsp;&nbsp; 8 cm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(11, 0, '<div class="default">Titik dekat seseorang 2 m. ia ingin membaca buku dengan jarak 25 cm. maka kekuatan kacamatanya adalah? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>-3,5 dioptri</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>-3 dioptri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>3,5 dioptri</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>tidak perlu menggunakan kacamata</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>3 dioptri</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(12, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Sebuah lampu tertulis 25 w, 220 V. maka hambatan lampu itu adalah? &hellip;</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">a.</div>\r\n						</td>\r\n						<td>8 ohm</td>\r\n						<td>\r\n						<div class="choice">d.</div>\r\n						</td>\r\n						<td>1936 ohm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">b.</div>\r\n						</td>\r\n						<td>625 ohm</td>\r\n						<td>\r\n						<div class="choice">e.</div>\r\n						</td>\r\n						<td>2200 ohm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">c.</div>\r\n						</td>\r\n						<td>1250 ohm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(13, 0, '<div class="default">We ______ because our parents couldn&rsquo;t send us to school. The appropriate word to fill the blank is? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>Sent off</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>Pulled up</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>Paid off</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>Lost out</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>Pulled off</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(14, 0, 'aku adalah itu adalah â–º\r\n'),
(15, 0, '<p>Respiration in green plants occur at . . .<br />\r\nA. Day only<br />\r\nB. Night only<br />\r\nC. Day and night only<br />\r\nD. Together with photosysthesis<br />\r\nE. When light is present</p>\r\n'),
(16, 0, '<p>Pada batang tumbuhan dikotil, jaringan yang berbatasan langsung dengan korteks adalah . . .<br />\r\n<em>A. Primary phloem<br />\r\nB. Secondary phloem<br />\r\nC. Tertiary phloem<br />\r\nD. Secondary xylem<br />\r\nE. Primary xylem</em></p>\r\n'),
(17, 0, 'Mengapa atmosfer bumi berwarna biru?<br />\r\nA. Atmosfer hanya menyerap warna biru<br />\r\nB. Atmosfer memantulkan cahaya biru<br />\r\nC. Atom penyusun atmosfer berwarna biru<br />\r\nD. Karena Bumi sebagian besar terdiri atas laut<br />\r\nE. Tidak ada jawaban yang benar'),
(18, 0, '<p>Sebuah teropong bintang mempunyai lensa objektif dan okuler yang berjarak 105 cm satu sama lain. Teropong tersebut diarahkan pada dua bintang. Mata melihat bayangan bintang jika berakomodasi pada jarak 30 cm. Kemudian lensa okuler digeser 2 cm keluar sehingga pada layar yang diletakkan 42 cm dibelakang okuler terbentuk bayangan. Hitung jarak fokus lensa objektif dan okuler!<br />\r\nA. 100 cm dan 6 cm<br />\r\nB. 6 cm dan 100 cm<br />\r\nC. 112 cm dan 8,4 cm<br />\r\nD. 112 cm dan 6 cm<br />\r\nE. tidak ada jawaban yang benar</p>\r\n'),
(19, 0, '<p><img alt="" src="https://irenerifdah.files.wordpress.com/2012/04/saturn2.jpg" style="height:142px; width:175px" /></p>\r\n\r\n<p>Diatas adalah planet<br />\r\nA. Merkurius<br />\r\nB. Venus<br />\r\nC. Mars<br />\r\nD. Bumi<br />\r\nE. Bulan</p>\r\n'),
(20, 0, '<p><img alt="" src="gambar/a.jpg" /></p>\r\n\r\n<p>A. Kebohongan publik<br />\r\nB. Fakta<br />\r\nC. Sakit<br />\r\nD. Gimana nih fans nya<br />\r\nE. Biasa aja kales</p>\r\n'),
(21, 0, '<p><img src="file:///C:/Users/DELL/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" style="height:154px; width:233px" /></p>\r\n\r\n<p>Kekuatan yang ditunjukkan amperemeter dibawah ini adalah?</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>a.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>70 cA</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>d.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>3,5 A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>b.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>70 mA</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>e.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>7 A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>c.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>0,8 A</p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsoalsimulasi`
--

CREATE TABLE `tbsoalsimulasi` (
  `indeks` int(11) NOT NULL,
  `sesi` int(11) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsoalsimulasi`
--

INSERT INTO `tbsoalsimulasi` (`indeks`, `sesi`, `pertanyaan`) VALUES
(1, 1, '<p><s>Apakah saya?</s></p>\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>A. ungkapkan rasaa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>B. kamu percaya</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C. butuh cinta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D. merangkai kata</td>\r\n		</tr>\r\n		<tr>\r\n			<td>E. katakan cinta sekarang</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Pada suatu kantong, terdapat 50 buah bola yang berwarna merah,kuning,putih,dan hitam. Jika tiap satu menit Riki hanya bias mengambil satu bola. Maka pada menit ke berapa Riki pasti mendapat 12 Bola berwarana sama ?</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div>a</div>\r\n						</td>\r\n						<td>50</td>\r\n						<td>\r\n						<div>d</div>\r\n						</td>\r\n						<td>45</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div>b</div>\r\n						</td>\r\n						<td>40</td>\r\n						<td>\r\n						<div>e</div>\r\n						</td>\r\n						<td>38</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div>c</div>\r\n						</td>\r\n						<td>44</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(3, 0, '<div class="default">Dimas memiliki 4 pasang magnet angka yang terdiri datri angka 1,2,4,5. Dia akan mengurutkan manet tersebut di kulkasnya dengan cara yang unik,yaitu :<br />\r\n~ angka 1 dipisah 1 magnet<br />\r\n~ angka 2 dipisah oleh 2 magnet<br />\r\n~ angka 4 dipisah oleh 4 magnet<br />\r\n~ angka 5 dipisah oleh 5 magnet<br />\r\n~ angka yang terbentuk adalh angka terbesat yang bias dihasilkan sesuai syarat diatas .<br />\r\nMaka magnet ke 5 dari susunan yang Dimas hasilkan jika dilihat dari kanan yaitu ? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>1</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>2</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>Magnet tidak dapat tersusun</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>4</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(4, 0, 'Ini gantinya nomor 4'),
(5, 0, '<p>Aji has decided he __________ arts at university</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>a.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>Studied</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>d.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>will study</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>b.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>Studies</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>e.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>is going to study</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>c.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>is studying</p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(6, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Sesaat setelah matahari terbenam, Senja melihat sebuah objek langit mirip bintang yang sangat terang di langit. Jika tidak ada objek langit lain saat itu, apa nama objek langit yang dilihat?</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">a.</div>\r\n						</td>\r\n						<td>Planet Merkurius</td>\r\n						<td>\r\n						<div class="choice">d.</div>\r\n						</td>\r\n						<td>Planet Jupiter</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">b.</div>\r\n						</td>\r\n						<td>Planet Kejora</td>\r\n						<td>\r\n						<div class="choice">e.</div>\r\n						</td>\r\n						<td>Jawaban diatas tidak ada yang benar</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">c.</div>\r\n						</td>\r\n						<td>Planet Mars</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(7, 0, '<div class="default">Berat badan Ipun di permukaan bumi adalah 400N. Jika Ipun pergi ke suatu planet yang massanya 5 kali massa bumi dan jari-jarinya 2 kali jari-jari bumi, maka berat Ipun di permukaan planet itu adalah? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>400 N</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>1000 N</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>500 N</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>2000 N</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>320 N</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(8, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Galaksi yang kita humi saat ini adalah? &hellip;</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">a.</div>\r\n						</td>\r\n						<td>Galaksi Andromeda</td>\r\n						<td>\r\n						<div class="choice">d.</div>\r\n						</td>\r\n						<td>Galaksi Cepheid</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">b.</div>\r\n						</td>\r\n						<td>Galaksi Bimasakti</td>\r\n						<td>\r\n						<div class="choice">e.</div>\r\n						</td>\r\n						<td>Galaksi Rozen</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">c.</div>\r\n						</td>\r\n						<td>Galaksi Arcturus</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(9, 0, '<div class="default">Sebuah pesawat bomber tipe Muttan sedang terbang mendatar dengan kecepatan 200 m/s dan ketinggian 500 m. Pesawat itu diberi misi untuk menjatuhkan bom ke suatu sasaran. Jika ia ingin mengenai sasarannya, berapa jarak antara titik saat pesawat menjatuhkan bom dan titik sasaran bom?</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>500 m</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>1750 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>1000 m</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>2000 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>1500 m</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(10, 0, '<div class="default">Sebuah cermin cembung berjari-jari 16 cm. Jika jarak bayangan ke cermin 6 cm, maka jarak benda ke lensa adalah &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>-24 cm</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>12 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>-12 cm</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>24 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>&nbsp;&nbsp;&nbsp; 8 cm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(11, 0, '<div class="default">Titik dekat seseorang 2 m. ia ingin membaca buku dengan jarak 25 cm. maka kekuatan kacamatanya adalah? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>-3,5 dioptri</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>-3 dioptri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>3,5 dioptri</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>tidak perlu menggunakan kacamata</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>3 dioptri</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(12, 0, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<div class="default">Sebuah lampu tertulis 25 w, 220 V. maka hambatan lampu itu adalah? &hellip;</div>\r\n\r\n			<div class="default">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">a.</div>\r\n						</td>\r\n						<td>8 ohm</td>\r\n						<td>\r\n						<div class="choice">d.</div>\r\n						</td>\r\n						<td>1936 ohm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">b.</div>\r\n						</td>\r\n						<td>625 ohm</td>\r\n						<td>\r\n						<div class="choice">e.</div>\r\n						</td>\r\n						<td>2200 ohm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<div class="choice">c.</div>\r\n						</td>\r\n						<td>1250 ohm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(13, 0, '<div class="default">We ______ because our parents couldn&rsquo;t send us to school. The appropriate word to fill the blank is? &hellip;</div>\r\n\r\n<div class="default">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">a.</div>\r\n			</td>\r\n			<td>Sent off</td>\r\n			<td>\r\n			<div class="choice">d.</div>\r\n			</td>\r\n			<td>Pulled up</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">b.</div>\r\n			</td>\r\n			<td>Paid off</td>\r\n			<td>\r\n			<div class="choice">e.</div>\r\n			</td>\r\n			<td>Lost out</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div class="choice">c.</div>\r\n			</td>\r\n			<td>Pulled off</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n'),
(14, 0, 'aku adalah itu adalah â–º\r\n'),
(15, 0, '<p>Respiration in green plants occur at . . .<br />\r\nA. Day only<br />\r\nB. Night only<br />\r\nC. Day and night only<br />\r\nD. Together with photosysthesis<br />\r\nE. When light is present</p>\r\n'),
(16, 0, '<p>Pada batang tumbuhan dikotil, jaringan yang berbatasan langsung dengan korteks adalah . . .<br />\r\n<em>A. Primary phloem<br />\r\nB. Secondary phloem<br />\r\nC. Tertiary phloem<br />\r\nD. Secondary xylem<br />\r\nE. Primary xylem</em></p>\r\n'),
(17, 0, 'Mengapa atmosfer bumi berwarna biru?<br />\r\nA. Atmosfer hanya menyerap warna biru<br />\r\nB. Atmosfer memantulkan cahaya biru<br />\r\nC. Atom penyusun atmosfer berwarna biru<br />\r\nD. Karena Bumi sebagian besar terdiri atas laut<br />\r\nE. Tidak ada jawaban yang benar'),
(18, 0, '<p>Sebuah teropong bintang mempunyai lensa objektif dan okuler yang berjarak 105 cm satu sama lain. Teropong tersebut diarahkan pada dua bintang. Mata melihat bayangan bintang jika berakomodasi pada jarak 30 cm. Kemudian lensa okuler digeser 2 cm keluar sehingga pada layar yang diletakkan 42 cm dibelakang okuler terbentuk bayangan. Hitung jarak fokus lensa objektif dan okuler!<br />\r\nA. 100 cm dan 6 cm<br />\r\nB. 6 cm dan 100 cm<br />\r\nC. 112 cm dan 8,4 cm<br />\r\nD. 112 cm dan 6 cm<br />\r\nE. tidak ada jawaban yang benar</p>\r\n'),
(19, 0, '<p><img alt="" src="https://irenerifdah.files.wordpress.com/2012/04/saturn2.jpg" style="height:142px; width:175px" /></p>\r\n\r\n<p>Diatas adalah planet<br />\r\nA. Merkurius<br />\r\nB. Venus<br />\r\nC. Mars<br />\r\nD. Bumi<br />\r\nE. Bulan</p>\r\n'),
(20, 0, '<p><img alt="" src="gambar/a.jpg" /></p>\r\n\r\n<p>A. Kebohongan publik<br />\r\nB. Fakta<br />\r\nC. Sakit<br />\r\nD. Gimana nih fans nya<br />\r\nE. Biasa aja kales</p>\r\n'),
(21, 0, '<p><img src="file:///C:/Users/DELL/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" style="height:154px; width:233px" /></p>\r\n\r\n<p>Kekuatan yang ditunjukkan amperemeter dibawah ini adalah?</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>a.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>70 cA</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>d.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>3,5 A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>b.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>70 mA</p>\r\n			</td>\r\n			<td style="width:24px">\r\n			<p>e.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>7 A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:24px">\r\n			<p>c.</p>\r\n			</td>\r\n			<td style="width:258px">\r\n			<p>0,8 A</p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpenyisihan`
--
ALTER TABLE `tbpenyisihan`
  ADD UNIQUE KEY `namatim` (`namatim`);

--
-- Indexes for table `tbpeserta`
--
ALTER TABLE `tbpeserta`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `namatim` (`namatim`);

--
-- Indexes for table `tbsimulasi`
--
ALTER TABLE `tbsimulasi`
  ADD UNIQUE KEY `namatim` (`namatim`);

--
-- Indexes for table `tbsoal`
--
ALTER TABLE `tbsoal`
  ADD UNIQUE KEY `indeks` (`indeks`);

--
-- Indexes for table `tbsoalsimulasi`
--
ALTER TABLE `tbsoalsimulasi`
  ADD UNIQUE KEY `indeks` (`indeks`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
