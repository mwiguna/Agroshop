-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 06:58 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agroshop_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_user`
--

CREATE TABLE `biodata_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `status` varchar(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nohp` varchar(23) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(60) NOT NULL,
  `negara` varchar(40) NOT NULL,
  `kodepos` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata_user`
--

INSERT INTO `biodata_user` (`id`, `nama`, `status`, `email`, `nohp`, `password`, `tgllahir`, `alamat`, `kota`, `negara`, `kodepos`) VALUES
(18, 'M. Wiguna Saputra', 'admin', 'd.gunafsm@yahoo.co.id', '081368358578', '$2y$10$NvqDxUcqUraYC1Z5kqbKYuZJVEe11VZB.6B1STrjxEhnucf/33ZNm', '0000-00-00', '', 'Jambi', 'Indonesia', ''),
(22, 'Yulia Oktaviani', 'user', 'yuliaoktaviani@gmail.com', '085368795455', '$2y$10$pJ8avRLOzeTh2m4WylShH.rjvVw6KYHfUABBvZPU2IIEWFmhgwA9u', '0000-00-00', 'Tehok No.043', 'Jambi', 'Indonesia', '373112');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

CREATE TABLE `confirmed` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `produk` varchar(80) NOT NULL,
  `harga` int(40) NOT NULL,
  `tanggal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `kota` varchar(60) NOT NULL,
  `negara` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` varchar(30) NOT NULL,
  `tanggal` varchar(40) NOT NULL,
  `produk` varchar(80) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(30) NOT NULL,
  `status` int(11) NOT NULL,
  `norek` varchar(100) NOT NULL,
  `namarek` varchar(60) NOT NULL,
  `konfirmasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `nama`, `email`, `nohp`, `kota`, `negara`, `alamat`, `kodepos`, `tanggal`, `produk`, `jumlah`, `harga`, `status`, `norek`, `namarek`, `konfirmasi`) VALUES
(3, 'M. Wiguna Saputra', 'd.gunafsm@yahoo.co.id', '2147483647', 'Jambi', 'Indonesia', 'Telanai Pura', '373110', 'Minggu, 15 Mei 2016 Pukul : 22:13:43', 'Sirup Kayu Manis Rasa Madu', 2, 40000, 1, '1234322123-6767', 'saya sugeng id', 1),
(4, 'Misal', 'd.gunafsm@yahoo.co.id', '085368795455', 'Jambi', 'Indonesia', 'Telanai Pura', '373110', 'Minggu, 15 Mei 2016 Pukul : 22:20:28', 'Sirup Kayu Manis Rasa Madu', 5, 100000, 0, '1234322123-676723', 'Sabo', 1),
(5, 'Yulia Oktaviani', 'yuliaoktaviani@gmail.com', '085368795455', 'Jambi', 'Indonesia', 'Tehok No.043', '373137', 'Minggu, 15 Mei 2016 Pukul : 23:3:17', 'Sirup Kayu Manis Rasa Madu', 3, 60000, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `penjual` text NOT NULL,
  `harga` int(30) NOT NULL,
  `hargaper` varchar(20) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `olahan` varchar(30) NOT NULL,
  `metode` varchar(80) NOT NULL,
  `bahan` text NOT NULL,
  `keterangan` text NOT NULL,
  `foto1` varchar(60) NOT NULL,
  `foto2` varchar(60) NOT NULL,
  `foto3` varchar(60) NOT NULL,
  `foto4` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `penjual`, `harga`, `hargaper`, `kategori`, `olahan`, `metode`, `bahan`, `keterangan`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
(4, 'Sirup Kayu Manis Rasa Madu', 'Yulia Oktaviani, Nofita Rahayu Ningsih, Miftahul Huda, Krisna Bayu Pratama, Zalman', 20000, 'Botol (400ml)', 'Makanan', 'Kayu Manis, Madu', '', '', '', '../assets/img/minyakkelapa.jpg', '../assets/img/kelapa.jpg', '../assets/img/pinang.jpg', '../assets/img/jernang.jpg'),
(5, 'Minyak Kelapa / Virgin Coconut Oil (VCO)', 'Anugrah Pritama Arde, Daniel Perdamaian, Widianto Sebastian', 50000, 'Botol (600ml)', 'Makanan, Obat', 'Kelapa', 'pencampuran dengan lava metal agar greget dan lebih berasa. PUAS.', 'Pertamax, Metal, Kelapa, Kepala', 'VCO kualitas terbaik untuk kesuburan. \r\nDibuat dengan lelahan metal dijamin puas.', '../assets/img/minyakkelapa.jpg', '../assets/img/kelapa.jpg', '../assets/img/minyakkelapa.jpg', '../assets/img/kelapa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_user`
--
ALTER TABLE `biodata_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_user`
--
ALTER TABLE `biodata_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `confirmed`
--
ALTER TABLE `confirmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
