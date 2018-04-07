-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 11:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumur_bor`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sumur_bor`
--

CREATE TABLE `data_sumur_bor` (
  `id_sumur_bor` int(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `desa` int(255) NOT NULL,
  `kecamatan` int(255) NOT NULL,
  `kabupaten` int(255) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `kedalaman_akuifer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sumur_bor`
--

INSERT INTO `data_sumur_bor` (`id_sumur_bor`, `lokasi`, `desa`, `kecamatan`, `kabupaten`, `lon`, `lat`, `kedalaman_akuifer`) VALUES
(1, 'Mesjid Darul Ikhsan', 2, 12, 2, '96.05675', '4.38372222', '97-106 (Pasir Kuarsa)'),
(2, 'Pesantren Babussalam', 1, 1, 1, '96.1275', '4.1505', '70-82 (Pasir Kuarsa), 89-95 ()');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `id_kecamatan`) VALUES
(1, 'Suak Indrapuri', '1'),
(2, 'hhhh', '12');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `logo`) VALUES
(1, 'Kabupaten Aceh Barat', 'img/aceh_barat.png'),
(2, 'Kabupaten Aceh Barat Daya', 'img/aceh_barat_daya.jpg'),
(3, 'Kabupaten Aceh Besar', '0'),
(4, 'Kabupaten Aceh Jaya', '0'),
(5, 'Kabupaten Aceh Selatan', '0'),
(6, 'Kabupaten Aceh Singkil', '0'),
(7, 'Kabupaten Aceh Tamiang', '0'),
(8, 'Kabupaten Aceh Tengah', '0'),
(9, 'Kabupaten Aceh Tenggara', '0'),
(10, 'Kabupaten Aceh Timur', '0'),
(11, 'Kabupaten Aceh Utara', '0'),
(12, 'Kabupaten Bener Meriah', '0'),
(13, 'Kabupaten Bireuen', '0'),
(14, 'Kabupaten Gayo Lues', '0'),
(15, 'Kabupaten Nagan Raya', '0'),
(16, 'Kabupaten Pidie', '0'),
(17, 'Kabupaten Pidie Jaya', '0'),
(18, 'Kabupaten Simeulue', '0'),
(19, 'Kota Banda Aceh', '0'),
(20, 'Kota Langsa', '0'),
(21, 'Kota Lhokseumawe', '0'),
(22, 'Kota Sabang', '0'),
(23, 'Kota Subulussalam', '0'),
(24, 'kamning', 'img/Screenshot (12).png'),
(25, 'sss', 'img/Screenshot (11).png');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `id_kabupaten` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kabupaten`) VALUES
(1, 'Johan Pahlawan', 1),
(2, 'Samatiga', 1),
(3, 'Bubon', 1),
(4, 'Arongan Lambalek', 1),
(5, 'Woyla', 1),
(6, 'Woyla Barat', 1),
(7, 'Woyla Timur', 1),
(8, 'Kaway XVI', 1),
(9, 'Meureubo', 1),
(10, 'Pantai Ceureumen', 1),
(11, 'Sungai Mas', 1),
(12, 'Manggeng', 2),
(13, 'Tangan-Tangan', 2),
(14, 'Blang Pidie', 2),
(15, 'Susoh', 2),
(16, 'Kuala Batee', 2),
(17, 'Babah Rot', 2),
(18, 'Lhoong', 3),
(19, 'Lho''nga', 3),
(20, 'Leupung', 3),
(21, 'Indrapuri', 3),
(22, 'Kuta Cot Glie', 3),
(23, 'Seulimeum', 3),
(24, 'Kota Jantho', 3),
(25, 'Lembah Seulawah', 3),
(26, 'Mesjid Raya', 3),
(27, 'Darussalam', 3),
(28, 'Baitussalam', 3),
(29, 'Kuta Baro', 3),
(30, 'Montasik', 3),
(31, 'Ingin Jaya', 3),
(32, 'Krueng Barona Jaya', 3),
(33, 'Suka Makmur', 3),
(34, 'Kuta Malaka', 3),
(35, 'Simpang Tiga', 3),
(36, 'Darul Imarah', 3),
(37, 'Darul Kamal', 3),
(38, 'Peukan Bada', 3),
(39, 'Pulo Aceh', 3),
(40, 'Teunom', 4),
(41, 'Panga', 4),
(42, 'Krueng Sabee', 4),
(43, 'Setia Bakti', 4),
(44, 'Sampoiniet', 4),
(45, 'Jaya', 4),
(46, 'Trumon', 5),
(47, 'Trumon Tengah', 5),
(48, 'Trumon Timur', 5),
(49, 'Bakongan', 5),
(50, 'Bakongan Timur', 5),
(51, 'Kluet Selatan', 5),
(52, 'Kluet Timur', 5),
(53, 'Kluet Utara', 5),
(54, 'Pasie Raja', 5),
(55, 'Kluet Tengah', 5),
(56, 'Tapak Tuan', 5),
(57, 'Sama Dua', 5),
(58, 'Sawang', 5),
(59, 'Meukek', 5),
(60, 'Labuhan Haji', 5),
(61, 'Labuhan Haji Timur', 5),
(62, 'Labuhan Haji Barat', 5),
(63, 'Pulau Banyak', 6),
(64, 'Singkil', 6),
(65, 'Singkil Utara', 6),
(66, 'Kuala Baru', 6),
(67, 'Simpang Kanan', 6),
(68, 'Gunung Meriah', 6),
(69, 'Danau Paris', 6),
(70, 'Suro Makmur', 6),
(71, 'Singkohor', 6),
(72, 'Kota Baharu', 6),
(73, 'Tamiang Hulu', 7),
(74, 'Kejuruan Muda', 7),
(75, 'Rantau', 7),
(76, 'Kota Kuala Simpang', 7),
(77, 'Seruway', 7),
(78, 'Bendahara', 7),
(79, 'Karang Baru', 7),
(80, 'Manyak Payed', 7),
(81, 'Linge', 8),
(82, 'Bintang', 8),
(83, 'Lut Tawar', 8),
(84, 'Kebayakan', 8),
(85, 'Pegasing', 8),
(86, 'Bebesen', 8),
(87, 'Kute Panang', 8),
(88, 'Silih Nara', 8),
(89, 'Ketol', 8),
(90, 'Celala', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
(1, 'haswel', 'haswel', 'hariririski');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sumur_bor`
--
ALTER TABLE `data_sumur_bor`
  ADD PRIMARY KEY (`id_sumur_bor`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sumur_bor`
--
ALTER TABLE `data_sumur_bor`
  MODIFY `id_sumur_bor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
