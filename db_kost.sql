-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 04.38
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigt2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosts`
--

CREATE TABLE `kosts` (
  `id` smallint(6) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `tersedia` tinyint(4) NOT NULL,
  `status` enum('laki-laki','perempuan') NOT NULL,
  `harga` int(20) NOT NULL,
  `pengunjung` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kosts`
--

INSERT INTO `kosts` (`id`, `nama`, `alamat`, `latitude`, `longitude`, `tersedia`, `status`, `harga`, `pengunjung`) VALUES
(1, 'Alfa Kost', 'Gg. Putri, Simpang Baru, Kec. Tampan, Kota Pekanbaru', 0.475039, 101.373, 3, 'laki-laki', 250000, 0),
(2, 'Kost Putri 4 Bersaud', 'Jalan Mawar, Gg. Putri Panam No.2, Simpang Baru, K', 0.477859, 101.374, 3, 'laki-laki', 280000, 0),
(3, 'Kost Putri Kamboja', 'Jl. Kamboja Jl. Bangau Sakti, Simpang Baru, Kec. T', 0.481739, 101.375, 4, 'laki-laki', 270000, 0),
(4, 'Kost Panam Alkahfi', 'JL Mukhsinin no 24 B, Panam, Tuah Karya, Kec. Tamp', 0.472469, 101.385, 4, 'laki-laki', 250000, 0),
(5, 'Zifer Kost Panam', 'Jl. HR. Soebrantas No.11, Delima, Kec. Tampan, Kot', 0.472745, 101.388, 6, 'laki-laki', 290000, 0),
(6, 'Kost Nasya 1', 'jl. Tuah karya, Perumahan Royal Permata Hijau Blok', 0.465342, 101.398, 4, 'laki-laki', 310000, 0),
(7, 'Kost Putri Jingga Ka', 'Jl. Buluh Cina panam, Tuah Karya, Kec. Tampan, Kot', 0.463362, 101.391, 5, 'perempuan', 290000, 0),
(8, 'Kost Putri Mandala', 'Jl. Tuah Karya, Tuah Karya, Kec. Tampan, Kota Peka', 0.459425, 101.376, 3, 'laki-laki', 330000, 0),
(9, 'Kost Putra Panam Ray', 'Jl. Binakrida UNRI No.Kelurahan, Simpang Baru, Kec', 0.457623, 101.385, 2, 'laki-laki', 300000, 0),
(10, 'Kost Pria', 'F95G+C65, Tuah Karya, Tampan, Pekanbaru City, Riau', 0.469236, 101.363, 3, 'laki-laki', 280000, 0),
(11, 'De\'Kost Panam', 'Di belakang Rs. Awal Bros Panam, Jl. HR. Subrantas', 0.461427, 101.37, 1, 'perempuan', 310000, 0),
(12, 'Kos Putra Rizki', 'Perumahan Villa Pesona Panam Blok J11, Jalan HR. S', 0.458616, 101.353, 4, 'laki-laki', 280000, 0),
(13, 'kos baru', '', -0.511716, 101.438, 3, 'perempuan', 300000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('admin','guest') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kosts`
--
ALTER TABLE `kosts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kosts`
--
ALTER TABLE `kosts`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
