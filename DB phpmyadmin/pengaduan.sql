-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 02:36 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `idkabupaten` int(11) NOT NULL,
  `idprovinsi` int(11) NOT NULL,
  `namakabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kekerasan`
--

CREATE TABLE IF NOT EXISTS `kekerasan` (
  `id_kekerasan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_kekerasan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kekerasan`
--

INSERT INTO `kekerasan` (`id_kekerasan`, `id`, `nama_kekerasan`) VALUES
(1, 75, 'Fisik'),
(2, 75, 'Psikis'),
(3, 75, 'Seksual'),
(4, 75, 'Ekploitasi');

-- --------------------------------------------------------

--
-- Table structure for table `korban`
--

CREATE TABLE IF NOT EXISTS `korban` (
  `id_korban` int(11) NOT NULL,
  `id` int(100) NOT NULL,
  `tanggal_korban` date NOT NULL,
  `nama_korban` varchar(55) NOT NULL,
  `tempat_lahir_korban` varchar(55) NOT NULL,
  `tanggal_lahir_korban` date NOT NULL,
  `usia_korban` varchar(50) NOT NULL,
  `jeniskelamin_korban` varchar(32) NOT NULL,
  `alamat_korban` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korban`
--

INSERT INTO `korban` (`id_korban`, `id`, `tanggal_korban`, `nama_korban`, `tempat_lahir_korban`, `tanggal_lahir_korban`, `usia_korban`, `jeniskelamin_korban`, `alamat_korban`) VALUES
(13, 75, '2017-12-13', 'fatkhur', 'jombang', '1996-02-06', '21', 'Laki-laki', 'jombang'),
(14, 75, '2017-12-13', 'fani', 'jombang', '1996-11-13', '21', 'Laki-laki', 'jombang');

-- --------------------------------------------------------

--
-- Table structure for table `pelaku`
--

CREATE TABLE IF NOT EXISTS `pelaku` (
  `id_pelaku` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_pelaku` varchar(100) NOT NULL,
  `tempat_lahir_pelaku` varchar(100) NOT NULL,
  `tanggal_lahir_pelaku` date NOT NULL,
  `jeniskelamin_pelaku` varchar(32) NOT NULL,
  `alamat_pelaku` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelaku`
--

INSERT INTO `pelaku` (`id_pelaku`, `id`, `nama_pelaku`, `tempat_lahir_pelaku`, `tanggal_lahir_pelaku`, `jeniskelamin_pelaku`, `alamat_pelaku`) VALUES
(15, 75, 'mukidi', 'gresik', '2005-02-08', 'Laki-laki', 'jombang'),
(16, 75, 'rei', 'surabaya', '1998-02-10', 'Laki-laki', 'kaboan');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `idprovinsi` int(11) NOT NULL,
  `namaprovinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`idprovinsi`, `namaprovinsi`) VALUES
(12, 'jawa timur'),
(13, 'jawa tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE IF NOT EXISTS `tb_pengaduan` (
  `id` int(11) NOT NULL,
  `idregister` varchar(32) NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `tempat_lahir_pelapor` varchar(100) NOT NULL,
  `tanggal_lahir_pelapor` date NOT NULL,
  `jeniskelamin_pelapor` varchar(32) NOT NULL,
  `alamat_pelapor` varchar(255) NOT NULL,
  `notelp_pelapor` int(11) NOT NULL,
  `tempat_kejadian` varchar(100) NOT NULL,
  `kronologi` longtext NOT NULL,
  `jenis_layanan` varchar(255) NOT NULL,
  `tindakan_selanjutnya` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id`, `idregister`, `tanggal_pengaduan`, `nama_pelapor`, `tempat_lahir_pelapor`, `tanggal_lahir_pelapor`, `jeniskelamin_pelapor`, `alamat_pelapor`, `notelp_pelapor`, `tempat_kejadian`, `kronologi`, `jenis_layanan`, `tindakan_selanjutnya`) VALUES
(75, 'IDREG75', '2017-12-13', 'rizal', 'jombang', '2017-12-08', 'Laki-laki', 'jombang', 85, 'Rumah Tangga', 'di cabuli saat di pom bensin', 'Kesehatan', 'di hukum mati');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `verpass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `password`, `verpass`, `gender`, `locale`, `picture`, `link`, `created`, `modified`, `hak_akses`) VALUES
(5, '', '', 'ahmad', 'admin', 'ahmad kirom@gmail.com', 'adin', 'c1e8a000473957b8c5d51542c4c75e0c', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 'google', '113287651451500666474', 'Mr', 'Anon', 'mr.anon1310@gmail.com', '', '', 'male', 'en', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', 'https://plus.google.com/113287651451500666474', '2017-11-15 04:45:24', '2017-11-15 08:16:37', 2),
(81, '', '', '', 'yahya', 'yahya@gmail.com', 'den', '32ce9c04a986b6360b0ea1984ed86c6c', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(82, '', '', '', 'ivan', 'ivandimasrek06@gmail.com', 'den', '32ce9c04a986b6360b0ea1984ed86c6c', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(83, '', '', '', 'admin', 'admin@gmail.com', 'admin', 'admin', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(85, 'google', '100562614988018839054', 'ach.', 'adinyahya', 'yahyaadin@gmail.com', '', '', '', 'in', 'https://lh3.googleusercontent.com/-lChq4QJTI1Y/AAAAAAAAAAI/AAAAAAAAAfo/lOSyBhJXFw4/photo.jpg', 'https://plus.google.com/100562614988018839054', '2017-11-30 07:25:07', '2017-11-30 07:25:07', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`idkabupaten`), ADD KEY `idprovinsi` (`idprovinsi`);

--
-- Indexes for table `kekerasan`
--
ALTER TABLE `kekerasan`
  ADD PRIMARY KEY (`id_kekerasan`), ADD KEY `id` (`id`), ADD KEY `idregister` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`id_korban`), ADD KEY `nama_korban` (`nama_korban`), ADD KEY `id` (`id`), ADD KEY `nama_korban_2` (`nama_korban`);

--
-- Indexes for table `pelaku`
--
ALTER TABLE `pelaku`
  ADD PRIMARY KEY (`id_pelaku`), ADD KEY `id` (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`idprovinsi`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kekerasan`
--
ALTER TABLE `kekerasan`
  MODIFY `id_kekerasan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `korban`
--
ALTER TABLE `korban`
  MODIFY `id_korban` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pelaku`
--
ALTER TABLE `pelaku`
  MODIFY `id_pelaku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
ADD CONSTRAINT `kabupaten_ibfk_1` FOREIGN KEY (`idprovinsi`) REFERENCES `provinsi` (`idprovinsi`);

--
-- Constraints for table `kekerasan`
--
ALTER TABLE `kekerasan`
ADD CONSTRAINT `kekerasan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_pengaduan` (`id`);

--
-- Constraints for table `korban`
--
ALTER TABLE `korban`
ADD CONSTRAINT `korban_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_pengaduan` (`id`);

--
-- Constraints for table `pelaku`
--
ALTER TABLE `pelaku`
ADD CONSTRAINT `pelaku_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_pengaduan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
