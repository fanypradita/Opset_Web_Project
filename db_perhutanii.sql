-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2023 pada 08.05
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perhutanii`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `kode_aset` varchar(50) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_bangunan` varchar(50) NOT NULL,
  `luas_tanah` varchar(50) NOT NULL,
  `tahun_bangunan` int(10) NOT NULL,
  `kategori_aset` varchar(255) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` int(50) NOT NULL,
  `noktp` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_customer`
--

INSERT INTO `tbl_customer` (`username`, `nama`, `tgl_lahir`, `jk`, `alamat`, `nohp`, `noktp`, `email`, `password`, `foto`) VALUES
('arfido1', '', '0000-00-00', '', '', 0, 0, 'ard@gmail.com', '4ce0bec67fe735f4997426101dd5292b', ''),
('arfido12', '', '0000-00-00', '', '', 0, 0, 'arfido@gmail.com', '01262f3c54b53a84bda0ebbaeb0519cc', ''),
('arr1', '', '0000-00-00', '', '', 0, 0, 'arr@gmail.com', '47c80780ab608cc046f2a6e6f071feb6', ''),
('dopi', '', '0000-00-00', '', '', 0, 0, 'ara@gmail.com', '4ce0bec67fe735f4997426101dd5292b', ''),
('dopi1', '', '0000-00-00', '', '', 0, 0, 'dopi@gmail.com', 'a0942a01bfab5fba1bee5ba3ddf17605', ''),
('dopi2', '', '0000-00-00', '', '', 0, 0, 'ar@gmail.com', 'c582dec943ff7b743aa0691df291cea6', ''),
('lambang12', '', '0000-00-00', '', '', 0, 0, 'lambang@gmail.com', '1c6d6ca22cc31cb79e6e1f5277ef06e0', ''),
('mut', '', '0000-00-00', '', '', 0, 0, 'mut@gmail.com', 'd7304e43ecdabb4efa0636d51408ca80', ''),
('sam', '', '0000-00-00', '', '', 0, 0, 'sam@gmail.com', '332532dcfaa1cbf61e2a266bd723612c', ''),
('sasa', '', '0000-00-00', '', '', 0, 0, 'sasa@gmail.com', 'f45731e3d39a1b2330bbf93e9b3de59e', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_aset`
--
ALTER TABLE `tbl_aset`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indeks untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
