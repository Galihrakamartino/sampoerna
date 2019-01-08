-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jan 2019 pada 14.38
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampoerna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `tanggal`, `foto`) VALUES
(2, 'ya', 'ya', '2019-01-16', 'blog-1.jpg'),
(3, 'amild', 'baru', '2019-01-03', 'amild2.png'),
(4, 'marlboro', 'rokok marlboro', '2019-01-04', 'marlobro.jpg'),
(5, 'oi', 'oi', '2019-01-03', 'blog-5.jpg'),
(6, 'bro', 'bro', '2019-01-05', 'cover_img_2.jpg'),
(7, 'aa', 'aaaa', '2019-01-04', 'about-img.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `machine`
--

CREATE TABLE `machine` (
  `id_equipment` int(11) NOT NULL,
  `nama_machine` varchar(255) NOT NULL,
  `type_machine` varchar(255) NOT NULL,
  `nama_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `machine`
--

INSERT INTO `machine` (`id_equipment`, `nama_machine`, `type_machine`, `nama_unit`) VALUES
(50005887, 'M51', 'Maker', 'SE'),
(50005888, 'M51', 'Maker', 'MAX'),
(50005889, 'M51', 'Maker', 'FILTROMAT'),
(50005891, 'P51', 'Maker', 'CH'),
(50006886, 'M51', 'Maker', 'VE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `runtime`
--

CREATE TABLE `runtime` (
  `id_runtime` int(11) NOT NULL,
  `rh` int(11) NOT NULL,
  `id_equipment` int(11) NOT NULL,
  `tanggalwaktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `runtime`
--

INSERT INTO `runtime` (`id_runtime`, `rh`, `id_equipment`, `tanggalwaktu`) VALUES
(6, 2500, 50005887, '2019-01-08 09:40:58'),
(7, 2500, 50005888, '2019-01-08 09:40:58'),
(8, 2500, 50005889, '2019-01-08 09:40:58'),
(9, 2500, 50006886, '2019-01-08 09:40:58'),
(20, 2500, 50005891, '2019-01-08 16:14:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `splitting_task`
--

CREATE TABLE `splitting_task` (
  `id_splitting` int(11) NOT NULL,
  `pmrev` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pm` int(11) NOT NULL,
  `unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subgroup` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` int(11) NOT NULL,
  `pn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `an` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `uom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_rop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `splitting_task`
--

INSERT INTO `splitting_task` (`id_splitting`, `pmrev`, `pm`, `unit`, `group_name`, `group_description`, `subgroup`, `task_description`, `item`, `pn`, `an`, `qty`, `uom`, `update_rop`) VALUES
(2, 'CBM', 2500, 'VE', 'A2', 'GANTI RAIL TEFLON', 'A2.1', 'RAIL TEFLON', 3, '4DR16', '398142800000', 3, 'Pcs', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `level` enum('superadmin','supervisor','admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_pegawai`, `nama_pegawai`, `alamat`, `username`, `password`, `foto`, `level`) VALUES
(1, 'Prasetyo Wicaksonoh', 'Ponogoro sini', 'pras', '0079fcb602361af76c4fd616d60f9414', 'ah.jpg', 'superadmin'),
(2, 'panjul', 'dinoyo', 'panjul', '5d94f87882682ed36cfefe6efdda937c', NULL, 'supervisor'),
(3, 'galih', 'bedali', 'galih', '027dc74f0bbf09a61a36ec7f0d9e08ca', NULL, 'admin'),
(4, 'dendy', 'malang', 'dendy', '43bb27fea7752340a3c1cd599ddf43e3', NULL, 'user'),
(5, 'galeh', 'bedali', 'galeh', '5c1f8938f9d1768287ab2399ef9e9c93', '', 'superadmin'),
(6, 'Nurhadi Aldo', 'jl.', 'santuy', 'ebdba98b0979ca4ae6541a158fdc92de', 'p2hwXpZ4_400x400.jpg', 'admin'),
(7, 'tes', 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'Welcome_Scan.jpg', 'user'),
(8, 'coba', 'coba', 'coba', 'c20ad4d76fe97759aa27a0c99bff6710', '', 'supervisor'),
(10, 'ya', 'ya', 'ya', 'd74600e380dbf727f67113fd71669d88', 'amild1.png', 'supervisor'),
(11, 'yuyu', 'yuyu', 'yuyu', 'f34d07b202eaeadf913468e95d7fcb86', '', 'admin'),
(12, 'galihh', 'galihh', 'galihh', '2d08d56c51e49b53cc75f59078e44b1a', '', 'superadmin'),
(13, 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', '', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id_equipment`);

--
-- Indexes for table `runtime`
--
ALTER TABLE `runtime`
  ADD PRIMARY KEY (`id_runtime`),
  ADD KEY `id_unit` (`id_equipment`);

--
-- Indexes for table `splitting_task`
--
ALTER TABLE `splitting_task`
  ADD PRIMARY KEY (`id_splitting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `runtime`
--
ALTER TABLE `runtime`
  MODIFY `id_runtime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `splitting_task`
--
ALTER TABLE `splitting_task`
  MODIFY `id_splitting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `runtime`
--
ALTER TABLE `runtime`
  ADD CONSTRAINT `runtime_ibfk_1` FOREIGN KEY (`id_equipment`) REFERENCES `machine` (`id_equipment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
