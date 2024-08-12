-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 03:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yasminuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `kategori` int(11) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `kategori`, `kondisi`, `penerbit`, `stok`, `berat`, `harga`, `gambar`) VALUES
(1, 'Pulang ', 'Tere Liye', 2, 'Cluster I - Good condi', 'Gramedia', 7776, '300 gram', 300000, 'it_ends_with_us_by_colleen_hoo_1650015160_4495250d_progressive2.jpg'),
(3, 'Hujan', 'Tere Liye', 1, 'Cluster II - Damage 80%', 'Gramedia', 4291, '300 gram', 60000, 'preloved_hujan_by_tere_liye_1629124929_d08e9d47_progressive.jpg'),
(4, 'Laut Bercerita', 'Leila', 2, 'Cluster III - Damage 50%', 'Gramedia', 90244, '300 gram', 300000, 'Laut-Bercerita-Leila-S_-Chudori.jpg'),
(5, 'Mocking Jay - Hunger Games', 'Suzane', 2, 'Cluster I - Good condi', 'Gramedia', 1, '300 gram', 300000, '44eb0b7d5bee8d55e6f4df09d99f9679.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `no_pemesanan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`no_pemesanan`, `id_user`, `id_buku`, `jumlah`, `total`) VALUES
('OB1656727709', 1, 3, 42, 2520000),
('OB1656734546', 3, 1, 5, 1500000),
('OB1657290233', 1, 4, 300, 90000000),
('OB1657376706', 1, 4, 71000, 2147483647),
('OB1657690218', 1, 1, 3, 900000),
('OB1657690218', 1, 1, 190, 1500000),
('OB1657690218', 1, 1, 3, 900000),
('OB1658117793', 6, 5, 3, 900000),
('OB1658117793', 6, 3, 8, 480000),
('OB1658193837', 1, 4, 56, 16800000),
('OB1658193837', 1, 3, 1, 60000),
('OB1658193906', 1, 1, 1, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `deskripsi`) VALUES
(1, 'Komik', 'Komik merupakan cerita yang menonjolkan pada gambar yang ditampilkan sesuai urutan peristiwa.'),
(2, 'dewdwe', 'Komik merupakan cerita yang menonjolkan pada gambar yang ditampilkan sesuai urutan peristiwa.'),
(3, 'ddwef', 'ini aku ubah ya');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `no_pemesanan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Have not shipped yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `no_pemesanan`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`) VALUES
(5, 'OB1656727709', 1, '2520000', '02/07/2022', 'Umban sari', 'BRI', 'Screenshot_2022-07-01_1452236.png', 'Udah lunas', 'Order has been processed'),
(6, 'OB1656734546', 3, '1500000', '02/07/2022', 'Umban sari', 'BRI', 'Laut-Bercerita-Leila-S_-Chudori1.jpg', 'Udah lunas', 'Order has been processed'),
(7, 'OB1657290233', 1, '90000000', '08/07/2022', 'Umban sari', 'BRI', '', 'Udah lunas', 'Have not shipped yet'),
(8, 'OB1657376706', 1, '2147483647', '09/07/2022', 'Umban sari', 'MANDIRI', 'avatar-3.png', 'Udah lunas', 'Have not shipped yet'),
(9, 'OB1657690218', 1, '3300000', '13/07/2022', 'Umban sari', 'BRI', 'avatar-1.png', 'deded', 'Have not shipped yet'),
(10, 'OB1658117793', 6, '1380000', '18/07/2022', 'Pekanbaru', 'BRI', '44eb0b7d5bee8d55e6f4df09d99f9679.jpg', 'Udah lunas', 'Have Done'),
(11, 'OB1658193837', 1, '16860000', '19/07/2022', 'Umban sari', 'BRI', 'SpandukITSALAB.png', 'Udah lunas', 'Have not shipped yet'),
(12, 'OB1658193906', 1, '300000', '19/07/2022', 'Umban sari', 'BRI', '44eb0b7d5bee8d55e6f4df09d99f96791.jpg', 'lunas', 'Order has been sent');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_penjualan` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Waiting..'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_user`, `no_penjualan`, `no_hp`, `kondisi`, `alamat`, `harga`, `gambar`, `judul`, `pengarang`, `tanggal`, `status`) VALUES
(13, 1, 'BOP1657035557', '0987', 'Cluster I - Good condi', 'Umban sari', 300000, 'kindpng_109805.png', 'Pulang', 'Tere Liye', '', 'Waiting..'),
(14, 1, 'BOP1657035727', 'erg', 'Cluster I - Good condi', 'Umban sari', 300000, '', 'Pulang', 'wrg', '2022-07-22', 'Submission is accepted, please come according to the submission'),
(15, 6, 'BOP1658117834', '222', 'Cluster II - Damage 80%', 'Umban sari', 50000, '44eb0b7d5bee8d55e6f4df09d99f9679.jpg', 'Pulang', 'wrg', '2022-07-14', 'Sorry, the submission was not accepted'),
(16, 6, 'BOP1658117902', '44', 'Cluster I - Good condi', 'Pekanbaru', 50000, '44eb0b7d5bee8d55e6f4df09d99f96791.jpg', 'Pulang', 'gerg', '2022-07-06', 'Waiting..'),
(17, 1, 'BOP1658193932', '0987', 'Cluster I - Good condi', 'Umban sari', 300000, '44eb0b7d5bee8d55e6f4df09d99f96792.jpg', 'Pulang', 'Tere Liye', '2022-07-13', 'Sorry, the submission was not accepted');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `testi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `id_user`, `testi`) VALUES
(3, 1, 'Bagus banget pelayanannyaaa!!'),
(4, 3, 'Bagus bagus semuanya'),
(6, 5, 'Wiiii bagus bukunya, gak boongan. ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(1, 'Yasmin Nadhifa ', 'yasmin@gmail.com', '$2y$10$IsxBKTH4.4vbLei.bypYJeD5j42FjvKoit82F/ZU5es7Om9KoaIsW', 'WhatsApp-Image-2022-07-14-at-8_57_12-PM.jpg', 'User', '1655736600'),
(2, 'Admin cakep', 'admin@gmail.com', '$2y$10$e6nMhCvkRfbGBPMGU33ZLeuWp8BKRHqqMKiMq05c1SDVYqi6HyIRK', 'avatar-2(1)1.png', 'Admin', '1655736613'),
(3, 'Ardiyanto', 'ardiyanto@alumni.pcr.ac.id', '$2y$10$p/1v256526b9AZk3zbFL0.RLSqHbUuvaO8ruIwb.jUok7Tyen2CVq', 'default.jpg', 'User', '1655977971'),
(4, 'Anzala', 'anzala@gmail.com', '$2y$10$Ce2eAO6QjTzoUP/qzZulQuo3vCraHZtjruvjjGRpgELib4gEq7Dsa', 'default.jpg', 'User', '1657794841'),
(5, 'Baskoro', 'ibas@gmail.com', '$2y$10$Ma8dJgvdidW29PMD.VBti.v0dCWHdycbj9Do972gMjE0g4OWpw0t6', 'default.jpg', 'User', '1657794935'),
(6, 'Aludra Meise', 'aludra@gmail.com', '$2y$10$mbkH4UXuh81PoRExuWiUQuXoQCG5vQxN7xr2YjplZ4eM/QQ5LJ8re', '44eb0b7d5bee8d55e6f4df09d99f9679.jpg', 'User', '1658117444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`kategori`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD KEY `fkk_user` (`id_user`),
  ADD KEY `fkk_buku` (`id_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_buku` (`id_buku`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkkk_user` (`id_user`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userr` (`id_user`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userrr` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `fkk_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  ADD CONSTRAINT `fkk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `fk_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fkkk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_userr` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `testi`
--
ALTER TABLE `testi`
  ADD CONSTRAINT `fk_userrr` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
