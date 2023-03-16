-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2023 pada 13.42
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perhutani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `nama`, `email`, `no_ktp`, `instansi`, `no_telepon`, `status`, `tanggal`) VALUES
(2, 'user1', 'user@gmail.com', 3824027, 'PT. user', 832342346, 'Tolak', '0000-00-00'),
(3, 'user2', 'user2@gmail.com', 2147483647, 'pt.user2', 2147483647, 'Terima', '2023-12-28'),
(4, 'user3', 'user3@gmail.com', 283928, 'pt user 3', 2384234, 'Proses', '2023-11-21'),
(5, 'user4', 'user4@gmail.com', 2147483647, 'pt user4', 3489234, 'Terima', '2023-06-30'),
(6, 'user', 'user@gmail.com', 2931, 'sdfsdnm', 30829434, 'Proses', '2023-04-05'),
(7, 'user5', 'user5@gmail.com', 283798234, 'sfkej', 345, 'Terima', '2023-05-03'),
(8, 'user6', 'user6@gmail.com', 2147483647, 'Cv. User6', 2147483647, 'Terima', '2023-04-12'),
(10, 'user7', 'user7@gmail.com', 2147483647, 'Cv.User7', 2147483647, 'Tolak', '2023-02-19'),
(11, 'khu', 'jhjk@gmail.com', 65679, 'dhgjg', 4567, 'Tolak', '2023-02-28'),
(12, 'user8', 'user8@gmail.com', 33212334, 'cv.propo', 2903828, 'proses', '2023-02-25'),
(13, 'Mr.A', 'a@gmail.com', 2147483647, 'PT.a', 2147483647, 'Proses', '2023-03-01'),
(14, 'siti', 'siti@gmail.com', 2147483647, 'pt. c', 85684322, 'proses', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_opset`
--

CREATE TABLE `tbl_opset` (
  `id_aset` int(11) NOT NULL,
  `kode_aset` varchar(255) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) DEFAULT NULL,
  `tahun_bangunan` int(11) DEFAULT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `kategori_aset` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_opset`
--

INSERT INTO `tbl_opset` (`id_aset`, `kode_aset`, `nama_aset`, `alamat`, `luas_bangunan`, `tahun_bangunan`, `luas_tanah`, `kategori_aset`, `keterangan`, `images`) VALUES
(1, 'RM09238', 'Rumah', 'Jln.Rumah', '5x 6 M', 2001, '6x7M', 'bangunan', 'Dikontrakkan', 'http://localhost:8080/backend/uploads/files/1jltkfm_yog2bxp.png'),
(2, 'A001', 'Menara Eifel', 'johar', '20x10', 2001, '10x5', 'bangunan', 'dgthjukj', 'http://localhost:8080/backendopset/uploads/files/n17uye9x5jm_kli.jpg'),
(4, 'A011', 'Krusty Crab', 'bawah laut', '20x10', 1234, '10x1', 'Bangunan', 'dhjihgfdsh', 'http://localhost:8080/backendopset/uploads/files/mazf3vxu4i6nj7b.jpg'),
(5, 'T2093', 'Kebun Sawit', 'Jln. Sawit', '-', 0, '4 Hektar', 'tanah', 'Diii', 'http://localhost:8080/opsetbackend/uploads/files/tjskonhuer9w7db.jpg,http://localhost:8080/opsetbackend/uploads/files/s1fgwmkuxdb2tlz.jpg,http://localhost:8080/opsetbackend/uploads/files/89lqch07pnk_doj.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `npk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `images` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2023-05-24 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`npk`, `nama`, `alamat`, `jenis_kelamin`, `email`, `password`, `images`, `role`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
('12381623', 'user1', 'jln.user', 'perempuan', 'user@gmail.com', '$2y$10$zwOQiSoa6ziJkHjBRhf8TOo/k31Arm0NMl1PI280N0IYBLKozB.Be', 'http://localhost:8080/opsetbackend/uploads/files/oh4g7xctv9awr3n.png', 'user', NULL, NULL, '2023-05-24 00:00:00', NULL),
('23342', 'divrejateng', 'jln.jateng', 'laki-laki', 'divrejateng@gmail.com', '$2y$10$zcaskcAifQyNiVvXO3GsbOP1qRcibSMKtGqcWhbwjmTjPPvFAAR7.', 'http://localhost:8080/opsetbackend/uploads/files/g1_3ki9hs65ewry.png', 'Super Admin', 'cfdd868318b3ce7204bbd2a1df63ad1b', NULL, '2023-05-24 00:00:00', NULL),
('331229665123', 'Admin1', 'jln. admin', 'laki-laki', 'admin@gmail.com', '$2y$10$dgMQ7tPHgeGBOtEmWv93weXqk5NtBy7PJqQyKhzTRo23wAiq5ZeEe', 'http://localhost:8080/opsetbackend/uploads/files/yl4twva_mnog261.png', 'admin', NULL, NULL, '2023-05-24 00:00:00', NULL),
('9827372364', 'Admin2', 'Jln.Admin2', 'laki-laki', 'admin2@gmail.com', '$2y$10$fVwOE1L5oNRUgUxgWfmGGemauIEdv8d2XIn2dH7Jt7yQfvDD3p76q', 'http://localhost:8080/opsetbackend/uploads/files/ysjtb9ri2x6pnd5.png', 'Admin', NULL, NULL, '2023-05-24 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `tbl_opset`
--
ALTER TABLE `tbl_opset`
  ADD PRIMARY KEY (`id_aset`),
  ADD UNIQUE KEY `kode_aset` (`kode_aset`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`npk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_opset`
--
ALTER TABLE `tbl_opset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
