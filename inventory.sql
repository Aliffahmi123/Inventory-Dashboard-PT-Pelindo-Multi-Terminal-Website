-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2024 pada 03.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('admin', 'adminspmt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brg_keluar`
--

CREATE TABLE `brg_keluar` (
  `id` int(200) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `tipe_brg` varchar(200) NOT NULL,
  `kualitas_brg` enum('Baik','Sedang','Buruk') DEFAULT NULL,
  `tgl` date NOT NULL,
  `jlh_brg` int(11) NOT NULL DEFAULT 1,
  `serial_num` varchar(200) NOT NULL,
  `nama_penginput` varchar(200) NOT NULL,
  `nama_divisi` varchar(200) NOT NULL,
  `nama_branch` varchar(200) NOT NULL,
  `gbr` varchar(200) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `brg_keluar`
--

INSERT INTO `brg_keluar` (`id`, `nama_brg`, `tipe_brg`, `kualitas_brg`, `tgl`, `jlh_brg`, `serial_num`, `nama_penginput`, `nama_divisi`, `nama_branch`, `gbr`, `ket`) VALUES
(1, 'jashdbnjsidcj', 'sidh', 'Sedang', '2024-01-19', 18, 'kasjdkasjd', 'sjdnbca', 'ajshcb', 'ajshxcb', '', 'ajshdb'),
(2, 'jashdbnjsidcj', 'sidh', 'Sedang', '2024-01-19', 18, 'kasjdkasjd', 'sjdnbca', 'ajshcb', 'ajshxcb', '', 'ajshdb'),
(3, '8u7', '987987', 'Sedang', '2024-01-15', 98, '098', '98', '98', '987', '', '987');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brg_masuk`
--

CREATE TABLE `brg_masuk` (
  `id` int(200) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `tipe_brg` varchar(200) NOT NULL,
  `kualitas_brg` enum('Baik','Sedang','Buruk') DEFAULT NULL,
  `tgl` date NOT NULL,
  `serial_num` varchar(200) NOT NULL,
  `jlh_brg` int(11) NOT NULL DEFAULT 1,
  `satuan` varchar(200) NOT NULL,
  `gbr` varchar(200) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `brg_masuk`
--

INSERT INTO `brg_masuk` (`id`, `nama_brg`, `tipe_brg`, `kualitas_brg`, `tgl`, `serial_num`, `jlh_brg`, `satuan`, `gbr`, `ket`) VALUES
(117, 'alep', 'alep', '', '2024-01-17', 'alep', 0, 'alep', '14.jpg', ''),
(119, 'hal982', 'hal', '', '2024-01-24', 'hal', 19823, 'halo', '12.jpg', 'jhgfc'),
(120, 'hgs', 'jhsg', 'Sedang', '2024-01-24', 'jhg', 9871, '987', '', '98y'),
(122, '987', '87', 'Sedang', '2024-02-02', '987', 987, '89876', '', '9876'),
(123, '87', '987', 'Sedang', '2024-02-07', '987', 87, '87', '', '87'),
(129, '87uy', '7y87', 'Baik', '2024-01-26', '987', 987, '87', '', '87'),
(130, '876', '87', 'Sedang', '2024-01-25', '987', 876, '87', '', '987Y'),
(131, 'hhahahha', '9876', 'Sedang', '2024-01-26', '876', 876, '876', '', '9a8ys'),
(132, 'leptop', 'uyt', '', '2024-01-24', '9827', 9876, '9876', 'pngwing.com.png', 'jytf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brg_pinjaman`
--

CREATE TABLE `brg_pinjaman` (
  `id` int(11) NOT NULL,
  `nipp` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `nama_brg` varchar(200) DEFAULT NULL,
  `tipe_brg` varchar(200) NOT NULL,
  `kualitas_brg` enum('Baik','Sedang','Buruk') DEFAULT NULL,
  `tgl` date NOT NULL,
  `serial_num` varchar(200) NOT NULL,
  `jlh_brg` int(11) NOT NULL DEFAULT 1,
  `nama_divisi` varchar(200) NOT NULL,
  `nama_branch` varchar(200) NOT NULL,
  `gbr` varchar(200) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `brg_pinjaman`
--

INSERT INTO `brg_pinjaman` (`id`, `nipp`, `nama_user`, `nama_brg`, `tipe_brg`, `kualitas_brg`, `tgl`, `serial_num`, `jlh_brg`, `nama_divisi`, `nama_branch`, `gbr`, `ket`) VALUES
(12678, 0, 'alep', 'alep', 'Baik', '', '0000-00-00', '9872', 0, 'skjL', 'LSKJDH', 'plnd.png', 'IAUSH'),
(817722662, 12356, 'laptop', 'jsxkk', 'Buruk', 'Sedang', '2024-02-09', '982763hj', 0, '0987', '987', '11.jpg', 'kjh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brg_rusak`
--

CREATE TABLE `brg_rusak` (
  `id` int(200) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `tipe_brg` varchar(200) NOT NULL,
  `jlh_brg` int(11) NOT NULL DEFAULT 1,
  `kualitas_brg` enum('Rusak Biasa','Butuh Perbaikan') DEFAULT NULL,
  `tgl` date NOT NULL,
  `serial_num` varchar(200) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `nama_divisi` varchar(200) NOT NULL,
  `nama_branch` varchar(200) NOT NULL,
  `gbr` blob DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `date_time` date NOT NULL,
  `checkbox` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `todos`
--

INSERT INTO `todos` (`id`, `title`, `isi`, `date_time`, `checkbox`) VALUES
(2, 'Penundaan Pengembalian Oleh Bu serevina', 'diperkirakan tanggal 7 februari baru akan dikembalikan', '0000-00-00', 0),
(3, 'hag', 'jahgs', '0000-00-00', 0),
(4, 'halooo', 'halo', '0000-00-00', 0),
(5, 'halooo', 'halo', '0000-00-00', 0),
(6, 'halooo', 'halo', '0000-00-00', 0),
(7, 'haloaaa', 'jaksjnj', '0000-00-00', 0),
(20, 'nama ku alif', 'haii', '0000-00-00', 0),
(21, 'uaysg', 'iuaysg', '2024-02-21', 0),
(22, 'uaysg', 'iuaysg', '2024-02-21', 0),
(23, 'uaysg', 'iuaysg', '2024-02-21', 0),
(24, 'uaysg', 'iuaysg', '2024-02-21', 0),
(25, 'uaysg', 'iuaysg', '2024-02-21', 0),
(26, 'jhagv', '\r\njhsx', '2024-02-01', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `brg_keluar`
--
ALTER TABLE `brg_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brg_masuk`
--
ALTER TABLE `brg_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brg_pinjaman`
--
ALTER TABLE `brg_pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brg_rusak`
--
ALTER TABLE `brg_rusak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `brg_keluar`
--
ALTER TABLE `brg_keluar`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `brg_masuk`
--
ALTER TABLE `brg_masuk`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `brg_pinjaman`
--
ALTER TABLE `brg_pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=817722663;

--
-- AUTO_INCREMENT untuk tabel `brg_rusak`
--
ALTER TABLE `brg_rusak`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
