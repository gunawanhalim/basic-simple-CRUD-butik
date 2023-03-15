-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 12:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butikunilala`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `konfirmasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`, `konfirmasi`) VALUES
(11, 'tiwi', '', '2022-01-31 22:12:19', '2022-02-01 22:12:19', 'Konfirmasi Pembayaran'),
(12, 'Ilmi', '', '2022-02-02 11:54:08', '2022-02-03 11:54:08', 'Terima Pembayaran'),
(13, 'Ilmi', '', '2022-02-03 21:17:44', '2022-02-04 21:17:44', 'Belum Membayar');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `namakategori` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`, `create_at`) VALUES
(1, 'Pasminah', '2021-12-27 16:24:42'),
(6, 'Muslim Pria', '2021-12-27 16:24:53'),
(7, 'Rok Plisket', '2021-12-27 16:24:57'),
(8, 'Gamis', '2021-12-27 16:25:02'),
(9, 'Gamis Santai', '2021-12-27 16:25:12'),
(10, 'Ciput', '2022-01-04 15:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(150) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgljoin` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(7) NOT NULL DEFAULT 'Member',
  `lastlogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `namalengkap`, `email`, `username`, `password`, `notelp`, `alamat`, `tgljoin`, `role`, `lastlogin`) VALUES
(1, 'Admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '082348675662', 'Indonesia', '2020-03-16 11:31:17', 'Admin', NULL),
(2, 'Guest', 'guest', 'guest', '084e0343a0486ff05530df6c705c8bb4', '01234567890', 'Indonesia', '2020-03-16 11:30:40', 'Member', NULL),
(3, 'nurilmi', 'amalia', 'amalia', 'e10adc3949ba59abbe56e057f20f883e', '082348675662', 'perintis', '2021-10-13 07:20:11', 'Member', NULL),
(4, 'Nurilmi amalia marda', 'Nurilmiilmi71@gmail.com', 'ilmi', '$2y$10$YF1meOo0Aw1ygIHTsRur3OawUkY3J3PM42zNbvBDldJv1L2UIfmcC', '082348675662', 'pk7', '2021-10-31 14:11:57', 'Member', NULL),
(17, 'Ilmi', 'nurilmi1_@gmail.com', 'nurilmi', 'aa08769cdcb26674c6706093503ff0a3', '0898765567890', 'Jl. Perintis Kemerdekaan 7', '2021-12-05 21:29:08', 'Member', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no` int(11) NOT NULL,
  `metode` varchar(25) NOT NULL,
  `norek` varchar(25) NOT NULL,
  `logo` text DEFAULT NULL,
  `an` varchar(20) NOT NULL,
  `idcart` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no`, `metode`, `norek`, `logo`, `an`, `idcart`, `idkategori`, `idproduk`) VALUES
(1, 'Bank BCA', '13131231231', 'images/bca.jpg', 'butikunilala', 0, 0, 0),
(2, 'Bank Mandiri', '943248844843', 'images/mandiri.jpg', 'butikunilala', 0, 0, 0),
(3, 'DANA', '0882313132123', 'images/dana.png', 'butikunilala', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `idproduk`, `namaproduk`, `jumlah`, `harga`, `qty`) VALUES
(34, 11, 90, 'Pasminah Arab', 1, 23000, 0),
(35, 12, 90, 'Pasminah Arab', 1, 23000, 0),
(36, 13, 103, 'Gamis Santai', 5, 185000, 0);

--
-- Triggers `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_produk` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
UPDATE produk SET stok = stok-NEW.jumlah
WHERE idproduk = NEW.idproduk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `namaproduk` varchar(30) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `namakategori` varchar(30) NOT NULL,
  `hargabefore` int(11) NOT NULL,
  `hargaafter` int(11) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `warna` varchar(25) NOT NULL,
  `ukuran` varchar(25) NOT NULL,
  `stok` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkategori`, `namaproduk`, `gambar`, `deskripsi`, `namakategori`, `hargabefore`, `hargaafter`, `tgl_dibuat`, `warna`, `ukuran`, `stok`) VALUES
(90, 0, 'Pasminah Arab', 'pasminah.jpg', '', 'Pasminah', 0, 23000, '2022-02-02 03:54:08', 'Merah', 'M', 46),
(99, 0, 'Muslim Amisrah', 'pria_batik.jpg', '', 'Muslim Pria', 0, 175000, '2022-01-31 14:05:13', 'Coklat Corak', 'M', 47),
(103, 0, 'Gamis Santai', 'gamis.jpg', 'Kosong', 'Gamis', 0, 185000, '2022-02-03 13:17:44', 'Hijau Army', 'M', 45),
(104, 0, 'Muslimah ', 'gamis_muslimah.jpg\r\n', '', 'Gamis Santai', 0, 25000, '2022-01-30 13:38:55', 'Ungu', 'S', 10),
(105, 0, 'Pasminah Hitam', 'pasminahitam.jpg', 'Hitam', 'Pasminah', 0, 18000, '2022-01-31 04:12:07', 'Hitam', 'M', 5),
(106, 0, 'Muslim Amisrah', 'pria_batik.jpg', '', 'Muslim Pria', 0, 175000, '2022-01-31 09:22:02', 'Coklat Corak', 'M', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
