-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2018 pada 21.36
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6701174032`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `programstudi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `mottohidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nama`, `nim`, `jeniskelamin`, `programstudi`, `fakultas`, `asal`, `mottohidup`) VALUES
('fitt', '101', 'Laki - Laki', 'MBTI', 'Fakultas Komunikasi Bisnis', 'sumedang', 'ealah'),
('egh', '1234567890', 'Laki - Laki', 'Sistem Informasi', 'Fakultas Ilmu Terapan', 'sumedang', 'ealah'),
('Sri Fitriana Ramadhini', '6701174032', 'Perempuan', 'Sistem Informasi', 'Fakultas Ilmu Terapan', 'sumedang', 'ealah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
