-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 10:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiko_dessert&drink`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `id_admin` int(2) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`id_admin`, `email`, `password`, `status`) VALUES
(2, 'mangadi2626@gmail.com', 'c84258e9c39059a89ab77d846ddab909', 'Y'),
(3, 'marjaya@undiksha.ac.id', '21232f297a57a5a743894a0e4a801fc3', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `telp_user` int(12) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`telp_user`, `nama_user`, `alamat`, `gender`, `email`, `password`) VALUES
(1, 'adi surya', 'Br. Dinas Darmawinangun', 'L', 'mangadi2626@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `dikirim`
--

CREATE TABLE `dikirim` (
  `no_resi` int(6) NOT NULL,
  `tgl kirim` date NOT NULL,
  `status` varchar(12) NOT NULL,
  `no_pembayaran` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membayar`
--

CREATE TABLE `membayar` (
  `no_pembayaran` int(6) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` int(3) NOT NULL,
  `no_order` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `no_order` int(6) NOT NULL,
  `tgl_order` date NOT NULL,
  `jmlh_order` int(3) NOT NULL,
  `total` int(10) NOT NULL,
  `kode_produk` char(3) NOT NULL,
  `id_pembeli` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(50) NOT NULL,
  `nama_produk` varchar(60) NOT NULL,
  `jenis_produk` varchar(25) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_produksi` varchar(6) NOT NULL,
  `fileToUpload` blob NOT NULL,
  `nama_img` varchar(500) NOT NULL,
  `ukuran_img` int(50) NOT NULL,
  `tipe_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `jenis_produk`, `harga`, `id_produksi`, `fileToUpload`, `nama_img`, `ukuran_img`, `tipe_img`) VALUES
(49, 'Pudding Oreo', 'Dessert', 15000, 'A2', 0x64657373657274627961696b6f5f32303230313032395f312e706e67, '', 0, ''),
(48, 'Dessert Box Oreo', 'Dessert', 15000, '27f237', 0x64657373657274627961696b6f5f32303230313032395f302e706e67, '', 0, ''),
(50, 'Oregal Dessert Box', 'Dessert', 15000, 'A3', 0x64657373657274627961696b6f5f32303230313032395f322e706e67, '', 0, ''),
(51, 'Tiramisu Desert Box', 'Dessert', 15000, 'A4', 0x64657373657274627961696b6f5f32303230313032395f332e706e67, '', 0, ''),
(52, 'Oreo Cheese Cake', 'Dessert', 15000, 'A5', 0x64657373657274627961696b6f5f32303230313032395f342e706e67, '', 0, ''),
(53, 'Fruity Salad Yakult', 'Drink', 10000, 'M1', 0x64657373657274627961696b6f5f32303230313032395f352e706e67, '', 0, ''),
(54, 'Boba Brown Sugar', 'Drink', 10000, 'M2', 0x64657373657274627961696b6f5f32303230313032395f362e706e67, '', 0, ''),
(55, 'Coklat', 'Drink', 10000, 'M3', 0x64657373657274627961696b6f5f32303230313032395f372e706e67, '', 0, ''),
(56, 'Matcha', 'Drink', 10000, 'M4', 0x64657373657274627961696b6f5f32303230313032395f382e706e67, '', 0, ''),
(57, 'Vanilla', 'Drink', 10000, 'M5', 0x64657373657274627961696b6f5f32303230313032395f392e706e67, '', 0, ''),
(58, 'Milo', 'Drink', 10000, 'M6', 0x64657373657274627961696b6f5f32303230313032395f31302e706e67, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Dessert'),
(2, 'Drink');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`telp_user`);

--
-- Indexes for table `dikirim`
--
ALTER TABLE `dikirim`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indexes for table `membayar`
--
ALTER TABLE `membayar`
  ADD PRIMARY KEY (`no_pembayaran`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`no_order`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
