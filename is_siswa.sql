-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2019 pada 14.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_siswa`
--

CREATE TABLE `is_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `idline` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `is_siswa`
--

INSERT INTO `is_siswa` (`id`, `nama`, `jurusan`, `prodi`, `no_telepon`, `idline`, `status`) VALUES
(13, 'dwi', 'Teknik Mesin', 'Teknik Mesin Produksi dan Perawatan (S.Tr)', '085826628071', 'nfsdkj', 0),
(14, 'Hapsari', 'Teknik Mesin', 'Teknik Mesin Produksi dan Perawatan (S.Tr)', '085826628071', 'Hapsari', 0),
(15, 'Ilham', 'Teknik Sipil', 'Teknik Perawatan dan Perbaikan Gedung (S.Tr)', '087700152265', 'Bsnsn', 0),
(16, 'Haha', 'Administrasi Bisnis', 'Administrasi Bisnis (D3)', '0899273517', 'Skssmssm', 0),
(17, 'Jsjzj', 'Akuntansi', 'Komputerisasi Akuntansi (S.Tr)', 'Snsjsn', 'Nznznz', 0),
(18, 'Cff', 'Teknik Elektro', 'Teknik Telekomunikasi (S.Tr)', 'Ee', '-', 0),
(19, 'Hapsari', 'Teknik Elektro', 'Teknik Telekomunikasi (S.Tr)', '082826628071', 'Hapsari', 0),
(20, 'Ilham Budi Prasetyo', 'Teknik Elektro', 'Teknik Telekomunikasi (S.Tr)', '087700152265', 'ilham77', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `is_siswa`
--
ALTER TABLE `is_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `is_siswa`
--
ALTER TABLE `is_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
