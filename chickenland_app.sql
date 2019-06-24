-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2019 at 10:05 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chickenland_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `chickenNews`
--

CREATE TABLE `chickenNews` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isiBerita` text NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `urlImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `integrasiGojek`
--

CREATE TABLE `integrasiGojek` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `integrasiGojek`
--

INSERT INTO `integrasiGojek` (`id`, `token`, `latitud`, `longitud`) VALUES
(1, 'c7a854aa-d93a-4eab-9f05-b5aaa8099678', '-7.998197286251378', '112.61419974267484');

-- --------------------------------------------------------

--
-- Table structure for table `loginUser`
--

CREATE TABLE `loginUser` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginUser`
--

INSERT INTO `loginUser` (`email`, `password`, `nama`, `token`) VALUES
('surogento4@gmail.com', 'sayasuka001', 'ahmad gika', 'b898fce7245d6bd9ea78dceadad2f758');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(9) NOT NULL,
  `linkPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `linkPhoto`) VALUES
(1, 'sayap atas', 20000, 'https://blablabla.com/file.png');

-- --------------------------------------------------------

--
-- Table structure for table `registrasiUser`
--

CREATE TABLE `registrasiUser` (
  `userId` int(11) NOT NULL,
  `tokenRegis` varchar(100) NOT NULL,
  `expired` datetime NOT NULL,
  `clicked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasiUser`
--

INSERT INTO `registrasiUser` (`userId`, `tokenRegis`, `expired`, `clicked`) VALUES
(7, 'f976812bfae3b8a1a8052525f0ff8d98', '2019-06-09 14:19:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessionUser`
--

CREATE TABLE `sessionUser` (
  `userId` int(5) NOT NULL,
  `token` varchar(255) NOT NULL,
  `dateStart` date NOT NULL,
  `validUntil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessionUser`
--

INSERT INTO `sessionUser` (`userId`, `token`, `dateStart`, `validUntil`) VALUES
(1, '4dcd9f6c7955823b97ea30956e6048947a488e40a9d3e9d8bf30ead56dd7a387c726da1ae37540c5fea1ebf0a977d140d4c51b5afd421878dd5d00e9cdaa6339', '2019-06-16', '2019-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` varchar(20) NOT NULL,
  `userId` int(9) NOT NULL,
  `item` text NOT NULL,
  `totalBayar` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `paymentType` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `koordinat` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `statusTransaksi` varchar(50) NOT NULL,
  `datamasuk` datetime NOT NULL,
  `dataupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `userId`, `item`, `totalBayar`, `keterangan`, `paymentType`, `alamat`, `koordinat`, `phone`, `statusTransaksi`, `datamasuk`, `dataupdate`) VALUES
('CL-Tp3EfaK2019', 1, '{\"id\":\"1\",\"nama\":\"TopUp\",\"subtotal\":100000}', 100000, 'Top Up Saldo', NULL, NULL, NULL, NULL, 'Menungu Pembayaran', '2019-06-06 09:20:50', '2019-06-06 09:20:50'),
('CL-Tp45Uug2019', 1, '[{\"id\":\"1\",\"nama\":\"sayap atas\",\"subtotal\":40000}]', 40000, 'Beli Produk', 'transfer', 'kuvukiland', '123,123', '123', 'Menungu pembayaran', '2019-06-16 10:50:29', '2019-06-16 10:50:29'),
('CL-Tpdmkzb2019', 1, '[{\"id\":\"1\",\"nama\":\"sayap atas\",\"subtotal\":40000}]', 40000, 'Beli Produk', 'transfer', 'kuvukiland', '123,123', '123', 'Menungu pembayaran', '2019-06-07 02:05:10', '2019-06-07 02:05:10'),
('CL-TpgiqFB2019', 1, '[{\"id\":\"1\",\"nama\":\"sayap atas\",\"subtotal\":40000}]', 40000, 'Beli Produk', 'transfer', 'kuvukiland', '123,123', '123', 'Menungu pembayaran', '2019-06-07 02:05:27', '2019-06-07 02:05:27'),
('CL-TpGYfy82019', 1, '[{\"id\":\"1\",\"nama\":\"sayap atas\",\"subtotal\":40000}]', 40000, 'Beli Produk', 'transfer', 'kuvukiland', '123,123', '123', 'Menungu pembayaran', '2019-06-07 02:01:47', '2019-06-07 02:01:47'),
('CL-TpiJbg22019', 1, '{\"id\":\"1\",\"nama\":\"TopUp\",\"subtotal\":100000}', 100000, 'Top Up Saldo', NULL, NULL, NULL, NULL, 'Menungu Pembayaran', '2019-06-07 02:07:12', '2019-06-07 02:07:12'),
('CL-TpqFGHz2019', 1, '[{\"id\":\"1\",\"nama\":\"sayap atas\",\"subtotal\":40000}]', 40000, 'Beli Produk', 'transfer', 'kuvukiland', '123,123', '123', 'Menungu pembayaran', '2019-06-07 01:51:35', '2019-06-07 01:51:35'),
('CL-TpRMwPJ2019', 1, '[{\"id\":\"1\",\"nama\":\"sayap atas\",\"subtotal\":40000}]', 40000, 'Beli Produk', 'saldo', 'kuvukiland', '123,123', '123', 'processing order', '2019-06-07 01:58:21', '2019-06-07 01:58:21'),
('CL-TpX7moi2019', 1, '[]', 0, 'Beli Produk', 'transfer', 'kuvukiland', '123,123', '123', 'Menungu pembayaran', '2019-06-07 01:42:46', '2019-06-07 01:42:46'),
('CL-TpyGDo42019', 1, '{\"id\":\"1\",\"nama\":\"TopUp\",\"subtotal\":100000}', 100000, 'Top Up Saldo', NULL, NULL, NULL, NULL, 'Menungu Pembayaran', '2019-06-06 09:16:27', '2019-06-06 09:16:27'),
('CL-TpynpKE2019', 1, '[{\"id\":\"1\",\"nama\":\"sayap atas\",\"subtotal\":40000}]', 40000, 'Beli Produk', 'saldo', 'kuvukiland', '123,123', '123', 'processing order', '2019-06-07 01:59:28', '2019-06-07 01:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `passwordUser` varchar(255) NOT NULL,
  `saldo` int(9) NOT NULL DEFAULT '0',
  `isverifed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `phone`, `passwordUser`, `saldo`, `isverifed`) VALUES
(1, 'ahmad gika', 'surogento4@gmail.com', '087755500490', '122ea07f36a719a426db361248a2e3ac1f666eb9ca1044ad85919610f6726fb23cddcb2cfc85c9914d7d49d0d7d83b6c8ac129989ce192a3c19d319ab75ef923', 20000, 1),
(7, 'ahmad gika', 'suro.gento4@gmail.com', '087755500490', '122ea07f36a719a426db361248a2e3ac1f666eb9ca1044ad85919610f6726fb23cddcb2cfc85c9914d7d49d0d7d83b6c8ac129989ce192a3c19d319ab75ef923', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chickenNews`
--
ALTER TABLE `chickenNews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integrasiGojek`
--
ALTER TABLE `integrasiGojek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginUser`
--
ALTER TABLE `loginUser`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasiUser`
--
ALTER TABLE `registrasiUser`
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Indexes for table `sessionUser`
--
ALTER TABLE `sessionUser`
  ADD UNIQUE KEY `userId` (`userId`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chickenNews`
--
ALTER TABLE `chickenNews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `integrasiGojek`
--
ALTER TABLE `integrasiGojek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrasiUser`
--
ALTER TABLE `registrasiUser`
  ADD CONSTRAINT `registrasiUser_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sessionUser`
--
ALTER TABLE `sessionUser`
  ADD CONSTRAINT `sessionUser_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
